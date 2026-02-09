<?php

namespace Piwik\Plugins\ThemeChineseNewYear;

use Piwik\Plugin;

class ThemeChineseNewYear extends Plugin
{
    public function registerEvents()
    {
        return [
            'Theme.configureThemeVariables' => 'configureThemeVariables',
        ];
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
