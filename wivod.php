<? 
session_start();



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