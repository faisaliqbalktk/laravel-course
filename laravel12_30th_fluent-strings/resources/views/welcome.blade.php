<div>
    <h1>Fluent Strings</h1>
    <ul>
        <li><strong>What is Fluent Strings</strong></li>
        <ul>
            <li>Fluent Strings is a Laravel helper that allows you to perform multiple string operations using a clean and chainable syntax.</li>
            <li>It uses the <code>Str::of()</code> method which returns a fluent string object.</li>
            <li>This makes string manipulation easier, readable, and more maintainable.</li>
        </ul>

        <li><strong>Issue with Previous String Handling</strong></li>
        <ul>
            <li>Traditional PHP string functions require multiple variables for different operations.</li>
            <li>Code becomes less readable when many string functions are used together.</li>
            <li>Example: <code>strtolower()</code>, <code>ucfirst()</code>, <code>trim()</code> all require separate steps.</li>
        </ul>

        <li><strong>Understand with Example</strong></li>
        <ul>
            <li>Using traditional PHP:</li>
            <pre>
$string = "  hello world ";
$string = trim($string);
$string = ucfirst($string);
echo $string;
            </pre>

            <li>Using Laravel Fluent Strings:</li>
            <pre>
use Illuminate\Support\Str;

$result = Str::of('  hello world ')
            ->trim()
            ->ucfirst();

echo $result;
            </pre>

            <li>This approach allows chaining multiple string methods in a single readable line.</li>
        </ul>

        <li><strong>Interview Question</strong></li>
        <ul>
            <li>What is Fluent String in Laravel?</li>
            <li>What is the purpose of <code>Str::of()</code>?</li>
            <li>How does Fluent String improve code readability?</li>
            <li>What are some common methods used with Fluent Strings?</li>
        </ul>
    </ul>
</div>