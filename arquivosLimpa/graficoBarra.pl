/*
 * São José valei-me
 * Jesus Cristo_O Caminho, A Verdade e A Vida
 */



/*------------------------Infográfico 0055551------------------------*/


var grafico1 = new Array('Título do Infográfico 001',"#b0e0e6","#ffffff");

var dados000 = new Array('texto0a','v0b',500,"#ff0000");

var dados001 = new Array('texto1a','v1b',340,"#ffd700");

var dados002 = new Array('texto2a','v2b',120,"#0000ff");

var dados003 = new Array('texto3a','v3b',377,"#008000");

var dados004 = new Array('texto4a','v4b',876,"#ff00ff");

var dados005 = new Array('0','100','200','300','400','500','600','700','800','900');

/*------------------------Infográfico 001------------------------*/



var canvas = document.getElementById('barras');
var barra = canvas.getContext('2d');

barra.scale(0.7,0.7);


function regua(x,y,titulo,cor,corLinha)
{

barra.beginPath();
barra.fillStyle = cor;
barra.fillRect(0,0,1500,1500);
barra.fill();

for(i=0; i<11; i++){

barra.beginPath();
barra.lineWidth = "10";
barra.strokeStyle = corLinha;
barra.moveTo(x,y);
barra.lineTo(x+(i*100),y);
barra.lineTo(x+(i*100),y+10)
barra.stroke();

barra.beginPath();
barra.lineWidth = "1";
barra.moveTo(x,y);
barra.lineTo(x,y-(i*100));
barra.lineTo(x+1100,y-(i*100));
barra.stroke();

}

barra.beginPath();
barra.fillStyle = "#000000";
barra.font = '70px serif';
barra.fillText(titulo,200,120,1000);
barra.fill();

};

function bar(x,y,valor,cor,texto,texto2){
barra.beginPath();
barra.fillStyle = cor;
barra.lineWidth = "20";
barra.lineJoin = "round";
barra.lineCap = "square";
barra.fillRect(x,y,100,-valor);
barra.font = '50px serif';
barra.fillText(texto,x,1300,150);
barra.fillText(texto2,x,y-valor-50,100);
barra.fill();


};


function num(medida,n){
barra.beginPath();
barra.fillStyle = "#000000";
barra.fillText(medida,60,n);
barra.fill();

};


regua(200,1200,grafico1[0],grafico1[1],grafico1[2]);

bar(300,1195,dados000[2],dados000[3],dados000[0],dados000[1]);
bar(500,1195,dados001[2],dados001[3],dados001[0],dados001[1]);
bar(700,1195,dados002[2],dados002[3],dados002[0],dados002[1]);
bar(900,1195,dados003[2],dados003[3],dados003[0],dados003[1]);
bar(1100,1195,dados004[2],dados004[3],dados004[0],dados004[1]);

num(dados005[0],1200);
num(dados005[1],1100);
num(dados005[2],1000);
num(dados005[3],900);
num(dados005[4],800);
num(dados005[5],700);
num(dados005[6],600);
num(dados005[7],500);
num(dados005[8],400);
num(dados005[9],300);
