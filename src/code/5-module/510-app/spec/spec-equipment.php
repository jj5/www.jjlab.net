<?php

// 2024-01-16 JJ5 - NOTE: put new equipment at bottom of file.

equipment_class_alias( EquipmentClass::WRENCH, 'spanner' );

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-08-03 jj5 - equipment...
//

equipment(
  equipment_date( '2024-01-13' ),
  equipment_icon( 'https://d297fd4gt7t5lv.cloudfront.net/file/2023-11-03-173435/MSO5074-70MHz-4-Channel-MIXED-SIGNAL-OSCILLOSCOPES.png' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.rigolna.com/products/digital-oscilloscopes/MSO5000/MSO5074/' ),
      link_text       ( 'MSO5000 Mixed Signal Oscilloscopes | RIGOL - RIGOL Technologies' ),
    ),
    manufacturer_name ( 'Rigol' ),
    model_name        ( 'MSO5074' ),
    EquipmentFeature::MIXED_SIGNAL_OSCILLOSCOPE,
    EquipmentFeature::SPECTRUM_ANALYZER,
    EquipmentFeature::LOGIC_ANALYZER,
    EquipmentFeature::PROTOCOL_ANALYZER,
    EquipmentFeature::FUNCTION_GENERATOR,
    EquipmentFeature::VOLTMETER,
    EquipmentFeature::COUNTER_TOTALIZER,
    EquipmentConnectivity::BNC,
    EquipmentConnectivity::ETHERNET,
    EquipmentConnectivity::USB,
    EquipmentAttribute::BENCH_EQUIPMENT,
    EquipmentAttribute::TEST_EQUIPMENT,
    EquipmentAttribute::HEART,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Rigol' ),
    model_name        ( 'MSO5074' ),
    equipment_type    ( 'Mixed Signal Oscilloscope' ),
    category          ( 'Mixed Signal Oscilloscope' ),
    category          ( 'Oscilloscope' ),
    category          ( 'Spectrum Analyzer' ),
    category          ( 'Logic Analyzer' ),
    category          ( 'Protocol Analyzer' ),
    category          ( 'Signal Generator' ),
    category          ( 'Waveform Generator' ),
    category          ( 'Voltmeter' ),
    category          ( 'Counter/Totalizer' ),
    category          ( 'Meter' ),
    category          ( 'Bench Equipment' ),
    category          ( 'Test Equipment' ),
    category          ( 'BNC' ),
    category          ( 'USB' ),
    category          ( '❤️' ),
    manufacturer_link (
      link_href       ( 'https://www.rigolna.com/products/digital-oscilloscopes/MSO5000/MSO5074/' ),
      link_text       ( 'MSO5000 Mixed Signal Oscilloscopes | RIGOL - RIGOL Technologies' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Rigol_MSO5074' ),
  warning       ( 'I have linked an MSO5072 option as well, I have an MSO5074' ),
  see_also      ( 'Rigol PLA2216 Logic Probe' ),
  see_also      ( 'Rigol PLA2216 Compatible Logic Probe' ),
  web_link(
    link_text   ( 'See the research I did before buying my Rigol MSO5074' ),
    link_href   ( 'https://www.jj5.net/rigol/' ),
  ),
  search_url    ( 'https://www.amazon.com/s?k=Rigol+MSO5074+Mixed+Signal+Oscilloscope' ),
  search_url    ( 'https://www.amazon.com.au/s?k=Rigol+MSO5074+Mixed+Signal+Oscilloscope' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_sop=15&_nkw=Rigol+MSO5074+Mixed+Signal+Oscilloscope' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/195572945470?hash=item2d890e523e:g:nq8AAOSwsg9j0t20&amdata=enc%3AAQAIAAAA4MjuBQq3oPNyUnLRImZKkRNYahVqlnvj65Ck33A34W%2BO9TH5UT8%2Fhz2gB4%2BvN5JcYwZF%2Boale6B2IFigSYPrJtX%2BwBkRDcjUYorYiX8OUPSNVPZa58uxHDsPibVCnf%2BAEe26mk%2Fhe3%2BXdsm4jFu5lrFIuC8YSGdp7V1qjLn8m6Xg97JdGpnvfFkSnrTVH5ppxWwFlYXlf%2FQ0AOlZtnw%2FxiGIEU0DfVDn4GTjj02LN%2FUp%2FP2o8PAiK5VFviviVrRc%2B8DQ8vg0GC3nQbYaUw9Sxng2g77dv16WF3dFi1eHJpZW%7Ctkp%3ABk9SR9r244OhYw' ),
    affiliate_url ( 'https://ebay.us/zWteZL' ),
    listing_name  ( 'RIGOL MSO5074 70 MHz Mixed Signal Oscilloscope with 4 Analog Channels' ),
    item_price    ( 'US$999.01' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_sop=15&_nkw=Rigol+MSO5074+Mixed+Signal+Oscilloscope' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-MSO5074.html?spm=a2g0o.productlist.search.0' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006055915176.html?spm=a2g0o.productlist.main.1.43753789oVKQpN&algo_pvid=894d0714-a960-46d0-a737-dfb67fa0beb6&algo_exp_id=894d0714-a960-46d0-a737-dfb67fa0beb6-0&pdp_npi=4%40dis%21AUD%21632.79%21632.79%21%21%212999.00%212999.00%21%402103200617051031451964814ea606%2112000035525864776%21sea%21AU%214385823938%21&curPageLogUid=uO7ObRb5vJ7F&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DCLlvl7' ),
    listing_name  ( 'Rigol MSO5074 - Four Channel, 70 MHz Digital / Mixed Signal Oscilloscope,and Options MSO5000-BND/2RL/BWOT3' ),
    item_options  ( 'Color: MSO5074' ),
    item_price    ( 'AU$1,688.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006061192673.html?spm=a2g0o.productlist.main.3.43753789oVKQpN&algo_pvid=894d0714-a960-46d0-a737-dfb67fa0beb6&aem_p4p_detail=202401121545454047482242646400002144731&algo_exp_id=894d0714-a960-46d0-a737-dfb67fa0beb6-1&pdp_npi=4%40dis%21AUD%21632.79%21632.79%21%21%212999.00%212999.00%21%402103200617051031451964814ea606%2112000035552175573%21sea%21AU%214385823938%21&curPageLogUid=beebwZPuorKo&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=202401121545454047482242646400002144731_2' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DDNvkO1' ),
    listing_name  ( 'Rigol MSO5072 - Two Channel, 70 MHz Digital / Mixed Signal Oscilloscope,and Options MSO5000-BND/2RL/4CH/BWOT3' ),
    item_options  ( 'Color: MSO5072' ),
    item_price    ( 'AU$1,497.89' ),
    item_shipping ( 'AU$88.70' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005973567034.html?spm=a2g0o.productlist.main.5.43753789oVKQpN&algo_pvid=894d0714-a960-46d0-a737-dfb67fa0beb6&algo_exp_id=894d0714-a960-46d0-a737-dfb67fa0beb6-2&pdp_npi=4%40dis%21AUD%213025.89%212572.01%21%21%2114340.71%2112189.60%21%402103200617051031451964814ea606%2112000035120538284%21sea%21AU%214385823938%21&curPageLogUid=FBff0irKjDdg&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DF8nWoN' ),
    listing_name  ( 'MSO5074 70MHz 4 Channel MIXED SIGNAL OSCILLOSCOPES' ),
    item_price    ( 'AU$2,572.01' ),
    item_shipping ( 'AU$140.77' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006390567090.html?spm=a2g0o.productlist.main.7.43753789oVKQpN&algo_pvid=894d0714-a960-46d0-a737-dfb67fa0beb6&algo_exp_id=894d0714-a960-46d0-a737-dfb67fa0beb6-3&pdp_npi=4%40dis%21AUD%213355.87%213120.96%21%21%212219.20%212063.86%21%402103200617051031451964814ea606%2112000036995721561%21sea%21AU%214385823938%21&curPageLogUid=qYmjKBMJsdr8&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DcJAWgd' ),
    listing_name  ( 'MSO5074 Four Channel digital oscilloscope usb oscilloscopes 70 MHz Signal Oscilloscope' ),
    item_price    ( 'AU$3,120.96' ),
    item_shipping ( 'AU$191.02' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005003245208985.html?spm=a2g0o.order_list.order_list_main.10.6dee1802dqjMux' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.6.6dee1802dqjMux&orderId=8146106352033938' ),
    order_id        ( '8146106352033938' ),
    order_date      ( 'Feb 12, 2022' ),
    order_item_name ( '' ),
    order_options   ( 'Plug Type: EU' ),
    order_price     ( 'AU$1,437.34' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$135.69' ),
  ),
);

equipment(
  equipment_date( '2024-01-13' ),
  equipment_icon( 'https://d297fd4gt7t5lv.cloudfront.net/file/2023-11-03-175518/RIGOL-PLA2216-Logic-Probe-for-MSO5000-Series-Oscilloscopes-Includes-Cable-Leads-and-Grabber-Clips.jpg' ),
  equipment_item(
    manufacturer_name ( 'Rigol' ),
    model_name        ( 'PLA2216' ),
    EquipmentFeature::LOGIC_PROBE,
    EquipmentFeature::CABLE,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Rigol' ),
    model_name        ( 'PLA2216' ),
    equipment_type    ( 'Logic Probe' ),
    category          ( 'Probe' ),
    category          ( 'Accessory' ),
    category          ( 'Attachment' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Rigol_MSO5074' ),
  see_also      ( 'Rigol PLA2216 Compatible Logic Probe' ),
  see_also      ( 'Rigol MSO5074 Mixed Signal Oscilloscope' ),
  search_url    ( 'https://www.amazon.com/s?k=Rigol+PLA2216+Logic+Probe' ),
  search_url    ( 'https://www.amazon.com.au/s?k=Rigol+PLA2216+Logic+Probe' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_sop=15&_nkw=Rigol+PLA2216+Logic+Probe' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/204348481637?hash=item2f941e6065:g:AssAAOSw7FNkb3ka&amdata=enc%3AAQAIAAAA0Pggk4dg%2F4isrNsdCysV2KykM2elb4XRirU3fqq2TBqEndRgYhgEbpfyXD3h8sGe1JTqQoLIxNQfwlz5tJIdPY8cZ6aARkwAWHrI2kaYrmHdeT3869oQQuaeimfFhyBiP2FI1eLek3ouQyF94YoSX5MEcIS%2BfoxE0oeWX%2BwQcsNTC99Snf9psqmhKqTgRf0sqhNNL0Rdo0yC2lhxvZOkzkkhXyZJ4Y54ep0lqmPFU823tREE09Pm48UtMaNTRlTxNvjpJdypzxFyXj8k%2BPqmWOI%3D%7Ctkp%3ABk9SR6iGmYOgYw' ),
    affiliate_url ( 'https://ebay.us/y0PZeg' ),
    listing_name  ( 'RIGOL PLA2216 Logic Analyzer Probe for RIGOL MSO5000' ),
    item_price    ( 'US$443.99' ),
    item_shipping ( 'US$61.20' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/196027311706?hash=item2da423665a:g:04kAAOSw0ChlKCEe&amdata=enc%3AAQAIAAAA0BP1Fl6cNWuLlvItHVYKiQKg88Ycwkr5QslkUdT3YMzbpfP6IC8%2Fj3ZvRb0rp7epYBuLk96c4VdZovB%2BbROAN%2BXTF4xg6ubfU0doC2vF71ytxckHtsqYdV3fmpoIhEb1AYTrup4GKtjRzK7UotwcaBTDurSsAFsmUOJ5ogRAg1sFKftz07o5uw1v%2BZHjdtOHpWA2uphoiJXQYbmFxY1bKRGus%2B61AhU71ppE618i%2BAxlHU3tSGXuJkcYYg0bolqlChUEhkUb4Ku4uxWew6JTjQk%3D%7Ctkp%3ABk9SR6iGmYOgYw' ),
    affiliate_url ( 'https://ebay.us/JcutYD' ),
    listing_name  ( 'Rigol PLA2216-OB Logic Probes' ),
    item_price    ( 'US$443.99' ),
    item_shipping ( 'US$76.40' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_sop=15&_nkw=Rigol+PLA2216+Logic+Probe' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/235384130490?hash=item36cdfccbba:g:Y~kAAOSwBUBloSzI&amdata=enc%3AAQAIAAAA0B2jBpLSMdY%2B%2B1pEvFCtbNEHB2C1fTKnFBhOF4mhpe8hFABDbI%2BtQNWdgxEbAQkEzKadOzcwQfgh5jl1aN3uh21o6XO9Al5cjjByIdoiN9NIf3EvvvbMfDNrCna1MdWOGWNr5Kkg7OfHFBs3vUv1LFMM3Ch252v5Sv6Jjt4xS0ZKyg0G3PXuRt1u8eGkjv90g8JVlxSRCAaNLOt0x7SOAYXtteLmbFihlS13sLxz4mUUkQKYlVaw%2F1M%2BIh0JYpiK%2Fi7yvZcPS95s27wTxMAKECE%3D%7Ctkp%3ABk9SR4CZ6YOgYw' ),
    affiliate_url ( 'https://ebay.us/hPPjig' ),
    listing_name  ( 'Rigol PLA2216 logic probe set (16 digital channels + 16 ground) for MSO5000' ),
    item_price    ( 'AU$721.42' ),
    item_shipping ( 'AU$107.89' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/204348481637?hash=item2f941e6065:g:AssAAOSw7FNkb3ka&amdata=enc%3AAQAIAAAA8LwPVu0zgP9zrawvUXyKO7Z7ofw9AwtM9B2NZxEnZKRsPQ1qY1J73J9kjSRlY1kZuZEYaktUGH2dB87Jqf6E%2B4StHnRo5gSWyZfZNt0tKE0HBc114Aj6BapSXh0gbqIFDNvvSUIqFYH1%2FDqvMP7r4G9N5Jol8b%2F6z75hOmXtlkIdUI8AnR2mylabgk8FHufkAr4do7N3jorq8t9D9zfrta34Baujy1G5Ux%2BSP0TUGZsgFGbjpp%2BSTOsbErsMAkyI8VpuvTarKBeivMqA120frESh2DukiwOtaU6RqO7GziVI6dIU94Xsh%2BHmhLs8mC1axw%3D%3D%7Ctkp%3ABk9SR4CZ6YOgYw' ),
    affiliate_url ( 'https://ebay.us/5EMmG9' ),
    listing_name  ( 'RIGOL PLA2216 Logic Analyzer Probe for RIGOL MSO5000' ),
    item_price    ( 'AU$733.26' ),
    item_shipping ( 'AU$101.07' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/196027311706?hash=item2da423665a:g:04kAAOSw0ChlKCEe&amdata=enc%3AAQAIAAAA0BP1Fl6cNWuLlvItHVYKiQKg88Ycwkr5QslkUdT3YMzbpfP6IC8%2Fj3ZvRb0rp7epYN0dc00wWJHTMLXQ%2BZTMcWFNtZkG07u%2Fh3y5W1Rmu164yM93PjOSwkk99gRz6vUww4JIf5QVtpGehTFoQpwWyHiOKi10YT7AmECndCL6mXgKor5J2dTJer01i11tVJExR9LZA0%2F14d8gpNGM2ViHuERVJtZGUCu0eQ%2BcUy%2BhHTjvbgUgQPDPU%2FI%2BSAt%2BsFQ56gLjHARaR0UlTg3T6nAhnzM%3D%7Ctkp%3ABk9SR4KZ6YOgYw' ),
    affiliate_url ( 'https://ebay.us/ITcbCW' ),
    listing_name  ( 'Rigol PLA2216-OB Logic Probes' ),
    item_price    ( 'AU$733.26' ),
    item_shipping ( 'AU$126.18' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Rigol-PLA2216-Logic-Probe.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006082845804.html?spm=a2g0o.productlist.main.21.77874cdbPgWiEg&algo_pvid=e48301f8-bcd0-4841-a879-9f599b896a4a&algo_exp_id=e48301f8-bcd0-4841-a879-9f599b896a4a-10&pdp_npi=4%40dis%21AUD%211216.78%211216.78%21%21%21804.64%21804.64%21%402103237317051063751298959e9058%2112000035650391751%21sea%21AU%214385823938%21&curPageLogUid=j6prTEFAE5Rr&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DkrcUC9' ),
    listing_name  ( 'RIGOL PLA2216 Logic Probe for MSO5000 Series Oscilloscopes Includes Cable Leads and Grabber Clips' ),
    item_price    ( 'AU$1,216.78' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006011962930.html?spm=a2g0o.productlist.main.23.77874cdbPgWiEg&algo_pvid=e48301f8-bcd0-4841-a879-9f599b896a4a&algo_exp_id=e48301f8-bcd0-4841-a879-9f599b896a4a-11&pdp_npi=4%40dis%21AUD%211265.72%211240.41%21%21%215998.66%215878.69%21%402103237317051063751298959e9058%2112000035314302598%21sea%21AU%214385823938%21&curPageLogUid=X7Ft7bkjOyiF&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DEmDjRr' ),
    listing_name  ( 'RIGOL PLA2216 logic probe suitable for MSO5000 series oscilloscopes, including cable leads and grab clips' ),
    item_price    ( 'AU$1,240.41' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006030404759.html?spm=a2g0o.productlist.main.25.77874cdbPgWiEg&algo_pvid=e48301f8-bcd0-4841-a879-9f599b896a4a&algo_exp_id=e48301f8-bcd0-4841-a879-9f599b896a4a-12&pdp_npi=4%40dis%21AUD%211306.93%211306.93%21%21%216194.00%216194.00%21%402103237317051063751298959e9058%2112000035400282528%21sea%21AU%214385823938%21&curPageLogUid=KTCZ7ssRC4pM&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dks2ef3' ),
    listing_name  ( 'RIGOL PLA2216 Logic Probe for MSO5000 Series Oscilloscopes Includes Cable Leads and Grabber Clips' ),
    item_price    ( 'AU$1,306.93' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/32959718566.html?spm=a2g0o.order_detail.order_detail_item.3.4855f19cYv7mr2' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.1.6dee1802dqjMux&orderId=8146379011803938' ),
    order_id        ( '8146379011803938' ),
    order_date      ( 'Feb 12, 2022' ),
    order_item_name ( '' ),
    order_options   ( '' ),
    order_price     ( 'AU$574.07' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$7.04' ),
    order_gst       ( 'AU$58.12' ),
  ),
);

equipment(
  equipment_date( '2024-01-13' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/AqAAAOSwHwdjcLMS/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( 'Rigol' ),
    model_name        ( 'PLA2216 Compatible' ),
    EquipmentFeature::LOGIC_PROBE,
    EquipmentFeature::CABLE,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Rigol' ),
    model_name        ( 'PLA2216' ),
    equipment_type    ( 'Compatible Logic Probe' ),
    category          ( 'Probe' ),
    category          ( 'Accessory' ),
    category          ( 'Attachment' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Rigol_MSO5074' ),
  see_also      ( 'Rigol PLA2216 Logic Probe' ),
  see_also      ( 'Rigol MSO5074 Mixed Signal Oscilloscope' ),
  search_url    ( 'https://www.amazon.com/s?k=Rigol+PLA2216+Compatible+Logic+Probe&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=Rigol+PLA2216+Compatible+Logic+Probe&s=price-asc-rank' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_sop=15&_nkw=Rigol+PLA2216+Logic+Probe' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/265974086807?hash=item3ded4a7c97:g:J~4AAOSw849jZntM&amdata=enc%3AAQAIAAAA8Bw6NA2c0lUjM5OJyV%2BnzcrK7Ej8DTMWNhOjVqFrL2Gzm7eeMxmk1qZWippPcaQEfAHNNuoLkb4Qb8vdf9vki5zhp4tYUiM%2BaekCiwOOUFSjzORLtx5JMSv9%2BFlcp3BYXJM1oAQ%2Fm%2BFDcWi305SKAbBqHreqX4aSJhXE61hiFIMj5TFeU0MGth4iMjsfDDhss2aeIwDaKUvXnk7OkpebAMX3agk1dXxqnIyTdN2eVoVGMzqMGNfOGLtE53Cvj76319zXSv6%2FO3JpVg7AHtFGKKcXw7oRI3Zg%2F%2FgsUeMF0VNVQ9DlvkyAgzpOmhj9CBYLPg%3D%3D%7Ctkp%3ABk9SR6iGmYOgYw' ),
    affiliate_url ( 'https://ebay.us/tWaF3S' ),
    listing_name  ( 'Rigol MSO5000 PLA2216 Custom 16 Channel Logic Probe with Cable, Test Clips New' ),
    item_price    ( 'US$75.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/403992914921?hash=item5e0fdaabe9:g:AqAAAOSwHwdjcLMS&amdata=enc%3AAQAIAAAA8DdUAQrP6JVLsENar7R8y7iTm8of82HfSKFCtysRVB8lS%2FkZkb3yPTu1mnSW2EWDx1O8cE3WqwK6fYDZATtEIah2oWWfR0bS3%2BQfxk7%2Ba0xEfhQf18874gBBOGMSjaEabPhfQ1Bd5k%2FMjrmul3RwbYj2y1e%2BajjHtnZ0fNlWpnWaAUIXEPMcCRkZhCrR6FIsfwqdhmMOOZwjWtx2mmN0tBxJjpI4DwLiPmr7lUIOGHLAGHA0qdnvEZQPihqV0LH3xB6L9Znl%2Fhdwa7bfm2GYR1k8M4ERenpluQwtnkoQltlp%2BkxMEGFgvdNhci8HKhV5qA%3D%3D%7Ctkp%3ABk9SR6iGmYOgYw' ),
    affiliate_url ( 'https://ebay.us/wBNw3J' ),
    listing_name  ( 'Rigol MSO5000 PLA2216 Custom 16 Channel Logic Probe with Cable, Test Clips 2022#' ),
    item_price    ( 'US$75.99' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_sop=15&_nkw=Rigol+PLA2216+Logic+Probe' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/265974086807?hash=item3ded4a7c97:g:J~4AAOSw849jZntM&amdata=enc%3AAQAIAAAA0Kcqr%2BieKN5lGfWbu97aQIhJrXNpnuOPAW4CBxW80C4PALpPNCFkxM3dYIM5GL4z0TWr9GaowogjQHyH0hM6Y52eHTj9hS6exarQ26uCABDq%2B3kUUC0KEjgbF61lp0sqJFLlNcGDr4s1%2BxZySKV03YWGjABeCa9oNucPnSrMzBYf8gULHBFRJkqNiiOiBq5hEn0NzJmZQknpQSgzKgb0CWrpynBPIVE0%2B1MdDuTTRJVJcMXwrJfMCQ0fOzMyXYPnRYlr5ZcPNZW8ubu1RtLZ5mo%3D%7Ctkp%3ABk9SR4CZ6YOgYw' ),
    affiliate_url ( 'https://ebay.us/2iLimk' ),
    listing_name  ( 'Rigol MSO5000 PLA2216 Custom 16 Channel Logic Probe with Cable, Test Clips New' ),
    item_price    ( 'AU$125.50' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-PLA2216.html?spm=a2g0o.productlist.search.0' ),
);

equipment(
  equipment_date( '2024-01-13' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61WzxMS3zSL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.diatec.co.jp/en/Maje2SS/' ),
      link_text       ( 'Majestouch 2SS Edition Product Introduction' ),
    ),
    manufacturer_name ( 'FILCO' ),
    model_name        ( 'Majestouch 2SS 104-key' ),
    EquipmentFeature::MECHANICAL_KEYBOARD,
    EquipmentFeature::USB_KEYBOARD,
    EquipmentAttribute::COMPUTER_EQUIPMENT,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'FILCO' ),
    model_name        ( 'Majestouch 2SS' ),
    equipment_type    ( '104-key Mechanical Keyboard' ),
    category          ( 'Mechanical Keyboard' ),
    category          ( 'Keyboard' ),
    category          ( 'USB' ),
    manufacturer_link (
      link_href       ( 'https://www.diatec.co.jp/en/Maje2SS/' ),
      link_text       ( 'Majestouch 2SS Edition Product Introduction' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Keyboard' ),
  see_also      ( 'FILCO Majestouch 2SS 87-key Mechanical Keyboard' ),
  search_url    ( 'https://www.amazon.com/s?k=FILCO+Majestouch+2SS+104-key+mechanical+keyboard&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/FILCO-Majestouch-FKBN104MSS-ECSP2B-RKL-English/dp/B0BQYN7BKR/ref=sr_1_2?dib=eyJ2IjoiMSJ9.4NCKKAqjWB1lWiBrpBEzAeQt0XEy7ryV1g9_rGQFCuDGjHj071QN20LucGBJIEps.t49D2iZTcwGivXVLPb6qxnQZQ3QGkJlVktyXOiS8xas&dib_tag=se&keywords=FILCO%2BMajestouch%2B2SS%2B104-key%2Bmechanical%2Bkeyboard&qid=1705108179&sr=8-2&th=1' ),
    affiliate_url ( 'https://amzn.to/3UgGZfJ' ),
    listing_name  ( 'FILCO Majestouch 2SS Edition FKBN104MSS/ECSP2B-RKL Full Size English Layout Cherry MX Speed Silver Axis with 3 Red Key Locks, Black' ),
    item_options  ( 'Style: English Layout 104 Full Size' ),
    item_price    ( 'US$138.47' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=FILCO+Majestouch+2SS+104-key+mechanical+keyboard&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B0BQYN7BKR/ref=ppx_yo_dt_b_search_asin_title?ie=UTF8&th=1' ),
    affiliate_url ( 'https://amzn.to/3TYhBuL' ),
    listing_name  ( 'FILCO Majestouch 2SS Edition FKBN104MSS/ECSP2B-RKL Full Size English Layout Cherry MX Speed Silver Axis with 3 Red Key Locks, Black' ),
    item_options  ( 'Style Name: English Layout 104 Full Size' ),
    item_price    ( 'AU$201.84' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_sop=15&_nkw=FILCO+Majestouch+2SS+104-key+mechanical+keyboard' ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_sop=15&_nkw=FILCO+Majestouch+2SS+104-key+mechanical+keyboard' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-FILCO-Majestouch-2SS-104-key-mechanical-keyboard.html' ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B0BQYN7BKR/ref=ppx_yo_dt_b_search_asin_title?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-2787659-3947045' ),
    order_id        ( '249-2787659-3947045' ),
    order_date      ( '13 October 2023' ),
    order_item_name ( '' ),
    order_price     ( 'AU$202.55' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-13' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61iUE9S8ZpL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.diatec.co.jp/en/Maje2SS/' ),
      link_text       ( 'Majestouch 2SS Edition Product Introduction' ),
    ),
    manufacturer_name ( 'FILCO' ),
    model_name        ( 'Majestouch 2SS 87-key' ),
    EquipmentFeature::MECHANICAL_KEYBOARD,
    EquipmentAttribute::COMPUTER_EQUIPMENT,
    EquipmentFeature::USB_KEYBOARD,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'FILCO' ),
    model_name        ( 'Majestouch 2SS' ),
    equipment_type    ( '87-key Mechanical Keyboard' ),
    category          ( 'Mechanical Keyboard' ),
    category          ( 'Keyboard' ),
    category          ( 'USB' ),
    manufacturer_link (
      link_href       ( 'https://www.diatec.co.jp/en/Maje2SS/' ),
      link_text       ( 'Majestouch 2SS Edition Product Introduction' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Keyboard' ),
  see_also      ( 'FILCO Majestouch 2SS 104-key Mechanical Keyboard' ),
  see_also      ( 'gku AC1009 Underdesk Keyboard Drawer' ),
  search_url    ( 'https://www.amazon.com/s?k=FILCO+Majestouch+2SS+87-key+mechanical+keyboard&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/FILCO-Majestouch-Tenkeyless-FKBN87MSS-ECSP2B-RKL/dp/B0BQYP6JVD/ref=sr_1_2?dib=eyJ2IjoiMSJ9.4NCKKAqjWB1lWiBrpBEzAWADqomNRm4Ys6mSiQj3z8PGjHj071QN20LucGBJIEps.gjR1zCcZ1fhHGpMeHln88Elhw4GsZIrc-YMIsXazsOo&dib_tag=se&keywords=FILCO%2BMajestouch%2B2SS%2B87-key%2Bmechanical%2Bkeyboard&qid=1705108724&sr=8-2&th=1' ),
    affiliate_url ( 'https://amzn.to/3HhYbJT' ),
    listing_name  ( 'FILCO Majestouch 2SS Edition Tenkeyless English Layout Cherry MX Speed Silver Axis with 3 Red Key Locks, Black FKBN87MSS/ECSP2B-RKL' ),
    item_options  ( 'Style: English Layout 87 Numeric Keyless' ),
    item_price    ( 'US$129.01' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=FILCO+Majestouch+2SS+87-key+mechanical+keyboard&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/FILCO-Majestouch-Tenkeyless-FKBN87MSS-ECSP2B-RKL/dp/B0BQYP6JVD/ref=sr_1_2?dib=eyJ2IjoiMSJ9.4NCKKAqjWB1lWiBrpBEzAWADqomNRm4Ys6mSiQj3z8PGjHj071QN20LucGBJIEps.gjR1zCcZ1fhHGpMeHln88Elhw4GsZIrc-YMIsXazsOo&dib_tag=se&keywords=FILCO%2BMajestouch%2B2SS%2B87-key%2Bmechanical%2Bkeyboard&qid=1705108724&sr=8-2&th=1' ),
    affiliate_url ( 'https://amzn.to/48zvdkM' ),
    listing_name  ( 'FILCO Majestouch 2SS Edition Tenkeyless English Layout Cherry MX Speed Silver Axis with 3 Red Key Locks, Black FKBN87MSS/ECSP2B-RKL' ),
    item_options  ( 'Style Name: English Layout 87 Numeric Keyless' ),
    item_price    ( 'AU$181.07' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_sop=15&_nkw=FILCO+Majestouch+2SS+87-key+mechanical+keyboard' ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_sop=15&_nkw=FILCO+Majestouch+2SS+87-key+mechanical+keyboard' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-FILCO-Majestouch-2SS-87-key-mechanical-keyboard.html' ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/FILCO-Majestouch-Tenkeyless-FKBN87MSS-ECSP2B-RKL/dp/B0BQYP6JVD/ref=sr_1_2?dib=eyJ2IjoiMSJ9.4NCKKAqjWB1lWiBrpBEzAWADqomNRm4Ys6mSiQj3z8PGjHj071QN20LucGBJIEps.gjR1zCcZ1fhHGpMeHln88Elhw4GsZIrc-YMIsXazsOo&dib_tag=se&keywords=FILCO%2BMajestouch%2B2SS%2B87-key%2Bmechanical%2Bkeyboard&qid=1705108724&sr=8-2&th=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-2787659-3947045' ),
    order_id        ( '249-2787659-3947045' ),
    order_date      ( '13 October 2023' ),
    order_item_name ( '' ),
    order_price     ( 'AU$188.89' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-13' ),
  equipment_icon( 'https://d297fd4gt7t5lv.cloudfront.net/file/2023-11-04-212314/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( 'gku' ),
    model_name        ( 'AC1009 Underdesk' ),
    EquipmentFeature::KEYBOARD_DRAWER,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'gku' ),
    model_name        ( 'AC1009' ),
    equipment_type    ( 'Underdesk Keyboard Drawer' ),
    category          ( 'Keyboard Drawer' ),
    category          ( 'Drawer' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Keyboard' ),
  see_also      ( 'FILCO Majestouch 2SS 87-key Mechanical Keyboard' ),
  search_url    ( 'https://www.amazon.com/s?k=gku+Underdesk+Keyboard+Drawer&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=gku+Underdesk+Keyboard+Drawer&s=price-asc-rank' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_sop=15&_nkw=gku+Underdesk+Keyboard+Drawer' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/402407511113?epid=14051643680&hash=item5db15b5449:g:uNgAAOSwA3dfUN9X&amdata=enc%3AAQAIAAAA8DRq5JSqOrdSTRir7nLjPKgF1xJqsfdcaqcyjPDZrszzArIVqPTF2DCyhzC6dNzZ0AzTVXulYEjweqpHPzWBsHBSlOlK0gIiPv5mMBzyt1pbMBEHz%2BDpxQt8pTFOoUKpdE5zyUxQ5srqbNpj4JHJW3v0CY2qiXL3Vpnszb6Dslowbc5I9q1dyabAhfX0tBeEg%2BpCHcvVTIxTmKYplJGRWpCHaMOUuy%2FyWngJFAf91IeB8fBbGCMK9gkSY9ruEmtWeT6KtEHhphy8o9OtFrs%2B1Ilgw1VoIx0GFAqRfMwNoW81kIMGGPE71c9qU4S0z%2BjUxw%3D%3D%7Ctkp%3ABk9SR8CO3YegYw' ),
    affiliate_url ( 'https://ebay.us/KQZbSI' ),
    listing_name  ( 'gku™ Underdesk Keyboard Drawer under desk keyboard tray and storage AC1009' ),
    item_price    ( 'US$29.97' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_sop=15&_nkw=gku+Underdesk+Keyboard+Drawer' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/402407511113?epid=14051643680&hash=item5db15b5449:g:uNgAAOSwA3dfUN9X&amdata=enc%3AAQAIAAAA8DRq5JSqOrdSTRir7nLjPKgF1xJqsfdcaqcyjPDZrszzArIVqPTF2DCyhzC6dNzZ0AzTVXulYEjweqpHPzWBsHBSlOlK0gIiPv5mMBzyt1pbMBEHz%2BDpxQt8pTFOoUKpdNPpm%2BJmbVzLY7QT3SOernfARQeHq1MCt8f%2BV8Qj81nn6imbHvZVDC1qKLqYUnBXFDfwH4yIQPS805vI71LYrhVVWZu%2FLNYhaiGY%2FMx8f06CVC8Gp5pnnt7g2kJG5SUtKHhST2sRQLHE6Z%2FUpjJ0F%2FbfFlRKLuMWDBm7jTIIujKk6k%2F6MkAp6V4OXpHl68KAbA%3D%3D%7Ctkp%3ABk9SR6z474egYw' ),
    affiliate_url ( 'https://ebay.us/NvdQjW' ),
    listing_name  ( 'gku™ Underdesk Keyboard Drawer under desk keyboard tray and storage AC1009' ),
    item_price    ( 'AU$45.00' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-gku-Underdesk-Keyboard-Drawer.html' ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/402407511113' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=04-10119-18115#/' ),
    order_id        ( '04-10119-18115' ),
    order_date      ( '30 May 2023' ),
    order_item_name ( '' ),
    order_price     ( 'AU$55.00' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/402407511113' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=08-10138-74509#/' ),
    order_id        ( '08-10138-74509' ),
    order_date      ( '5 Jun 2023' ),
    order_item_name ( '' ),
    order_price     ( 'AU$55.00' ),
    order_quantity  ( 2 ),
  ),
);

equipment(
  equipment_date( '2024-01-13' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/81Bca5GkSnL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.dremel.com/us/en/p/4300-5-40-f0134300ad' ),
      link_text       ( 'Dremel 4300 Rotary Tool' ),
    ),
    manufacturer_name ( 'Dremel' ),
    model_name        ( '4300' ),
    EquipmentFeature::ROTARY_TOOL,
    EquipmentAttribute::HAND_TOOL,
    EquipmentFeature::ROTARY_TOOL_ACCESSORY_SET,
    EquipmentFeature::DREMEL_107_ENGRAVING_BIT,
    EquipmentFeature::DREMEL_191_CARVING_BIT,
    EquipmentFeature::DREMEL_EZ456_METAL_CUT_OFF_WHEEL,
    EquipmentFeature::DREMEL_561_MULTI_PURPOSE_CUTTING_BIT,
    EquipmentFeature::DREMEL_8193_ALUMINUM_OXIDE_GRINDING_STONE,
    EquipmentFeature::DREMEL_84922_SILICON_CARBIDE_GRINDING_STONE,
    EquipmentFeature::DREMEL_932_ALUMINUM_OXIDE_GRINDING_STONE,
    EquipmentFeature::DREMEL_403_NYLON_BRUSH,
    EquipmentFeature::DREMEL_428_CARBON_STEEL_BRUSH,
    EquipmentFeature::DREMEL_414_FELT_POLISHING_WHEEL,
    EquipmentFeature::DREMEL_421_POLISHING_COMPOUND,
    EquipmentFeature::DREMEL_429_FELT_POLISHING_WHEEL,
    EquipmentFeature::DREMEL_407_60_GRIT_SANDING_BAND,
    EquipmentFeature::DREMEL_408_60_GRIT_SANDING_BAND,
    EquipmentFeature::DREMEL_432_120_GRIT_SANDING_BAND,
    EquipmentFeature::DREMEL_445_240_GRIT_SANDING_BAND,
    EquipmentFeature::DREMEL_EZ411_SANDING_DISC,
    EquipmentFeature::DREMEL_EZ412_SANDING_DISC,
    EquipmentFeature::DREMEL_EZ413_SANDING_DISC,
    EquipmentFeature::DREMEL_401_POLISHING_BIT_MANDREL,
    EquipmentFeature::DREMEL_EZ402_EZ_LOCK_MANDREL,
    EquipmentFeature::DREMEL_150_DRILL_BIT,
    EquipmentFeature::DREMEL_PIVOT_LIGHT,
    EquipmentFeature::DREMEL_565_MULTI_PURPOSE_CUTTING_KIT,
    EquipmentFeature::WRENCH,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Dremel' ),
    model_name        ( '4300' ),
    equipment_type    ( 'Rotary Tool' ),
    category          ( 'Rotary Tool' ),
    category          ( 'Hand Tool' ),
    manufacturer_link (
      link_href       ( 'https://www.dremel.com/us/en/p/4300-5-40-f0134300ad' ),
      link_text       ( 'Dremel 4300 Rotary Tool' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Dremel_4300' ),
  see_also      ( 'Dremel 335 Plunge Router' ),
  see_also      ( 'Dremel 2500 Multi-Vise' ),
  see_also      ( 'Dremel 220 Drill Press' ),
  see_also      ( 'Dremel EZ725 Rotary Tool Accessory Set' ),
  see_also      ( 'Dremel 490 Rotary Tool Dust Blower' ),
  search_url    ( 'https://www.amazon.com/s?k=Dremel+4300&crid=3GF6DY905ZJF0&sprefix=dremel+4300%2Caps%2C1286&ref=nb_sb_noss_1' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Dremel-4300-Rotary-Tool.html' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Dremel-4300-5-Performance-Attachments-Accessories/dp/B01M1SJNVU/ref=sr_1_5?crid=3GF6DY905ZJF0&dib=eyJ2IjoiMSJ9.oGTLMvpMwInL5o2-uJQg3NNMWbXxqyxZAGA2s8yMYFA-8lDTMH1Mlilaji7k6w-EqhfgibT3UY242uGCNztQga5vqVaITg5oeFEbnQ_ciQk3nv21ao7hF1UcbE0aGvWeLSTvIywKAwKg1-FGGLyddQ.wroHbB7mXygGWeTgcT5iLSSb3g2bTlDTIp_jVevbrT8&dib_tag=se&keywords=Dremel%2B4300&qid=1705110526&sprefix=dremel%2B4300%2Caps%2C286&sr=8-5&th=1' ),
    affiliate_url ( 'https://amzn.to/3vFI0TY' ),
    listing_name  ( 'Dremel 4300-5/40 High Performance Rotary Tool Kit with LED Light- 5 Attachments & 40 Accessories- Engraver, Sander, and Polisher- Perfect for Grinding, Cutting, Wood Carving and Engraving , 9" Long' ),
    item_options  ( 'Style: 45 Piece Kit; Pattern Name: Tool Kit' ),
    item_price    ( 'US$109.99' ),
    item_shipping ( 'US$32.56' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Dremel+4300+Rotary+Tool&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B075F7LYMF/ref=ppx_yo_dt_b_search_asin_title?ie=UTF8&psc=1' ),
    affiliate_url ( 'https://amzn.to/48Vqp9b' ),
    listing_name  ( 'Dremel 4300 Rotary Tool 175W, Multi Tool Kit with 3 Attachments, 45 Accessories and Front LED Light, Variable Speed 5000-35000rpm for Cutting, Carving, Cleaning, Sanding, Engraving, Grinding' ),
    item_price    ( 'AU$194.34' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_trksid=p2334524.m570.l1313&_nkw=Dremel+4300&_sacat=0&rt=nc&_osacat=0&_odkw=Dremel+4300+Rotary+Tool&_sop=15&LH_ItemCondition=1000' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/155985688121?epid=5019368880&hash=item245178b639%3Ag%3AGr0AAOSwkpdllJ%7E1&amdata=enc%3AAQAIAAAA4JuPRSC7hsOkTDJVYV41PdTfRQVk1nlkW7acvwNaksTipMsGRJ5sr%2BtPW3vHZhtct2WaKE9e6MpgteKZyojUBaXW9ZZ%2B%2FOFa%2B2HKJrDvsQPW6Dt53EwfYB0o3%2Fi11x%2BHnOVTcvCOiH%2BkuAw5Bq0DtElhAeFXTIncA3nkHXasHM3MNaZzQWyph3RxFwthUb1Spm8%2FFbEOcIV7uTgzEdVxe1Ms3SCUAGCQUVllaoP1apcavZphST6Ykybwh3KqUK%2BEhpMfmWjDFane0FJOBm9DvsEPvEQ5XJxMqNl0AqymFnPx%7Ctkp%3ABk9SR6j0yoigYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/oUUoPw' ),
    listing_name  ( 'Dremel 4300540 120V Performance Rotary Tool Kit' ),
    item_price    ( 'US$109.99' ),
    item_shipping ( 'US$41.16' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/276250375593?epid=5019368880&hash=item4051ce35a9%3Ag%3AG2wAAOSw-KBlnVUn&amdata=enc%3AAQAIAAAA4AKvommV8RepbsWwrQlRmNLHjiJmvN0M0efxJulXtd96WgYl0HH3wjW1FmraQA6%2F5nXkURrvWAcOW9dZdQ%2BnliJvxixAl2uZ%2F94nsFDt4njvw0W5lMyb6RcerfItkhUBaqCO33dWHXcmliIpJLtMxk2vrOiFRkT7pJFhmdTFQbduUkXT3w8Bi16tpk0sYW9qW51EapycraYT1Ff5MtBHub6Fdb%2B14oRW17YaE94B5JVxBodVT1L6KyHWMqrF0rKq6doVBUsYSkMj6%2F4ZHHVgDo12Paoa97KuxF9ymacdqzYp%7Ctkp%3ABk9SR6j0yoigYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/x2jucX' ),
    listing_name  ( 'Dremel 4300-5/40 High Performance Rotary Tool Kit with LED Light' ),
    item_price    ( 'US$119.99' ),
    item_shipping ( 'US$41.49' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/176022445916?epid=5019368880&hash=item28fbc15f5c%3Ag%3ABMcAAOSwvbxlTX0d&amdata=enc%3AAQAIAAAAwN3ORWT91WqfDxDBCz4KltFlwio2hnCAwGpZos9rEHUsr74EdoeKM%2B2LMIWxt0ZtGmvx%2FgviprdBmM5Qd1YGsAlS4jK0AYmn7XDVpeosZFkGYpy%2BSm5NKymxncZsMhIVkkjg2UCbzf%2FgalhzWb%2F7PqdGgetJbpOe%2FZ7asqX%2FZG3TFB%2FKbjCIdmtqQncKlOLvqwiDvna%2FBnpnkE7BNUK%2F2l7Sud6WqNlETb5t8VQnDS2lWLnZlenO8Yjd1CLwEKEuzw%3D%3D%7Ctkp%3ABk9SR6j0yoigYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/UZbd0w' ),
    listing_name  ( 'Dremel 4300540 120V Performance Rotary Tool Kit-NEW!!' ),
    item_price    ( 'US$100.00' ),
    item_shipping ( 'US$70.74' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Dremel+4300+Rotary+Tool' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/386319241770?hash=item59f26bd22a%3Ag%3Ay2cAAOSw5HhlZDOM&amdata=enc%3AAQAIAAAA8I97zJJ89ZEmoGrYRZE2ssGQgvZrOyGVxnf2Lf4VFSY6C4c5jVXzZde8M7gGrnyW5kS2MZ%2FzxQH3fGBiOkP%2F6c5NFqILdI5A9SKIa9JEbd%2FCQ65sLxh9QhICoENQY57lVsfuHTLEtmsfVO9d07HdcBrjUCYos0XHVA9io%2BPIB8d1Q2T3dJtJLBybVA%2BD%2FassDYlli3c0GzpIKvgfH4p9zohYbnocfkgT4z6CAlB08XTwumSyj25vef9M4eIb1nxNLaAGlLt5quDL8XjtrTL4y0L2NKWteTAhD0VMX0JsN9Ch%2FWxgH%2FNv5CNuOZJmI6yk4A%3D%3D%7Ctkp%3ABk9SR8Cm54igYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/dn6S0j' ),
    listing_name  ( 'Dremel 4300-5/50 Corded Rotary Tool Kit AUS STOCK' ),
    item_price    ( 'AU$280.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/364464700801?hash=item54dbc9fd81%3Ag%3ATyMAAOSwgplk-RFJ&amdata=enc%3AAQAIAAAA8D3X3qAeKsEVu%2BfGokSbPlN2LF2ni7A0UQEfW8QQOsAKrm3cTvz0L0%2B38bsYcG87qoE%2BB3e42I%2Fa0qf35UpfJqHBEmJWi%2BRYRuBbQzOiUFVolwRNoDwzpKtTGxyMM%2BswMmqP4sRdGt90gENEz3PIFuVoNRa9T8iLxdK17MfoqO%2F9lRUa51PCEuL0DYT2il3xZ71oGMh5h%2B8dplpUgilTmb8KgKKmxt0OtNpFzb10ZhTeFUVk4SKGpALksNlpDyyH8GBn7VUNr4oZ1%2F%2F2BS0zAxIeaaJhFdTzLe3%2BkIZARCtJS2%2BRir5KWVQHaPEkpXXK5Q%3D%3D%7Ctkp%3ABk9SR8Cm54igYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/O9P6OB' ),
    listing_name  ( 'Dremel 4300-5/50 Corded Rotary Tool Kit - AU STOCK NEW' ),
    item_price    ( 'AU$282.55' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/234993185884?hash=item36b6af745c%3Ag%3Ak90AAOSwW8VkTki6&amdata=enc%3AAQAIAAAA8C3VYatEcGZRRq7qH8hOn6d7zZ4EgUlWvXmFOfhkKfwpb0qr7OK1AHCg7vlbJzIhlYTp3qdzWmCt1wM0AS2D95KPJp1ELtPuaVhyuYVaD20H7ni17mSERW2pVgGPHB%2BILPGXqUm5%2BiE%2FjHGkNThNEFAG%2Bcl2C3tTmeQ2WHVSIfNQD7ZnQ6GrXwzXmwUPHinjNv109C76MnUOVeU6si22zCVTkJglAUJmOGJeGDhorotF2VDK22nkaQWxPFiIYOl760xEEfSqi9KiWtsiMpKupQ2iKDaSRNX83tjl6Y6KVvojrSfbMRUTcnjGMS6rJwGR0A%3D%3D%7Ctkp%3ABk9SR8Cm54igYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/KLUY4d' ),
    listing_name  ( 'Dremel 4300-5/50 Corded Rotary Tool Kit' ),
    item_price    ( 'AU$282.99' ),
  ),
  search_url      ( 'https://www.aliexpress.com/w/wholesale-Dremel-4300-Rotary-Tool.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004922167145.html?spm=a2g0o.productlist.main.21.2dd444a5x2hNxT&algo_pvid=bdd3a651-e943-4882-b24a-55a39341b386&algo_exp_id=bdd3a651-e943-4882-b24a-55a39341b386-10&pdp_npi=4%40dis%21AUD%21679.46%21305.75%21%21%21449.32%21202.19%21%402101ec1f17051115609945661eaa15%2112000031028409820%21sea%21AU%214385823938%21&curPageLogUid=eJfcV9qwV5f0&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DEZF2hn' ),
    listing_name  ( 'DREMEL 4300 5-50 Rotary Tool Kit Mini Electric Drill Grinder Grinding With LED Light 5 Attachments 50 Accessories Cutting' ),
    item_options  ( 'Color: 4300 5-50' ),
    item_price    ( 'AU$305.75' ),
    item_shipping ( 'AU$72.78' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B075F7LYMF/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-8698887-6167811' ),
    order_id        ( '249-8698887-6167811' ),
    order_date      ( '15 March 2022' ),
    order_item_name ( '' ),
    order_price     ( 'AU$194.34' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-13' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71QH+iLWzgL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.dremel.com/us/en/p/335-01-26150335aa' ),
      link_text       ( 'Dremel Plunge Router Attachment (335)' ),
    ),
    manufacturer_name ( 'Dremel' ),
    model_name        ( '335' ),
    EquipmentFeature::PLUNGE_ROUTER,
    EquipmentAttribute::ACCESSORY,
    EquipmentAttribute::ATTACHMENT,
    EquipmentAttribute::BENCH_EQUIPMENT,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Dremel' ),
    model_name        ( '335' ),
    equipment_type    ( 'Plunge Router' ),
    category          ( 'Router' ),
    category          ( 'Accessory' ),
    category          ( 'Attachment' ),
    manufacturer_link (
      link_href       ( 'https://www.dremel.com/us/en/p/335-01-26150335aa' ),
      link_text       ( 'Dremel Plunge Router Attachment (335)' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Dremel_4300' ),
  see_also      ( 'Dremel 4300 Rotary Tool' ),
  see_also      ( 'Dremel 2500 Multi-Vise' ),
  see_also      ( 'Dremel 220 Drill Press' ),
  see_also      ( 'Dremel EZ725 Rotary Tool Accessory Set' ),
  see_also      ( 'Dremel 490 Rotary Tool Dust Blower' ),
  search_url    ( 'https://www.amazon.com/s?k=Dremel+335+Plunge+Router&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Dremel-Performance-Attachments-Accessories-Attachment/dp/B08DY572CW/ref=sr_1_1?dib=eyJ2IjoiMSJ9.05Cn4lu96icymk0nagCwOAZZLRaeMCQyIaM7t6nBZSbGjHj071QN20LucGBJIEps.VsBtJzroC7bAcwtb128r7UT1O1Df_ph1DpLT2a8ZbBs&dib_tag=se&keywords=Dremel%2B335%2BPlunge%2BRouter&qid=1705111896&sr=8-1&th=1' ),
    affiliate_url ( 'https://amzn.to/48to9pG' ),
    listing_name  ( 'Dremel 4000-2/30 High Performance Rotary Tool Kit- 2 Attachments & 30 Accessories- Grinder, Sander, Polisher, Router, and Engraver- Perfect for Routing, Metal Cutting & 335-01 Plunge Router Attachment' ),
    item_price    ( 'US$93.32' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Dremel-4000-4-Variable-Rotary-Attachment/dp/B08MFZ5J66/ref=sr_1_2?dib=eyJ2IjoiMSJ9.05Cn4lu96icymk0nagCwOAZZLRaeMCQyIaM7t6nBZSbGjHj071QN20LucGBJIEps.VsBtJzroC7bAcwtb128r7UT1O1Df_ph1DpLT2a8ZbBs&dib_tag=se&keywords=Dremel%2B335%2BPlunge%2BRouter&qid=1705111896&sr=8-2&th=1' ),
    affiliate_url ( 'https://amzn.to/41WOeuO' ),
    listing_name  ( 'Dremel 4000 Rotary Tool Kit + Dremel 335 Plunge Router Attachment Bundle - Variable Speed Engraver, Router, Polisher, and Sander' ),
    item_options  ( 'Style: Rotary tool w/ Attachment' ),
    item_price    ( 'US$106.32' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Dremel-3000-2-Variable-Rotary-Attachment/dp/B08DY34JBR/ref=sr_1_3?dib=eyJ2IjoiMSJ9.05Cn4lu96icymk0nagCwOAZZLRaeMCQyIaM7t6nBZSbGjHj071QN20LucGBJIEps.VsBtJzroC7bAcwtb128r7UT1O1Df_ph1DpLT2a8ZbBs&dib_tag=se&keywords=Dremel+335+Plunge+Router&qid=1705111896&sr=8-3' ),
    affiliate_url ( 'https://amzn.to/3O1iXBh' ),
    listing_name  ( 'Dremel 3000-2/28 Variable Speed Rotary Tool Kit & 335-01 Rotary Tool Plunge Router Attachment – Perfect for Wood' ),
    item_price    ( 'US$113.67' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Dremel+335+Plunge+Router&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Attachment-Precision-Routing-Drilling-Trimming/dp/B0000DEZK4/ref=sr_1_3?dib=eyJ2IjoiMSJ9.lbKcKjkbJNy859rXtr5Jm4RWuqlOl6zmkhtahfi4GJeaVKyuWy1b90_GTNRQZp7lKPgJdIcab9swqj0KSJ0leMr1_dIJk7S9BexJQMjosqnw4t9T7IM1a0VRStrXIzkia_ERum0SsD5RLOwWJZvvLg.ZbjS3tGovQWD-E8LEDZ0Tc8JcpDq3pY8ShKlwGa_VJg&dib_tag=se&keywords=Dremel%2B335%2BPlunge%2BRouter&qid=1705112519&sr=8-3&th=1' ),
    affiliate_url ( 'https://amzn.to/3TWRtAs' ),
    listing_name  ( 'Dremel 335 Plunge Router Rotary Tool Attachment for Precision Routing, Cutting, Drilling and Trimming on Wood, Medium' ),
    item_price    ( 'AU$48.00' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Dremel+335+Plunge+Router' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/225567201205?epid=679802985&hash=item3484da57b5%3Ag%3A6akAAOSwzMhkVz1i&amdata=enc%3AAQAIAAAA0EYfs0F5djlWSj5L6CH2EsRz71CVoVQzhEFKtq2UWrj34ym2e2auwg7pOItVobtE1jYv%2F1iwo%2BA8on8a8JOVvc9MqfHaOcWmLWTcF67vG608TjpIWTKLKCI39aAglWrRYhZtHiCnltN3t0MNIh0xW2GmyKbPdjtbw9jRIq%2FER6YrlvbEb7KMcFqjiMrK9dlApl6ZRgMOYNvHhpNywRNg4aW5b5RWrqA9HDLCbIUsrMLIqwOdw10LaZkziS6u0MivXh79HjdaLWbgutztWlN4lRE%3D%7Ctkp%3ABk9SR4q5ioqgYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/aguG59' ),
    listing_name  ( 'Dremel Plunge Router Attachment 335' ),
    item_price    ( 'US$46.36' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/274438373106?epid=679802985&hash=item3fe5cd3ef2%3Ag%3AZ0gAAOSwN2RfapSN&amdata=enc%3AAQAIAAAA0CyJvrJnkUmMeYOy%2BaHLcdrL7Hwpm0qrqQsf4i%2BfVlGWOTpjSKnheVOjUdxEkDh6G0xaxNpT%2B2Zj8A36s4t7X1fITMlCAZwuRjh2IvajyystJIKVT5r%2FNQvTHQjXYiBYaSukGAQJyzuH7a8SBhBRAZUkubbDjyM8UgkzN0dL0kZky3NmZm9cMr2%2BmlnFS0mfp4jl1DSQnwTzW3XRZj%2B8HytNVACgyOlqfuvW%2BrBpGLyWdtJ4VXiFv8VRiR%2Bf8Yw1EitRxuMczyHGTCEAYQ%2FG7Pw%3D%7Ctkp%3ABk9SR4q5ioqgYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/A9tp9Y' ),
    listing_name  ( 'Dremel 335 Router Base Attachment - USA BRAND' ),
    item_price    ( 'US$59.91' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/115214704073?hash=item1ad354ddc9%3Ag%3A1mAAAOSwHzRgNfFA&amdata=enc%3AAQAIAAAA8IeBqZ7Bly%2BjOmlKjnTfvQ9g2jwbeADoR92w%2FXOUcao4ziOFxg2nx36MSS0buO6YmwffRYOr22SdWjYtpM0833KABcD4xpTxzG2%2FeCjIzlZYDotAoSu3J%2FHuSWJqNp9khJlzn4jqHdiHOv1ydcpaSQ8YlXC4%2BLTaTAahHFHcMZmJOOpMHsqeHM%2FHaZAZvVbOgRRrkIWMbd1PgrT%2Fokzka6IOqEkbco4i1mcN%2BxDGBa6AnBW0RWtekJiztPS9pCeGSUz0oGJ9IjvbeJQcNW4%2BQqlTSOZu%2BonfUjLR%2FVmyopGK0EEKgSJhQxboErcIBZL6wQ%3D%3D%7Ctkp%3ABk9SR4q5ioqgYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/cr2YLC' ),
    listing_name  ( 'Dremel 335-01 Rotary Tool Plunge Router Attachment, Medium Plastic and Metal' ),
    item_price    ( 'US$40.99' ),
    item_total    ( 'US$24.67' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Dremel+335+Plunge+Router' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/126018468792?hash=item1d57493bb8%3Ai%3A126018468792&amdata=enc%3AAQAIAAAA8Aa1R%2BH9eRy9UbEy0kd7b6w47TgTpBu9M32nOVaxsnW2XD3IyC3XjAewyHF7M1qjpyR77IYqe3hrHzCyHKW08OXxB%2BU7jkdv0Qivu4lhpbmltI26J%2BUEOVW6txz%2BvrWYmVZoR1HZB7mdV8x1Xkzgf75K3F7cYrM52oraBIHwaE8XAeeUKYvdEhk794FJziVlK4Msj3rGbwI62hKN5SZ%2BbH10CX7vHMRthdxQirYL%2FTIcL1cNGD55U%2FLAOlhDEnwkjr%2BajWzO5Mq%2BrQ83IG%2FWe%2FlmeQU7OGoltWMTj03w59VD6ESzDVXvKa3aUc1l46Cx%2Fg%3D%3D%7Ctkp%3ABk9SR47fpIqgYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/PnE1Nf' ),
    listing_name  ( 'Dremel 335 Plunge Router Rotary Tool Attachment for Precision Routing, Cutting' ),
    item_price    ( 'AU$64.37' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/225567201205?epid=679802985&hash=item3484da57b5%3Ag%3A6akAAOSwzMhkVz1i&amdata=enc%3AAQAIAAAA0EYfs0F5djlWSj5L6CH2EsRz71CVoVQzhEFKtq2UWrj34ym2e2auwg7pOItVobtE1kR61wMDzyy8YrUUjmarGqDJiI0SdM3VavujZm%2BPJ3AVogTROBOIzx3TGBImB8eeWjluP7e1BvnKvBY8TGY41W5cvI6j0z2BLofIFvUs5zD2i5w3bY5hiw%2BOs5tFtJ9aa9tHLj3tY%2F%2FeJPynqKuB5WGPClbjYaxv7TcEzX5rilA7FZ0eT1jWtQ2R%2F9C7IHV8QojapXoLEMkDGNVmY909irE%3D%7Ctkp%3ABk9SR5DfpIqgYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/APStHr' ),
    listing_name  ( 'Dremel Plunge Router Attachment 335' ),
    item_price    ( 'AU$69.60' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/163968103376?hash=item262d42b3d0%3Ag%3An0UAAOSwOGld4oWk&amdata=enc%3AAQAIAAAA8GFj0urCcLn2PU0jzyFw89pi4Vqm2roJEdlsgO%2BD84pl7aLZ%2Fhb8oS%2FAAfXWdl95cyporcOSu7jfJfKlFTZoHXhBKMIN%2FkqZ145cvjJOnOuvToPTH4rws%2FLO1J%2BnbkNVWkrqJ394w6sbpvpmIuCWl4M4T8GUQillDMYgjC8kl9%2B1vz6ShkKV5TKgvWewcaX0DK71WQj7rGsRy0PWBTbuRzpRebc7rWBnwyaSX9%2BGKd0AHx4%2FuojKvdgJp1samudItFTbnAeD%2Fcdf9MbcnwvKfUCjrBtxbHR139a%2Bkh2xEK7%2Br%2FghULYCLJSHogZpRNN8fg%3D%3D%7Ctkp%3ABk9SR5DfpIqgYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/Nl7pla' ),
    listing_name  ( 'New Dremel 335-01 Plunge Lock-In Handle Router Attachment Clear Base' ),
    item_price    ( 'AU$69.95' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Dremel-335-Plunge-Router.html' ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-6732556-5855016' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-6732556-5855016' ),
    order_id        ( '249-6732556-5855016' ),
    order_date      ( '15 March 2022' ),
    order_item_name ( '' ),
    order_price     ( 'AU$45.96' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-13' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/51tk519+NJL._AC_SL1000_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.dremel.com/us/en/p/2500-01-26152500aa' ),
      link_text       ( 'Dremel 2500 Multi-Vise' ),
    ),
    manufacturer_name ( 'Dremel' ),
    model_name        ( '2500' ),
    EquipmentFeature::MULTI_VISE,
    EquipmentAttribute::ACCESSORY,
    EquipmentAttribute::ATTACHMENT,
    EquipmentAttribute::BENCH_EQUIPMENT,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Dremel' ),
    model_name        ( '2500' ),
    equipment_type    ( 'Multi-Vise' ),
    category          ( 'Vise' ),
    category          ( 'Accessory' ),
    category          ( 'Attachment' ),
    manufacturer_link (
      link_href       ( 'https://www.dremel.com/us/en/p/2500-01-26152500aa' ),
      link_text       ( 'Dremel 2500 Multi-Vise' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Dremel_4300' ),
  see_also      ( 'Dremel 4300 Rotary Tool' ),
  see_also      ( 'Dremel 335 Plunge Router' ),
  see_also      ( 'Dremel 220 Drill Press' ),
  see_also      ( 'Dremel EZ725 Rotary Tool Accessory Set' ),
  see_also      ( 'Dremel 490 Rotary Tool Dust Blower' ),
  search_url    ( 'https://www.amazon.com/s?k=Dremel+2500+Multi-Vise&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Dremel-2500-01-Rotary-Tool-Multi-Vise/dp/B000P4W3LU/ref=sr_1_1?dib=eyJ2IjoiMSJ9.AJX7CVWgD_2I62Psk9_we59emSSEeeOV3uvP1Za0WJ8.RmscTb1qSxwVkqwym22mMUvp4AIntYxLcMJrvXqwKRE&dib_tag=se&keywords=Dremel+2500+Multi-Vise&qid=1705113327&sr=8-1' ),
    affiliate_url ( 'https://amzn.to/3ROS9VO' ),
    listing_name  ( 'Dremel 2500-01 Rotary Tool Multi-Vise, 3-in-1 Attachment with 360 Degree Stationary Vise, Stand-Alone Clamp, and Tool Holder , Grey' ),
    item_price    ( 'US$28.47' ),
    item_shipping ( 'US$27.37' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Dremel+2500+Multi-Vise&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Dremel-Multi-Vise-Adjustable-Bench-Holder/dp/B000QG79ZW/ref=sr_1_43?dib=eyJ2IjoiMSJ9.naLN9D3zWYcI7I2_LAGNcq-kEWRQiyNXWOH8n4k8hgOeZrU0lM3GlHh4vdDbfsyIhEbzVbmhkHD0cebXF5A54_xTzu3kdBUinTA2kDdfhd96nhUs6Jig07T9WwwgeDlHzu0N6T-s8IH0YEsjRA2UVQ.bqBrZVAY4lcbSNusCGdoWZKl2xZsxwFLnf7j31NrtIU&dib_tag=se&keywords=Dremel+2500+Multi-Vise&qid=1705113491&sr=8-43' ),
    affiliate_url ( 'https://amzn.to/3vFFvB6' ),
    listing_name  ( 'Dremel 2500 Multi-Vise, 3-in-1 Adjustable Bench Vice with Clamp and Tool Holder' ),
    item_price    ( 'AU$46.29' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Dremel+2500+Multi-Vise' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/272816760334?epid=1555193599&hash=item3f8525660e%3Ag%3ASOMAAOSwdtlZnN9e&amdata=enc%3AAQAIAAAA8Ck4ay6rOsVpW1%2BBOF3JAjWpd76HN2P994J1ocI6urDDMDOq3sp8xfkiENYLpC1nOa7%2BxSdRsHmT%2Bu%2FB0jkJF3Za%2B7OYwawIGhEMa7lyqLDwDuvoG0nA6jLqx6mhzynEAbLgi8LbmDF9obO2NnDH8InwJVB%2BmODWm77txq7afK6ueAZccoBFxM0EMqZUEPleUil6manBFXkDbq6cI5XeS2m6UMgQsAmE2YbxAdmIFo%2BVEl2UcVNn6k%2FA4%2B7ywpoqeFLmVBdhXvu8UANv2XGTluckiO9t5485V2jJPi%2BRH44wVvQMp1xP7PmsHu5qgz6uOA%3D%3D%7Ctkp%3ABk9SR7DVgYugYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/nNsWIW' ),
    listing_name  ( 'DREMEL Multi-Vise 3 in 1 Rotary Tool Holder 2500-55' ),
    item_price    ( 'US$65.27' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/374921151734?epid=1739128586&hash=item574b0ac4f6%3Ag%3AiUEAAOSw3zRk-gHW&amdata=enc%3AAQAIAAAA0IXYBQCjrHt3Qv8ReOHXMu8Lxs1u%2FQpddc4e00nEvPt5hegrpejn4y7YGD4BMhmkeoQXlxuXguchuFaVhQIvuzn2oy7wrKE1oCV83Qo4n4MZB7LZfNA5npbFJVeQhQBW6LU4tfY44dpcl6I4kp8%2BreO%2B2LdPJsW077jrKo1XVLAx2zR2n%2B4Yt8QHXYgLhFwalEr4klYJOraDi7pzClFlbA5iKZ0CSgSl0ynFE1hYvq%2BArLDxPwktrCR8bjU5%2BlzEvGql3ZSuQbyn1SW5vEePJjU%3D%7Ctkp%3ABk9SR7LVgYugYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/24wYOs' ),
    listing_name  ( 'Dremel Multi-Vise ~ New' ),
    item_price    ( 'US$41.97' ),
    item_shipping ( 'US$37.27' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/145358887322?epid=1739128586&hash=item21d810999a%3Ag%3AVtMAAOSwt71lJnBY&amdata=enc%3AAQAIAAAA8JaufZtQEZ66V6aALwqodW7EB4w%2Fa0ZX8FIQIpeeMolKheuvtYwNKv%2FQmkhPJD2Tk6AGTEScNloWWide3S%2FC8TSOn%2FMFS4X7KdCSPqdBNrYApAOKftG%2F6yk1gChkronkSkjqIxDQmjVaOFdjngxITo3iD96hE%2F8iBe83S7YadYq8U486YMiZB%2BfKz%2FwCN%2FHDSDYnCpujpOLkEVbK8QMYbchmERNIagOdrgx5sTXSTZvdJ6Gw43ZGlJf2W0CNfc1T8qlgoTuR2MZy3DNSoFZ8wEW97OEA3Du%2BqJLi7q1JojLfykQk%2FpLNc8Hwiocqz9CS%2Bw%3D%3D%7Ctkp%3ABk9SR7LVgYugYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/fzy9P1' ),
    listing_name  ( 'DREMEL 2500-01 2500-01 Multi Vise' ),
    item_price    ( 'US$50.52' ),
    item_shipping ( 'US$37.40' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Dremel+2500+Multi-Vise' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/196186293806?epid=15062629067&hash=item2dad9d462e%3Ag%3AsE0AAOSwTtVlcBeE&amdata=enc%3AAQAIAAAA0FUrAz8mmJnrVyMiUN8ovu9lSXnMKal4bBP39aRnWTCMitC6kUwEZ8vIeuVKc5oOdade3k0MmB%2BQkRaqrTfOR5FF1oJh3H4tP3Go8uZbg7XcuhnpB3x7fUWcq9g0cDuX8DiXK6%2BoZOnhaaf%2Bk%2B1h5fEH%2BPVE5ZJmaSt01Gd1VBk5ghwRE1x0sP7vMbVtb6KGrf8%2FPXOexbyN6OTQlR2xUd8FvsLQU6eNWNC02peOMeJbLou5jmH96r6jPoNzheyB2TEq%2FCq5jisqUYdMRooORhs%3D%7Ctkp%3ABk9SR-znlIugYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/sup4wC' ),
    listing_name  ( 'Dremel Multi-Vise Rotary Attachment 2500' ),
    item_price    ( 'AU$75.41' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/145360513011?epid=1555193599&hash=item21d82967f3%3Ag%3A1WkAAOSw%7E4VlJ0fX&amdata=enc%3AAQAIAAAAwL0JvEbQ36GFQ9uFGfB7TYq3EpGetBZDtMvhjmAhyYO4cjiyITIQ39jPtLLczI8U2YLlyk0bqw729s9SSrEkYyJmS%2BSunDcM8q2280iAZHDWoqxQI3PYpX6b%2F82i1UZqW%2BNbQWqPO4yvIFdIw26RU%2F5%2FEmaxpGWtBfxz5lHl%2FWpwevZmUc7QKvTby53WAxUxWH7wCLzjQwX3jx%2BFksgfcHOeZxnc7w4sUW5XgFsjHDKhUdPbv4yEW%2Bp6LqMT2HQQbA%3D%3D%7Ctkp%3ABk9SR-znlIugYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/jYEWmE' ),
    listing_name  ( 'Dremel Multi-Vise Portable 3 in 1 Rotary Tool Holder Attachment 2500-55' ),
    item_price    ( 'AU$97.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/272816760334?epid=1555193599&hash=item3f8525660e%3Ag%3ASOMAAOSwdtlZnN9e&amdata=enc%3AAQAIAAAA0LSLSr%2BLms47NjlZ5czmVoEEzC8M5MpDKCHYZgIRDlh38Y1omZqe8Koae7BkKTqjubM43IzqY11yfcDHp3glcykTa27G1HKNqZdurZgcGIoOqlGIkCYkL57%2F6jce9NbyIrUGaS9sa67V3TqnGtjhD3hPG%2F3uTrUjwc9FThCOujUCO3g0ym0rPjjNDaVJe8Rjffhr%2BCAnwTPYuU%2FWdhqtGj3xtpmxva9I2Sq4D1%2Bhx8NAeVag9Iz%2BB9CHRTtBRKre8cUI4RjqLzZ32NHCJOWSUG4%3D%7Ctkp%3ABk9SR-znlIugYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/uWPIGF' ),
    listing_name  ( 'DREMEL Multi-Vise 3 in 1 Rotary Tool Holder 2500-55' ),
    item_price    ( 'AU$97.99' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Dremel-2500-Multi-Vise.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004420679530.html?spm=a2g0o.productlist.main.21.576873b232kV10&algo_pvid=bdb57227-724c-48d9-a20a-03b490887c9f&algo_exp_id=bdb57227-724c-48d9-a20a-03b490887c9f-10&pdp_npi=4%40dis%21AUD%21237.51%21162.29%21%21%21157.06%21107.32%21%40210324e517051138452447492ebdd6%2112000029125323652%21sea%21AU%214385823938%21&curPageLogUid=Y6pv0LxjKYs2&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DCwFQOD' ),
    listing_name  ( 'DREMEL®Multi-Vise (2500)' ),
    item_price    ( 'AU$162.29' ),
    item_shipping ( 'AU$46.17' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004426120369.html?spm=a2g0o.productlist.main.23.576873b232kV10&algo_pvid=bdb57227-724c-48d9-a20a-03b490887c9f&algo_exp_id=bdb57227-724c-48d9-a20a-03b490887c9f-11&pdp_npi=4%40dis%21AUD%21226.92%21157.75%21%21%21150.06%21104.32%21%40210324e517051138452447492ebdd6%2112000029145006089%21sea%21AU%214385823938%21&curPageLogUid=gRs81sm3x304&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DdtAcmv' ),
    listing_name  ( 'DREMEL®Multi-Vise (2500)' ),
    item_price    ( 'AU$157.75' ),
    item_shipping ( 'AU$50.93' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004061822835.html?spm=a2g0o.productlist.main.25.576873b232kV10&algo_pvid=bdb57227-724c-48d9-a20a-03b490887c9f&algo_exp_id=bdb57227-724c-48d9-a20a-03b490887c9f-12&pdp_npi=4%40dis%21AUD%21255.33%21174.67%21%21%21168.85%21115.51%21%40210324e517051138452447492ebdd6%2112000027906213240%21sea%21AU%214385823938%21&curPageLogUid=qimD8GvgfbrY&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DB3f22p' ),
    listing_name  ( 'DREMEL®Multi-Vise (2500)' ),
    item_price    ( 'AU$174.67' ),
    item_shipping ( 'AU$46.17' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B000QG79ZW/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=250-5300603-4071019' ),
    order_id        ( '250-5300603-4071019' ),
    order_date      ( '10 February 2023' ),
    order_item_name ( '' ),
    order_price     ( 'AU$82.62' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-13' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/41r3ZlM6y0L._AC_SL1046_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.dremel.com/us/en/p/220-01-26150220aa' ),
      link_text       ( 'Dremel 220 Drill Press' ),
    ),
    manufacturer_name ( 'Dremel' ),
    model_name        ( '220' ),
    EquipmentFeature::DRILL_PRESS,
    EquipmentAttribute::ACCESSORY,
    EquipmentAttribute::ATTACHMENT,
    EquipmentAttribute::BENCH_EQUIPMENT,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Dremel' ),
    model_name        ( '220' ),
    equipment_type    ( 'Drill Press' ),
    category          ( 'Drill Press' ),
    category          ( 'Accessory' ),
    category          ( 'Attachment' ),
    manufacturer_link (
      link_href       ( 'https://www.dremel.com/us/en/p/220-01-26150220aa' ),
      link_text       ( 'Dremel 220 Drill Press' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Dremel_4300' ),
  see_also      ( 'Dremel 4300 Rotary Tool' ),
  see_also      ( 'Dremel 335 Plunge Router' ),
  see_also      ( 'Dremel 2500 Multi-Vise' ),
  see_also      ( 'Dremel EZ725 Rotary Tool Accessory Set' ),
  see_also      ( 'Dremel 490 Rotary Tool Dust Blower' ),
  search_url    ( 'https://www.amazon.com/s?k=Dremel+220+Drill+Press&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Dremel-220-01-Station-MultiPro-Keyless/dp/B01MA36EDU/ref=sr_1_3?dib=eyJ2IjoiMSJ9.q8EsNzy6YCgvnr_pWe0d2zd-bpP0WlCrjKoJ7olOYzgfOo6zPZMvcbLx2lVsWEu5F2pL8aUo52KmASpCgMA9aA.HU64bZtKNau_Qa68b1_GlRkRtYvlHwAbN1Pi1eMnKWE&dib_tag=se&keywords=Dremel+220+Drill+Press&qid=1705114914&sr=8-3' ),
    affiliate_url ( 'https://amzn.to/3vArTHu' ),
    listing_name  ( 'Dremel 220-01 Rotary Tool Work Station with MultiPro Keyless Chuck' ),
    item_options  ( 'Style: Work station w/ keyless chuck' ),
    item_price    ( 'US$57.45' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Dremel-225-01-Attachment-Rotary-Station/dp/B01MEEC2Q4?dib=eyJ2IjoiMSJ9.q8EsNzy6YCgvnr_pWe0d2zd-bpP0WlCrjKoJ7olOYzgfOo6zPZMvcbLx2lVsWEu5F2pL8aUo52KmASpCgMA9aA.HU64bZtKNau_Qa68b1_GlRkRtYvlHwAbN1Pi1eMnKWE&dib_tag=se&keywords=Dremel%2B220%2BDrill%2BPress&qid=1705114914&sr=8-5&th=1&linkCode=sl1&tag=johnelliotv-20&linkId=e481dac509fec3425484e8b2012f018f&language=en_US&ref_=as_li_ss_tl' ),
    affiliate_url ( 'https://amzn.to/3SsbvSx' ),
    listing_name  ( 'Dremel 225-01 Flex Shaft Attachment with MultiPro Keyless Chuck and Rotary Tool Work Station' ),
    item_options  ( 'Style: Shaft attachment w/ chuck and work station' ),
    item_price    ( 'US$92.42' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Dremel+220+Drill+Press&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Purpose-Workstation-FlexShaft-Drilling-Woodworking/dp/B00068P48O/ref=sr_1_14?dib=eyJ2IjoiMSJ9.TDFBW4jv_K2s7EGbj6f8dE6cP_Q6OBC0BkQNRyz7UqIk_fHRaUyif0fmeR6_S0P0SHU1VfMTAyBhu1_puJ-lCC_yhVtbP2ZH_szaQzYRcJgij_FPCIylga2_t9M79cIeloCH6kR1KpjRb26KlXGLDQ.tHkulBviZTT4Did7enMM3_U8DGuWhq0clhfBD4laiLU&dib_tag=se&keywords=Dremel+220+Drill+Press&qid=1705115060&sr=8-14' ),
    affiliate_url ( 'https://amzn.to/3tQbv54' ),
    listing_name  ( 'Dremel 220 Multi Purpose 3in1 Workstation Stand (Drill Press, Rotary Tool Holder and FlexShaft Tool Holder for Bench Drilling, Woodworking and more)' ),
    item_price    ( 'AU$75.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Dremel-220-Workstation-Purpose-Drilling/dp/B0012RQG94/ref=sr_1_24?dib=eyJ2IjoiMSJ9.TDFBW4jv_K2s7EGbj6f8dE6cP_Q6OBC0BkQNRyz7UqIk_fHRaUyif0fmeR6_S0P0SHU1VfMTAyBhu1_puJ-lCC_yhVtbP2ZH_szaQzYRcJgij_FPCIylga2_t9M79cIeloCH6kR1KpjRb26KlXGLDQ.tHkulBviZTT4Did7enMM3_U8DGuWhq0clhfBD4laiLU&dib_tag=se&keywords=Dremel%2B220%2BDrill%2BPress&qid=1705115060&sr=8-24&th=1' ),
    affiliate_url ( 'https://amzn.to/3vs3io4' ),
    listing_name  ( 'Dremel 220 Workstation - 2-in1 Multi Purpose Drill Press & Rotary Tool Holder for Bench Drilling,one size' ),
    item_price    ( 'AU$113.89' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Dremel+220+Drill+Press' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/155843730394?epid=17021845671&hash=item2449029bda%3Ag%3ANRgAAOSwaeVlNUNw&amdata=enc%3AAQAIAAAA8A%2BqlSVFCZ6n81dK%2BaeHK9IIRxrYo7bGV1W9ztU4F0GlY345zMF9%2B1TBbusns5s%2BjTrc4IXGougv96JLw%2BfPSIvo1Z2zp8NOZRDVK0V7Urcmr5hLWZ5VipztALF72g4Dp3TMsLEvloTeouDPow7Ucyg%2F1WvMNMtx5q2c1NtCnNr5CNWxoTtInZVPVhK2%2F0oSgAnarlNuo1jTFjltUylIi2O0A6zfg2XUMXO9hXV2E0Y8SVgQVqKwHBzGjOyvmuI7C7qWnQYvWblUR9rCx9J0qWGrG6b6TIJBHGjRZiIhIGiwK%2FQnikBpgOCoEwfsd4v53Q%3D%3D%7Ctkp%3ABk9SR9aKxYygYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/IdBBvC' ),
    listing_name  ( 'Dremel 220-01 Rotary Tool Work Station' ),
    item_price    ( 'US$40.00' ),
    item_shipping ( 'US$48.77' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/185941715286?epid=17021845671&hash=item2b4afd6956%3Ag%3AbrcAAOSwrQBkikT8&amdata=enc%3AAQAIAAAA8Oy2o7APnCgj2Fbty0lTpyCttADE0zK%2B6tr5airgpHIhAm8Gybn%2Bs%2BWy2wL6GOe7vkKQdkJCeu7mcLRyKZp%2F1n%2BRTX%2FvMlhIOu99WjyLUSM%2FZaMOSkZkHm5jpZ5cw9B2goFrYXlt0c1L7aTAFDgF%2FekN2ouc0OBjvOuP3kQiDrudvMku4g0A4Avn3Q2dXLQb058Y9DxdPFIvJyBrpDqr%2FyBHDs17T%2F7rh5eplEL%2FQk960al%2B%2B9egqbpb7yJcOjLRTHFIuBpyUZ8%2Fd%2Fh3iCMVGiROPynglBQA3eb%2FNvntJdz2YMI9SBoaSCM3XRIg9hAKow%3D%3D%7Ctkp%3ABk9SR9iKxYygYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/JzAtAt' ),
    listing_name  ( 'Dremel 220-01 Rotary Tool Work Station' ),
    item_price    ( 'US$45.00' ),
    item_shipping ( 'US$51.93' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/305324496429?epid=17021845671&hash=item4716c2162d%3Ag%3AK6YAAOSw9iVlheom&amdata=enc%3AAQAIAAAA0IYSIMSbRipMY0URmQr7VIzelLbGeRAJ4fDAdPZY7Nwjpi6ABoUYgTEMKAyoPJftBghP8gdnXSXso6P55b5niGuagt2LOT47kAlHumNxOtOhEQI5%2FpWXhUyzTpWEFtyxTAkmDMMst69iUf8HLzX80zjYroc2jn%2B1p55o4ec57ZpGuoUVi%2F2Q%2BaZS12caW%2Fp%2BD5XmwzcUnX%2FcueOVWRD2pSW8ozUCN%2Bk8PZPOpwwRICE2K%2BEf%2BQ%2Fo3UJPttZVX6KNFu82yj30o0ZW6n%2BOUdumlY4%3D%7Ctkp%3ABk9SR9iKxYygYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/lCukFK' ),
    listing_name  ( 'Dremel 220-01 Rotary Tool Workstation Drill Press' ),
    item_price    ( 'US$64.99' ),
    item_shipping ( 'US$34.73' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Dremel+220+Drill+Press' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/143141800898?hash=item2153ea8bc2%3Ag%3AwAsAAOSwrnhgRp8j&amdata=enc%3AAQAIAAAAwEsHCYtboN767nTFn2Zl%2BF0Px0Z1HujVoO5Md2mZmfDluxQOAY61T4%2BMes%2B3hc4iBOAQHrVdWkiaxEO2%2B4hvaEWjW4A4EWeQPkSVcITVUmcs1Vjp%2BcYDsk8k%2FXF3LPyrfrGjAHgxvTxvczjQO6NeeH5xHHkrMEM3DCqwwE0X6FZk%2BUBIy1WDTQpFA3kx%2F4L5dpO72ntqrO9lVrBTLWHzxHkTxZjLwQXnsaOsSOLRj9Lfz7vxNi1%2BeLaePMEPOSbrOw%3D%3D%7Ctkp%3ABk9SR9j12YygYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/J7iSpF' ),
    listing_name  ( 'Dremel Drill Press Work Station #220-01' ),
    item_price    ( 'AU$98.00' ),
    item_shipping ( 'AU$15.40' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/364652339421?hash=item54e6f920dd%3Ag%3AueYAAOSwwAJlkCAe&amdata=enc%3AAQAIAAAA0BSWkrGm%2BRv8hwa4yn3oqbftcJW1Su3EuW29CNOrbWSLFP%2FeHIcszp6FDkJCDsEkImaSIkrPFxN7v%2Fe4GJw%2FedJzLz5S%2Fa6lT95iGpfMRFn9j8Etgi2k05O%2B4i9hgqj8d91n8BGOnxEYC5%2FTHablXxLF%2BMOkuj15eQ2aOzKQHtsk%2BiXTm4Gk8uJCZ%2By%2BnhSTGZrqSvT5b520CO4UPA5xIhFs%2F1UiQ3E97u8eosgFp2QwDw2pmOPWRu7Mrfs8XTTpwwVz0wV5ojkheeAli%2BzMvXY%3D%7Ctkp%3ABk9SR9r12YygYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/rVQh93' ),
    listing_name  ( 'Dremel - 220-01 Workstation' ),
    item_price    ( 'AU$119.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/163968086211?epid=2322699277&hash=item262d4270c3%3Ag%3A2ocAAOSwvudd4oOA&amdata=enc%3AAQAIAAAA8OnC3cdIukZelUY2bNIwt85MxstFm1U7AZL1Q9wiwtWqSYJGr33jHbB2lwMiICQCAFRp0c%2FGkyz3OMctUqdYGZQ3ImyJ5GVfF3c06ncp7vjaR6xUZKZ%2BANDeMurdbO2SYyy5wR6k3S%2BPNEj6nfQM2BAmEVgnY1nFgE3xLBNvYYVexkYaLQKtcM1qpjIThyUM3S%2BTkMO7czy7%2F9zm8Dk1kFWPcC7%2FJ4Rf37V6P%2FaD4KKxmN%2Bs5IGK0Vv7xKF14Oc1ObZ9d41OTflpzJgildGRJLDP7ImmNmZgdyTRQtLLXdxX%2F9exCofpQmJiDs%2B2pFzZvA%3D%3D%7Ctkp%3ABk9SR9r12YygYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/FvjBEM' ),
    listing_name  ( 'New Dremel 220-01 Rotary Tool Workstation Drill Press Work Station with Wrench' ),
    item_price    ( 'AU$127.95' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Dremel-220-Drill-Press.html' ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B00068P48O/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&th=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=250-1996566-6935011' ),
    order_id        ( '250-1996566-6935011' ),
    order_date      ( '10 February 2023' ),
    order_item_name ( '' ),
    order_price     ( 'AU$79.00' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-13' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71HCULgbzML._AC_SL1080_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.dremel.com/us/en/p/ez725-2615e725aa' ),
      link_text       ( 'Dremel EZ725 Rotary Tool Accessory Set' ),
    ),
    manufacturer_name ( 'Dremel' ),
    model_name        ( 'EZ725' ),
    EquipmentFeature::ROTARY_TOOL_ACCESSORY_SET,
    EquipmentFeature::DREMEL_EZ402_EZ_LOCK_MANDREL,
    EquipmentFeature::DREMEL_EZ407_EZ_DRUM_MANDREL,
    EquipmentFeature::DREMEL_EZ409_THIN_CUT_OFF_WHEEL,
    EquipmentFeature::DREMEL_EZ456_METAL_CUT_OFF_WHEEL,
    EquipmentFeature::DREMEL_EZ476_PLASTIC_CUT_OFF_WHEEL,
    EquipmentFeature::DREMEL_EZ544_CARBIDE_CUTTING_WHEEL,
    EquipmentFeature::DREMEL_EZ545_DIAMOND_CUTTING_WHEEL,
    EquipmentFeature::DREMEL_432E_CLOTH_POLISHING_WHEEL,
    EquipmentFeature::DREMEL_EZ411SA_SANDING_DISC,
    EquipmentFeature::DREMEL_EZ413SA_SANDING_DISC,
    EquipmentFeature::DREMEL_511E_FINISHING_ABRASIVE_BUFF,
    EquipmentFeature::DREMEL_512E_FINISHING_ABRASIVE_BUFF,
    EquipmentFeature::DREMEL_408_60_GRIT_SANDING_BAND,
    EquipmentFeature::DREMEL_432_120_GRIT_SANDING_BAND,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Dremel' ),
    model_name        ( 'EZ725' ),
    equipment_type    ( 'Rotary Tool Accessory Set' ),
    category          ( 'Rotary Tool' ),
    category          ( 'Cutting Disc' ),
    category          ( 'Accessory' ),
    category          ( 'Attachment' ),
    manufacturer_link (
      link_href       ( 'https://www.dremel.com/us/en/p/ez725-2615e725aa' ),
      link_text       ( 'Dremel EZ725 Rotary Tool Accessory Set' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Dremel_4300' ),
  see_also      ( 'Dremel 4300 Rotary Tool' ),
  see_also      ( 'Dremel 335 Plunge Router' ),
  see_also      ( 'Dremel 2500 Multi-Vise' ),
  see_also      ( 'Dremel 220 Drill Press' ),
  see_also      ( 'Dremel 490 Rotary Tool Dust Blower' ),
  search_url    ( 'https://www.amazon.com/s?k=Dremel+EZ725+Rotary+Tool+Accessory+Set&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Dremel-EZ725-All-Purpose-Accessory-70-Piece/dp/B00TODY7YO/ref=sr_1_4?dib=eyJ2IjoiMSJ9.UpStj6zzv1FWYcq-cSgzb3DNrD0UCFtO_IPUtRUAQP2Aek2yQHP1KI3t8VI7blClWYbsoR8cci2qJofftDlEL4nWfvW44yoJHBUpy3qcnUy4_6ywOL8vJokoTS-ryJj8.qshjb6rCJ5fTbIcqf9kOKDNpCWqnI4tSR7begSraDMk&dib_tag=se&keywords=Dremel%2BEZ725%2BRotary%2BTool%2BAccessory%2BSet&qid=1705115567&sr=8-4&th=1' ),
    affiliate_url ( 'https://amzn.to/3vzLdVk' ),
    listing_name  ( 'Dremel EZ725 All-Purpose Rotary Tool Accessory Set With Storage Kit, EZ-Lock And EZ Drum For Faster Accessory Changes, Accessories To Cut, Polish, Clean, And Sand, 70 Pieces' ),
    item_options  ( 'Size: 70-Pieces' ),
    item_price    ( 'US$59.99' ),
    item_shipping ( 'US$18.78' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Dremel+EZ725+Rotary+Tool+Accessory+Set&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B00TODY7YO/ref=ppx_yo_dt_b_search_asin_title?ie=UTF8&th=1' ),
    affiliate_url ( 'https://amzn.to/47zd70I' ),
    listing_name  ( 'Dremel EZ725 EZ All-Purpose Accessory 70 Piece Kit' ),
    item_price    ( 'AU$86.55' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Dremel+EZ725+Rotary+Tool+Accessory+Set' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/145111736530?epid=16021412391&hash=item21c95560d2%3Ag%3AcWcAAOSws0hkdnZl&amdata=enc%3AAQAIAAABAJTbSgKbLOJ5ZwMzIxwwjSga4L7qw8D42DZJtMhVfBQEKzj3qe3%2BHY6jMifpPHra3YB3RwSaCLfxRs%2F9m8CqFKkDInPSKYKQrBFZFbem0uRNZZZBBT5E149ZX1FepgK1pUfYAcX%2BVOuluixcPjAahqcbnrBrjAo7WFRWhTIe%2FRzj9XwX8y0uhRpMzGxhkJTCyS%2F3yJc%2FM6eJ1C%2Ftfr6ePYTP7eqOZomjZZ9t53t3vc6pCJs8a7Rb4ncWV4%2BZKTPmDG%2Fy6sZgXXyEReuODhnlXSRRzlXXgmNRSzbL%2B2YhAREH4jEec4dvPn16y%2B7%2B3Dh%2FpGaEniNLUJiZ%2FwBkX%2FjMqpI%3D%7Ctkp%3ABk9SR6ywiY2gYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/PQiNhc' ),
    listing_name  ( 'Dremel EZ725 All-Purpose Rotary Tool Accessory Set With Storage Kit EZ-Lock EZ' ),
    item_price    ( 'US$82.72' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Dremel+EZ725+Rotary+Tool+Accessory+Set' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Dremel-EZ725-Rotary-Tool-Accessory-Set.html' ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B00TODY7YO/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&th=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=250-9754174-2638253' ),
    order_id        ( '250-9754174-2638253' ),
    order_date      ( '23 February 2023' ),
    order_item_name ( 'Dremel EZ725 EZ All-Purpose Accessory 70 Piece Kit' ),
    order_price     ( 'AU$97.86' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B00TODY7YO/ref=ppx_yo_dt_b_asin_title_o00_s00?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=250-6408854-0744627' ),
    order_id        ( '250-6408854-0744627' ),
    order_date      ( '10 February 2023' ),
    order_item_name ( 'Dremel EZ725 EZ All-Purpose Accessory 70 Piece Kit' ),
    order_price     ( 'AU$84.30' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-13' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61E5eUKaEXL._SL1080_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.dremel.com/us/en/product-categories/rotary/accessories-attachments' ),
      link_text       ( 'Dremel Rotary Tool Accessories & Attachments' ),
    ),
    manufacturer_name ( 'Dremel' ),
    EquipmentFeature::ROTARY_CUTTING_ACCESSORY_SET,
    EquipmentFeature::HSS_WOOD_CUTTING_SAW_BLADE_DISC,
    EquipmentFeature::DIAMOND_CUTTING_WHEEL,
    EquipmentFeature::RESIN_CUTTING_WHEEL,
    EquipmentFeature::RED_RESIN_CUTTING_WHEEL,
    EquipmentFeature::ROTARY_TOOL_MANDREL,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Dremel' ),
    equipment_type    ( 'Cutting Discs for Rotary Tool' ),
    category          ( 'Rotary Tool' ),
    category          ( 'Cutting Disc' ),
    category          ( 'Accessory' ),
    category          ( 'Attachment' ),
    manufacturer_link (
      link_href       ( 'https://www.dremel.com/us/en/product-categories/rotary/accessories-attachments' ),
      link_text       ( 'Dremel Rotary Tool Accessories & Attachments' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Dremel_4300' ),
  see_also      ( 'Dremel 4300 Rotary Tool' ),
  see_also      ( 'Dremel 335 Plunge Router' ),
  see_also      ( 'Dremel 2500 Multi-Vise' ),
  see_also      ( 'Dremel 220 Drill Press' ),
  see_also      ( 'Dremel EZ725 Rotary Tool Accessory Set' ),
  see_also      ( 'Dremel 490 Rotary Tool Dust Blower' ),
  search_url    ( 'https://www.amazon.com/s?k=Dremel+Cutting+Discs+for+Rotary+Tool&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Cutting-Rotary-Accessories-Diamond-Plastic/dp/B08XK1YZ9P?keywords=Cutting+Wheels+Set+for+Dremel+Rotary+Tool,+41pcs+Diamond+Cutting+Discs+1/8%22+Shank+Mini+Cut+Off+Wheel+Dremel+Rotary+Tool+Accessories+with+5Pcs+Mandrels+for+Woodworking+Metal+Glass+Plastic+Stone&qid=1698687932&sr=8-1-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9hdGY&psc=1&linkCode=sl1&tag=johnelliotv-20&linkId=d02d62623fe1e058e57cae11b9a09795&language=en_US&ref_=as_li_ss_tl' ),
    affiliate_url ( 'https://amzn.to/3O1ks2g' ),
    listing_name  ( 'Cutting Discs for Dremel Rotary Tool, 3 Different Saw Blades to Meet Your Different Needs, Cutting Wheel Set Can Cutting Wood/Metal/Plastic/Glass/Stone and Make DIY Craft' ),
    item_price    ( 'US$13.39' ),
    item_shipping ( 'US$17.63' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Dremel+Cutting+Discs+for+Rotary+Tool&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B098LDFPLT/ref=ppx_yo_dt_b_search_asin_title?ie=UTF8&psc=1' ),
    affiliate_url ( 'https://amzn.to/3u44KfY' ),
    listing_name  ( 'Cutting Wheels Set for Dremel Rotary Tool, 41pcs Diamond Cutting Discs 1/8" Shank Mini Cut Off Wheel Dremel Rotary Tool Accessories with 5Pcs Mandrels for Woodworking Metal Glass Plastic Stone' ),
    item_price    ( 'AU$16.29' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Dremel+Cutting+Discs+for+Rotary+Tool' ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Dremel+Cutting+Discs+for+Rotary+Tool' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Dremel-Cutting-Discs-for-Rotary-Tool.html' ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B098LDFPLT/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=250-9076785-9072640' ),
    order_id        ( '250-9076785-9072640' ),
    order_date      ( '10 March 2023' ),
    order_item_name ( '' ),
    order_price     ( 'AU$15.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-13' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61kQtjpE0pL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.dremel.com/us/en/p/490-26150490aa' ),
      link_text       ( 'Dremel 490 Rotary Tool Dust Blower' ),
    ),
    manufacturer_name ( 'Dremel' ),
    model_name        ( '490' ),
    EquipmentFeature::ROTARY_TOOL_DUST_BLOWER,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Dremel' ),
    model_name        ( '490' ),
    equipment_type    ( 'Rotary Tool Dust Blower' ),
    category          ( 'Rotary Tool' ),
    category          ( 'Dust Blower' ),
    category          ( 'Accessory' ),
    category          ( 'Attachment' ),
    manufacturer_link (
      link_href       ( 'https://www.dremel.com/us/en/p/490-26150490aa' ),
      link_text       ( 'Dremel 490 Rotary Tool Dust Blower' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Dremel_4300' ),
  see_also      ( 'Dremel 4300 Rotary Tool' ),
  see_also      ( 'Dremel 335 Plunge Router' ),
  see_also      ( 'Dremel 2500 Multi-Vise' ),
  see_also      ( 'Dremel 220 Drill Press' ),
  see_also      ( 'Dremel EZ725 Rotary Tool Accessory Set' ),
  search_url    ( 'https://www.amazon.com/s?k=Dremel+490+Rotary+Tool+Dust+Blower&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/gp/product/B00CM5ZCW2?&linkCode=sl1&tag=johnelliotv-20&linkId=ffee9585c3cbcb6c72e8cbf9a6b78946&language=en_US&ref_=as_li_ss_tl' ),
    affiliate_url ( 'https://amzn.to/48yyDUK' ),
    listing_name  ( 'Dremel 490 Rotary Tool Dust Blower Attachment, Ideal for Sanding, Engraving, and Carving' ),
    item_price    ( 'AU$9.98' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Dremel+490+Rotary+Tool+Dust+Blower&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Dremel-490-Dust-Blower/dp/B00CM5ZCW2/ref=sr_1_1?dib=eyJ2IjoiMSJ9.TDFBW4jv_K2s7EGbj6f8dBihh_S67JBvCl8fnJgtC-cJ6KxBh5DoYI87Sz3pbqmvS23Cwaeo8Ted6Vei565TJKcDe-XxrYjWUCI29xyeafn9qzzP7988IdTN8wFcdipp1kqFhTiJd9JWfml_gqkWXg.94KzT0l0fCV-q6TsvTwbTXkvrIJuTvcGcfKy7lXc_XY&dib_tag=se&keywords=Dremel%2B490%2BRotary%2BTool%2BDust%2BBlower&qid=1705116348&sr=8-1&th=1' ),
    affiliate_url ( 'https://amzn.to/4b8IBOD' ),
    listing_name  ( 'Dremel 490 Dust Blower' ),
    item_price    ( 'AU$9.98' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Dremel+490+Rotary+Tool+Dust+Blower' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/323245196560?hash=item4b42ea4510%3Ag%3A1tYAAOSw7aFa8GoJ&amdata=enc%3AAQAIAAAA0IDfXm8xcxBp4enYm%2B0%2FQQNYVWGytAk%2FN%2FxWcPKmXtcd%2FiCeF8bv9tXuL%2BE5G57KXlGHSLCaHpczBcQk2Curzb6841U3zjz9ifeirukgJI%2BuLWwvMt3RRumffqqOzEGytfw4y74gQ2GQfDvErlJdH2w0YahA%2BvZLSZJIIY5nwVzhi1c5CFpVneu75BHMewfL7tyKtta%2BxLKK0NJioSA4AAcWPP9zZq%2BYz8Y0aG1OYWYMdrD9xP%2F%2BtFi8Iyn%2FY6yiq7jCWKlvKCJHP8jIy%2FXP1U8%3D%7Ctkp%3ABk9SR-Sd3Y2gYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/LX8IVO' ),
    listing_name  ( 'Dremel 490 Rotary Sander/Engraver/Carving Tool Dust Blower' ),
    item_price    ( 'US$11.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/153011989894?hash=item23a039ad86%3Ag%3ABIkAAOSwKiZa7xSE&amdata=enc%3AAQAIAAAA8JLnsBiNXm5kX86LZ6wqHqLHmxbob6RWGtEutV3huh2cZF5op%2FJkMj6KTkZxpEnXWiRg%2F6qcKUkfLgEE09GExVHs88gKfAbEYQTqoEXJgG3Bmxls9%2F9LB%2BUKK9xXa%2FsyXVJjV%2F9Xelil%2FvJdsW8PgquELqVARC1S3RBr8zpOG9mL2bnOAv2BJRh3nbqGzepkRKGIEyxS9YNl4MiNm7JETpCComEowWoaFQuvC8eIN1zkxe29VcgQ2y0koMexZDYoUjdef6B1bd3lEeS4KFkRHL3duXrrEIx83jNYu5uwdd9Pjysi0y1Qlt3f78nECjlpiw%3D%3D%7Ctkp%3ABk9SR-Sd3Y2gYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/uVEQ7V' ),
    listing_name  ( '490 Rotary Sander Engraver Carving Tool Dust Blower Dremel' ),
    item_price    ( 'US$11.79' ),
    item_shipping ( 'US$6.77' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/204501999040?hash=item2f9d44ddc0%3Ag%3AVeMAAOSwS6hlLDOP&amdata=enc%3AAQAIAAAA0Jt6MVrdHRaLkEpUS1yJ6rjZBXW35FXToKS8mQ%2BUyIkLmOgyE1umT5CnLb71CTttfiZIEGD3ZmvccY4jNURFwTkN4eUtDVTggShOANVrGxRbsBAPBMNLpR%2FIH65P%2Bj2g3zt8ORNPSHYdtQtPhJgqWP9I7fPvqnUuJGX58wlWE74KuDYs0aO6fMAbqBX6hR1AX6WKxyiLjJj10nlo85yC7Ws4%2FaxqoYh87XvX1XnUssDTErJBiXxBy3KG4cdmgU0aAnQ0AiTib%2Br%2BIYZTFU4UYfw%3D%7Ctkp%3ABk9SR-Sd3Y2gYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/fm5xTH' ),
    listing_name  ( 'Dremel Geniune OEM Replacement Dust Attachment # 26150490AA' ),
    item_price    ( 'US$7.99' ),
    item_shipping ( 'US$15.64' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Dremel+490+Rotary+Tool+Dust+Blower' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/323245196560?hash=item4b42ea4510%3Ag%3A1tYAAOSw7aFa8GoJ&amdata=enc%3AAQAIAAAA0IDfXm8xcxBp4enYm%2B0%2FQQNYVWGytAk%2FN%2FxWcPKmXtcd%2FiCeF8bv9tXuL%2BE5G57KXsKPyK8REw8XST1ypUlNcaphvmdCd8T1zZ1uJxKR1K5EqY8ab6UK%2B0K2BIuoxID%2BqBE5EhmJ%2BQPj2xrpd49br9adlMil6eWu9fnlWM2twNnHNwc4iQwnSbbiLcNA2wPhjdB7tFi9Fe1Bhged%2BDEESVPwaKW0qqZXmkroQRie0CrEDe81C0QbKaV4oN2YVzqsmSAKQfqpzZu9DwGt3MQbqHk%3D%7Ctkp%3ABk9SR9CC8I2gYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/LpS1BZ' ),
    listing_name  ( 'Dremel 490 Rotary Sander/Engraver/Carving Tool Dust Blower' ),
    item_price    ( 'AU$19.80' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/143982270013?hash=item218603163d%3Ag%3ANFUAAOSwh6lgVDcy&amdata=enc%3AAQAIAAAA8FWMibzWkwapP1oE0BczfAenHf%2BrOpoJtO5t1A1jDyfyNNs2LYFP%2FfaSeP3yoyajR1%2F3wa13ZFClflBm9rkbFIgOZ%2Bye%2FugufY1NuNOcpyHxzCkleII1pnNufAPtFN%2FqsxYqljkgdmoh7zBbfE0rcc7GdZ3su4bWHLtjelf73RNr%2B1nWlXXRp5URMlbvbp73pYFaQXUVk3UBrypZY9vvrHTsHaUcUCxIUuS%2F2aZSH%2BmWCIDCTJvC9Yg%2BgcJpZJnU%2B6ZDnNL4OjLOMPxyZWbODDZL%2FcibrlWLjNl%2FUSa97gNWaCME3BNDtyqdoZni0xlz6A%3D%3D%7Ctkp%3ABk9SR86C8I2gYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/eJyRex' ),
    listing_name  ( 'Dremel 490 Dust Blower' ),
    item_price    ( 'AU$18.41' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/225922604268?hash=item349a095cec%3Ag%3AiS8AAOSwyf9lgRRX&amdata=enc%3AAQAIAAAA8DiuONQW0SwmpNnp7o7wU73kuPJrTsyI%2F5TGia1B3Clk45MS5g%2F7fOndb%2F%2BJhNLmVk84jIZnz92smMysIE%2BmrcuVnPtOkazViVlXaMcXoMqODyKZtqdpFPU6MQwO%2FIp9Ie8Al9d3MgB%2FMjOj1psfsayZ%2FxreuPZHoH6uR4XgcDMfo8t9lqYSuS9HHi4UZyGFuMwKARk9T%2BmmsB4MAjX3VW9u%2Bg3EVIW0k7TxaO84%2BiVLKTGlM2UYs9UKMC64HvScZRZ5H41ozXrnsMupHEOxHyoKeS2gKG%2BpMXAiTJ%2FK6ozzDUTi2RKvu4EJVg9EZN0ewg%3D%3D%7Ctkp%3ABk9SR86C8I2gYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/1rlvoI' ),
    listing_name  ( 'Dremel Dust Blower Cordless Black 3.48 x 4.9 x 9.96 cm 9 Grams' ),
    item_price    ( 'AU$14.99' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Dremel-490-Rotary-Tool-Dust-Blower.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005457220281.html?spm=a2g0o.productlist.main.21.e071772eJBpVtr&algo_pvid=37679c6d-2663-4e82-9127-34f06a3f989a&algo_exp_id=37679c6d-2663-4e82-9127-34f06a3f989a-10&pdp_npi=4%40dis%21AUD%2124.36%2112.18%21%21%21115.47%2157.73%21%402103205117051166964565778e8567%2112000033159135481%21sea%21AU%214385823938%21&curPageLogUid=3LXKlhlqFBv5&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DlJvEu9' ),
    listing_name  ( 'Dremel 490 Dust Blower Attachment Rotary Tool Accessory For Sanding Engraving Carving Fits on Dremel 8000 4000 3000 200 8220' ),
    item_price    ( 'AU$12.18' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005453114221.html?spm=a2g0o.productlist.main.23.e071772eJBpVtr&algo_pvid=37679c6d-2663-4e82-9127-34f06a3f989a&algo_exp_id=37679c6d-2663-4e82-9127-34f06a3f989a-11&pdp_npi=4%40dis%21AUD%2122.93%2110.55%21%21%21108.65%2149.98%21%402103205117051166964565778e8567%2112000033141092393%21sea%21AU%214385823938%21&curPageLogUid=wSH3T0GYyBpX&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DCtgU8V' ),
    listing_name  ( 'Dremel 490 Dust Blower with Thread for Electric Grinders Flex Rotary Tool Power Tools Accessories Home Diy Woodworking' ),
    item_price    ( 'AU$10.55' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005003969319648.html?spm=a2g0o.productlist.main.25.e071772eJBpVtr&algo_pvid=37679c6d-2663-4e82-9127-34f06a3f989a&algo_exp_id=37679c6d-2663-4e82-9127-34f06a3f989a-12&pdp_npi=4%40dis%21AUD%2129.56%2114.48%21%21%2119.55%219.58%21%402103205117051166964565778e8567%2112000027595493557%21sea%21AU%214385823938%21&curPageLogUid=bQX4GhoOQt4y&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_De9m5YZ' ),
    listing_name  ( 'Dremel 490 Dust Blower with thread Electrical Grinding Machine for Dremel Rotary Tool Accessory Suit for DREMEL 3000' ),
    item_price    ( 'AU$14.48' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B00CM5ZCW2/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&th=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=250-3317902-8890210' ),
    order_id        ( '250-3317902-8890210' ),
    order_date      ( '16 July 2022' ),
    order_item_name ( '' ),
    order_price     ( 'AU$10.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-13' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71iSotbSPCL._SL1500_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.aten.com/global/en/products/kvm/desktop-kvm-switches/cs1922/' ),
      link_text       ( 'ATEN CS1922 2-Port DisplayPort KVM' ),
    ),
    manufacturer_name ( 'ATEN' ),
    model_name        ( 'CS1922 2-Port' ),
    EquipmentFeature::DISPLAY_PORT_KVM,
    EquipmentAttribute::COMPUTER_EQUIPMENT,
    EquipmentConnectivity::DISPLAY_PORT,
    EquipmentConnectivity::USB,
  ),
  web_link(
    link_text   ( 'Printer Cable 15FT(4.5m),AkoaDa USB 2.0 Printer Cable USB Type A to B Male Printer Cable' ),
    link_href   ( 'https://www.amazon.com.au/gp/product/B087BZDQQS' ),
  ),
  web_link(
    link_text   ( 'sweguard 4k dp Cable' ),
    link_href   ( 'https://www.amazon.com.au/gp/product/B08HWRLRKP' ),
  ),
  /*
  equipment_info(
    manufacturer_name ( 'ATEN' ),
    model_name        ( 'CS1922' ),
    equipment_type    ( '2-Port DisplayPort KVM' ),
    category          ( 'KVM' ),
    category          ( 'DisplayPort' ),
    category          ( 'USB' ),
    manufacturer_link (
      link_href       ( 'https://www.aten.com/global/en/products/kvm/desktop-kvm-switches/cs1922/' ),
      link_text       ( 'ATEN CS1922 2-Port DisplayPort KVM' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Aten_CS1922' ),
  warning( 'I have the CS1922 but the CS1922M is newer and better, I\'ve included links to both.' ),
  search_url    ( 'https://www.amazon.com/s?k=ATEN+CS1922+2-Port+DisplayPort+KVM&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/ATEN-CS1922-2-Port-KVMP-Switch/dp/B01N13Y0WR/ref=sr_1_3?dib=eyJ2IjoiMSJ9.djcsi35DxJ7p1NyjMjq4ZyjSlsMz9pxz0-DW8x68ZQUXxjNbQZ-DnBXuYGeHg9jAsjh55-K4PSaIWa6uRtvox9DYKn5mlVzeU0Nha5AZ1DU.J9wLjR1SOJSueDRBeznKTSs431OVG-L5jP6QsNRfcoY&dib_tag=se&keywords=ATEN+CS1922+2-Port+DisplayPort+KVM&qid=1705118941&sr=8-3' ),
    affiliate_url ( 'https://amzn.to/3ShhwkG' ),
    listing_name  ( 'ATEN CS1922 2-Port USB 3.0 4K DP KVMP Switch' ),
    item_price    ( 'US$299.00' ),
    item_shipping ( 'US$27.37' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Aten-2-Port-Switch-DisplayPort-CS1922-AT-G/dp/B01N6BHK73/ref=sr_1_4?dib=eyJ2IjoiMSJ9.djcsi35DxJ7p1NyjMjq4ZyjSlsMz9pxz0-DW8x68ZQUXxjNbQZ-DnBXuYGeHg9jAsjh55-K4PSaIWa6uRtvox9DYKn5mlVzeU0Nha5AZ1DU.J9wLjR1SOJSueDRBeznKTSs431OVG-L5jP6QsNRfcoY&dib_tag=se&keywords=ATEN+CS1922+2-Port+DisplayPort+KVM&qid=1705118941&sr=8-4' ),
    affiliate_url ( 'https://amzn.to/4aWrf7u' ),
    listing_name  ( 'ATEN CS1922 2-Port USB 3.0 4K DisplayPort KVMP Switch (Cables Included)' ),
    item_price    ( 'US$299.99' ),
    item_shipping ( 'US$27.37' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/3-0-Hub-Supported-DisplayPort-Switch-cs1922/dp/B07964B613/ref=sr_1_5?dib=eyJ2IjoiMSJ9.djcsi35DxJ7p1NyjMjq4ZyjSlsMz9pxz0-DW8x68ZQUXxjNbQZ-DnBXuYGeHg9jAsjh55-K4PSaIWa6uRtvox9DYKn5mlVzeU0Nha5AZ1DU.J9wLjR1SOJSueDRBeznKTSs431OVG-L5jP6QsNRfcoY&dib_tag=se&keywords=ATEN+CS1922+2-Port+DisplayPort+KVM&qid=1705118941&sr=8-5' ),
    affiliate_url ( 'https://amzn.to/3tQdDtA' ),
    listing_name  ( 'Aten USB 3.0 Hub with DCI K Supported 2 Port USB DisplayPort MST KVMP Switch cs1922 m' ),
    item_price    ( 'US$299.99' ),
    item_shipping ( 'US$27.37' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=ATEN+CS1922&crid=2ZO9HNIZNU2RB&sprefix=aten+cs1922+2-port+displayport+kvm%2Caps%2C227&ref=nb_sb_noss' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/CS1922M-2-Port-DisplayPort-Switch-Included/dp/B079RBB1L9/ref=sr_1_20?crid=2ZO9HNIZNU2RB&dib=eyJ2IjoiMSJ9.D8ozTkbPfa8LsV-3LgaJl9NWVZcu6FLCcyyLKvAUa1gFtEs-RM-x-YOq3smFwagVKRBSkw31ugAlqr6ZeMNV8Yi8peggI93yFB5Q6TrkrVJECAdqIRnsTNi-rrBe0bYcSw5yMGTtoxumooUMoZaLLQ.4GHzp5efoGMjVEK8qxk6kwrhvWmKGM2GbjImeFwu2DY&dib_tag=se&keywords=ATEN+CS1922&qid=1705119118&sprefix=aten+cs1922+2-port+displayport+kvm%2Caps%2C227&sr=8-20' ),
    affiliate_url ( 'https://amzn.to/3RZCJOE' ),
    listing_name  ( 'ATEN 2-Port USB 3.0 4K DisplayPort MST KVMP Switch (Cables Included)' ),
    item_price    ( 'AU$333.01' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/ATEN-CS1922-DP-1-1-KVM/dp/B01N6BHK73/ref=sr_1_1?crid=2ZO9HNIZNU2RB&dib=eyJ2IjoiMSJ9.D8ozTkbPfa8LsV-3LgaJl9NWVZcu6FLCcyyLKvAUa1gFtEs-RM-x-YOq3smFwagVKRBSkw31ugAlqr6ZeMNV8Yi8peggI93yFB5Q6TrkrVJECAdqIRnsTNi-rrBe0bYcSw5yMGTtoxumooUMoZaLLQ.4GHzp5efoGMjVEK8qxk6kwrhvWmKGM2GbjImeFwu2DY&dib_tag=se&keywords=ATEN+CS1922&qid=1705119118&sprefix=aten+cs1922+2-port+displayport+kvm%2Caps%2C227&sr=8-1' ),
    affiliate_url ( 'https://amzn.to/3tUXJhB' ),
    listing_name  ( 'ATEN CS1922 DP 1.1 KVM, Black' ),
    item_price    ( 'AU$503.96' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Aten-2PORT-USB3-0-Switch-CS1922/dp/B01N13Y0WR/ref=sr_1_2?crid=2ZO9HNIZNU2RB&dib=eyJ2IjoiMSJ9.D8ozTkbPfa8LsV-3LgaJl9NWVZcu6FLCcyyLKvAUa1gFtEs-RM-x-YOq3smFwagVKRBSkw31ugAlqr6ZeMNV8Yi8peggI93yFB5Q6TrkrVJECAdqIRnsTNi-rrBe0bYcSw5yMGTtoxumooUMoZaLLQ.4GHzp5efoGMjVEK8qxk6kwrhvWmKGM2GbjImeFwu2DY&dib_tag=se&keywords=ATEN+CS1922&qid=1705119118&sprefix=aten+cs1922+2-port+displayport+kvm%2Caps%2C227&sr=8-2' ),
    affiliate_url ( 'https://amzn.to/3NY9Gda' ),
    listing_name  ( 'ATEN CS1922 2-Port USB 3.0 4K DP KVMP Switch' ),
    item_price    ( 'AU$510.96' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=ATEN+CS1922+2-Port+DisplayPort+KVM' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/276235405978?hash=item4050e9ca9a%3Ag%3Ari0AAOSwfNZlgCPd&amdata=enc%3AAQAIAAABANQN1AnpVxK3TMrsn9JVRiL7s7yseTFwjlAnAaIruCXhuwRXU3rAmK0VpSCiba6rNzQ%2FlA7CSpCBmj%2F946yl3OzoPqoKww8LsEr8zaYpZXmB7d%2F9%2FEUI%2B2QCYJKFKxFxFXJV8vu%2FHUpX4jV8g6zzoQtoAfAiyWuk9fLJo59PYbkDBkjtK5zSFyv2hpLryNNXxt2VsZ1UY7hWOejR%2BgmlRx0TDXZx7M409slno0RcsSXvmcBrYisHJCBsO4gwQN465QUA0dM79Q1VlNv61rSLXBHKaweGZb42EF9gTxf7%2Bz1t%2BRLspMjhbK5gyLaPa520VTHoqbO1Y7VXkKHcKBWbFqg%3D%7Ctkp%3ABk9SR8qH_JCgYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/j6hIyv' ),
    listing_name  ( 'Aten Cs1922 2 Port Usb 4K Displayport Kvm Switch' ),
    item_price    ( 'US$546.13' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/166507033598?hash=item26c497b3fe%3Ag%3AVgYAAOSwwOFlgFMM&amdata=enc%3AAQAIAAABAODCG8oJ1KMyeCiM6WyVLWinhQhryEhyCTiy2Iw0YD1vsjtbRhK9vUwCg2Dt3QUUmyyhpJwM%2Bbi8wsHWW78ehyqIeccQjGIvS4RcZJ0X%2B9ty1p9pSx6hhwpIPHYpK%2BUtSVo%2BdPU40bjk25Evn%2F7%2BVQ1jhY1lcR%2FmvOHWUFALQ3IYM8GgRhlRizs1xnRwFylgs4eLm8dg3gezxXU4U0eahvYOzOQPf8SIWLo9EJnLqw1LTOUzQUhrvsoJKVjJNWzL62g0IXEkMLwrGiOfdfvc75JuTSaif6%2BilS6O8Nn1mhgDMUjE%2FTlSvxg5DadqyjPnC86D1GwOZN7Ym2Jw4ZlLEig%3D%7Ctkp%3ABk9SR8qH_JCgYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/UeKRJv' ),
    listing_name  ( 'Aten Cs1922 2 Port Usb 4K Displayport Kvm Switch' ),
    item_price    ( 'US$546.13' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=ATEN+CS1922+2-Port+DisplayPort+KVM' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/276235405978?hash=item4050e9ca9a%3Ag%3Ari0AAOSwfNZlgCPd&amdata=enc%3AAQAIAAAA4IHE92SDibpMJhkc8P2656MHtnqspu%2BUJI6yUGhHY0V5ViB%2FzzO%2BfkF%2Fn2jJJsMk4XSIO4NlHRJWAkRi0jC7CLKbLt2C3dhK%2F2xmt8fu3cgtl0CJUHar%2Buc62SP95MuLGpxsc%2BTDBAMg%2BbcsICaK8GjOscFKhiH4lo2TRXEQW57z65IjeUUXJPhaxIdcG0GAPABaCmahR9vxzfctd%2BoGeFkSoZZVRnQQCoJ3ZP1Ph2WZ4N7t%2BQQ0OrnFNErXOUSxjfy6TSsCey2GHC28TLE2A%2BUfUgLAxKRAU6Jz0QvLi7ZX%7Ctkp%3ABk9SR5aMjpGgYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/rmLrnh' ),
    listing_name  ( 'Aten Cs1922 2 Port Usb 4K Displayport Kvm Switch' ),
    item_price    ( 'AU$819.95' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/166507033598?hash=item26c497b3fe%3Ag%3AVgYAAOSwwOFlgFMM&amdata=enc%3AAQAIAAAA4GnoRv1C0s1XQ69pxvu67l6aH3vab02whWPNwAui3j4PSgJyhIBm0z5mKkbqmB7bN48lH3SHjEey%2B5hTMDMfvQByZgIU%2BUZoxzcPg7GrxyVgorjIEbFlJizjgndv7hOo0I%2BqjTDlALXrtjunDMReUM9eCiNVv9VT%2Fngjpp8eFupXfHUkW%2Fp0dNa1R8cBDZG2AzHcyCcJ1VMTnTDA3Oh316pKhJAnN08%2FxZBsqOR6PNqCVfjKonHe5DWACJ5QRuQahmWIq2kFixhoCoJk9yzuWDdjVGg7%2B03TRK7p8k6ussO1%7Ctkp%3ABk9SR5aMjpGgYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/nJzAuf' ),
    listing_name  ( 'Aten Cs1922 2 Port Usb 4K Displayport Kvm Switch' ),
    item_price    ( 'AU$819.95' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-ATEN-CS1922.html?spm=a2g0o.productlist.search.0' ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B01N6BHK73/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-7758197-5896666' ),
    order_id        ( '249-7758197-5896666' ),
    order_date      ( '12 February 2022' ),
    order_item_name ( '' ),
    order_price     ( 'AU$508.72' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-13' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Hb4214d8fb356492fa77b565e8e230dbfJ/UNI-T-UTi260B-Infrared-Thermal-Imager-256-x192-Industrial-Handheld-Testing-Thermometer-For-Repaire-Floor-Heating.jpg_.webp' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://thermal.uni-trend.com/product/uti260b/' ),
      link_text       ( 'UNI-T UTi260B Thermal Imager' ),
    ),
    manufacturer_name ( 'UNI-T' ),
    model_name        ( 'UTi260B' ),
    EquipmentFeature::THERMAL_IMAGER,
    EquipmentAttribute::HAND_TOOL,
    EquipmentConnectivity::USB,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'UNI-T' ),
    model_name        ( 'UTi260B' ),
    equipment_type    ( 'Thermal Imager' ),
    category          ( 'Thermal Imager' ),
    category          ( 'Camera' ),
    category          ( 'Hand Tool' ),
    category          ( 'USB' ),
    manufacturer_link (
      link_href       ( 'https://thermal.uni-trend.com/product/uti260b/' ),
      link_text       ( 'UNI-T UTi260B Thermal Imager' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/UNI-T_UTi260B' ),
  see_also      ( 'NOYAFA NF-521 Thermal Imager' ),
  search_url    ( 'https://www.amazon.com/s?k=UNI-T+UTi260B+Thermal+Imager&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=UNI-T+UTi260B+Thermal+Imager&s=price-asc-rank' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=UNI-T+UTi260B+Thermal+Imager' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/284152669853?hash=item4228d1a69d%3Ag%3AFugAAOSwg5pjfZuL&amdata=enc%3AAQAIAAAA8FzpyWZLyx0uWTv5OsgMb4GaqlptRf29cM%2B6WO%2Fk71WFJmKbLIyRG19d9Uhvo15Dym1FluhzmNOPfiNvr6sJYFicqUFiqCqBufsDMlCTz5mmpT6WBl%2Bzs%2BvnCrdgk3qiIX4n3ZLw%2Bsm%2FrHb%2FbZikETAE%2BuyV7OD%2B8f1opWKNYnzbVGLKRxYDtYHhfjtvUCwF7%2FpuhCRYgg4l15vmnXy1I%2FmQKYq4BhKeV%2B6VTdWzkLu%2F9VbYXhofLoojnnpRL6zuATlH%2BHJ%2BcQPVelb9KR5dIU%2BtlzRf6mM5uTwI2I4ohBTQX4PNZb3fiMLcqrgUW0jE%2BQ%3D%3D%7Ctkp%3ABk9SR57auZGgYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/BHLIGV' ),
    listing_name  ( 'UNI-T UTi260B Industrial Infrared Temperature Imaging Camera Thermal Imager ✦Kd' ),
    item_options  ( 'MPN: UTi260B' ),
    item_price    ( 'US$244.59' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/285340559663?epid=27057619128&hash=item426f9f692f%3Ag%3AR6AAAOSwOM1jfZpv&amdata=enc%3AAQAIAAAA0FfIWIcT1A5n6IGgCcD3UmBbrGMi9sHMJU6Rw0y6hGNgzQEoAK4el5OPKSkfxmHohutYQAhoLhEtKwgOPeAjh6uK5W%2FUVQZ%2Fv%2B%2BDT12y9htLTxNuON9iqVsXMtR%2BW8C8xH8TT34M6Fp6ivO%2BczX2Sk%2FmDDFrM8emilbd7Ebf%2B0RBUzaJOaZ2nzna2vBtBptknw6EHDT5B%2FT4LMUeMnP0XgcZx1%2FIHIymh8w2MYbtR3OTwEyROZocjDlY%2F4nfZ87uRapp0qteiHnTrcE8e4JLty4%3D%7Ctkp%3ABk9SR57auZGgYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/Q2V1Oy' ),
    listing_name  ( 'UNI-T UTI260B UTi260A Thermal Imager Resolution 256 x 192 Infrared Camera ✦Kd' ),
    item_options  ( 'MPN: UTi260B' ),
    item_price    ( 'US$244.59' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/314911077994?hash=item495229b66a%3Ag%3AMowAAOSwLOJkj-0Q&amdata=enc%3AAQAIAAAA8EBTVDWLE19BGgZEk2MyePgDa2V52IFnXEJptfwFgCZmJsgZfPk%2FidZ1jBP0NWPuOGJFi142ZktgxDEIm3edhfCqRqRP52XkwSqc8kMBpb1znhsb0oqnOJ4J0sZqKxP1thUgrYoz6FDEWq7hd9bvrzaUjeH3iLXURNCNGj5TbbvXIcpmjRFqQgWAZ6XiwQ2TidGyJiOMGx0pNj%2FD2Ns7Wa3TX9%2B8qA2aPt%2BTu2QOKPa32kYd%2BWf2KpEOQMeHy%2FUR8DaOo5whDj2qUavB9ar%2FPsFiF7aL2hG06bKgd2PbcHL7uUyk%2BLo6nlkYGhK6s%2FSbuQ%3D%3D%7Ctkp%3ABk9SR57auZGgYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/3Asr2a' ),
    listing_name  ( 'UNI-T UTI260B UTi260A Thermal Imager Resolution 256 x 192 Infrared Camera✦' ),
    item_options  ( 'Model: UTi260B' ),
    item_price    ( 'US$245.90' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=UNI-T+UTi260B+Thermal+Imager' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/385057758563?hash=item59a73b1d63%3Ag%3A4g0AAOSwn5ti9X0X&amdata=enc%3AAQAIAAAA8Mu10acbE9vD4wZyFV9WBL7RZgV4tn9135wWFwwJo36iPyxn49AkVCVhO02x%2FzsQRM1SuV8zucrIe98d%2FySRAutgWpbAcK7esOAR7vjVTFzL1SzS7vYA7gASRAwQqNAunpFTtdIxy50jt%2BlmrkfmsEuhIOOTz5XjEi4fDkIiUKa5q5vOnMIIKe4X846fmoClP8O%2BFxza5JKzZdnkwkAXcx6HiZEyuInWVP0aXNXFiZKTSlU%2BTnxeJ3WaZO2vHBZNNvtmqa8dfDkqUGUVBVpztOb7O6oRCXdyVMj6LgLZFHEqR7O%2Bhjm4ZXkEuGwc1Oh7zA%3D%3D%7Ctkp%3ABk9SR7Toz5GgYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/fnXSak' ),
    listing_name  ( 'UNI-T UTi85A UTi260B Industrial Infrared Thermal Imager Temperature Camera' ),
    item_options  ( 'Product: UTi260B' ),
    item_price    ( 'AU$528.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/196181056764?hash=item2dad4d5cfc%3Ag%3Aw9YAAOSwNsxlnms9&amdata=enc%3AAQAIAAAA8Kww%2F%2F%2Ft282kSpNKb8CZ2edHDTYg9uEihZC3Yz0AeSATbw1quAg18CGIC%2FiIRFIMvGMKa3qx6i8l5ML%2F7fqjPEXiObiwYBefAPXIhKUKo1KibxY3C6EwzdsXw75dNoilVznHK%2FZpmU6Jvrt%2BFGbYUr7DNbasaYJ5POIfZNtOt32b86UQTlf0BdodXJup0uZDYl7CeDHPK7ACAQTY35ZnZPWEbeeURJ0ftFSCzj9yC7hoROchyrPXgooIuTMCYsbh9noOM8QBc4V2sFPFYFhD7simSvxxNvuf3rPW2znA%2BYCSBRyYWInOGFdaoqbyu8%2B4Wg%3D%3D%7Ctkp%3ABk9SR7Toz5GgYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/bYcZOD' ),
    listing_name  ( 'UNI-T UTi260B Industrial Infrared Thermal Imager Temperature Imaging Camera AU' ),
    item_price    ( 'AU$399.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/285034536643?hash=item425d61dec3%3Ag%3AyOgAAOSwESBjbWvK&amdata=enc%3AAQAIAAAA8HD%2BAJm2NBSziPNaX%2B%2BUCf2hfz6zR5r%2B9EsI%2BDkMO9nNVkEwwvFsZsJHyQ6U7D1ZpXWybPV6jsglSGbOSarxwdQiPedp%2Fvr%2Fs9iJGfmXQ%2BGMkjZdXOUNdL5eszUrvuR6YoQzV4FHw4H77vbvx0tM%2Bsf1hK2wcUBvVFaEC5qk1gyK%2FF5OcmY1WHJf3CFZ5u%2BxP7e2MkIFtqTaozdKgIImhN8M13ONt%2BjaPiYK5HmtHS%2BjSoMwuDwmVY6w9YrARmJ1CBecyqZowBWKgsDOkhY8Uc5KiQECwjTiP5HdiGTLMaJFgHm2TqRn3qEZBHKzpRfiUA%3D%3D%7Ctkp%3ABk9SR7Toz5GgYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/1aaKTf' ),
    listing_name  ( 'New UNI-T UTi260B Industrial Infrared Thermal Imager Temperature Imaging Camera' ),
    item_price    ( 'AU$419.89' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-UNI-T-UTi260B-Thermal-Imager.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006263500211.html?spm=a2g0o.productlist.main.1.15aa2a21w9syaY&algo_pvid=c9e193c7-4d17-41c2-9c73-a7d57c48056e&aem_p4p_detail=2024011220374313704933237288100007119505&algo_exp_id=c9e193c7-4d17-41c2-9c73-a7d57c48056e-0&pdp_npi=4%40dis%21AUD%21769.39%21538.57%21%21%21508.79%21356.15%21%402103241117051206637755424ea45a%2112000036688783742%21sea%21AU%214385823938%21&curPageLogUid=w01sVNxFfuZ1&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=2024011220374313704933237288100007119505_1' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DeLmYuz' ),
    listing_name  ( 'UNI-T UTi260B Infrared Thermal Imager 256 x 192 Thermographic PCB Circuit Electrical Maintenance Heat Image Thermal Camera' ),
    item_options  ( 'Color: UTI260B' ),
    item_price    ( 'AU$538.57' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005002252952789.html?spm=a2g0o.productlist.main.3.15aa2a21w9syaY&algo_pvid=c9e193c7-4d17-41c2-9c73-a7d57c48056e&aem_p4p_detail=2024011220374313704933237288100007119505&algo_exp_id=c9e193c7-4d17-41c2-9c73-a7d57c48056e-1&pdp_npi=4%40dis%21AUD%21653.47%21457.43%21%21%21432.13%21302.49%21%402103241117051206637755424ea45a%2112000025467448046%21sea%21AU%214385823938%21&curPageLogUid=VnOHP4DzA3UA&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=2024011220374313704933237288100007119505_2' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dlu1gnj' ),
    listing_name  ( 'UNI-T Infrared Thermal Imager UTi260B Industrial PC Software Analysis PCB Circuit Floor Heating Detection Thermal Camera' ),
    item_options  ( 'Color: UTI260B' ),
    item_price    ( 'AU$457.43' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005003093700638.html?spm=a2g0o.productlist.main.5.15aa2a21w9syaY&algo_pvid=c9e193c7-4d17-41c2-9c73-a7d57c48056e&aem_p4p_detail=2024011220374313704933237288100007119505&algo_exp_id=c9e193c7-4d17-41c2-9c73-a7d57c48056e-2&pdp_npi=4%40dis%21AUD%21653.47%21457.43%21%21%21432.13%21302.49%21%402103241117051206637755424ea45a%2112000028583605656%21sea%21AU%214385823938%21&curPageLogUid=yf8CdfQ4om5V&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=2024011220374313704933237288100007119505_3' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DmT6IjL' ),
    listing_name  ( 'UNI-T UTi260B Infrared Thermal Imager PCB Circuit Floor Wall Heating Pipe Industrial Detection Thermal Imaging Camera' ),
    item_options  ( 'Color: UTi260B(with case)' ),
    item_price    ( 'AU$457.43' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005164391835.html?spm=a2g0o.order_detail.order_detail_item.3.79b4f19c2pQrPh' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.1.5d671802l1ULs2&orderId=8173168357953938' ),
    order_id        ( '8173168357953938' ),
    order_date      ( 'Aug 13, 2023' ),
    order_item_name ( '' ),
    order_options   ( 'Color: UTi260BwithMacrolens' ),
    order_price     ( 'AU$394.02' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$39.40' ),
  ),
);

equipment(
  equipment_date( '2024-01-13' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/81wZQpUd9LL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Leadstar' ),
    model_name        ( '12"' ),
    //equipment_type    ( '12" LCD TV' ),
    EquipmentFeature::LCD_TV,
    EquipmentFeature::LCD,
    EquipmentFeature::REMOTE_CONTROL,
    EquipmentConnectivity::COMPOSITE_VIDEO_RCA,
    EquipmentConnectivity::HDMI,
    EquipmentConnectivity::RF,
    EquipmentConnectivity::SD_CARD,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Leadstar' ),
    equipment_type    ( '12" LCD TV' ),
    category          ( 'Television' ),
    category          ( 'Display' ),
    category          ( 'HDMI' ),
    category          ( 'LCD' ),
    category          ( 'Remote Control' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Leadstar_TV' ),
  see_also      ( 'UPERFECT 15.6" HDMI LCD' ),
  search_url    ( 'https://www.amazon.com/s?k=Leadstar+12%22+LCD+TV&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Portable-Kitchen-Built-Television-Multimedia-LEADSTAR/dp/B07H91QPDN/ref=sr_1_1?dib=eyJ2IjoiMSJ9.M5mVSzaDgLvtSwaiHLd3csQs4W81jd6vfSFqHW2Cnf8.Ll2WHj9FMFOnhXr27RB0Uxg6dpcvL5R0r3NT76pInTw&dib_tag=se&keywords=Leadstar+12%22+LCD+TV&qid=1705124633&sr=8-1' ),
    affiliate_url ( 'https://amzn.to/41VhEJI' ),
    listing_name  ( '12 Inch Portable Digital ATSC TFT HD Screen Freeview LED TV for Car,Caravan,Camping,Outdoor or Kitchen.Built-in Battery Television/Monitor with Multimedia Player Support USB Card LEADSTAR' ),
    item_price    ( 'US$139.89' ),
    item_shipping ( 'US$32.56' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Leadstar+12%22+LCD+TV&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Portable-Kitchen-Built-Television-Multimedia-LEADSTAR/dp/B07H91QPDN/ref=sr_1_1?dib=eyJ2IjoiMSJ9.M5mVSzaDgLvtSwaiHLd3csQs4W81jd6vfSFqHW2Cnf8.Ll2WHj9FMFOnhXr27RB0Uxg6dpcvL5R0r3NT76pInTw&dib_tag=se&keywords=Leadstar%2B12%22%2BLCD%2BTV&qid=1705124633&sr=8-1&th=1' ),
    affiliate_url ( 'https://amzn.to/48Thg0E' ),
    listing_name  ( '12 Inch Portable Digital ATSC TFT HD Screen Freeview LED TV for Car,Caravan,Camping,Outdoor or Kitchen.Built-in Battery Television/Monitor with Multimedia Player Support USB Card LEADSTAR' ),
    item_options  ( 'Colour: 12inch' ),
    item_price    ( 'AU$410.86' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Leadstar+12%22+LCD+TV' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/186234098931?hash=item2b5c6ad4f3%3Ag%3AQhQAAOSw55Vlk%7EBA&amdata=enc%3AAQAIAAAA0EzWendnuTqRK41oW25y32KSOiqTnHDEb2PNDMb4rtBqprAXuVKqUjUsmO4kljxStqbh68ZexJK%2FQn4AlJklDTIgdvZvK1E1%2Bxo9sa%2FRUDhjFgH3rC6T94V7giq5099ctog5We%2B57SU6v%2FleqAX3ZVCw2P4GwPEXx0ViZf3Cq9GxtCf52iLIyWPr76X5lRDYoxNqwTc7Efoavopm9qmVb3wApXDSjjMDboTojvJwoivL4cQbIlDuMM0JFtbardrl1HZ3%2BjRUZT9K2VgEsToiIzA%3D%7Ctkp%3ABk9SR4r05ZWgYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/49lQ5P' ),
    listing_name  ( 'LEADSTAR 12 1080P TFT LED HD Digital Analog Color TV Television AU Pl GDB' ),
    item_price    ( 'US$107.12' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/166410649460?hash=item26bed8ff74%3Ag%3AD0IAAOSwhq1lQmbe&amdata=enc%3AAQAIAAAA0FSLPyqn%2BORqCuxQxxwjNiPLJ63W82LGY4pVFuQw5vMjZ1Q4mKnb8f6Rc4Qkiy5braHh8Ffc6dnWO%2Fni7WtcY7tcz1Tk8ftHepXNuLkew17JL%2FjDbLNmOEhOKzh4pROVLrkzVC9B3XFvdwatGCglg7kwKzDvi5r4Z9Xzz8n1Smzmvv80T7DvTUM2DuyGyOnd%2BvOv4WMixhZW%2BOSEa9aCN8wobsPPIRujOrxLRnwlHQLdH63mkwkj7%2Fctu6aTg6JakBaPiCTP5WLiNChfGA1n5hc%3D%7Ctkp%3ABk9SR4r05ZWgYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/lGXF5O' ),
    listing_name  ( 'LEADSTAR Portable 12 1080P TFT LED HD Digital Analog Color TV Televisi GOF' ),
    item_price    ( 'US$110.45' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/335103343279?hash=item4e05b73aaf%3Ag%3AYesAAOSwoQFlRgxl&amdata=enc%3AAQAIAAAA0E2nekgvrXqHOwa2DxdgSCD0r2v5RiGA23keg587GgUIbPIllw4NHXaJ3kdcLGtpyjjo7sWRRcg%2BCvj4L8kgi%2Fs3XmpPKHDpFqjrlxwy3Px1uXE6F6%2FKCk%2FbL1nHtNMsyDp3f1WCwLnG4rrbxEidDRaoQ6cWnW%2FpLJyJqCm%2FlqPSzXDELJv649Ak4sejHlk%2BT1KQBy487MGvGox49vrOIGkhAAglOEO2cQII%2BuOybD9Y9ERHhdd%2F3piylWhnBiSLROW2nSRxdJ7D6LVPtA%2BTQkc%3D%7Ctkp%3ABk9SR4r05ZWgYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/Ka80qp' ),
    listing_name  ( 'LEADSTAR Portable 12 1080P TFT LED HD Digital Analog Color TV Televisi ZZ1' ),
    item_price    ( 'US$110.59' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Leadstar+12%22+LCD+TV' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/186234098931?hash=item2b5c6ad4f3%3Ag%3AQhQAAOSw55Vlk%7EBA&amdata=enc%3AAQAIAAAA8KUysgrNHKLRY4rDrahVdq0r94A376KZ1J9mPa1VCPP2LWF2%2BLk57iFlEW8Tv40IL3ETrqhz00NMFMqrHNmtsiGEc4JsDGKFwnpNUvBP7HObGevq%2B47aVTEFdf8bt%2BdklqMPrCYg1sKw3TC%2BifskQyM60xGFk0K%2ForhwvvNucl7LFrx6%2F8xDchsNVJ9zUMWaFICaXtbZwazy3dwQSKUnigAmZ7bqZzkx6DbmLt18IzTdB8HUq6HiE%2FEFYXBIIGsoQskxJgFBbQzHEOukSAfjfCbdKzxlvRJNUb8KarTE0zbExyYp4FMysPK9ICddYBKnAQ%3D%3D%7Ctkp%3ABk9SR77k-JWgYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/KmGys9' ),
    listing_name  ( 'LEADSTAR 12 1080P TFT LED HD Digital Analog Color TV Television AU Pl GDB' ),
    item_price    ( 'AU$176.91' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/315011031921?hash=item49581ee371%3Ag%3AcpsAAOSw7-xlbvYP&amdata=enc%3AAQAIAAAA0HQ5gpIueqcgYcLfaEFffoyueejsdwu161rf%2Fwr%2Fl93qGIQGXGvdbJa55pvz4P%2Bqi7j8gjPEgJwZQPA8p%2F5jp1IhUj4DdwVeRtIWi76XkLdo6IJya42GgRg%2F2C0FcSeu4kKyGLcM0qLW3MQ5iweRQR0mnOmBZM8cSimpL%2BjMmgCA3o9iPwEzdnhllLWIbL8X482d3j3blOuT3m8fSrxDupOKeOeGt5xqxUkJVFff1Nmr6xRaxHtVl3qWXNKlZ3qmgh69rd%2BdWdqZdxJIVy%2BHc1k%3D%7Ctkp%3ABk9SR77k-JWgYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/LkKB07' ),
    listing_name  ( 'LEADSTAR Portable 12 1080P TFT LED HD Digital Analog Color TV Televisi FD5 BGI' ),
    item_price    ( 'AU$177.24' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/225859100627?hash=item3496405fd3%3Ag%3ASIwAAOSwRHdlSRse&amdata=enc%3AAQAIAAAA0I3dgfDJrADy3AmeVyNX2IvOD46kUwls7tZBJiQUTBztXdUCFyrK3lhi0CkkLi7VGhhwla6uXa2f7zzQU5bZLEzN9z%2BuOQ2vpRp0Dq5XKVvHRNilo1fHYPhkJd95BMSvzNe1zobu1A19wKuQcs5JSGxylnVwBCrtXA72w5McCqBXBbb8LXTWhj1tuf648oA4yBp2kjjRuZ%2F8dfvN8HWwkAZmCcqyLBKGUrRUr%2FzaCbOhjJ4RiiAM4Y67qcF3RP6K1f8qBpYyuw1FfSejxJr0qWA%3D%7Ctkp%3ABk9SR77k-JWgYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/r1PLdb' ),
    listing_name  ( 'LEADSTAR 12 1080P TFT LED HD Digital Analog Color TV Television AU Pl HB0' ),
    item_price    ( 'AU$178.85' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Leadstar-12%22-LCD-TV.html' ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/373845017327?var=642874174994' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=02-08673-26005#/' ),
    order_id        ( '02-08673-26005' ),
    order_date      ( '25 May 2022' ),
    order_item_name ( 'Portable 12" /14" 1080P TFT HD Digital TV Car USB HDMI Video Player Television' ),
    order_options   ( '12"' ),
    order_price     ( 'AU$120.00' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$45.10' ),
  ),
);

equipment(
  equipment_date( '2024-01-13' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61RUIBSxnJL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.uperfectmonitor.com/products/15-6-inch-uhd-4k-portable-monitor-uperfect' ),
      link_text       ( 'UPERFECT 15.6" HDMI LCD' ),
    ),
    manufacturer_name ( 'UPERFECT' ),
    model_name        ( '15.6"' ),
    EquipmentFeature::HDMI_LCD,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'UPERFECT' ),
    equipment_type    ( '15.6" HDMI LCD' ),
    category          ( 'Display' ),
    category          ( 'HDMI' ),
    category          ( 'LCD' ),
    manufacturer_link (
      link_href       ( 'https://www.uperfectmonitor.com/products/15-6-inch-uhd-4k-portable-monitor-uperfect' ),
      link_text       ( 'UPERFECT 15.6" HDMI LCD' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/UPERFECT_156J08' ),
  see_also      ( 'Leadstar 12" LCD TV' ),
  search_url    ( 'https://www.amazon.com/s?k=UPERFECT+15.6%22+HDMI+LCD&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Portable-Monitor-Upgraded-1920X1080-Computer/dp/B07TWGBG3P/ref=sr_1_1?dib=eyJ2IjoiMSJ9.TpSQzyX5LnjcyoX_A3SYAlsR9TPm-gnN5SVjVaidId41aC6W2W5JJBQZrFtKiuZleB8AOkjtpY5Eer4_xfQShffFQJ9byaBQWqk1SnIYRp4xOXp6UI9hTVoHed8WY79NCmKm4sEWyTe3bdWYd-p9cg.hhmlUr9DhSUUT_KtLfkNRfOysh8PHaLa_rPHP4gJbOw&dib_tag=se&keywords=UPERFECT+15.6%22+HDMI+LCD&qid=1705125286&sr=8-1' ),
    affiliate_url ( 'https://amzn.to/3Hjoxve' ),
    listing_name  ( 'UPERFECT Portable Monitor, 2023 [New Version] 15.6" IPS HDR 1920X1080 FHD Eye Care Screen USB C Gaming Monitor, Dual Speaker Computer Display HDMI Type-C VESA for Laptop PC MAC Phone w/Smart Case' ),
    item_price    ( 'US$99.99' ),
    item_shipping ( 'US$27.37' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/UPERFECT-Portable-Monitor-Display-External/dp/B0C7CH6D5G/ref=sr_1_2?dib=eyJ2IjoiMSJ9.TpSQzyX5LnjcyoX_A3SYAlsR9TPm-gnN5SVjVaidId41aC6W2W5JJBQZrFtKiuZleB8AOkjtpY5Eer4_xfQShffFQJ9byaBQWqk1SnIYRp4xOXp6UI9hTVoHed8WY79NCmKm4sEWyTe3bdWYd-p9cg.hhmlUr9DhSUUT_KtLfkNRfOysh8PHaLa_rPHP4gJbOw&dib_tag=se&keywords=UPERFECT+15.6%22+HDMI+LCD&qid=1705125286&sr=8-2' ),
    affiliate_url ( 'https://amzn.to/3RP2Bww' ),
    listing_name  ( 'UPERFECT Portable Monitor 15.6 inch, 1080P FHD USB-C Portable Laptop Monitor HDMI Travel Monitor w/VESA & Smart Case, Matte IPS Display Eye Care External Screen for Switch/PS5/PC/Phone' ),
    item_price    ( 'US$119.99' ),
    item_shipping ( 'US$27.37' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/UPERFECT-Portable-Freestanding-Touchscreen-Kickstand/dp/B094V583BM/ref=sr_1_3?dib=eyJ2IjoiMSJ9.TpSQzyX5LnjcyoX_A3SYAlsR9TPm-gnN5SVjVaidId41aC6W2W5JJBQZrFtKiuZleB8AOkjtpY5Eer4_xfQShffFQJ9byaBQWqk1SnIYRp4xOXp6UI9hTVoHed8WY79NCmKm4sEWyTe3bdWYd-p9cg.hhmlUr9DhSUUT_KtLfkNRfOysh8PHaLa_rPHP4gJbOw&dib_tag=se&keywords=UPERFECT+15.6%22+HDMI+LCD&qid=1705125286&sr=8-3' ),
    affiliate_url ( 'https://amzn.to/3TVx12T' ),
    listing_name  ( 'UPERFECT Y Portable Monitor Freestanding Touchscreen, 15.6"FHD 1080P IPS Screen with Adjust Kickstand, 2000:1 Contrast Ratio, 100% sRGB w/Standard HDMI/USB 3.0/Type C, Built-in Speaker/Ambient Light' ),
    item_price    ( 'US$169.98' ),
    item_shipping ( 'US$27.37' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=UPERFECT+15.6%22+HDMI+LCD&s=price-asc-rank' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=UPERFECT+15.6%22+HDMI+LCD' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/314295506350?hash=item492d78d5ae%3Ag%3Aw6gAAOSwMXJiZ2fj&amdata=enc%3AAQAIAAAA0KEewA9SwVw88Jf5dYcMPhYSuPZ8FGHRTOZh5wBFzR%2BekzNSsmBH1ozuBRy9yWYceacp%2B1GrUj69f5bHuuGMxakoOOz%2FvxYzJ9iHjaBlYPpBGkYyZp5mCUL6ZdNafsQ%2FP%2FojaacEM6vQsIGXvbvJWFtNYO8RaCm1En7zYBVq1aSzXkbJo4AE%2Bv04XuvVKiFNw%2F%2FL%2FQLbza%2FHFbVsSoAr3mBahEJ3aTSx1SLTKsbiuaKpjYKVGoc7EeNPmLaXpW96X2WtSx4iOyJHzKDsackBE4s%3D%7Ctkp%3ABk9SR5KDuJagYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/aNvPAB' ),
    listing_name  ( 'UPERFECT 15.6" Portable Monitor Mini HDMI 1080P LCD Display For Gaming Laptop PC' ),
    item_price    ( 'US$69.99' ),
    item_shipping ( 'US$30.80' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/285145461666?hash=item4263fe73a2%3Ag%3AvXgAAOSw3bNjvuRS&amdata=enc%3AAQAIAAAA8E%2FVpHZNdJGTgP%2FHE0xu5czjBJGxyH1j%2FfX38qT6FeTz9GMNn%2BgnTJIZ13fchJGLFspkhoyy51OGaM1R%2FLCFsvFiDONTURxuVJy5psv1b7L2dmngrhFgQrc74dIpc3adUZSV2VeNfaRGTXX%2FnDpjwnGqO3AWuzTRafBtdiH6QLHeAtDlKNheH2kU%2BYCOMjyIG%2B2RdoK07JxyZDsRBsKsi8Z4g4zpsnDb1Dz0XY3xjr3jhIe6jQ%2BeQpIiT13SfTlGWipc6GUguoOHOOq55Nf91znM9hRtIn4g3vO2g4LXAgU9erS0TwFzZJN3uOQQpFJOVw%3D%3D%7Ctkp%3ABk9SR5SDuJagYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/MCquUe' ),
    listing_name  ( '15.6" 1080P Portable Monitor IPS LCD Monitor HDMI Type-C Gaming Screen Travel' ),
    item_price    ( 'US$89.99' ),
    item_shipping ( 'US$31.45' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/393562865331?hash=item5ba22cbeb3%3Ag%3AqVEAAOSwnBVhXCsP&amdata=enc%3AAQAIAAAA8JnpEnye5gV6Xvg30uhvCRDaVz5IEVNpsAjW9j3iuw%2BU3hiMi34HQbqMRQ%2FsACs6Kg3vFbe2W4e%2FSRsjDZoEw3QBBgWLCqS%2BwLMv8OiiO5o1mz5WIsRxkbG3JCPxoymy5nHfJT9wr6BGlx74bkO%2ByKPKKImvYfGzWAMltsaw5ABm3MdqIBSPLGOovdTNo%2B7SxSGoC6illWIxN9W37S7sVzF8HV8zuf%2BeQEwWnrWodMZ9ti0U8MhUOzEByMLbcusK9LOZ%2BRQushkw%2FI6UqIi7trvS3QyMtnHKbsckhqgFZQmgMp7VaJ%2FTDYLN492zSWTXAQ%3D%3D%7Ctkp%3ABk9SR6CDuJagYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/RCsZ8i' ),
    listing_name  ( 'UPERFECT 15.6" IPS Portable Monitor LCD FHD 1080P HDMI USB Type-C Display Screen' ),
    item_price    ( 'US$99.90' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=UPERFECT+15.6%22+HDMI+LCD' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/393471474506?hash=item5b9cba3b4a%3Ag%3A0W0AAOSw1BlhXCnh&amdata=enc%3AAQAIAAAA8LKv7kkPlYtXcwAINFcBZcqV%2BSOWTmoPXLaN6Db3bZGKtLPREfyGWo6pQ5Ty%2FYY8pU6e9nFPcrzOlCU6s7ItJgiH4MCJMSRHZ6xRYf6SpHb3TVjUTjkrL6V7bRDY9ixB1FsLp2ngK%2FSHqnNKophOKsIdhJAak%2BK51Q6NzHkaqPFMQIiRjCR1EFBWr58W2n3d7vWREfgSXlotrKhedKIibYuwIk%2FOvasFoH9qESb8niDQjNUAnzCKoeZ015owsi7FzjgswW7QQ2S1Sly7qBaur4eeM75e4QCJzYD%2BunRlYqpr1rhJx9h%2BHkC76AodBrSBvQ%3D%3D%7Ctkp%3ABk9SR6S3y5agYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/CPvwRy' ),
    listing_name  ( 'UPERFECT 15.6" Portable Monitor IPS LCD 1080P HDMI USB-C Type-C Display Screen' ),
    item_price    ( 'AU$149.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/393562865331?hash=item5ba22cbeb3%3Ag%3AqVEAAOSwnBVhXCsP&amdata=enc%3AAQAIAAAA0CdAGCyJWa6bWIoLSJ5CGH34L7c%2F6xJJ%2BUxxSW4F2NOaEjymkBEJu5gYdduDY7A7EgPOIzCBOH6luFzNxdrwWflYJ3yzvtMLxI%2BGSTBiEC8aUoA32Aau%2Bu63Z5sn5JKqhS4Zln7H3vILQIWcwBgJaJUKl4a5Fz%2BnzQtMZITj5GwlnOLF7aR%2BaINKRsqbu5K732ko31pWECxsFRxq8S6hPo%2BVYriRV%2BaZHhiukNqD0VVlxt5If2LWDpv2t6TkvlLCH5ioti0ZF4c8YuOb1uOXrTs%3D%7Ctkp%3ABk9SR6S3y5agYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/OUslyU' ),
    listing_name  ( 'UPERFECT 15.6" IPS Portable Monitor LCD FHD 1080P HDMI USB Type-C Display Screen' ),
    item_price    ( 'AU$149.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/285141061126?hash=item4263bb4e06%3Ag%3A7akAAOSwxpFj5d6F&amdata=enc%3AAQAIAAAA8DX8FBUw3KMmQjlS8XH2EkkIXN5meD%2FrTDEXRLgcVmDLnJ7zUQn9yM65pYkWl64FrrzyPIcU%2Bv%2BGxrMQUCKYMhVGDI5gmYfgLz6gaA%2BTDE9mMfpleZmyHCYpT8nWWc2z1pm%2Bn%2B2bt6mB4QE8GcYfPOUIxdMFXiKblrLmfqEMlVZzAXOxWtVrn1Vbq%2F%2F%2Fk59oez6xdJykd1AH%2BBfVH3I3GHzx4GUao3dsJyfIbSbaJJBzfcz0X0s7Uak3EkWDc0dRe02ArjMtbYT69GjYy1C%2FRXDEdUI0EPfVo2ygmNLfeAOuKWTCk31DD36BTe1qrjuQ7Q%3D%3D%7Ctkp%3ABk9SR6S3y5agYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/dC8czd' ),
    listing_name  ( 'UPERFECT 15.6" 1080P Portable Monitor IPS LCD Monitor HDMI Type-C Gaming Screen' ),
    item_price    ( 'AU$149.99' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-UPERFECT-15.6%22-HDMI-LCD.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/4000829800118.html?spm=a2g0o.productlist.main.9.70ce4aeaqIlZRN&algo_pvid=e1b050b0-b912-4ddc-b079-fb8cfb19f02f&algo_exp_id=e1b050b0-b912-4ddc-b079-fb8cfb19f02f-4&pdp_npi=4%40dis%21AUD%21540.37%21329.63%21%21%21357.34%21217.98%21%402103246c17051258238745792e98ea%2112000022901961767%21sea%21AU%214385823938%21&curPageLogUid=yXPFF4RA87aX&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DDUL3BX' ),
    listing_name  ( 'UPERFECT 4K Portable Monitor for Laptop PC 15.6 IPS 3840x2160 UHD External Screen Mobile LCD Display USB C Xbox PS4 Switch HDMI' ),
    item_price    ( 'AU$329.63' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004630862584.html?spm=a2g0o.productlist.main.13.70ce4aeaqIlZRN&algo_pvid=e1b050b0-b912-4ddc-b079-fb8cfb19f02f&algo_exp_id=e1b050b0-b912-4ddc-b079-fb8cfb19f02f-6&pdp_npi=4%40dis%21AUD%21216.14%21172.91%21%21%21142.93%21114.34%21%402103246c17051258238745792e98ea%2112000029902217369%21sea%21AU%214385823938%21&curPageLogUid=3t6DYYGnwbvS&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DFfheOD' ),
    listing_name  ( 'UPERFECT 15.6" FHD HDR 1080P Portable Laptop Monitor Dual Type-C HDMI IPS Screen For PC/MacBook/Phone Xbox Switch PS4/5 Display' ),
    item_price    ( 'AU$172.91' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/403983086821' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=20-10143-00740#/' ),
    order_id        ( '20-10143-00740' ),
    order_date      ( '8 Jun 2023' ),
    order_item_name ( '' ),
    order_price     ( 'AU$305.10' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/403983086821' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=24-11372-00005#/' ),
    order_id        ( '24-11372-00005' ),
    order_date      ( '28 Mar 2024' ),
    order_item_name ( 'UPERFECT 4K Monitor 15.6" Portable Gaming Monitor UHD PC Screen USB C Monitor' ),
    order_price     ( 'AU$245.15' ),
    order_quantity  ( 1 ),
    order_discount  ( 'AU$15.00' ),
  ),
);

equipment(
  equipment_date( '2024-01-13' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71hf8J4rkQL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://tomlov.com/products/tomlov-dm602-pro-10-1-inch-hdmi-digital-microscope' ),
      link_text       ( 'TOMLOV DM602 Pro Digital Microscope' ),
    ),
    manufacturer_name ( 'TOMLOV' ),
    model_name        ( 'DM602 Pro' ),
    EquipmentFeature::DIGITAL_MICROSCOPE,
    EquipmentFeature::LCD,
    EquipmentFeature::REMOTE_CONTROL,
    EquipmentAttribute::BENCH_EQUIPMENT,
    EquipmentConnectivity::HDMI,
    EquipmentConnectivity::USB,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'TOMLOV' ),
    model_name        ( 'DM602 Pro' ),
    equipment_type    ( 'Digital Microscope' ),
    category          ( 'Microscope' ),
    category          ( 'Bench Equipment' ),
    category          ( 'LCD' ),
    category          ( 'HDMI' ),
    category          ( 'USB' ),
    category          ( 'Remote Control' ),
    manufacturer_link (
      link_href       ( 'https://tomlov.com/products/tomlov-dm602-pro-10-1-inch-hdmi-digital-microscope' ),
      link_text       ( 'TOMLOV DM602 Pro Digital Microscope' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/TOMLOV_DM602_Pro' ),
  see_also      ( 'Yizhan Digital Microscope' ),
  search_url    ( 'https://www.amazon.com/s?k=TOMLOV+DM602+Pro+Digital+Microscope&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/TOMLOV-DM602-Pro-Microscope-Electronics/dp/B0C2CY4FND/ref=psdc_2742273011_t1_B0CBLT82BK' ),
    affiliate_url ( 'https://amzn.to/48yGl1l' ),
    listing_name  ( 'TOMLOV DM602 Pro 10.1" HDMI Digital Microscope 2000x, Pro Boom Arm Stand, LCD Soldering Microscope with 3 Lens, Adults Microscope for Electronics Repair, Coin Microscope Ring Light,PC Compatible, 64G' ),
    item_price    ( 'US$319.99' ),
    item_shipping ( 'US$32.56' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=TOMLOV+DM602+Pro+Digital+Microscope&s=price-asc-rank' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=TOMLOV+DM602+Pro+Digital+Microscope' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/145452565968?hash=item21dda605d0%3Ag%3AjnkAAOSw0Y9kdxpC&amdata=enc%3AAQAIAAABABC0tPQLXj9lKr%2FnImDYxNgLZCPR2nOGq48j2LPA6EyzCll1thlzDzTPwvJg8nnA81Fwf%2B4YTb6%2FLsCkEyHJJ3V3xeI5JKutPPR9KCoykbF%2FSlNffCqkxHYRmjRixnGRrupo%2FtERzC5OtW2PU4S9xbw8W2aFQBazFu9v7jrUiKMMkTFiINK266eYqa%2B5%2B4GNYeLtQI%2BG7YgH7ecnLORaiJRdpYxdv2PaiQjpaAVJtO6hl6%2Bul8xGsDjzXihV42OBTAIxeLYMA0hp1MDmlDt%2FUKfDCSSkxwFJUI643zMhZIk2lvBJ%2F6DnbYGL%2FlLUcbB7YBcRZm0ignSu6QJOOrTgy8U%3D%7Ctkp%3ABk9SR-j4qf-gYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/nuEYoH' ),
    listing_name  ( 'TOMLOV DM602 Pro Digital Microscope 2000x Microscope for Electronic Repairing' ),
    item_price    ( 'US$250.63' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/395015463078?hash=item5bf8c1a0a6%3Ag%3AjnkAAOSw0Y9kdxpC&amdata=enc%3AAQAIAAAA4JakQ26QR09waCxQrj1lnKShh%2BZcGRrml%2BgvYAUGBrDoHkq%2BLw2GBXf7%2BPKUU3UaNg10N4Oe90xxTWO65n5JI0tWA3cxXuw2q%2BhIeifcVvDluOBsFJLoNLGlhOT3cIdmVJexTkuOgegsIIsZNsuTmNBDFNsHnteHTa0%2FviWfGL%2BLfa%2BRom%2BIAhEZODPs936AO5Coj17nrZf6gY46KHJ%2Fs%2FYEPD0HFE68MGq%2FUBgHsspN0HF5JYGCNQM50E71r9l9TW81b%2BMEs53XuZLXwjIVzPW6oLEXsNOZfmIN1ReXyBSL%7Ctkp%3ABk9SR-j4qf-gYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/J9y99B' ),
    listing_name  ( 'TOMLOV DM602 Pro Digital Microscope Pro Boom Arm Stand Soldering USB Microscope' ),
    item_price    ( 'US$253.30' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/225738571577?hash=item348f113f39%3Ag%3A3pwAAOSwjUFkxKsf&amdata=enc%3AAQAIAAAA4B4NY0Cc9YKcRDCGjTW8CwQDYOKSj2C4wOs38NvZNHiDQhoKK%2BnpnRY31L6Es%2BgnTJjw22H1PxClXu2bbI6n7Lujg9oF0uh%2BYlWbrb2QQUKu%2Bf%2F%2ByvKIn%2BHtL0x9UvPToF6o%2Fgrsk67gCFJB8XA8c8ArDSKcl%2FAE%2F530mjPU%2FttQiLPkAv5sZpttQTrZcWmssJAuYHs0xBnou6W0g5AchJDAcLkKefy5RJ0NBrkb5%2Bzzp28lOyEfHMehWQ9qenhDpO2Io%2BZnpyEY%2FDJIhIxP9IBnEO3A2CXRdGZFMdg2VFgr%7Ctkp%3ABk9SR-j4qf-gYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/eENI4b' ),
    listing_name  ( 'TOMLOV 10.1" 2000x Digital Microscope Flexy Stand Soldering work bench +44 LED' ),
    item_price    ( 'US$263.12' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=TOMLOV+DM602+Pro+Digital+Microscope' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/256370820480?hash=item3bb0e44580%3Ag%3AcIMAAOSwAyllcnJ5&amdata=enc%3AAQAIAAABABgy1mNIDEp%2BX1tHSnkvB9XNaVivqtHFjz9%2FaAeM%2BHNlR6VroM1woiYqyqjPe6TZCMxIhZ42Rk2JOr4malk1Fp3XaxyReDl%2F6oNRmEjZfiaLWLHSMl3bNSrI73jw%2BawimcIwFbPpg40DgsSN8JJoQY9hbzdWA9h5GDnuxK%2FAUpgQ0E0ucpaD556TEsgzknAJqxyGOJn7plnEI7XczLbc2tEtE%2BQKjBairWi3fnhr5DnxByx4xZuwFDiJDVrPxaV15zzjeJAIehXT8mGPjwvtM5aaiGRtmP9F98G6wYjZ%2FaGGMBOb7rnDVcVyl9JB5AymM8US5gBAnM9%2FTymHzbajwJs%3D%7Ctkp%3ABk9SR4DJvv-gYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/ZjkFc5' ),
    listing_name  ( 'TOMLOV DM602 Pro Digital Microscope 2000x Adult Microscope for Electronic Repair' ),
    item_price    ( 'AU$370.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/145543592026?hash=item21e312f85a%3Ag%3AjnkAAOSw0Y9kdxpC&amdata=enc%3AAQAIAAABAEVezhfDZw%2FnHD51bfPSLeo%2Bs%2BJ%2Fs2zlFKoj9H%2FmR55MRfkPSN%2FKYSl%2FFpD8sSUV8sIqGc%2FbUHUUWGbeHaSOKDrluEs3mN4w1QclryWI5McFA3dT%2Fy8hvd%2BvnGS7QRXK50MJG6pQl2GTVNOTUPSQS2%2F6q1Mhg7A%2BqcrSI8%2BHfwYTvb6gzD1OFFCMxycZydRJ2mFAb%2BTU3%2BGPDkq7sbOCEnSf9TrG%2F4JvBk38EC13SOqQp2L9axPFnZRLNQjxScoecVAYxnCcQNA0laqDFOD5f%2F2q0I8nO5X8DvodjHwqjapolA37d01GA3JujhB0wZQR5dakSjgyGvS0d8k6uwiRE3s%3D%7Ctkp%3ABk9SR4DJvv-gYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/1tWZAg' ),
    listing_name  ( 'TOMLOV DM602 Pro Digital Microscope 2000x 10.1" LCD IPS Screen for Adults / Kids' ),
    item_price    ( 'AU$399.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/256369599017?hash=item3bb0d1a229%3Ag%3AjnkAAOSw0Y9kdxpC&amdata=enc%3AAQAIAAABAPW05gPRhREmf3m0MVXZqp0ZO0de%2BN%2B03Lo7yvarW2UgdWxiBe40Colvlp22rSeI1NNWhp2FxyBouPGhZ0VfD6E9YeVDMCo1Lq%2FVaRTzuQF%2B4MYmIvdw926PDmRu%2BkMdyKQi1XwkZaXlE8BA4n6jI4euiilJL27GcwkVx080HAYby7NU%2BQjHsPP8LuOfRifNcrDAzznW2%2BObaVYHzrBoqEMU9I3aQQQ8%2BsU2y1qKhStyK%2F92zq3Y4Dii5uzTNFAIPX6hulCifDQ3YBQYrJKtguT80h1B9O0ghsWa%2F880STDsxVZztUEwYtd%2BlEMVs5SCOitEM4LGWAeuP1AVKC2YawI%3D%7Ctkp%3ABk9SR4DJvv-gYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/8KHtft' ),
    listing_name  ( 'TOMLOV DM602 Pro Digital Microscope Pro Boom Arm Stand Soldering Microscope 64G' ),
    item_price    ( 'AU$400.99' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-TOMLOV-DM602-Pro-Digital-Microscope.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006068578859.html?spm=a2g0o.productlist.main.21.1a14698e3EFN3b&algo_pvid=7167d983-cc64-4649-b180-67027609c677&algo_exp_id=7167d983-cc64-4649-b180-67027609c677-10&pdp_npi=4%40dis%21AUD%21490.39%21255.00%21%21%21324.29%21168.63%21%402101e5f117052358281178589e183b%2112000035582361068%21sea%21AU%214385823938%21&curPageLogUid=E29G6whC69Hk&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DET0BDB' ),
    listing_name  ( 'TOMLOV DM602 Pro HDMI Microscope 2000X 3 Lens 10.1 Inch IPS LCD For PCB Soldering Phone Repair Digital Microscopio Coin View' ),
    item_price    ( 'AU$255.00' ),
    item_shipping ( 'AU$76.58' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005626250860.html?spm=a2g0o.productlist.main.23.1a14698e3EFN3b&algo_pvid=7167d983-cc64-4649-b180-67027609c677&algo_exp_id=7167d983-cc64-4649-b180-67027609c677-11&pdp_npi=4%40dis%21AUD%21860.18%21387.07%21%21%21568.83%21255.97%21%402101e5f117052358281178589e183b%2112000033794546028%21sea%21AU%214385823938%21&curPageLogUid=gdSgCB33Xzqb&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dkvjmdx' ),
    listing_name  ( 'TOMLOV DM602 Pro HDMI Microscope 2000X 3 Lens 10.1 Inch IPS LCD For PCB Soldering Phone Repair Digital Microscopio Coin View' ),
    item_price    ( 'AU$387.07' ),
    item_shipping ( 'AU$17.83' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/256121779704' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=06-10444-11050#/' ),
    order_id        ( '06-10444-11050' ),
    order_date      ( '22 Aug 2023' ),
    order_item_name ( '' ),
    order_price     ( 'AU$302.99' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$28.80' ),
    order_discount  ( 'AU$15.00' ),
  ),
);

equipment(
  equipment_date( '2024-01-14' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/H761f62d1526e4624bc10c2560a27c0c6n/RD6018-RD6018W-USB-WiFi-Digital-Control-Power-Supply-DC-to-DC-Voltage-Step-Down-Module-Buck.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Riden' ),
    model_name        ( 'RD6006' ),
    EquipmentFeature::BENCH_POWER_SUPPLY,
    EquipmentFeature::VOLTMETER,
    EquipmentFeature::AMMETER,
    EquipmentConnectivity::USB,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Riden' ),
    model_name        ( 'RD6006' ),
    equipment_type    ( 'Bench Power Supply' ),
    category          ( 'Power Supply' ),
    category          ( 'Bench Equipment' ),
    category          ( 'Meter' ),
    category          ( 'USB' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/RIDEN_RD6006' ),
  see_also      ( 'Tenma 72-10505 Bench Power Supply' ),
  search_url    ( 'https://www.amazon.com/s?k=Riden+RD6006+Bench+Power+Supply&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=Riden+RD6006+Bench+Power+Supply&s=price-asc-rank' ),
  warning         ( 'Make sure you get a shell and power-supply to go with the unit' ),
  warning         ( 'You might like to investigate other options: RD6006-W, RD6006P, and RD6006P-W; also: RD6018, RD6024, RK6006' ),
  warning         ( 'I ordered mine with the S12D case' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/RD-RD6006W-Power-Supply-assembled/dp/B096548QH5/ref=sr_1_14?dib=eyJ2IjoiMSJ9.M3ZzSvvRBHAFaAXC0f6dS3isgvmIbjaCDX-UZ3NYtnOVokq5kAqg2k2dgP2qJwWwgoxpvmjosgWiOWXn3xzqxNr5F76QBOW54_6U6PQCR47beq9C6md4BrlTMkA8dwciiXZN_Nk50Yr2-UPA58kRQA.byd7reRahNEJ0HmV0pQ2kmFmzUmfcPM30lT4p50UIOg&dib_tag=se&keywords=Riden%2BRD6006%2BBench%2BPower%2BSupply&qid=1705236071&sr=8-14&th=1' ),
    affiliate_url ( 'https://amzn.to/41ZQW2X' ),
    listing_name  ( 'RD RD6006W 60V 6A DC DC Step Down Power Supply Whole Set not assembled (RD6006W+S400 case+ 400W PSU)' ),
    item_price    ( 'AU$396.02' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Riden+RD6006+Bench+Power+Supply' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/386518093292?hash=item59fe460dec%3Ag%3AZVsAAOSwLeZljZyt&amdata=enc%3AAQAIAAAA0BdfUslTqk4ezJvgkPNtcWZfs4J149QVWcp7HEKHz6H53ufkmtEG1570%2FkpgAwDTB0Nux2BnlUtMc93T6PtcWI41GGnvJs9Pru%2FnHzdlIVpCgMTwiQXjuGMH4cPwbMKefYXmq%2Ff70XEvuH3Rkz%2Bd2y96D0OGwH%2BG3j8%2FN0BbR4f1fRrn9KgcE5pBgBQux9LWxE6f3AxutN7v%2Fb7e1h0rt3zFE830%2FwuHFbyQLTRh%2FE3240pQKDOp%2B9khJWKt8bHhS7gYZlNsmAHUZ96O0xWi%2F5o%3D%7Ctkp%3ABk9SR9SW-_-gYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/IawU3F' ),
    listing_name  ( 'RIDEN RD6006-C - Digital Bench Lab Power Supply AC-DC 60V 360W - Batt Ch - USB' ),
    item_price    ( 'US$203.52' ),
    item_shipping ( 'US$70.95' ),
  ),
  affiliate_link(
    // 2024-01-14 jj5 - US$85.08 (RD6006) + US$55.91 (shell) + US$47.14 (power supply) =
    equipment_url ( 'https://www.ebay.com/itm/274877265705?hash=item3ffff63729%3Ag%3ATOMAAOSwYY5g-mwX&amdata=enc%3AAQAIAAAA8F8sxzyjpevoVZbMBUkBeBrHvyQP3Bh7JfeGfpPi6Wc5FqlShv278a1KAUVDQqgxlkY6pNcOT0K%2B35PfRbK5ByKLQ7qoqnSxE27HO4S5udPne5KdUL9O4dJkSv0PCFM4aua%2BFR8UMuBXAWY3QhD6Pm2c4%2BPONtR%2BhCw6eFBXWeQBzfAjCwGkL2cvHRM70%2BJl0aCeDUES0vlotyMYRyd56lzjHILa7UqQZak5JcR03Q4QkyxK9x6d7QG%2FrvYt4ODgClFbqGKANi7bNlgAcyBOmSEPx1h%2B2AiHo7NirjNMys7n%2Bka5Z12pcYmBmt8j%2F9w0BQ%3D%3D%7Ctkp%3ABk9SR8qW-_-gYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/ZWV0DB' ),
    listing_name  ( 'RD Riden RD6006P RD6006PW USB WiFi DC DC Voltage Current Step Down Power Supply-' ),
    item_options  ( 'select: RD6006 + Matching shell + Matching power supply' ),
    item_price    ( 'US$188.13' ),
    item_shipping ( 'US$3.84' ),
  ),
  affiliate_link(
    // 2024-01-14 jj5 - US$85.08 (RD6006) + US$55.91 (shell) + US$47.14 (power supply) =
    equipment_url ( 'https://www.ebay.com/itm/275869070657?hash=item403b13f541%3Ag%3A-8MAAOSwJZ1g-m5a&amdata=enc%3AAQAIAAAA0O3xOObHldrvhLj5w9p%2BsjIacvQ6trv7fa0Ens4wSwXj6SFe4Fp%2B29epMYsZdtZXmdWRLKUIR%2B89uT9vJaPWYDyq2gm17sSqKS83I%2Bfq8KQ7GnP6PFQZYFwaLdabZSoUubdcD38JF5JK5gvmTCRyRHK3p5vVCGrN9SD4ySPN7b%2B01nfGoTP5KX84LTuFTGvIdfVgDejvVtLcPn8HZlmXdghbWN3AWDoBsjswqXYNa5RcI8Ix3jiUAuFWP3AdaIGBgiMV7mlalS9GXls53NevkRo%3D%7Ctkp%3ABk9SR8qW-_-gYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/VYETQR' ),
    listing_name  ( 'RD6006 RD6006-W RD Riden USB WiFi DC DC Voltage Current Step Down Power Supply-' ),
    item_options  ( 'select: RD6006 + Matching shell + Matching power supply' ),
    item_price    ( 'US$188.13' ),
    item_shipping ( 'US$3.84' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Riden+RD6006+Bench+Power+Supply' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/386518093292?hash=item59fe460dec%3Ag%3AZVsAAOSwLeZljZyt&amdata=enc%3AAQAIAAAA8IXG%2FUROHYiriya8DIsSV7uy8JjgCSf8NI4jZpkSSafl5rnWL7hioEL1K4JYetUp2ufYaiWYM%2FxQlVxI67LDZ8RUEvGHSgXoOgWGuSM3AQiKYZeJA4WHMogSI9sizEwMFngaEmCP%2F%2B%2FbWnCp%2FxyBq%2Fksskniejvt6lF%2Fqk0kk5oR7SJbJtoOf8GzWJGSmoTKAZIho38v3Ys00cXBEZgoD7cm6tcmQiTC5JTEm4AEr1GgPy6GtNkpSMBlIxmllIiAGIc41rbJVMM95Ouv5CvA7t4maaJkNlFXZ8HxRcavIzlFYqLQ2%2B6eEyyRJg3ZuJUJVw%3D%3D%7Ctkp%3ABk9SR7zTyIChYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/JfGkpa' ),
    listing_name  ( 'RIDEN RD6006-C - Digital Bench Lab Power Supply AC-DC 60V 360W - Batt Ch - USB' ),
    item_price    ( 'AU$303.78' ),
    // 2024-01-14 jj5 - shipping AU$105.91 + import charges AU$45.24
    item_shipping ( 'AU$151.15' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Riden-RD6006-Bench-Power-Supply.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004766124000.html?spm=a2g0o.productlist.main.11.5f55473bq1poyr&algo_pvid=126fa86b-b51f-426b-a8fb-6fa1df28c02a&aem_p4p_detail=2024011404562858026714163080015883576&algo_exp_id=126fa86b-b51f-426b-a8fb-6fa1df28c02a-5&pdp_npi=4%40dis%21AUD%21353.92%21283.13%21%21%21234.04%21187.23%21%402101fb1017052369879317183ea915%2112000030391597281%21sea%21AU%214385823938%21&curPageLogUid=LxRKQ6242Uo6&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=2024011404562858026714163080015883576_6' ),
    // 2024-01-15 jj5 - affiliate URL unavailable...
    //affiliate_url ( '' ),
    listing_name  ( 'RD RD6006 Assembled Set AC to DC adjustable battery charging Voltage Current digital control Bench Variable Power Supply 60V 6A' ),
    item_price    ( 'AU$283.13' ),
  ),
  // 2024-01-15 jj5 - AU$146.78 (RD6006 S400) + AU$51.95 (RD-400W-65V) = AU$198.73
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005898461456.html?spm=a2g0o.productlist.main.19.5f55473bq1poyr&algo_pvid=126fa86b-b51f-426b-a8fb-6fa1df28c02a&aem_p4p_detail=2024011404562858026714163080015883576&algo_exp_id=126fa86b-b51f-426b-a8fb-6fa1df28c02a-9&pdp_npi=4%40dis%21AUD%21141.80%2185.08%21%21%21672.03%21403.22%21%402101fb1017052369879317183ea915%2112000034761054798%21sea%21AU%214385823938%21&curPageLogUid=sLs2xzr2Uc5e&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=2024011404562858026714163080015883576_10' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DmWIelj' ),
    listing_name  ( 'RD6006 RD6006W USB WiFi DC Tegangan Rendah Saat Ini Modul Suplai Daya Buck Konverter Dapat Disesuaikan Multimeter 60V 6A' ),
    item_options  ( 'Color: RD6006 S400 + RD-400W-65V' ),
    item_price    ( 'AU$198.73' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006137392080.html?spm=a2g0o.productlist.main.21.5f55473bq1poyr&algo_pvid=126fa86b-b51f-426b-a8fb-6fa1df28c02a&algo_exp_id=126fa86b-b51f-426b-a8fb-6fa1df28c02a-10&pdp_npi=4%40dis%21AUD%21246.79%21148.07%21%21%211169.64%21701.78%21%402101fb1017052369879317183ea915%2112000037173146264%21sea%21AU%214385823938%21&curPageLogUid=m4d6bDeMwjJ0&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DEX0dAv' ),
    listing_name  ( 'RD RD6006 RD6006W 5 digit USB WiFi DC DC Voltage current Step down bench Power Supply buck converter 60V 6A Phone Repair' ),
    item_options  ( 'Color: RD6006 400W S400' ),
    item_price    ( 'AU$210.43' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/4000282551930.html?spm=a2g0o.order_detail.order_detail_item.3.3af2f19cZEXfxg' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.11.764218021V85h7&orderId=8146377811583938' ),
    order_id        ( '8146377811583938' ),
    order_date      ( 'Feb 12, 2022' ),
    order_item_name ( '' ),
    order_options   ( 'Color: RD6006W S12D' ),
    order_price     ( 'AU$128.89' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$12.75' ),
    order_discount  ( 'AU$1.42' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/4000282551930.html?spm=a2g0o.order_detail.order_detail_item.3.308ff19c2YoQhz' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.1.764218021V85h7&orderId=8147602361823938' ),
    order_id        ( '8147602361823938' ),
    order_date      ( 'Mar 15, 2022' ),
    order_item_name ( '' ),
    order_options   ( 'Color: RD6006W S12D' ),
    order_price     ( 'AU$128.58' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$12.72' ),
    order_discount  ( 'AU$1.42' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://d297fd4gt7t5lv.cloudfront.net/file/2023-11-03-162856/s-l500.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://au.element14.com/tenma/72-10505/power-supply-3ch-30v-3a-adjustable/dp/225194902?st=Tenma%2072-10505' ),
      link_text       ( 'Tenma 72-10505 Bench Power Supply @ element14' ),
    ),
    manufacturer_name ( 'Tenma' ),
    model_name        ( '72-10505' ),
    EquipmentFeature::BENCH_POWER_SUPPLY,
    EquipmentFeature::VOLTMETER,
    EquipmentFeature::AMMETER,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Tenma' ),
    model_name        ( '72-10505' ),
    equipment_type    ( 'Bench Power Supply' ),
    category          ( 'Power Supply' ),
    category          ( 'Bench Equipment' ),
    category          ( 'Meter' ),
    manufacturer_link (
      link_href       ( 'https://au.element14.com/webapp/wcs/stores/servlet/NonAjaxOrderDetail?invoiceExists=false&catalogId=10001&orderId=AAAcWcAADAANahBAAC&storeId=10184&langId=43' ),
      link_text       ( 'Tenma 72-10505 Bench Power Supply @ element14' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/TENMA_72-10505' ),
  see_also      ( 'Riden RD6006 Bench Power Supply' ),
  search_url    ( 'https://www.amazon.com/s?k=Tenma+72-10505+Bench+Power+Supply&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=Tenma+72-10505+Bench+Power+Supply&s=price-asc-rank' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Tenma+72-10505+Bench+Power+Supply' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/364346220290?amdata=enc%3AAQAIAAAAkMs2R1Mtpdxrl0GblEYlvEBWQWOBbkdnoO7l03WG6Eic39U5JSkjuLVwuyr5yo3AE5aVgkrhMVd1FMRyH1x0IQRsBJJUR%2By5HNT8%2By4La6TXXw%2BMk5miqcpbvnWws%2BANfzxC1K3A%2F%2F0GOQiyonRQARyf56ewOHJ%2BAe0V2VbtldBmsGCihpY1JKQuFmlfGGjdtg%3D%3D&mkcid=1&mkrid=711-53200-19255-0&siteid=0&campid=5339019639&customid=&toolid=20012&mkevt=1' ),
    affiliate_url ( 'https://ebay.us/AaLZfm' ),
    listing_name  ( '72-10505 Tenma Power Supply , 3Ch , 30V , 3A , Adjustable' ),
    item_price    ( 'AU$344.87' ),
    item_shipping ( 'AU$144.56' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Tenma+72-10505+Bench+Power+Supply' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/364346220290?amdata=enc%3AAQAIAAAAkMs2R1Mtpdxrl0GblEYlvEBWQWOBbkdnoO7l03WG6Eic39U5JSkjuLVwuyr5yo3AE5aVgkrhMVd1FMRyH1x0IQRsBJJUR%2By5HNT8%2By4La6TXXw%2BMk5miqcpbvnWws%2BANfzxC1K3A%2F%2F0GOQiyonRQARyf56ewOHJ%2BAe0V2VbtldBmsGCihpY1JKQuFmlfGGjdtg%3D%3D&mkcid=1&mkrid=711-53200-19255-0&siteid=0&campid=5339019639&customid=&toolid=20012&mkevt=1' ),
    affiliate_url ( 'https://ebay.us/9P3AbQ' ),
    listing_name  ( '72-10505 Tenma Power Supply , 3Ch , 30V , 3A , Adjustable' ),
    item_price    ( 'US$210.04' ),
    item_shipping ( 'US$88.04' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Tenma-72-10505-Bench-Power-Supply.html' ),
  purchase(
    equipment_url   ( 'https://au.element14.com/tenma/72-10505/power-supply-3ch-30v-3a-adjustable/dp/225194901' ),
    order_url       ( 'https://au.element14.com/webapp/wcs/stores/servlet/NonAjaxOrderDetail?invoiceExists=false&catalogId=10001&orderId=AAAcWcAADAANahBAAC&storeId=10184&langId=43' ),
    // 2024-01-16 jj5 - Order Confirmation Number 16529796
    order_id        ( '16529796' ),
    order_date      ( '28 July 2021' ),
    order_item_name ( '' ),
    order_options   ( '' ),
    order_price     ( 'AU$213.82' ),
    order_note      ( 'TENMA  72-10505  Bench Power Supply, Adjustable, Fixed, 3 Output, 3A, 2x 0 V to 30 V, 1x 5 V; Manufacturer: TENMA' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$21.38' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/51S26iMXlIL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://epson.com/For-Home/Scanners/Photo-Scanners/Epson-Perfection-V39-Scanner/p/B11B232201' ),
      link_text       ( 'Epson Perfection V39 Flatbed Scanner' ),
    ),
    manufacturer_name ( 'Epson' ),
    model_name        ( 'Perfection V39' ),
    EquipmentFeature::FLATBED_SCANNER,
    EquipmentConnectivity::USB,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Epson' ),
    model_name        ( 'Perfection V39' ),
    equipment_type    ( 'Flatbed Scanner' ),
    category          ( 'Scanner' ),
    category          ( 'USB' ),
    manufacturer_link (
      link_href       ( 'https://epson.com/For-Home/Scanners/Photo-Scanners/Epson-Perfection-V39-Scanner/p/B11B232201' ),
      link_text       ( 'Epson Perfection V39 Flatbed Scanner' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Epson_V39' ),
  warning       ( 'Consider the new model: Perfection V39 II' ),
  search_url    ( 'https://www.amazon.com/s?k=Epson+Perfection+V39+Flatbed+Scanner&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Epson-Perfection-V39-Document-resolution/dp/B00SSXQ7Q2/ref=sr_1_6?dib=eyJ2IjoiMSJ9.PKS7UW4VYaVJEW4hhjTEK1yxBVgm6VwnNz0EDfatHjmnYgyVbWMgp1OvzTc9dTKIFsfR8YpC2HG4fjMxbe6IYa3Pew1T4laTHxuvQskEqvk.BmLtQhP-FNy_lyZNLmDBM_6FGotosFHZTqXsbWGN12g&dib_tag=se&keywords=Epson%2BPerfection%2BV39%2BFlatbed%2BScanner&qid=1705241240&sr=8-6&th=1' ),
    affiliate_url ( 'https://amzn.to/3U0aj9P' ),
    listing_name  ( 'Epson Perfection V39 Color Photo & Document Scanner with Scan-To-Cloud & 4800 Optical Resolution, Black' ),
    item_options  ( 'Style: Perfection V39' ),
    item_price    ( 'US$119.99' ),
    item_shipping ( 'US$32.85' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Epson+Perfection+V39+Flatbed+Scanner&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Epson-Perfection-Flatbed-Scanner-Warranty/dp/B098K6R4V5/ref=sr_1_10?dib=eyJ2IjoiMSJ9.IMudF3gdLoJXUQvSEDDwYPgn349ZQ5LbitsQNhYP76pH8BKZhFHaRTfr_Vh8nSszwKev-YMGMOfAEtKn6wcgGSyJMfsvn0wh_6lGHblm9blCt-rtnnh-v7_eiRnmGyuL-PLj48yXFxGsdstSTUDZOg.jQmTLfQobvqwSxNPt74PD-qnloTwhvDAJn7vpzzbgIw&dib_tag=se&keywords=Epson+Perfection+V39+Flatbed+Scanner&qid=1705241405&sr=8-10' ),
    affiliate_url ( 'https://amzn.to/4aT4p0r' ),
    listing_name  ( 'Epson Perfection V39 USB Flatbed Colour Photo A4 LED Scanner 4800DPI w/Warranty P/N:B11B232501 (Renewed)' ),
    item_price    ( 'AU$175.00' ),
    item_shipping ( 'AU$14.95' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Epson+Perfection+V39+Flatbed+Scanner' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/204391218891?epid=220311812&hash=item2f96aa7ecb%3Ag%3AIVkAAOSw%7EU9kqq8y&amdata=enc%3AAQAIAAAA0OPGCRSesxUq6Bt4rDBz1pxTxoR1kPTkJqNdIokUZFezh6hU461%2BtauKL%2Bk%2Bb88m1y7k02jTD9WmINj5%2BzMEkWSbbOWn9KcAHNpOqvVV7xdq1oFZWteAqJ96x5%2FZ1VyRxf0nZT11rWB331pf%2BHIKpaJs3uT5I6FfXBcL7ou0LCwO7p1bLz%2Ba4DEpt4HRPBj2qvStw8xv3q8XLY4EV6P6WNAqLP6WQD%2BSN1CAbrxUn6DPrDhiTH8KK9cZqmbqMr2BNkBP7RXVYSWzOOXCpBfsyDE%3D%7Ctkp%3ABk9SR_apgIWhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/c1BvLv' ),
    listing_name  ( 'Epson Perfection V39 Flatbed Scanner - Black Brand New Sealed' ),
    item_price    ( 'US$85.00' ),
    item_shipping ( 'US$57.62' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/156002492213?epid=220311812&hash=item2452791f35%3Ag%3AeFEAAOSwCTBln12%7E&amdata=enc%3AAQAIAAAA0JuHy%2B2cGjtoWlCy1u%2ByONVSlg44TB6DZEexbjJ2TL6PaN%2Fa1%2BW7QlVyDuKKJLB1ZUAzbAYtHyBRK4slUElMQllVz6pyE269GS4GqMGaMx5o86rd0mfsdDGL0%2Br3PMf8z%2BSqSvkJyqM%2BGezUMCboOWcbjwPyCxFTVyCQ5mnCnGcUb7Kp6snfpzNt5yqPuQZMpxw4cv%2Fgg7l960hzWEnyhnL7qX%2B1zTpH%2Bi5nDIbkB%2B3LPw4EMiCbVw2tGDCCvTntUqmMzYq9xySu2R%2FnN8H8LKc%3D%7Ctkp%3ABk9SR_apgIWhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/K2dz4x' ),
    listing_name  ( 'Epson Perfection V39 Flatbed Scanner - Black' ),
    item_price    ( 'US$97.30' ),
    item_shipping ( 'US$48.34' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/325882250075?hash=item4be018835b%3Ag%3A8YQAAOSwNZBlTsc-&amdata=enc%3AAQAIAAAA0Fgpi9CzsFoNwqc4fg4E9MkjanCsGxT6X4XxqMfB3CLtrFN0cJMxrHmG6NixmtnfJ%2FHwVVDBYb9s8cW1LzWMiE5qOTJQMDykbHXtbkmWCz2sI3A52PVRB3aHVM%2FsAmkUv9reyJwV5lsn0ac28pJj9NLXm%2BEF5%2FwNcNGcg8U%2BNzREtjoqDbYhl64fbyBvaq%2FkVb5Zc%2FDQ7Ikt6jOvqDHA5FO%2B0reumxIGXf2M0UmgAN4Xc2IIm5CIx435vJdswL8s187OWK50q8mUZf5z3kcKSL8%3D%7Ctkp%3ABk9SR_apgIWhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/YtQLK3' ),
    listing_name  ( 'Brand New Epson Perfection V39 Flatbed Color Photo & Document Scanner' ),
    item_price    ( 'US$115.00' ),
    item_shipping ( 'US$77.28' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Epson+Perfection+V39+Flatbed+Scanner' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/362660392487?epid=1390124007&hash=item54703e6e27%3Ag%3AsAsAAOSw6wVlnFWu&amdata=enc%3AAQAIAAABAPqdfBIqPIZaCa4olcadYQ0DC5M%2BoShbz0k3YxpLXZr3QzMfP6nznZdQ9TTYObtWh7%2B2gq5maeD8EVrS%2BDF0Umcsjq7EWOWtMMDlj%2Bmne8OhIpv9tGSaNK0OKZAKYAdP3Nt5zA01kovXgOCKiIPYa4V92AqXnm8N3b%2FsK3aX3ykMds8imuzOtq3GhNqDmipL4bj7OCisCXyQOVRbhVAC%2FHTfLXBt1fP8q8%2B3n9YZJ1jHWNDyO6B7NXrpde5LyHH6QFBMw4SwdA6LyUar5JmgwfZUxNjXMGilQCeJaxzQLugeHXY%2B%2F%2BNbntkaGu8CkB%2BiVFAeFm24I8v5cBDSGiL6V8A%3D%7Ctkp%3ABk9SR-T6koWhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/glfCFd' ),
    listing_name  ( 'Epson Perfection V19/V39 USB Flatbed Colour Photo A4 LED Scanner 4800DPI /w Wty' ),
    item_price    ( 'AU$302.40' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/334500755840?epid=1390124007&hash=item4de1cc7980%3Ag%3AfYcAAOSwza5licLc&amdata=enc%3AAQAIAAABAJk%2FQyxjpxcyUDMDvGGGbRWZwKPVBAsWIjhGuAM1BfqhZb5apZHmix3wRhqlPg0sX%2FQL6xoWnQCBkfkQf8fxXEF9BzI7ZJdA%2FJgQMwTUZ518PH7YXRKyBNesA3M7RpqkZ4iza8%2F2xNC3mtx27gG66aLESBfBfsx2PTPu91JSlR2Yp%2FNUHTJQ2hXk0rq6%2B5qDbZvS4qK%2BbDElZdlRlIb0aaGi1bijo8zJaCprGaOCl6QK2DYF%2BvMJyfrLG9FetFSMHPR9nPXyFksQAWo2cq%2ByfJn%2Fx48AVlikkJpfw6fw8fDANNMrNjBI0cgOZ%2Bw00PWhYRGQbl6%2BWJzGxI6uER645Sw%3D%7Ctkp%3ABk9SR-T6koWhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/5Xq5jj' ),
    listing_name  ( 'Epson Perfection V39 USB Flatbed Colour Photo A4 LED Scanner 4800DPI *NEW*' ),
    item_price    ( 'AU$300.16' ),
    item_shipping ( 'AU$14.95' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Epson-Perfection-V39-Flatbed-Scanner.html' ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/304114435870' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=20-09093-25488#/' ),
    order_id        ( '20-09093-25488' ),
    order_date      ( '14 Sep 2022' ),
    order_item_name ( '' ),
    order_price     ( 'AU$219.95' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$19.95' ),
    order_discount  ( 'AU$11.00' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Hdfdab4a8df164b1fbe29c52f10cd7337f/Electric-Solder-Suction-Gun-SS-331-SS-331H-ESD-LCD-Digital-BGA-Tin-Pump-Suction-Absorb.jpg_.webp' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://pro-skit.ru/image/catalog/instructions/manual_ss_331.pdf' ),
      link_text       ( 'Pro\'sKit SS-331 LCD Desoldering Station (PDF)' ),
    ),
    manufacturer_name ( 'Pro\'sKit' ),
    model_name        ( 'SS-331H' ),
    EquipmentFeature::DESOLDERING_PUMP,
    EquipmentFeature::SOLDERING_STATION,
    EquipmentAttribute::HAND_TOOL,
    EquipmentAttribute::BENCH_EQUIPMENT,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Pro\'sKit' ),
    model_name        ( 'SS-331H' ),
    equipment_type    ( 'Desoldering Pump' ),
    category          ( 'Desoldering Tool' ),
    category          ( 'Hand Tool' ),
    category          ( 'Bench Equipment' ),
    manufacturer_link (
      link_href       ( 'https://pro-skit.ru/image/catalog/instructions/manual_ss_331.pdf' ),
      link_text       ( 'Pro\'sKit SS-331 LCD Desoldering Station (PDF)' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Pro%27sKit_SS-331H' ),
  search_url    ( 'https://www.amazon.com/s?k=Pro%27sKit+SS-331H+Desoldering+Pump&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=Pro%27sKit+SS-331H+Desoldering+Pump&s=price-asc-rank' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Pro%27sKit+SS-331H+Desoldering+Pump' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/295229038086?hash=item44bd059e06%3Ag%3AFg0AAOSweVVhzVFK&amdata=enc%3AAQAIAAAA0Lu7dtSubo9Tr%2FiEKKEFztv4GKdFSY3KLWg5h6P1Mp6zTM07E0gJ%2F3Kxhfubc3XgJMlgQZNUMUE9u2Pn8mxsRpMwmtVrHE%2Fo96ng6%2FOYZCme%2F%2BT4xm%2F98XKr9v6bEGnDmHn1NVbL31PCnt3uBqXrrEhOFNURRlbVPnIOgHSWyHiThxv%2FLBhjyKDHRzy3NDd9atGWkCPrlc488bqWhDqtNHNLsrUsE%2FS%2F3vtyYuB2dYy9aSELJGAvIj1gGfBQe1RRmNJ5nkSfNQmQJwqrRjOoqI8%3D%7Ctkp%3ABk9SR5Lk4IWhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/ZVkGPK' ),
    listing_name  ( '220V SS-331H LCD Electric Desoldering Pump Desoldering Absorb Solder Sucker' ),
    item_price    ( 'US$168.99' ),
    item_shipping ( 'US$49.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/374676096214?hash=item573c6f84d6%3Ag%3A6A4AAOSwQeNhzVFS&amdata=enc%3AAQAIAAAA0DI%2BHsLaukcnMoiG2%2BCliu74eyvBuAi%2Bz%2FxgI7XUrgNyFYU91y32DpZ57HNEHI1dcgN2qtVDwRAA3%2BdSTFnWRWk0FDOA4gUQMcm5enNV28L8WiYBF%2Fo4vqx8ps3%2B01wwFw208nHfLvNSBiL5LCFTZ9kY7xAIPQ1fRL7i5snRCtilL%2FDC03IKi2gVOiMYmtrKNANRNjsMMvhEopatefGQRhw1KSK5VM5VETepB0Zu0c4cAnqhM%2BOnmbLv0SQBHkklS8mGkAtKNldrts72zu4clvE%3D%7Ctkp%3ABk9SR5Lk4IWhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/LZ1hAj' ),
    listing_name  ( 'SS-331H LCD Electric Desoldering Pump Desoldering Absorb Solder Sucker 220V' ),
    item_price    ( 'US$169.99' ),
    item_shipping ( 'US$59.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/394523533844?hash=item5bdb6f6214%3Ag%3AHNkAAOSwdNhkGSRU&amdata=enc%3AAQAIAAAA0O6HP8QWWeQ9DcwmRnAw0kM%2FhSrzPDRpOscmtSiMDgapl%2FaQSU2gFa0KniU%2F5Qcegi%2BetZiVKuOepZWJoAyMfZGohvPBFxhp8CQKCH0EOV1CHah5AXrtRU%2FhIetLouPSn0GZnxSK%2BaXMUgNgSUSWET22gFFlQj07De7rnGxY6mH1Z6XH%2FraCKELdnD3iIG7X1cF9GQJxktRRPKsGx4a3IeF8Q%2FOMQlkmze5mz1tpZQy17OsFJq9IWXaLCrAPzjVUgq2xgxEwkyfg11y4pJydJ0c%3D%7Ctkp%3ABk9SR5Lk4IWhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/YBb2Zg' ),
    listing_name  ( 'SS-331H LCD Electric Desoldering Pump Desoldering Absorb Solder Sucker 220V' ),
    item_price    ( 'US$174.99' ),
    item_shipping ( 'US$69.99' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Pro%27sKit+SS-331H+Desoldering+Pump' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/295229038086?hash=item44bd059e06%3Ag%3AFg0AAOSweVVhzVFK&amdata=enc%3AAQAIAAAA8EJeO58N%2BKhYR7%2Fh29FsfLZzZZS2eh5ZokzxYzw1Fsqtl4tdZt9kD4emjlbaDVHur7qVAMmgv40aHaJNqYHfMpNMHDnpXKTm6KCTD%2BPUI6CMmgLo%2Bq3Wd8JhpC77Aia0%2BFmwHGL%2FudWtchc1oOOREJMrSBFaS61WauE3E9Gv0XLrCLe3vwCJNFSlummMt%2B68oGgyl%2FM7soenFd1Tc9p0BgOd1MTw8Xr2ytoY7WINyORSyc%2B4QDSYsrUvsbZfmg5mHwPVD8uxfzydRwN8kLW5DQIiWzpHc%2BuG1Q7uq%2FY21JiiKqNLEWT%2FxEboaB98FmbTjg%3D%3D%7Ctkp%3ABk9SR9TJ-oWhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/2wqhA2' ),
    listing_name  ( '220V SS-331H LCD Electric Desoldering Pump Desoldering Absorb Solder Sucker' ),
    item_price    ( 'AU$277.46' ),
    item_shipping ( 'AU$82.08' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/186022972288?hash=item2b4fd54b80%3Ag%3A%7EN8AAOSwwQJkz32P&amdata=enc%3AAQAIAAAA0J0HB7iP4%2FmXGdKubMhWoiqB7PFBoJZAbG49xZ%2BddeC1fEItzcTvWMiapt4B0Aoj%2F5lhWeNJ1XCRvCEteYTB9YE4rhCqgafY5gINNnyhNZsrA89Wluy46s0Nm3kLi2VMY5LvgZ58ODZoxUffvRY6SRiYqybaumYHoqpnerKdBbwf5iocHgXvGG3ru%2FawONYhG1UjyfcLgP55nQZwqRiMyvz0tk8ORjTVd9somoUfgzk9Ods9sa2rsJeUew%2BrW18en9Uf61ZMrVhJVOhAox7TMiY%3D%7Ctkp%3ABk9SR9TJ-oWhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/nM40wT' ),
    listing_name  ( 'Electric Tin Suction Pump Pro\'sKit SS-331H ESD Digital BGA Desoldering Suction' ),
    item_price    ( 'AU$292.59' ),
    item_shipping ( 'AU$113.30' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/373844956241?hash=item570ae55451%3Ag%3Ax7gAAOSwbM9hzVFH&amdata=enc%3AAQAIAAAA0FpkFy9rO8P4h%2FAp3ZVtx%2B58yZUQnzVi5LX4QnUYUr9AQEwy4jikoZkr7D3KJ1pS%2FmvJUbUJpMxxyiWdQAs8YzBf5ghHwaZdDY%2FmGgYtiMD1ztFLVp6Mskr2w605XUtNguVwTQ%2Bt%2Fv3G1w0diOoITrYMt8T2prhIsUsEuQ201O4qk6oNqlAtrolHz%2BkbQBNN1FPkRkM1Qxigt%2FAnadsGnXwiQdU9uoYr8N1%2ByR8gYQWBLfbP8Pn6o9gVUXQV%2FZJhRZLjyh%2FD%2FFxoTbRJHbyOf0Y%3D%7Ctkp%3ABk9SR9zJ-oWhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/Z8rJEe' ),
    listing_name  ( 'Pro\'sKit SS-331H LCD Electric Desoldering Pump Desoldering Absorb Solder Sucker' ),
    item_price    ( 'AU$307.99' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Pro%27sKit-SS-331H-Desoldering-Pump.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005003165472595.html?spm=a2g0o.productlist.main.1.3ca7793f0CPpu2&algo_pvid=2e3abd1b-3790-45d2-b1cd-f4bd036f6c85&aem_p4p_detail=202401140630493366620872199880016013378&algo_exp_id=2e3abd1b-3790-45d2-b1cd-f4bd036f6c85-0&pdp_npi=4%40dis%21AUD%21241.82%21169.28%21%21%21159.91%21111.94%21%402103251317052426491338277ec3cf%2112000025109610074%21sea%21AU%214385823938%21&curPageLogUid=lkmw02qg8OAi&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=202401140630493366620872199880016013378_1' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DEoD8cp' ),
    listing_name  ( 'Pro\'sKit SS-331H Desoldering station LCD Digital Electric Soldering Suction Pump High Power Strong Auto Sleep Vacuum Solder Gun' ),
    item_price    ( 'AU$169.28' ),
    item_shipping ( 'AU$95.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004008727910.html?spm=a2g0o.productlist.main.3.3ca7793f0CPpu2&algo_pvid=2e3abd1b-3790-45d2-b1cd-f4bd036f6c85&aem_p4p_detail=202401140630493366620872199880016013378&algo_exp_id=2e3abd1b-3790-45d2-b1cd-f4bd036f6c85-1&pdp_npi=4%40dis%21AUD%21241.82%21169.28%21%21%21159.91%21111.94%21%402103251317052426491338277ec3cf%2112000030303220695%21sea%21AU%214385823938%21&curPageLogUid=p4Lv4xr8DdJk&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=202401140630493366620872199880016013378_2' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DeZ2W5b' ),
    listing_name  ( 'Pro\'sKit SS-331H ESD LCD Digital Electric Desoldering Pump BGA Desoldering Suction Vacuum Solder Sucker Gun' ),
    item_price    ( 'AU$169.28' ),
    item_shipping ( 'AU$95.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005003630022510.html?spm=a2g0o.productlist.main.19.3ca7793f0CPpu2&algo_pvid=2e3abd1b-3790-45d2-b1cd-f4bd036f6c85&aem_p4p_detail=202401140630493366620872199880016013378&algo_exp_id=2e3abd1b-3790-45d2-b1cd-f4bd036f6c85-9&pdp_npi=4%40dis%21AUD%21138.08%21120.13%21%21%2191.31%2179.44%21%402103251317052426491338277ec3cf%2112000026568626447%21sea%21AU%214385823938%21&curPageLogUid=xIKEGQvjxlbX&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=202401140630493366620872199880016013378_10' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DCASgUZ' ),
    listing_name  ( 'Electric Solder Suction Gun SS-331 SS-331H ESD LCD Digital BGA Tin Pump Suction Absorb Soldering Iron Hot Desoldering Station' ),
    item_price    ( 'AU$120.13' ),
    item_shipping ( 'AU$95.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/32982282829.html?spm=a2g0o.order_detail.order_detail_item.3.149af19cCbNwfZ' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.21.764218021V85h7&orderId=8173725949153938' ),
    order_id        ( '8173725949153938' ),
    order_date      ( 'Aug 22, 2023' ),
    order_item_name ( '' ),
    order_options   ( 'Color: 331H With Tools' ),
    order_price     ( 'AU$200.77' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$15.86' ),
    order_gst       ( 'AU$21.67' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S2f7129208ab747b7a3b4deba1a7baad8v/UNI-T-UTG932E-UTG962E-Function-Arbitrary-Waveform-Signal-Generator-DDS-Support-Frequency-Sweep-Output-Gerador-De.jpg_.webp' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://uni-trendus.com/products/utg962e-60mhz-2ch-classic-series-arbitrary-waveform-generator' ),
      link_text       ( 'UTG962E 60MHz 2Ch Classic-Series Arbitrary Waveform Generator' ),
    ),
    manufacturer_link (
      link_href       ( 'https://instruments.uni-trend.com/static/upload/file/20210609/UTG900.pdf' ),
      link_text       ( 'UNI-T UTG900E Series Function Arbitrary Waveform Generators (PDF)' ),
    ),
    manufacturer_name ( 'UNI-T' ),
    model_name        ( 'UTG962E' ),
    EquipmentFeature::SIGNAL_GENERATOR,
    EquipmentFeature::WAVEFORM_GENERATOR,
    EquipmentFeature::FUNCTION_GENERATOR,
    EquipmentAttribute::BENCH_EQUIPMENT,
    EquipmentConnectivity::BNC,
    EquipmentConnectivity::USB,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'UNI-T' ),
    model_name        ( 'UTG962E' ),
    equipment_type    ( 'Signal Generator' ),
    category          ( 'Signal Generator' ),
    category          ( 'Waveform Generator' ),
    category          ( 'Bench Equipment' ),
    category          ( 'USB' ),
    category          ( 'BNC' ),
    manufacturer_link (
      link_href       ( 'https://uni-trendus.com/products/utg962e-60mhz-2ch-classic-series-arbitrary-waveform-generator' ),
      link_text       ( 'UTG962E 60MHz 2Ch Classic-Series Arbitrary Waveform Generator' ),
    ),
    manufacturer_link (
      link_href       ( 'https://instruments.uni-trend.com/static/upload/file/20210609/UTG900.pdf' ),
      link_text       ( 'UNI-T UTG900E Series Function Arbitrary Waveform Generators (PDF)' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/UNI-T_UTG962E' ),
  see_also      ( 'Rigol MSO5074 Mixed Signal Oscilloscope' ),
  search_url    ( 'https://www.amazon.com/s?k=UNI-T+UTG962E&crid=3VQA4KZV0J748&sprefix=uni-t+utg962e+signal+generator%2Caps%2C262&ref=nb_sb_noss_1' ),
  search_url    ( 'https://www.amazon.com.au/s?k=UNI-T+UTG962E+Signal+Generator&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/UNI-T-UNI-Trend-Arbitrary-Generator-Frequency/dp/B0CDRYBWR2/ref=sr_1_4?dib=eyJ2IjoiMSJ9.4BBhup5a_5eQnOo2mb6NrDXx-XX7jA_QZwA2SFUKcYLKYvMM3QhsjLJnLie2or2z.YbD1NTzHGG3YYYbygGPYt7gnnptHfJYHlteS9bMiIDY&dib_tag=se&keywords=UNI-T%2BUTG962E%2BSignal%2BGenerator&qid=1705243047&sr=8-4&th=1' ),
    affiliate_url ( 'https://amzn.to/3O2d6M4' ),
    listing_name  ( 'UNI-T UNI-Trend UTG932E UTG962E Mini Handheld Function Arbitrary Waveform Generator Signal Source Dual Channel 60Mhz/30Mhz 200MS/s 14bits Frequency Meter(UTG962E 60Mhz)' ),
    item_options  ( 'Size Name: UTG962E' ),
    item_price    ( 'AU$362.43' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=UNI-T+UTG962E+Signal+Generator' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/314911262297?hash=item49522c8659%3Ag%3AmKoAAOSwS6Zkmr9H&amdata=enc%3AAQAIAAAA0CbyST03W8plZ9Qa94hpoh1JtNhOqYhHGEzJb61J9PEUU0w%2FDfwY1TMRw78ylkWT97NTGZX6VevlBRMMYSGdG4N2reJbv5ackLegI6gJjff5GDQul4uF4Q9pk%2FDOzxQetNYoI9HDyf1TVrpa6I950dJlBkW%2BAuTh72pw1mJARkUkSUlLmzn83c4dve2HSf43OArT%2FOsx1XV1ffFQksaK39p84Rnfp2tQbrc0aLWvYlLnkXUYw8umXmnTlnSpi%2BzigSnzM2aL%2BwNy68gnhNUfnrQ%3D%7Ctkp%3ABk9SR7j3zIahYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/eScxVB' ),
    listing_name  ( 'UNI-T UTG932E 962E Function Arbitrary Waveform Generator Signal Frequency Meter✦' ),
    item_options  ( 'Model: UTG962E' ),
    item_price    ( 'US$178.90' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/266341327284?hash=item3e032e21b4%3Ag%3AeEUAAOSwGQ9kuNqd&amdata=enc%3AAQAIAAAA0MayVw2CitS3gFbX4gRLPOB3mxdfqYIA3ZthQVg70HWOFn0cUtH%2B9K4qSOm%2FI3wHJWFy06ui6sN4rj%2F6ab%2B8WPfbZFHbY4tY7KpatcdaZa8EVxxwvpa%2FDojLu6HBUTmVQwf2iKF%2FUgoKzsWn8dTsS3AO7KRXbGGGol2iYAXERh4Dp5mooEXRHBzPuDcZknqRX6VqOoteNjJg18lXyaIBeKCpZ3s4iiz9S3PSy9nlzQfmmSEMW7MRLp3nbbsQL2MAFv%2FUnekzC1jHcNnQ1NujzuI%3D%7Ctkp%3ABk9SR7j3zIahYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/cfQ3Go' ),
    listing_name  ( 'UNI-T UTG932E UTG962E 2CH Function Signal Source Generator Arbitrary Waveform' ),
    item_options  ( 'Color: UTG962E-60MHz' ),
    item_price    ( 'US$265.05' ),
    item_shipping ( 'US$15.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/324353018943?epid=14063079448&hash=item4b84f24c3f%3Ag%3A%7ED4AAOSw27dfmnKE&amdata=enc%3AAQAIAAAA0JVp2dNeLpInulzBsbZkf2nsb3x9HPW4PuO1ELOQveHvvnQLlHPH6Th2dnZpYhL0xmlk6jdJC%2BXN%2Bh%2Fm0fyMu5qGPiM4pUjNAr1IgymslU4ADt%2Fh8byLg3BH0fAh%2BZMubn2focyUkX%2Fp8B0Gj4KGaJ%2FtppvAL6WvIm8U7JR0Om%2FJVuL9ne9P7UKJlR7l5F%2B6eMUnp16CqI0FI3UllIYZpLaSyFvTIdngiUbwtVKqcLl42wiPU3msdU7FLLZW82D0ws7wMwF8%2FTu8hPbDpQXiHpI%3D%7Ctkp%3ABk9SR7j3zIahYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/4qx7sF' ),
    listing_name  ( 'UNI-T Function Signal Generator Arbitrary Waveform 2CH 30MHz Frequency Meter' ),
    item_options  ( 'MPN: UTG962E' ),
    item_price    ( 'US$248.22' ),
    item_shipping ( 'US$15.00' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=UNI-T+UTG962E+Signal+Generator' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/324353018943?epid=14063079448&hash=item4b84f24c3f%3Ag%3A%7ED4AAOSw27dfmnKE&amdata=enc%3AAQAIAAAA0JVp2dNeLpInulzBsbZkf2nsb3x9HPW4PuO1ELOQveHvvnQLlHPH6Th2dnZpYhL0xv0TeKX6MRPb%2F%2BE57AFQcu%2F2H09PNZ%2FnL%2F5%2FWf75KUNeplfi8HX99cWezADMOwWNB19T97DqIg8PI2U%2F%2FVTDvd8%2BgxnpGCfKr8YeMSapQD%2BICBUuyTqIYdgqBQuSCzj3uwbIWvyqm9l4SHL2vrzrlqvJeYVTWxALwjh3tERfkbeSt5hw7rIFyxbGZ33u1jxepmsGAVrIAV0EOVXmQAhmcvQ%3D%7Ctkp%3ABk9SR6jY8YahYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/D0rU4y' ),
    listing_name  ( 'UNI-T Function Signal Generator Arbitrary Waveform 2CH 30MHz Frequency Meter' ),
    item_options  ( 'MPN: UTG962E' ),
    item_price    ( 'AU$407.56' ),
    item_shipping ( 'AU$24.63' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/402801005139?hash=item5dc8cf9253%3Ag%3AoqcAAOSwboRgd%7Ej7&amdata=enc%3AAQAIAAAA0GEO1CsmAp3Ql%2Bxye%2FUuDkF5nKyysuAelvNOuYayDp56LLgCLffydxNGRvO0EZqCVrBPQqB9CVwM7zu1MUs6ZzKkwX2vJdxEAptgkCP0eLiQ7MGJa4SHbos%2BUDNriEx8Wo9uqXvLg7kicTjZvnX%2BpsCJnwHTwKdMnG5avOGrOM0kqhMIqnhpSE%2B8rPHly56lV12TKIBhaJyL94JnRYwlS03TDifUu6zrIR9ynyNH3n9jxsu2C1pxTy1N0IlO9tg2rOfiCy87fsLTGmszeJAxnuQ%3D%7Ctkp%3ABk9SR6jY8YahYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/3jA2sX' ),
    listing_name  ( 'UNI-T Function Arbitrary Waveform Generator 2CH 60MHZ Signal Source Frequency Te' ),
    item_price    ( 'AU$435.59' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/354584827549?hash=item528ee7169d%3Ag%3AjtsAAOSwHb9j61Tc&amdata=enc%3AAQAIAAAA8GNz6UNIcrpy%2BC7tYaQgGuEAo0SqMDQZrnkINvVcJOuncYvKQQJplkCmt6EdhedliNkfvLInVefjhl%2BDYJRYgxATdFYMRfxPUXPAvgNUzFaBDB%2BoAseTk4a1arvr3iBRpfDAAnbxfoXMVi2RUzyaDD2n0ME5%2B%2FpsKhs%2BC3Eu8K0RWrdtDVGozAaqjcA5kfBVKbamVwoy%2BJjzFG5Ws0GSLbPDxdOr%2FjLCe4zS9msMVsWNOEj%2FUeBRaNi%2B6bum0Kl2V2hDCLs%2B3eSKg2IFaI0IltzJVR%2FnqLZHb%2B12FY9taLMLGHW3FmPJSq%2Br4XTmD%2FC4kA%3D%3D%7Ctkp%3ABk9SR6rY8YahYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/lVxEBH' ),
    listing_name  ( 'UTG962E Function Waveform Generator 2CH 30/60MHz Signal Source Frequency Meter' ),
    item_options  ( 'Frequency Range: 60MHz' ),
    item_price    ( 'AU$440.03' ),
    item_shipping ( 'AU$3.27' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-UNI-T-UTG962E-Signal-Generator.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/4000373256414.html?spm=a2g0o.productlist.main.1.6aee631a71rg1e&algo_pvid=1018683c-85ea-46b3-9ce0-4315059818a6&aem_p4p_detail=2024011406481710314357870777500015465506&algo_exp_id=1018683c-85ea-46b3-9ce0-4315059818a6-0&pdp_npi=4%40dis%21AUD%21273.63%21229.85%21%21%21180.95%21152.00%21%402101c59817052436976288840ea8a1%2112000031539846388%21sea%21AU%214385823938%21&curPageLogUid=ieF3MRwMcTN6&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=2024011406481710314357870777500015465506_1' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DekcjKv' ),
    listing_name  ( 'UNI-T UTG932E UTG962E Function Arbitrary Waveform Generator Signal Source Dual Channel 200MS/s 14bits Frequency Meter 60Mhz' ),
    item_options  ( 'Color: UTG962E-60Mhz' ),
    item_price    ( 'AU$282.66' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/4000573960327.html?spm=a2g0o.productlist.main.3.6aee631a71rg1e&algo_pvid=1018683c-85ea-46b3-9ce0-4315059818a6&aem_p4p_detail=2024011406481710314357870777500015465506&algo_exp_id=1018683c-85ea-46b3-9ce0-4315059818a6-1&pdp_npi=4%40dis%21AUD%21343.06%21229.86%21%21%21226.86%21152.00%21%402101c59817052436976288840ea8a1%2112000031499202663%21sea%21AU%214385823938%21&curPageLogUid=vvcLg3PjN3ht&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=2024011406481710314357870777500015465506_2' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DkF6Prb' ),
    listing_name  ( 'UNI-T UTG932E UTG962E Function Signal Generator 30Mhz 60Mhz Dual Channel Frequency Sine Wave Arbitrary Waveform Generator' ),
    item_options  ( 'Color: UTG962E-60Mhz' ),
    item_price    ( 'AU$282.65' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006079350367.html?spm=a2g0o.productlist.main.13.6aee631a71rg1e&algo_pvid=1018683c-85ea-46b3-9ce0-4315059818a6&aem_p4p_detail=2024011406481710314357870777500015465506&algo_exp_id=1018683c-85ea-46b3-9ce0-4315059818a6-6&pdp_npi=4%40dis%21AUD%21269.05%21269.05%21%21%211275.10%211275.10%21%402101c59817052436976288840ea8a1%2112000035635019037%21sea%21AU%214385823938%21&curPageLogUid=oroI3ZLGcp9u&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=2024011406481710314357870777500015465506_7' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DDr6GjB' ),
    listing_name  ( 'UNI-T UTG932 UTG962 Function Arbitrary Waveform Generator Signal Source Dual Channel 200MS/s 14bits Frequency Meter 30Mhz 60Mhz' ),
    item_options  ( 'Color: UTG962E' ),
    item_price    ( 'AU$330.68' ),
    item_shipping ( 'AU$31.16' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/4001115789769.html?spm=a2g0o.order_detail.order_detail_item.3.356df19c3FTyKr' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.41.764218021V85h7&orderId=8146217081683938' ),
    order_id        ( '8146217081683938' ),
    order_date      ( 'Feb 12, 2022' ),
    order_item_name ( '' ),
    order_options   ( 'Color: UTG962E' ),
    order_price     ( 'AU$205.81' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$20.58' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sf0052a55857442dda1671c54914e2fe4S/Owon-XDM1041-XDM1241-Digital-Multimeter-55000-Counts-High-Accuracy-Desktop-Multimeters-AC-DC-Tester-True-RMS.jpg_.webp' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.owontechnology.eu/product/4703647/owon-xdm1041-55-000-counts-bench-type-digital-multimeter' ),
      link_text       ( 'OWON XDM1041 Bench Multimeter' ),
    ),
    manufacturer_name ( 'OWON' ),
    model_name        ( 'XDM1041' ),
    EquipmentFeature::BENCH_MULTIMETER,
    EquipmentFeature::VOLTMETER,
    EquipmentFeature::AMMETER,
    EquipmentFeature::OHMMETER,
    EquipmentFeature::CAPACITANCE_METER,
    EquipmentFeature::FREQUENCY_COUNTER,
    EquipmentFeature::CONTINUITY_TESTER,
    EquipmentFeature::DIODE_TESTER,
    EquipmentFeature::THERMOMETER,
    EquipmentFeature::LCD,
    EquipmentAttribute::CAT_I,
    EquipmentAttribute::CAT_II,
    EquipmentConnectivity::BANANA_PLUG,
    EquipmentConnectivity::USB,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'OWON' ),
    model_name        ( 'XDM1041' ),
    equipment_type    ( 'Bench Multimeter' ),
    category          ( 'Multimeter' ),
    category          ( 'Bench Equipment' ),
    category          ( 'Meter' ),
    category          ( 'USB' ),
    manufacturer_link (
      link_href       ( 'https://www.owontechnology.eu/product/4703647/owon-xdm1041-55-000-counts-bench-type-digital-multimeter' ),
      link_text       ( 'OWON XDM1041 Bench Multimeter' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/OWON_XDM1041' ),
  warning       ( 'You might like to check out the XDM1241 or XDM2041' ),
  see_also      ( 'ANENG AN-999S Bench Multimeter' ),
  search_url    ( 'https://www.amazon.com/s?k=OWON+XDM1041+Bench+Multimeter&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/OWON-Multimeter-Universal-Temperature-Multimeters/dp/B0B5QBSJ2T/ref=sr_1_1?dib=eyJ2IjoiMSJ9.cgC8k8gnA9WvWCjmt0537xwQgLfCbHjPX18IEsXv748dtSXJWOrCR-egdql_7yYXWG-PEZxXcxEjVq6G1JVs1lUJuBb6hBSnUNj5jFAyI3c.34AxhEpI-rQpnjmEMuMZ0HFGNHGdV7UGdmizDVly0jI&dib_tag=se&keywords=OWON+XDM1041+Bench+Multimeter&qid=1705244008&sr=8-1' ),
    affiliate_url ( 'https://amzn.to/41V5DUR' ),
    listing_name  ( 'OWON XDM1041 USB/RS232 Digital Multimeter 55000 Counts High Accuracy Universal Desktop Temperature Multimeters Meter with 3.7Inch LCD Screen' ),
    item_price    ( 'US$129.00' ),
    item_shipping ( 'US$21.05' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/OWON-Bench-Type-Multimeter-Universal-Multimeters/dp/B0B8HWH63J/ref=sr_1_2?dib=eyJ2IjoiMSJ9.cgC8k8gnA9WvWCjmt0537xwQgLfCbHjPX18IEsXv748dtSXJWOrCR-egdql_7yYXWG-PEZxXcxEjVq6G1JVs1lUJuBb6hBSnUNj5jFAyI3c.34AxhEpI-rQpnjmEMuMZ0HFGNHGdV7UGdmizDVly0jI&dib_tag=se&keywords=OWON+XDM1041+Bench+Multimeter&qid=1705244008&sr=8-2' ),
    affiliate_url ( 'https://amzn.to/3HgNlE7' ),
    listing_name  ( 'OWON XDM1041 Bench-Type Digital Multimeter True RMS High Accuracy Universal Desktop Multimeters' ),
    item_price    ( 'US$129.00' ),
    item_shipping ( 'US$21.05' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/OWON-Multimeters-XDM1041-Multimeter-Accuracy/dp/B0CLDCYDHC/ref=sr_1_3?dib=eyJ2IjoiMSJ9.cgC8k8gnA9WvWCjmt0537xwQgLfCbHjPX18IEsXv748dtSXJWOrCR-egdql_7yYXWG-PEZxXcxEjVq6G1JVs1lUJuBb6hBSnUNj5jFAyI3c.34AxhEpI-rQpnjmEMuMZ0HFGNHGdV7UGdmizDVly0jI&dib_tag=se&keywords=OWON+XDM1041+Bench+Multimeter&qid=1705244008&sr=8-3' ),
    affiliate_url ( 'https://amzn.to/420jRDH' ),
    listing_name  ( 'OWON Bench Multimeters OWON XDM1041 Digital Multimeter 55000 Counts High Accuracy Desktop Multimeters AC/DC Tester True RMS USB Multimeter(XDM1041 AC Power Supply)' ),
    item_options  ( 'Size: XDM1041' ),
    item_price    ( 'US$166.37' ),
    item_shipping ( 'US$18.80' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=OWON+XDM1041+Bench+Multimeter&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/OWON-Multimeter-Accuracy-Universal-Multimeters/dp/B0BCFS1JHR/ref=sr_1_13?dib=eyJ2IjoiMSJ9.Z9h6eOPVSwzKh-xScQx6OKV09Yp4CueBhVz99uCpG3el4zxaFS2XTknDd6CwpqSL7H3YEgaIkJlxwRWXSjegdIVG7ybUrL2o3loOIMH8LygDkV3LOLxesLT8rqJ_XPhV0thdoPpJVV6V19TRXh3JtQ.L9Jg-UZnP0d6PMgFMJBkVxrj-DF1xLdwe_zqaUej8Qw&dib_tag=se&keywords=OWON+XDM1041+Bench+Multimeter&qid=1705244271&sr=8-13' ),
    affiliate_url ( 'https://amzn.to/3HkHBsS' ),
    listing_name  ( 'OWON XDM1041 USB/RS232 Digital Multimeter 55000 Counts High Accuracy Universal Desktop Multimeters Meter with 3.7Inch LCD Screen' ),
    item_price    ( 'AU$159.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/GuliTech-Multimeters-XDM1041-Multimeter-Accuracy/dp/B0CKPLZGPM/ref=sr_1_15?dib=eyJ2IjoiMSJ9.Z9h6eOPVSwzKh-xScQx6OKV09Yp4CueBhVz99uCpG3el4zxaFS2XTknDd6CwpqSL7H3YEgaIkJlxwRWXSjegdIVG7ybUrL2o3loOIMH8LygDkV3LOLxesLT8rqJ_XPhV0thdoPpJVV6V19TRXh3JtQ.L9Jg-UZnP0d6PMgFMJBkVxrj-DF1xLdwe_zqaUej8Qw&dib_tag=se&keywords=OWON+XDM1041+Bench+Multimeter&qid=1705244271&sr=8-15' ),
    affiliate_url ( 'https://amzn.to/3HkVs2u' ),
    listing_name  ( 'GuliTech Mini Bench Multimeters XDM1041 Digital Multimeter 55000 Counts High Accuracy Desktop Multimeters AC/DC Tester True RMS USB Multimeter(XDM1041 AC Power Supply)' ),
    item_options  ( 'Size Name: XDM1041' ),
    item_price    ( 'AU$250.08' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/OWON-Oscilloscopes-Multimeters-Oscilloscope-Laboratories/dp/B0B2PGTKHX/ref=sr_1_18?dib=eyJ2IjoiMSJ9.Z9h6eOPVSwzKh-xScQx6OKV09Yp4CueBhVz99uCpG3el4zxaFS2XTknDd6CwpqSL7H3YEgaIkJlxwRWXSjegdIVG7ybUrL2o3loOIMH8LygDkV3LOLxesLT8rqJ_XPhV0thdoPpJVV6V19TRXh3JtQ.L9Jg-UZnP0d6PMgFMJBkVxrj-DF1xLdwe_zqaUej8Qw&dib_tag=se&keywords=OWON%2BXDM1041%2BBench%2BMultimeter&qid=1705244271&sr=8-18&th=1' ),
    affiliate_url ( 'https://amzn.to/48xgfvD' ),
    listing_name  ( 'OWON XDM1041 Portable Digital Oscilloscopes Multimeter,3.5in Desktop Digital Multimeters Oscilloscope, 55000 Counts LCD True RMS Temperature Tester Meter for Instruments and Laboratories, Factories' ),
    item_options  ( 'Style Name: XDM1041' ),
    item_price    ( 'AU$235.80' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=OWON+XDM1041+Bench+Multimeter' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/115977685204?hash=item1b00cf08d4%3Ag%3AaJcAAOSw9chhsyGg&amdata=enc%3AAQAIAAAA8OmMu9Ywrr73AUr%2FADCqvS1SxeoKllB0BA3DpPugFMY9T7xQxKAEN1V75TssmsnB4VF7HtjUq%2FAf0iLD2z%2BlLbYygPnjMhWRM0zi5JTDKH9bvSagylQS2RGvb0nOCPxdM5AGC%2F3VhOxVY9NkY3ako%2FTGUup8av7%2F7ApTA3F2vnq%2BtUs3CdOaS0FRkmj7wAHTUZQ%2B%2Bat3MSmCOxbhHeALxSWFZIYisFQuamdVItAWeZ4JwOzGUh7xrE%2B9lNA7biek%2FswAYFUZ%2F%2B4VAhEAU6l9dIewbVekRkaCEKkpF0h%2F7tIKFOeUY7LcpAwMmWyj4qHUIQ%3D%3D%7Ctkp%3ABk9SR8SW9oehYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/yMxP8Z' ),
    listing_name  ( 'OWON 4 1/2 digits XDM1041 Bench-type Digital Multimeter 55000 Counts True RMS' ),
    item_price    ( 'US$109.98' ),
    item_shipping ( 'US$25.88' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/305214479044?hash=item4710335ac4%3Ag%3AfnMAAOSw1pJlMS52&amdata=enc%3AAQAIAAAA8Dw7c98%2BD4xuow0HobnXhyWw5%2BUZ%2BJvm3dSnZbUT4mynFebcq46HlwzdYijoHxCoDNrGsjUJs6w3bi0Ox2POUggqVYs8YKAeUXF94kQwKOsUQo85jbDRm%2BWmiKA2q4kk21hA2s%2BNP6b7raaBIDffpOzShptDIV6v5pVFectcvdYoZrHOLDyaL2n6bktS8rSiwmtINa%2BjKlNdljNWQq1JsT0QXFwHuEUjK0E9nHEWbDLRvuHIklu9i85nbIoNXpFp1GqUSAMePGsG5Jqi8GBqqU0LId93fcSWPFvOq7UWNAVkVYeYufw%2FGIw3tKvUf6SvKg%3D%3D%7Ctkp%3ABk9SR8SW9oehYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/56T3By' ),
    listing_name  ( 'OWON 4 1/2 digits XDM1041 Bench-type Digital Multimeter 55000 Counts True RMS' ),
    item_price    ( 'US$109.00' ),
    item_shipping ( 'US$38.30' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/266500613537?hash=item3e0caca5a1%3Ag%3ATEMAAOSwXullTlEf&amdata=enc%3AAQAIAAAA0LCHhu1WS7%2Ft5ut3LSNl%2Fn0Qb1goRmqxzAPKGx1XbVG84Pzht9oemCHR9QRwQ5%2BDah2IGt4SIRT%2FgcYpQuhVlf95eV%2F6XE%2B6cp%2B6ItzITHczxPhDUIfWolKXiKtZpDEk5%2FFUaoNK3WZDdKI%2FMxGfKhZ06F%2Fw1GPLERpRKxuzpTyGmtlBChiWXEJRRD4HBVTJU8%2F36eGoOGtijyk8gqOENGt960YpbkJZK89HVX7E%2FEgBADAOzy6GKoz15R9W%2FQahak%2FfUdOd0PkQL3%2BFQ2VnsLk%3D%7Ctkp%3ABk9SR8SW9oehYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/CfGTie' ),
    listing_name  ( 'OWON 4 1/2 digits XDM1041 Bench-type Digital Multimeter 55000 Counts True RMS' ),
    item_price    ( 'US$105.00' ),
    item_shipping ( 'US$84.58' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=OWON+XDM1041+Bench+Multimeter' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/204556767242?hash=item2fa088900a%3Ag%3AaJcAAOSw9chhsyGg&amdata=enc%3AAQAIAAAA0O0ba0rYUexKTpxmvGAKypIwlhWb216iatv9W3ka18uYTK12qevttLSMt6xj6eqOixAdTqBPTaTtyg82oGuUHevZ1h2TpioNXKoPEyDAZ3oc045lSf%2BpfeOaf5Gfsu%2B88CTkDR0l88UTLeuaOxkQJlu%2FNhAwY%2FK2VV0wPtbN4qb%2BJ9dk9Hg9P4GqKwOKNkanONvLYrzItgxUrYhlz2eXADEByAyuxvgb8iPk6zc275oBCGZm%2FY%2BnIqLigL8Fagi7LzX6k5hiDq%2FELS3r%2BlXe3Yw%3D%7Ctkp%3ABk9SR6iJjIihYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/En07Co' ),
    listing_name  ( 'OWON 4 1/2 digits XDM1041 Bench-type Digital Multimeter 55000 Counts True RMS' ),
    item_price    ( 'AU$174.98' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/314802579474?hash=item494bb22812%3Ag%3AlVkAAOSwSNRk7uUq&amdata=enc%3AAQAIAAAA8EabYjsHu99EpDp1DCBfKLFz8DYPboTADEkM8YvKPcuwqQb7Sa2o9emalzN9RQtQs%2FoNsAYossyzKDo%2BHcjfesLkLF9UYmAhHuwVt7L8g62U8zGjHk0KGErFVOk6ZfmOiLJ1sU2E7%2BabPuB6yoQ2qG7ouxq9mNk1heFllCrZMMc4zL1qrG2mpqkvYkPbJYR1WEapfyJbakUwPcirhkYzZaYgdJGKDpSL87Kmk24ZhngjEdeu%2F2mjcXmVNFSZXmG5dc1%2FlYGjscmwl6i2qboXkD4yOT5zE02oSCUdPcPraAP9QRp%2BzaDyS07ftAUEb1cbFw%3D%3D%7Ctkp%3ABk9SR6iJjIihYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/RJicNO' ),
    listing_name  ( 'OWON 4 1/2 digits XDM1041 Bench-type Digital Multimeter 55000 Counts True RMS' ),
    item_price    ( 'AU$174.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/276214962972?hash=item404fb1db1c%3Ag%3Aj54AAOSwLQBhsyHE&amdata=enc%3AAQAIAAAA0JR3C5UWjVVGU7rqLHYKOT408HGYWjqyLEKOye7TvlaJQEFsvcPDGdCADwNlusWWFUYO6K95xZ9ECAnkX4Gvevpb3fHkjAXzszqPxSqRDD0OINqi%2Fu1Lzr9JO7xz7NcUlf%2FCYAruIFreSwjiRNcvFikZvQtxPQ86hhXUlTMAzRCKEM8xcZovRzP0pVt856y7GFKtfhcx3Z6l8FmY5CftoEjmzOsjFPXcgGP3K3XlAWcM3cYq76FccWY43MCq1zk2N3uyVdmMofRfD%2FS2weTYndU%3D%7Ctkp%3ABk9SR6iJjIihYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/xSrGQq' ),
    listing_name  ( 'OWON 4 1/2 digits XDM1041 Bench-type Digital Multimeter 55000 Counts True RMS' ),
    item_price    ( 'AU$174.99' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-OWON-XDM1041-Bench-Multimeter.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006094754100.html?spm=a2g0o.productlist.main.5.3a7a191bLT3emv&algo_pvid=7bad1a9e-dd67-489d-b584-16149a027b32&aem_p4p_detail=202401140707268564825519475000006653383&algo_exp_id=7bad1a9e-dd67-489d-b584-16149a027b32-2&pdp_npi=4%40dis%21AUD%21363.55%21181.77%21%21%211723.00%21861.50%21%402101e58317052448464016731e077a%2112000035720511961%21sea%21AU%214385823938%21&curPageLogUid=6godFdJG8bnK&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=202401140707268564825519475000006653383_3' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DmDGwqd' ),
    listing_name  ( 'OWON XDM1041 XDM1241 Digital Multimeter 55000 Counts 3.5inch SCPI Supports Dual Row Display of True Valid Values of Data Records' ),
    item_options  ( 'Color: XDM1041' ),
    item_price    ( 'AU$181.77' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004341924689.html?spm=a2g0o.productlist.main.7.3a7a191bLT3emv&algo_pvid=7bad1a9e-dd67-489d-b584-16149a027b32&aem_p4p_detail=202401140707268564825519475000006653383&algo_exp_id=7bad1a9e-dd67-489d-b584-16149a027b32-3&pdp_npi=4%40dis%21AUD%21232.47%21139.48%21%21%21153.73%2192.24%21%402101e58317052448464016731e077a%2112000030387698012%21sea%21AU%214385823938%21&curPageLogUid=4ThGzUNrqx5q&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=202401140707268564825519475000006653383_4' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dnn0Ga5' ),
    listing_name  ( 'Owon XDM1041/XDM1241 Digital Multimeter 55000 Counts High Accuracy Desktop Multimeters AC/DC Tester True RMS USB Multimeter' ),
    item_options  ( 'Color: XDM1041' ),
    item_price    ( 'AU$139.48' ),
    item_shipping ( 'AU$4.60' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006090344951.html?spm=a2g0o.productlist.main.17.3a7a191bLT3emv&algo_pvid=7bad1a9e-dd67-489d-b584-16149a027b32&aem_p4p_detail=202401140707268564825519475000006653383&algo_exp_id=7bad1a9e-dd67-489d-b584-16149a027b32-8&pdp_npi=4%40dis%21AUD%21179.35%21179.35%21%21%21850.00%21850.00%21%402101e58317052448464016731e077a%2112000035688990948%21sea%21AU%214385823938%21&curPageLogUid=wfvD5rDHK9Kl&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=202401140707268564825519475000006653383_9' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DmVBJcd' ),
    listing_name  ( 'Oscilloscope XDM1041 Digital Multimeter 4 1/2 55000 CountsTrue RMS DC/AC Current Voltage USB Multimetro Tester Meter' ),
    item_options  ( 'Color: XDM1041' ),
    item_price    ( 'AU$179.35' ),
    item_shipping ( 'AU$52.78' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005002679178996.html?spm=a2g0o.order_detail.order_detail_item.3.5e1df19c5Zh747' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.51.764218021V85h7&orderId=8146545198123938' ),
    order_id        ( '8146545198123938' ),
    order_date      ( 'Feb 12, 2022' ),
    order_item_name ( '' ),
    order_price     ( 'AU$171.37' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$17.13' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sba8921efd2ae4354b0d75c36638b51a4k/ANENG-AN-999S-Desktop-Voice-Multimeter-Digital-19999-Counts-Professional-Bluetooth-Tester-True-RMS-AC-DC.jpg_640x640.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'ANENG' ),
    model_name        ( 'AN-999S' ),
    EquipmentFeature::BENCH_MULTIMETER,
    EquipmentFeature::VOLTMETER,
    EquipmentFeature::AMMETER,
    EquipmentFeature::OHMMETER,
    EquipmentFeature::CAPACITANCE_METER,
    EquipmentFeature::FREQUENCY_COUNTER,
    EquipmentFeature::CONTINUITY_TESTER,
    EquipmentFeature::DIODE_TESTER,
    EquipmentConnectivity::BANANA_PLUG,
    EquipmentConnectivity::BLUETOOTH,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'ANENG' ),
    model_name        ( 'AN-999S' ),
    equipment_type    ( 'Bench Multimeter' ),
    category          ( 'Multimeter' ),
    category          ( 'Bench Equipment' ),
    category          ( 'Meter' ),
    category          ( 'Bluetooth' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/ANENG_AN-999S' ),
  see_also      ( 'OWON XDM1041 Bench Multimeter' ),
  search_url    ( 'https://www.amazon.com/s?k=ANENG+AN-999S+Bench+Multimeter&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=ANENG+AN-999S+Bench+Multimeter&s=price-asc-rank' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=ANENG+AN-999S+Bench+Multimeter' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/314093354298?hash=item49216c3d3a%3Ag%3Asg0AAOSwLyVi6TEz&amdata=enc%3AAQAIAAAA8And%2FerrBRSJtbEuM%2F%2FUbkYLGOMckLJWCPVsgofCV6w%2BbqocRKouMOQWBkWzl0xowbZwg362vqRUnfHla%2B82Mcjk1%2BGSGFRxqXp7t7yALq5U6LHbUyOFBB7L9jaPFr9AWNWKOD0J7jZokKZGBDwGVUC9BJuFydHNn%2FXXBKvGxLdj%2FuHK8BPbri92GARthyjK9PHVVgYFSWTxQgrghArXiREVL4z2vVPBuLWhsftmwbBJyivls%2BeBDXPtiIkkg1gKTbhfECbhvtxGdSWsfGyzv8YWQIK4%2FaE2NRfOSY5X3A8MiyksOm8%2FEAgqm08gZmrceg%3D%3D%7Ctkp%3ABk9SR4SG44ihYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/IUudQl' ),
    listing_name  ( 'AN999S Digital 19999 Counts Multimeter Ohm Capacitance Voltage True RMS Meter' ),
    item_price    ( 'US$135.35' ),
    item_shipping ( 'US$5.99' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=ANENG+AN-999S+Bench+Multimeter' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/334863050770?hash=item4df764a812%3Ag%3A%7EnIAAOSwHL1kVv4X&amdata=enc%3AAQAIAAAA8Pd4lsuyB26tAnGfYFwe3gLE4Mfc%2BZKGxnCA5ca2OxzR18%2B4mWjs1Q4PmNw684tjmkwKhGV1UL%2FdSJweKNKx4nTZF7knGFXQeJSkokhX%2FzlIivt9e4NQFQWcI3ynR4gA6pJJRUeYs1E2TaRLVGPUHIE4gWIwyF91RCM6SlKrbNcHNbOZ8W0PX1e7Qq4LXFQ95iG1jnJ7egXCO8N292oIT5tNrI0mxv7NoLSlmZXZn4AknA52QotBBJno%2F%2FyUUsIw7wDsLwl%2FFsCCg88Cdu7HEZFPOGEpwq1w7NvhasfXgvWoCndoetcd3HN4tFKcOSFIRw%3D%3D%7Ctkp%3ABk9SR9zs7IihYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/khDvwk' ),
    listing_name  ( 'Bluetooth Tester 19999 Counts Bench Voice Multimeter Digital Smart Multimeter' ),
    item_options  ( 'Choose: AN999S battery' ),
    item_price    ( 'AU$180.52' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/374448032895?hash=item572ed78c7f%3Ag%3ATUIAAOSwmZRjul7s&amdata=enc%3AAQAIAAAA0Lf8GnghVXgcX380z59LvKCjSJNHFs5WmR%2FDnTWGTPKDIkWmZqvwMkEgQRZEZuXOqxbwtn18gt7PrcIPhX8ix7YKoAJe%2F7fwyDoacnv36OIShqFvrAUFV%2FfYCNHTRWtp1M9uFyAkarCvYTiEej49AqYUdKJ%2BDGFldZ0%2B7TKaLKEsFspgT33QlPTOkXUFvyETgmbEGmRs%2F4gZHXWOfzuTvQriHPfQ2sGnd13tk0TL4w8UIJjC6mEynGm%2FZ3XbFlb3w%2FuOtAkdRtq5pinLShyLG0c%3D%7Ctkp%3ABk9SR9zs7IihYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/feDfjx' ),
    listing_name  ( 'Bench Voice Multimeter Bluetooth Tester Digital Smart Multimeter 19999 Counts' ),
    item_options  ( 'Choose: AN999S battery' ),
    item_price    ( 'AU$161.98' ),
    item_shipping ( 'AU$1.53' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-ANENG-AN-999S-Bench-Multimeter.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/4000402598736.html?spm=a2g0o.productlist.main.21.494c656fjHeJhB&algo_pvid=bbc6e333-fb71-4d82-b2a4-487c9c263ef6&algo_exp_id=bbc6e333-fb71-4d82-b2a4-487c9c263ef6-10&pdp_npi=4%40dis%21AUD%21104.13%2179.14%21%21%21493.53%21375.08%21%402101f00117052458262231603e0098%2110000001657459665%21sea%21AU%214385823938%21&curPageLogUid=qG7yeHqWzYas&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DlKU2ut' ),
    listing_name  ( 'ANENG AN-999S Desktop Voice Multimeter Digital 19999 Counts Professional Bluetooth Tester True RMS AC/DC Voltmeter Current Tools' ),
    item_options  ( 'Color: AN999S 1' ),
    item_price    ( 'AU$100.34' ),
    item_shipping ( 'AU$32.81' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004233694276.html?spm=a2g0o.productlist.main.25.494c656fjHeJhB&algo_pvid=bbc6e333-fb71-4d82-b2a4-487c9c263ef6&algo_exp_id=bbc6e333-fb71-4d82-b2a4-487c9c263ef6-12&pdp_npi=4%40dis%21AUD%21129.13%2196.85%21%21%21612.00%21459.00%21%402101f00117052458262231603e0098%2112000028470946919%21sea%21AU%214385823938%21&curPageLogUid=8dfb6ZiubV6E&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DCpxRa1' ),
    listing_name  ( 'ANENG AN-999S Desktop Voice Multimeter Professional Digital Bluetooth 19999 Counts True RMS Auto Range DC/AC Meter' ),
    item_options  ( 'Color: AN999S 1' ),
    item_price    ( 'AU$96.85' ),
    item_shipping ( 'AU$32.81' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005644159490.html?spm=a2g0o.productlist.main.33.494c656fjHeJhB&algo_pvid=bbc6e333-fb71-4d82-b2a4-487c9c263ef6&algo_exp_id=bbc6e333-fb71-4d82-b2a4-487c9c263ef6-16&pdp_npi=4%40dis%21AUD%21195.06%21136.54%21%21%21128.99%2190.29%21%402101f00117052458262231603e0098%2112000033861764955%21sea%21AU%214385823938%21&curPageLogUid=KO8xXbvegMZ7&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DCz1AGt' ),
    listing_name  ( 'ANENG AN999S Desktop Voice Multimeter Bluetooth Tester 19999 Counts DC/AC Meter True RMS Autorange Transistor Tool Meter' ),
    item_options  ( 'Color: AN999S battery' ),
    item_price    ( 'AU$134.98' ),
    item_shipping ( 'AU$2.78' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/4000402598736.html?spm=a2g0o.order_detail.order_detail_item.3.28daf19cH89q3d' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.61.764218021V85h7&orderId=8146309585673938' ),
    order_id        ( '8146309585673938' ),
    order_date      ( 'Feb 12, 2022' ),
    order_item_name ( '' ),
    order_options   ( 'Color: AN999S 4' ),
    order_price     ( 'AU$115.27' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$30.32' ),
    order_discount  ( 'AU$2.84' ),
    order_gst       ( 'AU$14.28' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S77acdb10bfe847ce8c6b4114002304cc6/48MP-4K-1080P-HDMI-USB-Industrial-Video-Microscope-Camera-1X-150X-Zoom-C-Mount-Lens-Remote.jpg_640x640.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yizhan' ),
    EquipmentFeature::DIGITAL_MICROSCOPE,
    EquipmentAttribute::BENCH_EQUIPMENT,
    EquipmentConnectivity::HDMI,
    EquipmentConnectivity::USB,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Yizhan' ),
    equipment_type    ( 'Microscope' ),
    category          ( 'Microscope' ),
    category          ( 'Bench Equipment' ),
    category          ( 'USB' ),
    category          ( 'HDMI' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yizhan_Microscope' ),
  see_also      ( 'TOMLOV DM602 Pro Digital Microscope' ),
  search_url    ( 'https://www.amazon.com/s?k=Yizhan+Microscope&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=Yizhan+Microscope&s=price-asc-rank' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Yizhan+Microscope' ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Yizhan+Microscope' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Yizhan-Microscope.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005638611306.html?aff_fcid=93fe4df2c9894d48998a0bf97cd393b9-1705246233530-03088-_DmFY90F&tt=CPS_NORMAL&aff_fsk=_DmFY90F&aff_platform=shareComponent-detail&sk=_DmFY90F&aff_trace_key=93fe4df2c9894d48998a0bf97cd393b9-1705246233530-03088-_DmFY90F&terminal_id=f020c219a3b44a7b92d636c6cc46e9db&afSmartRedirect=y' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DlZAF1X' ),
    listing_name  ( '48MP 4K 1080P HDMI USB Industrial Video Microscope Camera 1X-150X Zoom C Mount Lens Remote Control For Digital Image Acquisition' ),
    item_options  ( 'Color: 150X-48MP Full Sets' ),
    item_price    ( 'AU$158.19' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005638611306.html?spm=a2g0o.order_detail.order_detail_item.3.4d60f19cv11ny9' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.71.764218021V85h7&orderId=8174301829713938' ),
    order_id        ( '8174301829713938' ),
    order_date      ( 'Aug 25, 2023' ),
    order_item_name ( '' ),
    order_options   ( 'Color: 150X-48MP Full Sets' ),
    order_price     ( 'AU$153.16' ),
    order_quantity  ( 1 ),
    order_discount  ( 'AU$27.00' ),
    order_gst       ( 'AU$13.40' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/H4dce7d3ad1a5420ab45667b20f8f2f05K/EBD-A20H-Electronic-Load-Battery-Capacity-Power-Supply-Charging-Head-Tester-Discharging-Equipment-Discharge-Meter-Instrument.jpg_.webp' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://media.digikey.com/pdf/Data%20Sheets/Seeed%20Technology/106990329_Web.pdf' ),
      link_text       ( 'ZKETECH EBD-A20H DC Electronic Load/Battery Capacity & Discharge Tester/Power Supply Tester 30V 20A 200W (PDF)' ),
    ),
    manufacturer_name ( 'ZKETECH' ),
    model_name        ( 'EBD-A20H' ),
    EquipmentFeature::ELECTRONIC_LOAD,
    EquipmentFeature::PROGRAMMABLE_LOAD,
    EquipmentAttribute::BENCH_EQUIPMENT,
    EquipmentConnectivity::BANANA_PLUG,
    EquipmentConnectivity::USB,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'ZKETECH' ),
    model_name        ( 'EBD-A20H' ),
    equipment_type    ( 'Electronic Load' ),
    category          ( 'Electronic Load' ),
    category          ( 'Programmable Load' ),
    category          ( 'Bench Equipment' ),
    category          ( 'USB' ),
    manufacturer_link (
      link_href       ( 'https://media.digikey.com/pdf/Data%20Sheets/Seeed%20Technology/106990329_Web.pdf' ),
      link_text       ( 'ZKETECH EBD-A20H DC Electronic Load/Battery Capacity & Discharge Tester/Power Supply Tester 30V 20A 200W (PDF)' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/EBD-A20H' ),
  search_url    ( 'https://www.amazon.com/s?k=ZKETECH+EBD-A20H+Programmable+Load&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=ZKETECH+EBD-A20H+Programmable+Load&s=price-asc-rank' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=ZKETECH+EBD-A20H+Programmable+Load' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/355317648044?hash=item52ba950aac%3Ag%3A678AAOSwlPlkbw%7Er&amdata=enc%3AAQAIAAAA0OglqMkfRxCF29FjdlFamBlUTGZy%2B7yyptCryUdlhik4kKobanPVAYGNNRkVPx%2Bd6lI%2BpwECZSorTEdcnCSjiqtTlCTwQJAw%2BoqvOj05vE7%2FhTI5sUBgI5yRDBgd4PK770s0jkWil%2FWQflb59P9yKv7YfkbM9rlLpoCDuThb30ix4yqsrZc%2BuUwx9%2FM53El%2BKbPwe2begk25Z%2BZ316u%2B757toiyTvnfFDB94805GXMggElOA0KQ%2FzN%2BomVd18OR2NtA6aLMjXcKbLuq8rZ8yORY%3D%7Ctkp%3ABk9SR_iC3omhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/NWanfH' ),
    listing_name  ( 'White Battery Capacity Tester Electronic Load Battery Discharge Tester EBD-A20H' ),
    item_price    ( 'US$96.91' ),
    item_shipping ( 'US$18.27' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/165913240638?hash=item26a133243e%3Ag%3AyhwAAOSwwiFfm9HC&amdata=enc%3AAQAIAAAA8CvAraVrUFz1TXd%2B7ScbpGh9aj4o5tD94fkPK90B3dBMhy%2FBc3SXk1QKmgLvXCtpFRoNOVie2anoWTwK6YLoYrBAqdJVnkaV5Lw%2BNsLJqyHxFtst0BiL7fVcawgv2umpBVh9wlkyQ5PU9sjxMMCyfbMOBVTHlVBt91CK5w1l8IXxvEVt061pgOfxgGBpd0lNMrpHteYlpwUjkz2%2FdZU%2F%2F627gDtp9Grv7EBhnbeFx6bWu52oNBuEB7l82gKz6GCuFJ05s1hEvWEx2NrXlcdm82EVmzY4RiIFgEHiI45VEc6mf%2F2I2rfF%2F1QP3DNmh6bMrw%3D%3D%7Ctkp%3ABk9SR_iC3omhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/sxH0J2' ),
    listing_name  ( 'Electronic Load Battery Capacity Tester Discharge Meter 20A DC12V EBD-A20H' ),
    item_price    ( 'US$85.49' ),
    item_shipping ( 'US$35.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/335098490373?hash=item4e056d2e05%3Ag%3AVVQAAOSwti9kbchr&amdata=enc%3AAQAIAAAA8KS1%2BGuOgErILSQHsTy%2FXbRB3rLMSVy8pm4E8OuWUrimoEv66NGBYJZvC9Yc6pm7rsfbc%2FuYa2%2BNUN9zKLJevkz4L0%2F9JSFHWCIpMnN70tyfuRbfTwgaotwvUxh22Bdg1GQVo9g%2Bae54UL2Z13zVq5foHMdAqNvXnCzEKF5r5f9QzKrKmk35QFgQFBZmtn2N5H2CycW6uPN4NcGgFmaLxlsDzp0MRorwwev1Icudg2GiJKjMhUP85cwJvv%2Bp%2FfdBHrSyg2Xj7krLIFFpHrmpNaqxswsag%2FhC%2FljsWK8cgDOwjmodTdrwS%2Fi8Nsb7MSdRKQ%3D%3D%7Ctkp%3ABk9SR_iC3omhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/d9ZINp' ),
    listing_name  ( 'EBD-A20H Battery Capacity Tester Electronic Load Battery Discharge Tester New' ),
    item_price    ( 'US$102.00' ),
    item_shipping ( 'US$21.82' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=ZKETECH+EBD-A20H+Programmable+Load' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/314744385652?hash=item49483a3074%3Ag%3AfP4AAOSw7Wlkx48T&amdata=enc%3AAQAIAAAA8AkygLHyVtV7%2B0aC3wZ2UoCWHIOVXdXCfseSRsMgWUEuV9J6kBh1XnNkLKdNAJC6ZuKlLmvEBwBQP1yk2s6xPhLhCecEmxTJIQddqNsw9t811nMamWJFC%2FSaySDkDAfnTMkbgHaAahWEX6iWa7GZM3KWzuhUVUn31tOw7c3D9YAxVkpcXsZs1laUYuUa8Qa5NXJfbwxdyBGLMTlOuSej6a8SfJGSUFFQFmrSlXHyWvVhooHNTx%2F4JvbTtON22yQy0qcaAF88MWVx%2BzgzXLQncvgFPYjirZh2AvXTNlWvwsJjqmHOmGhR%2BkQVTwSRTUErpQ%3D%3D%7Ctkp%3ABk9SR-aN9ImhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/pdmXVa' ),
    listing_name  ( 'EBD-A20H Battery Capacity Tester Electronic Load Power Tester 20A 200W 0.1-20A' ),
    item_price    ( 'AU$140.65' ),
    item_shipping ( 'AU$5.50' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/284939911227?hash=item4257be003b%3Ag%3A7I0AAOSwobBkx5AR&amdata=enc%3AAQAIAAAA8OlCN%2B0QQQBbOVcCSsT2HxfDPs6pbisRtcEa5UCliLWUwwVX%2B0FqzcORzX8PFYk7lLVcCITes4pthXs8eCOmD2otfUmB5ta1ori6luWWRWsKwgTpTqQrE4E4A7hB7rg%2BDRA3uQ3RY7OBJND1TOEEMePHD4%2BQiFJ%2FsMFe7L7eZZslCXWnTNC6LADntfysgxiWZ3236VjDYyzLgXLlr4o9STwo%2F86z6fweI%2FN6o0uTYPD9rgOhSf7KHVPCgJr3p%2BNjNg4YC6XWpRzuQUYNQeg5vIeTeax98%2BpLiXKnZ3ahJAUkQEgPOIj3iaSrOFge4rPeCA%3D%3D%7Ctkp%3ABk9SR-aN9ImhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/1jrJXu' ),
    listing_name  ( 'Electronic Load Power Battery Capacity Tester Resistance Discharge EBD-A20H' ),
    item_price    ( 'AU$156.74' ),
    item_shipping ( 'AU$5.50' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/165823175263?hash=item269bd4da5f%3Ag%3AhdAAAOSwd6JjkwBR&amdata=enc%3AAQAIAAAA8DzGvNGXsC%2BT%2FYg1kHw0D1Q9683AojY4MYb%2B8OzCyVl8q9vCut2XZF20RIKD8U%2BZJ7zamQCOAzWNmbUtOfpcGC0ENUnL9eKGmUzkEkMiwPh3rbXEt0jo8wr4v8xBi5BqbavR8iHM7Ma2rQHkWpyvIRPXGyNC%2FYsqyqC2dlfeT%2FpFRjaEsjOnen8TDf3f3v98UHP1gsDr96tg1C7kgFM1RaHsF8q6LBdEKC2Ch83zTGnKehs1kz3RxI7N%2BRRAMuyJ%2FvUYfp3iqBuTrTM6jECDt%2BACoKihtPklTaMozCLrXZ2yUC1FWYUJ80nmazvPV31IwQ%3D%3D%7Ctkp%3ABk9SR-aN9ImhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/yTWnTR' ),
    listing_name  ( 'EBD-A20H Battery Capacity Tester Load Power Tester Discharge Meter 0.1-20A 200W' ),
    item_price    ( 'AU$165.84' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-EBDA20H.html?spm=a2g0o.productlist.search.0' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/4000467334668.html?aff_fcid=e07b5544e3d3415d8f2659b6fb862b52-1705246838491-02666-_DCFF58L&tt=CPS_NORMAL&aff_fsk=_DCFF58L&aff_platform=shareComponent-detail&sk=_DCFF58L&aff_trace_key=e07b5544e3d3415d8f2659b6fb862b52-1705246838491-02666-_DCFF58L&terminal_id=f020c219a3b44a7b92d636c6cc46e9db&afSmartRedirect=y' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Ddwo7Qp' ),
    listing_name  ( 'EBD-A20H Electronic Load Battery Capacity Power Supply Charging Head Tester Discharging Equipment Discharge Meter Instrument' ),
    item_price    ( 'AU$85.09' ),
    item_shipping ( 'AU$44.73' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005472111644.html?spm=a2g0o.detail.0.0.21a671a90TjRDB&gps-id=pcDetailTopMoreOtherSeller&scm=1007.40000.327270.0&scm_id=1007.40000.327270.0&scm-url=1007.40000.327270.0&pvid=5f97646c-0ff9-4bb8-8d5d-68569b3d494d&_t=gps-id:pcDetailTopMoreOtherSeller,scm-url:1007.40000.327270.0,pvid:5f97646c-0ff9-4bb8-8d5d-68569b3d494d,tpp_buckets:668%232846%238107%231934&pdp_npi=4%40dis%21AUD%21103.86%2185.17%21%21%2168.68%2156.32%21%402101c5a417052468401717114e91e6%2112000033216765475%21rec%21AU%214385823938%21&utparam-url=scene%3ApcDetailTopMoreOtherSeller%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DFOkoql' ),
    listing_name  ( 'EBD-A20H Electronic Load Battery Capacity Power Supply Charging Head Tester Discharging Equipment Discharge Meter Instrument' ),
    item_price    ( 'AU$85.17' ),
    item_shipping ( 'AU$67.50' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006121775315.html?spm=a2g0o.detail.0.0.21a671a90TjRDB&gps-id=pcDetailTopMoreOtherSeller&scm=1007.40000.327270.0&scm_id=1007.40000.327270.0&scm-url=1007.40000.327270.0&pvid=5f97646c-0ff9-4bb8-8d5d-68569b3d494d&_t=gps-id:pcDetailTopMoreOtherSeller,scm-url:1007.40000.327270.0,pvid:5f97646c-0ff9-4bb8-8d5d-68569b3d494d,tpp_buckets:668%232846%238107%231934&pdp_npi=4%40dis%21AUD%2178.89%2178.89%21%21%2152.17%2152.17%21%402101c5a417052468401717114e91e6%2112000035850115786%21rec%21AU%214385823938%21&utparam-url=scene%3ApcDetailTopMoreOtherSeller%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DDu1QDT' ),
    listing_name  ( 'Electronic Load Battery Capacity Tester Power Supply Test Model Power Battery Discharge Testing Meter Instrument 200W EBD-A20H' ),
    item_price    ( 'AU$78.89' ),
    item_shipping ( 'AU$97.02' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005002609342977.html?spm=a2g0o.order_detail.order_detail_item.3.348df19c1ZID8a' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.76.764218021V85h7&orderId=8171765395633938' ),
    order_id        ( '8171765395633938' ),
    order_date      ( 'Jul 22, 2023' ),
    order_item_name ( '' ),
    order_price     ( 'AU$78.84' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$39.05' ),
    order_gst       ( 'AU$11.79' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/51+Gunc3-cS._AC_SL1200_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.noyafa.com/products/nf-521-infrared-thermometer' ),
      link_text       ( 'NOYAFA NF-521 Contactless Thermal Imaging Device Industry & Science Infrared Thermometer' ),
    ),
    manufacturer_link (
      link_href       ( 'https://www.noyafa.com/products/thermal-imaging-device-nf-521.html' ),
      link_text       ( 'NOYAFA NF-521 Cheap Thermal Imaging Camera For House Inspection ' ),
    ),
    manufacturer_link (
      link_href       ( 'https://store.noyafa.com/products/noyafa-nf-521-infrared-thermometer' ),
      link_text       ( 'Buy Noyafa NF-521 Infrared Visual Thermometer' ),
    ),
    manufacturer_name ( 'NOYAFA' ),
    model_name        ( 'NF-521' ),
    EquipmentFeature::THERMAL_IMAGER,
    EquipmentAttribute::HAND_TOOL,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'NOYAFA' ),
    model_name        ( 'NF-521' ),
    equipment_type    ( 'Thermal Imager' ),
    category          ( 'Thermal Imager' ),
    category          ( 'Camera' ),
    category          ( 'Hand Tool' ),
    manufacturer_link (
      link_href       ( 'https://www.noyafa.com/products/nf-521-infrared-thermometer' ),
      link_text       ( 'NOYAFA NF-521 Contactless Thermal Imaging Device Industry & Science Infrared Thermometer' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/NOYAFA_NF-521' ),
  see_also      ( 'UNI-T UTi260B Thermal Imager' ),
  search_url    ( 'https://www.amazon.com/s?k=NOYAFA+NF-521+Thermal+Imager&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/NOYAFA-Industrial-Thermal-Imaging-Resolution/dp/B08YR7CHNB/ref=sr_1_9?dib=eyJ2IjoiMSJ9.DFOiBw5e2ExfFhrzZ4-OxIx60I-2vUOUSnKHHltRc1t9uYs2MuSaEMe0jBnFiaIzFK0Fn50APAM3Q0bcz9wnN2zAO0LZ6_FpajIi-KdqovelErOnA6WZX2PHLAiIMujA6NYjo8IfLIBs6_gk-WGkIQ.lABFUDyvEghDmk9IemFC1wwCaVBhGg7vOlTU6ai77Fg&dib_tag=se&keywords=NOYAFA+NF-521+Thermal+Imager&qid=1705247114&sr=8-9' ),
    affiliate_url ( 'https://amzn.to/3vBCX7e' ),
    listing_name  ( 'NOYAFA Industrial Thermal Imaging Device NF-521, 24 * 24 Pixels Resolution 16 GB Memory Card Thermal Imaging Camera with 2.4 Inch LCD Display' ),
    item_options  ( 'Style: NF-521' ),
    item_price    ( 'US$149.99' ),
    item_shipping ( 'US$19.32' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=NOYAFA+NF-521+Thermal+Imager&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Portable-Infrared-Detector-Temperature-GTRH/dp/B0CQ85V366/ref=sr_1_3?dib=eyJ2IjoiMSJ9.vPhq4Pxk9221xR6Y51tx9h8iCWA1IH-dokK-QT3KzxCK-sE05Axu9pkntF1I4zb3_vAN1MT_pidpDagXKxCAh2gLF4AcCAaPKzB8qCUGzI-RvMniCI_BdCBCSIbwuhr27oAqOp3mPScCZE91nQpSTQ.s1DwM-ek7urlfimfNb6zh99Z7YGdFJXPdWIZuKXX2dw&dib_tag=se&keywords=NOYAFA+NF-521+Thermal+Imager&qid=1705247220&sr=8-3' ),
    affiliate_url ( 'https://amzn.to/47EGoqW' ),
    listing_name  ( 'NF-521 Thermal Imager Portable Infrared Camera Digital Display Heating Detector Handheld Temperature Imaging Imager GTRH' ),
    item_price    ( 'AU$221.64' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Maiju-Portable-Infrared-Detector-Temperature/dp/B0CMD9THMG/ref=sr_1_5?dib=eyJ2IjoiMSJ9.vPhq4Pxk9221xR6Y51tx9h8iCWA1IH-dokK-QT3KzxCK-sE05Axu9pkntF1I4zb3_vAN1MT_pidpDagXKxCAh2gLF4AcCAaPKzB8qCUGzI-RvMniCI_BdCBCSIbwuhr27oAqOp3mPScCZE91nQpSTQ.s1DwM-ek7urlfimfNb6zh99Z7YGdFJXPdWIZuKXX2dw&dib_tag=se&keywords=NOYAFA+NF-521+Thermal+Imager&qid=1705247220&sr=8-5' ),
    affiliate_url ( 'https://amzn.to/3Hon1rm' ),
    listing_name  ( 'Maiju NF-521 Thermal Imager Portable Infrared Camera Digital Display Heating Detector Handheld Temperature Imaging Imager' ),
    item_price    ( 'AU$307.92' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=NOYAFA+NF-521+Thermal+Imager' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/404050867067?hash=item5e134ef37b%3Ag%3AT5MAAOSwWlNjmE7s&amdata=enc%3AAQAIAAAA0GF2ax578ENafB7fNmYXBwBlaEpX%2BFjdGn52NGaKMcj8SatJUXVM0oadlbhlNrmfmGVy%2BTbF6OA4DP5ff%2B5xvoFAHtMDSjMn3QJlGnqC4gyFm8IROPHDOO9QclIpPfKCqdO5sQ82SURsuph%2FrNGFoXIKTj4pIRxM%2B1l2F5CPkTNDk2rsfzmy1VIPIW8PsMjdhrqvmVpsf3Qa1ZBhMJ61hdLnv%2BD2XZZ5M%2FGBmyofuHelh82Qew6GDOG8Ezu0nOnFw0ItVo7FSo447lSBWCVOx5o%3D%7Ctkp%3ABk9SR7CszoqhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/odVhvM' ),
    listing_name  ( 'NF-521 Infrared Thermal Imager Thermal Camera 8G IR Resolution 320*240 LCD' ),
    item_price    ( 'US$135.08' ),
    item_shipping ( 'US$9.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/196064596170?hash=item2da65c50ca%3Ag%3AOCEAAOSwxtFkI7Rl&amdata=enc%3AAQAIAAAA8PVKDabpmbgRpsMJZMzKtZJw2NlNSNmxf%2FhibZfh1CnyhIzWO1hvkM08hJqzS4zim%2BI0pSeNMYCjSVf8zl%2FYuMM3nDLUsurD%2Fb7%2F%2F%2F2BxeWXZUaJEFVqHKva3ldmEirX7xyNrsUofAtZMr%2BjP9q%2FbFYuUyDN%2Fev0R0i%2FcaZDgJU7j2ByWix9EAJx4s31H9JKpUtRR%2FWtSnUm%2Fx99XDO1dhjfrUgVadtsUUq5Z1wiZrbMPI%2BDDnu721vwzPrW8vf88aN5HFFJqjxmP9enR0WNROBd2qwAWyVLcwkQAt%2F3gGvdqOO8boFNzD7UAYnVrEgdDQ%3D%3D%7Ctkp%3ABk9SR7CszoqhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/bn6rnG' ),
    listing_name  ( 'NF-521 8GB Handheld Portable Thermal Imager Infrared Camera Digital Heating US' ),
    item_price    ( 'US$147.12' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/364585613210?hash=item54e2fef79a%3Ag%3AhnoAAOSwRRZjoYRm&amdata=enc%3AAQAIAAAA8P8hoClRXIpkqyXDt15CDx6BLpl9JSJjQGZvSVh0z0UOMA9dXzg%2FWYrTmf%2FTtTbtPv1ctXX5dukBbws14HIXmRZrLyFH4vUno8t5Oxt08uA6lxbTYos8MVu8mWSR%2BLpUnRocf7gQNcg69mh3JzK4cXPlqG%2BTPZTeAHYXM3acskdKD0aeAErehiurkEH26k%2BMKgUbpdkiMN7P5CnvJGjLL0ZeVOxDbav3%2FK1iMjkqQf9k8iPByMjL2SovReKnrfMQvceeTqnKzrOgl8Ti1FbrNgerZ6f9otWqiy%2BoHDjaaH%2BaKGoYyVR4xLtvnpui9Bk%2FZA%3D%3D%7Ctkp%3ABk9SR7CszoqhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/8qRiV6' ),
    listing_name  ( '8G NF-521 Infrared Thermal Imager thermal imaging device IR Resolution 240x320' ),
    item_price    ( 'US$148.79' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=NOYAFA+NF-521+Thermal+Imager' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/155591956465?epid=14044026150&hash=item243a00d7f1%3Ag%3AUMYAAOSw1rpf4G%7E%7E&amdata=enc%3AAQAIAAAA0IHu7U2IegQqmxw2OJHlOhkXXHJQ3fQa5LWcgz60Ot6Dajb7DFqfwOK9mCmoAeiyZcXcKtkqv8dqPiCT9sy2GhjmeVjSULszkWFGrHYHoSZXrQjLkGWgfwRpsBhJ7cPwoCjbX235FWX7cNHA3IPq183jLjlX808cHpOd8%2BiWKQU1geIQSQaQY0FrsV3Dml6vayWrNthkFwQwCh7EFFT87oLYghkvPZX0NLmx5GfqCTEE3PIF8NjBCwZLS5Kt%2BPPDOFB52nW68u7uKdG%2BUtruTcE%3D%7Ctkp%3ABk9SR4rA4oqhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/cqm6AH' ),
    listing_name  ( 'NF-521 Infrareds Thermal Imager Imaging Camera Temperature Image 200000 Pixels' ),
    item_price    ( 'AU$228.79' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/225590517341?epid=14044026150&hash=item34863e1e5d%3Ag%3A7r0AAOSwtpFgtLTG&amdata=enc%3AAQAIAAAA8Jx9ZP8TCch7pXzpYRkTXtiEBAbC3bGUjLhDvwcbnr15ubbPGI5g2yWFJHZGRnqYxis1OW3MbMEfwsdAv1F7%2BDSdd4xgF27zKWfbWYzS08gziaiS9KdYKJoT4INKhkL%2B0ZKENWlArFnAv11Ed6jp6R3Jktvnn8u1CV3hvXt9fJc0lHkabAopLA09TlUYFxw5PZFb3vPXFrV7ijiZOmQPAlYrvUk3A2iX0JuCgoKaMlhKi9F2Eya5mSLZv5NyrP55kejrwYZiMPQTK8f9rz9Fdrjb6dMJzyHeTDNpJT6qNYoGigqW8zqFqmRilpPpZHuG2A%3D%3D%7Ctkp%3ABk9SR4rA4oqhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/iCvqVf' ),
    listing_name  ( 'NF-521 Noyafa Infrared-Thermal-Imager Image Camera 200000 Pixels 8GB TF Cards' ),
    item_price    ( 'AU$249.18' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/144452908109?epid=14044026150&hash=item21a210744d%3Ag%3AFdYAAOSw7P9f4G%7E8&amdata=enc%3AAQAIAAAA0PJY4c8Bz3QTIdahxumEKdo8MNzj6Sv15imh3zu95ia24N%2BG08TYZ4dcnQMytP5LL3A4xau31L2nLDO62ebizlHBWckjY0plZttLtVKL3aYxA2L4fxtsHTEfYg6%2B7S%2ByNLgWsquJopCgJJooWcOd%2BqwKWqk8d2Cdyjd3rJQVOLjmdERrKlbxd7bnA%2BkCQQmyhaXFZz4yx46vB7tmul3Ov%2FF8ctDNXJX7%2F7WhnGS%2BnBvJkrm0odFlif8Fs%2BHSzuzOL8zhv34TmWMLSXqBF8xbn%2FE%3D%7Ctkp%3ABk9SR4zA4oqhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/IPHJEp' ),
    listing_name  ( 'NF-521 Infrareds Thermal Imager Imaging Camera Temperature Imaging 200000 Pixels' ),
    item_price    ( 'AU$249.18' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-NOYAFA-NF-521-Thermal-Imager.html' ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/175850612021' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=14-10409-21152#/' ),
    order_id        ( '14-10409-21152' ),
    order_date      ( '14 Aug 2023' ),
    order_item_name ( 'Pro Thermal Imaging Camera Imager Infrared Imaging Sensor Image IR Night Vision' ),
    order_price     ( 'AU$140.01' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$9.99' ),
    order_discount  ( 'AU$28.00' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/51yAJ4rslUL._AC_SL1000_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://hakkousa.com/chp-3c-sa-very-fine-point-tweezers.html' ),
      link_text       ( 'CHP 3C-SA Very Fine Point Tweezers' ),
    ),
    manufacturer_name ( 'Hakko CHP' ),
    model_name        ( '3C-SA' ),
    EquipmentFeature::PRECISION_TWEEZERS,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Hakko CHP' ),
    model_name        ( '3C-SA' ),
    equipment_type    ( 'Precision Tweezers' ),
    category          ( 'Tweezers' ),
    category          ( 'Hand Tool' ),
    manufacturer_link (
      link_href       ( 'https://hakkousa.com/chp-3c-sa-very-fine-point-tweezers.html' ),
      link_text       ( 'CHP 3C-SA Very Fine Point Tweezers' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Hakko_CHP_3C-SA_Tweezers' ),
  warning       ( 'Some of these are single, others are 3 packs or 5 packs; I recommend at least two, one for each hand' ),
  search_url    ( 'https://www.amazon.com/s?k=Hakko+CHP+3C-SA+Precision+Tweezers&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Hakko-3C-SA-Non-Magnetic-Microelectronics-Applications/dp/B00FZPESTY/ref=sr_1_1?dib=eyJ2IjoiMSJ9.In5Ftj_Gaa0FeGN3iqaGFCLaAhrg2lfQqyUVUbja099RbVsPcF1wX9FwsoFogUEtoteStl6htG_TOV02eDO9w97CBbdiMpcFoU60jQLHx0cdMZohiAq4uUzzVvcMQA5RSWdI8CNJqzKUuwqEKHhX9A.6aK8K-8QFcgfInODXahONR5G2xybiu7xFznn8NVOl30&dib_tag=se&keywords=Hakko+CHP+3C-SA+Precision+Tweezers&qid=1705247914&sr=8-1' ),
    affiliate_url ( 'https://amzn.to/3Ui2axZ' ),
    listing_name  ( 'Hakko CHP 3C-SA Stainless Steel Non-Magnetic Precision Tweezers with Very Fine Point Tips for Microelectronics Applications, 4-1/4" Length' ),
    item_options  ( 'Pattern Name: Tweezers' ),
    item_price    ( 'US$6.45' ),
    item_shipping ( 'US$17.28' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/dp/B08S9L1LT6?&linkCode=sl1&tag=johnelliotv-20&linkId=6108cfea34a895846f6abf005ce6a307&language=en_US&ref_=as_li_ss_tl' ),
    affiliate_url ( 'https://amzn.to/4aZHXmr' ),
    listing_name  ( 'Hakko CHP 3C-SA Stainless Steel Non-Magnetic Precision Tweezers with Very Fine Point Tips for Microelectronics Applications, 4-1/4" Length (5 Pack)' ),
    item_price    ( 'US$47.28' ),
    item_shipping ( 'US$17.46' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Hakko+CHP+3C-SA+Precision+Tweezers&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Hakko-Stainless-Non-Magnetic-Microelectronics-Applications/dp/B08S9WT9P3/ref=sr_1_16?dib=eyJ2IjoiMSJ9.TWgCctH-OTLG5bHMwF5h4S9DYc_yc2fBHMmz9Uot54yYVTUZZRtRV6seL89_ASPhwoxi4_DQ7suTN579SDRW-5PjcrOakwzt5y0tS6nk7B9cn9WEZElBX_BJE8j7rn0VrGKs2CLWkexaOudSVfBj-Q.h5BVdDU9fP1XcrwH7Xs0fBFZ-fQ_vVE4hxFDVHDUUsc&dib_tag=se&keywords=Hakko+CHP+3C-SA+Precision+Tweezers&qid=1705248110&sr=8-16' ),
    affiliate_url ( 'https://amzn.to/3O1Umwg' ),
    listing_name  ( 'Hakko CHP 3C-SA Stainless Steel Non-Magnetic Precision Tweezers with Very Fine Point Tips for Microelectronics Applications, 4-1/4" Length (3 Pack)' ),
    item_price    ( 'AU$58.55' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Hakko-Stainless-Non-Magnetic-Microelectronics-Applications/dp/B08S9L1LT6/ref=sr_1_24?dib=eyJ2IjoiMSJ9.TWgCctH-OTLG5bHMwF5h4S9DYc_yc2fBHMmz9Uot54yYVTUZZRtRV6seL89_ASPhwoxi4_DQ7suTN579SDRW-5PjcrOakwzt5y0tS6nk7B9cn9WEZElBX_BJE8j7rn0VrGKs2CLWkexaOudSVfBj-Q.h5BVdDU9fP1XcrwH7Xs0fBFZ-fQ_vVE4hxFDVHDUUsc&dib_tag=se&keywords=Hakko+CHP+3C-SA+Precision+Tweezers&qid=1705248110&sr=8-24' ),
    affiliate_url ( 'https://amzn.to/3HkR1EC' ),
    listing_name  ( 'Hakko CHP 3C-SA Stainless Steel Non-Magnetic Precision Tweezers with Very Fine Point Tips for Microelectronics Applications, 4-1/4" Length (5 Pack)' ),
    item_price    ( 'AU$90.81' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Hakko+CHP+3C-SA+Precision+Tweezers' ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Hakko+CHP+3C-SA+Precision+Tweezers' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Hakko-CHP-3C-SA-Precision-Tweezers.html' ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B08S9L1LT6/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-2973180-3935866' ),
    order_id        ( '249-2973180-3935866' ),
    order_date      ( '23 August 2023' ),
    order_item_name ( 'Hakko CHP 3C-SA Stainless Steel Non-Magnetic Precision Tweezers with Very Fine Point Tips for Microelectronics Applications, 4-1/4" Length (5 Pack)' ),
    order_price     ( 'AU$107.87' ),
    order_quantity  ( 1 ),
    order_gst_paid  ( 'AU$9.81' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71diYxrqVzL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.bosch-diy.com/au/en/p/ixo-6-06039c7150' ),
      link_text       ( 'Bosch IXO VI Electric Screwdriver' ),
    ),
    manufacturer_name ( 'Bosch' ),
    model_name        ( 'IXO VI' ),
    EquipmentFeature::ELECTRIC_SCREWDRIVER,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH1,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH2,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH3,
    EquipmentFeature::POZIDRIV_SCREWDRIVER_PZ1,
    EquipmentFeature::POZIDRIV_SCREWDRIVER_PZ2,
    EquipmentFeature::POZIDRIV_SCREWDRIVER_PZ3,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL4,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL6,
    EquipmentFeature::TORX_SCREWDRIVER_T20,
    EquipmentFeature::TORX_SCREWDRIVER_T25,
    EquipmentAttribute::CORDLESS,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Bosch' ),
    model_name        ( 'IXO VI' ),
    equipment_type    ( 'Electric Screwdriver' ),
    category          ( 'Screwdriver' ),
    category          ( 'Hand Tool' ),
    category          ( 'Cordless' ),
    manufacturer_link (
      link_href       ( 'https://www.bosch-diy.com/au/en/p/ixo-6-06039c7150' ),
      link_text       ( 'Bosch IXO VI Electric Screwdriver' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Bosch_IXO' ),
  warning       ( 'I got the 6th generation but the 7th generation is out now, I have linked to both' ),
  see_also      ( 'Bosch IXO Angle Screw Adapter' ),
  search_url    ( 'https://www.amazon.com/s?k=Bosch+IXO+Electric+Screwdriver&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Screwdriver-Professional-Rechargeble-Lightweight-Convenient/dp/B07X4J9JHC/ref=sr_1_2?dib=eyJ2IjoiMSJ9.EgT-A3za1XW8F0VwZR59SbAWeuju4V5rXY31cjH827CEJmvN7RV_U0qZlJJGIm7BKs52rybkvkVsDZLhxPMbWAKq0TW4WLFIA3DIhDNVaV4.evRn7DF-5oTJ_rg1cElUlpwERZzzmIMQh2jb38FcEG4&dib_tag=se&keywords=Bosch+IXO+Electric+Screwdriver&qid=1705250362&sr=8-2' ),
    affiliate_url ( 'https://amzn.to/3O54HYd' ),
    listing_name  ( 'BOSCH IXO VI Screwdriver Professional | Cordless Electric Color 3.6V USB Rechargeble Lightweight Small Convenient Home Deco Li-ion Battery (Green)' ),
    item_price    ( 'US$58.90' ),
    item_shipping ( 'US$20.90' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Bosch-Screwdriver-Generation-IXO-Collection-Attachments/dp/B0BCH64SVG/ref=sr_1_6?dib=eyJ2IjoiMSJ9.EgT-A3za1XW8F0VwZR59SbAWeuju4V5rXY31cjH827CEJmvN7RV_U0qZlJJGIm7BKs52rybkvkVsDZLhxPMbWAKq0TW4WLFIA3DIhDNVaV4.evRn7DF-5oTJ_rg1cElUlpwERZzzmIMQh2jb38FcEG4&dib_tag=se&keywords=Bosch%2BIXO%2BElectric%2BScrewdriver&qid=1705250362&sr=8-6&th=1' ),
    affiliate_url ( 'https://amzn.to/4227De6' ),
    listing_name  ( 'Bosch Compact Cordless Screwdriver IXO (7th Generation; 3.6 V; 2.0 Ah; 5.5 Nm; with Micro-USB Cable; Compatible with IXO-Collection Attachments; Screws up to 190 Screws; in Storage Box)' ),
    item_price    ( 'US$125.00' ),
    item_shipping ( 'US$20.90' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Bosch+IXO+Electric+Screwdriver&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Bosch-Home-Garden-Cordless-Screwdriver/dp/B0C2HCM97F/ref=sr_1_42?dib=eyJ2IjoiMSJ9.3DIiqj_VbLsrt7dI4VmnGtCiF1ps-vHUMp_jZiktGhVzQwB4M7mXZ5PIs63OIl-AqRQg1Ztcgba0_5Fon4BD7C1e8cEa7_CmsREEKAir9WcqVUt2vc_HfSP6_FwEtL-lSmzxf0VqJNlK9hp-Vzzvsw.K_XJ8h5gXi4TsLasuPsTNvle0LTVhhkRZ4yjEt7_TeU&dib_tag=se&keywords=Bosch+IXO+Electric+Screwdriver&qid=1705250585&sr=8-42' ),
    affiliate_url ( 'https://amzn.to/48U9inU' ),
    listing_name  ( 'Bosch Home & Garden 3.6V Cordless Electric Screwdriver Gun Variable Speed with 10 Screwdriver Bits & Storage Box (IXO 7)' ),
    item_price    ( 'AU$65.00' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Bosch+IXO+Electric+Screwdriver' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/155327559494?hash=item242a3e7746%3Ag%3AIT0AAOSwB-NiWqWh&amdata=enc%3AAQAIAAAA8JDs7o%2FKWoqqLBjakpV%2BxrapOvAGBeIp%2Fh4pag8Ya%2B7fCNPj2bM7Ntnaw96W73fdSHLmnUbvvHbMqD4W%2B6CyXVq6HdEz0cClOYvo8n9GEIeqRKLiA%2FfCIb1m4T85Z%2BinSTO%2FeZXSJLOHnBvoRiSvXRjhkACpFnV72r5uiwDpWQpwNGmcj%2F34emYLYGWjMereVejsH%2Fz1byZHCCOBsAjQWyNSBqj%2BAZVdreUANpwKWB%2FcdTmEg6Aj%2BnoRueJRbbv%2BRwyO%2B2PXzy%2FaHw8kdUPRzLaj5duhjyIh%2F%2BFxOG1he8ppCfLYARBB9vcuXWJwhnQlbg%3D%3D%7Ctkp%3ABk9SR7Sz4I2hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/t2wWwZ' ),
    listing_name  ( 'BOSCH IXO 6 Cordless Electric Screwdriver Screwdrivers electrical tools' ),
    item_price    ( 'US$120.00' ),
    item_shipping ( 'US$8.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/385548723418?hash=item59c47ea4da%3Ag%3AQVIAAOSwVQNkT4Mx&amdata=enc%3AAQAIAAAA8HOBQ0imMzTfvFqXBhZS0qgNJ8xP4J1AfwYnlLhP71A2zWvAnq7yiNTslHaeP5SlPi8UClnV%2FqL3v5XPa3k53EEw9trDMeJkaWOhAKG4LtPGcm%2BlvgvBgczr85lLRUT9WfucHxWMgDRpNRSqpNk4TFjECwPRZ2M6S2D5n0fc9pigStDOsue89J%2Fm5Z3RNwHasCKCQFIHiGSOSIsS%2Fa4KXJSB8ZN6S5F2Ou1RpCE1m64k9LSLRXyOkU3SibAry1RnkcvrJ7oqQ9usKzDTQIyCtpmJe6xFeDWKU1t%2FwjzesDPfBrikQK%2BGbj29u3CSvKLaSA%3D%3D%7Ctkp%3ABk9SR7qz4I2hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/aIY7x4' ),
    listing_name  ( 'Bosch 3.6 V Cordless Electric Screwdriver Screw Gun with 10 Bits & Case IXO 7' ),
    item_price    ( 'US$43.55' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/385548723417?hash=item59c47ea4d9%3Ag%3A8-EAAOSwvXRkT4Mr&amdata=enc%3AAQAIAAAA0ETMplpi2kiFe9mMtzQq1gCHk50570LMZ6ZdCpC9EqES9m0mwdNBIdJyw3cGfUI%2BwIF7e7ALTsjG7NMv1GW0Y4LhAOQnBo7t1pyVyA1JkqfFTDriPKXe%2FIgrJ9D9SDqm%2FVJv3gEjIb%2FL4siVicQ0nfzaZ5MCz8iBR%2FNEI58Yh1avG1i1HyMz%2BVsHdWJYSEye8a5C4KL99Lkax3Q0wbwT3AYYRILdWjYhtcHC4kgGOMUVvE0EUSsy9VQAjY5fLY09rwcD9aRiDaTf%2FnLW0rxCNqE%3D%7Ctkp%3ABk9SR7qz4I2hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/ngr7EE' ),
    listing_name  ( 'Bosch 3.6 V Cordless Electric Screwdriver Gun 2 Attachments 10 Bits & Case IXO 7' ),
    item_price    ( 'US$52.93' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Bosch+IXO+Electric+Screwdriver' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/385548723418?hash=item59c47ea4da%3Ag%3AQVIAAOSwVQNkT4Mx&amdata=enc%3AAQAIAAAA8HOBQ0imMzTfvFqXBhZS0qgNJ8xP4J1AfwYnlLhP71A2zWvAnq7yiNTslHaeP5SlPi8UClnV%2FqL3v5XPa3k53EEw9trDMeJkaWOhAKG4LtPGcm%2BlvgvBgczr85lLRUT9WZ8Vo57w%2F2zdSAEV7tN%2FiPXn1Ep4VUBzXS9AD9Niuk5OwmEI39vMI5%2FIgpHXO6Hs%2FBTOlZDzjLuj4JwvyNT83V7YViITPkmt9yn8jbr%2FxZQ8%2FWP2Q1VggbvkVVFQ4iZWDFjK2uCy4I5%2FlFkxTrjbFqdWfkyRkobm8huyf0wv%2BUopRrwTN3fNUhwAOYYaBgjx0g%3D%3D%7Ctkp%3ABk9SR_Lk-o2hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/kGOFj4' ),
    listing_name  ( 'Bosch 3.6 V Cordless Electric Screwdriver Screw Gun with 10 Bits & Case IXO 7' ),
    item_price    ( 'AU$65.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/385548723417?hash=item59c47ea4d9%3Ag%3A8-EAAOSwvXRkT4Mr&amdata=enc%3AAQAIAAAA0ETMplpi2kiFe9mMtzQq1gCHk50570LMZ6ZdCpC9EqES9m0mwdNBIdJyw3cGfUI%2BwJGEr3GItaJhYDSwd4eQDTi%2BkokNdSKTPsRb8IZfbMXKKEW35eZcKw6UgXqNH6WTGk07DeS4hCJ3mkljtsqARg3OUtcJTm570CkbM0lIoqPbdvI2gB%2B4ycxG%2FZigGe7L47Mc1D8z3YDB%2BEVl%2FTu9bbhOd10xTcOCKWVUfqBYdF4ogbYb0fSyFwT85vUHmcO70F6UspEqQp6BHEvuwSampns%3D%7Ctkp%3ABk9SR_Lk-o2hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/JJ2KnP' ),
    listing_name  ( 'Bosch 3.6 V Cordless Electric Screwdriver Gun 2 Attachments 10 Bits & Case IXO 7' ),
    item_price    ( 'AU$79.00' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Bosch-IXO-Electric-Screwdriver.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006198869100.html?spm=a2g0o.productlist.main.21.2fca73d2rFH7wm&algo_pvid=914774a6-15dd-45fe-9261-71938bec245b&algo_exp_id=914774a6-15dd-45fe-9261-71938bec245b-10&pdp_npi=4%40dis%21AUD%21190.66%21101.05%21%21%21903.61%21478.91%21%402101e5c517052511154398768e108b%2112000036965889473%21sea%21AU%214385823938%21&curPageLogUid=gy4yvGSNFb3Z&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DmRPuNb' ),
    listing_name  ( 'Bosch IXO 7 Cordless Electric Screwdriver USB Rechargeable IXO 7th Compact Screwdriver 5.5Nm Max Torque Portable Power Machine' ),
    item_options  ( 'Color: Only ixo 7' ),
    item_price    ( 'AU$101.05' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006448088477.html?spm=a2g0o.productlist.main.23.2fca73d2rFH7wm&algo_pvid=914774a6-15dd-45fe-9261-71938bec245b&algo_exp_id=914774a6-15dd-45fe-9261-71938bec245b-11&pdp_npi=4%40dis%21AUD%21145.21%21101.65%21%21%21688.20%21481.74%21%402101e5c517052511154398768e108b%2112000037205518212%21sea%21AU%214385823938%21&curPageLogUid=Uhgh0YUtNr0Y&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DCDlwiH' ),
    listing_name  ( 'Bosch IXO Cordless Screwdriver 3.6V Usb Rechargeable Multi-Function Mini Electric Drill Screw Driver Portable Power Tool Ixo 7/6' ),
    item_options  ( 'Color: IXO 7 Only' ),
    item_price    ( 'AU$101.65' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005920214603.html?spm=a2g0o.productlist.main.25.2fca73d2rFH7wm&algo_pvid=914774a6-15dd-45fe-9261-71938bec245b&algo_exp_id=914774a6-15dd-45fe-9261-71938bec245b-12&pdp_npi=4%40dis%21AUD%2145.03%2121.61%21%21%2129.78%2114.29%21%402101e5c517052511154398768e108b%2112000034856342072%21sea%21AU%214385823938%21&curPageLogUid=wYhBGjEB5rul&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Ddc2Jjx' ),
    listing_name  ( 'Bosch IXO7 Portable Cordless Electric Drill Screwdriver Set USB Rechargeable Multi-Tool Magnetic Power Rotate Bits 360 Angle Led' ),
    item_options  ( 'Color: Bosch IXO7' ),
    item_price    ( 'AU$99.67' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B08KLPJ5BP/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-7183773-5004638' ),
    order_id        ( '249-7183773-5004638' ),
    order_date      ( '8 September 2023' ),
    order_item_name ( 'Bosch Home & Garden 3.6V Cordless Electric Screwdriver Gun Variable Speed with 10 Screwdriver Bits & Case (IXO VI Green)' ),
    order_options   ( 'Colour Name: IXO VI Green; Style Name: Set' ),
    order_price     ( 'AU$79.00' ),
    order_quantity  ( 1 ),
    order_gst_paid  ( 'AU$7.90' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71hysBRxcbL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.bosch-diy.com/au/en/p/ixo-collection-angle-screw-adapter-1600a001y8' ),
      link_text       ( 'Bosch IXO Angle Screw Adapter' ),
    ),
    manufacturer_name ( 'Bosch' ),
    model_name        ( 'IXO' ),
    EquipmentFeature::ANGLE_SCREW_ADAPTER,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Bosch' ),
    model_name        ( 'IXO' ),
    equipment_type    ( 'Angle Screw Adapter' ),
    category          ( 'Screwdriver' ),
    category          ( 'Adapter' ),
    category          ( 'Accessory' ),
    category          ( 'Attachment' ),
    manufacturer_link (
      link_href       ( 'https://www.bosch-diy.com/au/en/p/ixo-collection-angle-screw-adapter-1600a001y8' ),
      link_text       ( 'Bosch IXO Angle Screw Adapter' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Bosch_IXO' ),
  see_also      ( 'Bosch IXO VI Electric Screwdriver' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B00JZI0WYC/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&th=1' ),
    affiliate_url ( 'https://amzn.to/3U5oxGz' ),
    listing_name  ( 'Bosch Home & Garden IXO Angle Screw Adapter (Compatible with IXO 4th, 5th, 6th, & 7th Generation, in Cardboard Box)' ),
    item_options  ( 'Style Name: Angle Screw Adapter' ),
    item_price    ( 'AU$26.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B00JZI0WYC/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&th=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-7183773-5004638' ),
    order_id        ( '249-7183773-5004638' ),
    order_date      ( '8 September 2023' ),
    order_item_name ( 'Bosch Home & Garden IXO Angle Screw Adapter (Compatible with IXO 4th, 5th, 6th, & 7th Generation, in Cardboard Box)' ),
    order_options   ( 'Style Name: Angle Screw Adapter' ),
    order_price     ( 'AU$26.00' ),
    order_quantity  ( 1 ),
    order_gst_paid  ( 'AU$2.60' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/51YE45AQ3zL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Amazon Basics' ),
    EquipmentFeature::RATCHET_SCREWDRIVER,
    EquipmentFeature::TORX_SCREWDRIVER_T15,
    EquipmentFeature::TORX_SCREWDRIVER_T20,
    EquipmentFeature::TORX_SCREWDRIVER_T25,
    EquipmentFeature::HEX_SCREWDRIVER_H3,
    EquipmentFeature::HEX_SCREWDRIVER_H4,
    EquipmentFeature::HEX_SCREWDRIVER_H5,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL4,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL5,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL6,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH1,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH2,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH3,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Amazon Basics' ),
    equipment_type    ( 'Ratchet Screwdriver' ),
    category          ( 'Screwdriver' ),
    category          ( 'Ratchet' ),
    category          ( 'Hand Tool' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Bosch_IXO' ),
  search_url    ( 'https://www.amazon.com/s?k=Amazon+Basics+Ratchet+Screwdriver&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Amazon-Basics-12-Piece-Screwdriver-Turquoise/dp/B08KTW7N8K/ref=sr_1_1?dib=eyJ2IjoiMSJ9.vhmb98n6i9bYeHp6ajZdCA.nf2X1vpHwLEFB-GnXjvjfA_U_RN0Izlal8IQFZBfHxI&dib_tag=se&keywords=Amazon%2BBasics%2BRatchet%2BScrewdriver&qid=1705251411&sr=8-1&th=1' ),
    affiliate_url ( 'https://amzn.to/3RVdTzz' ),
    listing_name  ( 'Amazon Basics 12-Piece Magnetic Screwdriver Set, 7 x 2 x 14.8 inches, Turquoise' ),
    item_price    ( 'US$18.87' ),
    item_shipping ( 'US$19.09' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Amazon+Basics+Ratchet+Screwdriver&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/AmazonBasics-12-in-1-Magnetic-Ratchet-Screwdriver/dp/B07V5WYXP5/ref=sr_1_38?dib=eyJ2IjoiMSJ9.5u3ZKiYplTGIRWhc9PjO8Lc6weS3ST3bfYhm7Z2cfGVlnxv4sQ5B_d6ue-5GSAFpHry-Jv7G8g91vWUfh0NoGJJ_T2lff-T2mjsvwIh6zOZmwhFvDywrBT-MQGYpsPhXAs99nI16aGYqbgoJwf-iJw.OEardEJVZD7IaWjsGQ5kEp0lk-H3quVtgIIqJ8Dqbqg&dib_tag=se&keywords=Amazon%2BBasics%2BRatchet%2BScrewdriver&qid=1705251470&sr=8-38&th=1' ),
    affiliate_url ( 'https://amzn.to/3tUhV37' ),
    listing_name  ( 'Amazon Basics 12-in-1 Magnetic Ratchet Screwdriver' ),
    item_price    ( 'AU$33.54' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Amazon+Basics+Ratchet+Screwdriver' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/375146423752?hash=item57587825c8%3Ag%3ANJQAAOSwR6Jli43C&amdata=enc%3AAQAIAAAA0NcuBHd49ftUpvhSCFAEVS3oT2fj7tHdowaa%2FmZmxPg6YUuYIkm784nHZc2ogVvW5VxGQK%2BA0DPh%2F1y6G7tKURV8ZGncnmXZA7SrQbYLa7AiwLmWQOSxVEE%2FjOjjInUsL0LKPydCjH%2BFC1tY6ZC7%2F1HocYd5wJ8Lg04EGxk%2F9eDxO4OLh4lZtiNMydoPRrr5r9MzPSFNBUfOw3a8GuCHpvf987fquDIhF3%2BaABAmmYSq39AX8ML6iKG80uXZLVOudqnJcEqQ2qpOOPwk0YDIdl8%3D%7Ctkp%3ABk9SR47oy46hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/NMT7iJ' ),
    listing_name  ( 'Magnetic Ratchet Driver 12 in 1 Set of 12' ),
    item_price    ( 'US$34.04' ),
    item_shipping ( 'US$3.15' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Amazon+Basics+Ratchet+Screwdriver' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Amazon-Basics-Ratchet-Screwdriver.html' ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B07V5WYXP5/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-7183773-5004638' ),
    order_id        ( '249-7183773-5004638' ),
    order_date      ( '8 September 2023' ),
    order_item_name ( 'Amazon Basics 12-in-1 Magnetic Ratchet Screwdriver' ),
    order_price     ( 'AU$21.90' ),
    order_quantity  ( 1 ),
    order_gst_paid  ( 'AU$2.19' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sb83c4bc2623b4bc4ba4b7abe3d4bc5ecr/DT71-Mini-Digital-Tweezers-Smart-SMD-LCRDVF-Tester-Multimeter-Signal-Generator-for-Measuring-Components.jpg_640x640.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Miniware' ),
    model_name        ( 'DT71' ),
    EquipmentFeature::DIGITAL_TWEEZERS,
    EquipmentFeature::HANDHELD_MULTIMETER,
    EquipmentFeature::SIGNAL_GENERATOR,
    EquipmentFeature::WAVEFORM_GENERATOR,
    EquipmentFeature::COMPONENT_TESTER,
    EquipmentFeature::SMD_TESTER,
    EquipmentFeature::LCR_METER,
    EquipmentFeature::ESR_METER,
    EquipmentAttribute::TEST_EQUIPMENT,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Miniware' ),
    model_name        ( 'DT71' ),
    equipment_type    ( 'Digital Tweezers' ),
    category          ( 'Multimeter' ),
    category          ( 'Signal Generator' ),
    category          ( 'Waveform Generator' ),
    category          ( 'Component Tester' ),
    category          ( 'SMD Tester' ),
    category          ( 'LCR Meter' ),
    category          ( 'ESR Meter' ),
    category          ( 'Meter' ),
    category          ( 'Test Equipment' ),
    category          ( 'Hand Tool' ),
    category          ( 'Tweezers' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/DT71_Mini_Digital_Tweezers' ),
  search_url    ( 'https://www.amazon.com/s?k=Miniware+DT71+Digital+Tweezers&s=price-asc-rank' ),
  warning       ( 'I got one without a storage bag, I don\'t need that.' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/MINIWARE-DT71-Recognition-Multimeterm-Multitester/dp/B08N69CRKV/ref=sr_1_1?dib=eyJ2IjoiMSJ9.x6INYz08PkPd65H87JOe1BoNiVzNGBE4XP1i86W78rU.YI9lkLQ0-iS72Vh7I1hNaDTVeJ9D46F5VbFf4u7691I&dib_tag=se&keywords=Miniware+DT71+Digital+Tweezers&qid=1705251812&sr=8-1' ),
    affiliate_url ( 'https://amzn.to/3SeeLAB' ),
    listing_name  ( 'MINIWARE DT71 LCR Meter Tweezer, Digital Tweezer Tester, Electronic Component Analyzer, Tester for SMD/Resistor/Capacitor/Inductance/Voltage/Frequency/Diode, Automatic Component Recognition' ),
    item_price    ( 'US$59.99' ),
    item_shipping ( 'US$17.67' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Automatic-Measurement-3%E2%80%91Section-Multimeter-Multifunctional/dp/B08W3LX8LZ/ref=sr_1_2?dib=eyJ2IjoiMSJ9.x6INYz08PkPd65H87JOe1BoNiVzNGBE4XP1i86W78rU.YI9lkLQ0-iS72Vh7I1hNaDTVeJ9D46F5VbFf4u7691I&dib_tag=se&keywords=Miniware+DT71+Digital+Tweezers&qid=1705251812&sr=8-2' ),
    affiliate_url ( 'https://amzn.to/3SlXaXK' ),
    listing_name  ( 'DT71 Mini Digital Tweezers Automatic Measurement Function 3‑Section Split Structure 360 Degree Adjustable Window Portable with Dedicated Data Line' ),
    item_price    ( 'US$75.74' ),
    item_shipping ( 'US$17.76' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Miniware+DT71&crid=2VTIO9X09NNJ8&sprefix=miniware+dt71+%2Caps%2C226&ref=nb_sb_noss' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Studio-Digital-tweezers-Multimeter-Testers/dp/B08HVDH5P3/ref=sr_1_1?crid=2VTIO9X09NNJ8&dib=eyJ2IjoiMSJ9.GUNmbdXqBIurVLlBgcqmxcFszur09hanJm4PDxhE6F36ouRD0409NbILsQPRhpUkJdFaFzBH1fcu80qkrxGohrIcdo_UQK9SaFwyHJtR34gVamCUrpz80WrcPU85hM1_qwT7CWWzwEudZv5VEjgahA.sOZYnvtXfw-jmRRW4Ag7vSe94L7eZbbGmLRUhpqpyHw&dib_tag=se&keywords=Miniware+DT71&qid=1705251936&sprefix=miniware+dt71+%2Caps%2C226&sr=8-1' ),
    affiliate_url ( 'https://amzn.to/41Ydcdg' ),
    listing_name  ( 'Seeed Studio DT71 Mini Digital tweezers Multimeter Multi Testers LCR/ESR Meter SMD Tester' ),
    item_price    ( 'AU$128.00' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Miniware+DT71+Digital+Tweezers' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/305175589657?hash=item470de1f319%3Ag%3AumAAAOSwVcllGswr&amdata=enc%3AAQAIAAAA8LFYgSBLccFchan6lNQecSMeMltHPamHwj28EM2fQBHYYILrjMxOS2qKuXWE%2BFx8TH96fEiNjsJX%2BbdTbSp8MCJ5XRVSAuDJ%2B81QW6%2B56dizfJS81Ufi3EphEWiyy8TF4U64MS86aNuVXQtoA%2FRsis6PwfZR57ZwDz%2FgtQyJDJcrvdsl92RKrIAqBRVUXZXyijGkPsBMnZdEi1u5bhx7pnfERmifyQuvqH5e6PguV%2FWsHVOtY5Bi6aYVSbnvY3Tmgl52NdkgIDa0QGGNjlKDUbmbzRSujE7ApGX2F6yYpvDD7xE1wYKJCvrivyQmnE4q7Q%3D%3D%7Ctkp%3ABk9SR8rOhI-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/Cu9EKw' ),
    listing_name  ( 'MINIWARE DT71 LCR Meter Tweezer, Digital Multimeter Tester, Electronic Component' ),
    item_price    ( 'US$89.99' ),
    item_shipping ( 'US$18.06' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/334743596190?epid=23053140717&hash=item4df045ec9e%3Ag%3Amn8AAOSwklBj6EWt&amdata=enc%3AAQAIAAAA8L1ydTEjXeDsCxZTh8sRJjErl%2FOqHG5XoUlm7xEOVJPcrzbAvUxJl%2FTeZWziE3KOVVUCQnsfkzKc5AetfZASynSyJfwSW%2FcLgTniysS%2F%2Fo5RiG%2B9YKZpygiMpoBqkmXnwZyWVmvdelsGqZXh10mumR10%2Bdp9OUX0ZndKpL4S6Y%2BvhFMDJwJkORVBXXBNOTlxA%2FfzLeOUPQNyaXU8Px7j7KSfiMC8lM8q%2Bi8tL5sXWZbdiTUJohh7t3LnWKiMa1hiPdfsmvMSPgBLfgoL8nCk5qF6WXtqymZEJO0j61hIq6Us4g%2FIr1MwZYjHaI2HkG1Wcg%3D%3D%7Ctkp%3ABk9SR8rOhI-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/lsshR7' ),
    listing_name  ( 'MINIWARE DT71 Digital Tweezers LCR Meter, Test for SMD/Resistor/Capacitor/Ind...' ),
    item_price    ( 'US$93.32' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/175311392105?hash=item28d15f8d69%3Ag%3AtDsAAOSwNb1ioGGv&amdata=enc%3AAQAIAAAA0HhrIkZ6Qudyq%2Bylh5mhrXr1R0zGGmybf7FWhr9gSlsuJvHoZnTaULpIei9dNjm2iC%2B2EviQqZ6gShXAhZjU9niLno00ll8fjlgCFvjSrhxVk2lEyoqywlcve%2BZ8E83FE6A8QNLTdUH2lr0DFWZGPty23aiu6Tk0KNPwIQX2gF8sAlAH8Lz0Y653IRzyGSGKVOsh6YcT2i1z3MwaA%2FTv1qt2se8AsHkM8%2F0kOM%2BZXVjsxtwG7fMw7W2NRIDt3BPTj8iGK4TVLJWxjhrtzoIjN44%3D%7Ctkp%3ABk9SR9DOhI-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/Fsl4BM' ),
    listing_name  ( 'DT71 Smart Mini Digital Tweezers LCR Meter Signal Generator Debugging Reparing' ),
    item_price    ( 'US$86.42' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Miniware+DT71+Digital+Tweezers' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/305175589657?hash=item470de1f319%3Ag%3AumAAAOSwVcllGswr&amdata=enc%3AAQAIAAAA0LFggcEKXavl7f7jmox%2BhS1aVjp9LmGpbcoL3I3CsKDdewwGzxD9WOXl5W0AqCGhyu%2BdS60S1i43bVvqza6xE7i%2F%2FFhM9GTKqcNWy6C%2BBe8ba%2Fj7OcjMGj1cBt5qpAaeOmQ9E2AgvWjauEQQYQY8E%2FNuU78vGoLZTTQz%2BKiuffHc3t1R8RYCmABK8pCt8V67Wu4mcn5lIrd3VRc3XFXSYO2sXot9VcYjgbgP8gLWb10U3wCdHPmRO%2FNG9OkNz9OXjbJpvNaKDtemsiKWb302CUE%3D%7Ctkp%3ABk9SR57Tlo-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/20fniO' ),
    listing_name  ( 'MINIWARE DT71 LCR Meter Tweezer, Digital Multimeter Tester, Electronic Component' ),
    item_price    ( 'AU$147.75' ),
    item_shipping ( 'AU$29.66' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/175311392105?hash=item28d15f8d69%3Ag%3AtDsAAOSwNb1ioGGv&amdata=enc%3AAQAIAAAA0HhrIkZ6Qudyq%2Bylh5mhrXr1R0zGGmybf7FWhr9gSlsuJvHoZnTaULpIei9dNjm2iBgJDQhX5tvtE7DCPAOJB%2FNxjomxsq8D6zEE4OJeT5o6O%2BLn4aNrvg6xJOuv7tns%2FR48oI9xZN2f826bBGFQGGPmfbkL%2BOw4PFFmz3dvqRjWDyM6kMYgQlMsatvm%2BL9yWqt%2BnhB8g2kqxjGuioopknLenrMwRG0C2tfYYEuzMX0b9eApN%2FuApZNm4tCdcFaY%2FO6jczdifOuGMZYF1ePavzQ%3D%7Ctkp%3ABk9SR5jTlo-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/uzv9r5' ),
    listing_name  ( 'DT71 Smart Mini Digital Tweezers LCR Meter Signal Generator Debugging Reparing' ),
    item_price    ( 'AU$128.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/143822434073?hash=item217c7c2f19%3Ag%3A3RoAAOSw6fxirEiQ&amdata=enc%3AAQAIAAAA8J010N2QpTJVqN%2FuM7HXZ6YDWH%2B2fYUZW%2FlXZSXC5LXruc%2FjKQkqSf7mfW32EWNGUgu18ksDqosYGGci7toxxhzKwR5M%2Bglp15nrTFSgv6yNo5VJtBGOo5GYQ%2BOiUdvWmRfQzZP6etsFY%2FTv%2B%2FFDBHHCm%2B1PhVTYKEZWyfmK3JnVqbvcCVlB9Px6zUr8G1HRqRLqhV%2Fo5a%2BcQV3m3BXIEihNolXRhHOsTu5%2BnCuOmOfJSgYbTKgwNhDUEuYMULOac2LVyuvSdjHMzbHCFL8I3CRWkAGuIJD9Y%2FMLWGIWy4CAQrlzJD1%2Bt2DR5cUjMVS7qA%3D%3D%7Ctkp%3ABk9SR5jTlo-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/IgKKMH' ),
    listing_name  ( 'DT71 Mini Digital Tweezers Smart LCR Meter Signal Generator Debugging Reparing' ),
    item_price    ( 'AU$144.99' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Miniware-DT71-Digital-Tweezers.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005001393724465.html?spm=a2g0o.productlist.main.1.76a93349yfAPW1&algo_pvid=311c0e23-c9f4-4e15-9fae-805e3494f4cc&algo_exp_id=311c0e23-c9f4-4e15-9fae-805e3494f4cc-0&pdp_npi=4%40dis%21AUD%21123.62%2182.82%21%21%2181.75%2154.77%21%402101fb1317052522861056185eaab9%2112000032137004589%21sea%21AU%214385823938%21&curPageLogUid=G9s6KdyANPZ8&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DEv98Ez' ),
    listing_name  ( 'DT71 Mini Digital Tweezers Smart SMD LCRDVF Tester Multimeter Signal Generator for Measuring Components' ),
    item_price    ( 'AU$82.82' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005371005986.html?spm=a2g0o.productlist.main.7.76a93349yfAPW1&algo_pvid=311c0e23-c9f4-4e15-9fae-805e3494f4cc&algo_exp_id=311c0e23-c9f4-4e15-9fae-805e3494f4cc-3&pdp_npi=4%40dis%21AUD%21134.74%21107.79%21%21%21638.58%21510.86%21%402101fb1317052522861056185eaab9%2112000032783758433%21sea%21AU%214385823938%21&curPageLogUid=1LM6NIb2H1aq&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DCszQgp' ),
    listing_name  ( 'DT71 Mini Digital LCR Smart Tweezers Auto Scan Diode Capacitor Frequency Inductance SMD Tester 10KHz Signal Generator LCR Meter' ),
    item_price    ( 'AU$107.79' ),
    item_shipping ( 'AU$1.72' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006190249550.html?spm=a2g0o.productlist.main.9.76a93349yfAPW1&algo_pvid=311c0e23-c9f4-4e15-9fae-805e3494f4cc&algo_exp_id=311c0e23-c9f4-4e15-9fae-805e3494f4cc-4&pdp_npi=4%40dis%21AUD%21152.97%21122.37%21%21%21724.99%21579.99%21%402101fb1317052522861056185eaab9%2112000036199793755%21sea%21AU%214385823938%21&curPageLogUid=axliIJgNTxGR&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DeAIswV' ),
    listing_name  ( 'Miniware DT71 Digit Tweezers Smart LCR Meter Signal Generator Debugging Reparing Multimeter Digital Smart Tweezers Miniware Port' ),
    item_options  ( 'Color: DT71' ),
    item_price    ( 'AU$122.37' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005001393724465.html?spm=a2g0o.order_detail.order_detail_item.3.ff57f19cfggPA7' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.106.764218021V85h7&orderId=8174911823703938' ),
    order_id        ( '8174911823703938' ),
    order_date      ( 'Sep 2, 2023' ),
    order_item_name ( 'DT71 Mini Digital Tweezers Smart SMD LCRDVF Tester Multimeter Signal Generator for Measuring Components' ),
    order_options   ( 'Color: black' ),
    order_price     ( 'AU$88.32' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$8.83' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/615k78zAAqL._AC_SL1001_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Horusdy' ),
    EquipmentFeature::SOLDERING_STATION,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Horusdy' ),
    equipment_type    ( 'Soldering Station' ),
    category          ( 'Soldering Iron' ),
    category          ( 'Hot Air Gun' ),
    category          ( 'Bench Equipment' ),
    category          ( 'Hand Tool' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Horusdy_Soldering_Station' ),
  search_url    ( 'https://www.amazon.com/s?k=Horusdy+Soldering+Station&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=Horusdy+Soldering+Station&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Horusdy-Soldering-Station-Digital-Display/dp/B08XZ9XFST?&linkCode=sl1&tag=johnelliotv-22&linkId=980137cad004547fc14a60175ce0236b&language=en_AU&ref_=as_li_ss_tl' ),
    affiliate_url ( 'https://amzn.to/3tYgFvO' ),
    listing_name  ( 'Horusdy 2in1 Soldering Station Solder Iron Rework Hot Air Blower Digital SMD Display + 11 Tips, 4 Nozzles & Tweezer Set' ),
    item_price    ( 'AU$92.99' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Horusdy+Soldering+Station' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/166543660901?hash=item26c6c69765%3Ag%3AMrkAAOSw1JRlndYK&amdata=enc%3AAQAIAAAA0E801sienX3xHEjJC4lHXUPCtLxe%2FZ%2Fr3yFs31eA7fx5%2BG7D8ecCIxdoli3ZsOw6SuCFoxdd7Yy2P3L8C7RKy61A%2FGPdXgh3uUnVipQO%2F86SBGR7zQ3bs6zQ89wHcr5EJ1VLJTs%2FnCzaVLG7eLnnNeiG%2BKpJb1IfnrwEB2O4UUqSNOl9DCfPOwPgQ1uIGTwERYigWo27GB6S46G9QFPi5GEtEV%2BqVZEASXGLzMZWQLhb2n11EqEYRNaB8nEmPEuKpJxP2JSo9tcIVLz4gQ2CC6M%3D%7Ctkp%3ABk9SR768zI-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/W3gP9u' ),
    listing_name  ( '2in1 LCD Soldering Iron Solder Rework Station Hot Air Gun DigitalSMD Desoldering' ),
    item_price    ( 'US$56.27' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/383563662708?hash=item594e2d0574%3Ag%3AFQcAAOSwGXJezfHr&amdata=enc%3AAQAIAAAA0NZHxTbm7Zn7QuTN6hSWXGAQ%2Fet6pgj3A3MQel36t53ZNZ1WuDU7BlLAl2aEs65s3BFV39WEG38dSlMzWHp02JWtJ%2B3CaUV062CZmDfnZyNpDMuvv6aUUVCV8Igd5eRp1VmruOvNz6xPrS4uEmMGRCHTGFu5NMoazwtx7eSa1CjnAdJJzHRK%2F%2Fbi0MplYM8k1dMPegI16kaRku49VRsAQ1kRwyZU3QsTX00W5N7orsfKmunR4TmVlst%2F%2BYOEvUPaYAAOxyX4Yn%2BYs4CQCpf5b%2BE%3D%7Ctkp%3ABk9SR768zI-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/D1z81S' ),
    listing_name  ( '2in1 Soldering Solder Station Rework Iron Hot Air Gun Digital SMD Desoldering' ),
    item_price    ( 'US$56.94' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/252948407124?hash=item3ae4e66354%3Ag%3Aib0AAOSwyH5bf7O9&amdata=enc%3AAQAIAAAA8LBP40Vr7UhBvRpRNG0mcjQgF51hBR8hhIddKwf8Pj3JMUzR%2Fr%2FUeG0lE7%2B0fesKfO9mECifrDgWYXmZCr6shFQmK3bh2O%2BoWCBsy2ra7819pLpJqjL%2FJGLx5F9eD7FoWqIgBBLPir2niDKgySTR7CntCIOf0%2FuQ4heQf8YkMvKPqBy8%2BXFIijNFhTUf%2BjTEMr5rnA%2Fnz0cr6TO6lvKaXLSPhTfXyoL56dSPz1mjT6btOlLoMAtl0adGVI06grwH7XcHxxICOByegE%2BDcCdhi1hgCyPvenHpEPqEnK4RajPKveA1BWeKI%2By6ybD7oFFGcQ%3D%3D%7Ctkp%3ABk9SR768zI-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/rGlwnM' ),
    listing_name  ( '2in1 Soldering Iron Solder Rework Station Hot Air Gun Digital SMD Desoldering' ),
    item_price    ( 'US$56.94' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Horusdy+Soldering+Station' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/394708577091?hash=item5be676eb43%3Ag%3AJYMAAOSw5glknNea&amdata=enc%3AAQAIAAAA8KxKL0PohNIHSR4DzZIzssWAeEa4err8ZtsUry%2FdyhGi78ILxkS9t4Eu%2F%2BnRmucPxNnPCeDkpZ7vv%2FV0ikR5OcfS2NtsRunrktiwBw9WVAnFr2DWsRCmSs%2FGXZROWTapEF2kxuC%2BFpHMqEVV%2Br%2FauJ5mKUaPldg3I%2FDc8%2BrszxzBRTtUmA4%2FkBohXrug5C%2FQa%2BhnNKCbTU20x%2Bbby%2B3Fr8OCQQIxQk0NPhdDaPD48tMBvjCMprAsLxTfQOZOX%2BLauMzOkvbvXZaZ4nt1xAS78PEB%2BjENt27x4FU%2FMfBAOiM%2Fyb%2BuQq8ux1S98NFXulZfog%3D%3D%7Ctkp%3ABk9SR4S164-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/gzt0D6' ),
    listing_name  ( '2 In1 Rework Soldering Station Hot Air Gun Desoldering Digital Welding Solder AU' ),
    item_price    ( 'AU$74.45' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/383563662708?hash=item594e2d0574%3Ag%3AFQcAAOSwGXJezfHr&amdata=enc%3AAQAIAAAA8GujdE4oUz0S9ENks7NMusTb8HxCaUquT7aV3J3sKGkrWvpxoa1IBfVocdbTABNs6b8rlgROUM7Dc7knPkTqf%2BemmZRAj6%2B9S2%2BOOUYnuO2Dul0cidxsZIhZxmd0lJjPPslTKi0cBjFLXl%2BwwvBkbEPHLqdwIOqinVBzci%2FB4dQSulC%2B%2Bs18oPkHavrI0F6cQ0Rwl2h65C1Z37EWi%2BUvMp0HMGFKKU8PUbUv82d2OFQEXn1BDi1UE5dS%2FhvE%2BuuuC45DINbyJ%2ByXCtq0JK1heSAiZYRhM46hkb9DnGQkiKnwARMW%2FP0ANG85sJnPV1e5qA%3D%3D%7Ctkp%3ABk9SR4S164-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/8OLV7U' ),
    listing_name  ( '2in1 Soldering Solder Station Rework Iron Hot Air Gun Digital SMD Desoldering' ),
    item_price    ( 'AU$84.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/252948407124?hash=item3ae4e66354%3Ag%3Aib0AAOSwyH5bf7O9&amdata=enc%3AAQAIAAAA0FA3PymbqMg9l%2FneLhb8hewbN%2FWASZXj8LEkICs%2Bekvh8msuNy1AF0JSbzwNs8sAW3%2Bt1Zn6aKFCb3klFC73R2TAjj9Vnn%2BdpCegdFFPia99uhsEMh6QDlxpEDhhLadlFFWzmgGBsbILYCh5UskDLusUNamMtlfxaeJ9IbqoBFPKhhYAh00BAeZpZKq0AlsD85qcLin3AoJhGz1nSPw5qv2DhiGvIY7F5%2F7%2BujKvyc6dUX%2F%2BNLaCZdsqO9tkdUJp9Zvei4m27%2F4afDTIaZvdu%2Bs%3D%7Ctkp%3ABk9SR4S164-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/x2Nsvq' ),
    listing_name  ( '2in1 Soldering Iron Solder Rework Station Hot Air Gun Digital SMD Desoldering' ),
    item_price    ( 'AU$84.99' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Horusdy-Soldering-Station.html' ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B08XZ9XFST/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=503-0230202-8709419' ),
    order_id        ( '503-0230202-8709419' ),
    order_date      ( '24 July 2021 ' ),
    order_item_name ( 'Horusdy 2in1 Soldering Station Solder Iron Rework Hot Air Blower Digital SMD Display + 11 Tips, 4 Nozzles & Tweezer Set' ),
    order_price     ( 'AU$94.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61paJu6EmfL._AC_SL1274_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://tera-digital.com/products/2d-barcode-scanner-hw0006' ),
      link_text       ( 'HW0006Pro 2D Wireless Barcode Scanner with Display Screen' ),
    ),
    manufacturer_name ( 'Tera' ),
    model_name        ( 'HW0006 Pro' ),
    EquipmentFeature::BARCODE_SCANNER,
    EquipmentAttribute::CORDLESS,
    EquipmentAttribute::HAND_TOOL,
    EquipmentConnectivity::USB,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Tera' ),
    model_name        ( 'HW0006 Pro' ),
    equipment_type    ( 'Barcode Scanner' ),
    category          ( 'Barcode Scanner' ),
    category          ( 'Scanner' ),
    category          ( 'Hand Tool' ),
    category          ( 'Cordless' ),
    category          ( 'USB' ),
    manufacturer_link (
      link_href       ( 'https://tera-digital.com/products/2d-barcode-scanner-hw0006' ),
      link_text       ( 'HW0006Pro 2D Wireless Barcode Scanner with Display Screen' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Tera_Barcode_Scanner' ),
  warning       ( 'Some of these links/prices are for used goods' ),
  search_url    ( 'https://www.amazon.com/s?k=Tera+HW0006+Pro+Barcode+Scanner&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/gp/product/B0829R5J2X?th=1&linkCode=sl1&tag=johnelliotv-20&linkId=8ad79e9cc467ce649fd031262593fe4e&language=en_US&ref_=as_li_ss_tl' ),
    affiliate_url ( 'https://amzn.to/4aX3BaF' ),
    listing_name  ( 'Tera Pro 1D 2D QR Wireless Barcode Scanner with Display Screen Battery Level Indicator Time Display Works with Bluetooth with Charging Cradle Base for Warehouse Supermarket Library HW0006 Pro' ),
    item_price    ( 'US$61.08' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Tera-Wireless-Indicator-Bluetooth-Warehouse/dp/B0BJDNVY67/ref=sr_1_2?dib=eyJ2IjoiMSJ9.czE3NjTa7XFRTG8O6PoiXuPNUV0u8caLZa8j6QtqJxaJULosJSgH3AVocpE-55TXvHyo5-uTSD6bapT-_SB3xzgMGYd4ZoWJ22WS0L02q6s.WXQT551E8XAMf5Xs78MxwFbzVHfgMMcMNOZ0d0Fx9_w&dib_tag=se&keywords=Tera+HW0006+Pro+Barcode+Scanner&qid=1705253301&sr=8-2' ),
    affiliate_url ( 'https://amzn.to/3SlY3zy' ),
    listing_name  ( 'Tera 2D QR Wireless Barcode Scanner with Screen Display Battery Level Indicator and Time Display Work with Bluetooth 2.4G Wireless 2200mAh Large Battery Charging Base for Warehouse HW0006' ),
    item_price    ( 'US$29.99' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Tera+HW0006+Pro+Barcode+Scanner&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B0829R5J2X/ref=ppx_yo_dt_b_search_asin_title?ie=UTF8&psc=1' ),
    affiliate_url ( 'https://amzn.to/47ELeEC' ),
    listing_name  ( 'Tera 2D QR Wireless Barcode Scanner with Screen Display Battery Level Indicator and Time Display Work with Bluetooth 2.4G Wireless 2200mAh Large Battery Charging Base for Warehouse Model HW0006' ),
    item_price    ( 'AU$91.35' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Tera+HW0006+Pro+Barcode+Scanner' ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Tera+HW0006+Pro+Barcode+Scanner' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Tera-HW0006-Pro-Barcode-Scanner.html' ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B0829R5J2X/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=503-5024418-5069434' ),
    order_id        ( '503-5024418-5069434' ),
    order_date      ( '22 February 2021' ),
    order_item_name ( 'Tera 2D QR Wireless Barcode Scanner with Screen Display Battery Level Indicator and Time Display Work with Bluetooth 2.4G Wireless 2200mAh Large Battery Charging Base for Warehouse Model HW0006' ),
    order_price     ( 'AU$91.35' ),
    order_quantity  ( 1 ),
    order_gst_paid  ( 'AU$8.30' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://d297fd4gt7t5lv.cloudfront.net/file/2023-11-03-163704/s-l1600.png' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.ryobi.com.au/products/details/stud-finder-with-ac-detection-rysf5003' ),
      link_text       ( 'Stud Finder with AC Detection | RYOBI' ),
    ),
    manufacturer_name ( 'Ryobi' ),
    model_name        ( 'RYSF5003' ),
    EquipmentFeature::STUD_FINDER,
    EquipmentAttribute::CORDLESS,
    EquipmentAttribute::HAND_TOOL,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Ryobi' ),
    model_name        ( 'RYSF5003' ),
    equipment_type    ( 'Stud Finder' ),
    category          ( 'Stud Finder' ),
    category          ( 'Voltage Detector' ),
    category          ( 'Hand Tool' ),
    category          ( 'Cordless' ),
    manufacturer_link (
      link_href       ( 'https://www.ryobi.com.au/products/details/stud-finder-with-ac-detection-rysf5003' ),
      link_text       ( 'Stud Finder with AC Detection | RYOBI' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Ryobi_RYSF5003' ),
  search_url    ( 'https://www.amazon.com/s?k=Ryobi+RYSF5003+Stud+Finder&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=Ryobi+RYSF5003&crid=PE2YE777SR4J&sprefix=ryobi+rysf5003+stud+finder%2Caps%2C242&ref=nb_sb_noss_2' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/RYOBI-multiple-indicate-One-handed-operation/dp/B0CKV9LC8Q/ref=sr_1_1?crid=PE2YE777SR4J&dib=eyJ2IjoiMSJ9.8I1_avNdeyWDcZI_PbRV-EppoqOCWBJS4EX9JNVPQ8CAb2AyK6_rDRoyRENbbGyaBzWniowKtkD7pGOBoaYW2etZNSi4SYjC6Ef9js1p6BsUM0irt5YyebonODs5lVaB38spKg3CeP0YL_QlL3joHw.3cZtFddZs-Ch0jW8t1Xv3auyvL3Djx0nWBIEYsrexQc&dib_tag=se&keywords=Ryobi+RYSF5003&qid=1705253931&sprefix=ryobi+rysf5003+stud+finder%2Caps%2C242&sr=8-1' ),
    affiliate_url ( 'https://amzn.to/3tUpyGS' ),
    listing_name  ( 'RYOBI Stud Finder with multiple LEDs to indicate the full width of the stud. One-handed operation' ),
    item_price    ( 'AU$74.41' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Ryobi+RYSF5003+Stud+Finder' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/355281835761?epid=20064065296&hash=item52b87296f1%3Ag%3AYf4AAOSw2ntleAIP&amdata=enc%3AAQAIAAAA0GgFpBhj9fS0LG6dff76oZ0tBlmDjXDMGlm42ORHMeI%2BaHqwwAgzhvbGbdXkp0%2FnZ1Dv4MYhTaBY1dtEmacy%2FBAVQezDN%2BrOnsIEvyqs5x%2Fwn3XnFV9ZLdQcEYMQLIFB9CuWWJVeGvmQ%2F7R2hkXTO3joUqQ7y6%2BruSXJXNdmB8WQzkDhrTLUMTXIt%2BvAVU6wlRKacQM%2BGv1L6S%2FizsNhU1S5%2BZqCAfnMgTYGNZPUoExVOw2A7CL09UVJ%2F4JbX1nI1igGNg6%2BvBsK4CGChUPnj8c%3D%7Ctkp%3ABk9SR-Sk-ZChYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/UrqOUk' ),
    listing_name  ( 'Ryobi Stud Finder with AC Detection RYSF5003' ),
    item_price    ( 'US$47.56' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/325805815361?hash=item4bdb8a3641%3Ag%3A4akAAOSw0-9k%7E8vj&amdata=enc%3AAQAIAAAA0C7tjc2mU%2FZiDMj6bkCz1oXYkeCuJfeC3hhFm72FEGUutUzxnesc2ttkgSPTt4gHQ%2FO%2FBZpvS82Ob9lpOz224IudsKxYi9rUkLO1WGmMvEn%2FwIKvCf4rMRoma4mwP5XEf%2FDfN8ZiCo9%2FwL7Ww%2F8FoAFkecitE7CwqMauTIAMrjsbiKUGnfHLlphe0ZLtpt0%2BfpUg1BrDxOdV%2B3bqoEClg6hMPWXuwpHpHfmQrOcop5ME%2B9YNxa83SXkD2DynoiipU19Z%2BGfGMxq7WlQersShyu4%3D%7Ctkp%3ABk9SR-Sk-ZChYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/gr6XOu' ),
    listing_name  ( 'Ryobi Stud Finder with AC Detection - RYSF5003' ),
    item_price    ( 'US$48.91' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/276043662777?hash=item40457c05b9%3Ag%3ALTwAAOSwJP1lAIW9&amdata=enc%3AAQAIAAAA8BaeRHqcHkHPDXI1SxzrmTEjWoa7OaHzJNIwfXvOobCYTZFD%2FqUFXvqpGl%2BxPNoBnbhvaSdJmENmcN2F%2FR86sL0odBO3WMeppO2Y2ENTkjKyA5fnouoUf9erc45HrYKgrtdKdhW2EMfVWV0oJBu7auhDfIbT%2F2TIk86Zux1WH4N%2FJ31psPYpnLApa0DDH7VdwkdeHkqySyoOn7gQvO8QpGrElQyLdU7V1%2BpOkLpoN6soPcwnS%2B5TAP%2FL%2BZWIRMEQPkSA77KDmzOqjrT5h6iNHfnKZNpqsfgRj5QfAgXq9lKqFJZLoRE9Ci1y8txvGF3D%2Fw%3D%3D%7Ctkp%3ABk9SR-Sk-ZChYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/pOdmCW1' ),
    listing_name  ( 'Ryobi Stud Finder with AC Detection RYSF5003 - JAPAN BRAND' ),
    item_price    ( 'US$60.26' ),
    item_shipping ( 'US$9.71' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Ryobi+RYSF5003+Stud+Finder' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/355281835761?epid=20064065296&hash=item52b87296f1%3Ag%3AYf4AAOSw2ntleAIP&amdata=enc%3AAQAIAAAA8HhIJdVdpnblJGpuzTPu7UNElbDU4PYs9Ug26sb8p0Lx30SOdDdXFysF0yyBi7HlwjP2bmxQSW8VCmfxBI%2BfDIzuCFMeC1KborY0l6KR9M5Ut%2FwxM4TwikNR3UgSU4bK2rcbVLmJVGNvys6h%2FxrEh10qcM6YtV1BxNH0DQas8vTQetFNhG%2Bq%2FUAxxlcNiBTtPs%2F2OP%2BHUJYw2ed0ZF7B5PwcIqWkQxJGlSqQHgxD%2FofHIhPl1eD%2FoVcW1ysH%2F1QnsP%2FUguehMEcpPJ697g%2BASTzHeC%2F7AcuCeJejRZX5zC0fGB%2Fdy2Fbfs%2BeqVSBAuGhpw%3D%3D%7Ctkp%3ABk9SR7SsipGhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/qB0kdG' ),
    listing_name  ( 'Ryobi Stud Finder with AC Detection RYSF5003' ),
    item_price    ( 'AU$70.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/325805815361?hash=item4bdb8a3641%3Ag%3A4akAAOSw0-9k%7E8vj&amdata=enc%3AAQAIAAAA8E12y7HDdDL0VyTPFlWXzsTC%2FOTQr6nGyf3w66PkK7wj3rS2%2FTwnLEKrx0rTmskQI4d1Ivdgz2MbqemIlPyBYcwzNntvn%2BcvwZd7uLiewSqKlPaPfc2l10tIK4O%2BVOgoWUfSZqqVNtRIzHlTha5On4tMyNN6jY2Q5jW1kwUAhpIwAatLc1iHuemSHoyFADXXH%2FLq%2F2tTFbYVuMsxgs4se31%2BD9xy1QeV%2BSZpbq0GUDRjcP7uWZz8NraSjjef4dVXMggr3HxUgGV61ixXhqFhT%2FanjZclsTsVnVTFrllzO3Qpvbgh1di7njd8e26mehUFUQ%3D%3D%7Ctkp%3ABk9SR7SsipGhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/f3NjLh' ),
    listing_name  ( 'Ryobi Stud Finder with AC Detection - RYSF5003' ),
    item_price    ( 'AU$73.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/276043662777?hash=item40457c05b9%3Ag%3ALTwAAOSwJP1lAIW9&amdata=enc%3AAQAIAAAA8BaeRHqcHkHPDXI1SxzrmTEjWoa7OaHzJNIwfXvOobCYTZFD%2FqUFXvqpGl%2BxPNoBnbhvaSdJmENmcN2F%2FR86sL0odBO3WMeppO2Y2ENTkjKyA5fnouoUf9erc45HrYKgrocN%2Bk%2BWwoaZTmUrjIwFtfHgXQBkmlSsVwwfJuy5LlxDWW6jQSrkBqEduhQZCo6mVZac0OIID5mx1BXH77HHHFYBJMlHamO2sELwel3wX59ZUtyLIYdC3OOYUhIhIgzFmCNh6p1j9cj6HSuztDD0bgt%2BOTJQRYuqkRkb9z9D9Dy0JMoYW%2FQ4Anv6n4uTtdIonw%3D%3D%7Ctkp%3ABk9SR7SsipGhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/jaXujI' ),
    listing_name  ( 'Ryobi Stud Finder with AC Detection RYSF5003 - JAPAN BRAND' ),
    item_price    ( 'AU$89.95' ),
    item_shipping ( 'AU$14.50' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Ryobi-RYSF5003-Stud-Finder.html' ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/314570480726' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=07-10148-42175#/' ),
    order_id        ( '07-10148-42175' ),
    order_date      ( '7 Jun 2023' ),
    order_item_name ( 'Ryobi Stud Finder with AC Detection Outdoor Gyprock Plaster - JAPAN BRAND AU' ),
    order_price     ( 'AU$87.95' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61tiRddWRSL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.engineertools-jp.com/pa092021' ),
      link_text       ( 'PA-09 / PA-20 / PA-21  Connector Crimping Pliers' ),
    ),
    manufacturer_name ( 'ENGINEER' ),
    model_name        ( 'PA-21' ),
    EquipmentFeature::CRIMPING_TOOL,
    EquipmentFeature::PLIERS,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'ENGINEER' ),
    model_name        ( 'PA-21' ),
    equipment_type    ( 'Crimping Tool' ),
    category          ( 'Crimping Tool' ),
    category          ( 'Hand Tool' ),
    manufacturer_link (
      link_href       ( 'https://www.engineertools-jp.com/pa092021' ),
      link_text       ( 'PA-09 / PA-20 / PA-21  Connector Crimping Pliers' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/ENGINEER_PA-21' ),
  see_also      ( 'ENGINEER PA-09 Crimping Tool' ),
  search_url    ( 'https://www.amazon.com/s?k=ENGINEER+PA-21+Crimping+Tool&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/ENGINEER-Universal-Crimping-Pliers-BPT-PCH/dp/B0CBL5611K/ref=sr_1_5?dib=eyJ2IjoiMSJ9.M_3sbXXaHlh8vmhwGnPWLvZr6xFTsALAMSA62WgNSTIg-4qQVy35RrW0Tb0D2yqPyuXmdLRAul7SOSs_eXo2IGUsu_VUWTC-lysT5--78IU1VDFGjpwMLG0Y0nND-DHx2OQjcu-7hDBsYqYUuK3iww.JnYIe8FjjpJN_V3ypTIrUG1uNSqPeXxiCtuLVUScM_k&dib_tag=se&keywords=ENGINEER+PA-21+Crimping+Tool&qid=1705254396&sr=8-5' ),
    affiliate_url ( 'https://amzn.to/3O4OAK9' ),
    listing_name  ( 'ENGINEER PA-21 Universal Crimping Pliers & BPT-PCH Tool Pouch (Made in Japan)' ),
    item_price    ( 'US$43.17' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=ENGINEER+PA-21&crid=3IEXEA16DTIG4&sprefix=engineer+pa-21%2Caps%2C329&ref=nb_sb_noss_1' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Engineer-PA-21-Universal-Crimping-Pliers/dp/B002L6HJ8W/ref=sr_1_1?crid=3IEXEA16DTIG4&dib=eyJ2IjoiMSJ9.PWtZ_Afpa2qoe5dfL8mpHumNGv5bWRxryi_tJa9iObZsS3PCAMrNapd582oiGyxMLo-_x19bjmfAdzclwkOentmzvAHl7nDycFeSsnGaa7IvhdSXxiOYEmGGyPkmuzDKswPt3LNIDI4IJsbGrRFV-w.EENCodd1u75JW58NjHBBhHPYoq_dhFDD_uGwLlrY5P8&dib_tag=se&keywords=ENGINEER+PA-21&qid=1705254506&sprefix=engineer+pa-21%2Caps%2C329&sr=8-1' ),
    affiliate_url ( 'https://amzn.to/3O4augy' ),
    listing_name  ( 'ENGINEER PA-21 Engineer Precision Crimping Pliers, Crimping Tool, Open Barrel, Long Barrel Terminal' ),
    item_price    ( 'AU$81.00' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=ENGINEER+PA-21+Crimping+Tool' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/161388380816?epid=21011373122&hash=item25937f4290%3Ag%3AsxoAAOSwEK9T4w6P&amdata=enc%3AAQAIAAAA8LiONzlHKtQxGyFiVcEqm50Q%2BUwqyy6Wi6tkiB7NQfSHPl1fTldLDJXwAOOoc%2BOgOgIXnnoGBRVCz5KJnUvKlBDJXKotrJnzYrs5oRfsVRoPjVZMb%2BZnZ30Uy1JWezKUrS8xkHSqOm%2FdkbHd6OQpW9ae0OZ3a7cM%2Fhbmd3%2FZgmNwwJSl9RHgLJc2cU91FLmrRsrlsPCKQOo8LWAWGUbIa8JFy7%2BdqT7VBBeHdMM%2Bty6RK6hkLgyGn55CklmwfLpgLptaIXHRToSCuR17MpoR%2FwTd42YBuOoJdzf0Y214UiitCzwAEgrSMS1uPw%2FGgYKjWA%3D%3D%7Ctkp%3ABk9SR9S1vJGhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/rWjhSc' ),
    listing_name  ( 'ya08285 Engineer Japan PA-21 universal mini micro crimping tool molex amp crimp' ),
    item_price    ( 'US$48.71' ),
    item_shipping ( 'US$9.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/296108953694?epid=21011373122&hash=item44f178105e%3Ag%3AaGcAAOSw4p1le1mn&amdata=enc%3AAQAIAAAA0GDYLohX24j50D84j7yxvuchoIe8u0uRE8UxOAs6Vjd5abpe7ZHPdXtbTSP3Lw4rlb6L7PJCYkgSUIhHHoHW9wvWVWBmjDq29bNRu9WxPp7SqxQgee8iA56YcjuvAt7%2FMArA9WASPcxy1UApaQUdO8x3%2BkExLwWeBVT2lZvlXMWwjvG0jrrgcdcyHyogD6ohAuGLNFVcYUKicA9zNys7yNnsAMbaLvI32QACAMg%2Ff5pXXhBOefLPJdZqkHqSM8Tbx5xAdEfO7BdoN8PWk176L7g%3D%7Ctkp%3ABk9SR9S1vJGhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/aoEEm6' ),
    listing_name  ( 'Engineer PA-21 Universal Mini Micro Crimping Tool Molex Amp Crimp F/S w/Track#' ),
    item_price    ( 'US$61.87' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/115908345595?epid=21011373122&hash=item1afcacfefb%3Ag%3AFf4AAOSwV0Jk-CUI&amdata=enc%3AAQAIAAAA0NsSC91CwAmztpK1FAASu9pXQrQgKH3kpNJivFjPDdrGvHWQOR%2Fczuq5tQ60w8dp4kHvWWsNbfh%2F4GHOQNWFFI1VXzi0z2IO8DxJdF1HuHcHYXhuuZeY6HXJ%2BSoAf4LhpK22jD%2BiVacCqJUdKCxUxA6cedIaEobOMEldLmsOuimg9aIHrfcV375sc1f1VVNefCfggDFcril7uI5lsX9mQ3n2zNiAxM%2Favm8B658HMe10XUH%2Bb6IAbIw2ZnMGiY%2FDG3W%2BqXDcUOFHdlgfQeYNFS8%3D%7Ctkp%3ABk9SR9S1vJGhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/D4sUcC' ),
    listing_name  ( 'Engineer PA-21 Universal Mini Micro Crimping Tool Molex Amp Crimp F/S w/Track#' ),
    item_price    ( 'US$61.87' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=ENGINEER+PA-21+Crimping+Tool' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/161388380816?epid=21011373122&hash=item25937f4290%3Ag%3AsxoAAOSwEK9T4w6P&amdata=enc%3AAQAIAAAA0C8MjvwPIlq3eNhZQWo8qVSAIszTWSHOHl3RycICTdi0ojFsSj3i2IR7IbEgEV0AlTYp2lZQjN0S%2FdISUty5gWoAlHifPzTkhvgrwZmgT1mestBvajKThT0KLzSu7xZB%2FLs9eJ0WSonLYEp%2FvvC2gTBSidukAqgD%2FXtj4L2MpsjUCFyF2cpUUnCtqqDHhYgrV4BqTCTGTsybw%2FYmeMPva4SEofhLKLRXN2fylX6Lej8QgUS7vuX0vhu%2Fn6zrFTvtPyAGkLuhBVa1kWvfjO31VrM%3D%7Ctkp%3ABk9SR6CLzZGhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/tzCbCm' ),
    listing_name  ( 'ya08285 Engineer Japan PA-21 universal mini micro crimping tool molex amp crimp' ),
    item_price    ( 'AU$79.98' ),
    item_shipping ( 'AU$14.77' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/252021529409?epid=1109936718&hash=item3aada75b41%3Ag%3AaYAAAOSwxfVhgB6j&amdata=enc%3AAQAIAAAA0Kdajmz90cwmIx65vrB6mMqkHOPzujSxwHv7TnQ%2BQpM4HSp7529n7TQw4u7YQBbvO9t0PRBWjbBYE5jdDZYr105s4x0cztlPOKqsj1TQ16iBr3xwGnChK6eabjKRiO4qnYquupCdigQofMjbfhM2qvARgUKyGqE%2Fqpe9RNVwFsWq%2Bn24XK%2FbOQAXr%2BcVGA4OS6B3zwcMvqESIsoGmY7KhDAloE3R5fy3DadnSZeYGkrPVfqhJoJHwuSkndZ%2FyWr57dDNbT6jSFxesH8uG9tUgq4%3D%7Ctkp%3ABk9SR6CLzZGhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/mak25G' ),
    listing_name  ( 'Universal CRIMPING TOOL mini crimps Molex JST PC Tyco Amp Servos Engineer PA-21' ),
    item_price    ( 'AU$74.78' ),
    item_shipping ( 'AU$23.09' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/296108953694?epid=21011373122&hash=item44f178105e%3Ag%3AaGcAAOSw4p1le1mn&amdata=enc%3AAQAIAAAA0GDYLohX24j50D84j7yxvuchoIe8u0uRE8UxOAs6Vjd5abpe7ZHPdXtbTSP3Lw4rlYhrgS9wl%2Bg2uyeOzX5OHd1OS2sm5oeNDTyTYwwi%2BqzrAdKO2bOAvgIwK5LwhelRlvRfrt1p9BztPVNMMnVlcC8fLyh1GTHBAj0k27pdkAn3xq%2FZ91KdZxPJIoN5tMTYjWLRVaPselMDqkNc%2FcmUM2s9pVh2vSThwYwQqP57IRzqcAv2HH5e7v8S%2FrkwBQFeEpdNMvS0glT8N3U3k4WB0NM%3D%7Ctkp%3ABk9SR6CLzZGhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/eJSo8P' ),
    listing_name  ( 'Engineer PA-21 Universal Mini Micro Crimping Tool Molex Amp Crimp F/S w/Track#' ),
    item_price    ( 'AU$101.59' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-ENGINEER-PA-21.html?spm=a2g0o.productlist.search.0' ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B002L6HJ8W/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&th=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-7709053-4855033' ),
    order_id        ( '249-7709053-4855033' ),
    order_date      ( '7 September 2023' ),
    order_item_name ( 'ENGINEER PA-21 Engineer Precision Crimping Pliers, Crimping Tool, Open Barrel, Long Barrel Terminal' ),
    order_price     ( 'AU$82.00' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71H5KDb6+iL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.engineertools-jp.com/pa092021' ),
      link_text       ( 'PA-09 / PA-20 / PA-21  Connector Crimping Pliers' ),
    ),
    manufacturer_name ( 'ENGINEER' ),
    model_name        ( 'PA-09' ),
    EquipmentFeature::CRIMPING_TOOL,
    EquipmentFeature::PLIERS,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'ENGINEER' ),
    model_name        ( 'PA-09' ),
    equipment_type    ( 'Crimping Tool' ),
    category          ( 'Crimping Tool' ),
    category          ( 'Hand Tool' ),
    manufacturer_link (
      link_href       ( 'https://www.engineertools-jp.com/pa092021' ),
      link_text       ( 'PA-09 / PA-20 / PA-21  Connector Crimping Pliers' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/ENGINEER_PA-09' ),
  see_also      ( 'ENGINEER PA-21 Crimping Tool' ),
  search_url    ( 'https://www.amazon.com/s?k=ENGINEER+PA-09+Crimping+Tool&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Engineers-Precision-Crimping-Pliers-Pa-09/dp/B002AVVO7K/ref=sr_1_1?dib=eyJ2IjoiMSJ9.J9FwDKB_oH393uNbrmyJY0rlwykBKuWL1cR2nIl3cHcyI8fOesNsHLCMgWoOkkLedIhr4EugE41wA5-7hyeBCXfklHJlEQImpjh_9Nn_Kc4.E9iLp557_Rxc1WivAAfGonSFqpvlpYsUnhpgZwLijoY&dib_tag=se&keywords=ENGINEER+PA-09+Crimping+Tool&qid=1705256626&sr=8-1' ),
    affiliate_url ( 'https://amzn.to/4aTgHG7' ),
    listing_name  ( 'Engineer Precision Crimping Pliers for Open Barrel Terminals PA-09' ),
    item_price    ( 'US$34.60' ),
    item_shipping ( 'US$17.63' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/ENGINEER-Precision-Crimping-Pliers-BPT-PCH/dp/B0CBL3H81Q/ref=sr_1_2?dib=eyJ2IjoiMSJ9.J9FwDKB_oH393uNbrmyJY0rlwykBKuWL1cR2nIl3cHcyI8fOesNsHLCMgWoOkkLedIhr4EugE41wA5-7hyeBCXfklHJlEQImpjh_9Nn_Kc4.E9iLp557_Rxc1WivAAfGonSFqpvlpYsUnhpgZwLijoY&dib_tag=se&keywords=ENGINEER+PA-09+Crimping+Tool&qid=1705256626&sr=8-2' ),
    affiliate_url ( 'https://amzn.to/4aVGyx2' ),
    listing_name  ( 'ENGINEER PA-09 Precision Crimping Pliers & BPT-PCH Tool Pouch (Made in Japan)' ),
    item_price    ( 'US$41.50' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=ENGINEER+PA-09&crid=LMYWIG0O4GMJ&sprefix=engineer+pa-09%2Caps%2C246&ref=nb_sb_noss_1' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/ENGINEER-PA-09-Super-Precise-Open-Barrel-Narrow-Pitch/dp/B002AVVO7K/ref=sr_1_1?crid=LMYWIG0O4GMJ&dib=eyJ2IjoiMSJ9.3WsXc4VS16laG_ZoxwbrnNOsHR5rUpEDRWgUmwrrn-eIfCJ6QVem8rX7GsThG4Rb7h6LuWoAjAIZkio1eklibjae977JfJimU_mjEqpduPdzW1eMlWZSAScgroueHyuc3V2Rje0jYLeDvFUIOyy-UQ.P_K3cYQ3UPLf5NBmB8KtA0S5MrXSA_tf1Y32oxa93p0&dib_tag=se&keywords=ENGINEER+PA-09&qid=1705256773&sprefix=engineer+pa-09%2Caps%2C246&sr=8-1' ),
    affiliate_url ( 'https://amzn.to/47BTKV4' ),
    listing_name  ( 'ENGINEER Universal crimping tool for crimping different crimp connectors from major connector manufacturers. PA-09' ),
    item_price    ( 'AU$70.00' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=ENGINEER+PA-09+Crimping+Tool' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/353504034126?epid=710099147&hash=item524e7b7d4e%3Ag%3AdjwAAOSw7G9gpy7X&amdata=enc%3AAQAIAAAA8DF4rnlv%2BS%2B6CZB7lH0zHYqhtexMfMMBL8flsVlz3rnJoaaiYXxwOhwOy3Ykzbnk1jYBsCvt2hrnwHzr2NpKWW1v9hPm4QfZWx63XQ9HTT%2BtO7rMFqa%2FJMsvfhVo1ISYfKt1VPfzc9OTpC7bItir7qcJWBWnSj2ikoQCguS2BD1xiXFH51sTwO5cu8NdOAD59z5aXUOMolkhshCskMQmFtawYn3tjC1qfJotqheA9NIWUdD105u5vN%2BfgmQcbZ6lnLI1ymp5vPFpoqOhY9vY%2F94MPgO879uyMgmxc%2BtxjJhSoFW00NkqL%2FLfOzrnNlrI6A%3D%3D%7Ctkp%3ABk9SR66-0ZOhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/Jeqe2H' ),
    listing_name  ( 'PA-09 Micro Connector CRIMPING TOOL Pliers Molex JST AMP mini Crimpers' ),
    item_price    ( 'US$52.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/204614499224?epid=710099147&hash=item2fa3f97b98%3Ag%3Adt0AAOSw6AJloWQr&amdata=enc%3AAQAIAAAA0Mmm5zIids0fxRB7sg79y%2BPYMztOoQ4B6chAWM3utBcRblo7s5yp5FJGSUHePptwlBQg9DRUnJ1CprGudN6KwPBRAeYQnb%2BHYyVZDng9LKwOrbU31W%2BxugWHOiRUUazLBj8impTGQ2HtcE%2F0TpIUPKArz3bWQuE8HY6csqxqpg7Rgao6So2SVClyabfWOLwTAjJwV5GH7XrTbJSnPf9cL0o2kI3p6C66e0cVnNL7%2BoPjlZrqzFNOHYZryISSuWAErRXtCt6Pl1coX737HiieQUU%3D%7Ctkp%3ABk9SR66-0ZOhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/UthRun' ),
    listing_name  ( 'Engineer PA-09 Mini Molex Amp JST Crimp Tool Wire Terminal Crimping Pliers F/S' ),
    item_price    ( 'US$58.63' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/115712982611?epid=710099147&hash=item1af107fe53%3Ag%3AYdsAAOSwPYNj9Sbf&amdata=enc%3AAQAIAAAA8P2WlZzlT0WzxvvuYOeMUJGNWl7Ri2w3kP1BmIazQOvWy83UdcZmu4QH5U7PZsQtHY7WzRG6oP%2BUx13oe0zySb1zn%2FImfnY9S8NrmEyZwngouEEtLux8vUYl%2FPEafizCOOoSmW7YqJoE27jrG2s5i1%2B6lRT3HUInK%2Bqs3F0%2FNKetj%2F6%2BArrJXRczK0vKJQDRDp3evCGS2TWBCNjwLJ3kwKTd9KXsR95Rc6EsYFwkHwHLqSMJWYgK%2BKDj4FhUIEfcw%2BdNCfj9PijPgIFg9Yr1T4Ki384SK1KcNNKh1eRLMbbUUhE%2Fzl5%2F8eaHdA6od7IwDQ%3D%3D%7Ctkp%3ABk9SR66-0ZOhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/ufrYV9' ),
    listing_name  ( 'Engineer PA-09 Mini Molex Amp JST Crimp Tool Wire Terminal Crimping Pliers F/S' ),
    item_price    ( 'US$58.63' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=ENGINEER+PA-09+Crimping+Tool' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/353632218549?epid=22024813963&hash=item52561f6db5%3Ag%3AdjwAAOSw7G9gpy7X&amdata=enc%3AAQAIAAAA8INZjqY%2FgMsPNgmVxGj7TCDhiOYnkYVVefuOF%2Fgqt8mbHXHWAq8MK7k2gHbiMmvYVt07YM%2FybFXZ4VAR%2B%2BDEOkn7d01Y5NEavLBoqC0%2Bw%2FYZvvPcvfknfsF%2Be6avlvl5CR4wf4rzIWWsyLP%2F2FLl6%2BzTXJsgecDAVX%2B2jGi%2BUm3s%2F1tpU%2B1fyCNPiVsk2w8l7jHOYo55cYCVb0yIs0LP0DlIivIxX%2BXXnXsYGMA7OCRtyjpXIi0yJfNfcoNt6NjKncC5tpRGTZfXJE1ZokPMycTLGJQaNjvF7CwBw%2BlHc%2FKmoaKo3irK0f%2FAnFcg5YzAkA%3D%3D%7Ctkp%3ABk9SR-iq5ZOhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/s8cMLV' ),
    listing_name  ( 'PA-09 Micro Connector CRIMPING TOOL Pliers Molex JST AMP mini Crimpers' ),
    item_price    ( 'AU$95.10' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/115712982611?epid=710099147&hash=item1af107fe53%3Ag%3AYdsAAOSwPYNj9Sbf&amdata=enc%3AAQAIAAAA8P2WlZzlT0WzxvvuYOeMUJGNWl7Ri2w3kP1BmIazQOvWy83UdcZmu4QH5U7PZsQtHY7WzRG6oP%2BUx13oe0zySb1zn%2FImfnY9S8NrmEyZwngouEEtLux8vUYl%2FPEafizCOMMLJIb1bJuxYzqwqawzCI9npM2JYKlNqYTYGfTQ6io2RlGVct%2FQciKdjdW8eB1EBc1KFQ6zhrq4NrbPf4kvupYwDQCSU4YzjZYX18%2FJ0MW%2BuMRCV4QT9g54nVXvMoxE09UJOx3M8qdveq52pBYvACo9uoWnwPilDgMMAz%2F0bi30HHxN13upUEaN12v9kzJUaQ%3D%3D%7Ctkp%3ABk9SR-iq5ZOhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/6jHCYg' ),
    listing_name  ( 'Engineer PA-09 Mini Molex Amp JST Crimp Tool Wire Terminal Crimping Pliers F/S' ),
    item_price    ( 'AU$96.26' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/204614499224?epid=710099147&hash=item2fa3f97b98%3Ag%3Adt0AAOSw6AJloWQr&amdata=enc%3AAQAIAAAA8Ixa7B6YAxq%2Foel%2F9bBVLuQG1xJT3UE6Q8E9OVQtgnCYVn%2F5HhUyZ3VcBqTwT3BbkSLyPaQVIz9GA3xCGTZEX%2BigYspoHO3D1SrzwXaMHgZkBbPMjB6Z7lyAUUTWJVu2vi7XgKDUY0iNpgHNblh%2Bfhw2DSOVeTWQ92tDLTyRQOnqPRhqcef%2FzZTJJnEvZx9hT3JHrWPE%2F%2BaDwPjkG%2FFsm97mjbKbowjiwDBpyQk6SnLriocrYNs45sLNwJp%2B849SqT9DgAfboVHYFyqMN0eAxhor1lJbfARlqYctbHtuHWQ6lwzLbQUKlpqYgauKEwYuvw%3D%3D%7Ctkp%3ABk9SR-iq5ZOhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/athOw7' ),
    listing_name  ( 'Engineer PA-09 Mini Molex Amp JST Crimp Tool Wire Terminal Crimping Pliers F/S' ),
    item_price    ( 'AU$96.26' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-ENGINEER-PA-09-Crimping-Tool.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006392903132.html?spm=a2g0o.productlist.main.1.44e86135oqlNpe&algo_pvid=227a016d-87f7-4e9d-8d2b-7d9f92be3ce5&algo_exp_id=227a016d-87f7-4e9d-8d2b-7d9f92be3ce5-0&pdp_npi=4%40dis%21AUD%21165.89%2199.53%21%21%21786.19%21471.71%21%402103201917052571153832850ea21f%2112000037005741125%21sea%21AU%214385823938%21&curPageLogUid=jUMOGUbxfLAY&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DmSBZhX' ),
    listing_name  ( 'Precision Open Barrel-Shaped Terminal Crimping Pliers PA-09 Engineer Brand Model' ),
    item_price    ( 'AU$99.53' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B002AVVO7K/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&th=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=250-0762616-2249409' ),
    order_id        ( '250-0762616-2249409' ),
    order_date      ( '26 October 2022' ),
    order_item_name ( 'ENGINEER Universal crimping tool for crimping different crimp connectors from major connector manufacturers. PA-09' ),
    order_price     ( 'AU$73.50' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S1926ecb425ff47b3a0460fa621ad03e23/DSO-TC3-Digital-Oscilloscope-Transistor-Tester-10MS-s-Sampling-Rate-500kHz-Bandwidth-Support-Diode-LCR-Detect.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'FNIRSI' ),
    model_name        ( 'DSO-TC3 3 in 1' ),
    EquipmentFeature::OSCILLOSCOPE_SIGNAL_GENERATOR_COMPONENT_TESTER,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'FNIRSI' ),
    model_name        ( 'DSO-TC3' ),
    equipment_type    ( '3 in 1 Oscilloscope, Signal Generator, Component Tester' ),
    category          ( 'Oscilloscope' ),
    category          ( 'Signal Generator' ),
    category          ( 'Waveform Generator' ),
    category          ( 'Component Tester' ),
    category          ( 'Transistor Tester' ),
    category          ( 'Multimeter' ),
    category          ( 'LCR Meter' ),
    category          ( 'Meter' ),
    category          ( 'Test Equipment' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/FNIRSI_DSO-TC3' ),
  see_also      ( 'Rigol MSO5074 Mixed Signal Oscilloscope' ),
  see_also      ( 'Kingst LA1010 USB Logic Analyzer' ),
  search_url    ( 'https://www.amazon.com/s?k=FNIRSI+DSO-TC3+Component+Tester&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Oscilloscope-Generator-Transistor-Bandwidth-Transistors/dp/B0CHW414W1/ref=sr_1_2?dib=eyJ2IjoiMSJ9.wO328khD2SHT_OBw63UF7VF7odEtiP3Skexe-VLtLEw.tznWaavH26GxZaZJoCmXiMiMdMfM8GpX6ZYONkl6yLg&dib_tag=se&keywords=FNIRSI+DSO-TC3+Component+Tester&qid=1705257907&sr=8-2' ),
    affiliate_url ( 'https://amzn.to/47GcnHb' ),
    listing_name  ( 'DSO-TC3 Handheld Digital Oscilloscope 3 in 1 Handheld Oscilloscope, DDS Signal Generator and Transistor Tester, 500Khz Bandwidth 10MSa/s Sampling Rate, 6 Types of Waveforms, Transistors Measure' ),
    item_price    ( 'US$44.68' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=FNIRSI+DSO-TC3+Component+Tester&s=price-asc-rank' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=FNIRSI+DSO-TC3+Component+Tester' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/145011153411?hash=item21c3569a03%3Ag%3AEjEAAOSwnK9kJWoe&amdata=enc%3AAQAIAAAA0NcYuqQtkvOTTRw0hl9T1UeHh%2BGmmuHvgJGNwkpG%2BtcRniVcV%2B%2Bw4LEZmT1zeIWtCzsGmBt2cnLgkmMejdoXDi6B4ipLkEJJRrdJDujlxGcElZuNYcgXDosJllt%2BZSD682fdRblXX6QZQSMEzt2dKVZNAMmsRaS%2BZ5L1mvXIejCEh1wsoBPLL1Fs67ED%2Bf%2FZZiEFA1CYqdePkYKxkRpgWLhX2iIIfymg%2Bcs7otB2ksNN%2FBtGmNChBEPU0cGf6ZuVHmaQEzst6LRJC1nbjkwoZ%2FQ%3D%7Ctkp%3ABk9SR6Lt7JShYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/aLRmu7' ),
    listing_name  ( 'FNIRSI DSO-TC3 Digital Oscilloscope Transistor Tester LCR Signal Generator 3 in1' ),
    item_options  ( 'Color: NO.2 (Advanced)' ),
    item_price    ( 'US$56.99' ),
    item_shipping ( 'US$1.48' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/314712523019?hash=item494654010b%3Ag%3AT30AAOSwEPlksd-c&amdata=enc%3AAQAIAAAA0Gvoo%2BB8LMu0QOqRbfTM9nKPK9CaCECcqPVLON2asSdGanNXaRk0u3anW1iq6DoFDBPSWDCX915TJDclu%2Bs6PFigoL71%2Bvpgi0Vom2N58S%2FBp9OkyduEfLCb%2BXF1EuqoQN%2FZTdRZOTeu9CWdUcx6wfnxlKiQX70ti%2BE0Ivtmx0%2BPCF3iF2ZAg66ZtLQa8tH33vW%2F4vZcV2HED%2BxFggdOsFq1TAXe45wLM%2F5RbQu96qMgY6axWLJNXOCADo9NBzLYl1GNsL2GP6dD4m9tiYxcsNo%3D%7Ctkp%3ABk9SR6Lt7JShYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/CfGTmn' ),
    listing_name  ( '3 in 1 FNIRSI DSO-TC3 Digital Oscilloscope Transistor Tester Signal Generator-' ),
    item_options  ( 'select: Advanced Version' ),
    item_price    ( 'US$60.30' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/354638851320?hash=item52921f6cf8%3Ag%3AnYgAAOSweO9kCuEM&amdata=enc%3AAQAIAAAA8L38ZRif7oFpPPHrjunPMcyCTgwNNpeNW1LyQK6DrUeoxjjszr%2Bq2TlBYW7FIxOw3Bs%2B%2FD5JaaizunwQF%2FgCOMte%2FX1LjQnHBRI%2F2zIKm2bnPrlYgHlSepIYZyp0HKXElNqN%2BWm9MJdIAgHS7jHVCt9%2B2BBtTRmyr8CESCvnQqi%2FzOrEeICl2Oke3wrNnjpzqLwHtBgYnxjSCMnr4CvYyQI7opbESN6fSRqdP9iw9Jq30xT0I%2Bd71Kh2BKTI6%2FFCVuvGvuaRM%2BqVxkfORpTODvDGbVxaB%2FF9Jn1CwGWVQ41dbBOD%2ByrYl3bzxgcIYWRRuw%3D%3D%7Ctkp%3ABk9SR6Lt7JShYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/X9WsSU' ),
    listing_name  ( '3 in 1 FNIRSI DSO-TC3 Digital Oscilloscope Transistor Tester Signal Generator' ),
    item_options  ( 'select: Advanced Version' ),
    item_price    ( 'US$59.99' ),
    item_shipping ( 'US$1.99' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=FNIRSI+DSO-TC3+Component+Tester' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/394803504755?hash=item5bec1f6673%3Ag%3AkesAAOSwYvVk1Ipg&amdata=enc%3AAQAIAAAA8Ds1NdiyDoUirZLBln4tPBKRAAsy1hg3%2F%2BNRgbA7qP9xrbdH3ylFZCy0FlJ6il4FDzKwwSNVQlsrOUu9O6SOOBUeP9zmFyVDjS8LjRRjuXf45ehwt8rhpeKXNalgi0P4tfuyBZantRPV6CgZnL0AqOuOnYXYejqsXgNSe4%2BZOK0Lmm6TNVTFpQwjboFJ%2BhPH%2BumDyRd9N1uLOveakIWQavHBJ1yGME8CJYqA3dXxEgcrfgZYEn5NYaH%2BV6cqK%2BGdtE0s0Pe%2Fch5uODJDE2QJoSrqrenW8Tz7yqkZS2Ych1IE4GfmsoanLN7N4b1KhR1ngQ%3D%3D%7Ctkp%3ABk9SR47IjJWhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/A9YPuD' ),
    listing_name  ( '3 in 1 FNIRSI DSO-TC3 Digital Oscilloscope Transistor Tester Signal Generator AU' ),
    item_options  ( 'model: Advanced Version' ),
    item_price    ( 'AU$72.19' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/314464093682?hash=item49378545f2%3Ag%3Aw3UAAOSwXRpkECPb&amdata=enc%3AAQAIAAAA8DCNkVZm8%2F7U5wj3SaBIdOd9U%2BZ2SRM%2BZEHF%2BeJqzyBiakwFvc63J7bKER7rFbIN%2F3PfATkwnOjszBKSPWT0X68etiYrohke5zS3%2FTtRUyJ11jWkmN1wEHiO2UhZsEmf%2Bh2JPov4OWmxzrl6SDzklEgVDwG%2BQKBdpxHHLhE1%2B4MYK5XhHXbxASR7BDadhSv3bKN4ROuLtJzuHMb4jntUHs%2Fmjg3Zi5HU8tAFQGOCcdtVXDrDiAOS9%2F5sTDHW4K6mIj8X1SpRJAtsSvusLC%2B8214w3QLagiegMqcJ3CDXwE12ai26sdVK%2Bu%2FGnzGnudrQHA%3D%3D%7Ctkp%3ABk9SR47IjJWhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/O8pZiC' ),
    listing_name  ( '3 in 1 FNIRSI DSO-TC3 Digital Oscilloscope Transistor Tester Signal Generator' ),
    item_options  ( 'Model Type: Advanced Version' ),
    item_price    ( 'AU$86.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/285390145002?hash=item42729405ea%3Ag%3AowIAAOSwxfxkt6bT&amdata=enc%3AAQAIAAAA8DXkmpM5k1PkqAgQvpLMfMwfAWQlZUV02OIib3Xj5nFRSY7TTAvEfpDDMJRRPE%2Fjed4B1LFOs2A%2Fat0zTE9Na2isZWIfBrTa4lW0ntQyJvePz0PDFcEsIH5GxtYjtIHXqToTZD7Yg95EQoDdXIALhi9YceP9cXJI3pKWzuQTVN%2Fifkw1xll51gvQGftw5tQxwGjhCMARKr%2BWOqVnsvct98gQoSna%2F6ts%2BJMczjVsgsdpm%2FPPwYun1KXvpftOUcb91cn2KZGF28qsOztmggeesQ7sOmg3f5ObQC52DqBanwF1qCV%2BPw6eNaK5z3aNkvVEYg%3D%3D%7Ctkp%3ABk9SR47IjJWhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/HEO3xZ' ),
    listing_name  ( '3 in 1 FNIRSI DSO-TC3 Digital Oscilloscope Transistor Tester Signal Generator' ),
    item_options  ( 'Model Type: Advanced Version' ),
    item_price    ( 'AU$86.99' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-FNIRSI-DSO-TC3-Component-Tester.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004347800646.html?spm=a2g0o.productlist.main.9.42ad3ecc4j4HHE&algo_pvid=827a7eb0-8906-492d-a78a-0f2105b7de7e&aem_p4p_detail=202401141055299511976975261640016420023&algo_exp_id=827a7eb0-8906-492d-a78a-0f2105b7de7e-4&pdp_npi=4%40dis%21AUD%21118.50%2171.11%21%21%2178.36%2147.02%21%40210318c317052585294141908e89eb%2112000034761891676%21sea%21AU%214385823938%21&curPageLogUid=RYqFvWVMCHii&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=202401141055299511976975261640016420023_5' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DdFc0QN' ),
    listing_name  ( 'DSO-TC3 Digital Oscilloscope 10MSa/s Sampling Rate 500kHz Bandwidth Support Diode PWM Transistor LCR Test Signal Generator' ),
    item_options  ( 'Color: DSO-TC3 Set 2' ),
    item_price    ( 'AU$78.63' ),
    item_shipping ( 'AU$2.60' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005429072370.html?spm=a2g0o.productlist.main.11.42ad3ecc4j4HHE&algo_pvid=827a7eb0-8906-492d-a78a-0f2105b7de7e&aem_p4p_detail=202401141055299511976975261640016420023&algo_exp_id=827a7eb0-8906-492d-a78a-0f2105b7de7e-5&pdp_npi=4%40dis%21AUD%21113.00%2170.06%21%21%21535.53%21332.03%21%40210318c317052585294141908e89eb%2112000033033584386%21sea%21AU%214385823938%21&curPageLogUid=1IUmBaofmENM&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=202401141055299511976975261640016420023_6' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DmBtCp7' ),
    listing_name  ( 'FNIRSI DSO-TC3 Digital Oscilloscope Transistor Tester Function Signal Generator 3 in 1 Multifunction Electronic Component Tester' ),
    item_options  ( 'Color: NO.2(Option)' ),
    item_price    ( 'AU$77.54' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005853323433.html?spm=a2g0o.productlist.main.19.42ad3ecc4j4HHE&algo_pvid=827a7eb0-8906-492d-a78a-0f2105b7de7e&aem_p4p_detail=202401141055299511976975261640016420023&algo_exp_id=827a7eb0-8906-492d-a78a-0f2105b7de7e-9&pdp_npi=4%40dis%21AUD%21113.00%2171.19%21%21%21535.53%21337.38%21%40210318c317052585294141908e89eb%2112000035838216958%21sea%21AU%214385823938%21&curPageLogUid=qDR571ztwi9F&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=202401141055299511976975261640016420023_10' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DCTctbT' ),
    listing_name  ( 'FNIRSI DSO-TC3 Digital Oscilloscope Transistor Tester Function Signal Generator 3 in 1 Multifunction Electronic Component Tester' ),
    item_options  ( 'Color: NO.2(Option)' ),
    item_price    ( 'AU$78.79' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005202074391.html?spm=a2g0o.order_detail.order_detail_item.3.5462f19co76da3' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.111.764218021V85h7&orderId=8174558501503938' ),
    order_id        ( '8174558501503938' ),
    order_date      ( 'Sep 2, 2023' ),
    order_item_name ( 'FNIRSI DSO-TC3 Digital Oscilloscope Transistor Tester Function Signal Generator 3 in 1 Multifunction Electronic Component Tester' ),
    order_options   ( 'Color: NO.2(Option)' ),
    order_price     ( 'AU$79.71' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$7.97' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/615T3s6PZyL._AC_SL1000_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Jackcat' ),
    EquipmentFeature::ELECTRIC_SCISSORS,
    EquipmentAttribute::CORDLESS,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Jackcat' ),
    equipment_type    ( 'Electric Scissors' ),
    category          ( 'Electric Scissors' ),
    category          ( 'Scissors' ),
    category          ( 'Hand Tool' ),
    category          ( 'Cordless' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Jackcat_Mini_Cutter' ),
  search_url    ( 'https://www.amazon.com/s?k=Jackcat+Electric+Scissors&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=Jackcat+Electric+Scissors&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/dp/B0C2CQCWGN' ),
    affiliate_url ( 'https://amzn.to/48SX0w9' ),
    listing_name  ( 'Yellow 220V Cordless Electric Scissors, Electric Mini Cutter, Rotary Cutter for Fabric and Cloth, Carpet and Cardboard Cutter' ),
    item_price    ( 'AU$75.66' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Jackcat+Electric+Scissors' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/134207139773?_trkparms=amclksrc%3DITM%26aid%3D1110006%26algo%3DHOMESPLICE.SIM%26ao%3D1%26asc%3D258818%26meid%3D9e45efa41b6d4e94b79f9c9285bd69ab%26pid%3D101875%26rk%3D2%26rkt%3D4%26sd%3D355154597357%26itm%3D134207139773%26pmt%3D1%26noa%3D0%26pg%3D4429486%26algv%3DSimplAMLv11WebTrimmedV3MskuWithLambda85KnnRecallV1V2V4ItemNrtInQueryAndCassiniVisualRankerAndBertRecallWithVMEV3CPCAuto%26brand%3DUnbranded&_trksid=p4429486.c101875.m1851&amdata=cksum%3A1342071397739e45efa41b6d4e94b79f9c9285bd69ab%7Cenc%3AAQAIAAABYObhgc4Nk8%252BdtAwOww4FKLaj%252FQ5qqgDlQCuqZA43WcPFUWDERCUugbbOk7XQv0JXlBfqCg2xKF3WcPghxGMFw2oSlXvfExEaMYr7I7LmrHcP6czY1wIMt0ORyKiCWt95xldincyyBx3g%252BNDW%252B%252FhWUgTaBhK6xAm%252BJIbCOMehu%252BdwPhNLQvwg4UhPTHrWIZiGGa%252FJCCtSlRUPPc9JPwg9nnjRPLVOeuuwdwHjGFj4u3fYxZAfRriwrKyH%252BXjULBRCagl9zjUV8Hs420K%252Fy%252F15za0R1%252F5AUvlIar%252B1XRMdF%252FY6i6X7jQj2%252BKs%252FMxBtn5bKlxQ7PFw2PGq5SU2Zn2dplkWdVpoOxD%252BwPrP26zIvMQ2UIoZ0ew70sDMCs24js90nsrWkYpTZCRxCLYsYQ3y805oIQ72SWTWpSApVnCen82wWfAf6I6G8DZ9flQC2JKu8FRJFyKLWIoDTbzl%252B%252FQP0BjI%253D%7Campid%3APL_CLK%7Cclp%3A4429486' ),
    affiliate_url ( 'https://ebay.us/pmc8Tm' ),
    listing_name  ( 'Cordless Electric Scissors Rotary Shear Fabric Leather Cloth Cardboard Cutter' ),
    item_price    ( 'US$39.20' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Jackcat+Electric+Scissors' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/175781120355?hash=item28ed5f0963%3Ag%3AMNAAAOSwIGxkkW0F&amdata=enc%3AAQAIAAAA8LwMBXXbQsNQLx2HGxMgqezVhuOnoAZamSWwu%2BzLuROAUSRCZyGYMrrkIPmQGAly%2BqQ%2FICVsVVHxX9%2BRxQThvmXPCySwyg8fgSEzWQfoLBqfSA7CrHeeYUr8xsiK02zkJ8rjCIWZ4GffnksV6h9c5F94BtMAzTtA0FFxB0oBFesetUTgaBZXiOOYIJXRXgUHGS6d2JHzQs6p0Ou5%2F6ySvMABbbJRnGkKlnG3YNjbvrqTtmHud2uoCDx9qVF8R0u3hov0RdVOmC6AAuCYwoHWY1ySDR4Emczq4zAKjXj1%2FgHhgIV2FAe8QNYPriZvCs8sGg%3D%3D%7Ctkp%3ABk9SR8yY55WhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/7LuCOF' ),
    listing_name  ( 'Electric Scissors Cordless Fabric Cutter PVC Leather for Crafts Sewing Cardboard' ),
    item_price    ( 'AU$36.58' ),
    item_shipping ( 'AU$0.50' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Jackcat-Electric-Scissors.html' ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B0C2CQCWGN/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-7863157-4181402' ),
    order_id        ( '249-7863157-4181402' ),
    order_date      ( '19 August 2023' ),
    order_item_name ( 'Yellow 220V Cordless Electric Scissors, Electric Mini Cutter, Rotary Cutter for Fabric and Cloth, Carpet and Cardboard Cutter' ),
    order_price     ( 'AU$75.66' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71nYA4phpmL._SL1500_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.qdkingst.com/en/products/LA1010' ),
      link_text       ( 'Product Selection of Logic Analyzer' ),
    ),
    manufacturer_name ( 'Kingst' ),
    model_name        ( 'LA1010' ),
    EquipmentFeature::USB_LOGIC_ANALYZER,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Kingst' ),
    model_name        ( 'LA1010' ),
    equipment_type    ( 'USB Logic Analyzer' ),
    category          ( 'Logic Analyzer' ),
    category          ( 'USB' ),
    category          ( 'Test Equipment' ),
    manufacturer_link (
      link_href       ( 'https://www.qdkingst.com/en/products/LA1010' ),
      link_text       ( 'Product Selection of Logic Analyzer' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Kingst_LA1010' ),
  see_also      ( 'Rigol MSO5074 Mixed Signal Oscilloscope' ),
  see_also      ( 'FNIRSI DSO-TC3 3 in 1 Oscilloscope, Signal Generator, Component Tester' ),
  search_url    ( 'https://www.amazon.com/s?k=Kingst+LA1010+USB+Logic+Analyzer&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/LA1010-Analyzer-channels-software-instrument/dp/B07D21GG6J/ref=sr_1_1?dib=eyJ2IjoiMSJ9.kiDryW7vBKP_OmmUyW6kwrYL__QQv1InBvF0ST3CbtrGjHj071QN20LucGBJIEps.IiP70zU_qB-ivEmOFzVcrquXtQynFY6hli8b0gdTjo0&dib_tag=se&keywords=Kingst+LA1010+USB+Logic+Analyzer&qid=1705259254&sr=8-1' ),
    affiliate_url ( 'https://amzn.to/3S1Nwbh' ),
    listing_name  ( 'LA1010 USB Logic Analyzer 16 Input Channels 100MHz with The English PC Software Handheld Instrument,Support Windows (32bit/64bit),Mac OS,Linux' ),
    item_options  ( 'Style: LA1010' ),
    item_price    ( 'US$69.99' ),
    item_shipping ( 'US$18.40' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Analyzer-Channel-LA1010-Interface-Device/dp/B0BCSPV4YQ/ref=sr_1_2?dib=eyJ2IjoiMSJ9.kiDryW7vBKP_OmmUyW6kwrYL__QQv1InBvF0ST3CbtrGjHj071QN20LucGBJIEps.IiP70zU_qB-ivEmOFzVcrquXtQynFY6hli8b0gdTjo0&dib_tag=se&keywords=Kingst+LA1010+USB+Logic+Analyzer&qid=1705259254&sr=8-2' ),
    affiliate_url ( 'https://amzn.to/3NYeWO8' ),
    listing_name  ( 'Logic Analyzer 16 Channel Logic Analyzer Set LA1010 USB Interface Analyzer Device with Test Hooks and USB Cable' ),
    item_price    ( 'US$87.14' ),
    item_shipping ( 'US$19.11' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Analyzer-Channels-Digital-Adjustable-Threshold/dp/B0BCG1H1LY/ref=sr_1_3?dib=eyJ2IjoiMSJ9.kiDryW7vBKP_OmmUyW6kwrYL__QQv1InBvF0ST3CbtrGjHj071QN20LucGBJIEps.IiP70zU_qB-ivEmOFzVcrquXtQynFY6hli8b0gdTjo0&dib_tag=se&keywords=Kingst+LA1010+USB+Logic+Analyzer&qid=1705259254&sr=8-3' ),
    affiliate_url ( 'https://amzn.to/3O1EycO' ),
    listing_name  ( 'LA1010 USB Logic Analyzer, 16 Channels Digital Logic Analyzer with 100MHz Sample Rate, Adjustable Threshold, for Windows, OS, Linux' ),
    item_price    ( 'US$89.02' ),
    item_shipping ( 'US$19.11' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=LA1010&crid=26QDIEKZZJ8OA&sprefix=la1010%2Caps%2C227&ref=nb_sb_noss_1' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/MiiElAOD-Analyzer-Channels-Samples-Software/dp/B0CQ7TGZNJ/ref=sr_1_2?crid=26QDIEKZZJ8OA&dib=eyJ2IjoiMSJ9.ci_3vIGkCRsbMauH5aLlfxF44KS7k7A2Yt1Rz6Mb87SevEPWQ465ekcmt__gDLMYmc4-Sf55NBQzlsMkpYap-pSpooc2b6OGLV6w3bI__vg5yfAXO96MlYGc9-zNRobFEEZliGIzCcPNc4MDK1rCmg.g8aOqWH3NykYqinDv653H9dokpVVd43QvZ42Rd6F5yg&dib_tag=se&keywords=LA1010&qid=1705259519&sprefix=la1010%2Caps%2C227&sr=8-2' ),
    affiliate_url ( 'https://amzn.to/48Ak0QU' ),
    listing_name  ( 'MiiElAOD LA1010 USB Logic Analyzer 100M Max Sample Rate,16 Channels,10B Samples, MCU,ARM,FPGA Debug Tool English Software' ),
    item_price    ( 'AU$96.13' ),
    item_shipping ( 'AU$6.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Analyzer-LA1010-Analyzers-Spectrum-%E2%80%9150%E2%80%9150V/dp/B0CG4KQ7LD/ref=sr_1_3?crid=26QDIEKZZJ8OA&dib=eyJ2IjoiMSJ9.ci_3vIGkCRsbMauH5aLlfxF44KS7k7A2Yt1Rz6Mb87SevEPWQ465ekcmt__gDLMYmc4-Sf55NBQzlsMkpYap-pSpooc2b6OGLV6w3bI__vg5yfAXO96MlYGc9-zNRobFEEZliGIzCcPNc4MDK1rCmg.g8aOqWH3NykYqinDv653H9dokpVVd43QvZ42Rd6F5yg&dib_tag=se&keywords=LA1010&qid=1705259519&sprefix=la1010%2Caps%2C227&sr=8-3' ),
    affiliate_url ( 'https://amzn.to/3HkZibE' ),
    listing_name  ( 'Logic Analyzer, LA1010 Logic Analyzers Spectrum Analyzer ‑50‑50V Input Analyzer Logic Analyzer Set with USB Cable' ),
    item_price    ( 'AU$176.65' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Interface-Oscilloscope-Adjustable-Threshold-Observation/dp/B0BDTC6FFY/ref=sr_1_4?crid=26QDIEKZZJ8OA&dib=eyJ2IjoiMSJ9.ci_3vIGkCRsbMauH5aLlfxF44KS7k7A2Yt1Rz6Mb87SevEPWQ465ekcmt__gDLMYmc4-Sf55NBQzlsMkpYap-pSpooc2b6OGLV6w3bI__vg5yfAXO96MlYGc9-zNRobFEEZliGIzCcPNc4MDK1rCmg.g8aOqWH3NykYqinDv653H9dokpVVd43QvZ42Rd6F5yg&dib_tag=se&keywords=LA1010&qid=1705259519&sprefix=la1010%2Caps%2C227&sr=8-4' ),
    affiliate_url ( 'https://amzn.to/3Sj0Nwn' ),
    listing_name  ( 'USB Interface Logic Analyzer LA1010 Oscilloscope Analyzer with Adjustable Threshold for FPGA Board Observation Analyze' ),
    item_price    ( 'AU$106.84' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Kingst+LA1010+USB+Logic+Analyzer' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/256049725851?hash=item3b9dc0c19b%3Ag%3A2HwAAOSw0WVkQPrM&amdata=enc%3AAQAIAAAA8B5loSb22agn%2FvFPrwojwO6b7s%2BU4dcwGFqeUxfEaUu65eoQeCZfdIwct8XzX13Md5UK8ulAePGv0%2F9AP4qRNVwS8NORinTlVMhFzX68uVq9JsnliRuKyUR1FthW3a%2FlOe8hDni77FcXLYEwUGzYUC%2FTAo%2F6yadfxAvzCkdqFCuZjv0fZfQLW%2ByCPJSNVUYFF%2FP5vPH2aQYh%2FkWmlrikGbRJR%2FzfI8%2Fb2QQF7rXCtl1OiC0nz57ywBlM89DXEmFe1gXZqsc5O3KhNhQdqLDNy4Z1uACTfoLJTEw8JSLohui1G5PRZxlBQMKiDLQxd45mlg%3D%3D%7Ctkp%3ABk9SR9TsrJahYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/D1kRJl' ),
    listing_name  ( 'New Kingst LA1010 LA2016 16CH USB Logic Analyzer MCU ARM FPGA Debug Tool' ),
    item_options  ( 'Color: LA1010' ),
    item_price    ( 'US$55.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/176041894978?hash=item28fcea2442%3Ag%3A2kYAAOSwisNlWXEG&amdata=enc%3AAQAIAAAA0FC%2FqkC0PYckEWC0cciCAnjgxPeYTfEUD6csSyZ0q6SKmFPG%2FTjI%2FGzuGOqBbMyD2fkR5YUGqiWFq3aUbmp899n8uGEprhtFunkF3sFcQvEN1xwBx9G%2F4uehGi4XixoGYDlBmtJuA6eRCvg9%2F56aFzrqQsXlqm75o7zDoaIdTLReRtgOXZEeaxmX2R4PiZ7aevJK45vDahU4eCuZxDpZELTgfiIXtDa7YmKCslmdxiimfo9baQ4KImfYy3fXSp7esa8DJocBlgsvQvFmK4IKw14%3D%7Ctkp%3ABk9SR9TsrJahYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/aZqstQ' ),
    listing_name  ( 'USB Logic Analyzer LA1010 16CH 100MHz ARM FPGA debug tool 100M max sample rate' ),
    item_price    ( 'US$54.80' ),
    item_shipping ( 'US$3.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/284273885655?hash=item42300b41d7%3Ag%3AFh4AAOSw-%7E9giNeC&amdata=enc%3AAQAIAAAA8CQYRCkkPkku8LpTKbaq8aBaHi3LzD2Iu9bKH5EmXcf9oSRK8Wutz%2FRJRuyxxANZOJjneLwS0mmHyTIWM3LsqrKCZhpf29w%2BrIfST7%2BvhTrIM4GOTwGNr3tiAnOwVyOtGYdTjlZT%2F9qxN1ZXMlzqbb%2F1cFfqBiyjnh9H%2FR9tDgh37mPJzCkond8n3GLifnB%2FIFccXMWDNggzuINj6Co3tV2Z%2BEAf4yRoZGginUwz9MAutUFinIBCAtYk%2Fv%2BZS1A3UEwthcUGaRuh%2F19WfB3cl60NvADh%2B5DcDT5cQ5wWR16jlLCk%2BzPHfArnk5eusC9sSA%3D%3D%7Ctkp%3ABk9SR9TsrJahYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/OZSUju' ),
    listing_name  ( 'Kingst LA1010 Logic Analyzer USB2.0 16M 16CH 10G MCU ARM FPGA DSP Debugging Tool' ),
    item_price    ( 'US$57.73' ),
    item_shipping ( 'US$5.00' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Kingst+LA1010+USB+Logic+Analyzer' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/364630730868?hash=item54e5af6874%3Ag%3AY-0AAOSw-Gxle%7E%7EM&amdata=enc%3AAQAIAAAA8DKkDKop%2BSFPOaQUCYwa6PnYHSXg1GjQI4SNGac8bN2yfGUEo0u6Q91zqAEwJ4Ogp%2Bf0%2BK%2FQQPrxHSaPqpiELO5Qnh7On8uYoaSW%2FguL%2BcKvq5WEYLK0tkAmeg2VhujqLHax7hmMUr1fWsc1GK3ZJ8V5tDZtuOKcWpXwcI3rPsEDj16GRjJJ0yXbETPcc%2B3ZeXMDda0YoHrskGal4zj18S%2FrMjXhAk9XViSa7W60Zf8UkfeKI8c%2BEguxaZTOxbMHEHWAtpOavMd40TVbcx4eXvdCgv8yl%2F897%2BCokkRhmjTibzC7zdZslhopJydQTHtFRA%3D%3D%7Ctkp%3ABk9SR8zzwJahYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/YttLCw' ),
    listing_name  ( 'Kingst LA1010 Logic Analyzer USB2.0 16M 16CH 10G MCU ARM FPGA DSP Debugging Tool' ),
    item_price    ( 'AU$102.80' ),
    item_shipping ( 'AU$8.21' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/221828570443?hash=item33a6035d4b%3Ag%3AT68AAOSwH%7ENkM3%7E2&amdata=enc%3AAQAIAAAA0Cf8qQHOtFDFmK4qPMQbdwygK9eF4CwhftZzphj94DGp1YOec163qgA8omLW9FLSF%2BfZCJX3XPDfT27XRQZ1BfKdr7rjtxdK6aQ5QtnWsyc67At8K8rcjJnVH2l%2B1GcpafPdERXqQnY%2FBBCK%2F2XzT33xEMweXerdenHDR%2FTKgBz2cejiXUqco%2B7KL3eqZYY6Vf8rb%2B6W16mXmP1RWib%2BJ1q0onMXRTaWC5wUxpHAGF7LmBhoUjmGBuMQvU5HPzW8AyDu2IzCBlauiZ0JZL7Ur28%3D%7Ctkp%3ABk9SR8zzwJahYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/K6XgML' ),
    listing_name  ( 'New LA1010 16CH 100MHz USB Logic Analyzer ARM FPGA' ),
    item_price    ( 'AU$91.62' ),
    item_shipping ( 'AU$23.64' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/375039845277?hash=item57521de39d%3Ag%3A2XQAAOSwCBxlSher&amdata=enc%3AAQAIAAAA8DMopERkVMr1UcQyeuJGSXuU6C3qYpsnZLNfqygDNskqQKpj%2Bi8gIpDPfhnMO%2FLF%2BqQ%2FIUo%2BZxfmayFXo1wAEqSqW5kTu%2FEgRDZ7MlK70XkUWCyWHMAq3EXrjZBI%2BmPi8Eb0jO0KQH%2BBKvMgIZlAshSYQLszxkgLcl6GguTP2LDqtaeGP%2Fgcq5GwvAc5ensFPlVwbOiTpckdstqDKTI7gMbEhzDO0fUyl9PMFR5CT%2Bf9DzTMA49gKXAc%2FNeseJGhLt0oIFVQ5MJu%2BqKiJqAibsMn9gEFjHtZq8V6v2zsKSh2drQYl8hLjgRRbuvbXzH1MA%3D%3D%7Ctkp%3ABk9SR8zzwJahYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/BH6BTt' ),
    listing_name  ( 'LA1010 USB Logic Analyzer 16 Channels Digital Logic Analyzer With 100MHz Sample' ),
    item_price    ( 'AU$112.44' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Kingst-LA1010-USB-Logic-Analyzer.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/32780046572.html?spm=a2g0o.productlist.main.1.1b6f20a0CZq31O&algo_pvid=fe87d5d7-9b4f-48ed-b726-1b8704f7d191&algo_exp_id=fe87d5d7-9b4f-48ed-b726-1b8704f7d191-0&pdp_npi=4%40dis%21AUD%2192.15%2170.96%21%21%21436.72%21336.27%21%402103297417052600314681764efc57%2162978540276%21sea%21AU%214385823938%21&curPageLogUid=TCEo7Vl8Kisq&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dl6xr5J' ),
    listing_name  ( 'Kingst LA1010 USB Logic Analyzer 100M max sample rate,16Channels,10B samples, MCU,ARM,FPGA debug tool english software' ),
    item_price    ( 'AU$70.96' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004416976714.html?spm=a2g0o.productlist.main.5.1b6f20a0CZq31O&algo_pvid=fe87d5d7-9b4f-48ed-b726-1b8704f7d191&algo_exp_id=fe87d5d7-9b4f-48ed-b726-1b8704f7d191-2&pdp_npi=4%40dis%21AUD%2189.39%2171.52%21%21%2159.11%2147.29%21%402103297417052600314681764efc57%2112000029110864434%21sea%21AU%214385823938%21&curPageLogUid=soGevz1xVyNv&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DFOzi6d' ),
    listing_name  ( 'New Kingst LA1010 16CH 100MHz USB Logic Analyzer for MCU ARM FPGA FPGA Debug Tool English Software' ),
    item_price    ( 'AU$71.52' ),
    item_shipping ( 'AU$9.13' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006063953503.html?spm=a2g0o.productlist.main.11.1b6f20a0CZq31O&algo_pvid=fe87d5d7-9b4f-48ed-b726-1b8704f7d191&algo_exp_id=fe87d5d7-9b4f-48ed-b726-1b8704f7d191-5&pdp_npi=4%40dis%21AUD%21138.77%21131.83%21%21%21657.69%21624.81%21%402103297417052600314681764efc57%2112000035563754145%21sea%21AU%214385823938%21&curPageLogUid=zTnvYRbWYiBF&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DD7cl9X' ),
    listing_name  ( 'Kingst LA1010 USB Logic Analyzer 100M max sample rate16 Channels10B samples MCU ARM FPGA debug tool Oscilloscopes Drop Shipping' ),
    item_price    ( 'AU$131.83' ),
    item_shipping ( 'AU$39.42' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B092LSW99R/ref=ppx_yo_dt_b_asin_title_o00_s00?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=503-0163087-8928626' ),
    order_id        ( '503-0163087-8928626' ),
    order_date      ( '5 August 2021' ),
    order_item_name ( 'LA1010 Logic Analyzer 100M Sampling Rate 16 Channels Adjustable Threshold' ),
    order_price     ( 'AU$88.09' ),
    order_quantity  ( 1 ),
    order_gst_paid  ( 'AU$8.01' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://d297fd4gt7t5lv.cloudfront.net/file/2023-11-03-164011/s-l1600.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.brother.com.au/en/products/all-labellers/labellers/pt-d210' ),
      link_text       ( 'Portable Desktop Label Maker PT-D210' ),
    ),
    manufacturer_name ( 'Brother' ),
    model_name        ( 'P-Touch D210' ),
    EquipmentFeature::LABEL_MAKER,
    EquipmentAttribute::HAND_TOOL,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Brother' ),
    model_name        ( 'P-Touch D210' ),
    equipment_type    ( 'Label Maker' ),
    category          ( 'Label Maker' ),
    manufacturer_link (
      link_href       ( 'https://www.brother.com.au/en/products/all-labellers/labellers/pt-d210' ),
      link_text       ( 'Portable Desktop Label Maker PT-D210' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Brother_PT-D210' ),
  see_also      ( 'Brother P-touch H105 Label Maker' ),
  search_url    ( 'https://www.amazon.com/s?k=Brother+D210&crid=20GU3GJJ3EECX&sprefix=brother+d210%2Caps%2C305&ref=nb_sb_noss_1' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Brother-PTD210-One-Touch-User-Friendly-Templates/dp/B013DG2FNW/ref=sr_1_10?crid=20GU3GJJ3EECX&dib=eyJ2IjoiMSJ9.pKaUXfSBGMS0b4khGAceanVY06f7o2VkY092B6oHPeQ_QwWn-nfHDqXYQfk-MoQmpOhpMjbE0dCIWY3BKOhVTeVN_GCMDkBA2t-8f7tyJ2HdwaJydGotCb4SXFOJwG-YzJad8KH6HgYirs3om4oSBA.kSDl5IrVgSL-CZqGJ3JbjOL8sj6G7PxrQt_Nsewmt9Q&dib_tag=se&keywords=Brother+D210&qid=1705260594&sprefix=brother+d210%2Caps%2C305&sr=8-10' ),
    affiliate_url ( 'https://amzn.to/48yocjY' ),
    listing_name  ( 'Brother P-touch, PTD210, Easy-to-Use Label Maker, One-Touch Keys, Multiple Font Styles, 27 User-Friendly Templates, White, Gray/White' ),
    item_price    ( 'US$58.99' ),
    item_shipping ( 'US$22.38' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Brother+P-Touch+D210+Label+Maker&s=relevanceblender&qid=1705260658&ref=sr_st_relevanceblender&ds=v1%3A74cFMoOK7yYf2%2ByYjc%2FX2NZI553lJRv7yCWc0BJuEAM' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Brother-P-Touch-PTD210-Bundle-Included/dp/B09QXZ7ZRD/ref=sr_1_2?dib=eyJ2IjoiMSJ9.Nm1Obk25wYq9hz8YEf0AuVQo7L9T3IBS25afunaiCiwL1KmD8glcS52Y4bRnW8D-KXWgiHTEV6qyIgcTdQtXfqjx8NvA4zKcYRvTektcZ1DxH5CWnWAUVY2SqD9yNOu6zyvHC8RsQzVN8G474kjgTw.6VyB9GS_GtaClbKAHWRFZO3gikSRY5oUfI0NApXHEPk&dib_tag=se&keywords=Brother+P-Touch+D210+Label+Maker&qid=1705260664&sr=8-2' ),
    affiliate_url ( 'https://amzn.to/3tZiYib' ),
    listing_name  ( 'Brother P-Touch PT-D210 Label Maker Value Bundle Includes 4 Label Tapes, Easy-to-Use, Home and Office Organization, White' ),
    item_price    ( 'AU$103.62' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Brother-White-Accent-Desktop-Labeller/dp/B077DGJRXX/ref=sr_1_4?dib=eyJ2IjoiMSJ9.Nm1Obk25wYq9hz8YEf0AuVQo7L9T3IBS25afunaiCiwL1KmD8glcS52Y4bRnW8D-KXWgiHTEV6qyIgcTdQtXfqjx8NvA4zKcYRvTektcZ1DxH5CWnWAUVY2SqD9yNOu6zyvHC8RsQzVN8G474kjgTw.6VyB9GS_GtaClbKAHWRFZO3gikSRY5oUfI0NApXHEPk&dib_tag=se&keywords=Brother+P-Touch+D210+Label+Maker&qid=1705260664&sr=8-4' ),
    affiliate_url ( 'https://amzn.to/3O2LmXF' ),
    listing_name  ( 'Brother D210 P Touch Label Maker Machine' ),
    item_price    ( 'AU$49.00' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&LH_ItemCondition=1000&_nkw=Brother+P-Touch+D210+Label+Maker&_sop=12' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/255441642997?epid=2254297130&hash=item3b798225f5%3Ag%3AfsEAAOSwUBRlkCO2&amdata=enc%3AAQAIAAAA8PQiMJEXWe%2Fnb%2F%2BubHopAtY8QOFrAVlNjmURqVsemYj7uQoY4ks8kIw%2F7UrQNA8rzvJPbKV0E5RZ9O89Pvj35mp88AKj0kNGnCD%2FJomzFLww%2BHPNXNUiZaEdk8CdrFqkT1eidiq%2Byc2FqGeJxBGJgZvaSDC3%2FUjj5tcH3gB%2F%2B94BRr2jkibCkVXOQNPqsHsZzKfGdcU1qFxhC4mZGe5JseDlSw6jf9qkXaddppvXPMrOslcIi%2B%2B%2BeTgGjitk6sPE0Xc3gmVLO6PeKnxfjInlR%2F5d%2F4qx9RwiABYYtRLy%2BVh0yUTdIFLBk5%2BTyeC%2FE2G%2BkQ%3D%3D%7Ctkp%3ABFBMsqS1l6Fj&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/SdpRj9' ),
    listing_name  ( 'NEW Brother D210 P-Touch Label Maker Labeller' ),
    item_price    ( 'US$56.91' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/355357857307?epid=1341603512&hash=item52bcfa961b%3Ag%3AAwAAAOSwndFeTe0a&amdata=enc%3AAQAIAAAA0M1RSE0YeTnhEx1%2BuhXhFJRzcBEUoIYxKWQXZl8uFr1sFKk60sRCRfFMAPdf5lp8NTe%2FUP%2BEeXDOnrgnaT%2B1TPBblOQwavMna%2FnygEqdjJYY7VjPHYUB2CmTMWxP7P8Uo8pvyFtwwA1OJT2EOINsrf%2FnjvTp5D9VntEqGuwvQUmTUddPI%2Fm1KtodzxfhRFQ9ZZXF2JhXlLA5nl84Yx9VbcI94qmovHYWltml13KRgCwE2oILO%2F24XqNraiA7PHu7rmZIqbUBuGlb17D7VzLk0Jc%3D%7Ctkp%3ABk9SR7KktZehYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/k43jKn' ),
    listing_name  ( 'Brother P-Touch PT-D210 Label Maker NEW!' ),
    item_price    ( 'US$39.50' ),
    item_shipping ( 'US$45.05' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/315005404554?epid=1341603512&hash=item4957c9058a%3Ag%3AwTQAAOSw6VBla5VQ&amdata=enc%3AAQAIAAAA0Mzz2v9Y426LSh0eU29TO2Ga76ih3twhtqPueAzwvRlr4P3aUzsg%2Fr7h9a2p%2BGuQPcnpPhWs8tVtJ1kdYseNEUdiEJzlEsXK%2BPVwrmJj0IvYn2tLHpAmJZsZBn%2FzxRL4YX0b51cPEeAHnPnT%2B6zT9N5G8Or3ZPxAPKwMzyf3J9EnUe8oi%2BMn94Fy64fuD29MN6z7O4zX51v7khLjFGEnUt9DgSMfcYv22hvecFcLTvxkwcBk5vRpTwRuuL1JfuIyYgbBU5yNwTMpywwJr1O80bg%3D%7Ctkp%3ABk9SR7KktZehYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/36wZ1Z' ),
    listing_name  ( 'NEW NIB BROTHER P-TOUCH PT-D210 ELECTRONIC LABEL MAKER Compact' ),
    item_price    ( 'US$38.50' ),
    item_shipping ( 'US$45.91' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&LH_ItemCondition=1000&_nkw=Brother+P-Touch+D210+Label+Maker&_sop=12' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/175415279495?epid=2254297130&hash=item28d790bf87%3Ag%3A0OMAAOSwmPljIP9W&amdata=enc%3AAQAIAAAA8AiTWTWf9WXNTU0isgHqybCOX5wf0X4oTGQYq%2Byhoo773leXLbXQfXzyN8gS7SFUV7wO8qKhUPu4QJG5%2F31dT7XcBPhyWmwLoFnMUPXY%2FmZQKw8AJUmr%2BosWOr1eE%2FZNY2VMZ9v6n1wUj5hBAor5OhO8%2FkfzxaHTklmKsTmez4KKuDGWrVvEC2fbtRAhP42Hp2%2FKIJTXY8VcvVyxPjSxPjeTnbO1sCJMLmP%2B0ooEX2%2BM1grymyQK5CjdzbjlJ4o3VKaGHgR0gxJNdZnBegnst%2BZgoXQ3CsiNt1c%2FuyTZy6KgmhJkjeRbXZkAXphZirZciQ%3D%3D%7Ctkp%3ABk9SR9bKx5ehYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/k0wAqv' ),
    listing_name  ( 'Brother P-Touch D210 Handheld Label Maker TZe 3.5mm 6mm 9mm 12mm with Free Tape' ),
    item_price    ( 'AU$69.95' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/204209080966?epid=2254297130&hash=item2f8bcf4a86%3Ag%3AsK8AAOSw8Ndj8zCV&amdata=enc%3AAQAIAAAA8MLlpIn9dXfQroH%2Bwmmy59%2B%2BgwRdYkBOhOlrlrbc%2FwrKndDvJxSJlMtOAyymbWWrkGuwTFkkl93CeZHJvD7T2g05st5%2FB6rmkMKi23ioGJerMI%2FrA7S4tTvkoIjHFyqB5QAkUS6W%2BckX%2FXfltYjy9bXRWxjpMfy6XO5y2etJR2mXTsx%2BZRVuQs%2BjxLCTIimccMp1it9uSaGE0G%2FvGYWxLrFETNwJS0r1Gox%2FiVaF4jrSj%2Ftenw4jtdZq0z4HByeLYYztqCQ0sGSOPxCWnhRG64itqSXNJSRMOWwv8spcjM%2B8crsGGPsaS9eb4Fmksy%2FB1Q%3D%3D%7Ctkp%3ABk9SR9bKx5ehYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/zH2zzK' ),
    listing_name  ( 'Brother P-touch Label Maker PT-D210' ),
    item_price    ( 'AU$89.63' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/382807046471?epid=2254297130&hash=item592113f947%3Ag%3ADoIAAOSwK4hi9cvh&amdata=enc%3AAQAIAAAA0F8gAYSG8Xs3NLqIUFFFW%2BTYnJR4nkoil8BbnQMgV7ThffO9j7J9ektoFMbNvERnKzLSXk1EM5hGctqjuCfj7ZtAW%2FLkGb9I7%2B3lDb8lzsr43Rzmmj7uOB0GGUxxu4ox3UNigB%2FB9QFwsbmWS5Lv%2B2QXeya9B%2BuevKAva1cTyEDFq4J8wC3E1JAOqBa%2B%2B4kGgbCF50AY05vs%2BnemMh4y2ekEFJmYOlY4rZ3KsOhTItNdkgWDBqkGiGTwgP5Vs%2FFQIlfbCq0rL3vhYqySM6bJeic%3D%7Ctkp%3ABk9SR9bKx5ehYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/VENN6L' ),
    listing_name  ( 'Brother PT-D210 P-Touch Easy Compact Label Maker 3.5, 6, 9 & 12mm in width' ),
    item_price    ( 'AU$65.50' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Brother-P-Touch-D210-Label-Maker.html' ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/175415279495' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=26-10426-40847#/' ),
    order_id        ( '26-10426-40847' ),
    order_date      ( '20 Aug 2023' ),
    order_item_name ( 'Brother P-Touch D210 Handheld Label Maker TZe 3.5mm 6mm 9mm 12mm with Free Tape' ),
    order_price     ( 'AU$69.95' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/B-UAAOSwlsNfgBFW/s-l1600.png' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.brother.com.au/en/products/all-labellers/labellers/pt-h105' ),
      link_text       ( 'Handheld Portable Label Printer PT-H105' ),
    ),
    manufacturer_name ( 'Brother' ),
    model_name        ( 'P-touch H105' ),
    EquipmentFeature::LABEL_MAKER,
    EquipmentAttribute::HAND_TOOL,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Brother' ),
    model_name        ( 'P-touch H105' ),
    equipment_type    ( 'Label Maker' ),
    category          ( 'Label Maker' ),
    manufacturer_link (
      link_href       ( 'https://www.brother.com.au/en/products/all-labellers/labellers/pt-h105' ),
      link_text       ( 'Handheld Portable Label Printer PT-H105' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Brother_PT-H105' ),
  see_also      ( 'Brother P-Touch D210 Label Maker' ),
  search_url    ( 'https://www.amazon.com/s?k=Brother+P-touch+H105+Label+Maker&s=relevanceblender&qid=1705261141&ref=sr_st_relevanceblender&ds=v1%3Aj2UvMnK8xV4GzNVYhHL3ebObCXAu9GBOCYPuK2mDPHs' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Brother-P-Touch-PTH105ZG1-Handheld-Label/dp/B00AEU1KAU/ref=sr_1_3?dib=eyJ2IjoiMSJ9.d45fP0Ugm28jCNTQ6kM7X9yL6YMZlbBA3zoZcxK6ZMsLjFL-QFgqnPcpmTrN-s3fgtY05C-eAEM7k4vwtw6Q3czOygh9D-nb3MRiV2R-7zlT9fZsFrhOnfpO4y21N77gfvUN_uhuTDuYbbloYiLCXA.KNvzI-yJSb2QQE7AkI1JrmxABLOkV3TOqL6RgwTw_XE&dib_tag=se&keywords=Brother+P-touch+H105+Label+Maker&qid=1705261146&sr=8-3' ),
    affiliate_url ( 'https://amzn.to/4aVKa24' ),
    listing_name  ( 'Brother P-Touch H105 PTH105ZG1 ABC, Handheld use Label Maker' ),
    item_price    ( 'US$68.05' ),
    item_shipping ( 'US$4.99' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Brother+P-touch+H105+Label+Maker&s=relevanceblender&qid=1705261211&ref=sr_st_relevanceblender&ds=v1%3AeSbiuZvQ%2FLX8exc3b10fw1ppC31wQUvWGokfwtVwntg' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Brother-PT-H105-P-TOUCH-HANDHELD-THERMAL/dp/B0095ROWZ8/ref=sr_1_1?dib=eyJ2IjoiMSJ9.L6ZUmaYDliI2ehibDhWWphF9YdusKTM8yF4ji3Bie9TqhiA-0l1clovhyGuD8Suf4ITSSswK28Nu2KpuBZbI5818L64FbKi46piifhPtTLrg5Junmbhz_zBUU2Seu6Mclk1eUm3iHmv4wgY5wpnLiw.rQeBtcadrnoZSTnAOXT5lgTwjdbjqMwkCSBT8bkcs9E&dib_tag=se&keywords=Brother+P-touch+H105+Label+Maker&qid=1705261217&sr=8-1' ),
    affiliate_url ( 'https://amzn.to/3RZSYv1' ),
    listing_name  ( 'Brother P-Touch PT-H105 Label Maker, Handheld, Up to 12mm Labels, Includes 12mm Black on White Tape Cassette' ),
    item_price    ( 'AU$40.14' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Brother+P-touch+H105+Label+Maker' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/254351637525?_trkparms=amclksrc%3DITM%26aid%3D1110006%26algo%3DHOMESPLICE.SIM%26ao%3D1%26asc%3D258818%26meid%3Deec538eda5d34b96a5cf5ec9e4bce7a0%26pid%3D101875%26rk%3D1%26rkt%3D4%26sd%3D125437636685%26itm%3D254351637525%26pmt%3D1%26noa%3D0%26pg%3D4429486%26algv%3DSimplAMLv11WebTrimmedV3MskuWithLambda85KnnRecallV1V2V4ItemNrtInQueryAndCassiniVisualRankerAndBertRecallWithVMEV3CPCAuto%26brand%3DBrother&_trksid=p4429486.c101875.m1851&amdata=cksum%3A254351637525eec538eda5d34b96a5cf5ec9e4bce7a0%7Cenc%3AAQAIAAABUObhgc4Nk8%252BdtAwOww4FKLaj%252FQ5qqgDlQCuqZA43WcPFUWDERCUugbbOk7XQv0JXlBfqCg2xKF3WcPghxGMFw2oSlXvfExEaMYr7I7LmrHcP6czY1wIMt0ORyKiCWt95xldincyyBx3g%252BNDW%252B%252FhWUgTaBhK6xAm%252BJIbCOMehu%252Bdwif12dzGRF6tIObv%252FupCde4Milu3QE8llmBNY4esyCCtqnhqYbb5Toi4uJotTZ7mrJ1jGPRIFL9d%252FMwp3HilzDpJq3%252BIZdOvekW6R5MHvwUJ%252BNeQnIut6AvOCLiJV9%252FgeSwBeOmFPkJyNEShPJkXi%252BxQ%252BFnvoGE%252B8fAazrIRI4C83ud95O4JQ7G27eSLom1b1d%252FgwvkxOuWcwHBn3tx%252Fh7gIidTwvAUGkoQp518rpc3YRXA89D%252BnKO40splaPtPD%252Bq8%252FL%252FPZCinQ7AIFHzYcVLw%253D%253D%7Campid%3APL_CLK%7Cclp%3A4429486&epid=1237848575' ),
    affiliate_url ( 'https://ebay.us/RkuPLi' ),
    listing_name  ( 'NEW Brother PT-H105 Handheld Label Labelling Machine Printer Water Resistant' ),
    item_price    ( 'US$40.16' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/155573692649?_trkparms=amclksrc%3DITM%26aid%3D1110006%26algo%3DHOMESPLICE.SIM%26ao%3D1%26asc%3D258818%26meid%3Dcbab6f15117441228a5c4c6c2a11edec%26pid%3D101875%26rk%3D1%26rkt%3D4%26sd%3D254351637525%26itm%3D155573692649%26pmt%3D1%26noa%3D0%26pg%3D4429486%26algv%3DSimplAMLv11WebTrimmedV3MskuWithLambda85KnnRecallV1V2V4ItemNrtInQueryAndCassiniVisualRankerAndBertRecallWithVMEV3CPCAuto%26brand%3DBrother&_trksid=p4429486.c101875.m1851&amdata=cksum%3A155573692649cbab6f15117441228a5c4c6c2a11edec%7Cenc%3AAQAIAAABUObhgc4Nk8%252BdtAwOww4FKLaj%252FQ5qqgDlQCuqZA43WcPFUWDERCUugbbOk7XQv0JXlBfqCg2xKF3WcPghxGMFw2oSlXvfExEaMYr7I7LmrHcP6czY1wIMt0ORyKiCWt95xldincyyBx3g%252BNDW%252B%252FhWUgTaBhK6xAm%252BJIbCOMehu%252BdwjUZKX88Hi7o8TKY%252BAPMxi5%252BtaKvrIkAPxn0g2CmdyBD2pUSEkvbk3K4Vo3lHzL%252B9Oc3gMnSZSUBYPYQTNPCfPUP1xTJf%252F2LZ0dRfTs2Tpx85ygd41BIxtbN0IVGiRMKMZkbz34xNdJFEsii0ppgcw8j%252BvNZGTUQuvTBwzurd0ZRebKyt5q0GwcENENbA6TxRIFxozhn33RqqYhbM57YRMiFa%252F%252FgGBJF62eg81Omoq4YhF1ZmtYY5IyTWOfVJjlF0lYK%252BReBclQsAMUCKhPr72A%253D%253D%7Campid%3APL_CLK%7Cclp%3A4429486&epid=1237848575' ),
    affiliate_url ( 'https://ebay.us/XLLRjS' ),
    listing_name  ( 'Brother PT-H105 Handheld Labelling Machine' ),
    item_price    ( 'US$39.39' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/380558120404?_trkparms=amclksrc%3DITM%26aid%3D1110006%26algo%3DHOMESPLICE.SIM%26ao%3D1%26asc%3D258818%26meid%3Dcbab6f15117441228a5c4c6c2a11edec%26pid%3D101875%26rk%3D2%26rkt%3D4%26sd%3D254351637525%26itm%3D380558120404%26pmt%3D1%26noa%3D0%26pg%3D4429486%26algv%3DSimplAMLv11WebTrimmedV3MskuWithLambda85KnnRecallV1V2V4ItemNrtInQueryAndCassiniVisualRankerAndBertRecallWithVMEV3CPCAuto%26brand%3DBrother&_trksid=p4429486.c101875.m1851&amdata=cksum%3A380558120404cbab6f15117441228a5c4c6c2a11edec%7Cenc%3AAQAIAAABUObhgc4Nk8%252BdtAwOww4FKLaj%252FQ5qqgDlQCuqZA43WcPFUWDERCUugbbOk7XQv0JXlBfqCg2xKF3WcPghxGMFw2oSlXvfExEaMYr7I7LmrHcP6czY1wIMt0ORyKiCWt95xldincyyBx3g%252BNDW%252B%252FhWUgTaBhK6xAm%252BJIbCOMehu%252BdwqH5a7f6UZ79jZI6s37i1SqIgimyHqV%252BFJ297ct7AI%252FAGWq3yjQyXQSzgj1cRrxlMhWtj1AiDyDk94JOGfaFe6Sz0400ze17NuVfnrQBfgYTA3d%252BUIFfZyJOivS4%252B6rT35%252B6cs%252BUGCyAziJZrDUJlPLLAlQsAyi61WrSSv96MEBmMaa0ikH7RyLdcW7Su67rIqidvI6%252BVFipt0rBICbsRpgeOIqwcwamIX5%252F8hKiUia7MHXcvo8zfuJRT67P49LAjfk10z8H7pH3%252FLSE0tEyRNA%253D%253D%7Campid%3APL_CLK%7Cclp%3A4429486&epid=1237848575' ),
    affiliate_url ( 'https://ebay.us/ym3Q4S' ),
    listing_name  ( 'Brother P-Touch PT-H105 Hand Held Labeller 3.5mm-12mm TZE - TAPE Included *NEW*' ),
    item_price    ( 'US$30.13' ),
    item_shipping ( 'US$10.02' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&LH_ItemCondition=1000&_nkw=Brother+P-touch+H105+Label+Maker&_sop=12' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/174021169429?epid=1237848575&hash=item2884785115%3Ag%3ATxcAAOSwuSZe3ywM&amdata=enc%3AAQAIAAAA8DaNR5PvlZT57s8HhV09Qq%2B1zOnx%2FVB%2FTi%2FeKHupMb21CxzZOKGWbee0a0%2B1NJps6moZtD%2B6L%2B%2FBMC6T3sR5Fjw3T8k%2FlxHk7EVZGEC6joQIkMY0SrUixV2SoRmfA9R0dG1d7sY9g3599xu96NIr%2Fe7k%2FuFG9kysJwOi8u66Mg7bL0itJOjGe0mXXPnl8OR4bjKn3lu%2FD%2BTBNObv5VSTYdBhc7Fz8s7EGyFTu2rEMd%2Fh551d5PDeC78hrPVZOnyqOow1Bl%2FKwxPyY9%2BGeqsTxFHM50IugniRgZidRwbK8fAWbChmNovUUTpZrpo2lfQgUg%3D%3D%7Ctkp%3ABFBM5MyHmKFj&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/fGR1IO' ),
    listing_name  ( 'Brother P-Touch H105 Portable Label Maker TZe 3.5mm 6mm 9mm 12mm with Free Tape' ),
    item_price    ( 'AU$59.95' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/384781697847?epid=12056428596&hash=item5996c6c337%3Ag%3ApUIAAOSw%7EiBi9cid&amdata=enc%3AAQAIAAAA8LCuPQSXURTzUqd8Wead5iY5594OH%2F6dSw8TzdprIkUe7TDV3HSCMKfFVuuDy6AUCZhFEadhbHXqmf4iyCUXciY8hd3GOzFA%2FBh7XURleDM8JTa4NsHRFZynCanyHFmZ6S%2B%2B7yfyZRlCnKYMf5Zq5tfzOVZQAxuVogs2e7T2sSI9%2FrV7ADEUUU6Tdef0tH55jZHaeg3CTOoWnHS3eXgZ7%2BNu2XFTg1DZdaxpIyj2P7WDJoge3wu6%2B9dqAECkBAElfVkbRfe0r%2BZ1m3DTGOBNlnDBJFi5jNV34Mh7yDk%2BfluFu7kxtrulGoneMwTLMl3uKQ%3D%3D%7Ctkp%3ABk9SR-TMh5ihYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/Bu5lXb' ),
    listing_name  ( 'Brother P-touch PT-H105 hand-held Label Maker Machine for 3.5, 6, 9 & 12mm width' ),
    item_price    ( 'AU$56.20' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/176037843802?epid=5060222735&hash=item28fcac535a%3Ag%3AntUAAOSwXaVljjrW&amdata=enc%3AAQAIAAAA8IvMY5Omm4EcwgvD1wddNvCWa4r50DF1zm2Kr3yQ1ZW8U%2FJG4LG9pASx6L7l4%2B659jh6lJ54Jy6OviA67F7nX4qCx4Y6i8iEyOmwiV6DxszozyTnwA7EkjwN981GA3zV%2BjM1uHDVbGE7sQoUGOXmZeIg85mz3%2BkrcxJ11rkS%2B54%2B5QYdCsa4wgVwZkWJXpeGtCqOnsjzneWO0FY%2FbNZDaudzi5CcRh2V6FW%2BlzXjdYT6on9PhgjxEo1vPC08PBAGwM21efGqtO70MukIzKZU%2Fe3bux2PVmjG6b18%2BzGTowBHcpF5DuR4ZGoLSw4ZxJW0jg%3D%3D%7Ctkp%3ABk9SR-bMh5ihYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/7kDacC' ),
    listing_name  ( 'Brother P-Touch PT-H105 Label Maker, Handheld, up to 12Mm Labels, Includes 12...' ),
    item_price    ( 'AU$50.47' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Brother-P-touch-H105-Label-Maker.html' ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/384781697847' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=22-10428-64196#/' ),
    order_id        ( '22-10428-64196' ),
    order_date      ( '20 Aug 2023' ),
    order_item_name ( 'Brother P-touch PT-H105 hand-held Label Maker Machine for 3.5, 6, 9 & 12mm width' ),
    order_price     ( 'AU$56.20' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Scd2566ef870e4c52b2aa69b5497aa43cf/MESR-100-ESR-Multimeter-Capacitance-Ohm-Meter-Professional-Measuring-Internal-Resistance-of-Capacitor-Capacitance-Circuit-Tester.jpg_640x640.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'MESR-100' ),
    EquipmentFeature::ESR_METER,
    EquipmentAttribute::HAND_TOOL,
  ),
  /*
  equipment_info(
    model_name        ( 'MESR-100' ),
    equipment_type    ( 'ESR Meter' ),
    category          ( 'ESR Meter' ),
    category          ( 'Meter' ),
    category          ( 'Test Equipment' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/MESR-100_ESR_Meter' ),
  search_url    ( 'https://www.amazon.com/s?k=MESR-100+ESR+Meter&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Weytoll-Capacitance-Capacitor-Measuring-Resistance/dp/B09ZPRV6WL/ref=sr_1_1?dib=eyJ2IjoiMSJ9.tz1147RiK3-0iJkm3iKKH1qx8KVozOn5JnYDh_xlqpZdqFyxpVyR1f135sryhTC3d3qmIOwdNCOPnNe2TtkXf856oXNi6J2FDDpUqgGwHfA.WlbSoyAFOJNMHbkYO94x_8SYdRpaS3FGcA9O40GsnGo&dib_tag=se&keywords=MESR-100+ESR+Meter&qid=1705265115&sr=8-1' ),
    affiliate_url ( 'https://amzn.to/420b7xJ' ),
    listing_name  ( 'MESR-100 ESR Meter, Weytoll Capacitor Tester, Auto Ranging in Circuit ESR LCR Meter, Auto Ranging in Circuit, Low Ohm Meter Up to 0.01 to 100R, Support in Circuit Testing, with SMD Test Clips' ),
    item_price    ( 'US$53.99' ),
    item_shipping ( 'US$17.93' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Measuring-Resistance-Capacitor-Professional-Capacitance/dp/B0B9S915FS/ref=sr_1_2?dib=eyJ2IjoiMSJ9.tz1147RiK3-0iJkm3iKKH1qx8KVozOn5JnYDh_xlqpZdqFyxpVyR1f135sryhTC3d3qmIOwdNCOPnNe2TtkXf856oXNi6J2FDDpUqgGwHfA.WlbSoyAFOJNMHbkYO94x_8SYdRpaS3FGcA9O40GsnGo&dib_tag=se&keywords=MESR-100+ESR+Meter&qid=1705265115&sr=8-2' ),
    affiliate_url ( 'https://amzn.to/48TX52U' ),
    listing_name  ( 'Measuring Resistance,MESR-100 ESR Capacitor Tester Ohm Meter Professional Measuring Internal Resistance of Capacitor Capacitance Circuit Tester Capacitor Meter with SMD Test Clip' ),
    item_price    ( 'US$56.99' ),
    item_shipping ( 'US$17.93' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Geevorks-0-001-100-0R-Auto-Ranging-Capacitance-Resistance/dp/B09KPMDJW8/ref=sr_1_3?dib=eyJ2IjoiMSJ9.tz1147RiK3-0iJkm3iKKH1qx8KVozOn5JnYDh_xlqpZdqFyxpVyR1f135sryhTC3d3qmIOwdNCOPnNe2TtkXf856oXNi6J2FDDpUqgGwHfA.WlbSoyAFOJNMHbkYO94x_8SYdRpaS3FGcA9O40GsnGo&dib_tag=se&keywords=MESR-100+ESR+Meter&qid=1705265115&sr=8-3' ),
    affiliate_url ( 'https://amzn.to/48Sqv15' ),
    listing_name  ( 'MESR-100 Capacitor Tester V2, Geevorks Professional Capacitor Tester, Ohm Meter 0.001-100.0R with SMD Test Clip, Auto-Ranging Capacitor for Measuring Capacitance Resistance Circuit' ),
    item_price    ( 'US$59.89' ),
    item_shipping ( 'US$17.98' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=MESR-100+ESR+Meter&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Capacitance-Professional-Measuring-Resistance-Capacitor/dp/B0CCY2GBFH/ref=sr_1_24?dib=eyJ2IjoiMSJ9.EBMk6HmsE9EfsRULa_ywF-9iqtY6IjkSLDZgufmxZaggqEvBqelmsMwgcrCxUeYkl1U2iGI2Opq2K3mHBW9qU5L7JGa3VDe32erZ4uMwSZW34knYDYJNQMa2cXve30oq5RN5zVh6bEcsj4PpmFbj9A.JT7KwZwXKa8FKV9HTP6lLht_S10mpqwkjNW0eumde34&dib_tag=se&keywords=MESR-100+ESR+Meter&qid=1705265265&sr=8-24' ),
    affiliate_url ( 'https://amzn.to/3Hi7jOz' ),
    listing_name  ( 'MESR-100 ESR Capacitance Ohm Meter Professional Measuring Internal Resistance of Capacitor Capacitance Ccuit Tester DOOMUN' ),
    item_price    ( 'AU$81.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Capacitance-Professional-Measuring-Resistance-Capacitor/dp/B09YD64R8H/ref=sr_1_28?dib=eyJ2IjoiMSJ9.EBMk6HmsE9EfsRULa_ywF-9iqtY6IjkSLDZgufmxZaggqEvBqelmsMwgcrCxUeYkl1U2iGI2Opq2K3mHBW9qU5L7JGa3VDe32erZ4uMwSZW34knYDYJNQMa2cXve30oq5RN5zVh6bEcsj4PpmFbj9A.JT7KwZwXKa8FKV9HTP6lLht_S10mpqwkjNW0eumde34&dib_tag=se&keywords=MESR-100+ESR+Meter&qid=1705265265&sr=8-28' ),
    affiliate_url ( 'https://amzn.to/48y9Lww' ),
    listing_name  ( 'MESR-100 ESR Capacitance Ohm Meter Professional Measuring Internal Resistance of Capacitor Capacitance Circuit Tester MESR-100' ),
    item_price    ( 'AU$82.61' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Capacitance-Professional-Measuring-Resistance-GTRH/dp/B0CQ85GXDG/ref=sr_1_29?dib=eyJ2IjoiMSJ9.EBMk6HmsE9EfsRULa_ywF-9iqtY6IjkSLDZgufmxZaggqEvBqelmsMwgcrCxUeYkl1U2iGI2Opq2K3mHBW9qU5L7JGa3VDe32erZ4uMwSZW34knYDYJNQMa2cXve30oq5RN5zVh6bEcsj4PpmFbj9A.JT7KwZwXKa8FKV9HTP6lLht_S10mpqwkjNW0eumde34&dib_tag=se&keywords=MESR-100+ESR+Meter&qid=1705265265&sr=8-29' ),
    affiliate_url ( 'https://amzn.to/422MJv9' ),
    listing_name  ( 'MESR-100 ESR Capacitance Ohm Meter Professional Measuring Internal Resistance of Capacitor Capacitance Circuit Tester GTRH' ),
    item_price    ( 'AU$83.26' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=MESR-100+ESR+Meter' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/404459339421?hash=item5e2ba7be9d%3Ag%3ASn8AAOSwT5pk6ZtO&amdata=enc%3AAQAIAAAA4N8BIvdWtQcZmBYN%2FT0Bd4JqU1UQ7dczYpAHmul9Q4HrTbn1rpV6T1yeXe3Eom9tH%2F7Fbwxnc4dL8xljwNgjf9wRyNDJEQRguO4p2YU0qJUbx3wPSaLj6Qjk%2Fn8Grynyi08qUbZWa6gSrc4GUUWc8UsVLTOLYgKBFEK%2BDuJmSnD6VMWz%2Fj3ei8wZ4pEaFFaDltvvEA%2F9VX%2BrOKMDXxqcGw1m5FWvfd9%2B5mpa9H%2B15D%2FyqbeGgwyTK6xH3N1ChW8Dk8c79TUe1PjLHAtXF73jnw8sfw27Gfj5EVje5fk1MCsq%7Ctkp%3ABk9SR4rk6JuhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/Zp3B8F' ),
    listing_name  ( 'MESR-100 Digital Display V2 ESR/LOW Ohm Meter In Circuit Test Capacitor for Home' ),
    item_price    ( 'US$59.62' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/386501737266?hash=item59fd4c7b32%3Ag%3ANBEAAOSwMuxlimRK&amdata=enc%3AAQAIAAAAwEBdt01SJAOIYEnMZuEB3PGDiWZYLtHd85dgE17sddTBi5FJIn4q94IoHA61%2BHKU0k%2BuHKmPJmZ0UbzTzSVfJdCmmMe9nAxGkQyS5vKcbsWmcJi7muS3Yil9vee4RGADYBL9xBFULbrJvUe6DQqRqFXJHcy93W9bEbG6wGKDRNj%2FhGsqrKxEqUuqhCcDhm4HumYFaWKDak71iuV7sfF8qVGq%2BgVnAOv9GXGz58M61z3kVd0aySIlXWWb%2FtdRG%2BgF0g%3D%3D%7Ctkp%3ABk9SR4rk6JuhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/rvD449' ),
    listing_name  ( 'MESR-100 Auto Ranging In Circuit Tester ESR Resistance Capacitance Meter CX4' ),
    item_price    ( 'US$61.57' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/364463099415?hash=item54dbb18e17%3Ag%3A6u4AAOSw0qVk99rF&amdata=enc%3AAQAIAAAA4LeqNIV1GztWN%2FMs%2F3EJtJj%2FVXyIkxTvu5BkkrzsEV7N3FswXrjYG5TaZFiDHTPPlHntDcfcV3mvqQXVs%2BOg7MExGeKzOLugoQie2EidkBAnD5nGUjVF6F9he4fkLCQrvFRczR5JZYC%2F1uFbZbFnjptgFFdEf19RIPm6z5%2FkKd63j69Gbuj%2BO1%2B1LK8jb6tU3%2BCfXy6CFMgFa1P8flhLbKCj0WzOGFLKfxiWdLpOrOX7Cz9JM3LedKbwsrrpHFOdoPKaa7DOhDk8q%2FbhiVc1%2Fn8DaTiAGzEBRhxMkdKUMMW8%7Ctkp%3ABk9SR4rk6JuhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/yCQyIi' ),
    listing_name  ( 'MESR-100 Digital Display V2 ESR/LOW Ohm Meter In Circuit Capacitance Tester' ),
    item_price    ( 'US$62.28' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=MESR-100+ESR+Meter' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/165994480636?hash=item26a60ac3fc%3Ag%3A91IAAOSwRHpkUGuB&amdata=enc%3AAQAIAAAA4LvNgfed4mpgvkom%2FZkqQB76kFF4YY8EUuaTdXex6ol5XbiucWadNqiAzRth1%2FsQjoYcY49W7XqxOROgZlAz%2BsGcPrBw505pS1Tq9W3NDQ4eKq9gcLfk%2BE08m4l%2F6%2FSWUpehK%2BLcLPZqD7nCuo6KDJIYLOsZSjCWCwGUBpCtxUz1nQeqCqjWXNF4NZLwnKPgst0FXfxfjuAYO7DYOExukvY4Cs52R6z4QSgPnnPjZN7rgMq8xnva3JMJnjqWpFe%2BMzId9X%2F5%2FyfJpv7WNkpXNzJUTXDOksbvJcjRVTNQiz28%7Ctkp%3ABk9SR4Ke_JuhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/JynoZv' ),
    listing_name  ( 'MESR-100 ESR Capacitance Ohm Meter Circuit Tester Resistance Capacitor Meter AU' ),
    item_price    ( 'AU$73.14' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/385496802989?hash=item59c16666ad%3Ag%3AGTYAAOSwPFNkUGpp&amdata=enc%3AAQAIAAAAwIr4Z2Ttvmwt9lPWoPhnGpiqlcyzBQnfagHUFJ5uyIYFLOODYBh%2FeI9ZZ%2B%2FWRR%2Bs980WHlT%2BxX3HZvS%2FiXlWxakYAKiLxluZQQ%2FSnYvzuVkKEQFbl0XrTwWqN0TfPeJ%2Bs0SNytHVD%2Bva8zdvEZl%2FcRuc4BkP3EOCxWT2U74g9cte4xKk3yi7dtY7fzw68Jlqzgu6QXPvl03xM%2Fgued%2F2g3t%2BOOMHqsRapcQvtvffya8gE9DK%2FjZ7ma%2FdIBY71rlwAw%3D%3D%7Ctkp%3ABk9SR4Ke_JuhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/pjcNYm' ),
    listing_name  ( 'MESR-100 ESR Capacitance Ohm Meter Capacitance Resistance Tester with Clips AU' ),
    item_price    ( 'AU$73.14' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/374584723634?hash=item5736fd48b2%3Ag%3A%7EU0AAOSwgN9kUG1c&amdata=enc%3AAQAIAAAAwAJWK4RbTdEXDRTsqZe8rZRv3f6Ao%2ByFoo2Az5DSx7nYZCHdX7A3BQRTjZJAYt4EaMO2bRnyAzLnnfq5T7slIMmCFyXjfJ5ITAZJ72ER1BiNEpugJHJYOdvBeMfpINw%2FUoFw1%2B12gmOXy9Ue1q5wTZlfTFdncG9%2F7j97iZA8%2F9dhOVLzG6oX3Rsqvns%2Fl7DZsYFK7V6hVse%2FTwBtJW8E2GTeGAGthJ%2Fso86ME6NvQ4svHtkVGgAJi1jLj%2F64fFnnow%3D%3D%7Ctkp%3ABk9SR4Ke_JuhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/Konigl' ),
    listing_name  ( 'MESR-100 ESR Ohm Meter Capacitance Resistance Capacitor Circuit Tester AU STOCK' ),
    item_price    ( 'AU$73.14' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-MESR-100-ESR-Meter.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004658766481.html?spm=a2g0o.productlist.main.1.6185684bCNd1hz&algo_pvid=d63eee22-9ddd-470d-a559-b26502d014b1&algo_exp_id=d63eee22-9ddd-470d-a559-b26502d014b1-0&pdp_npi=4%40dis%21AUD%2180.57%2140.28%21%21%2153.28%2126.64%21%402103200617052657778497834ea619%2112000030007787665%21sea%21AU%214385823938%21&curPageLogUid=QU450HI4GtTH&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DmHt1vB' ),
    listing_name  ( 'MESR-100/M6013 ESR Capacitance Ohm Meter Professional Measuring Capacitance Resistance Capacitor Circuit Tester Capacitor Tester' ),
    item_options  ( 'Color: MESR-100' ),
    item_price    ( 'AU$66.63' ),
    item_shipping ( 'AU$0.57' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005649024250.html?spm=a2g0o.productlist.main.5.6185684bCNd1hz&algo_pvid=d63eee22-9ddd-470d-a559-b26502d014b1&algo_exp_id=d63eee22-9ddd-470d-a559-b26502d014b1-2&pdp_npi=4%40dis%21AUD%2148.87%2148.87%21%21%2132.32%2132.32%21%402103200617052657778497834ea619%2112000033880062950%21sea%21AU%214385823938%21&curPageLogUid=MmRHDFPVtRoC&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DeGt2bB' ),
    listing_name  ( 'Multimeter MESR-100 ESR Capacitance Ohm Meter Professional Measuring Internal Resistance of Capacitor Capacitance Circuit Tester' ),
    item_options  ( 'Color: MESR-100' ),
    item_price    ( 'AU$85.70' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004514381167.html?spm=a2g0o.productlist.main.7.6185684bCNd1hz&algo_pvid=d63eee22-9ddd-470d-a559-b26502d014b1&algo_exp_id=d63eee22-9ddd-470d-a559-b26502d014b1-3&pdp_npi=4%40dis%21AUD%2185.86%2142.93%21%21%2156.78%2128.39%21%402103200617052657778497834ea619%2112000029432674172%21sea%21AU%214385823938%21&curPageLogUid=5sS4bx8U3JO1&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DBdlfwp' ),
    listing_name  ( 'MESR-100/M6013 ESR Capacitance Ohm Meter Professional Measuring Capacitance Resistance Capacitor Circuit Tester Capacitor Tester' ),
    item_options  ( 'Color: MESR-100 type1' ),
    item_price    ( 'AU$73.79' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005925078505.html?spm=a2g0o.order_detail.order_detail_item.5.2a01f19cJEwo7A' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.131.764218021V85h7&orderId=8174558501523938' ),
    order_id        ( '8174558501523938' ),
    order_date      ( 'Sep 2, 2023' ),
    order_item_name ( 'MESR-100 ESR/M6013 Multimeter Capacitance Ohm Meter Professional Measuring Internal Resistance of Capacitor Capacitance Tester' ),
    order_options   ( 'Color: Type A MESR-100' ),
    order_price     ( 'AU$63.57' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$10.05' ),
    order_discount  ( 'AU$9.39' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/719f+uTtPuL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'TOWOT' ),
    model_name        ( 'Industrial' ),
    EquipmentFeature::TWEEZERS,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'TOWOT' ),
    equipment_type    ( 'Industrial Tweezers' ),
    category          ( 'Tweezers' ),
    category          ( 'Hand Tool' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/TOWOT_Tweezers' ),
  search_url    ( 'https://www.amazon.com/s?k=TOWOT+Industrial+Tweezers&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Electronics-Experimental-Jewelry-Making-Non-Magnetic-TOWOT/dp/B09J97YT3X?th=1' ),
    affiliate_url ( 'https://amzn.to/3HjDqgT' ),
    listing_name  ( 'Precision Tweezers, 5 PCS Machine Tweezers Made of Stainless Steel Heat Resistant for Craft, Electronics, Soldering, Medical and Experimental Work, Jewelry-Making, Non-Magnetic Tweezers, by TOWOT' ),
    item_options  ( 'Style: Set' ),
    item_price    ( 'US$28.99' ),
    item_shipping ( 'US$17.67' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=TOWOT+Industrial+Tweezers&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Electronics-Experimental-Jewelry-Making-Non-Magnetic-TOWOT/dp/B09J97YT3X?th=1&linkCode=sl1&tag=johnelliotv-20&linkId=f3e29683a311791e7c0aeebd1afa9c47&language=en_US&ref_=as_li_ss_tl' ),
    affiliate_url ( 'https://amzn.to/48NVewi' ),
    listing_name  ( 'TOWOT Industrial Tweezers (SA11-15)' ),
    item_options  ( 'Style Name: SA11-15' ),
    item_price    ( 'AU$57.29' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=TOWOT+Industrial+Tweezers' ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=TOWOT+Industrial+Tweezers' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-TOWOT-Industrial-Tweezers.html' ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B09J97YT3X/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-6228551-5208610' ),
    order_id        ( '249-6228551-5208610' ),
    order_date      ( '23 August 2023' ),
    order_item_name ( 'TOWOT Industrial Tweezers (SA11-15)' ),
    order_options   ( 'Style Name: SA11-15' ),
    order_price     ( 'AU$57.93' ),
    order_quantity  ( 1 ),
    order_gst_paid  ( 'AU$5.27' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S0708a35f9d644feb81088df888d04a4a6/YIHUA-938D-Portable-Tweezers-Soldering-Station-110V-220V-Soldering-Iron-Station-Chip-Desoldering-Kit-Set-SMD.jpg_640x640.jpg_.webp' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'http://yihua-soldering.com/11-7-yihua-938d-hot-tweezers-mini-soldering-iron.html' ),
      link_text       ( 'YIHUA 938D Hot Tweezers / Mini Soldering Iron' ),
    ),
    manufacturer_name ( 'YIHUA' ),
    model_name        ( '938D' ),
    EquipmentFeature::SOLDERING_TWEEZERS,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'YIHUA' ),
    model_name        ( '938D' ),
    equipment_type    ( 'Soldering Tweezers' ),
    category          ( 'Soldering Iron' ),
    category          ( 'Tweezers' ),
    category          ( 'Hand Tool' ),
    category          ( 'Bench Equipment' ),
    manufacturer_link (
      link_href       ( 'http://yihua-soldering.com/11-7-yihua-938d-hot-tweezers-mini-soldering-iron.html' ),
      link_text       ( 'YIHUA 938D Hot Tweezers / Mini Soldering Iron' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/YIHUA_938D' ),
  search_url    ( 'https://www.amazon.com/s?k=YIHUA+938D+Soldering+Tweezers&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Tweezers-YIHUA-Portable-Soldering-Station/dp/B0BNN6MLQG/ref=sr_1_2?dib=eyJ2IjoiMSJ9.K1Ov6TbYHdyuoPkaM9Uui0gM7Nkv1QzFqhGp1n_PD2rGjHj071QN20LucGBJIEps.GO-CbRLoulj6CjPn6Mt6vucU_ayiAh3QpjyICluUiPI&dib_tag=se&keywords=YIHUA+938D+Soldering+Tweezers&qid=1705266595&sr=8-2' ),
    affiliate_url ( 'https://amzn.to/4aTpg3F' ),
    listing_name  ( 'Mini Tweezers YIHUA 938D Portable Soldering Station 110V Tweezers Soldering Iron Station For Soldering' ),
    item_price    ( 'US$77.39' ),
    item_shipping ( 'US$19.09' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Tweezers-YIHUA-Portable-Soldering-Station/dp/B078NS2HZ8/ref=sr_1_3?dib=eyJ2IjoiMSJ9.K1Ov6TbYHdyuoPkaM9Uui0gM7Nkv1QzFqhGp1n_PD2rGjHj071QN20LucGBJIEps.GO-CbRLoulj6CjPn6Mt6vucU_ayiAh3QpjyICluUiPI&dib_tag=se&keywords=YIHUA+938D+Soldering+Tweezers&qid=1705266595&sr=8-3' ),
    affiliate_url ( 'https://amzn.to/3vDD8yT' ),
    listing_name  ( 'Hot Tweezers YIHUA 938D Portable hot tweezers Soldering smt hot tweezers 110V US Plug YIHUA Tweezers Soldering Iron Station' ),
    item_price    ( 'US$109.99' ),
    item_shipping ( 'US$19.48' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=YIHUA+938D+Soldering+Tweezers&s=price-asc-rank' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=YIHUA+938D+Soldering+Tweezers' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/155046681799?hash=item2419809cc7%3Ag%3Akd4AAOSwQV5fBbaM&amdata=enc%3AAQAIAAAA8KXDvR7otUSTWV6RSUjcOR2dPDs46K%2FcIt8v%2BsGXGn%2FdTJKxWd3IutF9DILNscvA%2Ff3XVB7fA77g5iUep68zRGJwVi2HX412PIbhI9ZPH8Pyp5l2Y0e76lheF2QAG7SMCTtvM3Lt%2FyyZjEyi7UoDSZ7uvJ%2FAqnVjWUnJBIb7hAVCpQsf5dkapdxnusn7dLV0qdNGoJJhbx%2BCgPiKXgqvNrD5zj3LWP91EIxeqlJtbu%2BUBjEdFCKEkQ4VQSogsO3xB0dJ7%2FZHeVMLljCzFiYOW6G2ukf8ipOUdhNYadk%2BfUPkCTKcdshJSxGAfcgN5I88tA%3D%3D%7Ctkp%3ABk9SR5LzjZ2hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/eCrAJn' ),
    listing_name  ( '938D Portable YIHUA Hot Tweezers Mini Soldering Station For BGA SMD 110V 60HZ' ),
    item_price    ( 'US$44.56' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/296116460885?hash=item44f1ea9d55%3Ag%3AG6YAAOSwRG1hSEuS&amdata=enc%3AAQAIAAAA0HqeDpk4miWj30eQmB5eON7stqknM0gPIu7L8LSiCHYG7F%2BuFCeXK9vp0WqMYNXJdn9vw8evERqoydFv9tHICa5VC004XGUxeWr1FQOAIWuwPJvQa2wNkQ4U1FxUcf1olut0QyDaZmNoNiXj2PGcUyEaOrqCkKMiuofQ7GFawgSHcfrywaBf1OwNpNVVHjVmIcFUKWx2mOdzRkV5DzNOQi7hqMYG3preRnCxN00%2BtsWs%2B0mMN3B5lIHACvAf45elZuIRToZ8P3FBs0NCLVU7WdM%3D%7Ctkp%3ABk9SR5LzjZ2hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/LN29oa' ),
    listing_name  ( '120W 938D Portable YIHUA Hot Tweezers Mini Soldering Station w/Stand For BGA SMD' ),
    item_price    ( 'US$46.55' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/176118451448?hash=item29017a4cf8%3Ag%3AjD0AAOSw9Rpe2z2p&amdata=enc%3AAQAIAAAA8AzGsD%2BYejFecKq4rpHyob0RsGznALmRytN%2BrLh7gsWO0NZSV3cSXUIMx344ZTT216%2BwF5n9PJ8AaCBfCvbSqXkyBO3Pnb9UN0Lm8%2B98Al%2FfMGRXGK%2Fb%2BfVebwWJ%2BE0Hjg169nuu7wvQ%2BcMlKN5qZIZhW2Wx2goDZC52Iw2ilgd%2FYkHuySKKtDSb7cA%2B8RIkLPVTt0TB%2Fa30ox0yQfTU%2FbGmyRuqAF1uuHVxd6kojgqMRZF6CNrdIMbO2d2u%2B8fYaMSrJUfSmyJeMZWGuAd1iVxQ%2BsIJuptlIt3sz12OQ8MF30Ot4oLvNf9qlg%2Bq%2BweWaw%3D%3D%7Ctkp%3ABk9SR5LzjZ2hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/O7Dmly' ),
    listing_name  ( 'Hot Tweezers Mini Soldering Station YIHUA 938D Portable for BGA SMD 110V 938D' ),
    item_price    ( 'US$47.00' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=YIHUA+938D+Soldering+Tweezers' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/384179129431?hash=item5972dc4c57%3Ag%3Ay5EAAOSwoYZgYpBW&amdata=enc%3AAQAIAAAA8H1Gq9fj1RUbVpBiHS32Toz4mBeOlLI2B0ZKZ42hHlxzyrL%2FsVKSa93Upaad8OceAGpoUz%2FhSz7%2BEKsPkEI8iYlrMeFTpzaVl9GAC2yWjflioT13QvcR4KWSrJIRe2lQ2c9K1l7Pgky%2BIv3cs%2FonC8fO8QQuuNcBcuBlI3jgCwKFyBUrVYjsR1qjOYK9%2FQuvE80S4YrAdhiCVB2ssTFfQeKRtpfDZqR3jR96F33sf83y35Rwfp5HdHT8OXjoH5y5%2FojzoNS8nLJwj2sNPgKyKYOTxXBtQw%2BoMueHmuuAyYUYzcfwGlR2teBjZw9QW00e5w%3D%3D%7Ctkp%3ABk9SR8qXop2hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/Ncs0x8' ),
    listing_name  ( 'YIHUA 938D Portable Hot Tweezers Mini Soldering Station 220V 120W for BGA SMD' ),
    item_price    ( 'AU$93.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/294198367402?hash=item447f96d4aa%3Ag%3Az44AAOSwZSxfTe-R&amdata=enc%3AAQAIAAAA0OLi7kdHVVYnBuaKfeSSQhWUiTrz3dvSg2bMwHXrVehDbANnYXYuT5r%2Bsp66BSFD%2BuiN%2FWYd3vYH1G99zr%2BXhuUTFK8hG0cWC15ag9qFgBp7Jr%2BT8I%2FAaY4es%2F2pTNrQQ7%2BDLfrm%2BnJIXhOs6N0ES9Gli%2BB8tWzlGEdbCML48szFiGq0IiB398UPfFtgKZOSlrO7rJnhJAppYk8vOPZF9EFURwXgjw5VlkLjzB67nCLLJxGCAMfuD%2FW3FmfXvQ9ugVUasT9aaSMXXjhvzQV2CUs%3D%7Ctkp%3ABk9SR8yXop2hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/pTLjFu' ),
    listing_name  ( 'YIHUA 938D Mini Portable Hot Tweezers Soldering Iron Station 220V + Heat core AU' ),
    item_price    ( 'AU$99.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/186027407779?hash=item2b5018f9a3%3Ag%3AXFoAAOSw0Bhk03Ae&amdata=enc%3AAQAIAAAA0O8fcYGz0kyoWVrbs2dfmWcOuc6Z9TTY1TWnWKUWkJ2p0mLxI5Qgo5ToCevF0qF3GSrvIcIAIcHa8pOzLBo0cQGatwqwq1B%2BfXW5PO6UB2DlfZHh6GK2Kt9WHAxNgHWCwlyrXRZ%2B5wjUkDI7TeG72wOlbCMm7iM0x5tJCDvobh2rQMdIHC%2BeHs%2BxJmfUyrWJXLrk%2BRz7FGQfp38ZEJn0Uj6gmyOAxCLi1m5ZQywix5EPxjs17lwdLjn9qRGDHDotd6vc9ULCGT4MpwIJh%2B0xbdk%3D%7Ctkp%3ABk9SR8yXop2hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/8PIeKx' ),
    listing_name  ( 'YIHUA938D Portable Tweezers Soldering Iron Thermostat Digital Display' ),
    item_price    ( 'AU$173.79' ),
    item_shipping ( 'AU$111.10' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-YIHUA-938D-Soldering-Tweezers.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/4000299695525.html?spm=a2g0o.productlist.main.5.3f6b3b53cXtK1R&algo_pvid=03ef9c65-0c98-4cfb-bf3c-db53de1369fc&algo_exp_id=03ef9c65-0c98-4cfb-bf3c-db53de1369fc-2&pdp_npi=4%40dis%21AUD%2119.20%2110.94%21%21%2112.70%217.24%21%402103297417052670719296779efc47%2112000020773154137%21sea%21AU%214385823938%21&curPageLogUid=kqwbfrb4RdA4&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DDZjNZX' ),
    listing_name  ( 'YIHUA 938D Portable Tweezers Soldering Station 110V 220V YIHUA Tweezers Soldering Iron Station Welding Tool' ),
    item_options  ( 'Color: B' ),
    item_price    ( 'AU$63.18' ),
    item_shipping ( 'AU$4.13' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/32888584421.html?spm=a2g0o.productlist.main.7.3f6b3b53cXtK1R&algo_pvid=03ef9c65-0c98-4cfb-bf3c-db53de1369fc&algo_exp_id=03ef9c65-0c98-4cfb-bf3c-db53de1369fc-3&pdp_npi=4%40dis%21AUD%21143.19%2161.58%21%21%2194.69%2140.72%21%402103297417052670719296779efc47%2165690070791%21sea%21AU%214385823938%21&curPageLogUid=Q7tzESFm5gqq&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DciQ2e5' ),
    listing_name  ( 'Newest 110V/220V EU/US/GB/AU PLUG YIHUA 938D Portable Hot tweezers Mini Soldering Station Hot Tweezer for BGA SMD repairing' ),
    item_options  ( 'Color: B' ),
    item_price    ( 'AU$61.58' ),
    item_shipping ( 'AU$2.53' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006420350203.html?spm=a2g0o.productlist.main.9.3f6b3b53cXtK1R&algo_pvid=03ef9c65-0c98-4cfb-bf3c-db53de1369fc&algo_exp_id=03ef9c65-0c98-4cfb-bf3c-db53de1369fc-4&pdp_npi=4%40dis%21AUD%2155.86%2150.28%21%21%2136.94%2133.25%21%402103297417052670719296779efc47%2112000037101142522%21sea%21AU%214385823938%21&curPageLogUid=ibM8zqCAyROV&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DEch5tX' ),
    listing_name  ( 'YIHUA 938D Portable Tweezers Soldering Station 110V 220V Soldering Iron Station Chip Desoldering Kit Set SMD Welding Equipment' ),
    item_options  ( 'Color: set 1' ),
    item_price    ( 'AU$50.28' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005115533491.html?spm=a2g0o.order_detail.order_detail_item.3.39b5f19cVibOyd' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.146.764218021V85h7&orderId=8174070784643938' ),
    order_id        ( '8174070784643938' ),
    order_date      ( 'Aug 22, 2023' ),
    order_item_name ( 'YIHUA 938D Portable Tweezers Soldering Station 110V 220V Soldering Iron Station Chip Desoldering Kit Set SMD Welding Equipment' ),
    order_options   ( 'Color: Set 2, Plug Type: EU' ),
    order_price     ( 'AU$53.16' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$4.82' ),
    order_discount  ( 'AU$5.00' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://d297fd4gt7t5lv.cloudfront.net/file/2023-11-03-164250/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( 'Sharp' ),
    model_name        ( 'EL-546L' ),
    EquipmentFeature::SCIENTIFIC_CALCULATOR,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Sharp' ),
    model_name        ( 'EL-546L' ),
    equipment_type    ( 'Scientific Calculator' ),
    category          ( 'Calculator' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Sharp_EL-546L' ),
  search_url    ( 'https://www.amazon.com/s?k=Sharp+EL-546L+Scientific+Calculator&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=Sharp+EL-546L+Scientific+Calculator&s=price-asc-rank' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Sharp+EL-546L+Scientific+Calculator' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/sch/i.html?_from=R40&_trksid=p4432023.m570.l1313&_nkw=Sharp+EL-546L&_sacat=0&mkcid=1&mkrid=711-53200-19255-0&siteid=0&campid=5339019639&customid=&toolid=20012&mkevt=1' ),
    listing_name  ( 'Sharp EL-546L' ),
    item_price    ( 'US$20.00' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Sharp+EL-546L+Scientific+Calculator' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Sharp-EL-546L-Scientific-Calculator.html' ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://d297fd4gt7t5lv.cloudfront.net/file/2023-11-03-164352/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( 'DigiTech' ),
    model_name        ( 'QM1323' ),
    EquipmentFeature::MULTIMETER,
    EquipmentFeature::HANDHELD_MULTIMETER,
    EquipmentFeature::VOLTMETER,
    EquipmentFeature::AMMETER,
    EquipmentFeature::OHMMETER,
    EquipmentFeature::CAPACITANCE_METER,
    EquipmentFeature::FREQUENCY_COUNTER,
    EquipmentFeature::CONTINUITY_TESTER,
    EquipmentFeature::DIODE_TESTER,
    EquipmentFeature::THERMOMETER,
    EquipmentAttribute::HAND_TOOL,
    EquipmentAttribute::CORDLESS,
    EquipmentConnectivity::BANANA_PLUG,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'DigiTech' ),
    model_name        ( 'QM1323' ),
    equipment_type    ( 'Multimeter' ),
    category          ( 'Multimeter' ),
    category          ( 'Hand Tool' ),
    category          ( 'Cordless' ),
    category          ( 'Meter' ),
    category          ( 'Test Equipment' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Digitech_QM1323' ),
  search_url    ( 'https://www.amazon.com/s?k=DigiTech+QM1323+Multimeter&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=DigiTech+QM1323+Multimeter&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Cat-III-Multimeter-with-Temperature/dp/B07CTBSF9Z/ref=sr_1_22?dib=eyJ2IjoiMSJ9.n0g_4RCJFY0IlJzv7dawAo2vyIAX8mZXG0ZI_cF7iJ49v1J_uIy83FzxEx9IxaIYndvIN9N_1YMGGFl73eN5_sXbR2TpVdD9pl5AuCbQwD6UEgxsle_Hp-f6jIydlCrcDebxmcse3ivj7uBHQxQN9g.XxTnvBJxKoCYDyQN7zdduaOcQWAeN6QoSVzWSfJ5Ttw&dib_tag=se&keywords=DigiTech+QM1323+Multimeter&qid=1705268900&sr=8-22' ),
    affiliate_url ( 'https://amzn.to/3S1uy4A' ),
    listing_name  ( 'Cat III Multimeter with Temperature' ),
    item_price    ( 'AU$61.70' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=DigiTech+QM1323+Multimeter' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/123747362000?epid=1176999293&hash=item1ccfeae4d0%3Ag%3AkfMAAOSwqCJcwtM5&amdata=enc%3AAQAIAAAA8NCxUa9rTOBlBgl6SBdQzaonO2Jc%2Bx9CUEWzYHv3qPX1x7NRJAjNSjN47IIeidLGEv8bHCyAcVrBKTSYqcIYnEeBkcUGA%2FzmRi6r9fCZMgKVQwLvghhsGrdY9NtQS3WXzKsVr3mNvcoFNEq3Yy8rnFB6mEQxzxfI8o%2BBbTSDcGJh5pATiaY0c1uNyluYGlIs822PaW%2BplF58MKtFtad5Q4OtRgVEMmJwKUEHNxjR6t%2B2MpT2CaUJ%2BZkiG8v5U4NcQGfdGhyoA3kdNZ6Rr80m5o1uriQWWK72nk7tVVWDtn%2BtEhS6Zl75QMegTp4SHS0LnA%3D%3D%7Ctkp%3ABk9SR9ixnZ-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/I89e4h' ),
    listing_name  ( 'Cat III Multimeter with Temperature Data Hold 600V Leads included' ),
    item_price    ( 'US$36.14' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/153726835976?epid=1176999293&hash=item23cad55d08%3Ag%3AykIAAOSwDJRgSAy6&amdata=enc%3AAQAIAAAA0NMHA1W4l%2BHGVAzo67alFwXNh8tp52Tv%2BJTsaEUrLLPuLMeRhJ9ynEtFm9knWp%2FiNvUkX6mSeiLMoia%2BocPZSHpJwQuLlKrYI9nPEPmdOnOjPora1JT%2BGyara0jmU4AIf1q%2By%2BsXqIOtlojq7kg78OQFIBTdGzHPDiPUaG03ciPq%2BLk9BSfd2qMER0mVlYg0exjOLUF29aBOEIaGdd52XwFCK%2FmRDlK6YmbROgb3LeWq3wLou25XD3qaXrHuDU%2Fr3q3OfcfqcXa6vMhzkLY3HYs%3D%7Ctkp%3ABk9SR9ixnZ-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/puS25J' ),
    listing_name  ( 'Category III Multimeter Temperature Woven nylon pouch with K-type probe case ' ),
    item_price    ( 'US$43.51' ),
    item_shipping ( 'US$5.33' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/372043457508?epid=1176999293&hash=item569f84a3e4%3Ag%3AQ8sAAOSwIStgR0%7ET&amdata=enc%3AAQAIAAAA0A8uCFRo6771fKAgSy%2B5P1MO3aASwz9P18HgdUVivSuAAJjhgT49NLUv3JWxrMS1ZCTLGg1ya9MVuNY518drWYZsNKsZ4ReUCZOSPCuEElAf8Sza%2BidgwsR1Ak8czABn8U%2BHd%2BoN57lAopyc3RY4jf8jb8eNsc5HVKpRr1LOe1fNxZcuYTVaWOj4hvs1bZerRvsLIhiiVpTIYorRZoM0B2d6T58wRvuIloqLktpfRdf6jVcFYo%2Fk8htExcLAzYZLIzxll2hBVkF1muyMgkOKsoY%3D%7Ctkp%3ABk9SR9ixnZ-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/otn9ZN' ),
    listing_name  ( 'Digitech Cat III 600V Multimeter with Temperature K-type probe Woven Nylon Pouch' ),
    item_price    ( 'US$48.87' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=DigiTech+QM1323+Multimeter' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/123747362000?epid=1176999293&hash=item1ccfeae4d0%3Ag%3AkfMAAOSwqCJcwtM5&amdata=enc%3AAQAIAAAA8NCxUa9rTOBlBgl6SBdQzaonO2Jc%2Bx9CUEWzYHv3qPX1x7NRJAjNSjN47IIeidLGEv8bHCyAcVrBKTSYqcIYnEeBkcUGA%2FzmRi6r9fCZMgKVQwLvghhsGrdY9NtQS3WXzEIQEwkq2Gl1f1ur6ly1z9zN30euHHu7WgVB5QlImOZLImtfGtrFPBjejKBbcRqATu%2BdXQRfPagblpy%2FKK7IErHYPR6yAe6k12q3gynQfQrfwsJzLsER6dAuV6pBM3CItd%2BeGy%2Bp2VKCNJuKPOwwFnrjZt58eRa0F19bvS04XNrnLovEHNnn5blzZGc%2Fpncv6w%3D%3D%7Ctkp%3ABk9SR6LFr5-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/rRwfJO' ),
    listing_name  ( 'Cat III Multimeter with Temperature Data Hold 600V Leads included' ),
    item_price    ( 'AU$53.95' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/153726835976?epid=1176999293&hash=item23cad55d08%3Ag%3AykIAAOSwDJRgSAy6&amdata=enc%3AAQAIAAAA0NMHA1W4l%2BHGVAzo67alFwXNh8tp52Tv%2BJTsaEUrLLPuLMeRhJ9ynEtFm9knWp%2FiNvWhsyjNSBfbmB5uq4FrcwhAPTxRBXWFKQxA2xEdIYzblG63m6ZQvW2UYRxP6k9QZOB6ewtrX5pSAl7OgZOtRLZcHt7nmEqQdWOufBDlLFYgsM0pk98Jk4BJON8js%2F4MV85WDO35yyJxDVljjriimmdZO0bvHxL7DcqKHcv3FB8ZsLVEW4jABqm6zpeo45KOJAyzNLtT%2F%2F60k9jE%2BTTawRI%3D%7Ctkp%3ABk9SR6LFr5-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/nE82MS' ),
    listing_name  ( 'Category III Multimeter Temperature Woven nylon pouch with K-type probe case ' ),
    item_price    ( 'AU$64.95' ),
    item_shipping ( 'AU$7.95' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/372043457508?epid=1176999293&hash=item569f84a3e4%3Ag%3AQ8sAAOSwIStgR0%7ET&amdata=enc%3AAQAIAAAA0A8uCFRo6771fKAgSy%2B5P1MO3aASwz9P18HgdUVivSuAAJjhgT49NLUv3JWxrMS1ZDbGmt6a4oaokMuyMVCvQugKZkTiNsXA4OI%2BTFxvy39SR7La6FxboUWCI%2BOwWTdAajWKJQxyVpdEiSnmoexa2YlNZlo%2FY0HFPkgMgE2jyGjk1i%2By%2FX7JKS9516yfPZdPLTGFwbtirLLQ53%2FOmoOPFcIu2r7VFsANhIA7mvRN969J%2FLBH4fjkTZRE8U1O%2FLLjsT9Omk18PrXoKkh53jpZTbc%3D%7Ctkp%3ABk9SR6LFr5-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/tmJeRI' ),
    listing_name  ( 'Digitech Cat III 600V Multimeter with Temperature K-type probe Woven Nylon Pouch' ),
    item_price    ( 'AU$72.9' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-DigiTech-QM1323-Multimeter.html' ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/A0e8c6420aaf64af5a95266b80c811a52F/UNI-T-UT116A-UT116C-Digital-Tweezers-Smart-SMD-Tester-Electrical-Multimeter-Resistance-Capacitance-Continuity-Diode-Test.jpg_640x640.jpg_.webp' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://meters.uni-trend.com/product/ut116-series/' ),
      link_text       ( 'UT116 Series SMD Testers' ),
    ),
    manufacturer_name ( 'UNI-T' ),
    model_name        ( 'UT116A' ),
    EquipmentFeature::DIGITAL_TWEEZERS,
    EquipmentFeature::SMD_TESTER,
    EquipmentFeature::COMPONENT_TESTER,
    EquipmentFeature::HANDHELD_MULTIMETER,
    EquipmentAttribute::CORDLESS,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'UNI-T' ),
    model_name        ( 'UT116A' ),
    equipment_type    ( 'Digital Tweezers' ),
    category          ( 'SMD Tester' ),
    category          ( 'Component Tester' ),
    category          ( 'Multimeter' ),
    category          ( 'Meter' ),
    category          ( 'Hand Tool' ),
    category          ( 'Cordless' ),
    category          ( 'Tweezers' ),
    manufacturer_link (
      link_href       ( 'https://meters.uni-trend.com/product/ut116-series/' ),
      link_text       ( 'UT116 Series SMD Testers' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/UNI-T_UT116A' ),
  search_url    ( 'https://www.amazon.com/s?k=UNI-T+UT116A+Digital+Tweezers&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/UNI-T-Multimeter-Electrical-Resistance-Capacitance/dp/B0CD5S46KT/ref=sr_1_1?dib=eyJ2IjoiMSJ9.LHglIo3IVTIwdznmPEbiUHXJBf8-JCUYcB-mSvFSt-yvMYBQnGG45W0XLI9wY47n.VMD6jEueVWZ2TlA3jAuSi1dZsMjnjfQqlijM93Ha1Co&dib_tag=se&keywords=UNI-T%2BUT116A%2BDigital%2BTweezers&qid=1705269339&sr=8-1&th=1' ),
    affiliate_url ( 'https://amzn.to/3O48ODN' ),
    listing_name  ( 'UNI-T Multimeter clamp Meter UT116A UT116C Digital Tweezers Smart SMD Tester Electrical Multimeter Resistance Capacitance Continuity Diode Test Meter(UT116A)' ),
    item_options  ( 'Size: UT116A' ),
    item_price    ( 'US$57.46' ),
    item_shipping ( 'US$15.50' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/UNI-T-Electrical-Multimeter-Resistance-Capacitance/dp/B0C8YFZ25Y/ref=sr_1_2?dib=eyJ2IjoiMSJ9.LHglIo3IVTIwdznmPEbiUHXJBf8-JCUYcB-mSvFSt-yvMYBQnGG45W0XLI9wY47n.VMD6jEueVWZ2TlA3jAuSi1dZsMjnjfQqlijM93Ha1Co&dib_tag=se&keywords=UNI-T+UT116A+Digital+Tweezers&qid=1705269339&sr=8-2' ),
    affiliate_url ( 'https://amzn.to/3tJyYoJ' ),
    listing_name  ( 'UNI-T UT116A UT116C Digital Tweezers Smart SMD Tester Electrical Multimeter Resistance Capacitance Continuity Diode Test Meter(UT116A)' ),
    item_options  ( 'Size: Multimeter-UT116A' ),
    item_price    ( 'US$53.00' ),
    item_shipping ( 'US$15.00' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=UNI-T+UT116A+Digital+Tweezers&s=price-asc-rank' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=UNI-T+UT116A+Digital+Tweezers' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/314911067058?hash=item4952298bb2%3Ag%3A2K4AAOSwfMRkit8I&amdata=enc%3AAQAIAAAA0JN8DG2Er9vIwIcpkBXH1PYtcql9cF3FIZL79LTJm1rBfIuLJBgmH3WhnZwHz%2Bf0yQ79xFqrE8TmOUZqVxXghftNXf3F2nxJ76A%2BrlRkbbYggK%2FhPnUIh4PE%2BgwIJ8w%2Fvienr%2F7u3wSCCdLynP22GgrPUXgmZ8ea5%2B6jco%2BmiGjy%2FM4BnMg4EX7%2B8ohFbUE6tiqh9anKGjEM6CVq%2F1jhKekOF%2FBPfq5GW%2FUNl2KelZMETZP0yXP8NKdxpv%2BvfO%2BIHtHljKm2%2FI%2BAOouP%2FKXumeE%3D%7Ctkp%3ABk9SR7766J-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/v60FMd' ),
    listing_name  ( 'UNI-T Digital Tweezers Smart SMD Tester UT116A 116C Electrical Multimeter Meter✦' ),
    item_options  ( 'Model: UTI116A' ),
    item_price    ( 'US$29.90' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/204600793758?hash=item2fa3285a9e%3Ag%3A09oAAOSw71Zlk904&amdata=enc%3AAQAIAAAA8IL9zpcaAlvJz8YCD9VgbUSBdmDumCU%2FqTlkdsYjFPQon4qf4TiUPIqH3qUtHPDCN47cRA6AgAwqYPbHOVtlD0cTW4zPT%2BDsys9EY2fzb4rn0scG7aaGB8LHOej%2F1cUZsbKixTh5t8rpyav9faeAf1S%2F4OwPcoCJIi3dK2Sk%2B1mlx0JEJCWIDPUUgelia7cPavLiVTYn%2FOA22Gopy4UNoCTz0hY4ePM%2B9u4pdjo%2BEQJPJTYcdXcqUbD0aFBakx%2FX8kKIYFfHqomeK05PxAQVXmnUCTdacX%2FJOsan12sc8otVgbZ5ohxoQ8sOUkhOR%2BP7qg%3D%3D%7Ctkp%3ABk9SR7766J-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/qt9qCs' ),
    listing_name  ( 'UNI-T UT116A UT116C Digital Tweezers Smart SMD Tester Professional Multimeter' ),
    item_options  ( 'UNI-T: UT116A' ),
    item_price    ( 'US$34.50' ),
    item_shipping ( 'US$10.06' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/394683050351?var=&hash=item5be4f1696f&amdata=enc%3AAQAIAAABAKj%252FDpX58dTn%252BsjICyqahmx6%252BBVZfB2QIVN%252FxFzDDZ1wcSbKcr5h%252F%252FnGCEh8uTtWLYraqZa6EbC63Rk42%252FEBgz5d%252B%252BTyO1pDayfbfrUKoQnzHN%252F38sN4xrZ5GRsgVZH49V%252Bn7Bz91Mak7I1kKUo7ml5kFfyk8pRB7I%252BIi49MGsTPZqqR6tw1Xym8TfJ3HB3kqGrDlgFbHQQTj%252BEjiLf%252FkfrNJGcAIvQA2ic7f7vPkh9TgBn9TwtaMLGIbmj32Ii%252BBY1erUzMQa%252BunjxNPcQdT%252BtY%252Bxynr1MzAkN7N3ff69r0njH0pHXJ5%252BEdnV5lgFDFdFtlKyQlaSjqT%252BL8cxAPw2Y%253D%7Campid%3APL_CLK' ),
    affiliate_url ( 'https://ebay.us/5BrJXD' ),
    listing_name  ( 'UNI-T UT116A 116C Digital Tweezers Smart SMD Tester Electrical Multimeter Meter' ),
    item_options  ( 'Model: UT116A' ),
    item_price    ( 'US$29.90' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=UNI-T+UT116A+Digital+Tweezers' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/284124403921?epid=20043344383&hash=item42272258d1%3Ag%3AZVoAAOSwNkhfhmVf&amdata=enc%3AAQAIAAAA8I%2FOcFzdocR%2F4bu562wRXcK%2FYIpjpbGXVOiDhJmoO4QNUw16mebRLT9H0qw%2BBxHHPX1OPqltrFWDBonn7WxWfELXJ2ibuvgYKH%2BkFGN72J89mWT3zIROMRqhWSedTQhidz5dQ7StLNfLL6FPBidUFBFG7yj2rJYTWplulTl0NfmWUNvdykH%2BsiB1IFSmyhFScJocUj1%2F5v2z97aN7ZTSnakLxI8JIsGVAro1T4B6V0Rxv6H60eKaOcTSin6RpGgzSiIP31ipkpU%2BdEmCuNW%2FeLPypmOmH1LRBAN%2BTnHHfjzymPaD%2Fscn3LZ27bKo1oMnDw%3D%3D%7Ctkp%3ABk9SR-DEgKChYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/glJbLU' ),
    listing_name  ( 'UNI-T UT116A SMD Tester Meter Multimeter LED Diode Continuity Battery Tester✦Kd' ),
    item_price    ( 'AU$38.39' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/333753452162?epid=20043344383&hash=item4db5418682%3Ag%3AZVoAAOSwNkhfhmVf&amdata=enc%3AAQAIAAAA8EsGrZz5G8y9X%2B8271s5BFCv3cNOJKk6OW2d4UUAc7lizAL6f2IZg27Dw1LDnoZOzW%2B0he%2Bc3jQ21%2BRxftmJkF4vXQmvY6QRQrpnED1UGvsAq2bLyHOw6C1eaG4tXfDUVNKGNxDNZhmlyFRDGlDSLkD5mTPvh%2BlOQ4%2FILjAboG1v20E31g%2FkN%2FPRm4z%2BJSr3%2BiDYjplPm8xpMf%2BTUv5z0%2BlFI29%2BD8RL576OKKf7dmdDnn3XEmsYICSdLZ6nFlzFXGirJfoq%2Bhv44TApXm8xHX1ePhenwXkdHDL4Vi5kpBYD9PcmC3Q5GS4InBzvkISO3A%3D%3D%7Ctkp%3ABk9SR-DEgKChYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/ylmit8' ),
    listing_name  ( 'UNI-T UT116A SMD Tester Meter Multimeter LED Diode Continuity Battery Tester #' ),
    item_price    ( 'AU$40.05' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-UNI-T-UT116A-Digital-Tweezers.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005002282691985.html?spm=a2g0o.productlist.main.3.204e6385kxwhEB&algo_pvid=4dbafb55-2fbf-48b2-aabc-291eb611c4dd&algo_exp_id=4dbafb55-2fbf-48b2-aabc-291eb611c4dd-1&pdp_npi=4%40dis%21AUD%2156.81%2134.08%21%21%2137.57%2122.54%21%402103010f17052699923315517eafef%2112000036643691003%21sea%21AU%214385823938%21&curPageLogUid=izDCKEN6Fchg&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_De5jUm5' ),
    listing_name  ( 'UNI-T UT116A UT116C Digital Tweezers Smart SMD Tester Professional LED Diode Electronic Component Tester Electrical Multimeter' ),
    item_options  ( 'Color: UT116A' ),
    item_price    ( 'AU$46.49' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006353922303.html?spm=a2g0o.productlist.main.5.204e6385kxwhEB&algo_pvid=4dbafb55-2fbf-48b2-aabc-291eb611c4dd&algo_exp_id=4dbafb55-2fbf-48b2-aabc-291eb611c4dd-2&pdp_npi=4%40dis%21AUD%2148.39%2133.39%21%21%21229.32%21158.23%21%402103010f17052699923315517eafef%2112000036865485501%21sea%21AU%214385823938%21&curPageLogUid=uOWCUCfUzLXc&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DEmKKCv' ),
    listing_name  ( 'UNI-T UT116A UT116C Digital Tweezers Smart SMD Tester Electrical Multimeter Resistance Capacitance Continuity Diode Test Meter' ),
    item_options  ( 'Color: UT116A' ),
    item_price    ( 'AU$45.53' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/4000542048083.html?spm=a2g0o.productlist.main.9.204e6385kxwhEB&algo_pvid=4dbafb55-2fbf-48b2-aabc-291eb611c4dd&algo_exp_id=4dbafb55-2fbf-48b2-aabc-291eb611c4dd-4&pdp_npi=4%40dis%21AUD%2153.80%2146.80%21%21%2135.58%2130.95%21%402103010f17052699923315517eafef%2112000018923655496%21sea%21AU%214385823938%21&curPageLogUid=UeEdRupQIpOc&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DeqrDsV' ),
    listing_name  ( 'UNI-T UT116A SMD Tester Meter Multimeter Rotable Tweezer Resistance Capacitance LED Diode Continuity Battery Tester' ),
    item_price    ( 'AU$46.80' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005002282691985.html?spm=a2g0o.order_detail.order_detail_item.3.583cf19csspvoh' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.151.764218021V85h7&orderId=8174558501483938' ),
    order_id        ( '8174558501483938' ),
    order_date      ( 'Sep 2, 2023' ),
    order_item_name ( 'UNI-T UT116A UT116C Digital Tweezers Smart SMD Tester Professional LED Diode Electronic Component Tester Electrical Multimeter' ),
    order_options   ( 'Color: UT116A' ),
    order_price     ( 'AU$48.32' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$4.54' ),
    order_discount  ( 'AU$2.90' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://d297fd4gt7t5lv.cloudfront.net/file/2023-11-03-172222/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( 'RELIFE' ),
    model_name        ( 'RL-007GA' ),
    EquipmentFeature::SOLDER_LUGS,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'RELIFE' ),
    model_name        ( 'RL-007GA' ),
    equipment_type    ( 'Solder Lugs' ),
    category          ( 'Solder Lugs' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/RELIFE_Dot' ),
  search_url    ( 'https://www.amazon.com/s?k=RELIFE+RL-007GA+Solder+Lugs&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=RELIFE+RL-007GA+Solder+Lugs&s=price-asc-rank' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=RELIFE+RL-007GA+Solder+Lugs' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/355211950970?hash=item52b4483b7a%3Ag%3ANogAAOSwiDxhZ-o0&amdata=enc%3AAQAIAAAA0JgabiXVqZG%2FRdRU24lUUsApmzMlowJr%2F2EEoVRnTJ8Qs7eHy4iY73pGM4xcISuBhPU4Q%2Bi0Dm7G0NNBZUeubbAZe%2BWf0r0h5xXmTmsmIf0Fwqk%2FAyizSgsLHhEmOZcmc8qIgMVop7Cy%2FGpOvzmFahV1XNkppTf%2FZvd%2BY3jX5mXTXmnHzX3ZoRRotHMur0QLS9kUwDLpBvEqyN6%2FIaLF%2FhhHi0UJNE6%2FNqQnmiZ6ikQh7iVg%2FlzLtTRh1wkWjH2uP%2Fs0vHEBn67sfx2Fzrt9vyY%3D%7Ctkp%3ABk9SR4aY3KChYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/XqTmbe' ),
    listing_name  ( 'RELIFE Dot Repairing Solder Lug Pad For IPhone Welding Board Flywire Replacement' ),
    item_options  ( 'Model: 1pcs' ),
    item_price    ( 'US$3.26' ),
    item_shipping ( 'US$2.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/165128146376?hash=item2672678dc8%3Ag%3AZLwAAOSwOuRhZ-os&amdata=enc%3AAQAIAAAA0FLYgDDi7o4xL7l3eKGh2FSBZqorqENW81sRCbLTLO2Vc6Avian64sbnKtpPLARDwHttSqeSUBcIGIJXMMBrOUrwts%2BV9z220eIDFcfPQH8vWfeufhzIF3KF7B7uOei%2BtsBCxa6eHHu%2FDgZf69i1J3w1b1sYkHs5GaJnFMaAoInjW4lPi61e6QUXtCIzb%2Bqw2TcVLOjKDLNJz%2BLSA4oJp1xhT99xMdq5k1%2BZILzAKkjw0MCk11V29mfPbW%2BvTFQayqy64j5WCy6ayA7Bp1a9J2k%3D%7Ctkp%3ABk9SR4aY3KChYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/Gd3vmh' ),
    listing_name  ( 'RELIFE Dot Repairing Solder Lug Spot Soldering Pad RL-007GA for iPhone Welding' ),
    item_options  ( 'Model: 1pcs' ),
    item_price    ( 'US$7.25' ),
    item_shipping ( 'US$1.59' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/165353593854?hash=item267fd79bfe%3Ag%3AZLwAAOSwOuRhZ-os&amdata=enc%3AAQAIAAAA0BdOebZ95ZiOKuUF4A8iQCXbL6rxoVDV2y7tRvf0tTsX9OITNLcdqvrsG5%2BKMs2QtN22zXEzAyaRQS%2BxwI%2FF47htPt6nvyRoGaGAbe7KPbqM5%2FVF%2BIiRV1oFvKH9VvR322ntpp4lUpyxsoxyJ4Cpsik9TDum5qH%2Bdo8B2m4Zwjlq97PKHmrUinVKP2h8UQeBW5ITj6jUJGMBkPjisOcNRdxNF10edWc3yUK0iU%2F7stlBKHhIw0GmNjJJAVyiywj1mZad01rOeV3OtWapOevlAnE%3D%7Ctkp%3ABk9SR4aY3KChYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/wS1CaW' ),
    listing_name  ( 'RELIFE Dot Repairing Solder Lug Spot Soldering Pad RL-007GA Welding Welding Too' ),
    item_options  ( 'Model: 1pcs' ),
    item_price    ( 'US$8.59' ),
    item_shipping ( 'US$0.74' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=RELIFE+RL-007GA+Solder+Lugs' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/284436102860?hash=item4239b67ecc%3Ag%3A%7E5MAAOSwUe1jEniB&amdata=enc%3AAQAIAAAA0GvEHSxMFLIlbrS7%2B694ZHU9gjmiobJHIMONPBpa%2BJskmUIBSJo45G8McLsY8FPuSAizszSZEhR5m9vOQ0DLYC6eutkvv9d%2B1DGcyr3DgfyDrEf5T3sQUuGkJiOStx0O4%2FFCrlednd17fJYb3foa9GBXj%2F62iGTHSPWdJcflAb3UcpmzWpFOZwNWn4Q%2FZlLo%2Fy3nxR3Sp0q2NkpvZLT2shRt2ZQNV0q5goKLn%2FnJjbAuQRTms5WTUuXAeso2yQsHit7mPEFKvbWhQ1iA3xhHUXg%3D%7Ctkp%3ABk9SR97X76ChYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/ls6BMQ' ),
    listing_name  ( '1400pc RELIFE Dot Repairing Solder Lug Spot Soldering Pad RL-007GA Trace for PCB' ),
    item_price    ( 'AU$15.74' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/354957175847?hash=item52a518ac27%3Ag%3AXzsAAOSwfpdk2DTy&amdata=enc%3AAQAIAAAA0K3SCkX759bWu%2B7oRONg7x0IRNPTzRhDYUXSX%2F8S88V2yRyfWzAUabNrde80wRf2NzI8%2BqLfaSblfFmoWoXgBPr1Yn1VeQGGNg02g%2FrEBgQBdy15kt2r1OpM8FSHr08h5BD6LhecTvhTeyvObGLN0vnN%2BRHlx%2B%2F3E%2Fkxa4BRYrh3IsAaTKZ5Im906ANPhR7b7Dwan59vkNQ34BxACDxedqgi8HQR2qh68dkxpMEi%2F2k7BR%2FGMvdsSiEkWoSHFrRIeKRZ5c686CQkXDJEnzBrSFA%3D%7Ctkp%3ABk9SR97X76ChYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/SE396U' ),
    listing_name  ( 'Relife Pad Strips Dots for PCB Repair Soldering Rework Torn Pads Tracks RL-007GA' ),
    item_price    ( 'AU$16.45' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/155675627300?hash=item243efd8f24%3Ag%3AftMAAOSwUtxkCGby&amdata=enc%3AAQAIAAAA0IyPg%2BqjlqNSWdtLD9nk%2B8ze64ThKquCj7npnidrLGsBSv4gJ7A%2BjCK98ofHWkzZXuFdZkDA9MH%2BIaKuoInjAtjDVEOl9oUDAaMWhTfFOPR7%2FBWC5fcOS%2BK%2BRSMf2ayNAAbZsl8adu4ifnu%2F2yEFwvoZ1uyKo8Rc%2FDKa9Ik4JJbhna%2F1evRrgpZjpuuqCH1wSwHWvOWc%2Fjn6w7nFgYSOgvMeLs1bDc%2Bc1wJiRK%2F8KguHeDkymsGBLAkdcb1sQ5uszJ8bxMNToCLCBOl0N1lQk3c%3D%7Ctkp%3ABk9SR97X76ChYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/pkuIna' ),
    listing_name  ( 'PCB trace repair RELIFE RL-007GA 1400pc  (AU Stock)' ),
    item_price    ( 'AU$15.00' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-RELIFE-RL-007GA-Solder-Lugs.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005429713367.html?spm=a2g0o.productlist.main.1.39bd46d53DkAk6&algo_pvid=b5a85f20-46f7-419d-8e00-4d6da66f9489&algo_exp_id=b5a85f20-46f7-419d-8e00-4d6da66f9489-0&pdp_npi=4%40dis%21AUD%2127.86%2127.86%21%21%21132.02%21132.02%21%402103273e17052708455285902e8e7a%2112000033036851423%21sea%21AU%214385823938%21&curPageLogUid=g5E1lb2DlWmC&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DerQoup' ),
    listing_name  ( 'RL-007GA 1400 Dots Repairing Solder Lug Spot Soldering Pad for iPhone Welding Board Flywire Replacement IC Repair Fix' ),
    item_options  ( 'Color: 5pcs RL-007GA' ),
    item_price    ( 'AU$27.86' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com/itm/284436102860' ),
    order_url       ( 'https://order.ebay.com/ord/show?orderId=23-10428-84562#/' ),
    order_id        ( '23-10428-84562' ),
    order_date      ( 'Aug 20, 2023' ),
    order_item_name ( '1400pc RELIFE Dot Repairing Solder Lug Spot Soldering Pad RL-007GA Trace for PCB' ),
    order_price     ( 'AU$15.74' ),
    order_quantity  ( 3 ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sf268d56c073f4067832db58f013b13e1T/100-AMTECH-NC-559-ASM-flux-10pcs-cleaning-free-low-smoke-BGA-soldering-station-commonly-used.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'AMTECH' ),
    model_name        ( 'NC-559-ASM' ),
    EquipmentFeature::FLUX,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'AMTECH' ),
    model_name        ( 'NC-559-ASM' ),
    equipment_type    ( 'Flux' ),
    category          ( 'Flux' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/AMTECH_NC-559-ASM_flux' ),
  search_url    ( 'https://www.amazon.com/s?k=AMTECH+NC-559-ASM+Flux&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Soldering-Residue-Welding-NC%E2%80%91559%E2%80%91ASM-Dispensing/dp/B08L5YWJGK/ref=sr_1_1?dib=eyJ2IjoiMSJ9.dm8SF683BLHUzYGpl7QvXeBULRH4U2l63Fm3jZ55VUcqE4yP_hseLP4H7-1CpPcQ.Lg89uCB5MviRco2ldf4PInfGJ7eEjlWEylzKm6K1UP4&dib_tag=se&keywords=AMTECH+NC-559-ASM+Flux&qid=1705270987&sr=8-1' ),
    affiliate_url ( 'https://amzn.to/3vwP0m5' ),
    listing_name  ( 'Solder Flux Tin Paste Soldering Grease Gel Solder Paste Low Residue Flux Welding Flux NC‑559‑ASM with Needle Dispensing Tool' ),
    item_price    ( 'US$19.28' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Residue-Welding-NC%E2%80%91559%E2%80%91ASM-Dispensing-Soldering/dp/B0C3ZMQQR4/ref=sr_1_2?dib=eyJ2IjoiMSJ9.dm8SF683BLHUzYGpl7QvXeBULRH4U2l63Fm3jZ55VUcqE4yP_hseLP4H7-1CpPcQ.Lg89uCB5MviRco2ldf4PInfGJ7eEjlWEylzKm6K1UP4&dib_tag=se&keywords=AMTECH+NC-559-ASM+Flux&qid=1705270987&sr=8-2' ),
    affiliate_url ( 'https://amzn.to/3TUW8D7' ),
    listing_name  ( 'Solder Paste Low Residue Flux Welding Flux NC‑559‑ASM with Needle Dispensing Tool Soldering Flux' ),
    item_price    ( 'US$18.19' ),
    item_shipping ( 'US$65.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Amtech-Residue-Welding-Nc559asm-Dispensing/dp/B0C3VCWMZH/ref=sr_1_3?dib=eyJ2IjoiMSJ9.dm8SF683BLHUzYGpl7QvXeBULRH4U2l63Fm3jZ55VUcqE4yP_hseLP4H7-1CpPcQ.Lg89uCB5MviRco2ldf4PInfGJ7eEjlWEylzKm6K1UP4&dib_tag=se&keywords=AMTECH+NC-559-ASM+Flux&qid=1705270987&sr=8-3' ),
    affiliate_url ( 'https://amzn.to/41VOdrd' ),
    listing_name  ( 'Amtech Flux 559,Amtech,Solder Paste Low Residue Flux Welding Flux Nc559asm with Needle Dispensing Tool' ),
    item_price    ( 'US$22.35' ),
    item_shipping ( 'US$17.97' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=AMTECH+NC-559-ASM+Flux&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/NC-559-ASM-No-Clean-Environmentally-Friendly-Solder/dp/B07RJBFZ7V/ref=sr_1_3?dib=eyJ2IjoiMSJ9.nqWf31wAjrz2fQ8oOGJaPJsogn-vnPKsc56-Q5yCKQHP80YBR9m-J9m2MlWwcvsBJUJDs8yRYfbuQjEt7K0VO_ogFwyFp_YBypaJKC2Byjr0Lyzt32g3ms1PpBkmyT2ZdPytL7C5SwPwnzrS2Fb4Aw.As3erFh7goW9FHaLkRo7esCz7sbe2KzhhG20NBN5NoE&dib_tag=se&keywords=AMTECH+NC-559-ASM+Flux&qid=1705271165&sr=8-3' ),
    affiliate_url ( 'https://amzn.to/3O2y65m' ),
    listing_name  ( 'NC-559-ASM 10cc No-Clean Environmentally Friendly Solder Paste Flux for RC Drone' ),
    item_price    ( 'AU$11.58' ),
    item_shipping ( 'AU$2.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Nc-559-Asm-Temperature-Soldering-Lead-Free-Electrical/dp/B0CJYC4KHQ/ref=sr_1_4?dib=eyJ2IjoiMSJ9.nqWf31wAjrz2fQ8oOGJaPJsogn-vnPKsc56-Q5yCKQHP80YBR9m-J9m2MlWwcvsBJUJDs8yRYfbuQjEt7K0VO_ogFwyFp_YBypaJKC2Byjr0Lyzt32g3ms1PpBkmyT2ZdPytL7C5SwPwnzrS2Fb4Aw.As3erFh7goW9FHaLkRo7esCz7sbe2KzhhG20NBN5NoE&dib_tag=se&keywords=AMTECH+NC-559-ASM+Flux&qid=1705271165&sr=8-4' ),
    affiliate_url ( 'https://amzn.to/3SiKAbw' ),
    listing_name  ( 'Solder Flux, Syringe Solder Paste, Nc-559-Asm 35g Solder Paste Syringe, Low Temperature Melting Point Soldering Flux, Suitable Lead-Free Rosin Soldering Flux for Circuit Boards Copper Electrical Wire' ),
    item_price    ( 'AU$14.69' ),
    item_shipping ( 'AU$2.99' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=AMTECH+NC-559-ASM+Flux' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/385302564136?hash=item59b5d28d28%3Ag%3Axq8AAOSwfORjluYv&amdata=enc%3AAQAIAAAA8BRB0xQ5S4gSW1lvtSYLV%2B4hUIRt2YIP5rDOcjqaH2%2FGTJCaIrekk9NnAhwIEzGbd3tnnYGN8B0N8thmO6lBHgkOWCrRnHWkzV%2BUr%2FOjEVOaiHDzDrnWqjgYfAkZsoYNBuwXM1jmGUnYFaVv1f1ZorxCg9Yx9DvznumQqnZqOLBB4vwWnGSIiXwj2CqhxHZw4vPq7Pj6D8Yf0kio5oahmHuAh0tkLbTfm2GDJpM%2BjCOf2AQlA%2FwGOd2GUyFIOCgXshF0vBZlyBfyUg1VCyXTBHH09pgUDhpYpLJuNqw%2FIviVM%2BCM7Aa2kjueu7bQMcciyg%3D%3D%7Ctkp%3ABk9SR-b9vqGhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/tJcNV1' ),
    listing_name  ( 'NC-559-ASM Flux ,no-clean tacky, 10cc Tube, Amtech Sets' ),
    item_price    ( 'US$7.89' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/265026867088?hash=item3db4d50f90%3Ag%3AYm4AAOSwIABlH%7EPi&amdata=enc%3AAQAIAAAA0H8Q97SAaHG4xyJ8r2ucT3FEY5yly4M6o6zxI93l0kg3ErdfoxD5A%2FnxGwxRnDq5RPqfnR%2B6dJ%2B8u9LUukeE77vPygaK4BVW2%2BB%2BC2Jo5iYCcydliNxjrwEBikvbFSttSuaJQNOcBB%2Bcf5xqNOBHq4WQ7PPhczVmR5G3L7xerra3hssaRe9aKDhkPkFekciq8iJTahbUlStVAmuJfGmi8CElYrMJdjl5a3f0B85BaCMxBhJ8lH0VpYgOnSp7IRuh6C1Toh4iieUwkkzde9meS%2Bo%3D%7Ctkp%3ABk9SR-b9vqGhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/endX8B' ),
    listing_name  ( '10CC Amtech NC-559-ASM-UV Flux Lead Free Soldering Material' ),
    item_price    ( 'US$7.65' ),
    item_shipping ( 'US$3.16' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/126273638010?hash=item1d667ece7a%3Ag%3Ar78AAOSwd%7EVlnM44&amdata=enc%3AAQAIAAAA8AE7a%2B0xgqadL%2Bz64Q9sa%2B4EUxuL35KoCC45Cgr8K9HX56NqShZuOeanuGz%2BySjCMf9iy6ZR6d0w4U6na8VHGXk%2FX8XQ%2B3x3GgTojIjzwjmP0T18OzctaFXI7%2BV%2FsgcZw4XukhQl%2BE7oPJSHnxSP77ZMCeXt%2F76dczbWSrG8%2F%2BuBWMeWefpgGVvN11kFQ6KTsGHuoLJrvvVAfmbVlfVHtnVmkQBTK7ZT0h1RlIgH3u2cMJy9bjTGc1vvoN7KMskL8ZmuglcRuI7EdVB%2FwZIfM8OqPiLzvDEa%2FIJIosXAZ8JvP2LOC7MALMwZanMvGynbZw%3D%3D%7Ctkp%3ABk9SR-79vqGhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/4WCmtO' ),
    listing_name  ( '10cc Original AMTECH NC-559-ASM Solder Paste Welding Oil Flux ya' ),
    item_price    ( 'US$4.38' ),
    item_shipping ( 'US$0.13' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=AMTECH+NC-559-ASM+Flux' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/126273638010?hash=item1d667ece7a%3Ag%3Ar78AAOSwd%7EVlnM44&amdata=enc%3AAQAIAAAA8AE7a%2B0xgqadL%2Bz64Q9sa%2B4EUxuL35KoCC45Cgr8K9HX56NqShZuOeanuGz%2BySjCMf9iy6ZR6d0w4U6na8VHGXk%2FX8XQ%2B3x3GgTojIjzwjmP0T18OzctaFXI7%2BV%2FsgcZw2zvFTjrwAyTqScwWvPZo8PRcxlJRyqMuchGlAwzaRXnXPzcoYvY0PZSBqQ3rOeuIWK4rUdwpK9xapaFHT8E0BzHVXaUYJ7b%2F%2FGkMHXEarwzKluysBWhUlz3yfBeyj%2FewfAUpbS2gh8PEXxJOxChgmz4SsjMmgoZWvfVTDtKPdizZxnGbdC1kDi5SbU50bT8cA%3D%3D%7Ctkp%3ABk9SR6Db1aGhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/Bknske' ),
    listing_name  ( '10cc Original AMTECH NC-559-ASM Solder Paste Welding Oil Flux ya' ),
    item_price    ( 'AU$7.19' ),
    item_shipping ( 'AU$0.22' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/375113348530?hash=item57567f75b2%3Ag%3AFmgAAOSwau5lduK9&amdata=enc%3AAQAIAAAA8GS8NbpjMn6Y20uUQY4O4aQTiXDfIZVJJMgKpSP0CmkGQLhYch5XtDU03nlq%2FtqkuQQAleR4lVtpJPFd%2B8Q63KarmyU1mqQNrDOF4j6lh0bMpnEymLbNJJWEV18i93Mex%2BArc6jlkFwAE%2FF9fK%2FAbOch7rBad3pfG6Y7EHNUUw%2BNi92DW3zHLNPicb5pke09zCcK4V64vJ9rXv9gRyioJuQISnkExyqjmqRJGYqjeEjVozX3gwXUUQVUWzaJ6v%2BzAqUQkbSXMm0XCk3QkX6lIi0HaJt7DACnMbvDrpSyAOmcj2TmBEjNdI9izNfxqGLddg%3D%3D%7Ctkp%3ABk9SR6Db1aGhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/xTgIRM' ),
    listing_name  ( '10cc Original AMTECH NC-559-ASM Solder Paste Welding Oil Flux ya' ),
    item_price    ( 'AU$7.21' ),
    item_shipping ( 'AU$0.23' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/196141954987?hash=item2daaf8b7ab%3Ag%3A3NgAAOSwkPBlgd2l&amdata=enc%3AAQAIAAAA0JyrbjDg%2B2epR8f620Sfet6K%2FUTKi%2FcZBxILjP8zqco5K8CAjWJ7%2BeVB4gC6PyQ%2Bsq%2Bf8Uu3eNx8k%2FMQXW17bXKrYiWrdslokS%2BNnGTyV7W5X7ThVtp8Y2wAACNfVLdcuUj78zitL%2F1J25OjOITKEZur%2FowMtXI49g6KegFrNYJsrtki9SJwjM%2BMPHvcFDKd2vVy4zSJ8pZkxfqm1e%2FRuAigVDzojk%2BLdAQuqRVo4M0Pxqw5t1tktyQygHjjFV2JHjarTPoULgF%2FFK%2B28b4%2Bdf4%3D%7Ctkp%3ABk9SR6Db1aGhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/HP4jtE' ),
    listing_name  ( '10cc Original AMTECH NC-559-ASM Solder Paste Welding Oil Flux ya' ),
    item_price    ( 'AU$7.37' ),
    item_shipping ( 'AU$0.23' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-AMTECH-NC-559-ASM-Flux.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005002690329325.html?spm=a2g0o.order_list.order_list_main.160.764218021V85h7' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DdU4DKt' ),
    listing_name  ( '100% AMTECH NC-559-ASM flux 10pcs cleaning-free low-smoke BGA soldering station commonly used 559 flux Send booster' ),
    item_options  ( 'Color: NC559 CHINA 20pcs' ),
    item_price    ( 'AU$30.33' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004863129918.html?spm=a2g0o.productlist.main.1.3eea27e37tmLDD&algo_pvid=23964d1f-9404-43bb-8b0b-314d1c212e3d&aem_p4p_detail=20240114143435374237633317800011903432&algo_exp_id=23964d1f-9404-43bb-8b0b-314d1c212e3d-0&pdp_npi=4%40dis%21AUD%2110.55%218.44%21%21%2150.01%2140.01%21%402103247017052716751076146ea8b7%2112000030794577787%21sea%21AU%214385823938%21&curPageLogUid=5kDpO1A0RjlE&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=20240114143435374237633317800011903432_1' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DBUEyTX' ),
    listing_name  ( '100% Original AMTECH NC-559-ASM 10cc Flux No Clean Flux for Soldering SMD BGA Reballing Soldering Welding Flux Solder Paste' ),
    item_options  ( 'Color: NC-559-1PCS' ),
    item_price    ( 'AU$5.71' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005003608326026.html?spm=a2g0o.productlist.main.3.3eea27e37tmLDD&algo_pvid=23964d1f-9404-43bb-8b0b-314d1c212e3d&aem_p4p_detail=20240114143435374237633317800011903432&algo_exp_id=23964d1f-9404-43bb-8b0b-314d1c212e3d-1&pdp_npi=4%40dis%21AUD%2175.14%2136.82%21%21%2149.69%2124.35%21%402103247017052716751076146ea8b7%2112000026477051723%21sea%21AU%214385823938%21&curPageLogUid=hgDaJoGTl2Pu&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=20240114143435374237633317800011903432_2' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dmulnxb' ),
    listing_name  ( 'Paste 100% Original AMTECH NC-559-ASM BGA PCB No-Clean Solder Paste Welding Advanced Oil Flux Grease 10cc Soldering Repair Paste' ),
    item_options  ( 'Weight: 2pcs' ),
    item_price    ( 'AU$11.07' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006357403630.html?spm=a2g0o.productlist.main.5.3eea27e37tmLDD&algo_pvid=23964d1f-9404-43bb-8b0b-314d1c212e3d&aem_p4p_detail=20240114143435374237633317800011903432&algo_exp_id=23964d1f-9404-43bb-8b0b-314d1c212e3d-2&pdp_npi=4%40dis%21AUD%2111.46%215.73%21%21%2154.33%2127.16%21%402103247017052716751076146ea8b7%2112000036876243007%21sea%21AU%214385823938%21&curPageLogUid=I0McnfLFE6Mv&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=20240114143435374237633317800011903432_3' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DFlt5tJ' ),
    listing_name  ( 'Lead Free and Halogen-free Soldering Flux AMTECH 559 BGA SMD PCB Phone Repair Cleaning-free 10CC Needle Tube Welding Oil' ),
    item_price    ( 'AU$5.73' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005002690329325.html?spm=a2g0o.order_list.order_list_main.160.764218021V85h7' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.156.764218021V85h7&orderId=8173518011153938' ),
    order_id        ( '8173518011153938' ),
    order_date      ( 'Aug 21, 2023' ),
    order_item_name ( '100% AMTECH NC-559-ASM flux 10pcs cleaning-free low-smoke BGA soldering station commonly used 559 flux Send booster' ),
    order_options   ( 'Color: NC559 CHINA 20pcs' ),
    order_price     ( 'AU$30.33' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$12.40' ),
    order_gst       ( 'AU$4.27' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/615vpiu1tFL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'SHDSL' ),
    EquipmentFeature::TAPE_DISPENSER,
    EquipmentAttribute::BENCH_EQUIPMENT,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'SHDSL' ),
    equipment_type    ( 'Tape Dispenser' ),
    category          ( 'Tape Dispenser' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/SHDSL_Tape_Dispenser' ),
  search_url    ( 'https://www.amazon.com/s?k=SHDSL+Tape+Dispenser&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/gp/product/B09QKD9FC7?th=1&linkCode=sl1&tag=johnelliotv-20&linkId=c15aff4a3104c4743cfeeac5896fda3e&language=en_US&ref_=as_li_ss_tl' ),
    affiliate_url ( 'https://amzn.to/3vwPxV7' ),
    listing_name  ( 'Green Multi-Roll Heat Tape Dispenser Sublimation 1" and 3"Core Double Reel Cores Sublimation for Heat Transfer Tape, Semi-Automatic Tape Dispenser with Compartment Slots' ),
    item_price    ( 'US$15.99' ),
    item_shipping ( 'US$19.48' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=SHDSL+Tape+Dispenser&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B09QKD9FC7?th=1&linkCode=sl1&tag=johnelliotv-20&linkId=c15aff4a3104c4743cfeeac5896fda3e&language=en_US&ref_=as_li_ss_tl' ),
    affiliate_url ( 'https://amzn.to/425Uel5' ),
    listing_name  ( 'Green Multi-Roll Heat Tape Dispenser Sublimation 1" and 3"Core Double Reel Cores Sublimation for Heat Transfer Tape, Semi-Automatic Tape Dispenser with Compartment Slots' ),
    item_price    ( 'AU$40.26' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=SHDSL+Tape+Dispenser' ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=SHDSL+Tape+Dispenser' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-SHDSL-Tape-Dispenser.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005906142287.html?spm=a2g0o.productlist.main.3.16292419iL5Wz2&algo_pvid=8983d325-efcb-4901-b1da-98e6e6589c02&aem_p4p_detail=202401141442243894140647170600013172834&algo_exp_id=8983d325-efcb-4901-b1da-98e6e6589c02-1&pdp_npi=4%40dis%21AUD%2140.82%2122.05%21%21%21193.44%21104.46%21%402101f04d17052721441408557ea11f%2112000034792271701%21sea%21AU%214385823938%21&curPageLogUid=5w24aWYIS16D&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=202401141442243894140647170600013172834_2' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DcjqwJB' ),
    listing_name  ( '35mm Tape Cutter Semi-Automatic Desktop Tape Dispenser With Fixed Length Tape Cutter for Home Office School Stationery' ),
    item_price    ( 'AU$22.05' ),
    item_shipping ( 'AU$4.98 ' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005961733115.html?spm=a2g0o.detail.0.0.53527184iEkNQt&gps-id=pcDetailTopMoreOtherSeller&scm=1007.40000.327270.0&scm_id=1007.40000.327270.0&scm-url=1007.40000.327270.0&pvid=f72c421d-88b7-4e0d-a547-cf48fed1d0ea&_t=gps-id:pcDetailTopMoreOtherSeller,scm-url:1007.40000.327270.0,pvid:f72c421d-88b7-4e0d-a547-cf48fed1d0ea,tpp_buckets:668%232846%238107%231934&pdp_npi=4%40dis%21AUD%2155.94%2119.48%21%21%21265.10%2192.29%21%402101e63417052721529534650ef7f1%2112000035061152962%21rec%21AU%214385823938%21&utparam-url=scene%3ApcDetailTopMoreOtherSeller%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DnLTjfx' ),
    listing_name  ( 'Heat Tape Cut Dispenser Multiple Roll Cut Heat Tape Dispenser Sublimation for Heat Transfer Tape Reusable Semi-Automatic Tape' ),
    item_price    ( 'AU$19.48' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006058494453.html?spm=a2g0o.detail.0.0.53527184iEkNQt&gps-id=pcDetailTopMoreOtherSeller&scm=1007.40000.327270.0&scm_id=1007.40000.327270.0&scm-url=1007.40000.327270.0&pvid=f72c421d-88b7-4e0d-a547-cf48fed1d0ea&_t=gps-id:pcDetailTopMoreOtherSeller,scm-url:1007.40000.327270.0,pvid:f72c421d-88b7-4e0d-a547-cf48fed1d0ea,tpp_buckets:668%232846%238107%231934&pdp_npi=4%40dis%21AUD%2148.71%2122.90%21%21%2132.21%2115.14%21%402101e63417052721529534650ef7f1%2112000035537479251%21rec%21AU%214385823938%21&utparam-url=scene%3ApcDetailTopMoreOtherSeller%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DdSGUgh' ),
    listing_name  ( 'Tape Holder Household Dispenser Heat Cut Tool Home Tools Hot Pressing Sublimation Cutting Desk Abs' ),
    item_price    ( 'AU$22.90' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B09QKD9FC7/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&th=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-7991864-0011030' ),
    order_id        ( '249-7991864-0011030' ),
    order_date      ( '25 August 2023' ),
    order_item_name ( 'Green Multi-Roll Heat Tape Dispenser Sublimation 1" and 3"Core Double Reel Cores Sublimation for Heat Transfer Tape, Semi-Automatic Tape Dispenser with Compartment Slots' ),
    order_options   ( 'Colour Name: Green' ),
    order_price     ( 'AU$35.18' ),
    order_quantity  ( 1 ),
    order_gst_paid  ( 'AU$3.20' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61+qntzskqL._AC_SL1000_.jpg' ),
  equipment_item(
    manufacturer_name ( 'OZSTOCK' ),
    model_name        ( 'Small Folding' ),
    EquipmentFeature::STEP_LADDER,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'OZSTOCK' ),
    equipment_type    ( 'Small Folding Step Ladder' ),
    category          ( 'Step Ladder' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Folding_Step_Ladder' ),
  search_url    ( 'https://www.amazon.com/s?k=OZSTOCK+Folding+Step+Ladder&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=OZSTOCK+Folding+Step+Ladder&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Portable-Folding-Ladder-Caravan-Camping/dp/B08ZMZXCXW/ref=sr_1_1?dib=eyJ2IjoiMSJ9.yjd1kBaEhLC4ZBAUYtIaBSGoQdqrU5nUckhPuSbdA77sjmLJ4Gswi5uUsU-QeqMihJENlR-mFCbwKQgsynMr8LK2abYWuz2fYwSGm2betDuqGVvvDlU2E3e80NBvFHuiJ_ZzWxaNWBf_ZbWN8wb5kg.OTczYCQSqbaeOZoWc3SOGRviIAL_T6kKZ38UvMalBYU&dib_tag=se&keywords=OZSTOCK%2BFolding%2BStep%2BLadder&qid=1705272495&sr=8-1&th=1' ),
    affiliate_url ( 'https://amzn.to/3Sguy1Y' ),
    listing_name  ( 'Portable Flat Folding Step Stool Ladder Non Slip Caravan Camping Seat Chair 22/39CM (M/H 22cm x W 29cm x D 22cm)' ),
    item_options  ( 'Size Name: M/H 22cm x W 29cm x D 22cm' ),
    item_price    ( 'AU$18.99' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=OZSTOCK+Folding+Step+Ladder' ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=OZSTOCK+Folding+Step+Ladder' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-OZSTOCK-Folding-Step-Ladder.html' ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B08ZMZXCXW/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&th=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=250-9175542-2253408' ),
    order_id        ( '250-9175542-2253408' ),
    order_date      ( '23 June 2023' ),
    order_item_name ( 'Portable Flat Folding Step Stool Ladder Non Slip Caravan Camping Seat Chair 22/39CM (M/H 22cm x W 29cm x D 22cm)' ),
    order_options   ( 'Size Name: M/H 22cm x W 29cm x D 22cm' ),
    order_price     ( 'AU$18.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71pFrjt7HoL._AC_SL1332_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.ozstock.com.au/27556/Portable-39cm-Folding-Step-Stool-Plastic-Chair-Flat-Outdoor-Camping-Seat-Ladder.html' ),
      link_text       ( 'Portable 39cm Folding Step Stool Plastic Chair Flat Outdoor Camping Seat Ladder' ),
    ),
    manufacturer_name ( 'OZSTOCK' ),
    model_name        ( 'Large Folding' ),
    EquipmentFeature::STEP_LADDER,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'OZSTOCK' ),
    equipment_type    ( 'Large Folding Step Ladder' ),
    category          ( 'Step Ladder' ),
    manufacturer_link (
      link_href       ( 'https://www.ozstock.com.au/27556/Portable-39cm-Folding-Step-Stool-Plastic-Chair-Flat-Outdoor-Camping-Seat-Ladder.html' ),
      link_text       ( 'Portable 39cm Folding Step Stool Plastic Chair Flat Outdoor Camping Seat Ladder' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Folding_Step_Ladder' ),
  search_url    ( 'https://www.amazon.com/s?k=OZSTOCK+Folding+Step+Ladder&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=OZSTOCK+Folding+Step+Ladder&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B08ZN1ZQZH/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&th=1' ),
    affiliate_url ( 'https://amzn.to/3HmMl1g' ),
    listing_name  ( 'Portable Flat Folding Step Stool Ladder Non Slip Caravan Camping Seat Chair 22/39CM (M/H 39cm x W 29cm x D 22cm)' ),
    item_options  ( 'Size Name: M/H 39cm x W 29cm x D 22cm' ),
    item_price    ( 'AU$22.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Portable-Plastic-Foldable-Outdoor-Adult-White/dp/B0952VTYSB/ref=pd_sbs_d_sccl_4_1/357-4865216-0697531?pd_rd_w=IsSqj&content-id=amzn1.sym.97c5ae12-dcee-4048-8c97-77299443b76d&pf_rd_p=97c5ae12-dcee-4048-8c97-77299443b76d&pf_rd_r=3GN3GCBX3NS2RKMDDSN6&pd_rd_wg=dl4o3&pd_rd_r=2e4ba62a-3f43-4790-bead-96c3bdf7d1d0&pd_rd_i=B0952VTYSB&th=1' ),
    affiliate_url ( 'https://amzn.to/3vBUzQo' ),
    listing_name  ( 'Large Portable Plastic Foldable Chair Outdoor Folding Kids Step Stool Camping Home Adult-White' ),
    item_price    ( 'AU$20.95' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=OZSTOCK+Folding+Step+Ladder' ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=OZSTOCK+Folding+Step+Ladder' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-OZSTOCK-Folding-Step-Ladder.html' ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B08ZN1ZQZH/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&th=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=250-9175542-2253408' ),
    order_id        ( '250-9175542-2253408' ),
    order_date      ( '23 June 2023' ),
    order_item_name ( 'Portable Flat Folding Step Stool Ladder Non Slip Caravan Camping Seat Chair 22/39CM (M/H 39cm x W 29cm x D 22cm)' ),
    order_options   ( 'Size Name: M/H 39cm x W 29cm x D 22cm' ),
    order_price     ( 'AU$22.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S699c62e253c647578da9e826632ebaf6k/MESR-100-ESR-Multimeter-Capacitance-Ohm-Meter-Professional-Measuring-Internal-Resistance-of-Capacitor-Capacitance-Circuit-Tester.jpg_640x640.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'M6013' ),
    EquipmentFeature::CAPACITANCE_METER,
    EquipmentAttribute::HAND_TOOL,
  ),
  /*
  equipment_info(
    model_name        ( 'M6013' ),
    equipment_type    ( 'Capactance Meter' ),
    category          ( 'Capactance Meter' ),
    category          ( 'Meter' ),
    category          ( 'Hand Tool' ),
    category          ( 'Test Equipment' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/M6013_Capacitance_Meter' ),
  warning       ( 'Make sure to order the M6013' ),
  search_url    ( 'https://www.amazon.com/s?k=M6013+Capactance+Meter&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Capacitor-Precision-Professional-Capacitance-Resistance/dp/B07WRZY1L2/ref=sr_1_3?dib=eyJ2IjoiMSJ9.7iA_W9p2JShBRP7GH8Wp6zJA4BGU08l-Ei0wwUQwsjtHUFHMsz8oHYQfSto6pgt89tlKEtTqzuYVNHBl-RYt8GKZxVUBeMDzmFi2aAhoTxQ.KkeanfAUS4Jw8qGBGFEFfzIJooUjTap2rjDJVEPk1EY&dib_tag=se&keywords=m6013+capacitance+meter&qid=1705273134&sr=8-3' ),
    affiliate_url ( 'https://amzn.to/48SpmXp' ),
    listing_name  ( 'Capacitor Meter,M6013 LCD High Precision Capacitor Meter Professional Measuring Capacitance Resistance,Capacitor Tester' ),
    item_price    ( 'US$39.89' ),
    item_shipping ( 'US$18.62' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/OSALADI-Automatic-Capacitance-High-Precision-Instrument/dp/B0CMK4LCH2/ref=sr_1_5?dib=eyJ2IjoiMSJ9.7iA_W9p2JShBRP7GH8Wp6zJA4BGU08l-Ei0wwUQwsjtHUFHMsz8oHYQfSto6pgt89tlKEtTqzuYVNHBl-RYt8GKZxVUBeMDzmFi2aAhoTxQ.KkeanfAUS4Jw8qGBGFEFfzIJooUjTap2rjDJVEPk1EY&dib_tag=se&keywords=m6013+capacitance+meter&qid=1705273134&sr=8-5' ),
    affiliate_url ( 'https://amzn.to/3vwQa0V' ),
    listing_name  ( 'OSALADI Handheld Automatic Range Digital Capacitance Meter M6013 High-Precision Digital Display Capacitance Tester Tool Portable Battery Measuring Instrument High Precision Plastic' ),
    item_price    ( 'US$54.19' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/ELEOPTION-Digital-Capacitance-Capacitor-470000uF/dp/B0793RFKQ5/ref=sr_1_6?dib=eyJ2IjoiMSJ9.7iA_W9p2JShBRP7GH8Wp6zJA4BGU08l-Ei0wwUQwsjtHUFHMsz8oHYQfSto6pgt89tlKEtTqzuYVNHBl-RYt8GKZxVUBeMDzmFi2aAhoTxQ.KkeanfAUS4Jw8qGBGFEFfzIJooUjTap2rjDJVEPk1EY&dib_tag=se&keywords=m6013+capacitance+meter&qid=1705273134&sr=8-6' ),
    affiliate_url ( 'https://amzn.to/3tYu2w0' ),
    listing_name  ( 'ELEOPTION Digital Capacitance Test Meter M6013 LCD Display Auto Range Capacitor Tester 0.01pF to 470000uF' ),
    item_price    ( 'US$58.99' ),
    item_shipping ( 'US$30.00' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=M6013+Capactance+Meter&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Precision-Capacitor-Professional-Capacitance-BBZY/dp/B0B9WL4KK7/ref=sr_1_8?dib=eyJ2IjoiMSJ9.chWnFhmWvKORhAB7n6xfsF-vCo5egBgtrBp4ose-uXE0jDNMjrXoRcERi6o_IVSH4bMb6woI3ZFjv-ERFV1loK1snil1kVCul3lBAS5lysxBQmkXh6mQP12zF3YlLP2saTB9B-H7QxHsnEbj4kHaIw.nKuvdwVo4MavSSUh4HKnsOkYN3D319BwyBB7DBV4uVQ&dib_tag=se&keywords=m6013+capacitance+meter&qid=1705273315&sr=8-8' ),
    affiliate_url ( 'https://amzn.to/3SiWTEI' ),
    listing_name  ( 'M6013 High Precision Capacitor Meter Professional Measuring Capacitance Capacitor Circuit Tester BBZY' ),
    item_price    ( 'AU$51.52' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/ROWCES-Precision-Capacitor-Professional-Capacitance/dp/B0CFL4GJ72/ref=sr_1_9?dib=eyJ2IjoiMSJ9.chWnFhmWvKORhAB7n6xfsF-vCo5egBgtrBp4ose-uXE0jDNMjrXoRcERi6o_IVSH4bMb6woI3ZFjv-ERFV1loK1snil1kVCul3lBAS5lysxBQmkXh6mQP12zF3YlLP2saTB9B-H7QxHsnEbj4kHaIw.nKuvdwVo4MavSSUh4HKnsOkYN3D319BwyBB7DBV4uVQ&dib_tag=se&keywords=m6013+capacitance+meter&qid=1705273315&sr=8-9' ),
    affiliate_url ( 'https://amzn.to/3O0Bo92' ),
    listing_name  ( 'ROWCES M6013 High Precision Capacitor Meter Professional Measuring Capacitance Capacitor Circuit Tester' ),
    item_price    ( 'AU$52.79' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/YaSao-Precision-Capacitor-Professional-Capacitance/dp/B09VGMJ72R/ref=sr_1_10?dib=eyJ2IjoiMSJ9.chWnFhmWvKORhAB7n6xfsF-vCo5egBgtrBp4ose-uXE0jDNMjrXoRcERi6o_IVSH4bMb6woI3ZFjv-ERFV1loK1snil1kVCul3lBAS5lysxBQmkXh6mQP12zF3YlLP2saTB9B-H7QxHsnEbj4kHaIw.nKuvdwVo4MavSSUh4HKnsOkYN3D319BwyBB7DBV4uVQ&dib_tag=se&keywords=m6013+capacitance+meter&qid=1705273315&sr=8-10' ),
    affiliate_url ( 'https://amzn.to/3U0yOUt' ),
    listing_name  ( 'YaSao M6013 High Precision Capacitor Meter Professional Measuring Capacitance Capacitor Circuit Tester' ),
    item_price    ( 'AU$52.98' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=M6013+Capactance+Meter' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/394593612827?hash=item5bdf9cb41b%3Ag%3A3nkAAOSwbpNkS1nt&amdata=enc%3AAQAIAAAA0IMzOD2z7j9vD4SeSsd5NtGxwnrYCRVlseG2sIdWkKj524lYl3EcMA%2Fheokr67NgRtqaQixaVVpS6xOIb2TU4YtMshGD1lSuz38QybVV2gPnutD%2BM%2F2DX2GcWnNKP8m1vMpleEz7WevLBihkKTZD81yLUEw2NIBSLsun5g1KSpz%2BVvMS%2B4Dv3CHDpOxHLcLKUhIfwsosbyP8LBumJmQEBBd6V%2F0e5vZ0qYaQgq5jEzNWKERqS2WhdzyejvxcVU6C1wg5v0xRfzSA2xSAGaMDrww%3D%7Ctkp%3ABk9SR5zDvqOhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/LLYUJM' ),
    listing_name  ( 'M6013 Digital Capacitance Circuit Capacitance Meter' ),
    item_price    ( 'US$35.87' ),
    item_shipping ( 'US$1.45' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/314572478425?hash=item493dfb17d9%3Ag%3A-WsAAOSwbqJkVKng&amdata=enc%3AAQAIAAAA0Fd3RjNMfdsw3J%2BdoR8bsEeNATgl7UY4d5BHDsxTLUIYy9dwwHCYbHfanz99cAZBlpK9yUnbva6EBRvgCsyWjfUcrPUphEwUYflILNSHWI%2B2j5hMmUKqACeglZsWZO6wZ5FZUrBlp7geEaP5KcIaTec2BJ72h7%2F1XR2EoFVz0VEqpYO3nmiyB8ZM%2B3bk0DtLXTrHMh3cba6gN1KAbehCYkgoIBqJBJm83GYmxygJj61lPRtjHoFX4L6KhbwbTOZE2SCyJPz7kv%2BJhd8UZTxia1w%3D%7Ctkp%3ABk9SR5zDvqOhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/iobJFB' ),
    listing_name  ( 'M6013 LCD High-precision Capacitor Meter For Capacitance Resistance Measurement' ),
    item_price    ( 'US$37.38' ),
    item_shipping ( 'US$2.45' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/385636136221?hash=item59c9b4751d%3Ag%3AjGUAAOSwwRxkbsOl&amdata=enc%3AAQAIAAAA0J6F6M9jid%2BpuYk7GvnY2iJGXaFZOAxTy2Q1dezsJfnsSHPKS4kg%2BHyEsHA6VY2m9faEKrla%2FvmQuCYuzDaSFxHQJVRJnFQ2pRWvXwe6%2BVT6%2FUI18K1N6ibnSPIEFiukVKR67%2FynuPAqZuKn9%2F1eMibI%2F%2F9bypyxG6lnGJhpfM1Y7CIWjuLtbJeFyeQfL3xojF7DL60ZqHAA5UVYsEymsgXEEnTcDrz3CdyxkJacKsZ330I4V7A57SuFcgOQ3g91TY8PvPuLbsz%2FPJcpO3vbUJw%3D%7Ctkp%3ABk9SR5zDvqOhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/r7B293' ),
    listing_name  ( 'M6013 ESR Capacitance Ohm Meter Professional Resistance Capacitor Circuit Tester' ),
    item_price    ( 'US$39.99' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=M6013+Capactance+Meter' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/404651326900?hash=item5e37193db4%3Ag%3AmdcAAOSw-JllZ1Jt&amdata=enc%3AAQAIAAAA0Oy%2BwTOWFJTObCVFXdNTKA%2Fd%2BGurZz43AP357yUyaUojTBvcFaGRe28Vg4OAyyzWibN%2FymKOAacFwwJ0qX5cdbf5UQWPC2XQSGX5fzpgvQvHAGi0RN%2FcSAUDP9KAPexZEZReDIeJEUmH5aoaPJRux0ihoIOdWhTizSGpOv3WVqrvVTElbC8FMTDTkoM82AEm8ALOROQ0OzZRY7PqrOuyQxlWWNZWAtEbM8gynTvWnE8I1m0WXKFw19ZXDkQnPE9gy30mzMRwo8v6nf3Xddxqc2g%3D%7Ctkp%3ABk9SR4Kz0qOhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/x2KYwu' ),
    listing_name  ( 'M6013 High Capacitor Meter Professional Measuring Capacitance L9J6' ),
    item_price    ( 'AU$45.29' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/266001325093?hash=item3deeea1c25%3Ag%3A16MAAOSw2l1je0VJ&amdata=enc%3AAQAIAAAA8Cj62YUURkAdXBTG04DifFkY%2Fc9Dk%2FjkSxMJDcKOpS1JGTtrfwfxwqZ%2Fm%2FqK0ij96WpYXuX9GL%2FGT4Pme%2FQoMqY1C8KFH%2F1ELCCmIs3PJwhYZE1COaEd3ci1GEH2VoHGzhL3ZCBztnIWebwj2oaLCpj7VZ2cb7aQKjcMvV4mEIOzU%2FyekGvOCQG2%2BfgpG4ZTUMX6Kgpn6ScwpQP%2Bg9%2B8HjJTmYAEVNSSArR1nkxrMujBpepXAbCabKtiNavOo9WOAVxbrMnW48WFvkI3JEqTRC2UCljGVWMspk6hIdbFMnbept8Mm6ngQvNRLT1OOxWZdw%3D%3D%7Ctkp%3ABk9SR4Kz0qOhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/r5BUzF' ),
    listing_name  ( 'M6013 High Capacitor Meter Professional Measuring Capacitance R5M8' ),
    item_price    ( 'AU$45.38' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/235270584083?hash=item36c7383713%3Ag%3ADNwAAOSwsNdlOgiy&amdata=enc%3AAQAIAAAA8BkFdi1PXYC2%2BWjK5V7vzjYsUi9ml5B6cc2dMtmyfZ7H%2FglZnv2gd%2BkxG6yTvGo71l%2Fb70b3h2fPxRMDIIFCwHAeuD2i62MDvwBXJ%2Fu8WqxaStYlgBweX7%2BqLR%2BjdgOn5KsEH8Kwm2C6avTmD5eHTFYUTcR6laRbrYDp0Pzs%2F%2Bw5aFqYLzHfRMua%2Fz7y%2BQMtYiguUE22IuonDjG9NeJB0R5nKWonprO3%2FYN%2BMR2c9bHWYmZoSlX2zBERHbAXwZanPVvGdC1C4SrX8d7HG2fsC7mLrtm03NfjmYWDuzsLVBouTBC48YdKpmwrlkTj1L5X%2Bg%3D%3D%7Ctkp%3ABk9SR4Kz0qOhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/90mUSE' ),
    listing_name  ( 'M6013 High Capacitor Meter Professional Measuring Capacitance C8B6' ),
    item_price    ( 'AU$46.02' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-M6013.html?spm=a2g0o.productlist.search.0' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005585463186.html?spm=a2g0o.productlist.main.1.3bc77948WOJo7Q&algo_pvid=c4d27d89-7db4-44e4-b914-7ccc4fe5a97e&algo_exp_id=c4d27d89-7db4-44e4-b914-7ccc4fe5a97e-0&pdp_npi=4%40dis%21AUD%2157.22%2132.62%21%21%2137.84%2121.57%21%402101ef7017052737579527927e9c53%2112000033649108280%21sea%21AU%214385823938%21&curPageLogUid=V87aKAqbgupD&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_De6lG9b' ),
    listing_name  ( 'M6013 Digital Capacimeter High Precision Capacitor Meter Professional Measuring Capacitance Resistance Capacitor Circuit Tester' ),
    item_price    ( 'AU$32.62' ),
    item_shipping ( 'AU$10.92' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005671759410.html?spm=a2g0o.productlist.main.5.3bc77948WOJo7Q&algo_pvid=c4d27d89-7db4-44e4-b914-7ccc4fe5a97e&algo_exp_id=c4d27d89-7db4-44e4-b914-7ccc4fe5a97e-2&pdp_npi=4%40dis%21AUD%2192.49%2136.07%21%21%2161.16%2123.85%21%402101ef7017052737579527927e9c53%2112000033964342356%21sea%21AU%214385823938%21&curPageLogUid=d9zjQz7fVaxv&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DexcWQd' ),
    listing_name  ( 'M6013 High Precision Capacitor Meter Professional Measuring Capacitance Capacitor Circuit Tester' ),
    item_options  ( 'Color: M6013' ),
    item_price    ( 'AU$36.07' ),
    item_shipping ( 'AU$4.76' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006249432139.html?spm=a2g0o.productlist.main.7.3bc77948WOJo7Q&algo_pvid=c4d27d89-7db4-44e4-b914-7ccc4fe5a97e&algo_exp_id=c4d27d89-7db4-44e4-b914-7ccc4fe5a97e-3&pdp_npi=4%40dis%21AUD%2165.55%2145.88%21%21%2143.35%2130.34%21%402101ef7017052737579527927e9c53%2112000036465209747%21sea%21AU%214385823938%21&curPageLogUid=1HjgUNzm1V8N&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DBfJAt3' ),
    listing_name  ( 'M6013 ESR Capacitance Ohm Meter Professional Capacitance Internal Resistance Capacitor Circuit Device Tester Capacitor Tester' ),
    item_options  ( 'Color: M6013' ),
    item_price    ( 'AU$45.88' ),
    item_shipping ( 'AU$11.21' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005925078505.html?spm=a2g0o.order_detail.order_detail_item.3.5b01f19czAmmoc' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.161.764218021V85h7&orderId=8174558501523938' ),
    order_id        ( '8174558501523938' ),
    order_date      ( 'Sep 2, 2023' ),
    order_item_name ( 'MESR-100 ESR/M6013 Multimeter Capacitance Ohm Meter Professional Measuring Internal Resistance of Capacitor Capacitance Tester' ),
    order_options   ( 'Color: Type C M6013' ),
    order_price     ( 'AU$36.95' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$10.05' ),
    order_discount  ( 'AU$9.39' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://d297fd4gt7t5lv.cloudfront.net/file/2023-11-03-172702/s-l1600.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.fluke.com/en-us/product/electrical-testing/basic-testers/fluke-1ac-ii' ),
      link_text       ( 'Fluke 1AC II Non-Contact Voltage Tester' ),
    ),
    manufacturer_name ( 'Fluke' ),
    model_name        ( '1AC-C2-II VoltAlert' ),
    EquipmentFeature::VOLTAGE_DETECTOR,
    EquipmentAttribute::CORDLESS,
    EquipmentAttribute::HAND_TOOL,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Fluke' ),
    model_name        ( '1AC-C2-II' ),
    equipment_type    ( 'VoltAlert Voltage Detector' ),
    category          ( 'Voltage Detector' ),
    category          ( 'Hand Tool' ),
    category          ( 'Meter' ),
    category          ( 'Test Equipment' ),
    manufacturer_link (
      link_href       ( 'https://www.fluke.com/en-us/product/electrical-testing/basic-testers/fluke-1ac-ii' ),
      link_text       ( 'Fluke 1AC II Non-Contact Voltage Tester' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Fluke_VoltAlert_1AC' ),
  search_url    ( 'https://www.amazon.com/s?k=Fluke+1AC-C2-II+VoltAlert+Voltage+Detector&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Fluke-1AC-A1-II-VoltAlert-Non-Contact-Voltage/dp/B000EJ332O/ref=sr_1_2?dib=eyJ2IjoiMSJ9.aZPNTe5wJRG_9rKICvHkJYha4ybkZ9HGMYmqlE6Em4jGjHj071QN20LucGBJIEps.rUDz8v6Zv2vvB_CFzdEPy6c71MGxehUZ3yk_qmphiWY&dib_tag=se&keywords=Fluke+1AC-C2-II+VoltAlert+Voltage+Detector&qid=1705274020&sr=8-2' ),
    affiliate_url ( 'https://amzn.to/3ShTypj' ),
    listing_name  ( 'Fluke 1AC-A1-II VoltAlert Non-Contact Voltage Tester, Pocket-Sized, Voltage Detection Range 90 V to 1000 V AC, Audible Beeper, Silent Mode, Includes Batteries And 2 Year Warranty, CAT IV Rating' ),
    item_price    ( 'US$25.56' ),
    item_shipping ( 'US$17.76' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Fluke+1AC-C2-II+VoltAlert+Voltage+Detector&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Fluke-1AC-A1-II-VoltAlert-Non-Contact-Voltage/dp/B000EJ332O?dib=eyJ2IjoiMSJ9.aZPNTe5wJRG_9rKICvHkJYha4ybkZ9HGMYmqlE6Em4jGjHj071QN20LucGBJIEps.rUDz8v6Zv2vvB_CFzdEPy6c71MGxehUZ3yk_qmphiWY&dib_tag=se&keywords=Fluke%2B1AC-C2-II%2BVoltAlert%2BVoltage%2BDetector&qid=1705274020&sr=8-2&linkCode=sl1&tag=johnelliotv-20&linkId=25a4653b10a64d7f07fd90ef9b8eab08&language=en_US&ref_=as_li_ss_tl&th=1' ),
    affiliate_url ( 'https://amzn.to/48UJAzK' ),
    listing_name  ( 'Fluke 1AC II VoltAlert Non-Contact Voltage Tester' ),
    item_options  ( 'Size Name: 1AC-A1-II, 90-1000V' ),
    item_price    ( 'AU$100.11' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Fluke+1AC-C2-II+VoltAlert+Voltage+Detector' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/301822024783?hash=item4645fe9c4f%3Ag%3AFa4AAOSwhkRWd5Rc&amdata=enc%3AAQAIAAABAHW%2FPzwGfDeoce7CmGir01kvVgszpmq8m%2FtD0TsDdF%2BmhSrN3qmG0amU6NYf2hQCZ9cASjcIhhA5VDKvqU1JT2gHog3aRnxH64RCYk60scxCWZfrLsrNy9j9I0wdFCoostdbjtgpr8IwiMgOLRO%2FeZ%2BLBLtElHzirTVV2D86gi%2BTp9V60gOVosJhgUKoPPGR%2BMXVovWJmSvQn%2F02c2coYzxUsCF2JjDWybIw0Xph3WU1b2cjVmNj8kZ%2FYt3s8uvKrYaLncAhwfDqtkyQ%2FBpIpJFC9Tsd0z%2F4Wx0hMAkLgNOFWIAhbru8uCNABRO6Y7nOtvagGofO2UxWynIpo0QOAI8%3D%7Ctkp%3ABk9SR_KnoqShYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/LgIdOV' ),
    listing_name  ( '1AC-C2-II Electric Power Voltage Tester VoltAlert Pen Detector AC200-1000V Fluke' ),
    item_price    ( 'US$20.28' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/116031126848?hash=item1b03fe7d40%3Ag%3ANW8AAOSwKodlmMk4&amdata=enc%3AAQAIAAAA4EVcuGDBTxsN%2BJ8NhUCV%2BKrKObfXM7J0gaAV4EX4PXUw%2FZJbL5hc26R4B1MrH3bvRT7%2F7%2B5JH95aA%2FQcAyRWlEOonKF0ecDqfpEVS%2FW3Mt%2FcuYik2QQAK1Y%2Bi4fm%2FUsEs2prajZWLyhj7D%2B2SJDJRqaYJesyOkUJYzv2eyOQvXynZ6YUwkhzXMUqqa68R5nEDTsQfZbJLf%2BuqwnVA69cIJFrzSFXylsCWP19gy9uxe35XWNVPG9vqZL2Mj%2Fi2umOS%2B%2BKTULVIct4dwjdYOWRIvd4SUSlcFYir%2BAptzEwK5Vm%7Ctkp%3ABk9SR_KnoqShYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/UE1TW3' ),
    listing_name  ( '1AC-C2-II Electric Power Voltage Tester VoltAlert Pen Detector AC200-1000V Fluke' ),
    item_price    ( 'US$23.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/355093930800?hash=item52ad3f6330%3Ag%3AY-MAAOSwdZVjjzL8&amdata=enc%3AAQAIAAAA4OuTupqkepoe6OiNP5YXwwyXyPCIpkruWtpA7JaCtKt8S5Z6msO4Sjalo7vXhTiVCUuFZAGHhBkAQ68f%2Fida8ue0MXXbh5WsfU41Tn6ZCnw5UG4E6XQC3IZXzuX7KQJHr4y3wrCr58zvAZFRoKXQ%2Bz7bH1o9xw3JYJ02Voh%2BVqpxlwmVMuEvjO1Bi35XaVo%2Fck22uqzztNBM49Jg0uUUVjPgUaGCdpc3OdvUaCfjTaxTrD8XrVrCgwTJQZAReKiDtKWjDg%2Bk3V51rsPi%2BkzOMjwjL3o1YRbhS40FjFloeIvB%7Ctkp%3ABk9SR_KnoqShYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/OLUCpk' ),
    listing_name  ( 'Fluke 1AC-C2-II Electric Power Voltage Tester VoltAlert Pen Detector AC200-1000V' ),
    item_price    ( 'US$19.99' ),
    item_shipping ( 'US$11.70' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Fluke+1AC-C2-II+VoltAlert+Voltage+Detector' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/276279849567?hash=item40538ff25f%3Ag%3A%7Ei0AAOSw7mNlFtZx&amdata=enc%3AAQAIAAAA4Ey5WF%2FWnMgOI6xZxn2HD9RRbhBhdZTA7bsn51wCR3hFLSNw4VUD1V3YI3PZtW1rGci%2FHrNykhTXVXtCmXgYfx%2FOrrQ6fXBCN2jIkdcLOY0rF%2BwXvf%2FMAm%2F8O%2Bkz8spSG5derjzcRfsXf4bbd%2F%2BFWEU%2FbLsbk86yR7tfPld3Yh1BRK%2FYpdi4UUtETspnlVDO2Sz65Za1t%2B18kM4dNHSsEsTANgnR7QSyHPZA9dd48Fz94nQ5YBTJ%2FAkjuA46Bn0hD5NL0lrf2dxHX2bdS9iBE3jDoNE8clHqKMN5m2sC3Sem%7Ctkp%3ABk9SR-CftaShYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/hXKOKE' ),
    listing_name  ( 'Fluke 1AC-C2 II VoltAlert Non-contact 200~1000V AC Voltage Detector Pen Tester' ),
    item_price    ( 'AU$49.50' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/276262262087?hash=item4052839547%3Ag%3A%7Ei0AAOSw7mNlFtZx&amdata=enc%3AAQAIAAAA4GLDB192nNwZ95toAFR8b1JP1e9q6zG%2B2gPA5ttDaqQOByzEEO%2F1i4PLgVpi0o%2BZz8UHyey2pDas04%2BMTJCCaD7J1A1nsCFQXPV1ZG4AlyemjMnvmY7MLk2wdwTizdLxsnKa5dzIzYf0ce0a9y0uGFjOtwGTdOEuNIvCMPp7R266fKmbVcUB9ErW%2BU31Jo4BpcI0b%2FUj85Gl6DbxbYI0CdWj4wwDDYIG7A%2F8VT%2FPlV%2BGb%2BeqYJjZZKw7gK27SGAD6HDKDa30%2BO3XNOGm6eLIKwIRbMvvbbvuhXkCis7aTv88%7Ctkp%3ABk9SR-CftaShYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/kJnlRQ' ),
    listing_name  ( 'Fluke 1AC-C2 II VoltAlert Non-contact 200~1000V AC Voltage Detector Pen Tester' ),
    item_price    ( 'AU$32.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/301822024783?hash=item4645fe9c4f%3Ag%3AFa4AAOSwhkRWd5Rc&amdata=enc%3AAQAIAAAA4GjsYssq%2Bw1st0KW2CqXvqrRiQnx6J0cfCjZI4OcK4Mp4AiSQrsf26Qmjyg%2FQhXjBVvQRUoveuOLmWj6ZNinzfKhTjZz4CqoTUdeVGl97FVId%2BIK9CfkHxlvoYzLLb8tVbjNhelw8jzL%2BcijYIliqd1iA72winboYkqiQA19aX%2FdlFRH4OgzDWYcrAXpcyrOhDbFM83SLoSJSsdysFZcObju%2BhMEc67anoM9yZV8YftNS3kMrG3aDo1PKFEmaSYkjSpmJVqcf2UlCzR1Oq1LHQG2JG7sZ32ig8CSh8d77RJp%7Ctkp%3ABk9SR-KftaShYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/S5T3sZ' ),
    listing_name  ( '1AC-C2-II Electric Power Voltage Tester VoltAlert Pen Detector AC200-1000V Fluke' ),
    item_price    ( 'AU$33.30' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Fluke-1AC-C2-II-VoltAlert-Voltage-Detector.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006200262722.html?spm=a2g0o.productlist.main.3.21f426d3sKzcqg&algo_pvid=d305dff0-c6c3-4dd6-8eea-a4e2b0dda6c0&algo_exp_id=d305dff0-c6c3-4dd6-8eea-a4e2b0dda6c0-1&pdp_npi=4%40dis%21AUD%2156.55%2139.59%21%21%21268.01%21187.61%21%402101ef7017052745436976003e9c4f%2112000036253311936%21sea%21AU%214385823938%21&curPageLogUid=o9noFKcNsOb8&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dn1tSvj' ),
    listing_name  ( 'Fluke 1AC C2 II 2AC 90V-1000V Electrical Test Pen VoltAlert Non Contact Voltage Detector Current Tester Stick Volt Alert Check' ),
    item_options  ( 'Color: 1AC-C2II' ),
    item_price    ( 'AU$28.51' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005003930904473.html?spm=a2g0o.productlist.main.5.21f426d3sKzcqg&algo_pvid=d305dff0-c6c3-4dd6-8eea-a4e2b0dda6c0&algo_exp_id=d305dff0-c6c3-4dd6-8eea-a4e2b0dda6c0-2&pdp_npi=4%40dis%21AUD%2130.98%2123.86%21%21%2120.49%2115.78%21%402101ef7017052745436976003e9c4f%2112000027494411260%21sea%21AU%214385823938%21&curPageLogUid=57zvH8PUYItH&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DEJMLcN' ),
    listing_name  ( 'FLUKE 1AC-C2 II VoltAlert Sensor Non-contact 200~1000V AC tester electrical Detector Pen' ),
    item_options  ( 'Color: 1 pieces' ),
    item_price    ( 'AU$23.86' ),
    item_shipping ( 'AU$28.97' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/32801219314.html?spm=a2g0o.productlist.main.7.21f426d3sKzcqg&algo_pvid=d305dff0-c6c3-4dd6-8eea-a4e2b0dda6c0&algo_exp_id=d305dff0-c6c3-4dd6-8eea-a4e2b0dda6c0-3&pdp_npi=4%40dis%21AUD%2124.63%2124.63%21%21%2116.29%2116.29%21%402101ef7017052745436976003e9c4f%2166058493732%21sea%21AU%214385823938%21&curPageLogUid=z9vBGksInuOG&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DFKlnUd' ),
    listing_name  ( 'FLUKE 1AC-C2 II VoltAlert Sensor Non-contact 200~1000V AC tester electrical Detector Pen' ),
    item_options  ( 'Color: 1pcs' ),
    item_price    ( 'AU$24.63' ),
    item_shipping ( 'AU$2.66' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com/itm/161025194014' ),
    order_url       ( 'https://order.ebay.com/ord/show?orderId=20-10359-89546#/' ),
    order_id        ( '20-10359-89546' ),
    order_date      ( 'Aug 2, 2023' ),
    order_item_name ( 'Fluke 1AC-C-II VoltAlert Non-Contact AC Detector Pen AC Voltage tester Stick OZ' ),
    order_price     ( 'AU$35.40' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://d297fd4gt7t5lv.cloudfront.net/file/2023-11-03-172747/s-l1600.png' ),
  equipment_item(
    manufacturer_name ( 'Duratech' ),
    model_name        ( 'TH-1980' ),
    EquipmentFeature::PCB_CLAMP,
    EquipmentAttribute::BENCH_EQUIPMENT,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Duratech' ),
    model_name        ( 'TH-1980' ),
    equipment_type    ( 'PCB Clamp' ),
    category          ( 'Clamp' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Duratech_TH-1980' ),
  search_url    ( 'https://www.amazon.com/s?k=Duratech+TH-1980+PCB+Clamp&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/MMOBIEL-Adjustable-Soldering-Desoldering-Rotation/dp/B098PBPX8W/ref=pd_sbs_d_sccl_3_1/357-4865216-0697531?pd_rd_w=m85Py&content-id=amzn1.sym.97c5ae12-dcee-4048-8c97-77299443b76d&pf_rd_p=97c5ae12-dcee-4048-8c97-77299443b76d&pf_rd_r=WVW1C3NJW1BPD3WVHEV3&pd_rd_wg=077ov&pd_rd_r=f2958093-1cb8-47fc-87e1-a941bbd4bf02&pd_rd_i=B098PBPX8W&psc=1' ),
    affiliate_url ( 'https://amzn.to/3O4bGk3' ),
    listing_name  ( 'MMOBIEL Adjustable PCB Holder Circuit Board Holder Tool for Circuit Board Soldering Desoldering, Repair Tool 360° Degree Rotation' ),
    item_price    ( 'US$20.99' ),
    item_shipping ( 'US$19.09' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Duratool-PCB-Holder/dp/B072BCZCXP/ref=sr_1_15?dib=eyJ2IjoiMSJ9.4SRaNVTzzYwS9_W6RK-yQJS8Y5TiIxIsjaGsX5ogD87T2cHS25H-aB_Mvr8ONkyA_KZjL7zgZyIXBSqdzKHKtS5-fu53FkeQ4qgRWsVrHt3Nhv3nQx8wcG8-V6x65gHpW08igxD7HVHXmGbSNn6mng.Aq7QxbC5c6QGv0zidNW8oOMa2RMxI3cOyKE13yuxLv8&dib_tag=se&keywords=Duratech+TH-1980+PCB+Clamp&qid=1705274988&sr=8-15' ),
    affiliate_url ( 'https://amzn.to/3Hk7tVO' ),
    listing_name  ( 'DURATOOL D03170 PCB Holder' ),
    item_price    ( 'AU$41.56' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Duratech+TH-1980+PCB+Clamp&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/DOSS-PCB-HOLDER/dp/B0786ZR4ZN/ref=sr_1_4?dib=eyJ2IjoiMSJ9.4SRaNVTzzYwS9_W6RK-yQJS8Y5TiIxIsjaGsX5ogD87T2cHS25H-aB_Mvr8ONkyA_KZjL7zgZyIXBSqdzKHKtS5-fu53FkeQ4qgRWsVrHt3Nhv3nQx8wcG8-V6x65gHpW08igxD7HVHXmGbSNn6mng.Aq7QxbC5c6QGv0zidNW8oOMa2RMxI3cOyKE13yuxLv8&dib_tag=se&keywords=Duratech+TH-1980+PCB+Clamp&qid=1705274988&sr=8-4' ),
    affiliate_url ( 'https://amzn.to/3vAHSFo' ),
    listing_name  ( 'DOSS ZD11E PCB Holder For Soldering Spring Clamps Holds PCBs Up To 200Mm Long., Spring Clamps' ),
    item_price    ( 'AU$14.95' ),
    item_shipping ( 'AU$9.95' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/MMOBIEL-Adjustable-Soldering-Desoldering-Rotation/dp/B098PBPX8W/ref=pd_sbs_d_sccl_3_1/357-4865216-0697531?pd_rd_w=m85Py&content-id=amzn1.sym.97c5ae12-dcee-4048-8c97-77299443b76d&pf_rd_p=97c5ae12-dcee-4048-8c97-77299443b76d&pf_rd_r=WVW1C3NJW1BPD3WVHEV3&pd_rd_wg=077ov&pd_rd_r=f2958093-1cb8-47fc-87e1-a941bbd4bf02&pd_rd_i=B098PBPX8W&psc=1' ),
    affiliate_url ( 'https://amzn.to/3HhF2Yw' ),
    listing_name  ( 'MMOBIEL Adjustable PCB Holder Circuit Board Holder Tool for Circuit Board Soldering Desoldering, Repair Tool 360° Degree Rotation' ),
    item_price    ( 'AU$31.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Duratool-PCB-Holder/dp/B072BCZCXP/ref=sr_1_15?dib=eyJ2IjoiMSJ9.4SRaNVTzzYwS9_W6RK-yQJS8Y5TiIxIsjaGsX5ogD87T2cHS25H-aB_Mvr8ONkyA_KZjL7zgZyIXBSqdzKHKtS5-fu53FkeQ4qgRWsVrHt3Nhv3nQx8wcG8-V6x65gHpW08igxD7HVHXmGbSNn6mng.Aq7QxbC5c6QGv0zidNW8oOMa2RMxI3cOyKE13yuxLv8&dib_tag=se&keywords=Duratech+TH-1980+PCB+Clamp&qid=1705274988&sr=8-15' ),
    affiliate_url ( 'https://amzn.to/47uM72A' ),
    listing_name  ( 'DURATOOL D03170 PCB Holder' ),
    item_price    ( 'AU$41.56' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Duratech+TH-1980+PCB+Clamp' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/133990901970?epid=1655495334&hash=item1f327ae8d2%3Ag%3Ar1cAAOSwUsFh3Tko&amdata=enc%3AAQAIAAAA0OzRRYB9PxQoGe4gAHXVJHLXdt48XLbhQWs9t8wSJe0dB1b4WZ3iSFKefXrU10BhQbRB7J3IqZbrRQ4nFFIejB9NzkW60FNsvqs1sA%2BJzkoCkYw0qYq%2B1zUy4BM0M7UOIUNgpPUUAi0PF3JU4PE46%2FL%2Bjxo9NrWpuTcCcozl6KP51ZOwGzDSY0vTBBLpzVgcImHLeqaw08Ygrrru82J%2B5gG8Ns7a9ZiHC%2BP0lISbzN2iJqDCxOqBZ%2FEHvyRMqOP2qZKjMwwoyl0BVsmEyJGFLnU%3D%7Ctkp%3ABk9SR-aZpqWhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/F74Xvp' ),
    listing_name  ( 'PCB Circuit Board Holder Duratech Desktop 360 Degree Adjustable Angle TH-1980' ),
    item_price    ( 'US$20.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/264538008029?epid=1655495334&hash=item3d97b1a9dd%3Ag%3AuwwAAOSw0o9e4Csq&amdata=enc%3AAQAIAAAA8NIVuO%2ByaAEyzCI4%2FbcXUbGccNU0sr%2BYfaS%2BNcWVcWTsVxOO0RTkyCSFzC0aS%2BzN7vJSfe8VKKapphsvTzbTPW1o0Dkwoqu0mtbyOD8pFme0m0m5jQSvrA7fW%2FeNh572tWzZc6PFc3BGgXMkgu4Jv01C%2FVdr%2FWkUrzhxJ6SNWUKeIK6cDJUaMsMULrOd9BEFIST%2FfgwghzFyDlTZjNEe1%2B6nuxNNB3H84k2mgJcb4pHAXHHZLceN2b9PRhKQe%2FGbIilpDpCWG%2Bb1yr08gUtWWZWhia5kVgElPKy8iWzAx7sBRuq8Mc8T9xSAcdIAjsN6IQ%3D%3D%7Ctkp%3ABk9SR-aZpqWhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/AyOACO' ),
    listing_name  ( 'Duratech Desktop PCB Circuit Board Holder with Adjustable Angle TH-1980' ),
    item_price    ( 'US$20.03' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Duratech+TH-1980+PCB+Clamp' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/133990901970?epid=1655495334&hash=item1f327ae8d2%3Ag%3Ar1cAAOSwUsFh3Tko&amdata=enc%3AAQAIAAAA8LBIwO0fyC8NYy%2FXucEBQINGoJQtcTTBBSzUINpHTCRIDk%2FbDlVKKGtAyXtrm6kpU3vz5FehUuyJI1nw1kx2AAPcOqCykiYVEUeRl%2FP7fCRcrhdaPfYe23qMkUcEMwoZ%2Bc%2BQlxjag9xKXHfn307H6n8ZV8kd1ZMyPfZOwE8zeBilYlLacnbyah7xoaAq0twQSYhawanI1%2FEQrQcviZyTqGuD3mmoWHyGf77%2BOZmfqvj6rOCEQKwfa3r1AbedwxvjFhRH85K14R6uBk3fIP4kaOi%2FSvK12aiOrov4bSRnzfw84NhIC6nrhAQGQZmNmpcOhw%3D%3D%7Ctkp%3ABk9SR96EtKWhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/DzswH2' ),
    listing_name  ( 'PCB Circuit Board Holder Duratech Desktop 360 Degree Adjustable Angle TH-1980' ),
    item_price    ( 'AU$29.85' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/264538008029?epid=1655495334&hash=item3d97b1a9dd%3Ag%3AuwwAAOSw0o9e4Csq&amdata=enc%3AAQAIAAAA0EqZJ07kSA2KCX%2BHlebiBWsGMLGpY%2FUa1ZdC4dxNmIVa2n3rZz%2FPSOIcKbE%2FyD4KFaWQ0wYorzBlskv7WXxq%2FxjHM5fM1tQ6hYRvkJa99cAvPz52WUDdJ8DpyFXHWhmhDvKeTxYgd5Q77QTVLKp871YvC8BWw9EQGgBrME0rC9H7rO9CUhBcedB0xdn6Usxu3fANlWywhhIuXmw2eJ%2FXOA%2FgSXnrAQCmFwsdwMnLcMM%2BuL5bDZ2mfJCMOz28KXLbyC9P%2BN1NaXs3GvYjnwnWJ7Q%3D%7Ctkp%3ABk9SR-CEtKWhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/7GeeHX' ),
    listing_name  ( 'Duratech Desktop PCB Circuit Board Holder with Adjustable Angle TH-1980' ),
    item_price    ( 'AU$29.90' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/225699021870?epid=1655495334&hash=item348cb5c42e%3Ag%3AH3kAAOSwlPZkxjQb&amdata=enc%3AAQAIAAAA8HjUjonIQwxg2HuuleyJWQ7xbXJ%2B4YIDLmXr62jm9VWHSVsKF1s34zivZNpNL5qh80kZNexsBYNz5yS4il%2FgYWkjr4a5B8OwPRUUrSpPZwM95c4C4h4QzdYB3jqGx%2FXi3LH7tMHvI5%2Blv22%2BFjcmYcM%2Bpxej0giYkRh0iVcRsCOXZKEKgrjCdAqafMxMu1v%2B88uTzsshZpTF7AbpyKdsA8mecG8l8W%2FXX%2BxwJkCgbBfO64%2BDMHb9f28nx8GKeftswEGC%2FCSMNCZRptpppxlCQPmyxQZBkqVnB4Mui7p589amfmThhBs5RM%2BxvQ2rrjV5jA%3D%3D%7Ctkp%3ABk9SR-CEtKWhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/UZ2AG9' ),
    listing_name  ( 'Excellent working surface Heavy with well-balanced PCB Holder for Soldering ' ),
    item_price    ( 'AU$22.90' ),
    item_shipping ( 'AU$6.90' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Duratech-TH-1980-PCB-Clamp.html' ),
  purchase(
    equipment_url   ( 'https://www.ebay.com/itm/133990901970' ),
    order_url       ( 'https://order.ebay.com/ord/show?orderId=07-08851-03093#/' ),
    order_id        ( '07-08851-03093' ),
    order_date      ( 'Jul 10, 2022' ),
    order_item_name ( 'PCB Circuit Board Holder Duratech Desktop 360 Degree Adjustable Angle TH-1980' ),
    order_price     ( 'AU$29.85' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S1eca90faa8fb49f48c32e0020eb583574/3PCS-MECHANIC-10ML-UV-3S-Quick-drying-Solder-Mask-Ink-for-Mobile-Phone-Repair-Jumping-Wire.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'MECHANIC' ),
    EquipmentFeature::UV_CURING_LIGHT,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'MECHANIC' ),
    equipment_type    ( 'UV Curing Light' ),
    category          ( 'UV Light' ),
    category          ( 'Torch/Light' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/UV_curing_light' ),
  search_url    ( 'https://www.amazon.com/s?k=MECHANIC+UV+Curing+Light&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=MECHANIC+UV+Curing+Light&s=price-asc-rank' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=MECHANIC+UV+Curing+Light' ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=MECHANIC+UV+Curing+Light' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-MECHANIC-UV-Curing-Light.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005004441502.html?spm=a2g0o.productlist.main.23.11e6272d6mb2cG&algo_pvid=f61592a0-01a9-41a3-99fa-06c13a88e0af&algo_exp_id=f61592a0-01a9-41a3-99fa-06c13a88e0af-11&pdp_npi=4%40dis%21AUD%2114.02%2114.02%21%21%219.27%219.27%21%402103247417052758565302740eaad1%2112000031314399880%21sea%21AU%214385823938%21&curPageLogUid=NS5CuMpP85vG&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DCbq7Q1' ),
    listing_name  ( 'MECHANIC L1 Pro Intelligent Double Lamp Beads UV Curing Light 7W Fast Curing Repair Tool OCA Optical Solder Mask Oil Resin Glue' ),
    item_options  ( 'Color: L1' ),
    item_price    ( 'AU$14.02' ),
    item_shipping ( 'AU$2.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004379165976.html?spm=a2g0o.productlist.main.33.11e6272d6mb2cG&algo_pvid=f61592a0-01a9-41a3-99fa-06c13a88e0af&algo_exp_id=f61592a0-01a9-41a3-99fa-06c13a88e0af-16&pdp_npi=4%40dis%21AUD%2128.09%2121.07%21%21%21133.11%2199.83%21%402103247417052758565302740eaad1%2112000029912404236%21sea%21AU%214385823938%21&curPageLogUid=C9goohBhmqe2&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DmayrwZ' ),
    listing_name  ( 'Mechanic L1 L1pro UV Curing Lamp Intelligent Double Beads 7W High Power Fast Curing Light Motherboard UV Glue Curing Repair Lamp' ),
    item_options  ( 'Color: L1' ),
    item_price    ( 'AU$15.75' ),
    item_shipping ( 'AU$0.97' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005305494215.html?spm=a2g0o.productlist.main.35.11e6272d6mb2cG&algo_pvid=f61592a0-01a9-41a3-99fa-06c13a88e0af&algo_exp_id=f61592a0-01a9-41a3-99fa-06c13a88e0af-17&pdp_npi=4%40dis%21AUD%2123.82%2116.67%21%21%2115.75%2111.02%21%402103247417052758565302740eaad1%2112000032564020373%21sea%21AU%214385823938%21&curPageLogUid=eQoUisANTjxe&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DEEz9qp' ),
    listing_name  ( 'MECHANIC L1 Pro Intelligent Double Lamp Beads UV Curing Light 7W Fast Curing Repair Tool OCA Optical Solder Mask Oil Resin Glue' ),
    item_options  ( 'Color: L1' ),
    item_price    ( 'AU$16.67' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005357154060.html?spm=a2g0o.order_detail.order_detail_item.3.1160f19cREPkS3' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.188.764218021V85h7&orderId=8174952390293938' ),
    order_id        ( '8174952390293938' ),
    order_date      ( 'Aug 29, 2023' ),
    order_item_name ( '3PCS MECHANIC 10ML UV 3S Quick-drying Solder Mask Ink for Mobile Phone Repair Jumping Wire + L1 UV curing light' ),
    order_options   ( 'Color: 3PCS SU3 and L1' ),
    order_price     ( 'AU$19.43' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$5.71' ),
    order_gst       ( 'AU$2.51' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61zYVFmSi+L._SL1500_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.bysameyee.com/head-mount-magnifier-bysameyee-lighted-magnifying-headband-glass-loupe-visor-with-2-led-light-for-close-work-jewelry-work-watch-repair-arts-amp-crafts-reading-aid-p00095p1.html' ),
      link_text       ( 'Head Mount Magnifier, Bysameyee Lighted Magnifying Headband Glass Loupe Visor with 2 LED Light for Close Work, Jewelry Work, Watch Repair, Arts & Crafts, Reading Aid' ),
    ),
    manufacturer_name ( 'Bysameyee' ),
    EquipmentFeature::HEAD_MOUNTED_MAGNIFIER,
    EquipmentFeature::TORCH,
    EquipmentAttribute::RECHARGEABLE,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Bysameyee' ),
    equipment_type    ( 'Head-Mounted Magnifier' ),
    category          ( 'Magnifying Glass' ),
    category          ( 'Torch/Light' ),
    category          ( 'Rechargeable' ),
    category          ( 'Head-Mounted' ),
    manufacturer_link (
      link_href       ( 'https://www.bysameyee.com/head-mount-magnifier-bysameyee-lighted-magnifying-headband-glass-loupe-visor-with-2-led-light-for-close-work-jewelry-work-watch-repair-arts-amp-crafts-reading-aid-p00095p1.html' ),
      link_text       ( 'Head Mount Magnifier, Bysameyee Lighted Magnifying Headband Glass Loupe Visor with 2 LED Light for Close Work, Jewelry Work, Watch Repair, Arts & Crafts, Reading Aid' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Bysameyee_Head-Mounted_Magnifier' ),
  search_url    ( 'https://www.amazon.com/s?k=Bysameyee+Head-Mounted+Magnifier&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Magnifier-Bysameyee-Lighted-Magnifying-Headband/dp/B0863VH3SW/ref=sr_1_4?dib=eyJ2IjoiMSJ9.Exqam8iUeQoIWiO6y1n4Eymlm1ppSqHsJZ-rOvEnmv5guDFXn7xl3h1DBq5lpaXrviVjzPM7bp4yU8Kc93CcWDIMGw1y5vj9P4AaLECiJo1Hq4h8ymC7-cgSQyEGxiFEeX6UM1XboyEUY-wn3XIIfw.0ZkvKZKM2hb1G-XVus1OYlVMzbBSyMhRownw47q4nyE&dib_tag=se&keywords=Bysameyee%2BHead-Mounted%2BMagnifier&qid=1705276090&sr=8-4&th=1' ),
    affiliate_url ( 'https://amzn.to/3O4csgX' ),
    listing_name  ( 'Bysameyee Magnifying Glass with Light for Close Work, Rechargeable Lighted Head-Mounted Magnifier Visor with 2 Jeweler\'s Loupe LEDs and Interchangeable Headband for Reading, Jewelry Work, Watch Repair' ),
    item_options  ( 'Size: Rechargeable-3.5X' ),
    item_price    ( 'US$15.99' ),
    item_shipping ( 'US$18.49' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?s=price-asc-rank&k=Bysameyee+Head-Mounted+Magnifier' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Magnifier-Bysameyee-Lighted-Magnifying-Headband/dp/B0863VH3SW/ref=sr_1_4?dib=eyJ2IjoiMSJ9.Exqam8iUeQoIWiO6y1n4Eymlm1ppSqHsJZ-rOvEnmv5guDFXn7xl3h1DBq5lpaXrviVjzPM7bp4yU8Kc93CcWDIMGw1y5vj9P4AaLECiJo1Hq4h8ymC7-cgSQyEGxiFEeX6UM1XboyEUY-wn3XIIfw.0ZkvKZKM2hb1G-XVus1OYlVMzbBSyMhRownw47q4nyE&dib_tag=se&keywords=Bysameyee%2BHead-Mounted%2BMagnifier&qid=1705276090&sr=8-4&th=1' ),
    affiliate_url ( 'https://amzn.to/41Y9i45' ),
    listing_name   ( 'Bysameyee Magnifying Glass with Light for Close Work, Rechargeable Lighted Head-Mounted Magnifier Visor with 2 Jeweler\'s Loupe LEDs and Interchangeable Headband for Reading, Jewelry Work, Watch Repair' ),
    item_options  ( 'Size Name: 1 Count (Pack of 1)' ),
    item_price    ( 'AU$29.99' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Bysameyee+Head-Mounted+Magnifier' ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Bysameyee+Head-Mounted+Magnifier' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Bysameyee-Head-Mounted-Magnifier.html' ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B0863VH3SW/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&th=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=250-1468000-1335020' ),
    order_id        ( '250-1468000-1335020' ),
    order_date      ( '29 November 2022' ),
    order_item_name  ( 'Bysameyee Magnifying Glass with Light for Close Work, Rechargeable Lighted Head-Mounted Magnifier Visor with 2 Jeweler\'s Loupe LEDs and Interchangeable Headband for Reading, Jewelry Work, Watch Repair' ),
    order_options   ( 'Size Name: 1 Count (Pack of 1)' ),
    order_price     ( 'AU$27.18' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/51YEsVdZjsL._AC_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'Super Bright 90000LM' ),
    EquipmentFeature::LED_TORCH,
    EquipmentAttribute::HAND_TOOL,
  ),
  /*
  equipment_info(
    model_name         ( 'Super Bright 90000LM' ),
    equipment_type     ( 'LED Torch' ),
    category          ( 'Torch/Light' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/LED_Torch' ),
  search_url    ( 'https://www.amazon.com.au/s?s=price-asc-rank&k=Super+Bright+90000LM+LED+Torch' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B08P6ZR2V7?&linkCode=sl1&tag=johnelliotv-22&linkId=d9bc4c3b7b2331882bcf893c7d2660fc&language=en_AU&ref_=as_li_ss_tl' ),
    affiliate_url ( 'https://amzn.to/48A4UuC' ),
    listing_name   ( 'Super Bright 90000LM LED USB Rechargeable Flashlight LED Tactical Light Torch' ),
    item_price    ( 'AU$26.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B08P6ZR2V7/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=250-9774862-6048658' ),
    order_id        ( '250-9774862-6048658' ),
    order_date      ( '29 November 2022' ),
    order_item_name ( 'Super Bright 90000LM LED USB Rechargeable Flashlight LED Tactical Light Torch' ),
    order_price     ( 'AU$26.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/S4d0f1e51c0584e119ecff8aae3ab9859S.jpg_640x640.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'TE-801' ),
    EquipmentFeature::THIRD_HAND,
    EquipmentFeature::MAGNIFYING_GLASS,
    EquipmentFeature::LED_LIGHT,
    EquipmentFeature::SOLDERING_STAND,
  ),
  /*
  equipment_info(
    equipment_type     ( 'Third Hand' ),
    category          ( 'Third Hand' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/TE-801_Third_Hand' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Third-Hand.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005518045978.html?aff_fcid=8e721f253b0e49dfb4d257f4b715dd41-1705276649053-00414-_DdwNb83&tt=CPS_NORMAL&aff_fsk=_DdwNb83&aff_platform=shareComponent-detail&sk=_DdwNb83&aff_trace_key=8e721f253b0e49dfb4d257f4b715dd41-1705276649053-00414-_DdwNb83&terminal_id=f020c219a3b44a7b92d636c6cc46e9db&afSmartRedirect=y' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DmAlTap' ),
    listing_name   ( '3 Hand Soldering Iron Stand Welding Tool With Magnifying Glass Illuminated LED Alligator Clip Holder Clamp Helping Repair' ),
    item_options  ( 'Color: 16126a' ),
    item_price    ( 'AU$12.82' ),
    item_shipping ( 'AU$2.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005499017037.html?aff_fcid=024b37669cdc4a7db7b4b01e27013bc5-1705276649588-09757-_DFGMNSf&tt=CPS_NORMAL&aff_fsk=_DFGMNSf&aff_platform=shareComponent-detail&sk=_DFGMNSf&aff_trace_key=024b37669cdc4a7db7b4b01e27013bc5-1705276649588-09757-_DFGMNSf&terminal_id=f020c219a3b44a7b92d636c6cc46e9db&afSmartRedirect=y' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dn4xwCh' ),
    listing_name   ( 'Desktop Soldering Holder Welding Equipment Auxiliary Tool Third Hand Helping Repair Tool Magnifier LED Lighting Soldering Stand' ),
    item_price    ( 'AU$11.94' ),
    item_shipping ( 'AU$2.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005518045978.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.21.16dd1802S0KWpb&orderId=8174193325133938' ),
    order_id        ( '8174193325133938' ),
    order_date      ( 'Aug 25, 2023' ),
    order_item_name ( '3 Hand Soldering Iron Stand Welding Tool With Magnifying Glass Illuminated LED Alligator Clip Holder Clamp Helping Repair' ),
    order_options   ( 'Color: 16126a' ),
    order_price     ( 'AU$12.70' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$1.19' ),
    order_discount  ( 'AU$0.76' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005499017037.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.26.16dd1802S0KWpb&orderId=8174193325153938' ),
    order_id        ( '8174193325153938' ),
    order_date      ( 'Aug 25, 2023' ),
    order_item_name ( 'Desktop Soldering Holder Welding Equipment Auxiliary Tool Third Hand Helping Repair Tool Magnifier LED Lighting Soldering Stand' ),
    order_price     ( 'AU$12.01' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$1.13' ),
    order_discount  ( 'AU$0.71' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/41+jZTLBEjL._AC_SL1004_.jpg' ),
  equipment_item(
    manufacturer_name ( 'ALKOY' ),
    EquipmentFeature::CAPACITOR_DISCHARGE_PEN,
    EquipmentFeature::TWEEZERS,
    EquipmentAttribute::HAND_TOOL,
    EquipmentAttribute::CORDLESS,
  ),
  /*
  equipment_info(
    equipment_type     ( 'Capactior Discharge Pen' ),
    category          ( 'Capactior Discharge Pen' ),
    category          ( 'Hand Tool' ),
    category          ( 'Cordless' ),
    category          ( 'Tweezers' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/ALKOY_Capacitor_Discharge_Pen' ),
  search_url    ( 'https://www.amazon.com/s?k=Capactior+Discharge+Pen&crid=2XWP8HKS23BPC&sprefix=capactior+discharge+pen%2Caps%2C277&ref=nb_sb_noss_2' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Labstandard-Capacitor-Discharging-Discharger-Electronic/dp/B0C7VJL4D6/ref=sr_1_9?crid=2XWP8HKS23BPC&dib=eyJ2IjoiMSJ9.XYCeXUwEqJj2knlisFlhwJM4N4qg459ydU4iGPj-MWut3dBlW1aShcMD-M5bCHhO9pjyXuV4IYxlM0H6iUDnReGMBQYY8hic5nUghWM1f11f7hSAwNegvfbQeBeuWFVdwFqgRPTQO54z9Qk1Q85BUg.wQ7ryCD3ruhyKKZ8KU1MKhAR6WjlazDdpFG5M9YSRs8&dib_tag=se&keywords=capacitor+discharge+pen&qid=1705276856&sprefix=capactior+discharge+pen%2Caps%2C277&sr=8-9' ),
    affiliate_url ( 'https://amzn.to/48TWZbu' ),
    listing_name   ( 'Labstandard Upgraded Capacitor Discharge Pen Fast Discharging High Voltage 1000V Repair Tool Discharger for Electronic Safety Capacitor Discharge Pen' ),
    item_price    ( 'US$21.58' ),
    item_shipping ( 'US$2.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Portable-Capacitor-Discharge-Discharger-Industrial/dp/B0C6ZGMLS1/ref=sr_1_10?crid=2XWP8HKS23BPC&dib=eyJ2IjoiMSJ9.XYCeXUwEqJj2knlisFlhwJM4N4qg459ydU4iGPj-MWut3dBlW1aShcMD-M5bCHhO9pjyXuV4IYxlM0H6iUDnReGMBQYY8hic5nUghWM1f11f7hSAwNegvfbQeBeuWFVdwFqgRPTQO54z9Qk1Q85BUg.wQ7ryCD3ruhyKKZ8KU1MKhAR6WjlazDdpFG5M9YSRs8&dib_tag=se&keywords=capacitor+discharge+pen&qid=1705276856&sprefix=capactior+discharge+pen%2Caps%2C277&sr=8-10' ),
    affiliate_url ( 'https://amzn.to/48xCaCV' ),
    listing_name   ( 'Portable Capacitor Discharge Pen, Digital Sparkpen Discharger High Voltage 1000V For Industrial' ),
    item_price    ( 'US$23.99' ),
    item_shipping ( 'US$5.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Capacitor-Discharge-Discharging-Discharger-Electronic/dp/B0CN2G93T2/ref=sr_1_13?crid=2XWP8HKS23BPC&dib=eyJ2IjoiMSJ9.XYCeXUwEqJj2knlisFlhwJM4N4qg459ydU4iGPj-MWut3dBlW1aShcMD-M5bCHhO9pjyXuV4IYxlM0H6iUDnReGMBQYY8hic5nUghWM1f11f7hSAwNegvfbQeBeuWFVdwFqgRPTQO54z9Qk1Q85BUg.wQ7ryCD3ruhyKKZ8KU1MKhAR6WjlazDdpFG5M9YSRs8&dib_tag=se&keywords=capacitor+discharge+pen&qid=1705276856&sprefix=capactior+discharge+pen%2Caps%2C277&sr=8-13' ),
    affiliate_url ( 'https://amzn.to/47zi9dY' ),
    listing_name   ( 'Capacitor Discharge Pen Fast Discharging High Voltage 1000V Repair Tool Discharger for Electronic' ),
    item_price    ( 'US$20.99' ),
    item_shipping ( 'US$2.00' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Capactior+Discharge+Pen&crid=18AEPXY10GY9E&sprefix=capactior+discharge+pen%2Caps%2C240&ref=nb_sb_noss_2' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Capacitor-Discharge-Eacam-Discharging-Electronic/dp/B0CGVHGC13/ref=sr_1_5?crid=18AEPXY10GY9E&dib=eyJ2IjoiMSJ9.AsfvgSgG96TiKb8vY_ZIQOqQdpVF4x7YO6piswYobQL_dvpm4CnQBCEzmAbN4L2OefKUfe_vvAp9ZZ9xvjtHGjuhhd01UC9hBkUVjEel4H5JgMLItJpILYUkquanEkCfUy0-54ft7V0yA1s7LOdcQw.9slwdzPXR6BWoRxI7Epam7lloVt5cqpEj1aYFXwOCak&dib_tag=se&keywords=capacitor+discharge+pen&qid=1705277043&sprefix=capactior+discharge+pen%2Caps%2C240&sr=8-5' ),
    affiliate_url ( 'https://amzn.to/4aXWkYo' ),
    listing_name   ( 'Capacitor Discharge Pen,Eacam 1000V Portable Capacitor Discharge Pen, High Voltage Quick Discharging Tool Constant Discharge Pen, Electronic Repairs Discharge Pen' ),
    item_price    ( 'AU$26.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Capacitor-Discharge-Portable-Discharging-Electronic/dp/B0BLVVV9DS/ref=sr_1_6?crid=18AEPXY10GY9E&dib=eyJ2IjoiMSJ9.AsfvgSgG96TiKb8vY_ZIQOqQdpVF4x7YO6piswYobQL_dvpm4CnQBCEzmAbN4L2OefKUfe_vvAp9ZZ9xvjtHGjuhhd01UC9hBkUVjEel4H5JgMLItJpILYUkquanEkCfUy0-54ft7V0yA1s7LOdcQw.9slwdzPXR6BWoRxI7Epam7lloVt5cqpEj1aYFXwOCak&dib_tag=se&keywords=capacitor+discharge+pen&qid=1705277043&sprefix=capactior+discharge+pen%2Caps%2C240&sr=8-6' ),
    affiliate_url ( 'https://amzn.to/3HgXq3I' ),
    listing_name   ( 'Capacitor Discharge Pen, 1000V Portable Capacitor Discharge Pen High Voltage Quick Discharging Tool Constant Discharge Pen Electronic Repairs Discharge Pen' ),
    item_price    ( 'AU$29.22' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Capacitor-Discharge-Discharging-Electronic-ALKOY/dp/B0CFLRMSCL/ref=sr_1_8?crid=18AEPXY10GY9E&dib=eyJ2IjoiMSJ9.AsfvgSgG96TiKb8vY_ZIQOqQdpVF4x7YO6piswYobQL_dvpm4CnQBCEzmAbN4L2OefKUfe_vvAp9ZZ9xvjtHGjuhhd01UC9hBkUVjEel4H5JgMLItJpILYUkquanEkCfUy0-54ft7V0yA1s7LOdcQw.9slwdzPXR6BWoRxI7Epam7lloVt5cqpEj1aYFXwOCak&dib_tag=se&keywords=capacitor+discharge+pen&qid=1705277043&sprefix=capactior+discharge+pen%2Caps%2C240&sr=8-8' ),
    affiliate_url ( 'https://amzn.to/3NY4Qwn' ),
    listing_name   ( '1000V Portable Capacitor Discharge Pen High Voltage Quick Discharging Tool Constant Discharge Pen Electronic Repairs Discharge Pen ALKOY' ),
    item_price    ( 'AU$23.02' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_trksid=p2334524.m570.l1313&_nkw=Capactior+Discharge+Pen&_sacat=0&rt=nc&_osacat=0&_odkw=%E2%80%8EOUSFANAM+Capactior+Discharge+Pen&_sop=15&LH_ItemCondition=1000' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/126210066449?hash=item1d62b4c811%3Ag%3AG6wAAOSwxZFlZbKi&amdata=enc%3AAQAIAAAA8MfDX785qZel20ei6bT2gVONz7QKUFs3cInm1SGDWzX%2F8f4nif5CuciTWN4GEry7pi0a4lsnWU0YvELBkFsEyVCeYrAsHrKdk0mw7NH%2BZkYFaKyIi1onRXqr1v%2BtAe4p%2FgQmN55TwbK5MKtbljfVsV1x2N%2FrGwY6q7BUb%2FBRmUd9XFCcrCnB9Li0n2l20P37N4C3hndpHpnniXlOZv%2FFg5L%2F%2FR2HbU0aKiKTjWFDlVLB2mYuHCrrzrMs1Z4YQb8%2BML5dW3Rr3BzJI%2FZEdK8bBg4zOlQ7GrJuMNQrXWDGpvsF45v%2BJxo8i3a1qlQXQlEwlw%3D%3D%7Ctkp%3ABk9SR4DphKehYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/br6rn6' ),
    listing_name   ( 'Capacitor Discharge Pen Fast Discharging High Voltage 1000V Repair Tool Dis B7W3' ),
    item_price    ( 'US$14.17' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/204559635978?hash=item2fa0b4560a%3Ag%3A5gkAAOSwmbtlZwiK&amdata=enc%3AAQAIAAAA8C%2FrdRNdMBEUMiUHP%2BHvecxReIvOJEPv6KNj0XcTwa9Wr3LsOSytT95nB4cLff8YTcZxCIc6RD%2BUwh6SVUPmqw54I5ucNxEnTsGHKyFvJzFWT43Ipbl7ZGXSZifA9R1TCk%2FWckErRCKCaL%2BgFhBn9uZ13XGIdViJFhVYwxyoVfdAE48W%2FwBrirZn7A4ZRTzm%2FvfOh5PYCrU8zIbDFxM7ZEFmIXyGR2tV4jDp%2FBcD1k4%2F0qRH%2BWbhdEnYkfW5vVxwhJfbk%2BMZD7GVubnZasedh4zNcPCyDxv8tq9nQcGKo%2Fe7Ip5THniNWP3wSj34Gi8REw%3D%3D%7Ctkp%3ABk9SR4DphKehYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/vjTk0V' ),
    listing_name   ( 'Capacitor Discharge Pen Fast Discharging High Voltage 1000V Repair Tool Dis W5E7' ),
    item_price    ( 'US$14.17' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/386121135840?hash=item59e69cf6e0%3Ag%3ASRMAAOSwdJJlA8Z2&amdata=enc%3AAQAIAAAA8FdhVjqhne3p1RI7i1%2Fow8wLo4xTeTPJYJaVEJHk7rwg43hDB2usPvJ1Ssu5TnuMeyd6RSzZDVArmZTN%2BdR7njXxK3mqZaT6hpzF2rhkUD3qhnq1jP38WxOEkKejJPQR5zl%2FFYcbpaIwxl6CABJTwfq9SahZw68S1HVBbjI1ga0vtn%2FHXn5AEvV1Lq%2Fl0WpunQKn%2BwFGDVI7n%2BYtVqIo%2BuYDwyrBhHtxmijIRfB7B0U6M7W2MDUq13hSSq3hDC%2BtqdHVFV4ELe68Y3TTfN3vKNwQRNJvp1Uv%2Bl81iESo3yv5gVqVb153TZXjsm483Rlg1A%3D%3D%7Ctkp%3ABk9SR4DphKehYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/VLHrBJ' ),
    listing_name   ( 'Capacitor Discharge Pen Fast Discharging High Voltage 1000V Repair Tool Dis K7R4' ),
    item_price    ( 'US$14.32' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_trksid=p2334524.m570.l1313&_nkw=Capactior+Discharge+Pen&_sacat=0&rt=nc&_osacat=0&_odkw=%E2%80%8EOUSFANAM+Capactior+Discharge+Pen&_sop=15&LH_ItemCondition=1000' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/404653674593?hash=item5e373d1061%3Ag%3AhNkAAOSwGnNlaLX3&amdata=enc%3AAQAIAAAA8MCz11yBJcvE3XSNISNHIrJwuoQi2%2BOrL7M5vm4u%2BS8aW5FXq9anGC59q%2B%2BJB4iHY50Hws%2Ft1phEdD76LVh5kiqDExoFHVYGg4ZDTWtcH2xavjK9OCls81riPfjIVEW8d0som%2F6cSzoKiOLtkOXIQzf6zibuGT%2BsXz7yjuc5dFMq5bY8eP6oOl1XC0ktleM6%2FQbmMCBNF7OkW4xmfeMXZVqIZQ6pEqw3N3P%2Fp%2B4mdU6SpaAIV7pINiRfvheq%2BH1MMJMftvO11xtpHKpVrPvu%2BnpCh0X87GmXjcYXYh1AnDBzMVEldSTF6ar5VEi7NLJxLg%3D%3D%7Ctkp%3ABk9SR7KblaehYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/V7NWxN' ),
    listing_name   ( 'High Voltage Discharge Capacitor Discharge Pen Digital Sparkpen Discharger E4L8' ),
    item_price    ( 'AU$20.86' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/386194079429?hash=item59eaf5fec5%3Ag%3AB%7EIAAOSwQI9lKALS&amdata=enc%3AAQAIAAAA0A7Q6YiVdFn808xLKqjg%2Fcaqo6r7qJZRStav%2B8ZAYO%2B3xbFdV7SZHB8StpOGWhGHW0n5%2F0xRH5jsgZAjl3Iq%2F7S%2F0dBC26VKXfa682wEhTvNKjvg5lUpR6z7TI5L31uUlkKr%2FScAC%2B6VbOTGEwhJwZvSNnYACIbcAu9TlyaPHr8uLLgMpmpMw4%2FP6gt68eaynLtJC%2Bn3Ml%2FYxCjbWxiylu4kv1yqQvECV6S6Xtt7o%2Fn0c7S6Sj2W40Wl3Yjlu18s6Wq7bq1vLkS%2FQ2MmkRgnC34%3D%7Ctkp%3ABk9SR7KblaehYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/HBI4yz' ),
    listing_name   ( 'High Voltage Discharge Digital Sparkpen Discharger Capacitor Discharge Pen F8O9' ),
    item_price    ( 'AU$21.27' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/256253752559?hash=item3ba9e9f4ef%3Ag%3AVv8AAOSw9cNlJ-1u&amdata=enc%3AAQAIAAAA0D2q7E8bMHUzjvVjLJnY9MaN%2BdTXikyyjqakXYDnMJqC0d46N4cKayAD235BRnNxjNBLWLYUZ4Gr4DlR2rkQnevaDk43FrkymCKAHDOG1etPG%2Ft9INFstYY0iRnSe06ilLKKQU5G5hVtIi%2BEjxqYnxxgzL9V%2FLNhgEOct7PYGBUFj3VFzh%2FHUh6B6dnefMekbuSQszA5ph57WjRuG%2FHb2KrAxQKfMqbTh35ue0yKwF2ShiFtfa0XBq5negbyvTcx8RO1aaug66yyhkFSbwv1UNg%3D%7Ctkp%3ABk9SR7KblaehYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/Q4j2QS' ),
    listing_name   ( 'Capacitor Discharge Pen High Voltage Discharge Digital Sparkpen Discharger W7N6' ),
    item_price    ( 'AU$21.40' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Capactior-Discharge-Pen.html?spm=a2g0o.productlist.search.0' ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B0CFLRMSCL/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-8969281-2372641' ),
    order_id        ( '249-8969281-2372641' ),
    order_date      ( '8 September 2023' ),
    order_item_name ( '1000V Portable Capacitor Discharge Pen High Voltage Quick Discharging Tool Constant Discharge Pen Electronic Repairs Discharge Pen ALKOY' ),
    order_price     ( 'AU$23.02' ),
    order_quantity  ( 1 ),
    order_gst_paid  ( 'AU$2.09' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B0CFLRMSCL/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-5159027-6427803' ),
    order_id        ( '249-5159027-6427803' ),
    order_date      ( '28 October 2023' ),
    order_item_name ( '1000V Portable Capacitor Discharge Pen High Voltage Quick Discharging Tool Constant Discharge Pen Electronic Repairs Discharge Pen ALKOY' ),
    order_price     ( 'AU$23.02' ),
    order_quantity  ( 1 ),
    order_gst_paid  ( 'AU$2.09' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71MUcZjyFoL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://fuumuuiart.com/collections/brush?currency=USD' ),
      link_text       ( 'Fuumuuiart brushes' ),
    ),
    manufacturer_name  ( 'Fuumuui' ),
    EquipmentFeature::PAINT_BRUSHES,
    EquipmentAttribute::HAND_TOOL,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Fuumuui' ),
    equipment_type     ( 'Paint Brushes' ),
    category          ( 'Paint Brush' ),
    category          ( 'Brush' ),
    category          ( 'Hand Tool' ),
    manufacturer_link (
      link_href       ( 'https://fuumuuiart.com/collections/brush?currency=USD' ),
      link_text       ( 'Fuumuuiart brushes' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Fuumuui_Paint_Brushes' ),
  search_url    ( 'https://www.amazon.com.au/s?k=Fuumuui+Paint+Brushes&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B074M44VZ6?&linkCode=sl1&tag=johnelliotv-22&linkId=e8ce7d07d86dd44c7b0b10125608babc&language=en_AU&ref_=as_li_ss_tl' ),
    affiliate_url ( 'https://amzn.to/422oI7I' ),
    listing_name   ( 'Artist Paint Brushes set-10 Pcs Best Professional Detail Paint Brush, Miniature Brushes Will Keep a Fine Point and Spring, for Watercolor, Oil, Acrylic, Nail Art & Models' ),
    item_price    ( 'AU$21.68 ' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B074M44VZ6/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-3011548-5313400' ),
    order_id        ( '249-3011548-5313400' ),
    order_date      ( '25 August 2023' ),
    order_item_name ( 'Artist Paint Brushes set-10 Pcs Best Professional Detail Paint Brush, Miniature Brushes Will Keep a Fine Point and Spring, for Watercolor, Oil, Acrylic, Nail Art & Models' ),
    order_price     ( 'AU$17.58' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Ha2fb32dfb66b4f299f2436e2c20b47a50/Digital-4-20mA-0-10V-Voltage-Signal-Generator-0-20mA-Current-Transmitter-Professional-Electronic-Measuring-Instruments.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'FNIRSI' ),
    model_name         ( 'SG-002' ),
    EquipmentFeature::SIGNAL_GENERATOR,
    EquipmentFeature::WAVEFORM_GENERATOR,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'FNIRSI' ),
    model_name         ( 'SG-002' ),
    equipment_type     ( 'Signal Generator' ),
    category          ( 'Signal Generator' ),
    category          ( 'Waveform Generator' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/FNIRSI_SG-002' ),
  search_url    ( 'https://www.amazon.com/s?k=FNIRSI+Signal+Generator&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=FNIRSI+Signal+Generator&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Abbraccia-Generator-Portable-Transmitter-Scientific/dp/B014VI6TMO/ref=sr_1_2?dib=eyJ2IjoiMSJ9.i6ggYQdqy9pIserU1fcLCv3J4ABQcA7FZyrxq_rMSz4Enp9tNRJWMCbZLU-3V1_sS9rkeWCCGhOSXzMixadTphPNH-6Fa8_GPE5ReM837eOADEHv7_ZAA63E0-A3N-xKyMX3lI_7dSBg26uiOjY6rg.MLvy4uDsvURLbBla5X-E5KY33ElmsMBtabz-nIL1Wlc&dib_tag=se&keywords=FNIRSI+Signal+Generator&qid=1705277780&sr=8-2' ),
    affiliate_url ( 'https://amzn.to/3HhsAYC' ),
    listing_name   ( 'Abbraccia Signal Generator Portable High Accuracy 0-10V 0-4-20mA Current Transmitter for Scientific Research - Built in Li Battery' ),
    item_price    ( 'AU$39.99' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=FNIRSI+Signal+Generator' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/195910318552?hash=item2d9d2a39d8%3Ag%3AOBIAAOSwpDBkxPus&amdata=enc%3AAQAIAAAA8PLEo8IDRGC%2Fj3%2FsyVcrNEjyQrOYpFl1arAEZvnlIxawXH67HsR9JepvpU9lyFDtupfoVR0gt0x7HNspWzwLGt7i1JEGu24qpSPdLbdT9daQV6DlaAxo1afufC7YtaHGSBXDg7EJUNYHt7WozCnbOz5jODtaL4vqv2iMgAJQIEtUTtDojA33vMWsKIGVBUPpUgBPWRIzlOD1xYukX5%2FS7KzmJI5lhyDnIZfe6QKtIk1y8aI3vsuuk44lX8KkdnhU0a7zEY1zm63Ikjl72d3XvvV8Oq%2BAv%2F%2BEuXle%2B04KBrhd11ypBfTbBkd5URXyoyhISA%3D%3D%7Ctkp%3ABk9SR_yk16ehYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/gCUisa' ),
    listing_name   ( 'FNIRSI Signal Generator Adjustable Current Voltage Source Simulator 0-12V 0-20mA' ),
    item_options  ( 'Types: No Battery' ),
    item_price    ( 'US$27.11' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=FNIRSI+Signal+Generator' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/155818532641?hash=item2447821f21%3Ag%3AoWAAAOSwWVplIqJ1&amdata=enc%3AAQAIAAAA8HuHTQZVxLlblfSb7OTQHExdIc5e1ja3Z%2BLPtnJwj9%2BYHEnX7dNVTzGyBAVJCnvgDDKXHSawNBtesyeqntHNJlvH%2BL3MUZRid15LZH%2BmOX2y6E63suH%2BMi9Sc4mLGa30qyf4TwZe%2Fb0TfUJnvCM4Ml33J7wXIK7PLGWzL7r1GuPkF2bL26psX4fXtwWLqCceFzkzTgJ7YR6Ejx2DGf30xGOLG2tohyYDp%2B0uGlTTeZOxXMJUT5349QtuCGfRovG1LKzIZj3AzKhmM4lLfKwEIA63fhPxyHVeluNdI3yRS1xeI2ZFCfAA5je1trsErE707g%3D%3D%7Ctkp%3ABk9SR-7b4KehYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/EtfvpU' ),
    listing_name   ( 'FNIRSI Digital Signal Generator Handheld Voltage Current Simulator Signal Source' ),
    item_options  ( 'Types: Without Battery' ),
    item_price    ( 'AU$30.83' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/195910318552?hash=item2d9d2a39d8%3Ag%3AOBIAAOSwpDBkxPus&amdata=enc%3AAQAIAAAA0FP0JWhOCN0gkJHqR%2Fn4ssK6t0XA0bowOnqfxYp9xKyfPnoLzJS4nBMTOwbC16DtAbUtHN1P7CY1KmzGQuQSGZLoIrrc7rDLi2pabxFp8c6Z%2Fgr4EcoyrkwNfebzHBOUHX2et3lci7Ohjb8l84wJBfCpmv8EkcLtjLnhXaYEPpevuGQ0e%2F9eiN2ynnYAMkKuRKh9NwKzr%2FYuKrPs88VVAITA0YY3GGn6sL%2FAH%2Fa2bpUqDRnGSyJZl4xUWmLvXZiM5zYoU9s%2FJkXWA%2BnTnafM1hI%3D%7Ctkp%3ABk9SR-7b4KehYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/kfmtI4' ),
    listing_name   ( 'FNIRSI Signal Generator Adjustable Current Voltage Source Simulator 0-12V 0-20mA' ),
    item_options  ( 'Types: No Battery' ),
    item_price    ( 'AU$40.47' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-FNIRSI-Signal-Generator.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004690285230.html?spm=a2g0o.productlist.main.27.74932ac51S90qw&algo_pvid=8f307275-645f-43ac-ba1d-370e71b37ead&algo_exp_id=8f307275-645f-43ac-ba1d-370e71b37ead-13&pdp_npi=4%40dis%21AUD%2141.92%2123.06%21%21%2127.72%2115.25%21%402103247417052780420122878eaad3%2112000030113128402%21sea%21AU%214385823938%21&curPageLogUid=ugkiFmFyETxP&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dk2GFEv' ),
    listing_name   ( 'FNIRSI SG-002 4-20mA 0-10V Digital Analog Voltage Signal Generator 0-20mA Current Transmitter Debug Source Calibrator' ),
    item_options  ( 'Color: Without Battery' ),
    item_price    ( 'AU$23.06' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006436849998.html?spm=a2g0o.productlist.main.31.74932ac51S90qw&algo_pvid=8f307275-645f-43ac-ba1d-370e71b37ead&algo_exp_id=8f307275-645f-43ac-ba1d-370e71b37ead-15&pdp_npi=4%40dis%21AUD%2151.48%2125.74%21%21%21244.00%21122.00%21%402103247417052780420122878eaad3%2112000037162231401%21sea%21AU%214385823938%21&curPageLogUid=RfRxN7Sha9Ig&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dd6LjAt' ),
    listing_name   ( 'FNIRSI SG-002 Digital 4-20mA 0-10V Voltage Signal Generator Current Transmitter Professional Electronic Measuring Instruments' ),
    item_options  ( 'Color: SG-002' ),
    item_price    ( 'AU$25.74' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006334987178.html?spm=a2g0o.productlist.main.39.74932ac51S90qw&algo_pvid=8f307275-645f-43ac-ba1d-370e71b37ead&aem_p4p_detail=202401141620422512214495701400013360291&algo_exp_id=8f307275-645f-43ac-ba1d-370e71b37ead-19&pdp_npi=4%40dis%21AUD%2137.98%2136.46%21%21%21180.00%21172.80%21%402103247417052780420122878eaad3%2112000036799263741%21sea%21AU%214385823938%21&curPageLogUid=i3h9YNaucRo1&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=202401141620422512214495701400013360291_12' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DCYnJtR' ),
    listing_name   ( 'High-precision handheld 0-10V/0-4-20mA analog voltage and current signal generator debugging source calibrator' ),
    item_options  ( 'Color: Without battery' ),
    item_price    ( 'AU$36.46' ),
    item_shipping ( 'AU$8.85' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/HTB1tkP_X42rK1RkSnhJq6ykdpXa8/24Pieces-12-Pairs-Work-Gloves-For-PU-Palm-Coating-Safety-Protective-Glove-Nitrile-Professional-Safety-Suppliers.jpg_640x640.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'nmsafety' ),
    EquipmentFeature::NITRILE_GLOVES,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'nmsafety' ),
    equipment_type     ( 'Gloves' ),
    category          ( 'Gloves' ),
    category          ( 'Safety Equipment' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Nitrile_Gloves' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-nmsafety-Gloves.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/379833197.html?aff_fcid=dc6e463efe924ea397bf548c3fc5eebc-1705278297739-04804-_Dm8vw5v&tt=CPS_NORMAL&aff_fsk=_Dm8vw5v&aff_platform=shareComponent-detail&sk=_Dm8vw5v&aff_trace_key=dc6e463efe924ea397bf548c3fc5eebc-1705278297739-04804-_Dm8vw5v&terminal_id=f020c219a3b44a7b92d636c6cc46e9db&afSmartRedirect=y' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DmefgBr' ),
    listing_name   ( '24Pieces/12 Pairs Work Gloves For PU Palm Coating Safety Protective Glove Nitrile Professional Safety Suppliers' ),
    item_options  ( 'Color: PU1350NV -DMF; Size: S' ),
    item_price    ( 'AU$19.66' ),
    item_shipping ( 'AU$1.27' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/379833197.html?spm=a2g0o.order_detail.order_detail_item.3.9aaff19c4AwnFO' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.249.764218021V85h7&orderId=8164396471003938' ),
    order_id        ( '8164396471003938' ),
    order_date      ( 'Mar 10, 2023' ),
    order_item_name ( '24Pieces/12 Pairs Work Gloves For PU Palm Coating Safety Protective Glove Nitrile Professional Safety Suppliers' ),
    order_options   ( 'Color: PU1350NV -DMF; Size: S' ),
    order_price     ( 'AU$18.79' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$1.29' ),
    order_gst       ( 'AU$2.00' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/H1a4a2dade6f64256bb016af27fe77432N/B-R-Quickly-Dot-Repairing-Soldering-Lug-Fly-Free-to-Jump-Wire-Spot-Fixing-Soldering-Lug.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Wozniak' ),
    EquipmentFeature::SOLDER_LUGS,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Wozniak' ),
    equipment_type     ( 'Solder Lugs' ),
    category          ( 'Solder Lugs' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Wozniak_Dot' ),
  search_url    ( 'https://www.amazon.com/s?k=Wozniak+Solder+Lugs&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=Wozniak+Solder+Lugs&s=price-asc-rank' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Wozniak+Solder+Lugs' ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Wozniak+Solder+Lugs' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Wozniak-Solder-Lugs.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005002610778441.html' ),
    listing_name   ( 'B＆R Quickly Dot-Repairing Soldering Lug Fly-Free to Jump Wire Spot Fixing Soldering Lug For Phone Welding Plates Repair' ),
    item_options  ( 'Number of Pieces: 1Pcs' ),
    item_price    ( 'AU$2.54' ),
    item_shipping ( 'AU$1.84' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005002610778441.html?spm=a2g0o.order_detail.order_detail_item.3.1a78f19cm3OUE9' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.300.764218021V85h7&orderId=8174104336103938' ),
    order_id        ( '8174104336103938' ),
    order_date      ( 'Aug 29, 2023' ),
    order_item_name ( 'B＆R Quickly Dot-Repairing Soldering Lug Fly-Free to Jump Wire Spot Fixing Soldering Lug For Phone Welding Plates Repair' ),
    order_options   ( 'Number of Pieces: 5Pcs' ),
    order_price     ( 'AU$11.92' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$4.56' ),
    order_gst       ( 'AU$1.66' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61-cGonrNRL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name  ( 'Kaqiwze' ),
    model_name         ( 'KLD-988C' ),
    EquipmentFeature::BLOW_TORCH,
    EquipmentAttribute::HAND_TOOL,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Kaqiwze' ),
    equipment_type     ( 'Blow Torch' ),
    category          ( 'Blow Torch' ),
    category          ( 'Hand Tool' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Kaqiwze_KLD-988C' ),
  search_url    ( 'https://www.amazon.com/s?k=Kaqiwze+Blow+Torch&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=Kaqiwze+Blow+Torch&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Adjustable-Omni-directional-Charcoal-Roasting-Included/dp/B0BG5KQDX1/ref=sr_1_3?dib=eyJ2IjoiMSJ9.8OVCMJ1hjHFgDXvwXvPmA5whipMXKc8jZ1OFiRHG_j4uo_NXT6NVBOcst5dT7mxaYSfOCbV1a-_jVtZRQs6cdlQ7p5ytr9eIPtDPT5ME0lfTSedcPT34jIoBfMCSb4z1gi_035F_jWsbmqtUGOFp_g.v9uSzd2NJYGmf17y4HF2bWqG-sLhKZWGmS36H5Exqs4&dib_tag=se&keywords=Kaqiwze+Blow+Torch&qid=1705278706&sr=8-3' ),
    affiliate_url ( 'https://amzn.to/48NCeyF' ),
    listing_name   ( 'Gas Burner, 900°C To 1300°C, Flame Adjustable Butane Blow Torch, 360° Omni-directional Use for Cooking, BBQs, Camping, Sweets Making, Charcoal Fire, Roasting, Welding, Etc. (Butane Gas Not Included)' ),
    item_price    ( 'AU$13.59' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Kaqiwze+Blow+Torch' ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Kaqiwze+Blow+Torch' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Kaqiwze-Blow-Torch.html' ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B0BG5KQDX1/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-0764369-0442231' ),
    order_id        ( '249-0764369-0442231' ),
    order_date      ( '1 September 2023' ),
    order_item_name ( 'Gas Burner, 900°C To 1300°C, Flame Adjustable Butane Blow Torch, 360° Omni-directional Use for Cooking, BBQs, Camping, Sweets Making, Charcoal Fire, Roasting, Welding, Etc. (Butane Gas Not Included)' ),
    order_price     ( 'AU$14.39' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://d297fd4gt7t5lv.cloudfront.net/file/2023-11-03-174207/s-l1600.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.gasmate.com.au/accessories/cylinders/butane-range-fuel' ),
      link_text       ( 'Gasmate Butane Fuel Range' ),
    ),
    manufacturer_name  ( 'Gasmate' ),
    EquipmentFeature::BUTANE,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Gasmate' ),
    equipment_type     ( 'Butane' ),
    category          ( 'Gas' ),
    manufacturer_link (
      link_href       ( 'https://www.gasmate.com.au/accessories/cylinders/butane-range-fuel' ),
      link_text       ( 'Gasmate Butane Fuel Range' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Kaqiwze_KLD-988C' ),
  search_url    ( 'https://www.amazon.com/s?k=Gasmate+Butane&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=Gasmate+Butane&s=price-asc-rank' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Gasmate+Butane' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/225651472433?epid=10025396098&hash=item3489e03831%3Ag%3A9NEAAOSwfa5korqN&amdata=enc%3AAQAIAAAAwD%2BCuirBt5hSdpHhANG3XWpHqSyIBaZ2ltKit5Sk1Ia5BNvPCTSQ62RUo9zWgrHz%2FR%2F65pX%2FPJJ5QRyDhUzQL6447BGC%2B%2F5Wkq%2BH5BXQx%2BET%2BKhLaGL5Gx9wwzST3EWIH3ZnMtMRqEF8FuOQu46gotMIi5qt3L26b3%2Fx94xZOf5CmhQb69JcYuAAjc3APc14hS7G5FcAPqe8Js3LpLtJrRkZQqLmUC3Pu43SJiPn2yrw0yurIjO4motExdSomRgwfA%3D%3D%7Ctkp%3ABk9SR-q11qihYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/3Ehf8a' ),
    listing_name   ( 'Gasmate 220g Rim Vent Safety Butane Gas Cartridge - 4 Pack' ),
    item_price    ( 'US$12.06' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Gasmate+Butane' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/355249047485?hash=item52b67e47bd%3Ag%3AuP8AAOSw86RlaYfx&amdata=enc%3AAQAIAAAAwMWah8VSaMSqJvBKehA%2FUAsy%2FoNc%2FE8qxmNv%2BuJq1V%2B1BbpzqTUGTSEIwu55VIeV1QEGQ6V03YWKBSokOE7DV0urdJwz1%2F42Oi%2FkoVYZoMu48Dwn9XfTGyXOuRowojS7AC6f8f%2BNgvbUNxmXEEHyGhXFxqenp%2FI0vfxzx%2FTiv7ov3gdpa0x9o3bd5Tv4hJ8yuR1QiEOM9Osu%2B9CWnKUe6%2BirXGbYEWxeOeQiwluT2cFm%2BUCEKA0CW%2FN3H50iD1C8dw%3D%3D%7Ctkp%3ABk9SR-zR3aihYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/9MWHuA' ),
    listing_name   ( 'Gasmate 220g Rim Vent Safety Butane Gas Cartridge - 4 Per Pack' ),
    item_price    ( 'AU$17.95' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/324506224215?hash=item4b8e140657%3Ag%3ASQ8AAOSw55NgQIDr&amdata=enc%3AAQAIAAAAwFWxl%2FfK%2BqAiZxLlaS56G%2FMiFR%2F0bhWAuZh3QxoK6%2BWjS1Av8puz%2F6Atxke5HAo%2BbGSN%2BgV8%2FR8hNPT80%2BfnvEV6pvINia3UGknXv16VXSzWUCrG3fGbncsBf3DsGt%2FxM1RZHXwxb9STvi0WRvnxWG3nUthZTQs%2B2u1rQ%2Bf1%2ByaKaQYF0lB%2BfkzB8Y93bLK8n4g70a5sL9l1HwUg0GuIQ7mhCN1m6VL7%2Fg2xWYb07kaZwhSvEPxOoE0r1AuTBmJdQw%3D%3D%7Ctkp%3ABk9SR-zR3aihYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/BBUf3M' ),
    listing_name   ( 'Gasmate 220g Rim Vent Safety Butane Gas Cartridge - 4 Per Pack' ),
    item_price    ( 'AU$17.97' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/143802129356?epid=10025396098&hash=item217b465bcc%3Ag%3AzJcAAOSw0Z1fkqZ1&amdata=enc%3AAQAIAAAA4MtYQujHcnWiAPFN1yBejflQTuaVyg5NSO0%2B9HX5jbnFOnqu5x%2Boh8QFA52Sdxjm0H4AccB4vNJtyG9ACnWnRQaPoSTiGmvcHx8uJpUhfDJSmIASx4xVhRyUJ6zv1PHUxguKqyWtBbga1lf1YY9JmUhArcyxTaH51o%2B98hWMzoVVq2S0er7IgR9Bwa%2BeHvy%2F%2Fo5oTsuQ8bL9ovqKAVHiZdtwvfw18%2BEd3WxxYReSm9iqCT58dEuPRhEBx9wyNsF6vmjb5yP%2BexmFZ2tHvCIPIzaqESfwkN13lVimamYE6q52%7Ctkp%3ABk9SR-zR3aihYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/WlNVNk' ),
    listing_name   ( 'BULK DISCOUNT Gasmate 220g Rim Vent Safety RVR Butane Gas Cartridge - 4 Pack' ),
    item_price    ( 'AU$19.99' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Gasmate-Butane.html' ),
  purchase(
    equipment_url   ( 'https://www.ebay.com/itm/324506224215' ),
    order_url       ( 'https://order.ebay.com/ord/show?orderId=27-10476-46856#/' ),
    order_id        ( '27-10476-46856' ),
    order_date      ( 'Sep 1, 2023' ),
    order_item_name ( 'Gasmate 220g Rim Vent Safety Butane Gas Cartridge - 4 Per Pack' ),
    order_price     ( 'AU$35.94' ),
    order_quantity  ( 1 ),
    order_discount  ( 'AU$3.60' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://d297fd4gt7t5lv.cloudfront.net/file/2023-11-03-174240/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( '395nm' ),
    EquipmentFeature::UV_LAMP,
  ),
  /*
  equipment_info(
    model_name         ( '395nm' ),
    equipment_type     ( 'UV Lamp' ),
    category          ( 'UV Light' ),
    category          ( 'Torch/Light' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/UV_Lamp_395nm' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=UV+Lamp+395nm' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/144334619731?amdata=enc%3AAQAIAAAAkA2M%2Bd%2F9XvLBGnXOuvLom3wc4Mv6rUuIwcrU4w8cHZFNHQ0vFgPAJp1%2B1OnLQYwmgg9FcmA%2Bmkq2yHjZpQCJC45rK5M2otkmKNVWIgjao8ukFlI6u9ga9Cjy9dTsU6syFFG73B3DLwoRPkyok1t3pttBUZdBi6O%2FsvVoSlCD1x9WD5xVJSOwiZs2Y2wlscUtNw%3D%3D&mkcid=1&mkrid=711-53200-19255-0&siteid=0&campid=5339019639&customid=&toolid=20012&mkevt=1' ),
    affiliate_url ( 'https://ebay.us/SvcurN' ),
    listing_name   ( ' 100 LED 395 nM UV Ultra Violet Flashlight Blacklight Torch Light Lamp Aluminum' ),
    item_price    ( 'US$11.29' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=UV+Lamp+395nm' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/144334619731?amdata=enc%3AAQAIAAAAkA2M%2Bd%2F9XvLBGnXOuvLom3wc4Mv6rUuIwcrU4w8cHZFNHQ0vFgPAJp1%2B1OnLQYwmgg9FcmA%2Bmkq2yHjZpQCJC45rK5M2otkmKNVWIgjao8ukFlI6u9ga9Cjy9dTsU6syFFG73B3DLwoRPkyok1t3pttBUZdBi6O%2FsvVoSlCD1x9WD5xVJSOwiZs2Y2wlscUtNw%3D%3D&mkcid=1&mkrid=711-53200-19255-0&siteid=0&campid=5339019639&customid=&toolid=20012&mkevt=1' ),
    affiliate_url ( 'https://ebay.us/uXwIjh' ),
    listing_name   ( '100 LED 395 nM UV Ultra Violet Flashlight Blacklight Torch Light Lamp Aluminum' ),
    item_price    ( 'AU$16.85' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com/itm/144334619731' ),
    order_url       ( 'https://order.ebay.com/ord/show?orderId=23-10432-79579#/' ),
    order_id        ( '23-10432-79579' ),
    order_date      ( 'Aug 21, 2023' ),
    order_item_name ( '100 LED 395 nM UV Ultra Violet Flashlight Blacklight Torch Light Lamp Aluminum' ),
    order_price     ( 'AU$16.95' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://d297fd4gt7t5lv.cloudfront.net/file/2023-11-03-174310/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( '365nm' ),
    EquipmentFeature::UV_LAMP,
  ),
  /*
  equipment_info(
    model_name         ( '365nm' ),
    equipment_type     ( 'UV Lamp' ),
    category          ( 'UV Light' ),
    category          ( 'Torch/Light' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/UV_Lamp_365nm' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=365nm+UV+Lamp' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/334135210656?amdata=enc%3AAQAIAAAAkMjG6oRRob326FKgCL3%2FfXqjoYwdn2W4KacYEAp8jy7UdgrBv0sRJT1o6OEBbSV1PNyjL%2Bdv09OdrAeZO%2FyuMAk9S17YNAeVKYd6lsUBpy3yibeJ4FKoegn0JxwkGA%2FhwXT5GqCwhHR2J46BjHIaX%2F1U4M52Zq%2BZyiOVJRB3bhSMIF5NaFtuZ1L5okNfhzqrdA%3D%3D&mkcid=1&mkrid=711-53200-19255-0&siteid=0&campid=5339019639&customid=&toolid=20012&mkevt=1' ),
    affiliate_url ( 'https://ebay.us/fQ92kQ' ),
    listing_name   ( 'UV Ultra Violet Led Flashlight/Blacklight Light 365 nm Inspection Lamp Torch TM' ),
    item_price    ( 'US$6.89' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=365nm+UV+Lamp' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/334135210656?amdata=enc%3AAQAIAAAAkMjG6oRRob326FKgCL3%2FfXqjoYwdn2W4KacYEAp8jy7UdgrBv0sRJT1o6OEBbSV1PNyjL%2Bdv09OdrAeZO%2FyuMAk9S17YNAeVKYd6lsUBpy3yibeJ4FKoegn0JxwkGA%2FhwXT5GqCwhHR2J46BjHIaX%2F1U4M52Zq%2BZyiOVJRB3bhSMIF5NaFtuZ1L5okNfhzqrdA%3D%3D&mkcid=1&mkrid=711-53200-19255-0&siteid=0&campid=5339019639&customid=&toolid=20012&mkevt=1' ),
    affiliate_url ( 'https://ebay.us/K3uQgt' ),
    listing_name   ( 'UV Ultra Violet Led Flashlight/Blacklight Light 365 nm Inspection Lamp Torch TM' ),
    item_price    ( 'AU$10.29' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com/itm/334135210656' ),
    order_url       ( 'https://order.ebay.com/ord/show?orderId=23-10432-79580#/' ),
    order_id        ( '23-10432-79580' ),
    order_date      ( 'Aug 21, 2023' ),
    order_item_name ( 'UV Ultra Violet Led Flashlight/Blacklight Light 365 nm Inspection Lamp Torch TM' ),
    order_price     ( 'AU$9.90' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://d297fd4gt7t5lv.cloudfront.net/file/2023-11-03-174501/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( 'Comidox' ),
    EquipmentFeature::ATX_POWER_SUPPLY_TESTER,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Comidox' ),
    equipment_type     ( 'ATX Power Supply Tester' ),
    category          ( 'Power Supply Tester' ),
    category          ( 'Test Equipment' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/ATX_Power_Supply_Tester' ),
  search_url    ( 'https://www.amazon.com/s?k=ATX+Power+Supply+Tester&s=price-asc-rank&page=2&qid=1705279904&ref=sr_pg_1' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Comidox-Computer-Supply-Tester-Automatic/dp/B07J9LRC6T/ref=sr_1_18?dib=eyJ2IjoiMSJ9.pkPL59-Jn_tWFS9kVr3G1k40-jeX4hrbGkPgwG1yoIski0AlmfDCVUIfXCKuyUSiivZ5An6I_ryZ4POTySW9KmAFSiPmS1-U7m9jq9Umyn52rABGB9G9KhS9zsxrpWDou-aAVw9Vr1OS_oJHH7SNgQ.i77722MYzqdK3n5wMFqpvFWL2DuSYNgrHFqzaEWj_I8&dib_tag=se&keywords=ATX+Power+Supply+Tester&qid=1705279932&sr=8-18' ),
    affiliate_url ( 'https://amzn.to/47BPBAg' ),
    listing_name   ( 'Comidox 1Pcs 20/24 Pin LCD Computer PC Power Supply Tester for ATX BTX ITX TFX SATA with Buzzer Automatic Alarm' ),
    item_price    ( 'US$10.99' ),
    item_shipping ( 'US$17.76' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=ATX+Power+Supply+Tester&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Computer-Display-Digital-Support-Interface/dp/B09MP8X9LZ/ref=sr_1_12?dib=eyJ2IjoiMSJ9.FUL3ag3o1H6bRfdmE7Gzi2SAg0Y8im4oTRJWMZQ5fFWVWaNLcVrYNQyqxT0h3Ne-f7SDWatMUsTBT202N8B-MYvNUZOFS1ZUaFQvR-nzi2a7xqqEUkt3cg6m4G0nm7GhRpWBiamc-K07XQ4PSojhrA.6vYgVyD6AUVjJmGjYuEnEUJADNPm56KM_pofI3Jnnjo&dib_tag=se&keywords=ATX+Power+Supply+Tester&qid=1705280033&sr=8-12' ),
    affiliate_url ( 'https://amzn.to/3vB8bLF' ),
    listing_name   ( 'Computer Power Tester, LCD Display Power Supply Tester Digital Support with Manual for ATE Hard Disk Interface' ),
    item_price    ( 'AU$11.60' ),
    item_shipping ( 'AU$7.99' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=ATX+Power+Supply+Tester' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/374700557166' ),
    affiliate_url ( 'https://ebay.us/TG0Uc4' ),
    listing_name   ( 'Plastic Digital LCD Display Power Supply Tester For 20/24 pin ATX SATA PCIE 6pin' ),
    item_price    ( 'AU$15.85' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=ATX+Power+Supply+Tester' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/374700557166' ),
    affiliate_url ( 'https://ebay.us/r6urLL' ),
    listing_name   ( 'Plastic Digital LCD Display Power Supply Tester For 20/24 pin ATX SATA PCIE 6pin' ),
    item_price    ( 'AU$15.85' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-ATX-Power-Supply-Tester.html' ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/374700557166' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=13-10667-93671#/' ),
    order_id        ( '13-10667-93671' ),
    order_date      ( '17 Oct 2023' ),
    order_item_name ( 'Plastic Digital LCD Display Power Supply Tester For 20/24 pin ATX SATA PCIE 6pin' ),
    order_price     ( 'AU$13.47' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/619wsd01FbL._SL1500_.jpg' ),
  equipment_item(
    manufacturer_name  ( 'HiLetGo' ),
    EquipmentFeature::USB_LOGIC_ANALYZER,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'HiLetGo' ),
    equipment_type     ( 'USB Logic Analyzer' ),
    category          ( 'Logic Analyzer' ),
    category          ( 'USB' ),
    category          ( 'Test Equipment' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/HiLetGo_Logic_Analyzer' ),
  search_url    ( 'https://www.amazon.com/s?k=HiLetGo+USB+Logic+Analyzer&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/HiLetgo-Analyzer-Ferrite-Channel-Arduino/dp/B077LSG5P2/ref=sr_1_1?dib=eyJ2IjoiMSJ9.Zyci1U9gdZy-cXA-LZ4YSw.eug0jCJR7umLuLPMEcPHR5e3pYRIqs1xZT-c3UYhPic&dib_tag=se&keywords=HiLetGo+USB+Logic+Analyzer&qid=1705280287&sr=8-1' ),
    affiliate_url ( 'https://amzn.to/47ITKmk' ),
    listing_name   ( 'HiLetgo USB Logic Analyzer Device With EMI Ferrite Ring USB Cable 24MHz 8CH 24MHz 8 Channel UART IIC SPI Debug' ),
    item_price    ( 'US$12.69' ),
    item_shipping ( 'US$17.52' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=HiLetGo+USB+Logic+Analyzer&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Portable-Analyzer-Professional-Computer-Communication/dp/B08JX42C8D/ref=sr_1_2?dib=eyJ2IjoiMSJ9.VGkhds-LOS656mnCGHkQ58MC2T1BJ0ZLAGdiLIe_M0yqSFjqMrV1j-iRlZTruc03HbHJQA3jnhRiH_lpf-LKyLNFAeCEXqValiTDmS92UgYPiCFTHmKHXALFyYkY1IO_ou-uwqI5ciI7ehYv4iGIcg.qwBCHhO9WHKqwjoew3Dq6k5cm-hxXCYTDrB1WT-6J_E&dib_tag=se&keywords=HiLetGo+USB+Logic+Analyzer&qid=1705280421&sr=8-2' ),
    affiliate_url ( 'https://amzn.to/4aXoBOD' ),
    listing_name   ( 'Portable Logic Analyzer, Logic Analyzer with Cable Jumper Wire Device Set Professional USB Logic Analyzer, 5MHz 24M 8 Channel Computer Communication' ),
    item_price    ( 'AU$8.34' ),
    item_shipping ( 'AU$7.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Logic-Analyzer-Jumper-Communications-Power/dp/B09NV43H5R/ref=sr_1_3?dib=eyJ2IjoiMSJ9.VGkhds-LOS656mnCGHkQ58MC2T1BJ0ZLAGdiLIe_M0yqSFjqMrV1j-iRlZTruc03HbHJQA3jnhRiH_lpf-LKyLNFAeCEXqValiTDmS92UgYPiCFTHmKHXALFyYkY1IO_ou-uwqI5ciI7ehYv4iGIcg.qwBCHhO9WHKqwjoew3Dq6k5cm-hxXCYTDrB1WT-6J_E&dib_tag=se&keywords=HiLetGo+USB+Logic+Analyzer&qid=1705280421&sr=8-3' ),
    affiliate_url ( 'https://amzn.to/3vCTQ1p' ),
    listing_name   ( 'USB Logic Analyzer, Logic Analyzer, with Jumper Wire Communications for Power' ),
    item_price    ( 'AU$8.73' ),
    item_shipping ( 'AU$7.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Service-Dslogic-Performance-Multifunction-Analyzer/dp/B08J87B6PR/ref=sr_1_5?dib=eyJ2IjoiMSJ9.VGkhds-LOS656mnCGHkQ58MC2T1BJ0ZLAGdiLIe_M0yqSFjqMrV1j-iRlZTruc03HbHJQA3jnhRiH_lpf-LKyLNFAeCEXqValiTDmS92UgYPiCFTHmKHXALFyYkY1IO_ou-uwqI5ciI7ehYv4iGIcg.qwBCHhO9WHKqwjoew3Dq6k5cm-hxXCYTDrB1WT-6J_E&dib_tag=se&keywords=HiLetGo+USB+Logic+Analyzer&qid=1705280421&sr=8-5' ),
    affiliate_url ( 'https://amzn.to/4aZ9HHy' ),
    listing_name   ( 'Long Service Life Dslogic Plus, Good Performance Multifunction USB Logic Analyzer, for Rising Edge Low Level Trigger Falling Edge High Level Trigger' ),
    item_price    ( 'AU$14.58' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=HiLetGo+USB+Logic+Analyzer' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/166526546034?hash=item26c5c17072%3Ag%3AD9cAAOSwb39lj637&amdata=enc%3AAQAIAAAA8EAKfbL9GWTz27JXpd0bN5W9qW7MlQQnGHoD8F6sqKt%2FoVIMNbaZUzNarFqKtQr05tqooHw5evDnAMq3odlX6hLGDAGwQz9XkywfNR9EzdQOWp8Mux69QtYTezq5Q6PqNElTtvhWAw%2F%2F5QQ0EJgBwDdat%2FpiXMRAuxWKZDx8uDpAz6lnKEy7AW4aqpj37zVZ19QRC5MhuX5KiXSuw%2F60UhUz5MJhzdlRIZPTQXwamDl7O7EEeuDJ51Xq20KHUwK2vRe3hi9EEIuoudaz29t3VHT8CwRyhOt%2BJkF%2F1KAB5cKYSOJcZWBVl6G%2BGpOQKTY5OQ%3D%3D%7Ctkp%3ABk9SR5aOrKqhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/PEmCNh' ),
    listing_name   ( 'Pocket-Sized USB Logic Analyzer 8CH 24MHz | High Digital Device Set' ),
    item_price    ( 'US$10.41' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/295518780861?hash=item44ce4abdbd%3Ag%3AjfEAAOSw9v9j5FUM&amdata=enc%3AAQAIAAAA8F09NvUWZotkr2qSEdRscgThUu%2Bg8E9cNLjaEj36rh4zpcYJ9Ft4zT1E2ERyKocYBE%2Bc8O7GUbkYN9ByvrZyRdFmDrAE74a%2BtljmHMFtDnHEYHRfPibi1zBHg77nx3vfQ9yNuEUxEwiofxN2iEt%2BfFKHDC%2Bic%2BBUR2pSfg4yS8YNpC8PbxIrO1MZjYwdMuo7glpbfRBWuydmR%2B6P7YbWf7hJSMvmJjCTi1ESFfNDsO1GKozo1gtPBJLYyTCGpWfCmHZtZ1bxpqy0fH33jX7Kd4o7PSrJ1uSuv8s%2F8ViThSthdXZcracb%2FmBIp53fYkF8gw%3D%3D%7Ctkp%3ABk9SR5iOrKqhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/ZwSSZu' ),
    listing_name   ( 'USB Logic Analyzer Device Set Digital Pocket Size 8 Channel Input Memory 24MHz' ),
    item_price    ( 'US$10.53' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/315062379631?hash=item495b2e646f%3Ag%3AGDgAAOSwrWZlj3cM&amdata=enc%3AAQAIAAAA8AsWo4lvrXrABRTQ0YZOmL7NXGkgu7wuBb%2FKhgaqOBJzJnetGVf43uJ6W1%2Fu6q6gV7v2C3tz9fFE5Uj3kxIvFK3OU%2Bp3IvLxS%2BRD4pHwQG7wLaXd9a8H04LBt%2Fn%2BeviBSg9po5iKxHhVILHLvFdXDbBYIu3DHwixGbkTNkisRy1OE5h0lBfeuMuPF9OFQVTnQqn9h5xa4rt6OUvk4lhUkGYt3Lpqsl3o8bgJGQig%2FPATRTbNe9js405plBxg3JTXcxwW%2Bpz8p%2Fkf5adMv97ofLTCjCVfP4kjp2r4udWvz8mrtbsWjla9kptthIVV%2BaJfEw%3D%3D%7Ctkp%3ABk9SR5iOrKqhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/8fDnyg' ),
    listing_name   ( 'Portable 8-Ch USB Logic Analyzer - 24MHz Memory Fast Data Capture' ),
    item_price    ( 'US$10.35' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=HiLetGo+USB+Logic+Analyzer' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/355319784864?hash=item52bab5a5a0%3Ag%3AheMAAOSwa1RlijPI&amdata=enc%3AAQAIAAAA8FCkJ0RCG4pwqXPNJTkHVwyJUMFur%2F6rXx42bD%2B8B%2B7bMFcpOaHFLLsZM6cT%2FT2MlEt2EUEDgUHX%2BQ7%2BnC5OJPd%2FPavTyeZjwUScc7uWsHs%2BXVth1Z%2Bck9BDRijWa8LNclcXoRZIz0ru2lKGh%2FS6Si5gz4N7fDe5slgH4AC1w1EFk0bf8WDuwfYtjG0%2FcgFD5QlNty8JPiw2Val2WNpv%2Be89SMxGMBSnMQ9LYl%2BhkpiPSqPEsAXiFCa60k8jgdBrjDJCTH5d9y089kEWxCcyba7PusFrT9NpcHRh5YDGX6PASg%2FXZo6jLj2NjB3UyPU6MA%3D%3D%7Ctkp%3ABk9SR8bIxaqhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/t897mg' ),
    listing_name   ( 'Logic Analyzer USB Portable Logic Analyzer Mini Logic Analyzer 5MHz 24M 8' ),
    item_price    ( 'AU$15.05' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/145434034460?hash=item21dc8b411c%3Ag%3AkOsAAOSwTJ9lUuBW&amdata=enc%3AAQAIAAAA8LL15Kbd2e6yl3bVSCVY3qvmXyVjjC8T8jMk6N8xUQtbsWsC%2F5NTEpLQC5LvBqveYhjHI4CRD6x1ptfYS9boG5LpobTVkLNpD7QTo5jQFl1RFf7rGyCNpyaUZP5YFlkeIX%2BYD%2FCAfx8dLhIV0SwEFOMqchw3pmo34dRQnfTK4IT%2BpkxsIzct25zMEYjel6bn9ZoY7AfF6eb9xuk7TACXcw8sR91X94z%2BVkL%2F2JLdwSOG8QjMU82kgRoYMkTuBrGaO3lLQ%2Bsl51PMqS5JF8kZ7Ef2bqnCX7Cfcj0tHJ0l8MvawGrPTfJjZ9lkw2NgItTxTA%3D%3D%7Ctkp%3ABk9SR8bIxaqhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/K94TW7' ),
    listing_name   ( 'USB Logic Analyzer Device 8 Channel Logic Analyzer With Buffering Support 24Mhz' ),
    item_price    ( 'AU$15.91' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/305270502899?hash=item47138a35f3%3Ag%3AJlgAAOSwVk5lVO%7E2&amdata=enc%3AAQAIAAAA8GTdk2vFmvJPe43t8GFmKZm5pmdhV4GyZ5r%2Fm%2FVRBIbqq5XGRllizifXsMhhb3vQlWsAfAA6QRnYrHRuC5Wk7ZyNvUkaeOzFqTfuKLxSCJhtP3Px1AOAowLlJNV9hgQUlxptehG8PoBSgp%2B2kmiJeHMaYXY3rn3dJw39Yjm7%2Fk9wnxDOjO8dS2amXWrZB6IDIMdtSzxT2w5suDBb%2FmW7WmHnVvW%2Bdpby6Ndh0NLsNUa36aMowBlsU188hlyI3j%2FmISzwoD28cNLX1tFph3cSKVHNBymzFb4bpN5EQGyXY6N74lZsGr3bx2FE%2FlH%2B6mhudQ%3D%3D%7Ctkp%3ABk9SR8jIxaqhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/3hHIHF' ),
    listing_name   ( '02 015 USB Logic Analyzer Logic Analyzer 8 Channel Mini For Automotive' ),
    item_price    ( 'AU$15.77' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-HiLetGo-USB-Logic-Analyzer.html' ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S5521e4cb81914d3796fd63211fda7942G/SUNSHINE-Double-Head-Anti-Static-ESD-Safe-Hard-Brush-For-Phone-Motherboard-Circuit-Board-Cleaner-for.jpg_640x640.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'SUNSHINE' ),
    EquipmentFeature::HARD_BRUSH_SET,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'SUNSHINE' ),
    equipment_type     ( 'Hard Brush Set' ),
    category          ( 'Brush' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Hard_Brush' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-SUNSHINE-Hard-Brush-Set.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/4000118872109.html?aff_fcid=c9141233e01e4c05949ce62f58a9dac9-1705281133586-03926-_DBitPJZ&tt=CPS_NORMAL&aff_fsk=_DBitPJZ&aff_platform=shareComponent-detail&sk=_DBitPJZ&aff_trace_key=c9141233e01e4c05949ce62f58a9dac9-1705281133586-03926-_DBitPJZ&terminal_id=f020c219a3b44a7b92d636c6cc46e9db&afSmartRedirect=y' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DFeZJ0N' ),
    listing_name   ( 'SUNSHINE Double Head Anti-Static ESD Safe Hard Brush For Phone Motherboard Circuit Board Cleaner for Computer Keyboard Cleaning' ),
    item_options  ( 'Color: Full Set' ),
    item_price    ( 'AU$6.56' ),
    item_shipping ( 'AU$2.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/4000118872109.html?spm=a2g0o.order_detail.order_detail_item.3.3c4ff19cIAZzhR' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.329.764218021V85h7&orderId=8174715338833938' ),
    order_id        ( '8174715338833938' ),
    order_date      ( 'Aug 29, 2023' ),
    order_item_name ( 'SUNSHINE Double Head Anti-Static ESD Safe Hard Brush For Phone Motherboard Circuit Board Cleaner for Computer Keyboard Cleaning' ),
    order_options   ( 'Color: Full Set' ),
    order_price     ( 'AU$4.70' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$2.49' ),
    order_gst       ( 'AU$0.73' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/H17c1c322c3e8497e8643ead0fbe4b134E/DC-9-12V-XR2206-Function-Signal-Generator-DIY-Kit-Sine-Triangle-Square-Output-1Hz-1MHz-Signal.png_.webp' ),
  equipment_item(
    manufacturer_name  ( 'EXAR' ),
    model_name         ( 'XR2206' ),
    EquipmentFeature::SIGNAL_GENERATOR,
    EquipmentFeature::WAVEFORM_GENERATOR,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'EXAR' ),
    equipment_type     ( 'Signal Generator' ),
    category          ( 'Signal Generator' ),
    category          ( 'Waveform Generator' ),
    category          ( 'Test Equipment' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/EXAR_XR2206' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-EXAR-Signal-Generator.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005001303560842.html?aff_fcid=18931e47c180475fb54fb5ee4568a657-1705281313680-03006-_DlV3kN1&tt=CPS_NORMAL&aff_fsk=_DlV3kN1&aff_platform=shareComponent-detail&sk=_DlV3kN1&aff_trace_key=18931e47c180475fb54fb5ee4568a657-1705281313680-03006-_DlV3kN1&terminal_id=f020c219a3b44a7b92d636c6cc46e9db&afSmartRedirect=y' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DEQUotT' ),
    listing_name   ( 'DC 9-12V XR2206 Function Signal Generator DIY Kit Sine/Triangle/Square Output 1Hz -1MHz Signal Generator Adjustable module' ),
    item_price    ( 'AU$3.18' ),
    item_shipping ( 'AU$2.92' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71xPUsEOFDL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name  ( 'Kaisi' ),
    model_name         ( 'S-160 45x30cm' ),
    EquipmentFeature::REPAIR_MAT,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Kaisi' ),
    model_name         ( '45x30cm' ),
    equipment_type     ( 'Repair Mat' ),
    category          ( 'Repair Mat' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Kaisi_S-160_Repair_Mat_45x30cm' ),
  search_url    ( 'https://www.amazon.com/s?k=Kaisi+45x30cm+Repair+Mat&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/gp/product/B07DGVRYL3?ie=UTF8&th=1&linkCode=sl1&tag=johnelliotv-20&linkId=2f3f57362c89643d27ec9e55c766a6da&language=en_US&ref_=as_li_ss_tl' ),
    affiliate_url ( 'https://amzn.to/47CoJ3p' ),
    listing_name   ( 'Kaisi Heat Insulation Silicone Repair Mat with Scale Ruler and Screw Position for Soldering Iron, Phone and Computer Repair Size:17.7 x 11.8 Inches' ),
    item_options  ( 'Model: ghm-232' ),
    item_price    ( 'US$16.99' ),
    item_shipping ( 'US$19.48' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Kaisi+45x30cm+Repair+Mat&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B07DGVRYL3/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&th=1' ),
    affiliate_url ( 'https://amzn.to/3vCgqXX' ),
    listing_name   ( 'Kaisi Heat Insulation Silicone Repair Mat with Scale Ruler and Screw Position for Soldering Iron, Phone and Computer Repair Size:17.7 x 11.8 Inches' ),
    item_price    ( 'AU$42.78' ),
    item_options  ( 'Size Name: S-160' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Heat-Resistant-Soldering-Electronic-Anti-Static-17-7%C3%9711-8inch/dp/B0CC5SDD5T/ref=sr_1_4?dib=eyJ2IjoiMSJ9.ZJWtev9ZCfEoUalVUIKK4PhCTV4Gx_I6IENckcBQNE6q9X3SBF4r2hHBIg6tQv5w3r9mQTgSV_nweHuru5UlnERPPgLeF1OSUv2UGrBeu_a9mE5pZCyESw-0VhE3a8vm6_raSJ4y2XUAISLUarew9g.kLzxoCq8WYmu7mKBLaYQNWBLF7Mhts0dli4swy5SfIk&dib_tag=se&keywords=Kaisi+45x30cm+Repair+Mat&qid=1705282220&sr=8-4' ),
    affiliate_url ( 'https://amzn.to/3vALAyO' ),
    listing_name   ( 'Silicone Repair Mat 932°F/ 500°C Heat-Resistant Soldering Mat Anti-Slip Electronic Repair Work Mat with Magnetic Area and Scale Anti-Static Welding Pad 17.7×11.8inch for Computer' ),
    item_price    ( 'AU$17.58' ),
    item_shipping ( 'AU$5.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/MMOBIEL-Anti-Static-Non-slip-Magnetic-Soldering/dp/B07M7WK72N/ref=sr_1_10?dib=eyJ2IjoiMSJ9.ZJWtev9ZCfEoUalVUIKK4PhCTV4Gx_I6IENckcBQNE6q9X3SBF4r2hHBIg6tQv5w3r9mQTgSV_nweHuru5UlnERPPgLeF1OSUv2UGrBeu_a9mE5pZCyESw-0VhE3a8vm6_raSJ4y2XUAISLUarew9g.kLzxoCq8WYmu7mKBLaYQNWBLF7Mhts0dli4swy5SfIk&dib_tag=se&keywords=Kaisi+45x30cm+Repair+Mat&qid=1705282220&sr=8-10' ),
    affiliate_url ( 'https://amzn.to/3ShAAz9' ),
    listing_name   ( 'MMOBIEL Soldering and Repair Mat Silicone - 45 x 30 cm - Heat-Resistant up to 500°C (932°F) - Workbench Mat for Soldering, Cell Phone, Computer and Electronics Repair – Silicone Soldering Mat - Blue' ),
    item_price    ( 'AU$24.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Solder-Anti-Static-Magnetic-Soldering-Silicone/dp/B0966KRQBT/ref=sr_1_12?dib=eyJ2IjoiMSJ9.ZJWtev9ZCfEoUalVUIKK4PhCTV4Gx_I6IENckcBQNE6q9X3SBF4r2hHBIg6tQv5w3r9mQTgSV_nweHuru5UlnERPPgLeF1OSUv2UGrBeu_a9mE5pZCyESw-0VhE3a8vm6_raSJ4y2XUAISLUarew9g.kLzxoCq8WYmu7mKBLaYQNWBLF7Mhts0dli4swy5SfIk&dib_tag=se&keywords=Kaisi+45x30cm+Repair+Mat&qid=1705282220&sr=8-12' ),
    affiliate_url ( 'https://amzn.to/3Hg55PU' ),
    listing_name   ( 'Solder Pad Mat,Anti-Static Esd Safe Magnetic Soldering Mat,Soldering Mat Large Silicone 932°F for Soldering' ),
    item_price    ( 'AU$25.99' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Kaisi+45x30cm+Repair+Mat' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/133840477693?hash=item1f29839dfd%3Ag%3A2i8AAOSwxpRhDFtH&amdata=enc%3AAQAIAAAA8H4ILnMTtKdmCi8%2FdgK5dgSsdBIzew9mfyXOgQ9CZmzoIgnlo5p05gyaZOzNsroLb19CTGqeRffUdp%2FXh%2FLYX85hVnEt9aS8X8RC5mDn%2FnGEJ4NwW83CJmIOrvbdHDD75ad39VKAtXXCikMBCvHjIPuBgMl1CGmzV8%2BGhofCSfsUfcDzPAU2NqP8sqe1Hr2aQrxHGeu8YDlRG8Qii4PAG83KVrehPtnkZhAoCUlTQKsghkrqSGZg6ianK39id%2BgUjK%2FEvQghZJWFvPikLzi4DCH6O0GBKUoR%2F46f%2FKV8CSjkAk7n56CKeWGn9NXGLXLKwg%3D%3D%7Ctkp%3ABk9SR_yph6yhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/Z1Wnwb' ),
    listing_name   ( 'LARGE SILICONE WORKING MAT OPENING LAPTOP MOBILE CELL PHONE REPAIR TOOL PAD TRAY' ),
    item_price    ( 'US$24.95' ),
    item_shipping ( 'US$19.55' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/166305190664?hash=item26b88fd308%3Ag%3AOVAAAOSweFdlQClS&amdata=enc%3AAQAIAAAA8Jg9%2BGylqnUBuwb5g9l566lOwp%2BPKi1t8CWs7%2FaO%2BbrlCAReOCuYp2knYHrfN7EALlISJtmG77SAUkbW3mDUhJe6G3Nm7uwsKGzcloroGJodD0dTfLmmb5jBRk1Ar%2B7mZt98dX83Auh6PKmUymUUoIxdEYC24D5oDdEG4YW8wJA0LWRrz8yO5xkP7A%2FMXNfCf05pNXhmbebUl0CduPwupvZ4jQfnJCFwmmpEGmV22KbIRBjpkisMB9uVcAhjoBiDWKTCRSSkAtPDyk%2BjTkHOP2RChiuuZcLUj88s55qG0YGvSWaEB8%2FYaIWrSbnrNjyd0w%3D%3D%7Ctkp%3ABk9SR_6ph6yhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/Vng5je' ),
    listing_name   ( 'ELECTRONICS WORK REPAIR TOOL KIT MAT OPENING LAPTOP MOBILE CELL PHONE TRAY LARGE' ),
    item_options  ( 'Size: Mat 45cm x 30cm' ),
    item_price    ( 'US$24.99' ),
    item_shipping ( 'US$23.13' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/273053514595?hash=item3f9341fb63%3Ag%3AKTIAAOSwoFVadXNs&amdata=enc%3AAQAIAAAA8NFtgxYxXnaBB09dq19ND9%2FFarfeHpx8YmOCJd%2F7EmUS0T%2BRyE0oemr4WTLiQ0%2FDPsn0kY8p9WPLzLFDSNokIeSW7B3yD0UkYsb3iNpjpsjesKPiTlnipRjo3ayKhRf0dCOzrkBe6t4dUBi663Jr1utWDidEcwUi%2BtBZG%2F7H%2FwgTz0qzMBG5pTGpgUzXps2KICucsBtdkL1HpDmfFTNEBxENdITdMVXIjTTnpOq0pif6T5kt7lAxkNp1Rktr4E3jUOtwxiDE7PTwTI%2FWy1KO4q9quZS3znQ1qty48cX4SNAqYCngUnA6p4yVh3lKdxjHKg%3D%3D%7Ctkp%3ABk9SR_6ph6yhYw&LH_ItemCondition=1000&var=572300285609' ),
    affiliate_url ( 'https://ebay.us/wD74iN' ),
    listing_name   ( 'Phone Repair Screen Opening Tool Kit Screwdriver Silicone Pad for iPhone XS 8 7' ),
    item_options  ( 'Item: 1x 45cm x30cm Silicone pad' ),
    item_price    ( 'US$18.99' ),
    item_shipping ( 'US$15.64' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Kaisi+45x30cm+Repair+Mat' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/386382207153?hash=item59f62c98b1%3Ag%3AILoAAOSwAx5lcrxr&amdata=enc%3AAQAIAAAA8IzzSBzDP8AOgfHvmr8UhahKb3A51LvuNrNlBfVsJIRQjGDMnXfvYz0oOb7DbEj0mJ%2BXW75pm6zay1FRhyX3u4H8R23D0xSlArgQcBjw5MpyHT%2ByFBGGRBghTLAZN5wCb6Uf6L5M5f2hONXsrzDdO4bhLroYDigb9tcwswASEFNoy0WWoiOUh5%2BOEpkuw5Ne9MDAzeOzitPlqssLP76m4aJf0QnSw259H2Om%2Bu4wc4wNI0F74rn7AOl3d%2FuF%2Fwu11kJPc9X5wATt3byW4CWCzNGKhDLcMrqSOCCSMqMwet1WOFwMUBfsUiUV7tHKgRpaUA%3D%3D%7Ctkp%3ABk9SR4idp6yhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/GC0QAw' ),
    listing_name   ( 'Phone PC Computer Repair Silicone Mat Pad Magnetic Heat Insulation Soldering Pad' ),
    item_options  ( 'Choose: 45*30cm' ),
    item_price    ( 'AU$29.69' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/386009741252?hash=item59dff937c4%3Ag%3ApVkAAOSwMkdkwMyn&amdata=enc%3AAQAIAAAA0K3yVjp4%2Bxl%2FGwQ09FsWCNm92ootllH8%2BDhns%2FUi9CPY3IWZH%2BqnBOQeTjCFL6SrcKg%2B6X6oF1v6ny6QBtrrOmodDbAZc%2B73%2FPHNGL04U7mUGhNfj0IPHkpnE%2B0PMC%2BjNDfas5pRwaA96VuG5EDv%2Fw19t8h1STxQaIF5KxuCMLynjleNBcb6UeI%2B%2Fak1%2Fdr%2BMGLJl0ZH7bTxToVP6WjO%2BzHBv%2BotsaRvqvf8UchwrhncMgHlSagobStITVclXOdsekwA%2BlPJohOS3ROsB5Y%2Bpng%3D%7Ctkp%3ABk9SR4idp6yhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/2f48ZF' ),
    listing_name   ( '45×30cm Silicone Repair Mat Heat-Resistant Soldering Repair Work Station ❧' ),
    item_price    ( 'AU$28.26' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/225706147306?hash=item348d227dea%3Ag%3AwuYAAOSwJKxky1JJ&amdata=enc%3AAQAIAAAA8DL%2BWkj5A7tWB6fLUKd2z0Bjatp6aSghg6%2BKFqvRa9td%2BJDO%2F6hFx3hxWakNt%2FJFpyWZ19VYUwGFxSBskSu%2Fpx0Jp3PfyxSuOh1BkCImR46lbotqJ0yyXa%2FqCAYW9QVnVAuL%2BqUq%2FhBbyvUdOdLAvfQk92KYi2EshqFFNpkBbaPRjX76KizGG0H9rBM2zmfWjYB6UoVLvvxrs%2FQrdL8i9l8Ks8rlI35N73ikiSaLe%2BuAC6wxYJInwgvipnMzk6CaSuj6Q99gwpbU%2FbmpEfmO%2F900mlnqCsUX%2FcR5awHd26CpYeBbexRVjaaKqvUIhUZ6Fg%3D%3D%7Ctkp%3ABk9SR4idp6yhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/1xcbm2' ),
    listing_name   ( 'Anti Static Heat Insulation Silicone Pad Mat Soldering Mat for Phone PC Repair' ),
    item_options  ( 'Choose: 45*30cm+ S160' ),
    item_price    ( 'AU$29.69' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Kaisi-45x30cm-Repair-Mat.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005590863580.html?spm=a2g0o.productlist.main.21.15e4399fIYY348&algo_pvid=58501040-acfb-461e-901c-426579a9c374&algo_exp_id=58501040-acfb-461e-901c-426579a9c374-10&pdp_npi=4%40dis%21AUD%214.75%214.75%21%21%213.14%213.14%21%402103237317052828771656305e9057%2112000033668015522%21sea%21AU%214385823938%21&curPageLogUid=wk4zsrJtkSp6&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dmh5jgN' ),
    listing_name   ( 'Repair Pad Insulation Heat-Resistant Soldering Station Silicon Soldering Mat Work Pad Desk Platform for BGA Soldering Station' ),
    item_options  ( 'Color: 450mm X 300mm' ),
    item_price    ( 'AU$17.72' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005003850515023.html?spm=a2g0o.productlist.main.23.15e4399fIYY348&algo_pvid=58501040-acfb-461e-901c-426579a9c374&algo_exp_id=58501040-acfb-461e-901c-426579a9c374-11&pdp_npi=4%40dis%21AUD%215.61%215.61%21%21%213.71%213.71%21%402103237317052828771656305e9057%2112000027334665919%21sea%21AU%214385823938%21&curPageLogUid=VLQtxco90FM5&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DCUxS4D' ),
    listing_name   ( 'ESD Heat Insulation Soldering Mat Computer Phone Repair Tool Kit Working Silicone Repair Pad Heatresistant Maintenance Platform' ),
    item_options  ( 'Color: 450mmx300mm' ),
    item_price    ( 'AU$23.35' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005632899613.html?spm=a2g0o.detail.0.0.111c2a6fod2UjQ&gps-id=pcDetailTopMoreOtherSeller&scm=1007.40000.327270.0&scm_id=1007.40000.327270.0&scm-url=1007.40000.327270.0&pvid=552b281f-2ca7-42bb-88e3-166ffff6c3d8&_t=gps-id:pcDetailTopMoreOtherSeller,scm-url:1007.40000.327270.0,pvid:552b281f-2ca7-42bb-88e3-166ffff6c3d8,tpp_buckets:668%232846%238107%231934&pdp_npi=4%40dis%21AUD%218.58%214.37%21%21%2140.68%2120.75%21%402103252b17052828980615111eb79b%2112000033860162614%21rec%21AU%214385823938%21&utparam-url=scene%3ApcDetailTopMoreOtherSeller%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DC0WQQd' ),
    listing_name   ( 'ESD Soldering Mat Repair Pad Insulation Heat Resistant Soldering Station Silicon Work Pad Desk Platform Phone Repair Tool Kit' ),
    item_options  ( 'Color: 450mm X 300mm' ),
    item_price    ( 'AU$15.29' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B07DGVRYL3/ref=ppx_yo_dt_b_asin_title_o00_s00?ie=UTF8&th=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=503-9027923-3582226' ),
    order_id        ( '503-9027923-3582226' ),
    order_date      ( '7 August 2021' ),
    order_item_name ( 'Kaisi Heat Insulation Silicone Repair Mat with Scale Ruler and Screw Position for Soldering Iron, Phone and Computer Repair Size:17.7 x 11.8 Inches' ),
    order_options   ( 'Size Name: S-160' ),
    order_price     ( 'AU$36.00' ),
    order_quantity  ( 1 ),
    order_gst_paid  ( 'AU$3.27' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B07DGVRYL3/ref=ppx_yo_dt_b_asin_title_o00_s00?ie=UTF8&th=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-7295723-6128636' ),
    order_id        ( '249-7295723-6128636' ),
    order_date      ( '8 February 2022' ),
    order_item_name ( 'Kaisi Heat Insulation Silicone Repair Mat with Scale Ruler and Screw Position for Soldering Iron, Phone and Computer Repair Size:17.7 x 11.8 Inches' ),
    order_options   ( 'Size Name: S-160' ),
    order_price     ( 'AU$26.78' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$15.84' ),
    order_gst_paid  ( 'AU$4.01' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61HY+qheVsL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name  ( 'Kaisi' ),
    model_name         ( 'S-130 35x25cm' ),
    EquipmentFeature::REPAIR_MAT,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Kaisi' ),
    model_name         ( '35x25cm' ),
    equipment_type     ( 'Repair Mat' ),
    category          ( 'Repair Mat' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Kaisi_S-130_Repair_Mat_35x25cm' ),
  search_url    ( 'https://www.amazon.com/s?k=Kaisi+35x25cm+Repair+Mat&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=Kaisi+35x25cm+Repair+Mat&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B07DGVJ17H/ref=ppx_yo_dt_b_asin_title_o00_s00?ie=UTF8&th=1' ),
    affiliate_url ( 'https://amzn.to/3vyweL7' ),
    listing_name   ( 'Kaisi Heat Insulation Silicone Repair Mat with Scale Ruler and Screw Position for Soldering Iron, Phone and Computer Repair Size: 13.7 x 9.8 Inches' ),
    item_options  ( 'Size Name: S-130' ),
    item_price    ( 'AU$29.32' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Resistant-Soldering-Silicone-Maintenance-Temperature/dp/B072LCF712/ref=sr_1_1?dib=eyJ2IjoiMSJ9.LGtUzvz6f-zUgP2J9fXIJvhCTV4Gx_I6IENckcBQNE6q9X3SBF4r2hHBIg6tQv5w3r9mQTgSV_nweHuru5UlnERPPgLeF1OSUv2UGrBeu_a9mE5pZCyESw-0VhE3a8vm6_raSJ4y2XUAISLUarew9g.cOi3fQMzqw8wMNkjsFiQ0mF9s7j00tP0-d8ojqtyCDs&dib_tag=se&keywords=Kaisi+35x25cm+Repair+Mat&qid=1705283205&sr=8-1' ),
    affiliate_url ( 'https://amzn.to/3tPIh6t' ),
    listing_name   ( 'Anti Static and Heat Resistant Soldering Mat, Silicone Soldering Mat Heat Resistant, for Soldering Iron, Phone and Computer Repair, Maintenance Platform BGA Soldering High Temperature Rubber Mat (Small)' ),
    item_options  ( 'Size Name: Small' ),
    item_price    ( 'AU$15.99' ),
    item_shipping ( 'AU$10.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Soldering-Silicone-resistance-Electronic-size%EF%BC%9A13-7/dp/B09V2ZD5Z5/ref=sr_1_2?dib=eyJ2IjoiMSJ9.LGtUzvz6f-zUgP2J9fXIJvhCTV4Gx_I6IENckcBQNE6q9X3SBF4r2hHBIg6tQv5w3r9mQTgSV_nweHuru5UlnERPPgLeF1OSUv2UGrBeu_a9mE5pZCyESw-0VhE3a8vm6_raSJ4y2XUAISLUarew9g.cOi3fQMzqw8wMNkjsFiQ0mF9s7j00tP0-d8ojqtyCDs&dib_tag=se&keywords=Kaisi+35x25cm+Repair+Mat&qid=1705283205&sr=8-2' ),
    affiliate_url ( 'https://amzn.to/3S0cWpv' ),
    listing_name   ( 'Soldering Mat Silicone Repair Mat Can Heat resistance 932℉ for Repair Phones, Cameras, and Watches etc Small Electronic Products, size：13.7 x 9.8 inch (S-130 Blue)' ),
    item_price    ( 'AU$16.99' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Kaisi+35x25cm+Repair+Mat' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/253522953106?hash=item3b07254392%3Ag%3AHCQAAOSw8fZaukeY&amdata=enc%3AAQAIAAAA0LsfHAYvwoVV%2B%2FxcuZVPyEIVsgXbJLu7ogpJ6bDd3yXEy191M09ffMRV%2BJNr9ZQtX%2BPL%2BXUFy3iKJi%2Fcd5K%2BHPrKHxmkqY1oR5fiWWelrpsJoKSlU%2ByMPfdUBR6yQrWQf963suDCGwT247iNXnI9Y6hQFP9vcND99LZG1GFbCWTTuM6pkVdO9XNSOAQGnZ13uAbD6Yf%2Bc4JS%2FN%2FVEWb%2FVlhazCzQoEdih5s5uPd8G5dQCmOgrEqmGT0FpFwxNB%2Fkhrfry7tf9EdVtD%2FzU8j30wk%3D%7Ctkp%3ABk9SR4j7-KyhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/wGDR0h' ),
    listing_name   ( 'Silicon Mat Kit Heat Resistant Maintenance Desk for Phone and Computer Repair' ),
    item_price    ( 'US$21.11' ),
    item_shipping ( 'US$16.03' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/145448266425?hash=item21dd646ab9%3Ag%3AA4gAAOSwvR5lWzmP&amdata=enc%3AAQAIAAAA0FpdndVD0ijoj%2Bql3O67iPZgjWsmK%2Fx6Qjslq1qRRG%2FgVuhHiRolbtqfYJXVV7hWVH0%2BkJP0kx9u6D4nkNBk2VLwYPWRGUtUt2eCRVPnDTV61nE1NA0ufEc7EUTUvMIz7Hkki%2FG9%2BaOFuaDt72DMQNSG3MwHguCXWZS8FD7amyhab1KQfcBygRPcS%2F%2FcK%2B6SLsOzRSDFwaGcCDt5uHfHnbw%2Bkn0FdDW0au1i3l36joMttJ4CDoA50b%2FY2yhEkigFORqF1qwAggylWNTovmQG5w0%3D%7Ctkp%3ABk9SR4r7-KyhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/F2xuhm' ),
    listing_name   ( '35Cm X 25Cm Watch Repair Work Pad Heat-Resistant Non- Mat Watch Tool foR1' ),
    item_price    ( 'US$11.91' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/256361889498?hash=item3bb05bfeda%3Ag%3AenYAAOSwxullkvPv&amdata=enc%3AAQAIAAAA8A1TmAoIK4kU1f1yqj%2BCQJXv6kBBNYY%2B%2BOX3%2Fyd6VdAt71CadQgesdyFY4cd4A0bbYpBAOMM3MOeIVOcZtQvHK9P2A1glEcsx2zWPDJrb8XQG1J0CXdmgi2e2g%2FyRwtGLwabdxZt3yEOZ6UG4ZTi6g8b8r4JIsAwyaOKv5I56kkaaIiTyU01E5zPIuD3hdnRvTQbcapRZJuQ8GKx3xroOLb2SzYNcCSg4ROCocKz%2BJxgPsmx0f0VpO5CH8pPD%2Bk0F8xilnS%2FPjPkrzFy4GEvi%2BZsQ%2BdFGS5rWpdegbiSU89w2iqc2ws7YNep50jV0I535A%3D%3D%7Ctkp%3ABk9SR477-KyhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/CeSDqd' ),
    listing_name   ( 'Heat Insulation Repair Silicone Pad Non-magnetic High Temperature Resistance' ),
    item_options  ( 'Specification: 35x25cm' ),
    item_price    ( 'US$30.99' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Kaisi+35x25cm+Repair+Mat' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/265059042227?hash=item3db6c003b3%3Ag%3AweMAAOSwvClgLjS0&amdata=enc%3AAQAIAAAA0E2yAdyUexTyxBnJ5pbbFaRwTby7Zw%2BQhHiOoyFNz083TIOMkylK%2BtOuYfX%2FByaqEDSDV3IZFuynKV1yWNMIfGaswtxRD%2BU%2FqchpymHIWr%2F%2BYIHprt9hEtqj1f7zsZLJqE9iMaS0PdOrxKT%2Baw6JJLK%2FGcDU%2BsgjcpA6kxLLk1nWirx0qAraOv38VTiMrxRx7Bildzh4ijuqqIZMI2CCecCI5MoUVczMlNqKbJ0yTw94qfliOBZAZga%2Fqt6glXqrZKqSE7NSLSqkZIyT1ictfOE%3D%7Ctkp%3ABk9SR97WnK2hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/stBQQJ' ),
    listing_name   ( '35x25cm Magnetic Heat Insulation Silicone Pad Desk Mat For BGA Soldering Repair' ),
    item_options  ( 'Size: S-130' ),
    item_price    ( 'AU$19.79' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/255920634205?hash=item3b960ef95d%3Ag%3AgOsAAOSwzhhjt%7ESU&amdata=enc%3AAQAIAAAA8P5cY3rXp%2BfEyMU43ebiy5Ui6jXiN8lxWuCtIf%2FPlEMwdZqX%2BzsG2hbP6O3sTyI4zpJXynamuCkaKgvVewDpd0XyqFQ1wep9PhzcELzRRk7CAvAt3sRYiaIrXUYJiGM%2Fwc2VWz%2Bu%2FZC1IGFU%2BZxN7ijhk40yxWkNLkYq4wk7TvPw5wd2g93uBQactlC9CLCKE1pqLGy7azACxmVCDKf8Y5RTf%2F4i1dXMGwCY7RNLYU%2BGrtywzDFH%2Bc%2Bv80osqNQyk23YI9wbV8%2BMLo%2FOfIrmsl13Z9C34s3S0K6DzkNb0DDnMmE0vXdQ8RgIDnGcTyPWhQ%3D%3D%7Ctkp%3ABk9SR97WnK2hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/2zwaYY' ),
    listing_name   ( '35x25cm Magnetic Heat Insulation Silicone Pad Desk Mat For BGA Soldering Repair' ),
    item_options  ( 'Size: S-130' ),
    item_price    ( 'AU$19.57' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/384804396885?_trkparms=amclksrc%3DITM%26aid%3D1110006%26algo%3DHOMESPLICE.SIM%26ao%3D1%26asc%3D258816%26meid%3Dbff28ba09148469a8495c7f29a5493a0%26pid%3D101195%26rk%3D4%26rkt%3D12%26sd%3D255920634205%26itm%3D384804396885%26pmt%3D1%26noa%3D0%26pg%3D4247815%26algv%3DSimplAMLv11WebTrimmedV3MskuWithLambda85KnnRecallV1V2V4ItemNrtInQueryAndCassiniVisualRankerAndBertRecallWithVMEV3CPCAuto%26brand%3DUnbranded&_trksid=p4247815.c101195.m1851&amdata=cksum%3A384804396885bff28ba09148469a8495c7f29a5493a0%7Cenc%3AAQAIAAABYObhgc4Nk8%252BdtAwOww4FKLaj%252FQ5qqgDlQCuqZA43WcPFUWDERCUugbbOk7XQv0JXlBfqCg2xKF3WcPghxGMFw2oSlXvfExEaMYr7I7LmrHcP6czY1wIMt0ORyKiCWt95xldincyyBx3g%252BNDW%252B%252FhWUgRRUXXQx39bwJBi7jHmLAZ3s4bd9tStbiHcSGR66tGuX9sCIv96VcIPP2eSta7%252FuYqc1%252BliHo%252BdVaxyVDZHwjSrWCQNknuxoXwHziD4Pilu40L3vzmm%252B4g%252F7rPExp6c0mDqzCARnEclwRD7bjDyN7Z5THaVX5s%252FeLr6xmagJ819jaxag47XRbMi95b38gKr65VXIBTqkrt5M83mjOOh9Vwr2faZtE4gZT1tCWGVcLVFaj4Jizrmk7PVqZW3OR6W6hq3ZwQllm%252BwtkGBMAA3ChkZQYUh622r1eORAQb8GMq2bn5bH8zpUQ%252B68y%252BrWP8O8CQ%253D%7Campid%3APL_CLK%7Cclp%3A4247815' ),
    affiliate_url ( 'https://ebay.us/Jq009a' ),
    listing_name   ( 'Magnetic Heat Insulation Silicone Pad Mat Platform For Soldering Repair Larges' ),
    item_options  ( 'Itemcolor: S130' ),
    item_price    ( 'AU$20.89' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Kaisi-35x25cm-Repair-Mat.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004793269217.html?spm=a2g0o.productlist.main.1.5648115cLNB16j&algo_pvid=aa4d9e3f-b1e9-4b7a-a739-5b79af315570&aem_p4p_detail=202401141757303499859863607550005231185&algo_exp_id=aa4d9e3f-b1e9-4b7a-a739-5b79af315570-0&pdp_npi=4%40dis%21AUD%2123.29%2113.51%21%21%2115.40%218.93%21%402103011217052838507501199e946c%2112000030507460414%21sea%21AU%214385823938%21&curPageLogUid=1WuarF4xr3bf&utparam-url=scene%3Asearch%7Cquery_from%3A&search_p4p_id=202401141757303499859863607550005231185_1' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DnNY6G1' ),
    listing_name   ( '20-30 34 35CM Three Sizes Silicone Insulation Pad Anti-corrosive Thermostable Watch Repair Workbench Pad Soldering Station Mat' ),
    item_options  ( 'Color: 25-35CM 1PCS' ),
    item_price    ( 'AU$18.01' ),
    item_shipping ( 'AU$11.84' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B07DGVJ17H/ref=ppx_yo_dt_b_asin_title_o00_s00?ie=UTF8&th=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=503-9480851-0451817' ),
    order_id        ( '503-9480851-0451817' ),
    order_date      ( '24 July 2021' ),
    order_item_name ( 'Kaisi Heat Insulation Silicone Repair Mat with Scale Ruler and Screw Position for Soldering Iron, Phone and Computer Repair Size: 13.7 x 9.8 Inches' ),
    order_options   ( 'Size Name: S-130' ),
    order_price     ( 'AU$15.16' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$8.51' ),
    order_gst_paid  ( 'AU$2.32' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61InFODP23L._AC_SL1000_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.mmobiel.com/heavy-duty-helping-hand-magnifier-station-2.5x-4x-led-light-magnifying-glass' ),
      link_text       ( 'Heavy Duty Helping Hand Magnifier Station 2.5X 4X LED Light Magnifying Glass' ),
    ),
    manufacturer_name  ( 'MMOBIEL' ),
    EquipmentFeature::THIRD_HAND,
    EquipmentFeature::MAGNIFYING_GLASS,
    EquipmentFeature::LED_LIGHT,
    EquipmentFeature::SOLDERING_STAND,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'MMOBIEL' ),
    equipment_type     ( 'Helping Hands' ),
    category          ( 'Third Hand' ),
    category          ( 'Magnifying Glass' ),
    category          ( 'Torch/Light' ),
    manufacturer_link (
      link_href       ( 'https://www.mmobiel.com/heavy-duty-helping-hand-magnifier-station-2.5x-4x-led-light-magnifying-glass' ),
      link_text       ( 'Heavy Duty Helping Hand Magnifier Station 2.5X 4X LED Light Magnifying Glass' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/MMOBIEL_Helping_Hands' ),
  search_url    ( 'https://www.amazon.com/s?k=MMOBIEL+Helping+Hands&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/MMOBIEL-Helping-Magnifier-Station-Magnifying/dp/B07WF7GXS1/ref=sr_1_4?dib=eyJ2IjoiMSJ9.nZ0bBoScskOL3spQZsVokmL1d7459H9oqnOd1IZGfY35Paf7goWAApDe6d4aMspniLkJqJ-Bx4CspP5-EsTqk7giGbPh9TEih17cR9TuuQw.Etkf_VU2eRj1c6_8CUXUM8cPEWHzwI-hHkFH2c9bGag&dib_tag=se&keywords=MMOBIEL+Helping+Hands&qid=1705283979&sr=8-4' ),
    affiliate_url ( 'https://amzn.to/3U0F6mZ' ),
    listing_name   ( 'MMOBIEL LED Light Helping Hand Magnifier Station for Soldering, Assembly, Repair,Modeling, Hobbies and Crafts - 2.5X /4X LED Light - Hands-Free Magnifying Glass Stand - Incl. Clamp and Alligator Clips' ),
    item_price    ( 'US$24.99' ),
    item_shipping ( 'US$22.38' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=MMOBIEL+Helping+Hands&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/MMOBIEL-Helping-Magnifier-Station-Magnifying/dp/B07WF7GXS1?dib=eyJ2IjoiMSJ9.nZ0bBoScskOL3spQZsVokmL1d7459H9oqnOd1IZGfY35Paf7goWAApDe6d4aMspniLkJqJ-Bx4CspP5-EsTqk7giGbPh9TEih17cR9TuuQw.Etkf_VU2eRj1c6_8CUXUM8cPEWHzwI-hHkFH2c9bGag&dib_tag=se&keywords=MMOBIEL+Helping+Hands&qid=1705283979&sr=8-4&linkCode=sl1&tag=johnelliotv-20&linkId=00c3aa69dd43471f1bd7bc3d841a0b82&language=en_US&ref_=as_li_ss_tl' ),
    affiliate_url ( 'https://amzn.to/4aXm4E1' ),
    listing_name   ( 'MMOBIEL Heavy Duty Helping Hand Magnifier Station 2.5X 4X LED Light Hands Free Magnifying Glass Stand with Clamp and Clips' ),
    item_price    ( 'AU$36.99' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=MMOBIEL+Helping+Hands' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/256260976165?epid=21042751762&hash=item3baa582e25&amdata=enc%3AAQAIAAAA8B0DSMXhWd5bWTksYL%252Bt90EwGmM9UpNgl6%252FU0kX30JSdROWRy%252B1aseQifUU5F85r3xXySgHJy0ohKgZH9Vx85sJ%252B7ZYRwJNsI6iYBf8uMiin8zXNpXPAfqvFD%252F%252FAUNEBTBc6dDJza%252Fv7qRfHg08tQBFaJBqv%252FrUYONVwzx8oSsqw6jlO3DfLiD6IcW5%252B0Sv69tc5Pt7RsXdNHsf%252BkYt2%252BwKNVgHIWnRRFVJWnbHCeCrgs2fxrN%252BVqH%252Bx9fcdVcfdqLCrhIbpq2TdMMw3PVcoQYFxyTxW794FMaNCK%252BdlhBxMiX4hRieyNktTHd9yNvrilg%253D%253D%7Campid%3APL_CLK' ),
    affiliate_url ( 'https://ebay.us/K9SOoQ' ),
    listing_name   ( 'MMOBIEL LED Light Helping Hand Magnifier Station for Soldering, Assembly, and -' ),
    item_price    ( 'US$44.15' ),
    item_shipping ( 'US$20.61' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/285567871778?epid=0&hash=item427d2beb22%3Ag%3Ays8AAOSwfzxlW0f9&amdata=enc%3AAQAIAAAA0DI9l6ElLZqPgLjMtptNJ5zwdHCXzcyyO9WakbRtXkikS7yWLN2EQMy6A6dGlXLSrhZQNXg01GNjT2M1pKU9oBZ1faf%2FfIeygaAsasnvcK0hvLHn9xoRskcDiGshTVhEYfVt454KjYRWsi5bq%2BcQdd9pB8jn3OjE6BVw2U%2BV8%2Boknz4Osiv8nsh1RoID9lBs9xfGMwu%2FfFH3uOtviOm0zh0SlIdeFMLKx5qCcw%2FZ82EhXEOv3%2Bnoh8kNoSuWHwOvuf7doh4GLIHszFQozFT2Aaw%3D%7Ctkp%3ABk9SR_aD1q2hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/GRAkIP' ),
    listing_name   ( 'MMOBIEL LED Light Helping Hand Magnifier Station for Soldering, Assembly, and -' ),
    item_price    ( 'US$36.79' ),
    item_shipping ( 'US$20.25' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/375045977389?epid=20042679375&hash=item57527b752d%3Ag%3Ap5YAAOSwqftlTXxG&amdata=enc%3AAQAIAAAA8Ma51HHsZlX3QPzNMo4Gq%2Fh%2FXiF%2FPPygp7ocU21JT8pJ5%2BNzwGWNXQleCDOg8Ch%2F0G8Ld6drqVzajAur7t1ilyj4vJkIchs2y3B1Eav9tki2c%2FmudrhF4xwTLsxaZjdfkaLZmhuZsU8lLcnJHOYg18f8rrgteZ2f14R7xPLatcJR67ghZDikpEiF9is6dSTdmyuv5AlV41q3SAt2Ar2ETUgQLntZuaiNOJX7x8V6I78g9NqLm61v4hhBPwppsgjnDDmNAKpXHR%2FxdOUyx%2FIqlQHo5wrdd5l3qkLbI9BW48M9rnaFD%2BeKexfzKC1fiiZ8Yw%3D%3D%7Ctkp%3ABk9SR_aD1q2hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/vwzrrB' ),
    listing_name   ( 'MMOBIEL LED Light Helping Hand Magnifier Station for Soldering, Assembly, and -' ),
    item_price    ( 'US$39.27' ),
    item_shipping ( 'US$20.38' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=MMOBIEL+Helping+Hands' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/285567871778?epid=0&hash=item427d2beb22%3Ag%3Ays8AAOSwfzxlW0f9&amdata=enc%3AAQAIAAAA8NgIK8%2F1o6mLZJZO00bWJuRz2ITZh8K2qZxhrD4iPZQ59GAwV7Tt%2BMH7NqubVrKn5VeEjgrlwfWK7lcjNYKxNrzaTz5uI8aLatMLbLh8MnanjaMvIWPYVna9lsPiTQcKaO1u3T5Vv7Cwdn3g5KcmLaJzKa0RVm097aCS7deDwz3%2B%2FCYuBJRFbUX1diP8TwAPsK2HLRxQ3zgZ6LwpeACXAgxaX9HZp9PAL%2FBQ8x9pRIZGAWyahBsn0aMnYZwDIgPL6SYI36YLBveXrhGPsAyo7bIcuMMHClucp6xdwkLtSWZzNZy181K2ggKD7vf5LHJt1Q%3D%3D%7Ctkp%3ABk9SR_rM8q2hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/pqyFjN' ),
    listing_name   ( 'MMOBIEL LED Light Helping Hand Magnifier Station for Soldering, Assembly, and -' ),
    item_price    ( 'AU$54.92' ),
    item_shipping ( 'AU$30.23' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/375045977389?epid=20042679375&hash=item57527b752d%3Ag%3Ap5YAAOSwqftlTXxG&amdata=enc%3AAQAIAAAA0IdUUunvHd1zzi%2FadvSKHAyGzyaHGLhwOiOZyjU7MLDRXBoznR9vkmYyz5Fd78me2hymF9UTlvh6yvpGVxU8Y9JysX0ak4pncjJsyq9MogI%2FxdAEOLwRCkS%2BjQlpXqbLx0CshfLfx8A%2BFLm%2BnkVcJNoOpgOhJeTGf8CWqN2%2B2Qr%2FfRnnHV3PfRxlKEN%2FS8wRdBILOWOLTpmQocZ%2Bfh5EkkMqAfVWacVJvnAwQhaByld4XHFzWvhvxwAUg02KeGy%2FaivNVJ70hj88LLGfCT0DMZ8%3D%7Ctkp%3ABk9SR_rM8q2hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/l2pqEI' ),
    listing_name   ( 'MMOBIEL LED Light Helping Hand Magnifier Station for Soldering, Assembly, and -' ),
    item_price    ( 'AU$58.61' ),
    item_shipping ( 'AU$30.42' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/225779442025?epid=25040152856&hash=item349180e169%3Ag%3Af6IAAOSwmyNlCPVq&amdata=enc%3AAQAIAAAA0Ow9vARwxat%2FdQyx%2BaiJB1JwWgniM4YqQPpmJK5GpwRoizRV0yDFQiy%2FBaH5tppK%2Fbju9Xun751aslde93BRKSlBuoKb%2F9E6%2BTg6xl2mCG62iXKouJm0RPtnCR%2BXRDgSLda9RDosf%2FQwYgSzp%2F23nj%2BEOFGWfMDXUJKBa1CdyEeh42SVxKAkZ65RG27k4KhsEYhyO6KQJQbcIw0tr%2B1oRyM4hzVb9towdK0aEsyCd4LpnyP9o7l4duUwwP6agyJEsAAIv1GIcSsnd0R3HgfUK2Q%3D%7Ctkp%3ABk9SR_rM8q2hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/kbJZXo' ),
    listing_name   ( 'MMOBIEL LED Light Helping Hand Magnifier Station for Soldering, Assembly, and -' ),
    item_price    ( 'AU$63.47' ),
    item_shipping ( 'AU$30.65' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-MMOBIEL-Helping-Hands.html' ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B07WF7GXS1/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=503-1197525-8683018' ),
    order_id        ( '503-1197525-8683018' ),
    order_date      ( '4 August 2021' ),
    order_item_name ( 'MMOBIEL Heavy Duty Helping Hand Magnifier Station 2.5X 4X LED Light Hands Free Magnifying Glass Stand with Clamp and Clips' ),
    order_price     ( 'AU$45.40' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$18.05' ),
    order_gst_paid  ( 'AU$5.93' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61IiPi++htL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name  ( 'QWORK' ),
    EquipmentFeature::THIRD_HAND,
    EquipmentFeature::MAGNIFYING_GLASS,
    EquipmentFeature::USB_LED_LIGHT,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'QWORK' ),
    equipment_type     ( 'Helping Hands' ),
    category          ( 'Third Hand' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/QWORK_Helping_Hands' ),
  search_url    ( 'https://www.amazon.com/s?k=QWORK+Helping+Hands&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=QWORK+Helping+Hands&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/QWORK-Magnifier-Adjustable-Magnifying-Inspecting/dp/B08FXJCVCT/ref=sr_1_29?dib=eyJ2IjoiMSJ9.dl8eI2TDpcFWzcO85ewYiyOqpyKkmacdzXOhCU7kxGpGGy3ck2UPfOGhjouDvI3Z68fzPyJL_Y5pZoP3IzBBHmi0urHfduF7XqJqpXswOq5fy6BzTaf0pIG_Dy15_CHGMXObf7xixj2luVZEiYiSKg.UsIaXBN0cHMVw7-Cr-N4Lxso3sRPr4w-mlHCTmFm4us&dib_tag=se&keywords=QWORK+Helping+Hands&qid=1705284681&sr=8-29' ),
    affiliate_url ( 'https://amzn.to/41WyyrC' ),
    listing_name   ( 'QWORK Helping Hand Magnifier, Adjustable 5X Magnifying Glass, Designed for Soldering, Crafting & Inspecting Micro Objects' ),
    item_price    ( 'AU$44.52' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/WWZMDiB-Adjustable-5X-Magnifying-Glass/dp/B0BG7X7LCM/ref=sr_1_9?dib=eyJ2IjoiMSJ9.dl8eI2TDpcFWzcO85ewYiyOqpyKkmacdzXOhCU7kxGpGGy3ck2UPfOGhjouDvI3Z68fzPyJL_Y5pZoP3IzBBHmi0urHfduF7XqJqpXswOq5fy6BzTaf0pIG_Dy15_CHGMXObf7xixj2luVZEiYiSKg.UsIaXBN0cHMVw7-Cr-N4Lxso3sRPr4w-mlHCTmFm4us&dib_tag=se&keywords=QWORK+Helping+Hands&qid=1705284681&sr=8-9' ),
    affiliate_url ( 'https://amzn.to/3O5pdYJ' ),
    listing_name   ( 'WWZMDiB Helping Hand Magnifier Adjustable 5X Magnifying Glass,with Dual Adjustable Alligator Clips, for Soldering, Inspecting Micro Objects, DIY (5X Helping Hands)' ),
    item_price    ( 'AU$24.92' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=QWORK+Helping+Hands' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/123771137015?epid=1476838361&hash=item1cd155abf7%3Ag%3AwQoAAOSw%7Ey9ZHaLR&amdata=enc%3AAQAIAAAA8F%2BbF6zD5Ai0RKVUSF1EbVw4n1zy7F3NK8tfIFt%2FntSJii%2FyVGJ3JUiwKYwtMAW2r8EdkZNO0aRE8mvmVeMmK9Z7UQW5aR2jYMVBRWFg%2FdEQgPR29KgDadMYWJu24R9GLJxtN1gwNHQsJ54CcFQlSY4K%2BHZfNcaUtmrlL%2FX0%2B8Z5n2Wna25Fl6lq2oaHv7HAdJmWsFifAoPxiA6Y9vY2mgmC%2FdbPPuHoUwXmTncOSimcgyfjtxcjHj4RkgBM6l%2FPycwr%2BCWvL4I0GUdQNVAX%2BWMZKo6pInn1z0pwD2LOVksD9z1iLSxD926O86HQmYRgRA%3D%3D%7Ctkp%3ABk9SR6ytr66hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/tzBUeL' ),
    listing_name   ( 'Mercury 710.165 Helping Hands Soldering Work Holder Clips 3x Magnification Metal' ),
    item_price    ( 'US$7.61' ),
    item_shipping ( 'US$6.35' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/123771136637?hash=item1cd155aa7d%3Ag%3A4NwAAOSwi7RZFcln&amdata=enc%3AAQAIAAAA8BjoApL6QCpRRSmuBFPaEi47tQqUqxVyRhDJ5m6VmdkXcJCEmWkG2suTNYuPFi4jJNsECCo6f6krZxpMqx%2FejlDG2ZiWMX4GejSaDDO6RyfxohQCoKem3H%2BvGJ%2FaAE6kYdgFgcfx5PkgGpPucR8zBSYqpeqSRWUKGPEFxhcRuyCl%2BS9HHVvd5Q1S2ASMMWG1HRVgEq11LR1gz1%2B2%2BXHPMBPG5GYZ7N4Jfv%2F8g10d2jJzOQKo5nIxF5zxBUlcnc%2Fe5srrmR%2FGxnfn328vkdohjcSInVruU%2BXJmNtLVVr2RjYHJB3Tj2Y40siC1t1dhsYe4g%3D%3D%7Ctkp%3ABk9SR6ytr66hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/jOOTXq' ),
    listing_name   ( 'Mercury 710.165 Helping Hands Soldering Work Holder Clips 3x Magnification Metal' ),
    item_price    ( 'US$11.39' ),
    item_shipping ( 'US$8.50' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/175580109782?hash=item28e163dbd6%3Ag%3AMn4AAOSw1Ktjyi%7EC&amdata=enc%3AAQAIAAAA4I2iD959mllf6NWfRR14uaske4d3KjYCjrkc9Xef31iqM2GZqJM1qKntm3%2Fq2JxEBB1cxCquk6T6QZZW0BcaAS8BULb6%2FNEFB7p9RbnykM9xa%2B2%2BW1n2K9QIyMK8%2BTkSB%2Fui1DvHYweavyELBGaqDJDg0BVsljywG7O5bu8vcQBPpAevymyo4OJgWUMp2ndCovSMIjGpqANmVFr9Y%2BHuWQFlHFAUEJ3lbljnOLFZCxByi1JHiEvJXVeukyEjfJpW55UpfgjrLXxRemmBzplAm24Rev5PvqkOkdII3SADSdg2%7Ctkp%3ABk9SR6ytr66hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/uJbQuP' ),
    listing_name   ( 'DIY Repair Welding Bench Working Table Clamp Magnifying Tool Jewelry Accessories' ),
    item_price    ( 'US$20.61' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=QWORK+Helping+Hands' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/401768790412?epid=1329871223&hash=item5d8b49398c%3Ag%3A6NAAAOSw%7EFJZEGVr&amdata=enc%3AAQAIAAAA8M7O%2BlNeChQ852%2Bvo8hRHpyKOZKAAVHQM3CP4xHAMiluz1hxPiuCT5Z%2BjHu5pV0aV4HGPCw5Pk9yH1qWFVNDWdx5Fe4pWWJlABVK8n%2BdcoqNFoJfyzc5%2BBLTPUALxd8wUf6RRLdvmd72wJcgfeXsgw1IV6TdyIoCQv0bARi%2Bak02k7n74qoj2A%2BhDh%2Bfyd4%2FXggki0mIYmTFuu2Lvd929WNqYEY5h8lIDCDLlMXaKvRYNixR3o1czUZx%2BY1E87YYf0UNkUWOyJ27ctKwwJHkaLNzwCE%2BJNHMylwdYV7n9slhlBPsT6hvHWjIXq5ZmLOtdg%3D%3D%7Ctkp%3ABk9SR7aQxq6hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/4FjnqO' ),
    listing_name   ( 'Mercury 710.165 Helping Hands Soldering Work Holder Clips 3x Magnification Metal' ),
    item_price    ( 'AU$12.75' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/222662643413?hash=item33d7ba4ed5%3Ag%3ACeoAAOSwyVBgSE9F&amdata=enc%3AAQAIAAAA4PUux9q3EYhW21iXG9NLkil565c6aRCpfJfEgf6EmlAhgLfj%2FT2KlO4GyFEQ%2Fbqy8FhzieFC0OYszI7GhxxG9igeVdJ%2FuwgxqWwsHW9xjggTte1H%2FDtAQmg4YGs9STh0EOTq%2BeKbtNSazNurYNwIaFG%2F%2FP8aQcCEZA9NqzzZPsKLCosLWQHqyEuHrxsvwm%2BtCBAr%2FEc0ykbHLfUr0F2jInVfS8wLp5Qya0xMt4IX8WGaXHPD8TttLtLqF43V4e9%2FqafQpDqEcY36%2B8J3RDWNksfWfDe%2BvDI2h7v%2Bg0O2ak%2Bu%7Ctkp%3ABk9SR7qQxq6hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/2Dko5Z' ),
    listing_name   ( 'PROSKIT Helping hand PCB Holder Third hand with Magnifier for Soldering Work' ),
    item_price    ( 'AU$19.90' ),
    item_shipping ( 'AU$7.90' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/353514349092?epid=1904333045&hash=item524f18e224%3Ag%3AWVYAAOSwJG5loGuu&amdata=enc%3AAQAIAAAAwDC9n8gSIMj4qI0RrO7wSIiSNdpru%2F3N9d8dAybE0Iq9vlTP3ZsDdz%2FUE9nEijVr2xC7rY%2Foxl1Gagvjkp%2FoefOQvdZOGk5peea4pxEiyyrBFEusQfY9tNgbSn%2FE%2FUYx4uUrckrZMERxwetaVRAakvYwHN%2BLNGuV6HDIKjcDJBqzg%2Frs3s4QGA623vugzEsdv0V%2F1gVX4I%2F0BzdyCNfLrUpFNWeJTinTfyYHClsP4Du6vUP%2FzmZCb0BKloVceQEdNw%3D%3D%7Ctkp%3ABk9SR7qQxq6hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/bMLaDF' ),
    listing_name   ( 'HELPING HANDS with GLASS MAGNIFIER 3rd Hand work holder Expo Tools 73860' ),
    item_price    ( 'AU$13.24' ),
    item_shipping ( 'AU$26.10' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-QWORK-Helping-Hands.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006374846799.html?spm=a2g0o.productlist.main.83.22f96dc9r4Zews&algo_pvid=4c0bb8e8-b17d-4a85-8d55-562dcf2b952d&algo_exp_id=4c0bb8e8-b17d-4a85-8d55-562dcf2b952d-41&pdp_npi=4%40dis%21AUD%214.03%212.82%21%21%2119.08%2113.36%21%402101fb1417052852213896428eb3a0%2112000036945872277%21sea%21AU%214385823938%21&curPageLogUid=4JZ7Qq05Wihg&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DFAc44D' ),
    listing_name   ( 'Helping Third Hand Tool Soldering Stand With 5X Welding Magnifying Glass 2 Alligator Clips 360 Degree Rotating Adju Repair Tool' ),
    item_price    ( 'AU$2.82' ),
    item_shipping ( 'AU$11.38' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005001567237182.html?spm=a2g0o.productlist.main.111.22f96dc9r4Zews&algo_pvid=4c0bb8e8-b17d-4a85-8d55-562dcf2b952d&algo_exp_id=4c0bb8e8-b17d-4a85-8d55-562dcf2b952d-55&pdp_npi=4%40dis%21AUD%2117.96%2111.85%21%21%2185.12%2156.18%21%402101fb1417052852213896428eb3a0%2112000016616435950%21sea%21AU%214385823938%21&curPageLogUid=yxytHMXYmHZV&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Ddhe8dF' ),
    listing_name   ( '3 Hand Soldering Iron Stand Welding Tool LED Alligator Clip Holder Clamp Helping Hand Repair Tool With Illuminated Glasses' ),
    item_price    ( 'AU$11.85' ),
    item_shipping ( 'AU$1.35' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005902739679.html?spm=a2g0o.detail.0.0.22d6d1cbTWgwpC&gps-id=pcDetailTopMoreOtherSeller&scm=1007.40000.327270.0&scm_id=1007.40000.327270.0&scm-url=1007.40000.327270.0&pvid=7241d463-efda-4388-b88f-2ebda992f6b7&_t=gps-id:pcDetailTopMoreOtherSeller,scm-url:1007.40000.327270.0,pvid:7241d463-efda-4388-b88f-2ebda992f6b7,tpp_buckets:668%232846%238107%231934&pdp_npi=4%40dis%21AUD%2118.75%219.38%21%21%2188.84%2144.42%21%402103080c17052852521438739efcf0%2112000034777563522%21rec%21AU%214385823938%21&utparam-url=scene%3ApcDetailTopMoreOtherSeller%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DcHEVqZ' ),
    listing_name   ( 'Welding Auxiliary Clip Magnifier Electric Circuit Board Repair Welding Iron Bracket Adjustable magnifying soldering clamp' ),
    item_options  ( 'Color: 1PCS' ),
    item_price    ( 'AU$9.38' ),
    item_shipping ( 'AU$2.99' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://d297fd4gt7t5lv.cloudfront.net/file/2023-11-03-174856/s-l1600.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.legionwarehouse.com.au/products/precision-mini-screwdriver-set-11pc-jeweller-laptop-phone-watch-repair-tool?pr_prod_strat=e5_desc&pr_rec_id=3cb54501d&pr_rec_pid=7216010789019&pr_ref_pid=7448981602459&pr_seq=uniform' ),
      link_text       ( 'Precision Mini Screwdriver Set 11PCS' ),
    ),
    manufacturer_name  ( 'Legion Tools' ),
    EquipmentFeature::MINI_SCREWDRIVER_SET,
    EquipmentFeature::RESET_PIN_SCREWDRIVER,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH00,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH0,
    EquipmentFeature::AWL,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH1,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL3,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL2_4,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL1_8,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL1_4,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL1_2,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL1,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Legion Tools' ),
    equipment_type     ( 'Mini Screwdriver Set' ),
    category          ( 'Screwdriver' ),
    category          ( 'Hand Tool' ),
    manufacturer_link (
      link_href       ( 'https://www.legionwarehouse.com.au/products/precision-mini-screwdriver-set-11pc-jeweller-laptop-phone-watch-repair-tool?pr_prod_strat=e5_desc&pr_rec_id=3cb54501d&pr_rec_pid=7216010789019&pr_ref_pid=7448981602459&pr_seq=uniform' ),
      link_text       ( 'Precision Mini Screwdriver Set 11PCS' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Precision_Mini_Screwdriver_Set' ),
  search_url    ( 'https://www.amazon.com/s?k=Legion+Tools+Mini+Screwdriver+Set&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Chivolona-Precision-Screwdriver-Computer-Electronics/dp/B0C66KY3J8/ref=sr_1_11?dib=eyJ2IjoiMSJ9.MwhVbxZj_2QDKfzX2e8BCHdNiQ0PX9PyEKUMwhwBeHCsF6UAAsHRviHp7eK1H5yTByqGd_qCWd8crePdqhPQFhqNC7bigbY9YN_2_g2K3ZUu_d62xo5z1vQ5QPcJaEzR2iSFLQgzy5puG-gUEacOBw.AxSj_3HeoF5zkrBM3jOYGBLj8TO_3TSjC5yhkQ6Hh_Q&dib_tag=se&keywords=Legion+Tools+Mini+Screwdriver+Set&qid=1705285480&sr=8-11' ),
    affiliate_url ( 'https://amzn.to/47IWcJy' ),
    listing_name   ( 'Chivolona 11PCS Mini Precision Screwdriver Set,Small Screwdriver Set for Repair Computer,Small Screw Driver Kit Electronics,Toys,Watch' ),
    item_price    ( 'US$7.89' ),
    item_shipping ( 'US$17.80' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Legion+Tools+Mini+Screwdriver+Set&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Chivolona-Precision-Screwdriver-Computer-Electronics/dp/B0C66KY3J8/ref=sr_1_11?dib=eyJ2IjoiMSJ9.MwhVbxZj_2QDKfzX2e8BCHdNiQ0PX9PyEKUMwhwBeHCsF6UAAsHRviHp7eK1H5yTByqGd_qCWd8crePdqhPQFhqNC7bigbY9YN_2_g2K3ZUu_d62xo5z1vQ5QPcJaEzR2iSFLQgzy5puG-gUEacOBw.AxSj_3HeoF5zkrBM3jOYGBLj8TO_3TSjC5yhkQ6Hh_Q&dib_tag=se&keywords=Legion+Tools+Mini+Screwdriver+Set&qid=1705285480&sr=8-11' ),
    affiliate_url ( 'https://amzn.to/4aY0HTi' ),
    listing_name   ( 'Chivolona 11PCS Mini Precision Screwdriver Set,Small Screwdriver Set for Repair Computer,Small Screw Driver Kit Electronics,Toys,Watch' ),
    item_price    ( 'AU$29.32' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Legion+Tools+Mini+Screwdriver+Set' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/404087542097?hash=item5e157e9151%3Ag%3AkWoAAOSwQgdjs13p&amdata=enc%3AAQAIAAAA0E7EvI7XqXa2GFWcbjkbKyKRy3Md%2BI4Sk56FwO5wfKwJAO8v2LWgSSyVST4wUGQ2u%2FaPyhbnoGfm1pnfnfT0pgPBwU9jAyyU9yTHI6sfk3Axbm9PeuDzJpTMxX%2FfRd8XHfTOrkS3F46nxJNPwk%2BwOOlmiDBDE%2Bmg2lXtfQ1bn7XkrIv42YMQibAx%2BZCp3DoWrjxCkbqaKoU2e4PQpjFBc%2FCiwLEoTba9oQ1gWekrY94Id1xIf0s9Fj8vjDI3Mm4lWuzz1JPWZ4Q3MFzPOZMINaM%3D%7Ctkp%3ABk9SR5adka-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/5Jk7A6' ),
    listing_name   ( '11 PC SMALL MINI PRECISION SCREWDRIVER SET FOR WATCH JEWELRY ELECTRONIC REPAIR' ),
    item_price    ( 'US$4.85' ),
    item_shipping ( 'US$15.55' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/385243527172?hash=item59b24db804%3Ag%3AFnYAAOSwv6hjeVrD&amdata=enc%3AAQAIAAAA8B47pDyBnSEKWvOETNrqRkRYIk5xEfhdCGw96qxp56OU7p4sZahxtvk8CoyD5t02OX3MtG%2BstFXnGM8aMW0uGuKjIIWjADBxS5xuVHsOqSlXyTbsunvcOnbGEdy3HigFwgdyse3tGgp90ZpI8FcshY0MLdNWdB81pTckBa%2FgYRm7xr%2FjGt0Fy46Pi0qKP%2BUCHgn33fO4xMP9Gw7Zem7FYtitpk1BkOqlVQmOWBTAKgeN8u4B1vLpCjVUoLrw13YAY1fJDCh3YxnwsTa9a9Auowu%2BY7%2BJuzjnrqMxqMTqBqTaP8Gd3CmVOu8z9ZT%2BojBM%2FA%3D%3D%7Ctkp%3ABk9SR5ydka-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/hMQDPp' ),
    listing_name   ( 'Small Mini Precision Screwdriver 11 PCs Set for Watch Jewelry Glasses Electronic' ),
    item_price    ( 'US$4.95' ),
    item_shipping ( 'US$15.55' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/386620155880?_trkparms=amclksrc%3DITM%26aid%3D1110006%26algo%3DHOMESPLICE.SIM%26ao%3D1%26asc%3D258818%26meid%3Db8eae697b6cb447fb984abd024048941%26pid%3D101875%26rk%3D4%26rkt%3D4%26sd%3D404087542097%26itm%3D386620155880%26pmt%3D1%26noa%3D0%26pg%3D4429486%26algv%3DSimplAMLv11WebTrimmedV3MskuWithLambda85KnnRecallV1V2V4ItemNrtInQueryAndCassiniVisualRankerAndBertRecallWithVMEV3CPCAuto%26brand%3DUnbranded&_trksid=p4429486.c101875.m1851&amdata=cksum%3A386620155880b8eae697b6cb447fb984abd024048941%7Cenc%3AAQAIAAABYObhgc4Nk8%252BdtAwOww4FKLaj%252FQ5qqgDlQCuqZA43WcPFUWDERCUugbbOk7XQv0JXlBfqCg2xKF3WcPghxGMFw2oSlXvfExEaMYr7I7LmrHcP6czY1wIMt0ORyKiCWt95xldincyyBx3g%252BNDW%252B%252FhWUgTaBhK6xAm%252BJIbCOMehu%252Bdwf4OyLqXTToH4cgxCkqsSqmoou2w88REWNkzWb8NRGxiUKFnRsPWmLHGHUYQ4zjgluWo1R50jNCDk6uI3YlKB6sY9cgwwtK3ZpmrjRJXT%252FaQ1ipr%252BZxDgJBRO8HJXNo5nmDV7200xOG6hKItLXRjzp%252Bxj5rl8M03H%252BSgtxo5XnzYQwC7CgIP59bo0WCU2YWoyLLSS6oTXnxdRmCMIIEbB%252Bp91s3138jlEW%252Bzv2NgjrJL6mKlfoZzbceOtKqRcnLDSMqV4iUcHQdLXQXgLp5%252BXIC8Jn4I%252B6GZtE2w5boU5j2M%253D%7Campid%3APL_CLK%7Cclp%3A4429486' ),
    affiliate_url ( 'https://ebay.us/nUGQlA' ),
    listing_name   ( 'Essential Precision Screwdriver Set for Watch Jewelry Electronics Repair' ),
    item_price    ( 'US$15.42' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Legion+Tools+Mini+Screwdriver+Set' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/273411870039?hash=item3fa89e0d57%3Ag%3Aw3UAAOSwi1hjhQNs&amdata=enc%3AAQAIAAAA8BeI%2B1zlnPHeQrBsx2ReALZboksYASmUVGSpW7jF7NGU8PEHzUH0%2B0AAS4xc%2FRf5swX0kVW75t9gS4ILsffm1Z%2FRnCkJBouyCEVuK9FgUPnzVcExKYLhzQt7Z190R86BDOrvo%2B%2BgexDB2zSGw3JfT9edrvxoU3o2g7v8pyXT33lMuzjX%2BfGT3%2Ff4FP5xkBCJtj4lc3n%2FVSqwnIL6B9UlkR9zD87ITuM7uKzzUUhcb2aZm0ujrIh6yQx%2FpOSd23aBh%2FnMwrffJEGeQEmT5QXBFaVxJ2HL7ObeOPHgsfLDF4o0C5QY5bEDpYAJkCA4YEShhA%3D%3D%7Ctkp%3ABk9SR96HqK-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/fq6Z4z' ),
    listing_name   ( '11 Precision Mini Screwdriver Set Phone Watch Jewellery Electronic Repair Tool' ),
    item_price    ( 'AU$4.95' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/114639571375?hash=item1ab10d09af%3Ag%3AOlUAAOSwz9xgDlJV&amdata=enc%3AAQAIAAAA8DJ9l6nxiDW5LgupHzpTHnBjljwzOGWZq1RmRb2RQVSuoftvITZ5hC7e%2BjcKkaH9LrnmUKz4liVpPmxwRiDW2xUZr236%2Bim769IqQLylWhZ8gkBoWRjVAs7E4Ccs8KN8kGYPy7kb%2Bgo4shVaskMzoKwJOfOuzICDSwSY1vU6E%2BgvCgjzey%2BIJj1eCwTkeD0tWWYswvUzFLSru20KVRMt%2Fedk8qqjaVtbdM3ngoWfJrHuCRFzmL9qaTMwxkwti0DpElt6e7kXo7zchk1NVCGJj98PZpOuz0FRu4ui%2BxZHDcv9H08uBuGEGmV0hiW08ncNHQ%3D%3D%7Ctkp%3ABk9SR-CHqK-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/ECGXjr' ),
    listing_name   ( 'Precision Mini Screwdriver Set 11pc Jeweller Laptop Phone Watch Repair Tool ' ),
    item_options  ( 'QTY: 1 set (11pcs)' ),
    item_price    ( 'AU$5.90' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Legion-Tools-Mini-Screwdriver-Set.html' ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/114639571375' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=22-07540-18516#/' ),
    order_id        ( '22-07540-18516' ),
    order_date      ( '31 Aug 2021' ),
    order_item_name ( 'Precision Mini Screwdriver Set 11pc Jeweller Laptop Phone Watch Repair Tool' ),
    order_options   ( 'QTY: 1 set (11pcs)' ),
    order_price     ( 'AU$4.75' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71fS8QH8WHL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name  ( 'Kaisi' ),
    model_name        ( 'Soldering Tools With' ),
    EquipmentFeature::DESOLDERING_PUMP,
    EquipmentFeature::AWL,
    EquipmentFeature::WIRE_BRUSH,
    EquipmentAttribute::HAND_TOOL,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Kaisi' ),
    equipment_type     ( 'Soldering Tools w/ Desoldering Pump' ),
    category          ( 'Hand Tool' ),
    category          ( 'Desoldering Pump' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Kaisi_Professional_Solder_Auxiliary_Tool' ),
  search_url    ( 'https://www.amazon.com/s?k=Kaisi+Soldering+Tools+w%2F+Desoldering+Pump&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/gp/product/B07S9K824H?ie=UTF8&psc=1&linkCode=sl1&tag=johnelliotv-20&linkId=efdd87da0fe779fcbe03d9374ae4351c&language=en_US&ref_=as_li_ss_tl' ),
    affiliate_url ( 'https://amzn.to/3Smgnsk' ),
    listing_name   ( 'Kaisi Professional Solder Auxiliary Tool 6 piece double-sided repair tool with Desoldering Wick & Desoldering Pump' ),
    item_price    ( 'US$11.91' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Kaisi+Soldering+Tools+w%2F+Desoldering+Pump&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B07S9K824H/ref=ppx_yo_dt_b_search_asin_title?ie=UTF8&psc=1' ),
    affiliate_url ( 'https://amzn.to/47Qo5iV' ),
    listing_name   ( 'Kaisi Professional Solder Auxiliary Tool 6 piece double-sided repair tool with Desoldering Wick & Desoldering Pump' ),
    item_price    ( 'AU$17.79' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Kaisi+Soldering+Tools+w%2F+Desoldering+Pump' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/133726693312?hash=item1f22bb67c0%3Ag%3AkbUAAOSwWI5kl6qN&amdata=enc%3AAQAIAAAA4NWZKZyR84hXBYgmLWtX0lTFU3I5pJKk2LWdHVCSS9FTVWBRMXONu9Jfc020IzDCmJOO5vm0yMwNkl7N5oXW%2BIOupiA4vt9425M0abFBoZSChXn9zKF%2F9Jw7mkkzAWkFtA3pDmIB5e0GoVhdwIeMUDntcmRt4IPa%2Fypgh5XzWDWcd%2FIQn7MXbWUe0rq7oL5JqeaJiQXvJ3rfToz3aemhMyw63c%2B7WdOcSvIG%2F%2BZ%2BaQ6cF0H0pVEWZHJtPar%2Bz6lnIJuovWLGKgEh4ORizstEozU5PWtVKtr6bxLoJETFlO%2Fv%7Ctkp%3ABk9SR8LH2K-hYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/Ro4nkw' ),
    listing_name   ( '11PC Soldering Kit w/ Desoldering Pump, ESD Tweezers, Assist Tools, Wick, Flux' ),
    item_price    ( 'US$11.39' ),
    item_shipping ( 'US$19.15' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Kaisi+Soldering+Tools+w%2F+Desoldering+Pump' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Kaisi-Soldering-Tools-with-Desoldering-Pump.html' ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B07S9K824H/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-7737759-6580645' ),
    order_id        ( '249-7737759-6580645' ),
    order_date      ( '14 August 2021' ),
    order_item_name ( 'Kaisi Professional Solder Auxiliary Tool 6 piece double-sided repair tool with Desoldering Wick & Desoldering Pump' ),
    order_price     ( 'AU$17.79' ),
    order_quantity  ( 1 ),
    order_gst_paid  ( 'AU$1.62' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://d297fd4gt7t5lv.cloudfront.net/file/2023-11-03-174935/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    EquipmentFeature::CRAFT_KNIFE_SET,
    EquipmentFeature::BLADE,
    EquipmentFeature::SCALPEL,
  ),
  /*
  equipment_info(
    equipment_type     ( 'Craft Knife Set' ),
    category          ( 'Knife/Blade' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Precision_Craft_Knife_Set_52pcs#Documentation' ),
  search_url    ( 'https://www.amazon.com/s?k=Craft+Knife+Set&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/Baijuyi-Exacto-Knife-Scrapbooking-Creativity/dp/B0CFVW3YZW/ref=sr_1_4?dib=eyJ2IjoiMSJ9.P4H0NKZCZi7XccGvcjacizg-wcRVLy3TLL6sXzCFZ2P_ykmxZjaprgMaa792w-poAWP8pMCq-a0MW2hxddDpba5-QapecxUys_3bMkt3I1Lztxi3qdtBGN8IImnhZ6a33ckXRbb-tnFgw7KMb0_FKQ.xhDIrKPn0LiXhF6z77BpVF9HQpnyRqOM3Kv-5TBFKzs&dib_tag=se&keywords=Craft%2BKnife%2BSet&qid=1705286461&sr=8-4&th=1' ),
    affiliate_url ( 'https://amzn.to/3RX5vQ6' ),
    listing_name   ( 'Baijuyi Exacto Knife, Upgrade Precision Craft Knife Hobby Knife Set with 30 pcs Hobby Knife Blades for Carving, DIY, Art, Cutting, Engraving, Scrapbooking, Stencil, Unlimited Creativity' ),
    item_options  ( 'Color: Green + Yellow + Blue' ),
    item_price    ( 'US$6.99' ),
    item_shipping ( 'US$17.60' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/72-PACK-Precision-Handles-Storage-Jetmore/dp/B08LKRTSCZ/ref=sr_1_5?dib=eyJ2IjoiMSJ9.P4H0NKZCZi7XccGvcjacizg-wcRVLy3TLL6sXzCFZ2P_ykmxZjaprgMaa792w-poAWP8pMCq-a0MW2hxddDpba5-QapecxUys_3bMkt3I1Lztxi3qdtBGN8IImnhZ6a33ckXRbb-tnFgw7KMb0_FKQ.xhDIrKPn0LiXhF6z77BpVF9HQpnyRqOM3Kv-5TBFKzs&dib_tag=se&keywords=Craft%2BKnife%2BSet&qid=1705286461&sr=8-5&th=1' ),
    affiliate_url ( 'https://amzn.to/3O56Inb' ),
    listing_name   ( 'Jetmore 72 Pack Exacto Knife Hobby Knife Kit, Precision Exacto Knife Set 2 Handles Knifes & 70pcs #11 Hobby Knife Blades with Storage Case, Craft Knife ​for DIY, Art Work, Cutting, Carving' ),
    item_options  ( 'Size: 94 Pack' ),
    item_price    ( 'US$5.99' ),
    item_shipping ( 'US$17.63' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=Craft+Knife+Set&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/FRAINBOWZ-Precision-Carving-Stainless-Woodworking/dp/B0CJMQGRGM/ref=sr_1_28?dib=eyJ2IjoiMSJ9.rD7OJXFbfAjU37Lykas38i-gjw6fokzTAh90O9qSTybiGoHLvjtPdHIocb5q1ds6VYwzS7CuNvaLby2kG7kigEgKqfPknFbTfINby55U3vo_iFyeQ_0G8R7AiPmrvnkuY7JAkr_z86d6z3qr30hqXQ.kADNgT_bRVTgxNHLr24tu6aYoGXii0VFGp6ARnof7IE&dib_tag=se&keywords=Craft+Knife+Set&qid=1705286694&sr=8-28' ),
    affiliate_url ( 'https://amzn.to/48Q1XpC' ),
    listing_name   ( 'FRAINBOWZ Precision Carving Craft Knife Set, 3pcs Stainless Steel Handles with Hard hat and 15 Blades, DIY Carving Knife Utility Knife Stainless Steel Carving Knife Manual Woodworking Pen Knife' ),
    item_price    ( 'AU$8.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Precision-Stainless-Carving-Scrapbooking-Sculpture/dp/B0C3D4GZJN/ref=sr_1_34?dib=eyJ2IjoiMSJ9.rD7OJXFbfAjU37Lykas38i-gjw6fokzTAh90O9qSTybiGoHLvjtPdHIocb5q1ds6VYwzS7CuNvaLby2kG7kigEgKqfPknFbTfINby55U3vo_iFyeQ_0G8R7AiPmrvnkuY7JAkr_z86d6z3qr30hqXQ.kADNgT_bRVTgxNHLr24tu6aYoGXii0VFGp6ARnof7IE&dib_tag=se&keywords=Craft+Knife+Set&qid=1705286694&sr=8-34' ),
    affiliate_url ( 'https://amzn.to/4aVXC64' ),
    listing_name   ( 'Precision Hobby Knife Kit,10 PCS Stainless Steel Carving Blades with Safety Cap and 2 Handles, Sharp Razor Knives Tool for Carving, Scrapbooking, Sculpture, DIY Art Work Cutting' ),
    item_price    ( 'AU$9.50' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/Precision-Carving-Stainless-Cutting-Sculpture/dp/B09N73FSKG/ref=sr_1_37?dib=eyJ2IjoiMSJ9.rD7OJXFbfAjU37Lykas38i-gjw6fokzTAh90O9qSTybiGoHLvjtPdHIocb5q1ds6VYwzS7CuNvaLby2kG7kigEgKqfPknFbTfINby55U3vo_iFyeQ_0G8R7AiPmrvnkuY7JAkr_z86d6z3qr30hqXQ.kADNgT_bRVTgxNHLr24tu6aYoGXii0VFGp6ARnof7IE&dib_tag=se&keywords=Craft+Knife+Set&qid=1705286694&sr=8-37' ),
    affiliate_url ( 'https://amzn.to/47Qofqx' ),
    listing_name   ( '2Pack Precision Carving Craft Knife Stainless Steel Metal Knives with Safety Cap and 10Pcs Knife Blades for DIY Art Work Cutting Sculpture Carving Knife and Hobby Knife etc.' ),
    item_price    ( 'AU$9.60' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Craft+Knife+Set' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/124604724418?var=425531393121' ),
    affiliate_url ( 'https://ebay.us/mpJPMK' ),
    listing_name   ( ' Precision Craft Knife Set 52pcs Professional Razor Sharp Knives for Art, Hobby,' ),
    item_price    ( 'US$11.30' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/224280062421?hash=item34382229d5%3Ag%3ATAUAAOSwN21f4H95&amdata=enc%3AAQAIAAAA4NLe0wbpMVYZsLRTxBpZgONxhDDRWOu1hcRfrYudPMnj29PCYdiRZ3x4ggGLaGyqgJWL2I5Ioeggw586i5qcrLRlYT%2B8d7uGhFyCOoPcWL6CGqDnIpVhKDGjAUuUZFKDquoKCqq%2Fx4Ss1iOOB4oMROf7HsFDB%2FFCpjgNZkAzn9CEnTfq%2BRAylO6tjQdbcvgjyhOaM2pk0sWGFXf%2BrN3lfhyZ%2BHd9bLb2SIyxvnRsLD4ONApnU%2FM%2FKCwArrp2N0pB05tFUvEgEW8pTX8U2K80qDeKCSi3PjqzrU37Z3xzis9T%7Ctkp%3ABk9SR4LfpbChYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/ROIrTq' ),
    listing_name   ( 'Precision Carving Craft Knife Set Hobby Knife Knives With Blades For Art Working' ),
    item_options  ( 'Type: 123pcs/set' ),
    item_price    ( 'US$14.49' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/335209528216?hash=item4e0c0b7b98%3Ag%3AcH0AAOSwwu1lo-c5&amdata=enc%3AAQAIAAAAwD7jGXUi3KqY%2FQ%2F%2FILdF4WcuBzJC6mcHAszpxEBYoYj%2Btpgz0MC%2FyRgmUXg37IJy0xyp0lnqXpi%2FvQHeC0nJJ8Q%2Fbz9zbvX7TTr9DBCg1G2TnGgaSjIwKdDXzmeKyTnGuFncUvo5JkbskMzULh0S1bkGCdy%2FRnvoECNTBY%2BAkkD1GjaLzgHCaZC4zfylVIYIAGcnC4XM5t2lY0DarfHf70NcPyKpeepqYBH%2BbKJS9O0FRZAHelHKtlFcyFNuy9SFsQ%3D%3D%7Ctkp%3ABk9SR4TfpbChYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/iIspaZ' ),
    listing_name   ( 'Kit Exacto Knife Set 40 Blade Refill Xacto For Leather Craft Pen Cutter Razor' ),
    item_price    ( 'US$13.50' ),
    item_shipping ( 'US$15.80' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/364576272119?_trkparms=amclksrc%3DITM%26aid%3D1110006%26algo%3DHOMESPLICE.SIM%26ao%3D1%26asc%3D258818%26meid%3Dcdc6dd7c049a433790af1f525edfb449%26pid%3D101875%26rk%3D3%26rkt%3D4%26sd%3D335209528216%26itm%3D364576272119%26pmt%3D1%26noa%3D0%26pg%3D4429486%26algv%3DSimplAMLv11WebTrimmedV3MskuWithLambda85KnnRecallV1V2V4ItemNrtInQueryAndCassiniVisualRankerAndBertRecallWithVMEV3CPCAuto&_trksid=p4429486.c101875.m1851&amdata=cksum%3A364576272119cdc6dd7c049a433790af1f525edfb449%7Cenc%3AAQAIAAABUObhgc4Nk8%252BdtAwOww4FKLaj%252FQ5qqgDlQCuqZA43WcPFUWDERCUugbbOk7XQv0JXlBfqCg2xKF3WcPghxGMFw2oSlXvfExEaMYr7I7LmrHcP6czY1wIMt0ORyKiCWt95xldincyyBx3g%252BNDW%252B%252FhWUgTaBhK6xAm%252BJIbCOMehu%252BdwoLdp%252B5XRr8xgTEqgTs8bbr%252B4Nq2sjryYIRLGMjEk6qrvxeVCPIO%252BFDUD3bOcsy9AY0mMQPuX9eI3wPQ9B3h3OpL%252FY%252FAVDPmKGVpQqHdW5qXMXWnFtQQqpD0%252B42DVJWLHZkiPYq0%252BZE8p8ogzDYR28vHp84q1IpeplDQVAI%252FvoLKI9uX5kgVW5Nllg3Hfhuj9SV%252BHd3Icy0aS%252B2efzXvOwaqP8cBIMrBcsnIjgbrUNPaDxmzirZU9j0rAB6txJtO37bhBqpXTELFy4mnf5wc1OQ%253D%253D%7Campid%3APL_CLK%7Cclp%3A4429486' ),
    affiliate_url ( 'https://ebay.us/OxJpJc' ),
    listing_name   ( 'Kit Exacto Kniife Set 74 Blade Refill Xacto For Leather Craft Pen Cutter Razor' ),
    item_price    ( 'US$11.20' ),
    item_shipping ( 'US$19.14' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Craft+Knife+Set' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/124604724418?var=425531393121' ),
    affiliate_url ( 'https://ebay.us/PB9s18' ),
    listing_name   ( ' Precision Craft Knife Set 52pcs Professional Razor Sharp Knives for Art, Hobby,' ),
    item_price    ( 'AU$16.96' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/355240431334?hash=item52b5facee6%3Ag%3AlNwAAOSw01JlZj28&amdata=enc%3AAQAIAAAAwEBlGUPoxefVh48DPR256Ot87cFRhkEmUgkJRdwh76nzVO8lKZ8Mg9QBtRcPg%2B1k54W2l%2Bq0yCD1LaEk1OmvxDAsb7zbEemFJy5S2D3ChTfMbaspcTyXEc2pvGmbT4%2Bz7Xs2bTsC1CT7QcGwscxZTkHfUh%2FyF8M8lWKMVJVspzod31rTL7QtEYirCytu1oAtiIPQ9VznqxuPmDVdmgfFHcwLPOPtLXQqOWcgG1vYFTxVUB%2BYOvGqtB5t2DRCyaA6Zg%3D%3D%7Ctkp%3ABk9SR6LtxbChYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/CloQxS' ),
    listing_name   ( 'Precision Craft Knife Set 52 Pieces Sharp for Art Modeling Architecture' ),
    item_price    ( 'AU$15.98' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/395082170131?hash=item5bfcbb7f13%3Ag%3AdVIAAOSwncJlhbuh&amdata=enc%3AAQAIAAAA4JZEnUW2bYC%2B2WgsLqI82ECpTIWplmvucg1NLPFbtU%2FBV%2FyKORf0hu3QPIz7FMS4AmXOdAEHW9%2BNaGNW5x74ItyYkfkhR8JZvxnH8gD387ZAY4lyipct2fL%2Fm0faCdrkNk6NgXB2M%2BlB5AzxpECQIC%2FM1Sf%2Bt17Knst%2FRkNwbUAiOf7zkVXiPYD8ZY9pP3Ksc0%2Fb51qq3yvRM6kpEyb1uaaLPNFbY5v7GUMfplT1obUkn8Uvz27hglOwMqZ2LZieFo3BVvfMSVXbGyWkXyP1V63xK2EkFyOoYfJPh55U86Dx%7Ctkp%3ABk9SR6LtxbChYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/mLBcmh' ),
    listing_name   ( '52x Precision Craft Knife Set Sharp Craft Tool for Stencil Fine Point Hobby' ),
    item_price    ( 'AU$16.04' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/175872621097?hash=item28f2d33a29%3Ag%3A4IoAAOSw4UJk5v7t&amdata=enc%3AAQAIAAAAwGm4oe3MyYOLZzPN1SrFGB%2BTH4H9eu13NaOtlP1X%2Br7LiKo8SXn2p6E7bWMBY0xDcpsfRTZNzjreUIQ%2Bm6Tb43IQjo2ESMqOZdyxAvmA1qEL8wjwaY4Tk1JFoRSExfA4Xq3IAB5qyuA2xx70NLx6WWADZmRgPUYkb%2B9aZwqfmy1lK8wIA3u%2Fp6PCmj6cO2b%2BrUZ922QbEKNCIuqr8gyvcV7Z6Rhd7K7tSqQsnODIqWQqQMHuVs55PWse0rLmg49%2BIQ%3D%3D%7Ctkp%3ABk9SR6LtxbChYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/UobA7t' ),
    listing_name   ( 'Precision Craft Knife Set Sharp Kit 52 Pieces for Scrapbooking Wood' ),
    item_price    ( 'AU$16.81' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Craft-Knife-Set.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006133570121.html?spm=a2g0o.detail.0.0.3543eaa5Xv7yDv&gps-id=pcDetailTopMoreOtherSeller&scm=1007.40000.327270.0&scm_id=1007.40000.327270.0&scm-url=1007.40000.327270.0&pvid=0c99c6dc-7674-4a34-9055-1d9256a62f3a&_t=gps-id:pcDetailTopMoreOtherSeller,scm-url:1007.40000.327270.0,pvid:0c99c6dc-7674-4a34-9055-1d9256a62f3a,tpp_buckets:668%232846%238107%231934&pdp_npi=4%40dis%21AUD%215.18%211.82%21%21%2124.53%218.59%21%402103081017052873059502447ef342%2112000035909311712%21rec%21AU%214385823938%21&utparam-url=scene%3ApcDetailTopMoreOtherSeller%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DeeoT4l' ),
    listing_name   ( 'Engraving Non-Slip Metal Knife Kit + 40/10pcs #11 Blades Cutter Craft Knives for Mobile Phone PCB Repair Hand Tools' ),
    item_options  ( 'Color: Blue Silver' ),
    item_price    ( 'AU$3.51' ),
    item_shipping ( 'AU$2.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005733410013.html?spm=a2g0o.detail.0.0.7f896eGF6eGFnF&gps-id=pcDetailTopMoreOtherSeller&scm=1007.40000.327270.0&scm_id=1007.40000.327270.0&scm-url=1007.40000.327270.0&pvid=793c8854-ce1c-45f6-b30a-617b2587612e&_t=gps-id:pcDetailTopMoreOtherSeller,scm-url:1007.40000.327270.0,pvid:793c8854-ce1c-45f6-b30a-617b2587612e,tpp_buckets:668%232846%238107%231934&pdp_npi=4%40dis%21AUD%215.25%211.84%21%21%2124.87%218.70%21%402103081017052873864744064ef342%2112000034587723382%21rec%21AU%214385823938%21&utparam-url=scene%3ApcDetailTopMoreOtherSeller%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DCSZ9sH' ),
    listing_name   ( 'Engraving Non-Slip Metal Knife Kit + 40/10pcs #11 Blades Cutter Craft Knives for Mobile Phone PCB Repair Hand Tools' ),
    item_options  ( 'Color: Blue Silver' ),
    item_price    ( 'AU$3.69' ),
    item_shipping ( 'AU$2.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005101557383.html?spm=a2g0o.detail.0.0.7f896eGF6eGFnF&gps-id=pcDetailTopMoreOtherSeller&scm=1007.40000.327270.0&scm_id=1007.40000.327270.0&scm-url=1007.40000.327270.0&pvid=793c8854-ce1c-45f6-b30a-617b2587612e&_t=gps-id:pcDetailTopMoreOtherSeller,scm-url:1007.40000.327270.0,pvid:793c8854-ce1c-45f6-b30a-617b2587612e,tpp_buckets:668%232846%238107%231934&pdp_npi=4%40dis%21AUD%214.99%211.64%21%21%2123.67%217.81%21%402103081017052873864744064ef342%2112000031664244963%21rec%21AU%214385823938%21&utparam-url=scene%3ApcDetailTopMoreOtherSeller%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dch9Lxj' ),
    listing_name   ( 'Engraving Non-Slip Metal Scalpel Knife Kit + 50/20/10/5pcs #11 Blades Cutter Craft Knives for Mobile Phone PCB Repair Hand Tools' ),
    item_options  ( 'Color: Blue Set' ),
    item_price    ( 'AU$4.50' ),
    item_shipping ( 'AU$2.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/124604724418?var=425531393121' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=01-07405-77015#/' ),
    order_id        ( '01-07405-77015' ),
    order_date      ( '30 Jul 2021' ),
    order_item_name ( 'Precision Craft Knife Set 52pcs Professional Razor Sharp Knives for Art, Hobby,' ),
    order_options   ( 'Colour: Style1' ),
    order_price     ( 'AU$17.37' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$5.05' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005608437382.html?spm=a2g0o.order_detail.order_detail_item.17.6388f19cK1vRes' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.59.21ef1802rFa7nI&orderId=8179314623893938' ),
    order_id        ( '8179314623893938' ),
    order_date      ( 'Nov 10, 2023' ),
    order_item_name ( '100/50pcs Knife DIY Wood Carving Fruit Food Scalpel Craft Sculpture Cutting Tool Metal Engraving Blades Knifes Wood Carving Disc' ),
    order_options   ( 'Color: 100pcs' ),
    order_price     ( 'AU$3.17' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$5.84' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sa1953af6b20c4af0a763185195d59d746/10X-Universal-Chip-clamp-micro-IC-clamp-SOP-SOIC-TSOP-MSOP-SSOP-SMD-IC-Test-Clip.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Sudake' ),
    model_name         ( 'SDK07' ),
    EquipmentFeature::TEST_CLIPS,
    EquipmentFeature::CLAW_TOOL,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Sudake' ),
    model_name         ( 'SDK07' ),
    equipment_type     ( 'Test Clips' ),
    category          ( 'Test Clip' ),
    category          ( 'Claw Tool' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/SDK07_test_clips' ),
  see_also      ( 'Sudake SDK08 Test Clips' ),
  search_url    ( 'https://www.amazon.com/s?k=Sudake+SDK07+Test+Clips&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=Sudake+SDK07+Test+Clips&s=price-asc-rank' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Sudake+SDK07+Test+Clips' ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Sudake+SDK07+Test+Clips' ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-Sudake-SDK07-Test-Clips.html' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005916891308.html?spm=a2g0o.productlist.main.15.30b720ddqt8Tah&algo_pvid=af3a1577-da19-487b-86a4-90ba2d2d1342&algo_exp_id=af3a1577-da19-487b-86a4-90ba2d2d1342-7&pdp_npi=4%40dis%21AUD%2111.81%2111.81%21%21%2155.98%2155.98%21%402103246617052881471941692ef76d%2112000034839677180%21sea%21AU%214385823938%21&curPageLogUid=hHG7HLuYuPfr&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DFXez5X' ),
    listing_name   ( '10X Universal Chip micro IC clamp SOP SOIC TSOP MSOP SSOP SOP8 SMD IC Test Clip pin Socket Adpter Programmer for logic analyzer' ),
    item_price    ( 'AU$11.81' ),
    item_shipping ( 'AU$2.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005003324309581.html?spm=a2g0o.productlist.main.55.30b720ddqt8Tah&algo_pvid=af3a1577-da19-487b-86a4-90ba2d2d1342&algo_exp_id=af3a1577-da19-487b-86a4-90ba2d2d1342-27&pdp_npi=4%40dis%21AUD%2118.55%2116.70%21%21%2112.23%2111.01%21%402103246617052881471941692ef76d%2112000025214313230%21sea%21AU%214385823938%21&curPageLogUid=05ug9Lf8ki2c&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DBYKw5b' ),
    listing_name   ( '10pcs Universal Chip micro IC clamp SOP SOIC TSOP MSOP SSOP SMD IC Test Clip pin Socket Adpter Programmer f/ logic analyzer' ),
    item_price    ( 'AU$16.70' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005767088642.html?spm=a2g0o.order_detail.order_detail_item.5.5672f19cdcof6V' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.71.21ef1802rFa7nI&orderId=8178005889643938' ),
    order_id        ( '8178005889643938' ),
    order_date      ( 'Oct 22, 2023' ),
    order_item_name ( '10X Universal Chip clamp micro IC clamp SOP SOIC TSOP MSOP SSOP SMD IC Test Clip pin Socket Adpter Programmer for logic analyzer' ),
    order_price     ( 'AU$15.41' ),
    order_quantity  ( 2 ),
    order_gst       ( 'AU$4.58' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005767088642.html?spm=a2g0o.order_detail.order_detail_item.5.7d60f19cvQRqRn' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.66.21ef1802rFa7nI&orderId=8178213770983938' ),
    order_id        ( '8178213770983938' ),
    order_date      ( 'Nov 2, 2023' ),
    order_item_name ( '10X Universal Chip clamp micro IC clamp SOP SOIC TSOP MSOP SSOP SMD IC Test Clip pin Socket Adpter Programmer for logic analyzer' ),
    order_price     ( 'AU$14.45' ),
    order_quantity  ( 3 ),
    order_shipping  ( 'AU$0.01' ),
    order_gst       ( 'AU$7.22' ),
    order_discount  ( 'AU$10.00' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S8ead2bfaa2dc443e93c82491dc33a2a2u/10pcs-x-Universal-Chip-IC-clamp-SOP-SOIC-TSOP-MSOP-SSOP-SMD-IC-Test-Clip-Socket.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Sudake' ),
    model_name         ( 'SDK08' ),
    EquipmentFeature::TEST_CLIPS,
    EquipmentFeature::CLAW_TOOL,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Sudake' ),
    model_name         ( 'SDK08' ),
    equipment_type     ( 'Test Clips' ),
    category          ( 'Test Clip' ),
    category          ( 'Claw Tool' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/SDK08_test_clips' ),
   see_also      ( 'Sudake SDK07 Test Clips' ),
 search_url    ( 'https://www.amazon.com/s?k=Sudake+SDK08+Test+Clips&s=price-asc-rank' ),
  search_url    ( 'https://www.amazon.com.au/s?k=Sudake+SDK08+Test+Clips&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/RESHUBO-10Pcs-SDK08-Electrical-Testing/dp/B0BFVVKSH7/ref=sr_1_9?dib=eyJ2IjoiMSJ9.liW9CnKI-eV2uSkPoeHcvLIlunIKxk5I2hk3u1dhyTUsVB702sJJA6pwtj28cg-OgZ3kY6iIIvCNpCyRBMWoEM8dj6KhXbU9cVg0jLVWEXNopttHkPF3-V4vQXEmEuWt4wwK08CrcXx5evAbOViA5A.VQleoQW4cxcNvEzxxkqvK_S9xs9fvOUnmVPFnnYqmgM&dib_tag=se&keywords=Sudake+SDK08+Test+Clips&qid=1705288357&sr=8-9' ),
    affiliate_url ( 'https://amzn.to/420nycT' ),
    listing_name   ( 'RESHUBO 10Pcs SDK08 Test SMD IC Test Hook Clips for Electrical Testing Ultra Small Test Chip' ),
    item_price    ( 'AU$21.74' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/ARMYJY-Electrical-Testing-assortment-electrical/dp/B0BRTSCC23/ref=sr_1_11?dib=eyJ2IjoiMSJ9.liW9CnKI-eV2uSkPoeHcvLIlunIKxk5I2hk3u1dhyTUsVB702sJJA6pwtj28cg-OgZ3kY6iIIvCNpCyRBMWoEM8dj6KhXbU9cVg0jLVWEXNopttHkPF3-V4vQXEmEuWt4wwK08CrcXx5evAbOViA5A.VQleoQW4cxcNvEzxxkqvK_S9xs9fvOUnmVPFnnYqmgM&dib_tag=se&keywords=Sudake+SDK08+Test+Clips&qid=1705288357&sr=8-11' ),
    affiliate_url ( 'https://amzn.to/3vwXucV' ),
    listing_name   ( 'ARMYJY SDK08 Test Clip SMD IC Test Hook Clips For Electrical Testing Ultra Small test assortment soic grabber electrical mini ultra clip pin' ),
    item_price    ( 'AU$31.59' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/ARMYJY-10Pcs-SDK08-Electrical-Testing/dp/B0B6VXLXSQ/ref=sr_1_13?dib=eyJ2IjoiMSJ9.liW9CnKI-eV2uSkPoeHcvLIlunIKxk5I2hk3u1dhyTUsVB702sJJA6pwtj28cg-OgZ3kY6iIIvCNpCyRBMWoEM8dj6KhXbU9cVg0jLVWEXNopttHkPF3-V4vQXEmEuWt4wwK08CrcXx5evAbOViA5A.VQleoQW4cxcNvEzxxkqvK_S9xs9fvOUnmVPFnnYqmgM&dib_tag=se&keywords=Sudake+SDK08+Test+Clips&qid=1705288357&sr=8-13' ),
    affiliate_url ( 'https://amzn.to/48QQHcD' ),
    listing_name   ( 'ARMYJY 10Pcs SDK08 Test Clip, SMD IC Test Hook Clips for Electrical Testing Test Chip' ),
    item_price    ( 'AU$36.69' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Sudake+SDK08+Test+Clips' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/275011465405?hash=item4007f5f0bd%3Ag%3AuMUAAOSwwSNhgTM2&amdata=enc%3AAQAIAAAA0GDKFH%2F3%2BFqtzK0TMmm4BKMTBMVxq5pPhWcZhHfKdcgcAf3Yv5dCdIOfRvrPdZmdZUiozdEqX4YB7j8p3F8hQgQU0gCNF0LU%2F19abpZHDzOfiGCiyhtbjBj6qiCAkibuBsDAEWtz8UJH%2FQ%2FikanQFTwlZB4qwno6SR6BT%2FUGvkdStoeylQUjmHUBh8SMafcvaU2Ih50zHcIs0UnT0PczP4TpXQyTvDXKU65KLqPzZhyrZA%2BG3ExeQGKmp7ayC9Jg6h19lXOKVjt6O%2BUj84E7ee0%3D%7Ctkp%3ABk9SR9zt7bGhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/KhaZGA' ),
    listing_name   ( '10Pcs SDK08 Test Clip SMD IC Test Hook Clips for Electrical Testing Ultra Small' ),
    item_price    ( 'US$12.99' ),
    item_shipping ( 'US$0.59' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/325838539494?hash=item4bdd7d8ae6%3Ag%3AZ-sAAOSwCwVlH7b8&amdata=enc%3AAQAIAAAA0F7xbxWAyoZxaMuyJpM%2FtVnAK5HMELXSAm0eHTswPF9vQp8KbZKrEfOXw9uLhtoODfKULf7vlRVXH2ldzWGX8CJpt6X83VSYjVEIW3nEgxbHNptKhbPARpxswJUyJXYWmDjqAIaI%2BfANzqX33UIJuUaZGOgRIbqlY9hUyUdWeBSjMihXvSnFrcXIExrik0O12nqWHR3m0jB9OEI8H24asS%2B3dDcO1HhyUGgTqa1po6bjaXR%2BWvjUZ%2Fe27YRujjkD6w1WrFtcrqCrvDTmsAmd934%3D%7Ctkp%3ABk9SR9zt7bGhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/J8RJYN' ),
    listing_name   ( '10Pcs SDK08 Test Clip SMD IC Test Hook Clips for Electrical Testing Ultra Small' ),
    item_price    ( 'US$12.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/175815197879?hash=item28ef6704b7%3Ag%3AvN4AAOSwW2pkr6R4&amdata=enc%3AAQAIAAAA8JV3riK2EJp92U9%2BHxZM6acAz41r%2F2%2BEjuNFYYsc0ij%2FZNf7XCbj%2FfjRN7d8Uhve3qpKPjfW2xmrrZE4ptd%2Bk3muTV59eNBbYPb9sjY3%2BgRRgCahzSCNoXcJiytj87eA8u4zp47GJ43wqej9B%2BV6d%2Fzn5Tq2qzk2itidXVcqNNyf5nAZWRFeolq2jlTGzJZPpmK8UnXmSvgTvYdMeMVJyZoMUoq1BNd2mPlfAAO%2FdO%2Ff2aL5NOjtrEk0BM553lYNesj3rDK9q1fgnP2C4zmgyZR%2F9rxREoEnOGtyeK9TtMEODjI%2BYkz7hhPupB7imhVJvQ%3D%3D%7Ctkp%3ABk9SR9zt7bGhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/7fCf7e' ),
    listing_name   ( 'SDK08 Test Clip Ultra Small Clip Chip Foot Clip Micro IC Clamp SOIC/TSSOP/TSOP/S' ),
    item_price    ( 'US$22.15' ),
    item_shipping ( 'US$25.87' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Sudake+SDK08+Test+Clips' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/145547659096?hash=item21e3510758%3Ag%3AL%7EIAAOSwGgBln9F4&amdata=enc%3AAQAIAAAA0NuzhSoU3c7wkrQN8sozGKaKPndfc4gJPxkekEOpHcU%2FwZjz3FUkBHCgAX4fccJr9azehanZ15fMMzWvmsb0CtRh3agb3EMTWGbnS6Umk3ZE3gu37vOHq4JVgk0ziRy9TyUL1lnCOZkgs%2BZkq8AHNEHidFOBhVKKBeTeGzsEeLm7QrC2sQT2Y9xW%2BUgsmKm0yUnUMDOA%2FSDXU%2B7GOgeJNRLmkYxG7ZG7Cd83SSUMhtpGmMVk%2FageED%2FXZ6UZjrAXnBNbu4HWUtC1MQO9tWBlr1U%3D%7Ctkp%3ABk9SR_DpgbKhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/R4Ov98' ),
    listing_name   ( '10pcs/set SDK08 Test Clips with Jumper Wires Ultra Small Clip 2A Chip Foot Clip' ),
    item_price    ( 'AU$20.59' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/404591547017?hash=item5e33891289%3Ag%3AnsUAAOSwW4ZlQwSH&amdata=enc%3AAQAIAAAA0EZiM%2BIQq3KvfYZ0Xv2yxCPl8ip3baTDASGI1bMK77kv8m%2FmrqNWWSnFBAJ5quU59beh7zGjoSMUHVtkhGtOKnGB%2FLNYDvo8jH%2FSSRjeg8xDzaSaH%2Fk5lJi6mwfPYiYVbBEmN1ODMn9yjMJTj%2BujqER%2Bxe2IiHFe%2FTvTx3S4RdKZp10TfGOHFRCCbWJjq%2F0DJWRy7p%2BONrZyCL2vpZZNheK7qQsoabepnJd4H%2BRNDg%2BcZPLyItQmMVU6hoYdjlAUYrfu2SeG2z5gFVG959DzaD8%3D%7Ctkp%3ABk9SR_DpgbKhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/wwEW9S' ),
    listing_name   ( '10Pcs SDK08 Test Clip SMD IC Test Hook Clips for Electrical Testing Small Size' ),
    item_price    ( 'AU$28.97' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/404723906916?hash=item5e3b6cb964%3Ag%3AmPsAAOSwCixllmT%7E&amdata=enc%3AAQAIAAAA8LzS9CdaHU0%2BgP8DsZ2t4i6qdAZG%2BivNwzDg%2BLIMHGxcVqMP%2BO2ouINRZhdXWsJ86T2DxdelWRnniTOHzlU%2F2VG8xjsoR%2F8fxY6W1Vi22D92Bha7JqQy4pGeDXv%2BlSUFFpYuq7ZnFwaUTwFU7HznaV0xh%2FHQaJftPwB6daUwGQCQukS5iT1cnixbKHXw7JD96nn9ntRTzl%2BhWpbl3SU5Yf2maSXrIJhD%2FF52rQ8B0mT%2F2OszTsfmNvHgwB8x8X%2FV7VKhpj0trj7f6cvnguEDzGKILONTuUF2RLIVfWi%2BaX72GqAGlY2t3Hwieq%2Fh%2F%2FYzBQ%3D%3D%7Ctkp%3ABk9SR_DpgbKhYw&LH_ItemCondition=1000' ),
    affiliate_url ( 'https://ebay.us/sHk8No' ),
    listing_name   ( '10pcs/set SDK08 Test Clips with Jumper Wires SMD Gripper Useful Micro IC Clamp' ),
    item_price    ( 'AU$19.69' ),
  ),
  search_url    ( 'https://www.aliexpress.com/w/wholesale-SDK08.html?spm=a2g0o.productlist.search.0' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006260112504.html?spm=a2g0o.productlist.main.5.520450497spotH&algo_pvid=4a2c2464-1cc9-42fe-92c8-071fe1694304&algo_exp_id=4a2c2464-1cc9-42fe-92c8-071fe1694304-2&pdp_npi=4%40dis%21AUD%2144.63%2112.06%21%21%2129.43%217.95%21%402103080617052888786831310e18d5%2112000036507908780%21sea%21AU%214385823938%21&curPageLogUid=9fa0Oq1lQm34&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DDB9kHT' ),
    listing_name   ( '10Pcs SDK08 Test Clip SMD IC Test Hook Clips For Electrical Testing Ultra Small Clip Test Chip' ),
    item_options  ( 'Color: Color Mixing' ),
    item_price    ( 'AU$12.06' ),
    item_shipping ( 'AU$6.11' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005499781012.html?spm=a2g0o.productlist.main.21.520450497spotH&algo_pvid=4a2c2464-1cc9-42fe-92c8-071fe1694304&algo_exp_id=4a2c2464-1cc9-42fe-92c8-071fe1694304-10&pdp_npi=4%40dis%21AUD%2120.03%2110.42%21%21%2113.21%216.87%21%402103080617052888786831310e18d5%2112000033323581314%21sea%21AU%214385823938%21&curPageLogUid=mT6UHsKeX3TG&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DnnQrM9' ),
    listing_name   ( '10Pcs SDK08 Test Clip SMD IC Test Hook Clips for Electrical Testing Ultra Small Clip Test Chip' ),
    item_price    ( 'AU$10.42' ),
    item_shipping ( 'AU$7.07' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005003629341329.html?spm=a2g0o.productlist.main.23.520450497spotH&algo_pvid=4a2c2464-1cc9-42fe-92c8-071fe1694304&algo_exp_id=4a2c2464-1cc9-42fe-92c8-071fe1694304-11&pdp_npi=4%40dis%21AUD%2118.38%2115.62%21%21%2112.12%2110.30%21%402103080617052888786831310e18d5%2112000026566022196%21sea%21AU%214385823938%21&curPageLogUid=dzIQhHQWjx90&utparam-url=scene%3Asearch%7Cquery_from%3A' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DmxM71J' ),
    listing_name   ( 'Retail 10Pcs SDK08 Test Clip SMD IC Test Hook Clips for Electrical Testing Ultra Small Clip Test Chip' ),
    item_price    ( 'AU$15.62' ),
    item_shipping ( 'AU$0.39' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005767169132.html?spm=a2g0o.order_detail.order_detail_item.3.5672f19cdcof6V' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.71.21ef1802rFa7nI&orderId=8178005889643938' ),
    order_id        ( '8178005889643938' ),
    order_date      ( 'Oct 22, 2023' ),
    order_item_name ( '10pcs x Universal Chip IC clamp SOP SOIC TSOP MSOP SSOP SMD IC Test Clip Socket Adpter Programmer for logic analyzer' ),
    order_price     ( 'AU$14.95' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$4.58' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005767169132.html?spm=a2g0o.order_detail.order_detail_item.3.7d60f19cvQRqRn' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.66.21ef1802rFa7nI&orderId=8178213770983938' ),
    order_id        ( '8178213770983938' ),
    order_date      ( 'Nov 2, 2023' ),
    order_item_name ( '10pcs x Universal Chip IC clamp SOP SOIC TSOP MSOP SSOP SMD IC Test Clip Socket Adpter Programmer for logic analyzer' ),
    order_price     ( 'AU$14.37' ),
    order_quantity  ( 2 ),
    order_shipping  ( 'AU$0.01' ),
    order_gst       ( 'AU$7.22' ),
    order_discount  ( 'AU$10.00' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://d297fd4gt7t5lv.cloudfront.net/file/2023-11-03-175245/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'Magnetic Claw' ),
    EquipmentFeature::PICKUP_TOOL,
    EquipmentFeature::MAGNETIC_PICKUP_TOOL,
    EquipmentFeature::CLAW_TOOL,
  ),
  /*
  equipment_info(
    equipment_type     ( 'Magnetic/Claw Pickup Tool' ),
    category          ( 'Magnetic Tool' ),
    category          ( 'Claw Tool' ),
    category          ( 'Pickup Tool' ),
    category          ( 'Hand Tool' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Pickup_Tool' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Magnetic%2FClaw+Pickup+Tool' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/334953198609?amdata=enc%3AAQAIAAAAkLzSwVxd0nO6Irnr8xkYDsZ2tpAN3jiu9V7n2VCgaI%2F7CL8tVUBM20GcVUoy5lmMwue4ri4TqTuzEI22HzbAKD6YE3BhRf9av7rx92VCiytsNRM1acIZO2oqAwgNu3dzQFqkZQ3m9%2Bn7YMrkT3UF0sGXEoK1%2BXflJOW9qrbhjI02NbMKtp7yqZdODTMIRUiZwg%3D%3D&mkcid=1&mkrid=711-53200-19255-0&siteid=0&campid=5339019639&customid=&toolid=20012&mkevt=1' ),
    affiliate_url ( 'https://ebay.us/6GYZFL' ),
    listing_name   ( 'Magnetic Pick Up Tool LED Light Magnet 4 Claw Flexible Telescopic Grabber 62cm' ),
    item_options  ( 'Choose: 1PC' ),
    item_price    ( 'US$11.90' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=Magnetic%2FClaw+Pickup+Tool' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/334953198609?amdata=enc%3AAQAIAAAAkLzSwVxd0nO6Irnr8xkYDsZ2tpAN3jiu9V7n2VCgaI%2F7CL8tVUBM20GcVUoy5lmMwue4ri4TqTuzEI22HzbAKD6YE3BhRf9av7rx92VCiytsNRM1acIZO2oqAwgNu3dzQFqkZQ3m9%2Bn7YMrkT3UF0sGXEoK1%2BXflJOW9qrbhjI02NbMKtp7yqZdODTMIRUiZwg%3D%3D&mkcid=1&mkrid=711-53200-19255-0&siteid=0&campid=5339019639&customid=&toolid=20012&mkevt=1' ),
    affiliate_url ( 'https://ebay.us/PcXmmW' ),
    listing_name   ( ' Magnetic Pick Up Tool LED Light Magnet 4 Claw Flexible Telescopic Grabber 62cm' ),
    item_options  ( 'Choose: 1PC' ),
    item_price    ( 'AU$8.36' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/51jz5T1nI+S._AC_SL1000_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'Telescopic' ),
    EquipmentFeature::MAGNETIC_PICKUP_TOOL,
    EquipmentFeature::MIRROR,
  ),
  /*
  equipment_info(
    equipment_type     ( 'Telescopic Magnetic Pickup Tool' ),
    category          ( 'Magnetic Tool' ),
    category          ( 'Telescopic Tool' ),
    category          ( 'Pickup Tool' ),
    category          ( 'Hand Tool' ),
    category          ( 'Mirror' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Telescopic_Magnetic_Pick_Up_Tool' ),
  search_url    ( 'https://www.amazon.com.au/gp/product/B093L7SKXK?ie=UTF8&psc=1&linkCode=sl1&tag=johnelliotv-22&linkId=e2002fc542f0c44f6ba6aa4b92f9792b&language=en_AU&ref_=as_li_ss_tl' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B093L7SKXK?ie=UTF8&psc=1&linkCode=sl1&tag=johnelliotv-22&linkId=e2002fc542f0c44f6ba6aa4b92f9792b&language=en_AU&ref_=as_li_ss_tl' ),
    affiliate_url ( 'https://amzn.to/3tVdzJe' ),
    listing_name   ( 'Telescopic Magnetic Pick Up & Swivel Inspection Mirror Set Round, Round Mirror Pen Style Magnet Auto Hand Tools' ),
    item_price    ( 'AU$12.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B093L7SKXK/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=503-0753830-5582241' ),
    order_id        ( '503-0753830-5582241' ),
    order_date      ( '25 July 2021' ),
    order_item_name ( 'Telescopic Magnetic Pick Up & Swivel Inspection Mirror Set Round, Round Mirror Pen Style Magnet Auto Hand Tools' ),
    order_price     ( 'AU$12.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71Brd3NkZ7L._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name  ( 'ZZWS' ),
    EquipmentFeature::BOOK_HOLDER,
    EquipmentFeature::LED_LIGHT,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'ZZWS' ),
    equipment_type     ( 'Book Holder' ),
    category          ( 'Book Holder' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/ZZWS_Book_Holder' ),
  search_url    ( 'https://www.amazon.com/s?k=ZZWS+Book+Holder&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/gp/product/B08JGVHQQV?ie=UTF8&th=1&linkCode=sl1&tag=johnelliotv-20&linkId=360c56a335856923db7deef51f747143&language=en_US&ref_=as_li_ss_tl' ),
    affiliate_url ( 'https://amzn.to/3TZVOTq' ),
    listing_name   ( 'ZZWS Book Stand for Reading with Light Adjustable Book Holder Stand Reading Stands Flip Page by One Hand Portable Desktop Book Stands for Thick Books Textbook Cookbook Document Magazine (Black)' ),
    item_options  ( 'Color: 01-black With Light' ),
    item_price    ( 'US$26.99' ),
    item_shipping ( 'US$22.38' ),
  ),
  search_url    ( 'https://www.amazon.com.au/s?k=ZZWS+Book+Holder&s=price-asc-rank' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B08JGVHQQV?ie=UTF8&th=1&linkCode=sl1&tag=johnelliotv-20&linkId=360c56a335856923db7deef51f747143&language=en_US&ref_=as_li_ss_tl' ),
    affiliate_url ( 'https://amzn.to/47A46Vd' ),
    listing_name   ( 'ZZWS Book Stand with Light Adjustable Book Holders for Reading Hands Free Textbook Stand for Cookbook Law Book Music Books Portable Bookstand with Page Clips Gift for Booklovers' ),
    item_price    ( 'AU$60.59' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B08JGVHQQV/ref=ppx_od_dt_b_asin_title_s00?ie=UTF8&th=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=250-5842685-4851053' ),
    order_id        ( '250-5842685-4851053' ),
    order_date      ( '28 May 2022' ),
    order_item_name ( 'ZZWS Book Stand with Light Adjustable Book Holders for Reading Hands Free Textbook Stand for Cookbook Law Book Music Books Portable Bookstand with Page Clips Gift for Booklovers' ),
    order_price     ( 'AU$60.59' ),
    order_quantity  ( 1 ),
    order_gst_paid  ( 'AU$5.51' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sb97dd194f9b640a39804d3b8e1a75354S/Digital-Voltmeter-Ammeter-DC-100V-10A-Amp-Voltage-Current-Meter-Tester-0-28-Inch-Dual-LED.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    EquipmentFeature::DIGITAL_METER,
    EquipmentFeature::VOLTMETER_DC,
    EquipmentFeature::AMMETER_DC,
  ),
  /*
  equipment_info(
    equipment_type     ( 'Digital Meter' ),
    category          ( 'Voltmeter' ),
    category          ( 'Ammeter' ),
    category          ( 'Meter' ),
  ),
  */
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005631605113.html' ),
    listing_name   ( 'Digital Voltmeter Ammeter DC 100V 10A Amp Voltage Current Meter Tester 0.28 Inch Dual LED Display Panel with Connect Wires' ),
    item_price    ( 'AU$5.06' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005631605113.html?spm=a2g0o.order_detail.order_detail_item.9.7f2cf19cvKNfqL' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.15.8fbd1802tGdk33&orderId=8178371272723938' ),
    order_id        ( '8178371272723938' ),
    order_date      ( 'Oct 21, 2023' ),
    order_item_name ( 'Digital Voltmeter Ammeter DC 100V 10A Amp Voltage Current Meter Tester 0.28 Inch Dual LED Display Panel with Connect Wires' ),
    order_options   ( 'Color: Red-Blue' ),
    order_price     ( 'AU$3.20' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$4.57' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005631605113.html?spm=a2g0o.order_detail.order_detail_item.11.21a0f19cSCXBkn' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.1.8fbd1802tGdk33&orderId=8179314623893938' ),
    order_id        ( '8179314623893938' ),
    order_date      ( 'Nov 10, 2023' ),
    order_item_name ( 'Digital Voltmeter Ammeter DC 100V 10A Amp Voltage Current Meter Tester 0.28 Inch Dual LED Display Panel with Connect Wires' ),
    order_options   ( 'Color: Red-Blue' ),
    order_price     ( 'AU$3.17' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$5.84' ),
  ),
);

equipment(
  equipment_date( '2024-01-15' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S9404032dc66545d298486ca1d7c15622A/100pcs-Heat-Shrink-Wire-Connectors-Red-Heat-Shrink-AWG-22-To-18-Butt-Electrical-Connectors-Tinned.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( '100pcs Heat Shrink' ),
    EquipmentFeature::WIRE_CONNECTORS,
    EquipmentFeature::HEAT_SHRINK,
  ),
  /*
  equipment_info(
    model_name        ( '100pcs' ),
    equipment_type     ( 'Heat Shrink Wire Connectors' ),
    category          ( 'Heat Shrink' ),
    category          ( 'Connector' ),
  ),
  */
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005209348279.html' ),
    listing_name   ( '100pcs Heat Shrink Wire Connectors Red Heat Shrink AWG 22 To 18 Butt Electrical Connectors Tinned Solder Sealed Terminals' ),
    item_options  ( 'Color: G548C 100pcs red' ),
    item_price    ( 'AU$5.46' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005209348279.html?spm=a2g0o.order_detail.order_detail_item.15.21a0f19cl2uJzd' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.1.8fbd1802tGdk33&orderId=8179314623893938' ),
    order_id        ( '8179314623893938' ),
    order_date      ( 'Nov 10, 2023' ),
    order_item_name ( '100pcs Heat Shrink Wire Connectors Red Heat Shrink AWG 22 To 18 Butt Electrical Connectors Tinned Solder Sealed Terminals' ),
    order_options   ( 'Color: G548C 100pcs red' ),
    order_price     ( 'AU$3.17' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$5.84' ),
  ),
);

equipment(
  equipment_date( '2024-01-16' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sf809a2dbbcda44c7952561a77a235c84l/300pcs-Box-Solder-Sealed-Wire-Connectors-Heat-Shrink-Solder-Butt-Connectors-Solder-Connector-Kit-Automotive-Marine.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( '300pcs Heat Shrink' ),
    EquipmentFeature::WIRE_CONNECTORS,
    EquipmentFeature::HEAT_SHRINK,
  ),
  /*
  equipment_info(
    model_name        ( '300pcs' ),
    equipment_type     ( 'Heat Shrink Wire Connectors' ),
    category          ( 'Heat Shrink' ),
    category          ( 'Connector' ),
  ),
  */
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005600885714.html' ),
    listing_name   ( '300pcs Box Solder Sealed Wire Connectors Heat Shrink Solder Butt Connectors Solder Connector Kit Automotive Marine Insulation' ),
    item_options  ( 'Color: 300pcs' ),
    item_price    ( 'AU$8.78' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005600885714.html?spm=a2g0o.order_detail.order_detail_item.13.21a0f19ctbIm1h' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.1.8fbd1802tGdk33&orderId=8179314623893938' ),
    order_id        ( '8179314623893938' ),
    order_date      ( 'Nov 10, 2023' ),
    order_item_name ( '300pcs Box Solder Sealed Wire Connectors Heat Shrink Solder Butt Connectors Solder Connector Kit Automotive Marine Insulation' ),
    order_options   ( 'Color: 300pcs' ),
    order_price     ( 'AU$4.77' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$5.84' ),
  ),
);

equipment(
  equipment_date( '2024-01-16' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S11d7167b4f3f4aa78ea46020103ee6fbG/230-Pcs-XH2-54-2p-3p-4p-5pin-2-54mm-Pitch-Terminal-Male-And-Female-Housing.jpg_.webp' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.jst.com/' ),
      link_text       ( 'JST' ),
    ),
    manufacturer_link (
      link_href       ( 'https://www.jst.com/wp-content/uploads/2021/01/eXH.pdf' ),
      link_text       ( 'XH Connector (PDF)' ),
    ),
    manufacturer_name  ( 'JST' ),
    model_name         ( 'XH2.54' ),
    EquipmentFeature::CONNECTOR_KIT,
    EquipmentConnectivity::XH2_54,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'JST' ),
    model_name         ( 'XH2.54' ),
    equipment_type     ( 'Connector Kit' ),
    category          ( 'XH2.54' ),
    category          ( 'Connector' ),
    manufacturer_link (
      link_href       ( 'https://www.jst.com/' ),
      link_text       ( 'JST' ),
    ),
    manufacturer_link (
      link_href       ( 'https://www.jst.com/wp-content/uploads/2021/01/eXH.pdf' ),
      link_text       ( 'XH Connector (PDF)' ),
    ),
  ),
  */
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005183951296.html' ),
    listing_name   ( '230 Pcs XH2.54 2p 3p 4p 5pin 2.54mm Pitch Terminal Male And Female Housing Kit Pin Connector Terminal Connector Kit' ),
    item_options  ( 'Color: 230pcs G853' ),
    item_price    ( 'AU$4.18' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005183951296.html?spm=a2g0o.order_detail.order_detail_item.11.1179f19cSqdWAj' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.298.8fbd1802tGdk33&orderId=8177606027433938' ),
    order_id        ( '8177606027433938' ),
    order_date      ( 'Oct 20, 2023' ),
    order_item_name ( '230pcs XH2.54 2p3p4p5 Pin 2.54mm Spacing Terminal Kit Shell Pin Seat JST Connector JC3 - Terminal Kit Electronic Components' ),
    order_options   ( 'Color: 230pcs G853' ),
    order_price     ( 'AU$3.20' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$3.92' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005183951296.html?spm=a2g0o.order_detail.order_detail_item.3.21a0f19c55QE0w' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.1.8fbd1802tGdk33&orderId=8179314623893938' ),
    order_id        ( '8179314623893938' ),
    order_date      ( 'Nov 10, 2023' ),
    order_item_name ( '230pcs XH2.54 2p3p4p5 Pin 2.54mm Spacing Terminal Kit Shell Pin Seat JST Connector JC3 - Terminal Kit Electronic Components' ),
    order_options   ( 'Color: 230pcs G853' ),
    order_price     ( 'AU$3.17' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$5.84' ),
  ),
);

equipment(
  equipment_date( '2024-01-16' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S18dc215c358343d6aebd972e55a50e24A/Car-Audio-Disassembly-Tool-Stainless-Steel-PryClip-Rocker-Crowbar-Bar-Door-Panel-Disassembly-Pry-Panel-Interior.png_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    EquipmentFeature::CROWBAR,
  ),
  /*
  equipment_info(
    equipment_type     ( 'Crowbar' ),
    category          ( 'Crowbar' ),
    category          ( 'Hand Tool' ),
  ),
  */
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004441856320.html' ),
    listing_name   ( 'Car Audio Disassembly Tool Stainless Steel PryClip Rocker Crowbar Bar Door Panel Disassembly Pry Panel Interior' ),
    item_options  ( 'Color: 1pc' ),
    item_price    ( 'AU$7.60' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005004441856320.html?spm=a2g0o.order_detail.order_detail_item.7.6c42f19cIXA78n' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.305.8fbd1802tGdk33&orderId=8179206442443938' ),
    order_id        ( '8179206442443938' ),
    order_date      ( 'Nov 10, 2023' ),
    order_item_name ( 'Car Audio Disassembly Tool Stainless Steel PryClip Rocker Crowbar Bar Door Panel Disassembly Pry Panel Interior' ),
    order_options   ( 'Color: 1pc' ),
    order_price     ( 'AU$3.17' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$5.28' ),
  ),
);

equipment(
  equipment_date( '2024-01-16' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S6b37b041ab664ed093b1f2bd703446f7u/3PC-Hexagonal-Quick-Release-Self-locking-Extension-Rod-Electric-Drill-Driver-Quick-Transfer-Rod-Screwdriver-Extension.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    EquipmentFeature::DRILL_EXTENSION,
    EquipmentFeature::DRILL_BIT_EXTENSION,
  ),
  /*
  equipment_info(
    equipment_type     ( 'Drill Extension' ),
    category          ( 'Drill Extension' ),
    category          ( 'Accessory' ),
    category          ( 'Attachment' ),
  ),
  */
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005566480825.html' ),
    listing_name   ( '3PC Hexagonal Quick Release Self-locking Extension Rod Electric Drill Driver Quick Transfer Rod Screwdriver Extension Rod Tool' ),
    item_options  ( 'Color: 60-150mm set; Number of Pieces: 3pc' ),
    item_price    ( 'AU$8.84' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005566480825.html?spm=a2g0o.order_detail.order_detail_item.3.6c42f19c2LHeAU' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.305.8fbd1802tGdk33&orderId=8179206442443938' ),
    order_id        ( '8179206442443938' ),
    order_date      ( 'Nov 10, 2023' ),
    order_item_name ( '3PC Hexagonal Quick Release Self-locking Extension Rod Electric Drill Driver Quick Transfer Rod Screwdriver Extension Rod Tool' ),
    order_options   ( 'Color: 60-150mm set' ),
    order_price     ( 'AU$3.17' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$5.28' ),
  ),
);

equipment(
  equipment_date( '2024-01-16' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sbd26149f448543319f6b7703326600d3t/1pc-8lb-Orange-Red-Handle-Magnetic-Pickup-Stainless-Steel-Antenna-Retractable-Suction-Iron-Rod-Strong-Magnetic.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'Orange Telescopic' ),
    EquipmentFeature::MAGNETIC_PICKUP_TOOL,
    EquipmentFeature::TELESCOPIC_PICKUP_TOOL,
  ),
  /*
  equipment_info(
    equipment_type     ( 'Telescopic Magnet' ),
    category          ( 'Telescopic Tool' ),
    category          ( 'Magnetic Tool' ),
    category          ( 'Hand Tool' ),
  ),
  */
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005557294461.html' ),
    listing_name   ( '1pc 8lb Orange Red Handle Magnetic Pickup Stainless Steel Antenna Retractable Suction Iron Rod Strong Magnetic Suction Rod Tools' ),
    item_options  ( 'Color: Yellow' ),
    item_price    ( 'AU$6.65' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005557294461.html?spm=a2g0o.order_detail.order_detail_item.17.6c42f19c09THVT' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.305.8fbd1802tGdk33&orderId=8179206442443938' ),
    order_id        ( '8179206442443938' ),
    order_date      ( 'Nov 10, 2023' ),
    order_item_name ( '1pc 8lb Orange Red Handle Magnetic Pickup Stainless Steel Antenna Retractable Suction Iron Rod Strong Magnetic Suction Rod Tools' ),
    order_options   ( 'Color: Yellow' ),
    order_price     ( 'AU$3.17' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$5.28' ),
  ),
);

equipment(
  equipment_date( '2024-01-16' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S2f0dbbafa0474ebb99082ce7586215bd7/22-In-1-Multifunctional-Disassembly-Tool-Mobile-Phone-iPad-Laptop-Screwdriver-Maintenance-Kit-Repair-Tools-Opening.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    EquipmentFeature::SPUDGERS,
    EquipmentFeature::BOX_OPENER,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH000,
    EquipmentFeature::TRI_POINT_Y_SCREWDRIVER_Y000,
    EquipmentFeature::PENTALOBE_SCREWDRIVER_P2,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL1_5,
    EquipmentFeature::TORX_SCREWDRIVER_T2,
  ),
  /*
  equipment_info(
    equipment_type     ( 'Spudgers' ),
    category          ( 'Spudger' ),
    category          ( 'Hand Tool' ),
  ),
  */
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005561010038.html' ),
    listing_name   ( '22 In 1 Multifunctional Disassembly Tool Mobile Phone iPad Laptop Screwdriver Maintenance Kit Repair Tools Opening Set For Hand' ),
    item_options  ( 'Color: GOLD' ),
    item_price    ( 'AU$14.33' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005561010038.html?spm=a2g0o.order_detail.order_detail_item.19.6c42f19ckFPFho' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.305.8fbd1802tGdk33&orderId=8179206442443938' ),
    order_id        ( '8179206442443938' ),
    order_date      ( 'Nov 10, 2023' ),
    order_item_name ( '22 In 1 Multifunctional Disassembly Tool Mobile Phone iPad Laptop Screwdriver Maintenance Kit Repair Tools Opening Set For Hand' ),
    order_options   ( 'Color: GOLD' ),
    order_price     ( 'AU$3.17' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$5.28' ),
  ),
);

equipment(
  equipment_date( '2024-01-16' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sfbc74765a3324ebea5e98898dc5e29ebJ/Telescopic-Pickup-Magnetic-Iron-Rod-Household-Automotive-Repair-And-Inspection-Tool-Strong-Magnetic-Metal-Screw-Suction.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'Telescopic Magnetic Pickup With' ),
    EquipmentFeature::LIGHT,
    EquipmentFeature::TELESCOPIC_PICKUP_TOOL,
    EquipmentFeature::MAGNETIC_PICKUP_TOOL,
    EquipmentFeature::LED_LIGHT,
  ),
  /*
  equipment_info(
    equipment_type     ( 'Telescopic Magnetic Pickup w/ Light' ),
    category          ( 'Telescopic Tool' ),
    category          ( 'Magnetic Tool' ),
    category          ( 'Torch/Light' ),
  ),
  */
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005943657824.html' ),
    listing_name   ( 'Telescopic Pickup Magnetic Iron Rod Household Automotive Repair And Inspection Tool Strong Magnetic Metal Screw Suction Rod' ),
    item_options  ( 'Color: Magnetic Rod' ),
    item_price    ( 'AU$8.29' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005943657824.html?spm=a2g0o.order_detail.order_detail_item.7.3be8f19cjdBYCt' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.312.8fbd1802tGdk33&orderId=8179314623893938' ),
    order_id        ( '8179314623893938' ),
    order_date      ( 'Nov 10, 2023' ),
    order_item_name ( 'Telescopic Pickup Magnetic Iron Rod Household Automotive Repair And Inspection Tool Strong Magnetic Metal Screw Suction Rod' ),
    order_options   ( 'Color: Magnetic Rod' ),
    order_price     ( 'AU$3.17' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$5.84' ),
  ),
);

equipment(
  equipment_date( '2024-01-16' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S3f7538ec8ffa4e3c88fbf618a20d488eJ/100-50pcs-Knife-DIY-Wood-Carving-Fruit-Food-Scalpel-Craft-Sculpture-Cutting-Tool-Metal-Engraving-Blades.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'Knife' ),
    EquipmentFeature::BLADES,
  ),
  /*
  equipment_info(
    equipment_type     ( 'Knife Blades' ),
    category          ( 'Knife/Blade' ),
  ),
  */
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005608437382.html' ),
    listing_name   ( '100/50pcs Knife DIY Wood Carving Fruit Food Scalpel Craft Sculpture Cutting Tool Metal Engraving Blades Knifes Wood Carving Disc' ),
    item_options  ( 'Color: 100pcs' ),
    item_price    ( 'AU$6.64' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005608437382.html?spm=a2g0o.order_detail.order_detail_item.17.3be8f19cgVZfzO' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.312.8fbd1802tGdk33&orderId=8179314623893938' ),
    order_id        ( '8179314623893938' ),
    order_date      ( 'Nov 10, 2023' ),
    order_item_name ( '100/50pcs Knife DIY Wood Carving Fruit Food Scalpel Craft Sculpture Cutting Tool Metal Engraving Blades Knifes Wood Carving Disc' ),
    order_options   ( 'Color: 100pcs' ),
    order_price     ( 'AU$3.17' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$5.84' ),
  ),
);

equipment(
  equipment_date( '2024-01-16' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sdb463fd4cf7e4498b655cfc47a8934666/100pcs-Waterproof-Solder-Seal-Heat-Connector-Shrink-Butt-Connectors-Lug-Terminals-Electrical-Wire-Car-Insulated-Terminal.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'Heat Shrink' ),
    EquipmentFeature::WIRE_CONNECTORS,
    EquipmentFeature::HEAT_SHRINK,
  ),
  /*
  equipment_info(
    equipment_type     ( 'Heat Shrink Wire Connectors' ),
    category          ( 'Heat Shrink' ),
    category          ( 'Connector' ),
  ),
  */
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005585832638.html' ),
    listing_name   ( '100pcs Waterproof Solder Seal Heat Connector Shrink Butt Connectors Lug Terminals Electrical Wire Car Insulated Terminal' ),
    item_options  ( 'Color: 100PCs' ),
    item_price    ( 'AU$7.23' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005585832638.html?spm=a2g0o.order_detail.order_detail_item.5.5d4cf19c0gIHgw' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.319.8fbd1802tGdk33&orderId=8177606027433938' ),
    order_id        ( '8177606027433938' ),
    order_date      ( 'Oct 20, 2023' ),
    order_item_name ( '100pcs Waterproof Solder Seal Heat Connector Shrink Butt Connectors Lug Terminals Electrical Wire Car Insulated Terminal' ),
    order_options   ( 'Color: 100PCs' ),
    order_price     ( 'AU$3.20' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$3.92' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005585832638.html?spm=a2g0o.order_detail.order_detail_item.5.3be8f19cUJXUb9' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.312.8fbd1802tGdk33&orderId=8179314623893938' ),
    order_id        ( '8179314623893938' ),
    order_date      ( 'Nov 10, 2023' ),
    order_item_name ( '100pcs Waterproof Solder Seal Heat Connector Shrink Butt Connectors Lug Terminals Electrical Wire Car Insulated Terminal' ),
    order_options   ( 'Color: 100PCs' ),
    order_price     ( 'AU$3.17' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$5.84' ),
  ),
);

equipment(
  equipment_date( '2024-01-16' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sa9ec9a8ef9124a78b3f6f47c4b00d4b53/2-54mm-XH-Connector-Socket-Pre-crimped-Cable-Wire-2-3-4-5-6-7-Pin.jpg_.webp' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.jst.com/' ),
      link_text       ( 'JST' ),
    ),
    manufacturer_link (
      link_href       ( 'https://www.jst.com/wp-content/uploads/2021/01/eXH.pdf' ),
      link_text       ( 'XH Connector (PDF)' ),
    ),
    manufacturer_name  ( 'JST' ),
    model_name         ( 'XH2.54 Pre-crimped' ),
    EquipmentFeature::CONNECTOR_KIT,
    EquipmentFeature::CABLE,
    EquipmentAttribute::PRE_CRIMPED,
    EquipmentConnectivity::XH2_54,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'JST' ),
    model_name         ( 'XH2.54' ),
    equipment_type     ( 'Pre-crimped Connector Kit' ),
    category          ( 'XH2.54' ),
    category          ( 'Connector' ),
    category          ( 'Pre-crimped' ),
    manufacturer_link (
      link_href       ( 'https://www.jst.com/' ),
      link_text       ( 'JST' ),
    ),
    manufacturer_link (
      link_href       ( 'https://www.jst.com/wp-content/uploads/2021/01/eXH.pdf' ),
      link_text       ( 'XH Connector (PDF)' ),
    ),
  ),
  */
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006126557275.html' ),
    listing_name   ( '2.54mm XH Connector Socket + Pre-crimped Cable Wire 2/3/4/5/6/7 Pin Housing JST Adapter Cable Male Female for JST-XH Connector' ),
    item_options  ( 'Color: with box' ),
    item_price    ( 'AU$10.92' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006126557275.html?spm=a2g0o.order_detail.order_detail_item.19.3be8f19cXLYwOR' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.312.8fbd1802tGdk33&orderId=8179314623893938' ),
    order_id        ( '8179314623893938' ),
    order_date      ( 'Nov 10, 2023' ),
    order_item_name ( '2.54mm XH Connector Socket Kit with Pre-Crimped Cable Wire 2/3/4/5/6/7 Pin Housing JST Adapter Cable Male and Female Compatible' ),
    order_options   ( 'Color: with box' ),
    order_price     ( 'AU$6.37' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$5.84' ),
  ),
);

equipment(
  equipment_date( '2024-01-16' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S050b8aeeddae41fda1bb2e056d6d9be1V/4Pcs-160mm-Car-Auto-Vehicle-Oil-Seal-Screwdrivers-Set-O-Ring-Gasket-Puller-Remover-Pick-Hooks.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'Multifunction' ),
    EquipmentFeature::HOOK_TOOLS,
    EquipmentAttribute::HAND_TOOL,
  ),
  /*
  equipment_info(
    equipment_type     ( 'Multifunction Hooks' ),
    category          ( 'Hook' ),
    category          ( 'Hand Tool' ),
  ),
  */
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005277090135.html' ),
    listing_name   ( '4Pcs 160mm Car Auto Vehicle Oil Seal Screwdrivers Set O Ring Gasket Puller Remover Pick Hooks Multifunction Tools' ),
    item_options  ( 'Color: M-302' ),
    item_price    ( 'AU$7.25' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005277090135.html?spm=a2g0o.order_detail.order_detail_item.9.3677f19c7rcIw8' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.326.8fbd1802tGdk33&orderId=8179206442443938' ),
    order_id        ( '8179206442443938' ),
    order_date      ( 'Nov 10, 2023' ),
    order_item_name ( '4Pcs 160mm Car Auto Vehicle Oil Seal Screwdrivers Set O Ring Gasket Puller Remover Pick Hooks Multifunction Tools' ),
    order_options   ( 'Color: M-302' ),
    order_price     ( 'AU$4.77' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$5.28' ),
  ),
);

equipment(
  equipment_date( '2024-01-16' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sa1e2a2601f1a497cb2be2b9e2786fd26S/1PC-Stainless-Steel-Cosmetic-Storage-Tray-Tattoo-Equipment-Tray-Doctor-Surgery-Dental-Tray-Fake-Nail-Tray.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    EquipmentFeature::STAINLESS_STEEL_TRAY,
  ),
  /*
  equipment_info(
    equipment_type     ( 'Stainless Steel Tray' ),
    category          ( 'Tray' ),
  ),
  */
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005100436804.html' ),
    listing_name   ( '1PC Stainless Steel Cosmetic Storage Tray Tattoo Equipment Tray Doctor Surgery Dental Tray Fake Nail Tray Tool' ),
    item_options  ( 'Color: Silver' ),
    item_price    ( 'AU$7.28' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005100436804.html?spm=a2g0o.order_detail.order_detail_item.13.3677f19cOaNqZb' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.326.8fbd1802tGdk33&orderId=8179206442443938' ),
    order_id        ( '8179206442443938' ),
    order_date      ( 'Nov 10, 2023' ),
    order_item_name ( '1PC Stainless Steel Cosmetic Storage Tray Tattoo Equipment Tray Doctor Surgery Dental Tray Fake Nail Tray Tool' ),
    order_options   ( 'Color: Silver' ),
    order_price     ( 'AU$3.17' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$5.28' ),
  ),
);

equipment(
  equipment_date( '2024-01-16' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S8049f00eae0746a58cb5ac8c26fa99e9c/5PCs-Car-Audio-Trim-Removal-Tool-Kit-Anti-Scratch-Pry-Applicable-Car-Door-Panel-and-Audio.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name( 'Blue' ),
    EquipmentFeature::SPUDGERS,
  ),
  /*
  equipment_info(
    equipment_type     ( 'Spudger Set' ),
    category          ( 'Spudger' ),
    category          ( 'Hand Tool' ),
  ),
  */
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004658294061.html' ),
    listing_name   ( '5PCs Car Audio Trim Removal Tool Kit Anti-Scratch Pry Applicable Car Door Panel and Audio Dashboard' ),
    item_options  ( 'Color: Blue' ),
    item_price    ( 'AU$7.88' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005004658294061.html?spm=a2g0o.order_detail.order_detail_item.15.31b6f19cqhQkK0' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.333.8fbd1802tGdk33&orderId=8179206442443938' ),
    order_id        ( '8179206442443938' ),
    order_date      ( 'Nov 10, 2023' ),
    order_item_name ( 'Auto Mechanical Workshop Tools Instrument Panel Repair Kit Audio and Video Trim Panel with Door Clip' ),
    order_options   ( 'Color: Blue' ),
    order_price     ( 'AU$3.17' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$5.28' ),
  ),
);

equipment(
  equipment_date( '2024-01-16' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sd329ed55754e4fdb9a272f19aba1a3b0N/IC-Chip-Pickup-Tools-Pen-Extractor-Electronic-Parts-Gripper-Electronic-Repair-Tools.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    EquipmentFeature::IC_CHIP_PICKUP_TOOL,
  ),
  /*
  equipment_info(
    equipment_type     ( 'IC Chip Pickup Tool' ),
    category          ( 'Hand Tool' ),
    category          ( 'Pickup Tool' ),
  ),
  */
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005100436159.html' ),
    listing_name   ( 'Multi-functional Ic Chip Remover Electronic Component Jewelry Picking Tool Bga Chip Clip Cross Screwdriver Aluminum Alloy Handle' ),
    item_options  ( 'Color: Blue' ),
    item_price    ( 'AU$8.66' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005100436159.html?spm=a2g0o.order_detail.order_detail_item.11.31b6f19chrviKx' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.333.8fbd1802tGdk33&orderId=8179206442443938' ),
    order_id        ( '8179206442443938' ),
    order_date      ( 'Nov 10, 2023' ),
    order_item_name ( 'IC Chip Pickup Tools Pen Extractor Electronic Parts Gripper Electronic Repair Tools' ),
    order_options   ( 'Color: Blue' ),
    order_price     ( 'AU$3.17' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$5.28' ),
  ),
);

equipment(
  equipment_date( '2024-01-16' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sc43db8edaf8944efad3523b0dc5cc507a/2-54mm-JST-Connector-with-22AWG-Pre-Crimped-Wire-2-3-4-5-6-Pin-Housing.jpg_.webp' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.jst.com/' ),
      link_text       ( 'JST' ),
    ),
    manufacturer_link (
      link_href       ( 'https://www.jst.com/wp-content/uploads/2021/01/eXH.pdf' ),
      link_text       ( 'XH Connector (PDF)' ),
    ),
    manufacturer_name  ( 'JST' ),
    model_name         ( 'XH2.54 6pin Pre-crimped' ),
    EquipmentFeature::CONNECTOR,
    EquipmentAttribute::PRE_CRIMPED,
    EquipmentConnectivity::XH2_54,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'JST' ),
    model_name         ( 'XH2.54 6pin' ),
    equipment_type     ( 'Pre-crimped Connector' ),
    category          ( 'XH2.54' ),
    category          ( 'Connector' ),
    category          ( 'Pre-crimped' ),
    manufacturer_link (
      link_href       ( 'https://www.jst.com/' ),
      link_text       ( 'JST' ),
    ),
    manufacturer_link (
      link_href       ( 'https://www.jst.com/wp-content/uploads/2021/01/eXH.pdf' ),
      link_text       ( 'XH Connector (PDF)' ),
    ),
  ),
  */
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005906832879.html' ),
    listing_name   ( '2.54mm JST Connector with 22AWG Pre-Crimped Wire, 2/3/4/5/6 Pin Housing JST Adapter Cable Connector 20cm Wire' ),
    item_options  ( 'Color: 6P; Length: 20cm; Specification: 10pcs' ),
    item_price    ( 'AU$6.92' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005906832879.html?spm=a2g0o.order_detail.order_detail_item.15.2612f19cUqe1Yy' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.340.8fbd1802tGdk33&orderId=8177606027433938' ),
    order_id        ( '8177606027433938' ),
    order_date      ( 'Oct 20, 2023' ),
    order_item_name ( '2.54mm JST Connector with 22AWG Pre-Crimped Wire, 2/3/4/5/6 Pin Housing JST Adapter Cable Connector 20cm Wire' ),
    order_options   ( 'Color: 2p; Length: 20cm; Specification: 10pcs' ),
    order_price     ( 'AU$3.20' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$3.92' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005906832879.html?spm=a2g0o.order_detail.order_detail_item.5.31b6f19c6e2SId' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.333.8fbd1802tGdk33&orderId=8179206442443938' ),
    order_id        ( '8179206442443938' ),
    order_date      ( 'Nov 10, 2023' ),
    order_item_name ( '2.54mm JST Connector with 22AWG Pre-Crimped Wire, 2/3/4/5/6 Pin Housing JST Adapter Cable Connector 20cm Wire' ),
    order_options   ( 'Color: 6p; Length: 20cm; Specification: 10pcs' ),
    order_price     ( 'AU$3.17' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$5.28' ),
  ),
);

equipment(
  equipment_date( '2024-01-16' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Scd875ba859e84bde9dc96d4ba64adee3n/6PCS-Metal-Crowbar-with-Two-Ends-Universal-Mobile-Phone-Digital-Home-Appliance-Product-Dismantling-Stick-Shell.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'Metal' ),
    EquipmentFeature::SPUDGERS,
  ),
  /*
  equipment_info(
    equipment_type     ( 'Metal Spudgers' ),
    category          ( 'Spudger' ),
    category          ( 'Hand Tool' ),
  ),
  */
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004718989394.html' ),
    listing_name   ( '6PCS Metal Crowbar with Two Ends Universal Mobile Phone Digital Home Appliance Product Dismantling Stick Shell Opening Tool' ),
    item_options  ( 'Color: 1 SET' ),
    item_price    ( 'AU$8.43' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005004718989394.html?spm=a2g0o.order_detail.order_detail_item.9.7fd4f19cFYK4Ny' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.347.8fbd1802tGdk33&orderId=8179314623893938' ),
    order_id        ( '8179314623893938' ),
    order_date      ( 'Nov 10, 2023' ),
    order_item_name ( '6PCS Metal Crowbar with Two Ends Universal Mobile Phone Digital Home Appliance Product Dismantling Stick Shell Opening Tool' ),
    order_options   ( 'Color: 1 SET' ),
    order_price     ( 'AU$3.17' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$5.84' ),
  ),
);

equipment(
  equipment_date( '2024-01-16' ),
  equipment_icon( 'https://d297fd4gt7t5lv.cloudfront.net/file/2023-11-21-153608/s-l1600.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.victorinox.com/global/en/Products/Swiss-Army-Knives/Medium-Pocket-Knives/Swiss-Champ/p/1.6795' ),
      link_text       ( 'Victorinox Swiss Champ in red' ),
    ),
    manufacturer_name  ( 'Victorinox' ),
    model_name         ( 'Swiss Champ Red' ),
    EquipmentFeature::SWISS_ARMY_KNIFE,
    EquipmentFeature::KNIFE,
    EquipmentFeature::REAMER,
    EquipmentFeature::PUNCH,
    EquipmentFeature::SEWING_AWL,
    EquipmentFeature::CAN_OPENER,
    EquipmentFeature::SCREWDRIVER,
    EquipmentFeature::BOTTLE_OPENER,
    EquipmentFeature::WIRE_STRIPPER,
    EquipmentFeature::SCISSORS,
    EquipmentFeature::PLIERS,
    EquipmentFeature::WIRE_BENDER,
    EquipmentFeature::WIRE_CRIMPER,
    EquipmentFeature::FISH_SCALER,
    EquipmentFeature::HOOK_DISGORGER,
    EquipmentFeature::RULER_CM,
    EquipmentFeature::RULER_INCH,
    EquipmentFeature::WOOD_SAW,
    EquipmentFeature::NAIL_FILE,
    EquipmentFeature::METAL_SAW,
    EquipmentFeature::METAL_FILE,
    EquipmentFeature::NAIL_CLEANER,
    EquipmentFeature::MAGNIFYING_GLASS,
    EquipmentFeature::CHISEL,
    EquipmentFeature::MULTI_PURPOSE_HOOK,
    EquipmentFeature::TOOTHPICK,
    EquipmentFeature::TWEEZERS,
    EquipmentFeature::BALLPOINT_PEN,
    EquipmentFeature::PIN,
    EquipmentFeature::KEY_RING,
    EquipmentFeature::CORKSCREW,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Victorinox' ),
    model_name         ( 'Swiss Champ Red' ),
    equipment_type     ( 'Swiss Army Knife' ),
    category          ( 'Swiss Army Knife' ),
    category          ( 'Knife/Blade' ),
    manufacturer_link (
      link_href       ( 'https://www.victorinox.com/global/en/Products/Swiss-Army-Knives/Medium-Pocket-Knives/Swiss-Champ/p/1.6795' ),
      link_text       ( 'Victorinox Swiss Champ in red' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Victorinox_Swiss_Champ_Red' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/351576617765?mkcid=1&mkrid=711-53200-19255-0&siteid=0&campid=5339019639&customid=&toolid=20012&mkevt=1' ),
    affiliate_url ( 'https://ebay.us/QKkrw8' ),
    listing_name   ( 'VICTORINOX SWISS CHAMP RED - SWISS ARMY POCKET KNIFE - LENGTH: 91 MM - 33 TOOLS' ),
    item_price    ( 'US$108.16' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/351576617765?mkcid=1&mkrid=711-53200-19255-0&siteid=0&campid=5339019639&customid=&toolid=20012&mkevt=1' ),
    affiliate_url ( 'https://ebay.us/mfUhIF' ),
    listing_name   ( 'VICTORINOX SWISS CHAMP RED - SWISS ARMY POCKET KNIFE - LENGTH: 91 MM - 33 TOOLS' ),
    item_price    ( 'AU$177.60' ),
  ),
);

equipment(
  equipment_date( '2024-01-16' ),
  equipment_icon( 'https://d297fd4gt7t5lv.cloudfront.net/file/2023-11-21-193844/s-l1600.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.scotchbrand.com.au/3M/en_AU/p/d/v000453838/' ),
      link_text       ( 'Scotch™ Precision Ultra Edge Scissors, Blue, Green and Lavender, 8 in, 6/box, 6 boxes/Ctn, 1458TU-MIX' ),
    ),
    manufacturer_name ( 'Scotch' ),
    model_name        ( 'Titanium' ),
    EquipmentFeature::SCISSORS,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Scotch' ),
    equipment_type     ( 'Titanium Scissors' ),
    category          ( 'Scissors' ),
    manufacturer_link (
      link_href       ( 'https://www.scotchbrand.com.au/3M/en_AU/p/d/v000453838/' ),
      link_text       ( 'Scotch™ Precision Ultra Edge Scissors, Blue, Green and Lavender, 8 in, 6/box, 6 boxes/Ctn, 1458TU-MIX' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Scotch_Titanium_Scissors' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/255183709704?var=555175576658&amdata=enc%3AAQAIAAAAkHemIjt9U%2F15Nhx9DVflc0mrH1HA9TJKm3bh3ixc0AhatR2d24gbPnH3xsTLpvM7mlR8JBA1100ufbAaBxoAPY9BTKXAbgKmHnhYQZhkUV6lohSq8QylzL185EeVgHytTQRG5L45oJbaMNAOZmw0pApkpLwgyfOdQLyu2pYdI9ck5l1NOrtCqIdYiKkccTE6yA%3D%3D&mkcid=1&mkrid=711-53200-19255-0&siteid=0&campid=5339019639&customid=&toolid=20012&mkevt=1' ),
    affiliate_url ( 'https://ebay.us/GYXpZF' ),
    listing_name  ( '3M Scotch Precision Ultra Edge Titanium 8" Scissors Stay Sharp Smooth Cutting' ),
    item_options  ( 'Pack: Original Set of 3 Scissors' ),
    item_price    ( 'US$19.35' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/255183709704?var=555175576658&amdata=enc%3AAQAIAAAAkHemIjt9U%2F15Nhx9DVflc0mrH1HA9TJKm3bh3ixc0AhatR2d24gbPnH3xsTLpvM7mlR8JBA1100ufbAaBxoAPY9BTKXAbgKmHnhYQZhkUV6lohSq8QylzL185EeVgHytTQRG5L45oJbaMNAOZmw0pApkpLwgyfOdQLyu2pYdI9ck5l1NOrtCqIdYiKkccTE6yA%3D%3D&mkcid=1&mkrid=711-53200-19255-0&siteid=0&campid=5339019639&customid=&toolid=20012&mkevt=1' ),
    affiliate_url ( 'https://ebay.us/ei1B3u' ),
    listing_name  ( '3M Scotch Precision Ultra Edge Titanium 8" Scissors Stay Sharp Smooth Cutting' ),
    item_options  ( 'Pack: Original Set of 3 Scissors' ),
    item_price    ( 'AU$28.88' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/255183709704' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=21-08734-30017#/' ),
    order_id        ( '21-08734-30017' ),
    order_date      ( '12 Jun 2022' ),
    order_item_name ( '3M Scotch Precision Ultra Edge ✅Titanium 8" Scissors Stay Sharp Smooth Cutting' ),
    order_options   ( 'Pack: Original Set of 3 Scissors' ),
    order_price     ( 'AU$28.89' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-01-16' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S389cbffabb9441dea910ebde8f7cd5ae0/DT830B-AC-DC-LCD-Digital-Multimeter-750-1000V-Voltmeter-Ammeter-Ohm-Tester-High-Safety-Handheld-Meter.jpg_640x640.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'DT830B Digital' ),
    EquipmentFeature::MULTIMETER,
    EquipmentFeature::HANDHELD_MULTIMETER,
    EquipmentFeature::VOLTMETER,
    EquipmentFeature::AMMETER_DC,
    EquipmentFeature::OHMMETER,
    EquipmentFeature::DIODE_TESTER,
    EquipmentFeature::TRANSISTOR_TESTER,
    EquipmentConnectivity::BANANA_PLUG,
  ),
  /*
  equipment_info(
    model_name         ( 'DT830B' ),
    equipment_type     ( 'Digital Multimeter' ),
    category          ( 'Multimeter' ),
    category          ( 'Hand Tool' ),
    category          ( 'Meter' ),
    category          ( 'Test Equipment' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/DT830B_Digital_Multimeter' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004951791846.html' ),
    listing_name   ( 'DT830B AC/DC LCD Digital Multimeter 750/1000V Voltmeter Ammeter Ohm Tester High Safety Handheld Meter Digital Multimeter' ),
    item_options  ( 'Color: Yellow' ),
    item_price    ( 'AU$5.44' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005004951791846.html?spm=a2g0o.order_detail.order_detail_item.3.3d52f19c06kSbA' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.354.8fbd1802tGdk33&orderId=8170622676183938' ),
    order_id        ( '8170622676183938' ),
    order_date      ( 'Jul 3, 2023' ),
    order_item_name ( 'DT830B AC/DC LCD Digital Multimeter 750/1000V Voltmeter Ammeter Ohm Tester High Safety Handheld Meter Digital Multimeter' ),
    order_options   ( 'Color: Yellow' ),
    order_price     ( 'AU$5.45' ),
    order_quantity  ( 5 ),
    order_gst       ( 'AU$2.73' ),
  ),
);

equipment(
  equipment_date( '2023-10-20' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S9521977181be4b90a8ffdbd1bbeed0027.jpg' ),
  equipment_item(
    model_name        ( 'Aokin' ),
    EquipmentFeature::WIRE_CUTTER,
    EquipmentFeature::PLIERS,
  ),
  /*
  equipment_info(
    model_name        ( 'Aokin' ),
    equipment_type    ( 'Wire Cutter' ),
    category          ( 'Wire Cutter' ),
    category          ( 'Hand Tool' ),
  ),
  */
  sixsigma_url    ( 'https://www.jj5.net/wiki/Aokin1PC_Wire_Cutter' ),
  see_also        ( 'Plato Model 170 Wire Cutter' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004748524842.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dmniw3Z' ),
    listing_name  ( 'Aokin1PC 170 Universal Pliers DIY Electronic Diagonal Side Cutting Nippers Wire Cable Cutter 3D Printer Parts Hand Tools' ),
    item_options  ( 'Color: 1pcs' ),
    item_price    ( 'AU$3.60' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005004748524842.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.22.1de31802quIOg1&orderId=8177641878953938' ),
    order_id        ( '8177641878953938' ),
    order_date      ( 'Oct 20, 2023' ),
    order_item_name ( 'Aokin1PC 170 Universal Pliers DIY Electronic Diagonal Side Cutting Nippers Wire Cable Cutter 3D Printer Parts Hand Tools' ),
    order_options   ( 'Color: 1pcs' ),
    order_price     ( 'AU$3.20' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-09-07' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sf47b9596e1cf4e6483e10539dba899bcL/Chip-Test-Clip-Multimeter-Probe-Tweezers-Patch-For-Capacitance-Inductance-SMD-Resistor-Capacitor-Tester-Meter-Pen.jpeg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    EquipmentFeature::PROBE_TWEEZERS,
    EquipmentFeature::CABLE,
    EquipmentAttribute::HAND_TOOL,
  ),
  /*
  equipment_info(
    model_name        ( 'Yum Cha' ),
    equipment_type    ( 'Probe Tweezers' ),
    category          ( 'Probe Tweezers' ),
    category          ( 'Test Tweezers' ),
    category          ( 'Tweezers' ),
    category          ( 'Hand Tool' ),
    category          ( 'Test Clip' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Probe_Tweezers' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005277270043.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DDxvnvv' ),
    listing_name  ( 'Chip Test Clip Multimeter Probe Tweezers Patch For Capacitance Inductance SMD Resistor Capacitor Tester Meter Pen Testing Tool' ),
    item_price    ( 'AU$4.71' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/4000866582347.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DkrRfbN' ),
    listing_name  ( 'Multimeter Test Leads Digital Multimeter SMD Inductor Test Clip Meter Lead Probe Tweezers for Resistor Multimeter Capacitor' ),
    item_price    ( 'AU$5.85' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005001644954.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dm4WGYx' ),
    listing_name  ( 'LCR Digital Multimeter Probe Tweezers SMD Inductor Test Leads Clip Needle Tip Meter Cable Set for Resistor Capacitor Test Pen' ),
    item_options  ( 'Color: as shown' ),
    item_price    ( 'AU$6.46' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005004658588816.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DClaesL' ),
    listing_name  ( 'Clip Test Pen SMD Multimeter Probe Tweezers Patch For Capacitance Inductance Resistor Measurement Multi-Use Electric Tool' ),
    item_price    ( 'AU$5.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005277270043.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.16.35b91802hDZRrh&orderId=8174938836193938' ),
    order_id        ( '8174938836193938' ),
    order_date      ( 'Sep 7, 2023' ),
    order_item_name ( 'Chip Test Clip Multimeter Probe Tweezers Patch For Capacitance Inductance SMD Resistor Capacitor Tester Meter Pen Testing Tool' ),
    order_price     ( 'AU$4.84' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/4000866582347.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.11.35b91802hDZRrh&orderId=8174938836173938' ),
    order_id        ( '8174938836173938' ),
    order_date      ( 'Sep 7, 2023' ),
    order_item_name ( 'Multimeter Test Leads Digital Multimeter SMD Inductor Test Clip Meter Lead Probe Tweezers for Resistor Multimeter Capacitor' ),
    order_price     ( 'AU$5.30' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005001644954.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.1.35b91802hDZRrh&orderId=8174938836113938' ),
    order_id        ( '8174938836113938' ),
    order_date      ( 'Sep 7, 2023' ),
    order_item_name ( 'LCR Digital Multimeter Probe Tweezers SMD Inductor Test Leads Clip Needle Tip Meter Cable Set for Resistor Capacitor Test Pen' ),
    order_options   ( 'Color: as shown' ),
    order_price     ( 'AU$6.46' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005004658588816.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.6.35b91802hDZRrh&orderId=8174938836133938' ),
    order_id        ( '8174938836133938' ),
    order_date      ( 'Sep 7, 2023' ),
    order_item_name ( 'Clip Test Pen SMD Multimeter Probe Tweezers Patch For Capacitance Inductance Resistor Measurement Multi-Use Electric Tool' ),
    order_price     ( 'AU$5.75' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2021-08-14' ),
  equipment_icon( 'https://images.altronics.com.au/prod_new/k/K2216.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.altronics.com.au/p/k2216-maxitronix-crystal-radio-kit/' ),
      link_text       ( 'Maxitronix Crystal Radio Kit' ),
    ),
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( 'Crystal Radio Kit' ),
    EquipmentFeature::ELECTRONICS_PROJECT,
    EquipmentFeature::ELECTRONICS_KIT,
    EquipmentFeature::AM_RADIO,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( 'Crystal Radio Kit' ),
    equipment_type     ( 'Electronics Project' ),
    category          ( 'Electronics Project' ),
    category          ( 'Electronics Kit' ),
    category          ( 'Radio' ),
    manufacturer_link (
      link_href       ( 'https://www.altronics.com.au/p/k2216-maxitronix-crystal-radio-kit/' ),
      link_text       ( 'Maxitronix Crystal Radio Kit' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Maxitronix' ),
  affiliate_link(
    equipment_url ( 'https://www.altronics.com.au/p/k2216-maxitronix-crystal-radio-kit/' ),
    listing_name   ( 'Maxitronix Crystal Radio Kit' ),
    item_price    ( 'AU$27.95' ),
  ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_nkw=Maxitronix+Crystal+Radio&_sacat=0' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/sch/i.html?_from=R40&_nkw=Maxitronix+Crystal+Radio&_sacat=0' ),
    affiliate_url ( 'https://ebay.us/aSmrmy' ),
    listing_name   ( 'Maxitronix Crystal Radio Kit' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_nkw=Maxitronix+Crystal+Radio&_sacat=0' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_nkw=Maxitronix+Crystal+Radio&_sacat=0' ),
    affiliate_url ( 'https://ebay.us/zc1TLF' ),
    listing_name   ( 'Maxitronix Crystal Radio Kit' ),
  ),
  purchase(
    equipment_url   ( 'https://www.altronics.com.au/p/k2216-maxitronix-crystal-radio-kit/' ),
    order_url       ( 'https://www.altronics.com.au/myaccount/ordlist/?oid=172245' ),
    order_id        ( '172245' ),
    order_date      ( '2021-08-14' ),
    order_item_name ( 'K2216: Crystal Radio Kit' ),
    order_price     ( 'AU$27.95' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$11.00' ),
    order_gst       ( 'AU$2.80' ),
  ),
);

equipment(
  equipment_date( '2021-08-14' ),
  equipment_icon( 'https://images.altronics.com.au/prod_new/k/K2212_1.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.altronics.com.au/p/k2212-maxitronix-am-fm-radio-kit/' ),
      link_text       ( 'Maxitronix AM/FM Radio Kit' ),
    ),
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( 'AM/FM Radio Kit' ),
    EquipmentFeature::ELECTRONICS_PROJECT,
    EquipmentFeature::ELECTRONICS_KIT,
    EquipmentFeature::AM_RADIO,
    EquipmentFeature::FM_RADIO,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( 'AM/FM Radio Kit' ),
    equipment_type     ( 'Electronics Project' ),
    category          ( 'Electronics Project' ),
    category          ( 'Electronics Kit' ),
    category          ( 'Radio' ),
    manufacturer_link (
      link_href       ( 'https://www.altronics.com.au/p/k2212-maxitronix-am-fm-radio-kit/' ),
      link_text       ( 'Maxitronix AM/FM Radio Kit' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Maxitronix' ),
  search_url    ( 'https://www.ebay.com/sch/i.html?_from=R40&_nkw=Maxitronix+Radio&_sacat=0' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/sch/i.html?_from=R40&_nkw=Maxitronix+Radio&_sacat=0' ),
    affiliate_url ( 'https://ebay.us/1DCBIm' ),
    listing_name   ( 'Maxitronix AM/FM Radio Kit' ),
    item_price    ( 'AU$27.95' ),
  ),
  purchase(
    equipment_url   ( 'https://www.altronics.com.au/p/k2212-maxitronix-am-fm-radio-kit/' ),
    order_url       ( 'https://www.altronics.com.au/myaccount/ordlist/?oid=172245' ),
    order_id        ( '172245' ),
    order_date      ( '2021-08-14' ),
    order_item_name ( 'Maxitronix AM/FM Radio Kit' ),
    order_price     ( 'AU$27.95' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$11.00' ),
    order_gst       ( 'AU$2.80' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/393246904325' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=20-07522-10637#/' ),
    order_id        ( '20-07522-10637' ),
    order_date      ( '27 Aug 2021' ),
    order_item_name ( 'Maxitronix AM/FM Radio Kit' ),
    order_price     ( 'AU$32.00' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$10.00' ),
  ),
);

equipment(
  equipment_date( '2021-08-19' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/ABgAAOSwol5YxnoQ/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( 'Electronic Metal Detector Kit' ),
    EquipmentFeature::ELECTRONICS_PROJECT,
    EquipmentFeature::ELECTRONICS_KIT,
    EquipmentFeature::METAL_DETECTOR,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( 'Electronic Metal Detector Kit' ),
    equipment_type     ( 'Electronics Project' ),
    category          ( 'Electronics Project' ),
    category          ( 'Electronics Kit' ),
    category          ( 'Metal Detector' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Maxitronix' ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_nkw=Maxitronix+Metal+Detector&_sacat=0' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/401290152496' ),
    affiliate_url ( 'https://ebay.us/bECYsY' ),
    listing_name   ( 'NEW Maxitronix ELMD - Electronic Metal Detector Kit MX-800 Build It Science Kit' ),
    item_price    ( 'AU$24.95' ),
    item_shipping ( 'AU$12.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/401290152496' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=23-07488-57620#/' ),
    order_id        ( '23-07488-57620' ),
    order_date      ( '19 Aug 2021' ),
    order_item_name ( ' NEW Maxitronix ELMD - Electronic Metal Detector Kit MX-800 Build It Science Kit' ),
    order_price     ( 'AU$24.95' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$12.00' ),
  ),
);

equipment(
  equipment_date( '2021-08-09' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/81aRcMQ-0rL._AC_SL1500_.jpg' ),
  equipment_info(
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( '10 In 1 (10in1)' ),
    equipment_type     ( 'Electronics Project Lab Kit' ),
    category          ( 'Electronics Project Lab' ),
    category          ( 'Electronics Project' ),
    category          ( 'Electronics Kit' ),
    manufacturer_link (
      link_href       ( 'https://www.altronics.com.au/p/k2200-maxitronix-10-in-1-electronics-lab-kit/' ),
      link_text       ( '10 In 1 Electronics Project Lab Kit' ),
    ),
  ),
  sixsigma_url  ( 'https://www.jj5.net/wiki/Maxitronix' ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&LH_ItemCondition=1000&rt=nc&LH_BIN=1&_nkw=Maxitronix+Crystal+Radio+Kit+Electronics+Project' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/262530007000' ),
    affiliate_url ( 'https://ebay.us/cIilFj' ),
    listing_name   ( ' Maxitronix Crystal Radio Kit Designed for Children Aged 10 and Over ' ),
    item_price    ( 'AU$37.90' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B07L8K6DRJ' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=503-1823734-6368600' ),
    order_id        ( '503-1823734-6368600' ),
    order_date      ( '9 August 2021' ),
    order_item_name ( 'Generic 10 in 1 Electronics Lab Kit' ),
    order_price     ( 'AU$49.00' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2021-08-10' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/0sAAAOSwbN9g40AJ/s-l200.webp' ),
  equipment_item(
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( 'Sensor Robot 20 (20in1)' ),
    EquipmentFeature::ELECTRONICS_PROJECT_LAB_KIT,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( 'Sensor Robot 20 (20in1)' ),
    equipment_type     ( 'Electronics Project Lab Kit' ),
    category          ( 'Electronics Project Lab' ),
    category          ( 'Electronics Project' ),
    category          ( 'Electronics Kit' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Maxitronix' ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_nkw=Maxitronix+Sensor+Robot+20&_sacat=0' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_nkw=Maxitronix+Sensor+Robot+20&_sacat=0' ),
    affiliate_url ( 'https://ebay.us/ujlqAR' ),
    listing_name   ( 'Maxitronix Sensor Robot 20 Electronics Project Lab Kit' ),
    item_price    ( 'AU$48.45' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/194267593891' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=22-07448-53020#/' ),
    order_id        ( '22-07448-53020' ),
    order_date      ( '10 Aug 2021' ),
    order_item_name ( 'Sensor Robot 20. Action Science Electronic Project Lab.' ),
    order_price     ( 'AU$48.45' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2021-08-09' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/GXcAAOSwOzld5Fxx/s-l1600.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.altronics.com.au/p/k2204-maxitronix-30-in-1-electronics-lab-kit/' ),
      link_text       ( 'Maxitronix 30 In 1 Electronics Project Lab Kit' ),
    ),
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( '30 In 1 (30in1)' ),
    EquipmentFeature::ELECTRONICS_PROJECT_LAB_KIT,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( '30 In 1 (30in1)' ),
    equipment_type     ( 'Electronics Project Lab Kit' ),
    category          ( 'Electronics Project Lab' ),
    category          ( 'Electronics Project' ),
    category          ( 'Electronics Kit' ),
    manufacturer_link (
      link_href       ( 'https://www.altronics.com.au/p/k2204-maxitronix-30-in-1-electronics-lab-kit/' ),
      link_text       ( 'Maxitronix 30 In 1 Electronics Project Lab Kit' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Maxitronix' ),
  affiliate_link(
    equipment_url ( 'https://www.altronics.com.au/p/k2204-maxitronix-30-in-1-electronics-lab-kit/' ),
    listing_name   ( 'Maxitronix 30 In 1 Electronics Project Lab Kit' ),
    item_price    ( 'AU$56.36' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_nkw=Maxitronix+30&_sacat=0' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_nkw=Maxitronix+30&_sacat=0' ),
    affiliate_url ( 'https://ebay.us/12nDbe' ),
    listing_name   ( 'Maxitronix 30 In 1 Electronics Project Lab Kit' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/111242419519' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=11-07445-39591#/' ),
    order_id        ( '11-07445-39591' ),
    order_date      ( '9 Aug 2021' ),
    order_item_name ( '30 In 1 Electronics Project Lab Learning Kit Kids Learn Electronics XMAS GIFT' ),
    order_price     ( 'AU$69.95' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2021-08-14' ),
  equipment_icon( 'https://images.altronics.com.au/prod_new/k/K2220.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.altronics.com.au/p/k2220-maxitronix-digital-recording-lab-kit/' ),
      link_text       ( 'Maxitronix Electronic Digital Recording Laboratory' ),
    ),
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( 'Electronic Digital Recording Laboratory (59in1)' ),
    EquipmentFeature::ELECTRONICS_PROJECT_LAB_KIT,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( 'Electronic Digital Recording Laboratory (59in1)' ),
    equipment_type     ( 'Electronics Project Lab Kit' ),
    category          ( 'Electronics Project Lab' ),
    category          ( 'Electronics Project' ),
    category          ( 'Electronics Kit' ),
    manufacturer_link (
      link_href       ( 'https://www.altronics.com.au/p/k2220-maxitronix-digital-recording-lab-kit/' ),
      link_text       ( 'Maxitronix Electronic Digital Recording Laboratory' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Maxitronix' ),
  affiliate_link(
    equipment_url ( 'https://www.altronics.com.au/p/k2220-maxitronix-digital-recording-lab-kit/' ),
    listing_name   ( 'Maxitronix Electronic Digital Recording Laboratory' ),
    item_price    ( 'AU$83.59' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_nkw=Maxitronix+Digital+Recording&_sacat=0' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_nkw=Maxitronix+Digital+Recording&_sacat=0' ),
    affiliate_url ( 'https://ebay.us/jz2phY' ),
    listing_name   ( 'Maxitronix Electronic Digital Recording Laboratory' ),
  ),
  purchase(
    equipment_url   ( 'https://www.altronics.com.au/p/k2220-maxitronix-digital-recording-lab-kit/' ),
    order_url       ( 'https://www.altronics.com.au/myaccount/ordlist/?oid=172245' ),
    order_id        ( '172245' ),
    order_date      ( '2021-08-14' ),
    order_item_name ( 'K2220: Digital Recording Lab Kit' ),
    order_price     ( 'AU$91.95' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$11.00' ),
  ),
);

equipment(
  equipment_date( '2021-08-09' ),
  equipment_icon( 'https://images.altronics.com.au/prod_new/k/K2206.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.altronics.com.au/p/k2206-maxitronix-60-in-1-electronics-lab-kit/' ),
      link_text       ( 'Maxitronix 60 In 1 Electronics Project Lab Kit' ),
    ),
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( '60 In 1 (60in1)' ),
    EquipmentFeature::ELECTRONICS_PROJECT_LAB_KIT,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( '60 In 1 (60in1)' ),
    equipment_type     ( 'Electronics Project Lab Kit' ),
    category          ( 'Electronics Project Lab' ),
    category          ( 'Electronics Project' ),
    category          ( 'Electronics Kit' ),
    manufacturer_link (
      link_href       ( 'https://www.altronics.com.au/p/k2206-maxitronix-60-in-1-electronics-lab-kit/' ),
      link_text       ( 'Maxitronix 60 In 1 Electronics Project Lab Kit' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Maxitronix' ),
  affiliate_link(
    equipment_url ( 'https://www.altronics.com.au/p/k2206-maxitronix-60-in-1-electronics-lab-kit/' ),
    listing_name   ( 'Maxitronix 60 In 1 Electronics Project Lab Kit' ),
    item_price    ( 'AU$99.09' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_nkw=Maxitronix+60&_sacat=0' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/113287895499' ),
    affiliate_url ( 'https://ebay.us/J5iLIE' ),
    listing_name   ( '60 In 1 Electronics Lab Kit teach kids about the fundamentals of electronics' ),
    item_price    ( 'AU$109.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/113287895499' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=11-07445-39591#/' ),
    order_id        ( '11-07445-39591' ),
    order_date      ( '9 Aug 2021' ),
    order_item_name ( '60 In 1 Electronics Lab Kit teach kids about the fundamentals of electronics' ),
    order_price     ( 'AU$109.00' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2021-08-09' ),
  equipment_icon( 'https://images.altronics.com.au/prod_new/k/K2208.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.altronics.com.au/p/k2208-maxitronix-130-in-1-electronics-lab-kit/' ),
      link_text       ( 'Maxitronix 130 In 1 Electronics Project Lab Kit' ),
    ),
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( '130 In 1 (130in1)' ),
    EquipmentFeature::ELECTRONICS_PROJECT_LAB_KIT,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( '130 In 1 (130in1)' ),
    equipment_type     ( 'Electronics Project Lab Kit' ),
    category          ( 'Electronics Project Lab' ),
    category          ( 'Electronics Project' ),
    category          ( 'Electronics Kit' ),
    manufacturer_link (
      link_href       ( 'https://www.altronics.com.au/p/k2208-maxitronix-130-in-1-electronics-lab-kit/' ),
      link_text       ( 'Maxitronix 130 In 1 Electronics Project Lab Kit' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Maxitronix' ),
  affiliate_link(
    equipment_url ( 'https://www.altronics.com.au/p/k2208-maxitronix-130-in-1-electronics-lab-kit/' ),
    listing_name   ( 'Maxitronix 130 In 1 Electronics Project Lab Kit' ),
    item_price    ( 'AU$145.45' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_nkw=Maxitronix+130&_sacat=0' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/313210818748' ),
    affiliate_url ( 'https://ebay.us/TwxsqJ' ),
    listing_name   ( 'Maxitronix 130 In 1 Electronics Project Lab Kit' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/313210818748' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=11-07445-39591#/' ),
    order_id        ( '11-07445-39591' ),
    order_date      ( '2021-08-09' ),
    order_item_name ( '130 in 1 Electronics Lab Kit for Ideal for any inquisitive mind aged 10 & over' ),
    order_price     ( 'AU$139.98' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2021-08-09' ),
  equipment_icon( 'https://images.altronics.com.au/prod_new/k/K2209.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.altronics.com.au/p/k2209-maxitronix-200-in-1-electronics-lab-kit/' ),
      link_text       ( 'Maxitronix 200 In 1 Electronics Project Lab Kit' ),
    ),
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( '200 In 1 (200in1)' ),
    EquipmentFeature::ELECTRONICS_PROJECT_LAB_KIT,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( '200 In 1 (200in1)' ),
    equipment_type     ( 'Electronics Project Lab Kit' ),
    category          ( 'Electronics Project Lab' ),
    category          ( 'Electronics Project' ),
    category          ( 'Electronics Kit' ),
    manufacturer_link (
      link_href       ( 'https://www.altronics.com.au/p/k2209-maxitronix-200-in-1-electronics-lab-kit/' ),
      link_text       ( 'Maxitronix 200 In 1 Electronics Project Lab Kit' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Maxitronix' ),
  affiliate_link(
    equipment_url ( 'https://www.altronics.com.au/p/k2209-maxitronix-200-in-1-electronics-lab-kit/' ),
    listing_name   ( 'Maxitronix 200 In 1 Electronics Project Lab Kit' ),
    item_price    ( 'AU$186.36' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_nkw=Maxitronix+200&_sacat=0' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B07J34ZYVY/ref=ppx_yo_dt_b_asin_title_o00_s00?ie=UTF8&psc=1' ),
    listing_name   ( '200 in 1 Electronics Lab Learning Kit Kids Learn Electronics Xmas Gift' ),
    item_price    ( 'AU$216.95' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B07J34ZYVY/ref=ppx_yo_dt_b_asin_title_o00_s00?ie=UTF8&psc=1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=503-7019939-8059006' ),
    order_id        ( '503-7019939-8059006' ),
    order_date      ( '9 August 2021' ),
    order_item_name ( '200 in 1 Electronics Lab Learning Kit Kids Learn Electronics Xmas Gift' ),
    order_price     ( 'AU$216.95' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2021-08-16' ),
  equipment_icon( 'https://images.altronics.com.au/prod_new/k/K2222.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.altronics.com.au/p/k2222-maxitronix-300-in-1-electronics-lab-kit/' ),
      link_text       ( 'Maxitronix 300 In 1 Electronics Project Lab Kit' ),
    ),
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( '300 In 1 (300in1)' ),
    EquipmentFeature::ELECTRONICS_PROJECT_LAB_KIT,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( '300 In 1 (300in1)' ),
    equipment_type     ( 'Electronics Project Lab Kit' ),
    category          ( 'Electronics Project Lab' ),
    category          ( 'Electronics Project' ),
    category          ( 'Electronics Kit' ),
    manufacturer_link (
      link_href       ( 'https://www.altronics.com.au/p/k2222-maxitronix-300-in-1-electronics-lab-kit/' ),
      link_text       ( 'Maxitronix 300 In 1 Electronics Project Lab Kit' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Maxitronix' ),
  affiliate_link(
    equipment_url ( 'https://www.altronics.com.au/p/k2222-maxitronix-300-in-1-electronics-lab-kit/' ),
    listing_name   ( 'Maxitronix 300 In 1 Electronics Project Lab Kit' ),
    item_price    ( 'AU$290.91' ),
  ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_nkw=maxitronix+300&_sacat=0' ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/284398509127' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=05-07478-66621#/' ),
    order_id        ( '05-07478-66621' ),
    order_date      ( '16 Aug 2021' ),
    order_item_name ( 'BRAND NEW MAXITRONIX ELECTRONIC LAB SOLDER FREE 300 IN 1 EXPERIMENT KIT' ),
    order_price     ( 'AU$150.00' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$20.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/185223305299' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=20-08164-77215#/' ),
    order_id        ( '20-08164-77215' ),
    order_date      ( '23 Jan 2022' ),
    order_item_name ( 'Maxitronix 300 In 1 Electronics Lab Kit' ),
    order_price     ( 'AU$120.00' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$17.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/154830785545' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=24-08243-59512#/' ),
    order_id        ( '24-08243-59512' ),
    order_date      ( '7 Feb 2022' ),
    order_item_name ( 'Maxitronix 300 In 1 Electronics Lab Kit untested selling as parts read descript' ),
    order_price     ( 'AU$45.00' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$22.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/175159458198' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=05-08268-05619#/' ),
    order_id        ( '05-08268-05619' ),
    order_date      ( '15 Feb 2022' ),
    order_item_name ( 'MAXITRONIX 300 IN 1 ELECTRONIC LAB MX-9 ,COMPLETE IN ORIGINAL BOX,LEARNING TOY' ),
    order_price     ( 'AU$65.00' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$21.90' ),
  ),
);

equipment(
  equipment_date( '2021-06-25' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/plQAAOSwFNhgRD5O/s-l200.webp' ),
  equipment_item(
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( '500 In 1 (500in1)' ),
    EquipmentFeature::ELECTRONICS_PROJECT_LAB_KIT,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Maxitronix' ),
    model_name         ( '500 In 1 (500in1)' ),
    equipment_type     ( 'Electronics Project Lab Kit' ),
    category          ( 'Electronics Project Lab' ),
    category          ( 'Electronics Project' ),
    category          ( 'Electronics Kit' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Maxitronix' ),
  search_url    ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_nkw=maxitronix+500&_sacat=0' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/sch/i.html?_from=R40&_nkw=maxitronix+500&_sacat=0' ),
    affiliate_url ( 'https://ebay.us/AXdPh8' ),
    listing_name   ( 'Maxitronix 500 In 1 Electronics Project Lab Kit' ),
    item_price    ( 'AU$250.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/254898266591' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=27-07189-69518#/' ),
    order_id        ( '27-07189-69518' ),
    order_date      ( '11 Jun 2021' ),
    order_item_name ( 'Maxitronix 500-in-one Electronic Project Lab' ),
    order_price     ( 'AU$250.00' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/125160305942' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=04-08308-47836#/' ),
    order_id        ( '04-08308-47836' ),
    order_date      ( '25 Feb 2022' ),
    order_item_name ( 'Maxitronix 500 in 1 Electronic Lab *NO BOOKS/ELECTRONIC PARTS/WIRES*' ),
    order_price     ( 'US$94.95' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'US$36.76' ),
  ),
);

equipment(
  equipment_date( '2023-09-16' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S084127bd6e564973aa2ebf6abbb021d07/Universal-Stylus-Pen-Drawing-Tablet-Sensetive-Capacitive-Screen-Touch-Pen-for-Apple-Android-iPad-iPhone-Samsung.png_.webp' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.aliexpress.com/store/3106086' ),
      link_text       ( 'Asometech' ),
    ),
    manufacturer_name  ( 'Asometech' ),
    model_name         ( 'Universal' ),
    EquipmentFeature::STYLUS_PEN,
    EquipmentFeature::COSTUME,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Asometech' ),
    model_name         ( 'Universal' ),
    equipment_type     ( 'Stylus Pen' ),
    category          ( 'Stylus Pen' ),
    category          ( 'Hand Tool' ),
    manufacturer_link (
      link_href       ( 'https://www.aliexpress.com/store/3106086' ),
      link_text       ( 'Asometech' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Asometech_Stylus_Pen' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005002346357482.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DeNKM5z' ),
    listing_name   ( 'Universal Stylus Pen Drawing Tablet Sensetive Capacitive Screen Touch Pen for Apple Android iPad iPhone Samsung Kindle Phone' ),
    item_options  ( '10PCS Multi Color' ),
    item_price    ( 'AU$2.72' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005002346357482.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.27.2a3e1802rX0V2p&orderId=8175943331763938' ),
    order_id        ( '8175943331763938' ),
    order_date      ( 'Sep 16, 2023' ),
    order_item_name ( 'Universal Stylus Pen Drawing Tablet Sensetive Capacitive Screen Touch Pen for Apple Android iPad iPhone Samsung Kindle Phone' ),
    order_options   ( '10PCS Multi Color, China' ),
    order_price     ( 'AU$2.72' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  // 2024-07-09 jj5 - I'm not sure when I got mine...
  equipment_date( '2022-10-25' ),
  equipment_icon( 'https://cdn-blog.adafruit.com/uploads/2014/09/1554iso_ORIG.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://blog.adafruit.com/2014/09/15/one-pcb-to-ruler-them-all/' ),
      link_text       ( 'Adafruit One PCB to Ruler Them All' ),
    ),
    manufacturer_name  ( 'Adafruit' ),
    model_name         ( 'One PCB to Ruler Them All' ),
    EquipmentFeature::RULER,
    EquipmentFeature::COSTUME,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Adafruit' ),
    model_name         ( 'One PCB to Ruler Them All' ),
    equipment_type     ( 'Ruler' ),
    category          ( 'Ruler' ),
    category          ( 'Hand Tool' ),
    manufacturer_link (
      link_href       ( 'https://blog.adafruit.com/2014/09/15/one-pcb-to-ruler-them-all/' ),
      link_text       ( 'Adafruit One PCB to Ruler Them All' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Adafruit_Ruler' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/gp/product/B00KGEMW74' ),
    listing_name  ( 'Adafruit PCB Ruler v2-6" [ADA1554]' ),
    item_price    ( 'US$8.10' ),
  ),
  web_link(
    link_href   ( 'https://blog.adafruit.com/2014/09/15/one-pcb-to-ruler-them-all/' ),
    link_text   ( 'One PCB to Ruler Them All' ),
  ),
);

equipment(
  equipment_date( '2023-08-18' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/41Q8OGEeh5L._AC_SL1000_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.kleintools.com.au/catalogue/multi-bit-screwdrivers/multi-bit-electronics-pocket-screwdriver-4-1-ph-sl-bits' ),
      link_text       ( 'Multi-Bit Electronics Pocket Screwdriver, 4-in-1, Ph., Sl. Bits (32614)' ),
    ),
    manufacturer_name  ( 'Klein Tools' ),
    model_name         ( '32614 4-in-1 Multi-bit Precision' ),
    EquipmentFeature::POCKET_SCREWDRIVER,
    EquipmentFeature::SONIC_SCREWDRIVER,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH0,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH00,
    EquipmentFeature::FLATHEAD_SCREWDRIVER,
    EquipmentFeature::COSTUME,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Klein Tools' ),
    model_name         ( '32614 4-in-1 Multi-bit Precision' ),
    equipment_type     ( 'Pocket Screwdriver' ),
    category          ( 'Screwdriver' ),
    category          ( 'Hand Tool' ),
    category          ( 'Sonic Screwdriver' ),
    manufacturer_link (
      link_href       ( 'https://www.kleintools.com.au/catalogue/multi-bit-screwdrivers/multi-bit-electronics-pocket-screwdriver-4-1-ph-sl-bits' ),
      link_text       ( 'Multi-Bit Electronics Pocket Screwdriver, 4-in-1, Ph., Sl. Bits (32614)' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Klein_Tools_Pocket_Screwdriver' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B07PNC5MPB' ),
    listing_name   ( 'Klein Tools 32614 4-in-1 Multi-bit Precision Pocket Screwdriver Set' ),
    item_options  ( 'Multi-Bit Screwdriver' ),
    item_price    ( 'AU$32.08' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B07PNC5MPB' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-1152558-2077436' ),
    order_id        ( '249-1152558-2077436' ),
    order_date      ( '18 August 2023' ),
    order_item_name ( 'Klein Tools 32614 4-in-1 Multi-bit Precision Pocket Screwdriver Set' ),
    order_options   ( 'Multi-Bit Screwdriver' ),
    order_price     ( 'AU$39.01' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-18' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/51vXRv3nUFL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.portwest.com/products/view/2852/WHR' ),
      link_text       ( '2852 - Standard Coat' ),
    ),
    manufacturer_name  ( 'Portwest' ),
    model_name         ( 'Standard' ),
    EquipmentFeature::LAB_COAT,
    EquipmentFeature::COSTUME,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Portwest' ),
    model_name         ( 'Standard' ),
    equipment_type     ( 'Lab Coat' ),
    category          ( 'Lab Coat' ),
    category          ( 'Safety Equipment' ),
    manufacturer_link (
      link_href       ( 'https://www.portwest.com/products/view/2852/WHR' ),
      link_text       ( '2852 - Standard Coat' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Portwest_Lab_Coat' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B006ITB06U' ),
    listing_name   ( 'Portwest 2852 Standard Lab Coat Hard Wearing Workwear Lab Coat White, 3X-Large' ),
    item_options  ( '3X-Large; White' ),
    item_price    ( 'AU$34.95' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B006ITB06U' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-2227622-6404632' ),
    order_id        ( '249-2227622-6404632' ),
    order_date      ( '18 August 2023' ),
    order_item_name ( 'Portwest 2852 Standard Lab Coat Hard Wearing Workwear Lab Coat White, 3X-Large' ),
    order_options   ( 'Size: 3X-Large; Colour: White' ),
    order_price     ( 'AU$29.71' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-18' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61TtZnvED8L._AC_SL1000_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.amazon.com.au/s?k=diodrio' ),
      link_text       ( 'See diodrio on Amazon' ),
    ),
    manufacturer_name  ( 'Diodrio' ),
    model_name         ( 'Leather' ),
    EquipmentFeature::POCKET_PROTECTOR,
    EquipmentFeature::COSTUME,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Diodrio' ),
    model_name         ( 'Leather' ),
    equipment_type     ( 'Pocket Protector' ),
    category          ( 'Pocket Protector' ),
    category          ( 'Safety Equipment' ),
    manufacturer_link (
      link_href       ( 'https://www.amazon.com.au/s?k=diodrio' ),
      link_text       ( 'See diodrio on Amazon' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Diodrio_Pocket_Protector' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B07S6NWMGX' ),
    listing_name   ( 'Pocket Protector, Leather Pen EDC Pouch Holder Organizer, for Shirts Lab Coats, Hold 5 Pens, New Design to Keep Pens Inside When Bend Down. No Breaking of Pen Clip. Thick PU Leather, 2 Per Pack.' ),
    item_options  ( 'Brown' ),
    item_price    ( 'AU$23.11' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B07S6NWMGX' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-5975425-8293401' ),
    order_id        ( '249-5975425-8293401' ),
    order_date      ( '18 August 2023' ),
    order_item_name  ( 'Pocket Protector, Leather Pen EDC Pouch Holder Organizer, for Shirts Lab Coats, Hold 5 Pens, New Design to Keep Pens Inside When Bend Down. No Breaking of Pen Clip. Thick PU Leather, 2 Per Pack.' ),
    order_options   ( 'Brown' ),
    order_price     ( 'AU$27.20' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-10-05' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/H84035dcfa98348149299fbd0633c2425H/Safety-Goggles-Anti-Laser-infrared-Protective-glasses-PC-lenses-Anti-fog-Anti-UV-Anti-impact-Industrial.jpg_.webp' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.aliexpress.com/store/5085361' ),
      link_text       ( 'See store on AliExpress' ),
    ),
    manufacturer_name  ( 'Oloey' ),
    EquipmentFeature::SAFETY_GOGGLES,
    EquipmentFeature::COSTUME,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Oloey' ),
    //model_name        ( '' ),
    equipment_type     ( 'Safety Goggles' ),
    category          ( 'Safety Equipment' ),
    category          ( 'Safety Goggles' ),
    manufacturer_link (
      link_href       ( 'https://www.aliexpress.com/store/5085361' ),
      link_text       ( 'See store on AliExpress' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Oloey_Safety_Goggles' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/4000700099287.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Ddy4JRH' ),
    listing_name   ( 'Safety Goggles Anti Laser infrared Protective glasses PC lenses Anti-fog Anti-UV Anti-impact Industrial Labor Protection Goggles' ),
    item_options  ( 'Color: transparent yellow' ),
    item_price    ( 'AU$3.77' ),
    item_shipping ( 'AU$6.45' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/4000700099287.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.31.513e1802NxuF6x&orderId=8177186299683938' ),
    order_id        ( '8177186299683938' ),
    order_date      ( 'Oct 5, 2023' ),
    order_item_name ( 'Safety Goggles Anti Laser infrared Protective glasses PC lenses Anti-fog Anti-UV Anti-impact Industrial Labor Protection Goggles' ),
    order_options   ( 'Color: transparent yellow' ),
    order_price     ( 'AU$16.85' ),
    order_quantity  ( 3 ),
  ),
);

equipment(
  equipment_date( '2020-08-18' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71PeT5hDzpL._AC_SL1200_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.amazon.com.au/s?k=YOUOWO' ),
      link_text       ( 'See YOUOWO on Amazon' ),
    ),
    manufacturer_name  ( 'YOUOWO' ),
    model_name         ( 'ID' ),
    EquipmentFeature::BADGE_HOLDER,
    EquipmentFeature::COSTUME,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'YOUOWO' ),
    //model_name        ( '' ),
    equipment_type     ( 'ID Badge Holder' ),
    category          ( 'Badge Holder' ),
    manufacturer_link (
      link_href       ( 'https://www.amazon.com.au/s?k=YOUOWO' ),
      link_text       ( 'See YOUOWO on Amazon' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/YOUOWO_ID_Badge_Holder' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B07Y2SH1KV' ),
    //affiliate_url ( '' ),
    listing_name   ( 'YOUOWO 5 pack Cruise Lanyard retractable with ID badges holder for ship card keys lanyards with Retractable Badge Reel clip for ID holder Breakaway lanyard Office Neck office lanyards with reel holder' ),
    item_options  ( 'Colour Name: 5 Colors-lanyard With Badge Holder&badge Reel' ),
    item_price    ( 'AU$23.44' ),
  ),
  purchase(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B07Y2SH1KV' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-6147080-4367006' ),
    order_id        ( '249-6147080-4367006' ),
    order_date      ( '18 August 2023' ),
    order_item_name ( 'YOUOWO 5 pack Cruise Lanyard retractable with ID badges holder for ship card keys lanyards with Retractable Badge Reel clip for ID holder Breakaway lanyard Office Neck office lanyards with reel holder' ),
    order_options   ( 'Colour Name: 5 Colors-lanyard With Badge Holder&badge Reel' ),
    order_price     ( 'AU$27.22' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sae49d749526943ca9f58bea838cccad3i/50Pcs-Painting-Brushes-Set-Art-Round-Flat-Hair-Nylon-Hair-Paint-Brush-for-Oil-Acrylic-Watercolor.jpg_640x640.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Yutiars' ),
    model_name         ( 'Round' ),
    EquipmentFeature::PAINT_BRUSHES,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yutiars' ),
    model_name         ( 'Round' ),
    equipment_type     ( 'Paint Brush Set' ),
    category          ( 'Paint Brush' ),
    category          ( 'Brush' ),
    category          ( 'Hand Tool' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yutiars_Round_Paint_Brush_Set' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005007250364880.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DciBNdh' ),
    listing_name   ( '50Pcs Painting Brushes Set Art Round Flat Hair Nylon Hair Paint Brush for Oil Acrylic Watercolor Kids/Artists/Beginners/Students' ),
    item_options  ( 'Color: 50pcs round' ),
    item_price    ( 'AU$5.01' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005007250364880.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.1.53651802LMoqC2&orderId=8190382506963938' ),
    order_id        ( '8190382506963938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( '50Pcs Painting Brushes Set Art Round Flat Hair Nylon Hair Paint Brush for Oil Acrylic Watercolor Kids/Artists/Beginners/Students' ),
    order_options   ( 'Color: 50pcs round' ),
    order_price     ( 'AU$3.29' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.48' ),
  ),
);

equipment(
  equipment_date( '2024-07-12' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S82f8e3c86a1b40aab3335dd06a9b6ac0q/50Pcs-Painting-Brushes-Set-Art-Round-Flat-Hair-Nylon-Hair-Paint-Brush-for-Oil-Acrylic-Watercolor.jpg_640x640.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Yutiars' ),
    model_name         ( 'Flat' ),
    EquipmentFeature::PAINT_BRUSHES,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yutiars' ),
    model_name         ( 'Flat' ),
    equipment_type     ( 'Paint Brush Set' ),
    category          ( 'Paint Brush' ),
    category          ( 'Brush' ),
    category          ( 'Hand Tool' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yutiars_Flat_Paint_Brush_Set' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005007250364880.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DciBNdh' ),
    listing_name   ( '50Pcs Painting Brushes Set Art Round Flat Hair Nylon Hair Paint Brush for Oil Acrylic Watercolor Kids/Artists/Beginners/Students' ),
    item_options  ( 'Color: 50pcs flat' ),
    item_price    ( 'AU$5.77' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005007250364880.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.16.21ef1802fDX5nM&orderId=8190506672713938' ),
    order_id        ( '8190506672713938' ),
    order_date      ( 'Jul 12, 2024' ),
    order_item_name ( '50Pcs Painting Brushes Set Art Round Flat Hair Nylon Hair Paint Brush for Oil Acrylic Watercolor Kids/Artists/Beginners/Students' ),
    order_options   ( 'Color: 50pcs flat' ),
    order_price     ( 'AU$8.22' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.82' ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S85fb88309d6f4baf8855a9ad40052b05W/3pcs-Drill-Brush-Attachment-Set-Power-Scrubber-Brush-With-Drill-Scrub-Brush-For-Cleaning-Showers-Tubs.jpeg_640x640.jpeg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( '3pcs Drill' ),
    EquipmentFeature::SCRUB_BRUSH,
    EquipmentFeature::DRILL_BIT,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( '3pcs' ),
    equipment_type     ( 'Drill Scrub Brush' ),
    category          ( 'Brush' ),
    category          ( 'Drill Bit' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_3pcs_Drill_Scrub_Brush' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006888412238.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DBqxYRt' ),
    listing_name   ( '3pcs Drill Brush Attachment Set Power Scrubber Brush With Drill Scrub Brush For Cleaning Showers Tubs Bathroom Tile Grout Carpet' ),
    item_options  ( 'Color: 3pc-yellow' ),
    item_price    ( 'AU$7.68' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006888412238.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.6.53651802LMoqC2&orderId=8190382506983938' ),
    order_id        ( '8190382506983938' ),
    order_date      ( '2024-07-11' ),
    order_item_name ( '3pcs Drill Brush Attachment Set Power Scrubber Brush With Drill Scrub Brush For Cleaning Showers Tubs Bathroom Tile Grout Carpet' ),
    order_options   ( 'Color: 3pc-yellow' ),
    order_price     ( 'AU$5.99' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.74' ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S1b5fdfc88f7d46cfbc7ac7b44e9e7fafG/500pcs-100pcs-Per-Pack-5-Packs-Double-ended-Cotton-Swabs-Baby-Cotton-Swabs-Ear-Cleaning-Sticks.jpg_640x640.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'Double-ended' ),
    EquipmentFeature::COTTON_SWABS,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( 'Double-ended' ),
    equipment_type     ( 'Cotton Swabs' ),
    category          ( 'Cleaning' ),
    category          ( 'Disposable' ),
  ),
  */
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006407439762.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DFwzGLh' ),
    listing_name   ( '500pcs ,100pcs Per Pack, 5 Packs, Double-ended Cotton Swabs, Baby Cotton Swabs, Ear Cleaning Sticks, Healthy Cleaning Tools' ),
    item_options  ( 'Color: 300PCs' ),
    item_price    ( 'AU$3.19' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006407439762.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.11.53651802LMoqC2&orderId=8190382507003938' ),
    order_id        ( '8190382507003938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( '500pcs ,100pcs Per Pack, 5 Packs, Double-ended Cotton Swabs, Baby Cotton Swabs, Ear Cleaning Sticks, Healthy Cleaning Tools' ),
    order_options   ( 'Color: 300PCs' ),
    order_price     ( 'AU$2.09' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.33' ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S3311b3bda6a84f3cb3fbd5b43ca9debeW/Small-Screwdriver-Set-30-Mini-Magnetic-Precision-Screwdriver-Drill-Set-Star-Y-Club-Triangle-Cross-Slotted.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( 'Mini Magnetic' ),
    EquipmentFeature::PRECISION_SCREWDRIVER_SET,
    EquipmentFeature::MINI_SCREWDRIVER_SET,
    EquipmentFeature::DRILL_BIT,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH000,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH00,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH0,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH1,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH2,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL1_5,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL2,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL2_5,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL3,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL4,
    EquipmentFeature::TORX_SCREWDRIVER_T3,
    EquipmentFeature::TORX_SCREWDRIVER_T4,
    EquipmentFeature::TORX_SCREWDRIVER_T5,
    EquipmentFeature::TORX_SCREWDRIVER_T6,
    EquipmentFeature::TORX_SCREWDRIVER_T8,
    EquipmentFeature::TORX_SCREWDRIVER_T10,
    EquipmentFeature::TRI_POINT_Y_SCREWDRIVER_Y2,
    EquipmentFeature::TRI_POINT_Y_SCREWDRIVER_Y3,
    EquipmentFeature::TRIANGULAR_SCREWDRIVER_2_0,
    EquipmentFeature::TRIANGULAR_SCREWDRIVER_2_3,
    EquipmentFeature::HEX_SCREWDRIVER_H1_5,
    EquipmentFeature::HEX_SCREWDRIVER_H2,
    EquipmentFeature::HEX_SCREWDRIVER_H2_5,
    EquipmentFeature::HEX_SCREWDRIVER_H3,
    EquipmentFeature::HEX_SCREWDRIVER_H4,
    EquipmentFeature::HEX_SCREWDRIVER_H5,
    EquipmentFeature::U_DRIVE_SCREWDRIVER_U2_3,
    EquipmentFeature::PENTALOBE_SCREWDRIVER_P2,
    EquipmentFeature::PENTALOBE_SCREWDRIVER_P5,
    EquipmentFeature::PENTALOBE_SCREWDRIVER_P7,
    EquipmentAttribute::MAGNETIC,
    EquipmentAttribute::HEART,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( 'Mini Magnetic Precision' ),
    equipment_type     ( 'Screwdriver Set' ),
    category          ( 'Screwdriver' ),
    category          ( 'Drill Bit' ),
    category          ( '❤️' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_Mini_Magnetic_Precision_Screwdriver_Set' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005007187681360.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DduOEoF' ),
    listing_name   ( 'Small Screwdriver Set,30 Mini Magnetic Precision Screwdriver Drill Set (Star, Y, Club, Triangle, Cross, Slotted, U, Hexagonal He' ),
    item_options  ( 'Color: Package 1' ),
    item_price    ( 'AU$4.75' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005007187681360.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.16.53651802LMoqC2&orderId=8190382507023938' ),
    order_id        ( '8190382507023938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( 'Small Screwdriver Set,30 Mini Magnetic Precision Screwdriver Drill Set (Star, Y, Club, Triangle, Cross, Slotted, U, Hexagonal He' ),
    order_options   ( 'Color: Package 1' ),
    order_price     ( 'AU$3.29' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.46' ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S844c5cc3670848f9a899d95800b649544/29-In-1-Mini-Precision-Screwdriver-Tool-Kit-Portable-Screwdriver-Bits-Tool-Set-Pocket-Tools-Professional.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( '29 In 1 Mini' ),
    EquipmentFeature::PRECISION_SCREWDRIVER_SET,
    EquipmentFeature::MINI_SCREWDRIVER_SET,

    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH0000,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH1_2,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH000,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH00,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH1,
    EquipmentFeature::PENTALOBE_SCREWDRIVER_P2,
    EquipmentFeature::PENTALOBE_SCREWDRIVER_P5,

    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL1,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL1_5,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL2,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL3,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL4,
    EquipmentFeature::TRI_POINT_Y_SCREWDRIVER_Y000,
    EquipmentFeature::TRI_POINT_Y_SCREWDRIVER_Y1,

    EquipmentFeature::TORX_SCREWDRIVER_T2,
    EquipmentFeature::TORX_SCREWDRIVER_T3,
    EquipmentFeature::TORX_SCREWDRIVER_T4,
    EquipmentFeature::TORX_SCREWDRIVER_T5,
    EquipmentFeature::TORX_SCREWDRIVER_T6,
    EquipmentFeature::TORX_SCREWDRIVER_T7,
    EquipmentFeature::TORX_SCREWDRIVER_T8,

    EquipmentFeature::TORX_SCREWDRIVER_T10,
    EquipmentFeature::TORX_SCREWDRIVER_T15,
    EquipmentFeature::TRIANGULAR_SCREWDRIVER_2_0,
    EquipmentFeature::TRIANGULAR_SCREWDRIVER_2_3,
    EquipmentFeature::TRIANGULAR_SCREWDRIVER_3_0,
    EquipmentFeature::U_DRIVE_SCREWDRIVER_U2_6,
    EquipmentFeature::RESET_PIN_SCREWDRIVER,

  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( '29 In 1 Mini Precision' ),
    equipment_type     ( 'Screwdriver Set' ),
    category          ( 'Screwdriver' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_Mini_Magnetic_Precision_Screwdriver_Set' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006310779162.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DlDg9L5' ),
    listing_name   ( '29 In 1 Mini Precision Screwdriver Tool Kit Portable Screwdriver Bits Tool Set Pocket Tools Professional Electronics Repair Tool' ),
    item_options  ( 'Color: 29 PCS' ),
    item_price    ( 'AU$5.75' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006310779162.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.21.53651802LMoqC2&orderId=8190382507043938' ),
    order_id        ( '8190382507043938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( '29 In 1 Mini Precision Screwdriver Tool Kit Portable Screwdriver Bits Tool Set Pocket Tools Professional Electronics Repair Tool' ),
    order_options   ( 'Color: 29 PCS' ),
    order_price     ( 'AU$3.29' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.52' ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sdcd112c1a41f45189877fb5a73fda5b6F/2pcs-Magnetic-Soft-Jaw-Pads-4-5-6-Inch-For-Metal-Vise-Bench-Machine-Tools-Vise.jpeg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( '2pcs Magnetic Soft Vise' ),
    EquipmentFeature::JAW_PADS,
    EquipmentFeature::VISE,
    EquipmentAttribute::MAGNETIC,
    EquipmentAttribute::ATTACHMENT,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( '2pcs Magnetic Soft' ),
    equipment_type     ( 'Vise Jaw Pads' ),
    category          ( 'Vise' ),
    category          ( 'Attachment' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_2pcs_Magnetic_Soft_Vise_Jaw_Pads' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006358554010.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DB4AanD' ),
    listing_name   ( '2pcs Magnetic Soft Jaw Pads 4.5/6 Inch For Metal Vise Bench Machine Tools Vise Softs Metal Wood Fixing Protection Parts Tool' ),
    item_options  ( 'Color: 4inch' ),
    item_price    ( 'AU$5.44' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006358554010.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.26.53651802LMoqC2&orderId=8190382507063938' ),
    order_id        ( '8190382507063938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( '2pcs Magnetic Soft Jaw Pads 4.5/6 Inch For Metal Vise Bench Machine Tools Vise Softs Metal Wood Fixing Protection Parts Tool' ),
    order_options   ( 'Color: 4inch' ),
    order_price     ( 'AU$4.79' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.53' ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S7c2e77628d1a401b8a487d6ce4f4ea09w/10pcs-Magic-Sponge-Wipe-Melamine-Foam-Sponge-Household-Cleaning-Sponge-Kitchen-Cleaning-Sponge-Car-Wash-Sponge.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( '10pcs Magic' ),
    EquipmentFeature::FOAM_SPONGE,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( '10pcs Magic' ),
    equipment_type     ( 'Foam Sponge' ),
    category          ( 'Cleaning' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_10pcs_Magic_Foam_Sponge' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005007069120339.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DBB5ZtZ' ),
    listing_name   ( '10pcs Magic Sponge Wipe, Melamine Foam Sponge, Household Cleaning Sponge Kitchen Cleaning Sponge, Car Wash Sponge' ),
    item_options  ( 'Color: 10PCs' ),
    item_price    ( 'AU$4.83' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005007069120339.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.31.53651802LMoqC2&orderId=8190382507083938' ),
    order_id        ( '8190382507083938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( '10pcs Magic Sponge Wipe, Melamine Foam Sponge, Household Cleaning Sponge Kitchen Cleaning Sponge, Car Wash Sponge' ),
    order_options   ( 'Color: 10PCs' ),
    order_price     ( 'AU$1.79' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.22' ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sd3c7b9c0fa7f41688e526630a7fb0f10d/1-5-Stain-Grease-Cleaner-Grill-Cleaning-Bricks-Grill-Cleaning-Stone-Grill-Grill-Grill-Tools-Kitchen.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( '2pcs Grease Cleaner' ),
    EquipmentFeature::CLEANING_BRICKS,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( '2pcs Grease Cleaner' ),
    equipment_type     ( 'Cleaning Bricks' ),
    category          ( 'Cleaning' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_2pcs_Grease_Cleaner_Cleaning_Bricks' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006754273035.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DC6Bh9h' ),
    listing_name   ( '1-5 Stain Grease Cleaner Grill Cleaning Bricks Grill Cleaning Stone Grill Grill Grill Tools Kitchen Cleaning Gadgets' ),
    item_options  ( 'Color: 2pcs' ),
    item_price    ( 'AU$5.62' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006754273035.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.36.53651802LMoqC2&orderId=8190382507103938' ),
    order_id        ( '8190382507103938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( '1-5 Stain Grease Cleaner Grill Cleaning Bricks Grill Cleaning Stone Grill Grill Grill Tools Kitchen Cleaning Gadgets' ),
    order_options   ( 'Color: 2pcs' ),
    order_price     ( 'AU$2.99' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.51' ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sde6e8781d1c642149a798d746fc85ca95/Gold-Silver-Metallic-Marker-Pen-Waterproof-Permanent-Paint-Marker-Pen-for-Rock-Mug-Ceramic-Glass-DIY.jpg_640x640.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( 'Metallic' ),
    EquipmentFeature::CRAFTWORK_PEN,
    EquipmentFeature::BRUSH,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( 'Metallic' ),
    equipment_type     ( 'Craftwork Pen' ),
    category          ( 'Pen' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_Metallic_Craftwork_Pen' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005664056137.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DElxWar' ),
    listing_name   ( 'Gold Silver Metallic Marker Pen Waterproof Permanent Paint Marker Pen for Rock, Mug, Ceramic, Glass DIY Painting Supplies' ),
    item_options  ( 'Hard & Soft' ),
    item_price    ( 'AU$3.24' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005664056137.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.41.53651802LMoqC2&orderId=8190382507123938' ),
    order_id        ( '8190382507123938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( 'Gold Silver Metallic Marker Pen Waterproof Permanent Paint Marker Pen for Rock, Mug, Ceramic, Glass DIY Painting Supplies' ),
    order_options   ( 'Hard-1Gold 1Silver' ),
    order_price     ( 'AU$2.99' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.32' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005664056137.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.41.53651802LMoqC2&orderId=8190382507123938' ),
    order_id        ( '8190382507123938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( 'Gold Silver Metallic Marker Pen Waterproof Permanent Paint Marker Pen for Rock, Mug, Ceramic, Glass DIY Painting Supplies' ),
    order_options   ( 'Soft-Gold (2pcs)' ),
    order_price     ( 'AU$2.99' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.32' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005664056137.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.1.21ef1802pevaIx&orderId=8191436298513938' ),
    order_id        ( '8191436298513938' ),
    order_date      ( 'Jul 21, 2024' ),
    order_item_name ( 'Gold Silver Metallic Marker Pen Waterproof Permanent Paint Marker Pen for Rock, Mug, Ceramic, Glass DIY Painting Supplies' ),
    order_options   ( 'Soft-Silver (2pcs)' ),
    order_price     ( 'AU$2.94' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005664056137.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.1.21ef1802pevaIx&orderId=8191436298513938' ),
    order_id        ( '8191436298513938' ),
    order_date      ( 'Jul 21, 2024' ),
    order_item_name ( 'Gold Silver Metallic Marker Pen Waterproof Permanent Paint Marker Pen for Rock, Mug, Ceramic, Glass DIY Painting Supplies' ),
    order_options   ( 'Hard-Gold (2pcs)' ),
    order_price     ( 'AU$3.03' ),
    order_quantity  ( 3 ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005664056137.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.1.21ef1802pevaIx&orderId=8191436298513938' ),
    order_id        ( '8191436298513938' ),
    order_date      ( 'Jul 21, 2024' ),
    order_item_name ( 'Gold Silver Metallic Marker Pen Waterproof Permanent Paint Marker Pen for Rock, Mug, Ceramic, Glass DIY Painting Supplies' ),
    order_options   ( 'Hard-Silver (2pcs)' ),
    order_price     ( 'AU$2.87' ),
    order_quantity  ( 3 ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sc67f481627db457c9e35e4f6f6f5b630Q/Multi-function-Tool-Wire-Brush-Copper-Plated-Stainless-Steel-Brush-1PCS-Long-Handle-Kitchen-Grill-Special.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( 'Long Handle' ),
    EquipmentFeature::WIRE_BRUSH,
    /*
    equipment_type     ( 'Wire Brush' ),
    category          ( 'Brush' ),
    category          ( 'Cleaning' ),
    */
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( 'Long Handle' ),
    equipment_type     ( 'Wire Brush' ),
    category          ( 'Brush' ),
    category          ( 'Cleaning' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_Long_Handle_Wire_Brush' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006926432587.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dm5LBzD' ),
    listing_name   ( 'Multi-function Tool Wire Brush Copper Plated (Stainless Steel Brush, 1PCS) Long Handle Kitchen Grill Special Plate Rust Removal' ),
    item_options  ( 'Color: Yellow' ),
    item_price    ( 'AU$4.08' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006926432587.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.56.53651802LMoqC2&orderId=8190468597143938' ),
    order_id        ( '8190468597143938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( 'Multi-function Tool Wire Brush Copper Plated (Stainless Steel Brush, 1PCS) Long Handle Kitchen Grill Special Plate Rust Removal' ),
    order_options   ( 'Color: Yellow' ),
    order_price     ( 'AU$2.99' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.37' ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S40fcdcfbe62e4223890bdc28a2e9a4930/Multifunctional-HDMI-Compatible-HD-Tester-Network-Cable-RJ45-Lan-8P8C-POE-Anti-Burn-RJ11-Telephone-Line.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'OULLX' ),
    model_name         ( 'NSS-681HDMI-RJ45' ),
    EquipmentFeature::CABLE_TESTER,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'OULLX' ),
    model_name         ( 'NSS-681HDMI-RJ45' ),
    equipment_type     ( 'Cable Tester' ),
    category          ( 'Cable Tester' ),
    category          ( 'Test Equipment' ),
  ),
  */
  see_also      ( 'Ampcom Automatic Network Cable Tester' ),
  sixsigma_url  ( 'https://www.jj5.net/wiki/OULLX_NSS-681HDMI-RJ45_Cable_Tester' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005754974142.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DmnAZAL' ),
    listing_name   ( 'Multifunctional HDMI-Compatible HD Tester Network Cable RJ45 Lan 8P8C POE Anti Burn RJ11 Telephone Line Protection' ),
    item_price    ( 'AU$6.79' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005754974142.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.71.53651802LMoqC2&orderId=8190468597243938' ),
    order_id        ( '8190468597243938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( 'Multifunctional HDMI-Compatible HD Tester Network Cable RJ45 Lan 8P8C POE Anti Burn RJ11 Telephone Line Protection' ),
    order_price     ( 'AU$6.29' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.64' ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S9cca1ce2e5114e7080552b06f37ff4d3k/5pcs-Crevice-Cleaning-Brush-Multifunctional-Gap-Cleaning-Brush-Tool-Bathroom-Gap-Brush-Grout-Cleaner-Brush-Hard.png_640x640.png_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Damotk' ),
    model_name         ( '5pcs Crevice' ),
    EquipmentFeature::CLEANING_BRUSH,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Damotk' ),
    model_name         ( '5pcs Crevice Cleaning' ),
    equipment_type     ( 'Brush' ),
    category          ( 'Brush' ),
    category          ( 'Cleaning' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Damotk_5pcs_Crevice_Cleaning_Brush' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006842332119.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DeLIM9z' ),
    listing_name   ( '5pcs Crevice Cleaning Brush, Multifunctional Gap Cleaning Brush Tool, Bathroom Gap Brush, Grout Cleaner Brush Hard Bristle' ),
    item_options  ( 'Color: Black' ),
    item_price    ( 'AU$4.85' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006842332119.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.76.53651802LMoqC2&orderId=8190468597263938' ),
    order_id        ( '8190468597263938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( '5pcs Crevice Cleaning Brush, Multifunctional Gap Cleaning Brush Tool, Bathroom Gap Brush, Grout Cleaner Brush Hard Bristle' ),
    order_options   ( 'Color: Black' ),
    order_price     ( 'AU$3.59' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.45' ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S0d96c3033c0e4feb9cb58f47aa361e1aK/1-20Pcs-Microfiber-Towels-Car-Wash-Drying-Cloth-Towel-Household-Cleaning-Cloths-Auto-Detailing-Polishing-Cloth.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( '10pcs Blue' ),
    EquipmentFeature::MICROFIBER_CLOTH,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( '10pcs Blue' ),
    equipment_type     ( 'Microfiber Cloth' ),
    category          ( 'Cloth' ),
    category          ( 'Cleaning' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_10pcs_Blue_Microfiber_Cloth' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006938264843.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_De4e5QF' ),
    listing_name   ( '1-20Pcs Microfiber Towels Car Wash Drying Cloth Towel Household Cleaning Cloths Auto Detailing Polishing Cloth Home Clean Tools' ),
    item_options  ( 'Color: 10pcs blue' ),
    item_price    ( 'AU$7.11' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006938264843.html' ),
    order_url       ( '' ),
    order_id        ( '' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( '1-20Pcs Microfiber Towels Car Wash Drying Cloth Towel Household Cleaning Cloths Auto Detailing Polishing Cloth Home Clean Tools' ),
    order_options   ( 'Color: 10pcs blue' ),
    order_price     ( 'AU$3.89' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.67' ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Se9c2ba08e97f46f49346ed74eab274ddi/Heavy-Duty-Stainless-Steel-Wire-Brush-with-Comfortable-Plastic-Handle-Perfect-for-Removing-Rust-Welding-Slag.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( 'Heavy Duty Stainless Steel' ),
    EquipmentFeature::WIRE_BRUSH,
  ),
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_Heavy_Duty_Stainless_Steel_Wire_Brush' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006941935938.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DkB0f8P' ),
    listing_name   ( 'Heavy Duty Stainless Steel Wire Brush with Comfortable Plastic Handle - Perfect for Removing Rust, Welding Slag, Dirt, and Paint' ),
    item_options  ( 'Color: Blue' ),
    item_price    ( 'AU$3.79' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006941935938.html' ),
    order_url       ( '' ),
    order_id        ( '' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( 'Heavy Duty Stainless Steel Wire Brush with Comfortable Plastic Handle - Perfect for Removing Rust, Welding Slag, Dirt, and Paint' ),
    order_options   ( 'Color: Blue' ),
    order_price     ( 'AU$2.39' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.36' ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S783ed641adb54e68b7520655e4327670u/Deburring-External-Chamfer-Tool-Metal-Hex-Triangle-Trimming-Drill-Bit-for-Stainless-Steel-Copper-Screw-Fast.jpg_640x640.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'aToolTour' ),
    model_name         ( 'Black Hexagon' ),
    EquipmentFeature::DEBURRING_DRILL_BIT,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'aToolTour' ),
    model_name         ( 'Black Hexagon' ),
    equipment_type     ( 'Deburring Drill Bit' ),
    category          ( 'Drill Bit' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/AToolTour_Black_Hexagon_Deburring_Drill_Bit' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005591119302.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DldOAhz' ),
    listing_name   ( 'Deburring External Chamfer Tool Metal Hex Triangle Trimming Drill Bit for Stainless Steel Copper Screw Fast Remove Burr Removal' ),
    item_options  ( 'Color: Black Hexagon' ),
    item_price    ( 'AU$2.56' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005591119302.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.101.53651802LMoqC2&orderId=8191002457703938' ),
    order_id        ( '8191002457703938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( 'Deburring External Chamfer Tool Metal Hex Triangle Trimming Drill Bit for Stainless Steel Copper Screw Fast Remove Burr Removal' ),
    order_options   ( 'Color: Black Hexagon' ),
    order_price     ( 'AU$2.09' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.32' ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sa25722e8ddcc471b84c57ca38dc9f5b74/4Pcs-Set-30mm-Deep-Hole-Long-Nib-Head-Markers-For-Metal-Perforating-Pen-Waterproof-Bathroom-Woodworking.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( '4pcs 30mm' ),
    EquipmentFeature::DEEP_HOLE_PEN,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( '4pcs 30mm Deep Hole' ),
    equipment_type     ( 'Pen' ),
    category          ( 'Pen' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_4pcs_30mm_Deep_Hole_Pen' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006974182914.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DE6kVKj' ),
    listing_name   ( '4Pcs/Set 30mm Deep Hole Long Nib Head Markers For Metal Perforating Pen Waterproof Bathroom Woodworking Decoration Multi-Purpose' ),
    item_options  ( 'Color: Pink' ),
    item_price    ( 'AU$4.37' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006974182914.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.106.53651802LMoqC2&orderId=8191002457723938' ),
    order_id        ( '8191002457723938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( '4Pcs/Set 30mm Deep Hole Long Nib Head Markers For Metal Perforating Pen Waterproof Bathroom Woodworking Decoration Multi-Purpose' ),
    order_options   ( 'Color: Pink' ),
    order_price     ( 'AU$3.89' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.43' ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Scc7a14aa198b48e9bcb8c0d15335cd7dp/6-Or12-Pcs-Industrial-Toothbrush-Mini-Copper-Steel-Wire-Brush-Stainless-Steel-Wire-Brush-Dirt-Hard.jpg_640x640.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( '6pcs' ),
    EquipmentFeature::WIRE_BRUSH,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( '6pcs' ),
    equipment_type     ( 'Wire Brush' ),
    category          ( 'Brush' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_6pcs_Wire_Brush' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005867110367.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DdtbXkJ' ),
    listing_name   ( '6 Or12 Pcs Industrial Toothbrush Mini Copper Steel Wire Brush Stainless Steel Wire Brush Dirt Hard Cleaning Toothbrush' ),
    item_options  ( 'Color: 6PCS' ),
    item_price    ( 'AU$5.04' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005867110367.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.116.53651802LMoqC2&orderId=8191002457763938' ),
    order_id        ( '8191002457763938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( '6 Or12 Pcs Industrial Toothbrush Mini Copper Steel Wire Brush Stainless Steel Wire Brush Dirt Hard Cleaning Toothbrush' ),
    order_options   ( 'Color: 6PCS' ),
    order_price     ( 'AU$2.99' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.52' ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S3355beb69e274afba2d4998ffea50000E/1-Set-Precision-Screwdriver-Set-25-In-1-Repair-Tool-Kit-Small-Screwdriver-Set-Star-Y.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Ausum' ),
    model_name         ( '25 In 1' ),
    EquipmentFeature::PRECISION_SCREWDRIVER_SET,
    EquipmentFeature::MINI_SCREWDRIVER_SET,

    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH0000,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH1_2,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH000,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH00,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH1,
    EquipmentFeature::RESET_PIN_SCREWDRIVER,

    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL1,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL1_5,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL2,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL3,
    EquipmentFeature::PENTALOBE_SCREWDRIVER_P2,
    EquipmentFeature::PENTALOBE_SCREWDRIVER_P5,

    EquipmentFeature::TORX_SCREWDRIVER_T2,
    EquipmentFeature::TORX_SCREWDRIVER_T3,
    EquipmentFeature::TORX_SCREWDRIVER_T4,
    EquipmentFeature::TORX_SCREWDRIVER_T5,
    EquipmentFeature::TORX_SCREWDRIVER_T6,
    EquipmentFeature::TORX_SCREWDRIVER_T7,

    EquipmentFeature::TORX_SCREWDRIVER_T8,
    EquipmentFeature::TORX_SCREWDRIVER_T10,
    EquipmentFeature::TORX_SCREWDRIVER_T15,
    EquipmentFeature::TRI_POINT_Y_SCREWDRIVER_Y000,
    EquipmentFeature::TRI_POINT_Y_SCREWDRIVER_Y1,
    EquipmentFeature::TRIANGULAR_SCREWDRIVER_2_3,

  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Ausum' ),
    model_name         ( '25 In 1 Precision' ),
    equipment_type     ( 'Screwdriver Set' ),
    category          ( 'Screwdriver' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Ausum_25_In_1_Precision_Screwdriver_Set' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006630216063.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DET3aUL' ),
    listing_name   ( '1 Set, Precision Screwdriver Set, 25 In 1 Repair Tool Kit, Small Screwdriver Set, Star/Y-type/Flat-blade/Triangle Screwdrivers F' ),
    item_options  ( 'Color: black' ),
    item_price    ( 'AU$4.68' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006630216063.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.127.53651802LMoqC2&orderId=8191002457843938' ),
    order_id        ( '8191002457843938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( '1 Set, Precision Screwdriver Set, 25 In 1 Repair Tool Kit, Small Screwdriver Set, Star/Y-type/Flat-blade/Triangle Screwdrivers F' ),
    order_options   ( 'Color: black' ),
    order_price     ( 'AU$3.29' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.45' ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S6d35e58c861f417a90fe58133a13a8135/3-4-6-Magnetic-Tray-Circular-Magnetic-Parts-Bowl-Screw-Storage-Tray-Stainless-Steel-Tools-Tray.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'MOKIN' ),
    model_name         ( 'CMO-346 3-inch' ),
    EquipmentFeature::MAGNETIC_TRAY,
  ),
  sixsigma_url  ( 'https://www.jj5.net/wiki/MOKIN_CMO-346_3_inch_Magnetic_Tray' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005812766509.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DcGN0ft' ),
    listing_name  ( '3"/4"/6" Magnetic Tray Circular Magnetic Parts Bowl Screw Storage Tray Stainless Steel Tools Tray For Auto Suction Pad Tools' ),
    item_options  ( 'Specification: 3 Inch' ),
    item_price    ( 'AU$4.08' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005812766509.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.147.53651802LMoqC2&orderId=8190852628583938' ),
    order_id        ( '8190852628583938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( '3"/4"/6" Magnetic Tray Circular Magnetic Parts Bowl Screw Storage Tray Stainless Steel Tools Tray For Auto Suction Pad Tools' ),
    order_options   ( 'Specification: 3 Inch' ),
    order_price     ( 'AU$4.19' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.61' ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Saa732a0b4eb54f22b37c2a86ddacf3dc0/HZY-3D-Printer-Parts-ABS-Welding-Wire-Fixture-with-Two-Large-Suction-Magnets-Bracket-Welding-Clamp.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'TOOKKS' ),
    model_name         ( 'HZY ABS' ),
    EquipmentFeature::WIRE_FIXTURE,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'TOOKKS' ),
    model_name         ( 'HZY ABS' ),
    equipment_type     ( 'Wire Fixture' ),
    category          ( 'Vise' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/TOOKKS_HZY_ABS_Wire_Fixture' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006618522459.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DcHTdej' ),
    listing_name   ( 'HZY 3D Printer Parts ABS Welding Wire Fixture with Two Large Suction Magnets Bracket Welding Clamp For Motherboard Soldering' ),
    item_options  ( 'Color: HZY ABS Welding Wire' ),
    item_price    ( 'AU$5.77' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006618522459.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.135.5edd1802oqOygp&orderId=8190852628563938' ),
    order_id        ( '8190852628563938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( 'HZY 3D Printer Parts ABS Welding Wire Fixture with Two Large Suction Magnets Bracket Welding Clamp For Motherboard Soldering' ),
    order_options   ( 'Color: HZY ABS Welding Wire' ),
    order_price     ( 'AU$3.29' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.52' ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S2adf64d8fc254c1aadf00e92a91d88c6s/Wood-Metal-Engraving-Power-Sanding-Engraving-Accessories-Dremel-Sanding-Tools-Power-Rotary-Tool-Accessories-for-Dremel.jpg_640x640.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Tungfull' ),
    model_name         ( 'TH-161' ),
    EquipmentFeature::ROTARY_TOOL_ACCESSORY_SET,
    EquipmentFeature::ROTARY_WIRE_BRUSH,
    EquipmentFeature::ROTARY_NYLON_BRUSH,
    EquipmentFeature::ROTARY_SANDPAPER_WHEEL,
    EquipmentFeature::ROTARY_GRINDING_STONE,
    EquipmentFeature::ROTARY_SHARPENING_STONE,
    EquipmentFeature::ROTARY_SANDING_BAND,
    EquipmentFeature::DRUM_SANDING_MANDREL,
    EquipmentFeature::WRENCH,
    EquipmentFeature::ROTARY_CUTTING_DISC,
    EquipmentFeature::CUTTING_WHEEL_MANDREL,
    EquipmentFeature::ROTARY_POLISHING_WOOL_WHEEL,
    EquipmentFeature::ROTARY_DRILL_CHUCK,
    EquipmentFeature::ROTARY_GRINDING_RUBBER,
    EquipmentFeature::HSS_DRILL_BIT,
    EquipmentFeature::ROTARY_GRINDING_BURR,
    EquipmentFeature::ROTARY_MILLING_CUTTER,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Tungfull' ),
    model_name         ( 'TH-161' ),
    equipment_type     ( 'Rotary Tool Bits' ),
    category          ( 'Accessory' ),
    category          ( 'Attachment' ),
    category          ( 'Drill Bit' ),
    category          ( 'Cutting Disc' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Tungfull_TH-161_Rotary_Tool_Bits' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006746448701.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DDW7iLt' ),
    listing_name   ( 'Wood Metal Engraving Power Sanding Engraving Accessories Dremel Sanding Tools Power Rotary Tool Accessories for Dremel Bits' ),
    item_options  ( 'Color: 161PCs' ),
    item_price    ( 'AU$12.42' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006746448701.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.146.5edd1802oqOygp&orderId=8190852628603938' ),
    order_id        ( '8190852628603938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( 'Wood Metal Engraving Power Sanding Engraving Accessories Dremel Sanding Tools Power Rotary Tool Accessories for Dremel Bits' ),
    order_options   ( 'Color: 161PCs' ),
    order_price     ( 'AU$10.50' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$1.21' ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S250e65aed7274e958322b8992f4c5b5b4/100pc-Twist-Drill-1-3mm-Hand-Electric-Drill-DIY-Woodwork-Drill-Titanium-Plated-Natural-Color-Drill.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( '100pc Titanium Plated' ),
    EquipmentFeature::DRILL_BITS,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( '100pc Titanium Plated' ),
    equipment_type     ( 'Drill Bits' ),
    category          ( 'Drill Bit' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_100pc_Titanium_Plated_Drill_Bits' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006432042066.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dmyb58n' ),
    listing_name   ( '100pc Twist Drill 1-3mm Hand Electric Drill DIY Woodwork Drill Titanium Plated Natural Color Drill Bit Tool Accessories Set' ),
    item_options  ( 'Shank Shape: Round; Color: 100pc twist drill' ),
    item_price    ( 'AU$5.58' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006432042066.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.156.5edd1802oqOygp&orderId=8190852628543938' ),
    order_id        ( '8190852628543938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( '100pc Twist Drill 1-3mm Hand Electric Drill DIY Woodwork Drill Titanium Plated Natural Color Drill Bit Tool Accessories Set' ),
    order_options   ( 'Shank Shape: Round; Color: 100pc twist drill' ),
    order_price     ( 'AU$4.49' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.60' ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S19656387bcff498ab677b07d7fb05be6t/Universal-170-Mini-Diagonal-Pliers-Cutting-Pliers-Multifunctional-Pliers-Electricity-Wire-Stripper-Hand-Tools.jpg_640x640.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Plato' ),
    model_name         ( 'Model 170' ),
    EquipmentFeature::WIRE_CUTTER,
    EquipmentFeature::PLIERS,
    EquipmentAttribute::HEART,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Plato' ),
    model_name         ( 'Model 170' ),
    equipment_type     ( 'Wire Cutters' ),
    category          ( 'Hand Tool' ),
    category          ( 'Wire Cutter' ),
    category          ( '❤️' ),
  ),
  */
  sixsigma_url    ( 'https://www.jj5.net/wiki/Plato_Model_170_Wire_Cutters' ),
  see_also        ( 'Aokin Wire Cutter' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006082115374.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DdyxCNV' ),
    listing_name   ( 'Universal 170 Mini Diagonal Pliers Cutting Pliers Multifunctional Pliers Electricity Wire Stripper Hand Tools' ),
    item_options  ( 'Color: 5pcs' ),
    item_price    ( 'AU$10.68' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006082115374.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.202.5edd1802oqOygp&orderId=8191201591173938' ),
    order_id        ( '8191201591173938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( 'Universal 170 Mini Diagonal Pliers Cutting Pliers Multifunctional Pliers Electricity Wire Stripper Hand Tools' ),
    order_options   ( 'Color: 5pcs' ),
    order_price     ( 'AU$9.00' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$1.36' ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S816e862d4c5b49c5bcb65e72322daa8be/Universal-Handheld-Quick-Stripper-Decrustation-Plier-Adjustable-Electric-Wire-Cable-Peel-Wire-Cable-Cutter-Stripping-hand.jpg_640x640.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( 'Universal Handheld' ),
    EquipmentFeature::WIRE_STRIPPER,
    EquipmentFeature::PLIERS,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( 'Universal Handheld' ),
    equipment_type     ( 'Wire Stripper' ),
    category          ( 'Wire Stripper' ),
    category          ( 'Hand Tool' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_Universal_Handheld_Wire_Stripper' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006185901339.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DECM0h5' ),
    listing_name   ( 'Universal Handheld Quick Stripper Decrustation Plier Adjustable Electric Wire Cable Peel Wire Cable Cutter Stripping hand Tool' ),
    item_options  ( 'Color: Silver and blade' ),
    item_price    ( 'AU$10.61' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006185901339.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.207.5edd1802oqOygp&orderId=8191201591193938' ),
    order_id        ( '8191201591193938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( 'Universal Handheld Quick Stripper Decrustation Plier Adjustable Electric Wire Cable Peel Wire Cable Cutter Stripping hand Tool' ),
    order_options   ( 'Color: Silver and blade' ),
    order_price     ( 'AU$7.50' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.95' ),
  ),
);

equipment(
  equipment_date( '2023-11-23' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S9fda97b66ffc4727b5e3496809becea9u/high-quality-M469D-RJ45-Cable-lan-tester-Network-Cable-Tester-RJ45-RJ11-RJ12-CAT5-UTP-LAN.jpg_.webp' ),
  equipment_item(
    //manufacturer_name  ( 'ANENG' ),
    //model_name         ( 'M469D' ),
    manufacturer_name  ( 'Ampcom' ),
    model_name         ( 'Automatic' ),
    EquipmentFeature::NETWORK_CABLE_TESTER,
  ),
  /*
  equipment_info(
    //manufacturer_name  ( 'ANENG' ),
    //model_name         ( 'M469D' ),
    manufacturer_name  ( 'Ampcom' ),
    model_name         ( 'Automatic' ),
    equipment_type     ( 'Network Cable Tester' ),
    category          ( 'Cable Tester' ),
  ),
  */
  see_also      ( 'OULLX NSS-681HDMI-RJ45 Cable Tester' ),
  sixsigma_url  ( 'https://www.jj5.net/wiki/ANENG_M469D_Network_Cable_Tester' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005288246731.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dlq8FHh' ),
    listing_name   ( 'high-quality M469D RJ45 Cable lan tester Network Cable Tester RJ45 RJ11 RJ12 CAT5 UTP LAN Cable Tester Networking Repair Tool' ),
    item_price    ( 'AU$7.30' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005288246731.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.232.5edd1802oqOygp&orderId=8180079761953938' ),
    order_id        ( '' ),
    order_date      ( 'Nov 23, 2023' ),
    order_item_name ( 'high-quality M469D RJ45 Cable lan tester Network Cable Tester RJ45 RJ11 RJ12 CAT5 UTP LAN Cable Tester Networking Repair Tool' ),
    order_options   ( '8180079761953938' ),
    order_price     ( 'AU$2.59' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$4.54' ),
    order_gst       ( 'AU$0.71' ),
  ),
);

equipment(
  equipment_date( '2021-07-30' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/UcgAAOSwrjtfSNEU/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name  ( 'Aussishop' ),
    EquipmentFeature::CALIPERS,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'oz_gear' ),
    //model_name        ( '' ),
    equipment_type     ( 'Calipers' ),
    category          ( 'Hand Tool' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Oz_gear_Calipers' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/256037179868' ),
    affiliate_url ( 'https://ebay.us/uPBFVm' ),
    listing_name  ( '150mm Stainless Steel Digital Electronic Gauge Vernier Caliper Micrometer Tool' ),
    item_price    ( 'AU$31.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com/itm/256037179868' ),
    affiliate_url ( 'https://ebay.us/ydAL7A' ),
    listing_name   ( '150mm Stainless Steel Digital Electronic Gauge Vernier Caliper Micrometer Tool' ),
    item_price    ( 'AU$31.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/324276062412' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=01-07405-77011#/' ),
    order_id        ( '01-07405-77011' ),
    order_date      ( '30 Jul 2021' ),
    order_item_name ( 'Stainless Steel LCD Digital Electronic Vernier Caliper Micrometer 6" Inch/150mm' ),
    order_price     ( 'AU$21.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-10-20' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S18878a02f03a4a23b85f94bb814331c30/1PC-Digital-Depth-Gauge-Caliper-Tread-Depth-Gauge-LCD-Tire-Tread-Gauge-For-Car-Tire-0.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Yum Cha' ),
    EquipmentFeature::DEPTH_GAUGE,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yum Cha' ),
    //model_name        ( '' ),
    equipment_type     ( 'Depth Gauge' ),
    category          ( 'Hand Tool' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_Depth_Gauge' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005631574196.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DlE1wH5' ),
    listing_name  ( '1PC Digital Depth Gauge Caliper Tread Depth Gauge LCD Tire Tread Gauge For Car Tire 0-25mm Measurer Tool Caliper Repair Tools' ),
    item_price    ( 'AU$4.83' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005631574196.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.1.18e61802Dv4VsQ&orderId=8177641878953938' ),
    order_id        ( '8177641878953938' ),
    order_date      ( 'Oct 20, 2023' ),
    order_item_name ( '1PC Digital Depth Gauge Caliper Tread Depth Gauge LCD Tire Tread Gauge For Car Tire 0-25mm Measurer Tool Caliper Repair Tools' ),
    order_price     ( 'AU$3.20' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-03-16' ),
  equipment_icon( 'https://media.prod.bunnings.com.au/api/public/content/738e8d4eb7484be8bf7ad3c22873f93f?v=70a30896&t=w500dpr1' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.arlec.com.au/wp-content/files/PB91.pdf' ),
      link_text       ( 'Arlec PB91 (PDF)' ),
    ),
    manufacturer_name  ( 'Arlec' ),
    model_name         ( 'PB91 Plug-In RCD Safety Switch With' ),
    EquipmentFeature::SURGE_PROTECTOR,
    EquipmentFeature::RESIDUAL_CURRENT_DEVICE,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Arlec' ),
    model_name         ( 'PB91' ),
    equipment_type     ( 'Plug-In RCD Safety Switch with Surge Protector' ),
    category          ( 'Safety Equipment' ),
    category          ( 'Safety Switch' ),
    category          ( 'Surge Protector' ),
    category          ( 'Residual Current Device' ),
    manufacturer_link (
      link_href       ( 'https://www.arlec.com.au/wp-content/files/PB91.pdf' ),
      link_text       ( 'Arlec PB91 (PDF)' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Arlec_PB91' ),
  affiliate_link(
    equipment_url ( 'https://www.bunnings.com.au/arlec-single-outlet-safety-switch_p7050029' ),
    listing_name   ( 'Arlec Single Outlet Safety Switch' ),
    item_price    ( 'AU$34.55' ),
  ),
  purchase(
    equipment_url   ( 'https://www.bunnings.com.au/arlec-single-outlet-safety-switch_p7050029' ),
    order_url       ( 'https://www.bunnings.com.au/my-account/previous-orders/order-details?orderId=5056548185' ),
    order_id        ( '5056548185' ),
    order_date      ( '16 March 2023' ),
    order_item_name ( 'ADAPTOR ARLEC SGL OUTLET RCD SAFETY PB91' ),
    order_price     ( 'AU$33.56' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-03-16' ),
  equipment_icon( 'https://media.prod.bunnings.com.au/api/public/content/44b5a972407c42e38d2e9b2a7501a0ba?v=7af707bd&t=w500dpr1' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.sandleford.com.au/funnel-set-4-pc' ),
      link_text       ( 'Sandleford Funnel Set 4 PC' ),
    ),
    manufacturer_name  ( 'Sandleford' ),
    model_name         ( '4 Piece' ),
    EquipmentFeature::FUNNEL_SET,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Sandleford' ),
    model_name         ( '4 Piece' ),
    equipment_type     ( 'Funnel Set' ),
    category          ( 'Funnel' ),
    manufacturer_link (
      link_href       ( 'https://www.sandleford.com.au/funnel-set-4-pc' ),
      link_text       ( 'Sandleford Funnel Set 4 PC' ),
    ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Sandleford_4_Piece_Funnel_Set' ),
  affiliate_link(
    equipment_url ( 'https://www.bunnings.com.au/sandleford-4-piece-funnel-set_p3400421' ),
    listing_name   ( 'Sandleford 4 Piece Funnel Set' ),
    item_price    ( 'AU$4.49' ),
  ),
  purchase(
    equipment_url   ( 'https://www.bunnings.com.au/sandleford-4-piece-funnel-set_p3400421' ),
    order_url       ( 'https://www.bunnings.com.au/my-account/previous-orders/order-details?orderId=5056548185' ),
    order_id        ( '5056548185' ),
    order_date      ( '16 March 2023' ),
    order_item_name ( 'FUNNEL SET SANDLEFORD 4 PIECE SET PFK4' ),
    order_price     ( 'AU$4.49' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-07-11' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sdeb0d4d3e98c4abfa49275bf01e84b06r/100pcs-Releasable-Cable-Organizer-Ties-Mouse-Earphones-Wire-Management-Nylon-Cable-Ties-Reusable-Loop-Hoop-Tape.png_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( '100pcs Releasable' ),
    EquipmentFeature::CABLE_ORGANIZER,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( '100pcs Releasable' ),
    equipment_type     ( 'Cable Organizer' ),
    category          ( 'Cable Tidy' ),
  ),
  */
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006956572734.html' ),
    listing_name   ( '100pcs Releasable Cable Organizer Ties Mouse Earphones Wire Management Nylon Cable Ties Reusable Loop Hoop Tape Straps Tie' ),
    item_price    ( 'AU$4.83' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006956572734.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.218.fae11802fpXIz3&orderId=8191201591103938' ),
    order_id        ( '8191201591103938' ),
    order_date      ( 'Jul 11, 2024' ),
    order_item_name ( '100pcs Releasable Cable Organizer Ties Mouse Earphones Wire Management Nylon Cable Ties Reusable Loop Hoop Tape Straps Tie' ),
    order_price     ( 'AU$3.43' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.44' ),
  ),
);

equipment(
  equipment_date( '2024-07-22' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Hcb751e5dcab04de6b91e5c9d9e30bc6bS/50mm-2-Inch-Polishing-Mix-Grit-Sanding-Disc-Polish-Pad-Backer-Sander-Plate-with-3mm-Shank.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'OOTDTY' ),
    model_name         ( 'K9FA1E0555' ),
    EquipmentFeature::ROTARY_SANDING_DISC,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'OOTDTY' ),
    model_name         ( 'K9FA1E0555' ),
    equipment_type     ( 'Sanding Disc' ),
    category          ( 'Attachment' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/OOTDTY_K9FA1E0555_Sanding_Disc' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005002669079984.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DD89YZt' ),
    listing_name   ( '50mm 2 Inch Polishing Mix Grit Sanding Disc Polish Pad Backer Sander Plate with 3mm Shank For Electric Grinder Rotary Tool' ),
    item_price    ( 'AU$3.35' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005002669079984.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.1.21ef1802nljgOa&orderId=8191346704913938' ),
    order_id        ( '8191346704913938' ),
    order_date      ( 'Jul 22, 2024' ),
    order_item_name ( '50mm 2 Inch Polishing Mix Grit Sanding Disc Polish Pad Backer Sander Plate with 3mm Shank For Electric Grinder Rotary Tool' ),
    order_price     ( 'AU$10.43' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$0.01' ),
    order_gst       ( 'AU$0.94' ),
  ),
);

equipment(
  equipment_date( '2024-07-22' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S7430719a9bbb4a868aae9c87e03b2261o/DSPIAE-CFB-S01-CFB-S02-CFB-S03-Lrregular-Carbon-Fiber-Sanding-Stick-Black-3Pcs-set-Abrasive.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( 'J1091302' ),
    EquipmentFeature::SANDING_STICK,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( 'J1091302' ),
    equipment_type     ( 'Sanding Stick' ),
    category          ( 'Abrasive' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_J1091302_Sanding_Stick' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005003288036885.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DFqrJNH' ),
    listing_name   ( 'DSPIAE CFB-S01 CFB-S02 CFB-S03 Lrregular Carbon Fiber Sanding Stick Black 3Pcs/set Abrasive Tools' ),
    item_price    ( 'AU$6.08' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005003288036885.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.6.21ef1802nljgOa&orderId=8191346704933938' ),
    order_id        ( '8191346704933938' ),
    order_date      ( 'Jul 22, 2024' ),
    order_item_name ( 'DSPIAE CFB-S01 CFB-S02 CFB-S03 Lrregular Carbon Fiber Sanding Stick Black 3Pcs/set Abrasive Tools' ),
    order_options   ( 'CFB-S01, CN' ),
    order_price     ( 'AU$6.05' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.61' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005003288036885.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.6.21ef1802nljgOa&orderId=8191346704933938' ),
    order_id        ( '8191346704933938' ),
    order_date      ( 'Jul 22, 2024' ),
    order_item_name ( 'DSPIAE CFB-S01 CFB-S02 CFB-S03 Lrregular Carbon Fiber Sanding Stick Black 3Pcs/set Abrasive Tools' ),
    order_options   ( 'CFB-S02, CN' ),
    order_price     ( 'AU$6.19' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.62' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005003288036885.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.12.21ef1802nljgOa&orderId=8191346704963938' ),
    order_id        ( '8191346704963938' ),
    order_date      ( 'Jul 22, 2024' ),
    order_item_name ( 'DSPIAE CFB-S01 CFB-S02 CFB-S03 Lrregular Carbon Fiber Sanding Stick Black 3Pcs/set Abrasive Tools' ),
    order_options   ( 'CFB-S03, CN' ),
    order_price     ( 'AU$6.19' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.62' ),
  ),
);


equipment(
  equipment_date( '2024-07-22' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S573df8e86d3b4058893c22f50821c590z/1-Pack-Nylon-Mini-Drill-Abrasive-Brush-2-35mm-3mm-Shank-Buffing-Polishing-Wheel-Rust-Remover.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( 'Nylon Buff' ),
    EquipmentFeature::ROTARY_ABRASIVE_BRUSH,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( 'Nylon' ),
    equipment_type     ( 'Abrasive Brush' ),
    category          ( 'Abrasive' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_Nylon_Abrasive_Brush' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005687549688.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DeX7bKn' ),
    listing_name   ( '1 Pack Nylon Mini Drill Abrasive Brush 2.35mm 3mm Shank Buffing Polishing Wheel Rust Remover for Dremel Rotary Tool Accessories' ),
    item_options  ( 'With 3mm Shank, Mixed, 20pcs' ),
    item_price    ( 'AU$7.55' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005687549688.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.17.21ef1802nljgOa&orderId=8191346704983938' ),
    order_id        ( '8191346704983938' ),
    order_date      ( 'Jul 22, 2024' ),
    order_item_name ( '1 Pack Nylon Mini Drill Abrasive Brush 2.35mm 3mm Shank Buffing Polishing Wheel Rust Remover for Dremel Rotary Tool Accessories' ),
    order_options   ( 'With 3mm Shank, Mixed, 20pcs' ),
    order_price     ( 'AU$7.55' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.76' ),
  ),
);

equipment(
  equipment_date( '2024-07-22' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/S38760e1018a349bda6b67eb97cedf68f9/20Pcs-5mm-Brass-Wire-Brushes-Rotary-Wire-Wheel-Pencil-Polising-Brushes-For-Power-Drill-Tool-Foredom.jpeg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'VIBRATITE' ),
    model_name         ( '5mm Brass' ),
    EquipmentFeature::ROTARY_WIRE_BRUSH,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'VIBRATITE' ),
    model_name         ( '5mm Brass' ),
    equipment_type     ( 'Rotary Wire Brush' ),
    category          ( 'Abrasive' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/VIBRATITE_5mm_Brass_Rotary_Wire_Brush' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005007127462026.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DdL3f3h' ),
    listing_name   ( '20Pcs 5mm Brass Wire Brushes Rotary Wire Wheel Pencil Polising Brushes For Power Drill Tool Foredom Machine Metal Polishing Tool' ),
    item_price    ( 'AU$6.23' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005007127462026.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.22.21ef1802nljgOa&orderId=8191346705003938' ),
    order_id        ( '8191346705003938' ),
    order_date      ( 'Jul 22, 2024' ),
    order_item_name ( '20Pcs 5mm Brass Wire Brushes Rotary Wire Wheel Pencil Polising Brushes For Power Drill Tool Foredom Machine Metal Polishing Tool' ),
    order_price     ( 'AU$6.20' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.62' ),
  ),
);

equipment(
  equipment_date( '2024-07-22' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/Sa77e352cbc1a457aa65d72e613fb1aa2p/10-20pc-Dual-Purpose-Sanding-Sticks-Precision-Frosted-Tips-Flat-Head-Ideal-for-Crafts-Model-Making.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( 'Dual-Purpose' ),
    EquipmentFeature::SANDING_STICK,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( 'Dual-Purpose' ),
    equipment_type     ( 'Sanding Sticks' ),
    category          ( 'Abrasive' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_Dual-Purpose_Sanding_Sticks' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006821734079.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DDYk0un' ),
    listing_name   ( '10/20pc Dual-Purpose Sanding Sticks - Precision Frosted Tips & Flat Head - Ideal for Crafts & Model Making' ),
    item_options  ( '20pcs' ),
    item_price    ( 'AU$3.36' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006821734079.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.27.21ef1802nljgOa&orderId=8191346704893938' ),
    order_id        ( '8191346704893938' ),
    order_date      ( 'Jul 22, 2024' ),
    order_item_name ( '10/20pc Dual-Purpose Sanding Sticks - Precision Frosted Tips & Flat Head - Ideal for Crafts & Model Making' ),
    order_options   ( '20pcs' ),
    order_price     ( 'AU$3.36' ),
    order_quantity  ( 1 ),
    order_gst       ( 'AU$0.34' ),
  ),
);

equipment(
  equipment_date( '2024-07-22' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/Mk8AAOSwqR1l84Gk/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( 'HSC8 6-4A' ),
    EquipmentFeature::FERRULE_CRIMPER_KIT,
    EquipmentFeature::PLIERS,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( 'HSC8 6-4A' ),
    equipment_type     ( 'Ferrule Crimper Kit' ),
    category          ( 'Hand Tool' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_HSC8_6-4A_Ferrule_Crimper_Kit' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/166648223438' ),
    affiliate_url ( 'https://ebay.us/AKGAQo' ),
    listing_name   ( '1200 Ferrule Crimper Plier Kit 0.25-10mm²Wire End Terminal Ratchet Crimping Tool' ),
    item_price    ( 'AU$22.35' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/166648223438' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=21-11836-88885#/' ),
    order_id        ( '21-11836-88885' ),
    order_date      ( '22 Jul 2024' ),
    order_item_name ( '1200 Ferrule Crimper Plier Kit 0.25-10mm²Wire End Terminal Ratchet Crimping Tool' ),
    order_price     ( 'AU$19.35' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-08-02' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/Se16f3cab1d944ce6ae32ecdb33c1309bg/Drill-Bit-Holder-Extension-Magnetic-Extra-Long-Shank-Quick-Release-Driver-1-4inch-Bar-attachment-Adapter.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'aToolTour' ),
    model_name         ( 'Extra Long Magnetic' ),
    EquipmentFeature::DRILL_BIT_EXTENSION,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'aToolTour' ),
    model_name         ( 'Extra Long Magnetic' ),
    equipment_type     ( 'Drill Bit Extension' ),
    category          ( 'Drill Extension' ),
    category          ( 'Drill Bit' ),
    category          ( 'Adapter' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/AToolTour_Extra_Long_Magnetic_Drill_Bit_Extension' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006333115273.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DlnrECr' ),
    listing_name   ( 'Drill Bit Holder Extension Magnetic Extra Long Shank Quick Release Driver 1/4inch Bar attachment Adapter Rod 300mm Hand Tool' ),
    item_options  ( 'Color: Extention Rod 60mm' ),
    item_price    ( 'AU$6.41' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006333115273.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.55.7fc71802wfWni0&orderId=8191723740563938' ),
    order_id        ( '8191723740563938' ),
    order_date      ( 'Aug 2, 2024' ),
    order_item_name ( 'Drill Bit Holder Extension Magnetic Extra Long Shank Quick Release Driver 1/4inch Bar attachment Adapter Rod 300mm Hand Tool' ),
    order_options   ( 'Extention Rod 60mm' ),
    order_price     ( 'AU$4.64' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$0.52' ),
  ),
);

equipment(
  equipment_date( '2024-08-02' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/Sd8787a2a58404b148fc43f93d71a86f5D/Steel-Wire-Pliers-Multifunctional-Industrial-Grade-Pointed-Nose-Pliers-Diagonal-Pliers-Cable-Pliers-Electrical-Pliers.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( '9-Inch' ),
    EquipmentFeature::NEEDLE_NOSE_PLIERS,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( '9-Inch' ),
    equipment_type     ( 'Needle Nose Pliers' ),
    category          ( 'Pliers' ),
    category          ( 'Hand Tool' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_9-Inch_Needle_Nose_Pliers' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006741723890.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DlKOCbN' ),
    listing_name   ( 'Steel Wire Pliers, Multifunctional Industrial Grade Pointed Nose Pliers, Diagonal Pliers, Cable Pliers, Electrical Pliers' ),
    item_options  ( 'Color: Needle Nose Pliers' ),
    item_price    ( 'AU$12.29' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006741723890.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.49.7fc71802wfWni0&orderId=8191723740543938' ),
    order_id        ( '8191723740543938' ),
    order_date      ( 'Aug 2, 2024' ),
    order_item_name ( 'Steel Wire Pliers, Multifunctional Industrial Grade Pointed Nose Pliers, Diagonal Pliers, Cable Pliers, Electrical Pliers' ),
    order_options   ( 'Needle Nose Pliers' ),
    order_price     ( 'AU$9.30' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$1.01' ),
  ),
);

equipment(
  equipment_date( '2024-08-02' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/Sf4e51e80dbd0476baeddd95d85c85968H/500g-0-01g-Portable-mini-jewelry-scale-Personal-pocket-scale-high-precision-electronic-scale-500g-0.jpg_.webp' ),
  equipment_item(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( 'Mini High-Precision' ),
    EquipmentFeature::ELECTRONIC_SCALE,
  ),
  /*
  equipment_info(
    manufacturer_name  ( 'Yum Cha' ),
    model_name         ( 'Mini High-Precision' ),
    equipment_type     ( 'Electronic Scale' ),
    category          ( 'Scale' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_Mini_High-Precision_Electronic_Scale' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005007086202868.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DBBsaEb' ),
    listing_name   ( '500g/0.01g Portable mini jewelry scale Personal pocket scale high-precision electronic scale 500g/0.1g herbal weighing scale' ),
    item_options  ( 'Color: 500g---0.01g' ),
    item_price    ( 'AU$6.67' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005007086202868.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.43.7fc71802wfWni0&orderId=8191723740523938' ),
    order_id        ( '8191723740523938' ),
    order_date      ( 'Aug 2, 2024' ),
    order_item_name ( '500g/0.01g Portable mini jewelry scale Personal pocket scale high-precision electronic scale 500g/0.1g herbal weighing scale' ),
    order_options   ( '500g---0.01g' ),
    order_price     ( 'AU$4.02' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$0.56' ),
  ),
);

equipment(
  equipment_date( '2024-08-02' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/S271901349ce04d6a99af4f99f7d2d9b9T/52-in-1-Tools-Socket-Works-Universal-Ratchet-Spline-Bolts-Sleeve-Rotation-Hand-Tools-360-Degree.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( '52 in 1' ),
    EquipmentFeature::TIGER_WRENCH,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( '52 in 1' ),
    equipment_type    ( 'Tiger Wrench' ),
    category          ( 'Wrench' ),
    category          ( 'Hand Tool' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_52_in_1_Tiger_Wrench' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005007038778668.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dlydsrz' ),
    listing_name  ( '52 in 1 Tools Socket Works Universal Ratchet Spline Bolts Sleeve Rotation Hand Tools 360 Degree Multipurpose Tiger Wrench' ),
    item_options  ( 'Color: 52 in 1' ),
    item_price    ( 'AU$13.77' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005007038778668.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.37.7fc71802wfWni0&orderId=8191723740503938' ),
    order_id        ( '8191723740503938' ),
    order_date      ( 'Aug 2, 2024' ),
    order_item_name ( '52 in 1 Tools Socket Works Universal Ratchet Spline Bolts Sleeve Rotation Hand Tools 360 Degree Multipurpose Tiger Wrench' ),
    order_options   ( '52 in 1' ),
    order_price     ( 'AU$12.41' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$1.30' ),
  ),
);

equipment(
  equipment_date( '2024-08-02' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/S43e701a1bd22424c823f5930b8aba2ccP/AIRAJ-3-Pcs-Locking-Pliers-Welding-Tools-7-Carbon-Steel-Pliers-Industry-Round-Mouth-Vise-High.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'AIRAJ' ),
    model_name        ( '3-Pcs 7-inch' ),
    EquipmentFeature::LOCKING_PLIERS,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'AIRAJ' ),
    model_name        ( '3-Pcs 7-inch' ),
    equipment_type    ( 'Locking Pliers' ),
    category          ( 'Pliers' ),
    category          ( 'Hand Tool' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/AIRAJ_3-Pcs_7-inch_Locking_Pliers' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005868390844.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DBnoHC3' ),
    listing_name  ( 'AIRAJ 3 Pcs Locking Pliers Welding Tools 7" Carbon Steel Pliers Industry Round Mouth Vise High Torque Fixed Clamping Hand Tools' ),
    item_options  ( 'Color: 3 Pcs 7 inch' ),
    item_price    ( 'AU$23.63' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005868390844.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.31.7fc71802wfWni0&orderId=8191723740483938' ),
    order_id        ( '8191723740483938' ),
    order_date      ( 'Aug 2, 2024' ),
    order_item_name ( 'AIRAJ 3 Pcs Locking Pliers Welding Tools 7" Carbon Steel Pliers Industry Round Mouth Vise High Torque Fixed Clamping Hand Tools' ),
    order_options   ( '3 Pcs 7 inch' ),
    order_price     ( 'AU$18.62' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$2.18' ),
  ),
);

equipment(
  equipment_date( '2024-08-02' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/S9daa7b36c156444b94702536241f2d55j/58PCS-Stainless-Steel-Pitch-Scale-High-Precision-Measuring-Tool-Insert-U-S-Screw-Gauge-Metric-Inch.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( '58-pcs Stainless Steel' ),
    EquipmentFeature::THREAD_PITCH_GAUGE,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( '58-pcs Stainless Steel' ),
    equipment_type    ( 'Thread Pitch Gauge' ),
    category          ( 'Gauge' ),
    category          ( 'Hand Tool' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_58-pcs_Stainless_Steel_Thread_Pitch_Gauge' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005892860793.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Deit1u7' ),
    listing_name  ( '58PCS Stainless Steel Pitch Scale High Precision Measuring Tool Insert U.S. Screw Gauge + Metric Inch One Piece Thread Samples' ),
    item_options  ( 'Color: 58PCs' ),
    item_price    ( 'AU$6.92' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005892860793.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.25.7fc71802wfWni0&orderId=8191723740463938' ),
    order_id        ( '8191723740463938' ),
    order_date      ( 'Aug 2, 2024' ),
    order_item_name ( '58PCS Stainless Steel Pitch Scale High Precision Measuring Tool Insert U.S. Screw Gauge + Metric Inch One Piece Thread Samples' ),
    order_options   ( '58PCs' ),
    order_price     ( 'AU$4.64' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$0.66' ),
  ),
);

equipment(
  equipment_date( '2024-08-02' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/S9271a8406da743d8bda06fc68be998cc8/1pc-Multifunctional-Wire-Strippers-Electrician-Crimping-Wire-Stripping-Pliers-Hardware-Tools-Universal-Wire-Cutting-Pliers.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Oudisi' ),
    model_name        ( '9-inch 16 in 1' ),
    EquipmentFeature::WIRE_STRIPPER,
    EquipmentFeature::PLIERS,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Oudisi' ),
    model_name        ( '9-inch 16 in 1' ),
    equipment_type    ( 'Wire Strippers' ),
    category          ( 'Wire Stripper' ),
    category          ( 'Hand Tool' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Oudisi_9-inch_16_in_1_Wire_Strippers' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005007025925612.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DdagVv5' ),
    listing_name  ( '1pc Multifunctional Wire Strippers Electrician Crimping Wire Stripping Pliers Hardware Tools Universal Wire Cutting Pliers' ),
    item_options  ( 'Color: 9 inch' ),
    item_price    ( 'AU$10.20' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005007025925612.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.19.7fc71802wfWni0&orderId=8191723740443938' ),
    order_id        ( '8191723740443938' ),
    order_date      ( 'Aug 2, 2024' ),
    order_item_name ( '1pc Multifunctional Wire Strippers Electrician Crimping Wire Stripping Pliers Hardware Tools Universal Wire Cutting Pliers' ),
    order_options   ( '9 inch' ),
    order_price     ( 'AU$6.51' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$0.88' ),
  ),
);

equipment(
  equipment_date( '2024-08-02' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/S6a108f393d5f416f928807cd623ea1b2Z/32-Piece-Combination-Feeler-Gauge.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( '32 Piece' ),
    EquipmentFeature::FEELER_GAUGE,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( '32 Piece' ),
    equipment_type    ( 'Feeler Gauge' ),
    category          ( 'Gauge' ),
    category          ( 'Hand Tool' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_32_Piece_Feeler_Gauge' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006707746977.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DkccWwj' ),
    listing_name  ( '32 Piece Combination Feeler Gauge' ),
    item_options  ( 'Color: 1pc' ),
    item_price    ( 'AU$4.71' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006707746977.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.13.7fc71802wfWni0&orderId=8191723740423938' ),
    order_id        ( '8191723740423938' ),
    order_date      ( 'Aug 2, 2024' ),
    order_item_name ( '32 Piece Combination Feeler Gauge' ),
    order_options   ( '1pc' ),
    order_price     ( 'AU$3.09' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$0.34' ),
  ),
);

equipment(
  equipment_date( '2024-08-02' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/Scfc3c522a4054cd5a80cec6525806b08G/Mini-Table-Vise-Aluminium-Alloy-Multifunctional-Bench-Vise-For-DIY-Craft-Mold-Fixed-Repair-Tools-Jewelry.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    EquipmentFeature::BENCH_VISE,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'Bench' ),
    equipment_type    ( 'Vise' ),
    category          ( 'Vise' ),
    category          ( 'Clamp' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_Bench_Vise' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005007117549189.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DFTD0rz' ),
    listing_name  ( 'Mini Table Vise Aluminium Alloy Multifunctional Bench Vise For DIY Craft Mold Fixed Repair Tools Jewelry Electronics Workbench' ),
    item_options  ( 'Color: Silver' ),
    item_price    ( 'AU$5.70' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005007117549189.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.7.7fc71802wfWni0&orderId=8191723740403938' ),
    order_id        ( '8191723740403938' ),
    order_date      ( 'Aug 2, 2024' ),
    order_item_name ( 'Mini Table Vise Aluminium Alloy Multifunctional Bench Vise For DIY Craft Mold Fixed Repair Tools Jewelry Electronics Workbench' ),
    order_options   ( 'Silver' ),
    order_price     ( 'AU$4.33' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$0.53' ),
  ),
);

equipment(
  equipment_date( '2024-08-02' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/Se88597c1ae964d509c0f53a6ff0bb5bc5/L-shaped-1-4-Hexagonal-Screwdriver-Bit-90-Degree-Double-Head-Handle-Black-6-35-Wrench.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'L-shaped' ),
    EquipmentFeature::SCREWDRIVER,
    EquipmentFeature::ADAPTER,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL4,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL6,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL4,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH0,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH1,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH2,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH3,
    EquipmentFeature::TORX_SCREWDRIVER_T15,
    EquipmentFeature::TORX_SCREWDRIVER_T20,
    EquipmentFeature::TORX_SCREWDRIVER_T25,
  ),
  /*
  equipment_info(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'L-shaped' ),
    equipment_type    ( 'Screwdriver' ),
    category          ( 'Screwdriver' ),
    category          ( 'Hand Tool' ),
  ),
  */
  sixsigma_url  ( 'https://www.jj5.net/wiki/Yum_Cha_L-shaped_Screwdriver' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006327782997.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dex2Jb1' ),
    listing_name  ( 'L-shaped 1/4 Hexagonal Screwdriver Bit 90 Degree Double Head Handle Black 6.35 Wrench 10pc Yellow Tape Screwdriver Bit Tool Set' ),
    item_options  ( 'Color: 11pc screwdriver set' ),
    item_price    ( 'AU$4.62' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006327782997.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.1.7fc71802wfWni0&orderId=8191723740383938' ),
    order_id        ( '8191723740383938' ),
    order_date      ( 'Aug 2, 2024' ),
    order_item_name ( 'L-shaped 1/4 Hexagonal Screwdriver Bit 90 Degree Double Head Handle Black 6.35 Wrench 10pc Yellow Tape Screwdriver Bit Tool Set' ),
    order_options   ( '11pc screwdriver set' ),
    order_price     ( 'AU$3.09' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$0.45' ),
  ),
);

equipment(
  equipment_date( '2023-05-30' ),
  equipment_icon( 'https://dyson-h.assetsadobe2.com/is/image/content/dam/dyson/images/products/primary/309428-01.png?$responsive$&cropPathE=desktop&fit=stretch,1&wid=960' ),
  equipment_item(
    manufacturer_name ( 'Dyson' ),
    model_name        ( 'HP02' ),
    EquipmentFeature::AIR_PURIFIER,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.dyson.com/air-treatment/air-purifier-heaters/pure-hot-cool-link-hp02/white-silver' ),
    listing_name  ( 'Dyson Pure Hot + Cool Link™ HP02 purifier heater (White/Silver)' ),
    item_price    ( 'US$629.99' ),
  ),
);

equipment(
  equipment_date( '2023-05-30' ),
  equipment_icon( 'https://dyson-h.assetsadobe2.com/is/image/content/dam/dyson/images/products/primary/464810-01.png?$responsive$&cropPathE=desktop&fit=stretch,1&wid=960' ),
  equipment_item(
    manufacturer_name ( 'Dyson' ),
    model_name        ( 'AM09' ),
    EquipmentFeature::AIR_PURIFIER,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.dyson.com/air-treatment/fans-heaters/hot-cool-jet-focus-am09-satin-black-nickel' ),
    listing_name  ( 'Dyson Hot+Cool™ Jet Focus fan heater AM09 (Satin Black/Nickel)' ),
    item_price    ( 'US$319.99' ),
  ),
);

equipment(
  equipment_date( '2018-12-14' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71m6uTXiwSL._AC_SL1000_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Amazon' ),
    model_name        ( 'Kindle Oasis' ),
    EquipmentFeature::E_READER,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B06XDK92KS' ),
    listing_name  ( 'Kindle Oasis E-reader (Previous Generation), Waterproof, 7" High-Resolution Display (300 ppi), 8 GB Wi-Fi' ),
    item_price    ( 'AU$559.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B06XDK92KS' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=503-6000019-3360662' ),
    order_id        ( '503-6000019-3360662' ),
    order_date      ( '14 December 2018' ),
    order_item_name ( 'All-New Kindle Oasis E-reader, Waterproof, 7" High-Resolution Display (300 ppi), 8 GB Wi-Fi ' ),
    order_price     ( 'AU$389.00' ),
    order_quantity  ( 1 ),
  ),
);

// 2024-08-06 jj5 - OLD: this was wrong! see below.
/*
equipment(
  equipment_date( '2022-05-29' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71PugBu6zOL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'TOMLOV' ),
    model_name        ( 'DM10' ),
    EquipmentFeature::DIGITAL_MICROSCOPE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B08MVKKSLY' ),
    listing_name  ( 'TOMLOV 8.5" Digital Microscope 50X-1300X Soldering Microscope, UHD Video Microscope with 12MP Ultra-Precise Camera Sensor for Adults, SD Card Included, Model-DM10' ),
    item_price    ( 'AU$422.74' ),
  ),
);
*/

equipment(
  equipment_date( '2021-08-04' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71PugBu6zOL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'TOMLOV' ),
    model_name        ( 'DM1S' ),
    EquipmentFeature::DIGITAL_MICROSCOPE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/gp/product/B08MVKKSLY' ),
    listing_name  ( 'TOMLOV DM1S Wireless Digital Microscope [Easy and Fun] 50X-1000X 1080P HD WiFi Portable Handheld USB Trichome Mini Coin Microscope Camera Magnifier with Stand for iPhone iPad Android Phone & PC' ),
    item_price    ( 'US$169.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com/gp/product/B08MVKKSLY' ),
    order_url       ( 'https://www.amazon.com/gp/your-account/order-details/ref=dp_iou_view_this_order?ie=UTF8&orderID=111-9691738-2391413' ),
    order_id        ( '111-9691738-2391413' ),
    order_date      ( 'August 4, 2021' ),
    order_item_name ( 'TOMLOV DM1S Wireless Digital Microscope [Easy and Fun] 50X-1000X 1080P HD WiFi Portable Handheld USB Trichome Mini Coin Microscope Camera Magnifier with Stand for iPhone iPad Android Phone & PC' ),
    order_price     ( 'US$169.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-09' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71Pxn9kjwPL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'NBD' ),
    EquipmentFeature::USB_CAMERA,
  ),
  see_also( 'Acetaken C920WM-001 Webcam Wall Mount' ),
  see_also( 'ARKON CMPHD006 Webcam Wall Mount' ),
  /*
  web_link(
    link_text   ( 'Webcam Wall Mount, C920s Stand Holder Compatible with Logitech C920s StreamCam C922x C920 C930e C615 Brio C925e - Acetaken x4' ),
    link_href   ( 'https://amzn.to/3SV1v4T' ),
  ),
  web_link(
    link_text   ( 'ARKON CMPHD006 Camera Wall Mount for CCTV POV Camcorders Cameras, Black' ),
    link_href   ( 'https://amzn.to/3SDGzPw' ),
  ),
  */
  sixsigma_url  ( '' ),
  warning       ( 'It is advertized as 4K, but I think that is a lie.'),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B0BD4SZ9CZ' ),
    listing_name  ( ' 4K 48MP Compact Camera Digital Camera HD Vlogging Camera 16x Zoom Camera for Beginner Photography with 32GB SD Card ' ),
    item_price    ( 'AU$199.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B0BD4SZ9CZ' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-5809880-4993438' ),
    order_id        ( '249-5809880-4993438' ),
    order_date      ( '9 August 2023' ),
    order_item_name ( '4K 48MP Compact Camera Digital Camera HD Vlogging Camera 16x Zoom Camera for Beginner Photography with 32GB SD Card' ),
    order_price     ( 'AU$199.00' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2022-07-07' ),
  equipment_icon( 'https://cdn.shopify.com/s/files/1/0362/9223/1306/products/store_5bcbbce1-4a4e-4478-9b23-007e4368e81f.jpg?v=1585570145' ),
  equipment_item(
    manufacturer_name ( 'TEAC' ),
    model_name        ( '19"' ),
    EquipmentFeature::TELEVISION,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/225003146967' ),
    listing_name  ( 'TEAC 19" HD DIGITAL FHD LED LCD TV & DVD PLAYER COMBO 12/240v LEV19A119' ),
    item_price    ( 'AU$199.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/225003146967' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=14-08736-26211#/' ),
    order_id        ( '14-08736-26211' ),
    order_date      ( '12 Jun 2022' ),
    order_item_name ( 'TEAC 19" HD DIGITAL FHD LED LCD TV & DVD PLAYER COMBO 12/240v LEV19A119' ),
    order_price     ( 'AU$199.00' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2022-07-08' ),
  equipment_icon( 'https://o.aolcdn.com/images/dims?resize=2000%2C2000%2Cshrink&image_uri=https:%2F%2Fs.yimg.com%2Fos%2Fcreatr-uploaded-images%2F2020-03%2F8ea3fbd0-5d80-11ea-bfff-ae32ad81d2d0&client=a1acac3e1b3290917d92&signature=e402b2877de2758d00d84a8f22bd93e9bf938c7c' ),
  equipment_item(
    EquipmentFeature::CHUMBY,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/225003146967' ),
    listing_name  ( 'TEAC 19" HD DIGITAL FHD LED LCD TV & DVD PLAYER COMBO 12/240v LEV19A119' ),
    item_price    ( 'AU$199.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/225003146967' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=14-08736-26211#/' ),
    order_id        ( '14-08736-26211' ),
    order_date      ( '12 Jun 2022' ),
    order_item_name ( 'TEAC 19" HD DIGITAL FHD LED LCD TV & DVD PLAYER COMBO 12/240v LEV19A119' ),
    order_price     ( 'AU$199.00' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-28' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/dBsAAOSwzARf~Rls/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( 'Swann & Morten' ),
    model_name        ( 'No.15' ),
    EquipmentFeature::SCALPEL_HANDLE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/164639362848' ),
    affiliate_url ( 'https://ebay.us/HwmtSX' ),
    listing_name  ( 'Retractable No.15 Swann Morton Scalpel & Handle Surgical Blade Retract Pull Back' ),
    item_price    ( 'AU$13.95' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/164639362848' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=25-10458-81975#/' ),
    order_id        ( '25-10458-81975' ),
    order_date      ( '28 Aug 2023' ),
    order_item_name ( 'Retractable No.15 Swann Morton Scalpel & Handle Surgical Blade Retract Pull Back' ),
    order_price     ( 'AU$13.95' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-21' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/NzQAAOSwzRZfMJ2z/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( 'Swann & Morten' ),
    model_name        ( 'No.4' ),
    EquipmentFeature::SCALPEL_HANDLE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/154040191522' ),
    listing_name  ( 'No. 4 Swann & Morton Scalpel Handle For # 18 19 20 21 22 24 25 26 Surgical Blade' ),
    item_price    ( 'AU$29.95' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/154040191522' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=13-10438-25114#/' ),
    order_id        ( '13-10438-25114' ),
    order_date      ( '21 Aug 2023' ),
    order_item_name ( 'No. 4 Swann & Morton Scalpel Handle For # 18 19 20 21 22 24 25 26 Surgical Blade' ),
    order_price     ( 'AU$16.95' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-21' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/5CYAAOSwe~VfMJ~w/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( 'Swann & Morten' ),
    model_name        ( 'Handle For No. 10 10A 11 15 15A' ),
    EquipmentFeature::SCALPEL_HANDLE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/154040209003' ),
    affiliate_url ( 'https://ebay.us/pemlat' ),
    listing_name  ( 'Retractaway Swann & Morton Scalpel Handle For # 10 10A 11 15 15A Surgical Blades' ),
    item_price    ( 'AU$30.95' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/154040209003' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=13-10438-25114#/' ),
    order_id        ( '13-10438-25114' ),
    order_date      ( '21 Aug 2023' ),
    order_item_name ( 'Retractaway Swann & Morton Scalpel Handle For # 10 10A 11 15 15A Surgical Blades' ),
    order_price     ( 'AU$26.95' ),
    order_quantity  ( 2 ),
  ),
);

equipment(
  equipment_date( '2023-08-21' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/ecUAAOSwsuxiZjsA/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( 'Swann & Morten' ),
    model_name        ( '20pcs No.10' ),
    EquipmentFeature::SCALPEL_BLADE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/175674142283' ),
    affiliate_url ( 'https://ebay.us/u2TBln' ),
    listing_name  ( 'Swann Morton Surgical Scalpel Blades Sterile Carbon Steel Available In 7 Size' ),
    item_price    ( 'AU$19.90' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/175674142283' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=13-10438-25114#/' ),
    order_id        ( '13-10438-25114' ),
    order_date      ( '21 Aug 2023' ),
    order_item_name ( 'Swann Morton Surgical Scalpel Blades Sterile Carbon Steel Available In 7 Size' ),
    order_price     ( 'AU$19.90' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-21' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/AXkAAOSwLo1iZjsn/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( 'Swann & Morten' ),
    model_name        ( '20pcs No.15' ),
    EquipmentFeature::SCALPEL_BLADE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/175674142283' ),
    affiliate_url ( 'https://ebay.us/u2TBln' ),
    listing_name  ( 'Swann Morton Surgical Scalpel Blades Sterile Carbon Steel Available In 7 Size' ),
    item_price    ( 'AU$19.90' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/175674142283' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=13-10438-25114#/' ),
    order_id        ( '13-10438-25114' ),
    order_date      ( '21 Aug 2023' ),
    order_item_name ( 'Swann Morton Surgical Scalpel Blades Sterile Carbon Steel Available In 7 Size' ),
    order_price     ( 'AU$19.90' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-21' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/neEAAOSwXlNiZjs3/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( 'Swann & Morten' ),
    model_name        ( '20pcs No.15C' ),
    EquipmentFeature::SCALPEL_BLADE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/175674142283' ),
    affiliate_url ( 'https://ebay.us/u2TBln' ),
    listing_name  ( 'Swann Morton Surgical Scalpel Blades Sterile Carbon Steel Available In 7 Size' ),
    item_price    ( 'AU$19.90' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/175674142283' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=13-10438-25114#/' ),
    order_id        ( '13-10438-25114' ),
    order_date      ( '21 Aug 2023' ),
    order_item_name ( 'Swann Morton Surgical Scalpel Blades Sterile Carbon Steel Available In 7 Size' ),
    order_price     ( 'AU$19.90' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2022-06-12' ),
  equipment_icon( 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fonline.laceys.tv%2Fproductimages%2FLCD212.jpg&f=1&nofb=1&ipt=9c312d6708ecd5508b59033c4639ee0741d6ed64bc54e816db140a6a08bda879&ipo=images' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( '100x100 200X200mm' ),
    EquipmentFeature::VESA_WALL_MOUNT,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/174829510182' ),
    listing_name  ( 'VESA 100x100 200X200mm TV Wall Mount Fixed Bracket LCD Monitor Holder 17-42" Tvs' ),
    item_price    ( 'AU$19.93' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/174829510182' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=08-08737-78997#/' ),
    order_id        ( '08-08737-78997' ),
    order_date      ( '12 Jun 2022' ),
    order_item_name ( 'VESA 100x100 200X200mm TV Wall Mount Fixed Bracket LCD Monitor Holder 17-42" Tvs' ),
    order_price     ( 'AU$19.93' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-06-08' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/qFoAAOSwT2lhRUWh/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( '3ELIGHTING' ),
    model_name        ( '14"-42"' ),
    EquipmentFeature::VESA_WALL_MOUNT,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/323858125378?var=513800103314' ),
    affiliate_url ( 'https://ebay.us/z8LgXl' ),
    listing_name  ( 'Universal TV Wall Mount Bracket Swivel Full Motion Tilt VESA10 17 26 32 42 50 55' ),
    item_options  ( '14"-42"' ),
    item_price    ( 'AU$15.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/323858125378?var=513800103314' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=20-10143-00739#/' ),
    order_id        ( '20-10143-00739' ),
    order_date      ( '8 Jun 2023' ),
    order_item_name ( 'Universal TV Wall Mount Bracket Swivel Full Motion Tilt VESA10 17 26 32 42 50 55' ),
    order_options   ( '14"-42"' ),
    order_price     ( 'AU$20.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-06-08' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/oeoAAOSwAHFhUxMF/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( '3ELIGHTING' ),
    model_name        ( '14"-27" With 2 Arms' ),
    EquipmentFeature::VESA_WALL_MOUNT,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/323858125378?var=513813881049' ),
    affiliate_url ( 'https://ebay.us/UT5N4c' ),
    listing_name  ( 'Universal TV Wall Mount Bracket Swivel Full Motion Tilt VESA10 17 26 32 42 50 55' ),
    item_options  ( '14"-27" with 2 arms' ),
    item_price    ( 'AU$16.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/323858125378?var=513813881049' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=20-10143-00739#/' ),
    order_id        ( '20-10143-00739' ),
    order_date      ( '8 Jun 2023' ),
    order_item_name ( 'Universal TV Wall Mount Bracket Swivel Full Motion Tilt VESA10 17 26 32 42 50 55' ),
    order_options   ( '14"-27" with 2 arms' ),
    order_price     ( 'AU$16.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-06-08' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/fjMAAOSwGGRhUxC4/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( '3ELIGHTING' ),
    model_name        ( '14"-27"' ),
    EquipmentFeature::VESA_WALL_MOUNT,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/323858125378?var=513732943159' ),
    affiliate_url ( 'https://ebay.us/62NjZE' ),
    listing_name  ( 'Universal TV Wall Mount Bracket Swivel Full Motion Tilt VESA10 17 26 32 42 50 55' ),
    item_options  ( '14"-27"' ),
    item_price    ( 'AU$15.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/323858125378?var=513732943159' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=20-10143-00739#/' ),
    order_id        ( '20-10143-00739' ),
    order_date      ( '8 Jun 2023' ),
    order_item_name ( 'Universal TV Wall Mount Bracket Swivel Full Motion Tilt VESA10 17 26 32 42 50 55' ),
    order_options   ( '14"-27"' ),
    order_price     ( 'AU$15.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-06-08' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/zP0AAOSwGQpe9aDM/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( '3ELIGHTING' ),
    model_name        ( '10"-26"' ),
    EquipmentFeature::VESA_WALL_MOUNT,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/323858125378?var=512879825950' ),
    affiliate_url ( 'https://ebay.us/diqoT8' ),
    listing_name  ( 'Universal TV Wall Mount Bracket Swivel Full Motion Tilt VESA10 17 26 32 42 50 55' ),
    item_options  ( '10"-26"' ),
    item_price    ( 'AU$18.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/323858125378?var=512879825950' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=20-10143-00739#/' ),
    order_id        ( '20-10143-00739' ),
    order_date      ( '8 Jun 2023' ),
    order_item_name ( 'Universal TV Wall Mount Bracket Swivel Full Motion Tilt VESA10 17 26 32 42 50 55' ),
    order_options   ( '10"-26"' ),
    order_price     ( 'AU$18.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2018-03-25' ),
  equipment_icon( 'https://www.wasdkeyboards.com/media/catalog/product/cache/cee7a71fd82c474592eb38179a21d892/c/o/code-104-2_1.jpg' ),
  equipment_item(
    manufacturer_name ( 'WASD Keyboards' ),
    model_name        ( 'CODE 104-Key' ),
    EquipmentFeature::MECHANICAL_KEYBOARD,
    EquipmentFeature::USB_KEYBOARD,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.wasdkeyboards.com/wasd-v3-104-key-custom-mechanical-keyboard.html' ),
    listing_name  ( 'CODE 104-Key Mechanical Keyboard - Cherry MX Green' ),
    item_options  ( 'Cherry MX Green; Black Case; No Sound Dampeners' ),
    item_price    ( 'US$150.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.wasdkeyboards.com/wasd-v3-104-key-custom-mechanical-keyboard.html' ),
    order_url       ( 'https://www.wasdkeyboards.com/sales/order/view/order_id/119152/' ),
    order_id        ( '119152' ),
    order_date      ( '2018-03-25' ),
    order_item_name ( 'CODE 104-Key Mechanical Keyboard - Cherry MX Green' ),
    order_options   ( 'Cherry MX Green; Black Case; No Sound Dampeners' ),
    order_price     ( 'US$165.00' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'US$70.70' ),
  ),
);

equipment(
  equipment_date( '2018-03-25' ),
  equipment_icon( 'https://www.wasdkeyboards.com/media/catalog/product/cache/cee7a71fd82c474592eb38179a21d892/1/0/104-1.jpg' ),
  equipment_item(
    manufacturer_name ( 'WASD Keyboards' ),
    model_name        ( '17" Soft Foam' ),
    EquipmentFeature::KEYBOARD_WRIST_PAD,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.wasdkeyboards.com/17-wrist-pad.html' ),
    listing_name  ( '17" Soft Foam Wrist Pad' ),
    item_price    ( 'US$14.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.wasdkeyboards.com/17-wrist-pad.html' ),
    order_url       ( 'https://www.wasdkeyboards.com/sales/order/view/order_id/119152/' ),
    order_id        ( '119152' ),
    order_date      ( '2018-03-25' ),
    order_item_name ( '17" Soft Foam Wrist Pad' ),
    order_price     ( 'US$14.00' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.wasdkeyboards.com/17-wrist-pad.html' ),
    order_url       ( 'https://www.wasdkeyboards.com/sales/order/view/order_id/138103/' ),
    order_id        ( '138103' ),
    order_date      ( '2019-03-20' ),
    order_item_name ( '17" Soft Foam Wrist Pad' ),
    order_price     ( 'US$14.00' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.wasdkeyboards.com/17-wrist-pad.html' ),
    order_url       ( 'https://www.wasdkeyboards.com/sales/order/view/order_id/184063/' ),
    order_id        ( '184063' ),
    order_date      ( '2021-08-25' ),
    order_item_name ( '17" Soft Foam Wrist Pad' ),
    order_price     ( 'US$14.00' ),
    order_quantity  ( 2 ),
    order_shipping  ( 'US$70.70' ),
  ),
);

equipment(
  equipment_date( '2019-03-20' ),
  equipment_icon( 'https://www.wasdkeyboards.com/media/catalog/product/cache/cee7a71fd82c474592eb38179a21d892/c/o/code-104-2_1.jpg' ),
  equipment_item(
    manufacturer_name ( 'WASD Keyboards' ),
    model_name        ( 'CODE V3 104-Key' ),
    EquipmentFeature::MECHANICAL_KEYBOARD,
    EquipmentFeature::USB_KEYBOARD,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.wasdkeyboards.com/wasd-v3-104-key-custom-mechanical-keyboard.html' ),
    listing_name  ( 'CODE V3 104-Key Mechanical Keyboard - Cherry MX Green' ),
    item_options  ( 'Cherry MX Green; Black Case; No Sound Dampeners' ),
    item_price    ( 'US$150.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.wasdkeyboards.com/wasd-v3-104-key-custom-mechanical-keyboard.html' ),
    order_url       ( 'https://www.wasdkeyboards.com/sales/order/view/order_id/119152/' ),
    order_id        ( '119152' ),
    order_date      ( '2019-03-20' ),
    order_item_name ( 'CODE V3 104-Key Mechanical Keyboard - Cherry MX Green' ),
    order_options   ( 'Cherry MX Green; Black Case; No Sound Dampeners' ),
    order_price     ( 'US$175.00' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'US$69.50' ),
  ),
);

equipment(
  equipment_date( '2020-09-20' ),
  equipment_icon( 'https://www.wasdkeyboards.com/media/catalog/product/cache/cee7a71fd82c474592eb38179a21d892/d/e/default.jpg' ),
  equipment_item(
    manufacturer_name ( 'WASD Keyboards' ),
    model_name        ( 'VIM by Skeletor 104-Key V3 Custom' ),
    EquipmentFeature::MECHANICAL_KEYBOARD,
    EquipmentFeature::USB_KEYBOARD,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.wasdkeyboards.com/vim-by-skeletor-104-key-v3-custom-mechanical-keyboard.html' ),
    listing_name  ( 'VIM by Skeletor 104-Key V3 Custom Mechanical Keyboard' ),
    item_options  ( 'Cherry MX Silver; Black Case; Black QWERTY Layout; No Sound Dampeners' ),
    item_price    ( 'US$155.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.wasdkeyboards.com/vim-by-skeletor-104-key-v3-custom-mechanical-keyboard.html' ),
    order_url       ( 'https://www.wasdkeyboards.com/sales/order/view/order_id/167515/' ),
    order_id        ( '167515' ),
    order_date      ( '2020-09-20' ),
    order_item_name ( 'VIM by Skeletor 104-Key V3 Custom Mechanical Keyboard' ),
    order_options   ( 'Cherry MX Silver; Black Case; Black QWERTY Layout; No Sound Dampeners' ),
    order_price     ( 'US$190.00' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'US$68.85' ),
  ),
);

equipment(
  equipment_date( '2022-02-12' ),
  equipment_icon( 'https://ae01.alicdn.com/kf/H74e4b1b0fb194c94a98b2f171d955c66m.jpg_220x220.jpg' ),
  equipment_item(
    manufacturer_name ( 'FNIRSI' ),
    model_name        ( 'DC580' ),
    EquipmentFeature::POWER_MODULE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/4001193042134.html' ),
    listing_name  ( 'DC DC Buck Converter CC CV Power Module 1.8-32V 5A Adjustable Regulated power supply Voltmeter ammeter CNC Color screen 80W' ),
    item_options  ( 'DC580, China' ),
    item_price    ( 'AU$25.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/4001193042134.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.6.16dd1802S0KWpb&orderId=8146215567143938' ),
    order_id        ( '8146215567143938' ),
    order_date      ( 'Feb 12, 2022' ),
    order_item_name ( 'DC DC Buck Converter CC CV Power Module 1.8-32V 5A Adjustable Regulated power supply Voltmeter ammeter CNC Color screen 80W' ),
    order_options   ( 'DC580, China' ),
    order_price     ( 'AU$25.99' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$2.60' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/4001193042134.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.11.16dd1802S0KWpb&orderId=8146214045643938' ),
    order_id        ( '8146214045643938' ),
    order_date      ( 'Feb 12, 2022' ),
    order_item_name ( 'DC DC Buck Converter CC CV Power Module 1.8-32V 5A Adjustable Regulated power supply Voltmeter ammeter CNC Color screen 80W' ),
    order_options   ( 'DC580, China' ),
    order_price     ( 'AU$25.99' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$2.60' ),
  ),
);

equipment(
  equipment_date( '2021-06-25' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/qAsAAOSw3olfm3zK/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'BM800' ),
    EquipmentFeature::CONDENSER_MICROPHONE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/233566083563' ),
    affiliate_url ( 'https://ebay.us/Xo78nV' ),
    listing_name  ( 'BM800 Condenser Microphone Kit Studio Suspension Boom Scissor Arm Stand AU SHIP' ),
    item_price    ( 'AU$28.89' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/233566083563' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=05-07382-31172#/' ),
    order_id        ( '05-07382-31172' ),
    order_date      ( '25 Jul 2021' ),
    order_item_name ( 'BM800 Condenser Microphone Kit Studio Suspension Boom Scissor Arm Stand AU SHIP' ),
    order_price     ( 'AU$27.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2022-02-10' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/H02dc4992105a4022b9227737c9805ed8b/M328-Transistor-Tester-Automatic-Identified-Diode-Thyristor-Capacitance-Resistor-Inductor-Capacitor-ESR-Meter-Checker-Detector.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'FNIRSI' ),
    model_name        ( 'M328' ),
    EquipmentFeature::COMPONENT_TESTER,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/4001339256348.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dks9fOr' ),
    listing_name  ( 'M328 Transistor Tester Automatic Identified Diode Thyristor Capacitance Resistor Inductor Capacitor ESR Meter Checker Detector' ),
    item_options  ( 'Color: black' ),
    item_price    ( 'AU$32.41' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/4001339256348.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.46.16dd1802S0KWpb&orderId=8146116604733938' ),
    order_id        ( '8146116604733938' ),
    order_date      ( 'Feb 10, 2022' ),
    order_item_name ( 'Multi-purpose Transistor Tester 128*160 Diode Thyristor Capacitance Resistor Inductance MOSFET ESR LCR Meter TFT Color Display' ),
    order_price     ( 'AU$21.69' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$2.17' ),
  ),
);

equipment(
  equipment_date( '2021-07-14' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/F7AAAOSw7U5Y9w7v/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'KT-908' ),
    EquipmentFeature::DIGITAL_THERMOMETER,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/174131252214' ),
    affiliate_url ( 'https://ebay.us/Kz7YAg' ),
    listing_name  ( 'Digital Thermometer Hygrometer Temperature Indoor Outdoor LCD Humidity Meter' ),
    item_price    ( 'AU$8.45' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/174131252214' ),
    order_url       ( 'https://www.ebay.com.au/vod/FetchOrderDetails?orderId=03-07339-49489' ),
    order_id        ( '03-07339-49489' ),
    order_date      ( '14 Jul, 2021' ),
    order_item_name ( 'Digital Thermometer Hygrometer Temperature Indoor Outdoor LCD Humidity Meter' ),
    order_price     ( 'AU$8.03' ),
    order_quantity  ( 2 ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/174131252214' ),
    order_url       ( 'https://www.ebay.com.au/vod/FetchOrderDetails?orderId=14-07306-61787' ),
    order_id        ( '14-07306-61787' ),
    order_date      ( '07 Jul, 2021' ),
    order_item_name ( 'Digital Thermometer Hygrometer Temperature Indoor Outdoor LCD Humidity Meter' ),
    order_price     ( 'AU$8.45' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-14' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/51Km1SDWsgL._AC_SL1000_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Acetaken' ),
    model_name        ( 'C920WM-001' ),
    EquipmentFeature::WEBCAM_WALL_MOUNT,
  ),
  sixsigma_url  ( '' ),
  see_also( 'ARKON CMPHD006 Webcam Wall Mount' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B07GVJMWFF' ),
    affiliate_url ( 'https://amzn.to/3SV1v4T' ),
    listing_name  ( 'Webcam Wall Mount, C920s Stand Holder Compatible with Logitech C920s StreamCam C922x C920 C930e C615 Brio C925e - Acetaken' ),
    item_price    ( 'AU$29.80' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B07GVJMWFF' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-4017065-3427025' ),
    order_id        ( '249-4017065-3427025' ),
    order_date      ( '14 August 2023' ),
    order_item_name ( 'Webcam Wall Mount, C920s Stand Holder Compatible with Logitech C920s StreamCam C922x C920 C930e C615 Brio C925e - Acetaken' ),
    order_price     ( 'AU$29.80' ),
    order_quantity  ( 2 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B07GVJMWFF' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-9920529-0060600' ),
    order_id        ( '249-9920529-0060600' ),
    order_date      ( '13 August 2023' ),
    order_item_name ( 'Webcam Wall Mount, C920s Stand Holder Compatible with Logitech C920s StreamCam C922x C920 C930e C615 Brio C925e - Acetaken' ),
    order_price     ( 'AU$29.80' ),
    order_quantity  ( 2 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B07GVJMWFF' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-5809880-4993438' ),
    order_id        ( '249-5809880-4993438' ),
    order_date      ( '9 August 2023' ),
    order_item_name ( 'Webcam Wall Mount, C920s Stand Holder Compatible with Logitech C920s StreamCam C922x C920 C930e C615 Brio C925e - Acetaken' ),
    order_price     ( 'AU$29.80' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-09' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71teM9MLQ+L._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'ARKON' ),
    model_name        ( 'CMPHD006' ),
    EquipmentFeature::WEBCAM_WALL_MOUNT,
  ),
  sixsigma_url  ( '' ),
  see_also( 'Acetaken C920WM-001 Webcam Wall Mount' ),
  warning ( 'This model is expensive. See Acetaken C920WM-001 as a cheaper alternative.' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B00CMLX1O2' ),
    affiliate_url ( 'https://amzn.to/3SDGzPw' ),
    listing_name  ( 'ARKON CMPHD006 Camera Wall Mount for CCTV POV Camcorders Cameras, Black' ),
    item_price    ( 'AU$60.43' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B00CMLX1O2' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-5809880-4993438' ),
    order_id        ( '249-5809880-4993438' ),
    order_date      ( '9 August 2023' ),
    order_item_name ( 'ARKON CMPHD006 Camera Wall Mount for CCTV POV Camcorders Cameras, Black' ),
    order_price     ( 'AU$60.43' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-06-26' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61fatxy-GnL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Logitech' ),
    model_name        ( 'C922' ),
    EquipmentFeature::USB_CAMERA,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B01M35CNS8' ),
    affiliate_url ( 'https://amzn.to/3MDtKkt' ),
    listing_name  ( 'Logitech C922 Pro Stream Webcam 1080P Camera for HD Video Streaming & Recording 720P at 60Fps with Tripod Included' ),
    item_price    ( 'AU$109.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B01M35CNS8' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-6010857-5322201' ),
    order_id        ( '249-6010857-5322201' ),
    order_date      ( '26 July 2024' ),
    order_item_name ( 'Logitech C922 Pro Stream Webcam 1080P Camera for HD Video Streaming & Recording 720P at 60Fps with Tripod Included' ),
    order_price     ( 'AU$119.99' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B01M35CNS8' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=250-9855331-0138256' ),
    order_id        ( '250-9855331-0138256' ),
    order_date      ( '8 June 2023' ),
    order_item_name ( 'Logitech C922 Pro Stream Webcam' ),
    order_price     ( 'AU$99.00' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B01M35CNS8' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=250-8654299-8289454' ),
    order_id        ( '250-8654299-8289454' ),
    order_date      ( '12 April 2023' ),
    order_item_name ( 'Logitech C922 Pro Stream Webcam' ),
    order_price     ( 'AU$99.00' ),
    order_quantity  ( 2 ),
  ),
);

equipment(
  equipment_date( '2023-06-10' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61OQP2+yqML._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Logitech' ),
    model_name        ( 'Brio' ),
    EquipmentFeature::USB_CAMERA,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/184424588573' ),
    affiliate_url ( 'https://ebay.us/Mvj09V' ),
    listing_name  ( 'Logitech Brio 4K Ultra HD Webcam' ),
    item_price    ( 'AU$279.00' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B0B1LHXPH1' ),
    listing_name  ( 'Logitech Brio Stream Webcam - Ultra 4K HD Video Calling, Noise-Cancelling Mic, HD Auto Light Correction, Wide Angle, Compatible with Microsoft Teams, Zoom, Google Meet on PC / Mac' ),
    item_price    ( 'AU$249.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/325686156340' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=13-10156-08010#/' ),
    order_id        ( '13-10156-08010' ),
    order_date      ( '10 Jun 2023' ),
    order_item_name ( 'Logitech Brio ULTRA HD 4K Webcam - Black - NEW' ),
    order_price     ( 'AU$199.00' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/155618908223' ),
    order_url       ( 'https://www.ebay.com.au/vod/FetchOrderDetails?orderId=03-10432-96827' ),
    order_id        ( '03-10432-96827' ),
    order_date      ( '19 Aug 2023' ),
    order_item_name ( 'Logitech Brio 4K Ultra HD Pro Recording Webcam, HDR & Windows Hello - NEW IN BOX' ),
    order_price     ( 'AU$200.00' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B0B1LHXPH1' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-1822317-9632663' ),
    order_id        ( '249-1822317-9632663' ),
    order_date      ( '28 March 2024' ),
    order_item_name ( 'Logitech Brio Stream Webcam - Ultra 4K HD Video Calling, Noise-Cancelling Mic, HD Auto Light Correction, Wide Angle, Compatible with Microsoft Teams, Zoom, Google Meet on PC / Mac' ),
    order_price     ( 'AU$249.99' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/dp/B01N5UOYC4' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-3387362-9719023' ),
    order_id        ( '249-3387362-9719023' ),
    order_date      ( '14 October 2024' ),
    order_item_name ( 'Logitech BRIO – Ultra HD Webcam for Video Conferencing, Recording, and Streaming' ),
    order_price     ( 'AU$299.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2022-05-31' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/K0wAAOSwtzNhuBhG/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    EquipmentFeature::XBOX_TO_HDMI_ADAPTER,
    EquipmentFeature::CABLE,
  ),
  sixsigma_url  ( '' ),
  warning       ( 'ZUZONG Original Xbox to HDMI Converter, HD Link Cable for Original Xbox, Xbox to HDMI Support 1080P/720P, Compatible with Original Xbox' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/363655980628' ),
    listing_name  ( 'Original Xbox to HDMI Converter Adapter, HD Link Cable for Original Xbox 1080P' ),
    item_price    ( 'AU$24.84' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/dp/B07V73764F' ),
    affiliate_url ( 'https://amzn.to/41KqdHa' ),
    listing_name  ( 'Original Xbox to HDMI Converter, HDMI 1080p/720p Output, Compatible with Original Xbox' ),
    item_price    ( 'US$29.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/363655980628' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=01-08694-76839#/' ),
    order_id        ( '01-08694-76839' ),
    order_date      ( '31 May 2022' ),
    order_item_name ( 'Original Xbox to HDMI Converter Adapter, HD Link Cable for Original Xbox 1080P' ),
    order_price     ( 'AU$59.79' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-08-02' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71SfBNsFB9L._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'GANA' ),
    model_name        ( 'Mini AV2HDMI Up Scaler 1080p' ),
    EquipmentFeature::RCA_TO_HDMI_ADAPTER,
  ),
  sixsigma_url  ( '' ),
  warning       ( 'SZJUNXIAO RCA to HDMI Adapter, 1080P AV RCA to HDMI Converter Composite CVBS Video Audio Converter Adapter for PS2 Wii Xbox SNES N64 VHS VCR Camera DVD, Supporting PAL/NTSC with USB Power Cable' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com/dp/B099X8JK8N' ),
    affiliate_url ( 'https://amzn.to/3TLUrIc' ),
    listing_name  ( 'RCA to HDMI Adapter, 1080P AV RCA to HDMI Converter Composite CVBS Video Audio Converter Adapter for PS2 Wii Xbox SNES N64 VHS VCR Camera DVD, Supporting PAL/NTSC with USB Power Cable' ),
    item_price    ( 'US$12.23' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B01L8GG6PW' ),
    listing_name  ( 'RCA to HDMI, GANA 1080P Mini RCA Composite CVBS AV to HDMI Video Audio Converter Adapter Supporting PAL/NTSC with USB Charge Cable for PC Laptop Xbox PS4 PS3 TV STB VHS VCR Camera DVD' ),
    item_price    ( 'AU$18.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B01L8GG6PW' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=250-0351716-7775860' ),
    order_id        ( '250-0351716-7775860' ),
    order_date      ( '2 June 2022' ),
    order_item_name ( 'RCA to HDMI, GANA 1080P Mini RCA Composite CVBS AV to HDMI Video Audio Converter Adapter Supporting PAL/NTSC with USB Charge Cable for PC Laptop Xbox' ),
    order_price     ( 'AU$17.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-04-09' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/MZoAAOSwNCNkDZ7D/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'HD Webcam with Mic' ),
    EquipmentFeature::USB_CAMERA,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/394508906969' ),
    affiliate_url ( 'https://ebay.us/O94qce' ),
    listing_name  ( 'HD USB Webcam Camera Video Calling Web Cam with Mic for PC Desktop Laptop' ),
    item_price    ( 'AU$15.17' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/394508906969' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=25-09913-20471#/' ),
    order_id        ( '25-09913-20471' ),
    order_date      ( '9 Apr 2023' ),
    order_item_name ( 'HD USB Webcam Camera Video Calling Web Cam with Mic for PC Desktop Laptop' ),
    order_price     ( 'AU$15.17' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-11' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/sSEAAOSw8YtjmCKT/s-l500.jpg' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( '13MP HD Webcam With Mic' ),
    EquipmentFeature::USB_CAMERA,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/265075712029' ),
    affiliate_url ( 'https://ebay.us/NY9onu' ),
    listing_name  ( 'USB 2.0 13MP HD Webcam Camera Web Cam With Mic For Computer PC Laptop LED #T' ),
    item_options  ( 'No light' ),
    item_price    ( 'AU$14.64' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/265075712029' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=17-10396-40506#/' ),
    order_id        ( '17-10396-40506' ),
    order_date      ( '11 Aug 2023' ),
    order_item_name ( 'USB 2.0 13MP HD Webcam Camera Web Cam With Mic For Computer PC Laptop LED #T' ),
    order_options   ( 'No light' ),
    order_price     ( 'AU$14.64' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-05-31' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/51R-NqaCbuL._AC_SL1000_.jpg' ),
  equipment_item(
    manufacturer_name ( 'AVerMedia' ),
    model_name        ( 'BU110' ),
    EquipmentFeature::HDMI_TO_USB_ADAPTER,
  ),
  sixsigma_url  ( '' ),
  see_also      ( 'Yum Cha 4K HDMI USB 3.0 HDMI To USB Adapter' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/dp/B0772LLPMD' ),
    listing_name  ( 'AVerMedia Forty7 BU110 ExtremeCap UVC, Multi-Colour' ),
    item_price    ( 'AU$309.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/dp/B0772LLPMD' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=250-5854462-8412639' ),
    order_id        ( '250-5854462-8412639' ),
    order_date      ( '31 May 2023' ),
    order_item_name ( 'AVerMedia Forty7 BU110 ExtremeCap UVC, Multi-Colour' ),
    order_price     ( 'AU$108.56' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-19' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/GHMAAOSwRY5kEZkE/s-l500.jpg' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( '4K HDMI USB 3.0' ),
    EquipmentFeature::HDMI_TO_USB_ADAPTER,
  ),
  sixsigma_url  ( '' ),
  see_also      ( 'AVerMedia BU110 HDMI To USB Adapter' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/125822891428' ),
    affiliate_url ( 'https://ebay.us/7y0Cr5' ),
    listing_name  ( '4K Audio Video Capture Card USB 3.0 HDMI Video Capture Device for Live Streaming' ),
    item_price    ( 'AU$36.49' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/125822891428' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=10-10429-15594#/' ),
    order_id        ( '10-10429-15594' ),
    order_date      ( '19 Aug 2023' ),
    order_item_name ( '4K Audio Video Capture Card USB 3.0 HDMI Video Capture Device for Live Streaming' ),
    order_price     ( 'AU$32.11' ),
    order_quantity  ( 3 ),
  ),
);

equipment(
  equipment_date( '2023-10-28' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71IPEXNXxuL._SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'AOOCOO' ),
    model_name        ( '4K @60Hz USB 3.0 4-Port' ),
    EquipmentFeature::HDMI_KVM,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/dp/B0B79Q6YFC' ),
    listing_name  ( 'KVM Switch HDMI 4 Port, USB 3.0 KVM Switches 4K 60HZ HDMI and USB Switcher with EDID Simulator for 4 Computers Share Keyboard Mouse Printer Scanner and One HD Monitor with 1 External Button Switch' ),
    item_options  ( 'USB 3.0 4 port KVM' ),
    item_price    ( 'AU$75.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/dp/B0B79Q6YFC' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-4205740-4090235' ),
    order_id        ( '249-4205740-4090235' ),
    order_date      ( '28 October 2023' ),
    order_item_name ( 'KVM Switch HDMI 4 Port, USB 3.0 KVM Switches 4K 60HZ HDMI and USB Switcher with EDID Simulator for 4 Computers Share Keyboard Mouse Printer Scanner and One HD Monitor with 1 External Button Switch' ),
    order_options   ( 'USB 3.0 4 port KVM' ),
    order_price     ( 'AU$84.14' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-10-28' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61ZzhqNiVoL._SL1196_.jpg' ),
  equipment_item(
    manufacturer_name ( 'AOOCOO' ),
    model_name        ( '4K @60Hz USB 2.0 4-Port' ),
    EquipmentFeature::HDMI_KVM,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B09FXKJ3B3' ),
    listing_name  ( 'KVM Switch HDMI, Kvm Switch 4 Port 4 in 1 Out USB KVM Switcher for 4 Computers Share one HD Monitor and 4 USB 2.0 Devices, Support UHB 4K@60Hz and Wireless Keyboard and Mouse' ),
    item_options  ( 'Without audio function' ),
    item_price    ( 'AU$75.96' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B09FXKJ3B3' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-4205740-4090235' ),
    order_id        ( '249-4205740-4090235' ),
    order_date      ( '28 October 2023' ),
    order_item_name ( 'KVM Switch HDMI, Kvm Switch 4 Port 4 in 1 Out USB KVM Switcher for 4 Computers Share one HD Monitor and 4 USB 2.0 Devices, Support UHB 4K@60Hz and Wireless Keyboard and Mouse' ),
    order_options   ( 'Without audio function' ),
    order_price     ( 'AU$64.56' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-09' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/IycAAOSwrTVjFnHI/s-l500.jpg' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'USB 3.0 2-Port' ),
    EquipmentFeature::USB_SWITCH,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/403869855778' ),
    listing_name  ( 'USB 3.0 Switch Selector KVM Switch 2 in 1 Out USB Switcher For 2 Computers Share' ),
    item_price    ( 'AU$23.05' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/403869855778' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=11-10391-24826#/' ),
    order_id        ( '11-10391-24826' ),
    order_date      ( '9 Aug 2023' ),
    order_item_name ( 'USB 3.0 Switch Selector KVM Switch 2 in 1 Out USB Switcher For 2 Computers Share' ),
    order_price     ( 'AU$27.39' ),
    order_quantity  ( 2 ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/403869855778' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=05-10160-54796#/' ),
    order_id        ( '05-10160-54796' ),
    order_date      ( '10 Jun 2023' ),
    order_item_name ( 'USB 3.0 Switch Selector KVM Switch 2 in 1 Out USB Switcher For 2 Computers Share' ),
    order_price     ( 'AU$26.02' ),
    order_quantity  ( 2 ),
  ),
);

equipment(
  equipment_date( '2021-08-12' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/S3eb132a31ff34759839e09432bedfb23n.jpg_640x640.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'RV77' ),
    model_name        ( '4K HDMI USB 2.0 4-Port' ),
    EquipmentFeature::HDMI_KVM,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/4000849336545.html' ),
    listing_name  ( '4 Port KVM Switch HD 4K Scanner USB KVM Switcher 4 in 1 Out Hot USB for Mouse Keyboard for Win7 Win10 for MAC for PlayStation 2' ),
    item_options  ( 'Color: USB' ),
    item_price    ( 'AU$72.97' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/4000849336545.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.1.2a901802oargGz&orderId=8136782041693938' ),
    order_id        ( '8136782041693938' ),
    order_date      ( 'Aug 12, 2021' ),
    order_item_name ( '4 Port KVM Switch HD 4K Scanner USB KVM Switcher 4 in 1 Out Hot USB for Mouse Keyboard for Win7 Win10 for MAC for PlayStation 2' ),
    order_options   ( 'Color: USB' ),
    order_price     ( 'AU$40.83' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$4.46' ),
  ),
);

equipment(
  equipment_date( '2021-08-12' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/44sAAOSws0lihbt~/s-l1600.jpg' ),
  equipment_item(
    manufacturer_name ( 'HDmatters' ),
    model_name        ( '4K HDMI USB 2.0 4-Port' ),
    EquipmentFeature::HDMI_KVM,
  ),
  sixsigma_url  ( '' ),
  warning       ( 'HDMI 2.0 KVM Switch 4 Port USB HDMI KVM Switcher Box 4K 60Hz HDR For PC Laptop' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/164322499589' ),
    affiliate_url ( 'https://ebay.us/rjlNhl' ),
    listing_name  ( '4/2 Port HDMI 2.0 KVM Switch Box 4K 60Hz USB KVM Switcher Keyboard Mouse Sharing' ),
    item_options  ( '4X1 Switcher' ),
    item_price    ( 'AU$64.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/164322499589' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=27-10130-43453#/' ),
    order_id        ( '27-10130-43453' ),
    order_date      ( '5 Jun 2023' ),
    order_item_name ( '4/2 Port HDMI 2.0 KVM Switch Box 4K 60Hz USB KVM Switcher Keyboard Mouse Sharing' ),
    order_options   ( '4X1 Switcher' ),
    order_price     ( 'AU$66.49' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-12' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/QBoAAOSwVOBfPhvs/s-l500.jpg' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( '4K 3-Way' ),
    EquipmentFeature::HDMI_SWITCH,
    EquipmentFeature::CABLE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/123323355984' ),
    affiliate_url ( 'https://ebay.us/Wyx4Y5' ),
    listing_name  ( '4K Ultra HD 3 Way HDMI Switch Box Splitter 1080P HDTV Auto 3 Port IN 1 OUT Cable' ),
    item_options  ( '3 Way 4K HDMI Switch' ),
    item_price    ( 'AU$8.95' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/123323355984' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=15-10398-27289#/' ),
    order_id        ( '15-10398-27289' ),
    order_date      ( '12 Aug 2023' ),
    order_item_name ( '4K Ultra HD 3 Way HDMI Switch Box Splitter 1080P HDTV Auto 3 Port IN 1 OUT Cable' ),
    order_options   ( '3 Way 4K HDMI Switch' ),
    order_price     ( 'AU$8.95' ),
    order_quantity  ( 5 ),
  ),
);

equipment(
  equipment_date( '2023-08-31' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71NdzPCfOLL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'GKRONG' ),
    model_name        ( '8K 5-In 1-Out' ),
    EquipmentFeature::HDMI_SWITCH,
  ),
  sixsigma_url  ( '' ),
  warning       ( '8K HDMI Switch 5-in-1 Output, HDMI 2.1 Switch 5-Port with IR Remote Control, HDMI Switch Selection 8K@60Hz/4K@120Hz for Xbox PS4 PC TV' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B0C7TBHBMZ' ),
    affiliate_url ( 'https://amzn.to/479h4do' ),
    listing_name  ( '8K HDMI 2.1 Switch 120Hz 4K 5 in 1 Out, 8K@60Hz HDMI 2.1 Splitter Switcher Selector Box 5-Port with Remote 4K 120Hz 2K 144Hz, HDMI 5x1 HDR, 48Gbps, CEC, Dolby Vision, for Xbox Series X PS5' ),
    item_price    ( 'AU$55.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B0C7TBHBMZ' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-0981274-2700636' ),
    order_id        ( '249-0981274-2700636' ),
    order_date      ( '31 August 2023' ),
    order_item_name ( '8K HDMI 2.1 Switch 120Hz 4K 5 in 1 Out, 8K@60Hz HDMI 2.1 Splitter Switcher Selector Box 5-Port with Remote 4K 120Hz 2K 144Hz, HDMI 5x1 HDR, 48Gbps, CEC, Dolby Vision, for Xbox Series X PS5' ),
    order_price     ( 'AU$82.89' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2022-05-31' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/51TptXXPIKL._AC_SL1000_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Simplecom' ),
    model_name        ( 'CH375PS' ),
    EquipmentFeature::USB_HUB,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B07P8VZPMN' ),
    listing_name  ( 'Simplecom CH375PS Aluminium 7 Port USB 3.0 Hub with Individual Switches and Power Adapter' ),
    item_price    ( 'AU$50.93' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B07P8VZPMN' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=250-2430326-4965406' ),
    order_id        ( '250-2430326-4965406' ),
    order_date      ( '31 May 2022' ),
    order_item_name ( 'Simplecom CH375PS Aluminium 7 Port USB 3.0 Hub with Individual Switches and Power Adapter' ),
    order_price     ( 'AU$43.00' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B07P8VZPMN' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=503-7464066-6143067' ),
    order_id        ( '503-7464066-6143067' ),
    order_date      ( '3 February 2022' ),
    order_item_name ( 'Simplecom CH375PS Aluminium 7 Port USB 3.0 Hub with Individual Switches and Power Adapter' ),
    order_price     ( 'AU$38.37' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-06-10' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/u70AAOSwRa1kCYaN/s-l500.jpg' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( '11 in 1 USB-C Hub' ),
    EquipmentFeature::USB_HUB,
    EquipmentConnectivity::HDMI,
    EquipmentConnectivity::VGA,
    EquipmentConnectivity::SD_CARD,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/385514862649' ),
    affiliate_url ( 'https://ebay.us/jye0b7' ),
    listing_name  ( '11 in 1 USB C Hub 4K HDMI Adapter VGA Dongle 3 USB 3.0 Ports SD/TF Type C PD AUX' ),
    item_price    ( 'AU$45.99' ),
  ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/165974157305' ),
    affiliate_url ( 'https://ebay.us/5C6rAv' ),
    listing_name  ( '11 in 1 USB C Hub 4K HDMI Adapter VGA Dongle 3 USB 3.0 Ports SD/TF Type C PD AUX' ),
    item_price    ( 'AU$53.39' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/385514862649' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=21-10151-87737#/' ),
    order_id        ( '21-10151-87737' ),
    order_date      ( '10 Jun 2023' ),
    order_item_name ( '11 in 1 USB C Hub 4K HDMI Adapter VGA Dongle 3 USB 3.0 Ports SD/TF Type C PD AUX' ),
    order_price     ( 'AU$43.69' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/165974157305' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=25-09913-20474#/' ),
    order_id        ( '25-09913-20474' ),
    order_date      ( '9 Apr 2023' ),
    order_item_name ( '11 in 1 USB C Hub 4K HDMI Adapter VGA Dongle 3 USB 3.0 Ports SD/TF Type C PD AUX' ),
    order_price     ( 'AU$50.34' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-06-10' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/02sAAOSwa6ZjRS~R/s-l500.jpg' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'USB 3.0 Powered 4-Port' ),
    EquipmentFeature::USB_HUB,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/194329600581?var=494452525322' ),
    affiliate_url ( 'https://ebay.us/CuwoFL' ),
    listing_name  ( '4/7 Ports USB 3.0 HUB Powered +High Speed Splitter Extender PC AC Cable Adapter' ),
    item_options  ( '4 Port USB 3.0 Hub' ),
    item_price    ( 'AU$17.09' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/194329600581?var=494452525322' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=21-10151-87735#/' ),
    order_id        ( '21-10151-87735' ),
    order_date      ( '10 Jun 2023' ),
    order_item_name ( '4/7 Ports USB 3.0 HUB Powered +High Speed Splitter Extender PC AC Cable Adapter' ),
    order_options   ( '4 Port USB 3.0 Hub' ),
    order_price     ( 'AU$17.99' ),
    order_quantity  ( 3 ),
  ),
);

equipment(
  equipment_date( '2023-10-28' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71hl5VqkhOL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Tendak' ),
    model_name        ( 'USB 3.0 Powered 4-Port' ),
    EquipmentFeature::USB_HUB,
  ),
  sixsigma_url  ( '' ),
  warning       ( 'USB 3.0 Hub, Tendak USB Hub with 4 USB 3.0 Data Ports + 1 USB Smart Charging Port and Power Supply Adapter with Individual On/Off Port Switches for PS4 Pro PS4 Slim Xbox One' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B00VK9C24M' ),
    listing_name  ( 'Tendak USB 3.0 Hub with 4 USB 3.0 Data Ports + 1 USB Smart Charging Port and Power Supply Adapter with Individual On/Off Port Switches' ),
    item_price    ( 'AU$25.59' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B00VK9C24M' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-4620865-7008608' ),
    order_id        ( '249-4620865-7008608' ),
    order_date      ( '28 October 2023' ),
    order_item_name ( 'Tendak USB 3.0 Hub with 4 USB 3.0 Data Ports + 1 USB Smart Charging Port and Power Supply Adapter with Individual On/Off Port Switches' ),
    order_price     ( 'AU$32.99' ),
    order_quantity  ( 2 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B00VK9C24M' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=250-9208850-4917434' ),
    order_id        ( '250-9208850-4917434' ),
    order_date      ( '8 June 2023' ),
    order_item_name ( 'Tendak USB 3.0 Hub with 4 USB 3.0 Data Ports + 1 USB Smart Charging Port and Power Supply Adapter with Individual On/Off Port Switches' ),
    order_price     ( 'AU$33.99' ),
    order_quantity  ( 2 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B00VK9C24M' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=250-7007633-0705440' ),
    order_id        ( '250-7007633-0705440' ),
    order_date      ( '5 June 2023' ),
    order_item_name ( 'Tendak USB 3.0 Hub with 4 USB 3.0 Data Ports + 1 USB Smart Charging Port and Power Supply Adapter with Individual On/Off Port Switches' ),
    order_price     ( 'AU$32.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-06-05' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61wRaJdxqML._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'ORICO' ),
    model_name        ( 'PW11-9P-RG-EP-US USB 3.0 Powered 4-Port' ),
    EquipmentFeature::USB_HUB,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/dp/B09MS7S1R3' ),
    listing_name  ( 'ORICO USB 3.0 Hub Clamp Adapter, Aluminum 4-Port USB Splitter with Extra Power Supply Port and 4.92 FT USB Data Cable, Ultra-Portable USB Expander for 2021 iMac/Laptop/PC' ),
    item_options  ( 'Colour Name: Black' ),
    item_price    ( 'AU$32.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/dp/B09MS7S1R3' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=250-7007633-0705440' ),
    order_id        ( '250-7007633-0705440' ),
    order_date      ( '5 June 2023' ),
    order_item_name ( 'ORICO USB 3.0 Hub Clamp Adapter, Aluminum 4-Port USB Splitter with Extra Power Supply Port and 4.92 FT USB Data Cable, Ultra-Portable USB Expander for 2021 iMac/Laptop/PC' ),
    order_options   ( 'Colour Name: Black' ),
    order_price     ( 'AU$39.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-31' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/511OtQj+QxL._AC_.jpg' ),
  equipment_item(
    manufacturer_name ( 'TAVICE' ),
    model_name        ( '1-In 2-Out' ),
    EquipmentFeature::HDMI_SPLITTER,
    EquipmentFeature::CABLE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B0C4577969' ),
    listing_name  ( 'TAVICE HDMI Splitter 1 in 2 Out Cable Adapter Converter 1080 Multi Display Duplicator HDMI Adapter Cable HDMI Male to Dual HDMI Female 1 to 2 Way, Support Two TVs Signal One in Two Out' ),
    item_price    ( 'AU$8.95' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B0C4577969' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-2580349-4566214' ),
    order_id        ( '249-2580349-4566214' ),
    order_date      ( '31 August 2023' ),
    order_item_name ( 'TAVICE HDMI Splitter 1 in 2 Out Cable Adapter Converter 1080 Multi Display Duplicator HDMI Adapter Cable HDMI Male to Dual HDMI Female 1 to 2 Way, Support Two TVs Signal One in Two Out' ),
    order_price     ( 'AU$8.95' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-31' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/417EVUHy5QL.jpg' ),
  equipment_item(
    manufacturer_name ( 'ZYa' ),
    model_name        ( '1-In 2-Out' ),
    EquipmentFeature::HDMI_SPLITTER,
    EquipmentFeature::CABLE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B09SB178WS' ),
    listing_name  ( 'HDMI Splitter-HDMI Splitter 1 in 2 Out/HDMI Splitter Adapter Cable HDMI Male to Dual HDMI Female 1 to 2 Way,Support Two TVs at The Same Time (Black)' ),
    item_price    ( 'AU$7.96' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B09SB178WS' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-2580349-4566214' ),
    order_id        ( '249-2580349-4566214' ),
    order_date      ( '31 August 2023' ),
    order_item_name ( 'HDMI Splitter-HDMI Splitter 1 in 2 Out/HDMI Splitter Adapter Cable HDMI Male to Dual HDMI Female 1 to 2 Way,Support Two TVs at The Same Time (Black)' ),
    order_price     ( 'AU$12.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-31' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/51P7dveQu3L._AC_SL1200_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Cablecc' ),
    model_name        ( '1-In 2-Out' ),
    EquipmentFeature::HDMI_SPLITTER,
    EquipmentFeature::CABLE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B015HLAMIG' ),
    listing_name  ( 'cablecc HDMI Male to 2 HDMI Female 1 in 2 Out Splitter Cable Adapter Converter' ),
    item_price    ( 'AU$8.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B015HLAMIG' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-2580349-4566214' ),
    order_id        ( '249-2580349-4566214' ),
    order_date      ( '31 August 2023' ),
    order_item_name ( 'cablecc HDMI Male to 2 HDMI Female 1 in 2 Out Splitter Cable Adapter Converter' ),
    order_price     ( 'AU$14.13' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-24' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61x8aSIQpSL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'EXSHOW' ),
    model_name        ( 'Long Arm' ),
    EquipmentFeature::WEBCAM_WALL_MOUNT,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B0BFWSTY3L' ),
    listing_name  ( 'Tablet Wall Mount for iPad, EXSHOW 35in Adjustable Arm Drill Base Tablet Mount for Kitchen Cabinet Desk, Camera Holder Webcam Stand for iPad Pro 12.9 Air Mini, Galaxy Tabs, Switch,iPhone,4-13" Tablets' ),
    item_price    ( 'AU$69.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B0BFWSTY3L' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-2032237-9131023' ),
    order_id        ( '249-2032237-9131023' ),
    order_date      ( '24 August 2023' ),
    order_item_name ( 'Tablet Wall Mount for iPad, EXSHOW 35in Adjustable Arm Drill Base Tablet Mount for Kitchen Cabinet Desk, Camera Holder Webcam Stand for iPad Pro 12.9 Air Mini, Galaxy Tabs, Switch,iPhone,4-13" Tablets' ),
    order_price     ( 'AU$69.99' ),
    order_quantity  ( 2 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B0BFWSTY3L' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=250-8721883-1782251' ),
    order_id        ( '250-8721883-1782251' ),
    order_date      ( '15 June 2023' ),
    order_item_name ( 'Tablet Wall Mount for iPad, EXSHOW 35in Adjustable Arm Drill Base Tablet Mount for Kitchen Cabinet Desk, Camera Holder Webcam Stand for iPad Pro 12.9 Air Mini, Galaxy Tabs, Switch,iPhone,4-13" Tablets' ),
    order_price     ( 'AU$69.99' ),
    order_quantity  ( 3 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B0BFWSTY3L' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=250-8654299-8289454' ),
    order_id        ( '250-8654299-8289454' ),
    order_date      ( '12 April 2023' ),
    order_item_name ( 'Tablet Wall Mount for iPad, EXSHOW 35in Adjustable Arm Drill Base Tablet Mount for Kitchen Cabinet Desk, Camera Holder Webcam Stand for iPad Pro 12.9 Air Mini, Galaxy Tabs, Switch,iPhone,4-13" Tablets' ),
    order_price     ( 'AU$69.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-04-12' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/51me944heYL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Grestar' ),
    model_name        ( 'Flexible' ),
    EquipmentFeature::WEBCAM_STAND,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B099PZNGBN' ),
    affiliate_url ( 'https://amzn.to/3MGUvEu' ),
    listing_name  ( 'Webcam Stand, Upgraded Flexible Desktop Stand Gooseneck Stands Holder for Logitech Webcam C922 C930e C920S C920 C615 C960 and BRIO and Other Devices with 1/4" Thread' ),
    item_price    ( 'AU$38.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B099PZNGBN' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=250-8654299-8289454' ),
    order_id        ( '250-8654299-8289454' ),
    order_date      ( '12 April 2023' ),
    order_item_name ( 'Webcam Stand, Upgraded Flexible Desktop Stand Gooseneck Stands Holder for Logitech Webcam C922 C930e C920S C920 C615 C960 and BRIO and Other Devices with 1/4" Thread' ),
    order_price     ( 'AU$38.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-08-02' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61aWCGekJbL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Acetaken' ),
    model_name        ( '25WMGRS-002 Gooseneck Clamp' ),
    EquipmentFeature::WEBCAM_STAND,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B082F6TV77' ),
    affiliate_url ( 'https://amzn.to/3MH342i' ),
    listing_name  ( 'Webcam Stand - 25 inch Gooseneck Clamp Desk Webcam Mount Arm for Logitech Webcam C920s C920 C930e C922x C930 C922 C925e C615 Brio - Acetaken' ),
    item_price    ( 'AU$31.50' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B082F6TV77' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-5426104-4667800' ),
    order_id        ( '249-5426104-4667800' ),
    order_date      ( '11 August 2023' ),
    order_item_name ( 'Webcam Stand - 25 inch Gooseneck Clamp Desk Webcam Mount Arm for Logitech Webcam C920s C920 C930e C922x C930 C922 C925e C615 Brio - Acetaken' ),
    order_price     ( 'AU$31.50' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B082F6TV77' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=250-8654299-8289454' ),
    order_id        ( '250-8654299-8289454' ),
    order_date      ( '12 April 2023' ),
    order_item_name ( 'Webcam Stand - 25 inch Gooseneck Clamp Desk Webcam Mount Arm for Logitech Webcam C920s C920 C930e C922x C930 C922 C925e C615 Brio - Acetaken' ),
    order_price     ( 'AU$31.50' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-07-26' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61x4HP+zeFL._AC_SL1200_.jpg' ),
  equipment_item(
    manufacturer_name ( 'T Tersely' ),
    model_name        ( 'USB 3.0 Powered Individual Power Switches and LEDs 7-Port' ),
    EquipmentFeature::USB_HUB,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B07QHW6DJR' ),
    listing_name  ( 'T Tersely Individual Power Switches and LEDs ON/Off 7-Port USB 3.0 Hub, Ultra Slim 5Gbps Super Speed USB Data Transfer Hub Expansion Splitter for MacBook, XPS, PC, USB Flash Drives, Mobile HDD, More' ),
    item_price    ( 'AU$17.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B07QHW6DJR' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-6010857-5322201' ),
    order_id        ( '249-6010857-5322201' ),
    order_date      ( '26 July 2024' ),
    order_item_name ( 'T Tersely Individual Power Switches and LEDs ON/Off 7-Port USB 3.0 Hub, Ultra Slim 5Gbps Super Speed USB Data Transfer Hub Expansion Splitter for MacBook, XPS, PC, USB Flash Drives, Mobile HDD, More' ),
    order_price     ( 'AU$13.00' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B07QHW6DJR' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=503-3476731-9531026' ),
    order_id        ( '503-3476731-9531026' ),
    order_date      ( '7 August 2021' ),
    order_item_name ( 'T Tersely Individual Power Switches and LEDs ON/Off 7-Port USB 3.0 Hub, Ultra Slim 5Gbps Super Speed USB Data Transfer Hub Expansion Splitter for MacBook, XPS, PC, USB Flash Drives, Mobile HDD, More' ),
    order_price     ( 'AU$26.95' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-07-23' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/615Mro2KlFL._AC_SL1001_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Wakects' ),
    model_name        ( 'Wakects-pvo4k6erfz' ),
    EquipmentFeature::SOLDER_POT,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B08R8ML7KF' ),
    listing_name  ( 'Solder Pot, 200-450°C Soldering Desoldering Bath, Stainless Steel Soldering Desoldering Bath Tool for Welding Soldering Bath' ),
    item_price    ( 'AU$18.09' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B08R8ML7KF' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=249-9968725-9408625&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '249-9968725-9408625' ),
    order_date      ( '23 July 2024' ),
    order_item_name ( 'Solder Pot, 200-450°C Soldering Desoldering Bath, Stainless Steel Soldering Desoldering Bath Tool for Welding Soldering Bath' ),
    order_price     ( 'AU$18.09' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-05-21' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71jkOBsd+rL._AC_SL1417_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Eversure' ),
    model_name        ( 'Hogdseirrs 10660192 4-Outlet' ),
    EquipmentFeature::POWER_BOARD,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B078WPGH8R' ),
    listing_name  ( 'Eversure Wide Space Switched 4 Outlet Powerboard, Black' ),
    item_price    ( 'AU$30.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B078WPGH8R' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-0229126-8693473' ),
    order_id        ( '249-0229126-8693473' ),
    order_date      ( '21 May 2024' ),
    order_item_name ( 'Eversure Wide Space Switched 4 Outlet Powerboard, Black' ),
    order_price     ( 'AU$30.99' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B078WPGH8R' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-9645623-8263024' ),
    order_id        ( '249-9645623-8263024' ),
    order_date      ( '22 August 2023' ),
    order_item_name ( 'Eversure Wide Space Switched 4 Outlet Powerboard, Black' ),
    order_price     ( 'AU$29.90' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-12-22' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/718p3eCDNTL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.bosch-diy.com/au/en/p/v-line-drill-and-screwdriver-bit-set-tin-coated-91-pieces-with-ratchet-and-magnet-2763495' ),
      link_text       ( 'V-Line Drill- and Screwdriver Bit Set TiN-coated 91 pieces with ratchet and magnet' ),
    ),
    manufacturer_name ( 'Bosch' ),
    model_name        ( '91-Piece V-Line Titanium Drill Bit and Screwdriver Bit Set with Ratcheting Screwdriver' ),
    EquipmentFeature::ROTARY_TOOL_ACCESSORY_SET,
    EquipmentFeature::SCREWDRIVER,
    EquipmentFeature::RATCHET_SCREWDRIVER,
    EquipmentFeature::MAGNETIC_PICKUP_TOOL,
    EquipmentFeature::COUNTERSINK_SCREWDRIVER,
    EquipmentFeature::HEX_ADAPTER_SCREWDRIVER,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH0,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH1,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH2,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH3,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL3,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL5,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL6,
    EquipmentFeature::FLATHEAD_SCREWDRIVER_SL7,
    EquipmentFeature::POZIDRIV_SCREWDRIVER_PZ0,
    EquipmentFeature::POZIDRIV_SCREWDRIVER_PZ1,
    EquipmentFeature::POZIDRIV_SCREWDRIVER_PZ2,
    EquipmentFeature::POZIDRIV_SCREWDRIVER_PZ3,
    EquipmentFeature::TORX_SCREWDRIVER_T10,
    EquipmentFeature::TORX_SCREWDRIVER_T15,
    EquipmentFeature::TORX_SCREWDRIVER_T20,
    EquipmentFeature::TORX_SCREWDRIVER_T25,
    EquipmentFeature::TORX_SCREWDRIVER_T30,
    EquipmentFeature::TORX_SCREWDRIVER_T40,
    EquipmentFeature::HEX_SCREWDRIVER_H3,
    EquipmentFeature::HEX_SCREWDRIVER_H5,
    EquipmentFeature::HEX_SCREWDRIVER_H6,
    EquipmentFeature::HEX_NUT_DRIVER_6,
    EquipmentFeature::HEX_NUT_DRIVER_7,
    EquipmentFeature::HEX_NUT_DRIVER_8,
    EquipmentFeature::HEX_NUT_DRIVER_9,
    EquipmentFeature::HEX_NUT_DRIVER_10,
    EquipmentFeature::HEX_NUT_DRIVER_11,
    EquipmentFeature::HEX_NUT_DRIVER_12,
    EquipmentFeature::HEX_NUT_DRIVER_13,
    EquipmentFeature::WOOD_DRILL_BIT_3,
    EquipmentFeature::WOOD_DRILL_BIT_4,
    EquipmentFeature::WOOD_DRILL_BIT_5,
    EquipmentFeature::WOOD_DRILL_BIT_6,
    EquipmentFeature::WOOD_DRILL_BIT_7,
    EquipmentFeature::WOOD_DRILL_BIT_8,
    EquipmentFeature::WOOD_DRILL_BIT_10,
    EquipmentFeature::MASONRY_DRILL_BIT_3,
    EquipmentFeature::MASONRY_DRILL_BIT_4,
    EquipmentFeature::MASONRY_DRILL_BIT_5,
    EquipmentFeature::MASONRY_DRILL_BIT_5_5,
    EquipmentFeature::MASONRY_DRILL_BIT_6,
    EquipmentFeature::MASONRY_DRILL_BIT_7,
    EquipmentFeature::MASONRY_DRILL_BIT_8,
    EquipmentFeature::MASONRY_DRILL_BIT_10,
    EquipmentFeature::HSS_DRILL_BIT_2,
    EquipmentFeature::HSS_DRILL_BIT_2_5,
    EquipmentFeature::HSS_DRILL_BIT_3,
    EquipmentFeature::HSS_DRILL_BIT_3_5,
    EquipmentFeature::HSS_DRILL_BIT_4,
    EquipmentFeature::HSS_DRILL_BIT_5,
    EquipmentFeature::HSS_DRILL_BIT_6,
    EquipmentFeature::HSS_DRILL_BIT_7,
    EquipmentFeature::HSS_DRILL_BIT_8,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B00GGKMNTO' ),
    listing_name  ( 'Bosch Accessories 91-Piece V-Line Titanium Drill Bit and Screwdriver Bit Set with Ratcheting Screwdriver (For Wood, Masonry, and Metal)' ),
    item_options  ( '91 pcs. Set' ),
    item_price    ( 'AU$62.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B00GGKMNTO' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=249-7129184-0979066&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '249-7129184-0979066' ),
    order_date      ( '22 December 2023' ),
    order_item_name ( 'Bosch Accessories 91-Piece V-Line Titanium Drill Bit and Screwdriver Bit Set with Ratcheting Screwdriver (For Wood, Masonry, and Metal)' ),
    order_options   ( '91 pcs. Set' ),
    order_price     ( 'AU$29.95' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-12-18' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/51WNT9MnDwL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Mcbazel' ),
    model_name        ( 'Mini Tri-Wing and Philips' ),
    EquipmentFeature::SCREWDRIVER_SET,
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH000,
    EquipmentFeature::TRI_POINT_Y_SCREWDRIVER_Y00,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B00WU9I3G2' ),
    listing_name  ( 'Mcbazel Tri-Wing & Philips Screwdriver Set Accessories for GBA NDS DSL Dsi 3DS XL Wii PS4 Nintendo Switch/Switch OLED Controller (Set of 2)' ),
    item_price    ( 'AU$9.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B00WU9I3G2' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-5251545-6656613' ),
    order_id        ( '249-5251545-6656613' ),
    order_date      ( '18 December 2023' ),
    order_item_name ( 'Mcbazel Tri-Wing & Philips Screwdriver Set Accessories for GBA NDS DSL Dsi 3DS XL Wii PS4 Nintendo Switch/Switch OLED Controller (Set of 2)' ),
    order_price     ( 'AU$9.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-12-18' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61B4bgNlbsL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Taessv' ),
    model_name        ( 'Gamebit 3.8mm and 4.5mm Security' ),
    EquipmentFeature::SCREWDRIVER_SET,
    EquipmentFeature::GAMEBIT_SCREWDRIVER_3_8,
    EquipmentFeature::GAMEBIT_SCREWDRIVER_4_5,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B07BF8R6YY' ),
    listing_name  ( 'Gamebit Screwdriver Set, 3.8mm & 4.5mm Security Screwdriver Bit Screwdriver Tools for Opening NES SNES N64 Super Nintendo 64 Cartridges & Systems - Orange' ),
    item_price    ( 'AU$10.95' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B07BF8R6YY' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-5251545-6656613' ),
    order_id        ( '249-5251545-6656613' ),
    order_date      ( '18 December 2023' ),
    order_item_name ( 'Gamebit Screwdriver Set, 3.8mm & 4.5mm Security Screwdriver Bit Screwdriver Tools for Opening NES SNES N64 Super Nintendo 64 Cartridges & Systems - Orange' ),
    order_price     ( 'AU$12.15' ),
    order_quantity  ( 2 ),
  ),
);

equipment(
  equipment_date( '2023-12-18' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/518uC+XyEEL._AC_SL1000_.jpg' ),
  equipment_item(
    manufacturer_name ( 'TP-Link' ),
    model_name        ( 'TL-SG108-M2 2.5Gbps 8-Port' ),
    EquipmentFeature::UNMANAGED_ETHERNET_SWITCH,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B08WQ16H4N' ),
    listing_name  ( 'TP-Link 8-Port 2.5G Desktop Unmanaged Switch, 8x 2.5 Gbps Ports, 2.5G WiFi 6 AP, 4K Video, Ideal for Gaming & Offices, Fanless Design, Plug & Play, Metal Casing (TL-SG108-M2)' ),
    item_price    ( 'AU$129.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B08WQ16H4N' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=249-1622477-9223852&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '249-1622477-9223852' ),
    order_date      ( '18 December 2023' ),
    order_item_name ( 'TP-Link 8-Port 2.5G Desktop Unmanaged Switch, 8x 2.5 Gbps Ports, 2.5G WiFi 6 AP, 4K Video, Ideal for Gaming & Offices, Fanless Design, Plug & Play, Metal Casing (TL-SG108-M2)' ),
    order_price     ( 'AU$131.90' ),
    order_quantity  ( 4 ),
  ),
);

equipment(
  equipment_date( '2023-12-13' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/31kp0nei0eL._AC_SL1000_.jpg' ),
  equipment_item(
    manufacturer_name ( 'TAVICE' ),
    model_name        ( '3.5-Inch' ),
    EquipmentFeature::USB_FLOPPY_DRIVE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B0C7BCL4QW' ),
    listing_name  ( 'TAVICE 3.5 inch USB Mobile Floppy Disk Drive Portable 1.44MB External FDD Reader for PC' ),
    item_price    ( 'AU$23.95' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B0C7BCL4QW' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=249-0039141-6940645&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '249-0039141-6940645' ),
    order_date      ( '13 December 2023' ),
    order_item_name ( 'TAVICE 3.5 inch USB Mobile Floppy Disk Drive Portable 1.44MB External FDD Reader for PC' ),
    order_price     ( 'AU$27.95' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-08-06' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/51DvBrCeKJL._AC_SL1200_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Sony' ),
    model_name        ( 'MDRZX110B' ),
    EquipmentFeature::HEADPHONES,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B01IEW8OE4' ),
    listing_name  ( 'Sony MDRZX110B On-Ear Headphones, Black' ),
    item_price    ( 'AU$24.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B01IEW8OE4' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-7646685-8392641' ),
    order_id        ( '249-7646685-8392641' ),
    order_date      ( '6 August 2024' ),
    order_item_name ( 'Sony MDRZX110B On-Ear Headphones, Black' ),
    order_price     ( 'AU$24.00' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-31' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71X2FB4e1ML._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'ZZBUY' ),
    model_name        ( '' ),
    EquipmentFeature::ADJUSTABLE_WRENCH_SET,
    EquipmentFeature::ADJUSTABLE_WRENCH_6_INCH,
    EquipmentFeature::ADJUSTABLE_WRENCH_8_INCH,
    EquipmentFeature::ADJUSTABLE_WRENCH_10_INCH,
    EquipmentFeature::ADJUSTABLE_WRENCH_12_INCH,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B0C1MZWT6Z' ),
    listing_name  ( 'ZZBUY 4 Piece Adjustable Wrench Set CR-V Steel Multifunctional Crescent Wrenches Set Plumbers Spanner Wrench Tool 6-inch, 8-inch, 10-inch, 12-inch' ),
    item_price    ( 'AU$39.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B0C1MZWT6Z' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=249-7046071-5453455&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '249-7046071-5453455' ),
    order_date      ( '31 August 2023' ),
    order_item_name ( 'ZZBUY 4 Piece Adjustable Wrench Set CR-V Steel Multifunctional Crescent Wrenches Set Plumbers Spanner Wrench Tool 6-inch, 8-inch, 10-inch, 12-inch' ),
    order_price     ( 'AU$29.74' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-31' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/51opZ+CedzL._AC_SL1000_.jpg' ),
  equipment_item(
    manufacturer_name ( 'CREATMOR' ),
    model_name        ( 'Universal AC 4-Outlet USB Power' ),
    EquipmentFeature::POWER_BOARD,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B09WVWNHYR' ),
    listing_name  ( 'Surge Protector 3M 4 AC Outlets/2 Type C Ports/4 USB Ports Power Strip Power Board 4.2A 3000W Surge Protection' ),
    item_price    ( 'AU$43.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B09WVWNHYR' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=249-1122144-5091822&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '249-1122144-5091822' ),
    order_date      ( '31 August 2023' ),
    order_item_name ( 'Surge Protector 3M 4 AC Outlets/2 Type C Ports/4 USB Ports Power Strip Power Board 4.2A 3000W Surge Protection' ),
    order_price     ( 'AU$43.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-31' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71BCnGuTuBL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'LESAAD' ),
    model_name        ( 'WD-16 8-Pack' ),
    EquipmentFeature::UNIVERSAL_AC_ADAPER,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B09B5J3X4M' ),
    listing_name  ( 'LESAAD (Pack of 8) Travel Adapter with Universal 2/3pin Input & I-Type Output for Travelling to AU, for International use (UK/US to AU)' ),
    item_price    ( 'AU$22.22' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B09B5J3X4M' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=249-1122144-5091822&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '249-1122144-5091822' ),
    order_date      ( '31 August 2023' ),
    order_item_name ( 'LESAAD (Pack of 8) Travel Adapter with Universal 2/3pin Input & I-Type Output for Travelling to AU, for International use (UK/US to AU)' ),
    order_price     ( 'AU$22.22' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-26' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/51BqtNKjzrL._SY1600_.jpg' ),
  equipment_item(
    manufacturer_name ( 'CLISPEED' ),
    model_name        ( '11-Piece' ),
    EquipmentFeature::SCREWDRIVER_SET,
    EquipmentFeature::TORX_SCREWDRIVER_T7,
    EquipmentFeature::TORX_SCREWDRIVER_T8,
    EquipmentFeature::TORX_SCREWDRIVER_T10,
    EquipmentFeature::TORX_SCREWDRIVER_T15,
    EquipmentFeature::TORX_SCREWDRIVER_T20,
    EquipmentFeature::TORX_SCREWDRIVER_T25,
    EquipmentFeature::TORX_SCREWDRIVER_T27,
    EquipmentFeature::TORX_SCREWDRIVER_T30,
    EquipmentFeature::TORX_SCREWDRIVER_T40,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B095YBVBB9' ),
    listing_name  ( 'CLISPEED Electric Screw Driver Head Screwdriver Bit Set, 11Pcs S2 Steel Tamper Proof Bit with 1/4 Inch Hex & 3 Inch Length- Magnetic- T40 Head Screw D' ),
    item_price    ( 'AU$19.90' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B095YBVBB9' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=249-6676139-4134250&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '249-6676139-4134250' ),
    order_date      ( '26 August 2023' ),
    order_item_name ( 'CLISPEED Electric Screw Driver Head Screwdriver Bit Set, 11Pcs S2 Steel Tamper Proof Bit with 1/4 Inch Hex & 3 Inch Length- Magnetic- T40 Head Screw D' ),
    order_price     ( 'AU$19.90' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-26' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71i1ENng-nL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'HORUSDY' ),
    model_name        ( '12-Piece Magnetic Torx' ),
    EquipmentFeature::SCREWDRIVER_SET,
    EquipmentFeature::TORX_SCREWDRIVER_T6,
    EquipmentFeature::TORX_SCREWDRIVER_T7,
    EquipmentFeature::TORX_SCREWDRIVER_T8,
    EquipmentFeature::TORX_SCREWDRIVER_T9,
    EquipmentFeature::TORX_SCREWDRIVER_T10,
    EquipmentFeature::TORX_SCREWDRIVER_T15,
    EquipmentFeature::TORX_SCREWDRIVER_T20,
    EquipmentFeature::TORX_SCREWDRIVER_T25,
    EquipmentFeature::TORX_SCREWDRIVER_T27,
    EquipmentFeature::TORX_SCREWDRIVER_T30,
    EquipmentFeature::TORX_SCREWDRIVER_T40,
    EquipmentFeature::DEMAGNETIZER,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B083SBVLSX' ),
    listing_name  ( 'HORUSDY 12-Piece Magnetic Torx Screwdrivers Set, S2 Steel T5 - T40 Torx Star Screwdrivers with Demagnetizer and Storage Pouch' ),
    item_price    ( 'AU$27.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B083SBVLSX' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=249-0898240-8157454&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '249-0898240-8157454' ),
    order_date      ( '26 August 2023' ),
    order_item_name ( 'HORUSDY 12-Piece Magnetic Torx Screwdrivers Set, S2 Steel T5 - T40 Torx Star Screwdrivers with Demagnetizer and Storage Pouch' ),
    order_price     ( 'AU$27.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-19' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/712Nzwtl9wL._SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'KETAKY Plus' ),
    model_name        ( 'Multi Charger Cable 2-In 4-Out USB-A USB-C USB-Micro Lightning' ),
    EquipmentFeature::USB_POWER_CABLE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B0BX371YXH' ),
    listing_name  ( 'USB C Multi Charger Cable 4 in 2 Fast Charging 3M/10Ft [Apple MFi Certified] USB A/USB C to Micro USB+Type C+2 Lightning, Universal Charger Cable for iPhone/Android(Type C Not for i pad & iPhone15)' ),
    item_price    ( 'AU$19.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B0BX371YXH' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=249-1961476-5254255&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '249-1961476-5254255' ),
    order_date      ( '19 August 2023' ),
    order_item_name ( 'USB C Multi Charger Cable 4 in 2 Fast Charging 3M/10Ft [Apple MFi Certified] USB A/USB C to Micro USB+Type C+2 Lightning, Universal Charger Cable for iPhone/Android(Type C Not for i pad & iPhone15)' ),
    order_price     ( 'AU$19.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-19' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/31-AA07%2BjEL._SY1600_.jpg' ),
  equipment_item(
    manufacturer_name ( 'CANARY' ),
    model_name        ( 'DC-190F' ),
    EquipmentFeature::BOX_CUTTER,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B075FP3JVP' ),
    listing_name  ( 'CANARY Corrugated Cardboard Cutter Dan Chan, Safety Box Cutter Knife [Non-Stick Fluorine Coating Blade], Made in JAPAN, Yellow (DC-190F-1)' ),
    item_price    ( 'AU$13.80' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B075FP3JVP' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=249-2519603-9994229&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '249-2519603-9994229' ),
    order_date      ( '19 August 2023' ),
    order_item_name ( 'CANARY Corrugated Cardboard Cutter Dan Chan [Non-Sticking Fluorine Coating], Yellow (DC-190F-1) (2 pcs)' ),
    order_options   ( '2 pcs' ),
    order_price     ( 'AU$13.80' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-17' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71Z5tW1jfKS._AC_SL1346_.jpg' ),
  equipment_item(
    manufacturer_name ( 'HORUSDY' ),
    model_name        ( '120-Piece' ),
    EquipmentFeature::PEGBOARD_HOOK_SET,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B0819G7QKH' ),
    listing_name  ( 'HORUSDY 120-Piece PegBoard Hooks Set, Peg Board Assortment 12 Different Types of Hooks for Garage Organizer Bins Shop Display Hanging' ),
    item_price    ( 'AU$29.69' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B0819G7QKH' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=249-3969626-9459027&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '249-3969626-9459027' ),
    order_date      ( '17 August 2023' ),
    order_item_name ( 'HORUSDY 120-Piece PegBoard Hooks Set, Peg Board Assortment 12 Different Types of Hooks for Garage Organizer Bins Shop Display Hanging' ),
    order_price     ( 'AU$25.49' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-16' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/81-biNYnovL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'DFsucces' ),
    model_name        ( '250-Piece' ),
    EquipmentFeature::SEWING_PINS,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B09SFXFPY4' ),
    listing_name  ( 'Sewing Pins for Fabric, Glass Ball Multicolored Head Pins,Straight Quilting Pins Long 1.5inch,for Quilting, Fabric, Silk, DIY,Dressmaker & Decoration(250pcs,with Case)' ),
    item_price    ( 'AU$8.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B09SFXFPY4' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=249-6790350-5899814&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '249-6790350-5899814' ),
    order_date      ( '16 August 2023' ),
    order_item_name ( 'Sewing Pins for Fabric, Glass Ball Multicolored Head Pins,Straight Quilting Pins Long 1.5inch,for Quilting, Fabric, Silk, DIY,Dressmaker & Decoration(250pcs,with Case)' ),
    order_price     ( 'AU$8.90' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-16' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71BMPC1rGBL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Phinus' ),
    model_name        ( '1000-Piece Flat Head' ),
    EquipmentFeature::SEWING_PINS,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B08FWZNCWJ' ),
    listing_name  ( '1000PCS Fine Straight Pins, Durable Stainless Steel Dressmaker For Sewing with Plastic Boxes, Flat Head, Satin Pins for Jewelry Making, Sewing Crafts' ),
    item_price    ( 'AU$7.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B08FWZNCWJ' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=249-6790350-5899814&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '249-6790350-5899814' ),
    order_date      ( '16 August 2023' ),
    order_item_name ( '1000PCS Fine Straight Pins, Durable Stainless Steel Dressmaker For Sewing with Plastic Boxes, Flat Head, Satin Pins for Jewelry Making, Sewing Crafts' ),
    order_price     ( 'AU$8.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-02' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71QdIeLSHjL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'SABRENT' ),
    model_name        ( 'USB Type-C Tool-Free Enclosure M.2 PCIe NVMe and SATA SSD' ),
    EquipmentFeature::USB_DRIVE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B08RVC6F9Y' ),
    listing_name  ( 'SABRENT USB 3.2 Type-C Tool-Free Enclosure for M.2 PCIe NVMe and SATA SSDs (EC-SNVE)' ),
    item_price    ( 'AU$39.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B08RVC6F9Y' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=249-4364683-6934232&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '249-4364683-6934232' ),
    order_date      ( '2 August 2023' ),
    order_item_name ( 'SABRENT USB 3.2 Type-C Tool-Free Enclosure for M.2 PCIe NVMe and SATA SSDs (EC-SNVE)' ),
    order_price     ( 'AU$39.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-07-19' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71r3VoULzIL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'TREE.NB' ),
    model_name        ( 'LW-045-231-195-002 19.5V 2.31A' ),
    EquipmentFeature::AC_POWER_ADAPTER,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B085Y3PYZ6' ),
    listing_name  ( '19.5V 2.31A AC Adapter Charger for HP Split 13 X2;HP Stream 11 13 14 Series;Pavilion x360 x2 11 11t 13 15;Elitebook Folio 1040 G1;P/N 721092-001 PA-1450-56HA Power Cord' ),
    item_price    ( 'AU$19.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B085Y3PYZ6' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=503-2133862-8030239&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '503-2133862-8030239' ),
    order_date      ( '19 July 2023' ),
    order_item_name ( '19.5V 2.31A AC Adapter Charger for HP Split 13 X2;HP Stream 11 13 14 Series;Pavilion x360 x2 11 11t 13 15;Elitebook Folio 1040 G1;P/N 721092-001 PA-1450-56HA Power Cord' ),
    order_price     ( 'AU$21.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-07-19' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61zedGqz4RL._SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'BOMEI PACK' ),
    model_name        ( '3-Roll Black' ),
    EquipmentFeature::GAFFER_TAPE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B0BGMS1P5Q' ),
    listing_name  ( 'BOMEI PACK Heavy Duty Black Duct Tape, Multi-Use Easy Tear Gaffer Waterproof Cloth Tape for Repairing, Maintenance and Industrial Use, 1.88 Inch x 32.8 Yards Per Roll, 7.5mil Thick,3 Rolls' ),
    item_options  ( 'Colour Name: Black' ),
    item_price    ( 'AU$25.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B0BGMS1P5Q' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=249-3560202-0763006&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '249-3560202-0763006' ),
    order_date      ( '19 July 2023' ),
    order_item_name ( 'BOMEI PACK Heavy Duty Black Duct Tape, Multi-Use Easy Tear Gaffer Waterproof Cloth Tape for Repairing, Maintenance and Industrial Use, 1.88 Inch x 32.8 Yards Per Roll, 7.5mil Thick,3 Rolls' ),
    order_options   ( 'Colour Name: Black' ),
    order_price     ( 'AU$25.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-07-19' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71h67wGvKNL._AC_SL1000_.jpg' ),
  equipment_item(
    manufacturer_name ( 'ELEGOO' ),
    model_name        ( '120-Piece Multicolored' ),
    EquipmentFeature::DUPONT_WIRE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B01EV70C78' ),
    listing_name  ( 'Elegoo 120pcs Multicolored Dupont Wire 40pin Male to Female, 40pin Male to Male, 40pin Female to Female Breadboard Jumper Wires Ribbon Cables Kit for arduino' ),
    item_price    ( 'AU$9.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B01EV70C78' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-4150102-9968607' ),
    order_id        ( '249-4150102-9968607' ),
    order_date      ( '19 July 2023' ),
    order_item_name ( 'Elegoo 120pcs Multicolored Dupont Wire 40pin Male to Female, 40pin Male to Male, 40pin Female to Female Breadboard Jumper Wires Ribbon Cables Kit for arduino' ),
    order_price     ( 'AU$9.96' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B01EV70C78' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=503-6408971-1771815' ),
    order_id        ( '503-6408971-1771815' ),
    order_date      ( '21 July 2021' ),
    order_item_name ( 'Elegoo 120pcs Multicolored Dupont Wire 40pin Male to Female, 40pin Male to Male, 40pin Female to Female Breadboard Jumper Wires Ribbon Cables Kit for arduino' ),
    order_price     ( 'AU$9.96' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-07-01' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/41Ww8-E7kpL._AC_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Radio Parts' ),
    model_name        ( 'TH1766' ),
    EquipmentFeature::BENCH_VISE,
    EquipmentFeature::VACUUM_VISE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B0789CBDV9' ),
    listing_name  ( 'VACUUM BENCH VICE WITH' ),
    item_price    ( 'AU$35.95' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B0789CBDV9' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=249-3490786-9173410&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '249-3490786-9173410' ),
    order_date      ( '1 July 2023' ),
    order_item_name ( 'VACUUM BENCH VICE WITH' ),
    order_price     ( 'AU$29.95' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-07-01' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/518YbrwU2+L._AC_SL1001_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Yakamoz' ),
    model_name        ( 'Universal Mini Suction Vise Clamp 360 Degrees' ),
    EquipmentFeature::BENCH_VISE,
    EquipmentFeature::VACUUM_VISE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B08L3NTSN9' ),
    listing_name  ( 'Yakamoz Universal Mini Suction Vise Clamp 360 Degrees Drill Press Vise Table Bench Vice with Suction Base for DIY Hobby Jewelry Watch Repairing Nuclear Sculpture Craft Carving Clip On Tool' ),
    item_price    ( 'AU$15.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B08L3NTSN9' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=249-3490786-9173410&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '249-3490786-9173410' ),
    order_date      ( '1 July 2023' ),
    order_item_name ( 'Yakamoz Universal Mini Suction Vise Clamp 360 Degrees Drill Press Vise Table Bench Vice with Suction Base for DIY Hobby Jewelry Watch Repairing Nuclear Sculpture Craft Carving Clip On Tool' ),
    order_price     ( 'AU$16.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-06-26' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71mP2Y3Mz3L._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'TP-Link' ),
    model_name        ( 'TL-SG108S 1Gbps 8-Port' ),
    EquipmentFeature::UNMANAGED_ETHERNET_SWITCH,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B07HKSXVN7' ),
    listing_name  ( 'TP-Link 8-Port 10/100/1000Mbps Desktop Unmanaged Switch, Steel housing, Desktop Wall-mounting Design, Green Technology (TL-SG108S) AU Version' ),
    item_price    ( 'AU$49.61' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B07HKSXVN7' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=249-3513022-2903021&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '249-3513022-2903021' ),
    order_date      ( '26 June 2023' ),
    order_item_name ( 'TP-Link 8-Port 10/100/1000Mbps Desktop Unmanaged Switch, Steel housing, Desktop Wall-mounting Design, Green Technology (TL-SG108S) AU Version' ),
    order_price     ( 'AU$49.61' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-06-22' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71WHnANkkpL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'NPW' ),
    model_name        ( 'LED Retro' ),
    EquipmentFeature::ON_AIR_SIGN,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B0BHL1S1TC' ),
    listing_name  ( 'NPW Gifts On Air Sign LED Retro Desk Light Board' ),
    item_price    ( 'AU$39.95' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B0BHL1S1TC' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=250-6389196-5301438&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '250-6389196-5301438' ),
    order_date      ( '22 June 2023' ),
    order_item_name ( 'NPW Gifts On Air Sign LED Retro Desk Light Board' ),
    order_price     ( 'AU$35.08' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-06-22' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/41bS6%2B--QaL._SX1600_.jpg' ),
  equipment_item(
    manufacturer_name ( 'ASUS' ),
    model_name        ( 'ROG Gladius II Ergonomic Optical Gaming' ),
    EquipmentFeature::USB_MOUSE,
  ),
  warning( 'I get the ROG Gladius II, not the newer ROG Gladius III' ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B06X158PYV' ),
    listing_name  ( 'ASUS ROG Gladius II Ergonomic Optical Gaming Mouse Optimized for FPS Gaming Featuring Easy-Swap Switch Socket, Aura Sync RGB Lighting and DPI Target T' ),
    item_price    ( 'AU$98.41' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B06X158PYV' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=250-2827618-8307035&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '250-2827618-8307035' ),
    order_date      ( '22 June 2023' ),
    order_item_name ( 'ASUS ROG Gladius II Ergonomic Optical Gaming Mouse Optimized for FPS Gaming Featuring Easy-Swap Switch Socket, Aura Sync RGB Lighting and DPI Target T' ),
    order_price     ( 'AU$98.41' ),
    order_quantity  ( 3 ),
  ),
);

equipment(
  equipment_date( '2023-06-05' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61-liuOVe0L._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Kensington' ),
    model_name        ( 'Orbit' ),
    EquipmentFeature::USB_TRACKBALL,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B002OOWB3O' ),
    listing_name  ( 'Kensington Orbit' ),
    item_price    ( 'AU$63.16' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B002OOWB3O' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=250-7745494-7270201&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '250-7745494-7270201' ),
    order_date      ( '5 June 2023' ),
    order_item_name ( 'Kensington Orbit' ),
    order_price     ( 'AU$53.86' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-06-01' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71gZoP6CyBL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'ESSELTE' ),
    model_name        ( '177039 Black 25-Sheet' ),
    EquipmentFeature::HOLE_PUNCH,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B002BB6AH8' ),
    listing_name  ( 'ESSELTE 177039 4 HOLE PUNCH,BLACK 25SHEET' ),
    item_price    ( 'AU$40.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B002BB6AH8' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=503-1447427-7792647&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '503-1447427-7792647' ),
    order_date      ( '1 June 2023' ),
    order_item_name ( 'ESSELTE 177039 4 HOLE PUNCH,BLACK 25SHEET' ),
    order_price     ( 'AU$40.00' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-02-17' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/31vTxgrfAkL._AC_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Yakamoz' ),
    model_name        ( '1mm to 15mm' ),
    EquipmentFeature::TAPER_GAUGE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B08GC4ZNWL' ),
    listing_name  ( 'Yakamoz Taper Gage 1/32-5/8 Inch 1-15mm manganese steel Gap Hole Taper Welding Gauge Test Ulnar Inch & Metric' ),
    item_price    ( 'AU$8.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B08GC4ZNWL' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=250-9301378-1299806&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '250-9301378-1299806' ),
    order_date      ( '17 February 2023' ),
    order_item_name ( 'Yakamoz Taper Gage 1/32-5/8 Inch 1-15mm manganese steel Gap Hole Taper Welding Gauge Test Ulnar Inch & Metric' ),
    order_price     ( 'AU$6.49' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-02-15' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/51k5LSKF+LL._AC_SL1000_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Disenkelubo' ),
    model_name        ( '30kg 1g' ),
    EquipmentFeature::ELECTRONIC_SCALE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B087YXMJYS' ),
    listing_name  ( 'Disenkelubo 30kg 1g Digital Kitchen Scales, Food Scales LCD Display Tare Function Electronic Cooking Scale Appliance for Home' ),
    item_price    ( 'AU$79.49' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B087YXMJYS' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=250-6822133-6395003&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '250-6822133-6395003' ),
    order_date      ( '15 February 2023' ),
    order_item_name ( 'Disenkelubo 30kg 1g Digital Kitchen Scales, Food Scales LCD Display Tare Function Electronic Cooking Scale Appliance for Home' ),
    order_price     ( 'AU$76.49' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-01-26' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61v35EuN3ZL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'KFD' ),
    model_name        ( '12V 5A' ),
    EquipmentFeature::AC_POWER_ADAPTER,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B0B6PJGCZN' ),
    listing_name  ( 'KFD 12V 5A AC Adapter for YONGNUO YN600L Series YN300III YN168 YN216 YN1410 YN300Air YN160III YN360 YN308 YN300AIR LED601 YN608 5500K Pro LED Camera Video Light YUO905 FJ-SW20171205000D Power Supply' ),
    item_price    ( 'AU$26.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B0B6PJGCZN' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=250-2764668-4430254&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '250-2764668-4430254' ),
    order_date      ( '26 January 2023' ),
    order_item_name ( 'KFD 12V 5A AC Adapter for YONGNUO YN600L Series YN300III YN168 YN216 YN1410 YN300Air YN160III YN360 YN308 YN300AIR LED601 YN608 5500K Pro LED Camera Video Light YUO905 FJ-SW20171205000D Power Supply' ),
    order_price     ( 'AU$26.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-01-26' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/51SGLb+LdlL._AC_SL1000_.jpg' ),
  equipment_item(
    manufacturer_name ( 'COMBRITE' ),
    model_name        ( 'M40' ),
    EquipmentFeature::USB_MOUSE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B08V9DZ1M5' ),
    listing_name  ( 'COMBRITE M40 USB Wired Optical Mouse with Comfort Rubber Scroll Wheel & Red LED-Black' ),
    item_options  ( 'Style Name: M40' ),
    item_price    ( 'AU$27.29' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B08V9DZ1M5' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=250-4309744-2701469&ref=ppx_yo2ov_dt_b_fed_order_details' ),
    order_id        ( '250-4309744-2701469' ),
    order_date      ( '26 January 2023' ),
    order_item_name ( 'COMBRITE M40 USB Wired Optical Mouse with Comfort Rubber Scroll Wheel & Red LED-Black' ),
    order_options   ( 'Style Name: M40' ),
    order_price     ( 'AU$20.53' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-01-26' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/51jttJrVpeL._AC_SL1024_.jpg' ),
  equipment_item(
    manufacturer_name ( 'freneci' ),
    model_name        ( 'Mechanical Gaming Keyboard with 87-Keys RGB Backlit' ),
    EquipmentFeature::USB_KEYBOARD,
    EquipmentFeature::MECHANICAL_KEYBOARD,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B08N1KJHS3' ),
    listing_name  ( 'freneci Mechanical Gaming Keyboard with USB 87 Keys RGB Backlit for' ),
    item_price    ( 'AU$37.19' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B08N1KJHS3' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=503-1409681-5543026' ),
    order_id        ( '503-1409681-5543026' ),
    order_date      ( '28 June 2021' ),
    order_item_name ( 'freneci Mechanical Gaming Keyboard with USB 87 Keys RGB Backlit for' ),
    order_price     ( 'AU$28.99' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B08N1KJHS3' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=250-3166992-2575001' ),
    order_id        ( '250-3166992-2575001' ),
    order_date      ( '26 January 2023' ),
    order_item_name ( 'freneci Mechanical Gaming Keyboard with USB 87 Keys RGB Backlit for' ),
    order_price     ( 'AU$37.19' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-01-25' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/410mNSAbUdL._AC_SL1280_.jpg' ),
  equipment_item(
    manufacturer_name ( 'ACCO Brands' ),
    model_name        ( 'ESSELTE 45790  30-Litre Black' ),
    EquipmentFeature::BIN,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B075ZY5W9F' ),
    listing_name  ( 'Esselte SWS Plastic Waste Bin, Black, 30 litres' ),
    item_price    ( 'AU$31.30' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B075ZY5W9F' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=250-5127108-6530246' ),
    order_id        ( '250-5127108-6530246' ),
    order_date      ( '25 January 2023' ),
    order_item_name ( 'Esselte SWS Plastic Waste Bin, Black, 30 litres' ),
    order_price     ( 'AU$35.68' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B075ZY5W9F' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=250-6975791-4913400' ),
    order_id        ( '250-6975791-4913400' ),
    order_date      ( '29 November 2022' ),
    order_item_name ( 'Esselte SWS Plastic Waste Bin, Black, 30 litres' ),
    order_price     ( 'AU$35.68' ),
    order_quantity  ( 2 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B075ZY5W9F' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=250-2941175-1522238' ),
    order_id        ( '250-2941175-1522238' ),
    order_date      ( '21 June 2022' ),
    order_item_name ( 'Esselte SWS Plastic Waste Bin, Black, 30 litres' ),
    order_price     ( 'AU$27.69' ),
    order_quantity  ( 2 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B075ZY5W9F' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=250-1503523-0850252' ),
    order_id        ( '250-1503523-0850252' ),
    order_date      ( '10 June 2022' ),
    order_item_name ( 'Esselte SWS Plastic Waste Bin, Black, 30 litres' ),
    order_price     ( 'AU$27.69' ),
    order_quantity  ( 2 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B075ZY5W9F' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-7536552-7249458' ),
    order_id        ( '249-7536552-7249458' ),
    order_date      ( '27 March 2022' ),
    order_item_name ( 'Esselte SWS Plastic Waste Bin, Black, 30 litres' ),
    order_price     ( 'AU$22.25' ),
    order_quantity  ( 2 ),
  ),
);

equipment(
  equipment_date( '2022-06-21' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71m3UaZ0TOL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'OXO' ),
    model_name        ( 'Good Grips Deep Clean' ),
    EquipmentFeature::BRUSH_SET,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B003M8GMS6' ),
    listing_name  ( 'OXO Good Grips Deep Clean Brush Set' ),
    item_price    ( 'AU$8.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B003M8GMS6' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-6287094-6962228' ),
    order_id        ( '249-6287094-6962228' ),
    order_date      ( '14 August 2021' ),
    order_item_name ( 'OXO Good Grips Deep Clean Brush Set' ),
    order_price     ( 'AU$9.50' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B003M8GMS6' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-0374763-7061415' ),
    order_id        ( '249-0374763-7061415' ),
    order_date      ( '10 September 2021' ),
    order_item_name ( 'OXO Good Grips Deep Clean Brush Set' ),
    order_price     ( 'AU$12.57' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B003M8GMS6' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=250-9542106-0495013' ),
    order_id        ( '250-9542106-0495013' ),
    order_date      ( '17 June 2022' ),
    order_item_name ( 'OXO Good Grips Deep Clean Brush Set' ),
    order_price     ( 'AU$10.77' ),
    order_quantity  ( 2 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B003M8GMS6' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=250-2941175-1522238' ),
    order_id        ( '250-2941175-1522238' ),
    order_date      ( '21 June 2022' ),
    order_item_name ( 'OXO Good Grips Deep Clean Brush Set' ),
    order_price     ( 'AU$10.77' ),
    order_quantity  ( 2 ),
  ),
);

equipment(
  equipment_date( '2022-07-16' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61BNlQ96ajL._AC_SL1460_.jpg' ),
  equipment_item(
    manufacturer_name ( 'OXO' ),
    model_name        ( 'All-Purpose' ),
    EquipmentFeature::SCRUB_BRUSH,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B00004OCL3' ),
    listing_name  ( 'OXO All-Purpose Scrub Brush, Black/White, One Size' ),
    item_price    ( 'AU$9.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B00004OCL3' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=250-3317902-8890210' ),
    order_id        ( '250-3317902-8890210' ),
    order_date      ( '16 July 2022' ),
    order_item_name ( 'OXO All-Purpose Scrub Brush, Black/White, One Size' ),
    order_price     ( 'AU$9.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2022-07-16' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/714-ay7uH+L._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'OXO' ),
    model_name        ( 'Good Grips Soap Dispensing' ),
    EquipmentFeature::DISH_BRUSH,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B000CC91GK' ),
    listing_name  ( 'OXO Good Grips Soap Dispensing Dish Brush, None, Black/White, 1067529, 15x10x5cm' ),
    item_price    ( 'AU$23.35' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B000CC91GK' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=250-3317902-8890210' ),
    order_id        ( '250-3317902-8890210' ),
    order_date      ( '16 July 2022' ),
    order_item_name ( 'OXO Good Grips Soap Dispensing Dish Brush, None, Black/White, 1067529, 15x10x5cm' ),
    order_price     ( 'AU$14.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2022-07-16' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61m1xt4ue+L._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'OXO' ),
    model_name        ( 'Soap Dispensing' ),
    EquipmentFeature::DISH_BRUSH_REFILLS,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B01F42RYP2' ),
    listing_name  ( 'OXO Soap Dispensing Dish Brush Refills, 2 Piece, White' ),
    item_price    ( 'AU$11.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B01F42RYP2' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=250-3317902-8890210' ),
    order_id        ( '250-3317902-8890210' ),
    order_date      ( '16 July 2022' ),
    order_item_name ( 'OXO Soap Dispensing Dish Brush Refills, 2 Piece, White' ),
    order_price     ( 'AU$11.00' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-06-07' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61vJ2fd0b0L._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Furinno' ),
    model_name        ( 'Jaya Simple Home 3-Shelf Black' ),
    EquipmentFeature::BOOKCASE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/dp/B01BWZWDZG' ),
    listing_name  ( '(3-Tier, Black) - FURINNO Jaya Simple Home 3-Shelf Bookcase, Black' ),
    item_price    ( 'AU$301.44' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/dp/B01BWZWDZG' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=250-2548293-0859004' ),
    order_id        ( '250-2548293-0859004' ),
    order_date      ( '7 June 2023' ),
    order_item_name ( '(3-Tier, Black) - FURINNO Jaya Simple Home 3-Shelf Bookcase, Black' ),
    order_price     ( 'AU$282.62' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-06-08' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/81vmbJa-AHL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'IRIS USA' ),
    model_name        ( 'Modular Storage 3-Tier Organizer' ),
    EquipmentFeature::BOOKCASE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/dp/B074CTSKPC' ),
    listing_name  ( 'IRIS USA Modular Storage 3-Tier Organizer, Off White' ),
    item_price    ( 'AU$117.20' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/dp/B074CTSKPC' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=250-9700335-6767842' ),
    order_id        ( '250-9700335-6767842' ),
    order_date      ( '8 June 2023' ),
    order_item_name ( 'IRIS USA Modular Storage 3-Tier Organizer, Off White' ),
    order_price     ( 'AU$111.28' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2023-08-25' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/61yroV1GZaL._AC_SL1200_.jpg' ),
  equipment_item(
    manufacturer_name ( 'SAYEEC' ),
    model_name        ( 'Collapsible File Organizer 4-Compartment Plastic Divider' ),
    EquipmentFeature::MAGAZINE_HOLDER,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B08C2MHK3B' ),
    listing_name  ( 'SAYEEC Collapsible File Organizer Magazine Holder Desktop 4 Compartment File Holder Plastic Divider Sorter Adjustable Stand Office Document Organizer Storage Bins Home School File Box Grey' ),
    item_options  ( 'Colour Name: Grey' ),
    item_price    ( 'AU$26.49' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B08C2MHK3B' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-8349399-7015019' ),
    order_id        ( '249-8349399-7015019' ),
    order_date      ( '25 August 2023' ),
    order_item_name ( 'SAYEEC Collapsible File Organizer Magazine Holder Desktop 4 Compartment File Holder Plastic Divider Sorter Adjustable Stand Office Document Organizer Storage Bins Home School File Box Grey' ),
    order_options   ( 'Colour Name: Grey' ),
    order_price     ( 'AU$25.49' ),
    order_quantity  ( 2 ),
  ),
);

equipment(
  equipment_date( '2024-08-07' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/91D5NKsFCaL._SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'ElectroCookie' ),
    model_name        ( 'Multicolor PCB Prototype Board 9-Pack Plus 3-Mini' ),
    EquipmentFeature::SOLDERABLE_BREADBOARD,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/dp/B07ZYPCXZ3' ),
    listing_name  ( 'ElectroCookie Solderable Breadboard PCB Board for Electronics Projects Compatible for DIY Arduino Soldering Projects, Gold-Plated (9 Pack + 3 Mini, Multicolor Pack)' ),
    item_options  ( 'Colour: 4.Multicolor 9Pack+3Mini' ),
    item_price    ( 'AU$26.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/dp/B07ZYPCXZ3' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-0398058-0295061' ),
    order_id        ( '249-0398058-0295061' ),
    order_date      ( '29 July 2024' ),
    order_item_name ( 'ElectroCookie Solderable Breadboard PCB Board for Electronics Projects Compatible for DIY Arduino Soldering Projects, Gold-Plated (9 Pack + 3 Mini, Multicolor Pack)' ),
    order_options   ( 'Colour: 4.Multicolor 9Pack+3Mini' ),
    order_price     ( 'AU$26.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-08-07' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/81QweK3ohaS._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'ElectroCookie' ),
    model_name        ( 'Mini PCB Prototype Board 50-Pack' ),
    EquipmentFeature::SOLDERABLE_BREADBOARD,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/dp/B093VWBH4Q' ),
    listing_name  ( 'ElectroCookie Mini PCB Prototype Board Solderable Breadboard for DIY Electronics, Compatible for Mini Arduino Soldering Projects, Gold-Plated (50 Pack, Black)' ),
    item_price    ( 'AU$73.50' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/dp/B093VWBH4Q' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-4911570-5943833' ),
    order_id        ( '249-4911570-5943833' ),
    order_date      ( '29 July 2024' ),
    order_item_name ( 'ElectroCookie Mini PCB Prototype Board Solderable Breadboard for DIY Electronics, Compatible for Mini Arduino Soldering Projects, Gold-Plated (50 Pack, Black)' ),
    order_price     ( 'AU$73.50' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-08-07' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/A19ytwyNc8L._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'ElectroCookie' ),
    model_name        ( 'Large PCB Prototype Board 6 Multi-Pack' ),
    EquipmentFeature::SOLDERABLE_BREADBOARD,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/dp/B07ZV9JQY2' ),
    listing_name  ( 'ElectroCookie Large PCB Prototype Board Kit Solderable Breadboards for DIY Arduino and Soldering Projects, Gold-Plated (6 Multi-Pack, Blue)' ),
    item_price    ( 'AU$27.99' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/dp/B07ZV9JQY2' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=dp_iou_view_order_details?ie=UTF8&orderID=249-7696204-1668642' ),
    order_id        ( '249-7696204-1668642' ),
    order_date      ( '29 July 2024' ),
    order_item_name ( 'ElectroCookie Large PCB Prototype Board Kit Solderable Breadboards for DIY Arduino and Soldering Projects, Gold-Plated (6 Multi-Pack, Blue)' ),
    order_price     ( 'AU$27.99' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-08-11' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/Saa02ac86a6ad44da8a4a1162e3d28d5db/DC-520-Digital-Camera-Recorder-16-Mega-Pixel-16X-Zoom-HD-Mini-Digital-Video-Camera-for.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( '16MP' ),
    EquipmentFeature::USB_CAMERA,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005012584974.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DC1GPur' ),
    listing_name  ( 'DC-520 Digital Camera Recorder 16 Mega Pixel 16X Zoom HD Mini Digital Video Camera for Teens Kids for Beginner' ),
    item_options  ( 'Color: Type A' ),
    item_price    ( 'AU$30.36' ),
  ),
);

equipment(
  equipment_date( '2024-08-23' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/TmsAAOSwSxJjB1JZ/s-l1600.jpg' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.fluke.com/en-us/product/electrical-testing/digital-multimeters/fluke-17b-plus' ),
      link_text       ( 'Fluke 17B+ Digital Multimeter' ),
    ),
    manufacturer_name ( 'Fluke' ),
    model_name        ( '17B+' ),
    EquipmentFeature::DIGITAL_MULTIMETER,
    EquipmentFeature::HANDHELD_MULTIMETER,
    EquipmentFeature::VOLTMETER,
    EquipmentFeature::AMMETER,
    EquipmentFeature::OHMMETER,
    EquipmentFeature::CAPACITANCE_METER,
    EquipmentFeature::FREQUENCY_COUNTER,
    EquipmentFeature::CONTINUITY_TESTER,
    EquipmentFeature::DIODE_TESTER,
    EquipmentFeature::THERMOMETER,
    EquipmentAttribute::HAND_TOOL,
    EquipmentAttribute::CORDLESS,
    EquipmentConnectivity::BANANA_PLUG,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/276199258799' ),
    affiliate_url ( 'https://ebay.us/t6ouCF' ),
    listing_name  ( 'Fluke 17B+ Capacity Digital Multimeter Auto Range AC DC voltage current Ohm' ),
    item_price    ( 'AU$222.98' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/276199258799' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=13-11951-27361&purchaseOrderId=13-1195-127360' ),
    order_id        ( '13-1195-127360' ),
    order_date      ( '2024-08-18' ),
    order_item_name ( 'Fluke 17B+ Capacity Digital Multimeter Auto Range AC DC voltage current Ohm' ),
    order_price     ( 'AU$222.98' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-08-18' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/S06f38f7aeb134811ae041fe60136de4df/Plush-Microfiber-Tire-Rim-Wheel-Hub-Cleaning-Brush-Car-Beauty-Car-Wash-Brush-Maintenance-Tools-Cleaning.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'Microfiber' ),
    EquipmentFeature::BRUSH,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006930891953.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DcxQ6Lh' ),
    listing_name  ( 'Plush Microfiber Tire Rim Wheel Hub Cleaning Brush Car Beauty Car Wash Brush Maintenance Tools Cleaning Supplies' ),
    item_price    ( 'AU$3.73' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006930891953.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.349.20cf1802YNcrMG&orderId=8191905872733938' ),
    order_id        ( '8191905872733938' ),
    order_date      ( 'Aug 18, 2024' ),
    order_item_name ( 'Plush Microfiber Tire Rim Wheel Hub Cleaning Brush Car Beauty Car Wash Brush Maintenance Tools Cleaning Supplies' ),
    order_options   ( 'BLUE' ),
    order_price     ( 'AU$2.44' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$0.34' ),
  ),
);

equipment(
  equipment_date( '2024-08-18' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/H520a0a5bc1d24d209837da78596ca9d9a/Universal-1-PCS-Magnetic-Ring-Alloy-Magnetic-Ring-Screwdriver-Bits-Anti-corrosion-Strong-Magnetizer-Drill-Bit.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'Universal Magnetic Ring' ),
    EquipmentFeature::DRILL_BIT,
    EquipmentFeature::MAGNETIC_PICKUP_TOOL,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005959896803.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DmCigIR' ),
    listing_name  ( 'Universal 1 PCS Magnetic Ring Alloy Magnetic Ring Screwdriver Bits Anti-corrosion Strong Magnetizer Drill Bit Magnetic Ring' ),
    item_price    ( 'AU$3.66' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005959896803.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.325.20cf1802YNcrMG&orderId=8191905872813938' ),
    order_id        ( '8191905872813938' ),
    order_date      ( 'Aug 18, 2024' ),
    order_item_name ( 'Universal 1 PCS Magnetic Ring Alloy Magnetic Ring Screwdriver Bits Anti-corrosion Strong Magnetizer Drill Bit Magnetic Ring' ),
    order_options   ( '3pcs Colorful' ),
    order_price     ( 'AU$3.66' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$0.51' ),
  ),
);

equipment(
  equipment_date( '2024-08-18' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/S6a0f4c72ec7b43559cd518c8bbd21ca0K/ANENG-BT189-Button-Cell-Battery-Tester-9V-N-D-C-AA-AAA-Universal-Household-LCD-Display.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'ANENG' ),
    model_name        ( 'BT189' ),
    EquipmentFeature::BATTERY_TESTER,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006842756757.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DlDfZMR' ),
    listing_name  ( 'ANENG BT189 Button Cell Battery Tester 9V N D C AA AAA Universal Household LCD Display Battery Tester Power Bank Detectors Tools' ),
    item_price    ( 'AU$5.09' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006842756757.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.307.20cf1802YNcrMG&orderId=8191905872753938' ),
    order_id        ( '8191905872753938' ),
    order_date      ( 'Aug 18, 2024' ),
    order_item_name ( 'ANENG BT189 Button Cell Battery Tester 9V N D C AA AAA Universal Household LCD Display Battery Tester Power Bank Detectors Tools' ),
    order_price     ( 'AU$3.05' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$0.48' ),
  ),
);

equipment(
  equipment_date( '2024-08-18' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/S7f0010e22cfa4750b0187d153cb58cadS/2pcs-set-2-8mm-Carpenter-Mechanical-Pencil-with-Sharpener-for-Woodworking-Construction-Long-Head-Carpenter-Pencil.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'MROOFUL' ),
    model_name        ( 'Carpenter' ),
    EquipmentFeature::MECHANICAL_PENCIL,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006116146243.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DeMa6Sf' ),
    listing_name  ( '2pcs/set 2.8mm Carpenter Mechanical Pencil with Sharpener for Woodworking Construction Long Head Carpenter Pencil Stationery' ),
    item_price    ( 'AU$4.79' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006116146243.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.313.20cf1802YNcrMG&orderId=8191905872773938' ),
    order_id        ( '8191905872773938' ),
    order_date      ( 'Aug 18, 2024' ),
    order_item_name ( '2pcs/set 2.8mm Carpenter Mechanical Pencil with Sharpener for Woodworking Construction Long Head Carpenter Pencil Stationery' ),
    order_options   ( 'Black set-B' ),
    order_price     ( 'AU$4.27' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$0.45' ),
  ),
);

equipment(
  equipment_date( '2024-08-19' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/Sce7e55caef1a417c8f290d068e31cecfy/Heating-Table-MECHANIC-HT-20-Intelligent-Constant-Temperature-Double-Digital-Display-for-Repair-Mobile-Phone-PCB.jpg_.webp' ),
  equipment_item(
    manufacturer_link (
      link_href       ( 'https://www.mechanichk.com/mechanic-ht-20-intelligent-double-digital-constant-temperature-heating-table_p197004.html' ),
      link_text       ( 'Mechanic HT-20 Intelligent Double Digital Constant Temperature Heating Table' ),
    ),
    manufacturer_link (
      link_href       ( 'https://www.mechanichk.com/mechanic-ht-10-intelligent-double-digital-constant-temperature-heating-table_p197005.html' ),
      link_text       ( 'Mechanic HT-10 Intelligent Double Digital Constant Temperature Heating Table' ),
    ),
    manufacturer_name ( 'MECHANIC' ),
    model_name        ( 'HT-20' ),
    EquipmentFeature::HEATING_TABLE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005007325278153.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dd39jbt' ),
    listing_name  ( 'Heating Table MECHANIC HT-20 Intelligent Constant Temperature Double Digital Display for Repair Mobile Phone PCB Heat Platform' ),
    item_price    ( 'AU$65.78' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005007325278153.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.274.77671802IGZlRK&orderId=8192646639073938' ),
    order_id        ( '8192646639073938' ),
    order_date      ( 'Aug 19, 2024' ),
    order_item_name ( 'Heating Table MECHANIC HT-20 Intelligent Constant Temperature Double Digital Display for Repair Mobile Phone PCB Heat Platform' ),
    order_price     ( 'AU$73.53' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$27.40' ),
    order_tax       ( 'AU$10.09' ),
  ),
);

equipment(
  equipment_date( '2024-08-23' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/71GcZX-eZyL._AC_SL1500_.jpg' ),
  equipment_item(
    manufacturer_name ( 'Rossler' ),
    model_name        ( 'Soho 4x' ),
    EquipmentFeature::DRAWER,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/gp/product/B003TKMJRA' ),
    listing_name  ( 'Rossler Soho 4 Drawer Filing Storage Box - Black' ),
    item_price    ( 'AU$78.98' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/gp/product/B003TKMJRA' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o05?ie=UTF8&orderID=249-4439942-1696611' ),
    order_id        ( '249-4439942-1696611' ),
    order_date      ( '23 August 2024' ),
    order_item_name ( 'Rossler Soho 4 Drawer Filing Storage Box - Black' ),
    order_price     ( 'AU$91.89' ),
    order_quantity  ( 5 ),
  ),
);

equipment(
  equipment_date( '2024-08-19' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/H03c6421de59e48e2ab0002578684d90bM/Lead-free-Tin-Silver-Copper-SAC305-Solder-Sheet-Solder-Tape-Solder-Foil-Sn96-5Ag3-0Cu0-5.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'Lead-free Tin Silver Copper SAC305' ),
    EquipmentFeature::SOLDER_TAPE,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005002537366918.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dddl1x9' ),
    listing_name  ( 'Lead-free Tin Silver Copper SAC305 Solder Sheet Solder Tape Solder Foil Sn96.5Ag3.0Cu0.5 Solder Tape' ),
    item_price    ( 'AU$100.69' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005002537366918.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.289.20cf1802YNcrMG&orderId=8192646639033938' ),
    order_id        ( '8192646639033938' ),
    order_date      ( 'Aug 19, 2024' ),
    order_item_name ( 'Lead-free Tin Silver Copper SAC305 Solder Sheet Solder Tape Solder Foil Sn96.5Ag3.0Cu0.5 Solder Tape' ),
    order_price     ( 'AU$102.16' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$10.22' ),
  ),
);

equipment(
  equipment_date( '2024-08-20' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/Sfe00008365c4442d9431634b37745024L/Wowstick-wowpad-Magnetic-Screwpad-Screw-Postion-Memory-Plate-Mat-For-kit-1FS-Electric-1P-1F-Plus.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Wowstick' ),
    model_name        ( 'Wowpad' ),
    EquipmentFeature::MAGNETIC_SCREWPAD,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005007413309302.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DdXEEKR' ),
    listing_name  ( 'Wowstick wowpad Magnetic Screwpad Screw Postion Memory Plate Mat For kit 1FS Electric 1P+ 1F+ Plus magnetic sticker' ),
    item_price    ( 'AU$4.25' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005007413309302.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.46.20cf1802YNcrMG&orderId=8191958993153938' ),
    order_id        ( '8191958993153938' ),
    order_date      ( 'Aug 20, 2024' ),
    order_item_name ( 'Wowstick wowpad Magnetic Screwpad Screw Postion Memory Plate Mat For kit 1FS Electric 1P+ 1F+ Plus magnetic sticker' ),
    order_options   ( 'Color: 1 pc' ),
    order_price     ( 'AU$2.72' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$0.39' ),
  ),
);

equipment(
  equipment_date( '2024-08-20' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/H2ddfab3ac88749c2ba1fee0f5b7f76c6e/15Pcs-Set-Sandpaper-400-600-3000-800-1000-1200-1500-2000-2500-Grit-Sand-Paper-Water.jpeg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( '15 Pcs' ),
    EquipmentFeature::SANDPAPER,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005246126191.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_De8m8iJ' ),
    listing_name  ( '15Pcs/Set Sandpaper 400 600 3000 800 1000 1200 1500 2000 2500 Grit Sand Paper Water/Dry Sanding Paper Abrasive Tools' ),
    item_price    ( 'AU$2.59' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005246126191.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.107.20cf1802YNcrMG&orderId=8192257241713938' ),
    order_id        ( '8192257241713938' ),
    order_date      ( 'Aug 20, 2024' ),
    order_item_name ( '15Pcs/Set Sandpaper 400 600 3000 800 1000 1200 1500 2000 2500 Grit Sand Paper Water/Dry Sanding Paper Abrasive Tools' ),
    order_price     ( 'AU$2.57' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$0.29' ),
  ),
);

equipment(
  equipment_date( '2024-08-20' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/Sc127a71c4e1e412880a4a2d4ecd75d045/SX-DT3-Data-Cable-Detection-Board-Type-C-Micro-USB-C-Cable-Tester-Short-Circuit-On.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'XIASONGXIN LIGHT' ),
    model_name        ( 'DT3' ),
    EquipmentFeature::USB_CABLE_TESTER,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005007484057368.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DcyY1jV' ),
    listing_name  ( 'SX DT3 Data Cable Detection Board Type-C Micro USB C Cable Tester Short Circuit On Off Switching Diagnose Tool for iOS Android' ),
    item_price    ( 'AU$3.10' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005007484057368.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.131.20cf1802YNcrMG&orderId=8192257241773938' ),
    order_id        ( '8192257241773938' ),
    order_date      ( 'Aug 20, 2024' ),
    order_item_name ( 'SX DT3 Data Cable Detection Board Type-C Micro USB C Cable Tester Short Circuit On Off Switching Diagnose Tool for iOS Android' ),
    order_price     ( 'AU$2.26' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$0.28' ),
  ),
);

equipment(
  equipment_date( '2024-08-20' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/A8cc79ed84b4c4ff8857242428c1a5530L/1-Pack-Static-IC-Puller-Efficient-Mechanical-Keyboard-Switch-Remover-Tool-with-Anti-Static-Protection-Easy.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    EquipmentFeature::IC_PULLER,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005007317258522.html' ),
    listing_name  ( '1 Pack Static IC Puller - Efficient Mechanical Keyboard Switch Remover Tool with Anti-Static Protection - Easy to Use, Durable,' ),
    item_price    ( 'AU$2.79' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005007317258522.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.149.20cf1802YNcrMG&orderId=8192257241693938' ),
    order_id        ( '8192257241693938' ),
    order_date      ( 'Aug 20, 2024' ),
    order_item_name ( '1 Pack Static IC Puller - Efficient Mechanical Keyboard Switch Remover Tool with Anti-Static Protection - Easy to Use, Durable,' ),
    order_price     ( 'AU$2.26' ),
    order_quantity  ( 2 ),
    order_tax       ( 'AU$0.51' ),
  ),
);

equipment(
  equipment_date( '2024-08-20' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/S4f2e380b48d64d0bad244ea4b40506ea7/Stainless-Steel-String-Ruler-String-Action-Gauge-Ruler-for-Guitar-Bass-Silver.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'Guitar String' ),
    EquipmentFeature::RULER,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006801533515.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DkgoKIB' ),
    listing_name  ( 'Stainless Steel String Ruler String Action Gauge Ruler for Guitar Bass Silver' ),
    item_price    ( 'AU$4.13' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006801533515.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.253.20cf1802YNcrMG&orderId=8191951797753938' ),
    order_id        ( '8191951797753938' ),
    order_date      ( 'Aug 20, 2024' ),
    order_item_name ( 'Stainless Steel String Ruler String Action Gauge Ruler for Guitar Bass Silver' ),
    order_price     ( 'AU$2.72' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$0.37' ),
  ),
);

equipment(
  equipment_date( '2024-08-20' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/Sd952a0bf3bd5456ba8c2c0416d062de51/Macropad-Macro-Mechanical-Keyboard-RGB-Mini-Gaming-Custom-Programming-Knob-Keypads-Red-Switch-3-Keys-For.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'Macropad 3-Key' ),
    EquipmentFeature::MECHANICAL_KEYBOARD,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005855324321.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DF6vPuR' ),
    listing_name  ( 'Macropad Macro Mechanical Keyboard RGB Mini Gaming Custom Programming Knob Keypads Red Switch 3 Keys For Photoshop' ),
    item_price    ( 'AU$12.79' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005855324321.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.185.20cf1802YNcrMG&orderId=8191954755693938' ),
    order_id        ( '8191954755693938' ),
    order_date      ( 'Aug 20, 2024' ),
    order_item_name ( 'Macropad Macro Mechanical Keyboard RGB Mini Gaming Custom Programming Knob Keypads Red Switch 3 Keys For Photoshop' ),
    order_price     ( 'AU$8.19' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$1.51' ),
  ),
);

equipment(
  equipment_date( '2024-08-20' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/S8afad955b3ad428f9dfd5d952108338cl/8-Key-Macro-Programmable-Fully-Hot-Swappable-Mechanical-Switch-4-Color-RGB-Light-Gaming-Mini-Keyboard.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'Macro Programmable 8-Key' ),
    EquipmentFeature::MECHANICAL_KEYBOARD,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005983374802.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DCWqguT' ),
    listing_name  ( '8 Key Macro Programmable Fully Hot Swappable Mechanical Switch 4 Color RGB Light Gaming Mini Keyboard' ),
    item_price    ( 'AU$12.69' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005983374802.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.167.2f1c1802PaQAUI&orderId=8191954755603938' ),
    order_id        ( '8191954755603938' ),
    order_date      ( 'Aug 20, 2024' ),
    order_item_name ( '8 Key Macro Programmable Fully Hot Swappable Mechanical Switch 4 Color RGB Light Gaming Mini Keyboard' ),
    order_price     ( 'AU$8.19' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$1.24' ),
  ),
);

equipment(
  equipment_date( '2024-08-20' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/S069f7ced6be94bf3a4ada54c5af012dff/5in1-CO2-Meter-Digital-Multifunctional-Temperature-Humidity-Tester-Carbon-Dioxide-TVOC-HCHO-Detector-Air-Quality-Monitor.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( '5 in 1' ),
    EquipmentFeature::AIR_QUALITY_METER,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005007034734246.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DEJPWwr' ),
    listing_name  ( '5in1 CO2 Meter Digital Multifunctional Temperature Humidity Tester Carbon Dioxide TVOC HCHO Detector Air Quality Monitor' ),
    item_price    ( 'AU$14.69' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005007034734246.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.58.20cf1802YNcrMG&orderId=8191958993233938' ),
    order_id        ( '8191958993233938' ),
    order_date      ( 'Aug 20, 2024' ),
    order_item_name ( '5in1 CO2 Meter Digital Multifunctional Temperature Humidity Tester Carbon Dioxide TVOC HCHO Detector Air Quality Monitor' ),
    order_options   ( 'WHITE' ),
    order_price     ( 'AU$12.29' ),
    order_quantity  ( 1 ),
    order_tax       ( 'AU$1.44' ),
  ),
);

equipment(
  equipment_date( '2024-08-21' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/Se1cc39393da540a5b694ebe5e77e2b04G/9-In-1-Air-Quality-Monitor-CO2-Meter-CO-TVOC-HCHO-PM2-5-PM1-0-PM10.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( '9 in 1' ),
    EquipmentFeature::AIR_QUALITY_METER,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005600277496.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DDCsQcT' ),
    listing_name  ( '9 In 1 Air Quality Monitor CO2 Meter CO TVOC HCHO PM2.5 PM1.0 PM10 Temperature And Humidity Measurement Carbon Dioxide Detector' ),
    item_price    ( 'AU$37.05' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005600277496.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.22.20cf1802YNcrMG&orderId=8192048118923938' ),
    order_id        ( '8192048118923938' ),
    order_date      ( 'Aug 21, 2024' ),
    order_item_name ( '9 In 1 Air Quality Monitor CO2 Meter CO TVOC HCHO PM2.5 PM1.0 PM10 Temperature And Humidity Measurement Carbon Dioxide Detector' ),
    order_options   ( 'Color: 9 in 1' ),
    order_price     ( 'AU$34.26' ),
    order_quantity  ( 1 ),
    order_shipping  ( 'AU$0.01' ),
    order_tax       ( 'AU$3.63' ),
  ),
);

equipment(
  equipment_date( '2024-09-05' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/Sa0afa3f4345f4d16bb95422f2d82e4d95/MECHANIC-Portable-Double-Single-Head-Glue-Removal-Brush-Mobile-Phone-Motherboard-CPU-IC-Pad-Cleaning-Polishing.png_.webp' ),
  equipment_item(
    manufacturer_name ( 'MECHANIC' ),
    EquipmentFeature::HARD_BRUSH,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005006176413673.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_DFmNebZ' ),
    listing_name  ( 'MECHANIC Portable Double/Single Head Glue Removal Brush Mobile Phone Motherboard CPU IC Pad Cleaning Polishing Tool' ),
    item_price    ( 'AU$5.01' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006176413673.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.1.20cf1802YNcrMG&orderId=8192997661953938' ),
    order_id        ( '8192997661953938' ),
    order_date      ( 'Sep 5, 2024' ),
    order_item_name ( 'MECHANIC Portable Double/Single Head Glue Removal Brush Mobile Phone Motherboard CPU IC Pad Cleaning Polishing Tool' ),
    order_options   ( 'Bristle Brush' ),
    order_price     ( 'AU$4.89' ),
    order_quantity  ( 3 ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005006176413673.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.1.20cf1802YNcrMG&orderId=8192997661953938' ),
    order_id        ( '8192997661953938' ),
    order_date      ( 'Sep 5, 2024' ),
    order_item_name ( 'MECHANIC Portable Double/Single Head Glue Removal Brush Mobile Phone Motherboard CPU IC Pad Cleaning Polishing Tool' ),
    order_options   ( 'Steel Brush' ),
    order_price     ( 'AU$4.82' ),
    order_quantity  ( 3 ),
  ),
);

equipment(
  equipment_date( '2024-09-07' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/0lIAAOSwcy1gRqzO/s-l1600.webp' ),
  equipment_item(
    manufacturer_name ( 'Eversure' ),
    model_name        ( 'PB-10-HT3 Black 10-Way' ),
    EquipmentFeature::POWER_BOARD,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/163304553325' ),
    affiliate_url ( 'https://ebay.us/bBKwiI' ),
    listing_name  ( 'PB-10-HT3/Black 10 Way Power Board With USB and Coax Network Protection' ),
    item_price    ( 'AU$91.48' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/163304553325' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=08-12040-69039&purchaseOrderId=08-1204-069038#/' ),
    order_id        ( '08-1204-069038' ),
    order_date      ( '7 Sep 2024' ),
    order_item_name ( 'PB-10-HT3/Black 10 Way Power Board With USB and Coax Network Protection' ),
    order_price     ( 'AU$91.48' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2022-01-17' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/B8oAAOSwtyVgeA6N/s-l960.webp' ),
  equipment_item(
    manufacturer_name ( 'PowerShield' ),
    model_name        ( 'Defender 1600' ),
    EquipmentFeature::UPS,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/184767576877' ),
    affiliate_url ( 'https://www.ebay.com.au/itm/184767576877?mkcid=1&mkrid=705-53470-19255-0&siteid=15&campid=5339019639&customid=&toolid=10001&mkevt=1' ),
    listing_name  ( 'PowerShield Defender 1600VA / 960W Line Interactive UPS with AVR, Australian Out' ),
    item_price    ( 'AU$398.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/184767576877' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=17-08140-38004&purchaseOrderId=17-0814-038003#/' ),
    order_id        ( '17-0814-038003' ),
    order_date      ( '17 Jan 2022' ),
    order_item_name ( 'PowerShield Defender 1600VA / 960W Line Interactive UPS with AVR, Australian Out' ),
    order_price     ( 'AU$339.00' ),
    order_quantity  ( 2 ),
  ),
);

equipment(
  equipment_date( '2022-01-07' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/ko4AAOSwzHNgeA1i/s-l960.webp' ),
  equipment_item(
    manufacturer_name ( 'PowerShield' ),
    model_name        ( 'Defender 1200' ),
    EquipmentFeature::UPS,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/174733130638' ),
    affiliate_url ( 'https://www.ebay.com.au/itm/174733130638?mkcid=1&mkrid=705-53470-19255-0&siteid=15&campid=5339019639&customid=&toolid=10001&mkevt=1' ),
    listing_name  ( 'PowerShield Defender 1200VA / 720W Line Interactive UPS with AVR, Australian Out' ),
    item_price    ( 'AU$345.00' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/224660097934' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=19-08098-39700&purchaseOrderId=19-0809-839699#/' ),
    order_id        ( '19-0809-839699' ),
    order_date      ( '7 Jan 2022' ),
    order_item_name ( 'PowerShield Defender 1200VA / 720W Line Interactive UPS with AVR, Australian Out' ),
    order_price     ( 'AU$266.60' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/172295377946' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=20-05430-89980&purchaseOrderId=200000543089979#/' ),
    order_id        ( '20-05430-89980' ),
    order_date      ( '21 Jul 2020' ),
    order_item_name ( 'PowerShield Defender 1200VA 720W USB Comm 3x Surge UPS D1200VA' ),
    order_price     ( 'AU$249.00' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2021-08-21' ),
  equipment_icon( 'https://i.ebayimg.com/images/g/--cAAOSwmdtf-wy5/s-l1600.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'AU 240V' ),
    EquipmentFeature::WATT_METER,
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.ebay.com.au/itm/154497395056' ),
    affiliate_url ( 'https://www.ebay.com.au/itm/154497395056?mkcid=1&mkrid=705-53470-19255-0&siteid=15&campid=5339019639&customid=&toolid=10001&mkevt=1' ),
    listing_name  ( 'AU 240V Power Watt Meter Energy Monitor Consumption Electricity Usage Equipment' ),
    item_price    ( 'AU$18.95' ),
  ),
  purchase(
    equipment_url   ( 'https://www.ebay.com.au/itm/154497395056' ),
    order_url       ( 'https://order.ebay.com.au/ord/show?orderId=07-07499-89350&purchaseOrderId=07-0749-989349#/' ),
    order_id        ( '07-0749-989349' ),
    order_date      ( '21 Aug 2021' ),
    order_item_name ( 'AU 240V Power Watt Meter Energy Monitor Consumption Electricity Usage Equipment' ),
    order_price     ( 'AU$18.95' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-09-30' ),
  equipment_icon( 'https://m.media-amazon.com/images/I/8105ELveYZL._AC_SX679_.jpg' ),
  equipment_item(
    manufacturer_name ( 'MoFiz' ),
    model_name        ( 'Mens Camo Polo' ),
    EquipmentFeature::SHIRT
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.amazon.com.au/dp/B0CQK3YQ7N' ),
    listing_name  ( 'MoFiz Mens Camo Polo Golf Shirts Lightweight Dry Fit Pique Short Sleeve Collared Hiking T-Shirts Dry fit Activewear' ),
    item_options  ( 'Size: XX-Large; Colour: Green Camo' ),
    item_price    ( '$42.70' ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/dp/B0CQK3YQ7N' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details?ie=UTF8&orderID=249-7810773-2899844' ),
    order_id        ( '249-7810773-2899844' ),
    order_date      ( '22 September 2024' ),
    order_item_name ( 'MoFiz Mens Camo Polo Golf Shirts Lightweight Dry Fit Pique Short Sleeve Collared Hiking T-Shirts Dry fit Activewear, Green Camo, XX-Large' ),
    order_options   ( 'Green Camo, XX-Large' ),
    order_price     ( '$51.06' ),
    order_quantity  ( 1 ),
  ),
  purchase(
    equipment_url   ( 'https://www.amazon.com.au/dp/B0CQK3YQ7N' ),
    order_url       ( 'https://www.amazon.com.au/gp/your-account/order-details/ref=ppx_yo_dt_b_order_details_o00?ie=UTF8&orderID=249-7929651-7027827' ),
    order_id        ( '249-7929651-7027827' ),
    order_date      ( '14 October 2024' ),
    order_item_name ( 'MoFiz Mens Camo Polo Golf Shirts Lightweight Dry Fit Pique Short Sleeve Collared Hiking T-Shirts Dry fit Activewear, Green Camo, XX-Large' ),
    order_options   ( 'Green Camo, XX-Large' ),
    order_price     ( '$43.25' ),
    order_quantity  ( 1 ),
  ),
);

equipment(
  equipment_date( '2024-09-27' ),
  equipment_icon( 'https://ae-pic-a1.aliexpress-media.com/kf/S75590664751648038bcacaed1ad8976aS/Resistance-Box-0-9999-9-Adjustable-Lab-Resistor-Substitution-Box-Precision-1W-Variable-Knob-Switch-Boxes.jpg_.webp' ),
  equipment_item(
    manufacturer_name ( 'Yum Cha' ),
    model_name        ( 'J15026-2 6-Knob' ),
    EquipmentFeature::RESISTOR_BOX
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( 'https://www.aliexpress.com/item/1005005830434408.html' ),
    affiliate_url ( 'https://s.click.aliexpress.com/e/_Dnp3SEN' ),
    listing_name  ( 'Resistance Box 0-9999.9Ω Adjustable Lab Resistor Substitution Box Precision 1W Variable Knob Switch Boxes' ),
    item_price    ( 'AU$17.39' ),
  ),
  purchase(
    equipment_url   ( 'https://www.aliexpress.com/item/1005005830434408.html' ),
    order_url       ( 'https://www.aliexpress.com/p/order/detail.html?spm=a2g0o.order_list.order_list_main.1.1a231802Z3NMT0&orderId=8194019591923938' ),
    order_id        ( '8194019591923938' ),
    order_date      ( 'Sep 27, 2024' ),
    order_item_name ( 'Resistance Box 0-9999.9Ω Adjustable Lab Resistor Substitution Box Precision 1W Variable Knob Switch Boxes' ),
    order_options   ( 'black' ),
    order_price     ( 'AU$17.29' ),
    order_quantity  ( 2 ),
    order_shipping  ( 'AU$21.90' ),
    order_tax       ( 'AU$5.51' ),
  ),
);

/*

equipment(
  equipment_date( '2024-08-02' ),
  equipment_icon( '' ),
  equipment_item(
    manufacturer_name ( '' ),
    model_name        ( '' ),
    EquipmentFeature::
  ),
  sixsigma_url  ( '' ),
  affiliate_link(
    equipment_url ( '' ),
    affiliate_url ( '' ),
    listing_name  ( '' ),
    item_options  ( '' ),
    item_price    ( '' ),
  ),
  purchase(
    equipment_url   ( '' ),
    order_url       ( '' ),
    order_id        ( '' ),
    order_date      ( '' ),
    order_item_name ( '' ),
    order_options   ( '' ),
    order_price     ( '' ),
    order_quantity  ( 1 ),
    order_tax       ( '' ),
  ),
);


equipment(
  equipment_date( '2024-??-??' ),
  equipment_icon( '' ),
  equipment_item(
    manufacturer_name ( '' ),
    model_name        ( '' ),
    equipment_type    ( '' ),
    category          ( '' ),
    manufacturer_link (
      link_href       ( '' ),
      link_text       ( '' ),
    ),
  ),
  sixsigma_url  ( '' ),
  search_url    ( '' ),
  affiliate_link(
    equipment_url ( '' ),
    affiliate_url ( '' ),
    listing_name  ( '' ),
    item_options  ( '' ),
    item_price    ( '' ),
    item_shipping ( '' ),
  ),
  search_url    ( '' ),
  affiliate_link(
    equipment_url ( '' ),
    affiliate_url ( '' ),
    listing_name  ( '' ),
    item_options  ( '' ),
    item_price    ( '' ),
    item_shipping ( '' ),
  ),
  purchase(
    equipment_url   ( '' ),
    order_url       ( '' ),
    order_id        ( '' ),
    order_date      ( '' ),
    order_item_name ( '' ),
    order_options   ( '' ),
    order_price     ( '' ),
    order_quantity  ( 1 ),
    order_shipping  ( '' ),
    order_gst       ( '' ),
    order_discount  ( '' ),
  ),
);

  web_link(
    link_href   ( '' ),
    link_text   ( '' ),
  ),

*/
