<?php

class UrlsPDO
{

private PDO $sql;

public function __construct(PDO $sql){
    $this->sql = $sql;
}   

public function add($title, $url, $description){
    $query = "insert into links (title, url, description) values (:title, :url, :description);";
    $stm = $this->sql->prepare($query);
    $stm->execute([":title" => $title, ":url" => $url, ":description" => $description]);

    if ($stm->errorCode() !== '00000') {
        $err = $stm->errorInfo();
        $code = $stm->errorCode();
        die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
    }
}

public function update($id, $title, $url, $description){
        $query = "update links set title = :title, url = :url, description = :description where id = :id;";
        $stm = $this->sql->prepare($query);
        $stm->execute([":title" => $title, ":url" => $url, ":description" => $description, ":id" => $id]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
}

public function list(){
        $query = "select id, title, url, description from links;";
        $urls = [];
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $url) {
            $urls[$url["id"]] = $url;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $urls;
}

public function delete($id){
        $query = "delete from links where id = :id";
        $stm = $this->sql->prepare($query);
        $stm->execute([":id" => $id]);
    }
}