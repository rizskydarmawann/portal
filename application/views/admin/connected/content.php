
<!-- Begin Page Content -->
<div class="container-fluid">
            <!-- Page Heading -->
            <h5 class="h3 mb-4 text-gray-800"><?=$title;?></h5>
            <div class="card shadow mb-4">
                <div class="card-body">
                <?= $this->session->flashdata('message');?>
                    <table class="table table-striped table-bordered table-sm"  width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Link</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php 
                      
                        $jumlah = count($connected);
                        for($i=0;$i<$jumlah;$i++){
                        ?>
                            <tr>
                                <td> <?= $connected[$i]['id']?></td>
                                <td ><?= $connected[$i]['name']?></td>
                                <td> <a href="<?= $connected[$i]['link']?>" target="_blank"><?= substr($connected[$i]['link'],0,40)?> ... </a></td>
                                <td>
                                <a href="<?= base_url('admin/edit_connected/'.$connected[$i]['id']); ?>" type="button"
                                        class="badge badge-warning">Edit</a>                             
                                </td>
                            </tr>
                        <?php  } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
