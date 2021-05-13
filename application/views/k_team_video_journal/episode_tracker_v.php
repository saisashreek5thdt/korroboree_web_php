<div class="page-body">
               <div class="container-fluid">
                  <div class="page-title">
                     <div class="row">
                        <div class="col-6">
                           <h3>Episodes Tracker</h3>
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
							  <li class="breadcrumb-item">Episodes Tracker</li> 
                           </ol>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid starts-->
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-12 project-list">
                        <div class="card">
                           <div class="row">
                              <div class="col-sm-6">
                                 <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                                    <li class="nav-item">
										<a class="nav-link active" id="top-home-tab" data-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="true">
											<i data-feather="target"></i>All
										</a>
									</li>
                                    <li class="nav-item">
										<a class="nav-link" id="profile-top-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false">
											<i data-feather="info"></i>Work In Progress
										</a>
									</li>
                                    <li class="nav-item">
										<a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false">
											<i data-feather="check-circle"></i>Completed
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="create-top-tab" data-toggle="tab" href="#top-create" role="tab" aria-controls="top-create" aria-selected="false">
											<i data-feather="power"></i>Created
										</a>
									</li> 
                                 </ul>
                              </div>
                              <div class="col-sm-6">
                                 <div class="text-right">
                                    <div class="form-group mb-0 mr-0"></div>
                                    <a class="btn btn-primary" href="<?php base_url(); ?>create_v"> <i data-feather="plus-square"> </i>Create New Episode</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-12">
                        <div class="card">
                           <div class="card-body">
                              <div class="tab-content" id="top-tabContent">
                                 <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                                    <div class="row">
                                       <div class="col-xl-4 col-lg-6">
                                          <div class="project-box">
                                             <span class="badge badge-primary">Doing</span>
                                             <h6>Episode 1</h6>
                                             <div class="media">
                                                <img class="img-20 mr-1 rounded-circle" src="<?php base_url(); ?>adminassets/images/user/3.jpg" alt="" data-original-title="" title="">
                                                <div class="media-body">
                                                   <p>Korroboree Team</p>
                                                </div>
                                             </div>
                                             <p>No of Segments and Videos Created</p>
                                             <div class="row details">
                                                <div class="col-6"><span>Segments </span></div>
                                                <div class="col-6 text-primary">12 </div>
                                                <div class="col-6"> <span>Videos</span></div>
                                                <div class="col-6 text-primary">5</div>
                                             </div>
                                             <div class="project-status mt-4">
                                                <div class="media mb-0">
                                                   <p>70% </p>
                                                   <div class="media-body text-right"><span>Done</span></div>
                                                </div>
                                                <div class="progress" style="height: 5px">
                                                   <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-4 col-lg-6">
                                          <div class="project-box">
                                             <span class="badge badge-success">Done</span>
                                             <h6>Episode 2</h6>
                                             <div class="media">
                                                <img class="img-20 mr-1 rounded-circle" src="<?php base_url(); ?>adminassets/images/user/3.jpg" alt="" data-original-title="" title="">
                                                <div class="media-body">
                                                   <p>Korroboree Team</p>
                                                </div>
                                             </div>
                                             <p>No of Segments and Videos Created</p>
                                             <div class="row details">
                                                <div class="col-6"><span>Segments </span></div>
                                                <div class="col-6 text-success">24</div>
                                                <div class="col-6"> <span>Videos</span></div>
                                                <div class="col-6 text-success">24</div>
                                             </div>
                                             <div class="project-status mt-4">
                                                <div class="media mb-0">
                                                   <p>100% </p>
                                                   <div class="media-body text-right"><span>Done</span></div>
                                                </div>
                                                <div class="progress" style="height: 5px">
                                                   <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-4 col-lg-6">
                                          <div class="project-box">
                                             <span class="badge badge-success">Done</span>
                                             <h6>Episode 3</h6>
                                             <div class="media">
                                                <img class="img-20 mr-1 rounded-circle" src="<?php base_url(); ?>adminassets/images/user/3.jpg" alt="" data-original-title="" title="">
                                                <div class="media-body">
                                                   <p>Korroboree Team</p>
                                                </div>
                                             </div>
                                             <p>No of Segments and Videos Created</p>
                                             <div class="row details">
                                                <div class="col-6"><span>Segments </span></div>
                                                <div class="col-6 text-success">40</div>
                                                <div class="col-6"> <span>Videos</span></div>
                                                <div class="col-6 text-success">40</div>
                                             </div>
                                             <div class="project-status mt-4">
                                                <div class="media mb-0">
                                                   <p>100% </p>
                                                   <div class="media-body text-right"><span>Done</span></div>
                                                </div>
                                                <div class="progress" style="height: 5px">
                                                   <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-4 col-lg-6 mt-4">
                                          <div class="project-box">
                                             <span class="badge badge-success">Done</span>
                                             <h6>Episode 4</h6>
                                             <div class="media">
                                                <img class="img-20 mr-1 rounded-circle" src="<?php base_url(); ?>adminassets/images/user/3.jpg" alt="" data-original-title="" title="">
                                                <div class="media-body">
                                                   <p>Korroboree Team</p>
                                                </div>
                                             </div>
                                             <p>No of Segments and Videos Created</p>
                                             <div class="row details">
                                                <div class="col-6"><span>Segments </span></div>
                                                <div class="col-6 text-success">24</div>
                                                <div class="col-6"> <span>Videos</span></div>
                                                <div class="col-6 text-success">24</div>
                                             </div>
                                             <div class="project-status mt-4">
                                                <div class="media mb-0">
                                                   <p>100% </p>
                                                   <div class="media-body text-right"><span>Done</span></div>
                                                </div>
                                                <div class="progress" style="height: 5px">
                                                   <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-4 col-lg-6 mt-4">
                                          <div class="project-box">
                                             <span class="badge badge-warning">Doing</span>
                                             <h6>Episode 5</h6>
                                             <div class="media">
                                                <img class="img-20 mr-1 rounded-circle" src="<?php base_url(); ?>adminassets/images/user/3.jpg" alt="" data-original-title="" title="">
                                                <div class="media-body">
                                                   <p>Korroboree Team</p>
                                                </div>
                                             </div>
                                             <p>No of Segments and Videos Created</p>
                                             <div class="row details">
                                                <div class="col-6"><span>Segments </span></div>
                                                <div class="col-6 text-primary">12 </div>
                                                <div class="col-6"> <span>Videos</span></div>
                                                <div class="col-6 text-primary">5</div>
                                             </div>
                                             <div class="project-status mt-4">
                                                <div class="media mb-0">
                                                   <p>50% </p>
                                                   <div class="media-body text-right"><span>Done</span></div>
                                                </div>
                                                <div class="progress" style="height: 5px">
                                                   <div class="progress-bar-animated bg-warning progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-4 col-lg-6 mt-4">
                                          <div class="project-box">
                                             <span class="badge badge-danger">Created</span>
                                             <h6>Episode 6</h6>
                                             <div class="media">
                                                <img class="img-20 mr-1 rounded-circle" src="<?php base_url(); ?>adminassets/images/user/3.jpg" alt="" data-original-title="" title="">
                                                <div class="media-body">
                                                   <p>Korroboree Team</p>
                                                </div>
                                             </div>
                                             <p>No of Segments and Videos Created</p>
                                             <div class="row details">
                                                <div class="col-6"><span>Segments </span></div>
                                                <div class="col-6 text-success">40</div>
                                                <div class="col-6"> <span>Videos</span></div>
                                                <div class="col-6 text-success">40</div>
                                             </div>
                                             <div class="project-status mt-4">
                                                <div class="media mb-0">
                                                   <p>30% </p>
                                                   <div class="media-body text-right"><span>Done</span></div>
                                                </div>
                                                <div class="progress" style="height: 5px">
                                                   <div class="progress-bar-animated bg-danger" role="progressbar" style="width: 30%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                                    <div class="row">
                                       <div class="col-xl-4 col-lg-6">
                                          <div class="project-box">
                                             <span class="badge badge-primary">Doing</span>
                                             <h6>Episode 7</h6>
                                             <div class="media">
                                                <img class="img-20 mr-1 rounded-circle" src="<?php base_url(); ?>adminassets/images/user/3.jpg" alt="" data-original-title="" title="">
                                                <div class="media-body">
                                                   <p>Korroboree Team</p>
                                                </div>
                                             </div>
                                             <p>No of Segments and Videos Created</p>
                                             <div class="row details">
                                                <div class="col-6"><span>Segments</span></div>
                                                <div class="col-6 text-primary">12 </div>
                                                <div class="col-6"> <span>Videos</span></div>
                                                <div class="col-6 text-primary">5</div>
                                             </div>
                                             <div class="project-status mt-4">
                                                <div class="media mb-0">
                                                   <p>70% </p>
                                                   <div class="media-body text-right"><span>Done</span></div>
                                                </div>
                                                <div class="progress" style="height: 5px">
                                                   <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-4 col-lg-6">
                                          <div class="project-box">
                                             <span class="badge badge-primary">Doing</span>
                                             <h6>Episode 8</h6>
                                             <div class="media">
                                                <img class="img-20 mr-1 rounded-circle" src="<?php base_url(); ?>adminassets/images/user/3.jpg" alt="" data-original-title="" title="">
                                                <div class="media-body">
                                                   <p>Korroboree Team</p>
                                                </div>
                                             </div>
                                             <p>No of Segments and Videos Created</p>
                                             <div class="row details">
                                                <div class="col-6"><span>Segments </span></div>
                                                <div class="col-6 text-primary">24</div>
                                                <div class="col-6"> <span>Videos</span></div>
                                                <div class="col-6 text-primary">24</div>
                                             </div>
                                             <div class="project-status mt-4">
                                                <div class="media mb-0">
                                                   <p>70% </p>
                                                   <div class="media-body text-right"><span>Done</span></div>
                                                </div>
                                                <div class="progress" style="height: 5px">
                                                   <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-4 col-lg-6">
                                          <div class="project-box">
                                             <span class="badge badge-warning">Doing</span>
                                             <h6>Episdoe 9</h6>
                                             <div class="media">
                                                <img class="img-20 mr-1 rounded-circle" src="<?php base_url(); ?>adminassets/images/user/3.jpg" alt="" data-original-title="" title="">
                                                <div class="media-body">
                                                   <p>Envato, australia</p>
                                                </div>
                                             </div>
                                             <p>No of Segments and Videos Created</p>
                                             <div class="row details">
                                                <div class="col-6"><span>Segments </span></div>
                                                <div class="col-6 text-primary">40</div>
                                                <div class="col-6"> <span>Videos</span></div>
                                                <div class="col-6 text-primary">40</div>
                                             </div>
                                             <div class="project-status mt-4">
                                                <div class="media mb-0">
                                                   <p>50% </p>
                                                   <div class="media-body text-right"><span>Done</span></div>
                                                </div>
                                                <div class="progress" style="height: 5px">
                                                   <div class="progress-bar-animated bg-warning progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-4 col-lg-6 mt-4">
                                          <div class="project-box">
                                             <span class="badge badge-warning">Doing</span>
                                             <h6>Episode 11</h6>
                                             <div class="media">
                                                <img class="img-20 mr-1 rounded-circle" src="<?php base_url(); ?>adminassets/images/user/3.jpg" alt="" data-original-title="" title="">
                                                <div class="media-body">
                                                   <p>Korroboree Team</p>
                                                </div>
                                             </div>
                                             <p>No of Segments and Videos Created</p>
                                             <div class="row details">
                                                <div class="col-6"><span>Segments </span></div>
                                                <div class="col-6 text-primary">12 </div>
                                                <div class="col-6"> <span>Videos</span></div>
                                                <div class="col-6 text-primary">5</div>
                                             </div>
                                             <div class="project-status mt-4">
                                                <div class="media mb-0">
                                                   <p>50% </p>
                                                   <div class="media-body text-right"><span>Done</span></div>
                                                </div>
                                                <div class="progress" style="height: 5px">
                                                   <div class="progress-bar-animated bg-warning progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                                    <div class="row">
                                       <div class="col-xl-4 col-lg-6">
                                          <div class="project-box">
                                             <span class="badge badge-success">Done</span>
                                             <h6>Episode 13</h6>
                                             <div class="media">
                                                <img class="img-20 mr-1 rounded-circle" src="<?php base_url(); ?>adminassets/images/user/3.jpg" alt="" data-original-title="" title="">
                                                <div class="media-body">
                                                   <p>Korroboree Team</p>
                                                </div>
                                             </div>
                                             <p>No of Segments and Videos Created</p>
                                             <div class="row details">
                                                <div class="col-6"><span>Segments </span></div>
                                                <div class="col-6 text-success">12 </div>
                                                <div class="col-6"> <span>Videos</span></div>
                                                <div class="col-6 text-success">5</div>
                                             </div>
                                             <div class="project-status mt-4">
                                                <div class="media mb-0">
                                                   <p>100% </p>
                                                   <div class="media-body text-right"><span>Done</span></div>
                                                </div>
                                                <div class="progress" style="height: 5px">
                                                   <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-4 col-lg-6">
                                          <div class="project-box">
                                             <span class="badge badge-success">Done</span>
                                             <h6>Episdoe 14</h6>
                                             <div class="media">
                                                <img class="img-20 mr-1 rounded-circle" src="<?php base_url(); ?>adminassets/images/user/3.jpg" alt="" data-original-title="" title="">
                                                <div class="media-body">
                                                   <p>Korroboree Team</p>
                                                </div>
                                             </div>
                                             <p>No of Segments and Videos Created</p>
                                             <div class="row details">
                                                <div class="col-6"><span>Segments </span></div>
                                                <div class="col-6 text-success">24</div>
                                                <div class="col-6"> <span>Videos</span></div>
                                                <div class="col-6 text-success">24</div>
                                             </div>
                                             <div class="project-status mt-4">
                                                <div class="media mb-0">
                                                   <p>100% </p>
                                                   <div class="media-body text-right"><span>Done</span></div>
                                                </div>
                                                <div class="progress" style="height: 5px">
                                                   <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-4 col-lg-6">
                                          <div class="project-box">
                                             <span class="badge badge-success">Done</span>
                                             <h6>Episode 15</h6>
                                             <div class="media">
                                                <img class="img-20 mr-1 rounded-circle" src="<?php base_url(); ?>adminassets/images/user/3.jpg" alt="" data-original-title="" title="">
                                                <div class="media-body">
                                                   <p>Korroboree Team</p>
                                                </div>
                                             </div>
                                             <p>No of Segments and Videos Created</p>
                                             <div class="row details">
                                                <div class="col-6"><span>Segments </span></div>
                                                <div class="col-6 text-success">40</div>
                                                <div class="col-6"> <span>Videos</span></div>
                                                <div class="col-6 text-success">40</div>
                                             </div>
                                             <div class="project-status mt-4">
                                                <div class="media mb-0">
                                                   <p>100% </p>
                                                   <div class="media-body text-right"><span>Done</span></div>
                                                </div>
                                                <div class="progress" style="height: 5px">
                                                   <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-4 col-lg-6 mt-4">
                                          <div class="project-box">
                                             <span class="badge badge-success">Done</span>
                                             <h6>Episode 16</h6>
                                             <div class="media">
                                                <img class="img-20 mr-1 rounded-circle" src="<?php base_url(); ?>adminassets/images/user/3.jpg" alt="" data-original-title="" title="">
                                                <div class="media-body">
                                                   <p>Korroboree Team</p>
                                                </div>
                                             </div>
                                             <p>No of Segments and Videos Created</p>
                                             <div class="row details">
                                                <div class="col-6"><span>Segments </span></div>
                                                <div class="col-6 text-success">24</div>
                                                <div class="col-6"> <span>Videos</span></div>
                                                <div class="col-6 text-success">24</div>
                                             </div>
                                             <div class="project-status mt-4">
                                                <div class="media mb-0">
                                                   <p>100% </p>
                                                   <div class="media-body text-right"><span>Done</span></div>
                                                </div>
                                                <div class="progress" style="height: 5px">
                                                   <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-4 col-lg-6 mt-4">
                                          <div class="project-box">
                                             <span class="badge badge-success">Done</span>
                                             <h6>Episode 17</h6>
                                             <div class="media">
                                                <img class="img-20 mr-1 rounded-circle" src="<?php base_url(); ?>adminassets/images/user/3.jpg" alt="" data-original-title="" title="">
                                                <div class="media-body">
                                                   <p>Korroboree Team</p>
                                                </div>
                                             </div>
                                             <p>No of Segments and Videos Created</p>
                                             <div class="row details">
                                                <div class="col-6"><span>Segments </span></div>
                                                <div class="col-6 text-success">12 </div>
                                                <div class="col-6"> <span>Videos</span></div>
                                                <div class="col-6 text-success">5</div>
                                             </div>
                                             <div class="project-status mt-4">
                                                <div class="media mb-0">
                                                   <p>100% </p>
                                                   <div class="media-body text-right"><span>Done</span></div>
                                                </div>
                                                <div class="progress" style="height: 5px">
                                                   <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-4 col-lg-6 mt-4">
                                          <div class="project-box">
                                             <span class="badge badge-success">Done</span>
                                             <h6>Episode 18</h6>
                                             <div class="media">
                                                <img class="img-20 mr-1 rounded-circle" src="<?php base_url(); ?>adminassets/images/user/3.jpg" alt="" data-original-title="" title="">
                                                <div class="media-body">
                                                   <p>Korroboree Team</p>
                                                </div>
                                             </div>
                                             <p>No of Segments and Videos Created</p>
                                             <div class="row details">
                                                <div class="col-6"><span>Segments </span></div>
                                                <div class="col-6 text-success">40</div>
                                                <div class="col-6"> <span>Videos</span></div>
                                                <div class="col-6 text-success">40</div>
                                             </div>
                                             <div class="project-status mt-4">
                                                <div class="media mb-0">
                                                   <p>100% </p>
                                                   <div class="media-body text-right"><span>Done</span></div>
                                                </div>
                                                <div class="progress" style="height: 5px">
                                                   <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
								 <div class="tab-pane fade" id="top-create" role="tabpanel" aria-labelledby="create-top-tab">
									 <div class="row">
										 <div class="col-xl-4 col-lg-6 mt-4">
                                          <div class="project-box">
                                             <span class="badge badge-danger">Created</span>
                                             <h6>Episode 10</h6>
                                             <div class="media">
                                                <img class="img-20 mr-1 rounded-circle" src="<?php base_url(); ?>adminassets/images/user/3.jpg" alt="" data-original-title="" title="">
                                                <div class="media-body">
                                                   <p>Korroboree Team</p>
                                                </div>
                                             </div>
                                             <p>No of Segments and Videos Created</p>
                                             <div class="row details">
                                                <div class="col-6"><span>Segements </span></div>
                                                <div class="col-6 text-primary">24</div>
                                                <div class="col-6"> <span>Videos</span></div>
                                                <div class="col-6 text-primary">24</div>
                                             </div>
                                             <div class="project-status mt-4">
                                                <div class="media mb-0">
                                                   <p>30% </p>
                                                   <div class="media-body text-right"><span>Done</span></div>
                                                </div>
                                                <div class="progress" style="height: 5px">
                                                   <div class="progress-bar-animated bg-danger progress-bar-striped" role="progressbar" style="width: 30%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
									   <div class="col-xl-4 col-lg-6 mt-4">
                                          <div class="project-box">
                                             <span class="badge badge-danger">Created</span>
                                             <h6>Episode 12</h6>
                                             <div class="media">
                                                <img class="img-20 mr-1 rounded-circle" src="<?php base_url(); ?>adminassets/images/user/3.jpg" alt="" data-original-title="" title="">
                                                <div class="media-body">
                                                   <p>Korroboree Team</p>
                                                </div>
                                             </div>
                                             <p>No of Segments and Videos Created</p>
                                             <div class="row details">
                                                <div class="col-6"><span>Segments </span></div>
                                                <div class="col-6 text-primary">40</div>
                                                <div class="col-6"> <span>Videos</span></div>
                                                <div class="col-6 text-primary">40</div>
                                             </div>
                                             <div class="project-status mt-4">
                                                <div class="media mb-0">
                                                   <p>30% </p>
                                                   <div class="media-body text-right"><span>Done</span></div>
                                                </div>
                                                <div class="progress" style="height: 5px">
                                                   <div class="progress-bar-animated bg-danger progress-bar-striped" role="progressbar" style="width: 30%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>	 
									 </div>
								 </div> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid Ends-->
            </div>