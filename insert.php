<?php
$n = mysqli_connect("localhost","root","","dhruvs");
if ($n == FALSE)
    die("couldn't connect".mysqli_connect_error());
$q = "insert into emp values ('dhruv', '155', '1234')";
if(mysqli_query($n, $q))
    echo "values inserted";
else
    echo "couldn't insert". mysqli_error($n);
mysqli_close($n);
?>