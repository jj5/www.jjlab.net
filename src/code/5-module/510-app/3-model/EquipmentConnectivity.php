<?php

enum EquipmentConnectivity : string {

  case BANANA_PLUG = 'banana-plug';

  case BLUETOOTH = 'bluetooth';

  case BNC = 'BNC';

  // 2024-08-04 jj5 - these are the RCA connectors
  //
  case COMPOSITE_VIDEO_RCA = 'composite-video-RCA';

  case DISPLAY_PORT = 'DisplayPort';

  case ETHERNET = 'ethernet';

  case HDMI = 'HDMI';

  // 2024-08-04 jj5 - NOTE: RF usually from an aerial...
  //
  case RF = 'RF';

  case SD_CARD = 'SD-card';

  case USB = 'USB';

  case VGA = 'VGA';

  case WIFI = 'wifi';

  case XH2_54 = 'XH2.54';

}

