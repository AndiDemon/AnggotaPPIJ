<!--  Traffic  -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Komsat</strong>
                                <!-- <input type="button" class="btn btn-primary btn-sm" onclick="location.href='<?= base_url()?>';" value="Add User"> -->
                                <button onclick="window.location.href='<?= base_url() ?>/komsat/create'" type="button" class="btn btn-primary">Add Komsat</button>
                            </div>
                            <div class="card-body"> 
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Komsat</th>
                                            <th>Description</th>
                                            <th>Nama Korda</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach($komsat as $key => $value){?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value['komsat_name'];?></td>
                                            <td><?= $value['description'];?></td>
                                            <td><?= $value['korda_name'];?></td>
                                            <td> 
                                                <button onclick="window.location.href='<?= base_url('komsat/detail/'.$value['korda_id']);?>'" type="button" class="btn btn-warning btn-sm"><i class="fa fa-magic"></i>&nbsp; Detail</button>
                                                <button onclick="window.location.href='<?= base_url('komsat/edit/'.$value['komsat_id']);?>'" type="button" class="btn btn-success btn-sm"><i class="fa fa-magic"></i>&nbsp; Update</button>
                                                <a type="button" href="<?= base_url('komsat/delete/'.$value['komsat_id']);?>" class="btn btn-sm" onclick=   "myFunction()"><i class="fa fa-rss"></i>&nbsp;Delete</a>
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