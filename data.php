<?php

date_default_timezone_set('Europe/Moscow');

$is_auth = rand(0, 1);
$user_name = 'Semyonov Sergey'; // укажите здесь ваше имя
$page_name = "Главная";

$con = mysqli_connect("localhost", "root", "", "yeticave");
mysqli_set_charset($con, "utf8");

if ($con) {
    $sql = "SELECT name, name_cat, price_begin, image FROM lots LEFT JOIN categories c ON category = c.id";
    $result = mysqli_query($con, $sql);
    $ad = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $sql = "SELECT name_cat, code FROM categories";
    $result = mysqli_query($con, $sql);
    $cat = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
else {
    print("Ошибка подключения: " . mysqli_connect_error());
}
//var_dump($cat);

//$cat = ["Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"];
/*
$ad = [
    [
        "title" => "2014 Rossignol District Snowboard",
        "category" => "Доски и лыжи",
        "price_begin" => 10999,
        "pic" => "img/lot-1.jpg"
    ],
    [
        "title" => "DC Ply Mens 2016/2017 Snowboard",
        "category" => "Доски и лыжи",
        "price_begin" => 159999,
        "pic" => "img/lot-2.jpg"
    ],
    [
        "title" => "Крепления Union Contact Pro 2015 года размер L/XL",
        "category" => "Крепления",
        "price_begin" => 8000,
        "pic" => "img/lot-3.jpg"
    ],
    [
        "title" => "Ботинки для сноуборда DC Mutiny Charocal",
        "category" => "Ботинки",
        "price_begin" => 10999,
        "pic" => "img/lot-4.jpg"
    ],
    [
        "title" => "Куртка для сноуборда DC Mutiny Charocal",
        "category" => "Одежда",
        "price_begin" => 7500,
        "pic" => "img/lot-5.jpg"
    ],
    [
        "title" => "Маска Oakley Canopy",
        "category" => "Разное",
        "price_begin" => 5400,
        "pic" => "img/lot-6.jpg"
    ],
]; */

?>