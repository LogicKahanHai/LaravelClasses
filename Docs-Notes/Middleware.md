# Middlewares

To create a middleware we run the command in the CLI

```bash
php artisan make:middleware SomeMiddleware
```

This command above will make the [SomeMiddleWare](/app/Http/Middleware/SomeMiddleware.php)

-   We then import the middleware class in the route file like - [MiddlewareRoute](/routes/middlewares.php)

-   We add the middleware to the route by using `middleware()` function in chaining

-   We can also give an `alias` to the middleware class to use in the routes by updating the [app.php](/bootstrap/app.php) file and adding an alias there

-   We can also group the routes based on a common middleware to use the same middleware for all those routes

-   If you want to exclude only one route from the middleware but still keep in the group
    for organisation, we can use the `withoutMiddleware('SomeMiddlewareName')` function in
    chain of that route

-   We can also group the middlewares in the [app.php](/bootstrap/app.php) if those middlewares are mostly used together
