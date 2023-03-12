<?php

session_start();
require("config.php");

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"/>
    <link rel="stylesheet" href="<?php echo $base; ?>/assets/css/login.css" />
</head>
<body>
    <header>
        <div class="container">
            <a href="<?php echo $base; ?>"><img src="<?php echo $base; ?>/assets/images/devsbook_logo.png" /></a>
        </div>
    </header>
    <section class="container main">
        <form method="POST" action="<?php echo $base; ?>/loginAction.php">

            <?php if(isset($_SESSION['alert'])){
                $alert = $_SESSION['alert'];
                $_SESSION['alert'] = '';
            }

            ?>

            <p><?php echo $alert; ?></p><br/>
            <input placeholder="Digite seu e-mail" class="input" type="email" name="email" />

            <input placeholder="Digite sua senha" class="input" type="password" name="password" />

            <input class="button" type="submit" value="Acessar o sistema" />

            <a href="<?php echo $base; ?>/signup.php">Ainda não tem conta? Cadastre-se</a>
        </form>
    </section>
</body>
</html>