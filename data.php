<?php

date_default_timezone_set('Europe/Moscow');

$is_auth = rand(0, 1);
$user_name = 'Semyonov Sergey'; // укажите здесь ваше имя
$page_name = "Главная";
$cat = ["Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"];
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
];

?>