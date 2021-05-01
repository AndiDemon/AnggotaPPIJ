<!--  Traffic  -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Detail Item</strong>
                            </div>
                            <div class="card-body">
                                    <form action="<?= base_url('item');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <!-- if the variable is not empty, fill it with the previous data -->
                                        
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Item Name</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="item_name" class="form-control" value="<?= $itemDetail[0]["item_name"]; ?>" disabled="disabled"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Quantity</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="account_name" class="form-control" value="<?= $itemDetail[0]["item_qty"]; ?>" disabled="disabled"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Category</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="account_name" placeholder="Input your username" class="form-control" required="required" value="<?= $itemDetail[0]["category"]; ?>" disabled="disabled"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Available</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="account_name" placeholder="Input your username" class="form-control" required="required" value="<?= $itemDetail[0]["available_date"]; ?>" disabled="disabled"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Expired</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="account_name" placeholder="Input your username" class="form-control" required="required" value="<?= $itemDetail[0]["expired_date"]; ?>" disabled="disabled"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Item Details</label></div>
                                            <div class="col-12 col-md-9"><textarea name="address" id="textarea-input" rows="5" placeholder="Input your address" class="form-control" disabled="disabled"><?= $itemDetail[0]["item_detail"]; ?></textarea></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Owner</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="account_name" placeholder="Input your username" class="form-control" required="required" value="<?= $itemDetail[0]["account_name"]; ?>" disabled="disabled"></div>
                                        </div>
                                        <!-- this is for the photos -->
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Photos</label></div>
                                            <div class="row">
                                                <div class="col">
                                                    <section class="card">
                                                        <div class="card-body text-secondary">.col</div>
                                                    </section>
                                                </div>
                                                <div class="col">
                                                    <section class="card">
                                                        <div class="card-body text-secondary">.col</div>
                                                    </section>
                                                </div>
                                                <div class="col">
                                                    <section class="card">
                                                        <div class="card-body text-secondary">.col</div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Back
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