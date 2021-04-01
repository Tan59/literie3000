<?php

$db = new PDO('mysql:host=localhost;dbname=literie3000', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
]);

$query = $db->query("SELECT * FROM matelas WHERE dispo = 1 ");
$matelas = $query->fetchAll();

include("tpl/header.php");

?>

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
                    <p> Matelas <?=$matela["nom"] ?></p>
                    <p><?= $matela["dimension"] ?></p>
                </div>
                <p><?= $matela["marque"] ?></p>

                <div>
                    <p class="initprice"><?= $matela["initprice"] ?>€</p>
                    <p><?= $matela["soldprice"] ?>€</p>
                </div>
            </div>


        <?php
        }

        ?>

    </div>

</main>



<?php

include("tpl/footer.php");
?>