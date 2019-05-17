<?php

require_once("helpers.php");
require_once("data.php");

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

$page_content = include_template("index.php", ["cat" => $cat, "ad" => $ad]);

$layout_content = include_template("layout.php", [
    "page_name" => $page_name,
    "is_auth" => $is_auth,
    "page_content" => $page_content,
    "cat" => $cat
    ]);

print($layout_content);

?>
