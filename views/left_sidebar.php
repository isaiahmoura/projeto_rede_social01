<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/home.css">
<div class="left_content">
    <div class="left_feed_navbar">
        
        <div class="left_feed_explore">
            <div class="left_feed_news_item">
                <p>EXPLORE</p>
            </div>
            <div class="left_feed_news_item">
                <img src="<?php echo BASE_URL; ?>assets/images/homepage.png" alt="">
                <a href="<?php echo BASE_URL; ?>">Página Inicial</a>
            </div>
            <div class="left_feed_news_item">
                <img src="<?php echo BASE_URL; ?>assets/images/page.png" alt="">
                <a href="<?php echo BASE_URL; ?>page/">Páginas</a>
            </div>
            <div class="left_feed_news_item">
                <img src="<?php echo BASE_URL; ?>assets/images/groups.png" alt="">
                Grupos
            </div>
            <div class="left_feed_news_item">
                <img src="<?php echo BASE_URL; ?>assets/images/friend_list.png" alt="">
                <a 
                    href="<?php echo BASE_URL; ?>home/listar_usuarios/<?php echo $_SESSION['rede_social']; ?>">
                    Procurar Amigos
                </a>
            </div>
            <div class="left_feed_news_item">
                <p>CRIE</p>
            </div>
            <div class="left_feed_news_item">
                <p>Novo Grupo</p>
            </div>
            <div class="left_feed_news_item">
                <p><a href="<?php echo BASE_URL; ?>page/criar_pagina">Nova Página</a></p>
            </div>
        </div>
    </div>
</div>