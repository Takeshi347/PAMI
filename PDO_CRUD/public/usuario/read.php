<?php 
    include'../../config/connection.php';

    $stmt = $pdo->query('SELECT * FROM usuario');
    $usuarios = $stmt->fetchAll();
    
    if( isset($_GET['id']) ) {
        $id = $_GET['id'];
        echo "O id $id foi removido111!!!";
    }

    // echo "<pre>";
    // echo var_dump($usuarios);    
?>
    <?php foreach ($usuarios as $indice => $user) { ?>
        <p>
            <strong>Nome da Heroina:</strong><?php echo $user['username']; ?>
            <br>
            <a href="http://localhost/PWII/PDO_CRUD/public/usuario/delete.php?id=<?php echo $user["id"]; ?>">Remover</a>
            <a href="">Editar</a>
        </p>
        <hr>
    <?php } ?>
    