<!DOCTYPE html>
<html>
<head>
  <title>4 wandering cubes</title>
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

  <!--Import stylos.css-->
  <link type="text/css" rel="stylesheet" href="css/stylos.css"  media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Viga" rel="stylesheet">

  <style type="text/css">
    /*
 *  Usage:
 *
      <div class="sk-wandering-cubes">
        <div class="sk-cube sk-cube1"></div>
        <div class="sk-cube sk-cube2"></div>
      </div>
 *
 */
 .preloader {
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 1000;
}

 .spinner {
   width: 80px;
   height: 80px;
   background-color: white;

   margin: 100px auto;
   -webkit-animation: sk-rotateplane 1.2s infinite ease-in-out;
   animation: sk-rotateplane 1.2s infinite ease-in-out;
 }

 @-webkit-keyframes sk-rotateplane {
   0% { -webkit-transform: perspective(120px) }
   50% { -webkit-transform: perspective(120px) rotateY(180deg) }
   100% { -webkit-transform: perspective(120px) rotateY(180deg)  rotateX(180deg) }
 }

 @keyframes sk-rotateplane {
   0% {
     transform: perspective(120px) rotateX(0deg) rotateY(0deg);
     -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg)
   } 50% {
     transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
     -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg)
   } 100% {
     transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
     -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
   }
 }
  </style>
</head>
<body class="bg-secundario" style="height:700px;">


      <div class="preloader flex flex-col sk-wandering-cubes" style="height: 100%;">
        <div class="spinner"></div>
        <h4 class="white-text">CARGANDO</h4>
      </div>

      <div class="contenedor">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

      <script type="text/javascript">
      $(document).ready(function () {
       $('.preloader').fadeOut('fast');
      });
      </script>
</body>
</html>
