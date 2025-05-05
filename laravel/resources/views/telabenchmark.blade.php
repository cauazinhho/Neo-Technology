<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Benchmark - {{ ucfirst($game) }}</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Orbitron', sans-serif;
    }

    html,
    body {
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

    a {
      text-decoration: none;
    }

    main {
      flex: 1;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 40px;
      margin-bottom: 25px;
    }

    .logo-title {
      display: flex;
      align-items: center;
      gap: 10px;

    }

    .logo-title h1 {
      font-weight: 300;
      font-size: 20px;
      color: #00f0ff;
      text-decoration: none;

    }

    .logo-title img {
      width: 30px;
    }

    .login {
      font-weight: 100;
      font-size: 10px;
      color:rgb(171, 173, 173);
      text-decoration: none;

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

    button {
      margin-top: 10px;
      padding: 8px 16px;
      border: none;
      border-radius: 4px;
      background-color: #00e5ff;
      color: #000;
      font-weight: bold;
      cursor: pointer;
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

    .cyber {
      height: 365px;
      width: 300px;
      margin-bottom: 30px;
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
    <a href="/telamain">
      <div class="logo-title">
        <h1>Neo Technology</h1>
        <img src="{{ asset('img/lamen.png') }}" alt="Logo">
      </div>
    </a>

    <a href="/telaperfil">
      <div class="login">
        <h1>Perfil</h1>
      </div>
    </a>
  </header>

  <main>


    <img class="cyber" src="{{ asset($image) }}" alt="{{ ucfirst(str_replace('-', ' ', $game)) }}">




    <div class="requisitos">
      <div>
        <h2 class="minimos">requisitos mínimos</h2>
        <p>Placa de vídeo: {{ $requisitos['min']['gpu'] }}</p>
        <p>Processador: {{ $requisitos['min']['cpu'] }}</p>
        <p>Memória: {{ $requisitos['min']['ram'] }}</p>
        <p>Disco: {{ $requisitos['min']['disk'] }}</p>
        <p>Sistema: {{ $requisitos['min']['os'] }}</p>
        <p>DirectX: {{ $requisitos['min']['dx'] }}</p>
      </div>
      <div>
        <h2 class="recomendados">requisitos recomendados</h2>
        <p>Placa de vídeo: {{ $requisitos['rec']['gpu'] }}</p>
        <p>Processador: {{ $requisitos['rec']['cpu'] }}</p>
        <p>Memória: {{ $requisitos['rec']['ram'] }}</p>
        <p>Disco: {{ $requisitos['rec']['disk'] }}</p>
        <p>Sistema: {{ $requisitos['rec']['os'] }}</p>
        <p>DirectX: {{ $requisitos['rec']['dx'] }}</p>
      </div>
    </div>


    <form class="formulario" method="POST" action="{{ route('telabenchmark.calcular', ['game' => $game]) }}">
      @csrf
      <h3>Sistema do seu interesse</h3>

      <select name="cpu" required>
        <option value="">Selecione processador</option>
        @foreach($cpus as $cpuOption)
      <option value="{{ $cpuOption }}" {{ isset($cpu) && $cpu == $cpuOption ? 'selected' : '' }}>
        {{ $cpuOption }}
      </option>
    @endforeach
      </select>

      <select name="gpu" required>
        <option value="">Selecione placa de vídeo</option>
        @foreach($gpus as $gpuOption)
      <option value="{{ $gpuOption }}" {{ isset($gpu) && $gpu == $gpuOption ? 'selected' : '' }}>
        {{ $gpuOption }}
      </option>
    @endforeach
      </select>

      <button type="submit">Calcular FPS</button>
    </form>

    @if(isset($fps))
    <div class="fps-results">
      <div>
      <p>gráfico baixo</p>
      <strong>{{ $fps['low'] }} FPS</strong>
      </div>
      <div>
      <p>gráfico médio</p>
      <strong>{{ $fps['medium'] }} FPS</strong>
      </div>
      <div>
      <p>gráfico alto</p>
      <strong>{{ $fps['high'] }} FPS</strong>
      </div>
      <div>
      <p>gráfico ultra</p>
      <strong>{{ $fps['ultra'] }} FPS</strong>
      </div>
    </div>
  @endif
    @if($upgradeCpu && $upgradeGpu)
    <div class="upgrade">
      recomendamos um upgrade: <strong>{{ $upgradeCpu }} + {{ $upgradeGpu }}</strong>
    </div>
  @endif

    <div class="terabyte">
      <p>compre aqui:</p>
      <a href="https://www.terabyteshop.com.br" target="_blank">
        <img src="{{ asset('img/terabyte.png') }}" alt="Loja Terabyte" />
      </a>
    </div>
  </main>

  <footer>
    &copy; TODOS OS DIREITOS RESERVADOS
  </footer>
</body>

</html>