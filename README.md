# Contact Us Form
[![Issues](https://img.shields.io/github/issues/antonyanand/contact-us.svg?style=flat-square)](https://github.com/antonyanand/contact-us/issues)
[![Total Downloads](https://img.shields.io/github/stars/antonyanand/contact-us.svg?style=flat-square)](https://github.com/antonyanand/contact-us/stargazers)
# This will store the query and sends the email.

# Steps
add this in app.php file
``` bash
  Contacts\ContactServiceProvider::class,
```
run the following command to publish
``` bash
  php artisan vendor:publish --class='ContactServiceProvider',
```

