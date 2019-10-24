# Exam App
## Exam application using Laravel, VueJS and GraphQL

### Installation

1) Install PHP dependencies
```
composer install
```

2) Install JavaScript dependencies
```
npm install
``` 

3) Migrate DB schemas
```
php artisan migrate
```

4) Seed exam data
```
php artisan db:seed
```

5) Run server!
```
docker-compose up -d && \
php artisan serve
```

**NOTE:** You can also use the GraphQL playground via `http://localhost:8000/graphql-playground`
