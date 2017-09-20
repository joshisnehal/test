  
  <?php $__env->startSection('content'); ?>
 
 <?php echo Form::open([ 'route' => 'tailors.store', 'files' => true, 'class' => 'form-horizontal', 'id' => 'tailor-form']); ?>


	<div class="form-group">
                      
    	<?php echo e(Form::label('tailor_name','Name',['class' => 'control-label col-md-3'])); ?>


			<div class="col-md-8">

            	<?php echo Form::text('tailor_name', null, ['class' => 'form-control', 'placeholder' => 'Enter full name', 'required' => '', 'minlength'=> '2', 'maxlength'=> '60' ]); ?>

				<div id="validate-tailor_name" class="validate"></div>
            </div>
	</div>

    <div class="form-group">
     	
     	<?php echo e(Form::label('phone_no','Contact No.',['class' => 'control-label col-md-3'])); ?>


      		<div class="col-md-8">
       			<?php echo Form::text('phone_no', null, ['class' => 'form-control', 'placeholder' => 'Enter Contact Number', 'required' => '', 'maxlength' => '12']); ?>

        		<div id="validate-phone_no" class="validate"></div>
      		</div>
    </div>


    <div class="form-group">
      		
      	<?php echo e(Form::label('email','Email',['class' => 'control-label col-md-3'])); ?>

      
      		<div class="col-md-8">

       			<?php echo Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter email ID', 'required' => '']); ?>

        		<div id="validate-email" class="validate"></div>
      		</div>
    </div>

    <div class="form-group">

		<div class="col-md-12 text-right">
                            
			<a href="<?php echo e(route('tailors.index')); ?>" class="btn btn-default icon-btn waves-effect waves-light" id="send_button"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            <button type="submit" class="btn btn-primary icon-btn waves-effect waves-light save_button" ><i class="fa fa-fw fa-lg fa-check-circle "></i>Save</button>
                            
        </div>
 
    </div>

    <div class="form-group"></div>

    <?php echo Form::close(); ?>


  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>