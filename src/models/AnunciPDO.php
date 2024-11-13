<?php

class AnunciPDO
{

    private PDO $sql;

    public function __construct(PDO $sql) {
        $this->sql = $sql;
    }

    public function addAnunci($Title, $Image, $Categoria, $Estat, $descripcio, $Id_User) {
        $query = "insert into Anunci (:Titol_Anunci, :Imatge, :Estat, :Descripcio_Anunci, :Id_User) VALUES (nomAnunci, Imatge, Categoria, Estat, Descripcio_Anunci, Id_User);";
        $stm = $this->sql->prepare($query);
        $stm->execute([":nomAnunci" => $Title, ":Imatge" => $Image, ":Categoria" => $Categoria, ":Estat" => $Estat, ":Descripcio_Anunci" => $descripcio, ":Id_User" => $Id_User]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }
    public function listAnunci() {
        $query = "select ID_Anunci, Titol_Anunci, Imatge, Categoria, Descripcio_Anunci from Anunci;";
        $Anunci = [];
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $url) {
            $Anunci[$url["ID_Anunci"]] = $url;
        }
        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $Anunci;    
    }
}