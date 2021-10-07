<?php

declare(strict_types=1);

use App\AbstractFactory\ArtDeco\ArtDecoFactory;
use App\AbstractFactory\FurnitureFactory;
use App\AbstractFactory\Modern\ModernFactory;
use App\AbstractFactory\Victorian\VictorianFactory;
use App\AbstractSocialNetworkFactory\AbstractSocialNetworkFactory;
use App\AbstractSocialNetworkFactory\Facebook\FacebookFactory;
use App\FactoryMethod\FactoryMethod;
use App\FactoryMethod\SocialNetworkFactory;
use App\Singleton\Singleton;

include __DIR__.'/../vendor/autoload.php';

/** Singleton */
$a = Singleton::getInstance();
$b = Singleton::getInstance();

// var_dump($a === $b);

/** Factory Method */
$t1 = FactoryMethod::make('type_1');
// var_dump($t1);
$t1->test();

$network = SocialNetworkFactory::make('twitter');
// var_dump($network);

/** Abstract Factory */
$factory = new FurnitureFactory();
$factory->addFactory('victorian', new VictorianFactory());
$factory->addFactory('modern', new ModernFactory());
$factory->addFactory('art_deco', new ArtDecoFactory());

$chair = $factory->makeChair('art_deco');
$table = $factory->makeTable('art_deco');

// var_dump(
//     $chair,
//     $table,
// );

$socialNetworkFactory = new AbstractSocialNetworkFactory();
$socialNetworkFactory->addSocialNetwork('facebook', new FacebookFactory());

$socialNetwork = $socialNetworkFactory->createSocialNetwork('facebook');
$user = $socialNetwork->login(['email' => 'flan@email.com', 'password' => 'secret']);
$profile = $socialNetwork->getProfile($user);

// var_dump($user, $profile);

$houseBuilder = new \App\Builder\HouseBuilder();
$houseBuilder
    ->doors(2)
    ->rooms(3)
    ->hasGarden();

$house = $houseBuilder->getHouse();

dd($house);
