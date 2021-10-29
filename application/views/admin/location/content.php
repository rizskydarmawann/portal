
<!-- Begin Page Content -->
<div class="container-fluid">
            <!-- Page Heading -->
            <h5 class="h3 mb-4 text-gray-800"><?=$title;?></h5>
            <div class="card shadow mb-4">
                <div class="card-body">
                <?= $this->session->flashdata('message');?>
                <div style="overflow-x:auto;"> 
                    <table class="table table-striped table-bordered table-sm"  width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th >ID</th>
                                <th >Name</th>
                                <th >Link</th>
                                <th >Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php 
                      
                        $jumlah = count($location);
                        for($i=0;$i<$jumlah;$i++){
                           
                        ?>
                            <tr>
                                <td > <?= $location[$i]['id']?></td>
                                <td><?= $location[$i]['name']?></td>
                                <td ><?= $location[$i]['link']?></td>
                                <td >
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
        </div>
