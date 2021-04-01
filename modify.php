<?php
include("tpl/header.php");
if (isset($_GET["id"])) {
    
    if (!empty($_POST)) {
        $newnom = trim(strip_tags($_POST["newnom"]));
        $newmarque = trim(strip_tags($_POST["newmarque"]));
        $newdimension = trim(strip_tags($_POST["newdimension"]));
        $newinitprice = trim(strip_tags($_POST["newinitprice"]));
        $newsoldprice = trim(strip_tags($_POST["newsoldprice"]));
        $newpicture = trim(strip_tags($_POST["newpicture"]));
    
        $db = new PDO('mysql:host=localhost;dbname=literie3000', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        ]);
    
        $query = $db->prepare("UPDATE matelas set");
        $query->bindParam(":newnom", $newnom);
        $query->bindParam(":newmarque", $newmarque);
        $query->bindParam("newdimension", $newdimension);
        $query->bindParam(":newinitprice", $newinitprice);
        $query->bindParam(":newsoldprice", $newsoldprice);
        $query->bindParam(":newpicture", $newpicture);
    
    
        if ($query->execute()) {
    
        } else {
            $message = "Erreur de bdd";
        }
    }


    $db = new PDO('mysql:host=localhost;dbname=literie3000', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    ]);

    $id = $_GET["id"];

    $query = $db->query("SELECT * FROM matelas WHERE id = $id");
    $query->execute();
    $matela = $query->fetch();

    if ($matela) {
?>
        <div class="container">
            <div class="matelas">
                <div class="picture">
                    <img src="<?= $matela["picture"] ?>" alt="">
                </div>

                <div>
                    <p> Matelas <?= $matela["nom"] ?></p>
                    <p><?= $matela["dimension"] ?></p>
                </div>
                <p><?= $matela["marque"] ?></p>

                <div>
                    <p class="initprice"><?= $matela["initprice"] ?>€</p>
                    <p><?= $matela["soldprice"] ?>€</p>
                </div>
            </div>

            <form action="" class="matelas">
                <div class="label">
                    <label for="">Nouvelle image</label>
                    <input type="text" name="newpicture">
                </div>

                <div class="label">
                    <label for="">Nouveau Nom</label>
                    <input type="text" name="newname">

                    <label for="">Nouvelle dimension</label>
                    <input type="text" name="newdimension">
                </div>

                <div class="label">
                    <label for="">Nouvelle marque</label>
                    <input type="text" name="newmarque">
                </div>

                <div class="label">
                    <label for="">Nouveau Prix initial</label>
                    <input type="text" name="newinitprice">
                    <label for="">Nouveau Prix en promotion</label>
                    <input type="text" class="newsoldprice">
                </div>

                <input type="submit" value="Modifier le matelas">
            </form>
        </div>
<?php
    }
}


?>




<?php
include("tpl/footer.php");

?>