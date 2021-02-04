<!-- UPLOAD -->
							<div class="modal fade" id="upload<?php  echo $folder; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Upload file</h4>
										</div>
										<div class="modal-body">

											<!-- ############## -->
											
											<form id="form1" name="form3" method="post" action="fmanager_script.php" enctype="multipart/form-data">
											<div class="form-group">
											<input type="hidden" name="id" value="<?php  echo $subject_id; ?>"  id="exampleInputEmail1" placeholder="">
													<input type="hidden" name="subject" value="<?php  echo $subject; ?>"  id="exampleInputEmail1" placeholder="">
												</div>
											<div class="form-group">
											<div class="form-group">
													<input type="hidden" name="folder" value="<?php  echo $folder; ?>"  id="exampleInputEmail1" placeholder="">
												</div>
											<div class="form-group">
													<input type="hidden" name="path" value="<?php  echo $subject; ?>/<?php  echo $folder; ?>"  id="exampleInputEmail1" placeholder="">
												</div>
												<div class="form-group">
													<label for="exampleInputEmail1">Upload File</label>
													 <input type="file" name="upload_file" />
												</div>
												<input type="submit" name="upload" value="upload" class="btn btn-primary">
											</form>
											
											<!-- bodyyyyyyyyyyyy///// -->
										</div>
										<div class="modal-footer">
											<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
										</div>
									</div>
								</div>
							</div>