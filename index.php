<?php
// chargement des modules installés
require_once 'vendor/autoload.php';

// objet "chargeur de Twig" auquel on donne le chemin du
// dossier des templates
$loader = new Twig_Loader_Filesystem('templates');

// objet "environnement de Twig" à partir du chargeur et
// des paramètres, dont le chemin du cache
$twig = new Twig_Environment($loader, [
    'cache' => 'cache',
]);

// on charge le template
$template = $twig->loadTemplate('index.html');

// on passe un tableau avec les variables (clé => valeur)
// et on obtient la page HTML pure
echo $template->render(array('mess' => 'Salut petit bonhomme !'));

?>