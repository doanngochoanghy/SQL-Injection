<h1><?php echo "Send Message"; ?></h1>
<?php echo form_open(base_url().'News/Create'); ?>
<div class="row">
	<div class="col-lg-8 col-lg-offset-2">
		<div class="form-group">
			<label>Title</label>
			<!-- <input type="text" class="form-control" placeholder="Write title here" name="title" value="" required> -->
			<?php echo form_input('title', '',$attribute = array('required', 'class'=>"form-control","placeholder"=>"Write title here" )); ?>
		</div>
		<div class="form-group">
			<label>Content</label>
			 <!-- <textarea type="text" class="form-control" placeholder="Write content here" name="content" required></textarea> -->
			 <?php echo form_textarea('content', '',array('class' => 'form-control','placeholder'=>'Write content here','required')); ?>
		</div>
		<div class="form-group">
			<div class="col-md-12 col-md-offset-0">
				<button type="submit" class="btn btn-warning">Submit</button>
				<!-- <button type="reset" class="btn btn-danger disable">Cancel</button> -->
			</div>
		</div>
	</div>
</div>
<?php echo form_close(); ?>
