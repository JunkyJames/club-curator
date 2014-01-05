<!DOCTYPE html>
<html>
	<head>
    <?php $page_title = "Dashboard"; ?>
    <?php include 'head.php'; ?>
	</head>
	
	<body>
         
      <div class="out-container">
         <div class="outer">
            <!-- Sidebar starts -->
            <?php include 'sidebar.php'; ?>
            <!-- Sidebar ends -->
            
            <!-- Mainbar starts -->
            <div class="mainbar">
               
			    <!-- Page heading starts -->
				<div class="page-head">
					<div class="container">
						<div class="row">
							<!-- Page heading -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<h2><i class="icon-desktop"></i> JazzSoc - Dashboard</h2>
							</div>
							
						</div>
					</div>
				</div>
				<!-- Page heading ends -->
				
				
				<!-- Black block starts -->
				<div class="blue-block">
				
										
					<div class="row">
						<div class="col-md-12">
							
							<!-- TV with chart -->
							<div class="bb-tv">
							
								<!-- TV Head -->
								<div class="tv-head">
									<div class="tv-head-icons pull-left">
										
									</div>
									<div class="pull-right">
							
									</div>
									<div class="clearfix"></div>
								</div>
								
								<!-- TV Body -->
								<div class="tv-body">
									<div id="tv-chart"></div>
								</div>
								
								<!-- TV Foot -->
								<div class="tv-foot">
									<ul class="list-unstyled list-inline text-center">
									
										<li>
											<div class="tv-f-top">
												<span class="label label-info">2000</span>
											</div>
											<div class="tv-f-bottom">
												Visitors
											</div>
										</li>
										
										<li>
											<div class="tv-f-top">
												<span class="label label-success">50.5%</span>
											</div>
											<div class="tv-f-bottom">
												Bounce
											</div>
										</li>

										<li>
											<div class="tv-f-top">
												<span class="label label-danger">$200</span>
											</div>
											<div class="tv-f-bottom">
												Revenue
											</div>
										</li>

										<li>
											<div class="tv-f-top">
												<span class="label label-warning">1300</span>
											</div>
											<div class="tv-f-bottom">
												Orders
											</div>
										</li>	

										<li>
											<div class="tv-f-top">
												<span class="label label-primary">5220</span>
											</div>
											<div class="tv-f-bottom">
												Members
											</div>
										</li>	

										<li>
											<div class="tv-f-top">
												<span class="label label-info">2000</span>
											</div>
											<div class="tv-f-bottom">
												Active
											</div>
										</li>										
										
									</ul>
								</div>
								
							</div>
							
							
						</div>
					</div>
					
				</div>
				<!-- Black block ends -->
			
				
				<!-- Content starts -->
				
				<div class="container">
				
					
					<div class="row">
						<div class="col-md-6">
						
							<!-- Pages Widget -->
							<div class="widget pages-widget">

								<!-- Widget head -->
								<div class="widget-head">
									<h5 class="pull-left"><i class="icon-file"></i> Pages</h5>	
									<div class="widget-head-btns pull-right">
										<a href="#" class="wminimize"><i class="icon-chevron-up"></i></a>
										<a href="#" class="wclose"><i class="icon-remove"></i></a>
									</div>
									<div class="clearfix"></div>
								</div>

								<!-- Widget body -->
								<div class="widget-body no-padd">
									<div class="table-responsive">
										<table class="table table-bordered">
											<tr class="active"> 
												<th><input type="checkbox"></th>
												<th>Page Title</th>
												<th>File Size</th>
												<th><i class="icon-trash"></i></th>
												<th><i class="icon-edit"></i></th>
												<th><i class="icon-chevron-up"></i></th>
												<th><i class="icon-chevron-down"></i></th>
											</tr>
											<tr>
												<td><input type="checkbox"></td>
												<td><a href="#">About Us</a></td>
												<td>253.4 KB</td>
												<td><a href="#"><i class="icon-trash"></i></a></td>
												<td><a href="#"><i class="icon-edit"></i></a></td>
												<td><a href="#"><i class="icon-chevron-up"></i></a></td>
												<td><a href="#"><i class="icon-chevron-down"></i></a></td>
											</tr>
											<tr>
												<td><input type="checkbox"></td>
												<td><a href="#">Contact Us</a></td>
												<td>213 KB</td>
												<td><a href="#"><i class="icon-trash"></i></a></td>
												<td><a href="#"><i class="icon-edit"></i></a></td>
												<td><a href="#"><i class="icon-chevron-up"></i></a></td>
												<td><a href="#"><i class="icon-chevron-down"></i></a></td>
											</tr>
											<tr>
												<td><input type="checkbox"></td>
												<td><a href="#">Dashboard</a></td>
												<td>1.24 MB</td>
												<td><a href="#"><i class="icon-trash"></i></a></td>
												<td><a href="#"><i class="icon-edit"></i></a></td>
												<td><a href="#"><i class="icon-chevron-up"></i></a></td>
												<td><a href="#"><i class="icon-chevron-down"></i></a></td>
											</tr>
											<tr>
												<td><input type="checkbox"></td>
												<td><a href="#">Download</a></td>
												<td>30.00 MB</td>
												<td><a href="#"><i class="icon-trash"></i></a></td>
												<td><a href="#"><i class="icon-edit"></i></a></td>
												<td><a href="#"><i class="icon-chevron-up"></i></a></td>
												<td><a href="#"><i class="icon-chevron-down"></i></a></td>
											</tr>
											<tr>
												<td><input type="checkbox"></td>
												<td><a href="#">Portfolio</a></td>
												<td>140 MB</td>
												<td><a href="#"><i class="icon-trash"></i></a></td>
												<td><a href="#"><i class="icon-edit"></i></a></td>
												<td><a href="#"><i class="icon-chevron-up"></i></a></td>
												<td><a href="#"><i class="icon-chevron-down"></i></a></td>
											</tr>
										</table>
									</div>
								</div>

								<!-- Widget foot -->
								<div class="widget-foot">
									<div class="pull-right">
										<button class="btn btn-info btn-xs" type="submit">Clear All</button>
										<button class="btn btn-default btn-xs" type="submit">Open All</button>
									</div>
									<div class="clearfix"></div>
								</div>

							</div>						
						
						</div>
					
						<div class="col-md-6">
						
							<!-- Contacts Widget -->
								<div class="widget contacts-widget">

									<!-- Widget head -->
									<div class="widget-head">
										<h5 class="pull-left"><i class="icon-user"></i> Contacts</h5>	
										<div class="widget-head-btns pull-right">
											<a href="#" class="wclose"><i class="icon-remove"></i></a>
										</div>
										<div class="clearfix"></div>
									</div>

									<!-- Widget body -->
									<div class="widget-body 300-scroll">

										<ul class="list-unstyled">
										
											<!-- Alphabet with number of contacts -->
											<li class="contact-alpha">
												A <span class="label label-info pull-right">30 Contacts</span>
												<div class="clearfix"></div>
											</li>
											
											<!-- Single contact -->
											<li class="c-list">
												<!-- Contact pic -->
												<div class="contact-pic">
													<a href="#"><img src="img/user.jpg" alt="" class="img-responsive"/></a>
												</div>
												<!-- Contact details -->
												<div class="contact-details">
													<!-- Contact name and number -->
													<div class="pull-left">
														<strong>Akshay Kumar</strong>
														<small>(+1) 145-556-5848</small>
													</div>
													<!-- Call, Message and Email buttons -->
													<div class="pull-right">
														<a href="#" class="btn btn-info btn-xs"><i class="icon-phone"></i></a>
														<a href="#" class="btn btn-success btn-xs"><i class="icon-envelope"></i></a>
														<a href="#" class="btn btn-warning btn-xs"><i class="icon-comment"></i></a>
													</div>
													<div class="clearfix"></div>
												</div>
											</li>
											
											<li class="c-list">
												<!-- Contact pic -->
												<div class="contact-pic">
													<a href="#"><img src="img/user2.jpg" alt="" class="img-responsive"/></a>
												</div>
												<!-- Contact details -->
												<div class="contact-details">
													<!-- Contact name and number -->
													<div class="pull-left">
														<strong>Arun Babu</strong>
														<small>(+11) 425-576-9849</small>
													</div>
													<!-- Call, Message and Email buttons -->
													<div class="pull-right">
														<a href="#" class="btn btn-info btn-xs"><i class="icon-phone"></i></a>
														<a href="#" class="btn btn-success btn-xs"><i class="icon-envelope"></i></a>
														<a href="#" class="btn btn-warning btn-xs"><i class="icon-comment"></i></a>
													</div>
													<div class="clearfix"></div>
												</div>
											</li>

											<li class="c-list">
												<!-- Contact pic -->
												<div class="contact-pic">
													<a href="#"><img src="img/user.jpg" alt="" class="img-responsive"/></a>
												</div>
												<!-- Contact details -->
												<div class="contact-details">
													<!-- Contact name and number -->
													<div class="pull-left">
														<strong>Ashok Ramesh</strong>
														<small>(+1) 245-556-2849</small>
													</div>
													<!-- Call, Message and Email buttons -->
													<div class="pull-right">
														<a href="#" class="btn btn-info btn-xs"><i class="icon-phone"></i></a>
														<a href="#" class="btn btn-success btn-xs"><i class="icon-envelope"></i></a>
														<a href="#" class="btn btn-warning btn-xs"><i class="icon-comment"></i></a>
													</div>
													<div class="clearfix"></div>
												</div>
											</li>

											<li class="contact-alpha">
												B <span class="label label-info pull-right">10 Contacts</span>
												<div class="clearfix"></div>
											</li>												
											
											<li class="c-list">
												<!-- Contact pic -->
												<div class="contact-pic">
													<a href="#"><img src="img/user.jpg" alt="" class="img-responsive"/></a>
												</div>
												<!-- Contact details -->
												<div class="contact-details">
													<!-- Contact name and number -->
													<div class="pull-left">
														<strong>Babu Reddy</strong>
														<small>(+1) 145-556-5848</small>
													</div>
													<!-- Call, Message and Email buttons -->
													<div class="pull-right">
														<a href="#" class="btn btn-info btn-xs"><i class="icon-phone"></i></a>
														<a href="#" class="btn btn-success btn-xs"><i class="icon-envelope"></i></a>
														<a href="#" class="btn btn-warning btn-xs"><i class="icon-comment"></i></a>
													</div>
													<div class="clearfix"></div>
												</div>
											</li>
											
											<li class="c-list">
												<!-- Contact pic -->
												<div class="contact-pic">
													<a href="#"><img src="img/user2.jpg" alt="" class="img-responsive"/></a>
												</div>
												<!-- Contact details -->
												<div class="contact-details">
													<!-- Contact name and number -->
													<div class="pull-left">
														<strong>Biswin Kumar</strong>
														<small>(+11) 425-576-9849</small>
													</div>
													<!-- Call, Message and Email buttons -->
													<div class="pull-right">
														<a href="#" class="btn btn-info btn-xs"><i class="icon-phone"></i></a>
														<a href="#" class="btn btn-success btn-xs"><i class="icon-envelope"></i></a>
														<a href="#" class="btn btn-warning btn-xs"><i class="icon-comment"></i></a>
													</div>
													<div class="clearfix"></div>
												</div>
											</li>

											<li class="c-list">
												<!-- Contact pic -->
												<div class="contact-pic">
													<a href="#"><img src="img/user.jpg" alt="" class="img-responsive"/></a>
												</div>
												<!-- Contact details -->
												<div class="contact-details">
													<!-- Contact name and number -->
													<div class="pull-left">
														<strong>Balaji</strong>
														<small>(+1) 245-556-2849</small>
													</div>
													<!-- Call, Message and Email buttons -->
													<div class="pull-right">
														<a href="#" class="btn btn-info btn-xs"><i class="icon-phone"></i></a>
														<a href="#" class="btn btn-success btn-xs"><i class="icon-envelope"></i></a>
														<a href="#" class="btn btn-warning btn-xs"><i class="icon-comment"></i></a>
													</div>
													<div class="clearfix"></div>
												</div>
											</li>		

											<li class="contact-alpha">
												S <span class="label label-info pull-right">10 Contacts</span>
												<div class="clearfix"></div>
											</li>												
											
											<li class="c-list">
												<!-- Contact pic -->
												<div class="contact-pic">
													<a href="#"><img src="img/user.jpg" alt="" class="img-responsive"/></a>
												</div>
												<!-- Contact details -->
												<div class="contact-details">
													<!-- Contact name and number -->
													<div class="pull-left">
														<strong>Satish Kumar</strong>
														<small>(+1) 145-556-5848</small>
													</div>
													<!-- Call, Message and Email buttons -->
													<div class="pull-right">
														<a href="#" class="btn btn-info btn-xs"><i class="icon-phone"></i></a>
														<a href="#" class="btn btn-success btn-xs"><i class="icon-envelope"></i></a>
														<a href="#" class="btn btn-warning btn-xs"><i class="icon-comment"></i></a>
													</div>
													<div class="clearfix"></div>
												</div>
											</li>
											
											<li class="c-list">
												<!-- Contact pic -->
												<div class="contact-pic">
													<a href="#"><img src="img/user2.jpg" alt="" class="img-responsive"/></a>
												</div>
												<!-- Contact details -->
												<div class="contact-details">
													<!-- Contact name and number -->
													<div class="pull-left">
														<strong>Siva Kumar</strong>
														<small>(+11) 425-576-9849</small>
													</div>
													<!-- Call, Message and Email buttons -->
													<div class="pull-right">
														<a href="#" class="btn btn-info btn-xs"><i class="icon-phone"></i></a>
														<a href="#" class="btn btn-success btn-xs"><i class="icon-envelope"></i></a>
														<a href="#" class="btn btn-warning btn-xs"><i class="icon-comment"></i></a>
													</div>
													<div class="clearfix"></div>
												</div>
											</li>

											<li class="c-list">
												<!-- Contact pic -->
												<div class="contact-pic">
													<a href="#"><img src="img/user.jpg" alt="" class="img-responsive"/></a>
												</div>
												<!-- Contact details -->
												<div class="contact-details">
													<!-- Contact name and number -->
													<div class="pull-left">
														<strong>Sabari</strong>
														<small>(+1) 245-556-2849</small>
													</div>
													<!-- Call, Message and Email buttons -->
													<div class="pull-right">
														<a href="#" class="btn btn-info btn-xs"><i class="icon-phone"></i></a>
														<a href="#" class="btn btn-success btn-xs"><i class="icon-envelope"></i></a>
														<a href="#" class="btn btn-warning btn-xs"><i class="icon-comment"></i></a>
													</div>
													<div class="clearfix"></div>
												</div>
											</li>												
											
										</ul>
										
									</div>

									<!-- Widget foot -->
									<div class="widget-foot">
									</div>

								</div>
						
						</div>
					
					</div>
					
				</div>
				
				<!-- Content ends -->				
			   
            </div>
            <!-- Mainbar ends -->
            
            <div class="clearfix"></div>
         </div>
      </div>
		

		
	  <!-- Javascript files -->
	  <!-- jQuery -->
	  <script src="js/jquery.js"></script>
	  <!-- Bootstrap JS -->
	  <script src="js/bootstrap.min.js"></script>
      <!-- Sparkline for Mini charts -->
      <script src="js/sparkline.js"></script>
      <!-- jQuery UI -->
      <script src="js/jquery-ui-1.10.2.custom.min.js"></script>
      
      <!-- jQuery flot -->
      <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
      <script src="js/jquery.flot.min.js"></script>     
      <script src="js/jquery.flot.pie.min.js"></script>
      <script src="js/jquery.flot.resize.min.js"></script>
	  
	  <!-- jQuery Knob -->
	  <script src="js/jquery.knob.js"></script>
	  <!-- jQuery Data Tables -->
	  <script src="js/jquery.dataTables.min.js"></script>
	  <!-- jQuery Knob -->
	  <script src="js/bootstrap-switch.min.js"></script>
	  <!-- jQuery Knob -->
	  <script src="js/jquery.rateit.min.js"></script>
	  <!-- jQuery prettyPhoto -->
	  <script src="js/jquery.prettyPhoto.js"></script>
	  <!-- jquery slim scroll -->
	  <script src="js/jquery.slimscroll.min.js"></script>
	  <!-- jQuery gritter -->
	  <script src="js/jquery.gritter.min.js"></script>
	  <!-- jQuery full calendar -->
	  <script src="js/fullcalendar.min.js"></script>
	  <!-- Respond JS for IE8 -->
	  <script src="js/respond.min.js"></script>
	  <!-- HTML5 Support for IE -->
	  <script src="js/html5shiv.js"></script>
	  <!-- Custom JS -->
	  <script src="js/custom.notification.js"></script>
	  <script src="js/custom.js"></script>
      
      <!-- Javascript for this page -->
      
      <script type="text/javascript">
        
		 
         <!-- TV chart -->   
		 
		$(function () {

			/* Bar Chart starts */

			var d1 = [];
			for (var i = 0; i <= 50; i += 1)
				d1.push([i, parseInt(Math.random() * 30)]);

			var d2 = [];
			for (var i = 0; i <= 40; i += 1)
				d2.push([i, parseInt(Math.random() * 30)]);
	
	
			$.plot($("#tv-chart"), [ d1, d2 ], {
				series: {
					stack: 0,
					lines: { show: false },
					bars: { show: true, barWidth: 0.2 }
				},
				grid: {
					borderWidth: 0, labelMargin:5, color:"#bbb"
				},
				colors: ["#ff6c24", "#ff2424"],
				bars: {
				    show: true,
					lineWidth:4,
					fill: true,
					fillColor: { colors: [ { opacity: 0.9 }, { opacity: 0.8 } ] }
				},
				xaxis:{
					tickLength:0,
					font:{
						size:11,
						color:"#888"
					}
				},
				yaxis:{
					tickLength:0,
					font:{
						size:11,
						color:"#888"
					}
				}
			});
			
			/* Bar chart ends */

		});

		 
      </script>
      
	</body>	
</html>