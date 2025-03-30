<?php

function learning_the_art() {

  return new_thing( LearningTheArt::class, func_get_args() );

}

class LearningTheArt extends Segment {

  public function get_channel() {

    return get_item_by_slug( Channel::class, '@InTheLabWithJayJay' );

  }

  public function get_show_type() {

    return get_item_by_slug( ShowType::class, ShowEnum::SpecialShow->value );

  }

  public function get_feature() {

    return get_item_by_slug( Feature::class, 'learning-the-art' );

  }

  public function get_project() {

    return $this->get( Project::class );

  }

  public function get_project_number() {

    return $this->get( ProjectNumber::class );

  }

  public function get_youtube_video_title() {

    $segment = $this;
    $video = $this->get_youtube_video();

    $video_name = strval( $video->get_video_name() );
    $number = $segment->get_project_number()->to_string();
    $project = 'Learning The Art of Electronics';

    if ( $number ) {

      $name = "$video_name | $project $number | Learning Electronics In The Lab With Jay Jay";

      if ( strlen( $name ) <= 100 ) { return $name; }

      $name = "$video_name | $project $number | In The Lab With Jay Jay";

      if ( strlen( $name ) <= 100 ) { return $name; }

      $name = "$video_name | $project $number | In The Lab";

      if ( strlen( $name ) <= 100 ) { return $name; }

      $name = "$video_name | $number | In The Lab";

      if ( strlen( $name ) <= 100 ) { return $name; }

      $name = "$video_name | $number";

      return $name;

    }

    $name = "$video_name | Learning Electronics In The Lab With Jay Jay";

    if ( strlen( $name ) <= 100 ) { return $name; }

    $name = "$video_name | In The Lab With Jay Jay";

    if ( strlen( $name ) <= 100 ) { return $name; }

    $name = "$video_name | In The Lab";

    if ( strlen( $name ) <= 100 ) { return $name; }

    return $name;

  }

  public function render_extra_video_attributes() {

    tag_text( 'dt', 'Learning the Art of Electronics' );
    tag_open( 'dd' );

/*
      $kit = $this->get_maxitronix_kit_name()->to_string();

      $title = MaxitronixKit::get_html_title( $kit );

      render_link_internal(
        'Maxitronix ' . $kit,
        url_base() . '/feature.php/maxitronix-' . $kit,
        $title,
      );
*/

    tag_shut( 'dd' );

  }

  public function render_breadcrumbs() {

    tag_open( 'p' );

      render_link_internal(
        'Main Channel',
        url_base() . '/channel.php/@InTheLabWithJayJay#heading',
        TITLE_CHANNEL_MAIN,
      );

      out_text( ' > ' );

      render_link_internal(
        'Special Show',
        url_base() . '/show-type.php/special-show#heading',
        TITLE_SHOW_MAIN,
      );

      out_text( ' > ' );

      render_link_internal(
        "Learning The Art of Electronics",
        url_base() . "/feature.php/learning-the-art#heading",
        TITLE_FEATURE_MINI_PROJECT,
      );

    tag_shut( 'p' );

  }

  public function render_title_prefix() {

    $number = $this->get_project_number()->to_string();

    if ( $number ) {

      out_text( "Learning the Art of Electronics $number: " );

    }
    else {

      //out_text( "Mini Project: " );

    }
  }

  public function render_title_suffix() {

/*
    $project = $this->get_project();

    if ( $project->is_null() ) { return; }

    out_text( " ({$project->to_string()})" );
*/

  }

}

class NullLearningTheArt extends LearningTheArt {

  use NullThingMixin;

}
