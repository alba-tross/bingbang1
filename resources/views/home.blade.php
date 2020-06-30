@extends('layouts.app')

@section('content')

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
					 </td>

					 <td>Address: {{$job->address}}              <!--Ubungo, Dar es salaam-->
					 </td>

					 <td>Date: {{$job->created_at->diffForHuman()}}         <!--27/06/2020-->
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




@endsection
