## Laravel Broadcasting and Pusher Demo 

This project is a demonstration of Laravel Broadcasting and Pusher integration for real-time communication on the back-end side. It showcases how to configure Laravel Broadcasting with Pusher to enable real-time events and notifications in Laravel applications.

The purpose of this project is to provide interns with a comprehensive understanding of Laravel Broadcasting and Pusher implementation.

#

### Table of Contents

-   [Prerequisites](#prerequisites)
-   [Tech Stack](#tech-stack)
-   [Getting Started](#getting-started)
-   [Migrations](#migration)
-   [Development](#development)

#

### Prerequisites

-   <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png" width="35" style="position: relative; top: 4px" /> *PHP@8.2 and up*
-   <img src="https://download.logo.wine/logo/MySQL/MySQL-Logo.wine.png" width="35" style="position: relative; top: 4px" /> _MYSQL@8 and up
-   <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Npm-logo.svg/2560px-Npm-logo.svg.png" width="35" style="position: relative; top: 4px" /> _npm@8 and up_
-   <img src="https://cdn.freebiesupply.com/logos/large/2x/composer-logo-png-transparent.png" width="35" style="position: relative; top: 6px" /> _composer@2 and up_

#

### Tech Stack

-   <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/985px-Laravel.svg.png" height="18" style="position: relative; top: 4px" /> [Laravel@10.x](https://laravel.com/docs/10.x) - back-end framework
-   <img src="https://avatars.githubusercontent.com/u/739550?s=280&v=4" height="18" style="position: relative; top: 4px" /> [Pusher](https://pusher.com/docs/channels/) - Pusher

#

### Getting Started

1\. Clone repository from github:

```sh
git clone https://github.com/giopantsulaia/broadcast-test-laravel.git
```

2\. Run _composer install_ in order to install all the dependencies.

```sh
composer install
```

3\.Install all the JS dependencies:

```sh
npm install
```

and also:

```sh
npm run dev
```

4\. Copy .env from .env.example

```sh
cp .env.example .env
```

Provide **.env** file all the necessary environment variables: <br>
**MYSQL:**

> DB_CONNECTION=mysql <br>
> DB_HOST=127.0.0.1 <br>
> DB_PORT=3306 <br>
> DB_DATABASE=**\*** <br>
> DB_USERNAME=**\*** <br>
> DB_PASSWORD=**\***

#

after setting up **.env** file, execute:

```sh
  php artisan key:generate
```

5\.Configure Pusher, add credentials in .env file:

> PUSHER_APP_ID=**\*** <br>
> PUSHER_APP_KEY=**\*** <br>
> PUSHER_APP_SECRET=**\*** <br>
> PUSHER_APP_CLUSTER=**\***

#
once you're done interacting with .env file, run 
```sh
    php artisan optimize:clear
```
#
##### Now, you should be good to go!

#

### Migration

if you've completed getting started section, then migrating database if fairly simple process, just execute:

```sh
php artisan migrate
```

#

### Development

You can run Laravel's built-in development server by executing:

```sh
  php artisan serve
```
