<?php

require_once("helpers.php");
require_once("data.php");

$con = mysqli_connect("localhost", "root", "", "yeticave");
if ($con == false) {
   print("Ошибка подключения: " . mysqli_connect_error());
}
else {
   print("Соединение установлено");
}
mysqli_set_charset($con, "utf8");

$sql1 = "SELECT name, name_cat, price_begin, image FROM lots LEFT JOIN categories c ON category = c.id";
$result1 = mysqli_query($con, $sql1);
$ad = mysqli_fetch_all($result1, MYSQLI_ASSOC);

$sql = "SELECT name_cat FROM categories";
$result = mysqli_query($con, $sql);
while ($cats = mysqli_fetch_assoc($result)) {
    $cat[] = $cats["name_cat"];
}

//var_dump($ad);

$page_content = include_template("index.php", ["cat" => $cat, "ad" => $ad]);

$layout_content = include_template("layout.php", [
    "page_name" => $page_name,
    "is_auth" => $is_auth,
    "page_content" => $page_content,
    "cat" => $cat
    ]);

print($layout_content);

?>
