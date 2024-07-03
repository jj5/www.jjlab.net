<?php


abstract class Money extends IntValue {

  protected $currency;

  public function __construct( int $value_id = 0, array $args = [] ) {

    if ( count( $args ) ) {

      $parts = explode( '$', $args[ 0 ], 2 );

      assert( count( $parts ) === 2 );

      $part_0 = trim( $parts[ 0 ] );
      $part_1 = trim( $parts[ 1 ] );

      $sign = 1;

      if ( $part_0 ) {

        assert( strlen( $part_0 ) > 0 );

        $currency = $part_0;

        if ( $currency[ 0 ] === '-' ) {

          $sign = -1;

          $currency = substr( $currency, 1 );

        }
      }
      else {

        $currency = 'AU';

      }

      assert( strlen( $part_1 ) > 0 );

      $price = $part_1;

      if ( $price[ 0 ] === '-' ) {

        // 2024-01-16 jj5 - double negative is considered invalid

        assert( $sign === 1 );

        $sign = -1;

        $price = substr( $price, 1 );

      }

      $price = str_replace( ',', '', $price );

      $price_parts = explode( '.', $price, 2 );

      if ( count( $price_parts ) === 1 ) {

        $cents = $price_parts[ 0 ] * 100;

      }
      else {

        $cents = intval( $price_parts[ 1 ] ) + ( $price_parts[ 0 ] * 100 );

      }

      $this->currency = self::get_canonical_currency( $currency );

      $args = [ $cents * $sign ];

    }

    parent::__construct( $value_id, $args );

  }

  public static function get_canonical_currency( $currency ) {

    $result = CURRENCY_COUNTRY_MAP[ $currency ] ?? $currency;

    assert( strlen( $result ) === 3 );

    return $result;

  }

  public static function format_currency( $currency, $total_cents ) {

    $sign = '';

    if ( $total_cents < 0 ) {

      $sign = '-';

      $total_cents *= -1;

    }

    $dollars = intval( $total_cents / 100 );
    $cents   = intval( $total_cents % 100 );

    $dollars_str = number_format( $dollars );
    $cents_str = $cents < 10 ? "0$cents" : strval( $cents );

    $result = "$sign$currency\$$dollars_str.$cents_str";

    return $result;

  }

  public function get_currency() {

    return $this->currency;

  }

  public function to_string() {

    if ( $this->is_null() ) { return ''; }

    if ( $this->get_value() === 0 ) { return ''; }

    $output_currency = $_GET[ 'currency' ] ?? $this->currency;

    if ( $this->currency === $output_currency ) {

      $currency = $this->get_currency();
      $cents = $this->get_value();

      return self::format_currency( $currency, $cents );

    }

    return $this->to_currency( $output_currency )->to_string();

  }

  public function to_sort_value() {

    return $this->to_AUD();

  }

  public function to_AUD() {

    return $this->to_currency( 'AUD' );

  }

  public function to_USD() {

    return $this->to_currency( 'USD' );

  }

  public function to_currency( $currency ) {

    if ( $this->is_null() ) { return $this; }

    $cents = intval( $this->get_value() );

    $itl = itl();

    assert( $itl !== null );

    $rate = $itl->get_currency_rates( $this->currency )[ 'rates' ][ $currency ] ?? null;

    if ( $rate === null ) { return $this; }

    $cents = $itl->get_currency_rates( $this->currency )[ 'rates' ][ $currency ] * $cents;

    $cents = round( $cents );

    $result = self::format_currency( $currency, $cents );

    return $this->copy( $result );

  }

  public function add( ?Money $money ) {

    if ( $money === null ) { return $this; }

    $currency = $this->get_currency();

    assert( $currency !== null );

    $a_cents = $this->get_value();
    $b_cents = $money->to_currency( $currency )->get_value();

    return $this->copy( self::format_currency( $currency, $a_cents + $b_cents ) );

  }

  public function subtract( Money $money ) {

    $currency = $this->get_currency();

    assert( $currency !== null );

    $a_cents = $this->get_value();
    $b_cents = $money->to_currency( $currency )->get_value();

    return $this->copy( self::format_currency( $currency, $a_cents - $b_cents ) );

  }

  public function invert() {

    $currency = $this->get_currency();

    assert( $currency !== null );

    $cents = $this->get_value();

    return $this->copy( self::format_currency( $currency, $cents * -1 ) );

  }

  public function multiply( $factor ) {

    if ( is_object( $factor ) ) { $factor = $factor->get_value(); }

    $currency = $this->get_currency();

    assert( $currency !== null );

    $cents = $this->get_value();

    return $this->copy( self::format_currency( $currency, $cents * $factor ) );

  }

  protected abstract function copy( $money_string );

}
