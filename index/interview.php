<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>interview</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'inc/navbar.php'; ?>

<button id="mode-toggle">switch mode</button>

<main>

    <section id="interview">
        <h2>Interview</h2>
        <p> In de video hieronder heb ik een medestudent geinterviewd en een paar vragen gesteld over de opleiding die
            hij volgt.</p>
    </section>
    <video
            width="500" height="400" controls="controls">
        <source src="video/interview.mp4">
    </video>
</main>

<?php include 'inc/footer.php'; ?>

<script src="scripts.js"></script>
</body>
</html>