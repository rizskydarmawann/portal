
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
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php 
                      
                        $jumlah = count($kontak);
                        for($i=0;$i<$jumlah;$i++){
                        ?>
                            <tr>
                                <td> <?= $kontak[$i]['id']?></td>
                                <td ><?= $kontak[$i]['name']?></td>
                                <td> <?= $kontak[$i]['email']?> </td>
                                <td> <?= $kontak[$i]['subject']?> </td> 
                                <td> <?= $kontak[$i]['message']?> </td> 
                                <td >                             
                                    <a href="<?= base_url('admin/delete_kontak/'.$kontak[$i]['id']); ?>" type="button"
                                        class="badge badge-danger" onclick="return confirm('Yakin Mau Hapus data ini ??')">Delete</a>
                                </td>
                            </tr>
                        <?php  } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
