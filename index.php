<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <main>
        <form action="./server.php" method="POST">
            <div>
                <label for="paragrafo">paragrafo</label>
                <textarea name="paragrafo" id="paragrafo" placeholder="inserisci un paragrafo"> </textarea>
            </div>

            <div>
                <label for="parola_da_censurare">parola censurata</label>
                <input type="text" name="parola_da_censurare" id="parola_da_censurare" placeholder="inserisci una parola">
            </div>

            <button>invia</button>
        </form>
    </main>

</body>
</html>