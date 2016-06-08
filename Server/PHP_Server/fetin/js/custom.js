//Timer for messages and tasks
var i = 3, j=5, k=9;

function incrementI() {
  i++;  
  document.getElementById('quickMessages').innerHTML = i;
}
setInterval('incrementI()', 5000);

function incrementJ() {
  j++;
  document.getElementById('quickAlerts').innerHTML = j;
}
setInterval('incrementJ()', 12000);

function incrementK() {
  k++;
  document.getElementById('quickShop').innerHTML = j;
}
setInterval('incrementK()', 9000);
