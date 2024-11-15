<?php
namespace Emeset;
class Response
{

    public $values = [];
    public $header = false;
    public $path;
    public $template;
    public $redirect = false;
    public $json = false;

    public function __construct($path = "../src/views/")
    {
        $this->path = $path;
    }
    public function set($id, $value)
    {
        $this->values[$id] = $value;
    }
    public function setSession($id, $value)
    {
           $_SESSION[$id] = $value;
    }
    public function unsetSession($id)
    {
        unset($_SESSION[$id]);
    }

    public function setCookie($name, $value = "", $expire = 0, $path = "", $domain = "", $secure = false, $httponly = false)
    {
        setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);
    }
    public function setHeader($header)
    {
        $this->header = $header;
    }
    public function redirect($header)
    {
        $this->setHeader($header);
        $this->redirect = true;
    }
    public function setTemplate($p)
    {
        $this->template = $p;
    }
    public function setJSON()
    {
        $this->json = true;
    }
    public function response()
    {
        if ($this->redirect) {
            header($this->header);
        } elseif ($this->json) {
            echo json_encode($this->values);
        } else {
            if ($this->header !== false) {
                header($this->header);
            }
            extract($this->values);
            include $this->path . $this->template;
        }
    }
}
