var getLP = document.getElementById('linePengunjung').getContext('2d');
var linePengunjung = new Chart(getLP, {
  type: 'line',
  data: {
    labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum`at', 'Sabtu', 'Minggu'],

    datasets: [{
      label: 'TKJ',
      data: [12, 15, 18, 20, 32, 16, 7],
      backgroundColor: "rgba(39, 174, 96, 0.7)"
    }, {
      label: 'GRBK',
      data: [10, 14, 16, 26, 27, 15, 10],
      backgroundColor: "rgba(192, 57, 43, 0.7)"
    }, {
      label: 'TPTU',
      data: [9, 13, 19, 21, 24, 13, 21],
      backgroundColor: "rgba(41, 128, 185, 0.7)"
    }]
  }
});

var getPB = document.getElementById('pieBuku').getContext('2d');
var pieBuku = new Chart(getPB, {
  type: 'pie',
  data: {
    labels: ["Horror", "Teknologi", "Ensiklopedi", "Agama", "Fiksi", "Non-Fiksi", "Pendidikan"],
    datasets: [{
      backgroundColor: [
        "#2ecc71",
        "#3498db",
        "#95a5a6",
        "#9b59b6",
        "#f1c40f",
        "#e74c3c",
        "#34495e"
      ],
      data: [12, 19, 3, 9, 28, 24, 7]
      }]
  }  
});

var getRB = document.getElementById('rdrBuku').getContext('2d');
var pieBuku = new Chart(getRB, {
  type: 'bar',
  data: {
    labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum`at', 'Sabtu', 'Minggu'],
    datasets: [{

      label: 'Laki-laki',
      data: [2, 29, 5, 10, 2, 3, 10],
      backgroundColor: "rgb(41, 128, 185)"

    }, {
      label: 'Perempuan',
      data: [4, 13, 1, 7, 4, 8, 5],
      backgroundColor: "rgb(192, 57, 43)"

      }]
  }  
});