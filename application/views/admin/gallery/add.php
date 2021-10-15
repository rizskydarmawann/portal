

<!-- Begin Page Content -->
<div class="container-fluid">
            <!-- Page Heading -->
            <h5 class="h3 mb-4 text-gray-800"><?= $title;?></h5>
            <div class="card shadow mb-4">
                <div class="card-body">
                    
                <div class="row">
                    
                <div class="col-lg-8">
                    <?= $this->session->flashdata('message');?>
                    
                    <?=form_open_multipart('admin/proses_add_gallery', 'id="add_gallery"') ?>
                        <div class="form-group row">
                            <label for="url" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" >
                                <?= form_error('title',' <small class="text-danger pl-3">','</small>');?>
                            </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-sm-2">
                            Foto
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input"  name="foto" id="foto" />
                                <label class="custom-file-label" for="foto">Pilih Gambar</label>
                                
                            </div>
                        </div>
                        </div>

                        <div class="from-group">
                            <button type="submit" class="btn btn-primary">tambah</button>
                        </div>
                    </form>
                </div>
            </div>                          
                </div>
            </div>           
        </div>
     
    

 