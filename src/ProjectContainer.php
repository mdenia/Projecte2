<?php

class ProjectContainer extends \Emeset\Container {

    public function __construct($config){ // Create 'db' to connect to the bdd
        $this->sql = new Db($config);
        $this->config = $config;
    }

    public function EsdevenimentPDO(){ // Create 'EsdevenimentPDO'
        return new EsdevenimentPDO($this->sql->get());
    }

    public function UserPDO(){ // Create 'UserPDO'
        return new UserPDO($this->sql->get());
    }

    public function ConsellPDO(){ // Create 'ConsellPDO'
        return new ConsellPDO($this->sql->get());
    }

    public function AnunciPDO(){ // Create 'AnunciPDO'
        return new AnunciPDO($this->sql->get());
    }
}