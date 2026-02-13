<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>RiddleLAB Dokumentacja API v1</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
                    body .content .php-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.7.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.7.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;,&quot;php&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
            <img src="/logo.png" alt="logo" class="logo" style="padding-top: 10px;" width="100%"/>
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                            <button type="button" class="lang-button" data-language-name="php">php</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpointy" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpointy">
                    <a href="#endpointy">Endpointy</a>
                </li>
                                    <ul id="tocify-subheader-endpointy" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpointy-GETapi-broadcasting-auth">
                                <a href="#endpointy-GETapi-broadcasting-auth">Authenticate the request for channel access.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-GETapi-user">
                                <a href="#endpointy-GETapi-user">GET api/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-POSTapi-v1-auth-register">
                                <a href="#endpointy-POSTapi-v1-auth-register">POST api/v1/auth/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-POSTapi-v1-auth-login">
                                <a href="#endpointy-POSTapi-v1-auth-login">POST api/v1/auth/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-POSTapi-v1-auth-logout">
                                <a href="#endpointy-POSTapi-v1-auth-logout">POST api/v1/auth/logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-GETapi-v1-asset-my">
                                <a href="#endpointy-GETapi-v1-asset-my">GET api/v1/asset/my</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-GETapi-v1-asset--id-">
                                <a href="#endpointy-GETapi-v1-asset--id-">GET api/v1/asset/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-POSTapi-v1-asset">
                                <a href="#endpointy-POSTapi-v1-asset">POST api/v1/asset</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-DELETEapi-v1-asset--id-">
                                <a href="#endpointy-DELETEapi-v1-asset--id-">DELETE api/v1/asset/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-GETapi-v1-leaderboard">
                                <a href="#endpointy-GETapi-v1-leaderboard">GET api/v1/leaderboard</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-GETapi-v1-leaderboard-room--escapeRoomId-">
                                <a href="#endpointy-GETapi-v1-leaderboard-room--escapeRoomId-">GET api/v1/leaderboard/room/{escapeRoomId}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-GETapi-v1-user-asset-limit">
                                <a href="#endpointy-GETapi-v1-user-asset-limit">GET api/v1/user/asset/limit</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-GETapi-v1-user-stats">
                                <a href="#endpointy-GETapi-v1-user-stats">GET api/v1/user/stats</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-PUTapi-v1-user-profile">
                                <a href="#endpointy-PUTapi-v1-user-profile">PUT api/v1/user/profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-PUTapi-v1-user-password">
                                <a href="#endpointy-PUTapi-v1-user-password">PUT api/v1/user/password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-PUTapi-v1-user-appearance">
                                <a href="#endpointy-PUTapi-v1-user-appearance">PUT api/v1/user/appearance</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-GETapi-v1-escape-room">
                                <a href="#endpointy-GETapi-v1-escape-room">GET api/v1/escape-room</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-GETapi-v1-escape-room--id-">
                                <a href="#endpointy-GETapi-v1-escape-room--id-">GET api/v1/escape-room/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-GETapi-v1-escape-room--id--leaderboard">
                                <a href="#endpointy-GETapi-v1-escape-room--id--leaderboard">GET api/v1/escape-room/{id}/leaderboard</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-POSTapi-v1-escape-room">
                                <a href="#endpointy-POSTapi-v1-escape-room">POST api/v1/escape-room</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-PUTapi-v1-escape-room--id-">
                                <a href="#endpointy-PUTapi-v1-escape-room--id-">PUT api/v1/escape-room/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-POSTapi-v1-escape-room--id--files">
                                <a href="#endpointy-POSTapi-v1-escape-room--id--files">POST api/v1/escape-room/{id}/files</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-DELETEapi-v1-escape-room--id-">
                                <a href="#endpointy-DELETEapi-v1-escape-room--id-">DELETE api/v1/escape-room/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-GETapi-v1-escape-room-my-rooms">
                                <a href="#endpointy-GETapi-v1-escape-room-my-rooms">GET api/v1/escape-room/my/rooms</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-GETapi-v1-game-history">
                                <a href="#endpointy-GETapi-v1-game-history">GET api/v1/game-history</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-POSTapi-v1-mini-game-generate">
                                <a href="#endpointy-POSTapi-v1-mini-game-generate">POST api/v1/mini-game/generate</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-POSTapi-v1-mini-game-attempt--attemptId--submit">
                                <a href="#endpointy-POSTapi-v1-mini-game-attempt--attemptId--submit">POST api/v1/mini-game/attempt/{attemptId}/submit</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-GETapi-v1-play-escape-room--escapeRoomId--soundtrack">
                                <a href="#endpointy-GETapi-v1-play-escape-room--escapeRoomId--soundtrack">GET api/v1/play/escape-room/{escapeRoomId}/soundtrack</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-POSTapi-v1-play-escape-room--escapeRoomId--start">
                                <a href="#endpointy-POSTapi-v1-play-escape-room--escapeRoomId--start">POST api/v1/play/escape-room/{escapeRoomId}/start</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-POSTapi-v1-play-attempt--attemptId--riddle-solve">
                                <a href="#endpointy-POSTapi-v1-play-attempt--attemptId--riddle-solve">POST api/v1/play/attempt/{attemptId}/riddle/solve</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-POSTapi-v1-play-attempt--attemptId--riddle--riddleId--hint">
                                <a href="#endpointy-POSTapi-v1-play-attempt--attemptId--riddle--riddleId--hint">POST api/v1/play/attempt/{attemptId}/riddle/{riddleId}/hint</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-POSTapi-v1-play-attempt--attemptId--next-room">
                                <a href="#endpointy-POSTapi-v1-play-attempt--attemptId--next-room">POST api/v1/play/attempt/{attemptId}/next-room</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-POSTapi-v1-play-attempt--attemptId--time">
                                <a href="#endpointy-POSTapi-v1-play-attempt--attemptId--time">POST api/v1/play/attempt/{attemptId}/time</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-POSTapi-v1-play-attempt--attemptId--pause">
                                <a href="#endpointy-POSTapi-v1-play-attempt--attemptId--pause">POST api/v1/play/attempt/{attemptId}/pause</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-POSTapi-v1-play-attempt--attemptId--resume">
                                <a href="#endpointy-POSTapi-v1-play-attempt--attemptId--resume">POST api/v1/play/attempt/{attemptId}/resume</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-POSTapi-v1-play-attempt--attemptId--abandon">
                                <a href="#endpointy-POSTapi-v1-play-attempt--attemptId--abandon">POST api/v1/play/attempt/{attemptId}/abandon</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-POSTapi-v1-play-attempt--attemptId--fail">
                                <a href="#endpointy-POSTapi-v1-play-attempt--attemptId--fail">POST api/v1/play/attempt/{attemptId}/fail</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpointy-GETapi-v1-img--path-">
                                <a href="#endpointy-GETapi-v1-img--path-">GET api/v1/img/{path}</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Ostatnia aktualizacja: 13.02.2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>REST API backend aplikacji RiddleLab. Umożliwia obsługę użytkowników, escape roomów, minigier, rozgrywek oraz statystyk. System został zaprojektowany z myślą o łatwej integracji z frontendem oraz innymi klientami.</p>
<aside>
    <strong>Base URL</strong>: <code>http://localhost:8000</code>
</aside>
<p>RiddleLab to platforma do tworzenia i rozgrywania wirtualnych escape roomów oraz minigier logicznych.<br />
Backend został napisany w Laravelu i udostępnia wersjonowane, bezpieczne REST API.</p>
<p><strong>Funkcjonalności:</strong></p>
<ul>
<li>Autoryzacja i zarządzanie użytkownikami (rejestracja, logowanie, profil, zmiana hasła, konfiguracja awatara)</li>
<li>Escape roomy i pokoje (tworzenie, edycja, usuwanie, pobieranie informacji o pokojach i zagadkach)</li>
<li>Minigry i zagadki (generowanie minigier o różnych poziomach trudności, powiązanych z pokojami)</li>
<li>Rozgrywka (rozpoczynanie prób, rozwiązywanie zagadek, podpowiedzi, przechodzenie między pokojami, pauza, zakończenie gry)</li>
<li>Historia i rankingi (gromadzenie historii rozgrywek, prowadzenie rankingów użytkowników)</li>
<li>Zarządzanie zasobami graficznymi (assetami)</li>
</ul>
<p>Dokumentacja ułatwia integrację oraz korzystanie z API w aplikacji frontendowej.</p>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpointy">Endpointy</h1>

    

                                <h2 id="endpointy-GETapi-broadcasting-auth">Authenticate the request for channel access.</h2>

<p>
</p>



<span id="example-requests-GETapi-broadcasting-auth">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/broadcasting/auth" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/broadcasting/auth"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/broadcasting/auth';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-broadcasting-auth">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-broadcasting-auth" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-broadcasting-auth"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-broadcasting-auth"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-broadcasting-auth" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-broadcasting-auth">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-broadcasting-auth" data-method="GET"
      data-path="api/broadcasting/auth"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-broadcasting-auth', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-broadcasting-auth"
                    onclick="tryItOut('GETapi-broadcasting-auth');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-broadcasting-auth"
                    onclick="cancelTryOut('GETapi-broadcasting-auth');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-broadcasting-auth"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/broadcasting/auth</code></b>
        </p>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/broadcasting/auth</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-broadcasting-auth"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-broadcasting-auth"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpointy-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/user';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpointy-POSTapi-v1-auth-register">POST api/v1/auth/register</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-auth-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/auth/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"email\": \"zbailey@example.net\",
    \"password\": \"|]|{+-\",
    \"player_configuration\": {
        \"avatar\": {
            \"skin_color\": \"#22815D\",
            \"hair_color\": \"#22815D\",
            \"eye_color\": \"#22815D\",
            \"outfit_color\": \"#22815D\"
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/auth/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "email": "zbailey@example.net",
    "password": "|]|{+-",
    "player_configuration": {
        "avatar": {
            "skin_color": "#22815D",
            "hair_color": "#22815D",
            "eye_color": "#22815D",
            "outfit_color": "#22815D"
        }
    }
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/auth/register';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'b',
            'email' =&gt; 'zbailey@example.net',
            'password' =&gt; '|]|{+-',
            'player_configuration' =&gt; [
                'avatar' =&gt; [
                    'skin_color' =&gt; '#22815D',
                    'hair_color' =&gt; '#22815D',
                    'eye_color' =&gt; '#22815D',
                    'outfit_color' =&gt; '#22815D',
                ],
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-auth-register">
</span>
<span id="execution-results-POSTapi-v1-auth-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-auth-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-auth-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-auth-register" data-method="POST"
      data-path="api/v1/auth/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-auth-register"
                    onclick="tryItOut('POSTapi-v1-auth-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-auth-register"
                    onclick="cancelTryOut('POSTapi-v1-auth-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-auth-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/auth/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-auth-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-auth-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-auth-register"
               value="b"
               data-component="body">
    <br>
<p>validation.max. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-auth-register"
               value="zbailey@example.net"
               data-component="body">
    <br>
<p>validation.email validation.max. Example: <code>zbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-auth-register"
               value="|]|{+-"
               data-component="body">
    <br>
<p>Example: <code>|]|{+-</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>player_configuration</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>avatar</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>skin_color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="player_configuration.avatar.skin_color"                data-endpoint="POSTapi-v1-auth-register"
               value="#22815D"
               data-component="body">
    <br>
<p>Must match the regex /^#([A-Fa-f0-9]{6})$/. Example: <code>#22815D</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>hair_color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="player_configuration.avatar.hair_color"                data-endpoint="POSTapi-v1-auth-register"
               value="#22815D"
               data-component="body">
    <br>
<p>Must match the regex /^#([A-Fa-f0-9]{6})$/. Example: <code>#22815D</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>eye_color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="player_configuration.avatar.eye_color"                data-endpoint="POSTapi-v1-auth-register"
               value="#22815D"
               data-component="body">
    <br>
<p>Must match the regex /^#([A-Fa-f0-9]{6})$/. Example: <code>#22815D</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>outfit_color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="player_configuration.avatar.outfit_color"                data-endpoint="POSTapi-v1-auth-register"
               value="#22815D"
               data-component="body">
    <br>
<p>Must match the regex /^#([A-Fa-f0-9]{6})$/. Example: <code>#22815D</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpointy-POSTapi-v1-auth-login">POST api/v1/auth/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-auth-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/auth/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"gbailey@example.net\",
    \"password\": \"|]|{+-\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/auth/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "gbailey@example.net",
    "password": "|]|{+-"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/auth/login';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'email' =&gt; 'gbailey@example.net',
            'password' =&gt; '|]|{+-',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-auth-login">
</span>
<span id="execution-results-POSTapi-v1-auth-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-auth-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-auth-login" data-method="POST"
      data-path="api/v1/auth/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-auth-login"
                    onclick="tryItOut('POSTapi-v1-auth-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-auth-login"
                    onclick="cancelTryOut('POSTapi-v1-auth-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-auth-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/auth/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-auth-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-auth-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-auth-login"
               value="gbailey@example.net"
               data-component="body">
    <br>
<p>validation.email. Example: <code>gbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-auth-login"
               value="|]|{+-"
               data-component="body">
    <br>
<p>Example: <code>|]|{+-</code></p>
        </div>
        </form>

                    <h2 id="endpointy-POSTapi-v1-auth-logout">POST api/v1/auth/logout</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-auth-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/auth/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/auth/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/auth/logout';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-auth-logout">
</span>
<span id="execution-results-POSTapi-v1-auth-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-auth-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-auth-logout" data-method="POST"
      data-path="api/v1/auth/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-auth-logout"
                    onclick="tryItOut('POSTapi-v1-auth-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-auth-logout"
                    onclick="cancelTryOut('POSTapi-v1-auth-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-auth-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/auth/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-auth-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-auth-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpointy-GETapi-v1-asset-my">GET api/v1/asset/my</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-asset-my">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/asset/my" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/asset/my"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/asset/my';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-asset-my">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-asset-my" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-asset-my"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-asset-my"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-asset-my" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-asset-my">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-asset-my" data-method="GET"
      data-path="api/v1/asset/my"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-asset-my', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-asset-my"
                    onclick="tryItOut('GETapi-v1-asset-my');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-asset-my"
                    onclick="cancelTryOut('GETapi-v1-asset-my');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-asset-my"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/asset/my</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-asset-my"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-asset-my"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpointy-GETapi-v1-asset--id-">GET api/v1/asset/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-asset--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/asset/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/asset/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/asset/1';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-asset--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-asset--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-asset--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-asset--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-asset--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-asset--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-asset--id-" data-method="GET"
      data-path="api/v1/asset/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-asset--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-asset--id-"
                    onclick="tryItOut('GETapi-v1-asset--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-asset--id-"
                    onclick="cancelTryOut('GETapi-v1-asset--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-asset--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/asset/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-asset--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-asset--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-asset--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the asset. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpointy-POSTapi-v1-asset">POST api/v1/asset</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-asset">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/asset" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "name=b"\
    --form "type=riddle"\
    --form "image=@/tmp/phpii2hlf77p62213eN5kj" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/asset"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'b');
body.append('type', 'riddle');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/asset';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'multipart/form-data',
            'Accept' =&gt; 'application/json',
        ],
        'multipart' =&gt; [
            [
                'name' =&gt; 'name',
                'contents' =&gt; 'b'
            ],
            [
                'name' =&gt; 'type',
                'contents' =&gt; 'riddle'
            ],
            [
                'name' =&gt; 'image',
                'contents' =&gt; fopen('/tmp/phpii2hlf77p62213eN5kj', 'r')
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-asset">
</span>
<span id="execution-results-POSTapi-v1-asset" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-asset"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-asset"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-asset" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-asset">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-asset" data-method="POST"
      data-path="api/v1/asset"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-asset', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-asset"
                    onclick="tryItOut('POSTapi-v1-asset');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-asset"
                    onclick="cancelTryOut('POSTapi-v1-asset');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-asset"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/asset</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-asset"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-asset"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-asset"
               value="b"
               data-component="body">
    <br>
<p>validation.max. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="POSTapi-v1-asset"
               value="riddle"
               data-component="body">
    <br>
<p>Example: <code>riddle</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>door</code></li> <li><code>floor</code></li> <li><code>prop</code></li> <li><code>riddle</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="image"                data-endpoint="POSTapi-v1-asset"
               value=""
               data-component="body">
    <br>
<p>validation.image validation.max. Example: <code>/tmp/phpii2hlf77p62213eN5kj</code></p>
        </div>
        </form>

                    <h2 id="endpointy-DELETEapi-v1-asset--id-">DELETE api/v1/asset/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-asset--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/v1/asset/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/asset/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/asset/1';
$response = $client-&gt;delete(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-asset--id-">
</span>
<span id="execution-results-DELETEapi-v1-asset--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-asset--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-asset--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-asset--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-asset--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-asset--id-" data-method="DELETE"
      data-path="api/v1/asset/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-asset--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-asset--id-"
                    onclick="tryItOut('DELETEapi-v1-asset--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-asset--id-"
                    onclick="cancelTryOut('DELETEapi-v1-asset--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-asset--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/asset/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-asset--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-asset--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-asset--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the asset. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpointy-GETapi-v1-leaderboard">GET api/v1/leaderboard</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-leaderboard">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/leaderboard" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/leaderboard"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/leaderboard';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-leaderboard">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-leaderboard" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-leaderboard"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-leaderboard"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-leaderboard" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-leaderboard">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-leaderboard" data-method="GET"
      data-path="api/v1/leaderboard"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-leaderboard', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-leaderboard"
                    onclick="tryItOut('GETapi-v1-leaderboard');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-leaderboard"
                    onclick="cancelTryOut('GETapi-v1-leaderboard');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-leaderboard"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/leaderboard</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-leaderboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-leaderboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpointy-GETapi-v1-leaderboard-room--escapeRoomId-">GET api/v1/leaderboard/room/{escapeRoomId}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-leaderboard-room--escapeRoomId-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/leaderboard/room/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/leaderboard/room/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/leaderboard/room/1';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-leaderboard-room--escapeRoomId-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-leaderboard-room--escapeRoomId-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-leaderboard-room--escapeRoomId-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-leaderboard-room--escapeRoomId-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-leaderboard-room--escapeRoomId-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-leaderboard-room--escapeRoomId-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-leaderboard-room--escapeRoomId-" data-method="GET"
      data-path="api/v1/leaderboard/room/{escapeRoomId}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-leaderboard-room--escapeRoomId-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-leaderboard-room--escapeRoomId-"
                    onclick="tryItOut('GETapi-v1-leaderboard-room--escapeRoomId-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-leaderboard-room--escapeRoomId-"
                    onclick="cancelTryOut('GETapi-v1-leaderboard-room--escapeRoomId-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-leaderboard-room--escapeRoomId-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/leaderboard/room/{escapeRoomId}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-leaderboard-room--escapeRoomId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-leaderboard-room--escapeRoomId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>escapeRoomId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="escapeRoomId"                data-endpoint="GETapi-v1-leaderboard-room--escapeRoomId-"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpointy-GETapi-v1-user-asset-limit">GET api/v1/user/asset/limit</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-user-asset-limit">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/user/asset/limit" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/user/asset/limit"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/user/asset/limit';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-user-asset-limit">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-user-asset-limit" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-user-asset-limit"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-user-asset-limit"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-user-asset-limit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-user-asset-limit">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-user-asset-limit" data-method="GET"
      data-path="api/v1/user/asset/limit"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-user-asset-limit', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-user-asset-limit"
                    onclick="tryItOut('GETapi-v1-user-asset-limit');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-user-asset-limit"
                    onclick="cancelTryOut('GETapi-v1-user-asset-limit');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-user-asset-limit"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/user/asset/limit</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-user-asset-limit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-user-asset-limit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpointy-GETapi-v1-user-stats">GET api/v1/user/stats</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-user-stats">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/user/stats" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/user/stats"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/user/stats';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-user-stats">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-user-stats" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-user-stats"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-user-stats"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-user-stats" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-user-stats">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-user-stats" data-method="GET"
      data-path="api/v1/user/stats"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-user-stats', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-user-stats"
                    onclick="tryItOut('GETapi-v1-user-stats');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-user-stats"
                    onclick="cancelTryOut('GETapi-v1-user-stats');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-user-stats"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/user/stats</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-user-stats"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-user-stats"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpointy-PUTapi-v1-user-profile">PUT api/v1/user/profile</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-user-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/v1/user/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/user/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/user/profile';
$response = $client-&gt;put(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'b',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-user-profile">
</span>
<span id="execution-results-PUTapi-v1-user-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-user-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-user-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-user-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-user-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-user-profile" data-method="PUT"
      data-path="api/v1/user/profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-user-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-user-profile"
                    onclick="tryItOut('PUTapi-v1-user-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-user-profile"
                    onclick="cancelTryOut('PUTapi-v1-user-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-user-profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/user/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-user-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-user-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-v1-user-profile"
               value="b"
               data-component="body">
    <br>
<p>validation.max. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="PUTapi-v1-user-profile"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="endpointy-PUTapi-v1-user-password">PUT api/v1/user/password</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-user-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/v1/user/password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"current_password\": \"architecto\",
    \"password\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/user/password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "current_password": "architecto",
    "password": "architecto"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/user/password';
$response = $client-&gt;put(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'current_password' =&gt; 'architecto',
            'password' =&gt; 'architecto',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-user-password">
</span>
<span id="execution-results-PUTapi-v1-user-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-user-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-user-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-user-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-user-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-user-password" data-method="PUT"
      data-path="api/v1/user/password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-user-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-user-password"
                    onclick="tryItOut('PUTapi-v1-user-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-user-password"
                    onclick="cancelTryOut('PUTapi-v1-user-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-user-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/user/password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-user-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-user-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>current_password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="current_password"                data-endpoint="PUTapi-v1-user-password"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="PUTapi-v1-user-password"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpointy-PUTapi-v1-user-appearance">PUT api/v1/user/appearance</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-user-appearance">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/v1/user/appearance" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"player_configuration\": {
        \"avatar\": {
            \"skin_color\": \"#22815D\",
            \"hair_color\": \"#22815D\",
            \"eye_color\": \"#22815D\",
            \"outfit_color\": \"#22815D\"
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/user/appearance"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "player_configuration": {
        "avatar": {
            "skin_color": "#22815D",
            "hair_color": "#22815D",
            "eye_color": "#22815D",
            "outfit_color": "#22815D"
        }
    }
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/user/appearance';
$response = $client-&gt;put(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'player_configuration' =&gt; [
                'avatar' =&gt; [
                    'skin_color' =&gt; '#22815D',
                    'hair_color' =&gt; '#22815D',
                    'eye_color' =&gt; '#22815D',
                    'outfit_color' =&gt; '#22815D',
                ],
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-user-appearance">
</span>
<span id="execution-results-PUTapi-v1-user-appearance" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-user-appearance"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-user-appearance"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-user-appearance" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-user-appearance">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-user-appearance" data-method="PUT"
      data-path="api/v1/user/appearance"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-user-appearance', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-user-appearance"
                    onclick="tryItOut('PUTapi-v1-user-appearance');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-user-appearance"
                    onclick="cancelTryOut('PUTapi-v1-user-appearance');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-user-appearance"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/user/appearance</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-user-appearance"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-user-appearance"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>player_configuration</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>avatar</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>skin_color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="player_configuration.avatar.skin_color"                data-endpoint="PUTapi-v1-user-appearance"
               value="#22815D"
               data-component="body">
    <br>
<p>Must match the regex /^#([A-Fa-f0-9]{6})$/. Example: <code>#22815D</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>hair_color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="player_configuration.avatar.hair_color"                data-endpoint="PUTapi-v1-user-appearance"
               value="#22815D"
               data-component="body">
    <br>
<p>Must match the regex /^#([A-Fa-f0-9]{6})$/. Example: <code>#22815D</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>eye_color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="player_configuration.avatar.eye_color"                data-endpoint="PUTapi-v1-user-appearance"
               value="#22815D"
               data-component="body">
    <br>
<p>Must match the regex /^#([A-Fa-f0-9]{6})$/. Example: <code>#22815D</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>outfit_color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="player_configuration.avatar.outfit_color"                data-endpoint="PUTapi-v1-user-appearance"
               value="#22815D"
               data-component="body">
    <br>
<p>Must match the regex /^#([A-Fa-f0-9]{6})$/. Example: <code>#22815D</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpointy-GETapi-v1-escape-room">GET api/v1/escape-room</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-escape-room">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/escape-room" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/escape-room"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/escape-room';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-escape-room">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;user_id&quot;: 1,
            &quot;name&quot;: &quot;Tajemnica Starożytnej Świątyni&quot;,
            &quot;description&quot;: &quot;Odkryj sekrety starożytnej świątyni pełnej tajemniczych zagadek i ukrytych skarb&oacute;w.&quot;,
            &quot;thumbnail_url&quot;: &quot;/storage/escape-rooms/thumbnails/rl-app-4.png&quot;,
            &quot;soundtrack_url&quot;: &quot;/storage/escape-rooms/soundtracks/a7e4d623-fcef-4666-a4b9-f8925515e479.mp3&quot;,
            &quot;is_public&quot;: true,
            &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;admin&quot;,
                &quot;email&quot;: &quot;admin@riddlelab.world&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;last_login_at&quot;: &quot;2026-02-13 22:04:23&quot;,
                &quot;role&quot;: &quot;admin&quot;,
                &quot;avatar_url&quot;: null,
                &quot;player_configuration&quot;: &quot;{\&quot;avatar\&quot;:{\&quot;skin_color\&quot;:\&quot;#f5d0c5\&quot;,\&quot;hair_color\&quot;:\&quot;#2a1b0a\&quot;,\&quot;eye_color\&quot;:\&quot;#3d6e67\&quot;,\&quot;outfit_color\&quot;:\&quot;#4287f5\&quot;}}&quot;,
                &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;
            },
            &quot;rooms&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;escape_room_id&quot;: 1,
                    &quot;grid_data&quot;: {
                        &quot;2-2&quot;: &quot;1&quot;,
                        &quot;2-3&quot;: &quot;1&quot;,
                        &quot;2-4&quot;: &quot;1&quot;,
                        &quot;2-5&quot;: &quot;1&quot;,
                        &quot;2-6&quot;: &quot;1&quot;,
                        &quot;2-7&quot;: &quot;1&quot;,
                        &quot;2-8&quot;: &quot;1&quot;,
                        &quot;2-9&quot;: &quot;1&quot;,
                        &quot;2-10&quot;: &quot;1&quot;,
                        &quot;2-11&quot;: &quot;1&quot;,
                        &quot;2-12&quot;: &quot;1&quot;,
                        &quot;2-13&quot;: &quot;1&quot;,
                        &quot;2-14&quot;: &quot;1&quot;,
                        &quot;2-15&quot;: &quot;1&quot;,
                        &quot;2-16&quot;: &quot;1&quot;,
                        &quot;2-17&quot;: &quot;1&quot;,
                        &quot;2-18&quot;: &quot;1&quot;,
                        &quot;2-19&quot;: &quot;1&quot;,
                        &quot;2-20&quot;: &quot;1&quot;,
                        &quot;2-21&quot;: &quot;1&quot;,
                        &quot;2-22&quot;: &quot;1&quot;,
                        &quot;2-23&quot;: &quot;1&quot;,
                        &quot;2-24&quot;: &quot;1&quot;,
                        &quot;2-25&quot;: &quot;1&quot;,
                        &quot;2-26&quot;: &quot;1&quot;,
                        &quot;2-27&quot;: &quot;1&quot;,
                        &quot;2-28&quot;: &quot;1&quot;,
                        &quot;3-2&quot;: &quot;1&quot;,
                        &quot;3-3&quot;: &quot;1&quot;,
                        &quot;3-4&quot;: &quot;1&quot;,
                        &quot;3-5&quot;: &quot;1&quot;,
                        &quot;3-6&quot;: &quot;1&quot;,
                        &quot;3-7&quot;: &quot;1&quot;,
                        &quot;3-8&quot;: &quot;1&quot;,
                        &quot;3-9&quot;: &quot;1&quot;,
                        &quot;3-10&quot;: &quot;1&quot;,
                        &quot;3-11&quot;: &quot;1&quot;,
                        &quot;3-12&quot;: &quot;1&quot;,
                        &quot;3-13&quot;: &quot;1&quot;,
                        &quot;3-14&quot;: &quot;1&quot;,
                        &quot;3-15&quot;: &quot;1&quot;,
                        &quot;3-16&quot;: &quot;1&quot;,
                        &quot;3-17&quot;: &quot;1&quot;,
                        &quot;3-18&quot;: &quot;1&quot;,
                        &quot;3-19&quot;: &quot;1&quot;,
                        &quot;3-20&quot;: &quot;1&quot;,
                        &quot;3-21&quot;: &quot;1&quot;,
                        &quot;3-22&quot;: &quot;1&quot;,
                        &quot;3-23&quot;: &quot;1&quot;,
                        &quot;3-24&quot;: &quot;1&quot;,
                        &quot;3-25&quot;: &quot;1&quot;,
                        &quot;3-26&quot;: &quot;1&quot;,
                        &quot;3-27&quot;: &quot;1&quot;,
                        &quot;3-28&quot;: &quot;1&quot;,
                        &quot;4-2&quot;: &quot;1&quot;,
                        &quot;4-3&quot;: &quot;1&quot;,
                        &quot;4-4&quot;: &quot;1&quot;,
                        &quot;4-5&quot;: &quot;1&quot;,
                        &quot;4-6&quot;: &quot;1&quot;,
                        &quot;4-7&quot;: &quot;1&quot;,
                        &quot;4-8&quot;: &quot;1&quot;,
                        &quot;4-9&quot;: &quot;1&quot;,
                        &quot;4-10&quot;: &quot;1&quot;,
                        &quot;4-11&quot;: &quot;1&quot;,
                        &quot;4-12&quot;: &quot;1&quot;,
                        &quot;4-13&quot;: &quot;1&quot;,
                        &quot;4-14&quot;: &quot;1&quot;,
                        &quot;4-15&quot;: &quot;1&quot;,
                        &quot;4-16&quot;: &quot;1&quot;,
                        &quot;4-17&quot;: &quot;1&quot;,
                        &quot;4-18&quot;: &quot;1&quot;,
                        &quot;4-19&quot;: &quot;1&quot;,
                        &quot;4-20&quot;: &quot;1&quot;,
                        &quot;4-21&quot;: &quot;1&quot;,
                        &quot;4-22&quot;: &quot;1&quot;,
                        &quot;4-23&quot;: &quot;1&quot;,
                        &quot;4-24&quot;: &quot;1&quot;,
                        &quot;4-25&quot;: &quot;1&quot;,
                        &quot;4-26&quot;: &quot;1&quot;,
                        &quot;4-27&quot;: &quot;1&quot;,
                        &quot;4-28&quot;: &quot;1&quot;,
                        &quot;5-2&quot;: &quot;1&quot;,
                        &quot;5-3&quot;: &quot;1&quot;,
                        &quot;5-4&quot;: &quot;1&quot;,
                        &quot;5-5&quot;: &quot;1&quot;,
                        &quot;5-6&quot;: &quot;1&quot;,
                        &quot;5-7&quot;: &quot;1&quot;,
                        &quot;5-8&quot;: &quot;1&quot;,
                        &quot;5-9&quot;: &quot;1&quot;,
                        &quot;5-10&quot;: &quot;1&quot;,
                        &quot;5-11&quot;: &quot;1&quot;,
                        &quot;5-12&quot;: &quot;1&quot;,
                        &quot;5-13&quot;: &quot;1&quot;,
                        &quot;5-14&quot;: &quot;1&quot;,
                        &quot;5-15&quot;: &quot;1&quot;,
                        &quot;5-16&quot;: &quot;1&quot;,
                        &quot;5-17&quot;: &quot;1&quot;,
                        &quot;5-18&quot;: &quot;1&quot;,
                        &quot;5-19&quot;: &quot;1&quot;,
                        &quot;5-20&quot;: &quot;1&quot;,
                        &quot;5-21&quot;: &quot;1&quot;,
                        &quot;5-22&quot;: &quot;1&quot;,
                        &quot;5-23&quot;: &quot;1&quot;,
                        &quot;5-24&quot;: &quot;1&quot;,
                        &quot;5-25&quot;: &quot;1&quot;,
                        &quot;5-26&quot;: &quot;1&quot;,
                        &quot;5-27&quot;: &quot;1&quot;,
                        &quot;5-28&quot;: &quot;1&quot;,
                        &quot;6-2&quot;: &quot;1&quot;,
                        &quot;6-3&quot;: &quot;1&quot;,
                        &quot;6-4&quot;: &quot;1&quot;,
                        &quot;6-5&quot;: &quot;1&quot;,
                        &quot;6-6&quot;: &quot;1&quot;,
                        &quot;6-7&quot;: &quot;1&quot;,
                        &quot;6-8&quot;: &quot;1&quot;,
                        &quot;6-9&quot;: &quot;1&quot;,
                        &quot;6-10&quot;: &quot;1&quot;,
                        &quot;6-11&quot;: &quot;1&quot;,
                        &quot;6-12&quot;: &quot;1&quot;,
                        &quot;6-13&quot;: &quot;1&quot;,
                        &quot;6-14&quot;: &quot;1&quot;,
                        &quot;6-15&quot;: &quot;1&quot;,
                        &quot;6-16&quot;: &quot;1&quot;,
                        &quot;6-17&quot;: &quot;1&quot;,
                        &quot;6-18&quot;: &quot;1&quot;,
                        &quot;6-19&quot;: &quot;1&quot;,
                        &quot;6-20&quot;: &quot;1&quot;,
                        &quot;6-21&quot;: &quot;1&quot;,
                        &quot;6-22&quot;: &quot;1&quot;,
                        &quot;6-23&quot;: &quot;1&quot;,
                        &quot;6-24&quot;: &quot;1&quot;,
                        &quot;6-25&quot;: &quot;1&quot;,
                        &quot;6-26&quot;: &quot;1&quot;,
                        &quot;6-27&quot;: &quot;1&quot;,
                        &quot;6-28&quot;: &quot;1&quot;,
                        &quot;7-2&quot;: &quot;1&quot;,
                        &quot;7-3&quot;: &quot;1&quot;,
                        &quot;7-4&quot;: &quot;1&quot;,
                        &quot;7-5&quot;: &quot;1&quot;,
                        &quot;7-6&quot;: &quot;1&quot;,
                        &quot;7-7&quot;: &quot;1&quot;,
                        &quot;7-8&quot;: &quot;1&quot;,
                        &quot;7-9&quot;: &quot;1&quot;,
                        &quot;7-10&quot;: &quot;1&quot;,
                        &quot;7-11&quot;: &quot;1&quot;,
                        &quot;7-12&quot;: &quot;1&quot;,
                        &quot;7-13&quot;: &quot;1&quot;,
                        &quot;7-14&quot;: &quot;1&quot;,
                        &quot;7-15&quot;: &quot;1&quot;,
                        &quot;7-16&quot;: &quot;1&quot;,
                        &quot;7-17&quot;: &quot;1&quot;,
                        &quot;7-18&quot;: &quot;1&quot;,
                        &quot;7-19&quot;: &quot;1&quot;,
                        &quot;7-20&quot;: &quot;1&quot;,
                        &quot;7-21&quot;: &quot;1&quot;,
                        &quot;7-22&quot;: &quot;1&quot;,
                        &quot;7-23&quot;: &quot;1&quot;,
                        &quot;7-24&quot;: &quot;1&quot;,
                        &quot;7-25&quot;: &quot;1&quot;,
                        &quot;7-26&quot;: &quot;1&quot;,
                        &quot;7-27&quot;: &quot;1&quot;,
                        &quot;7-28&quot;: &quot;1&quot;,
                        &quot;8-2&quot;: &quot;1&quot;,
                        &quot;8-3&quot;: &quot;1&quot;,
                        &quot;8-4&quot;: &quot;1&quot;,
                        &quot;8-5&quot;: &quot;1&quot;,
                        &quot;8-6&quot;: &quot;1&quot;,
                        &quot;8-7&quot;: &quot;1&quot;,
                        &quot;8-8&quot;: &quot;1&quot;,
                        &quot;8-9&quot;: &quot;1&quot;,
                        &quot;8-10&quot;: &quot;1&quot;,
                        &quot;8-11&quot;: &quot;1&quot;,
                        &quot;8-12&quot;: &quot;1&quot;,
                        &quot;8-13&quot;: &quot;1&quot;,
                        &quot;8-14&quot;: &quot;1&quot;,
                        &quot;8-15&quot;: &quot;1&quot;,
                        &quot;8-16&quot;: &quot;1&quot;,
                        &quot;8-17&quot;: &quot;1&quot;,
                        &quot;8-18&quot;: &quot;1&quot;,
                        &quot;8-19&quot;: &quot;1&quot;,
                        &quot;8-20&quot;: &quot;1&quot;,
                        &quot;8-21&quot;: &quot;1&quot;,
                        &quot;8-22&quot;: &quot;1&quot;,
                        &quot;8-23&quot;: &quot;1&quot;,
                        &quot;8-24&quot;: &quot;1&quot;,
                        &quot;8-25&quot;: &quot;1&quot;,
                        &quot;8-26&quot;: &quot;1&quot;,
                        &quot;8-27&quot;: &quot;1&quot;,
                        &quot;8-28&quot;: &quot;1&quot;,
                        &quot;9-2&quot;: &quot;1&quot;,
                        &quot;9-3&quot;: &quot;1&quot;,
                        &quot;9-4&quot;: &quot;1&quot;,
                        &quot;9-5&quot;: &quot;1&quot;,
                        &quot;9-6&quot;: &quot;1&quot;,
                        &quot;9-7&quot;: &quot;1&quot;,
                        &quot;9-8&quot;: &quot;1&quot;,
                        &quot;9-9&quot;: &quot;1&quot;,
                        &quot;9-10&quot;: &quot;1&quot;,
                        &quot;9-11&quot;: &quot;1&quot;,
                        &quot;9-12&quot;: &quot;1&quot;,
                        &quot;9-13&quot;: &quot;1&quot;,
                        &quot;9-14&quot;: &quot;1&quot;,
                        &quot;9-15&quot;: &quot;1&quot;,
                        &quot;9-16&quot;: &quot;1&quot;,
                        &quot;9-17&quot;: &quot;1&quot;,
                        &quot;9-18&quot;: &quot;1&quot;,
                        &quot;9-19&quot;: &quot;1&quot;,
                        &quot;9-20&quot;: &quot;1&quot;,
                        &quot;9-21&quot;: &quot;1&quot;,
                        &quot;9-22&quot;: &quot;1&quot;,
                        &quot;9-23&quot;: &quot;1&quot;,
                        &quot;9-24&quot;: &quot;1&quot;,
                        &quot;9-25&quot;: &quot;1&quot;,
                        &quot;9-26&quot;: &quot;1&quot;,
                        &quot;9-27&quot;: &quot;1&quot;,
                        &quot;9-28&quot;: &quot;1&quot;,
                        &quot;10-2&quot;: &quot;1&quot;,
                        &quot;10-3&quot;: &quot;1&quot;,
                        &quot;10-4&quot;: &quot;1&quot;,
                        &quot;10-5&quot;: &quot;1&quot;,
                        &quot;10-6&quot;: &quot;1&quot;,
                        &quot;10-7&quot;: &quot;1&quot;,
                        &quot;10-8&quot;: &quot;1&quot;,
                        &quot;10-9&quot;: &quot;1&quot;,
                        &quot;10-10&quot;: &quot;1&quot;,
                        &quot;10-11&quot;: &quot;1&quot;,
                        &quot;10-12&quot;: &quot;1&quot;,
                        &quot;10-13&quot;: &quot;1&quot;,
                        &quot;10-14&quot;: &quot;1&quot;,
                        &quot;10-15&quot;: &quot;1&quot;,
                        &quot;10-16&quot;: &quot;1&quot;,
                        &quot;10-17&quot;: &quot;1&quot;,
                        &quot;10-18&quot;: &quot;1&quot;,
                        &quot;10-19&quot;: &quot;1&quot;,
                        &quot;10-20&quot;: &quot;1&quot;,
                        &quot;10-21&quot;: &quot;1&quot;,
                        &quot;10-22&quot;: &quot;1&quot;,
                        &quot;10-23&quot;: &quot;1&quot;,
                        &quot;10-24&quot;: &quot;1&quot;,
                        &quot;10-25&quot;: &quot;1&quot;,
                        &quot;10-26&quot;: &quot;1&quot;,
                        &quot;10-27&quot;: &quot;1&quot;,
                        &quot;10-28&quot;: &quot;1&quot;,
                        &quot;11-2&quot;: &quot;1&quot;,
                        &quot;11-3&quot;: &quot;1&quot;,
                        &quot;11-4&quot;: &quot;1&quot;,
                        &quot;11-5&quot;: &quot;1&quot;,
                        &quot;11-6&quot;: &quot;1&quot;,
                        &quot;11-7&quot;: &quot;1&quot;,
                        &quot;11-8&quot;: &quot;1&quot;,
                        &quot;11-9&quot;: &quot;1&quot;,
                        &quot;11-10&quot;: &quot;1&quot;,
                        &quot;11-11&quot;: &quot;1&quot;,
                        &quot;11-12&quot;: &quot;1&quot;,
                        &quot;11-13&quot;: &quot;1&quot;,
                        &quot;11-14&quot;: &quot;1&quot;,
                        &quot;11-15&quot;: &quot;1&quot;,
                        &quot;11-16&quot;: &quot;1&quot;,
                        &quot;11-17&quot;: &quot;1&quot;,
                        &quot;11-18&quot;: &quot;1&quot;,
                        &quot;11-19&quot;: &quot;1&quot;,
                        &quot;11-20&quot;: &quot;1&quot;,
                        &quot;11-21&quot;: &quot;1&quot;,
                        &quot;11-22&quot;: &quot;1&quot;,
                        &quot;11-23&quot;: &quot;1&quot;,
                        &quot;11-24&quot;: &quot;1&quot;,
                        &quot;11-25&quot;: &quot;1&quot;,
                        &quot;11-26&quot;: &quot;1&quot;,
                        &quot;11-27&quot;: &quot;1&quot;,
                        &quot;11-28&quot;: &quot;1&quot;,
                        &quot;12-2&quot;: &quot;1&quot;,
                        &quot;12-3&quot;: &quot;1&quot;,
                        &quot;12-4&quot;: &quot;1&quot;,
                        &quot;12-5&quot;: &quot;1&quot;,
                        &quot;12-6&quot;: &quot;1&quot;,
                        &quot;12-7&quot;: &quot;1&quot;,
                        &quot;12-8&quot;: &quot;1&quot;,
                        &quot;12-9&quot;: &quot;1&quot;,
                        &quot;12-10&quot;: &quot;1&quot;,
                        &quot;12-11&quot;: &quot;1&quot;,
                        &quot;12-12&quot;: &quot;1&quot;,
                        &quot;12-13&quot;: &quot;1&quot;,
                        &quot;12-14&quot;: &quot;1&quot;,
                        &quot;12-15&quot;: &quot;1&quot;,
                        &quot;12-16&quot;: &quot;1&quot;,
                        &quot;12-17&quot;: &quot;1&quot;,
                        &quot;12-18&quot;: &quot;1&quot;,
                        &quot;12-19&quot;: &quot;1&quot;,
                        &quot;12-20&quot;: &quot;1&quot;,
                        &quot;12-21&quot;: &quot;1&quot;,
                        &quot;12-22&quot;: &quot;1&quot;,
                        &quot;12-23&quot;: &quot;1&quot;,
                        &quot;12-24&quot;: &quot;1&quot;,
                        &quot;12-25&quot;: &quot;1&quot;,
                        &quot;12-26&quot;: &quot;1&quot;,
                        &quot;12-27&quot;: &quot;1&quot;,
                        &quot;12-28&quot;: &quot;1&quot;,
                        &quot;13-2&quot;: &quot;1&quot;,
                        &quot;13-3&quot;: &quot;1&quot;,
                        &quot;13-4&quot;: &quot;1&quot;,
                        &quot;13-5&quot;: &quot;1&quot;,
                        &quot;13-6&quot;: &quot;1&quot;,
                        &quot;13-7&quot;: &quot;1&quot;,
                        &quot;13-8&quot;: &quot;1&quot;,
                        &quot;13-9&quot;: &quot;1&quot;,
                        &quot;13-10&quot;: &quot;1&quot;,
                        &quot;13-11&quot;: &quot;1&quot;,
                        &quot;13-12&quot;: &quot;1&quot;,
                        &quot;13-13&quot;: &quot;1&quot;,
                        &quot;13-14&quot;: &quot;1&quot;,
                        &quot;13-15&quot;: &quot;1&quot;,
                        &quot;13-16&quot;: &quot;1&quot;,
                        &quot;13-17&quot;: &quot;1&quot;,
                        &quot;13-18&quot;: &quot;1&quot;,
                        &quot;13-19&quot;: &quot;1&quot;,
                        &quot;13-20&quot;: &quot;1&quot;,
                        &quot;13-21&quot;: &quot;1&quot;,
                        &quot;13-22&quot;: &quot;1&quot;,
                        &quot;13-23&quot;: &quot;1&quot;,
                        &quot;13-24&quot;: &quot;1&quot;,
                        &quot;13-25&quot;: &quot;1&quot;,
                        &quot;13-26&quot;: &quot;1&quot;,
                        &quot;13-27&quot;: &quot;1&quot;,
                        &quot;13-28&quot;: &quot;1&quot;,
                        &quot;14-2&quot;: &quot;1&quot;,
                        &quot;14-3&quot;: &quot;1&quot;,
                        &quot;14-4&quot;: &quot;1&quot;,
                        &quot;14-5&quot;: &quot;1&quot;,
                        &quot;14-6&quot;: &quot;1&quot;,
                        &quot;14-7&quot;: &quot;1&quot;,
                        &quot;14-8&quot;: &quot;1&quot;,
                        &quot;14-9&quot;: &quot;1&quot;,
                        &quot;14-10&quot;: &quot;1&quot;,
                        &quot;14-11&quot;: &quot;1&quot;,
                        &quot;14-12&quot;: &quot;1&quot;,
                        &quot;14-13&quot;: &quot;1&quot;,
                        &quot;14-14&quot;: &quot;1&quot;,
                        &quot;14-15&quot;: &quot;1&quot;,
                        &quot;14-16&quot;: &quot;1&quot;,
                        &quot;14-17&quot;: &quot;1&quot;,
                        &quot;14-18&quot;: &quot;1&quot;,
                        &quot;14-19&quot;: &quot;1&quot;,
                        &quot;14-20&quot;: &quot;1&quot;,
                        &quot;14-21&quot;: &quot;1&quot;,
                        &quot;14-22&quot;: &quot;1&quot;,
                        &quot;14-23&quot;: &quot;1&quot;,
                        &quot;14-24&quot;: &quot;1&quot;,
                        &quot;14-25&quot;: &quot;1&quot;,
                        &quot;14-26&quot;: &quot;1&quot;,
                        &quot;14-27&quot;: &quot;1&quot;,
                        &quot;14-28&quot;: &quot;1&quot;,
                        &quot;15-2&quot;: &quot;1&quot;,
                        &quot;15-3&quot;: &quot;1&quot;,
                        &quot;15-4&quot;: &quot;1&quot;,
                        &quot;15-5&quot;: &quot;1&quot;,
                        &quot;15-6&quot;: &quot;1&quot;,
                        &quot;15-7&quot;: &quot;1&quot;,
                        &quot;15-8&quot;: &quot;1&quot;,
                        &quot;15-9&quot;: &quot;1&quot;,
                        &quot;15-10&quot;: &quot;1&quot;,
                        &quot;15-11&quot;: &quot;1&quot;,
                        &quot;15-12&quot;: &quot;1&quot;,
                        &quot;15-13&quot;: &quot;1&quot;,
                        &quot;15-14&quot;: &quot;1&quot;,
                        &quot;15-15&quot;: &quot;1&quot;,
                        &quot;15-16&quot;: &quot;1&quot;,
                        &quot;15-17&quot;: &quot;1&quot;,
                        &quot;15-18&quot;: &quot;1&quot;,
                        &quot;15-19&quot;: &quot;1&quot;,
                        &quot;15-20&quot;: &quot;1&quot;,
                        &quot;15-21&quot;: &quot;1&quot;,
                        &quot;15-22&quot;: &quot;1&quot;,
                        &quot;15-23&quot;: &quot;1&quot;,
                        &quot;15-24&quot;: &quot;1&quot;,
                        &quot;15-25&quot;: &quot;1&quot;,
                        &quot;15-26&quot;: &quot;1&quot;,
                        &quot;15-27&quot;: &quot;1&quot;,
                        &quot;15-28&quot;: &quot;1&quot;,
                        &quot;16-2&quot;: &quot;1&quot;,
                        &quot;16-3&quot;: &quot;1&quot;,
                        &quot;16-4&quot;: &quot;1&quot;,
                        &quot;16-5&quot;: &quot;1&quot;,
                        &quot;16-6&quot;: &quot;1&quot;,
                        &quot;16-7&quot;: &quot;1&quot;,
                        &quot;16-8&quot;: &quot;1&quot;,
                        &quot;16-9&quot;: &quot;1&quot;,
                        &quot;16-10&quot;: &quot;1&quot;,
                        &quot;16-11&quot;: &quot;1&quot;,
                        &quot;16-12&quot;: &quot;1&quot;,
                        &quot;16-13&quot;: &quot;1&quot;,
                        &quot;16-14&quot;: &quot;1&quot;,
                        &quot;16-15&quot;: &quot;1&quot;,
                        &quot;16-16&quot;: &quot;1&quot;,
                        &quot;16-17&quot;: &quot;1&quot;,
                        &quot;16-18&quot;: &quot;1&quot;,
                        &quot;16-19&quot;: &quot;1&quot;,
                        &quot;16-20&quot;: &quot;1&quot;,
                        &quot;16-21&quot;: &quot;1&quot;,
                        &quot;16-22&quot;: &quot;1&quot;,
                        &quot;16-23&quot;: &quot;1&quot;,
                        &quot;16-24&quot;: &quot;1&quot;,
                        &quot;16-25&quot;: &quot;1&quot;,
                        &quot;16-26&quot;: &quot;1&quot;,
                        &quot;16-27&quot;: &quot;1&quot;,
                        &quot;16-28&quot;: &quot;1&quot;,
                        &quot;17-2&quot;: &quot;1&quot;,
                        &quot;17-3&quot;: &quot;1&quot;,
                        &quot;17-4&quot;: &quot;1&quot;,
                        &quot;17-5&quot;: &quot;1&quot;,
                        &quot;17-6&quot;: &quot;1&quot;,
                        &quot;17-7&quot;: &quot;1&quot;,
                        &quot;17-8&quot;: &quot;1&quot;,
                        &quot;17-9&quot;: &quot;1&quot;,
                        &quot;17-10&quot;: &quot;1&quot;,
                        &quot;17-11&quot;: &quot;1&quot;,
                        &quot;17-12&quot;: &quot;1&quot;,
                        &quot;17-13&quot;: &quot;1&quot;,
                        &quot;17-14&quot;: &quot;1&quot;,
                        &quot;17-15&quot;: &quot;1&quot;,
                        &quot;17-16&quot;: &quot;1&quot;,
                        &quot;17-17&quot;: &quot;1&quot;,
                        &quot;17-18&quot;: &quot;1&quot;,
                        &quot;17-19&quot;: &quot;1&quot;,
                        &quot;17-20&quot;: &quot;1&quot;,
                        &quot;17-21&quot;: &quot;1&quot;,
                        &quot;17-22&quot;: &quot;1&quot;,
                        &quot;17-23&quot;: &quot;1&quot;,
                        &quot;17-24&quot;: &quot;1&quot;,
                        &quot;17-25&quot;: &quot;1&quot;,
                        &quot;17-26&quot;: &quot;1&quot;,
                        &quot;17-27&quot;: &quot;1&quot;,
                        &quot;17-28&quot;: &quot;1&quot;,
                        &quot;18-2&quot;: &quot;1&quot;,
                        &quot;18-3&quot;: &quot;1&quot;,
                        &quot;18-4&quot;: &quot;1&quot;,
                        &quot;18-5&quot;: &quot;1&quot;,
                        &quot;18-6&quot;: &quot;1&quot;,
                        &quot;18-7&quot;: &quot;1&quot;,
                        &quot;18-8&quot;: &quot;1&quot;,
                        &quot;18-9&quot;: &quot;1&quot;,
                        &quot;18-10&quot;: &quot;1&quot;,
                        &quot;18-11&quot;: &quot;1&quot;,
                        &quot;18-12&quot;: &quot;1&quot;,
                        &quot;18-13&quot;: &quot;1&quot;,
                        &quot;18-14&quot;: &quot;1&quot;,
                        &quot;18-15&quot;: &quot;1&quot;,
                        &quot;18-16&quot;: &quot;1&quot;,
                        &quot;18-17&quot;: &quot;1&quot;,
                        &quot;18-18&quot;: &quot;1&quot;,
                        &quot;18-19&quot;: &quot;1&quot;,
                        &quot;18-20&quot;: &quot;1&quot;,
                        &quot;18-21&quot;: &quot;1&quot;,
                        &quot;18-22&quot;: &quot;1&quot;,
                        &quot;18-23&quot;: &quot;1&quot;,
                        &quot;18-24&quot;: &quot;1&quot;,
                        &quot;18-25&quot;: &quot;1&quot;,
                        &quot;18-26&quot;: &quot;1&quot;,
                        &quot;18-27&quot;: &quot;1&quot;,
                        &quot;18-28&quot;: &quot;1&quot;
                    },
                    &quot;walls_data&quot;: {
                        &quot;wallColor&quot;: &quot;#444444&quot;,
                        &quot;2-2&quot;: &quot;#444444&quot;,
                        &quot;2-3&quot;: &quot;#444444&quot;,
                        &quot;2-4&quot;: &quot;#444444&quot;,
                        &quot;2-5&quot;: &quot;#444444&quot;,
                        &quot;2-6&quot;: &quot;#444444&quot;,
                        &quot;2-7&quot;: &quot;#444444&quot;,
                        &quot;2-8&quot;: &quot;#444444&quot;,
                        &quot;2-9&quot;: &quot;#444444&quot;,
                        &quot;2-10&quot;: &quot;#444444&quot;,
                        &quot;2-11&quot;: &quot;#444444&quot;,
                        &quot;2-12&quot;: &quot;#444444&quot;,
                        &quot;2-13&quot;: &quot;#444444&quot;,
                        &quot;2-14&quot;: &quot;#444444&quot;,
                        &quot;2-15&quot;: &quot;#444444&quot;,
                        &quot;2-16&quot;: &quot;#444444&quot;,
                        &quot;2-17&quot;: &quot;#444444&quot;,
                        &quot;2-18&quot;: &quot;#444444&quot;,
                        &quot;2-19&quot;: &quot;#444444&quot;,
                        &quot;2-20&quot;: &quot;#444444&quot;,
                        &quot;2-21&quot;: &quot;#444444&quot;,
                        &quot;2-22&quot;: &quot;#444444&quot;,
                        &quot;2-23&quot;: &quot;#444444&quot;,
                        &quot;2-24&quot;: &quot;#444444&quot;,
                        &quot;2-25&quot;: &quot;#444444&quot;,
                        &quot;2-26&quot;: &quot;#444444&quot;,
                        &quot;2-27&quot;: &quot;#444444&quot;,
                        &quot;2-28&quot;: &quot;#444444&quot;,
                        &quot;3-2&quot;: &quot;#444444&quot;,
                        &quot;3-3&quot;: &quot;#444444&quot;,
                        &quot;3-4&quot;: &quot;#444444&quot;,
                        &quot;3-5&quot;: &quot;#444444&quot;,
                        &quot;3-6&quot;: &quot;#444444&quot;,
                        &quot;3-7&quot;: &quot;#444444&quot;,
                        &quot;3-8&quot;: &quot;#444444&quot;,
                        &quot;3-9&quot;: &quot;#444444&quot;,
                        &quot;3-10&quot;: &quot;#444444&quot;,
                        &quot;3-11&quot;: &quot;#444444&quot;,
                        &quot;3-12&quot;: &quot;#444444&quot;,
                        &quot;3-13&quot;: &quot;#444444&quot;,
                        &quot;3-14&quot;: &quot;#444444&quot;,
                        &quot;3-15&quot;: &quot;#444444&quot;,
                        &quot;3-16&quot;: &quot;#444444&quot;,
                        &quot;3-17&quot;: &quot;#444444&quot;,
                        &quot;3-18&quot;: &quot;#444444&quot;,
                        &quot;3-19&quot;: &quot;#444444&quot;,
                        &quot;3-20&quot;: &quot;#444444&quot;,
                        &quot;3-21&quot;: &quot;#444444&quot;,
                        &quot;3-22&quot;: &quot;#444444&quot;,
                        &quot;3-23&quot;: &quot;#444444&quot;,
                        &quot;3-24&quot;: &quot;#444444&quot;,
                        &quot;3-25&quot;: &quot;#444444&quot;,
                        &quot;3-26&quot;: &quot;#444444&quot;,
                        &quot;3-27&quot;: &quot;#444444&quot;,
                        &quot;3-28&quot;: &quot;#444444&quot;,
                        &quot;4-2&quot;: &quot;#444444&quot;,
                        &quot;4-3&quot;: &quot;#444444&quot;,
                        &quot;4-4&quot;: &quot;#444444&quot;,
                        &quot;4-5&quot;: &quot;#444444&quot;,
                        &quot;4-6&quot;: &quot;#444444&quot;,
                        &quot;4-7&quot;: &quot;#444444&quot;,
                        &quot;4-8&quot;: &quot;#444444&quot;,
                        &quot;4-9&quot;: &quot;#444444&quot;,
                        &quot;4-10&quot;: &quot;#444444&quot;,
                        &quot;4-11&quot;: &quot;#444444&quot;,
                        &quot;4-12&quot;: &quot;#444444&quot;,
                        &quot;4-13&quot;: &quot;#444444&quot;,
                        &quot;4-14&quot;: &quot;#444444&quot;,
                        &quot;4-15&quot;: &quot;#444444&quot;,
                        &quot;4-16&quot;: &quot;#444444&quot;,
                        &quot;4-17&quot;: &quot;#444444&quot;,
                        &quot;4-18&quot;: &quot;#444444&quot;,
                        &quot;4-19&quot;: &quot;#444444&quot;,
                        &quot;4-20&quot;: &quot;#444444&quot;,
                        &quot;4-21&quot;: &quot;#444444&quot;,
                        &quot;4-22&quot;: &quot;#444444&quot;,
                        &quot;4-23&quot;: &quot;#444444&quot;,
                        &quot;4-24&quot;: &quot;#444444&quot;,
                        &quot;4-25&quot;: &quot;#444444&quot;,
                        &quot;4-26&quot;: &quot;#444444&quot;,
                        &quot;4-27&quot;: &quot;#444444&quot;,
                        &quot;4-28&quot;: &quot;#444444&quot;,
                        &quot;5-2&quot;: &quot;#444444&quot;,
                        &quot;5-3&quot;: &quot;#444444&quot;,
                        &quot;5-4&quot;: &quot;#444444&quot;,
                        &quot;5-5&quot;: &quot;#444444&quot;,
                        &quot;5-6&quot;: &quot;#444444&quot;,
                        &quot;5-7&quot;: &quot;#444444&quot;,
                        &quot;5-8&quot;: &quot;#444444&quot;,
                        &quot;5-9&quot;: &quot;#444444&quot;,
                        &quot;5-10&quot;: &quot;#444444&quot;,
                        &quot;5-11&quot;: &quot;#444444&quot;,
                        &quot;5-12&quot;: &quot;#444444&quot;,
                        &quot;5-13&quot;: &quot;#444444&quot;,
                        &quot;5-14&quot;: &quot;#444444&quot;,
                        &quot;5-15&quot;: &quot;#444444&quot;,
                        &quot;5-16&quot;: &quot;#444444&quot;,
                        &quot;5-17&quot;: &quot;#444444&quot;,
                        &quot;5-18&quot;: &quot;#444444&quot;,
                        &quot;5-19&quot;: &quot;#444444&quot;,
                        &quot;5-20&quot;: &quot;#444444&quot;,
                        &quot;5-21&quot;: &quot;#444444&quot;,
                        &quot;5-22&quot;: &quot;#444444&quot;,
                        &quot;5-23&quot;: &quot;#444444&quot;,
                        &quot;5-24&quot;: &quot;#444444&quot;,
                        &quot;5-25&quot;: &quot;#444444&quot;,
                        &quot;5-26&quot;: &quot;#444444&quot;,
                        &quot;5-27&quot;: &quot;#444444&quot;,
                        &quot;5-28&quot;: &quot;#444444&quot;,
                        &quot;6-2&quot;: &quot;#444444&quot;,
                        &quot;6-3&quot;: &quot;#444444&quot;,
                        &quot;6-4&quot;: &quot;#444444&quot;,
                        &quot;6-5&quot;: &quot;#444444&quot;,
                        &quot;6-6&quot;: &quot;#444444&quot;,
                        &quot;6-7&quot;: &quot;#444444&quot;,
                        &quot;6-8&quot;: &quot;#444444&quot;,
                        &quot;6-9&quot;: &quot;#444444&quot;,
                        &quot;6-10&quot;: &quot;#444444&quot;,
                        &quot;6-11&quot;: &quot;#444444&quot;,
                        &quot;6-12&quot;: &quot;#444444&quot;,
                        &quot;6-13&quot;: &quot;#444444&quot;,
                        &quot;6-14&quot;: &quot;#444444&quot;,
                        &quot;6-15&quot;: &quot;#444444&quot;,
                        &quot;6-16&quot;: &quot;#444444&quot;,
                        &quot;6-17&quot;: &quot;#444444&quot;,
                        &quot;6-18&quot;: &quot;#444444&quot;,
                        &quot;6-19&quot;: &quot;#444444&quot;,
                        &quot;6-20&quot;: &quot;#444444&quot;,
                        &quot;6-21&quot;: &quot;#444444&quot;,
                        &quot;6-22&quot;: &quot;#444444&quot;,
                        &quot;6-23&quot;: &quot;#444444&quot;,
                        &quot;6-24&quot;: &quot;#444444&quot;,
                        &quot;6-25&quot;: &quot;#444444&quot;,
                        &quot;6-26&quot;: &quot;#444444&quot;,
                        &quot;6-27&quot;: &quot;#444444&quot;,
                        &quot;6-28&quot;: &quot;#444444&quot;,
                        &quot;7-2&quot;: &quot;#444444&quot;,
                        &quot;7-3&quot;: &quot;#444444&quot;,
                        &quot;7-4&quot;: &quot;#444444&quot;,
                        &quot;7-5&quot;: &quot;#444444&quot;,
                        &quot;7-6&quot;: &quot;#444444&quot;,
                        &quot;7-7&quot;: &quot;#444444&quot;,
                        &quot;7-8&quot;: &quot;#444444&quot;,
                        &quot;7-9&quot;: &quot;#444444&quot;,
                        &quot;7-10&quot;: &quot;#444444&quot;,
                        &quot;7-11&quot;: &quot;#444444&quot;,
                        &quot;7-12&quot;: &quot;#444444&quot;,
                        &quot;7-13&quot;: &quot;#444444&quot;,
                        &quot;7-14&quot;: &quot;#444444&quot;,
                        &quot;7-15&quot;: &quot;#444444&quot;,
                        &quot;7-16&quot;: &quot;#444444&quot;,
                        &quot;7-17&quot;: &quot;#444444&quot;,
                        &quot;7-18&quot;: &quot;#444444&quot;,
                        &quot;7-19&quot;: &quot;#444444&quot;,
                        &quot;7-20&quot;: &quot;#444444&quot;,
                        &quot;7-21&quot;: &quot;#444444&quot;,
                        &quot;7-22&quot;: &quot;#444444&quot;,
                        &quot;7-23&quot;: &quot;#444444&quot;,
                        &quot;7-24&quot;: &quot;#444444&quot;,
                        &quot;7-25&quot;: &quot;#444444&quot;,
                        &quot;7-26&quot;: &quot;#444444&quot;,
                        &quot;7-27&quot;: &quot;#444444&quot;,
                        &quot;7-28&quot;: &quot;#444444&quot;,
                        &quot;8-2&quot;: &quot;#444444&quot;,
                        &quot;8-3&quot;: &quot;#444444&quot;,
                        &quot;8-4&quot;: &quot;#444444&quot;,
                        &quot;8-5&quot;: &quot;#444444&quot;,
                        &quot;8-6&quot;: &quot;#444444&quot;,
                        &quot;8-7&quot;: &quot;#444444&quot;,
                        &quot;8-8&quot;: &quot;#444444&quot;,
                        &quot;8-9&quot;: &quot;#444444&quot;,
                        &quot;8-10&quot;: &quot;#444444&quot;,
                        &quot;8-11&quot;: &quot;#444444&quot;,
                        &quot;8-12&quot;: &quot;#444444&quot;,
                        &quot;8-13&quot;: &quot;#444444&quot;,
                        &quot;8-14&quot;: &quot;#444444&quot;,
                        &quot;8-15&quot;: &quot;#444444&quot;,
                        &quot;8-16&quot;: &quot;#444444&quot;,
                        &quot;8-17&quot;: &quot;#444444&quot;,
                        &quot;8-18&quot;: &quot;#444444&quot;,
                        &quot;8-19&quot;: &quot;#444444&quot;,
                        &quot;8-20&quot;: &quot;#444444&quot;,
                        &quot;8-21&quot;: &quot;#444444&quot;,
                        &quot;8-22&quot;: &quot;#444444&quot;,
                        &quot;8-23&quot;: &quot;#444444&quot;,
                        &quot;8-24&quot;: &quot;#444444&quot;,
                        &quot;8-25&quot;: &quot;#444444&quot;,
                        &quot;8-26&quot;: &quot;#444444&quot;,
                        &quot;8-27&quot;: &quot;#444444&quot;,
                        &quot;8-28&quot;: &quot;#444444&quot;,
                        &quot;9-2&quot;: &quot;#444444&quot;,
                        &quot;9-3&quot;: &quot;#444444&quot;,
                        &quot;9-4&quot;: &quot;#444444&quot;,
                        &quot;9-5&quot;: &quot;#444444&quot;,
                        &quot;9-6&quot;: &quot;#444444&quot;,
                        &quot;9-7&quot;: &quot;#444444&quot;,
                        &quot;9-8&quot;: &quot;#444444&quot;,
                        &quot;9-9&quot;: &quot;#444444&quot;,
                        &quot;9-10&quot;: &quot;#444444&quot;,
                        &quot;9-11&quot;: &quot;#444444&quot;,
                        &quot;9-12&quot;: &quot;#444444&quot;,
                        &quot;9-13&quot;: &quot;#444444&quot;,
                        &quot;9-14&quot;: &quot;#444444&quot;,
                        &quot;9-15&quot;: &quot;#444444&quot;,
                        &quot;9-16&quot;: &quot;#444444&quot;,
                        &quot;9-17&quot;: &quot;#444444&quot;,
                        &quot;9-18&quot;: &quot;#444444&quot;,
                        &quot;9-19&quot;: &quot;#444444&quot;,
                        &quot;9-20&quot;: &quot;#444444&quot;,
                        &quot;9-21&quot;: &quot;#444444&quot;,
                        &quot;9-22&quot;: &quot;#444444&quot;,
                        &quot;9-23&quot;: &quot;#444444&quot;,
                        &quot;9-24&quot;: &quot;#444444&quot;,
                        &quot;9-25&quot;: &quot;#444444&quot;,
                        &quot;9-26&quot;: &quot;#444444&quot;,
                        &quot;9-27&quot;: &quot;#444444&quot;,
                        &quot;9-28&quot;: &quot;#444444&quot;,
                        &quot;10-2&quot;: &quot;#444444&quot;,
                        &quot;10-3&quot;: &quot;#444444&quot;,
                        &quot;10-4&quot;: &quot;#444444&quot;,
                        &quot;10-5&quot;: &quot;#444444&quot;,
                        &quot;10-6&quot;: &quot;#444444&quot;,
                        &quot;10-7&quot;: &quot;#444444&quot;,
                        &quot;10-8&quot;: &quot;#444444&quot;,
                        &quot;10-9&quot;: &quot;#444444&quot;,
                        &quot;10-10&quot;: &quot;#444444&quot;,
                        &quot;10-11&quot;: &quot;#444444&quot;,
                        &quot;10-12&quot;: &quot;#444444&quot;,
                        &quot;10-13&quot;: &quot;#444444&quot;,
                        &quot;10-14&quot;: &quot;#444444&quot;,
                        &quot;10-15&quot;: &quot;#444444&quot;,
                        &quot;10-16&quot;: &quot;#444444&quot;,
                        &quot;10-17&quot;: &quot;#444444&quot;,
                        &quot;10-18&quot;: &quot;#444444&quot;,
                        &quot;10-19&quot;: &quot;#444444&quot;,
                        &quot;10-20&quot;: &quot;#444444&quot;,
                        &quot;10-21&quot;: &quot;#444444&quot;,
                        &quot;10-22&quot;: &quot;#444444&quot;,
                        &quot;10-23&quot;: &quot;#444444&quot;,
                        &quot;10-24&quot;: &quot;#444444&quot;,
                        &quot;10-25&quot;: &quot;#444444&quot;,
                        &quot;10-26&quot;: &quot;#444444&quot;,
                        &quot;10-27&quot;: &quot;#444444&quot;,
                        &quot;10-28&quot;: &quot;#444444&quot;,
                        &quot;11-2&quot;: &quot;#444444&quot;,
                        &quot;11-3&quot;: &quot;#444444&quot;,
                        &quot;11-4&quot;: &quot;#444444&quot;,
                        &quot;11-5&quot;: &quot;#444444&quot;,
                        &quot;11-6&quot;: &quot;#444444&quot;,
                        &quot;11-7&quot;: &quot;#444444&quot;,
                        &quot;11-8&quot;: &quot;#444444&quot;,
                        &quot;11-9&quot;: &quot;#444444&quot;,
                        &quot;11-10&quot;: &quot;#444444&quot;,
                        &quot;11-11&quot;: &quot;#444444&quot;,
                        &quot;11-12&quot;: &quot;#444444&quot;,
                        &quot;11-13&quot;: &quot;#444444&quot;,
                        &quot;11-14&quot;: &quot;#444444&quot;,
                        &quot;11-15&quot;: &quot;#444444&quot;,
                        &quot;11-16&quot;: &quot;#444444&quot;,
                        &quot;11-17&quot;: &quot;#444444&quot;,
                        &quot;11-18&quot;: &quot;#444444&quot;,
                        &quot;11-19&quot;: &quot;#444444&quot;,
                        &quot;11-20&quot;: &quot;#444444&quot;,
                        &quot;11-21&quot;: &quot;#444444&quot;,
                        &quot;11-22&quot;: &quot;#444444&quot;,
                        &quot;11-23&quot;: &quot;#444444&quot;,
                        &quot;11-24&quot;: &quot;#444444&quot;,
                        &quot;11-25&quot;: &quot;#444444&quot;,
                        &quot;11-26&quot;: &quot;#444444&quot;,
                        &quot;11-27&quot;: &quot;#444444&quot;,
                        &quot;11-28&quot;: &quot;#444444&quot;,
                        &quot;12-2&quot;: &quot;#444444&quot;,
                        &quot;12-3&quot;: &quot;#444444&quot;,
                        &quot;12-4&quot;: &quot;#444444&quot;,
                        &quot;12-5&quot;: &quot;#444444&quot;,
                        &quot;12-6&quot;: &quot;#444444&quot;,
                        &quot;12-7&quot;: &quot;#444444&quot;,
                        &quot;12-8&quot;: &quot;#444444&quot;,
                        &quot;12-9&quot;: &quot;#444444&quot;,
                        &quot;12-10&quot;: &quot;#444444&quot;,
                        &quot;12-11&quot;: &quot;#444444&quot;,
                        &quot;12-12&quot;: &quot;#444444&quot;,
                        &quot;12-13&quot;: &quot;#444444&quot;,
                        &quot;12-14&quot;: &quot;#444444&quot;,
                        &quot;12-15&quot;: &quot;#444444&quot;,
                        &quot;12-16&quot;: &quot;#444444&quot;,
                        &quot;12-17&quot;: &quot;#444444&quot;,
                        &quot;12-18&quot;: &quot;#444444&quot;,
                        &quot;12-19&quot;: &quot;#444444&quot;,
                        &quot;12-20&quot;: &quot;#444444&quot;,
                        &quot;12-21&quot;: &quot;#444444&quot;,
                        &quot;12-22&quot;: &quot;#444444&quot;,
                        &quot;12-23&quot;: &quot;#444444&quot;,
                        &quot;12-24&quot;: &quot;#444444&quot;,
                        &quot;12-25&quot;: &quot;#444444&quot;,
                        &quot;12-26&quot;: &quot;#444444&quot;,
                        &quot;12-27&quot;: &quot;#444444&quot;,
                        &quot;12-28&quot;: &quot;#444444&quot;,
                        &quot;13-2&quot;: &quot;#444444&quot;,
                        &quot;13-3&quot;: &quot;#444444&quot;,
                        &quot;13-4&quot;: &quot;#444444&quot;,
                        &quot;13-5&quot;: &quot;#444444&quot;,
                        &quot;13-6&quot;: &quot;#444444&quot;,
                        &quot;13-7&quot;: &quot;#444444&quot;,
                        &quot;13-8&quot;: &quot;#444444&quot;,
                        &quot;13-9&quot;: &quot;#444444&quot;,
                        &quot;13-10&quot;: &quot;#444444&quot;,
                        &quot;13-11&quot;: &quot;#444444&quot;,
                        &quot;13-12&quot;: &quot;#444444&quot;,
                        &quot;13-13&quot;: &quot;#444444&quot;,
                        &quot;13-14&quot;: &quot;#444444&quot;,
                        &quot;13-15&quot;: &quot;#444444&quot;,
                        &quot;13-16&quot;: &quot;#444444&quot;,
                        &quot;13-17&quot;: &quot;#444444&quot;,
                        &quot;13-18&quot;: &quot;#444444&quot;,
                        &quot;13-19&quot;: &quot;#444444&quot;,
                        &quot;13-20&quot;: &quot;#444444&quot;,
                        &quot;13-21&quot;: &quot;#444444&quot;,
                        &quot;13-22&quot;: &quot;#444444&quot;,
                        &quot;13-23&quot;: &quot;#444444&quot;,
                        &quot;13-24&quot;: &quot;#444444&quot;,
                        &quot;13-25&quot;: &quot;#444444&quot;,
                        &quot;13-26&quot;: &quot;#444444&quot;,
                        &quot;13-27&quot;: &quot;#444444&quot;,
                        &quot;13-28&quot;: &quot;#444444&quot;,
                        &quot;14-2&quot;: &quot;#444444&quot;,
                        &quot;14-3&quot;: &quot;#444444&quot;,
                        &quot;14-4&quot;: &quot;#444444&quot;,
                        &quot;14-5&quot;: &quot;#444444&quot;,
                        &quot;14-6&quot;: &quot;#444444&quot;,
                        &quot;14-7&quot;: &quot;#444444&quot;,
                        &quot;14-8&quot;: &quot;#444444&quot;,
                        &quot;14-9&quot;: &quot;#444444&quot;,
                        &quot;14-10&quot;: &quot;#444444&quot;,
                        &quot;14-11&quot;: &quot;#444444&quot;,
                        &quot;14-12&quot;: &quot;#444444&quot;,
                        &quot;14-13&quot;: &quot;#444444&quot;,
                        &quot;14-14&quot;: &quot;#444444&quot;,
                        &quot;14-15&quot;: &quot;#444444&quot;,
                        &quot;14-16&quot;: &quot;#444444&quot;,
                        &quot;14-17&quot;: &quot;#444444&quot;,
                        &quot;14-18&quot;: &quot;#444444&quot;,
                        &quot;14-19&quot;: &quot;#444444&quot;,
                        &quot;14-20&quot;: &quot;#444444&quot;,
                        &quot;14-21&quot;: &quot;#444444&quot;,
                        &quot;14-22&quot;: &quot;#444444&quot;,
                        &quot;14-23&quot;: &quot;#444444&quot;,
                        &quot;14-24&quot;: &quot;#444444&quot;,
                        &quot;14-25&quot;: &quot;#444444&quot;,
                        &quot;14-26&quot;: &quot;#444444&quot;,
                        &quot;14-27&quot;: &quot;#444444&quot;,
                        &quot;14-28&quot;: &quot;#444444&quot;,
                        &quot;15-2&quot;: &quot;#444444&quot;,
                        &quot;15-3&quot;: &quot;#444444&quot;,
                        &quot;15-4&quot;: &quot;#444444&quot;,
                        &quot;15-5&quot;: &quot;#444444&quot;,
                        &quot;15-6&quot;: &quot;#444444&quot;,
                        &quot;15-7&quot;: &quot;#444444&quot;,
                        &quot;15-8&quot;: &quot;#444444&quot;,
                        &quot;15-9&quot;: &quot;#444444&quot;,
                        &quot;15-10&quot;: &quot;#444444&quot;,
                        &quot;15-11&quot;: &quot;#444444&quot;,
                        &quot;15-12&quot;: &quot;#444444&quot;,
                        &quot;15-13&quot;: &quot;#444444&quot;,
                        &quot;15-14&quot;: &quot;#444444&quot;,
                        &quot;15-15&quot;: &quot;#444444&quot;,
                        &quot;15-16&quot;: &quot;#444444&quot;,
                        &quot;15-17&quot;: &quot;#444444&quot;,
                        &quot;15-18&quot;: &quot;#444444&quot;,
                        &quot;15-19&quot;: &quot;#444444&quot;,
                        &quot;15-20&quot;: &quot;#444444&quot;,
                        &quot;15-21&quot;: &quot;#444444&quot;,
                        &quot;15-22&quot;: &quot;#444444&quot;,
                        &quot;15-23&quot;: &quot;#444444&quot;,
                        &quot;15-24&quot;: &quot;#444444&quot;,
                        &quot;15-25&quot;: &quot;#444444&quot;,
                        &quot;15-26&quot;: &quot;#444444&quot;,
                        &quot;15-27&quot;: &quot;#444444&quot;,
                        &quot;15-28&quot;: &quot;#444444&quot;,
                        &quot;16-2&quot;: &quot;#444444&quot;,
                        &quot;16-3&quot;: &quot;#444444&quot;,
                        &quot;16-4&quot;: &quot;#444444&quot;,
                        &quot;16-5&quot;: &quot;#444444&quot;,
                        &quot;16-6&quot;: &quot;#444444&quot;,
                        &quot;16-7&quot;: &quot;#444444&quot;,
                        &quot;16-8&quot;: &quot;#444444&quot;,
                        &quot;16-9&quot;: &quot;#444444&quot;,
                        &quot;16-10&quot;: &quot;#444444&quot;,
                        &quot;16-11&quot;: &quot;#444444&quot;,
                        &quot;16-12&quot;: &quot;#444444&quot;,
                        &quot;16-13&quot;: &quot;#444444&quot;,
                        &quot;16-14&quot;: &quot;#444444&quot;,
                        &quot;16-15&quot;: &quot;#444444&quot;,
                        &quot;16-16&quot;: &quot;#444444&quot;,
                        &quot;16-17&quot;: &quot;#444444&quot;,
                        &quot;16-18&quot;: &quot;#444444&quot;,
                        &quot;16-19&quot;: &quot;#444444&quot;,
                        &quot;16-20&quot;: &quot;#444444&quot;,
                        &quot;16-21&quot;: &quot;#444444&quot;,
                        &quot;16-22&quot;: &quot;#444444&quot;,
                        &quot;16-23&quot;: &quot;#444444&quot;,
                        &quot;16-24&quot;: &quot;#444444&quot;,
                        &quot;16-25&quot;: &quot;#444444&quot;,
                        &quot;16-26&quot;: &quot;#444444&quot;,
                        &quot;16-27&quot;: &quot;#444444&quot;,
                        &quot;16-28&quot;: &quot;#444444&quot;,
                        &quot;17-2&quot;: &quot;#444444&quot;,
                        &quot;17-3&quot;: &quot;#444444&quot;,
                        &quot;17-4&quot;: &quot;#444444&quot;,
                        &quot;17-5&quot;: &quot;#444444&quot;,
                        &quot;17-6&quot;: &quot;#444444&quot;,
                        &quot;17-7&quot;: &quot;#444444&quot;,
                        &quot;17-8&quot;: &quot;#444444&quot;,
                        &quot;17-9&quot;: &quot;#444444&quot;,
                        &quot;17-10&quot;: &quot;#444444&quot;,
                        &quot;17-11&quot;: &quot;#444444&quot;,
                        &quot;17-12&quot;: &quot;#444444&quot;,
                        &quot;17-13&quot;: &quot;#444444&quot;,
                        &quot;17-14&quot;: &quot;#444444&quot;,
                        &quot;17-15&quot;: &quot;#444444&quot;,
                        &quot;17-16&quot;: &quot;#444444&quot;,
                        &quot;17-17&quot;: &quot;#444444&quot;,
                        &quot;17-18&quot;: &quot;#444444&quot;,
                        &quot;17-19&quot;: &quot;#444444&quot;,
                        &quot;17-20&quot;: &quot;#444444&quot;,
                        &quot;17-21&quot;: &quot;#444444&quot;,
                        &quot;17-22&quot;: &quot;#444444&quot;,
                        &quot;17-23&quot;: &quot;#444444&quot;,
                        &quot;17-24&quot;: &quot;#444444&quot;,
                        &quot;17-25&quot;: &quot;#444444&quot;,
                        &quot;17-26&quot;: &quot;#444444&quot;,
                        &quot;17-27&quot;: &quot;#444444&quot;,
                        &quot;17-28&quot;: &quot;#444444&quot;,
                        &quot;18-2&quot;: &quot;#444444&quot;,
                        &quot;18-3&quot;: &quot;#444444&quot;,
                        &quot;18-4&quot;: &quot;#444444&quot;,
                        &quot;18-5&quot;: &quot;#444444&quot;,
                        &quot;18-6&quot;: &quot;#444444&quot;,
                        &quot;18-7&quot;: &quot;#444444&quot;,
                        &quot;18-8&quot;: &quot;#444444&quot;,
                        &quot;18-9&quot;: &quot;#444444&quot;,
                        &quot;18-10&quot;: &quot;#444444&quot;,
                        &quot;18-11&quot;: &quot;#444444&quot;,
                        &quot;18-12&quot;: &quot;#444444&quot;,
                        &quot;18-13&quot;: &quot;#444444&quot;,
                        &quot;18-14&quot;: &quot;#444444&quot;,
                        &quot;18-15&quot;: &quot;#444444&quot;,
                        &quot;18-16&quot;: &quot;#444444&quot;,
                        &quot;18-17&quot;: &quot;#444444&quot;,
                        &quot;18-18&quot;: &quot;#444444&quot;,
                        &quot;18-19&quot;: &quot;#444444&quot;,
                        &quot;18-20&quot;: &quot;#444444&quot;,
                        &quot;18-21&quot;: &quot;#444444&quot;,
                        &quot;18-22&quot;: &quot;#444444&quot;,
                        &quot;18-23&quot;: &quot;#444444&quot;,
                        &quot;18-24&quot;: &quot;#444444&quot;,
                        &quot;18-25&quot;: &quot;#444444&quot;,
                        &quot;18-26&quot;: &quot;#444444&quot;,
                        &quot;18-27&quot;: &quot;#444444&quot;,
                        &quot;18-28&quot;: &quot;#444444&quot;
                    },
                    &quot;wall_color&quot;: &quot;#444444&quot;,
                    &quot;wall_thickness&quot;: 25,
                    &quot;floor_texture_id&quot;: 7,
                    &quot;starting_point_row&quot;: 14,
                    &quot;starting_point_col&quot;: 20,
                    &quot;floor_accepted&quot;: true,
                    &quot;door_asset_id&quot;: 1,
                    &quot;door_position&quot;: {
                        &quot;row&quot;: 2,
                        &quot;col&quot;: 27
                    },
                    &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 2,
            &quot;user_id&quot;: 1,
            &quot;name&quot;: &quot;Nawiedzony Dw&oacute;r&quot;,
            &quot;description&quot;: &quot;Przemierz upiorny dw&oacute;r, gdzie każdy pok&oacute;j kryje mroczną tajemnicę czekającą na odkrycie.&quot;,
            &quot;thumbnail_url&quot;: &quot;/storage/escape-rooms/thumbnails/rl-app-3.png&quot;,
            &quot;soundtrack_url&quot;: &quot;/storage/escape-rooms/soundtracks/a7e4d623-fcef-4666-a4b9-f8925515e479.mp3&quot;,
            &quot;is_public&quot;: true,
            &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;admin&quot;,
                &quot;email&quot;: &quot;admin@riddlelab.world&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;last_login_at&quot;: &quot;2026-02-13 22:04:23&quot;,
                &quot;role&quot;: &quot;admin&quot;,
                &quot;avatar_url&quot;: null,
                &quot;player_configuration&quot;: &quot;{\&quot;avatar\&quot;:{\&quot;skin_color\&quot;:\&quot;#f5d0c5\&quot;,\&quot;hair_color\&quot;:\&quot;#2a1b0a\&quot;,\&quot;eye_color\&quot;:\&quot;#3d6e67\&quot;,\&quot;outfit_color\&quot;:\&quot;#4287f5\&quot;}}&quot;,
                &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;
            },
            &quot;rooms&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;escape_room_id&quot;: 2,
                    &quot;grid_data&quot;: {
                        &quot;2-2&quot;: &quot;1&quot;,
                        &quot;2-3&quot;: &quot;1&quot;,
                        &quot;2-4&quot;: &quot;1&quot;,
                        &quot;2-5&quot;: &quot;1&quot;,
                        &quot;2-6&quot;: &quot;1&quot;,
                        &quot;2-7&quot;: &quot;1&quot;,
                        &quot;2-8&quot;: &quot;1&quot;,
                        &quot;2-9&quot;: &quot;1&quot;,
                        &quot;2-10&quot;: &quot;1&quot;,
                        &quot;2-11&quot;: &quot;1&quot;,
                        &quot;2-12&quot;: &quot;1&quot;,
                        &quot;2-13&quot;: &quot;1&quot;,
                        &quot;2-14&quot;: &quot;1&quot;,
                        &quot;2-15&quot;: &quot;1&quot;,
                        &quot;2-16&quot;: &quot;1&quot;,
                        &quot;2-17&quot;: &quot;1&quot;,
                        &quot;2-18&quot;: &quot;1&quot;,
                        &quot;2-19&quot;: &quot;1&quot;,
                        &quot;2-20&quot;: &quot;1&quot;,
                        &quot;2-21&quot;: &quot;1&quot;,
                        &quot;2-22&quot;: &quot;1&quot;,
                        &quot;2-23&quot;: &quot;1&quot;,
                        &quot;2-24&quot;: &quot;1&quot;,
                        &quot;2-25&quot;: &quot;1&quot;,
                        &quot;2-26&quot;: &quot;1&quot;,
                        &quot;2-27&quot;: &quot;1&quot;,
                        &quot;2-28&quot;: &quot;1&quot;,
                        &quot;3-2&quot;: &quot;1&quot;,
                        &quot;3-3&quot;: &quot;1&quot;,
                        &quot;3-4&quot;: &quot;1&quot;,
                        &quot;3-5&quot;: &quot;1&quot;,
                        &quot;3-6&quot;: &quot;1&quot;,
                        &quot;3-7&quot;: &quot;1&quot;,
                        &quot;3-8&quot;: &quot;1&quot;,
                        &quot;3-9&quot;: &quot;1&quot;,
                        &quot;3-10&quot;: &quot;1&quot;,
                        &quot;3-11&quot;: &quot;1&quot;,
                        &quot;3-12&quot;: &quot;1&quot;,
                        &quot;3-13&quot;: &quot;1&quot;,
                        &quot;3-14&quot;: &quot;1&quot;,
                        &quot;3-15&quot;: &quot;1&quot;,
                        &quot;3-16&quot;: &quot;1&quot;,
                        &quot;3-17&quot;: &quot;1&quot;,
                        &quot;3-18&quot;: &quot;1&quot;,
                        &quot;3-19&quot;: &quot;1&quot;,
                        &quot;3-20&quot;: &quot;1&quot;,
                        &quot;3-21&quot;: &quot;1&quot;,
                        &quot;3-22&quot;: &quot;1&quot;,
                        &quot;3-23&quot;: &quot;1&quot;,
                        &quot;3-24&quot;: &quot;1&quot;,
                        &quot;3-25&quot;: &quot;1&quot;,
                        &quot;3-26&quot;: &quot;1&quot;,
                        &quot;3-27&quot;: &quot;1&quot;,
                        &quot;3-28&quot;: &quot;1&quot;,
                        &quot;4-2&quot;: &quot;1&quot;,
                        &quot;4-3&quot;: &quot;1&quot;,
                        &quot;4-4&quot;: &quot;1&quot;,
                        &quot;4-5&quot;: &quot;1&quot;,
                        &quot;4-6&quot;: &quot;1&quot;,
                        &quot;4-7&quot;: &quot;1&quot;,
                        &quot;4-8&quot;: &quot;1&quot;,
                        &quot;4-9&quot;: &quot;1&quot;,
                        &quot;4-10&quot;: &quot;1&quot;,
                        &quot;4-11&quot;: &quot;1&quot;,
                        &quot;4-12&quot;: &quot;1&quot;,
                        &quot;4-13&quot;: &quot;1&quot;,
                        &quot;4-14&quot;: &quot;1&quot;,
                        &quot;4-15&quot;: &quot;1&quot;,
                        &quot;4-16&quot;: &quot;1&quot;,
                        &quot;4-17&quot;: &quot;1&quot;,
                        &quot;4-18&quot;: &quot;1&quot;,
                        &quot;4-19&quot;: &quot;1&quot;,
                        &quot;4-20&quot;: &quot;1&quot;,
                        &quot;4-21&quot;: &quot;1&quot;,
                        &quot;4-22&quot;: &quot;1&quot;,
                        &quot;4-23&quot;: &quot;1&quot;,
                        &quot;4-24&quot;: &quot;1&quot;,
                        &quot;4-25&quot;: &quot;1&quot;,
                        &quot;4-26&quot;: &quot;1&quot;,
                        &quot;4-27&quot;: &quot;1&quot;,
                        &quot;4-28&quot;: &quot;1&quot;,
                        &quot;5-2&quot;: &quot;1&quot;,
                        &quot;5-3&quot;: &quot;1&quot;,
                        &quot;5-4&quot;: &quot;1&quot;,
                        &quot;5-5&quot;: &quot;1&quot;,
                        &quot;5-6&quot;: &quot;1&quot;,
                        &quot;5-7&quot;: &quot;1&quot;,
                        &quot;5-8&quot;: &quot;1&quot;,
                        &quot;5-9&quot;: &quot;1&quot;,
                        &quot;5-10&quot;: &quot;1&quot;,
                        &quot;5-11&quot;: &quot;1&quot;,
                        &quot;5-12&quot;: &quot;1&quot;,
                        &quot;5-13&quot;: &quot;1&quot;,
                        &quot;5-14&quot;: &quot;1&quot;,
                        &quot;5-15&quot;: &quot;1&quot;,
                        &quot;5-16&quot;: &quot;1&quot;,
                        &quot;5-17&quot;: &quot;1&quot;,
                        &quot;5-18&quot;: &quot;1&quot;,
                        &quot;5-19&quot;: &quot;1&quot;,
                        &quot;5-20&quot;: &quot;1&quot;,
                        &quot;5-21&quot;: &quot;1&quot;,
                        &quot;5-22&quot;: &quot;1&quot;,
                        &quot;5-23&quot;: &quot;1&quot;,
                        &quot;5-24&quot;: &quot;1&quot;,
                        &quot;5-25&quot;: &quot;1&quot;,
                        &quot;5-26&quot;: &quot;1&quot;,
                        &quot;5-27&quot;: &quot;1&quot;,
                        &quot;5-28&quot;: &quot;1&quot;,
                        &quot;6-2&quot;: &quot;1&quot;,
                        &quot;6-3&quot;: &quot;1&quot;,
                        &quot;6-4&quot;: &quot;1&quot;,
                        &quot;6-5&quot;: &quot;1&quot;,
                        &quot;6-6&quot;: &quot;1&quot;,
                        &quot;6-7&quot;: &quot;1&quot;,
                        &quot;6-8&quot;: &quot;1&quot;,
                        &quot;6-9&quot;: &quot;1&quot;,
                        &quot;6-10&quot;: &quot;1&quot;,
                        &quot;6-11&quot;: &quot;1&quot;,
                        &quot;6-12&quot;: &quot;1&quot;,
                        &quot;6-13&quot;: &quot;1&quot;,
                        &quot;6-14&quot;: &quot;1&quot;,
                        &quot;6-15&quot;: &quot;1&quot;,
                        &quot;6-16&quot;: &quot;1&quot;,
                        &quot;6-17&quot;: &quot;1&quot;,
                        &quot;6-18&quot;: &quot;1&quot;,
                        &quot;6-19&quot;: &quot;1&quot;,
                        &quot;6-20&quot;: &quot;1&quot;,
                        &quot;6-21&quot;: &quot;1&quot;,
                        &quot;6-22&quot;: &quot;1&quot;,
                        &quot;6-23&quot;: &quot;1&quot;,
                        &quot;6-24&quot;: &quot;1&quot;,
                        &quot;6-25&quot;: &quot;1&quot;,
                        &quot;6-26&quot;: &quot;1&quot;,
                        &quot;6-27&quot;: &quot;1&quot;,
                        &quot;6-28&quot;: &quot;1&quot;,
                        &quot;7-2&quot;: &quot;1&quot;,
                        &quot;7-3&quot;: &quot;1&quot;,
                        &quot;7-4&quot;: &quot;1&quot;,
                        &quot;7-5&quot;: &quot;1&quot;,
                        &quot;7-6&quot;: &quot;1&quot;,
                        &quot;7-7&quot;: &quot;1&quot;,
                        &quot;7-8&quot;: &quot;1&quot;,
                        &quot;7-9&quot;: &quot;1&quot;,
                        &quot;7-10&quot;: &quot;1&quot;,
                        &quot;7-11&quot;: &quot;1&quot;,
                        &quot;7-12&quot;: &quot;1&quot;,
                        &quot;7-13&quot;: &quot;1&quot;,
                        &quot;7-14&quot;: &quot;1&quot;,
                        &quot;7-15&quot;: &quot;1&quot;,
                        &quot;7-16&quot;: &quot;1&quot;,
                        &quot;7-17&quot;: &quot;1&quot;,
                        &quot;7-18&quot;: &quot;1&quot;,
                        &quot;7-19&quot;: &quot;1&quot;,
                        &quot;7-20&quot;: &quot;1&quot;,
                        &quot;7-21&quot;: &quot;1&quot;,
                        &quot;7-22&quot;: &quot;1&quot;,
                        &quot;7-23&quot;: &quot;1&quot;,
                        &quot;7-24&quot;: &quot;1&quot;,
                        &quot;7-25&quot;: &quot;1&quot;,
                        &quot;7-26&quot;: &quot;1&quot;,
                        &quot;7-27&quot;: &quot;1&quot;,
                        &quot;7-28&quot;: &quot;1&quot;,
                        &quot;8-2&quot;: &quot;1&quot;,
                        &quot;8-3&quot;: &quot;1&quot;,
                        &quot;8-4&quot;: &quot;1&quot;,
                        &quot;8-5&quot;: &quot;1&quot;,
                        &quot;8-6&quot;: &quot;1&quot;,
                        &quot;8-7&quot;: &quot;1&quot;,
                        &quot;8-8&quot;: &quot;1&quot;,
                        &quot;8-9&quot;: &quot;1&quot;,
                        &quot;8-10&quot;: &quot;1&quot;,
                        &quot;8-11&quot;: &quot;1&quot;,
                        &quot;8-12&quot;: &quot;1&quot;,
                        &quot;8-13&quot;: &quot;1&quot;,
                        &quot;8-14&quot;: &quot;1&quot;,
                        &quot;8-15&quot;: &quot;1&quot;,
                        &quot;8-16&quot;: &quot;1&quot;,
                        &quot;8-17&quot;: &quot;1&quot;,
                        &quot;8-18&quot;: &quot;1&quot;,
                        &quot;8-19&quot;: &quot;1&quot;,
                        &quot;8-20&quot;: &quot;1&quot;,
                        &quot;8-21&quot;: &quot;1&quot;,
                        &quot;8-22&quot;: &quot;1&quot;,
                        &quot;8-23&quot;: &quot;1&quot;,
                        &quot;8-24&quot;: &quot;1&quot;,
                        &quot;8-25&quot;: &quot;1&quot;,
                        &quot;8-26&quot;: &quot;1&quot;,
                        &quot;8-27&quot;: &quot;1&quot;,
                        &quot;8-28&quot;: &quot;1&quot;,
                        &quot;9-2&quot;: &quot;1&quot;,
                        &quot;9-3&quot;: &quot;1&quot;,
                        &quot;9-4&quot;: &quot;1&quot;,
                        &quot;9-5&quot;: &quot;1&quot;,
                        &quot;9-6&quot;: &quot;1&quot;,
                        &quot;9-7&quot;: &quot;1&quot;,
                        &quot;9-8&quot;: &quot;1&quot;,
                        &quot;9-9&quot;: &quot;1&quot;,
                        &quot;9-10&quot;: &quot;1&quot;,
                        &quot;9-11&quot;: &quot;1&quot;,
                        &quot;9-12&quot;: &quot;1&quot;,
                        &quot;9-13&quot;: &quot;1&quot;,
                        &quot;9-14&quot;: &quot;1&quot;,
                        &quot;9-15&quot;: &quot;1&quot;,
                        &quot;9-16&quot;: &quot;1&quot;,
                        &quot;9-17&quot;: &quot;1&quot;,
                        &quot;9-18&quot;: &quot;1&quot;,
                        &quot;9-19&quot;: &quot;1&quot;,
                        &quot;9-20&quot;: &quot;1&quot;,
                        &quot;9-21&quot;: &quot;1&quot;,
                        &quot;9-22&quot;: &quot;1&quot;,
                        &quot;9-23&quot;: &quot;1&quot;,
                        &quot;9-24&quot;: &quot;1&quot;,
                        &quot;9-25&quot;: &quot;1&quot;,
                        &quot;9-26&quot;: &quot;1&quot;,
                        &quot;9-27&quot;: &quot;1&quot;,
                        &quot;9-28&quot;: &quot;1&quot;,
                        &quot;10-2&quot;: &quot;1&quot;,
                        &quot;10-3&quot;: &quot;1&quot;,
                        &quot;10-4&quot;: &quot;1&quot;,
                        &quot;10-5&quot;: &quot;1&quot;,
                        &quot;10-6&quot;: &quot;1&quot;,
                        &quot;10-7&quot;: &quot;1&quot;,
                        &quot;10-8&quot;: &quot;1&quot;,
                        &quot;10-9&quot;: &quot;1&quot;,
                        &quot;10-10&quot;: &quot;1&quot;,
                        &quot;10-11&quot;: &quot;1&quot;,
                        &quot;10-12&quot;: &quot;1&quot;,
                        &quot;10-13&quot;: &quot;1&quot;,
                        &quot;10-14&quot;: &quot;1&quot;,
                        &quot;10-15&quot;: &quot;1&quot;,
                        &quot;10-16&quot;: &quot;1&quot;,
                        &quot;10-17&quot;: &quot;1&quot;,
                        &quot;10-18&quot;: &quot;1&quot;,
                        &quot;10-19&quot;: &quot;1&quot;,
                        &quot;10-20&quot;: &quot;1&quot;,
                        &quot;10-21&quot;: &quot;1&quot;,
                        &quot;10-22&quot;: &quot;1&quot;,
                        &quot;10-23&quot;: &quot;1&quot;,
                        &quot;10-24&quot;: &quot;1&quot;,
                        &quot;10-25&quot;: &quot;1&quot;,
                        &quot;10-26&quot;: &quot;1&quot;,
                        &quot;10-27&quot;: &quot;1&quot;,
                        &quot;10-28&quot;: &quot;1&quot;,
                        &quot;11-2&quot;: &quot;1&quot;,
                        &quot;11-3&quot;: &quot;1&quot;,
                        &quot;11-4&quot;: &quot;1&quot;,
                        &quot;11-5&quot;: &quot;1&quot;,
                        &quot;11-6&quot;: &quot;1&quot;,
                        &quot;11-7&quot;: &quot;1&quot;,
                        &quot;11-8&quot;: &quot;1&quot;,
                        &quot;11-9&quot;: &quot;1&quot;,
                        &quot;11-10&quot;: &quot;1&quot;,
                        &quot;11-11&quot;: &quot;1&quot;,
                        &quot;11-12&quot;: &quot;1&quot;,
                        &quot;11-13&quot;: &quot;1&quot;,
                        &quot;11-14&quot;: &quot;1&quot;,
                        &quot;11-15&quot;: &quot;1&quot;,
                        &quot;11-16&quot;: &quot;1&quot;,
                        &quot;11-17&quot;: &quot;1&quot;,
                        &quot;11-18&quot;: &quot;1&quot;,
                        &quot;11-19&quot;: &quot;1&quot;,
                        &quot;11-20&quot;: &quot;1&quot;,
                        &quot;11-21&quot;: &quot;1&quot;,
                        &quot;11-22&quot;: &quot;1&quot;,
                        &quot;11-23&quot;: &quot;1&quot;,
                        &quot;11-24&quot;: &quot;1&quot;,
                        &quot;11-25&quot;: &quot;1&quot;,
                        &quot;11-26&quot;: &quot;1&quot;,
                        &quot;11-27&quot;: &quot;1&quot;,
                        &quot;11-28&quot;: &quot;1&quot;,
                        &quot;12-2&quot;: &quot;1&quot;,
                        &quot;12-3&quot;: &quot;1&quot;,
                        &quot;12-4&quot;: &quot;1&quot;,
                        &quot;12-5&quot;: &quot;1&quot;,
                        &quot;12-6&quot;: &quot;1&quot;,
                        &quot;12-7&quot;: &quot;1&quot;,
                        &quot;12-8&quot;: &quot;1&quot;,
                        &quot;12-9&quot;: &quot;1&quot;,
                        &quot;12-10&quot;: &quot;1&quot;,
                        &quot;12-11&quot;: &quot;1&quot;,
                        &quot;12-12&quot;: &quot;1&quot;,
                        &quot;12-13&quot;: &quot;1&quot;,
                        &quot;12-14&quot;: &quot;1&quot;,
                        &quot;12-15&quot;: &quot;1&quot;,
                        &quot;12-16&quot;: &quot;1&quot;,
                        &quot;12-17&quot;: &quot;1&quot;,
                        &quot;12-18&quot;: &quot;1&quot;,
                        &quot;12-19&quot;: &quot;1&quot;,
                        &quot;12-20&quot;: &quot;1&quot;,
                        &quot;12-21&quot;: &quot;1&quot;,
                        &quot;12-22&quot;: &quot;1&quot;,
                        &quot;12-23&quot;: &quot;1&quot;,
                        &quot;12-24&quot;: &quot;1&quot;,
                        &quot;12-25&quot;: &quot;1&quot;,
                        &quot;12-26&quot;: &quot;1&quot;,
                        &quot;12-27&quot;: &quot;1&quot;,
                        &quot;12-28&quot;: &quot;1&quot;,
                        &quot;13-2&quot;: &quot;1&quot;,
                        &quot;13-3&quot;: &quot;1&quot;,
                        &quot;13-4&quot;: &quot;1&quot;,
                        &quot;13-5&quot;: &quot;1&quot;,
                        &quot;13-6&quot;: &quot;1&quot;,
                        &quot;13-7&quot;: &quot;1&quot;,
                        &quot;13-8&quot;: &quot;1&quot;,
                        &quot;13-9&quot;: &quot;1&quot;,
                        &quot;13-10&quot;: &quot;1&quot;,
                        &quot;13-11&quot;: &quot;1&quot;,
                        &quot;13-12&quot;: &quot;1&quot;,
                        &quot;13-13&quot;: &quot;1&quot;,
                        &quot;13-14&quot;: &quot;1&quot;,
                        &quot;13-15&quot;: &quot;1&quot;,
                        &quot;13-16&quot;: &quot;1&quot;,
                        &quot;13-17&quot;: &quot;1&quot;,
                        &quot;13-18&quot;: &quot;1&quot;,
                        &quot;13-19&quot;: &quot;1&quot;,
                        &quot;13-20&quot;: &quot;1&quot;,
                        &quot;13-21&quot;: &quot;1&quot;,
                        &quot;13-22&quot;: &quot;1&quot;,
                        &quot;13-23&quot;: &quot;1&quot;,
                        &quot;13-24&quot;: &quot;1&quot;,
                        &quot;13-25&quot;: &quot;1&quot;,
                        &quot;13-26&quot;: &quot;1&quot;,
                        &quot;13-27&quot;: &quot;1&quot;,
                        &quot;13-28&quot;: &quot;1&quot;,
                        &quot;14-2&quot;: &quot;1&quot;,
                        &quot;14-3&quot;: &quot;1&quot;,
                        &quot;14-4&quot;: &quot;1&quot;,
                        &quot;14-5&quot;: &quot;1&quot;,
                        &quot;14-6&quot;: &quot;1&quot;,
                        &quot;14-7&quot;: &quot;1&quot;,
                        &quot;14-8&quot;: &quot;1&quot;,
                        &quot;14-9&quot;: &quot;1&quot;,
                        &quot;14-10&quot;: &quot;1&quot;,
                        &quot;14-11&quot;: &quot;1&quot;,
                        &quot;14-12&quot;: &quot;1&quot;,
                        &quot;14-13&quot;: &quot;1&quot;,
                        &quot;14-14&quot;: &quot;1&quot;,
                        &quot;14-15&quot;: &quot;1&quot;,
                        &quot;14-16&quot;: &quot;1&quot;,
                        &quot;14-17&quot;: &quot;1&quot;,
                        &quot;14-18&quot;: &quot;1&quot;,
                        &quot;14-19&quot;: &quot;1&quot;,
                        &quot;14-20&quot;: &quot;1&quot;,
                        &quot;14-21&quot;: &quot;1&quot;,
                        &quot;14-22&quot;: &quot;1&quot;,
                        &quot;14-23&quot;: &quot;1&quot;,
                        &quot;14-24&quot;: &quot;1&quot;,
                        &quot;14-25&quot;: &quot;1&quot;,
                        &quot;14-26&quot;: &quot;1&quot;,
                        &quot;14-27&quot;: &quot;1&quot;,
                        &quot;14-28&quot;: &quot;1&quot;,
                        &quot;15-2&quot;: &quot;1&quot;,
                        &quot;15-3&quot;: &quot;1&quot;,
                        &quot;15-4&quot;: &quot;1&quot;,
                        &quot;15-5&quot;: &quot;1&quot;,
                        &quot;15-6&quot;: &quot;1&quot;,
                        &quot;15-7&quot;: &quot;1&quot;,
                        &quot;15-8&quot;: &quot;1&quot;,
                        &quot;15-9&quot;: &quot;1&quot;,
                        &quot;15-10&quot;: &quot;1&quot;,
                        &quot;15-11&quot;: &quot;1&quot;,
                        &quot;15-12&quot;: &quot;1&quot;,
                        &quot;15-13&quot;: &quot;1&quot;,
                        &quot;15-14&quot;: &quot;1&quot;,
                        &quot;15-15&quot;: &quot;1&quot;,
                        &quot;15-16&quot;: &quot;1&quot;,
                        &quot;15-17&quot;: &quot;1&quot;,
                        &quot;15-18&quot;: &quot;1&quot;,
                        &quot;15-19&quot;: &quot;1&quot;,
                        &quot;15-20&quot;: &quot;1&quot;,
                        &quot;15-21&quot;: &quot;1&quot;,
                        &quot;15-22&quot;: &quot;1&quot;,
                        &quot;15-23&quot;: &quot;1&quot;,
                        &quot;15-24&quot;: &quot;1&quot;,
                        &quot;15-25&quot;: &quot;1&quot;,
                        &quot;15-26&quot;: &quot;1&quot;,
                        &quot;15-27&quot;: &quot;1&quot;,
                        &quot;15-28&quot;: &quot;1&quot;,
                        &quot;16-2&quot;: &quot;1&quot;,
                        &quot;16-3&quot;: &quot;1&quot;,
                        &quot;16-4&quot;: &quot;1&quot;,
                        &quot;16-5&quot;: &quot;1&quot;,
                        &quot;16-6&quot;: &quot;1&quot;,
                        &quot;16-7&quot;: &quot;1&quot;,
                        &quot;16-8&quot;: &quot;1&quot;,
                        &quot;16-9&quot;: &quot;1&quot;,
                        &quot;16-10&quot;: &quot;1&quot;,
                        &quot;16-11&quot;: &quot;1&quot;,
                        &quot;16-12&quot;: &quot;1&quot;,
                        &quot;16-13&quot;: &quot;1&quot;,
                        &quot;16-14&quot;: &quot;1&quot;,
                        &quot;16-15&quot;: &quot;1&quot;,
                        &quot;16-16&quot;: &quot;1&quot;,
                        &quot;16-17&quot;: &quot;1&quot;,
                        &quot;16-18&quot;: &quot;1&quot;,
                        &quot;16-19&quot;: &quot;1&quot;,
                        &quot;16-20&quot;: &quot;1&quot;,
                        &quot;16-21&quot;: &quot;1&quot;,
                        &quot;16-22&quot;: &quot;1&quot;,
                        &quot;16-23&quot;: &quot;1&quot;,
                        &quot;16-24&quot;: &quot;1&quot;,
                        &quot;16-25&quot;: &quot;1&quot;,
                        &quot;16-26&quot;: &quot;1&quot;,
                        &quot;16-27&quot;: &quot;1&quot;,
                        &quot;16-28&quot;: &quot;1&quot;,
                        &quot;17-2&quot;: &quot;1&quot;,
                        &quot;17-3&quot;: &quot;1&quot;,
                        &quot;17-4&quot;: &quot;1&quot;,
                        &quot;17-5&quot;: &quot;1&quot;,
                        &quot;17-6&quot;: &quot;1&quot;,
                        &quot;17-7&quot;: &quot;1&quot;,
                        &quot;17-8&quot;: &quot;1&quot;,
                        &quot;17-9&quot;: &quot;1&quot;,
                        &quot;17-10&quot;: &quot;1&quot;,
                        &quot;17-11&quot;: &quot;1&quot;,
                        &quot;17-12&quot;: &quot;1&quot;,
                        &quot;17-13&quot;: &quot;1&quot;,
                        &quot;17-14&quot;: &quot;1&quot;,
                        &quot;17-15&quot;: &quot;1&quot;,
                        &quot;17-16&quot;: &quot;1&quot;,
                        &quot;17-17&quot;: &quot;1&quot;,
                        &quot;17-18&quot;: &quot;1&quot;,
                        &quot;17-19&quot;: &quot;1&quot;,
                        &quot;17-20&quot;: &quot;1&quot;,
                        &quot;17-21&quot;: &quot;1&quot;,
                        &quot;17-22&quot;: &quot;1&quot;,
                        &quot;17-23&quot;: &quot;1&quot;,
                        &quot;17-24&quot;: &quot;1&quot;,
                        &quot;17-25&quot;: &quot;1&quot;,
                        &quot;17-26&quot;: &quot;1&quot;,
                        &quot;17-27&quot;: &quot;1&quot;,
                        &quot;17-28&quot;: &quot;1&quot;,
                        &quot;18-2&quot;: &quot;1&quot;,
                        &quot;18-3&quot;: &quot;1&quot;,
                        &quot;18-4&quot;: &quot;1&quot;,
                        &quot;18-5&quot;: &quot;1&quot;,
                        &quot;18-6&quot;: &quot;1&quot;,
                        &quot;18-7&quot;: &quot;1&quot;,
                        &quot;18-8&quot;: &quot;1&quot;,
                        &quot;18-9&quot;: &quot;1&quot;,
                        &quot;18-10&quot;: &quot;1&quot;,
                        &quot;18-11&quot;: &quot;1&quot;,
                        &quot;18-12&quot;: &quot;1&quot;,
                        &quot;18-13&quot;: &quot;1&quot;,
                        &quot;18-14&quot;: &quot;1&quot;,
                        &quot;18-15&quot;: &quot;1&quot;,
                        &quot;18-16&quot;: &quot;1&quot;,
                        &quot;18-17&quot;: &quot;1&quot;,
                        &quot;18-18&quot;: &quot;1&quot;,
                        &quot;18-19&quot;: &quot;1&quot;,
                        &quot;18-20&quot;: &quot;1&quot;,
                        &quot;18-21&quot;: &quot;1&quot;,
                        &quot;18-22&quot;: &quot;1&quot;,
                        &quot;18-23&quot;: &quot;1&quot;,
                        &quot;18-24&quot;: &quot;1&quot;,
                        &quot;18-25&quot;: &quot;1&quot;,
                        &quot;18-26&quot;: &quot;1&quot;,
                        &quot;18-27&quot;: &quot;1&quot;,
                        &quot;18-28&quot;: &quot;1&quot;
                    },
                    &quot;walls_data&quot;: {
                        &quot;wallColor&quot;: &quot;#654321&quot;,
                        &quot;2-2&quot;: &quot;#654321&quot;,
                        &quot;2-3&quot;: &quot;#654321&quot;,
                        &quot;2-4&quot;: &quot;#654321&quot;,
                        &quot;2-5&quot;: &quot;#654321&quot;,
                        &quot;2-6&quot;: &quot;#654321&quot;,
                        &quot;2-7&quot;: &quot;#654321&quot;,
                        &quot;2-8&quot;: &quot;#654321&quot;,
                        &quot;2-9&quot;: &quot;#654321&quot;,
                        &quot;2-10&quot;: &quot;#654321&quot;,
                        &quot;2-11&quot;: &quot;#654321&quot;,
                        &quot;2-12&quot;: &quot;#654321&quot;,
                        &quot;2-13&quot;: &quot;#654321&quot;,
                        &quot;2-14&quot;: &quot;#654321&quot;,
                        &quot;2-15&quot;: &quot;#654321&quot;,
                        &quot;2-16&quot;: &quot;#654321&quot;,
                        &quot;2-17&quot;: &quot;#654321&quot;,
                        &quot;2-18&quot;: &quot;#654321&quot;,
                        &quot;2-19&quot;: &quot;#654321&quot;,
                        &quot;2-20&quot;: &quot;#654321&quot;,
                        &quot;2-21&quot;: &quot;#654321&quot;,
                        &quot;2-22&quot;: &quot;#654321&quot;,
                        &quot;2-23&quot;: &quot;#654321&quot;,
                        &quot;2-24&quot;: &quot;#654321&quot;,
                        &quot;2-25&quot;: &quot;#654321&quot;,
                        &quot;2-26&quot;: &quot;#654321&quot;,
                        &quot;2-27&quot;: &quot;#654321&quot;,
                        &quot;2-28&quot;: &quot;#654321&quot;,
                        &quot;3-2&quot;: &quot;#654321&quot;,
                        &quot;3-3&quot;: &quot;#654321&quot;,
                        &quot;3-4&quot;: &quot;#654321&quot;,
                        &quot;3-5&quot;: &quot;#654321&quot;,
                        &quot;3-6&quot;: &quot;#654321&quot;,
                        &quot;3-7&quot;: &quot;#654321&quot;,
                        &quot;3-8&quot;: &quot;#654321&quot;,
                        &quot;3-9&quot;: &quot;#654321&quot;,
                        &quot;3-10&quot;: &quot;#654321&quot;,
                        &quot;3-11&quot;: &quot;#654321&quot;,
                        &quot;3-12&quot;: &quot;#654321&quot;,
                        &quot;3-13&quot;: &quot;#654321&quot;,
                        &quot;3-14&quot;: &quot;#654321&quot;,
                        &quot;3-15&quot;: &quot;#654321&quot;,
                        &quot;3-16&quot;: &quot;#654321&quot;,
                        &quot;3-17&quot;: &quot;#654321&quot;,
                        &quot;3-18&quot;: &quot;#654321&quot;,
                        &quot;3-19&quot;: &quot;#654321&quot;,
                        &quot;3-20&quot;: &quot;#654321&quot;,
                        &quot;3-21&quot;: &quot;#654321&quot;,
                        &quot;3-22&quot;: &quot;#654321&quot;,
                        &quot;3-23&quot;: &quot;#654321&quot;,
                        &quot;3-24&quot;: &quot;#654321&quot;,
                        &quot;3-25&quot;: &quot;#654321&quot;,
                        &quot;3-26&quot;: &quot;#654321&quot;,
                        &quot;3-27&quot;: &quot;#654321&quot;,
                        &quot;3-28&quot;: &quot;#654321&quot;,
                        &quot;4-2&quot;: &quot;#654321&quot;,
                        &quot;4-3&quot;: &quot;#654321&quot;,
                        &quot;4-4&quot;: &quot;#654321&quot;,
                        &quot;4-5&quot;: &quot;#654321&quot;,
                        &quot;4-6&quot;: &quot;#654321&quot;,
                        &quot;4-7&quot;: &quot;#654321&quot;,
                        &quot;4-8&quot;: &quot;#654321&quot;,
                        &quot;4-9&quot;: &quot;#654321&quot;,
                        &quot;4-10&quot;: &quot;#654321&quot;,
                        &quot;4-11&quot;: &quot;#654321&quot;,
                        &quot;4-12&quot;: &quot;#654321&quot;,
                        &quot;4-13&quot;: &quot;#654321&quot;,
                        &quot;4-14&quot;: &quot;#654321&quot;,
                        &quot;4-15&quot;: &quot;#654321&quot;,
                        &quot;4-16&quot;: &quot;#654321&quot;,
                        &quot;4-17&quot;: &quot;#654321&quot;,
                        &quot;4-18&quot;: &quot;#654321&quot;,
                        &quot;4-19&quot;: &quot;#654321&quot;,
                        &quot;4-20&quot;: &quot;#654321&quot;,
                        &quot;4-21&quot;: &quot;#654321&quot;,
                        &quot;4-22&quot;: &quot;#654321&quot;,
                        &quot;4-23&quot;: &quot;#654321&quot;,
                        &quot;4-24&quot;: &quot;#654321&quot;,
                        &quot;4-25&quot;: &quot;#654321&quot;,
                        &quot;4-26&quot;: &quot;#654321&quot;,
                        &quot;4-27&quot;: &quot;#654321&quot;,
                        &quot;4-28&quot;: &quot;#654321&quot;,
                        &quot;5-2&quot;: &quot;#654321&quot;,
                        &quot;5-3&quot;: &quot;#654321&quot;,
                        &quot;5-4&quot;: &quot;#654321&quot;,
                        &quot;5-5&quot;: &quot;#654321&quot;,
                        &quot;5-6&quot;: &quot;#654321&quot;,
                        &quot;5-7&quot;: &quot;#654321&quot;,
                        &quot;5-8&quot;: &quot;#654321&quot;,
                        &quot;5-9&quot;: &quot;#654321&quot;,
                        &quot;5-10&quot;: &quot;#654321&quot;,
                        &quot;5-11&quot;: &quot;#654321&quot;,
                        &quot;5-12&quot;: &quot;#654321&quot;,
                        &quot;5-13&quot;: &quot;#654321&quot;,
                        &quot;5-14&quot;: &quot;#654321&quot;,
                        &quot;5-15&quot;: &quot;#654321&quot;,
                        &quot;5-16&quot;: &quot;#654321&quot;,
                        &quot;5-17&quot;: &quot;#654321&quot;,
                        &quot;5-18&quot;: &quot;#654321&quot;,
                        &quot;5-19&quot;: &quot;#654321&quot;,
                        &quot;5-20&quot;: &quot;#654321&quot;,
                        &quot;5-21&quot;: &quot;#654321&quot;,
                        &quot;5-22&quot;: &quot;#654321&quot;,
                        &quot;5-23&quot;: &quot;#654321&quot;,
                        &quot;5-24&quot;: &quot;#654321&quot;,
                        &quot;5-25&quot;: &quot;#654321&quot;,
                        &quot;5-26&quot;: &quot;#654321&quot;,
                        &quot;5-27&quot;: &quot;#654321&quot;,
                        &quot;5-28&quot;: &quot;#654321&quot;,
                        &quot;6-2&quot;: &quot;#654321&quot;,
                        &quot;6-3&quot;: &quot;#654321&quot;,
                        &quot;6-4&quot;: &quot;#654321&quot;,
                        &quot;6-5&quot;: &quot;#654321&quot;,
                        &quot;6-6&quot;: &quot;#654321&quot;,
                        &quot;6-7&quot;: &quot;#654321&quot;,
                        &quot;6-8&quot;: &quot;#654321&quot;,
                        &quot;6-9&quot;: &quot;#654321&quot;,
                        &quot;6-10&quot;: &quot;#654321&quot;,
                        &quot;6-11&quot;: &quot;#654321&quot;,
                        &quot;6-12&quot;: &quot;#654321&quot;,
                        &quot;6-13&quot;: &quot;#654321&quot;,
                        &quot;6-14&quot;: &quot;#654321&quot;,
                        &quot;6-15&quot;: &quot;#654321&quot;,
                        &quot;6-16&quot;: &quot;#654321&quot;,
                        &quot;6-17&quot;: &quot;#654321&quot;,
                        &quot;6-18&quot;: &quot;#654321&quot;,
                        &quot;6-19&quot;: &quot;#654321&quot;,
                        &quot;6-20&quot;: &quot;#654321&quot;,
                        &quot;6-21&quot;: &quot;#654321&quot;,
                        &quot;6-22&quot;: &quot;#654321&quot;,
                        &quot;6-23&quot;: &quot;#654321&quot;,
                        &quot;6-24&quot;: &quot;#654321&quot;,
                        &quot;6-25&quot;: &quot;#654321&quot;,
                        &quot;6-26&quot;: &quot;#654321&quot;,
                        &quot;6-27&quot;: &quot;#654321&quot;,
                        &quot;6-28&quot;: &quot;#654321&quot;,
                        &quot;7-2&quot;: &quot;#654321&quot;,
                        &quot;7-3&quot;: &quot;#654321&quot;,
                        &quot;7-4&quot;: &quot;#654321&quot;,
                        &quot;7-5&quot;: &quot;#654321&quot;,
                        &quot;7-6&quot;: &quot;#654321&quot;,
                        &quot;7-7&quot;: &quot;#654321&quot;,
                        &quot;7-8&quot;: &quot;#654321&quot;,
                        &quot;7-9&quot;: &quot;#654321&quot;,
                        &quot;7-10&quot;: &quot;#654321&quot;,
                        &quot;7-11&quot;: &quot;#654321&quot;,
                        &quot;7-12&quot;: &quot;#654321&quot;,
                        &quot;7-13&quot;: &quot;#654321&quot;,
                        &quot;7-14&quot;: &quot;#654321&quot;,
                        &quot;7-15&quot;: &quot;#654321&quot;,
                        &quot;7-16&quot;: &quot;#654321&quot;,
                        &quot;7-17&quot;: &quot;#654321&quot;,
                        &quot;7-18&quot;: &quot;#654321&quot;,
                        &quot;7-19&quot;: &quot;#654321&quot;,
                        &quot;7-20&quot;: &quot;#654321&quot;,
                        &quot;7-21&quot;: &quot;#654321&quot;,
                        &quot;7-22&quot;: &quot;#654321&quot;,
                        &quot;7-23&quot;: &quot;#654321&quot;,
                        &quot;7-24&quot;: &quot;#654321&quot;,
                        &quot;7-25&quot;: &quot;#654321&quot;,
                        &quot;7-26&quot;: &quot;#654321&quot;,
                        &quot;7-27&quot;: &quot;#654321&quot;,
                        &quot;7-28&quot;: &quot;#654321&quot;,
                        &quot;8-2&quot;: &quot;#654321&quot;,
                        &quot;8-3&quot;: &quot;#654321&quot;,
                        &quot;8-4&quot;: &quot;#654321&quot;,
                        &quot;8-5&quot;: &quot;#654321&quot;,
                        &quot;8-6&quot;: &quot;#654321&quot;,
                        &quot;8-7&quot;: &quot;#654321&quot;,
                        &quot;8-8&quot;: &quot;#654321&quot;,
                        &quot;8-9&quot;: &quot;#654321&quot;,
                        &quot;8-10&quot;: &quot;#654321&quot;,
                        &quot;8-11&quot;: &quot;#654321&quot;,
                        &quot;8-12&quot;: &quot;#654321&quot;,
                        &quot;8-13&quot;: &quot;#654321&quot;,
                        &quot;8-14&quot;: &quot;#654321&quot;,
                        &quot;8-15&quot;: &quot;#654321&quot;,
                        &quot;8-16&quot;: &quot;#654321&quot;,
                        &quot;8-17&quot;: &quot;#654321&quot;,
                        &quot;8-18&quot;: &quot;#654321&quot;,
                        &quot;8-19&quot;: &quot;#654321&quot;,
                        &quot;8-20&quot;: &quot;#654321&quot;,
                        &quot;8-21&quot;: &quot;#654321&quot;,
                        &quot;8-22&quot;: &quot;#654321&quot;,
                        &quot;8-23&quot;: &quot;#654321&quot;,
                        &quot;8-24&quot;: &quot;#654321&quot;,
                        &quot;8-25&quot;: &quot;#654321&quot;,
                        &quot;8-26&quot;: &quot;#654321&quot;,
                        &quot;8-27&quot;: &quot;#654321&quot;,
                        &quot;8-28&quot;: &quot;#654321&quot;,
                        &quot;9-2&quot;: &quot;#654321&quot;,
                        &quot;9-3&quot;: &quot;#654321&quot;,
                        &quot;9-4&quot;: &quot;#654321&quot;,
                        &quot;9-5&quot;: &quot;#654321&quot;,
                        &quot;9-6&quot;: &quot;#654321&quot;,
                        &quot;9-7&quot;: &quot;#654321&quot;,
                        &quot;9-8&quot;: &quot;#654321&quot;,
                        &quot;9-9&quot;: &quot;#654321&quot;,
                        &quot;9-10&quot;: &quot;#654321&quot;,
                        &quot;9-11&quot;: &quot;#654321&quot;,
                        &quot;9-12&quot;: &quot;#654321&quot;,
                        &quot;9-13&quot;: &quot;#654321&quot;,
                        &quot;9-14&quot;: &quot;#654321&quot;,
                        &quot;9-15&quot;: &quot;#654321&quot;,
                        &quot;9-16&quot;: &quot;#654321&quot;,
                        &quot;9-17&quot;: &quot;#654321&quot;,
                        &quot;9-18&quot;: &quot;#654321&quot;,
                        &quot;9-19&quot;: &quot;#654321&quot;,
                        &quot;9-20&quot;: &quot;#654321&quot;,
                        &quot;9-21&quot;: &quot;#654321&quot;,
                        &quot;9-22&quot;: &quot;#654321&quot;,
                        &quot;9-23&quot;: &quot;#654321&quot;,
                        &quot;9-24&quot;: &quot;#654321&quot;,
                        &quot;9-25&quot;: &quot;#654321&quot;,
                        &quot;9-26&quot;: &quot;#654321&quot;,
                        &quot;9-27&quot;: &quot;#654321&quot;,
                        &quot;9-28&quot;: &quot;#654321&quot;,
                        &quot;10-2&quot;: &quot;#654321&quot;,
                        &quot;10-3&quot;: &quot;#654321&quot;,
                        &quot;10-4&quot;: &quot;#654321&quot;,
                        &quot;10-5&quot;: &quot;#654321&quot;,
                        &quot;10-6&quot;: &quot;#654321&quot;,
                        &quot;10-7&quot;: &quot;#654321&quot;,
                        &quot;10-8&quot;: &quot;#654321&quot;,
                        &quot;10-9&quot;: &quot;#654321&quot;,
                        &quot;10-10&quot;: &quot;#654321&quot;,
                        &quot;10-11&quot;: &quot;#654321&quot;,
                        &quot;10-12&quot;: &quot;#654321&quot;,
                        &quot;10-13&quot;: &quot;#654321&quot;,
                        &quot;10-14&quot;: &quot;#654321&quot;,
                        &quot;10-15&quot;: &quot;#654321&quot;,
                        &quot;10-16&quot;: &quot;#654321&quot;,
                        &quot;10-17&quot;: &quot;#654321&quot;,
                        &quot;10-18&quot;: &quot;#654321&quot;,
                        &quot;10-19&quot;: &quot;#654321&quot;,
                        &quot;10-20&quot;: &quot;#654321&quot;,
                        &quot;10-21&quot;: &quot;#654321&quot;,
                        &quot;10-22&quot;: &quot;#654321&quot;,
                        &quot;10-23&quot;: &quot;#654321&quot;,
                        &quot;10-24&quot;: &quot;#654321&quot;,
                        &quot;10-25&quot;: &quot;#654321&quot;,
                        &quot;10-26&quot;: &quot;#654321&quot;,
                        &quot;10-27&quot;: &quot;#654321&quot;,
                        &quot;10-28&quot;: &quot;#654321&quot;,
                        &quot;11-2&quot;: &quot;#654321&quot;,
                        &quot;11-3&quot;: &quot;#654321&quot;,
                        &quot;11-4&quot;: &quot;#654321&quot;,
                        &quot;11-5&quot;: &quot;#654321&quot;,
                        &quot;11-6&quot;: &quot;#654321&quot;,
                        &quot;11-7&quot;: &quot;#654321&quot;,
                        &quot;11-8&quot;: &quot;#654321&quot;,
                        &quot;11-9&quot;: &quot;#654321&quot;,
                        &quot;11-10&quot;: &quot;#654321&quot;,
                        &quot;11-11&quot;: &quot;#654321&quot;,
                        &quot;11-12&quot;: &quot;#654321&quot;,
                        &quot;11-13&quot;: &quot;#654321&quot;,
                        &quot;11-14&quot;: &quot;#654321&quot;,
                        &quot;11-15&quot;: &quot;#654321&quot;,
                        &quot;11-16&quot;: &quot;#654321&quot;,
                        &quot;11-17&quot;: &quot;#654321&quot;,
                        &quot;11-18&quot;: &quot;#654321&quot;,
                        &quot;11-19&quot;: &quot;#654321&quot;,
                        &quot;11-20&quot;: &quot;#654321&quot;,
                        &quot;11-21&quot;: &quot;#654321&quot;,
                        &quot;11-22&quot;: &quot;#654321&quot;,
                        &quot;11-23&quot;: &quot;#654321&quot;,
                        &quot;11-24&quot;: &quot;#654321&quot;,
                        &quot;11-25&quot;: &quot;#654321&quot;,
                        &quot;11-26&quot;: &quot;#654321&quot;,
                        &quot;11-27&quot;: &quot;#654321&quot;,
                        &quot;11-28&quot;: &quot;#654321&quot;,
                        &quot;12-2&quot;: &quot;#654321&quot;,
                        &quot;12-3&quot;: &quot;#654321&quot;,
                        &quot;12-4&quot;: &quot;#654321&quot;,
                        &quot;12-5&quot;: &quot;#654321&quot;,
                        &quot;12-6&quot;: &quot;#654321&quot;,
                        &quot;12-7&quot;: &quot;#654321&quot;,
                        &quot;12-8&quot;: &quot;#654321&quot;,
                        &quot;12-9&quot;: &quot;#654321&quot;,
                        &quot;12-10&quot;: &quot;#654321&quot;,
                        &quot;12-11&quot;: &quot;#654321&quot;,
                        &quot;12-12&quot;: &quot;#654321&quot;,
                        &quot;12-13&quot;: &quot;#654321&quot;,
                        &quot;12-14&quot;: &quot;#654321&quot;,
                        &quot;12-15&quot;: &quot;#654321&quot;,
                        &quot;12-16&quot;: &quot;#654321&quot;,
                        &quot;12-17&quot;: &quot;#654321&quot;,
                        &quot;12-18&quot;: &quot;#654321&quot;,
                        &quot;12-19&quot;: &quot;#654321&quot;,
                        &quot;12-20&quot;: &quot;#654321&quot;,
                        &quot;12-21&quot;: &quot;#654321&quot;,
                        &quot;12-22&quot;: &quot;#654321&quot;,
                        &quot;12-23&quot;: &quot;#654321&quot;,
                        &quot;12-24&quot;: &quot;#654321&quot;,
                        &quot;12-25&quot;: &quot;#654321&quot;,
                        &quot;12-26&quot;: &quot;#654321&quot;,
                        &quot;12-27&quot;: &quot;#654321&quot;,
                        &quot;12-28&quot;: &quot;#654321&quot;,
                        &quot;13-2&quot;: &quot;#654321&quot;,
                        &quot;13-3&quot;: &quot;#654321&quot;,
                        &quot;13-4&quot;: &quot;#654321&quot;,
                        &quot;13-5&quot;: &quot;#654321&quot;,
                        &quot;13-6&quot;: &quot;#654321&quot;,
                        &quot;13-7&quot;: &quot;#654321&quot;,
                        &quot;13-8&quot;: &quot;#654321&quot;,
                        &quot;13-9&quot;: &quot;#654321&quot;,
                        &quot;13-10&quot;: &quot;#654321&quot;,
                        &quot;13-11&quot;: &quot;#654321&quot;,
                        &quot;13-12&quot;: &quot;#654321&quot;,
                        &quot;13-13&quot;: &quot;#654321&quot;,
                        &quot;13-14&quot;: &quot;#654321&quot;,
                        &quot;13-15&quot;: &quot;#654321&quot;,
                        &quot;13-16&quot;: &quot;#654321&quot;,
                        &quot;13-17&quot;: &quot;#654321&quot;,
                        &quot;13-18&quot;: &quot;#654321&quot;,
                        &quot;13-19&quot;: &quot;#654321&quot;,
                        &quot;13-20&quot;: &quot;#654321&quot;,
                        &quot;13-21&quot;: &quot;#654321&quot;,
                        &quot;13-22&quot;: &quot;#654321&quot;,
                        &quot;13-23&quot;: &quot;#654321&quot;,
                        &quot;13-24&quot;: &quot;#654321&quot;,
                        &quot;13-25&quot;: &quot;#654321&quot;,
                        &quot;13-26&quot;: &quot;#654321&quot;,
                        &quot;13-27&quot;: &quot;#654321&quot;,
                        &quot;13-28&quot;: &quot;#654321&quot;,
                        &quot;14-2&quot;: &quot;#654321&quot;,
                        &quot;14-3&quot;: &quot;#654321&quot;,
                        &quot;14-4&quot;: &quot;#654321&quot;,
                        &quot;14-5&quot;: &quot;#654321&quot;,
                        &quot;14-6&quot;: &quot;#654321&quot;,
                        &quot;14-7&quot;: &quot;#654321&quot;,
                        &quot;14-8&quot;: &quot;#654321&quot;,
                        &quot;14-9&quot;: &quot;#654321&quot;,
                        &quot;14-10&quot;: &quot;#654321&quot;,
                        &quot;14-11&quot;: &quot;#654321&quot;,
                        &quot;14-12&quot;: &quot;#654321&quot;,
                        &quot;14-13&quot;: &quot;#654321&quot;,
                        &quot;14-14&quot;: &quot;#654321&quot;,
                        &quot;14-15&quot;: &quot;#654321&quot;,
                        &quot;14-16&quot;: &quot;#654321&quot;,
                        &quot;14-17&quot;: &quot;#654321&quot;,
                        &quot;14-18&quot;: &quot;#654321&quot;,
                        &quot;14-19&quot;: &quot;#654321&quot;,
                        &quot;14-20&quot;: &quot;#654321&quot;,
                        &quot;14-21&quot;: &quot;#654321&quot;,
                        &quot;14-22&quot;: &quot;#654321&quot;,
                        &quot;14-23&quot;: &quot;#654321&quot;,
                        &quot;14-24&quot;: &quot;#654321&quot;,
                        &quot;14-25&quot;: &quot;#654321&quot;,
                        &quot;14-26&quot;: &quot;#654321&quot;,
                        &quot;14-27&quot;: &quot;#654321&quot;,
                        &quot;14-28&quot;: &quot;#654321&quot;,
                        &quot;15-2&quot;: &quot;#654321&quot;,
                        &quot;15-3&quot;: &quot;#654321&quot;,
                        &quot;15-4&quot;: &quot;#654321&quot;,
                        &quot;15-5&quot;: &quot;#654321&quot;,
                        &quot;15-6&quot;: &quot;#654321&quot;,
                        &quot;15-7&quot;: &quot;#654321&quot;,
                        &quot;15-8&quot;: &quot;#654321&quot;,
                        &quot;15-9&quot;: &quot;#654321&quot;,
                        &quot;15-10&quot;: &quot;#654321&quot;,
                        &quot;15-11&quot;: &quot;#654321&quot;,
                        &quot;15-12&quot;: &quot;#654321&quot;,
                        &quot;15-13&quot;: &quot;#654321&quot;,
                        &quot;15-14&quot;: &quot;#654321&quot;,
                        &quot;15-15&quot;: &quot;#654321&quot;,
                        &quot;15-16&quot;: &quot;#654321&quot;,
                        &quot;15-17&quot;: &quot;#654321&quot;,
                        &quot;15-18&quot;: &quot;#654321&quot;,
                        &quot;15-19&quot;: &quot;#654321&quot;,
                        &quot;15-20&quot;: &quot;#654321&quot;,
                        &quot;15-21&quot;: &quot;#654321&quot;,
                        &quot;15-22&quot;: &quot;#654321&quot;,
                        &quot;15-23&quot;: &quot;#654321&quot;,
                        &quot;15-24&quot;: &quot;#654321&quot;,
                        &quot;15-25&quot;: &quot;#654321&quot;,
                        &quot;15-26&quot;: &quot;#654321&quot;,
                        &quot;15-27&quot;: &quot;#654321&quot;,
                        &quot;15-28&quot;: &quot;#654321&quot;,
                        &quot;16-2&quot;: &quot;#654321&quot;,
                        &quot;16-3&quot;: &quot;#654321&quot;,
                        &quot;16-4&quot;: &quot;#654321&quot;,
                        &quot;16-5&quot;: &quot;#654321&quot;,
                        &quot;16-6&quot;: &quot;#654321&quot;,
                        &quot;16-7&quot;: &quot;#654321&quot;,
                        &quot;16-8&quot;: &quot;#654321&quot;,
                        &quot;16-9&quot;: &quot;#654321&quot;,
                        &quot;16-10&quot;: &quot;#654321&quot;,
                        &quot;16-11&quot;: &quot;#654321&quot;,
                        &quot;16-12&quot;: &quot;#654321&quot;,
                        &quot;16-13&quot;: &quot;#654321&quot;,
                        &quot;16-14&quot;: &quot;#654321&quot;,
                        &quot;16-15&quot;: &quot;#654321&quot;,
                        &quot;16-16&quot;: &quot;#654321&quot;,
                        &quot;16-17&quot;: &quot;#654321&quot;,
                        &quot;16-18&quot;: &quot;#654321&quot;,
                        &quot;16-19&quot;: &quot;#654321&quot;,
                        &quot;16-20&quot;: &quot;#654321&quot;,
                        &quot;16-21&quot;: &quot;#654321&quot;,
                        &quot;16-22&quot;: &quot;#654321&quot;,
                        &quot;16-23&quot;: &quot;#654321&quot;,
                        &quot;16-24&quot;: &quot;#654321&quot;,
                        &quot;16-25&quot;: &quot;#654321&quot;,
                        &quot;16-26&quot;: &quot;#654321&quot;,
                        &quot;16-27&quot;: &quot;#654321&quot;,
                        &quot;16-28&quot;: &quot;#654321&quot;,
                        &quot;17-2&quot;: &quot;#654321&quot;,
                        &quot;17-3&quot;: &quot;#654321&quot;,
                        &quot;17-4&quot;: &quot;#654321&quot;,
                        &quot;17-5&quot;: &quot;#654321&quot;,
                        &quot;17-6&quot;: &quot;#654321&quot;,
                        &quot;17-7&quot;: &quot;#654321&quot;,
                        &quot;17-8&quot;: &quot;#654321&quot;,
                        &quot;17-9&quot;: &quot;#654321&quot;,
                        &quot;17-10&quot;: &quot;#654321&quot;,
                        &quot;17-11&quot;: &quot;#654321&quot;,
                        &quot;17-12&quot;: &quot;#654321&quot;,
                        &quot;17-13&quot;: &quot;#654321&quot;,
                        &quot;17-14&quot;: &quot;#654321&quot;,
                        &quot;17-15&quot;: &quot;#654321&quot;,
                        &quot;17-16&quot;: &quot;#654321&quot;,
                        &quot;17-17&quot;: &quot;#654321&quot;,
                        &quot;17-18&quot;: &quot;#654321&quot;,
                        &quot;17-19&quot;: &quot;#654321&quot;,
                        &quot;17-20&quot;: &quot;#654321&quot;,
                        &quot;17-21&quot;: &quot;#654321&quot;,
                        &quot;17-22&quot;: &quot;#654321&quot;,
                        &quot;17-23&quot;: &quot;#654321&quot;,
                        &quot;17-24&quot;: &quot;#654321&quot;,
                        &quot;17-25&quot;: &quot;#654321&quot;,
                        &quot;17-26&quot;: &quot;#654321&quot;,
                        &quot;17-27&quot;: &quot;#654321&quot;,
                        &quot;17-28&quot;: &quot;#654321&quot;,
                        &quot;18-2&quot;: &quot;#654321&quot;,
                        &quot;18-3&quot;: &quot;#654321&quot;,
                        &quot;18-4&quot;: &quot;#654321&quot;,
                        &quot;18-5&quot;: &quot;#654321&quot;,
                        &quot;18-6&quot;: &quot;#654321&quot;,
                        &quot;18-7&quot;: &quot;#654321&quot;,
                        &quot;18-8&quot;: &quot;#654321&quot;,
                        &quot;18-9&quot;: &quot;#654321&quot;,
                        &quot;18-10&quot;: &quot;#654321&quot;,
                        &quot;18-11&quot;: &quot;#654321&quot;,
                        &quot;18-12&quot;: &quot;#654321&quot;,
                        &quot;18-13&quot;: &quot;#654321&quot;,
                        &quot;18-14&quot;: &quot;#654321&quot;,
                        &quot;18-15&quot;: &quot;#654321&quot;,
                        &quot;18-16&quot;: &quot;#654321&quot;,
                        &quot;18-17&quot;: &quot;#654321&quot;,
                        &quot;18-18&quot;: &quot;#654321&quot;,
                        &quot;18-19&quot;: &quot;#654321&quot;,
                        &quot;18-20&quot;: &quot;#654321&quot;,
                        &quot;18-21&quot;: &quot;#654321&quot;,
                        &quot;18-22&quot;: &quot;#654321&quot;,
                        &quot;18-23&quot;: &quot;#654321&quot;,
                        &quot;18-24&quot;: &quot;#654321&quot;,
                        &quot;18-25&quot;: &quot;#654321&quot;,
                        &quot;18-26&quot;: &quot;#654321&quot;,
                        &quot;18-27&quot;: &quot;#654321&quot;,
                        &quot;18-28&quot;: &quot;#654321&quot;
                    },
                    &quot;wall_color&quot;: &quot;#654321&quot;,
                    &quot;wall_thickness&quot;: 19,
                    &quot;floor_texture_id&quot;: 10,
                    &quot;starting_point_row&quot;: 10,
                    &quot;starting_point_col&quot;: 4,
                    &quot;floor_accepted&quot;: true,
                    &quot;door_asset_id&quot;: 1,
                    &quot;door_position&quot;: {
                        &quot;row&quot;: 3,
                        &quot;col&quot;: 19
                    },
                    &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 3,
            &quot;user_id&quot;: 1,
            &quot;name&quot;: &quot;Ucieczka ze Stacji Kosmicznej&quot;,
            &quot;description&quot;: &quot;Awaria na stacji kosmicznej! Rozwiąż techniczne zagadki, aby przywr&oacute;cić zasilanie i bezpiecznie uciec.&quot;,
            &quot;thumbnail_url&quot;: &quot;/storage/escape-rooms/thumbnails/rl-app-4.png&quot;,
            &quot;soundtrack_url&quot;: &quot;/storage/escape-rooms/soundtracks/3e43d40a-dbed-45a8-8265-f65bbe1944f0.mp3&quot;,
            &quot;is_public&quot;: true,
            &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;admin&quot;,
                &quot;email&quot;: &quot;admin@riddlelab.world&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;last_login_at&quot;: &quot;2026-02-13 22:04:23&quot;,
                &quot;role&quot;: &quot;admin&quot;,
                &quot;avatar_url&quot;: null,
                &quot;player_configuration&quot;: &quot;{\&quot;avatar\&quot;:{\&quot;skin_color\&quot;:\&quot;#f5d0c5\&quot;,\&quot;hair_color\&quot;:\&quot;#2a1b0a\&quot;,\&quot;eye_color\&quot;:\&quot;#3d6e67\&quot;,\&quot;outfit_color\&quot;:\&quot;#4287f5\&quot;}}&quot;,
                &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;
            },
            &quot;rooms&quot;: [
                {
                    &quot;id&quot;: 3,
                    &quot;escape_room_id&quot;: 3,
                    &quot;grid_data&quot;: {
                        &quot;2-2&quot;: &quot;1&quot;,
                        &quot;2-3&quot;: &quot;1&quot;,
                        &quot;2-4&quot;: &quot;1&quot;,
                        &quot;2-5&quot;: &quot;1&quot;,
                        &quot;2-6&quot;: &quot;1&quot;,
                        &quot;2-7&quot;: &quot;1&quot;,
                        &quot;2-8&quot;: &quot;1&quot;,
                        &quot;2-9&quot;: &quot;1&quot;,
                        &quot;2-10&quot;: &quot;1&quot;,
                        &quot;2-11&quot;: &quot;1&quot;,
                        &quot;2-12&quot;: &quot;1&quot;,
                        &quot;2-13&quot;: &quot;1&quot;,
                        &quot;2-14&quot;: &quot;1&quot;,
                        &quot;2-15&quot;: &quot;1&quot;,
                        &quot;2-16&quot;: &quot;1&quot;,
                        &quot;2-17&quot;: &quot;1&quot;,
                        &quot;2-18&quot;: &quot;1&quot;,
                        &quot;2-19&quot;: &quot;1&quot;,
                        &quot;2-20&quot;: &quot;1&quot;,
                        &quot;2-21&quot;: &quot;1&quot;,
                        &quot;2-22&quot;: &quot;1&quot;,
                        &quot;2-23&quot;: &quot;1&quot;,
                        &quot;2-24&quot;: &quot;1&quot;,
                        &quot;2-25&quot;: &quot;1&quot;,
                        &quot;2-26&quot;: &quot;1&quot;,
                        &quot;2-27&quot;: &quot;1&quot;,
                        &quot;2-28&quot;: &quot;1&quot;,
                        &quot;3-2&quot;: &quot;1&quot;,
                        &quot;3-3&quot;: &quot;1&quot;,
                        &quot;3-4&quot;: &quot;1&quot;,
                        &quot;3-5&quot;: &quot;1&quot;,
                        &quot;3-6&quot;: &quot;1&quot;,
                        &quot;3-7&quot;: &quot;1&quot;,
                        &quot;3-8&quot;: &quot;1&quot;,
                        &quot;3-9&quot;: &quot;1&quot;,
                        &quot;3-10&quot;: &quot;1&quot;,
                        &quot;3-11&quot;: &quot;1&quot;,
                        &quot;3-12&quot;: &quot;1&quot;,
                        &quot;3-13&quot;: &quot;1&quot;,
                        &quot;3-14&quot;: &quot;1&quot;,
                        &quot;3-15&quot;: &quot;1&quot;,
                        &quot;3-16&quot;: &quot;1&quot;,
                        &quot;3-17&quot;: &quot;1&quot;,
                        &quot;3-18&quot;: &quot;1&quot;,
                        &quot;3-19&quot;: &quot;1&quot;,
                        &quot;3-20&quot;: &quot;1&quot;,
                        &quot;3-21&quot;: &quot;1&quot;,
                        &quot;3-22&quot;: &quot;1&quot;,
                        &quot;3-23&quot;: &quot;1&quot;,
                        &quot;3-24&quot;: &quot;1&quot;,
                        &quot;3-25&quot;: &quot;1&quot;,
                        &quot;3-26&quot;: &quot;1&quot;,
                        &quot;3-27&quot;: &quot;1&quot;,
                        &quot;3-28&quot;: &quot;1&quot;,
                        &quot;4-2&quot;: &quot;1&quot;,
                        &quot;4-3&quot;: &quot;1&quot;,
                        &quot;4-4&quot;: &quot;1&quot;,
                        &quot;4-5&quot;: &quot;1&quot;,
                        &quot;4-6&quot;: &quot;1&quot;,
                        &quot;4-7&quot;: &quot;1&quot;,
                        &quot;4-8&quot;: &quot;1&quot;,
                        &quot;4-9&quot;: &quot;1&quot;,
                        &quot;4-10&quot;: &quot;1&quot;,
                        &quot;4-11&quot;: &quot;1&quot;,
                        &quot;4-12&quot;: &quot;1&quot;,
                        &quot;4-13&quot;: &quot;1&quot;,
                        &quot;4-14&quot;: &quot;1&quot;,
                        &quot;4-15&quot;: &quot;1&quot;,
                        &quot;4-16&quot;: &quot;1&quot;,
                        &quot;4-17&quot;: &quot;1&quot;,
                        &quot;4-18&quot;: &quot;1&quot;,
                        &quot;4-19&quot;: &quot;1&quot;,
                        &quot;4-20&quot;: &quot;1&quot;,
                        &quot;4-21&quot;: &quot;1&quot;,
                        &quot;4-22&quot;: &quot;1&quot;,
                        &quot;4-23&quot;: &quot;1&quot;,
                        &quot;4-24&quot;: &quot;1&quot;,
                        &quot;4-25&quot;: &quot;1&quot;,
                        &quot;4-26&quot;: &quot;1&quot;,
                        &quot;4-27&quot;: &quot;1&quot;,
                        &quot;4-28&quot;: &quot;1&quot;,
                        &quot;5-2&quot;: &quot;1&quot;,
                        &quot;5-3&quot;: &quot;1&quot;,
                        &quot;5-4&quot;: &quot;1&quot;,
                        &quot;5-5&quot;: &quot;1&quot;,
                        &quot;5-6&quot;: &quot;1&quot;,
                        &quot;5-7&quot;: &quot;1&quot;,
                        &quot;5-8&quot;: &quot;1&quot;,
                        &quot;5-9&quot;: &quot;1&quot;,
                        &quot;5-10&quot;: &quot;1&quot;,
                        &quot;5-11&quot;: &quot;1&quot;,
                        &quot;5-12&quot;: &quot;1&quot;,
                        &quot;5-13&quot;: &quot;1&quot;,
                        &quot;5-14&quot;: &quot;1&quot;,
                        &quot;5-15&quot;: &quot;1&quot;,
                        &quot;5-16&quot;: &quot;1&quot;,
                        &quot;5-17&quot;: &quot;1&quot;,
                        &quot;5-18&quot;: &quot;1&quot;,
                        &quot;5-19&quot;: &quot;1&quot;,
                        &quot;5-20&quot;: &quot;1&quot;,
                        &quot;5-21&quot;: &quot;1&quot;,
                        &quot;5-22&quot;: &quot;1&quot;,
                        &quot;5-23&quot;: &quot;1&quot;,
                        &quot;5-24&quot;: &quot;1&quot;,
                        &quot;5-25&quot;: &quot;1&quot;,
                        &quot;5-26&quot;: &quot;1&quot;,
                        &quot;5-27&quot;: &quot;1&quot;,
                        &quot;5-28&quot;: &quot;1&quot;,
                        &quot;6-2&quot;: &quot;1&quot;,
                        &quot;6-3&quot;: &quot;1&quot;,
                        &quot;6-4&quot;: &quot;1&quot;,
                        &quot;6-5&quot;: &quot;1&quot;,
                        &quot;6-6&quot;: &quot;1&quot;,
                        &quot;6-7&quot;: &quot;1&quot;,
                        &quot;6-8&quot;: &quot;1&quot;,
                        &quot;6-9&quot;: &quot;1&quot;,
                        &quot;6-10&quot;: &quot;1&quot;,
                        &quot;6-11&quot;: &quot;1&quot;,
                        &quot;6-12&quot;: &quot;1&quot;,
                        &quot;6-13&quot;: &quot;1&quot;,
                        &quot;6-14&quot;: &quot;1&quot;,
                        &quot;6-15&quot;: &quot;1&quot;,
                        &quot;6-16&quot;: &quot;1&quot;,
                        &quot;6-17&quot;: &quot;1&quot;,
                        &quot;6-18&quot;: &quot;1&quot;,
                        &quot;6-19&quot;: &quot;1&quot;,
                        &quot;6-20&quot;: &quot;1&quot;,
                        &quot;6-21&quot;: &quot;1&quot;,
                        &quot;6-22&quot;: &quot;1&quot;,
                        &quot;6-23&quot;: &quot;1&quot;,
                        &quot;6-24&quot;: &quot;1&quot;,
                        &quot;6-25&quot;: &quot;1&quot;,
                        &quot;6-26&quot;: &quot;1&quot;,
                        &quot;6-27&quot;: &quot;1&quot;,
                        &quot;6-28&quot;: &quot;1&quot;,
                        &quot;7-2&quot;: &quot;1&quot;,
                        &quot;7-3&quot;: &quot;1&quot;,
                        &quot;7-4&quot;: &quot;1&quot;,
                        &quot;7-5&quot;: &quot;1&quot;,
                        &quot;7-6&quot;: &quot;1&quot;,
                        &quot;7-7&quot;: &quot;1&quot;,
                        &quot;7-8&quot;: &quot;1&quot;,
                        &quot;7-9&quot;: &quot;1&quot;,
                        &quot;7-10&quot;: &quot;1&quot;,
                        &quot;7-11&quot;: &quot;1&quot;,
                        &quot;7-12&quot;: &quot;1&quot;,
                        &quot;7-13&quot;: &quot;1&quot;,
                        &quot;7-14&quot;: &quot;1&quot;,
                        &quot;7-15&quot;: &quot;1&quot;,
                        &quot;7-16&quot;: &quot;1&quot;,
                        &quot;7-17&quot;: &quot;1&quot;,
                        &quot;7-18&quot;: &quot;1&quot;,
                        &quot;7-19&quot;: &quot;1&quot;,
                        &quot;7-20&quot;: &quot;1&quot;,
                        &quot;7-21&quot;: &quot;1&quot;,
                        &quot;7-22&quot;: &quot;1&quot;,
                        &quot;7-23&quot;: &quot;1&quot;,
                        &quot;7-24&quot;: &quot;1&quot;,
                        &quot;7-25&quot;: &quot;1&quot;,
                        &quot;7-26&quot;: &quot;1&quot;,
                        &quot;7-27&quot;: &quot;1&quot;,
                        &quot;7-28&quot;: &quot;1&quot;,
                        &quot;8-2&quot;: &quot;1&quot;,
                        &quot;8-3&quot;: &quot;1&quot;,
                        &quot;8-4&quot;: &quot;1&quot;,
                        &quot;8-5&quot;: &quot;1&quot;,
                        &quot;8-6&quot;: &quot;1&quot;,
                        &quot;8-7&quot;: &quot;1&quot;,
                        &quot;8-8&quot;: &quot;1&quot;,
                        &quot;8-9&quot;: &quot;1&quot;,
                        &quot;8-10&quot;: &quot;1&quot;,
                        &quot;8-11&quot;: &quot;1&quot;,
                        &quot;8-12&quot;: &quot;1&quot;,
                        &quot;8-13&quot;: &quot;1&quot;,
                        &quot;8-14&quot;: &quot;1&quot;,
                        &quot;8-15&quot;: &quot;1&quot;,
                        &quot;8-16&quot;: &quot;1&quot;,
                        &quot;8-17&quot;: &quot;1&quot;,
                        &quot;8-18&quot;: &quot;1&quot;,
                        &quot;8-19&quot;: &quot;1&quot;,
                        &quot;8-20&quot;: &quot;1&quot;,
                        &quot;8-21&quot;: &quot;1&quot;,
                        &quot;8-22&quot;: &quot;1&quot;,
                        &quot;8-23&quot;: &quot;1&quot;,
                        &quot;8-24&quot;: &quot;1&quot;,
                        &quot;8-25&quot;: &quot;1&quot;,
                        &quot;8-26&quot;: &quot;1&quot;,
                        &quot;8-27&quot;: &quot;1&quot;,
                        &quot;8-28&quot;: &quot;1&quot;,
                        &quot;9-2&quot;: &quot;1&quot;,
                        &quot;9-3&quot;: &quot;1&quot;,
                        &quot;9-4&quot;: &quot;1&quot;,
                        &quot;9-5&quot;: &quot;1&quot;,
                        &quot;9-6&quot;: &quot;1&quot;,
                        &quot;9-7&quot;: &quot;1&quot;,
                        &quot;9-8&quot;: &quot;1&quot;,
                        &quot;9-9&quot;: &quot;1&quot;,
                        &quot;9-10&quot;: &quot;1&quot;,
                        &quot;9-11&quot;: &quot;1&quot;,
                        &quot;9-12&quot;: &quot;1&quot;,
                        &quot;9-13&quot;: &quot;1&quot;,
                        &quot;9-14&quot;: &quot;1&quot;,
                        &quot;9-15&quot;: &quot;1&quot;,
                        &quot;9-16&quot;: &quot;1&quot;,
                        &quot;9-17&quot;: &quot;1&quot;,
                        &quot;9-18&quot;: &quot;1&quot;,
                        &quot;9-19&quot;: &quot;1&quot;,
                        &quot;9-20&quot;: &quot;1&quot;,
                        &quot;9-21&quot;: &quot;1&quot;,
                        &quot;9-22&quot;: &quot;1&quot;,
                        &quot;9-23&quot;: &quot;1&quot;,
                        &quot;9-24&quot;: &quot;1&quot;,
                        &quot;9-25&quot;: &quot;1&quot;,
                        &quot;9-26&quot;: &quot;1&quot;,
                        &quot;9-27&quot;: &quot;1&quot;,
                        &quot;9-28&quot;: &quot;1&quot;,
                        &quot;10-2&quot;: &quot;1&quot;,
                        &quot;10-3&quot;: &quot;1&quot;,
                        &quot;10-4&quot;: &quot;1&quot;,
                        &quot;10-5&quot;: &quot;1&quot;,
                        &quot;10-6&quot;: &quot;1&quot;,
                        &quot;10-7&quot;: &quot;1&quot;,
                        &quot;10-8&quot;: &quot;1&quot;,
                        &quot;10-9&quot;: &quot;1&quot;,
                        &quot;10-10&quot;: &quot;1&quot;,
                        &quot;10-11&quot;: &quot;1&quot;,
                        &quot;10-12&quot;: &quot;1&quot;,
                        &quot;10-13&quot;: &quot;1&quot;,
                        &quot;10-14&quot;: &quot;1&quot;,
                        &quot;10-15&quot;: &quot;1&quot;,
                        &quot;10-16&quot;: &quot;1&quot;,
                        &quot;10-17&quot;: &quot;1&quot;,
                        &quot;10-18&quot;: &quot;1&quot;,
                        &quot;10-19&quot;: &quot;1&quot;,
                        &quot;10-20&quot;: &quot;1&quot;,
                        &quot;10-21&quot;: &quot;1&quot;,
                        &quot;10-22&quot;: &quot;1&quot;,
                        &quot;10-23&quot;: &quot;1&quot;,
                        &quot;10-24&quot;: &quot;1&quot;,
                        &quot;10-25&quot;: &quot;1&quot;,
                        &quot;10-26&quot;: &quot;1&quot;,
                        &quot;10-27&quot;: &quot;1&quot;,
                        &quot;10-28&quot;: &quot;1&quot;,
                        &quot;11-2&quot;: &quot;1&quot;,
                        &quot;11-3&quot;: &quot;1&quot;,
                        &quot;11-4&quot;: &quot;1&quot;,
                        &quot;11-5&quot;: &quot;1&quot;,
                        &quot;11-6&quot;: &quot;1&quot;,
                        &quot;11-7&quot;: &quot;1&quot;,
                        &quot;11-8&quot;: &quot;1&quot;,
                        &quot;11-9&quot;: &quot;1&quot;,
                        &quot;11-10&quot;: &quot;1&quot;,
                        &quot;11-11&quot;: &quot;1&quot;,
                        &quot;11-12&quot;: &quot;1&quot;,
                        &quot;11-13&quot;: &quot;1&quot;,
                        &quot;11-14&quot;: &quot;1&quot;,
                        &quot;11-15&quot;: &quot;1&quot;,
                        &quot;11-16&quot;: &quot;1&quot;,
                        &quot;11-17&quot;: &quot;1&quot;,
                        &quot;11-18&quot;: &quot;1&quot;,
                        &quot;11-19&quot;: &quot;1&quot;,
                        &quot;11-20&quot;: &quot;1&quot;,
                        &quot;11-21&quot;: &quot;1&quot;,
                        &quot;11-22&quot;: &quot;1&quot;,
                        &quot;11-23&quot;: &quot;1&quot;,
                        &quot;11-24&quot;: &quot;1&quot;,
                        &quot;11-25&quot;: &quot;1&quot;,
                        &quot;11-26&quot;: &quot;1&quot;,
                        &quot;11-27&quot;: &quot;1&quot;,
                        &quot;11-28&quot;: &quot;1&quot;,
                        &quot;12-2&quot;: &quot;1&quot;,
                        &quot;12-3&quot;: &quot;1&quot;,
                        &quot;12-4&quot;: &quot;1&quot;,
                        &quot;12-5&quot;: &quot;1&quot;,
                        &quot;12-6&quot;: &quot;1&quot;,
                        &quot;12-7&quot;: &quot;1&quot;,
                        &quot;12-8&quot;: &quot;1&quot;,
                        &quot;12-9&quot;: &quot;1&quot;,
                        &quot;12-10&quot;: &quot;1&quot;,
                        &quot;12-11&quot;: &quot;1&quot;,
                        &quot;12-12&quot;: &quot;1&quot;,
                        &quot;12-13&quot;: &quot;1&quot;,
                        &quot;12-14&quot;: &quot;1&quot;,
                        &quot;12-15&quot;: &quot;1&quot;,
                        &quot;12-16&quot;: &quot;1&quot;,
                        &quot;12-17&quot;: &quot;1&quot;,
                        &quot;12-18&quot;: &quot;1&quot;,
                        &quot;12-19&quot;: &quot;1&quot;,
                        &quot;12-20&quot;: &quot;1&quot;,
                        &quot;12-21&quot;: &quot;1&quot;,
                        &quot;12-22&quot;: &quot;1&quot;,
                        &quot;12-23&quot;: &quot;1&quot;,
                        &quot;12-24&quot;: &quot;1&quot;,
                        &quot;12-25&quot;: &quot;1&quot;,
                        &quot;12-26&quot;: &quot;1&quot;,
                        &quot;12-27&quot;: &quot;1&quot;,
                        &quot;12-28&quot;: &quot;1&quot;,
                        &quot;13-2&quot;: &quot;1&quot;,
                        &quot;13-3&quot;: &quot;1&quot;,
                        &quot;13-4&quot;: &quot;1&quot;,
                        &quot;13-5&quot;: &quot;1&quot;,
                        &quot;13-6&quot;: &quot;1&quot;,
                        &quot;13-7&quot;: &quot;1&quot;,
                        &quot;13-8&quot;: &quot;1&quot;,
                        &quot;13-9&quot;: &quot;1&quot;,
                        &quot;13-10&quot;: &quot;1&quot;,
                        &quot;13-11&quot;: &quot;1&quot;,
                        &quot;13-12&quot;: &quot;1&quot;,
                        &quot;13-13&quot;: &quot;1&quot;,
                        &quot;13-14&quot;: &quot;1&quot;,
                        &quot;13-15&quot;: &quot;1&quot;,
                        &quot;13-16&quot;: &quot;1&quot;,
                        &quot;13-17&quot;: &quot;1&quot;,
                        &quot;13-18&quot;: &quot;1&quot;,
                        &quot;13-19&quot;: &quot;1&quot;,
                        &quot;13-20&quot;: &quot;1&quot;,
                        &quot;13-21&quot;: &quot;1&quot;,
                        &quot;13-22&quot;: &quot;1&quot;,
                        &quot;13-23&quot;: &quot;1&quot;,
                        &quot;13-24&quot;: &quot;1&quot;,
                        &quot;13-25&quot;: &quot;1&quot;,
                        &quot;13-26&quot;: &quot;1&quot;,
                        &quot;13-27&quot;: &quot;1&quot;,
                        &quot;13-28&quot;: &quot;1&quot;,
                        &quot;14-2&quot;: &quot;1&quot;,
                        &quot;14-3&quot;: &quot;1&quot;,
                        &quot;14-4&quot;: &quot;1&quot;,
                        &quot;14-5&quot;: &quot;1&quot;,
                        &quot;14-6&quot;: &quot;1&quot;,
                        &quot;14-7&quot;: &quot;1&quot;,
                        &quot;14-8&quot;: &quot;1&quot;,
                        &quot;14-9&quot;: &quot;1&quot;,
                        &quot;14-10&quot;: &quot;1&quot;,
                        &quot;14-11&quot;: &quot;1&quot;,
                        &quot;14-12&quot;: &quot;1&quot;,
                        &quot;14-13&quot;: &quot;1&quot;,
                        &quot;14-14&quot;: &quot;1&quot;,
                        &quot;14-15&quot;: &quot;1&quot;,
                        &quot;14-16&quot;: &quot;1&quot;,
                        &quot;14-17&quot;: &quot;1&quot;,
                        &quot;14-18&quot;: &quot;1&quot;,
                        &quot;14-19&quot;: &quot;1&quot;,
                        &quot;14-20&quot;: &quot;1&quot;,
                        &quot;14-21&quot;: &quot;1&quot;,
                        &quot;14-22&quot;: &quot;1&quot;,
                        &quot;14-23&quot;: &quot;1&quot;,
                        &quot;14-24&quot;: &quot;1&quot;,
                        &quot;14-25&quot;: &quot;1&quot;,
                        &quot;14-26&quot;: &quot;1&quot;,
                        &quot;14-27&quot;: &quot;1&quot;,
                        &quot;14-28&quot;: &quot;1&quot;,
                        &quot;15-2&quot;: &quot;1&quot;,
                        &quot;15-3&quot;: &quot;1&quot;,
                        &quot;15-4&quot;: &quot;1&quot;,
                        &quot;15-5&quot;: &quot;1&quot;,
                        &quot;15-6&quot;: &quot;1&quot;,
                        &quot;15-7&quot;: &quot;1&quot;,
                        &quot;15-8&quot;: &quot;1&quot;,
                        &quot;15-9&quot;: &quot;1&quot;,
                        &quot;15-10&quot;: &quot;1&quot;,
                        &quot;15-11&quot;: &quot;1&quot;,
                        &quot;15-12&quot;: &quot;1&quot;,
                        &quot;15-13&quot;: &quot;1&quot;,
                        &quot;15-14&quot;: &quot;1&quot;,
                        &quot;15-15&quot;: &quot;1&quot;,
                        &quot;15-16&quot;: &quot;1&quot;,
                        &quot;15-17&quot;: &quot;1&quot;,
                        &quot;15-18&quot;: &quot;1&quot;,
                        &quot;15-19&quot;: &quot;1&quot;,
                        &quot;15-20&quot;: &quot;1&quot;,
                        &quot;15-21&quot;: &quot;1&quot;,
                        &quot;15-22&quot;: &quot;1&quot;,
                        &quot;15-23&quot;: &quot;1&quot;,
                        &quot;15-24&quot;: &quot;1&quot;,
                        &quot;15-25&quot;: &quot;1&quot;,
                        &quot;15-26&quot;: &quot;1&quot;,
                        &quot;15-27&quot;: &quot;1&quot;,
                        &quot;15-28&quot;: &quot;1&quot;,
                        &quot;16-2&quot;: &quot;1&quot;,
                        &quot;16-3&quot;: &quot;1&quot;,
                        &quot;16-4&quot;: &quot;1&quot;,
                        &quot;16-5&quot;: &quot;1&quot;,
                        &quot;16-6&quot;: &quot;1&quot;,
                        &quot;16-7&quot;: &quot;1&quot;,
                        &quot;16-8&quot;: &quot;1&quot;,
                        &quot;16-9&quot;: &quot;1&quot;,
                        &quot;16-10&quot;: &quot;1&quot;,
                        &quot;16-11&quot;: &quot;1&quot;,
                        &quot;16-12&quot;: &quot;1&quot;,
                        &quot;16-13&quot;: &quot;1&quot;,
                        &quot;16-14&quot;: &quot;1&quot;,
                        &quot;16-15&quot;: &quot;1&quot;,
                        &quot;16-16&quot;: &quot;1&quot;,
                        &quot;16-17&quot;: &quot;1&quot;,
                        &quot;16-18&quot;: &quot;1&quot;,
                        &quot;16-19&quot;: &quot;1&quot;,
                        &quot;16-20&quot;: &quot;1&quot;,
                        &quot;16-21&quot;: &quot;1&quot;,
                        &quot;16-22&quot;: &quot;1&quot;,
                        &quot;16-23&quot;: &quot;1&quot;,
                        &quot;16-24&quot;: &quot;1&quot;,
                        &quot;16-25&quot;: &quot;1&quot;,
                        &quot;16-26&quot;: &quot;1&quot;,
                        &quot;16-27&quot;: &quot;1&quot;,
                        &quot;16-28&quot;: &quot;1&quot;,
                        &quot;17-2&quot;: &quot;1&quot;,
                        &quot;17-3&quot;: &quot;1&quot;,
                        &quot;17-4&quot;: &quot;1&quot;,
                        &quot;17-5&quot;: &quot;1&quot;,
                        &quot;17-6&quot;: &quot;1&quot;,
                        &quot;17-7&quot;: &quot;1&quot;,
                        &quot;17-8&quot;: &quot;1&quot;,
                        &quot;17-9&quot;: &quot;1&quot;,
                        &quot;17-10&quot;: &quot;1&quot;,
                        &quot;17-11&quot;: &quot;1&quot;,
                        &quot;17-12&quot;: &quot;1&quot;,
                        &quot;17-13&quot;: &quot;1&quot;,
                        &quot;17-14&quot;: &quot;1&quot;,
                        &quot;17-15&quot;: &quot;1&quot;,
                        &quot;17-16&quot;: &quot;1&quot;,
                        &quot;17-17&quot;: &quot;1&quot;,
                        &quot;17-18&quot;: &quot;1&quot;,
                        &quot;17-19&quot;: &quot;1&quot;,
                        &quot;17-20&quot;: &quot;1&quot;,
                        &quot;17-21&quot;: &quot;1&quot;,
                        &quot;17-22&quot;: &quot;1&quot;,
                        &quot;17-23&quot;: &quot;1&quot;,
                        &quot;17-24&quot;: &quot;1&quot;,
                        &quot;17-25&quot;: &quot;1&quot;,
                        &quot;17-26&quot;: &quot;1&quot;,
                        &quot;17-27&quot;: &quot;1&quot;,
                        &quot;17-28&quot;: &quot;1&quot;,
                        &quot;18-2&quot;: &quot;1&quot;,
                        &quot;18-3&quot;: &quot;1&quot;,
                        &quot;18-4&quot;: &quot;1&quot;,
                        &quot;18-5&quot;: &quot;1&quot;,
                        &quot;18-6&quot;: &quot;1&quot;,
                        &quot;18-7&quot;: &quot;1&quot;,
                        &quot;18-8&quot;: &quot;1&quot;,
                        &quot;18-9&quot;: &quot;1&quot;,
                        &quot;18-10&quot;: &quot;1&quot;,
                        &quot;18-11&quot;: &quot;1&quot;,
                        &quot;18-12&quot;: &quot;1&quot;,
                        &quot;18-13&quot;: &quot;1&quot;,
                        &quot;18-14&quot;: &quot;1&quot;,
                        &quot;18-15&quot;: &quot;1&quot;,
                        &quot;18-16&quot;: &quot;1&quot;,
                        &quot;18-17&quot;: &quot;1&quot;,
                        &quot;18-18&quot;: &quot;1&quot;,
                        &quot;18-19&quot;: &quot;1&quot;,
                        &quot;18-20&quot;: &quot;1&quot;,
                        &quot;18-21&quot;: &quot;1&quot;,
                        &quot;18-22&quot;: &quot;1&quot;,
                        &quot;18-23&quot;: &quot;1&quot;,
                        &quot;18-24&quot;: &quot;1&quot;,
                        &quot;18-25&quot;: &quot;1&quot;,
                        &quot;18-26&quot;: &quot;1&quot;,
                        &quot;18-27&quot;: &quot;1&quot;,
                        &quot;18-28&quot;: &quot;1&quot;
                    },
                    &quot;walls_data&quot;: {
                        &quot;wallColor&quot;: &quot;#444444&quot;,
                        &quot;2-2&quot;: &quot;#444444&quot;,
                        &quot;2-3&quot;: &quot;#444444&quot;,
                        &quot;2-4&quot;: &quot;#444444&quot;,
                        &quot;2-5&quot;: &quot;#444444&quot;,
                        &quot;2-6&quot;: &quot;#444444&quot;,
                        &quot;2-7&quot;: &quot;#444444&quot;,
                        &quot;2-8&quot;: &quot;#444444&quot;,
                        &quot;2-9&quot;: &quot;#444444&quot;,
                        &quot;2-10&quot;: &quot;#444444&quot;,
                        &quot;2-11&quot;: &quot;#444444&quot;,
                        &quot;2-12&quot;: &quot;#444444&quot;,
                        &quot;2-13&quot;: &quot;#444444&quot;,
                        &quot;2-14&quot;: &quot;#444444&quot;,
                        &quot;2-15&quot;: &quot;#444444&quot;,
                        &quot;2-16&quot;: &quot;#444444&quot;,
                        &quot;2-17&quot;: &quot;#444444&quot;,
                        &quot;2-18&quot;: &quot;#444444&quot;,
                        &quot;2-19&quot;: &quot;#444444&quot;,
                        &quot;2-20&quot;: &quot;#444444&quot;,
                        &quot;2-21&quot;: &quot;#444444&quot;,
                        &quot;2-22&quot;: &quot;#444444&quot;,
                        &quot;2-23&quot;: &quot;#444444&quot;,
                        &quot;2-24&quot;: &quot;#444444&quot;,
                        &quot;2-25&quot;: &quot;#444444&quot;,
                        &quot;2-26&quot;: &quot;#444444&quot;,
                        &quot;2-27&quot;: &quot;#444444&quot;,
                        &quot;2-28&quot;: &quot;#444444&quot;,
                        &quot;3-2&quot;: &quot;#444444&quot;,
                        &quot;3-3&quot;: &quot;#444444&quot;,
                        &quot;3-4&quot;: &quot;#444444&quot;,
                        &quot;3-5&quot;: &quot;#444444&quot;,
                        &quot;3-6&quot;: &quot;#444444&quot;,
                        &quot;3-7&quot;: &quot;#444444&quot;,
                        &quot;3-8&quot;: &quot;#444444&quot;,
                        &quot;3-9&quot;: &quot;#444444&quot;,
                        &quot;3-10&quot;: &quot;#444444&quot;,
                        &quot;3-11&quot;: &quot;#444444&quot;,
                        &quot;3-12&quot;: &quot;#444444&quot;,
                        &quot;3-13&quot;: &quot;#444444&quot;,
                        &quot;3-14&quot;: &quot;#444444&quot;,
                        &quot;3-15&quot;: &quot;#444444&quot;,
                        &quot;3-16&quot;: &quot;#444444&quot;,
                        &quot;3-17&quot;: &quot;#444444&quot;,
                        &quot;3-18&quot;: &quot;#444444&quot;,
                        &quot;3-19&quot;: &quot;#444444&quot;,
                        &quot;3-20&quot;: &quot;#444444&quot;,
                        &quot;3-21&quot;: &quot;#444444&quot;,
                        &quot;3-22&quot;: &quot;#444444&quot;,
                        &quot;3-23&quot;: &quot;#444444&quot;,
                        &quot;3-24&quot;: &quot;#444444&quot;,
                        &quot;3-25&quot;: &quot;#444444&quot;,
                        &quot;3-26&quot;: &quot;#444444&quot;,
                        &quot;3-27&quot;: &quot;#444444&quot;,
                        &quot;3-28&quot;: &quot;#444444&quot;,
                        &quot;4-2&quot;: &quot;#444444&quot;,
                        &quot;4-3&quot;: &quot;#444444&quot;,
                        &quot;4-4&quot;: &quot;#444444&quot;,
                        &quot;4-5&quot;: &quot;#444444&quot;,
                        &quot;4-6&quot;: &quot;#444444&quot;,
                        &quot;4-7&quot;: &quot;#444444&quot;,
                        &quot;4-8&quot;: &quot;#444444&quot;,
                        &quot;4-9&quot;: &quot;#444444&quot;,
                        &quot;4-10&quot;: &quot;#444444&quot;,
                        &quot;4-11&quot;: &quot;#444444&quot;,
                        &quot;4-12&quot;: &quot;#444444&quot;,
                        &quot;4-13&quot;: &quot;#444444&quot;,
                        &quot;4-14&quot;: &quot;#444444&quot;,
                        &quot;4-15&quot;: &quot;#444444&quot;,
                        &quot;4-16&quot;: &quot;#444444&quot;,
                        &quot;4-17&quot;: &quot;#444444&quot;,
                        &quot;4-18&quot;: &quot;#444444&quot;,
                        &quot;4-19&quot;: &quot;#444444&quot;,
                        &quot;4-20&quot;: &quot;#444444&quot;,
                        &quot;4-21&quot;: &quot;#444444&quot;,
                        &quot;4-22&quot;: &quot;#444444&quot;,
                        &quot;4-23&quot;: &quot;#444444&quot;,
                        &quot;4-24&quot;: &quot;#444444&quot;,
                        &quot;4-25&quot;: &quot;#444444&quot;,
                        &quot;4-26&quot;: &quot;#444444&quot;,
                        &quot;4-27&quot;: &quot;#444444&quot;,
                        &quot;4-28&quot;: &quot;#444444&quot;,
                        &quot;5-2&quot;: &quot;#444444&quot;,
                        &quot;5-3&quot;: &quot;#444444&quot;,
                        &quot;5-4&quot;: &quot;#444444&quot;,
                        &quot;5-5&quot;: &quot;#444444&quot;,
                        &quot;5-6&quot;: &quot;#444444&quot;,
                        &quot;5-7&quot;: &quot;#444444&quot;,
                        &quot;5-8&quot;: &quot;#444444&quot;,
                        &quot;5-9&quot;: &quot;#444444&quot;,
                        &quot;5-10&quot;: &quot;#444444&quot;,
                        &quot;5-11&quot;: &quot;#444444&quot;,
                        &quot;5-12&quot;: &quot;#444444&quot;,
                        &quot;5-13&quot;: &quot;#444444&quot;,
                        &quot;5-14&quot;: &quot;#444444&quot;,
                        &quot;5-15&quot;: &quot;#444444&quot;,
                        &quot;5-16&quot;: &quot;#444444&quot;,
                        &quot;5-17&quot;: &quot;#444444&quot;,
                        &quot;5-18&quot;: &quot;#444444&quot;,
                        &quot;5-19&quot;: &quot;#444444&quot;,
                        &quot;5-20&quot;: &quot;#444444&quot;,
                        &quot;5-21&quot;: &quot;#444444&quot;,
                        &quot;5-22&quot;: &quot;#444444&quot;,
                        &quot;5-23&quot;: &quot;#444444&quot;,
                        &quot;5-24&quot;: &quot;#444444&quot;,
                        &quot;5-25&quot;: &quot;#444444&quot;,
                        &quot;5-26&quot;: &quot;#444444&quot;,
                        &quot;5-27&quot;: &quot;#444444&quot;,
                        &quot;5-28&quot;: &quot;#444444&quot;,
                        &quot;6-2&quot;: &quot;#444444&quot;,
                        &quot;6-3&quot;: &quot;#444444&quot;,
                        &quot;6-4&quot;: &quot;#444444&quot;,
                        &quot;6-5&quot;: &quot;#444444&quot;,
                        &quot;6-6&quot;: &quot;#444444&quot;,
                        &quot;6-7&quot;: &quot;#444444&quot;,
                        &quot;6-8&quot;: &quot;#444444&quot;,
                        &quot;6-9&quot;: &quot;#444444&quot;,
                        &quot;6-10&quot;: &quot;#444444&quot;,
                        &quot;6-11&quot;: &quot;#444444&quot;,
                        &quot;6-12&quot;: &quot;#444444&quot;,
                        &quot;6-13&quot;: &quot;#444444&quot;,
                        &quot;6-14&quot;: &quot;#444444&quot;,
                        &quot;6-15&quot;: &quot;#444444&quot;,
                        &quot;6-16&quot;: &quot;#444444&quot;,
                        &quot;6-17&quot;: &quot;#444444&quot;,
                        &quot;6-18&quot;: &quot;#444444&quot;,
                        &quot;6-19&quot;: &quot;#444444&quot;,
                        &quot;6-20&quot;: &quot;#444444&quot;,
                        &quot;6-21&quot;: &quot;#444444&quot;,
                        &quot;6-22&quot;: &quot;#444444&quot;,
                        &quot;6-23&quot;: &quot;#444444&quot;,
                        &quot;6-24&quot;: &quot;#444444&quot;,
                        &quot;6-25&quot;: &quot;#444444&quot;,
                        &quot;6-26&quot;: &quot;#444444&quot;,
                        &quot;6-27&quot;: &quot;#444444&quot;,
                        &quot;6-28&quot;: &quot;#444444&quot;,
                        &quot;7-2&quot;: &quot;#444444&quot;,
                        &quot;7-3&quot;: &quot;#444444&quot;,
                        &quot;7-4&quot;: &quot;#444444&quot;,
                        &quot;7-5&quot;: &quot;#444444&quot;,
                        &quot;7-6&quot;: &quot;#444444&quot;,
                        &quot;7-7&quot;: &quot;#444444&quot;,
                        &quot;7-8&quot;: &quot;#444444&quot;,
                        &quot;7-9&quot;: &quot;#444444&quot;,
                        &quot;7-10&quot;: &quot;#444444&quot;,
                        &quot;7-11&quot;: &quot;#444444&quot;,
                        &quot;7-12&quot;: &quot;#444444&quot;,
                        &quot;7-13&quot;: &quot;#444444&quot;,
                        &quot;7-14&quot;: &quot;#444444&quot;,
                        &quot;7-15&quot;: &quot;#444444&quot;,
                        &quot;7-16&quot;: &quot;#444444&quot;,
                        &quot;7-17&quot;: &quot;#444444&quot;,
                        &quot;7-18&quot;: &quot;#444444&quot;,
                        &quot;7-19&quot;: &quot;#444444&quot;,
                        &quot;7-20&quot;: &quot;#444444&quot;,
                        &quot;7-21&quot;: &quot;#444444&quot;,
                        &quot;7-22&quot;: &quot;#444444&quot;,
                        &quot;7-23&quot;: &quot;#444444&quot;,
                        &quot;7-24&quot;: &quot;#444444&quot;,
                        &quot;7-25&quot;: &quot;#444444&quot;,
                        &quot;7-26&quot;: &quot;#444444&quot;,
                        &quot;7-27&quot;: &quot;#444444&quot;,
                        &quot;7-28&quot;: &quot;#444444&quot;,
                        &quot;8-2&quot;: &quot;#444444&quot;,
                        &quot;8-3&quot;: &quot;#444444&quot;,
                        &quot;8-4&quot;: &quot;#444444&quot;,
                        &quot;8-5&quot;: &quot;#444444&quot;,
                        &quot;8-6&quot;: &quot;#444444&quot;,
                        &quot;8-7&quot;: &quot;#444444&quot;,
                        &quot;8-8&quot;: &quot;#444444&quot;,
                        &quot;8-9&quot;: &quot;#444444&quot;,
                        &quot;8-10&quot;: &quot;#444444&quot;,
                        &quot;8-11&quot;: &quot;#444444&quot;,
                        &quot;8-12&quot;: &quot;#444444&quot;,
                        &quot;8-13&quot;: &quot;#444444&quot;,
                        &quot;8-14&quot;: &quot;#444444&quot;,
                        &quot;8-15&quot;: &quot;#444444&quot;,
                        &quot;8-16&quot;: &quot;#444444&quot;,
                        &quot;8-17&quot;: &quot;#444444&quot;,
                        &quot;8-18&quot;: &quot;#444444&quot;,
                        &quot;8-19&quot;: &quot;#444444&quot;,
                        &quot;8-20&quot;: &quot;#444444&quot;,
                        &quot;8-21&quot;: &quot;#444444&quot;,
                        &quot;8-22&quot;: &quot;#444444&quot;,
                        &quot;8-23&quot;: &quot;#444444&quot;,
                        &quot;8-24&quot;: &quot;#444444&quot;,
                        &quot;8-25&quot;: &quot;#444444&quot;,
                        &quot;8-26&quot;: &quot;#444444&quot;,
                        &quot;8-27&quot;: &quot;#444444&quot;,
                        &quot;8-28&quot;: &quot;#444444&quot;,
                        &quot;9-2&quot;: &quot;#444444&quot;,
                        &quot;9-3&quot;: &quot;#444444&quot;,
                        &quot;9-4&quot;: &quot;#444444&quot;,
                        &quot;9-5&quot;: &quot;#444444&quot;,
                        &quot;9-6&quot;: &quot;#444444&quot;,
                        &quot;9-7&quot;: &quot;#444444&quot;,
                        &quot;9-8&quot;: &quot;#444444&quot;,
                        &quot;9-9&quot;: &quot;#444444&quot;,
                        &quot;9-10&quot;: &quot;#444444&quot;,
                        &quot;9-11&quot;: &quot;#444444&quot;,
                        &quot;9-12&quot;: &quot;#444444&quot;,
                        &quot;9-13&quot;: &quot;#444444&quot;,
                        &quot;9-14&quot;: &quot;#444444&quot;,
                        &quot;9-15&quot;: &quot;#444444&quot;,
                        &quot;9-16&quot;: &quot;#444444&quot;,
                        &quot;9-17&quot;: &quot;#444444&quot;,
                        &quot;9-18&quot;: &quot;#444444&quot;,
                        &quot;9-19&quot;: &quot;#444444&quot;,
                        &quot;9-20&quot;: &quot;#444444&quot;,
                        &quot;9-21&quot;: &quot;#444444&quot;,
                        &quot;9-22&quot;: &quot;#444444&quot;,
                        &quot;9-23&quot;: &quot;#444444&quot;,
                        &quot;9-24&quot;: &quot;#444444&quot;,
                        &quot;9-25&quot;: &quot;#444444&quot;,
                        &quot;9-26&quot;: &quot;#444444&quot;,
                        &quot;9-27&quot;: &quot;#444444&quot;,
                        &quot;9-28&quot;: &quot;#444444&quot;,
                        &quot;10-2&quot;: &quot;#444444&quot;,
                        &quot;10-3&quot;: &quot;#444444&quot;,
                        &quot;10-4&quot;: &quot;#444444&quot;,
                        &quot;10-5&quot;: &quot;#444444&quot;,
                        &quot;10-6&quot;: &quot;#444444&quot;,
                        &quot;10-7&quot;: &quot;#444444&quot;,
                        &quot;10-8&quot;: &quot;#444444&quot;,
                        &quot;10-9&quot;: &quot;#444444&quot;,
                        &quot;10-10&quot;: &quot;#444444&quot;,
                        &quot;10-11&quot;: &quot;#444444&quot;,
                        &quot;10-12&quot;: &quot;#444444&quot;,
                        &quot;10-13&quot;: &quot;#444444&quot;,
                        &quot;10-14&quot;: &quot;#444444&quot;,
                        &quot;10-15&quot;: &quot;#444444&quot;,
                        &quot;10-16&quot;: &quot;#444444&quot;,
                        &quot;10-17&quot;: &quot;#444444&quot;,
                        &quot;10-18&quot;: &quot;#444444&quot;,
                        &quot;10-19&quot;: &quot;#444444&quot;,
                        &quot;10-20&quot;: &quot;#444444&quot;,
                        &quot;10-21&quot;: &quot;#444444&quot;,
                        &quot;10-22&quot;: &quot;#444444&quot;,
                        &quot;10-23&quot;: &quot;#444444&quot;,
                        &quot;10-24&quot;: &quot;#444444&quot;,
                        &quot;10-25&quot;: &quot;#444444&quot;,
                        &quot;10-26&quot;: &quot;#444444&quot;,
                        &quot;10-27&quot;: &quot;#444444&quot;,
                        &quot;10-28&quot;: &quot;#444444&quot;,
                        &quot;11-2&quot;: &quot;#444444&quot;,
                        &quot;11-3&quot;: &quot;#444444&quot;,
                        &quot;11-4&quot;: &quot;#444444&quot;,
                        &quot;11-5&quot;: &quot;#444444&quot;,
                        &quot;11-6&quot;: &quot;#444444&quot;,
                        &quot;11-7&quot;: &quot;#444444&quot;,
                        &quot;11-8&quot;: &quot;#444444&quot;,
                        &quot;11-9&quot;: &quot;#444444&quot;,
                        &quot;11-10&quot;: &quot;#444444&quot;,
                        &quot;11-11&quot;: &quot;#444444&quot;,
                        &quot;11-12&quot;: &quot;#444444&quot;,
                        &quot;11-13&quot;: &quot;#444444&quot;,
                        &quot;11-14&quot;: &quot;#444444&quot;,
                        &quot;11-15&quot;: &quot;#444444&quot;,
                        &quot;11-16&quot;: &quot;#444444&quot;,
                        &quot;11-17&quot;: &quot;#444444&quot;,
                        &quot;11-18&quot;: &quot;#444444&quot;,
                        &quot;11-19&quot;: &quot;#444444&quot;,
                        &quot;11-20&quot;: &quot;#444444&quot;,
                        &quot;11-21&quot;: &quot;#444444&quot;,
                        &quot;11-22&quot;: &quot;#444444&quot;,
                        &quot;11-23&quot;: &quot;#444444&quot;,
                        &quot;11-24&quot;: &quot;#444444&quot;,
                        &quot;11-25&quot;: &quot;#444444&quot;,
                        &quot;11-26&quot;: &quot;#444444&quot;,
                        &quot;11-27&quot;: &quot;#444444&quot;,
                        &quot;11-28&quot;: &quot;#444444&quot;,
                        &quot;12-2&quot;: &quot;#444444&quot;,
                        &quot;12-3&quot;: &quot;#444444&quot;,
                        &quot;12-4&quot;: &quot;#444444&quot;,
                        &quot;12-5&quot;: &quot;#444444&quot;,
                        &quot;12-6&quot;: &quot;#444444&quot;,
                        &quot;12-7&quot;: &quot;#444444&quot;,
                        &quot;12-8&quot;: &quot;#444444&quot;,
                        &quot;12-9&quot;: &quot;#444444&quot;,
                        &quot;12-10&quot;: &quot;#444444&quot;,
                        &quot;12-11&quot;: &quot;#444444&quot;,
                        &quot;12-12&quot;: &quot;#444444&quot;,
                        &quot;12-13&quot;: &quot;#444444&quot;,
                        &quot;12-14&quot;: &quot;#444444&quot;,
                        &quot;12-15&quot;: &quot;#444444&quot;,
                        &quot;12-16&quot;: &quot;#444444&quot;,
                        &quot;12-17&quot;: &quot;#444444&quot;,
                        &quot;12-18&quot;: &quot;#444444&quot;,
                        &quot;12-19&quot;: &quot;#444444&quot;,
                        &quot;12-20&quot;: &quot;#444444&quot;,
                        &quot;12-21&quot;: &quot;#444444&quot;,
                        &quot;12-22&quot;: &quot;#444444&quot;,
                        &quot;12-23&quot;: &quot;#444444&quot;,
                        &quot;12-24&quot;: &quot;#444444&quot;,
                        &quot;12-25&quot;: &quot;#444444&quot;,
                        &quot;12-26&quot;: &quot;#444444&quot;,
                        &quot;12-27&quot;: &quot;#444444&quot;,
                        &quot;12-28&quot;: &quot;#444444&quot;,
                        &quot;13-2&quot;: &quot;#444444&quot;,
                        &quot;13-3&quot;: &quot;#444444&quot;,
                        &quot;13-4&quot;: &quot;#444444&quot;,
                        &quot;13-5&quot;: &quot;#444444&quot;,
                        &quot;13-6&quot;: &quot;#444444&quot;,
                        &quot;13-7&quot;: &quot;#444444&quot;,
                        &quot;13-8&quot;: &quot;#444444&quot;,
                        &quot;13-9&quot;: &quot;#444444&quot;,
                        &quot;13-10&quot;: &quot;#444444&quot;,
                        &quot;13-11&quot;: &quot;#444444&quot;,
                        &quot;13-12&quot;: &quot;#444444&quot;,
                        &quot;13-13&quot;: &quot;#444444&quot;,
                        &quot;13-14&quot;: &quot;#444444&quot;,
                        &quot;13-15&quot;: &quot;#444444&quot;,
                        &quot;13-16&quot;: &quot;#444444&quot;,
                        &quot;13-17&quot;: &quot;#444444&quot;,
                        &quot;13-18&quot;: &quot;#444444&quot;,
                        &quot;13-19&quot;: &quot;#444444&quot;,
                        &quot;13-20&quot;: &quot;#444444&quot;,
                        &quot;13-21&quot;: &quot;#444444&quot;,
                        &quot;13-22&quot;: &quot;#444444&quot;,
                        &quot;13-23&quot;: &quot;#444444&quot;,
                        &quot;13-24&quot;: &quot;#444444&quot;,
                        &quot;13-25&quot;: &quot;#444444&quot;,
                        &quot;13-26&quot;: &quot;#444444&quot;,
                        &quot;13-27&quot;: &quot;#444444&quot;,
                        &quot;13-28&quot;: &quot;#444444&quot;,
                        &quot;14-2&quot;: &quot;#444444&quot;,
                        &quot;14-3&quot;: &quot;#444444&quot;,
                        &quot;14-4&quot;: &quot;#444444&quot;,
                        &quot;14-5&quot;: &quot;#444444&quot;,
                        &quot;14-6&quot;: &quot;#444444&quot;,
                        &quot;14-7&quot;: &quot;#444444&quot;,
                        &quot;14-8&quot;: &quot;#444444&quot;,
                        &quot;14-9&quot;: &quot;#444444&quot;,
                        &quot;14-10&quot;: &quot;#444444&quot;,
                        &quot;14-11&quot;: &quot;#444444&quot;,
                        &quot;14-12&quot;: &quot;#444444&quot;,
                        &quot;14-13&quot;: &quot;#444444&quot;,
                        &quot;14-14&quot;: &quot;#444444&quot;,
                        &quot;14-15&quot;: &quot;#444444&quot;,
                        &quot;14-16&quot;: &quot;#444444&quot;,
                        &quot;14-17&quot;: &quot;#444444&quot;,
                        &quot;14-18&quot;: &quot;#444444&quot;,
                        &quot;14-19&quot;: &quot;#444444&quot;,
                        &quot;14-20&quot;: &quot;#444444&quot;,
                        &quot;14-21&quot;: &quot;#444444&quot;,
                        &quot;14-22&quot;: &quot;#444444&quot;,
                        &quot;14-23&quot;: &quot;#444444&quot;,
                        &quot;14-24&quot;: &quot;#444444&quot;,
                        &quot;14-25&quot;: &quot;#444444&quot;,
                        &quot;14-26&quot;: &quot;#444444&quot;,
                        &quot;14-27&quot;: &quot;#444444&quot;,
                        &quot;14-28&quot;: &quot;#444444&quot;,
                        &quot;15-2&quot;: &quot;#444444&quot;,
                        &quot;15-3&quot;: &quot;#444444&quot;,
                        &quot;15-4&quot;: &quot;#444444&quot;,
                        &quot;15-5&quot;: &quot;#444444&quot;,
                        &quot;15-6&quot;: &quot;#444444&quot;,
                        &quot;15-7&quot;: &quot;#444444&quot;,
                        &quot;15-8&quot;: &quot;#444444&quot;,
                        &quot;15-9&quot;: &quot;#444444&quot;,
                        &quot;15-10&quot;: &quot;#444444&quot;,
                        &quot;15-11&quot;: &quot;#444444&quot;,
                        &quot;15-12&quot;: &quot;#444444&quot;,
                        &quot;15-13&quot;: &quot;#444444&quot;,
                        &quot;15-14&quot;: &quot;#444444&quot;,
                        &quot;15-15&quot;: &quot;#444444&quot;,
                        &quot;15-16&quot;: &quot;#444444&quot;,
                        &quot;15-17&quot;: &quot;#444444&quot;,
                        &quot;15-18&quot;: &quot;#444444&quot;,
                        &quot;15-19&quot;: &quot;#444444&quot;,
                        &quot;15-20&quot;: &quot;#444444&quot;,
                        &quot;15-21&quot;: &quot;#444444&quot;,
                        &quot;15-22&quot;: &quot;#444444&quot;,
                        &quot;15-23&quot;: &quot;#444444&quot;,
                        &quot;15-24&quot;: &quot;#444444&quot;,
                        &quot;15-25&quot;: &quot;#444444&quot;,
                        &quot;15-26&quot;: &quot;#444444&quot;,
                        &quot;15-27&quot;: &quot;#444444&quot;,
                        &quot;15-28&quot;: &quot;#444444&quot;,
                        &quot;16-2&quot;: &quot;#444444&quot;,
                        &quot;16-3&quot;: &quot;#444444&quot;,
                        &quot;16-4&quot;: &quot;#444444&quot;,
                        &quot;16-5&quot;: &quot;#444444&quot;,
                        &quot;16-6&quot;: &quot;#444444&quot;,
                        &quot;16-7&quot;: &quot;#444444&quot;,
                        &quot;16-8&quot;: &quot;#444444&quot;,
                        &quot;16-9&quot;: &quot;#444444&quot;,
                        &quot;16-10&quot;: &quot;#444444&quot;,
                        &quot;16-11&quot;: &quot;#444444&quot;,
                        &quot;16-12&quot;: &quot;#444444&quot;,
                        &quot;16-13&quot;: &quot;#444444&quot;,
                        &quot;16-14&quot;: &quot;#444444&quot;,
                        &quot;16-15&quot;: &quot;#444444&quot;,
                        &quot;16-16&quot;: &quot;#444444&quot;,
                        &quot;16-17&quot;: &quot;#444444&quot;,
                        &quot;16-18&quot;: &quot;#444444&quot;,
                        &quot;16-19&quot;: &quot;#444444&quot;,
                        &quot;16-20&quot;: &quot;#444444&quot;,
                        &quot;16-21&quot;: &quot;#444444&quot;,
                        &quot;16-22&quot;: &quot;#444444&quot;,
                        &quot;16-23&quot;: &quot;#444444&quot;,
                        &quot;16-24&quot;: &quot;#444444&quot;,
                        &quot;16-25&quot;: &quot;#444444&quot;,
                        &quot;16-26&quot;: &quot;#444444&quot;,
                        &quot;16-27&quot;: &quot;#444444&quot;,
                        &quot;16-28&quot;: &quot;#444444&quot;,
                        &quot;17-2&quot;: &quot;#444444&quot;,
                        &quot;17-3&quot;: &quot;#444444&quot;,
                        &quot;17-4&quot;: &quot;#444444&quot;,
                        &quot;17-5&quot;: &quot;#444444&quot;,
                        &quot;17-6&quot;: &quot;#444444&quot;,
                        &quot;17-7&quot;: &quot;#444444&quot;,
                        &quot;17-8&quot;: &quot;#444444&quot;,
                        &quot;17-9&quot;: &quot;#444444&quot;,
                        &quot;17-10&quot;: &quot;#444444&quot;,
                        &quot;17-11&quot;: &quot;#444444&quot;,
                        &quot;17-12&quot;: &quot;#444444&quot;,
                        &quot;17-13&quot;: &quot;#444444&quot;,
                        &quot;17-14&quot;: &quot;#444444&quot;,
                        &quot;17-15&quot;: &quot;#444444&quot;,
                        &quot;17-16&quot;: &quot;#444444&quot;,
                        &quot;17-17&quot;: &quot;#444444&quot;,
                        &quot;17-18&quot;: &quot;#444444&quot;,
                        &quot;17-19&quot;: &quot;#444444&quot;,
                        &quot;17-20&quot;: &quot;#444444&quot;,
                        &quot;17-21&quot;: &quot;#444444&quot;,
                        &quot;17-22&quot;: &quot;#444444&quot;,
                        &quot;17-23&quot;: &quot;#444444&quot;,
                        &quot;17-24&quot;: &quot;#444444&quot;,
                        &quot;17-25&quot;: &quot;#444444&quot;,
                        &quot;17-26&quot;: &quot;#444444&quot;,
                        &quot;17-27&quot;: &quot;#444444&quot;,
                        &quot;17-28&quot;: &quot;#444444&quot;,
                        &quot;18-2&quot;: &quot;#444444&quot;,
                        &quot;18-3&quot;: &quot;#444444&quot;,
                        &quot;18-4&quot;: &quot;#444444&quot;,
                        &quot;18-5&quot;: &quot;#444444&quot;,
                        &quot;18-6&quot;: &quot;#444444&quot;,
                        &quot;18-7&quot;: &quot;#444444&quot;,
                        &quot;18-8&quot;: &quot;#444444&quot;,
                        &quot;18-9&quot;: &quot;#444444&quot;,
                        &quot;18-10&quot;: &quot;#444444&quot;,
                        &quot;18-11&quot;: &quot;#444444&quot;,
                        &quot;18-12&quot;: &quot;#444444&quot;,
                        &quot;18-13&quot;: &quot;#444444&quot;,
                        &quot;18-14&quot;: &quot;#444444&quot;,
                        &quot;18-15&quot;: &quot;#444444&quot;,
                        &quot;18-16&quot;: &quot;#444444&quot;,
                        &quot;18-17&quot;: &quot;#444444&quot;,
                        &quot;18-18&quot;: &quot;#444444&quot;,
                        &quot;18-19&quot;: &quot;#444444&quot;,
                        &quot;18-20&quot;: &quot;#444444&quot;,
                        &quot;18-21&quot;: &quot;#444444&quot;,
                        &quot;18-22&quot;: &quot;#444444&quot;,
                        &quot;18-23&quot;: &quot;#444444&quot;,
                        &quot;18-24&quot;: &quot;#444444&quot;,
                        &quot;18-25&quot;: &quot;#444444&quot;,
                        &quot;18-26&quot;: &quot;#444444&quot;,
                        &quot;18-27&quot;: &quot;#444444&quot;,
                        &quot;18-28&quot;: &quot;#444444&quot;
                    },
                    &quot;wall_color&quot;: &quot;#444444&quot;,
                    &quot;wall_thickness&quot;: 23,
                    &quot;floor_texture_id&quot;: 8,
                    &quot;starting_point_row&quot;: 14,
                    &quot;starting_point_col&quot;: 23,
                    &quot;floor_accepted&quot;: true,
                    &quot;door_asset_id&quot;: 1,
                    &quot;door_position&quot;: {
                        &quot;row&quot;: 13,
                        &quot;col&quot;: 3
                    },
                    &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 4,
            &quot;user_id&quot;: 2,
            &quot;name&quot;: &quot;Zagadka Egipskiej Piramidy&quot;,
            &quot;description&quot;: &quot;Wejdź do starożytnej piramidy i odkryj jej ukryte komnaty pełne starożytnych zagadek.&quot;,
            &quot;thumbnail_url&quot;: &quot;/storage/escape-rooms/thumbnails/rl-app-2.png&quot;,
            &quot;soundtrack_url&quot;: &quot;/storage/escape-rooms/soundtracks/a7e4d623-fcef-4666-a4b9-f8925515e479.mp3&quot;,
            &quot;is_public&quot;: true,
            &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;moderator&quot;,
                &quot;email&quot;: &quot;mod@riddlelab.world&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;last_login_at&quot;: &quot;2026-02-13 22:04:23&quot;,
                &quot;role&quot;: &quot;moderator&quot;,
                &quot;avatar_url&quot;: null,
                &quot;player_configuration&quot;: &quot;{\&quot;avatar\&quot;:{\&quot;skin_color\&quot;:\&quot;#e8beac\&quot;,\&quot;hair_color\&quot;:\&quot;#000000\&quot;,\&quot;eye_color\&quot;:\&quot;#6b8e23\&quot;,\&quot;outfit_color\&quot;:\&quot;#b22222\&quot;}}&quot;,
                &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;
            },
            &quot;rooms&quot;: [
                {
                    &quot;id&quot;: 4,
                    &quot;escape_room_id&quot;: 4,
                    &quot;grid_data&quot;: {
                        &quot;2-2&quot;: &quot;1&quot;,
                        &quot;2-3&quot;: &quot;1&quot;,
                        &quot;2-4&quot;: &quot;1&quot;,
                        &quot;2-5&quot;: &quot;1&quot;,
                        &quot;2-6&quot;: &quot;1&quot;,
                        &quot;2-7&quot;: &quot;1&quot;,
                        &quot;2-8&quot;: &quot;1&quot;,
                        &quot;2-9&quot;: &quot;1&quot;,
                        &quot;2-10&quot;: &quot;1&quot;,
                        &quot;2-11&quot;: &quot;1&quot;,
                        &quot;2-12&quot;: &quot;1&quot;,
                        &quot;2-13&quot;: &quot;1&quot;,
                        &quot;2-14&quot;: &quot;1&quot;,
                        &quot;2-15&quot;: &quot;1&quot;,
                        &quot;2-16&quot;: &quot;1&quot;,
                        &quot;2-17&quot;: &quot;1&quot;,
                        &quot;2-18&quot;: &quot;1&quot;,
                        &quot;2-19&quot;: &quot;1&quot;,
                        &quot;2-20&quot;: &quot;1&quot;,
                        &quot;2-21&quot;: &quot;1&quot;,
                        &quot;2-22&quot;: &quot;1&quot;,
                        &quot;2-23&quot;: &quot;1&quot;,
                        &quot;2-24&quot;: &quot;1&quot;,
                        &quot;2-25&quot;: &quot;1&quot;,
                        &quot;2-26&quot;: &quot;1&quot;,
                        &quot;2-27&quot;: &quot;1&quot;,
                        &quot;2-28&quot;: &quot;1&quot;,
                        &quot;3-2&quot;: &quot;1&quot;,
                        &quot;3-3&quot;: &quot;1&quot;,
                        &quot;3-4&quot;: &quot;1&quot;,
                        &quot;3-5&quot;: &quot;1&quot;,
                        &quot;3-6&quot;: &quot;1&quot;,
                        &quot;3-7&quot;: &quot;1&quot;,
                        &quot;3-8&quot;: &quot;1&quot;,
                        &quot;3-9&quot;: &quot;1&quot;,
                        &quot;3-10&quot;: &quot;1&quot;,
                        &quot;3-11&quot;: &quot;1&quot;,
                        &quot;3-12&quot;: &quot;1&quot;,
                        &quot;3-13&quot;: &quot;1&quot;,
                        &quot;3-14&quot;: &quot;1&quot;,
                        &quot;3-15&quot;: &quot;1&quot;,
                        &quot;3-16&quot;: &quot;1&quot;,
                        &quot;3-17&quot;: &quot;1&quot;,
                        &quot;3-18&quot;: &quot;1&quot;,
                        &quot;3-19&quot;: &quot;1&quot;,
                        &quot;3-20&quot;: &quot;1&quot;,
                        &quot;3-21&quot;: &quot;1&quot;,
                        &quot;3-22&quot;: &quot;1&quot;,
                        &quot;3-23&quot;: &quot;1&quot;,
                        &quot;3-24&quot;: &quot;1&quot;,
                        &quot;3-25&quot;: &quot;1&quot;,
                        &quot;3-26&quot;: &quot;1&quot;,
                        &quot;3-27&quot;: &quot;1&quot;,
                        &quot;3-28&quot;: &quot;1&quot;,
                        &quot;4-2&quot;: &quot;1&quot;,
                        &quot;4-3&quot;: &quot;1&quot;,
                        &quot;4-4&quot;: &quot;1&quot;,
                        &quot;4-5&quot;: &quot;1&quot;,
                        &quot;4-6&quot;: &quot;1&quot;,
                        &quot;4-7&quot;: &quot;1&quot;,
                        &quot;4-8&quot;: &quot;1&quot;,
                        &quot;4-9&quot;: &quot;1&quot;,
                        &quot;4-10&quot;: &quot;1&quot;,
                        &quot;4-11&quot;: &quot;1&quot;,
                        &quot;4-12&quot;: &quot;1&quot;,
                        &quot;4-13&quot;: &quot;1&quot;,
                        &quot;4-14&quot;: &quot;1&quot;,
                        &quot;4-15&quot;: &quot;1&quot;,
                        &quot;4-16&quot;: &quot;1&quot;,
                        &quot;4-17&quot;: &quot;1&quot;,
                        &quot;4-18&quot;: &quot;1&quot;,
                        &quot;4-19&quot;: &quot;1&quot;,
                        &quot;4-20&quot;: &quot;1&quot;,
                        &quot;4-21&quot;: &quot;1&quot;,
                        &quot;4-22&quot;: &quot;1&quot;,
                        &quot;4-23&quot;: &quot;1&quot;,
                        &quot;4-24&quot;: &quot;1&quot;,
                        &quot;4-25&quot;: &quot;1&quot;,
                        &quot;4-26&quot;: &quot;1&quot;,
                        &quot;4-27&quot;: &quot;1&quot;,
                        &quot;4-28&quot;: &quot;1&quot;,
                        &quot;5-2&quot;: &quot;1&quot;,
                        &quot;5-3&quot;: &quot;1&quot;,
                        &quot;5-4&quot;: &quot;1&quot;,
                        &quot;5-5&quot;: &quot;1&quot;,
                        &quot;5-6&quot;: &quot;1&quot;,
                        &quot;5-7&quot;: &quot;1&quot;,
                        &quot;5-8&quot;: &quot;1&quot;,
                        &quot;5-9&quot;: &quot;1&quot;,
                        &quot;5-10&quot;: &quot;1&quot;,
                        &quot;5-11&quot;: &quot;1&quot;,
                        &quot;5-12&quot;: &quot;1&quot;,
                        &quot;5-13&quot;: &quot;1&quot;,
                        &quot;5-14&quot;: &quot;1&quot;,
                        &quot;5-15&quot;: &quot;1&quot;,
                        &quot;5-16&quot;: &quot;1&quot;,
                        &quot;5-17&quot;: &quot;1&quot;,
                        &quot;5-18&quot;: &quot;1&quot;,
                        &quot;5-19&quot;: &quot;1&quot;,
                        &quot;5-20&quot;: &quot;1&quot;,
                        &quot;5-21&quot;: &quot;1&quot;,
                        &quot;5-22&quot;: &quot;1&quot;,
                        &quot;5-23&quot;: &quot;1&quot;,
                        &quot;5-24&quot;: &quot;1&quot;,
                        &quot;5-25&quot;: &quot;1&quot;,
                        &quot;5-26&quot;: &quot;1&quot;,
                        &quot;5-27&quot;: &quot;1&quot;,
                        &quot;5-28&quot;: &quot;1&quot;,
                        &quot;6-2&quot;: &quot;1&quot;,
                        &quot;6-3&quot;: &quot;1&quot;,
                        &quot;6-4&quot;: &quot;1&quot;,
                        &quot;6-5&quot;: &quot;1&quot;,
                        &quot;6-6&quot;: &quot;1&quot;,
                        &quot;6-7&quot;: &quot;1&quot;,
                        &quot;6-8&quot;: &quot;1&quot;,
                        &quot;6-9&quot;: &quot;1&quot;,
                        &quot;6-10&quot;: &quot;1&quot;,
                        &quot;6-11&quot;: &quot;1&quot;,
                        &quot;6-12&quot;: &quot;1&quot;,
                        &quot;6-13&quot;: &quot;1&quot;,
                        &quot;6-14&quot;: &quot;1&quot;,
                        &quot;6-15&quot;: &quot;1&quot;,
                        &quot;6-16&quot;: &quot;1&quot;,
                        &quot;6-17&quot;: &quot;1&quot;,
                        &quot;6-18&quot;: &quot;1&quot;,
                        &quot;6-19&quot;: &quot;1&quot;,
                        &quot;6-20&quot;: &quot;1&quot;,
                        &quot;6-21&quot;: &quot;1&quot;,
                        &quot;6-22&quot;: &quot;1&quot;,
                        &quot;6-23&quot;: &quot;1&quot;,
                        &quot;6-24&quot;: &quot;1&quot;,
                        &quot;6-25&quot;: &quot;1&quot;,
                        &quot;6-26&quot;: &quot;1&quot;,
                        &quot;6-27&quot;: &quot;1&quot;,
                        &quot;6-28&quot;: &quot;1&quot;,
                        &quot;7-2&quot;: &quot;1&quot;,
                        &quot;7-3&quot;: &quot;1&quot;,
                        &quot;7-4&quot;: &quot;1&quot;,
                        &quot;7-5&quot;: &quot;1&quot;,
                        &quot;7-6&quot;: &quot;1&quot;,
                        &quot;7-7&quot;: &quot;1&quot;,
                        &quot;7-8&quot;: &quot;1&quot;,
                        &quot;7-9&quot;: &quot;1&quot;,
                        &quot;7-10&quot;: &quot;1&quot;,
                        &quot;7-11&quot;: &quot;1&quot;,
                        &quot;7-12&quot;: &quot;1&quot;,
                        &quot;7-13&quot;: &quot;1&quot;,
                        &quot;7-14&quot;: &quot;1&quot;,
                        &quot;7-15&quot;: &quot;1&quot;,
                        &quot;7-16&quot;: &quot;1&quot;,
                        &quot;7-17&quot;: &quot;1&quot;,
                        &quot;7-18&quot;: &quot;1&quot;,
                        &quot;7-19&quot;: &quot;1&quot;,
                        &quot;7-20&quot;: &quot;1&quot;,
                        &quot;7-21&quot;: &quot;1&quot;,
                        &quot;7-22&quot;: &quot;1&quot;,
                        &quot;7-23&quot;: &quot;1&quot;,
                        &quot;7-24&quot;: &quot;1&quot;,
                        &quot;7-25&quot;: &quot;1&quot;,
                        &quot;7-26&quot;: &quot;1&quot;,
                        &quot;7-27&quot;: &quot;1&quot;,
                        &quot;7-28&quot;: &quot;1&quot;,
                        &quot;8-2&quot;: &quot;1&quot;,
                        &quot;8-3&quot;: &quot;1&quot;,
                        &quot;8-4&quot;: &quot;1&quot;,
                        &quot;8-5&quot;: &quot;1&quot;,
                        &quot;8-6&quot;: &quot;1&quot;,
                        &quot;8-7&quot;: &quot;1&quot;,
                        &quot;8-8&quot;: &quot;1&quot;,
                        &quot;8-9&quot;: &quot;1&quot;,
                        &quot;8-10&quot;: &quot;1&quot;,
                        &quot;8-11&quot;: &quot;1&quot;,
                        &quot;8-12&quot;: &quot;1&quot;,
                        &quot;8-13&quot;: &quot;1&quot;,
                        &quot;8-14&quot;: &quot;1&quot;,
                        &quot;8-15&quot;: &quot;1&quot;,
                        &quot;8-16&quot;: &quot;1&quot;,
                        &quot;8-17&quot;: &quot;1&quot;,
                        &quot;8-18&quot;: &quot;1&quot;,
                        &quot;8-19&quot;: &quot;1&quot;,
                        &quot;8-20&quot;: &quot;1&quot;,
                        &quot;8-21&quot;: &quot;1&quot;,
                        &quot;8-22&quot;: &quot;1&quot;,
                        &quot;8-23&quot;: &quot;1&quot;,
                        &quot;8-24&quot;: &quot;1&quot;,
                        &quot;8-25&quot;: &quot;1&quot;,
                        &quot;8-26&quot;: &quot;1&quot;,
                        &quot;8-27&quot;: &quot;1&quot;,
                        &quot;8-28&quot;: &quot;1&quot;,
                        &quot;9-2&quot;: &quot;1&quot;,
                        &quot;9-3&quot;: &quot;1&quot;,
                        &quot;9-4&quot;: &quot;1&quot;,
                        &quot;9-5&quot;: &quot;1&quot;,
                        &quot;9-6&quot;: &quot;1&quot;,
                        &quot;9-7&quot;: &quot;1&quot;,
                        &quot;9-8&quot;: &quot;1&quot;,
                        &quot;9-9&quot;: &quot;1&quot;,
                        &quot;9-10&quot;: &quot;1&quot;,
                        &quot;9-11&quot;: &quot;1&quot;,
                        &quot;9-12&quot;: &quot;1&quot;,
                        &quot;9-13&quot;: &quot;1&quot;,
                        &quot;9-14&quot;: &quot;1&quot;,
                        &quot;9-15&quot;: &quot;1&quot;,
                        &quot;9-16&quot;: &quot;1&quot;,
                        &quot;9-17&quot;: &quot;1&quot;,
                        &quot;9-18&quot;: &quot;1&quot;,
                        &quot;9-19&quot;: &quot;1&quot;,
                        &quot;9-20&quot;: &quot;1&quot;,
                        &quot;9-21&quot;: &quot;1&quot;,
                        &quot;9-22&quot;: &quot;1&quot;,
                        &quot;9-23&quot;: &quot;1&quot;,
                        &quot;9-24&quot;: &quot;1&quot;,
                        &quot;9-25&quot;: &quot;1&quot;,
                        &quot;9-26&quot;: &quot;1&quot;,
                        &quot;9-27&quot;: &quot;1&quot;,
                        &quot;9-28&quot;: &quot;1&quot;,
                        &quot;10-2&quot;: &quot;1&quot;,
                        &quot;10-3&quot;: &quot;1&quot;,
                        &quot;10-4&quot;: &quot;1&quot;,
                        &quot;10-5&quot;: &quot;1&quot;,
                        &quot;10-6&quot;: &quot;1&quot;,
                        &quot;10-7&quot;: &quot;1&quot;,
                        &quot;10-8&quot;: &quot;1&quot;,
                        &quot;10-9&quot;: &quot;1&quot;,
                        &quot;10-10&quot;: &quot;1&quot;,
                        &quot;10-11&quot;: &quot;1&quot;,
                        &quot;10-12&quot;: &quot;1&quot;,
                        &quot;10-13&quot;: &quot;1&quot;,
                        &quot;10-14&quot;: &quot;1&quot;,
                        &quot;10-15&quot;: &quot;1&quot;,
                        &quot;10-16&quot;: &quot;1&quot;,
                        &quot;10-17&quot;: &quot;1&quot;,
                        &quot;10-18&quot;: &quot;1&quot;,
                        &quot;10-19&quot;: &quot;1&quot;,
                        &quot;10-20&quot;: &quot;1&quot;,
                        &quot;10-21&quot;: &quot;1&quot;,
                        &quot;10-22&quot;: &quot;1&quot;,
                        &quot;10-23&quot;: &quot;1&quot;,
                        &quot;10-24&quot;: &quot;1&quot;,
                        &quot;10-25&quot;: &quot;1&quot;,
                        &quot;10-26&quot;: &quot;1&quot;,
                        &quot;10-27&quot;: &quot;1&quot;,
                        &quot;10-28&quot;: &quot;1&quot;,
                        &quot;11-2&quot;: &quot;1&quot;,
                        &quot;11-3&quot;: &quot;1&quot;,
                        &quot;11-4&quot;: &quot;1&quot;,
                        &quot;11-5&quot;: &quot;1&quot;,
                        &quot;11-6&quot;: &quot;1&quot;,
                        &quot;11-7&quot;: &quot;1&quot;,
                        &quot;11-8&quot;: &quot;1&quot;,
                        &quot;11-9&quot;: &quot;1&quot;,
                        &quot;11-10&quot;: &quot;1&quot;,
                        &quot;11-11&quot;: &quot;1&quot;,
                        &quot;11-12&quot;: &quot;1&quot;,
                        &quot;11-13&quot;: &quot;1&quot;,
                        &quot;11-14&quot;: &quot;1&quot;,
                        &quot;11-15&quot;: &quot;1&quot;,
                        &quot;11-16&quot;: &quot;1&quot;,
                        &quot;11-17&quot;: &quot;1&quot;,
                        &quot;11-18&quot;: &quot;1&quot;,
                        &quot;11-19&quot;: &quot;1&quot;,
                        &quot;11-20&quot;: &quot;1&quot;,
                        &quot;11-21&quot;: &quot;1&quot;,
                        &quot;11-22&quot;: &quot;1&quot;,
                        &quot;11-23&quot;: &quot;1&quot;,
                        &quot;11-24&quot;: &quot;1&quot;,
                        &quot;11-25&quot;: &quot;1&quot;,
                        &quot;11-26&quot;: &quot;1&quot;,
                        &quot;11-27&quot;: &quot;1&quot;,
                        &quot;11-28&quot;: &quot;1&quot;,
                        &quot;12-2&quot;: &quot;1&quot;,
                        &quot;12-3&quot;: &quot;1&quot;,
                        &quot;12-4&quot;: &quot;1&quot;,
                        &quot;12-5&quot;: &quot;1&quot;,
                        &quot;12-6&quot;: &quot;1&quot;,
                        &quot;12-7&quot;: &quot;1&quot;,
                        &quot;12-8&quot;: &quot;1&quot;,
                        &quot;12-9&quot;: &quot;1&quot;,
                        &quot;12-10&quot;: &quot;1&quot;,
                        &quot;12-11&quot;: &quot;1&quot;,
                        &quot;12-12&quot;: &quot;1&quot;,
                        &quot;12-13&quot;: &quot;1&quot;,
                        &quot;12-14&quot;: &quot;1&quot;,
                        &quot;12-15&quot;: &quot;1&quot;,
                        &quot;12-16&quot;: &quot;1&quot;,
                        &quot;12-17&quot;: &quot;1&quot;,
                        &quot;12-18&quot;: &quot;1&quot;,
                        &quot;12-19&quot;: &quot;1&quot;,
                        &quot;12-20&quot;: &quot;1&quot;,
                        &quot;12-21&quot;: &quot;1&quot;,
                        &quot;12-22&quot;: &quot;1&quot;,
                        &quot;12-23&quot;: &quot;1&quot;,
                        &quot;12-24&quot;: &quot;1&quot;,
                        &quot;12-25&quot;: &quot;1&quot;,
                        &quot;12-26&quot;: &quot;1&quot;,
                        &quot;12-27&quot;: &quot;1&quot;,
                        &quot;12-28&quot;: &quot;1&quot;,
                        &quot;13-2&quot;: &quot;1&quot;,
                        &quot;13-3&quot;: &quot;1&quot;,
                        &quot;13-4&quot;: &quot;1&quot;,
                        &quot;13-5&quot;: &quot;1&quot;,
                        &quot;13-6&quot;: &quot;1&quot;,
                        &quot;13-7&quot;: &quot;1&quot;,
                        &quot;13-8&quot;: &quot;1&quot;,
                        &quot;13-9&quot;: &quot;1&quot;,
                        &quot;13-10&quot;: &quot;1&quot;,
                        &quot;13-11&quot;: &quot;1&quot;,
                        &quot;13-12&quot;: &quot;1&quot;,
                        &quot;13-13&quot;: &quot;1&quot;,
                        &quot;13-14&quot;: &quot;1&quot;,
                        &quot;13-15&quot;: &quot;1&quot;,
                        &quot;13-16&quot;: &quot;1&quot;,
                        &quot;13-17&quot;: &quot;1&quot;,
                        &quot;13-18&quot;: &quot;1&quot;,
                        &quot;13-19&quot;: &quot;1&quot;,
                        &quot;13-20&quot;: &quot;1&quot;,
                        &quot;13-21&quot;: &quot;1&quot;,
                        &quot;13-22&quot;: &quot;1&quot;,
                        &quot;13-23&quot;: &quot;1&quot;,
                        &quot;13-24&quot;: &quot;1&quot;,
                        &quot;13-25&quot;: &quot;1&quot;,
                        &quot;13-26&quot;: &quot;1&quot;,
                        &quot;13-27&quot;: &quot;1&quot;,
                        &quot;13-28&quot;: &quot;1&quot;,
                        &quot;14-2&quot;: &quot;1&quot;,
                        &quot;14-3&quot;: &quot;1&quot;,
                        &quot;14-4&quot;: &quot;1&quot;,
                        &quot;14-5&quot;: &quot;1&quot;,
                        &quot;14-6&quot;: &quot;1&quot;,
                        &quot;14-7&quot;: &quot;1&quot;,
                        &quot;14-8&quot;: &quot;1&quot;,
                        &quot;14-9&quot;: &quot;1&quot;,
                        &quot;14-10&quot;: &quot;1&quot;,
                        &quot;14-11&quot;: &quot;1&quot;,
                        &quot;14-12&quot;: &quot;1&quot;,
                        &quot;14-13&quot;: &quot;1&quot;,
                        &quot;14-14&quot;: &quot;1&quot;,
                        &quot;14-15&quot;: &quot;1&quot;,
                        &quot;14-16&quot;: &quot;1&quot;,
                        &quot;14-17&quot;: &quot;1&quot;,
                        &quot;14-18&quot;: &quot;1&quot;,
                        &quot;14-19&quot;: &quot;1&quot;,
                        &quot;14-20&quot;: &quot;1&quot;,
                        &quot;14-21&quot;: &quot;1&quot;,
                        &quot;14-22&quot;: &quot;1&quot;,
                        &quot;14-23&quot;: &quot;1&quot;,
                        &quot;14-24&quot;: &quot;1&quot;,
                        &quot;14-25&quot;: &quot;1&quot;,
                        &quot;14-26&quot;: &quot;1&quot;,
                        &quot;14-27&quot;: &quot;1&quot;,
                        &quot;14-28&quot;: &quot;1&quot;,
                        &quot;15-2&quot;: &quot;1&quot;,
                        &quot;15-3&quot;: &quot;1&quot;,
                        &quot;15-4&quot;: &quot;1&quot;,
                        &quot;15-5&quot;: &quot;1&quot;,
                        &quot;15-6&quot;: &quot;1&quot;,
                        &quot;15-7&quot;: &quot;1&quot;,
                        &quot;15-8&quot;: &quot;1&quot;,
                        &quot;15-9&quot;: &quot;1&quot;,
                        &quot;15-10&quot;: &quot;1&quot;,
                        &quot;15-11&quot;: &quot;1&quot;,
                        &quot;15-12&quot;: &quot;1&quot;,
                        &quot;15-13&quot;: &quot;1&quot;,
                        &quot;15-14&quot;: &quot;1&quot;,
                        &quot;15-15&quot;: &quot;1&quot;,
                        &quot;15-16&quot;: &quot;1&quot;,
                        &quot;15-17&quot;: &quot;1&quot;,
                        &quot;15-18&quot;: &quot;1&quot;,
                        &quot;15-19&quot;: &quot;1&quot;,
                        &quot;15-20&quot;: &quot;1&quot;,
                        &quot;15-21&quot;: &quot;1&quot;,
                        &quot;15-22&quot;: &quot;1&quot;,
                        &quot;15-23&quot;: &quot;1&quot;,
                        &quot;15-24&quot;: &quot;1&quot;,
                        &quot;15-25&quot;: &quot;1&quot;,
                        &quot;15-26&quot;: &quot;1&quot;,
                        &quot;15-27&quot;: &quot;1&quot;,
                        &quot;15-28&quot;: &quot;1&quot;,
                        &quot;16-2&quot;: &quot;1&quot;,
                        &quot;16-3&quot;: &quot;1&quot;,
                        &quot;16-4&quot;: &quot;1&quot;,
                        &quot;16-5&quot;: &quot;1&quot;,
                        &quot;16-6&quot;: &quot;1&quot;,
                        &quot;16-7&quot;: &quot;1&quot;,
                        &quot;16-8&quot;: &quot;1&quot;,
                        &quot;16-9&quot;: &quot;1&quot;,
                        &quot;16-10&quot;: &quot;1&quot;,
                        &quot;16-11&quot;: &quot;1&quot;,
                        &quot;16-12&quot;: &quot;1&quot;,
                        &quot;16-13&quot;: &quot;1&quot;,
                        &quot;16-14&quot;: &quot;1&quot;,
                        &quot;16-15&quot;: &quot;1&quot;,
                        &quot;16-16&quot;: &quot;1&quot;,
                        &quot;16-17&quot;: &quot;1&quot;,
                        &quot;16-18&quot;: &quot;1&quot;,
                        &quot;16-19&quot;: &quot;1&quot;,
                        &quot;16-20&quot;: &quot;1&quot;,
                        &quot;16-21&quot;: &quot;1&quot;,
                        &quot;16-22&quot;: &quot;1&quot;,
                        &quot;16-23&quot;: &quot;1&quot;,
                        &quot;16-24&quot;: &quot;1&quot;,
                        &quot;16-25&quot;: &quot;1&quot;,
                        &quot;16-26&quot;: &quot;1&quot;,
                        &quot;16-27&quot;: &quot;1&quot;,
                        &quot;16-28&quot;: &quot;1&quot;,
                        &quot;17-2&quot;: &quot;1&quot;,
                        &quot;17-3&quot;: &quot;1&quot;,
                        &quot;17-4&quot;: &quot;1&quot;,
                        &quot;17-5&quot;: &quot;1&quot;,
                        &quot;17-6&quot;: &quot;1&quot;,
                        &quot;17-7&quot;: &quot;1&quot;,
                        &quot;17-8&quot;: &quot;1&quot;,
                        &quot;17-9&quot;: &quot;1&quot;,
                        &quot;17-10&quot;: &quot;1&quot;,
                        &quot;17-11&quot;: &quot;1&quot;,
                        &quot;17-12&quot;: &quot;1&quot;,
                        &quot;17-13&quot;: &quot;1&quot;,
                        &quot;17-14&quot;: &quot;1&quot;,
                        &quot;17-15&quot;: &quot;1&quot;,
                        &quot;17-16&quot;: &quot;1&quot;,
                        &quot;17-17&quot;: &quot;1&quot;,
                        &quot;17-18&quot;: &quot;1&quot;,
                        &quot;17-19&quot;: &quot;1&quot;,
                        &quot;17-20&quot;: &quot;1&quot;,
                        &quot;17-21&quot;: &quot;1&quot;,
                        &quot;17-22&quot;: &quot;1&quot;,
                        &quot;17-23&quot;: &quot;1&quot;,
                        &quot;17-24&quot;: &quot;1&quot;,
                        &quot;17-25&quot;: &quot;1&quot;,
                        &quot;17-26&quot;: &quot;1&quot;,
                        &quot;17-27&quot;: &quot;1&quot;,
                        &quot;17-28&quot;: &quot;1&quot;,
                        &quot;18-2&quot;: &quot;1&quot;,
                        &quot;18-3&quot;: &quot;1&quot;,
                        &quot;18-4&quot;: &quot;1&quot;,
                        &quot;18-5&quot;: &quot;1&quot;,
                        &quot;18-6&quot;: &quot;1&quot;,
                        &quot;18-7&quot;: &quot;1&quot;,
                        &quot;18-8&quot;: &quot;1&quot;,
                        &quot;18-9&quot;: &quot;1&quot;,
                        &quot;18-10&quot;: &quot;1&quot;,
                        &quot;18-11&quot;: &quot;1&quot;,
                        &quot;18-12&quot;: &quot;1&quot;,
                        &quot;18-13&quot;: &quot;1&quot;,
                        &quot;18-14&quot;: &quot;1&quot;,
                        &quot;18-15&quot;: &quot;1&quot;,
                        &quot;18-16&quot;: &quot;1&quot;,
                        &quot;18-17&quot;: &quot;1&quot;,
                        &quot;18-18&quot;: &quot;1&quot;,
                        &quot;18-19&quot;: &quot;1&quot;,
                        &quot;18-20&quot;: &quot;1&quot;,
                        &quot;18-21&quot;: &quot;1&quot;,
                        &quot;18-22&quot;: &quot;1&quot;,
                        &quot;18-23&quot;: &quot;1&quot;,
                        &quot;18-24&quot;: &quot;1&quot;,
                        &quot;18-25&quot;: &quot;1&quot;,
                        &quot;18-26&quot;: &quot;1&quot;,
                        &quot;18-27&quot;: &quot;1&quot;,
                        &quot;18-28&quot;: &quot;1&quot;
                    },
                    &quot;walls_data&quot;: {
                        &quot;wallColor&quot;: &quot;#654321&quot;,
                        &quot;2-2&quot;: &quot;#654321&quot;,
                        &quot;2-3&quot;: &quot;#654321&quot;,
                        &quot;2-4&quot;: &quot;#654321&quot;,
                        &quot;2-5&quot;: &quot;#654321&quot;,
                        &quot;2-6&quot;: &quot;#654321&quot;,
                        &quot;2-7&quot;: &quot;#654321&quot;,
                        &quot;2-8&quot;: &quot;#654321&quot;,
                        &quot;2-9&quot;: &quot;#654321&quot;,
                        &quot;2-10&quot;: &quot;#654321&quot;,
                        &quot;2-11&quot;: &quot;#654321&quot;,
                        &quot;2-12&quot;: &quot;#654321&quot;,
                        &quot;2-13&quot;: &quot;#654321&quot;,
                        &quot;2-14&quot;: &quot;#654321&quot;,
                        &quot;2-15&quot;: &quot;#654321&quot;,
                        &quot;2-16&quot;: &quot;#654321&quot;,
                        &quot;2-17&quot;: &quot;#654321&quot;,
                        &quot;2-18&quot;: &quot;#654321&quot;,
                        &quot;2-19&quot;: &quot;#654321&quot;,
                        &quot;2-20&quot;: &quot;#654321&quot;,
                        &quot;2-21&quot;: &quot;#654321&quot;,
                        &quot;2-22&quot;: &quot;#654321&quot;,
                        &quot;2-23&quot;: &quot;#654321&quot;,
                        &quot;2-24&quot;: &quot;#654321&quot;,
                        &quot;2-25&quot;: &quot;#654321&quot;,
                        &quot;2-26&quot;: &quot;#654321&quot;,
                        &quot;2-27&quot;: &quot;#654321&quot;,
                        &quot;2-28&quot;: &quot;#654321&quot;,
                        &quot;3-2&quot;: &quot;#654321&quot;,
                        &quot;3-3&quot;: &quot;#654321&quot;,
                        &quot;3-4&quot;: &quot;#654321&quot;,
                        &quot;3-5&quot;: &quot;#654321&quot;,
                        &quot;3-6&quot;: &quot;#654321&quot;,
                        &quot;3-7&quot;: &quot;#654321&quot;,
                        &quot;3-8&quot;: &quot;#654321&quot;,
                        &quot;3-9&quot;: &quot;#654321&quot;,
                        &quot;3-10&quot;: &quot;#654321&quot;,
                        &quot;3-11&quot;: &quot;#654321&quot;,
                        &quot;3-12&quot;: &quot;#654321&quot;,
                        &quot;3-13&quot;: &quot;#654321&quot;,
                        &quot;3-14&quot;: &quot;#654321&quot;,
                        &quot;3-15&quot;: &quot;#654321&quot;,
                        &quot;3-16&quot;: &quot;#654321&quot;,
                        &quot;3-17&quot;: &quot;#654321&quot;,
                        &quot;3-18&quot;: &quot;#654321&quot;,
                        &quot;3-19&quot;: &quot;#654321&quot;,
                        &quot;3-20&quot;: &quot;#654321&quot;,
                        &quot;3-21&quot;: &quot;#654321&quot;,
                        &quot;3-22&quot;: &quot;#654321&quot;,
                        &quot;3-23&quot;: &quot;#654321&quot;,
                        &quot;3-24&quot;: &quot;#654321&quot;,
                        &quot;3-25&quot;: &quot;#654321&quot;,
                        &quot;3-26&quot;: &quot;#654321&quot;,
                        &quot;3-27&quot;: &quot;#654321&quot;,
                        &quot;3-28&quot;: &quot;#654321&quot;,
                        &quot;4-2&quot;: &quot;#654321&quot;,
                        &quot;4-3&quot;: &quot;#654321&quot;,
                        &quot;4-4&quot;: &quot;#654321&quot;,
                        &quot;4-5&quot;: &quot;#654321&quot;,
                        &quot;4-6&quot;: &quot;#654321&quot;,
                        &quot;4-7&quot;: &quot;#654321&quot;,
                        &quot;4-8&quot;: &quot;#654321&quot;,
                        &quot;4-9&quot;: &quot;#654321&quot;,
                        &quot;4-10&quot;: &quot;#654321&quot;,
                        &quot;4-11&quot;: &quot;#654321&quot;,
                        &quot;4-12&quot;: &quot;#654321&quot;,
                        &quot;4-13&quot;: &quot;#654321&quot;,
                        &quot;4-14&quot;: &quot;#654321&quot;,
                        &quot;4-15&quot;: &quot;#654321&quot;,
                        &quot;4-16&quot;: &quot;#654321&quot;,
                        &quot;4-17&quot;: &quot;#654321&quot;,
                        &quot;4-18&quot;: &quot;#654321&quot;,
                        &quot;4-19&quot;: &quot;#654321&quot;,
                        &quot;4-20&quot;: &quot;#654321&quot;,
                        &quot;4-21&quot;: &quot;#654321&quot;,
                        &quot;4-22&quot;: &quot;#654321&quot;,
                        &quot;4-23&quot;: &quot;#654321&quot;,
                        &quot;4-24&quot;: &quot;#654321&quot;,
                        &quot;4-25&quot;: &quot;#654321&quot;,
                        &quot;4-26&quot;: &quot;#654321&quot;,
                        &quot;4-27&quot;: &quot;#654321&quot;,
                        &quot;4-28&quot;: &quot;#654321&quot;,
                        &quot;5-2&quot;: &quot;#654321&quot;,
                        &quot;5-3&quot;: &quot;#654321&quot;,
                        &quot;5-4&quot;: &quot;#654321&quot;,
                        &quot;5-5&quot;: &quot;#654321&quot;,
                        &quot;5-6&quot;: &quot;#654321&quot;,
                        &quot;5-7&quot;: &quot;#654321&quot;,
                        &quot;5-8&quot;: &quot;#654321&quot;,
                        &quot;5-9&quot;: &quot;#654321&quot;,
                        &quot;5-10&quot;: &quot;#654321&quot;,
                        &quot;5-11&quot;: &quot;#654321&quot;,
                        &quot;5-12&quot;: &quot;#654321&quot;,
                        &quot;5-13&quot;: &quot;#654321&quot;,
                        &quot;5-14&quot;: &quot;#654321&quot;,
                        &quot;5-15&quot;: &quot;#654321&quot;,
                        &quot;5-16&quot;: &quot;#654321&quot;,
                        &quot;5-17&quot;: &quot;#654321&quot;,
                        &quot;5-18&quot;: &quot;#654321&quot;,
                        &quot;5-19&quot;: &quot;#654321&quot;,
                        &quot;5-20&quot;: &quot;#654321&quot;,
                        &quot;5-21&quot;: &quot;#654321&quot;,
                        &quot;5-22&quot;: &quot;#654321&quot;,
                        &quot;5-23&quot;: &quot;#654321&quot;,
                        &quot;5-24&quot;: &quot;#654321&quot;,
                        &quot;5-25&quot;: &quot;#654321&quot;,
                        &quot;5-26&quot;: &quot;#654321&quot;,
                        &quot;5-27&quot;: &quot;#654321&quot;,
                        &quot;5-28&quot;: &quot;#654321&quot;,
                        &quot;6-2&quot;: &quot;#654321&quot;,
                        &quot;6-3&quot;: &quot;#654321&quot;,
                        &quot;6-4&quot;: &quot;#654321&quot;,
                        &quot;6-5&quot;: &quot;#654321&quot;,
                        &quot;6-6&quot;: &quot;#654321&quot;,
                        &quot;6-7&quot;: &quot;#654321&quot;,
                        &quot;6-8&quot;: &quot;#654321&quot;,
                        &quot;6-9&quot;: &quot;#654321&quot;,
                        &quot;6-10&quot;: &quot;#654321&quot;,
                        &quot;6-11&quot;: &quot;#654321&quot;,
                        &quot;6-12&quot;: &quot;#654321&quot;,
                        &quot;6-13&quot;: &quot;#654321&quot;,
                        &quot;6-14&quot;: &quot;#654321&quot;,
                        &quot;6-15&quot;: &quot;#654321&quot;,
                        &quot;6-16&quot;: &quot;#654321&quot;,
                        &quot;6-17&quot;: &quot;#654321&quot;,
                        &quot;6-18&quot;: &quot;#654321&quot;,
                        &quot;6-19&quot;: &quot;#654321&quot;,
                        &quot;6-20&quot;: &quot;#654321&quot;,
                        &quot;6-21&quot;: &quot;#654321&quot;,
                        &quot;6-22&quot;: &quot;#654321&quot;,
                        &quot;6-23&quot;: &quot;#654321&quot;,
                        &quot;6-24&quot;: &quot;#654321&quot;,
                        &quot;6-25&quot;: &quot;#654321&quot;,
                        &quot;6-26&quot;: &quot;#654321&quot;,
                        &quot;6-27&quot;: &quot;#654321&quot;,
                        &quot;6-28&quot;: &quot;#654321&quot;,
                        &quot;7-2&quot;: &quot;#654321&quot;,
                        &quot;7-3&quot;: &quot;#654321&quot;,
                        &quot;7-4&quot;: &quot;#654321&quot;,
                        &quot;7-5&quot;: &quot;#654321&quot;,
                        &quot;7-6&quot;: &quot;#654321&quot;,
                        &quot;7-7&quot;: &quot;#654321&quot;,
                        &quot;7-8&quot;: &quot;#654321&quot;,
                        &quot;7-9&quot;: &quot;#654321&quot;,
                        &quot;7-10&quot;: &quot;#654321&quot;,
                        &quot;7-11&quot;: &quot;#654321&quot;,
                        &quot;7-12&quot;: &quot;#654321&quot;,
                        &quot;7-13&quot;: &quot;#654321&quot;,
                        &quot;7-14&quot;: &quot;#654321&quot;,
                        &quot;7-15&quot;: &quot;#654321&quot;,
                        &quot;7-16&quot;: &quot;#654321&quot;,
                        &quot;7-17&quot;: &quot;#654321&quot;,
                        &quot;7-18&quot;: &quot;#654321&quot;,
                        &quot;7-19&quot;: &quot;#654321&quot;,
                        &quot;7-20&quot;: &quot;#654321&quot;,
                        &quot;7-21&quot;: &quot;#654321&quot;,
                        &quot;7-22&quot;: &quot;#654321&quot;,
                        &quot;7-23&quot;: &quot;#654321&quot;,
                        &quot;7-24&quot;: &quot;#654321&quot;,
                        &quot;7-25&quot;: &quot;#654321&quot;,
                        &quot;7-26&quot;: &quot;#654321&quot;,
                        &quot;7-27&quot;: &quot;#654321&quot;,
                        &quot;7-28&quot;: &quot;#654321&quot;,
                        &quot;8-2&quot;: &quot;#654321&quot;,
                        &quot;8-3&quot;: &quot;#654321&quot;,
                        &quot;8-4&quot;: &quot;#654321&quot;,
                        &quot;8-5&quot;: &quot;#654321&quot;,
                        &quot;8-6&quot;: &quot;#654321&quot;,
                        &quot;8-7&quot;: &quot;#654321&quot;,
                        &quot;8-8&quot;: &quot;#654321&quot;,
                        &quot;8-9&quot;: &quot;#654321&quot;,
                        &quot;8-10&quot;: &quot;#654321&quot;,
                        &quot;8-11&quot;: &quot;#654321&quot;,
                        &quot;8-12&quot;: &quot;#654321&quot;,
                        &quot;8-13&quot;: &quot;#654321&quot;,
                        &quot;8-14&quot;: &quot;#654321&quot;,
                        &quot;8-15&quot;: &quot;#654321&quot;,
                        &quot;8-16&quot;: &quot;#654321&quot;,
                        &quot;8-17&quot;: &quot;#654321&quot;,
                        &quot;8-18&quot;: &quot;#654321&quot;,
                        &quot;8-19&quot;: &quot;#654321&quot;,
                        &quot;8-20&quot;: &quot;#654321&quot;,
                        &quot;8-21&quot;: &quot;#654321&quot;,
                        &quot;8-22&quot;: &quot;#654321&quot;,
                        &quot;8-23&quot;: &quot;#654321&quot;,
                        &quot;8-24&quot;: &quot;#654321&quot;,
                        &quot;8-25&quot;: &quot;#654321&quot;,
                        &quot;8-26&quot;: &quot;#654321&quot;,
                        &quot;8-27&quot;: &quot;#654321&quot;,
                        &quot;8-28&quot;: &quot;#654321&quot;,
                        &quot;9-2&quot;: &quot;#654321&quot;,
                        &quot;9-3&quot;: &quot;#654321&quot;,
                        &quot;9-4&quot;: &quot;#654321&quot;,
                        &quot;9-5&quot;: &quot;#654321&quot;,
                        &quot;9-6&quot;: &quot;#654321&quot;,
                        &quot;9-7&quot;: &quot;#654321&quot;,
                        &quot;9-8&quot;: &quot;#654321&quot;,
                        &quot;9-9&quot;: &quot;#654321&quot;,
                        &quot;9-10&quot;: &quot;#654321&quot;,
                        &quot;9-11&quot;: &quot;#654321&quot;,
                        &quot;9-12&quot;: &quot;#654321&quot;,
                        &quot;9-13&quot;: &quot;#654321&quot;,
                        &quot;9-14&quot;: &quot;#654321&quot;,
                        &quot;9-15&quot;: &quot;#654321&quot;,
                        &quot;9-16&quot;: &quot;#654321&quot;,
                        &quot;9-17&quot;: &quot;#654321&quot;,
                        &quot;9-18&quot;: &quot;#654321&quot;,
                        &quot;9-19&quot;: &quot;#654321&quot;,
                        &quot;9-20&quot;: &quot;#654321&quot;,
                        &quot;9-21&quot;: &quot;#654321&quot;,
                        &quot;9-22&quot;: &quot;#654321&quot;,
                        &quot;9-23&quot;: &quot;#654321&quot;,
                        &quot;9-24&quot;: &quot;#654321&quot;,
                        &quot;9-25&quot;: &quot;#654321&quot;,
                        &quot;9-26&quot;: &quot;#654321&quot;,
                        &quot;9-27&quot;: &quot;#654321&quot;,
                        &quot;9-28&quot;: &quot;#654321&quot;,
                        &quot;10-2&quot;: &quot;#654321&quot;,
                        &quot;10-3&quot;: &quot;#654321&quot;,
                        &quot;10-4&quot;: &quot;#654321&quot;,
                        &quot;10-5&quot;: &quot;#654321&quot;,
                        &quot;10-6&quot;: &quot;#654321&quot;,
                        &quot;10-7&quot;: &quot;#654321&quot;,
                        &quot;10-8&quot;: &quot;#654321&quot;,
                        &quot;10-9&quot;: &quot;#654321&quot;,
                        &quot;10-10&quot;: &quot;#654321&quot;,
                        &quot;10-11&quot;: &quot;#654321&quot;,
                        &quot;10-12&quot;: &quot;#654321&quot;,
                        &quot;10-13&quot;: &quot;#654321&quot;,
                        &quot;10-14&quot;: &quot;#654321&quot;,
                        &quot;10-15&quot;: &quot;#654321&quot;,
                        &quot;10-16&quot;: &quot;#654321&quot;,
                        &quot;10-17&quot;: &quot;#654321&quot;,
                        &quot;10-18&quot;: &quot;#654321&quot;,
                        &quot;10-19&quot;: &quot;#654321&quot;,
                        &quot;10-20&quot;: &quot;#654321&quot;,
                        &quot;10-21&quot;: &quot;#654321&quot;,
                        &quot;10-22&quot;: &quot;#654321&quot;,
                        &quot;10-23&quot;: &quot;#654321&quot;,
                        &quot;10-24&quot;: &quot;#654321&quot;,
                        &quot;10-25&quot;: &quot;#654321&quot;,
                        &quot;10-26&quot;: &quot;#654321&quot;,
                        &quot;10-27&quot;: &quot;#654321&quot;,
                        &quot;10-28&quot;: &quot;#654321&quot;,
                        &quot;11-2&quot;: &quot;#654321&quot;,
                        &quot;11-3&quot;: &quot;#654321&quot;,
                        &quot;11-4&quot;: &quot;#654321&quot;,
                        &quot;11-5&quot;: &quot;#654321&quot;,
                        &quot;11-6&quot;: &quot;#654321&quot;,
                        &quot;11-7&quot;: &quot;#654321&quot;,
                        &quot;11-8&quot;: &quot;#654321&quot;,
                        &quot;11-9&quot;: &quot;#654321&quot;,
                        &quot;11-10&quot;: &quot;#654321&quot;,
                        &quot;11-11&quot;: &quot;#654321&quot;,
                        &quot;11-12&quot;: &quot;#654321&quot;,
                        &quot;11-13&quot;: &quot;#654321&quot;,
                        &quot;11-14&quot;: &quot;#654321&quot;,
                        &quot;11-15&quot;: &quot;#654321&quot;,
                        &quot;11-16&quot;: &quot;#654321&quot;,
                        &quot;11-17&quot;: &quot;#654321&quot;,
                        &quot;11-18&quot;: &quot;#654321&quot;,
                        &quot;11-19&quot;: &quot;#654321&quot;,
                        &quot;11-20&quot;: &quot;#654321&quot;,
                        &quot;11-21&quot;: &quot;#654321&quot;,
                        &quot;11-22&quot;: &quot;#654321&quot;,
                        &quot;11-23&quot;: &quot;#654321&quot;,
                        &quot;11-24&quot;: &quot;#654321&quot;,
                        &quot;11-25&quot;: &quot;#654321&quot;,
                        &quot;11-26&quot;: &quot;#654321&quot;,
                        &quot;11-27&quot;: &quot;#654321&quot;,
                        &quot;11-28&quot;: &quot;#654321&quot;,
                        &quot;12-2&quot;: &quot;#654321&quot;,
                        &quot;12-3&quot;: &quot;#654321&quot;,
                        &quot;12-4&quot;: &quot;#654321&quot;,
                        &quot;12-5&quot;: &quot;#654321&quot;,
                        &quot;12-6&quot;: &quot;#654321&quot;,
                        &quot;12-7&quot;: &quot;#654321&quot;,
                        &quot;12-8&quot;: &quot;#654321&quot;,
                        &quot;12-9&quot;: &quot;#654321&quot;,
                        &quot;12-10&quot;: &quot;#654321&quot;,
                        &quot;12-11&quot;: &quot;#654321&quot;,
                        &quot;12-12&quot;: &quot;#654321&quot;,
                        &quot;12-13&quot;: &quot;#654321&quot;,
                        &quot;12-14&quot;: &quot;#654321&quot;,
                        &quot;12-15&quot;: &quot;#654321&quot;,
                        &quot;12-16&quot;: &quot;#654321&quot;,
                        &quot;12-17&quot;: &quot;#654321&quot;,
                        &quot;12-18&quot;: &quot;#654321&quot;,
                        &quot;12-19&quot;: &quot;#654321&quot;,
                        &quot;12-20&quot;: &quot;#654321&quot;,
                        &quot;12-21&quot;: &quot;#654321&quot;,
                        &quot;12-22&quot;: &quot;#654321&quot;,
                        &quot;12-23&quot;: &quot;#654321&quot;,
                        &quot;12-24&quot;: &quot;#654321&quot;,
                        &quot;12-25&quot;: &quot;#654321&quot;,
                        &quot;12-26&quot;: &quot;#654321&quot;,
                        &quot;12-27&quot;: &quot;#654321&quot;,
                        &quot;12-28&quot;: &quot;#654321&quot;,
                        &quot;13-2&quot;: &quot;#654321&quot;,
                        &quot;13-3&quot;: &quot;#654321&quot;,
                        &quot;13-4&quot;: &quot;#654321&quot;,
                        &quot;13-5&quot;: &quot;#654321&quot;,
                        &quot;13-6&quot;: &quot;#654321&quot;,
                        &quot;13-7&quot;: &quot;#654321&quot;,
                        &quot;13-8&quot;: &quot;#654321&quot;,
                        &quot;13-9&quot;: &quot;#654321&quot;,
                        &quot;13-10&quot;: &quot;#654321&quot;,
                        &quot;13-11&quot;: &quot;#654321&quot;,
                        &quot;13-12&quot;: &quot;#654321&quot;,
                        &quot;13-13&quot;: &quot;#654321&quot;,
                        &quot;13-14&quot;: &quot;#654321&quot;,
                        &quot;13-15&quot;: &quot;#654321&quot;,
                        &quot;13-16&quot;: &quot;#654321&quot;,
                        &quot;13-17&quot;: &quot;#654321&quot;,
                        &quot;13-18&quot;: &quot;#654321&quot;,
                        &quot;13-19&quot;: &quot;#654321&quot;,
                        &quot;13-20&quot;: &quot;#654321&quot;,
                        &quot;13-21&quot;: &quot;#654321&quot;,
                        &quot;13-22&quot;: &quot;#654321&quot;,
                        &quot;13-23&quot;: &quot;#654321&quot;,
                        &quot;13-24&quot;: &quot;#654321&quot;,
                        &quot;13-25&quot;: &quot;#654321&quot;,
                        &quot;13-26&quot;: &quot;#654321&quot;,
                        &quot;13-27&quot;: &quot;#654321&quot;,
                        &quot;13-28&quot;: &quot;#654321&quot;,
                        &quot;14-2&quot;: &quot;#654321&quot;,
                        &quot;14-3&quot;: &quot;#654321&quot;,
                        &quot;14-4&quot;: &quot;#654321&quot;,
                        &quot;14-5&quot;: &quot;#654321&quot;,
                        &quot;14-6&quot;: &quot;#654321&quot;,
                        &quot;14-7&quot;: &quot;#654321&quot;,
                        &quot;14-8&quot;: &quot;#654321&quot;,
                        &quot;14-9&quot;: &quot;#654321&quot;,
                        &quot;14-10&quot;: &quot;#654321&quot;,
                        &quot;14-11&quot;: &quot;#654321&quot;,
                        &quot;14-12&quot;: &quot;#654321&quot;,
                        &quot;14-13&quot;: &quot;#654321&quot;,
                        &quot;14-14&quot;: &quot;#654321&quot;,
                        &quot;14-15&quot;: &quot;#654321&quot;,
                        &quot;14-16&quot;: &quot;#654321&quot;,
                        &quot;14-17&quot;: &quot;#654321&quot;,
                        &quot;14-18&quot;: &quot;#654321&quot;,
                        &quot;14-19&quot;: &quot;#654321&quot;,
                        &quot;14-20&quot;: &quot;#654321&quot;,
                        &quot;14-21&quot;: &quot;#654321&quot;,
                        &quot;14-22&quot;: &quot;#654321&quot;,
                        &quot;14-23&quot;: &quot;#654321&quot;,
                        &quot;14-24&quot;: &quot;#654321&quot;,
                        &quot;14-25&quot;: &quot;#654321&quot;,
                        &quot;14-26&quot;: &quot;#654321&quot;,
                        &quot;14-27&quot;: &quot;#654321&quot;,
                        &quot;14-28&quot;: &quot;#654321&quot;,
                        &quot;15-2&quot;: &quot;#654321&quot;,
                        &quot;15-3&quot;: &quot;#654321&quot;,
                        &quot;15-4&quot;: &quot;#654321&quot;,
                        &quot;15-5&quot;: &quot;#654321&quot;,
                        &quot;15-6&quot;: &quot;#654321&quot;,
                        &quot;15-7&quot;: &quot;#654321&quot;,
                        &quot;15-8&quot;: &quot;#654321&quot;,
                        &quot;15-9&quot;: &quot;#654321&quot;,
                        &quot;15-10&quot;: &quot;#654321&quot;,
                        &quot;15-11&quot;: &quot;#654321&quot;,
                        &quot;15-12&quot;: &quot;#654321&quot;,
                        &quot;15-13&quot;: &quot;#654321&quot;,
                        &quot;15-14&quot;: &quot;#654321&quot;,
                        &quot;15-15&quot;: &quot;#654321&quot;,
                        &quot;15-16&quot;: &quot;#654321&quot;,
                        &quot;15-17&quot;: &quot;#654321&quot;,
                        &quot;15-18&quot;: &quot;#654321&quot;,
                        &quot;15-19&quot;: &quot;#654321&quot;,
                        &quot;15-20&quot;: &quot;#654321&quot;,
                        &quot;15-21&quot;: &quot;#654321&quot;,
                        &quot;15-22&quot;: &quot;#654321&quot;,
                        &quot;15-23&quot;: &quot;#654321&quot;,
                        &quot;15-24&quot;: &quot;#654321&quot;,
                        &quot;15-25&quot;: &quot;#654321&quot;,
                        &quot;15-26&quot;: &quot;#654321&quot;,
                        &quot;15-27&quot;: &quot;#654321&quot;,
                        &quot;15-28&quot;: &quot;#654321&quot;,
                        &quot;16-2&quot;: &quot;#654321&quot;,
                        &quot;16-3&quot;: &quot;#654321&quot;,
                        &quot;16-4&quot;: &quot;#654321&quot;,
                        &quot;16-5&quot;: &quot;#654321&quot;,
                        &quot;16-6&quot;: &quot;#654321&quot;,
                        &quot;16-7&quot;: &quot;#654321&quot;,
                        &quot;16-8&quot;: &quot;#654321&quot;,
                        &quot;16-9&quot;: &quot;#654321&quot;,
                        &quot;16-10&quot;: &quot;#654321&quot;,
                        &quot;16-11&quot;: &quot;#654321&quot;,
                        &quot;16-12&quot;: &quot;#654321&quot;,
                        &quot;16-13&quot;: &quot;#654321&quot;,
                        &quot;16-14&quot;: &quot;#654321&quot;,
                        &quot;16-15&quot;: &quot;#654321&quot;,
                        &quot;16-16&quot;: &quot;#654321&quot;,
                        &quot;16-17&quot;: &quot;#654321&quot;,
                        &quot;16-18&quot;: &quot;#654321&quot;,
                        &quot;16-19&quot;: &quot;#654321&quot;,
                        &quot;16-20&quot;: &quot;#654321&quot;,
                        &quot;16-21&quot;: &quot;#654321&quot;,
                        &quot;16-22&quot;: &quot;#654321&quot;,
                        &quot;16-23&quot;: &quot;#654321&quot;,
                        &quot;16-24&quot;: &quot;#654321&quot;,
                        &quot;16-25&quot;: &quot;#654321&quot;,
                        &quot;16-26&quot;: &quot;#654321&quot;,
                        &quot;16-27&quot;: &quot;#654321&quot;,
                        &quot;16-28&quot;: &quot;#654321&quot;,
                        &quot;17-2&quot;: &quot;#654321&quot;,
                        &quot;17-3&quot;: &quot;#654321&quot;,
                        &quot;17-4&quot;: &quot;#654321&quot;,
                        &quot;17-5&quot;: &quot;#654321&quot;,
                        &quot;17-6&quot;: &quot;#654321&quot;,
                        &quot;17-7&quot;: &quot;#654321&quot;,
                        &quot;17-8&quot;: &quot;#654321&quot;,
                        &quot;17-9&quot;: &quot;#654321&quot;,
                        &quot;17-10&quot;: &quot;#654321&quot;,
                        &quot;17-11&quot;: &quot;#654321&quot;,
                        &quot;17-12&quot;: &quot;#654321&quot;,
                        &quot;17-13&quot;: &quot;#654321&quot;,
                        &quot;17-14&quot;: &quot;#654321&quot;,
                        &quot;17-15&quot;: &quot;#654321&quot;,
                        &quot;17-16&quot;: &quot;#654321&quot;,
                        &quot;17-17&quot;: &quot;#654321&quot;,
                        &quot;17-18&quot;: &quot;#654321&quot;,
                        &quot;17-19&quot;: &quot;#654321&quot;,
                        &quot;17-20&quot;: &quot;#654321&quot;,
                        &quot;17-21&quot;: &quot;#654321&quot;,
                        &quot;17-22&quot;: &quot;#654321&quot;,
                        &quot;17-23&quot;: &quot;#654321&quot;,
                        &quot;17-24&quot;: &quot;#654321&quot;,
                        &quot;17-25&quot;: &quot;#654321&quot;,
                        &quot;17-26&quot;: &quot;#654321&quot;,
                        &quot;17-27&quot;: &quot;#654321&quot;,
                        &quot;17-28&quot;: &quot;#654321&quot;,
                        &quot;18-2&quot;: &quot;#654321&quot;,
                        &quot;18-3&quot;: &quot;#654321&quot;,
                        &quot;18-4&quot;: &quot;#654321&quot;,
                        &quot;18-5&quot;: &quot;#654321&quot;,
                        &quot;18-6&quot;: &quot;#654321&quot;,
                        &quot;18-7&quot;: &quot;#654321&quot;,
                        &quot;18-8&quot;: &quot;#654321&quot;,
                        &quot;18-9&quot;: &quot;#654321&quot;,
                        &quot;18-10&quot;: &quot;#654321&quot;,
                        &quot;18-11&quot;: &quot;#654321&quot;,
                        &quot;18-12&quot;: &quot;#654321&quot;,
                        &quot;18-13&quot;: &quot;#654321&quot;,
                        &quot;18-14&quot;: &quot;#654321&quot;,
                        &quot;18-15&quot;: &quot;#654321&quot;,
                        &quot;18-16&quot;: &quot;#654321&quot;,
                        &quot;18-17&quot;: &quot;#654321&quot;,
                        &quot;18-18&quot;: &quot;#654321&quot;,
                        &quot;18-19&quot;: &quot;#654321&quot;,
                        &quot;18-20&quot;: &quot;#654321&quot;,
                        &quot;18-21&quot;: &quot;#654321&quot;,
                        &quot;18-22&quot;: &quot;#654321&quot;,
                        &quot;18-23&quot;: &quot;#654321&quot;,
                        &quot;18-24&quot;: &quot;#654321&quot;,
                        &quot;18-25&quot;: &quot;#654321&quot;,
                        &quot;18-26&quot;: &quot;#654321&quot;,
                        &quot;18-27&quot;: &quot;#654321&quot;,
                        &quot;18-28&quot;: &quot;#654321&quot;
                    },
                    &quot;wall_color&quot;: &quot;#654321&quot;,
                    &quot;wall_thickness&quot;: 19,
                    &quot;floor_texture_id&quot;: 9,
                    &quot;starting_point_row&quot;: 7,
                    &quot;starting_point_col&quot;: 10,
                    &quot;floor_accepted&quot;: true,
                    &quot;door_asset_id&quot;: 1,
                    &quot;door_position&quot;: {
                        &quot;row&quot;: 11,
                        &quot;col&quot;: 7
                    },
                    &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 5,
            &quot;user_id&quot;: 2,
            &quot;name&quot;: &quot;Laboratorium Szalonego Naukowca&quot;,
            &quot;description&quot;: &quot;Zbadaj opuszczone laboratorium, gdzie eksperymenty wymknęły się spod kontroli.&quot;,
            &quot;thumbnail_url&quot;: &quot;/storage/escape-rooms/thumbnails/rl-app-3.png&quot;,
            &quot;soundtrack_url&quot;: &quot;/storage/escape-rooms/soundtracks/3e43d40a-dbed-45a8-8265-f65bbe1944f0.mp3&quot;,
            &quot;is_public&quot;: true,
            &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;moderator&quot;,
                &quot;email&quot;: &quot;mod@riddlelab.world&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;last_login_at&quot;: &quot;2026-02-13 22:04:23&quot;,
                &quot;role&quot;: &quot;moderator&quot;,
                &quot;avatar_url&quot;: null,
                &quot;player_configuration&quot;: &quot;{\&quot;avatar\&quot;:{\&quot;skin_color\&quot;:\&quot;#e8beac\&quot;,\&quot;hair_color\&quot;:\&quot;#000000\&quot;,\&quot;eye_color\&quot;:\&quot;#6b8e23\&quot;,\&quot;outfit_color\&quot;:\&quot;#b22222\&quot;}}&quot;,
                &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;
            },
            &quot;rooms&quot;: [
                {
                    &quot;id&quot;: 5,
                    &quot;escape_room_id&quot;: 5,
                    &quot;grid_data&quot;: {
                        &quot;2-2&quot;: &quot;1&quot;,
                        &quot;2-3&quot;: &quot;1&quot;,
                        &quot;2-4&quot;: &quot;1&quot;,
                        &quot;2-5&quot;: &quot;1&quot;,
                        &quot;2-6&quot;: &quot;1&quot;,
                        &quot;2-7&quot;: &quot;1&quot;,
                        &quot;2-8&quot;: &quot;1&quot;,
                        &quot;2-9&quot;: &quot;1&quot;,
                        &quot;2-10&quot;: &quot;1&quot;,
                        &quot;2-11&quot;: &quot;1&quot;,
                        &quot;2-12&quot;: &quot;1&quot;,
                        &quot;2-13&quot;: &quot;1&quot;,
                        &quot;2-14&quot;: &quot;1&quot;,
                        &quot;2-15&quot;: &quot;1&quot;,
                        &quot;2-16&quot;: &quot;1&quot;,
                        &quot;2-17&quot;: &quot;1&quot;,
                        &quot;2-18&quot;: &quot;1&quot;,
                        &quot;2-19&quot;: &quot;1&quot;,
                        &quot;2-20&quot;: &quot;1&quot;,
                        &quot;2-21&quot;: &quot;1&quot;,
                        &quot;2-22&quot;: &quot;1&quot;,
                        &quot;2-23&quot;: &quot;1&quot;,
                        &quot;2-24&quot;: &quot;1&quot;,
                        &quot;2-25&quot;: &quot;1&quot;,
                        &quot;2-26&quot;: &quot;1&quot;,
                        &quot;2-27&quot;: &quot;1&quot;,
                        &quot;2-28&quot;: &quot;1&quot;,
                        &quot;3-2&quot;: &quot;1&quot;,
                        &quot;3-3&quot;: &quot;1&quot;,
                        &quot;3-4&quot;: &quot;1&quot;,
                        &quot;3-5&quot;: &quot;1&quot;,
                        &quot;3-6&quot;: &quot;1&quot;,
                        &quot;3-7&quot;: &quot;1&quot;,
                        &quot;3-8&quot;: &quot;1&quot;,
                        &quot;3-9&quot;: &quot;1&quot;,
                        &quot;3-10&quot;: &quot;1&quot;,
                        &quot;3-11&quot;: &quot;1&quot;,
                        &quot;3-12&quot;: &quot;1&quot;,
                        &quot;3-13&quot;: &quot;1&quot;,
                        &quot;3-14&quot;: &quot;1&quot;,
                        &quot;3-15&quot;: &quot;1&quot;,
                        &quot;3-16&quot;: &quot;1&quot;,
                        &quot;3-17&quot;: &quot;1&quot;,
                        &quot;3-18&quot;: &quot;1&quot;,
                        &quot;3-19&quot;: &quot;1&quot;,
                        &quot;3-20&quot;: &quot;1&quot;,
                        &quot;3-21&quot;: &quot;1&quot;,
                        &quot;3-22&quot;: &quot;1&quot;,
                        &quot;3-23&quot;: &quot;1&quot;,
                        &quot;3-24&quot;: &quot;1&quot;,
                        &quot;3-25&quot;: &quot;1&quot;,
                        &quot;3-26&quot;: &quot;1&quot;,
                        &quot;3-27&quot;: &quot;1&quot;,
                        &quot;3-28&quot;: &quot;1&quot;,
                        &quot;4-2&quot;: &quot;1&quot;,
                        &quot;4-3&quot;: &quot;1&quot;,
                        &quot;4-4&quot;: &quot;1&quot;,
                        &quot;4-5&quot;: &quot;1&quot;,
                        &quot;4-6&quot;: &quot;1&quot;,
                        &quot;4-7&quot;: &quot;1&quot;,
                        &quot;4-8&quot;: &quot;1&quot;,
                        &quot;4-9&quot;: &quot;1&quot;,
                        &quot;4-10&quot;: &quot;1&quot;,
                        &quot;4-11&quot;: &quot;1&quot;,
                        &quot;4-12&quot;: &quot;1&quot;,
                        &quot;4-13&quot;: &quot;1&quot;,
                        &quot;4-14&quot;: &quot;1&quot;,
                        &quot;4-15&quot;: &quot;1&quot;,
                        &quot;4-16&quot;: &quot;1&quot;,
                        &quot;4-17&quot;: &quot;1&quot;,
                        &quot;4-18&quot;: &quot;1&quot;,
                        &quot;4-19&quot;: &quot;1&quot;,
                        &quot;4-20&quot;: &quot;1&quot;,
                        &quot;4-21&quot;: &quot;1&quot;,
                        &quot;4-22&quot;: &quot;1&quot;,
                        &quot;4-23&quot;: &quot;1&quot;,
                        &quot;4-24&quot;: &quot;1&quot;,
                        &quot;4-25&quot;: &quot;1&quot;,
                        &quot;4-26&quot;: &quot;1&quot;,
                        &quot;4-27&quot;: &quot;1&quot;,
                        &quot;4-28&quot;: &quot;1&quot;,
                        &quot;5-2&quot;: &quot;1&quot;,
                        &quot;5-3&quot;: &quot;1&quot;,
                        &quot;5-4&quot;: &quot;1&quot;,
                        &quot;5-5&quot;: &quot;1&quot;,
                        &quot;5-6&quot;: &quot;1&quot;,
                        &quot;5-7&quot;: &quot;1&quot;,
                        &quot;5-8&quot;: &quot;1&quot;,
                        &quot;5-9&quot;: &quot;1&quot;,
                        &quot;5-10&quot;: &quot;1&quot;,
                        &quot;5-11&quot;: &quot;1&quot;,
                        &quot;5-12&quot;: &quot;1&quot;,
                        &quot;5-13&quot;: &quot;1&quot;,
                        &quot;5-14&quot;: &quot;1&quot;,
                        &quot;5-15&quot;: &quot;1&quot;,
                        &quot;5-16&quot;: &quot;1&quot;,
                        &quot;5-17&quot;: &quot;1&quot;,
                        &quot;5-18&quot;: &quot;1&quot;,
                        &quot;5-19&quot;: &quot;1&quot;,
                        &quot;5-20&quot;: &quot;1&quot;,
                        &quot;5-21&quot;: &quot;1&quot;,
                        &quot;5-22&quot;: &quot;1&quot;,
                        &quot;5-23&quot;: &quot;1&quot;,
                        &quot;5-24&quot;: &quot;1&quot;,
                        &quot;5-25&quot;: &quot;1&quot;,
                        &quot;5-26&quot;: &quot;1&quot;,
                        &quot;5-27&quot;: &quot;1&quot;,
                        &quot;5-28&quot;: &quot;1&quot;,
                        &quot;6-2&quot;: &quot;1&quot;,
                        &quot;6-3&quot;: &quot;1&quot;,
                        &quot;6-4&quot;: &quot;1&quot;,
                        &quot;6-5&quot;: &quot;1&quot;,
                        &quot;6-6&quot;: &quot;1&quot;,
                        &quot;6-7&quot;: &quot;1&quot;,
                        &quot;6-8&quot;: &quot;1&quot;,
                        &quot;6-9&quot;: &quot;1&quot;,
                        &quot;6-10&quot;: &quot;1&quot;,
                        &quot;6-11&quot;: &quot;1&quot;,
                        &quot;6-12&quot;: &quot;1&quot;,
                        &quot;6-13&quot;: &quot;1&quot;,
                        &quot;6-14&quot;: &quot;1&quot;,
                        &quot;6-15&quot;: &quot;1&quot;,
                        &quot;6-16&quot;: &quot;1&quot;,
                        &quot;6-17&quot;: &quot;1&quot;,
                        &quot;6-18&quot;: &quot;1&quot;,
                        &quot;6-19&quot;: &quot;1&quot;,
                        &quot;6-20&quot;: &quot;1&quot;,
                        &quot;6-21&quot;: &quot;1&quot;,
                        &quot;6-22&quot;: &quot;1&quot;,
                        &quot;6-23&quot;: &quot;1&quot;,
                        &quot;6-24&quot;: &quot;1&quot;,
                        &quot;6-25&quot;: &quot;1&quot;,
                        &quot;6-26&quot;: &quot;1&quot;,
                        &quot;6-27&quot;: &quot;1&quot;,
                        &quot;6-28&quot;: &quot;1&quot;,
                        &quot;7-2&quot;: &quot;1&quot;,
                        &quot;7-3&quot;: &quot;1&quot;,
                        &quot;7-4&quot;: &quot;1&quot;,
                        &quot;7-5&quot;: &quot;1&quot;,
                        &quot;7-6&quot;: &quot;1&quot;,
                        &quot;7-7&quot;: &quot;1&quot;,
                        &quot;7-8&quot;: &quot;1&quot;,
                        &quot;7-9&quot;: &quot;1&quot;,
                        &quot;7-10&quot;: &quot;1&quot;,
                        &quot;7-11&quot;: &quot;1&quot;,
                        &quot;7-12&quot;: &quot;1&quot;,
                        &quot;7-13&quot;: &quot;1&quot;,
                        &quot;7-14&quot;: &quot;1&quot;,
                        &quot;7-15&quot;: &quot;1&quot;,
                        &quot;7-16&quot;: &quot;1&quot;,
                        &quot;7-17&quot;: &quot;1&quot;,
                        &quot;7-18&quot;: &quot;1&quot;,
                        &quot;7-19&quot;: &quot;1&quot;,
                        &quot;7-20&quot;: &quot;1&quot;,
                        &quot;7-21&quot;: &quot;1&quot;,
                        &quot;7-22&quot;: &quot;1&quot;,
                        &quot;7-23&quot;: &quot;1&quot;,
                        &quot;7-24&quot;: &quot;1&quot;,
                        &quot;7-25&quot;: &quot;1&quot;,
                        &quot;7-26&quot;: &quot;1&quot;,
                        &quot;7-27&quot;: &quot;1&quot;,
                        &quot;7-28&quot;: &quot;1&quot;,
                        &quot;8-2&quot;: &quot;1&quot;,
                        &quot;8-3&quot;: &quot;1&quot;,
                        &quot;8-4&quot;: &quot;1&quot;,
                        &quot;8-5&quot;: &quot;1&quot;,
                        &quot;8-6&quot;: &quot;1&quot;,
                        &quot;8-7&quot;: &quot;1&quot;,
                        &quot;8-8&quot;: &quot;1&quot;,
                        &quot;8-9&quot;: &quot;1&quot;,
                        &quot;8-10&quot;: &quot;1&quot;,
                        &quot;8-11&quot;: &quot;1&quot;,
                        &quot;8-12&quot;: &quot;1&quot;,
                        &quot;8-13&quot;: &quot;1&quot;,
                        &quot;8-14&quot;: &quot;1&quot;,
                        &quot;8-15&quot;: &quot;1&quot;,
                        &quot;8-16&quot;: &quot;1&quot;,
                        &quot;8-17&quot;: &quot;1&quot;,
                        &quot;8-18&quot;: &quot;1&quot;,
                        &quot;8-19&quot;: &quot;1&quot;,
                        &quot;8-20&quot;: &quot;1&quot;,
                        &quot;8-21&quot;: &quot;1&quot;,
                        &quot;8-22&quot;: &quot;1&quot;,
                        &quot;8-23&quot;: &quot;1&quot;,
                        &quot;8-24&quot;: &quot;1&quot;,
                        &quot;8-25&quot;: &quot;1&quot;,
                        &quot;8-26&quot;: &quot;1&quot;,
                        &quot;8-27&quot;: &quot;1&quot;,
                        &quot;8-28&quot;: &quot;1&quot;,
                        &quot;9-2&quot;: &quot;1&quot;,
                        &quot;9-3&quot;: &quot;1&quot;,
                        &quot;9-4&quot;: &quot;1&quot;,
                        &quot;9-5&quot;: &quot;1&quot;,
                        &quot;9-6&quot;: &quot;1&quot;,
                        &quot;9-7&quot;: &quot;1&quot;,
                        &quot;9-8&quot;: &quot;1&quot;,
                        &quot;9-9&quot;: &quot;1&quot;,
                        &quot;9-10&quot;: &quot;1&quot;,
                        &quot;9-11&quot;: &quot;1&quot;,
                        &quot;9-12&quot;: &quot;1&quot;,
                        &quot;9-13&quot;: &quot;1&quot;,
                        &quot;9-14&quot;: &quot;1&quot;,
                        &quot;9-15&quot;: &quot;1&quot;,
                        &quot;9-16&quot;: &quot;1&quot;,
                        &quot;9-17&quot;: &quot;1&quot;,
                        &quot;9-18&quot;: &quot;1&quot;,
                        &quot;9-19&quot;: &quot;1&quot;,
                        &quot;9-20&quot;: &quot;1&quot;,
                        &quot;9-21&quot;: &quot;1&quot;,
                        &quot;9-22&quot;: &quot;1&quot;,
                        &quot;9-23&quot;: &quot;1&quot;,
                        &quot;9-24&quot;: &quot;1&quot;,
                        &quot;9-25&quot;: &quot;1&quot;,
                        &quot;9-26&quot;: &quot;1&quot;,
                        &quot;9-27&quot;: &quot;1&quot;,
                        &quot;9-28&quot;: &quot;1&quot;,
                        &quot;10-2&quot;: &quot;1&quot;,
                        &quot;10-3&quot;: &quot;1&quot;,
                        &quot;10-4&quot;: &quot;1&quot;,
                        &quot;10-5&quot;: &quot;1&quot;,
                        &quot;10-6&quot;: &quot;1&quot;,
                        &quot;10-7&quot;: &quot;1&quot;,
                        &quot;10-8&quot;: &quot;1&quot;,
                        &quot;10-9&quot;: &quot;1&quot;,
                        &quot;10-10&quot;: &quot;1&quot;,
                        &quot;10-11&quot;: &quot;1&quot;,
                        &quot;10-12&quot;: &quot;1&quot;,
                        &quot;10-13&quot;: &quot;1&quot;,
                        &quot;10-14&quot;: &quot;1&quot;,
                        &quot;10-15&quot;: &quot;1&quot;,
                        &quot;10-16&quot;: &quot;1&quot;,
                        &quot;10-17&quot;: &quot;1&quot;,
                        &quot;10-18&quot;: &quot;1&quot;,
                        &quot;10-19&quot;: &quot;1&quot;,
                        &quot;10-20&quot;: &quot;1&quot;,
                        &quot;10-21&quot;: &quot;1&quot;,
                        &quot;10-22&quot;: &quot;1&quot;,
                        &quot;10-23&quot;: &quot;1&quot;,
                        &quot;10-24&quot;: &quot;1&quot;,
                        &quot;10-25&quot;: &quot;1&quot;,
                        &quot;10-26&quot;: &quot;1&quot;,
                        &quot;10-27&quot;: &quot;1&quot;,
                        &quot;10-28&quot;: &quot;1&quot;,
                        &quot;11-2&quot;: &quot;1&quot;,
                        &quot;11-3&quot;: &quot;1&quot;,
                        &quot;11-4&quot;: &quot;1&quot;,
                        &quot;11-5&quot;: &quot;1&quot;,
                        &quot;11-6&quot;: &quot;1&quot;,
                        &quot;11-7&quot;: &quot;1&quot;,
                        &quot;11-8&quot;: &quot;1&quot;,
                        &quot;11-9&quot;: &quot;1&quot;,
                        &quot;11-10&quot;: &quot;1&quot;,
                        &quot;11-11&quot;: &quot;1&quot;,
                        &quot;11-12&quot;: &quot;1&quot;,
                        &quot;11-13&quot;: &quot;1&quot;,
                        &quot;11-14&quot;: &quot;1&quot;,
                        &quot;11-15&quot;: &quot;1&quot;,
                        &quot;11-16&quot;: &quot;1&quot;,
                        &quot;11-17&quot;: &quot;1&quot;,
                        &quot;11-18&quot;: &quot;1&quot;,
                        &quot;11-19&quot;: &quot;1&quot;,
                        &quot;11-20&quot;: &quot;1&quot;,
                        &quot;11-21&quot;: &quot;1&quot;,
                        &quot;11-22&quot;: &quot;1&quot;,
                        &quot;11-23&quot;: &quot;1&quot;,
                        &quot;11-24&quot;: &quot;1&quot;,
                        &quot;11-25&quot;: &quot;1&quot;,
                        &quot;11-26&quot;: &quot;1&quot;,
                        &quot;11-27&quot;: &quot;1&quot;,
                        &quot;11-28&quot;: &quot;1&quot;,
                        &quot;12-2&quot;: &quot;1&quot;,
                        &quot;12-3&quot;: &quot;1&quot;,
                        &quot;12-4&quot;: &quot;1&quot;,
                        &quot;12-5&quot;: &quot;1&quot;,
                        &quot;12-6&quot;: &quot;1&quot;,
                        &quot;12-7&quot;: &quot;1&quot;,
                        &quot;12-8&quot;: &quot;1&quot;,
                        &quot;12-9&quot;: &quot;1&quot;,
                        &quot;12-10&quot;: &quot;1&quot;,
                        &quot;12-11&quot;: &quot;1&quot;,
                        &quot;12-12&quot;: &quot;1&quot;,
                        &quot;12-13&quot;: &quot;1&quot;,
                        &quot;12-14&quot;: &quot;1&quot;,
                        &quot;12-15&quot;: &quot;1&quot;,
                        &quot;12-16&quot;: &quot;1&quot;,
                        &quot;12-17&quot;: &quot;1&quot;,
                        &quot;12-18&quot;: &quot;1&quot;,
                        &quot;12-19&quot;: &quot;1&quot;,
                        &quot;12-20&quot;: &quot;1&quot;,
                        &quot;12-21&quot;: &quot;1&quot;,
                        &quot;12-22&quot;: &quot;1&quot;,
                        &quot;12-23&quot;: &quot;1&quot;,
                        &quot;12-24&quot;: &quot;1&quot;,
                        &quot;12-25&quot;: &quot;1&quot;,
                        &quot;12-26&quot;: &quot;1&quot;,
                        &quot;12-27&quot;: &quot;1&quot;,
                        &quot;12-28&quot;: &quot;1&quot;,
                        &quot;13-2&quot;: &quot;1&quot;,
                        &quot;13-3&quot;: &quot;1&quot;,
                        &quot;13-4&quot;: &quot;1&quot;,
                        &quot;13-5&quot;: &quot;1&quot;,
                        &quot;13-6&quot;: &quot;1&quot;,
                        &quot;13-7&quot;: &quot;1&quot;,
                        &quot;13-8&quot;: &quot;1&quot;,
                        &quot;13-9&quot;: &quot;1&quot;,
                        &quot;13-10&quot;: &quot;1&quot;,
                        &quot;13-11&quot;: &quot;1&quot;,
                        &quot;13-12&quot;: &quot;1&quot;,
                        &quot;13-13&quot;: &quot;1&quot;,
                        &quot;13-14&quot;: &quot;1&quot;,
                        &quot;13-15&quot;: &quot;1&quot;,
                        &quot;13-16&quot;: &quot;1&quot;,
                        &quot;13-17&quot;: &quot;1&quot;,
                        &quot;13-18&quot;: &quot;1&quot;,
                        &quot;13-19&quot;: &quot;1&quot;,
                        &quot;13-20&quot;: &quot;1&quot;,
                        &quot;13-21&quot;: &quot;1&quot;,
                        &quot;13-22&quot;: &quot;1&quot;,
                        &quot;13-23&quot;: &quot;1&quot;,
                        &quot;13-24&quot;: &quot;1&quot;,
                        &quot;13-25&quot;: &quot;1&quot;,
                        &quot;13-26&quot;: &quot;1&quot;,
                        &quot;13-27&quot;: &quot;1&quot;,
                        &quot;13-28&quot;: &quot;1&quot;,
                        &quot;14-2&quot;: &quot;1&quot;,
                        &quot;14-3&quot;: &quot;1&quot;,
                        &quot;14-4&quot;: &quot;1&quot;,
                        &quot;14-5&quot;: &quot;1&quot;,
                        &quot;14-6&quot;: &quot;1&quot;,
                        &quot;14-7&quot;: &quot;1&quot;,
                        &quot;14-8&quot;: &quot;1&quot;,
                        &quot;14-9&quot;: &quot;1&quot;,
                        &quot;14-10&quot;: &quot;1&quot;,
                        &quot;14-11&quot;: &quot;1&quot;,
                        &quot;14-12&quot;: &quot;1&quot;,
                        &quot;14-13&quot;: &quot;1&quot;,
                        &quot;14-14&quot;: &quot;1&quot;,
                        &quot;14-15&quot;: &quot;1&quot;,
                        &quot;14-16&quot;: &quot;1&quot;,
                        &quot;14-17&quot;: &quot;1&quot;,
                        &quot;14-18&quot;: &quot;1&quot;,
                        &quot;14-19&quot;: &quot;1&quot;,
                        &quot;14-20&quot;: &quot;1&quot;,
                        &quot;14-21&quot;: &quot;1&quot;,
                        &quot;14-22&quot;: &quot;1&quot;,
                        &quot;14-23&quot;: &quot;1&quot;,
                        &quot;14-24&quot;: &quot;1&quot;,
                        &quot;14-25&quot;: &quot;1&quot;,
                        &quot;14-26&quot;: &quot;1&quot;,
                        &quot;14-27&quot;: &quot;1&quot;,
                        &quot;14-28&quot;: &quot;1&quot;,
                        &quot;15-2&quot;: &quot;1&quot;,
                        &quot;15-3&quot;: &quot;1&quot;,
                        &quot;15-4&quot;: &quot;1&quot;,
                        &quot;15-5&quot;: &quot;1&quot;,
                        &quot;15-6&quot;: &quot;1&quot;,
                        &quot;15-7&quot;: &quot;1&quot;,
                        &quot;15-8&quot;: &quot;1&quot;,
                        &quot;15-9&quot;: &quot;1&quot;,
                        &quot;15-10&quot;: &quot;1&quot;,
                        &quot;15-11&quot;: &quot;1&quot;,
                        &quot;15-12&quot;: &quot;1&quot;,
                        &quot;15-13&quot;: &quot;1&quot;,
                        &quot;15-14&quot;: &quot;1&quot;,
                        &quot;15-15&quot;: &quot;1&quot;,
                        &quot;15-16&quot;: &quot;1&quot;,
                        &quot;15-17&quot;: &quot;1&quot;,
                        &quot;15-18&quot;: &quot;1&quot;,
                        &quot;15-19&quot;: &quot;1&quot;,
                        &quot;15-20&quot;: &quot;1&quot;,
                        &quot;15-21&quot;: &quot;1&quot;,
                        &quot;15-22&quot;: &quot;1&quot;,
                        &quot;15-23&quot;: &quot;1&quot;,
                        &quot;15-24&quot;: &quot;1&quot;,
                        &quot;15-25&quot;: &quot;1&quot;,
                        &quot;15-26&quot;: &quot;1&quot;,
                        &quot;15-27&quot;: &quot;1&quot;,
                        &quot;15-28&quot;: &quot;1&quot;,
                        &quot;16-2&quot;: &quot;1&quot;,
                        &quot;16-3&quot;: &quot;1&quot;,
                        &quot;16-4&quot;: &quot;1&quot;,
                        &quot;16-5&quot;: &quot;1&quot;,
                        &quot;16-6&quot;: &quot;1&quot;,
                        &quot;16-7&quot;: &quot;1&quot;,
                        &quot;16-8&quot;: &quot;1&quot;,
                        &quot;16-9&quot;: &quot;1&quot;,
                        &quot;16-10&quot;: &quot;1&quot;,
                        &quot;16-11&quot;: &quot;1&quot;,
                        &quot;16-12&quot;: &quot;1&quot;,
                        &quot;16-13&quot;: &quot;1&quot;,
                        &quot;16-14&quot;: &quot;1&quot;,
                        &quot;16-15&quot;: &quot;1&quot;,
                        &quot;16-16&quot;: &quot;1&quot;,
                        &quot;16-17&quot;: &quot;1&quot;,
                        &quot;16-18&quot;: &quot;1&quot;,
                        &quot;16-19&quot;: &quot;1&quot;,
                        &quot;16-20&quot;: &quot;1&quot;,
                        &quot;16-21&quot;: &quot;1&quot;,
                        &quot;16-22&quot;: &quot;1&quot;,
                        &quot;16-23&quot;: &quot;1&quot;,
                        &quot;16-24&quot;: &quot;1&quot;,
                        &quot;16-25&quot;: &quot;1&quot;,
                        &quot;16-26&quot;: &quot;1&quot;,
                        &quot;16-27&quot;: &quot;1&quot;,
                        &quot;16-28&quot;: &quot;1&quot;,
                        &quot;17-2&quot;: &quot;1&quot;,
                        &quot;17-3&quot;: &quot;1&quot;,
                        &quot;17-4&quot;: &quot;1&quot;,
                        &quot;17-5&quot;: &quot;1&quot;,
                        &quot;17-6&quot;: &quot;1&quot;,
                        &quot;17-7&quot;: &quot;1&quot;,
                        &quot;17-8&quot;: &quot;1&quot;,
                        &quot;17-9&quot;: &quot;1&quot;,
                        &quot;17-10&quot;: &quot;1&quot;,
                        &quot;17-11&quot;: &quot;1&quot;,
                        &quot;17-12&quot;: &quot;1&quot;,
                        &quot;17-13&quot;: &quot;1&quot;,
                        &quot;17-14&quot;: &quot;1&quot;,
                        &quot;17-15&quot;: &quot;1&quot;,
                        &quot;17-16&quot;: &quot;1&quot;,
                        &quot;17-17&quot;: &quot;1&quot;,
                        &quot;17-18&quot;: &quot;1&quot;,
                        &quot;17-19&quot;: &quot;1&quot;,
                        &quot;17-20&quot;: &quot;1&quot;,
                        &quot;17-21&quot;: &quot;1&quot;,
                        &quot;17-22&quot;: &quot;1&quot;,
                        &quot;17-23&quot;: &quot;1&quot;,
                        &quot;17-24&quot;: &quot;1&quot;,
                        &quot;17-25&quot;: &quot;1&quot;,
                        &quot;17-26&quot;: &quot;1&quot;,
                        &quot;17-27&quot;: &quot;1&quot;,
                        &quot;17-28&quot;: &quot;1&quot;,
                        &quot;18-2&quot;: &quot;1&quot;,
                        &quot;18-3&quot;: &quot;1&quot;,
                        &quot;18-4&quot;: &quot;1&quot;,
                        &quot;18-5&quot;: &quot;1&quot;,
                        &quot;18-6&quot;: &quot;1&quot;,
                        &quot;18-7&quot;: &quot;1&quot;,
                        &quot;18-8&quot;: &quot;1&quot;,
                        &quot;18-9&quot;: &quot;1&quot;,
                        &quot;18-10&quot;: &quot;1&quot;,
                        &quot;18-11&quot;: &quot;1&quot;,
                        &quot;18-12&quot;: &quot;1&quot;,
                        &quot;18-13&quot;: &quot;1&quot;,
                        &quot;18-14&quot;: &quot;1&quot;,
                        &quot;18-15&quot;: &quot;1&quot;,
                        &quot;18-16&quot;: &quot;1&quot;,
                        &quot;18-17&quot;: &quot;1&quot;,
                        &quot;18-18&quot;: &quot;1&quot;,
                        &quot;18-19&quot;: &quot;1&quot;,
                        &quot;18-20&quot;: &quot;1&quot;,
                        &quot;18-21&quot;: &quot;1&quot;,
                        &quot;18-22&quot;: &quot;1&quot;,
                        &quot;18-23&quot;: &quot;1&quot;,
                        &quot;18-24&quot;: &quot;1&quot;,
                        &quot;18-25&quot;: &quot;1&quot;,
                        &quot;18-26&quot;: &quot;1&quot;,
                        &quot;18-27&quot;: &quot;1&quot;,
                        &quot;18-28&quot;: &quot;1&quot;
                    },
                    &quot;walls_data&quot;: {
                        &quot;wallColor&quot;: &quot;#666666&quot;,
                        &quot;2-2&quot;: &quot;#666666&quot;,
                        &quot;2-3&quot;: &quot;#666666&quot;,
                        &quot;2-4&quot;: &quot;#666666&quot;,
                        &quot;2-5&quot;: &quot;#666666&quot;,
                        &quot;2-6&quot;: &quot;#666666&quot;,
                        &quot;2-7&quot;: &quot;#666666&quot;,
                        &quot;2-8&quot;: &quot;#666666&quot;,
                        &quot;2-9&quot;: &quot;#666666&quot;,
                        &quot;2-10&quot;: &quot;#666666&quot;,
                        &quot;2-11&quot;: &quot;#666666&quot;,
                        &quot;2-12&quot;: &quot;#666666&quot;,
                        &quot;2-13&quot;: &quot;#666666&quot;,
                        &quot;2-14&quot;: &quot;#666666&quot;,
                        &quot;2-15&quot;: &quot;#666666&quot;,
                        &quot;2-16&quot;: &quot;#666666&quot;,
                        &quot;2-17&quot;: &quot;#666666&quot;,
                        &quot;2-18&quot;: &quot;#666666&quot;,
                        &quot;2-19&quot;: &quot;#666666&quot;,
                        &quot;2-20&quot;: &quot;#666666&quot;,
                        &quot;2-21&quot;: &quot;#666666&quot;,
                        &quot;2-22&quot;: &quot;#666666&quot;,
                        &quot;2-23&quot;: &quot;#666666&quot;,
                        &quot;2-24&quot;: &quot;#666666&quot;,
                        &quot;2-25&quot;: &quot;#666666&quot;,
                        &quot;2-26&quot;: &quot;#666666&quot;,
                        &quot;2-27&quot;: &quot;#666666&quot;,
                        &quot;2-28&quot;: &quot;#666666&quot;,
                        &quot;3-2&quot;: &quot;#666666&quot;,
                        &quot;3-3&quot;: &quot;#666666&quot;,
                        &quot;3-4&quot;: &quot;#666666&quot;,
                        &quot;3-5&quot;: &quot;#666666&quot;,
                        &quot;3-6&quot;: &quot;#666666&quot;,
                        &quot;3-7&quot;: &quot;#666666&quot;,
                        &quot;3-8&quot;: &quot;#666666&quot;,
                        &quot;3-9&quot;: &quot;#666666&quot;,
                        &quot;3-10&quot;: &quot;#666666&quot;,
                        &quot;3-11&quot;: &quot;#666666&quot;,
                        &quot;3-12&quot;: &quot;#666666&quot;,
                        &quot;3-13&quot;: &quot;#666666&quot;,
                        &quot;3-14&quot;: &quot;#666666&quot;,
                        &quot;3-15&quot;: &quot;#666666&quot;,
                        &quot;3-16&quot;: &quot;#666666&quot;,
                        &quot;3-17&quot;: &quot;#666666&quot;,
                        &quot;3-18&quot;: &quot;#666666&quot;,
                        &quot;3-19&quot;: &quot;#666666&quot;,
                        &quot;3-20&quot;: &quot;#666666&quot;,
                        &quot;3-21&quot;: &quot;#666666&quot;,
                        &quot;3-22&quot;: &quot;#666666&quot;,
                        &quot;3-23&quot;: &quot;#666666&quot;,
                        &quot;3-24&quot;: &quot;#666666&quot;,
                        &quot;3-25&quot;: &quot;#666666&quot;,
                        &quot;3-26&quot;: &quot;#666666&quot;,
                        &quot;3-27&quot;: &quot;#666666&quot;,
                        &quot;3-28&quot;: &quot;#666666&quot;,
                        &quot;4-2&quot;: &quot;#666666&quot;,
                        &quot;4-3&quot;: &quot;#666666&quot;,
                        &quot;4-4&quot;: &quot;#666666&quot;,
                        &quot;4-5&quot;: &quot;#666666&quot;,
                        &quot;4-6&quot;: &quot;#666666&quot;,
                        &quot;4-7&quot;: &quot;#666666&quot;,
                        &quot;4-8&quot;: &quot;#666666&quot;,
                        &quot;4-9&quot;: &quot;#666666&quot;,
                        &quot;4-10&quot;: &quot;#666666&quot;,
                        &quot;4-11&quot;: &quot;#666666&quot;,
                        &quot;4-12&quot;: &quot;#666666&quot;,
                        &quot;4-13&quot;: &quot;#666666&quot;,
                        &quot;4-14&quot;: &quot;#666666&quot;,
                        &quot;4-15&quot;: &quot;#666666&quot;,
                        &quot;4-16&quot;: &quot;#666666&quot;,
                        &quot;4-17&quot;: &quot;#666666&quot;,
                        &quot;4-18&quot;: &quot;#666666&quot;,
                        &quot;4-19&quot;: &quot;#666666&quot;,
                        &quot;4-20&quot;: &quot;#666666&quot;,
                        &quot;4-21&quot;: &quot;#666666&quot;,
                        &quot;4-22&quot;: &quot;#666666&quot;,
                        &quot;4-23&quot;: &quot;#666666&quot;,
                        &quot;4-24&quot;: &quot;#666666&quot;,
                        &quot;4-25&quot;: &quot;#666666&quot;,
                        &quot;4-26&quot;: &quot;#666666&quot;,
                        &quot;4-27&quot;: &quot;#666666&quot;,
                        &quot;4-28&quot;: &quot;#666666&quot;,
                        &quot;5-2&quot;: &quot;#666666&quot;,
                        &quot;5-3&quot;: &quot;#666666&quot;,
                        &quot;5-4&quot;: &quot;#666666&quot;,
                        &quot;5-5&quot;: &quot;#666666&quot;,
                        &quot;5-6&quot;: &quot;#666666&quot;,
                        &quot;5-7&quot;: &quot;#666666&quot;,
                        &quot;5-8&quot;: &quot;#666666&quot;,
                        &quot;5-9&quot;: &quot;#666666&quot;,
                        &quot;5-10&quot;: &quot;#666666&quot;,
                        &quot;5-11&quot;: &quot;#666666&quot;,
                        &quot;5-12&quot;: &quot;#666666&quot;,
                        &quot;5-13&quot;: &quot;#666666&quot;,
                        &quot;5-14&quot;: &quot;#666666&quot;,
                        &quot;5-15&quot;: &quot;#666666&quot;,
                        &quot;5-16&quot;: &quot;#666666&quot;,
                        &quot;5-17&quot;: &quot;#666666&quot;,
                        &quot;5-18&quot;: &quot;#666666&quot;,
                        &quot;5-19&quot;: &quot;#666666&quot;,
                        &quot;5-20&quot;: &quot;#666666&quot;,
                        &quot;5-21&quot;: &quot;#666666&quot;,
                        &quot;5-22&quot;: &quot;#666666&quot;,
                        &quot;5-23&quot;: &quot;#666666&quot;,
                        &quot;5-24&quot;: &quot;#666666&quot;,
                        &quot;5-25&quot;: &quot;#666666&quot;,
                        &quot;5-26&quot;: &quot;#666666&quot;,
                        &quot;5-27&quot;: &quot;#666666&quot;,
                        &quot;5-28&quot;: &quot;#666666&quot;,
                        &quot;6-2&quot;: &quot;#666666&quot;,
                        &quot;6-3&quot;: &quot;#666666&quot;,
                        &quot;6-4&quot;: &quot;#666666&quot;,
                        &quot;6-5&quot;: &quot;#666666&quot;,
                        &quot;6-6&quot;: &quot;#666666&quot;,
                        &quot;6-7&quot;: &quot;#666666&quot;,
                        &quot;6-8&quot;: &quot;#666666&quot;,
                        &quot;6-9&quot;: &quot;#666666&quot;,
                        &quot;6-10&quot;: &quot;#666666&quot;,
                        &quot;6-11&quot;: &quot;#666666&quot;,
                        &quot;6-12&quot;: &quot;#666666&quot;,
                        &quot;6-13&quot;: &quot;#666666&quot;,
                        &quot;6-14&quot;: &quot;#666666&quot;,
                        &quot;6-15&quot;: &quot;#666666&quot;,
                        &quot;6-16&quot;: &quot;#666666&quot;,
                        &quot;6-17&quot;: &quot;#666666&quot;,
                        &quot;6-18&quot;: &quot;#666666&quot;,
                        &quot;6-19&quot;: &quot;#666666&quot;,
                        &quot;6-20&quot;: &quot;#666666&quot;,
                        &quot;6-21&quot;: &quot;#666666&quot;,
                        &quot;6-22&quot;: &quot;#666666&quot;,
                        &quot;6-23&quot;: &quot;#666666&quot;,
                        &quot;6-24&quot;: &quot;#666666&quot;,
                        &quot;6-25&quot;: &quot;#666666&quot;,
                        &quot;6-26&quot;: &quot;#666666&quot;,
                        &quot;6-27&quot;: &quot;#666666&quot;,
                        &quot;6-28&quot;: &quot;#666666&quot;,
                        &quot;7-2&quot;: &quot;#666666&quot;,
                        &quot;7-3&quot;: &quot;#666666&quot;,
                        &quot;7-4&quot;: &quot;#666666&quot;,
                        &quot;7-5&quot;: &quot;#666666&quot;,
                        &quot;7-6&quot;: &quot;#666666&quot;,
                        &quot;7-7&quot;: &quot;#666666&quot;,
                        &quot;7-8&quot;: &quot;#666666&quot;,
                        &quot;7-9&quot;: &quot;#666666&quot;,
                        &quot;7-10&quot;: &quot;#666666&quot;,
                        &quot;7-11&quot;: &quot;#666666&quot;,
                        &quot;7-12&quot;: &quot;#666666&quot;,
                        &quot;7-13&quot;: &quot;#666666&quot;,
                        &quot;7-14&quot;: &quot;#666666&quot;,
                        &quot;7-15&quot;: &quot;#666666&quot;,
                        &quot;7-16&quot;: &quot;#666666&quot;,
                        &quot;7-17&quot;: &quot;#666666&quot;,
                        &quot;7-18&quot;: &quot;#666666&quot;,
                        &quot;7-19&quot;: &quot;#666666&quot;,
                        &quot;7-20&quot;: &quot;#666666&quot;,
                        &quot;7-21&quot;: &quot;#666666&quot;,
                        &quot;7-22&quot;: &quot;#666666&quot;,
                        &quot;7-23&quot;: &quot;#666666&quot;,
                        &quot;7-24&quot;: &quot;#666666&quot;,
                        &quot;7-25&quot;: &quot;#666666&quot;,
                        &quot;7-26&quot;: &quot;#666666&quot;,
                        &quot;7-27&quot;: &quot;#666666&quot;,
                        &quot;7-28&quot;: &quot;#666666&quot;,
                        &quot;8-2&quot;: &quot;#666666&quot;,
                        &quot;8-3&quot;: &quot;#666666&quot;,
                        &quot;8-4&quot;: &quot;#666666&quot;,
                        &quot;8-5&quot;: &quot;#666666&quot;,
                        &quot;8-6&quot;: &quot;#666666&quot;,
                        &quot;8-7&quot;: &quot;#666666&quot;,
                        &quot;8-8&quot;: &quot;#666666&quot;,
                        &quot;8-9&quot;: &quot;#666666&quot;,
                        &quot;8-10&quot;: &quot;#666666&quot;,
                        &quot;8-11&quot;: &quot;#666666&quot;,
                        &quot;8-12&quot;: &quot;#666666&quot;,
                        &quot;8-13&quot;: &quot;#666666&quot;,
                        &quot;8-14&quot;: &quot;#666666&quot;,
                        &quot;8-15&quot;: &quot;#666666&quot;,
                        &quot;8-16&quot;: &quot;#666666&quot;,
                        &quot;8-17&quot;: &quot;#666666&quot;,
                        &quot;8-18&quot;: &quot;#666666&quot;,
                        &quot;8-19&quot;: &quot;#666666&quot;,
                        &quot;8-20&quot;: &quot;#666666&quot;,
                        &quot;8-21&quot;: &quot;#666666&quot;,
                        &quot;8-22&quot;: &quot;#666666&quot;,
                        &quot;8-23&quot;: &quot;#666666&quot;,
                        &quot;8-24&quot;: &quot;#666666&quot;,
                        &quot;8-25&quot;: &quot;#666666&quot;,
                        &quot;8-26&quot;: &quot;#666666&quot;,
                        &quot;8-27&quot;: &quot;#666666&quot;,
                        &quot;8-28&quot;: &quot;#666666&quot;,
                        &quot;9-2&quot;: &quot;#666666&quot;,
                        &quot;9-3&quot;: &quot;#666666&quot;,
                        &quot;9-4&quot;: &quot;#666666&quot;,
                        &quot;9-5&quot;: &quot;#666666&quot;,
                        &quot;9-6&quot;: &quot;#666666&quot;,
                        &quot;9-7&quot;: &quot;#666666&quot;,
                        &quot;9-8&quot;: &quot;#666666&quot;,
                        &quot;9-9&quot;: &quot;#666666&quot;,
                        &quot;9-10&quot;: &quot;#666666&quot;,
                        &quot;9-11&quot;: &quot;#666666&quot;,
                        &quot;9-12&quot;: &quot;#666666&quot;,
                        &quot;9-13&quot;: &quot;#666666&quot;,
                        &quot;9-14&quot;: &quot;#666666&quot;,
                        &quot;9-15&quot;: &quot;#666666&quot;,
                        &quot;9-16&quot;: &quot;#666666&quot;,
                        &quot;9-17&quot;: &quot;#666666&quot;,
                        &quot;9-18&quot;: &quot;#666666&quot;,
                        &quot;9-19&quot;: &quot;#666666&quot;,
                        &quot;9-20&quot;: &quot;#666666&quot;,
                        &quot;9-21&quot;: &quot;#666666&quot;,
                        &quot;9-22&quot;: &quot;#666666&quot;,
                        &quot;9-23&quot;: &quot;#666666&quot;,
                        &quot;9-24&quot;: &quot;#666666&quot;,
                        &quot;9-25&quot;: &quot;#666666&quot;,
                        &quot;9-26&quot;: &quot;#666666&quot;,
                        &quot;9-27&quot;: &quot;#666666&quot;,
                        &quot;9-28&quot;: &quot;#666666&quot;,
                        &quot;10-2&quot;: &quot;#666666&quot;,
                        &quot;10-3&quot;: &quot;#666666&quot;,
                        &quot;10-4&quot;: &quot;#666666&quot;,
                        &quot;10-5&quot;: &quot;#666666&quot;,
                        &quot;10-6&quot;: &quot;#666666&quot;,
                        &quot;10-7&quot;: &quot;#666666&quot;,
                        &quot;10-8&quot;: &quot;#666666&quot;,
                        &quot;10-9&quot;: &quot;#666666&quot;,
                        &quot;10-10&quot;: &quot;#666666&quot;,
                        &quot;10-11&quot;: &quot;#666666&quot;,
                        &quot;10-12&quot;: &quot;#666666&quot;,
                        &quot;10-13&quot;: &quot;#666666&quot;,
                        &quot;10-14&quot;: &quot;#666666&quot;,
                        &quot;10-15&quot;: &quot;#666666&quot;,
                        &quot;10-16&quot;: &quot;#666666&quot;,
                        &quot;10-17&quot;: &quot;#666666&quot;,
                        &quot;10-18&quot;: &quot;#666666&quot;,
                        &quot;10-19&quot;: &quot;#666666&quot;,
                        &quot;10-20&quot;: &quot;#666666&quot;,
                        &quot;10-21&quot;: &quot;#666666&quot;,
                        &quot;10-22&quot;: &quot;#666666&quot;,
                        &quot;10-23&quot;: &quot;#666666&quot;,
                        &quot;10-24&quot;: &quot;#666666&quot;,
                        &quot;10-25&quot;: &quot;#666666&quot;,
                        &quot;10-26&quot;: &quot;#666666&quot;,
                        &quot;10-27&quot;: &quot;#666666&quot;,
                        &quot;10-28&quot;: &quot;#666666&quot;,
                        &quot;11-2&quot;: &quot;#666666&quot;,
                        &quot;11-3&quot;: &quot;#666666&quot;,
                        &quot;11-4&quot;: &quot;#666666&quot;,
                        &quot;11-5&quot;: &quot;#666666&quot;,
                        &quot;11-6&quot;: &quot;#666666&quot;,
                        &quot;11-7&quot;: &quot;#666666&quot;,
                        &quot;11-8&quot;: &quot;#666666&quot;,
                        &quot;11-9&quot;: &quot;#666666&quot;,
                        &quot;11-10&quot;: &quot;#666666&quot;,
                        &quot;11-11&quot;: &quot;#666666&quot;,
                        &quot;11-12&quot;: &quot;#666666&quot;,
                        &quot;11-13&quot;: &quot;#666666&quot;,
                        &quot;11-14&quot;: &quot;#666666&quot;,
                        &quot;11-15&quot;: &quot;#666666&quot;,
                        &quot;11-16&quot;: &quot;#666666&quot;,
                        &quot;11-17&quot;: &quot;#666666&quot;,
                        &quot;11-18&quot;: &quot;#666666&quot;,
                        &quot;11-19&quot;: &quot;#666666&quot;,
                        &quot;11-20&quot;: &quot;#666666&quot;,
                        &quot;11-21&quot;: &quot;#666666&quot;,
                        &quot;11-22&quot;: &quot;#666666&quot;,
                        &quot;11-23&quot;: &quot;#666666&quot;,
                        &quot;11-24&quot;: &quot;#666666&quot;,
                        &quot;11-25&quot;: &quot;#666666&quot;,
                        &quot;11-26&quot;: &quot;#666666&quot;,
                        &quot;11-27&quot;: &quot;#666666&quot;,
                        &quot;11-28&quot;: &quot;#666666&quot;,
                        &quot;12-2&quot;: &quot;#666666&quot;,
                        &quot;12-3&quot;: &quot;#666666&quot;,
                        &quot;12-4&quot;: &quot;#666666&quot;,
                        &quot;12-5&quot;: &quot;#666666&quot;,
                        &quot;12-6&quot;: &quot;#666666&quot;,
                        &quot;12-7&quot;: &quot;#666666&quot;,
                        &quot;12-8&quot;: &quot;#666666&quot;,
                        &quot;12-9&quot;: &quot;#666666&quot;,
                        &quot;12-10&quot;: &quot;#666666&quot;,
                        &quot;12-11&quot;: &quot;#666666&quot;,
                        &quot;12-12&quot;: &quot;#666666&quot;,
                        &quot;12-13&quot;: &quot;#666666&quot;,
                        &quot;12-14&quot;: &quot;#666666&quot;,
                        &quot;12-15&quot;: &quot;#666666&quot;,
                        &quot;12-16&quot;: &quot;#666666&quot;,
                        &quot;12-17&quot;: &quot;#666666&quot;,
                        &quot;12-18&quot;: &quot;#666666&quot;,
                        &quot;12-19&quot;: &quot;#666666&quot;,
                        &quot;12-20&quot;: &quot;#666666&quot;,
                        &quot;12-21&quot;: &quot;#666666&quot;,
                        &quot;12-22&quot;: &quot;#666666&quot;,
                        &quot;12-23&quot;: &quot;#666666&quot;,
                        &quot;12-24&quot;: &quot;#666666&quot;,
                        &quot;12-25&quot;: &quot;#666666&quot;,
                        &quot;12-26&quot;: &quot;#666666&quot;,
                        &quot;12-27&quot;: &quot;#666666&quot;,
                        &quot;12-28&quot;: &quot;#666666&quot;,
                        &quot;13-2&quot;: &quot;#666666&quot;,
                        &quot;13-3&quot;: &quot;#666666&quot;,
                        &quot;13-4&quot;: &quot;#666666&quot;,
                        &quot;13-5&quot;: &quot;#666666&quot;,
                        &quot;13-6&quot;: &quot;#666666&quot;,
                        &quot;13-7&quot;: &quot;#666666&quot;,
                        &quot;13-8&quot;: &quot;#666666&quot;,
                        &quot;13-9&quot;: &quot;#666666&quot;,
                        &quot;13-10&quot;: &quot;#666666&quot;,
                        &quot;13-11&quot;: &quot;#666666&quot;,
                        &quot;13-12&quot;: &quot;#666666&quot;,
                        &quot;13-13&quot;: &quot;#666666&quot;,
                        &quot;13-14&quot;: &quot;#666666&quot;,
                        &quot;13-15&quot;: &quot;#666666&quot;,
                        &quot;13-16&quot;: &quot;#666666&quot;,
                        &quot;13-17&quot;: &quot;#666666&quot;,
                        &quot;13-18&quot;: &quot;#666666&quot;,
                        &quot;13-19&quot;: &quot;#666666&quot;,
                        &quot;13-20&quot;: &quot;#666666&quot;,
                        &quot;13-21&quot;: &quot;#666666&quot;,
                        &quot;13-22&quot;: &quot;#666666&quot;,
                        &quot;13-23&quot;: &quot;#666666&quot;,
                        &quot;13-24&quot;: &quot;#666666&quot;,
                        &quot;13-25&quot;: &quot;#666666&quot;,
                        &quot;13-26&quot;: &quot;#666666&quot;,
                        &quot;13-27&quot;: &quot;#666666&quot;,
                        &quot;13-28&quot;: &quot;#666666&quot;,
                        &quot;14-2&quot;: &quot;#666666&quot;,
                        &quot;14-3&quot;: &quot;#666666&quot;,
                        &quot;14-4&quot;: &quot;#666666&quot;,
                        &quot;14-5&quot;: &quot;#666666&quot;,
                        &quot;14-6&quot;: &quot;#666666&quot;,
                        &quot;14-7&quot;: &quot;#666666&quot;,
                        &quot;14-8&quot;: &quot;#666666&quot;,
                        &quot;14-9&quot;: &quot;#666666&quot;,
                        &quot;14-10&quot;: &quot;#666666&quot;,
                        &quot;14-11&quot;: &quot;#666666&quot;,
                        &quot;14-12&quot;: &quot;#666666&quot;,
                        &quot;14-13&quot;: &quot;#666666&quot;,
                        &quot;14-14&quot;: &quot;#666666&quot;,
                        &quot;14-15&quot;: &quot;#666666&quot;,
                        &quot;14-16&quot;: &quot;#666666&quot;,
                        &quot;14-17&quot;: &quot;#666666&quot;,
                        &quot;14-18&quot;: &quot;#666666&quot;,
                        &quot;14-19&quot;: &quot;#666666&quot;,
                        &quot;14-20&quot;: &quot;#666666&quot;,
                        &quot;14-21&quot;: &quot;#666666&quot;,
                        &quot;14-22&quot;: &quot;#666666&quot;,
                        &quot;14-23&quot;: &quot;#666666&quot;,
                        &quot;14-24&quot;: &quot;#666666&quot;,
                        &quot;14-25&quot;: &quot;#666666&quot;,
                        &quot;14-26&quot;: &quot;#666666&quot;,
                        &quot;14-27&quot;: &quot;#666666&quot;,
                        &quot;14-28&quot;: &quot;#666666&quot;,
                        &quot;15-2&quot;: &quot;#666666&quot;,
                        &quot;15-3&quot;: &quot;#666666&quot;,
                        &quot;15-4&quot;: &quot;#666666&quot;,
                        &quot;15-5&quot;: &quot;#666666&quot;,
                        &quot;15-6&quot;: &quot;#666666&quot;,
                        &quot;15-7&quot;: &quot;#666666&quot;,
                        &quot;15-8&quot;: &quot;#666666&quot;,
                        &quot;15-9&quot;: &quot;#666666&quot;,
                        &quot;15-10&quot;: &quot;#666666&quot;,
                        &quot;15-11&quot;: &quot;#666666&quot;,
                        &quot;15-12&quot;: &quot;#666666&quot;,
                        &quot;15-13&quot;: &quot;#666666&quot;,
                        &quot;15-14&quot;: &quot;#666666&quot;,
                        &quot;15-15&quot;: &quot;#666666&quot;,
                        &quot;15-16&quot;: &quot;#666666&quot;,
                        &quot;15-17&quot;: &quot;#666666&quot;,
                        &quot;15-18&quot;: &quot;#666666&quot;,
                        &quot;15-19&quot;: &quot;#666666&quot;,
                        &quot;15-20&quot;: &quot;#666666&quot;,
                        &quot;15-21&quot;: &quot;#666666&quot;,
                        &quot;15-22&quot;: &quot;#666666&quot;,
                        &quot;15-23&quot;: &quot;#666666&quot;,
                        &quot;15-24&quot;: &quot;#666666&quot;,
                        &quot;15-25&quot;: &quot;#666666&quot;,
                        &quot;15-26&quot;: &quot;#666666&quot;,
                        &quot;15-27&quot;: &quot;#666666&quot;,
                        &quot;15-28&quot;: &quot;#666666&quot;,
                        &quot;16-2&quot;: &quot;#666666&quot;,
                        &quot;16-3&quot;: &quot;#666666&quot;,
                        &quot;16-4&quot;: &quot;#666666&quot;,
                        &quot;16-5&quot;: &quot;#666666&quot;,
                        &quot;16-6&quot;: &quot;#666666&quot;,
                        &quot;16-7&quot;: &quot;#666666&quot;,
                        &quot;16-8&quot;: &quot;#666666&quot;,
                        &quot;16-9&quot;: &quot;#666666&quot;,
                        &quot;16-10&quot;: &quot;#666666&quot;,
                        &quot;16-11&quot;: &quot;#666666&quot;,
                        &quot;16-12&quot;: &quot;#666666&quot;,
                        &quot;16-13&quot;: &quot;#666666&quot;,
                        &quot;16-14&quot;: &quot;#666666&quot;,
                        &quot;16-15&quot;: &quot;#666666&quot;,
                        &quot;16-16&quot;: &quot;#666666&quot;,
                        &quot;16-17&quot;: &quot;#666666&quot;,
                        &quot;16-18&quot;: &quot;#666666&quot;,
                        &quot;16-19&quot;: &quot;#666666&quot;,
                        &quot;16-20&quot;: &quot;#666666&quot;,
                        &quot;16-21&quot;: &quot;#666666&quot;,
                        &quot;16-22&quot;: &quot;#666666&quot;,
                        &quot;16-23&quot;: &quot;#666666&quot;,
                        &quot;16-24&quot;: &quot;#666666&quot;,
                        &quot;16-25&quot;: &quot;#666666&quot;,
                        &quot;16-26&quot;: &quot;#666666&quot;,
                        &quot;16-27&quot;: &quot;#666666&quot;,
                        &quot;16-28&quot;: &quot;#666666&quot;,
                        &quot;17-2&quot;: &quot;#666666&quot;,
                        &quot;17-3&quot;: &quot;#666666&quot;,
                        &quot;17-4&quot;: &quot;#666666&quot;,
                        &quot;17-5&quot;: &quot;#666666&quot;,
                        &quot;17-6&quot;: &quot;#666666&quot;,
                        &quot;17-7&quot;: &quot;#666666&quot;,
                        &quot;17-8&quot;: &quot;#666666&quot;,
                        &quot;17-9&quot;: &quot;#666666&quot;,
                        &quot;17-10&quot;: &quot;#666666&quot;,
                        &quot;17-11&quot;: &quot;#666666&quot;,
                        &quot;17-12&quot;: &quot;#666666&quot;,
                        &quot;17-13&quot;: &quot;#666666&quot;,
                        &quot;17-14&quot;: &quot;#666666&quot;,
                        &quot;17-15&quot;: &quot;#666666&quot;,
                        &quot;17-16&quot;: &quot;#666666&quot;,
                        &quot;17-17&quot;: &quot;#666666&quot;,
                        &quot;17-18&quot;: &quot;#666666&quot;,
                        &quot;17-19&quot;: &quot;#666666&quot;,
                        &quot;17-20&quot;: &quot;#666666&quot;,
                        &quot;17-21&quot;: &quot;#666666&quot;,
                        &quot;17-22&quot;: &quot;#666666&quot;,
                        &quot;17-23&quot;: &quot;#666666&quot;,
                        &quot;17-24&quot;: &quot;#666666&quot;,
                        &quot;17-25&quot;: &quot;#666666&quot;,
                        &quot;17-26&quot;: &quot;#666666&quot;,
                        &quot;17-27&quot;: &quot;#666666&quot;,
                        &quot;17-28&quot;: &quot;#666666&quot;,
                        &quot;18-2&quot;: &quot;#666666&quot;,
                        &quot;18-3&quot;: &quot;#666666&quot;,
                        &quot;18-4&quot;: &quot;#666666&quot;,
                        &quot;18-5&quot;: &quot;#666666&quot;,
                        &quot;18-6&quot;: &quot;#666666&quot;,
                        &quot;18-7&quot;: &quot;#666666&quot;,
                        &quot;18-8&quot;: &quot;#666666&quot;,
                        &quot;18-9&quot;: &quot;#666666&quot;,
                        &quot;18-10&quot;: &quot;#666666&quot;,
                        &quot;18-11&quot;: &quot;#666666&quot;,
                        &quot;18-12&quot;: &quot;#666666&quot;,
                        &quot;18-13&quot;: &quot;#666666&quot;,
                        &quot;18-14&quot;: &quot;#666666&quot;,
                        &quot;18-15&quot;: &quot;#666666&quot;,
                        &quot;18-16&quot;: &quot;#666666&quot;,
                        &quot;18-17&quot;: &quot;#666666&quot;,
                        &quot;18-18&quot;: &quot;#666666&quot;,
                        &quot;18-19&quot;: &quot;#666666&quot;,
                        &quot;18-20&quot;: &quot;#666666&quot;,
                        &quot;18-21&quot;: &quot;#666666&quot;,
                        &quot;18-22&quot;: &quot;#666666&quot;,
                        &quot;18-23&quot;: &quot;#666666&quot;,
                        &quot;18-24&quot;: &quot;#666666&quot;,
                        &quot;18-25&quot;: &quot;#666666&quot;,
                        &quot;18-26&quot;: &quot;#666666&quot;,
                        &quot;18-27&quot;: &quot;#666666&quot;,
                        &quot;18-28&quot;: &quot;#666666&quot;
                    },
                    &quot;wall_color&quot;: &quot;#666666&quot;,
                    &quot;wall_thickness&quot;: 24,
                    &quot;floor_texture_id&quot;: 9,
                    &quot;starting_point_row&quot;: 16,
                    &quot;starting_point_col&quot;: 27,
                    &quot;floor_accepted&quot;: true,
                    &quot;door_asset_id&quot;: 1,
                    &quot;door_position&quot;: {
                        &quot;row&quot;: 11,
                        &quot;col&quot;: 11
                    },
                    &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 6,
            &quot;user_id&quot;: 2,
            &quot;name&quot;: &quot;Skarbiec Pirat&oacute;w&quot;,
            &quot;description&quot;: &quot;Znajdź legendarny skarb pirat&oacute;w ukryty w tajemniczej jaskini na bezludnej wyspie.&quot;,
            &quot;thumbnail_url&quot;: &quot;/storage/escape-rooms/thumbnails/rl-app-3.png&quot;,
            &quot;soundtrack_url&quot;: &quot;/storage/escape-rooms/soundtracks/2c23a7e1-23c1-41ca-9101-278214e259f0.mp3&quot;,
            &quot;is_public&quot;: true,
            &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;moderator&quot;,
                &quot;email&quot;: &quot;mod@riddlelab.world&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;last_login_at&quot;: &quot;2026-02-13 22:04:23&quot;,
                &quot;role&quot;: &quot;moderator&quot;,
                &quot;avatar_url&quot;: null,
                &quot;player_configuration&quot;: &quot;{\&quot;avatar\&quot;:{\&quot;skin_color\&quot;:\&quot;#e8beac\&quot;,\&quot;hair_color\&quot;:\&quot;#000000\&quot;,\&quot;eye_color\&quot;:\&quot;#6b8e23\&quot;,\&quot;outfit_color\&quot;:\&quot;#b22222\&quot;}}&quot;,
                &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;
            },
            &quot;rooms&quot;: [
                {
                    &quot;id&quot;: 6,
                    &quot;escape_room_id&quot;: 6,
                    &quot;grid_data&quot;: {
                        &quot;2-2&quot;: &quot;1&quot;,
                        &quot;2-3&quot;: &quot;1&quot;,
                        &quot;2-4&quot;: &quot;1&quot;,
                        &quot;2-5&quot;: &quot;1&quot;,
                        &quot;2-6&quot;: &quot;1&quot;,
                        &quot;2-7&quot;: &quot;1&quot;,
                        &quot;2-8&quot;: &quot;1&quot;,
                        &quot;2-9&quot;: &quot;1&quot;,
                        &quot;2-10&quot;: &quot;1&quot;,
                        &quot;2-11&quot;: &quot;1&quot;,
                        &quot;2-12&quot;: &quot;1&quot;,
                        &quot;2-13&quot;: &quot;1&quot;,
                        &quot;2-14&quot;: &quot;1&quot;,
                        &quot;2-15&quot;: &quot;1&quot;,
                        &quot;2-16&quot;: &quot;1&quot;,
                        &quot;2-17&quot;: &quot;1&quot;,
                        &quot;2-18&quot;: &quot;1&quot;,
                        &quot;2-19&quot;: &quot;1&quot;,
                        &quot;2-20&quot;: &quot;1&quot;,
                        &quot;2-21&quot;: &quot;1&quot;,
                        &quot;2-22&quot;: &quot;1&quot;,
                        &quot;2-23&quot;: &quot;1&quot;,
                        &quot;2-24&quot;: &quot;1&quot;,
                        &quot;2-25&quot;: &quot;1&quot;,
                        &quot;2-26&quot;: &quot;1&quot;,
                        &quot;2-27&quot;: &quot;1&quot;,
                        &quot;2-28&quot;: &quot;1&quot;,
                        &quot;3-2&quot;: &quot;1&quot;,
                        &quot;3-3&quot;: &quot;1&quot;,
                        &quot;3-4&quot;: &quot;1&quot;,
                        &quot;3-5&quot;: &quot;1&quot;,
                        &quot;3-6&quot;: &quot;1&quot;,
                        &quot;3-7&quot;: &quot;1&quot;,
                        &quot;3-8&quot;: &quot;1&quot;,
                        &quot;3-9&quot;: &quot;1&quot;,
                        &quot;3-10&quot;: &quot;1&quot;,
                        &quot;3-11&quot;: &quot;1&quot;,
                        &quot;3-12&quot;: &quot;1&quot;,
                        &quot;3-13&quot;: &quot;1&quot;,
                        &quot;3-14&quot;: &quot;1&quot;,
                        &quot;3-15&quot;: &quot;1&quot;,
                        &quot;3-16&quot;: &quot;1&quot;,
                        &quot;3-17&quot;: &quot;1&quot;,
                        &quot;3-18&quot;: &quot;1&quot;,
                        &quot;3-19&quot;: &quot;1&quot;,
                        &quot;3-20&quot;: &quot;1&quot;,
                        &quot;3-21&quot;: &quot;1&quot;,
                        &quot;3-22&quot;: &quot;1&quot;,
                        &quot;3-23&quot;: &quot;1&quot;,
                        &quot;3-24&quot;: &quot;1&quot;,
                        &quot;3-25&quot;: &quot;1&quot;,
                        &quot;3-26&quot;: &quot;1&quot;,
                        &quot;3-27&quot;: &quot;1&quot;,
                        &quot;3-28&quot;: &quot;1&quot;,
                        &quot;4-2&quot;: &quot;1&quot;,
                        &quot;4-3&quot;: &quot;1&quot;,
                        &quot;4-4&quot;: &quot;1&quot;,
                        &quot;4-5&quot;: &quot;1&quot;,
                        &quot;4-6&quot;: &quot;1&quot;,
                        &quot;4-7&quot;: &quot;1&quot;,
                        &quot;4-8&quot;: &quot;1&quot;,
                        &quot;4-9&quot;: &quot;1&quot;,
                        &quot;4-10&quot;: &quot;1&quot;,
                        &quot;4-11&quot;: &quot;1&quot;,
                        &quot;4-12&quot;: &quot;1&quot;,
                        &quot;4-13&quot;: &quot;1&quot;,
                        &quot;4-14&quot;: &quot;1&quot;,
                        &quot;4-15&quot;: &quot;1&quot;,
                        &quot;4-16&quot;: &quot;1&quot;,
                        &quot;4-17&quot;: &quot;1&quot;,
                        &quot;4-18&quot;: &quot;1&quot;,
                        &quot;4-19&quot;: &quot;1&quot;,
                        &quot;4-20&quot;: &quot;1&quot;,
                        &quot;4-21&quot;: &quot;1&quot;,
                        &quot;4-22&quot;: &quot;1&quot;,
                        &quot;4-23&quot;: &quot;1&quot;,
                        &quot;4-24&quot;: &quot;1&quot;,
                        &quot;4-25&quot;: &quot;1&quot;,
                        &quot;4-26&quot;: &quot;1&quot;,
                        &quot;4-27&quot;: &quot;1&quot;,
                        &quot;4-28&quot;: &quot;1&quot;,
                        &quot;5-2&quot;: &quot;1&quot;,
                        &quot;5-3&quot;: &quot;1&quot;,
                        &quot;5-4&quot;: &quot;1&quot;,
                        &quot;5-5&quot;: &quot;1&quot;,
                        &quot;5-6&quot;: &quot;1&quot;,
                        &quot;5-7&quot;: &quot;1&quot;,
                        &quot;5-8&quot;: &quot;1&quot;,
                        &quot;5-9&quot;: &quot;1&quot;,
                        &quot;5-10&quot;: &quot;1&quot;,
                        &quot;5-11&quot;: &quot;1&quot;,
                        &quot;5-12&quot;: &quot;1&quot;,
                        &quot;5-13&quot;: &quot;1&quot;,
                        &quot;5-14&quot;: &quot;1&quot;,
                        &quot;5-15&quot;: &quot;1&quot;,
                        &quot;5-16&quot;: &quot;1&quot;,
                        &quot;5-17&quot;: &quot;1&quot;,
                        &quot;5-18&quot;: &quot;1&quot;,
                        &quot;5-19&quot;: &quot;1&quot;,
                        &quot;5-20&quot;: &quot;1&quot;,
                        &quot;5-21&quot;: &quot;1&quot;,
                        &quot;5-22&quot;: &quot;1&quot;,
                        &quot;5-23&quot;: &quot;1&quot;,
                        &quot;5-24&quot;: &quot;1&quot;,
                        &quot;5-25&quot;: &quot;1&quot;,
                        &quot;5-26&quot;: &quot;1&quot;,
                        &quot;5-27&quot;: &quot;1&quot;,
                        &quot;5-28&quot;: &quot;1&quot;,
                        &quot;6-2&quot;: &quot;1&quot;,
                        &quot;6-3&quot;: &quot;1&quot;,
                        &quot;6-4&quot;: &quot;1&quot;,
                        &quot;6-5&quot;: &quot;1&quot;,
                        &quot;6-6&quot;: &quot;1&quot;,
                        &quot;6-7&quot;: &quot;1&quot;,
                        &quot;6-8&quot;: &quot;1&quot;,
                        &quot;6-9&quot;: &quot;1&quot;,
                        &quot;6-10&quot;: &quot;1&quot;,
                        &quot;6-11&quot;: &quot;1&quot;,
                        &quot;6-12&quot;: &quot;1&quot;,
                        &quot;6-13&quot;: &quot;1&quot;,
                        &quot;6-14&quot;: &quot;1&quot;,
                        &quot;6-15&quot;: &quot;1&quot;,
                        &quot;6-16&quot;: &quot;1&quot;,
                        &quot;6-17&quot;: &quot;1&quot;,
                        &quot;6-18&quot;: &quot;1&quot;,
                        &quot;6-19&quot;: &quot;1&quot;,
                        &quot;6-20&quot;: &quot;1&quot;,
                        &quot;6-21&quot;: &quot;1&quot;,
                        &quot;6-22&quot;: &quot;1&quot;,
                        &quot;6-23&quot;: &quot;1&quot;,
                        &quot;6-24&quot;: &quot;1&quot;,
                        &quot;6-25&quot;: &quot;1&quot;,
                        &quot;6-26&quot;: &quot;1&quot;,
                        &quot;6-27&quot;: &quot;1&quot;,
                        &quot;6-28&quot;: &quot;1&quot;,
                        &quot;7-2&quot;: &quot;1&quot;,
                        &quot;7-3&quot;: &quot;1&quot;,
                        &quot;7-4&quot;: &quot;1&quot;,
                        &quot;7-5&quot;: &quot;1&quot;,
                        &quot;7-6&quot;: &quot;1&quot;,
                        &quot;7-7&quot;: &quot;1&quot;,
                        &quot;7-8&quot;: &quot;1&quot;,
                        &quot;7-9&quot;: &quot;1&quot;,
                        &quot;7-10&quot;: &quot;1&quot;,
                        &quot;7-11&quot;: &quot;1&quot;,
                        &quot;7-12&quot;: &quot;1&quot;,
                        &quot;7-13&quot;: &quot;1&quot;,
                        &quot;7-14&quot;: &quot;1&quot;,
                        &quot;7-15&quot;: &quot;1&quot;,
                        &quot;7-16&quot;: &quot;1&quot;,
                        &quot;7-17&quot;: &quot;1&quot;,
                        &quot;7-18&quot;: &quot;1&quot;,
                        &quot;7-19&quot;: &quot;1&quot;,
                        &quot;7-20&quot;: &quot;1&quot;,
                        &quot;7-21&quot;: &quot;1&quot;,
                        &quot;7-22&quot;: &quot;1&quot;,
                        &quot;7-23&quot;: &quot;1&quot;,
                        &quot;7-24&quot;: &quot;1&quot;,
                        &quot;7-25&quot;: &quot;1&quot;,
                        &quot;7-26&quot;: &quot;1&quot;,
                        &quot;7-27&quot;: &quot;1&quot;,
                        &quot;7-28&quot;: &quot;1&quot;,
                        &quot;8-2&quot;: &quot;1&quot;,
                        &quot;8-3&quot;: &quot;1&quot;,
                        &quot;8-4&quot;: &quot;1&quot;,
                        &quot;8-5&quot;: &quot;1&quot;,
                        &quot;8-6&quot;: &quot;1&quot;,
                        &quot;8-7&quot;: &quot;1&quot;,
                        &quot;8-8&quot;: &quot;1&quot;,
                        &quot;8-9&quot;: &quot;1&quot;,
                        &quot;8-10&quot;: &quot;1&quot;,
                        &quot;8-11&quot;: &quot;1&quot;,
                        &quot;8-12&quot;: &quot;1&quot;,
                        &quot;8-13&quot;: &quot;1&quot;,
                        &quot;8-14&quot;: &quot;1&quot;,
                        &quot;8-15&quot;: &quot;1&quot;,
                        &quot;8-16&quot;: &quot;1&quot;,
                        &quot;8-17&quot;: &quot;1&quot;,
                        &quot;8-18&quot;: &quot;1&quot;,
                        &quot;8-19&quot;: &quot;1&quot;,
                        &quot;8-20&quot;: &quot;1&quot;,
                        &quot;8-21&quot;: &quot;1&quot;,
                        &quot;8-22&quot;: &quot;1&quot;,
                        &quot;8-23&quot;: &quot;1&quot;,
                        &quot;8-24&quot;: &quot;1&quot;,
                        &quot;8-25&quot;: &quot;1&quot;,
                        &quot;8-26&quot;: &quot;1&quot;,
                        &quot;8-27&quot;: &quot;1&quot;,
                        &quot;8-28&quot;: &quot;1&quot;,
                        &quot;9-2&quot;: &quot;1&quot;,
                        &quot;9-3&quot;: &quot;1&quot;,
                        &quot;9-4&quot;: &quot;1&quot;,
                        &quot;9-5&quot;: &quot;1&quot;,
                        &quot;9-6&quot;: &quot;1&quot;,
                        &quot;9-7&quot;: &quot;1&quot;,
                        &quot;9-8&quot;: &quot;1&quot;,
                        &quot;9-9&quot;: &quot;1&quot;,
                        &quot;9-10&quot;: &quot;1&quot;,
                        &quot;9-11&quot;: &quot;1&quot;,
                        &quot;9-12&quot;: &quot;1&quot;,
                        &quot;9-13&quot;: &quot;1&quot;,
                        &quot;9-14&quot;: &quot;1&quot;,
                        &quot;9-15&quot;: &quot;1&quot;,
                        &quot;9-16&quot;: &quot;1&quot;,
                        &quot;9-17&quot;: &quot;1&quot;,
                        &quot;9-18&quot;: &quot;1&quot;,
                        &quot;9-19&quot;: &quot;1&quot;,
                        &quot;9-20&quot;: &quot;1&quot;,
                        &quot;9-21&quot;: &quot;1&quot;,
                        &quot;9-22&quot;: &quot;1&quot;,
                        &quot;9-23&quot;: &quot;1&quot;,
                        &quot;9-24&quot;: &quot;1&quot;,
                        &quot;9-25&quot;: &quot;1&quot;,
                        &quot;9-26&quot;: &quot;1&quot;,
                        &quot;9-27&quot;: &quot;1&quot;,
                        &quot;9-28&quot;: &quot;1&quot;,
                        &quot;10-2&quot;: &quot;1&quot;,
                        &quot;10-3&quot;: &quot;1&quot;,
                        &quot;10-4&quot;: &quot;1&quot;,
                        &quot;10-5&quot;: &quot;1&quot;,
                        &quot;10-6&quot;: &quot;1&quot;,
                        &quot;10-7&quot;: &quot;1&quot;,
                        &quot;10-8&quot;: &quot;1&quot;,
                        &quot;10-9&quot;: &quot;1&quot;,
                        &quot;10-10&quot;: &quot;1&quot;,
                        &quot;10-11&quot;: &quot;1&quot;,
                        &quot;10-12&quot;: &quot;1&quot;,
                        &quot;10-13&quot;: &quot;1&quot;,
                        &quot;10-14&quot;: &quot;1&quot;,
                        &quot;10-15&quot;: &quot;1&quot;,
                        &quot;10-16&quot;: &quot;1&quot;,
                        &quot;10-17&quot;: &quot;1&quot;,
                        &quot;10-18&quot;: &quot;1&quot;,
                        &quot;10-19&quot;: &quot;1&quot;,
                        &quot;10-20&quot;: &quot;1&quot;,
                        &quot;10-21&quot;: &quot;1&quot;,
                        &quot;10-22&quot;: &quot;1&quot;,
                        &quot;10-23&quot;: &quot;1&quot;,
                        &quot;10-24&quot;: &quot;1&quot;,
                        &quot;10-25&quot;: &quot;1&quot;,
                        &quot;10-26&quot;: &quot;1&quot;,
                        &quot;10-27&quot;: &quot;1&quot;,
                        &quot;10-28&quot;: &quot;1&quot;,
                        &quot;11-2&quot;: &quot;1&quot;,
                        &quot;11-3&quot;: &quot;1&quot;,
                        &quot;11-4&quot;: &quot;1&quot;,
                        &quot;11-5&quot;: &quot;1&quot;,
                        &quot;11-6&quot;: &quot;1&quot;,
                        &quot;11-7&quot;: &quot;1&quot;,
                        &quot;11-8&quot;: &quot;1&quot;,
                        &quot;11-9&quot;: &quot;1&quot;,
                        &quot;11-10&quot;: &quot;1&quot;,
                        &quot;11-11&quot;: &quot;1&quot;,
                        &quot;11-12&quot;: &quot;1&quot;,
                        &quot;11-13&quot;: &quot;1&quot;,
                        &quot;11-14&quot;: &quot;1&quot;,
                        &quot;11-15&quot;: &quot;1&quot;,
                        &quot;11-16&quot;: &quot;1&quot;,
                        &quot;11-17&quot;: &quot;1&quot;,
                        &quot;11-18&quot;: &quot;1&quot;,
                        &quot;11-19&quot;: &quot;1&quot;,
                        &quot;11-20&quot;: &quot;1&quot;,
                        &quot;11-21&quot;: &quot;1&quot;,
                        &quot;11-22&quot;: &quot;1&quot;,
                        &quot;11-23&quot;: &quot;1&quot;,
                        &quot;11-24&quot;: &quot;1&quot;,
                        &quot;11-25&quot;: &quot;1&quot;,
                        &quot;11-26&quot;: &quot;1&quot;,
                        &quot;11-27&quot;: &quot;1&quot;,
                        &quot;11-28&quot;: &quot;1&quot;,
                        &quot;12-2&quot;: &quot;1&quot;,
                        &quot;12-3&quot;: &quot;1&quot;,
                        &quot;12-4&quot;: &quot;1&quot;,
                        &quot;12-5&quot;: &quot;1&quot;,
                        &quot;12-6&quot;: &quot;1&quot;,
                        &quot;12-7&quot;: &quot;1&quot;,
                        &quot;12-8&quot;: &quot;1&quot;,
                        &quot;12-9&quot;: &quot;1&quot;,
                        &quot;12-10&quot;: &quot;1&quot;,
                        &quot;12-11&quot;: &quot;1&quot;,
                        &quot;12-12&quot;: &quot;1&quot;,
                        &quot;12-13&quot;: &quot;1&quot;,
                        &quot;12-14&quot;: &quot;1&quot;,
                        &quot;12-15&quot;: &quot;1&quot;,
                        &quot;12-16&quot;: &quot;1&quot;,
                        &quot;12-17&quot;: &quot;1&quot;,
                        &quot;12-18&quot;: &quot;1&quot;,
                        &quot;12-19&quot;: &quot;1&quot;,
                        &quot;12-20&quot;: &quot;1&quot;,
                        &quot;12-21&quot;: &quot;1&quot;,
                        &quot;12-22&quot;: &quot;1&quot;,
                        &quot;12-23&quot;: &quot;1&quot;,
                        &quot;12-24&quot;: &quot;1&quot;,
                        &quot;12-25&quot;: &quot;1&quot;,
                        &quot;12-26&quot;: &quot;1&quot;,
                        &quot;12-27&quot;: &quot;1&quot;,
                        &quot;12-28&quot;: &quot;1&quot;,
                        &quot;13-2&quot;: &quot;1&quot;,
                        &quot;13-3&quot;: &quot;1&quot;,
                        &quot;13-4&quot;: &quot;1&quot;,
                        &quot;13-5&quot;: &quot;1&quot;,
                        &quot;13-6&quot;: &quot;1&quot;,
                        &quot;13-7&quot;: &quot;1&quot;,
                        &quot;13-8&quot;: &quot;1&quot;,
                        &quot;13-9&quot;: &quot;1&quot;,
                        &quot;13-10&quot;: &quot;1&quot;,
                        &quot;13-11&quot;: &quot;1&quot;,
                        &quot;13-12&quot;: &quot;1&quot;,
                        &quot;13-13&quot;: &quot;1&quot;,
                        &quot;13-14&quot;: &quot;1&quot;,
                        &quot;13-15&quot;: &quot;1&quot;,
                        &quot;13-16&quot;: &quot;1&quot;,
                        &quot;13-17&quot;: &quot;1&quot;,
                        &quot;13-18&quot;: &quot;1&quot;,
                        &quot;13-19&quot;: &quot;1&quot;,
                        &quot;13-20&quot;: &quot;1&quot;,
                        &quot;13-21&quot;: &quot;1&quot;,
                        &quot;13-22&quot;: &quot;1&quot;,
                        &quot;13-23&quot;: &quot;1&quot;,
                        &quot;13-24&quot;: &quot;1&quot;,
                        &quot;13-25&quot;: &quot;1&quot;,
                        &quot;13-26&quot;: &quot;1&quot;,
                        &quot;13-27&quot;: &quot;1&quot;,
                        &quot;13-28&quot;: &quot;1&quot;,
                        &quot;14-2&quot;: &quot;1&quot;,
                        &quot;14-3&quot;: &quot;1&quot;,
                        &quot;14-4&quot;: &quot;1&quot;,
                        &quot;14-5&quot;: &quot;1&quot;,
                        &quot;14-6&quot;: &quot;1&quot;,
                        &quot;14-7&quot;: &quot;1&quot;,
                        &quot;14-8&quot;: &quot;1&quot;,
                        &quot;14-9&quot;: &quot;1&quot;,
                        &quot;14-10&quot;: &quot;1&quot;,
                        &quot;14-11&quot;: &quot;1&quot;,
                        &quot;14-12&quot;: &quot;1&quot;,
                        &quot;14-13&quot;: &quot;1&quot;,
                        &quot;14-14&quot;: &quot;1&quot;,
                        &quot;14-15&quot;: &quot;1&quot;,
                        &quot;14-16&quot;: &quot;1&quot;,
                        &quot;14-17&quot;: &quot;1&quot;,
                        &quot;14-18&quot;: &quot;1&quot;,
                        &quot;14-19&quot;: &quot;1&quot;,
                        &quot;14-20&quot;: &quot;1&quot;,
                        &quot;14-21&quot;: &quot;1&quot;,
                        &quot;14-22&quot;: &quot;1&quot;,
                        &quot;14-23&quot;: &quot;1&quot;,
                        &quot;14-24&quot;: &quot;1&quot;,
                        &quot;14-25&quot;: &quot;1&quot;,
                        &quot;14-26&quot;: &quot;1&quot;,
                        &quot;14-27&quot;: &quot;1&quot;,
                        &quot;14-28&quot;: &quot;1&quot;,
                        &quot;15-2&quot;: &quot;1&quot;,
                        &quot;15-3&quot;: &quot;1&quot;,
                        &quot;15-4&quot;: &quot;1&quot;,
                        &quot;15-5&quot;: &quot;1&quot;,
                        &quot;15-6&quot;: &quot;1&quot;,
                        &quot;15-7&quot;: &quot;1&quot;,
                        &quot;15-8&quot;: &quot;1&quot;,
                        &quot;15-9&quot;: &quot;1&quot;,
                        &quot;15-10&quot;: &quot;1&quot;,
                        &quot;15-11&quot;: &quot;1&quot;,
                        &quot;15-12&quot;: &quot;1&quot;,
                        &quot;15-13&quot;: &quot;1&quot;,
                        &quot;15-14&quot;: &quot;1&quot;,
                        &quot;15-15&quot;: &quot;1&quot;,
                        &quot;15-16&quot;: &quot;1&quot;,
                        &quot;15-17&quot;: &quot;1&quot;,
                        &quot;15-18&quot;: &quot;1&quot;,
                        &quot;15-19&quot;: &quot;1&quot;,
                        &quot;15-20&quot;: &quot;1&quot;,
                        &quot;15-21&quot;: &quot;1&quot;,
                        &quot;15-22&quot;: &quot;1&quot;,
                        &quot;15-23&quot;: &quot;1&quot;,
                        &quot;15-24&quot;: &quot;1&quot;,
                        &quot;15-25&quot;: &quot;1&quot;,
                        &quot;15-26&quot;: &quot;1&quot;,
                        &quot;15-27&quot;: &quot;1&quot;,
                        &quot;15-28&quot;: &quot;1&quot;,
                        &quot;16-2&quot;: &quot;1&quot;,
                        &quot;16-3&quot;: &quot;1&quot;,
                        &quot;16-4&quot;: &quot;1&quot;,
                        &quot;16-5&quot;: &quot;1&quot;,
                        &quot;16-6&quot;: &quot;1&quot;,
                        &quot;16-7&quot;: &quot;1&quot;,
                        &quot;16-8&quot;: &quot;1&quot;,
                        &quot;16-9&quot;: &quot;1&quot;,
                        &quot;16-10&quot;: &quot;1&quot;,
                        &quot;16-11&quot;: &quot;1&quot;,
                        &quot;16-12&quot;: &quot;1&quot;,
                        &quot;16-13&quot;: &quot;1&quot;,
                        &quot;16-14&quot;: &quot;1&quot;,
                        &quot;16-15&quot;: &quot;1&quot;,
                        &quot;16-16&quot;: &quot;1&quot;,
                        &quot;16-17&quot;: &quot;1&quot;,
                        &quot;16-18&quot;: &quot;1&quot;,
                        &quot;16-19&quot;: &quot;1&quot;,
                        &quot;16-20&quot;: &quot;1&quot;,
                        &quot;16-21&quot;: &quot;1&quot;,
                        &quot;16-22&quot;: &quot;1&quot;,
                        &quot;16-23&quot;: &quot;1&quot;,
                        &quot;16-24&quot;: &quot;1&quot;,
                        &quot;16-25&quot;: &quot;1&quot;,
                        &quot;16-26&quot;: &quot;1&quot;,
                        &quot;16-27&quot;: &quot;1&quot;,
                        &quot;16-28&quot;: &quot;1&quot;,
                        &quot;17-2&quot;: &quot;1&quot;,
                        &quot;17-3&quot;: &quot;1&quot;,
                        &quot;17-4&quot;: &quot;1&quot;,
                        &quot;17-5&quot;: &quot;1&quot;,
                        &quot;17-6&quot;: &quot;1&quot;,
                        &quot;17-7&quot;: &quot;1&quot;,
                        &quot;17-8&quot;: &quot;1&quot;,
                        &quot;17-9&quot;: &quot;1&quot;,
                        &quot;17-10&quot;: &quot;1&quot;,
                        &quot;17-11&quot;: &quot;1&quot;,
                        &quot;17-12&quot;: &quot;1&quot;,
                        &quot;17-13&quot;: &quot;1&quot;,
                        &quot;17-14&quot;: &quot;1&quot;,
                        &quot;17-15&quot;: &quot;1&quot;,
                        &quot;17-16&quot;: &quot;1&quot;,
                        &quot;17-17&quot;: &quot;1&quot;,
                        &quot;17-18&quot;: &quot;1&quot;,
                        &quot;17-19&quot;: &quot;1&quot;,
                        &quot;17-20&quot;: &quot;1&quot;,
                        &quot;17-21&quot;: &quot;1&quot;,
                        &quot;17-22&quot;: &quot;1&quot;,
                        &quot;17-23&quot;: &quot;1&quot;,
                        &quot;17-24&quot;: &quot;1&quot;,
                        &quot;17-25&quot;: &quot;1&quot;,
                        &quot;17-26&quot;: &quot;1&quot;,
                        &quot;17-27&quot;: &quot;1&quot;,
                        &quot;17-28&quot;: &quot;1&quot;,
                        &quot;18-2&quot;: &quot;1&quot;,
                        &quot;18-3&quot;: &quot;1&quot;,
                        &quot;18-4&quot;: &quot;1&quot;,
                        &quot;18-5&quot;: &quot;1&quot;,
                        &quot;18-6&quot;: &quot;1&quot;,
                        &quot;18-7&quot;: &quot;1&quot;,
                        &quot;18-8&quot;: &quot;1&quot;,
                        &quot;18-9&quot;: &quot;1&quot;,
                        &quot;18-10&quot;: &quot;1&quot;,
                        &quot;18-11&quot;: &quot;1&quot;,
                        &quot;18-12&quot;: &quot;1&quot;,
                        &quot;18-13&quot;: &quot;1&quot;,
                        &quot;18-14&quot;: &quot;1&quot;,
                        &quot;18-15&quot;: &quot;1&quot;,
                        &quot;18-16&quot;: &quot;1&quot;,
                        &quot;18-17&quot;: &quot;1&quot;,
                        &quot;18-18&quot;: &quot;1&quot;,
                        &quot;18-19&quot;: &quot;1&quot;,
                        &quot;18-20&quot;: &quot;1&quot;,
                        &quot;18-21&quot;: &quot;1&quot;,
                        &quot;18-22&quot;: &quot;1&quot;,
                        &quot;18-23&quot;: &quot;1&quot;,
                        &quot;18-24&quot;: &quot;1&quot;,
                        &quot;18-25&quot;: &quot;1&quot;,
                        &quot;18-26&quot;: &quot;1&quot;,
                        &quot;18-27&quot;: &quot;1&quot;,
                        &quot;18-28&quot;: &quot;1&quot;
                    },
                    &quot;walls_data&quot;: {
                        &quot;wallColor&quot;: &quot;#444444&quot;,
                        &quot;2-2&quot;: &quot;#444444&quot;,
                        &quot;2-3&quot;: &quot;#444444&quot;,
                        &quot;2-4&quot;: &quot;#444444&quot;,
                        &quot;2-5&quot;: &quot;#444444&quot;,
                        &quot;2-6&quot;: &quot;#444444&quot;,
                        &quot;2-7&quot;: &quot;#444444&quot;,
                        &quot;2-8&quot;: &quot;#444444&quot;,
                        &quot;2-9&quot;: &quot;#444444&quot;,
                        &quot;2-10&quot;: &quot;#444444&quot;,
                        &quot;2-11&quot;: &quot;#444444&quot;,
                        &quot;2-12&quot;: &quot;#444444&quot;,
                        &quot;2-13&quot;: &quot;#444444&quot;,
                        &quot;2-14&quot;: &quot;#444444&quot;,
                        &quot;2-15&quot;: &quot;#444444&quot;,
                        &quot;2-16&quot;: &quot;#444444&quot;,
                        &quot;2-17&quot;: &quot;#444444&quot;,
                        &quot;2-18&quot;: &quot;#444444&quot;,
                        &quot;2-19&quot;: &quot;#444444&quot;,
                        &quot;2-20&quot;: &quot;#444444&quot;,
                        &quot;2-21&quot;: &quot;#444444&quot;,
                        &quot;2-22&quot;: &quot;#444444&quot;,
                        &quot;2-23&quot;: &quot;#444444&quot;,
                        &quot;2-24&quot;: &quot;#444444&quot;,
                        &quot;2-25&quot;: &quot;#444444&quot;,
                        &quot;2-26&quot;: &quot;#444444&quot;,
                        &quot;2-27&quot;: &quot;#444444&quot;,
                        &quot;2-28&quot;: &quot;#444444&quot;,
                        &quot;3-2&quot;: &quot;#444444&quot;,
                        &quot;3-3&quot;: &quot;#444444&quot;,
                        &quot;3-4&quot;: &quot;#444444&quot;,
                        &quot;3-5&quot;: &quot;#444444&quot;,
                        &quot;3-6&quot;: &quot;#444444&quot;,
                        &quot;3-7&quot;: &quot;#444444&quot;,
                        &quot;3-8&quot;: &quot;#444444&quot;,
                        &quot;3-9&quot;: &quot;#444444&quot;,
                        &quot;3-10&quot;: &quot;#444444&quot;,
                        &quot;3-11&quot;: &quot;#444444&quot;,
                        &quot;3-12&quot;: &quot;#444444&quot;,
                        &quot;3-13&quot;: &quot;#444444&quot;,
                        &quot;3-14&quot;: &quot;#444444&quot;,
                        &quot;3-15&quot;: &quot;#444444&quot;,
                        &quot;3-16&quot;: &quot;#444444&quot;,
                        &quot;3-17&quot;: &quot;#444444&quot;,
                        &quot;3-18&quot;: &quot;#444444&quot;,
                        &quot;3-19&quot;: &quot;#444444&quot;,
                        &quot;3-20&quot;: &quot;#444444&quot;,
                        &quot;3-21&quot;: &quot;#444444&quot;,
                        &quot;3-22&quot;: &quot;#444444&quot;,
                        &quot;3-23&quot;: &quot;#444444&quot;,
                        &quot;3-24&quot;: &quot;#444444&quot;,
                        &quot;3-25&quot;: &quot;#444444&quot;,
                        &quot;3-26&quot;: &quot;#444444&quot;,
                        &quot;3-27&quot;: &quot;#444444&quot;,
                        &quot;3-28&quot;: &quot;#444444&quot;,
                        &quot;4-2&quot;: &quot;#444444&quot;,
                        &quot;4-3&quot;: &quot;#444444&quot;,
                        &quot;4-4&quot;: &quot;#444444&quot;,
                        &quot;4-5&quot;: &quot;#444444&quot;,
                        &quot;4-6&quot;: &quot;#444444&quot;,
                        &quot;4-7&quot;: &quot;#444444&quot;,
                        &quot;4-8&quot;: &quot;#444444&quot;,
                        &quot;4-9&quot;: &quot;#444444&quot;,
                        &quot;4-10&quot;: &quot;#444444&quot;,
                        &quot;4-11&quot;: &quot;#444444&quot;,
                        &quot;4-12&quot;: &quot;#444444&quot;,
                        &quot;4-13&quot;: &quot;#444444&quot;,
                        &quot;4-14&quot;: &quot;#444444&quot;,
                        &quot;4-15&quot;: &quot;#444444&quot;,
                        &quot;4-16&quot;: &quot;#444444&quot;,
                        &quot;4-17&quot;: &quot;#444444&quot;,
                        &quot;4-18&quot;: &quot;#444444&quot;,
                        &quot;4-19&quot;: &quot;#444444&quot;,
                        &quot;4-20&quot;: &quot;#444444&quot;,
                        &quot;4-21&quot;: &quot;#444444&quot;,
                        &quot;4-22&quot;: &quot;#444444&quot;,
                        &quot;4-23&quot;: &quot;#444444&quot;,
                        &quot;4-24&quot;: &quot;#444444&quot;,
                        &quot;4-25&quot;: &quot;#444444&quot;,
                        &quot;4-26&quot;: &quot;#444444&quot;,
                        &quot;4-27&quot;: &quot;#444444&quot;,
                        &quot;4-28&quot;: &quot;#444444&quot;,
                        &quot;5-2&quot;: &quot;#444444&quot;,
                        &quot;5-3&quot;: &quot;#444444&quot;,
                        &quot;5-4&quot;: &quot;#444444&quot;,
                        &quot;5-5&quot;: &quot;#444444&quot;,
                        &quot;5-6&quot;: &quot;#444444&quot;,
                        &quot;5-7&quot;: &quot;#444444&quot;,
                        &quot;5-8&quot;: &quot;#444444&quot;,
                        &quot;5-9&quot;: &quot;#444444&quot;,
                        &quot;5-10&quot;: &quot;#444444&quot;,
                        &quot;5-11&quot;: &quot;#444444&quot;,
                        &quot;5-12&quot;: &quot;#444444&quot;,
                        &quot;5-13&quot;: &quot;#444444&quot;,
                        &quot;5-14&quot;: &quot;#444444&quot;,
                        &quot;5-15&quot;: &quot;#444444&quot;,
                        &quot;5-16&quot;: &quot;#444444&quot;,
                        &quot;5-17&quot;: &quot;#444444&quot;,
                        &quot;5-18&quot;: &quot;#444444&quot;,
                        &quot;5-19&quot;: &quot;#444444&quot;,
                        &quot;5-20&quot;: &quot;#444444&quot;,
                        &quot;5-21&quot;: &quot;#444444&quot;,
                        &quot;5-22&quot;: &quot;#444444&quot;,
                        &quot;5-23&quot;: &quot;#444444&quot;,
                        &quot;5-24&quot;: &quot;#444444&quot;,
                        &quot;5-25&quot;: &quot;#444444&quot;,
                        &quot;5-26&quot;: &quot;#444444&quot;,
                        &quot;5-27&quot;: &quot;#444444&quot;,
                        &quot;5-28&quot;: &quot;#444444&quot;,
                        &quot;6-2&quot;: &quot;#444444&quot;,
                        &quot;6-3&quot;: &quot;#444444&quot;,
                        &quot;6-4&quot;: &quot;#444444&quot;,
                        &quot;6-5&quot;: &quot;#444444&quot;,
                        &quot;6-6&quot;: &quot;#444444&quot;,
                        &quot;6-7&quot;: &quot;#444444&quot;,
                        &quot;6-8&quot;: &quot;#444444&quot;,
                        &quot;6-9&quot;: &quot;#444444&quot;,
                        &quot;6-10&quot;: &quot;#444444&quot;,
                        &quot;6-11&quot;: &quot;#444444&quot;,
                        &quot;6-12&quot;: &quot;#444444&quot;,
                        &quot;6-13&quot;: &quot;#444444&quot;,
                        &quot;6-14&quot;: &quot;#444444&quot;,
                        &quot;6-15&quot;: &quot;#444444&quot;,
                        &quot;6-16&quot;: &quot;#444444&quot;,
                        &quot;6-17&quot;: &quot;#444444&quot;,
                        &quot;6-18&quot;: &quot;#444444&quot;,
                        &quot;6-19&quot;: &quot;#444444&quot;,
                        &quot;6-20&quot;: &quot;#444444&quot;,
                        &quot;6-21&quot;: &quot;#444444&quot;,
                        &quot;6-22&quot;: &quot;#444444&quot;,
                        &quot;6-23&quot;: &quot;#444444&quot;,
                        &quot;6-24&quot;: &quot;#444444&quot;,
                        &quot;6-25&quot;: &quot;#444444&quot;,
                        &quot;6-26&quot;: &quot;#444444&quot;,
                        &quot;6-27&quot;: &quot;#444444&quot;,
                        &quot;6-28&quot;: &quot;#444444&quot;,
                        &quot;7-2&quot;: &quot;#444444&quot;,
                        &quot;7-3&quot;: &quot;#444444&quot;,
                        &quot;7-4&quot;: &quot;#444444&quot;,
                        &quot;7-5&quot;: &quot;#444444&quot;,
                        &quot;7-6&quot;: &quot;#444444&quot;,
                        &quot;7-7&quot;: &quot;#444444&quot;,
                        &quot;7-8&quot;: &quot;#444444&quot;,
                        &quot;7-9&quot;: &quot;#444444&quot;,
                        &quot;7-10&quot;: &quot;#444444&quot;,
                        &quot;7-11&quot;: &quot;#444444&quot;,
                        &quot;7-12&quot;: &quot;#444444&quot;,
                        &quot;7-13&quot;: &quot;#444444&quot;,
                        &quot;7-14&quot;: &quot;#444444&quot;,
                        &quot;7-15&quot;: &quot;#444444&quot;,
                        &quot;7-16&quot;: &quot;#444444&quot;,
                        &quot;7-17&quot;: &quot;#444444&quot;,
                        &quot;7-18&quot;: &quot;#444444&quot;,
                        &quot;7-19&quot;: &quot;#444444&quot;,
                        &quot;7-20&quot;: &quot;#444444&quot;,
                        &quot;7-21&quot;: &quot;#444444&quot;,
                        &quot;7-22&quot;: &quot;#444444&quot;,
                        &quot;7-23&quot;: &quot;#444444&quot;,
                        &quot;7-24&quot;: &quot;#444444&quot;,
                        &quot;7-25&quot;: &quot;#444444&quot;,
                        &quot;7-26&quot;: &quot;#444444&quot;,
                        &quot;7-27&quot;: &quot;#444444&quot;,
                        &quot;7-28&quot;: &quot;#444444&quot;,
                        &quot;8-2&quot;: &quot;#444444&quot;,
                        &quot;8-3&quot;: &quot;#444444&quot;,
                        &quot;8-4&quot;: &quot;#444444&quot;,
                        &quot;8-5&quot;: &quot;#444444&quot;,
                        &quot;8-6&quot;: &quot;#444444&quot;,
                        &quot;8-7&quot;: &quot;#444444&quot;,
                        &quot;8-8&quot;: &quot;#444444&quot;,
                        &quot;8-9&quot;: &quot;#444444&quot;,
                        &quot;8-10&quot;: &quot;#444444&quot;,
                        &quot;8-11&quot;: &quot;#444444&quot;,
                        &quot;8-12&quot;: &quot;#444444&quot;,
                        &quot;8-13&quot;: &quot;#444444&quot;,
                        &quot;8-14&quot;: &quot;#444444&quot;,
                        &quot;8-15&quot;: &quot;#444444&quot;,
                        &quot;8-16&quot;: &quot;#444444&quot;,
                        &quot;8-17&quot;: &quot;#444444&quot;,
                        &quot;8-18&quot;: &quot;#444444&quot;,
                        &quot;8-19&quot;: &quot;#444444&quot;,
                        &quot;8-20&quot;: &quot;#444444&quot;,
                        &quot;8-21&quot;: &quot;#444444&quot;,
                        &quot;8-22&quot;: &quot;#444444&quot;,
                        &quot;8-23&quot;: &quot;#444444&quot;,
                        &quot;8-24&quot;: &quot;#444444&quot;,
                        &quot;8-25&quot;: &quot;#444444&quot;,
                        &quot;8-26&quot;: &quot;#444444&quot;,
                        &quot;8-27&quot;: &quot;#444444&quot;,
                        &quot;8-28&quot;: &quot;#444444&quot;,
                        &quot;9-2&quot;: &quot;#444444&quot;,
                        &quot;9-3&quot;: &quot;#444444&quot;,
                        &quot;9-4&quot;: &quot;#444444&quot;,
                        &quot;9-5&quot;: &quot;#444444&quot;,
                        &quot;9-6&quot;: &quot;#444444&quot;,
                        &quot;9-7&quot;: &quot;#444444&quot;,
                        &quot;9-8&quot;: &quot;#444444&quot;,
                        &quot;9-9&quot;: &quot;#444444&quot;,
                        &quot;9-10&quot;: &quot;#444444&quot;,
                        &quot;9-11&quot;: &quot;#444444&quot;,
                        &quot;9-12&quot;: &quot;#444444&quot;,
                        &quot;9-13&quot;: &quot;#444444&quot;,
                        &quot;9-14&quot;: &quot;#444444&quot;,
                        &quot;9-15&quot;: &quot;#444444&quot;,
                        &quot;9-16&quot;: &quot;#444444&quot;,
                        &quot;9-17&quot;: &quot;#444444&quot;,
                        &quot;9-18&quot;: &quot;#444444&quot;,
                        &quot;9-19&quot;: &quot;#444444&quot;,
                        &quot;9-20&quot;: &quot;#444444&quot;,
                        &quot;9-21&quot;: &quot;#444444&quot;,
                        &quot;9-22&quot;: &quot;#444444&quot;,
                        &quot;9-23&quot;: &quot;#444444&quot;,
                        &quot;9-24&quot;: &quot;#444444&quot;,
                        &quot;9-25&quot;: &quot;#444444&quot;,
                        &quot;9-26&quot;: &quot;#444444&quot;,
                        &quot;9-27&quot;: &quot;#444444&quot;,
                        &quot;9-28&quot;: &quot;#444444&quot;,
                        &quot;10-2&quot;: &quot;#444444&quot;,
                        &quot;10-3&quot;: &quot;#444444&quot;,
                        &quot;10-4&quot;: &quot;#444444&quot;,
                        &quot;10-5&quot;: &quot;#444444&quot;,
                        &quot;10-6&quot;: &quot;#444444&quot;,
                        &quot;10-7&quot;: &quot;#444444&quot;,
                        &quot;10-8&quot;: &quot;#444444&quot;,
                        &quot;10-9&quot;: &quot;#444444&quot;,
                        &quot;10-10&quot;: &quot;#444444&quot;,
                        &quot;10-11&quot;: &quot;#444444&quot;,
                        &quot;10-12&quot;: &quot;#444444&quot;,
                        &quot;10-13&quot;: &quot;#444444&quot;,
                        &quot;10-14&quot;: &quot;#444444&quot;,
                        &quot;10-15&quot;: &quot;#444444&quot;,
                        &quot;10-16&quot;: &quot;#444444&quot;,
                        &quot;10-17&quot;: &quot;#444444&quot;,
                        &quot;10-18&quot;: &quot;#444444&quot;,
                        &quot;10-19&quot;: &quot;#444444&quot;,
                        &quot;10-20&quot;: &quot;#444444&quot;,
                        &quot;10-21&quot;: &quot;#444444&quot;,
                        &quot;10-22&quot;: &quot;#444444&quot;,
                        &quot;10-23&quot;: &quot;#444444&quot;,
                        &quot;10-24&quot;: &quot;#444444&quot;,
                        &quot;10-25&quot;: &quot;#444444&quot;,
                        &quot;10-26&quot;: &quot;#444444&quot;,
                        &quot;10-27&quot;: &quot;#444444&quot;,
                        &quot;10-28&quot;: &quot;#444444&quot;,
                        &quot;11-2&quot;: &quot;#444444&quot;,
                        &quot;11-3&quot;: &quot;#444444&quot;,
                        &quot;11-4&quot;: &quot;#444444&quot;,
                        &quot;11-5&quot;: &quot;#444444&quot;,
                        &quot;11-6&quot;: &quot;#444444&quot;,
                        &quot;11-7&quot;: &quot;#444444&quot;,
                        &quot;11-8&quot;: &quot;#444444&quot;,
                        &quot;11-9&quot;: &quot;#444444&quot;,
                        &quot;11-10&quot;: &quot;#444444&quot;,
                        &quot;11-11&quot;: &quot;#444444&quot;,
                        &quot;11-12&quot;: &quot;#444444&quot;,
                        &quot;11-13&quot;: &quot;#444444&quot;,
                        &quot;11-14&quot;: &quot;#444444&quot;,
                        &quot;11-15&quot;: &quot;#444444&quot;,
                        &quot;11-16&quot;: &quot;#444444&quot;,
                        &quot;11-17&quot;: &quot;#444444&quot;,
                        &quot;11-18&quot;: &quot;#444444&quot;,
                        &quot;11-19&quot;: &quot;#444444&quot;,
                        &quot;11-20&quot;: &quot;#444444&quot;,
                        &quot;11-21&quot;: &quot;#444444&quot;,
                        &quot;11-22&quot;: &quot;#444444&quot;,
                        &quot;11-23&quot;: &quot;#444444&quot;,
                        &quot;11-24&quot;: &quot;#444444&quot;,
                        &quot;11-25&quot;: &quot;#444444&quot;,
                        &quot;11-26&quot;: &quot;#444444&quot;,
                        &quot;11-27&quot;: &quot;#444444&quot;,
                        &quot;11-28&quot;: &quot;#444444&quot;,
                        &quot;12-2&quot;: &quot;#444444&quot;,
                        &quot;12-3&quot;: &quot;#444444&quot;,
                        &quot;12-4&quot;: &quot;#444444&quot;,
                        &quot;12-5&quot;: &quot;#444444&quot;,
                        &quot;12-6&quot;: &quot;#444444&quot;,
                        &quot;12-7&quot;: &quot;#444444&quot;,
                        &quot;12-8&quot;: &quot;#444444&quot;,
                        &quot;12-9&quot;: &quot;#444444&quot;,
                        &quot;12-10&quot;: &quot;#444444&quot;,
                        &quot;12-11&quot;: &quot;#444444&quot;,
                        &quot;12-12&quot;: &quot;#444444&quot;,
                        &quot;12-13&quot;: &quot;#444444&quot;,
                        &quot;12-14&quot;: &quot;#444444&quot;,
                        &quot;12-15&quot;: &quot;#444444&quot;,
                        &quot;12-16&quot;: &quot;#444444&quot;,
                        &quot;12-17&quot;: &quot;#444444&quot;,
                        &quot;12-18&quot;: &quot;#444444&quot;,
                        &quot;12-19&quot;: &quot;#444444&quot;,
                        &quot;12-20&quot;: &quot;#444444&quot;,
                        &quot;12-21&quot;: &quot;#444444&quot;,
                        &quot;12-22&quot;: &quot;#444444&quot;,
                        &quot;12-23&quot;: &quot;#444444&quot;,
                        &quot;12-24&quot;: &quot;#444444&quot;,
                        &quot;12-25&quot;: &quot;#444444&quot;,
                        &quot;12-26&quot;: &quot;#444444&quot;,
                        &quot;12-27&quot;: &quot;#444444&quot;,
                        &quot;12-28&quot;: &quot;#444444&quot;,
                        &quot;13-2&quot;: &quot;#444444&quot;,
                        &quot;13-3&quot;: &quot;#444444&quot;,
                        &quot;13-4&quot;: &quot;#444444&quot;,
                        &quot;13-5&quot;: &quot;#444444&quot;,
                        &quot;13-6&quot;: &quot;#444444&quot;,
                        &quot;13-7&quot;: &quot;#444444&quot;,
                        &quot;13-8&quot;: &quot;#444444&quot;,
                        &quot;13-9&quot;: &quot;#444444&quot;,
                        &quot;13-10&quot;: &quot;#444444&quot;,
                        &quot;13-11&quot;: &quot;#444444&quot;,
                        &quot;13-12&quot;: &quot;#444444&quot;,
                        &quot;13-13&quot;: &quot;#444444&quot;,
                        &quot;13-14&quot;: &quot;#444444&quot;,
                        &quot;13-15&quot;: &quot;#444444&quot;,
                        &quot;13-16&quot;: &quot;#444444&quot;,
                        &quot;13-17&quot;: &quot;#444444&quot;,
                        &quot;13-18&quot;: &quot;#444444&quot;,
                        &quot;13-19&quot;: &quot;#444444&quot;,
                        &quot;13-20&quot;: &quot;#444444&quot;,
                        &quot;13-21&quot;: &quot;#444444&quot;,
                        &quot;13-22&quot;: &quot;#444444&quot;,
                        &quot;13-23&quot;: &quot;#444444&quot;,
                        &quot;13-24&quot;: &quot;#444444&quot;,
                        &quot;13-25&quot;: &quot;#444444&quot;,
                        &quot;13-26&quot;: &quot;#444444&quot;,
                        &quot;13-27&quot;: &quot;#444444&quot;,
                        &quot;13-28&quot;: &quot;#444444&quot;,
                        &quot;14-2&quot;: &quot;#444444&quot;,
                        &quot;14-3&quot;: &quot;#444444&quot;,
                        &quot;14-4&quot;: &quot;#444444&quot;,
                        &quot;14-5&quot;: &quot;#444444&quot;,
                        &quot;14-6&quot;: &quot;#444444&quot;,
                        &quot;14-7&quot;: &quot;#444444&quot;,
                        &quot;14-8&quot;: &quot;#444444&quot;,
                        &quot;14-9&quot;: &quot;#444444&quot;,
                        &quot;14-10&quot;: &quot;#444444&quot;,
                        &quot;14-11&quot;: &quot;#444444&quot;,
                        &quot;14-12&quot;: &quot;#444444&quot;,
                        &quot;14-13&quot;: &quot;#444444&quot;,
                        &quot;14-14&quot;: &quot;#444444&quot;,
                        &quot;14-15&quot;: &quot;#444444&quot;,
                        &quot;14-16&quot;: &quot;#444444&quot;,
                        &quot;14-17&quot;: &quot;#444444&quot;,
                        &quot;14-18&quot;: &quot;#444444&quot;,
                        &quot;14-19&quot;: &quot;#444444&quot;,
                        &quot;14-20&quot;: &quot;#444444&quot;,
                        &quot;14-21&quot;: &quot;#444444&quot;,
                        &quot;14-22&quot;: &quot;#444444&quot;,
                        &quot;14-23&quot;: &quot;#444444&quot;,
                        &quot;14-24&quot;: &quot;#444444&quot;,
                        &quot;14-25&quot;: &quot;#444444&quot;,
                        &quot;14-26&quot;: &quot;#444444&quot;,
                        &quot;14-27&quot;: &quot;#444444&quot;,
                        &quot;14-28&quot;: &quot;#444444&quot;,
                        &quot;15-2&quot;: &quot;#444444&quot;,
                        &quot;15-3&quot;: &quot;#444444&quot;,
                        &quot;15-4&quot;: &quot;#444444&quot;,
                        &quot;15-5&quot;: &quot;#444444&quot;,
                        &quot;15-6&quot;: &quot;#444444&quot;,
                        &quot;15-7&quot;: &quot;#444444&quot;,
                        &quot;15-8&quot;: &quot;#444444&quot;,
                        &quot;15-9&quot;: &quot;#444444&quot;,
                        &quot;15-10&quot;: &quot;#444444&quot;,
                        &quot;15-11&quot;: &quot;#444444&quot;,
                        &quot;15-12&quot;: &quot;#444444&quot;,
                        &quot;15-13&quot;: &quot;#444444&quot;,
                        &quot;15-14&quot;: &quot;#444444&quot;,
                        &quot;15-15&quot;: &quot;#444444&quot;,
                        &quot;15-16&quot;: &quot;#444444&quot;,
                        &quot;15-17&quot;: &quot;#444444&quot;,
                        &quot;15-18&quot;: &quot;#444444&quot;,
                        &quot;15-19&quot;: &quot;#444444&quot;,
                        &quot;15-20&quot;: &quot;#444444&quot;,
                        &quot;15-21&quot;: &quot;#444444&quot;,
                        &quot;15-22&quot;: &quot;#444444&quot;,
                        &quot;15-23&quot;: &quot;#444444&quot;,
                        &quot;15-24&quot;: &quot;#444444&quot;,
                        &quot;15-25&quot;: &quot;#444444&quot;,
                        &quot;15-26&quot;: &quot;#444444&quot;,
                        &quot;15-27&quot;: &quot;#444444&quot;,
                        &quot;15-28&quot;: &quot;#444444&quot;,
                        &quot;16-2&quot;: &quot;#444444&quot;,
                        &quot;16-3&quot;: &quot;#444444&quot;,
                        &quot;16-4&quot;: &quot;#444444&quot;,
                        &quot;16-5&quot;: &quot;#444444&quot;,
                        &quot;16-6&quot;: &quot;#444444&quot;,
                        &quot;16-7&quot;: &quot;#444444&quot;,
                        &quot;16-8&quot;: &quot;#444444&quot;,
                        &quot;16-9&quot;: &quot;#444444&quot;,
                        &quot;16-10&quot;: &quot;#444444&quot;,
                        &quot;16-11&quot;: &quot;#444444&quot;,
                        &quot;16-12&quot;: &quot;#444444&quot;,
                        &quot;16-13&quot;: &quot;#444444&quot;,
                        &quot;16-14&quot;: &quot;#444444&quot;,
                        &quot;16-15&quot;: &quot;#444444&quot;,
                        &quot;16-16&quot;: &quot;#444444&quot;,
                        &quot;16-17&quot;: &quot;#444444&quot;,
                        &quot;16-18&quot;: &quot;#444444&quot;,
                        &quot;16-19&quot;: &quot;#444444&quot;,
                        &quot;16-20&quot;: &quot;#444444&quot;,
                        &quot;16-21&quot;: &quot;#444444&quot;,
                        &quot;16-22&quot;: &quot;#444444&quot;,
                        &quot;16-23&quot;: &quot;#444444&quot;,
                        &quot;16-24&quot;: &quot;#444444&quot;,
                        &quot;16-25&quot;: &quot;#444444&quot;,
                        &quot;16-26&quot;: &quot;#444444&quot;,
                        &quot;16-27&quot;: &quot;#444444&quot;,
                        &quot;16-28&quot;: &quot;#444444&quot;,
                        &quot;17-2&quot;: &quot;#444444&quot;,
                        &quot;17-3&quot;: &quot;#444444&quot;,
                        &quot;17-4&quot;: &quot;#444444&quot;,
                        &quot;17-5&quot;: &quot;#444444&quot;,
                        &quot;17-6&quot;: &quot;#444444&quot;,
                        &quot;17-7&quot;: &quot;#444444&quot;,
                        &quot;17-8&quot;: &quot;#444444&quot;,
                        &quot;17-9&quot;: &quot;#444444&quot;,
                        &quot;17-10&quot;: &quot;#444444&quot;,
                        &quot;17-11&quot;: &quot;#444444&quot;,
                        &quot;17-12&quot;: &quot;#444444&quot;,
                        &quot;17-13&quot;: &quot;#444444&quot;,
                        &quot;17-14&quot;: &quot;#444444&quot;,
                        &quot;17-15&quot;: &quot;#444444&quot;,
                        &quot;17-16&quot;: &quot;#444444&quot;,
                        &quot;17-17&quot;: &quot;#444444&quot;,
                        &quot;17-18&quot;: &quot;#444444&quot;,
                        &quot;17-19&quot;: &quot;#444444&quot;,
                        &quot;17-20&quot;: &quot;#444444&quot;,
                        &quot;17-21&quot;: &quot;#444444&quot;,
                        &quot;17-22&quot;: &quot;#444444&quot;,
                        &quot;17-23&quot;: &quot;#444444&quot;,
                        &quot;17-24&quot;: &quot;#444444&quot;,
                        &quot;17-25&quot;: &quot;#444444&quot;,
                        &quot;17-26&quot;: &quot;#444444&quot;,
                        &quot;17-27&quot;: &quot;#444444&quot;,
                        &quot;17-28&quot;: &quot;#444444&quot;,
                        &quot;18-2&quot;: &quot;#444444&quot;,
                        &quot;18-3&quot;: &quot;#444444&quot;,
                        &quot;18-4&quot;: &quot;#444444&quot;,
                        &quot;18-5&quot;: &quot;#444444&quot;,
                        &quot;18-6&quot;: &quot;#444444&quot;,
                        &quot;18-7&quot;: &quot;#444444&quot;,
                        &quot;18-8&quot;: &quot;#444444&quot;,
                        &quot;18-9&quot;: &quot;#444444&quot;,
                        &quot;18-10&quot;: &quot;#444444&quot;,
                        &quot;18-11&quot;: &quot;#444444&quot;,
                        &quot;18-12&quot;: &quot;#444444&quot;,
                        &quot;18-13&quot;: &quot;#444444&quot;,
                        &quot;18-14&quot;: &quot;#444444&quot;,
                        &quot;18-15&quot;: &quot;#444444&quot;,
                        &quot;18-16&quot;: &quot;#444444&quot;,
                        &quot;18-17&quot;: &quot;#444444&quot;,
                        &quot;18-18&quot;: &quot;#444444&quot;,
                        &quot;18-19&quot;: &quot;#444444&quot;,
                        &quot;18-20&quot;: &quot;#444444&quot;,
                        &quot;18-21&quot;: &quot;#444444&quot;,
                        &quot;18-22&quot;: &quot;#444444&quot;,
                        &quot;18-23&quot;: &quot;#444444&quot;,
                        &quot;18-24&quot;: &quot;#444444&quot;,
                        &quot;18-25&quot;: &quot;#444444&quot;,
                        &quot;18-26&quot;: &quot;#444444&quot;,
                        &quot;18-27&quot;: &quot;#444444&quot;,
                        &quot;18-28&quot;: &quot;#444444&quot;
                    },
                    &quot;wall_color&quot;: &quot;#444444&quot;,
                    &quot;wall_thickness&quot;: 18,
                    &quot;floor_texture_id&quot;: 10,
                    &quot;starting_point_row&quot;: 6,
                    &quot;starting_point_col&quot;: 3,
                    &quot;floor_accepted&quot;: true,
                    &quot;door_asset_id&quot;: 1,
                    &quot;door_position&quot;: {
                        &quot;row&quot;: 11,
                        &quot;col&quot;: 21
                    },
                    &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 7,
            &quot;user_id&quot;: 3,
            &quot;name&quot;: &quot;Biblioteka Czarnoksiężnika&quot;,
            &quot;description&quot;: &quot;Przeszukaj magiczną bibliotekę pełną zaklętych ksiąg i tajemniczych artefakt&oacute;w.&quot;,
            &quot;thumbnail_url&quot;: &quot;/storage/escape-rooms/thumbnails/rl-app-3.png&quot;,
            &quot;soundtrack_url&quot;: &quot;/storage/escape-rooms/soundtracks/a7e4d623-fcef-4666-a4b9-f8925515e479.mp3&quot;,
            &quot;is_public&quot;: true,
            &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;tester&quot;,
                &quot;email&quot;: &quot;tester@riddlelab.world&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;last_login_at&quot;: &quot;2026-02-13 22:04:23&quot;,
                &quot;role&quot;: &quot;user&quot;,
                &quot;avatar_url&quot;: null,
                &quot;player_configuration&quot;: &quot;{\&quot;avatar\&quot;:{\&quot;skin_color\&quot;:\&quot;#d2b48c\&quot;,\&quot;hair_color\&quot;:\&quot;#8b4513\&quot;,\&quot;eye_color\&quot;:\&quot;#1e90ff\&quot;,\&quot;outfit_color\&quot;:\&quot;#32cd32\&quot;}}&quot;,
                &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;
            },
            &quot;rooms&quot;: [
                {
                    &quot;id&quot;: 7,
                    &quot;escape_room_id&quot;: 7,
                    &quot;grid_data&quot;: {
                        &quot;2-2&quot;: &quot;1&quot;,
                        &quot;2-3&quot;: &quot;1&quot;,
                        &quot;2-4&quot;: &quot;1&quot;,
                        &quot;2-5&quot;: &quot;1&quot;,
                        &quot;2-6&quot;: &quot;1&quot;,
                        &quot;2-7&quot;: &quot;1&quot;,
                        &quot;2-8&quot;: &quot;1&quot;,
                        &quot;2-9&quot;: &quot;1&quot;,
                        &quot;2-10&quot;: &quot;1&quot;,
                        &quot;2-11&quot;: &quot;1&quot;,
                        &quot;2-12&quot;: &quot;1&quot;,
                        &quot;2-13&quot;: &quot;1&quot;,
                        &quot;2-14&quot;: &quot;1&quot;,
                        &quot;2-15&quot;: &quot;1&quot;,
                        &quot;2-16&quot;: &quot;1&quot;,
                        &quot;2-17&quot;: &quot;1&quot;,
                        &quot;2-18&quot;: &quot;1&quot;,
                        &quot;2-19&quot;: &quot;1&quot;,
                        &quot;2-20&quot;: &quot;1&quot;,
                        &quot;2-21&quot;: &quot;1&quot;,
                        &quot;2-22&quot;: &quot;1&quot;,
                        &quot;2-23&quot;: &quot;1&quot;,
                        &quot;2-24&quot;: &quot;1&quot;,
                        &quot;2-25&quot;: &quot;1&quot;,
                        &quot;2-26&quot;: &quot;1&quot;,
                        &quot;2-27&quot;: &quot;1&quot;,
                        &quot;2-28&quot;: &quot;1&quot;,
                        &quot;3-2&quot;: &quot;1&quot;,
                        &quot;3-3&quot;: &quot;1&quot;,
                        &quot;3-4&quot;: &quot;1&quot;,
                        &quot;3-5&quot;: &quot;1&quot;,
                        &quot;3-6&quot;: &quot;1&quot;,
                        &quot;3-7&quot;: &quot;1&quot;,
                        &quot;3-8&quot;: &quot;1&quot;,
                        &quot;3-9&quot;: &quot;1&quot;,
                        &quot;3-10&quot;: &quot;1&quot;,
                        &quot;3-11&quot;: &quot;1&quot;,
                        &quot;3-12&quot;: &quot;1&quot;,
                        &quot;3-13&quot;: &quot;1&quot;,
                        &quot;3-14&quot;: &quot;1&quot;,
                        &quot;3-15&quot;: &quot;1&quot;,
                        &quot;3-16&quot;: &quot;1&quot;,
                        &quot;3-17&quot;: &quot;1&quot;,
                        &quot;3-18&quot;: &quot;1&quot;,
                        &quot;3-19&quot;: &quot;1&quot;,
                        &quot;3-20&quot;: &quot;1&quot;,
                        &quot;3-21&quot;: &quot;1&quot;,
                        &quot;3-22&quot;: &quot;1&quot;,
                        &quot;3-23&quot;: &quot;1&quot;,
                        &quot;3-24&quot;: &quot;1&quot;,
                        &quot;3-25&quot;: &quot;1&quot;,
                        &quot;3-26&quot;: &quot;1&quot;,
                        &quot;3-27&quot;: &quot;1&quot;,
                        &quot;3-28&quot;: &quot;1&quot;,
                        &quot;4-2&quot;: &quot;1&quot;,
                        &quot;4-3&quot;: &quot;1&quot;,
                        &quot;4-4&quot;: &quot;1&quot;,
                        &quot;4-5&quot;: &quot;1&quot;,
                        &quot;4-6&quot;: &quot;1&quot;,
                        &quot;4-7&quot;: &quot;1&quot;,
                        &quot;4-8&quot;: &quot;1&quot;,
                        &quot;4-9&quot;: &quot;1&quot;,
                        &quot;4-10&quot;: &quot;1&quot;,
                        &quot;4-11&quot;: &quot;1&quot;,
                        &quot;4-12&quot;: &quot;1&quot;,
                        &quot;4-13&quot;: &quot;1&quot;,
                        &quot;4-14&quot;: &quot;1&quot;,
                        &quot;4-15&quot;: &quot;1&quot;,
                        &quot;4-16&quot;: &quot;1&quot;,
                        &quot;4-17&quot;: &quot;1&quot;,
                        &quot;4-18&quot;: &quot;1&quot;,
                        &quot;4-19&quot;: &quot;1&quot;,
                        &quot;4-20&quot;: &quot;1&quot;,
                        &quot;4-21&quot;: &quot;1&quot;,
                        &quot;4-22&quot;: &quot;1&quot;,
                        &quot;4-23&quot;: &quot;1&quot;,
                        &quot;4-24&quot;: &quot;1&quot;,
                        &quot;4-25&quot;: &quot;1&quot;,
                        &quot;4-26&quot;: &quot;1&quot;,
                        &quot;4-27&quot;: &quot;1&quot;,
                        &quot;4-28&quot;: &quot;1&quot;,
                        &quot;5-2&quot;: &quot;1&quot;,
                        &quot;5-3&quot;: &quot;1&quot;,
                        &quot;5-4&quot;: &quot;1&quot;,
                        &quot;5-5&quot;: &quot;1&quot;,
                        &quot;5-6&quot;: &quot;1&quot;,
                        &quot;5-7&quot;: &quot;1&quot;,
                        &quot;5-8&quot;: &quot;1&quot;,
                        &quot;5-9&quot;: &quot;1&quot;,
                        &quot;5-10&quot;: &quot;1&quot;,
                        &quot;5-11&quot;: &quot;1&quot;,
                        &quot;5-12&quot;: &quot;1&quot;,
                        &quot;5-13&quot;: &quot;1&quot;,
                        &quot;5-14&quot;: &quot;1&quot;,
                        &quot;5-15&quot;: &quot;1&quot;,
                        &quot;5-16&quot;: &quot;1&quot;,
                        &quot;5-17&quot;: &quot;1&quot;,
                        &quot;5-18&quot;: &quot;1&quot;,
                        &quot;5-19&quot;: &quot;1&quot;,
                        &quot;5-20&quot;: &quot;1&quot;,
                        &quot;5-21&quot;: &quot;1&quot;,
                        &quot;5-22&quot;: &quot;1&quot;,
                        &quot;5-23&quot;: &quot;1&quot;,
                        &quot;5-24&quot;: &quot;1&quot;,
                        &quot;5-25&quot;: &quot;1&quot;,
                        &quot;5-26&quot;: &quot;1&quot;,
                        &quot;5-27&quot;: &quot;1&quot;,
                        &quot;5-28&quot;: &quot;1&quot;,
                        &quot;6-2&quot;: &quot;1&quot;,
                        &quot;6-3&quot;: &quot;1&quot;,
                        &quot;6-4&quot;: &quot;1&quot;,
                        &quot;6-5&quot;: &quot;1&quot;,
                        &quot;6-6&quot;: &quot;1&quot;,
                        &quot;6-7&quot;: &quot;1&quot;,
                        &quot;6-8&quot;: &quot;1&quot;,
                        &quot;6-9&quot;: &quot;1&quot;,
                        &quot;6-10&quot;: &quot;1&quot;,
                        &quot;6-11&quot;: &quot;1&quot;,
                        &quot;6-12&quot;: &quot;1&quot;,
                        &quot;6-13&quot;: &quot;1&quot;,
                        &quot;6-14&quot;: &quot;1&quot;,
                        &quot;6-15&quot;: &quot;1&quot;,
                        &quot;6-16&quot;: &quot;1&quot;,
                        &quot;6-17&quot;: &quot;1&quot;,
                        &quot;6-18&quot;: &quot;1&quot;,
                        &quot;6-19&quot;: &quot;1&quot;,
                        &quot;6-20&quot;: &quot;1&quot;,
                        &quot;6-21&quot;: &quot;1&quot;,
                        &quot;6-22&quot;: &quot;1&quot;,
                        &quot;6-23&quot;: &quot;1&quot;,
                        &quot;6-24&quot;: &quot;1&quot;,
                        &quot;6-25&quot;: &quot;1&quot;,
                        &quot;6-26&quot;: &quot;1&quot;,
                        &quot;6-27&quot;: &quot;1&quot;,
                        &quot;6-28&quot;: &quot;1&quot;,
                        &quot;7-2&quot;: &quot;1&quot;,
                        &quot;7-3&quot;: &quot;1&quot;,
                        &quot;7-4&quot;: &quot;1&quot;,
                        &quot;7-5&quot;: &quot;1&quot;,
                        &quot;7-6&quot;: &quot;1&quot;,
                        &quot;7-7&quot;: &quot;1&quot;,
                        &quot;7-8&quot;: &quot;1&quot;,
                        &quot;7-9&quot;: &quot;1&quot;,
                        &quot;7-10&quot;: &quot;1&quot;,
                        &quot;7-11&quot;: &quot;1&quot;,
                        &quot;7-12&quot;: &quot;1&quot;,
                        &quot;7-13&quot;: &quot;1&quot;,
                        &quot;7-14&quot;: &quot;1&quot;,
                        &quot;7-15&quot;: &quot;1&quot;,
                        &quot;7-16&quot;: &quot;1&quot;,
                        &quot;7-17&quot;: &quot;1&quot;,
                        &quot;7-18&quot;: &quot;1&quot;,
                        &quot;7-19&quot;: &quot;1&quot;,
                        &quot;7-20&quot;: &quot;1&quot;,
                        &quot;7-21&quot;: &quot;1&quot;,
                        &quot;7-22&quot;: &quot;1&quot;,
                        &quot;7-23&quot;: &quot;1&quot;,
                        &quot;7-24&quot;: &quot;1&quot;,
                        &quot;7-25&quot;: &quot;1&quot;,
                        &quot;7-26&quot;: &quot;1&quot;,
                        &quot;7-27&quot;: &quot;1&quot;,
                        &quot;7-28&quot;: &quot;1&quot;,
                        &quot;8-2&quot;: &quot;1&quot;,
                        &quot;8-3&quot;: &quot;1&quot;,
                        &quot;8-4&quot;: &quot;1&quot;,
                        &quot;8-5&quot;: &quot;1&quot;,
                        &quot;8-6&quot;: &quot;1&quot;,
                        &quot;8-7&quot;: &quot;1&quot;,
                        &quot;8-8&quot;: &quot;1&quot;,
                        &quot;8-9&quot;: &quot;1&quot;,
                        &quot;8-10&quot;: &quot;1&quot;,
                        &quot;8-11&quot;: &quot;1&quot;,
                        &quot;8-12&quot;: &quot;1&quot;,
                        &quot;8-13&quot;: &quot;1&quot;,
                        &quot;8-14&quot;: &quot;1&quot;,
                        &quot;8-15&quot;: &quot;1&quot;,
                        &quot;8-16&quot;: &quot;1&quot;,
                        &quot;8-17&quot;: &quot;1&quot;,
                        &quot;8-18&quot;: &quot;1&quot;,
                        &quot;8-19&quot;: &quot;1&quot;,
                        &quot;8-20&quot;: &quot;1&quot;,
                        &quot;8-21&quot;: &quot;1&quot;,
                        &quot;8-22&quot;: &quot;1&quot;,
                        &quot;8-23&quot;: &quot;1&quot;,
                        &quot;8-24&quot;: &quot;1&quot;,
                        &quot;8-25&quot;: &quot;1&quot;,
                        &quot;8-26&quot;: &quot;1&quot;,
                        &quot;8-27&quot;: &quot;1&quot;,
                        &quot;8-28&quot;: &quot;1&quot;,
                        &quot;9-2&quot;: &quot;1&quot;,
                        &quot;9-3&quot;: &quot;1&quot;,
                        &quot;9-4&quot;: &quot;1&quot;,
                        &quot;9-5&quot;: &quot;1&quot;,
                        &quot;9-6&quot;: &quot;1&quot;,
                        &quot;9-7&quot;: &quot;1&quot;,
                        &quot;9-8&quot;: &quot;1&quot;,
                        &quot;9-9&quot;: &quot;1&quot;,
                        &quot;9-10&quot;: &quot;1&quot;,
                        &quot;9-11&quot;: &quot;1&quot;,
                        &quot;9-12&quot;: &quot;1&quot;,
                        &quot;9-13&quot;: &quot;1&quot;,
                        &quot;9-14&quot;: &quot;1&quot;,
                        &quot;9-15&quot;: &quot;1&quot;,
                        &quot;9-16&quot;: &quot;1&quot;,
                        &quot;9-17&quot;: &quot;1&quot;,
                        &quot;9-18&quot;: &quot;1&quot;,
                        &quot;9-19&quot;: &quot;1&quot;,
                        &quot;9-20&quot;: &quot;1&quot;,
                        &quot;9-21&quot;: &quot;1&quot;,
                        &quot;9-22&quot;: &quot;1&quot;,
                        &quot;9-23&quot;: &quot;1&quot;,
                        &quot;9-24&quot;: &quot;1&quot;,
                        &quot;9-25&quot;: &quot;1&quot;,
                        &quot;9-26&quot;: &quot;1&quot;,
                        &quot;9-27&quot;: &quot;1&quot;,
                        &quot;9-28&quot;: &quot;1&quot;,
                        &quot;10-2&quot;: &quot;1&quot;,
                        &quot;10-3&quot;: &quot;1&quot;,
                        &quot;10-4&quot;: &quot;1&quot;,
                        &quot;10-5&quot;: &quot;1&quot;,
                        &quot;10-6&quot;: &quot;1&quot;,
                        &quot;10-7&quot;: &quot;1&quot;,
                        &quot;10-8&quot;: &quot;1&quot;,
                        &quot;10-9&quot;: &quot;1&quot;,
                        &quot;10-10&quot;: &quot;1&quot;,
                        &quot;10-11&quot;: &quot;1&quot;,
                        &quot;10-12&quot;: &quot;1&quot;,
                        &quot;10-13&quot;: &quot;1&quot;,
                        &quot;10-14&quot;: &quot;1&quot;,
                        &quot;10-15&quot;: &quot;1&quot;,
                        &quot;10-16&quot;: &quot;1&quot;,
                        &quot;10-17&quot;: &quot;1&quot;,
                        &quot;10-18&quot;: &quot;1&quot;,
                        &quot;10-19&quot;: &quot;1&quot;,
                        &quot;10-20&quot;: &quot;1&quot;,
                        &quot;10-21&quot;: &quot;1&quot;,
                        &quot;10-22&quot;: &quot;1&quot;,
                        &quot;10-23&quot;: &quot;1&quot;,
                        &quot;10-24&quot;: &quot;1&quot;,
                        &quot;10-25&quot;: &quot;1&quot;,
                        &quot;10-26&quot;: &quot;1&quot;,
                        &quot;10-27&quot;: &quot;1&quot;,
                        &quot;10-28&quot;: &quot;1&quot;,
                        &quot;11-2&quot;: &quot;1&quot;,
                        &quot;11-3&quot;: &quot;1&quot;,
                        &quot;11-4&quot;: &quot;1&quot;,
                        &quot;11-5&quot;: &quot;1&quot;,
                        &quot;11-6&quot;: &quot;1&quot;,
                        &quot;11-7&quot;: &quot;1&quot;,
                        &quot;11-8&quot;: &quot;1&quot;,
                        &quot;11-9&quot;: &quot;1&quot;,
                        &quot;11-10&quot;: &quot;1&quot;,
                        &quot;11-11&quot;: &quot;1&quot;,
                        &quot;11-12&quot;: &quot;1&quot;,
                        &quot;11-13&quot;: &quot;1&quot;,
                        &quot;11-14&quot;: &quot;1&quot;,
                        &quot;11-15&quot;: &quot;1&quot;,
                        &quot;11-16&quot;: &quot;1&quot;,
                        &quot;11-17&quot;: &quot;1&quot;,
                        &quot;11-18&quot;: &quot;1&quot;,
                        &quot;11-19&quot;: &quot;1&quot;,
                        &quot;11-20&quot;: &quot;1&quot;,
                        &quot;11-21&quot;: &quot;1&quot;,
                        &quot;11-22&quot;: &quot;1&quot;,
                        &quot;11-23&quot;: &quot;1&quot;,
                        &quot;11-24&quot;: &quot;1&quot;,
                        &quot;11-25&quot;: &quot;1&quot;,
                        &quot;11-26&quot;: &quot;1&quot;,
                        &quot;11-27&quot;: &quot;1&quot;,
                        &quot;11-28&quot;: &quot;1&quot;,
                        &quot;12-2&quot;: &quot;1&quot;,
                        &quot;12-3&quot;: &quot;1&quot;,
                        &quot;12-4&quot;: &quot;1&quot;,
                        &quot;12-5&quot;: &quot;1&quot;,
                        &quot;12-6&quot;: &quot;1&quot;,
                        &quot;12-7&quot;: &quot;1&quot;,
                        &quot;12-8&quot;: &quot;1&quot;,
                        &quot;12-9&quot;: &quot;1&quot;,
                        &quot;12-10&quot;: &quot;1&quot;,
                        &quot;12-11&quot;: &quot;1&quot;,
                        &quot;12-12&quot;: &quot;1&quot;,
                        &quot;12-13&quot;: &quot;1&quot;,
                        &quot;12-14&quot;: &quot;1&quot;,
                        &quot;12-15&quot;: &quot;1&quot;,
                        &quot;12-16&quot;: &quot;1&quot;,
                        &quot;12-17&quot;: &quot;1&quot;,
                        &quot;12-18&quot;: &quot;1&quot;,
                        &quot;12-19&quot;: &quot;1&quot;,
                        &quot;12-20&quot;: &quot;1&quot;,
                        &quot;12-21&quot;: &quot;1&quot;,
                        &quot;12-22&quot;: &quot;1&quot;,
                        &quot;12-23&quot;: &quot;1&quot;,
                        &quot;12-24&quot;: &quot;1&quot;,
                        &quot;12-25&quot;: &quot;1&quot;,
                        &quot;12-26&quot;: &quot;1&quot;,
                        &quot;12-27&quot;: &quot;1&quot;,
                        &quot;12-28&quot;: &quot;1&quot;,
                        &quot;13-2&quot;: &quot;1&quot;,
                        &quot;13-3&quot;: &quot;1&quot;,
                        &quot;13-4&quot;: &quot;1&quot;,
                        &quot;13-5&quot;: &quot;1&quot;,
                        &quot;13-6&quot;: &quot;1&quot;,
                        &quot;13-7&quot;: &quot;1&quot;,
                        &quot;13-8&quot;: &quot;1&quot;,
                        &quot;13-9&quot;: &quot;1&quot;,
                        &quot;13-10&quot;: &quot;1&quot;,
                        &quot;13-11&quot;: &quot;1&quot;,
                        &quot;13-12&quot;: &quot;1&quot;,
                        &quot;13-13&quot;: &quot;1&quot;,
                        &quot;13-14&quot;: &quot;1&quot;,
                        &quot;13-15&quot;: &quot;1&quot;,
                        &quot;13-16&quot;: &quot;1&quot;,
                        &quot;13-17&quot;: &quot;1&quot;,
                        &quot;13-18&quot;: &quot;1&quot;,
                        &quot;13-19&quot;: &quot;1&quot;,
                        &quot;13-20&quot;: &quot;1&quot;,
                        &quot;13-21&quot;: &quot;1&quot;,
                        &quot;13-22&quot;: &quot;1&quot;,
                        &quot;13-23&quot;: &quot;1&quot;,
                        &quot;13-24&quot;: &quot;1&quot;,
                        &quot;13-25&quot;: &quot;1&quot;,
                        &quot;13-26&quot;: &quot;1&quot;,
                        &quot;13-27&quot;: &quot;1&quot;,
                        &quot;13-28&quot;: &quot;1&quot;,
                        &quot;14-2&quot;: &quot;1&quot;,
                        &quot;14-3&quot;: &quot;1&quot;,
                        &quot;14-4&quot;: &quot;1&quot;,
                        &quot;14-5&quot;: &quot;1&quot;,
                        &quot;14-6&quot;: &quot;1&quot;,
                        &quot;14-7&quot;: &quot;1&quot;,
                        &quot;14-8&quot;: &quot;1&quot;,
                        &quot;14-9&quot;: &quot;1&quot;,
                        &quot;14-10&quot;: &quot;1&quot;,
                        &quot;14-11&quot;: &quot;1&quot;,
                        &quot;14-12&quot;: &quot;1&quot;,
                        &quot;14-13&quot;: &quot;1&quot;,
                        &quot;14-14&quot;: &quot;1&quot;,
                        &quot;14-15&quot;: &quot;1&quot;,
                        &quot;14-16&quot;: &quot;1&quot;,
                        &quot;14-17&quot;: &quot;1&quot;,
                        &quot;14-18&quot;: &quot;1&quot;,
                        &quot;14-19&quot;: &quot;1&quot;,
                        &quot;14-20&quot;: &quot;1&quot;,
                        &quot;14-21&quot;: &quot;1&quot;,
                        &quot;14-22&quot;: &quot;1&quot;,
                        &quot;14-23&quot;: &quot;1&quot;,
                        &quot;14-24&quot;: &quot;1&quot;,
                        &quot;14-25&quot;: &quot;1&quot;,
                        &quot;14-26&quot;: &quot;1&quot;,
                        &quot;14-27&quot;: &quot;1&quot;,
                        &quot;14-28&quot;: &quot;1&quot;,
                        &quot;15-2&quot;: &quot;1&quot;,
                        &quot;15-3&quot;: &quot;1&quot;,
                        &quot;15-4&quot;: &quot;1&quot;,
                        &quot;15-5&quot;: &quot;1&quot;,
                        &quot;15-6&quot;: &quot;1&quot;,
                        &quot;15-7&quot;: &quot;1&quot;,
                        &quot;15-8&quot;: &quot;1&quot;,
                        &quot;15-9&quot;: &quot;1&quot;,
                        &quot;15-10&quot;: &quot;1&quot;,
                        &quot;15-11&quot;: &quot;1&quot;,
                        &quot;15-12&quot;: &quot;1&quot;,
                        &quot;15-13&quot;: &quot;1&quot;,
                        &quot;15-14&quot;: &quot;1&quot;,
                        &quot;15-15&quot;: &quot;1&quot;,
                        &quot;15-16&quot;: &quot;1&quot;,
                        &quot;15-17&quot;: &quot;1&quot;,
                        &quot;15-18&quot;: &quot;1&quot;,
                        &quot;15-19&quot;: &quot;1&quot;,
                        &quot;15-20&quot;: &quot;1&quot;,
                        &quot;15-21&quot;: &quot;1&quot;,
                        &quot;15-22&quot;: &quot;1&quot;,
                        &quot;15-23&quot;: &quot;1&quot;,
                        &quot;15-24&quot;: &quot;1&quot;,
                        &quot;15-25&quot;: &quot;1&quot;,
                        &quot;15-26&quot;: &quot;1&quot;,
                        &quot;15-27&quot;: &quot;1&quot;,
                        &quot;15-28&quot;: &quot;1&quot;,
                        &quot;16-2&quot;: &quot;1&quot;,
                        &quot;16-3&quot;: &quot;1&quot;,
                        &quot;16-4&quot;: &quot;1&quot;,
                        &quot;16-5&quot;: &quot;1&quot;,
                        &quot;16-6&quot;: &quot;1&quot;,
                        &quot;16-7&quot;: &quot;1&quot;,
                        &quot;16-8&quot;: &quot;1&quot;,
                        &quot;16-9&quot;: &quot;1&quot;,
                        &quot;16-10&quot;: &quot;1&quot;,
                        &quot;16-11&quot;: &quot;1&quot;,
                        &quot;16-12&quot;: &quot;1&quot;,
                        &quot;16-13&quot;: &quot;1&quot;,
                        &quot;16-14&quot;: &quot;1&quot;,
                        &quot;16-15&quot;: &quot;1&quot;,
                        &quot;16-16&quot;: &quot;1&quot;,
                        &quot;16-17&quot;: &quot;1&quot;,
                        &quot;16-18&quot;: &quot;1&quot;,
                        &quot;16-19&quot;: &quot;1&quot;,
                        &quot;16-20&quot;: &quot;1&quot;,
                        &quot;16-21&quot;: &quot;1&quot;,
                        &quot;16-22&quot;: &quot;1&quot;,
                        &quot;16-23&quot;: &quot;1&quot;,
                        &quot;16-24&quot;: &quot;1&quot;,
                        &quot;16-25&quot;: &quot;1&quot;,
                        &quot;16-26&quot;: &quot;1&quot;,
                        &quot;16-27&quot;: &quot;1&quot;,
                        &quot;16-28&quot;: &quot;1&quot;,
                        &quot;17-2&quot;: &quot;1&quot;,
                        &quot;17-3&quot;: &quot;1&quot;,
                        &quot;17-4&quot;: &quot;1&quot;,
                        &quot;17-5&quot;: &quot;1&quot;,
                        &quot;17-6&quot;: &quot;1&quot;,
                        &quot;17-7&quot;: &quot;1&quot;,
                        &quot;17-8&quot;: &quot;1&quot;,
                        &quot;17-9&quot;: &quot;1&quot;,
                        &quot;17-10&quot;: &quot;1&quot;,
                        &quot;17-11&quot;: &quot;1&quot;,
                        &quot;17-12&quot;: &quot;1&quot;,
                        &quot;17-13&quot;: &quot;1&quot;,
                        &quot;17-14&quot;: &quot;1&quot;,
                        &quot;17-15&quot;: &quot;1&quot;,
                        &quot;17-16&quot;: &quot;1&quot;,
                        &quot;17-17&quot;: &quot;1&quot;,
                        &quot;17-18&quot;: &quot;1&quot;,
                        &quot;17-19&quot;: &quot;1&quot;,
                        &quot;17-20&quot;: &quot;1&quot;,
                        &quot;17-21&quot;: &quot;1&quot;,
                        &quot;17-22&quot;: &quot;1&quot;,
                        &quot;17-23&quot;: &quot;1&quot;,
                        &quot;17-24&quot;: &quot;1&quot;,
                        &quot;17-25&quot;: &quot;1&quot;,
                        &quot;17-26&quot;: &quot;1&quot;,
                        &quot;17-27&quot;: &quot;1&quot;,
                        &quot;17-28&quot;: &quot;1&quot;,
                        &quot;18-2&quot;: &quot;1&quot;,
                        &quot;18-3&quot;: &quot;1&quot;,
                        &quot;18-4&quot;: &quot;1&quot;,
                        &quot;18-5&quot;: &quot;1&quot;,
                        &quot;18-6&quot;: &quot;1&quot;,
                        &quot;18-7&quot;: &quot;1&quot;,
                        &quot;18-8&quot;: &quot;1&quot;,
                        &quot;18-9&quot;: &quot;1&quot;,
                        &quot;18-10&quot;: &quot;1&quot;,
                        &quot;18-11&quot;: &quot;1&quot;,
                        &quot;18-12&quot;: &quot;1&quot;,
                        &quot;18-13&quot;: &quot;1&quot;,
                        &quot;18-14&quot;: &quot;1&quot;,
                        &quot;18-15&quot;: &quot;1&quot;,
                        &quot;18-16&quot;: &quot;1&quot;,
                        &quot;18-17&quot;: &quot;1&quot;,
                        &quot;18-18&quot;: &quot;1&quot;,
                        &quot;18-19&quot;: &quot;1&quot;,
                        &quot;18-20&quot;: &quot;1&quot;,
                        &quot;18-21&quot;: &quot;1&quot;,
                        &quot;18-22&quot;: &quot;1&quot;,
                        &quot;18-23&quot;: &quot;1&quot;,
                        &quot;18-24&quot;: &quot;1&quot;,
                        &quot;18-25&quot;: &quot;1&quot;,
                        &quot;18-26&quot;: &quot;1&quot;,
                        &quot;18-27&quot;: &quot;1&quot;,
                        &quot;18-28&quot;: &quot;1&quot;
                    },
                    &quot;walls_data&quot;: {
                        &quot;wallColor&quot;: &quot;#444444&quot;,
                        &quot;2-2&quot;: &quot;#444444&quot;,
                        &quot;2-3&quot;: &quot;#444444&quot;,
                        &quot;2-4&quot;: &quot;#444444&quot;,
                        &quot;2-5&quot;: &quot;#444444&quot;,
                        &quot;2-6&quot;: &quot;#444444&quot;,
                        &quot;2-7&quot;: &quot;#444444&quot;,
                        &quot;2-8&quot;: &quot;#444444&quot;,
                        &quot;2-9&quot;: &quot;#444444&quot;,
                        &quot;2-10&quot;: &quot;#444444&quot;,
                        &quot;2-11&quot;: &quot;#444444&quot;,
                        &quot;2-12&quot;: &quot;#444444&quot;,
                        &quot;2-13&quot;: &quot;#444444&quot;,
                        &quot;2-14&quot;: &quot;#444444&quot;,
                        &quot;2-15&quot;: &quot;#444444&quot;,
                        &quot;2-16&quot;: &quot;#444444&quot;,
                        &quot;2-17&quot;: &quot;#444444&quot;,
                        &quot;2-18&quot;: &quot;#444444&quot;,
                        &quot;2-19&quot;: &quot;#444444&quot;,
                        &quot;2-20&quot;: &quot;#444444&quot;,
                        &quot;2-21&quot;: &quot;#444444&quot;,
                        &quot;2-22&quot;: &quot;#444444&quot;,
                        &quot;2-23&quot;: &quot;#444444&quot;,
                        &quot;2-24&quot;: &quot;#444444&quot;,
                        &quot;2-25&quot;: &quot;#444444&quot;,
                        &quot;2-26&quot;: &quot;#444444&quot;,
                        &quot;2-27&quot;: &quot;#444444&quot;,
                        &quot;2-28&quot;: &quot;#444444&quot;,
                        &quot;3-2&quot;: &quot;#444444&quot;,
                        &quot;3-3&quot;: &quot;#444444&quot;,
                        &quot;3-4&quot;: &quot;#444444&quot;,
                        &quot;3-5&quot;: &quot;#444444&quot;,
                        &quot;3-6&quot;: &quot;#444444&quot;,
                        &quot;3-7&quot;: &quot;#444444&quot;,
                        &quot;3-8&quot;: &quot;#444444&quot;,
                        &quot;3-9&quot;: &quot;#444444&quot;,
                        &quot;3-10&quot;: &quot;#444444&quot;,
                        &quot;3-11&quot;: &quot;#444444&quot;,
                        &quot;3-12&quot;: &quot;#444444&quot;,
                        &quot;3-13&quot;: &quot;#444444&quot;,
                        &quot;3-14&quot;: &quot;#444444&quot;,
                        &quot;3-15&quot;: &quot;#444444&quot;,
                        &quot;3-16&quot;: &quot;#444444&quot;,
                        &quot;3-17&quot;: &quot;#444444&quot;,
                        &quot;3-18&quot;: &quot;#444444&quot;,
                        &quot;3-19&quot;: &quot;#444444&quot;,
                        &quot;3-20&quot;: &quot;#444444&quot;,
                        &quot;3-21&quot;: &quot;#444444&quot;,
                        &quot;3-22&quot;: &quot;#444444&quot;,
                        &quot;3-23&quot;: &quot;#444444&quot;,
                        &quot;3-24&quot;: &quot;#444444&quot;,
                        &quot;3-25&quot;: &quot;#444444&quot;,
                        &quot;3-26&quot;: &quot;#444444&quot;,
                        &quot;3-27&quot;: &quot;#444444&quot;,
                        &quot;3-28&quot;: &quot;#444444&quot;,
                        &quot;4-2&quot;: &quot;#444444&quot;,
                        &quot;4-3&quot;: &quot;#444444&quot;,
                        &quot;4-4&quot;: &quot;#444444&quot;,
                        &quot;4-5&quot;: &quot;#444444&quot;,
                        &quot;4-6&quot;: &quot;#444444&quot;,
                        &quot;4-7&quot;: &quot;#444444&quot;,
                        &quot;4-8&quot;: &quot;#444444&quot;,
                        &quot;4-9&quot;: &quot;#444444&quot;,
                        &quot;4-10&quot;: &quot;#444444&quot;,
                        &quot;4-11&quot;: &quot;#444444&quot;,
                        &quot;4-12&quot;: &quot;#444444&quot;,
                        &quot;4-13&quot;: &quot;#444444&quot;,
                        &quot;4-14&quot;: &quot;#444444&quot;,
                        &quot;4-15&quot;: &quot;#444444&quot;,
                        &quot;4-16&quot;: &quot;#444444&quot;,
                        &quot;4-17&quot;: &quot;#444444&quot;,
                        &quot;4-18&quot;: &quot;#444444&quot;,
                        &quot;4-19&quot;: &quot;#444444&quot;,
                        &quot;4-20&quot;: &quot;#444444&quot;,
                        &quot;4-21&quot;: &quot;#444444&quot;,
                        &quot;4-22&quot;: &quot;#444444&quot;,
                        &quot;4-23&quot;: &quot;#444444&quot;,
                        &quot;4-24&quot;: &quot;#444444&quot;,
                        &quot;4-25&quot;: &quot;#444444&quot;,
                        &quot;4-26&quot;: &quot;#444444&quot;,
                        &quot;4-27&quot;: &quot;#444444&quot;,
                        &quot;4-28&quot;: &quot;#444444&quot;,
                        &quot;5-2&quot;: &quot;#444444&quot;,
                        &quot;5-3&quot;: &quot;#444444&quot;,
                        &quot;5-4&quot;: &quot;#444444&quot;,
                        &quot;5-5&quot;: &quot;#444444&quot;,
                        &quot;5-6&quot;: &quot;#444444&quot;,
                        &quot;5-7&quot;: &quot;#444444&quot;,
                        &quot;5-8&quot;: &quot;#444444&quot;,
                        &quot;5-9&quot;: &quot;#444444&quot;,
                        &quot;5-10&quot;: &quot;#444444&quot;,
                        &quot;5-11&quot;: &quot;#444444&quot;,
                        &quot;5-12&quot;: &quot;#444444&quot;,
                        &quot;5-13&quot;: &quot;#444444&quot;,
                        &quot;5-14&quot;: &quot;#444444&quot;,
                        &quot;5-15&quot;: &quot;#444444&quot;,
                        &quot;5-16&quot;: &quot;#444444&quot;,
                        &quot;5-17&quot;: &quot;#444444&quot;,
                        &quot;5-18&quot;: &quot;#444444&quot;,
                        &quot;5-19&quot;: &quot;#444444&quot;,
                        &quot;5-20&quot;: &quot;#444444&quot;,
                        &quot;5-21&quot;: &quot;#444444&quot;,
                        &quot;5-22&quot;: &quot;#444444&quot;,
                        &quot;5-23&quot;: &quot;#444444&quot;,
                        &quot;5-24&quot;: &quot;#444444&quot;,
                        &quot;5-25&quot;: &quot;#444444&quot;,
                        &quot;5-26&quot;: &quot;#444444&quot;,
                        &quot;5-27&quot;: &quot;#444444&quot;,
                        &quot;5-28&quot;: &quot;#444444&quot;,
                        &quot;6-2&quot;: &quot;#444444&quot;,
                        &quot;6-3&quot;: &quot;#444444&quot;,
                        &quot;6-4&quot;: &quot;#444444&quot;,
                        &quot;6-5&quot;: &quot;#444444&quot;,
                        &quot;6-6&quot;: &quot;#444444&quot;,
                        &quot;6-7&quot;: &quot;#444444&quot;,
                        &quot;6-8&quot;: &quot;#444444&quot;,
                        &quot;6-9&quot;: &quot;#444444&quot;,
                        &quot;6-10&quot;: &quot;#444444&quot;,
                        &quot;6-11&quot;: &quot;#444444&quot;,
                        &quot;6-12&quot;: &quot;#444444&quot;,
                        &quot;6-13&quot;: &quot;#444444&quot;,
                        &quot;6-14&quot;: &quot;#444444&quot;,
                        &quot;6-15&quot;: &quot;#444444&quot;,
                        &quot;6-16&quot;: &quot;#444444&quot;,
                        &quot;6-17&quot;: &quot;#444444&quot;,
                        &quot;6-18&quot;: &quot;#444444&quot;,
                        &quot;6-19&quot;: &quot;#444444&quot;,
                        &quot;6-20&quot;: &quot;#444444&quot;,
                        &quot;6-21&quot;: &quot;#444444&quot;,
                        &quot;6-22&quot;: &quot;#444444&quot;,
                        &quot;6-23&quot;: &quot;#444444&quot;,
                        &quot;6-24&quot;: &quot;#444444&quot;,
                        &quot;6-25&quot;: &quot;#444444&quot;,
                        &quot;6-26&quot;: &quot;#444444&quot;,
                        &quot;6-27&quot;: &quot;#444444&quot;,
                        &quot;6-28&quot;: &quot;#444444&quot;,
                        &quot;7-2&quot;: &quot;#444444&quot;,
                        &quot;7-3&quot;: &quot;#444444&quot;,
                        &quot;7-4&quot;: &quot;#444444&quot;,
                        &quot;7-5&quot;: &quot;#444444&quot;,
                        &quot;7-6&quot;: &quot;#444444&quot;,
                        &quot;7-7&quot;: &quot;#444444&quot;,
                        &quot;7-8&quot;: &quot;#444444&quot;,
                        &quot;7-9&quot;: &quot;#444444&quot;,
                        &quot;7-10&quot;: &quot;#444444&quot;,
                        &quot;7-11&quot;: &quot;#444444&quot;,
                        &quot;7-12&quot;: &quot;#444444&quot;,
                        &quot;7-13&quot;: &quot;#444444&quot;,
                        &quot;7-14&quot;: &quot;#444444&quot;,
                        &quot;7-15&quot;: &quot;#444444&quot;,
                        &quot;7-16&quot;: &quot;#444444&quot;,
                        &quot;7-17&quot;: &quot;#444444&quot;,
                        &quot;7-18&quot;: &quot;#444444&quot;,
                        &quot;7-19&quot;: &quot;#444444&quot;,
                        &quot;7-20&quot;: &quot;#444444&quot;,
                        &quot;7-21&quot;: &quot;#444444&quot;,
                        &quot;7-22&quot;: &quot;#444444&quot;,
                        &quot;7-23&quot;: &quot;#444444&quot;,
                        &quot;7-24&quot;: &quot;#444444&quot;,
                        &quot;7-25&quot;: &quot;#444444&quot;,
                        &quot;7-26&quot;: &quot;#444444&quot;,
                        &quot;7-27&quot;: &quot;#444444&quot;,
                        &quot;7-28&quot;: &quot;#444444&quot;,
                        &quot;8-2&quot;: &quot;#444444&quot;,
                        &quot;8-3&quot;: &quot;#444444&quot;,
                        &quot;8-4&quot;: &quot;#444444&quot;,
                        &quot;8-5&quot;: &quot;#444444&quot;,
                        &quot;8-6&quot;: &quot;#444444&quot;,
                        &quot;8-7&quot;: &quot;#444444&quot;,
                        &quot;8-8&quot;: &quot;#444444&quot;,
                        &quot;8-9&quot;: &quot;#444444&quot;,
                        &quot;8-10&quot;: &quot;#444444&quot;,
                        &quot;8-11&quot;: &quot;#444444&quot;,
                        &quot;8-12&quot;: &quot;#444444&quot;,
                        &quot;8-13&quot;: &quot;#444444&quot;,
                        &quot;8-14&quot;: &quot;#444444&quot;,
                        &quot;8-15&quot;: &quot;#444444&quot;,
                        &quot;8-16&quot;: &quot;#444444&quot;,
                        &quot;8-17&quot;: &quot;#444444&quot;,
                        &quot;8-18&quot;: &quot;#444444&quot;,
                        &quot;8-19&quot;: &quot;#444444&quot;,
                        &quot;8-20&quot;: &quot;#444444&quot;,
                        &quot;8-21&quot;: &quot;#444444&quot;,
                        &quot;8-22&quot;: &quot;#444444&quot;,
                        &quot;8-23&quot;: &quot;#444444&quot;,
                        &quot;8-24&quot;: &quot;#444444&quot;,
                        &quot;8-25&quot;: &quot;#444444&quot;,
                        &quot;8-26&quot;: &quot;#444444&quot;,
                        &quot;8-27&quot;: &quot;#444444&quot;,
                        &quot;8-28&quot;: &quot;#444444&quot;,
                        &quot;9-2&quot;: &quot;#444444&quot;,
                        &quot;9-3&quot;: &quot;#444444&quot;,
                        &quot;9-4&quot;: &quot;#444444&quot;,
                        &quot;9-5&quot;: &quot;#444444&quot;,
                        &quot;9-6&quot;: &quot;#444444&quot;,
                        &quot;9-7&quot;: &quot;#444444&quot;,
                        &quot;9-8&quot;: &quot;#444444&quot;,
                        &quot;9-9&quot;: &quot;#444444&quot;,
                        &quot;9-10&quot;: &quot;#444444&quot;,
                        &quot;9-11&quot;: &quot;#444444&quot;,
                        &quot;9-12&quot;: &quot;#444444&quot;,
                        &quot;9-13&quot;: &quot;#444444&quot;,
                        &quot;9-14&quot;: &quot;#444444&quot;,
                        &quot;9-15&quot;: &quot;#444444&quot;,
                        &quot;9-16&quot;: &quot;#444444&quot;,
                        &quot;9-17&quot;: &quot;#444444&quot;,
                        &quot;9-18&quot;: &quot;#444444&quot;,
                        &quot;9-19&quot;: &quot;#444444&quot;,
                        &quot;9-20&quot;: &quot;#444444&quot;,
                        &quot;9-21&quot;: &quot;#444444&quot;,
                        &quot;9-22&quot;: &quot;#444444&quot;,
                        &quot;9-23&quot;: &quot;#444444&quot;,
                        &quot;9-24&quot;: &quot;#444444&quot;,
                        &quot;9-25&quot;: &quot;#444444&quot;,
                        &quot;9-26&quot;: &quot;#444444&quot;,
                        &quot;9-27&quot;: &quot;#444444&quot;,
                        &quot;9-28&quot;: &quot;#444444&quot;,
                        &quot;10-2&quot;: &quot;#444444&quot;,
                        &quot;10-3&quot;: &quot;#444444&quot;,
                        &quot;10-4&quot;: &quot;#444444&quot;,
                        &quot;10-5&quot;: &quot;#444444&quot;,
                        &quot;10-6&quot;: &quot;#444444&quot;,
                        &quot;10-7&quot;: &quot;#444444&quot;,
                        &quot;10-8&quot;: &quot;#444444&quot;,
                        &quot;10-9&quot;: &quot;#444444&quot;,
                        &quot;10-10&quot;: &quot;#444444&quot;,
                        &quot;10-11&quot;: &quot;#444444&quot;,
                        &quot;10-12&quot;: &quot;#444444&quot;,
                        &quot;10-13&quot;: &quot;#444444&quot;,
                        &quot;10-14&quot;: &quot;#444444&quot;,
                        &quot;10-15&quot;: &quot;#444444&quot;,
                        &quot;10-16&quot;: &quot;#444444&quot;,
                        &quot;10-17&quot;: &quot;#444444&quot;,
                        &quot;10-18&quot;: &quot;#444444&quot;,
                        &quot;10-19&quot;: &quot;#444444&quot;,
                        &quot;10-20&quot;: &quot;#444444&quot;,
                        &quot;10-21&quot;: &quot;#444444&quot;,
                        &quot;10-22&quot;: &quot;#444444&quot;,
                        &quot;10-23&quot;: &quot;#444444&quot;,
                        &quot;10-24&quot;: &quot;#444444&quot;,
                        &quot;10-25&quot;: &quot;#444444&quot;,
                        &quot;10-26&quot;: &quot;#444444&quot;,
                        &quot;10-27&quot;: &quot;#444444&quot;,
                        &quot;10-28&quot;: &quot;#444444&quot;,
                        &quot;11-2&quot;: &quot;#444444&quot;,
                        &quot;11-3&quot;: &quot;#444444&quot;,
                        &quot;11-4&quot;: &quot;#444444&quot;,
                        &quot;11-5&quot;: &quot;#444444&quot;,
                        &quot;11-6&quot;: &quot;#444444&quot;,
                        &quot;11-7&quot;: &quot;#444444&quot;,
                        &quot;11-8&quot;: &quot;#444444&quot;,
                        &quot;11-9&quot;: &quot;#444444&quot;,
                        &quot;11-10&quot;: &quot;#444444&quot;,
                        &quot;11-11&quot;: &quot;#444444&quot;,
                        &quot;11-12&quot;: &quot;#444444&quot;,
                        &quot;11-13&quot;: &quot;#444444&quot;,
                        &quot;11-14&quot;: &quot;#444444&quot;,
                        &quot;11-15&quot;: &quot;#444444&quot;,
                        &quot;11-16&quot;: &quot;#444444&quot;,
                        &quot;11-17&quot;: &quot;#444444&quot;,
                        &quot;11-18&quot;: &quot;#444444&quot;,
                        &quot;11-19&quot;: &quot;#444444&quot;,
                        &quot;11-20&quot;: &quot;#444444&quot;,
                        &quot;11-21&quot;: &quot;#444444&quot;,
                        &quot;11-22&quot;: &quot;#444444&quot;,
                        &quot;11-23&quot;: &quot;#444444&quot;,
                        &quot;11-24&quot;: &quot;#444444&quot;,
                        &quot;11-25&quot;: &quot;#444444&quot;,
                        &quot;11-26&quot;: &quot;#444444&quot;,
                        &quot;11-27&quot;: &quot;#444444&quot;,
                        &quot;11-28&quot;: &quot;#444444&quot;,
                        &quot;12-2&quot;: &quot;#444444&quot;,
                        &quot;12-3&quot;: &quot;#444444&quot;,
                        &quot;12-4&quot;: &quot;#444444&quot;,
                        &quot;12-5&quot;: &quot;#444444&quot;,
                        &quot;12-6&quot;: &quot;#444444&quot;,
                        &quot;12-7&quot;: &quot;#444444&quot;,
                        &quot;12-8&quot;: &quot;#444444&quot;,
                        &quot;12-9&quot;: &quot;#444444&quot;,
                        &quot;12-10&quot;: &quot;#444444&quot;,
                        &quot;12-11&quot;: &quot;#444444&quot;,
                        &quot;12-12&quot;: &quot;#444444&quot;,
                        &quot;12-13&quot;: &quot;#444444&quot;,
                        &quot;12-14&quot;: &quot;#444444&quot;,
                        &quot;12-15&quot;: &quot;#444444&quot;,
                        &quot;12-16&quot;: &quot;#444444&quot;,
                        &quot;12-17&quot;: &quot;#444444&quot;,
                        &quot;12-18&quot;: &quot;#444444&quot;,
                        &quot;12-19&quot;: &quot;#444444&quot;,
                        &quot;12-20&quot;: &quot;#444444&quot;,
                        &quot;12-21&quot;: &quot;#444444&quot;,
                        &quot;12-22&quot;: &quot;#444444&quot;,
                        &quot;12-23&quot;: &quot;#444444&quot;,
                        &quot;12-24&quot;: &quot;#444444&quot;,
                        &quot;12-25&quot;: &quot;#444444&quot;,
                        &quot;12-26&quot;: &quot;#444444&quot;,
                        &quot;12-27&quot;: &quot;#444444&quot;,
                        &quot;12-28&quot;: &quot;#444444&quot;,
                        &quot;13-2&quot;: &quot;#444444&quot;,
                        &quot;13-3&quot;: &quot;#444444&quot;,
                        &quot;13-4&quot;: &quot;#444444&quot;,
                        &quot;13-5&quot;: &quot;#444444&quot;,
                        &quot;13-6&quot;: &quot;#444444&quot;,
                        &quot;13-7&quot;: &quot;#444444&quot;,
                        &quot;13-8&quot;: &quot;#444444&quot;,
                        &quot;13-9&quot;: &quot;#444444&quot;,
                        &quot;13-10&quot;: &quot;#444444&quot;,
                        &quot;13-11&quot;: &quot;#444444&quot;,
                        &quot;13-12&quot;: &quot;#444444&quot;,
                        &quot;13-13&quot;: &quot;#444444&quot;,
                        &quot;13-14&quot;: &quot;#444444&quot;,
                        &quot;13-15&quot;: &quot;#444444&quot;,
                        &quot;13-16&quot;: &quot;#444444&quot;,
                        &quot;13-17&quot;: &quot;#444444&quot;,
                        &quot;13-18&quot;: &quot;#444444&quot;,
                        &quot;13-19&quot;: &quot;#444444&quot;,
                        &quot;13-20&quot;: &quot;#444444&quot;,
                        &quot;13-21&quot;: &quot;#444444&quot;,
                        &quot;13-22&quot;: &quot;#444444&quot;,
                        &quot;13-23&quot;: &quot;#444444&quot;,
                        &quot;13-24&quot;: &quot;#444444&quot;,
                        &quot;13-25&quot;: &quot;#444444&quot;,
                        &quot;13-26&quot;: &quot;#444444&quot;,
                        &quot;13-27&quot;: &quot;#444444&quot;,
                        &quot;13-28&quot;: &quot;#444444&quot;,
                        &quot;14-2&quot;: &quot;#444444&quot;,
                        &quot;14-3&quot;: &quot;#444444&quot;,
                        &quot;14-4&quot;: &quot;#444444&quot;,
                        &quot;14-5&quot;: &quot;#444444&quot;,
                        &quot;14-6&quot;: &quot;#444444&quot;,
                        &quot;14-7&quot;: &quot;#444444&quot;,
                        &quot;14-8&quot;: &quot;#444444&quot;,
                        &quot;14-9&quot;: &quot;#444444&quot;,
                        &quot;14-10&quot;: &quot;#444444&quot;,
                        &quot;14-11&quot;: &quot;#444444&quot;,
                        &quot;14-12&quot;: &quot;#444444&quot;,
                        &quot;14-13&quot;: &quot;#444444&quot;,
                        &quot;14-14&quot;: &quot;#444444&quot;,
                        &quot;14-15&quot;: &quot;#444444&quot;,
                        &quot;14-16&quot;: &quot;#444444&quot;,
                        &quot;14-17&quot;: &quot;#444444&quot;,
                        &quot;14-18&quot;: &quot;#444444&quot;,
                        &quot;14-19&quot;: &quot;#444444&quot;,
                        &quot;14-20&quot;: &quot;#444444&quot;,
                        &quot;14-21&quot;: &quot;#444444&quot;,
                        &quot;14-22&quot;: &quot;#444444&quot;,
                        &quot;14-23&quot;: &quot;#444444&quot;,
                        &quot;14-24&quot;: &quot;#444444&quot;,
                        &quot;14-25&quot;: &quot;#444444&quot;,
                        &quot;14-26&quot;: &quot;#444444&quot;,
                        &quot;14-27&quot;: &quot;#444444&quot;,
                        &quot;14-28&quot;: &quot;#444444&quot;,
                        &quot;15-2&quot;: &quot;#444444&quot;,
                        &quot;15-3&quot;: &quot;#444444&quot;,
                        &quot;15-4&quot;: &quot;#444444&quot;,
                        &quot;15-5&quot;: &quot;#444444&quot;,
                        &quot;15-6&quot;: &quot;#444444&quot;,
                        &quot;15-7&quot;: &quot;#444444&quot;,
                        &quot;15-8&quot;: &quot;#444444&quot;,
                        &quot;15-9&quot;: &quot;#444444&quot;,
                        &quot;15-10&quot;: &quot;#444444&quot;,
                        &quot;15-11&quot;: &quot;#444444&quot;,
                        &quot;15-12&quot;: &quot;#444444&quot;,
                        &quot;15-13&quot;: &quot;#444444&quot;,
                        &quot;15-14&quot;: &quot;#444444&quot;,
                        &quot;15-15&quot;: &quot;#444444&quot;,
                        &quot;15-16&quot;: &quot;#444444&quot;,
                        &quot;15-17&quot;: &quot;#444444&quot;,
                        &quot;15-18&quot;: &quot;#444444&quot;,
                        &quot;15-19&quot;: &quot;#444444&quot;,
                        &quot;15-20&quot;: &quot;#444444&quot;,
                        &quot;15-21&quot;: &quot;#444444&quot;,
                        &quot;15-22&quot;: &quot;#444444&quot;,
                        &quot;15-23&quot;: &quot;#444444&quot;,
                        &quot;15-24&quot;: &quot;#444444&quot;,
                        &quot;15-25&quot;: &quot;#444444&quot;,
                        &quot;15-26&quot;: &quot;#444444&quot;,
                        &quot;15-27&quot;: &quot;#444444&quot;,
                        &quot;15-28&quot;: &quot;#444444&quot;,
                        &quot;16-2&quot;: &quot;#444444&quot;,
                        &quot;16-3&quot;: &quot;#444444&quot;,
                        &quot;16-4&quot;: &quot;#444444&quot;,
                        &quot;16-5&quot;: &quot;#444444&quot;,
                        &quot;16-6&quot;: &quot;#444444&quot;,
                        &quot;16-7&quot;: &quot;#444444&quot;,
                        &quot;16-8&quot;: &quot;#444444&quot;,
                        &quot;16-9&quot;: &quot;#444444&quot;,
                        &quot;16-10&quot;: &quot;#444444&quot;,
                        &quot;16-11&quot;: &quot;#444444&quot;,
                        &quot;16-12&quot;: &quot;#444444&quot;,
                        &quot;16-13&quot;: &quot;#444444&quot;,
                        &quot;16-14&quot;: &quot;#444444&quot;,
                        &quot;16-15&quot;: &quot;#444444&quot;,
                        &quot;16-16&quot;: &quot;#444444&quot;,
                        &quot;16-17&quot;: &quot;#444444&quot;,
                        &quot;16-18&quot;: &quot;#444444&quot;,
                        &quot;16-19&quot;: &quot;#444444&quot;,
                        &quot;16-20&quot;: &quot;#444444&quot;,
                        &quot;16-21&quot;: &quot;#444444&quot;,
                        &quot;16-22&quot;: &quot;#444444&quot;,
                        &quot;16-23&quot;: &quot;#444444&quot;,
                        &quot;16-24&quot;: &quot;#444444&quot;,
                        &quot;16-25&quot;: &quot;#444444&quot;,
                        &quot;16-26&quot;: &quot;#444444&quot;,
                        &quot;16-27&quot;: &quot;#444444&quot;,
                        &quot;16-28&quot;: &quot;#444444&quot;,
                        &quot;17-2&quot;: &quot;#444444&quot;,
                        &quot;17-3&quot;: &quot;#444444&quot;,
                        &quot;17-4&quot;: &quot;#444444&quot;,
                        &quot;17-5&quot;: &quot;#444444&quot;,
                        &quot;17-6&quot;: &quot;#444444&quot;,
                        &quot;17-7&quot;: &quot;#444444&quot;,
                        &quot;17-8&quot;: &quot;#444444&quot;,
                        &quot;17-9&quot;: &quot;#444444&quot;,
                        &quot;17-10&quot;: &quot;#444444&quot;,
                        &quot;17-11&quot;: &quot;#444444&quot;,
                        &quot;17-12&quot;: &quot;#444444&quot;,
                        &quot;17-13&quot;: &quot;#444444&quot;,
                        &quot;17-14&quot;: &quot;#444444&quot;,
                        &quot;17-15&quot;: &quot;#444444&quot;,
                        &quot;17-16&quot;: &quot;#444444&quot;,
                        &quot;17-17&quot;: &quot;#444444&quot;,
                        &quot;17-18&quot;: &quot;#444444&quot;,
                        &quot;17-19&quot;: &quot;#444444&quot;,
                        &quot;17-20&quot;: &quot;#444444&quot;,
                        &quot;17-21&quot;: &quot;#444444&quot;,
                        &quot;17-22&quot;: &quot;#444444&quot;,
                        &quot;17-23&quot;: &quot;#444444&quot;,
                        &quot;17-24&quot;: &quot;#444444&quot;,
                        &quot;17-25&quot;: &quot;#444444&quot;,
                        &quot;17-26&quot;: &quot;#444444&quot;,
                        &quot;17-27&quot;: &quot;#444444&quot;,
                        &quot;17-28&quot;: &quot;#444444&quot;,
                        &quot;18-2&quot;: &quot;#444444&quot;,
                        &quot;18-3&quot;: &quot;#444444&quot;,
                        &quot;18-4&quot;: &quot;#444444&quot;,
                        &quot;18-5&quot;: &quot;#444444&quot;,
                        &quot;18-6&quot;: &quot;#444444&quot;,
                        &quot;18-7&quot;: &quot;#444444&quot;,
                        &quot;18-8&quot;: &quot;#444444&quot;,
                        &quot;18-9&quot;: &quot;#444444&quot;,
                        &quot;18-10&quot;: &quot;#444444&quot;,
                        &quot;18-11&quot;: &quot;#444444&quot;,
                        &quot;18-12&quot;: &quot;#444444&quot;,
                        &quot;18-13&quot;: &quot;#444444&quot;,
                        &quot;18-14&quot;: &quot;#444444&quot;,
                        &quot;18-15&quot;: &quot;#444444&quot;,
                        &quot;18-16&quot;: &quot;#444444&quot;,
                        &quot;18-17&quot;: &quot;#444444&quot;,
                        &quot;18-18&quot;: &quot;#444444&quot;,
                        &quot;18-19&quot;: &quot;#444444&quot;,
                        &quot;18-20&quot;: &quot;#444444&quot;,
                        &quot;18-21&quot;: &quot;#444444&quot;,
                        &quot;18-22&quot;: &quot;#444444&quot;,
                        &quot;18-23&quot;: &quot;#444444&quot;,
                        &quot;18-24&quot;: &quot;#444444&quot;,
                        &quot;18-25&quot;: &quot;#444444&quot;,
                        &quot;18-26&quot;: &quot;#444444&quot;,
                        &quot;18-27&quot;: &quot;#444444&quot;,
                        &quot;18-28&quot;: &quot;#444444&quot;
                    },
                    &quot;wall_color&quot;: &quot;#444444&quot;,
                    &quot;wall_thickness&quot;: 15,
                    &quot;floor_texture_id&quot;: 9,
                    &quot;starting_point_row&quot;: 16,
                    &quot;starting_point_col&quot;: 2,
                    &quot;floor_accepted&quot;: true,
                    &quot;door_asset_id&quot;: 1,
                    &quot;door_position&quot;: {
                        &quot;row&quot;: 13,
                        &quot;col&quot;: 11
                    },
                    &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 8,
            &quot;user_id&quot;: 3,
            &quot;name&quot;: &quot;Podziemne Katakumby&quot;,
            &quot;description&quot;: &quot;Zagłęb się w mroczne katakumby, gdzie każdy korytarz kryje nową zagadkę.&quot;,
            &quot;thumbnail_url&quot;: &quot;/storage/escape-rooms/thumbnails/rl-app-3.png&quot;,
            &quot;soundtrack_url&quot;: &quot;/storage/escape-rooms/soundtracks/a7e4d623-fcef-4666-a4b9-f8925515e479.mp3&quot;,
            &quot;is_public&quot;: true,
            &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;tester&quot;,
                &quot;email&quot;: &quot;tester@riddlelab.world&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;last_login_at&quot;: &quot;2026-02-13 22:04:23&quot;,
                &quot;role&quot;: &quot;user&quot;,
                &quot;avatar_url&quot;: null,
                &quot;player_configuration&quot;: &quot;{\&quot;avatar\&quot;:{\&quot;skin_color\&quot;:\&quot;#d2b48c\&quot;,\&quot;hair_color\&quot;:\&quot;#8b4513\&quot;,\&quot;eye_color\&quot;:\&quot;#1e90ff\&quot;,\&quot;outfit_color\&quot;:\&quot;#32cd32\&quot;}}&quot;,
                &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;
            },
            &quot;rooms&quot;: [
                {
                    &quot;id&quot;: 8,
                    &quot;escape_room_id&quot;: 8,
                    &quot;grid_data&quot;: {
                        &quot;2-2&quot;: &quot;1&quot;,
                        &quot;2-3&quot;: &quot;1&quot;,
                        &quot;2-4&quot;: &quot;1&quot;,
                        &quot;2-5&quot;: &quot;1&quot;,
                        &quot;2-6&quot;: &quot;1&quot;,
                        &quot;2-7&quot;: &quot;1&quot;,
                        &quot;2-8&quot;: &quot;1&quot;,
                        &quot;2-9&quot;: &quot;1&quot;,
                        &quot;2-10&quot;: &quot;1&quot;,
                        &quot;2-11&quot;: &quot;1&quot;,
                        &quot;2-12&quot;: &quot;1&quot;,
                        &quot;2-13&quot;: &quot;1&quot;,
                        &quot;2-14&quot;: &quot;1&quot;,
                        &quot;2-15&quot;: &quot;1&quot;,
                        &quot;2-16&quot;: &quot;1&quot;,
                        &quot;2-17&quot;: &quot;1&quot;,
                        &quot;2-18&quot;: &quot;1&quot;,
                        &quot;2-19&quot;: &quot;1&quot;,
                        &quot;2-20&quot;: &quot;1&quot;,
                        &quot;2-21&quot;: &quot;1&quot;,
                        &quot;2-22&quot;: &quot;1&quot;,
                        &quot;2-23&quot;: &quot;1&quot;,
                        &quot;2-24&quot;: &quot;1&quot;,
                        &quot;2-25&quot;: &quot;1&quot;,
                        &quot;2-26&quot;: &quot;1&quot;,
                        &quot;2-27&quot;: &quot;1&quot;,
                        &quot;2-28&quot;: &quot;1&quot;,
                        &quot;3-2&quot;: &quot;1&quot;,
                        &quot;3-3&quot;: &quot;1&quot;,
                        &quot;3-4&quot;: &quot;1&quot;,
                        &quot;3-5&quot;: &quot;1&quot;,
                        &quot;3-6&quot;: &quot;1&quot;,
                        &quot;3-7&quot;: &quot;1&quot;,
                        &quot;3-8&quot;: &quot;1&quot;,
                        &quot;3-9&quot;: &quot;1&quot;,
                        &quot;3-10&quot;: &quot;1&quot;,
                        &quot;3-11&quot;: &quot;1&quot;,
                        &quot;3-12&quot;: &quot;1&quot;,
                        &quot;3-13&quot;: &quot;1&quot;,
                        &quot;3-14&quot;: &quot;1&quot;,
                        &quot;3-15&quot;: &quot;1&quot;,
                        &quot;3-16&quot;: &quot;1&quot;,
                        &quot;3-17&quot;: &quot;1&quot;,
                        &quot;3-18&quot;: &quot;1&quot;,
                        &quot;3-19&quot;: &quot;1&quot;,
                        &quot;3-20&quot;: &quot;1&quot;,
                        &quot;3-21&quot;: &quot;1&quot;,
                        &quot;3-22&quot;: &quot;1&quot;,
                        &quot;3-23&quot;: &quot;1&quot;,
                        &quot;3-24&quot;: &quot;1&quot;,
                        &quot;3-25&quot;: &quot;1&quot;,
                        &quot;3-26&quot;: &quot;1&quot;,
                        &quot;3-27&quot;: &quot;1&quot;,
                        &quot;3-28&quot;: &quot;1&quot;,
                        &quot;4-2&quot;: &quot;1&quot;,
                        &quot;4-3&quot;: &quot;1&quot;,
                        &quot;4-4&quot;: &quot;1&quot;,
                        &quot;4-5&quot;: &quot;1&quot;,
                        &quot;4-6&quot;: &quot;1&quot;,
                        &quot;4-7&quot;: &quot;1&quot;,
                        &quot;4-8&quot;: &quot;1&quot;,
                        &quot;4-9&quot;: &quot;1&quot;,
                        &quot;4-10&quot;: &quot;1&quot;,
                        &quot;4-11&quot;: &quot;1&quot;,
                        &quot;4-12&quot;: &quot;1&quot;,
                        &quot;4-13&quot;: &quot;1&quot;,
                        &quot;4-14&quot;: &quot;1&quot;,
                        &quot;4-15&quot;: &quot;1&quot;,
                        &quot;4-16&quot;: &quot;1&quot;,
                        &quot;4-17&quot;: &quot;1&quot;,
                        &quot;4-18&quot;: &quot;1&quot;,
                        &quot;4-19&quot;: &quot;1&quot;,
                        &quot;4-20&quot;: &quot;1&quot;,
                        &quot;4-21&quot;: &quot;1&quot;,
                        &quot;4-22&quot;: &quot;1&quot;,
                        &quot;4-23&quot;: &quot;1&quot;,
                        &quot;4-24&quot;: &quot;1&quot;,
                        &quot;4-25&quot;: &quot;1&quot;,
                        &quot;4-26&quot;: &quot;1&quot;,
                        &quot;4-27&quot;: &quot;1&quot;,
                        &quot;4-28&quot;: &quot;1&quot;,
                        &quot;5-2&quot;: &quot;1&quot;,
                        &quot;5-3&quot;: &quot;1&quot;,
                        &quot;5-4&quot;: &quot;1&quot;,
                        &quot;5-5&quot;: &quot;1&quot;,
                        &quot;5-6&quot;: &quot;1&quot;,
                        &quot;5-7&quot;: &quot;1&quot;,
                        &quot;5-8&quot;: &quot;1&quot;,
                        &quot;5-9&quot;: &quot;1&quot;,
                        &quot;5-10&quot;: &quot;1&quot;,
                        &quot;5-11&quot;: &quot;1&quot;,
                        &quot;5-12&quot;: &quot;1&quot;,
                        &quot;5-13&quot;: &quot;1&quot;,
                        &quot;5-14&quot;: &quot;1&quot;,
                        &quot;5-15&quot;: &quot;1&quot;,
                        &quot;5-16&quot;: &quot;1&quot;,
                        &quot;5-17&quot;: &quot;1&quot;,
                        &quot;5-18&quot;: &quot;1&quot;,
                        &quot;5-19&quot;: &quot;1&quot;,
                        &quot;5-20&quot;: &quot;1&quot;,
                        &quot;5-21&quot;: &quot;1&quot;,
                        &quot;5-22&quot;: &quot;1&quot;,
                        &quot;5-23&quot;: &quot;1&quot;,
                        &quot;5-24&quot;: &quot;1&quot;,
                        &quot;5-25&quot;: &quot;1&quot;,
                        &quot;5-26&quot;: &quot;1&quot;,
                        &quot;5-27&quot;: &quot;1&quot;,
                        &quot;5-28&quot;: &quot;1&quot;,
                        &quot;6-2&quot;: &quot;1&quot;,
                        &quot;6-3&quot;: &quot;1&quot;,
                        &quot;6-4&quot;: &quot;1&quot;,
                        &quot;6-5&quot;: &quot;1&quot;,
                        &quot;6-6&quot;: &quot;1&quot;,
                        &quot;6-7&quot;: &quot;1&quot;,
                        &quot;6-8&quot;: &quot;1&quot;,
                        &quot;6-9&quot;: &quot;1&quot;,
                        &quot;6-10&quot;: &quot;1&quot;,
                        &quot;6-11&quot;: &quot;1&quot;,
                        &quot;6-12&quot;: &quot;1&quot;,
                        &quot;6-13&quot;: &quot;1&quot;,
                        &quot;6-14&quot;: &quot;1&quot;,
                        &quot;6-15&quot;: &quot;1&quot;,
                        &quot;6-16&quot;: &quot;1&quot;,
                        &quot;6-17&quot;: &quot;1&quot;,
                        &quot;6-18&quot;: &quot;1&quot;,
                        &quot;6-19&quot;: &quot;1&quot;,
                        &quot;6-20&quot;: &quot;1&quot;,
                        &quot;6-21&quot;: &quot;1&quot;,
                        &quot;6-22&quot;: &quot;1&quot;,
                        &quot;6-23&quot;: &quot;1&quot;,
                        &quot;6-24&quot;: &quot;1&quot;,
                        &quot;6-25&quot;: &quot;1&quot;,
                        &quot;6-26&quot;: &quot;1&quot;,
                        &quot;6-27&quot;: &quot;1&quot;,
                        &quot;6-28&quot;: &quot;1&quot;,
                        &quot;7-2&quot;: &quot;1&quot;,
                        &quot;7-3&quot;: &quot;1&quot;,
                        &quot;7-4&quot;: &quot;1&quot;,
                        &quot;7-5&quot;: &quot;1&quot;,
                        &quot;7-6&quot;: &quot;1&quot;,
                        &quot;7-7&quot;: &quot;1&quot;,
                        &quot;7-8&quot;: &quot;1&quot;,
                        &quot;7-9&quot;: &quot;1&quot;,
                        &quot;7-10&quot;: &quot;1&quot;,
                        &quot;7-11&quot;: &quot;1&quot;,
                        &quot;7-12&quot;: &quot;1&quot;,
                        &quot;7-13&quot;: &quot;1&quot;,
                        &quot;7-14&quot;: &quot;1&quot;,
                        &quot;7-15&quot;: &quot;1&quot;,
                        &quot;7-16&quot;: &quot;1&quot;,
                        &quot;7-17&quot;: &quot;1&quot;,
                        &quot;7-18&quot;: &quot;1&quot;,
                        &quot;7-19&quot;: &quot;1&quot;,
                        &quot;7-20&quot;: &quot;1&quot;,
                        &quot;7-21&quot;: &quot;1&quot;,
                        &quot;7-22&quot;: &quot;1&quot;,
                        &quot;7-23&quot;: &quot;1&quot;,
                        &quot;7-24&quot;: &quot;1&quot;,
                        &quot;7-25&quot;: &quot;1&quot;,
                        &quot;7-26&quot;: &quot;1&quot;,
                        &quot;7-27&quot;: &quot;1&quot;,
                        &quot;7-28&quot;: &quot;1&quot;,
                        &quot;8-2&quot;: &quot;1&quot;,
                        &quot;8-3&quot;: &quot;1&quot;,
                        &quot;8-4&quot;: &quot;1&quot;,
                        &quot;8-5&quot;: &quot;1&quot;,
                        &quot;8-6&quot;: &quot;1&quot;,
                        &quot;8-7&quot;: &quot;1&quot;,
                        &quot;8-8&quot;: &quot;1&quot;,
                        &quot;8-9&quot;: &quot;1&quot;,
                        &quot;8-10&quot;: &quot;1&quot;,
                        &quot;8-11&quot;: &quot;1&quot;,
                        &quot;8-12&quot;: &quot;1&quot;,
                        &quot;8-13&quot;: &quot;1&quot;,
                        &quot;8-14&quot;: &quot;1&quot;,
                        &quot;8-15&quot;: &quot;1&quot;,
                        &quot;8-16&quot;: &quot;1&quot;,
                        &quot;8-17&quot;: &quot;1&quot;,
                        &quot;8-18&quot;: &quot;1&quot;,
                        &quot;8-19&quot;: &quot;1&quot;,
                        &quot;8-20&quot;: &quot;1&quot;,
                        &quot;8-21&quot;: &quot;1&quot;,
                        &quot;8-22&quot;: &quot;1&quot;,
                        &quot;8-23&quot;: &quot;1&quot;,
                        &quot;8-24&quot;: &quot;1&quot;,
                        &quot;8-25&quot;: &quot;1&quot;,
                        &quot;8-26&quot;: &quot;1&quot;,
                        &quot;8-27&quot;: &quot;1&quot;,
                        &quot;8-28&quot;: &quot;1&quot;,
                        &quot;9-2&quot;: &quot;1&quot;,
                        &quot;9-3&quot;: &quot;1&quot;,
                        &quot;9-4&quot;: &quot;1&quot;,
                        &quot;9-5&quot;: &quot;1&quot;,
                        &quot;9-6&quot;: &quot;1&quot;,
                        &quot;9-7&quot;: &quot;1&quot;,
                        &quot;9-8&quot;: &quot;1&quot;,
                        &quot;9-9&quot;: &quot;1&quot;,
                        &quot;9-10&quot;: &quot;1&quot;,
                        &quot;9-11&quot;: &quot;1&quot;,
                        &quot;9-12&quot;: &quot;1&quot;,
                        &quot;9-13&quot;: &quot;1&quot;,
                        &quot;9-14&quot;: &quot;1&quot;,
                        &quot;9-15&quot;: &quot;1&quot;,
                        &quot;9-16&quot;: &quot;1&quot;,
                        &quot;9-17&quot;: &quot;1&quot;,
                        &quot;9-18&quot;: &quot;1&quot;,
                        &quot;9-19&quot;: &quot;1&quot;,
                        &quot;9-20&quot;: &quot;1&quot;,
                        &quot;9-21&quot;: &quot;1&quot;,
                        &quot;9-22&quot;: &quot;1&quot;,
                        &quot;9-23&quot;: &quot;1&quot;,
                        &quot;9-24&quot;: &quot;1&quot;,
                        &quot;9-25&quot;: &quot;1&quot;,
                        &quot;9-26&quot;: &quot;1&quot;,
                        &quot;9-27&quot;: &quot;1&quot;,
                        &quot;9-28&quot;: &quot;1&quot;,
                        &quot;10-2&quot;: &quot;1&quot;,
                        &quot;10-3&quot;: &quot;1&quot;,
                        &quot;10-4&quot;: &quot;1&quot;,
                        &quot;10-5&quot;: &quot;1&quot;,
                        &quot;10-6&quot;: &quot;1&quot;,
                        &quot;10-7&quot;: &quot;1&quot;,
                        &quot;10-8&quot;: &quot;1&quot;,
                        &quot;10-9&quot;: &quot;1&quot;,
                        &quot;10-10&quot;: &quot;1&quot;,
                        &quot;10-11&quot;: &quot;1&quot;,
                        &quot;10-12&quot;: &quot;1&quot;,
                        &quot;10-13&quot;: &quot;1&quot;,
                        &quot;10-14&quot;: &quot;1&quot;,
                        &quot;10-15&quot;: &quot;1&quot;,
                        &quot;10-16&quot;: &quot;1&quot;,
                        &quot;10-17&quot;: &quot;1&quot;,
                        &quot;10-18&quot;: &quot;1&quot;,
                        &quot;10-19&quot;: &quot;1&quot;,
                        &quot;10-20&quot;: &quot;1&quot;,
                        &quot;10-21&quot;: &quot;1&quot;,
                        &quot;10-22&quot;: &quot;1&quot;,
                        &quot;10-23&quot;: &quot;1&quot;,
                        &quot;10-24&quot;: &quot;1&quot;,
                        &quot;10-25&quot;: &quot;1&quot;,
                        &quot;10-26&quot;: &quot;1&quot;,
                        &quot;10-27&quot;: &quot;1&quot;,
                        &quot;10-28&quot;: &quot;1&quot;,
                        &quot;11-2&quot;: &quot;1&quot;,
                        &quot;11-3&quot;: &quot;1&quot;,
                        &quot;11-4&quot;: &quot;1&quot;,
                        &quot;11-5&quot;: &quot;1&quot;,
                        &quot;11-6&quot;: &quot;1&quot;,
                        &quot;11-7&quot;: &quot;1&quot;,
                        &quot;11-8&quot;: &quot;1&quot;,
                        &quot;11-9&quot;: &quot;1&quot;,
                        &quot;11-10&quot;: &quot;1&quot;,
                        &quot;11-11&quot;: &quot;1&quot;,
                        &quot;11-12&quot;: &quot;1&quot;,
                        &quot;11-13&quot;: &quot;1&quot;,
                        &quot;11-14&quot;: &quot;1&quot;,
                        &quot;11-15&quot;: &quot;1&quot;,
                        &quot;11-16&quot;: &quot;1&quot;,
                        &quot;11-17&quot;: &quot;1&quot;,
                        &quot;11-18&quot;: &quot;1&quot;,
                        &quot;11-19&quot;: &quot;1&quot;,
                        &quot;11-20&quot;: &quot;1&quot;,
                        &quot;11-21&quot;: &quot;1&quot;,
                        &quot;11-22&quot;: &quot;1&quot;,
                        &quot;11-23&quot;: &quot;1&quot;,
                        &quot;11-24&quot;: &quot;1&quot;,
                        &quot;11-25&quot;: &quot;1&quot;,
                        &quot;11-26&quot;: &quot;1&quot;,
                        &quot;11-27&quot;: &quot;1&quot;,
                        &quot;11-28&quot;: &quot;1&quot;,
                        &quot;12-2&quot;: &quot;1&quot;,
                        &quot;12-3&quot;: &quot;1&quot;,
                        &quot;12-4&quot;: &quot;1&quot;,
                        &quot;12-5&quot;: &quot;1&quot;,
                        &quot;12-6&quot;: &quot;1&quot;,
                        &quot;12-7&quot;: &quot;1&quot;,
                        &quot;12-8&quot;: &quot;1&quot;,
                        &quot;12-9&quot;: &quot;1&quot;,
                        &quot;12-10&quot;: &quot;1&quot;,
                        &quot;12-11&quot;: &quot;1&quot;,
                        &quot;12-12&quot;: &quot;1&quot;,
                        &quot;12-13&quot;: &quot;1&quot;,
                        &quot;12-14&quot;: &quot;1&quot;,
                        &quot;12-15&quot;: &quot;1&quot;,
                        &quot;12-16&quot;: &quot;1&quot;,
                        &quot;12-17&quot;: &quot;1&quot;,
                        &quot;12-18&quot;: &quot;1&quot;,
                        &quot;12-19&quot;: &quot;1&quot;,
                        &quot;12-20&quot;: &quot;1&quot;,
                        &quot;12-21&quot;: &quot;1&quot;,
                        &quot;12-22&quot;: &quot;1&quot;,
                        &quot;12-23&quot;: &quot;1&quot;,
                        &quot;12-24&quot;: &quot;1&quot;,
                        &quot;12-25&quot;: &quot;1&quot;,
                        &quot;12-26&quot;: &quot;1&quot;,
                        &quot;12-27&quot;: &quot;1&quot;,
                        &quot;12-28&quot;: &quot;1&quot;,
                        &quot;13-2&quot;: &quot;1&quot;,
                        &quot;13-3&quot;: &quot;1&quot;,
                        &quot;13-4&quot;: &quot;1&quot;,
                        &quot;13-5&quot;: &quot;1&quot;,
                        &quot;13-6&quot;: &quot;1&quot;,
                        &quot;13-7&quot;: &quot;1&quot;,
                        &quot;13-8&quot;: &quot;1&quot;,
                        &quot;13-9&quot;: &quot;1&quot;,
                        &quot;13-10&quot;: &quot;1&quot;,
                        &quot;13-11&quot;: &quot;1&quot;,
                        &quot;13-12&quot;: &quot;1&quot;,
                        &quot;13-13&quot;: &quot;1&quot;,
                        &quot;13-14&quot;: &quot;1&quot;,
                        &quot;13-15&quot;: &quot;1&quot;,
                        &quot;13-16&quot;: &quot;1&quot;,
                        &quot;13-17&quot;: &quot;1&quot;,
                        &quot;13-18&quot;: &quot;1&quot;,
                        &quot;13-19&quot;: &quot;1&quot;,
                        &quot;13-20&quot;: &quot;1&quot;,
                        &quot;13-21&quot;: &quot;1&quot;,
                        &quot;13-22&quot;: &quot;1&quot;,
                        &quot;13-23&quot;: &quot;1&quot;,
                        &quot;13-24&quot;: &quot;1&quot;,
                        &quot;13-25&quot;: &quot;1&quot;,
                        &quot;13-26&quot;: &quot;1&quot;,
                        &quot;13-27&quot;: &quot;1&quot;,
                        &quot;13-28&quot;: &quot;1&quot;,
                        &quot;14-2&quot;: &quot;1&quot;,
                        &quot;14-3&quot;: &quot;1&quot;,
                        &quot;14-4&quot;: &quot;1&quot;,
                        &quot;14-5&quot;: &quot;1&quot;,
                        &quot;14-6&quot;: &quot;1&quot;,
                        &quot;14-7&quot;: &quot;1&quot;,
                        &quot;14-8&quot;: &quot;1&quot;,
                        &quot;14-9&quot;: &quot;1&quot;,
                        &quot;14-10&quot;: &quot;1&quot;,
                        &quot;14-11&quot;: &quot;1&quot;,
                        &quot;14-12&quot;: &quot;1&quot;,
                        &quot;14-13&quot;: &quot;1&quot;,
                        &quot;14-14&quot;: &quot;1&quot;,
                        &quot;14-15&quot;: &quot;1&quot;,
                        &quot;14-16&quot;: &quot;1&quot;,
                        &quot;14-17&quot;: &quot;1&quot;,
                        &quot;14-18&quot;: &quot;1&quot;,
                        &quot;14-19&quot;: &quot;1&quot;,
                        &quot;14-20&quot;: &quot;1&quot;,
                        &quot;14-21&quot;: &quot;1&quot;,
                        &quot;14-22&quot;: &quot;1&quot;,
                        &quot;14-23&quot;: &quot;1&quot;,
                        &quot;14-24&quot;: &quot;1&quot;,
                        &quot;14-25&quot;: &quot;1&quot;,
                        &quot;14-26&quot;: &quot;1&quot;,
                        &quot;14-27&quot;: &quot;1&quot;,
                        &quot;14-28&quot;: &quot;1&quot;,
                        &quot;15-2&quot;: &quot;1&quot;,
                        &quot;15-3&quot;: &quot;1&quot;,
                        &quot;15-4&quot;: &quot;1&quot;,
                        &quot;15-5&quot;: &quot;1&quot;,
                        &quot;15-6&quot;: &quot;1&quot;,
                        &quot;15-7&quot;: &quot;1&quot;,
                        &quot;15-8&quot;: &quot;1&quot;,
                        &quot;15-9&quot;: &quot;1&quot;,
                        &quot;15-10&quot;: &quot;1&quot;,
                        &quot;15-11&quot;: &quot;1&quot;,
                        &quot;15-12&quot;: &quot;1&quot;,
                        &quot;15-13&quot;: &quot;1&quot;,
                        &quot;15-14&quot;: &quot;1&quot;,
                        &quot;15-15&quot;: &quot;1&quot;,
                        &quot;15-16&quot;: &quot;1&quot;,
                        &quot;15-17&quot;: &quot;1&quot;,
                        &quot;15-18&quot;: &quot;1&quot;,
                        &quot;15-19&quot;: &quot;1&quot;,
                        &quot;15-20&quot;: &quot;1&quot;,
                        &quot;15-21&quot;: &quot;1&quot;,
                        &quot;15-22&quot;: &quot;1&quot;,
                        &quot;15-23&quot;: &quot;1&quot;,
                        &quot;15-24&quot;: &quot;1&quot;,
                        &quot;15-25&quot;: &quot;1&quot;,
                        &quot;15-26&quot;: &quot;1&quot;,
                        &quot;15-27&quot;: &quot;1&quot;,
                        &quot;15-28&quot;: &quot;1&quot;,
                        &quot;16-2&quot;: &quot;1&quot;,
                        &quot;16-3&quot;: &quot;1&quot;,
                        &quot;16-4&quot;: &quot;1&quot;,
                        &quot;16-5&quot;: &quot;1&quot;,
                        &quot;16-6&quot;: &quot;1&quot;,
                        &quot;16-7&quot;: &quot;1&quot;,
                        &quot;16-8&quot;: &quot;1&quot;,
                        &quot;16-9&quot;: &quot;1&quot;,
                        &quot;16-10&quot;: &quot;1&quot;,
                        &quot;16-11&quot;: &quot;1&quot;,
                        &quot;16-12&quot;: &quot;1&quot;,
                        &quot;16-13&quot;: &quot;1&quot;,
                        &quot;16-14&quot;: &quot;1&quot;,
                        &quot;16-15&quot;: &quot;1&quot;,
                        &quot;16-16&quot;: &quot;1&quot;,
                        &quot;16-17&quot;: &quot;1&quot;,
                        &quot;16-18&quot;: &quot;1&quot;,
                        &quot;16-19&quot;: &quot;1&quot;,
                        &quot;16-20&quot;: &quot;1&quot;,
                        &quot;16-21&quot;: &quot;1&quot;,
                        &quot;16-22&quot;: &quot;1&quot;,
                        &quot;16-23&quot;: &quot;1&quot;,
                        &quot;16-24&quot;: &quot;1&quot;,
                        &quot;16-25&quot;: &quot;1&quot;,
                        &quot;16-26&quot;: &quot;1&quot;,
                        &quot;16-27&quot;: &quot;1&quot;,
                        &quot;16-28&quot;: &quot;1&quot;,
                        &quot;17-2&quot;: &quot;1&quot;,
                        &quot;17-3&quot;: &quot;1&quot;,
                        &quot;17-4&quot;: &quot;1&quot;,
                        &quot;17-5&quot;: &quot;1&quot;,
                        &quot;17-6&quot;: &quot;1&quot;,
                        &quot;17-7&quot;: &quot;1&quot;,
                        &quot;17-8&quot;: &quot;1&quot;,
                        &quot;17-9&quot;: &quot;1&quot;,
                        &quot;17-10&quot;: &quot;1&quot;,
                        &quot;17-11&quot;: &quot;1&quot;,
                        &quot;17-12&quot;: &quot;1&quot;,
                        &quot;17-13&quot;: &quot;1&quot;,
                        &quot;17-14&quot;: &quot;1&quot;,
                        &quot;17-15&quot;: &quot;1&quot;,
                        &quot;17-16&quot;: &quot;1&quot;,
                        &quot;17-17&quot;: &quot;1&quot;,
                        &quot;17-18&quot;: &quot;1&quot;,
                        &quot;17-19&quot;: &quot;1&quot;,
                        &quot;17-20&quot;: &quot;1&quot;,
                        &quot;17-21&quot;: &quot;1&quot;,
                        &quot;17-22&quot;: &quot;1&quot;,
                        &quot;17-23&quot;: &quot;1&quot;,
                        &quot;17-24&quot;: &quot;1&quot;,
                        &quot;17-25&quot;: &quot;1&quot;,
                        &quot;17-26&quot;: &quot;1&quot;,
                        &quot;17-27&quot;: &quot;1&quot;,
                        &quot;17-28&quot;: &quot;1&quot;,
                        &quot;18-2&quot;: &quot;1&quot;,
                        &quot;18-3&quot;: &quot;1&quot;,
                        &quot;18-4&quot;: &quot;1&quot;,
                        &quot;18-5&quot;: &quot;1&quot;,
                        &quot;18-6&quot;: &quot;1&quot;,
                        &quot;18-7&quot;: &quot;1&quot;,
                        &quot;18-8&quot;: &quot;1&quot;,
                        &quot;18-9&quot;: &quot;1&quot;,
                        &quot;18-10&quot;: &quot;1&quot;,
                        &quot;18-11&quot;: &quot;1&quot;,
                        &quot;18-12&quot;: &quot;1&quot;,
                        &quot;18-13&quot;: &quot;1&quot;,
                        &quot;18-14&quot;: &quot;1&quot;,
                        &quot;18-15&quot;: &quot;1&quot;,
                        &quot;18-16&quot;: &quot;1&quot;,
                        &quot;18-17&quot;: &quot;1&quot;,
                        &quot;18-18&quot;: &quot;1&quot;,
                        &quot;18-19&quot;: &quot;1&quot;,
                        &quot;18-20&quot;: &quot;1&quot;,
                        &quot;18-21&quot;: &quot;1&quot;,
                        &quot;18-22&quot;: &quot;1&quot;,
                        &quot;18-23&quot;: &quot;1&quot;,
                        &quot;18-24&quot;: &quot;1&quot;,
                        &quot;18-25&quot;: &quot;1&quot;,
                        &quot;18-26&quot;: &quot;1&quot;,
                        &quot;18-27&quot;: &quot;1&quot;,
                        &quot;18-28&quot;: &quot;1&quot;
                    },
                    &quot;walls_data&quot;: {
                        &quot;wallColor&quot;: &quot;#666666&quot;,
                        &quot;2-2&quot;: &quot;#666666&quot;,
                        &quot;2-3&quot;: &quot;#666666&quot;,
                        &quot;2-4&quot;: &quot;#666666&quot;,
                        &quot;2-5&quot;: &quot;#666666&quot;,
                        &quot;2-6&quot;: &quot;#666666&quot;,
                        &quot;2-7&quot;: &quot;#666666&quot;,
                        &quot;2-8&quot;: &quot;#666666&quot;,
                        &quot;2-9&quot;: &quot;#666666&quot;,
                        &quot;2-10&quot;: &quot;#666666&quot;,
                        &quot;2-11&quot;: &quot;#666666&quot;,
                        &quot;2-12&quot;: &quot;#666666&quot;,
                        &quot;2-13&quot;: &quot;#666666&quot;,
                        &quot;2-14&quot;: &quot;#666666&quot;,
                        &quot;2-15&quot;: &quot;#666666&quot;,
                        &quot;2-16&quot;: &quot;#666666&quot;,
                        &quot;2-17&quot;: &quot;#666666&quot;,
                        &quot;2-18&quot;: &quot;#666666&quot;,
                        &quot;2-19&quot;: &quot;#666666&quot;,
                        &quot;2-20&quot;: &quot;#666666&quot;,
                        &quot;2-21&quot;: &quot;#666666&quot;,
                        &quot;2-22&quot;: &quot;#666666&quot;,
                        &quot;2-23&quot;: &quot;#666666&quot;,
                        &quot;2-24&quot;: &quot;#666666&quot;,
                        &quot;2-25&quot;: &quot;#666666&quot;,
                        &quot;2-26&quot;: &quot;#666666&quot;,
                        &quot;2-27&quot;: &quot;#666666&quot;,
                        &quot;2-28&quot;: &quot;#666666&quot;,
                        &quot;3-2&quot;: &quot;#666666&quot;,
                        &quot;3-3&quot;: &quot;#666666&quot;,
                        &quot;3-4&quot;: &quot;#666666&quot;,
                        &quot;3-5&quot;: &quot;#666666&quot;,
                        &quot;3-6&quot;: &quot;#666666&quot;,
                        &quot;3-7&quot;: &quot;#666666&quot;,
                        &quot;3-8&quot;: &quot;#666666&quot;,
                        &quot;3-9&quot;: &quot;#666666&quot;,
                        &quot;3-10&quot;: &quot;#666666&quot;,
                        &quot;3-11&quot;: &quot;#666666&quot;,
                        &quot;3-12&quot;: &quot;#666666&quot;,
                        &quot;3-13&quot;: &quot;#666666&quot;,
                        &quot;3-14&quot;: &quot;#666666&quot;,
                        &quot;3-15&quot;: &quot;#666666&quot;,
                        &quot;3-16&quot;: &quot;#666666&quot;,
                        &quot;3-17&quot;: &quot;#666666&quot;,
                        &quot;3-18&quot;: &quot;#666666&quot;,
                        &quot;3-19&quot;: &quot;#666666&quot;,
                        &quot;3-20&quot;: &quot;#666666&quot;,
                        &quot;3-21&quot;: &quot;#666666&quot;,
                        &quot;3-22&quot;: &quot;#666666&quot;,
                        &quot;3-23&quot;: &quot;#666666&quot;,
                        &quot;3-24&quot;: &quot;#666666&quot;,
                        &quot;3-25&quot;: &quot;#666666&quot;,
                        &quot;3-26&quot;: &quot;#666666&quot;,
                        &quot;3-27&quot;: &quot;#666666&quot;,
                        &quot;3-28&quot;: &quot;#666666&quot;,
                        &quot;4-2&quot;: &quot;#666666&quot;,
                        &quot;4-3&quot;: &quot;#666666&quot;,
                        &quot;4-4&quot;: &quot;#666666&quot;,
                        &quot;4-5&quot;: &quot;#666666&quot;,
                        &quot;4-6&quot;: &quot;#666666&quot;,
                        &quot;4-7&quot;: &quot;#666666&quot;,
                        &quot;4-8&quot;: &quot;#666666&quot;,
                        &quot;4-9&quot;: &quot;#666666&quot;,
                        &quot;4-10&quot;: &quot;#666666&quot;,
                        &quot;4-11&quot;: &quot;#666666&quot;,
                        &quot;4-12&quot;: &quot;#666666&quot;,
                        &quot;4-13&quot;: &quot;#666666&quot;,
                        &quot;4-14&quot;: &quot;#666666&quot;,
                        &quot;4-15&quot;: &quot;#666666&quot;,
                        &quot;4-16&quot;: &quot;#666666&quot;,
                        &quot;4-17&quot;: &quot;#666666&quot;,
                        &quot;4-18&quot;: &quot;#666666&quot;,
                        &quot;4-19&quot;: &quot;#666666&quot;,
                        &quot;4-20&quot;: &quot;#666666&quot;,
                        &quot;4-21&quot;: &quot;#666666&quot;,
                        &quot;4-22&quot;: &quot;#666666&quot;,
                        &quot;4-23&quot;: &quot;#666666&quot;,
                        &quot;4-24&quot;: &quot;#666666&quot;,
                        &quot;4-25&quot;: &quot;#666666&quot;,
                        &quot;4-26&quot;: &quot;#666666&quot;,
                        &quot;4-27&quot;: &quot;#666666&quot;,
                        &quot;4-28&quot;: &quot;#666666&quot;,
                        &quot;5-2&quot;: &quot;#666666&quot;,
                        &quot;5-3&quot;: &quot;#666666&quot;,
                        &quot;5-4&quot;: &quot;#666666&quot;,
                        &quot;5-5&quot;: &quot;#666666&quot;,
                        &quot;5-6&quot;: &quot;#666666&quot;,
                        &quot;5-7&quot;: &quot;#666666&quot;,
                        &quot;5-8&quot;: &quot;#666666&quot;,
                        &quot;5-9&quot;: &quot;#666666&quot;,
                        &quot;5-10&quot;: &quot;#666666&quot;,
                        &quot;5-11&quot;: &quot;#666666&quot;,
                        &quot;5-12&quot;: &quot;#666666&quot;,
                        &quot;5-13&quot;: &quot;#666666&quot;,
                        &quot;5-14&quot;: &quot;#666666&quot;,
                        &quot;5-15&quot;: &quot;#666666&quot;,
                        &quot;5-16&quot;: &quot;#666666&quot;,
                        &quot;5-17&quot;: &quot;#666666&quot;,
                        &quot;5-18&quot;: &quot;#666666&quot;,
                        &quot;5-19&quot;: &quot;#666666&quot;,
                        &quot;5-20&quot;: &quot;#666666&quot;,
                        &quot;5-21&quot;: &quot;#666666&quot;,
                        &quot;5-22&quot;: &quot;#666666&quot;,
                        &quot;5-23&quot;: &quot;#666666&quot;,
                        &quot;5-24&quot;: &quot;#666666&quot;,
                        &quot;5-25&quot;: &quot;#666666&quot;,
                        &quot;5-26&quot;: &quot;#666666&quot;,
                        &quot;5-27&quot;: &quot;#666666&quot;,
                        &quot;5-28&quot;: &quot;#666666&quot;,
                        &quot;6-2&quot;: &quot;#666666&quot;,
                        &quot;6-3&quot;: &quot;#666666&quot;,
                        &quot;6-4&quot;: &quot;#666666&quot;,
                        &quot;6-5&quot;: &quot;#666666&quot;,
                        &quot;6-6&quot;: &quot;#666666&quot;,
                        &quot;6-7&quot;: &quot;#666666&quot;,
                        &quot;6-8&quot;: &quot;#666666&quot;,
                        &quot;6-9&quot;: &quot;#666666&quot;,
                        &quot;6-10&quot;: &quot;#666666&quot;,
                        &quot;6-11&quot;: &quot;#666666&quot;,
                        &quot;6-12&quot;: &quot;#666666&quot;,
                        &quot;6-13&quot;: &quot;#666666&quot;,
                        &quot;6-14&quot;: &quot;#666666&quot;,
                        &quot;6-15&quot;: &quot;#666666&quot;,
                        &quot;6-16&quot;: &quot;#666666&quot;,
                        &quot;6-17&quot;: &quot;#666666&quot;,
                        &quot;6-18&quot;: &quot;#666666&quot;,
                        &quot;6-19&quot;: &quot;#666666&quot;,
                        &quot;6-20&quot;: &quot;#666666&quot;,
                        &quot;6-21&quot;: &quot;#666666&quot;,
                        &quot;6-22&quot;: &quot;#666666&quot;,
                        &quot;6-23&quot;: &quot;#666666&quot;,
                        &quot;6-24&quot;: &quot;#666666&quot;,
                        &quot;6-25&quot;: &quot;#666666&quot;,
                        &quot;6-26&quot;: &quot;#666666&quot;,
                        &quot;6-27&quot;: &quot;#666666&quot;,
                        &quot;6-28&quot;: &quot;#666666&quot;,
                        &quot;7-2&quot;: &quot;#666666&quot;,
                        &quot;7-3&quot;: &quot;#666666&quot;,
                        &quot;7-4&quot;: &quot;#666666&quot;,
                        &quot;7-5&quot;: &quot;#666666&quot;,
                        &quot;7-6&quot;: &quot;#666666&quot;,
                        &quot;7-7&quot;: &quot;#666666&quot;,
                        &quot;7-8&quot;: &quot;#666666&quot;,
                        &quot;7-9&quot;: &quot;#666666&quot;,
                        &quot;7-10&quot;: &quot;#666666&quot;,
                        &quot;7-11&quot;: &quot;#666666&quot;,
                        &quot;7-12&quot;: &quot;#666666&quot;,
                        &quot;7-13&quot;: &quot;#666666&quot;,
                        &quot;7-14&quot;: &quot;#666666&quot;,
                        &quot;7-15&quot;: &quot;#666666&quot;,
                        &quot;7-16&quot;: &quot;#666666&quot;,
                        &quot;7-17&quot;: &quot;#666666&quot;,
                        &quot;7-18&quot;: &quot;#666666&quot;,
                        &quot;7-19&quot;: &quot;#666666&quot;,
                        &quot;7-20&quot;: &quot;#666666&quot;,
                        &quot;7-21&quot;: &quot;#666666&quot;,
                        &quot;7-22&quot;: &quot;#666666&quot;,
                        &quot;7-23&quot;: &quot;#666666&quot;,
                        &quot;7-24&quot;: &quot;#666666&quot;,
                        &quot;7-25&quot;: &quot;#666666&quot;,
                        &quot;7-26&quot;: &quot;#666666&quot;,
                        &quot;7-27&quot;: &quot;#666666&quot;,
                        &quot;7-28&quot;: &quot;#666666&quot;,
                        &quot;8-2&quot;: &quot;#666666&quot;,
                        &quot;8-3&quot;: &quot;#666666&quot;,
                        &quot;8-4&quot;: &quot;#666666&quot;,
                        &quot;8-5&quot;: &quot;#666666&quot;,
                        &quot;8-6&quot;: &quot;#666666&quot;,
                        &quot;8-7&quot;: &quot;#666666&quot;,
                        &quot;8-8&quot;: &quot;#666666&quot;,
                        &quot;8-9&quot;: &quot;#666666&quot;,
                        &quot;8-10&quot;: &quot;#666666&quot;,
                        &quot;8-11&quot;: &quot;#666666&quot;,
                        &quot;8-12&quot;: &quot;#666666&quot;,
                        &quot;8-13&quot;: &quot;#666666&quot;,
                        &quot;8-14&quot;: &quot;#666666&quot;,
                        &quot;8-15&quot;: &quot;#666666&quot;,
                        &quot;8-16&quot;: &quot;#666666&quot;,
                        &quot;8-17&quot;: &quot;#666666&quot;,
                        &quot;8-18&quot;: &quot;#666666&quot;,
                        &quot;8-19&quot;: &quot;#666666&quot;,
                        &quot;8-20&quot;: &quot;#666666&quot;,
                        &quot;8-21&quot;: &quot;#666666&quot;,
                        &quot;8-22&quot;: &quot;#666666&quot;,
                        &quot;8-23&quot;: &quot;#666666&quot;,
                        &quot;8-24&quot;: &quot;#666666&quot;,
                        &quot;8-25&quot;: &quot;#666666&quot;,
                        &quot;8-26&quot;: &quot;#666666&quot;,
                        &quot;8-27&quot;: &quot;#666666&quot;,
                        &quot;8-28&quot;: &quot;#666666&quot;,
                        &quot;9-2&quot;: &quot;#666666&quot;,
                        &quot;9-3&quot;: &quot;#666666&quot;,
                        &quot;9-4&quot;: &quot;#666666&quot;,
                        &quot;9-5&quot;: &quot;#666666&quot;,
                        &quot;9-6&quot;: &quot;#666666&quot;,
                        &quot;9-7&quot;: &quot;#666666&quot;,
                        &quot;9-8&quot;: &quot;#666666&quot;,
                        &quot;9-9&quot;: &quot;#666666&quot;,
                        &quot;9-10&quot;: &quot;#666666&quot;,
                        &quot;9-11&quot;: &quot;#666666&quot;,
                        &quot;9-12&quot;: &quot;#666666&quot;,
                        &quot;9-13&quot;: &quot;#666666&quot;,
                        &quot;9-14&quot;: &quot;#666666&quot;,
                        &quot;9-15&quot;: &quot;#666666&quot;,
                        &quot;9-16&quot;: &quot;#666666&quot;,
                        &quot;9-17&quot;: &quot;#666666&quot;,
                        &quot;9-18&quot;: &quot;#666666&quot;,
                        &quot;9-19&quot;: &quot;#666666&quot;,
                        &quot;9-20&quot;: &quot;#666666&quot;,
                        &quot;9-21&quot;: &quot;#666666&quot;,
                        &quot;9-22&quot;: &quot;#666666&quot;,
                        &quot;9-23&quot;: &quot;#666666&quot;,
                        &quot;9-24&quot;: &quot;#666666&quot;,
                        &quot;9-25&quot;: &quot;#666666&quot;,
                        &quot;9-26&quot;: &quot;#666666&quot;,
                        &quot;9-27&quot;: &quot;#666666&quot;,
                        &quot;9-28&quot;: &quot;#666666&quot;,
                        &quot;10-2&quot;: &quot;#666666&quot;,
                        &quot;10-3&quot;: &quot;#666666&quot;,
                        &quot;10-4&quot;: &quot;#666666&quot;,
                        &quot;10-5&quot;: &quot;#666666&quot;,
                        &quot;10-6&quot;: &quot;#666666&quot;,
                        &quot;10-7&quot;: &quot;#666666&quot;,
                        &quot;10-8&quot;: &quot;#666666&quot;,
                        &quot;10-9&quot;: &quot;#666666&quot;,
                        &quot;10-10&quot;: &quot;#666666&quot;,
                        &quot;10-11&quot;: &quot;#666666&quot;,
                        &quot;10-12&quot;: &quot;#666666&quot;,
                        &quot;10-13&quot;: &quot;#666666&quot;,
                        &quot;10-14&quot;: &quot;#666666&quot;,
                        &quot;10-15&quot;: &quot;#666666&quot;,
                        &quot;10-16&quot;: &quot;#666666&quot;,
                        &quot;10-17&quot;: &quot;#666666&quot;,
                        &quot;10-18&quot;: &quot;#666666&quot;,
                        &quot;10-19&quot;: &quot;#666666&quot;,
                        &quot;10-20&quot;: &quot;#666666&quot;,
                        &quot;10-21&quot;: &quot;#666666&quot;,
                        &quot;10-22&quot;: &quot;#666666&quot;,
                        &quot;10-23&quot;: &quot;#666666&quot;,
                        &quot;10-24&quot;: &quot;#666666&quot;,
                        &quot;10-25&quot;: &quot;#666666&quot;,
                        &quot;10-26&quot;: &quot;#666666&quot;,
                        &quot;10-27&quot;: &quot;#666666&quot;,
                        &quot;10-28&quot;: &quot;#666666&quot;,
                        &quot;11-2&quot;: &quot;#666666&quot;,
                        &quot;11-3&quot;: &quot;#666666&quot;,
                        &quot;11-4&quot;: &quot;#666666&quot;,
                        &quot;11-5&quot;: &quot;#666666&quot;,
                        &quot;11-6&quot;: &quot;#666666&quot;,
                        &quot;11-7&quot;: &quot;#666666&quot;,
                        &quot;11-8&quot;: &quot;#666666&quot;,
                        &quot;11-9&quot;: &quot;#666666&quot;,
                        &quot;11-10&quot;: &quot;#666666&quot;,
                        &quot;11-11&quot;: &quot;#666666&quot;,
                        &quot;11-12&quot;: &quot;#666666&quot;,
                        &quot;11-13&quot;: &quot;#666666&quot;,
                        &quot;11-14&quot;: &quot;#666666&quot;,
                        &quot;11-15&quot;: &quot;#666666&quot;,
                        &quot;11-16&quot;: &quot;#666666&quot;,
                        &quot;11-17&quot;: &quot;#666666&quot;,
                        &quot;11-18&quot;: &quot;#666666&quot;,
                        &quot;11-19&quot;: &quot;#666666&quot;,
                        &quot;11-20&quot;: &quot;#666666&quot;,
                        &quot;11-21&quot;: &quot;#666666&quot;,
                        &quot;11-22&quot;: &quot;#666666&quot;,
                        &quot;11-23&quot;: &quot;#666666&quot;,
                        &quot;11-24&quot;: &quot;#666666&quot;,
                        &quot;11-25&quot;: &quot;#666666&quot;,
                        &quot;11-26&quot;: &quot;#666666&quot;,
                        &quot;11-27&quot;: &quot;#666666&quot;,
                        &quot;11-28&quot;: &quot;#666666&quot;,
                        &quot;12-2&quot;: &quot;#666666&quot;,
                        &quot;12-3&quot;: &quot;#666666&quot;,
                        &quot;12-4&quot;: &quot;#666666&quot;,
                        &quot;12-5&quot;: &quot;#666666&quot;,
                        &quot;12-6&quot;: &quot;#666666&quot;,
                        &quot;12-7&quot;: &quot;#666666&quot;,
                        &quot;12-8&quot;: &quot;#666666&quot;,
                        &quot;12-9&quot;: &quot;#666666&quot;,
                        &quot;12-10&quot;: &quot;#666666&quot;,
                        &quot;12-11&quot;: &quot;#666666&quot;,
                        &quot;12-12&quot;: &quot;#666666&quot;,
                        &quot;12-13&quot;: &quot;#666666&quot;,
                        &quot;12-14&quot;: &quot;#666666&quot;,
                        &quot;12-15&quot;: &quot;#666666&quot;,
                        &quot;12-16&quot;: &quot;#666666&quot;,
                        &quot;12-17&quot;: &quot;#666666&quot;,
                        &quot;12-18&quot;: &quot;#666666&quot;,
                        &quot;12-19&quot;: &quot;#666666&quot;,
                        &quot;12-20&quot;: &quot;#666666&quot;,
                        &quot;12-21&quot;: &quot;#666666&quot;,
                        &quot;12-22&quot;: &quot;#666666&quot;,
                        &quot;12-23&quot;: &quot;#666666&quot;,
                        &quot;12-24&quot;: &quot;#666666&quot;,
                        &quot;12-25&quot;: &quot;#666666&quot;,
                        &quot;12-26&quot;: &quot;#666666&quot;,
                        &quot;12-27&quot;: &quot;#666666&quot;,
                        &quot;12-28&quot;: &quot;#666666&quot;,
                        &quot;13-2&quot;: &quot;#666666&quot;,
                        &quot;13-3&quot;: &quot;#666666&quot;,
                        &quot;13-4&quot;: &quot;#666666&quot;,
                        &quot;13-5&quot;: &quot;#666666&quot;,
                        &quot;13-6&quot;: &quot;#666666&quot;,
                        &quot;13-7&quot;: &quot;#666666&quot;,
                        &quot;13-8&quot;: &quot;#666666&quot;,
                        &quot;13-9&quot;: &quot;#666666&quot;,
                        &quot;13-10&quot;: &quot;#666666&quot;,
                        &quot;13-11&quot;: &quot;#666666&quot;,
                        &quot;13-12&quot;: &quot;#666666&quot;,
                        &quot;13-13&quot;: &quot;#666666&quot;,
                        &quot;13-14&quot;: &quot;#666666&quot;,
                        &quot;13-15&quot;: &quot;#666666&quot;,
                        &quot;13-16&quot;: &quot;#666666&quot;,
                        &quot;13-17&quot;: &quot;#666666&quot;,
                        &quot;13-18&quot;: &quot;#666666&quot;,
                        &quot;13-19&quot;: &quot;#666666&quot;,
                        &quot;13-20&quot;: &quot;#666666&quot;,
                        &quot;13-21&quot;: &quot;#666666&quot;,
                        &quot;13-22&quot;: &quot;#666666&quot;,
                        &quot;13-23&quot;: &quot;#666666&quot;,
                        &quot;13-24&quot;: &quot;#666666&quot;,
                        &quot;13-25&quot;: &quot;#666666&quot;,
                        &quot;13-26&quot;: &quot;#666666&quot;,
                        &quot;13-27&quot;: &quot;#666666&quot;,
                        &quot;13-28&quot;: &quot;#666666&quot;,
                        &quot;14-2&quot;: &quot;#666666&quot;,
                        &quot;14-3&quot;: &quot;#666666&quot;,
                        &quot;14-4&quot;: &quot;#666666&quot;,
                        &quot;14-5&quot;: &quot;#666666&quot;,
                        &quot;14-6&quot;: &quot;#666666&quot;,
                        &quot;14-7&quot;: &quot;#666666&quot;,
                        &quot;14-8&quot;: &quot;#666666&quot;,
                        &quot;14-9&quot;: &quot;#666666&quot;,
                        &quot;14-10&quot;: &quot;#666666&quot;,
                        &quot;14-11&quot;: &quot;#666666&quot;,
                        &quot;14-12&quot;: &quot;#666666&quot;,
                        &quot;14-13&quot;: &quot;#666666&quot;,
                        &quot;14-14&quot;: &quot;#666666&quot;,
                        &quot;14-15&quot;: &quot;#666666&quot;,
                        &quot;14-16&quot;: &quot;#666666&quot;,
                        &quot;14-17&quot;: &quot;#666666&quot;,
                        &quot;14-18&quot;: &quot;#666666&quot;,
                        &quot;14-19&quot;: &quot;#666666&quot;,
                        &quot;14-20&quot;: &quot;#666666&quot;,
                        &quot;14-21&quot;: &quot;#666666&quot;,
                        &quot;14-22&quot;: &quot;#666666&quot;,
                        &quot;14-23&quot;: &quot;#666666&quot;,
                        &quot;14-24&quot;: &quot;#666666&quot;,
                        &quot;14-25&quot;: &quot;#666666&quot;,
                        &quot;14-26&quot;: &quot;#666666&quot;,
                        &quot;14-27&quot;: &quot;#666666&quot;,
                        &quot;14-28&quot;: &quot;#666666&quot;,
                        &quot;15-2&quot;: &quot;#666666&quot;,
                        &quot;15-3&quot;: &quot;#666666&quot;,
                        &quot;15-4&quot;: &quot;#666666&quot;,
                        &quot;15-5&quot;: &quot;#666666&quot;,
                        &quot;15-6&quot;: &quot;#666666&quot;,
                        &quot;15-7&quot;: &quot;#666666&quot;,
                        &quot;15-8&quot;: &quot;#666666&quot;,
                        &quot;15-9&quot;: &quot;#666666&quot;,
                        &quot;15-10&quot;: &quot;#666666&quot;,
                        &quot;15-11&quot;: &quot;#666666&quot;,
                        &quot;15-12&quot;: &quot;#666666&quot;,
                        &quot;15-13&quot;: &quot;#666666&quot;,
                        &quot;15-14&quot;: &quot;#666666&quot;,
                        &quot;15-15&quot;: &quot;#666666&quot;,
                        &quot;15-16&quot;: &quot;#666666&quot;,
                        &quot;15-17&quot;: &quot;#666666&quot;,
                        &quot;15-18&quot;: &quot;#666666&quot;,
                        &quot;15-19&quot;: &quot;#666666&quot;,
                        &quot;15-20&quot;: &quot;#666666&quot;,
                        &quot;15-21&quot;: &quot;#666666&quot;,
                        &quot;15-22&quot;: &quot;#666666&quot;,
                        &quot;15-23&quot;: &quot;#666666&quot;,
                        &quot;15-24&quot;: &quot;#666666&quot;,
                        &quot;15-25&quot;: &quot;#666666&quot;,
                        &quot;15-26&quot;: &quot;#666666&quot;,
                        &quot;15-27&quot;: &quot;#666666&quot;,
                        &quot;15-28&quot;: &quot;#666666&quot;,
                        &quot;16-2&quot;: &quot;#666666&quot;,
                        &quot;16-3&quot;: &quot;#666666&quot;,
                        &quot;16-4&quot;: &quot;#666666&quot;,
                        &quot;16-5&quot;: &quot;#666666&quot;,
                        &quot;16-6&quot;: &quot;#666666&quot;,
                        &quot;16-7&quot;: &quot;#666666&quot;,
                        &quot;16-8&quot;: &quot;#666666&quot;,
                        &quot;16-9&quot;: &quot;#666666&quot;,
                        &quot;16-10&quot;: &quot;#666666&quot;,
                        &quot;16-11&quot;: &quot;#666666&quot;,
                        &quot;16-12&quot;: &quot;#666666&quot;,
                        &quot;16-13&quot;: &quot;#666666&quot;,
                        &quot;16-14&quot;: &quot;#666666&quot;,
                        &quot;16-15&quot;: &quot;#666666&quot;,
                        &quot;16-16&quot;: &quot;#666666&quot;,
                        &quot;16-17&quot;: &quot;#666666&quot;,
                        &quot;16-18&quot;: &quot;#666666&quot;,
                        &quot;16-19&quot;: &quot;#666666&quot;,
                        &quot;16-20&quot;: &quot;#666666&quot;,
                        &quot;16-21&quot;: &quot;#666666&quot;,
                        &quot;16-22&quot;: &quot;#666666&quot;,
                        &quot;16-23&quot;: &quot;#666666&quot;,
                        &quot;16-24&quot;: &quot;#666666&quot;,
                        &quot;16-25&quot;: &quot;#666666&quot;,
                        &quot;16-26&quot;: &quot;#666666&quot;,
                        &quot;16-27&quot;: &quot;#666666&quot;,
                        &quot;16-28&quot;: &quot;#666666&quot;,
                        &quot;17-2&quot;: &quot;#666666&quot;,
                        &quot;17-3&quot;: &quot;#666666&quot;,
                        &quot;17-4&quot;: &quot;#666666&quot;,
                        &quot;17-5&quot;: &quot;#666666&quot;,
                        &quot;17-6&quot;: &quot;#666666&quot;,
                        &quot;17-7&quot;: &quot;#666666&quot;,
                        &quot;17-8&quot;: &quot;#666666&quot;,
                        &quot;17-9&quot;: &quot;#666666&quot;,
                        &quot;17-10&quot;: &quot;#666666&quot;,
                        &quot;17-11&quot;: &quot;#666666&quot;,
                        &quot;17-12&quot;: &quot;#666666&quot;,
                        &quot;17-13&quot;: &quot;#666666&quot;,
                        &quot;17-14&quot;: &quot;#666666&quot;,
                        &quot;17-15&quot;: &quot;#666666&quot;,
                        &quot;17-16&quot;: &quot;#666666&quot;,
                        &quot;17-17&quot;: &quot;#666666&quot;,
                        &quot;17-18&quot;: &quot;#666666&quot;,
                        &quot;17-19&quot;: &quot;#666666&quot;,
                        &quot;17-20&quot;: &quot;#666666&quot;,
                        &quot;17-21&quot;: &quot;#666666&quot;,
                        &quot;17-22&quot;: &quot;#666666&quot;,
                        &quot;17-23&quot;: &quot;#666666&quot;,
                        &quot;17-24&quot;: &quot;#666666&quot;,
                        &quot;17-25&quot;: &quot;#666666&quot;,
                        &quot;17-26&quot;: &quot;#666666&quot;,
                        &quot;17-27&quot;: &quot;#666666&quot;,
                        &quot;17-28&quot;: &quot;#666666&quot;,
                        &quot;18-2&quot;: &quot;#666666&quot;,
                        &quot;18-3&quot;: &quot;#666666&quot;,
                        &quot;18-4&quot;: &quot;#666666&quot;,
                        &quot;18-5&quot;: &quot;#666666&quot;,
                        &quot;18-6&quot;: &quot;#666666&quot;,
                        &quot;18-7&quot;: &quot;#666666&quot;,
                        &quot;18-8&quot;: &quot;#666666&quot;,
                        &quot;18-9&quot;: &quot;#666666&quot;,
                        &quot;18-10&quot;: &quot;#666666&quot;,
                        &quot;18-11&quot;: &quot;#666666&quot;,
                        &quot;18-12&quot;: &quot;#666666&quot;,
                        &quot;18-13&quot;: &quot;#666666&quot;,
                        &quot;18-14&quot;: &quot;#666666&quot;,
                        &quot;18-15&quot;: &quot;#666666&quot;,
                        &quot;18-16&quot;: &quot;#666666&quot;,
                        &quot;18-17&quot;: &quot;#666666&quot;,
                        &quot;18-18&quot;: &quot;#666666&quot;,
                        &quot;18-19&quot;: &quot;#666666&quot;,
                        &quot;18-20&quot;: &quot;#666666&quot;,
                        &quot;18-21&quot;: &quot;#666666&quot;,
                        &quot;18-22&quot;: &quot;#666666&quot;,
                        &quot;18-23&quot;: &quot;#666666&quot;,
                        &quot;18-24&quot;: &quot;#666666&quot;,
                        &quot;18-25&quot;: &quot;#666666&quot;,
                        &quot;18-26&quot;: &quot;#666666&quot;,
                        &quot;18-27&quot;: &quot;#666666&quot;,
                        &quot;18-28&quot;: &quot;#666666&quot;
                    },
                    &quot;wall_color&quot;: &quot;#666666&quot;,
                    &quot;wall_thickness&quot;: 22,
                    &quot;floor_texture_id&quot;: 6,
                    &quot;starting_point_row&quot;: 2,
                    &quot;starting_point_col&quot;: 28,
                    &quot;floor_accepted&quot;: true,
                    &quot;door_asset_id&quot;: 1,
                    &quot;door_position&quot;: {
                        &quot;row&quot;: 10,
                        &quot;col&quot;: 10
                    },
                    &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;
                }
            ]
        }
    ],
    &quot;current_page&quot;: 1,
    &quot;last_page&quot;: 2,
    &quot;per_page&quot;: 8,
    &quot;total&quot;: 11
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-escape-room" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-escape-room"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-escape-room"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-escape-room" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-escape-room">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-escape-room" data-method="GET"
      data-path="api/v1/escape-room"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-escape-room', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-escape-room"
                    onclick="tryItOut('GETapi-v1-escape-room');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-escape-room"
                    onclick="cancelTryOut('GETapi-v1-escape-room');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-escape-room"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/escape-room</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-escape-room"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-escape-room"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpointy-GETapi-v1-escape-room--id-">GET api/v1/escape-room/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-escape-room--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/escape-room/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/escape-room/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/escape-room/1';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-escape-room--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: &quot;1&quot;,
    &quot;name&quot;: &quot;Tajemnica Starożytnej Świątyni&quot;,
    &quot;description&quot;: &quot;Odkryj sekrety starożytnej świątyni pełnej tajemniczych zagadek i ukrytych skarb&oacute;w.&quot;,
    &quot;thumbnail_url&quot;: &quot;/storage/escape-rooms/thumbnails/rl-app-4.png&quot;,
    &quot;soundtrack_url&quot;: &quot;/storage/escape-rooms/soundtracks/a7e4d623-fcef-4666-a4b9-f8925515e479.mp3&quot;,
    &quot;is_public&quot;: true,
    &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
    &quot;metadata&quot;: {
        &quot;name&quot;: &quot;Tajemnica Starożytnej Świątyni&quot;,
        &quot;description&quot;: &quot;Odkryj sekrety starożytnej świątyni pełnej tajemniczych zagadek i ukrytych skarb&oacute;w.&quot;,
        &quot;thumbnail&quot;: &quot;/storage/escape-rooms/thumbnails/rl-app-4.png&quot;,
        &quot;soundtrack&quot;: &quot;/storage/escape-rooms/soundtracks/a7e4d623-fcef-4666-a4b9-f8925515e479.mp3&quot;
    },
    &quot;rooms&quot;: [
        {
            &quot;id&quot;: &quot;1&quot;,
            &quot;escape_room_id&quot;: 1,
            &quot;escapeRoomId&quot;: &quot;1&quot;,
            &quot;grid&quot;: {
                &quot;2-2&quot;: &quot;1&quot;,
                &quot;2-3&quot;: &quot;1&quot;,
                &quot;2-4&quot;: &quot;1&quot;,
                &quot;2-5&quot;: &quot;1&quot;,
                &quot;2-6&quot;: &quot;1&quot;,
                &quot;2-7&quot;: &quot;1&quot;,
                &quot;2-8&quot;: &quot;1&quot;,
                &quot;2-9&quot;: &quot;1&quot;,
                &quot;2-10&quot;: &quot;1&quot;,
                &quot;2-11&quot;: &quot;1&quot;,
                &quot;2-12&quot;: &quot;1&quot;,
                &quot;2-13&quot;: &quot;1&quot;,
                &quot;2-14&quot;: &quot;1&quot;,
                &quot;2-15&quot;: &quot;1&quot;,
                &quot;2-16&quot;: &quot;1&quot;,
                &quot;2-17&quot;: &quot;1&quot;,
                &quot;2-18&quot;: &quot;1&quot;,
                &quot;2-19&quot;: &quot;1&quot;,
                &quot;2-20&quot;: &quot;1&quot;,
                &quot;2-21&quot;: &quot;1&quot;,
                &quot;2-22&quot;: &quot;1&quot;,
                &quot;2-23&quot;: &quot;1&quot;,
                &quot;2-24&quot;: &quot;1&quot;,
                &quot;2-25&quot;: &quot;1&quot;,
                &quot;2-26&quot;: &quot;1&quot;,
                &quot;2-27&quot;: &quot;1&quot;,
                &quot;2-28&quot;: &quot;1&quot;,
                &quot;3-2&quot;: &quot;1&quot;,
                &quot;3-3&quot;: &quot;1&quot;,
                &quot;3-4&quot;: &quot;1&quot;,
                &quot;3-5&quot;: &quot;1&quot;,
                &quot;3-6&quot;: &quot;1&quot;,
                &quot;3-7&quot;: &quot;1&quot;,
                &quot;3-8&quot;: &quot;1&quot;,
                &quot;3-9&quot;: &quot;1&quot;,
                &quot;3-10&quot;: &quot;1&quot;,
                &quot;3-11&quot;: &quot;1&quot;,
                &quot;3-12&quot;: &quot;1&quot;,
                &quot;3-13&quot;: &quot;1&quot;,
                &quot;3-14&quot;: &quot;1&quot;,
                &quot;3-15&quot;: &quot;1&quot;,
                &quot;3-16&quot;: &quot;1&quot;,
                &quot;3-17&quot;: &quot;1&quot;,
                &quot;3-18&quot;: &quot;1&quot;,
                &quot;3-19&quot;: &quot;1&quot;,
                &quot;3-20&quot;: &quot;1&quot;,
                &quot;3-21&quot;: &quot;1&quot;,
                &quot;3-22&quot;: &quot;1&quot;,
                &quot;3-23&quot;: &quot;1&quot;,
                &quot;3-24&quot;: &quot;1&quot;,
                &quot;3-25&quot;: &quot;1&quot;,
                &quot;3-26&quot;: &quot;1&quot;,
                &quot;3-27&quot;: &quot;1&quot;,
                &quot;3-28&quot;: &quot;1&quot;,
                &quot;4-2&quot;: &quot;1&quot;,
                &quot;4-3&quot;: &quot;1&quot;,
                &quot;4-4&quot;: &quot;1&quot;,
                &quot;4-5&quot;: &quot;1&quot;,
                &quot;4-6&quot;: &quot;1&quot;,
                &quot;4-7&quot;: &quot;1&quot;,
                &quot;4-8&quot;: &quot;1&quot;,
                &quot;4-9&quot;: &quot;1&quot;,
                &quot;4-10&quot;: &quot;1&quot;,
                &quot;4-11&quot;: &quot;1&quot;,
                &quot;4-12&quot;: &quot;1&quot;,
                &quot;4-13&quot;: &quot;1&quot;,
                &quot;4-14&quot;: &quot;1&quot;,
                &quot;4-15&quot;: &quot;1&quot;,
                &quot;4-16&quot;: &quot;1&quot;,
                &quot;4-17&quot;: &quot;1&quot;,
                &quot;4-18&quot;: &quot;1&quot;,
                &quot;4-19&quot;: &quot;1&quot;,
                &quot;4-20&quot;: &quot;1&quot;,
                &quot;4-21&quot;: &quot;1&quot;,
                &quot;4-22&quot;: &quot;1&quot;,
                &quot;4-23&quot;: &quot;1&quot;,
                &quot;4-24&quot;: &quot;1&quot;,
                &quot;4-25&quot;: &quot;1&quot;,
                &quot;4-26&quot;: &quot;1&quot;,
                &quot;4-27&quot;: &quot;1&quot;,
                &quot;4-28&quot;: &quot;1&quot;,
                &quot;5-2&quot;: &quot;1&quot;,
                &quot;5-3&quot;: &quot;1&quot;,
                &quot;5-4&quot;: &quot;1&quot;,
                &quot;5-5&quot;: &quot;1&quot;,
                &quot;5-6&quot;: &quot;1&quot;,
                &quot;5-7&quot;: &quot;1&quot;,
                &quot;5-8&quot;: &quot;1&quot;,
                &quot;5-9&quot;: &quot;1&quot;,
                &quot;5-10&quot;: &quot;1&quot;,
                &quot;5-11&quot;: &quot;1&quot;,
                &quot;5-12&quot;: &quot;1&quot;,
                &quot;5-13&quot;: &quot;1&quot;,
                &quot;5-14&quot;: &quot;1&quot;,
                &quot;5-15&quot;: &quot;1&quot;,
                &quot;5-16&quot;: &quot;1&quot;,
                &quot;5-17&quot;: &quot;1&quot;,
                &quot;5-18&quot;: &quot;1&quot;,
                &quot;5-19&quot;: &quot;1&quot;,
                &quot;5-20&quot;: &quot;1&quot;,
                &quot;5-21&quot;: &quot;1&quot;,
                &quot;5-22&quot;: &quot;1&quot;,
                &quot;5-23&quot;: &quot;1&quot;,
                &quot;5-24&quot;: &quot;1&quot;,
                &quot;5-25&quot;: &quot;1&quot;,
                &quot;5-26&quot;: &quot;1&quot;,
                &quot;5-27&quot;: &quot;1&quot;,
                &quot;5-28&quot;: &quot;1&quot;,
                &quot;6-2&quot;: &quot;1&quot;,
                &quot;6-3&quot;: &quot;1&quot;,
                &quot;6-4&quot;: &quot;1&quot;,
                &quot;6-5&quot;: &quot;1&quot;,
                &quot;6-6&quot;: &quot;1&quot;,
                &quot;6-7&quot;: &quot;1&quot;,
                &quot;6-8&quot;: &quot;1&quot;,
                &quot;6-9&quot;: &quot;1&quot;,
                &quot;6-10&quot;: &quot;1&quot;,
                &quot;6-11&quot;: &quot;1&quot;,
                &quot;6-12&quot;: &quot;1&quot;,
                &quot;6-13&quot;: &quot;1&quot;,
                &quot;6-14&quot;: &quot;1&quot;,
                &quot;6-15&quot;: &quot;1&quot;,
                &quot;6-16&quot;: &quot;1&quot;,
                &quot;6-17&quot;: &quot;1&quot;,
                &quot;6-18&quot;: &quot;1&quot;,
                &quot;6-19&quot;: &quot;1&quot;,
                &quot;6-20&quot;: &quot;1&quot;,
                &quot;6-21&quot;: &quot;1&quot;,
                &quot;6-22&quot;: &quot;1&quot;,
                &quot;6-23&quot;: &quot;1&quot;,
                &quot;6-24&quot;: &quot;1&quot;,
                &quot;6-25&quot;: &quot;1&quot;,
                &quot;6-26&quot;: &quot;1&quot;,
                &quot;6-27&quot;: &quot;1&quot;,
                &quot;6-28&quot;: &quot;1&quot;,
                &quot;7-2&quot;: &quot;1&quot;,
                &quot;7-3&quot;: &quot;1&quot;,
                &quot;7-4&quot;: &quot;1&quot;,
                &quot;7-5&quot;: &quot;1&quot;,
                &quot;7-6&quot;: &quot;1&quot;,
                &quot;7-7&quot;: &quot;1&quot;,
                &quot;7-8&quot;: &quot;1&quot;,
                &quot;7-9&quot;: &quot;1&quot;,
                &quot;7-10&quot;: &quot;1&quot;,
                &quot;7-11&quot;: &quot;1&quot;,
                &quot;7-12&quot;: &quot;1&quot;,
                &quot;7-13&quot;: &quot;1&quot;,
                &quot;7-14&quot;: &quot;1&quot;,
                &quot;7-15&quot;: &quot;1&quot;,
                &quot;7-16&quot;: &quot;1&quot;,
                &quot;7-17&quot;: &quot;1&quot;,
                &quot;7-18&quot;: &quot;1&quot;,
                &quot;7-19&quot;: &quot;1&quot;,
                &quot;7-20&quot;: &quot;1&quot;,
                &quot;7-21&quot;: &quot;1&quot;,
                &quot;7-22&quot;: &quot;1&quot;,
                &quot;7-23&quot;: &quot;1&quot;,
                &quot;7-24&quot;: &quot;1&quot;,
                &quot;7-25&quot;: &quot;1&quot;,
                &quot;7-26&quot;: &quot;1&quot;,
                &quot;7-27&quot;: &quot;1&quot;,
                &quot;7-28&quot;: &quot;1&quot;,
                &quot;8-2&quot;: &quot;1&quot;,
                &quot;8-3&quot;: &quot;1&quot;,
                &quot;8-4&quot;: &quot;1&quot;,
                &quot;8-5&quot;: &quot;1&quot;,
                &quot;8-6&quot;: &quot;1&quot;,
                &quot;8-7&quot;: &quot;1&quot;,
                &quot;8-8&quot;: &quot;1&quot;,
                &quot;8-9&quot;: &quot;1&quot;,
                &quot;8-10&quot;: &quot;1&quot;,
                &quot;8-11&quot;: &quot;1&quot;,
                &quot;8-12&quot;: &quot;1&quot;,
                &quot;8-13&quot;: &quot;1&quot;,
                &quot;8-14&quot;: &quot;1&quot;,
                &quot;8-15&quot;: &quot;1&quot;,
                &quot;8-16&quot;: &quot;1&quot;,
                &quot;8-17&quot;: &quot;1&quot;,
                &quot;8-18&quot;: &quot;1&quot;,
                &quot;8-19&quot;: &quot;1&quot;,
                &quot;8-20&quot;: &quot;1&quot;,
                &quot;8-21&quot;: &quot;1&quot;,
                &quot;8-22&quot;: &quot;1&quot;,
                &quot;8-23&quot;: &quot;1&quot;,
                &quot;8-24&quot;: &quot;1&quot;,
                &quot;8-25&quot;: &quot;1&quot;,
                &quot;8-26&quot;: &quot;1&quot;,
                &quot;8-27&quot;: &quot;1&quot;,
                &quot;8-28&quot;: &quot;1&quot;,
                &quot;9-2&quot;: &quot;1&quot;,
                &quot;9-3&quot;: &quot;1&quot;,
                &quot;9-4&quot;: &quot;1&quot;,
                &quot;9-5&quot;: &quot;1&quot;,
                &quot;9-6&quot;: &quot;1&quot;,
                &quot;9-7&quot;: &quot;1&quot;,
                &quot;9-8&quot;: &quot;1&quot;,
                &quot;9-9&quot;: &quot;1&quot;,
                &quot;9-10&quot;: &quot;1&quot;,
                &quot;9-11&quot;: &quot;1&quot;,
                &quot;9-12&quot;: &quot;1&quot;,
                &quot;9-13&quot;: &quot;1&quot;,
                &quot;9-14&quot;: &quot;1&quot;,
                &quot;9-15&quot;: &quot;1&quot;,
                &quot;9-16&quot;: &quot;1&quot;,
                &quot;9-17&quot;: &quot;1&quot;,
                &quot;9-18&quot;: &quot;1&quot;,
                &quot;9-19&quot;: &quot;1&quot;,
                &quot;9-20&quot;: &quot;1&quot;,
                &quot;9-21&quot;: &quot;1&quot;,
                &quot;9-22&quot;: &quot;1&quot;,
                &quot;9-23&quot;: &quot;1&quot;,
                &quot;9-24&quot;: &quot;1&quot;,
                &quot;9-25&quot;: &quot;1&quot;,
                &quot;9-26&quot;: &quot;1&quot;,
                &quot;9-27&quot;: &quot;1&quot;,
                &quot;9-28&quot;: &quot;1&quot;,
                &quot;10-2&quot;: &quot;1&quot;,
                &quot;10-3&quot;: &quot;1&quot;,
                &quot;10-4&quot;: &quot;1&quot;,
                &quot;10-5&quot;: &quot;1&quot;,
                &quot;10-6&quot;: &quot;1&quot;,
                &quot;10-7&quot;: &quot;1&quot;,
                &quot;10-8&quot;: &quot;1&quot;,
                &quot;10-9&quot;: &quot;1&quot;,
                &quot;10-10&quot;: &quot;1&quot;,
                &quot;10-11&quot;: &quot;1&quot;,
                &quot;10-12&quot;: &quot;1&quot;,
                &quot;10-13&quot;: &quot;1&quot;,
                &quot;10-14&quot;: &quot;1&quot;,
                &quot;10-15&quot;: &quot;1&quot;,
                &quot;10-16&quot;: &quot;1&quot;,
                &quot;10-17&quot;: &quot;1&quot;,
                &quot;10-18&quot;: &quot;1&quot;,
                &quot;10-19&quot;: &quot;1&quot;,
                &quot;10-20&quot;: &quot;1&quot;,
                &quot;10-21&quot;: &quot;1&quot;,
                &quot;10-22&quot;: &quot;1&quot;,
                &quot;10-23&quot;: &quot;1&quot;,
                &quot;10-24&quot;: &quot;1&quot;,
                &quot;10-25&quot;: &quot;1&quot;,
                &quot;10-26&quot;: &quot;1&quot;,
                &quot;10-27&quot;: &quot;1&quot;,
                &quot;10-28&quot;: &quot;1&quot;,
                &quot;11-2&quot;: &quot;1&quot;,
                &quot;11-3&quot;: &quot;1&quot;,
                &quot;11-4&quot;: &quot;1&quot;,
                &quot;11-5&quot;: &quot;1&quot;,
                &quot;11-6&quot;: &quot;1&quot;,
                &quot;11-7&quot;: &quot;1&quot;,
                &quot;11-8&quot;: &quot;1&quot;,
                &quot;11-9&quot;: &quot;1&quot;,
                &quot;11-10&quot;: &quot;1&quot;,
                &quot;11-11&quot;: &quot;1&quot;,
                &quot;11-12&quot;: &quot;1&quot;,
                &quot;11-13&quot;: &quot;1&quot;,
                &quot;11-14&quot;: &quot;1&quot;,
                &quot;11-15&quot;: &quot;1&quot;,
                &quot;11-16&quot;: &quot;1&quot;,
                &quot;11-17&quot;: &quot;1&quot;,
                &quot;11-18&quot;: &quot;1&quot;,
                &quot;11-19&quot;: &quot;1&quot;,
                &quot;11-20&quot;: &quot;1&quot;,
                &quot;11-21&quot;: &quot;1&quot;,
                &quot;11-22&quot;: &quot;1&quot;,
                &quot;11-23&quot;: &quot;1&quot;,
                &quot;11-24&quot;: &quot;1&quot;,
                &quot;11-25&quot;: &quot;1&quot;,
                &quot;11-26&quot;: &quot;1&quot;,
                &quot;11-27&quot;: &quot;1&quot;,
                &quot;11-28&quot;: &quot;1&quot;,
                &quot;12-2&quot;: &quot;1&quot;,
                &quot;12-3&quot;: &quot;1&quot;,
                &quot;12-4&quot;: &quot;1&quot;,
                &quot;12-5&quot;: &quot;1&quot;,
                &quot;12-6&quot;: &quot;1&quot;,
                &quot;12-7&quot;: &quot;1&quot;,
                &quot;12-8&quot;: &quot;1&quot;,
                &quot;12-9&quot;: &quot;1&quot;,
                &quot;12-10&quot;: &quot;1&quot;,
                &quot;12-11&quot;: &quot;1&quot;,
                &quot;12-12&quot;: &quot;1&quot;,
                &quot;12-13&quot;: &quot;1&quot;,
                &quot;12-14&quot;: &quot;1&quot;,
                &quot;12-15&quot;: &quot;1&quot;,
                &quot;12-16&quot;: &quot;1&quot;,
                &quot;12-17&quot;: &quot;1&quot;,
                &quot;12-18&quot;: &quot;1&quot;,
                &quot;12-19&quot;: &quot;1&quot;,
                &quot;12-20&quot;: &quot;1&quot;,
                &quot;12-21&quot;: &quot;1&quot;,
                &quot;12-22&quot;: &quot;1&quot;,
                &quot;12-23&quot;: &quot;1&quot;,
                &quot;12-24&quot;: &quot;1&quot;,
                &quot;12-25&quot;: &quot;1&quot;,
                &quot;12-26&quot;: &quot;1&quot;,
                &quot;12-27&quot;: &quot;1&quot;,
                &quot;12-28&quot;: &quot;1&quot;,
                &quot;13-2&quot;: &quot;1&quot;,
                &quot;13-3&quot;: &quot;1&quot;,
                &quot;13-4&quot;: &quot;1&quot;,
                &quot;13-5&quot;: &quot;1&quot;,
                &quot;13-6&quot;: &quot;1&quot;,
                &quot;13-7&quot;: &quot;1&quot;,
                &quot;13-8&quot;: &quot;1&quot;,
                &quot;13-9&quot;: &quot;1&quot;,
                &quot;13-10&quot;: &quot;1&quot;,
                &quot;13-11&quot;: &quot;1&quot;,
                &quot;13-12&quot;: &quot;1&quot;,
                &quot;13-13&quot;: &quot;1&quot;,
                &quot;13-14&quot;: &quot;1&quot;,
                &quot;13-15&quot;: &quot;1&quot;,
                &quot;13-16&quot;: &quot;1&quot;,
                &quot;13-17&quot;: &quot;1&quot;,
                &quot;13-18&quot;: &quot;1&quot;,
                &quot;13-19&quot;: &quot;1&quot;,
                &quot;13-20&quot;: &quot;1&quot;,
                &quot;13-21&quot;: &quot;1&quot;,
                &quot;13-22&quot;: &quot;1&quot;,
                &quot;13-23&quot;: &quot;1&quot;,
                &quot;13-24&quot;: &quot;1&quot;,
                &quot;13-25&quot;: &quot;1&quot;,
                &quot;13-26&quot;: &quot;1&quot;,
                &quot;13-27&quot;: &quot;1&quot;,
                &quot;13-28&quot;: &quot;1&quot;,
                &quot;14-2&quot;: &quot;1&quot;,
                &quot;14-3&quot;: &quot;1&quot;,
                &quot;14-4&quot;: &quot;1&quot;,
                &quot;14-5&quot;: &quot;1&quot;,
                &quot;14-6&quot;: &quot;1&quot;,
                &quot;14-7&quot;: &quot;1&quot;,
                &quot;14-8&quot;: &quot;1&quot;,
                &quot;14-9&quot;: &quot;1&quot;,
                &quot;14-10&quot;: &quot;1&quot;,
                &quot;14-11&quot;: &quot;1&quot;,
                &quot;14-12&quot;: &quot;1&quot;,
                &quot;14-13&quot;: &quot;1&quot;,
                &quot;14-14&quot;: &quot;1&quot;,
                &quot;14-15&quot;: &quot;1&quot;,
                &quot;14-16&quot;: &quot;1&quot;,
                &quot;14-17&quot;: &quot;1&quot;,
                &quot;14-18&quot;: &quot;1&quot;,
                &quot;14-19&quot;: &quot;1&quot;,
                &quot;14-20&quot;: &quot;1&quot;,
                &quot;14-21&quot;: &quot;1&quot;,
                &quot;14-22&quot;: &quot;1&quot;,
                &quot;14-23&quot;: &quot;1&quot;,
                &quot;14-24&quot;: &quot;1&quot;,
                &quot;14-25&quot;: &quot;1&quot;,
                &quot;14-26&quot;: &quot;1&quot;,
                &quot;14-27&quot;: &quot;1&quot;,
                &quot;14-28&quot;: &quot;1&quot;,
                &quot;15-2&quot;: &quot;1&quot;,
                &quot;15-3&quot;: &quot;1&quot;,
                &quot;15-4&quot;: &quot;1&quot;,
                &quot;15-5&quot;: &quot;1&quot;,
                &quot;15-6&quot;: &quot;1&quot;,
                &quot;15-7&quot;: &quot;1&quot;,
                &quot;15-8&quot;: &quot;1&quot;,
                &quot;15-9&quot;: &quot;1&quot;,
                &quot;15-10&quot;: &quot;1&quot;,
                &quot;15-11&quot;: &quot;1&quot;,
                &quot;15-12&quot;: &quot;1&quot;,
                &quot;15-13&quot;: &quot;1&quot;,
                &quot;15-14&quot;: &quot;1&quot;,
                &quot;15-15&quot;: &quot;1&quot;,
                &quot;15-16&quot;: &quot;1&quot;,
                &quot;15-17&quot;: &quot;1&quot;,
                &quot;15-18&quot;: &quot;1&quot;,
                &quot;15-19&quot;: &quot;1&quot;,
                &quot;15-20&quot;: &quot;1&quot;,
                &quot;15-21&quot;: &quot;1&quot;,
                &quot;15-22&quot;: &quot;1&quot;,
                &quot;15-23&quot;: &quot;1&quot;,
                &quot;15-24&quot;: &quot;1&quot;,
                &quot;15-25&quot;: &quot;1&quot;,
                &quot;15-26&quot;: &quot;1&quot;,
                &quot;15-27&quot;: &quot;1&quot;,
                &quot;15-28&quot;: &quot;1&quot;,
                &quot;16-2&quot;: &quot;1&quot;,
                &quot;16-3&quot;: &quot;1&quot;,
                &quot;16-4&quot;: &quot;1&quot;,
                &quot;16-5&quot;: &quot;1&quot;,
                &quot;16-6&quot;: &quot;1&quot;,
                &quot;16-7&quot;: &quot;1&quot;,
                &quot;16-8&quot;: &quot;1&quot;,
                &quot;16-9&quot;: &quot;1&quot;,
                &quot;16-10&quot;: &quot;1&quot;,
                &quot;16-11&quot;: &quot;1&quot;,
                &quot;16-12&quot;: &quot;1&quot;,
                &quot;16-13&quot;: &quot;1&quot;,
                &quot;16-14&quot;: &quot;1&quot;,
                &quot;16-15&quot;: &quot;1&quot;,
                &quot;16-16&quot;: &quot;1&quot;,
                &quot;16-17&quot;: &quot;1&quot;,
                &quot;16-18&quot;: &quot;1&quot;,
                &quot;16-19&quot;: &quot;1&quot;,
                &quot;16-20&quot;: &quot;1&quot;,
                &quot;16-21&quot;: &quot;1&quot;,
                &quot;16-22&quot;: &quot;1&quot;,
                &quot;16-23&quot;: &quot;1&quot;,
                &quot;16-24&quot;: &quot;1&quot;,
                &quot;16-25&quot;: &quot;1&quot;,
                &quot;16-26&quot;: &quot;1&quot;,
                &quot;16-27&quot;: &quot;1&quot;,
                &quot;16-28&quot;: &quot;1&quot;,
                &quot;17-2&quot;: &quot;1&quot;,
                &quot;17-3&quot;: &quot;1&quot;,
                &quot;17-4&quot;: &quot;1&quot;,
                &quot;17-5&quot;: &quot;1&quot;,
                &quot;17-6&quot;: &quot;1&quot;,
                &quot;17-7&quot;: &quot;1&quot;,
                &quot;17-8&quot;: &quot;1&quot;,
                &quot;17-9&quot;: &quot;1&quot;,
                &quot;17-10&quot;: &quot;1&quot;,
                &quot;17-11&quot;: &quot;1&quot;,
                &quot;17-12&quot;: &quot;1&quot;,
                &quot;17-13&quot;: &quot;1&quot;,
                &quot;17-14&quot;: &quot;1&quot;,
                &quot;17-15&quot;: &quot;1&quot;,
                &quot;17-16&quot;: &quot;1&quot;,
                &quot;17-17&quot;: &quot;1&quot;,
                &quot;17-18&quot;: &quot;1&quot;,
                &quot;17-19&quot;: &quot;1&quot;,
                &quot;17-20&quot;: &quot;1&quot;,
                &quot;17-21&quot;: &quot;1&quot;,
                &quot;17-22&quot;: &quot;1&quot;,
                &quot;17-23&quot;: &quot;1&quot;,
                &quot;17-24&quot;: &quot;1&quot;,
                &quot;17-25&quot;: &quot;1&quot;,
                &quot;17-26&quot;: &quot;1&quot;,
                &quot;17-27&quot;: &quot;1&quot;,
                &quot;17-28&quot;: &quot;1&quot;,
                &quot;18-2&quot;: &quot;1&quot;,
                &quot;18-3&quot;: &quot;1&quot;,
                &quot;18-4&quot;: &quot;1&quot;,
                &quot;18-5&quot;: &quot;1&quot;,
                &quot;18-6&quot;: &quot;1&quot;,
                &quot;18-7&quot;: &quot;1&quot;,
                &quot;18-8&quot;: &quot;1&quot;,
                &quot;18-9&quot;: &quot;1&quot;,
                &quot;18-10&quot;: &quot;1&quot;,
                &quot;18-11&quot;: &quot;1&quot;,
                &quot;18-12&quot;: &quot;1&quot;,
                &quot;18-13&quot;: &quot;1&quot;,
                &quot;18-14&quot;: &quot;1&quot;,
                &quot;18-15&quot;: &quot;1&quot;,
                &quot;18-16&quot;: &quot;1&quot;,
                &quot;18-17&quot;: &quot;1&quot;,
                &quot;18-18&quot;: &quot;1&quot;,
                &quot;18-19&quot;: &quot;1&quot;,
                &quot;18-20&quot;: &quot;1&quot;,
                &quot;18-21&quot;: &quot;1&quot;,
                &quot;18-22&quot;: &quot;1&quot;,
                &quot;18-23&quot;: &quot;1&quot;,
                &quot;18-24&quot;: &quot;1&quot;,
                &quot;18-25&quot;: &quot;1&quot;,
                &quot;18-26&quot;: &quot;1&quot;,
                &quot;18-27&quot;: &quot;1&quot;,
                &quot;18-28&quot;: &quot;1&quot;
            },
            &quot;grid_data&quot;: {
                &quot;2-2&quot;: &quot;1&quot;,
                &quot;2-3&quot;: &quot;1&quot;,
                &quot;2-4&quot;: &quot;1&quot;,
                &quot;2-5&quot;: &quot;1&quot;,
                &quot;2-6&quot;: &quot;1&quot;,
                &quot;2-7&quot;: &quot;1&quot;,
                &quot;2-8&quot;: &quot;1&quot;,
                &quot;2-9&quot;: &quot;1&quot;,
                &quot;2-10&quot;: &quot;1&quot;,
                &quot;2-11&quot;: &quot;1&quot;,
                &quot;2-12&quot;: &quot;1&quot;,
                &quot;2-13&quot;: &quot;1&quot;,
                &quot;2-14&quot;: &quot;1&quot;,
                &quot;2-15&quot;: &quot;1&quot;,
                &quot;2-16&quot;: &quot;1&quot;,
                &quot;2-17&quot;: &quot;1&quot;,
                &quot;2-18&quot;: &quot;1&quot;,
                &quot;2-19&quot;: &quot;1&quot;,
                &quot;2-20&quot;: &quot;1&quot;,
                &quot;2-21&quot;: &quot;1&quot;,
                &quot;2-22&quot;: &quot;1&quot;,
                &quot;2-23&quot;: &quot;1&quot;,
                &quot;2-24&quot;: &quot;1&quot;,
                &quot;2-25&quot;: &quot;1&quot;,
                &quot;2-26&quot;: &quot;1&quot;,
                &quot;2-27&quot;: &quot;1&quot;,
                &quot;2-28&quot;: &quot;1&quot;,
                &quot;3-2&quot;: &quot;1&quot;,
                &quot;3-3&quot;: &quot;1&quot;,
                &quot;3-4&quot;: &quot;1&quot;,
                &quot;3-5&quot;: &quot;1&quot;,
                &quot;3-6&quot;: &quot;1&quot;,
                &quot;3-7&quot;: &quot;1&quot;,
                &quot;3-8&quot;: &quot;1&quot;,
                &quot;3-9&quot;: &quot;1&quot;,
                &quot;3-10&quot;: &quot;1&quot;,
                &quot;3-11&quot;: &quot;1&quot;,
                &quot;3-12&quot;: &quot;1&quot;,
                &quot;3-13&quot;: &quot;1&quot;,
                &quot;3-14&quot;: &quot;1&quot;,
                &quot;3-15&quot;: &quot;1&quot;,
                &quot;3-16&quot;: &quot;1&quot;,
                &quot;3-17&quot;: &quot;1&quot;,
                &quot;3-18&quot;: &quot;1&quot;,
                &quot;3-19&quot;: &quot;1&quot;,
                &quot;3-20&quot;: &quot;1&quot;,
                &quot;3-21&quot;: &quot;1&quot;,
                &quot;3-22&quot;: &quot;1&quot;,
                &quot;3-23&quot;: &quot;1&quot;,
                &quot;3-24&quot;: &quot;1&quot;,
                &quot;3-25&quot;: &quot;1&quot;,
                &quot;3-26&quot;: &quot;1&quot;,
                &quot;3-27&quot;: &quot;1&quot;,
                &quot;3-28&quot;: &quot;1&quot;,
                &quot;4-2&quot;: &quot;1&quot;,
                &quot;4-3&quot;: &quot;1&quot;,
                &quot;4-4&quot;: &quot;1&quot;,
                &quot;4-5&quot;: &quot;1&quot;,
                &quot;4-6&quot;: &quot;1&quot;,
                &quot;4-7&quot;: &quot;1&quot;,
                &quot;4-8&quot;: &quot;1&quot;,
                &quot;4-9&quot;: &quot;1&quot;,
                &quot;4-10&quot;: &quot;1&quot;,
                &quot;4-11&quot;: &quot;1&quot;,
                &quot;4-12&quot;: &quot;1&quot;,
                &quot;4-13&quot;: &quot;1&quot;,
                &quot;4-14&quot;: &quot;1&quot;,
                &quot;4-15&quot;: &quot;1&quot;,
                &quot;4-16&quot;: &quot;1&quot;,
                &quot;4-17&quot;: &quot;1&quot;,
                &quot;4-18&quot;: &quot;1&quot;,
                &quot;4-19&quot;: &quot;1&quot;,
                &quot;4-20&quot;: &quot;1&quot;,
                &quot;4-21&quot;: &quot;1&quot;,
                &quot;4-22&quot;: &quot;1&quot;,
                &quot;4-23&quot;: &quot;1&quot;,
                &quot;4-24&quot;: &quot;1&quot;,
                &quot;4-25&quot;: &quot;1&quot;,
                &quot;4-26&quot;: &quot;1&quot;,
                &quot;4-27&quot;: &quot;1&quot;,
                &quot;4-28&quot;: &quot;1&quot;,
                &quot;5-2&quot;: &quot;1&quot;,
                &quot;5-3&quot;: &quot;1&quot;,
                &quot;5-4&quot;: &quot;1&quot;,
                &quot;5-5&quot;: &quot;1&quot;,
                &quot;5-6&quot;: &quot;1&quot;,
                &quot;5-7&quot;: &quot;1&quot;,
                &quot;5-8&quot;: &quot;1&quot;,
                &quot;5-9&quot;: &quot;1&quot;,
                &quot;5-10&quot;: &quot;1&quot;,
                &quot;5-11&quot;: &quot;1&quot;,
                &quot;5-12&quot;: &quot;1&quot;,
                &quot;5-13&quot;: &quot;1&quot;,
                &quot;5-14&quot;: &quot;1&quot;,
                &quot;5-15&quot;: &quot;1&quot;,
                &quot;5-16&quot;: &quot;1&quot;,
                &quot;5-17&quot;: &quot;1&quot;,
                &quot;5-18&quot;: &quot;1&quot;,
                &quot;5-19&quot;: &quot;1&quot;,
                &quot;5-20&quot;: &quot;1&quot;,
                &quot;5-21&quot;: &quot;1&quot;,
                &quot;5-22&quot;: &quot;1&quot;,
                &quot;5-23&quot;: &quot;1&quot;,
                &quot;5-24&quot;: &quot;1&quot;,
                &quot;5-25&quot;: &quot;1&quot;,
                &quot;5-26&quot;: &quot;1&quot;,
                &quot;5-27&quot;: &quot;1&quot;,
                &quot;5-28&quot;: &quot;1&quot;,
                &quot;6-2&quot;: &quot;1&quot;,
                &quot;6-3&quot;: &quot;1&quot;,
                &quot;6-4&quot;: &quot;1&quot;,
                &quot;6-5&quot;: &quot;1&quot;,
                &quot;6-6&quot;: &quot;1&quot;,
                &quot;6-7&quot;: &quot;1&quot;,
                &quot;6-8&quot;: &quot;1&quot;,
                &quot;6-9&quot;: &quot;1&quot;,
                &quot;6-10&quot;: &quot;1&quot;,
                &quot;6-11&quot;: &quot;1&quot;,
                &quot;6-12&quot;: &quot;1&quot;,
                &quot;6-13&quot;: &quot;1&quot;,
                &quot;6-14&quot;: &quot;1&quot;,
                &quot;6-15&quot;: &quot;1&quot;,
                &quot;6-16&quot;: &quot;1&quot;,
                &quot;6-17&quot;: &quot;1&quot;,
                &quot;6-18&quot;: &quot;1&quot;,
                &quot;6-19&quot;: &quot;1&quot;,
                &quot;6-20&quot;: &quot;1&quot;,
                &quot;6-21&quot;: &quot;1&quot;,
                &quot;6-22&quot;: &quot;1&quot;,
                &quot;6-23&quot;: &quot;1&quot;,
                &quot;6-24&quot;: &quot;1&quot;,
                &quot;6-25&quot;: &quot;1&quot;,
                &quot;6-26&quot;: &quot;1&quot;,
                &quot;6-27&quot;: &quot;1&quot;,
                &quot;6-28&quot;: &quot;1&quot;,
                &quot;7-2&quot;: &quot;1&quot;,
                &quot;7-3&quot;: &quot;1&quot;,
                &quot;7-4&quot;: &quot;1&quot;,
                &quot;7-5&quot;: &quot;1&quot;,
                &quot;7-6&quot;: &quot;1&quot;,
                &quot;7-7&quot;: &quot;1&quot;,
                &quot;7-8&quot;: &quot;1&quot;,
                &quot;7-9&quot;: &quot;1&quot;,
                &quot;7-10&quot;: &quot;1&quot;,
                &quot;7-11&quot;: &quot;1&quot;,
                &quot;7-12&quot;: &quot;1&quot;,
                &quot;7-13&quot;: &quot;1&quot;,
                &quot;7-14&quot;: &quot;1&quot;,
                &quot;7-15&quot;: &quot;1&quot;,
                &quot;7-16&quot;: &quot;1&quot;,
                &quot;7-17&quot;: &quot;1&quot;,
                &quot;7-18&quot;: &quot;1&quot;,
                &quot;7-19&quot;: &quot;1&quot;,
                &quot;7-20&quot;: &quot;1&quot;,
                &quot;7-21&quot;: &quot;1&quot;,
                &quot;7-22&quot;: &quot;1&quot;,
                &quot;7-23&quot;: &quot;1&quot;,
                &quot;7-24&quot;: &quot;1&quot;,
                &quot;7-25&quot;: &quot;1&quot;,
                &quot;7-26&quot;: &quot;1&quot;,
                &quot;7-27&quot;: &quot;1&quot;,
                &quot;7-28&quot;: &quot;1&quot;,
                &quot;8-2&quot;: &quot;1&quot;,
                &quot;8-3&quot;: &quot;1&quot;,
                &quot;8-4&quot;: &quot;1&quot;,
                &quot;8-5&quot;: &quot;1&quot;,
                &quot;8-6&quot;: &quot;1&quot;,
                &quot;8-7&quot;: &quot;1&quot;,
                &quot;8-8&quot;: &quot;1&quot;,
                &quot;8-9&quot;: &quot;1&quot;,
                &quot;8-10&quot;: &quot;1&quot;,
                &quot;8-11&quot;: &quot;1&quot;,
                &quot;8-12&quot;: &quot;1&quot;,
                &quot;8-13&quot;: &quot;1&quot;,
                &quot;8-14&quot;: &quot;1&quot;,
                &quot;8-15&quot;: &quot;1&quot;,
                &quot;8-16&quot;: &quot;1&quot;,
                &quot;8-17&quot;: &quot;1&quot;,
                &quot;8-18&quot;: &quot;1&quot;,
                &quot;8-19&quot;: &quot;1&quot;,
                &quot;8-20&quot;: &quot;1&quot;,
                &quot;8-21&quot;: &quot;1&quot;,
                &quot;8-22&quot;: &quot;1&quot;,
                &quot;8-23&quot;: &quot;1&quot;,
                &quot;8-24&quot;: &quot;1&quot;,
                &quot;8-25&quot;: &quot;1&quot;,
                &quot;8-26&quot;: &quot;1&quot;,
                &quot;8-27&quot;: &quot;1&quot;,
                &quot;8-28&quot;: &quot;1&quot;,
                &quot;9-2&quot;: &quot;1&quot;,
                &quot;9-3&quot;: &quot;1&quot;,
                &quot;9-4&quot;: &quot;1&quot;,
                &quot;9-5&quot;: &quot;1&quot;,
                &quot;9-6&quot;: &quot;1&quot;,
                &quot;9-7&quot;: &quot;1&quot;,
                &quot;9-8&quot;: &quot;1&quot;,
                &quot;9-9&quot;: &quot;1&quot;,
                &quot;9-10&quot;: &quot;1&quot;,
                &quot;9-11&quot;: &quot;1&quot;,
                &quot;9-12&quot;: &quot;1&quot;,
                &quot;9-13&quot;: &quot;1&quot;,
                &quot;9-14&quot;: &quot;1&quot;,
                &quot;9-15&quot;: &quot;1&quot;,
                &quot;9-16&quot;: &quot;1&quot;,
                &quot;9-17&quot;: &quot;1&quot;,
                &quot;9-18&quot;: &quot;1&quot;,
                &quot;9-19&quot;: &quot;1&quot;,
                &quot;9-20&quot;: &quot;1&quot;,
                &quot;9-21&quot;: &quot;1&quot;,
                &quot;9-22&quot;: &quot;1&quot;,
                &quot;9-23&quot;: &quot;1&quot;,
                &quot;9-24&quot;: &quot;1&quot;,
                &quot;9-25&quot;: &quot;1&quot;,
                &quot;9-26&quot;: &quot;1&quot;,
                &quot;9-27&quot;: &quot;1&quot;,
                &quot;9-28&quot;: &quot;1&quot;,
                &quot;10-2&quot;: &quot;1&quot;,
                &quot;10-3&quot;: &quot;1&quot;,
                &quot;10-4&quot;: &quot;1&quot;,
                &quot;10-5&quot;: &quot;1&quot;,
                &quot;10-6&quot;: &quot;1&quot;,
                &quot;10-7&quot;: &quot;1&quot;,
                &quot;10-8&quot;: &quot;1&quot;,
                &quot;10-9&quot;: &quot;1&quot;,
                &quot;10-10&quot;: &quot;1&quot;,
                &quot;10-11&quot;: &quot;1&quot;,
                &quot;10-12&quot;: &quot;1&quot;,
                &quot;10-13&quot;: &quot;1&quot;,
                &quot;10-14&quot;: &quot;1&quot;,
                &quot;10-15&quot;: &quot;1&quot;,
                &quot;10-16&quot;: &quot;1&quot;,
                &quot;10-17&quot;: &quot;1&quot;,
                &quot;10-18&quot;: &quot;1&quot;,
                &quot;10-19&quot;: &quot;1&quot;,
                &quot;10-20&quot;: &quot;1&quot;,
                &quot;10-21&quot;: &quot;1&quot;,
                &quot;10-22&quot;: &quot;1&quot;,
                &quot;10-23&quot;: &quot;1&quot;,
                &quot;10-24&quot;: &quot;1&quot;,
                &quot;10-25&quot;: &quot;1&quot;,
                &quot;10-26&quot;: &quot;1&quot;,
                &quot;10-27&quot;: &quot;1&quot;,
                &quot;10-28&quot;: &quot;1&quot;,
                &quot;11-2&quot;: &quot;1&quot;,
                &quot;11-3&quot;: &quot;1&quot;,
                &quot;11-4&quot;: &quot;1&quot;,
                &quot;11-5&quot;: &quot;1&quot;,
                &quot;11-6&quot;: &quot;1&quot;,
                &quot;11-7&quot;: &quot;1&quot;,
                &quot;11-8&quot;: &quot;1&quot;,
                &quot;11-9&quot;: &quot;1&quot;,
                &quot;11-10&quot;: &quot;1&quot;,
                &quot;11-11&quot;: &quot;1&quot;,
                &quot;11-12&quot;: &quot;1&quot;,
                &quot;11-13&quot;: &quot;1&quot;,
                &quot;11-14&quot;: &quot;1&quot;,
                &quot;11-15&quot;: &quot;1&quot;,
                &quot;11-16&quot;: &quot;1&quot;,
                &quot;11-17&quot;: &quot;1&quot;,
                &quot;11-18&quot;: &quot;1&quot;,
                &quot;11-19&quot;: &quot;1&quot;,
                &quot;11-20&quot;: &quot;1&quot;,
                &quot;11-21&quot;: &quot;1&quot;,
                &quot;11-22&quot;: &quot;1&quot;,
                &quot;11-23&quot;: &quot;1&quot;,
                &quot;11-24&quot;: &quot;1&quot;,
                &quot;11-25&quot;: &quot;1&quot;,
                &quot;11-26&quot;: &quot;1&quot;,
                &quot;11-27&quot;: &quot;1&quot;,
                &quot;11-28&quot;: &quot;1&quot;,
                &quot;12-2&quot;: &quot;1&quot;,
                &quot;12-3&quot;: &quot;1&quot;,
                &quot;12-4&quot;: &quot;1&quot;,
                &quot;12-5&quot;: &quot;1&quot;,
                &quot;12-6&quot;: &quot;1&quot;,
                &quot;12-7&quot;: &quot;1&quot;,
                &quot;12-8&quot;: &quot;1&quot;,
                &quot;12-9&quot;: &quot;1&quot;,
                &quot;12-10&quot;: &quot;1&quot;,
                &quot;12-11&quot;: &quot;1&quot;,
                &quot;12-12&quot;: &quot;1&quot;,
                &quot;12-13&quot;: &quot;1&quot;,
                &quot;12-14&quot;: &quot;1&quot;,
                &quot;12-15&quot;: &quot;1&quot;,
                &quot;12-16&quot;: &quot;1&quot;,
                &quot;12-17&quot;: &quot;1&quot;,
                &quot;12-18&quot;: &quot;1&quot;,
                &quot;12-19&quot;: &quot;1&quot;,
                &quot;12-20&quot;: &quot;1&quot;,
                &quot;12-21&quot;: &quot;1&quot;,
                &quot;12-22&quot;: &quot;1&quot;,
                &quot;12-23&quot;: &quot;1&quot;,
                &quot;12-24&quot;: &quot;1&quot;,
                &quot;12-25&quot;: &quot;1&quot;,
                &quot;12-26&quot;: &quot;1&quot;,
                &quot;12-27&quot;: &quot;1&quot;,
                &quot;12-28&quot;: &quot;1&quot;,
                &quot;13-2&quot;: &quot;1&quot;,
                &quot;13-3&quot;: &quot;1&quot;,
                &quot;13-4&quot;: &quot;1&quot;,
                &quot;13-5&quot;: &quot;1&quot;,
                &quot;13-6&quot;: &quot;1&quot;,
                &quot;13-7&quot;: &quot;1&quot;,
                &quot;13-8&quot;: &quot;1&quot;,
                &quot;13-9&quot;: &quot;1&quot;,
                &quot;13-10&quot;: &quot;1&quot;,
                &quot;13-11&quot;: &quot;1&quot;,
                &quot;13-12&quot;: &quot;1&quot;,
                &quot;13-13&quot;: &quot;1&quot;,
                &quot;13-14&quot;: &quot;1&quot;,
                &quot;13-15&quot;: &quot;1&quot;,
                &quot;13-16&quot;: &quot;1&quot;,
                &quot;13-17&quot;: &quot;1&quot;,
                &quot;13-18&quot;: &quot;1&quot;,
                &quot;13-19&quot;: &quot;1&quot;,
                &quot;13-20&quot;: &quot;1&quot;,
                &quot;13-21&quot;: &quot;1&quot;,
                &quot;13-22&quot;: &quot;1&quot;,
                &quot;13-23&quot;: &quot;1&quot;,
                &quot;13-24&quot;: &quot;1&quot;,
                &quot;13-25&quot;: &quot;1&quot;,
                &quot;13-26&quot;: &quot;1&quot;,
                &quot;13-27&quot;: &quot;1&quot;,
                &quot;13-28&quot;: &quot;1&quot;,
                &quot;14-2&quot;: &quot;1&quot;,
                &quot;14-3&quot;: &quot;1&quot;,
                &quot;14-4&quot;: &quot;1&quot;,
                &quot;14-5&quot;: &quot;1&quot;,
                &quot;14-6&quot;: &quot;1&quot;,
                &quot;14-7&quot;: &quot;1&quot;,
                &quot;14-8&quot;: &quot;1&quot;,
                &quot;14-9&quot;: &quot;1&quot;,
                &quot;14-10&quot;: &quot;1&quot;,
                &quot;14-11&quot;: &quot;1&quot;,
                &quot;14-12&quot;: &quot;1&quot;,
                &quot;14-13&quot;: &quot;1&quot;,
                &quot;14-14&quot;: &quot;1&quot;,
                &quot;14-15&quot;: &quot;1&quot;,
                &quot;14-16&quot;: &quot;1&quot;,
                &quot;14-17&quot;: &quot;1&quot;,
                &quot;14-18&quot;: &quot;1&quot;,
                &quot;14-19&quot;: &quot;1&quot;,
                &quot;14-20&quot;: &quot;1&quot;,
                &quot;14-21&quot;: &quot;1&quot;,
                &quot;14-22&quot;: &quot;1&quot;,
                &quot;14-23&quot;: &quot;1&quot;,
                &quot;14-24&quot;: &quot;1&quot;,
                &quot;14-25&quot;: &quot;1&quot;,
                &quot;14-26&quot;: &quot;1&quot;,
                &quot;14-27&quot;: &quot;1&quot;,
                &quot;14-28&quot;: &quot;1&quot;,
                &quot;15-2&quot;: &quot;1&quot;,
                &quot;15-3&quot;: &quot;1&quot;,
                &quot;15-4&quot;: &quot;1&quot;,
                &quot;15-5&quot;: &quot;1&quot;,
                &quot;15-6&quot;: &quot;1&quot;,
                &quot;15-7&quot;: &quot;1&quot;,
                &quot;15-8&quot;: &quot;1&quot;,
                &quot;15-9&quot;: &quot;1&quot;,
                &quot;15-10&quot;: &quot;1&quot;,
                &quot;15-11&quot;: &quot;1&quot;,
                &quot;15-12&quot;: &quot;1&quot;,
                &quot;15-13&quot;: &quot;1&quot;,
                &quot;15-14&quot;: &quot;1&quot;,
                &quot;15-15&quot;: &quot;1&quot;,
                &quot;15-16&quot;: &quot;1&quot;,
                &quot;15-17&quot;: &quot;1&quot;,
                &quot;15-18&quot;: &quot;1&quot;,
                &quot;15-19&quot;: &quot;1&quot;,
                &quot;15-20&quot;: &quot;1&quot;,
                &quot;15-21&quot;: &quot;1&quot;,
                &quot;15-22&quot;: &quot;1&quot;,
                &quot;15-23&quot;: &quot;1&quot;,
                &quot;15-24&quot;: &quot;1&quot;,
                &quot;15-25&quot;: &quot;1&quot;,
                &quot;15-26&quot;: &quot;1&quot;,
                &quot;15-27&quot;: &quot;1&quot;,
                &quot;15-28&quot;: &quot;1&quot;,
                &quot;16-2&quot;: &quot;1&quot;,
                &quot;16-3&quot;: &quot;1&quot;,
                &quot;16-4&quot;: &quot;1&quot;,
                &quot;16-5&quot;: &quot;1&quot;,
                &quot;16-6&quot;: &quot;1&quot;,
                &quot;16-7&quot;: &quot;1&quot;,
                &quot;16-8&quot;: &quot;1&quot;,
                &quot;16-9&quot;: &quot;1&quot;,
                &quot;16-10&quot;: &quot;1&quot;,
                &quot;16-11&quot;: &quot;1&quot;,
                &quot;16-12&quot;: &quot;1&quot;,
                &quot;16-13&quot;: &quot;1&quot;,
                &quot;16-14&quot;: &quot;1&quot;,
                &quot;16-15&quot;: &quot;1&quot;,
                &quot;16-16&quot;: &quot;1&quot;,
                &quot;16-17&quot;: &quot;1&quot;,
                &quot;16-18&quot;: &quot;1&quot;,
                &quot;16-19&quot;: &quot;1&quot;,
                &quot;16-20&quot;: &quot;1&quot;,
                &quot;16-21&quot;: &quot;1&quot;,
                &quot;16-22&quot;: &quot;1&quot;,
                &quot;16-23&quot;: &quot;1&quot;,
                &quot;16-24&quot;: &quot;1&quot;,
                &quot;16-25&quot;: &quot;1&quot;,
                &quot;16-26&quot;: &quot;1&quot;,
                &quot;16-27&quot;: &quot;1&quot;,
                &quot;16-28&quot;: &quot;1&quot;,
                &quot;17-2&quot;: &quot;1&quot;,
                &quot;17-3&quot;: &quot;1&quot;,
                &quot;17-4&quot;: &quot;1&quot;,
                &quot;17-5&quot;: &quot;1&quot;,
                &quot;17-6&quot;: &quot;1&quot;,
                &quot;17-7&quot;: &quot;1&quot;,
                &quot;17-8&quot;: &quot;1&quot;,
                &quot;17-9&quot;: &quot;1&quot;,
                &quot;17-10&quot;: &quot;1&quot;,
                &quot;17-11&quot;: &quot;1&quot;,
                &quot;17-12&quot;: &quot;1&quot;,
                &quot;17-13&quot;: &quot;1&quot;,
                &quot;17-14&quot;: &quot;1&quot;,
                &quot;17-15&quot;: &quot;1&quot;,
                &quot;17-16&quot;: &quot;1&quot;,
                &quot;17-17&quot;: &quot;1&quot;,
                &quot;17-18&quot;: &quot;1&quot;,
                &quot;17-19&quot;: &quot;1&quot;,
                &quot;17-20&quot;: &quot;1&quot;,
                &quot;17-21&quot;: &quot;1&quot;,
                &quot;17-22&quot;: &quot;1&quot;,
                &quot;17-23&quot;: &quot;1&quot;,
                &quot;17-24&quot;: &quot;1&quot;,
                &quot;17-25&quot;: &quot;1&quot;,
                &quot;17-26&quot;: &quot;1&quot;,
                &quot;17-27&quot;: &quot;1&quot;,
                &quot;17-28&quot;: &quot;1&quot;,
                &quot;18-2&quot;: &quot;1&quot;,
                &quot;18-3&quot;: &quot;1&quot;,
                &quot;18-4&quot;: &quot;1&quot;,
                &quot;18-5&quot;: &quot;1&quot;,
                &quot;18-6&quot;: &quot;1&quot;,
                &quot;18-7&quot;: &quot;1&quot;,
                &quot;18-8&quot;: &quot;1&quot;,
                &quot;18-9&quot;: &quot;1&quot;,
                &quot;18-10&quot;: &quot;1&quot;,
                &quot;18-11&quot;: &quot;1&quot;,
                &quot;18-12&quot;: &quot;1&quot;,
                &quot;18-13&quot;: &quot;1&quot;,
                &quot;18-14&quot;: &quot;1&quot;,
                &quot;18-15&quot;: &quot;1&quot;,
                &quot;18-16&quot;: &quot;1&quot;,
                &quot;18-17&quot;: &quot;1&quot;,
                &quot;18-18&quot;: &quot;1&quot;,
                &quot;18-19&quot;: &quot;1&quot;,
                &quot;18-20&quot;: &quot;1&quot;,
                &quot;18-21&quot;: &quot;1&quot;,
                &quot;18-22&quot;: &quot;1&quot;,
                &quot;18-23&quot;: &quot;1&quot;,
                &quot;18-24&quot;: &quot;1&quot;,
                &quot;18-25&quot;: &quot;1&quot;,
                &quot;18-26&quot;: &quot;1&quot;,
                &quot;18-27&quot;: &quot;1&quot;,
                &quot;18-28&quot;: &quot;1&quot;
            },
            &quot;walls&quot;: {
                &quot;wallColor&quot;: &quot;#444444&quot;,
                &quot;2-2&quot;: &quot;#444444&quot;,
                &quot;2-3&quot;: &quot;#444444&quot;,
                &quot;2-4&quot;: &quot;#444444&quot;,
                &quot;2-5&quot;: &quot;#444444&quot;,
                &quot;2-6&quot;: &quot;#444444&quot;,
                &quot;2-7&quot;: &quot;#444444&quot;,
                &quot;2-8&quot;: &quot;#444444&quot;,
                &quot;2-9&quot;: &quot;#444444&quot;,
                &quot;2-10&quot;: &quot;#444444&quot;,
                &quot;2-11&quot;: &quot;#444444&quot;,
                &quot;2-12&quot;: &quot;#444444&quot;,
                &quot;2-13&quot;: &quot;#444444&quot;,
                &quot;2-14&quot;: &quot;#444444&quot;,
                &quot;2-15&quot;: &quot;#444444&quot;,
                &quot;2-16&quot;: &quot;#444444&quot;,
                &quot;2-17&quot;: &quot;#444444&quot;,
                &quot;2-18&quot;: &quot;#444444&quot;,
                &quot;2-19&quot;: &quot;#444444&quot;,
                &quot;2-20&quot;: &quot;#444444&quot;,
                &quot;2-21&quot;: &quot;#444444&quot;,
                &quot;2-22&quot;: &quot;#444444&quot;,
                &quot;2-23&quot;: &quot;#444444&quot;,
                &quot;2-24&quot;: &quot;#444444&quot;,
                &quot;2-25&quot;: &quot;#444444&quot;,
                &quot;2-26&quot;: &quot;#444444&quot;,
                &quot;2-27&quot;: &quot;#444444&quot;,
                &quot;2-28&quot;: &quot;#444444&quot;,
                &quot;3-2&quot;: &quot;#444444&quot;,
                &quot;3-3&quot;: &quot;#444444&quot;,
                &quot;3-4&quot;: &quot;#444444&quot;,
                &quot;3-5&quot;: &quot;#444444&quot;,
                &quot;3-6&quot;: &quot;#444444&quot;,
                &quot;3-7&quot;: &quot;#444444&quot;,
                &quot;3-8&quot;: &quot;#444444&quot;,
                &quot;3-9&quot;: &quot;#444444&quot;,
                &quot;3-10&quot;: &quot;#444444&quot;,
                &quot;3-11&quot;: &quot;#444444&quot;,
                &quot;3-12&quot;: &quot;#444444&quot;,
                &quot;3-13&quot;: &quot;#444444&quot;,
                &quot;3-14&quot;: &quot;#444444&quot;,
                &quot;3-15&quot;: &quot;#444444&quot;,
                &quot;3-16&quot;: &quot;#444444&quot;,
                &quot;3-17&quot;: &quot;#444444&quot;,
                &quot;3-18&quot;: &quot;#444444&quot;,
                &quot;3-19&quot;: &quot;#444444&quot;,
                &quot;3-20&quot;: &quot;#444444&quot;,
                &quot;3-21&quot;: &quot;#444444&quot;,
                &quot;3-22&quot;: &quot;#444444&quot;,
                &quot;3-23&quot;: &quot;#444444&quot;,
                &quot;3-24&quot;: &quot;#444444&quot;,
                &quot;3-25&quot;: &quot;#444444&quot;,
                &quot;3-26&quot;: &quot;#444444&quot;,
                &quot;3-27&quot;: &quot;#444444&quot;,
                &quot;3-28&quot;: &quot;#444444&quot;,
                &quot;4-2&quot;: &quot;#444444&quot;,
                &quot;4-3&quot;: &quot;#444444&quot;,
                &quot;4-4&quot;: &quot;#444444&quot;,
                &quot;4-5&quot;: &quot;#444444&quot;,
                &quot;4-6&quot;: &quot;#444444&quot;,
                &quot;4-7&quot;: &quot;#444444&quot;,
                &quot;4-8&quot;: &quot;#444444&quot;,
                &quot;4-9&quot;: &quot;#444444&quot;,
                &quot;4-10&quot;: &quot;#444444&quot;,
                &quot;4-11&quot;: &quot;#444444&quot;,
                &quot;4-12&quot;: &quot;#444444&quot;,
                &quot;4-13&quot;: &quot;#444444&quot;,
                &quot;4-14&quot;: &quot;#444444&quot;,
                &quot;4-15&quot;: &quot;#444444&quot;,
                &quot;4-16&quot;: &quot;#444444&quot;,
                &quot;4-17&quot;: &quot;#444444&quot;,
                &quot;4-18&quot;: &quot;#444444&quot;,
                &quot;4-19&quot;: &quot;#444444&quot;,
                &quot;4-20&quot;: &quot;#444444&quot;,
                &quot;4-21&quot;: &quot;#444444&quot;,
                &quot;4-22&quot;: &quot;#444444&quot;,
                &quot;4-23&quot;: &quot;#444444&quot;,
                &quot;4-24&quot;: &quot;#444444&quot;,
                &quot;4-25&quot;: &quot;#444444&quot;,
                &quot;4-26&quot;: &quot;#444444&quot;,
                &quot;4-27&quot;: &quot;#444444&quot;,
                &quot;4-28&quot;: &quot;#444444&quot;,
                &quot;5-2&quot;: &quot;#444444&quot;,
                &quot;5-3&quot;: &quot;#444444&quot;,
                &quot;5-4&quot;: &quot;#444444&quot;,
                &quot;5-5&quot;: &quot;#444444&quot;,
                &quot;5-6&quot;: &quot;#444444&quot;,
                &quot;5-7&quot;: &quot;#444444&quot;,
                &quot;5-8&quot;: &quot;#444444&quot;,
                &quot;5-9&quot;: &quot;#444444&quot;,
                &quot;5-10&quot;: &quot;#444444&quot;,
                &quot;5-11&quot;: &quot;#444444&quot;,
                &quot;5-12&quot;: &quot;#444444&quot;,
                &quot;5-13&quot;: &quot;#444444&quot;,
                &quot;5-14&quot;: &quot;#444444&quot;,
                &quot;5-15&quot;: &quot;#444444&quot;,
                &quot;5-16&quot;: &quot;#444444&quot;,
                &quot;5-17&quot;: &quot;#444444&quot;,
                &quot;5-18&quot;: &quot;#444444&quot;,
                &quot;5-19&quot;: &quot;#444444&quot;,
                &quot;5-20&quot;: &quot;#444444&quot;,
                &quot;5-21&quot;: &quot;#444444&quot;,
                &quot;5-22&quot;: &quot;#444444&quot;,
                &quot;5-23&quot;: &quot;#444444&quot;,
                &quot;5-24&quot;: &quot;#444444&quot;,
                &quot;5-25&quot;: &quot;#444444&quot;,
                &quot;5-26&quot;: &quot;#444444&quot;,
                &quot;5-27&quot;: &quot;#444444&quot;,
                &quot;5-28&quot;: &quot;#444444&quot;,
                &quot;6-2&quot;: &quot;#444444&quot;,
                &quot;6-3&quot;: &quot;#444444&quot;,
                &quot;6-4&quot;: &quot;#444444&quot;,
                &quot;6-5&quot;: &quot;#444444&quot;,
                &quot;6-6&quot;: &quot;#444444&quot;,
                &quot;6-7&quot;: &quot;#444444&quot;,
                &quot;6-8&quot;: &quot;#444444&quot;,
                &quot;6-9&quot;: &quot;#444444&quot;,
                &quot;6-10&quot;: &quot;#444444&quot;,
                &quot;6-11&quot;: &quot;#444444&quot;,
                &quot;6-12&quot;: &quot;#444444&quot;,
                &quot;6-13&quot;: &quot;#444444&quot;,
                &quot;6-14&quot;: &quot;#444444&quot;,
                &quot;6-15&quot;: &quot;#444444&quot;,
                &quot;6-16&quot;: &quot;#444444&quot;,
                &quot;6-17&quot;: &quot;#444444&quot;,
                &quot;6-18&quot;: &quot;#444444&quot;,
                &quot;6-19&quot;: &quot;#444444&quot;,
                &quot;6-20&quot;: &quot;#444444&quot;,
                &quot;6-21&quot;: &quot;#444444&quot;,
                &quot;6-22&quot;: &quot;#444444&quot;,
                &quot;6-23&quot;: &quot;#444444&quot;,
                &quot;6-24&quot;: &quot;#444444&quot;,
                &quot;6-25&quot;: &quot;#444444&quot;,
                &quot;6-26&quot;: &quot;#444444&quot;,
                &quot;6-27&quot;: &quot;#444444&quot;,
                &quot;6-28&quot;: &quot;#444444&quot;,
                &quot;7-2&quot;: &quot;#444444&quot;,
                &quot;7-3&quot;: &quot;#444444&quot;,
                &quot;7-4&quot;: &quot;#444444&quot;,
                &quot;7-5&quot;: &quot;#444444&quot;,
                &quot;7-6&quot;: &quot;#444444&quot;,
                &quot;7-7&quot;: &quot;#444444&quot;,
                &quot;7-8&quot;: &quot;#444444&quot;,
                &quot;7-9&quot;: &quot;#444444&quot;,
                &quot;7-10&quot;: &quot;#444444&quot;,
                &quot;7-11&quot;: &quot;#444444&quot;,
                &quot;7-12&quot;: &quot;#444444&quot;,
                &quot;7-13&quot;: &quot;#444444&quot;,
                &quot;7-14&quot;: &quot;#444444&quot;,
                &quot;7-15&quot;: &quot;#444444&quot;,
                &quot;7-16&quot;: &quot;#444444&quot;,
                &quot;7-17&quot;: &quot;#444444&quot;,
                &quot;7-18&quot;: &quot;#444444&quot;,
                &quot;7-19&quot;: &quot;#444444&quot;,
                &quot;7-20&quot;: &quot;#444444&quot;,
                &quot;7-21&quot;: &quot;#444444&quot;,
                &quot;7-22&quot;: &quot;#444444&quot;,
                &quot;7-23&quot;: &quot;#444444&quot;,
                &quot;7-24&quot;: &quot;#444444&quot;,
                &quot;7-25&quot;: &quot;#444444&quot;,
                &quot;7-26&quot;: &quot;#444444&quot;,
                &quot;7-27&quot;: &quot;#444444&quot;,
                &quot;7-28&quot;: &quot;#444444&quot;,
                &quot;8-2&quot;: &quot;#444444&quot;,
                &quot;8-3&quot;: &quot;#444444&quot;,
                &quot;8-4&quot;: &quot;#444444&quot;,
                &quot;8-5&quot;: &quot;#444444&quot;,
                &quot;8-6&quot;: &quot;#444444&quot;,
                &quot;8-7&quot;: &quot;#444444&quot;,
                &quot;8-8&quot;: &quot;#444444&quot;,
                &quot;8-9&quot;: &quot;#444444&quot;,
                &quot;8-10&quot;: &quot;#444444&quot;,
                &quot;8-11&quot;: &quot;#444444&quot;,
                &quot;8-12&quot;: &quot;#444444&quot;,
                &quot;8-13&quot;: &quot;#444444&quot;,
                &quot;8-14&quot;: &quot;#444444&quot;,
                &quot;8-15&quot;: &quot;#444444&quot;,
                &quot;8-16&quot;: &quot;#444444&quot;,
                &quot;8-17&quot;: &quot;#444444&quot;,
                &quot;8-18&quot;: &quot;#444444&quot;,
                &quot;8-19&quot;: &quot;#444444&quot;,
                &quot;8-20&quot;: &quot;#444444&quot;,
                &quot;8-21&quot;: &quot;#444444&quot;,
                &quot;8-22&quot;: &quot;#444444&quot;,
                &quot;8-23&quot;: &quot;#444444&quot;,
                &quot;8-24&quot;: &quot;#444444&quot;,
                &quot;8-25&quot;: &quot;#444444&quot;,
                &quot;8-26&quot;: &quot;#444444&quot;,
                &quot;8-27&quot;: &quot;#444444&quot;,
                &quot;8-28&quot;: &quot;#444444&quot;,
                &quot;9-2&quot;: &quot;#444444&quot;,
                &quot;9-3&quot;: &quot;#444444&quot;,
                &quot;9-4&quot;: &quot;#444444&quot;,
                &quot;9-5&quot;: &quot;#444444&quot;,
                &quot;9-6&quot;: &quot;#444444&quot;,
                &quot;9-7&quot;: &quot;#444444&quot;,
                &quot;9-8&quot;: &quot;#444444&quot;,
                &quot;9-9&quot;: &quot;#444444&quot;,
                &quot;9-10&quot;: &quot;#444444&quot;,
                &quot;9-11&quot;: &quot;#444444&quot;,
                &quot;9-12&quot;: &quot;#444444&quot;,
                &quot;9-13&quot;: &quot;#444444&quot;,
                &quot;9-14&quot;: &quot;#444444&quot;,
                &quot;9-15&quot;: &quot;#444444&quot;,
                &quot;9-16&quot;: &quot;#444444&quot;,
                &quot;9-17&quot;: &quot;#444444&quot;,
                &quot;9-18&quot;: &quot;#444444&quot;,
                &quot;9-19&quot;: &quot;#444444&quot;,
                &quot;9-20&quot;: &quot;#444444&quot;,
                &quot;9-21&quot;: &quot;#444444&quot;,
                &quot;9-22&quot;: &quot;#444444&quot;,
                &quot;9-23&quot;: &quot;#444444&quot;,
                &quot;9-24&quot;: &quot;#444444&quot;,
                &quot;9-25&quot;: &quot;#444444&quot;,
                &quot;9-26&quot;: &quot;#444444&quot;,
                &quot;9-27&quot;: &quot;#444444&quot;,
                &quot;9-28&quot;: &quot;#444444&quot;,
                &quot;10-2&quot;: &quot;#444444&quot;,
                &quot;10-3&quot;: &quot;#444444&quot;,
                &quot;10-4&quot;: &quot;#444444&quot;,
                &quot;10-5&quot;: &quot;#444444&quot;,
                &quot;10-6&quot;: &quot;#444444&quot;,
                &quot;10-7&quot;: &quot;#444444&quot;,
                &quot;10-8&quot;: &quot;#444444&quot;,
                &quot;10-9&quot;: &quot;#444444&quot;,
                &quot;10-10&quot;: &quot;#444444&quot;,
                &quot;10-11&quot;: &quot;#444444&quot;,
                &quot;10-12&quot;: &quot;#444444&quot;,
                &quot;10-13&quot;: &quot;#444444&quot;,
                &quot;10-14&quot;: &quot;#444444&quot;,
                &quot;10-15&quot;: &quot;#444444&quot;,
                &quot;10-16&quot;: &quot;#444444&quot;,
                &quot;10-17&quot;: &quot;#444444&quot;,
                &quot;10-18&quot;: &quot;#444444&quot;,
                &quot;10-19&quot;: &quot;#444444&quot;,
                &quot;10-20&quot;: &quot;#444444&quot;,
                &quot;10-21&quot;: &quot;#444444&quot;,
                &quot;10-22&quot;: &quot;#444444&quot;,
                &quot;10-23&quot;: &quot;#444444&quot;,
                &quot;10-24&quot;: &quot;#444444&quot;,
                &quot;10-25&quot;: &quot;#444444&quot;,
                &quot;10-26&quot;: &quot;#444444&quot;,
                &quot;10-27&quot;: &quot;#444444&quot;,
                &quot;10-28&quot;: &quot;#444444&quot;,
                &quot;11-2&quot;: &quot;#444444&quot;,
                &quot;11-3&quot;: &quot;#444444&quot;,
                &quot;11-4&quot;: &quot;#444444&quot;,
                &quot;11-5&quot;: &quot;#444444&quot;,
                &quot;11-6&quot;: &quot;#444444&quot;,
                &quot;11-7&quot;: &quot;#444444&quot;,
                &quot;11-8&quot;: &quot;#444444&quot;,
                &quot;11-9&quot;: &quot;#444444&quot;,
                &quot;11-10&quot;: &quot;#444444&quot;,
                &quot;11-11&quot;: &quot;#444444&quot;,
                &quot;11-12&quot;: &quot;#444444&quot;,
                &quot;11-13&quot;: &quot;#444444&quot;,
                &quot;11-14&quot;: &quot;#444444&quot;,
                &quot;11-15&quot;: &quot;#444444&quot;,
                &quot;11-16&quot;: &quot;#444444&quot;,
                &quot;11-17&quot;: &quot;#444444&quot;,
                &quot;11-18&quot;: &quot;#444444&quot;,
                &quot;11-19&quot;: &quot;#444444&quot;,
                &quot;11-20&quot;: &quot;#444444&quot;,
                &quot;11-21&quot;: &quot;#444444&quot;,
                &quot;11-22&quot;: &quot;#444444&quot;,
                &quot;11-23&quot;: &quot;#444444&quot;,
                &quot;11-24&quot;: &quot;#444444&quot;,
                &quot;11-25&quot;: &quot;#444444&quot;,
                &quot;11-26&quot;: &quot;#444444&quot;,
                &quot;11-27&quot;: &quot;#444444&quot;,
                &quot;11-28&quot;: &quot;#444444&quot;,
                &quot;12-2&quot;: &quot;#444444&quot;,
                &quot;12-3&quot;: &quot;#444444&quot;,
                &quot;12-4&quot;: &quot;#444444&quot;,
                &quot;12-5&quot;: &quot;#444444&quot;,
                &quot;12-6&quot;: &quot;#444444&quot;,
                &quot;12-7&quot;: &quot;#444444&quot;,
                &quot;12-8&quot;: &quot;#444444&quot;,
                &quot;12-9&quot;: &quot;#444444&quot;,
                &quot;12-10&quot;: &quot;#444444&quot;,
                &quot;12-11&quot;: &quot;#444444&quot;,
                &quot;12-12&quot;: &quot;#444444&quot;,
                &quot;12-13&quot;: &quot;#444444&quot;,
                &quot;12-14&quot;: &quot;#444444&quot;,
                &quot;12-15&quot;: &quot;#444444&quot;,
                &quot;12-16&quot;: &quot;#444444&quot;,
                &quot;12-17&quot;: &quot;#444444&quot;,
                &quot;12-18&quot;: &quot;#444444&quot;,
                &quot;12-19&quot;: &quot;#444444&quot;,
                &quot;12-20&quot;: &quot;#444444&quot;,
                &quot;12-21&quot;: &quot;#444444&quot;,
                &quot;12-22&quot;: &quot;#444444&quot;,
                &quot;12-23&quot;: &quot;#444444&quot;,
                &quot;12-24&quot;: &quot;#444444&quot;,
                &quot;12-25&quot;: &quot;#444444&quot;,
                &quot;12-26&quot;: &quot;#444444&quot;,
                &quot;12-27&quot;: &quot;#444444&quot;,
                &quot;12-28&quot;: &quot;#444444&quot;,
                &quot;13-2&quot;: &quot;#444444&quot;,
                &quot;13-3&quot;: &quot;#444444&quot;,
                &quot;13-4&quot;: &quot;#444444&quot;,
                &quot;13-5&quot;: &quot;#444444&quot;,
                &quot;13-6&quot;: &quot;#444444&quot;,
                &quot;13-7&quot;: &quot;#444444&quot;,
                &quot;13-8&quot;: &quot;#444444&quot;,
                &quot;13-9&quot;: &quot;#444444&quot;,
                &quot;13-10&quot;: &quot;#444444&quot;,
                &quot;13-11&quot;: &quot;#444444&quot;,
                &quot;13-12&quot;: &quot;#444444&quot;,
                &quot;13-13&quot;: &quot;#444444&quot;,
                &quot;13-14&quot;: &quot;#444444&quot;,
                &quot;13-15&quot;: &quot;#444444&quot;,
                &quot;13-16&quot;: &quot;#444444&quot;,
                &quot;13-17&quot;: &quot;#444444&quot;,
                &quot;13-18&quot;: &quot;#444444&quot;,
                &quot;13-19&quot;: &quot;#444444&quot;,
                &quot;13-20&quot;: &quot;#444444&quot;,
                &quot;13-21&quot;: &quot;#444444&quot;,
                &quot;13-22&quot;: &quot;#444444&quot;,
                &quot;13-23&quot;: &quot;#444444&quot;,
                &quot;13-24&quot;: &quot;#444444&quot;,
                &quot;13-25&quot;: &quot;#444444&quot;,
                &quot;13-26&quot;: &quot;#444444&quot;,
                &quot;13-27&quot;: &quot;#444444&quot;,
                &quot;13-28&quot;: &quot;#444444&quot;,
                &quot;14-2&quot;: &quot;#444444&quot;,
                &quot;14-3&quot;: &quot;#444444&quot;,
                &quot;14-4&quot;: &quot;#444444&quot;,
                &quot;14-5&quot;: &quot;#444444&quot;,
                &quot;14-6&quot;: &quot;#444444&quot;,
                &quot;14-7&quot;: &quot;#444444&quot;,
                &quot;14-8&quot;: &quot;#444444&quot;,
                &quot;14-9&quot;: &quot;#444444&quot;,
                &quot;14-10&quot;: &quot;#444444&quot;,
                &quot;14-11&quot;: &quot;#444444&quot;,
                &quot;14-12&quot;: &quot;#444444&quot;,
                &quot;14-13&quot;: &quot;#444444&quot;,
                &quot;14-14&quot;: &quot;#444444&quot;,
                &quot;14-15&quot;: &quot;#444444&quot;,
                &quot;14-16&quot;: &quot;#444444&quot;,
                &quot;14-17&quot;: &quot;#444444&quot;,
                &quot;14-18&quot;: &quot;#444444&quot;,
                &quot;14-19&quot;: &quot;#444444&quot;,
                &quot;14-20&quot;: &quot;#444444&quot;,
                &quot;14-21&quot;: &quot;#444444&quot;,
                &quot;14-22&quot;: &quot;#444444&quot;,
                &quot;14-23&quot;: &quot;#444444&quot;,
                &quot;14-24&quot;: &quot;#444444&quot;,
                &quot;14-25&quot;: &quot;#444444&quot;,
                &quot;14-26&quot;: &quot;#444444&quot;,
                &quot;14-27&quot;: &quot;#444444&quot;,
                &quot;14-28&quot;: &quot;#444444&quot;,
                &quot;15-2&quot;: &quot;#444444&quot;,
                &quot;15-3&quot;: &quot;#444444&quot;,
                &quot;15-4&quot;: &quot;#444444&quot;,
                &quot;15-5&quot;: &quot;#444444&quot;,
                &quot;15-6&quot;: &quot;#444444&quot;,
                &quot;15-7&quot;: &quot;#444444&quot;,
                &quot;15-8&quot;: &quot;#444444&quot;,
                &quot;15-9&quot;: &quot;#444444&quot;,
                &quot;15-10&quot;: &quot;#444444&quot;,
                &quot;15-11&quot;: &quot;#444444&quot;,
                &quot;15-12&quot;: &quot;#444444&quot;,
                &quot;15-13&quot;: &quot;#444444&quot;,
                &quot;15-14&quot;: &quot;#444444&quot;,
                &quot;15-15&quot;: &quot;#444444&quot;,
                &quot;15-16&quot;: &quot;#444444&quot;,
                &quot;15-17&quot;: &quot;#444444&quot;,
                &quot;15-18&quot;: &quot;#444444&quot;,
                &quot;15-19&quot;: &quot;#444444&quot;,
                &quot;15-20&quot;: &quot;#444444&quot;,
                &quot;15-21&quot;: &quot;#444444&quot;,
                &quot;15-22&quot;: &quot;#444444&quot;,
                &quot;15-23&quot;: &quot;#444444&quot;,
                &quot;15-24&quot;: &quot;#444444&quot;,
                &quot;15-25&quot;: &quot;#444444&quot;,
                &quot;15-26&quot;: &quot;#444444&quot;,
                &quot;15-27&quot;: &quot;#444444&quot;,
                &quot;15-28&quot;: &quot;#444444&quot;,
                &quot;16-2&quot;: &quot;#444444&quot;,
                &quot;16-3&quot;: &quot;#444444&quot;,
                &quot;16-4&quot;: &quot;#444444&quot;,
                &quot;16-5&quot;: &quot;#444444&quot;,
                &quot;16-6&quot;: &quot;#444444&quot;,
                &quot;16-7&quot;: &quot;#444444&quot;,
                &quot;16-8&quot;: &quot;#444444&quot;,
                &quot;16-9&quot;: &quot;#444444&quot;,
                &quot;16-10&quot;: &quot;#444444&quot;,
                &quot;16-11&quot;: &quot;#444444&quot;,
                &quot;16-12&quot;: &quot;#444444&quot;,
                &quot;16-13&quot;: &quot;#444444&quot;,
                &quot;16-14&quot;: &quot;#444444&quot;,
                &quot;16-15&quot;: &quot;#444444&quot;,
                &quot;16-16&quot;: &quot;#444444&quot;,
                &quot;16-17&quot;: &quot;#444444&quot;,
                &quot;16-18&quot;: &quot;#444444&quot;,
                &quot;16-19&quot;: &quot;#444444&quot;,
                &quot;16-20&quot;: &quot;#444444&quot;,
                &quot;16-21&quot;: &quot;#444444&quot;,
                &quot;16-22&quot;: &quot;#444444&quot;,
                &quot;16-23&quot;: &quot;#444444&quot;,
                &quot;16-24&quot;: &quot;#444444&quot;,
                &quot;16-25&quot;: &quot;#444444&quot;,
                &quot;16-26&quot;: &quot;#444444&quot;,
                &quot;16-27&quot;: &quot;#444444&quot;,
                &quot;16-28&quot;: &quot;#444444&quot;,
                &quot;17-2&quot;: &quot;#444444&quot;,
                &quot;17-3&quot;: &quot;#444444&quot;,
                &quot;17-4&quot;: &quot;#444444&quot;,
                &quot;17-5&quot;: &quot;#444444&quot;,
                &quot;17-6&quot;: &quot;#444444&quot;,
                &quot;17-7&quot;: &quot;#444444&quot;,
                &quot;17-8&quot;: &quot;#444444&quot;,
                &quot;17-9&quot;: &quot;#444444&quot;,
                &quot;17-10&quot;: &quot;#444444&quot;,
                &quot;17-11&quot;: &quot;#444444&quot;,
                &quot;17-12&quot;: &quot;#444444&quot;,
                &quot;17-13&quot;: &quot;#444444&quot;,
                &quot;17-14&quot;: &quot;#444444&quot;,
                &quot;17-15&quot;: &quot;#444444&quot;,
                &quot;17-16&quot;: &quot;#444444&quot;,
                &quot;17-17&quot;: &quot;#444444&quot;,
                &quot;17-18&quot;: &quot;#444444&quot;,
                &quot;17-19&quot;: &quot;#444444&quot;,
                &quot;17-20&quot;: &quot;#444444&quot;,
                &quot;17-21&quot;: &quot;#444444&quot;,
                &quot;17-22&quot;: &quot;#444444&quot;,
                &quot;17-23&quot;: &quot;#444444&quot;,
                &quot;17-24&quot;: &quot;#444444&quot;,
                &quot;17-25&quot;: &quot;#444444&quot;,
                &quot;17-26&quot;: &quot;#444444&quot;,
                &quot;17-27&quot;: &quot;#444444&quot;,
                &quot;17-28&quot;: &quot;#444444&quot;,
                &quot;18-2&quot;: &quot;#444444&quot;,
                &quot;18-3&quot;: &quot;#444444&quot;,
                &quot;18-4&quot;: &quot;#444444&quot;,
                &quot;18-5&quot;: &quot;#444444&quot;,
                &quot;18-6&quot;: &quot;#444444&quot;,
                &quot;18-7&quot;: &quot;#444444&quot;,
                &quot;18-8&quot;: &quot;#444444&quot;,
                &quot;18-9&quot;: &quot;#444444&quot;,
                &quot;18-10&quot;: &quot;#444444&quot;,
                &quot;18-11&quot;: &quot;#444444&quot;,
                &quot;18-12&quot;: &quot;#444444&quot;,
                &quot;18-13&quot;: &quot;#444444&quot;,
                &quot;18-14&quot;: &quot;#444444&quot;,
                &quot;18-15&quot;: &quot;#444444&quot;,
                &quot;18-16&quot;: &quot;#444444&quot;,
                &quot;18-17&quot;: &quot;#444444&quot;,
                &quot;18-18&quot;: &quot;#444444&quot;,
                &quot;18-19&quot;: &quot;#444444&quot;,
                &quot;18-20&quot;: &quot;#444444&quot;,
                &quot;18-21&quot;: &quot;#444444&quot;,
                &quot;18-22&quot;: &quot;#444444&quot;,
                &quot;18-23&quot;: &quot;#444444&quot;,
                &quot;18-24&quot;: &quot;#444444&quot;,
                &quot;18-25&quot;: &quot;#444444&quot;,
                &quot;18-26&quot;: &quot;#444444&quot;,
                &quot;18-27&quot;: &quot;#444444&quot;,
                &quot;18-28&quot;: &quot;#444444&quot;
            },
            &quot;walls_data&quot;: {
                &quot;wallColor&quot;: &quot;#444444&quot;,
                &quot;2-2&quot;: &quot;#444444&quot;,
                &quot;2-3&quot;: &quot;#444444&quot;,
                &quot;2-4&quot;: &quot;#444444&quot;,
                &quot;2-5&quot;: &quot;#444444&quot;,
                &quot;2-6&quot;: &quot;#444444&quot;,
                &quot;2-7&quot;: &quot;#444444&quot;,
                &quot;2-8&quot;: &quot;#444444&quot;,
                &quot;2-9&quot;: &quot;#444444&quot;,
                &quot;2-10&quot;: &quot;#444444&quot;,
                &quot;2-11&quot;: &quot;#444444&quot;,
                &quot;2-12&quot;: &quot;#444444&quot;,
                &quot;2-13&quot;: &quot;#444444&quot;,
                &quot;2-14&quot;: &quot;#444444&quot;,
                &quot;2-15&quot;: &quot;#444444&quot;,
                &quot;2-16&quot;: &quot;#444444&quot;,
                &quot;2-17&quot;: &quot;#444444&quot;,
                &quot;2-18&quot;: &quot;#444444&quot;,
                &quot;2-19&quot;: &quot;#444444&quot;,
                &quot;2-20&quot;: &quot;#444444&quot;,
                &quot;2-21&quot;: &quot;#444444&quot;,
                &quot;2-22&quot;: &quot;#444444&quot;,
                &quot;2-23&quot;: &quot;#444444&quot;,
                &quot;2-24&quot;: &quot;#444444&quot;,
                &quot;2-25&quot;: &quot;#444444&quot;,
                &quot;2-26&quot;: &quot;#444444&quot;,
                &quot;2-27&quot;: &quot;#444444&quot;,
                &quot;2-28&quot;: &quot;#444444&quot;,
                &quot;3-2&quot;: &quot;#444444&quot;,
                &quot;3-3&quot;: &quot;#444444&quot;,
                &quot;3-4&quot;: &quot;#444444&quot;,
                &quot;3-5&quot;: &quot;#444444&quot;,
                &quot;3-6&quot;: &quot;#444444&quot;,
                &quot;3-7&quot;: &quot;#444444&quot;,
                &quot;3-8&quot;: &quot;#444444&quot;,
                &quot;3-9&quot;: &quot;#444444&quot;,
                &quot;3-10&quot;: &quot;#444444&quot;,
                &quot;3-11&quot;: &quot;#444444&quot;,
                &quot;3-12&quot;: &quot;#444444&quot;,
                &quot;3-13&quot;: &quot;#444444&quot;,
                &quot;3-14&quot;: &quot;#444444&quot;,
                &quot;3-15&quot;: &quot;#444444&quot;,
                &quot;3-16&quot;: &quot;#444444&quot;,
                &quot;3-17&quot;: &quot;#444444&quot;,
                &quot;3-18&quot;: &quot;#444444&quot;,
                &quot;3-19&quot;: &quot;#444444&quot;,
                &quot;3-20&quot;: &quot;#444444&quot;,
                &quot;3-21&quot;: &quot;#444444&quot;,
                &quot;3-22&quot;: &quot;#444444&quot;,
                &quot;3-23&quot;: &quot;#444444&quot;,
                &quot;3-24&quot;: &quot;#444444&quot;,
                &quot;3-25&quot;: &quot;#444444&quot;,
                &quot;3-26&quot;: &quot;#444444&quot;,
                &quot;3-27&quot;: &quot;#444444&quot;,
                &quot;3-28&quot;: &quot;#444444&quot;,
                &quot;4-2&quot;: &quot;#444444&quot;,
                &quot;4-3&quot;: &quot;#444444&quot;,
                &quot;4-4&quot;: &quot;#444444&quot;,
                &quot;4-5&quot;: &quot;#444444&quot;,
                &quot;4-6&quot;: &quot;#444444&quot;,
                &quot;4-7&quot;: &quot;#444444&quot;,
                &quot;4-8&quot;: &quot;#444444&quot;,
                &quot;4-9&quot;: &quot;#444444&quot;,
                &quot;4-10&quot;: &quot;#444444&quot;,
                &quot;4-11&quot;: &quot;#444444&quot;,
                &quot;4-12&quot;: &quot;#444444&quot;,
                &quot;4-13&quot;: &quot;#444444&quot;,
                &quot;4-14&quot;: &quot;#444444&quot;,
                &quot;4-15&quot;: &quot;#444444&quot;,
                &quot;4-16&quot;: &quot;#444444&quot;,
                &quot;4-17&quot;: &quot;#444444&quot;,
                &quot;4-18&quot;: &quot;#444444&quot;,
                &quot;4-19&quot;: &quot;#444444&quot;,
                &quot;4-20&quot;: &quot;#444444&quot;,
                &quot;4-21&quot;: &quot;#444444&quot;,
                &quot;4-22&quot;: &quot;#444444&quot;,
                &quot;4-23&quot;: &quot;#444444&quot;,
                &quot;4-24&quot;: &quot;#444444&quot;,
                &quot;4-25&quot;: &quot;#444444&quot;,
                &quot;4-26&quot;: &quot;#444444&quot;,
                &quot;4-27&quot;: &quot;#444444&quot;,
                &quot;4-28&quot;: &quot;#444444&quot;,
                &quot;5-2&quot;: &quot;#444444&quot;,
                &quot;5-3&quot;: &quot;#444444&quot;,
                &quot;5-4&quot;: &quot;#444444&quot;,
                &quot;5-5&quot;: &quot;#444444&quot;,
                &quot;5-6&quot;: &quot;#444444&quot;,
                &quot;5-7&quot;: &quot;#444444&quot;,
                &quot;5-8&quot;: &quot;#444444&quot;,
                &quot;5-9&quot;: &quot;#444444&quot;,
                &quot;5-10&quot;: &quot;#444444&quot;,
                &quot;5-11&quot;: &quot;#444444&quot;,
                &quot;5-12&quot;: &quot;#444444&quot;,
                &quot;5-13&quot;: &quot;#444444&quot;,
                &quot;5-14&quot;: &quot;#444444&quot;,
                &quot;5-15&quot;: &quot;#444444&quot;,
                &quot;5-16&quot;: &quot;#444444&quot;,
                &quot;5-17&quot;: &quot;#444444&quot;,
                &quot;5-18&quot;: &quot;#444444&quot;,
                &quot;5-19&quot;: &quot;#444444&quot;,
                &quot;5-20&quot;: &quot;#444444&quot;,
                &quot;5-21&quot;: &quot;#444444&quot;,
                &quot;5-22&quot;: &quot;#444444&quot;,
                &quot;5-23&quot;: &quot;#444444&quot;,
                &quot;5-24&quot;: &quot;#444444&quot;,
                &quot;5-25&quot;: &quot;#444444&quot;,
                &quot;5-26&quot;: &quot;#444444&quot;,
                &quot;5-27&quot;: &quot;#444444&quot;,
                &quot;5-28&quot;: &quot;#444444&quot;,
                &quot;6-2&quot;: &quot;#444444&quot;,
                &quot;6-3&quot;: &quot;#444444&quot;,
                &quot;6-4&quot;: &quot;#444444&quot;,
                &quot;6-5&quot;: &quot;#444444&quot;,
                &quot;6-6&quot;: &quot;#444444&quot;,
                &quot;6-7&quot;: &quot;#444444&quot;,
                &quot;6-8&quot;: &quot;#444444&quot;,
                &quot;6-9&quot;: &quot;#444444&quot;,
                &quot;6-10&quot;: &quot;#444444&quot;,
                &quot;6-11&quot;: &quot;#444444&quot;,
                &quot;6-12&quot;: &quot;#444444&quot;,
                &quot;6-13&quot;: &quot;#444444&quot;,
                &quot;6-14&quot;: &quot;#444444&quot;,
                &quot;6-15&quot;: &quot;#444444&quot;,
                &quot;6-16&quot;: &quot;#444444&quot;,
                &quot;6-17&quot;: &quot;#444444&quot;,
                &quot;6-18&quot;: &quot;#444444&quot;,
                &quot;6-19&quot;: &quot;#444444&quot;,
                &quot;6-20&quot;: &quot;#444444&quot;,
                &quot;6-21&quot;: &quot;#444444&quot;,
                &quot;6-22&quot;: &quot;#444444&quot;,
                &quot;6-23&quot;: &quot;#444444&quot;,
                &quot;6-24&quot;: &quot;#444444&quot;,
                &quot;6-25&quot;: &quot;#444444&quot;,
                &quot;6-26&quot;: &quot;#444444&quot;,
                &quot;6-27&quot;: &quot;#444444&quot;,
                &quot;6-28&quot;: &quot;#444444&quot;,
                &quot;7-2&quot;: &quot;#444444&quot;,
                &quot;7-3&quot;: &quot;#444444&quot;,
                &quot;7-4&quot;: &quot;#444444&quot;,
                &quot;7-5&quot;: &quot;#444444&quot;,
                &quot;7-6&quot;: &quot;#444444&quot;,
                &quot;7-7&quot;: &quot;#444444&quot;,
                &quot;7-8&quot;: &quot;#444444&quot;,
                &quot;7-9&quot;: &quot;#444444&quot;,
                &quot;7-10&quot;: &quot;#444444&quot;,
                &quot;7-11&quot;: &quot;#444444&quot;,
                &quot;7-12&quot;: &quot;#444444&quot;,
                &quot;7-13&quot;: &quot;#444444&quot;,
                &quot;7-14&quot;: &quot;#444444&quot;,
                &quot;7-15&quot;: &quot;#444444&quot;,
                &quot;7-16&quot;: &quot;#444444&quot;,
                &quot;7-17&quot;: &quot;#444444&quot;,
                &quot;7-18&quot;: &quot;#444444&quot;,
                &quot;7-19&quot;: &quot;#444444&quot;,
                &quot;7-20&quot;: &quot;#444444&quot;,
                &quot;7-21&quot;: &quot;#444444&quot;,
                &quot;7-22&quot;: &quot;#444444&quot;,
                &quot;7-23&quot;: &quot;#444444&quot;,
                &quot;7-24&quot;: &quot;#444444&quot;,
                &quot;7-25&quot;: &quot;#444444&quot;,
                &quot;7-26&quot;: &quot;#444444&quot;,
                &quot;7-27&quot;: &quot;#444444&quot;,
                &quot;7-28&quot;: &quot;#444444&quot;,
                &quot;8-2&quot;: &quot;#444444&quot;,
                &quot;8-3&quot;: &quot;#444444&quot;,
                &quot;8-4&quot;: &quot;#444444&quot;,
                &quot;8-5&quot;: &quot;#444444&quot;,
                &quot;8-6&quot;: &quot;#444444&quot;,
                &quot;8-7&quot;: &quot;#444444&quot;,
                &quot;8-8&quot;: &quot;#444444&quot;,
                &quot;8-9&quot;: &quot;#444444&quot;,
                &quot;8-10&quot;: &quot;#444444&quot;,
                &quot;8-11&quot;: &quot;#444444&quot;,
                &quot;8-12&quot;: &quot;#444444&quot;,
                &quot;8-13&quot;: &quot;#444444&quot;,
                &quot;8-14&quot;: &quot;#444444&quot;,
                &quot;8-15&quot;: &quot;#444444&quot;,
                &quot;8-16&quot;: &quot;#444444&quot;,
                &quot;8-17&quot;: &quot;#444444&quot;,
                &quot;8-18&quot;: &quot;#444444&quot;,
                &quot;8-19&quot;: &quot;#444444&quot;,
                &quot;8-20&quot;: &quot;#444444&quot;,
                &quot;8-21&quot;: &quot;#444444&quot;,
                &quot;8-22&quot;: &quot;#444444&quot;,
                &quot;8-23&quot;: &quot;#444444&quot;,
                &quot;8-24&quot;: &quot;#444444&quot;,
                &quot;8-25&quot;: &quot;#444444&quot;,
                &quot;8-26&quot;: &quot;#444444&quot;,
                &quot;8-27&quot;: &quot;#444444&quot;,
                &quot;8-28&quot;: &quot;#444444&quot;,
                &quot;9-2&quot;: &quot;#444444&quot;,
                &quot;9-3&quot;: &quot;#444444&quot;,
                &quot;9-4&quot;: &quot;#444444&quot;,
                &quot;9-5&quot;: &quot;#444444&quot;,
                &quot;9-6&quot;: &quot;#444444&quot;,
                &quot;9-7&quot;: &quot;#444444&quot;,
                &quot;9-8&quot;: &quot;#444444&quot;,
                &quot;9-9&quot;: &quot;#444444&quot;,
                &quot;9-10&quot;: &quot;#444444&quot;,
                &quot;9-11&quot;: &quot;#444444&quot;,
                &quot;9-12&quot;: &quot;#444444&quot;,
                &quot;9-13&quot;: &quot;#444444&quot;,
                &quot;9-14&quot;: &quot;#444444&quot;,
                &quot;9-15&quot;: &quot;#444444&quot;,
                &quot;9-16&quot;: &quot;#444444&quot;,
                &quot;9-17&quot;: &quot;#444444&quot;,
                &quot;9-18&quot;: &quot;#444444&quot;,
                &quot;9-19&quot;: &quot;#444444&quot;,
                &quot;9-20&quot;: &quot;#444444&quot;,
                &quot;9-21&quot;: &quot;#444444&quot;,
                &quot;9-22&quot;: &quot;#444444&quot;,
                &quot;9-23&quot;: &quot;#444444&quot;,
                &quot;9-24&quot;: &quot;#444444&quot;,
                &quot;9-25&quot;: &quot;#444444&quot;,
                &quot;9-26&quot;: &quot;#444444&quot;,
                &quot;9-27&quot;: &quot;#444444&quot;,
                &quot;9-28&quot;: &quot;#444444&quot;,
                &quot;10-2&quot;: &quot;#444444&quot;,
                &quot;10-3&quot;: &quot;#444444&quot;,
                &quot;10-4&quot;: &quot;#444444&quot;,
                &quot;10-5&quot;: &quot;#444444&quot;,
                &quot;10-6&quot;: &quot;#444444&quot;,
                &quot;10-7&quot;: &quot;#444444&quot;,
                &quot;10-8&quot;: &quot;#444444&quot;,
                &quot;10-9&quot;: &quot;#444444&quot;,
                &quot;10-10&quot;: &quot;#444444&quot;,
                &quot;10-11&quot;: &quot;#444444&quot;,
                &quot;10-12&quot;: &quot;#444444&quot;,
                &quot;10-13&quot;: &quot;#444444&quot;,
                &quot;10-14&quot;: &quot;#444444&quot;,
                &quot;10-15&quot;: &quot;#444444&quot;,
                &quot;10-16&quot;: &quot;#444444&quot;,
                &quot;10-17&quot;: &quot;#444444&quot;,
                &quot;10-18&quot;: &quot;#444444&quot;,
                &quot;10-19&quot;: &quot;#444444&quot;,
                &quot;10-20&quot;: &quot;#444444&quot;,
                &quot;10-21&quot;: &quot;#444444&quot;,
                &quot;10-22&quot;: &quot;#444444&quot;,
                &quot;10-23&quot;: &quot;#444444&quot;,
                &quot;10-24&quot;: &quot;#444444&quot;,
                &quot;10-25&quot;: &quot;#444444&quot;,
                &quot;10-26&quot;: &quot;#444444&quot;,
                &quot;10-27&quot;: &quot;#444444&quot;,
                &quot;10-28&quot;: &quot;#444444&quot;,
                &quot;11-2&quot;: &quot;#444444&quot;,
                &quot;11-3&quot;: &quot;#444444&quot;,
                &quot;11-4&quot;: &quot;#444444&quot;,
                &quot;11-5&quot;: &quot;#444444&quot;,
                &quot;11-6&quot;: &quot;#444444&quot;,
                &quot;11-7&quot;: &quot;#444444&quot;,
                &quot;11-8&quot;: &quot;#444444&quot;,
                &quot;11-9&quot;: &quot;#444444&quot;,
                &quot;11-10&quot;: &quot;#444444&quot;,
                &quot;11-11&quot;: &quot;#444444&quot;,
                &quot;11-12&quot;: &quot;#444444&quot;,
                &quot;11-13&quot;: &quot;#444444&quot;,
                &quot;11-14&quot;: &quot;#444444&quot;,
                &quot;11-15&quot;: &quot;#444444&quot;,
                &quot;11-16&quot;: &quot;#444444&quot;,
                &quot;11-17&quot;: &quot;#444444&quot;,
                &quot;11-18&quot;: &quot;#444444&quot;,
                &quot;11-19&quot;: &quot;#444444&quot;,
                &quot;11-20&quot;: &quot;#444444&quot;,
                &quot;11-21&quot;: &quot;#444444&quot;,
                &quot;11-22&quot;: &quot;#444444&quot;,
                &quot;11-23&quot;: &quot;#444444&quot;,
                &quot;11-24&quot;: &quot;#444444&quot;,
                &quot;11-25&quot;: &quot;#444444&quot;,
                &quot;11-26&quot;: &quot;#444444&quot;,
                &quot;11-27&quot;: &quot;#444444&quot;,
                &quot;11-28&quot;: &quot;#444444&quot;,
                &quot;12-2&quot;: &quot;#444444&quot;,
                &quot;12-3&quot;: &quot;#444444&quot;,
                &quot;12-4&quot;: &quot;#444444&quot;,
                &quot;12-5&quot;: &quot;#444444&quot;,
                &quot;12-6&quot;: &quot;#444444&quot;,
                &quot;12-7&quot;: &quot;#444444&quot;,
                &quot;12-8&quot;: &quot;#444444&quot;,
                &quot;12-9&quot;: &quot;#444444&quot;,
                &quot;12-10&quot;: &quot;#444444&quot;,
                &quot;12-11&quot;: &quot;#444444&quot;,
                &quot;12-12&quot;: &quot;#444444&quot;,
                &quot;12-13&quot;: &quot;#444444&quot;,
                &quot;12-14&quot;: &quot;#444444&quot;,
                &quot;12-15&quot;: &quot;#444444&quot;,
                &quot;12-16&quot;: &quot;#444444&quot;,
                &quot;12-17&quot;: &quot;#444444&quot;,
                &quot;12-18&quot;: &quot;#444444&quot;,
                &quot;12-19&quot;: &quot;#444444&quot;,
                &quot;12-20&quot;: &quot;#444444&quot;,
                &quot;12-21&quot;: &quot;#444444&quot;,
                &quot;12-22&quot;: &quot;#444444&quot;,
                &quot;12-23&quot;: &quot;#444444&quot;,
                &quot;12-24&quot;: &quot;#444444&quot;,
                &quot;12-25&quot;: &quot;#444444&quot;,
                &quot;12-26&quot;: &quot;#444444&quot;,
                &quot;12-27&quot;: &quot;#444444&quot;,
                &quot;12-28&quot;: &quot;#444444&quot;,
                &quot;13-2&quot;: &quot;#444444&quot;,
                &quot;13-3&quot;: &quot;#444444&quot;,
                &quot;13-4&quot;: &quot;#444444&quot;,
                &quot;13-5&quot;: &quot;#444444&quot;,
                &quot;13-6&quot;: &quot;#444444&quot;,
                &quot;13-7&quot;: &quot;#444444&quot;,
                &quot;13-8&quot;: &quot;#444444&quot;,
                &quot;13-9&quot;: &quot;#444444&quot;,
                &quot;13-10&quot;: &quot;#444444&quot;,
                &quot;13-11&quot;: &quot;#444444&quot;,
                &quot;13-12&quot;: &quot;#444444&quot;,
                &quot;13-13&quot;: &quot;#444444&quot;,
                &quot;13-14&quot;: &quot;#444444&quot;,
                &quot;13-15&quot;: &quot;#444444&quot;,
                &quot;13-16&quot;: &quot;#444444&quot;,
                &quot;13-17&quot;: &quot;#444444&quot;,
                &quot;13-18&quot;: &quot;#444444&quot;,
                &quot;13-19&quot;: &quot;#444444&quot;,
                &quot;13-20&quot;: &quot;#444444&quot;,
                &quot;13-21&quot;: &quot;#444444&quot;,
                &quot;13-22&quot;: &quot;#444444&quot;,
                &quot;13-23&quot;: &quot;#444444&quot;,
                &quot;13-24&quot;: &quot;#444444&quot;,
                &quot;13-25&quot;: &quot;#444444&quot;,
                &quot;13-26&quot;: &quot;#444444&quot;,
                &quot;13-27&quot;: &quot;#444444&quot;,
                &quot;13-28&quot;: &quot;#444444&quot;,
                &quot;14-2&quot;: &quot;#444444&quot;,
                &quot;14-3&quot;: &quot;#444444&quot;,
                &quot;14-4&quot;: &quot;#444444&quot;,
                &quot;14-5&quot;: &quot;#444444&quot;,
                &quot;14-6&quot;: &quot;#444444&quot;,
                &quot;14-7&quot;: &quot;#444444&quot;,
                &quot;14-8&quot;: &quot;#444444&quot;,
                &quot;14-9&quot;: &quot;#444444&quot;,
                &quot;14-10&quot;: &quot;#444444&quot;,
                &quot;14-11&quot;: &quot;#444444&quot;,
                &quot;14-12&quot;: &quot;#444444&quot;,
                &quot;14-13&quot;: &quot;#444444&quot;,
                &quot;14-14&quot;: &quot;#444444&quot;,
                &quot;14-15&quot;: &quot;#444444&quot;,
                &quot;14-16&quot;: &quot;#444444&quot;,
                &quot;14-17&quot;: &quot;#444444&quot;,
                &quot;14-18&quot;: &quot;#444444&quot;,
                &quot;14-19&quot;: &quot;#444444&quot;,
                &quot;14-20&quot;: &quot;#444444&quot;,
                &quot;14-21&quot;: &quot;#444444&quot;,
                &quot;14-22&quot;: &quot;#444444&quot;,
                &quot;14-23&quot;: &quot;#444444&quot;,
                &quot;14-24&quot;: &quot;#444444&quot;,
                &quot;14-25&quot;: &quot;#444444&quot;,
                &quot;14-26&quot;: &quot;#444444&quot;,
                &quot;14-27&quot;: &quot;#444444&quot;,
                &quot;14-28&quot;: &quot;#444444&quot;,
                &quot;15-2&quot;: &quot;#444444&quot;,
                &quot;15-3&quot;: &quot;#444444&quot;,
                &quot;15-4&quot;: &quot;#444444&quot;,
                &quot;15-5&quot;: &quot;#444444&quot;,
                &quot;15-6&quot;: &quot;#444444&quot;,
                &quot;15-7&quot;: &quot;#444444&quot;,
                &quot;15-8&quot;: &quot;#444444&quot;,
                &quot;15-9&quot;: &quot;#444444&quot;,
                &quot;15-10&quot;: &quot;#444444&quot;,
                &quot;15-11&quot;: &quot;#444444&quot;,
                &quot;15-12&quot;: &quot;#444444&quot;,
                &quot;15-13&quot;: &quot;#444444&quot;,
                &quot;15-14&quot;: &quot;#444444&quot;,
                &quot;15-15&quot;: &quot;#444444&quot;,
                &quot;15-16&quot;: &quot;#444444&quot;,
                &quot;15-17&quot;: &quot;#444444&quot;,
                &quot;15-18&quot;: &quot;#444444&quot;,
                &quot;15-19&quot;: &quot;#444444&quot;,
                &quot;15-20&quot;: &quot;#444444&quot;,
                &quot;15-21&quot;: &quot;#444444&quot;,
                &quot;15-22&quot;: &quot;#444444&quot;,
                &quot;15-23&quot;: &quot;#444444&quot;,
                &quot;15-24&quot;: &quot;#444444&quot;,
                &quot;15-25&quot;: &quot;#444444&quot;,
                &quot;15-26&quot;: &quot;#444444&quot;,
                &quot;15-27&quot;: &quot;#444444&quot;,
                &quot;15-28&quot;: &quot;#444444&quot;,
                &quot;16-2&quot;: &quot;#444444&quot;,
                &quot;16-3&quot;: &quot;#444444&quot;,
                &quot;16-4&quot;: &quot;#444444&quot;,
                &quot;16-5&quot;: &quot;#444444&quot;,
                &quot;16-6&quot;: &quot;#444444&quot;,
                &quot;16-7&quot;: &quot;#444444&quot;,
                &quot;16-8&quot;: &quot;#444444&quot;,
                &quot;16-9&quot;: &quot;#444444&quot;,
                &quot;16-10&quot;: &quot;#444444&quot;,
                &quot;16-11&quot;: &quot;#444444&quot;,
                &quot;16-12&quot;: &quot;#444444&quot;,
                &quot;16-13&quot;: &quot;#444444&quot;,
                &quot;16-14&quot;: &quot;#444444&quot;,
                &quot;16-15&quot;: &quot;#444444&quot;,
                &quot;16-16&quot;: &quot;#444444&quot;,
                &quot;16-17&quot;: &quot;#444444&quot;,
                &quot;16-18&quot;: &quot;#444444&quot;,
                &quot;16-19&quot;: &quot;#444444&quot;,
                &quot;16-20&quot;: &quot;#444444&quot;,
                &quot;16-21&quot;: &quot;#444444&quot;,
                &quot;16-22&quot;: &quot;#444444&quot;,
                &quot;16-23&quot;: &quot;#444444&quot;,
                &quot;16-24&quot;: &quot;#444444&quot;,
                &quot;16-25&quot;: &quot;#444444&quot;,
                &quot;16-26&quot;: &quot;#444444&quot;,
                &quot;16-27&quot;: &quot;#444444&quot;,
                &quot;16-28&quot;: &quot;#444444&quot;,
                &quot;17-2&quot;: &quot;#444444&quot;,
                &quot;17-3&quot;: &quot;#444444&quot;,
                &quot;17-4&quot;: &quot;#444444&quot;,
                &quot;17-5&quot;: &quot;#444444&quot;,
                &quot;17-6&quot;: &quot;#444444&quot;,
                &quot;17-7&quot;: &quot;#444444&quot;,
                &quot;17-8&quot;: &quot;#444444&quot;,
                &quot;17-9&quot;: &quot;#444444&quot;,
                &quot;17-10&quot;: &quot;#444444&quot;,
                &quot;17-11&quot;: &quot;#444444&quot;,
                &quot;17-12&quot;: &quot;#444444&quot;,
                &quot;17-13&quot;: &quot;#444444&quot;,
                &quot;17-14&quot;: &quot;#444444&quot;,
                &quot;17-15&quot;: &quot;#444444&quot;,
                &quot;17-16&quot;: &quot;#444444&quot;,
                &quot;17-17&quot;: &quot;#444444&quot;,
                &quot;17-18&quot;: &quot;#444444&quot;,
                &quot;17-19&quot;: &quot;#444444&quot;,
                &quot;17-20&quot;: &quot;#444444&quot;,
                &quot;17-21&quot;: &quot;#444444&quot;,
                &quot;17-22&quot;: &quot;#444444&quot;,
                &quot;17-23&quot;: &quot;#444444&quot;,
                &quot;17-24&quot;: &quot;#444444&quot;,
                &quot;17-25&quot;: &quot;#444444&quot;,
                &quot;17-26&quot;: &quot;#444444&quot;,
                &quot;17-27&quot;: &quot;#444444&quot;,
                &quot;17-28&quot;: &quot;#444444&quot;,
                &quot;18-2&quot;: &quot;#444444&quot;,
                &quot;18-3&quot;: &quot;#444444&quot;,
                &quot;18-4&quot;: &quot;#444444&quot;,
                &quot;18-5&quot;: &quot;#444444&quot;,
                &quot;18-6&quot;: &quot;#444444&quot;,
                &quot;18-7&quot;: &quot;#444444&quot;,
                &quot;18-8&quot;: &quot;#444444&quot;,
                &quot;18-9&quot;: &quot;#444444&quot;,
                &quot;18-10&quot;: &quot;#444444&quot;,
                &quot;18-11&quot;: &quot;#444444&quot;,
                &quot;18-12&quot;: &quot;#444444&quot;,
                &quot;18-13&quot;: &quot;#444444&quot;,
                &quot;18-14&quot;: &quot;#444444&quot;,
                &quot;18-15&quot;: &quot;#444444&quot;,
                &quot;18-16&quot;: &quot;#444444&quot;,
                &quot;18-17&quot;: &quot;#444444&quot;,
                &quot;18-18&quot;: &quot;#444444&quot;,
                &quot;18-19&quot;: &quot;#444444&quot;,
                &quot;18-20&quot;: &quot;#444444&quot;,
                &quot;18-21&quot;: &quot;#444444&quot;,
                &quot;18-22&quot;: &quot;#444444&quot;,
                &quot;18-23&quot;: &quot;#444444&quot;,
                &quot;18-24&quot;: &quot;#444444&quot;,
                &quot;18-25&quot;: &quot;#444444&quot;,
                &quot;18-26&quot;: &quot;#444444&quot;,
                &quot;18-27&quot;: &quot;#444444&quot;,
                &quot;18-28&quot;: &quot;#444444&quot;
            },
            &quot;wallColor&quot;: &quot;#444444&quot;,
            &quot;wall_color&quot;: &quot;#444444&quot;,
            &quot;wallThickness&quot;: 25,
            &quot;wall_thickness&quot;: 25,
            &quot;floorTexture&quot;: &quot;textures/floor/floor2.png&quot;,
            &quot;floor_texture_id&quot;: 7,
            &quot;floorTextureAssetId&quot;: 7,
            &quot;starting_point_row&quot;: 14,
            &quot;starting_point_col&quot;: 20,
            &quot;floor_accepted&quot;: true,
            &quot;created_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-02-13T22:04:23.000000Z&quot;,
            &quot;startingPoint&quot;: {
                &quot;row&quot;: 14,
                &quot;col&quot;: 20
            },
            &quot;riddles&quot;: [
                {
                    &quot;id&quot;: &quot;riddle-7&quot;,
                    &quot;position&quot;: {
                        &quot;row&quot;: 3,
                        &quot;col&quot;: 5
                    },
                    &quot;type&quot;: &quot;knowledge&quot;,
                    &quot;data&quot;: {
                        &quot;title&quot;: &quot;Starożytna Mądrość&quot;,
                        &quot;question&quot;: &quot;Co jest cięższe: kilogram pierza czy kilogram ołowiu?&quot;,
                        &quot;answer&quot;: &quot;tyle samo&quot;,
                        &quot;hints&quot;: [],
                        &quot;options&quot;: []
                    },
                    &quot;assetId&quot;: 16,
                    &quot;texture&quot;: &quot;textures/riddles/riddle-1.png&quot;
                },
                {
                    &quot;id&quot;: &quot;riddle-8&quot;,
                    &quot;position&quot;: {
                        &quot;row&quot;: 6,
                        &quot;col&quot;: 7
                    },
                    &quot;type&quot;: &quot;knowledge&quot;,
                    &quot;data&quot;: {
                        &quot;title&quot;: &quot;Kosmiczna Zagadka&quot;,
                        &quot;question&quot;: &quot;Ile planet jest w naszym układzie słonecznym?&quot;,
                        &quot;answer&quot;: &quot;8&quot;,
                        &quot;hints&quot;: [],
                        &quot;options&quot;: []
                    },
                    &quot;assetId&quot;: 17,
                    &quot;texture&quot;: &quot;textures/riddles/riddle-2.png&quot;
                }
            ],
            &quot;props&quot;: [
                {
                    &quot;id&quot;: &quot;prop-55fb4e2e-24fa-4d02-a61d-748843271395&quot;,
                    &quot;name&quot;: &quot;Prop 2&quot;,
                    &quot;imageUrl&quot;: &quot;textures/props/prop-2.png&quot;,
                    &quot;assetId&quot;: 12,
                    &quot;position&quot;: {
                        &quot;row&quot;: 5,
                        &quot;col&quot;: 9
                    },
                    &quot;rotation&quot;: 90
                },
                {
                    &quot;id&quot;: &quot;prop-05a9c201-4a2c-4ab2-ad78-46f3aa3f8e41&quot;,
                    &quot;name&quot;: &quot;Prop 1&quot;,
                    &quot;imageUrl&quot;: &quot;textures/props/prop-1.png&quot;,
                    &quot;assetId&quot;: 11,
                    &quot;position&quot;: {
                        &quot;row&quot;: 9,
                        &quot;col&quot;: 27
                    },
                    &quot;rotation&quot;: 0
                },
                {
                    &quot;id&quot;: &quot;prop-a9560776-02f0-48b0-bac4-e482999597a8&quot;,
                    &quot;name&quot;: &quot;Prop 1&quot;,
                    &quot;imageUrl&quot;: &quot;textures/props/prop-1.png&quot;,
                    &quot;assetId&quot;: 11,
                    &quot;position&quot;: {
                        &quot;row&quot;: 12,
                        &quot;col&quot;: 9
                    },
                    &quot;rotation&quot;: 270
                },
                {
                    &quot;id&quot;: &quot;prop-7b7bb685-2202-406e-920d-bf68cd7a86e6&quot;,
                    &quot;name&quot;: &quot;Prop 5&quot;,
                    &quot;imageUrl&quot;: &quot;textures/props/prop-5.png&quot;,
                    &quot;assetId&quot;: 15,
                    &quot;position&quot;: {
                        &quot;row&quot;: 10,
                        &quot;col&quot;: 27
                    },
                    &quot;rotation&quot;: 0
                },
                {
                    &quot;id&quot;: &quot;prop-d556acd1-c9f9-4308-a562-09894aca6df9&quot;,
                    &quot;name&quot;: &quot;Prop 1&quot;,
                    &quot;imageUrl&quot;: &quot;textures/props/prop-1.png&quot;,
                    &quot;assetId&quot;: 11,
                    &quot;position&quot;: {
                        &quot;row&quot;: 8,
                        &quot;col&quot;: 14
                    },
                    &quot;rotation&quot;: 180
                }
            ],
            &quot;door&quot;: {
                &quot;row&quot;: 2,
                &quot;col&quot;: 27
            },
            &quot;doorTextureAssetId&quot;: 1
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-escape-room--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-escape-room--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-escape-room--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-escape-room--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-escape-room--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-escape-room--id-" data-method="GET"
      data-path="api/v1/escape-room/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-escape-room--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-escape-room--id-"
                    onclick="tryItOut('GETapi-v1-escape-room--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-escape-room--id-"
                    onclick="cancelTryOut('GETapi-v1-escape-room--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-escape-room--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/escape-room/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-escape-room--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-escape-room--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-escape-room--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the escape room. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpointy-GETapi-v1-escape-room--id--leaderboard">GET api/v1/escape-room/{id}/leaderboard</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-escape-room--id--leaderboard">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/escape-room/1/leaderboard" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/escape-room/1/leaderboard"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/escape-room/1/leaderboard';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-escape-room--id--leaderboard">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-escape-room--id--leaderboard" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-escape-room--id--leaderboard"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-escape-room--id--leaderboard"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-escape-room--id--leaderboard" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-escape-room--id--leaderboard">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-escape-room--id--leaderboard" data-method="GET"
      data-path="api/v1/escape-room/{id}/leaderboard"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-escape-room--id--leaderboard', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-escape-room--id--leaderboard"
                    onclick="tryItOut('GETapi-v1-escape-room--id--leaderboard');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-escape-room--id--leaderboard"
                    onclick="cancelTryOut('GETapi-v1-escape-room--id--leaderboard');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-escape-room--id--leaderboard"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/escape-room/{id}/leaderboard</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-escape-room--id--leaderboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-escape-room--id--leaderboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-escape-room--id--leaderboard"
               value="1"
               data-component="url">
    <br>
<p>The ID of the escape room. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpointy-POSTapi-v1-escape-room">POST api/v1/escape-room</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-escape-room">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/escape-room" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "name=b"\
    --form "description=Eius et animi quos velit et."\
    --form "rooms[][wallColor]=architecto"\
    --form "rooms[][wallThickness]=22"\
    --form "rooms[][floorTexture]=architecto"\
    --form "rooms[][floorTextureAssetId]=16"\
    --form "rooms[][doorTexture]=architecto"\
    --form "rooms[][doorTextureAssetId]=16"\
    --form "rooms[][floorAccepted]="\
    --form "rooms[][startingPoint][row]=16"\
    --form "rooms[][startingPoint][col]=16"\
    --form "rooms[][door][row]=16"\
    --form "rooms[][door][col]=16"\
    --form "rooms[][door][rotation]=16"\
    --form "rooms[][riddles][][id]=architecto"\
    --form "rooms[][riddles][][position][row]=16"\
    --form "rooms[][riddles][][position][col]=16"\
    --form "rooms[][riddles][][type]=language"\
    --form "rooms[][riddles][][data][title]=b"\
    --form "rooms[][riddles][][data][question]=architecto"\
    --form "rooms[][riddles][][data][answer]=architecto"\
    --form "rooms[][riddles][][data][hints][]=architecto"\
    --form "rooms[][riddles][][assetId]=16"\
    --form "rooms[][riddles][][texture]=architecto"\
    --form "rooms[][props][][id]=architecto"\
    --form "rooms[][props][][name]=n"\
    --form "rooms[][props][][imageUrl]=http://www.bailey.biz/quos-velit-et-fugiat-sunt-nihil-accusantium-harum.html"\
    --form "rooms[][props][][assetId]=16"\
    --form "rooms[][props][][position][row]=16"\
    --form "rooms[][props][][position][col]=16"\
    --form "rooms[][props][][rotation]=16"\
    --form "thumbnail=@/tmp/phpoi9lq1n6ptdjblndEck" \
    --form "soundtrack=@/tmp/phpn10f3gucisnl9EYPVqD" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/escape-room"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'b');
body.append('description', 'Eius et animi quos velit et.');
body.append('rooms[][wallColor]', 'architecto');
body.append('rooms[][wallThickness]', '22');
body.append('rooms[][floorTexture]', 'architecto');
body.append('rooms[][floorTextureAssetId]', '16');
body.append('rooms[][doorTexture]', 'architecto');
body.append('rooms[][doorTextureAssetId]', '16');
body.append('rooms[][floorAccepted]', '');
body.append('rooms[][startingPoint][row]', '16');
body.append('rooms[][startingPoint][col]', '16');
body.append('rooms[][door][row]', '16');
body.append('rooms[][door][col]', '16');
body.append('rooms[][door][rotation]', '16');
body.append('rooms[][riddles][][id]', 'architecto');
body.append('rooms[][riddles][][position][row]', '16');
body.append('rooms[][riddles][][position][col]', '16');
body.append('rooms[][riddles][][type]', 'language');
body.append('rooms[][riddles][][data][title]', 'b');
body.append('rooms[][riddles][][data][question]', 'architecto');
body.append('rooms[][riddles][][data][answer]', 'architecto');
body.append('rooms[][riddles][][data][hints][]', 'architecto');
body.append('rooms[][riddles][][assetId]', '16');
body.append('rooms[][riddles][][texture]', 'architecto');
body.append('rooms[][props][][id]', 'architecto');
body.append('rooms[][props][][name]', 'n');
body.append('rooms[][props][][imageUrl]', 'http://www.bailey.biz/quos-velit-et-fugiat-sunt-nihil-accusantium-harum.html');
body.append('rooms[][props][][assetId]', '16');
body.append('rooms[][props][][position][row]', '16');
body.append('rooms[][props][][position][col]', '16');
body.append('rooms[][props][][rotation]', '16');
body.append('thumbnail', document.querySelector('input[name="thumbnail"]').files[0]);
body.append('soundtrack', document.querySelector('input[name="soundtrack"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/escape-room';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'multipart/form-data',
            'Accept' =&gt; 'application/json',
        ],
        'multipart' =&gt; [
            [
                'name' =&gt; 'name',
                'contents' =&gt; 'b'
            ],
            [
                'name' =&gt; 'description',
                'contents' =&gt; 'Eius et animi quos velit et.'
            ],
            [
                'name' =&gt; 'rooms[][wallColor]',
                'contents' =&gt; 'architecto'
            ],
            [
                'name' =&gt; 'rooms[][wallThickness]',
                'contents' =&gt; '22'
            ],
            [
                'name' =&gt; 'rooms[][floorTexture]',
                'contents' =&gt; 'architecto'
            ],
            [
                'name' =&gt; 'rooms[][floorTextureAssetId]',
                'contents' =&gt; '16'
            ],
            [
                'name' =&gt; 'rooms[][doorTexture]',
                'contents' =&gt; 'architecto'
            ],
            [
                'name' =&gt; 'rooms[][doorTextureAssetId]',
                'contents' =&gt; '16'
            ],
            [
                'name' =&gt; 'rooms[][floorAccepted]',
                'contents' =&gt; ''
            ],
            [
                'name' =&gt; 'rooms[][startingPoint][row]',
                'contents' =&gt; '16'
            ],
            [
                'name' =&gt; 'rooms[][startingPoint][col]',
                'contents' =&gt; '16'
            ],
            [
                'name' =&gt; 'rooms[][door][row]',
                'contents' =&gt; '16'
            ],
            [
                'name' =&gt; 'rooms[][door][col]',
                'contents' =&gt; '16'
            ],
            [
                'name' =&gt; 'rooms[][door][rotation]',
                'contents' =&gt; '16'
            ],
            [
                'name' =&gt; 'rooms[][riddles][][id]',
                'contents' =&gt; 'architecto'
            ],
            [
                'name' =&gt; 'rooms[][riddles][][position][row]',
                'contents' =&gt; '16'
            ],
            [
                'name' =&gt; 'rooms[][riddles][][position][col]',
                'contents' =&gt; '16'
            ],
            [
                'name' =&gt; 'rooms[][riddles][][type]',
                'contents' =&gt; 'language'
            ],
            [
                'name' =&gt; 'rooms[][riddles][][data][title]',
                'contents' =&gt; 'b'
            ],
            [
                'name' =&gt; 'rooms[][riddles][][data][question]',
                'contents' =&gt; 'architecto'
            ],
            [
                'name' =&gt; 'rooms[][riddles][][data][answer]',
                'contents' =&gt; 'architecto'
            ],
            [
                'name' =&gt; 'rooms[][riddles][][data][hints][]',
                'contents' =&gt; 'architecto'
            ],
            [
                'name' =&gt; 'rooms[][riddles][][assetId]',
                'contents' =&gt; '16'
            ],
            [
                'name' =&gt; 'rooms[][riddles][][texture]',
                'contents' =&gt; 'architecto'
            ],
            [
                'name' =&gt; 'rooms[][props][][id]',
                'contents' =&gt; 'architecto'
            ],
            [
                'name' =&gt; 'rooms[][props][][name]',
                'contents' =&gt; 'n'
            ],
            [
                'name' =&gt; 'rooms[][props][][imageUrl]',
                'contents' =&gt; 'http://www.bailey.biz/quos-velit-et-fugiat-sunt-nihil-accusantium-harum.html'
            ],
            [
                'name' =&gt; 'rooms[][props][][assetId]',
                'contents' =&gt; '16'
            ],
            [
                'name' =&gt; 'rooms[][props][][position][row]',
                'contents' =&gt; '16'
            ],
            [
                'name' =&gt; 'rooms[][props][][position][col]',
                'contents' =&gt; '16'
            ],
            [
                'name' =&gt; 'rooms[][props][][rotation]',
                'contents' =&gt; '16'
            ],
            [
                'name' =&gt; 'thumbnail',
                'contents' =&gt; fopen('/tmp/phpoi9lq1n6ptdjblndEck', 'r')
            ],
            [
                'name' =&gt; 'soundtrack',
                'contents' =&gt; fopen('/tmp/phpn10f3gucisnl9EYPVqD', 'r')
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-escape-room">
</span>
<span id="execution-results-POSTapi-v1-escape-room" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-escape-room"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-escape-room"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-escape-room" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-escape-room">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-escape-room" data-method="POST"
      data-path="api/v1/escape-room"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-escape-room', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-escape-room"
                    onclick="tryItOut('POSTapi-v1-escape-room');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-escape-room"
                    onclick="cancelTryOut('POSTapi-v1-escape-room');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-escape-room"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/escape-room</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-escape-room"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-escape-room"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-escape-room"
               value="b"
               data-component="body">
    <br>
<p>validation.max. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-v1-escape-room"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>thumbnail</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="thumbnail"                data-endpoint="POSTapi-v1-escape-room"
               value=""
               data-component="body">
    <br>
<p>Must be a file. validation.image validation.max. Example: <code>/tmp/phpoi9lq1n6ptdjblndEck</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>soundtrack</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="soundtrack"                data-endpoint="POSTapi-v1-escape-room"
               value=""
               data-component="body">
    <br>
<p>Must be a file. validation.max. Example: <code>/tmp/phpn10f3gucisnl9EYPVqD</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>rooms</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>
<p>validation.min.</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>grid</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.grid"                data-endpoint="POSTapi-v1-escape-room"
               value=""
               data-component="body">
    <br>

                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>walls</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.walls"                data-endpoint="POSTapi-v1-escape-room"
               value=""
               data-component="body">
    <br>

                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>wallColor</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.wallColor"                data-endpoint="POSTapi-v1-escape-room"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>wallThickness</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.wallThickness"                data-endpoint="POSTapi-v1-escape-room"
               value="22"
               data-component="body">
    <br>
<p>validation.min. Example: <code>22</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>floorTexture</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.floorTexture"                data-endpoint="POSTapi-v1-escape-room"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>floorTextureAssetId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.floorTextureAssetId"                data-endpoint="POSTapi-v1-escape-room"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the assets table. Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>doorTexture</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.doorTexture"                data-endpoint="POSTapi-v1-escape-room"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>doorTextureAssetId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.doorTextureAssetId"                data-endpoint="POSTapi-v1-escape-room"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the assets table. Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>floorAccepted</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-v1-escape-room" style="display: none">
            <input type="radio" name="rooms.0.floorAccepted"
                   value="true"
                   data-endpoint="POSTapi-v1-escape-room"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-v1-escape-room" style="display: none">
            <input type="radio" name="rooms.0.floorAccepted"
                   value="false"
                   data-endpoint="POSTapi-v1-escape-room"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
                    </div>
                                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>startingPoint</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>row</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.startingPoint.row"                data-endpoint="POSTapi-v1-escape-room"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>col</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.startingPoint.col"                data-endpoint="POSTapi-v1-escape-room"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>door</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>row</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.door.row"                data-endpoint="POSTapi-v1-escape-room"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>col</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.door.col"                data-endpoint="POSTapi-v1-escape-room"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>rotation</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.door.rotation"                data-endpoint="POSTapi-v1-escape-room"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>riddles</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.riddles.0.id"                data-endpoint="POSTapi-v1-escape-room"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                                                <div style=" margin-left: 28px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>position</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 42px; clear: unset;">
                        <b style="line-height: 2;"><code>row</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.riddles.0.position.row"                data-endpoint="POSTapi-v1-escape-room"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 42px; clear: unset;">
                        <b style="line-height: 2;"><code>col</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.riddles.0.position.col"                data-endpoint="POSTapi-v1-escape-room"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
                    </div>
                                    </details>
        </div>
                                                                    <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.riddles.0.type"                data-endpoint="POSTapi-v1-escape-room"
               value="language"
               data-component="body">
    <br>
<p>Example: <code>language</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>knowledge</code></li> <li><code>math</code></li> <li><code>language</code></li> <li><code>cypher</code></li> <li><code>puzzleGame</code></li></ul>
                    </div>
                                                                <div style=" margin-left: 28px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 42px; clear: unset;">
                        <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.riddles.0.data.title"                data-endpoint="POSTapi-v1-escape-room"
               value="b"
               data-component="body">
    <br>
<p>validation.max. Example: <code>b</code></p>
                    </div>
                                                                <div style="margin-left: 42px; clear: unset;">
                        <b style="line-height: 2;"><code>question</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.riddles.0.data.question"                data-endpoint="POSTapi-v1-escape-room"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 42px; clear: unset;">
                        <b style="line-height: 2;"><code>answer</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.riddles.0.data.answer"                data-endpoint="POSTapi-v1-escape-room"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 42px; clear: unset;">
                        <b style="line-height: 2;"><code>hints</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.riddles.0.data.hints[0]"                data-endpoint="POSTapi-v1-escape-room"
               data-component="body">
        <input type="text" style="display: none"
               name="rooms.0.riddles.0.data.hints[1]"                data-endpoint="POSTapi-v1-escape-room"
               data-component="body">
    <br>

                    </div>
                                                                <div style="margin-left: 42px; clear: unset;">
                        <b style="line-height: 2;"><code>options</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.riddles.0.data.options"                data-endpoint="POSTapi-v1-escape-room"
               value=""
               data-component="body">
    <br>

                    </div>
                                    </details>
        </div>
                                                                    <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>assetId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.riddles.0.assetId"                data-endpoint="POSTapi-v1-escape-room"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the assets table. Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>texture</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.riddles.0.texture"                data-endpoint="POSTapi-v1-escape-room"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>props</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.props.0.id"                data-endpoint="POSTapi-v1-escape-room"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.props.0.name"                data-endpoint="POSTapi-v1-escape-room"
               value="n"
               data-component="body">
    <br>
<p>validation.max. Example: <code>n</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>imageUrl</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.props.0.imageUrl"                data-endpoint="POSTapi-v1-escape-room"
               value="http://www.bailey.biz/quos-velit-et-fugiat-sunt-nihil-accusantium-harum.html"
               data-component="body">
    <br>
<p>Example: <code>http://www.bailey.biz/quos-velit-et-fugiat-sunt-nihil-accusantium-harum.html</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>assetId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.props.0.assetId"                data-endpoint="POSTapi-v1-escape-room"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the assets table. Example: <code>16</code></p>
                    </div>
                                                                <div style=" margin-left: 28px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>position</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 42px; clear: unset;">
                        <b style="line-height: 2;"><code>row</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.props.0.position.row"                data-endpoint="POSTapi-v1-escape-room"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 42px; clear: unset;">
                        <b style="line-height: 2;"><code>col</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.props.0.position.col"                data-endpoint="POSTapi-v1-escape-room"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
                    </div>
                                    </details>
        </div>
                                                                    <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>rotation</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.props.0.rotation"                data-endpoint="POSTapi-v1-escape-room"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpointy-PUTapi-v1-escape-room--id-">PUT api/v1/escape-room/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-escape-room--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/v1/escape-room/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"description\": \"Eius et animi quos velit et.\",
    \"rooms\": [
        {
            \"grid\": [],
            \"walls\": [],
            \"wallColor\": \"architecto\",
            \"wallThickness\": 22,
            \"floorColor\": \"architecto\",
            \"floorTexture\": \"architecto\",
            \"floorTextureAssetId\": 16,
            \"doorTexture\": \"architecto\",
            \"doorTextureAssetId\": 16,
            \"floorAccepted\": false,
            \"startingPoint\": {
                \"row\": 16,
                \"col\": 16
            },
            \"door\": {
                \"row\": 16,
                \"col\": 16,
                \"rotation\": 16,
                \"assetId\": 16
            },
            \"riddles\": [
                {
                    \"id\": \"architecto\",
                    \"position\": {
                        \"row\": 16,
                        \"col\": 16
                    },
                    \"type\": \"puzzleGame\",
                    \"data\": {
                        \"title\": \"b\",
                        \"question\": \"architecto\",
                        \"answer\": \"architecto\",
                        \"hints\": [
                            \"architecto\"
                        ]
                    },
                    \"assetId\": 16,
                    \"texture\": \"architecto\"
                }
            ],
            \"props\": [
                {
                    \"id\": \"architecto\",
                    \"name\": \"n\",
                    \"imageUrl\": \"http:\\/\\/www.bailey.biz\\/quos-velit-et-fugiat-sunt-nihil-accusantium-harum.html\",
                    \"assetId\": 16,
                    \"position\": {
                        \"row\": 16,
                        \"col\": 16
                    },
                    \"rotation\": 16
                }
            ]
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/escape-room/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "description": "Eius et animi quos velit et.",
    "rooms": [
        {
            "grid": [],
            "walls": [],
            "wallColor": "architecto",
            "wallThickness": 22,
            "floorColor": "architecto",
            "floorTexture": "architecto",
            "floorTextureAssetId": 16,
            "doorTexture": "architecto",
            "doorTextureAssetId": 16,
            "floorAccepted": false,
            "startingPoint": {
                "row": 16,
                "col": 16
            },
            "door": {
                "row": 16,
                "col": 16,
                "rotation": 16,
                "assetId": 16
            },
            "riddles": [
                {
                    "id": "architecto",
                    "position": {
                        "row": 16,
                        "col": 16
                    },
                    "type": "puzzleGame",
                    "data": {
                        "title": "b",
                        "question": "architecto",
                        "answer": "architecto",
                        "hints": [
                            "architecto"
                        ]
                    },
                    "assetId": 16,
                    "texture": "architecto"
                }
            ],
            "props": [
                {
                    "id": "architecto",
                    "name": "n",
                    "imageUrl": "http:\/\/www.bailey.biz\/quos-velit-et-fugiat-sunt-nihil-accusantium-harum.html",
                    "assetId": 16,
                    "position": {
                        "row": 16,
                        "col": 16
                    },
                    "rotation": 16
                }
            ]
        }
    ]
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/escape-room/1';
$response = $client-&gt;put(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'b',
            'description' =&gt; 'Eius et animi quos velit et.',
            'rooms' =&gt; [
                [
                    'grid' =&gt; [],
                    'walls' =&gt; [],
                    'wallColor' =&gt; 'architecto',
                    'wallThickness' =&gt; 22,
                    'floorColor' =&gt; 'architecto',
                    'floorTexture' =&gt; 'architecto',
                    'floorTextureAssetId' =&gt; 16,
                    'doorTexture' =&gt; 'architecto',
                    'doorTextureAssetId' =&gt; 16,
                    'floorAccepted' =&gt; false,
                    'startingPoint' =&gt; [
                        'row' =&gt; 16,
                        'col' =&gt; 16,
                    ],
                    'door' =&gt; [
                        'row' =&gt; 16,
                        'col' =&gt; 16,
                        'rotation' =&gt; 16,
                        'assetId' =&gt; 16,
                    ],
                    'riddles' =&gt; [
                        [
                            'id' =&gt; 'architecto',
                            'position' =&gt; [
                                'row' =&gt; 16,
                                'col' =&gt; 16,
                            ],
                            'type' =&gt; 'puzzleGame',
                            'data' =&gt; [
                                'title' =&gt; 'b',
                                'question' =&gt; 'architecto',
                                'answer' =&gt; 'architecto',
                                'hints' =&gt; [
                                    'architecto',
                                ],
                            ],
                            'assetId' =&gt; 16,
                            'texture' =&gt; 'architecto',
                        ],
                    ],
                    'props' =&gt; [
                        [
                            'id' =&gt; 'architecto',
                            'name' =&gt; 'n',
                            'imageUrl' =&gt; 'http://www.bailey.biz/quos-velit-et-fugiat-sunt-nihil-accusantium-harum.html',
                            'assetId' =&gt; 16,
                            'position' =&gt; [
                                'row' =&gt; 16,
                                'col' =&gt; 16,
                            ],
                            'rotation' =&gt; 16,
                        ],
                    ],
                ],
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-escape-room--id-">
</span>
<span id="execution-results-PUTapi-v1-escape-room--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-escape-room--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-escape-room--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-escape-room--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-escape-room--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-escape-room--id-" data-method="PUT"
      data-path="api/v1/escape-room/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-escape-room--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-escape-room--id-"
                    onclick="tryItOut('PUTapi-v1-escape-room--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-escape-room--id-"
                    onclick="cancelTryOut('PUTapi-v1-escape-room--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-escape-room--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/escape-room/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the escape room. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="b"
               data-component="body">
    <br>
<p>validation.max. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>rooms</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>
<p>validation.min.</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>grid</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.grid"                data-endpoint="PUTapi-v1-escape-room--id-"
               value=""
               data-component="body">
    <br>

                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>walls</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.walls"                data-endpoint="PUTapi-v1-escape-room--id-"
               value=""
               data-component="body">
    <br>

                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>wallColor</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.wallColor"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>wallThickness</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.wallThickness"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="22"
               data-component="body">
    <br>
<p>validation.min. Example: <code>22</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>floorColor</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.floorColor"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>floorTexture</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.floorTexture"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>floorTextureAssetId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.floorTextureAssetId"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the assets table. Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>doorTexture</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.doorTexture"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>doorTextureAssetId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.doorTextureAssetId"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the assets table. Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>floorAccepted</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-v1-escape-room--id-" style="display: none">
            <input type="radio" name="rooms.0.floorAccepted"
                   value="true"
                   data-endpoint="PUTapi-v1-escape-room--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-v1-escape-room--id-" style="display: none">
            <input type="radio" name="rooms.0.floorAccepted"
                   value="false"
                   data-endpoint="PUTapi-v1-escape-room--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
                    </div>
                                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>startingPoint</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>row</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.startingPoint.row"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>col</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.startingPoint.col"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>door</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>row</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.door.row"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>col</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.door.col"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>rotation</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.door.rotation"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>assetId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.door.assetId"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>riddles</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.riddles.0.id"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                                                <div style=" margin-left: 28px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>position</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 42px; clear: unset;">
                        <b style="line-height: 2;"><code>row</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.riddles.0.position.row"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 42px; clear: unset;">
                        <b style="line-height: 2;"><code>col</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.riddles.0.position.col"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
                    </div>
                                    </details>
        </div>
                                                                    <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.riddles.0.type"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="puzzleGame"
               data-component="body">
    <br>
<p>Example: <code>puzzleGame</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>knowledge</code></li> <li><code>math</code></li> <li><code>language</code></li> <li><code>cypher</code></li> <li><code>puzzleGame</code></li></ul>
                    </div>
                                                                <div style=" margin-left: 28px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 42px; clear: unset;">
                        <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.riddles.0.data.title"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="b"
               data-component="body">
    <br>
<p>validation.max. Example: <code>b</code></p>
                    </div>
                                                                <div style="margin-left: 42px; clear: unset;">
                        <b style="line-height: 2;"><code>question</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.riddles.0.data.question"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 42px; clear: unset;">
                        <b style="line-height: 2;"><code>answer</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.riddles.0.data.answer"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 42px; clear: unset;">
                        <b style="line-height: 2;"><code>hints</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.riddles.0.data.hints[0]"                data-endpoint="PUTapi-v1-escape-room--id-"
               data-component="body">
        <input type="text" style="display: none"
               name="rooms.0.riddles.0.data.hints[1]"                data-endpoint="PUTapi-v1-escape-room--id-"
               data-component="body">
    <br>

                    </div>
                                                                <div style="margin-left: 42px; clear: unset;">
                        <b style="line-height: 2;"><code>options</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.riddles.0.data.options"                data-endpoint="PUTapi-v1-escape-room--id-"
               value=""
               data-component="body">
    <br>

                    </div>
                                    </details>
        </div>
                                                                    <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>assetId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.riddles.0.assetId"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the assets table. Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>texture</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.riddles.0.texture"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>props</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.props.0.id"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.props.0.name"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="n"
               data-component="body">
    <br>
<p>validation.max. Example: <code>n</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>imageUrl</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rooms.0.props.0.imageUrl"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="http://www.bailey.biz/quos-velit-et-fugiat-sunt-nihil-accusantium-harum.html"
               data-component="body">
    <br>
<p>Example: <code>http://www.bailey.biz/quos-velit-et-fugiat-sunt-nihil-accusantium-harum.html</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>assetId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.props.0.assetId"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the assets table. Example: <code>16</code></p>
                    </div>
                                                                <div style=" margin-left: 28px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>position</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 42px; clear: unset;">
                        <b style="line-height: 2;"><code>row</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.props.0.position.row"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 42px; clear: unset;">
                        <b style="line-height: 2;"><code>col</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.props.0.position.col"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
                    </div>
                                    </details>
        </div>
                                                                    <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>rotation</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rooms.0.props.0.rotation"                data-endpoint="PUTapi-v1-escape-room--id-"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpointy-POSTapi-v1-escape-room--id--files">POST api/v1/escape-room/{id}/files</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-escape-room--id--files">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/escape-room/1/files" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "remove_thumbnail="\
    --form "remove_soundtrack="\
    --form "thumbnail=@/tmp/phpvg2gccqu046c9lxKsCa" \
    --form "soundtrack=@/tmp/phpquoftu0ns0ul2Ukkqsp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/escape-room/1/files"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('remove_thumbnail', '');
body.append('remove_soundtrack', '');
body.append('thumbnail', document.querySelector('input[name="thumbnail"]').files[0]);
body.append('soundtrack', document.querySelector('input[name="soundtrack"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/escape-room/1/files';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'multipart/form-data',
            'Accept' =&gt; 'application/json',
        ],
        'multipart' =&gt; [
            [
                'name' =&gt; 'remove_thumbnail',
                'contents' =&gt; ''
            ],
            [
                'name' =&gt; 'remove_soundtrack',
                'contents' =&gt; ''
            ],
            [
                'name' =&gt; 'thumbnail',
                'contents' =&gt; fopen('/tmp/phpvg2gccqu046c9lxKsCa', 'r')
            ],
            [
                'name' =&gt; 'soundtrack',
                'contents' =&gt; fopen('/tmp/phpquoftu0ns0ul2Ukkqsp', 'r')
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-escape-room--id--files">
</span>
<span id="execution-results-POSTapi-v1-escape-room--id--files" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-escape-room--id--files"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-escape-room--id--files"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-escape-room--id--files" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-escape-room--id--files">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-escape-room--id--files" data-method="POST"
      data-path="api/v1/escape-room/{id}/files"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-escape-room--id--files', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-escape-room--id--files"
                    onclick="tryItOut('POSTapi-v1-escape-room--id--files');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-escape-room--id--files"
                    onclick="cancelTryOut('POSTapi-v1-escape-room--id--files');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-escape-room--id--files"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/escape-room/{id}/files</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-escape-room--id--files"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-escape-room--id--files"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="POSTapi-v1-escape-room--id--files"
               value="1"
               data-component="url">
    <br>
<p>The ID of the escape room. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>thumbnail</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="thumbnail"                data-endpoint="POSTapi-v1-escape-room--id--files"
               value=""
               data-component="body">
    <br>
<p>Must be a file. validation.image validation.max. Example: <code>/tmp/phpvg2gccqu046c9lxKsCa</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>soundtrack</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="soundtrack"                data-endpoint="POSTapi-v1-escape-room--id--files"
               value=""
               data-component="body">
    <br>
<p>Must be a file. validation.max. Example: <code>/tmp/phpquoftu0ns0ul2Ukkqsp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>remove_thumbnail</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-v1-escape-room--id--files" style="display: none">
            <input type="radio" name="remove_thumbnail"
                   value="true"
                   data-endpoint="POSTapi-v1-escape-room--id--files"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-v1-escape-room--id--files" style="display: none">
            <input type="radio" name="remove_thumbnail"
                   value="false"
                   data-endpoint="POSTapi-v1-escape-room--id--files"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>remove_soundtrack</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-v1-escape-room--id--files" style="display: none">
            <input type="radio" name="remove_soundtrack"
                   value="true"
                   data-endpoint="POSTapi-v1-escape-room--id--files"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-v1-escape-room--id--files" style="display: none">
            <input type="radio" name="remove_soundtrack"
                   value="false"
                   data-endpoint="POSTapi-v1-escape-room--id--files"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="endpointy-DELETEapi-v1-escape-room--id-">DELETE api/v1/escape-room/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-escape-room--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/v1/escape-room/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/escape-room/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/escape-room/1';
$response = $client-&gt;delete(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-escape-room--id-">
</span>
<span id="execution-results-DELETEapi-v1-escape-room--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-escape-room--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-escape-room--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-escape-room--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-escape-room--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-escape-room--id-" data-method="DELETE"
      data-path="api/v1/escape-room/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-escape-room--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-escape-room--id-"
                    onclick="tryItOut('DELETEapi-v1-escape-room--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-escape-room--id-"
                    onclick="cancelTryOut('DELETEapi-v1-escape-room--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-escape-room--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/escape-room/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-escape-room--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-escape-room--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-escape-room--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the escape room. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpointy-GETapi-v1-escape-room-my-rooms">GET api/v1/escape-room/my/rooms</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-escape-room-my-rooms">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/escape-room/my/rooms" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/escape-room/my/rooms"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/escape-room/my/rooms';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-escape-room-my-rooms">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-escape-room-my-rooms" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-escape-room-my-rooms"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-escape-room-my-rooms"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-escape-room-my-rooms" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-escape-room-my-rooms">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-escape-room-my-rooms" data-method="GET"
      data-path="api/v1/escape-room/my/rooms"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-escape-room-my-rooms', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-escape-room-my-rooms"
                    onclick="tryItOut('GETapi-v1-escape-room-my-rooms');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-escape-room-my-rooms"
                    onclick="cancelTryOut('GETapi-v1-escape-room-my-rooms');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-escape-room-my-rooms"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/escape-room/my/rooms</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-escape-room-my-rooms"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-escape-room-my-rooms"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpointy-GETapi-v1-game-history">GET api/v1/game-history</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-game-history">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/game-history" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/game-history"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/game-history';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-game-history">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-game-history" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-game-history"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-game-history"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-game-history" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-game-history">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-game-history" data-method="GET"
      data-path="api/v1/game-history"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-game-history', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-game-history"
                    onclick="tryItOut('GETapi-v1-game-history');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-game-history"
                    onclick="cancelTryOut('GETapi-v1-game-history');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-game-history"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/game-history</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-game-history"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-game-history"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpointy-POSTapi-v1-mini-game-generate">POST api/v1/mini-game/generate</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-mini-game-generate">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/mini-game/generate" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"attempt_id\": \"architecto\",
    \"riddle_id\": \"architecto\",
    \"difficulty\": \"medium\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/mini-game/generate"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "attempt_id": "architecto",
    "riddle_id": "architecto",
    "difficulty": "medium"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/mini-game/generate';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'attempt_id' =&gt; 'architecto',
            'riddle_id' =&gt; 'architecto',
            'difficulty' =&gt; 'medium',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-mini-game-generate">
</span>
<span id="execution-results-POSTapi-v1-mini-game-generate" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-mini-game-generate"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-mini-game-generate"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-mini-game-generate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-mini-game-generate">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-mini-game-generate" data-method="POST"
      data-path="api/v1/mini-game/generate"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-mini-game-generate', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-mini-game-generate"
                    onclick="tryItOut('POSTapi-v1-mini-game-generate');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-mini-game-generate"
                    onclick="cancelTryOut('POSTapi-v1-mini-game-generate');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-mini-game-generate"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/mini-game/generate</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-mini-game-generate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-mini-game-generate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>attempt_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="attempt_id"                data-endpoint="POSTapi-v1-mini-game-generate"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the attempts table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>riddle_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="riddle_id"                data-endpoint="POSTapi-v1-mini-game-generate"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the riddles table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>difficulty</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="difficulty"                data-endpoint="POSTapi-v1-mini-game-generate"
               value="medium"
               data-component="body">
    <br>
<p>Example: <code>medium</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>easy</code></li> <li><code>medium</code></li> <li><code>hard</code></li></ul>
        </div>
        </form>

                    <h2 id="endpointy-POSTapi-v1-mini-game-attempt--attemptId--submit">POST api/v1/mini-game/attempt/{attemptId}/submit</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-mini-game-attempt--attemptId--submit">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/mini-game/attempt/architecto/submit" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"solution\": []
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/mini-game/attempt/architecto/submit"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "solution": []
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/mini-game/attempt/architecto/submit';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'solution' =&gt; [],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-mini-game-attempt--attemptId--submit">
</span>
<span id="execution-results-POSTapi-v1-mini-game-attempt--attemptId--submit" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-mini-game-attempt--attemptId--submit"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-mini-game-attempt--attemptId--submit"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-mini-game-attempt--attemptId--submit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-mini-game-attempt--attemptId--submit">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-mini-game-attempt--attemptId--submit" data-method="POST"
      data-path="api/v1/mini-game/attempt/{attemptId}/submit"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-mini-game-attempt--attemptId--submit', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-mini-game-attempt--attemptId--submit"
                    onclick="tryItOut('POSTapi-v1-mini-game-attempt--attemptId--submit');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-mini-game-attempt--attemptId--submit"
                    onclick="cancelTryOut('POSTapi-v1-mini-game-attempt--attemptId--submit');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-mini-game-attempt--attemptId--submit"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/mini-game/attempt/{attemptId}/submit</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-mini-game-attempt--attemptId--submit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-mini-game-attempt--attemptId--submit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>attemptId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="attemptId"                data-endpoint="POSTapi-v1-mini-game-attempt--attemptId--submit"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>solution</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="solution"                data-endpoint="POSTapi-v1-mini-game-attempt--attemptId--submit"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="endpointy-GETapi-v1-play-escape-room--escapeRoomId--soundtrack">GET api/v1/play/escape-room/{escapeRoomId}/soundtrack</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-play-escape-room--escapeRoomId--soundtrack">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/play/escape-room/1/soundtrack" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/play/escape-room/1/soundtrack"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/play/escape-room/1/soundtrack';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-play-escape-room--escapeRoomId--soundtrack">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-play-escape-room--escapeRoomId--soundtrack" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-play-escape-room--escapeRoomId--soundtrack"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-play-escape-room--escapeRoomId--soundtrack"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-play-escape-room--escapeRoomId--soundtrack" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-play-escape-room--escapeRoomId--soundtrack">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-play-escape-room--escapeRoomId--soundtrack" data-method="GET"
      data-path="api/v1/play/escape-room/{escapeRoomId}/soundtrack"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-play-escape-room--escapeRoomId--soundtrack', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-play-escape-room--escapeRoomId--soundtrack"
                    onclick="tryItOut('GETapi-v1-play-escape-room--escapeRoomId--soundtrack');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-play-escape-room--escapeRoomId--soundtrack"
                    onclick="cancelTryOut('GETapi-v1-play-escape-room--escapeRoomId--soundtrack');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-play-escape-room--escapeRoomId--soundtrack"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/play/escape-room/{escapeRoomId}/soundtrack</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-play-escape-room--escapeRoomId--soundtrack"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-play-escape-room--escapeRoomId--soundtrack"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>escapeRoomId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="escapeRoomId"                data-endpoint="GETapi-v1-play-escape-room--escapeRoomId--soundtrack"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpointy-POSTapi-v1-play-escape-room--escapeRoomId--start">POST api/v1/play/escape-room/{escapeRoomId}/start</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-play-escape-room--escapeRoomId--start">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/play/escape-room/1/start" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/play/escape-room/1/start"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/play/escape-room/1/start';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-play-escape-room--escapeRoomId--start">
</span>
<span id="execution-results-POSTapi-v1-play-escape-room--escapeRoomId--start" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-play-escape-room--escapeRoomId--start"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-play-escape-room--escapeRoomId--start"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-play-escape-room--escapeRoomId--start" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-play-escape-room--escapeRoomId--start">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-play-escape-room--escapeRoomId--start" data-method="POST"
      data-path="api/v1/play/escape-room/{escapeRoomId}/start"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-play-escape-room--escapeRoomId--start', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-play-escape-room--escapeRoomId--start"
                    onclick="tryItOut('POSTapi-v1-play-escape-room--escapeRoomId--start');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-play-escape-room--escapeRoomId--start"
                    onclick="cancelTryOut('POSTapi-v1-play-escape-room--escapeRoomId--start');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-play-escape-room--escapeRoomId--start"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/play/escape-room/{escapeRoomId}/start</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-play-escape-room--escapeRoomId--start"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-play-escape-room--escapeRoomId--start"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>escapeRoomId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="escapeRoomId"                data-endpoint="POSTapi-v1-play-escape-room--escapeRoomId--start"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpointy-POSTapi-v1-play-attempt--attemptId--riddle-solve">POST api/v1/play/attempt/{attemptId}/riddle/solve</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-play-attempt--attemptId--riddle-solve">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/play/attempt/architecto/riddle/solve" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"riddle_id\": \"architecto\",
    \"answer\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/play/attempt/architecto/riddle/solve"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "riddle_id": "architecto",
    "answer": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/play/attempt/architecto/riddle/solve';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'riddle_id' =&gt; 'architecto',
            'answer' =&gt; 'architecto',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-play-attempt--attemptId--riddle-solve">
</span>
<span id="execution-results-POSTapi-v1-play-attempt--attemptId--riddle-solve" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-play-attempt--attemptId--riddle-solve"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-play-attempt--attemptId--riddle-solve"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-play-attempt--attemptId--riddle-solve" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-play-attempt--attemptId--riddle-solve">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-play-attempt--attemptId--riddle-solve" data-method="POST"
      data-path="api/v1/play/attempt/{attemptId}/riddle/solve"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-play-attempt--attemptId--riddle-solve', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-play-attempt--attemptId--riddle-solve"
                    onclick="tryItOut('POSTapi-v1-play-attempt--attemptId--riddle-solve');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-play-attempt--attemptId--riddle-solve"
                    onclick="cancelTryOut('POSTapi-v1-play-attempt--attemptId--riddle-solve');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-play-attempt--attemptId--riddle-solve"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/play/attempt/{attemptId}/riddle/solve</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-play-attempt--attemptId--riddle-solve"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-play-attempt--attemptId--riddle-solve"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>attemptId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="attemptId"                data-endpoint="POSTapi-v1-play-attempt--attemptId--riddle-solve"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>riddle_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="riddle_id"                data-endpoint="POSTapi-v1-play-attempt--attemptId--riddle-solve"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the riddles table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>answer</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="answer"                data-endpoint="POSTapi-v1-play-attempt--attemptId--riddle-solve"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpointy-POSTapi-v1-play-attempt--attemptId--riddle--riddleId--hint">POST api/v1/play/attempt/{attemptId}/riddle/{riddleId}/hint</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-play-attempt--attemptId--riddle--riddleId--hint">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/play/attempt/architecto/riddle/1/hint" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/play/attempt/architecto/riddle/1/hint"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/play/attempt/architecto/riddle/1/hint';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-play-attempt--attemptId--riddle--riddleId--hint">
</span>
<span id="execution-results-POSTapi-v1-play-attempt--attemptId--riddle--riddleId--hint" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-play-attempt--attemptId--riddle--riddleId--hint"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-play-attempt--attemptId--riddle--riddleId--hint"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-play-attempt--attemptId--riddle--riddleId--hint" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-play-attempt--attemptId--riddle--riddleId--hint">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-play-attempt--attemptId--riddle--riddleId--hint" data-method="POST"
      data-path="api/v1/play/attempt/{attemptId}/riddle/{riddleId}/hint"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-play-attempt--attemptId--riddle--riddleId--hint', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-play-attempt--attemptId--riddle--riddleId--hint"
                    onclick="tryItOut('POSTapi-v1-play-attempt--attemptId--riddle--riddleId--hint');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-play-attempt--attemptId--riddle--riddleId--hint"
                    onclick="cancelTryOut('POSTapi-v1-play-attempt--attemptId--riddle--riddleId--hint');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-play-attempt--attemptId--riddle--riddleId--hint"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/play/attempt/{attemptId}/riddle/{riddleId}/hint</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-play-attempt--attemptId--riddle--riddleId--hint"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-play-attempt--attemptId--riddle--riddleId--hint"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>attemptId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="attemptId"                data-endpoint="POSTapi-v1-play-attempt--attemptId--riddle--riddleId--hint"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>riddleId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="riddleId"                data-endpoint="POSTapi-v1-play-attempt--attemptId--riddle--riddleId--hint"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpointy-POSTapi-v1-play-attempt--attemptId--next-room">POST api/v1/play/attempt/{attemptId}/next-room</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-play-attempt--attemptId--next-room">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/play/attempt/architecto/next-room" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/play/attempt/architecto/next-room"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/play/attempt/architecto/next-room';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-play-attempt--attemptId--next-room">
</span>
<span id="execution-results-POSTapi-v1-play-attempt--attemptId--next-room" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-play-attempt--attemptId--next-room"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-play-attempt--attemptId--next-room"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-play-attempt--attemptId--next-room" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-play-attempt--attemptId--next-room">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-play-attempt--attemptId--next-room" data-method="POST"
      data-path="api/v1/play/attempt/{attemptId}/next-room"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-play-attempt--attemptId--next-room', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-play-attempt--attemptId--next-room"
                    onclick="tryItOut('POSTapi-v1-play-attempt--attemptId--next-room');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-play-attempt--attemptId--next-room"
                    onclick="cancelTryOut('POSTapi-v1-play-attempt--attemptId--next-room');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-play-attempt--attemptId--next-room"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/play/attempt/{attemptId}/next-room</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-play-attempt--attemptId--next-room"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-play-attempt--attemptId--next-room"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>attemptId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="attemptId"                data-endpoint="POSTapi-v1-play-attempt--attemptId--next-room"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpointy-POSTapi-v1-play-attempt--attemptId--time">POST api/v1/play/attempt/{attemptId}/time</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-play-attempt--attemptId--time">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/play/attempt/architecto/time" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"time_spent\": 27
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/play/attempt/architecto/time"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "time_spent": 27
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/play/attempt/architecto/time';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'time_spent' =&gt; 27,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-play-attempt--attemptId--time">
</span>
<span id="execution-results-POSTapi-v1-play-attempt--attemptId--time" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-play-attempt--attemptId--time"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-play-attempt--attemptId--time"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-play-attempt--attemptId--time" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-play-attempt--attemptId--time">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-play-attempt--attemptId--time" data-method="POST"
      data-path="api/v1/play/attempt/{attemptId}/time"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-play-attempt--attemptId--time', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-play-attempt--attemptId--time"
                    onclick="tryItOut('POSTapi-v1-play-attempt--attemptId--time');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-play-attempt--attemptId--time"
                    onclick="cancelTryOut('POSTapi-v1-play-attempt--attemptId--time');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-play-attempt--attemptId--time"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/play/attempt/{attemptId}/time</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-play-attempt--attemptId--time"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-play-attempt--attemptId--time"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>attemptId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="attemptId"                data-endpoint="POSTapi-v1-play-attempt--attemptId--time"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>time_spent</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="time_spent"                data-endpoint="POSTapi-v1-play-attempt--attemptId--time"
               value="27"
               data-component="body">
    <br>
<p>validation.min. Example: <code>27</code></p>
        </div>
        </form>

                    <h2 id="endpointy-POSTapi-v1-play-attempt--attemptId--pause">POST api/v1/play/attempt/{attemptId}/pause</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-play-attempt--attemptId--pause">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/play/attempt/architecto/pause" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/play/attempt/architecto/pause"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/play/attempt/architecto/pause';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-play-attempt--attemptId--pause">
</span>
<span id="execution-results-POSTapi-v1-play-attempt--attemptId--pause" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-play-attempt--attemptId--pause"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-play-attempt--attemptId--pause"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-play-attempt--attemptId--pause" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-play-attempt--attemptId--pause">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-play-attempt--attemptId--pause" data-method="POST"
      data-path="api/v1/play/attempt/{attemptId}/pause"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-play-attempt--attemptId--pause', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-play-attempt--attemptId--pause"
                    onclick="tryItOut('POSTapi-v1-play-attempt--attemptId--pause');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-play-attempt--attemptId--pause"
                    onclick="cancelTryOut('POSTapi-v1-play-attempt--attemptId--pause');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-play-attempt--attemptId--pause"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/play/attempt/{attemptId}/pause</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-play-attempt--attemptId--pause"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-play-attempt--attemptId--pause"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>attemptId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="attemptId"                data-endpoint="POSTapi-v1-play-attempt--attemptId--pause"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpointy-POSTapi-v1-play-attempt--attemptId--resume">POST api/v1/play/attempt/{attemptId}/resume</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-play-attempt--attemptId--resume">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/play/attempt/architecto/resume" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/play/attempt/architecto/resume"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/play/attempt/architecto/resume';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-play-attempt--attemptId--resume">
</span>
<span id="execution-results-POSTapi-v1-play-attempt--attemptId--resume" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-play-attempt--attemptId--resume"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-play-attempt--attemptId--resume"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-play-attempt--attemptId--resume" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-play-attempt--attemptId--resume">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-play-attempt--attemptId--resume" data-method="POST"
      data-path="api/v1/play/attempt/{attemptId}/resume"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-play-attempt--attemptId--resume', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-play-attempt--attemptId--resume"
                    onclick="tryItOut('POSTapi-v1-play-attempt--attemptId--resume');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-play-attempt--attemptId--resume"
                    onclick="cancelTryOut('POSTapi-v1-play-attempt--attemptId--resume');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-play-attempt--attemptId--resume"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/play/attempt/{attemptId}/resume</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-play-attempt--attemptId--resume"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-play-attempt--attemptId--resume"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>attemptId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="attemptId"                data-endpoint="POSTapi-v1-play-attempt--attemptId--resume"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpointy-POSTapi-v1-play-attempt--attemptId--abandon">POST api/v1/play/attempt/{attemptId}/abandon</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-play-attempt--attemptId--abandon">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/play/attempt/architecto/abandon" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/play/attempt/architecto/abandon"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/play/attempt/architecto/abandon';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-play-attempt--attemptId--abandon">
</span>
<span id="execution-results-POSTapi-v1-play-attempt--attemptId--abandon" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-play-attempt--attemptId--abandon"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-play-attempt--attemptId--abandon"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-play-attempt--attemptId--abandon" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-play-attempt--attemptId--abandon">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-play-attempt--attemptId--abandon" data-method="POST"
      data-path="api/v1/play/attempt/{attemptId}/abandon"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-play-attempt--attemptId--abandon', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-play-attempt--attemptId--abandon"
                    onclick="tryItOut('POSTapi-v1-play-attempt--attemptId--abandon');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-play-attempt--attemptId--abandon"
                    onclick="cancelTryOut('POSTapi-v1-play-attempt--attemptId--abandon');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-play-attempt--attemptId--abandon"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/play/attempt/{attemptId}/abandon</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-play-attempt--attemptId--abandon"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-play-attempt--attemptId--abandon"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>attemptId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="attemptId"                data-endpoint="POSTapi-v1-play-attempt--attemptId--abandon"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpointy-POSTapi-v1-play-attempt--attemptId--fail">POST api/v1/play/attempt/{attemptId}/fail</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-play-attempt--attemptId--fail">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/play/attempt/architecto/fail" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/play/attempt/architecto/fail"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/play/attempt/architecto/fail';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-play-attempt--attemptId--fail">
</span>
<span id="execution-results-POSTapi-v1-play-attempt--attemptId--fail" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-play-attempt--attemptId--fail"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-play-attempt--attemptId--fail"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-play-attempt--attemptId--fail" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-play-attempt--attemptId--fail">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-play-attempt--attemptId--fail" data-method="POST"
      data-path="api/v1/play/attempt/{attemptId}/fail"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-play-attempt--attemptId--fail', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-play-attempt--attemptId--fail"
                    onclick="tryItOut('POSTapi-v1-play-attempt--attemptId--fail');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-play-attempt--attemptId--fail"
                    onclick="cancelTryOut('POSTapi-v1-play-attempt--attemptId--fail');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-play-attempt--attemptId--fail"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/play/attempt/{attemptId}/fail</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-play-attempt--attemptId--fail"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-play-attempt--attemptId--fail"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>attemptId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="attemptId"                data-endpoint="POSTapi-v1-play-attempt--attemptId--fail"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpointy-GETapi-v1-img--path-">GET api/v1/img/{path}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-img--path-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/img/|{+-0p" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/img/|{+-0p"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/v1/img/|{+-0p';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-img--path-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Image not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-img--path-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-img--path-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-img--path-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-img--path-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-img--path-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-img--path-" data-method="GET"
      data-path="api/v1/img/{path}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-img--path-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-img--path-"
                    onclick="tryItOut('GETapi-v1-img--path-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-img--path-"
                    onclick="cancelTryOut('GETapi-v1-img--path-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-img--path-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/img/{path}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-img--path-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-img--path-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>path</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="path"                data-endpoint="GETapi-v1-img--path-"
               value="|{+-0p"
               data-component="url">
    <br>
<p>Example: <code>|{+-0p</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                                        <button type="button" class="lang-button" data-language-name="php">php</button>
                            </div>
            </div>
</div>
</body>
</html>
