# Image Display

We can display offline (local images in public/ folder) or online images
in blade files

## For Offline

To display stored locally in the public folder, we need to store it using
the `asset()` function to make a uri for that image

```php
// We don't need to pass the absolute location, it is assumed it is in 'public/' folder
["name" => "Laptop", "price" => 56000, "image"=> asset('images/laptop.png')]
```
