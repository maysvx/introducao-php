<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos PHP</title>
</head>

<body>

    <!--include_once: inclui um arquivo apenas uma vez-->
    <?php
    include_once('includes/header.php');
    ?>

    <section>
        <?php
        echo 'olá amigos'
        ?>
    </section>

    <!--require: obriga a pagina a ter o arquivo selecionado // require_once: obriga a pagina a ter o arquivo selecionado e o imprime apenas uma vez-->
    <?php
    require('includes/footer.php');
    ?>

</body>

</html>