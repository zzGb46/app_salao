<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Perfil do Usuário</title>
  <link rel="stylesheet" href="styles.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body>

  <header class="top-header">
    <div class="menu-icon">&#9776;</div>
    <h1 class="header-title">Perfil do Usuário</h1>
    <div class="profile-img-container">
      <img src="img/banner-sobre.png" alt="Foto do Usuário" class="profile-img" />
    </div>
  </header>

  <div class="espaco-header"></div>

  <nav class="menu-lateral" id="menuLateral">
    <div class="overlay" id="overlay"></div>
    <ul>
      <li><a href="perfil.php"><span>👤</span> Perfil do usuário</a></li>
      <li><a href="editar-perfil.php"><span>🛠</span> Editar Perfil</a></li>
      <li><a href="depoimentos.php"><span>💬</span> Depoimentos</a></li>
      <li><a href="pagamentos.php"><span>💳</span> Pagamentos</a></li>
      <li><a href="contatos.php"><span>💻</span> Contatos</a></li>
      <li><a href="index.php"><span>⏻</span> Sair</a></li>
    </ul>
  </nav>

  <div class="perfil">

    <div class="info">

      <img src="img/banner-sobre.png" alt="Foto do Usuário" class="profile-picture" />
     
      <p> <a href="editar-perfil.html">
          Editar Perfil
        </a></p>
      <p><strong>Nome:</strong> Usuário Exemplo</p>
      <p><strong>E-mail:</strong> usuario@exemplo.com</p>
      <p><strong>Telefone:</strong> usuario@exemplo.com</p>
      <p><strong>Data de nascimento </strong> usuario@exemplo.com</p>


    </div>


  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const menuIcon = document.querySelector('.menu-icon');
      const menuLateral = document.getElementById('menuLateral');
      const overlay = document.getElementById('overlay');
      const menuItems = menuLateral.querySelectorAll('a'); // Agora estamos lidando com os links

      function abrirMenu() {
        menuLateral.style.left = '0px';
        overlay.classList.add('show');
      }

      function fecharMenu() {
        menuLateral.style.left = '-250px';
        overlay.classList.remove('show');
      }

      // Abrir ou fechar o menu ao clicar no ícone
      menuIcon.addEventListener('click', () => {
        const isOpen = menuLateral.style.left === '0px';
        isOpen ? fecharMenu() : abrirMenu();
      });

      // Fechar o menu ao clicar na overlay
      overlay.addEventListener('click', fecharMenu);

      // Fechar o menu quando um link for clicado
      menuItems.forEach(item => {
        item.addEventListener('click', fecharMenu);
      });
    });
  </script>

</body>

</html>