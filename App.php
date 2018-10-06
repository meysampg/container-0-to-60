<?php

include "vendor/autoload.php";

use Illuminate\Container\Container;
use Foo\Contracts\LogInterface;
use Foo\Services\StdoutLog;
use Foo\Services\Post;
use Foo\Services\NewPost;
use Foo\Contracts\PersonInterface;
use Foo\Services\Person;

// We create an application class, this is like the laravel base
class App {
    // Our laravel base has a container inside of it, we add it
    public $container;

    public function __construct()
    {
        // On our application, we create a container
        $this->container = Container::getInstance();

        // On a config file, or bootstrap file or even in our constructor, we
        // add our classes to our container.
        //
        // first we bind an implemented Log class (based on our morning
        // example) to our contract of Log
        $this->container->bind(LogInterface::class, StdoutLog::class);


        // In the next step, we replace a new implementation of class, with an
        // old one
        $this->container->bind(Post::class, NewPost::class);

        // And in some situations, behind the type hint of class for injection
        // you need to pass a value in constrctor. First bind the implementation
        // to the contract and at bottom inject value to them.
        $this->container->bind(PersonInterface::class, Person::class);
    }
}


// and we use it :D
$app = new App;
$container = $app->container;

// first get the logger
$log = $container->make(LogInterface::class);
$log->debug("Hello, World!");

// and make a post from an old version and publish it ;)
$post = $container->make(Post::class);
$post->publish();

// get a person instance, while trying to inject values to its contructor.
$meysam = $container->make(PersonInterface::class, ['name' => 'Meysam']);
echo $meysam->sayName() . PHP_EOL;
$taha = $container->make(PersonInterface::class, ['name' => 'Taha']);
echo $taha->sayName() . PHP_EOL;
