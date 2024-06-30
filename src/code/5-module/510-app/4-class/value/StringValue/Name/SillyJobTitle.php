<?php

function silly_job_title() {

  return new_value( SillyJobTitle::class, func_get_args() );

}

class SillyJobTitle extends Name {

  public function render( $text = null, $attrs = [] ) {
      
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
