<?php 

		$pageTitle = "dashboard";
		include 'init.php';
 		?>

 		<h1 class="text-center hidden-phone hidden-sm hidden-xs ">Dashboard</h1>
        <h2 class="text-center hidden-md hidden-lg">Dashboard</h2>
 		<div class="container main-contain text-center" >
	 			<div class="row">
	 				<div class="col col-md-3 box-info">
	 					<a href="members.php">
	 						
		 					<div class="stat st-members">
	 							<i class='fa fa-users'></i>
	 							<div class="info">
	 								Members
									<span>100</span>
	 							</div>
		 					</div>
	 					</a>
	 				</div>

	 				<div class="col col-md-3 box-info">
	 					<a href="coperative.php">
		 					<div class="stat st-pending">
		 						<i class='fa fa-user-plus'></i>
	 							<div class="info">
		 							Coperative
		 							<span>30</span>
		 						</div>
		 					</div>
	 					</a>
	 				</div>

	 				<div class="col col-md-3 box-info">
	 					<a href="items.php">
	 					<div class="stat st-items">
	 						<i class='fa fa-tag'></i>
 							<div class="info">
	 							   Total Orders
	 							  <span>800</span>
	 						</div>
	 					</div>
	 					</a>
	 				</div>

	 				<div class="col col-md-3 box-info">
	 					<div class="stat st-comments">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            <div class="info">
	 							Pending Orders
	 							<span>50</span>
	 						</div>
	 					</div>
	 				</div>
	 			</div>
		</div>

		<div class="container latest">
			<div class="row">
				<div class="col-sm-6">
					<div class="panel panel-default">
							<div class="panel-heading">
                                <i class="fa fa-tag"></i> Latest Items
                                <span class='toggle-info'>
									<i class='fa fa-minus pull-right'></i>
							    </span>
                            </div>
							<div class="panel-body">
								<ul class="list-unstyled latest-users">
											<li>
                                                Item 1
												<a href='#'>
													<span class="btn btn-success pull-right">
														<i class='fa fa-edit'></i>
														Edit
													</span>
												</a>
											</li><li>
                                                Item 2
												<a href='#'>
													<span class="btn btn-success pull-right">
														<i class='fa fa-edit'></i>
														Edit
													</span>
												</a>
											</li><li>
                                                Item 3
												<a href='#'>
													<span class="btn btn-success pull-right">
														<i class='fa fa-edit'></i>
														Edit
													</span>
												</a>
											</li><li>
                                                Item 4
												<a href='#'>
													<span class="btn btn-success pull-right">
														<i class='fa fa-edit'></i>
														Edit
													</span>
												</a>
											</li><li>
                                                Item 5
												<a href='#'>
													<span class="btn btn-success pull-right">
														<i class='fa fa-edit'></i>
														Edit
													</span>
												</a>
											</li>
								</ul>
							</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
                            <i class="fa fa-users"></i>
                            Latest  Registred Users
                            <span class='toggle-info'>
									<i class='fa fa-minus pull-right'></i>
								</span>
						</div>
						<div class="panel-body">
							<ul class="list-unstyled latest-items">
											<li>
												User 1
												<a href='#'>
													<span class="btn btn-success pull-right">
														<i class='fa fa-edit'></i>
														Edit
													</span>
												</a>
													<a href='#'>
													<span class="btn btn-info pull-right">
														<i class='fa fa-check'></i>
														Approve
													</span>
												</a>
											</li><li>
												User 2
												<a href='#'>
													<span class="btn btn-success pull-right">
														<i class='fa fa-edit'></i>
														Edit
													</span>
												</a>
													<a href='#'>
													<span class="btn btn-info pull-right">
														<i class='fa fa-check'></i>
														Approve
													</span>
												</a>
											</li><li>
												User 3
												<a href='#'>
													<span class="btn btn-success pull-right">
														<i class='fa fa-edit'></i>
														Edit
													</span>
												</a>
													<a href='#'>
													<span class="btn btn-info pull-right">
														<i class='fa fa-check'></i>
														Approve
													</span>
												</a>
											</li><li>
												User 4
												<a href='#'>
													<span class="btn btn-success pull-right">
														<i class='fa fa-edit'></i>
														Edit
													</span>
												</a>
													<a href='#'>
													<span class="btn btn-info pull-right">
														<i class='fa fa-check'></i>
														Approve
													</span>
												</a>
											</li><li>
												User 5
												<a href='#'>
													<span class="btn btn-success pull-right">
														<i class='fa fa-edit'></i>
														Edit
													</span>
												</a>
													<a href='#'>
													<span class="btn btn-info pull-right">
														<i class='fa fa-check'></i>
														Approve
													</span>
												</a>
											</li>
								</ul>
						</div>

					</div>
				</div>
			</div>
		</div>


		<?php
		include $tp.'footer.php';
		
