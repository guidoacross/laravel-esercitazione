# Types

Managing types

## Get Types


List all the types.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/types"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "data": [
        {
            "name": "sms"
        },
        {
            "name": "email"
        },
        {
            "name": "posta"
        }
    ]
}
```
<div id="execution-results-GETapi-types" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-types"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-types"></code></pre>
</div>
<div id="execution-error-GETapi-types" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-types"></code></pre>
</div>
<form id="form-GETapi-types" data-method="GET" data-path="api/types" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-types', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-types" onclick="tryItOut('GETapi-types');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-types" onclick="cancelTryOut('GETapi-types');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-types" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/types</code></b>
</p>
</form>


## Post Type


Create a type.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"soluta"}'

```

```javascript
const url = new URL(
    "http://localhost/api/types"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "soluta"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-types" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-types"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-types"></code></pre>
</div>
<div id="execution-error-POSTapi-types" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-types"></code></pre>
</div>
<form id="form-POSTapi-types" data-method="POST" data-path="api/types" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-types', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-types" onclick="tryItOut('POSTapi-types');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-types" onclick="cancelTryOut('POSTapi-types');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-types" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/types</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-types" data-component="body" required  hidden>
<br>

</p>

</form>


## Get Type


Select a type by id.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/types/occaecati" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/types/occaecati"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "error": "Entry for Type not found"
}
```
<div id="execution-results-GETapi-types--type-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-types--type-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-types--type-"></code></pre>
</div>
<div id="execution-error-GETapi-types--type-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-types--type-"></code></pre>
</div>
<form id="form-GETapi-types--type-" data-method="GET" data-path="api/types/{type}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-types--type-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-types--type-" onclick="tryItOut('GETapi-types--type-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-types--type-" onclick="cancelTryOut('GETapi-types--type-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-types--type-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/types/{type}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="type" data-endpoint="GETapi-types--type-" data-component="url" required  hidden>
<br>

</p>
</form>


## Put Type


Update a type by id.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/types/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"cumque"}'

```

```javascript
const url = new URL(
    "http://localhost/api/types/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "cumque"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-types--type-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-types--type-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-types--type-"></code></pre>
</div>
<div id="execution-error-PUTapi-types--type-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-types--type-"></code></pre>
</div>
<form id="form-PUTapi-types--type-" data-method="PUT" data-path="api/types/{type}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-types--type-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-types--type-" onclick="tryItOut('PUTapi-types--type-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-types--type-" onclick="cancelTryOut('PUTapi-types--type-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-types--type-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/types/{type}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/types/{type}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="type" data-endpoint="PUTapi-types--type-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-types--type-" data-component="body" required  hidden>
<br>

</p>

</form>


## Delete Type


Delete a type by id.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/types/hic" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/types/hic"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-types--type-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-types--type-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-types--type-"></code></pre>
</div>
<div id="execution-error-DELETEapi-types--type-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-types--type-"></code></pre>
</div>
<form id="form-DELETEapi-types--type-" data-method="DELETE" data-path="api/types/{type}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-types--type-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-types--type-" onclick="tryItOut('DELETEapi-types--type-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-types--type-" onclick="cancelTryOut('DELETEapi-types--type-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-types--type-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/types/{type}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="type" data-endpoint="DELETEapi-types--type-" data-component="url" required  hidden>
<br>

</p>
</form>



