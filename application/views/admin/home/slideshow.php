

<!-- Begin Page Content -->
<div class="container-fluid">
            <!-- Page Heading -->
            <h5 class="h3 mb-4 text-gray-800"><?= $title;?></h5>
            <div class="card shadow mb-4">
                <div class="card-body">
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
                        foreach ($slide as $row):
                        
                        ?>
                            <tr>
                                <td><?php echo $no++;?></td>
                                <td><?php echo $row['judul'];?></td>
                                <td><img src="<?php echo $row['foto'];?>" class="img-fluid img-thumbnai" width="20%" ></td>
                                <td>

                                    <a href=""
                                        class="badge badge-danger">Delete</a>
                                    <a href="" type="button" data-toggle="modal"
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
     
      

 