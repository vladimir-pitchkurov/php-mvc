<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="/template/css/news_index.css">
</head>
<body>


<div class="container-fluid news-blog">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1>Blog <small>Debate </small></h1>
            </div>
            <div class="col-sm-6 col-md-6">
                <a href="#">
                    <div class="thumbnail principal-post">
                        <img src="https://i0.wp.com/radio.ufpa.br/wp-content/uploads/2017/09/Morador%20de%20rua.jpg">
                        <div class="caption">
                            <h2>População em situação de rua</h2>
                            <span class="date-of-post">4 de dezembro de 2017</span>
                            <p>De acordo com a pesquisa “Trabalho Docente e Saúde: tensões da Educação Superior”, entre 2006 e 2010, 14,13% dos pedidos de afastamento do trabalho dos professores da UFPA estiveram relacionados à saúde mental. Depressão e síndrome de Burnout estão entre os problemas mais frequentes apontados no trabalho realizado por Jadir Campos, no Programa de Pós-Graduação em Educação.</p>
                        </div>
                    </div>
                </a>
            </div>

            <? foreach ($newsList as $newsItem): ?>
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <a href="#">
                        <div class="caption">
                            <h2><a href="/news/<?=$newsItem['id'];?>"><?=$newsItem['title'];?></a></h2>
                            <p><?=$newsItem['short_content'];?></p>
                            <span class="date-of-post"><?=$newsItem['date'];?></span>
                        </div>
                    </a>
                </div>
            </div>

            <? endforeach; ?>

        </div>
    </div>
</div>


</body>
</html>
