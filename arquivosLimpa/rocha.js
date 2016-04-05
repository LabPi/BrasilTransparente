/*
 * São José valei-me
 * Jesus Cristo_O Caminho, A Verdade e A Vida
 */


var canvas2 = document.getElementById('rocha2');
var nuvem2 = canvas2.getContext('2d');

nuvem2.scale(0.8,0.8);

var p0x;
var p0y;

function desenhar2(p0x,p0y,valor,cor1,cor2,cor3){

nuvem2.beginPath();
nuvem2.strokeStyle = "#ffffff";
nuvem2.lineWidth = "2";
nuvem2.lineJoin = "round";
nuvem2.lineCap = "square";

function baixo(){
nuvem2.beginPath();
nuvem2.moveTo(p0x,p0y+ valor);
nuvem2.lineTo(p0x + 70, p0y + 50 + valor);
nuvem2.lineTo(p0x + 160, p0y + 20 + valor);
nuvem2.stroke();
};


function topo(){
nuvem2.beginPath();
nuvem2.fillStyle = cor1;
nuvem2.moveTo(p0x,p0y);
nuvem2.lineTo(p0x + 70, p0y + 50);
nuvem2.lineTo(p0x + (70/1.2), p0y + 50);
nuvem2.lineTo(p0x + 160, p0y + 20);
nuvem2.lineTo(p0x + 80, p0y - 30);
nuvem2.closePath();
nuvem2.fill();
nuvem2.stroke();
};

function ladoA(){
nuvem2.beginPath();

//gradiente = nuvem2.createLinearGradient(p0x,p0y,p0x+20,p0y+valor);
//gradiente.addColorStop(0,'#4169E1');
//gradiente.addColorStop(0.5,'#ffd700');
//gradiente.addColorStop(1,'#32CD32');

nuvem2.fillStyle = cor2;
nuvem2.moveTo(p0x,p0y + valor);
nuvem2.lineTo(p0x,p0y);
nuvem2.lineTo(p0x + 70, p0y + 50);
nuvem2.lineTo(p0x + 73, p0y + 50 + (valor/3));//desvio
nuvem2.lineTo(p0x + 70, p0y + 50 + valor);
nuvem2.fill();
nuvem2.stroke();

};


function ladoB(){
nuvem2.beginPath();
nuvem2.fillStyle = cor3;
nuvem2.moveTo(p0x + 70, p0y + 50 + valor);
nuvem2.lineTo(p0x + 73, p0y + 50 + (valor/3));//desvio
nuvem2.lineTo(p0x + 70, p0y + 50);
nuvem2.lineTo(p0x + 160, p0y + 20);
nuvem2.lineTo(p0x + 155, p0y + (valor/2)); //desvio
nuvem2.lineTo(p0x + 160, p0y + 20 + valor);
nuvem2.fill();
nuvem2.stroke();
};

nuvem2.strokeStyle = "#4B0082";

topo();
ladoA(200);
ladoB(200);
baixo();
};


function texto(x,y,texto,cor){

nuvem2.beginPath();
nuvem2.fillStyle = cor;
nuvem2.rotate(-Math.PI/7);
nuvem2.font = '30px Arial, serif';
nuvem2.fillText(texto,x,y);
nuvem2.fill();
nuvem2.rotate(Math.PI/7);

};



var arranjo001 = new Array("#ffd700","#ff22ff","#aaffaa","#bbccaa","#333aa1","#ddaa11","#ee11aa","#44cc22","#eeccaa","#11eecc","#ff22aa","#ffcc33","#bbffbb","#bb11dd","#33bb22");
var arranjo002 = new Array(40,100,120,87,66,55,23,56,123,42,156,266,311,12,23);
var arranjo003 = new Array(120,10,330,67,23,92,82,145,211,23,54,35,134,255,12);
var arranjo004 = new Array(219,319,419,319,219,43,266,32,156,377,433,127,23,12,442);
var arranjo005 = new Array('Brasil','Rússia','Índia','China','South África','EUA','Paquistão','Curdistão','Israel','Palestina','Argentina','México','Paraguai','França','Síria');



var i = -1;

function todo3(x,y){

i++;
nuvem2.beginPath();
nuvem2.globalAlpha = 1;
nuvem2.fillStyle = "#B0E0E6";
nuvem2.fillRect(0,0,1300,1300);
nuvem2.fill();


nuvem.beginPath();
nuvem.globalAlpha = 1;


desenhar2(447+x,-53+y,arranjo002[i],"#006400","#000000","#ffd700");
desenhar2(547+x,22+y,arranjo002[i+1],"#006400","#000000","#ffd700");
desenhar2(647+x,97+y,arranjo002[i+2],"#006400","#000000","#ffd700");
desenhar2(747+x,172+y,arranjo002[i+3],"#006400","#000000","#ffd700");

desenhar2(338+x,-2+y,arranjo002[i],"#ffd700","#B22222","#FF0000");
desenhar2(438+x,73+y,arranjo002[i+1],"#ffd700","#B22222","#FF0000");
desenhar2(538+x,148+y,arranjo002[i+2],"#ffd700","#B22222","#FF0000");
desenhar2(638+x,223+y,arranjo002[i+3],"#ffd700","#B22222","#FF0000");

desenhar2(219+x,49+y,arranjo002[i],"#ffffff","#006400","#FFA500");
desenhar2(319+x,124+y,arranjo002[i+1],"#ffffff","#006400","#FFA500");
desenhar2(419+x,199+y,arranjo002[i+2],"#ffffff","#006400","#FFA500");
desenhar2(519+x,274+y,arranjo002[i+3],"#ffffff","#006400","#FFA500");

nuvem.beginPath();
desenhar2(100+x,100+y,arranjo003[i],"#FF0000","#1E90FF","#ffffff");
desenhar2(200+x,175+y,arranjo003[i+1],"#FF0000","#1E90FF","#ffffff");
desenhar2(300+x,250+y,arranjo003[i+2],"#FF0000","#1E90FF","#ffffff");
desenhar2(400+x,325+y,arranjo003[i+3],"#FF0000","#1E90FF","#ffffff");

nuvem.beginPath();
desenhar2(-19+x,151+y,arranjo004[i],"#1E90FF","#006400","#ffd700");
desenhar2(81+x,226+y,arranjo004[i+1],"#1E90FF","#006400","#ffd700");
desenhar2(181+x,301+y,arranjo004[i+2],"#1E90FF","#006400","#ffd700");
desenhar2(281+x,376+y,arranjo004[i+3],"#1E90FF","#006400","#ffd700");


var cor5 = "#000000";
nuvem.beginPath();
estrutura(x,y);
texto(472,402,arranjo005[i],cor5);
texto(522,502,arranjo005[i+1],cor5);
texto(572,602,arranjo005[i+2],cor5);
texto(622,702,arranjo005[i+3],cor5);

texto(470,400,arranjo005[i],arranjo001[i]);
texto(520,500,arranjo005[i+1],arranjo001[i+1]);
texto(570,600,arranjo005[i+2],arranjo001[i+2]);
texto(620,700,arranjo005[i+3],arranjo001[i+3]);
};

function todo4(x,y){

i--;
nuvem2.beginPath();
nuvem2.globalAlpha = 1;
nuvem2.fillStyle = "#B0E0E6";
nuvem2.fillRect(0,0,1300,1300);
nuvem2.fill();


nuvem2.beginPath();
nuvem2.globalAlpha = 1;


desenhar2(447+x,-53+y,arranjo002[i],"#006400","#000000","#ffd700");
desenhar2(547+x,22+y,arranjo002[i+1],"#006400","#000000","#ffd700");
desenhar2(647+x,97+y,arranjo002[i+2],"#006400","#000000","#ffd700");
desenhar2(747+x,172+y,arranjo002[i+3],"#006400","#000000","#ffd700");

desenhar2(338+x,-2+y,arranjo002[i],"#ffd700","#B22222","#FF0000");
desenhar2(438+x,73+y,arranjo002[i+1],"#ffd700","#B22222","#FF0000");
desenhar2(538+x,148+y,arranjo002[i+2],"#ffd700","#B22222","#FF0000");
desenhar2(638+x,223+y,arranjo002[i+3],"#ffd700","#B22222","#FF0000");

desenhar2(219+x,49+y,arranjo002[i],"#ffffff","#006400","#FFA500");
desenhar2(319+x,124+y,arranjo002[i+1],"#ffffff","#006400","#FFA500");
desenhar2(419+x,199+y,arranjo002[i+2],"#ffffff","#006400","#FFA500");
desenhar2(519+x,274+y,arranjo002[i+3],"#ffffff","#006400","#FFA500");

nuvem2.beginPath();
desenhar2(100+x,100+y,arranjo003[i],"#FF0000","#1E90FF","#ffffff");
desenhar2(200+x,175+y,arranjo003[i+1],"#FF0000","#1E90FF","#ffffff");
desenhar2(300+x,250+y,arranjo003[i+2],"#FF0000","#1E90FF","#ffffff");
desenhar2(400+x,325+y,arranjo003[i+3],"#FF0000","#1E90FF","#ffffff");

nuvem2.beginPath();
desenhar2(-19+x,151+y,arranjo004[i],"#1E90FF","#006400","#ffd700");
desenhar2(81+x,226+y,arranjo004[i+1],"#1E90FF","#006400","#ffd700");
desenhar2(181+x,301+y,arranjo004[i+2],"#1E90FF","#006400","#ffd700");
desenhar2(281+x,376+y,arranjo004[i+3],"#1E90FF","#006400","#ffd700");


var cor5 = "#000000";
nuvem2.beginPath();
estrutura(x,y);
texto(472,402,arranjo005[i],cor5);
texto(522,502,arranjo005[i+1],cor5);
texto(572,602,arranjo005[i+2],cor5);
texto(622,702,arranjo005[i+3],cor5);

texto(470,400,arranjo005[i],arranjo001[i]);
texto(520,500,arranjo005[i+1],arranjo001[i+1]);
texto(570,600,arranjo005[i+2],arranjo001[i+2]);
texto(620,700,arranjo005[i+3],arranjo001[i+3]);
};





function estrutura(x,y){

nuvem.beginPath();

nuvem2.globalAlpha = 1.5;
nuvem2.lineCap = "round";
nuvem2.strokeStyle = "#000000";
nuvem2.lineWidth = "1";
nuvem2.moveTo(x-180,y+175);
nuvem2.lineTo(x+410,y-35);
nuvem2.moveTo(x-90,y+265);
nuvem2.lineTo(x+500,y+55);
nuvem2.moveTo(x,y+355);
nuvem2.lineTo(x+590,y+145);
nuvem2.moveTo(x+80,y+435);
nuvem2.lineTo(x+670,y+225);
nuvem2.moveTo(x+160,y+515);
nuvem2.lineTo(x+750,y+305);

nuvem2.moveTo(x-110,y+150);
nuvem2.lineTo(x+560,y+605);
nuvem2.moveTo(x+40,y+100);
nuvem2.lineTo(x+700,y+555);
nuvem2.stroke();
};


todo3(100,200);

