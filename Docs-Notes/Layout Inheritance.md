# Layout Inheritance

<u>**Layout Inheritance**</u> means we can create some
blade PHP files and then in some other Blade PHP file, we can use the
'extend()' Blade directive to kind of import the template to use it
with some modifications.

We can create some Layout Templates, like we created the [Layout Template File](../resources/views/layoutInheritance/layouts.blade.php)

## Extend()

`extend()` directive is used in the files where we want to use
the template view. It's like importing the template into the new file.

We can see the usage of this in the file - [HomePage](../resources/views/layoutInheritance/children/home.blade.php)

```php
@extend('layout')
```

## Yield()

`yield()` directives act like variables in the template file. When we import the
templates in the other files, we can set different values in these variables.

This way we can use the template to keep the theme and layout intact
for the website and at the same time making it unique to the page
