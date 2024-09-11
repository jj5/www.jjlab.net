<?php

//
// 2024-08-06 jj5 - STORAGE
//

equipment_define(
  EquipmentFeature::STORAGE,
  EquipmentClass::STORAGE,
);

  equipment_define(
    EquipmentFeature::DRAWERS,
    EquipmentFeature::STORAGE,
  );

  equipment_define(
    EquipmentFeature::SHELVES,
    EquipmentFeature::STORAGE,
  );

    equipment_define(
      EquipmentFeature::BOOKCASE,
      EquipmentFeature::SHELVES,
    );

  equipment_define(
    EquipmentFeature::RACK,
    EquipmentFeature::STORAGE,
  );

  equipment_define(
    EquipmentFeature::CABINET,
    EquipmentFeature::STORAGE,
  );

  equipment_define(
    EquipmentFeature::BOX,
    EquipmentFeature::STORAGE,
  );

  equipment_define(
    EquipmentFeature::BAG,
    EquipmentFeature::STORAGE,
  );

  equipment_define(
    EquipmentFeature::CASE,
    EquipmentFeature::STORAGE,
  );

  equipment_define(
    EquipmentFeature::CONTAINER,
    EquipmentFeature::STORAGE,
  );

  equipment_define(
    EquipmentFeature::ORGANIZER,
    EquipmentFeature::STORAGE,
  );

    equipment_define(
      EquipmentFeature::MAGAZINE_HOLDER,
      EquipmentFeature::ORGANIZER,
    );

  equipment_define(
    EquipmentFeature::TRAY,
    EquipmentClass::TRAY,
    EquipmentFeature::STORAGE,
  );

    equipment_define(
      EquipmentFeature::STAINLESS_STEEL_TRAY,
      EquipmentFeature::TRAY,
    );

    equipment_define(
      EquipmentFeature::MAGNETIC_TRAY,
      EquipmentFeature::TRAY,
      EquipmentAttribute::MAGNETIC,
    );

  equipment_define(
    EquipmentFeature::BIN,
    EquipmentFeature::STORAGE,
  );

  equipment_define(
    EquipmentFeature::BUCKET,
    EquipmentFeature::STORAGE,
  );

  equipment_define(
    EquipmentFeature::BASKET,
    EquipmentFeature::STORAGE,
  );

  equipment_define(
    EquipmentFeature::HOOK,
    EquipmentFeature::STORAGE,
  );

  equipment_define(
    EquipmentFeature::HANGER,
    EquipmentFeature::STORAGE,
  );

  equipment_define(
    EquipmentFeature::RAIL,
    EquipmentFeature::STORAGE,
  );

  equipment_define(
    EquipmentFeature::PEGBOARD,
    EquipmentFeature::STORAGE,
  );

  equipment_define(
    EquipmentFeature::DESKTOP,
    EquipmentFeature::STORAGE,
  );

  equipment_define(
    EquipmentFeature::BENCH,
    EquipmentFeature::STORAGE,
  );

//
// 2024-08-04 jj5 - FEATURE
//

equipment_define(
  EquipmentFeature::FEATURE,
  EquipmentClass::FEATURE,
);

  equipment_define(
    EquipmentFeature::LCD,
    EquipmentFeature::FEATURE,
  );

  equipment_define(
    EquipmentFeature::REMOTE_CONTROL,
    EquipmentFeature::FEATURE,
  );

  equipment_define(
    EquipmentFeature::XBOX,
    EquipmentFeature::FEATURE,
  );

  equipment_define(
    EquipmentFeature::STUDIO,
    EquipmentFeature::FEATURE,
  );

  equipment_define(
    EquipmentFeature::COSTUME,
    EquipmentFeature::FEATURE,
  );

//
// 2024-08-04 jj5 - ADAPTER
//

equipment_define(
  EquipmentFeature::ADAPTER,
  EquipmentClass::ADAPTER,
  EquipmentAttribute::ACCESSORY,
  EquipmentAttribute::ATTACHMENT,
);

  equipment_define(
    EquipmentFeature::ANGLE_SCREW_ADAPTER,
    EquipmentFeature::ADAPTER,
  );

  equipment_define(
    EquipmentFeature::XBOX_TO_HDMI_ADAPTER,
    EquipmentFeature::ADAPTER,
    EquipmentFeature::XBOX,
    EquipmentFeature::STUDIO,
  );

  equipment_define(
    EquipmentFeature::RCA_TO_HDMI_ADAPTER,
    EquipmentFeature::ADAPTER,
    EquipmentFeature::STUDIO,
  );

  equipment_define(
    EquipmentFeature::HDMI_TO_USB_ADAPTER,
    EquipmentFeature::ADAPTER,
    EquipmentFeature::STUDIO,
  );

  equipment_define(
    EquipmentFeature::SPLITTER,
    EquipmentFeature::ADAPTER,
    EquipmentFeature::STUDIO,
  );

    equipment_define(
      EquipmentFeature::HDMI_SPLITTER,
      EquipmentFeature::SPLITTER,
      EquipmentConnectivity::HDMI,
    );

  equipment_define(
    EquipmentFeature::UNIVERSAL_AC_ADAPER,
    EquipmentFeature::ADAPTER,
  );

//
// 2024-08-11 jj5 - CABLE
//

equipment_define(
  EquipmentFeature::CABLE,
  EquipmentClass::CABLE,
  EquipmentAttribute::ACCESSORY,
  EquipmentAttribute::ATTACHMENT,
);

//
// 2024-08-04 jj5 - MISC_TOOL
//

equipment_define(
  EquipmentFeature::REAMER,
  EquipmentClass::TOOL,
);

equipment_define(
  EquipmentFeature::PUNCH,
  EquipmentClass::TOOL,
);

  equipment_define(
    EquipmentFeature::HOLE_PUNCH,
    EquipmentFeature::PUNCH,
  );

equipment_define(
  EquipmentFeature::CAN_OPENER,
  EquipmentClass::TOOL,
);

equipment_define(
  EquipmentFeature::BOTTLE_OPENER,
  EquipmentClass::TOOL,
);

equipment_define(
  EquipmentFeature::WIRE_BENDER,
  EquipmentClass::TOOL,
);

equipment_define(
  EquipmentFeature::FISH_SCALER,
  EquipmentClass::TOOL,
);

equipment_define(
  EquipmentFeature::HOOK_DISGORGER,
  EquipmentClass::TOOL,
);

equipment_define(
  EquipmentFeature::NAIL_CLEANER,
  EquipmentClass::TOOL,
);

equipment_define(
  EquipmentFeature::CHISEL,
  EquipmentClass::TOOL,
);

equipment_define(
  EquipmentFeature::TOOTHPICK,
  EquipmentClass::TOOL,
);

equipment_define(
  EquipmentFeature::PIN,
  EquipmentClass::TOOL,
);

  equipment_define(
    EquipmentFeature::PINS,
    EquipmentFeature::PIN,
  );

    equipment_define(
      EquipmentFeature::SEWING_PINS,
      EquipmentFeature::PINS,
    );

equipment_define(
  EquipmentFeature::KEY_RING,
  EquipmentClass::TOOL,
);

equipment_define(
  EquipmentFeature::CORKSCREW,
  EquipmentClass::TOOL,
);

equipment_define(
  EquipmentFeature::DEMAGNETIZER,
  EquipmentClass::TOOL,
  EquipmentAttribute::MAGNETIC,
);

//
// 2024-08-06 jj5 - PEGBOARD_HOOK
//

equipment_define(
  EquipmentFeature::PEGBOARD_HOOK,
  EquipmentFeature::PEGBOARD,
  EquipmentAttribute::ACCESSORY,
  EquipmentAttribute::ATTACHMENT,
);

  equipment_define(
    EquipmentFeature::PEGBOARD_HOOK_SET,
    EquipmentFeature::PEGBOARD_HOOK,
  );

//
// 2024-08-04 jj5 - AWL
//

equipment_define(
  EquipmentFeature::AWL,
  EquipmentClass::TOOL,
);

  equipment_define(
    EquipmentFeature::SEWING_AWL,
    EquipmentFeature::AWL,
  );

//
// 2024-08-04 jj5 - SAW
//

equipment_define(
  EquipmentFeature::SAW,
  EquipmentClass::SAW,
);

  equipment_define(
    EquipmentFeature::WOOD_SAW,
    EquipmentFeature::SAW,
  );

  equipment_define(
    EquipmentFeature::METAL_SAW,
    EquipmentFeature::SAW,
  );

//
// 2024-08-04 jj5 - FILE
//

equipment_define(
  EquipmentFeature::FILE,
  EquipmentClass::TOOL,
);

  equipment_define(
    EquipmentFeature::NAIL_FILE,
    EquipmentFeature::FILE,
  );

  equipment_define(
    EquipmentFeature::METAL_FILE,
    EquipmentFeature::FILE,
  );

//
// 2024-08-04 jj5 - ABRASIVE
//

equipment_define(
  EquipmentFeature::ABRASIVE,
  EquipmentClass::ABRASIVE,
  EquipmentAttribute::CLEANING_EQUIPMENT,
);

  equipment_define(
    EquipmentFeature::SANDING_STICK,
    EquipmentFeature::ABRASIVE,
    // 2024-08-04 jj5 - THINK: are these consumable?
    //EquipmentAttribute::CONSUMABLE,
    EquipmentAttribute::HAND_TOOL,
  );

  equipment_define(
    EquipmentFeature::SANDPAPER,
    EquipmentFeature::ABRASIVE,
    EquipmentAttribute::CONSUMABLE,
    EquipmentAttribute::HAND_TOOL,
  );

//
// 2024-08-04 jj5 - LIGHT
//

equipment_define(
  EquipmentFeature::LIGHT,
  EquipmentClass::LIGHT,
);

  equipment_define(
    EquipmentFeature::LED_LIGHT,
    EquipmentFeature::LIGHT,
  );

    equipment_define(
      EquipmentFeature::USB_LED_LIGHT,
      EquipmentFeature::LED_LIGHT,
    );

  equipment_define(
    EquipmentFeature::TORCH,
    EquipmentFeature::LIGHT,
    EquipmentAttribute::HAND_TOOL,
  );

    equipment_define(
      EquipmentFeature::LED_TORCH,
      EquipmentFeature::TORCH,
    );

    equipment_define(
      EquipmentFeature::UV_LAMP,
      EquipmentFeature::TORCH,
    );

      equipment_define(
        EquipmentFeature::UV_CURING_LIGHT,
        EquipmentFeature::UV_LAMP,
      );

//
// 2024-08-03 jj5 - OSCILLOSCOPE
//

equipment_define(
  EquipmentFeature::OSCILLOSCOPE,
  EquipmentClass::SCOPE,
  EquipmentAttribute::TEST_EQUIPMENT,
  EquipmentAttribute::MEASURING_EQUIPMENT,
  EquipmentMeasure::VOLTAGE_DC,
  EquipmentMeasure::VOLTAGE_AC,
  EquipmentMeasure::TIME,
  EquipmentMeasure::FREQUENCY,
);

  equipment_define(
    EquipmentFeature::MIXED_SIGNAL_OSCILLOSCOPE,
    EquipmentFeature::OSCILLOSCOPE,
  );

  equipment_define(
    EquipmentFeature::DIGITAL_STORAGE_OSCILLOSCOPE,
    EquipmentFeature::OSCILLOSCOPE,
  );

//
// 2024-08-03 jj5 - ANALYZER
//

equipment_define(
  EquipmentFeature::SPECTRUM_ANALYZER,
  EquipmentClass::SPECTRUM_ANALYZER,
  EquipmentAttribute::TEST_EQUIPMENT,
  EquipmentAttribute::MEASURING_EQUIPMENT,
  EquipmentMeasure::FREQUENCY,
);

equipment_define(
  EquipmentFeature::LOGIC_ANALYZER,
  EquipmentClass::LOGIC_ANALYZER,
  EquipmentAttribute::TEST_EQUIPMENT,
);

  equipment_define(
    EquipmentFeature::USB_LOGIC_ANALYZER,
    EquipmentFeature::LOGIC_ANALYZER,
    EquipmentConnectivity::USB,
  );

equipment_define(
  EquipmentFeature::PROTOCOL_ANALYZER,
  EquipmentClass::PROTOCOL_ANALYZER,
  EquipmentAttribute::TEST_EQUIPMENT,
);

//
// 2024-08-03 jj5 - GENERATOR
//

equipment_define(
  EquipmentFeature::SIGNAL_GENERATOR,
  EquipmentClass::SIGNAL_GENERATOR,
  EquipmentAttribute::TEST_EQUIPMENT,
);

  equipment_define(
    EquipmentFeature::WAVEFORM_GENERATOR,
    EquipmentFeature::SIGNAL_GENERATOR,
  );

    equipment_define(
      EquipmentFeature::FUNCTION_GENERATOR,
      EquipmentFeature::WAVEFORM_GENERATOR,
    );

//
// 2024-08-03 jj5 - METER
//

equipment_define(
  EquipmentFeature::METER,
  EquipmentClass::METER,
  EquipmentAttribute::TEST_EQUIPMENT,
  EquipmentAttribute::MEASURING_EQUIPMENT,
);

  equipment_define(
    EquipmentFeature::DIGITAL_METER,
    EquipmentFeature::METER,
  );

  equipment_define(
    EquipmentFeature::VOLTMETER_AC,
    EquipmentFeature::METER,
    EquipmentMeasure::VOLTAGE_AC,
  );

  equipment_define(
    EquipmentFeature::VOLTMETER_DC,
    EquipmentFeature::METER,
    EquipmentMeasure::VOLTAGE_DC,
  );

    equipment_define(
      EquipmentFeature::BATTERY_TESTER,
      EquipmentFeature::VOLTMETER_DC,
    );

    equipment_define(
      EquipmentFeature::VOLTMETER,
      EquipmentFeature::METER,
      EquipmentFeature::VOLTMETER_AC,
      EquipmentFeature::VOLTMETER_DC,
    );

  equipment_define(
    EquipmentFeature::AMMETER_AC,
    EquipmentFeature::METER,
    EquipmentMeasure::CURRENT_AC,
  );

  equipment_define(
    EquipmentFeature::AMMETER_DC,
    EquipmentFeature::METER,
    EquipmentMeasure::CURRENT_DC,
  );

    equipment_define(
      EquipmentFeature::AMMETER,
      EquipmentFeature::METER,
      EquipmentFeature::AMMETER_AC,
      EquipmentFeature::AMMETER_DC,
    );

  equipment_define(
    EquipmentFeature::OHMMETER,
    EquipmentFeature::METER,
    EquipmentMeasure::RESISTANCE,
  );

  equipment_define(
    EquipmentFeature::CAPACITANCE_METER,
    EquipmentFeature::METER,
    EquipmentMeasure::CAPACITANCE,
  );

  equipment_define(
    EquipmentFeature::FREQUENCY_COUNTER,
    EquipmentFeature::METER,
    EquipmentMeasure::FREQUENCY,
  );

  equipment_define(
    EquipmentFeature::CONTINUITY_TESTER,
    EquipmentFeature::METER,
    EquipmentMeasure::CONTINUITY,
  );

  equipment_define(
    EquipmentFeature::DIODE_TESTER,
    EquipmentFeature::METER,
  );

  equipment_define(
    EquipmentFeature::TRANSISTOR_TESTER,
    EquipmentFeature::METER,
  );

  equipment_define(
    EquipmentFeature::THERMOMETER,
    EquipmentClass::THERMOMETER,
    EquipmentFeature::METER,
    EquipmentMeasure::TEMPERATURE,
  );

    equipment_define(
      EquipmentFeature::DIGITAL_THERMOMETER,
      EquipmentFeature::THERMOMETER,
    );

  equipment_define(
    EquipmentFeature::COUNTER_TOTALIZER,
    EquipmentFeature::METER,
    EquipmentMeasure::COUNT,
  );

  equipment_define(
    EquipmentFeature::COMPONENT_TESTER,
    EquipmentFeature::METER,
  );

  equipment_define(
    EquipmentFeature::SMD_TESTER,
    EquipmentFeature::METER,
  );

  equipment_define(
    EquipmentFeature::LCR_METER,
    EquipmentFeature::METER,
  );

  equipment_define(
    EquipmentFeature::ESR_METER,
    EquipmentFeature::METER,
  );

  equipment_define(
    EquipmentFeature::MULTIMETER,
    EquipmentClass::MULTIMETER,
    EquipmentFeature::METER,
  );

    equipment_define(
      EquipmentFeature::DIGITAL_MULTIMETER,
      EquipmentFeature::MULTIMETER,
    );

    equipment_define(
      EquipmentFeature::HANDHELD_MULTIMETER,
      EquipmentFeature::MULTIMETER,
      EquipmentAttribute::HAND_TOOL,
    );

    equipment_define(
      EquipmentFeature::BENCH_MULTIMETER,
      EquipmentFeature::MULTIMETER,
      EquipmentAttribute::BENCH_EQUIPMENT,
    );

    equipment_define(
      EquipmentFeature::OSCILLOSCOPE_SIGNAL_GENERATOR_COMPONENT_TESTER,
      EquipmentClass::SCOPE,
      EquipmentFeature::MULTIMETER,
      EquipmentFeature::DIGITAL_STORAGE_OSCILLOSCOPE,
      EquipmentFeature::SIGNAL_GENERATOR,
      EquipmentFeature::WAVEFORM_GENERATOR,
      EquipmentFeature::COMPONENT_TESTER,
      EquipmentFeature::TRANSISTOR_TESTER,
      EquipmentFeature::LCR_METER,
    );

  equipment_define(
    EquipmentFeature::AIR_QUALITY_METER,
    EquipmentClass::METER,
    EquipmentFeature::METER,
  );

//
// 2024-08-03 jj5 - PROBE
//

equipment_define(
  EquipmentFeature::PROBE,
  EquipmentClass::PROBE,
  EquipmentAttribute::ACCESSORY,
  EquipmentAttribute::ATTACHMENT,
  EquipmentAttribute::MEASURING_EQUIPMENT,
  EquipmentAttribute::TEST_EQUIPMENT,
);

  equipment_define(
    EquipmentFeature::LOGIC_PROBE,
    EquipmentFeature::PROBE,
  );

  equipment_define(
    EquipmentFeature::PROBE_TWEEZERS,
    EquipmentFeature::PROBE,
    EquipmentFeature::TWEEZERS,
  );

//
// 2024-08-06 jj5 - HEADPHONES
//

equipment_define(
  EquipmentFeature::HEADPHONES,
  EquipmentClass::HEADPHONES,
  EquipmentAttribute::COMPUTER_EQUIPMENT,
  EquipmentAttribute::PERIPHERAL,
);

//
// 2024-08-06 jj5 - DRIVE
//

equipment_define(
  EquipmentFeature::DRIVE,
  EquipmentClass::DRIVE,
  EquipmentAttribute::COMPUTER_EQUIPMENT,
);

  equipment_define(
    EquipmentFeature::USB_DRIVE,
    EquipmentFeature::DRIVE,
    EquipmentConnectivity::USB,
  );

  equipment_define(
    EquipmentFeature::SSD_DRIVE,
    EquipmentFeature::DRIVE,
  );

    equipment_define(
      EquipmentFeature::USB_SSD_DRIVE,
      EquipmentFeature::SSD_DRIVE,
      EquipmentFeature::USB_DRIVE,
    );

  equipment_define(
    EquipmentFeature::HDD_DRIVE,
    EquipmentFeature::DRIVE,
  );

    equipment_define(
      EquipmentFeature::USB_HDD_DRIVE,
      EquipmentFeature::HDD_DRIVE,
      EquipmentFeature::USB_DRIVE,
    );

  equipment_define(
    EquipmentFeature::CDROM_DRIVE,
    EquipmentFeature::DRIVE,
  );

    equipment_define(
      EquipmentFeature::USB_CDROM_DRIVE,
      EquipmentFeature::CDROM_DRIVE,
      EquipmentFeature::USB_DRIVE,
    );

  equipment_define(
    EquipmentFeature::DVD_DRIVE,
    EquipmentFeature::DRIVE,
  );

    equipment_define(
      EquipmentFeature::USB_DVD_DRIVE,
      EquipmentFeature::DVD_DRIVE,
      EquipmentFeature::USB_DRIVE,
    );

  equipment_define(
    EquipmentFeature::BLU_RAY_DRIVE,
    EquipmentFeature::DRIVE,
  );

    equipment_define(
      EquipmentFeature::USB_BLU_RAY_DRIVE,
      EquipmentFeature::BLU_RAY_DRIVE,
      EquipmentFeature::USB_DRIVE,
    );

  equipment_define(
    EquipmentFeature::FLOPPY_DRIVE,
    EquipmentFeature::DRIVE,
  );

    equipment_define(
      EquipmentFeature::USB_FLOPPY_DRIVE,
      EquipmentFeature::FLOPPY_DRIVE,
      EquipmentFeature::USB_DRIVE,
    );

//
// 2024-08-04 jj5 - SWITCH
//

equipment_define(
  EquipmentFeature::SWITCH,
  EquipmentClass::SWITCH,
  EquipmentFeature::STUDIO,
  EquipmentAttribute::BENCH_EQUIPMENT,
  EquipmentAttribute::COMPUTER_EQUIPMENT,
);

  equipment_define(
    EquipmentFeature::ETHERNET_SWITCH,
    EquipmentFeature::SWITCH,
    EquipmentConnectivity::ETHERNET,
  );

    equipment_define(
      EquipmentFeature::UNMANAGED_ETHERNET_SWITCH,
      EquipmentFeature::ETHERNET_SWITCH,
    );

  equipment_define(
    EquipmentFeature::USB_SWITCH,
    EquipmentFeature::SWITCH,
    EquipmentConnectivity::USB,
    EquipmentAttribute::PERIPHERAL,
  );

  equipment_define(
    EquipmentFeature::HDMI_SWITCH,
    EquipmentFeature::SWITCH,
    EquipmentConnectivity::HDMI,
    EquipmentAttribute::PERIPHERAL,
  );

  equipment_define(
    EquipmentFeature::DISPLAY_PORT_SWITCH,
    EquipmentFeature::SWITCH,
    EquipmentConnectivity::DISPLAY_PORT,
    EquipmentAttribute::PERIPHERAL,
  );

  equipment_define(
    EquipmentFeature::KVM,
    EquipmentClass::KVM,
    EquipmentFeature::SWITCH,
    EquipmentAttribute::PERIPHERAL,
  );

    equipment_define(
      EquipmentFeature::USB_KVM,
      EquipmentFeature::KVM,
      EquipmentFeature::USB_SWITCH,
    );

      equipment_define(
        EquipmentFeature::HDMI_KVM,
        EquipmentFeature::USB_KVM,
        EquipmentFeature::HDMI_SWITCH,
      );

      equipment_define(
        EquipmentFeature::DISPLAY_PORT_KVM,
        EquipmentFeature::USB_KVM,
        EquipmentFeature::DISPLAY_PORT_SWITCH,
      );

//
// 2024-08-06 jj5 - HUB
//

equipment_define(
  EquipmentFeature::HUB,
  EquipmentClass::HUB,
  EquipmentFeature::STUDIO,
  EquipmentAttribute::PERIPHERAL,
);

  equipment_define(
    EquipmentFeature::USB_HUB,
    EquipmentFeature::HUB,
    EquipmentConnectivity::USB,
  );

  equipment_define(
    EquipmentFeature::ETHERNET_HUB,
    EquipmentFeature::HUB,
    EquipmentConnectivity::ETHERNET,
  );

//
// 2024-08-06 jj5 - POINTING_DEVICE
//

equipment_define(
  EquipmentFeature::POINTING_DEVICE,
  EquipmentClass::POINTING_DEVICE,
  EquipmentFeature::STUDIO,
  EquipmentAttribute::COMPUTER_EQUIPMENT,
  EquipmentAttribute::PERIPHERAL,
);

  equipment_define(
    EquipmentFeature::MOUSE,
    EquipmentClass::MOUSE,
    EquipmentFeature::POINTING_DEVICE,
  );

    equipment_define(
      EquipmentFeature::USB_MOUSE,
      EquipmentFeature::MOUSE,
      EquipmentConnectivity::USB,
    );

  equipment_define(
    EquipmentFeature::TRACKBALL,
    EquipmentClass::TRACKBALL,
    EquipmentFeature::POINTING_DEVICE,
  );

    equipment_define(
      EquipmentFeature::USB_TRACKBALL,
      EquipmentFeature::TRACKBALL,
      EquipmentConnectivity::USB,
    );

//
// 2024-08-04 jj5 - KEYBOARD
//

equipment_define(
  EquipmentFeature::KEYBOARD,
  EquipmentClass::KEYBOARD,
  EquipmentAttribute::ACCESSORY,
  EquipmentAttribute::COMPUTER_EQUIPMENT,
  EquipmentAttribute::PERIPHERAL,
);

  equipment_define(
    EquipmentFeature::MECHANICAL_KEYBOARD,
    EquipmentFeature::KEYBOARD,
  );

  equipment_define(
    EquipmentFeature::USB_KEYBOARD,
    EquipmentFeature::KEYBOARD,
    EquipmentConnectivity::USB,
  );

//
// 2024-08-04 jj5 - FURNITURE
//

equipment_define(
  EquipmentFeature::FURNITURE,
  EquipmentClass::FURNITURE,
);

  equipment_define(
    EquipmentFeature::DRAWER,
    EquipmentClass::DRAWER,
    EquipmentFeature::FURNITURE,
  );

    equipment_define(
      EquipmentFeature::KEYBOARD_DRAWER,
      EquipmentFeature::DRAWER,
    );

  equipment_define(
    EquipmentFeature::STEP_LADDER,
    EquipmentFeature::FURNITURE,
  );

//
// 2024-08-04 jj5 - CAMERA
//

equipment_define(
  EquipmentFeature::CAMERA,
  EquipmentClass::CAMERA,
);

  equipment_define(
    EquipmentFeature::VIDEO_CAMERA,
    EquipmentFeature::CAMERA,
  );

    equipment_define(
      EquipmentFeature::THERMAL_IMAGER,
      EquipmentClass::THERMAL_IMAGER,
      EquipmentFeature::VIDEO_CAMERA,
    );

    equipment_define(
      EquipmentFeature::USB_CAMERA,
      EquipmentFeature::VIDEO_CAMERA,
      EquipmentFeature::STUDIO,
      EquipmentConnectivity::USB,
    );

//
// 2024-08-04 jj5 - CHUMBY
//

equipment_define(
  EquipmentFeature::CHUMBY,
  EquipmentClass::CHUMBY,
  EquipmentAttribute::COMPUTER_EQUIPMENT,
  EquipmentAttribute::PERIPHERAL,
);

//
// 2024-08-04 jj5 - ROTARY_TOOL
//

equipment_define(
  EquipmentFeature::ROTARY_TOOL,
  EquipmentClass::ROTARY_TOOL,
  EquipmentAttribute::HAND_TOOL,
);

//
// 2024-08-04 jj5 - ROTARY_TOOL_ACCESSORY
//

equipment_define(
  EquipmentFeature::ROTARY_TOOL_ACCESSORY,
  EquipmentClass::ROTARY_TOOL,
  EquipmentAttribute::ACCESSORY,
  EquipmentAttribute::ATTACHMENT,
);

  equipment_define(
    EquipmentFeature::ROTARY_TOOL_ACCESSORY_SET,
    EquipmentFeature::ROTARY_TOOL_ACCESSORY,
  );

  equipment_define(
    EquipmentFeature::ROTARY_DRILL_CHUCK,
    EquipmentFeature::ROTARY_TOOL_ACCESSORY,
  );

  equipment_define(
    EquipmentFeature::DREMEL_PIVOT_LIGHT,
    EquipmentFeature::ROTARY_TOOL_ACCESSORY,
    EquipmentFeature::LED_LIGHT,
  );

  equipment_define(
    EquipmentFeature::DREMEL_421_POLISHING_COMPOUND,
    EquipmentFeature::ROTARY_TOOL_ACCESSORY,
  );

  equipment_define(
    EquipmentFeature::ROTARY_TOOL_BIT,
    EquipmentFeature::ROTARY_TOOL_ACCESSORY,
  );

    equipment_define(
      EquipmentFeature::DRILL_BIT,
      EquipmentFeature::ROTARY_TOOL_BIT,
    );

      equipment_define(
        EquipmentFeature::DRILL_BITS,
        EquipmentFeature::DRILL_BIT,
      );

      equipment_define(
        EquipmentFeature::DRILL_BIT_2,
        EquipmentFeature::DRILL_BIT,
      );

      equipment_define(
        EquipmentFeature::DRILL_BIT_2_5,
        EquipmentFeature::DRILL_BIT,
      );

      equipment_define(
        EquipmentFeature::DRILL_BIT_3,
        EquipmentFeature::DRILL_BIT,
      );

      equipment_define(
        EquipmentFeature::DRILL_BIT_3_5,
        EquipmentFeature::DRILL_BIT,
      );

      equipment_define(
        EquipmentFeature::DRILL_BIT_4,
        EquipmentFeature::DRILL_BIT,
      );

      equipment_define(
        EquipmentFeature::DRILL_BIT_5,
        EquipmentFeature::DRILL_BIT,
      );

      equipment_define(
        EquipmentFeature::DRILL_BIT_5_5,
        EquipmentFeature::DRILL_BIT,
      );

      equipment_define(
        EquipmentFeature::DRILL_BIT_6,
        EquipmentFeature::DRILL_BIT,
      );

      equipment_define(
        EquipmentFeature::DRILL_BIT_7,
        EquipmentFeature::DRILL_BIT,
      );

      equipment_define(
        EquipmentFeature::DRILL_BIT_8,
        EquipmentFeature::DRILL_BIT,
      );

      equipment_define(
        EquipmentFeature::DRILL_BIT_10,
        EquipmentFeature::DRILL_BIT,
      );

      equipment_define(
        EquipmentFeature::WOOD_DRILL_BIT,
        EquipmentFeature::DRILL_BIT,
      );

        equipment_define(
          EquipmentFeature::WOOD_DRILL_BIT_2,
          EquipmentFeature::DRILL_BIT_2,
          EquipmentFeature::WOOD_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::WOOD_DRILL_BIT_2_5,
          EquipmentFeature::DRILL_BIT_2_5,
          EquipmentFeature::WOOD_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::WOOD_DRILL_BIT_3,
          EquipmentFeature::DRILL_BIT_3,
          EquipmentFeature::WOOD_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::WOOD_DRILL_BIT_3_5,
          EquipmentFeature::DRILL_BIT_3_5,
          EquipmentFeature::WOOD_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::WOOD_DRILL_BIT_4,
          EquipmentFeature::DRILL_BIT_4,
          EquipmentFeature::WOOD_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::WOOD_DRILL_BIT_5,
          EquipmentFeature::DRILL_BIT_5,
          EquipmentFeature::WOOD_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::WOOD_DRILL_BIT_5_5,
          EquipmentFeature::DRILL_BIT_5_5,
          EquipmentFeature::WOOD_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::WOOD_DRILL_BIT_6,
          EquipmentFeature::DRILL_BIT_6,
          EquipmentFeature::WOOD_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::WOOD_DRILL_BIT_7,
          EquipmentFeature::DRILL_BIT_7,
          EquipmentFeature::WOOD_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::WOOD_DRILL_BIT_8,
          EquipmentFeature::DRILL_BIT_8,
          EquipmentFeature::WOOD_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::WOOD_DRILL_BIT_10,
          EquipmentFeature::DRILL_BIT_10,
          EquipmentFeature::WOOD_DRILL_BIT,
        );

      equipment_define(
        EquipmentFeature::MASONRY_DRILL_BIT,
        EquipmentFeature::DRILL_BIT,
      );

        equipment_define(
          EquipmentFeature::MASONRY_DRILL_BIT_2,
          EquipmentFeature::DRILL_BIT_2,
          EquipmentFeature::MASONRY_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::MASONRY_DRILL_BIT_2_5,
          EquipmentFeature::DRILL_BIT_2_5,
          EquipmentFeature::MASONRY_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::MASONRY_DRILL_BIT_3,
          EquipmentFeature::DRILL_BIT_3,
          EquipmentFeature::MASONRY_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::MASONRY_DRILL_BIT_3_5,
          EquipmentFeature::DRILL_BIT_3_5,
          EquipmentFeature::MASONRY_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::MASONRY_DRILL_BIT_4,
          EquipmentFeature::DRILL_BIT_4,
          EquipmentFeature::MASONRY_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::MASONRY_DRILL_BIT_5,
          EquipmentFeature::DRILL_BIT_5,
          EquipmentFeature::MASONRY_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::MASONRY_DRILL_BIT_5_5,
          EquipmentFeature::DRILL_BIT_5_5,
          EquipmentFeature::MASONRY_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::MASONRY_DRILL_BIT_6,
          EquipmentFeature::DRILL_BIT_6,
          EquipmentFeature::MASONRY_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::MASONRY_DRILL_BIT_7,
          EquipmentFeature::DRILL_BIT_7,
          EquipmentFeature::MASONRY_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::MASONRY_DRILL_BIT_8,
          EquipmentFeature::DRILL_BIT_8,
          EquipmentFeature::MASONRY_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::MASONRY_DRILL_BIT_10,
          EquipmentFeature::DRILL_BIT_10,
          EquipmentFeature::MASONRY_DRILL_BIT,
        );

      equipment_define(
        EquipmentFeature::HSS_DRILL_BIT,
        EquipmentFeature::DRILL_BIT,
      );

        equipment_define(
          EquipmentFeature::HSS_DRILL_BIT_2,
          EquipmentFeature::DRILL_BIT_2,
          EquipmentFeature::HSS_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::HSS_DRILL_BIT_2_5,
          EquipmentFeature::DRILL_BIT_2_5,
          EquipmentFeature::HSS_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::HSS_DRILL_BIT_3,
          EquipmentFeature::DRILL_BIT_3,
          EquipmentFeature::HSS_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::HSS_DRILL_BIT_3_5,
          EquipmentFeature::DRILL_BIT_3_5,
          EquipmentFeature::HSS_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::HSS_DRILL_BIT_4,
          EquipmentFeature::DRILL_BIT_4,
          EquipmentFeature::HSS_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::HSS_DRILL_BIT_5,
          EquipmentFeature::DRILL_BIT_5,
          EquipmentFeature::HSS_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::HSS_DRILL_BIT_5_5,
          EquipmentFeature::DRILL_BIT_5_5,
          EquipmentFeature::HSS_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::HSS_DRILL_BIT_6,
          EquipmentFeature::DRILL_BIT_6,
          EquipmentFeature::HSS_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::HSS_DRILL_BIT_7,
          EquipmentFeature::DRILL_BIT_7,
          EquipmentFeature::HSS_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::HSS_DRILL_BIT_8,
          EquipmentFeature::DRILL_BIT_8,
          EquipmentFeature::HSS_DRILL_BIT,
        );

        equipment_define(
          EquipmentFeature::HSS_DRILL_BIT_10,
          EquipmentFeature::DRILL_BIT_10,
          EquipmentFeature::HSS_DRILL_BIT,
        );

      equipment_define(
        EquipmentFeature::DREMEL_150_DRILL_BIT,
        EquipmentFeature::DRILL_BIT,
      );

      equipment_define(
        EquipmentFeature::DRILL_EXTENSION,
        EquipmentFeature::DRILL_BIT,
      );

        equipment_define(
          EquipmentFeature::DRILL_BIT_EXTENSION,
          EquipmentFeature::DRILL_EXTENSION,
          EquipmentFeature::ADAPTER,
        );

      equipment_define(
        EquipmentFeature::DEBURRING_DRILL_BIT,
        EquipmentFeature::DRILL_BIT,
      );

    equipment_define(
      EquipmentFeature::ROTARY_ENGRAVING_BIT,
      EquipmentFeature::ROTARY_TOOL_BIT,
    );

      equipment_define(
        EquipmentFeature::DREMEL_107_ENGRAVING_BIT,
        EquipmentFeature::ROTARY_ENGRAVING_BIT,
      );

    equipment_define(
      EquipmentFeature::ROTARY_CARVING_BIT,
      EquipmentFeature::ROTARY_TOOL_BIT,
    );

      equipment_define(
        EquipmentFeature::DREMEL_191_CARVING_BIT,
        EquipmentFeature::ROTARY_CARVING_BIT,
      );

    equipment_define(
      EquipmentFeature::ROTARY_CUTTING_ACCESSORY,
      EquipmentFeature::ROTARY_TOOL_BIT,
    );

      equipment_define(
        EquipmentFeature::ROTARY_CUTTING_ACCESSORY_SET,
        EquipmentFeature::ROTARY_CUTTING_ACCESSORY,
      );

      equipment_define(
        EquipmentFeature::ROTARY_MILLING_CUTTER,
        EquipmentFeature::ROTARY_CUTTING_ACCESSORY,
      );

      equipment_define(
        EquipmentFeature::DREMEL_561_MULTI_PURPOSE_CUTTING_BIT,
        EquipmentFeature::ROTARY_CUTTING_ACCESSORY,
      );

      equipment_define(
        EquipmentFeature::DREMEL_565_MULTI_PURPOSE_CUTTING_KIT,
        EquipmentFeature::ROTARY_CUTTING_ACCESSORY,
      );

      equipment_define(
        EquipmentFeature::ROTARY_CUTTING_DISC,
        EquipmentFeature::ROTARY_CUTTING_ACCESSORY,
      );

        equipment_define(
          EquipmentFeature::DREMEL_EZ456_METAL_CUT_OFF_WHEEL,
          EquipmentFeature::ROTARY_CUTTING_DISC,
        );

        equipment_define(
          EquipmentFeature::DREMEL_EZ476_PLASTIC_CUT_OFF_WHEEL,
          EquipmentFeature::ROTARY_CUTTING_DISC,
        );

        equipment_define(
          EquipmentFeature::DREMEL_EZ409_THIN_CUT_OFF_WHEEL,
          EquipmentFeature::ROTARY_CUTTING_DISC,
        );

        equipment_define(
          EquipmentFeature::CARBIDE_CUTTING_WHEEL,
          EquipmentFeature::ROTARY_CUTTING_DISC,
        );

          equipment_define(
            EquipmentFeature::DREMEL_EZ544_CARBIDE_CUTTING_WHEEL,
            EquipmentFeature::CARBIDE_CUTTING_WHEEL,
          );

        equipment_define(
          EquipmentFeature::DIAMOND_CUTTING_WHEEL,
          EquipmentFeature::ROTARY_CUTTING_DISC,
        );

          equipment_define(
            EquipmentFeature::DREMEL_EZ545_DIAMOND_CUTTING_WHEEL,
            EquipmentFeature::DIAMOND_CUTTING_WHEEL,
          );

        equipment_define(
          EquipmentFeature::HSS_WOOD_CUTTING_SAW_BLADE_DISC,
          EquipmentFeature::ROTARY_CUTTING_DISC,
        );

        equipment_define(
          EquipmentFeature::RESIN_CUTTING_WHEEL,
          EquipmentFeature::ROTARY_CUTTING_DISC,
        );

        equipment_define(
          EquipmentFeature::RED_RESIN_CUTTING_WHEEL,
          EquipmentFeature::ROTARY_CUTTING_DISC,
        );

    equipment_define(
      EquipmentFeature::ROTARY_POLISHING_ACCESSORY,
      EquipmentFeature::ROTARY_TOOL_BIT,
    );

      equipment_define(
        EquipmentFeature::ROTARY_POLISHING_WOOL_WHEEL,
        EquipmentFeature::ROTARY_POLISHING_ACCESSORY,
      );

      equipment_define(
        EquipmentFeature::ROTARY_POLISHING_CLOTH_WHEEL,
        EquipmentFeature::ROTARY_POLISHING_ACCESSORY,
      );

        equipment_define(
          EquipmentFeature::DREMEL_432E_CLOTH_POLISHING_WHEEL,
          EquipmentFeature::ROTARY_POLISHING_CLOTH_WHEEL,
        );

      equipment_define(
        EquipmentFeature::ROTARY_POLISHING_FELT_WHEEL,
        EquipmentFeature::ROTARY_POLISHING_ACCESSORY,
      );

        equipment_define(
          EquipmentFeature::DREMEL_414_FELT_POLISHING_WHEEL,
          EquipmentFeature::ROTARY_POLISHING_FELT_WHEEL,
        );

        equipment_define(
          EquipmentFeature::DREMEL_429_FELT_POLISHING_WHEEL,
          EquipmentFeature::ROTARY_POLISHING_FELT_WHEEL,
        );

    equipment_define(
      EquipmentFeature::ROTARY_BRUSH_ACCESSORY,
      EquipmentFeature::ROTARY_TOOL_BIT,
    );

      equipment_define(
        EquipmentFeature::ROTARY_NYLON_BRUSH,
        EquipmentFeature::ROTARY_BRUSH_ACCESSORY,
      );

        equipment_define(
          EquipmentFeature::ROTARY_ABRASIVE_BRUSH,
          EquipmentFeature::ROTARY_NYLON_BRUSH,
          EquipmentFeature::ABRASIVE,
        );

        equipment_define(
          EquipmentFeature::DREMEL_403_NYLON_BRUSH,
          EquipmentFeature::ROTARY_NYLON_BRUSH,
        );

      equipment_define(
        EquipmentFeature::ROTARY_WIRE_BRUSH,
        EquipmentFeature::ROTARY_BRUSH_ACCESSORY,
        EquipmentFeature::ABRASIVE,
      );

        equipment_define(
          EquipmentFeature::DREMEL_428_CARBON_STEEL_BRUSH,
          EquipmentFeature::ROTARY_WIRE_BRUSH,
        );

    equipment_define(
      EquipmentFeature::ROTARY_GRINDING_ACCESSORY,
      EquipmentFeature::ROTARY_TOOL_BIT,
    );

      equipment_define(
        EquipmentFeature::ROTARY_GRINDING_RUBBER,
        EquipmentFeature::ROTARY_GRINDING_ACCESSORY,
      );

      equipment_define(
        EquipmentFeature::ROTARY_GRINDING_BURR,
        EquipmentFeature::ROTARY_GRINDING_ACCESSORY,
      );

      equipment_define(
        EquipmentFeature::ROTARY_GRINDING_STONE,
        EquipmentFeature::ROTARY_GRINDING_ACCESSORY,
      );

        equipment_define(
          EquipmentFeature::DREMEL_8193_ALUMINUM_OXIDE_GRINDING_STONE,
          EquipmentFeature::ROTARY_GRINDING_STONE,
        );

        equipment_define(
          EquipmentFeature::DREMEL_84922_SILICON_CARBIDE_GRINDING_STONE,
          EquipmentFeature::ROTARY_GRINDING_STONE,
        );

        equipment_define(
          EquipmentFeature::DREMEL_932_ALUMINUM_OXIDE_GRINDING_STONE,
          EquipmentFeature::ROTARY_GRINDING_STONE,
        );

        equipment_define(
          EquipmentFeature::ROTARY_SHARPENING_STONE,
          EquipmentFeature::ROTARY_GRINDING_STONE,
        );

    equipment_define(
      EquipmentFeature::ROTARY_SANDING_ACCESSORY,
      EquipmentFeature::ROTARY_TOOL_BIT,
    );

      equipment_define(
        EquipmentFeature::ROTARY_SANDING_DISC,
        EquipmentFeature::ROTARY_SANDING_ACCESSORY,
      );

        equipment_define(
          EquipmentFeature::DREMEL_EZ411_SANDING_DISC,
          EquipmentFeature::ROTARY_SANDING_DISC,
        );

        equipment_define(
          EquipmentFeature::DREMEL_EZ411SA_SANDING_DISC,
          EquipmentFeature::ROTARY_SANDING_DISC,
        );

        equipment_define(
          EquipmentFeature::DREMEL_EZ412_SANDING_DISC,
          EquipmentFeature::ROTARY_SANDING_DISC,
        );

        equipment_define(
          EquipmentFeature::DREMEL_EZ412SA_SANDING_DISC,
          EquipmentFeature::ROTARY_SANDING_DISC,
        );

        equipment_define(
          EquipmentFeature::DREMEL_EZ413_SANDING_DISC,
          EquipmentFeature::ROTARY_SANDING_DISC,
        );

        equipment_define(
          EquipmentFeature::DREMEL_EZ413SA_SANDING_DISC,
          EquipmentFeature::ROTARY_SANDING_DISC,
        );

      equipment_define(
        EquipmentFeature::ROTARY_SANDING_BAND,
        EquipmentFeature::ROTARY_SANDING_ACCESSORY,
      );

        equipment_define(
          EquipmentFeature::DREMEL_407_60_GRIT_SANDING_BAND,
          EquipmentFeature::ROTARY_SANDING_BAND,
        );

        equipment_define(
          EquipmentFeature::DREMEL_408_60_GRIT_SANDING_BAND,
          EquipmentFeature::ROTARY_SANDING_BAND,
        );

        equipment_define(
          EquipmentFeature::DREMEL_432_120_GRIT_SANDING_BAND,
          EquipmentFeature::ROTARY_SANDING_BAND,
        );

        equipment_define(
          EquipmentFeature::DREMEL_445_240_GRIT_SANDING_BAND,
          EquipmentFeature::ROTARY_SANDING_BAND,
        );

      equipment_define(
        EquipmentFeature::FINISHING_ABRASIVE_BUFF,
        EquipmentFeature::ROTARY_SANDING_ACCESSORY,
        EquipmentFeature::ABRASIVE,
      );

        equipment_define(
          EquipmentFeature::DREMEL_511E_FINISHING_ABRASIVE_BUFF,
          EquipmentFeature::FINISHING_ABRASIVE_BUFF,
        );

        equipment_define(
          EquipmentFeature::DREMEL_512E_FINISHING_ABRASIVE_BUFF,
          EquipmentFeature::FINISHING_ABRASIVE_BUFF,
        );

      equipment_define(
        EquipmentFeature::ROTARY_SANDPAPER_WHEEL,
        EquipmentFeature::ROTARY_SANDING_ACCESSORY,
      );

    equipment_define(
      EquipmentFeature::ROTARY_TOOL_MANDREL,
      EquipmentFeature::ROTARY_TOOL_BIT,
    );

      equipment_define(
        EquipmentFeature::DREMEL_401_POLISHING_BIT_MANDREL,
        EquipmentFeature::ROTARY_TOOL_MANDREL,
      );

      equipment_define(
        EquipmentFeature::DREMEL_EZ402_EZ_LOCK_MANDREL,
        EquipmentFeature::ROTARY_TOOL_MANDREL,
      );

      equipment_define(
        EquipmentFeature::DRUM_SANDING_MANDREL,
        EquipmentFeature::ROTARY_TOOL_MANDREL,
      );

        equipment_define(
          EquipmentFeature::DREMEL_EZ407_EZ_DRUM_MANDREL,
          EquipmentFeature::DRUM_SANDING_MANDREL,
        );

      equipment_define(
        EquipmentFeature::CUTTING_WHEEL_MANDREL,
        EquipmentFeature::ROTARY_TOOL_MANDREL,
      );

  equipment_define(
    EquipmentFeature::ROTARY_TOOL_DUST_BLOWER,
    EquipmentFeature::ROTARY_TOOL_ACCESSORY,
  );


//
// 2024-08-04 jj5 - ROUTER
//

equipment_define(
  EquipmentFeature::ROUTER,
  EquipmentClass::ROUTER,
);

  equipment_define(
    EquipmentFeature::PLUNGE_ROUTER,
    EquipmentFeature::ROUTER,
  );

//
// 2024-08-04 jj5 - CLAMP
//

equipment_define(
  EquipmentFeature::CLAMP,
  EquipmentClass::CLAMP,
);

  equipment_define(
    EquipmentFeature::PCB_CLAMP,
    EquipmentFeature::CLAMP,
  );

  equipment_define(
    EquipmentFeature::VISE,
    EquipmentFeature::CLAMP,
  );

    equipment_define(
      EquipmentFeature::MULTI_VISE,
      EquipmentFeature::VISE,
    );

    equipment_define(
      EquipmentFeature::BENCH_VISE,
      EquipmentFeature::VISE,
      EquipmentAttribute::BENCH_EQUIPMENT,
    );

    equipment_define(
      EquipmentFeature::VACUUM_VISE,
      EquipmentFeature::VISE,
    );

//
// 2024-08-06 jj5 - SIGN
//

equipment_define(
  EquipmentFeature::SIGN,
  EquipmentClass::SIGN,
);

  equipment_define(
    EquipmentFeature::ON_AIR_SIGN,
    EquipmentFeature::SIGN,
    EquipmentFeature::STUDIO,
  );

//
// 2024-08-04 jj5 - DRILL_PRESS
//

equipment_define(
  EquipmentFeature::DRILL_PRESS,
  EquipmentClass::DRILL_PRESS,
  EquipmentAttribute::BENCH_EQUIPMENT,
);

//
// 2024-08-04 jj5 - DISPLAY
//

equipment_define(
  EquipmentFeature::DISPLAY,
  EquipmentClass::DISPLAY,
  EquipmentFeature::STUDIO,
);

  equipment_define(
    EquipmentFeature::MONITOR,
    EquipmentFeature::DISPLAY,
    EquipmentAttribute::COMPUTER_EQUIPMENT,
    EquipmentAttribute::PERIPHERAL,
  );

    equipment_define(
      EquipmentFeature::HDMI_LCD,
      EquipmentFeature::MONITOR,
      EquipmentFeature::LCD,
      EquipmentConnectivity::HDMI,
    );

  equipment_define(
    EquipmentFeature::TELEVISION,
    EquipmentClass::TV,
    EquipmentFeature::DISPLAY,
  );

    equipment_define(
      EquipmentFeature::TV,
      EquipmentClass::TV,
      EquipmentFeature::TELEVISION,
    );

      equipment_define(
        EquipmentFeature::LCD_TV,
        EquipmentFeature::TV,
      );

//
// 2024-08-04 jj5 - MICROSCOPE
//

equipment_define(
  EquipmentFeature::MICROSCOPE,
  EquipmentClass::MICROSCOPE,
  EquipmentAttribute::BENCH_EQUIPMENT,
  EquipmentAttribute::TEST_EQUIPMENT,
);

  equipment_define(
    EquipmentFeature::DIGITAL_MICROSCOPE,
    EquipmentFeature::MICROSCOPE,
  );

//
// 2024-08-04 jj5 - SCANNER
//

equipment_define(
  EquipmentFeature::SCANNER,
  EquipmentClass::SCANNER,
  EquipmentAttribute::ACCESSORY,
  EquipmentAttribute::COMPUTER_EQUIPMENT,
  EquipmentAttribute::PERIPHERAL,
);

  equipment_define(
    EquipmentFeature::FLATBED_SCANNER,
    EquipmentFeature::SCANNER,
  );

  equipment_define(
    EquipmentFeature::BARCODE_SCANNER,
    EquipmentFeature::SCANNER,
  );

//
// 2024-08-04 jj5 - SOLDERING_TOOL
//

equipment_define(
  EquipmentFeature::SOLDERING_TOOL,
  EquipmentClass::SOLDERING_TOOL,
);

  equipment_define(
    EquipmentFeature::HEATING_TABLE,
    EquipmentFeature::SOLDERING_TOOL,
    EquipmentAttribute::BENCH_EQUIPMENT,
  );

  equipment_define(
    EquipmentFeature::SOLDER_POT,
    EquipmentFeature::SOLDERING_TOOL,
    EquipmentAttribute::BENCH_EQUIPMENT,
  );

  equipment_define(
    EquipmentFeature::SOLDERING_STAND,
    EquipmentFeature::SOLDERING_TOOL,
    EquipmentAttribute::BENCH_EQUIPMENT,
  );

  equipment_define(
    EquipmentFeature::SOLDERING_IRON,
    EquipmentClass::SOLDERING_IRON,
    EquipmentFeature::SOLDERING_TOOL,
    EquipmentAttribute::BENCH_EQUIPMENT,
    EquipmentAttribute::HAND_TOOL,
  );

  equipment_define(
    EquipmentFeature::HOT_AIR_GUN,
    EquipmentFeature::SOLDERING_TOOL,
    EquipmentAttribute::BENCH_EQUIPMENT,
    EquipmentAttribute::HAND_TOOL,
  );

    equipment_define(
      EquipmentFeature::SOLDERING_STATION,
      EquipmentClass::SOLDERING_STATION,
      EquipmentFeature::SOLDERING_IRON,
      EquipmentFeature::HOT_AIR_GUN,
    );

//
// 2024-08-04 jj5 - DESOLDERING_TOOL
//

equipment_define(
  EquipmentFeature::DESOLDERING_TOOL,
  EquipmentClass::DESOLDERING_TOOL,
  EquipmentFeature::SOLDERING_TOOL,
);

  equipment_define(
    EquipmentFeature::DESOLDERING_PUMP,
    EquipmentFeature::DESOLDERING_TOOL,
    EquipmentAttribute::HAND_TOOL,
  );

//
// 2024-08-04 jj5 - ELECTRONIC_LOAD
//

equipment_define(
  EquipmentFeature::ELECTRONIC_LOAD,
  EquipmentClass::ELECTRONIC_LOAD,
  EquipmentAttribute::BENCH_EQUIPMENT,
  EquipmentAttribute::MEASURING_EQUIPMENT,
  EquipmentAttribute::TEST_EQUIPMENT,
);

  equipment_define(
    EquipmentFeature::PROGRAMMABLE_LOAD,
    EquipmentFeature::ELECTRONIC_LOAD,
  );

//
// 2024-08-04 jj5 - TWEEZERS
//

equipment_define(
  EquipmentFeature::TWEEZERS,
  EquipmentClass::TWEEZERS,
  EquipmentAttribute::HAND_TOOL,
);

  equipment_define(
    EquipmentFeature::PRECISION_TWEEZERS,
    EquipmentFeature::TWEEZERS,
  );

  equipment_define(
    EquipmentFeature::DIGITAL_TWEEZERS,
    EquipmentClass::MULTIMETER,
    EquipmentFeature::TWEEZERS,
  );

  equipment_define(
    EquipmentFeature::SOLDERING_TWEEZERS,
    EquipmentFeature::SOLDERING_STATION,
    EquipmentFeature::TWEEZERS,
    EquipmentFeature::DESOLDERING_TOOL,
    EquipmentAttribute::HAND_TOOL,
    EquipmentAttribute::BENCH_EQUIPMENT,
  );

  equipment_define(
    EquipmentFeature::IC_PULLER,
    EquipmentFeature::TWEEZERS,
    EquipmentAttribute::HAND_TOOL,
  );

//
// 2024-08-04 jj5 - SCREWDRIVER
//

equipment_define(
  EquipmentFeature::SCREWDRIVER,
  EquipmentClass::SCREWDRIVER,
  EquipmentAttribute::HAND_TOOL,
);

  equipment_define(
    EquipmentFeature::SCREWDRIVER_SET,
    EquipmentFeature::SCREWDRIVER,
  );

  equipment_define(
    EquipmentFeature::ELECTRIC_SCREWDRIVER,
    EquipmentFeature::SCREWDRIVER,
  );

  equipment_define(
    EquipmentFeature::RATCHET_SCREWDRIVER,
    EquipmentFeature::SCREWDRIVER,
    EquipmentAttribute::RATCHET,
  );

  equipment_define(
    EquipmentFeature::MINI_SCREWDRIVER,
    EquipmentFeature::SCREWDRIVER,
  );

    equipment_define(
      EquipmentFeature::MINI_SCREWDRIVER_SET,
      EquipmentFeature::MINI_SCREWDRIVER,
      EquipmentFeature::SCREWDRIVER_SET,
    );

  equipment_define(
    EquipmentFeature::PRECISION_SCREWDRIVER,
    EquipmentFeature::SCREWDRIVER,
  );

    equipment_define(
      EquipmentFeature::PRECISION_SCREWDRIVER_SET,
      EquipmentFeature::PRECISION_SCREWDRIVER,
      EquipmentFeature::SCREWDRIVER_SET,
    );

  equipment_define(
    EquipmentFeature::POCKET_SCREWDRIVER,
    EquipmentFeature::SCREWDRIVER,
  );

  equipment_define(
    EquipmentFeature::SONIC_SCREWDRIVER,
    EquipmentFeature::SCREWDRIVER,
    EquipmentAttribute::HEART,
  );

  equipment_define(
    EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER,
    EquipmentFeature::SCREWDRIVER,
  );

    equipment_define(
      EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH0000,
      EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH1_2,
      EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH000,
      EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH00,
      EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH0,
      EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH1,
      EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH2,
      EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH3,
      EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER_PH4,
      EquipmentFeature::PHILLIPS_HEAD_SCREWDRIVER,
    );

  equipment_define(
    EquipmentFeature::FLATHEAD_SCREWDRIVER,
    EquipmentFeature::SCREWDRIVER,
  );

    equipment_define(
      EquipmentFeature::FLATHEAD_SCREWDRIVER_SL1,
      EquipmentFeature::FLATHEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::FLATHEAD_SCREWDRIVER_SL1_2,
      EquipmentFeature::FLATHEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::FLATHEAD_SCREWDRIVER_SL1_4,
      EquipmentFeature::FLATHEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::FLATHEAD_SCREWDRIVER_SL1_5,
      EquipmentFeature::FLATHEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::FLATHEAD_SCREWDRIVER_SL1_8,
      EquipmentFeature::FLATHEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::FLATHEAD_SCREWDRIVER_SL2,
      EquipmentFeature::FLATHEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::FLATHEAD_SCREWDRIVER_SL2_4,
      EquipmentFeature::FLATHEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::FLATHEAD_SCREWDRIVER_SL2_5,
      EquipmentFeature::FLATHEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::FLATHEAD_SCREWDRIVER_SL3,
      EquipmentFeature::FLATHEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::FLATHEAD_SCREWDRIVER_SL4,
      EquipmentFeature::FLATHEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::FLATHEAD_SCREWDRIVER_SL5,
      EquipmentFeature::FLATHEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::FLATHEAD_SCREWDRIVER_SL5_5,
      EquipmentFeature::FLATHEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::FLATHEAD_SCREWDRIVER_SL6,
      EquipmentFeature::FLATHEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::FLATHEAD_SCREWDRIVER_SL6_5,
      EquipmentFeature::FLATHEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::FLATHEAD_SCREWDRIVER_SL7,
      EquipmentFeature::FLATHEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::FLATHEAD_SCREWDRIVER_SL8,
      EquipmentFeature::FLATHEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::FLATHEAD_SCREWDRIVER_SL10,
      EquipmentFeature::FLATHEAD_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::FLATHEAD_SCREWDRIVER_SL12,
      EquipmentFeature::FLATHEAD_SCREWDRIVER,
    );

  equipment_define(
    EquipmentFeature::POZIDRIV_SCREWDRIVER,
    EquipmentFeature::SCREWDRIVER,
  );

    equipment_define(
      EquipmentFeature::POZIDRIV_SCREWDRIVER_PZ000,
      EquipmentFeature::POZIDRIV_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::POZIDRIV_SCREWDRIVER_PZ00,
      EquipmentFeature::POZIDRIV_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::POZIDRIV_SCREWDRIVER_PZ0,
      EquipmentFeature::POZIDRIV_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::POZIDRIV_SCREWDRIVER_PZ1,
      EquipmentFeature::POZIDRIV_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::POZIDRIV_SCREWDRIVER_PZ2,
      EquipmentFeature::POZIDRIV_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::POZIDRIV_SCREWDRIVER_PZ3,
      EquipmentFeature::POZIDRIV_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::POZIDRIV_SCREWDRIVER_PZ4,
      EquipmentFeature::POZIDRIV_SCREWDRIVER,
    );

  equipment_define(
    EquipmentFeature::TORX_SCREWDRIVER,
    EquipmentFeature::SCREWDRIVER,
  );

    equipment_define(
      EquipmentFeature::TORX_SCREWDRIVER_T1,
      EquipmentFeature::TORX_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::TORX_SCREWDRIVER_T2,
      EquipmentFeature::TORX_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::TORX_SCREWDRIVER_T3,
      EquipmentFeature::TORX_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::TORX_SCREWDRIVER_T4,
      EquipmentFeature::TORX_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::TORX_SCREWDRIVER_T5,
      EquipmentFeature::TORX_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::TORX_SCREWDRIVER_T6,
      EquipmentFeature::TORX_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::TORX_SCREWDRIVER_T7,
      EquipmentFeature::TORX_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::TORX_SCREWDRIVER_T8,
      EquipmentFeature::TORX_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::TORX_SCREWDRIVER_T9,
      EquipmentFeature::TORX_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::TORX_SCREWDRIVER_T10,
      EquipmentFeature::TORX_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::TORX_SCREWDRIVER_T15,
      EquipmentFeature::TORX_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::TORX_SCREWDRIVER_T20,
      EquipmentFeature::TORX_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::TORX_SCREWDRIVER_T25,
      EquipmentFeature::TORX_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::TORX_SCREWDRIVER_T27,
      EquipmentFeature::TORX_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::TORX_SCREWDRIVER_T30,
      EquipmentFeature::TORX_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::TORX_SCREWDRIVER_T40,
      EquipmentFeature::TORX_SCREWDRIVER,
    );

  equipment_define(
    EquipmentFeature::HEX_SCREWDRIVER,
    EquipmentFeature::SCREWDRIVER,
  );

    equipment_define(
      EquipmentFeature::HEX_SCREWDRIVER_H1_5,
      EquipmentFeature::HEX_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::HEX_SCREWDRIVER_H2,
      EquipmentFeature::HEX_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::HEX_SCREWDRIVER_H2_5,
      EquipmentFeature::HEX_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::HEX_SCREWDRIVER_H3,
      EquipmentFeature::HEX_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::HEX_SCREWDRIVER_H4,
      EquipmentFeature::HEX_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::HEX_SCREWDRIVER_H5,
      EquipmentFeature::HEX_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::HEX_SCREWDRIVER_H6,
      EquipmentFeature::HEX_SCREWDRIVER,
    );

  equipment_define(
    EquipmentFeature::TRI_POINT_Y_SCREWDRIVER,
    EquipmentFeature::SCREWDRIVER,
  );

    equipment_define(
      EquipmentFeature::TRI_POINT_Y_SCREWDRIVER_Y000,
      EquipmentFeature::TRI_POINT_Y_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::TRI_POINT_Y_SCREWDRIVER_Y00,
      EquipmentFeature::TRI_POINT_Y_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::TRI_POINT_Y_SCREWDRIVER_Y0,
      EquipmentFeature::TRI_POINT_Y_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::TRI_POINT_Y_SCREWDRIVER_Y1,
      EquipmentFeature::TRI_POINT_Y_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::TRI_POINT_Y_SCREWDRIVER_Y2,
      EquipmentFeature::TRI_POINT_Y_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::TRI_POINT_Y_SCREWDRIVER_Y3,
      EquipmentFeature::TRI_POINT_Y_SCREWDRIVER,
    );

  equipment_define(
    EquipmentFeature::PENTALOBE_SCREWDRIVER,
    EquipmentFeature::SCREWDRIVER,
  );

    equipment_define(
      EquipmentFeature::PENTALOBE_SCREWDRIVER_P2,
      EquipmentFeature::PENTALOBE_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::PENTALOBE_SCREWDRIVER_P5,
      EquipmentFeature::PENTALOBE_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::PENTALOBE_SCREWDRIVER_P6,
      EquipmentFeature::PENTALOBE_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::PENTALOBE_SCREWDRIVER_P7,
      EquipmentFeature::PENTALOBE_SCREWDRIVER,
    );

  equipment_define(
    EquipmentFeature::TRIANGULAR_SCREWDRIVER,
    EquipmentFeature::SCREWDRIVER,
  );

    equipment_define(
      EquipmentFeature::TRIANGULAR_SCREWDRIVER_2_0,
      EquipmentFeature::TRIANGULAR_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::TRIANGULAR_SCREWDRIVER_2_3,
      EquipmentFeature::TRIANGULAR_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::TRIANGULAR_SCREWDRIVER_3_0,
      EquipmentFeature::TRIANGULAR_SCREWDRIVER,
    );

  equipment_define(
    EquipmentFeature::U_DRIVE_SCREWDRIVER,
    EquipmentFeature::SCREWDRIVER,
  );

    equipment_define(
      EquipmentFeature::U_DRIVE_SCREWDRIVER_U2_3,
      EquipmentFeature::U_DRIVE_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::U_DRIVE_SCREWDRIVER_U2_6,
      EquipmentFeature::U_DRIVE_SCREWDRIVER,
    );

  equipment_define(
    EquipmentFeature::HEX_NUT_DRIVER,
    EquipmentFeature::SCREWDRIVER,
  );

    equipment_define(
    EquipmentFeature::HEX_NUT_DRIVER_6,
    EquipmentFeature::HEX_NUT_DRIVER,
    );

    equipment_define(
    EquipmentFeature::HEX_NUT_DRIVER_7,
    EquipmentFeature::HEX_NUT_DRIVER,
    );

    equipment_define(
    EquipmentFeature::HEX_NUT_DRIVER_8,
    EquipmentFeature::HEX_NUT_DRIVER,
    );

    equipment_define(
    EquipmentFeature::HEX_NUT_DRIVER_9,
    EquipmentFeature::HEX_NUT_DRIVER,
    );

    equipment_define(
    EquipmentFeature::HEX_NUT_DRIVER_10,
    EquipmentFeature::HEX_NUT_DRIVER,
    );

    equipment_define(
    EquipmentFeature::HEX_NUT_DRIVER_11,
    EquipmentFeature::HEX_NUT_DRIVER,
    );

    equipment_define(
    EquipmentFeature::HEX_NUT_DRIVER_12,
    EquipmentFeature::HEX_NUT_DRIVER,
    );

    equipment_define(
    EquipmentFeature::HEX_NUT_DRIVER_13,
    EquipmentFeature::HEX_NUT_DRIVER,
    );

  equipment_define(
    EquipmentFeature::GAMEBIT_SCREWDRIVER,
    EquipmentFeature::SCREWDRIVER,
  );

    equipment_define(
      EquipmentFeature::GAMEBIT_SCREWDRIVER_3_8,
      EquipmentFeature::GAMEBIT_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::GAMEBIT_SCREWDRIVER_4_5,
      EquipmentFeature::GAMEBIT_SCREWDRIVER,
    );

  equipment_define(
    EquipmentFeature::SPECIAL_SCREWDRIVER,
    EquipmentFeature::SCREWDRIVER,
  );

    equipment_define(
      EquipmentFeature::RESET_PIN_SCREWDRIVER,
      EquipmentFeature::SPECIAL_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::COUNTERSINK_SCREWDRIVER,
      EquipmentFeature::SPECIAL_SCREWDRIVER,
    );

    equipment_define(
      EquipmentFeature::HEX_ADAPTER_SCREWDRIVER,
      EquipmentFeature::SPECIAL_SCREWDRIVER,
    );


//
// 2024-08-04 jj5 - CRIMPING_TOOL
//

equipment_define(
  EquipmentFeature::CRIMPING_TOOL,
  EquipmentClass::CRIMPING_TOOL,
  EquipmentAttribute::HAND_TOOL,
);

//
// 2024-08-04 jj5 - VOLTAGE_DETECTOR
//

equipment_define(
  EquipmentFeature::VOLTAGE_DETECTOR,
  EquipmentClass::VOLTAGE_DETECTOR,
  EquipmentAttribute::MEASURING_EQUIPMENT,
  EquipmentAttribute::SAFETY_EQUIPMENT,
  EquipmentAttribute::TEST_EQUIPMENT,
);

  equipment_define(
    EquipmentFeature::STUD_FINDER,
    EquipmentClass::STUD_FINDER,
    EquipmentFeature::VOLTAGE_DETECTOR,
  );

//
// 2024-08-04 jj5 - CUTTING_IMPLEMENT
//

equipment_define(
  EquipmentFeature::CUTTING_IMPLEMENT,
  EquipmentClass::CUTTER,
);

  equipment_define(
    EquipmentFeature::SCISSORS,
    EquipmentClass::SCISSORS,
    EquipmentAttribute::HAND_TOOL,
  );

    equipment_define(
      EquipmentFeature::ELECTRIC_SCISSORS,
      EquipmentFeature::SCISSORS,
    );

  equipment_define(
    EquipmentFeature::BLADE,
    EquipmentFeature::CUTTING_IMPLEMENT,
    EquipmentAttribute::ACCESSORY,
    EquipmentAttribute::ATTACHMENT,
  );

    equipment_define(
      EquipmentFeature::BLADES,
      EquipmentFeature::BLADE,
    );

    equipment_define(
      EquipmentFeature::SCALPEL_BLADE,
      EquipmentFeature::BLADE,
      EquipmentFeature::SCALPEL,
    );

    equipment_define(
      EquipmentFeature::KNIFE,
      EquipmentFeature::BLADE,
      EquipmentClass::KNIFE,
      EquipmentFeature::CUTTING_IMPLEMENT,
      EquipmentAttribute::HAND_TOOL,
    );

      equipment_define(
        EquipmentFeature::BOX_CUTTER,
        EquipmentFeature::KNIFE,
      );

      equipment_define(
        EquipmentFeature::SWISS_ARMY_KNIFE,
        EquipmentFeature::KNIFE,
      );

      equipment_define(
        EquipmentFeature::CRAFT_KNIFE,
        EquipmentFeature::KNIFE,
      );

        equipment_define(
          EquipmentFeature::CRAFT_KNIFE_SET,
          EquipmentFeature::CRAFT_KNIFE,
        );

      equipment_define(
        EquipmentFeature::SCALPEL,
        EquipmentFeature::KNIFE,
        EquipmentAttribute::HAND_TOOL,
      );

        equipment_define(
          EquipmentFeature::SCALPEL_HANDLE,
          EquipmentFeature::SCALPEL,
        );

  equipment_define(
    EquipmentFeature::WIRE_CUTTER,
    EquipmentClass::WIRE_CUTTER,
    EquipmentFeature::CUTTING_IMPLEMENT,
    EquipmentAttribute::HAND_TOOL,
  );

  equipment_define(
    EquipmentFeature::WIRE_STRIPPER,
    EquipmentClass::WIRE_STRIPPER,
    EquipmentFeature::CUTTING_IMPLEMENT,
    EquipmentAttribute::HAND_TOOL,
  );


//
// 2024-08-04 jj5 - PRINTER
//

equipment_define(
  EquipmentFeature::PRINTER,
  EquipmentClass::PRINTER,
);

  equipment_define(
    EquipmentFeature::LABEL_MAKER,
    EquipmentClass::LABEL_MAKER,
    EquipmentFeature::PRINTER,
  );

//
// 2024-08-04 jj5 - CALCULATOR
//

equipment_define(
  EquipmentFeature::CALCULATOR,
  EquipmentClass::CALCULATOR,
);

  equipment_define(
    EquipmentFeature::SCIENTIFIC_CALCULATOR,
    EquipmentFeature::CALCULATOR,
  );

//
// 2024-08-04 jj5 - SOLDER_LUGS
//

equipment_define(
  EquipmentFeature::SOLDER_LUGS,
  EquipmentClass::SOLDER_LUGS,
  EquipmentAttribute::CONSUMABLE,
);

//
// 2024-08-04 jj5 - FLUX
//

equipment_define(
  EquipmentFeature::FLUX,
  EquipmentClass::FLUX,
  EquipmentAttribute::CONSUMABLE,
);

//
// 2024-08-06 jj5 - TAPE
//

equipment_define(
  EquipmentFeature::TAPE,
  EquipmentClass::TAPE,
  EquipmentAttribute::CONSUMABLE,
);

  equipment_define(
    EquipmentFeature::GAFFER_TAPE,
    EquipmentFeature::TAPE,
  );

//
// 2024-08-04 jj5 - DISPENSER
//

equipment_define(
  EquipmentFeature::DISPENSER,
  EquipmentClass::DISPENSER,
);

  equipment_define(
    EquipmentFeature::TAPE_DISPENSER,
    EquipmentFeature::DISPENSER,
    EquipmentFeature::TAPE,
  );

//
// 2024-08-04 jj5 - MAGNIFIER
//

equipment_define(
  EquipmentFeature::MAGNIFIER,
  EquipmentClass::MAGNIFIER,
);

  equipment_define(
    EquipmentFeature::MAGNIFYING_GLASS,
    EquipmentFeature::MAGNIFIER,
  );

    equipment_define(
      EquipmentFeature::HEAD_MOUNTED_MAGNIFIER,
      EquipmentFeature::MAGNIFYING_GLASS,
      EquipmentAttribute::HEAD_MOUNTED,
    );

//
// 2024-08-04 jj5 - THIRD_HAND
//

equipment_define(
  EquipmentFeature::THIRD_HAND,
  EquipmentClass::THIRD_HAND,
);


//
// 2024-08-04 jj5 - CAPACITOR_DISCHARGE_PEN
//

equipment_define(
  EquipmentFeature::CAPACITOR_DISCHARGE_PEN,
  EquipmentClass::CAPACITOR_DISCHARGE_PEN,
);

//
// 2024-08-04 jj5 - BRUSH
//

equipment_define(
  EquipmentFeature::BRUSH,
  EquipmentClass::BRUSH,
);

  equipment_define(
    EquipmentFeature::HARD_BRUSH,
    EquipmentFeature::BRUSH,
    EquipmentAttribute::CLEANING_EQUIPMENT,
  );

  equipment_define(
    EquipmentFeature::SCRUB_BRUSH,
    EquipmentFeature::BRUSH,
    EquipmentAttribute::CLEANING_EQUIPMENT,
  );

  equipment_define(
    EquipmentFeature::DISH_BRUSH,
    EquipmentFeature::BRUSH,
    EquipmentAttribute::CLEANING_EQUIPMENT,
  );

    equipment_define(
      EquipmentFeature::DISH_BRUSH_REFILLS,
      EquipmentFeature::DISH_BRUSH,
    );

  equipment_define(
    EquipmentFeature::WIRE_BRUSH,
    EquipmentFeature::BRUSH,
    EquipmentAttribute::CLEANING_EQUIPMENT,
  );

  equipment_define(
    EquipmentFeature::CLEANING_BRUSH,
    EquipmentFeature::BRUSH,
    EquipmentAttribute::CLEANING_EQUIPMENT,
  );

  equipment_define(
    EquipmentFeature::BRUSH_SET,
    EquipmentFeature::BRUSH,
  );

    equipment_define(
      EquipmentFeature::HARD_BRUSH_SET,
      EquipmentFeature::BRUSH_SET,
      EquipmentFeature::HARD_BRUSH,
    );

  equipment_define(
    EquipmentFeature::PAINT_BRUSH,
    EquipmentFeature::BRUSH,
  );

    equipment_define(
      EquipmentFeature::PAINT_BRUSHES,
      EquipmentFeature::PAINT_BRUSH,
      EquipmentFeature::BRUSH_SET,
    );

//
// 2024-08-04 jj5 - GLOVES
//

equipment_define(
  EquipmentFeature::GLOVES,
  EquipmentClass::GLOVES,
  EquipmentAttribute::SAFETY_EQUIPMENT,
  EquipmentAttribute::WEARABLE,
);

  equipment_define(
    EquipmentFeature::NITRILE_GLOVES,
    EquipmentFeature::GLOVES,
  );

  equipment_define(
    EquipmentFeature::LATEX_GLOVES,
    EquipmentFeature::GLOVES,
  );

//
// 2024-08-04 jj5 - BLOW_TORCH
//

equipment_define(
  EquipmentFeature::BLOW_TORCH,
  EquipmentClass::BLOW_TORCH,
);

//
// 2024-08-04 jj5 - GAS
//

equipment_define(
  EquipmentFeature::GAS,
  EquipmentClass::GAS,
  EquipmentAttribute::CONSUMABLE,
);

  equipment_define(
    EquipmentFeature::BUTANE,
    EquipmentFeature::GAS,
  );

//
// 2024-08-04 jj5 - POWER_SUPPLY_TESTER
//

equipment_define(
  EquipmentFeature::POWER_SUPPLY_TESTER,
  EquipmentClass::POWER_SUPPLY_TESTER,
  EquipmentAttribute::TEST_EQUIPMENT,
);

equipment_define(
  EquipmentFeature::ATX_POWER_SUPPLY_TESTER,
  EquipmentFeature::POWER_SUPPLY_TESTER,
);

//
// 2024-08-04 jj5 - MAT
//

equipment_define(
  EquipmentFeature::MAT,
  EquipmentClass::MAT,
);

  equipment_define(
    EquipmentFeature::REPAIR_MAT,
    EquipmentFeature::MAT,
  );

    equipment_define(
      EquipmentFeature::MAGNETIC_SCREWPAD,
      EquipmentFeature::REPAIR_MAT,
    );

//
// 2024-08-04 jj5 - TEST_CLIP
//

equipment_define(
  EquipmentFeature::TEST_CLIP,
  EquipmentClass::TEST_CLIP,
);

  equipment_define(
    EquipmentFeature::TEST_CLIPS,
    EquipmentFeature::TEST_CLIP,
  );

//
// 2024-08-04 jj5 - PICKUP_TOOL
//

equipment_define(
  EquipmentFeature::PICKUP_TOOL,
  EquipmentClass::PICKUP_TOOL,
  EquipmentAttribute::HAND_TOOL,
);

  equipment_define(
    EquipmentFeature::MAGNETIC_PICKUP_TOOL,
    EquipmentFeature::PICKUP_TOOL,
    EquipmentAttribute::MAGNETIC,
  );

  equipment_define(
    EquipmentFeature::TELESCOPIC_PICKUP_TOOL,
    EquipmentFeature::PICKUP_TOOL,
  );

  equipment_define(
    EquipmentFeature::CLAW_TOOL,
    EquipmentFeature::PICKUP_TOOL,
  );

    equipment_define(
      EquipmentFeature::IC_CHIP_PICKUP_TOOL,
      EquipmentFeature::CLAW_TOOL,
    );

//
// 2024-08-04 jj5 - MIRROR
//

equipment_define(
  EquipmentFeature::MIRROR,
  EquipmentClass::MIRROR,
);

  equipment_define(
    EquipmentFeature::INSPECTION_MIRROR,
    EquipmentFeature::MIRROR,
  );

//
// 2024-08-04 jj5 - BOOK_HOLDER
//

equipment_define(
  EquipmentFeature::BOOK_HOLDER,
  EquipmentClass::BOOK_HOLDER,
);

//
// 2024-08-04 jj5 - HEAT_SHRINK
//

equipment_define(
  EquipmentFeature::HEAT_SHRINK,
  EquipmentClass::HEAT_SHRINK,
  EquipmentAttribute::CONSUMABLE,
);

//
// 2024-08-06 jj5 - WIRE
//

equipment_define(
  EquipmentFeature::WIRE,
  EquipmentClass::WIRE,
  EquipmentAttribute::CONSUMABLE,
);

  equipment_define(
    EquipmentFeature::WIRE_SPOOL,
    EquipmentFeature::WIRE,
  );

  equipment_define(
    EquipmentFeature::HOOKUP_WIRE,
    EquipmentFeature::WIRE,
  );

  equipment_define(
    EquipmentFeature::JUMPER_WIRE,
    EquipmentFeature::WIRE,
  );

    equipment_define(
      EquipmentFeature::DUPONT_WIRE,
      EquipmentFeature::JUMPER_WIRE,
      EquipmentFeature::CABLE,
    );

  equipment_define(
    EquipmentFeature::SOLDER_WIRE,
    EquipmentFeature::WIRE,
  );

    equipment_define(
      EquipmentFeature::SOLDER_TAPE,
      EquipmentFeature::SOLDER_WIRE,
    );

//
// 2024-08-04 jj5 - CONNECTOR
//

equipment_define(
  EquipmentFeature::CONNECTOR,
  EquipmentClass::CONNECTOR,
  EquipmentAttribute::CONSUMABLE,
);

  equipment_define(
    EquipmentFeature::CONNECTOR_KIT,
    EquipmentFeature::CONNECTOR,
  );

  equipment_define(
    EquipmentFeature::WIRE_CONNECTOR,
    EquipmentFeature::CONNECTOR,
  );

    equipment_define(
      EquipmentFeature::WIRE_CONNECTORS,
      EquipmentFeature::WIRE_CONNECTOR,
    );

//
// 2024-08-04 jj5 - CROWBAR
//

equipment_define(
  EquipmentFeature::CROWBAR,
  EquipmentClass::CROWBAR,
  EquipmentAttribute::HAND_TOOL,
);

//
// 2024-08-04 jj5 - SPUDGER
//

equipment_define(
  EquipmentFeature::SPUDGER,
  EquipmentClass::SPUDGER,
  EquipmentAttribute::HAND_TOOL,
);

  equipment_define(
    EquipmentFeature::SPUDGERS,
    EquipmentFeature::SPUDGER,
  );

  equipment_define(
    EquipmentFeature::BOX_OPENER,
    EquipmentFeature::SPUDGER,
  );

//
// 2024-08-04 jj5 - HOOK_TOOL
//

equipment_define(
  EquipmentFeature::HOOK_TOOL,
  EquipmentClass::HOOK,
);

  equipment_define(
    EquipmentFeature::HOOK_TOOLS,
    EquipmentFeature::HOOK_TOOL,
  );

  equipment_define(
    EquipmentFeature::MULTI_PURPOSE_HOOK,
    EquipmentFeature::HOOK_TOOL,
  );

//
// 2024-08-04 jj5 - ELECTRONICS_PROJECT
//

equipment_define(
  EquipmentFeature::ELECTRONICS_PROJECT,
  EquipmentClass::PROJECT,
);

//
// 2024-08-04 jj5 - ELECTRONICS_KIT
//

equipment_define(
  EquipmentFeature::ELECTRONICS_KIT,
  EquipmentClass::KIT,
);

//
// 2024-08-04 jj5 - ELECTRONICS_PROJECT_LAB
//

equipment_define(
  EquipmentFeature::ELECTRONICS_PROJECT_LAB,
  EquipmentFeature::ELECTRONICS_PROJECT,
  EquipmentFeature::ELECTRONICS_KIT,
);

//
// 2024-08-04 jj5 - ELECTRONICS_PROJECT_LAB_KIT
//

equipment_define(
  EquipmentFeature::ELECTRONICS_PROJECT_LAB_KIT,
  EquipmentFeature::ELECTRONICS_PROJECT_LAB,
);

//
// 2024-08-04 jj5 - RADIO
//

equipment_define(
  EquipmentFeature::RADIO,
  EquipmentClass::RADIO,
);

  equipment_define(
    EquipmentFeature::AM_RADIO,
    EquipmentFeature::RADIO,
  );

  equipment_define(
    EquipmentFeature::FM_RADIO,
    EquipmentFeature::RADIO,
  );

//
// 2024-08-04 jj5 - METAL_DETECTOR
//

equipment_define(
  EquipmentFeature::METAL_DETECTOR,
  EquipmentClass::METAL_DETECTOR,
);

//
// 2024-08-04 jj5 - STYLUS
//

equipment_define(
  EquipmentFeature::STYLUS,
  EquipmentClass::STYLUS,
  EquipmentAttribute::HAND_TOOL,
);

  equipment_define(
    EquipmentFeature::STYLUS_PEN,
    EquipmentFeature::STYLUS,
  );

//
// 2024-08-04 jj5 - RULER
//

equipment_define(
  EquipmentFeature::RULER,
  EquipmentClass::RULER,
  EquipmentAttribute::HAND_TOOL,
);

  equipment_define(
    EquipmentFeature::STEEL_RULER,
    EquipmentFeature::RULER,
  );

  equipment_define(
    EquipmentFeature::RULER_CM,
    EquipmentFeature::RULER,
  );

  equipment_define(
    EquipmentFeature::RULER_INCH,
    EquipmentFeature::RULER,
  );

//
// 2024-08-04 jj5 - CLOTHING
//

equipment_define(
  EquipmentFeature::CLOTHING,
  EquipmentClass::CLOTHING,
);

  equipment_define(
    EquipmentFeature::LAB_COAT,
    EquipmentFeature::CLOTHING,
    EquipmentAttribute::SAFETY_EQUIPMENT,
  );

//
// 2024-08-04 jj5 - POCKET_PROTECTOR
//

equipment_define(
  EquipmentFeature::POCKET_PROTECTOR,
  EquipmentClass::POCKET_PROTECTOR,
  EquipmentAttribute::SAFETY_EQUIPMENT,
);

//
// 2024-08-04 jj5 - GOGGLES
//

equipment_define(
  EquipmentFeature::GOGGLES,
  EquipmentClass::GOGGLES,
  EquipmentAttribute::SAFETY_EQUIPMENT,
);

  equipment_define(
    EquipmentFeature::SAFETY_GOGGLES,
    EquipmentFeature::GOGGLES,
  );

//
// 2024-08-04 jj5 - BADGE_HOLDER
//

equipment_define(
  EquipmentFeature::BADGE_HOLDER,
  EquipmentClass::BADGE_HOLDER,
);

//
// 2024-08-04 jj5 - COTTON_SWABS
//

equipment_define(
  EquipmentFeature::COTTON_SWABS,
  EquipmentClass::COTTON_SWABS,
  EquipmentAttribute::CONSUMABLE,
  EquipmentAttribute::CLEANING_EQUIPMENT,
);

//
// 2024-08-04 jj5 - JAW_PADS
//

equipment_define(
  EquipmentFeature::JAW_PADS,
  EquipmentClass::JAW_PADS,
);

//
// 2024-08-04 jj5 - SPONGE
//

equipment_define(
  EquipmentFeature::SPONGE,
  EquipmentClass::SPONGE,
  EquipmentAttribute::CONSUMABLE,
  EquipmentAttribute::CLEANING_EQUIPMENT,
);

  equipment_define(
    EquipmentFeature::FOAM_SPONGE,
    EquipmentFeature::SPONGE,
  );

//
// 2024-08-04 jj5 - CLEANING_BRICKS
//

equipment_define(
  EquipmentFeature::CLEANING_BRICKS,
  EquipmentClass::CLEANING_BRICKS,
  EquipmentAttribute::CONSUMABLE,
  EquipmentAttribute::CLEANING_EQUIPMENT,
);

//
// 2024-08-04 jj5 - PEN
//

equipment_define(
  EquipmentFeature::PEN,
  EquipmentClass::PEN,
  EquipmentAttribute::CONSUMABLE,
);

  equipment_define(
    EquipmentFeature::CRAFTWORK_PEN,
    EquipmentFeature::PEN,
  );

  equipment_define(
    EquipmentFeature::DEEP_HOLE_PEN,
    EquipmentFeature::PEN,
  );

  equipment_define(
    EquipmentFeature::BALLPOINT_PEN,
    EquipmentFeature::PEN,
  );

//
// 2024-08-04 jj5 - CABLE_TESTER
//

equipment_define(
  EquipmentFeature::CABLE_TESTER,
  EquipmentClass::CABLE_TESTER,
  EquipmentAttribute::TEST_EQUIPMENT,
);

  equipment_define(
    EquipmentFeature::NETWORK_CABLE_TESTER,
    EquipmentFeature::CABLE_TESTER,
  );

  equipment_define(
    EquipmentFeature::USB_CABLE_TESTER,
    EquipmentFeature::CABLE_TESTER,
  );

//
// 2024-08-04 jj5 - CLOTH
//

equipment_define(
  EquipmentFeature::CLOTH,
  EquipmentClass::CLOTH,
  EquipmentAttribute::CONSUMABLE,
  EquipmentAttribute::CLEANING_EQUIPMENT,
);

  equipment_define(
    EquipmentFeature::MICROFIBER_CLOTH,
    EquipmentFeature::CLOTH,
  );

//
// 2024-08-04 jj5 - WIRE_FIXTURE
//

equipment_define(
  EquipmentFeature::WIRE_FIXTURE,
  EquipmentClass::WIRE_FIXTURE,
  EquipmentFeature::CLAMP,
);

//
// 2024-08-11 jj5 - SPANNER
//

equipment_define(
  EquipmentFeature::SPANNER,
  EquipmentClass::SPANNER,
  EquipmentAttribute::HAND_TOOL,
);

  equipment_define(
    EquipmentFeature::WRENCH,
    EquipmentClass::WRENCH,
    EquipmentFeature::SPANNER,
  );

    equipment_define(
      EquipmentFeature::ADJUSTABLE_WRENCH,
      EquipmentFeature::WRENCH,
    );

      equipment_define(
        EquipmentFeature::ADJUSTABLE_WRENCH_SET,
        EquipmentFeature::ADJUSTABLE_WRENCH,
      );

      equipment_define(
        EquipmentFeature::ADJUSTABLE_WRENCH_6_INCH,
        EquipmentFeature::ADJUSTABLE_WRENCH,
      );

      equipment_define(
        EquipmentFeature::ADJUSTABLE_WRENCH_8_INCH,
        EquipmentFeature::ADJUSTABLE_WRENCH,
      );

      equipment_define(
        EquipmentFeature::ADJUSTABLE_WRENCH_10_INCH,
        EquipmentFeature::ADJUSTABLE_WRENCH,
      );

      equipment_define(
        EquipmentFeature::ADJUSTABLE_WRENCH_12_INCH,
        EquipmentFeature::ADJUSTABLE_WRENCH,
      );

    equipment_define(
      EquipmentFeature::TIGER_WRENCH,
      EquipmentFeature::WRENCH,
    );

//
// 2024-08-04 jj5 - CALIPERS
//

equipment_define(
  EquipmentFeature::CALIPERS,
  EquipmentClass::CALIPERS,
  EquipmentAttribute::HAND_TOOL,
  EquipmentAttribute::MEASURING_EQUIPMENT,
);

  equipment_define(
    EquipmentFeature::DIGITAL_CALIPERS,
    EquipmentFeature::CALIPERS,
  );

//
// 2024-08-04 jj5 - GAUGE
//

equipment_define(
  EquipmentFeature::GAUGE,
  EquipmentClass::GAUGE,
  EquipmentAttribute::MEASURING_EQUIPMENT,
);

  equipment_define(
    EquipmentFeature::DEPTH_GAUGE,
    EquipmentClass::DEPTH_GAUGE,
    EquipmentFeature::GAUGE,
    EquipmentAttribute::HAND_TOOL,
  );

  equipment_define(
    EquipmentFeature::THREAD_PITCH_GAUGE,
    EquipmentFeature::GAUGE,
    EquipmentAttribute::HAND_TOOL,
  );

  equipment_define(
    EquipmentFeature::FEELER_GAUGE,
    EquipmentFeature::GAUGE,
    EquipmentAttribute::HAND_TOOL,
  );

  equipment_define(
    EquipmentFeature::TAPER_GAUGE,
    EquipmentFeature::GAUGE,
    EquipmentAttribute::HAND_TOOL,
  );

//
// 2024-08-04 jj5 - CIRCUIT_BREAKER
//

equipment_define(
  EquipmentFeature::CIRCUIT_BREAKER,
  EquipmentClass::CIRCUIT_BREAKER,
  EquipmentAttribute::SAFETY_EQUIPMENT,
);

  equipment_define(
    EquipmentFeature::SURGE_PROTECTOR,
    EquipmentFeature::CIRCUIT_BREAKER,
  );

    equipment_define(
      EquipmentFeature::RESIDUAL_CURRENT_DEVICE,
      EquipmentFeature::SURGE_PROTECTOR,
    );

//
// 2024-08-04 jj5 - POWER
//

equipment_define(
  EquipmentFeature::POWER,
  EquipmentClass::POWER,
);

  equipment_define(
    EquipmentFeature::POWER_BOARD,
    EquipmentClass::POWER_BOARD,
    EquipmentFeature::SURGE_PROTECTOR,
  );

  equipment_define(
    EquipmentFeature::POWER_SUPPLY,
    EquipmentClass::POWER_SUPPLY,
  );

    equipment_define(
      EquipmentFeature::BENCH_POWER_SUPPLY,
      EquipmentFeature::POWER_SUPPLY,
      EquipmentAttribute::BENCH_EQUIPMENT,
    );

    equipment_define(
      EquipmentFeature::AC_POWER_ADAPTER,
      EquipmentFeature::POWER_SUPPLY,
      EquipmentFeature::ADAPTER,
    );

    equipment_define(
      EquipmentFeature::POWER_MODULE,
      EquipmentFeature::POWER_SUPPLY,
    );

    equipment_define(
      EquipmentFeature::UPS,
      EquipmentFeature::POWER_SUPPLY,
    );

  equipment_define(
    EquipmentFeature::POWER_CABLE,
    EquipmentFeature::POWER,
    EquipmentFeature::CABLE,
  );

    equipment_define(
      EquipmentFeature::USB_POWER_CABLE,
      EquipmentFeature::POWER_CABLE,
      EquipmentConnectivity::USB,
    );

//
// 2024-08-04 jj5 - FUNNEL
//

equipment_define(
  EquipmentFeature::FUNNEL,
  EquipmentClass::FUNNEL,
);

  equipment_define(
    EquipmentFeature::FUNNEL_SET,
    EquipmentFeature::FUNNEL,
  );

//
// 2024-08-04 jj5 - CABLE_TIDY
//

equipment_define(
  EquipmentFeature::CABLE_TIDY,
  EquipmentClass::CABLE_TIDY,
);

  equipment_define(
    EquipmentFeature::CABLE_ORGANIZER,
    EquipmentFeature::CABLE_TIDY,
  );

//
// 2024-08-04 jj5 - CRIMP_TERMINAL
//

equipment_define(
  EquipmentFeature::CRIMP_TERMINAL,
  EquipmentClass::CRIMP,
  EquipmentAttribute::CONSUMABLE,
);

  equipment_define(
    EquipmentFeature::FERRULE,
    EquipmentFeature::CRIMP_TERMINAL,
  );

//
// 2024-08-04 jj5 - CRIMPER
//

equipment_define(
  EquipmentFeature::CRIMPER,
  EquipmentClass::CRIMPER,
  EquipmentAttribute::HAND_TOOL,
);

  equipment_define(
    EquipmentFeature::FERRULE_CRIMPER,
    EquipmentFeature::CRIMPER,
  );

  equipment_define(
    EquipmentFeature::WIRE_CRIMPER,
    EquipmentFeature::CRIMPER,
  );

//
// 2024-08-04 jj5 - CRIMPER_KIT
//

equipment_define(
  EquipmentFeature::CRIMPER_KIT,
  EquipmentClass::CRIMPER,
  EquipmentFeature::CRIMPER,
  EquipmentFeature::CRIMP_TERMINAL,
);

  equipment_define(
    EquipmentFeature::FERRULE_CRIMPER_KIT,
    EquipmentFeature::CRIMPER_KIT,
    EquipmentFeature::FERRULE_CRIMPER,
    EquipmentFeature::FERRULE,
  );

//
// 2024-08-04 jj5 - PLIERS
//

equipment_define(
  EquipmentFeature::PLIERS,
  EquipmentClass::PLIERS,
  EquipmentAttribute::HAND_TOOL,
);

  equipment_define(
    EquipmentFeature::NEEDLE_NOSE_PLIERS,
    EquipmentFeature::PLIERS,
  );

  equipment_define(
    EquipmentFeature::LOCKING_PLIERS,
    EquipmentFeature::PLIERS,
  );

//
// 2024-08-04 jj5 - SCALE
//

equipment_define(
  EquipmentFeature::SCALE,
  EquipmentClass::SCALE,
  EquipmentAttribute::MEASURING_EQUIPMENT,
);

  equipment_define(
    EquipmentFeature::ELECTRONIC_SCALE,
    EquipmentFeature::SCALE,
  );

//
// 2024-08-04 jj5 - AIR_PURIFIER
//

equipment_define(
  EquipmentFeature::AIR_PURIFIER,
  EquipmentClass::AIR_PURIFIER,
);

//
// 2024-08-04 jj5 - E_READER
//

equipment_define(
  EquipmentFeature::E_READER,
  EquipmentClass::E_READER,
);

//
// 2024-08-05 jj5 - MOUNT
//

equipment_define(
  EquipmentFeature::MOUNT,
  EquipmentClass::MOUNT,
  EquipmentFeature::STUDIO,
);

  equipment_define(
    EquipmentFeature::WALL_MOUNT,
    EquipmentFeature::MOUNT,
  );

    equipment_define(
      EquipmentFeature::VESA_WALL_MOUNT,
      EquipmentFeature::WALL_MOUNT,
    );

    equipment_define(
      EquipmentFeature::WEBCAM_WALL_MOUNT,
      EquipmentFeature::WALL_MOUNT,
    );

  equipment_define(
    EquipmentFeature::STAND,
    EquipmentFeature::MOUNT,
  );

    equipment_define(
      EquipmentFeature::WEBCAM_STAND,
      EquipmentFeature::STAND,
    );

//
// 2024-08-05 jj5 - WRIST_PAD
//

equipment_define(
  EquipmentFeature::WRIST_PAD,
  EquipmentClass::WRIST_PAD,
);

  equipment_define(
    EquipmentFeature::KEYBOARD_WRIST_PAD,
    EquipmentFeature::WRIST_PAD,
    EquipmentFeature::KEYBOARD,
  );

//
// 2024-08-05 jj5 - MICROPHONE
//

equipment_define(
  EquipmentFeature::MICROPHONE,
  EquipmentClass::MICROPHONE,
  EquipmentFeature::STUDIO,
);

  equipment_define(
    EquipmentFeature::USB_MICROPHONE,
    EquipmentFeature::MICROPHONE,
  );

  equipment_define(
    EquipmentFeature::CONDENSER_MICROPHONE,
    EquipmentFeature::MICROPHONE,
  );

//
// 2024-08-07 jj5 - BREADBOARD
//

equipment_define(
  EquipmentFeature::BREADBOARD,
  EquipmentClass::BREADBOARD,
);

  equipment_define(
    EquipmentFeature::SOLDERLESS_BREADBOARD,
    EquipmentFeature::BREADBOARD,
  );

  equipment_define(
    EquipmentFeature::SOLDERABLE_BREADBOARD,
    EquipmentFeature::BREADBOARD,
    EquipmentFeature::PCB,
  );

//
// 2024-08-07 jj5 - CIRCUIT_BOARD
//

equipment_define(
  EquipmentFeature::CIRCUIT_BOARD,
  EquipmentClass::CIRCUIT_BOARD,
);

  equipment_define(
    EquipmentFeature::PCB,
    EquipmentFeature::CIRCUIT_BOARD,
  );


//
// 2024-09-05 jj5 - PENCIL
//

equipment_define(
  EquipmentFeature::PENCIL,
  EquipmentClass::PENCIL,
  EquipmentAttribute::WRITING_INSTRUMENT,
);

  equipment_define(
    EquipmentFeature::MECHANICAL_PENCIL,
    EquipmentFeature::PENCIL,
  );
