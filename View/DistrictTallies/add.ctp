<div class="districtTallies form">
<?php 
//debug(h($form));
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
		//debug($yn);

echo $this->Form->create('DistrictTally'); ?>
	<fieldset>
		<legend><?php echo __('Add District Tally'); ?></legend>
		
		
		
		
	<div id="tabbed">
<?php
			$lang = $this->viewVars['user']['Language']['id'];
			if($lang ==1){
			?>
		<ul>
		<li><a href="#Part1">Administration</a></li>
		<li><a href="#Part2">Treatments administered</a></li>
		<li><a href="#Part3">Drug reconciliation</a></li>

	</ul>
<?php
}
else
{
?>
	<ul>
		<li><a href="#Part1">Administration</a></li>
		<li><a href="#Part2">Traitements administrés</a></li>
		<li><a href="#Part3">Réconciliation des médicaments</a></li>
	</ul>
	
<?php
}
?>
	<div id="Part1">
	<?php
		//debug($user2);
		//debug($strategy);
		
		//temporary error prevention while we have incomplete data on health centres.
		if($user2['Country']['Region']){
		$region=$user2['Country']['Region'][0]['title']; //pick up current district's region
		}
		else
		{
		$region = array();
		}
		$country=$user2['Country']['title_eng'];
		
		
		//$region=$user2['Country']['Region'][0]['title']; //pick up current district's region
		//$country=$user2['Country']['title_eng'];
		//debug($this->viewVars['user']);
		//debug($this->Session->read('UserProfile'));

		echo "<table>";
		echo "<tr><td>".$variable_list['sheet_number'][$lang]."</td><td>".$this->Form->input('sheet_number',array('label'=>''))."</td><td>".$variable_list['entered_by'][$lang]."</td><td>".$this->Form->input('entered_by',array('readonly'=>'readonly','label'=>'','default'=>$this->viewVars['user']['id']))."</td></tr>";
		echo "<tr><td>";
	
		echo $this->Form->input('dist_date',array('label'=>$variable_list['date'][$lang])). "</td><td>";
		echo $this->Form->input('country',array('default'=>$country,'readonly'=>'readonly','label'=>$variable_list['country'][$lang]))."</td><td>";
		if($region){
		echo $this->Form->input('region',array('default'=>$region,'readonly'=>'readonly','label'=>$variable_list['region'][$lang]))."</td><td>";
		}
		else
		{
		echo $this->Form->input('region',array('label'=>$variable_list['region'][$lang]))."</td><td>";
		}
		
		echo "</tr>";
		echo "<tr><td>";
		echo $this->Form->input('hdistrict',array(
							'type'    => 'select',
							'options' => $list_districts,
							'empty'   => false,
							'label'=>$variable_list['hdistrict'][$lang]
						)). "</td><td>";
		echo $this->Form->input('health_centre_id',array(
							'type'    => 'select',
							'options' => $list_hcs,
							'empty'   => false,
							'label'=>$variable_list['health_centre_id'][$lang]
						)). "</td><td>";
		echo $this->Form->input('strategy',array(
		'type'=>'select',
		'options'=> $strategy,
		'empty' => true,
		'label'=>$variable_list['strategy'][$lang])). "</td><td>";
		echo "<tr><td>";
		echo $this->Form->input('chwname',array('label'=>$variable_list['chwname'][$lang]))."</td><td>";
		echo $this->Form->input('cell',array('label'=>$variable_list['cell'][$lang]))."</td><td>";
		echo $this->Form->input('supervisor',array('label'=>$variable_list['supervisor'][$lang]))."</td><td>";
		echo $this->Form->input('ph',array('label'=>$variable_list['ph'][$lang]))."</td><td>";
		echo "<tr><td>";
		echo $this->Form->input('village',array('label'=>$variable_list['village'][$lang]))."</td><td>";
		echo $this->Form->input('cycle',array(
		'type'=>'select',
		'options'=> $cycle,
		'empty' => true,
		'label'=>$variable_list['cycle'][$lang]))."</td><td>";
		echo $this->Form->input('cycleday',array(
		'type'=>'select',
		'options'=> $cycleday,
		'empty' => true,
		'label'=>$variable_list['cycleday'][$lang]))."</td><td>";
		echo "</tr></table>";
		?>
	</div>
		<div id="Part2">
		<?php
		echo "<table>";
		echo "<td></td><th>".substr($variable_list['rec_smc_ag1_b'][$lang],-$boylen+1)."</th><th>".substr($variable_list['rec_smc_ag1_g'][$lang],-$girllen+1)."</th><td></td><th>".substr($variable_list['rec_smc_ag1_b'][$lang],-$boylen+1)."</th><th>".substr($variable_list['rec_smc_ag1_g'][$lang],-$girllen+1)."</th>";
		echo "<tr><th>";
		echo substr($variable_list['rec_smc_ag1_b'][$lang],0,strlen($variable_list['rec_smc_ag1_b'][$lang])-$boylen);
		echo "</th><td>";
		echo $this->Form->input('rec_smc_ag1_b', array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('rec_smc_ag1_g',array('label'=>''));
		echo "</td><th>";
		echo substr($variable_list['rec_smc_ag2_b'][$lang],strlen($variable_list['rec_smc_ag2_b'][$lang])-$boylen-9,9);
		echo "</th><td>";
		echo $this->Form->input('rec_smc_ag2_b', array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('rec_smc_ag2_g', array('label'=>''));
		echo "</td><tr><th>";
		echo substr($variable_list['inegbl_smc_ag1_b'][$lang],0,strlen($variable_list['inegbl_smc_ag1_b'][$lang])-$boylen);
		echo "</th><td>";
		echo $this->Form->input('inegbl_smc_ag1_b', array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('inegbl_smc_ag1_g', array('label'=>''));
		echo "</td><th>";
		echo substr($variable_list['rec_smc_ag2_b'][$lang],strlen($variable_list['rec_smc_ag2_b'][$lang])-$boylen-9,9);
		echo "</th><td>";
		echo $this->Form->input('inegbl_smc_ag2_b', array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('inegbl_smc_ag2_g', array('label'=>''));
		echo "</td><tr><th>";
		echo substr($variable_list['redose_smc_ag1_b'][$lang],0,strlen($variable_list['redose_smc_ag1_b'][$lang])-$boylen);
		echo "</th><td>";
		echo $this->Form->input('redose_smc_ag1_b', array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('redose_smc_ag1_g', array('label'=>''));
		echo "</td><th>";
		echo substr($variable_list['rec_smc_ag2_b'][$lang],strlen($variable_list['rec_smc_ag2_b'][$lang])-$boylen-9,9);
		echo "</th><td>";
		echo $this->Form->input('redose_smc_ag2_b', array('label'=>''));
		echo "</td><td>";
		echo $this->Form->input('redose_smc_ag2_g', array('label'=>''));
		echo "</td></tr></table>";
		?>
		</div>
		<div id="Part3">
		<?php
		echo "<table>";
	
		echo "<tr><th>".$variable_list['lbl_agegp1'][$lang]."</th><th>".$variable_list['ag1_compl_start_number'][$lang]."</th>
		<th>".$variable_list['ag1_compl_dist_num'][$lang]."</th>
		<th>".$variable_list['ag1_compl_remain'][$lang]."</th>
		<th>".$variable_list['ag1_compl_lost'][$lang]."</th>
		<th>".$variable_list['ag1_compl_obs'][$lang]."</th></tr>";
		echo "<tr><th>".$variable_list['lbl_compl'][$lang]."</th><td>".$this->Form->input('ag1_compl_start_number',array('label'=>''))."</td>
		<td>".$this->Form->input('ag1_compl_dist_num',array('label'=>''))."</td>
		<td>".$this->Form->input('ag1_compl_remain',array('label'=>''))."</td>
		<td>".$this->Form->input('ag1_compl_lost',array('label'=>''))."</td>
		<td width='30%'>".$this->Form->input('ag1_compl_obs',array('label'=>''))."</td></tr>";
		
		echo "<tr><th>".$variable_list['lbl_sp'][$lang]."</th><td>".$this->Form->input('ag1_sp_start_num',array('label'=>''))."</td>
		<td>".$this->Form->input('ag1_sp_dist_num',array('label'=>''))."</td>
		<td>".$this->Form->input('ag1_sp_remain',array('label'=>''))."</td>
		<td>".$this->Form->input('ag1_sp_lost',array('label'=>''))."</td>
		<td width='30%'>".$this->Form->input('ag1_sp_obs',array('label'=>''))."</td></tr>";

		echo "<tr><th>".$variable_list['lbl_aq'][$lang]."</th><td>".$this->Form->input('ag1_aq_start_num',array('label'=>''))."</td>
		<td>".$this->Form->input('ag1_aq_dist_num',array('label'=>''))."</td>
		<td>".$this->Form->input('ag1_aq_remain',array('label'=>''))."</td>
		<td>".$this->Form->input('ag1_aq_lost',array('label'=>''))."</td>
		<td width='30%'>".$this->Form->input('ag1_aq_obs',array('label'=>''))."</td></tr>";

		
		echo "<tr><th>".$variable_list['lbl_agegp2'][$lang]."</th><th>".$variable_list['ag1_compl_start_number'][$lang]."</th>
		<th>".$variable_list['ag1_compl_dist_num'][$lang]."</th>
		<th>".$variable_list['ag1_compl_remain'][$lang]."</th>
		<th>".$variable_list['ag1_compl_lost'][$lang]."</th>
		<th>".$variable_list['ag1_compl_obs'][$lang]."</th></tr>";
		
		
		echo "<tr><th>".$variable_list['lbl_compl2'][$lang]."</th><td>".$this->Form->input('ag2_compl_start_number',array('label'=>''))."</td>
		<td>".$this->Form->input('ag2_compl_dist_num',array('label'=>''))."</td>
		<td>".$this->Form->input('ag2_compl_remain',array('label'=>''))."</td>
		<td>".$this->Form->input('ag2_compl_lost',array('label'=>''))."</td>
		<td width='30%'>".$this->Form->input('ag2_compl_obs',array('label'=>''))."</td></tr>";
		
		echo "<tr><th>".$variable_list['lbl_sp2'][$lang]."</th><td>".$this->Form->input('ag2_sp_start_num',array('label'=>''))."</td>
		<td>".$this->Form->input('ag2_sp_dist_num',array('label'=>''))."</td>
		<td>".$this->Form->input('ag2_sp_remain',array('label'=>''))."</td>
		<td>".$this->Form->input('ag2_sp_lost',array('label'=>''))."</td>
		<td width='30%'>".$this->Form->input('ag2_sp_obs',array('label'=>''))."</td></tr>";

		echo "<tr><th>".$variable_list['lbl_aq2'][$lang]."</th><td>".$this->Form->input('ag2_aq_start_num',array('label'=>''))."</td>
		<td>".$this->Form->input('ag2_aq_dist_num',array('label'=>''))."</td>
		<td>".$this->Form->input('ag2_aq_remain',array('label'=>''))."</td>
		<td>".$this->Form->input('ag2_aq_lost',array('label'=>''))."</td>
		<td width='30%'>".$this->Form->input('ag2_aq_obs',array('label'=>''))."</td></tr>";
		
		echo "</table>";
	?>
	</div> 
<?php 
// end of tabbed div above
echo $this->Form->end(__('Submit')); ?>
</div>
	</div>
	</fieldset>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List District Tallies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List available forms'), array('controller'=>'Forms','action' => 'index')); ?></li>

	</ul>
</div>
