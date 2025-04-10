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
    
            <h1>Cadastrar Notícias</h1>
        </header>
    
        <main id="main">
            <form class="form" action="cadastrar-action.php" method="POST">
                <div class="input-search">
                    <label for="noticia">Título da Noticia:</label>
                    <input type="text" name="noticia" id="noticia" >
                </div>
    
                <div class="input-search">
                    <label for="descricao">Descrição:</label>
                    <input type="text" name="descricao" id="descricao" ></input>
                </div>

                <div class="input-search">
                    <label for="palavras-chave">Palavras-chave:</label>
                    <input type="text" name="palavras-chave" id="palavras-chave" >
                </div>

                <div class="input-search">
                    <label for="conteudo">Conteúdo da notícia:</label>
                    <textarea rows="5" name="conteudo" id="conteudo" ></textarea>
                    
                    <div class="input-search">
                        <input type="submit" value="Cadastrar">
                    </div>
                </div>
            </form>
        </main>
    
        <?php require "footer.php"; ?>
</body>
</html>