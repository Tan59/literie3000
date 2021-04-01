<?php
if(isset($_GET["id"])) {
   
   $db = new PDO('mysql:host=localhost;dbname=literie3000', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
]);

    $id = $_GET["id"];

    $query = $db->prepare("DELETE FROM matelas WHERE id = :id");
    $query->bindParam(":id", $id);
    
    if ($query->execute()) {
        header("location: ./admin.php");
    }else {
        ?>
        <h2>nope</h2>
        <?php
    }

    

}
