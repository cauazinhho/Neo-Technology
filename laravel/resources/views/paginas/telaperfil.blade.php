<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Meu Perfil</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    body {
      margin: 0;
      font-family: 'Orbitron', sans-serif;
      background-color: #0f1512;
      color: white;
      text-align: center;
    }

    .logo-container {
      position: absolute;
      top: 10px;
      left: 10px;
    }

    .logo-container img {
      width: 50px;
      height: 50px;
    }

    .editar-perfil {
      position: absolute;
      top: 20px;
      right: 30px;
      font-size: 16px;
      color: #d1d1d1;
      text-decoration: none;
    }

    .perfil-container {
      max-width: 600px;
      margin: 0 auto;
      padding-top: 60px;
    }

    .perfil-container img {
      width: 140px;
      height: 140px;
      border-radius: 50%;
      border: 3px solid #00bfff;
      object-fit: cover;
      margin-top: 20px;
    }

    h2 {
      margin-top: 10px;
      font-size: 22px;
      color: #00bfff;
    }

    .info-box {
      margin-top: 40px;
      text-align: left;
      background-color: #444;
      padding: 20px;
      border-radius: 10px;
    }

    .info-item {
      margin-bottom: 20px;
      font-size: 18px;
    }

    .info-label {
      color: #aaa;
      margin-right: 10px;
    }
  </style>
</head>
<body>
  <div class="logo-container">
    <img src="img/lamen.png" alt="logo">
  </div>

  <a href="#" class="editar-perfil">Editar Perfil</a>

  <div class="perfil-container">
    <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="Avatar" />
    <h2>Olá, Admin!</h2>

    <div class="info-box">
      <div class="info-item">
        <span class="info-label">Usuário:</span> admin
      </div>
      <div class="info-item">
        <span class="info-label">Configuração Favorita:</span> Modo Noturno
      </div>
    </div>
  </div>
</body>
</html>
