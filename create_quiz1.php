<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script></head>
<body>
<?php
require_once __DIR__ . '/database/db.class.php';
require_once __DIR__ . '/model/ponudjeni_odgovor.class.php';
require_once __DIR__ . '/model/question.class.php';
require_once __DIR__ . '/model/quiz.class.php';
require_once __DIR__ . '/model/result.class.php';
require_once __DIR__ . '/model/user.class.php';
require_once __DIR__ . '/model/QuizService.class.php';

?>
<div class="pravokutnik"></div>
<div class="header"></div>
<div class="sadrzaj">
<p><form action='create_quiz2.php' method = "post">Unesi ime kviza: <input type="text" name="quiz_name" method="post"></p>

<p><input class="button" type = "submit" value="Kreiraj kviz!"></input></p></form>

<p><form action="menu.php"><input class="button" type = "submit" value="Vrati se na meni!" action="menu.php"></input></form>
</div>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Indie+Flower" />

<style>
.header{
padding: 10px;
font-family: "Indie Flower";
font-size: 28px;
color: white;
position: absolute;
top: 0;
left:0;
height: 120px;
width:100vw;
background-color: #d3d3d3;

}


.pravokutnik{
position: fixed;
top:0;
left:0;
bottom: 0;
width: 40px;
background-color: #a3a3a3;



}
.sadrzaj{
position:absolute;
top:50px;
left: 60px;
font-family: "Indie Flower";
font-size: 25px;
color: #000;}

a{
font-family: "Indie Flower";
font-size: 25px;
color: #000;
}

a:hover, a:visited{
opacity:0.7;
font-family: "Indie Flower";
font-size: 25px;
color: #000;
}



input[type="text"]
{
    font-size:16px;
    font-family: "Indie Flower";
    color: #a3a3a3;
}


.button{
  background-color: #a3a3a3;
  border: none;
  color: #000;
  font-family: "Indie Flower";
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 20px;
}
.button:hover{
opacity:0.7;

}</stlye>
</body>
</html>