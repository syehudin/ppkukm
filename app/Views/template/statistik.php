<script src="<?php echo base_url() ?>/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/core/popper.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/core/bootstrap.min.js"></script>

<script src="<?php echo base_url() ?>/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<script src="<?php echo base_url() ?>/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<script src="<?php echo base_url() ?>/assets/js/plugin/chart.js/chart.min.js"></script>

<script src="<?php echo base_url() ?>/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<script src="<?php echo base_url() ?>/assets/js/plugin/chart-circle/circles.min.js"></script>

<script src="<?php echo base_url() ?>/assets/js/plugin/datatables/datatables.min.js"></script>

<script src="<?php echo base_url() ?>/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<script src="<?php echo base_url() ?>/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<script src="<?php echo base_url() ?>/assets/js/atlantis.min.js"></script>

<script src="<?php echo base_url() ?>/assets/js/setting-demo.js"></script>
<script src="<?php echo base_url() ?>/assets/js/demo.js"></script>
<script>
    Circles.create({
        id: 'circles-1',
        radius: 45,
        value: <?php echo $hitung_admin; ?>,
        maxValue: <?php echo $hitung_prodi; ?>,
        width: 7,
        text: <?php echo $hitung_admin; ?>,
        colors: ['#f1f1f1', '#FF9E27'],
        duration: 400,
        wrpClass: 'circles-wrp',
        textClass: 'circles-text',
        styleWrapper: true,
        styleText: true
    });

    Circles.create({
        id: 'circles-2',
        radius: 45,
        value: <?php echo $hitung_prodi; ?>,
        maxValue: <?php echo $hitung_prodi; ?>,
        width: 7,
        text: <?php echo $hitung_prodi; ?>,
        colors: ['#f1f1f1', '#2BB930'],
        duration: 400,
        wrpClass: 'circles-wrp',
        textClass: 'circles-text',
        styleWrapper: true,
        styleText: true
    });

    Circles.create({
        id: 'circles-3',
        radius: 45,
        value: <?php echo $hitung_auditor ?>,
        maxValue: <?php echo $hitung_prodi; ?>,
        width: 7,
        text: <?php echo $hitung_auditor; ?>,
        colors: ['#f1f1f1', '#F25961'],
        duration: 400,
        wrpClass: 'circles-wrp',
        textClass: 'circles-text',
        styleWrapper: true,
        styleText: true
    });

    var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');
    var mytotalIncomeChart = new Chart(totalIncomeChart, {
        type: 'bar',
        data: {
            labels: ["S1", "S2", "S3", "D3", "S1T", "S2T", "S3T"],
            datasets: [{
                label: "Jumlah Prodi",
                backgroundColor: '#ff9e27',
                borderColor: 'rgb(23, 125, 255)',
                data: [<?php echo $hitung_prodi_s1; ?>, <?php echo $hitung_prodi_s2; ?>, <?php echo $hitung_prodi_s3; ?>, <?php echo $hitung_prodi_d3; ?>, <?php echo $hitung_prodi_s1_terapan; ?>, <?php echo $hitung_prodi_s2_terapan; ?>, <?php echo $hitung_prodi_s3_terapan; ?>],
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: false,
            },
            scales: {
                yAxes: [{
                    ticks: {
                        display: false, //this will remove only the label
                        beginAtZero: true,
                        min: 0
                    },
                    gridLines: {
                        drawBorder: false,
                        display: false
                    }
                }],
                xAxes: [{
                    gridLines: {
                        drawBorder: false,
                        display: false
                    }
                }]
            },
        }
    });

    $('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: 'line',
        height: '70',
        width: '100%',
        lineWidth: '2',
        lineColor: '#ffa534',
        fillColor: 'rgba(255, 165, 52, .14)'
    });

    var pieChart = document.getElementById('pieChart').getContext('2d');
    var myPieChart = new Chart(pieChart, {
        type: 'pie',
        data: {
            datasets: [{
                data: [<?php echo $hitung_ami_diajukan ?>, <?php echo $hitung_ami_proses ?>, <?php echo $hitung_ami_selesai ?>],
                backgroundColor: ["#fdaf4b", "#1d7af3", "#59d05d"],
                borderWidth: 0
            }],
            labels: ['Diajukan', 'Diproses', 'Selesai']
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom',
                labels: {
                    fontColor: 'rgb(154, 154, 154)',
                    fontSize: 11,
                    usePointStyle: true,
                    padding: 20
                }
            },
            pieceLabel: {
                render: 'percentage',
                fontColor: 'white',
                fontSize: 14,
            },
            tooltips: false,
            layout: {
                padding: {
                    left: 20,
                    right: 20,
                    top: 20,
                    bottom: 20
                }
            }
        }
    });

    multipleBarChart = document.getElementById('multipleBarChart').getContext('2d');
    var myMultipleBarChart = new Chart(multipleBarChart, {
        type: 'bar',
        data: {
            labels: ["S1", "S2", "S3", "D3", "S1T", "S2T", "S3T"],
            datasets: [{
                label: "Diajukan",
                backgroundColor: '#fdaf4b',
                borderColor: '#fdaf4b',
                data: [<?php echo $hitung_diajukan_s1; ?>, <?php echo $hitung_diajukan_s2; ?>, <?php echo $hitung_diajukan_s3; ?>, <?php echo $hitung_diajukan_d3; ?>, <?php echo $hitung_diajukan_s1_terapan; ?>, <?php echo $hitung_diajukan_s2_terapan; ?>, <?php echo $hitung_diajukan_s3_terapan; ?>],
            }, {
                label: "Diproses",
                backgroundColor: '#177dff',
                borderColor: '#177dff',
                data: [<?php echo $hitung_diterima_s1; ?>, <?php echo $hitung_diterima_s2; ?>, <?php echo $hitung_diterima_s3; ?>, <?php echo $hitung_diterima_d3; ?>, <?php echo $hitung_diterima_s1_terapan; ?>, <?php echo $hitung_diterima_s2_terapan; ?>, <?php echo $hitung_diterima_s3_terapan; ?>],
            }, {
                label: "Selesai",
                backgroundColor: '#59d05d',
                borderColor: '#59d05d',
                data: [<?php echo $hitung_selesai_s1; ?>, <?php echo $hitung_selesai_s2; ?>, <?php echo $hitung_selesai_s3; ?>, <?php echo $hitung_selesai_d3; ?>, <?php echo $hitung_selesai_s1_terapan; ?>, <?php echo $hitung_selesai_s2_terapan; ?>, <?php echo $hitung_selesai_s3_terapan; ?>],
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom'
            },
            title: {
                display: true,
                text: ''
            },
            tooltips: {
                mode: 'index',
                intersect: false
            },
            responsive: true,
            scales: {
                xAxes: [{
                    stacked: true
                }],
                yAxes: [{
                    stacked: true,
                    beginAtZero: true,
                    min: 0
                }]
            }
        }
    });
</script>
</body>

</html>