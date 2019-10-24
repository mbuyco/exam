# Exam App
## Exam application using Laravel, VueJS and GraphQL

### Installation

1) Install PHP dependencies
```bash
$ composer install
```

2) Install JavaScript dependencies
```bash
$ npm install
``` 

3) Migrate DB schemas and seed
```bash
$ php artisan migrate:fresh --seed
```

4) Run server!
```bash
$ docker-compose up -d && php artisan serve
```

**NOTE:** You can also use the GraphQL playground via `http://localhost:8000/graphql-playground`
