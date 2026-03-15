<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploaded Successfully</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
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

        .display-card {
            background: var(--card-bg);
            padding: 2.5rem;
            border-radius: 1.5rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 500px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        h1 {
            font-weight: 600;
            margin-bottom: 1.5rem;
            background: linear-gradient(to right, #4ade80, #2dd4bf);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .image-container {
            width: 100%;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.3);
            margin-bottom: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }

        img:hover {
            transform: scale(1.05);
        }

        .back-link {
            display: inline-block;
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s;
        }

        .back-link:hover {
            color: #818cf8;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="display-card">
        <h1>Upload Successful!</h1>
        <div class="image-container">
            <img src="{{url('storage/'.$path)}}" alt="Uploaded Image">
        </div>
        <a href="{{ url('upload') }}" class="back-link">← Upload another file</a>
    </div>
</body>
</html>