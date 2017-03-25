<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/app_tree_variables.php");

$mode = postvalue("mode");


require_once("classes/searchclause.php");

$cipherer = new RunnerCipherer($strTableName);

require_once('include/xtempl.php');
$xt = new Xtempl();





$layout = new TLayout("detailspreview_bootstrap", "CoralGreen", "MobileGreen");
$layout->version = 3;
	$layout->bootstrapTheme = "cerulean";
$layout->blocks["bare"] = array();
$layout->containers["dcount"] = array();
$layout->container_properties["dcount"] = array(  );
$layout->containers["dcount"][] = array("name"=>"bsdetailspreviewcount",
	"block"=>"", "substyle"=>1  );

$layout->skins["dcount"] = "";

$layout->blocks["bare"][] = "dcount";
$layout->containers["detailspreviewgrid"] = array();
$layout->container_properties["detailspreviewgrid"] = array(  );
$layout->containers["detailspreviewgrid"][] = array("name"=>"detailspreviewfields",
	"block"=>"details_data", "substyle"=>1  );

$layout->skins["detailspreviewgrid"] = "";

$layout->blocks["bare"][] = "detailspreviewgrid";
$page_layouts["app_tree_detailspreview"] = $layout;




$recordsCounter = 0;

//	process masterkey value
$mastertable = postvalue("mastertable");
$masterKeys = my_json_decode(postvalue("masterKeys"));
$sessionPrefix = "_detailsPreview";
if($mastertable != "")
{
	$_SESSION[$sessionPrefix."_mastertable"]=$mastertable;
//	copy keys to session
	$i = 1;
	if(is_array($masterKeys) && count($masterKeys) > 0)
	{
		while(array_key_exists ("masterkey".$i, $masterKeys))
		{
			$_SESSION[$sessionPrefix."_masterkey".$i] = $masterKeys["masterkey".$i];
			$i++;
		}
	}
	if(isset($_SESSION[$sessionPrefix."_masterkey".$i]))
		unset($_SESSION[$sessionPrefix."_masterkey".$i]);
}
else
	$mastertable = $_SESSION[$sessionPrefix."_mastertable"];

$params = array();
$params['id'] = 1;
$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['pageType'] = "detailspreview";
$pageObject = new DetailsPreview($params);

if($mastertable == "app.treetype")
{
	$where = "";
		$formattedValue = make_db_value("treetype_id",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("treetype_id") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("treetype_id") . "=" . $formattedValue;
}

$str = SecuritySQL("Search", $strTableName);
if(strlen($str))
	$where.=" and ".$str;
$strSQL = $gQuery->gSQLWhere($where);

$strSQL.=" ".$gstrOrderBy;

$rowcount = $gQuery->gSQLRowCount($where, $pageObject->connection);
$xt->assign("row_count",$rowcount);
if($rowcount) 
{
	$xt->assign("details_data",true);

	$display_count = 10;
	if($mode == "inline")
		$display_count*=2;
		
	if($rowcount>$display_count+2)
	{
		$xt->assign("display_first",true);
		$xt->assign("display_count",$display_count);
	}
	else
		$display_count = $rowcount;

	$rowinfo = array();
	
	require_once getabspath('classes/controls/ViewControlsContainer.php');
	$pSet = new ProjectSettings($strTableName, PAGE_LIST);
	$viewContainer = new ViewControlsContainer($pSet, PAGE_LIST);
	$viewContainer->isDetailsPreview = true;

	$b = true;
	$qResult = $pageObject->connection->query( $strSQL );
	$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	while($data && $recordsCounter<$display_count) {
		$recordsCounter++;
		$row = array();
		$keylink = "";
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["id"]));
	
	
	//	id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("id", $data, $keylink);
			$row["id_value"] = $value;
			$format = $pSet->getViewFormat("id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("id")))
				$class = ' rnr-field-number';
			$row["id_class"] = $class;
	//	gpslocation - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("gpslocation", $data, $keylink);
			$row["gpslocation_value"] = $value;
			$format = $pSet->getViewFormat("gpslocation");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("gpslocation")))
				$class = ' rnr-field-number';
			$row["gpslocation_class"] = $class;
	//	cityproperty - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("cityproperty", $data, $keylink);
			$row["cityproperty_value"] = $value;
			$format = $pSet->getViewFormat("cityproperty");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("cityproperty")))
				$class = ' rnr-field-number';
			$row["cityproperty_class"] = $class;
	//	datelastupdated - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("datelastupdated", $data, $keylink);
			$row["datelastupdated_value"] = $value;
			$format = $pSet->getViewFormat("datelastupdated");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("datelastupdated")))
				$class = ' rnr-field-number';
			$row["datelastupdated_class"] = $class;
	//	dateofinitialcreationofentry - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dateofinitialcreationofentry", $data, $keylink);
			$row["dateofinitialcreationofentry_value"] = $value;
			$format = $pSet->getViewFormat("dateofinitialcreationofentry");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dateofinitialcreationofentry")))
				$class = ' rnr-field-number';
			$row["dateofinitialcreationofentry_class"] = $class;
	//	diameterofthetree - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("diameterofthetree", $data, $keylink);
			$row["diameterofthetree_value"] = $value;
			$format = $pSet->getViewFormat("diameterofthetree");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("diameterofthetree")))
				$class = ' rnr-field-number';
			$row["diameterofthetree_class"] = $class;
	//	floweringtree - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("floweringtree", $data, $keylink);
			$row["floweringtree_value"] = $value;
			$format = $pSet->getViewFormat("floweringtree");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("floweringtree")))
				$class = ' rnr-field-number';
			$row["floweringtree_class"] = $class;
	//	fruittree - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("fruittree", $data, $keylink);
			$row["fruittree_value"] = $value;
			$format = $pSet->getViewFormat("fruittree");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("fruittree")))
				$class = ' rnr-field-number';
			$row["fruittree_class"] = $class;
	//	healthoftree - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("healthoftree", $data, $keylink);
			$row["healthoftree_value"] = $value;
			$format = $pSet->getViewFormat("healthoftree");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("healthoftree")))
				$class = ' rnr-field-number';
			$row["healthoftree_class"] = $class;
	//	lastupdaterid - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("lastupdaterid", $data, $keylink);
			$row["lastupdaterid_value"] = $value;
			$format = $pSet->getViewFormat("lastupdaterid");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("lastupdaterid")))
				$class = ' rnr-field-number';
			$row["lastupdaterid_class"] = $class;
	//	latitude - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("latitude", $data, $keylink);
			$row["latitude_value"] = $value;
			$format = $pSet->getViewFormat("latitude");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("latitude")))
				$class = ' rnr-field-number';
			$row["latitude_class"] = $class;
	//	longitude - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("longitude", $data, $keylink);
			$row["longitude_value"] = $value;
			$format = $pSet->getViewFormat("longitude");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("longitude")))
				$class = ' rnr-field-number';
			$row["longitude_class"] = $class;
	//	otherhazards - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("otherhazards", $data, $keylink);
			$row["otherhazards_value"] = $value;
			$format = $pSet->getViewFormat("otherhazards");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("otherhazards")))
				$class = ' rnr-field-number';
			$row["otherhazards_class"] = $class;
	//	overheadhazzards - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("overheadhazzards", $data, $keylink);
			$row["overheadhazzards_value"] = $value;
			$format = $pSet->getViewFormat("overheadhazzards");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("overheadhazzards")))
				$class = ' rnr-field-number';
			$row["overheadhazzards_class"] = $class;
	//	picoftreepit - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("picoftreepit", $data, $keylink);
			$row["picoftreepit_value"] = $value;
			$format = $pSet->getViewFormat("picoftreepit");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("picoftreepit")))
				$class = ' rnr-field-number';
			$row["picoftreepit_class"] = $class;
	//	picofleaf - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("picofleaf", $data, $keylink);
			$row["picofleaf_value"] = $value;
			$format = $pSet->getViewFormat("picofleaf");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("picofleaf")))
				$class = ' rnr-field-number';
			$row["picofleaf_class"] = $class;
	//	pictureoffloweringtree - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("pictureoffloweringtree", $data, $keylink);
			$row["pictureoffloweringtree_value"] = $value;
			$format = $pSet->getViewFormat("pictureoffloweringtree");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("pictureoffloweringtree")))
				$class = ' rnr-field-number';
			$row["pictureoffloweringtree_class"] = $class;
	//	pictureoftree - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("pictureoftree", $data, $keylink);
			$row["pictureoftree_value"] = $value;
			$format = $pSet->getViewFormat("pictureoftree");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("pictureoftree")))
				$class = ' rnr-field-number';
			$row["pictureoftree_class"] = $class;
	//	pictureoftreetrunk - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("pictureoftreetrunk", $data, $keylink);
			$row["pictureoftreetrunk_value"] = $value;
			$format = $pSet->getViewFormat("pictureoftreetrunk");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("pictureoftreetrunk")))
				$class = ' rnr-field-number';
			$row["pictureoftreetrunk_class"] = $class;
	//	privateproperty - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("privateproperty", $data, $keylink);
			$row["privateproperty_value"] = $value;
			$format = $pSet->getViewFormat("privateproperty");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("privateproperty")))
				$class = ' rnr-field-number';
			$row["privateproperty_class"] = $class;
	//	recordcreatorid - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("recordcreatorid", $data, $keylink);
			$row["recordcreatorid_value"] = $value;
			$format = $pSet->getViewFormat("recordcreatorid");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("recordcreatorid")))
				$class = ' rnr-field-number';
			$row["recordcreatorid_class"] = $class;
	//	referencepictureoftree - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("referencepictureoftree", $data, $keylink);
			$row["referencepictureoftree_value"] = $value;
			$format = $pSet->getViewFormat("referencepictureoftree");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("referencepictureoftree")))
				$class = ' rnr-field-number';
			$row["referencepictureoftree_class"] = $class;
	//	sizeoftree - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("sizeoftree", $data, $keylink);
			$row["sizeoftree_value"] = $value;
			$format = $pSet->getViewFormat("sizeoftree");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("sizeoftree")))
				$class = ' rnr-field-number';
			$row["sizeoftree_class"] = $class;
	//	streetaddress - Map
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("streetaddress", $data, $keylink);
			$row["streetaddress_value"] = $value;
			$format = $pSet->getViewFormat("streetaddress");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("streetaddress")))
				$class = ' rnr-field-number';
			$row["streetaddress_class"] = $class;
	//	streettree - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("streettree", $data, $keylink);
			$row["streettree_value"] = $value;
			$format = $pSet->getViewFormat("streettree");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("streettree")))
				$class = ' rnr-field-number';
			$row["streettree_class"] = $class;
	//	treeiconformap - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("treeiconformap", $data, $keylink);
			$row["treeiconformap_value"] = $value;
			$format = $pSet->getViewFormat("treeiconformap");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("treeiconformap")))
				$class = ' rnr-field-number';
			$row["treeiconformap_class"] = $class;
	//	treepitcondition - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("treepitcondition", $data, $keylink);
			$row["treepitcondition_value"] = $value;
			$format = $pSet->getViewFormat("treepitcondition");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("treepitcondition")))
				$class = ' rnr-field-number';
			$row["treepitcondition_class"] = $class;
	//	treetype - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("treetype", $data, $keylink);
			$row["treetype_value"] = $value;
			$format = $pSet->getViewFormat("treetype");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("treetype")))
				$class = ' rnr-field-number';
			$row["treetype_class"] = $class;
	//	whenplanted - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("whenplanted", $data, $keylink);
			$row["whenplanted_value"] = $value;
			$format = $pSet->getViewFormat("whenplanted");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("whenplanted")))
				$class = ' rnr-field-number';
			$row["whenplanted_class"] = $class;
	//	treetype_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("treetype_id", $data, $keylink);
			$row["treetype_id_value"] = $value;
			$format = $pSet->getViewFormat("treetype_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("treetype_id")))
				$class = ' rnr-field-number';
			$row["treetype_id_class"] = $class;
		$rowinfo[] = $row;
		if ($b) {
			$rowinfo2[] = $row;
			$b = false;
		}
		$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	}
	$xt->assign_loopsection("details_row",$rowinfo);
	$xt->assign_loopsection("details_row_header",$rowinfo2); // assign class for header
}
$returnJSON = array("success" => true);
$xt->load_template(GetTemplateName("app_tree", "detailspreview"));
$returnJSON["body"] = $xt->fetch_loaded();

if($mode!="inline")
{
	$returnJSON["counter"] = postvalue("counter");
	$layout = GetPageLayout(GoodFieldName($strTableName), 'detailspreview');
	if($layout)
	{
		foreach($layout->getCSSFiles(isRTL(), mobileDeviceDetected() && $layout->version != BOOTSTRAP_LAYOUT) as $css)
		{
			$returnJSON['CSSFiles'][] = $css;
		}
	}	
}	

echo printJSON($returnJSON);
exit();
?>