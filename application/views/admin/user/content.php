
<!-- Begin Page Content -->
<div class="container-fluid">
            <!-- Page Heading -->
            <h5 class="h3 mb-4 text-gray-800"><?=$title;?></h5>
            <div class="card shadow mb-4">
                <div class="card-body">
                <?= $this->session->flashdata('message');?>

                <div class=" pb-3 d-flex flex-row-reverse">
                    <a href=" <?php echo base_url('admin/add_user'); ?>" class=" btn btn-primary">tambah</a>
                </div>


                    <table class="table table-striped table-bordered table-sm"  width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Nama Panjang</th>
                                <th>Foto</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php 
                      
                        $jumlah = count($user);
                        for($i=0;$i<$jumlah;$i++){
                        ?>
                            <tr>
                                <td> <?= $user[$i]['id_user']?></td>
                                <td ><?= $user[$i]['username']?></td>
                                <td> <?= $user[$i]['password']?> </td>
                                <td> <?= $user[$i]['nama_panjang']?> </td> 
                                <td><img src="<?= $user[$i]['foto']?> " width="100"></td> 
                                <td> <?= $user[$i]['status']?> </td> 
                                <td>
                                <a href="<?= base_url('admin/edit_user/'.$user[$i]['id_user']); ?>" type="button"
                                        class="badge badge-warning">Edit</a>                             
                                    
                                </td>
                            </tr>
                        <?php  } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
