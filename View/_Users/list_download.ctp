<?php
//
//debug($user_list['UserSession']);
//debug(basename(APP));

//$this->redirect($this->referer());

echo "<div><table><tr><td>" . $this->Html->link('Return to project list', array('controller'=>'projects','action' => 'index'))."</td><td>Close this window to view the project datasets again</td></tr></table>";
				echo "</div>";
echo "<table><tr>";
foreach($user_list['UserSession'] as $us) :
	if(!empty($us['UserSessionDownload'])) {
	echo "<td colspan=5><b>Session Time</b>: " . $us['session_start'] . "</td>"."</tr>";
	echo "<tr><th></th><th>Project</th><th>Dataset</th><th>Downloaded</th><th>Link</th></tr>";
	foreach($us['UserSessionDownload'] as $usd) :
		
		$filestring = "HTTP://localhost/output/" . $us['user_id'] . "/" . $usd['id']."_export_". $usd['project_dataset_id']."_". date_create($usd['download_time'])->format('Y_m_d_H_i') .".csv";
		$fs =  $_SERVER['DOCUMENT_ROOT'] ."/app/webroot/".substr($filestring,17);
		//$fs =  $_SERVER['WEB_ROOT'] ."/".substr($filestring,17);
		//debug($fs);
		$extension = pathinfo($filestring, PATHINFO_EXTENSION);	
		
		echo "<tr>";
			echo "<td></td><td>". $usd['project_id']. "</td><td>". $usd['ProjectDataset']['dataset_description']. "</td><td>" . $usd['download_time'] . "</td>";
			if(file_exists($fs)) {
			echo "<td>".
			$this->Html->Link('download', array('controller'=>'Users', 'action'=>'retrieve_download','user_id'=>$us['user_id'],'id'=>$usd['id'],'project_dataset_id'=>$usd['project_dataset_id'],'download_time'=>date_create($usd['download_time'])->format('Y_m_d_H_i')))
			//$this->Html->Link($this->Icon->get( $extension ),$filestring,array('escape' => false)) 
			. "</td>";
			}
			else
			{
			echo "<td>Complete file already downloaded</td>";
			}
		echo "</tr>";
	endforeach;
	}
endforeach;

?>