<?php

use app\components\Formatter;

echo Formatter::format('Hello my name is {0}. Year {1} is very {2}.', ['Tomas', date('Y'), 'impressive']);