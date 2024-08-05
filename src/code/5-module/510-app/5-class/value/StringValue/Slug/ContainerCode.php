<?php

function container_code( $arg ) {

  return new_value( ContainerCode::class, $arg );

}

class ContainerCode extends Slug {}

class NullContainerCode extends ContainerCode {

  use NullValue;

}
