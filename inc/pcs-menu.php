<?php
/**
* @since 2.0
* Add menu page
*/
function fn_pcs_menu()
{
	?>
	<style type="text/css">
	.pcs-ta{display: block;width: 90%;height: 200px;padding: 20px;margin: 20px;}
	.pcs-div{display: block;padding: 5px 20px;margin:5px 20px;}
	.welcome-panel .welcome-widgets-menus{line-height: 20px}
	</style>


	<div class="wrap">
		<h2>Post Shortcode</h2>
	</div>

	<?php 
		/**
		* Edit css save code
		*/
		$nonceval = md5( get_option("admin_email","you_are_not_secure") );
		if( isset($_POST['pcscss01101989']) && wp_verify_nonce( $_POST['nonce_of_pcs'], $nonceval ) ){

			    $_POST = array_filter($_POST,"sanitize_text_field");

			if( update_option("pcscss01101989",stripslashes( trim( $_POST['pcscss01101989'] ) ) ) ){
				?>
				<div class="updated notice is-dismissible"><p>CSS updated successfully....</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>
				<?php
			}else{
				?>
				<div class="error notice is-dismissible"><p>Something went wrong.... OR ( May your CSS has not changed or edited. )</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>
				<?php
			}
		
		} ?>
	<div class="clear"></div>
	<div id="col-container">
	<div id="col-right">
		<div class="pcs-div">
		<?php $postt = $categories = $showfield = "";
			if(isset($_POST['pcs-code'])): 

			    $_POST = array_filter($_POST,"sanitize_text_field");

				if( isset($_POST['showfield']) && !empty($_POST['showfield'])) $showfield = implode(",", $_POST['showfield']);
				if( isset($_POST['postt']) && !empty($_POST['postt'])) $postt = implode(",", $_POST['postt']);
				if( isset($_POST['categories']) && !empty($_POST['categories'])) $categories = implode(",", $_POST['categories']);
				$shortcode = "[pcs";
				if( isset($_POST['template']) && !empty($_POST['template'])) $shortcode .= " template='".$_POST['template']."'";
				if( isset($_POST['postno']) && !empty($_POST['postno'])) $shortcode .= " postcount='".$_POST['postno']."'";
				if(!empty($showfield)) $shortcode .= " showfield='".$showfield."'";
				if( isset($_POST['excerptl']) && !empty($_POST['excerptl'])) $shortcode .= " excerptl='".$_POST['excerptl']."'";
				if( isset($_POST['rmt']) && !empty($_POST['rmt'])) $shortcode .= " readmoretitle='".$_POST['rmt']."'";
				if( isset($_POST['scf']) && !empty($_POST['scf'])) $shortcode .= " customfield='".$_POST['scf']."'";
				if(!empty( $postt )) $shortcode .= " posttype='".$postt."'";
				if(!empty( $categories )) $shortcode .= " categories='".$categories."'";
				if( isset($_POST['orderby']) && !empty($_POST['orderby'])) $shortcode .= " orderby='".$_POST['orderby']."'";
				if( isset($_POST['order']) && !empty($_POST['order'])) $shortcode .= " order='".$_POST['order']."'";
				$shortcode .= "]";
				echo "<h3>Generated Shortcode :</h3><textarea readonly class='pcs-ta'>". $shortcode."</textarea>";
			endif;
		?>
		</div>
		<div class="pcs-div">
			<h3>Edit CSS</h3>
			<form method="post">
				<textarea class='pcs-ta' name="pcscss01101989" 	><?php if(get_option("pcscss01101989")){
						echo get_option("pcscss01101989");
					}else{
						?>
/* pcs style */

.pcs-reset{line-height: 1.7em;margin-bottom: 3px;}
.pcs-main{overflow: hidden;padding: 10px !important;}
.pcs-sub:first-child {margin-top: 0;}
.pcs-sub{margin-top: 15px;padding-right: 10px;clear: both;display: block;}
.pcs-sub,.pcs-body{overflow: hidden;}
.pcs-img,.pcs-body{display: block;vertical-align: top;box-sizing: border-box;}
.pcs-body {width: 60%;float: left;}
.pcs-img{float: left;width: 30%;margin: 0 10px 10px 0!important;}
.pcs-title{font-size: 15px;display: block;padding: 0px;margin: 0px;margin-bottom: 5px;}
.pcs-excerpt{font-size: 13px;text-align: justify;display: block;}
.pcs-content{font-size: 12px;text-align: justify;display: block;}
.pcs-meta{display: block;font-size: 12px;float: left;}
.pcs-meta a{font-size: 12px !important;}
.pcs-rm{font-size: 15px;display: inline-block;clear: both;text-align: left;}
.pcs-img img{max-width: 100%;max-height: 100%;margin: 0 auto;}
.pcsmeta{float: left;padding-right: 10px;display: inline-block;}
.pcs-meta .glyphicon{margin-right: 3px;}
.pcs-cust-field{display: block;clear: both;}

/* pcs style for Widget Style as ws and Grid Widget Style as gws */

.ws .pcs-sub,.gws .pcs-sub{border-bottom: 1px solid #777;}
.ws .pcs-title a,.gws .pcs-title a{color: #222;}
.ws .pcs-excerpt,.gws .pcs-excerpt{color: #333;}
.ws .pcs-content,.gws .pcs-content{color: #444;}
.ws .pcs-meta,.ws .pcs-meta a,.gws .pcs-meta,.gws .pcs-meta a{color: #555;}
.ws .pcs-rm,.gws .pcs-rm{color: #666;}
.ws a:hover,.gws a:hover{color: #000 !important;}

/* pcs style for Inverse Widget Style as iws and Inverse Grid Widget Style as igws */

.iws.pcs-main,.igws.pcs-main{background-color: #333;}
.iws .pcs-sub,.igws .pcs-sub{border-bottom: 1px solid #777;}
.iws .pcs-title a,.igws .pcs-title a{color: #eee;}
.iws .pcs-excerpt,.igws .pcs-excerpt{color: #ddd;}
.iws .pcs-content,.igws .pcs-content{color: #ddd;}
.iws .pcs-meta,.iws .pcs-meta a,.igws .pcs-meta,.igws .pcs-meta a{color: #ccc;}
.iws .pcs-rm,.igws .pcs-rm{color: #eee !important;}
.iws a:hover,.igws a:hover{color: #fff !important;}

/* pcs style for Grid Widget Style as gws and Inverse Grid Widget Style as igws*/

.gws .pcs-body,.igws .pcs-body{width: 100%;}
.gws .pcs-img,.igws .pcs-img{width: 100%}

				<?php } ?></textarea>
				<?php wp_nonce_field( $nonceval, 'nonce_of_pcs' ); ?>
				<p class="submit"><input type="submit" name="pcs-css" class="button button-primary" value="Save CSS"></p>
			</form>
		</div>
		<div id="welcome-panel" class="welcome-panel pcs-div">
			<div class="welcome-panel-content">
			<div class="welcome-panel-column-container">
			<div class="welcome-panel-column">
							<h3>Do you like it?</h3>
					<a class="button button-primary button-hero load-customize hide-if-no-customize" href="https://wordpress.org/support/view/plugin-reviews/post-shortcode" target="_blank">Rate me</a>
						<a class="button button-primary button-hero hide-if-customize" href="https://wordpress.org/support/view/plugin-reviews/post-shortcode" target="_blank">Rate me</a>
							<p class="hide-if-no-customize">or, <a href="https://wordpress.org/plugins/post-shortcode/faq" target="_blank">FAQ</a> | <a href="https://wordpress.org/support/plugin/post-shortcode" target="_blank">Support</a></p>
					</div>
			<div class="welcome-panel-column">
				<h3>Change Layout</h3>
				<ul>
					<li><div class="welcome-icon welcome-widgets-menus">Do you want to change the layout of shortcode or widget output, ( Like you want to add boostrap layout. ) then you can copy function pcs_get_post_output() from the plugin folder post-shortcode/inc/pcs-shortcode.php file, then paste it to your theme functions.php file and rename function name as pcs_get_custom_post_output().</div></li>
				</ul>
			</div>
			<div class="welcome-panel-column welcome-panel-last">
				<h3>Revert CSS</h3>
				<ul>
					<li><div class="welcome-icon welcome-widgets-menus">Do you want to revert plugin css, you can do it by empty the textarea and click on `Save CSS` button.</div></li>
				</ul>
			</div>
			</div>
			</div>	
			</div>
	</div>
			<div id="col-left">
				<form method="post">
				<p>
				<label for="template">Template:</label> 
				<?php $atl = array(	"ws" 	=> "Widget Style",
									"iws" 	=> "Inverse Widget Style",
									"gws"	=> "Grid Widget Style",
									"igws"	=> "Inverse Grid Widget Style",
									); ?>
				<select  class="widefat" id="template" name="template" >
					<?php foreach ($atl as $tkey => $tvalue) {
						?>
						<option value="<?php echo $tkey; ?>" <?php if( isset($_POST['template'])&& esc_attr( $_POST['template'] ) == $tkey ) echo "selected"; ?>>
						<?php echo $tvalue; ?>
					</option>
					<?php } ?>
				</select>
				</p>
				<p>
				<label for="postno">Number of Post:</label> 
				<input class="widefat" id="postno" name="postno" type="text" value="<?php if( isset($_POST['postno'])) echo esc_attr( $_POST['postno'] ); ?>">
				</p>
				<p>
				<label for="showfield">Show Field:</label> 
				<?php $asf = array(	"title" 	=> "Show title",
									"thumbnail"	=> "Show thumbnail",
									"excerpt" 	=> "Show excerpt",
									"date" 		=> "Show published date",
									"author"	=> "Show post author",
									"cc"		=> "Show comments count",
									"content"	=> "Show content",
									"readme" 	=> "Show read more link",
									"category"	=> "Show post categories",
									"tag"		=> "Show post tags",							
									);?>

				<select  class="widefat" id="showfield" name="showfield[]" multiple >
					<?php 
						if( isset($_POST['showfield']) && !empty($_POST['showfield'])):
							$showfield = $_POST['showfield'];
						else:
							$showfield = array();
						endif;
						foreach ($asf as $skey => $svalue) {
						
						?>
						<option value="<?php echo $skey; ?>" <?php if(in_array( $skey, $showfield ) ) echo "selected"; ?>>
						<?php echo $svalue; ?>
					</option>
					<?php } ?>
				</select>
				</p>
				<p>
				<label for="excerptl">Excerpt length (in words):200</label> 
				<input class="widefat" id="excerptl" name="excerptl" type="text" value="<?php if(isset($_POST['excerptl'])) echo esc_attr( $_POST['excerptl'] ); ?>">
				</p>
				<p>
				<label for="rmt">Read more title : Read more</label> 
				<input class="widefat" id="rmt" name="rmt" type="text" value="<?php if(isset($_POST['rmt'])) echo esc_attr( $_POST['rmt'] ); ?>">
				</p>
				<p>
				<label for="scf">Show custom fields (comma separated):</label> 
				<input class="widefat" id="scf" name="scf" type="text" value="<?php if(isset($_POST['scf'])) echo esc_attr( $_POST['scf'] ); ?>">
				</p>
				<p>
				<label for="postt">Post Type:</label> 
				<select  class="widefat" id="postt" name="postt[]" multiple >
					<?php 
					$apt = pcs_get_all_post_name();
					if(isset( $_POST['postt']) && !empty( $_POST['postt'])):
						$postt = $_POST['postt'];
					else:
						$postt = array();
					endif;
					foreach ($apt as $pkey => $pvalue) {
						?>
						<option value="<?php echo $pvalue; ?>" <?php if(in_array( $pvalue, $postt )  ) echo "selected"; ?>>
						<?php echo $pvalue; ?>
					</option>
					<?php } ?>
				</select>
				</p>
				<p>
				<script type="text/javascript" >
					jQuery(document).ready(function($) {
						$(document).on("change","#postt",function(){
							$val = $(this).val();
							var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
							var data = {
							'action': 'pcs_get_cat',
							'postt': $val.toString(),
							'categories':"<?php echo $categories; ?>"
							};
							$.post(ajaxurl, data, function(response) {
								jQuery("#categories").html(response);
							});
						})				
					});
				</script> 
				<label for="categories">Categories:</label> 
				<?php $acs = pcs_get_all_categories($postt);
				//print_r($acs);
					if(isset($_POST['categories']) && !empty($_POST['categories'])):
						$categories = $_POST['categories'];
					else:
						$categories = array();
					endif; ?>
				<select  class="widefat" id="categories" name="categories[]" multiple >
					<?php 
					foreach ($acs as $ckey => $cvalue) {
						foreach ($cvalue as $ck => $cv) {
							foreach ($cv as $ck1 => $cv1) {
								$cckey = $ck."$".$cv1->slug;
							?>
							<option value="<?php echo $cckey; ?>" <?php if(in_array( $cckey, $categories )  ) echo "selected"; ?>>
							<?php echo $cv1->slug." ( ".$ck." )"; ?>
							</option>
							<?php
						}}
						?>
					<?php } ?>
				</select>
				</p>
				<p>
				<label for="orderby">Order By:</label> 
				<?php $aob = array(	"ID" 			=> "Order by post id",
									"author" 		=> "Order by author",
									"title"			=> "Order by title",
									"name"			=> "Order by post name (post slug)",
									"date" 			=> "Order by date. ",
									"modified"		=> "Order by last modified date",
									"rand" 			=> "Random order",
									"comment_count"	=> "Order by number of comments",
									"menu_order"	=> "Order by Page Order (menu_order) ",							
									); ?>
				<select  class="widefat" id="orderby" name="orderby" >
					<?php foreach ($aob as $okey => $ovalue) {
						?>
						<option value="<?php echo $okey; ?>" <?php if( isset($_POST['orderby']) && esc_attr( $_POST['orderby'] ) == $okey ) echo "selected"; ?>>
						<?php echo $ovalue; ?>
					</option>
					<?php } ?>
				</select>
				</p>
				<p>
				<label for="order">Order:</label> 
				<?php $aor = array(	"DESC" 	=> "Descending order from highest to lowest values ",
									"ASC" 	=> "Ascending order from lowest to highest values",							
									); ?>
				<select  class="widefat" id="order" name="order" >
					<?php foreach ($aor as $rkey => $rvalue) {
						?>
						<option value="<?php echo $rkey; ?>" <?php if( isset($_POST['order']) && esc_attr( $_POST['order'] ) == $rkey ) echo "selected"; ?>>
						<?php echo $rvalue; ?>
					</option>
					<?php } ?>
				</select>
				</p>
				<p class="submit"><input type="submit" name="pcs-code" id="submit" class="button button-primary" value="Generate Shortcode"></p>
				</form>
			</div>
		
	</div>
	<?php
}
?>