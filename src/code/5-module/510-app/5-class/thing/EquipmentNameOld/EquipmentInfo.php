<?php

function equipment_info() {

  return new_thing( EquipmentInfo::class, func_get_args() );

}

class EquipmentInfo extends EquipmentNameOld {

  public function get_category_list() { return $this->get_list( Category::class ); }

  public function get_manufacturer_link_list() { return $this->get_list( ManufacturerLink::class ); }

  public function get_sixsigma_url() { return $this->get( SixsigmaUrl::class ); }

  public function get_equipment_object() { return $this->get( EquipmentObject::class ); }

}

class NullEquipmentInfo extends EquipmentInfo {

  use NullThingMixin;

}
