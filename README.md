# Server requirements:

* *PHP >= 7.2.5*
* *BCMath PHP Extension*
* *Ctype PHP Extension*
* *Fileinfo PHP extension*
* *JSON PHP Extension*
* *Mbstring PHP Extension*
* *OpenSSL PHP Extension*
* *PDO PHP Extension*
* *Tokenizer PHP Extension*
* *XML PHP Extension*

## Steps:
1. Create Database with name: 'bhut' user: 'root' password: '' and run in port: 3306 (like .env)
    1. Rename .env.example file for .env
    2. Access .env file and in DB_DATABASE=laravel change for DB_DATABASE=bhut
2. Run composer install
3. Run php artisan migrate
4. Run php artisan serve

## Routes:
### POST: localhost:8000/api/createCar

> Create a car

* params:
    * title: string value
    * brand: string value
    * price: string value
    * age: integer value


### GET: localhost:8000/api/listCar

> Return list of cars

### GET: localhost:8000/api/logs

> Return logs.
