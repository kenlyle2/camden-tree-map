<?php
require_once(getabspath("classes/cipherer.php"));




$tdataapp_treetype = array();
	$tdataapp_treetype[".truncateText"] = true;
	$tdataapp_treetype[".NumberOfChars"] = 80;
	$tdataapp_treetype[".ShortName"] = "app_treetype";
	$tdataapp_treetype[".OwnerID"] = "";
	$tdataapp_treetype[".OriginalTable"] = "app.treetype";

//	field labels
$fieldLabelsapp_treetype = array();
$fieldToolTipsapp_treetype = array();
$pageTitlesapp_treetype = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsapp_treetype["English"] = array();
	$fieldToolTipsapp_treetype["English"] = array();
	$pageTitlesapp_treetype["English"] = array();
	$fieldLabelsapp_treetype["English"]["id"] = "Id";
	$fieldToolTipsapp_treetype["English"]["id"] = "";
	$fieldLabelsapp_treetype["English"]["commonname"] = "Commonname";
	$fieldToolTipsapp_treetype["English"]["commonname"] = "";
	$fieldLabelsapp_treetype["English"]["scientificname"] = "Scientificname";
	$fieldToolTipsapp_treetype["English"]["scientificname"] = "";
	if (count($fieldToolTipsapp_treetype["English"]))
		$tdataapp_treetype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsapp_treetype[""] = array();
	$fieldToolTipsapp_treetype[""] = array();
	$pageTitlesapp_treetype[""] = array();
	if (count($fieldToolTipsapp_treetype[""]))
		$tdataapp_treetype[".isUseToolTips"] = true;
}


	$tdataapp_treetype[".NCSearch"] = true;



$tdataapp_treetype[".shortTableName"] = "app_treetype";
$tdataapp_treetype[".nSecOptions"] = 0;
$tdataapp_treetype[".recsPerRowPrint"] = 1;
$tdataapp_treetype[".mainTableOwnerID"] = "";
$tdataapp_treetype[".moveNext"] = 1;
$tdataapp_treetype[".entityType"] = 0;

$tdataapp_treetype[".strOriginalTableName"] = "app.treetype";

	



$tdataapp_treetype[".showAddInPopup"] = false;

$tdataapp_treetype[".showEditInPopup"] = false;

$tdataapp_treetype[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataapp_treetype[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataapp_treetype[".fieldsForRegister"] = array();

$tdataapp_treetype[".listAjax"] = false;

	$tdataapp_treetype[".audit"] = false;

	$tdataapp_treetype[".locking"] = false;

$tdataapp_treetype[".edit"] = true;
$tdataapp_treetype[".afterEditAction"] = 1;
$tdataapp_treetype[".closePopupAfterEdit"] = 1;
$tdataapp_treetype[".afterEditActionDetTable"] = "";

$tdataapp_treetype[".add"] = true;
$tdataapp_treetype[".afterAddAction"] = 1;
$tdataapp_treetype[".closePopupAfterAdd"] = 1;
$tdataapp_treetype[".afterAddActionDetTable"] = "";

$tdataapp_treetype[".list"] = true;

$tdataapp_treetype[".view"] = true;

$tdataapp_treetype[".import"] = true;

$tdataapp_treetype[".exportTo"] = true;

$tdataapp_treetype[".printFriendly"] = true;

$tdataapp_treetype[".delete"] = true;

$tdataapp_treetype[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataapp_treetype[".searchSaving"] = false;
//

$tdataapp_treetype[".showSearchPanel"] = true;
		$tdataapp_treetype[".flexibleSearch"] = true;

$tdataapp_treetype[".isUseAjaxSuggest"] = true;

$tdataapp_treetype[".rowHighlite"] = true;



$tdataapp_treetype[".addPageEvents"] = false;

// use timepicker for search panel
$tdataapp_treetype[".isUseTimeForSearch"] = false;



$tdataapp_treetype[".badgeColor"] = "D2691E";


$tdataapp_treetype[".allSearchFields"] = array();
$tdataapp_treetype[".filterFields"] = array();
$tdataapp_treetype[".requiredSearchFields"] = array();

$tdataapp_treetype[".allSearchFields"][] = "id";
	$tdataapp_treetype[".allSearchFields"][] = "commonname";
	$tdataapp_treetype[".allSearchFields"][] = "scientificname";
	

$tdataapp_treetype[".googleLikeFields"] = array();
$tdataapp_treetype[".googleLikeFields"][] = "id";
$tdataapp_treetype[".googleLikeFields"][] = "commonname";
$tdataapp_treetype[".googleLikeFields"][] = "scientificname";


$tdataapp_treetype[".advSearchFields"] = array();
$tdataapp_treetype[".advSearchFields"][] = "id";
$tdataapp_treetype[".advSearchFields"][] = "commonname";
$tdataapp_treetype[".advSearchFields"][] = "scientificname";

$tdataapp_treetype[".tableType"] = "list";

$tdataapp_treetype[".printerPageOrientation"] = 0;
$tdataapp_treetype[".nPrinterPageScale"] = 100;

$tdataapp_treetype[".nPrinterSplitRecords"] = 40;

$tdataapp_treetype[".nPrinterPDFSplitRecords"] = 40;



$tdataapp_treetype[".geocodingEnabled"] = false;





$tdataapp_treetype[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataapp_treetype[".pageSize"] = 20;

$tdataapp_treetype[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataapp_treetype[".strOrderBy"] = $tstrOrderBy;

$tdataapp_treetype[".orderindexes"] = array();

$tdataapp_treetype[".sqlHead"] = "SELECT \"id\",  	\"commonname\",  	\"scientificname\"";
$tdataapp_treetype[".sqlFrom"] = "FROM \"app\".\"treetype\"";
$tdataapp_treetype[".sqlWhereExpr"] = "";
$tdataapp_treetype[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataapp_treetype[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataapp_treetype[".arrGroupsPerPage"] = $arrGPP;

$tdataapp_treetype[".highlightSearchResults"] = true;

$tableKeysapp_treetype = array();
$tableKeysapp_treetype[] = "id";
$tdataapp_treetype[".Keys"] = $tableKeysapp_treetype;

$tdataapp_treetype[".listFields"] = array();
$tdataapp_treetype[".listFields"][] = "id";
$tdataapp_treetype[".listFields"][] = "commonname";
$tdataapp_treetype[".listFields"][] = "scientificname";

$tdataapp_treetype[".hideMobileList"] = array();


$tdataapp_treetype[".viewFields"] = array();
$tdataapp_treetype[".viewFields"][] = "id";
$tdataapp_treetype[".viewFields"][] = "commonname";
$tdataapp_treetype[".viewFields"][] = "scientificname";

$tdataapp_treetype[".addFields"] = array();
$tdataapp_treetype[".addFields"][] = "id";
$tdataapp_treetype[".addFields"][] = "commonname";
$tdataapp_treetype[".addFields"][] = "scientificname";

$tdataapp_treetype[".masterListFields"] = array();
$tdataapp_treetype[".masterListFields"][] = "id";
$tdataapp_treetype[".masterListFields"][] = "commonname";
$tdataapp_treetype[".masterListFields"][] = "scientificname";

$tdataapp_treetype[".inlineAddFields"] = array();
$tdataapp_treetype[".inlineAddFields"][] = "id";
$tdataapp_treetype[".inlineAddFields"][] = "commonname";
$tdataapp_treetype[".inlineAddFields"][] = "scientificname";

$tdataapp_treetype[".editFields"] = array();
$tdataapp_treetype[".editFields"][] = "id";
$tdataapp_treetype[".editFields"][] = "commonname";
$tdataapp_treetype[".editFields"][] = "scientificname";

$tdataapp_treetype[".inlineEditFields"] = array();
$tdataapp_treetype[".inlineEditFields"][] = "id";
$tdataapp_treetype[".inlineEditFields"][] = "commonname";
$tdataapp_treetype[".inlineEditFields"][] = "scientificname";

$tdataapp_treetype[".exportFields"] = array();
$tdataapp_treetype[".exportFields"][] = "id";
$tdataapp_treetype[".exportFields"][] = "commonname";
$tdataapp_treetype[".exportFields"][] = "scientificname";

$tdataapp_treetype[".importFields"] = array();
$tdataapp_treetype[".importFields"][] = "id";
$tdataapp_treetype[".importFields"][] = "commonname";
$tdataapp_treetype[".importFields"][] = "scientificname";

$tdataapp_treetype[".printFields"] = array();
$tdataapp_treetype[".printFields"][] = "id";
$tdataapp_treetype[".printFields"][] = "commonname";
$tdataapp_treetype[".printFields"][] = "scientificname";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "app.treetype";
	$fdata["Label"] = GetFieldLabel("app_treetype","id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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




	$tdataapp_treetype["id"] = $fdata;
//	commonname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "commonname";
	$fdata["GoodName"] = "commonname";
	$fdata["ownerTable"] = "app.treetype";
	$fdata["Label"] = GetFieldLabel("app_treetype","commonname");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "commonname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"commonname\"";

	
	
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




	$tdataapp_treetype["commonname"] = $fdata;
//	scientificname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "scientificname";
	$fdata["GoodName"] = "scientificname";
	$fdata["ownerTable"] = "app.treetype";
	$fdata["Label"] = GetFieldLabel("app_treetype","scientificname");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "scientificname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"scientificname\"";

	
	
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




	$tdataapp_treetype["scientificname"] = $fdata;


$tables_data["app.treetype"]=&$tdataapp_treetype;
$field_labels["app_treetype"] = &$fieldLabelsapp_treetype;
$fieldToolTips["app_treetype"] = &$fieldToolTipsapp_treetype;
$page_titles["app_treetype"] = &$pageTitlesapp_treetype;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["app.treetype"] = array();
//	app.tree
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="app.tree";
		$detailsParam["dOriginalTable"] = "app.tree";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "app_tree";
	$detailsParam["dCaptionTable"] = GetTableCaption("app_tree");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["app.treetype"][$dIndex] = $detailsParam;

	
		$detailsTablesData["app.treetype"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["app.treetype"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["app.treetype"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["app.treetype"][$dIndex]["detailKeys"][]="treetype_id";

// tables which are master tables for current table (detail)
$masterTablesData["app.treetype"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_app_treetype()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"id\",  	\"commonname\",  	\"scientificname\"";
$proto0["m_strFrom"] = "FROM \"app\".\"treetype\"";
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
	"m_strTable" => "app.treetype",
	"m_srcTableName" => "app.treetype"
));

$proto6["m_sql"] = "\"id\"";
$proto6["m_srcTableName"] = "app.treetype";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "commonname",
	"m_strTable" => "app.treetype",
	"m_srcTableName" => "app.treetype"
));

$proto8["m_sql"] = "\"commonname\"";
$proto8["m_srcTableName"] = "app.treetype";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "scientificname",
	"m_strTable" => "app.treetype",
	"m_srcTableName" => "app.treetype"
));

$proto10["m_sql"] = "\"scientificname\"";
$proto10["m_srcTableName"] = "app.treetype";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "app.treetype";
$proto13["m_srcTableName"] = "app.treetype";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "commonname";
$proto13["m_columns"][] = "scientificname";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "\"app\".\"treetype\"";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "app.treetype";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="app.treetype";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_app_treetype = createSqlQuery_app_treetype();


	
		;

			

$tdataapp_treetype[".sqlquery"] = $queryData_app_treetype;

$tableEvents["app.treetype"] = new eventsBase;
$tdataapp_treetype[".hasEvents"] = false;

?>