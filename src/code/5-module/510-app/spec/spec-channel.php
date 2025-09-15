<?php

channel(
  channel_url( 'https://www.youtube.com/@InTheLabWithJayJay' ),
  channel_slug( '@InTheLabWithJayJay' ),
  channel_name( 'In The Lab With Jay Jay' ),
  show_type(
    show_slug( ShowEnum::MainShow->value ),
    show_name( 'Main Show' ),
    show_text( 'In the main show we make high-quality videos of interest to the electronics hobbyist, particularly beginners.' ),
    feature(
      feature_slug( 'electronics-project' ),
      feature_name( 'Electronics Project' ),
      feature_text( 'In the electronics project videos we do something interesting and electronics related.' ),
    ),
    feature(
      feature_slug( 'old-book-teardown' ),
      feature_name( 'Old Book Teardown' ),
      feature_text( 'In the old book teardown videos we take a close look at an old electronics book, or some other book of interest. ' .
        'To count as old the book needs to have been published before the year 2000.' ),
    ),
  ),
  show_type(
    show_slug( ShowEnum::SpecialShow->value ),
    show_name( 'Special Show' ),
    show_text( 'In the special shows we take a look at something interesting and electronics related.' ),
    feature(
      feature_slug( 'new-book-teardown' ),
      feature_name( 'New Book Teardown' ),
      feature_text( 'In the new book teardown videos we take a close look at a new electronics book, or some other book of interest. ' .
        'To count as new the book needs to have been published in the year 2000 or later.' ),
    ),
    feature(
      feature_slug( 'cheatsheet' ),
      feature_name( 'Cheatsheet' ),
      feature_text( 'In the cheatsheet videos we take a close look at a laminated summary of various topics in ' .
        'mathematics, science, engineering, programming, finance, and writing.' ),
    ),
    feature(
      feature_slug( 'mini-project' ),
      feature_name( 'Mini Project' ),
      feature_text( 'In the mini project videos we work our way through the mini projects published in Silicon Chip magazine.' ),
    ),
    feature(
      feature_slug( 'learning-the-art' ),
      feature_name( 'Learning the Art of Electronics' ),
      feature_text( 'In these videos we work our way through Learning the Art of Electronics by Thomas C. Hayes and David Abrams.' ),
    ),
    feature(
      feature_slug( 'maxitronix-10in1' ),
      feature_name( 'Maxitronix 10in1' ),
      feature_text( 'In the Maxitronix 10in1 videos we work our way through the Maxitronix 10in1 electronics project lab.' ),
    ),
    feature(
      feature_slug( 'maxitronix-20in1' ),
      feature_name( 'Maxitronix 20in1' ),
      feature_text( 'In the Maxitronix 20in1 videos we work our way through the Maxitronix 20in1 electronics project lab.' ),
    ),
    feature(
      feature_slug( 'maxitronix-30in1' ),
      feature_name( 'Maxitronix 30in1' ),
      feature_text( 'In the Maxitronix 30in1 videos we work our way through the Maxitronix 30in1 electronics project lab.' ),
    ),
    feature(
      feature_slug( 'maxitronix-59in1' ),
      feature_name( 'Maxitronix 59in1' ),
      feature_text( 'In the Maxitronix 59in1 videos we work our way through the Maxitronix 59in1 electronics project lab.' ),
    ),
    feature(
      feature_slug( 'maxitronix-60in1' ),
      feature_name( 'Maxitronix 60in1' ),
      feature_text( 'In the Maxitronix 60in1 videos we work our way through the Maxitronix 60in1 electronics project lab.' ),
    ),
    feature(
      feature_slug( 'maxitronix-130in1' ),
      feature_name( 'Maxitronix 130in1' ),
      feature_text( 'In the Maxitronix 130in1 videos we work our way through the Maxitronix 130in1 electronics project lab.' ),
    ),
    feature(
      feature_slug( 'maxitronix-200in1' ),
      feature_name( 'Maxitronix 200in1' ),
      feature_text( 'In the Maxitronix 200in1 videos we work our way through the Maxitronix 200in1 electronics project lab.' ),
    ),
    feature(
      feature_slug( 'maxitronix-300in1' ),
      feature_name( 'Maxitronix 300in1' ),
      feature_text( 'In the Maxitronix 300in1 videos we work our way through the Maxitronix 300in1 electronics project lab.' ),
    ),
    feature(
      feature_slug( 'maxitronix-500in1' ),
      feature_name( 'Maxitronix 500in1' ),
      feature_text( 'In the Maxitronix 500in1 videos we work our way through the Maxitronix 500in1 electronics project lab.' ),
    ),
    feature(
      feature_slug( 'interlude' ),
      feature_name( 'Interlude' ),
      feature_text( 'In the interlude videos we take a small digression into something interesting.' ),
    ),
    feature(
      feature_slug( 'mail-call' ),
      feature_name( 'Mail Call' ),
      feature_text( 'In the mail call videos we open a recently arrived package.' ),
    ),
    feature(
      feature_slug( 'unboxing' ),
      feature_name( 'Unboxing' ),
      feature_text( 'In the unboxing videos we open the box and take a look at a new item, such as tools or components.' ),
    ),
    feature(
      feature_slug( 'demo' ),
      feature_name( 'Demo' ),
      feature_text( 'In the demo videos we take a look at a new item, such as tools or components.' ),
    ),
    feature(
      feature_slug( 'experiment' ),
      feature_name( 'Experiment' ),
      feature_text( 'In the experiment videos we do an electronics experiment to investigate a particular problem or phenomenon.' ),
    ),
    feature(
      feature_slug( 'channel-news' ),
      feature_name( 'Channel News' ),
      feature_text( 'In the channel news videos I let you know about developments related to the show.' ),
    ),
    feature(
      feature_slug( 'early-content' ),
      feature_name( 'Early Content' ),
      feature_text( 'The early content was recorded in the early days of the channel, the format has since changed.' ),
    ),
  ),
);

channel(
  channel_url( 'https://www.youtube.com/@ElliotsExtras' ),
  channel_slug( '@ElliotsExtras' ),
  channel_name( "Elliot's Extras" ),
  show_type(
    show_slug( ShowEnum::ExtraShow->value ),
    show_name( 'Extra Show' ),
    show_text( 'In the extra shows you will find longer form content which has received less editing attention.' ),
    feature(
      feature_slug( 'extra-content' ),
      feature_name( 'Extra Content' ),
      feature_text( 'This is longer form content which has received less editing attention and airs on a separate channel.' ),
    ),
  ),
);
