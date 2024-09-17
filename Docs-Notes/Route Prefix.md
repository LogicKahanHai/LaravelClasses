# Route Prefix

we can use `Route::prefix()` to add a prefix for some "group" of routes

```php
Route::prefix('rishi')-> group(function(){
    Route::get('hello', function() {
        return "World!";
    });
    Route::get('contact', function() {
        return "me!";
    });
    Route::get('about', function() {
        return "logic";
    });
})
```
