<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório do Sono</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container">
        <img style="width:60px; height:auto;" src="assets/img/moon.png">
        <link href="https://fonts.googleapis.com/css2?family=Sleep+Night&display=swap" rel="stylesheet">
        <a class="navbar-brand text-white" href="#" style="font-family: 'Sleep Night', cursive;">Sono de Qualidade</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link text-white" href="#">Dicas de sono</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Diário do sono</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Registrar sono</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">FAQ</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <h2 class="text-center">Relatório do Sono</h2><br><br><br>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Data</th>
                <th>Hora de Dormir</th>
                <th>Hora de Acordar</th>
                <th>Qualidade do Sono (1-10)</th>
                <th>Sintomas ou Dificuldades</th>
                <th>Sugestão para Melhorar</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>01/04/2025</td>
                <td>22:30</td>
                <td>06:30</td>
                <td>7</td>
                <td>Acordou no meio da noite</td>
                <td>Mantenha o quarto escuro e silencioso. Evite consumo de cafeína à noite.</td>
                <td>
                    <a href="#" class="btn btn-warning">Editar</a>
                    <button class="btn btn-danger">Excluir</button>
                </td>
            </tr>
            <tr>
                <td>02/04/2025</td>
                <td>23:00</td>
                <td>06:00</td>
                <td>5</td>
                <td>Dificuldade para pegar no sono</td>
                <td>Reduza a exposição a telas antes de dormir. Estabeleça uma rotina relaxante.</td>
                <td>
                    <a href="#" class="btn btn-warning">Editar</a>
                    <button class="btn btn-danger">Excluir</button>
                </td>
            </tr>
            <tr>
                <td>03/04/2025</td>
                <td>00:00</td>
                <td>06:30</td>
                <td>4</td>
                <td>Sonhou muito e acordou cansado</td>
                <td>Evite refeições pesadas antes de dormir. Experimente técnicas de relaxamento, como meditação.</td>
                <td>
                    <a href="#" class="btn btn-warning">Editar</a>
                    <button class="btn btn-danger">Excluir</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<footer class="text-center bg-primary text-white p-3 mt-4">&copy; 2025 Sono de Qualidade. Todos os direitos reservados.</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
