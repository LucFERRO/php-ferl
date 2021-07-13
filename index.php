<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
        <?php include 'includes/header.inc.html' ?>
    </header>
        <div class="row">
            <nav class="col-3 pl-5">
                <button type="button" class="btn btn-outline-secondary mx-auto btn-block mb-2">Home</button>
                <ul class="nav flex-column">
                    <?php include 'includes/ul.inc.html' ?>
                </ul>
            </nav>
            <section class="col-9 pr-5">
                <button type="button" class="btn btn-primary mb-2 gap-2">Ajouter des données</button>
                <form action="" method="get" class="form-example">
                    <?php include 'includes/form.inc.html' ?>
                </form>

            </section>
        </div>


    </section>
    <footer>
        <?php include 'includes/footer.inc.html' ?>
    </footer>
</body>
</html>