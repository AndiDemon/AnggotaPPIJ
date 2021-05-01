<!--  Traffic  -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Add Anggota</strong>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center">Account</h3>
                                </div>
                                <hr>
                                    
                                    <form action="<?= base_url('school/save');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <!-- if the variable is not empty, fill it with the previous data -->
                                        
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="school_name" placeholder="Input username" class="form-control" required="required" ></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
                                            <div class="col-12 col-md-9"><input type="password" id="text-input" name="school_name" placeholder="Input your password" class="form-control" required="required" ></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Re-enter Password</label></div>
                                            <div class="col-12 col-md-9"><input type="password" id="text-input" name="school_name" placeholder="Input your password" class="form-control" required="required" ></div>
                                        </div>

                                <div class="card-title">
                                    <h3 class="text-center">Data Diri</h3>
                                </div>
                                <hr>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Lengkap</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="school_name" placeholder="Input nama lengkap anda" class="form-control" required="required" ></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir</label></div>
                                            <div class="col-12 col-md-9"><input type="date" id="text-input" name="school_name" placeholder="Input nama lengkap anda" class="form-control" required="required" ></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Kelamin</label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="korda_id" class="form-control" required="required">
                                                        <option value="">Pilih Jenis Kelamin</option>
                                                        <option value="SMA">Laki-laki</option>
                                                        <option value="D1">Perempuan</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">E-Mail</label></div>
                                            <div class="col-12 col-md-9"><input type="email" id="text-input" name="school_name" placeholder="Input email anda" class="form-control" required="required" ></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Phone</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="school_name" placeholder="Input no. hp anda" class="form-control" required="required" ></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Emergency JP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="school_name" placeholder="Input kontak emergency di Jepang" class="form-control" required="required" ></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Emergency ID</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="school_name" placeholder="Input kontak emergency di Indonesia" class="form-control" required="required" ></div>
                                        </div>
                                        
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Prefecture JP</label></div>
                                            <div class="col-12 col-md-9"><select name="korda_id" class="form-control" required="required">
                                                    <option value="">Pilih Prefecture</option>
                                                    <option value="SMA">Hokkaido</option>
                                                    <option value="D1">Miyagi</option>
                                                    <option value="D2">Mie</option>
                                                    <option value="D3">Yamagata</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat JP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="school_name" placeholder="Input alamat anda di Jepang" class="form-control" required="required" ></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat ID</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="school_name" placeholder="Input alamat anda di Indonesia" class="form-control" required="required" ></div>
                                        </div>
                                        
                                <div class="card-title">
                                    <h3 class="text-center">Afiliasi</h3>
                                </div>
                                <hr>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Sekolah</label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="korda_id" class="form-control" required="required">
                                                    <option value="">Pilih Sekolah</option>
                                                    <?php foreach($school as $key => $value){?>
                                                    <option value="<?php echo $value['school_id'];?>"><?php echo $value['school_name'];?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Degree</label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="korda_id" class="form-control" required="required">
                                                    <option value="">Pilih Degree</option>
                                                    <option value="SMA">SMA</option>
                                                    <option value="D1">D1</option>
                                                    <option value="D2">D2</option>
                                                    <option value="D3">D3</option>
                                                    <option value="S1">S1</option>
                                                    <option value="S2">S2</option>
                                                    <option value="S3">S3</option>
                                                    <option value="ResearchStudent">Research Student</option>
                                                    <option value="SenmonGakkou">SenmonGakkou</option>
                                                    <option value="NihongoGakkou">NihongoGakkou</option>

                                                    <option value="NihongoGakkou">Post-Doctoral</option>
                                                    <option value="NihongoGakkou">Exchange Student</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Fakultas</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="school_name" placeholder="Input fakultas" class="form-control" required="required" ></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jurusan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="school_name" placeholder="Input jurusan" class="form-control" required="required" ></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Beasiswa</label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="korda_id" class="form-control" required="required">
                                                    <option value="">Pilih Beasiswa</option>
                                                    <option value="SMA">MEXT</option>
                                                    <option value="D1">INPEX</option>
                                                    <option value="D2">JASSO</option>
                                                    <option value="D3">ROTARY</option>
                                                    <option value="S1">AEON</option>
                                                    <option value="S2">MISTUI-BUSAN</option>
                                                    <option value="S3">ADB</option>
                                                    <option value="ResearchStudent">ABP</option>
                                                    <option value="SenmonGakkou">HONJOU INTL FOUNDATION</option>
                                                </select>
                                                <input type="text" id="text-input" name="school_name" placeholder="Jika tidak ada dalam opsi di atas" class="form-control" required="required" >
                                            </div>
                                            
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Specialisasi</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="school_name" placeholder="exmp : lab human interface" class="form-control" required="required" ></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Awal Study</label></div>
                                            <div class="col-12 col-md-9"><input type="date" id="text-input" name="school_name" class="form-control" required="required" ></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Akhir Study</label></div>
                                            <div class="col-12 col-md-9"><input type="date" id="text-input" name="school_name" class="form-control" required="required" ></div>
                                        </div>


                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </form>
                            </div>
                            <div class="card-footer">
                                
                            </div>
                        </div>
                    </div>


                </div>
                <!--  /Traffic -->
                <div class="clearfix"></div>