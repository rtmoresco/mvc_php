<h1 align="center">Arquitetura MVC</h1>

<h2 align="center">Descrição</h2>
<p> Este projeto é um modelo de arquetura em camadas para desenvolvimento de softwares em php. 
A arquitetura MVC foi formulado para criar um padrão de desenvolvimento com camadas bem definidas, orientado a padronização
e a produtividade do software.
</p>

<h2 align="center">View</h1>

<ul>
  <li>Camada de interface do usuário;</li>
  <li>HTML e XML.</li>
</ul>

<h2 align="center">Model</h1>

<ul>
  <li>Camada encarregada das regras de negócio;</li>
  <li>MySql e JSON;</li>
  <li>Os dados sáo capturados e enviados para o controlador.</li>
</ul>

<h2 align="center">Controller</h1>

<ul>
  <li>Sua função é notificar a camada view ou model de acordo com a requisição recebida.</li>
</ul>


<h2 align="center"> Interação das entidades</h2>

<img src="imagem/Modelo.jpg" alt="Modelo MVC" width="800" height="800"/>
<p>Imagem ilustrativa demonstrando o comportamento deste projeto.</p>

<h2 align="center"> Como usar</h2>

<h3 align="center">System</h3>
<p>Este diretõrio contém os arquivos de configurações de banco de dados e os métodos que dão suporte as classes route e 
indexController.
</p>


<h3 align="center">Route</h3>
<p>O arquivo Route.php contém um array com as rotas que inicializam uma chamada do método do indexController. 
</p>

<h3 align="center">View</h3>
<p>Dentro da camada View há um diretório chamado template, nele está definido o cabeçalho e o rodapé do arquivo HTML.Isto, portanto, 
fará com que todos os arquivos HTML contidos no diretório index utilizem este template. 
</p>

<h3 align="center">Comandos</h3>
<p>
	Para iniciar nosso projeto em um servidor PHP é necessário:
</p>
<ul>
  <li>Ir até a pasta public: cd C:\mvc_php\public</li>
  <li>Digitar o comando: php -S localhost:8080</li>
</ul>

<img alt="PHP version from Travis config" src="https://img.shields.io/travis/php-v/rtmoresco/mvc_php/master">

