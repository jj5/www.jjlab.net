<?php

enum ShowEnum : string {

  // 2024-01-26 jj5 - main show includes old/new book features and airs on the main channel
  //
  case MainShow = 'main-show';

  // 2024-01-26 jj5 - special shows are standaline videos like Maxitronix Xin1 videos and air on the main channel
  //
  case SpecialShow = 'special-show';

  // 2024-01-26 jj5 - extra content is for the 2nd channel
  //
  case ExtraShow = 'extra-show';

}
