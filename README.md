# PHP_FRAMEWORK

# NGINX

    events { }

    http {

        include mime.types;
        
        server {

        listen 80;
        server_name 127.0.0.1;
        root /home/sites/php8/Public/;

        index index.php index.html;

        location / {
            try_files $uri $uri/ /index.php?$args;
        }

        location ~ \.php$ {
            include fastcgi_params;
            include fastcgi.conf;

            error_log /home/sites/php8/tmp/logs_nginx/MD_error.txt;
                    access_log /home/sites/php8/tmp/logs_nginx/MD_access.txt;

            error_log /home/sites/php8/tmp/logs_nginx/MD_error.log;
                    access_log /home/sites/php8/tmp/logs_nginx/MD_access.log;

            fastcgi_pass 127.0.0.1:9000;
        }

        }		

    }