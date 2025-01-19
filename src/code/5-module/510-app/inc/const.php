<?php

define(
  'APP_URL_BASE',
  'https://www.inthelabwithjayjay.com/in-the-lab'
);

define(
  'LOGO_URL',
  'https://der3syffk4l6q.cloudfront.net/in-the-lab/res/img.php/logo.png?v=' . get_resource_version( 'logo.png' ),
);

define( 'VIDEO_COUNT', 5 );

define( 'CURL_USER_AGENT', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0' );

define( 'NULL_AFFILIATE_NAME', 'Unspecified' );

define( 'DATE_FORMAT', 'l, F j, Y' );

define(
  'PRODUCT_CODE_REGEX',
  [
    '|https://www\.amazon\.com.*/dp/([^/]+)|',
    '|https://www\.amazon\.com.*/gp/product/([^/]+)|',
    '|https://www\.amazon\.com\.au.*/dp/([^/]+)|',
    '|https://www\.amazon\.com\.au.*/gp/product/([^/]+)|',
    '|https://www\.ebay\.com/itm/(\d+)|',
    '|https://www\.ebay\.com\.au/itm/(\d+)|',
    '|https://www\.aliexpress\.com/item/([\d]+)\.html|',
  ]
);

define(
  'VENDOR_HOST_MAP',
  [
    'www.aliexpress.com' => 'AliExpress',
    'www.amazon.com' => 'Amazon USA',
    'www.amazon.com.au' => 'Amazon Australia',
    'www.ebay.com' => 'eBay USA',
    'www.ebay.com.au' => 'eBay Australia',
    'au.element14.com' => 'element14 Australia',
  ]
);

define(
  'EXTENSION_CONTENT_TYPE_MAP',
  [
    'image/png'   => 'png',
    'image/jpeg'  => 'jpg',
    'image/jpg'   => 'jpg',
    'image/webp'  => 'webp',
    'image/gif'   => 'gif',
  ]
);

define(
  'NUMBER_MAP',
  [
    'zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten',
    'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen',
    'nineteen', 'twenty',
  ]
);

// 2024-01-24 jj5 - this will return the maximum quality (if available)
//
define( 'YOUTUBE_THUMBNAIL_MAXIMUM_RESOLUTION', 'maxresdefault' );

// 2024-01-24 jj5 - standard definition is 640x480...
//
define( 'YOUTUBE_THUMBNAIL_STANDARD_DEFINITION', 'sddefault' );

// 2024-01-24 jj5 - high quality is 480x360...
//
define( 'YOUTUBE_THUMBNAIL_HIGH_QUALITY', 'hqdefault' );

// 2024-01-24 jj5 - medium quality is 320x180...
//
define( 'YOUTUBE_THUMBNAIL_MEDIUM_QUALITY', 'mqdefault' );

// 2024-01-24 jj5 - default is 120x90...
//
define( 'YOUTUBE_THUMBNAIL_DEFAULT', 'default' );




define( 'MAXITRONIX_10', '10in1' );
define( 'MAXITRONIX_20', '20in1' );
define( 'MAXITRONIX_30', '30in1' );
define( 'MAXITRONIX_59', '50in1' );
define( 'MAXITRONIX_60', '60in1' );
define( 'MAXITRONIX_130', '130in1' );
define( 'MAXITRONIX_200', '200in1' );
define( 'MAXITRONIX_300', '300in1' );
define( 'MAXITRONIX_500', '500in1' );

