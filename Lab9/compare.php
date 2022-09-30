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
   // create array fruits 
   $fruits = array("apple", "orange", "banana");

   // iterate through each array element 
   for ($i = 0; $i < count($fruits); $i++) {

       // call function strcmp to compare the array element 
       // to string "banana" 
       if (strcmp($fruits[$i], "banana") < 0)
           print($fruits[$i] . " is less than banana ");
       print($fruits[$i] . " is equal to banana ");

       // use relational operators to compare each element 
       // to string "apple" 
       if ($fruits[$i] < "apple")
           print("and less than apple! <br />");
       elseif ($fruits[$i] > "apple")
           print("and greater than apple! <br />");
       elseif ($fruits[$i] == "apple")
           print("and equal to apple! <br />");
   }
   ?>
  <p><a href="index_L9.html">Back</a></p>
</body>

</html>