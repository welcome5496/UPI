<?php
session_start();
$merchantId = $_SESSION['merchant_id'];

$database = new SQLite3('merchants.db');
$result = $database->query("SELECT api_key FROM merchants WHERE id='$merchantId'");
$row = $result->fetchArray();

echo json_encode(["apiKey" => $row['api_key']]);
?>
