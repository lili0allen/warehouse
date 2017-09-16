## How to

1. Pull this repo

2. cp env-example .env

3. update database info in .env file
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=warehouse_db
DB_USERNAME=warehouse_user
DB_PASSWORD=password

4. cd laradock-warehouse

5. docker-compose up -d mysql nginx

6. docker-compose down


## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
