    <?php
        require_once "./vendor/autoload.php";

        $loader = new \Twig\Loader\FilesystemLoader("./template");
        $twig = new Twig\Environment($loader);
        echo $twig->render('eje01.html.twig', ['nombre' => $_GET['name']]);
    ?>