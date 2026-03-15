<h1>Welcome Page</h1>

{{-- link method 1 --}}
<a href="/about">About page link</a>
<br>
<br>

{{-- link method 2 --}}
<a href="{{URL::to('about')}}">About page link</a>
<br>
<a href="{{URL::to('home')}}">Home page link</a>
<br>
<br>

{{-- link method 3 --}}
<a href="{{URL::to('about',['faisal'])}}">About Faisal</a>
