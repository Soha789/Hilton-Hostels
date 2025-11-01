<?php
session_start();
if($_SERVER['REQUEST_METHOD']==='POST'){
  $hotel=$_POST['hotel'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $checkin=$_POST['checkin'];
  $checkout=$_POST['checkout'];
  $guests=$_POST['guests'];
  $_SESSION['bookings'][]=[
    'hotel'=>$hotel,
    'name'=>$name,
    'email'=>$email,
    'checkin'=>$checkin,
    'checkout'=>$checkout,
    'guests'=>$guests
  ];
  header("Location: dashboard.php");
  exit();
}
$hotel=$_GET['hotel']??'Unknown Hotel';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Book <?php echo htmlspecialchars($hotel); ?></title>
<style>
body{margin:0;font-family:'Poppins',sans-serif;background:#f4e3c1;color:#333;}
header{background:#008080;color:#fff;padding:20px;text-align:center;}
.container{width:90%;max-width:500px;margin:40px auto;background:white;padding:20px;border-radius:10px;box-shadow:0 2px 6px rgba(0,0,0,0.1);}
input,select{width:100%;padding:10px;margin:8px 0;border:1px solid #ccc;border-radius:5px;}
button{background:#008080;color:white;padding:10px 20px;border:none;border-radius:5px;cursor:pointer;}
button:hover{background:#006666;}
</style>
</head>
<body>
<header>
<h1>Booking: <?php echo htmlspecialchars($hotel); ?></h1>
</header>
<div class="container">
<form method="POST">
<input type="hidden" name="hotel" value="<?php echo htmlspecialchars($hotel); ?>">
<label>Your Name:</label>
<input type="text" name="name" required>
<label>Email:</label>
<input type="email" name="email" required>
<label>Check-in:</label>
<input type="date" name="checkin" required>
<label>Check-out:</label>
<input type="date" name="checkout" required>
<label>Guests:</label>
<select name="guests" required>
<option>1</option><option>2</option><option>3</option><option>4+</option>
</select>
<button type="submit">Confirm Booking</button>
</form>
</div>
</body>
</html>
