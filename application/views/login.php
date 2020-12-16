<?php $this->load->view('front/header'); ?>
<?php $this->load->view('front/navbar'); ?>

<section style="margin-top:-15px;">
    <hr>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- contact title -->
                <div class="template-title text-center">
                    <h2>Login to Order</h2>
                    <p>Please enter your 4 digits PIN</p>
                    <br>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <?php echo form_open_multipart('login/sent_pin', 'class="form-horizontal"'); ?>
                <?php echo $this->session->flashdata('msg'); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="password" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" maxlength="4" name="xpin" class="form-control" id="pin" placeholder="Enter your PIN" required autofocus>
                        </div>
                    </div>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary"><span>Login</span></button>
                </div>
                <?php echo form_close(); ?>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('front/footer'); ?>