<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Depoimentos</title>
  <link rel="stylesheet" href="styles.css" />
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>

  <div class="depoimentos">

    <header class="top-header">
      <div class="menu-icon">&#9776;</div>
      <h1 class="header-title">Depoimentos</h1>
      <div class="profile-img-container">
        <img src="img/banner-sobre.png" alt="Foto do Usuário" class="profile-img" />
      </div>
      
      <div class="tabs">
        <div class="tab active" data-tab="enviar"><i class="fas fa-pen"></i> Enviar Depoimento</div>
        <div class="tab" data-tab="ver"><i class="fas fa-comments"></i> Ver Depoimentos</div>
      </div>
    </header>



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


    <div class="conteudo">
      <div class="enviar-section ativo" id="enviar">
        <div class="form-depoimento">
          <h2>Escreva seu depoimento</h2>
          <textarea placeholder="Digite aqui seu depoimento..."></textarea>
          <button>Enviar</button>
        </div>
      </div>

      <div class="ver-section" id="ver">
        <div class="lista-depoimentos">
          <div class="card-depoimento">
            <p>"Excelente atendimento e suporte. Recomendo!"</p>
            <span>- João Silva</span>
          </div>
          <div class="card-depoimento">
            <p>"A plataforma é intuitiva e muito eficiente."</p>
            <span>- Maria Santos</span>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script>
    const tabs = document.querySelectorAll(".tab");
    const sections = document.querySelectorAll(".conteudo > div");

    tabs.forEach(tab => {
      tab.addEventListener("click", () => {
        tabs.forEach(t => t.classList.remove("active"));
        sections.forEach(s => s.classList.remove("ativo"));

        tab.classList.add("active");
        const target = tab.getAttribute("data-tab");
        document.getElementById(target).classList.add("ativo");
      });
    });
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
