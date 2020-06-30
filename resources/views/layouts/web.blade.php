@extends('layouts.home')

        <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}" > 
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" >
		
    

@section('content')
<div id ="slider">
 <figure>
      <img src="images/ronaldo.png">
	  <img src="images/copy.png">
	  <img src="images/mo.png">
	  <img src="images/liverpool.png">
	  <img src="images/ronaldo.png">
 </figure>
</div>
	
    <div class="search-container col-md-10">
	<div class ="search-panel header">
	<div class style="padding-top:100px;">
	 <h2 class ="text-center">Search Online Jobs or Hire Employees!</h2>
	 </div>
	 </div>
        <div class="multiple-search">
        <form action="#" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Enter Job Title, Skills or Company">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Enter City, State or Country">
                        </div>
                        <div class="col-lg-3 col-md- col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>Category</option>
                                <option>Finance & Accounting</option>
                                <option>Civil Engineering</option>
                                <option>IT & Software</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                            </select>
                        </div> 
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <button type="button" class="btn btn-primary rounded">Search</button>
                        </div>
                    </div>
					</div>
                </div>
            </div>
        </form>
        <hr>
    </div>
           
	                  <div class ="account">
	                      <div class style="padding-top:100px; padding-right:250px; margin-right:50px;">
			                 <h3 style="text-align:right; padding-right:240px;">Create an Account!</h3>
                               <div class="button">
                                <button type="button" class="btn btn-primary rounded">I'm JobSekeer</button>
                                <button type="button" class="btn btn-primary rounded">I'm an Employer</button>
			                  </div>
                              </div>
			                 <hr>
                        </div>



       
	  <!-- <div class ="Job Section">
	
	   <div class ="Blocks">
	     <div class style="padding-top:80px ">
	      <div class = "Job Section-Heading">
		  <h3 class ="text-center"><b>Popular Job Categories</b></h3>
	   </div></br>





<ul id ="JobBlocks">
		
		   <img src="images/Finance&Accounting.jpg" />
		   <li><a href="#">Finance & Accounting</a>
		 
		  </li>
		  
		  
		   <img src="images/IT & Software.jpg" />
		   <li><a href="#">IT & Software</a>
		 </li>
		 
		  <li>Human Resource</li>
		   <li>Health</li><hr></br>
		    <li>Telecommunications</li>
		   <li>Design, Art & Multimedia</li>
		   <li>Restaurant Food & Services</li>
		   <li>Constructions/Facilities</li>
		  
		</ul>   
		 </div>  
		</div>
	   </div>
-->
<section class="jobs">
			<div class="container">
				<div class="row heading">
					<h2>Find Popular Jobs</h2>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p> -->
				</div>
				<div class="companies">
					<div class="company-list">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<div class="company-logo">
									<img src="img/google.png" class="img-responsive" alt="" />
								</div>
							</div>
							<div class="col-md-10 col-sm-10">
								<div class="company-content">
									<h3>IOS Developer<span class="full-time">Full Time</span></h3>
									<p><span class="company-name"><i class="fa fa-briefcase"></i>Google</span><span class="company-location"><i class="fa fa-map-marker"></i> 07th Avenue, New York, NY, United States</span><span class="package"><i class="fa fa-money"></i>$22,000-$50,000</span></p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="company-list">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<div class="company-logo">
									<img src="img/microsoft.png" class="img-responsive" alt="" />
								</div>
							</div>
							<div class="col-md-10 col-sm-10">
								<div class="company-content">
									<h3>Back-End developer<span class="part-time">Part Time</span></h3>
									<p><span class="company-name"><i class="fa fa-briefcase"></i>Microsoft</span><span class="company-location"><i class="fa fa-map-marker"></i> 7th Avenue, New York, NY, United States</span><span class="package"><i class="fa fa-money"></i>$20,000-$52,000</span></p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="company-list">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<div class="company-logo">
									<img src="img/apple.png" class="img-responsive" alt="" />
								</div>
							</div>
							<div class="col-md-10 col-sm-10">
								<div class="company-content">
									<h3>UI/UX Designer<span class="freelance">Freelance</span></h3>
									<p><span class="company-name"><i class="fa fa-briefcase"></i>Apple</span><span class="company-location"><i class="fa fa-map-marker"></i> 7th Avenue, New York, NY, United States</span><span class="package"><i class="fa fa-money"></i>$22,000-$50,000</span></p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="company-list">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<div class="company-logo">
									<img src="img/wipro.png" class="img-responsive" alt="" />
								</div>
							</div>
							<div class="col-md-10 col-sm-10">
								<div class="company-content">
									<h3>IOS developer<span class="internship">Intership</span></h3>
									<p><span class="company-name"><i class="fa fa-briefcase"></i>Wipro</span><span class="company-location"><i class="fa fa-map-marker"></i> 8th Avenue, New York, NY, United States</span><span class="package"><i class="fa fa-money"></i>$24,000-$52,000</span></p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="company-list">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<div class="company-logo">
									<img src="img/twitter.png" class="img-responsive" alt="" />
								</div>
							</div>
							<div class="col-md-10 col-sm-10">
								<div class="company-content">
									<h3>Marketing Holder<span class="full-time">Full Time</span></h3>
									<p><span class="company-name"><i class="fa fa-briefcase"></i>Twitter</span><span class="company-location"><i class="fa fa-map-marker"></i> 4th Avenue, New York, NY, United States</span><span class="package"><i class="fa fa-money"></i>$24,000-$48,000</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<input type="button" class="btn brows-btn" value="Brows All Jobs" />
				</div>
			</div>
		</section>

<!-- <div class="wrapper"> 

  <h1>Popular Job Categories!</h1>
  
     <div class="team">

        <div class="team_member">
           <div class="team_img">
               <img src= "images/Mourinho.png" alt="team_member_image">
                  </div>

                      <h3>Roland Paul</h3>
                           <p class="role">Programmer</p>
                               <p>With reference to above captioned subject that was 
                                advertised  Monday on 12th February 2020, 
                                I’m humbly sending in your office my application for
                                consideration. I completed University studies in 
                                Bachelor of Science in Business Information Systems 
                                at the University of Dodoma in 2017. </p>
                                   </div>

       <div class="team_member">
          <div class="team_img">
             <img src= "images/sosha.png" alt="team_member_image">
               </div>

                  <h3>Eng.Said Makono</h3>
                     <p class="role">Software Engineer</p>
                          <p>With reference to above captioned subject that was 
                                advertised  Monday on 12th February 2020, 
                                I’m humbly sending in your office my application for
                                consideration. I completed University studies in 
                                Bachelor of Science in Business Information Systems 
                                at the University of Dodoma in 2017. </p>
                                   </div>


                                  

       <div class="team_member">
          <div class="team_img">
             <img src= "images/brendan.png" alt="team_member_image">
                </div>
				
                     <h3>Hn. Daudi A Bashite</h3>
                        <p class="role">Regional Comissioner</p>
                             <p>With reference to above captioned subject that was 
                                advertised  Monday on 12th February 2020, 
                                I’m humbly sending in your office my application for
                                consideration. I completed University studies in 
                                Bachelor of Science in Business Information Systems 
                                at the University of Dodoma in 2017. </p>
                                   </div>


                            


     </div>
   </div>
<hr> -->



@endsection