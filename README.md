# Autoload
Let's imagine that we organize our code in different files, each one with a class and with the name of the class as the file name. For example, OneClass.php and OtherClass.php will contain the definitions of `class OneClass` and class `OtherClass` respectively. To initialize these classes from another script we could do something like this:

```
// include the files containing the classes
include_once 'OneClass.php';
include_once 'OtherClass.php';

// initialize the objects
$object1 = new OneClass();
$object2 = new OtherClass();
```
All perfect. You keep working on the application and you are defining new classes in more and more files that you have to remember to include in your script:
```
// include the files containing the classes
include_once 'OneClass.php';
include_once 'OtherClass.php';
include_once 'MoreClass.php';
include_once 'FourClass.php';
include_once  'EvenMoreClass.php';

// initialize the objects
$object1 = new OneClass();
$object2 = new OtherClass();
$object3 = new MoreClass();
//....
```
There is nothing wrong with the above code, it will work perfectly. But what if I have a big application with more than Class? Well, you will have to do all the time includes. What a pain in the ass, what a discomfort; and if I forget a file…. `Fatal ERROR`.
> Sorry for the expression

## AUTOLOAD
Instead of having to load each of our application's classes manually, we can register an autoloader. The autoloader is intended to automatically load the classes used. Every time an attempt is made to initialize a class and the class does not exist, the name of this class is passed to the autoloader and it is executed. In the autoloader we can automate the loading process without having to manually include each file and it also allows us to make the code faster, only the classes that are actually used will be loaded. 
Here you have one example of how to use Autoload:
```
<?php

function app_autoloader($class)
{
    require_once 'clases/'.$class.'.php';
}

spl_autoload_register('app_autoloader');
```

And here you have how I use autoload instead of `require_once() ` in my index.php:
```
<?php
require_once 'autoload.php';
/*Instead of using that:
require_once 'clases/usuario.php';
require_once 'clases/categoria.php';
require_once 'clases/entrada.php';
*/

$usuario = new Usuario();

echo $usuario->nombre;
echo "<br>";
echo $usuario->email;

$categoria = new Categoria();
echo "<br>".$categoria->nombre;
```
As you could see, you will safe so much time doing like this


