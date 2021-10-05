<?php

require_once '../src/data.php';

?>
<main>
     <section title="Recent Blog Posts">
             <h1>Recent Posts</h1>
             <div class="post-list">
                 <?php foreach (blogGetPostByDate() as $post) : ?>
                     <div class="post">
                         <a href="/<?= $post['url'] ?>" title="<?= $post['name'] ?>"><br><?= $post['name'] ?></a><br>
                         <a href="/<?= $post['url'] ?>" title="<?= $post['name'] ?>">
                             <img src="/post-placeholder.png" alt="<?= $post['name'] ?>" width="200"/>
                         </a>
                         <div>Author: <?= $post['author'] ?></div>
                         <div>Date: <?= $post['date'] ?></div>
                     </div>
                 <?php endforeach; ?>
             </div>
           </section>
</main>
