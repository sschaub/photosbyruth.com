<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>Ruth Schaub Photography</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	
	<style type="text/css">

	
#slideshow img {  
    padding: 1px;  
    border:  1px solid #ccc;  
    background-color: #ccc;  
    width:  800px; 
    height: 534px;
    top:  0; 
    left: 0 
} 

/* give slideshow some style */
#slideshow { margin: 20px auto; width: 804px; height:538px;  }
#slideshow img { display: none }


</style>

	<script src="js/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle.lite.1.0.min.js"></script>

<script type="text/javascript">
$(function() {
$('<img />')
    .attr('src', 'babies/images/20100810 1245 IMG_6145.JPG')
    .load(function(){
        $('#slideshow').prepend( $(this) );
	$('#slideshow img:first').fadeIn(1000, function() {

	    $('#slideshow').cycle({ 
		fx: 'fade',
		speed: 1500,
		timeout: 4000
	    });
	});
    });

});
</script>
	
</head>

<body>
<div id="page" >

	<div id="header">
		<h2>Ruth Schaub Photography</h2>
		<ul>
			<li><a href="cards/index.html">Cards</a></li>

			<li><a href="babies/gallery.html">Babies</a></li>
			
    			<li><a href="faq.html">F.A.Q.</a></li>
			
			<li><a href="contact.html">Contact</a></li>
		</ul>

	</div>
	
	<div id="slideshow">
            <img src="babies/images/20101109 1633 IMG_7620R.jpg" width="800" />
            <img src="babies/images/20100825 1233 IMG_6465.JPG" width="800"/>
        </div>


</div>
</body>
</html>