<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/home.css">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/page_view.css">
<div class="left_content">
    <div class="left_feed_navbar">
        <div class="left_feed_explore">
            <div class="left_feed_news_item">
                <img src="<?php echo BASE_URL; ?>assets/images/homepage.png" alt="">
                <a href="<?php echo BASE_URL; ?>">Página Inicial</a>
            </div>
            <div class="left_feed_news_item">
                <p><?php echo $get_page_info['pagina_titulo']; ?></p>
            </div>
            <div class="left_feed_news_item">
                <img src="<?php echo BASE_URL; ?>assets/images/page.png" alt="">
                Páginas
            </div>
            <div class="left_feed_news_item">
                <img src="<?php echo BASE_URL; ?>assets/images/groups.png" alt="">
                Grupos
            </div>
            <?php if($_SESSION['rede_social'] == $get_page_info['id_adm']): ?>
                <div class="left_feed_news_item">
                    <img src="<?php echo BASE_URL; ?>assets/images/delete_page.png" alt="">
                    Excluir Página
                </div>
            <?php else: ?>
                <div class="left_feed_news_item">
                    <img src="<?php echo BASE_URL; ?>assets/images/delete_page.png" alt="">
                    Curtir Página
                </div>
            <?php endif; ?>
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
<div class="main_content">
    <div class="page_content">
        <div class="page_img"><img src="<?php echo BASE_URL; ?>assets/images/<?php echo $get_page_info['page_img']; ?>" alt=""></div>
        <div class="page_info">
            <?php echo $get_page_info['pagina_titulo']; ?>
            (219310) curtidas
        </div>
    </div>
</div>
<?php require 'right_sidebar.php'; ?>