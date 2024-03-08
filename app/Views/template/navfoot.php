<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            Copyright <i class="fas fa-copyright"></i>
            <?php echo $this->session->userdata('nama_sistem'); ?> <?php echo $this->session->userdata('instansi') ?>
        </nav>
        <div class="copyright ml-auto">
            Versi <?php echo $this->session->userdata('versi') ?>
        </div>
    </div>
</footer>
</div>
</div>