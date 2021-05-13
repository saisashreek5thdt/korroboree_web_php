<div class="page-body">
               <div class="container-fluid">
                  <div class="page-title">
                     <div class="row">
                        <div class="col-6">
                           <h3></h3>
                        </div>
                        <div class="col-6">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item">
								  <a href="<?php base_url(); ?>home">
									  <i data-feather="home"></i>
								  </a>
							  </li>
							  <li class="breadcrumb-item">
								  <a href="<?php base_url(); ?>episode_list">Episodes</a>
							  </li>
							  <li class="breadcrumb-item">Edit Episode</li> 
                           </ol>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid starts-->
               <div class="container-fluid">
                  <div class="row">
					  <div class="col-sm-12 col-xl-12">
						  <div class="row">
							  <div class="col-sm-12">
								  <div class="card">
									 <div class="card-header">
										<h5>Edit Your Episodes Here</h5>
									 </div>
									 <div class="card-body add-post">
										<form class="theme-form needs-validation" novalidate="" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>k_team_video_journal/episode/update/<?php echo $edit_v->id  ?>">
										<input class="form-control" id="inputPassword3" type="hidden" placeholder="Episode Title" value="<?php echo $edit_v->id ?>">
										   <div class="form-group row">
											  <label class="col-sm-3 col-form-label" for="inputEmail3">Episode Number</label>
											  <div class="col-sm-9">
												 <h5><?php echo $edit_v->episode_number ?></h5>
												 <input class="form-control" required  name="number" type="hidden" value="<?php echo $edit_v->episode_number ?>" placeholder="Topic Title">

											  </div>
										   </div>
										   <div class="form-group row">
											  <label class="col-sm-3 col-form-label" for="inputPassword3">Episode Title</label>
											  <div class="col-sm-3">
												  <h6>Title Name Here</h6>
											  </div> 
											  <div class="col-sm-6">
												 <input class="form-control" id="inputPassword3" type="text" name="title" placeholder="Episode Title" value="<?php echo $edit_v->title ?>">
											  </div>
										   </div>
										   <div class="form-group row">
											  <label class="col-sm-3 col-form-label" for="inputPassword3">Episode Month</label>
											  <div class="col-sm-9">
												 <h5><?php echo $edit_v->month ?></h5>
											  </div>
										   </div>
                                    
									 </div>
									 <div class="card-footer">
										<button class="btn btn-primary">Update Episode</button>
										<button class="btn btn-secondary">Cancel</button>
									 </div>
									 </form>
								  </div>
                              </div>
						  </div>
					  </div>
                  </div>
               </div>
               <!-- Container-fluid Ends-->
            </div>