<?php

namespace app\components;

use Yii;

class Formatter
{
    public static function format($text, $replace)
    {
    	foreach ($replace as $key => $value) 
    	{
    		$text = str_replace('{' . $key . '}', $value, $text);
    	}

    	return $text;
    }
}