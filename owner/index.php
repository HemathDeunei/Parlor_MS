<?php 
include "includes/header.php"; 
include "../includes/functions.php"; 

$Staff = getAllStaff($conn, $_SESSION["oid"]);

?>

    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Beauty Experts</h2>
			<input type="button" id="bt_add_staff" value="Add Staff"  onClick="javascript:window.location.href='staff.php'" class="btn btn-primary py-3 px-5">

          </div>
        </div>
        <div class="row">

			<?php
                            
				foreach ($Staff as $value) {
					echo '<div class="col-lg-3 d-flex mb-sm-6 ftco-animate" style="flex: 0 0 20%;max-width: 20%;margin-bottom:30px;justify-content: center;">
					<div class="staff">
						  <div class="img mb-4" style="background-image: url(../'.$value["image"].');"></div>
						  <div class="info text-center">
							  <h3><a href="#">'.$value["first_name"]." ".$value["last_name"].'</a></h3>
							  <span class="position">'.$value["expert"].'</span>
							  
						  </div>
					</div>
				</div>';
				}
			?>
        	
        	
			
        </div>
		
      </div>
    </section>


<?php include "includes/footer.php"; ?>