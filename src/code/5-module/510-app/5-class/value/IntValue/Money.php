<?php


abstract class Money extends MudPrice {


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-07-30 jj5 - constructor...
  //

  public function __construct( IMudMoney|string $arg = 'USD0' ) {

    if ( is_string( $arg ) ) {

      $money = mud_parse_money( $arg );

    }
    else {

      $money = $arg;

    }

    parent::__construct( $money );

  }


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-07-30 jj5 - public static methods...
  //

  public static function format_currency( $currency, $total_cents ) {

    $sign = '';

    if ( is_float( $total_cents ) ) {

      $total_cents = intval( $total_cents );

    }

    if ( ! is_int( $total_cents ) ) {

      $total_cents = $total_cents->get_value();

      //mud_dump( $total_cents );

    }

    if ( $total_cents < 0 ) {

      $sign = '-';

      $total_cents *= -1;

    }

    $dollars = intval( $total_cents / 100 );
    $cents   = intval( $total_cents % 100 );

    $dollars_str = number_format( $dollars );
    $cents_str = $cents < 10 ? "0$cents" : strval( $cents );

    $result = "$sign$currency$dollars_str.$cents_str";

    if ( $result === '-$0.00' ) {

      $result = '$0.00';

    }

    return $result;

  }
}
