<?php if ($this->session->flashdata("success")) { ?>
    <div class="alert alert-success">
        <strong><i class="fas fa-check-circle"></i> <?php echo $this->session->flashdata("success"); ?></strong>
        <button type=" button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php } ?>
<?php if ($this->session->flashdata("error")) { ?>
    <div class="alert alert-danger">
        <strong><i class="fas fa-times-circle"></i> <?php echo $this->session->flashdata("error"); ?></strong>
        <button type=" button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php } ?>