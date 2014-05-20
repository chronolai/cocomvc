CocoMVC
=======

Simple PHP MVC Framwork


## Installation

1. Create new project.
	```
	git clone https://github.com/ChronoLai/CocoMVC.git /var/www
	```

2. Modify `config.php` to change your database config.
	```
	date_default_timezone_set("Asia/Taipei");
	define('DB_HOSTNAME', '127.0.0.1');
	define('DB_DATABASE', 'coco');
	define('DB_USERNAME', 'coco');
	define('DB_PASSWORD', 'coco');
	define('DB_CONNINFO', 'mysql:host='.DB_HOSTNAME.';dbname='.DB_DATABASE.';charset=utf8');
	```

3. Run the SQL statements `install.sql`.

4. Enjoy it!!