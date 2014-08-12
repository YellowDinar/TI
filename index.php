<?php require_once 'ti/ti.php' ?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <div class="header">
            <?php startblock('header') ?>
                <h1>Hello, World!</h1>
            <?php endblock() ?>
        </div>
        <div class="main">
            <?php startblock('main') ?>
                <h1>Main Content</h1>
                <a href="page.php">Другая страница</a>
            <?php endblock() ?>
        </div>
        <div class="footer">
            <?php startblock('footer') ?>
                <h1>tel:000000000000</h1>
            <?php endblock() ?>
        </div>
    </body>
</html>