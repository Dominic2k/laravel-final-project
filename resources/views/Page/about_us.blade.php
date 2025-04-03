@extends('master')

<div class="main">
 <div class="main_inner bg_back_dark">
      <!-- <section id="header">
     </section> -->

     
     <div class="main_inner1 border_left_1 mx-4 border_right_1">
	 <section id="center" class="center_o border_top_1 bg-white pt-3 pb-3">
        <div class="container-xl">
		  <div class="row center_o1">
		    <div class="col-md-12">
			  <h2>About Us</h2>
			  <h6 class="mb-0 text-muted"><a class="text-muted link" href="#">Home</a> <span class="mx-1">/</span> About Us</h6>
			</div>
		  </div>
		</div>
    </section>
   
   <section id="about_h" class="pt-5 pb-5 bg_light">
 <div class="container-xl">
  <div class="row about_h1">
   <div class="col-md-6">
     <div class="about_h1_left">
	     <a href="#"><img src="{{asset('source/img/about-1.jpg')}}" class="img-fluid" alt="abc"></a>
	 </div>
   </div>
   <div class="col-md-6">
     <div class="about_h1r">
	   <h5 class="col_violet">ABOUT US</h5>
	   <h1 class="mt-3">Committed To Always <br> Provide The Best</h1>
	   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
	   <div class="about_h1ri row">
	     <div class="col-md-4 col-lg-6 col-sm-6">
		   <div class="about_h1ril">
		     <a href="#"><img src="{{asset('source/img/beef.jpg')}}" class="img-fluid" alt="abc"></a>
		   </div>
		 </div>
		 <div class="col-md-8 col-lg-6 col-sm-6">
		   <div class="about_h1rir">
		     <ul class="mb-0">
			  <li><i class="bi bi-check2 col_yellow me-1"></i> Branded & Quality</li>
			  <li class="mt-2"><i class="bi bi-check2 col_yellow me-1"></i> Affordable Prices</li>
			  <li class="mt-2"><i class="bi bi-check2 col_yellow me-1"></i> Faster Support</li>
			  <li class="mt-2"><i class="bi bi-check2 col_yellow me-1"></i> Free Training Education</li>
			  <li class="mt-2"><i class="bi bi-check2 col_yellow me-1"></i> Available Chefs </li>
			 </ul>
		   </div>
		 </div>
	   </div>
	   <div class="about_h1ri1 row mt-4">
	     <div class="col-md-5 col-sm-5">
		   <div class="about_h1ri1l">
		      <h6 class="mb-0"><a class="button" href="#">Read More</a></h6>
		   </div>
		 </div>
		 <div class="col-md-7 col-sm-7">
		   <div class="about_h1ri1r mt-2">
		        <h5 class="mb-0"><i class="bi bi-telephone col_yellow me-1 align-middle"></i> +(123) 456-7890</h5>
		   </div>
		 </div>
	   </div>
	 </div>
   </div>
</div>
<div class="row spec_o1 bg-dark p-5 px-4 mx-0 mt-4">
   <div class="col-md-3 col-sm-6">
     <div class="spec_o1i">
	   <h1 class="text-white font_60 col_yellow">14+</h1>
	   <h5 class="mb-0 text-light">Years Experience</h5>
	 </div>
   </div>
   <div class="col-md-3 col-sm-6">
     <div class="spec_o1i">
	   <h1 class="text-white font_60 col_yellow">613+</h1>
	   <h5 class="mb-0 text-light">Item Equipments</h5>
	 </div>
   </div>
   <div class="col-md-3 col-sm-6">
     <div class="spec_o1i">
	   <h1 class="text-white font_60 col_yellow">98%</h1>
	   <h5 class="mb-0 text-light">Like Our Services</h5>
	 </div>
   </div>
   <div class="col-md-3 col-sm-6">
     <div class="spec_o1i">
	   <h1 class="text-white font_60 col_yellow">83%</h1>
	   <h5 class="mb-0 text-light">Repeat Order</h5>
	 </div>
   </div>
 </div>
 </div>
</section>

  <section id="menu_h">
     <div class="consult_main pt-5 pb-5 bg_back px-5">
	   <div class="container-xl">
	     <div class="row row-cols-1 row-cols-md-2 menu_h1">
		   <div class="col">
		     <div class="menu_h1_left">
			
			 </div>
		   </div>
		   <div class="col">
		     <div class="menu_h1_right">
			   <h2 class="text-white">Menus</h2>
			 <hr class="line">
			 <p class="text-light">Browse our traditional menus or let us create <br>
                something new for you</p>
             <ul class="mb-0 mt-4">
			   <li class="d-flex">
			    <span class="me-4"><a class="text-white fs-3 icon_1 rounded-circle d-inline-block text-center" href="#"><i class="bi bi-backpack2"></i></a></span>
				<span class="flex-column">
				 <b><a class="col_yellow link d-block" href="#">Dinner Menu</a></b>
				 <span class="d-block family_1 font_14 text-light mt-2">Our menu features time honored favorites that have come to define the perfect Park City dining experience.</span>
				</span>
			   </li>
			   <li class="d-flex mt-4">
			    <span class="me-4"><a class="text-white fs-3 icon_1 rounded-circle d-inline-block text-center" href="#"><i class="bi bi-alexa"></i></a></span>
				<span class="flex-column">
				 <b><a class="col_yellow link d-block" href="#">Brunch Menu</a></b>
				 <span class="d-block family_1 font_14 text-light mt-2">Savor the stuffed French toast with warm syrup or delight in a classic eggs benedict with rich hollandaise.</span>
				</span>
			   </li>
			   <li class="d-flex mt-4">
			    <span class="me-4"><a class="text-white fs-3 icon_1 rounded-circle d-inline-block text-center" href="#"><i class="bi bi-alipay"></i></a></span>
				<span class="flex-column">
				 <b><a class="col_yellow link d-block" href="#">Vegan & Gluten Free Menu</a></b>
				 <span class="d-block family_1 font_14 text-light mt-2">100% vegan, vegetarian & gluten free cuisine from our kitchen to your table.</span>
				</span>
			   </li>
			 </ul>
			 </div>
		   </div>
		 </div>
	  </div>
	 </div>
   </section>
   
   <section id="testim" class="pt-5 pb-5 bg_light">
     <div class="container-xl">
	   <div class="row row-cols-1 row-cols-md-1 spec_1 text-center mb-5">
	      <div class="col">
		    <h2>What Customers Are Saying <br> About Us</h2>
			<span class="icon_fruit fs-3 d-block mt-3 mb-3 col_violet"><i class="bi bi-cup-hot"></i></span>
			<p class="mb-0">We pride ourselves on what our happy <br> clients say.</p>
		  </div>
	   </div>
	   <div class="row row-cols-1 row-cols-md-3 testim_1">
	      <div class="col">
		    <div class="testim_1_inner text-center">
		 <img src="image/19.jpg" alt="abc" class="rounded-circle">
		 <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.</p>
		 <h5 class="mt-4 col_violet">Dolor Porta</h5>
		 <h6 class="mb-0  text-uppercase font_14">Customer</h6>
	   </div>
		  </div>
		  <div class="col">
		    <div class="testim_1_inner text-center">
		 <img src="image/20.jpg" alt="abc" class="rounded-circle">
		 <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.</p>
		 <h5 class="mt-4 col_violet">Lorem Amet</h5>
		 <h6 class="mb-0  text-uppercase font_14">Customer</h6>
	   </div>
		  </div>
		  <div class="col">
		    <div class="testim_1_inner text-center">
		 <img src="image/21.jpg" alt="abc" class="rounded-circle">
		 <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.</p>
		 <h5 class="mt-4 col_violet">Ipsum Quis</h5>
		 <h6 class="mb-0  text-uppercase font_14">Customer</h6>
	   </div>
		  </div>
	   </div>
	 </div>
   </section>
   </div>
 </div>
</div>

<script src="../bootstrap5/js/bootstrap.bundle.min.js"></script>
<script src="js/theme.min.js"></script>


</body>
</html>