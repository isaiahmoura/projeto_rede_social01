<div class="feed_card">
    <div class="feed_info">
        <div class="post_info_user">
            <div class="feed_img_area">
                <img src="<?php echo BASE_URL; ?>assets/images/user.png" alt="">
            </div>
            <div class="feed_name_content">
                <div class="feed_username">
                    <a href="<?php echo BASE_URL; ?>perfil/index/<?php echo $post['id_usuario'];?>">
                        <?php echo $post['nome']; ?>
                    </a>
                    <div class="feed_toggle" onclick="delete_post(this,<?php echo $post['id']; ?>)">
                        <img src="<?php echo BASE_URL; ?>assets/images/menu.png" alt="">
                    </div>
                </div>
                <div class="feed_data">
                    <?php echo $post['data_post']; ?>
                </div>
            </div>
        </div>
        <div class="post_feed_txt">
            <?php echo $post['post_txt']; ?>
        </div>
        <div class="feed_buttons">
            <?php if($post['liked'] == '0'): ?>
                <div 
                    class="feed_buttons_item" 
                    onclick="add_like_post(<?php echo $post['id']; ?>)">
                    <img src="<?php echo BASE_URL; ?>assets/images/feed_like.png" alt="">
                    (<?php echo $post['posts_likes']; ?>)
                </div>
            <?php else: ?>
                <div 
                    class="feed_buttons_item" 
                    onclick="del_like_post(<?php echo $post['id']; ?>)">
                    <img src="<?php echo BASE_URL; ?>assets/images/feed_unlike.png" alt="">
                    (<?php echo $post['posts_likes']; ?>)
                </div>
            <?php endif; ?>
            <div class="feed_buttons_item" id="comentar_button">
                <img src="<?php echo BASE_URL; ?>assets/images/chat.png" alt="">
                Comentar (1111)
            </div>
        </div>
    </div>
</div>