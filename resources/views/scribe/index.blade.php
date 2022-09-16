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
            </style>

    <script>
        var baseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.0.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.0.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

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
                    <ul id="tocify-header-apartments-api" class="tocify-header">
                <li class="tocify-item level-1" data-unique="apartments-api">
                    <a href="#apartments-api">Apartments API</a>
                </li>
                                    <ul id="tocify-subheader-apartments-api" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="apartments-api-GETapi-apt-showall">
                                <a href="#apartments-api-GETapi-apt-showall">fetch all apartments</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="apartments-api-GETapi-apt-create">
                                <a href="#apartments-api-GETapi-apt-create">Create Apartment Request</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="apartments-api-POSTapi-apt-store">
                                <a href="#apartments-api-POSTapi-apt-store">store apartment request</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="apartments-api-GETapi-apt-edit--id-">
                                <a href="#apartments-api-GETapi-apt-edit--id-">edit apartmemt request</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="apartments-api-PUTapi-apt-update--id-">
                                <a href="#apartments-api-PUTapi-apt-update--id-">Update Apartment Request</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="apartments-api-DELETEapi-apt-delete--id-">
                                <a href="#apartments-api-DELETEapi-apt-delete--id-">Delete Apartment Request</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-groups-api" class="tocify-header">
                <li class="tocify-item level-1" data-unique="groups-api">
                    <a href="#groups-api">Groups API</a>
                </li>
                                    <ul id="tocify-subheader-groups-api" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="groups-api-GETapi-groups-showall">
                                <a href="#groups-api-GETapi-groups-showall">fetch all groups</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="groups-api-POSTapi-groups-store">
                                <a href="#groups-api-POSTapi-groups-store">store group request</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="groups-api-GETapi-groups-edit--id-">
                                <a href="#groups-api-GETapi-groups-edit--id-">edit group request</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="groups-api-PUTapi-groups-update--id-">
                                <a href="#groups-api-PUTapi-groups-update--id-">Update Group Request</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="groups-api-DELETEapi-groups-delete--id-">
                                <a href="#groups-api-DELETEapi-groups-delete--id-">Delete Group Request</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-roles-api" class="tocify-header">
                <li class="tocify-item level-1" data-unique="roles-api">
                    <a href="#roles-api">Roles API</a>
                </li>
                                    <ul id="tocify-subheader-roles-api" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="roles-api-GETapi-roles-showall">
                                <a href="#roles-api-GETapi-roles-showall">fetch all roles</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="roles-api-POSTapi-roles-store">
                                <a href="#roles-api-POSTapi-roles-store">store role request</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="roles-api-GETapi-roles-edit--id-">
                                <a href="#roles-api-GETapi-roles-edit--id-">edit role request</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="roles-api-PUTapi-roles-update--id-">
                                <a href="#roles-api-PUTapi-roles-update--id-">Update Role Request</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="roles-api-DELETEapi-roles-delete--id-">
                                <a href="#roles-api-DELETEapi-roles-delete--id-">Delete Role Request</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-services-api" class="tocify-header">
                <li class="tocify-item level-1" data-unique="services-api">
                    <a href="#services-api">Services API</a>
                </li>
                                    <ul id="tocify-subheader-services-api" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="services-api-GETapi-service-showall">
                                <a href="#services-api-GETapi-service-showall">fetch all services</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="services-api-GETapi-service-create">
                                <a href="#services-api-GETapi-service-create">Create Service Request</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="services-api-POSTapi-service-store">
                                <a href="#services-api-POSTapi-service-store">store service request</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="services-api-GETapi-service-edit--id-">
                                <a href="#services-api-GETapi-service-edit--id-">edit service request</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="services-api-PUTapi-service-update--id-">
                                <a href="#services-api-PUTapi-service-update--id-">Update Service Request</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="services-api-DELETEapi-service-delete--id-">
                                <a href="#services-api-DELETEapi-service-delete--id-">Delete Service Request</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-users-api" class="tocify-header">
                <li class="tocify-item level-1" data-unique="users-api">
                    <a href="#users-api">Users API</a>
                </li>
                                    <ul id="tocify-subheader-users-api" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="users-api-GETapi-users-showall">
                                <a href="#users-api-GETapi-users-showall">fetch all users</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="users-api-GETapi-users-create">
                                <a href="#users-api-GETapi-users-create">Create User Request</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="users-api-POSTapi-users-store">
                                <a href="#users-api-POSTapi-users-store">store user request</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="users-api-GETapi-users-edit--id-">
                                <a href="#users-api-GETapi-users-edit--id-">edit user request</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="users-api-PUTapi-users-update--id-">
                                <a href="#users-api-PUTapi-users-update--id-">Update User Request</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="users-api-DELETEapi-users-delete--id-">
                                <a href="#users-api-DELETEapi-users-delete--id-">Delete Users Request</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: September 16 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="apartments-api">Apartments API</h1>

    <p>Managing all apartments API Resource</p>

                                <h2 id="apartments-api-GETapi-apt-showall">fetch all apartments</h2>

<p>
</p>



<span id="example-requests-GETapi-apt-showall">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/apt/showall" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/apt/showall"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-apt-showall">
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
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-apt-showall" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-apt-showall"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-apt-showall"></code></pre>
</span>
<span id="execution-error-GETapi-apt-showall" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-apt-showall"></code></pre>
</span>
<form id="form-GETapi-apt-showall" data-method="GET"
      data-path="api/apt/showall"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-apt-showall', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-apt-showall"
                    onclick="tryItOut('GETapi-apt-showall');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-apt-showall"
                    onclick="cancelTryOut('GETapi-apt-showall');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-apt-showall" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/apt/showall</code></b>
        </p>
                    </form>

                    <h2 id="apartments-api-GETapi-apt-create">Create Apartment Request</h2>

<p>
</p>

<p>you can create any apartment with attaching group</p>

<span id="example-requests-GETapi-apt-create">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/apt/create" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/apt/create"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-apt-create">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;1&quot;,
        &quot;groupname&quot;: &quot;Lalav&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-apt-create" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-apt-create"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-apt-create"></code></pre>
</span>
<span id="execution-error-GETapi-apt-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-apt-create"></code></pre>
</span>
<form id="form-GETapi-apt-create" data-method="GET"
      data-path="api/apt/create"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-apt-create', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-apt-create"
                    onclick="tryItOut('GETapi-apt-create');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-apt-create"
                    onclick="cancelTryOut('GETapi-apt-create');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-apt-create" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/apt/create</code></b>
        </p>
                    </form>

                    <h2 id="apartments-api-POSTapi-apt-store">store apartment request</h2>

<p>
</p>



<span id="example-requests-POSTapi-apt-store">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/apt/store" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"aptname\": \"A1-01\",
    \"password\": \"123123\",
    \"enableads\": true,
    \"enableservice\": true,
    \"group_id\": \"1\",
    \"passcode\": \"0000\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/apt/store"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "aptname": "A1-01",
    "password": "123123",
    "enableads": true,
    "enableservice": true,
    "group_id": "1",
    "passcode": "0000"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-apt-store">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;&quot;,
        &quot;aptname&quot;: null,
        &quot;password&quot;: null,
        &quot;enableads&quot;: null,
        &quot;enableservice&quot;: null,
        &quot;passcode&quot;: null,
        &quot;group_id&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-apt-store" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-apt-store"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-apt-store"></code></pre>
</span>
<span id="execution-error-POSTapi-apt-store" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-apt-store"></code></pre>
</span>
<form id="form-POSTapi-apt-store" data-method="POST"
      data-path="api/apt/store"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-apt-store', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-apt-store"
                    onclick="tryItOut('POSTapi-apt-store');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-apt-store"
                    onclick="cancelTryOut('POSTapi-apt-store');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-apt-store" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/apt/store</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>aptname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="aptname"
               data-endpoint="POSTapi-apt-store"
               value="A1-01"
               data-component="body" hidden>
    <br>
<p>The name of apartment.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-apt-store"
               value="123123"
               data-component="body" hidden>
    <br>
<p>The password of apartment.</p>
        </p>
                <p>
            <b><code>enableads</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-apt-store" hidden>
            <input type="radio" name="enableads"
                   value="true"
                   data-endpoint="POSTapi-apt-store"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-apt-store" hidden>
            <input type="radio" name="enableads"
                   value="false"
                   data-endpoint="POSTapi-apt-store"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>
<p>The enabling advertisment of apartment.</p>
        </p>
                <p>
            <b><code>enableservice</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-apt-store" hidden>
            <input type="radio" name="enableservice"
                   value="true"
                   data-endpoint="POSTapi-apt-store"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-apt-store" hidden>
            <input type="radio" name="enableservice"
                   value="false"
                   data-endpoint="POSTapi-apt-store"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>
<p>The enabling service of apartment.</p>
        </p>
                <p>
            <b><code>group_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="group_id"
               data-endpoint="POSTapi-apt-store"
               value="1"
               data-component="body" hidden>
    <br>
<p>The group of apartment ex: Lalav.</p>
        </p>
                <p>
            <b><code>passcode</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="passcode"
               data-endpoint="POSTapi-apt-store"
               value="0000"
               data-component="body" hidden>
    <br>
<p>The code of apartment ordering.</p>
        </p>
        </form>

                    <h2 id="apartments-api-GETapi-apt-edit--id-">edit apartmemt request</h2>

<p>
</p>

<p>you can get apartment by ID</p>

<span id="example-requests-GETapi-apt-edit--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/apt/edit/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/apt/edit/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-apt-edit--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;&quot;,
        &quot;aptname&quot;: null,
        &quot;password&quot;: null,
        &quot;enableads&quot;: null,
        &quot;enableservice&quot;: null,
        &quot;passcode&quot;: null,
        &quot;group_id&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-apt-edit--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-apt-edit--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-apt-edit--id-"></code></pre>
</span>
<span id="execution-error-GETapi-apt-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-apt-edit--id-"></code></pre>
</span>
<form id="form-GETapi-apt-edit--id-" data-method="GET"
      data-path="api/apt/edit/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-apt-edit--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-apt-edit--id-"
                    onclick="tryItOut('GETapi-apt-edit--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-apt-edit--id-"
                    onclick="cancelTryOut('GETapi-apt-edit--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-apt-edit--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/apt/edit/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-apt-edit--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the apartment.</p>
            </p>
                    </form>

                    <h2 id="apartments-api-PUTapi-apt-update--id-">Update Apartment Request</h2>

<p>
</p>

<p>you can update any apartment by ID</p>

<span id="example-requests-PUTapi-apt-update--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/apt/update/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"aptname\": \"A1-01\",
    \"password\": \"123123\",
    \"enableads\": true,
    \"enableservice\": true,
    \"group_id\": \"1\",
    \"passcode\": \"0000\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/apt/update/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "aptname": "A1-01",
    "password": "123123",
    "enableads": true,
    "enableservice": true,
    "group_id": "1",
    "passcode": "0000"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-apt-update--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Apartment Updated Succeesfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-apt-update--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-apt-update--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-apt-update--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-apt-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-apt-update--id-"></code></pre>
</span>
<form id="form-PUTapi-apt-update--id-" data-method="PUT"
      data-path="api/apt/update/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-apt-update--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-apt-update--id-"
                    onclick="tryItOut('PUTapi-apt-update--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-apt-update--id-"
                    onclick="cancelTryOut('PUTapi-apt-update--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-apt-update--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/apt/update/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-apt-update--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the apartment.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>aptname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="aptname"
               data-endpoint="PUTapi-apt-update--id-"
               value="A1-01"
               data-component="body" hidden>
    <br>
<p>The name of apartment.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="password"
               data-endpoint="PUTapi-apt-update--id-"
               value="123123"
               data-component="body" hidden>
    <br>
<p>The password of apartment.</p>
        </p>
                <p>
            <b><code>enableads</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-apt-update--id-" hidden>
            <input type="radio" name="enableads"
                   value="true"
                   data-endpoint="PUTapi-apt-update--id-"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-apt-update--id-" hidden>
            <input type="radio" name="enableads"
                   value="false"
                   data-endpoint="PUTapi-apt-update--id-"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>
<p>The enabling advertisment of apartment.</p>
        </p>
                <p>
            <b><code>enableservice</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-apt-update--id-" hidden>
            <input type="radio" name="enableservice"
                   value="true"
                   data-endpoint="PUTapi-apt-update--id-"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-apt-update--id-" hidden>
            <input type="radio" name="enableservice"
                   value="false"
                   data-endpoint="PUTapi-apt-update--id-"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>
<p>The enabling service of apartment.</p>
        </p>
                <p>
            <b><code>group_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="group_id"
               data-endpoint="PUTapi-apt-update--id-"
               value="1"
               data-component="body" hidden>
    <br>
<p>The group of apartment ex: Lalav.</p>
        </p>
                <p>
            <b><code>passcode</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="passcode"
               data-endpoint="PUTapi-apt-update--id-"
               value="0000"
               data-component="body" hidden>
    <br>
<p>The code of apartment ordering.</p>
        </p>
        </form>

                    <h2 id="apartments-api-DELETEapi-apt-delete--id-">Delete Apartment Request</h2>

<p>
</p>

<p>you can Delete any apartment by ID</p>

<span id="example-requests-DELETEapi-apt-delete--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/apt/delete/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/apt/delete/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-apt-delete--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Apartment Deleted Succeesfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-apt-delete--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-apt-delete--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-apt-delete--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-apt-delete--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-apt-delete--id-"></code></pre>
</span>
<form id="form-DELETEapi-apt-delete--id-" data-method="DELETE"
      data-path="api/apt/delete/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-apt-delete--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-apt-delete--id-"
                    onclick="tryItOut('DELETEapi-apt-delete--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-apt-delete--id-"
                    onclick="cancelTryOut('DELETEapi-apt-delete--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-apt-delete--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/apt/delete/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-apt-delete--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the apartment.</p>
            </p>
                    </form>

                <h1 id="groups-api">Groups API</h1>

    <p>Managing all groups API Resource</p>

                                <h2 id="groups-api-GETapi-groups-showall">fetch all groups</h2>

<p>
</p>



<span id="example-requests-GETapi-groups-showall">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/groups/showall" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/groups/showall"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-groups-showall">
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

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;1&quot;,
            &quot;groupname&quot;: &quot;Lalav&quot;
        },
        {
            &quot;id&quot;: &quot;2&quot;,
            &quot;groupname&quot;: &quot;Pavilon&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-groups-showall" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-groups-showall"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-groups-showall"></code></pre>
</span>
<span id="execution-error-GETapi-groups-showall" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-groups-showall"></code></pre>
</span>
<form id="form-GETapi-groups-showall" data-method="GET"
      data-path="api/groups/showall"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-groups-showall', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-groups-showall"
                    onclick="tryItOut('GETapi-groups-showall');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-groups-showall"
                    onclick="cancelTryOut('GETapi-groups-showall');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-groups-showall" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/groups/showall</code></b>
        </p>
                    </form>

                    <h2 id="groups-api-POSTapi-groups-store">store group request</h2>

<p>
</p>



<span id="example-requests-POSTapi-groups-store">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/groups/store" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"groupname\": \"Lalav\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/groups/store"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "groupname": "Lalav"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-groups-store">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;1&quot;,
        &quot;groupname&quot;: &quot;Lalav&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-groups-store" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-groups-store"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-groups-store"></code></pre>
</span>
<span id="execution-error-POSTapi-groups-store" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-groups-store"></code></pre>
</span>
<form id="form-POSTapi-groups-store" data-method="POST"
      data-path="api/groups/store"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-groups-store', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-groups-store"
                    onclick="tryItOut('POSTapi-groups-store');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-groups-store"
                    onclick="cancelTryOut('POSTapi-groups-store');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-groups-store" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/groups/store</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>groupname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="groupname"
               data-endpoint="POSTapi-groups-store"
               value="Lalav"
               data-component="body" hidden>
    <br>
<p>The name of users group.</p>
        </p>
        </form>

                    <h2 id="groups-api-GETapi-groups-edit--id-">edit group request</h2>

<p>
</p>

<p>you can get groups by ID</p>

<span id="example-requests-GETapi-groups-edit--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/groups/edit/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/groups/edit/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-groups-edit--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;1&quot;,
        &quot;groupname&quot;: &quot;Lalav&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-groups-edit--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-groups-edit--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-groups-edit--id-"></code></pre>
</span>
<span id="execution-error-GETapi-groups-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-groups-edit--id-"></code></pre>
</span>
<form id="form-GETapi-groups-edit--id-" data-method="GET"
      data-path="api/groups/edit/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-groups-edit--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-groups-edit--id-"
                    onclick="tryItOut('GETapi-groups-edit--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-groups-edit--id-"
                    onclick="cancelTryOut('GETapi-groups-edit--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-groups-edit--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/groups/edit/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-groups-edit--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the Group.</p>
            </p>
                    </form>

                    <h2 id="groups-api-PUTapi-groups-update--id-">Update Group Request</h2>

<p>
</p>

<p>you can update any group by ID</p>

<span id="example-requests-PUTapi-groups-update--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/groups/update/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"groupname\": \"testgroup\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/groups/update/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "groupname": "testgroup"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-groups-update--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Group Updated Succeesfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-groups-update--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-groups-update--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-groups-update--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-groups-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-groups-update--id-"></code></pre>
</span>
<form id="form-PUTapi-groups-update--id-" data-method="PUT"
      data-path="api/groups/update/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-groups-update--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-groups-update--id-"
                    onclick="tryItOut('PUTapi-groups-update--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-groups-update--id-"
                    onclick="cancelTryOut('PUTapi-groups-update--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-groups-update--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/groups/update/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-groups-update--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the group.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>groupname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="groupname"
               data-endpoint="PUTapi-groups-update--id-"
               value="testgroup"
               data-component="body" hidden>
    <br>
<p>The updated name of users group.</p>
        </p>
        </form>

                    <h2 id="groups-api-DELETEapi-groups-delete--id-">Delete Group Request</h2>

<p>
</p>

<p>you can Delete any groups by ID</p>

<span id="example-requests-DELETEapi-groups-delete--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/groups/delete/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/groups/delete/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-groups-delete--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Group Deleted Succeesfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-groups-delete--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-groups-delete--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-groups-delete--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-groups-delete--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-groups-delete--id-"></code></pre>
</span>
<form id="form-DELETEapi-groups-delete--id-" data-method="DELETE"
      data-path="api/groups/delete/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-groups-delete--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-groups-delete--id-"
                    onclick="tryItOut('DELETEapi-groups-delete--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-groups-delete--id-"
                    onclick="cancelTryOut('DELETEapi-groups-delete--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-groups-delete--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/groups/delete/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-groups-delete--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the group.</p>
            </p>
                    </form>

                <h1 id="roles-api">Roles API</h1>

    <p>Managing all roles API Resource</p>

                                <h2 id="roles-api-GETapi-roles-showall">fetch all roles</h2>

<p>
</p>



<span id="example-requests-GETapi-roles-showall">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/roles/showall" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/roles/showall"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-roles-showall">
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
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;1&quot;,
            &quot;rolename&quot;: &quot;SuperAdmin&quot;
        },
        {
            &quot;id&quot;: &quot;2&quot;,
            &quot;rolename&quot;: &quot;Group&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-roles-showall" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-roles-showall"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-roles-showall"></code></pre>
</span>
<span id="execution-error-GETapi-roles-showall" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-roles-showall"></code></pre>
</span>
<form id="form-GETapi-roles-showall" data-method="GET"
      data-path="api/roles/showall"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-roles-showall', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-roles-showall"
                    onclick="tryItOut('GETapi-roles-showall');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-roles-showall"
                    onclick="cancelTryOut('GETapi-roles-showall');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-roles-showall" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/roles/showall</code></b>
        </p>
                    </form>

                    <h2 id="roles-api-POSTapi-roles-store">store role request</h2>

<p>
</p>



<span id="example-requests-POSTapi-roles-store">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/roles/store" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"rolename\": \"superadmin\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/roles/store"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "rolename": "superadmin"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-roles-store">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;1&quot;,
        &quot;rolename&quot;: &quot;SuperAdmin&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-roles-store" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-roles-store"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-roles-store"></code></pre>
</span>
<span id="execution-error-POSTapi-roles-store" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-roles-store"></code></pre>
</span>
<form id="form-POSTapi-roles-store" data-method="POST"
      data-path="api/roles/store"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-roles-store', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-roles-store"
                    onclick="tryItOut('POSTapi-roles-store');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-roles-store"
                    onclick="cancelTryOut('POSTapi-roles-store');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-roles-store" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/roles/store</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>rolename</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="rolename"
               data-endpoint="POSTapi-roles-store"
               value="superadmin"
               data-component="body" hidden>
    <br>
<p>The name of users role.</p>
        </p>
        </form>

                    <h2 id="roles-api-GETapi-roles-edit--id-">edit role request</h2>

<p>
</p>

<p>you can any get role details by ID</p>

<span id="example-requests-GETapi-roles-edit--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/roles/edit/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/roles/edit/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-roles-edit--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;1&quot;,
        &quot;rolename&quot;: &quot;SuperAdmin&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-roles-edit--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-roles-edit--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-roles-edit--id-"></code></pre>
</span>
<span id="execution-error-GETapi-roles-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-roles-edit--id-"></code></pre>
</span>
<form id="form-GETapi-roles-edit--id-" data-method="GET"
      data-path="api/roles/edit/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-roles-edit--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-roles-edit--id-"
                    onclick="tryItOut('GETapi-roles-edit--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-roles-edit--id-"
                    onclick="cancelTryOut('GETapi-roles-edit--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-roles-edit--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/roles/edit/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-roles-edit--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the role.</p>
            </p>
                    </form>

                    <h2 id="roles-api-PUTapi-roles-update--id-">Update Role Request</h2>

<p>
</p>

<p>you can update any roles by ID</p>

<span id="example-requests-PUTapi-roles-update--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/roles/update/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"rolename\": \"testuser\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/roles/update/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "rolename": "testuser"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-roles-update--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Role Updated Succeesfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-roles-update--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-roles-update--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-roles-update--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-roles-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-roles-update--id-"></code></pre>
</span>
<form id="form-PUTapi-roles-update--id-" data-method="PUT"
      data-path="api/roles/update/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-roles-update--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-roles-update--id-"
                    onclick="tryItOut('PUTapi-roles-update--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-roles-update--id-"
                    onclick="cancelTryOut('PUTapi-roles-update--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-roles-update--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/roles/update/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-roles-update--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the role.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>rolename</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="rolename"
               data-endpoint="PUTapi-roles-update--id-"
               value="testuser"
               data-component="body" hidden>
    <br>
<p>The updated name of users role.</p>
        </p>
        </form>

                    <h2 id="roles-api-DELETEapi-roles-delete--id-">Delete Role Request</h2>

<p>
</p>

<p>you can Delete any roles by ID</p>

<span id="example-requests-DELETEapi-roles-delete--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/roles/delete/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/roles/delete/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-roles-delete--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Role Deleted Succeesfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-roles-delete--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-roles-delete--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-roles-delete--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-roles-delete--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-roles-delete--id-"></code></pre>
</span>
<form id="form-DELETEapi-roles-delete--id-" data-method="DELETE"
      data-path="api/roles/delete/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-roles-delete--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-roles-delete--id-"
                    onclick="tryItOut('DELETEapi-roles-delete--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-roles-delete--id-"
                    onclick="cancelTryOut('DELETEapi-roles-delete--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-roles-delete--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/roles/delete/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-roles-delete--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the role.</p>
            </p>
                    </form>

                <h1 id="services-api">Services API</h1>

    <p>Managing all services API Resource</p>

                                <h2 id="services-api-GETapi-service-showall">fetch all services</h2>

<p>
</p>



<span id="example-requests-GETapi-service-showall">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/service/showall" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/service/showall"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-service-showall">
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

<code class="language-json">{
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-service-showall" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-service-showall"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-service-showall"></code></pre>
</span>
<span id="execution-error-GETapi-service-showall" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-service-showall"></code></pre>
</span>
<form id="form-GETapi-service-showall" data-method="GET"
      data-path="api/service/showall"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-service-showall', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-service-showall"
                    onclick="tryItOut('GETapi-service-showall');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-service-showall"
                    onclick="cancelTryOut('GETapi-service-showall');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-service-showall" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/service/showall</code></b>
        </p>
                    </form>

                    <h2 id="services-api-GETapi-service-create">Create Service Request</h2>

<p>
</p>

<p>you can create any services with attaching group</p>

<span id="example-requests-GETapi-service-create">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/service/create" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/service/create"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-service-create">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;1&quot;,
        &quot;groupname&quot;: &quot;Lalav&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-service-create" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-service-create"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-service-create"></code></pre>
</span>
<span id="execution-error-GETapi-service-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-service-create"></code></pre>
</span>
<form id="form-GETapi-service-create" data-method="GET"
      data-path="api/service/create"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-service-create', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-service-create"
                    onclick="tryItOut('GETapi-service-create');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-service-create"
                    onclick="cancelTryOut('GETapi-service-create');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-service-create" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/service/create</code></b>
        </p>
                    </form>

                    <h2 id="services-api-POSTapi-service-store">store service request</h2>

<p>
</p>



<span id="example-requests-POSTapi-service-store">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/service/store" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"servicename\": \"Laundry\",
    \"title\": \"Golden Laundry Co.\",
    \"username\": \"Sardar Karkuki\",
    \"email\": \"sardar@app.com\",
    \"password\": \"123123\",
    \"group_id\": \"1\",
    \"status\": \"notAvailable\",
    \"from\": \"8AM\",
    \"to\": \"4PM\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/service/store"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "servicename": "Laundry",
    "title": "Golden Laundry Co.",
    "username": "Sardar Karkuki",
    "email": "sardar@app.com",
    "password": "123123",
    "group_id": "1",
    "status": "notAvailable",
    "from": "8AM",
    "to": "4PM"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-service-store">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;&quot;,
        &quot;servicename&quot;: null,
        &quot;title&quot;: null,
        &quot;username&quot;: null,
        &quot;email&quot;: null,
        &quot;password&quot;: null,
        &quot;status&quot;: null,
        &quot;from&quot;: null,
        &quot;to&quot;: null,
        &quot;group_id&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-service-store" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-service-store"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-service-store"></code></pre>
</span>
<span id="execution-error-POSTapi-service-store" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-service-store"></code></pre>
</span>
<form id="form-POSTapi-service-store" data-method="POST"
      data-path="api/service/store"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-service-store', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-service-store"
                    onclick="tryItOut('POSTapi-service-store');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-service-store"
                    onclick="cancelTryOut('POSTapi-service-store');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-service-store" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/service/store</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>servicename</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="servicename"
               data-endpoint="POSTapi-service-store"
               value="Laundry"
               data-component="body" hidden>
    <br>
<p>The name of service.</p>
        </p>
                <p>
            <b><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="title"
               data-endpoint="POSTapi-service-store"
               value="Golden Laundry Co."
               data-component="body" hidden>
    <br>
<p>The title of service.</p>
        </p>
                <p>
            <b><code>username</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="username"
               data-endpoint="POSTapi-service-store"
               value="Sardar Karkuki"
               data-component="body" hidden>
    <br>
<p>The username of service.</p>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-service-store"
               value="sardar@app.com"
               data-component="body" hidden>
    <br>
<p>The email of service.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-service-store"
               value="123123"
               data-component="body" hidden>
    <br>
<p>The password of service.</p>
        </p>
                <p>
            <b><code>group_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="group_id"
               data-endpoint="POSTapi-service-store"
               value="1"
               data-component="body" hidden>
    <br>
<p>The group of service ex: Lalav.</p>
        </p>
                <p>
            <b><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="status"
               data-endpoint="POSTapi-service-store"
               value="notAvailable"
               data-component="body" hidden>
    <br>
<p>The status of service.</p>
        </p>
                <p>
            <b><code>from</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="from"
               data-endpoint="POSTapi-service-store"
               value="8AM"
               data-component="body" hidden>
    <br>
<p>The from of service which its start time of available.</p>
        </p>
                <p>
            <b><code>to</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="to"
               data-endpoint="POSTapi-service-store"
               value="4PM"
               data-component="body" hidden>
    <br>
<p>The to of service which its end time of available.</p>
        </p>
        </form>

                    <h2 id="services-api-GETapi-service-edit--id-">edit service request</h2>

<p>
</p>

<p>you can get service by ID</p>

<span id="example-requests-GETapi-service-edit--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/service/edit/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/service/edit/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-service-edit--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;&quot;,
        &quot;servicename&quot;: null,
        &quot;title&quot;: null,
        &quot;username&quot;: null,
        &quot;email&quot;: null,
        &quot;password&quot;: null,
        &quot;status&quot;: null,
        &quot;from&quot;: null,
        &quot;to&quot;: null,
        &quot;group_id&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-service-edit--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-service-edit--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-service-edit--id-"></code></pre>
</span>
<span id="execution-error-GETapi-service-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-service-edit--id-"></code></pre>
</span>
<form id="form-GETapi-service-edit--id-" data-method="GET"
      data-path="api/service/edit/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-service-edit--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-service-edit--id-"
                    onclick="tryItOut('GETapi-service-edit--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-service-edit--id-"
                    onclick="cancelTryOut('GETapi-service-edit--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-service-edit--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/service/edit/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-service-edit--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the service.</p>
            </p>
                    </form>

                    <h2 id="services-api-PUTapi-service-update--id-">Update Service Request</h2>

<p>
</p>

<p>you can update any service by ID</p>

<span id="example-requests-PUTapi-service-update--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/service/update/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"servicename\": \"Laundry\",
    \"title\": \"Golden Laundry Co.\",
    \"username\": \"Sardar Karkuki\",
    \"email\": \"sardar@app.com\",
    \"password\": \"123123\",
    \"group_id\": \"1\",
    \"statux\": \"notAvailable\",
    \"from\": \"8AM\",
    \"to\": \"4PM\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/service/update/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "servicename": "Laundry",
    "title": "Golden Laundry Co.",
    "username": "Sardar Karkuki",
    "email": "sardar@app.com",
    "password": "123123",
    "group_id": "1",
    "statux": "notAvailable",
    "from": "8AM",
    "to": "4PM"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-service-update--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Service Updated Succeesfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-service-update--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-service-update--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-service-update--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-service-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-service-update--id-"></code></pre>
</span>
<form id="form-PUTapi-service-update--id-" data-method="PUT"
      data-path="api/service/update/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-service-update--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-service-update--id-"
                    onclick="tryItOut('PUTapi-service-update--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-service-update--id-"
                    onclick="cancelTryOut('PUTapi-service-update--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-service-update--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/service/update/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-service-update--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the service.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>servicename</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="servicename"
               data-endpoint="PUTapi-service-update--id-"
               value="Laundry"
               data-component="body" hidden>
    <br>
<p>The name of service.</p>
        </p>
                <p>
            <b><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="title"
               data-endpoint="PUTapi-service-update--id-"
               value="Golden Laundry Co."
               data-component="body" hidden>
    <br>
<p>The title of service.</p>
        </p>
                <p>
            <b><code>username</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="username"
               data-endpoint="PUTapi-service-update--id-"
               value="Sardar Karkuki"
               data-component="body" hidden>
    <br>
<p>The username of service.</p>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="email"
               data-endpoint="PUTapi-service-update--id-"
               value="sardar@app.com"
               data-component="body" hidden>
    <br>
<p>The email of service.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="password"
               data-endpoint="PUTapi-service-update--id-"
               value="123123"
               data-component="body" hidden>
    <br>
<p>The password of service.</p>
        </p>
                <p>
            <b><code>group_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="group_id"
               data-endpoint="PUTapi-service-update--id-"
               value="1"
               data-component="body" hidden>
    <br>
<p>The group of service ex: Lalav.</p>
        </p>
                <p>
            <b><code>statux</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="statux"
               data-endpoint="PUTapi-service-update--id-"
               value="notAvailable"
               data-component="body" hidden>
    <br>
<p>The status of service.</p>
        </p>
                <p>
            <b><code>from</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="from"
               data-endpoint="PUTapi-service-update--id-"
               value="8AM"
               data-component="body" hidden>
    <br>
<p>The from of service which its start time of available.</p>
        </p>
                <p>
            <b><code>to</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="to"
               data-endpoint="PUTapi-service-update--id-"
               value="4PM"
               data-component="body" hidden>
    <br>
<p>The to of service which its end time of available.</p>
        </p>
        </form>

                    <h2 id="services-api-DELETEapi-service-delete--id-">Delete Service Request</h2>

<p>
</p>

<p>you can Delete any service by ID</p>

<span id="example-requests-DELETEapi-service-delete--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/service/delete/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/service/delete/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-service-delete--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Service Deleted Succeesfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-service-delete--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-service-delete--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-service-delete--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-service-delete--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-service-delete--id-"></code></pre>
</span>
<form id="form-DELETEapi-service-delete--id-" data-method="DELETE"
      data-path="api/service/delete/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-service-delete--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-service-delete--id-"
                    onclick="tryItOut('DELETEapi-service-delete--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-service-delete--id-"
                    onclick="cancelTryOut('DELETEapi-service-delete--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-service-delete--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/service/delete/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-service-delete--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the service.</p>
            </p>
                    </form>

                <h1 id="users-api">Users API</h1>

    <p>Managing all roles API Resource</p>

                                <h2 id="users-api-GETapi-users-showall">fetch all users</h2>

<p>
</p>



<span id="example-requests-GETapi-users-showall">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/users/showall" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/showall"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users-showall">
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

<code class="language-json">{
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users-showall" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users-showall"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users-showall"></code></pre>
</span>
<span id="execution-error-GETapi-users-showall" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users-showall"></code></pre>
</span>
<form id="form-GETapi-users-showall" data-method="GET"
      data-path="api/users/showall"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users-showall', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users-showall"
                    onclick="tryItOut('GETapi-users-showall');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users-showall"
                    onclick="cancelTryOut('GETapi-users-showall');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users-showall" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users/showall</code></b>
        </p>
                    </form>

                    <h2 id="users-api-GETapi-users-create">Create User Request</h2>

<p>
</p>

<p>you can create any users with attaching role and group</p>

<span id="example-requests-GETapi-users-create">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/users/create" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/create"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users-create">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;roles&quot;: [
        {
            &quot;id&quot;: &quot;1&quot;,
            &quot;rolename&quot;: &quot;SuperAdmin&quot;
        },
        {
            &quot;id&quot;: &quot;2&quot;,
            &quot;rolename&quot;: &quot;Group&quot;
        }
    ],
    &quot;group&quot;: [
        {
            &quot;id&quot;: &quot;1&quot;,
            &quot;groupname&quot;: &quot;Lalav&quot;
        },
        {
            &quot;id&quot;: &quot;2&quot;,
            &quot;groupname&quot;: &quot;Pavilon&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users-create" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users-create"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users-create"></code></pre>
</span>
<span id="execution-error-GETapi-users-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users-create"></code></pre>
</span>
<form id="form-GETapi-users-create" data-method="GET"
      data-path="api/users/create"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users-create', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users-create"
                    onclick="tryItOut('GETapi-users-create');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users-create"
                    onclick="cancelTryOut('GETapi-users-create');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users-create" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users/create</code></b>
        </p>
                    </form>

                    <h2 id="users-api-POSTapi-users-store">store user request</h2>

<p>
</p>



<span id="example-requests-POSTapi-users-store">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/users/store" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"ahmed\",
    \"email\": \"ahmed@app.com\",
    \"password\": \"123123\",
    \"role_id\": \"1\",
    \"group_id\": \"1\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/store"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ahmed",
    "email": "ahmed@app.com",
    "password": "123123",
    "role_id": "1",
    "group_id": "1"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-users-store">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;&quot;,
        &quot;name&quot;: &quot;Monique Upton&quot;,
        &quot;email&quot;: &quot;dominique.nader@example.net&quot;,
        &quot;role&quot;: null,
        &quot;group&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-users-store" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-users-store"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users-store"></code></pre>
</span>
<span id="execution-error-POSTapi-users-store" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users-store"></code></pre>
</span>
<form id="form-POSTapi-users-store" data-method="POST"
      data-path="api/users/store"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-users-store', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-users-store"
                    onclick="tryItOut('POSTapi-users-store');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-users-store"
                    onclick="cancelTryOut('POSTapi-users-store');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-users-store" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/users/store</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-users-store"
               value="ahmed"
               data-component="body" hidden>
    <br>
<p>The name of users.</p>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-users-store"
               value="ahmed@app.com"
               data-component="body" hidden>
    <br>
<p>The email of users.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-users-store"
               value="123123"
               data-component="body" hidden>
    <br>
<p>The password of users.</p>
        </p>
                <p>
            <b><code>role_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="role_id"
               data-endpoint="POSTapi-users-store"
               value="1"
               data-component="body" hidden>
    <br>
<p>The role of users.</p>
        </p>
                <p>
            <b><code>group_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="group_id"
               data-endpoint="POSTapi-users-store"
               value="1"
               data-component="body" hidden>
    <br>
<p>The group name of users.</p>
        </p>
        </form>

                    <h2 id="users-api-GETapi-users-edit--id-">edit user request</h2>

<p>
</p>

<p>you can get user by ID</p>

<span id="example-requests-GETapi-users-edit--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/users/edit/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/edit/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users-edit--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;&quot;,
        &quot;name&quot;: &quot;Vena DuBuque MD&quot;,
        &quot;email&quot;: &quot;adonnelly@example.com&quot;,
        &quot;role&quot;: null,
        &quot;group&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users-edit--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users-edit--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users-edit--id-"></code></pre>
</span>
<span id="execution-error-GETapi-users-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users-edit--id-"></code></pre>
</span>
<form id="form-GETapi-users-edit--id-" data-method="GET"
      data-path="api/users/edit/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users-edit--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users-edit--id-"
                    onclick="tryItOut('GETapi-users-edit--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users-edit--id-"
                    onclick="cancelTryOut('GETapi-users-edit--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users-edit--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users/edit/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-users-edit--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the user.</p>
            </p>
                    </form>

                    <h2 id="users-api-PUTapi-users-update--id-">Update User Request</h2>

<p>
</p>

<p>you can update any users by ID</p>

<span id="example-requests-PUTapi-users-update--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/users/update/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"ahmed\",
    \"email\": \"ahmed@app.com\",
    \"password\": \"123123\",
    \"role_id\": \"1\",
    \"group_id\": \"1\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/update/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ahmed",
    "email": "ahmed@app.com",
    "password": "123123",
    "role_id": "1",
    "group_id": "1"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-users-update--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;User Updated Succeesfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-users-update--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-users-update--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-users-update--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-users-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-users-update--id-"></code></pre>
</span>
<form id="form-PUTapi-users-update--id-" data-method="PUT"
      data-path="api/users/update/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-users-update--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-users-update--id-"
                    onclick="tryItOut('PUTapi-users-update--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-users-update--id-"
                    onclick="cancelTryOut('PUTapi-users-update--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-users-update--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/users/update/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-users-update--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the user.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-users-update--id-"
               value="ahmed"
               data-component="body" hidden>
    <br>
<p>The updated name of users.</p>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="email"
               data-endpoint="PUTapi-users-update--id-"
               value="ahmed@app.com"
               data-component="body" hidden>
    <br>
<p>The updated email of users.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="password"
               data-endpoint="PUTapi-users-update--id-"
               value="123123"
               data-component="body" hidden>
    <br>
<p>The updated password of users.</p>
        </p>
                <p>
            <b><code>role_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="role_id"
               data-endpoint="PUTapi-users-update--id-"
               value="1"
               data-component="body" hidden>
    <br>
<p>The updated role of users.</p>
        </p>
                <p>
            <b><code>group_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="group_id"
               data-endpoint="PUTapi-users-update--id-"
               value="1"
               data-component="body" hidden>
    <br>
<p>The updated group name of users.</p>
        </p>
        </form>

                    <h2 id="users-api-DELETEapi-users-delete--id-">Delete Users Request</h2>

<p>
</p>

<p>you can Delete any users by ID</p>

<span id="example-requests-DELETEapi-users-delete--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/users/delete/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/delete/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-users-delete--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;User Deleted Succeesfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-users-delete--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-users-delete--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-users-delete--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-users-delete--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-users-delete--id-"></code></pre>
</span>
<form id="form-DELETEapi-users-delete--id-" data-method="DELETE"
      data-path="api/users/delete/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-users-delete--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-users-delete--id-"
                    onclick="tryItOut('DELETEapi-users-delete--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-users-delete--id-"
                    onclick="cancelTryOut('DELETEapi-users-delete--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-users-delete--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/users/delete/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-users-delete--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the user.</p>
            </p>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
