<?php

include "assets/include.php";

if( isset($_SESSION['formPostData']) ){
    $postedData = $_SESSION['formPostData'];
    unset($_SESSION['formPostData']); 
} else {
    header("Location: index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Julius final PHP</title>
    <link rel="stylesheet" href="assets/jcss.css">
</head>


<body >

<header id="Header" class="jcenter">
    <img src="http://www.whirlows.com/uploads/1/2/6/7/12673264/16812.jpg?568">
    <h2>Mailing List Information</h2>
</header>

<section id="body-final" class="jcenter">
    <div>
        <label for="">Favorite Author:</label>
        <span><?=$postedData['author'] ?> &nbsp;</span>
    </div>

    <div>
        <label for="">Favorite Century:</label>
        <span> <?=print_r($postedData['century']) ?> &nbsp;</span>
    </div>
    
    <div>
        <label for="">Comments:</label>
        <span> <?=$postedData['comments'] ?> &nbsp;</span>
    </div>

    <div>
        <label for="">Name:</label>
        <span> <?=$postedData['name'] ?> &nbsp;</span>
    </div>

    <div>
        <label for="">Email:</label>
        <span> <?=$postedData['email'] ?> &nbsp;</span>
    </div>

    <div>
        <label for="">Receive Newsletter:</label>
        <span> <?=$postedData['newsletter'] ?> &nbsp;</span>
    </div>
</section>

</body>
</html>
