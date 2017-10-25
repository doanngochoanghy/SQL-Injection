<h1><?php echo "Edit Post"; ?></h1>
<?php echo form_open(base_url().'News/Edit/'.$post['post_id']); ?>
<div class="row">
	<div class="col-lg-8 col-lg-offset-2">
		<div class="form-group">
			<label>Title</label>
			<?php echo form_input('title', $post['title'],$attribute = array('required', 'class'=>"form-control","placeholder"=>"Write title here" )); ?>
		</div>
		<div class="form-group">
			<label>Content</label>
			 <?php echo form_textarea('content', $post['content'],array('class' => 'form-control','placeholder'=>'Write content here','required')); ?>
		</div>
		<div class="form-group">
			<div class="col-md-12 col-md-offset-0">
				<button type="submit" class="btn btn-warning">Submit</button>
			</div>
		</div>
	</div>
</div>
<?php echo form_close(); ?>
