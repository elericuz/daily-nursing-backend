<?php
namespace Controller;

use App\Domain\Entity\AtencionPaciente;
use App\Domain\Entity\BalanceHidrico;
use App\Domain\Entity\ObservacionAtencionPaciente;
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
                    'id' => trim($patient['cpac']),
                    'first_name' => trim($patient['nombres']),
                    'last_name' => trim($patient['apepaterno'])
                );
            }
        }

        return $this->returnResponse($allPatients, 'json');
    }

    public function getProfile($request, $response, $args)
    {
        $query = $this->_em->createQueryBuilder();
        $query->select('a')
              ->from('App\Domain\Entity\Paciente', 'a')
              ->where($query->expr()->eq('a.cpac', ':cpac'))
              ->setParameter(':cpac', $args['patientId']);

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
                          $query->expr()->eq('a.cpac', ':cpac')
                      )
                  )
                  ->setParameters(array(
                      ':fecha' => new \DateTime($currentDay),
                      ':procedimiento' => $procedure->getId(),
                      ':cpac' => $args['patientId']
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

        foreach($income as $value) {
            $query = $this->_em->createQueryBuilder();
            $query->select('a')
                  ->from('App\Domain\Entity\BalanceHidrico', 'a')
                  ->where(
                      $query->expr()->andX(
                          $query->expr()->eq('a.fecha', ':fecha'),
                          $query->expr()->eq('a.idTipoTratamiento', ':tratamiento'),
                          $query->expr()->eq('a.cpac', ':cpac')
                      )
                  )
                  ->setParameters(array(
                      ':fecha' => new \DateTime($currentDay),
                      ':tratamiento' => $value->getId(),
                      ':cpac' => $args['patientId']
                  ));

            $results = $query->getQuery()->getArrayResult();

            $turns = array(
                '8am2pm' => array(),
                '2pm8pm' => array(),
                '8pm2am' => array(),
                '2am8am' => array(),
            );
            foreach ($results as $val) {
                $turns[$val['hora']] = array(
                    'hour' => $val['hora'],
                    'value' => $val['valor']
                );
            }

            $incomeTreatement[] = array(
                'id' => $value->getId(),
                'treatement' => $value->getTratamiento(),
                'turns' => $turns
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
                          $query->expr()->eq('a.cpac', ':cpac')
                      )
                  )
                  ->setParameters(array(
                      ':fecha' => new \DateTime($currentDay),
                      ':tratamiento' => $value->getId(),
                      ':cpac' => $args['patientId']
                  ));

            $results = $query->getQuery()->getArrayResult();

            $turns = array(
                '8am2pm' => array(),
                '2pm8pm' => array(),
                '8pm2am' => array(),
                '2am8am' => array(),
            );
            foreach ($results as $val) {
                $turns[$val['hora']] = array(
                    'hour' => $val['hora'],
                    'value' => $val['valor']
                );
            }

            $outcomeTreatement[] = array(
                'id' => $value->getId(),
                'treatement' => $value->getTratamiento(),
                'turns' => $turns
            );
        }


        return $this->returnResponse(array('income' => $incomeTreatement, 'outcome' => $outcomeTreatement), 'json');
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
                      $query->expr()->eq('a.cpac', ':cpac'),
                      $query->expr()->eq('a.turno', ':turno'),
                      $query->expr()->eq('a.fecha', ':fecha')
                  )
              )
              ->setParameters(array(
                  ':cpac' => $args['patientId'],
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
                      $query->expr()->eq('a.cpac', ':cpac'),
                      $query->expr()->eq('a.turno', ':turno'),
                      $query->expr()->eq('a.fecha', ':fecha')
                  )
              )
              ->setParameters(array(
                  ':cpac' => $args['patientId'],
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
        $attemp->setCpac($patient);
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
        $patient = $this->_em->getRepository('App\Domain\Entity\Paciente')
            ->find($request->getParam('patientId'));
        $treatmentType = $this->_em->getRepository('App\Domain\Entity\TipoTratamiento')
            ->find($request->getParam('treatment'));

        $balance = new BalanceHidrico();
        $balance->setCpac($patient);
        $balance->setIdTipoTratamiento($treatmentType);
        $balance->setTipo($treatmentType->getTipo());
        $balance->setFecha(new \DateTime($request->getParam('date')));
        $balance->setHora($request->getParam('hour'));
        $balance->setValor($request->getParam('value'));
        $this->_em->persist($balance);
        $this->_em->flush();

        $result = array(
            'message' => 'Se ha guardado correctamente el balance'
        );

        return $this->returnResponse($result, 'json');
    }

    public function saveObservation($request, $response, $args) {
        $patient = $this->_em->getRepository('App\Domain\Entity\Paciente')
            ->find($request->getParam('patientId'));

        $obs = new ObservacionAtencionPaciente();
        $obs->setCpac($patient);
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

