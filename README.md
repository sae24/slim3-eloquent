# Slim 3 Skeleton

This is a simple project for Slim 3 using Eloquent.

## Create your project:

    $ composer create-project --no-interaction --stability=dev saecode/slim3-eloquent my-app

### Run it:

1. `$ cd my-app`
2. `$ php -S 0.0.0.0:8888 -t public public/index.php`
3. Browse to http://localhost:8888

## Key directories

* `app`: Application code
* `app/src`: All class files within the `App` namespace
* `log`: Log files
* `public`: Webserver root
* `vendor`: Composer dependencies

## Key files

* `public/index.php`: Entry point to application
* `app/settings.php`: Configuration
* `app/dependencies.php`: Services for Pimple
* `app/middleware.php`: Application middleware
* `app/routes.php`: All application routes are here
* `app/src/Controller/UserController.php`: Action class for the home page