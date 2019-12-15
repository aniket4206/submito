<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//getbootstrap.com/docs/4.3/examples/floating-labels/floating-labels.css" rel="stylesheet">
    <title>OTP </title>
    
</head>
<body>
    <div class="container" align="center">
        <?php if($success = $this->session->flashdata('success')): 
    echo '<div class="alert alert-dismissible alert-success">' . $success . '</div>';
   endif; ?>
   <?php if($failure = $this->session->flashdata('failure')): 
    echo '<div class="alert alert-dismissible alert-danger">' . $failure . '</div>';
   endif; ?>
   <p> OTP has been sent to your email address : <?= $this->session->userdata('email'); ?> OTP is valid for 4 minutes </p>
     
            <?php  echo form_open('Teacher/verify_otp') ?>
            <div class="text-center sm-4">

                
                <h1 class="h3 sm-3 font-weight-normal">Enter your OTP To verify</h1>
            </div>
            <div class="col-lg-4">
            <div class="form-label-group">
                <input type="text" id="otp" name="otp" class="form-control" placeholder="OTP" required>
                <label for="phone-number">Enter OTP</label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Verify OTP</button>
            <a href="<?= base_url('Teacher') ?>" class="btn btn-lg btn-danger btn-block" type="submit">Back</a>
      <?php echo form_close(); ?>
  </div>
    </div>
</body>
</html>