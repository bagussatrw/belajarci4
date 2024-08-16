<!DOCTYPE html>
<html>
 
<head>
    <title><?= $title; ?></title>
</head>
 
<body>
    <?= $this->include('components/navbar') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->include('components/footer') ?>
</body>
 
</html>