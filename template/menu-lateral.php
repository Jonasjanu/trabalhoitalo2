<?php

echo "
<!-- Sidebar -->
<ul class='navbar-nav bg-gradient-success sidebar sidebar-dark accordion' id='accordionSidebar'>

<!-- Sidebar - Brand -->

<a class='sidebar-brand d-flex align-items-center justify-content-center' href='index.php'>
  <div class='sidebar-brand-icon rotate-n-15'>
    <img src='img/ifceico.png' />
  </div>
  <div class='sidebar-brand-text mx-3'>Sistema de Monitoria</div>
</a>

<!-- Divider -->
<hr class='sidebar-divider my-0'>

<!-- Nav Item - Dashboard -->

<li class='nav-item'>
<a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapseTwo' aria-expanded='true' aria-controls='collapseTwo'>
  <i class='fas fa-fw fa-cog'></i>
  <span>Configurações</span>
</a>
<div id='collapseTwo' class='collapse' aria-labelledby='headingTwo' data-parent='#accordionSidebar'>
  <div class='bg-white py-2 collapse-inner rounded'>
    <h6 class='collapse-header'>Papeis:</h6>
    <a class='collapse-item' href='login.php'>Administrador</a>
    <a class='collapse-item' href='login.php'>Professor</a>
  </div>
</div>
</li>

<!-- Divider -->
<hr class='sidebar-divider'>

<!-- Heading -->
<div class='sidebar-heading'>
  Aluno
</div>

<li class='nav-item active'>
  <a class='nav-link' href='inscricao.php'>
    <i class='fas fa-fw fa-tachometer-alt'></i>
    <span>Inscrição</span></a>
</li>

<!-- Nav Item - Tables -->
      <li class='nav-item'>
        <a class='nav-link' href='resultado.php'>
          <i class='fas fa-fw fa-table'></i>
          <span>Resultados</span></a>
      </li>

      <!-- Nav Item - Validar -->
      <li class='nav-item'>
        <a class='nav-link' href='validar_inscricao.php'>
          <i class='fas fa-fw fa-chart-area'></i>
          <span>Validar Inscrição</span></a>
      </li>

      <!-- Divider -->
      <hr class='sidebar-divider'>
      
      <!-- Heading -->
      <div class='sidebar-heading'>
        Administrador
      </div>
      
      <!-- Nav Item - Validar -->
      <li class='nav-item'>
        <a class='nav-link' href='painel.php'>
          <i class='fas fa-fw fa-chart-area'></i>
          <span>Painel</span></a>
      </li>

      <li class='nav-item'>
        <a class='nav-link' href='disciplina.php'>
          <i class='fas fa-fw fa-tachometer-alt'></i>
          <span>Cadastrar Disciplina</span></a>
      </li>
      
      <!-- Nav Item - Tables -->
            <li class='nav-item'>
              <a class='nav-link' href='professor.php'>
                <i class='fas fa-fw fa-table'></i>
                <span>Cadastrar Professor</span></a>
            </li>
      
           

      <!-- Divider -->
      <hr class='sidebar-divider'>
      
      <!-- Heading -->
      <div class='sidebar-heading'>
        Professor
      </div>
      
      <li class='nav-item'>
        <a class='nav-link' href='avaliar.php'>
          <i class='fas fa-fw fa-tachometer-alt'></i>
          <span>Avaliar Inscrição</span></a>
      </li>
  
      
      <!-- Divider -->
      <hr class='sidebar-divider'>

      <!-- Heading -->
      <div class='sidebar-heading'>
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class='nav-item'>
        <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapsePages' aria-expanded='true' aria-controls='collapsePages'>
          <i class='fas fa-fw fa-folder'></i>
          <span>Páginas</span>
        </a>
        <div id='collapsePages' class='collapse' aria-labelledby='headingPages' data-parent='#accordionSidebar'>
          <div class='bg-white py-2 collapse-inner rounded'>
            <h6 class='collapse-header'>Páginas de Login:</h6>
            <a class='collapse-item' href='login.php'>Login</a>
            <a class='collapse-item' href='register.php'>Registro</a>
            <a class='collapse-item' href='forgot-password.php'>Forgot Password</a>
            <div class='collapse-divider'></div>
            <h6 class='collapse-header'>Outras Páginas:</h6>
            <a class='collapse-item' href='404.php'>404 Page</a>
            <a class='collapse-item' href='blank.php'>Blank Page</a>
          </div>
        </div>
      </li>


    <!-- Nav Item - Utilities Collapse Menu -->
    <li class='nav-item'>
      <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapseUtilities' aria-expanded='true' aria-controls='collapseUtilities'>
        <i class='fas fa-fw fa-wrench'></i>
        <span>Utilidades</span>
      </a>
      <div id='collapseUtilities' class='collapse' aria-labelledby='headingUtilities' data-parent='#accordionSidebar'>
        <div class='bg-white py-2 collapse-inner rounded'>
          <h6 class='collapse-header'>Algumas Utilidades:</h6>
          <a class='collapse-item' href='zutilities-color.php'>Cores</a>
          <a class='collapse-item' href='zutilities-border.php'>Bordas</a>
          <a class='collapse-item' href='zutilities-animation.php'>Animações</a>
          <a class='collapse-item' href='zutilities-other.php'>Outros</a>
          <a class='collapse-item' href='zbuttons.php'>Butões</a>
          <a class='collapse-item' href='zcards.php'>Cartões</a>
          <a class='collapse-item' href='zcharts.php'>Gráficos</a>
          <a class='collapse-item' href='ztables.php'>Tabelas</a>
        </div>
      </div>
    </li>

      

      <!-- Divider -->
      <hr class='sidebar-divider d-none d-md-block'>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class='text-center d-none d-md-inline'>
        <button class='rounded-circle border-0' id='sidebarToggle'></button>
      </div>

    </ul>
    <!-- End of Sidebar -->


";