

<!-- Begin Page Content -->
<div class="container-fluid">
            <!-- Page Heading -->
            <h5 class="h3 mb-4 text-gray-800"><?= $title;?></h5>
            <div class="card shadow mb-4">
                <div class="card-body">
                    
                <div class="row">
                <div class="col-lg-6">
                    <?= $this->session->flashdata('message');?>
                    <?=form_open_multipart('admin/proses_edit_slideshows', 'id="edit_slide"') ?>
                    <input name="id_slide" type="hidden" value="<?php echo $slider[0]['id_slide']; ?>">
                        <div class="form-group row"> 
                            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $slider[0]['judul']; ?>" />
                                <?= form_error('judul',' <small class="text-danger pl-3">','</small>');?>
                            </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-sm-2">
                            Gambar
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
     
    

 