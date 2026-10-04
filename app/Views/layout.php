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
    <?php if (session()->get('isLoggedIn')): ?>
        <a href="<?= site_url('logout') ?>">Logout (<?= esc(session()->get('username')) ?>)</a>
    <?php else: ?>
        <a href="<?= site_url('login') ?>">Login</a>
    <?php endif; ?>
    </nav>
    <hr>

    <?= $this->renderSection('content') ?>
</body>
</html>
