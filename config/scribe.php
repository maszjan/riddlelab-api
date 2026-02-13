<?php

use Knuckles\Scribe\Config\AuthIn;
use Knuckles\Scribe\Config\Defaults;
use Knuckles\Scribe\Extracting\Strategies;

use function Knuckles\Scribe\Config\configureStrategy;

return [
    'title' => config('app.name').' Dokumentacja API v1',

    'description' => 'REST API backend aplikacji RiddleLab. Umożliwia obsługę użytkowników, escape roomów, minigier, rozgrywek oraz statystyk. System został zaprojektowany z myślą o łatwej integracji z frontendem oraz innymi klientami.',

    'intro_text' => <<<'INTRO'
RiddleLab to platforma do tworzenia i rozgrywania wirtualnych escape roomów oraz minigier logicznych.  
Backend został napisany w Laravelu i udostępnia wersjonowane, bezpieczne REST API.

**Funkcjonalności:**
- Autoryzacja i zarządzanie użytkownikami (rejestracja, logowanie, profil, zmiana hasła, konfiguracja awatara)
- Escape roomy i pokoje (tworzenie, edycja, usuwanie, pobieranie informacji o pokojach i zagadkach)
- Minigry i zagadki (generowanie minigier o różnych poziomach trudności, powiązanych z pokojami)
- Rozgrywka (rozpoczynanie prób, rozwiązywanie zagadek, podpowiedzi, przechodzenie między pokojami, pauza, zakończenie gry)
- Historia i rankingi (gromadzenie historii rozgrywek, prowadzenie rankingów użytkowników)
- Zarządzanie zasobami graficznymi (assetami)

Dokumentacja ułatwia integrację oraz korzystanie z API w aplikacji frontendowej.
INTRO,

    'base_url' => config('app.url'),

    'routes' => [
        [
            'match' => [
                'prefixes' => ['api/*'],
                'domains' => ['*'],
            ],
            'include' => [],
            'exclude' => [],
        ],
    ],

    'type' => 'laravel',

    'theme' => 'default',

    'static' => [
        'output_path' => 'public/docs',
    ],

    'laravel' => [
        'add_routes' => true,
        'docs_url' => '/docs',
        'assets_directory' => null,
        'middleware' => [],
    ],

    'external' => [
        'html_attributes' => [],
    ],

    'try_it_out' => [
        'enabled' => true,
        'base_url' => null,
        'use_csrf' => false,
        'csrf_url' => '/sanctum/csrf-cookie',
    ],

    'auth' => [
        'enabled' => false,
        'default' => false,
        'in' => AuthIn::BEARER->value,
        'name' => 'key',
        'use_value' => env('SCRIBE_AUTH_KEY'),
        'placeholder' => '{YOUR_AUTH_KEY}',
        'extra_info' => 'Token można wygenerować po zalogowaniu w aplikacji.',
    ],

    'example_languages' => [
        'bash',
        'javascript',
        'php'
    ],

    'postman' => [
        'enabled' => true,
        'overrides' => [],
    ],

    'openapi' => [
        'enabled' => true,
        'version' => '3.0.3',
        'overrides' => [],
        'generators' => [],
    ],

    'groups' => [
        'default' => 'Endpointy',
        'order' => [],
    ],

    'logo' => '/logo.png',

    'last_updated' => 'Ostatnia aktualizacja: {date:d.m.Y}',

    'examples' => [
        'faker_seed' => 1234,
        'models_source' => ['factoryCreate', 'factoryMake', 'databaseFirst'],
    ],

    'strategies' => [
        'metadata' => [
            ...Defaults::METADATA_STRATEGIES,
        ],
        'headers' => [
            ...Defaults::HEADERS_STRATEGIES,
            Strategies\StaticData::withSettings(data: [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ]),
        ],
        'urlParameters' => [
            ...Defaults::URL_PARAMETERS_STRATEGIES,
        ],
        'queryParameters' => [
            ...Defaults::QUERY_PARAMETERS_STRATEGIES,
        ],
        'bodyParameters' => [
            ...Defaults::BODY_PARAMETERS_STRATEGIES,
        ],
        'responses' => configureStrategy(
            Defaults::RESPONSES_STRATEGIES,
            Strategies\Responses\ResponseCalls::withSettings(
                only: ['GET *'],
                config: [
                    'app.debug' => false,
                ]
            )
        ),
        'responseFields' => [
            ...Defaults::RESPONSE_FIELDS_STRATEGIES,
        ],
    ],

    'database_connections_to_transact' => [config('database.default')],

    'fractal' => [
        'serializer' => null,
    ],
];