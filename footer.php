<script>
function ready(fn) {
  if (document.attachEvent ? document.readyState === "complete" : document.readyState !== "loading"){
    fn();
  } else {
    document.addEventListener('DOMContentLoaded', fn);
  }
}
function selectStackableBlock() {
  for ( let i = 0; i < 5; i++ ) {
    if ( wp.data.select( 'core/editor' ).getBlocks()[ i ] ) {
      const name = wp.data.select( 'core/editor' ).getBlocks()[ i ].name;
      if ( name.match( /^ugb\// ) ) {
        const id = wp.data.select( 'core/editor' ).getBlocks()[ i ].clientId;
        wp.data.dispatch( 'core/editor' ).selectBlock( id );
        return;
      }
    }
  }
}
ready( function() {
    setTimeout( function() {
        window.wp.data.select( 'core/editor' ).isEditedPostDirty = function() { 
            return false;
        }

        // Select the block after editor loads.
        window._wpLoadBlockEditor.then( function() {
          selectStackableBlock();
        });
    }, 700 )

    // Modal.
    const modal = document.querySelector( '.stackable-intro-bg' );
    document.body.addEventListener( 'click', function() {
      if ( document.querySelector( '.stackable-intro-bg' ) ) {
        localStorage.setItem( 'stackable-demo-intro', 1 );
        document.body.removeChild( modal );
        selectStackableBlock();
      }
    } )

    if ( ! localStorage.getItem('stackable-demo-intro') && document.querySelector( '.stackable-intro-bg' ) ) {
      modal.classList.remove( 'hide' );
    } else {
      document.body.removeChild( modal );
    }

} )
</script>

<div class="stackable-intro-bg hide">
  <div class="stackable-intro-wrapper">
    <a class="stackable-intro-close" href="#">
      <svg viewBox="0 0 28.3 28.3" fill="#fff">
        <path d="M52.4-166.2c3.2,0,3.2-5,0-5C49.2-171.2,49.2-166.2,52.4-166.2L52.4-166.2z" />
        <path d="M16.8,13.9L26.9,3.8c0.6-0.6,0.6-1.5,0-2.1s-1.5-0.6-2.1,0L14.7,11.8L4.6,1.7C4,1.1,3.1,1.1,2.5,1.7s-0.6,1.5,0,2.1l10.1,10.1L2.5,24c-0.6,0.6-0.6,1.5,0,2.1c0.3,0.3,0.7,0.4,1.1,0.4s0.8-0.1,1.1-0.4L14.7,16l10.1,10.1c0.3,0.3,0.7,0.4,1.1,0.4s0.8-0.1,1.1-0.4c0.6-0.6,0.6-1.5,0-2.1L16.8,13.9z" />
      </svg>
    </a>
    <img class="stackable-logo" src="<?php echo get_stylesheet_directory_uri() . '/images/logo.png' ?>" alt="Stackable Logo"/>
    <h3>Welcome to Stackable Premium Demo</h3>
    <p>Use this demo to check out all options for Premium blocks. Click on any sample block then try out different block options on the inspector (right side)</p>
    <p>This demo is a test run for the <strong>back end only</strong> so saving is disabled.</p>
    <p>Enjoy!</p>
  </div>
</div>
<?php

wp_footer();
