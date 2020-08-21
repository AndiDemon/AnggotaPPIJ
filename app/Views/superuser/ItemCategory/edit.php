<!--  Traffic  -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Add Category</strong>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                            <h3 class="text-center">Create New Category</h3>
                                        </div>
                                        <hr>
                                    <?php
                                        if ($send["warning"]!=null){?>
                                            <div class="alert alert-danger" role="alert">
                                                <?php echo $send["warning"]; ?>
                                            </div>
                                    <?php }
                                    ?>
                                    <form action="<?= base_url('itemcategory/update');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"></label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" name="category_id"  class="form-control" required="required" value="<?= $category['category_id']; ?>" hidden="hidden">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Category</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" name="category" placeholder="Input new category name" class="form-control" required="required" value="<?= $category['category']; ?>">
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