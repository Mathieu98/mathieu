<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Projet groupe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style2.css" />
    <script src="main.js"></script>
</head>

    <body>
        <?php
            require_once('connexion.php');

            $sql = $bdd->prepare('SELECT pseudo, date_isc, groupe FROM inscrit');

            $sql->setFetchMode(PDO::FETCH_OBJ);

            $sql->execute();

            $inscrit = $sql->fetchAll();

            foreach ($inscrit as $isc) {
                echo   '<article>
                            <h2> '.$isc->pseudo.' </h2>
                            <p> Votre date : <b>'.$isc->date_isc.'</b> </p>
                            <p class="grp"> <b>'.$isc->groupe.'</b> </p>
                        </article>';
            }
            ?>
    </body>
</html>