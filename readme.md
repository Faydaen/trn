docker run -it --name db --hostname db -v $(pwd):/app --workdir /app -p 21112:3306 ubuntu:18.04 bin/bash
<!-- psql -h localhost -p 25405 -U own main < ~/ars.sql -->
mysql 


# Запуск сервиса базы через докер

## каким образом был создан образ
попытка 1 (через убунту и ручную установку)
```
docker run -it --name db --hostname db -p 22223:5432 -v $(pwd):/app --workdir /app  ubuntu:18.04 /bin/bash 
```
далее по исрукиции из рецептов


попытка 2 (через оф образ постгеса)
```
docker run --name db --hostname db -e POSTGRES_PASSWORD=qwerty -p 22223:5432 -v $(pwd):/app --workdir /app -d postgres:10
```
port 22223
hostname localhost
user postgres
database postgres
pass qwerty





запустить образ

прогнать миграции






mysql -ughost -pqwerty -f  tour < dump.sql


init служет для поднятия системы

tour - битва по принципу турнира

main - битва путем рендомного вызва