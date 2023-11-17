<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">
  <title>Adicione Sua Vaga</title>
  <!-- Principal CSS do Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Estilos customizados para esse template -->
  <link href="form-validation.css" rel="stylesheet">
  <!-- link do  bootstrap css-->
  <link href="css\bootstrapfisico.css" rel="stylesheet">
  <!-- link do css-->
  <link href="css/adiçao.css" rel="stylesheet">
</head>

<body>
  <div class="header">
    <img class="header-logo-responsive" src="img/logo1.png" alt="">
    <div class="header-links-responsive">
      <a class="header-links-responsive" href="#">Home</a>
      <a class="header-links-responsive" href="#">Sobre nós</a>
      <a class="header-links-responsive" href="#">Ajuda</a>
    </div>
    <div class="d-flex align-items-center ml-4" style="width: 300px;"> <!-- Aumente a largura do contêiner -->
      <h3 class="frase-responsive" style="font-size: 18px;">Já possui cadastro?</h3>
      <button class="btn btn-primary btn-custom ml-2">Login</button>
    </div>
  </div>
  <div class="container center-form"> <!-- Adicione a classe "center-form" para centralizar -->
    <div class="quadradoBranco">
      <div class="mb-3">
        <br>
        <button class="bnt">Alterar <svg xmlns="http://www.w3.org/2000/svg" width="42" height="37" viewBox="0 0 42 37"
            fill="none">
            <path
              d="M29.4748 24.5046L31.7639 22.2377C32.1215 21.8835 32.7439 22.1315 32.7439 22.6415V32.9418C32.7439 34.819 31.2059 36.3421 29.3103 36.3421H4.13083C2.23522 36.3421 0.697266 34.819 0.697266 32.9418V8.00587C0.697266 6.12859 2.23522 4.60552 4.13083 4.60552H23.695C24.2029 4.60552 24.4604 5.21475 24.1027 5.57603L21.8137 7.84293C21.7064 7.94919 21.5633 8.00587 21.4059 8.00587H4.13083V32.9418H29.3103V24.9013C29.3103 24.7526 29.3675 24.6109 29.4748 24.5046ZM40.6768 10.209L21.8924 28.8117L15.4258 29.5202C13.5517 29.7256 11.9565 28.16 12.1639 26.2898L12.8793 19.8858L31.6637 1.28309C33.3018 -0.339156 35.9485 -0.339156 37.5795 1.28309L40.6697 4.34341C42.3078 5.96566 42.3078 8.59384 40.6768 10.209ZM33.6094 12.398L29.4534 8.28214L16.1626 21.4514L15.6404 26.0773L20.3115 25.5602L33.6094 12.398ZM38.2447 6.75199L35.1545 3.69167C34.8612 3.40123 34.3819 3.40123 34.0958 3.69167L31.8855 5.88065L36.0415 9.99649L38.2519 7.80751C38.538 7.50998 38.538 7.04243 38.2447 6.75199Z"
              fill="white" />
          </svg></button>
        <button class="bnt">Excluir <svg xmlns="http://www.w3.org/2000/svg" width="39" height="38" viewBox="0 0 39 38"
            fill="none">
            <path d="M5.95703 6.44165V37.276H33.4296V6.44165H5.95703Z" fill="#1F78D1" stroke="white"
              stroke-linejoin="round" />
            <path d="M16.0293 15.5103V27.2999" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M23.3574 15.5103V27.2999" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M1.37891 6.44165H38.0089" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M12.3672 6.44135L15.3791 1H24.0678L27.0192 6.44135H12.3672Z" fill="#1F78D1" stroke="white"
              stroke-linejoin="round" />
          </svg></button>
      </div>
      <div class="mb-3">
        <h1 class="titulo">Sobre a Vaga</h1>
        <input class="titulo" placeholder="Nome da empresa">
        <input class="info" placeholder="Local">
        <input class="info" placeholder="Salário">
        <input class="mb-3" class="info" list="periodo" placeholder="Periodo">
        <datalist id="periodo">
          <option value=" Tempo Integral">
          <option value=" Meio Período">
        </datalist>
        <input class="mb-3" class="info" list="tipo" placeholder="Tipo">
        <datalist id="tipo">
          <option value=" Estagio">
          <option value="Assistente">
          <option value="analista">
        </datalist>
      </div>
      <div class="mb-3">
        <h1 class="titulo">Descrição</h1>
        <textarea name="textarea"></textarea>
      </div>
      <div class="mb-3">
        <h1 class="titulo">Atividades</h1>
        <div contenteditable="true">
          <ul>
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
          </ul>
        </div>
        <div class="mb-3">
          <h1 class="titulo">benefícios</h1>
          <div contenteditable="true">
            <ul>
              <li>Item 1</li>
              <li>Item 2</li>
              <li>Item 3</li>
            </ul>
          </div>
          <div>
            <h1 class="titulo">Sobre a Empresa</h1>
            <div class="empresa" class="mb-3">
              <input class="picture_perfil"><br>
            </div>
            <div class="empresa" class="mb-3">
              <input placeholder="Nome da empresa">
              <textarea rows="10" cols="50"></textarea>
              <button href="#" class="bnt-exibir">Exibir Mais
            </div>
          </div>

</body>

</html>