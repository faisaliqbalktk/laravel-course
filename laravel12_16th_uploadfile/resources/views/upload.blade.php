<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium File Upload</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --primary-hover: #4f46e5;
            --bg: #0f172a;
            --card-bg: #1e293b;
            --text: #f8fafc;
            --text-muted: #94a3b8;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--bg);
            color: var(--text);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .upload-card {
            background: var(--card-bg);
            padding: 2.5rem;
            border-radius: 1.5rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 450px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }

        h1 {
            font-weight: 600;
            margin-bottom: 0.5rem;
            background: linear-gradient(to right, #818cf8, #c084fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        p {
            color: var(--text-muted);
            margin-bottom: 2rem;
            font-size: 0.95rem;
        }

        .file-input-wrapper {
            margin-bottom: 1.5rem;
            position: relative;
        }

        input[type="file"] {
            width: 100%;
            padding: 1rem;
            background: rgba(15, 23, 42, 0.5);
            border: 2px dashed rgba(255, 255, 255, 0.1);
            border-radius: 0.75rem;
            color: var(--text-muted);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        input[type="file"]:hover {
            border-color: var(--primary);
            background: rgba(99, 102, 241, 0.05);
        }

        button {
            width: 100%;
            padding: 1rem;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 0.75rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, background 0.2s;
            box-shadow: 0 10px 15px -3px rgba(99, 102, 241, 0.3);
        }

        button:hover {
            background: var(--primary-hover);
            transform: translateY(-2px);
        }

        button:active {
            transform: translateY(0);
        }

        .error-list {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.2);
            border-radius: 0.75rem;
            padding: 1rem;
            margin-bottom: 1.5rem;
            text-align: left;
        }

        .error-list ul {
            margin: 0;
            padding-left: 1.25rem;
            color: #fca5a5;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    <div class="upload-card">
        <h1>Upload File</h1>
        <p>Select an image to upload to the server.</p>

        @if ($errors->any())
            <div class="error-list">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="upload" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="file-input-wrapper">
                <input type="file" name="file" id="file" required>
            </div>
            <button type="submit">Upload Image</button>
        </form>
    </div>
</body>
</html>