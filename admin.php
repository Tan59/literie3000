<?php
$db = new PDO('mysql:host=localhost;dbname=literie3000', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
]);

$query = $db->query("SELECT * FROM matelas");
$matelas = $query->fetchAll();


include("tpl/header.php");

?>

<a class="matelas" href="add.php">Ajouter un matelas</a>

<main>
    <div class="container">

        <?php
        foreach ($matelas as $matela) {
        ?>



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

                <div class="modify">
                    <a href="modify.php?id=<?= $matela["id"] ?>">Modifier le matelas</a>
                    <a href="delete.php?id=<?= $matela["id"] ?>">Supprimer le matelas</a>
                </div>
                <form action="">
                    <input type="checkbox" id="scales" name="scales" <?php echo ($matela["dispo"] == 1) ? 'checked' : '' ?>>
                </form>
            </div>


        <?php
        }

        ?>

    </div>

</main>




<?php

include("tpl/footer.php");
?>