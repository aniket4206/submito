<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->

    <style type="text/css">
        .container-fluid, .container 
        {
            font-family: 'Source Sans Pro', sans-serif;
            line-height: 1.5;
            color: #323232;
            font-weight: 400;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased;
        }
        .hm-gradient 
        {
            background-image: linear-gradient(to top, #f3e7e9 30%, #e3eeff 100%, #e3eeff 100%);
        }
    </style>
</head>
<body class="hm-gradient">

    <br/><br/><br/><br/>
    <?php if(isset($_SESSION['success'])) { ?>
        <div class="alert alert success"><?php echo $_SESSION['success']; ?></div>
    <?php } ?>
<div class="container" align="center">
    <?php if($error = $this->session->flashdata('login_failed')): ?>
        <div class="row">
            <div class="col-lg-6" >
                <div class="alert alert-dismissible alert-danger">
                    <?= $error ?>
                </div>
            </div>
        </div>
    <?php endif; ?></div>

    <div class="container">
        <div class="row">
          <div class="col-sm">
            <?php 
                $attributes = ['id' => 'admin'];
                echo form_open('Login/admin_login', $attributes);
            ?>
            <h2>Admin Login</h2>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control">
                </div>                          
                <?php 
                echo form_submit(['name'=>'admin_login','value'=>'Login','class'=>'btn btn-primary']);
                echo form_close(); 
            ?>
          </div>

          <div class="col-sm">
            <?php 
                $attributes = ['id' => 'teacherLogin'];
                echo form_open('Login/teacher_login', $attributes);
            ?>
            <h2>Teacher Login</h2>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <?php 
                    echo form_submit(['name'=>'teacher_login','value'=>'Login','class'=>'btn btn-primary']);
                    echo form_close(); 
                ?>
          </div>

          <div class="col-sm">
            <?php 
                $attributes = ['id' => 'studentLogin'];
                echo form_open('Login/student_login', $attributes);
            ?>
            <h2>Student Login</h2>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <?php 
                    echo form_submit(['name'=>'student_login','value'=>'Login','class'=>'btn btn-primary']);
                    echo form_close(); 
                ?>
          </div>
        </div>
      </div>
    </div> 	

    <br/><br/><br/><br/>

  <!--JQuery Validations-->
  <script type="text/javascript">
      
      $(document).ready(function() 
      {
        /*Admin Login*/
        $('#admin').bootstrapValidator(
        {
            message: 'This value is not valid',
            feedbackIcons: 
            {
                valid: 'fa fa-check-circle text-success',
                invalid: 'fa fa-times text-danger',
                validating: 'fa fa-refresh text-primary'
            },
            fields: 
            {
                username:
                {
                    validators: 
                    {
                        notEmpty: 
                        {
                            message: '<span class="text-danger">**Please fill the Username</span>'
                        },
                        stringLength: 
                        {
                            max: 50,
                            message: '<span class="text-danger">**The Username must be less than 50 characters long</span>'
                        }
                    }
                },
                password:
                { 
                    validators: 
                    {
                        notEmpty: 
                        {
                            message: '<span class="text-danger">**Please fill the Password</span>'
                        },
                        stringLength: 
                        {
                            min: 8,
                            max: 50,
                            message: '<span class="text-danger">**The Password must be between 8 and 50 characters long</span>'
                        }
                    }
                }
            }
        });

        /*Teacher Login*/
        $('#teacherLogin').bootstrapValidator(
        {
            message: 'This value is not valid',
            feedbackIcons: 
            {
                valid: 'fa fa-check-circle text-success',
                invalid: 'fa fa-times text-danger',
                validating: 'fa fa-refresh text-primary'
            },
            fields: 
            {
                username:
                {
                    validators: 
                    {
                        notEmpty: 
                        {
                            message: '<span class="text-danger">**Please fill the Username</span>'
                        },
                        stringLength: 
                        {
                            max: 50,
                            message: '<span class="text-danger">**The Username must be less than 50 characters long</span>'
                        }
                    }
                },
                password:
                { 
                    validators: 
                    {
                        notEmpty: 
                        {
                            message: '<span class="text-danger">**Please fill the Password</span>'
                        },
                        stringLength: 
                        {
                            min: 8,
                            max: 50,
                            message: '<span class="text-danger">**The Password must be between 8 and 50 characters long</span>'
                        }
                    }
                }
            }
        });

        /*Student Login*/
        $('#studentLogin').bootstrapValidator(
        {
            message: 'This value is not valid',
            feedbackIcons: 
            {
                valid: 'fa fa-check-circle text-success',
                invalid: 'fa fa-times text-danger',
                validating: 'fa fa-refresh text-primary'
            },
            fields: 
            {
                username:
                {
                    validators: 
                    {
                        notEmpty: 
                        {
                            message: '<span class="text-danger">**Please fill the Username</span>'
                        },
                        stringLength: 
                        {
                            max: 50,
                            message: '<span class="text-danger">**The Username must be less than 50 characters long</span>'
                        }
                    }
                },
                password:
                { 
                    validators: 
                    {
                        notEmpty: 
                        {
                            message: '<span class="text-danger">**Please fill the Password</span>'
                        },
                        stringLength: 
                        {
                            min: 8,
                            max: 50,
                            message: '<span class="text-danger">**The Password must be between 8 and 50 characters long</span>'
                        }
                    }
                }
            }
        });

      });
      
  </script><script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.3/lib/darkmode-js.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.3/lib/darkmode-js.min.js"></script>
<script>
 
  var options = {
  bottom: '64px', // default: '32px'
  right: '32px', // default: '32px'
  left: 'unset', // default: 'unset'
  time: '0.5s', // default: '0.3s'
  mixColor: '#fff', // default: '#fff'
  backgroundColor: '#ffffff',  // default: '#fff'
  buttonColorDark: 'grey',  // default: '#100f2c'
  buttonColorLight: '#ffffff', // default: '#fff'
  saveInCookies: false, // default: true,
  label: '🐧', // default: ''
  autoMatchOsTheme: true // default: true
}

const darkmode = new Darkmode(options);
darkmode.showWidget();
 
</script>

</body>
</html>                            