# E-shop, Laravel 7, Vue and telegram notification.
Just test demo task. 

## Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites
What things you need to install the software.

* Git.
* PHP.
* Composer.
* Laravel CLI.
* A webserver like Nginx or Apache(I use WS integrated in my IDE PhpStorm).
* A Node Package Manager ( npm or yarn ).

### Install
Clone the git repository on your computer

```$ git clone https://github.com/Redicolossimo/test-ITPolice-shop.git```


You can also download the entire repository as a zip file and unpack in on your computer if you do not have git

After cloning the application, you need to install it's dependencies.

```
$ cd test-ITPolice-shop
$ composer install
```


### Setup
- When you are done with installation, copy the `.env.example` file to `.env` or create your own with your data (DB link config)

  ```$ cp .env.example .env```


- Generate the application key

  ```$ php artisan key:generate```


- Add your database credentials to the necessary `env` fields

- Migrate the application

  ```$ php artisan migrate```

- Install laravel passport

  ```$ php artisan passport:install```

- Seed Database

  ```$ php artisan db:seed```

- Install node modules

  ```$ npm install```
  
- Use audit fixer if needed
  
  ```$ npm audit fix --force```  

- Use @Orderator_bot for reed notification from app
  
  ```/start```

### Run the application

```$ php artisan serve```


## Built With
* [Laravel](https://laravel.com) - The PHP framework for building the API endpoints needed for the application
* [Vue](https://vuejs.org) - The Progressive JavaScript Framework for building interactive interfaces
