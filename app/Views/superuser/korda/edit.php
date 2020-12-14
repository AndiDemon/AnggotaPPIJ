<!--  Traffic  -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Edit User Level</strong>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                        </div>
                                        <hr>
                                    
                                    <form action="<?= base_url('korda/update');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <!-- if the variable is not empty, fill it with the previous data -->
                                        
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Korda ID</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="korda_id" class="form-control" required="required" value="<?= $korda['korda_id']; ?>"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Korda Name</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="korda_name" class="form-control" required="required" value="<?= $korda['korda_name']; ?>"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Description</label></div>
                                            <div class="col-12 col-md-9">
                                                <textarea id="text-input" name="description" placeholder="Description for this Korda" class="form-control"><?= $korda['description']; ?></textarea>
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