
<!-- Begin Page Content -->
<div class="container-fluid">
            <!-- Page Heading -->
            <h5 class="h3 mb-4 text-gray-800"><?=$title;?></h5>
            <div class="card shadow mb-4">
                <div class="card-body">
                
                <?= $this->session->flashdata('message');?>
                                    <form method="POST" action="<?= base_url('admin/update_feature')?>" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $detail[0]['id']?>">
                                            <br>
                                         
                                            <br>
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name" value="<?= $detail[0]['name']?>"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Link</label>
                                                <input type="text" class="form-control" name="link" value="<?= $detail[0]['link']?>"/>
                                            </div>
                                        
                                            <div class="row col-md-6">
                                               
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                            <br>
                                            </form>


                </div>
            </div>
        </div>
