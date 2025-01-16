#!/bin/bash

# remove .env
rm .env

#symlink .env to .env.example
ln -s .env.example .env

#sysmlink public_html to public/

ln -s public/ public_html

#install dependencies
~/composer.phar install && npm install

#build assets
npm run build

#generate key
php artisan key:generate

#symlink public/storage to strorage/app/public
cd public
ln -s ../storage/app/public storage
cd ..