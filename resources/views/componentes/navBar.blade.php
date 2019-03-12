<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Sistema de gerenciamento</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li @if($current =="home") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/">Home</a>
      </li>
      <li @if($current =="clientes") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/clientes">Clientes</a>
      </li>
      <li @if($current =="departamentos") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/departamentos">Departamentos</a>
      </li>
    </ul>
    <span class="navbar-text">
      IBico solutions 
    </span>
  </div>
</nav>