  <div class="comment<?php print ' '. $status; ?>">
    <?php if ($picture) {print $picture;} ?>
<h3 class="title"><?php print $title ?></h3><?php if ($new != '') { ?><span class="new"><?php print $new ?></span><?php } ?>
    <div class="submitted"><?php print $submitted ?></div>
    <div class="content">
     <?php print $content ?>
     <?php if ($signature && $comment->cid > 0): // The highest comment ID before upgrading to Drupal 6 ?>
      <div class="clear-block">
       <div>—</div>
       <?php print $signature ?>
      </div>
     <?php endif; ?>
    </div>
    <div class="links"><?php print $links ?></div>
  </div>
