<?php
function connect_to_database()
{
 $servername = "localhost";
 $username = "root";
 $password = "root";
 $databasename = "BaseTest01";
 
 try 
 {
 $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
 $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
 echo 'Vous êtes connectés <br>';
 
 $sql = "DELETE FROM
 produit
 WHERE id=8";
 $sth=$pdo->prepare($sql);
 $sth->execute();
 echo 'Effacement exécuté';
 } catch (PDOException $e) 
 {
 echo "Erreur" . $e->getMessage();
 
 }
}
connect_to_database();
?>