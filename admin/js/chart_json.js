$(document).ready(function(){

	$.ajax({
		url:"http://adm.perpusweb.pal/js/data_chart.php", 
		method:"GET",
		success: function(data){
			var Horror = [];
			var Teknologi = [];
			var Ensiklopedi = [];
			var	Agama	=	[];
			var	Fiksi 	=	[];
			var	NonFiksi =	[];
			var	Pendidikan	= [];

			for (var i in data) {
				Horror.push(data[i].Horror);
				Teknologi.push(data[i].Teknologi);
				Ensiklopedi.push(data[i].Ensiklopedi);
				Agama.push(data[i].Agama);
				Fiksi.push(data[i].Fiksi);
				NonFiksi.push(data[i].NonFiksi);
				Pendidikan.push(data[i].Pendidikan);
			}

			var getPB = document.getElementById('pieBuku').getContext('2d');
			var pieBuku = new Chart(getPB, {
			  type: 'pie',
			  data: {
			  labels: ["Horror", "Teknologi", "Ensiklopedi", "Agama", "Fiksi", "Non-Fiksi", "Pendidikan"],
		      datasets: [{
		      backgroundColor: ["#2ecc71", "#3498db", "#95a5a6", "#9b59b6", "#f1c40f", "#e74c3c", "#34495e"],
		      data: [Horror, Teknologi, Ensiklopedi, Agama, Fiksi, NonFiksi, Pendidikan]
      			}]
  			}  
		});

		}
	});
});

/*
$(document).ready(function() {

    $.getJSON("data.php", function (result) {

        var tempData = {
            labels : result,
            datasets : [{
                fillColor : "rgba(172,194,132,0.4)",
                strokeColor : "#ACC26D",
                pointColor : "#fff",
                pointStrokeColor : "#9DB86D",
                data : result
            }]
        }

        var temp = document.getElementById('compradores').getContext('2d');
        new Chart(temp).Line(tempData);
    });
}); */