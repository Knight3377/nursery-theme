<?php get_header();  ?>

  

        <section class="top-banner">
            <div class="center slider">
                <div class="slide-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide1.png" class="pc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide1-sp.png" class="sp">
                    <div class="banner-text">
                        <h2>KOKOIKUのお伝えしたい教育理念<br><br>「自ら学び考える姿勢を育む」<br><br>ホール・チャイルド・アプローチ<br><br>「心」「身体」（ハート・ボディ<br class="sp"><br class="sp">・マインド）を同時に育む</h2>
                    </div>
                </div>
                <div class="slide-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide2.png" class="pc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide2-sp.png" class="sp">
                    <div class="banner-text">
                        <h2>KOKOIKUのお伝えしたい教育理念<br><br>「自ら学び考える姿勢を育む」<br><br>ホール・チャイルド・アプローチ<br><br>「心」「身体」（ハート・ボディ<br class="sp"><br class="sp">・マインド）を同時に育む</h2>
                    </div>
                </div>
                <div class="slide-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide3.png" class="pc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide3-sp.png" class="sp">
                    <div class="banner-text">
                        <h2>KOKOIKUのお伝えしたい教育理念<br><br>「自ら学び考える姿勢を育む」<br><br>ホール・チャイルド・アプローチ<br><br>「心」「身体」（ハート・ボディ<br class="sp"><br class="sp">・マインド）を同時に育む</h2>
                    </div>
                </div>
                <div class="slide-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide4.png" class="pc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide4-sp.png" class="sp">
                    <div class="banner-text">
                        <h2>KOKOIKUのお伝えしたい教育理念<br><br>「自ら学び考える姿勢を育む」<br><br>ホール・チャイルド・アプローチ<br><br>「心」「身体」（ハート・ボディ<br class="sp"><br class="sp">・マインド）を同時に育む</h2>
                    </div>
                </div>
            </div> 
         
        </section>
        
  	</div>
    
    <section class="follow">
        <div class="follow-caption">
            <h4>FOLLOW US</h4>
        </div>
        <div class="follow-links">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fa_icon.png"></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta_icon.png"></a>
        </div>
    </section>

    <?php 

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  
   if(! empty($_GET['pag']) && is_numeric($_GET['pag']) ){
        $paged = $_GET['pag'];
    }
    else{
        $paged = 1;
    }

    $posts_per_page = 3;

     $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby' => 'date',
        );

    $all_posts = get_posts($args);

    //how many total posts are there?
    $post_count = count($all_posts);

    //how many pages do we need to display all those posts?
    $num_pages = ceil($post_count / $posts_per_page);

    $all_categories = get_categories();

    //let make sure we don't have a page number that is higher than we have posts for
    if($paged > $num_pages || $paged < 1){
        $paged = $num_pages;
    }

    $i = 1;

        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => $posts_per_page,
            'paged' => $paged,
            'orderby' => 'date',


        );
        $post_query = new WP_Query( $args );  ?>

    <?php if ( $post_query -> have_posts() ) : ?>

    <section class="news">
        <div class="caption">
            <h3>新着情報</h3>
            <h6>NEWS & TOPICS</h6>
        </div>
        <div class="news-picks">
            <?php       
       
                  while ( $post_query -> have_posts() ) : 

                  $post_query -> the_post(); 
                  $cat = get_the_category();

              ?>
            <a href="<?php the_permalink(); ?>" class="news-block">
                <?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?>
                <div class="news-content">
                    <p><span class="category"><?php echo $cat[0]->name; ?></span><?php the_time('Y.m.d'); ?></p>
                    <p><?php the_title(); ?></p>
                </div>
            </a>
            <?php endwhile; ?>
        </div>

    <?php endif; ?>

    <?php 

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  
   if(! empty($_GET['pag']) && is_numeric($_GET['pag']) ){
        $paged = $_GET['pag'];
    }
    else{
        $paged = 1;
    }

    $posts_per_page = 4;

     $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby' => 'date',
        );

    $all_posts = get_posts($args);

    //how many total posts are there?
    $post_count = count($all_posts);

    //how many pages do we need to display all those posts?
    $num_pages = ceil($post_count / $posts_per_page);

    $all_categories = get_categories();

    //let make sure we don't have a page number that is higher than we have posts for
    if($paged > $num_pages || $paged < 1){
        $paged = $num_pages;
    }

    $i = 1;

        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => $posts_per_page,
            'paged' => $paged,
            'orderby' => 'date',
            'offset' => 3,

        );
        $post_query = new WP_Query( $args );  ?>

    <?php if ( $post_query -> have_posts() ) : ?>

        <div class="news-others">

            <?php       
       
                  while ( $post_query -> have_posts() ) : 

                  $post_query -> the_post(); 
                  $cat = get_the_category();

              ?>
            <div class="news-line">
                <a href="<?php the_permalink(); ?>">
                  <p class="date"><?php the_time('Y.m.d'); ?><span class="category"><?php echo $cat[0]->name; ?></span></p>
                  <p><?php the_title(); ?></p>
                </a>
              </div>

              <?php endwhile; ?>

        </div>

        <?php endif; ?>

        <a href="<?php echo home_url(); ?>/blog" class="more">もっと見る</a>
    </section>

    <section class="philosophy">
        <div class="caption">
            <h3>教育理念</h3>
            <h6>PHILOSOPHY</h6>
        </div>
        <div class="philosophy-content">
            <p>「​KOKOIKU総合学習塾」では個々に合わせたカリキュラムで、わからないところを自ら学び、今までできなかった問題を解く。<br>そして、子供たちが「自分の足で」次のステップへ進んでいく、そんな自立学習の習慣を身につけることを１番の目標にしています。<br>​最初から難しい問題が解ける子はほとんどいません。わからないところから一段ずつ壁を乗り越えていくことにより、少しずつ高みに登っていくことができます。しかし、あくまでその壁を登っていくのは子供たち自身。<br>そのために大切なのは自分の力で理解し、問題を解く力を身につけることです。<br>子供たちが少しでも高い壁を乗り越えれるようなお手伝いをさせていただきます。<br>そして、塾を卒業されるまでではなく、人生の大事な場面で判断し、最善の選択ができる人間になるために、勉強を通じて得られる「集中力」「考える力」「情報を正しく読み取る力」は欠かせません。<br><br>​人生には小、中、高校、大学、就職、結婚など大きな環境の変化がいくつもあります。<br>また、著しく変わっていく今後の社会情勢に対しても臨機応変に対応できる力を育み、お子様の将来の夢を叶えます。<br>それがKOKOIKU総合学習塾の目指す最終目標です。</p>
        </div>
    </section>

    <section class="lecturer">
        <div class="caption">
            <h3>講師紹介</h3>
            <h6>LECTURER</h6>
        </div>
        <div class="lecturer-contents">
            <div class="lecturer-box">
                <div class="lecturer-text">
                    <h6>和氣　志織</h6>
                    <p>保育園保育士歴　7年<br>塾講師歴　17年<br><br>中学受験クラス<br>勉強苦手からの合格実績多数<br>面倒見100％<br>発達障がい学習支援講師<br>（幼児～小学生）<br>探究学習講師</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lecturer1.png">
            </div>
            <div class="lecturer-box">
                <div class="lecturer-text">
                    <h6>所　弓子</h6>
                    <p>幼稚園教諭歴　2年<br>塾講師歴　15年<br><br>発達障がい学習支援講師<br>（幼児～小学生）<br>小学受験クラス<br>小学受験　合格率100％<br>探究学習講師</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lecturer2.png">
            </div>
            <div class="lecturer-box">
                <div class="lecturer-text">
                    <h6>中村　久美江</h6>
                    <p>幼稚園教諭歴　3年<br>保育園保育士歴　13年<br>塾講師歴　3年<br>探究学習講師</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lecturer3.png">
            </div>
        </div>
    </section>

    <section class="course">
        <div class="caption">
            <h3>コース紹介</h3>
            <h6>COURSE</h6>
        </div>
        <div class="course-contents">
            <div class="course-box">
                <a href="<?php echo home_url(); ?>/puiple"><p>小学校<br>受験クラス</p></a>
            </div>
            <div class="course-box">
                <a href="<?php echo home_url(); ?>/subject"><p>教科学習<br>クラス</p></a>
            </div>
            <div class="course-box">
                <a href="<?php echo home_url(); ?>/support"><p>発達支援<br>サポート<br>クラス</p></a>
            </div>
            <div class="course-box">
                <a href="<?php echo home_url(); ?>/inquiry"><p>探究学習</p></a>
            </div>
            <div class="course-box">
                <a href="<?php echo home_url(); ?>/english"><p>英会話・英検<br>クラス</p></a>
            </div>
        </div>
    </section>

   <?php get_footer(); ?>