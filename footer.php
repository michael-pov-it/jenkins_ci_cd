<?php

// Set Kiev timezone
date_default_timezone_set('Europe/Kiev');

// Show current time in Kiev
echo "<footer class='container'>";
echo "******************<br/><div class='now'>";
echo "Now in Ukraine: ";
echo date("l jS \of F Y h:i:s A\n");
echo "</div><div class='build_info'>";
include_once('build.php');
?>
</div></footer>
<script>
(function($) {
    
    var expand = $('.accordion > ul.col');
    var exp = $('h3.exp');
    var dark = $('.dark_mode a');

    expand.hide();
    exp.click(function() {
      expand.show();
    });

    dark.click(function(e) {
      e.preventDefault();
      $('body').toggleClass('dark');
    })
  
  })(jQuery);
</script>
</body></html>
