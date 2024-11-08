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

CREATE TABLE IF NOT EXISTS Usuari (ID_Usuari int AUTO_INCREMENT NOT NULL, Nom varchar(255) NOT NULL, Cognom varchar(255) NOT NULL, User varchar(255) NOT NULL, Mail varchar(255) NOT NULL, Password varchar(255) NOT NULL, Imatge varchar(255) NOT NULL, PRIMARY KEY (ID_Usuari));

"); //Insert into Usuari (Nom, Cognom, User, Mail, Password, Imatge) VALUES ('test', 'test', 'test', 'test@tst.com', '1234', '/Imatges_BDD/usuari.png');

$sql->query("

CREATE TABLE IF NOT EXISTS Esdeveniment (ID_Esdeveniment int AUTO_INCREMENT NOT NULL, Titol_Esdeveniment varchar(255) NOT NULL, Imatge varchar(255) NOT NULL, Latitud float NOT NULL, Longitud float NOT NULL, Descripcio_Esdeveniment varchar(255) NOT NULL, Data date NOT NULL, Hora time NOT NULL, Tipus varchar(255) NOT NULL, Num_Visualitzacions int NOT NULL, ID_Usuari int, PRIMARY KEY (ID_Esdeveniment), FOREIGN KEY (ID_Usuari) REFERENCES Usuari(ID_Usuari));

"); //Insert into Esdeveniment (Titol_Esdeveniment, Imatge, Latitud, Longitud, Descripcio_Esdeveniment, Data, Hora, Tipus, Num_Visualitzacions, ID_Usuari) VALUES ('Nom Esdeveniment', '/Imatges_BDD/Fletxa_Up.php', 42.2741166, 2.9643622, 'Descripcio Esdeveniment', '2024/11/08', '16:05', 'Tipus Esdeveniment', 0, 1);
// DATA (YYYY-MM-DD)

$sql->query("

CREATE TABLE IF NOT EXISTS Consell (ID_Consell int AUTO_INCREMENT NOT NULL, Titol_Consell varchar(255) NOT NULL, Descripcio_Consell varchar(255) NOT NULL, Text_Explicatiu varchar(255) NOT NULL, Etiquetes varchar(255) NOT NULL, ID_Usuari int, PRIMARY KEY (ID_Consell), FOREIGN KEY (ID_Usuari) REFERENCES Usuari(ID_Usuari));

"); //Insert into Consell (Titol_Consell, Descripcio_Consell, Text_Explicatiu, Etiquetes, ID_Usuari) VALUES ('Nom Consell', 'Descripcio Consell', 'Petit Text Explicatiu', '#Etiqueta', 1);

$sql->query("

CREATE TABLE IF NOT EXISTS Anunci (ID_Anunci int AUTO_INCREMENT NOT NULL, Titol_Anunci varchar(255) NOT NULL, Imatge varchar(255) NOT NULL, Descripcio_Anunci varchar(255) NOT NULL, Estat varchar(255) NOT NULL, Categoria varchar(255) NOT NULL, ID_Usuari int, PRIMARY KEY (ID_Anunci), FOREIGN KEY (ID_Usuari) REFERENCES Usuari(ID_Usuari));

"); //Insert into Anunci (Titol_Anunci, Imatge, Descripcio_Anunci, Estat, Categoria, ID_Usuari) VALUES ('Titol anunci', '/Imatges_BDD/Fletxa_Up.php', 'Descripcio_Anunci', 'Prova', 'Categoria1', 1);

$sql->query("

CREATE TABLE IF NOT EXISTS Valoracions (ID_Valoracions int AUTO_INCREMENT NOT NULL, Comentari_Valoracions varchar(255) NOT NULL, Valoracio int, ID_Esdeveniment int, ID_Usuari int, PRIMARY KEY (ID_Valoracions), FOREIGN KEY (ID_Esdeveniment) REFERENCES Esdeveniment(ID_Esdeveniment), FOREIGN KEY (ID_Usuari) REFERENCES Usuari(ID_Usuari));

"); //Insert into Valoracions (Comentari_Valoracions, Valoracio, ID_Esdeveniment, ID_Usuari) VALUES ('Comentari usuari', 3, 1, 1);