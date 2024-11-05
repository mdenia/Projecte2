<?php
include "../src/config.php";

$db = $config["db"]["name"];
echo "Creant la base de dades : {$db} \n";
$dsn = "mysql:dbname={$config['db']['name']};host={$config['db']['host']}";

$user = $config["db"]["user"];
$password = $config["db"]["pass"];
try {
    $sql = new PDO($dsn, $user, $password);
} catch (\PDOException $e) {
    die('Ha fallat la connexió: ' . $e->getMessage());
}

$sql->query("
CREATE TABLE IF NOT EXISTS links (id INT AUTO_INCREMENT PRIMARY KEY, title VARCHAR(255), url VARCHAR(255), description text default '');

CREATE TABLE Usuari (ID_Usuari int NOT NULL, Nom varchar(255) NOT NULL, Cognom varchar(255) NOT NULL, Mail varchar(255) NOT NULL, Imatge varchar(255) NOT NULL, PRIMARY KEY (ID_Usuari));
CREATE TABLE Esdeveniment (ID_Esdeveniment int NOT NULL, Títol varchar(255), Latitud float, Longitud float, Descripcio varchar(255), Data date , Hora )
















"); // DATA (YYYY-MM-DD)