<div>
    <h1>Laravel Maintenance Mode</h1>

    <ul>
        <li><strong>What is Maintenance Mode?</strong>
            <ul>
                <li>Maintenance mode temporarily disables your application for users.</li>
                <li>It is used when performing updates, bug fixes, or deployments safely.</li>
                <li>Visitors see a maintenance page instead of the app content.</li>
            </ul>
        </li>

        <li><strong>How to Enable Maintenance Mode</strong>
            <ul>
                <li>Run the command:</li>
                <li><code>php artisan down</code></li>
                <li>The application is now in maintenance mode.</li>
            </ul>
        </li>

        <li><strong>How to Disable Maintenance Mode</strong>
            <ul>
                <li>Run the command:</li>
                <li><code>php artisan up</code></li>
                <li>The application is back online for all users.</li>
            </ul>
        </li>

        <li><strong>How to Apply a Secret Key During Maintenance Mode</strong>
            <ul>
                <li>Allows access to the app using a special URL even while in maintenance mode.</li>
                <li>Run the command:</li>
                <li><code>php artisan down --secret="codestepbystep"</code></li>
                <li>Access the app via: <code>https://your-app.test/codestepbystep</code></li>
            </ul>
        </li>

        <li><strong>Interview Questions & Answers</strong>
            <ul>
                <li><strong>1. What is Laravel Maintenance Mode?</strong><br>
                    Temporarily disables the app to safely perform updates or fixes.</li>

                <li><strong>2. How do you enable maintenance mode?</strong><br>
                    <code>php artisan down</code></li>

                <li><strong>3. How do you disable maintenance mode?</strong><br>
                    <code>php artisan up</code></li>

                <li><strong>4. Can you access the app during maintenance mode?</strong><br>
                    Yes, by using a secret key: <code>php artisan down --secret="your-key"</code></li>

                <li><strong>5. Why is maintenance mode important?</strong><br>
                    Prevents users from seeing broken or incomplete features during updates, ensuring a smooth experience.</li>
            </ul>
        </li>
    </ul>

    <h2>Quick Commands Reference</h2>
    <ul>
        <li><code>php artisan down</code> — Enable maintenance mode</li>
        <li><code>php artisan up</code> — Disable maintenance mode</li>
        <li><code>php artisan down --secret="codestepbystep"</code> — Enable maintenance mode with a secret bypass key</li>
    </ul>
</div>
