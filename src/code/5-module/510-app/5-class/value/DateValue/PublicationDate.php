<?php

function publication_date( $date ) {

  // 2024-06-28 jj5 - videoes are released on Sydney time at 11:45pm...

  return new_value( PublicationDate::class, $date . ' 23:45:37' );

}

class PublicationDate extends DateValue {

}

class NullPublicationDate extends PublicationDate {

  use NullValue;

}
