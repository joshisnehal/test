  
  <?php $__env->startSection('content'); ?>

  <center><h1>Registration Form</h1></center>

  <hr>
 
 <?php echo Form::open([ 'route' => 'user.sign_up', 'files' => true, 'class' => 'form-horizontal', 'id' => 'user-form']); ?>


	  <div class="form-group">
                      
    	<?php echo e(Form::label('nmae','Name',['class' => 'control-label col-md-3'])); ?>


			<div class="col-md-8">

            	<?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter full name' ]); ?>

          <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
      </div>

	  </div>

    <div class="form-group">
     	
     	<?php echo e(Form::label('mobile','Contact No.',['class' => 'control-label col-md-3'])); ?>


      		<div class="col-md-8">
       			<?php echo Form::text('mobile', null, ['class' => 'form-control', 'placeholder' => 'Enter Contact Number']); ?>

          <span class="text-danger"><?php echo e($errors->first('mobile')); ?></span>
      		</div>

    </div>


    <div class="form-group">
      		
      	<?php echo e(Form::label('email','Email',['class' => 'control-label col-md-3'])); ?>

      
      		<div class="col-md-8">

       			<?php echo Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter email']); ?>

          <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
      		</div>

    </div>

    <div class="form-group">
                      
      <?php echo e(Form::label('password','Password',['class' => 'control-label col-md-3'])); ?>


      <div class="col-md-8">

            <input type="password" class="form-control" name="password" placeholder="Enter Password" /> 
              
          <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
      </div>

    </div>

    <div class="form-group">
                      
      <?php echo e(Form::label('company_name','Company Name',['class' => 'control-label col-md-3'])); ?>


      <div class="col-md-8">

              <?php echo Form::text('company_name', null, ['class' => 'form-control', 'placeholder' => 'Enter company name', 'minlength'=> '2', 'maxlength'=> '60' ]); ?>

          <span class="text-danger"><?php echo e($errors->first('company_name')); ?></span>
      </div>

    </div>

    <div class="form-group">
                      
      <?php echo e(Form::label('designation','Designation',['class' => 'control-label col-md-3'])); ?>


      <div class="col-md-8">

              <?php echo Form::text('designation', null, ['class' => 'form-control', 'placeholder' => 'Enter designation']); ?>

          <span class="text-danger"><?php echo e($errors->first('designation')); ?></span>
      </div>

    </div>

    <div class="form-group">
                      
      <?php echo e(Form::label('company_size','Company Size',['class' => 'control-label col-md-3'])); ?>


      <div class="col-md-8">

              <?php echo Form::text('company_size', null, ['class' => 'form-control', 'placeholder' => 'Enter company size']); ?>

          <span class="text-danger"><?php echo e($errors->first('company_size')); ?></span>
      </div>

    </div>

    <div class="form-group" style="text-align:center;">

  		<div class="col-md-12">
                              
  			<a href="<?php echo e(route('user.sign_up_form')); ?>" class="btn btn-default icon-btn waves-effect waves-light" id="send_button"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
        <button type="submit" class="btn btn-primary icon-btn waves-effect waves-light save_button" ><i class="fa fa-fw fa-lg fa-check-circle "></i>Sign Up</button>
                              
      </div>
   
    </div>

    <div class="form-group"></div>

    <?php echo Form::close(); ?>



<script type="text/javascript">

  $('#user-form').validate();

       
</script>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>