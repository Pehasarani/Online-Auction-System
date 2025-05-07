/*----------------CHARTS------------------*/

//linechart
var options = {
    series: [{
      name: "Desktops",
      data: [10, 41, 35, 51, 49, 50, 69, 91, 148]
  }],

    chart: {
    height: 350,
    type: 'line',
    zoom: {
      enabled: false
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: 'straight'
  },
  title: {
    text: 'Sales by week',
    align: 'left',
    style: {
        color: "#f5f7ff",
    },
  },
  grid: {
    row: {
      colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
      opacity: 0.5
    },
  },
  xaxis: {
    categories: ['Mon', 'Tues', 'Wed', 'Thurs', 'Friday', 'Saturday', 'Sunday'],
    title:{
        style: {
            color: "#f5f7ff",
        },
    },
  
  },

  };


  /*---------PIE CHART--------------*/ 

  var chart = new ApexCharts(document.querySelector("#line-chart"), options);
  chart.render();


  var options = {
    series: [67, 55, 13, 43, 22],
    chart: {
    width: 550,
    type: 'pie',
  },
  labels: ['Buyers', 'Sellers', 'New members', 'Un-registered members', 'Others'],
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 300,
      },
      legend: {
        position: 'bottom'
      }
    }
  }]
  };

  var chart = new ApexCharts(document.querySelector("#pie-chart"), options);
  chart.render();







 
    

