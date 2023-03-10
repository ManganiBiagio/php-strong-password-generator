<?php
require "./functions.php";

session_start();
$lengthPsw = $_GET['lengthPsw'];
$isCharMin=$_GET['isCharMin'];
$isCharMax=$_GET['isCharMax'];
$isNumeri=$_GET['isNumeri'];
$isCharSpe=$_GET['isCharSpe'];
$isRepetition=$_GET['isRepetition'];
$psw = generatePsw($lengthPsw,$isCharMin,$isCharMax,$isNumeri,$isCharSpe,$isRepetition);
if(!empty($psw)){
    $_SESSION["psw"]=$psw;
    header("Location: showpsw.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="text-center mb-3">
            <h4>Password Generator</h4>
        </div>

        <div class="row justify-content-center">
            <div class="col-12">
                <form method="GET" class="row gx-3 gy-2 align-items-center justify-content-center">
                    <div class="col-sm-3 d-flex align-items-center">
                        <label class="me-2">Lunghezza password:</label>
                        <input type="number" class="form-control" name="lengthPsw" id="specificSizeInputName" placeholder="...">
                    </div>


                    <div class="col-auto">
                        <div class="form-check">
                            <input class="form-check-input " name="isCharMin" type="checkbox" id="autoSizingCheck2">
                            <label class="form-check-label" for="autoSizingCheck2">
                                Lettere Minuscole
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input " name="isCharMax" type="checkbox" id="autoSizingCheck2">
                            <label class="form-check-label" for="autoSizingCheck2">
                                Lettere Maiuscole
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input " name="isNumeri" type="checkbox" id="autoSizingCheck2">
                            <label class="form-check-label" for="autoSizingCheck2">
                                Numeri
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input " name="isCharSpe" type="checkbox" id="autoSizingCheck2">
                            <label class="form-check-label" for="autoSizingCheck2">
                                Caratteri Speciali
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input " name="isRepetition" type="checkbox" id="autoSizingCheck2">
                            <label class="form-check-label" for="autoSizingCheck2">
                                Niente Ripetizioni
                            </label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary">Cerca</button>
                    </div>
                </form>

            </div>
            <?php if(!empty($psw)){ ?>
            <div class="col-12 text-center mt-4" >
                Risultato=<?php echo $psw ?>
            </div>
            <?php }?>
        </div>
    </div>

</body>

</html>