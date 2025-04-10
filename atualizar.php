<?php
    require "conn.php";

    if(!empty($_POST)){
        $id = filter_input(INPUT_POST, "id");
        $titulo = filter_input(INPUT_POST, "noticia"); 
        $descricao = filter_input(INPUT_POST, "descricao");
        $palavras_chave = filter_input(INPUT_POST, "palavras-chave");
        $conteudo = filter_input(INPUT_POST, "conteudo");

        $sql = $pdo->prepare("UPDATE giovanna_noticias SET titulo_noticia = :noticia, descricao_noticia = :descricao, palavras_chave = :palavras_chave, conteudo_noticia = :conteudo WHERE id = :id");
        $sql->bindValue(":noticia", $titulo);
        $sql->bindValue(":descricao", $descricao);
        $sql->bindValue(":palavras_chave", $palavras_chave);
        $sql->bindValue(":conteudo", $conteudo);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            echo"
                <script>
                    alert('Noticia atualizada com sucesso!');
                    window.location.href = 'index.php';
                </script> 
            ";
            header("Location: index.php");
        }
        else{
            echo"
                <script>
                    alert('Erro ao atualizar noticia!');
                    window.location.href = 'index.php';
                </script> 
            ";
            header("Location: index.php");
        }
    }
?>