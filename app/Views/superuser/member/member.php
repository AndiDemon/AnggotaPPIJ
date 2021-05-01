<!--  Traffic  -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Anggota</strong>
                                <!-- <input type="button" class="btn btn-primary btn-sm" onclick="location.href='<?= base_url()?>';" value="Add User"> -->
                                <button onclick="window.location.href='<?= base_url() ?>/member/create'" type="button" class="btn btn-primary">Add Anggota</button>
                            </div>
                            <div class="card-body"> 
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Sekolah</th>
                                            <th>Komsat</th>
                                            <th>Korda</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach($member as $key => $value){?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value['fullname'];?></td>
                                            <td><?= $value['school_name'];?></td>
                                            <td><?= $value['komsat_name'];?></td>
                                            <td><?= $value['korda_name'];?></td>
                                            <td> 
                                                <button onclick="window.location.href='<?= base_url('member/jurnal/'.$value['member_id']);?>'" type="button" class="btn btn-info btn-sm"><i class="fa fa-eye"></i>&nbsp; Jurnal</button>
                                                <button onclick="window.location.href='<?= base_url('member/detail/'.$value['member_id']);?>'" type="button" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i>&nbsp; Detail</button>
                                                <button onclick="window.location.href='<?= base_url('member/edit/'.$value['member_id']);?>'" type="button" class="btn btn-success btn-sm"><i class="fa fa-magic"></i>&nbsp; Update</button>
                                                <a type="button" href="<?= base_url('member/delete/'.$value['member_id']);?>" class="btn btn-danger btn-sm" onclick=   "myFunction()"><i class="fa fa-trash-o"></i>&nbsp;Delete</a>
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