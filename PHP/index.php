<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Projet groupe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

    <body>
        <?php
            require_once('connexion.php');

            $sql = $bdd->prepare('SELECT pseudo, date_isc FROM inscrit');

            $sql->setFetchMode(PDO::FETCH_OBJ);

            $sql->execute();

            $inscrit = $sql->fetchAll();

            foreach ($inscrit as $isc) {
                echo   '<article>
                            <h2> Pseudo : '.$isc->pseudo.' </h2>
                            <p> Date choisit : '.$isc->date_isc.' </p>
                        </article>';
            }

            ?>
    </body>
</html>