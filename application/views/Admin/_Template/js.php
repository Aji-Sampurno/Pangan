 <!-- Bootstrap core JavaScript-->
   <script src="<?= base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
   <script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <!-- Core plugin JavaScript-->
   <script src="<?= base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

   <!-- Custom scripts for all pages-->
   <script src="<?= base_url(); ?>/assets/js/sb-admin-2.min.js"></script>

   <!-- Page level plugins -->
   <script src="<?= base_url(); ?>/assets/vendor/chart.js/Chart.min.js"></script>

   <!-- Page level custom scripts -->
   <script src="<?= base_url(); ?>/assets/js/demo/chart-area-demo.js"></script>
   <script src="<?= base_url(); ?>/assets/js/demo/chart-pie-demo.js"></script>
   <script src="<?= base_url(); ?>/assets/js/demo/chart-area-demo.js"></script>

   <script type="text/javascript">
        var ctx = document.getElementById("myPieChart");
        var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Jagung", "Kedelai", "Kacang Tanah", "Singkong", "Ubi Jalar", "Kacang Hijau", "Sorgum", "Gandum", "Talas ", "Ganyong", "Umbi Lainnya"],
            datasets: [{
            data: [<?php echo $this->db->query("")->num_rows();?>, 30, 15, 30,55, 30, 15, 30, 30, 15, 30],
            backgroundColor: ['#17e822', '#fc0305', '#e4f20d', '#4a08f7','#b304fb', '#34aacb', '#ff00cd', '#29d6ad', '#faba05', '#987167',''],
            hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', '#17a673', '#2e59d9', '#17a673', '#2c9faf', '#17a673', '#17a673', '#2c9faf', '#17a673'],
            hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
            },
            legend: {
            display: false
            },
            cutoutPercentage: 80,
        },
        });
    </script>