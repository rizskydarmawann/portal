<footer class="section-footer mb-4 border-top">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
            
                        <div class="col-12 col-lg-4">
                            <h5>FEATURES</h5>
            
          
                            <ul class="list-unstyled">
                            <?php 
          $ju = count($feature);
          for($f=0;$f<$ju;$f++){
          ?>
                                <li>
                                    <a href=" <?= base_url($feature[$f]['link']);?>"><?=$feature[$f]['name'];?> </a>
                                </li>
                               
                                <?php }  ?>
                            </ul>
                          
                        </div>

                       
                        <div class="col-12 col-lg-4">
                            <h5>GET CONNECTED</h5>
                           <ul class="list-unstyled">
                           <?php 
          $ju = count($connected);
          for($f=0;$f<$ju;$f++){
          ?>
                                <li class="pb-1">
                                    <a target="_blank" href="<?=$connected[$f]['link'];?> "><i class="<?=$connected[$f]['icon'];?>"></i> <?=$connected[$f]['name'];?></a>
                                </li>
                                <?php }  ?>
                            </ul>
                
                        </div>
                        <div class="col-12 col-lg-4">
                            <h5>LOCATION</h5>
                            <?php 
          $jum = count($location);
          for($fu=0;$fu<$jum;$fu++){
          ?>
                            <iframe
                                src="<?=$location[$fu]['link'];?>"
                                frameborder="0 " style="border: 0; width: 100%; height: 100px" allowfullscreen></iframe>
                                <?php }  ?>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-4 pb-1 border-top">
            <div class="row justify-content-center">
                <div class="col-auto text-gray-500 font-weight-light">
                    <?= date("Y")?> Copyright Project • All rights reserved • Made in Jakarta
                </div>
            </div>
        </div>
    </footer>