@extends('backend.layout.master')

@section('title', 'change password')

@section('contant')

	<div class="page-wrapper p-5">

			@if( $errors->any() )
	            <div class="alert alert-danger" style="color: red;">
	                @foreach($errors->all() as $error)
	                    <li>{!! $error !!}</li>
	                @endforeach
	            </div>
	        @endif

	        @if (\Session::has('success'))
	            <div class="alert alert-success" style="color: green">
	                {!! \Session::get('success') !!}</li>
	            </div>
	        @endif

	        @if (\Session::has('danger'))
	            <div class="alert alert-danger" style="color: red;">
	                {!! \Session::get('danger') !!}</li>
	            </div>
	        @endif
	        

		    <h2 style="text-align: center; padding: 50px 0;"> Inquiry</h2>

		    <div>
		    	
				    

			<div class="row">
		        <div class="col-lg-3">
		            {!! Form::open(['method' => 'GET']) !!}
		                <div class="input-group my-3">
		                    {!! Form::text('service_title','',['class' => 'form-control', 'placeholder' => 'Search By Title...'])!!}
		                    <div class="input-group-append">
		                        
		                    {{ Form::submit('search', ['class'=>'btn btn-primary']) }}
		                    </div>
		                </div>
		            {!! Form::close() !!}

		        </div>
		        
		    </div>
		    <div class="card">
		        <div class="card-body">
		            
		            <div class="">
		                <div class="row mb-3 ">
		                    <div class="col float-left" style="font-size: 18px;">{{ $lists1->firstItem() }} - {{ $lists1->lastItem() }} out of {{ $lists1->total() }} record(s) showing.                
		                    </div>
		                {{ Form::open( ['url' => url('admin-control/inquiry/removeMultiple'), 'method'=>'post'] ) }}
		                    <div class="col text-right">
		                    	<!--<a href="{{ url('admin-control/service/add') }}" class="btn btn-primary"><i class="mdi mdi-plus"></i> Add Inquiry</a>-->
		                        <button type="submit" class="btn btn-primary" ><i class="icon-bin"></i></button>
		                    </div>
		                </div>
	        			<div class="table-responsive">
					        <table border="1" style="width: 100%" class="table table-bordered">
					            <thead style="background: #1F262D; color: #fff;">
					                <tr>
					                	<th></th>
					                    <th>S.No.</th>
					                    <th>Name</th>
					                    <th>Email</th>
					                    <th>Country</th>
					                    <th>Mobile No.</th>
					                    <th>Message</th>					                    
					                    <th>Action</th>
					                   
					                </tr>
					            </thead>
					            <tbody>
					                @php
					                $sn = $lists1->firstItem();
					                @endphp
					                @foreach( $lists1 as $list )
					                <tr>
					                	<td>{{ Form::checkbox('check[]',$list->id, '') }}</td>
					                    <td>{{ $sn++ }}.</td>
					                    <td>{{ $list->user_name }}</td>
					                    <td>{{ $list->user_email }}</td>
					                    <td>{{ $list->user_country }}</td>
					                    <td>{{ $list->user_mobile }} </td>
					                    <td>{{ $list->user_message }} </td>					                    
					                    <td>
	                    					<a href="{{ url('admin-control/inquiry/remove/'.$list->id) }}">DELETE</a>
	                    				</td>
					                    
					                </tr>
					                @endforeach
					            </tbody>
					        </table>
					    </div>
				        
				    </div>
				    {{  Form::close()  }}

				   
		    </div>
		</div>

@stop