<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-container {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      width: 300px;
    }
    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .login-container input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .login-container button {
      width: 100%;
      padding: 10px;
      background: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .login-container button:hover {
      background: #45a049;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h2>Register</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
      <input value="{{ old('name', $user->name) }}" type="text" name="name" placeholder="Username" required/>
      <input value="{{ old('email' ,$user->email ) }}" type="email" name="email" placeholder="email" required/>
      <input type="password" name="password" placeholder="Password" required/>
      <button type="submit">Update</button>
    </form>


  </div>
</body>
</html>
