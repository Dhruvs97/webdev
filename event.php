<?php
$showLogin = FALSE;
if(!($_REQUEST['username'])) {
    $message = "Registration Unsuccesfull &bull; Username is Required!!";
}
else {
    $db = new mysqli('localhost', 'root', '', 'dhruvs');
    extract($_REQUEST);
    if($db->connect_errno > 0){
        die('Unable to connect to database [' . $db->connect_error . ']');
    }
    
    $sql = "INSERT INTO `event`(`username`,`event`) VALUES ('$username','$event')";
    if(!$result = $db->query($sql)){
        die('There was an error running the query [' . $db->error . ']');
    }
    $showLogin = TRUE;
    $message = "Registration Succesfull";
    $s = "SELECT autoinc FROM event";
    $result = mysqli_query($db, $s) or die(Error);
   $x=0;
   if ($result->num_rows > 0) {
    
        while($row = $result->fetch_assoc()) {
            
            //echo "id: " . $row["autoinc"];
            $x=$row["autoinc"];
    }
} 
    //echo mysqli_num_rows($result);
}
?>
<!doctype html>
<html>

<head>
    <style>
        .cen {
            text-align: center;

        }

        table,
        th,
        td {
            border: 1px solid lightblue;
            color: skyblue;
        }

        body {
            background-image: url(10-amazing-international-edm-festivals.jpg);
        }

        h3,
        h1 {
            color: lawngreen;
        }

    </style>
</head>

<body>
    <div class="hello" >
    <?php 
        print("<br><br><h4><font color = 'green'> Welcome, ".$username." registered for event ".$event.", thank you registering with us.</font></h4>");
        echo "<font color = 'blue'>Number of participants are: ".$x. "</font>";
     ?>
    </div>
</body>

</html>