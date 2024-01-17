<?php 
include "includes/header.php"; 
include "../includes/functions.php"; 

$Orders = getStaffOrders($conn, $_SESSION["aid"]);
?>

<section class="ftco-section" style="padding-top: 30px;min-height:600px;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="myorders-tab" data-toggle="tab" href="#myorders" role="tab" aria-controls="myorders" aria-selected="true">My Works</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="myorders" role="tabpanel" aria-labelledby="myorders-tab">
						<div class="col-12 col-sm-8 col-lg-12">
                            <table class="table table-striped" style="color: #fff;">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Order Date</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Service</th>
                                        <th scope="col">Prefered</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
							
                                    foreach ($Orders as $value) 
                                    {
                                        echo '<tr>
                                        <th scope="row" style="height: 40px;vertical-align: middle;">'.$value["order_id"].'</th>
                                        <td style="height: 40px;vertical-align: middle;">'.$value["order_date"].'</td>
                                        <td style="height: 40px;vertical-align: middle;">'.$value["first_name"]. " " . $value["last_name"] .'</td>
                                        <td style="height: 40px;vertical-align: middle;">'.$value["service_name"].'</td>
                                        <td style="height: 40px;vertical-align: middle;">'.ucwords($value["type"]).'</td>
                                        <td style="height: 40px;vertical-align: middle;">'.$value["action"].'</td>
                                        <td style="height: 40px;vertical-align: middle;">
                                            <select class="form-control" style="height: 40px !important;outline: none;border: 0px;" onchange="updateProgress(\''.$value["order_id"].'\',\''.$value["staff"].'\', this)">
												<option value="">Update Status</option>
												';


												$StatusCount = 1;

												$StatusArray = array("On Progress", "Way To Home", "Completed");

												foreach ($StatusArray as $status) 
												{ 
													$selectStatus = "";

													if($value["action"] == $status)
													{
														$selectStatus = "selected";
													}

													echo '<option value="'.$status.'" '.$selectStatus.'>'. $status .'</option>';

													++$StatusCount;
												}
                                        echo '</select></td></tr>';
                                    }
                                ?>

                                </tbody>
                            </table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include "includes/footer.php"; ?>