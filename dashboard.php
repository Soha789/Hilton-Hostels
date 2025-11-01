<?php
session_start();
$bookings=$_SESSION['bookings']??[];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Trips</title>
<style>
body{margin:0;font-family:'Poppins',sans-serif;background:#f4e3c1;color:#333;}
header{background:#008080;color:#fff;padding:20px;text-align:center;}
.container{width:90%;margin:20px auto;}
.card{background:white;margin-bottom:20px;padding:15px;border-radius:10px;box-shadow:0 2px 6px rgba(0,0,0,0.1);}
button{background:#008080;color:white;padding:8px 15px;border:none;border-radius:5px;cursor:pointer;}
button:hover{background:#006666;}
footer{text-align:center;padding:15px;background:#008080;color:#fff;margin-top:40px;}
</style>
</head>
<body>
<header><h1>My Dashboard</h1></header>
<div class="container">
<?php if(empty($bookings)){ ?>
<p>No bookings yet. <a href="index.php" style="color:#008080;text-decoration:none;">Book your first trip!</a></p>
<?php } else { foreach($bookings as $i=>$b){ ?>
<div class="card">
<h3><?php echo htmlspecialchars($b['hotel']); ?></h3>
<p><strong>Name:</strong> <?php echo htmlspecialchars($b['name']); ?></p>
<p><strong>Email:</strong> <?php echo htmlspecialchars($b['email']); ?></p>
<p><strong>Dates:</strong> <?php echo htmlspecialchars($b['checkin']); ?> → <?php echo htmlspecialchars($b['checkout']); ?></p>
<p><strong>Guests:</strong> <?php echo htmlspecialchars($b['guests']); ?></p>
<form method="POST" action="">
<button name="remove" value="<?php echo $i; ?>">Remove</button>
</form>
</div>
<?php } } 
if(isset($_POST['remove'])){
  unset($_SESSION['bookings'][$_POST['remove']]);
  header("Location: dashboard.php");exit();
}
?>
<a href="logout.php"><button>Logout</button></a>
</div>
<footer>© 2025 Travel Explorer</footer>
</body>
</html>
