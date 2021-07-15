<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/head.inc.html' ?>
<body>
    <?php include 'includes/header.inc.html' ?>
    <div class="row">
        <nav class="col-3 pl-5">
            <a href="index.php" type="button" class="btn btn-outline-secondary mx-auto btn-block mb-2">Home</a>
            <?php 
                session_start();
                if(!empty($_SESSION)) {                       //Si SESSION n'est pas vide, afficher la nav
                    include 'includes/ul.inc.html';
                    $table=$_SESSION['table'];
                } else {}
            ?>
        </nav>
        <section class="col-9 pr-5">     
            <?php 
                if(isset($_POST['submit'])) {               
                    $_SESSION['table']=[                       
                    'first_name'=>$_POST['first_name'],
                    'last_name'=>$_POST['last_name'],
                    'age'=>$_POST['age'],
                    'size'=>$_POST['size'],
                    'situation'=>$_POST['situation']
                    ];
                    echo '<h2>Données sauvegardées.</h2>';
                } else if(isset($_GET['add'])) {
                    include 'includes/form.inc.html';      
                } else if(isset($_GET['debugging'])) {
                    echo "<h2>Débogage</h2><br>";
                    echo'<pre>';
                    print_r($table);              // ou   ~~~~pas exactement pareil    print nl2br(print_r($table, true));          SANS LES BALISES <pre>
                    echo'</pre>';
                } else if(isset($_GET['concatenation'])) {
                    echo "<h2>Concaténation</h2><br>";
                    //===> Construction d'une phrase avec le contenu du tableau
                    echo '<h3>',$table['first_name'],' ',$table['last_name'],'</h3>';
                    echo $table['age'],' ans, ','je mesure ',$table['size'], 'm et je fais partie des ', $table['situation'],'s de la promo Simplon.<br><br>';
                    //===> Construction d'une phrase après MAJ du tableau
                    $table['first_name'] = ucfirst($table['first_name']);
                    $table['last_name'] = strtoupper($table['last_name']);
                    echo '<h3>',$table['first_name'],' ',$table['last_name'],'</h3>';
                    echo $table['age'],' ans, ','je mesure ',$table['size'], 'm et je fais partie des ', $table['situation'],'s de la promo Simplon.<br><br>';
                    //===> Affichage d'une virgule à la place du point pour la taille
                    $table['size'] = number_format($table['size'], 2, ',', ' ');                //  number_format($number, decimals, decimals separator, thousands separator)
                    echo '<h3>',$table['first_name'],' ',$table['last_name'],'</h3>';
                    echo $table['age'],' ans, ','je mesure ',$table['size'], 'm et je fais partie des ', $table['situation'],'s de la promo Simplon.<br><br>';
                } else if(isset($_GET['loop'])) {
                    echo "<h2>Boucle</h2><br>";
                    //===> Lecture du tableau à l'aide d'une boucle foreach
                    $i = 0;
                    foreach ($table as $k => $v) {
                        echo 'à la ligne n°',$i,' correspond la clé ', '"',$k,'"',' et contient ', '"',$v,'"', '<br>';
                        ++$i;
                    }
                } else if(isset($_GET['function'])) {
                    echo "<h2>Fonction</h2><br>";
                    //===> Lecture du tableau à l'aide de la fonction readTable()
                    function readTable($t) {
                        $i = 0;
                        foreach ($t as $k => $v) {
                            echo 'à la ligne n°',$i,' correspond la clé ', '"',$k,'"',' et contient ', '"',$v,'"', '<br>';
                            ++$i;
                        }
                    }
                    readTable($table);
                } else if(isset($_GET['del'])) {
                session_destroy();
                echo '<h2>Les données ont bien été supprimées.</h2>';
                } else {?>
                    <a href="index.php?add" type="button" class="btn btn-primary mb-2 gap-2">Ajouter des données</a>
                    <?php
                    }
            ?>
        </section>
    </div>
    <?php include 'includes/footer.inc.html' ?>
</body>
</html>