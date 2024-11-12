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

    public function login($User, $Password) {
        $query = "select";
        $stm = $this->sql->prepare($query);
        $stm->execute([$User]);
        $result = $stm->fetch();
        if(!$result) {
            return false;
        }

        $hash = $result['password'];

        if (password_verify($Password, $hash)) { // Comprovar contrasenya
                    return $result;
                 } else {
                 return false;
                 }
    }
}