<?php
//dump($pokemons);
?>


<section>
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