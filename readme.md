## CubosAdmin 0.1 (AdminLTE v2.3.2 + Laravel 5.2.*)

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)


CubosAdmin aims to be the base application integration for [Philippine Global Outsourcing](http://philippineglobaloutsourcing.com) projects, [Christopher John Cubos](https://facebook.com/chriscubos), and [Ethan Sky Cubos](https://www.facebook.com/ethanskycubos). Our goal is to provide an integrated backend platform to help developers jumpstart their projects on both the frontend and backend of their applications.

## Installation
Download then run composer update

## Support

The Documentation will be done after the entire app will be integrated. This implmentation of Laravel and AdminLTE is created by [Philippines Outsourcing](http://philippineglobaloutsourcing.com).

## Folder Structure
	CubosAdmin/
	├── public/
	│	├──	themes/
	│	│	├──	adminlte
	│	│	│   ├── bootstrap/
	│	│	│   ├── css/
	│	│	│   ├── img/
	│	│	│   ├── js/
	│	│	│   └── plugins/
	│	│   └── img/
	│	├──	assets/
	│	│	├── css/
	│	│	├── js/
	│	│	├── font/
	│	│	├── plugins/
	│	│	└── img/
	└── app/
	    ├── Templates/
	    │   ├── __adminlte/
	    │   │   ├── assets/
	    │   │   ├── demos/
	    │   │   ├── layouts/
	    │   │   ├── menus/
	    │   │   ├── partials/
	    │   │   └── template/
	    │   ├── front/
	    │   │   ├── assets/
	    │   │   ├── demos/
	    │   │   ├── layouts/
	    │   │   ├── partials/
	    │   │   │   ├── header.php
	    │   │   │   └── footer.php
	    │   │   └── template/
	    │   ├── auth/
	    │   ├── errors/
	    │   ├── layouts/
	    │   └── vendor/
	    ├── Models/
	    └── Modules/


## Packages Included

#### AdminLTE v2.3.2

#### Laravel 5.2.5


#### Html/Form Builder (laravelcollective/html)

		
	composer require laravelcollective/html
	
	config/app.php
	
	Collective\Html\HtmlServiceProvider::class,
	
	fascades
	
	'Form'       => Collective\Html\FormFacade::class,
	'Html'       => Collective\Html\HtmlFacade::class,
	

#### Image Manipulation (intervention/image)

		
	composer require intervention/image
	
	config/app.php
	
	Intervention\Image\ImageServiceProvider::class,
	
	fascade
	
	'Image'      => Intervention\Image\Facades\Image::class,
	


## Licenses

##### Laravel Framework
The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

##### AdminLTE
AdminLTE is an open source project by [Almsaeed Studio](https://almsaeedstudio.com) that is licensed under [MIT](http://opensource.org/licenses/MIT). Almsaeed Studio
reserves the right to change the license of future releases.

##### CubosAdmin
CubosAdmin is a use at your risk license. For commercial or personal use. Retain the copyright notices. (c) Copyright 2016 [Philippine Global Outsourcing](http://philippineglobaloutsourcing.com) projects, [Christopher John Cubos](https://facebook.com/chriscubos), and [Ethan Sky Cubos](https://www.facebook.com/ethanskycubos).

