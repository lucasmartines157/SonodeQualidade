<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sono de Qualidade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
        <div class="row">
            <div class="col-md-3">

                <img style="width:1350px; height:auto;" src="{{ URL::to('/assets/img/menu.jpeg') }}">
                            
            </div>
            
            <p><strong> O sono é essencial para a saúde física e mental, ajudando na recuperação do corpo, processamento das memórias e equilíbrio emocional.
                     Durante o sono, o organismo realiza processos vitais, como a regeneração celular e o fortalecimento do sistema imunológico. 
                     A falta de sono adequado pode causar cansaço,dificuldade de concentração e aumentar o risco de doenças.
                      Manter hábitos saudáveis de sono é crucial para a qualidade de vida e bem-estar. 
            </p></strong>

    <footer class="text-center bg-primary text-white p-3 mt-4">
        &copy; 2025 Sono de Qualidade. Todos os direitos reservados.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>