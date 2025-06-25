<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contato</title>
  <link rel="stylesheet" href="styles.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body>
  
  
  <header class="top-header">
    <div class="menu-icon">&#9776;</div>
    <h1 class="header-title">Contatos</h1>
    <div class="profile-img-container">
      <img src="img/banner-sobre.png" alt="Foto de perfil" class="profile-img" />
    </div>
  </header>
  <div class="espaco-header"></div>

  <nav class="menu-lateral" id="menuLateral">
    <div class="overlay" id="overlay"></div>
    <ul>
      <li><a href="pefil.php"><span>👤</span> Perfil do usuário</a></li>
      <li><a href="editar-perfil.php"><span>🛠</span> Editar Perfil</a></li>
      <li><a href="depoimentos.php"><span>💬</span> Depoimentos</a></li>
      <li><a href="pagamentos.php"><span>💳</span> Pagamentos</a></li>
      <li><a href="contatos.php"><span>💻</span> Contatos</a></li>
      <li><a href="index.php"><span>⏻</span> Sair</a></li>
    </ul>
  </nav>
  
  <div class="contato">
    <div class="espaco-header"></div> <!-- para empurrar o conteúdo abaixo do header fixo -->

    <div class="card-contato">
      <img src="img/banner-sobre.png" alt="Liliane Ferreira" class="foto-professor">
      <div class="info-contato">
        <p><strong>Professor:</strong> Liliane Ferreira</p>
        <p><strong>Especialidade:</strong> Esteticista</p>
        <p><strong>Tel:</strong> 11 9555 5555</p>
        <p><strong>E-mail:</strong> liliane@live.com</p>
        <p><strong>Cursos:</strong> Extensão de cílios + bônus</p>
      </div>
    </div>

    <!-- Repita outros cards conforme necessário -->
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const menuIcon = document.querySelector('.menu-icon');
      const menuLateral = document.getElementById('menuLateral');
      const overlay = document.getElementById('overlay');
      const menuItems = menuLateral.querySelectorAll('li');
  
      function abrirMenu() {
        menuLateral.style.left = '0px';
        overlay.classList.add('show');
      }
  
      function fecharMenu() {
        menuLateral.style.left = '-250px';
        overlay.classList.remove('show');
      }
  
      menuIcon.addEventListener('click', () => {
        const isOpen = menuLateral.style.left === '0px';
        isOpen ? fecharMenu() : abrirMenu();
      });
  
      overlay.addEventListener('click', fecharMenu);
  
      menuItems.forEach(item => {
        item.addEventListener('click', fecharMenu);
      });
    });
  </script>
  
</body>

</html>
