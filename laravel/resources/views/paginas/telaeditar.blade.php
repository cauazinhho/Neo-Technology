<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Editar Perfil</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    body {
      margin: 0;
      font-family: 'Orbitron', sans-serif;
      background-color: #131b14;
      color: white;
      text-align: center;
    }

    .voltar {
      text-align: left;
      padding: 20px;
      font-size: 28px;
    }

    .perfil-container {
      max-width: 600px;
      margin: 0 auto;
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
    }

    .form-group {
      margin-top: 30px;
      text-align: left;
      color: white;
    }

    .form-group label {
      font-size: 20px;
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"],
    input[type="date"] {
      width: 100%;
      height: 42px;
      padding: 0 15px;
      padding-right: 45px;
      background-color: #444;
      border: none;
      border-radius: 8px;
      color: white;
      font-size: 16px;
      box-sizing: border-box;
    }

    input[type="date"]::-webkit-calendar-picker-indicator {
      opacity: 0; /* Esconde o ícone nativo */
      position: absolute;
      right: 0;
    }

    .senha-wrapper,
    .data-wrapper {
      position: relative;
      margin-bottom: 20px;
    }

    .eye, .calendar-icon {
      position: absolute;
      top: 50%;
      right: 12px;
      transform: translateY(-50%);
      font-size: 18px;
      color: #ccc;
      cursor: pointer;
      pointer-events: none;
    }
  </style>
</head>
<body>
  <div class="voltar">Voltar</div>

  <div class="perfil-container">
    <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="Avatar" />
    <h2>Editar Imagem</h2>

    <div class="form-group">
      <label for="usuario">Editar Usuario:</label>
      <input type="text" id="usuario" placeholder="Novo Usuário" />
    </div>

    <div class="form-group">
      <label>Editar Senha:</label>

      <div class="senha-wrapper">
        <input type="password" placeholder="Nova senha" />
        <span class="eye"><i class="fa-solid fa-eye"></i></span>
      </div>

      <div class="senha-wrapper">
        <input type="password" placeholder="Confirmar nova senha" />
        <span class="eye"><i class="fa-solid fa-eye"></i></span>
      </div>
    </div>

    <div class="form-group">
      <label for="data">Editar data de nascimento:</label>
      <div class="data-wrapper">
        <input type="date" id="data" />
        <span class="calendar-icon"><i class="fa-solid fa-calendar-days"></i></span>
      </div>
    </div>
  </div>
</body>
</html>
