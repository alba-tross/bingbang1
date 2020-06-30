@extends('layouts.app')

@section('content')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
<div class= "panel panel-primary">
     <div class= "Panel Heading">
	  <h2 class="text-center">Multi-dropdown</h2>
	  </div>
	  <div class="Panel body">
	    <div class="col-md-3">
		  <select class="form-control" name="country" id="country">
		    
			<option selected="false">
			  Country
			</option>
		   </select>
		   <div>
		        <div class="col-md-6">
				  <select class="form-control" name="state" id="state">
		          <option selected="false">
				  State...
				  </option>
				  </select>
				 </div>
				 <div class ="col-md-3">
				  <button class="btn btn-primary rounded" type="submit" id="search" name="search">
				    <i class ="fa fa-search"></i>
				  </button>	 
		       </div>
			   </div>
			   </div>
			   

@endsection