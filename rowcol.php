<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    



<div class="container-fluid bg-light overflow-hidden">
        
        <div class="row mt-5 px-4">

            <div class="col bg-white mb-3 shadow-sm">
                <div class="row mt-2">
                    <div class="col d-flex justify-content-between">
                    <span><b>Employment Status</b></span><i class="bi bi-three-dots-vertical"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="progress mt-2 mx-1">
                            <div class="progress-bar flex-fill" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                <span class="progress-label">15%</span>
                            </div>
                            <div class="progress-bar bg-success flex-fill" role="progressbar" style="width: 85%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                <span class="progress-label">85%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-1 mt-4 mx-1 border-bottom">
                    <div class="col d-flex justify-content-between">
                        <span><b>Total</b></span><span class="fw-light">108</span>
                    </div>
                </div>
                <div class="row mb-1 mx-1 border-bottom">
                    <div class="col d-flex justify-content-between">
                        <div class="col"><i class="bi bi-square-fill text-primary me-1"></i><span>Permanent</span></div>
                        <div class="col d-flex justify-content-between"><span class="fw-light ms-5">16</span><span class="fw-light">15%</span></div>
                    </div>
                </div>
                <div class="row mx-1 border-bottom" style="margin-bottom:9rem;">
                    <div class="col d-flex justify-content-between">
                        <div class="col"><i class="bi bi-square-fill text-success me-1"></i><span>Contract</span></div>
                        <div class="col d-flex justify-content-between"><span class="fw-light ms-5">92</span><span class="fw-light">85%</span></div>
                    </div>
                </div>
            </div>

            <div class="col bg-white mb-3 shadow-sm">
                <div class="row mt-2">
                    <div class="col d-flex justify-content-between">
                        <span class="mb-3"><b>Length of Service</b></span><i class="bi bi-three-dots-vertical"></i>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col">
                        <canvas id="myChart" style="width:auto;"></canvas>
                    </div>
                </div>
            </div>

            <div class="col bg-white mb-3 shadow-sm">
                <div class="row mt-2">
                    <div class="col d-flex justify-content-between">
                        <span><b>Job Level</b></span></span><i class="bi bi-three-dots-vertical"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="progress mt-2 mx-1">
                            <div class="progress-bar" role="progressbar" style="width: 81.5%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                <span class="progress-label">81.5%</span>
                            </div>
                            <div class="progress-bar bg-success " role="progressbar" style="width: 10.2%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                <span class="progress-label">10.2%</span>
                            </div>
                            <div class="progress-bar bg-danger " role="progressbar" style="width: 5.6%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                <span class="progress-label">5.6%</span>
                            </div>
                            <div class="progress-bar bg-warning " role="progressbar" style="width: 0.9%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                <span class="progress-label">0.9%</span>
                            </div>
                            <div class="progress-bar bg-dark" role="progressbar" style="width: 1.8%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                <span class="progress-label">1.8%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-1 mt-4 mx-1 border-bottom">
                    <div class="col d-flex justify-content-between">
                        <span><b>Total</b></span><span class="fw-light">108</span>
                    </div>
                </div>
                <div class="row mb-1 mx-1 border-bottom">
                    <div class="col d-flex justify-content-between">
                        <div class="col"><i class="bi bi-square-fill text-primary me-1"></i><span>Staff</span></div>
                        <div class="col d-flex justify-content-between"><span class="fw-light ms-5">16</span><span class="fw-light">15%</span></div>
                    </div>
                </div>
                <div class="row mb-1 mx-1 border-bottom">
                    <div class="col d-flex justify-content-between">
                        <div class="col"><i class="bi bi-square-fill text-success me-1"></i><span>Supervisor</span></div>
                        <div class="col d-flex justify-content-between"><span class="fw-light ms-5">92</span><span class="fw-light">85%</span></div>
                    </div>
                </div>
                <div class="row mb-1 mx-1 border-bottom">
                    <div class="col d-flex justify-content-between">
                        <div class="col"><i class="bi bi-square-fill text-danger me-1"></i><span>Manager</span></div>
                        <div class="col d-flex justify-content-between"><span class="fw-light ms-5">92</span><span class="fw-light">85%</span></div>
                    </div>
                </div>
                <div class="row mb-1 mx-1 border-bottom">
                    <div class="col d-flex justify-content-between">
                        <div class="col"><i class="bi bi-square-fill text-warning me-1"></i><span>CEO</span></div>
                        <div class="col d-flex justify-content-between"><span class="fw-light ms-5">92</span><span class="fw-light">85%</span></div>
                    </div>
                </div>
                <div class="row mb-5 mx-1 border-bottom">
                    <div class="col d-flex justify-content-between">
                        <div class="col"><i class="bi bi-square-fill text-dark me-1"></i><span>HRD</span></div>
                        <div class="col d-flex justify-content-between"><span class="fw-light ms-5">92</span><span class="fw-light">85%</span></div>
                    </div>
                </div>
            </div>

            <div class="col mb-3 bg-white shadow-sm">
                <div class="row mt-2">
                    <div class="col d-flex justify-content-between">
                        <span><b>Gender Diversity</b></span></span><i class="bi bi-three-dots-vertical"></i>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                    <canvas id="donutChart" height="150"></canvas>
                    </div>
                </div>
                <div class="row mb-1 mt-4 mx-1 border-bottom">
                    <div class="col d-flex justify-content-between">
                        <span><b>Total</b></span><span class="fw-light">108</span>
                    </div>
                </div>
                <div class="row mb-1 mx-1 border-bottom">
                    <div class="col d-flex justify-content-between">
                        <div class="col"><i class="bi bi-square-fill text-primary me-1"></i><span>Laki - Laki</span></div>
                        <div class="col d-flex justify-content-between"><span class="fw-light ms-5">16</span><span class="fw-light">15%</span></div>
                    </div>
                </div>
                <div class="row mx-1 border-bottom mb-5">
                    <div class="col d-flex justify-content-between">
                        <div class="col"><i class="bi bi-square-fill text-danger me-1"></i><span>Perempuan</span></div>
                        <div class="col d-flex justify-content-between"><span class="fw-light ms-5">92</span><span class="fw-light">85%</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        // Data 
        const data = {
            labels: ["< 1 year", "1 - 3 year", "3 - 5 year", "5 - 10 year"],
            datasets: [{
                label : '',
                data: [42, 48, 10, 5],
                backgroundColor: [
                    'rgba(255, 99, 132)',
                    'rgba(54, 162, 235)',
                    'rgba(255, 206, 86)',
                    'rgba(75, 192, 192)',
                    'rgba(153, 102, 255)'
                ]
            }]
        };

        
        const options = {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                display: false
                }
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        };

        // Mendapatkan elemen canvas
        const ctx = document.getElementById('myChart').getContext('2d');

        // Membuat grafik menggunakan Chart.js
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });

        const donutData = {
        labels: ["Laki - Laki", "Perempuan"],
        datasets: [{
            label: '',
            data: [12, 19],
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)'
            ]
        }]
    };

    // Konfigurasi untuk chart donut
    const donutOptions = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false
            }
        }
    };

    // Mendapatkan elemen canvas untuk chart donut
    const donutCtx = document.getElementById('donutChart').getContext('2d');

    // Membuat chart donut menggunakan Chart.js
    const donutChart = new Chart(donutCtx, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
    });
    </script>
</body>
</html>
