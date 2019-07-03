<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>TIMER</title>

<style>
	
	h1{
		text-align: center;
		font-size: 50px;
		line-height: 20px;
	}
	h2{
		font-size: 40px;
		text-align: center;
		line-height: 10px;
	}
	p{
		background-color: red;
		color: white;
		text-align: center;
		font-size: 200px;	
	}
	
	.left{
		float: left;
	}
	.right{
		float: right;
	}
	
</style>

<script>
// Set the date we're counting down to
// Mm d, yyyy HH:MM:SS
$date = <?php echo $_POST["date"]; ?>
$time = <?php echo $_POST["time"]; ?>

var countDownDate = new Date("$date $time").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    
     // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    
    // Pad variables with leading zeros
    Number.prototype.pad = function(size) {
    var s = String(this);
    while (s.length < (size || 2)) {s = "0" + s;}
    return s;
    }
    
    days = (days).pad(2);
    hours = (hours).pad(2);
    minutes = (minutes).pad(2);
    seconds = (seconds).pad(2);
    
    // Output the result in an element with id="countdown"
    // Drop expired elements
     document.getElementById("countdown").innerHTML = days + ": " + hours + ": "
    + minutes + ": " + seconds;
    
    // Drop variables less than zero
    if (days <= 0) {
        document.getElementById("countdown").innerHTML = hours + ": " + minutes + ": " + seconds;
    }
    
    if (hours <= 0) {
        document.getElementById("countdown").innerHTML = minutes + ": " + seconds;
    }
    
    if (minutes <= 0) {
        document.getElementById("countdown").innerHTML = seconds;
    }
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "NOW";
    }
}, 1000);
</script>

</head>
	<body> 
	
<div class="page">
<h1>Shenandoah Valley Baptist Church</h1>

<h2>Service Starts In:</h2>

<p id="countdown">	</p>

Outdoor Temp: <?php echo $_POST["out-temp"]; ?><br>
Indoor Temp: <?php echo $_POST["in-temp"]; ?><br>

<footer>
	
	<div class="left">We're Moving Forward!</div>
	<div class="right">Helping people find and become passionate about Jesus</div>
	
<div style="clear: both;"></div>

		
		
</footer>

	


</div>
</body>



</html>
