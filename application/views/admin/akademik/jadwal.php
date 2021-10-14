

<!-- Begin Page Content -->
<div class="container-fluid">
            <!-- Page Heading -->
            <h5 class="h3 mb-4 text-gray-800"><?= $title;?></h5>
            <div class="card shadow mb-4">
                <div class="card-body">
                    
                <div class="row">
                    
                <div class="col-lg-8">
                    <?= $this->session->flashdata('message');?>
                    
                    <?=form_open_multipart('admin/proses_edit_jadwal', 'id="edit_jadwal"') ?>
                    <input type="hidden" name="id" value="<?= $jadwal[0]['id'];?>">
                       
                    
                        <div class="form-group row">
                        <div class="col-sm-2">
                            Keterangan
                        </div>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <textarea class="form-control" style="height:300px" name="description">
                                <?= $jadwal[0]['description']?>
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
     
    

 