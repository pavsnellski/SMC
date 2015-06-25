<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */


App::uses('Debugger', 'Utility');
//$this->layout = 'ajax';
?>


<div id="tabbed">
	<ul>
		<li><a href="#Part1">Introduction</a></li>
		<li><a href="#Part2">ACCESS-SMC</a></li>

	</ul>

<div id="Part1">
<h3><?php echo __d('cake_dev', 'Projects'); 
//source: new ol.source.MapQuest({layer: 'osm'})
?></h3>
</div>

<div id="Part2">

<div class="FL">
<?php
echo $this->Html->link(
    $this->Html->image('smc_access_logo.jpg', array('alt' => 'ACCESS SMC', 'width'=>'200px')),
    'http://www.access-smc.org',
    array('escapeTitle' => false, 'title' => 'ACCESS SMC site')
);
?>
 ACCESS-SMC is a UNITAID-funded project, led by Malaria Consortium in partnership with Catholic Relief Services, which is scaling up access to seasonal malaria chemoprevention (SMC) across the Sahel to save children’s lives. This three year project is supported by London School of Hygiene & Tropical Medicine, Centre de Support de Santé International, Management Sciences for Health, Medicines for Malaria Venture, and Speak Up Africa.  It will provide up to 30 million SMC treatments annually to 7.5 million children less than five years of age in Burkina Faso, Chad, Guinea, Mali, Niger, Nigeria and The Gambia, potentially averting 49,000 deaths due to malaria.
<p><p>
Le projet ACCESS SMC, financé par UNITAID et mis en œuvre par Malaria Consortium en partenariat avec Catholic Relief Services, a pour objectif d’étendre l’accès à la chimio-prévention du paludisme saisonnier dans le Sahel pour sauver des vies d’enfants. La London School of Hygiene and Tropical Medicine, le Centre de Support de Santé International, Management Sciences for Health, Medicines for Malaria Venture et Speak Up Africa contribuent également á la mise en œuvre de ce projet, d’une durée de trois ans. Plus de trente millions de traitements vont être fournit annuellement à 7,5 millions d’enfants de moins de cinq ans au Burkina Faso, au Tchad, en Guinée, au Mali, au Niger, au Nigéria et en Gambie, évitant 49,000 morts potentielles dues au paludisme.</div>
 <div id="map" class="map" style="width: 50%, height: 50%" ></div>

<script type="text/javascript">


var vector1 = new ol.layer.Vector({

  source: new ol.source.Vector({
	
    url: 'files/L1_AccessSMC.kml',
    format: new ol.format.KML({
                    extractStyles: true, 
                    extractAttributes: true,
                    maxDepth: 2
					})
  })
});
var vector2 = new ol.layer.Vector({

  source: new ol.source.Vector({
	
    url: 'files/SMC_L0.kml',
    format: new ol.format.KML({
                    extractStyles: true, 
                    extractAttributes: true,
                    maxDepth: 2
					})
  })
});

/* vector1.getSource().on('change', function(evt){
  var source = evt.target;
  if (source.getState() === 'ready') {
    var numFeatures = source.getFeatures().length; 
    console.log("Count after change: " + numFeatures);
	console.log(source.getFeatures().attributes.CODE);
  }
}); */

//var style = ol.Util.extend({}, ol.Feature.Vector.style['default']);
      var map = new ol.Map({
        target: 'map',
        layers: [
          new ol.layer.Tile({
            source: new ol.source.MapQuest({layer: 'osm'})
          }),vector1,vector2
        ],
		
        view: new ol.View({
          center: ol.proj.transform([4, 15], 'EPSG:4326', 'EPSG:3857'),
          zoom: 4.9
        })
      });
	 // map.addControl(new ol.control.PanZoomBar());
	  //map.addControl(new ol.control.MousePosition());
//trying to read data from kml	  

var controls = {
      selector: new ol.Control.SelectFeature(vector1, { onSelect: createPopup, onUnselect: destroyPopup })
    };

    function createPopup(feature) {
      feature.popup = new ol.Popup.FramedCloud("pop",
          feature.geometry.getBounds().getCenterLonLat(),
          null,
          '<div class="markerContent">'+feature.attributes.CODE+'</div>',
          null,
          true,
          function() { controls['selector'].unselectAll(); }
      );

      //feature.popup.closeOnMove = true;
      map.addPopup(feature.popup);
    }

    function destroyPopup(feature) {
      feature.popup.destroy();
      feature.popup = null;
    }
    
    map.addControl(controls['selector']);
    controls['selector'].activate();
// end of trying to read data
    </script>
</div>


</div>