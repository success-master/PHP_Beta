<?php defined('SYSTEM_INIT') or die('Invalid Usage'); ?> 
<div id="body">
	<!--left panel start here-->
	<?php include Utilities::getViewsPartialPath().'left.php'; ?>   
	<!--left panel end here-->
	
	<!--right panel start here-->
	<?php include Utilities::getViewsPartialPath().'right.php'; ?>   
	<!--right panel end here-->
	<!--main panel start here-->
	<div class="page">
		<?php echo html_entity_decode($breadcrumb); ?>		
		<div class="fixed_container">
			<div class="row">
				<div class="col-sm-12">				
					<section class="section searchform_filter"> 
						<div class="sectionhead">
							<h4>Blog Comments Management</h4>						
						</div>
						
						<div class="sectionbody space togglewrap" style="display:none;">                    
							<?php echo $frmComment->getFormHtml(); ?>                        
						</div>						
					</section>	
					<section class="section">
						<div class="sectionhead">
							<h4>Blog Comment List</h4>
						</div>
						<div id="comment-list">
						</div>
					</section>
				</div>
			</div>
		</div>          
	<!--main panel end here-->
	</div>
<!--body end here-->
</div>			