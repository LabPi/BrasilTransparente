/*
 * São José valei-me
 * Jesus Cristo_O Caminho, A Verdade e A Vida
 */

/*Copyright 2016 Companhia Marcial*/

/*This file is part of Brasil Transparente.

    Foobar is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Foobar is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Foobar.  If not, see <http://www.gnu.org/licenses/>.

Tradução não-oficial:

    Este arquivo é parte do programa Brasil Transparente

    Brasil Transparente é um software livre; você pode redistribuí-lo e/ou 
    modificá-lo dentro dos termos da Licença Pública Geral GNU como 
    publicada pela Fundação do Software Livre (FSF); na versão 2 da 
    Licença.

    Este programa é distribuído na esperança de que possa ser  útil, 
    mas SEM NENHUMA GARANTIA; sem uma garantia implícita de ADEQUAÇÃO
    a qualquer MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a
    Licença Pública Geral GNU para maiores detalhes.

    Você deve ter recebido uma cópia da Licença Pública Geral GNU junto
    com este programa, Se não, veja <http://www.gnu.org/licenses/>.

Este documento deve ir no começo de cada arquivo fonte, perto dos avisos de copyright. Para usar a GPL Menor, coloque a palavra “Menor” depois de “Geral” em todos lugares.*/


var canvas = document.getElementById('rocha');
var nuvem = canvas.getContext('2d');

nuvem.scale(1.3,1.3);

var p0x;
var p0y;

function desenhar(p0x,p0y,valor,cor1,cor2,cor3,alfa){

nuvem.beginPath();
//nuvem.strokeStyle = "10";
nuvem.lineWidth = "3.5";
nuvem.lineJoin = "round";
nuvem.lineCap = "square";
nuvem.globalAlpha = alfa;

function baixo(){
nuvem.beginPath();
nuvem.moveTo(p0x,p0y+ valor);
nuvem.lineTo(p0x + 70, p0y + 50 + valor);
nuvem.lineTo(p0x + 160, p0y + 20 + valor);
nuvem.stroke();

nuvem.beginPath();
nuvem.fillStyle = "#cccccc";
nuvem.font = '40px Arial, serif';
nuvem.fillText('|',p0x,p0y);
nuvem.fill();

};


function topo(){
nuvem.beginPath();
nuvem.fillStyle = cor1;
nuvem.moveTo(p0x,p0y);
nuvem.lineTo(p0x + 70, p0y + 50);
//nuvem.lineTo(p0x + (70/1.2), p0y + 50);
nuvem.lineTo(p0x + 160, p0y + 20);
nuvem.lineTo(p0x + 80, p0y - 30);
nuvem.closePath();
nuvem.fill();
nuvem.stroke();
};

function ladoA(){
nuvem.beginPath();

//gradiente = nuvem.createLinearGradient(p0x,p0y,p0x+20,p0y+valor);
//gradiente.addColorStop(0,'#4169E1');
//gradiente.addColorStop(0.5,'#ffd700');
//gradiente.addColorStop(1,'#32CD32');

nuvem.fillStyle = cor2;
nuvem.moveTo(p0x,p0y + valor);
nuvem.lineTo(p0x,p0y);
nuvem.lineTo(p0x + 70, p0y + 50);
//nuvem.lineTo(p0x + 73, p0y + 50 + (valor/3));//desvio
nuvem.lineTo(p0x + 70, p0y + 50 + valor);
nuvem.fill();
nuvem.stroke();

};


function ladoB(){
nuvem.beginPath();
nuvem.fillStyle = cor3;
nuvem.moveTo(p0x + 70, p0y + 50 + valor);
//nuvem.lineTo(p0x + 73, p0y + 50 + (valor/3));//desvio
nuvem.lineTo(p0x + 70, p0y + 50);
nuvem.lineTo(p0x + 160, p0y + 20);
//nuvem.lineTo(p0x + 155, p0y + (valor/2)); //desvio
nuvem.lineTo(p0x + 160, p0y + 20 + valor);
nuvem.fill();
nuvem.stroke();

};

nuvem.strokeStyle = "transparent";

topo();
ladoA(200);
ladoB(200);
baixo();




function qa1(){

nuvem.beginPath();
nuvem.fillStyle = "#104E8B";
nuvem.rotate(-Math.PI/2);
nuvem.font = '40px Arial, serif';
nuvem.fillText('População',-479,149);
nuvem.fillText('Área (km²)',-430,270);
nuvem.fillText('R$ per capita',-380,390);
nuvem.fillText('Municípios',-330,510);
nuvem.fillText('Convênios',-280,620);

nuvem.fill();
nuvem.rotate(Math.PI/2);
};



function qa2(){

nuvem.beginPath();
nuvem.fillStyle = "#3A5FCD";
nuvem.strokeStyle = "#63B8FF";
nuvem.lineWidth = 1;
nuvem.rotate(-Math.PI/2);
nuvem.font = '30px Arial, serif';
nuvem.fillText('P o p u l a ç ã o',-480,200);
nuvem.strokeText('P o p u l a ç ã o',-480,200);
nuvem.fillText('Á r e a  ( k m ² )',-430,310);
nuvem.strokeText('Á r e a  ( k m ² )',-430,310);
nuvem.fillText('R e n d a  ( p )',-380,440);
nuvem.strokeText('R e n d a  ( p )',-380,440);
nuvem.fillText('M u n i c í p i o s',-330,560);
nuvem.strokeText('M u n i c í p i o s',-330,560);
nuvem.fillText('C o n v ê n i o s',-280,670);
nuvem.strokeText('C o n v ê n i o s',-280,670);


nuvem.stroke();
nuvem.fill();

nuvem.rotate(Math.PI/2);
};

qa2();
};




var arranjo001 = new Array("#ffd700","#ff22ff","#aaffaa","#bbccaa","#333aa1","#ddaa11","#ee11aa","#44cc22","#eeccaa","#11eecc","#ff22aa","#ffcc33","#bbffbb","#bb11dd","#33bb22");


var arranjo002 = new Array(40,100,120,87,66,55,23,56,123,42,156,266,311,12,23);
var arranjo003 = new Array(120,10,330,67,23,92,82,145,211,23,54,35,134,255,12);
var arranjo004 = new Array(219,319,419,319,219,43,266,32,156,377,433,127,23,12,442);
var arranjo005 = new Array(120,10,92,82,145,211,23,54,35,134,330,67,23,255,12);
var arranjo006 = new Array(266,32,156,377,433,127,23,12,442,219,319,419,319,219,43);
var arranjo007 = new Array('Acre (AC)','Alagoas (AL)', 'Amapá (AP)','Amazonas (AM)', 'Bahia (BA)', 'Ceará (CE)', 'Distrito Federal (DF)', 'Espírito Santo (ES)', 'Goiás (GO)', 'Maranhão (MA)', 'Mato Grosso (MT)', 'Mato Grosso do Sul (MS)', 'Minas Gerais (MG)', 'Pará (PA)', 'Paraíba (PB)', 'Paraná (PR)', 'Pernambuco (PE)', 'Piauí (PI)', 'Rio de Janeiro (RJ)', 'Rio Grande do Norte (RN)', 'Rio Grande do Sul (RS)', 'Rondônia (RO)', 'Roraima (RR)', 'Santa Catarina (SC)', 'São Paulo (SP)', 'Sergipe (SE)', 'Tocantins (TO)');

var arranjo008 = new Array(803513/100000, 3340932/100000, 766679/100000, 3938336/100000, 15203934/100000, 8904459/100000, 2914830/100000, 3929911/100000, 6610681/100000, 6904241/100000, 3265486/100000, 2651235/100000, 20869101/100000, 8175113/100000, 3972202/100000, 11163018/100000, 9345173/100000, 3204028/100000, 16550024/100000, 3442175/100000,  11247972/100000,  1768204/100000, 505665/100000,  6819190/100000 ,  44396484/100000,  2242937/100000,  1515126/100000);

var arranjo009 = new Array(803.513, 3.340932, 766.679, 3.938336, 15.203934, 8.904459, 2.914830, 3.929911, 6.610681, 6.904241, 3.265486, 2.651235, 20.869101, 8.175113, 3.972202, 11.163018, 9.345173, 3.204028, 16.550024, 3.442175,  11.247972 ,  1.768204, 505.665,  6.819190,  44.396484,  2.242937,  1.515126);


var arranjo010 = new Array(164123739/5000000, 27848003/5000000, 142828520/5000000,1559148890/5000000, 564733081/5000000, 148886308/5000000,   5779999/5000000, 46096925/5000000, 340111376/5000000, 331936948/5000000,   903378292/5000000, 357145534/5000000, 586519727/5000000, 1247954320/5000000 , 56469744/5000000, 199307945/5000000, 98076109/5000000, 251611932/5000000,   43777954/5000000, 52811126/5000000, 281731445/5000000, 237590543/5000000,  224303187/5000000, 95733978/5000000, 248222362/5000000, 21918493/5000000, 277720569/5000000);

var arranjo011 = new Array(164.123739, 27.848003, 142.828520,   1.559148890, 564.733081, 148.886308,   5.779999, 46.096925, 340.111376, 331.936948, 903.378292, 357.145534, 586.519727, 1.247954321 , 56.469744, 199.307945, 98.076109, 251.611932,   43.777954, 52.811126,   281.731445, 237.590543, 224.303187, 95.733978, 248.222362,   21.918493, 277.720569);



var arranjo012 = new Array(782/10, 598/10, 849/10, 752/10, 736/10, 680/10, 2252/10, 1024/10, 1077/10, 509/10, 1055/10, 1045/10, 1128/10, 672/10, 776/10, 1241/10, 822/10, 729/10, 1285/10, 818/10, 1435/10, 822/10, 1008/10, 1368/10, 1482/10, 782/10, 818/10);


var arranjo013 = new Array('R$782', 'R$598', 'R$849', 'R$752', 'R$736', 'R$680', 'R$2.252', 'R$1.024', 'R$1.077', 'R$509', 'R$1.055', 'R$1.045', 'R$1.128', 'R$672', 'R$776', 'R$1.241', 'R$822', 'R$729', 'R$1.285', 'R$818', 'R$1.435', 'R$822', 'R$1.008', 'R$1368', 'R$1.482', 'R$782', 'R$818');








var arranjo014 = new Array( 22,  102,  16,  62,  417, 184, 1, 78, 246, 217, 141, 79, 853/2, 144, 223, 399, 185, 224, 92, 167, 497, 52, 15, 295, 645, 75, 139);

var arranjo015 = new Array( 22,  102,  16,  62,  417, 184, 1, 78, 246, 217, 141, 79, 853, 144, 223, 399, 185, 224, 92, 167, 497, 52, 15, 295, 645, 75, 139);



var arranjo017 = new Array('1.199','1.812', '766','993 ', '6.929', '11.432', '1.981', '2.014', '8.358', '3.701', '5.736', '4.183', '11.796', '3.145', '4.746', '13.888', '5.192', '2.799', '4.625', '3.020', '16.695', '1.758', '538', '8.496', '19.770', '1.574', '2.853');



var arranjo016 = new Array(1199/100, 1812/100, 766/100 ,993/100, 6929/100, 11432/100, 1981/100, 2014/100, 8358/100, 3701/100, 5736/100, 4183/100, 11796/100, 3145/100, 4746/100, 13888/100, 5192/100, 2799/100, 4625/100, 3020/100, 16695/100, 1758/100, 538/100, 8496/100, 19770/100, 1574/100, 2853/100);





var i = 7;

function todo(x,y){

i++;
nuvem.beginPath();
//nuvem.globalAlpha = alfa;
nuvem.fillStyle = "#ffffff";
nuvem.fillRect(0,0,1300,1300);
nuvem.fill();

//'20.869.101',1000,'518.519.330',900,'R$1.128',800,'853',700,'1491',600

nuvem.beginPath();
nuvem.fillStyle = "#104E8B";
nuvem.font = '25px Arial, serif';
nuvem.fillText(arranjo009[i+3],130,630+arranjo008[i+3]);
nuvem.fillText(arranjo011[i+3],250,630+arranjo010[i+3]);
nuvem.fillText(arranjo013[i+3],390,530+arranjo012[i+3]);
nuvem.fillText(arranjo015[i+3],530,460+arranjo014[i+3]);
nuvem.fillText(arranjo017[i+3],650,420+arranjo016[i+3]);
nuvem.fill();

nuvem.beginPath();
nuvem.fillStyle = "#104E8B";
nuvem.font = '40px Arial, serif';
nuvem.fillText(arranjo007[i+3],0,50);

nuvem.fill();

nuvem.beginPath();

desenhar(447+x,-53+y,arranjo016[i],"#cccccc","#cccccc","#cccccc",0.2);
desenhar(547+x,22+y,arranjo016[i+1],"#cccccc","#cccccc","#cccccc",0.3);
desenhar(647+x,97+y,arranjo016[i+2],"#cccccc","#cccccc","#cccccc",0.5);
desenhar(747+x,172+y,arranjo016[i+3],"#104E8B","#63B8FF","#3A5FCD",1);

desenhar(338+x,-2+y,arranjo014[i],"#cccccc","#cccccc","#cccccc",0.2);
desenhar(438+x,73+y,arranjo014[i+1],"#cccccc","#cccccc","#cccccc",0.3);
desenhar(538+x,148+y,arranjo014[i+2],"#cccccc","#cccccc","#cccccc",0.5);
desenhar(638+x,223+y,arranjo014[i+3],"#104E8B","#63B8FF","#3A5FCD",1);

desenhar(219+x,49+y,arranjo012[i],"#cccccc","#cccccc","#cccccc",0.2);
desenhar(319+x,124+y,arranjo012[i+1],"#cccccc","#cccccc","#cccccc",0.3);
desenhar(419+x,199+y,arranjo012[i+2],"#cccccc","#cccccc","#cccccc",0.5);
desenhar(519+x,274+y,arranjo012[i+3],"#104E8B","#63B8FF","#3A5FCD",1);

nuvem.beginPath();
desenhar(100+x,100+y,arranjo010[i],"#cccccc","#cccccc","#cccccc",0.2);
desenhar(200+x,175+y,arranjo010[i+1],"#cccccc","#cccccc","#cccccc",0.3);
desenhar(300+x,250+y,arranjo010[i+2],"#cccccc","#cccccc","#cccccc",0.5);
desenhar(400+x,325+y,arranjo010[i+3],"#104E8B","#63B8FF","#3A5FCD",1);

nuvem.beginPath();
desenhar(-19+x,151+y,arranjo008[i],"#cccccc","#cccccc","#cccccc",0.2);
desenhar(81+x,226+y,arranjo008[i+1],"#cccccc","#cccccc","#cccccc",0.3);
desenhar(181+x,301+y,arranjo008[i+2],"#cccccc","#cccccc","#cccccc",0.5);
desenhar(281+x,376+y,arranjo008[i+3],"#104E8B","#63B8FF","#3A5FCD",1);


var cor5 = "#000000";
nuvem.beginPath();
estrutura(x,y);
texto(472,402,arranjo005[i],cor5);
texto(522,502,arranjo005[i+1],cor5);
texto(572,602,arranjo005[i+2],cor5);
texto(622,702,arranjo005[i+3],cor5);

texto(281+x,376+y, arranjo005[i],arranjo001[i]);
texto(520,500,arranjo005[i+1],arranjo001[i+1]);
texto(570,600,arranjo005[i+2],arranjo001[i+2]);
texto(620,700,arranjo005[i+3],arranjo001[i+3]);


};







function todo2(x,y){

i--;
nuvem.beginPath();
//nuvem.globalAlpha = alfa;
nuvem.fillStyle = "#ffffff";
nuvem.fillRect(0,0,1300,1300);
nuvem.fill();

//'20.869.101',1000,'518.519.330',900,'R$1.128',800,'853',700,'1491',600

nuvem.beginPath();
nuvem.fillStyle = "#104E8B";
nuvem.font = '25px Arial, serif';
nuvem.fillText(arranjo009[i+3],130,630+arranjo008[i+3]);
nuvem.fillText(arranjo011[i+3],250,630+arranjo010[i+3]);
nuvem.fillText(arranjo013[i+3],390,530+arranjo012[i+3]);
nuvem.fillText(arranjo015[i+3],530,460+arranjo014[i+3]);
nuvem.fillText(arranjo017[i+3],650,420+arranjo016[i+3]);
nuvem.fill();

nuvem.beginPath();
nuvem.fillStyle = "#104E8B";
nuvem.font = '40px Arial, serif';
nuvem.fillText(arranjo007[i+3],0,50);

nuvem.fill();

nuvem.beginPath();

desenhar(447+x,-53+y,arranjo016[i],"#cccccc","#cccccc","#cccccc",0.2);
desenhar(547+x,22+y,arranjo016[i+1],"#cccccc","#cccccc","#cccccc",0.3);
desenhar(647+x,97+y,arranjo016[i+2],"#cccccc","#cccccc","#cccccc",0.5);
desenhar(747+x,172+y,arranjo016[i+3],"#104E8B","#63B8FF","#3A5FCD",1);

desenhar(338+x,-2+y,arranjo014[i],"#cccccc","#cccccc","#cccccc",0.2);
desenhar(438+x,73+y,arranjo014[i+1],"#cccccc","#cccccc","#cccccc",0.3);
desenhar(538+x,148+y,arranjo014[i+2],"#cccccc","#cccccc","#cccccc",0.5);
desenhar(638+x,223+y,arranjo014[i+3],"#104E8B","#63B8FF","#3A5FCD",1);

desenhar(219+x,49+y,arranjo012[i],"#cccccc","#cccccc","#cccccc",0.2);
desenhar(319+x,124+y,arranjo012[i+1],"#cccccc","#cccccc","#cccccc",0.3);
desenhar(419+x,199+y,arranjo012[i+2],"#cccccc","#cccccc","#cccccc",0.5);
desenhar(519+x,274+y,arranjo012[i+3],"#104E8B","#63B8FF","#3A5FCD",1);

nuvem.beginPath();
desenhar(100+x,100+y,arranjo010[i],"#cccccc","#cccccc","#cccccc",0.2);
desenhar(200+x,175+y,arranjo010[i+1],"#cccccc","#cccccc","#cccccc",0.3);
desenhar(300+x,250+y,arranjo010[i+2],"#cccccc","#cccccc","#cccccc",0.5);
desenhar(400+x,325+y,arranjo010[i+3],"#104E8B","#63B8FF","#3A5FCD",1);

nuvem.beginPath();
desenhar(-19+x,151+y,arranjo008[i],"#cccccc","#cccccc","#cccccc",0.2);
desenhar(81+x,226+y,arranjo008[i+1],"#cccccc","#cccccc","#cccccc",0.3);
desenhar(181+x,301+y,arranjo008[i+2],"#cccccc","#cccccc","#cccccc",0.5);
desenhar(281+x,376+y,arranjo008[i+3],"#104E8B","#63B8FF","#3A5FCD",1);


var cor5 = "#000000";
nuvem.beginPath();
estrutura(x,y);
texto(472,402,arranjo005[i],cor5);
texto(522,502,arranjo005[i+1],cor5);
texto(572,602,arranjo005[i+2],cor5);
texto(622,702,arranjo005[i+3],cor5);

texto(281+x,376+y, arranjo005[i],arranjo001[i]);
texto(520,500,arranjo005[i+1],arranjo001[i+1]);
texto(570,600,arranjo005[i+2],arranjo001[i+2]);
texto(620,700,arranjo005[i+3],arranjo001[i+3]);


};





todo(-170,150);

