<div class="page-body">
               <div class="container-fluid">
                  <div class="page-title">
                     <div class="row">
                        <div class="col-6">
                           <h3>Episodes List</h3>
                        </div>
                        <div class="col-6">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item">
								  <a href="<?php base_url(); ?>home">
									  <i data-feather="home"></i>
								  </a>
							  </li>
							  <li class="breadcrumb-item">Episodes</li> 
                           </ol>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid starts-->
               <div class="container-fluid">
                  <div class="row">
					  <div class="col-sm-12">
						<div class="card">
						  <div class="card-header">
							  <h5>List of Episodes Created by Korroboree Team</h5>
							  <div class="card-header-right">
								  <h6>
									  <a href="<?php base_url(); ?>create_v">Create New Episode</a>
								  </h6>
								  <h6>
									  <a href="<?php base_url(); ?>tracker_v">Episode Tracker</a>
								  </h6>
							  </div> 
						  </div>
						  <div class="card-body">
							<div class="table-responsive">
							  <table class="display" id="basic-10">
								<thead>
								  <tr>
									<th>Name</th>
									<th>Month</th>
									<th>Topics</th>
									<th>Editor</th>
									<th>Tracking</th>
									<th>Actions</th>
									<th>Tracker</th>  
								  </tr>
								</thead>
								<tbody>
								<?php if (!empty($video)) {
                                               $no = 1;
                                            foreach ($video as $row) {
												$id= $row->episode_number;
                                            
                                            ?> 
								  <tr>
									<td><?php echo $row->title;?></td>
									<td><?php echo $row->month;?></td>
									<td>
									<?php  
									$count='0';
									foreach ($v->result() as $r)  
									{  
										if($r->topic_number == $id){
											$count = $count+1;

										}

									}
									echo $count;					
									?>		
									<td>Sashreek</td>
									<td>
										<div class="project-status mt-0">
											<div class="media">
												<p>70%</p>
												<div class="media-body text-right"><span>Done</span></div>
											</div>
											<div class="progress" style="height: 5px">
												<div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</td>
									<td>
										<ul class="list-unstyled card-option">
											<li style="float: left !important; padding: 0 10px !important;">
												<a href="<?php echo base_url(); ?>view_v">
													<i data-feather="eye"></i>
												</a>
											</li>
											<li style="float: left !important; padding: 0 10px !important;">
												<a href="<?php echo base_url(); ?>k_team_video_journal/episode/edit_v/<?php echo $row->id  ?>">
													<i data-feather="edit"></i>
												</a>
											</li>
											<li style="float: left !important; padding: 0 10px !important;">
												<a href="<?php echo base_url(); ?>k_team_video_journal/episode/delete/<?php echo $row->id  ?>">
													<i data-feather="trash-2"></i>
												</a>
											</li>
										</ul>
									</td>
									<td>
										<a class="btn btn-danger" href="<?php base_url(); ?>tracker_v">Tracker</a>
									</td>
								  </tr>
								  
									<?php }  }?>
								  
								</tbody>
								<tfoot>
								  <tr>
									<th>Name</th>
									<th>Date</th>
									<th>Topics</th>
									<th>Editor</th>
									<th>Tracking</th>
									<th>Actions</th>
								  </tr>
								</tfoot>
							  </table>
							</div>
						  </div>
						</div>
					  </div>
                  </div>
               </div>
               <!-- Container-fluid Ends-->
            </div>