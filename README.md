CakePHP
=======

[![CakePHP](http://cakephp.org/img/cake-logo.png)](http://www.cakephp.org)

CakePHP is a rapid development framework for PHP which uses commonly known design patterns like Active Record, Association Data Mapping, Front Controller and MVC.
Our primary goal is to provide a structured framework that enables PHP users at all levels to rapidly develop robust web applications, without any loss to flexibility.

Some Handy Links
----------------

[CakePHP](http://www.cakephp.org) - The rapid development PHP framework

[CookBook](http://book.cakephp.org) - THE CakePHP user documentation; start learning here!

[API](http://api.cakephp.org) - A reference to CakePHP's classes

[Plugins](http://plugins.cakephp.org/) - A repository of extensions to the framework

[The Bakery](http://bakery.cakephp.org) - Tips, tutorials and articles

[Community Center](http://community.cakephp.org) - A source for everything community related

[Training](http://training.cakephp.org) - Join a live session and get skilled with the framework

[CakeFest](http://cakefest.org) - Don't miss our annual CakePHP conference

[Cake Software Foundation](http://cakefoundation.org) - Promoting development related to CakePHP

Get Support!
------------

[#cakephp](http://webchat.freenode.net/?channels=#cakephp) on irc.freenode.net - Come chat with us, we have cake

[Google Group](https://groups.google.com/group/cake-php) - Community mailing list and forum

[GitHub Issues](https://github.com/cakephp/cakephp/issues) - Got issues? Please tell us!

[Roadmaps](https://github.com/cakephp/cakephp/wiki#roadmaps) - Want to contribute? Get involved!

[![Bake Status](https://secure.travis-ci.org/cakephp/cakephp.png?branch=master)](http://travis-ci.org/cakephp/cakephp)

![Cake Power](https://raw.github.com/cakephp/cakephp/master/lib/Cake/Console/Templates/skel/webroot/img/cake.power.gif)


Scripts BBDD Previos
----------------------
```

CREATE SCHEMA `restaurante2` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci ;

CREATE TABLE `restaurante2`.`meseros` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `dni` VARCHAR(10) NULL,
  `nombre` VARCHAR(50) NULL,
  `apellido` VARCHAR(100) NULL,
  `telefono` VARCHAR(10) NULL,
  `created` DATETIME NULL DEFAULT NULL,
  `modified` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;

INSERT INTO `restaurante2`.`meseros` (`dni`, `nombre`, `apellido`, `telefono`, `created`) 
  VALUES ('12345678Z', 'Andrés', 'Calamardo', '123121212', now());
INSERT INTO `restaurante2`.`meseros` (`dni`, `nombre`, `apellido`, `telefono`, `created`) 
  VALUES ('87654321Z', 'Bob', 'Esponja', '123111111', now());

CREATE TABLE `restaurante2`.`mesas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `mesero_id` INT(11) NULL COMMENT 'Clave foranea al mesero que atenderá la mesa en un momento determinado',
  `serie` VARCHAR(10) NULL COMMENT 'Numero identificativo de mesa dentro del restaurante2',
  `puestos` VARCHAR(20) NULL COMMENT 'numero de personas que cojen en la mesa',
  `posicion` VARCHAR(100) NULL COMMENT 'Descripción del lugar en el que se encuentra la mesa ubicada',
  `created` DATETIME NULL DEFAULT NULL,
  `modified` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`)); 

INSERT INTO `restaurante2`.`mesas` (`mesero_id`, `serie`, `puestos`, `posicion`, `created`) VALUES ('1', '001', '6', 'Esquina superior izquierda', now());
INSERT INTO `restaurante2`.`mesas` (`mesero_id`, `serie`, `puestos`, `posicion`, `created`) VALUES ('1', '002', '5', 'Centro superior ', now());
INSERT INTO `restaurante2`.`mesas` (`mesero_id`, `serie`, `puestos`, `posicion`, `created`) VALUES ('2', '003', '5', 'Centro superior derecho ', now());


```