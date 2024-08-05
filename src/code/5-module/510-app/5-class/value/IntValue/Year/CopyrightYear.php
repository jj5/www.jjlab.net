<?php

function copyright_year( $arg ) {

  return new_value( CopyrightYear::class, $arg );

}

class CopyrightYear extends Year {

}

class NullCopyrightYear extends CopyrightYear {

  use NullValue;

}
