

<!-- Begin Page Content -->
<div class="container-fluid">
            <!-- Page Heading -->
            <h5 class="h3 mb-4 text-gray-800"><?= $title;?></h5>
            <div class="card shadow mb-4">
                <div class="card-body">
                    
                <div class="row">
                    
                <div class="col-lg-8">
                    <?= $this->session->flashdata('message');?>
                    
                    <?=form_open_multipart('admin/proses_add_testimoni', 'id="add_testimoni"') ?>
                        <div class="form-group row">
                            <label for="url" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" >
                                <?= form_error('name',' <small class="text-danger pl-3">','</small>');?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="url" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" >
                                <?= form_error('email',' <small class="text-danger pl-3">','</small>');?>
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <div class="col-sm-2">
                                Keterangan
                            </div>
                            <div class="col-sm-10">
                                    <textarea class="form-control" style="height:300px" name="description">
                                    </textarea>
                                    <?= form_error('description',' <small class="text-danger pl-3">','</small>');?>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                        <div class="col-sm-2">
                            Masukan Foto
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input"  name="foto" id="foto" />
                                <label class="custom-file-label" for="foto">Pilih Gambar</label>
                            </div>
                        </div>
                        </div>
                        <div class="form-group row mt-3">
                            <div class="col-sm-9 text-danger">
                                Ukuran foto persegi atau 4x4 <span>*</span>
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
     
    

 