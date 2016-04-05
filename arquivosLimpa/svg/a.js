var q = document.getElementById('quadrado');
var btn = document.getElementById('btn');
var red = document.getElementById('btn-red');

btn.addEventListener('click', function(){
  q.style.transition = 'all 1s' // aplico transicao para qualquer elemento
  q.style.width= '200px' // mudo a largura do elemento
  q.style.height= '150px' // mudo a altura do elemento
});

red.addEventListener('click', function(){
  q.classList.add('vermelhinho');
});