<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $baseUri ?>css/reset.css">
    <link rel="stylesheet" href="<?= $baseUri ?>css/style.css">
</head>

<body>
    <main>
        <header>
            <h1 class="header__title"><a href="<?= $router->generate('home')?>">Pokédex</a></h1>
            <a class="nav__link" href="">Recherch</a>
            <nav>
                <a class="nav__link" href="<?= $router->generate('home')?>">Liste</a>
                <a class="nav__link" href="<?= $router->generate('type')?>">Types</a>
            </nav>
        </header>
    