<div>
    <h1>Laravel Accessors</h1>

    <ul>
        <li><strong>What are Accessors in Laravel?</strong>
            <ul>
                <li>Accessors allow you to format Eloquent model attributes when retrieving them.</li>
                <li>They are defined in the model and automatically modify the value whenever you access the attribute.</li>
                <li>Use the naming convention: <code>get{AttributeName}Attribute()</code></li>
            </ul>
        </li>

        <li><strong>Steps: Create Model, Controller, and View</strong>
            <ul>
                <li>Create model: <code>php artisan make:model Member</code></li>
                <li>Create controller: <code>php artisan make:controller MemberController</code></li>
                <li>Create view: <code>resources/views/members.blade.php</code></li>
                <li>Pass data from controller to view and display accessor-modified attributes.</li>
            </ul>
        </li>

        <li><strong>Example: Create 2 Accessors</strong>
            <ul>
                <li>1. Full Name Accessor</li>
                <li>
                    ```php
                    public function getFullNameAttribute() {
                        return $this->first_name . ' ' . $this->last_name;
                    }
                    ```
                </li>
                <li>2. Uppercase Email Accessor</li>
                <li>
                    ```php
                    public function getEmailUpperAttribute() {
                        return strtoupper($this->email);
                    }
                    ```
                </li>
                {{-- <li>Use in view: <code>{{ $member->full_name }}</code> or <code>{{ $member->email_upper }}</code></li> --}}
            </ul>
        </li>

        <li><strong>Interview Questions & Answers</strong>
            <ul>
                <li>What is an accessor in Laravel?<br>
                    A method to automatically format or transform model attribute values when retrieving them.</li>

                <li>How do you define an accessor?<br>
                    Use the naming convention <code>get{AttributeName}Attribute()</code> inside the model.</li>

                <li>Can accessors modify multiple attributes?<br>
                    Yes, each attribute can have its own accessor method.</li>

                <li>Difference between accessor and mutator?<br>
                    Accessor = modifies data when retrieving it, Mutator = modifies data when saving it.</li>

                <li>How do you use accessors in Blade views?<br>
                    {{-- Just access the attribute normally, e.g., <code>{{ $member->full_name }}</code>.</li> --}}
            </ul>
        </li>
    </ul>
</div>