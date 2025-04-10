<?php
    require "conn.php";

    function gerarSlug($texto) {
        $texto = strtolower($texto); // tudo minúsculo
        $texto = preg_replace('/[áàãâä]/u', 'a', $texto);
        $texto = preg_replace('/[éèêë]/u', 'e', $texto);
        $texto = preg_replace('/[íìîï]/u', 'i', $texto);
        $texto = preg_replace('/[óòõôö]/u', 'o', $texto);
        $texto = preg_replace('/[úùûü]/u', 'u', $texto);
        $texto = preg_replace('/[ç]/u', 'c', $texto);
        $texto = preg_replace('/[^a-z0-9\s-]/', '', $texto);
        $texto = preg_replace('/[\s-]+/', '-', $texto);
        return trim($texto, '-');
    }

    $noticia = filter_input(INPUT_POST, "noticia");
    $descricao = filter_input(INPUT_POST, "descricao");
    $palavras_chave = filter_input(INPUT_POST, "palavras-chave");
    $conteudo = filter_input(INPUT_POST, "conteudo");
    $slug = gerarSlug($noticia);//filter_input(INPUT_POST, "noticia");

    if($noticia && $descricao && $palavras_chave && $conteudo){
        $sql = $pdo->prepare("INSERT INTO giovanna_noticias (titulo_noticia, descricao_noticia, palavras_chave, conteudo_noticia, slug_noticia) VALUES (:titulo, :descricao, :palavras_chave, :conteudo, :slug)");
        $sql->bindValue(":titulo", $noticia);
        $sql->bindValue(":descricao", $descricao);
        $sql->bindValue(":palavras_chave", $palavras_chave);
        $sql->bindValue(":conteudo", $conteudo);
        $sql->bindValue(":slug", $slug);
        $sql->execute();

        echo"
            <script>
                alert('Notícia cadastrada com sucesso!');
                window.location.href = 'index.php';
            </script> 
        ";
        exit;
    }
    else{
        echo"
            <script>
                alert('Preencha todos os campos!');
                window.location.href = 'cadastrar.php';
            </script> 
        ";
        exit;
    }
?>