<?php
namespace Controller;

use Interop\Container\ContainerInterface;
use Slim\Http\Response;

class Main
{
    /**
     * @var $_em
     */
    protected $_em;

    /**
     * var ContainerInterface $ci
     */
    protected $_ci;

    /**
     * __construct
     *
     * @param ContainerInterface $ci
     * @return void
     */
    public function __construct(ContainerInterface $ci)
    {
        $this->_ci = $ci;
        $this->_em = $ci->em;
    }

    protected function returnResponse($data, $format) {
        $response = new Response();
        switch ($format) {
            default:
                $toXml = new \SimpleXMLElement("<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?><results></results>");
                $common = $this->_ci->get('a2x');
                $common->array_to_xml($data, $toXml);
                $view = $this->_ci->get('renderer');
                $xml = $toXml->asXML();
                $dom = new \DOMDocument('1.0');
                $dom->preserveWhiteSpace = false;
                $dom->loadXML($xml);
                $dom->formatOutput = true;
                $response = $view->render(
                    $response,
                    "main.phtml",
                    array(
                        "xml" => $dom->saveXML(),
                        'json' => json_encode($data)
                    )
                );
                return $response;
                break;
            case 'json':
                $response = $response->withJson($data);
                return $response;
                break;
            case 'xml':
                $response = $response->withHeader('Content-type', 'text/xml');
                $toXml = new \SimpleXMLElement("<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?><results></results>");
                $common = $this->_ci->get('a2x');
                $common->array_to_xml($data, $toXml);
                return $response->write($toXml->asXML());
        }
    }
}
