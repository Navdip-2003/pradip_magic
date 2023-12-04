
//bar

let order1    = parseFloat(document.getElementById("co-order").innerHTML);
let return1   = parseFloat( document.getElementById("co-return").innerHTML);
let cancel1   = parseFloat(document.getElementById("co-cancel").innerHTML);
let review1   = parseFloat(document.getElementById("co-review").innerHTML);
  let save1   = parseFloat(document.getElementById("co-save").innerHTML);
let feedback1 = parseFloat(document.getElementById("co-feedback").innerHTML);

console.log(order1,return1,cancel1,return1,save1,feedback1);

var ctxB = document.getElementById("barChart").getContext('2d');
var myBarChart = new Chart(ctxB, {
  type: 'bar',
  data: {
    labels: ["Orders", "Return", "Cancel", "Review", "Save", "Feedbacks"],
    datasets: [{
      label: '# Todays status',
      
      data: [order1, return1, cancel1, review1, save1, feedback1],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
       
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
       
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



