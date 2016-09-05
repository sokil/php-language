php-language
============

Library to work with languages and localization on site. This library able to get prefered language from browser settings and store chosen option to cookie.

Prefered language goes from cookies, or if not specified - from browser. If language not listed in preffered - use default value.

Example of usage:

```php

// define supported languages
$language = new \Sokil\Language([
  'uk' => ['caption' => 'Ukraininan', 'locale' => 'uk_UA.UTF-8'],
  'en' => ['caption' => 'English', 'locale' => 'en_UK.UTF-8'],
], 'uk');

echo $language->getLanguage();

// if language chosed from list and must be set as system with writing to cookie
$language->setLanguage('uk');
```
