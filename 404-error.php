<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 15.11.2018
 * Time: 19:08
 */
include_once "view/func.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>404</title>
        <meta name="description" content="Страница не найдена 404">
        <?php
            getHead();
        ?>
    </head>
    <body link="#204781" vlink="#204781" alink="#204781" class="wrapper">
        <?php
            getHeader();
        ?>
        <section class="content">
        <section class="page">
            <div class="introbuilding">
                    <p><b>Страница не найдена</b><br>
                    <br>
                    <span id="txthead"><a href="https://stroyconsalt.com.ua/">Вернуться на главную</a></span>
                    </p>
            </div>
        </section>
        </section>
        <?php
            getFooter();
        ?>
    </body>
</html>