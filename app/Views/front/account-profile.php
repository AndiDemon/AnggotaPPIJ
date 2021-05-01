<!-- Hero Start -->
        <section class="bg-profile d-table w-100 bg-primary" style="background: url('<?php echo base_url('templates/landrick/images/account/bg.png')?>') center center;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card public-profile border-0 rounded shadow" style="z-index: 1;">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-2 col-md-3 text-md-left text-center">
                                        <img src="<?php echo base_url('templates/landrick/avatar/default.png')?>" class="avatar avatar-large rounded-circle shadow d-block mx-auto" alt="">
                                    </div><!--end col-->
        
                                    <div class="col-lg-10 col-md-9">
                                        <div class="row align-items-end">
                                            <div class="col-md-7 text-md-left text-center mt-4 mt-sm-0">
                                                <h3 class="title mb-0"><?= $user[0]['account_name'];?></h3>
                                                <small class="text-muted h6 mr-2">
                                                    <?php if (session()->get('user_level_id')==5)
                                                                { echo ("Student/Member"); }
                                                          else if (session()->get('user_level_id')==6) 
                                                                { echo ("Alumni");}?>
                                                        
                                                    </small>
                                                <ul class="list-inline mb-0 mt-3">
                                                    <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted" title="Instagram"><i data-feather="mail" class="fea icon-sm mr-2"></i><?= $user[0]['email'];?></a></li>

                                                    <?php if($user[0]['fullname']==""){?>
                                                        <li class="badge badge-pill badge-outline-warning"><a href="javascript:void(0)" data-toggle="modal" data-target="#edit-data" class="text-muted" title="Lengkapi Data"><i data-feather="file-text" class="fea icon-sm mr-2"></i>Datamu belum lengkap loh, Lengkapi Yuk!</a></li>
                                                    <?php } ?>
                                                </ul>
                                            </div><!--end col-->
                                            <div class="col-md-5 text-md-right text-center">
                                                <ul class="list-unstyled social-icon social mb-0 mt-4">
                                                    <!-- <li class="list-inline-item"><a href="javascript:void(0)" class="rounded" data-toggle="tooltip" data-placement="bottom" title="Add Friend"><i data-feather="user-plus" class="fea icon-sm fea-social"></i></a></li> -->
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded" data-toggle="tooltip" data-placement="bottom" title="Messages"><i data-feather="message-circle" class="fea icon-sm fea-social"></i></a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded" data-toggle="tooltip" data-placement="bottom" title="Notifications"><i data-feather="bell" class="fea icon-sm fea-social"></i></a></li>
                                                    <li class="list-inline-item"><a href="account-setting.html" class="rounded" data-toggle="modal" data-target="#edit-data" data-placement="bottom" title="Settings"><i data-feather="tool" class="fea icon-sm fea-social"></i></a></li>
                                                </ul><!--end icon-->
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--ed container-->
        </section><!--end section-->
        <!-- Hero End -->
        <!-- Edit Data Modal Form -->
            <div class="modal fade" id="edit-data" tabindex="-1" role="dialog" aria-labelledby="login-title" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content rounded shadow-lg border-0 overflow-hidden">
                        <div class="modal-body p-0">
                            <div class="container-fluid px-0">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-lg-6 col-md-7">
                                        <img src="<?php echo base_url('templates/landrick/avatar/default.png')?>" class="img-fluid" alt="">
                                        
                                    </div><!--end col-->

                                    <div class="col-lg-6 col-md-7">
                                        <form class="login-form p-4" action="<?= base_url('account/updateMember'); ?>" method="POST">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Nama Lengkap <span class="text-danger">*</span></label>
                                                        <div class="position-relative">
                                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                                            <input type="text" class="form-control pl-5" placeholder="Nama Lengkap" name="fullname" required="" value="<?= $user[0]['fullname'];?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Email <span class="text-danger">*</span></label>
                                                        <div class="position-relative">
                                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                                            <input type="email" class="form-control pl-5" placeholder="Email" name="email" required="" value="<?= $user[0]['email'];?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Jenis Kelamin <span class="text-danger">*</span></label>
                                                        <div class="position-relative">
                                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                                            <select class="form-control pl-5">
                                                                <optgroup>
                                                                    <option value="M">Laki-laki</option>
                                                                    <option value="F">Perempuan</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Tempat Lahir </label>
                                                        <div class="position-relative">
                                                            <i data-feather="phone" class="fea icon-sm icons"></i>
                                                            <input type="text" class="form-control pl-5" placeholder="Tempat Lahir Lahir" name="place_of_birth" value="<?= $user[0]['place_of_birth'];?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Birthdate</label>
                                                        <div class="position-relative">
                                                            <i data-feather="phone" class="fea icon-sm icons"></i>
                                                            <input type="date" class="form-control pl-5" placeholder="Tanggal Lahir" name="birthdate" value="<?= $user[0]['contact'];?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Contact</label>
                                                        <div class="position-relative">
                                                            <i data-feather="phone" class="fea icon-sm icons"></i>
                                                            <input type="text" class="form-control pl-5" placeholder="Contact" name="contact" value="<?= $user[0]['contact'];?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- alamat -->
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Prefecture Saat Ini <span class="text-danger">*</span></label>
                                                        <div class="position-relative">
                                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                                            <select class="form-control pl-5" id="prefecture" name="prefecture">
                                                                <optgroup>
                                                                    <!-- foreach prefecture di Jepang -->
                                                                    <option value="">Pilih Prefecture</option>
                                                                    <?php foreach($prefecture as $row){?>
                                                                        <option value="<?php echo $row['province_id'];?>"><?php echo $row['province']?></option>
                                                                    <?php } ?>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- end alamat -->
                                                <!-- 
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Emergency Contact di Jepang</label>
                                                        <div class="position-relative">
                                                            <i data-feather="phone" class="fea icon-sm icons"></i>
                                                            <input type="text" class="form-control pl-5" placeholder="Emergency Contact di Jepang" name="emergency_jp" value="<?= $user[0]['emergency_jp'];?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Emergency Contact di Indonesia</label>
                                                        <div class="position-relative">
                                                            <i data-feather="phone" class="fea icon-sm icons"></i>
                                                            <input type="text" class="form-control pl-5" placeholder="Emergency Contact di Indonesia" name="emergency_id" value="<?= $user[0]['emergency_id'];?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Alamat di Jepang</label>
                                                        <div class="position-relative">
                                                            <i data-feather="map" class="fea icon-sm icons"></i>
                                                            <input type="text" class="form-control pl-5" placeholder="Alamat di Jepang" name="address_jp" value="<?= $user[0]['address_jp'];?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Alamat di Indonesia</label>
                                                        <div class="position-relative">
                                                            <i data-feather="map" class="fea icon-sm icons"></i>
                                                            <input type="text" class="form-control pl-5" placeholder="Alamat di Indonesia" name="address_id" value="<?= $user[0]['address_id'];?>">
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Avatar</label>
                                                        <div class="position-relative">
                                                            <i data-feather="camera" class="fea icon-sm icons"></i>
                                                            <input type="file" class="form-control pl-5" placeholder="avatar" name="avatar">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Something to write?</label>
                                                        <div class="position-relative">
                                                            <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                            <input type="text" class="form-control pl-5" placeholder="Apa yang kamu pikirkan?" name="description" value="<?= $user[0]['description'];?>">
                                                            <input type="hidden" class="form-control pl-5"name="member_id" value="<?= $user[0]['member_id'];?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Detail PPIJ -->
                                                <label>Afiliasi <span class="text-danger">*</span></label>
                                                    
                                                <!-- afiliasi PPIJ -->
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Korda <span class="text-danger">*</span></label>
                                                        <div class="position-relative">
                                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                                            <select class="form-control pl-5" id="korda" name="korda">
                                                                <!-- foreach prefecture di Jepang -->
                                                                <option value="">Pilih Korda</option>
                                                                <?php foreach($korda as $row){?>
                                                                    <option value="<?php echo $row['korda_id'];?>"><?php echo $row['korda_name']?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Komsat <span class="text-danger">*</span></label>
                                                        <div class="position-relative">
                                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                                            <select class="form-control pl-5" name="komsat" id="komsat">
                                                                <!-- foreach prefecture di Jepang -->
                                                                <option value="">Pilih Komsat</option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Sekolah <span class="text-danger">*</span></label>
                                                        <div class="position-relative">
                                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                                            <select class="form-control pl-5" name="school" id="school">
                                                                <optgroup>
                                                                    <!-- foreach prefecture di Jepang -->
                                                                    <option value="">Pilih Sekolah</option>
                                                                    
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--end col-->
        
                                                <!-- <div class="col-lg-12">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="form-group">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1">Remember me</label>
                                                            </div>
                                                        </div>
                                                        <p class="forgot-pass mb-0"><a href="auth-re-password.html" class="text-dark font-weight-bold">Forgot password ?</a></p>
                                                    </div>
                                                </div> end col-->
        
                                                <div class="col-lg-12 mb-0">
                                                    <button class="btn btn-primary btn-block">Submit</button>
                                                </div><!--end col-->
        
                                                <!-- <div class="col-12 text-center">
                                                    <p class="mb-0 mt-3"><small class="text-dark mr-2">Don't have an account ?</small> <a href="auth-signup.html" class="text-dark font-weight-bold">Sign Up</a></p>
                                                </div> --><!--end col-->
                                            </div><!--end row-->
                                        </form>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end container-->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Login Form End