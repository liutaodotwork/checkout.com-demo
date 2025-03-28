# Smooth CKO Flow


This repo demonstrates a smooth and secure payment flow that the payment services are provided by [checkout.com](https://checkout.com).


* Youtube Video - [Smooth CKO Flow Video](https://www.youtube.com/watch?v=LvyTTd9nBj0)
* Demo - [Just Demo](https://scf.liutao.work)(Test Card Number: 4242424242424242, CVV: 100)
* Test Cards - [Test Cards](https://docs.checkout.com/testing/test-card-numbers)

<img src="https://raw.githubusercontent.com/liutaodotwork/smooth-cko-flow/master/webroot/assets/img/scf_desktop_1.jpeg" alt="drawing" width="800"/>
<img src="https://raw.githubusercontent.com/liutaodotwork/smooth-cko-flow/master/webroot/assets/img/scf_desktop_2.jpeg" alt="drawing" width="800"/>
<img src="https://raw.githubusercontent.com/liutaodotwork/smooth-cko-flow/master/webroot/assets/img/scf_desktop_3.jpeg" alt="drawing" width="800"/>

## Front-end source code files

* The checkout page - [checkout.php](https://github.com/liutaodotwork/smooth-cko-flow/blob/master/application/views/checkout.php)
* The success page - [success.php](https://github.com/liutaodotwork/smooth-cko-flow/blob/master/application/views/success.php)
* The failure page - [failure.php](https://github.com/liutaodotwork/smooth-cko-flow/blob/master/application/views/failure.php)
* The assets folder - [assets folder](https://github.com/liutaodotwork/smooth-cko-flow/tree/master/webroot/assets)


## Back-end source code files

* The PHP controller - [Welcome.php](https://github.com/liutaodotwork/smooth-cko-flow/blob/master/application/controllers/Welcome.php)


## Web server Nginx configuration

```
server {

    charset utf-8;
    listen 80;
    server_name domain.com;

    # Remove trailing slash
    rewrite ^/(.*)/$ /$1 permanent;

    root        /path/to/smooth-cko-flow/webroot;
    index       index.php;

    location / {
        try_files $uri $uri/ /index.php?$args;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/dev/shm/php-cgi.sock;
        fastcgi_index index.php;
        include fastcgi.conf;
        try_files $uri =404;
    }

    location ~ /\.(ht|svn|git) {
        deny all;
    }

   error_log /data/wwwlogs/error_nginx.log crit;
}
```
