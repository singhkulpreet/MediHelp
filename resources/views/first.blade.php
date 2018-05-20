<!DOCTYPE html>
<html>
<head>
	<title>first page</title>
	
<link rel="stylesheet" type="text/css" href="{{url('boot/css/bootstrap.min.css')}}" />
<script type="text/javascript" src="{{url('boot/js/jquery.js')}}" ></script>
<script type="text/javascript" src="{{url('boot/js/bootstrap.min.js')}}" ></script>


<style type="text/css">
	.wrapper {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
  grid-auto-rows: 100px;
}
</style>

</head>
<body>

<div class="container-fluid" style="position: relative;" >
			
		<div class="page-header text-center no-margin-top no-margin" style="background-color:gold;margin-top: -20px;">
			<h1 style="padding-top: 10px;font-weight:bolder;font-family: cursive;">parking</h1>
		</div>



		<div class="navbar navbar-default " style="text-align: center;">
			<div class="container-fluid  " style="display: flex;justify-content: center;">

			<ul class="nav navbar-nav align-items-center responsive" style="font-size: 28px;text-align: center;font-family: cursive;">
				<li class="active"><a href="#" style="border-right:3px solid">home</a></li>
				<li><a href="#"  style="border-right:3px solid">Categories</a></li>
				<li><a href="#" style="border-right:3px solid">Parkinghd</a></li>
				<li><a href="#" style="border-right:3px solid">Parkingsto</a></li>
				<li><a href="#">Parkingto</a></li>
			</ul>

			</div>
		</div>

<div class="container " style="border: 1px solid;height: 400px;width: 200px;float: left;">
	
</div>	

			

<div class="container"  style="border: 1px solid;height: 1000px;display: flex;justify-content: center;width: 70%">

	<div  class="wrapper "  style="width:100%;border: 3px solid;display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
  grid-auto-columns: minmax(600px,600px);
  grid-auto-rows: 300px;
  ">
	
		<div  style="border: 1px solid;" >
			1st
		</div>

		<div  style="border: 1px solid; ">
			2nd
		</div>

		<div  style="border: 1px solid; ">
			3rd
		</div>

		<div  style="border: 1px solid ;">
			4th
		</div>

		<div  style="border: 1px solid ;">
			5th
		</div>

		<div  style="border: 1px solid ;">
			5th
		</div>

		
	</div>

     <div class="container-fluid" style="position:absolute;bottom:0; border: 0px solid;width: 60%">
		<div class="row">
		<div class="pager col-md-10" >
			<ul >
				<li style="float: right;"><a href="#" >Next</a></li>
				<li style="float: left;"><a href="#">Previous</a></li>
			</ul>
			</div>
		</div>
	    </div>

</div>




	</div>

	<div class="container" style="height: 200px; border: 1px solid">
	
    </div>
</body>
</html>