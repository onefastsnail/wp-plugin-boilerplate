# A Wordpress plugin boilerplate

The idea here is to try abstract business logic from the theme into a plugin, this one. Therefore leaving the theme to mostly handle the presentation layer of the application.

## Namespaces

* `find . -type f -name '*.php' -exec sed -i '' "s/Onefastsnail\\\MyPlugin/Vendor\\\Package/" {} +`
* `find . -type f -name '*.php' -exec sed -i '' "s/HP_MY_EVENTS_PATH/MY_PLUGIN_PATH/" {} +`
* `find . -type f -name '*.php' -exec sed -i '' "s/www.onefastsnail.com/www.something.com/" {} +`
* `find . -type f -name '*.php' -exec sed -i '' "s/my-plugin/www.something.com/" {} +`

## Notes

* Currently a work in progress :)

## Contributors

Paul Stewart

## License

GPLv2 or later License URI: [http://www.gnu.org/licenses/gpl-2.0.html](http://www.gnu.org/licenses/gpl-2.0.html)
