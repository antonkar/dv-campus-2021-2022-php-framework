<?php

require_once '../src/data.php';

?>

<main>
    <img class="postimg" src="post-placeholder.png" alt="<?= $data['name'] ?>" width="300"/>
    <h1><?= $data['name'] ?></h1>
    <p><?= $data['description'] ?></p>
    <div>Author: <?= $data['author'] ?></div>
    <div>Date: <?= $data['date'] ?></div>
</main>


