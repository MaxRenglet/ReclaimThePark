<?php

$titre_fr = $widget['hero_1']['titre_fr'];
$titre_nl = $widget['hero_1']['titre_nl'];
$titre_en = $widget['hero_1']['titre_en'];

$descr_fr = $widget['hero_1']['description_fr'];
$descr_nl = $widget['hero_1']['description_nl'];
$descr_en = $widget['hero_1']['description_en'];


$image = $widget['hero_2']['image']['url'];
$image_side = $widget['hero_2']['image_side'];
$lien = $widget['hero_2']['lien'];
$label_lien = $widget['hero_2']['label_lien'];


?>
<section class="hero">
	<header>
		<h1><?= $titre_fr ?></h1>
		<h1><?= $titre_nl ?></h1>
		<h1><?= $titre_en ?></h1>
	</header>
	<section>
		<div class="row">
        <?php if($image_side == true){ ?>
        <div class="col-md descr">
            <?= $descr_fr ?>
            <?= $descr_nl ?>
            <?= $descr_en ?>
        </div>
        <div class="col-md image">
           <img src="<?= $image ?>" />
        </div>
        <?php }; ?>
        <?php if($image_side == false){ ?>
        <div class="col-md image">
           <img src="<?= $image ?>" />
        </div>
        <div class="col-md descr">
            <?= $descr_fr ?>
            <?= $descr_nl ?>
            <?= $descr_en ?>
        </div>
        <?php }; ?>
		</div>
	</section>
</section>

<div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
         <div class="box">Responsive</div>
     </div>
 </div>
