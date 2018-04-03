<?php
extract($_POST);
$conn = mysqli_connect("localhost","root","","dhruvs");
$q = "select * from dhruvs where name = '$name' and regno = '$regno'";
$result = mysqli_query($conn, $q);
$count = mysqli_num_rows($result);
if($count != 1) {
    echo "<h2><font color = 'green'> Welcome ".$name."</font></h2>";        
}
else {
    print("<h2><a href = 'c1.html'> Welcome</a></h2>"); 
}
?>
    <!doctype html>
    <html>

    <head>
        <style>
            .alt {
                border: 1px solid aqua;
            }

            .alt tr {
                color: wheat;
            }

            .cen {
                text-align: center;
            }

            .main table,
            .main th,
            .main td {
                border: 1px solid violet;
                color: skyblue;

            }

            body {
                background-image: url(10-amazing-international-edm-festivals.jpg);
            }

            h3,
            h1 {
                color: lawngreen;
            }
            #event {
                width: 100%;
            }
    
        </style>
    </head>

    <body>

        <h1>1st Year Events</h1>
        <h3>23rd February</h3>
        <table class="main">
            <tr>
                <th>Events</th>
                <th>Time</th>
                <th>Venue</th>
            </tr>
            <tr class="cen">
                <td>Technical Quiz</td>
                <td>10:00 - 11:30</td>
                <td>Tech Park 3rd Floor</td>
            </tr>
            <tr class="cen">
                <td>IOT Workshop</td>
                <td>13:00 - 15:00</td>
                <td>Mini Hall 2</td>
            </tr>
            <tr class="cen">
                <td>Freshers Party</td>
                <td>19:00 - 22:00</td>
                <td>Tech Park Grounds</td>
            </tr>
        </table>
        <div class="loginpage">
            <form action="./event.php" method="post">
                <table class="alt">
                    <tr>
                        <h2 style="color: yellow;">Register for Event</h2>
                    </tr>
                    <tr>
                        <th>Username: </th>
                        <td><input type="text" placeholder="Username" name="username"></td>
                    </tr>
                    <tr>
                        <th>Event: </th>
                        <td>
                            <select name="event" id="event">
                            <option value="1">Event 1</option>
                            <option value="2">Event 2</option>
                            <option value="3">Event 3</option>
                            <option value="4">Event 4</option>
                            </select>
                        </td>
                        <td rowspan="2">
                            <input type="submit" value="Register" id = "submit">
                        </td>
                    </tr>
                </table>
            </form>
        </div>

    </body>

    </html>
