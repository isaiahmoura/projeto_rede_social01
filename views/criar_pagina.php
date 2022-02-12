<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/pages.css">
<?php require 'left_sidebar.php'; ?>
<div class="main_content">
    <div class="page_form">
        <form method="POST">
            <label for="page_title">Titulo da Página</label>
            <input type="text" name="page_title" placeholder="Titulo">
            <button type="submit" name="btn_page">Criar Página</button>
        </form>
    </div>
</div>
<?php require 'right_sidebar.php'; ?>