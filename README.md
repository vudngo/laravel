# Sentry Laravel Example

This shows how to use Sentry in Laravel to capture errors/exceptions

# Setup
1. Make sure mysql DB is created (as per .env)
2. `$ composer install`
3. Set your DSN key in `.env`
4. `npm install -g @sentry/cli # remember to specify creds in env vars`
3. Run server. `$ make`
4. Go to http://localhost:8000 to trigger error. You should see issue/event within Sentry project

# Resources:
- https://sentry.io/for/laravel/
- https://docs.sentry.io/clients/php/
