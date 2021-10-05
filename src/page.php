<?php
require_once '../src/data.php';
?>
    <!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{DV.Campus} PHP Framework</title>
    <style>
        header,
        main,
        footer {
            border: 1px dashed black;
        }

        .post-list .product {
            max-width: 30%;
        }
        .post-list, h1 {
            text-align: center
        }
        nav ul {
            text-align: center;
        }
        nav ul li {
            display: inline-block;
            margin: 0 20px;
        }
        .logo{
            float: left;
        }
        .postimg {
            margin: 0 auto;
            display: block;
        }
    </style>
</head>
<body>
<header>
    <a href="/" title="{DV.Campus} PHP Framework">
        <img class="logo" src="logo.jpg" alt="{DV.Campus} Logo" width="200"/>
    </a>
    <nav>
        <ul>
            <?php foreach (blogGetCategory() as $category) : ?>
                <li>
                    <a href="/<?= $category['url'] ?>"><?= $category['name'] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>

<main>
    <?php require_once "../src/pages/$page" ?>
</main>

<footer>
    <nav>
        <ul>
            <li>
                <a href="/about-us">About Us</a>
            </li>
            <li>
                <a href="/terms-and-conditions">Terms & Conditions</a>
            </li>
            <li>
                <a href="/contact-us">Contact Us</a>
            </li>
        </ul>
    </nav>
    <p>© Default Value 2021. All Rights Reserved.</p>
</footer>
</body>
    </html>
