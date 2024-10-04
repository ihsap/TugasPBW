<!DOCTYPE html>
<html>
<head>
    <title><?= $data['title']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>assets/css/style.css">
</head>
<body>
<header>
    <h1><?= $data['title']; ?></h1>
    <nav>
        <a href="<?= BASEURL; ?>index.php">Home</a>
        <a href="<?= BASEURL; ?>index.php?url=login/index">Login</a>
        <a href="<?= BASEURL; ?>index.php?url=admin/index">Admin</a>
    </nav>
</header>
<div class="container">
