
<!DOCTYPE html>
<html lang="en">

<head>
 
<title> Segment Discount </title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="landing page, website design" />
  <script src="scripts/jquery.min.js"></script>

  <script src="scripts/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="scripts/bootstrap.min.css">

<link type="text/css" rel="stylesheet" href="scripts/store.css">


</head>
<body>



<script>

$(document).ready(function(){
$('#buy_btn').click(function(){
var price  = $('#price').val();

var Product_id  = 'big_101';
var Product_name  = 'Segment Big Polo';



$('#loader').fadeIn(400).html('<br><div style="color:black;background:#ddd;padding:10px;"><img src="ajax-loader.gif"> Please Wait! ..Processing Purchase.</div>')

 		
$('#loader').hide();
alert('Products Purchased');
$('#result').html("<div style='color:white;background:green;border:none;padding:10px;'>Products Purchased</div>");
//setTimeout(function(){ $('#result').html(''); }, 5000);
	
	})
					
});




$(document).ready(function(){
$('.discount').click(function(){

var new_discount ='30';
var new_price ='70';

$('.discountx').html(new_price);
$('.price').val(new_price).value;

alert('Discount of 30(USD) Given');

	})
					
});

</script>


<div class="text-center">
<nav class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navgator">
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span> 
        <span class="navbar-header-collapse-color icon-bar"></span>                       
      </button>
     
<li class="navbar-brand home_click imagelogo_li_remove" ><img class="img-rounded imagelogo_data" src="logo.png"></li>
    </div>
    <div class="collapse navbar-collapse" id="navgator">

      <ul class="nav navbar-nav navbar-right">


</ul>





    </div>
  </div>


</nav>


    </div><br />
<br /><br />



<div style='width:100vw; height: 100vh;  min-height:600px;'>
 

<div class='row'>

<center><h2>Segment Big Polo Products</h2>


<button class="discount btn btn_primary">Give Price Discount</button>
</center>



<div class='col-sm-12'>

</div></div>




<hr style="margin-top:1.5em">
<div style="text-align:center"><a href="#">.</a></div>



<style>
.data_cssx{
background:#ddd;
padding:10px;
height:400px;
border:none;
color:black;
border-radius:20%;
font-size:16px;
text-align:center;


}


.data_cssx:hover{
background:orange;
color:black;

}

</style>




<div class='row'>

<div class='col-sm-1'></div>

<div class='col-sm-10 data_cssx'>
<center>
<b style='font-size:26px'> Segment Big Polo</b><br>
<b style='font-size:20px;color:purple;'>Price: <span class='discountx'>100</span>(USD)</b><br>

<img src="big_polo.jpg" style='min-width:200px;min-height:200px;max-width:200px;max-height:200px;'>
</center>
<br>
<b>Description: </b>  This is a Big Polo Products Page.<br><br>

<div id='result'></div>
<div id='loader'></div>

<input type='text'  class='price pricex' value='100'>

<button id='buy_btn' title='Buy Now' style='color:white;background:purple;border:none;padding:10px;'>Buy Now</button>

</div>

<div class='col-sm-1'></div>







</div><br>


</div>

</div>

</body>
</html>
