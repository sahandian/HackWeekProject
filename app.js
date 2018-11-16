$(document).ready(function(){
	$.ajax({
		url: "data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var expense = [];
			var amount = [];
            var coloR = [];
			
           

            var dynamicColors = function() {
            var r = Math.floor(Math.random() * 255);
            var g = Math.floor(Math.random() * 255);
            var b = Math.floor(Math.random() * 255);
            return "rgb(" + r + "," + g + "," + b + ")";
            };
            
            for (var i in data) {
            expense.push(data[i].type);
				amount.push(data[i].amount);
            coloR.push(dynamicColors());
            }
            
			var chartdata = {
				labels: expense,
				datasets : [
					{
						label: 'Expenses',
						backgroundColor: coloR,
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: amount
					}
				]
			};
            
            

			var ctx = $("#mycanvas");
            var ctx2 = $("#mycanvas2");
			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
            
            var pieGraph = new Chart(ctx2, {
				type: 'pie',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});