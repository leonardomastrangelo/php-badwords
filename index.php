<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Badwords</title>
</head>

<body>
    <header class="text-center">
        <h1 class="display-1">PHP Badwords</h1>
    </header>
    <main class="container">
        <form action="response.php" method="GET">
            <div class="py-4">
                <label for="paragraph">
                    Inserisci un testo!!
                </label>
                <textarea name="paragraph" id="paragraph" cols="30" rows="7" placeholder="Lorem Ipsum..."
                    class="form-control"></textarea>
            </div>

            <div class="py-4">
                <label for="censure">
                    Parola da censurare:
                </label>
                <input type="text" name="censure" id="censure" placeholder="Lorem" class="form-control w-25">
            </div>

            <div class="text-center">
                <button class="btn btn-primary" type="submit">Invia</button>
            </div>
        </form>
    </main>
</body>

</html>