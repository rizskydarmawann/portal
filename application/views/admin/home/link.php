

<!-- Begin Page Content -->
<div class="container-fluid">
            <!-- Page Heading -->
            <h5 class="h3 mb-4 text-gray-800"><?=$title;?></h5>
            <div class="card shadow mb-4">
                <div class="card-body">
                <div class=" pb-3 d-flex flex-row-reverse">
  <a href=" <?php echo base_url('admin/tambah_link'); ?>" class=" btn btn-primary">tambah</a>
</div>
                <?= $this->session->flashdata('message');?>
                    <table class="table table-striped table-bordered table-sm"  width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
$no = 1;
foreach ($link as $row):

?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td width="30%"><?php echo $row['url']; ?></td>
                                <td><img src="<?php echo $row['foto_link']; ?>" class="img-fluid img-thumbnai" width="40%" ></td>
                                <td  width="5%">                                   
                                    <a href=" <?php echo base_url('admin/edit_link/' . $row['id_link']); ?>" type="button"
                                        class="badge badge-success">Edit</a>
                                </td>
                            </tr>
                            <?php
endforeach
?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

<script>
            //untuk mengubah nama file image
$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});
</script>


