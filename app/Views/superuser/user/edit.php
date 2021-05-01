<!--  Traffic  -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Edit User</strong>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                            <h3 class="text-center">Update User Detail</h3>
                                        </div>
                                        <hr>
                                    <?php
                                        if ($send["warning"]!=null){?>
                                            <div class="alert alert-danger" role="alert">
                                                <?php echo $send["warning"]; ?>
                                            </div>
                                    <?php }
                                    ?>
                                    <form action="<?= base_url('user/update/'.$user['account_name']);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="row form-group">
                                            <div class="col col-md-3"></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="user_id" placeholder="Input your username" class="form-control" required="required" value="<?= $user['user_id']; ?>" hidden="hidden"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="account_name" placeholder="Input your username" class="form-control" required="required" value="<?= $user['account_name']; ?>"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">E-Mail</label></div>
                                            <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" placeholder="Enter Email" class="form-control" value="<?= $user['email']; ?>"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
                                            <div class="col-12 col-md-9"><input type="password" id="password-input" name="password" placeholder="Password" class="form-control" value=""><small class="help-block form-text">Please enter a complex password</small></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Re-enter Password</label></div>
                                            <div class="col-12 col-md-9"><input type="password" id="password-input" name="repassword" placeholder="Re-enter Password" class="form-control" value=""></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="contact" placeholder="Input you contact" class="form-control" value="<?= $user["contact"]; ?>"><small class="help-block form-text">Example : Phone number, line id, instagram, facebook</small></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Address</label></div>
                                            <div class="col-12 col-md-9"><textarea name="address" id="textarea-input" rows="5" placeholder="Input your address" class="form-control"><?= $user["address"]; ?></textarea></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label">Level User</label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="level_user" id="select" class="form-control"required="required">
                                                    <?php foreach($user_level as $row){
                                                            if($row['user_level_id']==$user["user_level_id"]){
                                                        ?>
                                                        <option value="<?=$row['user_level_id'];?>" selected="selected"><?=$row['user_level'];?></option>
                                                        <?php }else{?>
                                                            <option value="<?=$row['user_level_id'];?>"><?=$row['user_level'];?></option>
                                                        <?php }?>
                                                    <?php }?>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
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