@extends('layouts.app')
@section('content')

		
<section class="main-banner" style="background:#242c36 url(images/kocha.png) no-repeat">
			<div class="container">
				<div class="caption">
					<h2>Build Your Career</h2>
					<form>
						<fieldset>
							<div class="col-md-4 col-sm-4 no-pad">
								<input type="text" class="form-control border-right" placeholder="Skills, Designation, Companies" />
							</div>
							<div class="col-md-3 col-sm-3 no-pad">
								<select class="selectpicker border-right">
								  <option>Experience</option>
								  <option>0 Year</option>
								  <option>1 Year</option>
								  <option>2 Year</option>
								  <option>3 Year</option>
								  <option>4 Year</option>
								  <option>5 Year</option>
								  <option>6 Year</option>
								  <option>7 Year</option>
								  <option>8 Year</option>
								  <option>9 Year</option>
								 <option>10 Year</option>
								</select>
							</div>
							<div class="col-md-3 col-sm-3 no-pad">
								<select class="selectpicker">
								  <option>Select Category</option>
								  <option>Accounf & Finance</option>
								  <option>Information & Technology</option>
								  <option>Marketing</option>
								  <option>Food & Restaurent</option>
								</select>
							</div>
							<div class="col-md-2 col-sm-2 no-pad">
								<input type="submit" class="btn seub-btn" value="submit" />
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</section>
<br>

<div class="container">
    <div class="row ">
        <h1>Recent Jobs</h1>
		   <table class ="table">
             <thead>
		        <th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
		     </thead>
		     <tbody>
			 @foreach($jobs as $job)
		        <tr>
                     <td>
					     <img src = "{{asset('avatar/total.png')}}" width="80">
					 </td>

					 <td>Position: {{$job->position}}      <!--Web Developer -->
					 <br>
					    status: {{$job->status}}
					 </td>

					 <td>Address: {{$job->address}}              <!--Ubungo, Dar es salaam-->
					 </td>

					 <td>Deadline: {{$job->last_date}}         <!--27/06/2020-->
					 </td>

					 <td>
					    <a><button class ="btn btn-success btn-sm">Apply</button>
					    </a>
					 </td>

				</tr>
				@endforeach
		     </tbody>
		    </table>
    </div>
</div>

<!--<div class="container">
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
        </div>
    </div>
</div>-->
<br><br>


@endsection
