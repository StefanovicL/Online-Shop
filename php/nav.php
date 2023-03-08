<!-- pocetak navbara -->
<nav class="navbar navbar-default">  <!-- affix kontrola za fiksiranje navigacije -->
<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><i class="fa-solid fa-home"></i>   Početna strana</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class=""><a href="onama.php">O nama <span class="sr-only">(current)</span></a></li>
            <li><a href="galerija.php">Galerija</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Proizvodi<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Proizvod 1</a></li>
                        <li><a href="#">Proizvod 2</a></li>
                        <li><a href="#">Mapa sajta</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Strana za štampu</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Polje za unos">
                </div>
                <button type="submit" class="btn btn-default"><i class="fa-solid fa-search"></i>
            </button>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="registracija.php">Registracija</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
        </ul>
    </div>
</div>
</nav>
<!-- kraj navbara -->