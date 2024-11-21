<?php
session_start();
$uname = $_SESSION['name'];
$umobile = $_SESSION['mobile'];
$uemail = $_SESSION['email'];
$ucity = $_SESSION['city'];

$mycon = new mysqli("localhost", "root", "nahirakhna", "new1login");

if ($mycon->connect_error) {
    die("Connection failed: " . $mycon->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);
if ($data === null) {
    echo json_encode(["status" => "error", "message" => "No data received"]);
    exit;
}
/*

$train = $data['train'];
$ticketNumbers = $data['ticketNumbers'];
$numTickets = $data['numTickets'];
$passengerName = $uname; 
$totalCost = $data['totalCost'];

$stmt = $mycon->prepare("INSERT INTO booktick (name,numtickets, trainname, totalcost,ticketnum ) VALUES (?, ?, ?, ?, ?)");
foreach ($ticketNumbers as $ticketNumber) {
    $stmt->bind_param("sssis", $passengerName, $ticketNumber, $train, $totalCost, $numTickets);
    $stmt->execute();
}

$stmt->close();
$mycon->close();

echo json_encode(["status" => "success"]);*/
?>
