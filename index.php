<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 🐘</title>
    <link rel="stylesheet" href="styles.css">

    
</head>
<body>
    <main>
        <form action="includes/formhandler.php" method="POST">

            <label for="firstname">Firstname?</label>
            <input required id="firstname" type="text" name="firstname" placeholder="Firstname..." >

            <label for="lastname">Lastname?</label>
            <input id="lastname" type="text" name="lastname" placeholder="Lastname..." >

            <label for="favouritepet">Favourite Pet?</label>
            <select name="favouritepet" id="favouritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>

            <button>Submit</button>
        </form>
    </main>

</body>
</html>