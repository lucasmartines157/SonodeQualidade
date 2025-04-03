<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dicas para o Sono</title>
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
            <h2 class="text-center">Dicas para o seu sono</h2><br><br><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-3">
                        <h1>Mantenha uma rotina</h1> <br>
                        Manter uma rotina também influencia outros aspectos da saúde, como a digestão, o metabolismo e a regulação hormonal. 
                        Ter horários fixos para refeições, exercícios e momentos de descanso ajuda o corpo a se ajustar e funcionar de forma mais eficiente.  
                        Além disso, uma rotina previsível reduz o estresse e a ansiedade, pois o cérebro se sente mais seguro em um ambiente organizado. 
                        Pessoas que seguem horários regulares tendem a ter mais produtividade e bem-estar ao longo do dia.  
                        Criar uma rotina não significa rigidez extrema, mas sim estabelecer hábitos consistentes que facilitem o equilíbrio entre trabalho, lazer e descanso.
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <h1>Evite telas antes de dormir</h1><br>
                        Além de afetar a produção de melatonina, o uso de telas antes de dormir pode aumentar o estado de alerta do cérebro, dificultando o relaxamento necessário para uma boa noite de sono.
                        Redes sociais, jogos e vídeos estimulantes podem elevar os níveis de dopamina e cortisol, deixando a mente agitada.
                        Para minimizar os impactos, é recomendável reduzir o brilho das telas à noite, ativar o modo noturno ou filtro de luz azul e estabelecer uma rotina relaxante antes de dormir.
                        Atividades como alongamento, ouvir música tranquila ou escrever um diário podem ajudar a desacelerar o cérebro e melhorar a qualidade do sono.
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <h1>Crie um ambiente confortável</h1><br> 
                        Além desses fatores, a organização e a escolha dos móveis também influenciam no conforto do ambiente.
                        Um colchão e travesseiros adequados ao seu tipo de sono ajudam a evitar dores e desconfortos.
                        Aromas suaves, como lavanda, podem contribuir para o relaxamento, assim como uma iluminação indireta e quente, que prepara o corpo para o descanso.
                        Criar uma rotina de relaxamento no quarto, como ler um livro ou praticar respiração profunda, também pode reforçar a associação do ambiente ao sono de qualidade.
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-center bg-primary text-white p-3 mt-4"> &copy; 2025 Sono de Qualidade. Todos os direitos reservados.</footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>