

<!-- Begin Page Content -->
<div class="container-fluid">
            <!-- Page Heading -->
            <h5 class="h3 mb-4 text-gray-800"><?= $title;?></h5>
            <div class="card shadow mb-4">
                <div class="card-body">
                    
                <div class="row">
                    
                <div class="col-lg-8">
                    <?= $this->session->flashdata('message');?>
                    
                    <?=form_open_multipart('admin/proses_edit_testimoni', 'id="edit_testimoni"') ?>
                    <input type="hidden" name="id" value="<?= $testimoni[0]['id'];?>">
                    <div class="form-group row">
                            <div class="col-sm-2">
                                Nama
                            </div>
                            <div class="col-sm-10">
                                 <input type="text" class="form-control" id="name" name="name"  value="<?= $testimoni[0]['name'];?>">
                                <?= form_error('name',' <small class="text-danger pl-3">','</small>');?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                email
                            </div>
                            <div class="col-sm-10">
                                 <input type="email" class="form-control" id="email" name="email" value="<?= $testimoni[0]['email'];?>" >
                                <?= form_error('email',' <small class="text-danger pl-3">','</small>');?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                Keterangan
                            </div>
                            <div class="col-sm-10">
                                    <textarea class="form-control" style="height:300px" name="description" ><?= $testimoni[0]['description'];?>
                                    </textarea>
                                    <?= form_error('description',' <small class="text-danger pl-3">','</small>');?>
                            </div>
                        </div>

                        <div class="form-group row">
                        <div class="col-sm-2">
                            Foto
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <img src="<?= $testimoni[0]['foto']?>" img-thumbnail width="40%">  
                            </div>
                        </div>
                        </div>

                        <br>
                        <br>
                        <br>

                        
                        <br>
                        <br>
                        <br>


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
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>                          
                </div>
            </div>           
        </div>
     
    

 