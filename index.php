<?php get_header(); ?>
<?php include("inc/slider.php"); ?>
<?php include("inc/news.php"); ?>

        <!-- column-left -->
            <section id="column-left">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 column-left p0">
                
                
<?php include("inc/weekly.php"); ?>
                
                <section>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Post p0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 column-post p0">
             
                        
<?php while(have_posts()){
                            the_post();
                        ?>
                        
            <article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 post-new p0">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 post-tittle p0">
                  <div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 tittle-post p0">
                      <i class="fa fa-film" aria-hidden="true"></i><h2><a href="
                      <?php the_permalink(); ?>">
                      <?php the_title(); ?>
                      </a></h2></div>
                <header></header>
                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 post-num">8.5</div>
                    </div>
                    <div class="col-lg-12 col-md-12 col=sm-12 col-xs-12 post-info p0">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 post-ditails p0">             
                          <div class="hidden-lg hidden-md hidden-sm col-xs-4 Blank-Div p0"></div> 
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 post-img p0">
                          <?php the_post_thumbnail(); ?>
                        </div>            
                          <div class="hidden-lg hidden-md hidden-sm col-xs-4 p0"></div> 
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 post-d p0">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 Post-Ditailed p0">
                            <i class="fa fa-angle-left" aria-hidden="true"></i> +گروه سنی : 13
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 Post-Ditailed p0">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>محصول : امریکا | کانادا
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 Post-Ditailed p0">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>ژانر : اکشن | ماجراجویی | فانتزی
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 Post-Ditailed p0">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>امتیاز کاربران : 9.0
                      </div>
                      <div class="col-lg-6 hidden-md hidden-sm hidden-xs Post-Ditailed p0">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>اولین پخش : 2010
                      </div>
                      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6 Post-Ditailed p0">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>زبان : انگلیسی
                        </div>
                        <div class="col-lg-6 hidden-md hidden-sm col-xs-6 Post-Ditailed p0">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>مدت زمان : 126 دقیقه
                        </div>
                        <div class="col-lg-6 hidden-md hidden-sm col-xs-6 Post-Ditailed p0">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>حجم : 500 | 800 | 1200 مگابایت
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 Post-Ditailed p0">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>اطلاعات بیشتر :
                            <img src="<?php echo get_template_directory_uri(); ?>/img/IMDB.png" alt="">
                      </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Post-Ditailed p0">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>لیست عوامل :
                            <img src="<?php echo get_template_directory_uri(); ?>/img/IMDB.png" alt="">
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Post-Ditailed p0">
                            <i class="fa fa-angle-left" aria-hidden="true"></i> کارگردان : David Ayer
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Post-Ditailed p0">
                            <i class="fa fa-angle-left" aria-hidden="true"></i> ستارگان : Will Smith, Margot Robbie, Jared Leto
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Post-Ditailed p0">
                            <i class="fa fa-angle-left" aria-hidden="true"></i> کیفیت : BluRay 1080p 
                      </div>
                  </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 post-story p0">
                          <?php the_content(""); ?>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 btn-post p0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 awards-post p0">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/Awards.png" alt="" >
                          <p>برنده ۲ جایزه گلدن گلوب و نامزد ۳ جایزه</p>
                        </div>
                      </div>
                        <footer>
                          <a href="
                      <?php the_permalink(); ?>">
                              <div style="border-right: #4a93d2 1px solid;" class="col-lg-3 col-md-3 colsm-3 col-xs-3 button-post" title="صفحه دانلود">دانلود
                          </div></a>
                          <a href="#"><div class="col-lg-3 col-md-3 colsm-3 col-xs-3 button-post" title="مشاهده تریلر">تریلر
                          </div></a>
                          <a href="#"><div class="col-lg-3 col-md-3 colsm-3 col-xs-3 button-post" title="افزودن به لیست تماشا">لیست تماشا
                          </div></a>
                          <a href="#"><div  class="col-lg-3 col-md-3 colsm-3 col-xs-3 button-post" title="وارد کردن امتیاز">امتیاز دهید
                          </div></a>
                        </footer>
                  </div>
                </div>
              </article>
<?php
                 }
     ?>           
                <nav>
                    <div class="post">
                        <?php wp_pagenavi(); ?>
                    </div>
                </nav>

                    </div>
                </div>
                </section>
            </div>
            </section>


<?php get_sidebar(); ?>
                
                
        </div>

<?php get_footer(); ?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>
<script>
        Toggler.Init({

            CLASS_BASE: 'js-toggler',

            CLASS_VISIBLE: 'is-visible',

            CLASS_TARGET_VISIBLE: 'is-target-visible',

            CLASS_TRANSITIONING: 'is-transitioning',

            CLASS_FADE: 'is-fade',

            CLASS_SLIDEFADE: 'is-slidefade',

            DELEGATE_CLICK: false
        });
</script>
<script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("menu_sticky");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }

</script>


</body>
</html>
