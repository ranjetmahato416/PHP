<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Form Validation</title>
    <style>
        .error{
            color: red;
        }
        input{
            margin: 2px;

        }
    </style>
</head>
<body>
    <?php
    $nameErr = $emailErr = $commentErr = $websiteErr = $genderErr = "";
    $name = $email = $website = $comment = $gender = "";
    $RegExname = "/^[a-zA-Z-' ]*$/";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST['name'])){
            $nameErr = "Name required.";
        }
        else{
            $name = test_input($_POST['name']);
            if(!preg_match($RegExname, $name)){
                $nameErr = "Only letters and white spaces are allowed.";
            }
        }

        if(empty($_POST['email'])){
            $emailErr = "Email required.";
        }
        else{

            $email = test_input($_POST['email']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "Invalid Email.";
            }
        }
        if(empty($_POST['site'])){
            $website = "";
        }
        else{

            $website = test_input($_POST['site']);

            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "Invalid URL";
              }
        }
        if(empty($_POST['comment'])){
            $comment = "";
        }
        else{

            $comment= test_input($_POST['comment']);
        }
        
        if(empty($_POST['gender'])){
            $genderErr = "Gender required.";
        }
        else{

            $gender = test_input($_POST['gender']);
        }
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

<div>
    <h2>Form Validation In PHP</h2>
    <p><span class="error">* required fields</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr; ?></span><br>
        Email: <input type="email" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr; ?></span><br>
        URL: <input type="text" name="site" value="<?php echo $website;?>">
        <span> <?php echo $websiteErr; ?></span><br>
        Comment: <textarea name="comment" value="<?php echo $comment;?>" id="#" cols="30" rows="5"></textarea>
        <span> <?php echo $commentErr; ?></span><br>
        Gender:
        <span class="error">* <?php echo $genderErr; ?></span><br>
        Male: <input type="radio" name="gender" <?php if (isset($gender) && $gender == 'male'); ?> value="male"><br>
        Female: <input type="radio" name="gender" <?php if (isset($gender) && $gender == 'female'); ?> value="female"><br>
        Others: <input type="radio" name="gender" <?php if (isset($gender) && $gender == 'other'); ?> value="other"><br>
        <input type="submit">
    </form>

    <div>
        <h2>Your Input is:</h2>
        <?php
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
        echo "<br>";
        ?>
    </div>
</div>
    
</body>
</html>