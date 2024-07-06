

/* helper.js: */


"use strict";

/****************************************************************************\
 *
 * 2018-05-01 jj5 - this adds support for some handy stuff I use often...
 *
\****************************************************************************/

/*

  To use add this just before it's required:

    <script src="https://www.staticmagic.net/global/helper.js"></script>

*/

function $$( id ) {

  return document.getElementById( id );

}

// 2018-11-11 jj5 - SEE: StackOverflow htmlEscape():
// https://stackoverflow.com/a/7124052/868138
function henc( input ) {

  return String( input ).
    replace( /"/g, '&quot;' ).
    replace( /&/g, '&amp;' ).
    replace( /'/g, '&#39;' ).
    replace( /\//g, '&#47;' ).
    replace( /</g, '&lt;' ).
    replace( />/g, '&gt;' );

}

// 2018-11-11 jj5 - SEE: StackOverflow htmlUnescape():
// https://stackoverflow.com/a/7124052/868138
function hdec( input ) {

  // 2018-11-11 jj5 - TODO: this should support '&#ab;' and '&#xab;' for all
  // valid values...

  return String( input ).

    replace( /&quot;/gi, '"' ).
    replace( /&#34;/gi,  '"' ).
    replace( /&#x22;/gi, '"' ).

    replace( /&amp;/gi,  '&' ).
    replace( /&#38;/gi,  '&' ).
    replace( /&#x26;/gi, '&' ).

    replace( /&apos;/gi, "'" ).
    replace( /&#39;/gi,  "'" ).
    replace( /&#x27;/gi, "'" ).

    replace( /&#47;/gi,  '/' ).
    replace( /&#x2F;/gi, '/' ).

    replace( /&lt;/gi,   '<' ).
    replace( /&#60;/gi,  '<' ).
    replace( /&#x3C;/gi, '<' ).

    replace( /&gt;/gi,   '>' ).
    replace( /&#62;/gi,  '>' ).
    replace( /&#x3E;/gi, '>' );

}

function format_duration( ms, inc_zero, inc_unit ) {

  if ( typeof inc_zero !== 'boolean' ) { inc_zero = !!inc_zero; }

  if (
    typeof inc_unit !== 'object' ||
    ! inc_unit instanceof Array
  ) {

    inc_unit = [ 'd', 'h', 'm', 's' ];

  }

  var sign = ms < 0 ? '-' : '';

  ms = Math.abs( ms );

  var s = ms / 1000;
  var m = s / 60;
  var h = m / 60;
  var d = h / 24;

  s = s % 60;
  m = m % 60;
  h = h % 24;

  s = Math.floor( s );
  m = Math.floor( m );
  h = Math.floor( h );
  d = Math.floor( d );

  var result = [];

  if ( inc_unit.indexOf( 'd' ) !== -1 && ( inc_zero || d > 0 ) ) {

    result.push( d + 'd' );

  }
  else {

    h += d * 24;

  }

  if ( inc_unit.indexOf( 'h' ) !== -1 && ( inc_zero || h > 0 ) ) {

    result.push( h + 'h' );

  }
  else {

    m += h * 60;

  }

  if ( inc_unit.indexOf( 'm' ) !== -1 && ( inc_zero || m > 0 ) ) {

    result.push( m + 'm' );

  }
  else {

    s += m * 60;

  }

  if ( inc_unit.indexOf( 's' ) !== -1 && ( inc_zero || s > 0 ) ) {

    result.push( s + 's' );

  }

  return result.length ? sign + result.join( ' ' ) : '';

}




/* table.js: */


"use strict";

/****************************************************************************\
 *
 * 2018-05-01 jj5 - this adds support for table sorting.
 *
\****************************************************************************/

/*

  To use add this to your <html>, usually just before </body>:

    <script src="https://www.staticmagic.net/global/table.js"></script>

  Then add class="sortable" to the <table> elements you want sorting on.

  Note that you must define <thead> and <tbody> sections for this script to
  work.

  You might also like to use in conjunction with the sister library table.css:

    <link
      rel="stylesheet"
      type="text/css"
      href="https://www.staticmagic.net/global/table.css">

*/

(function() {

  function get_text( input ) {

    var result = new String( input ).
      valueOf().
      replace( /\xa0/g, ' ' ).
      replace( '/[\s]+/g', ' ' );

    //console.log( input, result );

    return result;

  }

  function get_cell_datatype( tr, idx ) {

    var td = tr.children[ idx ];

    if ( typeof td.dataset.datatype !== 'undefined' ) {

      return td.dataset.datatype;

    }

    var tbody = tr.parentElement;

    var all_numeric = true;
    var all_datetime = true;
    var all_version = true;

    for ( var tr_i = 0, tr_l = tbody.children.length; tr_i < tr_l; tr_i++ ) {

      var tr_2 = tbody.children[ tr_i ];

      //console.log( 'tr_2', tr_2 );

      var td_2 = tr_2.children[ idx ];

      var text = get_text( td_2.innerText || td.textContent );

      if ( text === '' ) { continue; }

      if ( all_numeric ) {

        var parts = text.trim().split( /\s/ );

        var str = parts[ 0 ].replace( /[\$,%]/g, '' );

        if ( str === '' ) { str = '0'; }

        var value = parseFloat( str );

        //console.log( str, value, parts );

        if ( isNaN( value ) ) { all_numeric = false; }

        if ( value != str ) { all_numeric = false; }

      }

      if ( all_datetime ) {

        var value = Date.parse( text );

        if ( isNaN( value ) ) { all_datetime = false; }

      }

      if ( all_version ) {

        if ( text.match( /^v[0-9\.\-]+$/ ) ) {

          var parts = text.substring( 1 ).split( /[\.\-]/ );

          for ( var i in parts ) {

            var part = parseInt( parts[ i ] );

            if ( isNaN( part ) ) {

              all_version = false;

              break;

            }
          }
        }
        else {

          all_version = false;

        }
      }
    }

    var datatype = 'string';

    if ( all_numeric ) { datatype = 'number'; }

    if ( all_datetime ) { datatype = 'datetime'; }

    if ( all_version ) { datatype = 'version'; }

    td.dataset.datatype = datatype;

    return datatype;

  }

  function get_cell_value( tr, idx ) {

    var datatype = get_cell_datatype( tr, idx );

    var td = tr.children[ idx ];

    var text = get_text( td.innerText || td.textContent );

    switch ( datatype ) {

    case 'number' :

      // 2024-07-06 jj5 - NEW: support for 'data-sort-value' attribute...
      //
      if ( td.hasAttribute( 'data-sort-value' ) ) {

        return parseFloat( td.getAttribute( 'data-sort-value' ) );

      }

      var parts = text.split( /\s/ );

      var value = parts[ 0 ].replace( /[\$,]+/g, '' );

      //return value ? parseFloat( value ) : 0;
      return value ? parseFloat( value ) : null;

    case 'datetime' :

      //console.log( 'text.length', text.length );

      // 2024-07-06 jj5 - NEW: support for 'data-sort-value' attribute...
      //
      if ( td.hasAttribute( 'data-sort-value' ) ) {

        return td.getAttribute( 'data-sort-value' );

      }

      if ( text ) {

        var result = Date.parse( text );

        //console.log( text, result );

        return result;

      }

      //return 0;
      return null;

    case 'version' :

      // 2024-07-06 jj5 - NEW: support for 'data-sort-value' attribute...
      //
      if ( td.hasAttribute( 'data-sort-value' ) ) {

        return parseFloat( td.getAttribute( 'data-sort-value' ) );

      }

      var result = text.substring( 1 ).split( /[\.\-]+/ );

      for ( var i in result ) {

        result[ i ] = parseInt( result[ i ] );

      }

      return result;

    default :
    
      // 2024-07-06 jj5 - NEW: support for 'data-sort-value' attribute...
      //
      if ( td.hasAttribute( 'data-sort-value' ) ) {

        return parseFloat( td.getAttribute( 'data-sort-value' ) );

      }

      return text;

    }
  }

  //
  // 2018-05-01 jj5 - SEE: Stolen from StackOverflow:
  // https://stackoverflow.com/a/49041392/868138
  //

  function comparer( idx, asc ) {

    return function( a, b ) {

      return comparer_inner(
        get_cell_value( asc ? a : b, idx ),
        get_cell_value( asc ? b : a, idx )
      );

    }
  };

  function comparer_inner( v1, v2 ) {

    if ( v1 instanceof Array && v2 instanceof Array) {

      var versions = get_versions( v1, v2 );

      v1 = versions.v1;
      v2 = versions.v2;

      for ( var i in v1 ) {

        var v1_val = v1[ i ];
        var v2_val = v2[ i ];

        //console.log( 'v1_val', v1_val );
        //console.log( 'v2_val', v2_val );

        var result =
          //typeof v1_val !== 'undefined' &&
          //typeof v2_val !== 'undefined' &&
          ! isNaN( v1_val ) &&
          ! isNaN( v2_val ) ?
            v1_val - v2_val :
            v1_val.toString().localeCompare( v2_val );

        if ( result ) { return result; }

      }

      return 0;

    }

    if ( v1 === null ) {

      if ( v2 === null ) { return 0; }

      return -1;

    }

    if ( v2 === null ) {

      return 1;

    }

    //console.log( 'v1', v1, typeof v1 );
    //console.log( 'v2', v2, typeof v2 );

    var v1_type = typeof v1;
    var v2_type = typeof v2;

    //console.log( 'v1 type', v1_type );
    //console.log( 'v2 type', v2_type );

    if ( v1_type !== v2_type ) {

      throw new Error( 'Types for v1 and v2 differ.' );

    }

    switch ( v1_type ) {

      case 'number' :

        return v1 - v2;

      case 'string' :

        //console.log( 'v1', v1 );
        //console.log( 'v2', v2 );

        return v1.localeCompare( v2 );

      default :

        throw new Error( 'Unsupported data type "' + v1_type + '".' );

    }
  }

  function get_versions( v1, v2 ) {

    var len = v1.length > v2.length ? v1.length : v2.length;
    var v1_result = [];
    var v2_result = [];

    for ( var i = 0; i < len; i++ ) {

      var v1_val = null;
      var v2_val = null;

      if ( typeof v1[ i ] !== 'undefined' ) { v1_val = v1[ i ]; }
      if ( typeof v2[ i ] !== 'undefined' ) { v2_val = v2[ i ]; }

      v1_result.push( v1_val );
      v2_result.push( v2_val );

    }

    return {
      v1: v1_result,
      v2: v2_result
    };

  }

  window.addEventListener( 'load', function() {

    Array.from(
      document.querySelectorAll( 'th' )
    ).forEach(
      function( th ) {
        th.addEventListener( 'click', function() {

          if ( th.colSpan !== 1 ) {

            console.log( 'colspan unsupported...' );
            return;

          }

          var index = th.getAttribute( 'data-sort-index' );

          if ( index !== null ) {

            index = parseInt( index );

          }
          else {

            index = Array.from(
              th.parentNode.children
            ).
            indexOf( th );

          }

          // 2019-06-17 jj5 - make default sort 'descending' (negated below)...
          //
          if ( typeof this.asc !== 'boolean' ) { this.asc = true; }

          //console.log( th );
          var table = th.closest('table');
          if ( ! table.classList.contains( 'sortable' ) ) { return; }
          //console.log( table );
          var tbody = table.tBodies[ 0 ];
          Array.from(
              tbody.querySelectorAll( 'tr' )
          ).
          sort(
            comparer(
              index,
              this.asc = ! this.asc
            )
          ).
          forEach(
            function( tr ) { tbody.appendChild(tr) }
          );
        });
      }
    );

  });

})();



