<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pagamentos</title>
  <link rel="stylesheet" href="styles.css" />
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>



  <div class="pagamentos">

    <header class="top-header">
      <div class="menu-icon">&#9776;</div>
      <h1 class="header-title">Pagamentos</h1>
      <div class="profile-img-container">
        <img src="img/banner-sobre.png" alt="Foto do Usuário" class="profile-img" />
      </div>

      <div class="tabs">
        <div class="tab active" data-tab="cursos"><i class="fas fa-book"></i> Cursos</div>
        <div class="tab" data-tab="cartao"><i class="fas fa-credit-card"></i>  Pagamento </div>
        <div class="tab" data-tab="recibos"><i class="fas fa-receipt"></i> Recibos </div>
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

   

    <div class="conteudo">

      <div class="cursos-section ativo" id="cursos">
        <div class="curso-card">
          <img src="img/curso-exemplo.jpg" alt="Imagem do Curso" class="curso-img" />
          <div class="curso-info">
            <h2 class="curso-nome">Curso de Desenvolvimento Web</h2>
            <p class="curso-professor">Professor: João da Silva</p>
          </div>
        </div>
        <button id="botao-comprar" class="botao-comprar">Comprar</button>

      </div>
      
      <div class="cartao-section ativo" id="cartao">
        <div class="adicionar-metodo">
          <h2>Adicionar Novo Cartão</h2>

          <div class="opcoes-pagamento">
            <div class="opcao ativo">
              <span class="label">Crédito</span>
              <i class="fas fa-check"></i>
            </div>
            <div class="opcao">
              <span class="label">Débito</span>
            </div>
          </div>

          <input type="text" placeholder="Nome no cartão" />
          <input type="text" placeholder="Número do cartão" />

          <div class="linha">
            <input type="text" placeholder="MM/AA" />
            <input type="text" placeholder="CVV" />
          </div>

          <button>Salvar</button>
        </div>

        <div class="metodo-salvo">
          <h3>Cartão salvo</h3>
          <div class="cartao">
            <span class="bandeira">Mastercard</span>
            <span class="editar"><i class="fas fa-pencil-alt"></i></span>
          </div>
        </div>
      </div>

      <div class="recibos-pagamentos" id="recibos">
        <table>
          <thead>
            <tr>
              <th>Nome</th>
              <th>Data</th>
              <th>Preço</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>João Silva</td>
              <td>10/04/2025</td>
              <td>R$ 150,00</td>
            </tr>
            <tr>
              <td>Maria Santos</td>
              <td>08/04/2025</td>
              <td>R$ 200,00</td>
            </tr>
            <tr>
              <td>Carlos Lima</td>
              <td>05/04/2025</td>
              <td>R$ 120,00</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

 
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const tabs = document.querySelectorAll(".tab");
      const sections = document.querySelectorAll(".conteudo > div");
      const botaoComprar = document.getElementById("botao-comprar");
  
      // Garante que no carregamento só a aba de cursos esteja ativa
      tabs.forEach(t => t.classList.remove("active"));
      sections.forEach(s => s.classList.remove("ativo"));
      
      const tabCursos = document.querySelector('.tab[data-tab="cursos"]');
      const sectionCursos = document.getElementById("cursos");
      if (tabCursos && sectionCursos) {
        tabCursos.classList.add("active");
        sectionCursos.classList.add("ativo");
      }
  
      // Ao clicar nas tabs normais
      tabs.forEach(tab => {
        tab.addEventListener("click", () => {
          tabs.forEach(t => t.classList.remove("active"));
          sections.forEach(s => s.classList.remove("ativo"));
    
          tab.classList.add("active");
          const target = tab.getAttribute("data-tab");
          document.getElementById(target).classList.add("ativo");
        });
      });
  
      // Ao clicar no botão comprar
      if (botaoComprar) {
        botaoComprar.addEventListener("click", () => {
          tabs.forEach(t => t.classList.remove("active"));
          sections.forEach(s => s.classList.remove("ativo"));
  
          const tabCartao = document.querySelector('.tab[data-tab="cartao"]');
          const sectionCartao = document.getElementById("cartao");
          if (tabCartao && sectionCartao) {
            tabCartao.classList.add("active");
            sectionCartao.classList.add("ativo");
          }
        });
      }
  
      // Controle do Menu Lateral
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
  
      if (menuIcon) {
        menuIcon.addEventListener('click', () => {
          const isOpen = menuLateral.style.left === '0px';
          isOpen ? fecharMenu() : abrirMenu();
        });
      }
  
      if (overlay) {
        overlay.addEventListener('click', fecharMenu);
      }
  
      menuItems.forEach(item => item.addEventListener('click', fecharMenu));
    });
  </script>
  
  
  

</body>

</html>