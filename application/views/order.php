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
                    <h2>Purchase</h2>
                    <p>Please enter number of Order</p>
                    <br>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <?php echo form_open_multipart('order/send_order', 'class="form-horizontal"'); ?>
                <?php echo $this->session->flashdata('msg'); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            Mac Pro
                            <br>
                            <input type="number" name="xmac" class="form-control" id="mac" placeholder="Number of Mac order" required autofocus>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            iPhone 12
                            <br>
                            <input type="number" name="xip" class="form-control" id="iphone" placeholder="Number of iPhone order" required autofocus>
                        </div>
                    </div>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary"><span>Submit Order</span></button>
                </div>
                <?php echo form_close(); ?>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('front/footer'); ?>