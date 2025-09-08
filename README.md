npm install

php artisan config:clear
php artisan migrate
php artisan db:seed

php artisan make:migration add_total_properties_to_locations_table --table=locations
php artisan migrate