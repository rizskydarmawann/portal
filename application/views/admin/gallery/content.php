
<!-- Begin Page Content -->
<div class="container-fluid">
            <!-- Page Heading -->
            <h5 class="h3 mb-4 text-gray-800"><?=$title;?></h5>
            <div class="card shadow mb-4">
                <div class="card-body">
                <div class=" pb-3 d-flex flex-row-reverse">
                    <a href=" <?php echo base_url('admin/add_gallery'); ?>" class=" btn btn-primary">tambah</a>
                </div>
                <?= $this->session->flashdata('message');?>
                    <table class="table table-striped table-bordered table-sm"  width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>title</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php 
                        $jumlah = count($gallery);
                        for($i=0;$i<$jumlah;$i++){
                        ?>
                            <tr>
                                <td> <?= $gallery[$i]['id'] ?></td>
                                <td><?= $gallery[$i]['title']?></td>
                                <td><img src="<?= $gallery[$i]['foto']?>" class="img-fluid img-thumbnai" width="40%" ></td>
                                <td  width="5%">                             
                                    <a href="<?= base_url('admin/edit_gallery/'.$gallery[$i]['id']); ?>" type="button"
                                        class="badge badge-success">Edit</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
