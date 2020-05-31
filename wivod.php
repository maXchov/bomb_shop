<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
	display: flex;
	text-align: center;
    position: fixed;
	}
    </style>
</head>
<body>
   <h1 class="container"><a href="index.html">Спасибо за отзыв!</a> </h1> 
</body>
</html>
<? 




$file = fopen('Отзывы.txt', 'a+');
fwrite($file, $_GET['name']."\n");
fwrite($file, $_GET['text']."\n\n");

if($seccess == falze){
    $_SESSION['rez'] = "gg";
    header('Location: otsivi.php');
    fclose($file);
    header("Location: otsivi.php");
}
?>