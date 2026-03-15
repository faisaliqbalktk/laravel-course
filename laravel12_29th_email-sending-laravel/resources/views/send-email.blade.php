
<div>
    <h1>Add Details For Send Email</h1>
    <form action="send-email" method="POST">
        @csrf

        <input type="text" name="to" placeholder="Enter Email Address">
        <br>
        <br>
        <input type="text" name="subject" placeholder="Enter Email Subject">
        <br>
        <br>
       <textarea name="message" placeholder="Enter Email Message" required></textarea>
        <br><br>
        <button>Send Email</button>
    </form>
</div>