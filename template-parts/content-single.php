<div class="post_box">
  <div class="post_thumbnail">
    
    <?php the_post_thumbnail(); ?>
    <h3><?php the_title(); ?></h3>
  </div><!-- /.post-thumnail -->
  <div class="post_meta">
    <ul>
      <li><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename')); ?>"><i class="icofont icofont-man-in-glasses"></i><?php the_author(); ?></a></li>
      <li><i class="icofont icofont-ui-calendar"></i><?php the_date('M d, Y'); ?></li>
      <li><i class="icofont icofont-ui-text-chat"></i><?php comments_popup_link('No Comment','One Comment','% comments','author','comment off'); ?></li>
    </ul>
  </div><!-- /.post_meta -->
  <div class="post_content">
    <?php the_content(); ?>
  </div><!-- /.post_content -->
</div><!-- /.post_box -->

<div class="single_page_share">
  <div class="share_header">
    <h5>share now</h5>
  </div><!-- /.share_header -->
    <div class="single_page_nav">
      <ul>
        <li>
            <a href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><i class="icofont icofont-social-facebook"></i></a>
        </li>
        <li>
            <a href="http://twitter.com/home/?status=<?php the_title();?>-<?php the_permalink();?>"><i class="icofont icofont-social-twitter"></i></a>
        </li>
        <li>
          <a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title()?>&amp;url=<?php the_permalink();?>"><i class="icofont icofont-social-linkedin"></i></a>
        </li>
        <li>
            <a href="https://plus.google.com/share?url=" target="_blank" title="Share on Google+" onclick="window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL)); return false;"><i class="icofont icofont-social-google-plus"></i></a>
        </li>
        <li>
            <a href="http://pinterest.com/pin/create/button/?url=http://www.printe-z.com/booked-forms.html&amp;media=http://www.printe-z.com/image/cache/data/newImages/business_forms_Booked-200x120.jpg&amp;description=description will come here"><i class="icofont icofont-social-pinterest"></i></a>
        </li>
      </ul>
  </div><!-- single_page_nav -->
</div><!-- /.single_page_share -->