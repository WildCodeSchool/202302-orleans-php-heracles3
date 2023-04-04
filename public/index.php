<?php

require '../vendor/autoload.php';

/** ✅ DEBUT DE LA ZONE À MODIFIER ✅ **/

use App\Arena;
use App\Shield;
use App\Weapon;
use App\Fighter;
use App\Hero;

$heracles = new Hero('Heracles', 20, 6, 'heracles.svg');
$heracles->setX(5)->setY(5);
$bird1 = new Fighter('Bird', 25, 12, 'bird.svg');
$bird1->setX(3)->setY(5);
$bird2 = new Fighter('Bird', 25, 12, 'bird.svg');
$bird2->setX(8)->setY(8);
$bird3 = new Fighter('Bird', 25, 12, 'bird.svg');
$bird3->setX(7)->setY(4);

$monsters = [$bird1, $bird2, $bird3];

$arena = new Arena($monsters, $heracles);

$sword = new Weapon();
$bow = new Weapon(8, 5, 'bow.svg');

$heracles->setWeapon($bow);

$shield = new Shield();
$heracles->setShield($shield);


/** FIN DE LA ZONE A MODIFIER **/
/** ⛔ Ne pas modifier en dessous ⛔ **/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heracles Labours</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <h1>Heracles vs Stymphalian Birds</h1>
    </header>
    <main>
        <div class="fighters">
            <a href="#hero">
                <figure class="heracles">
                    <img src="<?= $heracles->getImage() ?>" alt="heracles">
                    <figcaption><?= $heracles->getName() ?></figcaption>
                </figure>
            </a>
        </div>

        <?php include 'map.php' ?>

    </main>

    <?php include 'inventory.php' ?>
</body>

</html>