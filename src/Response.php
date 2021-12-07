<?php

namespace SimpleResponse;

class Response {

    const RESPONSE_JSON = 'application/json';
    const RESPONSE_XML = 'application/xml';


    public static function __callStatic($method, $data) {
        return (new static)->$method(...$data);
    }

    public function __call($method, $data) {
        return $this->$method(...$data);
    }

    protected function json($data) {
        \header('Content-type: application/json; chrset=utf-8');
        echo \json_encode($data, JSON_PRETTY_PRINT);
        exit;
    }

    protected function xml($data) {
        \header('Content-Type: application/xml; charset=utf-8');
        $xml_data = new \SimpleXMLElement('<?xml version="1.0"?><data></data>');
        $this->array_to_xml($data, $xml_data);
        echo $xml_data->asXML();
        exit;
    }

    protected function array_to_xml($data, &$xml_data) {
        foreach( $data as $key => $value ) {
            if( is_array($value) ) {
                if( is_numeric($key) ){
                    $key = 'item'.$key;
                }
                $subnode = $xml_data->addChild($key);
                $this->array_to_xml($value, $subnode);
            } else {
                $xml_data->addChild("$key",htmlspecialchars("$value"));
            }
         }
    }

    protected function default($data) {
        $header = getallheaders();
        if ($header['Accept'] == self::RESPONSE_JSON) {
            return $this->json($data);
        }
        if ($header['Accept'] == self::RESPONSE_XML) {
            return $this->xml($data);
        }
        return $this->json($data);
    }
}