## Tutorials

- https://auth0.com/blog/developing-restful-apis-with-lumen/#Securing-the-Authors-API-with-Auth0

### How to make this

`composer create-project --prefer-dist laravel/lumen xxx`

Install `"auth0/auth0-php": "^7.1"`

Fill `AUTH0_AUDIENCE` & `AUTH0_DOMAIN` in `.env`

Make `bootstrap/app.php`, `app/Http/Middlewares/Auth0Authenticate.php`, `app/Exceptions/Handler.php` & `app/Exceptions/ApiException.php` like in the code

Code up the routes and MVCs. Note how route is protected

`php -S localhost:8000 -t public`
