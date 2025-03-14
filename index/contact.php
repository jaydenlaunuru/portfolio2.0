<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'inc/navbar.php'; ?>

<button id="mode-toggle"></button>

<main>

    <section id="contact">
        <h2>Contact me</h2>

        <form action="mailto:9025846@student.zadkine.nl">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname"><br>
            <label for="cname">Company name:</label><br>
            <input type="text" id="cname" name="cname"><br>
            <label for="phone">Tel number:</label><br>
            <input type="text" id="phone" name="phone"><br>

            <label for="message">message:</label><br>
            <textarea id="message" name="message" required></textarea><br>

            <button type="submit">send</button>
        </form>
    </section>

</main>

<?php include 'inc/footer.php'; ?>

<script src="scripts.js"
</body>
</html>