<?php
    require "conn.php";

    $sql = $pdo->prepare("SELECT * FROM giovanna_noticias ORDER BY id DESC");
    $sql->execute();
    $noticias = [];

    if($sql->rowCount() > 0){
        $noticias = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Notícias</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/home.css">
</head>
<body>
    <div class="container">
        <header id="header">
            <div class="menu">
                <h2>Site de Notícias</h2>
                <h2><a href="cadastrar.php">Cadastrar Notícias</a></h2>
            </div>

            <div class="input-search">
                <i class="bi bi-search"></i>
                <input type="text" name="text" id="text" placeholder="Pesquisar notícias">
            </div>
        </header>
        <!-- adicionar slug, palavras chave e linkar para outra pagina com o conteudo da noticia -->
        <main class="container-post">
            <?php foreach($noticias as $noticia): ?>
                <div class="post">
                    <div class="top-post menu">
                        <span><?= date_format(new DateTime($noticia['data_criacao']), 'd/m/Y');?></span>
                        <i class="bi bi-heart"></i>
                    </div>
                    <div class="content-post">
                        <h3><a href="noticia.php?slug=<?= $noticia['slug_noticia'];?>"><?= $noticia['titulo_noticia'];?></a></h3>
                        <p><?= $noticia['descricao_noticia'];?></p>
                    </div>
                    <div class="opcoes-post">
                        <a href="editar.php?id=<?= $noticia['id'];?>"><i class="bi bi-pencil"></i></a>
                        <a href="deletar.php?id=<?= $noticia['id'];?>" class="deletar-btn"><i class="bi bi-trash"></i></a>
                    </div>
                </div>
                <?php endforeach; ?>
        </main>

        <?php require "footer.php"; ?>
    </div>

    <div class="popup" id="popup">
        <div class="popup-conteudo">
            <div class="mensagem">
                <p>Tem certeza que deseja deletar essa notícia?</p>
            </div>
            <div class="popup-opcoes">
                <button id="confirmar">Confirmar</button>
                <button id="cancelar">Cancelar</button>
            </div>
        </div>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>