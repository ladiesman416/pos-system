<!DOCTYPE html>
<html lang="en">

   <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">

<head>
    <meta charset="UTF-8">
    <title>POS System</title>
</head>
<body>
    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/customers">Customers</a> |
        <a href="/users">Users</a>
    </nav>
    <hr>

    <?= $this->renderSection('content') ?>
</body>
</html>
