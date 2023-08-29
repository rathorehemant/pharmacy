<div class="span3">
					<div class="sidebar">


<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Manage RESPONSES
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="notprocess-complaint.php">
											<i class="icon-tasks"></i>
											ALL RESPONSES
											<?php
$rt = mysqli_query($con,"SELECT * FROM user_response ORDER BY id DESC");
$num1 = mysqli_num_rows($rt);
{?>
		
											<b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
											<?php } ?>
										
                   
										
	     

										</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="manage-users.php">
									<i class="menu-icon icon-group"></i>
									Manage users
								</a>
							</li>
						</ul>


						
                        
                            </ul><!--/.widget-nav-->
							
							
						<ul class="widget widget-menu unstyled">
							<li><a href="category.php"><i class="menu-icon icon-tasks"></i>ADD PRODUCT </a></li>
						    <li><a href="product_image.php"><i class="menu-icon icon-tasks"></i>ADD PRODUCT IMAGE </a></li>
</ul>

						<ul class="widget widget-menu unstyled">
							<li><a href="add_pharmacist.php"><i class="menu-icon icon-tasks"></i>ADD PHARMACIST </a></li>
							<ul class="widget widget-menu unstyled">
							<li><a href="manage-pharma.php"><i class="menu-icon icon-tasks"></i>MANAGE PHARMACIST </a></li>
							
							<li>
							
							<li>
							
							
								<a href="logout.php">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->
