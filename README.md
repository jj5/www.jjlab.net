# www.jjlab.net

Website for the In The Lab With Jay Jay video blog: https://jjlab.net/

## Installation

Run the install-composer.sh script (as root) to install composer.

Run the install.sh script to get:

* git submodules in the 'ext' directory
* composer dependencies in the 'vendor' directory

## Configuration

I need an API key defined in config.php.

I can get an API key here: https://console.cloud.google.com/welcome?project=jj5web

Example config.php file:

```
define( 'DEBUG', false );
define( 'YOUTUBE_API_KEY', '...' );
```
