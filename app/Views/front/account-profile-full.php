<!-- Profile Start -->
        <section class="section mt-60">
            <div class="container mt-lg-3">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 d-lg-block d-none">
                        <div class="sidebar sticky-bar p-4 rounded shadow">
                            <!-- <div class="widget">
                                <h5 class="widget-title">Followers :</h5>
                                <div class="row mt-4">
                                    <div class="col-6 text-center">
                                        <i data-feather="user-plus" class="fea icon-ex-md text-primary mb-1"></i>
                                        <h5 class="mb-0">2588</h5>
                                        <p class="text-muted mb-0">Followers</p>
                                    </div> --><!--end col-->

                                    <!-- <div class="col-6 text-center">
                                        <i data-feather="users" class="fea icon-ex-md text-primary mb-1"></i>
                                        <h5 class="mb-0">454</h5>
                                        <p class="text-muted mb-0">Following</p>
                                    </div> --><!--end col-->
                                <!-- </div> --><!--end row-->
                            <!-- </div> -->

                            <div class="widget mt-4 pt-2">

                                <h5 class="widget-title">Masa Studi :</h5>
                                <div class="progress-box mt-4">
                                    <h6 class="title text-muted">Progress</h6>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar position-relative bg-primary" style="width:1%;">
                                            <div class="progress-value d-block text-muted h6">0 / 100</div>
                                        </div>
                                    </div>
                                </div><!--end process box-->
                            </div>
                            
                            <div class="widget">
                                <div class="row">
                                    <div class="col-6 mt-4 pt-2">
                                        <a href="account-profile.html" class="accounts active rounded d-block shadow text-center py-3">
                                            <span class="pro-icons h3 text-muted"><i class="uil uil-dashboard"></i></span>
                                            <h6 class="title text-dark h6 my-0">Profile</h6>
                                        </a>
                                    </div><!--end col-->

                                    <div class="col-6 mt-4 pt-2">
                                        <a href="account-members.html" class="accounts rounded d-block shadow text-center py-3">
                                            <span class="pro-icons h3 text-muted"><i class="uil uil-users-alt"></i></span>
                                            <h6 class="title text-dark h6 my-0">Members</h6>
                                        </a>
                                    </div><!--end col-->

                                    <div class="col-6 mt-4 pt-2">
                                        <a href="account-works.html" class="accounts rounded d-block shadow text-center py-3">
                                            <span class="pro-icons h3 text-muted"><i class="uil uil-file"></i></span>
                                            <h6 class="title text-dark h6 my-0">Works</h6>
                                        </a>
                                    </div><!--end col-->

                                    <div class="col-6 mt-4 pt-2">
                                        <a href="account-messages.html" class="accounts rounded d-block shadow text-center py-3">
                                            <span class="pro-icons h3 text-muted"><i class="uil uil-envelope-star"></i></span>
                                            <h6 class="title text-dark h6 my-0">Messages</h6>
                                        </a>
                                    </div><!--end col-->

                                    <div class="col-6 mt-4 pt-2">
                                        <a href="account-payments.html" class="accounts rounded d-block shadow text-center py-3">
                                            <span class="pro-icons h3 text-muted"><i class="uil uil-transaction"></i></span>
                                            <h6 class="title text-dark h6 my-0">Payments</h6>
                                        </a>
                                    </div><!--end col-->

                                    <div class="col-6 mt-4 pt-2">
                                        <a href="account-setting.html" class="accounts rounded d-block shadow text-center py-3">
                                            <span class="pro-icons h3 text-muted"><i class="uil uil-setting"></i></span>
                                            <h6 class="title text-dark h6 my-0">Settings</h6>
                                        </a>
                                    </div><!--end col-->

                                    <div class="col-6 mt-4 pt-2">
                                        <a href="<?php echo base_url('login/logout'); ?>" class="accounts rounded d-block shadow text-center py-3">
                                            <span class="pro-icons h3 text-muted"><i class="uil uil-sign-out-alt"></i></span>
                                            <h6 class="title text-dark h6 my-0">Logout</h6>
                                        </a>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>

                            <div class="widget mt-4 pt-2">
                                <h5 class="widget-title">Follow me :</h5>
                                <ul class="list-unstyled social-icon mb-0 mt-4">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="github" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="youtube" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="gitlab" class="fea icon-sm fea-social"></i></a></li>
                                </ul><!--end icon-->
                            </div>
                        </div>
                    </div><!--end col-->


                    <div class="col-lg-8 col-12">

                        <div class="border-bottom pb-4">
                            
                            <h5><?= $user[0]['fullname'];?></h5>

                            <div class="col-md-7 text-md-left text-center mt-4 mt-sm-0">
                                
                            </div>
                            <p class="text-muted mb-0"><?php if($user[0]['description']!="") { echo ($user[0]['description']); } 
                                else {
                                    echo ("Mau cerita apa nih..");
                                }
                            ?></p>
                        </div>

                        
                        <div class="border-bottom pb-4">
                            <div class="row">
                                <div class="col-md-6 mt-4">
                                    <h5>Data Pribadi :</h5>
                                    <div class="mt-4">
                                        <div class="media align-items-center">
                                            <i data-feather="phone" class="fea icon-ex-md text-muted mr-3"></i>
                                            <div class="media-body">
                                                <h6 class="text-primary mb-0">Kontak :</h6>
                                                <a href="javascript:void(0)" class="text-muted"><?= $user[0]['contact'];?></a>
                                            </div>
                                        </div>
                                        <div class="media align-items-center mt-3">
                                            <i data-feather="bookmark" class="fea icon-ex-md text-muted mr-3"></i>
                                            <div class="media-body">
                                                <h6 class="text-primary mb-0">Kontak Emergency di Jepang :</h6>
                                                <a href="javascript:void(0)" class="text-muted"><?= $user[0]['emergency_jp'];?></a>
                                            </div>
                                        </div>
                                        <div class="media align-items-center mt-3">
                                            <i data-feather="italic" class="fea icon-ex-md text-muted mr-3"></i>
                                            <div class="media-body">
                                                <h6 class="text-primary mb-0">Kontak Emergency di Indonesia :</h6>
                                                <a href="javascript:void(0)" class="text-muted"><?= $user[0]['emergency_id'];?></a>
                                            </div>
                                        </div>
                                        <div class="media align-items-center mt-3">
                                            <i data-feather="globe" class="fea icon-ex-md text-muted mr-3"></i>
                                            <div class="media-body">
                                                <h6 class="text-primary mb-0">Alamat di Jepang :</h6>
                                                <a href="javascript:void(0)" class="text-muted"><?= $user[0]['address_jp'];?></a>
                                            </div>
                                        </div>
                                        <div class="media align-items-center mt-3">
                                            <i data-feather="globe" class="fea icon-ex-md text-muted mr-3"></i>
                                            <div class="media-body">
                                                <h6 class="text-primary mb-0">Alamat di Indonesia :</h6>
                                                <a href="javascript:void(0)" class="text-muted"><?= $user[0]['address_id'];?></a>
                                            </div>
                                        </div>
                                        <div class="media align-items-center mt-3">
                                            <i data-feather="gift" class="fea icon-ex-md text-muted mr-3"></i>
                                            <div class="media-body">
                                                <h6 class="text-primary mb-0">Birthdate :</h6>
                                                <p class="text-muted mb-0"><?= $user[0]['birthdate'];?></p>
                                            </div>
                                        </div><!-- 
                                        <div class="media align-items-center mt-3">
                                            <i data-feather="map-pin" class="fea icon-ex-md text-muted mr-3"></i>
                                            <div class="media-body">
                                                <h6 class="text-primary mb-0">Location :</h6>
                                                <a href="javascript:void(0)" class="text-muted">Beijing, China</a>
                                            </div>
                                        </div> -->
                                        
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6 mt-4 pt-2 pt-sm-0">
                                    <h5>Afiliasi :</h5>

                                    <div class="media key-feature align-items-center p-3 rounded shadow mt-4">
                                        <img src="<?php echo base_url('templates/landrick/images/job/Circleci.svg')?>" class="avatar avatar-ex-sm" alt="">
                                        <div class="media-body content ml-3">
                                            <h4 class="title mb-0">Korda</h4>
                                            <p class="text-muted mb-0"><?= $afiliasi[0]['korda_name'];?></p>
                                            <!-- <p class="text-muted mb-0"><a href="javascript:void(0)" class="text-primary">CircleCi</a> @London, UK</p>     -->
                                        </div>
                                    </div>

                                    <div class="media key-feature align-items-center p-3 rounded shadow mt-4">
                                        <img src="<?php echo base_url('templates/landrick/images/job/Codepen.svg')?>" class="avatar avatar-ex-sm" alt="">
                                        <div class="media-body content ml-3">
                                            <h4 class="title mb-0">Komsat</h4>
                                            <p class="text-muted mb-0"><?= $afiliasi[0]['komsat_name'];?></p>
                                            <!-- <p class="text-muted mb-0"><a href="javascript:void(0)" class="text-primary">Codepen</a> @Washington D.C, USA</p>     -->
                                        </div>
                                    </div>

                                    <div class="media key-feature align-items-center p-3 rounded shadow mt-4">
                                        <img src="<?php echo base_url('templates/landrick/images/job/Gitlab.svg')?>" class="avatar avatar-ex-sm" alt="">
                                        <div class="media-body content ml-3">
                                            <h4 class="title mb-0"><?= $afiliasi[0]['school_name'];?></h4>
                                            <p class="text-muted mb-0">Jenjang Pendidikan : <?= $afiliasi[0]['degree'];?></p>
                                            <p class="text-muted mb-0">Fakultas : <?= $afiliasi[0]['faculty'];?></p>
                                            <p class="text-muted mb-0">Jurusan : <?= $afiliasi[0]['department'];?></p>
                                            <p class="text-muted mb-0">Laboratory : <?= $afiliasi[0]['laboratory'];?></p>
                                            <!-- <p class="text-muted mb-0"><a href="javascript:void(0)" class="text-primary">Gitlab</a> @Perth, Australia</p>     -->
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>

                        <h5 class="mt-4 mb-0">Posts & News :</h5>
                        <div class="row">
                            <div class="col-md-6 mt-4 pt-2">
                                <div class="card blog rounded border-0 shadow">
                                    <div class="position-relative">
                                        <img src="<?php echo base_url('templates/landrick/images/blog/01.jpg')?>" class="card-img-top rounded-top" alt="...">
                                    <div class="overlay rounded-top bg-dark"></div>
                                    </div>
                                    <div class="card-body content">
                                        <h5><a href="javascript:void(0)" class="card-title title text-dark">Design your apps in your own way</a></h5>
                                        <div class="post-meta d-flex justify-content-between mt-3">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                            </ul>
                                            <a href="page-blog-detail.html" class="text-muted readmore">Read More <i class="mdi mdi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="author">
                                        <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                                        <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                                    </div>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-md-6 mt-4 pt-2">
                                <div class="card blog rounded border-0 shadow">
                                    <div class="position-relative">
                                        <img src="<?php echo base_url('templates/landrick/images/blog/02.jpg')?>" class="card-img-top rounded-top" alt="...">
                                    <div class="overlay rounded-top bg-dark"></div>
                                    </div>
                                    <div class="card-body content">
                                        <h5><a href="javascript:void(0)" class="card-title title text-dark">How apps is changing the IT world</a></h5>
                                        <div class="post-meta d-flex justify-content-between mt-3">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                            </ul>
                                            <a href="page-blog-detail.html" class="text-muted readmore">Read More <i class="mdi mdi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="author">
                                        <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                                        <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-12 mt-4 pt-2">
                                <a href="page-blog-grid.html" class="btn btn-primary">See More <i class="mdi mdi-chevron-right"></i></a>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Profile End -->

        