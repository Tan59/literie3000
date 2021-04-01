<?php
include("tpl/header.php");

if (!empty($_POST)) {
    $nom = trim(strip_tags($_POST["nom"]));
    $marque = trim(strip_tags($_POST["marque"]));
    $dimension = trim(strip_tags($_POST["dimension"]));
    $initprice = trim(strip_tags($_POST["initprice"]));
    $soldprice = trim(strip_tags($_POST["soldprice"]));
    $picture = trim(strip_tags($_POST["picture"]));

    $db = new PDO('mysql:host=localhost;dbname=literie3000', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    ]);

    $query = $db->prepare("INSERT INTO matelas (nom, dimension, marque, initprice, soldprice, picture) VALUES(:nom, :dimension, :marque, :initprice, :soldprice, :picture)");
    $query->bindParam(":nom", $nom);
    $query->bindParam(":marque", $marque);
    $query->bindParam("dimension", $dimension);
    $query->bindParam(":initprice", $initprice);
    $query->bindParam(":soldprice", $soldprice);
    $query->bindParam(":picture", $picture);


    if ($query->execute()) {

    } else {
        $message = "Erreur de bdd";
    }
}
?>

<main>

    <div class="addmatelas">
        <h1>Ajouter un matelas</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Nom du matelas</label>
                <input type="text" name="nom" id="">
            </div>

            <div class="form-group">
                <label for="">Marque du matelas</label>
                <input type="text" name="marque" id="">
            </div>

            <div class="form-group">
                <label for="">Dimensions du matelas</label>
                <input type="text" name="dimension" id="">
            </div>

            <div class="form-group">
                <label for="">Prix initial</label>
                <input type="text" name="initprice" id="">
            </div>

            <div class="form-group">
                <label for="">Prix en réduction</label>
                <input type="text" name="soldprice" id="">
            </div>

            <div class="form-group">
                <label for="">Lien de votre image</label>
                <input type="text" name="picture" id="">
            </div>

            <div class="form-group">
                <input type="submit" value="Ajouter le matelas">
            </div>
        </form>

    </div>




</main>


<?php
include("tpl/footer.php");

?>