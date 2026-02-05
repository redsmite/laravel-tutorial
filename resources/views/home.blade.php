<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>
<body>
  @auth
    <p>Congrats, you are logged in.</p>
  @else
    <div style="border: 3px solid black">
    <h2>Register</h2>
    <form action="/register" method="POST">
      @csrf

      <input type="text" name="name" placeholder="name">
      <input type="text" name="email" placeholder="email">
      <input type="password" name="password" placeholder="password">

      <button type="submit">Register</button>
    </form>
  </div> 
  @endauth
</body>
</html>
