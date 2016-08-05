<?php
include('header.php');
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-files-o fa-1x"></i> Reports
						</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-tasks fa-fw"></i> 
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Reports</th>
                                                    <th>View Report</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Cashier Transaction</td>
                                                    <td>
													<button type="button" class="btn btn-primary btn-circle" data-toggle="tooltip" data-placement="top" title="View Report" onclick="$('#viewctreport').modal('show');"><i class="fa fa-eye"></i>
													</button> <button type="button" class="btn btn-info btn-circle"><i class="fa fa-download">
													</td>
                                                </tr>
												<tr>
                                                    <td>Sales Summary</td>
                                                    <td>
													<button type="button" class="btn btn-primary btn-circle" data-toggle="tooltip" data-placement="top" title="View Report" onclick="$('#viewssreport').modal('show');"><i class="fa fa-eye"></i>
													</button> <button type="button" class="btn btn-info btn-circle"><i class="fa fa-download">
													</td>
                                                </tr>
												<tr>
                                                    <td>Other Report</td>
                                                    <td>
													<button type="button" class="btn btn-primary btn-circle" data-toggle="tooltip" data-placement="top" title="View Report" onclick="$('#vieworreport').modal('show');"><i class="fa fa-eye" ></i>
													</button> <button type="button" class="btn btn-info btn-circle"><i class="fa fa-download">
													</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                </div>
                <!-- /.col-lg-12 -->
                
            </div>
            <!-- /.row -->
			
			
			
			<!-- Modal -->
				<div class="modal fade" id="viewctreport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Cashier Transaction</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
								<input type="hidden" id="eid" value="">
								<label>Employee</label>
								<select class="form-control" style="margin-bottom: 10px;">
									<option>Richard</option>
									<option>Richard</option>
									<option>Richard</option>
								</select>
								<p>Date</p>
								<div class="form-group input-group">
                                    <input type="date" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">GO</button>
                                    </span>
                                </div>
							<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Slip No.</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>100</td>
                                        </tr>
										<tr>
                                            <td>2</td>
                                            <td>1000</td>
                                        </tr>
                                    </tbody>
                            </table>
								<center><label><h4>Total Transactions: 3</h4></label></center>
								<center><label><h4>Total Amount: 3</h4></label></center>
							</div>
						</form>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default simplemodal-close" data-dismiss="modal">Close</button>
								<button id="saveuser" type="button" class="btn btn-primary">Print and Close</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
			<!-- end modal-->
			
			<!-- Modal -->
				<div class="modal fade" id="viewssreport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog" style="width: 90% !important;">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Sales Summary</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
								<input type="hidden" id="eid" value="">

								<div class="col-lg-12">
									<div class="col-xs-6 col-sm-3">
									<button type="button" class="btn btn-primary" style="float: right;">Daily</button>
									</div>
									
									<div class="col-md-6">
									<input id="ratepeakseason" type="date" class="form-control" value="" tabindex="2">
									</div>
									
									<div class="col-xs-6 col-sm-3">
									<button type="button" class="btn btn-primary">Go</button>
									</div>
								</div>
								
								<br>
								<br>
								
								<div class="col-lg-12">
									<div class="col-xs-6 col-sm-3">
									<button type="button" class="btn btn-primary" style="float: right;">Monthly</button>
									</div>
									
									<div class="col-xs-6 col-sm-3">
									<select class="form-control" style="margin-bottom: 10px;">
										<option>January</option>
										<option>February</option>
										<option>March</option>
										<option>April</option>
										<option>May</option>
										<option>June</option>
										<option>July</option>
										<option>August</option>
										<option>September</option>
										<option>October</option>
										<option>November</option>
										<option>December</option>
									</select>
									</div>
									
									<div class="col-xs-6 col-sm-3">
									<select class="form-control" style="margin-bottom: 10px;">
										<option>2010</option>
										<option>2011</option>
										<option>2012</option>
										<option>2013</option>
										<option>2014</option>
										<option>2015</option>
										<option>2016</option>
										<option>2017</option>
										<option>2018</option>
									</select>
									</div>
									
									<div class="col-xs-6 col-sm-3">
									<button type="button" class="btn btn-primary">Go</button>
									</div>
								</div>
								
								<br>
								<br>
								
								<div class="col-lg-12">
									<div class="col-xs-6 col-sm-3">
									<button type="button" class="btn btn-primary" style="float: right;">Yearly</button>
									</div>
									
									<div class="col-md-6">
									<select class="form-control" style="margin-bottom: 10px;">
										<option>2010</option>
										<option>2011</option>
										<option>2012</option>
										<option>2013</option>
										<option>2014</option>
										<option>2015</option>
										<option>2016</option>
										<option>2017</option>
										<option>2018</option>
									</select>
									</div>
									
									<div class="col-xs-6 col-sm-3">
									<button type="button" class="btn btn-primary">Go</button>
									</div>
								</div>
								
								<br>
								<br>
								<br>
								
								<div class="col-lg-4">
									<div class="panel panel-primary">
										<div class="panel-heading">
											<center><h4>Cash</h4></center>
											<hr>
											<p><label>Total: 0</label>
											<span class="pull-right"><a href="ctreport.php" class="btn btn-default">Print</a></span></p>
										</div>
										<div class="panel-body">
											<table class="table table-hover" id="dataTables-cash">
												<thead>
													<tr>
														<th>Order Slip No.</th>
														<th>Amount</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>100</td>
													</tr>
													<tr>
														<td>2</td>
														<td>1000</td>
													</tr>
												</tbody>
											</table>
											
										</div>
										<!--<div class="panel-footer">
											Total: 0
											<span class="pull-right"><button type="button" class="btn btn-primary">Print</button></span>
										</div>-->
									</div>
								</div>
								
								<div class="col-lg-4">
									<div class="panel panel-primary">
										<div class="panel-heading">
											<center><h4>Credit</h4></center>
											<hr>
											<p><label>Total: 0</label><span class="pull-right"><button type="button" class="btn btn-default">Print</button></span></p>
										</div>
										<div class="panel-body">
											<table class="table table-hover" id="dataTables-example">
												<thead>
													<tr>
														<th>Order Slip No.</th>
														<th>Amount</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>100</td>
													</tr>
													<tr>
														<td>2</td>
														<td>1000</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4">
									<div class="panel panel-primary">
										<div class="panel-heading">
											<center><h4>Charges</h4></center>
											<hr>
											<p><label>Total: 0</label><span class="pull-right"><button type="button" class="btn btn-default">Print</button></span></p>
										</div>
										<div class="panel-body">
											<div class="table-responsive">
											<table class="table table-hover" id="dataTables-example">
												<thead>
													<tr>
														<th>Order Slip No.</th>
														<th>Bill Type</th>
														<th>Amount</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>Bill</td>
														<td>100</td>
													</tr>
													<tr>
														<td>2</td>
														<td>Bill</td>
														<td>1000</td>
													</tr>
												</tbody>
											</table>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</form>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default simplemodal-close" data-dismiss="modal">Close</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
			<!-- end modal-->
			
			<!-- Modal -->
				<div class="modal fade" id="vieworreport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Other Reports</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
							<input type="hidden" id="eid" value="">
							<div class="panel-group" id="accordion">
                                
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center>
                                        <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Detailed Report</a>
                                        </h4>
										</center>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="col-lg-12">
												<div class="col-xs-6 col-sm-3">
												<label style="float: right; margin-top: 5px;">Month</label>
												</div>
									
												<div class="col-md-6">
												<select class="form-control" style="margin-bottom: 10px;">
												<option>January</option>
												<option>February</option>
												<option>March</option>
												<option>April</option>
												<option>May</option>
												<option>June</option>
												<option>July</option>
												<option>August</option>
												<option>September</option>
												<option>October</option>
												<option>November</option>
												<option>December</option>
												</select>
												</div>
									
												<div class="col-xs-6 col-sm-3">
												</div>
											</div>
											
											<div class="col-lg-12">
												<div class="col-xs-6 col-sm-3">
												<label style="float: right; margin-top: 5px;">From</label>
												</div>
									
												<div class="col-md-6">
												<input id="" class="form-control" value="" style="margin-bottom: 10px;">
												</div>
									
												<div class="col-xs-6 col-sm-3">
												</div>
											</div>
											
											<div class="col-lg-12">
												<div class="col-xs-6 col-sm-3">
												<label style="float: right; margin-top: 5px;">To</label>
												</div>
									
												<div class="col-md-6">
												<input id="" class="form-control" value="" style="margin-bottom: 10px;">
												</div>
									
												<div class="col-xs-6 col-sm-3">
												</div>
											</div>
											
											<div class="col-lg-12">
												<div class="col-xs-6 col-sm-3">
												<label style="float: right; margin-top: 5px;">Year</label>
												</div>
									
												<div class="col-md-6">
												<input id="" type="number" class="form-control" value="" style="margin-bottom: 10px;">
												</div>
									
												<div class="col-xs-6 col-sm-3">
												</div>
											</div>
											
											<div class="col-lg-12">
												<div class="col-xs-6 col-sm-3">
												<label style="float: right; margin-top: 5px;">Select Cashier</label>
												</div>
									
												<div class="col-md-6">
												<select class="form-control" style="margin-bottom: 10px;">
												<option>Richard</option>
												<option>Richard</option>
												<option>Richard</option>
												</select>
												</div>
									
												<div class="col-xs-6 col-sm-3">
													<div class="checkbox">
														<label>
															<input type="checkbox" value=""> All
														</label>
													</div>
												</div>
											</div>
											
											<div class="col-lg-12">
												<div class="col-xs-6 col-sm-3">
												<label style="float: right; margin-top: 5px;">Payment Type</label>
												</div>
									
												<div class="col-md-6">
												<select class="form-control" style="margin-bottom: 10px;">
												<option>Cash</option>
												<option>Credit Card</option>
												<option>Bank Deposit</option>
												</select>
												</div>
									
												<div class="col-xs-6 col-sm-3">
													<div class="checkbox">
														<label>
															<input type="checkbox" value=""> All
														</label>
													</div>
												</div>
											</div>
											
											<div class="col-lg-12">
												<center>
													<button id="" type="button" class="btn btn-primary">OK</button>
												</center>
											</div>
											
										</div>
                                    </div>
                                </div>
								
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
										<center>
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Shift End Report</a>
                                        </h4>
										</center>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
										
                                            <div class="col-lg-12">
												<div class="col-md-2">
												<label style="float: right; margin-top: 5px;">Shift</label>
												</div>
									
												<div class="col-md-10">
												<select class="form-control" style="margin-bottom: 10px;">
												<option>6:00 AM - 3:00 PM</option>
												<option>3:00 PM - 12:00 PM</option>
												</select>
												</div>
											</div>
											
											<div class="col-lg-12">
												<div class="col-md-2">
												<label style="float: right; margin-top: 5px;">Date</label>
												</div>
									
												<div class="col-md-10">
												<input class="form-control" type="date" style="margin-bottom: 10px;">
												</div>
											</div>
											
											<div class="col-lg-12">
												<center>
													<button id="" type="button" class="btn btn-primary">OK</button>
												</center>
											</div>
											
                                        </div>
                                    </div>
                                </div>
								
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
										<center>
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Charges Report</a>
                                        </h4>
										</center>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            
											<div class="col-lg-12">
												<div class="col-md-2">
												<label style="float: right; margin-top: 5px;">Date</label>
												</div>
									
												<div class="col-md-10">
												<input class="form-control" type="date" style="margin-bottom: 10px;">
												</div>
											</div>
											
											<div class="col-lg-12">
												<center>
													<button id="" type="button" class="btn btn-primary">OK</button>
												</center>
											</div>
                                        </div>
                                    </div>
                                </div>
								
								<div class="panel panel-primary">
                                    <div class="panel-heading">
										<center>
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Credit Reports</a>
                                        </h4>
										</center>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="col-lg-12">
												<div class="col-md-2">
												<label style="float: right; margin-top: 5px;">Date</label>
												</div>
									
												<div class="col-md-10">
												<input class="form-control" type="date" style="margin-bottom: 10px;">
												</div>
											</div>
											
											<div class="col-lg-12">
												<center>
													<button id="" type="button" class="btn btn-primary">OK</button>
												</center>
											</div>
                                        </div>
                                    </div>
                                </div>
								
								<div class="panel panel-primary">
                                    <div class="panel-heading">
										<center>
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Cancelled Items</a>
                                        </h4>
										</center>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="col-lg-12">
												<div class="col-md-2">
												<label style="float: right; margin-top: 5px;">Date</label>
												</div>
									
												<div class="col-md-10">
												<input class="form-control" type="date" style="margin-bottom: 10px;">
												</div>
											</div>
											
											<div class="col-lg-12">
												<center>
													<button id="" type="button" class="btn btn-primary">OK</button>
												</center>
											</div>
                                        </div>
                                    </div>
                                </div>
								
								<div class="panel panel-primary">
                                    <div class="panel-heading">
										<center>
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Discount Report</a>
                                        </h4>
										</center>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="col-lg-12">
												<div class="col-md-2">
												<label style="float: right; margin-top: 5px;">Date</label>
												</div>
									
												<div class="col-md-10">
												<input class="form-control" type="date" style="margin-bottom: 10px;">
												</div>
											</div>
											
											<div class="col-lg-12">
												<center>
													<button id="" type="button" class="btn btn-primary">OK</button>
												</center>
											</div>
                                        </div>
                                    </div>
                                </div>
								
                            </div>
							</div>
						</form>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default simplemodal-close" data-dismiss="modal">Close</button>
								<!--<button id="saveuser" type="button" class="btn btn-primary">Print and Close</button>-->
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
			<!-- end modal-->
			
			
        </div>
        <!-- /#page-wrapper -->

    </div>

<?php
include('footer.php');
?>