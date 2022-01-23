<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form method="get" action="/user.php">

    <label for="id-username"></label>
    <input type="text" name="username" id="id-username" placeholder="Entrez votre nom d'utilisateur :">
    <label for="id-name"></label>
    <input type="text" name="name" id="id-name" placeholder="Entrez votre prénom :">
    <input type="submit" value="submit">
</form>
<hr>
<br>
<form method="post" action="/user.php">

    <label for="id-username-post"></label>
    <input type="text" name="username" id="id-username-post" placeholder="Entrez votre nom d'utilisateur :">
    <label for="id-name-post"></label>
    <input type="text" name="name" id="id-name-post" placeholder="Entrez votre prénom :">
    <input type="submit" value="submit">
</form>
<hr>
<br>
<form method="post" action="/index.php" class="form">
    <label for="sexe"></label>
    <select name="genre" id="sexe">
        <option value="Mr">Mr</option>
        <option value="Mme">Mme</option>
    </select>
    <label for="id-username-post1"></label>
    <input type="text" name="username" id="id-username-post1" class="form" placeholder="Entrez votre nom d'utilisateur :">
    <label for="id-name-post1"></label>
    <input type="text" name="name" id="id-name-post1" class="form" placeholder="Entrez votre prénom :">
    <input type="submit" value="submit" id="submit" class="form">
</form>
<script src="app.js"></script>
</body>
</html>

<?php
if (isset($_POST)){
    foreach ($_POST as $key => $value){
        echo "$key $value <br>" ;
    }
}
else{
    echo "Non existant";
}

$file = "./index.php";

if (file_exists($file)){
    $infos = pathinfo($file);
    echo $infos['basename'] . "<br>";
    $exten = $infos['extension'];
    if ($exten === "pdf"){
        echo $exten;
    }
    else{
        echo "Not a pdf bro";
    }
}