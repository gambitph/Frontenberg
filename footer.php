<script>
function ready(fn) {
  if (document.attachEvent ? document.readyState === "complete" : document.readyState !== "loading"){
    fn();
  } else {
    document.addEventListener('DOMContentLoaded', fn);
  }
}
ready( function() {
    setTimeout( function() {
        window.wp.data.select( 'core/editor' ).isEditedPostDirty = function() { 
            return false;
        }
    }, 1 )
} )
</script>
<?php

wp_footer();
