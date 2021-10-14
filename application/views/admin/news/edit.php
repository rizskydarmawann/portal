

<!-- Begin Page Content -->
<div class="container-fluid">
            <!-- Page Heading -->
            <h5 class="h3 mb-4 text-gray-800"><?= $title;?></h5>
            <div class="card shadow mb-4">
                <div class="card-body">
                    
                <div class="row">
                    
                <div class="col-lg-8">
                    <?= $this->session->flashdata('message');?>
                    
                    <?=form_open_multipart('admin/proses_edit_news', 'id="edit_news"') ?>
                    <input type="hidden" name="id_news" value="<?= $news[0]['id_news'];?>">
                        <div class="form-group row">
                            <label for="url" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" value="<?= $news[0]['title'];?>">
                                <?= form_error('title',' <small class="text-danger pl-3">','</small>');?>
                            </div>
                        </div>

                        <div class="form-group row">
                        <div class="col-sm-2">
                            Foto
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <img src="<?= $news[0]['foto']?>" width="40%">  
                            </div>
                        </div>
                        </div>

                        <br>
                        <br>
                        <br>


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

                        

                        <div class="form-group row">
                        <div class="col-sm-2">
                            Keterangan
                        </div>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <textarea class="form-control" style="height:300px" name="description">
                                <?= $news[0]['description']?>
                                </textarea>
                            </div>
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
     
    

 