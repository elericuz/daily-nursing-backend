<?php
namespace Controller;

use App\Domain\Entity\Procedimiento;

class Procedure extends Main
{
    public function get($request, $response, $args)
    {
        $query = $this->_em->createQueryBuilder();
        $query->select('a')
            ->from('App\Domain\Entity\Procedimiento', 'a')
            ->where($query->expr()->eq('a.id', $args['procedureId']));

        $results = $query->getQuery()->getArrayResult();
        return $this->returnResponse($results, 'json');
    }

    public function getAll($request, $response, $args)
    {
        $query = $this->_em->createQueryBuilder();
        $query->select('a')
            ->from('App\Domain\Entity\Procedimiento', 'a')
            ->where($query->expr()->eq('a.estado', 1));

        $results = $query->getQuery()->getArrayResult();
        return $this->returnResponse($results, 'json');
    }

    public function save($request, $response, $args) {
        if ($request->getParam('procedureId') === null) {
            $procedure = new Procedimiento();
        } else {
            $procedure = $this->_em->getRepository('App\Domain\Entity\Procedimiento')
                ->find($request->getParam('procedureId'));
        }
        $procedure->setProcedimiento($request->getParam('procedure'));
        $this->_em->persist($procedure);
        $this->_em->flush();

        $result = array(
            'message' => 'Se ha guardado correctamente el procedimiento'
        );

        return $this->returnResponse($result, 'json');
    }

    public function remove($request, $response, $args) {
        $procedure = $this->_em->getRepository('App\Domain\Entity\Procedimiento')->find($args['procedureId']);
        $procedure->setEstatus(0);
        $this->_em->persist($procedure);
        $this->_em->flush();

        $result = array(
            'message' => 'Se ha borrado correctamente el procedimiento'
        );

        return $this->returnResponse($result, 'json');
    }
}

