# NgStateLga

# Introduction
This laravel package helps developers with Nigerian states and local government areas. 

# Installation
PHP 5.4+ and Composer is required.

To get this package, simply add the following line to the require block of your composer.json file.

```
  composer require favoriabs/ngstatelga:dev-master
```
You'll then need to run composer install or composer update to download it and have the autoloader updated.

Once the NgStateLga is installed, you need to register the service provider. Open up ```config/app.php``` and add the following to the ```providers``` key.

* ```Favoriabs\NgStateLga\NgStateLgaServiceProvider::class,```

