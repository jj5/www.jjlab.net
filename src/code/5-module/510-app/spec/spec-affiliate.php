<?php

// 2024-08-07 jj5 - space in the YouTube description is at a premium, so we only want to include equipment that we
// can link to with an affiliate link. At the moment that means eBay and AliExpress.

global $g_ad_list, $g_ignore_list;

$g_ad_list = [
  'https://www.ebay.com/',
  'https://www.ebay.com.au/',
  'https://www.aliexpress.com/',
];

$g_ignore_list = [
  'https://www.amazon.com/',
  'https://www.amazon.com.au/',
  'https://www.altronics.com.au/',
  'https://www.bunnings.com.au/',
  'https://www.dyson.com/',
  'https://www.wasdkeyboards.com/',
  'https://au.element14.com/',
  'https://www.peakelec.co.uk/',
  'https://rockwelltools.com.au/',
  'https://www.jaycar.com.au/',
  'https://www.opti-ups.com/',
  'https://eevblog.store/',
];

affiliate(
  affiliate_name( 'Amazon USA' ),
  affiliate_url( 'https://www.amazon.com/' ),
);

affiliate(
  affiliate_name( 'Amazon Australia' ),
  affiliate_url( 'https://www.amazon.com.au/' ),
);

affiliate(
  affiliate_name( 'eBay USA' ),
  affiliate_url( 'https://www.ebay.com/' ),
);

affiliate(
  affiliate_name( 'eBay Australia' ),
  affiliate_url( 'https://www.ebay.com.au/' ),
);

affiliate(
  affiliate_name( 'AliExpress' ),
  affiliate_url( 'https://www.aliexpress.com/' ),
);

affiliate(
  affiliate_name( 'Altronics' ),
  affiliate_url( 'https://www.altronics.com.au/' ),
);

affiliate(
  affiliate_name( 'Jaycar' ),
  affiliate_url( 'https://www.jaycar.com.au/' ),
);

affiliate(
  affiliate_name( 'Bunnings' ),
  affiliate_url( 'https://www.bunnings.com.au/' ),
);

affiliate(
  affiliate_name( 'Dyson' ),
  affiliate_url( 'https://www.dyson.com/' ),
);

affiliate(
  affiliate_name( 'WASD Keyboards' ),
  affiliate_url( 'https://www.wasdkeyboards.com/' ),
);

affiliate(
  affiliate_name( 'archive.org' ),
  affiliate_url( 'https://www.archive.org/' ),
);

affiliate(
  affiliate_name( 'Wiley' ),
  affiliate_url( 'https://www.wiley.com/' ),
);

affiliate(
  affiliate_name( 'element14' ),
  affiliate_url( 'https://au.element14.com/' ),
);

affiliate(
  affiliate_name( 'Peak Electronic Design' ),
  affiliate_url( 'https://www.peakelec.co.uk/' ),
);

affiliate(
  affiliate_name( 'EEVblog' ),
  affiliate_url( 'https://eevblog.store/' ),
);

affiliate(
  affiliate_name( 'RownFusny' ),
  affiliate_url( 'https://rownfusny.com/' ),
);
