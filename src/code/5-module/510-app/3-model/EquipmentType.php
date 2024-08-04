<?php

enum EquipmentAttribute : string {

  case ACCESSORY = 'accessory';

  case ATTACHMENT = 'attachment';

  case BENCH_EQUIPMENT = 'bench-equipment';

  case CAT_I = 'cat-I';

  case CAT_II = 'cat-II';

  case CAT_III = 'cat-III';

  case CLEANING_EQUIPMENT = 'cleaning-equipment';

  case COMPUTER_EQUIPMENT = 'computer-equipment';

  case CONSUMABLE = 'consumable';

  case CORDLESS = 'cordless';

  case HAND_TOOL = 'hand-tool';

  case HEAD_MOUNTED = 'head-mounted';

  case HEART = 'heart';

  case MAGNETIC = 'magnetic';

  case MEASURING_EQUIPMENT = 'measuring-equipment';

  case PERIPHERAL = 'peripheral';

  case PRE_CRIMPED = 'pre-crimped';

  case RATCHET = 'ratchet';

  case RECHARGEABLE = 'rechargeable';

  case SAFETY_EQUIPMENT = 'safety-equipment';

  case TEST_EQUIPMENT = 'test-equipment';

  case WEARABLE = 'wearable';

}

enum EquipmentMaterial : string {

  case LEATHER = 'leather';

}

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

enum EquipmentMeasure : string {

  case ANGLE = 'angle';
  case CAPACITANCE = 'capacitance';
  case CONTINUITY = 'continuity';
  case COUNT = 'count';
  case CURRENT_AC = 'current-AC';
  case CURRENT_DC = 'current-DC';
  case DISTANCE = 'distance';
  case FREQUENCY = 'frequency';
  case INDUCTANCE = 'inductance';
  case MASS = 'mass';
  case POWER = 'power';
  case PRESSURE = 'pressure';
  case RESISTANCE = 'resistance';
  case TEMPERATURE = 'temperature';
  case TIME = 'time';
  case VOLTAGE_AC = 'voltage-AC';
  case VOLTAGE_DC = 'voltage-DC';

  // 2024-08-03 jj5 - NOTE: following are things I don't have tools for yet
  /*
  case ENERGY = 'energy';
  case TORQUE = 'torque';
  case FORCE = 'force';
  case AREA = 'area';
  case VOLUME = 'volume';
  case DENSITY = 'density';
  case VELOCITY = 'velocity';
  case ACCELERATION = 'acceleration';
  case JERK = 'jerk';
  case ANGULAR_VELOCITY = 'angular-velocity';
  case ANGULAR_ACCELERATION = 'angular-acceleration';
  case ANGULAR_JERK = 'angular-jerk';
  case MOMENTUM = 'momentum';
  case IMPULSE = 'impulse';
  case KINETIC_ENERGY = 'kinetic-energy';
  case POTENTIAL_ENERGY = 'potential-energy';
  case WORK = 'work';
  */  

}

enum EquipmentFunction : string {

  case ATTACH = 'attach';
  case BEND = 'bend';
  case BLOW = 'blow';
  case BREAK_CIRCUIT = 'break-circuit';
  case BRUSH = 'brush';
  case BURN = 'burn';
  case CALCULATE = 'calculate';
  case CARVE = 'carve';
  case CLAMP = 'clamp';
  case CLEAN = 'clean';
  case CRIMP = 'crimp';
  case CUT = 'cut';
  case DEBURR = 'deburr';
  case DESOLDER = 'desolder';
  case DETECT = 'detect';
  case DISCHARGE = 'discharge';
  case DISPENSE = 'dispense';
  case DISPLAY = 'display';
  case DISTRIBUTE = 'distribute';
  case DRILL = 'drill';
  case ENGRAVE = 'engrave';
  case FUNNEL = 'funnel';
  case GRIND = 'grind';
  case GRIP = 'grip';
  case HEAT = 'heat';
  case HOLD = 'hold';
  case LOAD = 'load';
  case MAGNIFY = 'magnify';
  case MEASURE = 'measure';
  case ORGANIZE = 'organize';
  case PHOTOGRAPH = 'photograph';
  case POLISH = 'polish';
  case POWER = 'power';
  case PRINT = 'print';
  case PROBE = 'probe';
  case PROTECT = 'protect';
  case PULL = 'pull';
  case PURIFY = 'purify';
  case PRY = 'pry';
  case RECORD = 'record';
  case RECORD_AUDIO = 'record-audio';
  case RECORD_VIDEO = 'record-video';
  case REMOVE_PAINT = 'remove-paint';
  case REMOVE_RUST = 'remove-rust';
  case ROUTE = 'route';
  case SAND = 'sand';
  case SCAN = 'scan';
  case SHARPEN = 'sharpen';
  case SOLDER = 'solder';
  case STRAIGHTEN = 'straighten';
  case STRIP = 'strip';
  case TEST = 'test';
  case TRIM = 'trim';
  case TWIST = 'twist';
  case TYPE = 'type';
  case WEAR = 'wear';
  case WEIGH = 'weigh';
  case WIPE = 'wipe';
  case WRITE = 'write';

}

enum EquipmentFeature : string {

  //
  // 2024-08-04 jj5 - ADAPTER
  //

  case ADAPTER = 'adapter';

    case ANGLE_SCREW_ADAPTER = 'angle-screw-adapter';

  //
  // 2024-08-04 jj5 - MISC_TOOL
  //


  case REAMER = 'reamer';

  case PUNCH = 'punch';

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

  case KEY_RING = 'key-ring';

  case CORKSCREW = 'corkscrew';

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

  //
  // 2024-08-04 jj5 - SWITCH
  //

  case SWITCH = 'switch';

    case KVM = 'KVM';

      case DISPLAY_PORT_KVM = 'DisplayPort-KVM';

  //
  // 2024-08-04 jj5 - KEYBOARD
  //

  case KEYBOARD = 'keyboard';

    case MECHANICAL_KEYBOARD = 'mechanical-keyboard';

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

        case HSS_DRILL_BIT = 'HSS-drill-bit';

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

          case ROTARY_NYLON_ABRASIVE_BRUSH = 'rotary-nylon-abrasive-brush';

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
  // 2024-08-04 jj5 - POWER_SUPPLY
  //

  case POWER_SUPPLY = 'power-supply';

    case BENCH_POWER_SUPPLY = 'bench-power-supply';

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

    case RESET_PIN_SCREWDRIVER = 'reset-pin-screwdriver';

    // 2024-08-04 jj5 - NOTE: the tri-point drivers are also known as Y drivers...

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

    case U_DRIVE_SCREWDRIVER = 'U-drive-screwdriver';

      case U_DRIVE_SCREWDRIVER_U2_3 = 'U-drive-screwdriver-U2.3';

      case U_DRIVE_SCREWDRIVER_U2_6 = 'U-drive-screwdriver-U2.6';

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

    case KNIFE = 'knife';

      case SWISS_ARMY_KNIFE = 'swiss-army-knife';

      case CRAFT_KNIFE = 'craft-knife';

        case CRAFT_KNIFE_SET = 'craft-knife-set';

    case SCALPEL = 'scalpel';

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
  // 2024-08-04 jj5 - HOOK
  //

  case HOOK = 'hook';

    case HOOKS = 'hooks';

    case MULTI_PURPOSE_HOOK = 'multi-purpose-hook'; 

  //
  // 2024-08-04 jj5 - TRAY
  //

  case TRAY = 'tray';

    case STAINLESS_STEEL_TRAY = 'stainless-steel-tray';

    case MAGNETIC_TRAY = 'maginetic-tray';

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
  // 2024-08-04 jj5 - WRENCH
  //

  case WRENCH = 'wrench';

    case ADJUSTABLE_WRENCH = 'adjustable-wrench';

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

  //
  // 2024-08-04 jj5 - CIRCUIT_BREAKER
  //

  case CIRCUIT_BREAKER = 'circuit-breaker';

    case SURGE_PROTECTOR = 'surge-protector';

      case RESIDUAL_CURRENT_DEVICE = 'residual-current-device';

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
  // 2024-08-04 jj5 - FEATURE
  //

  case FEATURE = 'feature';

    case LCD = 'LCD';

    case REMOTE_CONTROL = 'remote-control';

}

enum EquipmentClass : string {

  // 2024-08-03 jj5 - NOTE: 'depth-gauge' -> 'gauge'
  // 2024-08-03 jj5 - NOTE: 'rcd' -> 'circuit-breaker'
  // 2024-08-03 jj5 - NOTE: 'sanding-disc' -> 'rotary-tool-attachment'
  // 2024-08-03 jj5 - NOTE: 'scalpel' => 'knife'
  // 2024-08-03 jj5 - NOTE: 'tape-dispenser' -> 'dispenser'
  // 2024-08-03 jj5 - NOTE: 'vise' => 'clamp'

  case ABRASIVE = 'abrasive';
  case ADAPTER = 'adapter';
  case AIR_PURIFIER = 'air-purifier';
  case BADGE_HOLDER = 'badge-holder';
  case BLOW_TORCH = 'blow-torch';
  case BOOK_HOLDER = 'book-holder';
  case BRUSH = 'brush';
  case CABLE_TESTER = 'cable-tester';
  case CABLE_TIDY = 'cable-tidy';
  case CALCULATOR = 'calculator';
  case CALIPERS = 'calipers';
  case CAMERA = 'camera';
  case CAPACITOR_DISCHARGE_PEN = 'capacitor-discharge-pen';
  case CHUMBY = 'chumby';
  case CIRCUIT_BREAKER = 'circuit-breaker';
  case CLAMP = 'clamp';
  case CLEANING_BRICKS = 'cleaning-bricks';
  case CLOTH = 'cloth';
  case CLOTHING = 'clothing';
  case COMPONENT_TESTER = 'component-tester';
  case CONNECTOR = 'connector';
  case COTTON_SWABS = 'cotton-swabs';
  case CRIMPING_TOOL = 'crimping-tool';
  case CROWBAR = 'crowbar';
  case CRIMP = 'crimp';
  case CRIMPER = 'crimper';
  case CUTTER = 'cutter';
  case DEPTH_GAUGE = 'depth-gauge';
  case DESOLDERING_TOOL = 'desoldering-tool';
  case DISPENSER = 'dispenser';
  case DISPLAY = 'display';
  case DRAWER = 'drawer';
  case DRILL_BIT = 'drill-bit';
  case DRILL_PRESS = 'drill-press';
  case ELECTRONIC_LOAD = 'electronic-load';
  case E_READER = 'e-reader';
  case FEATURE = 'feature';
  case FLUX = 'flux';
  case FUNNEL = 'funnel';
  case FURNITURE = 'furniture';
  case GAS = 'gas';
  case GAUGE = 'gauge';
  case GLOVES = 'gloves';
  case GOGGLES = 'goggles';
  case HEAT_SHRINK = 'heat-shrink';
  case HOLDER = 'holder';
  case HOOK = 'hook';
  case JAW_PADS = 'jaw-pads';
  case KEYBOARD = 'keyboard';
  case KIT = 'kit';
  case KNIFE = 'knife';
  case KVM = 'KVM';
  case LAB_COAT = 'lab-coat';
  case LABEL_MAKER = 'label-maker';
  case LIGHT = 'light';
  case LOGIC_ANALYZER = 'logic-analyzer';
  case MAGNIFIER = 'magnifier';
  case MAT = 'mat';
  case METAL_DETECTOR = 'metal-detector';
  case METER = 'meter';
  case MICROPHONE = 'microphone';
  case MICROSCOPE = 'microscope';
  case MIRROR = 'mirror';
  case MONITOR = 'monitor';
  case MOUNT = 'mount';
  case MULTIMETER = 'multimeter';
  case PEN = 'pen';
  case PICKUP_TOOL = 'pickup-tool';
  case PLIERS = 'pliers';
  case POCKET_PROTECTOR = 'pocket-protector';
  case POWER_SUPPLY = 'power-supply';
  case POWER_SUPPLY_TESTER = 'power-supply-tester';
  case PRINTER = 'printer';
  case PROBE = 'probe';
  case PROJECT = 'project';
  case PROTOCOL_ANALYZER = 'protocol-analyzer';
  case RADIO = 'radio';
  case ROTARY_TOOL_ATTACHMENT = 'rotary-tool-attachment';
  case ROTARY_TOOL = 'rotary-tool';
  case ROUTER = 'router';
  case RULER = 'ruler';
  case SAW = 'saw';
  case SCALE = 'scale';
  case SCANNER = 'scanner';
  case SCISSORS = 'scissors';
  case SCOPE = 'scope';
  case SCREWDRIVER = 'screwdriver';
  case SIGNAL_GENERATOR = 'signal-generator';
  case SOLDERING_TOOL = 'soldering-tool';
  case SOLDER_LUGS = 'solder-lugs';
  case SPECTRUM_ANALYZER = 'spectrum-analyzer';
  case SPONGE = 'sponge';
  case SPUDGER = 'spudger';
  case STEP_LADDER = 'step-ladder';
  case STUD_FINDER = 'stud-finder';
  case STYLUS = 'stylus';
  case SWITCH = 'switch';
  case TEST_CLIP = 'test-clip';
  case THERMAL_IMAGER = 'thermal-imager';
  case THERMOMETER = 'thermometer';
  case THIRD_HAND = 'third-hand';
  case TOOL = 'tool';
  case TORCH = 'torch';
  case TRAY = 'tray';
  case TV = 'tv';
  case TWEEZERS = 'tweezers';
  case UV_LAMP = 'uv-lamp';
  case VOLTAGE_DETECTOR = 'voltage-detector';
  case WIRE_CUTTER = 'wire-cutter';
  case WIRE_FIXTURE = 'wire-fixture';
  case WIRE_STRIPPER = 'wire-stripper';
  case WRENCH = 'wrench';

}
