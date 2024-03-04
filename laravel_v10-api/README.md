## Tutorials

- https://auth0.com/docs/quickstart/backend/laravel/01-authorization#token-information
	- https://auth0.com/docs/secure/tokens/access-tokens/get-access-tokens
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

Make sure further up, `APP_URL` is `http://localhost:8000`

In `routes/api.php`, protect route by using `->middleware('auth')`

Complete coding up the routes, controllers and models

Edit `app/Middleware/Authenticate.php`, `app/Exceptions/Handler.php` & `app/Exceptions/ApiException.php` as in the code

The way to retrieve authenticated user's info in controller is `auth()->user()` and `auth()->id()`

`php artisan serve`
