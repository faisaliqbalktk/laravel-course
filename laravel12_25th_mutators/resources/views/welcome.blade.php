<div>
    <h1>Laravel Mutators</h1>

    <ul>
        <li><strong>What are Mutators in Laravel?</strong>
            <ul>
                <li>Mutators allow you to modify or format Eloquent model attributes **before saving them to the database**.</li>
                <li>They are defined in the model and automatically transform the value whenever you set the attribute.</li>
                <li>Use the naming convention: <code>set{AttributeName}Attribute($value)</code></li>
            </ul>
        </li>

        <li><strong>Make Controller Function and Route</strong>
            <ul>
                <li>Create a controller: <code>php artisan make:controller StudentController</code></li>
                <li>Create a function to save a student with mutators:</li>
                <li>
                    ```php
                    public function store(Request $request)
                    {
                        Student::create([
                            'first_name' => $request->first_name,
                            'last_name' => $request->last_name,
                            'email' => $request->email,
                            'phone' => $request->phone
                        ]);
                        return "Student saved!";
                    }
                    ```
                </li>
                <li>Define route in <code>web.php</code>:</li>
                <li><code>Route::post('/students', [StudentController::class, 'store']);</code></li>
            </ul>
        </li>

        <li><strong>Example: Create 2 Mutators</strong>
            <ul>
                <li>1. **Capitalize First Name**</li>
                <li>
                    ```php
                    public function setFirstNameAttribute($value)
                    {
                        $this->attributes['first_name'] = ucfirst($value);
                    }
                    ```
                </li>

                <li>2. **Hash Email Before Saving**</li>
                <li>
                    ```php
                    public function setEmailAttribute($value)
                    {
                        $this->attributes['email'] = strtolower($value);
                    }
                    ```
                </li>

                <li>Now, when you save a student, these mutators will automatically apply.</li>
            </ul>
        </li>

        <li><strong>Interview Questions & Answers</strong>
            <ul>
                <li><strong>1. What is a mutator in Laravel?</strong><br>
                    A method that automatically modifies a model attribute **before saving it to the database**.</li>

                <li><strong>2. How do you define a mutator?</strong><br>
                    Use the naming convention <code>set{AttributeName}Attribute($value)</code> inside the model.</li>

                <li><strong>3. Difference between mutator and accessor?</strong><br>
                    Mutator = modifies data when saving. Accessor = modifies data when retrieving.</li>

                <li><strong>4. Can multiple mutators be applied to one model?</strong><br>
                    Yes, each attribute can have its own mutator.</li>

                <li><strong>5. How are mutators useful?</strong><br>
                    They ensure consistent data formatting, like capitalizing names, hashing passwords, or lowercasing emails automatically.</li>
            </ul>
        </li>
    </ul>
</div>