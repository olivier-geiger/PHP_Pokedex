<?php
//dump($pokemons);
?>


<section>

<h2 class="pokemon__title"><?= $pokemons[0]->name?></h2>
    <ul class="list">

        <?php foreach ($pokemons as $pokemon) : ?>
            <li class="list__item">
                <a href="<?= $router->generate('detail', ['numero' => $pokemon->getNumero()]) ?>">
                    <figure>
                        <img src="<?= $baseUri ?>img/<?= $pokemon->getNumero() ?>.png">
                        <figcaption>#<?= $pokemon->getNumero() ?> <?= $pokemon->getNom() ?></figcaption>
                    </figure>
                </a>
            </li>
        <?php endforeach; ?>


    </ul>

</section>