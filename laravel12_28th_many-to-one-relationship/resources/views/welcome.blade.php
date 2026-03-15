<div>
    <h1>Laravel Many to One Relationship</h1>

    <ul>
        <li><strong>What is Many to One Relationship?</strong></li>
        <ul>
            <li>In a many-to-one relationship, multiple records in one table are associated with a single record in another table.</li>
            <li>Example: Many products belong to one seller.</li>
            <li>This is the inverse of a one-to-many relationship.</li>
        </ul>

        <li><strong>Make Function in Model</strong></li>
        <ul>
            <li>In the Product model, define a function to get the related seller:</li>
            <pre>
public function seller() {
    return $this->belongsTo('App\Models\Seller', 'seller_id');
}
            </pre>
            <li>In the Seller model, you can still define the inverse as one-to-many:</li>
            <pre>
public function products() {
    return $this->hasMany('App\Models\Product', 'seller_id');
}
            </pre>
        </ul>

        <li><strong>Example</strong></li>
        <ul>
            <li>Product Table: id, name, price, seller_id, created_at, updated_at</li>
            <li>Seller Table: id, name, created_at, updated_at</li>
            <li>Example Query in Controller:</li>
            <pre>
$product = Product::with('seller')->find(1);
echo $product->name . ' belongs to ' . $product->seller->name;
            </pre>
        </ul>

        <li><strong>Interview Questions</strong></li>
        <ul>
            <li>What is the difference between <code>hasMany</code> and <code>belongsTo</code>?</li>
            <li>Where is the foreign key placed in a many-to-one relationship?</li>
            <li>How do you eager load relationships to avoid N+1 queries?</li>
            <li>How do you access the parent record from the child record?</li>
        </ul>
    </ul>
</div>