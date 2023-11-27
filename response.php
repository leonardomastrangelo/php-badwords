<?php
// text & length
$paragraph = $_GET["paragraph"];
$paragraphLength = strlen($paragraph);
// censure & text & length
$censure = $_GET["censure"];
$censuredText = str_replace($censure, "***", $paragraph);
$censuredTextLength = strlen($censuredText);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Badwords Response</title>
</head>

<body>
    <header>
        <h1>PHP Badwords Response</h1>
        <main class="container">
            <!-- text & length -->
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

            <!-- censure & text & length -->
            <div>
                <h2>
                    Testo con censura:
                </h2>
                <p>
                    <?php echo $censuredText ?>
                </p>
                <span>
                    Lunghezza del testo censurato:
                    <?php echo $censuredTextLength ?>
                </span>
            </div>
        </main>
    </header>

</body>

</html>