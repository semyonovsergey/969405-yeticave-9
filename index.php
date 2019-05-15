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

$sql = "SELECT name FROM categories";
$result = mysqli_query($con, $sql);
while ($cats = mysqli_fetch_assoc($result)) {
    $cat[] = $cats["name"];
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
