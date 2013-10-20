Sites
=====

FlatTurtle sites

Installation
------------

*This repository is a copy of the Laravel framework with minor modifications. The Laravel framework requires PHP >= 5.3.7 and the MCrypt PHP extension.*

Clone this repository and install the Laravel framework and other dependencies:

	composer install

Make sure the folders in `app/storage` are writable.

Next, publish the **SiteCore** configuration files and assets using the following artisan command:

	php artisan flatturtle:install

Updating
--------

To update the **SiteCore** to the latest version run:

	composer update flatturtle/sitecore

This will pull the latest changes from the git repository. When assets are modified, you will need to run the following artisan command to publish those changes:

	php artisan flatturtle:update

Also, double check if the configuration file was modified and change your local version accordingly. You can also overwrite your local configuration file with the latest version with the `php artisan flatturtle:install` command.

Configuration
-------------

After installing the **SiteCore** with the artisan command there will be a configuration file located in `app/config/packages/flatturtle/sitecore`.

Templating
----------

The **SiteCore** contains a default template file. If you wish to modify this template execute the following:

	php artisan view:publish flatturtle/sitecore

This will copy the template file to `app/views/flatturtle/sitecore` so that you can modify it. Then change your configuration file to use that template file instead of the included one:

	'template' => 'flatturtle.sitecore.template',
