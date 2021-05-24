<?php
session_start();
if (isset($_POST['add_basket'])) {
    $id = $_POST['id'];
    $name_goods = $_POST['name-goods'];
    $code = $_POST['code'];
    $stan_by = $_POST['stan-by'];
    $price = $_POST['price'];
    $code = $_POST['code'];
    $img = $_POST['img'];

    if(isset($_SESSION['basket'][$id]) && array_key_exists($id, $_SESSION['basket'])){
        $_SESSION['basket'][$id]['count'] += 1;
        $_SESSION['basket'][$id]['price'] += $price;
    }
    if (!isset($_SESSION['basket'][$id])) {
        $_SESSION['basket'][$id]['count'] = 1;
        $_SESSION['basket'][$id]['price'] = $price;
        $_SESSION['basket'][$id]['name'] = $name_goods;
        $_SESSION['basket'][$id]['img'] = $img;
    }

    header('Location: '.$_SERVER['HTTP_REFERER']);
}

if(isset($_POST['delete'])){
    $id_delete = $_POST['delete'];
    unset($_SESSION['basket'][$id_delete]);
    header('Location: '.$_SERVER['HTTP_REFERER']);
}
?>