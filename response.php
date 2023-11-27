<?php
$paragraph = $_GET["paragraph"];
$paragraphLength = strlen($paragraph);
$censure = $_GET["censure"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Badwords Response</title>
</head>

<body>
    <header>
        <h1>PHP Badwords Response</h1>
        <main class="container">
            <div>
                <h2>
                    Il tuo testo:
                </h2>
                <p>
                    <?php echo $paragraph ?>
                </p>
                <span>
                    Lunghezza del testo:
                    <?php echo $paragraphLength ?>
                </span>
            </div>
        </main>
    </header>

</body>

</html>