<?php

class EsdevenimentPDO
{

private PDO $sql;

public function __construct(PDO $sql){
    $this->sql = $sql;
}   

public function addEsdeveniment($Title, $Image, $Latitud, $Longitud, $Description, $Date, $Hour, $Type, $Num_views, $ID_User){
    $query = "insert into Esdeveniment (Titol_Esdeveniment, Imatge, Latitud, Longitud, Descripcio_Esdeveniment, Data, Hora, Tipus, Num_Visualitzacions, ID_Usuari) VALUES (:Title, :Image, :Latitud, :Longitud, :Description, :Date, :Hour, :Type, :Num_Views, :ID_User );";
    $stm = $this->sql->prepare($query);
    $stm->execute([":Title" => $Title, ":Image" => $Image, ":Latitud" => $Latitud, ":Longitud" => $Longitud, ":Description" => $Description, ":Date" => $Date, ":Hour" => $Hour, ":Type" => $Type, ":Num_Views" => $Num_views, ":ID_User" => $ID_User]);

    if ($stm->errorCode() !== '00000') {
        $err = $stm->errorInfo();
        die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
    }
}
/*
/*
public function updateEsdeveniment($id, $title, $url, $description){
        $query = "update links set title = :title, url = :url, description = :description where id = :id;";
        $stm = $this->sql->prepare($query);
        $stm->execute([":title" => $title, ":url" => $url, ":description" => $description, ":id" => $id]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
}

public function listEsdeveniment(){
        $query = "select ID_Esdeveniment, Ttol_Esdeveniment, Imatge, Latitud, Longitud, Descripcio_Esdeveniment, Data, Hora, Tipus, Num_Visualitzacions from Esdeveniment;";
        $Esdeveniment = [];
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $url) {
            $Esdeveniment[$url["ID_Esdeveniment"]] = $url;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $Esdeveniment;
}

public function deleteEsdeveniment($ID_Esdeveniment){
        $query = "delete from Esdeveniment where ID_Esdeveniment = :ID_Esdeveniment";
        $stm = $this->sql->prepare($query);
        $stm->execute([":ID_Esdeveniment" => $ID_Esdeveniment]);
    }
*/
}