<?php
namespace Controller;

use App\Domain\Entity\TipoTratamiento;
use Slim\Http\Response;

class Treatment extends Main
{
    public function get($request, $response, $args)
    {
        $query = $this->_em->createQueryBuilder();
        $query->select('a')
            ->from('App\Domain\Entity\TipoTratamiento', 'a')
            ->where($query->expr()->eq('a.id', $args['treatmentId']));

        $results = $query->getQuery()->getArrayResult();
        return $this->returnResponse($results, 'json');
    }

    public function getAll($request, $response, $args)
    {
        $query = $this->_em->createQueryBuilder();
        $query->select('a')
            ->from('App\Domain\Entity\TipoTratamiento', 'a');

        $results = $query->getQuery()->getArrayResult();
        return $this->returnResponse($results, 'json');
    }

    public function save($request, $response, $args) {
        if ($request->getParam('treatmentId') === null) {
            $treatment = new TipoTratamiento();
        } else {
            $treatment = $this->_em->getRepository('App\Domain\Entity\TipoTratamiento')
                ->find($request->getParam('treatmentId'));
        }
        $treatment->setTratamiento($request->getParam('treatment'));
        $treatment->setTipo($request->getParam('type'));
        $this->_em->persist($treatment);
        $this->_em->flush();

        $result = array(
            'message' => 'Se ha guardado correctamente el tratamiento'
        );

        return $this->returnResponse($result, 'json');
    }

    public function remove($request, $response, $args) {
        $treatment = $this->_em->getRepository('App\Domain\Entity\TipoTratamiento')->find($args['treatmentId']);
        $this->_em->remove($treatment);
        $this->_em->flush();

        $result = array(
            'message' => 'Se ha borrado correctamente el tratamiento'
        );

        return $this->returnResponse($result, 'json');
    }
}

