<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membership | AA Driving School</title>

    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../assets/css/multitab.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="../assets/js/jquery-2.1.4.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/multitab.js"></script>
    <!-- //js -->
    <!-- font-awesome-icons -->
    <link href="/assets/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/flexslider.css" type="text/css" media="screen" property="" />
    <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


</head>
<body>
<!-- banner -->

<?php
include '../layouts/header.php';
?>
<div class="header-bottom">
    <nav class="navbar navbar-default">
        <div class="navbar-header navbar-left">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href=""><span>AA </span>Kenya</a></h1>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <nav class="link-effect-2" id="link-effect-2">
                <ul class="nav navbar-nav">
                    <li><a href="../pages/index.php"><span data-hover="Home">Home</span></a></li>
                    <li><a href="../pages/lessons.php"><span data-hover="Lessons">Lessons</span></a></li>
                    <li class="active"><a href="../pages/membership.php"><span data-hover="Membership">Membership</span></a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span data-hover="About">About</span><b class="caret"></b></a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span data-hover="Driver Bureau">Driver Bureau</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li><a href="client.php">Seeking Drivers </a></li>
                            <li><a href="employment.php">Seeking Employment</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span data-hover="Services">Services</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li><a href="../pages/index.php#bookings">Booking</a></li>
                            <li><a href="feedback.php">Feedback Card</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>

    </nav>
</div>
<div class="banner1">
</div>
<!--page content-->
<div class="about-top">
    <div class="container">
        <div class="w3l-heading">
            <h2 class="w3ls_head">Membership</h2>
        </div>
        <div class="wthree-services-bottom-grids">
            <div class="container">
                <div class="row">
                    <section>
                        <div class="wizard">
                            <div class="wizard-inner">
                                <div class="connecting-line"></div>
                                <ul class="nav nav-tabs" role="tablist">

                                    <li role="presentation" class="active">
                                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                                        </a>
                                    </li>

                                    <li role="presentation" class="disabled">
                                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                                        </a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                                        </a>
                                    </li>

                                    <li role="presentation" class="disabled">
                                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <form role="form">
                                <div class="tab-content">
                                    <div class="tab-pane active" role="tabpanel" id="step1">
                                        <div class="col-md-10 wthree-services-left">
                                            <form class="form-horizontal">
                                                <fieldset>

                                                    <!-- Form Name -->
                                                    <legend>Contact Details</legend>

                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="fname">First Name</label>
                                                        <div class="col-md-6">
                                                            <input id="fname" name="fname" type="text" placeholder="Enter first name" class="form-control input-md">

                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="lname">Last Name</label>
                                                        <div class="col-md-6">
                                                            <input id="lname" name="lname" type="text" placeholder="Enter last name" class="form-control input-md">

                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="email">Email</label>
                                                        <div class="col-md-6">
                                                            <input id="email" name="email" type="text" placeholder="Enter email" class="form-control input-md" required="">

                                                        </div>
                                                    </div>

                                                    <!-- Button Drop Down -->
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="buttondropdown">Gender</label>
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                <input id="buttondropdown" name="buttondropdown" class="form-control" placeholder="......" type="text">
                                                                <div class="input-group-btn">
                                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                                        Select Option
                                                                        <span class="caret"></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu pull-right">
                                                                        <li><a href="#">Male</a></li>
                                                                        <li><a href="#">Female</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="pnumber">Phone Number</label>
                                                        <div class="col-md-6">
                                                            <input id="pnumber" name="pnumber" type="text" placeholder="Enter phone number" class="form-control input-md">

                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="dob">Date Of Birth</label>
                                                        <div class="col-md-6">
                                                            <input id="dob" name="dob" type="text" placeholder="dd/mm/yyyy" class="form-control input-md">

                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="nationality">Nationality</label>
                                                        <div class="col-md-6">
                                                            <input id="nationality" name="nationality" type="text" placeholder="Select Option" class="form-control input-md">

                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="nationalid">National ID</label>
                                                        <div class="col-md-6">
                                                            <input id="nationalid" name="nationalid" type="text" placeholder="Enter National ID number" class="form-control input-md" required="">

                                                        </div>
                                                    </div>

                                                </fieldset>
                                            </form>
                                        </div>
                                        <ul class="list-inline pull-right">
                                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="step2">
                                        <div class="col-md-10 wthree-services-left">
                                            <form class="form-horizontal">
                                                <fieldset>

                                                    <!-- Form Name -->
                                                    <legend>Address details(Optional)</legend>

                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="postalcode">Postal code</label>
                                                        <div class="col-md-6">
                                                            <input id="postalcode" name="postalcode" type="text" placeholder="0100" class="form-control input-md">

                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="address">Postal Address</label>
                                                        <div class="col-md-6">
                                                            <input id="address" name="address" type="text" placeholder="P.O Box 123" class="form-control input-md">

                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="town">Town</label>
                                                        <div class="col-md-6">
                                                            <input id="town" name="town" type="text" placeholder="Enter town" class="form-control input-md">

                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="phyaddress">Physical Address</label>
                                                        <div class="col-md-6">
                                                            <input id="phyaddress" name="phyaddress" type="text" placeholder="Airport North Road" class="form-control input-md">

                                                        </div>
                                                    </div>

                                                </fieldset>
                                            </form>
                                        </div>
                                        <ul class="list-inline pull-right">
                                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="step3">
                                        <div class="col-md-10 wthree-services-left">
                                            <form class="form-horizontal">
                                            <fieldset>

                                                <!-- Form Name -->
                                                <legend>Vehicle Details</legend>

                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="registrationnumber">Vehicle Registration</label>
                                                    <div class="col-md-6">
                                                        <input id="registrationnumber" name="registrationnumber" type="text" placeholder="KAS 0100" class="form-control input-md" required="">

                                                    </div>
                                                </div>

                                                <!-- Button Drop Down -->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="vehiclemake">Vehicle Make</label>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <input id="vehiclemake" name="vehiclemake" class="form-control" placeholder="...." type="text">
                                                            <div class="input-group-btn">
                                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                                    Select Make
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu pull-right">
                                                                    <li><a href="#">Option one</a></li>
                                                                    <li><a href="#">Option two</a></li>
                                                                    <li><a href="#">Option three</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="vehiclemodel">Vehicle Model</label>
                                                    <div class="col-md-6">
                                                        <input id="vehiclemodel" name="vehiclemodel" type="text" placeholder="Vehicle Model" class="form-control input-md">

                                                    </div>
                                                </div>

                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="manufactureyear">Year of Manufacture</label>
                                                    <div class="col-md-6">
                                                        <input id="manufactureyear" name="manufactureyear" type="text" placeholder="Year of Manufacture" class="form-control input-md" required="">

                                                    </div>
                                                </div>

                                                <!-- Button Drop Down -->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="vehicleuse"> Vehicle Primary Use</label>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <input id="vehicleuse" name="vehicleuse" class="form-control" placeholder="...." type="text">
                                                            <div class="input-group-btn">
                                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                                    Select Option
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu pull-right">
                                                                    <li><a href="#">Business</a></li>
                                                                    <li><a href="#">Personal</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Button Drop Down -->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="branch">Closest AA Branch</label>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <input id="branch" name="branch" class="form-control" placeholder="..............." type="text">
                                                            <div class="input-group-btn">
                                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                                    Select Branch
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu pull-right">
                                                                    <li><a href="#">Option one</a></li>
                                                                    <li><a href="#">Option two</a></li>
                                                                    <li><a href="#">Option three</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Button Drop Down -->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="socialmedia">Social Media Platform</label>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <input id="socialmedia" name="socialmedia" class="form-control" placeholder="........" type="text">
                                                            <div class="input-group-btn">
                                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                                    Select
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu pull-right">
                                                                    <li><a href="#">Facebook</a></li>
                                                                    <li><a href="#">Twitter</a></li>
                                                                    <li><a href="#">Instagram</a></li>
                                                                    <li><a href="#">Linkedin</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="socialmediahandle"> Social Media Handle/Link</label>
                                                    <div class="col-md-6">
                                                        <input id="socialmediahandle" name="socialmediahandle" type="text" placeholder=" Social Media Handle/Link" class="form-control input-md">

                                                    </div>
                                                </div>

                                            </fieldset>
                                        </form>
                                        </div>
                                        <ul class="list-inline pull-right">
                                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                            <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="complete">
                                        <h3>Complete</h3>
                                        <p>You have successfully completed all steps.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>



        </div>
    </div>
</div>
<!--end of page content-->
<?php
include '../layouts/footer.php';
?>
<?php
include '../layouts/scripts.php';
?>
</body>
</html>


