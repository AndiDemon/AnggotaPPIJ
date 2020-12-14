<!--  Traffic  -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Sekolah</strong>
                                <!-- <input type="button" class="btn btn-primary btn-sm" onclick="location.href='<?= base_url()?>';" value="Add User"> -->
                                <button onclick="window.location.href='<?= base_url() ?>/school/create'" type="button" class="btn btn-primary">Add Sekolah</button>
                            </div>
                            <div class="card-body"> 
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Sekolah</th>
                                            <th>Description</th>
                                            <th>Nama Komsat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach($school as $key => $value){?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value['school_name'];?></td>
                                            <td><?= $value['description'];?></td>
                                            <td><?= $value['komsat_name'];?></td>
                                            <td> 
                                                <button onclick="window.location.href='<?= base_url('school/detail/'.$value['korda_id']);?>'" type="button" class="btn btn-warning btn-sm"><i class="fa fa-magic"></i>&nbsp; Detail</button>
                                                <button onclick="window.location.href='<?= base_url('school/edit/'.$value['school_id']);?>'" type="button" class="btn btn-success btn-sm"><i class="fa fa-magic"></i>&nbsp; Update</button>
                                                <a type="button" href="<?= base_url('school/delete/'.$value['school_id']);?>" class="btn btn-sm" onclick=   "myFunction()"><i class="fa fa-rss"></i>&nbsp;Delete</a>
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