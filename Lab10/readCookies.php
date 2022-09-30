<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!-- Fig. 26.24: read cookies.php -->
<!-- Program to read cookies from the client's computer -->

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Read Cookies</title>
</head>

<body style="font-family: arial, sans-serif">
    <p>
        <strong>
            The following data is saved in a cookie on your
            computer. </strong>
    </p>

    <table border="5" cellspacing="0" cellpadding="10">
        <?php
        error_reporting(0);
        // iterate through array $_COOKIE_ and print 
        // name and value of each cookie 
        foreach ($_COOKIE as $key => $value)
            print("<tr><td bgcolor=\"#F0E68C\">$key</td>
            <td bgcolor=\"#FFA500\">$value</td> 
            </tr>" ); 
        ?>
    </table>
    <p><a href="index_L10.html">Back</a></p>

</body>
</html>