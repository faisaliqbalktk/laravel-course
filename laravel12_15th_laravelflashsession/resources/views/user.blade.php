<div class="user-form-wrapper">
    <h1>Add New User</h1>

    @if (session('message'))
        <div class="success-message">
            {{ session('message') }}
        </div>
    @endif

    <form action="{{ url('add') }}" method="POST">
        @csrf

        <input type="text" name="username" placeholder="Enter User Name" required>

        <input type="email" name="email" placeholder="Enter Email" required>

        <input type="text" name="phone" placeholder="Enter Phone No." required>

        <button type="submit">Add New User</button>
    </form>
</div>

<style>
    .user-form-wrapper {
        max-width: 420px;
        margin: 40px auto;
        padding: 24px;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        font-family: Arial, sans-serif;
    }

    .user-form-wrapper h1 {
        margin-bottom: 20px;
        font-size: 22px;
        text-align: center;
    }

    .user-form-wrapper input {
        width: 100%;
        padding: 10px;
        margin-bottom: 14px;
        border: 1px solid #d1d5db;
        border-radius: 4px;
    }

    .user-form-wrapper button {
        width: 100%;
        padding: 10px;
        background-color: #2563eb;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .user-form-wrapper button:hover {
        background-color: #1e40af;
    }

    .success-message {
        margin-bottom: 16px;
        padding: 10px;
        background-color: #ecfeff;
        color: #065f46;
        border: 1px solid #99f6e4;
        border-radius: 4px;
        text-align: center;
    }
</style>
