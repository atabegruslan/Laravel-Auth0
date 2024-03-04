## Tutorials

- https://auth0.com/blog/developing-restful-apis-with-lumen/#Securing-the-Authors-API-with-Auth0

### How to make this

`composer create-project --prefer-dist laravel/lumen xxx`

Install `"auth0/auth0-php": "^7.1"`

Fill `AUTH0_AUDIENCE` & `AUTH0_DOMAIN` in `.env`

Make `bootstrap/app.php`, `app/Http/Middlewares/Auth0Authenticate.php`, `app/Exceptions/Handler.php` & `app/Exceptions/ApiException.php` like in the code

Code up the routes and MVCs. Note how route is protected

`php -S localhost:8000 -t public`

Retrieve token:  
![Screenshot 2024-03-04 212932](https://github.com/atabegruslan/Laravel-Auth0/assets/20809372/4659a85e-2ab8-4e92-876c-26333dc2e813)

Visit protected route:  
![Screenshot 2024-03-04 222143](https://github.com/atabegruslan/Laravel-Auth0/assets/20809372/1a001e9a-d212-4fcc-872a-64959e16f15c)
