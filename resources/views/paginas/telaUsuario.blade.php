<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sono de Qualidade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sleep+Night&display=swap" rel="stylesheet">
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
                <img style="width:60px; height:auto;" src="{{ URL::to('/assets/img/moon.png') }}" alt="Logo">
                <a class="navbar-brand text-white" href="#" style="font-family: 'Sleep Night', cursive;">Sono de Qualidade</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-white" href="{{ route('menu') }}">Menu</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="{{ route('dicas') }}">Dicas para o seu sono</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="{{ route('diario') }}">Diário do sono</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="{{ route('relatorio') }}">Relatório do sono</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="{{ route('faq') }}">FAQ</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="{{ route('editar') }}">Editar</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-5 content">
            <h2 class="text-center">Cadastro de Usuário</h2>
            <p class="text-center">Preencha os campos abaixo para se registrar.</p>

            <form action="{{ route('registrar') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nome:</label>
                    <input type="text" name="nome" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Idade:</label>
                    <input type="number" name="idade" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Histórico de problemas com o sono:</label>
                    <textarea name="historico_sono" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Qualidade do sono:</label>
                    <textarea name="qualidade_sono" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </form>
        </div>

        <footer class="text-center bg-primary text-white p-3 mt-auto">
            &copy; 2025 Sono de Qualidade. Todos os direitos reservados.
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>