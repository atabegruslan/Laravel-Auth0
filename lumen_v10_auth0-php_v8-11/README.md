## Tutorials

- https://developer.auth0.com/resources/code-samples/full-stack/hello-world/basic-role-based-access-control/spa/react-javascript
	- https://developer.auth0.com/resources/code-samples/full-stack/hello-world/basic-role-based-access-control/spa/react-javascript/lumen-php
		- https://github.com/auth0-developer-hub/api_lumen_php_hello-world/tree/basic-role-based-access-control
		- https://github.com/auth0-developer-hub/spa_react_javascript_hello-world/blob/basic-authentication-with-api-integration/src/services/message.service.js

### How to make this

`composer create-project --prefer-dist laravel/lumen xxx`

```
composer require auth0/auth0-php
composer require php-http/guzzle7-adapter
```

Fill `AUTH0_AUDIENCE` & `AUTH0_DOMAIN` in `.env`

Make `bootstrap/app.php`, `config/auth0.php`, `app/Providers/AppServiceProvider.php`, `app/Providers/AuthServiceProvider.php`, `app/Services/JWTService.php`, `app/Services/JWTServiceInterface.php`, `app/Http/Middlewares/Authenticate.php`, `app/Http/Middlewares/Authorize.php`, `app/Exceptions/Handler.php` & `app/Exceptions/ApiException.php` like in the code

Code up the routes and MVCs. Note how route is protected

`php -S localhost:8000 -t public`

Retrieve token:  
![Screenshot 2024-03-04 212932](https://github.com/atabegruslan/Laravel-Auth0/assets/20809372/4659a85e-2ab8-4e92-876c-26333dc2e813)

Visit protected route:  
![Screenshot 2024-03-04 222143](https://github.com/atabegruslan/Laravel-Auth0/assets/20809372/1a001e9a-d212-4fcc-872a-64959e16f15c)
