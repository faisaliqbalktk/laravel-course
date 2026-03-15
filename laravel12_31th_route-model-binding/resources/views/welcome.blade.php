<div>
    <h1>Route Model Binding</h1>
    <ul>
        <li><strong>What is Route Model Binding</strong></li>
        <ul>
            <li>Route Model Binding is a Laravel feature that automatically injects a model instance into your route or controller based on the route parameter.</li>
            <li>It saves you from manually querying the database using `Model::find($id)`.</li>
            <li>There are two types: <strong>Implicit</strong> and <strong>Explicit</strong> route model binding.</li>
        </ul>

        <li><strong>Make Model and Controller</strong></li>
        <ul>
            <li>Create a model with artisan:</li>
            <pre>php artisan make:model Student -m</pre>
            <li>Create a controller with artisan:</li>
            <pre>php artisan make:controller StudentController</pre>
            <li>Make sure your route parameter matches the model's variable name for implicit binding.</li>
        </ul>

        <li><strong>Understand with Example</strong></li>
        <ul>
            <li>Implicit Route Model Binding:</li>
            <pre>
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/students/{student}', [StudentController::class, 'show']);

class StudentController extends Controller {
    public function show(Student $student) {
        return $student;
    }
}
            </pre>
            <li>Laravel automatically fetches the `Student` instance based on the `{student}` ID in the URL.</li>

            <li>Explicit Route Model Binding:</li>
            <pre>
use App\Models\Student;

Route::get('/students/{student}', [StudentController::class, 'show'])
     ->whereNumber('student');

Route::bind('student', function ($value) {
    return Student::where('slug', $value)->firstOrFail();
});
            </pre>
            <li>This allows you to bind the route parameter to a custom query, e.g., by `slug` instead of `id`.</li>
        </ul>

        <li><strong>Interview Questions</strong></li>
        <ul>
            <li>What is Route Model Binding in Laravel?</li>
            <li>What is the difference between Implicit and Explicit binding?</li>
            <li>How do you customize the binding key (other than `id`)?</li>
            <li>What happens if a model instance is not found?</li>
            <li>How does Laravel know which model to inject?</li>
        </ul>
    </ul>
</div>