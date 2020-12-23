<!-- Start Hero -->
        <section class="bg-half-170 bg-light d-table w-100" style="background: url('<?php echo base_url('templates/landrick/images/real/build.png')?>') bottom no-repeat;">
            <div class="container">
                <div class="row align-items-center mt-5">
                    <div class="col-lg-7 col-md-6">
                        <div class="title-heading">
                            <span class="badge badge-pill badge-soft-success">PPIJ Solid!</span>
                            <h4 class="heading my-3">Aplikasi <br>Keanggotaan PPI Jepang</h4>
                            <p class="para-desc text-muted">Dengan mendaftarkan dirimu di aplikasi keanggotaan PPI Jepang, kamu bisa mendapatkan berbagai keuntungan dan kemudahannya.</p>
                            
                            <div class="mt-4 pt-2">
                                <a href="javascript:void(0)" class="btn btn-primary m-1">Explore Benefit</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="card shadow rounded border-0 ml-lg-4">
                            <div class="card-body">
                                <h5 class="card-title text-center">Daftarkan Dirimu Sebagai Anggota PPI Jepang</h5>

                                <form class="login-form mt-4" action="<?php echo base_url('login/signup'); ?>" method="POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">                                               
                                                <label>First name <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input type="text" class="form-control pl-5" placeholder="First Name" name="s" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Your Email <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input type="email" class="form-control pl-5" placeholder="Email" name="email" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Password <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i data-feather="key" class="fea icon-sm icons"></i>
                                                    <input type="password" class="form-control pl-5" placeholder="Password" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-block btn-primary">Register</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--end section-->
        <!-- End Hero -->