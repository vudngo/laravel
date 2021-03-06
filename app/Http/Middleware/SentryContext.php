<?php

namespace App\Http\Middleware;

use Closure;

class SentryContext
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (app()->bound('sentry')) {
            /** @var \Raven_Client $sentry */
            $sentry = app('sentry');

            // Add user context
            if (auth()->check()) {
                $sentry->user_context(['email' => auth()->user()->email]);
            } else {
                $sentry->user_context(['id' => null]);
            }

            // Setting tag
            $sentry->tags_context(['customerType' => 'enterprise']);

            $commitHash = trim(exec('git rev-parse HEAD'));
            $sentry->setRelease($commitHash);
        }

        return $next($request);
    }
}
