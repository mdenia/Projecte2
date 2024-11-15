<?php

class AnunciPDO
{

    private PDO $sql;

    public function __construct(PDO $sql) {
        $this->sql = $sql;
    }

    public function addAnunci($Title, $Image, $Descripcio, $Estat, $Categoria, $Id_User) { // Insert the info to the bdd
        $query = "insert into Anunci (Titol_Anunci, Imatge, Descripcio_Anunci, Estat, Categoria, ID_Usuari) VALUES (:Title, :Image, :Descripcio_Anunci, :Estat, :Categoria, :ID_Usuari);";
        $stm = $this->sql->prepare($query);
        $stm->execute([":Title" => $Title, ":Image" => $Image, ":Descripcio_Anunci" => $Descripcio, ":Estat" => $Estat, ":Categoria" => $Categoria, ":ID_Usuari" => $Id_User]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }
    public function listAnunci() { // List the info from the bdd to the view
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