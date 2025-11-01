<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Travel Explorer</title>
<style>
body{margin:0;font-family:'Poppins',sans-serif;background:#f4e3c1;color:#333;}
header{background:#008080;color:#fff;padding:20px;text-align:center;}
.container{width:90%;margin:20px auto;}
.search-bar{margin-bottom:20px;text-align:center;}
input[type=text]{padding:10px;width:60%;border:1px solid #ccc;border-radius:5px;}
button{background:#008080;color:white;padding:10px 20px;border:none;border-radius:5px;cursor:pointer;}
button:hover{background:#006666;}
.hotels{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px;}
.card{background:white;border-radius:10px;overflow:hidden;box-shadow:0 2px 6px rgba(0,0,0,0.1);}
.card img{width:100%;height:180px;object-fit:cover;}
.card-content{padding:15px;}
footer{text-align:center;padding:15px;background:#008080;color:#fff;margin-top:40px;}
</style>
<script>
function searchHotel(){
 let input=document.getElementById('search').value.toLowerCase();
 let cards=document.getElementsByClassName('card');
 for(let i=0;i<cards.length;i++){
   let name=cards[i].getAttribute('data-name').toLowerCase();
   cards[i].style.display=name.includes(input)?'block':'none';
 }
}
</script>
</head>
<body>
<header>
<h1>Travel Explorer</h1>
<p>Discover & Book Your Perfect Stay</p>
</header>
<div class="container">
<div class="search-bar">
<input type="text" id="search" placeholder="Search destination..." onkeyup="searchHotel()">
</div>
<div class="hotels">
<div class="card" data-name="Riyadh Marriott">
<img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=800&q=60">
<div class="card-content">
<h3>Riyadh Marriott</h3>
<p>Luxury stay in the heart of Riyadh with modern rooms and spa facilities.</p>
<a href="bookings.php?hotel=Riyadh Marriott"><button>Book Now</button></a>
</div></div>
<div class="card" data-name="Jeddah Beach Resort">
<img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=60">
<div class="card-content">
<h3>Jeddah Beach Resort</h3>
<p>Relax by the Red Sea with beach views, seafood dining, and sunset walks.</p>
<a href="bookings.php?hotel=Jeddah Beach Resort"><button>Book Now</button></a>
</div></div>
<div class="card" data-name="Abha Mountain View">
<img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=800&q=60">
<div class="card-content">
<h3>Abha Mountain View</h3>
<p>Scenic retreat surrounded by clouds and hills — perfect for nature lovers.</p>
<a href="bookings.php?hotel=Abha Mountain View"><button>Book Now</button></a>
</div></div>
</div>
</div>
<footer>© 2025 Travel Explorer | Discover More, Live More</footer>
</body>
</html>
