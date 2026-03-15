<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    <form action="/user" method="POST">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <input type="text" name="name" placeholder="Enter your name">
        <br>
        <br>
        <input type="email" name="email" placeholder="Enter your email">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>
</div>
