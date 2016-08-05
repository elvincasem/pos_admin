<?php
include('header.php');
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="color:#000;"><i class="fa fa-th fa-1x"></i> MENU LIST
						<div class="pull-right">
                                <div class="btn-group">
                                    <button id="additembutton" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#additem">
									<i class="fa fa-plus-circle"></i> Add Item
								</button>
                                </div>
                            </div></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
			
			<!-- Modal -->
				<div class="modal fade" id="additem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Add Item</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
								<input type="hidden" id="eid" value="">
								<label>Item Name</label>
								<input id="" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
								<label>Amount</label>
								<input id="" type="number" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
								<label>Category</label>
								<select class="form-control" style="margin-bottom: 10px;">
									<option>Breakfast Meal</option>
									<option>Happy Meal</option>
									<option>Wind Meal</option>
								</select>
							</div>
							
						</form>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default simplemodal-close" data-dismiss="modal">Close</button>
								<button id="saveuser" type="button" class="btn btn-primary">Add and Close</button>
								<button id="updateuser" type="button" class="btn btn-primary" disabled>Update</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>

			<!-- end modal-->
			
			
            <div class="row">
								<div class="col-lg-12">
								<div class="panel panel-default">
											<div class="panel-heading">
											   Search Item
											</div>
								<div class="panel-body">
								
												<div class="dataTable_wrapper">
													<table class="table table-striped table-bordered table-hover" id="dataTables-example">
														<thead>
															<tr>
																<th>Item</th>
																<th>Amount</th>
																<th>Category</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<tr class="odd gradeX">
																<td>Coke</td>
																<td>Php 20.00</td>
																<td>Drinks</td>
																
																<td class="center"><button type="button" class="btn btn-default btn-circle" data-toggle="tooltip" data-placement="top" title="View Item History" onclick="$('#viewitem').modal('show');"><i class="fa fa-eye"></i></button> 
																
																<button type="button" class="btn btn-success btn-circle" data-toggle="tooltip" data-placement="top" title="Edit Item" onclick="$('#updateitem').modal('show');"><i class="fa fa-edit" ></i></button> 
																
																<button type="button" class="btn btn-danger btn-circle" data-toggle="tooltip" data-placement="top" title="Delete Item"><i class="fa fa-times"></i></button></td>
															</tr>
															<tr class="odd gradeX">
																<td>Sprite</td>
																<td>Php 20.00</td>
																<td>Drinks</td>
																
																<td class="center"><button type="button" class="btn btn-default btn-circle" data-toggle="tooltip" data-placement="top" title="View Item History"  onclick="$('#viewitem').modal('show');"><i class="fa fa-eye"></i></button> 
																
																<button type="button" class="btn btn-success btn-circle" data-toggle="tooltip" data-placement="top" title="Edit Item" onclick="$('#updateitem').modal('show');"><i class="fa fa-edit" ></i></button> 
																
																<button type="button" class="btn btn-danger btn-circle" data-toggle="tooltip" data-placement="top" title="Delete Item"><i class="fa fa-times"></i></button></td>
															</tr>	
														</tbody>
													</table>
												</div>
												
											</div>
											
											</div><!-- table end -->
											</div><!-- panel default end-->
											
											</div> <!-- row end-->
											
		<!-- Modal -->
			<div class="modal fade" id="updateitem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Update Item</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
								<input type="hidden" id="eid" value="">
								<label>Item Name</label>
								<input id="" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
								<label>Amount</label>
								<input id="" type="number" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
								<label>Category</label>
								<select class="form-control" style="margin-bottom: 10px;">
									<option>Breakfast Meal</option>
									<option>Happy Meal</option>
									<option>Wind Meal</option>
								</select>
							</div>
							
						</form>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default simplemodal-close" data-dismiss="modal">Close</button>
								<button id="saveuser" type="button" class="btn btn-primary">Update and Close</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
			</div>
		<!-- end modal-->
		
		<!-- Modal -->
			<div class="modal fade" id="viewitem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Item History</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
								<input type="hidden" id="eid" value="">
								<em>
									Not yet Available.
								</em>
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
	
        </div>
        <!-- /#page-wrapper -->

    </div>

<?php
include('footer.php');
?>