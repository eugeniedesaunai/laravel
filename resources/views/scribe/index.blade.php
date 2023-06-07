<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
                    body .content .php-example code { display: none; }
            </style>

    <script>
        var baseUrl = "localhost:9080";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-3.37.2.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-3.37.2.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;,&quot;php&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                            <button type="button" class="lang-button" data-language-name="php">php</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                        <a href="#endpoints-GETapi-user">GET api/user</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-movies--movie_id--actor">
                        <a href="#endpoints-GETapi-movies--movie_id--actor">GET api/movies/{movie_id}/actor</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-movies--movie_id--actors">
                        <a href="#endpoints-POSTapi-movies--movie_id--actors">POST api/movies/{movie_id}/actors</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-movies--movie_id--director">
                        <a href="#endpoints-GETapi-movies--movie_id--director">GET api/movies/{movie_id}/director</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-movies">
                        <a href="#endpoints-GETapi-movies">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-movies">
                        <a href="#endpoints-POSTapi-movies">Store a newly created resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-movies--id-">
                        <a href="#endpoints-GETapi-movies--id-">Display the specified resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-PUTapi-movies--id-">
                        <a href="#endpoints-PUTapi-movies--id-">Update the specified resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-movies--id-">
                        <a href="#endpoints-DELETEapi-movies--id-">Remove the specified resource from storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-actors">
                        <a href="#endpoints-GETapi-actors">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-actors">
                        <a href="#endpoints-POSTapi-actors">Store a newly created resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-actors--id-">
                        <a href="#endpoints-GETapi-actors--id-">Display the specified resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-PUTapi-actors--id-">
                        <a href="#endpoints-PUTapi-actors--id-">Update the specified resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-actors--id-">
                        <a href="#endpoints-DELETEapi-actors--id-">Remove the specified resource from storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-directors">
                        <a href="#endpoints-GETapi-directors">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-directors">
                        <a href="#endpoints-POSTapi-directors">Store a newly created resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-directors--id-">
                        <a href="#endpoints-GETapi-directors--id-">Display the specified resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-PUTapi-directors--id-">
                        <a href="#endpoints-PUTapi-directors--id-">Update the specified resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-directors--id-">
                        <a href="#endpoints-DELETEapi-directors--id-">Remove the specified resource from storage.</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: June 7 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>Une api REST pour accéder à des milliers de films</p>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">localhost:9080</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

            <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "localhost:9080/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "localhost:9080/api/user"
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
$response = $client-&gt;get(
    'localhost:9080/api/user',
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
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
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
                    id="btn-executetryout-GETapi-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-movies--movie_id--actor">GET api/movies/{movie_id}/actor</h2>

<p>
</p>



<span id="example-requests-GETapi-movies--movie_id--actor">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "localhost:9080/api/movies/1/actor" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "localhost:9080/api/movies/1/actor"
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
$response = $client-&gt;get(
    'localhost:9080/api/movies/1/actor',
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

<span id="example-responses-GETapi-movies--movie_id--actor">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 11,
        &quot;name&quot;: &quot;Bryon Waelchi MD&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 11
        }
    },
    {
        &quot;id&quot;: 30,
        &quot;name&quot;: &quot;Prof. Sylvan Zulauf&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 30
        }
    },
    {
        &quot;id&quot;: 31,
        &quot;name&quot;: &quot;Bertram Herzog&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 31
        }
    },
    {
        &quot;id&quot;: 33,
        &quot;name&quot;: &quot;Mrs. Carole Wilderman&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 33
        }
    },
    {
        &quot;id&quot;: 44,
        &quot;name&quot;: &quot;Jerry Braun&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 44
        }
    },
    {
        &quot;id&quot;: 97,
        &quot;name&quot;: &quot;Brenden Gislason&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 97
        }
    },
    {
        &quot;id&quot;: 99,
        &quot;name&quot;: &quot;Wilmer Halvorson&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 99
        }
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Jamel Breitenberg&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 2
        }
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Ms. Yvette Graham&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 3
        }
    },
    {
        &quot;id&quot;: 8,
        &quot;name&quot;: &quot;Hildegard Schumm&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 8
        }
    },
    {
        &quot;id&quot;: 8,
        &quot;name&quot;: &quot;Hildegard Schumm&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 8
        }
    },
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Allie Hickle&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 1
        }
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Ms. Yvette Graham&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 3
        }
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-movies--movie_id--actor" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-movies--movie_id--actor"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-movies--movie_id--actor"></code></pre>
</span>
<span id="execution-error-GETapi-movies--movie_id--actor" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-movies--movie_id--actor"></code></pre>
</span>
<form id="form-GETapi-movies--movie_id--actor" data-method="GET"
      data-path="api/movies/{movie_id}/actor"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-movies--movie_id--actor', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-movies--movie_id--actor"
                    onclick="tryItOut('GETapi-movies--movie_id--actor');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-movies--movie_id--actor"
                    onclick="cancelTryOut('GETapi-movies--movie_id--actor');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-movies--movie_id--actor" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/movies/{movie_id}/actor</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>movie_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="movie_id"
               data-endpoint="GETapi-movies--movie_id--actor"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the movie.</p>
            </p>
                    </form>

            <h2 id="endpoints-POSTapi-movies--movie_id--actors">POST api/movies/{movie_id}/actors</h2>

<p>
</p>



<span id="example-requests-POSTapi-movies--movie_id--actors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "localhost:9080/api/movies/1/actors" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "localhost:9080/api/movies/1/actors"
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
$response = $client-&gt;post(
    'localhost:9080/api/movies/1/actors',
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

<span id="example-responses-POSTapi-movies--movie_id--actors">
</span>
<span id="execution-results-POSTapi-movies--movie_id--actors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-movies--movie_id--actors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-movies--movie_id--actors"></code></pre>
</span>
<span id="execution-error-POSTapi-movies--movie_id--actors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-movies--movie_id--actors"></code></pre>
</span>
<form id="form-POSTapi-movies--movie_id--actors" data-method="POST"
      data-path="api/movies/{movie_id}/actors"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-movies--movie_id--actors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-movies--movie_id--actors"
                    onclick="tryItOut('POSTapi-movies--movie_id--actors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-movies--movie_id--actors"
                    onclick="cancelTryOut('POSTapi-movies--movie_id--actors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-movies--movie_id--actors" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/movies/{movie_id}/actors</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>movie_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="movie_id"
               data-endpoint="POSTapi-movies--movie_id--actors"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the movie.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-movies--movie_id--director">GET api/movies/{movie_id}/director</h2>

<p>
</p>



<span id="example-requests-GETapi-movies--movie_id--director">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "localhost:9080/api/movies/1/director" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "localhost:9080/api/movies/1/director"
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
$response = $client-&gt;get(
    'localhost:9080/api/movies/1/director',
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

<span id="example-responses-GETapi-movies--movie_id--director">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-movies--movie_id--director" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-movies--movie_id--director"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-movies--movie_id--director"></code></pre>
</span>
<span id="execution-error-GETapi-movies--movie_id--director" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-movies--movie_id--director"></code></pre>
</span>
<form id="form-GETapi-movies--movie_id--director" data-method="GET"
      data-path="api/movies/{movie_id}/director"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-movies--movie_id--director', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-movies--movie_id--director"
                    onclick="tryItOut('GETapi-movies--movie_id--director');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-movies--movie_id--director"
                    onclick="cancelTryOut('GETapi-movies--movie_id--director');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-movies--movie_id--director" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/movies/{movie_id}/director</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>movie_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="movie_id"
               data-endpoint="GETapi-movies--movie_id--director"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the movie.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-movies">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-movies">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "localhost:9080/api/movies" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "localhost:9080/api/movies"
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
$response = $client-&gt;get(
    'localhost:9080/api/movies',
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

<span id="example-responses-GETapi-movies">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Non modi exercitationem enim fuga.&quot;,
        &quot;description&quot;: &quot;Voluptatem voluptatem ipsa dolorem magnam aut placeat deleniti eius. Repellat perferendis et voluptatibus quas. Soluta et cum est iusto eligendi.&quot;,
        &quot;duration&quot;: 12582,
        &quot;release&quot;: &quot;1989-11-01&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 6
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Qui aut laudantium officiis quia dolorem.&quot;,
        &quot;description&quot;: &quot;Voluptatem aperiam ipsam molestias modi commodi. Quaerat dolor autem nostrum ad minus. Molestiae dolor est corporis quia culpa. Dolorum earum fugiat voluptatem magni veritatis sit.&quot;,
        &quot;duration&quot;: 12577,
        &quot;release&quot;: &quot;2006-10-24&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 2
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Eaque commodi esse odio.&quot;,
        &quot;description&quot;: &quot;Ipsa molestias et nemo sint fugit atque autem impedit. Eos quia quia vel officia possimus libero. Et qui assumenda dolores sed voluptas dolores. Quia aut dolores enim laudantium.&quot;,
        &quot;duration&quot;: 8407,
        &quot;release&quot;: &quot;2007-10-09&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 3
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;Eum assumenda alias.&quot;,
        &quot;description&quot;: &quot;Vero unde modi est. Dolor assumenda a odio quam sint quaerat ea. Quidem animi doloribus et aut aperiam est molestias eveniet.&quot;,
        &quot;duration&quot;: 921,
        &quot;release&quot;: &quot;1984-09-09&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 25
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Qui nobis temporibus beatae et blanditiis.&quot;,
        &quot;description&quot;: &quot;Incidunt quia qui quis sapiente quae aut et. Sequi debitis omnis ea rem dolor. Inventore molestiae possimus fugit velit itaque totam minima ratione. Voluptatibus dolorum dolorem aut est.&quot;,
        &quot;duration&quot;: 3801,
        &quot;release&quot;: &quot;1998-11-10&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 10
    },
    {
        &quot;id&quot;: 6,
        &quot;name&quot;: &quot;Voluptatem error asperiores nemo perferendis.&quot;,
        &quot;description&quot;: &quot;Dolor amet repudiandae quia quo. Soluta dolor veniam maxime. Odit voluptatum eaque dolorum rerum non rerum. Velit quo consequatur sunt non.&quot;,
        &quot;duration&quot;: 7208,
        &quot;release&quot;: &quot;1975-11-06&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 16
    },
    {
        &quot;id&quot;: 7,
        &quot;name&quot;: &quot;Fuga placeat quo qui praesentium.&quot;,
        &quot;description&quot;: &quot;Ut aut voluptates exercitationem non qui nam. Ut est ex ut cupiditate delectus. Rerum omnis voluptatem sunt at earum.&quot;,
        &quot;duration&quot;: 4684,
        &quot;release&quot;: &quot;1982-11-12&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 13
    },
    {
        &quot;id&quot;: 8,
        &quot;name&quot;: &quot;Incidunt similique iste sint officia magnam.&quot;,
        &quot;description&quot;: &quot;Iusto eos sed eum ducimus. Eveniet iste eius ut. Error sit adipisci accusamus laudantium quia.&quot;,
        &quot;duration&quot;: 2781,
        &quot;release&quot;: &quot;1973-12-21&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 27
    },
    {
        &quot;id&quot;: 9,
        &quot;name&quot;: &quot;Vitae reiciendis modi.&quot;,
        &quot;description&quot;: &quot;Optio quia facere quibusdam. Ducimus vel et corrupti impedit mollitia qui. Quia quasi et aperiam debitis eum accusantium. Commodi qui odio reprehenderit.&quot;,
        &quot;duration&quot;: 5069,
        &quot;release&quot;: &quot;1984-09-14&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 20
    },
    {
        &quot;id&quot;: 10,
        &quot;name&quot;: &quot;Sequi repudiandae temporibus commodi.&quot;,
        &quot;description&quot;: &quot;Est inventore quasi sed neque. Dolorem voluptatibus itaque animi nam accusantium aperiam quo expedita. Harum est architecto tenetur ex officia sint reprehenderit. Nihil error saepe ducimus nostrum. Ipsa optio molestiae cum aperiam et eum.&quot;,
        &quot;duration&quot;: 11720,
        &quot;release&quot;: &quot;1999-07-22&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 17
    },
    {
        &quot;id&quot;: 11,
        &quot;name&quot;: &quot;Optio enim rem quo.&quot;,
        &quot;description&quot;: &quot;Et vitae facere ut aspernatur corrupti quia saepe. Aspernatur consequatur minima qui odit quisquam nihil. Sed iure voluptatem voluptates et iste quasi sequi. Aspernatur quaerat soluta dolore rerum id.&quot;,
        &quot;duration&quot;: 13696,
        &quot;release&quot;: &quot;1976-03-10&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 1
    },
    {
        &quot;id&quot;: 12,
        &quot;name&quot;: &quot;Voluptas accusantium quidem iste rerum.&quot;,
        &quot;description&quot;: &quot;Dolorum fugiat et repellendus qui maiores. Provident minus rerum laudantium quibusdam. Architecto dignissimos dolores sunt consectetur et corporis. Nesciunt et dignissimos adipisci vel repudiandae.&quot;,
        &quot;duration&quot;: 10303,
        &quot;release&quot;: &quot;2019-01-28&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 23
    },
    {
        &quot;id&quot;: 13,
        &quot;name&quot;: &quot;Eius omnis impedit molestias dolorum.&quot;,
        &quot;description&quot;: &quot;Quasi rerum nostrum et sunt accusamus aut expedita. Suscipit rem numquam sit officia. Itaque et atque dolorem eum perferendis saepe ea voluptatem. Non ut ipsam a dolor veniam.&quot;,
        &quot;duration&quot;: 947,
        &quot;release&quot;: &quot;2011-10-20&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 5
    },
    {
        &quot;id&quot;: 14,
        &quot;name&quot;: &quot;Numquam ut a eum ut.&quot;,
        &quot;description&quot;: &quot;Nesciunt tenetur minima accusantium eum et molestias. Eveniet sint sit in.&quot;,
        &quot;duration&quot;: 8437,
        &quot;release&quot;: &quot;1974-06-01&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 11
    },
    {
        &quot;id&quot;: 15,
        &quot;name&quot;: &quot;Omnis voluptatem eius qui qui.&quot;,
        &quot;description&quot;: &quot;Aut nam illum est quos harum. Beatae suscipit excepturi cumque deserunt sed. Quia aliquam architecto sit omnis voluptatibus aut libero.&quot;,
        &quot;duration&quot;: 5460,
        &quot;release&quot;: &quot;2018-06-24&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 15
    },
    {
        &quot;id&quot;: 16,
        &quot;name&quot;: &quot;Ut labore dicta voluptatum sint.&quot;,
        &quot;description&quot;: &quot;Iure odio amet ut quaerat asperiores. Dicta quo ut deleniti voluptatem. Eligendi tempora explicabo molestias deleniti exercitationem quis enim. Aliquid possimus sit ut animi sapiente.&quot;,
        &quot;duration&quot;: 9998,
        &quot;release&quot;: &quot;1991-05-23&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 16
    },
    {
        &quot;id&quot;: 17,
        &quot;name&quot;: &quot;Aut enim est praesentium.&quot;,
        &quot;description&quot;: &quot;Nisi ut eos tempore velit ea. Deserunt possimus repellat voluptatem et. Possimus qui aut nam. Ex doloremque cumque occaecati facere sequi earum.&quot;,
        &quot;duration&quot;: 610,
        &quot;release&quot;: &quot;2020-12-08&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 9
    },
    {
        &quot;id&quot;: 18,
        &quot;name&quot;: &quot;Natus eveniet et beatae sint natus.&quot;,
        &quot;description&quot;: &quot;Voluptatum sit similique et aut. Minima similique et illum amet sit. Debitis in perferendis quas numquam itaque ipsa nobis.&quot;,
        &quot;duration&quot;: 5846,
        &quot;release&quot;: &quot;1993-07-13&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 12
    },
    {
        &quot;id&quot;: 19,
        &quot;name&quot;: &quot;Est consequatur nemo cupiditate.&quot;,
        &quot;description&quot;: &quot;Cum aut repellat repellendus ut architecto odit. Autem sint ex iste omnis. Iure ullam iusto dicta quod aut occaecati accusantium. Temporibus quae qui harum quam delectus praesentium.&quot;,
        &quot;duration&quot;: 9792,
        &quot;release&quot;: &quot;1994-07-22&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 24
    },
    {
        &quot;id&quot;: 20,
        &quot;name&quot;: &quot;Dolorem nemo et qui.&quot;,
        &quot;description&quot;: &quot;In vero enim distinctio alias eius rerum voluptas. Quae aut occaecati qui aspernatur mollitia eligendi. Veniam quas dolore natus autem vitae deleniti.&quot;,
        &quot;duration&quot;: 3652,
        &quot;release&quot;: &quot;2002-01-06&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 21
    },
    {
        &quot;id&quot;: 21,
        &quot;name&quot;: &quot;Architecto eum magni nesciunt ipsam.&quot;,
        &quot;description&quot;: &quot;Veniam ipsa asperiores ducimus placeat veritatis quos. Rerum esse maiores sint delectus dignissimos veniam.&quot;,
        &quot;duration&quot;: 11066,
        &quot;release&quot;: &quot;2001-10-18&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 27
    },
    {
        &quot;id&quot;: 22,
        &quot;name&quot;: &quot;Repellat alias nam quis fugit veritatis.&quot;,
        &quot;description&quot;: &quot;Consequuntur quia voluptas eaque fugiat odit aut similique. Animi omnis itaque ratione numquam adipisci. Ut voluptatem sed exercitationem quae et quis. Optio odit non pariatur autem quas quibusdam.&quot;,
        &quot;duration&quot;: 5358,
        &quot;release&quot;: &quot;1970-05-04&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 17
    },
    {
        &quot;id&quot;: 23,
        &quot;name&quot;: &quot;Tempore commodi accusantium adipisci.&quot;,
        &quot;description&quot;: &quot;Porro nihil quidem ipsum omnis veniam iusto. Laborum velit rerum sed nulla sequi fugit sit tenetur.&quot;,
        &quot;duration&quot;: 14452,
        &quot;release&quot;: &quot;1979-10-17&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 21
    },
    {
        &quot;id&quot;: 24,
        &quot;name&quot;: &quot;Quia quia repellat laboriosam.&quot;,
        &quot;description&quot;: &quot;Sit dolores ab placeat commodi recusandae sunt vitae. Dolor eum pariatur eum id omnis mollitia quisquam. Inventore tenetur autem impedit blanditiis.&quot;,
        &quot;duration&quot;: 3332,
        &quot;release&quot;: &quot;2023-04-23&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 3
    },
    {
        &quot;id&quot;: 25,
        &quot;name&quot;: &quot;Soluta minus consequatur in doloremque sit.&quot;,
        &quot;description&quot;: &quot;Vel voluptatibus vero delectus. Ea soluta consequuntur illum temporibus unde eligendi. Sequi dolor atque vel quibusdam deserunt dolores culpa alias.&quot;,
        &quot;duration&quot;: 10000,
        &quot;release&quot;: &quot;1975-07-07&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 11
    },
    {
        &quot;id&quot;: 26,
        &quot;name&quot;: &quot;Dolor sequi aspernatur fugit non.&quot;,
        &quot;description&quot;: &quot;Nemo et facilis non dolorem veniam sunt ad. Maxime explicabo dolorum dolorum ea ipsa in. Debitis maiores odit quidem voluptas rerum necessitatibus. Occaecati voluptates et illo nesciunt harum labore quam ad.&quot;,
        &quot;duration&quot;: 13275,
        &quot;release&quot;: &quot;2022-03-16&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 7
    },
    {
        &quot;id&quot;: 27,
        &quot;name&quot;: &quot;Non qui eos at.&quot;,
        &quot;description&quot;: &quot;Earum ratione fuga numquam adipisci. Ea ea debitis et odit et et. Velit molestias ducimus dolores cupiditate quo iusto laboriosam. Consequatur laborum soluta aut est repellendus autem deleniti.&quot;,
        &quot;duration&quot;: 11919,
        &quot;release&quot;: &quot;2016-06-08&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 16
    },
    {
        &quot;id&quot;: 28,
        &quot;name&quot;: &quot;Rem adipisci quos.&quot;,
        &quot;description&quot;: &quot;Sed labore et nam non aut aliquid. Veniam tempore blanditiis et beatae. Expedita officiis quidem enim ex exercitationem ut. Cum aut aut ut aut iusto velit vero.&quot;,
        &quot;duration&quot;: 4045,
        &quot;release&quot;: &quot;2011-01-20&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 18
    },
    {
        &quot;id&quot;: 29,
        &quot;name&quot;: &quot;Vitae voluptatum vitae corrupti ducimus.&quot;,
        &quot;description&quot;: &quot;In rerum facilis in voluptas nulla aut et. Officia facere ipsa cum facere cupiditate. Ducimus iure dolor corporis iusto. Numquam voluptatem quasi dolores quis cumque eos fugit.&quot;,
        &quot;duration&quot;: 10315,
        &quot;release&quot;: &quot;2010-06-13&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 25
    },
    {
        &quot;id&quot;: 30,
        &quot;name&quot;: &quot;Sit vel sed.&quot;,
        &quot;description&quot;: &quot;Sint reprehenderit voluptatem qui optio error. Beatae eos nihil totam maiores voluptas corporis veritatis. Nulla est earum vel aut. Iusto in quo error ut. Quo possimus a quia ipsam eveniet.&quot;,
        &quot;duration&quot;: 7789,
        &quot;release&quot;: &quot;1981-12-13&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 12
    },
    {
        &quot;id&quot;: 31,
        &quot;name&quot;: &quot;In et quis.&quot;,
        &quot;description&quot;: &quot;Illum quo minima et rerum provident rerum. Aut earum natus dolorum repellendus nihil. Corporis nihil similique suscipit repellat nobis. Alias unde aut ea laboriosam nostrum ipsam maiores.&quot;,
        &quot;duration&quot;: 13846,
        &quot;release&quot;: &quot;1977-08-24&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 9
    },
    {
        &quot;id&quot;: 32,
        &quot;name&quot;: &quot;Sunt et ab inventore eligendi.&quot;,
        &quot;description&quot;: &quot;Eos id consectetur perspiciatis et iure iure fugiat. Officia est et excepturi sint labore. Quo eligendi non eum unde commodi.&quot;,
        &quot;duration&quot;: 8328,
        &quot;release&quot;: &quot;2017-05-13&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 28
    },
    {
        &quot;id&quot;: 33,
        &quot;name&quot;: &quot;Iste sapiente aut quo quisquam.&quot;,
        &quot;description&quot;: &quot;Quia et enim dolore deserunt. Laborum porro fugit nemo quia quibusdam. Non aliquam id dolor consequatur.&quot;,
        &quot;duration&quot;: 8970,
        &quot;release&quot;: &quot;1995-02-28&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 22
    },
    {
        &quot;id&quot;: 34,
        &quot;name&quot;: &quot;Ipsa veritatis et non provident quisquam.&quot;,
        &quot;description&quot;: &quot;Ipsam neque dolorem deleniti id. Doloribus est quaerat temporibus sit beatae inventore odio. Alias esse non eveniet libero nisi explicabo cum et. Assumenda hic praesentium aut rerum autem.&quot;,
        &quot;duration&quot;: 9101,
        &quot;release&quot;: &quot;1984-12-30&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 30
    },
    {
        &quot;id&quot;: 35,
        &quot;name&quot;: &quot;Labore ut enim iste necessitatibus.&quot;,
        &quot;description&quot;: &quot;Magni et ipsam ducimus omnis quod. Asperiores sint aperiam et dolor ut esse. Velit suscipit voluptates sequi voluptas qui accusamus placeat.&quot;,
        &quot;duration&quot;: 7585,
        &quot;release&quot;: &quot;2004-01-07&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 1
    },
    {
        &quot;id&quot;: 36,
        &quot;name&quot;: &quot;Et totam quae reiciendis atque ratione.&quot;,
        &quot;description&quot;: &quot;Et numquam velit quia quam. Voluptatum saepe sit nemo aut deleniti explicabo. Eum exercitationem distinctio corrupti omnis.&quot;,
        &quot;duration&quot;: 8283,
        &quot;release&quot;: &quot;2015-04-14&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 2
    },
    {
        &quot;id&quot;: 37,
        &quot;name&quot;: &quot;Ut ad omnis.&quot;,
        &quot;description&quot;: &quot;Ut consequatur error sed ut. Aliquam maxime sint est qui iure omnis. Ipsam deserunt expedita dolore. Ut et fugit aperiam pariatur quis repellendus ullam dolorum.&quot;,
        &quot;duration&quot;: 5757,
        &quot;release&quot;: &quot;1998-12-08&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 6
    },
    {
        &quot;id&quot;: 38,
        &quot;name&quot;: &quot;Quia doloribus iste.&quot;,
        &quot;description&quot;: &quot;Sed placeat minus cum consequuntur. Repellendus modi quia reiciendis tempore ut quo quo. Enim sed minima quisquam sed voluptatibus. Dolor aut ea deserunt sint.&quot;,
        &quot;duration&quot;: 11722,
        &quot;release&quot;: &quot;1995-01-07&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 6
    },
    {
        &quot;id&quot;: 39,
        &quot;name&quot;: &quot;Et nemo eum dolore natus.&quot;,
        &quot;description&quot;: &quot;Quas vel saepe fugiat assumenda a officiis odio. Voluptas dolor rem sit autem sit est. Officiis eos at est alias incidunt atque veniam.&quot;,
        &quot;duration&quot;: 2877,
        &quot;release&quot;: &quot;1998-04-22&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 24
    },
    {
        &quot;id&quot;: 40,
        &quot;name&quot;: &quot;Ut quaerat aliquid quia asperiores.&quot;,
        &quot;description&quot;: &quot;Est sunt vel pariatur sint consequuntur. Facere dolore expedita ut nulla sed temporibus.&quot;,
        &quot;duration&quot;: 7042,
        &quot;release&quot;: &quot;2010-12-28&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 8
    },
    {
        &quot;id&quot;: 41,
        &quot;name&quot;: &quot;Laborum incidunt eum.&quot;,
        &quot;description&quot;: &quot;Voluptatem ipsum omnis animi molestiae. Dolorum molestias pariatur ab laboriosam sunt est. Sed sed dolor est rerum.&quot;,
        &quot;duration&quot;: 7887,
        &quot;release&quot;: &quot;1993-06-08&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 12
    },
    {
        &quot;id&quot;: 42,
        &quot;name&quot;: &quot;Dolorem cupiditate impedit voluptates minus sit.&quot;,
        &quot;description&quot;: &quot;Incidunt in sapiente totam ab exercitationem voluptatibus rerum. Voluptas iste non corporis neque. Officia aut iusto sit deserunt est impedit harum.&quot;,
        &quot;duration&quot;: 4970,
        &quot;release&quot;: &quot;2021-09-27&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 27
    },
    {
        &quot;id&quot;: 43,
        &quot;name&quot;: &quot;Accusamus repudiandae corporis velit.&quot;,
        &quot;description&quot;: &quot;Eveniet est aut molestias culpa. Illo est ut voluptates occaecati inventore. Voluptatum est omnis omnis nihil laboriosam sed.&quot;,
        &quot;duration&quot;: 3418,
        &quot;release&quot;: &quot;1989-03-16&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 22
    },
    {
        &quot;id&quot;: 44,
        &quot;name&quot;: &quot;Voluptas debitis hic mollitia autem magnam.&quot;,
        &quot;description&quot;: &quot;Officiis magni commodi inventore eos tempora. Sed sit ut repellendus eum reiciendis hic. Minima cum assumenda architecto doloribus neque exercitationem.&quot;,
        &quot;duration&quot;: 792,
        &quot;release&quot;: &quot;1986-05-18&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 27
    },
    {
        &quot;id&quot;: 45,
        &quot;name&quot;: &quot;Ut itaque tenetur velit consectetur aliquam.&quot;,
        &quot;description&quot;: &quot;Labore optio earum quasi fugiat maxime. Incidunt quis mollitia unde deserunt ab. Veritatis voluptas in iste cumque voluptatem. Excepturi voluptatem sed dolorem est sequi.&quot;,
        &quot;duration&quot;: 9537,
        &quot;release&quot;: &quot;1988-04-16&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 12
    },
    {
        &quot;id&quot;: 46,
        &quot;name&quot;: &quot;Qui deleniti sit quis maiores.&quot;,
        &quot;description&quot;: &quot;Est magnam incidunt nihil ut nemo praesentium possimus. In consectetur odit voluptates. Quae ea non repudiandae rerum omnis qui eaque. Et tempore est quam doloremque omnis et.&quot;,
        &quot;duration&quot;: 844,
        &quot;release&quot;: &quot;2004-09-17&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 9
    },
    {
        &quot;id&quot;: 47,
        &quot;name&quot;: &quot;Quia qui ipsa.&quot;,
        &quot;description&quot;: &quot;Et expedita reiciendis eos laboriosam qui consequuntur minus. Iusto voluptas qui sequi qui dolor exercitationem. Velit blanditiis aut sit vero. Officiis impedit tempora et maiores dolore assumenda. Aut voluptatem atque id.&quot;,
        &quot;duration&quot;: 11520,
        &quot;release&quot;: &quot;1980-11-01&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 28
    },
    {
        &quot;id&quot;: 48,
        &quot;name&quot;: &quot;Vitae repellat culpa sit ipsam eum.&quot;,
        &quot;description&quot;: &quot;Voluptas maiores incidunt possimus et. Voluptatum corrupti cupiditate est voluptatibus necessitatibus eveniet et rerum. Repudiandae sed ex dolorum ad voluptates voluptas ut. Ratione fugit voluptatem incidunt reiciendis sed ut non.&quot;,
        &quot;duration&quot;: 13212,
        &quot;release&quot;: &quot;1975-02-03&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 2
    },
    {
        &quot;id&quot;: 49,
        &quot;name&quot;: &quot;Nesciunt et doloremque aut labore.&quot;,
        &quot;description&quot;: &quot;Quod officia natus consequatur non. Repudiandae animi est a voluptates esse dolore. Nam tenetur debitis qui sed ut nesciunt dolorem et.&quot;,
        &quot;duration&quot;: 4135,
        &quot;release&quot;: &quot;2022-02-24&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 13
    },
    {
        &quot;id&quot;: 50,
        &quot;name&quot;: &quot;Qui quia dolorum.&quot;,
        &quot;description&quot;: &quot;Nisi fugit error totam totam inventore. Rem et doloremque sit velit rerum eum. Dolorem delectus consequatur eius sed.&quot;,
        &quot;duration&quot;: 990,
        &quot;release&quot;: &quot;2004-07-21&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;director_id&quot;: 28
    },
    {
        &quot;id&quot;: 51,
        &quot;name&quot;: &quot;Harry Potter &agrave; l'&eacute;cole des sorciers&quot;,
        &quot;description&quot;: &quot;Orphelin, Harry Potter a &eacute;t&eacute; recueilli &agrave; contrec&oelig;ur par son oncle Vernon et sa tante P&eacute;tunia, aussi cruels que mesquins, qui n'h&eacute;sitent pas &agrave; le faire dormir dans le placard sous l'escalier.&quot;,
        &quot;duration&quot;: 9120,
        &quot;release&quot;: &quot;2001-12-05&quot;,
        &quot;created_at&quot;: &quot;2023-06-07T12:36:39.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-07T12:36:39.000000Z&quot;,
        &quot;director_id&quot;: 8
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-movies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-movies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-movies"></code></pre>
</span>
<span id="execution-error-GETapi-movies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-movies"></code></pre>
</span>
<form id="form-GETapi-movies" data-method="GET"
      data-path="api/movies"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-movies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-movies"
                    onclick="tryItOut('GETapi-movies');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-movies"
                    onclick="cancelTryOut('GETapi-movies');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-movies" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/movies</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-movies">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-movies">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "localhost:9080/api/movies" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"ryrzksshxtkdwqrbitdcvbuwqtwnwznspaztsdktnwezhxjdsddckptoqqaroyiesrzzzsbsbwfgjqfliwvzhrhnkqhwbvvjdz\",
    \"description\": \"tenetur\",
    \"duration\": 1.4708213,
    \"release\": \"2023-06-07T15:27:51\",
    \"director_id\": 20
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "localhost:9080/api/movies"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ryrzksshxtkdwqrbitdcvbuwqtwnwznspaztsdktnwezhxjdsddckptoqqaroyiesrzzzsbsbwfgjqfliwvzhrhnkqhwbvvjdz",
    "description": "tenetur",
    "duration": 1.4708213,
    "release": "2023-06-07T15:27:51",
    "director_id": 20
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'localhost:9080/api/movies',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'ryrzksshxtkdwqrbitdcvbuwqtwnwznspaztsdktnwezhxjdsddckptoqqaroyiesrzzzsbsbwfgjqfliwvzhrhnkqhwbvvjdz',
            'description' =&gt; 'tenetur',
            'duration' =&gt; 1.4708213,
            'release' =&gt; '2023-06-07T15:27:51',
            'director_id' =&gt; 20,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-movies">
</span>
<span id="execution-results-POSTapi-movies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-movies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-movies"></code></pre>
</span>
<span id="execution-error-POSTapi-movies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-movies"></code></pre>
</span>
<form id="form-POSTapi-movies" data-method="POST"
      data-path="api/movies"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-movies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-movies"
                    onclick="tryItOut('POSTapi-movies');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-movies"
                    onclick="cancelTryOut('POSTapi-movies');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-movies" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/movies</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-movies"
               value="ryrzksshxtkdwqrbitdcvbuwqtwnwznspaztsdktnwezhxjdsddckptoqqaroyiesrzzzsbsbwfgjqfliwvzhrhnkqhwbvvjdz"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="description"
               data-endpoint="POSTapi-movies"
               value="tenetur"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>duration</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
                <input type="number"
               name="duration"
               data-endpoint="POSTapi-movies"
               value="1.4708213"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>release</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="release"
               data-endpoint="POSTapi-movies"
               value="2023-06-07T15:27:51"
               data-component="body" hidden>
    <br>
<p>Must be a valid date.</p>
        </p>
                <p>
            <b><code>director_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="director_id"
               data-endpoint="POSTapi-movies"
               value="20"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-GETapi-movies--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-movies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "localhost:9080/api/movies/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "localhost:9080/api/movies/1"
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
$response = $client-&gt;get(
    'localhost:9080/api/movies/1',
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

<span id="example-responses-GETapi-movies--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Non modi exercitationem enim fuga.&quot;,
    &quot;description&quot;: &quot;Voluptatem voluptatem ipsa dolorem magnam aut placeat deleniti eius. Repellat perferendis et voluptatibus quas. Soluta et cum est iusto eligendi.&quot;,
    &quot;duration&quot;: 12582,
    &quot;release&quot;: &quot;1989-11-01&quot;,
    &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
    &quot;director_id&quot;: 6
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-movies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-movies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-movies--id-"></code></pre>
</span>
<span id="execution-error-GETapi-movies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-movies--id-"></code></pre>
</span>
<form id="form-GETapi-movies--id-" data-method="GET"
      data-path="api/movies/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-movies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-movies--id-"
                    onclick="tryItOut('GETapi-movies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-movies--id-"
                    onclick="cancelTryOut('GETapi-movies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-movies--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/movies/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-movies--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the movie.</p>
            </p>
                    </form>

            <h2 id="endpoints-PUTapi-movies--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-movies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "localhost:9080/api/movies/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"rfptgseofadokymojuezxabrfqwilvkookbbgecdbspcczwpaqrfwhsdvpipfwoccriquwmmyqtqntvqszjhqeskfmfirelpnbbbwrlmaytlmxtgowogbkeybbzwysbivpsrffffyqysqquspzsxzrktcmjqtashbuwzhbtoaqyqrcolnnznoldjqokvcoiohnejvlgfhquezbcvtlxtfdkiblse\",
    \"description\": \"atque\",
    \"duration\": 15757,
    \"release\": \"2023-06-07\",
    \"director_id\": 7
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "localhost:9080/api/movies/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "rfptgseofadokymojuezxabrfqwilvkookbbgecdbspcczwpaqrfwhsdvpipfwoccriquwmmyqtqntvqszjhqeskfmfirelpnbbbwrlmaytlmxtgowogbkeybbzwysbivpsrffffyqysqquspzsxzrktcmjqtashbuwzhbtoaqyqrcolnnznoldjqokvcoiohnejvlgfhquezbcvtlxtfdkiblse",
    "description": "atque",
    "duration": 15757,
    "release": "2023-06-07",
    "director_id": 7
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'localhost:9080/api/movies/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'rfptgseofadokymojuezxabrfqwilvkookbbgecdbspcczwpaqrfwhsdvpipfwoccriquwmmyqtqntvqszjhqeskfmfirelpnbbbwrlmaytlmxtgowogbkeybbzwysbivpsrffffyqysqquspzsxzrktcmjqtashbuwzhbtoaqyqrcolnnznoldjqokvcoiohnejvlgfhquezbcvtlxtfdkiblse',
            'description' =&gt; 'atque',
            'duration' =&gt; 15757,
            'release' =&gt; '2023-06-07',
            'director_id' =&gt; 7,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-movies--id-">
</span>
<span id="execution-results-PUTapi-movies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-movies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-movies--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-movies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-movies--id-"></code></pre>
</span>
<form id="form-PUTapi-movies--id-" data-method="PUT"
      data-path="api/movies/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-movies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-movies--id-"
                    onclick="tryItOut('PUTapi-movies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-movies--id-"
                    onclick="cancelTryOut('PUTapi-movies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-movies--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/movies/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/movies/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-movies--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the movie.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-movies--id-"
               value="rfptgseofadokymojuezxabrfqwilvkookbbgecdbspcczwpaqrfwhsdvpipfwoccriquwmmyqtqntvqszjhqeskfmfirelpnbbbwrlmaytlmxtgowogbkeybbzwysbivpsrffffyqysqquspzsxzrktcmjqtashbuwzhbtoaqyqrcolnnznoldjqokvcoiohnejvlgfhquezbcvtlxtfdkiblse"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="description"
               data-endpoint="PUTapi-movies--id-"
               value="atque"
               data-component="body" hidden>
    <br>
<p>le bail signifie que l'execution s'arrete dés qu'il y a une erreur.</p>
        </p>
                <p>
            <b><code>duration</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="duration"
               data-endpoint="PUTapi-movies--id-"
               value="15757"
               data-component="body" hidden>
    <br>
<p>Must be at least 0. Must not be greater than 18000.</p>
        </p>
                <p>
            <b><code>release</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="release"
               data-endpoint="PUTapi-movies--id-"
               value="2023-06-07"
               data-component="body" hidden>
    <br>
<p>5 heures max. Must be a valid date in the format <code>Y-m-d</code>.</p>
        </p>
                <p>
            <b><code>director_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="director_id"
               data-endpoint="PUTapi-movies--id-"
               value="7"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-DELETEapi-movies--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-movies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "localhost:9080/api/movies/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "localhost:9080/api/movies/1"
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
$response = $client-&gt;delete(
    'localhost:9080/api/movies/1',
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

<span id="example-responses-DELETEapi-movies--id-">
</span>
<span id="execution-results-DELETEapi-movies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-movies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-movies--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-movies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-movies--id-"></code></pre>
</span>
<form id="form-DELETEapi-movies--id-" data-method="DELETE"
      data-path="api/movies/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-movies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-movies--id-"
                    onclick="tryItOut('DELETEapi-movies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-movies--id-"
                    onclick="cancelTryOut('DELETEapi-movies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-movies--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/movies/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-movies--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the movie.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-actors">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-actors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "localhost:9080/api/actors" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "localhost:9080/api/actors"
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
$response = $client-&gt;get(
    'localhost:9080/api/actors',
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

<span id="example-responses-GETapi-actors">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Allie Hickle&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Jamel Breitenberg&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Ms. Yvette Graham&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;Helen Zboncak&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Lexi Simonis&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;name&quot;: &quot;Dr. Wilber Okuneva&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;name&quot;: &quot;Dr. Deshaun Reynolds PhD&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;name&quot;: &quot;Hildegard Schumm&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;name&quot;: &quot;Dr. Alexane Wyman DVM&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;name&quot;: &quot;Ari Bogisich IV&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 11,
        &quot;name&quot;: &quot;Bryon Waelchi MD&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 12,
        &quot;name&quot;: &quot;Thora Kemmer&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;name&quot;: &quot;Alessia Swaniawski&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 14,
        &quot;name&quot;: &quot;Carmela Hegmann MD&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 15,
        &quot;name&quot;: &quot;Manley Metz&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 16,
        &quot;name&quot;: &quot;Bette Kilback DVM&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 17,
        &quot;name&quot;: &quot;Nia Murphy&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 18,
        &quot;name&quot;: &quot;Kurtis Strosin&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 19,
        &quot;name&quot;: &quot;Santina Ferry DVM&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 20,
        &quot;name&quot;: &quot;Bria Schamberger&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 21,
        &quot;name&quot;: &quot;Norval Braun&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 22,
        &quot;name&quot;: &quot;Tremayne Kshlerin&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 23,
        &quot;name&quot;: &quot;Connor Lebsack&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 24,
        &quot;name&quot;: &quot;Bella Senger&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 25,
        &quot;name&quot;: &quot;Eliza O'Hara&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 26,
        &quot;name&quot;: &quot;Ramon Eichmann IV&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 27,
        &quot;name&quot;: &quot;Jessy Friesen&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 28,
        &quot;name&quot;: &quot;Dr. Kavon Koch V&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 29,
        &quot;name&quot;: &quot;Dr. Kacie Hodkiewicz&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 30,
        &quot;name&quot;: &quot;Prof. Sylvan Zulauf&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 31,
        &quot;name&quot;: &quot;Bertram Herzog&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 32,
        &quot;name&quot;: &quot;Ethan Deckow PhD&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 33,
        &quot;name&quot;: &quot;Mrs. Carole Wilderman&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 34,
        &quot;name&quot;: &quot;Vincenza Veum&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 35,
        &quot;name&quot;: &quot;Miles Pagac&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 36,
        &quot;name&quot;: &quot;Mr. Benedict Purdy&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 37,
        &quot;name&quot;: &quot;Ora Jenkins&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 38,
        &quot;name&quot;: &quot;Dr. Violette Monahan&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 39,
        &quot;name&quot;: &quot;Deon Nader&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 40,
        &quot;name&quot;: &quot;Roslyn Schiller&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 41,
        &quot;name&quot;: &quot;Ms. Clemmie Stehr PhD&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 42,
        &quot;name&quot;: &quot;Mr. Arthur Champlin III&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 43,
        &quot;name&quot;: &quot;Ms. Fiona Pfeffer&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 44,
        &quot;name&quot;: &quot;Jerry Braun&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 45,
        &quot;name&quot;: &quot;Ms. Cleora Williamson DVM&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 46,
        &quot;name&quot;: &quot;Judson Kshlerin&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 47,
        &quot;name&quot;: &quot;Victor Goldner&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 48,
        &quot;name&quot;: &quot;Dr. Adonis Skiles&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 49,
        &quot;name&quot;: &quot;Henderson Torp&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 50,
        &quot;name&quot;: &quot;Prof. Ryann Ledner&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 51,
        &quot;name&quot;: &quot;Moriah Lehner&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 52,
        &quot;name&quot;: &quot;Noemie Nader&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 53,
        &quot;name&quot;: &quot;Charlotte Stamm&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 54,
        &quot;name&quot;: &quot;Felipe Hayes&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 55,
        &quot;name&quot;: &quot;Francis Lemke&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 56,
        &quot;name&quot;: &quot;Mariane Kshlerin&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 57,
        &quot;name&quot;: &quot;Amalia Mohr&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 58,
        &quot;name&quot;: &quot;Guy Mueller&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 59,
        &quot;name&quot;: &quot;Ms. Kaela Greenfelder MD&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 60,
        &quot;name&quot;: &quot;Dylan Brekke&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 61,
        &quot;name&quot;: &quot;Napoleon Runte&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 62,
        &quot;name&quot;: &quot;Manley O'Hara&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 63,
        &quot;name&quot;: &quot;Mariano Zulauf&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 64,
        &quot;name&quot;: &quot;Tyrese Ratke I&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 65,
        &quot;name&quot;: &quot;Karlee Hodkiewicz&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 66,
        &quot;name&quot;: &quot;Maximus King&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 67,
        &quot;name&quot;: &quot;Dr. Monroe Hermiston&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 68,
        &quot;name&quot;: &quot;Jerome Hackett&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 69,
        &quot;name&quot;: &quot;Norma Lubowitz&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 70,
        &quot;name&quot;: &quot;Edythe Treutel&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 71,
        &quot;name&quot;: &quot;Monte Weber III&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 72,
        &quot;name&quot;: &quot;Kiel Morar&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 73,
        &quot;name&quot;: &quot;Mrs. Delfina Crona MD&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 74,
        &quot;name&quot;: &quot;Prof. Raven Davis&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 75,
        &quot;name&quot;: &quot;Jaquelin Rohan&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 76,
        &quot;name&quot;: &quot;Hershel Schuppe&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 77,
        &quot;name&quot;: &quot;Mr. Wilson Yost&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 78,
        &quot;name&quot;: &quot;Nash Gaylord&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 79,
        &quot;name&quot;: &quot;Amy Simonis&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 80,
        &quot;name&quot;: &quot;Brock Schmeler&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 81,
        &quot;name&quot;: &quot;Maci Schneider&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 82,
        &quot;name&quot;: &quot;Prof. Laverne Jast Jr.&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 83,
        &quot;name&quot;: &quot;Dr. Juana Herzog&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 84,
        &quot;name&quot;: &quot;Zora Cruickshank&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 85,
        &quot;name&quot;: &quot;Marco Howell&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 86,
        &quot;name&quot;: &quot;Ms. Ally Steuber IV&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 87,
        &quot;name&quot;: &quot;Caleigh Durgan&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 88,
        &quot;name&quot;: &quot;Dr. Alek Hermiston&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 89,
        &quot;name&quot;: &quot;Dr. Junior Beer&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 90,
        &quot;name&quot;: &quot;Madalyn Turcotte I&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 91,
        &quot;name&quot;: &quot;Ms. Ruthie Bartoletti IV&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 92,
        &quot;name&quot;: &quot;Dandre Kirlin IV&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 93,
        &quot;name&quot;: &quot;Dr. Casper Morar Sr.&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 94,
        &quot;name&quot;: &quot;Josiane Thiel&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 95,
        &quot;name&quot;: &quot;Mr. Green Kuvalis&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 96,
        &quot;name&quot;: &quot;Chaz Herzog&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 97,
        &quot;name&quot;: &quot;Brenden Gislason&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 98,
        &quot;name&quot;: &quot;Eduardo Rowe&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 99,
        &quot;name&quot;: &quot;Wilmer Halvorson&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 100,
        &quot;name&quot;: &quot;Prof. Alycia Kuvalis I&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-actors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-actors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-actors"></code></pre>
</span>
<span id="execution-error-GETapi-actors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-actors"></code></pre>
</span>
<form id="form-GETapi-actors" data-method="GET"
      data-path="api/actors"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-actors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-actors"
                    onclick="tryItOut('GETapi-actors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-actors"
                    onclick="cancelTryOut('GETapi-actors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-actors" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/actors</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-actors">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-actors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "localhost:9080/api/actors" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"yxwasprrshroukdzgxeyahejjxiwemeiivouqxleomzskwabzvjckvqbfisy\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "localhost:9080/api/actors"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "yxwasprrshroukdzgxeyahejjxiwemeiivouqxleomzskwabzvjckvqbfisy"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'localhost:9080/api/actors',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'yxwasprrshroukdzgxeyahejjxiwemeiivouqxleomzskwabzvjckvqbfisy',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-actors">
</span>
<span id="execution-results-POSTapi-actors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-actors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-actors"></code></pre>
</span>
<span id="execution-error-POSTapi-actors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-actors"></code></pre>
</span>
<form id="form-POSTapi-actors" data-method="POST"
      data-path="api/actors"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-actors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-actors"
                    onclick="tryItOut('POSTapi-actors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-actors"
                    onclick="cancelTryOut('POSTapi-actors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-actors" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/actors</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-actors"
               value="yxwasprrshroukdzgxeyahejjxiwemeiivouqxleomzskwabzvjckvqbfisy"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
        </form>

            <h2 id="endpoints-GETapi-actors--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-actors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "localhost:9080/api/actors/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "localhost:9080/api/actors/1"
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
$response = $client-&gt;get(
    'localhost:9080/api/actors/1',
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

<span id="example-responses-GETapi-actors--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 54
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Allie Hickle&quot;,
    &quot;created_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2023-06-06T14:23:43.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-actors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-actors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-actors--id-"></code></pre>
</span>
<span id="execution-error-GETapi-actors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-actors--id-"></code></pre>
</span>
<form id="form-GETapi-actors--id-" data-method="GET"
      data-path="api/actors/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-actors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-actors--id-"
                    onclick="tryItOut('GETapi-actors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-actors--id-"
                    onclick="cancelTryOut('GETapi-actors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-actors--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/actors/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-actors--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the actor.</p>
            </p>
                    </form>

            <h2 id="endpoints-PUTapi-actors--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-actors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "localhost:9080/api/actors/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"fzebbbmdukthakjylrjtpksfczhwevwjqetiqlpihctbsuliujigrbxkvkzeftrrxyyiayisbqbsvmeyjzleefzzpwzcownsqzwfpgntzpkiqtdvk\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "localhost:9080/api/actors/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "fzebbbmdukthakjylrjtpksfczhwevwjqetiqlpihctbsuliujigrbxkvkzeftrrxyyiayisbqbsvmeyjzleefzzpwzcownsqzwfpgntzpkiqtdvk"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'localhost:9080/api/actors/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'fzebbbmdukthakjylrjtpksfczhwevwjqetiqlpihctbsuliujigrbxkvkzeftrrxyyiayisbqbsvmeyjzleefzzpwzcownsqzwfpgntzpkiqtdvk',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-actors--id-">
</span>
<span id="execution-results-PUTapi-actors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-actors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-actors--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-actors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-actors--id-"></code></pre>
</span>
<form id="form-PUTapi-actors--id-" data-method="PUT"
      data-path="api/actors/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-actors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-actors--id-"
                    onclick="tryItOut('PUTapi-actors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-actors--id-"
                    onclick="cancelTryOut('PUTapi-actors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-actors--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/actors/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/actors/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-actors--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the actor.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-actors--id-"
               value="fzebbbmdukthakjylrjtpksfczhwevwjqetiqlpihctbsuliujigrbxkvkzeftrrxyyiayisbqbsvmeyjzleefzzpwzcownsqzwfpgntzpkiqtdvk"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
        </form>

            <h2 id="endpoints-DELETEapi-actors--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-actors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "localhost:9080/api/actors/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "localhost:9080/api/actors/1"
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
$response = $client-&gt;delete(
    'localhost:9080/api/actors/1',
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

<span id="example-responses-DELETEapi-actors--id-">
</span>
<span id="execution-results-DELETEapi-actors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-actors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-actors--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-actors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-actors--id-"></code></pre>
</span>
<form id="form-DELETEapi-actors--id-" data-method="DELETE"
      data-path="api/actors/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-actors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-actors--id-"
                    onclick="tryItOut('DELETEapi-actors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-actors--id-"
                    onclick="cancelTryOut('DELETEapi-actors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-actors--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/actors/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-actors--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the actor.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-directors">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-directors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "localhost:9080/api/directors" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "localhost:9080/api/directors"
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
$response = $client-&gt;get(
    'localhost:9080/api/directors',
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

<span id="example-responses-GETapi-directors">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 53
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Anais Nikolaus&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Lionel Lockman&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Prof. Dina Ritchie&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;Mr. Eldon Tremblay&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Dr. Cleora Luettgen DDS&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;name&quot;: &quot;Ms. Katelynn Koelpin Sr.&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;name&quot;: &quot;Lester Sporer&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;name&quot;: &quot;Aylin Kuvalis Jr.&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;name&quot;: &quot;Kurt Bayer&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;name&quot;: &quot;Freeda Marks&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 11,
        &quot;name&quot;: &quot;Paris Jerde&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 12,
        &quot;name&quot;: &quot;Mavis Rosenbaum&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;name&quot;: &quot;Axel Kozey&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 14,
        &quot;name&quot;: &quot;Ms. Catalina Purdy&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 15,
        &quot;name&quot;: &quot;Jakayla Bogisich&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 16,
        &quot;name&quot;: &quot;Tod Huel Jr.&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 17,
        &quot;name&quot;: &quot;Billie Kling&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 18,
        &quot;name&quot;: &quot;Toney Champlin&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 19,
        &quot;name&quot;: &quot;Viviane Ferry Jr.&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 20,
        &quot;name&quot;: &quot;Lottie Sanford&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 21,
        &quot;name&quot;: &quot;Agustina Koss&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 22,
        &quot;name&quot;: &quot;Lewis Labadie&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 23,
        &quot;name&quot;: &quot;Jaime Krajcik Sr.&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 24,
        &quot;name&quot;: &quot;Orland Boehm&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 25,
        &quot;name&quot;: &quot;Marcos Schamberger&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 26,
        &quot;name&quot;: &quot;Prof. Garett Crooks Jr.&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 27,
        &quot;name&quot;: &quot;Malinda Labadie&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 28,
        &quot;name&quot;: &quot;Juwan Dooley I&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 29,
        &quot;name&quot;: &quot;Darrell Bergstrom&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    },
    {
        &quot;id&quot;: 30,
        &quot;name&quot;: &quot;Florence Nienow&quot;,
        &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-directors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-directors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-directors"></code></pre>
</span>
<span id="execution-error-GETapi-directors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-directors"></code></pre>
</span>
<form id="form-GETapi-directors" data-method="GET"
      data-path="api/directors"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-directors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-directors"
                    onclick="tryItOut('GETapi-directors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-directors"
                    onclick="cancelTryOut('GETapi-directors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-directors" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/directors</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-directors">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-directors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "localhost:9080/api/directors" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"batjuqoioaznrvanjidowscqimmciggttdufiwkkrcpcwlixudokheppopnnfkppmatpelhtyruauemgbmpkyzqowwqmwokpzhgarxfczlyxlolfkrymbbwyiwuzndwmbypmpcfrsdxyhrennquvbpniehtzvvkwtddtsbyrfifxmvkqkpakcvvxrwwwmcjixqbonszzyuaqelteormgu\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "localhost:9080/api/directors"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "batjuqoioaznrvanjidowscqimmciggttdufiwkkrcpcwlixudokheppopnnfkppmatpelhtyruauemgbmpkyzqowwqmwokpzhgarxfczlyxlolfkrymbbwyiwuzndwmbypmpcfrsdxyhrennquvbpniehtzvvkwtddtsbyrfifxmvkqkpakcvvxrwwwmcjixqbonszzyuaqelteormgu"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'localhost:9080/api/directors',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'batjuqoioaznrvanjidowscqimmciggttdufiwkkrcpcwlixudokheppopnnfkppmatpelhtyruauemgbmpkyzqowwqmwokpzhgarxfczlyxlolfkrymbbwyiwuzndwmbypmpcfrsdxyhrennquvbpniehtzvvkwtddtsbyrfifxmvkqkpakcvvxrwwwmcjixqbonszzyuaqelteormgu',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-directors">
</span>
<span id="execution-results-POSTapi-directors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-directors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-directors"></code></pre>
</span>
<span id="execution-error-POSTapi-directors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-directors"></code></pre>
</span>
<form id="form-POSTapi-directors" data-method="POST"
      data-path="api/directors"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-directors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-directors"
                    onclick="tryItOut('POSTapi-directors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-directors"
                    onclick="cancelTryOut('POSTapi-directors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-directors" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/directors</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-directors"
               value="batjuqoioaznrvanjidowscqimmciggttdufiwkkrcpcwlixudokheppopnnfkppmatpelhtyruauemgbmpkyzqowwqmwokpzhgarxfczlyxlolfkrymbbwyiwuzndwmbypmpcfrsdxyhrennquvbpniehtzvvkwtddtsbyrfifxmvkqkpakcvvxrwwwmcjixqbonszzyuaqelteormgu"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
        </form>

            <h2 id="endpoints-GETapi-directors--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-directors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "localhost:9080/api/directors/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "localhost:9080/api/directors/1"
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
$response = $client-&gt;get(
    'localhost:9080/api/directors/1',
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

<span id="example-responses-GETapi-directors--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 52
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Anais Nikolaus&quot;,
    &quot;created_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2023-06-06T14:23:44.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-directors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-directors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-directors--id-"></code></pre>
</span>
<span id="execution-error-GETapi-directors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-directors--id-"></code></pre>
</span>
<form id="form-GETapi-directors--id-" data-method="GET"
      data-path="api/directors/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-directors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-directors--id-"
                    onclick="tryItOut('GETapi-directors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-directors--id-"
                    onclick="cancelTryOut('GETapi-directors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-directors--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/directors/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-directors--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the director.</p>
            </p>
                    </form>

            <h2 id="endpoints-PUTapi-directors--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-directors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "localhost:9080/api/directors/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"qnifz\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "localhost:9080/api/directors/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "qnifz"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'localhost:9080/api/directors/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'qnifz',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-directors--id-">
</span>
<span id="execution-results-PUTapi-directors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-directors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-directors--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-directors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-directors--id-"></code></pre>
</span>
<form id="form-PUTapi-directors--id-" data-method="PUT"
      data-path="api/directors/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-directors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-directors--id-"
                    onclick="tryItOut('PUTapi-directors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-directors--id-"
                    onclick="cancelTryOut('PUTapi-directors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-directors--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/directors/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/directors/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-directors--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the director.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-directors--id-"
               value="qnifz"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
        </form>

            <h2 id="endpoints-DELETEapi-directors--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-directors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "localhost:9080/api/directors/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "localhost:9080/api/directors/1"
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
$response = $client-&gt;delete(
    'localhost:9080/api/directors/1',
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

<span id="example-responses-DELETEapi-directors--id-">
</span>
<span id="execution-results-DELETEapi-directors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-directors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-directors--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-directors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-directors--id-"></code></pre>
</span>
<form id="form-DELETEapi-directors--id-" data-method="DELETE"
      data-path="api/directors/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-directors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-directors--id-"
                    onclick="tryItOut('DELETEapi-directors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-directors--id-"
                    onclick="cancelTryOut('DELETEapi-directors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-directors--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/directors/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-directors--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the director.</p>
            </p>
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
