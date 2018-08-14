	 <div class="clearfix"></div>

    <footer class="main-footer">
      <div class="row">
        <div class="large-3 columns">
          <?php if(is_active_sidebar('footer1')){
			dynamic_sidebar('footer1');
		  }?>
        </div>
        <div class="large-3 columns">
          <?php if(is_active_sidebar('footer2')){
			dynamic_sidebar('footer2');
		  }?>
        </div>
        <div class="large-3 columns">
          <?php if(is_active_sidebar('footer3')){
			dynamic_sidebar('footer3');
		  }?>
        </div>
        <div class="large-3 columns">
          <?php if(is_active_sidebar('footer4')){
			dynamic_sidebar('footer4');
		  }?>
        </div>
      </div>
    </footer>

	<?php wp_footer(); ?>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>