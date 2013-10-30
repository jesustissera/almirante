
var foto =  new Array();
foto[0]="img/indep/1.png";
foto[1]="img/indep/2.png";
foto[2]="img/indep/3.png";
foto[3]="img/indep/4.png"; 
foto[4]="img/indep/5.png";
foto[5]="img/indep/6.png";
foto[6]="img/indep/7.png";
foto[7]="img/indep/8.png";
foto[8]="img/indep/9.png";
foto[9]="img/indep/10.png";
foto[10]="img/indep/11.png";
foto[11]="img/indep/12.png";
foto[12]="img/indep/13.png";
foto[13]="img/indep/14.png";
foto[14]="img/indep/15.png";
foto[15]="img/indep/16.png";
foto[16]="img/indep/17.png";
foto[17]="img/indep/18.png";
/* 
var texto = new Array();
texto[0] = "La primer imagen";
texto[1] = "La segunda imagen";
texto[2] = "la tercera imagen";
texto[3] = "La cuarta imagen";
texto[4] = "La quinta imagen";
 */
var cantidad = foto.length;

var imagen_actual = 0;

function mover_imagenes(direccion){

  var galeria = document.getElementById("galeria_fotos");
  /* var texto_pie = document.getElementById("galeria_textos"); */

  var ultima_imagen = cantidad - 1;
 
  var aux = imagen_actual + direccion; 
  
  if(aux < 0) { aux = ultima_imagen; }
  if(aux > ultima_imagen) { aux = 0; }
  
  imagen_actual = aux;
  
  galeria.src = foto[imagen_actual];
  
  /* texto_pie.innerHTML = texto[imagen_actual]; */
}

