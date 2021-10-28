
<!-- Begin Page Content -->
<div class="container-fluid">
            <!-- Page Heading -->
            <h5 class="h3 mb-4 text-gray-800"><?=$title;?></h5>
            <div class="card shadow mb-4">
                <div class="card-body">
                
                <?= $this->session->flashdata('message');?>
                                    <form method="POST" action="<?= base_url('admin/save_profile')?>" enctype="multipart/form-data">
                                            <br>
                                         
                                            <br>
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" name="username" value="<?= $user[0]['username'];?>"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="text" class="form-control" name="password" value="<?= $user[0]['password'];?>"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Panjang</label>
                                                <input type="text" class="form-control" name="nama_panjang" value="<?= $user[0]['nama_panjang'];?>"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Foto</label>
                                                <input type="file" class="form-control" name="foto" required/>
                                            </div>
                                            <div class="row col-md-6">
                                               
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                            <br>
                                            </form>


                </div>
            </div>
        </div>
