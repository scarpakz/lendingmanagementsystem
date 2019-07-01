
var data = [{
    values: [19, 26, 55],
    labels: ['Past Due', 'Paid on Time', 'Haven"t Paid'],
    type: 'pie',
    title: 'Clients'
  }];
  
  var layout = {
    height: 400,
    width: 500
  };
  
  Plotly.newPlot('reports', data, layout);

// USERS
