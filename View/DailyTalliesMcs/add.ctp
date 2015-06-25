<div class="dailyTalliesMcs form">
<?php 
//debug($form);
foreach ($form['FormSection'] as $formSection):
	foreach ($formSection['FormSectionVariable'] as $variables):
		$variable_list[$variables['title']][1] = $variables['label_english'];
		$variable_list[$variables['title']][2] = $variables['label_french'];
	endforeach;
endforeach;
//debug($variable_list);
//set length of strings for boy and girl in english and french
		$lang = $this->viewVars['user']['Language']['id'];
		if ($lang == 1){
		$boylen=5;
		$girllen=6;
		}
		else
		{
		$boylen=9;
		$girllen=7;
		}
		
		//create YN list for reuse later
		$yn = array();
		$yn[1]="Yes";
		$yn[2]="No";
		
		//temporary error prevention while we have incomplete data on health centres.
		if($user2['Country']['Region']){
		$region=$user2['Country']['Region'][0]['title']; //pick up current district's region
		}
		else
		{
		$region = array();
		}
		$country=$user2['Country']['title_eng'];
		
echo $this->Form->create('DailyTalliesMc'); ?>
	<fieldset>
		<legend><?php echo __('Add Daily Tallies MC'); ?></legend>
		
<div id="tabbed">

<?php
			$lang = $this->viewVars['user']['Language']['id'];
			if($lang ==1){
			?>
		<ul>
		<li><a href="#Part1">Administration</a></li>
		<li><a href="#Part2">Drug Packets Administered</a></li>
		<li><a href="#Part3">Drug Accountability and Reconciliation</a></li>

	</ul>
<?php
}
else
{
?>
	<ul>
		<li><a href="#Part1">Administration</a></li>
		<li><a href="#Part2">Paquets de médicament administré</a></li>
		<li><a href="#Part3">Responsabilisation de Drogues et de la Réconciliation</a></li>
	</ul>
	
<?php
}
?>
<div id="Part1">
	<?php
		//debug($list_districts);
		
		?>
		<table><tr><td>
		<?php
		
		echo $variable_list['tally_sheet'][$lang]."</td><td>".$this->Form->input('tally_sheet',array('label'=>''));
		echo "</td><td>".$variable_list['entered_by'][$lang]."</td><td>".$this->Form->input('entered_by',array('readonly'=>'readonly','label'=>'','default'=>$this->viewVars['user']['id']));
		echo "</tr><tr><td>".$variable_list['region'][$lang]."</td><td>";
		//echo $this->Form->input('tally_sheet');
		if($region){
		echo $this->Form->input('region',array('default'=>$region,'readonly'=>'readonly','label'=>$variable_list['region'][$lang]))."</td><td>";
		}
		else
		{
		echo $this->Form->input('region',array('label'=>''))."</td><td>";
		}
		echo $variable_list['district_id'][$lang]."</td><td>";
		//echo $this->Form->input('district_id',array('label'=>$variable_list['district_id'][$lang]));
		echo $this->Form->input('district',array(
							'type'    => 'select',
							'options' => $list_districts,
							'empty'   => true,
							'label'=> ''
						));
						echo "</td></tr><tr><td>".$variable_list['health_centre_id'][$lang]."</td><td>";
		echo $this->Form->input('health_centre_id',array(
							'type'    => 'select',
							'options' => $list_hcs,
							'empty'   => true,
							'label'=>''
						));
		echo "</td><td>".$variable_list['village'][$lang]."</td><td>";
		echo $this->Form->input('village',array('label'=>''));
		echo "</td><td></tr><tr><td>".$variable_list['chw1'][$lang]."</td><td>";
		echo $this->Form->input('chw1',array('label'=>''));
		echo "</td><td>".$variable_list['chw2'][$lang]."</td><td>";
		echo $this->Form->input('chw2',array('label'=>''));
		echo "</td></tr><tr><td>".$variable_list['cycle'][$lang]."</td><td>";
		echo $this->Form->input('cycle',array(
		'type'=>'select',
		'options'=> $cycle,
		'empty' => true,
		'label'=>''));
		echo "</td><td>".$variable_list['cycle_day'][$lang]."</td><td>";
		echo $this->Form->input('cycle_day',array(
		'type'=>'select',
		'options'=> $cycleday,
		'empty' => true,
		'label'=>''));
		echo "</td></tr></table>";
	?>
	</div>
	<div id="Part2">
	<?php
		if($lang==1){
		$aglen = 13;
		
		}
		else
		{
		$aglen = 15;
		}
		echo "<table><tr>";
		echo "<th>".$variable_list['num_rec_spaq_ag1'][$lang]."</th><td>".$this->Form->input('num_rec_spaq_ag1',array('label'=>''))."</td>
		<th>".substr($variable_list['num_rec_spaq_ag2'][$lang],-$aglen)."</th><td>".$this->Form->input('num_rec_spaq_ag2',array('label'=>''))."</td></tr><tr>";
		
		echo "<th>".$variable_list['num_inel_ag1'][$lang]."</th><td>".$this->Form->input('num_inel_ag1',array('label'=>''))."</td>
		<th>".substr($variable_list['num_inel_ag2'][$lang],-$aglen)."</th><td>".$this->Form->input('num_inel_ag2',array('label'=>''))."</td></tr><tr>";
		
		echo "<th>".$variable_list['num_redose_ag1'][$lang]."</th><td>".$this->Form->input('num_redose_ag1',array('label'=>''))."</td>
		<th>".substr($variable_list['num_redose_ag2'][$lang],-$aglen)."</th><td>".$this->Form->input('num_redose_ag2',array('label'=>''))."</td></tr><tr>";
		
		//echo $this->Form->input('num_rec_spaq_ag1',array('label'=>$variable_list['num_rec_spaq_ag1'][$lang]));
		//echo $this->Form->input('num_rec_spaq_ag2',array('label'=>$variable_list['num_rec_spaq_ag2'][$lang]));
		//echo $this->Form->input('num_inel_ag1',array('label'=>$variable_list['num_inel_ag1'][$lang]));
		//echo $this->Form->input('num_inel_ag2',array('label'=>$variable_list['num_inel_ag2'][$lang]));
		//echo $this->Form->input('num_redose_ag1',array('label'=>$variable_list['num_redose_ag1'][$lang]));
		//echo $this->Form->input('num_redose_ag2',array('label'=>$variable_list['num_redose_ag2'][$lang]));
		echo "<th>".$variable_list['total_num'][$lang]."</th><td>".$this->Form->input('total_num',array('label'=>''));
		echo "</td></tr></table>";
	?>
	</div>
	<div id="Part3">
	<?php	
		echo "<table>";
		echo "<tr>";
		echo "<th>";
		echo $variable_list['dr_ag1'][$lang];
		echo "</th><td>";
		
		echo "</td><th>";
		echo $variable_list['compl_packs_ag1_ob'][$lang];
		echo "</th><th>";
		echo $variable_list['compl_packs_ag1_tr'][$lang];
		echo "</th><th>";
		echo $variable_list['compl_packs_ag1_qu'][$lang];
		echo "</th><th>";
		echo $variable_list['compl_packs_ag1_tl'][$lang];
		echo "</th><th>";
		echo $variable_list['compl_packs_ag1_trem'][$lang];
		echo "</th><th>";
		echo $variable_list['compl_packs_ag1_obv'][$lang];
		echo "</th>";
		echo "</tr>";
		echo "<tr>";
		echo "<td></td><th>";
		echo $variable_list['compl_packs_ag1'][$lang];
		echo "</th><td>";
		echo $this->Form->input('compl_packs_ag1_ob',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('compl_packs_ag1_tr',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('compl_packs_ag1_qu',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('compl_packs_ag1_tl',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('compl_packs_ag1_trem',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('compl_packs_ag1_obv',array('label'=>''));
		echo "</td></tr><tr>";
		echo "<td></td><th>";
		echo $variable_list['sp_ag1'][$lang];
		echo "</th><td>";
		echo $this->Form->input('sp_ag1_ob',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('sp_ag1_tr',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('sp_ag1_qu',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('sp_ag1_tl',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('sp_ag1_trem',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('sp_ag1_obv',array('label'=>''));
		echo "</td></tr><tr>";
		echo "<td></td><th>";
		echo $variable_list['aq_ag1'][$lang];
		echo "</th><td>";
		echo $this->Form->input('aq_ag1_ob',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('aq_ag1_tr',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('aq_ag1_qu',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('aq_ag1_tl',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('aq_ag1_trem',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('aq_ag1_obv',array('label'=>''));
		echo "</td></tr><tr>";
		
		echo "<th>";
		echo $variable_list['dr_ag2'][$lang];
		echo "</th><td>";
		
		echo "</th><th>";
		echo $variable_list['compl_packs_ag2_ob'][$lang];
		echo "</th><th>";
		echo $variable_list['compl_packs_ag2_tr'][$lang];
		echo "</th><th>";
		echo $variable_list['compl_packs_ag2_qu'][$lang];
		echo "</th><th>";
		echo $variable_list['compl_packs_ag2_tl'][$lang];
		echo "</th><th>";
		echo $variable_list['compl_packs_ag2_trem'][$lang];
		echo "</th><th>";
		echo $variable_list['compl_packs_ag2_obv'][$lang];
		echo "</th>";
		echo "</tr>";
		echo "<tr>";
		echo "<td></td><th>";
		echo $variable_list['compl_packs_ag2'][$lang];
		echo "</th><td>";
		echo $this->Form->input('compl_packs_ag2_ob',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('compl_packs_ag2_tr',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('compl_packs_ag2_qu',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('compl_packs_ag2_tl',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('compl_packs_ag2_trem',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('compl_packs_ag2_obv',array('label'=>''));
		echo "</td></tr><tr>";
		echo "<td></td><th>";
		echo $variable_list['sp_ag2'][$lang];
		echo "</th><td>";
		echo $this->Form->input('sp_ag2_ob',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('sp_ag2_tr',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('sp_ag2_qu',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('sp_ag2_tl',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('sp_ag2_trem',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('sp_ag2_obv',array('label'=>''));
		echo "</td></tr><tr>";
		echo "<td></td><th>";
		echo $variable_list['aq_ag2'][$lang];
		echo "</th><td>";
		echo $this->Form->input('aq_ag2_ob',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('aq_ag2_tr',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('aq_ag2_qu',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('aq_ag2_tl',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('aq_ag2_trem',array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('aq_ag2_obv',array('label'=>''));
		echo "</td></tr><tr>";
		
		
		//echo $this->Form->input('compl_packs_ag2_ob',array('label'=>$variable_list['compl_packs_ag2_ob'][$lang]));
		//echo $this->Form->input('compl_packs_ag2_tr',array('label'=>$variable_list['compl_packs_ag2_tr'][$lang]));
		//echo $this->Form->input('compl_packs_ag2_qu',array('label'=>$variable_list['compl_packs_ag2_qu'][$lang]));
		//echo $this->Form->input('compl_packs_ag2_tl',array('label'=>$variable_list['compl_packs_ag2_tl'][$lang]));
		//echo $this->Form->input('compl_packs_ag2_trem',array('label'=>$variable_list['compl_packs_ag2_trem'][$lang]));
		//echo $this->Form->input('compl_packs_ag2_obv',array('label'=>$variable_list['compl_packs_ag2_obv'][$lang]));
		//echo $this->Form->input('sp_ag2_ob',array('label'=>$variable_list['sp_ag2_ob'][$lang]));
		//echo $this->Form->input('sp_ag2_tr',array('label'=>$variable_list['sp_ag2_tr'][$lang]));
		//echo $this->Form->input('sp_ag2_qu',array('label'=>$variable_list['sp_ag2_qu'][$lang]));
		//echo $this->Form->input('sp_ag2_tl',array('label'=>$variable_list['sp_ag2_tl'][$lang]));
		//echo $this->Form->input('sp_ag2_trem',array('label'=>$variable_list['sp_ag2_trem'][$lang]));
		//echo $this->Form->input('sp_ag2_obv',array('label'=>$variable_list['sp_ag2_obv'][$lang]));
		//echo $this->Form->input('aq_ag2_ob',array('label'=>$variable_list['aq_ag2_ob'][$lang]));
		//echo $this->Form->input('aq_ag2_tr',array('label'=>$variable_list['aq_ag2_tr'][$lang]));
		//echo $this->Form->input('aq_ag2_qu',array('label'=>$variable_list['aq_ag2_qu'][$lang]));
		//echo $this->Form->input('aq_ag2_tl',array('label'=>$variable_list['aq_ag2_tl'][$lang]));
		//echo $this->Form->input('aq_ag2_trem',array('label'=>$variable_list['aq_ag2_trem'][$lang]));
		//echo $this->Form->input('aq_ag2_obv',array('label'=>$variable_list['aq_ag2_obv'][$lang]));
		
		echo "</tr>";
		echo "</table>";
		echo $this->Form->input('signed',array('type'=>'select','options' => $yn,'empty'   => true,'label'=>$variable_list['signed'][$lang]));;
	?>
	</div>
	</div>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Daily Tallies Mcs'), array('action' => 'index')); ?></li>
	</ul>
</div>
