<x-message-banner msg="User Login Successfully" class="success"/>
<x-message-banner msg="User Signup Successfully" class="success"/>

<br>
<br>
<br>

<x-message-banner msg="Password not correct! Please try again" class="error"/>
<x-message-banner msg="Went something wrong" class="warning"/>


<h1>This is home page</h1>

<style>
    .success{
    display: inline-block;
    background: lightgreen;
    color: green;
    padding: 12px 16px;
    border-left: 4px solid green;
    border-radius: 6px;
    font-weight: 600;
    margin: 10px 0;
}

.error {
    display: inline-block;
    background: #ffdddd;
    color: #d8000c;
    padding: 12px 16px;
    border-left: 4px solid #d8000c;
    border-radius: 6px;
    font-weight: 600;
    margin: 10px 0;
}

.warning {
    display: inline-block;
    background: #fff4cc;
    color: #b38600;
    padding: 12px 16px;
    border-left: 4px solid #b38600;
    border-radius: 6px;
    font-weight: 600;
    margin: 10px 0;
}

</style>