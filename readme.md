
## Запуск сервиса базы через докер
```
docker run --name db --hostname db -e POSTGRES_PASSWORD=qwerty -p 22223:5432 -v $(pwd):/app --workdir /app -d postgres:10
```
port 22223
hostname localhost
user postgres
database postgres
pass qwerty





init служет для поднятия системы

tour - битва по принципу турнира

main - битва путем рендомного вызва