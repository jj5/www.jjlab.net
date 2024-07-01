<?php

function maxitronix_segment() {

  return new_item( MaxitronixSegment::class, func_get_args() );

}

class MaxitronixSegment extends Segment {

  public function get_channel() {

    return get_item_by_slug( Channel::class, '@InTheLabWithJayJay' );

  }

  public function get_show_type() {

    return get_item_by_slug( ShowType::class, 'special-show' );

  }

  public function get_feature() {

    return get_item_by_slug( Feature::class, $this->get_slug() );

  }

  public function get_slug() {

    $kit = $this->get_maxitronix_kit_name()->to_string();

    return "maxitronix-$kit";

  }

  public function get_project() {

    return $this->get( Project::class );

  }

  public function get_maxitronix_kit_name() {

    return $this->get( MaxitronixKitName::class );

  }

  public function render_extra_video_attributes() {

    tag_text( 'dt', 'Maxitronix Kit' );
    tag_open( 'dd' );

      $kit = $this->get_maxitronix_kit_name()->to_string();

      $title = MaxitronixKit::get_html_title( $kit );

      tag_text(
        'a',
        'Maxitronix ' . $kit,
        [
          'href' => url_base() . '/feature.php/maxitronix-' . $kit,
          'class' => 'internal',
          'title' => $title,
        ]
      );

    tag_shut( 'dd' );

  }

  public function render_breadcrumbs() {

    tag_open( 'p' );

      tag_text(
        'a',
        'Main Channel',
        [
          'href' => url_base() . '/channel.php/@InTheLabWithJayJay',
          'class' => 'internal',
          'title' => TITLE_CHANNEL_MAIN,
        ]
      );

      //$this->get_channel()->render_rss_link();

      out_text( ' > ' );

      tag_text(
        'a',
        'Special Show',
        [
          'href' => url_base() . '/show-type.php/special-show',
          'class' => 'internal',
          'title' => TITLE_SHOW_MAIN,
        ]
      );

      //$this->get_show_type())->render_rss_link();

      out_text( ' > ' );

      $kit = $this->get_maxitronix_kit_name()->to_string();

      tag_text(
        'a',
        "Maxitronix $kit",
        [
          'href' => url_base() . "/feature.php/maxitronix-$kit",
          'class' => 'internal',
          'title' => TITLE_FEATURE_MAXITRONIX,
        ]
      );

      //$this->get_feature()->render_rss_link();

    tag_shut( 'p' );

  }

  public function render_title_prefix() {

    $kit = $this->get_maxitronix_kit_name()->to_string();

    out_text( "Maxitronix $kit: " );
    
  }

  public function render_title_suffix() {

    $project = $this->get_project();

    if ( $project->is_null() ) { return; }

    out_text( " ({$project->to_string()})" );

  }

}

class NullMaxitronixSegment extends EarlyContent {

  use NullItemMixin;

}
