<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas Frequentes</title>
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
        <div class="container mt-4 content">
            <h2 class="text-center">Perguntas Frequentes</h2><br><br><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-3">
                        <h1>Por que cuidar do sono é importante?</h1><br>
                        <p>O sono é essencial para manter o corpo e a mente saudáveis. 
                        Quando não dormimos o suficiente, a concentração e a memória são afetadas, tornando tarefas diárias mais difíceis.
                         Além disso, a privação do sono pode desregular hormônios responsáveis pelo apetite, favorecendo o ganho de peso e aumentando o risco de diabetes.
                        Pesquisas também indicam que noites mal dormidas podem impactar a densidade óssea, tornando os ossos mais frágeis ao longo do tempo.
                        Outro problema grave é a relação entre sono ruim e doenças cardiovasculares.
                        A apneia do sono e a falta de descanso adequado podem elevar a pressão arterial e aumentar o risco de infartos e derrames.
                        Para evitar esses danos, é fundamental tratar distúrbios como insônia e apneia, além de criar uma rotina de sono regular, garantindo um descanso de qualidade e mais saúde no dia a dia.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <h1>O colchão e o travesseiro influenciam no sono?</h1><br>
                        <p>O colchão e o travesseiro influenciam diretamente na qualidade do sono, pois afetam o conforto e o suporte da coluna. 
                        Um colchão muito mole ou muito duro pode causar dores nas costas e no pescoço, enquanto um travesseiro inadequado pode levar a tensões musculares. 
                        O ideal é escolher um colchão que ofereça suporte adequado para sua posição de dormir e um travesseiro que mantenha a cabeça alinhada com a coluna. 
                        Além disso, a vida útil desses itens deve ser considerada:<br><br>
                        Colchões devem ser trocados a cada 7 a 10 anos e travesseiros a cada 1 a 2 anos.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <h1>Quais hábitos podem influenciar negativamente no seu sono?</h1><br>
                        <p><strong>1.</strong> Malhar na hora errada: Evite fazer exercícios antes de dormir, pois eles podem deixar você mais agitado e dificultar o sono.</p>
                        <p><strong>2.</strong> Luzes ao dormir: Evite celular, TV ou qualquer luz no ambiente. O ideal é um quarto escuro para melhorar a qualidade do sono.</p>
                        <p><strong>3.</strong> Comer e beber em excesso à noite: Evite alimentos pesados e bebidas em excesso, pois podem atrapalhar a digestão e interromper seu sono.</p>
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-center bg-primary text-white p-3 mt-4">&copy; 2025 Sono de Qualidade. Todos os direitos reservados.</footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
