<?php
include "koneksi.php";

$query = mysqli_query($koneksi,"SELECT * FROM `db_laporan`;");
// echo $query; die();
$data = array();

while($r = mysqli_fetch_assoc($query)) {
	$data[] = $r;
}
// echo $data; die();
$i=0;
$urutan = 1;
foreach ($data as $key) {
	//$data[$i]['kampret'] = str_replace('m-pppoe-m3v', '-Mbps', $data[$i]['namebp']);
	//$data[$i]['targets'] = '<label><input type="checkbox" value ="'.$data[$i]['id'].'" name = "nik" class="minimal"></label>';
	//$data[$i]['update'] = $data[$i]['di_tagih'];
	
	if($data[$i]['status'] == 'Handle'){
	$data[$i]['type_status'] = '<small class="badge badge-warning">'. strtoupper($data[$i]['status']).'</small>';
    }else{
		$data[$i]['type_status'] = $data[$i]['status'];
	}
	
	$data[$i]['action']='<div class="btn-group">	 
							<button type="button" name="edit" 
							id="'.$data[$i]["id"].'" name="edit" 
							
							class="btn btn-info btn-sm mr-2 editfollowup">Edit</button>						
													
						</div>';
	//$data[$i]['hasil'] = ($data[$i]['price'] * $data[$i]['Total_Month']);
	$data[$i]['urutan'] = $urutan;
	$i++;
	$urutan++;
}
$datax = array('data' => $data);
echo json_encode($datax);
?>