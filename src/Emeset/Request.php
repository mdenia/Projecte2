<?php
namespace Emeset;
class Request
{

    /**
     * __construct:  Crear el petició http
     **/
    public function __construct()
    {
        session_start();
    }

     /**
     * get:  obté un valor de l'entrada especificada amb el filtre indicat
     *
     * @param $input   string identificador de l'entrada.
     * @param $id      string amb la tasca.
     * @param $filtre  int filtre a aplicar
     * @param $options int opcions del filtre si volem un array FILTER_REQUIRE_ARRAY
     **/
    public function get($input, $id, $filter = "FILTER_SANITIZE_STRING", $options = 0)
    {
        $result = false;
        if ($input === 'SESSION') {
            $result = null;
            if (isset($_SESSION[$id])) {
                $result = $_SESSION[$id];
            }
        } elseif ($input === 'FILES') {
            $result = null;
            if (isset($_FILES[$id])) {
                $result = $_FILES[$id];
            }            
        } elseif ($input === "INPUT_REQUEST") {
            $result = null;
            if (isset($_REQUEST[$id])) {
                $var = $_REQUEST[$id];
                if($filter == "FILTER_SANITIZE_STRING"){
                $result = filter_var($var, $filter, $options);
                } else {
                    $result = filter_var($var, $filter, $options);
                }
            }
        } else {
            if($filter == "FILTER_SANITIZE_STRING"){
                $result = filter_input($input, $id, FILTER_DEFAULT, $options);
                if(isset($result)) {
                    $result = htmlspecialchars($result);
                }                
            } else {
                $result = filter_input($input, $id, $filter, $options);
            }
        }
        return $result;
    }

    /**
     * getRaw:  obté un valor de l'entrada especificada sense filtrar
     *
     * @param $input   string identificador de l'entrada.
     * @param $id      string amb la tasca.
     * @param $options int opcions del filtre si volem un array FILTER_REQUIRE_ARRAY
     **/
    public function getRaw($input, $id, $options = 0)
    {
        return $this->get($input, $id, FILTER_DEFAULT, $options);
    }

     /**
     * get:  retorna true si l'entrada especificada existeix i false si no.
     *
     * @param $input   string identificador de l'entrada.
     * @param $id      string amb la tasca.
     * return boolean
     **/
    public function has($input, $id)
    {
        $result = false;
        if ($input === 'SESSION') {
            $result = isset($_SESSION[$id]);
        } elseif ($input === 'FILES') {
            $result = isset($_FILES[$id]);
        } elseif ($input === "INPUT_REQUEST") {
            $result = isset($_REQUEST[$id]);
        } else {
            $result = !is_null(filter_input($input, $id, FILTER_DEFAULT));
        }
        return $result;
    }

    public function isAjax()
    {
        //Comprovem si la petició és AJAX mirant la capçalera HTTP_X_REQUESTED_WITH i si el seu valor és xmlhttprequest
        return !empty($this->has(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH')) && strtolower($this->get(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH')) == 'xmlhttprequest';
    }
}
