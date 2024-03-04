## Tutorials

- https://auth0.com/docs/quickstart/webapp/laravel/01-login
- https://auth0.com/blog/build-a-laravel-6-app-with-authentication/#Adding-Authentication-to-Your-Laravel-Application (old)

### How to make this

`composer require auth0/login`

`php artisan vendor:publish --tag auth0`

A `config/auth0.php` is copied over

Register an account on Auth0

Create a Regular Web App

In `.env`

```
AUTH0_DOMAIN={copy over}
AUTH0_CLIENT_ID={copy over}
AUTH0_CLIENT_SECRET={copy over}
AUTH0_AUDIENCE=https://{AUTH0_DOMAIN}/api/v2/
AUTH0_REDIRECT_URI=${APP_URL}/callback
```

Make sure further up, `APP_URL` is `http://localhost:8000`

In `routes/web.php`, protect route by using `->middleware('auth')`

Fill callback and logout URLs in Auth0

Complete coding up the routes, controllers and models

The way to retrieve authenticated user's info in controller is `auth()->user()` and `auth()->id()`

`php artisan serve`

## Retrieve Auth0's `user_id`:

- Via actions:
	- https://community.auth0.com/t/get-user-id-on-login/80152/3
	- https://github.com/auth0/laravel-auth0/blob/main/docs/Events.md#callback-events
	- https://auth0.com/docs/customize/actions/flows-and-triggers/post-user-registration-flow
- Via APIs:
	- https://stackoverflow.com/questions/70940582/how-do-i-get-the-current-users-id-in-this-laravel-8-and-auth0-api/70946601#70946601
		- https://community.auth0.com/t/how-to-get-user-information-from-the-laravel-api-side/47021/3
- Via auth() helper:
	- https://auth0.com/docs/quickstart/backend/laravel/01-authorization#retrieve-user-information