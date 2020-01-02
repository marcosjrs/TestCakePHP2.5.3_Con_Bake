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

CREATE TABLE `restaurante2`.`mesas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `mesero_id` INT(11) NULL COMMENT 'Clave foranea al mesero que atenderá la mesa en un momento determinado',
  `serie` VARCHAR(10) NULL COMMENT 'Numero identificativo de mesa dentro del restaurante2',
  `puestos` VARCHAR(20) NULL COMMENT 'numero de personas que cojen en la mesa',
  `posicion` VARCHAR(100) NULL COMMENT 'Descripción del lugar en el que se encuentra la mesa ubicada',
  `created` DATETIME NULL DEFAULT NULL,
  `modified` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`)); 

CREATE TABLE `restaurante2`.`cocineros` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NULL,
  `apellido` VARCHAR(100) NULL,
  `created` DATETIME NULL DEFAULT NULL,
  `modified` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;

CREATE TABLE `restaurante2`.`platos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `categoria_plato_id` INT(11) NULL COMMENT 'Clave foranea al tipo de plato',
  `nombre` VARCHAR(50) NULL,
  `descripcion` VARCHAR(200) NULL,
  `precio` float(6,2) NULL,
  `created` DATETIME NULL DEFAULT NULL,
  `modified` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;

CREATE TABLE `restaurante2`.`categoria_platos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(200) NULL,
  PRIMARY KEY (`id`)
);

-- Tabla de relacion muchos a muchos de cocinero con platos
CREATE TABLE `restaurante2`.`cocineros_platos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cocinero_id` INT(11) NOT NULL COMMENT 'Clave foranea al cocinero',
  `plato_id` INT(11) NOT NULL COMMENT 'Clave foranea al plato',
  PRIMARY KEY (`id`)
);


```

Instrucciones con cake bake
---------------------------

Tras la descarga de la version correspondiente de cakephp y los cambios correspondientes en la configuración inicial en database.php (usuario, contraseña y BBDD).

Entramos en la carpeta app y ejecutamos cake bake

```
cd app
cake bake
```

Con lo cual nos muestra un menu interactivo, con el que ir creando, por ej., primero los modelos, luego controllers y luego las vistas.


**Definimos los MODELOS**

```
>M
>default  Pulsando enter
>        Seleccionando Mesero
>y        Establecer un displayField
>3        Seleccionamos serie como displayField
>y        Seleccioamos que queremos establecer los criterios de los campos del modelo


Para id, pulsamos enter para no asignar ningún criterio (que es 35 por defecto)
Para mesero_id, pulsamos enter para no asignar ningún criterio (que es 35 por defecto)
Para serie, pulsamos: 24 (que es notEmpty), luego: y (para continuar), luego: 25 (que es numeric), luego: n para pasar al siguiente
Para puestos, pulsamos: 24, luego: y (para continuar), luego: 25, luego: n para pasar al siguiente
Para posicion, pulsamos: 24, luego: n para pasar al siguiente
Para modified, pulsamos enter para no asignar ningún criterio (que es 35 por defecto)
Para created, pulsamos enter para no asignar ningún criterio (que es 35 por defecto)
```


```
>y    (respondiendo que queremos definir alguna asociacion para el modelo)
>y    (indicando que tiene razón  al detectar que como contiene un mesero_id, se debe añadir un belongsTo )
>n    (respondiendo que no queremos más relaciones para este)
>y    (respondiendo que todo está ok)
```

Luego hacemos lo propio pero para mesa

```
>M
>default  Pulsando enter
>        Seleccionando Mesa
>y        Establecer un displayField
>3        Seleccionamos nombre como displayField
>y        Seleccioamos que queremos establecer los criterios de los campos del modelo


Para id, pulsamos enter para no asignar ningún criterio (que es 35 por defecto)
Para mesero_id, pulsamos enter para no asignar ningún criterio (que es 35 por defecto)
Para dni, pulsamos: 24 (que es notEmpty), luego: y (para continuar), luego: 1 (que es alfanumerico), luego: n para pasar al siguiente
Para nombre, pulsamos: 24, luego: y (para continuar), luego: 25, luego: n para pasar al siguiente
Para apellido, pulsamos: 24, luego: n para pasar al siguiente
Para telefono, pulsamos: 24, luego: y (para continuar), luego: 25 (que es numeric), luego: n para pasar al siguiente
Para modified, pulsamos enter para no asignar ningún criterio (que es 35 por defecto)
Para created, pulsamos enter para no asignar ningún criterio (que es 35 por defecto)
```

Al terminar, pregunta si queremos definir alguna asociacion para el modelo, teclamos: 

```
>y    (respondiendo que queremos definir alguna asociacion para el modelo)
>y    (indicando que tiene razón, al detectar se trata de hasMany con mesas )
>n    (respondiendo que no queremos más relaciones para este)
>y    (respondiendo que todo está ok)
```

---


Ahora para Cocineros

```
>M
>default  Pulsando enter
>        Seleccionando Cocinero
>y        Establecer un displayField
>3        Seleccionamos nombre como displayField
>y        Seleccionamos que queremos establecer los criterios de los campos del modelo


Para id, pulsamos enter para no asignar ningún criterio (que es 35 por defecto)
Para nombre, pulsamos: 24, luego: n para pasar al siguiente
Para apellido, pulsamos: 24, luego: n para pasar al siguiente
Para modified, pulsamos enter para no asignar ningún criterio (que es 35 por defecto)
Para created, pulsamos enter para no asignar ningún criterio (que es 35 por defecto)
```

Al terminar, pregunta si queremos definir alguna asociacion para el modelo, teclamos: 

```
>y    (respondiendo que queremos definir alguna asociacion para el modelo)
>y    (indicando que tiene razón, al detectar se trata de hasMany con CocinerosPlato )
>n    (respondiendo que no queremos más relaciones para este)
>y    (respondiendo que todo está ok)
```

---


Y ahora con Platos

```
>M
>default  Pulsando enter
>        Seleccionando Mesa
>y        Establecer un displayField
>3        Seleccionamos nombre como displayField
>y        Seleccioamos que queremos establecer los criterios de los campos del modelo


Para id, pulsamos enter para no asignar ningún criterio (que es 35 por defecto)
Para categoria_plato_id, pulsamos enter para no asignar ningún criterio (que es 35 por defecto)
Para nombre, pulsamos: 24, luego: n para pasar al siguiente
Para descripcion, pulsamos: 24, luego: n para pasar al siguiente
Para precio, pulsamos: 24, luego: y (para continuar), luego: 25 (que es numeric), luego: n para pasar al siguiente
Para modified, pulsamos enter para no asignar ningún criterio (que es 35 por defecto)
Para created, pulsamos enter para no asignar ningún criterio (que es 35 por defecto)
```

Al terminar, pregunta si queremos definir alguna asociacion para el modelo, teclamos: 

```
>y    (respondiendo que queremos definir alguna asociacion para el modelo)
>y    (indicando que tiene razón, al detectar se trata de belongsTo CategoriaPlato )
>y    (respondiendo que queremos más relaciones para este)
>3    (hasMany)
>CocinerosPlato   (Será el alias dado a la relacion que haremos de hasMany)
>CocinerosPlato    (NOmbre del ClassName)
>3    (seleccionan plato_id, que será con el que se relacionará)
>n    (respondiendo que no necesita más relaciones)
>y    (respondiendo que todo está ok)
```

Y ahora con CategoriaPlato

```
>M
>default  Pulsando enter
>        Seleccionando CategoriaPlato
>y        Establecer un displayField
>2        Seleccionamos categoria como displayField
>y        Seleccionamos que queremos establecer los criterios de los campos del modelo


Para id, pulsamos enter para no asignar ningún criterio (que es 35 por defecto)
Para categoria, pulsamos: 24, luego: n para pasar al siguiente
```

Al terminar, pregunta si queremos definir alguna asociacion para el modelo, teclamos: 

```
>y    (respondiendo que queremos definir alguna asociacion para el modelo)
>y    (indicando que tiene razón, al detectar se trata de hasMany Plato )
>n    (respondiendo que no queremos más relaciones para este)
>y    (respondiendo que todo está ok)
```


**Ahora empezamos con los CONTROLLERS**

```
>C
>default  (Pulsando enter, ya que es por defecto)
>        (Seleccionando Mesas)
>n        (Indicando que no queremos definir los controllers interactivamente de forma automatica)
>y        (Indicando que quemos index(), add(), view() y edit() )
>n        (Indicando que no queremos una clase para la administración)
>y        (Indicando que ok)
```

Lo mismo pero para los Meseros

```
>C
>default  (Pulsando enter, ya que es por defecto)
>        (Seleccionando Meseros)
>n        (Indicando que no queremos definir los controllers interactivamente de forma automatica)
>y        (Indicando que quemos index(), add(), view() y edit() )
>n        (Indicando que no queremos una clase para la administración)
>y        (Indicando que ok)
```

Lo mismo pero para los Cocineros

```
>C
>default  (Pulsando enter, ya que es por defecto)
>        (Seleccionando Meseros)
>n        (Indicando que no queremos definir los controllers interactivamente de forma automatica)
>y        (Indicando que quemos index(), add(), view() y edit() )
>n        (Indicando que no queremos una clase para la administración)
>y        (Indicando que ok)
```

Lo mismo pero para los Cocineros

```
>C
>default  (Pulsando enter, ya que es por defecto)
>        (Seleccionando Meseros)
>n        (Indicando que no queremos definir los controllers interactivamente de forma automatica)
>y        (Indicando que quemos index(), add(), view() y edit() )
>n        (Indicando que no queremos una clase para la administración)
>y        (Indicando que ok)
```

Lo mismo pero para los CateriaPlatos

```
>C
>default  (Pulsando enter, ya que es por defecto)
>        (Seleccionando Meseros)
>n        (Indicando que no queremos definir los controllers interactivamente de forma automatica)
>y        (Indicando que quemos index(), add(), view() y edit() )
>n        (Indicando que no queremos una clase para la administración)
>y        (Indicando que ok)
```
**Ahora las VISTAS**

```
>V
>default  (Pulsando enter, ya que es por defecto)
>        (Seleccionando Meseros)
>n        (Indicando que no queremos definir las vistas interactivamente de forma automatica)
```

Lo mismo para Mesas

```
>V
>default  (Pulsando enter, ya que es por defecto)
>        (Seleccionando Mesas)
>n        (Indicando que no queremos definir las vistas interactivamente de forma automatica)
```

Lo mismo para Cocineros

```
>V
>default  (Pulsando enter, ya que es por defecto)
>        (Seleccionando Cocineros)
>n        (Indicando que no queremos definir las vistas interactivamente de forma automatica)
```

Lo mismo para Platos

```
>V
>default  (Pulsando enter, ya que es por defecto)
>        (Seleccionando Platos)
>n        (Indicando que no queremos definir las vistas interactivamente de forma automatica)
```


Lo mismo para CategoriaPlatos

```
>V
>default  (Pulsando enter, ya que es por defecto)
>        (Seleccionando Platos)
>n        (Indicando que no queremos definir las vistas interactivamente de forma automatica)
```




>q        (Para salir)
```