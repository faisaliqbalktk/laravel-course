<div>
    <h1>Laravel One to Many Relationship</h1>

    <ul>
        <li><strong>What is One to Many Relationship?</strong></li>
        <ul>
            <li>In a one-to-many relationship, one record in a table is related to multiple records in another table.</li>
            <li>Example: One seller can have many products.</li>
            <li>This is implemented using a foreign key on the "many" side table.</li>
        </ul>

        <li><strong>Make Function in Model</strong></li>
        <ul>
            <li>In the Seller model, define a function to get all related products:</li>
            <pre>
public function products() {
    return $this->hasMany('App\Models\Product', 'seller_id');
}
            </pre>
            <li>In the Product model, define the inverse relationship:</li>
            <pre>
public function seller() {
    return $this->belongsTo('App\Models\Seller', 'seller_id');
}
            </pre>
        </ul>

        <li><strong>Example</strong></li>
        <ul>
            <li>Seller Table: id, name, created_at, updated_at</li>
            <li>Product Table: id, name, price, seller_id, created_at, updated_at</li>
            <li>Example Query in Controller:</li>
            <pre>
$seller = Seller::with('products')->find(1);
foreach($seller->products as $product) {
    echo $product->name;
}
            </pre>
        </ul>

        <li><strong>Interview Questions</strong></li>
        <ul>
            <li>What is the difference between <code>hasMany</code> and <code>belongsTo</code> in Laravel?</li>
            <li>Where should the foreign key be placed in a one-to-many relationship?</li>
            <li>How do you eager load relationships to prevent N+1 query problem?</li>
            <li>How would you update related records in a one-to-many relationship?</li>
        </ul>
    </ul>
</div>