<?php

class UserPDO
{

    private PDO $sql;

    
    public function __construct(PDO $sql)
    {
        $this->sql = $sql;
    }

   
    public function add($Nom, $Cognom, $User, $Mail, $Password, $Imatge)
    {
        $query = "insert into Usuari (Nom, Cognom, User, Mail, Password, Imatge) values (:Nom, :Cognom, :User, :Mail, :Password, :Imatge)";
        $stm = $this->sql->prepare($query);
        $stm->execute([":Nom" => $Nom, ":Cognom" => $Cognom, ":User" => $User, ":Mail" => $Mail, ":Password" => $Password, ":Imatge" => $Imatge,]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }

}