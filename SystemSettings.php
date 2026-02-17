<?php

namespace Piwik\Plugins\ThemeChineseNewYear;

use Piwik\Settings\FieldConfig;
use Piwik\Settings\Plugin\SystemSettings as BaseSystemSettings;

class SystemSettings extends BaseSystemSettings
{
    /** @var \Piwik\Settings\Setting */
    public $zodiacAnimal;

    protected function init()
    {
        $this->zodiacAnimal = $this->createZodiacAnimalSetting();
    }

    private function createZodiacAnimalSetting()
    {
        return $this->makeSetting('zodiacAnimal', 'auto', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
            $field->title = 'Zodiac Animal';
            $field->description = 'Select the zodiac animal displayed as background. "Auto" detects from the current year.';
            $field->uiControl = FieldConfig::UI_CONTROL_SINGLE_SELECT;
            $field->availableValues = [
                'auto'    => 'Auto (based on current year)',
                'rat'     => 'Rat (鼠)',
                'ox'      => 'Ox (牛)',
                'tiger'   => 'Tiger (虎)',
                'rabbit'  => 'Rabbit (兔)',
                'dragon'  => 'Dragon (龙)',
                'snake'   => 'Snake (蛇)',
                'horse'   => 'Horse (马)',
                'goat'    => 'Goat (羊)',
                'monkey'  => 'Monkey (猴)',
                'rooster' => 'Rooster (鸡)',
                'dog'     => 'Dog (狗)',
                'pig'     => 'Pig (猪)',
            ];
            $field->validate = function ($value) use ($field) {
                if (!array_key_exists($value, $field->availableValues)) {
                    throw new \Exception('Invalid zodiac animal value.');
                }
            };
        });
    }
}
