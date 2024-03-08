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
    var radarChart = document.getElementById('radarChartElemen').getContext('2d');
    var myRadarChart = new Chart(radarChart, {
        type: 'radar',
        data: {
            labels: ['STD 1', 'STD 2', 'STD 3', 'STD 4', 'STD 5', 'STD 6', 'STD 7', 'STD 8', 'STD 9', 'STD 10', 'STD 11', 'STD 12'],
            datasets: [{
                data: [
                    <?php echo number_format($data_nilai_akhir_k1 / $this->session->userdata('djenjang_jumlah_k1'), 2) ?>,
                    <?php echo number_format($data_nilai_akhir_k2 / $this->session->userdata('djenjang_jumlah_k2'), 2) ?>,
                    <?php echo number_format($data_nilai_akhir_k3 / $this->session->userdata('djenjang_jumlah_k3'), 2) ?>,
                    <?php echo number_format($data_nilai_akhir_k4 / $this->session->userdata('djenjang_jumlah_k4'), 2) ?>,
                    <?php echo number_format($data_nilai_akhir_k5 / $this->session->userdata('djenjang_jumlah_k5'), 2) ?>,
                    <?php echo number_format($data_nilai_akhir_k6 / $this->session->userdata('djenjang_jumlah_k6'), 2) ?>,
                    <?php echo number_format($data_nilai_akhir_k7 / $this->session->userdata('djenjang_jumlah_k7'), 2) ?>,
                    <?php echo number_format($data_nilai_akhir_k8 / $this->session->userdata('djenjang_jumlah_k8'), 2) ?>,
                    <?php echo number_format($data_nilai_akhir_k9 / $this->session->userdata('djenjang_jumlah_k9'), 2) ?>,
                    <?php echo number_format($data_nilai_akhir_k10 / $this->session->userdata('djenjang_jumlah_k10'), 2) ?>,
                    <?php echo number_format($data_nilai_akhir_k11 / $this->session->userdata('djenjang_jumlah_k11'), 2) ?>,
                    <?php echo number_format($data_nilai_akhir_k12 / $this->session->userdata('djenjang_jumlah_k12'), 2) ?>,
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

    barChart = document.getElementById('barChartElemen').getContext('2d');
    var myBarChart = new Chart(barChart, {
        type: 'bar',
        data: {
            labels: ['STD 1', 'STD 2', 'STD 3', 'STD 4', 'STD 5', 'STD 6', 'STD 7', 'STD 8', 'STD 9', 'STD 10', 'STD 11', 'STD 12'],
            datasets: [{
                label: "Nilai",
                backgroundColor: 'rgb(23, 125, 255)',
                borderColor: 'rgb(23, 125, 255)',
                data: [
                    <?php echo number_format($data_nilai_akhir_k1 / $this->session->userdata('djenjang_jumlah_k1'), 2) ?>,
                    <?php echo number_format($data_nilai_akhir_k2 / $this->session->userdata('djenjang_jumlah_k2'), 2) ?>,
                    <?php echo number_format($data_nilai_akhir_k3 / $this->session->userdata('djenjang_jumlah_k3'), 2) ?>,
                    <?php echo number_format($data_nilai_akhir_k4 / $this->session->userdata('djenjang_jumlah_k4'), 2) ?>,
                    <?php echo number_format($data_nilai_akhir_k5 / $this->session->userdata('djenjang_jumlah_k5'), 2) ?>,
                    <?php echo number_format($data_nilai_akhir_k6 / $this->session->userdata('djenjang_jumlah_k6'), 2) ?>,
                    <?php echo number_format($data_nilai_akhir_k7 / $this->session->userdata('djenjang_jumlah_k7'), 2) ?>,
                    <?php echo number_format($data_nilai_akhir_k8 / $this->session->userdata('djenjang_jumlah_k8'), 2) ?>,
                    <?php echo number_format($data_nilai_akhir_k9 / $this->session->userdata('djenjang_jumlah_k9'), 2) ?>,
                    <?php echo number_format($data_nilai_akhir_k10 / $this->session->userdata('djenjang_jumlah_k10'), 2) ?>,
                    <?php echo number_format($data_nilai_akhir_k11 / $this->session->userdata('djenjang_jumlah_k11'), 2) ?>,
                    <?php echo number_format($data_nilai_akhir_k12 / $this->session->userdata('djenjang_jumlah_k12'), 2) ?>,
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