

<!-- Begin Page Content -->
  <div class="container-fluid">
            <!-- Page Heading -->
          
            <h2>Statistik Berita  </h2>
            <div class="table-responsive">
            <table class="table">
            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Judul</th>
                                <th>View</th>
                                <th>Tanggal</th>
                            </tr>
            </thead>
            <tbody>
          </div>
                    <?php 
                      $jumlah = count($pengunjung);
                      for($i=0;$i<$jumlah;$i++){
                    ?>
                             <tr>
                                <th><?= $pengunjung[$i]['id_news']?></th>
                                <th><?= $pengunjung[$i]['title']?></th>
                                <th><?= $pengunjung[$i]['jumlah']?></th>
                                <th><?= $pengunjung[$i]['created_at']?></th>
                            </tr>
                    <?php
                      }
                    ?>
                    </tbody>
 </table>
        </div>
        <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->