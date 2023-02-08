<!DOCTYPE html>
<html>
<title>Introduction</title>
<head>
    <link rel="icon" href="https://i.imgur.com/fU1Lcmd.png">
</head>
<body style=
"background-image: url(https://i.pinimg.com/originals/e7/c0/f3/e7c0f3e93952b5afd8668cc83087ac09.gif);
background-size: 100% auto;">
    <div style=
    "background-color: black; 
    border: solid; 
    padding: 25px;
    position: fixed;
    top: 0;
    left: 0; 
    width: 100%;">

        <h1 style=
        "color:white;
        font-family: Arial;
        text-align: center;">
            WELCOME TO MY WEBSITE
        </h1>
    </div>

    <?php
    $servername = "localhost";
    $username = "webprogmi212";
    $password = "webprogmi212";
    $dbname = "webprogmi212";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM jgcajayon_credentials";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "- ID: " . $row["id"]. "<br>" .
                 "- Name: " . $row["name"]. "<br>" .
                 "- Website: " . $row["website"]. "<br>" .
                 "- Email: " . $row["email"]. "<br>" .
                 "- Comment: " . $row["comment"]. "<br>" .
                 "- Gender: " . $row["gender"]. "<br>" .
                 "- Registration Date: " . $row["reg_date"]. "<br><br>";
                }
            
            } else {
                echo "0 results";
            }
            
            $conn->close();
    ?>

</body>
</html>