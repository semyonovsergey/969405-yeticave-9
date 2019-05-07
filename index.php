<?php

require_once("helpers.php");
require_once("data.php");

$page_content = include_template("index.php", ["cat" => $cat, "ad" => $ad]);

$layout_content = include_template("layout.php", [
    "page_name" => $page_name,
    "is_auth" => $is_auth,
    "page_content" => $page_content,
    "cat" => $cat
    ]);

print($layout_content);

?>
