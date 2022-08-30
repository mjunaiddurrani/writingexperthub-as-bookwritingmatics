<?php
// $packagesJson = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/includes/packages.json');
// $packagesArray = json_decode($packagesJson,true);
// $packagesCat = $packagesArray['pacakges']['categories'];
// require('nitro.start.php');
require_once("token.php");
if (isset($_SERVER['HTTPS'])) {
    $requesMet = "https";
} else {
    $requesMet = "http";
}



?>

<base href="<?= $requesMet . '://' . $_SERVER['HTTP_HOST'] . '/' ?>">

<head>
    <title>Hire Professional writing experts hub & Publishers | writing experts hub</title>
    <meta name="keywords" content="">
    <meta name="description"
        content="writing experts hub help you to tell your story to the world. writing experts hub offers writing, publishing and marketing solutions for your book. ">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="favicon.png" type="image/png" />
    <link href="assets/css/m-style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/newcss.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@200;300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




</head>