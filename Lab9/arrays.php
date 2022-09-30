<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Araya Nakarun 6314110018</title>
</head>

<body>
    <?php
    print("<strong>Creating the first array</strong><br />");
    $first[0] = "zero";
    $first[1] = "one";
    $first[2] = "two";
    $first[] = "three";

    for ($i = 0; $i < count($first); $i++)
        print("Element $i is $first[$i] <br />");

    print("<br/><strong>Creating the second array<strong/><br/>");

    $second = array("zero", "one", "two", "three");
    for ($i = 0; $i < count($second); $i++)
        print("Element $i is $second[$i] <br />");

    print("<br /><strong>Creating the third array</strong><br />");
    $third["ArtTic"] = 21;
    $third["LunaTic"] = 18;
    $third["GalAnt"] = 23;

    for (reset($third); $element = key($third); next($third))
        print("$element is $third[$element] <br />");

    print("<br /><strong>Creating the fourth array</strong><br />");

    $fourth = array(
        "January" => "first", "February" => "second",
        "March" => "third", "April" => "fourth",
        "May" => "fifth", "June" => "sixth",
        "July" => "seventh", "August" => "eighth",
        "September" => "ninth", "October" => "tenth",
        "November" => "eleventh", "December" => "twelfth"
    );
    foreach ($fourth as $element => $value)
        print("$element is the $value month <br />");
    ?>
    <p><a href="index_L9.html">Back</a></p>
</body>

</html>