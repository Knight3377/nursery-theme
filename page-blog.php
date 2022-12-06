<?php get_header();  ?>

        <section class="page-fv">
            <h6>News</h6>
            <h3>ニュース</h3>
        </section>
        
  	</div>
  <?php 

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  
   if(! empty($_GET['pag']) && is_numeric($_GET['pag']) ){
        $paged = $_GET['pag'];
    }
    else{
        $paged = 1;
    }

    $posts_per_page = 2;

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

    <section class="news-contents">
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

    </section>

    
    <?php  if($post_count > $posts_per_page ) { ?>
      <div class="pagination">
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
              <li><a href="?pag=<?php echo $p; ?>"><?php echo $p; ?></a></li>
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
      </div>
    <?php } ?>

    <?php else: ?>
        <p id="no_post">資料はありません。</p>
    <?php endif; wp_reset_query(); ?>
    <?php get_footer(); ?>