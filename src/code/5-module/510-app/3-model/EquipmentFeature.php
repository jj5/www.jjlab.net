<?php

enum EquipmentFeature : string {

  //
  // 2024-08-06 jj5 - STORAGE
  //

  case STORAGE = 'storage';

    case DRAWERS = 'drawers';

    case SHELVES = 'shelves';

      case BOOKCASE = 'bookcase';

    case RACK = 'rack';

    case CABINET = 'cabinet';

    case BOX = 'box';

    case BAG = 'bag';

    case CASE = 'case';

    case CONTAINER = 'container';

    case ORGANIZER = 'organizer';

      case MAGAZINE_HOLDER = 'magazine-holder';

    case TRAY = 'tray';

      case STAINLESS_STEEL_TRAY = 'stainless-steel-tray';

      case MAGNETIC_TRAY = 'magnetic-tray';

    case BIN = 'bin';

    case BUCKET = 'bucket';

    case BASKET = 'basket';

    case HOOK = 'hook';

    case HANGER = 'hanger';

    case RAIL = 'rail';

    case PEGBOARD = 'pegboard';

    case DESKTOP = 'desktop';

    case BENCH = 'bench';

  //
  // 2024-08-04 jj5 - FEATURE
  //

  case FEATURE = 'feature';

    case LCD = 'LCD';

    case REMOTE_CONTROL = 'remote-control';

    case XBOX = 'Xbox';

    case STUDIO = 'studio';

    case COSTUME = 'costume';

  //
  // 2024-08-04 jj5 - ADAPTER
  //

  case ADAPTER = 'adapter';

    case ANGLE_SCREW_ADAPTER = 'angle-screw-adapter';

    case XBOX_TO_HDMI_ADAPTER = 'Xbox-to-HDMI-adapter';

    case RCA_TO_HDMI_ADAPTER = 'RCA-to-HDMI-adapter';

    case HDMI_TO_USB_ADAPTER = 'HDMI-to-USB-adapter';

    case SPLITTER = 'splitter';

      case HDMI_SPLITTER = 'HDMI-splitter';

    case UNIVERSAL_AC_ADAPER = 'universal-AC-adapter';

  //
  // 2024-08-11 jj5 - CABLE
  //

  case CABLE = 'cable';

  //
  // 2024-08-04 jj5 - MISC_TOOL
  //


  case REAMER = 'reamer';

  case PUNCH = 'punch';

    case HOLE_PUNCH = 'hole-punch';

  case CAN_OPENER = 'can-opener';

  case BOTTLE_OPENER = 'bottle-opener';

  case WIRE_BENDER = 'wire-bender';

  case WIRE_CRIMPER = 'wire-crimper';

  case FISH_SCALER = 'fish-scaler';

  case HOOK_DISGORGER = 'hook-disgorger';

  case NAIL_CLEANER = 'nail-cleaner';

  case CHISEL = 'chisel';

  case TOOTHPICK = 'toothpick';

  case PIN = 'pin';

    case PINS = 'pins';

      case SEWING_PINS = 'sewing-pins';

  case KEY_RING = 'key-ring';

  case CORKSCREW = 'corkscrew';

  case DEMAGNETIZER = 'demagnetizer';

  //
  // 2024-08-06 jj5 - PEGBOARD_HOOK
  //

  case PEGBOARD_HOOK = 'pegboard-hook';

    case PEGBOARD_HOOK_SET = 'pegboard-hook-set';

  //
  // 2024-08-04 jj5 - AWL
  //

  case AWL = 'awl';

    case SEWING_AWL = 'sewing-awl';

  //
  // 2024-08-04 jj5 - SAW
  //

  case SAW = 'saw';

    case WOOD_SAW = 'wood-saw';

    case METAL_SAW = 'metal-saw';

  //
  // 2024-08-04 jj5 - FILE
  //

  case FILE = 'file';

    case NAIL_FILE = 'nail-file';

    case METAL_FILE = 'metal-file';



  //
  // 2024-08-04 jj5 - ABRASIVE
  //

  case ABRASIVE = 'abrasive';

    case SANDING_STICK = 'sanding-stick';

  //
  // 2024-08-04 jj5 - LIGHT
  //

  case LIGHT = 'light';

    case LED_LIGHT = 'LED-light';

      case USB_LED_LIGHT = 'USB-LED-light';

    case TORCH = 'torch';

      case LED_TORCH = 'LED-torch';

      case UV_LAMP = 'UV-lamp';

        case UV_CURING_LIGHT = 'UV-curing-light';

  //
  // OSCILLOSCOPE
  //

  case OSCILLOSCOPE = 'oscilloscope';

    case MIXED_SIGNAL_OSCILLOSCOPE = 'mixed-signal-oscilloscope';

    case DIGITAL_STORAGE_OSCILLOSCOPE = 'digital-storage-oscilloscope';

  //
  // ANALYZER
  //

  case SPECTRUM_ANALYZER = 'spectrum-analyzer';

  case LOGIC_ANALYZER = 'logic-analyzer';

    case USB_LOGIC_ANALYZER = 'USB-logic-analyzer';

  case PROTOCOL_ANALYZER = 'protocol-analyzer';

  //
  // GENERATOR
  //

  case SIGNAL_GENERATOR = 'signal-generator';

    case WAVEFORM_GENERATOR = 'waveform-generator';

      case FUNCTION_GENERATOR = 'function-generator';

  //
  // METER
  //

  case METER = 'meter';

    case DIGITAL_METER = 'digital-meter';

    case VOLTMETER = 'voltmeter';

      case VOLTMETER_AC = 'AC-voltmeter';

      case VOLTMETER_DC = 'DC-voltmeter';

    case AMMETER = 'ammeter';

      case AMMETER_AC = 'AC-ammeter';

      case AMMETER_DC = 'DC-ammeter';

    case OHMMETER = 'ohmmeter';

    case CAPACITANCE_METER = 'capacitance-meter';

    case FREQUENCY_COUNTER = 'frequency-counter';

    case CONTINUITY_TESTER = 'continuity-tester';

    case DIODE_TESTER = 'diode-tester';

    case TRANSISTOR_TESTER = 'transistor-tester';

    case THERMOMETER = 'thermometer';

      case DIGITAL_THERMOMETER = 'digital-thermometer';

    case COUNTER_TOTALIZER = 'counter-totalizer';

    case COMPONENT_TESTER = 'component-tester';

    case SMD_TESTER = 'SMD-tester';

    case LCR_METER = 'LCR-meter';

    case ESR_METER = 'ESR-meter';

    case MULTIMETER = 'multimeter';

      case HANDHELD_MULTIMETER = 'handheld-multimeter';

      case BENCH_MULTIMETER = 'bench-multimeter';

      case OSCILLOSCOPE_SIGNAL_GENERATOR_COMPONENT_TESTER = 'oscilloscope,-signal-generator,-component-tester';

  //
  // 2024-08-04 jj5 - PROBE
  //

  case PROBE = 'probe';

    case LOGIC_PROBE = 'logic-probe';

    case PROBE_TWEEZERS = 'probe-tweezers';

  //
  // 2024-08-06 jj5 - HEADPHONES
  //

  case HEADPHONES = 'headphones';

  //
  // 2024-08-06 jj5 - DRIVE
  //

  case DRIVE = 'drive';

    case USB_DRIVE = 'USB-drive';

    case SSD_DRIVE = 'SSD-drive';

      case USB_SSD_DRIVE = 'USB-SSD-drive';

    case HDD_DRIVE = 'HDD-drive';

      case USB_HDD_DRIVE = 'USB-HDD-drive';

    case CDROM_DRIVE = 'CDROM-drive';

      case USB_CDROM_DRIVE = 'USB-CDROM-drive';

    case DVD_DRIVE = 'DVD-drive';

      case USB_DVD_DRIVE = 'USB-DVD-drive';

    case BLU_RAY_DRIVE = 'Blu-ray-drive';

      case USB_BLU_RAY_DRIVE = 'USB-Blu-ray-drive';

    case FLOPPY_DRIVE = 'floppy-drive';

      case USB_FLOPPY_DRIVE = 'USB-floppy-drive';

  //
  // 2024-08-04 jj5 - SWITCH
  //

  case SWITCH = 'switch';

    case ETHERNET_SWITCH = 'ethernet-switch';

      case UNMANAGED_ETHERNET_SWITCH = 'unmanaged-ethernet-switch';

    case USB_SWITCH = 'USB-switch';

    case HDMI_SWITCH = 'HDMI-switch';

    case DISPLAY_PORT_SWITCH = 'DisplayPort-switch';

    case KVM = 'KVM';

      case USB_KVM = 'USB-KVM';

        case HDMI_KVM = 'HDMI-KVM';

        case DISPLAY_PORT_KVM = 'DisplayPort-KVM';

  //
  // 2024-08-06 jj5 - HUB
  //

  case HUB = 'hub';

    case USB_HUB = 'USB-hub';

    case ETHERNET_HUB = 'ethernet-hub';

  //
  // 2024-08-06 jj5 - POINTING_DEVICE
  //

  case POINTING_DEVICE = 'pointing-device';

    case MOUSE = 'mouse';

      case USB_MOUSE = 'USB-mouse';

    case TRACKBALL = 'trackball';

      case USB_TRACKBALL = 'USB-trackball';

  //
  // 2024-08-04 jj5 - KEYBOARD
  //

  case KEYBOARD = 'keyboard';

    case MECHANICAL_KEYBOARD = 'mechanical-keyboard';

    case USB_KEYBOARD = 'USB-keyboard';


  //
  // 2024-08-04 jj5 - DRAWER
  //

  case FURNITURE = 'furniture';

    case DRAWER = 'drawer';

      case KEYBOARD_DRAWER = 'keyboard-drawer';

    case STEP_LADDER = 'step-ladder';

  //
  // 2024-08-04 jj5 - CAMERA
  //

  case CAMERA = 'camera';

    case VIDEO_CAMERA = 'video-camera';

      case THERMAL_IMAGER = 'thermal-imager';

      case USB_CAMERA = 'USB-camera';

  //
  // 2024-08-04 jj5 - CHUMBY
  //

  case CHUMBY = 'chumby';

  //
  // 2024-08-04 jj5 - ROTARY_TOOL
  //

  case ROTARY_TOOL = 'rotary-tool';

  //
  // 2024-08-04 jj5 - ROTARY_TOOL_ACCESSORY
  //

  case ROTARY_TOOL_ACCESSORY = 'rotary-tool-accessory';

    case ROTARY_TOOL_ACCESSORY_SET = 'rotary-tool-accessory-set';

    case ROTARY_DRILL_CHUCK = 'rotary-drill-chuck';

    // 2024-08-04 jj5 - SEE: https://www.dremel.com/au/en/p/pivot-light-led00000
    case DREMEL_PIVOT_LIGHT = 'Dremel-pivot-light';

    // 2024-08-04 jj5 - SEE: https://www.dremel.com/us/en/p/421-2615000421
    case DREMEL_421_POLISHING_COMPOUND = 'Dremel-421-polishing-compound';

    case ROTARY_TOOL_BIT = 'rotary-tool-bit';

      case DRILL_BIT = 'drill-bit';

        case DRILL_BITS = 'drill-bits';

        case DRILL_BIT_2 = 'drill-bit-2';

        case DRILL_BIT_2_5 = 'drill-bit-2.5';

        case DRILL_BIT_3 = 'drill-bit-3';

        case DRILL_BIT_3_5 = 'drill-bit-3.5';

        case DRILL_BIT_4 = 'drill-bit-4';

        case DRILL_BIT_5 = 'drill-bit-5';

        case DRILL_BIT_5_5 = 'drill-bit-5.5';

        case DRILL_BIT_6 = 'drill-bit-6';

        case DRILL_BIT_7 = 'drill-bit-7';

        case DRILL_BIT_8 = 'drill-bit-8';

        case DRILL_BIT_10 = 'drill-bit-10';

        case WOOD_DRILL_BIT = 'wood-drill-bit';

          case WOOD_DRILL_BIT_2 = 'wood-drill-bit-2';

          case WOOD_DRILL_BIT_2_5 = 'wood-drill-bit-2.5';

          case WOOD_DRILL_BIT_3 = 'wood-drill-bit-3';

          case WOOD_DRILL_BIT_3_5 = 'wood-drill-bit-3.5';

          case WOOD_DRILL_BIT_4 = 'wood-drill-bit-4';

          case WOOD_DRILL_BIT_5 = 'wood-drill-bit-5';

          case WOOD_DRILL_BIT_5_5 = 'wood-drill-bit-5.5';

          case WOOD_DRILL_BIT_6 = 'wood-drill-bit-6';

          case WOOD_DRILL_BIT_7 = 'wood-drill-bit-7';

          case WOOD_DRILL_BIT_8 = 'wood-drill-bit-8';

          case WOOD_DRILL_BIT_10 = 'wood-drill-bit-10';

        case MASONRY_DRILL_BIT = 'masonry-drill-bit';

          case MASONRY_DRILL_BIT_2 = 'masonry-drill-bit-2';

          case MASONRY_DRILL_BIT_2_5 = 'masonry-drill-bit-2.5';

          case MASONRY_DRILL_BIT_3 = 'masonry-drill-bit-3';

          case MASONRY_DRILL_BIT_3_5 = 'masonry-drill-bit-3.5';

          case MASONRY_DRILL_BIT_4 = 'masonry-drill-bit-4';

          case MASONRY_DRILL_BIT_5 = 'masonry-drill-bit-5';

          case MASONRY_DRILL_BIT_5_5 = 'masonry-drill-bit-5.5';

          case MASONRY_DRILL_BIT_6 = 'masonry-drill-bit-6';

          case MASONRY_DRILL_BIT_7 = 'masonry-drill-bit-7';

          case MASONRY_DRILL_BIT_8 = 'masonry-drill-bit-8';

          case MASONRY_DRILL_BIT_10 = 'masonry-drill-bit-10';

        // 2024-08-06 jj5 - HSS = High Speed Steel

        case HSS_DRILL_BIT = 'HSS-drill-bit';

          case HSS_DRILL_BIT_2 = 'HSS-drill-bit-2';

          case HSS_DRILL_BIT_2_5 = 'HSS-drill-bit-2.5';

          case HSS_DRILL_BIT_3 = 'HSS-drill-bit-3';

          case HSS_DRILL_BIT_3_5 = 'HSS-drill-bit-3.5';

          case HSS_DRILL_BIT_4 = 'HSS-drill-bit-4';

          case HSS_DRILL_BIT_5 = 'HSS-drill-bit-5';

          case HSS_DRILL_BIT_5_5 = 'HSS-drill-bit-5.5';

          case HSS_DRILL_BIT_6 = 'HSS-drill-bit-6';

          case HSS_DRILL_BIT_7 = 'HSS-drill-bit-7';

          case HSS_DRILL_BIT_8 = 'HSS-drill-bit-8';

          case HSS_DRILL_BIT_10 = 'HSS-drill-bit-10';

        // 2024-08-04 jj5 - SEE: https://www.dremel.com/au/en/p/drill-bit-2615015032
        case DREMEL_150_DRILL_BIT = 'Dremel-150-drill-bit';

        case DRILL_EXTENSION = 'drill-extension';

          case DRILL_BIT_EXTENSION = 'drill-bit-extension';

        case DEBURRING_DRILL_BIT = 'deburring-drill-bit';

      case ROTARY_ENGRAVING_BIT = 'rotary-engraving-bit';

        // 2024-08-04 jj5 - SEE: https://www.dremel.com/us/en/p/107-26150107ae
        case DREMEL_107_ENGRAVING_BIT = 'Dremel-107-engraving-bit';

      case ROTARY_CARVING_BIT = 'rotary-carving-bit';

        // 2024-08-04 jj5 - SEE: https://www.dremel.com/us/en/p/191-2615000191
        case DREMEL_191_CARVING_BIT = 'Dremel-191-carving-bit';

      case ROTARY_CUTTING_ACCESSORY = 'rotary-cutting-accessory';

        case ROTARY_CUTTING_ACCESSORY_SET = 'rotary-cutting-accessory-set';

        case ROTARY_MILLING_CUTTER = 'rotary-milling-cutter';

        // 2024-08-04 jj5 - SEE: https://www.dremel.com/us/en/p/561-2615000561
        case DREMEL_561_MULTI_PURPOSE_CUTTING_BIT = 'Dremel-561-multi-purpose-cutting-bit';

        // 2024-08-04 jj5 - SEE: https://www.dremel.com/au/en/p/dremel-multipurpose-cutting-kit-26150565ac
        case DREMEL_565_MULTI_PURPOSE_CUTTING_KIT = 'Dremel-565-multi-purpose-cutting-kit';

        case ROTARY_CUTTING_DISC = 'rotary-cutting-disc';

          // 2024-08-04 jj5 - SEE: https://www.dremel.com/au/en/p/dremel-ez-lock-metal-cut-off-wheel-2615e456aj
          case DREMEL_EZ456_METAL_CUT_OFF_WHEEL = 'Dremel-EZ456-metal-cut-off-wheel';

          // 2024-08-04 jj5 - SEE: https://www.dremel.com/au/en/p/dremel-ez-lock-plastic-cut-off-wheel-2615e476ae
          case DREMEL_EZ476_PLASTIC_CUT_OFF_WHEEL = 'Dremel-EZ476-plastic-cut-off-wheel';

          // 2024-08-04 jj5 - SEE: https://www.dremel.com/au/en/p/dremel-ez-lock-thin-cut-off-wheel-2615e409ac
          case DREMEL_EZ409_THIN_CUT_OFF_WHEEL = 'Dremel-EZ409-thin-cut-off-wheel';

          case CARBIDE_CUTTING_WHEEL = 'carbide-cutting-wheel';

            // 2024-08-04 jj5 - SEE: https://www.dremel.com/au/en/p/dremel-ez-lock-carbide-cutting-wheel-2615e544aa
            case DREMEL_EZ544_CARBIDE_CUTTING_WHEEL = 'Dremel-EZ544-carbide-cutting-wheel';

          case DIAMOND_CUTTING_WHEEL = 'diamond-cutting-wheel';

            // 2024-08-04 jj5 - SEE: https://www.dremel.com/us/en/p/ez545-2615e545ad
            case DREMEL_EZ545_DIAMOND_CUTTING_WHEEL = 'Dremel-EZ545-diamond-cutting-wheel';

          case HSS_WOOD_CUTTING_SAW_BLADE_DISC = 'HSS-wood-cutting-saw-blade-disc';

          case RESIN_CUTTING_WHEEL = 'resin-cutting-wheel';

          case RED_RESIN_CUTTING_WHEEL = 'red-resin-cutting-wheel';

      case ROTARY_POLISHING_ACCESSORY = 'rotary-polishing-accessory';

        case ROTARY_POLISHING_WOOL_WHEEL = 'rotary-polishing-wool-wheel';

        case ROTARY_POLISHING_CLOTH_WHEEL = 'rotary-polishing-cloth-wheel';

          // 2024-08-04 jj5 - SEE: https://www.dremel.com/us/en/p/423e-2615e423ac
          case DREMEL_432E_CLOTH_POLISHING_WHEEL = 'Dremel-432E-cloth-polishing-wheel';

        case ROTARY_POLISHING_FELT_WHEEL = 'rotary-polishing-felt-wheel';

          // 2024-08-04 jj5 - SEE: https://www.dremel.com/us/en/p/414-2615000414
          case DREMEL_414_FELT_POLISHING_WHEEL = 'Dremel-414-felt-polishing-wheel';

          // 2024-08-04 jj5 - SEE: https://www.dremel.com/us/en/p/429-2615000429
          case DREMEL_429_FELT_POLISHING_WHEEL = 'Dremel-429-felt-polishing-wheel';

      case ROTARY_BRUSH_ACCESSORY = 'rotary-brush-accessory';

        case ROTARY_NYLON_BRUSH = 'rotary-nylon-brush';

          case ROTARY_ABRASIVE_BRUSH = 'rotary-abrasive-brush';

          case DREMEL_403_NYLON_BRUSH = 'Dremel-403-nylon-brush';

        case ROTARY_WIRE_BRUSH = 'rotary-wire-brush';

          // 2024-08-04 jj5 - SEE: https://www.dremel.com/us/en/p/428-02-26150428ab
          case DREMEL_428_CARBON_STEEL_BRUSH = 'Dremel-428-carbon-steel-brush';

      case ROTARY_GRINDING_ACCESSORY = 'rotary-grinding-accessory';

        case ROTARY_GRINDING_RUBBER = 'rotary-grinding-rubber';

        case ROTARY_GRINDING_BURR = 'rotary-grinding-burr';

        case ROTARY_GRINDING_STONE = 'rotary-grinding-stone';

        // 2024-08-04 jj5 - SEE: https://www.dremel.com/us/en/p/8193-2615008193
          case DREMEL_8193_ALUMINUM_OXIDE_GRINDING_STONE = 'Dremel-8193-aluminum-oxide-grinding-stone';

          // 2024-08-04 jj5 - SEE: https://www.dremel.com/us/en/p/84922-261584922c
          case DREMEL_84922_SILICON_CARBIDE_GRINDING_STONE = 'Dremel-84922-silicon-carbide-grinding-stone';

          // 2024-08-04 jj5 - SEE: https://www.dremel.com/us/en/p/932-2615000932
          case DREMEL_932_ALUMINUM_OXIDE_GRINDING_STONE = 'Dremel-932-aluminum-oxide-grinding-stone';

          case ROTARY_SHARPENING_STONE = 'rotary-sharpening-stone';

      case ROTARY_SANDING_ACCESSORY = 'rotary-sanding-accessory';

        case ROTARY_SANDING_DISC = 'rotary-sanding-disc';

          // 2024-08-04 jj5 - SEE: https://www.dremel.com/us/en/p/ez411sa-2615e411ad
          case DREMEL_EZ411_SANDING_DISC = 'Dremel-EZ411-sanding-disc';
          case DREMEL_EZ411SA_SANDING_DISC = 'Dremel-EZ411SA-sanding-disc';

          // 2024-08-04 jj5 - SEE: https://www.dremel.com/us/en/p/ez412sa-2615e412ac
          case DREMEL_EZ412_SANDING_DISC = 'Dremel-EZ412-sanding-disc';
          case DREMEL_EZ412SA_SANDING_DISC = 'Dremel-EZ412SA-sanding-disc';

          // 2024-08-04 jj5 - SEE: https://www.dremel.com/us/en/p/ez413sa-2615e413ac
          case DREMEL_EZ413_SANDING_DISC = 'Dremel-EZ413-sanding-disc';
          case DREMEL_EZ413SA_SANDING_DISC = 'Dremel-EZ413SA-sanding-disc';

        case ROTARY_SANDING_BAND = 'rotary-sanding-band';

          // 2024-08-04 jj5 - SEE: https://www.dremel.com/us/en/p/407-2615000407
          case DREMEL_407_60_GRIT_SANDING_BAND = 'Dremel-407-60-grit-sanding-band';

          // 2024-08-04 jj5 - SEE: https://www.dremel.com/us/en/p/408-2615000408
          case DREMEL_408_60_GRIT_SANDING_BAND = 'Dremel-408-60-grit-sanding-band';

          // 2024-08-04 jj5 - SEE: https://www.dremel.com/us/en/p/432-2615000432
          case DREMEL_432_120_GRIT_SANDING_BAND = 'Dremel-432-120-grit-sanding-band';

          // 2024-08-04 jj5 - SEE: https://www.dremel.com/us/en/p/445-26150445aa
          case DREMEL_445_240_GRIT_SANDING_BAND = 'Dremel-445-240-grit-sanding-band';

        case FINISHING_ABRASIVE_BUFF = 'finishing-abrasive-buff';

          // 2024-08-04 jj5 - SEE: https://www.dremel.com/au/en/p/dremel-ez-lock-abrasive-buffs-180-and-280-grit-2615e511aa
          case DREMEL_511E_FINISHING_ABRASIVE_BUFF = 'Dremel-511E-finishing-abrasive-buff';

          // 2024-08-04 jj5 - SEE: https://www.dremel.com/au/en/p/dremel-ez-lock-finishing-abrasive-buffs-320-grit-2615e512ac
          case DREMEL_512E_FINISHING_ABRASIVE_BUFF = 'Dremel-512E-finishing-abrasive-buff';

        case ROTARY_SANDPAPER_WHEEL = 'rotary-sandpaper-wheel';

      // 2024-08-04 jj5 - NOTE: "mandrels" also known as "shanks"

      case ROTARY_TOOL_MANDREL = 'rotary-tool-mandrel';

        // 2024-08-04 jj5 - SEE: https://www.dremel.com/us/en/p/401-2615000401
        case DREMEL_401_POLISHING_BIT_MANDREL = 'Dremel-401-polishing-bit-mandrel';

        // 2024-08-04 jj5 - SEE: https://www.dremel.com/us/en/p/ez402-2615e402ad
        case DREMEL_EZ402_EZ_LOCK_MANDREL = 'Dremel-EZ402-EZ-lock-mandrel';

        // 2024-08-04 jj5 - SEE: https://www.dremel.com/us/en/p/ez407sa-2615e407aa
        case DREMEL_EZ407_EZ_DRUM_MANDREL = 'Dremel-EZ407-EZ-drum-mandrel';

        case DRUM_SANDING_MANDREL = 'drum-sanding-mandrel';

        case CUTTING_WHEEL_MANDREL = 'cutting-wheel-mandrel';

    case ROTARY_TOOL_DUST_BLOWER = 'rotary-tool-dust-blower';

  //
  // 2024-08-04 jj5 - ROUTER
  //

  case ROUTER = 'router';

    case PLUNGE_ROUTER = 'plunge-router';

  //
  // 2024-08-04 jj5 - CLAMP
  //

  case CLAMP = 'clamp';

    case PCB_CLAMP = 'PCB-clamp';

    case VISE = 'vise';

      case MULTI_VISE = 'multi-vise';

      case BENCH_VISE = 'bench-vise';

      case VACUUM_VISE = 'vacuum-vise';

  //
  // 2024-08-06 jj5 - SIGN
  //

  case SIGN = 'sign';

    case ON_AIR_SIGN = 'on-air-sign';

  //
  // 2024-08-04 jj5 - DRILL_PRESS
  //

  case DRILL_PRESS = 'drill-press';

  //
  // 2024-08-04 jj5 - DISPLAY
  //

  case DISPLAY = 'display';

    case MONITOR = 'monitor';

      case HDMI_LCD = 'HDMI-LCD';

    case TELEVISION = 'television';

      case TV = 'TV';

        case LCD_TV = 'LCD-TV';

  //
  // 2024-08-04 jj5 - MICROSCOPE
  //

  case MICROSCOPE = 'microscope';

    case DIGITAL_MICROSCOPE = 'digital-microscope';

  //
  // 2024-08-04 jj5 - SCANNER
  //

  case SCANNER = 'scanner';

    case FLATBED_SCANNER = 'flatbed-scanner';

    case BARCODE_SCANNER = 'barcode-scanner';

  //
  // 2024-08-04 jj5 - SOLDERING_TOOL
  //

  case SOLDERING_TOOL = 'soldering-tool';

    case SOLDER_POT = 'solder-pot';

    case SOLDERING_STAND = 'soldering-stand';

    case SOLDERING_IRON = 'soldering-iron';

    case HOT_AIR_GUN = 'hot-air-gun';

      case SOLDERING_STATION = 'soldering-station';


  //
  // 2024-08-04 jj5 - DESOLDERING_TOOL
  //

  case DESOLDERING_TOOL = 'desoldering-tool';

    case DESOLDERING_PUMP = 'desoldering-pump';

  //
  // 2024-08-04 jj5 - ELECTRONIC_LOAD
  //

  case ELECTRONIC_LOAD = 'electronic-load';

    case PROGRAMMABLE_LOAD = 'programmable-load';

  //
  // 2024-08-04 jj5 - TWEEZERS
  //

  case TWEEZERS = 'tweezers';

    case PRECISION_TWEEZERS = 'precision-tweezers';

    case DIGITAL_TWEEZERS = 'digital-tweezers';

    case SOLDERING_TWEEZERS = 'soldering-tweezers';

  //
  // 2024-08-04 jj5 - SCREWDRIVER
  //

  case SCREWDRIVER = 'screwdriver';

    case SCREWDRIVER_SET = 'screwdriver-set';

    case ELECTRIC_SCREWDRIVER = 'electric-screwdriver';

    case RATCHET_SCREWDRIVER = 'ratchet-screwdriver';

    case MINI_SCREWDRIVER = 'mini-screwdriver';

      case MINI_SCREWDRIVER_SET = 'mini-screwdriver-set';

    case PRECISION_SCREWDRIVER = 'precision-screwdriver';

      case PRECISION_SCREWDRIVER_SET = 'precision-screwdriver-set';

    case POCKET_SCREWDRIVER = 'pocket-screwdriver';

    case SONIC_SCREWDRIVER = 'sonic-screwdriver';

    case PHILLIPS_HEAD_SCREWDRIVER = 'phillips-head-screwdriver';

      // 2024-08-04 jj5 - NOTE: the #0000 is 1.0mm
      case PHILLIPS_HEAD_SCREWDRIVER_PH0000 = 'phillips-head-screwdriver-PH0000';

      // 2024-08-04 jj5 - NOTE: we have a non-standard 1.2mm Phillips head bit
      case PHILLIPS_HEAD_SCREWDRIVER_PH1_2 = 'phillips-head-screwdriver-PH1.2';

      // 2024-08-04 jj5 - NOTE: the #000 is 1.5mm
      case PHILLIPS_HEAD_SCREWDRIVER_PH000 = 'phillips-head-screwdriver-PH000';

      // 2024-08-04 jj5 - NOTE: the #00 is 1.9mm
      case PHILLIPS_HEAD_SCREWDRIVER_PH00 = 'phillips-head-screwdriver-PH00';

      // 2024-08-04 jj5 - NOTE: the #0 is 2.5mm
      case PHILLIPS_HEAD_SCREWDRIVER_PH0 = 'phillips-head-screwdriver-PH0';

      // 2024-08-04 jj5 - NOTE: the #1 is 3.0mm
      case PHILLIPS_HEAD_SCREWDRIVER_PH1 = 'phillips-head-screwdriver-PH1';

      // 2024-08-04 jj5 - NOTE: the #2 is 3.7mm
      case PHILLIPS_HEAD_SCREWDRIVER_PH2 = 'phillips-head-screwdriver-PH2';

      // 2024-08-04 jj5 - NOTE: the #3 is 4.5mm
      case PHILLIPS_HEAD_SCREWDRIVER_PH3 = 'phillips-head-screwdriver-PH3';

      // 2024-08-04 jj5 - NOTE: the #4 is 6.0mm
      case PHILLIPS_HEAD_SCREWDRIVER_PH4 = 'phillips-head-screwdriver-PH4';


    case FLATHEAD_SCREWDRIVER = 'flathead-screwdriver';

      // 2024-08-04 jj5 - NOTE: "SL" is for "slotted"

      case FLATHEAD_SCREWDRIVER_SL1 = 'flathead-screwdriver-SL1';

      case FLATHEAD_SCREWDRIVER_SL1_2 = 'flathead-screwdriver-SL1.2';

      case FLATHEAD_SCREWDRIVER_SL1_4 = 'flathead-screwdriver-SL1.4';

      case FLATHEAD_SCREWDRIVER_SL1_5 = 'flathead-screwdriver-SL1.5';

      case FLATHEAD_SCREWDRIVER_SL1_8 = 'flathead-screwdriver-SL1.8';

      // 2024-08-04 jj5 - NOTE: SL2 is 1/8"
      case FLATHEAD_SCREWDRIVER_SL2 = 'flathead-screwdriver-SL2';

      case FLATHEAD_SCREWDRIVER_SL2_4 = 'flathead-screwdriver-SL2.4';

      case FLATHEAD_SCREWDRIVER_SL2_5 = 'flathead-screwdriver-SL2.5';

      // 2024-08-04 jj5 - NOTE: SL3 is 5/32"
      case FLATHEAD_SCREWDRIVER_SL3 = 'flathead-screwdriver-SL3';

      // 2024-08-04 jj5 - NOTE: SL4 is 3/16"
      case FLATHEAD_SCREWDRIVER_SL4 = 'flathead-screwdriver-SL4';

      case FLATHEAD_SCREWDRIVER_SL5 = 'flathead-screwdriver-SL5';

      case FLATHEAD_SCREWDRIVER_SL5_5 = 'flathead-screwdriver-SL5.5';

      // 2024-08-04 jj5 - NOTE: SL6 is 1/4"
      case FLATHEAD_SCREWDRIVER_SL6 = 'flathead-screwdriver-SL6';

      case FLATHEAD_SCREWDRIVER_SL6_5 = 'flathead-screwdriver-SL6.5';

      case FLATHEAD_SCREWDRIVER_SL7 = 'flathead-screwdriver-SL7';

      // 2024-08-04 jj5 - NOTE: SL8 is 5/16"
      case FLATHEAD_SCREWDRIVER_SL8 = 'flathead-screwdriver-SL8';

      // 2024-08-04 jj5 - NOTE: SL10 is 3/8"
      case FLATHEAD_SCREWDRIVER_SL10 = 'flathead-screwdriver-SL10';

      // 2024-08-04 jj5 - NOTE: SL12 is 7/16"
      case FLATHEAD_SCREWDRIVER_SL12 = 'flathead-screwdriver-SL12';

    case POZIDRIV_SCREWDRIVER = 'pozidriv-screwdriver';

      case POZIDRIV_SCREWDRIVER_PZ000 = 'pozidriv-screwdriver-PZ000';

      case POZIDRIV_SCREWDRIVER_PZ00 = 'pozidriv-screwdriver-PZ00';

      case POZIDRIV_SCREWDRIVER_PZ0 = 'pozidriv-screwdriver-PZ0';

      case POZIDRIV_SCREWDRIVER_PZ1 = 'pozidriv-screwdriver-PZ1';

      case POZIDRIV_SCREWDRIVER_PZ2 = 'pozidriv-screwdriver-PZ2';

      case POZIDRIV_SCREWDRIVER_PZ3 = 'pozidriv-screwdriver-PZ3';

      case POZIDRIV_SCREWDRIVER_PZ4 = 'pozidriv-screwdriver-PZ4';

    case TORX_SCREWDRIVER = 'torx-screwdriver';

      case TORX_SCREWDRIVER_T1 = 'torx-screwdriver-T1';

      case TORX_SCREWDRIVER_T2 = 'torx-screwdriver-T2';

      case TORX_SCREWDRIVER_T3 = 'torx-screwdriver-T3';

      case TORX_SCREWDRIVER_T4 = 'torx-screwdriver-T4';

      case TORX_SCREWDRIVER_T5 = 'torx-screwdriver-T5';

      case TORX_SCREWDRIVER_T6 = 'torx-screwdriver-T6';

      case TORX_SCREWDRIVER_T7 = 'torx-screwdriver-T7';

      case TORX_SCREWDRIVER_T8 = 'torx-screwdriver-T8';

      case TORX_SCREWDRIVER_T9 = 'torx-screwdriver-T9';

      case TORX_SCREWDRIVER_T10 = 'torx-screwdriver-T10';

      case TORX_SCREWDRIVER_T15 = 'torx-screwdriver-T15';

      case TORX_SCREWDRIVER_T20 = 'torx-screwdriver-T20';

      case TORX_SCREWDRIVER_T25 = 'torx-screwdriver-T25';

      case TORX_SCREWDRIVER_T27 = 'torx-screwdriver-T27';

      case TORX_SCREWDRIVER_T30 = 'torx-screwdriver-T30';

      case TORX_SCREWDRIVER_T40 = 'torx-screwdriver-T40';

    // 2024-08-04 jj5 - NOTE: these are also known as Allen keys...

    case HEX_SCREWDRIVER = 'hex-screwdriver';

      case HEX_SCREWDRIVER_H1_5 = 'hex-screwdriver-H1.5';

      case HEX_SCREWDRIVER_H2 = 'hex-screwdriver-H2.0';

      case HEX_SCREWDRIVER_H2_5 = 'hex-screwdriver-H2.5';

      case HEX_SCREWDRIVER_H3 = 'hex-screwdriver-H3.0';

      case HEX_SCREWDRIVER_H4 = 'hex-screwdriver-H4.0';

      case HEX_SCREWDRIVER_H5 = 'hex-screwdriver-H5.0';

      case HEX_SCREWDRIVER_H6 = 'hex-screwdriver-H6.0';

    // 2024-08-04 jj5 - NOTE: the tri-point drivers are also known as Y drivers (sometimes called tri-wing)...

    // 2024-08-06 jj5 - SEE: https://en.wikipedia.org/wiki/List_of_screw_drives#Tamper-resistant_types

    case TRI_POINT_Y_SCREWDRIVER = 'tri-point-Y-screwdriver';

      // 2024-08-04 jj5 - NOTE: the Y000 is 0.6mm
      case TRI_POINT_Y_SCREWDRIVER_Y000 = 'tri-point-Y-screwdriver-Y000';

      // 2024-08-04 jj5 - NOTE: the Y00 is 1.5mm
      case TRI_POINT_Y_SCREWDRIVER_Y00 = 'tri-point-Y-screwdriver-Y00';

      // 2024-08-04 jj5 - NOTE: the Y0 is 1.7mm
      case TRI_POINT_Y_SCREWDRIVER_Y0 = 'tri-point-Y-screwdriver-Y0';

      // 2024-08-04 jj5 - NOTE: the Y1 is 2mm
      case TRI_POINT_Y_SCREWDRIVER_Y1 = 'tri-point-Y-screwdriver-Y1';

      case TRI_POINT_Y_SCREWDRIVER_Y2 = 'tri-point-Y-screwdriver-Y2';

      case TRI_POINT_Y_SCREWDRIVER_Y3 = 'tri-point-Y-screwdriver-Y3';

    // 2024-08-04 jj5 - NOTE: the Pentalobe is a five pointed star...

    case PENTALOBE_SCREWDRIVER = 'pentalobe-screwdriver';

      // 2024-08-04 jj5 - NOTE: this is also known as TS1, it's 0.8mm
      case PENTALOBE_SCREWDRIVER_P2 = 'pentalobe-screwdriver-P2';

      // 2024-08-04 jj5 - NOTE: this is also known as TS4, it's 1.2mm
      case PENTALOBE_SCREWDRIVER_P5 = 'pentalobe-screwdriver-P5';

      // 2024-08-04 jj5 - NOTE: the P6 is 1.5mm
      case PENTALOBE_SCREWDRIVER_P6 = 'pentalobe-screwdriver-P6';

      // 2024-08-04 jj5 - NOTE: the P7 is 2.0mm
      case PENTALOBE_SCREWDRIVER_P7 = 'pentalobe-screwdriver-P7';

    case TRIANGULAR_SCREWDRIVER = 'triangular-screwdriver';

      case TRIANGULAR_SCREWDRIVER_2_0 = 'triangular-screwdriver-2.0';

      case TRIANGULAR_SCREWDRIVER_2_3 = 'triangular-screwdriver-2.3';

      case TRIANGULAR_SCREWDRIVER_3_0 = 'triangular-screwdriver-3.0';

    // 2024-08-06 jj5 - these are also called 'spanner bits' or 'spanner head drill bits'.
    //
    case U_DRIVE_SCREWDRIVER = 'U-drive-screwdriver';

      case U_DRIVE_SCREWDRIVER_U2_3 = 'U-drive-screwdriver-U2.3';

      case U_DRIVE_SCREWDRIVER_U2_6 = 'U-drive-screwdriver-U2.6';

    case HEX_NUT_DRIVER = 'hex-nut-driver';

      case HEX_NUT_DRIVER_6 = 'hex-nut-driver-6';

      case HEX_NUT_DRIVER_7 = 'hex-nut-driver-7';

      case HEX_NUT_DRIVER_8 = 'hex-nut-driver-8';

      case HEX_NUT_DRIVER_9 = 'hex-nut-driver-9';

      case HEX_NUT_DRIVER_10 = 'hex-nut-driver-10';

      case HEX_NUT_DRIVER_11 = 'hex-nut-driver-11';

      case HEX_NUT_DRIVER_12 = 'hex-nut-driver-12';

      case HEX_NUT_DRIVER_13 = 'hex-nut-driver-13';

    case GAMEBIT_SCREWDRIVER = 'gamebit-screwdriver';

      case GAMEBIT_SCREWDRIVER_3_8 = 'gamebit-screwdriver-3.8';

      case GAMEBIT_SCREWDRIVER_4_5 = 'gamebit-screwdriver-4.5';

    case SPECIAL_SCREWDRIVER = 'special-screwdriver';

      case RESET_PIN_SCREWDRIVER = 'reset-pin-screwdriver';

      case COUNTERSINK_SCREWDRIVER = 'countersink-screwdriver';

      case HEX_ADAPTER_SCREWDRIVER = 'hex-6.25mm-to-7.25mm-adapter';

  //
  // 2024-08-04 jj5 - CRIMPING_TOOL
  //

  case CRIMPING_TOOL = 'crimping-tool';

  //
  // 2024-08-04 jj5 - VOLTAGE_DETECTOR
  //

  case VOLTAGE_DETECTOR = 'voltage-detector';

    case STUD_FINDER = 'stud-finder';

  //
  // 2024-08-04 jj5 - CUTTING_IMPLEMENT
  //

  case CUTTING_IMPLEMENT = 'cutting-implement';

    case SCISSORS = 'scissors';

      case ELECTRIC_SCISSORS = 'electric-scissors';

    case BLADE = 'blade';

      case BLADES = 'blades';

      case SCALPEL_BLADE = 'scalpel-blade';

      case KNIFE = 'knife';

        case BOX_CUTTER = 'box-cutter';

        case SWISS_ARMY_KNIFE = 'swiss-army-knife';

        case CRAFT_KNIFE = 'craft-knife';

          case CRAFT_KNIFE_SET = 'craft-knife-set';

        case SCALPEL = 'scalpel';

          case SCALPEL_HANDLE = 'scalpel-handle';

    case WIRE_CUTTER = 'wire-cutter';

    case WIRE_STRIPPER = 'wire-stripper';

  //
  // 2024-08-04 jj5 - PRINTER
  //

  case PRINTER = 'printer';

    case LABEL_MAKER = 'label-maker';

  //
  // 2024-08-04 jj5 - CALCULATOR
  //

  case CALCULATOR = 'calculator';

    case SCIENTIFIC_CALCULATOR = 'scientific-calculator';

  //
  // 2024-08-04 jj5 - SOLDER_LUGS
  //

  case SOLDER_LUGS = 'solder-lugs';

  //
  // 2024-08-04 jj5 - FLUX
  //

  case FLUX = 'flux';

  //
  // 2024-08-06 jj5 - TAPE
  //

  case TAPE = 'tape';

    case GAFFER_TAPE = 'gaffer-tape';

  //
  // 2024-08-04 jj5 - DISPENSER
  //

  case DISPENSER = 'dispenser';

    case TAPE_DISPENSER = 'tape-dispenser';

  //
  // 2024-08-04 jj5 - MAGNIFIER
  //

  case MAGNIFIER = 'magnifier';

    case MAGNIFYING_GLASS = 'magnifying-glass';

      case HEAD_MOUNTED_MAGNIFIER = 'head-mounted-magnifier';

  //
  // 2024-08-04 jj5 - THIRD_HAND
  //

  case THIRD_HAND = 'third-hand';

  //
  // 2024-08-04 jj5 - CAPACITOR_DISCHARGE_PEN
  //

  case CAPACITOR_DISCHARGE_PEN = 'capacitor-discharge-pen';

  //
  // 2024-08-04 jj5 - BRUSH
  //

  case BRUSH = 'brush';

    case HARD_BRUSH = 'hard-brush';

    case SCRUB_BRUSH = 'scrub-brush';

    case DISH_BRUSH = 'dish-brush';

      case DISH_BRUSH_REFILLS = 'dish-brush-refills';

    case WIRE_BRUSH = 'wire-brush';

    case CLEANING_BRUSH = 'cleaning-brush';

    case BRUSH_SET = 'brush-set';

      case HARD_BRUSH_SET = 'hard-brush-set';

    case PAINT_BRUSH = 'paint-brush';

      case PAINT_BRUSHES = 'paint-brushes';

  //
  // 2024-08-04 jj5 - GLOVES
  //

  case GLOVES = 'gloves';

    case LATEX_GLOVES = 'latex-gloves';

    case NITRILE_GLOVES = 'nitrile-gloves';

  //
  // 2024-08-04 jj5 - BLOW_TORCH
  //

  case BLOW_TORCH = 'blow-torch';

  //
  // 2024-08-04 jj5 - GAS
  //

  case GAS = 'gas';

    case BUTANE = 'butane';

  //
  // 2024-08-04 jj5 - POWER_SUPPLY_TESTER
  //

  case POWER_SUPPLY_TESTER = 'power-supply-tester';

    case ATX_POWER_SUPPLY_TESTER = 'ATX-power-supply-tester';

  //
  // 2024-08-04 jj5 - MAT
  //

  case MAT = 'mat';

    case REPAIR_MAT = 'repair-mat';

  //
  // 2024-08-04 jj5 - TEST_CLIP
  //

  case TEST_CLIP  = 'test-clip';

    case TEST_CLIPS  = 'test-clips';

  //
  // 2024-08-04 jj5 - PICKUP_TOOL
  //

  case PICKUP_TOOL = 'pickup-tool';

    case MAGNETIC_PICKUP_TOOL = 'magnetic-pickup-tool';

    case TELESCOPIC_PICKUP_TOOL = 'telescopic-pickup-tool';

    case CLAW_TOOL = 'claw-tool';

      case IC_CHIP_PICKUP_TOOL = 'IC-chip-pickup-tool';

  //
  // 2024-08-04 jj5 - MIRROR
  //

  case MIRROR = 'mirror';

    case INSPECTION_MIRROR = 'inspection-mirror';

  //
  // 2024-08-04 jj5 - BOOK_HOLDER
  //

  case BOOK_HOLDER = 'book-holder';

  //
  // 2024-08-04 jj5 - HEAT_SHRINK
  //

  case HEAT_SHRINK = 'heat-shrink';

  //
  // 2024-08-06 jj5 - WIRE
  //

  case WIRE = 'wire';

    case WIRE_SPOOL = 'wire-spool';

    case HOOKUP_WIRE = 'hookup-wire';

    case JUMPER_WIRE = 'jumper-wire';

      case DUPONT_WIRE = 'dupont-wire';

    case SOLDER_WIRE = 'solder-wire';

  //
  // 2024-08-04 jj5 - CONNECTOR
  //

  case CONNECTOR = 'connector';

    case CONNECTOR_KIT = 'connector-kit';

    case WIRE_CONNECTOR = 'wire-connector';

      case WIRE_CONNECTORS = 'wire-connectors';

  //
  // 2024-08-04 jj5 - CROWBAR
  //

  case CROWBAR = 'crowbar';

  //
  // 2024-08-04 jj5 - SPUDGER
  //

  case SPUDGER = 'spudger';

    case SPUDGERS = 'spudgers';

    case BOX_OPENER = 'box-opener';

  //
  // 2024-08-04 jj5 - HOOK_TOOL
  //

  case HOOK_TOOL = 'hook-tool';

    case HOOK_TOOLS = 'hook-tools';

    case MULTI_PURPOSE_HOOK = 'multi-purpose-hook'; 

  //
  // 2024-08-04 jj5 - ELECTRONICS_PROJECT
  //

  case ELECTRONICS_PROJECT = 'electronics-project';

  //
  // 2024-08-04 jj5 - ELECTRONICS_KIT
  //

  case ELECTRONICS_KIT = 'electronics-kit';

  //
  // 2024-08-04 jj5 - ELECTRONICS_PROJECT_LAB
  //

  case ELECTRONICS_PROJECT_LAB = 'electronics-project-lab';

  //
  // 2024-08-04 jj5 - ELECTRONICS_PROJECT_LAB_KIT
  //

  case ELECTRONICS_PROJECT_LAB_KIT = 'electronics-project-lab-kit';

  //
  // 2024-08-04 jj5 - RADIO
  //

  case RADIO = 'radio';

    case AM_RADIO = 'AM-radio';

    case FM_RADIO = 'FM-radio';

  //
  // 2024-08-04 jj5 - METAL_DETECTOR
  //

  case METAL_DETECTOR = 'metal-detector';

  //
  // 2024-08-04 jj5 - STYLUS
  //

  case STYLUS = 'stylus';

    case STYLUS_PEN = 'stylus-pen';

  //
  // 2024-08-04 jj5 - RULER
  //

  case RULER = 'ruler';

    case STEEL_RULER = 'steel-ruler';

    case RULER_CM = 'ruler-(cm)';

    case RULER_INCH = 'ruler-(inch)';

  //
  // 2024-08-04 jj5 - CLOTHING
  //

  case CLOTHING = 'clothing';

    case LAB_COAT = 'lab-coat';

  //
  // 2024-08-04 jj5 - POCKET_PROTECTOR
  //

  case POCKET_PROTECTOR = 'pocket-protector';

  //
  // 2024-08-04 jj5 - GOGGLES
  //

  case GOGGLES = 'goggles';

    case SAFETY_GOGGLES = 'safety-goggles';

  //
  // 2024-08-04 jj5 - BADGE_HOLDER
  //

  case BADGE_HOLDER = 'badge-holder';

  //
  // 2024-08-04 jj5 - COTTON_SWABS
  //

  case COTTON_SWABS = 'cotton-swabs';

  //
  // 2024-08-04 jj5 - JAW_PADS
  //

  case JAW_PADS = 'jaw-pads';

  //
  // 2024-08-04 jj5 - SPONGE
  //

  case SPONGE = 'sponge';

    case FOAM_SPONGE = 'foam-sponge';

  //
  // 2024-08-04 jj5 - CLEANING_BRICKS
  //

  case CLEANING_BRICKS = 'cleaning-bricks';

  //
  // 2024-08-04 jj5 - PEN
  //

  case PEN = 'pen';

    case CRAFTWORK_PEN = 'craftwork-pen';

    case DEEP_HOLE_PEN = 'deep-hole-pen';

    case BALLPOINT_PEN = 'ballpoint-pen';

  //
  // 2024-08-04 jj5 - CABLE_TESTER
  //

  case CABLE_TESTER = 'cable-tester';

    case NETWORK_CABLE_TESTER = 'network-cable-tester';

  //
  // 2024-08-04 jj5 - CLOTH
  //

  case CLOTH = 'cloth';

    case MICROFIBER_CLOTH = 'microfiber-cloth';

  //
  // 2024-08-04 jj5 - WIRE_FIXTURE
  //

  case WIRE_FIXTURE = 'wire-fixture';

  //
  // 2024-08-04 jj5 - SPANNER
  //

  case SPANNER = 'spanner';

    case WRENCH = 'wrench';

      case ADJUSTABLE_WRENCH = 'adjustable-wrench';

        case ADJUSTABLE_WRENCH_SET = 'adjustable-wrench-set';

        case ADJUSTABLE_WRENCH_6_INCH = 'adjustable-wrench-6-inch';

        case ADJUSTABLE_WRENCH_8_INCH = 'adjustable-wrench-8-inch';

        case ADJUSTABLE_WRENCH_10_INCH = 'adjustable-wrench-10-inch';

        case ADJUSTABLE_WRENCH_12_INCH = 'adjustable-wrench-12-inch';

      case TIGER_WRENCH = 'tiger-wrench';

  //
  // 2024-08-04 jj5 - CALIPERS
  //

  case CALIPERS = 'calipers';

    case DIGITAL_CALIPERS = 'digital-calipers';

  //
  // 2024-08-04 jj5 - GAUGE
  //

  case GAUGE = 'gauge';

    case DEPTH_GAUGE = 'depth-gauge';

    case THREAD_PITCH_GAUGE = 'thread-pitch-gauge';

    case FEELER_GAUGE = 'feeler-gauge';

    case TAPER_GAUGE = 'taper-gauge';

  //
  // 2024-08-04 jj5 - CIRCUIT_BREAKER
  //

  case CIRCUIT_BREAKER = 'circuit-breaker';

    case SURGE_PROTECTOR = 'surge-protector';

      case RESIDUAL_CURRENT_DEVICE = 'residual-current-device';

  //
  // 2024-08-04 jj5 - POWER_SUPPLY
  //

  case POWER = 'power';

    case POWER_BOARD = 'power-board';

    case POWER_SUPPLY = 'power-supply';

      case BENCH_POWER_SUPPLY = 'bench-power-supply';

      case AC_POWER_ADAPTER = 'AC-power-adapter';

      case POWER_MODULE = 'power-module';

    case POWER_CABLE = 'power-cable';

      case USB_POWER_CABLE = 'USB-power-cable';


  //
  // 2024-08-04 jj5 - FUNNEL
  //

  case FUNNEL = 'funnel';

    case FUNNEL_SET = 'funnel-set';

  //
  // 2024-08-04 jj5 - CABLE_TIDY
  //

  case CABLE_TIDY = 'cable-tidy';

    case CABLE_ORGANIZER = 'cable-organizer';

  //
  // 2024-08-04 jj5 - CRIMP_TERMINAL
  //

  case CRIMP_TERMINAL = 'crimp-terminal';

    case FERRULE = 'ferrule';

  //
  // 2024-08-04 jj5 - CRIMPER
  //

  case CRIMPER = 'crimper';

    case FERRULE_CRIMPER = 'ferrule-crimper';

  //
  // 2024-08-04 jj5 - CRIMPER_KIT
  //

  case CRIMPER_KIT = 'crimper-kit';

    case FERRULE_CRIMPER_KIT = 'ferrule-crimper-kit';

  //
  // 2024-08-04 jj5 - PLIERS
  //

  case PLIERS = 'pliers';

    case NEEDLE_NOSE_PLIERS = 'needle-nose-pliers';

    case LOCKING_PLIERS = 'locking-pliers';

  //
  // 2024-08-04 jj5 - SCALE
  //

  case SCALE = 'scale';

    case ELECTRONIC_SCALE = 'electronic-scale';

  //
  // 2024-08-04 jj5 - AIR_PURIFIER
  //

  case AIR_PURIFIER = 'air-purifier';

  //
  // 2024-08-04 jj5 - E_READER
  //

  case E_READER = 'e-reader';

  //
  // 2024-08-05 jj5 - MOUNT
  //

  case MOUNT = 'mount';

    case WALL_MOUNT = 'wall-mount';

      case VESA_WALL_MOUNT = 'VESA-wall-mount';

      case WEBCAM_WALL_MOUNT = 'webcam-wall-mount';

    case STAND = 'stand';

      case WEBCAM_STAND = 'webcam-stand';

  //
  // 2024-08-05 jj5 - WRIST_PAD
  //

  case WRIST_PAD = 'wrist-pad';

    case KEYBOARD_WRIST_PAD = 'keyboard-wrist-pad';

  //
  // 2024-08-05 jj5 - MICROPHONE
  //

  case MICROPHONE = 'microphone';

    case USB_MICROPHONE = 'USB-microphone';

    case CONDENSER_MICROPHONE = 'condenser-microphone';

  //
  // 2024-08-07 jj5 - BREADBOARD
  //

  case BREADBOARD = 'breadboard';

    case SOLDERLESS_BREADBOARD = 'solderless-breadboard';

    case SOLDERABLE_BREADBOARD = 'solderable-breadboard';

  //
  // 2024-08-07 jj5 - CIRCUIT_BOARD
  //

  case CIRCUIT_BOARD = 'circuit-board';

    case PCB = 'PCB';

}
