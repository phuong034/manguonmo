<?php
header("Content-Type: application/json; charset=utf-8");

echo json_encode([
    "status" => "success",
    "message" => "API PHP hoạt động thành công!"
]);
