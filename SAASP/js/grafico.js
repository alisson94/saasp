let primeiroGrafico = document.getElementById('primeiroGrafico').getContext('2d');

let chart = new Chart(primeiroGrafico, {
    type: 'line',
    data: {
        labels: ['2000', '2001', '2002', '2003', '2004', '2005'],
        datasets: [{
            label: 'Crecimento Populacional',
            data: [173448346, 175885229, 178276128, 180619108, 182911487, 185150806],
            backgroundColor: "#ff2200",
            borderColor: "#0000ff"
        }]
    }
