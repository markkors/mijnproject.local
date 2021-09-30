<?php

$p1 = new person("a","b");
$p2 = new person("c","d");

$persons = new groep();
$persons->addPerson($p1);
$persons->addPerson($p2);

var_dump($persons);

?>
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
Dit is de homepage
</body>
</html>
