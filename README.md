Basic information
-----------------
The project is based on Sylius (Open Source Headless eCommerce Platform)
and it is the result of the BitBag Academy's final assignment.


Goals
-----
The first thing to do was to install Sylius and programatically add
the functionality of choosing product's color in the admin panel to
the base Sylius "Fashion Web Store".
    
After selecting the color it was supposed to be displayed on the shop
page after clicking on a selected product.

    
Results
-------
Now it is possible to choose product's color in the admin panel while
creating any kind of a new product or while editing it in the "Item color"
section.
    
The selected color can be seen on the shop page after clicking on any
product in the product's details section (on the bottom). If the color
has not been selected, then it will be displayed as "Not specified".


Other information
-----------------
The project follows BitBag coding standards and was built using PHP 8.0,
Symfony 5.4.7 and Sylius 1.11.0
    
The assignment was accepted by the company.


Installation
------------

```bash
$ composer install
$ php bin/console sylius:install
$ yarn install
$ yarn build
$ php bin/console symfony serve -d --no-tls
$ open http://localhost:8000/
```
