<div>
    <h1>Stub Customization in Laravel</h1>
    <ul>
        <li>Why Use Stub
            <ul>
                <li>To generate pre-defined templates for classes, controllers, models, and migrations</li>
            </ul>
        </li>

        <li>Run Command
            <ul>
                <li>php artisan make:controller MyController</li>
            </ul>
        </li>

        <li>Customize Controller
            <ul>
                <li>Add default methods or boilerplate code to new controllers automatically</li>
            </ul>
        </li>

        <li>Customize Model
            <ul>
                <li>Pre-set $fillable, $guarded, or other default properties in new models</li>
            </ul>
        </li>

        <li>Interview Question
            <ul>
                <li>Explain stub customization in Laravel and its benefits</li>
            </ul>
        </li>
    </ul>
</div>

<br><br><br>

<div>
    <h1>Migration in Laravel</h1>
    <ul>
        <li>What is Migration
            <ul>
                <li>A migration is a class that allows you to create, modify, and manage database tables in a
                    version-controlled way</li>
            </ul>
        </li>

        <li>Make Table with Migration
            <ul>
                <li>php artisan make:migration create_students_table</li>
            </ul>
        </li>

        <li>Write Code for Column Fields
            <ul>
                <li>
                    Example inside migration:
                    <pre>
$table->id();
$table->string('name');
$table->string('email')->unique();
$table->timestamps();
                    </pre>
                </li>
            </ul>
        </li>

        <li>Migrate Database
            <ul>
                <li>php artisan migrate</li>
            </ul>
        </li>


        <li>
            <h1>Migration Important Commands</h1>
            <ul>
                <li>How to reset migrations
                    <ul>
                        <li><code>php artisan migrate:reset</code></li>
                    </ul>
                </li>
                <li>Rollback migration
                    <ul>
                        <li><code>php artisan migrate:rollback</code></li>
                    </ul>
                </li>
                <li>Rollback multiple steps / refresh
                    <ul>
                        <li>Rollback multiple batches: <code>php artisan migrate:rollback --step=2</code></li>
                        <li>Fresh migrate (drop & re-run all tables): <code>php artisan migrate:fresh</code></li>
                    </ul>
                </li>
                <li>Single file migration
                    <ul>
                        <li>php artisan migrate --path=/database/migrations/your_file.php</li>
                    </ul>
                </li>
                <li>Tip
                    <ul>
                        <li>Use rollback/reset/fresh carefully in production, as tables will be dropped</li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>
