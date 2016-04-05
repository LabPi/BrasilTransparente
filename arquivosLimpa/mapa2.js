/*
 * Jesus Cristo_O Caminho, A Verdade e A Vida
 */



/*------------------------Infogr谩fico 002 (LINHAS) ------------------------*/



var graficox = new Array(-32,-65,64,-96,-96,-96,0,-33,32,-32,32,-161,65,-128,32,-32,96,-258,32,-64,65,-32,32,0,96,32,33,0,64,0,0,-64,0,-97,-32,-64,-161,-225,0,-64,64);
var graficoy = new Array(880,860,840,830,830,835,815,795,770,760,745,740,735,715,705,720,680,685,695,700,695,715,705,735,730,745,765,790,800,810,840,835,855,885,885,900,905,935,945,946,960,965,970,975,960,960,880,885,880,865,880);

/*------------------------Infogr谩fico 002------------------------*/






/*------------------------C贸digo 002------------------------*/

var canvas2 = document.getElementById('barras2');
var linha = canvas2.getContext('2d');



linha.scale(0.7,0.7);



function mg(){
linha.beginPath();
linha.fillStyle = "rgba(0,0,256,0.4)";
linha.fillRect(0,0,1500,3000);
linha.fill();




a = 1; 


linha.beginPath();
linha.lineWidth = "2";
linha.strokeStyle = "#ffffff";
linha.fillStyle = "rgba(256,0,0,0.3)";
linha.moveTo(graficox[a],graficoy[a]);
linha.lineTo(graficox[a+1],graficoy[a+1]);
linha.lineTo(graficox[a+2],graficoy[a+2]);
linha.lineTo(graficox[a+3],graficoy[a+3]);
linha.lineTo(graficox[a+4],graficoy[a+4]);
linha.lineTo(graficox[a+5],graficoy[a+5]);
linha.lineTo(graficox[a+6],graficoy[a+6]);
linha.lineTo(graficox[a+7],graficoy[a+7]);
linha.lineTo(graficox[a+8],graficoy[a+8]);
linha.lineTo(graficox[a+9],graficoy[a+9]);
linha.lineTo(graficox[a+10],graficoy[a+10]);
linha.lineTo(graficox[a+11],graficoy[a+11]);
linha.lineTo(graficox[a+12],graficoy[a+12]);
linha.lineTo(graficox[a+13],graficoy[a+13]);
linha.lineTo(graficox[a+14],graficoy[a+14]);
linha.lineTo(graficox[a+15],graficoy[a+15]);
linha.lineTo(graficox[a+16],graficoy[a+16]);
linha.lineTo(graficox[a+17],graficoy[a+17]);
linha.lineTo(graficox[a+18],graficoy[a+18]);
linha.lineTo(graficox[a+19],graficoy[a+19]);
linha.lineTo(graficox[a+20],graficoy[a+20]);
linha.lineTo(graficox[a+21],graficoy[a+21]);
linha.lineTo(graficox[a+22],graficoy[a+22]);
linha.lineTo(graficox[a+23],graficoy[a+23]);
linha.lineTo(graficox[a+24],graficoy[a+24]);
linha.lineTo(graficox[a+25],graficoy[a+25]);
linha.lineTo(graficox[a+26],graficoy[a+26]);
linha.lineTo(graficox[a+27],graficoy[a+27]);
linha.lineTo(graficox[a+28],graficoy[a+28]);
linha.lineTo(graficox[a+29],graficoy[a+29]);
linha.lineTo(graficox[a+30],graficoy[a+30]);
linha.lineTo(graficox[a+31],graficoy[a+31]);
linha.lineTo(graficox[a+32],graficoy[a+32]);
linha.lineTo(graficox[a+33],graficoy[a+33]);
linha.lineTo(graficox[a+34],graficoy[a+34]);
linha.lineTo(graficox[a+35],graficoy[a+35]);
linha.lineTo(graficox[a+36],graficoy[a+36]);
linha.lineTo(graficox[a+37],graficoy[a+37]);
linha.lineTo(graficox[a+38],graficoy[a+38]);
linha.lineTo(graficox[a+39],graficoy[a+39]);
linha.lineTo(graficox[a+40],graficoy[a+40]);
linha.lineTo(graficox[a+41],graficoy[a+41]);
linha.lineTo(graficox[a+42],graficoy[a+42]);
linha.lineTo(graficox[a+43],graficoy[a+43]);
linha.lineTo(graficox[a+44],graficoy[a+44]);
linha.lineTo(graficox[a+45],graficoy[a+45]);
linha.lineTo(graficox[a+46],graficoy[a+46]);
linha.lineTo(graficox[a+47],graficoy[a+47]);
linha.lineTo(graficox[a+48],graficoy[a+48]);
linha.lineTo(graficox[a+49],graficoy[a+49]);
linha.lineTo(graficox[a+50],graficoy[a+50]);
linha.lineTo(graficox[a+51],graficoy[a+51]);

linha.closePath();
linha.stroke();
linha.fill();

for(i=0; i<51; i++){

var t = i+1;
var s  = t+1;
linha.beginPath();
linha.lineWidth = "7";
linha.strokeStyle = "#ffffff";
linha.fillStyle = "#000000";
linha.moveTo(graficox[i],graficoy[i]);
linha.lineTo(graficox[t],graficoy[t]);
//linha.lineTo(graficox[s],graficoy[s]);
linha.closePath();
linha.stroke();
linha.fill();

};

};


mg();



/*------------------------C贸digo 002------------------------*/