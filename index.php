<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    //definir constantes d'environnement
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBMDP", "");
    define("DBNAME", "testexam");
    //dsn de connexion
    $dsn = "mysql:dbname=" . DBNAME . ";host=" . DBHOST;
    //se connecter à la base
    try {
        //on instancie pdo
        $db = new PDO($dsn, DBUSER, DBMDP);
        $db ->exec("SET NAMES utf8");
    } catch (PDOException $e) {
        die($e->getMessage());
    }   
    //on est connecté à la base 
  //  on peut recuperer la liste des user
    $sql = " SELECT * FROM `user` ";

    // on execute la requete
    $requete= $db->query($sql);

    //on recupere les données fetch ou fetchAll
    $user= $requete->fetch();
    var_dump($user);


    ?>

</body>

</html>