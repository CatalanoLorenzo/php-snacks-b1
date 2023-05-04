<!-- Con un form passare come parametri GET name, mail e age e verificare
 (cercando i metodi che non conosciamo nella documentazione)
  che name sia più lungo di 3 caratteri,
 che mail contenga un punto e una chiocciola e che age sia un numero.
  Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
$name = $GET_['name'];
$age = $GET_['age'];
$email = $GET_['email'];
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="card">
                <form action="" method="get">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="il tuo nome">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="la tua email">
                        <small id="emailHelpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="" name="age" id="age" placeholder="la tua età">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <?php if (strlen($name)  > 3) : ?>
                    <?php if (is_numeric($age)) : ?>
                        <?php if (count($email,'@', '.', )) : ?>


                            <p>nome ok</p>
                        <?php endif ?>
                    <?php endif ?>
                <?php endif ?>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>