/*
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



/*------------------------Infográfico 001 (BARRAS) ------------------------*/


var grafico1 = new Array('Título do Infográfico 001',"#b0e0e6","#ffffff");

var dados005 = new Array('0','100','200','300','400','500','600','700','800','900');



var dados000 = new Array('texto0a','v0b',500,"#ff0000");

var dados001 = new Array('texto1a','v1b',340,"#ffd700");

var dados002 = new Array('texto2a','v2b',120,"#0000ff");

var dados003 = new Array('texto3a','v3b',377,"#008000");

var dados004 = new Array('texto4a','v4b',876,"#ff00ff");





/*------------------------Infográfico 001------------------------*/


/*------------------------Infográfico 002 (LINHAS) ------------------------*/


var grafico2 = new Array('Título do Infográfico 002',"#fffacd","#cccccc");

var dados011 = new Array("a","b","c","d","e","f","g","h","i","j");



var dados006 = new Array(100,300,200,100,100,300,100,200,"valor001","green");

var dados007 = new Array(10,90,200,250,150,300,100,322,"valor002","red");

var dados008 = new Array(100,200,300,400,500,600,700,800,"valor003","blue");

var dados009 = new Array(700,500,600,100,500,300,400,540,"valor004","pink");





/*------------------------Infográfico 002------------------------*/



/*------------------------Código 001------------------------*/

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


/*------------------------Código 001------------------------*/


/*------------------------Código 002------------------------*/

var canvas2 = document.getElementById('barras2');
var linha = canvas2.getContext('2d');

linha.scale(0.8,0.8);


function regua2(x,y,titulo,cor,corLinha)
{

linha.beginPath();
linha.fillStyle = cor;
linha.fillRect(0,0,1500,1500);
linha.fill();

for(i=0; i<10; i++){

linha.beginPath();
linha.lineWidth = "10";
linha.strokeStyle = corLinha;
linha.moveTo(x,y);
linha.lineTo(x+(i*100),y);
linha.lineTo(x+(i*100),y+10)
linha.stroke();

linha.beginPath();
linha.lineWidth = "1";
linha.moveTo(x,y);
linha.lineTo(x,y-(i*100));
linha.lineTo(x+1000,y-(i*100));
linha.stroke();

}

linha.beginPath();
linha.fillStyle = "#000000";
linha.font = '70px serif';
linha.fillText(titulo,200,120,1000);
linha.fill();

};

function lin(v0,v1,v2,v3,v4,v5,v6,v7,texto,cor){
linha.beginPath();
linha.strokeStyle = cor;
linha.lineWidth = "10";
linha.lineJoin = "round";
linha.lineCap = "square";
linha.moveTo(200,1200-v0);
linha.lineTo(300,1200-v1);
linha.lineTo(400,1200-v2);
linha.lineTo(500,1200-v3);
linha.lineTo(600,1200-v4);
linha.lineTo(700,1200-v5);
linha.lineTo(800,1200-v6);
linha.lineTo(900,1200-v7);
linha.stroke();

linha.font = '50px serif';
linha.fillStyle = cor;
linha.fillText(texto,950,1200-v7);

};


function num2(medida,n){
linha.beginPath();
linha.fillStyle = "#000000";
linha.font = '50px serif';
linha.fillText(medida,60,n);
linha.fill();

};


regua2(200,1200,grafico2[0],grafico2[1],grafico2[2]);

lin(dados006[0],dados006[1],dados006[2],dados006[3],dados006[4],dados006[5],dados006[6],dados006[7],dados006[8],dados006[9]);

lin(dados007[0],dados007[1],dados007[2],dados007[3],dados007[4],dados007[5],dados007[6],dados007[7],dados007[8],dados007[9]);

lin(dados008[0],dados008[1],dados008[2],dados008[3],dados008[4],dados008[5],dados008[6],dados008[7],dados008[8],dados008[9]);

lin(dados009[0],dados009[1],dados009[2],dados009[3],dados009[4],dados009[5],dados009[6],dados009[7],dados009[8],dados009[9]);



num2(dados011[0],1200);
num2(dados011[1],1100);
num2(dados011[2],1000);
num2(dados011[3],900);
num2(dados011[4],800);
num2(dados011[5],700);
num2(dados011[6],600);
num2(dados011[7],500);
num2(dados011[8],400);
num2(dados011[9],300);


/*------------------------Código 002------------------------*/