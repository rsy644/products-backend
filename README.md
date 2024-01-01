## Installation instructions
* 1. Make sure that the 'php' extension is to the path is available inside of your command prompt, and check that 'php artisan' commands are working correctly.

* 2. Make sure composer is installed on the local system by running the command 'composer install'.

# Running the app locally

* 3. Unzip the contents of 'products-backend.zip' into the home directory of your local webserver, and call it something relevant, for example 'products-backend'.

* 4. Rename the .env.example file to '.env'.

* 5. Inside of the .env file alter the 'APP_URL' to your local server url, and alter the DB_HOST, DB_DATABASE, DB_USERNAME and DB_PASSWORD variables so as to connect up to the newly created database in step 4. Also after the 'APP_KEY=' constant use the following application key: 'ABCDEF123ERD456EABCDEF123ERD456E'. Then run 'php artisan config cache'.

* 6. Run "PHP artisan migrate" to run the migrations in order to create the structure of the tables.

* 7. To seed the database with dummy data, run the following command: 'php artisan db:seed'.

* 8. To start running the app, navigate to the root folder of the products-backend app in your command prompt or terminal, and type 'php artisan serve'.








