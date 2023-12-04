// Line chart
let dataline = document.getElementById('line-chart');

new Chart(dataline,{
    type: 'line',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July','August','September','October','November','December'],
      datasets: [
        {
          label: 'Notification',
          data: [30, 15, 62, 65, 61, 65, 40,5,40,50,25,60],
          borderColor: [
            '#D10024',
          ]
        },
      ],
    },
  });




