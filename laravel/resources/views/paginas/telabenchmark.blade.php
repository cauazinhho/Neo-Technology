<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Benchmark - Cyberpunk</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Orbitron', sans-serif;
    }

    html, body {
      height: 100%;
    }

    body {
      background-color: #0f1512;
      color: #fff;
      text-align: center;
      padding: 20px;
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 30px;
    }

    .logo-title {
      display: flex;
      align-items: center;
    }

    .logo-title h1 {
      color: #00e5ff;
      margin-right: 10px;
    }

    .logo-title img {
      width: 40px;
    }

    .login {
      color: #aaa;
      font-size: 0.9rem;
    }

    .game-cover {
      width: 180px;
      margin: 20px auto;
      display: block;
      border-radius: 5px;
    }

    .requisitos {
      display: flex;
      justify-content: center;
      gap: 80px;
      margin-bottom: 40px;
      flex-wrap: wrap;
    }

    .requisitos div {
      max-width: 300px;
    }

    .requisitos h2 {
      font-size: 1.1rem;
      margin-bottom: 10px;
    }

    .minimos {
      color: #00e5ff;
    }

    .recomendados {
      color: #ff00ff;
    }

    .formulario {
      background-color: #1a1f1d;
      border: 1px solid #444;
      border-radius: 6px;
      padding: 20px;
      margin: 20px auto;
      max-width: 700px;
    }

    .formulario h3 {
      margin-bottom: 15px;
    }

    select {
      padding: 5px;
      border-radius: 4px;
      border: none;
      margin: 5px;
      font-family: 'Orbitron', sans-serif;
    }

    .fps-results {
      display: flex;
      justify-content: center;
      gap: 40px;
      margin: 30px 0;
      flex-wrap: wrap;
    }

    .fps-results div {
      text-align: center;
    }

    .upgrade {
      margin-bottom: 20px;
    }

    .upgrade strong {
      color: #00e5ff;
    }

    .terabyte {
      margin-bottom: 40px;
    }

    footer {
      background-color: #00bfff;
      padding: 10px;
      font-size: 0.8rem;
      color: #000;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo-title">
      <h1>Neo Technology</h1>
      <img src="img/lamen.png" alt="Logo">
    </div>
    <div class="login">Olá, Leon</div>
  </header>

  <main>
    <img src="img/cyber.png" alt="Cyberpunk 2077" class="game-cover">

    <div class="requisitos">
      <div>
        <h2 class="minimos">requisitos mínimos</h2>
        <p>Placa de vídeo: GTX 1060 6GB ou Radeon RX 580 8GB</p>
        <p>Processador: i5-3570 ou Ryzen 3 1200</p>
        <p>Memória: 8 GB</p>
        <p>Disco: 70 GB SSD</p>
        <p>Sistema: Windows 10 64-bit</p>
        <p>DirectX: 12</p>
      </div>
      <div>
        <h2 class="recomendados">requisitos recomendados</h2>
        <p>Placa de vídeo: RTX 2060 ou RX 5700 XT</p>
        <p>Processador: i7-4790 ou Ryzen 5 3600</p>
        <p>Memória: 12 GB</p>
        <p>Disco: 70 GB SSD</p>
        <p>Sistema: Windows 10 64-bit</p>
        <p>DirectX: 12</p>
      </div>
    </div>

    <div class="formulario">
      <h3>Sistema do seu interesse</h3>
      <select>
        <option>Selecione processador</option>
        <option>Ryzen 5 5500</option>
        <option>Intel i5-11400F</option>
        <option>Ryzen 7 5800X</option>
      </select>
      <select>
        <option>Selecione placa de vídeo</option>
        <option>GTX 1650</option>
        <option>RTX 3060</option>
        <option>RTX 4070</option>
      </select>
      <select>
        <option>RAM</option>
        <option>8 GB</option>
        <option>16 GB</option>
        <option>32 GB</option>
      </select>
    </div>

    <div class="fps-results">
      <div>
        <p>gráfico baixo</p>
        <strong>104 FPS</strong>
      </div>
      <div>
        <p>gráfico médio</p>
        <strong>87 FPS</strong>
      </div>
      <div>
        <p>gráfico alto</p>
        <strong>68 FPS</strong>
      </div>
      <div>
        <p>gráfico ultra</p>
        <strong>57 FPS</strong>
      </div>
    </div>

    <div class="upgrade">
      recomendamos um upgrade: <strong>RYZEN 5 5500 - RTX 4070</strong>
    </div>

    <div class="terabyte">
      <p>compre aqui:</p>
      <a href="https://www.terabyteshop.com.br" target="_blank">
        <img src="img/terabyte.png" alt="Cyberpunk"/>
      </a>
    </div>
  </main>

  <footer>
    &copy; TODOS OS DIREITOS RESERVADOS
  </footer>
</body>
</html>
