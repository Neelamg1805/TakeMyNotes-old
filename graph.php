

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<body>
<canvas id="myChart" class="card shadow-lg" style="width:100%;max-width:800px;height:550px;"></canvas>

<script>
const xValues = [100,200,300,400,500,600,700,800,900,1000,1100,1200,1300];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{ 
      data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
      borderColor: "red",
      fill: false
    }]
  },
  options: {
    legend: {display: false}
  }
});
</script>
