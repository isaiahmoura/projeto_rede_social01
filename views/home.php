<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/home.css">
<script src="<?php echo BASE_URL; ?>assets/js/app_home.js"></script>
<div class="requests">
    <div class="requests_header">Solicitações</div>
    <div class="requests_users">
        <div class="requests_users_nome">
            <img src="<?php echo BASE_URL; ?>assets/images/user.png" alt="">
            Isaias Moura
        </div>
        <button>Aceitar</button>
        <button>Recusar</button>
    </div>
</div>

<?php require 'left_sidebar.php'; ?>

<div class="main_content">
    
    <div class="user_nav">
        <?php require 'user_nav.php'; ?>
    </div>

    <?php require 'modal_messenger.php'; ?>
    
    <div class="post_area">
        <div class="post_header">
            <div class="post_header_item">
                <img src="<?php echo BASE_URL; ?>assets/images/pencil.png" alt="">
                Criar uma Postagem
            </div>
            <div class="post_header_item">
                <img src="<?php echo BASE_URL; ?>assets/images/camera.png" alt="">
                Foto/Vídeo
            </div>
        </div>
        <div class="post_form">
            <div class="post_form_img"></div>
            <input type="text" name="" id="post_enviar" placeholder="No que voçê está pensando, <?php echo $get_user_data['nome']; ?> ??">
        </div>
        <div class="post_buttons">
            <div class="post_buttons_left">
                <div class="post_buttons_item">
                    <img src="<?php echo BASE_URL; ?>assets/images/gallery.png" alt="">
                    Foto/Video
                </div>
                <div class="post_buttons_item">
                    <img src="<?php echo BASE_URL; ?>assets/images/happy.png" alt="">
                    Sentimentos
                </div>  
            </div>
            <div class="post_buttons_right">
                <div class="post_buttons_item_right" onclick="enviar_post()">
                    Publicar
                </div>
            </div>
        </div>
    </div>
    <?php foreach($get_feed as $post): ?>
        <?php require 'feeds.php' ?>
    <?php endforeach; ?>
</div>

<?php require 'right_sidebar.php'; ?>