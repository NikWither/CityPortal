<?php

session_start();

require_once __DIR__ . '/../../app/requires.php';
$config = require_once __DIR__ . '/../../config/app.php';

if (!isset($_SESSION['user'])) {
    echo 'Error handle action';
    die();
}

$id = $_POST['id'];
$tag = $_POST['tag'];

$query = $db->prepare("SELECT * FROM `ticket_tags` WHERE `id` = :id");
$query->execute(['id' => $tag]);
$tagExists = $query->fetch();

if ($tagExists === false) {
    echo 'Error handle action';
    die();
}

$query = $db->prepare("SELECT * FROM `users` WHERE `id` = :id");
$query->execute(['id' => $_SESSION['user']]);
$user = $query->fetch(PDO::FETCH_ASSOC);

if ((int)$user['group_id'] === (int)$config['admin_user_group']) {
    $query = $db->prepare("UPDATE `tickets` SET `tag_id` = :tag WHERE `id` = :id");
    try {
        $query->execute([
            'tag' => $tag,
            'id' => $id,
        ]);
    } catch(\PDOException $exception) {
        echo $exception;
    }
}

header('Location: /tickets-control.php');

