
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
                                <th width="10%">ID</th>
                                <th width="10%">Name</th>
                                <th  width="70%">Link</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php 
                      
                        $jumlah = count($location);
                        for($i=0;$i<$jumlah;$i++){
                           
                        ?>
                            <tr>
                                <td width="10%"> <?= $location[$i]['id']?></td>
                                <td width="10%"><?= $location[$i]['name']?></td>
                                <td width="700%"><?= $location[$i]['link']?></td>
                                <td width="10%">
                                <a href="<?= base_url('admin/edit_location/'.$location[$i]['id']); ?>" type="button"
                                        class="badge badge-warning">Edit</a>                             
                                </td>
                            </tr>
                        <?php  } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
