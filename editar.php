<?php
    require "conn.php";

    $id = filter_input(INPUT_GET, "id");

    $sql = $pdo->prepare("SELECT * FROM giovanna_noticias WHERE id = :id");
    $sql->bindValue(":id", $id);    
    $sql->execute();

    if($sql->rowCount() > 0){
        $noticia = $sql->fetch(PDO::FETCH_ASSOC);
    }
    else{
        echo"
            <script>
                alert('Noticia não encontrada!');
                window.location.href = 'index.php';
            </script> 
        ";
        header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Notícias</title>
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/cadastrar.css">
</head>
<body>
        <header id="header">
            <div class="menu">
                <h2>Site de Notícias</h2>
                <h2><a href="index.php">Home</a></h2>
            </div>
    
            <h1>Editar Notícia</h1>
        </header>
    
        <main id="main">
            <form class="form" action="atualizar.php" method="POST">
                <div class="input-search">
                    <input type="hidden" name="id" value="<?= $noticia['id']; ?>">
                    <label for="noticia">Título da Noticia:</label>
                    <input type="text" name="noticia" id="noticia" value="<?= $noticia['titulo_noticia']; ?>">
                </div>
    
                <div class="input-search">
                    <label for="descricao">Descrição:</label>
                    <input type="text" name="descricao" id="descricao" value="<?= $noticia['descricao_noticia']; ?>">
                </div>

                <div class="input-search">
                    <label for="palavras-chave">Palavras-chave:</label>
                    <input type="text" name="palavras-chave" id="palavras-chave" value="<?= $noticia['palavras_chave']; ?>">
                </div>

                <div class="input-search">
                    <label for="conteudo">Conteúdo da notícia:</label>
                    <textarea rows="5" name="conteudo" id="conteudo"><?= $noticia['conteudo_noticia']; ?></textarea>
                    
                    <div class="input-search">
                        <input type="submit" value="Salvar alterações">
                    </div>
                </div>
            </form>
        </main>
    
        <?php require "footer.php"; ?>
</body>
</html>