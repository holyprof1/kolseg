  <footer class="site-footer">
    <div class="container footer-inner">
      <div>
        <a class="brand footer-brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="KOLSEG home">
          <span class="brand-logo"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/kolseg-logo.png'); ?>" alt="KOLSEG logo"></span>
          <span class="brand-text">
            <strong><?php bloginfo('name'); ?></strong>
            <small><?php bloginfo('description'); ?></small>
          </span>
        </a>
        <p class="footer-copy"><?php echo esc_html(get_bloginfo('description')); ?></p>
      </div>
      <div class="footer-links">
        <a href="<?php echo esc_url(home_url('/services/')); ?>">Services</a>
        <a href="<?php echo esc_url(home_url('/portfolio/')); ?>">Portfolio</a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a>
      </div>
    </div>
  </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
