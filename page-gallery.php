<?php
  get_header();

  $params = @$_GET['category'];


  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  
   if(! empty($_GET['pag']) && is_numeric($_GET['pag']) ){
        $paged = $_GET['pag'];
    }
    else{
        $paged = 1;
    }
  $posts_per_page = 15;
  
?>

        <section class="page-fv">
            <h6>Photo Gallery</h6>
            <h3>フォトギャラリー</h3>
        </section>
        
  	</div>
    
    <section class="gallery-contents">
      <div class="sidebar-left">
        <h5>カテゴリー</h5>
        
        <?php

        $args = array(
               'public'   => true,
               '_builtin' => false,
            );

        $output = 'names'; // names or objects, note names is the default
        $operator = 'and'; 

        $post_types = get_post_types( $args, $output, $operator ); 

        ?>


        <div class="category-list">
          <ul>
            <?php foreach($post_types as $post_type): 
              
              $post_type_obj = get_post_type_object($post_type)->label;
            ?>
            <li><a href="?category=<?php echo $post_type ?>"><?php echo $post_type_obj; ?></a></li>
          <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <div class="galleries">
        <div class="tabs-nav">
          <ul>
            <li class="active"><a href="#tab1">春</a></li>
            <li><a href="#tab2">夏</a></li>
            <li><a href="#tab3">秋</a></li>
            <li><a href="#tab4">冬</a></li>
          </ul>
        </div>

        <section class="tabs-content">
          <div id="tab1">
            <?php 

              if($params) {
                $custom_posts = new WP_Query(
                    array(
                        'post_type' => $params,
                        'posts_per_page' => $posts_per_page,
                        'orderby' => 'date',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'category_name' => 'spring',
                    )
                );
                $post_count = count(get_posts(array(
                        'post_type' =>  $params,
                        'orderby' => 'date',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'category_name' => 'spring',
                    )));

              } elseif($params == NULL){
                $custom_posts = new WP_Query(
                    array(
                        'post_type' => 'cat1',
                        'posts_per_page' => $posts_per_page,
                        'orderby' => 'date',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'category_name' => 'spring',
                    )
                );
                $post_count = count(get_posts(array(
                        'post_type' => 'cat1',
                        'orderby' => 'date',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'category_name' => 'spring',
                    )));
              }
              $num_pages = ceil($post_count / $posts_per_page);
              

              if ( $custom_posts -> have_posts() ) : 
                while ( $custom_posts -> have_posts() ) : 

                  $custom_posts -> the_post();

                  the_content();
                endwhile;
              // endif;
            ?>

            <?php  

            if($post_count > $posts_per_page ) { ?>
              <section class="gallery-pagination">
                  <ul>
                    <?php if ($paged > 4) {
                      if ($paged % 4 == 0)
                        $link_page = (floor($paged/4) - 2) * 4 + 1; 
                      else
                        $link_page = (floor($paged/4) - 1) * 4 + 1; 
                      ?>
                      <li><a class="first" href="?pag=<?php echo $link_page; ?>">&laquo;</a></li>
                    <?php } else { ?>
                      <li><span class="first">&laquo;</span></li>
                    <?php }
                    
                    if ($paged % 4 == 0)
                      $start_page = (floor($paged/4) - 1) * 4 + 1;
                    else 
                      $start_page = floor($paged/4) * 4 + 1;

                    if ($start_page > 1) { ?>
                    <li><span>...</span></li>
                    <?php }

                    for($p = $start_page; $p <= $start_page + 3; $p++){
                      if ($p > $num_pages) break;

                      if ($paged == $p) {
                    ?>
                    <li class="current"><span><?php echo $p; ?></span></li>
                    <?php } else { ?>
                      <li><a href="?category=<?php echo $params; ?>&pag=<?php echo $p; ?>"><?php echo $p; ?></a></li>
                      <?php } }

                      if ($start_page + 3 < $num_pages - 1) { ?>
                      <li><span>...</span></li>
                      <?php }
                      if ($start_page + 3 < $num_pages) { 
                        if ($paged == $num_pages) { ?>
                        <li class="current"><span><?php echo $num_pages; ?></span></li>
                        <?php } else { ?>
                        <li><a href="?pag=<?php echo $num_pages; ?>"><?php echo $num_pages; ?></a></li>
                      <?php } }


                      if($start_page + 4 <= $num_pages) { ?>
                      <li><a class="last" href="?pag=<?php echo $start_page + 4; ?>">&raquo;</a></li>
                      <?php } else { ?>
                        <li><span class="last">&raquo;</span></li>
                      <?php } ?>
                  </ul>
              </section>
            <?php } ?>

            <?php else: ?>
                <p id="no_post">資料はありません。</p>
            <?php endif;  ?>

          </div>
          <div id="tab2">
            <?php

            if($params) {
                $custom_posts = new WP_Query(
                    array(
                        'post_type' => $params,
                        'posts_per_page' => $posts_per_page,
                        'orderby' => 'date',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'category_name' => 'summer',
                    )
                );
                $post_count = count(get_posts(array(
                        'post_type' =>  $params,
                        'orderby' => 'date',
                        'post_status' => 'publish',
                        'category_name' => 'summer',
                    )));

              } elseif($params == NULL){
                $custom_posts = new WP_Query(
                    array(
                        'post_type' => 'cat1',
                        'posts_per_page' => $posts_per_page,
                        'orderby' => 'date',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'category_name' => 'summer',
                    )
                );
                $post_count = count(get_posts(array(
                        'post_type' => 'cat1',
                        'orderby' => 'date',
                        'post_status' => 'publish',
                        'category_name' => 'summer',
                    )));
              }
              $num_pages = ceil($post_count / $posts_per_page);
              

              if ( $custom_posts -> have_posts() ) : 
                while ( $custom_posts -> have_posts() ) : 

                  $custom_posts -> the_post();

                  the_content();
                endwhile;
              // endif;
            ?>

            <?php  

            if($post_count > $posts_per_page ) { ?>
              <section class="gallery-pagination">
                  <ul>
                    <?php if ($paged > 4) {
                      if ($paged % 4 == 0)
                        $link_page = (floor($paged/4) - 2) * 4 + 1; 
                      else
                        $link_page = (floor($paged/4) - 1) * 4 + 1; 
                      ?>
                      <li><a class="first" href="?pag=<?php echo $link_page; ?>">&laquo;</a></li>
                    <?php } else { ?>
                      <li><span class="first">&laquo;</span></li>
                    <?php }
                    
                    if ($paged % 4 == 0)
                      $start_page = (floor($paged/4) - 1) * 4 + 1;
                    else 
                      $start_page = floor($paged/4) * 4 + 1;

                    if ($start_page > 1) { ?>
                    <li><span>...</span></li>
                    <?php }

                    for($p = $start_page; $p <= $start_page + 3; $p++){
                      if ($p > $num_pages) break;

                      if ($paged == $p) {
                    ?>
                    <li class="current"><span><?php echo $p; ?></span></li>
                    <?php } else { ?>
                      <li><a href="?category=<?php echo $params; ?>&pag=<?php echo $p; ?>"><?php echo $p; ?></a></li>
                      <?php } }

                      if ($start_page + 3 < $num_pages - 1) { ?>
                      <li><span>...</span></li>
                      <?php }
                      if ($start_page + 3 < $num_pages) { 
                        if ($paged == $num_pages) { ?>
                        <li class="current"><span><?php echo $num_pages; ?></span></li>
                        <?php } else { ?>
                        <li><a href="?pag=<?php echo $num_pages; ?>"><?php echo $num_pages; ?></a></li>
                      <?php } }


                      if($start_page + 4 <= $num_pages) { ?>
                      <li><a class="last" href="?pag=<?php echo $start_page + 4; ?>">&raquo;</a></li>
                      <?php } else { ?>
                        <li><span class="last">&raquo;</span></li>
                      <?php } ?>
                  </ul>
              </section>
            <?php } ?>

            <?php else: ?>
                <p id="no_post">資料はありません。</p>
            <?php endif;  ?>
          </div>

          <div id="tab3">
            <?php 

              if($params) {
                $custom_posts = new WP_Query(
                    array(
                        'post_type' => $params,
                        'posts_per_page' => $posts_per_page,
                        'orderby' => 'date',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'category_name' => 'autumn',
                    )
                );
                $post_count = count(get_posts(array(
                        'post_type' =>  $params,
                        'orderby' => 'date',
                        'post_status' => 'publish',
                        'category_name' => 'autumn',
                    )));

              } elseif($params == NULL){
                $custom_posts = new WP_Query(
                    array(
                        'post_type' => 'cat1',
                        'posts_per_page' => $posts_per_page,
                        'orderby' => 'date',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'category_name' => 'autumn',
                    )
                );
                $post_count = count(get_posts(array(
                        'post_type' => 'cat1',
                        'orderby' => 'date',
                        'post_status' => 'publish',
                        'category_name' => 'autumn',
                    )));
              }
              $num_pages = ceil($post_count / $posts_per_page);
              

              if ( $custom_posts -> have_posts() ) : 
                while ( $custom_posts -> have_posts() ) : 

                  $custom_posts -> the_post();

                  the_content();
                endwhile;
              // endif;
            ?>


            <?php  

            if($post_count > $posts_per_page ) { ?>
              <section class="gallery-pagination">
                  <ul>
                    <?php if ($paged > 4) {
                      if ($paged % 4 == 0)
                        $link_page = (floor($paged/4) - 2) * 4 + 1; 
                      else
                        $link_page = (floor($paged/4) - 1) * 4 + 1; 
                      ?>
                      <li><a class="first" href="?pag=<?php echo $link_page; ?>">&laquo;</a></li>
                    <?php } else { ?>
                      <li><span class="first">&laquo;</span></li>
                    <?php }
                    
                    if ($paged % 4 == 0)
                      $start_page = (floor($paged/4) - 1) * 4 + 1;
                    else 
                      $start_page = floor($paged/4) * 4 + 1;

                    if ($start_page > 1) { ?>
                    <li><span>...</span></li>
                    <?php }

                    for($p = $start_page; $p <= $start_page + 3; $p++){
                      if ($p > $num_pages) break;

                      if ($paged == $p) {
                    ?>
                    <li class="current"><span><?php echo $p; ?></span></li>
                    <?php } else { ?>
                      <li><a href="?category=<?php echo $params; ?>&pag=<?php echo $p; ?>"><?php echo $p; ?></a></li>
                      <?php } }

                      if ($start_page + 3 < $num_pages - 1) { ?>
                      <li><span>...</span></li>
                      <?php }
                      if ($start_page + 3 < $num_pages) { 
                        if ($paged == $num_pages) { ?>
                        <li class="current"><span><?php echo $num_pages; ?></span></li>
                        <?php } else { ?>
                        <li><a href="?pag=<?php echo $num_pages; ?>"><?php echo $num_pages; ?></a></li>
                      <?php } }


                      if($start_page + 4 <= $num_pages) { ?>
                      <li><a class="last" href="?pag=<?php echo $start_page + 4; ?>">&raquo;</a></li>
                      <?php } else { ?>
                        <li><span class="last">&raquo;</span></li>
                      <?php } ?>
                  </ul>
              </section>
            <?php } ?>

            <?php else: ?>
                <p id="no_post">資料はありません。</p>
            <?php endif;  ?>
          </div>

          <div id="tab4">
            <?php 

              if($params) {
                $custom_posts = new WP_Query(
                    array(
                        'post_type' => $params,
                        'posts_per_page' => $posts_per_page,
                        'orderby' => 'date',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'category_name' => 'winter',
                    )
                );
                $post_count = count(get_posts(array(
                        'post_type' =>  $params,
                        'orderby' => 'date',
                        'post_status' => 'publish',
                        'category_name' => 'winter',
                    )));

              } elseif($params == NULL){
                $custom_posts = new WP_Query(
                    array(
                        'post_type' => 'cat1',
                        'posts_per_page' => $posts_per_page,
                        'orderby' => 'date',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'category_name' => 'winter',
                    )
                );
                $post_count = count(get_posts(array(
                        'post_type' => 'cat1',
                        'orderby' => 'date',
                        'post_status' => 'publish',
                        'category_name' => 'winter',
                    )));
              }
              $num_pages = ceil($post_count / $posts_per_page);
              

              if ( $custom_posts -> have_posts() ) : 
                while ( $custom_posts -> have_posts() ) : 

                  $custom_posts -> the_post();

                  the_content();
                endwhile;
              // endif;
            ?>

            <?php  

            if($post_count > $posts_per_page ) { ?>
              <section class="gallery-pagination">
                  <ul>
                    <?php if ($paged > 4) {
                      if ($paged % 4 == 0)
                        $link_page = (floor($paged/4) - 2) * 4 + 1; 
                      else
                        $link_page = (floor($paged/4) - 1) * 4 + 1; 
                      ?>
                      <li><a class="first" href="?pag=<?php echo $link_page; ?>">&laquo;</a></li>
                    <?php } else { ?>
                      <li><span class="first">&laquo;</span></li>
                    <?php }
                    
                    if ($paged % 4 == 0)
                      $start_page = (floor($paged/4) - 1) * 4 + 1;
                    else 
                      $start_page = floor($paged/4) * 4 + 1;

                    if ($start_page > 1) { ?>
                    <li><span>...</span></li>
                    <?php }

                    for($p = $start_page; $p <= $start_page + 3; $p++){
                      if ($p > $num_pages) break;

                      if ($paged == $p) {
                    ?>
                    <li class="current"><span><?php echo $p; ?></span></li>
                    <?php } else { ?>
                      <li><a href="?category=<?php echo $params; ?>&pag=<?php echo $p; ?>"><?php echo $p; ?></a></li>
                      <?php } }

                      if ($start_page + 3 < $num_pages - 1) { ?>
                      <li><span>...</span></li>
                      <?php }
                      if ($start_page + 3 < $num_pages) { 
                        if ($paged == $num_pages) { ?>
                        <li class="current"><span><?php echo $num_pages; ?></span></li>
                        <?php } else { ?>
                        <li><a href="?pag=<?php echo $num_pages; ?>"><?php echo $num_pages; ?></a></li>
                      <?php } }


                      if($start_page + 4 <= $num_pages) { ?>
                      <li><a class="last" href="?pag=<?php echo $start_page + 4; ?>">&raquo;</a></li>
                      <?php } else { ?>
                        <li><span class="last">&raquo;</span></li>
                      <?php } ?>
                  </ul>
              </section>
            <?php } ?>

            <?php else: ?>
                <p id="no_post">資料はありません。</p>
            <?php endif;  ?>
          </div>
        </section>

        
<!--         <div class="gallery-pagination">
          <p class="active">1</p>
          <p>2</p>          
        </div>
 -->      </div>
    </section>

    <?php get_footer(); ?>