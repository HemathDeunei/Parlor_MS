<?php 
include "includes/header.php"; 
include "includes/functions.php"; 

$StoresList = getStores($conn);

?>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
          <div class="col-md-12 ftco-animate">
		  		<div id="storecontainer" style="display:flex;flex-wrap: wrap;justify-content: center;">
				  		<?php
							
							foreach ($StoresList as $value) 
							{
								echo '<div class="text-center" style="cursor:pointer;"  onclick="viewgallery(\''.$value["id"].'\')">
								<div class="card" style="width:20rem;background-color: #f8baff;border-radius:20px;">
									<div>
										<img class="card-img-top" id="displaystorebanner" style="height:180px;border-top-left-radius:20px;border-top-right-radius:20px;" src="'.$value["banner"].'" alt="image-top">
										<img src="'.$value["logo"].'" id="displaystorelogo" alt="profile-image" style="width:80px;position: relative;top: -30px;left: -100px;border-radius: 10%;border: 4px solid white;height: 80px;" class="profile">
										<h6 class="dark" id="displaystorename" style="position: relative;top: -70px;left: 110px;text-align: left;width: 200px;font-weight:600;">'.$value["name"].'</h6>
									</div>
								</div>
							</div>  ';
							}
						?>
					<!-- <div class="text-center">
						<div class="card" style="width:20rem;background-color: #f8baff;border-radius:20px;">
							<div>
								<img class="card-img-top" id="displaystorebanner" style="height:180px;border-top-left-radius:20px;border-top-right-radius:20px;" src="images/default/banner.png" alt="image-top">
								<img src="images/default/logo.png" id="displaystorelogo" alt="profile-image" style="width:80px;position: relative;top: -30px;left: -100px;border-radius: 10%;border: 4px solid white;height: 80px;" class="profile">
								<h6 class="dark" id="displaystorename" style="position: relative;top: -70px;left: 110px;text-align: left;width: 200px;font-weight:600;"> Store Name </h6>
							</div>
							<div>
								<div class="stats">
									<p class="m-0 dark">80K</p>
									<p class="grey">Followers</p>
								</div>
								<div class="stats">
									<p class="m-0 dark"> 803K</p>
									<p class="grey"> Likes</p>
								</div>
								<div class="stats">
									<p class="m-0 dark">1.4K</p>
									<p class="grey"> Photos</p>
								</div> 
							</div>
						</div>
					</div>    -->
				</div> 
          </div>
          
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">The best in town</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_1.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Mellisa Smith</a></h3>
      					<span class="position">Stylist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_2.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Marie Mush</a></h3>
      					<span class="position">Fashionist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_3.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Ana Jacobson</a></h3>
      					<span class="position">Makeup Stylist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_4.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Ivan Dorchsner</a></h3>
      					<span class="position">Nail Specialist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        </div>
      </div>
    </section>

	<section class="ftco-section ftco-discount img" style="background-image: url(images/bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-5 discount ftco-animate">
					<h3>Save up to 25% Off</h3>
					<h2 class="mb-4">Student Discount</h2>
					<p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
					<p><a href="#" class="btn btn-white btn-outline-white px-4 py-3">Book Now</a></p>
				</div>
			</div>
		</div>
	</section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Inspiration for your first order</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Lips Makeover</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="images/work-2.jpg" class="img-fluid" alt="Colorlib Template">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Hair Style</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="images/work-3.jpg" class="img-fluid" alt="Colorlib Template">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Makeup</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        </div>
    	</div>
    </section>

    <section class="ftco-partner ">
    	<div class="container">
		<div class="row justify-content-center">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Top brands for you</h2>
          </div>
        </div>
    		<div class="row partner justify-content-center">
    			<div class="col-md-10">
    				<div class="row">
						
						<?php
							
							foreach ($StoresList as $value) 
							{
								echo '<div class="col-md-3 ftco-animate">
								<a href="#" class="partner-entry">
									<img src="'.$value["logo"].'" class="img-fluid" alt="'.$value["name"].'">
								</a>
							</div>';
							}
						?>
						
						

					</div>
				</div>
			</div>
    	</div>
    </section>



	

		
	

<?php include "includes/footer.php"; ?>