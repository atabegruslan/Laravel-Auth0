## Tutorials

- https://github.com/auth0-developer-hub/api_laravel_php_hello-world_php-sdk/tree/basic-role-based-access-control
- https://auth0.com/docs/quickstart/backend/laravel/01-authorization
- https://github.com/auth0-samples/auth0-laravel-api-samples
    - https://github.com/auth0-samples/laravel

### How to make this

`composer require auth0/login`

`php artisan vendor:publish --tag auth0`

A `config/auth0.php` is copied over

Register an account on Auth0

Create a Regular Web App

Create an API

Associate this API with the App

![Screenshot 2024-03-04 205756](https://github.com/atabegruslan/Laravel-Auth0/assets/20809372/f49a2db2-3685-4e10-82ff-f5c47989f098)

In `.env`

```
AUTH0_DOMAIN={copy over}
AUTH0_CLIENT_ID={copy over}
AUTH0_CLIENT_SECRET={copy over}
AUTH0_AUDIENCE={copy over}
AUTH0_REDIRECT_URI=${APP_URL}/callback
```
Use the Client ID and Client Secret of App and use Identifier as Audience from API

![Screenshot 2024-03-04 202006](https://github.com/atabegruslan/Laravel-Auth0/assets/20809372/22994cbb-4d18-4474-9c15-7abc77cace82)

![Screenshot 2024-03-04 205743](https://github.com/atabegruslan/Laravel-Auth0/assets/20809372/e7943a71-57a9-495e-be89-4d19c5cd111b)

Make sure further up, `APP_URL` is `http://localhost:8000`

In `routes/api.php`, protect route by using `->middleware('auth')`

Complete coding up the routes, controllers and models

The way to retrieve authenticated user's info in controller is `auth()->user()` and `auth()->id()`

`php artisan serve`

Retrieve token: https://auth0.com/docs/secure/tokens/access-tokens/get-access-tokens

![Screenshot 2024-03-04 212932](https://github.com/atabegruslan/Laravel-Auth0/assets/20809372/4659a85e-2ab8-4e92-876c-26333dc2e813)

![Screenshot 2024-03-04 212944](https://github.com/atabegruslan/Laravel-Auth0/assets/20809372/78187146-2ac4-49d9-a0ca-6758e81b6ac2)
