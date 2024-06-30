<?php

function copyright_year() {

  return new_value( CopyrightYear::class, func_get_args() );

}

class CopyrightYear extends Year {

}

class NullCopyrightYear extends CopyrightYear {

  use NullValue;

}
