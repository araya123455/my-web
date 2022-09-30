<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Araya Nakrun 6314110018</title>
</head>

<body>
    <?php
    $testString = "3.5 seconds";
    $testDouble = 79.2;
    $testInteger = 12;
    ?>
    <?php print($testString); ?> is a string<br />
    <?php print($testDouble); ?> is a double<br />
    <?php print($testInteger); ?> is a Integers<br />
    <br />
    Now, converting to other types:<br />
    <?php
    print("$testString");
    settype($testString,"double");
    print(" as a double is $testString <br/>");
    print("$testString");
    settype($testString,"Integer");
    print("Converting back to a string results in$testString <br /><br />" );
    $data = "98.6 degrees"; 
    print( "Now using type casting instead: <br />As a string - " . (string) $data . 
    "<br />As a double - " . (double) $data ."<br />As an integer - " . (integer) $data );
    ?>
    <p><a href="index_L9.html">Back</a></p>
</body>

</html>