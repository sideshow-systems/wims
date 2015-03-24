#!/usr/bin/env bash

# TODO: maybe check directories, start/stop services, etc.

echo '                                                       ';
echo '#### WIMS                                              ';
echo '                                                       ';
echo '>> bootstrap is running...'
echo ' '
echo ' '

# startup apache
sudo /etc/init.d/apache2 restart

# update composer stuff
sudo COMPOSER=/vagrant/config/composer.json /bin/composer.phar update