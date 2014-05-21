CocoMVC
=======

Simple PHP MVC Framwork

## What is it
CocoMVC 是一個非常簡單輕便的 MVC Framework. 相較於功能強大的 Framework 來說越多功能即代表了不易上手和許多限制, 對於小型接案者許多功能是用不到的, 只是增加專案無謂的體積與反應速度. 而 CocoMVC 是在作者接案經驗下所誕生的產物, 日後也會將其應用在實務上, 並持續對 CocoMVC 改進. 透過版本控制軟體與網頁前端視覺設計師合作是相當愉快的, 而在網頁前端視覺設計師方面也只需學會基礎的 PHP 即可得心應手. 而對於想要學習 PHP MVC 的人 CocoMVC 也是相當容易了解, 因為程式碼實在太少了!

順帶一提 可可 是我女友的貓 ~ =OwO=

CocoMVC is very simple and light MVC framework. other more powerful framework, more features mean harder to learn and a lot limit, it's not suite and waste for SOHO, it added size of project and more response time. and build the CocoMVC is author base on experience from every case, the future will be my project based, and keep improve it. via version control software with Web Front-end visual designer co-work was happiness, Web Front-end visual designer only need learn basic of PHP. people for study of PHP MVC, it's easy to learn, because source code is very easy and few!

By the way, Coco is my girlfriend's cat ~ =OwO=

## Features
- base MVC struct
- uri routing
- mutil languages support
- education?

## Demo
When you installed is online demo .... ok?

## Requirement
- Apache >= 2.2, need enable mod_rewrite
- PHP >= 5.3
- MySQL >= 5.6

## Installation

1. Create new project.

	[Download](https://github.com/chronolai/cocomvc/archive/master.zip) and unzip to /YOUR/PATH
	
	or
	
	```
	git clone https://github.com/chronolai/cocomvc.git /YOUR/PATH
	```

2. Modify `config.php` to change your database config.
	```php
	date_default_timezone_set("Asia/Taipei");
	define('DB_HOSTNAME', '127.0.0.1');
	define('DB_DATABASE', 'coco');
	define('DB_USERNAME', 'coco');
	define('DB_PASSWORD', 'coco');
	define('DB_CONNINFO', 'mysql:host='.DB_HOSTNAME.';dbname='.DB_DATABASE.';charset=utf8');
	```

3. Run the SQL statements `install.sql`.

4. Enjoy it !!

## Example code
not yet



