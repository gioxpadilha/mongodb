<?php
require_once 'vendor/autoload.php';
    If (isset ($_POST ['submit'])){
    $nome = $_POST ['nome'];

    $mongo = new MongoDB\Client("mongodb://localhost:27017");
    $collection = $mongo->banco->girias;

    $document = $collection ->find(['nome' => $nome]);
    foreach($document as $giria){
        echo "<p>".$giria['significado']."
        <p><button><a href='imdex.php'>Retornar</a></button>";
    }
}
?>