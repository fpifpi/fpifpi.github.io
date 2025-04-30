<?php

require __DIR__ . '/auth.php';
$login = getUserLogin();

?>
<html>
<head>
    <title>FPI Bank</title>
</head>
<body>
<?php if ($login === null): ?>
<a href="/www/login.php">Войдите в аккаунт.</a>
<?php else: ?>
Добро пожаловать, <?= $login ?>
<br>
<a href="/logout.php">Выйти</a>
<?php endif; ?>
</body>
</html>
