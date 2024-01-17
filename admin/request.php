<?php 
include "includes/header.php"; 
include "../includes/functions.php"; 


$Stores = getStoreRequest($conn);

?>

<section class="ftco-section" style="padding-top: 30px;min-height:600px;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="myorders-tab" data-toggle="tab" href="#myorders" role="tab" aria-controls="myorders" aria-selected="true">My Orders</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="myorders" role="tabpanel" aria-labelledby="myorders-tab">
						<div class="col-12 col-sm-8 col-lg-12">
                            <table class="table table-striped" style="color: #fff;">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Store Number</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Business Name</th>
                                        <th scope="col">Store Owner</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $count = 1;
                                    foreach ($Stores as $value) 
                                    {
                                        echo '<tr>
                                        <th scope="row" style="height: 40px;vertical-align: middle;">'.$count.'</th>
                                        <td style="height: 40px;vertical-align: middle;">'.$value["id"].'</td>
                                        <td style="height: 40px;vertical-align: middle;">'.$value["name"]. '</td>
                                        <td style="height: 40px;vertical-align: middle;">'.$value["businessname"].'</td>
                                        <td style="height: 40px;vertical-align: middle;">'.ucwords($value["owner"]).'</td>
                                        <td style="height: 40px;vertical-align: middle;">'.$value["status"].'</td>
                                        <td style="height: 40px;vertical-align: middle;">
                                            <select class="form-control" style="height: 40px !important;outline: none;border: 0px;" onchange="storerequest(\''.$value["id"].'\', this)"><option value="">Update Status</option>';


                                            $StatusArray = array("On Hold", "Approved", "Declined");

                                            foreach ($StatusArray as $status) 
                                            { 
                                                $selectStatus = "";

                                                if($value["action"] == $status)
                                                {
                                                    $selectStatus = "selected";
                                                }

                                                echo '<option value="'.$status.'" '.$selectStatus.'>'. $status .'</option>';

                                            }
                                        echo '</select></td></tr>';

                                        ++$count;
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