<aside id="project-description">
  <h2><?php
    echo $boxTitle;
    if ($jumpEnabled) {
      echo '<a href="#project-description-end">Jump to content</a>';
    }
  ?></h2>
  <div class="content">
    <?php echo $boxContents; ?>
  </div>
<?php if ($showFromCat) { ?>
  <div class="other-posts">
    <p>See all the posts from category “<?php echo $catName; ?>”:</p>
    <ul class="other-posts-list">
<?php
  foreach ($postList as $post) {
      echo '<li><a href="'. $post['permalink'] .'">'. $post['title'] .'</a></li>';
  }
?>
    </ul>
  </div>
<?php } ?>
</aside>
<?php if ($jumpEnabled) {
  echo '<a name="project-description-end"></a>';
} ?>