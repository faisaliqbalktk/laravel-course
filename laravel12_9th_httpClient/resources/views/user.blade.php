<!DOCTYPE html>
<html>
<head>
    <title>User Info</title>
</head>
<body>
    <h1>User Details</h1>

    <p><strong>ID:</strong> {{ $data['id'] }}</p>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Username:</strong> {{ $data['username'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Website:</strong> {{ $data['website'] }}</p>

    <h2>Address</h2>
    <p>
        {{ $data['address']['street'] }}, 
        {{ $data['address']['suite'] }}, 
        {{ $data['address']['city'] }} - 
        {{ $data['address']['zipcode'] }}
    </p>

    <h2>Company</h2>
    <p><strong>Name:</strong> {{ $data['company']['name'] }}</p>
    <p><strong>Catch Phrase:</strong> {{ $data['company']['catchPhrase'] }}</p>
    <p><strong>BS:</strong> {{ $data['company']['bs'] }}</p>
</body>
</html>
