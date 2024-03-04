## Project files, their location and their purposes

-CodeIgniter 4 Framework                -required framework
-**/CI4root/.env                        -database configuration
-**/CI4root/app/Config/App.php          -settings for project root
-**/CI4root/app/Config/Routing.php      -important CI4 settings for routing
-**/CI4root/app/Controllers/Home.php    -project controller
-**/CI4root/app/Models/dbModel.php      -project model
-**/CI4root/app/Views/pages/create.php  -the viewable pages of the project
                            footer.php
                            header.php
                            home.php
                            table.php

## Project description

Home page with a welcome message and Header with a navigation bar with 3 buttons: MyDB, Home, Add data. The header shows on every page.
MyDB page shows a table of the full database: Name, Number1, Number2, and Summary which is the sum of Number1 and Number2.
On the Add data page you can add a new entry to the database, which consist of "Name" "Number1" "Number2". The page checks if all data is set and the name has to be minimum 3 chars. On success you are redirected to the Home page with a confirmation and the given data. Every name is unique and if you try to add a name second time, you will be redirected to the home page with a warning.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> The end of life date for PHP 7.4 was November 28, 2022.
> The end of life date for PHP 8.0 was November 26, 2023.
> If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> The end of life date for PHP 8.1 will be November 25, 2024.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library


