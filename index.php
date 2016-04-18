<?php

include "assets/include.php";
require "assets/dbinfo.php";

$query1 = "SELECT id, first_name, last_name, pen_name FROM Authors ORDER BY first_name";
$resultObj = $connection->query($query1);

if(count($_POST) > 0){
    if($_POST['email'] != ""){
        $_SESSION['formPostData'] = $_POST;
        header('Location: final.php');
    } else {
        $emailError = "validation-error";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Julius index PHP</title>
    <link rel="stylesheet" href="assets/jcss.css">
</head>


<body class="jcenter">

<header id="Header">
    <img src="https://julius.firebaseapp.com/assets/images/photo.gif">
    <h2>Join my jBlog mailing list</h2>
</header>

<section id="Body">
    <form method="post" action="index.php">
        <div>
            <label>Jay's Favorite Author:</label>
            <select name="author" >
                <?php while ($row = $resultObj->fetch_assoc()) : ?>
                    <option value="<?=$row['id'] ?>">
                        <?=$row['first_name'] ?> <?=$row['last_name'] ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </div>

        <div class="multiple">
            <label>Favorite Century:</label>
            17th Century<input type="checkbox" name="century[]" value="17th">
            18th Century<input type="checkbox" name="century[]" value="18th">
            19th Century<input type="checkbox" name="century[]" value="19th">
        </div>

        <div>
            <label for="comments">Comments:</label>
            <textarea name="comments" id="comments" cols="30" rows="10"></textarea>
        </div>

        <div>
            <label for="name">Name:</label>
            <input id="name" name="name" type="text">
        </div>

        <div>
            <label for="email">Email:</label>
            <input id="email" name="email" type="text" class="<?=$emailError ?>">
        </div>

        <div class="multiple">
            <label for="">Join News Letter?</label> &nbsp;
            Yes<input type="radio" name="newsletter">
            No<input type="radio" name="newsletter">
        </div>

        <div>
            <label for="join">Join Now</label>
            <input id="join" name="join" type="submit">
        </div>
    </form>
</section>


</body>
</html>
