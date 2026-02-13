# RiddleLAB API

Laravel API dla RiddleLAB.

## Wymagania

- Docker
- Composer
- PHP 8.2+

## Struktura projektu

Aby wszystko działało poprawnie, sklonuj oba repozytoria do jednej głównej lokalizacji, np.:

```
riddlelab/
  api/
  frontend/
```

- **api** – backend (to repozytorium)
- **frontend** – frontend ([repozytorium frontendu](https://github.com/maszjan/riddlelab))

**Przykład klonowania:**
```sh
git clone <link-do-repozytorium-api> riddlelab/api
git clone https://github.com/maszjan/riddlelab riddlelab/frontend
```

## Instalacja i uruchomienie

**Wszystkie poniższe komendy wykonuj w katalogu `riddlelab/api`!**

1. **Instalacja zależności i Sail**
   ```sh
   composer install
   php artisan sail:install
   ```

2. **Uruchomienie kontenerów**
   ```sh
   ./vendor/bin/sail up -d
   ```

3. **Przygotowanie bazy i środowiska**
   ```sh
   ./vendor/bin/sail php artisan prepare:db
   ```

4. **Dostęp do dokumentacji API**
    - Dokumentacja generowana przez Scribe dostępna jest pod `/docs` po uruchomieniu aplikacji.

## Testy

Testy znajdują się w `tests/Feature`.

Uruchom testy:
```sh
./vendor/bin/sail test tests/Feature
```

## Plik `.env.example`

W repozytorium znajduje się plik `.env.example`, który zawiera przykładowe zmienne środowiskowe wymagane do uruchomienia backendu.  
Przed pierwszym uruchomieniem skopiuj go do `.env` i dostosuj wartości do swojego środowiska:

```sh
cp .env.example .env
```

Przykładowa zawartość `.env.example`:

```
APP_NAME=RiddleLAB
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_PORT=8080
APP_URL=http://localhost:8000
APP_FORNTEND_URL=http://localhost:5200

APP_LOCALE=pl
APP_FALLBACK_LOCALE=pl
APP_FAKER_LOCALE=pl_PL

APP_MAINTENANCE_DRIVER=file
# APP_MAINTENANCE_STORE=database

PHP_CLI_SERVER_WORKERS=4

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=pgsql
DB_HOST=pgsql
DB_PORT=5432
DB_DATABASE=sail
DB_USERNAME=sail
DB_PASSWORD=password

SESSION_DRIVER=redis
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

FILESYSTEM_DISK=local

QUEUE_CONNECTION=redis

CACHE_STORE=redis

MEMCACHED_HOST=127.0.0.1

REDIS_CLIENT=phpredis
REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=log
MAIL_SCHEME=null
MAIL_HOST=127.0.0.1
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

VITE_APP_NAME="${APP_NAME}"

BROADCAST_DRIVER=pusher
BROADCAST_CONNECTION=pusher

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=eu
PUSHER_PORT=443
PUSHER_SCHEME=https

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
```

**Opis:**
- Skopiuj plik `.env.example` do `.env` i uzupełnij wymagane dane (np. klucze, hasła, adresy).
- Klucz `APP_KEY` zostanie wygenerowany automatycznie po uruchomieniu `php artisan key:generate`.
- Ustaw zmienne Pusher, jeśli korzystasz z broadcastingu.

Pamiętaj, aby zawsze mieć poprawnie skonfigurowany plik `.env` przed buildowaniem aplikacji dla obu katalogów.