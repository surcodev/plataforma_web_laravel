npm install
composer install
php artisan config:clear
php artisan migrate
php artisan db:seed

php artisan make:migration add_total_properties_to_locations_table --table=locations
php artisan migrate

#d92228 red original
#0041d9 blue zillow

reemplaza cada vez que encuentres este color: "#d92228" por este color: "#0041d9" usa sed, grep  o otro comando pero en un oneliner de bash linux

grep -rl "#d92228" . | xargs sed -i 's/#d92228/#0041d9/g'
