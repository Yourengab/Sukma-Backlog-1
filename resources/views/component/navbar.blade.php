<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">Renify</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{$title == 'Home' ? 'active' : ''}}">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item {{$title == 'Songs' ? 'active' : ''}}">
                <a class="nav-link" href="/song">Songs</a>
            </li>
            <li class="nav-item {{$title == 'Detail' ? 'active' : ''}}">
                <a class="nav-link" href="/detail">Detail</a>
            </li>
        </ul>
    </div>
</nav>