<div>
    <h1>API in Laravel</h1>

    <ul>
        <li><strong>What is API</strong></li>
        <ul>
            <li>API stands for Application Programming Interface.</li>
            <li>It allows different software applications to communicate with each other.</li>
            <li>In Laravel, APIs are used to send and receive data between client and server.</li>
            <li>APIs usually return data in JSON format.</li>
        </ul>

        <li><strong>Use of API</strong></li>
        <ul>
            <li>Connect frontend applications like React, Vue, or mobile apps with backend.</li>
            <li>Share data between different systems.</li>
            <li>Build RESTful services for web and mobile apps.</li>
            <li>Integrate third-party services such as payment gateways.</li>
        </ul>

        <li><strong>How API data look like</strong></li>
        <ul>
            <li>API responses usually return data in JSON format.</li>
            <li>Example:</li>
            <li>
<pre>
{
  "id": 1,
  "name": "Laptop",
  "price": 1200,
  "status": "available"
}
</pre>
            </li>
        </ul>

        <li><strong>Interview Question</strong></li>
        <ul>
            <li>
                <strong>Q: What is an API and why is it used?</strong><br>
                A: API allows communication between different software systems to exchange data.
            </li>

            <li>
                <strong>Q: What is the difference between REST API and Web API?</strong><br>
                A: REST API follows REST architecture rules, while Web API is a general term for APIs used over HTTP.
            </li>

            <li>
                <strong>Q: Which format is commonly used for API responses?</strong><br>
                A: JSON (JavaScript Object Notation).
            </li>

            <li>
                <strong>Q: Which Laravel command is used to create an API controller?</strong><br>
                A: <code>php artisan make:controller ProductController --api</code>
            </li>

            <li>
                <strong>Q: Which file is used for API routes in Laravel?</strong><br>
                A: <code>routes/api.php</code>
            </li>
        </ul>

    </ul>
</div>