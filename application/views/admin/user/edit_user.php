<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h3 mb-4 text-gray-800"><?= $title;?></h5>
    <div class="card shadow mb-4">
        <div class="card-body">

            <div class="row">

                <div class="col-lg-12">
                    <?= $this->session->flashdata('message');?>
                    <form method="POST" action="<?= base_url('admin/update_user')?>" enctype="multipart/form-data">
                    <input type="hidden" name="id_user" value="<?= $detail[0]['id_user'] ?>">
                        <br>
                        <br>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username"
                                value="<?= $detail[0]['username']?>" />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" name="password"
                                value="<?= $detail[0]['password']?>" />
                        </div>
                        <div class="form-group">
                            <label>Nama Panjang</label>
                            <input type="text" class="form-control" name="nama_panjang"
                                value="<?= $detail[0]['nama_panjang']?>" />
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <img src="<?= $detail[0]['foto'] ?>" width="100">
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="foto" />
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <select class="form-control" name="status">
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                        <div class="row col-md-6">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                        <br>
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>