<?php

if ($lang == "fa") {
    $p = "rtl";
    $left_or_right = "right";
} elseif ($lang == "en") {
    $p = "ltr";
    $left_or_right = "left";
}

?>
<!DOCTYPE html>
<html dir="<?= $p ?>" lang="<?= $lang ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.min.css">
    <title>Loghatt</title>
</head>

<body class="relative overflow-hidden">
    <div class="w-screen  h-screen flex justify-start items-center">
        <div class="hidden lg:flex  text-sm font-bold w-1/12 h-full justify-end flex-col items-center box-border pb-16">
            <span class="rotate-90 mb-28  w-full">روز هنر اسلامی</span>
            <span class="rotate-90">2202.12.45</span>
        </div>
        <div class="block w-7/12 bg-white h-full"></div>
        <div class="hidden lg:block w-4/12 bg-blue-700 h-full"></div>
        <div class="absolute right-1  z-4 w-[98%] lg:w-9/12 h-[95%]   rtl:lg:right-32 ltr:lg:left-32  lg:top-2">
            <?php
            require "layouts/header.php";

            require $page . ".php";

            ?>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="./assets/scripts/main.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>