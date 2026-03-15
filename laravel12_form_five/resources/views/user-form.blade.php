<div>
    <h2>Add New User</h2>
    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User name" name="username">
        </div>
         <div class="input-wrapper">
            <input type="text" placeholder="Enter User email" name="email">
        </div>
         <div class="input-wrapper">
            <input type="text" placeholder="Enter User city" name="city">
        </div>
         <div class="input-wrapper">
            <button>Add New User</button>
        </div>
    </form>
    <!-- When there is no desire, all things are at peace. - Laozi -->
</div>

<style>
    div {
    max-width: 420px;
    margin: 40px auto;
    padding: 30px;
    background: #ffffff;
    border-radius: 14px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    font-family: Arial, sans-serif;
}

h2 {
    margin-bottom: 20px;
    font-size: 24px;
    font-weight: 600;
    color: #333;
    text-align: center;
}

.input-wrapper {
    margin-bottom: 18px;
}

.input-wrapper input {
    width: 100%;
    padding: 12px 14px;
    border: 1px solid #dcdcdc;
    border-radius: 8px;
    font-size: 15px;
    transition: all 0.25s ease;
}

.input-wrapper input:focus {
    border-color: #4a90e2;
    box-shadow: 0 0 4px rgba(74,144,226,0.4);
    outline: none;
}

.input-wrapper button {
    width: 100%;
    padding: 12px;
    background: #4a90e2;
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.25s ease;
}

.input-wrapper button:hover {
    background: #357ab8;
}

</style>