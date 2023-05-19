<?php header('Access-Control-Allow-Origin: *'); ?>
<?php 
include('connection.php');
if (!empty($_POST) && $_POST['job_type'] == 'Job_List')
{
	$job_data = array();
	$qs = "select * from sentech_posts where post_type='jobpost' and post_status='publish' order by ID desc";
	$get_qs = mysqli_query($mysqli, $qs);
	$job_list = array();
	if($get_qs)
	{

		while($row = mysqli_fetch_array($get_qs))
		{	

			$jobpost_category_attr = get_post_attr($row['ID'],'jobpost_category');
			$jobpost_job_type_attr = get_post_attr($row['ID'],'jobpost_job_type');
			$nationality_attr = get_post_attr($row['ID'],'nationality');
			$salary_attr = get_post_attr($row['ID'],'salary');
			$gender_attr = get_post_attr($row['ID'],'gender');
			$location_attr = get_post_attr($row['ID'],'jobpost_location');
			$job_features_attr = get_post_features_attr($row['ID'],'jobpost_features');

			$jobs = array('job_id'=>$row['ID'],
				'job_title'=>$row['post_title'],
				'post_name'=>$row['post_name'],
				'job_desc'=>$row['post_content'],
				'job_post_date'=>$row['post_date'],
				'job_location'=>$location_attr,
				'job_nationality'=>$nationality_attr,
				'job_salary'=>$salary_attr,
				'job_gender'=>$gender_attr,
				'job_category'=>$jobpost_category_attr,
				'job_type'=>$jobpost_job_type_attr,
				'job_features'=>$job_features_attr,
				 );

			array_push($job_list,$jobs);

		}
		$job_data = array("error" => false,
							  "error_code" => 200,
							  "job_list" => $job_list,
							  "error_description"=>"Job List");
	}
	
	echo json_encode($job_data);
    exit;

}

if (!empty($_POST) && $_POST['job_type'] == 'Job_Detail')
{
	$job_id = $_POST['job_id'];
	if($job_id != '')
	{

		$job_data = array();
		$qs = "select * from sentech_posts where post_type='jobpost' and post_status='publish' 
		and ID='".$job_id."'";
		$get_qs = mysqli_query($mysqli, $qs);
		$job_list = array();
		if($get_qs)
		{

			while($row = mysqli_fetch_array($get_qs))
			{	

				$jobpost_category_attr = get_post_attr($row['ID'],'jobpost_category');
				$jobpost_job_type_attr = get_post_attr($row['ID'],'jobpost_job_type');
				$nationality_attr = get_post_attr($row['ID'],'nationality');
				$salary_attr = get_post_attr($row['ID'],'salary');
				$gender_attr = get_post_attr($row['ID'],'gender');
				$location_attr = get_post_attr($row['ID'],'jobpost_location');
				$job_features_attr = get_post_features_attr($row['ID'],'jobpost_features');

				$jobs = array('job_id'=>$row['ID'],
					'job_title'=>$row['post_title'],
					'post_name'=>$row['post_name'],
					'job_desc'=>$row['post_content'],
					'job_post_date'=>$row['post_date'],
					'job_location'=>$location_attr,
					'job_nationality'=>$nationality_attr,
					'job_salary'=>$salary_attr,
					'job_gender'=>$gender_attr,
					'job_category'=>$jobpost_category_attr,
					'job_type'=>$jobpost_job_type_attr,
					'job_features'=>$job_features_attr,
					 );

				array_push($job_list,$jobs);

			}
			$job_data = array("error" => false,
								  "error_code" => 200,
								  "job_list" => $job_list,
								  "error_description"=>"Job Details");
		}
		else{
			$job_data = array("error" => true,
								  "error_code" => 100,
								  "job_list" => array(),
								  "error_description"=>"something went wrong.");
		}
	}
	else{
		$job_data = array("error" => true,
								  "error_code" => 100,
								  "job_list" => array(),
								  "error_description"=>"fill all manadatory fields.");
	}
	
	echo json_encode($job_data);
    exit;

}

if (!empty($_POST) && $_POST['job_type'] == 'Job_Search')
{
	$job_search = $_POST['search_text'];
	$job_category = $_POST['job_category'];
	$job_location = $_POST['job_location'];
	$job_type_id = $_POST['job_type_id'];

	if($job_search != '')
	{
		$condition = '';
		$search_string = '';
		if($job_search != '')
		{
			$search_string .= "and sp.post_title like('%".$job_search."%')";
		}
		$str = '';
		if($job_category!='')
		{
			$str .= "'".$job_category."',";
		}
		if($job_location!='')
		{
			$str .= "'".$job_location."',";
		}
		if($job_type_id!='')
		{
			$str .= "'".$job_type_id."',";
		}
		$search_string_id = rtrim($str, ",");
		
		if($search_string_id!='')
		{
			$search_string .= " and stt.term_taxonomy_id IN('".$search_string_id."')";
		}
		
		$job_data = array();
		$pid = '';

		$qs_search = "SELECT sp.ID,sp.post_title,sp.post_name,sp.post_content,sp.post_date,sp.post_status,
		str.object_id,stt.term_taxonomy_id,stt.taxonomy,st.name FROM sentech_posts as sp 
		join sentech_term_relationships as str on sp.ID=str.object_id join sentech_term_taxonomy as stt 
		on str.term_taxonomy_id=stt.term_id join sentech_terms as st on st.term_id=stt.term_taxonomy_id 
		where sp.post_type='jobpost' and sp.post_status='publish' ".$search_string."
		ORDER BY stt.taxonomy";
		$qs_search1 = mysqli_query($mysqli,$qs_search);
		if($qs_search1)
		{
			while($search_rows = mysqli_fetch_assoc($qs_search1))
			{
				$pid.= $search_rows['ID'].",";
				
			}
		}
		
		
		$jpid1 = rtrim($pid, ",");
		$jpid = implode(',', array_unique(explode(',', $jpid1)));
		
		if($jpid!='')
		{
			$qs = "SELECT sp.ID,sp.post_title,sp.post_name,sp.post_content,sp.post_date,sp.post_status from sentech_posts as sp where ID IN($jpid)";
		}
		else{
			$qs = "SELECT sp.ID,sp.post_title,sp.post_name,sp.post_content,sp.post_date,sp.post_status from sentech_posts as sp where sp.post_type='jobpost' and sp.post_status='publish' order by ID desc";
		}
		
		$get_qs = mysqli_query($mysqli, $qs);
		$job_list = array();
		if($get_qs)
		{

			while($row = mysqli_fetch_array($get_qs))
			{	

				$jobpost_category_attr = get_post_attr($row['ID'],'jobpost_category');
				$jobpost_job_type_attr = get_post_attr($row['ID'],'jobpost_job_type');
				$nationality_attr = get_post_attr($row['ID'],'nationality');
				$salary_attr = get_post_attr($row['ID'],'salary');
				$gender_attr = get_post_attr($row['ID'],'gender');
				$location_attr = get_post_attr($row['ID'],'jobpost_location');
				$job_features_attr = get_post_features_attr($row['ID'],'jobpost_features');
				

				$jobs = array('job_id'=>$row['ID'],
					'job_title'=>$row['post_title'],
					'post_name'=>$row['post_name'],
					'job_desc'=>$row['post_content'],
					'job_post_date'=>$row['post_date'],
					'job_location'=>$location_attr,
					'job_nationality'=>$nationality_attr,
					'job_salary'=>$salary_attr,
					'job_gender'=>$gender_attr,
					'job_category'=>$jobpost_category_attr,
					'job_type'=>$jobpost_job_type_attr,
					'job_features'=>$job_features_attr,
					 );

				array_push($job_list,$jobs);

			}

			$job_data = array("error" => false,
								  "error_code" => 200,
								  "job_list" => $job_list,
								  "error_description"=>"Job Search List");
		}
		else{
			$job_data = array("error" => true,
							  "error_code" => 100,
							  "job_list" => array(),
							  "error_description"=>"something went wrong.");
	}
	}
	else{
		$job_data = array("error" => true,
						  "error_code" => 100,
						  "job_list" => array(),
						  "error_description"=>"fill all manadatory fields.");
	}
	
	echo json_encode($job_data);
    exit;

}

function get_post_attr($id,$attr_type)
{
	include('connection.php');
	$attr_array = array();

	$get_attr = "SELECT str.object_id,stt.term_taxonomy_id,stt.taxonomy,st.name FROM sentech_term_relationships as str join sentech_term_taxonomy as stt on str.term_taxonomy_id=stt.term_id join sentech_terms as st on st.term_id=stt.term_taxonomy_id 
		WHERE str.object_id='".$id."' and stt.taxonomy='".$attr_type."' ORDER BY stt.taxonomy";

	$attr = mysqli_query($mysqli, $get_attr);

	if($attr)
	{
		
		while($attr_rows = mysqli_fetch_assoc($attr))
		{
		    
			$attr_arr = array('job_id'=>$attr_rows['object_id'],
				'attr_id'=>$attr_rows['term_taxonomy_id'],
				'attr_name'=>$attr_rows['taxonomy'],
				'attr_value'=>$attr_rows['name']);
			
			array_push($attr_array, $attr_arr);
		}
		
	}

	return $attr_array;

}

function get_post_features_attr($id,$attr_type)
{
	include('connection.php');
	$f_attr_array = array();

	$get_f_attr = "select * from sentech_postmeta
	WHERE  post_id='".$id."' and meta_key like '%jobfeature_%' order by meta_id ASC";
	
	$f_attr = mysqli_query($mysqli, $get_f_attr);

	if($f_attr)
	{
		
		while($f_attr_rows = mysqli_fetch_array($f_attr))
		{
			
			$f_meta_value = unserialize($f_attr_rows['meta_value']);
			$f_attr_arr = array('features_label'=>$f_meta_value['label'],
				'features_value'=>$f_meta_value['value'],);
			array_push($f_attr_array, $f_attr_arr);
		}
		
	}

	return $f_attr_array;

}		

?>