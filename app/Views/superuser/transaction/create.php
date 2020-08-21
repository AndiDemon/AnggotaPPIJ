<!--  Traffic  -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Add Transaction</strong>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center">Insert New Transaction</h3>
                                </div>
                                    <hr>
                                    <?php
                                        if ($send["warning"]!=null){?>
                                            <div class="alert alert-danger" role="alert">
                                                <?php echo $send["warning"]; ?>
                                            </div>
                                    <?php }
                                    ?>
                                    <form action="<?= base_url('transaction/save');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <!-- if the variable is not empty, fill it with the previous data -->
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Owner</label></div>
                                            <div class="col-12 col-md-9">
                                                <select data-placeholder="Choose an owner" required="required" class="form-control" tabindex="1" id="owner" name="owner">
                                                <option value="" label="default"></option>
                                                <?php foreach($account as $row){ ?>
                                                    <option value="<?=$row['user_id'];?>"><?=$row['account_name'];?></option>
                                                <?php }?>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Item</label></div>
                                            <div class="col-12 col-md-9">
                                                <select data-placeholder="Which item?" required="required" class="form-control" tabindex="1" name="item" id="item">
                                                <option value="" label="default"></option>
                                                
                                            </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Dealing</label></div>
                                            <div class="col-12 col-md-9"><input type="date" name="available_date" class="form-control" required="required"><small class="form-text text-muted">yyyy-mm-dd</small></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Taken By</label></div>
                                            <div class="col-12 col-md-9">
                                                <select data-placeholder="Who is taking?" required="required" class="standardSelect form-control" tabindex="1" name="account_name">
                                                <option value="" label="default"></option>
                                                <?php foreach($account as $row){ ?>
                                                    <option value="<?=$row['account_name'];?>"><?=$row['account_name'];?></option>
                                                <?php }?>
                                            </select>
                                            </div>
                                        </div>


                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                                            <div class="col-12 col-md-9"><textarea name="item_detail" id="textarea-input" rows="5" placeholder="Input item details" class="form-control" required="required"></textarea></div>
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