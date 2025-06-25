<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Editar Perfil</title>
  <link rel="stylesheet" href="styles.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body>

  <div class="editar-perfil">


    <header class="top-header">
      <div class="menu-icon">&#9776;</div>
      <h1 class="header-title">Editar Perfil</h1>
      <div class="profile-img-container">
        <img src="img/banner-sobre.png" alt="Foto do Usuário" class="profile-img" />
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



    <div class="card-edicao">
      <img src="img/banner-sobre.png" alt="Foto do Usuário" class="profile-picture" />
      <h2>Liliane Ferreira</h2>

      <div class="acoes">
        <a href="#"><span>📤</span> Enviar Foto</a>
      </div>

      <form>
        <input type="text" placeholder="Nome:" />
        <input type="text" placeholder="CPF/CNPJ:" />
        <input type="text" placeholder="Tipo:" />
        <input type="date" placeholder="Nascimento:" />
        <input type="tel" placeholder="Telefone:" />
        <input type="email" placeholder="E-mail:" />
        <input type="text" placeholder="Endereço:" />
        <input type="text" placeholder="Bairro:" />
        <input type="text" placeholder="Cidade:" />
        <input type="text" placeholder="Estado:" />

        <button type="submit" class="btn-marrom">Salvar Alterações</button>
      </form>
    </div>

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
      menuItems.forEach(item => item.addEventListener('click', fecharMenu));
    });
  </script>
  

</body>

</html>