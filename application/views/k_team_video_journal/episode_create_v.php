<div class="page-body">
               <div class="container-fluid">
                  <div class="page-title">
                     <div class="row">
                        <div class="col-6">
                           <h3>Create New Episode</h3>
                        </div>
                        <div class="col-6">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item">
								  <a href="<?php base_url(); ?>home">
									  <i data-feather="home"></i>
								  </a>
							  </li>
							  <li class="breadcrumb-item">
								  <a href="<?php base_url(); ?>episode_list_v">Episodes</a>
							  </li>
							  <li class="breadcrumb-item">Create New Episode</li> 
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
										<h5>Create Your Episodes Here</h5>
										<span>Using this form can create multiple episodes.</span>
									 </div>
									 <div class="card-body add-post">
									 <form class="theme-form needs-validation" method="post" novalidate="" enctype="multipart/form-data" action="<?php base_url(); ?>add">
										   <div class="form-group row">
											  <label class="col-sm-3 col-form-label" for="inputEmail3">Episode Number</label>
											  <div class="col-sm-9">
											  <h5><?php echo $epnum +1 ?></h5>
												 <input class="form-control" required  name="number" type="hidden" value="<?php echo $epnum+1 ?>" placeholder="Topic Title">
											  </div>
										   </div>
										   <div class="form-group row">
											  <label class="col-sm-3 col-form-label" for="episode_title">Episode Title</label>
											  <div class="col-sm-9">
												 <input class="form-control" id="episode_title" name="title" required  type="text" placeholder="Episode Title">
											  </div>
										   </div>
										   <div class="form-group row">
											  <label class="col-sm-3 col-form-label" for="">Episode Month</label>
											  <div class="col-sm-9">
												 <h5><?php echo date('F/d')?></h5>
												 <input class="form-control" id="topic_title" name="month" type="hidden" value="<?php echo date('F/d')?>" placeholder="Topic Title">
											  </div>
										   </div>
										   <div class="form-group row">
											   <label class="col-sm-3 col-form-label" for="episode_story_board">Upload Episode Story Board</label>
											   <div class="col-sm-9">
												 <input class="form-control" id="episode_story_board" name="file" type="file" placeholder="Episode Story Board">
											   </div>
										   </div>
											<div class="form-group row"></div>
                                    
									 </div>
									 <div class="card-footer">
										<button class="btn btn-primary">Create New Episode</button>
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