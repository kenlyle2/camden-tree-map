<?php
require_once(getabspath("classes/cipherer.php"));




$tdataapp_tree = array();
	$tdataapp_tree[".truncateText"] = true;
	$tdataapp_tree[".NumberOfChars"] = 80;
	$tdataapp_tree[".ShortName"] = "app_tree";
	$tdataapp_tree[".OwnerID"] = "";
	$tdataapp_tree[".OriginalTable"] = "app.tree";

//	field labels
$fieldLabelsapp_tree = array();
$fieldToolTipsapp_tree = array();
$pageTitlesapp_tree = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsapp_tree["English"] = array();
	$fieldToolTipsapp_tree["English"] = array();
	$pageTitlesapp_tree["English"] = array();
	$fieldLabelsapp_tree["English"]["id"] = "Id";
	$fieldToolTipsapp_tree["English"]["id"] = "";
	$fieldLabelsapp_tree["English"]["gpslocation"] = "Gpslocation";
	$fieldToolTipsapp_tree["English"]["gpslocation"] = "";
	$fieldLabelsapp_tree["English"]["cityproperty"] = "Cityproperty";
	$fieldToolTipsapp_tree["English"]["cityproperty"] = "";
	$fieldLabelsapp_tree["English"]["datelastupdated"] = "Datelastupdated";
	$fieldToolTipsapp_tree["English"]["datelastupdated"] = "";
	$fieldLabelsapp_tree["English"]["dateofinitialcreationofentry"] = "Dateofinitialcreationofentry";
	$fieldToolTipsapp_tree["English"]["dateofinitialcreationofentry"] = "";
	$fieldLabelsapp_tree["English"]["diameterofthetree"] = "Diameterofthetree";
	$fieldToolTipsapp_tree["English"]["diameterofthetree"] = "Diameter in Inches";
	$fieldLabelsapp_tree["English"]["floweringtree"] = "Floweringtree";
	$fieldToolTipsapp_tree["English"]["floweringtree"] = "";
	$fieldLabelsapp_tree["English"]["fruittree"] = "Fruittree";
	$fieldToolTipsapp_tree["English"]["fruittree"] = "";
	$fieldLabelsapp_tree["English"]["healthoftree"] = "Healthoftree";
	$fieldToolTipsapp_tree["English"]["healthoftree"] = "";
	$fieldLabelsapp_tree["English"]["lastupdaterid"] = "Lastupdaterid";
	$fieldToolTipsapp_tree["English"]["lastupdaterid"] = "";
	$fieldLabelsapp_tree["English"]["latitude"] = "Latitude";
	$fieldToolTipsapp_tree["English"]["latitude"] = "";
	$fieldLabelsapp_tree["English"]["longitude"] = "Longitude";
	$fieldToolTipsapp_tree["English"]["longitude"] = "";
	$fieldLabelsapp_tree["English"]["otherhazards"] = "Otherhazards";
	$fieldToolTipsapp_tree["English"]["otherhazards"] = "";
	$fieldLabelsapp_tree["English"]["overheadhazzards"] = "Overheadhazzards";
	$fieldToolTipsapp_tree["English"]["overheadhazzards"] = "";
	$fieldLabelsapp_tree["English"]["picoftreepit"] = "Picoftreepit";
	$fieldToolTipsapp_tree["English"]["picoftreepit"] = "";
	$fieldLabelsapp_tree["English"]["picofleaf"] = "Picofleaf";
	$fieldToolTipsapp_tree["English"]["picofleaf"] = "";
	$fieldLabelsapp_tree["English"]["pictureoffloweringtree"] = "Pictureoffloweringtree";
	$fieldToolTipsapp_tree["English"]["pictureoffloweringtree"] = "";
	$fieldLabelsapp_tree["English"]["pictureoftree"] = "Pictureoftree";
	$fieldToolTipsapp_tree["English"]["pictureoftree"] = "";
	$fieldLabelsapp_tree["English"]["pictureoftreetrunk"] = "Pictureoftreetrunk";
	$fieldToolTipsapp_tree["English"]["pictureoftreetrunk"] = "";
	$fieldLabelsapp_tree["English"]["privateproperty"] = "Privateproperty";
	$fieldToolTipsapp_tree["English"]["privateproperty"] = "";
	$fieldLabelsapp_tree["English"]["recordcreatorid"] = "Recordcreatorid";
	$fieldToolTipsapp_tree["English"]["recordcreatorid"] = "";
	$fieldLabelsapp_tree["English"]["referencepictureoftree"] = "Referencepictureoftree";
	$fieldToolTipsapp_tree["English"]["referencepictureoftree"] = "";
	$fieldLabelsapp_tree["English"]["sizeoftree"] = "Sizeoftree";
	$fieldToolTipsapp_tree["English"]["sizeoftree"] = "";
	$fieldLabelsapp_tree["English"]["streetaddress"] = "Streetaddress";
	$fieldToolTipsapp_tree["English"]["streetaddress"] = "";
	$fieldLabelsapp_tree["English"]["streettree"] = "Streettree";
	$fieldToolTipsapp_tree["English"]["streettree"] = "";
	$fieldLabelsapp_tree["English"]["treeiconformap"] = "Treeiconformap";
	$fieldToolTipsapp_tree["English"]["treeiconformap"] = "";
	$fieldLabelsapp_tree["English"]["treepitcondition"] = "Treepitcondition";
	$fieldToolTipsapp_tree["English"]["treepitcondition"] = "";
	$fieldLabelsapp_tree["English"]["treestreetaddress"] = "Treestreetaddress";
	$fieldToolTipsapp_tree["English"]["treestreetaddress"] = "";
	$fieldLabelsapp_tree["English"]["treetype"] = "Treetype";
	$fieldToolTipsapp_tree["English"]["treetype"] = "";
	$fieldLabelsapp_tree["English"]["whenplanted"] = "Whenplanted";
	$fieldToolTipsapp_tree["English"]["whenplanted"] = "";
	$fieldLabelsapp_tree["English"]["treetype_id"] = "Treetype Id";
	$fieldToolTipsapp_tree["English"]["treetype_id"] = "";
	if (count($fieldToolTipsapp_tree["English"]))
		$tdataapp_tree[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsapp_tree[""] = array();
	$fieldToolTipsapp_tree[""] = array();
	$pageTitlesapp_tree[""] = array();
	if (count($fieldToolTipsapp_tree[""]))
		$tdataapp_tree[".isUseToolTips"] = true;
}


	$tdataapp_tree[".NCSearch"] = true;



$tdataapp_tree[".shortTableName"] = "app_tree";
$tdataapp_tree[".nSecOptions"] = 0;
$tdataapp_tree[".recsPerRowPrint"] = 1;
$tdataapp_tree[".mainTableOwnerID"] = "";
$tdataapp_tree[".moveNext"] = 1;
$tdataapp_tree[".entityType"] = 0;

$tdataapp_tree[".strOriginalTableName"] = "app.tree";

	



$tdataapp_tree[".showAddInPopup"] = false;

$tdataapp_tree[".showEditInPopup"] = false;

$tdataapp_tree[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataapp_tree[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataapp_tree[".fieldsForRegister"] = array();

$tdataapp_tree[".listAjax"] = false;

	$tdataapp_tree[".audit"] = false;

	$tdataapp_tree[".locking"] = false;

$tdataapp_tree[".edit"] = true;
$tdataapp_tree[".afterEditAction"] = 1;
$tdataapp_tree[".closePopupAfterEdit"] = 1;
$tdataapp_tree[".afterEditActionDetTable"] = "";

$tdataapp_tree[".add"] = true;
$tdataapp_tree[".afterAddAction"] = 1;
$tdataapp_tree[".closePopupAfterAdd"] = 1;
$tdataapp_tree[".afterAddActionDetTable"] = "";

$tdataapp_tree[".list"] = true;

$tdataapp_tree[".view"] = true;

$tdataapp_tree[".import"] = true;

$tdataapp_tree[".exportTo"] = true;

$tdataapp_tree[".printFriendly"] = true;

$tdataapp_tree[".delete"] = true;

$tdataapp_tree[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataapp_tree[".searchSaving"] = false;
//

$tdataapp_tree[".showSearchPanel"] = true;
		$tdataapp_tree[".flexibleSearch"] = true;

$tdataapp_tree[".isUseAjaxSuggest"] = true;

$tdataapp_tree[".rowHighlite"] = true;



$tdataapp_tree[".addPageEvents"] = false;

// use timepicker for search panel
$tdataapp_tree[".isUseTimeForSearch"] = false;

$tdataapp_tree[".isUseFieldsMaps"] = true;

		$tdataapp_tree[".isUseMainMaps"] = true;

$tdataapp_tree[".badgeColor"] = "3CB371";


$tdataapp_tree[".allSearchFields"] = array();
$tdataapp_tree[".filterFields"] = array();
$tdataapp_tree[".requiredSearchFields"] = array();

$tdataapp_tree[".allSearchFields"][] = "id";
	$tdataapp_tree[".allSearchFields"][] = "gpslocation";
	$tdataapp_tree[".allSearchFields"][] = "cityproperty";
	$tdataapp_tree[".allSearchFields"][] = "datelastupdated";
	$tdataapp_tree[".allSearchFields"][] = "dateofinitialcreationofentry";
	$tdataapp_tree[".allSearchFields"][] = "diameterofthetree";
	$tdataapp_tree[".allSearchFields"][] = "floweringtree";
	$tdataapp_tree[".allSearchFields"][] = "fruittree";
	$tdataapp_tree[".allSearchFields"][] = "healthoftree";
	$tdataapp_tree[".allSearchFields"][] = "lastupdaterid";
	$tdataapp_tree[".allSearchFields"][] = "latitude";
	$tdataapp_tree[".allSearchFields"][] = "longitude";
	$tdataapp_tree[".allSearchFields"][] = "otherhazards";
	$tdataapp_tree[".allSearchFields"][] = "overheadhazzards";
	$tdataapp_tree[".allSearchFields"][] = "picoftreepit";
	$tdataapp_tree[".allSearchFields"][] = "picofleaf";
	$tdataapp_tree[".allSearchFields"][] = "pictureoffloweringtree";
	$tdataapp_tree[".allSearchFields"][] = "pictureoftree";
	$tdataapp_tree[".allSearchFields"][] = "pictureoftreetrunk";
	$tdataapp_tree[".allSearchFields"][] = "privateproperty";
	$tdataapp_tree[".allSearchFields"][] = "recordcreatorid";
	$tdataapp_tree[".allSearchFields"][] = "referencepictureoftree";
	$tdataapp_tree[".allSearchFields"][] = "sizeoftree";
	$tdataapp_tree[".allSearchFields"][] = "streetaddress";
	$tdataapp_tree[".allSearchFields"][] = "streettree";
	$tdataapp_tree[".allSearchFields"][] = "treeiconformap";
	$tdataapp_tree[".allSearchFields"][] = "treepitcondition";
	$tdataapp_tree[".allSearchFields"][] = "treetype";
	$tdataapp_tree[".allSearchFields"][] = "whenplanted";
	$tdataapp_tree[".allSearchFields"][] = "treetype_id";
	

$tdataapp_tree[".googleLikeFields"] = array();
$tdataapp_tree[".googleLikeFields"][] = "id";
$tdataapp_tree[".googleLikeFields"][] = "gpslocation";
$tdataapp_tree[".googleLikeFields"][] = "cityproperty";
$tdataapp_tree[".googleLikeFields"][] = "datelastupdated";
$tdataapp_tree[".googleLikeFields"][] = "dateofinitialcreationofentry";
$tdataapp_tree[".googleLikeFields"][] = "diameterofthetree";
$tdataapp_tree[".googleLikeFields"][] = "floweringtree";
$tdataapp_tree[".googleLikeFields"][] = "fruittree";
$tdataapp_tree[".googleLikeFields"][] = "healthoftree";
$tdataapp_tree[".googleLikeFields"][] = "lastupdaterid";
$tdataapp_tree[".googleLikeFields"][] = "latitude";
$tdataapp_tree[".googleLikeFields"][] = "longitude";
$tdataapp_tree[".googleLikeFields"][] = "otherhazards";
$tdataapp_tree[".googleLikeFields"][] = "overheadhazzards";
$tdataapp_tree[".googleLikeFields"][] = "picoftreepit";
$tdataapp_tree[".googleLikeFields"][] = "picofleaf";
$tdataapp_tree[".googleLikeFields"][] = "pictureoffloweringtree";
$tdataapp_tree[".googleLikeFields"][] = "pictureoftree";
$tdataapp_tree[".googleLikeFields"][] = "pictureoftreetrunk";
$tdataapp_tree[".googleLikeFields"][] = "privateproperty";
$tdataapp_tree[".googleLikeFields"][] = "recordcreatorid";
$tdataapp_tree[".googleLikeFields"][] = "referencepictureoftree";
$tdataapp_tree[".googleLikeFields"][] = "sizeoftree";
$tdataapp_tree[".googleLikeFields"][] = "streetaddress";
$tdataapp_tree[".googleLikeFields"][] = "streettree";
$tdataapp_tree[".googleLikeFields"][] = "treeiconformap";
$tdataapp_tree[".googleLikeFields"][] = "treepitcondition";
$tdataapp_tree[".googleLikeFields"][] = "treestreetaddress";
$tdataapp_tree[".googleLikeFields"][] = "treetype";
$tdataapp_tree[".googleLikeFields"][] = "whenplanted";
$tdataapp_tree[".googleLikeFields"][] = "treetype_id";


$tdataapp_tree[".advSearchFields"] = array();
$tdataapp_tree[".advSearchFields"][] = "id";
$tdataapp_tree[".advSearchFields"][] = "gpslocation";
$tdataapp_tree[".advSearchFields"][] = "cityproperty";
$tdataapp_tree[".advSearchFields"][] = "datelastupdated";
$tdataapp_tree[".advSearchFields"][] = "dateofinitialcreationofentry";
$tdataapp_tree[".advSearchFields"][] = "diameterofthetree";
$tdataapp_tree[".advSearchFields"][] = "floweringtree";
$tdataapp_tree[".advSearchFields"][] = "fruittree";
$tdataapp_tree[".advSearchFields"][] = "healthoftree";
$tdataapp_tree[".advSearchFields"][] = "lastupdaterid";
$tdataapp_tree[".advSearchFields"][] = "latitude";
$tdataapp_tree[".advSearchFields"][] = "longitude";
$tdataapp_tree[".advSearchFields"][] = "otherhazards";
$tdataapp_tree[".advSearchFields"][] = "overheadhazzards";
$tdataapp_tree[".advSearchFields"][] = "picoftreepit";
$tdataapp_tree[".advSearchFields"][] = "picofleaf";
$tdataapp_tree[".advSearchFields"][] = "pictureoffloweringtree";
$tdataapp_tree[".advSearchFields"][] = "pictureoftree";
$tdataapp_tree[".advSearchFields"][] = "pictureoftreetrunk";
$tdataapp_tree[".advSearchFields"][] = "privateproperty";
$tdataapp_tree[".advSearchFields"][] = "recordcreatorid";
$tdataapp_tree[".advSearchFields"][] = "referencepictureoftree";
$tdataapp_tree[".advSearchFields"][] = "sizeoftree";
$tdataapp_tree[".advSearchFields"][] = "streetaddress";
$tdataapp_tree[".advSearchFields"][] = "streettree";
$tdataapp_tree[".advSearchFields"][] = "treeiconformap";
$tdataapp_tree[".advSearchFields"][] = "treepitcondition";
$tdataapp_tree[".advSearchFields"][] = "treestreetaddress";
$tdataapp_tree[".advSearchFields"][] = "treetype";
$tdataapp_tree[".advSearchFields"][] = "whenplanted";
$tdataapp_tree[".advSearchFields"][] = "treetype_id";

$tdataapp_tree[".tableType"] = "list";

$tdataapp_tree[".printerPageOrientation"] = 0;
$tdataapp_tree[".nPrinterPageScale"] = 100;

$tdataapp_tree[".nPrinterSplitRecords"] = 40;

$tdataapp_tree[".nPrinterPDFSplitRecords"] = 40;



$tdataapp_tree[".geocodingEnabled"] = true;
$tdataapp_tree[".geocodingData"] = array();
$tdataapp_tree[".geocodingData"]["latField"] = "latitude";
$tdataapp_tree[".geocodingData"]["lngField"] = "longitude";
$tdataapp_tree[".geocodingData"]["addressFields"] = array();
	$tdataapp_tree[".geocodingData"]["addressFields"][] = "streetaddress";





$tdataapp_tree[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataapp_tree[".pageSize"] = 20;

$tdataapp_tree[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataapp_tree[".strOrderBy"] = $tstrOrderBy;

$tdataapp_tree[".orderindexes"] = array();

$tdataapp_tree[".sqlHead"] = "SELECT \"id\",  	\"gpslocation\",  	\"cityproperty\",  	\"datelastupdated\",  	\"dateofinitialcreationofentry\",  	\"diameterofthetree\",  	\"floweringtree\",  	\"fruittree\",  	\"healthoftree\",  	\"lastupdaterid\",  	\"latitude\",  	\"longitude\",  	\"otherhazards\",  	\"overheadhazzards\",  	\"picoftreepit\",  	\"picofleaf\",  	\"pictureoffloweringtree\",  	\"pictureoftree\",  	\"pictureoftreetrunk\",  	\"privateproperty\",  	\"recordcreatorid\",  	\"referencepictureoftree\",  	\"sizeoftree\",  	\"streetaddress\",  	\"streettree\",  	\"treeiconformap\",  	\"treepitcondition\",  	\"treestreetaddress\",  	\"treetype\",  	\"whenplanted\",  	\"treetype_id\"";
$tdataapp_tree[".sqlFrom"] = "FROM \"app\".\"tree\"";
$tdataapp_tree[".sqlWhereExpr"] = "";
$tdataapp_tree[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataapp_tree[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataapp_tree[".arrGroupsPerPage"] = $arrGPP;

$tdataapp_tree[".highlightSearchResults"] = true;

$tableKeysapp_tree = array();
$tableKeysapp_tree[] = "id";
$tdataapp_tree[".Keys"] = $tableKeysapp_tree;

$tdataapp_tree[".listFields"] = array();
$tdataapp_tree[".listFields"][] = "id";
$tdataapp_tree[".listFields"][] = "gpslocation";
$tdataapp_tree[".listFields"][] = "cityproperty";
$tdataapp_tree[".listFields"][] = "datelastupdated";
$tdataapp_tree[".listFields"][] = "dateofinitialcreationofentry";
$tdataapp_tree[".listFields"][] = "diameterofthetree";
$tdataapp_tree[".listFields"][] = "floweringtree";
$tdataapp_tree[".listFields"][] = "fruittree";
$tdataapp_tree[".listFields"][] = "healthoftree";
$tdataapp_tree[".listFields"][] = "lastupdaterid";
$tdataapp_tree[".listFields"][] = "latitude";
$tdataapp_tree[".listFields"][] = "longitude";
$tdataapp_tree[".listFields"][] = "otherhazards";
$tdataapp_tree[".listFields"][] = "overheadhazzards";
$tdataapp_tree[".listFields"][] = "picoftreepit";
$tdataapp_tree[".listFields"][] = "picofleaf";
$tdataapp_tree[".listFields"][] = "pictureoffloweringtree";
$tdataapp_tree[".listFields"][] = "pictureoftree";
$tdataapp_tree[".listFields"][] = "pictureoftreetrunk";
$tdataapp_tree[".listFields"][] = "privateproperty";
$tdataapp_tree[".listFields"][] = "recordcreatorid";
$tdataapp_tree[".listFields"][] = "referencepictureoftree";
$tdataapp_tree[".listFields"][] = "sizeoftree";
$tdataapp_tree[".listFields"][] = "streetaddress";
$tdataapp_tree[".listFields"][] = "streettree";
$tdataapp_tree[".listFields"][] = "treeiconformap";
$tdataapp_tree[".listFields"][] = "treepitcondition";
$tdataapp_tree[".listFields"][] = "treetype";
$tdataapp_tree[".listFields"][] = "whenplanted";
$tdataapp_tree[".listFields"][] = "treetype_id";

$tdataapp_tree[".hideMobileList"] = array();


$tdataapp_tree[".viewFields"] = array();
$tdataapp_tree[".viewFields"][] = "id";
$tdataapp_tree[".viewFields"][] = "gpslocation";
$tdataapp_tree[".viewFields"][] = "cityproperty";
$tdataapp_tree[".viewFields"][] = "datelastupdated";
$tdataapp_tree[".viewFields"][] = "dateofinitialcreationofentry";
$tdataapp_tree[".viewFields"][] = "diameterofthetree";
$tdataapp_tree[".viewFields"][] = "floweringtree";
$tdataapp_tree[".viewFields"][] = "fruittree";
$tdataapp_tree[".viewFields"][] = "healthoftree";
$tdataapp_tree[".viewFields"][] = "lastupdaterid";
$tdataapp_tree[".viewFields"][] = "latitude";
$tdataapp_tree[".viewFields"][] = "longitude";
$tdataapp_tree[".viewFields"][] = "otherhazards";
$tdataapp_tree[".viewFields"][] = "overheadhazzards";
$tdataapp_tree[".viewFields"][] = "picoftreepit";
$tdataapp_tree[".viewFields"][] = "picofleaf";
$tdataapp_tree[".viewFields"][] = "pictureoffloweringtree";
$tdataapp_tree[".viewFields"][] = "pictureoftree";
$tdataapp_tree[".viewFields"][] = "pictureoftreetrunk";
$tdataapp_tree[".viewFields"][] = "privateproperty";
$tdataapp_tree[".viewFields"][] = "recordcreatorid";
$tdataapp_tree[".viewFields"][] = "referencepictureoftree";
$tdataapp_tree[".viewFields"][] = "sizeoftree";
$tdataapp_tree[".viewFields"][] = "streetaddress";
$tdataapp_tree[".viewFields"][] = "streettree";
$tdataapp_tree[".viewFields"][] = "treeiconformap";
$tdataapp_tree[".viewFields"][] = "treepitcondition";
$tdataapp_tree[".viewFields"][] = "treetype";
$tdataapp_tree[".viewFields"][] = "whenplanted";
$tdataapp_tree[".viewFields"][] = "treetype_id";

$tdataapp_tree[".addFields"] = array();
$tdataapp_tree[".addFields"][] = "id";
$tdataapp_tree[".addFields"][] = "gpslocation";
$tdataapp_tree[".addFields"][] = "cityproperty";
$tdataapp_tree[".addFields"][] = "datelastupdated";
$tdataapp_tree[".addFields"][] = "dateofinitialcreationofentry";
$tdataapp_tree[".addFields"][] = "diameterofthetree";
$tdataapp_tree[".addFields"][] = "floweringtree";
$tdataapp_tree[".addFields"][] = "fruittree";
$tdataapp_tree[".addFields"][] = "healthoftree";
$tdataapp_tree[".addFields"][] = "lastupdaterid";
$tdataapp_tree[".addFields"][] = "latitude";
$tdataapp_tree[".addFields"][] = "longitude";
$tdataapp_tree[".addFields"][] = "otherhazards";
$tdataapp_tree[".addFields"][] = "overheadhazzards";
$tdataapp_tree[".addFields"][] = "picoftreepit";
$tdataapp_tree[".addFields"][] = "picofleaf";
$tdataapp_tree[".addFields"][] = "pictureoffloweringtree";
$tdataapp_tree[".addFields"][] = "pictureoftree";
$tdataapp_tree[".addFields"][] = "pictureoftreetrunk";
$tdataapp_tree[".addFields"][] = "privateproperty";
$tdataapp_tree[".addFields"][] = "recordcreatorid";
$tdataapp_tree[".addFields"][] = "referencepictureoftree";
$tdataapp_tree[".addFields"][] = "sizeoftree";
$tdataapp_tree[".addFields"][] = "streetaddress";
$tdataapp_tree[".addFields"][] = "streettree";
$tdataapp_tree[".addFields"][] = "treeiconformap";
$tdataapp_tree[".addFields"][] = "treepitcondition";
$tdataapp_tree[".addFields"][] = "treetype";
$tdataapp_tree[".addFields"][] = "whenplanted";
$tdataapp_tree[".addFields"][] = "treetype_id";

$tdataapp_tree[".masterListFields"] = array();
$tdataapp_tree[".masterListFields"][] = "id";
$tdataapp_tree[".masterListFields"][] = "gpslocation";
$tdataapp_tree[".masterListFields"][] = "cityproperty";
$tdataapp_tree[".masterListFields"][] = "datelastupdated";
$tdataapp_tree[".masterListFields"][] = "dateofinitialcreationofentry";
$tdataapp_tree[".masterListFields"][] = "diameterofthetree";
$tdataapp_tree[".masterListFields"][] = "floweringtree";
$tdataapp_tree[".masterListFields"][] = "fruittree";
$tdataapp_tree[".masterListFields"][] = "healthoftree";
$tdataapp_tree[".masterListFields"][] = "lastupdaterid";
$tdataapp_tree[".masterListFields"][] = "latitude";
$tdataapp_tree[".masterListFields"][] = "longitude";
$tdataapp_tree[".masterListFields"][] = "otherhazards";
$tdataapp_tree[".masterListFields"][] = "overheadhazzards";
$tdataapp_tree[".masterListFields"][] = "picoftreepit";
$tdataapp_tree[".masterListFields"][] = "picofleaf";
$tdataapp_tree[".masterListFields"][] = "pictureoffloweringtree";
$tdataapp_tree[".masterListFields"][] = "pictureoftree";
$tdataapp_tree[".masterListFields"][] = "pictureoftreetrunk";
$tdataapp_tree[".masterListFields"][] = "privateproperty";
$tdataapp_tree[".masterListFields"][] = "recordcreatorid";
$tdataapp_tree[".masterListFields"][] = "referencepictureoftree";
$tdataapp_tree[".masterListFields"][] = "sizeoftree";
$tdataapp_tree[".masterListFields"][] = "streetaddress";
$tdataapp_tree[".masterListFields"][] = "streettree";
$tdataapp_tree[".masterListFields"][] = "treeiconformap";
$tdataapp_tree[".masterListFields"][] = "treepitcondition";
$tdataapp_tree[".masterListFields"][] = "treestreetaddress";
$tdataapp_tree[".masterListFields"][] = "treetype";
$tdataapp_tree[".masterListFields"][] = "whenplanted";
$tdataapp_tree[".masterListFields"][] = "treetype_id";

$tdataapp_tree[".inlineAddFields"] = array();

$tdataapp_tree[".editFields"] = array();
$tdataapp_tree[".editFields"][] = "id";
$tdataapp_tree[".editFields"][] = "gpslocation";
$tdataapp_tree[".editFields"][] = "cityproperty";
$tdataapp_tree[".editFields"][] = "datelastupdated";
$tdataapp_tree[".editFields"][] = "dateofinitialcreationofentry";
$tdataapp_tree[".editFields"][] = "diameterofthetree";
$tdataapp_tree[".editFields"][] = "floweringtree";
$tdataapp_tree[".editFields"][] = "fruittree";
$tdataapp_tree[".editFields"][] = "healthoftree";
$tdataapp_tree[".editFields"][] = "lastupdaterid";
$tdataapp_tree[".editFields"][] = "latitude";
$tdataapp_tree[".editFields"][] = "longitude";
$tdataapp_tree[".editFields"][] = "otherhazards";
$tdataapp_tree[".editFields"][] = "overheadhazzards";
$tdataapp_tree[".editFields"][] = "picoftreepit";
$tdataapp_tree[".editFields"][] = "picofleaf";
$tdataapp_tree[".editFields"][] = "pictureoffloweringtree";
$tdataapp_tree[".editFields"][] = "pictureoftree";
$tdataapp_tree[".editFields"][] = "pictureoftreetrunk";
$tdataapp_tree[".editFields"][] = "privateproperty";
$tdataapp_tree[".editFields"][] = "recordcreatorid";
$tdataapp_tree[".editFields"][] = "referencepictureoftree";
$tdataapp_tree[".editFields"][] = "sizeoftree";
$tdataapp_tree[".editFields"][] = "streetaddress";
$tdataapp_tree[".editFields"][] = "streettree";
$tdataapp_tree[".editFields"][] = "treeiconformap";
$tdataapp_tree[".editFields"][] = "treepitcondition";
$tdataapp_tree[".editFields"][] = "treetype";
$tdataapp_tree[".editFields"][] = "whenplanted";
$tdataapp_tree[".editFields"][] = "treetype_id";

$tdataapp_tree[".inlineEditFields"] = array();

$tdataapp_tree[".exportFields"] = array();
$tdataapp_tree[".exportFields"][] = "id";
$tdataapp_tree[".exportFields"][] = "gpslocation";
$tdataapp_tree[".exportFields"][] = "cityproperty";
$tdataapp_tree[".exportFields"][] = "datelastupdated";
$tdataapp_tree[".exportFields"][] = "dateofinitialcreationofentry";
$tdataapp_tree[".exportFields"][] = "diameterofthetree";
$tdataapp_tree[".exportFields"][] = "floweringtree";
$tdataapp_tree[".exportFields"][] = "fruittree";
$tdataapp_tree[".exportFields"][] = "healthoftree";
$tdataapp_tree[".exportFields"][] = "lastupdaterid";
$tdataapp_tree[".exportFields"][] = "latitude";
$tdataapp_tree[".exportFields"][] = "longitude";
$tdataapp_tree[".exportFields"][] = "otherhazards";
$tdataapp_tree[".exportFields"][] = "overheadhazzards";
$tdataapp_tree[".exportFields"][] = "picoftreepit";
$tdataapp_tree[".exportFields"][] = "picofleaf";
$tdataapp_tree[".exportFields"][] = "pictureoffloweringtree";
$tdataapp_tree[".exportFields"][] = "pictureoftree";
$tdataapp_tree[".exportFields"][] = "pictureoftreetrunk";
$tdataapp_tree[".exportFields"][] = "privateproperty";
$tdataapp_tree[".exportFields"][] = "recordcreatorid";
$tdataapp_tree[".exportFields"][] = "referencepictureoftree";
$tdataapp_tree[".exportFields"][] = "sizeoftree";
$tdataapp_tree[".exportFields"][] = "streetaddress";
$tdataapp_tree[".exportFields"][] = "streettree";
$tdataapp_tree[".exportFields"][] = "treeiconformap";
$tdataapp_tree[".exportFields"][] = "treepitcondition";
$tdataapp_tree[".exportFields"][] = "treetype";
$tdataapp_tree[".exportFields"][] = "whenplanted";
$tdataapp_tree[".exportFields"][] = "treetype_id";

$tdataapp_tree[".importFields"] = array();
$tdataapp_tree[".importFields"][] = "id";
$tdataapp_tree[".importFields"][] = "gpslocation";
$tdataapp_tree[".importFields"][] = "cityproperty";
$tdataapp_tree[".importFields"][] = "datelastupdated";
$tdataapp_tree[".importFields"][] = "dateofinitialcreationofentry";
$tdataapp_tree[".importFields"][] = "diameterofthetree";
$tdataapp_tree[".importFields"][] = "floweringtree";
$tdataapp_tree[".importFields"][] = "fruittree";
$tdataapp_tree[".importFields"][] = "healthoftree";
$tdataapp_tree[".importFields"][] = "lastupdaterid";
$tdataapp_tree[".importFields"][] = "latitude";
$tdataapp_tree[".importFields"][] = "longitude";
$tdataapp_tree[".importFields"][] = "otherhazards";
$tdataapp_tree[".importFields"][] = "overheadhazzards";
$tdataapp_tree[".importFields"][] = "picoftreepit";
$tdataapp_tree[".importFields"][] = "picofleaf";
$tdataapp_tree[".importFields"][] = "pictureoffloweringtree";
$tdataapp_tree[".importFields"][] = "pictureoftree";
$tdataapp_tree[".importFields"][] = "pictureoftreetrunk";
$tdataapp_tree[".importFields"][] = "privateproperty";
$tdataapp_tree[".importFields"][] = "recordcreatorid";
$tdataapp_tree[".importFields"][] = "referencepictureoftree";
$tdataapp_tree[".importFields"][] = "sizeoftree";
$tdataapp_tree[".importFields"][] = "streetaddress";
$tdataapp_tree[".importFields"][] = "streettree";
$tdataapp_tree[".importFields"][] = "treeiconformap";
$tdataapp_tree[".importFields"][] = "treepitcondition";
$tdataapp_tree[".importFields"][] = "treetype";
$tdataapp_tree[".importFields"][] = "whenplanted";
$tdataapp_tree[".importFields"][] = "treetype_id";

$tdataapp_tree[".printFields"] = array();
$tdataapp_tree[".printFields"][] = "id";
$tdataapp_tree[".printFields"][] = "gpslocation";
$tdataapp_tree[".printFields"][] = "cityproperty";
$tdataapp_tree[".printFields"][] = "datelastupdated";
$tdataapp_tree[".printFields"][] = "dateofinitialcreationofentry";
$tdataapp_tree[".printFields"][] = "diameterofthetree";
$tdataapp_tree[".printFields"][] = "floweringtree";
$tdataapp_tree[".printFields"][] = "fruittree";
$tdataapp_tree[".printFields"][] = "healthoftree";
$tdataapp_tree[".printFields"][] = "lastupdaterid";
$tdataapp_tree[".printFields"][] = "latitude";
$tdataapp_tree[".printFields"][] = "longitude";
$tdataapp_tree[".printFields"][] = "otherhazards";
$tdataapp_tree[".printFields"][] = "overheadhazzards";
$tdataapp_tree[".printFields"][] = "picoftreepit";
$tdataapp_tree[".printFields"][] = "picofleaf";
$tdataapp_tree[".printFields"][] = "pictureoffloweringtree";
$tdataapp_tree[".printFields"][] = "pictureoftree";
$tdataapp_tree[".printFields"][] = "pictureoftreetrunk";
$tdataapp_tree[".printFields"][] = "privateproperty";
$tdataapp_tree[".printFields"][] = "recordcreatorid";
$tdataapp_tree[".printFields"][] = "referencepictureoftree";
$tdataapp_tree[".printFields"][] = "sizeoftree";
$tdataapp_tree[".printFields"][] = "streetaddress";
$tdataapp_tree[".printFields"][] = "streettree";
$tdataapp_tree[".printFields"][] = "treeiconformap";
$tdataapp_tree[".printFields"][] = "treepitcondition";
$tdataapp_tree[".printFields"][] = "treetype";
$tdataapp_tree[".printFields"][] = "whenplanted";
$tdataapp_tree[".printFields"][] = "treetype_id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"id\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["id"] = $fdata;
//	gpslocation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "gpslocation";
	$fdata["GoodName"] = "gpslocation";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","gpslocation");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gpslocation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"gpslocation\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["gpslocation"] = $fdata;
//	cityproperty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cityproperty";
	$fdata["GoodName"] = "cityproperty";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","cityproperty");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cityproperty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"cityproperty\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["cityproperty"] = $fdata;
//	datelastupdated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "datelastupdated";
	$fdata["GoodName"] = "datelastupdated";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","datelastupdated");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "datelastupdated";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"datelastupdated\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["datelastupdated"] = $fdata;
//	dateofinitialcreationofentry
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dateofinitialcreationofentry";
	$fdata["GoodName"] = "dateofinitialcreationofentry";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","dateofinitialcreationofentry");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dateofinitialcreationofentry";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"dateofinitialcreationofentry\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["dateofinitialcreationofentry"] = $fdata;
//	diameterofthetree
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "diameterofthetree";
	$fdata["GoodName"] = "diameterofthetree";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","diameterofthetree");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "diameterofthetree";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"diameterofthetree\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["diameterofthetree"] = $fdata;
//	floweringtree
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "floweringtree";
	$fdata["GoodName"] = "floweringtree";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","floweringtree");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "floweringtree";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"floweringtree\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["floweringtree"] = $fdata;
//	fruittree
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fruittree";
	$fdata["GoodName"] = "fruittree";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","fruittree");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fruittree";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"fruittree\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["fruittree"] = $fdata;
//	healthoftree
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "healthoftree";
	$fdata["GoodName"] = "healthoftree";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","healthoftree");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "healthoftree";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"healthoftree\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Good";
	$edata["LookupValues"][] = "Bad";
	$edata["LookupValues"][] = "Medium";
	$edata["LookupValues"][] = "Not Sure";
	$edata["LookupValues"][] = "Dead";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["healthoftree"] = $fdata;
//	lastupdaterid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "lastupdaterid";
	$fdata["GoodName"] = "lastupdaterid";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","lastupdaterid");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "lastupdaterid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"lastupdaterid\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["lastupdaterid"] = $fdata;
//	latitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "latitude";
	$fdata["GoodName"] = "latitude";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","latitude");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "latitude";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"latitude\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["latitude"] = $fdata;
//	longitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "longitude";
	$fdata["GoodName"] = "longitude";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","longitude");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "longitude";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"longitude\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["longitude"] = $fdata;
//	otherhazards
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "otherhazards";
	$fdata["GoodName"] = "otherhazards";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","otherhazards");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "otherhazards";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"otherhazards\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["otherhazards"] = $fdata;
//	overheadhazzards
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "overheadhazzards";
	$fdata["GoodName"] = "overheadhazzards";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","overheadhazzards");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "overheadhazzards";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"overheadhazzards\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["overheadhazzards"] = $fdata;
//	picoftreepit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "picoftreepit";
	$fdata["GoodName"] = "picoftreepit";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","picoftreepit");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "picoftreepit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"picoftreepit\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["picoftreepit"] = $fdata;
//	picofleaf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "picofleaf";
	$fdata["GoodName"] = "picofleaf";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","picofleaf");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "picofleaf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"picofleaf\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["picofleaf"] = $fdata;
//	pictureoffloweringtree
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "pictureoffloweringtree";
	$fdata["GoodName"] = "pictureoffloweringtree";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","pictureoffloweringtree");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "pictureoffloweringtree";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"pictureoffloweringtree\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["pictureoffloweringtree"] = $fdata;
//	pictureoftree
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "pictureoftree";
	$fdata["GoodName"] = "pictureoftree";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","pictureoftree");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "pictureoftree";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"pictureoftree\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["pictureoftree"] = $fdata;
//	pictureoftreetrunk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "pictureoftreetrunk";
	$fdata["GoodName"] = "pictureoftreetrunk";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","pictureoftreetrunk");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "pictureoftreetrunk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"pictureoftreetrunk\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["pictureoftreetrunk"] = $fdata;
//	privateproperty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "privateproperty";
	$fdata["GoodName"] = "privateproperty";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","privateproperty");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "privateproperty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"privateproperty\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["privateproperty"] = $fdata;
//	recordcreatorid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "recordcreatorid";
	$fdata["GoodName"] = "recordcreatorid";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","recordcreatorid");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "recordcreatorid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"recordcreatorid\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["recordcreatorid"] = $fdata;
//	referencepictureoftree
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "referencepictureoftree";
	$fdata["GoodName"] = "referencepictureoftree";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","referencepictureoftree");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "referencepictureoftree";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"referencepictureoftree\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["referencepictureoftree"] = $fdata;
//	sizeoftree
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "sizeoftree";
	$fdata["GoodName"] = "sizeoftree";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","sizeoftree");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sizeoftree";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"sizeoftree\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["sizeoftree"] = $fdata;
//	streetaddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "streetaddress";
	$fdata["GoodName"] = "streetaddress";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","streetaddress");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "streetaddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"streetaddress\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Map");

	
	
	
	
	
	
	
	
	
	
		$vdata["mapData"] = array();
	$vdata["mapData"]['width'] = 300;
	$vdata["mapData"]['height'] = 225;
	$vdata["mapData"]['address'] = "streetaddress";
	$vdata["mapData"]['lat'] = "latitude";
	$vdata["mapData"]['lng'] = "longitude";
	$vdata["mapData"]['desc'] = "streetaddress";
	$vdata["mapData"]['mapIcon'] = "";
	$vdata["mapData"]['isMapIconCustom'] = 0;
		$vdata["mapData"]['zoom'] = 15;

		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["streetaddress"] = $fdata;
//	streettree
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "streettree";
	$fdata["GoodName"] = "streettree";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","streettree");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "streettree";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"streettree\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["streettree"] = $fdata;
//	treeiconformap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "treeiconformap";
	$fdata["GoodName"] = "treeiconformap";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","treeiconformap");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "treeiconformap";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"treeiconformap\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["treeiconformap"] = $fdata;
//	treepitcondition
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "treepitcondition";
	$fdata["GoodName"] = "treepitcondition";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","treepitcondition");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "treepitcondition";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"treepitcondition\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["treepitcondition"] = $fdata;
//	treestreetaddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "treestreetaddress";
	$fdata["GoodName"] = "treestreetaddress";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","treestreetaddress");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "treestreetaddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"treestreetaddress\"";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataapp_tree["treestreetaddress"] = $fdata;
//	treetype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "treetype";
	$fdata["GoodName"] = "treetype";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","treetype");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "treetype";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"treetype\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "app.treetype";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "commonname";

	
	$edata["LookupOrderBy"] = "commonname";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["treetype"] = $fdata;
//	whenplanted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "whenplanted";
	$fdata["GoodName"] = "whenplanted";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","whenplanted");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "whenplanted";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"whenplanted\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["whenplanted"] = $fdata;
//	treetype_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "treetype_id";
	$fdata["GoodName"] = "treetype_id";
	$fdata["ownerTable"] = "app.tree";
	$fdata["Label"] = GetFieldLabel("app_tree","treetype_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "treetype_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"treetype_id\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "app.treetype";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "id";

	
	$edata["LookupOrderBy"] = "commonname";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataapp_tree["treetype_id"] = $fdata;


$tables_data["app.tree"]=&$tdataapp_tree;
$field_labels["app_tree"] = &$fieldLabelsapp_tree;
$fieldToolTips["app_tree"] = &$fieldToolTipsapp_tree;
$page_titles["app_tree"] = &$pageTitlesapp_tree;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["app.tree"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["app.tree"] = array();


	
				$strOriginalDetailsTable="app.treetype";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="app.treetype";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "app_treetype";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["app.tree"][0] = $masterParams;
				$masterTablesData["app.tree"][0]["masterKeys"] = array();
	$masterTablesData["app.tree"][0]["masterKeys"][]="id";
				$masterTablesData["app.tree"][0]["detailKeys"] = array();
	$masterTablesData["app.tree"][0]["detailKeys"][]="treetype_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_app_tree()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"id\",  	\"gpslocation\",  	\"cityproperty\",  	\"datelastupdated\",  	\"dateofinitialcreationofentry\",  	\"diameterofthetree\",  	\"floweringtree\",  	\"fruittree\",  	\"healthoftree\",  	\"lastupdaterid\",  	\"latitude\",  	\"longitude\",  	\"otherhazards\",  	\"overheadhazzards\",  	\"picoftreepit\",  	\"picofleaf\",  	\"pictureoffloweringtree\",  	\"pictureoftree\",  	\"pictureoftreetrunk\",  	\"privateproperty\",  	\"recordcreatorid\",  	\"referencepictureoftree\",  	\"sizeoftree\",  	\"streetaddress\",  	\"streettree\",  	\"treeiconformap\",  	\"treepitcondition\",  	\"treestreetaddress\",  	\"treetype\",  	\"whenplanted\",  	\"treetype_id\"";
$proto0["m_strFrom"] = "FROM \"app\".\"tree\"";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto6["m_sql"] = "\"id\"";
$proto6["m_srcTableName"] = "app.tree";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "gpslocation",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto8["m_sql"] = "\"gpslocation\"";
$proto8["m_srcTableName"] = "app.tree";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cityproperty",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto10["m_sql"] = "\"cityproperty\"";
$proto10["m_srcTableName"] = "app.tree";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "datelastupdated",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto12["m_sql"] = "\"datelastupdated\"";
$proto12["m_srcTableName"] = "app.tree";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dateofinitialcreationofentry",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto14["m_sql"] = "\"dateofinitialcreationofentry\"";
$proto14["m_srcTableName"] = "app.tree";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "diameterofthetree",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto16["m_sql"] = "\"diameterofthetree\"";
$proto16["m_srcTableName"] = "app.tree";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "floweringtree",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto18["m_sql"] = "\"floweringtree\"";
$proto18["m_srcTableName"] = "app.tree";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fruittree",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto20["m_sql"] = "\"fruittree\"";
$proto20["m_srcTableName"] = "app.tree";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "healthoftree",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto22["m_sql"] = "\"healthoftree\"";
$proto22["m_srcTableName"] = "app.tree";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "lastupdaterid",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto24["m_sql"] = "\"lastupdaterid\"";
$proto24["m_srcTableName"] = "app.tree";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "latitude",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto26["m_sql"] = "\"latitude\"";
$proto26["m_srcTableName"] = "app.tree";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "longitude",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto28["m_sql"] = "\"longitude\"";
$proto28["m_srcTableName"] = "app.tree";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "otherhazards",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto30["m_sql"] = "\"otherhazards\"";
$proto30["m_srcTableName"] = "app.tree";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "overheadhazzards",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto32["m_sql"] = "\"overheadhazzards\"";
$proto32["m_srcTableName"] = "app.tree";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "picoftreepit",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto34["m_sql"] = "\"picoftreepit\"";
$proto34["m_srcTableName"] = "app.tree";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "picofleaf",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto36["m_sql"] = "\"picofleaf\"";
$proto36["m_srcTableName"] = "app.tree";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "pictureoffloweringtree",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto38["m_sql"] = "\"pictureoffloweringtree\"";
$proto38["m_srcTableName"] = "app.tree";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "pictureoftree",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto40["m_sql"] = "\"pictureoftree\"";
$proto40["m_srcTableName"] = "app.tree";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "pictureoftreetrunk",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto42["m_sql"] = "\"pictureoftreetrunk\"";
$proto42["m_srcTableName"] = "app.tree";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "privateproperty",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto44["m_sql"] = "\"privateproperty\"";
$proto44["m_srcTableName"] = "app.tree";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "recordcreatorid",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto46["m_sql"] = "\"recordcreatorid\"";
$proto46["m_srcTableName"] = "app.tree";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "referencepictureoftree",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto48["m_sql"] = "\"referencepictureoftree\"";
$proto48["m_srcTableName"] = "app.tree";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "sizeoftree",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto50["m_sql"] = "\"sizeoftree\"";
$proto50["m_srcTableName"] = "app.tree";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "streetaddress",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto52["m_sql"] = "\"streetaddress\"";
$proto52["m_srcTableName"] = "app.tree";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "streettree",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto54["m_sql"] = "\"streettree\"";
$proto54["m_srcTableName"] = "app.tree";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "treeiconformap",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto56["m_sql"] = "\"treeiconformap\"";
$proto56["m_srcTableName"] = "app.tree";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "treepitcondition",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto58["m_sql"] = "\"treepitcondition\"";
$proto58["m_srcTableName"] = "app.tree";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "treestreetaddress",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto60["m_sql"] = "\"treestreetaddress\"";
$proto60["m_srcTableName"] = "app.tree";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "treetype",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto62["m_sql"] = "\"treetype\"";
$proto62["m_srcTableName"] = "app.tree";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "whenplanted",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto64["m_sql"] = "\"whenplanted\"";
$proto64["m_srcTableName"] = "app.tree";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "treetype_id",
	"m_strTable" => "app.tree",
	"m_srcTableName" => "app.tree"
));

$proto66["m_sql"] = "\"treetype_id\"";
$proto66["m_srcTableName"] = "app.tree";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto68=array();
$proto68["m_link"] = "SQLL_MAIN";
			$proto69=array();
$proto69["m_strName"] = "app.tree";
$proto69["m_srcTableName"] = "app.tree";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "id";
$proto69["m_columns"][] = "gpslocation";
$proto69["m_columns"][] = "cityproperty";
$proto69["m_columns"][] = "datelastupdated";
$proto69["m_columns"][] = "dateofinitialcreationofentry";
$proto69["m_columns"][] = "diameterofthetree";
$proto69["m_columns"][] = "floweringtree";
$proto69["m_columns"][] = "fruittree";
$proto69["m_columns"][] = "healthoftree";
$proto69["m_columns"][] = "lastupdaterid";
$proto69["m_columns"][] = "latitude";
$proto69["m_columns"][] = "longitude";
$proto69["m_columns"][] = "otherhazards";
$proto69["m_columns"][] = "overheadhazzards";
$proto69["m_columns"][] = "picoftreepit";
$proto69["m_columns"][] = "picofleaf";
$proto69["m_columns"][] = "pictureoffloweringtree";
$proto69["m_columns"][] = "pictureoftree";
$proto69["m_columns"][] = "pictureoftreetrunk";
$proto69["m_columns"][] = "privateproperty";
$proto69["m_columns"][] = "recordcreatorid";
$proto69["m_columns"][] = "referencepictureoftree";
$proto69["m_columns"][] = "sizeoftree";
$proto69["m_columns"][] = "streetaddress";
$proto69["m_columns"][] = "streettree";
$proto69["m_columns"][] = "treeiconformap";
$proto69["m_columns"][] = "treepitcondition";
$proto69["m_columns"][] = "treestreetaddress";
$proto69["m_columns"][] = "treetype";
$proto69["m_columns"][] = "whenplanted";
$proto69["m_columns"][] = "treetype_id";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "\"app\".\"tree\"";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "app.tree";
$proto70=array();
$proto70["m_sql"] = "";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

$proto68["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto68);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="app.tree";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_app_tree = createSqlQuery_app_tree();


	
		;

																															

$tdataapp_tree[".sqlquery"] = $queryData_app_tree;

include_once(getabspath("include/app_tree_events.php"));
$tableEvents["app.tree"] = new eventclass_app_tree;
$tdataapp_tree[".hasEvents"] = true;

?>