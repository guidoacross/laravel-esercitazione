# Messages

Managing messages

## Get Messages


List all the messages.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/messages" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/messages"
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
            "type": "email",
            "text": "Debitis reiciendis culpa voluptatem sit sequi sed beatae. Sunt esse qui quod nam sed error dolor."
        },
        {
            "id": 2,
            "type": "email",
            "text": "Fugiat dolorem sunt ut ad. Enim quis omnis fugiat. Unde aliquid voluptatem aliquam fuga. Voluptas sit aliquam assumenda. In eveniet ipsum labore iure."
        },
        {
            "id": 3,
            "type": "sms",
            "text": "Iste suscipit esse occaecati laboriosam veniam cum sed. Harum nulla fuga laudantium et hic eaque. Ea sunt sit et porro ad earum eum. Ex nostrum occaecati iure eum rerum."
        },
        {
            "id": 4,
            "type": "posta",
            "text": "Assumenda placeat dolores autem porro placeat unde nihil. Quia sed corrupti vitae ea et voluptatem. Dolor inventore neque molestias voluptatem. Nesciunt delectus amet est."
        },
        {
            "id": 5,
            "type": "sms",
            "text": "Consequatur aut corporis ipsa nemo et est est magnam. Quibusdam quia dolore est quisquam. Libero adipisci magni quo ex reiciendis ut ea."
        },
        {
            "id": 6,
            "type": "sms",
            "text": "Et quia ipsa recusandae nemo est tenetur enim. Sapiente omnis consectetur excepturi eum unde. In cum animi non. Saepe illum sequi dolorum consequuntur minus sunt accusantium."
        },
        {
            "id": 7,
            "type": "posta",
            "text": "Beatae quia tempora a earum vel aliquam. Perspiciatis saepe consectetur ut sapiente blanditiis nihil. A illum accusamus amet ut omnis. Maiores molestiae cum nisi tenetur."
        },
        {
            "id": 8,
            "type": "posta",
            "text": "Molestiae ad nostrum omnis. Eos eum quasi facere numquam voluptas atque repudiandae consequatur. Facilis doloribus optio neque."
        },
        {
            "id": 9,
            "type": "email",
            "text": "Et placeat est quaerat quibusdam recusandae labore. Ab et quia temporibus voluptates possimus et tempore. Velit sequi ut quisquam vel nihil distinctio numquam."
        },
        {
            "id": 10,
            "type": "sms",
            "text": "Ipsum eos ut expedita laudantium velit. Distinctio fugit laudantium voluptas doloremque perspiciatis ut nostrum debitis. Molestiae in quia illo vitae. Quidem non molestias ducimus facere."
        },
        {
            "id": 11,
            "type": "sms",
            "text": "LoremciaoIpsum"
        }
    ]
}
```
<div id="execution-results-GETapi-messages" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-messages"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-messages"></code></pre>
</div>
<div id="execution-error-GETapi-messages" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-messages"></code></pre>
</div>
<form id="form-GETapi-messages" data-method="GET" data-path="api/messages" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-messages', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-messages" onclick="tryItOut('GETapi-messages');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-messages" onclick="cancelTryOut('GETapi-messages');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-messages" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/messages</code></b>
</p>
</form>


## api/messages




> Example request:

```bash
curl -X POST \
    "http://localhost/api/messages" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"type":"consectetur","text":"porro"}'

```

```javascript
const url = new URL(
    "http://localhost/api/messages"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "consectetur",
    "text": "porro"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-messages" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-messages"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-messages"></code></pre>
</div>
<div id="execution-error-POSTapi-messages" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-messages"></code></pre>
</div>
<form id="form-POSTapi-messages" data-method="POST" data-path="api/messages" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-messages', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-messages" onclick="tryItOut('POSTapi-messages');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-messages" onclick="cancelTryOut('POSTapi-messages');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-messages" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/messages</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="type" data-endpoint="POSTapi-messages" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="text" data-endpoint="POSTapi-messages" data-component="body" required  hidden>
<br>

</p>

</form>


## Get Messages


Get a message by id.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/messages/possimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/messages/possimus"
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
    "error": "Entry for Message not found"
}
```
<div id="execution-results-GETapi-messages--message-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-messages--message-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-messages--message-"></code></pre>
</div>
<div id="execution-error-GETapi-messages--message-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-messages--message-"></code></pre>
</div>
<form id="form-GETapi-messages--message-" data-method="GET" data-path="api/messages/{message}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-messages--message-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-messages--message-" onclick="tryItOut('GETapi-messages--message-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-messages--message-" onclick="cancelTryOut('GETapi-messages--message-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-messages--message-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/messages/{message}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>message</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="message" data-endpoint="GETapi-messages--message-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/messages/{message}




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/messages/molestias" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"type":"magnam","text":"saepe"}'

```

```javascript
const url = new URL(
    "http://localhost/api/messages/molestias"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "magnam",
    "text": "saepe"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-messages--message-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-messages--message-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-messages--message-"></code></pre>
</div>
<div id="execution-error-PUTapi-messages--message-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-messages--message-"></code></pre>
</div>
<form id="form-PUTapi-messages--message-" data-method="PUT" data-path="api/messages/{message}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-messages--message-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-messages--message-" onclick="tryItOut('PUTapi-messages--message-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-messages--message-" onclick="cancelTryOut('PUTapi-messages--message-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-messages--message-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/messages/{message}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/messages/{message}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>message</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="message" data-endpoint="PUTapi-messages--message-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="type" data-endpoint="PUTapi-messages--message-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="text" data-endpoint="PUTapi-messages--message-" data-component="body" required  hidden>
<br>

</p>

</form>


## api/messages/{message}




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/messages/eaque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/messages/eaque"
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


<div id="execution-results-DELETEapi-messages--message-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-messages--message-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-messages--message-"></code></pre>
</div>
<div id="execution-error-DELETEapi-messages--message-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-messages--message-"></code></pre>
</div>
<form id="form-DELETEapi-messages--message-" data-method="DELETE" data-path="api/messages/{message}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-messages--message-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-messages--message-" onclick="tryItOut('DELETEapi-messages--message-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-messages--message-" onclick="cancelTryOut('DELETEapi-messages--message-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-messages--message-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/messages/{message}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>message</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="message" data-endpoint="DELETEapi-messages--message-" data-component="url" required  hidden>
<br>

</p>
</form>



