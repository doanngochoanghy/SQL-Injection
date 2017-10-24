<div class="panel-group">
<?php foreach ($list as $post):?>
	<div class=" panel panel-primary">
		<div class="panel-heading" style="font-size: 20px" >
			<?php echo $post['Title']; ?>
		</div>
		<div class="panel-body" style="padding-right: 0px;padding-top: 0px;padding-left: 0px;padding-bottom: 0px;">
			<pre style="margin-bottom: 0px;font-size: 15px"><?php echo $post['content']; ?></pre>
		</div>
		<div class="panel-footer" style="padding-top: 0px;padding-left: 15px;padding-bottom: 0px;padding-right: 15px;">
			<small><?php echo $post['author']; ?></small>
			<small>created at <?php echo $post['date_created']; ?></small>
		</div>
	</div>
<?php endforeach;  ?>
</div>
