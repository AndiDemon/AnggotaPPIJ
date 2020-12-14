<!--  Traffic  -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Edit Komsat</strong>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                            <h3 class="text-center">Update Data Komsat</h3>
                                        </div>
                                        <hr>
                                    
                                    <form action="<?= base_url('komsat/update');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <!-- if the variable is not empty, fill it with the previous data -->
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Komsat ID</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="komsat_id" placeholder="Input komsat name" class="form-control" required="required" value="<?php echo $komsat['komsat_id'];?>"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Korda Name</label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="korda_id" class="form-control" required="required">
                                                    <option value="">Select Korda</option>
                                                    <?php foreach($korda as $key => $value){
                                                        if ($value['korda_id']==$komsat['korda_id']){?>
                                                            <option value="<?php echo $value['korda_id'];?>" selected>
                                                            <?php echo $value['korda_name'];?>
                                                        </option>
                                                        <?php } else{ ?>
                                                        <option value="<?php echo $value['korda_id'];?>">
                                                            <?php echo $value['korda_name'];?>
                                                        </option>
                                                        <?php }?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Komsat Name</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="komsat_name" placeholder="Input komsat name" class="form-control" required="required" value="<?php echo $komsat['komsat_name'];?>"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Description</label></div>
                                            <div class="col-12 col-md-9">
                                                <textarea id="text-input" name="description" placeholder="Description for this Komsat" class="form-control"><?php echo $komsat['description'];?></textarea>
                                            </div>
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