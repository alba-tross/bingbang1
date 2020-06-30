@extends('layouts.app')

@section('content')
<html>

<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}" >
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" >


<!--
<div class="container">
 
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>-->
		
 
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
    </div><hr>
	                  <div class ="account">
	                      <div class style="padding-top:100px; padding-left:250px;">
			                 <h3>Don't you have an Account?, then Create an Account!</h3>
                                <button type="button" class="btn btn-primary rounded">I'm JobSekeer</button>
                                <button type="button" class="btn btn-primary rounded">I'm an Employer</button>
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
	   

<div class="wrapper">

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


	
</div><hr>
@endsection

</html>