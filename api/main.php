<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.php" type="text/css"/>
</head>

<body>

    <h1 class="text">Project:</h1>
    <p>
        
    <div>
    <h1>Title: Development of an ebook store</h1>
<p>
    Making an e-book library for easy access to books of all genres and related languages for people all around the world.
    The User registers with an account and gets access to Free Tier E-books , for premium books a premium monthly subscription is needed.
</p>
    </div>

    <h1 class="text">Founder:</h1>
    <?php
    include "array.php";

    foreach ($TeamMembers as $member) {
        echo"
                    <p>$member->name
                    <br>
                    $member->rollNo</p>
            <hr>
        ";
    }


    ?>
</body>

</html>