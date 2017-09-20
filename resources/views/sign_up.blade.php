  @extends('layout')
  @section('content')

  <center><h1>Registration Form</h1></center>

  <hr>
 
 {!! Form::open([ 'route' => 'user.sign_up', 'files' => true, 'class' => 'form-horizontal', 'id' => 'user-form']) !!}

	  <div class="form-group">
                      
    	{{ Form::label('nmae','Name',['class' => 'control-label col-md-3']) }}

			<div class="col-md-8">

            	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter full name' ]) !!}
          <span class="text-danger">{{ $errors->first('name') }}</span>
      </div>

	  </div>

    <div class="form-group">
     	
     	{{ Form::label('mobile','Contact No.',['class' => 'control-label col-md-3']) }}

      		<div class="col-md-8">
       			{!! Form::text('mobile', null, ['class' => 'form-control', 'placeholder' => 'Enter Contact Number']) !!}
          <span class="text-danger">{{ $errors->first('mobile') }}</span>
      		</div>

    </div>


    <div class="form-group">
      		
      	{{ Form::label('email','Email',['class' => 'control-label col-md-3']) }}
      
      		<div class="col-md-8">

       			{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter email']) !!}
          <span class="text-danger">{{ $errors->first('email') }}</span>
      		</div>

    </div>

    <div class="form-group">
                      
      {{ Form::label('password','Password',['class' => 'control-label col-md-3']) }}

      <div class="col-md-8">

            <input type="password" class="form-control" name="password" placeholder="Enter Password" /> 
              
          <span class="text-danger">{{ $errors->first('password') }}</span>
      </div>

    </div>

    <div class="form-group">
                      
      {{ Form::label('company_name','Company Name',['class' => 'control-label col-md-3']) }}

      <div class="col-md-8">

              {!! Form::text('company_name', null, ['class' => 'form-control', 'placeholder' => 'Enter company name', 'minlength'=> '2', 'maxlength'=> '60' ]) !!}
          <span class="text-danger">{{ $errors->first('company_name') }}</span>
      </div>

    </div>

    <div class="form-group">
                      
      {{ Form::label('designation','Designation',['class' => 'control-label col-md-3']) }}

      <div class="col-md-8">

              {!! Form::text('designation', null, ['class' => 'form-control', 'placeholder' => 'Enter designation']) !!}
          <span class="text-danger">{{ $errors->first('designation') }}</span>
      </div>

    </div>

    <div class="form-group">
                      
      {{ Form::label('company_size','Company Size',['class' => 'control-label col-md-3']) }}

      <div class="col-md-8">

              {!! Form::text('company_size', null, ['class' => 'form-control', 'placeholder' => 'Enter company size']) !!}
          <span class="text-danger">{{ $errors->first('company_size') }}</span>
      </div>

    </div>

    <div class="form-group" style="text-align:center;">

  		<div class="col-md-12">
                              
  			<a href="{{route('user.sign_up_form')}}" class="btn btn-default icon-btn waves-effect waves-light" id="send_button"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
        <button type="submit" class="btn btn-primary icon-btn waves-effect waves-light save_button" ><i class="fa fa-fw fa-lg fa-check-circle "></i>Sign Up</button>
                              
      </div>
   
    </div>

    <div class="form-group"></div>

    {!! Form::close() !!}


<script type="text/javascript">

  $('#user-form').validate();

       
</script>

  @endsection