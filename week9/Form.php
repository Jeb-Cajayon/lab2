<!DOCTYPE html>
<html>
<title>Introduction</title>
<head>
    <link rel="icon" href="https://i.imgur.com/fU1Lcmd.png">
</head>
<body style=
"background: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
url(https://i.pinimg.com/originals/e7/c0/f3/e7c0f3e93952b5afd8668cc83087ac09.gif);
background-size: 100% auto;">
    <div style=
    "background-color: rgb(0, 0, 0); 
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
    $name = $email = $gender = $comment = $website = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    
    <h2>PHP Form Validation Example</h2>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name">
    <br><br>
    E-mail: <input type="text" name="email">
    <br><br>
    Website: <input type="text" name="website">
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
    
</body>
</html>
