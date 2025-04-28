<section id="menu_guitares">
    <header>
        <h2>Nos guitares</h2>
    </header>
    <ul class="link-list">
        <li><a href="catalogue.php?c=1">Guitares éléctriques</a></li>
        <li><a href="catalogue.php?c=2">Guitares Folk</a></li>
        <li><a href="catalogue.php?c=3">Guitares classiques</a></li>
        <li><a href="catalogue.php?c=4">Guitares basses</a></li>
    </ul>
</section>
<section id="sidentifier">
<?php    
    if (isset($_SESSION['user']) && ($_SESSION['user']=="admin")) {
        // un admin est loggé
        include_once('menuadmin.inc.php');
    } else
        if (isset($_SESSION['user']) && ($_SESSION['user']=="client")) {
            // un client est loggé
            include_once('menuclient.inc.php');
        }
        else {
            // la variable session n'existe pas ou sa valeur n'est ni admin ni client
            include_once('menuvisiteur.inc.php');
        }
?>
</section>