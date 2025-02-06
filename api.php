<?php
$data = json_decode(file_get_contents("php://input"), true);
$upiID = $data['upiID'];
$amount = $data['amount'];

$upiPaymentLink = "upi://pay?pa=$upiID&pn=Merchant&am=$amount&cu=INR";

echo json_encode(["qrCode" => $upiPaymentLink]);
?>
