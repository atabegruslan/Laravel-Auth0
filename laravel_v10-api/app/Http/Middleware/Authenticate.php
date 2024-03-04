<?php

namespace App\Http\Middleware;

use App\Exceptions\ApiException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request): ?string
    {
        if ($this->auth->guard()->guest()) throw new ApiException('Requires authentication', 401);

        return null;
    }
}
