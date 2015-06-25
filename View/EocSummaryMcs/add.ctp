<div class="eocSummaryMcs form">
<?php 
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


echo $this->Form->create('EocSummaryMc'); ?>
	<fieldset>
		<legend><?php 
		if($lang == 1){
		echo __('Add Health Facility END-OF-CYCLE Report');
		}
		else
		{
		echo __('Centre de santé FIN DE CYCLE Rapport');
		}
		?></legend>
		

<div id="tabbed">
<?php
if($lang ==1){
?>
	<ul>
		<li><a href="#Part1">Administration</a></li>
		<li><a href="#Part2">Drug Accountability and Reconciliation</a></li>
		<li><a href="#Part3">Referrals Presenting at the Health Centre</a></li>
		<li><a href="#Part4">Pharmacovigilance</a></li>
	</ul>
<?php
}
else
{
?>
	<ul>
		<li><a href="#Part1">Administration</a></li>
		<li><a href="#Part2">Responsabilisation de Drogues et de la Réconciliation</a></li>
		<li><a href="#Part3">Parrainages Présenter au Centre de Santé</a></li>
		<li><a href="#Part4">Pharmacovigilance</a></li>
	</ul>
	
<?php
}
?>
	<div id="Part1">		
		
	<?php
		echo "<table><tr>";
		if($region){
		echo "<td>".$variable_list['region'][$lang]."</td><td>".$this->Form->input('region',array('default'=>$region,'readonly'=>'readonly','label'=>''))."</td>";
		}
		else
		{
		echo "<td>".$variable_list['region'][$lang]."</td><td>".$this->Form->input('region',array('label'=>''))."</td>";
		}
		echo "<td>".$variable_list['district'][$lang]."</td><td>".$this->Form->input('district',array(
							'type'    => 'select',
							'options' => $list_districts,
							'empty'   => true,
							'label'=> ''
						))."</td>";
		echo "<td>".$variable_list['entered_by'][$lang]."</td><td>".$this->Form->input('entered_by',array('readonly'=>'readonly','label'=>'','default'=>$this->viewVars['user']['id']))."</td></tr><tr>";
		
		echo "<td>".$variable_list['hf_type'][$lang]."</td><td>";
		echo $this->Form->input('hf_type',array('label'=>''));
		echo "</td><td>".$variable_list['health_centre_id'][$lang]."</td><td colspan=3>";
		echo $this->Form->input('health_centre_id',array(
							'type'    => 'select',
							'options' => $list_hcs,
							'empty'   => true,
							'label'=>''
						));
		echo "</td></tr><tr>";
		echo "<td>".$variable_list['in_charge'][$lang]."</td><td>".$this->Form->input('in_charge',array('label'=>''))."</td><td>".$variable_list['medical_store'][$lang]."</td><td>".$this->Form->input('medical_store',array('label'=>''))."</td>";
		echo "</tr><tr>";
		
		echo "<td>".$variable_list['lbl_dist_dates'][$lang]."</td>";
		echo "<td colspan=2>";

		echo $this->Form->input('start_date',array('label'=>$variable_list['start_date'][$lang]));
		echo $this->Form->input('end_date',array('label'=>$variable_list['end_date'][$lang]));
		echo "</td>";
		echo "<td>".$variable_list['cycle'][$lang]."</td><td colspan=2>".$this->Form->input('cycle',array(
							'type'    => 'select',
							'options' => $cycle,
							'empty'   => true,
							'label'=>''))."</td>";
		echo "</td></tr>";
		
		echo "<td>".$variable_list['number_teams'][$lang]."</td><td >".$this->Form->input('number_teams',array('label'=>''))."</td>";
		echo "</tr></table>";
	?>
	</div>
	<div id="Part2">
	<?php
	
	echo "<table><tr>";
		echo "<th></th><th>".$variable_list['comp_dr_received_ag1'][$lang]."</th><th>".$variable_list['comp_dr_received_ag2'][$lang]."</th></tr><tr>";
		echo "<th>".$variable_list['lbl_comp_dr_received'][$lang]."</th><td>".$this->Form->input('comp_dr_received_ag1',array('label'=>''))."</td>
		<td>".$this->Form->input('comp_dr_received_ag2',array('label'=>''))."</td></tr><tr>";
		
		echo "<th>".$variable_list['lbl_comp_dr_issued'][$lang]."</th><td>".$this->Form->input('comp_dr_issued_ag1',array('label'=>''))."</td>
		<td>".$this->Form->input('comp_dr_issued_ag2',array('label'=>''))."</td></tr><tr>";
		
		echo "<th>".$variable_list['lbl_comp_dr_returned'][$lang]."</th><td>".$this->Form->input('comp_dr_returned_ag1',array('label'=>''))."</td>
		<td>".$this->Form->input('comp_dr_returned_ag2',array('label'=>''))."</td></tr><tr>";
		
		echo "<th>".$variable_list['lbl_comp_dr_damaged'][$lang]."</th><td>".$this->Form->input('comp_dr_damaged_ag1',array('label'=>''))."</td>
		<td>".$this->Form->input('comp_dr_damaged_ag2',array('label'=>''))."</td></tr><tr>";
		
		echo "<th>".$variable_list['lbl_comp_dr_wasted'][$lang]."</th><td>".$this->Form->input('comp_dr_wasted_ag1',array('label'=>''))."</td>
		<td>".$this->Form->input('comp_dr_wasted_ag2',array('label'=>''))."</td></tr><tr>";

		echo "<th>".$variable_list['lbl_aq_returned'][$lang]."</th><td>".$this->Form->input('aq_returned_ag1',array('label'=>''))."</td>
		<td>".$this->Form->input('aq_returned_ag2',array('label'=>''))."</td></tr><tr>";
		
		echo "<th>".$variable_list['lbl_sp_returned'][$lang]."</th><td>".$this->Form->input('sp_returned_ag1',array('label'=>''))."</td>
		<td>".$this->Form->input('sp_returned_ag2',array('label'=>''))."</td></tr><tr>";

		echo "<th>".$variable_list['dr_stock_outs'][$lang]."</th><td>".$this->Form->input('dr_stock_outs',array('type'=>'select','options' => $yn,'empty'   => true,'label'=>''))."</td>
		<td></td></tr><tr>";

		echo "</tr>></table>";
	?>
	</div>
	<div id="Part3">
	<?php
	echo "<table><tr>";
		echo "<th></th><th>".$variable_list['comp_dr_received_ag1'][$lang]."</th><th>".$variable_list['comp_dr_received_ag2'][$lang]."</th></tr><tr>";
		
		echo "<th>".$variable_list['lbl_number_referred'][$lang]."</th><td>".$this->Form->input('number_referred_ag1',array('label'=>''))."</td>
		<td>".$this->Form->input('number_referred_ag2',array('label'=>''))."</td></tr><tr>";
		
		echo "<th>".$variable_list['lbl_sick_referred'][$lang]."</th><td>".$this->Form->input('sick_referred_ag1',array('label'=>''))."</td>
		<td>".$this->Form->input('sick_referred_ag2',array('label'=>''))."</td></tr><tr>";
		
		echo "<th>".$variable_list['lbl_fever_referred'][$lang]."</th><td>".$this->Form->input('fever_referred_ag1',array('label'=>''))."</td>
		<td>".$this->Form->input('fever_referred_ag2',array('label'=>''))."</td></tr><tr>";
		
		echo "<th>".$variable_list['lbl_ae_referred'][$lang]."</th><td>".$this->Form->input('ae_referred_ag1',array('label'=>''))."</td>
		<td>".$this->Form->input('ae_referred_ag2',array('label'=>''))."</td></tr><tr>";
		
		echo "<th>".$variable_list['lbl_confirmed_malaria'][$lang]."</th><td>".$this->Form->input('confirmed_malaria_ag1',array('label'=>''))."</td>
		<td>".$this->Form->input('confirmed_malaria_ag2',array('label'=>''))."</td></tr><tr>";
		
		echo "<th>".$variable_list['lbl_neg_fev_smc'][$lang]."</th><td>".$this->Form->input('neg_fev_smc_ag1',array('label'=>''))."</td>
		<td>".$this->Form->input('neg_fev_smc_ag2',array('label'=>''))."</td></tr><tr>";
		
		echo "<th>".$variable_list['lbl_sick_admitted'][$lang]."</th><td>".$this->Form->input('sick_admitted_ag1',array('label'=>''))."</td>
		<td>".$this->Form->input('sick_admitted_ag2',array('label'=>''))."</td>";
		
		
		echo"</tr></table>";
	?>
	</div>
	<div id="Part4">
	<?php
	echo "<table><tr>";
		echo "<th></th><th>".$variable_list['comp_dr_received_ag1'][$lang]."</th><th>".$variable_list['comp_dr_received_ag2'][$lang]."</th></tr><tr>";
		
		echo "<th>".$variable_list['lbl_sae_admitted'][$lang]."</th><td>".$this->Form->input('sae_admitted_ag1',array('label'=>''))."</td>
		<td>".$this->Form->input('sae_admitted_ag2',array('label'=>''))."</td></tr><tr>";
		
		echo "<th>".$variable_list['lbl_severe_rash'][$lang]."</th><td>".$this->Form->input('severe_rash_ag1',array('label'=>''))."</td>
		<td>".$this->Form->input('severe_rash_ag2',array('label'=>''))."</td></tr><tr>";
		
		echo "<th>".$variable_list['lbl_walk_abnorm'][$lang]."</th><td>".$this->Form->input('walk_abnorm_ag1',array('label'=>''))."</td>
		<td>".$this->Form->input('walk_abnorm_ag2',array('label'=>''))."</td></tr><tr>";

		echo "<th>".$variable_list['lbl_yellow_eyes'][$lang]."</th><td>".$this->Form->input('yellow_eyes_ag1',array('label'=>''))."</td>
		<td>".$this->Form->input('yellow_eyes_ag2',array('label'=>''))."</td></tr><tr>";
				
		echo "<th>".$variable_list['lbl_sdr'][$lang]."</th><td>".$this->Form->input('sdr_ag1',array('label'=>''))."</td>
		<td>".$this->Form->input('sdr_ag2',array('label'=>''))."</td></tr><tr>";
				
		echo "<th>".$variable_list['lbl_pv_forms_compl'][$lang]."</th><td>".$this->Form->input('pv_forms_compl_ag1',array('label'=>''))."</td>
		<td>".$this->Form->input('pv_forms_compl_ag2',array('label'=>''))."</td></tr><tr>";


		
		echo "<th>".$variable_list['ic_smc_train'][$lang]."</th><td>".$this->Form->input('ic_smc_train',array('type'=>'select','options' => $yn,'empty'   => true,'label'=>''))."</td>
		<td></td></tr><tr>";
		echo "<th>".$variable_list['pv_train'][$lang]."</th><td>".$this->Form->input('pv_train',array('type'=>'select','options' => $yn,'empty'   => true,'label'=>''))."</td>
		<td></td></tr><tr>";
		echo "<th>".$variable_list['pv_guide'][$lang]."</th><td>".$this->Form->input('pv_guide',array('type'=>'select','options' => $yn,'empty'   => true,'label'=>''))."</td>
		<td></td></tr><tr>";
		echo "<th>".$variable_list['pv_form_stock_out'][$lang]."</th><td>".$this->Form->input('pv_form_stock_out',array('type'=>'select','options' => $yn,'empty'   => true,'label'=>''))."</td>
		<td></td></tr><tr>";
		echo "<th>".$variable_list['sms_reminder'][$lang]."</th><td>".$this->Form->input('sms_reminder',array('type'=>'select','options' => $yn,'empty'   => true,'label'=>''))."</td>
		<td></td></tr><tr>";
		echo "<th>".$variable_list['signed'][$lang]."</th><td>".$this->Form->input('signed',array('type'=>'select','options' => $yn,'empty'   => true,'label'=>''))."</td>
		<td></td>";
		

		
		echo"</tr></table>";
	?>
	</div>
	</div>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Eoc Summary Mcs'), array('action' => 'index')); ?></li>
	</ul>
</div>
