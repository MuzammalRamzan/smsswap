<?php  include '_header.php'; ?>

<section id="blog-post" class="blog-post">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
                <div class="sub-title text-center">
                    <h2>Buy SMS</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card buy-card">

            	<div class="alert alert-success buy-success hidden">
            		<span class="success-message"></span>
            		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
            	</div>

            	<div class="alert alert-danger buy-danger hidden">
            		<span class="danger-message"></span>
            		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
            	</div>

            	<div class="alert alert-warning buy-warning hidden">
            		<span class="warning-message"></span>
            		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
            	</div>

				<div class="card-body">
				    <h5 class="card-title center-text">Presale</h5>
				    <div class="buyTokenshash"></div>
				    <div class="form-group">
				    	<label class="from-label">BUSD</label>
				    	<input type="text" name="" class="form-control card-form-control number busd-input" placeholder="0.0" id="getTokenAmount" onkeyup="_getTokenAmount()">
				    </div>

				    <div class="form-group">
				    	<label class="from-label">SMS</label>
				    	<input type="text" class="form-control card-form-control smt-input" placeholder="0.0" readonly id="getvalue_">
				    </div>
				   	
				   	<div class="form-group text-center">
						<a role="button" class="btn btn-default sm-button buy-btn buy-card-btn" onclick="buyTokens()">	<span class="buy-btn-text">Buy SMS</span>
	                        <img class="blue-btn-img" src="images/icons/button-icon.png">
	                    </a>

	                    <a role="button" class="btn btn-default sm-button approve-btn hidden buy-card-btn" onclick="approve()">	<span class="buy-btn-text">Approve Token</span>
	                        <img class="blue-btn-img" src="images/icons/button-icon.png">
	                    </a>

	                    <a role="button" class="btn btn-default sm-button connect-btn hidden buy-card-btn" onclick="checkConnection()">	<span class="buy-btn-text">Connect First</span>
	                        <img class="blue-btn-img" src="images/icons/button-icon.png">
	                    </a>
	                </div>
				  </div>
				</div>
			</div>
			<div class="col-md-6">

				<div class="alert alert-success buy-details-success hidden">
            		<span class="success-message"></span>
            		<button type="button" class="close" data-dismiss="alert">x</button>
            	</div>

            	<div class="alert alert-danger buy-details-danger hidden">
            		<span class="danger-message"></span>
            		<button type="button" class="close" data-dismiss="alert">x</button>
            	</div>

            	<div class="alert alert-warning buy-details-warning hidden">
            		<span class="warning-message"></span>
            		<button type="button" class="close" data-dismiss="alert">x</button>
            	</div>

				<div class="card buy-card purchase-detail-card-1">
					<table>
						<tbody>
							<tr>
								<th>Current Stage</th>
								<td>1</td>
							</tr>
							<tr>
								<th>Bonus</th>
								<td>5 %</td>
							</tr>
							<tr>
								<th>Price</th>
								<td>0.13$</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="card buy-card purchase-detail-card-2">
					<table>
						<thead>
							<tr>
								<th>Stage</th>
								<th>Days</th>
								<th>Price</th>
								<th>Bonus</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$price = 0.12;
								for ($i=1; $i < 12; $i++) 
								{ 
									$price = $price + 0.01;
							?>
							<tr>
								<td><?= $i ?></td>
								<td>5</td>
								<td><?= $price ?>$</td>
								<td>
									<?php 
										if($i < 3)
										echo '5%';
										if($i > 2 & $i < 5)
										echo '4%';
										if($i > 4 & $i < 7)
										echo '3%';
										if($i > 6 & $i < 9)
										echo '2%';
										if($i > 8 )
										echo '1%';
									?>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
            </div>
        </div>
    </div>
</section>

<?php  include '_footer.php'; ?>