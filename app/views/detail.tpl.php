<?php 
 //dump($pokemons);

 //dump($types);
?>

<h2 class="pokemon__title">Détails de <?= $pokemons[0]->getNom() ?></h2>
<section class="detail">
    <img src="<?= $baseUri ?>img/<?= $pokemonNumero ?>.png" alt="">
    <div class="detail__info">
        <h3 class="detail__title">#<?= $pokemonNumero ?> <?= $pokemons[0]->getNom() ?></h3>
        <?php foreach($pokemons as $pokemon):?>
        <a class="btn" href="<?=$router->generate('type-id', ['id' => $types[($pokemon->type_id)-1]->getId()]) ?>" style="background-color: #<?=$types[($pokemon->type_id)-1]->getColor()?>"><?=$types[($pokemon->type_id)-1]->getName()?></a>
        <?php endforeach;?>
        <h4 class="stat__title">Statistiques</h4>
        <div class="stat">
            <p class="stat__item">PV</p>
            <p class= "stat__value"><?=$pokemons[0]->getPv()?></p>
            <div class="stat__bar">
                <div class="stat__bar--white" style="width:calc(<?=$pokemons[0]->getPv()?>/255*100%)"></div>
                <div class="stat__bar--dark" style="width:calc(100% - <?=$pokemons[0]->getPv()?>/255*100%)"></div>
            </div>
        </div>
        <div class="stat">
            <p class="stat__item">Attaque</p>
            <p class= "stat__value"><?= $pokemons[0]->getAttaque() ?></p>
            <div class="stat__bar">
                <div class="stat__bar--white" style="width:calc(<?=$pokemons[0]->getAttaque()?>/255*100%)"></div>
                <div class="stat__bar--dark" style="width:calc(100% - <?=$pokemons[0]->getAttaque()?>/255*100%)"></div>
            </div>
        </div>
        <div class="stat">
            <p class="stat__item">Défense</p>
            <p class= "stat__value"><?= $pokemons[0]->getDefense() ?></p>
            <div class="stat__bar">
                <div class="stat__bar--white" style="width:calc(<?=$pokemons[0]->getDefense()?>/255*100%)"></div>
                <div class="stat__bar--dark" style="width:calc(100% - <?=$pokemons[0]->getDefense()?>/255*100%)"></div>
            </div>
        </div>
        <div class="stat">
            <p class="stat__item">Attaque Spé.</p>
            <p class= "stat__value"><?= $pokemons[0]->getAttaqueSpe() ?></p>
            <div class="stat__bar">
                <div class="stat__bar--white" style="width:calc(<?=$pokemons[0]->getAttaqueSpe()?>/255*100%)"></div>
                <div class="stat__bar--dark" style="width:calc(100% - <?=$pokemons[0]->getAttaqueSpe()?>/255*100%)"></div>
            </div>
        </div>
        <div class="stat">
            <p class="stat__item">Défense Spé.</p>
            <p class= "stat__value"><?= $pokemons[0]->getDefenseSpe() ?></p>
            <div class="stat__bar">
                <div class="stat__bar--white" style="width:calc(<?=$pokemons[0]->getDefenseSpe()?>/255*100%)"></div>
                <div class="stat__bar--dark" style="width:calc(100% - <?=$pokemons[0]->getDefenseSpe()?>/255*100%)"></div>
            </div>
        </div>
        <div class="stat">
            <p class="stat__item">Vitesse</p>
            <p class= "stat__value"><?= $pokemons[0]->getVitesse() ?></p>
            <div class="stat__bar">
                <div class="stat__bar--white" style="width:calc(<?=$pokemons[0]->getVitesse()?>/255*100%)"></div>
                <div class="stat__bar--dark" style="width:calc(100% - <?=$pokemons[0]->getVitesse()?>/255*100%)"></div>
            </div>
        </div>
    </div>
</section>

<a class="link" href="<?=$router->generate('home')?>">Revenir à la liste</a>