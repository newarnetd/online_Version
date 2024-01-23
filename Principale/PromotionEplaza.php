    <?php
    $profileBoutique = decrypt($dataBoutique['profile'],$key);
    $id= encrypt($dataBoutique['boutiqueId'],$key);
    ?>
  <div class="swiper-slide">
                          <div class="headerTopEplazaMarket"><img src="<?php echo $profileBoutique?>"style="width:100%;height:100%;object-fit:cover;"></div>
                          <div class="bottomePlazaMarket promotioEplaza">
                            <button y="<?php echo $id ?>" onclick="abonnementBoutique(event)">S'abonner</button>
                          </div>
                        </div>  