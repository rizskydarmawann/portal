
<!-- Begin Page Content -->
<div class="container-fluid">
            <!-- Page Heading -->
            <h5 class="h3 mb-4 text-gray-800"><?=$title;?></h5>
            <div class="card shadow mb-4">
                <div class="card-body">
                <div class=" pb-3 d-flex flex-row-reverse">
                    <a href=" <?php echo base_url('admin/add_news'); ?>" class=" btn btn-primary">tambah</a>
                </div>
                <?= $this->session->flashdata('message');?>
                    <table class="table table-striped table-bordered table-sm"  width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Foto</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php 
                        $no=1;
                        $jumlah = count($news);
                        for($i=0;$i<$jumlah;$i++){
                        ?>
                            <tr>
                                <td> <?= $no?></td>
                                <td width="30%"><?= $news[$i]['title']?></td>
                                <td><img src="<?= $news[$i]['foto']?>" class="img-fluid img-thumbnai" width="40%" ></td>
                                <td> <?= substr($news[$i]['description'],0,300)?>...</td> 
                                <td  width="5%">                             
                                    <a href="<?= base_url('admin/edit_news/'.$news[$i]['id_news']); ?>" type="button"
                                        class="badge badge-success">Edit</a>
                                        <a href="<?= base_url('admin/delete_news/'.$news[$i]['id_news']); ?>" type="button"
                                        class="badge badge-danger" onclick="return confirm('Yakin Mau Hapus data ini ??')">Delete</a>
                                </td>
                            </tr>
                        <?php $no++; } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
