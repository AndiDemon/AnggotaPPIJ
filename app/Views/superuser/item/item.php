<!--  Traffic  -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Item</strong>
                                <!-- <input type="button" class="btn btn-primary btn-sm" onclick="location.href='<?= base_url()?>';" value="Add User"> -->
                                <button onclick="window.location.href='<?= base_url() ?>/item/create'" type="button" class="btn btn-primary">Add Item</button>
                            </div>
                            <div class="card-body"> 
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Item name</th>
                                            <th>Qty</th>
                                            <th>Category</th>
                                            <th>Available date</th>
                                            <th>Expired date</th>
                                            <th>Owner</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach($item as $key => $value){?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value['item_name'];?></td>
                                            <td><?= $value['item_qty'];?></td>
                                            <td><?= $value['category'];?></td>
                                            <td><?= $value['available_date'];?></td>
                                            <td><?= $value['expired_date'];?></td>
                                            <td><?= $value['account_name'];?></td>
                                            <td> 
                                                <button onclick="window.location.href='<?= base_url('item/detail/'.$value['item_id']);?>'" type="button" class="btn btn-info btn-sm mb-1">Detail</button>
                                                <button onclick="window.location.href='<?= base_url('item/edit/'.$value['item_id']);?>'" type="button" class="btn btn-success btn-sm"><i class="fa fa-magic"></i>&nbsp; Update</button>
                                                <a type="button" href="<?= base_url('item/delete/'.$value['item_id']);?>" class="btn btn-sm" onclick="myFunction()"><i class="fa fa-rss"></i>&nbsp;Delete</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  /Traffic -->
                <script type="text/javascript">
                    function myFunction(){
                        confirm("Are you sure?");
                    }
                </script>
                <div class="clearfix"></div>