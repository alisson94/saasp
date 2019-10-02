var ctx = document.getElementById('myChart');

function iniciarGrafico(lista){
    var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        datasets: [{
            label: 'Pendente',
            data: [lista[0][1], lista[1][1], lista[2][1], lista[3][1], lista[4][1], lista[5][1], lista[6][1], lista[7][1], lista[8][1], lista[9][1], lista[10][1], lista[11][1]],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
            ],
            borderWidth: 2
        },
		{
            label: 'Em processo',
            data: [lista[0][2], lista[1][2], lista[2][2], lista[3][2], lista[4][2], lista[5][2], lista[6][2], lista[7][2], lista[8][2], lista[9][2], lista[10][2], lista[11][2]],
            backgroundColor: [
                'rgba(255, 152, 0, 1)',
                'rgba(255, 152, 0, 1)',
                'rgba(255, 152, 0, 1)',
                'rgba(255, 152, 0, 1)',
                'rgba(255, 152, 0, 1)',
                'rgba(255, 152, 0, 1)',
                'rgba(255, 152, 0, 1)',
                'rgba(255, 152, 0, 1)',
                'rgba(255, 152, 0, 1)',
                'rgba(255, 152, 0, 1)',
                'rgba(255, 152, 0, 1)',
                'rgba(255, 152, 0, 1)',
            ],
            borderColor: [
                'rgba(255, 152, 0, 1)',
                'rgba(255, 152, 0, 1)',
                'rgba(255, 152, 0, 1)',
                'rgba(255, 152, 0, 1)',
                'rgba(255, 152, 0, 1)',
                'rgba(255, 152, 0, 1)',
                'rgba(255, 152, 0, 1)',
                'rgba(255, 152, 0, 1)',
                'rgba(255, 152, 0, 1)',
                'rgba(255, 152, 0, 1)',
                'rgba(255, 152, 0, 1)',
                'rgba(255, 152, 0, 1)',
            ],
            borderWidth: 2
        },
        {
            label: 'Resolvido',
            data: [lista[0][0], lista[1][0], lista[2][0], lista[3][0], lista[4][0], lista[5][0], lista[6][0], lista[7][0], lista[8][0], lista[9][0], lista[10][0], lista[11][0]],
            backgroundColor: [
                'rgba(76, 175, 80, 1)',
                'rgba(76, 175, 80, 1)',
                'rgba(76, 175, 80, 1)',
                'rgba(76, 175, 80, 1)',
                'rgba(76, 175, 80, 1)',
                'rgba(76, 175, 80, 1)',
                'rgba(76, 175, 80, 1)',
                'rgba(76, 175, 80, 1)',
                'rgba(76, 175, 80, 1)',
                'rgba(76, 175, 80, 1)',
                'rgba(76, 175, 80, 1)',
                'rgba(76, 175, 80, 1)',
            ],
            borderColor: [
                'rgba(76, 175, 80, 1)',
                'rgba(76, 175, 80, 1)',
                'rgba(76, 175, 80, 1)',
                'rgba(76, 175, 80, 1)',
                'rgba(76, 175, 80, 1)',
                'rgba(76, 175, 80, 1)',
                'rgba(76, 175, 80, 1)',
                'rgba(76, 175, 80, 1)',
                'rgba(76, 175, 80, 1)',
                'rgba(76, 175, 80, 1)',
                'rgba(76, 175, 80, 1)',
                'rgba(76, 175, 80, 1)',
            ],
            borderWidth: 2
        }
        ]

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
}
