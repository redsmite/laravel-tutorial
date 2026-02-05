<<<<<<< HEAD
=======
<!DOCTYPE html>
>>>>>>> f9485d1cda22cc8aac8e08cb4ff57c149a0d8bb3
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div style="border: 3px solid black">
    <h2>Register</h2>
    <form action="/register" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button>Register</button>
    </form>
  </div>
</body>
</html>
=======
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
>>>>>>> f9485d1cda22cc8aac8e08cb4ff57c149a0d8bb3
