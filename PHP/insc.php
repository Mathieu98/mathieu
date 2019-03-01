        <?php
            require_once('connexion.php');
            $pseudo = $_GET['pseudo'];
            $date_isc = $_GET['date_isc'];
            $groupe = $_GET['groupe'];

            $nb = $bdd->prepare('SELECT date_isc FROM inscrit');

            $nb->setFetchMode(PDO::FETCH_OBJ);

            $nb->execute();

            if ($nb < 5) {
                $sql = $bdd->prepare('INSERT INTO inscrit (pseudo, date_isc, groupe) VALUE ("'. $pseudo . '","'. $date_isc . '","'. $groupe . '")');

                $sql->setFetchMode(PDO::FETCH_OBJ);

                $sql->execute();
            } else 
                echo 'Plus de place disponible pour cette date';
        ?>

        <?php
            header('Location: index.php'); 
        ?>
