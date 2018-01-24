<?php
$pageTitle = 'Categories';
include 'init.php';
			?>

			<div class="container">
				<h1 class="text-center">Manage Categories</h1>
				<div class="table-responsive">
					<table class="main-table text-center table table-bordered">
						<tr>
							<td>ID</td>
							<td>Name</td>
							<td>Description</td>
							<td>Ordering</td>
							<td>Allow Commenting</td>
							<td>Visiblity</td>
							<td>Allow Ads</td>
							<td>Control</td>
						</tr>
						<tr>
                              <td>1</td>
                              <td>Category 1</td>
                              <td>Description 1</td>
                              <td>Ordering</td>
                              <td>yes</td>
                              <td>yes</td>
                              <td>no</td>
                              <td>
                                <a href='editCategory.php' class=' btn btn-success'><i class='fa fa-edit'></i>Edit</a>
                                <a href='#' class='confirm btn btn-danger'><i class='fa fa-close'></i>Delete</a>
                              </td>
                        </tr><tr>
                              <td>2</td>
                              <td>Category 2</td>
                              <td>Description 2</td>
                              <td>Ordering</td>
                              <td>no</td>
                              <td>yes</td>
                              <td>no</td>
                              <td>
                                <a href='editCategory.php' class=' btn btn-success'><i class='fa fa-edit'></i>Edit</a>
                                <a href='#' class='confirm btn btn-danger'><i class='fa fa-close'></i>Delete</a>
                              </td>
                        </tr><tr>
                              <td>3</td>
                              <td>Category 3</td>
                              <td>Description 3</td>
                              <td>Ordering</td>
                              <td>no</td>
                              <td>no</td>
                              <td>yes</td>
                              <td>
                                <a href='editCategory.php' class=' btn btn-success'><i class='fa fa-edit'></i>Edit</a>
                                <a href='#' class='confirm btn btn-danger'><i class='fa fa-close'></i>Delete</a>
                              </td>
                        </tr><tr>
                              <td>4</td>
                              <td>Category 4</td>
                              <td>Description 4</td>
                              <td>Ordering</td>
                              <td>yes</td>
                              <td>yes</td>
                              <td>no</td>
                              <td>
                                <a href='editCategory.php' class=' btn btn-success'><i class='fa fa-edit'></i>Edit</a>
                                <a href='#' class='confirm btn btn-danger'><i class='fa fa-close'></i>Delete</a>
                              </td>
                        </tr>
					</table>
				</div>
					
			<a href='addCategory.php' class="btn btn-primary"><i class="fa fa-plus"></i> Add a new category</a>
		</div>
