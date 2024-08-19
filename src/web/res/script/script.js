"use strict";

//alert( 'Just testing...' );

var WINDOW_SIZE_COOKIE = 'sz';

var TITLE_HEADING_LINK = 'Click here to link to this heading.';

(function() {

  //var canonical_domain = "www.inthelabwithjayjay.com";
  var canonical_domain = window.APP_CANONICAL_DOMAIN || "www.inthelabwithjayjay.com";
  var current_domain = window.location.hostname;

  console.log( 'canonical_domain: ' + canonical_domain );
  console.log( 'current_domain: ' + current_domain );

  if ( current_domain === canonical_domain ) { return; }

  // 2024-07-29 JJ5 - redirect to the canonical domain, preserving the path and query parameters
  //
  var new_url = window.location.protocol + "//" + canonical_domain + window.location.pathname + window.location.search;

  console.log( 'new_url: ' + new_url );

  if ( window.DEV ) { return; }

  window.location = new_url;

})();

// 2024-06-29 jj5 - 'DOMContentLoaded' happens before 'load'...
//
document.addEventListener( 'DOMContentLoaded', handle_content_loaded );
window.addEventListener( 'load', handle_window_load );
window.addEventListener( 'resize', handle_window_resize );
document.addEventListener( 'click', handle_document_click );
window.addEventListener( 'hashchange', handle_hashchange );
document.addEventListener( 'keydown', handle_keydown );
//window.addEventListener( 'error', handle_error );

function handle_error( ev ) {
  console.error("Error message: " + ev.message);
  console.error("Source: " + ev.filename);
  console.error("Line number: " + ev.lineno);
  console.error("Column number: " + ev.colno);
  console.error("Error object: " + ev.error);
  // 2024-07-05 jj5 - return true to suppress the default browser error handler...
  return true;
}

function is_focus_on_input() {

  const active = document.activeElement;

  return active.tagName === 'INPUT' || active.tagName === 'TEXTAREA';

}

function handle_keydown( ev ) {

  console.log( ev.key );

  // 2024-07-05 jj5 - Thank You, GitHub Copilot! :)
  //window.location.href = 'https://www.youtube.com/watch?v=ZnHmskwqCCQ';

  //ev.shiftKey;
  if ( ev.ctrlKey || ev.altKey || ev.metaKey ) { return; }

  if ( is_focus_on_input() ) { return; }

  // 2024-07-05 jj5 - support for link to top of page...
  //
  if ( ev.key === 'o' || ev.key === 'O' || ev.key === '0' ) {

    window.location = '#';

    return;

  }

  // 2024-07-05 jj5 - support for link to table of contents...
  if ( ev.key === '.' ) {

    window.location = '#contents';

    return;

  }

  if ( typeof URL_BASE !== 'string' ) {

    console.error( 'URL_BASE is not a string' );

    return;

  }

  const spec = {
    '?': '/about.php#shortcuts',
    'h': '/',
    'l': '/#latest',
    '!': '/#costume',
    'i': '/#silly-job-title',
    'm': '/channel.php/@InTheLabWithJayJay#heading',
    '1': '/channel.php/@InTheLabWithJayJay#heading',
    '2': '/channel.php/@ElliotsExtras#heading',
    '5': '/jjcode.php#heading',
    's': '/sponsor.php#heading',
    'e': '/equipment.php#heading',
    'a': '/about.php#heading',
    '3': '/youtube-hacks.php#heading',
    'u': '/support.php#heading',
    'c': '/contact.php#heading',
    'n': '/stats.php#heading',
    'j': '/feature.php/mini-project#heading',
    'k': '/feature.php/maxitronix#heading',
    'v': '/videos.php#videos',
    'b': '/books.php#books',
    'x': '/sitemap.php',
    'r': '/feed.php',
    't': '/blog-template.php#heading',
    'y': '/youtube-template.php#heading',
    'z': '/about.php#software-version',
    'd': '/debug.php'
  };

  for ( const key in spec ) {

    if ( ev.key === key || ev.key === key.toUpperCase() ) {

      window.location = ( URL_BASE + spec[ key ] );

    }
  }
}

function hook_all() {

  // List of all possible DOM events
  const allEvents = [
      "click", "dblclick", "mousedown", "mouseup", "mouseover", "mouseout", "mousemove",
      "keydown", "keypress", "keyup", "change", "input", "submit", "focus", "blur",
      "resize", "scroll", "contextmenu", "select", "copy", "cut", "paste", "wheel",
      "touchstart", "touchmove", "touchend", "touchcancel", "pointerdown", "pointerup",
      "pointermove", "pointerover", "pointerout", "pointerenter", "pointerleave",
      "pointercancel", "drag", "dragstart", "dragend", "dragover", "dragenter", "dragleave",
      "dragexit", "drop"
  ];

  // Event handler function
  function eventHandler(event) {
    //console.log(`Event: ${event.type}, Target: ${event.target}`);
    //console.log(event.target);
  }

  // Subscribe to all events
  allEvents.forEach(event => {
    if ( event !== 'focus' ) { return; }
      document.addEventListener(event, eventHandler, true); // Use capture phase
  });

}

function handle_window_load( ev, el ) {

  //const footer = document.querySelector( 'footer' );
  //footer.innerHTML = '<p>Just testing...</p>';

  log_function_call( 'handle_window_load' );

  el = el ?? this;

  //
  // 2024-06-15 jj5 - this is for links for headings that have an id attribute
  //

  const headings = document.querySelectorAll( 'h1[id], h2[id], h3[id], h4[id], h5[id], h6[id]' );

  headings.forEach( heading => {

    const id = heading.getAttribute( 'id' );

    if ( ! id ) { return; }

    const space = document.createTextNode( ' ' );

    const link = document.createElement("a");
    link.setAttribute( 'href', `#${id}` );
    link.setAttribute( 'class', 'heading-link' );
    link.setAttribute( 'title', TITLE_HEADING_LINK );
    link.innerHTML = '#';

    //const referenceNode = heading;
    //const newNode = link;
    //referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);

    heading.appendChild( space );
    heading.appendChild( link );

  });

  scroll_into_view();

  if ( MUD_SERVER_VERSION !== MUD_CLIENT_VERSION ) {

    console.error( 'MUD_SERVER_VERSION !== MUD_CLIENT_VERSION' );

  }

  if ( APP_SERVER_VERSION !== APP_CLIENT_VERSION ) {

    console.error( 'APP_SERVER_VERSION !== APP_CLIENT_VERSION' );

  }

};

function handle_window_resize( ev, el ) {

  log_function_call( 'handle_window_resize' );

  el = el ?? this;

  set_window_size_cookie();

}

function set_window_size_cookie() {

  log_function_call( 'set_window_size_cookie' );

  var was_set = is_cookie_set( WINDOW_SIZE_COOKIE );

  // 2024-01-24 jj5 - get window size...
  //
  var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  var height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

  // 2024-01-24 jj5 - create cookie value...
  //
  var cookie_value = width + 'x' + height;

  // 2024-01-24 jj5 - calculate an expiry date, 10 years from now...
  //
  var d = new Date();
  d.setTime( d.getTime() + ( 10 * 356 * 24 * 60 * 60 * 1000 ) ); // 10 years in milliseconds
  var expires = 'expires=' + d.toUTCString();

  // 2024-01-24 jj5 - set cookie with window size and expirty date...
  //
  document.cookie = WINDOW_SIZE_COOKIE + '=' + cookie_value + ';' + expires + ';path=/';

  // 2024-01-27 jj5 - if we've just added this cookie for the first time, refresh the page...
  //
  // 2024-01-27 jj5 - THINK: is this playing with fire? could we go into an infinite loop?
  //
  if ( ! was_set ) {

    // 2024-01-27 jj5 - if it wasn't set, but now it is set, we assume it has applied and we can reload...
    //
    if ( is_cookie_set( WINDOW_SIZE_COOKIE ) ) {

      return document.location.reload();

    }
  }

  if ( ! DEBUG ) { return; }

  var sz = document.getElementById( WINDOW_SIZE_COOKIE );

  if ( ! sz ) {

    sz = document.createElement( 'div' );

    sz.id = WINDOW_SIZE_COOKIE;
    sz.style.position = 'fixed';
    sz.style.bottom = 0;
    sz.style.right = 0;
    sz.style.padding = '1rem';
    sz.style.color = 'red';
    sz.style.backgroundColor = 'white';

    document.body.appendChild( sz );

  }

  var responsive_category = null;

  if ( width >= 1920 ) {

    responsive_category = 'rc-1920';

  }
  else if ( width >= 1280 ) {

    responsive_category = 'rc-1280';

  }
  else if ( width >= 640 ) {

    responsive_category = 'rc-0640';

  }
  else if ( width >= 320 ) {

    responsive_category = 'rc-0320';

  }
  else {

    responsive_category = 'rc-base';

  }

  sz.innerHTML = responsive_category + ' | ' + cookie_value;

  //console.log( sz );

}

function is_cookie_set( cookie_name ) {

  var cookies = document.cookie.split( ';' );

  for ( var i = 0; i < cookies.length; i++ ) {

    var parts = cookies[ i ].split( '=' );

    if ( cookie_name === parts[ 0 ].trim() ) { return true; }

  }

  return false;

}

function handle_document_click( ev, el ) {

  log_function_call( 'handle_document_click' );

  el = el ?? this;

  close_menu();

}

function close_menu() {

  log_function_call( 'close_menu' );

  document.getElementById( 'popover-grid' ).classList.remove( 'popover-open' );

}

function handle_hamburger_click( ev, el ) {

  log_function_call( 'handle_hamburger_click' );

  el = el ?? this;

  ev.stopPropagation();

  toggle_menu();

}

function toggle_menu() {

  log_function_call( 'toggle_menu' );

  document.getElementById( 'popover-grid' ).classList.toggle( 'popover-open' );

}

function handle_content_loaded( ev, el ) {

  log_function_call( 'handle_content_loaded' );

  el = el ?? this;

  make_toc();

  set_window_size_cookie();

  load_iframes();

}

function handle_hashchange( ev, el ) {

  var id = window.location.hash.substring( 1 );

  //console.log( id );

  var targetElement = document.getElementById( id );

  if ( ! targetElement ) { return; }

  flash( targetElement );

}

function flash( element ) {

  element.classList.add('flash');

  // Remove the class after a short delay to reset the element
  setTimeout(
    function() {
      element.classList.remove('flash');
    },
    750  // Duration should match the CSS transition duration
  );

}

function load_iframes() {

  // 2024-01-26 jj5 - don't continually load the iframes during development...
  //
  if ( DEBUG ) { return; }

  log_function_call( 'load_iframes' );

  var observer = new IntersectionObserver(

    function( entry_list ) {

      for ( var i = 0; i < entry_list.length; i++ ) {

        var entry = entry_list[ i ];

        if ( ! entry.isIntersecting ) { continue; }

        var iframe = entry.target;

        if ( iframe.getAttribute( 'src' ) !== null ) { continue; }

        if ( iframe.getAttribute( 'src' ) === iframe.getAttribute( 'data-src' ) ) { continue; }

        iframe.setAttribute( 'src', iframe.getAttribute( 'data-src' ) );

      }
    },
    {
      threshold: [ 0 ]
    }
  );

  var iframe_list = document.getElementsByTagName( 'iframe' );

  for ( var i = 0; i < iframe_list.length; i++ ) {

    var iframe = iframe_list[ i ];

    if ( iframe.getAttribute( 'src' ) !== null ) { continue; }

    observer.observe( iframe );

  }
}

function scroll_into_view() {

  //console.log( 'scroll_into_view()' );

  //if ( is_john() ) { alert( 'Hi John!' ); }

  var fragment = window.location.hash;

  // 2024-01-27 jj5 - just make sure we're scrolled to the right place... what can happen is that we automatically
  // reload the page when we set the window size cookie, and then we lose the scroll position. so we just make sure
  // we're scrolled to the right place when the window loads...
  //
  if ( fragment ) {

    //console.log( 'found fragment: ' + fragment );

    // 2024-01-27 jj5 - remove the "#" at the beginning of the URL fragment...
    //
    var id = fragment.substring( 1 );

    var element = document.getElementById( id );

    if ( element ) {

      var target = document.querySelector( ':target' );

      // 2024-07-05 jj5 - OLD: we just always scroll into view now, I think taht's better...
      /*
      if ( element !== target ) {

        //console.log( 'scrolling to element with id: ' + id );

        element.scrollIntoView();

      }
      */

      element.scrollIntoView();

      flash( element );

    }
  }
}

function is_john() {

  try {

    return ( typeof IS_JOHN ) === 'boolean' && IS_JOHN === true;

  }
  catch ( ex ) {

    return false;

  }
}

function log_function_call( fn ) {

  if ( ! DEBUG ) { return false; }

  //console.log( fn + '()' );

  return true;

}

function make_toc() {

  const default_h1_id = 'heading';

  function extract_hier() {

    const root = { parent: null, level: 0, text: 'root', node: null, children: [] };

    let curr = root;

    traverse( document.body, node => {

      const name = node.nodeName;

      if ( ! /^H[1-6]$/.test( name ) ) { return; }

      const level = parseInt( name[ 1 ] );

      while ( curr.level >= level ) { curr = curr.parent; }

      if ( ! node.getAttribute( 'id' ) ) {

        if ( level === 1 ) {

          if ( ! document.getElementById( default_h1_id ) ) {

            node.setAttribute( 'id', default_h1_id );

          }
        }
      }

      const child = {
        parent: curr,
        level: level,
        text: node.textContent.trim(),
        node: node,
        id: node.getAttribute( 'id' ),
        children: []
      };

      curr.children.push( child );

      curr = child;

    });

    return root;

  }

  function traverse( node, callback ) {

    callback( node );

    node.childNodes.forEach( child => traverse( child, callback ) );

  }

  function add_node( node ) {

    const li = document.createElement( 'li' );

    let element = null;

    if ( node.id ) {

      element = document.createElement( 'a' );
      element.setAttribute( 'href', '#' + node.id );
      element.setAttribute( 'title', TITLE_HEADING_LINK );
      element.textContent = node.text;

    }
    else {

      if ( node.children.length == 0 ) { return li; }

      element = document.createElement( 'span' );
      element.textContent = node.text;

    }

    li.appendChild( element );

    if ( node.children.length ) {

      const ul = document.createElement( 'ul' );

      node.children.forEach( function ( child ) {

        const child_li = add_node( child );

        if ( child_li.childNodes.length ) {

          ul.appendChild( child_li );

        }
      });

      li.appendChild( ul );

    }

    return li;

  }

  try {

    // 2024-07-03 jj5 - NOTE: we always run this code, even if there is no 'contents_div' element, because this code will
    // make sure the 'id' attribute is set on the first 'h1' element, if it is missing. this is important because then
    // it will get a '#' link added to it and we want that to be consistent across the site.

    const root_ul = document.createElement( 'ul' );

    const root = extract_hier().children[ 0 ];

    const root_li = add_node( root );

    root_ul.appendChild( root_li );

    const div = document.getElementById( 'contents_div' );

    if ( ! div ) { return; }

    div.innerHTML = '';

    div.appendChild( root_ul );

  }
  catch ( ex ) {

    console.error( ex );

  }
}

function get_cookie( name ) {

  let parts = document.cookie.split( ';' );

  for ( let i = 0; i < parts.length; i++ ) {

    let pair = parts[ i ].split( '=' );

    if ( name == pair[ 0 ].trim() ) {

      return decodeURIComponent( pair[ 1 ] );

    }
  }

  return null;

}

function copy_preceding_textarea_to_clipboard( el, ev ) {

  var textarea = el.previousElementSibling;

  while ( textarea && textarea.tagName !== 'TEXTAREA' ) {

    textarea = textarea.previousElementSibling;

  }

  if ( ! textarea) { return; }

  textarea.select();
  textarea.setSelectionRange(0, 99999); // For mobile devices

  // Copy the text to the clipboard
  document.execCommand( 'copy' );

}
