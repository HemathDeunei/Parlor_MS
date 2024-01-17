<?php 
include "includes/header.php"; 
include "../includes/functions.php"; 

$Store    = getStoreDetails($conn, $_SESSION["oid"]);
$Services = getAllServices($conn, $_SESSION["oid"]);
$Category = getAllCategories($conn);

?>

<section class="ftco-section" style="padding-top: 30px;min-height:600px;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="myservice-tab" data-toggle="tab" href="#myservice" role="tab" aria-controls="myservice" aria-selected="true">My Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="addservice-tab" data-toggle="tab" href="#addservice" role="tab" aria-controls="addservice" aria-selected="false">Add Services</a>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
					</li> -->
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="myservice" role="tabpanel" aria-labelledby="myservice-tab">
						<div class="col-12 col-sm-8 col-lg-12">
							<ul class="list-group" style="flex-direction: row;flex-wrap: wrap;justify-content: center;">
								<?php
									foreach ($Services as $value) {
										echo '<li class="list-group-item d-flex justify-content-between align-items-center" style="width: 300px !important;margin: 10px 10px 0px 10px;font-weight:600;">'.$value["pretty_name"].' 
											<div class="image-parent">
												<img src="../'.$value["image"].'" style="height: 50px;width: 50px;border-radius: 50%;" alt="quixote">
											</div>
										</li>';
									}
								?>
							</ul>
						</div>
					</div>
					<div class="tab-pane fade" id="addservice" role="tabpanel" aria-labelledby="addservice-tab">				
						<form class="file-upload" id="serviceinfo" method="post">
							<input type="hidden" name="action" value="add_service">
							<input type="hidden" name="id" value="<?php echo $_SESSION["oid"]; ?>">
							<input type="hidden" name="store" value="<?php echo $Store["id"]; ?>">

							<div class="row mb-5 gx-5">
								<div class="col-12 mb-5 mb-xxl-0">
									<div class=" px-4 py-5 rounded">
										<div class="row g-3">
											<div class="col-md-3" style="justify-content: center;">
												<div class="text-center">
													<div class="square position-relative display-2 mb-3" style="height: 200px;">
														<img id="img_pic" src="../images/default/logo.png" style="height:200px;width:200px;border-radius: 50%;">
													</div>
													<input type="file" id="pic" name="pic" hidden="">
													<label class="btn btn-success-soft btn-block" for="pic" style="width: 50%;margin: 20px auto;">Upload</label>
												</div>
											</div>
											<div class="col-md-8">
												<label class="form-label">Select Category *</label>
												<select class="form-control" name="servicecategory" id="servicecategory">
													<?php
														foreach ($Category as $value) {
															echo '<option value="'.$value["id"].'">'.$value["category_pretty_name"].'</option>';
														}
													?>
												</select>
												<label class="form-label">Service Name *</label>
												<input type="text" class="form-control" id="servicename" name="servicename" placeholder="" aria-label="First name" value="">
												<label class="form-label">Pretty Name *</label>
												<input type="text" class="form-control" id="prettyname" name="prettyname" placeholder="" aria-label="Last name" value="">
												<div class="form-row align-items-center" style="margin-top: 20px;">
													<div class="col-sm-6 my-1">
														<label class="sr-only" for="getpriceatstore">Price at store</label>
														<div class="input-group">
															<div class="input-group-prepend">
															<div class="input-group-text">@</div>
															</div>
															<input type="number" class="form-control" name="getpriceatstore" id="getpriceatstore" placeholder="Price at store" disabled>
														</div>
													</div>
													<div class="col-auto my-1">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="checkpriceatstore" id="checkpriceatstore">
															<label class="form-check-label" for="checkpriceatstore">
															Available at store
															</label>
														</div>
													</div>
												</div>
												<div class="form-row align-items-center" style="margin-top: 20px;">
													
													<div class="col-sm-6 my-1">
														<label class="sr-only" for="getpriceathome">Price at home</label>
														<div class="input-group">
															<div class="input-group-prepend">
															<div class="input-group-text">@</div>
															</div>
															<input type="number" class="form-control" name="getpriceathome" id="getpriceathome" placeholder="Price at home" disabled>
														</div>
													</div>
													<div class="col-auto my-1">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="checkpriceathome" id="checkpriceathome">
															<label class="form-check-label" for="checkpriceathome">
															Available at home
															</label>
														</div>
													</div>
												</div>
												<button type="button" style="margin-top: 40px;" class="btn btn-primary btn-lg" id="bt_service"  >Add Service</button>
											</div>
									
										</div>
										
									</div>
								</div>
							
							</div>                            
						</form> 
					</div>
					<!-- <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div> -->
				</div>

			</div>
		</div>
	</div>
</section>



<?php include "includes/footer.php"; ?>