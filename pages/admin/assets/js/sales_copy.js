


//bar
var ctxB = document.getElementById("barChart").getContext('2d');

let Tusers = parseFloat(document.getElementById("ad-total-user").innerHTML);
let Ausers = parseFloat(document.getElementById("ad-active-user").innerHTML);
let Inusers = parseFloat(document.getElementById("ad-inactive-user").innerHTML);
let Tproduct = parseFloat(document.getElementById("ad-total-products").innerHTML);
let Tcompnay = parseFloat(document.getElementById("ad-total-company").innerHTML);
let Acompnay = parseFloat(document.getElementById("ad-active-company").innerHTML);
let Incompnay = parseFloat(document.getElementById("ad-inactive-company").innerHTML);
let Torders = parseFloat(document.getElementById("ad-total-order").innerHTML);

console.log(Tusers,Ausers,Inusers,Tproduct,Tcompnay,Acompnay,Incompnay,Torders);

var myBarChart = new Chart(ctxB, {
  type: 'bar',
  data: {
    labels: ["total-users","active-users","inactive-users","total-products","total-companies","active-companies","inactive-companies","total-orders"],
    datasets: [{
      label: '# weekly sales',
      
      data: [Tusers,Ausers,Inusers,Tproduct,Tcompnay,Acompnay,Incompnay,Torders],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});