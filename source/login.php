<?php
    ob_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
  
    <section class="p-5 text-center main">
        <div class="container mt-5 mb-0 col-3 mx-auto">
            <h1>
                <?php
                if (($_POST["email"] == "b201210045@sakarya.edu.tr") && ($_POST["password"] == "b201210045")) {
                    echo "<h1> Hoşgeldiniz b201210045!</h1>";
                } else {
                    echo "<h1> Giriş bilgileriniz hatalı.</h1>";
                    header("Refresh: 3; login.html");
                    die("Giriş sayfasına yönlendiriliyorsunuz...");
                }
                ?>
            </h1>
        </div>
    </section>
</body>

</html>
<?php
    ob_end_flush();
?>