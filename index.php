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
                    if(!empty($_SESSION)) {                       //Si SESSION n'est pas vide
                        include 'includes/ul.inc.html';
                        $table=$_SESSION['table'];
                    } else {
                        
                    }
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
                          } else {?>
                          <a href="index.php?add" type="button" class="btn btn-primary mb-2 gap-2">Ajouter des données</a>
                          <?php
                          }


                        if(isset($_GET['debugging'])) {

                          } else {

                          }

                          if(isset($_GET['concatenation'])) {

                          } else {

                          }

                          if(isset($_GET['loop'])) {
                                echo "<h2>Boucle</h2><br>";
                                //===> Lecture du tableau à l'aide d'une boucle foreach
                                // echo "à la ligne n°0 correspond la clé first_name et contient ", $table['first_name'], "<br>";
                                // echo "à la ligne n°1 correspond la clé last_name et contient ", $last_name, "<br>";
                                // echo "à la ligne n°2 correspond la clé age et contient ", $age, "<br>";
                                // echo "à la ligne n°3 correspond la clé size et contient ", $size, "<br>";
                                // echo "à la ligne n°4 correspond la clé situation et contient ", $situation, "<br>";
                                foreach ($table as $v) {
                                    echo "à la ligne n° correspond la clé ", $v," et contient ", $v, "<br>";
                                }
                          } else {

                          }

                          if(isset($_GET['function'])) {

                          } else {

                          }

                          if(isset($_GET['delete'])) {
                            session_destroy();
                          } else {

                          }

                    ?>

            </section>
        </div>


    </section>
    <?php include 'includes/footer.inc.html' ?>
</body>
</html>