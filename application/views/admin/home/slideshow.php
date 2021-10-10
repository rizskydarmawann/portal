

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
                            </tr>
                        </thead>
                        
                        <tbody>
                        <?php
                        foreach ($slide as $row):
                        
                        ?>
                            <tr>
                                <td><?php echo $row['judul'];?></td>
                                
                                
                            </tr>
                            <?php
                            endforeach:
                        ?>        
                        </tbody>
                      
                    </table>                             
                </div>
            </div>           
        </div>
     
   

  

    

 