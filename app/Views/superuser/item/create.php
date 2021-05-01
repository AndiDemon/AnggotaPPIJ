<!--  Traffic  -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Add Item</strong>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center">Insert New Item</h3>
                                </div>
                                    <hr>
                                    <?php
                                        if ($send["warning"]!=null){?>
                                            <div class="alert alert-danger" role="alert">
                                                <?php echo $send["warning"]; ?>
                                            </div>
                                    <?php }
                                    ?>
                                    <!-- <form action="<?= base_url('item/save');?>" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
                                        <?php echo form_open_multipart(base_url('item/save')); ?>
                                        <!-- if the variable is not empty, fill it with the previous data -->
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Item Name</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="item_name" class="form-control" placeholder="Input item's name" value="" required="required"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Quantity</label></div>
                                            <div class="col-12 col-md-9"><input type="number" id="text-input" name="item_qty" class="form-control" placeholder="Input item's quantity" value="" required="required"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Category</label></div>
                                            <div class="col-12 col-md-9">
                                              <select data-placeholder="Choose a Category" required="required" class="standardSelect form-control" tabindex="1" name="category">
                                                <option value="" label="default"></option>
                                                <?php foreach($category as $row){ ?>
                                                    <option value="<?= $row['category_id'];?>"><?= $row['category'];?></option>
                                                <?php }?>
                                            </select></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Available</label></div>
                                            <div class="col-12 col-md-9"><input type="date" name="available_date" class="form-control" required="required"><small class="form-text text-muted">yyyy-mm-dd</small></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Expired</label></div>
                                            <div class="col-12 col-md-9"><input type="date" name="expired_date" class="form-control" required="required"><small class="form-text text-muted">yyyy-mm-dd</small></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Item Details</label></div>
                                            <div class="col-12 col-md-9"><textarea name="item_detail" id="textarea-input" rows="5" placeholder="Input item details" class="form-control" required="required"></textarea></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Owner</label></div>
                                            <div class="col-12 col-md-9">
                                                <select data-placeholder="Choose an owner" required="required" class="standardSelect form-control" tabindex="1" name="account_name">
                                                <option value="" label="default"></option>
                                                <?php foreach($account as $row){ ?>
                                                    <option value="<?=$row['account_name'];?>"><?=$row['account_name'];?></option>
                                                <?php }?>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Upload your image</label></div>
                                            <div class="col-12 col-md-9"><input type="file" id="files" name="images[]" multiple /></div>
                                        </div>
                                        <!-- insert pictures -->
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