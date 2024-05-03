<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <main>
        <form action="./server.php">
        <p>
                <label for="paragrafo">paragrafo</label>
                <input type="text" name="paragrafo" placeholder="inserisci un paragrafo">
            </p>

            <button>invia</button>
        </form>

        <form action="./server.php" method="POST">
        <p>
                <label for="parola_da_censurare">parola censurata</label>
                <input type="text" name="parola_da_censurare" id="parola_da_censurare" placeholder="inserisci una parola">
            </p>

            <button>invia</button>
        </form>
    </main>

</body>
</html>