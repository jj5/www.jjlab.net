<?php

function mail_call() {

  return new_thing( MailCall::class, func_get_args() );

}

class MailCall extends Segment {

  public function render_breadcrumbs() {

    tag_open( 'p' );

      render_link_internal(
        'Main Channel',
        url_base() . '/channel.php/@InTheLabWithJayJay',
        TITLE_CHANNEL_MAIN,
      );

      out_text( ' > ' );

      render_link_internal(
        'Special Show',
        url_base() . '/show-type.php/special-show',
        TITLE_SHOW_SPECIAL,
      );

      out_text( ' > ' );

      render_link_internal(
        'Mail Call',
        url_base() . '/feature.php/mail-call',
        TITLE_FEATURE_MAIL_CALL,
      );

    tag_shut( 'p' );

  }

  public function render_title_prefix() {
    
    $id = $this->get_item_id();

    out_text( "Mail Call #$id: " );
    
  }

  public function render_title_suffix() {}

  public function get_channel() {

    return get_item_by_slug( Channel::class, '@InTheLabWithJayJay' );

  }

  public function get_show_type() {

    return get_item_by_slug( ShowType::class, ShowEnum::SpecialShow->value );

  }

  public function get_feature() {

    return get_item_by_slug( Feature::class, 'mail-call' );

  }

  public function get_segment_name() {

    return $this->get_feature()->get_name();

  }

  public function get_video() {

    return $this->get( Video::class );

  }

}

class NullMailCall extends MailCall {

  use NullThingMixin;

}
