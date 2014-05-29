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
    
    public function testRtl()
    {
        $lang = new \Sokil\Language();
        
        $this->assertTrue($lang->isRtlLanguage('he'));
        
        $this->assertFalse($lang->isRtlLanguage('uk'));
    }
    
    public function testLtr()
    {
        $lang = new \Sokil\Language();
        
        $this->assertFalse($lang->isLtrLanguage('he'));
        
        $this->assertTrue($lang->isLtrLanguage('uk'));
    }
}