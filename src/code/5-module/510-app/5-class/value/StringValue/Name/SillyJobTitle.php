<?php

function silly_job_title( $arg ) {

  return new_value( SillyJobTitle::class, $arg );

}

class SillyJobTitle extends Name {

  public function render( $text = null, $attrs = [] ) : void {
      
    $text = $text ?? $this->to_string();

    tag_text(
      'span',
      $text,
      $attrs + [
        'class' => 'silly-job-title',
      ]
    );

  }

}

class NullSillyJobTitle extends SillyJobTitle {

  use NullValue;

}
