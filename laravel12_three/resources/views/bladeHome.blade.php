@include('common.header')

<h1>{{ $name }}</h1>

<!-- if else condition -->
<ul>
    @foreach ($users as $user)
        @if($user == 'faisal')
            <li>This is {{ $user }}</li>
        @else
            <li>{{ $user }}</li>
        @endif
    @endforeach
</ul>

<!-- loop -->
<ul>
    @foreach($products as $product)
        <li>
            {{ $product['name'] }} - ${{ $product['price'] }}
            @if($product['stock'] > 0)
                (In Stock: {{ $product['stock'] }})
            @else
                (Out of Stock)
            @endif
        </li>
    @endforeach
</ul>
@includeIf('common.inner', ['page' => 'This is home blade page'])
