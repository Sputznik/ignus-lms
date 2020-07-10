<?php
  define ( 'ignus-lms-version', '0.2.0' );

  // Function to change email address
  function wpb_sender_email( $original_email_address ) {
    return 'mail@ignus.academy';
  }

  // Function to change sender name
  function wpb_sender_name( $original_email_from ) {
      return 'Ignus Academy';
  }

  // Hooking up our functions to WordPress filters
  add_filter( 'wp_mail_from', 'wpb_sender_email' );
  add_filter( 'wp_mail_from_name', 'wpb_sender_name' );

  //GOOGLE ANALYTICS
  function ign_google_analytics() { ?>
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-170499175-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-170499175-1');
      </script>
      <?php
  }

  add_action( 'wp_head', 'ign_google_analytics', 10 );

  //CUSTOM SCRIPTS
  function ign_files() {
    //wp_enqueue_script('ign_theme_js', get_theme_file_uri('js/script.js'));
    ?>
    <script>
    $(document).ready(function(){
      $('form.sfwd-mark-complete').hide();
      $('#yes-btn-instruction').hide();
      $('#no-btn-instruction').hide();
      $('#reveal-complete-btn').on('click', function(){
        $('form.sfwd-mark-complete').show();
        $('#yes-btn-instruction').show();
      });
      $('#incomplete-btn').on('click', function(){
      	$('#no-btn-instruction').show();
      });
    });
    </script>
    <?php
  }

  add_action('wp_print_footer_scripts', 'ign_files');

?>
