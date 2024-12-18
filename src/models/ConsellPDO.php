<?php

class ConsellPDO
{

    private PDO $sql;

    public function __construct(PDO $sql)
    {
        $this->sql = $sql;
    }

    public function addConsell($Title, $Description, $Text, $Hashtags, $Id_User) // Insert the info to the bdd
    {
        $query = "insert into Consell (Titol_Consell, Descripcio_Consell, Text_Explicatiu, Etiquetes, ID_Usuari) VALUES (:Title, :Description, :Text, :Hashtags, :Id_User);";
        $stm = $this->sql->prepare($query);
        $stm->execute([":Title" => $Title, ":Description" => $Description, ":Text" => $Text, ":Hashtags" => $Hashtags, ":Id_User" => $Id_User]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }
    public function listConsell(){ // List the info from the bdd to the view
        $query = "select ID_Consell, Titol_Consell, Descripcio_Consell, Text_Explicatiu, Etiquetes from Consell;";
        $Consell = [];
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $url) {
            $Consell[$url["ID_Consell"]] = $url;
        }
        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $Consell;    
    }
}