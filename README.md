# Theme Chinese New Year

A festive Chinese New Year theme with red and gold colors and a yearly zodiac animal background.

> **Warning**
>
> This plugin is experimental and was coded using [Claude Code](https://claude.ai).
> It is provided without any warranty regarding quality, stability, or performance.
> This is a community project and is not officially supported by Matomo.

## Description

Celebrate the Lunar New Year with this festive Matomo theme. It transforms your analytics dashboard with a traditional Chinese red and gold color palette, a deep red header with gold navigation text, and a zodiac animal background that changes each year.

### Features

- **Red and gold color scheme** across the entire interface — header, sidebar, graphs, maps, and sparklines
- **Yearly zodiac animal background** — 12 high-quality images (rat, ox, tiger, rabbit, dragon, snake, horse, goat, monkey, rooster, dog, pig) displayed with subtle opacity, automatically rotating each year
- **Admin setting** — super users can manually override the zodiac animal from Administration > General Settings
- **Custom graph palette** — 8 data series in Chinese red, imperial gold, deep crimson, lantern orange, goldenrod, firebrick, and tan gold
- **Themed visitor map** — red-to-gold gradient with gold highlights for selected countries
- **Clean card layout** — white content cards with warm shadows over the background

### Screenshot

![Dashboard with Chinese New Year theme](screenshots/dashboard.png)

## Requirements

- Matomo >= 5.0
- PHP >= 8.1

## Installation

### From Matomo Marketplace
1. Go to Administration > Marketplace
2. Search for "ThemeChineseNewYear"
3. Click Install

### Manual Installation
1. Download the latest release from GitHub
2. Extract to your `matomo/plugins/` directory
3. Activate the plugin in Administration > Plugins

## Configuration

Go to **Administration > General Settings** and find the **ThemeChineseNewYear** section. Super users can select a specific zodiac animal or leave it on "Auto" to follow the current Chinese zodiac year.

## Changelog

See [CHANGELOG.md](CHANGELOG.md).

## License

GPL-3.0+. See [LICENSE](LICENSE) for details.
