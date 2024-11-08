<?php

class UserPDO
{

    private PDO $sql;

    
    public function __construct(PDO $sql)
    {
        $this->sql = $sql;
    }

   
    public function add($Nom, $Cognom, $User, $Mail, $Password, $Imatge) {
        $query = "insert into Usuari (Nom, Cognom, User, Mail, Password, Imatge) values (:Nom, :Cognom, :User, :Mail, :Password, :Imatge)";
        $stm = $this->sql->prepare($query);
        $stm->execute([":Nom" => $Nom, ":Cognom" => $Cognom, ":User" => $User, ":Mail" => $Mail, ":Password" => password_hash($Password, PASSWORD_BCRYPT), ":Imatge" => $Imatge,]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }

    // public function login() {
        
    //     if (nombrefuncion(password que introduce user, password bdd)) { // Comprovar contrasenya
    //         return true;
    //     } else {
    //     return false
    //     }
    // }

}