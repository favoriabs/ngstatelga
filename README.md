# ngstatelga

# Introduction
This laravel package helps developers with Nigerian states and local government areas.

# Installation
PHP 5.4+ and Composer is required.

To get this package, simply add the following line to the require block of your composer.json file.

```
  composer require favoriabs/ngstatelga:1.0.0
```
Once the NgStateLga is installed, you need to register the service provider. Open up ```config/app.php``` and add the following to the ```providers``` section.

* ```Favoriabs\NgStateLga\NgStateLgaServiceProvider::class,```

# Usage
After this is done, you'll need to run the following commands.
* ```php artisan vendor:publish``` .
This will publish migration files for both states and local government areas to your migration file. It will also publish seeder files.
It will also publish the view page, so you can edit it as you want the page to be.

When this is done, you will need to run ```php artisan migrate``` to migrate.
Then ```php artisan db:seed``` to seed with the appropriate states and local government areas. Do not forget to add the classes for the seeder files to ```DatabaseSeeder.php``` like so:
```
  $this->call(StatesTableSeeder::class);
  $this->call(Lgas_1_TableSeeder::class);
  $this->call(Lgas_2_TableSeeder::class);
  $this->call(Lgas_3_TableSeeder::class);
  $this->call(Lgas_4_TableSeeder::class);
 ```
 You can now navigate to the appropriate route (/ngstatelga) at the root of your app like so:
 ```
 localhost:8000/ngstatelga
```
This should load up a view with the all Nigerian states and their respective local government areas.

# Contributing
Please feel free to fork this package and contribute by submitting a pull request to enhance the functionalities.

# License
The MIT License (MIT).
