<?php
// dump($types);
?>
<p>Cliquez sur un type pour voir tous les Pokémon de ce type</p>

<div class="list-type">
    <?php foreach($types as $type):?>
    <a href="<?=$router->generate('type-id', ['id' => $type->getId()])?>" style="background-color: #<?=$type->getColor()?>" class="list-type__item"><?=$type->getName() ?></a>
    <?php endforeach; ?>
</div>