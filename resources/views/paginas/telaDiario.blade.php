<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diário do Sono</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }
        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content {
            flex: 1;
        }
        footer {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container">
                <img style="width:60px; height:auto;" src="{{ URL::to('/assets/img/moon.png') }}">
                <link href="https://fonts.googleapis.com/css2?family=Sleep+Night&display=swap" rel="stylesheet">
                <a class="navbar-brand text-white" href="#" style="font-family: 'Sleep Night', cursive;">Sono de Qualidade</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-white" href="{{ route('menu') }}">Menu</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="{{ route('dicas') }}">Dicas para o seu sono</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="{{ route('diario') }}">Diário do sono</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="{{ route('relatorio') }}">Relatorio do sono</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="{{ route('faq') }}">FAQ</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="{{ route('login') }}">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-5 content">
            <h2 class="text-center fw-bold">Diário do Sono</h2>
            <p class="text-center">Preencha os campos a seguir conforme a sua noite de sono.</p>
            <form>
                <div class="mb-3">
                    <label class="form-label">Hora de dormir:</label>
                    <input type="time" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Hora de acordar:</label>
                    <input type="time" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Qualidade do sono (escala de 1 a 10):</label>
                    <input type="number" class="form-control" min="1" max="10">
                </div>
                <div class="mb-3">
                    <label class="form-label">Sintomas ou dificuldades:</label>
                    <textarea class="form-control" placeholder="Ex: acordou no meio da noite, sonhou muito, etc."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
        <footer class="text-center bg-primary text-white p-3 mt-auto">
            &copy; 2025 Sono de Qualidade. Todos os direitos reservados.
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
