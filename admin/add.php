<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "../connexion.php";
    $sql="insert into produit values(NULL,'cable type c',20,10,'loffsdcds dssd','https://picsum.photos/id/237/200/200',1)";
    #envoi de la requete
    $connexion=new connexion();
    $pdo=$connexion->getConnexion();
    $res=$pdo->exec($sql);
    if($res)
    {echo "insertion reussite";}
    else{echo"probleme dinsertion";}

    ?>
</body>
</html>