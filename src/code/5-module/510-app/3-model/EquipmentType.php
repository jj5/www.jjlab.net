<?php

enum Connectivity : string {

  case BLUETOOTH = 'bluetooth';

  case BNC = 'bnc';

  case ETHERNET = 'ethernet';

  case USB = 'usb';

  case WIFI = 'wifi';

}

enum PowerConnector : string {
  
  // 2024-08-03 jj5 - 240V output
  case POWER_IEC_C13 = 'power-iec-c13';

  // 2024-08-03 jj5 - 240V input
  case POWER_IEC_C14 = 'power-iec-c14';

  // 2024-08-03 jj5 - DC power output...
  case POWER_DC_BARREL_JACK = 'power-dc-barrel-jack';

  // 2024-08-03 jj5 - DC power input...
  case POWER_DC_BARREL_SOCKET = 'power-dc-barrel-socket';

}

enum Measure : string {

  case ANGLE = 'angle';
  case CAPACITANCE = 'capacitance';
  case COUNT = 'count';
  case CURRENT = 'current';
  case DISTANCE = 'distance';
  case FREQUENCY = 'frequency';
  case INDUCTANCE = 'inductance';
  case MASS = 'mass';
  case POWER = 'power';
  case PRESSURE = 'pressure';
  case RESISTANCE = 'resistance';
  case TEMPERATURE = 'temperature';
  case TIME = 'time';
  case VOLTAGE = 'voltage';

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

enum EquipmentAttribute : string {

  case HEART = 'heart';

  case BENCH_EQUIPMENT = 'bench-equipment';

}

enum EquipmentFeature : string {

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

  case VOLTMETER = 'voltmeter';

  case COUNTER_TOTALIZER = 'counter-totalizer';

}

enum EquipmentFunction : string {

  case ATTACH = 'attach';
  case BEND = 'bend';
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


enum EquipmentClass : string {

  // 2024-08-03 jj5 - NOTE: 'depth-gauge' -> 'gauge'
  // 2024-08-03 jj5 - NOTE: 'rcd' -> 'circuit-breaker'
  // 2024-08-03 jj5 - NOTE: 'sanding-disc' -> 'rotary-tool-attachment'
  // 2024-08-03 jj5 - NOTE: 'scalpel' => 'knife'
  // 2024-08-03 jj5 - NOTE: 'tape-dispenser' -> 'dispenser'
  // 2024-08-03 jj5 - NOTE: 'vise' => 'clamp'


  case AIR_PURIFIER = 'air-purifier';
  case BADGE_HOLDER = 'badge-holder';
  case BLOW_TORCH = 'blow-torch';
  case BRUSH = 'brush';
  case CABLE_TESTER = 'cable-tester';
  case CALCULATOR = 'calculator';
  case CALIPERS = 'calipers';
  case CAMERA = 'camera';
  case CAPACITOR_DISCHARGE_PEN = 'capacitor-discharge-pen';
  case CHUMBY = 'chumby';
  case CIRCUIT_BREAKER = 'circuit-breaker';
  case CLAMP = 'clamp';
  case CLOTH = 'cloth';
  case COMPONENT_TESTER = 'component-tester';
  case CRIMPING_TOOL = 'crimping-tool';
  case CUTTER = 'cutter';
  case DESOLDERING_PUMP = 'desoldering-pump';
  case DISPENSER = 'dispenser';
  case DRILL_BIT = 'drill-bit';
  case ELECTRONIC_LOAD = 'electronic-load';
  case E_READER = 'e-reader';
  case FLUX = 'flux';
  case FUNNEL = 'funnel';
  case GAUGE = 'gauge';
  case GLOVES = 'gloves';
  case GOGGLES = 'goggles';
  case HOLDER = 'holder';
  case KEYBOARD = 'keyboard';
  case KNIFE = 'knife';
  case KVM = 'kvm';
  case LAB_COAT = 'lab-coat';
  case LABEL_MAKER = 'label-maker';
  case LOGIC_ANALYZER = 'logic-analyzer';
  case MAGNIFIER = 'magnifier';
  case MAT = 'mat';
  case METER = 'meter';
  case MICROPHONE = 'microphone';
  case MICROSCOPE = 'microscope';
  case MONITOR = 'monitor';
  case MOUNT = 'mount';
  case MULTIMETER = 'multimeter';
  case PEN = 'pen';
  case PLIERS = 'pliers';
  case POCKET_PROTECTOR = 'pocket-protector';
  case POWER_SUPPLY = 'power-supply';
  case POWER_SUPPLY_TESTER = 'power-supply-tester';
  case PROBE = 'probe';
  case PROTOCOL_ANALYZER = 'protocol-analyzer';
  case ROTARY_TOOL_ATTACHMENT = 'rotary-tool-attachment';
  case ROTARY_TOOL = 'rotary-tool';
  case RULER = 'ruler';
  case SANDING_STICK = 'sanding-stick';
  case SCALE = 'scale';
  case SCANNER = 'scanner';
  case SCOPE = 'scope';
  case SCREWDRIVER = 'screwdriver';
  case SIGNAL_GENERATOR = 'signal-generator';
  case SOLDERING_STATION = 'soldering-station';
  case SOLDER_LUG = 'solder-lug';
  case SPECTRUM_ANALYZER = 'spectrum-analyzer';
  case SPONGE = 'sponge';
  case STEP_LADDER = 'step-ladder';
  case STUD_FINDER = 'stud-finder';
  case STYLUS = 'stylus';
  case THERMAL_IMAGER = 'thermal-imager';
  case THERMOMETER = 'thermometer';
  case THIRD_HAND = 'third-hand';
  case TORCH = 'torch';
  case TRAY = 'tray';
  case TV = 'tv';
  case TWEEZERS = 'tweezers';
  case UV_LAMP = 'uv-lamp';
  case VOLTAGE_DETECTOR = 'voltage-detector';
  case WIRE_CUTTER = 'wire-cutter';
  case WIRE_STRIPPER = 'wire-stripper';
  case WRENCH = 'wrench';

}
