<?php
    require "conn.php";

    /*$id = filter_input(INPUT_GET, "id");

    $sql = $pdo->prepare("SELECT * FROM giovanna_noticias WHERE id = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $noticia = $sql->fetch(PDO::FETCH_ASSOC);
    }
    else{
        header("Location: index.php");
    }*/

    $slug = filter_input(INPUT_GET, "slug");

    $sql = $pdo->prepare("SELECT * FROM giovanna_noticias WHERE slug_noticia = :slug");
    $sql->bindValue(":slug", $slug);
    $sql->execute();

    if($sql->rowCount() > 0){
        $noticia = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($noticia['titulo_noticia']); ?></title>
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/noticia.css">
    
</head>
<body>
    <div class="container">
        <header id="header">
            <div class="menu">
                <h2>Site de Notícias</h2>
                <h2><a href="index.php">Home</a></h2>
            </div>
        </header>

        <main class="container-post">
            <div class="noticia">
            <h1><?= htmlspecialchars($noticia['titulo_noticia']); ?></h1>
            <p><strong>Publicado em: </strong><?= date_format(new DateTime($noticia['data_criacao']), 'd/m/Y'); ?></p><br>
            <p><?= nl2br(htmlspecialchars($noticia['conteudo_noticia']));?></p><br
            <p><strong>Palavras-chave: </strong><?= nl2br(htmlspecialchars($noticia['palavras_chave']));?></p>
            </div>
        </main>

        <?php require "footer.php"; ?>
    </div>
</body>
</html>