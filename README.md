# [Roots Theme](http://roots.io/)

Inuit Roots is a WordPress starter theme based on

* [roots.io](http://roots.io/)
* [inuit.css](https://inuit.css.com)

## Installation


If you're using Nginx you'll need to add the Roots rewrites to your server config before the PHP block (`location ~ \.php$`) to use the clean URLs feature:

```nginx
location ~ ^/assets/(img|js|css)/(.*)$ {
  try_files $uri $uri/ /wp-content/themes/roots/assets/$1/$2;
}
location ~ ^/plugins/(.*)$ {
  try_files $uri $uri/ /wp-content/plugins/$1;
}
```

Reference the [theme activation](http://roots.io/roots-101/#theme-activation) documentation to understand everything that happens once you activate Roots.

## Theme Development


## Configuration

Edit `lib/config.php` to enable or disable support for various theme functions and to define constants that are used throughout the theme.

Edit `lib/init.php` to setup custom navigation menus and post thumbnail sizes.

