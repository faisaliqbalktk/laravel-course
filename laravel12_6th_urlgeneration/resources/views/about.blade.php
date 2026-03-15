<div>
    <h1>about page</h1>
    <a href="/home">home page link</a>

    <br>
    <br>

    <h3>
         {{URL::current()}}
    </h3>
    <br>
    <br>



    {{-- how to get previous page link --}}
    <h1>Previous page link below</h1>
    <h3>{{URL::previous()}}</h3>
</div>
