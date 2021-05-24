# Users

Managing users

## Get Users


List all the users.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users"
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
            "id": 1,
            "name": "Gino",
            "lastname": "Danieli",
            "date_of_birth": "1994-10-12",
            "age": 26,
            "types": [
                {
                    "name": "email"
                }
            ]
        },
        {
            "id": 3,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 4,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 5,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 6,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 7,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 8,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 9,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 10,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 11,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 12,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 13,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 14,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 15,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 16,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 17,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 18,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 19,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 20,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 21,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 22,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 23,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 24,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 25,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 26,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 27,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 28,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 29,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 30,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 31,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 32,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": [
                {
                    "name": "email"
                }
            ]
        },
        {
            "id": 33,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": [
                {
                    "name": "email"
                }
            ]
        },
        {
            "id": 34,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": [
                {
                    "name": "sms"
                },
                {
                    "name": "email"
                }
            ]
        },
        {
            "id": 35,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": [
                {
                    "name": "sms"
                },
                {
                    "name": "email"
                }
            ]
        },
        {
            "id": 36,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": [
                {
                    "name": "sms"
                },
                {
                    "name": "email"
                }
            ]
        },
        {
            "id": 37,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": [
                {
                    "name": "sms"
                }
            ]
        },
        {
            "id": 38,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": []
        },
        {
            "id": 39,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1995-06-02",
            "age": 25,
            "types": [
                {
                    "name": "sms"
                },
                {
                    "name": "email"
                }
            ]
        },
        {
            "id": 40,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1996-06-02",
            "age": 24,
            "types": [
                {
                    "name": "sms"
                },
                {
                    "name": "email"
                }
            ]
        },
        {
            "id": 41,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1996-06-02",
            "age": 24,
            "types": [
                {
                    "name": "sms"
                },
                {
                    "name": "email"
                }
            ]
        },
        {
            "id": 42,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1996-06-02",
            "age": 24,
            "types": [
                {
                    "name": "sms"
                }
            ]
        },
        {
            "id": 43,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1996-06-07",
            "age": 24,
            "types": [
                {
                    "name": "sms"
                }
            ]
        },
        {
            "id": 44,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1996-06-07",
            "age": 24,
            "types": [
                {
                    "name": "sms"
                }
            ]
        },
        {
            "id": 45,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1992-10-12",
            "age": 28,
            "types": [
                {
                    "name": "sms"
                }
            ]
        },
        {
            "id": 46,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1992-01-12",
            "age": 29,
            "types": [
                {
                    "name": "sms"
                }
            ]
        },
        {
            "id": 47,
            "name": "Poster",
            "lastname": "Franceschi",
            "date_of_birth": "1992-10-12",
            "age": 28,
            "types": []
        }
    ]
}
```
<div id="execution-results-GETapi-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users"></code></pre>
</div>
<div id="execution-error-GETapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users"></code></pre>
</div>
<form id="form-GETapi-users" data-method="GET" data-path="api/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/users</code></b>
</p>
</form>


## Post User


Store the user in the database.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"accusantium","lastname":"aut","date_of_birth":"2021-05-24T09:00:37+0000","types":"facere"}'

```

```javascript
const url = new URL(
    "http://localhost/api/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "accusantium",
    "lastname": "aut",
    "date_of_birth": "2021-05-24T09:00:37+0000",
    "types": "facere"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-users" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users"></code></pre>
</div>
<div id="execution-error-POSTapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users"></code></pre>
</div>
<form id="form-POSTapi-users" data-method="POST" data-path="api/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/users</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-users" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>lastname</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="lastname" data-endpoint="POSTapi-users" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>date_of_birth</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="date_of_birth" data-endpoint="POSTapi-users" data-component="body" required  hidden>
<br>
The value must be a valid date.
</p>
<p>
<b><code>types</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="types" data-endpoint="POSTapi-users" data-component="body" required  hidden>
<br>

</p>

</form>


## Get User


Retriew an user by ID.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/users/officia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users/officia"
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
    "message": "No query results for model [App\\User] officia",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
    "line": 224,
    "trace": [
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
            "line": 200,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\app\\Exceptions\\Handler.php",
            "line": 49,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\nunomaduro\\collision\\src\\Adapters\\Laravel\\ExceptionHandler.php",
            "line": 68,
            "function": "render",
            "class": "App\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 51,
            "function": "render",
            "class": "NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 176,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 59,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 105,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 683,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 658,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 624,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 613,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 170,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 130,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 52,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 63,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 105,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 145,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 37,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 590,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 134,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 255,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\symfony\\console\\Application.php",
            "line": 1009,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\symfony\\console\\Application.php",
            "line": 273,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\symfony\\console\\Application.php",
            "line": 149,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 131,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\laravel-esercitazione\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-users--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-users--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users--user-"></code></pre>
</div>
<div id="execution-error-GETapi-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users--user-"></code></pre>
</div>
<form id="form-GETapi-users--user-" data-method="GET" data-path="api/users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-users--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="GETapi-users--user-" data-component="url" required  hidden>
<br>

</p>
</form>


## Put User


Update a user in the database by ID.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/users/voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"quibusdam","lastname":"neque","date_of_birth":"2021-05-24T09:00:37+0000","types":"error"}'

```

```javascript
const url = new URL(
    "http://localhost/api/users/voluptas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "quibusdam",
    "lastname": "neque",
    "date_of_birth": "2021-05-24T09:00:37+0000",
    "types": "error"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-users--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-users--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-users--user-"></code></pre>
</div>
<div id="execution-error-PUTapi-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-users--user-"></code></pre>
</div>
<form id="form-PUTapi-users--user-" data-method="PUT" data-path="api/users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-users--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/users/{user}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="PUTapi-users--user-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-users--user-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>lastname</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="lastname" data-endpoint="PUTapi-users--user-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>date_of_birth</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="date_of_birth" data-endpoint="PUTapi-users--user-" data-component="body" required  hidden>
<br>
The value must be a valid date.
</p>
<p>
<b><code>types</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="types" data-endpoint="PUTapi-users--user-" data-component="body" required  hidden>
<br>

</p>

</form>


## Delete User


Delete a user by ID.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/users/vitae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users/vitae"
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


<div id="execution-results-DELETEapi-users--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-users--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-users--user-"></code></pre>
</div>
<div id="execution-error-DELETEapi-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-users--user-"></code></pre>
</div>
<form id="form-DELETEapi-users--user-" data-method="DELETE" data-path="api/users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-users--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="DELETEapi-users--user-" data-component="url" required  hidden>
<br>

</p>
</form>



