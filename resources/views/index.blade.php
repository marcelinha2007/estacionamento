<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pit Stop</title>
    @vite('resources/css/styles.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Cabeçalho da página -->
    <header>
        <nav>
            <div class="logo">
                <img src="{{ asset('storage/img/logo.png') }}" alt="Logo">
            </div>
            <ul class="nav-links">
                <li><a href="#lava-jato">LavaJato</a></li>
                <li><a href="#estacionamento">Estacionamento</a></li>
                <li><a href="#listagem">Listagem</a></li>
            </ul>
        </nav>
    </header>
   
    <main>
        <section id="banner">
            <img src="{{ asset('storage/img/Aesthetic Twitter Header.jpeg') }}" alt="Banner" class="banner-image">
        </section>
        
        <form action="{{ route('formularios.store') }}" method="POST">
            @csrf
            
            <section id="busca">
                <div class="busca-wrapper">
                    <div class="busca-item">
                        <select name="estacionamento" required>
                            <option value="" disabled selected>Escolha um estacionamento</option>
                            <option value="Estacionamento">Estacionamento</option>
                            <option value="Lava-jato">Lava-jato</option>
                        </select>
                    </div>
                    <div class="busca-item">
                        <input type="text" name="placa" placeholder="Placa" required>
                    </div>
                </div>
            </section>

            <section id="detalhes">
                <div class="entrada-wrapper">
                    <div class="entrada">
                        <input type="date" name="data" required>
                    </div>
                    <div class="entrada">
                        <input type="time" name="hora" required>
                    </div>
                    <div class="descricao">
                        <i class="fas fa-car"></i>
                        <input type="text" name="descricao" placeholder="Descrição" required>
                    </div>
                </div>
            </section>
           
            <button type="submit" id="confirmar-btn">Confirmar</button>
        </form>
    </main>
</body>
</html>
