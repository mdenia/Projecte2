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
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }

    public function login($User, $Password) {
        $query = "select ID_Usuari, Nom, Cognom, User, Mail, Password, Imatge from Usuari where User = :User";
        $stm = $this->sql->prepare($query);
        $stm->execute([":User" =>$User]);
        $result = $stm->fetch();
        if(!$result) {
            return false;
        }

        $hash = $result['Password'];

        if (password_verify($Password, $hash)) { // Comprovar password
                    return $result;
                 } else {
                 return false;
                 }
    }

    public function listUser(){
        $query = "select ID_Usuari, Nom, Cognom, User, Mail, Password, Imatge from Usuari";
        $User = [];
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $Usr) {
            $User[$Usr["ID_Usuari"]] = $Usr;
        }
    
        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $User;
    }

    public function updateUser($Name, $Surname, $User, $Mail, $Password, $Image) {
        $query = "update Usuari Set Nom = :Nom, Cognom = :Cognom, User = :User, Mail = :Mail, Password = :Password, Imatge = :Imatge where ID_Usuari = :ID_User";
        $stm = $this->sql->prepare($query);
        $stm->execute([":Nom" => $Name, ":Cognom" => $Surname, ":User" => $User, ":Mail" => $Mail, ":Password" => password_hash($Password, PASSWORD_BCRYPT), ":Imatge" => $Image, "ID_User" => $_SESSION["User"]["ID_Usuari"]]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }
}