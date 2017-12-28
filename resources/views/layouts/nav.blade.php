<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Perguntas
                        <span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="/topicos">Responder</a></li>
                        <li><a href="/perguntas"> Visualizar</a></li>
                        <li><a href="/perguntas/criar">Criar</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Competidores
                        <span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="/competidores"> Visualizar</a></li>
                        <li><a href="/competidores/cadastro">Criar</a></li>

                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Micos
                        <span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="/micos"> Pagar</a></li>
                        <li><a href="/micos/todos"> Visualizar</a></li>
                        <li><a href="/micos/criar">Criar</a></li>

                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>