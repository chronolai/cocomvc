CocoMVC
=======

Simple PHP MVC Framwork


## Installation

1. Create new project.

	[Download](https://github.com/chronolai/cocomvc/archive/master.zip) and unzip to /YOUR/PATH
	
	or
	
	```git clone https://github.com/chronolai/cocomvc.git /YOUR/PATH```

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

4. Enjoy it!!
