<?php 
    include'../../config/connection.php';

    // if terário, if de uma liha só
    $id = isset($_GET['id']) ? $_GET['id'] : exit();

    if (empty($id)) {
        echo 'É necessário informar o código!!!';
        exit();
    }

    // verifica se o string existe
    $stmt = $pdo->prepare('DELETE FROM usuario WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // leva você para alguma página
    Header("Location: read.php?id=$id");
    // ou Header('Location: read.php?id=' . $id);

    // deletar sempre por id ou atributo chave
?>
