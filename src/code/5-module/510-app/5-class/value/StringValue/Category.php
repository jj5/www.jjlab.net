<?php

function category( $arg ) {

  return new_value( Category::class, $arg );

}

class Category extends StringValue {

  private $category_id = null;

  private static $category_list = [];

  public function __construct( string $value ) {

    parent::__construct( $value );

    self::$category_list[] = $value;

  }

  public function get_category_id() {

    if ( $this->category_id === null ) {

      $this->category_id = get_html_id( $this->to_string() );

    }

    return $this->category_id;

  }

  public function get_category_name() { return $this->to_string(); }

  public function render( mixed $format = null, array $attrs = [] ) : void {

    $href = url_base() . '/category.php/' . $this->get_category_id() . '#heading';

    render_link_internal(
      $this->to_string(),
      $href,
      TITLE_LINK_CATEGORY,
    );

  }

  public static function sort_natural( &$category_list ) {

    $category_order = self::get_category_order();

    // 2024-08-03 jj5 - HACK! just leave it as defined...

    return self::sort_alphabetical( $category_list );

    usort(
      $category_list,
      function ( $a, $b ) use ( $category_order ) {

        $a_name = $a->get_category_name();
        $b_name = $b->get_category_name();

        return $category_order[ $a_name ] - $category_order[ $b_name ];

      }
    );

  }

  public static function sort_alphabetical( &$category_list ) {

    usort(
      $category_list,
      function ( $a, $b ) {

        $a_name = $a->get_category_name();
        $b_name = $b->get_category_name();

        return strcasecmp( $a_name, $b_name );

      }
    );

  }

  public static function get_category_order() {

    static $category_order = null;

    static $category_list = [

      'Electronics Project Lab',
      'Electronics Project',
      'Electronics Kit',

      'Radio',
      'Metal Detector',

      'Mixed Signal Oscilloscope',
      'Oscilloscope',
      'Logic Analyzer',
      'Signal Generator',
      'Waveform Generator',
      'Protocol Analyzer',
      'Spectrum Analyzer',
      'Counter/Totalizer',
      'Electronic Load',
      'Programmable Load',
      'Component Tester',
      'SMD Tester',
      'Transistor Tester',
      'Power Supply Tester',
      'Cable Tester',
      'Test Equipment',

      'Multimeter',
      'Voltmeter',
      'Ammeter',
      'Capactance Meter',
      'LCR Meter',
      'ESR Meter',
      'Stud Finder',
      'Voltage Detector',
      'Meter',
      'Scale',

      'Calculator',
      'Label Maker',
      'Soldering Iron',
      'Hot Air Gun',
      'Power Supply',
      'Microscope',
      'Television',
      'Display',
      'LCD',
      'KVM',
      'Tape Dispenser',
      'Third Hand',
      'Repair Mat',
      'Tray',
      'Bench Equipment',

      'Sonic Screwdriver',
      'Screwdriver',
      'Tweezers',
      'Rotary Tool',
      'Crimping Tool',
      'Desoldering Tool',
      'Electric Scissors',
      'Scissors',
      'Capactior Discharge Pen',
      'Paint Brush',
      'Brush',
      'Blow Torch',
      'Desoldering Pump',
      'Knife/Blade',
      'Crowbar',
      'Spudger',
      'Hook',
      'Swiss Army Knife',
      'Magnetic Tool',
      'Claw Tool',
      'Telescopic Tool',
      'Pickup Tool',
      'Stylus Pen',
      'Ruler',
      'Gauge',
      'Pliers',
      'Wrench',
      'Hand Tool',
      'Wire Cutter',
      'Wire Stripper',

      'Thermal Imager',
      'Barcode Scanner',
      'Scanner',
      'Camera',

      'USB',
      'HDMI',
      'BNC',
      'DisplayPort',
      'Bluetooth',

      'Cordless',
      'Ratchet',
      'Remote Control',
      'Rechargeable',
      'Pre-crimped',

      'Drill Extension',
      'Drill Bit',
      'Adapter',

      'Probe',
      'Probe Tweezers',
      'Test Tweezers',
      'Test Clip',

      'Cutting Disc',
      'Dust Blower',
      'Accessory',
      'Attachment',

      'Router',

      'Clamp',
      'Vise', // US English
      'Vice', // UK English

      'Drill Press',

      'XH2.54',
      'Connector',

      'Solder Lugs',
      'Flux',
      'Gas',
      'Heat Shrink',
      'Consumable',

      'Mechanical Keyboard',
      'Keyboard',

      'Keyboard Drawer',
      'Drawer',
      'Tray',

      'UV Light',
      'Torch/Light',

      'Magnifying Glass',

      'Head-Mounted',

      'Safety Equipment',
      'Safety Switch',
      'Surge Protector',
      'Residual Current Device',

      'Safety Goggles',
      'Gloves',
      'Lab Coat',
      'Pocket Protector',
      'Badge Holder',

      'Step Ladder',
      'Book Holder',
      'Mirror',

      'Cloth',
      'Cleaning',
      'Disposable',

      'Pen',

      'Funnel',

      'Cable Tidy',

      'Abrasive',

      '❤️',

    ];

    if ( $category_order === null ) {

      //$category_order = array_flip( self::$category_list );

      $category_list = self::$category_list;

      sort( $category_list );

      $category_order = array_flip( $category_list );

    }

    return $category_order;

  }

}

class NullCategory extends Category {

  use NullValue;

}
