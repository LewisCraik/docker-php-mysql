# Docker PHP MySQL

These files quickly set up my preferred environment for web development in a container, using Docker.
The webserver comprises of:

* MySQL
* PHP 8.0
* Apache

PHP.Dockerfile customises the [Official PHP Docker image](https://hub.docker.com/_/php) to add PDO MySQL, to connect to the database and Xdebug for debugging. The [Official MySQL Docker image](https://hub.docker.com/_/mysql) is used unmodified. A volume is mapped to your local machine to persist your database state.

## To Use

* If not already installed on your machine, install [Docker](https://www.docker.com/products/docker-desktop).
* Clone this repository: `git clone https://github.com/LewisCraik/docker-php-mysql.git yourfoldername`
(Or copy the two files, "docker-compose.yml" and "PHP.Dockerfile" to your project folder).
* Replace `ROOTPASSWORD` (line 9) and `USERPASSWORD` (line 12) in docker-compose.yml with your chosen database passwords. And also in "src/index.php" if you are using the template file.
* Add your source code (or even install your CMS of choice) in to the "Content" folder, which is where Apache will serve from.
* Ensure that Docker is running on your machine.
* From your project folder in your terminal type `docker-compose up -d` - this may take a while to execute the first time, as all the files will need ot be downloaded. The `-d` flag means that Docker runs "headless", freeing up your terminal for other commands.
* Navigate to <http://localhost> you should see the MySQL version, or whatever you have put in the src folder, or the PHP default page if it is empty.
* Type `docker-compose down` to stop your container.

## To Customise

The easiest way to customise the containers are to change the tags as per the official Docker images ([PHP](https://hub.docker.com/_/php)/[MySQL]). For example changing `mysql:8.0` to `mysql:latest` on line 5 of "docker-compose.yml" will use the latest version of the MySQL image. For PHP your need to change line 1 on "PHP.Docker", the format is `php:<version>-apache`, to choose which version of PHP you need.
