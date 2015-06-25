<div class="eocSummaryCrs form">
<?php 
//debug($form);
foreach ($form['FormSection'] as $formSection):
	foreach ($formSection['FormSectionVariable'] as $variables):
		$variable_list[$variables['title']][1] = $variables['label_english'];
		$variable_list[$variables['title']][2] = $variables['label_french'];
	endforeach;
endforeach;
//temporary error prevention while we have incomplete data on health centres.
if($user2['Country']['Region']){
		$region=$user2['Country']['Region'][0]['title']; //pick up current district's region
		}
		else
		{
		$region = array();
		}
		$country=$user2['Country']['title_eng'];

//debug($variable_list);
//detect language
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

//DATA FORM
echo $this->Form->create('EocSummaryCr'); ?>
	<fieldset>
		<legend><?php echo __('Add Eoc Summary Cr'); ?></legend>
<div id="tabbed">
<?php
if($lang ==1){
?>
	<ul>
		<li><a href="#Part1">Administration</a></li>
		<li><a href="#Part2">Cycle summary</a></li>
		<li><a href="#Part3">Referral</a></li>
		<li><a href="#Part4">Pharmacovigilance</a></li>
	</ul>
<?php
}
else
{
?>
	<ul>
		<li><a href="#Part1">Administration</a></li>
		<li><a href="#Part2">Résumé du Cycle</a></li>
		<li><a href="#Part3">Orientation</a></li>
		<li><a href="#Part4">Pharmacovigilance</a></li>

	</ul>
	
<?php
}
?>
	<div id="Part1">
	<?php
		//set length of strings for boy and girl in english and french

		//$options = $user2['Country']['Region'][0]['District'];
		//$hcoptions = $user2['Country']['Region'][0]['District'][0]['HealthCentre'];
		//debug($user2);
		//$region=$user2['Country']['Region'][0]['title'];
		//debug($region);
		//debug($hcoptions);
		//debug($user2['Country']['Region'][0]['District']);

		echo "<table>";
		echo "<tr>";
		if($region){
		echo "<td>".$variable_list['region'][$lang]."</td><td>".$this->Form->input('region',array('default'=>$region,'readonly'=>'readonly','label'=>$variable_list['region'][$lang]));
		}
		else
		{
		echo "<td>".$variable_list['region'][$lang]."</td><td>".$this->Form->input('region',array('label'=>''));
		}
		echo "</td><td>".$variable_list['district'][$lang]."</td><td>".$this->Form->input('district',array(
							'type'    => 'select',
							'options' => $list_districts,
							'empty'   => true,
							'label'=> ''
						))."</td>";
		echo "<td>".$variable_list['entered_by'][$lang]."</td><td>".$this->Form->input('entered_by',array('readonly'=>'readonly','label'=>'','default'=>$this->viewVars['user']['id']))."</td></tr><tr>";
		
		echo "<td>".$variable_list['hf_type'][$lang]."</td><td>".$this->Form->input('hf_type',array('label'=>''))."</td>
		<td>".$variable_list['health_centre_id'][$lang]."</td><td>".$this->Form->input('health_centre_id',array(
							'type'    => 'select',
							'options' => $list_hcs,
							'empty'   => true,
							'label'=>''
						))."</td>";
		
		
		echo "</tr><tr>";
		echo "<td>".$variable_list['in_charge'][$lang]."</td><td>".$this->Form->input('in_charge',array('label'=>''))."</td><td>".$variable_list['medical_store'][$lang]."</td><td>".$this->Form->input('medical_store',array('label'=>''))."</td>";
		echo "</tr><tr>";
//		echo "<td >".$variable_list['distribution_dates_start'][$lang]."<p>&nbsp;<p>&nbsp;<p>".$variable_list['distribution_dates_end'][$lang]."</td>";
//		echo "<td colspan='2'>.".$this->Form->input('distribution_dates_start',array('label'=>''))."<br>".$this->Form->input('distribution_dates_end',array('label'=>''))."</td>";
		echo "<td>".$variable_list['number_smc_teams'][$lang]."</td><td>".$this->Form->input('number_smc_teams',array('label'=>''))."</td>";
		echo "<td>".$variable_list['cycle'][$lang]."</td><td>".$this->Form->input('cycle',array(
							'type'    => 'select',
							'options' => $cycle,
							'empty'   => true,
							'label'=>''))."</td>";
		echo "</tr>";
		echo "</table>";

		?>
		</div>
		<div id="Part2">
		<?php
		echo "<table>";
		echo "<tr><th>".$variable_list['lbl_age_cat'][$lang]."</th><th colspan=2>".$variable_list['lbl_age1_received'][$lang]."</th><th>".$variable_list['ag1_treated'][$lang]."</th>
		<th>".$variable_list['ag1_redosed'][$lang]."</th><th>".$variable_list['ag1_referred'][$lang]."</th><th>".$variable_list['lbl_ag1_returned'][$lang]."</th></tr>";
		echo "<tr><th rowspan = 3>".$variable_list['lbl_age1'][$lang]."</th><td>".$variable_list['ag1_compl_packs'][$lang]."</td><td>".$this->Form->input('ag1_compl_packs',array('label'=>''))."</td>
		<td rowspan=3>".$this->Form->input('ag1_treated',array('label'=>''))."</td>
		<td rowspan=3>".$this->Form->input('ag1_redosed',array('label'=>''))."</td>
		<td rowspan=3>".$this->Form->input('ag1_referred',array('label'=>''))."</td>
		<td>".$this->Form->input('ag1_compl_packs_ret',array('label'=>''))."</td></tr>";
		echo "<tr><td>".$variable_list['ag1_sp'][$lang]."</td><td>".$this->Form->input('ag1_sp',array('label'=>''))."</td><td>".$this->Form->input('ag1_sp_ret',array('label'=>''))."</td></tr>";
		echo "<tr><td>".$variable_list['ag1_aq'][$lang]."</td><td>".$this->Form->input('ag1_aq',array('label'=>''))."</td><td>".$this->Form->input('ag1_aq_ret',array('label'=>''))."</td></tr>";
		echo "<tr><th rowspan = 3>".$variable_list['lbl_ag2'][$lang]."</th><td>".$variable_list['ag2_compl_packs'][$lang]."</td><td>".$this->Form->input('ag2_compl_packs',array('label'=>''))."</td>
		<td rowspan=3>".$this->Form->input('ag2_treated',array('label'=>''))."</td>
		<td rowspan=3>".$this->Form->input('ag2_redosed',array('label'=>''))."</td>
		<td rowspan=3>".$this->Form->input('ag2_referred',array('label'=>''))."</td>
		<td>".$this->Form->input('ag2_compl_packs_ret',array('label'=>''))."</td></tr>";
		echo "<tr><td>".$variable_list['ag2_sp'][$lang]."</td><td>".$this->Form->input('ag2_sp',array('label'=>''))."</td><td>".$this->Form->input('ag2_sp_ret',array('label'=>''))."</td></tr>";
		echo "<tr><td>".$variable_list['ag2_aq'][$lang]."</td><td>".$this->Form->input('ag2_aq',array('label'=>''))."</td><td>".$this->Form->input('ag2_aq_ret',array('label'=>''))."</td></tr>";
		echo "<tr><td colspan = 3>".$variable_list['drug_stock_outs'][$lang]."</td><td>".$this->Form->input('drug_stock_outs',array('type'=>'select','options' => $yn,'empty'=> true,'label'=>''))."</td></tr>";
		echo "</table>";
		

		?>
		</div>
		<div id="Part3">
		<?php	
		echo "<table>";
		echo "<tr><td></td><th>".substr($variable_list['lbl_ag1_referral'][$lang],0,7)."</th><th>".substr($variable_list['lbl_ag2_referral'][$lang],0,8)."</th></tr>";
		echo "<tr><th>".$variable_list['ag1_referred_cyc'][$lang]."</th><td>".$this->Form->input('ag1_referred_cyc',array('label'=>''))."</td><td>".$this->Form->input('ag2_referred_cyc',array('label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['ag1_sick_referred'][$lang]."</th><td>".$this->Form->input('ag1_sick_referred',array('label'=>''))."</td><td>".$this->Form->input('ag2_sick_referred',array('label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['ag1_fev_referred'][$lang]."</th><td>".$this->Form->input('ag1_fev_referred',array('label'=>''))."</td><td>".$this->Form->input('ag2_fev_referred',array('label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['ag1_se_referred'][$lang]."</th><td>".$this->Form->input('ag1_se_referred',array('label'=>''))."</td><td>".$this->Form->input('ag2_se_referred',array('label'=>''))."</td></tr>";
		
		echo "<tr><th>".$variable_list['ag1_mal_confirm'][$lang]."</th><td>".$this->Form->input('ag1_mal_confirm',array('label'=>''))."</td><td>".$this->Form->input('ag2_mal_confirm',array('label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['ag1_neg_mal_smc'][$lang]."</th><td>".$this->Form->input('ag1_neg_mal_smc',array('label'=>''))."</td><td>".$this->Form->input('ag2_neg_mal_smc',array('label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['ag1_severe_ill'][$lang]."</th><td>".$this->Form->input('ag1_severe_ill',array('label'=>''))."</td><td>".$this->Form->input('ag2_severe_ill',array('label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['ag1_sae'][$lang]."</th><td>".$this->Form->input('ag1_sae',array('label'=>''))."</td><td>".$this->Form->input('ag2_sae',array('label'=>''))."</td></tr>";
		echo "</table>";
		
		//echo $this->Form->input('num_compl_packs_ob_ag1',array('label'=>$variable_list['num_compl_packs_ob_ag1'][$lang]));
		//echo $this->Form->input('num_compl_packs_ob_ag2',array('label'=>$variable_list['num_compl_packs_ob_ag2'][$lang]));
		//echo $this->Form->input('num_packs_received_ag1',array('label'=>$variable_list['num_packs_received_ag1'][$lang]));
		//echo $this->Form->input('num_packs_received_ag2',array('label'=>$variable_list['num_packs_received_ag2'][$lang]));
		//echo $this->Form->input('num_packs_left_ag1',array('label'=>$variable_list['num_packs_left_ag1'][$lang]));
		//echo $this->Form->input('num_packs_left_ag2',array('label'=>$variable_list['num_packs_left_ag2'][$lang]));
		?>
		</div>
		<div id="Part4">
		<?php
		echo "<table>";
		echo "<tr><th>".$variable_list['hfw_pv_trained'][$lang]."</th><td>".$this->Form->input('hfw_pv_trained',array('type'=>'select','options' => $yn,'empty'=> true,'label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['pv_guide'][$lang]."</th><td>".$this->Form->input('pv_guide',array('type'=>'select','options' => $yn,'empty'=> true,'label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['pv_form_stock_out'][$lang]."</th><td>".$this->Form->input('pv_form_stock_out',array('type'=>'select','options' => $yn,'empty'=> true,'label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['pv_sms_reminder'][$lang]."</th><td>".$this->Form->input('pv_sms_reminder',array('type'=>'select','options' => $yn,'empty'=> true,'label'=>''))."</td></tr>";
		echo "</table>";
		
		echo "<table>";
		echo "<tr><th>A</th><th>B</th><th>".$variable_list['ag1_sev_rash_presented'][$lang]."</th><th>".$variable_list['ag1_sev_rash_referred'][$lang]."</th></tr>";
		echo "<tr><th rowspan=2>".$variable_list['lbl_ag1_sev_skin_rash'][$lang]."</th><th>".$variable_list['lbl_ag1_pv'][$lang]."</th><td>".$this->Form->input('ag1_sev_rash_presented',array('label'=>''))."</td>
		<td>".$this->Form->input('ag1_sev_rash_referred',array('label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['lbl_ag2_pv'][$lang]."</th><td>".$this->Form->input('ag2_sev_rash_presented',array('label'=>''))."</td>
		<td>".$this->Form->input('ag2_sev_rash_referred',array('label'=>''))."</td></tr>";
		
		echo "<tr><th rowspan=2>".$variable_list['lbl_ag1_unable_walk'][$lang]."</th><th>".$variable_list['lbl_ag1_pv'][$lang]."</th><td>".$this->Form->input('ag1_unable_walk_presented',array('label'=>''))."</td>
		<td>".$this->Form->input('ag1_unable_walk_referred',array('label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['lbl_ag2_pv'][$lang]."</th><td>".$this->Form->input('ag2_unable_walk_presented',array('label'=>''))."</td>
		<td>".$this->Form->input('ag2_unable_walk_referred',array('label'=>''))."</td></tr>";
		
		
		echo "<tr><th rowspan=2>".$variable_list['lbl_ag1_yell_eyes'][$lang]."</th><th>".$variable_list['lbl_ag1_pv'][$lang]."</th><td>".$this->Form->input('ag1_yell_eyes_presented',array('label'=>''))."</td>
		<td>".$this->Form->input('ag1_yell_eyes_referred',array('label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['lbl_ag2_pv'][$lang]."</th><td>".$this->Form->input('ag2_yell_eyes_presented',array('label'=>''))."</td>
		<td>".$this->Form->input('ag2_yell_eyes_referred',array('label'=>''))."</td></tr>";
		
		
		echo "<tr><th rowspan=2>".$variable_list['lbl_ag1_sdr'][$lang]."</th><th>".$variable_list['lbl_ag1_pv'][$lang]."</th><td>".$this->Form->input('ag1_sdr_presented',array('label'=>''))."</td>
		<td>".$this->Form->input('ag1_sdr_referred',array('label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['lbl_ag2_pv'][$lang]."</th><td>".$this->Form->input('ag2_sdr_presented',array('label'=>''))."</td>
		<td>".$this->Form->input('ag2_sdr_referred',array('label'=>''))."</td></tr>";
		
		echo "</table>";
		
		echo "<table>";
		echo "<tr><th>".$variable_list['pv_forms_compl'][$lang]."</th><td>".$this->Form->input('pv_forms_compl',array('label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['num_deaths'][$lang]."</th><td>".$this->Form->input('num_deaths',array('label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['signed_hwic'][$lang]."</th><td>".$this->Form->input('signed_hwic',array('type'=>'select','options' => $yn,'empty'=> true,'label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['date_signed'][$lang]."</th><td>".$this->Form->input('date_signed',array('type'=>'date','label'=>''))."</td></tr>";
		echo "</table>";

		
		?>

		
	</div>
	</div>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Eoc Summary Crs1'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List available forms'), array('controller'=>'Forms','action' => 'index')); ?></li>

	</ul>

</div>
