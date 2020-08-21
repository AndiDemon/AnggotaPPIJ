<!--  Traffic  -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Transaction</strong>
                                <!-- <input type="button" class="btn btn-primary btn-sm" onclick="location.href='<?= base_url()?>';" value="Add User"> -->
                                <button onclick="window.location.href='<?= base_url() ?>/transaction/create'" type="button" class="btn btn-primary">Add Transaction</button>
                            </div>
                            <div class="card-body"> 
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Owner</th>
                                            <th>Item</th>
                                            <th>Dealing date</th>
                                            <th>Taken by</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach($transaction as $key => $value){?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value['owner'];?></td>
                                            <td><?= $value['item_name'];?></td>
                                            <td><?= $value['dealing_date'];?></td>
                                            <td><?= $value['taken_by'];?></td>
                                            <td><?= $value['description'];?></td>
                                            <td> 
                                                <button onclick="window.location.href='<?= base_url('item/edit/'.$value['dealing_id']);?>'" type="button" class="btn btn-success btn-sm"><i class="fa fa-magic"></i>&nbsp; Update</button>
                                                <a type="button" href="<?= base_url('item/delete/'.$value['dealing_id']);?>" class="btn btn-sm" onclick="myFunction()"><i class="fa fa-rss"></i>&nbsp;Delete</a>
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