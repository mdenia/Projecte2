<?php

class ConsellPDO
{

    private PDO $sql;

    public function __construct(PDO $sql)
    {
        $this->sql = $sql;
    }

    public function addConsell($Title, $Description, $Text, $Hashtags)
    {
        $query = "insert into Consell (Titol_Consell, Descripcio_Consell, Text_Explicatiu, Hashtags) VALUES (:Title, :Description, :Text, :Hashtags);";
        $stm = $this->sql->prepare($query);
        $stm->execute([":Title" => $Title, ":Description" => $Description, ":Text" => $Text, ":Hashtags" => $Hashtags]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }
}