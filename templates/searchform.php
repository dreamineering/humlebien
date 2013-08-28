<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
  <ul class="form-fields">
    <li class="spoken-form">
      <input type="search" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" class="text-input" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>">
      <label class="visuallyhidden"><?php _e('Search for:', 'roots'); ?></label>
      <span class="search-form__btn-wrapper">
        <button type="submit" class="btn btn--search"><?php _e('Search', 'roots'); ?></button>
      </span>
    </li>
  </ul>
</form>
