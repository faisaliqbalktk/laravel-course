<div>
    <h1>Inline Blade Template</h1>

    <ul>
        <li><strong>What is Blade Template</strong>
            <ul>
                <li>Blade is the templating engine used in Laravel.</li>
                <li>It helps create dynamic HTML easily.</li>
                <li>Blade files use the .blade.php extension.</li>
            </ul>
        </li>

        <li><strong>What is Inline Blade Template</strong>
            <ul>
                <li>Inline Blade templates are written directly inside PHP code.</li>
                <li>They do not require a separate view file.</li>
                <li>They can be rendered using Blade::render().</li>
            </ul>
        </li>

        <li><strong>Example of Inline Blade Template</strong>
            <ul>
                <li>
<pre>
use Illuminate\Support\Facades\Blade;

$html = Blade::render('Hello @{{ $name }}', ['name' => 'Faisu']);
echo $html;
</pre>
                </li>
            </ul>
        </li>

        <li><strong>Use of Inline Blade Template</strong>
            <ul>
                <li>Quick dynamic HTML rendering.</li>
                <li>Useful for small UI components.</li>
                <li>Testing Blade syntax without creating view files.</li>
            </ul>
        </li>
    </ul>
</div>