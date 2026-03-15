<div>
    <h1>Laravel One to One Relationship</h1>

    <ul>
        <li><strong>What is Relationship?</strong></li>
        <ul>
            <li>A relationship defines how database tables are connected with each other.</li>
            <li>It allows one model to access data from another model.</li>
            <li>Laravel Eloquent provides simple methods to manage relationships between tables.</li>
        </ul>

        <li><strong>What is One to One Relationship?</strong></li>
        <ul>
            <li>In a one-to-one relationship, one record in a table is associated with only one record in another table.</li>
            <li>Example: One user has one profile.</li>
            <li>This is implemented using foreign keys in the database.</li>
        </ul>

        <li><strong>Example</strong></li>
        <ul>
            <li>Table: users</li>
            <li>Table: profiles</li>
            <li>One user → one profile</li>
            <li>Laravel uses <code>hasOne()</code> and <code>belongsTo()</code> methods to define this relationship.</li>
        </ul>

        <li><strong>Interview Questions</strong></li>
        <ul>
            <li>What is the difference between <code>hasOne()</code> and <code>belongsTo()</code>?</li>
            <li>Where should the foreign key be placed in a one-to-one relationship?</li>
            <li>How do you retrieve related data using Eloquent relationships?</li>
            <li>How can you eager load relationships in Laravel?</li>
        </ul>
    </ul>
</div>