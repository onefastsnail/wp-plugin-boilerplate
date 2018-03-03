# A Wordpress plugin boilerplate

**Currently a work in progress :)**

The idea here is to try abstract business logic from the theme into a plugin, this one. Therefore leaving the theme to mostly handle the presentation layer of the application, as it should.

## Goals

* To follow the [PSR-2](https://www.php-fig.org/psr/psr-2/) standards
* Consolidate business logic into a resuable plugin, leaving the theme to be more easily interchangable
* Provide some common functionality via boilerplate code

## Usage

When its complete i will complete this.

## Namespaces

We have them, so a few search replaces needed to taylor this plugin to your needs.

* `find . -type f -name '*.php' -exec sed -i '' "s/Onefastsnail\\\MyPlugin/Vendor\\\Package/" {} +`
* `find . -type f -name '*.php' -exec sed -i '' "s/MY_PLUGIN_PATH/YOUR_PLUGIN_PATH/" {} +`
* `find . -type f -name '*.php' -exec sed -i '' "s/www.onefastsnail.com/www.something.com/" {} +`
* `find . -type f -name '*.php' -exec sed -i '' "s/my-plugin/your-plugin/" {} +`

## Contributors

Paul Stewart

Inspired from [https://github.com/devinvinson/WordPress-Plugin-Boilerplate/](https://github.com/devinvinson/WordPress-Plugin-Boilerplate/)

## License

GPLv2 or later License URI: [http://www.gnu.org/licenses/gpl-2.0.html](http://www.gnu.org/licenses/gpl-2.0.html)
