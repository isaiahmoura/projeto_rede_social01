<html>
    <head>
        <title>rede social01</title>
        <meta charset="UTF-8">
        <link rel="icon" href="assets/images/gallery.png">
        <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/css/login.css">
    </head>
    <body>
        <div class="header">
            Galeria 01
        </div>
        <div class="login">
            <div class="login_header">Acessar o sistema</div>
            <div class="login_form">
                <form method="POST">
                    <input type="email" name="email" placeholder="E-mail">
                    <input type="password" name="senha" placeholder="Senha">
                    <?php if(isset($_SESSION['flash']) && !empty($_SESSION['flash'])): ?>
                        <div class="flash"><?php echo $_SESSION['flash']; ?></div>
                    <?php endif; ?>
                    <button type="submit" name="acessar">Acessar</button>
                    <div class="login_form_links"><a href="<?=$base;?>/cadastro">Não têm uma conta? Clique aqui</a></div>
                </form>
            </div>
        </div>
        <div class="author">
            Criado por Isaias Moura - 
            <a href="https://www.github.com/isaiahmoura">Github</a>
            <a href="https://www.facebook.com/profile.php?id=100073491484813">Facebook</a>
        </div>
    </body>
</html>