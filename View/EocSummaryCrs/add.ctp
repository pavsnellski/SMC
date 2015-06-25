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
		<li><a href="#Part2">Treatments</a></li>
		<li><a href="#Part3">Drug reconciliation: blister packs</a></li>
		<li><a href="#Part4">Drug reconciliation: loose tablets</a></li>
		<li><a href="#Part5">Pharmacovigilance</a></li>
	</ul>
<?php
}
else
{
?>
	<ul>
		<li><a href="#Part1">Administration</a></li>
		<li><a href="#Part2">Traitements</a></li>
		<li><a href="#Part3">Réconciliation: emballage coque</a></li>
		<li><a href="#Part4">Réconciliation: comprimés en vrac</a></li>
		<li><a href="#Part5">Pharmacovigilance</a></li>
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
		<td>".$variable_list['hf_name'][$lang]."</td><td>".$this->Form->input('hf_name',array(
							'type'    => 'select',
							'options' => $list_hcs,
							'empty'   => true,
							'label'=>''
						))."</td>";
		
		
		echo "</tr><tr>";
		echo "<td>".$variable_list['hfw_in_charge'][$lang]."</td><td>".$this->Form->input('hfw_in_charge',array('label'=>''))."</td><td>".$variable_list['medical_store'][$lang]."</td><td>".$this->Form->input('medical_store',array('label'=>''))."</td>";
		echo "</tr><tr>";
		echo "<td >".$variable_list['distribution_dates_start'][$lang]."<p>&nbsp;<p>&nbsp;<p>".$variable_list['distribution_dates_end'][$lang]."</td>";
		echo "<td colspan='2'>.".$this->Form->input('distribution_dates_start',array('label'=>''))."<br>".$this->Form->input('distribution_dates_end',array('label'=>''))."</td>";
		echo "<td>".$variable_list['cycle'][$lang]."</td><td>".$this->Form->input('cycle',array(
							'type'    => 'select',
							'options' => $cycle,
							'empty'   => true,
							'label'=>''))."</td>";
		echo "</tr><tr>";
		echo "<td>".$variable_list['num_distribution_teams'][$lang]."</td><td>".$this->Form->input('num_distribution_teams',array('label'=>''))."</td>";

		echo "</tr>";
		echo "</table>";
		?>
		</div>
		<div id="Part2">
		<?php
		echo "<table>";
		echo "<tr><td></td><th colspan='2'>".substr($variable_list['num_treated_ag1_b'][$lang],0,7)."</th><th colspan='2'>".substr($variable_list['num_treated_ag2_b'][$lang],0,8)."</th></tr>";
		echo "<tr><td></td><th>".substr($variable_list['num_treated_ag1_b'][$lang],-$boylen+1)."</th><th>".substr($variable_list['num_treated_ag1_g'][$lang],-$girllen+1)."</th><th>".substr($variable_list['num_treated_ag1_b'][$lang],-$boylen+1)."</th><th>".substr($variable_list['num_treated_ag1_g'][$lang],-$girllen+1)."</th></tr>";
		echo "<tr><th>".$variable_list['num_treated'][$lang]."</th><td>".$this->Form->input('num_treated_ag1_b',array('label'=>''))."</td>
		<td>".$this->Form->input('num_treated_ag1_g',array('label'=>''))."</td>
		<td>".$this->Form->input('num_treated_ag2_b',array('label'=>''))."</td>
		<td>".$this->Form->input('num_treated_ag2_g',array('label'=>''))."</td></tr>";
		
		echo "<tr><th>".$variable_list['num_redosed'][$lang]."</th><td>".$this->Form->input('num_redosed_ag1_b',array('label'=>''))."</td>
		<td>".$this->Form->input('num_redosed_ag1_g',array('label'=>''))."</td>
		<td>".$this->Form->input('num_redosed_ag2_b',array('label'=>''))."</td>
		<td>".$this->Form->input('num_redosed_ag2_g',array('label'=>''))."</td></tr>";
		
		echo "<tr><th>".$variable_list['num_seen_no_smc'][$lang]."</th><td>".$this->Form->input('num_seen_no_smc_ag1_b',array('label'=>''))."</td>
		<td>".$this->Form->input('num_seen_no_smc_ag1_g',array('label'=>''))."</td>
		<td>".$this->Form->input('num_seen_no_smc_ag2_b',array('label'=>''))."</td>
		<td>".$this->Form->input('num_seen_no_smc_ag2_g',array('label'=>''))."</td></tr>";
		
		echo "<tr><th>".$variable_list['num_smc_post_referral'][$lang]."</th><td>".$this->Form->input('num_smc_post_referral_ag1_b',array('label'=>''))."</td>
		<td>".$this->Form->input('num_smc_post_referral_ag1_g',array('label'=>''))."</td>
		<td>".$this->Form->input('num_smc_post_referral_ag2_b',array('label'=>''))."</td>
		<td>".$this->Form->input('num_smc_post_referral_ag2_g',array('label'=>''))."</td></tr>";		

		//echo "<h2>".$variable_list['num_treated'][$lang]."</h2>";
		//echo $this->Form->input('num_treated_ag1_b',array('label'=>$variable_list['num_treated_ag1_b'][$lang]));
		//echo $this->Form->input('num_treated_ag1_g',array('label'=>$variable_list['num_treated_ag1_g'][$lang]));
		//echo $this->Form->input('num_treated_ag2_b',array('label'=>$variable_list['num_treated_ag2_b'][$lang]));
		//echo $this->Form->input('num_treated_ag2_g',array('label'=>$variable_list['num_treated_ag2_g'][$lang]));
		//echo $this->Form->input('num_redosed_ag1_b',array('label'=>$variable_list['num_redosed_ag1_b'][$lang]));
		//echo $this->Form->input('num_redosed_ag1_g',array('label'=>$variable_list['num_redosed_ag1_g'][$lang]));
		//echo $this->Form->input('num_redosed_ag2_b',array('label'=>$variable_list['num_redosed_ag2_b'][$lang]));
		//echo $this->Form->input('num_redosed_ag2_g',array('label'=>$variable_list['num_redosed_ag2_g'][$lang]));
		//echo $this->Form->input('num_seen_no_smc_ag1_b',array('label'=>$variable_list['num_seen_no_smc_ag1_b'][$lang]));
		//echo $this->Form->input('num_seen_no_smc_ag1_g',array('label'=>$variable_list['num_seen_no_smc_ag1_g'][$lang]));
		//echo $this->Form->input('num_seen_no_smc_ag2_b',array('label'=>$variable_list['num_seen_no_smc_ag2_b'][$lang]));
		//echo $this->Form->input('num_seen_no_smc_ag2_g',array('label'=>$variable_list['num_seen_no_smc_ag2_g'][$lang]));
		//echo $this->Form->input('num_smc_post_referral_ag1_b',array('label'=>$variable_list['num_smc_post_referral_ag1_b'][$lang]));
		//echo $this->Form->input('num_smc_post_referral_ag1_g',array('label'=>$variable_list['num_smc_post_referral_ag1_g'][$lang]));
		//echo $this->Form->input('num_smc_post_referral_ag2_b',array('label'=>$variable_list['num_smc_post_referral_ag2_b'][$lang]));
		//echo $this->Form->input('num_smc_post_referral_ag2_g',array('label'=>$variable_list['num_smc_post_referral_ag2_g'][$lang]));
		echo "</table>";
		?>
		</div>
		<div id="Part3">
		<?php	
		echo "<table>";
		echo "<tr><td></td><th>".substr($variable_list['num_treated_ag1_b'][$lang],0,7)."</th><th>".substr($variable_list['num_treated_ag2_b'][$lang],0,8)."</th></tr>";
		echo "<tr><th>".$variable_list['num_compl_packs_ob'][$lang]."</th><td>".$this->Form->input('num_compl_packs_ob_ag1',array('label'=>''))."</td><td>".$this->Form->input('num_compl_packs_ob_ag2',array('label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['num_packs_received'][$lang]."</th><td>".$this->Form->input('num_packs_received_ag1',array('label'=>''))."</td><td>".$this->Form->input('num_packs_received_ag2',array('label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['num_packs_left'][$lang]."</th><td>".$this->Form->input('num_packs_left_ag1',array('label'=>''))."</td><td>".$this->Form->input('num_packs_left_ag2',array('label'=>''))."</td></tr>";
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
		echo "<tr><td></td><th>".substr($variable_list['num_treated_ag1_b'][$lang],0,7)."</th><th>".substr($variable_list['num_treated_ag2_b'][$lang],0,8)."</th></tr>";
		echo "<tr><th>".$variable_list['sp_open_bal'][$lang]."</th><td>".$this->Form->input('sp_open_bal_ag1',array('label'=>''))."</td><td>".$this->Form->input('sp_open_bal_ag2',array('label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['sp_received'][$lang]."</th><td>".$this->Form->input('sp_received_ag1',array('label'=>''))."</td><td>".$this->Form->input('sp_received_ag2',array('label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['sp_remaining'][$lang]."</th><td>".$this->Form->input('sp_remaining_ag1',array('label'=>''))."</td><td>".$this->Form->input('sp_remaining_ag2',array('label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['aq_open_bal'][$lang]."</th><td>".$this->Form->input('aq_open_bal_ag1',array('label'=>''))."</td><td>".$this->Form->input('aq_open_bal_ag2',array('label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['aq_received'][$lang]."</th><td>".$this->Form->input('aq_received_ag1',array('label'=>''))."</td><td>".$this->Form->input('aq_received_ag2',array('label'=>''))."</td></tr>";
		echo "<tr><th>".$variable_list['aq_remaining'][$lang]."</th><td>".$this->Form->input('aq_remaining_ag1',array('label'=>''))."</td><td>".$this->Form->input('aq_remaining_ag2',array('label'=>''))."</td></tr>";
		echo "</table>";
		
		
		//echo $this->Form->input('sp_open_bal_ag1',array('label'=>$variable_list['sp_open_bal_ag1'][$lang]));
		//echo $this->Form->input('sp_open_bal_ag2',array('label'=>$variable_list['sp_open_bal_ag2'][$lang]));
		//echo $this->Form->input('sp_received_ag1',array('label'=>$variable_list['sp_received_ag1'][$lang]));
		//echo $this->Form->input('sp_received_ag2',array('label'=>$variable_list['sp_received_ag2'][$lang]));
		//echo $this->Form->input('sp_remaining_ag1',array('label'=>$variable_list['sp_remaining_ag1'][$lang]));
		//echo $this->Form->input('sp_remaining_ag2',array('label'=>$variable_list['sp_remaining_ag2'][$lang]));
		//echo $this->Form->input('aq_open_bal_ag1',array('label'=>$variable_list['aq_open_bal_ag1'][$lang]));
		//echo $this->Form->input('aq_open_bal_ag2',array('label'=>$variable_list['aq_open_bal_ag2'][$lang]));
		//echo $this->Form->input('aq_received_ag1',array('label'=>$variable_list['aq_received_ag1'][$lang]));
		//echo $this->Form->input('aq_received_ag2',array('label'=>$variable_list['aq_received_ag2'][$lang]));
		//echo $this->Form->input('aq_remaining_ag1',array('label'=>$variable_list['aq_remaining_ag1'][$lang]));
		//echo $this->Form->input('aq_remaining_ag2',array('label'=>$variable_list['aq_remaining_ag2'][$lang]));

		echo $this->Form->input('any_stock_outs',array('type'=>'select','options' => $yn,'empty'   => true,'label'=>$variable_list['any_stock_outs'][$lang]));
		?>
		</div>
		<div id="Part5">
		<?php

		echo $this->Form->input('num_sus_sae',array('label'=>$variable_list['num_sus_sae'][$lang]));
		echo $this->Form->input('num_pv_completed',array('label'=>$variable_list['num_pv_completed'][$lang]));
		echo "<table>";
		echo "<tr><td>".$this->Form->input('pv_trained',array('type'=>'select','options' => $yn,'empty'   => true,'label'=>$variable_list['pv_trained'][$lang]))."</td>
		<td>".$this->Form->input('pv_form_stockouts',array('type'=>'select','options' => $yn,'empty'   => true,'label'=>$variable_list['pv_form_stockouts'][$lang]))."</td>
		<td>".$this->Form->input('safety_guides',array('type'=>'select','options' => $yn,'empty'   => true,'label'=>$variable_list['safety_guides'][$lang]))."</td>
		<td>".$this->Form->input('sms_received',array('type'=>'select','options' => $yn,'empty'   => true,'label'=>$variable_list['sms_received'][$lang]))."</td></tr>";
		echo "</table>";
		echo $this->Form->input('signed_ic',array('type'=>'select','options' => $yn,'empty'   => true,'label'=>$variable_list['signed_ic'][$lang]));
		
	?>
	</div>
	</div>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Eoc Summary Crs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List available forms'), array('controller'=>'Forms','action' => 'index')); ?></li>

	</ul>

</div>
