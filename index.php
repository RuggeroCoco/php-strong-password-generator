<?php
include_once __DIR__ . "/functions.php";
if(isset($_GET["length"])) {
    $password_length = $_GET["length"];
    $password = generate_password($password_length);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>
    <div class="wrapper">
        <div class="container mb-3 pt-3">

            <div class="row justify-content-center">

                <div class="col-12" text-center>
                    <h1 class="text-white-50">Genera una password sicura</h1>
                </div>

                <?php if(isset($password)) { ?>
                    <div class="col-7">
                        <div class="alert alert-primary" rola="alert">
                            La tua password è <?php echo $password; ?>
                        </div>
                    </div>
                <?php } ?>

                <div class="col-7">
                    <form class="p-3 border-1 rounded-2 bg-light" action="index.php" method="GET">
                        <div class="row mb-3">
                            <label for="length" class="col-sm-7 col-form-label">Lunghezza password:</label>
                            <div class="col-sm-3">
                                <input type="number" name="length" id="length" class="form-control" value="<?php echo $_GET["length"] ?? '' ?>">
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="submit" value="submit" class="btn btn-primary">Invia</button>
                            <button type="reset" class="btn btn-secondary">Anulla</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>
</body>
</html>