<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Neo Technology - Tela Inicial</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">

  <style>
    * {
      font-family: 'Orbitron', sans-serif;
    }

    body {
      margin: 0;
      background-color: #0f1512;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
    }

    .logo-title h1 {
      font-size: 2rem;
      color: #00ffff;
      margin-bottom: 0;
    }

    .subtitle {
      color: #ff00ff;
      font-size: 1.1rem;
      margin-bottom: 2rem;
    }

    .logo-img {
      width: 50px;
      height: 50px;
      margin-left: 10px;
    }

    .btn-login {
      background-color: #00ccff;
      color: #000;
      font-weight: bold;
      border-radius: 10px;
      padding: 10px 20px;
    }

    .btn-register {
      background-color: #ff00ff;
      color: #000;
      font-weight: bold;
      border-radius: 10px;
      padding: 10px 20px;
    }

    .top-text {
      position: absolute;
      top: 10px;
      left: 10px;
      color: #aaa;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

  <div class="container d-flex flex-column align-items-center justify-content-center">
    <div class="d-flex align-items-center mb-2 logo-title">
      <h1 class="mb-0">Neo Technology</h1>
      <img src="img/lamen.png" alt="Logo" class="logo-img" />
    </div>

    <div class="subtitle">ネオテクノロジー</div>

    <div class="d-flex gap-3">
      <a href="#" class="btn btn-login">LOGIN</a>
      <a href="#" class="btn btn-register">REGISTRAR</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
