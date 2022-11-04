<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/art.css">
    <link rel="icon" href="image/logo/blck pz.jpg" type="image/icon type">

    <title>PaulZandrex.me</title>
</head>
<body>
	<nav>
		<ul>
			<div class="container index-nav">
				<div class="social-btn">
				<a href="https://www.facebook.com/paulzandrex.carino" class="fa fa-facebook" target="_blank"></a>
				<a href="https://www.linkedin.com/in/paul-zandrex-cariño-g100818" class="fa fa-linkedin" target="_blank"></a>
				</div>
				<li><a href="#">CONTACT</a></li>
				<li><a href="#">ABOUT</a></li>
				<li><a href="art.php" class="art-btn">ART</a></li>
				<li><a href="index.php">HOME</a></li>
			</div>
		</ul>
	</nav>
	<div class="PZ-logo">
		<span></span>
		<img src="image/logo/wht pz.jpg" oncontextmenu="return false;">
	</div>
	<div class="art-header">
		<h1>Vector <b class="Art">Art</b></h1>
		<p><i>“</i>Vector Art is like a painting, except the paint never dries.<i>”</i></p>
	</div>
	
<div class="row"> 
	<div class="column">
		<img class="art-image" id="art-image" src="image/art/soyeon.jpg" style="width:100%" oncontextmenu="return false;">
		<img class="art-image" id="art-image" src="image/art/gaea minimal.jpg" style="width:100%" oncontextmenu="return false;">
		<img class="art-image" id="art-image" src="image/art/yeji.jpg" style="width:100%" oncontextmenu="return false;">
		<img class="art-image" id="art-image" src="image/art/me glitch effect.jpg" style="width:100%" oncontextmenu="return false;">
		<img class="art-image" id="art-image" src="image/art/obama.jpg" style="width:100%" oncontextmenu="return false;">
	</div>
	<div class="column">
		<img class="art-image" id="art-image" src="image/art/mina.jpg" style="width:100%" oncontextmenu="return false;">
		<img class="art-image" id="art-image" src="image/art/paul sharingan.jpg" style="width:100%" oncontextmenu="return false;">
		<img class="art-image" id="art-image" src="image/art/gaea vector 3.jpg" style="width:100%" oncontextmenu="return false;">
		<img class="art-image" id="art-image" src="image/art/ate bofriend.jpg" style="width:100%" oncontextmenu="return false;">
		<img class="art-image" id="art-image" src="image/art/shop design vector.jpg" style="width:100%" oncontextmenu="return false;">
	</div>
	<div class="column">
		<img class="art-image" id="art-image" src="image/art/bruno mars.jpg" style="width:100%" oncontextmenu="return false;">
		<img class="art-image" id="art-image" src="image/art/paul glow effect.jpg" style="width:100%" oncontextmenu="return false;">
		<img class="art-image" id="art-image" src="image/art/xandy.jpg" style="width:100%" oncontextmenu="return false;">
		<img class="art-image" id="art-image" src="image/art/me art.jpg" style="width:100%" oncontextmenu="return false;">
		<img class="art-image" id="art-image" src="image/art/art aesthetic vector.jpg" style="width:100%" oncontextmenu="return false;">
	</div>
	<div class="column">
		<img class="art-image" id="art-image" src="image/art/gaea vector.jpg" style="width:100%" oncontextmenu="return false;">
		<img class="art-image" id="art-image" src="image/art/rose sel.jpg" style="width:100%" oncontextmenu="return false;">
		<img class="art-image" id="art-image" src="image/art/gaea vector 2.jpg" style="width:100%" oncontextmenu="return false;">
		<img class="art-image" id="art-image" src="image/art/ate vector.jpg" style="width:100%" oncontextmenu="return false;">
		<img class="art-image" id="art-image" src="image/art/shop design vector 2.jpg" style="width:100%" oncontextmenu="return false;">
	</div>
</div>
<div id="art-modal" class="art-modal">
	<span class="art-close">&times;</span>
	<img class="art-modal-content" id="art-gallery" oncontextmenu="return false;">
</div>
<script>
var modal = document.getElementById('art-modal');
var images = document.getElementsByClassName('art-image');
var modalImg = document.getElementById("art-gallery");
for (var i = 0; i < images.length; i++) {
	var img = images[i];
		img.onclick = function(evt) {
		modal.style.display = "block";
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
	}
}
var span = document.getElementsByClassName("art-close")[0];
span.onclick = function() {
	modal.style.display = "none";
}
</script>
</body>
</html>

