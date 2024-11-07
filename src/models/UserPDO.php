<?php

class UserPDO
{

    private PDO $sql;

    
    public function __construct(PDO $sql)
    {
        $this->sql = $sql;
    }

   
    public function add($Nom, $Email, $Password)
    {
        $query = "insert into Usuari_Prova (Nom, Email, Password) values (:Nom, :Email, :Password)";
        $stm = $this->sql->prepare($query);
        $stm->execute([":Nom" => $Nom, ":Email" => $Email, ":Password" => $Password]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }

}