# Repo_sample
Laravel Repository pattern sample
Only have like and dislike method


## Installation

`git clone https://github.com/Ai0202/Repo_sample.git`

```
cp .env.example .env
docker-compose up -d --build


docker exec -it Repo_sample_php-fpm_1 /bin/bash

cp .env.example .env

composer install

npm install

php artisan key:generate

php artisan migrate
```


this is the command that like and dislike
```
curl 'http://localhost/api/like' \
--request POST \
--data 'post_id=1&user_id=5' \
--write-out '%{http_code}\n'
```
