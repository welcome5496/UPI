<?php
$data = json_decode(file_get_contents("php://input"), true);
$merchantAPI = $data['merchantAPI'];
$transactionID = $data['transactionID'];
$status = $data['status'];

file_get_contents("$merchantAPI?transactionID=$transactionID&status=$status");
?>
