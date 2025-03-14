<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>project homepage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'inc/navbar.php'; ?>

<button id="mode-toggle">switch mode</button>

<section id="groet">
    <p id="demo" class="demo"></p>
</section>

<main>

    <section id="about_me">
        <h1>Welkom</h1>
        <p>
            Mijn naam is Jayden Launuru,<br>
            Ik ben 16 jaar oud en ik woon in Rotterdam-Oost met mijn beide ouders en zus.
            Ik zit nu op het TCR en ik doe daar de opleiding Software developer.
        </p>

    </section>

    <img src="img/project_foto.jpg" alt="projectfoto" width="500" height="500">
</main>


<div id="cookie-popup" class="cookie-popup">
    <div class="cookie-content">
        <p>Wij maken gebruik van cookies. Accepteer je de cookies?</p>
        <div class="buttons">
            <button id="accept" class="cookie-btn">Accepteren</button>
            <button id="reject" class="cookie-btn">Afwijzen</button>
        </div>
    </div>
</div>

<?php include 'inc/Footer.php'; ?>

<script src="scripts.js"></script>
</body>
</html>