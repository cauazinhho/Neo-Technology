<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Neo Technology - Selecione o jogo</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #0e1511;
      font-family: 'Orbitron', sans-serif;
      color: white;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    a {
      text-decoration: none;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 30px 40px;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo img {
      width: 30px;
    }

    .logo span {
      font-size: 20px;
      color: #00f0ff;
    }

    .user {
      font-size: 14px;
      color: #d1d1d1;
    }

    .games-container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding-bottom: 40px;
    }

    .games-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 60px 80px;
      padding: 60px 0;
    }

    .game-card {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .game-card img {
      width: 140px;
      height: 180px;
      border-radius: 5px;
      margin-bottom: 15px;
      object-fit: cover;
      transition: 1s ease;
      
    }

    .game-card img:hover{
      scale: 1.05

    }

    .game-card button {
      background-color: #00cfff;
      border: none;
      padding: 10px 24px;
      border-radius: 10px;
      cursor: pointer;
      color: black;
      font-weight: bold;
    }

    .game-card button:hover {
      background-color: #007691;
      color: white;
    }

    

    footer {
      background-color: #00aaff;
      text-align: center;
      padding: 10px;
      font-size: 12px;
      color: black;
    }
  </style>
</head>

<body>

  <header>
    <a href="/telainicio"><div class="logo">
      <span>Neo Technology</span>
      <img src="img/lamen.png" alt="Logo" />
    </div></a>
    <div class="user">
      Olá, Usuário!
    </div>
  </header>

  <div class="games-container">
    <div class="games-grid">

      <div class="game-card">
        <img src="img/cyberpunk.png" alt="Cyberpunk" />
        <a href="benchmark/cyberpunk"><button>VAI RODAR?</button></a>
      </div>

      <div class="game-card">
        <img src="img/the-last-of-us.png" alt="The Last of Us" />
        <a href="benchmark/the-last-of-us"><button>VAI RODAR?</button></a>
      </div>

      <div class="game-card">
        <img src="img/resident-evil-4.png" alt="Resident Evil 4" />
        <a href="benchmark/resident-evil-4"><button>VAI RODAR?</button></a>
      </div>

      <div class="game-card">
        <img src="img/fortnite.jpg" alt="Fortnite" />
        <a href="benchmark/fortnite"><button>VAI RODAR?</button></a>
      </div>

      <div class="game-card">
        <img src="img/fc-25.jpg" alt="FC 25" />
        <a href="benchmark/fc-25"><button>VAI RODAR?</button></a>
      </div>
      <div class="game-card">
        <img src="img/elden-ring.jpg" alt="Elden Ring" />
        <a href="benchmark/elden-ring"><button>VAI RODAR?</button></a>
      </div>
      <div class="game-card">
        <img src="img/stalker-2.jpg" alt="Stalker 2" />
        <a href="benchmark/stalker-2"><button>VAI RODAR?</button></a>
      </div>
      <div class="game-card">
        <img src="img/Stray.png" alt="Stray" />
        <a href="benchmark/stray"><button>VAI RODAR?</button></a>
      </div>
      <div class="game-card">
        <img src="img/assassins-creed-shadows.jpg" alt="Assassin's Creed Shadows" />
        <a href="benchmark/assassins-creed-shadows"><button>VAI RODAR?</button></a>
      </div>
    </div>
  </div>

  <footer>
    ⓒ TODOS OS DIREITOS RESERVADOS
  </footer>

</body>

</html>