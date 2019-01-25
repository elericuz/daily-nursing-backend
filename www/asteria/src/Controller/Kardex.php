<?php
namespace Controller;

use App\Domain\Entity\Medicina;
use Doctrine\ORM\Query\AST\Join;
use Doctrine\ORM\Query\Expr;

class Kardex extends Main
{
    public function get($request, $response, $args)
    {
        $query = $this->_em->createQueryBuilder();
        $query->select(
            array(
                'a.id',
                'a.medicina',
                'a.dosis',
                'a.fecha',
                'c.id as via',
                'a.estado'
            ))
            ->from('App\Domain\Entity\Medicina', 'a')
            ->innerJoin('App\Domain\Entity\Paciente', 'b', Expr\Join::WITH, $query->expr()->eq('a.cpac', 'b.cpac'))
            ->innerJoin('App\Domain\Entity\MedicinaVia', 'c', Expr\Join::WITH, $query->expr()->eq('a.idVia', 'c.id'))
            ->where($query->expr()->eq('a.id', $args['medicineId']));

        $results = $query->getQuery()->getArrayResult();
        return $this->returnResponse($results, 'json');
    }

    public function getAll($request, $response, $args)
    {
        $currentDay = new \DateTime($request->getParams()['currentDate']);
        $currentDay = $currentDay->format("Ymd");

        $startDay = $currentDay . "000000";
        $endDay = $currentDay . "235959";

        $query = $this->_em->createQueryBuilder();
        $query->select(
            array(
                'a.id',
                'b.cpac',
                'a.medicina',
                'a.dosis',
                'a.fecha',
                'c.via',
                'a.estado'
            ))
            ->from('App\Domain\Entity\Medicina', 'a')
            ->innerJoin('App\Domain\Entity\Paciente', 'b', Expr\Join::WITH, $query->expr()->eq('a.cpac', 'b.cpac'))
            ->innerJoin('App\Domain\Entity\MedicinaVia', 'c', Expr\Join::WITH, $query->expr()->eq('a.idVia', 'c.id'))
            ->where(
                $query->expr()->andX(
                    $query->expr()->eq('a.estado', 1),
                    $query->expr()->eq('b.cpac', ':cpac'),
                    $query->expr()->between('a.fecha', ':startDate', ':endDate')
                )
            )
            ->setParameters(
                array(
                    ':cpac' => $args['patientId'],
                    ':startDate' => $startDay,
                    ':endDate' => $endDay
                )
            );

        $results = array();
        foreach ($query->getQuery()->getArrayResult() as $values) {
            $values['fecha'] = date("d-m-Y H:i:s", $values['fecha']->getTimestamp());
            $results[] = $values;
        }
        return $this->returnResponse($results, 'json');
    }

    public function save($request, $response, $args) {
        $currentDay = new \DateTime($request->getParams()['currentDate']);
        $currentDay = $currentDay->format("YmdHis");

        $patientId = $this->_em->getRepository('App\Domain\Entity\Paciente')->find($request->getParam('patientId'));
        $via = $this->_em->getRepository('App\Domain\Entity\MedicinaVia')->find($request->getParam('idVia'));

        if ($request->getParam('medicineId') === null) {
            $medicine = new Medicina();
            $medicine->setCpac($patientId);
        } else {
            $medicine = $this->_em->getRepository('App\Domain\Entity\Medicina')
                ->findBy(
                    array(
                        'id' => $request->getParam('medicineId'),
                        'cpac' => $patientId
                    )
                );
        }
        $medicine->setMedicina($request->getParam('medicine'));
        $medicine->setIdVia($via);
        $medicine->setFecha(new \DateTime($currentDay));
        $medicine->setDosis($request->getParam('dosis'));
        $this->_em->persist($medicine);
        $this->_em->flush();

        $result = array(
            'message' => 'Se ha guardado correctamente la medicina'
        );

        return $this->returnResponse($result, 'json');
    }

    public function remove($request, $response, $args) {
        $medicina = $this->_em->getRepository('App\Domain\Entity\Medicina')->find($args['medicineId']);
        $medicina->setEstatus(0);
        $this->_em->persist($medicina);
        $this->_em->flush();

        $result = array(
            'message' => 'Se ha borrado correctamente la medicina'
        );

        return $this->returnResponse($result, 'json');
    }
}

