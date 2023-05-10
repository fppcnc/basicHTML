<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--Vergleich von form post und form get-->
<form method="get" action="getLesen.php">
    <input type="text" name="bezeichnung"><br>
    <input type="submit">
</form>
<a href="getLesen.php?vorname=Tom&nachname=Toll"><button>Klick</button></a>
<a href="getLesen.php?action=editieren&id=5"><button>+</button></a>
<a href="getLesen.php?action=loeschen&id=5"><button>-</button></a>
</body>
</html>