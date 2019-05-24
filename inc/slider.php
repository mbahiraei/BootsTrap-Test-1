
        <!-- slider -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slider p0">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Head-Top p0">
          <div class="col-lg-11 col-md-10 col-sm-10 col-xs-10 Lib-Top p0">برترین فیلم ها به انتخاب کاربران
          <i class="fa fa-film" aria-hidden="true"></i>
          </div>
          <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2 p0">
            <button type="button" id="PRV" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 slick-prev"><i class="icon-chevron-left" aria-hidden="true"></i></button>
            <button type="button" id="NTX" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 slick-next"><i class="icon-chevron-right" aria-hidden="true"></i></button>
          </div>
        </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 CenterA row-NewP p0">
<?php
            $q=new WP_Query(
                array("category_name"=>"slider_post","posts_per_page"=>8)
            );
            while($q->have_posts())
            {
                $q->the_post();
                ?>
              <div class="New-1 p0" data-merge="1">
                     <a href="
                      <?php the_permalink(); ?>"><div class="New-1-img">  
                          <?php the_post_thumbnail(); ?></div>
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slider-caption p0">
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 s-c-1 p0">
                             <?php the_title(); ?></div>
                             <span class="col-lg-1 col-md-1 col-sm-1 col-xs-1 p0"></span>
                             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 s-c-2 p0">
                                 <div class="col-lg-4 col-md-3 col-sm-3 hidden-xs s-c-2-1 p0">8.3</div>
                                 <div class="col-lg-8 col-md-9 col-sm-9 col-xs-12 s-c-2-2 p0">1080 web.rip</div>
                             </div>
                         </div>
                     </a>
                 </div>
        <?php 
    }

?>
                     
          </div>
        </div>