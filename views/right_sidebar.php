<div class="right_content">
    <div class="right_feed_navbar">
        <div class="right_feed_news">
            <div class="right_feed_news_item" onclick="abrir_messenger()">
                <img src="<?php echo BASE_URL; ?>assets/images/user.png" alt="">
                <a href="<?php echo BASE_URL; ?>perfil"><?php echo $get_user_data['nome']; ?></a>
            </div>
            <div class="right_feed_news_item" onclick="abrir_messenger()">
                <img src="<?php echo BASE_URL; ?>assets/images/messenger.png" alt="">
                Messenger <div class="notifica_count">3</div>
            </div>
            <div class="right_feed_news_item" onclick="abrir_messenger()">
                <img src="<?php echo BASE_URL; ?>assets/images/friend_requests.png" alt="">
                Solicitações <div class="notifica_count">4</div>
            </div>
            <div class="right_feed_news_item" onclick="abrir_messenger()">
                <img src="<?php echo BASE_URL; ?>assets/images/notifications.png" alt="">
                Notificações <div class="notifica_count">2</div>
            </div>
            <div class="right_feed_news_item">
                <a href="<?php echo BASE_URL; ?>header/sair">
                    <img src="<?php echo BASE_URL; ?>assets/images/sair.png" alt="">
                    Sair
                </a>
            </div>
            <div class="left_feed_news_item">
                <p>MEUS ATALHOS</p>
            </div>
            <?php foreach($get_my_shortcut as $my_shortcut): ?>
                <div class="left_feed_news_item">
                    <img src="<?php echo BASE_URL; ?>assets/images/<?php echo $my_shortcut['page_img']; ?>" alt="">
                    <a href="<?php echo BASE_URL; ?>page/index/<?php echo $my_shortcut['id']; ?>"><?php echo $my_shortcut['pagina_titulo']; ?></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>