<?php

namespace Sokil;

class LanguageTest extends \PHPUnit_Framework_TestCase
{
    public function testGetLanguageMeta()
    {
        $lang = new \Sokil\Language([
            'uk'    => ['locale' => 'uk_UA.UTF-8', 'caption' => 'Українська'],
            'be'    => ['locale' => 'be_BY.UTF-8', 'caption' => 'Беларуская'],
            'en'    => ['locale' => 'en_US.UTF-8', 'caption' => 'English'],
        ], 'en');
        
        $this->assertEquals('Українська', $lang->getLanguageMeta('uk')['caption']);
    }
}