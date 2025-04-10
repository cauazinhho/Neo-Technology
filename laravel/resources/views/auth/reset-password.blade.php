<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Neo Technology - Nova Senha</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
<style>
    * {
      font-family: 'Orbitron', sans-serif;
    }
    body {
      background-color: #0f1512;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      text-align: center;
      max-width: 400px;
      width: 100%;
    }
    .logo {
      width: 50px;
      height: 50px;
    }
    .logo-title {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      margin-bottom: 5px;
    }
    .logo-title h1 {
      font-size: 1.5rem;
      color: #00e5ff;
      margin: 0;
    }
    h2 {
      font-size: 1.2rem;
      color: #ff00ff;
      margin-bottom: 10px;
    }
    h3 {
      font-size: 1rem;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .input-group {
      background-color: #444;
      border-radius: 6px;
      padding: 10px;
      margin-bottom: 20px;
    }
    .form-control {
      background: transparent;
      border: none;
      color: #fff;
    }
    .form-control::placeholder {
      color: #ccc;
    }
    .input-group-text {
      background: transparent;
      border: none;
      color: #aaa;
      cursor: pointer;
    }
    .btn-reset {
      width: 100%;
      padding: 10px;
      background-color: #00d1ff;
      border: none;
      color: #000;
      font-weight: bold;
      border-radius: 20px;
      transition: 0.3s;
    }
    .btn-reset:hover {
      background-color: #00c4f4;
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
    <div class="top-text"><img src="img/lamen.png" alt="logo" class="logo"></div>
    <div class="container">
    <div class="logo-title">
    <h1>Neo Technology</h1>
    <img src="img/lamen.png" alt="Logo" class="logo" />
    </div>
    <h2>ネオテクノロジー</h2>
    <h3>Redefinir a senha.</h3>
    <form>
    <div class="input-group">
    <input type="password" class="form-control" id="senha" placeholder="Nova senha">
    <span class="input-group-text" onclick="toggleSenha('senha', this)">
    <i class="fa fa-eye"></i>
    </span>
    </div>
    <div class="input-group">
    <input type="password" class="form-control" id="confirmaSenha" placeholder="Confirmar nova senha">
    <span class="input-group-text" onclick="toggleSenha('confirmaSenha', this)">
    <i class="fa fa-eye"></i>
    </span>
    </div>
    <button type="submit" class="btn btn-reset mt-3">REDEFINIR</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleSenha(idInput, icone) {
        const input = document.getElementById(idInput);
        const icon = icone.querySelector('i');
        if (input.type === "password") {
            input.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            input.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
        }
    </script>
</body>
</html>