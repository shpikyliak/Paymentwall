<?php


class Answer
{
    public function jsonAnsw($data)
    {
        return json_encode($data);//return answer in json format
    }

    public function XMLAnsw($data)
    {
        $xml = '<?xml version="1.0" encoding="utf-8" ?>';
        $xml .= '<data>';
        $xml .= '<errorlist>';
        foreach ($data as $key => $value) {
            if (!$value) $xml .= '<error>' . $key . '</error>';
        }
        $xml .= '</errorlist>';
        $xml .= '<successlist>';
        foreach ($data as $key => $value) {
            if ($value) $xml .= '<success>' . $key . '</success>';
        }
        $xml .= '</successlist>';
        $xml.='</data>';


        return $xml;
    }

}