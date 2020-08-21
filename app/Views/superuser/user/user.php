<!--  Traffic  -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data User</strong>
                                <!-- <input type="button" class="btn btn-primary btn-sm" onclick="location.href='<?= base_url()?>';" value="Add User"> -->
                                <button onclick="window.location.href='<?= base_url() ?>/user/create'" type="button" class="btn btn-primary">Add User</button>
                            </div>
                            <div class="card-body"> 
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>E-Mail</th>
                                            <th>Contact</th>
                                            <th>Address</th>
                                            <th>Level</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach($user as $key => $value){?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value['account_name'];?></td>
                                            <td><?= $value['email'];?></td>
                                            <td><?= $value['contact'];?></td>
                                            <td><?= $value['address'];?></td>
                                            <td><?= $value['user_level'];?></td>
                                            <td> 
                                                <button onclick="window.location.href='<?= base_url('user/edit/'.$value['account_name']);?>'" type="button" class="btn btn-success btn-sm"><i class="fa fa-magic"></i>&nbsp; Update</button>
                                                <a type="button" href="<?= base_url('user/delete/'.$value['account_name']);?>" class="btn btn-sm" onclick=   "myFunction()"><i class="fa fa-rss"></i>&nbsp;Delete</a>
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