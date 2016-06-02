# Yii 2 string formatter 

Make your views prettier.

__Initialization__:

- Copy Formatter.php from components folder to your project

__Usage__:

#### Simple setup

```php
// Inject component
use app\components\Formatter;

// format(text, array(arg1, arg2, arg3, ...))

echo Formatter::format('Hello my name is {0}. Year {1} is very {2}.', ['Tomas', date('Y'), 'impressive']);
// output: Hello my name is Tomas. Year 2016 is very impressive.
```

__For updates follow me__:
[Follow @tomee03](https://twitter.com/tomee03)

---
MIT License
2016 Copyright Tomáš Novák <tomasnovak@tonova.sk>
