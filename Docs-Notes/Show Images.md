# Images in Laravel

To show images in the blade file, we can use
two methods based on where the image file is saved.

## 1. Displaying an image from the files (locally)

We use the `asset()` in the `src` attribute in the img tag
in the blade file.

```php
// This in the blade file will display a local image from the project files

<img
src="{{asset('relative/path/inside/public/folder/image.png')}}"
alt=""
height="400"
width="400"
>
```

## 2. Displaying an image from the internet

We can directly pass the link to the image in the `src`
attribute in the `img` tag, like we would normally show a
image from the network.
