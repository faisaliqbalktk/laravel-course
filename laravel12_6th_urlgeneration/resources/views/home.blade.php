<div>
    <h1>home page</h1>
    <a href="/about">About page link</a>

    {{-- url generation method 1 --}}
     <h3>
        <h1>First Method</h1>
        {{URL::current()}}
     </h3>
     <br>

     {{-- url generation method 2 --}}
     <h3>
        <h1>Second Method</h1>
        {{URL::full()}}
     </h3>
     <br>

    {{-- url generation method 3 --}}
     <h3>
        <h1>Third Method</h1>
        {{url()->current()}}
     </h3>

    {{-- url generation method 3 --}}
     <h3>
        <h1>Third Method</h1>
        {{URL::full()}}
     </h3>
</div>
