<?php

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
