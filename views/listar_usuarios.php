<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/page_view.css">
<?php require 'left_sidebar.php'; ?>
<div class="main_content">
    <?php foreach($get_usuarios_list as $usuarios_list): ?>
        <div class="page_content">
            <div class="page_info_content">
                <div class="page_img"><img src="<?php echo BASE_URL; ?>assets/images/<?php echo $usuarios_list['user_img']; ?>" alt=""></div>
                <div class="page_info">
                    <?php echo $usuarios_list['nome']; ?>
                </div>
            </div>
            <div class="page_button"><button type="submit">Amizade</button></div>
        </div>
    <?php endforeach; ?>
</div>
<?php require 'right_sidebar.php'; ?>