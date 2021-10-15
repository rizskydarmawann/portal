
<!-- Begin Page Content -->
<div class="container-fluid">
            <!-- Page Heading -->
            <h5 class="h3 mb-4 text-gray-800"><?=$title;?></h5>
            <div class="card shadow mb-4">
                <div class="card-body">
                <div class=" pb-3 d-flex flex-row-reverse">
                    <a href=" <?php echo base_url('admin/add_testimoni'); ?>" class=" btn btn-primary">tambah</a>
                </div>
                <?= $this->session->flashdata('message');?>
                    <table class="table table-striped table-bordered table-sm"  width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php 
                        $no=1;
                        $jumlah = count($testimoni);
                        for($i=0;$i<$jumlah;$i++){
                        ?>
                            <tr>
                                <td> <?= $no?></td>
                                <td><?= $testimoni[$i]['name']?></td>
                                <td><?=$testimoni[$i]['email']?></td> 
                                <td><?=$testimoni[$i]['description']?></td> 
                                <td>                             
                                    <a href="<?= base_url('admin/delete_testimoni/'.$testimoni[$i]['id']); ?>" type="button"
                                        class="badge badge-success" onclick="return confirm('Yakin Mau Hapus ??')">Delete</a>
                                </td>
                            </tr>
                        <?php $no++; } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
