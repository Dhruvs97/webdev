<?php
$x = mysqli_connect("localhost", "root", "", "dhruvs");
if($x == FALSE)
    die("couldn't connect to database" .mysqli_connect_error());
$q = "insert into reg values ('$_POST[name]', '$_POST[bday]', '$_POST[email]', '$_POST[regno]')";
if(mysqli_query($x, $q)) {
    echo "records added <br>";
    }
$y = "select * from reg";
if(mysqli_query($x, $y)) {
    echo " name : " .$_POST["name"]. " <br> reg no. : " .$_POST["regno"]. "<br> date of birth : " .$_POST["bday"]. "<br> email : " .$_POST["email"].;
}
mysqli_close($x);
?>