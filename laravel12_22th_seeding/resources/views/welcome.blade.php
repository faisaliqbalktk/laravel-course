<div>
    <h1>Seeding in Laravel</h1>

    <ul>
        <li><strong>What is Seeding?</strong>
            <ul>
                <li>Seeding means inserting sample or default data into the database.</li>
                <li>It is useful for testing, development, and initial project setup.</li>
            </ul>
        </li>

        <li><strong>How to Generate a Seeder File</strong>
            <ul>
                <li>Run the command:</li>
                <li><code>php artisan make:seeder MembersSeeder</code></li>
                <li>This creates a file inside <code>database/seeders</code>.</li>
            </ul>
        </li>

        <li><strong>Data Seeding</strong>
            <ul>
                <li>Open the seeder file.</li>
                <li>Add insert statements using DB queries or Eloquent models.</li>
                <li>Example: inserting dummy members data.</li>
            </ul>
        </li>

        <li><strong>Run Seeding for Database</strong>
            <ul>
                <li>Run all seeders:</li>
                <li><code>php artisan db:seed</code></li>

                <li>Run a specific seeder:</li>
                <li><code>php artisan db:seed --class=MembersSeeder</code></li>

                <li>Run migrations with seeding:</li>
                <li><code>php artisan migrate --seed</code></li>
            </ul>
        </li>

        <li><strong>If You Have Multiple Seeders</strong>
            <ul>
                <li>Register them inside <code>DatabaseSeeder.php</code>.</li>
                <li>Example:</li>
                <li><code>$this->call([
    MembersSeeder::class,
    UsersSeeder::class
]);</code></li>
                <li>Then run:</li>
                <li><code>php artisan db:seed</code></li>
                <li>This will execute all listed seeders.</li>
            </ul>
        </li>

        <li><strong>Interview Questions & Answers</strong>
            <ul>
                <li><strong>1. What is database seeding and why is it useful?</strong><br>
                    Seeding inserts sample or default data into tables. It helps testing, development, and setting up initial system data quickly.</li>

                <li><strong>2. What is the difference between migrations and seeders?</strong><br>
                    Migrations create and modify database structure (tables & columns). Seeders insert data into those tables.</li>

                <li><strong>3. How do you run a specific seeder?</strong><br>
                    Use: <code>php artisan db:seed --class=MembersSeeder</code></li>

                <li><strong>4. How do you run multiple seeders at once?</strong><br>
                    Register them in <code>DatabaseSeeder.php</code> using <code>$this->call()</code> and run <code>php artisan db:seed</code>.</li>

                <li><strong>5. Can seeders be used in production?</strong><br>
                    Yes, but mainly for default data (roles, settings). Avoid inserting test/dummy data in production.</li>
            </ul>
        </li>
    </ul>
</div>