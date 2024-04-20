<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yargc - <?php  
    if($page == "blog"){
        echo "Blog";
    }elseif($page == "home"){
        echo "Home";
    }else{
        echo "Projects";
    }
    
    ?></title>
    <link rel="stylesheet" href="src/output.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />    <style>
        body.dark {
            background-color: #202124;
            color: white;
        }

        body.light {
            background-color: #d2d2d2;
            color: black;
        }
    </style>
    <meta name="author" content="Kaan Yargc" />
<meta
  name="description"
  content="<?echo $desc;?>" />

</head>
<?php include 'theme.inc.php'; ?> <!-- Tema işlevlerini dahil et -->
<?php
// Tema oturumunu kontrol ederek, uygun sınıfı atayın
$themeClass = getTheme() === 'light' ? 'dark' : 'light';
?>
<body class="tracking-tight roboto <?= $themeClass; ?>">

<div class="mt-5 text-center ">
    <div class="flex justify-center items-center px-5">
        <a href="./" class=" mr-56 sm:mr-24 text-3xl font-bold leading-10 <?php if($themeClass = "white"){echo("text-dark");}else{echo("text-white");} ?>">yargc</a>
        <a class="  px-3 py-3 rounded-2xl <?php if($page == "blog"){echo"bg-blue-900 hover:bg-blue-900 text-white";}else{echo("bg-blue-700 hover:bg-blue-900 text-blue-200");} ?> text-blue-200 hover:text-red-200 px-6 py-3 mx-2 " href="./blog.php">Blog</a>
        <a class="  px-3 py-3 rounded-2xl <?php if($page == "projects"){echo"bg-blue-900 hover:bg-blue-900 text-white";}else{echo("bg-blue-700 hover:bg-blue-900 text-blue-200");} ?> text-blue-200 hover:text-red-200 px-6 py-3 mx-2" href="./projects.php">Projects</a>
        <a class=" px-3 py-3 rounded-2xl <?php if($page == "home"){echo"bg-blue-900 hover:bg-blue-900 text-white";}else{echo("bg-blue-700 hover:bg-blue-900 text-blue-200");} ?> hover:text-red-200 px-6 py-3 mx-2" href="./">Home</a>
        <form method="post">
            <button class="rounded-full bg-blue-700 hover:bg-blue-900 text-blue-200 hover:text-red-200 px-3 py-3 material-symbols-outlined" name="toggleTheme">dark_mode</button>
        </form>
    </div>
</div>

<?php
// Tema değiştirme düğmesine tıklanırsa, tema oturumunu değiştirin
if (isset($_POST['toggleTheme'])) {
    toggleTheme();
    header('Location: ' . $_SERVER['PHP_SELF']); // Sayfayı yenile
    exit;
}
?>

