<?php

if (! function_exists('emailValue')) {
    /**
    * Retorna o valor de uma chave do array recebido pelo email ou a própria chave caso ela não exista
    * @param Array $data o array com as chaves/valor
    * @param String $key a chave
    */
    function emailValue($data, $key, $subkey = null) {
        if(isset($data) and isset($data[$key])) {
            if ($subkey != null) {
                if(isset($data[$key]->$subkey)){
                    return $data[$key]->$subkey;
                } else {
                    return $key.'->'.$subkey;
                }
            } else {
                return $data[$key];
            }
        }
        return $key.($subkey!=null?'->'.$subkey:'');
    }
}
