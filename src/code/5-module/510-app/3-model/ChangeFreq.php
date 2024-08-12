<?php

enum ChangeFreq : string {

  case Always = 'always';

  case Hourly = 'hourly';

  case Daily = 'daily';

  case Weekly = 'weekly';

  case Monthly = 'monthly';

  case Yearly = 'yearly';

  case Never = 'never';

}
