<?php
session_start();
global $theme;

function setTheme(string $name)
{
    global $theme;
    $theme = $name;
    $_SESSION['theme'] = $theme; // oturuma kaydet
}

function toggleTheme()
{
    setTheme(getTheme() === 'light' ? 'dark' : 'light');
}

function getTheme()
{
    global $theme;
    // Eğer oturumda tema varsa, oturumda saklanan temayı kullan
    // Aksi takdirde, varsayılan olarak 'light' temasını kullan
    return isset($_SESSION['theme']) ? $_SESSION['theme'] : 'light';
}
?>
