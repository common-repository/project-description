<div class="wrap">
  <h1>Project Description</h1>

<?php
  if ($settingsUpdated) {
    echo '<div class="updated"><p>Settings updated.</p></div>';
  }

  if ($noCategorySelected) {
    echo '<div class="notice notice-info"><p>You have not selected the category. Project description will never be shown.</p></div>';
  }
?>

  <form method="POST">
    <div>
      <h2>General settings</h2>
      <table class="form-table">
      <tr>
          <th scope="row"><label for="category">For category</label></th>
          <td>
            <?php wp_dropdown_categories($categoriesDropdownOptions); ?>
            <p class="description">Box will be shown only for the posts in this category, on a single post page.</p>
          </td>
      </tr>
      <tr>
          <th scope="row">"Jump to content"</th>
          <td>
            <input name="jump_to_content" type="checkbox" <?php echo ($jumpToChecked ? ' checked' : ''); ?>>
            <label for="jump_to_content">Show "Jump to content" link</label>
          </td>
      </tr>
      <tr>
          <th scope="row">Show posts from category</th>
          <td>
            <input name="show_from_cat" type="checkbox" <?php echo ($showFromCat ? ' checked' : ''); ?>>
            <label for="show_from_cat">Show a list of posts from chosen category.</label>
          </td>
      </tr>
      <tr>
          <th scope="row">Show in category archives</th>
          <td>
            <input name="change_cat_desc" type="checkbox" <?php echo ($changeCatDesc ? ' checked' : ''); ?>>
            <label for="change_cat_desc">Change category description in archives to description box</label>
            <p class="description">Filter will return HTML code. Not every template shows category description.</p>

            <div class="show_in_subcat_group" style="margin-top: 15px">
              <input name="show_in_subcat" type="checkbox" <?php echo ($showInSubcat ? ' checked' : ''); ?>>
              <label for="show_in_subcat">Show also in subcategories</label>
              <p class="description">Will run filter also for archive pages of subcategories.</p>
            </div>
          </td>
      </tr>
      </table>
    </div>

    <div>
      <h2>About the project</h2>
      <table class="form-table">
      <tr>
          <th scope="row"><label for="boxtitle">Box title</label></th>
          <td>
            <input type="text" name="boxtitle" id="boxtitle" value="<?php echo esc_attr($boxTitle); ?>" />
            <p class="description">Visible as a header of the box.</p>
          </td>
      </tr>
      <tr>
          <th scope="row">Contents</th>
          <td>
            <?php wp_editor(html_entity_decode(stripcslashes($boxContents)), 'boxcontents', array('textarea_name' => 'boxcontents')); ?>
          </td>
      </tr>
      </table>
    </div>
    
    <input type="submit" value="Save settings" name="submitted" class="button button-primary button-large">
  </form>

</div>