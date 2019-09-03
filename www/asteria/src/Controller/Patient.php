<?php
namespace Controller;

use App\Domain\Entity\AtencionPaciente;
use App\Domain\Entity\BalanceHidrico;
use App\Domain\Entity\BalanceHidricoTotal;
use App\Domain\Entity\ObservacionAtencionPaciente;
use App\Domain\Entity\Paciente;
use Slim\Http\Response;

class Patient extends Main
{
    public function getPatients($request, $response, $args) {
        $query = $this->_em->createQueryBuilder();
        $query->select('a')->from('App\Domain\Entity\Paciente', 'a');

        if (isset($args['name'])) {
            $query->where(
                $query->expr()->like('a.xpaciente', $query->expr()->literal('%' . strtoupper($args['name']) . '%'))
            );
        }
        $query->orderBy('a.apepaterno', 'ASC');
        $query->addOrderBy('a.nombres', 'ASC');

        $data = $query->getQuery()->getArrayResult();

        $allPatients = array();
        foreach ($data as $patient) {
            if (strlen(trim($patient['nombres'])) > 0) {
                $allPatients[] = array(
                    'id' => trim($patient['id']),
                    'first_name' => trim($patient['nombres']),
                    'last_name' => trim($patient['apepaterno'])
                );
            }
        }

        return $this->returnResponse($allPatients, 'json');
    }

    private function getLastPatientCode() {
        $query = $this->_em->createQueryBuilder();
        $query->select('a')
              ->from('App\Domain\Entity\Paciente', 'a')
              ->orderBy('a.cpac', 'desc')
              ->setMaxResults(1);

        $data = $query->getQuery()->getArrayResult();

        $lastCode = 0;
        if(!empty($data)) {
            $data = array_shift($data);
            $lastCode = trim($data['cpac'], 'C');
            $lastCode = (int) $lastCode;
        }

        $lastCode++;
        $patientCode = str_pad($lastCode, 5, 0, STR_PAD_LEFT);
        $patientCode = $patientCode . "C";

        return $patientCode;
    }

    private function getPatientAge($birthDate) {
        $birthDate = new \DateTime($birthDate);
        $now = new \DateTime();
        $sinceThen = $birthDate->diff($now);

        return $sinceThen->y;
    }

    public function savePatient($request, $response, $args) {
        $birthDate = new \DateTime($request->getParams()['birthDate']);
        $birthDate = $birthDate->format("Ymd");
        $startDate = new \DateTime($request->getParams()['startDate']);
        $startDate = $startDate->format("Ymd");

        $xpaciente = $request->getParam('name') . " " .
                     $request->getParam('firstLastName') . " " .
                     $request->getParam('secondLastname');

        $patient = new Paciente();
        $patient->setCpac($this->getLastPatientCode());
        $patient->setXpaciente(trim($xpaciente));
        $patient->setNombres($request->getParam('name'));
        $patient->setApepaterno($request->getParam('firstLastName'));
        $patient->setApematerno($request->getParam('secondLastName'));
        $patient->setFechanace(new \DateTime($birthDate));
        $patient->setEdad($this->getPatientAge($request->getParams()['birthDate']));
        $patient->setEmail($request->getParam('email'));
        $patient->setDni($request->getParam('dni'));
        $patient->setSexo($request->getParam('sex'));
        $patient->setTelefono($request->getParam('landLine'));
        $patient->setCelular($request->getParam('mobileLine'));
        $patient->setDireccion($request->getParam('address'));
        $patient->setMedcon($request->getParam('doctor'));
        $patient->setFingreso(new \DateTime($startDate));
        $patient->setEstado("A");
        $patient->setCsede("001");
        $patient->setFchcrea(new \DateTime('now'));

        $this->_em->persist($patient);
        $this->_em->flush();

        $result = array(
            'message' => 'Se ha creado correctamente al paciente'
        );

        return $this->returnResponse($result, 'json');
    }

    public function updatePatient($request, $response, $args) {
        $birthDate = new \DateTime($request->getParams()['birthDate']);
        $birthDate = $birthDate->format("Ymd");
        $startDate = new \DateTime($request->getParams()['startDate']);
        $startDate = $startDate->format("Ymd");

        $xpaciente = $request->getParam('name') . " " .
            $request->getParam('firstLastName') . " " .
            $request->getParam('secondLastname');

        $patient = $this->_em->getRepository('App\Domain\Entity\Paciente')
                        ->find($request->getParam('id'));
        if ($patient instanceof Paciente) {
            $patient->setXpaciente(trim($xpaciente));
            $patient->setNombres($request->getParam('name'));
            $patient->setApepaterno($request->getParam('firstLastName'));
            $patient->setApematerno($request->getParam('secondLastName'));
            $patient->setFechanace(new \DateTime($birthDate));
            $patient->setEdad($this->getPatientAge($request->getParams()['birthDate']));
            $patient->setEmail($request->getParam('email'));
            $patient->setDni($request->getParam('dni'));
            $patient->setSexo($request->getParam('sex'));
            $patient->setTelefono($request->getParam('landLine'));
            $patient->setCelular($request->getParam('mobileLine'));
            $patient->setDireccion($request->getParam('address'));
            $patient->setMedcon($request->getParam('doctor'));
            $patient->setFingreso(new \DateTime($startDate));
            $patient->setEstado("A");
            $patient->setCsede("001");
            $patient->setFchcrea(new \DateTime('now'));

            $this->_em->persist($patient);
            $this->_em->flush();

            $result = array(
                'message' => 'Se ha creado correctamente al paciente'
            );
        } else {
            $result = array(
                'message' => 'No se ha podido actualizar al paciente'
            );
        }

        return $this->returnResponse($result, 'json');
    }

    public function getProfile($request, $response, $args)
    {
        $query = $this->_em->createQueryBuilder();
        $query->select('a')
              ->from('App\Domain\Entity\Paciente', 'a')
              ->where($query->expr()->eq('a.id', ':patient'))
              ->setParameter(':patient', $args['patientId']);

        $results = $query->getQuery()->getArrayResult();
        return $this->returnResponse($results, 'json');
    }

    public function getNurseMonitoring($request, $response, $args) {
        $currentDay = new \DateTime($request->getParams()['currentDate']);
        $currentDay = $currentDay->format("Ymd");

        $procedures = $this->_em->getRepository('App\Domain\Entity\Procedimiento')
                                ->findAll();

        $procedurePatient = array();
        foreach($procedures as $procedure) {
            $query = $this->_em->createQueryBuilder();
            $query->select('a')
                  ->from('App\Domain\Entity\AtencionPaciente', 'a')
                  ->where(
                      $query->expr()->andX(
                          $query->expr()->eq('a.fecha', ':fecha'),
                          $query->expr()->eq('a.idProcedimiento', ':procedimiento'),
                          $query->expr()->eq('a.idPaciente', ':paciente')
                      )
                  )
                  ->setParameters(array(
                      ':fecha' => new \DateTime($currentDay),
                      ':procedimiento' => $procedure->getId(),
                      ':paciente' => $args['patientId']
                  ));

            $results = $query->getQuery()->getArrayResult();

            $turns = array(
                '8am' => array(),
                '10am' => array(),
                '12am' => array(),
                '2pm' => array(),
                '4pm' => array(),
                '6pm' => array(),
                '8pm' => array(),
                '10pm' => array(),
                '12pm' => array(),
                '2am' => array(),
                '4am' => array(),
                '6am' => array()
            );
            foreach($results as $value) {
                $turns[$value['hora']] = array(
                    'hour' => $value['hora'],
                    'value' => $value['valor']
                );
            }

            $procedurePatient[] = array(
                'id' => $procedure->getId(),
                'procedure' => $procedure->getProcedimiento(),
                'turns' => $turns
            );
        }

        return $this->returnResponse($procedurePatient, 'json');
    }

    public function getBalance($request, $response, $args) {
        $incomeTreatement = array();
        $outcomeTreatement = array();

        $currentDay = new \DateTime($request->getParams()['currentDate']);
        $currentDay = $currentDay->format("Ymd");

        $income = $this->_em->getRepository('\App\Domain\Entity\TipoTratamiento')
                            ->findByTipo(1);

        $outcome = $this->_em->getRepository('\App\Domain\Entity\TipoTratamiento')
                             ->findByTipo(2);

        $subTotalVIncome = $subTotalVOutcome = array(
            '8am2pm' => 0,
            '2pm8pm' => 0,
            '8pm2am' => 0,
            '2am8am' => 0,
        );

        foreach($income as $value) {
            $query = $this->_em->createQueryBuilder();
            $query->select('a')
                  ->from('App\Domain\Entity\BalanceHidrico', 'a')
                  ->where(
                      $query->expr()->andX(
                          $query->expr()->eq('a.fecha', ':fecha'),
                          $query->expr()->eq('a.idTipoTratamiento', ':tratamiento'),
                          $query->expr()->eq('a.idPaciente', ':paciente')
                      )
                  )
                  ->groupBy('a.idTipoTratamiento', 'a.hora')
                  ->orderBy('a.id', 'desc')
                  ->setParameters(array(
                      ':fecha' => new \DateTime($currentDay),
                      ':tratamiento' => $value->getId(),
                      ':paciente' => $args['patientId']
                  ));

            $results = $query->getQuery()->getArrayResult();

            $turns = array(
                '8am2pm' => array(),
                '2pm8pm' => array(),
                '8pm2am' => array(),
                '2am8am' => array(),
            );
            $totalH = 0;
            foreach ($results as $val) {
                $turns[$val['hora']] = array(
                    'hour' => $val['hora'],
                    'value' => $val['valor']
                );
                $totalH += $val['valor'];
                $subTotalVIncome[$val['hora']] += $val['valor'];
            }

            $incomeTreatement[] = array(
                'id' => $value->getId(),
                'treatement' => $value->getTratamiento(),
                'turns' => $turns,
                'subTotal' => $totalH
            );
        }

        foreach($outcome as $value) {
            $query = $this->_em->createQueryBuilder();
            $query->select('a')
                  ->from('App\Domain\Entity\BalanceHidrico', 'a')
                  ->where(
                      $query->expr()->andX(
                          $query->expr()->eq('a.fecha', ':fecha'),
                          $query->expr()->eq('a.idTipoTratamiento', ':tratamiento'),
                          $query->expr()->eq('a.idPaciente', ':paciente')
                      )
                  )
                  ->setParameters(array(
                      ':fecha' => new \DateTime($currentDay),
                      ':tratamiento' => $value->getId(),
                      ':paciente' => $args['patientId']
                  ));

            $results = $query->getQuery()->getArrayResult();

            $turns = array(
                '8am2pm' => array(),
                '2pm8pm' => array(),
                '8pm2am' => array(),
                '2am8am' => array(),
            );
            $totalH = 0;
            foreach ($results as $val) {
                $turns[$val['hora']] = array(
                    'hour' => $val['hora'],
                    'value' => $val['valor']
                );
                $totalH += $val['valor'];
                $subTotalVOutcome[$val['hora']] += $val['valor'];
            }

            $outcomeTreatement[] = array(
                'id' => $value->getId(),
                'treatement' => $value->getTratamiento(),
                'turns' => $turns,
                'subTotal' => $totalH
            );
        }


        return $this->returnResponse(array(
            'income' => $incomeTreatement,
            'outcome' => $outcomeTreatement,
            'subTotalVIncome' => $subTotalVIncome,
            'subTotalVOutcome' => $subTotalVOutcome), 'json');
    }

    public function getObservations($request, $response, $args) {
        $currentDay = new \DateTime($request->getParams()['currentDate']);
        $currentDay = $currentDay->format("Ymd");

        $dayTurn = array();
        $nightTurn = array();

        $query = $this->_em->createQueryBuilder();
        $query->select('a')
              ->from('App\Domain\Entity\ObservacionAtencionPaciente', 'a')
              ->where(
                  $query->expr()->andX(
                      $query->expr()->eq('a.idPaciente', ':paciente'),
                      $query->expr()->eq('a.turno', ':turno'),
                      $query->expr()->eq('a.fecha', ':fecha')
                  )
              )
              ->setParameters(array(
                  ':paciente' => $args['patientId'],
                  ':turno' => 1,
                  ':fecha' => new \DateTime($currentDay)
              ));

        $results = $query->getQuery()->getArrayResult();

        foreach($results as $value) {
            $dayTurn[] = array(
                'hour' => $value['hora']->format("d/m/Y h:i a"),
                'observation' => $value['observacion']
            );
        }

        $query = $this->_em->createQueryBuilder();
        $query->select('a')
              ->from('App\Domain\Entity\ObservacionAtencionPaciente', 'a')
              ->where(
                  $query->expr()->andX(
                      $query->expr()->eq('a.idPaciente', ':paciente'),
                      $query->expr()->eq('a.turno', ':turno'),
                      $query->expr()->eq('a.fecha', ':fecha')
                  )
              )
              ->setParameters(array(
                  ':paciente' => $args['patientId'],
                  ':turno' => 2,
                  ':fecha' => new \DateTime($currentDay)
              ));

        $results = $query->getQuery()->getArrayResult();

        foreach($results as $value) {
            $nightTurn[] = array(
                'hour' => $value['hora']->format("d/m/Y h:i a"),
                'observation' => $value['observacion']
            );
        }

        return $this->returnResponse(array('day' => $dayTurn, 'night' => $nightTurn), 'json');
    }

    public function saveNurseMonitoring($request, $response, $args) {
        $patient = $this->_em->getRepository('App\Domain\Entity\Paciente')
                             ->find($request->getParam('patientId'));

        $procedure = $this->_em->getRepository('App\Domain\Entity\Procedimiento')
                               ->find($request->getParam('procedure'));

        $attemp = new AtencionPaciente();
        $attemp->setIdPaciente($patient);
        $attemp->setIdProcedimiento($procedure);
        $attemp->setFecha(new \DateTime($request->getParam('date')));
        $attemp->setHora($request->getParam('hour'));
        $attemp->setValor($request->getParam('value'));
        $this->_em->persist($attemp);
        $this->_em->flush();

        $result = array(
            'message' => 'Se ha guardado correctamente el procedimiento'
        );

        return $this->returnResponse($result, 'json');
    }

    public function saveBalance($request, $response, $args) {
        $currentDay = new \DateTime($request->getParam('date'));
        $currentDay = $currentDay->format("Ymd");

        $patient = $this->_em->getRepository('App\Domain\Entity\Paciente')
            ->find($request->getParam('patientId'));
        $treatmentType = $this->_em->getRepository('App\Domain\Entity\TipoTratamiento')
            ->find($request->getParam('treatment'));

        $balance = new BalanceHidrico();
        $balance->setIdPaciente($patient);
        $balance->setIdTipoTratamiento($treatmentType);
        $balance->setTipo($treatmentType->getTipo());
        $balance->setFecha(new \DateTime($currentDay));
        $balance->setHora($request->getParam('hour'));
        $balance->setValor($request->getParam('value'));
        $this->_em->persist($balance);
        $this->_em->flush();

        $query = $this->_em->createQueryBuilder();
        $query->select('a')
            ->from('App\Domain\Entity\BalanceHidrico', 'a')
            ->where(
                $query->expr()->andX(
                    $query->expr()->eq('a.idPaciente', ':paciente'),
                    $query->expr()->eq('a.tipo', ':tipo'),
                    $query->expr()->eq('a.hora', ':hora'),
                    $query->expr()->eq('a.fecha', ':fecha')
                )
            )
            ->groupBy('a.idTipoTratamiento')
            ->orderBy('a.id', 'desc')
            ->setParameters(array(
                ':paciente' => $request->getParam('patientId'),
                ':tipo' => $treatmentType->getTipo(),
                ':hora' => $request->getParam('hour'),
                ':fecha' => new \DateTime($currentDay)
            ));
        $results = $query->getQuery()->getArrayResult();
        $subtotal = 0;
        foreach($results as $value) {
            $subtotal += $value['valor'];
        }

        $balanceHidricoTotal = new BalanceHidricoTotal();
        $balanceHidricoTotal->setIdPaciente($patient);
        $balanceHidricoTotal->setSubtotal(1);
        $balanceHidricoTotal->setFecha(new \DateTime($request->getParam('date')));
        $balanceHidricoTotal->setHora($request->getParam('hour'));
        $balanceHidricoTotal->setTotal($subtotal);
        $this->_em->persist($balanceHidricoTotal);
        $this->_em->flush();

        $result = array(
            'message' => 'Se ha guardado correctamente el balance',
            'subTotal' => array(
                'hora' => $request->getParam('hour'),
                'fecha' => new \DateTime($currentDay),
                'subtotal' => $subtotal
            )
        );

        return $this->returnResponse($result, 'json');
    }

    public function saveObservation($request, $response, $args) {
        $patient = $this->_em->getRepository('App\Domain\Entity\Paciente')
            ->find($request->getParam('patientId'));

        $obs = new ObservacionAtencionPaciente();
        $obs->setIdPaciente($patient);
        $obs->setTurno($request->getParam('turn'));
        $obs->setFecha(new \DateTime($request->getParam('date')));
        $obs->setHora(new \DateTime('now'));
        $obs->setObservacion($request->getParam('value'));
        $this->_em->persist($obs);
        $this->_em->flush();

        $result = array(
            'message' => 'Se ha guardado correctamente la observación'
        );

        return $this->returnResponse($result, 'json');
    }
}

