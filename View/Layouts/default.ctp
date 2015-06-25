<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'ACCESS-SMC Data Collection Site';
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
//debug($title_for_layout);
?>
<!DOCTYPE html>
<html>
<head>

	
	<?php
	//script to create 5 accordion elements on the fly, for file listings in stage tabs
	//for ($i=100; $i<=104; $i++)
	//{
	//echo "\r\n<script type=\"text/javascript\">\r\n";
	//echo "$(function() {\r\n";
	//echo "var active = 0;\r\n";
	//$accord = "#accordion" . $i ;
	//echo "if($('".$accord ." a.current').length){\r\n";
	//echo " active = $('". $accord . " div').index($('" . $accord . " a.current').parent());\r\n";
	//echo "}";
	//echo "$('" . $accord . "').accordion({ active: active, autoHeight: false });\r\n";
	//echo "});\r\n";
	//echo "</script>\r\n";
	
	//}
	
	?>

	
	<title>
		<?php echo $cakeDescription ?>:

	</title>
	<?php
		echo $this->Html->script('jquery-1.7.2.min');
		echo $this->Html->script('jquery-ui-1.8.22.custom.min');
		//echo $javascript->link("jquery-ui-1.8.22.custom.min");
		
		//echo $this->Html->script('http://openlayers.org/api/OpenLayers.js');
		echo $this->Html->script('http://openlayers.org/en/v3.5.0/build/ol.js');
		//echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('smoothness/jquery-ui-1.8.22.custom');
		echo $this->Html->css('http://openlayers.org/en/v3.5.0/css/ol.css');
		//echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

	?>
		 
	

	
	<script type="text/javascript">
				$(function() {
					$( "#tabbed" ).tabs();
				});
			</script>
</head>
<body>
	<div id="container">
		<div id="header">
		<table><tr>
			<td>
			<img src="/img/unitaid_logo.jpg" alt="UNITAID" border="0" height="100"/>
			</td><td>
			<img src="/img/AccessSMC.jpg" alt="ACCESS-SMC" border="0" height="100" />
			</td><td>
			<img src="/img/malaria_consortium_logo.jpg" alt="Malaria Consortium" border="0" height="100" />
			</td><td>
			<img src="/img/crs_logo.jpg" alt="Catholic Relief Services" border="0" height="100" />
			</td>
			</tr></table>
			<h1><?php echo $this->Html->link($cakeDescription, 'http://smc.lshtm.ac.uk'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('lshtm_logo.jpg', array('alt' => $cakeDescription, 'border' => '0')),
					'http://smc.lshtm.ac.uk/',
					array('target' => '_blank', 'escape' => false, 'id' => 'smc-lshtm')
				);
			?>
			<p>
				<?php  ?>
			</p>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
