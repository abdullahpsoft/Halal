## Copy env

Command is:
 cp .env.example .env

## Create Database

Database Name is:
db_halal

## Install Voyager

Try:
php artisan migrate
If not works then run the command below:
php artisan voyager:install


## Create Voyager

If you wish to create a new admin user you can pass the --create flag, like so:
php artisan voyager:admin your@email.com --create
