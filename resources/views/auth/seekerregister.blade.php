


@extends('layouts.app')


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="icon" type="image/png" href="img/favicon.ico" />

	<title>Bootstrap Wizard by Creative Tim</title>

	<!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/bootstrap-wizard"/>

    <meta name="keywords" content="wizard, bootstrap wizard, creative tim, long forms, 3 step wizard, sign up wizard, beautful wizard, long forms wizard, wizad with validation">
    <meta name="description" content="Fully responsive wizard that comes with 3 useful examples and 5 bright colors. The Bootstrap Wizard is one of the most handy elements that can be used inside a project.">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Bootstrap Wizard by Creative Tim">
    <meta itemprop="description" content="Fully responsive wizard that comes with 3 useful examples and 5 bright colors. The Bootstrap Wizard is one of the most handy elements that can be used inside a project.">
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/22/opt_wizard_thumbnail.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Bootstrap Wizard by Creative Tim">
    <meta name="twitter:description" content="Fully responsive wizard that comes with 3 useful examples and 5 bright colors. The Bootstrap Wizard is one of the most handy elements that can be used inside a project.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/22/opt_wizard_thumbnail.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Bootstrap Wizard by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/wizard-demo-register" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/22/opt_wizard_thumbnail.jpg" />
    <meta property="og:description" content="Fully responsive wizard that comes with 3 useful examples and 5 bright colors. The Bootstrap Wizard is one of the most handy elements that can be used inside a project." />
    <meta property="og:site_name" content="Creative Tim" />

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!--<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/gsdk-base.css" rel="stylesheet" />
    <link href="assets/css/demo.css" rel="stylesheet" />-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" >
	<link rel="stylesheet" type="text/css" href="{{asset('css/gsdk-base.css')}}" >
	<link rel="stylesheet" type="text/css" href="{{asset('css/demo.css')}}" >
	

    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
		<!-- End Google Tag Manager -->
		</head>

		<body>
			<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
<!--<div class="image-container set-full-height" style="background-image: url('img/wizard.jpg')">-->
<div class="image-container set-full-height" style="background-color:f8fafc;">
    <!--   Creative Tim Branding   -->
    <!--<a href="https://creative-tim.com">
         <div class="logo-container">
           <div class="logo">
                <img src="img/new_logo.png">
            </div>
            <div class="brand">
                Creative Tim
            </div>
        </div>
    </a>-->
@section('content')
    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card ct-wizard-orange" id="wizard">
                    <form action="" method="">
                <!--        You can switch "ct-wizard-orange"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->

                    	<div class="wizard-header">
                        	<h3>
                        	   <b>BUILD</b> YOUR PROFILE <br>
                        	   <small>This information will let us know more about you.</small>
                        	</h3>
                    	</div>
                    	<ul>
                            <li><a href="#about" data-toggle="tab">About</a></li>
                            <li><a href="#account" data-toggle="tab">Account</a></li>
                            <li><a href="#address" data-toggle="tab">Address</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                              <div class="row">
                                  <h4 class="info-text"> Let's start with the basic information (with validation)</h4>
                                  <div class="col-sm-4 col-sm-offset-1">
                                     <div class="picture-container">
                                          <div class="picture">
                                              <img src="img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                              <input type="file" id="wizard-picture">
                                          </div>
                                          <h6>Choose Picture</h6>
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
								      <div class="form-group">
                                        <label>Title <small>(required)</small></label>
										  <select name="country" class="form-control">
										        <option value="..."></option>
                                                <option value="Mr"> Mr </option>
                                                <option value="Mrs"> Mrs </option>
                                                <option value="Miss"> Miss</option>
                                                <option value="Dr"> Dr </option>
                                                <option value="Sir"> Sir </option>
                                                <option value="Lady"> Lady </option>
                                                <option value="Lord"> Lord </option>
                                                <option value="...">...</option>
										</select>
                                      </div>
                                      <div class="form-group">
                                        <label>First Name <small>(required)</small></label>
                                        <input name="firstname" type="text" class="form-control" placeholder="Roland...">
                                      </div>
                                      <div class="form-group">
                                        <label>Last Name <small>(required)</small></label>
                                        <input name="lastname" type="text" class="form-control" placeholder="Timoth...">
                                      </div>
									  <div class="form-group">
                                        <label>Mobile Number<small>(required)</small></label>
                                        <input name="mobilenumber" type="text" class="form-control" placeholder="eg +255 766 680 587">
                                      </div>
                                  </div>
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Email <small>(required)</small></label>
                                          <input name="email" type="email" class="form-control" placeholder="rowland7timoth@gmail.com">
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="account">
                                <h4 class="info-text"> What are you doing? </h4>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-radio">
                                                <input type="radio" name="job" value="Design">
                                                <div class="icon">
                                                    <i class="fa fa-pencil"></i>
                                                </div>
                                                <h6>Design</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-radio">
                                                <input type="radio" name="job" value="Code">
                                                <div class="icon">
                                                    <i class="fa fa-terminal"></i>
                                                </div>
                                                <h6>Code</h6>
                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="choice"  data-toggle="wizard-radio">
                                                <input type="radio" name="job" value="Develop">
                                                <div class="icon">
                                                    <i class="fa fa-laptop"></i>
                                                </div>
                                                <h6>Develop</h6>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="address">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Are you living in a nice area? </h4>
                                    </div>
                                    <div class="col-sm-7 col-sm-offset-1">
                                         <div class="form-group">
                                            <labe>Street Name</label>
                                            <input type="text" class="form-control" placeholder="5h Avenue">
                                          </div>
                                    </div>
                                    <div class="col-sm-3">
                                         <div class="form-group">
                                            <label>Street Number</label>
                                            <input type="text" class="form-control" placeholder="242">
                                          </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control" placeholder="New York...">
                                          </div>
                                    </div>
                                    <div class="col-sm-5">
                                         <div class="form-group">
                                            <label>Country</label><br>
                                             <select name="country" class="form-control">
                                                <option value="Tanzania,United Republic"> Tanzania,United Republic </option>
                                                <option value="Kenya"> Kenya </option>
                                                <option value="South Africa"> South Africa </option>
                                                <option value="Uganda"> Uganda </option>
                                                <option value="United States"> United States </option>
                                                <option value="Rwanda"> Rwanda </option>
                                                <option value="United Kingdom"> United Kingdom </option>
                                                <option value="China"> China </option>
                                                <option value="...">...</option>
                                            </select>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                            	<div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                    <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' />

                                </div>
                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                                </div>
                                <div class="clearfix"></div>
                        </div>
                    </form>
                </div>

            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->

     <div class="footer">
      <!--<div class="container">
             Made with <i class="fa fa-heart heart"></i> by <a href="https://www.creative-tim.com">Creative Tim</a>. Free download <a href="https://www.creative-tim.com/product/bootstrap-wizard">here.</a>
      </div>-->
    </div>

   <!-- <div class="fixed-plugin">
        <div class="dropdown open">
          <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
          </a>
          <ul class="dropdown-menu">
           <li class="active">
                <a href="index.html">
                   <img src="img/thumb_register.png">
                   Register user flow
                </a>
            </li>
            <li>
                <a href="wizard-list-boat.html">
                   <img src="img/thumb_list_boat.png">
                   List your boat
                </a>
            </li>
            <li>
                <a href="wizard-list-place.html">
                   <img src="img/thumb_list_place.png">
                   List your place
                </a>
            </li>
           <li>
                <a href="wizard-tutorial.html" target="_blank" class="btn btn-default btn-fill">How to use</a>
            </li>
            <li class="license">
                Personal License
            </li>
            <li>
                <a href="https://www.creative-tim.com/product/bootstrap-wizard" target="_blank" class="btn btn-info btn-fill">Download, it's free!</a>
            </li>
          </ul>
        </div>
     </div>-->


</div>

</body>

    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<!--   plugins 	 -->
	<script src="js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="js/jquery.validate.min.js"></script>

	<script src="js/wizard.js"></script>
	

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46172202-1', 'auto');
  ga('send', 'pageview');

</script>


</html>
@endsection