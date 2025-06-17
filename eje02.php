    <?php
        require_once "./vendor/autoload.php";

        $loader = new \Twig\Loader\FilesystemLoader("./template");
        $twig = new Twig\Environment($loader);
        echo $twig->render('eje02.html.twig', ['nombre' => $_GET['name']]);
    ?>