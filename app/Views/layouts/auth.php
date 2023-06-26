<!doctype html>
<html class="no-js" lang="en">

<!--   03:20:39 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?= $title; ?> - Likey
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- CSS 
    ========================= -->

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/guest/assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/guest/assets/css/style.css">
    <link rel="stylesheet" href="/guest/assets/css/custom.css">

</head>

<body>
    <?= $this->renderSection('content') ?>
    <!-- Plugins JS -->
    <script src="/guest/assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="/guest/assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</body>

</html>