<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- 
AlPhaD UI - Posts UI

* Version: 1.0
* Build Date    :  07-04-2018 
* Last Update   :  - []
* Author: ALPhA D
* Website: www.alphadsy.com
* Github: www.github.com/alphadsy/
* License : MIT 
-->
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Ganhar massa</title>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<!-- font-awesome icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
<!-- header css -->
<link rel="stylesheet" href="post.css">

<style>

.post {
  position: relative;
  width: 92vw;
  height: auto;
  margin: auto;
  margin-bottom: 1rem;
  background-color: #fff;
  color: #000;
  border-radius: 5px;
  margin-bottom: 3rem;
}
.post .caption {
  position: relative;
  height: inherit;
  background-color: inherit;
  padding: 10px;
}
.post .content {
  position: relative;
  height: inherit;
  padding: 10px;
}
.post .content .img {
  width: 100%;
  height: auto;
}
.post .author {
  position: relative;
  margin-bottom: 3rem;
}
.post .author .avatar {
  position: relative;
  float: left;
  width: 3rem;
  border-radius: 50%;
}
.post .author .name {
  position: relative;
  float: left;
  font-size: 1rem;
  font-weight: 500;
  padding-left: 1rem;
}
.post .meta {
  float: left;
  padding-left: 1rem;
  size: .6rem;
  color: #000;
}
.post .caption .text {
  margin: .5rem 0;
}
.post .category {
  visibility: hidden;
}

/*=== Large devices (desktops, 992px and up) ===*/
@media (min-width: 992px) {
.post {
  width: 75vw;
  height: 500px; 
}
.post .caption {
  float: left;
  padding: 2rem;
}
.post .author {
  margin-bottom: 5rem;
}
.post .author .avatar {
}
.post .author .name {
}
.post .caption .meta {
}
.post .caption .text {
  margin: 1rem 0;
}
.post .content {
  float: left;
  padding: 0;
}
.post .content .img {
  height: 100%;
}
.post .category {
  visibility: visible;
}
}

/* =======================================
 post#1
========================================*/
/*=== Large devices (desktops, 992px and up) ===*/
@media (min-width: 992px) {
#post1 {
  background-color:#212226;
  color: #fff;
}
#post1 .caption {
  width: 30%;
}
#post1 .caption .meta {
  float: left;
  padding-left: 1rem;
  color: #808080;
}
#post1 .caption .text {
}
#post1 .category {
  position: absolute;
  top: 10%;
  right: 0;
  padding: .5rem;
  background-color: #808080;
  z-index: 5;
}
#post1 .content {
  width: 70%;
}
}

/* =======================================
 post#2
========================================*/

/*=== Large devices (desktops, 992px and up) ===*/
@media (min-width: 992px) {
#post2 {
}
#post2 .caption {
  width: 30%;
}
#post2 .content {
  width: 70%;
}
#post2 .caption .content {
  position: absolute;
  left: 50%;
  top: 50%;
  height: auto;
  padding: 0;
  transform: translate(-50%, -50%);
  text-align: center;
}
#post2 .author  {
  margin: 2rem;
}
#post2 .author .avatar {
  float: none;
  width: 5rem;
  margin: 1rem;
}
#post2 .author .name {
  float: none;
}
#post2 .caption .text {
  color: #212226;
}
}

/* =======================================
 post#3
========================================*/

/*=== Large devices (desktops, 992px and up) ===*/
@media (min-width: 992px) {
#post3 {
}
#post3 .content {
  width: 30%;
}
#post3 .author {
  padding: 2rem;
  z-index: 5;
}
#post3 .author .meta {
  float: left;
  padding-left: 1rem;
}
#post3 .content .img {
  position: absolute;
  top: 0;
}
#post3 .caption {
  width: 70%;
  background-color:#212226;
  color: #fff;
}
#post3 .caption .text {
  position: absolute;
  top: 50%;
  padding: 2rem;
  transform: translate(0, -50%);
  color: #ddd;
}
#post3 .caption .category {
  margin-top: 1rem; 
  margin-bottom: 1rem;
  font-size: 1.2rem;
  font-weight: 400; 
}
}

/* =======================================
 post#4
========================================*/

/*=== Large devices (desktops, 992px and up) ===*/
@media (min-width: 992px) {
#post4 {
}
#post4 .author {
  z-index: 5;
  margin-top: 2rem;
}
#post4 .author .meta {
  float: left;
  padding-left: 1rem;
}
#post4 .caption {
  width: 60%;
  background-color:#fff;
  color: #212226;
}
#post4 .caption .text {
  position: absolute;
  top: 50%;
  padding: 2rem;
  transform: translate(0, -50%);
  color: #212226;
}
#post4 .category {
  position: absolute;
  top: 5%;
  right: 2rem;
  padding: .5rem;
  z-index: 5;
  color: #808080;
  display: inline-block;
}
#post4 .category::before {
  content:'';
  position: absolute;
  top: -40%;
  left: 100%;
  width: 2rem;
  height: 100%;
  display: inline-block;
  margin-right: 100%;
  border-bottom: 2px solid #000;
}
#post4 .content {
  width: 40%;
}
#post4 .content .img {
  position: absolute;
  top: 0;
}
}

/* =======================================
 post#5
========================================*/
#post5 {
  background-color:#212226;
  color: #fff;
}
#post5 .author .meta {
  color: #fff;
}
#post5 .images {
  overflow:hidden
}
#post5 .images .img {
  float: left;
  width: 50%;
  height: 150px;
  opacity: 1;
}

/*=== Large devices (desktops, 992px and up) ===*/
@media (min-width: 992px) {
#post5 {
}
#post5 .caption {
  width: 30%;
}
#post5 .author {
}
#post5 .caption .text {
  color: #ddd;
}
#post5 .content {
  width: 70%;
  padding: 2rem;
}
#post5 .images .img {
  height: 50%;
  opacity: .6;
}
#post5 .images .img:hover {
  opacity: 1;
}
} 


/* =======================================
demo css
========================================*/

/*=== for demo only ===*/
body {
  background-color: #f8f8f8;
}
.demo-title {
  text-align: center;
  color: #808080;
  padding-top: 20vh;
  padding-bottom: 20vh;
}
.post {
  border: 1px solid #eee;
  /* box-shadow: 2px 2px 2px 2px #ddd; */
}
.demo-more {
  text-align: center;
  color: #808080;
  padding-top: 10vh;
  padding-bottom: 10vh;
}
.demo-more i {
  color: #696969;
}
.update-note {
  position: absolute;
  top: 2%;
  left: 2%;
  background-color: rgb(33, 33, 33);
  color: #fff;
  border-radius: 10px;
  padding: 0 15px;  
}
a {
  text-decoration: underline;
  color: #696969;
  font-weight: 600;
}
a:hover {
  color: #696969;
}
body {
  overflow-x: hidden;
}


</style>
</head>
<body>

<!-- demo-title -->
<div class="demo-title">
	<h1 class="display-1">Como ganhar massa magra</h1>
	<p>by <a href="#">Artur Quatrin, Gabriel Gubert e Lucas Frizon</a></p>
	
</div>

<!-- post #1 -->
<div class="post" id="post1">
    <div class="caption">
         
        <div class="text">
            <p><font size="2">Para ganhar massa muscular, deve-se fazer exercícios de musculação na academia respeitando as orientações do treinador e seguir uma alimentação rica em proteínas, sendo muito importante dar tempo para o músculo descansar para que possa crescer.</font></p>
            <p><font size="2">Esse cuidado é importante porque durante os exercícios as fibras musculares se lesionam e enviam um sinal ao corpo que indica a necessidade da recuperação muscular, enquanto que uma alimentação adequada irá fornecer os nutrientes necessários para que o diâmetro das fibras musculares possa aumentar e é durante o tempo de descanso que o músculo se recupera e tem tempo para se desenvolver.</font></p>
        </div>
    </div><!-- / .caption -->
    <div class="category">Introdução</div>
    <div class="content">
        <img src="gym1.jpg" class="img" alt="">
    </div><!-- / .content -->
</div>
    
<!-- post #2 -->
<div class="post" id="post2">
    <div class="caption">
        <div class="content">
            
            <div class="text">
            <p><b>As 8 melhores dicas para ganhar massa muscular de forma rápida e eficiente são:</b></p>
            <p><font size="2">Fazer cada exercício de forma lenta, sentindo todo o movimento do músculo, evitando fazer compensações que tornam o exercício mais fácil. Confira um plano de treino com exercícios para ganhar massa;</font></p>
            <p><font size="2">Não parar o exercício assim que começar a sentir dor porque é quando o músculo começa a "queimar" as fibras brancas ( de curta duração ), que são as que levam à hipertrofia, são solicitadas;</font></p>
            </div>
        </div>
    </div><!-- / .caption -->
    <div class="content">
        <img src="gym2.jpg" class="img" alt="">
    </div><!-- / .content-->
</div>

<!-- post #3 -->
<div class="post" id="post3">
    <div class="content">
       
        <img src="gym3.jpg" class="img" alt="">
    </div><!-- / .img -->        
    <div class="caption">
        <div class="text">
            <h2 class="display-4">Saúde em primeiro lugar</h2>    
            <div class="category">Nunca desista.</div>
            
            
            <p><font size="2"> Ingerir alimentos ricos em proteínas diariamente, em todas as refeições, mas especialmente após os exercícios. Veja como deve ser a dieta para ganhar massa;</font></p>
            <p><font size="2"> Começar o treino pela musculação e só depois fazer os exercícios aeróbicos porque assim há mais disposição para exigir ao máximo dos músculos isoladamente;</font></p>
        </div>
    </div><!-- / .caption -->
</div>

<!-- post #4 -->
<div class="post" id="post4">
    <div class="content">
        <img src="gym4.jpg" class="img" alt="">
    </div><!-- / .img -->        
    <div class="category"></div>
    <div class="caption">
        <div class="text">
            <p> Revisar toda a série a cada 4 ou 5 semanas, alterando ou acrescentando alguns exercícios para aumentar a intensidade e os desafios;</p>

            <p> Cada exercício deve ser realizado utilizando 65% da carga máxima que se consegue fazer com uma única repetição. Por exemplo: quando só se consegue levantar um peso de 30 kg com a extensão de coxa, deve-se treinar utilizando um peso de 20 kg, com aumento progressivo;</p>

           <p>Quando atingir o objetivo pretendido, não deixar de se exercitar para não perder a definição conquistada. Geralmente a perda de massa muscular pode ser observada em apenas 15 dias sem treino.</p>
            
        </div>
    </div><!-- / .caption -->
</div>
    
<!-- post #5 -->
<div class="post" id="post5">
    <div class="caption">
       
        <div class="text">
            <p>Pode-se ver os primeiros resultados da academia com pelo menos 3 meses de prática regular de exercícios de musculação e com 6 meses de exercício já é possível notar uma boa diferença no crescimento e definição muscular. No entanto, o condicionamento cardíaco pode ser notado logo no primeiro mês.

</p><p>Além disso, os suplementos de proteína ou de Creatina são uma ótima opção que ajuda no ganho de massa muscular, porém estes suplementos apenas devem ser tomados segundo a orientação de um médico ou nutricionista.</p>
       
        </div>
    </div><!-- / .caption -->
    <div class="content images">
        <img src="gym1.jpg" class="img" alt="">
        <img src="gym2.jpg" class="img" alt="">
        <img src="gym3.jpg" class="img" alt="">
        <img src="gym4.jpg" class="img" alt="">
    </div><!-- / .content -->
</div>




</body>
</html>
