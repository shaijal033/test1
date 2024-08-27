<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="s1.php">
    <p>enter your preferences:cofee<input type="radio" name="radPref" value="coffe">tea<input type="radio" name="radPref" value="tea"></p>
    <p>know your languages:
        malayalam<input type="checkbox" value="malayalam" name="chkmal">
        english<input type="checkbox" value="english" name="chkeng">
        hindi<input type="checkbox" value="hindi" name="chkhnd"></p>
        <p>Select your Country
            <select name="selCountry">
            <option value="india">India</option>
            <option value="Ausis">Ausis</option>
            <option value="Srilanka">srilanka</option>
            <option value="pakisthan">Pakisthan</option>
            <option value="bangladesh">Bangladesh</option>
</select>
    <input type="submit" value="ok">
    <?php
    if(isset($_GET['radPref'])){
        echo $_GET['radPref'];
    }

    if(isset($_GET['chkmal'])){
        echo $_GET['chkmal'];
    }

    if(isset($_GET['chkeng'])){
        echo $_GET['chkeng'];
    }

    if(isset($_GET['chkhnd'])){
        echo $_GET['chkhnd'];
    }

    if(isset($_GET['selCountry'])){
        echo $_GET['selCountry'];
    }

    ?>
    </form>
</body>
</html>