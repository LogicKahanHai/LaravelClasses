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

# Examples

## 1. Navbar for a website

Let's create a navbar for a website that we can then
inherit it to all the other pages, to keep it consistent

### a. Create the BaseLayout

This is the layout which will be inherited to other
views to reuse the code.

Our navbar will stay in this file.

```bash
# This command is used to create a blade view.

php artisan make:view layoutInheritance.baselayout
```

Then add the code to show the navbar in this file.

### b. Create 4 new pages to populate in the navbar

```shell
php artisan make:view layoutInheritance.children.myhomepage
php artisan make:view layoutInheritance.children.mycontactpage
php artisan make:view layoutInheritance.children.myproductpage
php artisan make:view layoutInheritance.children.myaboutpage
```

### c. Add the `@extends()` directive in this children files and extend the BaseLayout

```php
// myhomepage.blade.php

@extends('layoutInheritance.baselayout');
```

Then we can setup the route to map to this view, and then
we can see that when the `myhomepage` view is being rendered
the navbar also shows

### d. Add the `@section()` directives to display specific content for each page

<x-markdown theme="github-dark">

```php
@section('title')
    Home Page
@endsection

@section('content')

<h1> Welcome to the Home Page </h1>
@endsection
```

</x-markdown>
