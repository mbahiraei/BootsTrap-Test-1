
        <!-- News -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 news p0">
        <div class= "col-lg-12 col-md-12 col-sm-12 col-xs-12 News p0">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Head-Top p0">
              <div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 Lib-Top p0">
                  ایستگاه خبر
                  <i class="fa fa-film" aria-hidden="true"></i>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 News-All">آرشیو کلی</div>
                </div>
            
            
            <?php
            $q=new WP_Query(
                array("category_name"=>"big_news","posts_per_page"=>2)
            );
            while($q->have_posts())
            {
                $q->the_post();
                ?>
              
            <article class="col-lg-6 col-md-6 col-sm-12 col-xs-12 L-News text-justify p0">
              <a  href="#">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 New-Con p0">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 News-img p0">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <div class="col-lg-8 col-md-8 colsm-8 col-xs-8 News-P p0">
                      <h4>
                      <?php the_title(); ?></h4>
                  <span> 
                    <?php echo get_the_date("y,m,d"); ?>
                </span>
                  
                    <?php the_content(); ?>
                  </div>
                </div>
              </a>
            </article>
        <?php 
    }

?>

            
          <?php
            $q=new WP_Query(
                array("category_name"=>"small_news","posts_per_page"=>4)
            );
            while($q->have_posts())
            {
                $q->the_post();
                ?>
              
           <a href="#">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 News-00 p0">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 News-01 p0">
                      <?php the_title(); ?>
                <span>
                    <?php echo get_the_date("y,m,d"); ?></span></div>
              </div>
           </a>
            
            
        <?php 
    }

?>


         </div>
      </div>
            