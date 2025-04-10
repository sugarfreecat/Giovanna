<?php
    require "conn.php";

    $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

    $sql = $pdo->prepare("DELETE FROM giovanna_noticias WHERE id = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();

    if($sql->rowCount() > 0){
        echo"
            <script>
                alert('Noticia deletada com sucesso!');
                window.location.href = 'index.php';
            </script> 
        ";
    }
?>