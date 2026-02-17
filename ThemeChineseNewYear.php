<?php

namespace Piwik\Plugins\ThemeChineseNewYear;

use Piwik\Plugin;

class ThemeChineseNewYear extends Plugin
{
    private static $animals = [
        'rat', 'ox', 'tiger', 'rabbit', 'dragon', 'snake',
        'horse', 'goat', 'monkey', 'rooster', 'dog', 'pig',
    ];

    public function registerEvents()
    {
        return [
            'Theme.configureThemeVariables'   => 'configureThemeVariables',
            'Template.jsGlobalVariables'      => 'addJsGlobalVariables',
            'AssetManager.getJavaScriptFiles' => 'getJsFiles',
        ];
    }

    public function getJsFiles(&$jsFiles)
    {
        $jsFiles[] = 'plugins/ThemeChineseNewYear/javascripts/zodiac.js';
    }

    public function addJsGlobalVariables(&$out)
    {
        $animal = $this->getCurrentAnimal();
        $encoded = json_encode($animal, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
        $out .= "    piwik.zodiacAnimal = $encoded;\n";
    }

    /**
     * Determine the current zodiac animal from settings or year.
     */
    private function getCurrentAnimal()
    {
        $settings = new SystemSettings();
        $value = $settings->zodiacAnimal->getValue();

        if ($value && $value !== 'auto' && in_array($value, self::$animals, true)) {
            return $value;
        }

        // 2020 = Rat (index 0), cycle repeats every 12 years
        $year = (int) date('Y');
        $index = (($year - 2020) % 12 + 12) % 12;

        return self::$animals[$index];
    }

    public function configureThemeVariables(Plugin\ThemeStyles $themeStyles)
    {
        // === BACKGROUNDS — warm cream and white ===
        $themeStyles->colorBackgroundBase = '#FFF8F0';
        $themeStyles->colorBackgroundContrast = '#ffffff';
        $themeStyles->colorBackgroundHighContrast = '#8B0000';
        $themeStyles->colorBackgroundTinyContrast = '#FFF5E6';
        $themeStyles->colorBackgroundLowContrast = '#FFE8D0';

        // === TEXT — dark red-brown tones ===
        $themeStyles->colorText = '#2D0A0A';
        $themeStyles->colorTextLight = '#4A1A1A';
        $themeStyles->colorTextLighter = '#6B3030';
        $themeStyles->colorTextContrast = '#8B0000';

        // === BRAND — Chinese red ===
        $themeStyles->colorBrand = '#DE2910';
        $themeStyles->colorBrandContrast = '#ffffff';

        // === SERIES — Chinese red for graphs ===
        $themeStyles->colorBaseSeries = '#DE2910';

        // === LINKS — gold ===
        $themeStyles->colorLink = '#C5941F';

        // === HEADER — deep red with gold text ===
        $themeStyles->colorHeaderBackground = '#8B0000';
        $themeStyles->colorHeaderText = '#FFD700';

        // === HEADLINES ===
        $themeStyles->colorHeadlineAlternative = '#8B0000';

        // === BORDERS — soft gold-beige ===
        $themeStyles->colorBorder = '#E8C4A0';

        // === CODE ===
        $themeStyles->colorCode = '#4A1A1A';
        $themeStyles->colorCodeBackground = '#FFF8F0';

        // === MENU ===
        $themeStyles->colorMenuContrastText = '#4A1A1A';
        $themeStyles->colorMenuContrastTextSelected = '#2D0A0A';
        $themeStyles->colorMenuContrastTextActive = '#DE2910';
        $themeStyles->colorMenuContrastBackground = '#ffffff';

        // === WIDGETS ===
        $themeStyles->colorWidgetBackground = '#ffffff';
        $themeStyles->colorWidgetBorder = '#FFE8D0';
        $themeStyles->colorWidgetTitleText = '#2D0A0A';
        $themeStyles->colorWidgetTitleBackground = '#ffffff';
        $themeStyles->colorWidgetExportedBackgroundBase = '#ffffff';

        // === FOCUS ===
        $themeStyles->colorFocusRing = '#DE2910';
        $themeStyles->colorFocusRingAlternative = '#C5941F';
    }
}
