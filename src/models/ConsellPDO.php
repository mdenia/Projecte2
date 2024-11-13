<?php

class ConsellPDO
{

    private PDO $sql;

    public function __construct(PDO $sql)
    {
        $this->sql = $sql;
    }

    public function addConsell($Title, $Description, $Text, $Hashtags, $Id_User)
    {
        $query = "insert into Consell (:Title, :Description, :Text, :Hashtags, Id_User) VALUES (Titol_Consell, Descripcio_Consell, Text_Explicatiu, Hashtags, Id_User);";
        $stm = $this->sql->prepare($query);
        $stm->execute([":Title" => $Title, ":Descripcio_Consell" => $Description, ":Text_Explicatiu" => $Text, ":Hashtags" => $Hashtags, ":Id_User" => $Id_User]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }
    public function listConsell(){
        $query = "select ID_Consell, Titol_Consell, Descripcio_Consell, Text_Explicatiu, Hashtags from Consell;";
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