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