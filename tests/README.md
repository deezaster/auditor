# Contributing

Contribution are always welcome and much appreciated! 

Before starting to contribute, you first need to install dev dependencies:

```bash
composer install --dev
```

Also, in an effort to maintain an homogeneous code base, we strongly encourage contributors 
to run [PHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) and [PHPStan](https://github.com/phpstan/phpstan)
before submitting a Pull Request.


## Coding standards
Coding standards are enforced using [PHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)

```bash
composer csfixer
```


## Static code analysis
Static code analysis can be achieved using [PHPStan](https://github.com/phpstan/phpstan)

```bash
composer phpstan
```


## Running Tests
By default, test suite is configured to use an SQLite in-memory database and generates 
a code coverage report in `tests/coverage` folder.

However, you can run the test suite using different configurations:
- SQLite
- MySQL
- PostgreSQL
- MariaDB


### Default configuration (SQLite)
This configuration uses an in memory SQLite database and generates code coverage report 
in `tests/coverage` folder (requires [PCOV extension](https://github.com/krakjoe/pcov)).

```bash
composer test
```

You can also run tests using an in memory SQLite database and without generating code coverage report, 
it's the fastest configuration.

```bash
./vendor/bin/phpunit -c phpunit.sqlite.xml 
```


### MySQL configuration
This configuration expects to connect to a MySQL database.

```bash
./vendor/bin/phpunit -c phpunit.mysql.xml 
```

**Note**: connection parameters (username, password, host, port, etc) are set in `phpunit.mysql.xml` file.

Assuming you have docker installed, you can easily start a MySQL server with following command (MySQL 8)

```bash
docker run --name mysql_db -e MYSQL_DATABASE=auditor -e MYSQL_ALLOW_EMPTY_PASSWORD=1 -d -p 3306:3306 mysql --default-authentication-plugin=mysql_native_password
```


### PostgreSQL configuration
This configuration expects to connect to a PostgreSQL database.

```bash
./vendor/bin/phpunit -c phpunit.pgsql.xml 
```

**Note**: connection parameters (username, password, host, port, etc) are set in `phpunit.pgsql.xml` file.

Assuming you have docker installed, you can easily start a PostgreSQL server with following command (PostgreSQL 11)

```bash
docker run --name postgres_db -e POSTGRES_DB=auditor  -e POSTGRES_HOST_AUTH_METHOD=trust -d -p 5432:5432 postgres
```


### MariaDB configuration
This configuration expects to connect to a MariaDB database.

```bash
./vendor/bin/phpunit -c phpunit.mariadb.xml 
```

**Note**: connection parameters (username, password, host, port, etc) are set in `phpunit.mariadb.xml` file.

Assuming you have docker installed, you can easily start a MariaDB server with following command

```bash
docker run --name mariadb_db -e MYSQL_DATABASE=auditor -e MYSQL_ALLOW_EMPTY_PASSWORD=1 -p 3306:3306 mariadb
```
