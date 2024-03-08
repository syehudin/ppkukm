<script src="<?php echo base_url() ?>assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/core/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/core/bootstrap.min.js"></script>
<!-- jQuery UI -->
<script src="<?php echo base_url() ?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<!-- Chart JS -->
<script src="<?php echo base_url() ?>assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?php echo base_url() ?>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<!-- Atlantis JS -->
<script src="<?php echo base_url() ?>assets/js/atlantis.min.js"></script>
<script>
    var radarChart = document.getElementById('radarChart').getContext('2d');
    var myRadarChart = new Chart(radarChart, {
        type: 'radar',
        data: {
            labels: [
                <?php
                for ($i = 1; $i <= $this->session->userdata('djenjang_jumlah'); $i++) {
                    echo $i . ",";
                }
                ?>
            ],
            datasets: [{
                data: [
                    <?php foreach ($data_nilai as $nilai) {
                        echo $nilai->hasil_nilai . ",";
                    } ?>
                ],
                borderColor: '#1d7af3',
                backgroundColor: 'rgba(29, 122, 243, 0.25)',
                pointBackgroundColor: "#1d7af3",
                pointHoverRadius: 4,
                pointRadius: 3,
                label: 'Nilai'
            }, ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scale: {
                ticks: {
                    beginAtZero: true,
                    max: 4,
                    min: 0
                }
            }
        }
    });

    barChart = document.getElementById('barChart').getContext('2d');
    var myBarChart = new Chart(barChart, {
        type: 'bar',
        data: {
            labels: [
                <?php
                for ($i = 1; $i <= $this->session->userdata('djenjang_jumlah'); $i++) {
                    echo $i . ",";
                }
                ?>
            ],
            datasets: [{
                label: "Nilai",
                backgroundColor: 'rgb(23, 125, 255)',
                borderColor: 'rgb(23, 125, 255)',
                data: [
                    <?php foreach ($data_nilai as $nilai) {
                        echo $nilai->hasil_nilai . ",";
                    } ?>
                ],
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        max: 4,
                        min: 0
                    }
                }]
            },
        }
    });
</script>