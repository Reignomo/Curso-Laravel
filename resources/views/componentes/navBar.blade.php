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
      <li @if($current =="clientes") class="nav-item active dropdown" @else class="nav-item dropdown" @endif>
        <a class="nav-link dropdown-toggle" id="linkClientes" role="button" data-toggle="dropdown" href="#">Clientes</a>
        <div class="dropdown-menu" aria-labelledby="linkClientes">
          <a class="dropdown-item" href="/clientes">Lista de clientes</a>
          <a class="dropdown-item" href="/cliente/novo">Cadastro</a>
        </div>
      </li>
      <li @if($current =="departamentos") class="nav-item active dropdown" @else class="nav-item dropdown" @endif>
      <a class="nav-link dropdown-toggle" id="linkClientes" role="button" data-toggle="dropdown" href="#">Departamentos</a>
        <div class="dropdown-menu" aria-labelledby="linkClientes">
          <a class="dropdown-item" href="/departamentos">Lista de departamentos</a>
          <a class="dropdown-item" href="/departamento/novo">Cadastro</a>
        </div>
      </li>
      <li @if($current =="about") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/about">about</a>
      </li>
    </ul>
    <span class="navbar-text">
      IBico solutions 
    </span>
  </div>
</nav>