<div class="user-form-wrapper">
    <h2>Add New User</h2>




    <form action="addUser" method="post">
        @csrf

        <div class="form-group">
            <label for="username">Username</label>
<input type="text" name="username" id="username" value="{{ old('username') }}" placeholder="Enter username" class="{{ $errors->has('username') ? 'input-error' : '' }}">

            @error('username')
    <span style="background-color:red; color:#fff; padding:4px 8px;">
        {{ $message }}
    </span>
@enderror

        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{old('email')}}" placeholder="Enter email address">
@error('email')
    <span style="background-color:red; color:#fff; padding:4px 8px;">
        {{ $message }}
    </span>
@enderror
        </div>

        <div class="form-group">
            <h4>User Skills</h4>
            <div class="inline-group">
                <label><input type="checkbox" name="skills[]" value="PHP"> PHP</label>
                <label><input type="checkbox" name="skills[]" value="Node"> Node</label>
                <label><input type="checkbox" name="skills[]" value="Java"> Java</label>
            </div>
            @error('skills')
    <span style="background-color:red; color:#fff; padding:4px 8px;">
        {{ $message }}
    </span>
@enderror
        </div>

        <div class="form-group">
            <h4>Gender</h4>
            <div class="inline-group">
                <label><input type="radio" name="gender" value="Male"> Male</label>
                <label><input type="radio" name="gender" value="Female"> Female</label>
            </div>
        </div>

        <div class="form-group">
            <label for="city">City</label>
            <select name="city" id="city">
                <option value="">Select City</option>
                <option value="Islamabad">Islamabad</option>
                <option value="Karachi">Karachi</option>
                <option value="Lahore">Lahore</option>
                <option value="Rawalpindi">Rawalpindi</option>
                <option value="Faisalabad">Faisalabad</option>
                <option value="Multan">Multan</option>
                <option value="Peshawar">Peshawar</option>
                <option value="Quetta">Quetta</option>
            </select>
        </div>

        <div class="form-group">
            <label for="age">Age</label>
            <input type="range" name="age" id="age" min="18" max="100">
        </div>

        <button type="submit" class="btn-submit">Add New User</button>
    </form>
</div>

<style>
.user-form-wrapper {
    max-width: 520px;
    margin: 40px auto;
    padding: 25px;
    border-radius: 8px;
    background: #ffffff;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    font-family: Arial, sans-serif;
}

.user-form-wrapper h2 {
    margin-bottom: 20px;
    text-align: center;
    color: #333;
}

.form-group {
    margin-bottom: 18px;
}

.form-group label,
.form-group h4 {
    display: block;
    margin-bottom: 6px;
    font-weight: 600;
    color: #444;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group select {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    transition: border-color 0.2s;
}

.form-group input:focus,
.form-group select:focus {
    border-color: #007bff;
    outline: none;
}

.inline-group {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.inline-group label {
    font-weight: normal;
}

input[type="range"] {
    width: 100%;
}

.btn-submit {
    width: 100%;
    padding: 12px;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 15px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.btn-submit:hover {
    background: #0056b3;
}

.error-message {
    margin-bottom: 10px;
    padding: 10px 12px;
    border-left: 4px solid #dc3545;
    background-color: #fdecea;
    color: #842029;
    font-size: 14px;
    border-radius: 4px;
}

.input-error{
    border: 1px solid red;
    color red;
}

</style>
