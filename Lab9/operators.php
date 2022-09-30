<!DOCTYPE "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Araya Nakarun 6314110018</title>
</head>

<body>
    <?php
    error_reporting(0);
    $a = 5;
    print("The value of variable a is $a <br/>");
    define("VALUE", 5);
    $a = $a + VALUE;
    print("Variable a after adding constant VALUE is $a <br/>");

    $a *= 2;
    print("Multiplying variable a by 2 yields $a <br />");

    if ($a < 50)
        print("Variable a is less than 50 <br />");

    $a += 40;
    print("Variable a after adding 40 is $a <br />");

    if ( $a < 51 ) 
    print( "Variable a is still 50 or less<br />" );

    elseif ( $a < 101 )
    print( "Variable a is now between 50 and 100,inclusive<br/>");

    else
    print( "Variable a is now greater than 100<br/>");

    print( "Using a variable before initializing: $nothing  <br />" );

    $test = $num + VALUE;
    print( "An uninitialized variable plus constant VALUE yields $test <br />" ); 

    $str = "3 dollars";
    $a = $a + $str; 
    print( "Adding a string to variable a yields $a <br />" ); 
    ?>
   <p><a href="index_L9.html">Back</a></p>
</body>

</html>