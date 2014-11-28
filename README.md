ULYSSE
------------

PHP Procedural Framework & Content Managment Framework, with 0% OOP shit.
Because unless you're Platon, you know that real word is not about abstract objects.

FEATURES
------------

* MVC : routes -> controllers -> template
* template system, with overridable templates and switchable themes.
* Config files
* organize code in module, config file by module.
* Events listeners, events are also used in templates to let module include dynamically html or js / css.
* String translations
* Front-end edit links for contents.
* PSR0 autoloader for vendors library or your own code.

REQUIREMENTS
-------------

* php >= 5.4 with sqlite drive module enabled.
* Apache

INSTALLATION
-------------

* Copy "www/example.index.php" to "www/index.php" file (you may name it as you want or create several entry points, like index_fr.php)
* Copy "example.config" directory to "config"
* Rename "example.htaccess" to ".htaccess"
* make sure "writable" directory is writable by apache

Edit pages.php file to start create pages on your site.


CREATE PAGES
--------------

pages.php file map a framework path to a php callable.
It uses php closures or simple strings.
A page may return a string or a closure :
In config/_pages.php :

```php
$config['pages']['homepage'] = [
    'path' => '',
    'callable' => 'hello i am the homepage',
];
// to render a template page.php inside a layout.php template
$config['pages']['homepage'] = [
    'path'   => '',
    'template' => 'layout.php',
    'callable' =>  function() {template('homepage.php');}
];
// MVC style :
$config['pages']['hello'] => [
    'path' => 'hello',
    'callable' => function() {
      $controller = new \myVendor\myModule\myController();
      $controller->hello();
    }
  ]
return $pages;
```

TEMPLATES
---------------

Use a template to render a page with variables :
```php
template('path/to/template.php', ['variable' => 'value'])
```

Printing in a secured way a variable in a template :
Never use print or echo to avoid code injection.
```php
<?php e($variable) ?>
```

Use a function to format a value
```php
<?php e($prix, 'euros') ?>
```

TEMPLATES OVERRIDABLE AND THEMES
---------------------------------

By default, templates will use simply path passed as an argument :
For "path/to/template.php", "'path/to/template.php', will be used to render the template.
But Ulysse will first look for an existing "themes/mytheme/path/to/template.php"
and will use it if found.

"mytheme" is the default enabled theme, unless you specify theme to use in the template function
or in your pages declaration.