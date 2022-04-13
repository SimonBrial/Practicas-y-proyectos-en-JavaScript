/* ------------------------------------------------------ */
document.getElementById('btn-9').addEventListener('click',n9);
document.getElementById('btn-8').addEventListener('click',n8);
document.getElementById('btn-7').addEventListener('click',n7);
document.getElementById('btn-6').addEventListener('click',n6);
document.getElementById('btn-5').addEventListener('click',n5);
document.getElementById('btn-4').addEventListener('click',n4);
document.getElementById('btn-3').addEventListener('click',n3);
document.getElementById('btn-2').addEventListener('click',n2); 
document.getElementById('btn-1').addEventListener( "click", n1); 
document.getElementById('btn-0').addEventListener('click',n0);
/* document.getElementById('btn-DEL').addEventListener('click',nDEL);
document.getElementById('btn-AC').addEventListener('click',nAC); */
document.getElementById('btn-mult').addEventListener('click',oMult);
/* document.getElementById('btn-dec').addEventListener('click',nDec);
document.getElementById('btn-pot').addEventListener('click',oPot); */
document.getElementById('btn-sum').addEventListener('click',oSum);
document.getElementById('btn-div').addEventListener('click',oDiv);
document.getElementById('btn-res').addEventListener('click',oRes);
document.getElementById('btn-igual').addEventListener('click', showResult);
/* ------------------------------------------------------ */

/* ---------------- Funciones de Llamado ---------------- */

function n1(){
    let actual = document.getElementById('resultado').innerHTML;
    let sumado = document.getElementById("btn-1").innerHTML;
    document.getElementById('resultado').innerHTML = actual + sumado;
    console.log(sumado);
}
function n2(){
    let actual = document.getElementById('resultado').innerHTML;
    let sumado = document.getElementById("btn-2").innerHTML;
    document.getElementById('resultado').innerHTML = actual + sumado;
    console.log(sumado);
}
function n3(){
    let actual = document.getElementById('resultado').innerHTML;
    let sumado = document.getElementById("btn-3").innerHTML;
    document.getElementById('resultado').innerHTML = actual + sumado;
    console.log(sumado);
}
function n4(){
    let actual = document.getElementById('resultado').innerHTML;
    let sumado = document.getElementById("btn-4").innerHTML;
    document.getElementById('resultado').innerHTML = actual + sumado;
    console.log(sumado);
}
function n5(){
    let actual = document.getElementById('resultado').innerHTML;
    let sumado = document.getElementById("btn-5").innerHTML;
    document.getElementById('resultado').innerHTML = actual + sumado;
    console.log(sumado);
}
function n6(){
    let actual = document.getElementById('resultado').innerHTML;
    let sumado = document.getElementById("btn-6").innerHTML;
    document.getElementById('resultado').innerHTML = actual + sumado;
    console.log(sumado);
}
function n7(){
    let actual = document.getElementById('resultado').innerHTML;
    let sumado = document.getElementById("btn-7").innerHTML;
    document.getElementById('resultado').innerHTML = actual + sumado;
    console.log(sumado);
}
function n8(){
    let actual = document.getElementById('resultado').innerHTML;
    let sumado = document.getElementById("btn-8").innerHTML;
    document.getElementById('resultado').innerHTML = actual + sumado;
    console.log(sumado);
}
function n9(){
    let actual = document.getElementById('resultado').innerHTML;
    let sumado = document.getElementById("btn-9").innerHTML;
    document.getElementById('resultado').innerHTML = actual + sumado;
    console.log(sumado);
}
function n0(){
    let actual = document.getElementById('resultado').innerHTML;
    let sumado = document.getElementById("btn-0").innerHTML;
    document.getElementById('resultado').innerHTML = actual + sumado;
    console.log(sumado);
}

/* ------------------------------------------------------ */

/* --------------- Operaciones matematicas -------------- */

function oSum() {
  let actual = document.getElementById('resultado').innerHTML;
  let sumado = document.getElementById("btn-sum").innerHTML;
  document.getElementById('resultado').innerHTML = actual +sumado;
}
function oRes() {
  let actual = document.getElementById('resultado').innerHTML;
  let sumado = document.getElementById("btn-res").innerHTML;
  document.getElementById('resultado').innerHTML = actual +sumado;
}
function oDiv() {
  let actual = document.getElementById('resultado').innerHTML;
  let sumado = document.getElementById("btn-div").innerHTML;
  document.getElementById('resultado').innerHTML = actual +sumado;
}
function oMult() {
  let actual = document.getElementById('resultado').innerHTML;
  let sumado = document.getElementById("btn-mult").innerHTML;
  document.getElementById('resultado').innerHTML = actual+sumado;
}
function oPot(){
    let actual = document.querySelector('#resultado').innerHTML;
    let sumado = document.querySelector("#btn-pot").innerHTML;
    document.querySelector('#resultado').innerHTML = actual + sumado;
    console.log(sumado);
}

/* ------------------------------------------------------ */

/* --------------- Muestra los resultados --------------- */

function showResult(){
    let actual = document.querySelector('#resultado').innerHTML;
    let suma = actual.indexOf('+');
    let resta = actual.indexOf('-');
    let div = actual.indexOf('÷');
    let mult = actual.indexOf('x');
    let pot = actual.indexOf('**')

    /* Si "indexOf" es distinto de -1, se pulso el botón */

    if(suma !== -1){
        arr = actual.split('+',2);
        res = parseFloat(arr[0]) + parseFloat(arr[1]);
        document.querySelector("#resultado").innerHTML = res;

    } else if (resta !== -1) {
      arr = actual.split("-", 2);
      res = parseFloat(arr[0]) - parseFloat(arr[1]);
      document.querySelector("#resultado").innerHTML = res;

    } else if (div !== -1) {
       arr = actual.split("÷", 2);
        res = parseFloat(arr[0]) / parseFloat(arr[1]);
       document.querySelector('#resultado').innerHTML = res;

    } else if (mult !== -1) {
       arr = actual.split("x", 2);
        res = parseFloat(arr[0]) * parseFloat(arr[1]);
        document.querySelector('#resultado').innerHTML = res;

    } else if (pot !== -1){
        arr = actual.split("**",1);
        console.log(actual);
        res = (parseFloat(arr[0])*10) + parseFloat(arr[1]);
        document.querySelector('#resultado').innerHTML = res;
    }
}

/* ------------------------------------------------------ */





