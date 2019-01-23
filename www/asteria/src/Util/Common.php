<?php
namespace Util;

class Common
{
    public function array_to_xml($array, &$toXML) {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                if (!is_numeric($key)) {
                    $subnode = $toXML->addChild("$key");
                    $this->array_to_xml($value, $subnode);
                } else {
                    $subnode = $toXML->addChild("item$key");
                    $this->array_to_xml($value, $subnode);
                }
            }else {
                if (is_numeric($key)) {
                    $toXML->addChild(htmlspecialchars("$value"));
                } else {
                    $toXML->addChild("$key", htmlspecialchars("$value"));
                }
            }
        }
    }
}
