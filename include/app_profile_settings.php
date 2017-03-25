<?php
require_once(getabspath("classes/cipherer.php"));




$tdataapp_profile = array();
	$tdataapp_profile[".truncateText"] = true;
	$tdataapp_profile[".NumberOfChars"] = 80;
	$tdataapp_profile[".ShortName"] = "app_profile";
	$tdataapp_profile[".OwnerID"] = "";
	$tdataapp_profile[".OriginalTable"] = "app.profile";

//	field labels
$fieldLabelsapp_profile = array();
$fieldToolTipsapp_profile = array();
$pageTitlesapp_profile = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsapp_profile["English"] = array();
	$fieldToolTipsapp_profile["English"] = array();
	$pageTitlesapp_profile["English"] = array();
	$fieldLabelsapp_profile["English"]["id"] = "Id";
	$fieldToolTipsapp_profile["English"]["id"] = "";
	$fieldLabelsapp_profile["English"]["password"] = "Password";
	$fieldToolTipsapp_profile["English"]["password"] = "";
	$fieldLabelsapp_profile["English"]["username"] = "Username";
	$fieldToolTipsapp_profile["English"]["username"] = "";
	if (count($fieldToolTipsapp_profile["English"]))
		$tdataapp_profile[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsapp_profile[""] = array();
	$fieldToolTipsapp_profile[""] = array();
	$pageTitlesapp_profile[""] = array();
	if (count($fieldToolTipsapp_profile[""]))
		$tdataapp_profile[".isUseToolTips"] = true;
}


	$tdataapp_profile[".NCSearch"] = true;



$tdataapp_profile[".shortTableName"] = "app_profile";
$tdataapp_profile[".nSecOptions"] = 0;
$tdataapp_profile[".recsPerRowPrint"] = 1;
$tdataapp_profile[".mainTableOwnerID"] = "";
$tdataapp_profile[".moveNext"] = 1;
$tdataapp_profile[".entityType"] = 0;

$tdataapp_profile[".strOriginalTableName"] = "app.profile";

	



$tdataapp_profile[".showAddInPopup"] = false;

$tdataapp_profile[".showEditInPopup"] = false;

$tdataapp_profile[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataapp_profile[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataapp_profile[".fieldsForRegister"] = array();

$tdataapp_profile[".listAjax"] = false;

	$tdataapp_profile[".audit"] = false;

	$tdataapp_profile[".locking"] = false;

$tdataapp_profile[".edit"] = true;
$tdataapp_profile[".afterEditAction"] = 1;
$tdataapp_profile[".closePopupAfterEdit"] = 1;
$tdataapp_profile[".afterEditActionDetTable"] = "";

$tdataapp_profile[".add"] = true;
$tdataapp_profile[".afterAddAction"] = 1;
$tdataapp_profile[".closePopupAfterAdd"] = 1;
$tdataapp_profile[".afterAddActionDetTable"] = "";

$tdataapp_profile[".list"] = true;

$tdataapp_profile[".view"] = true;

$tdataapp_profile[".import"] = true;

$tdataapp_profile[".exportTo"] = true;

$tdataapp_profile[".printFriendly"] = true;

$tdataapp_profile[".delete"] = true;

$tdataapp_profile[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataapp_profile[".searchSaving"] = false;
//

$tdataapp_profile[".showSearchPanel"] = true;
		$tdataapp_profile[".flexibleSearch"] = true;

$tdataapp_profile[".isUseAjaxSuggest"] = true;

$tdataapp_profile[".rowHighlite"] = true;



$tdataapp_profile[".addPageEvents"] = false;

// use timepicker for search panel
$tdataapp_profile[".isUseTimeForSearch"] = false;



$tdataapp_profile[".badgeColor"] = "778899";


$tdataapp_profile[".allSearchFields"] = array();
$tdataapp_profile[".filterFields"] = array();
$tdataapp_profile[".requiredSearchFields"] = array();

$tdataapp_profile[".allSearchFields"][] = "id";
	$tdataapp_profile[".allSearchFields"][] = "password";
	$tdataapp_profile[".allSearchFields"][] = "username";
	

$tdataapp_profile[".googleLikeFields"] = array();
$tdataapp_profile[".googleLikeFields"][] = "id";
$tdataapp_profile[".googleLikeFields"][] = "password";
$tdataapp_profile[".googleLikeFields"][] = "username";


$tdataapp_profile[".advSearchFields"] = array();
$tdataapp_profile[".advSearchFields"][] = "id";
$tdataapp_profile[".advSearchFields"][] = "password";
$tdataapp_profile[".advSearchFields"][] = "username";

$tdataapp_profile[".tableType"] = "list";

$tdataapp_profile[".printerPageOrientation"] = 0;
$tdataapp_profile[".nPrinterPageScale"] = 100;

$tdataapp_profile[".nPrinterSplitRecords"] = 40;

$tdataapp_profile[".nPrinterPDFSplitRecords"] = 40;



$tdataapp_profile[".geocodingEnabled"] = false;





$tdataapp_profile[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataapp_profile[".pageSize"] = 20;

$tdataapp_profile[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataapp_profile[".strOrderBy"] = $tstrOrderBy;

$tdataapp_profile[".orderindexes"] = array();

$tdataapp_profile[".sqlHead"] = "SELECT \"id\",  	\"password\",  	\"username\"";
$tdataapp_profile[".sqlFrom"] = "FROM \"app\".\"profile\"";
$tdataapp_profile[".sqlWhereExpr"] = "";
$tdataapp_profile[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataapp_profile[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataapp_profile[".arrGroupsPerPage"] = $arrGPP;

$tdataapp_profile[".highlightSearchResults"] = true;

$tableKeysapp_profile = array();
$tableKeysapp_profile[] = "id";
$tdataapp_profile[".Keys"] = $tableKeysapp_profile;

$tdataapp_profile[".listFields"] = array();
$tdataapp_profile[".listFields"][] = "id";
$tdataapp_profile[".listFields"][] = "password";
$tdataapp_profile[".listFields"][] = "username";

$tdataapp_profile[".hideMobileList"] = array();


$tdataapp_profile[".viewFields"] = array();
$tdataapp_profile[".viewFields"][] = "id";
$tdataapp_profile[".viewFields"][] = "password";
$tdataapp_profile[".viewFields"][] = "username";

$tdataapp_profile[".addFields"] = array();
$tdataapp_profile[".addFields"][] = "id";
$tdataapp_profile[".addFields"][] = "password";
$tdataapp_profile[".addFields"][] = "username";

$tdataapp_profile[".masterListFields"] = array();
$tdataapp_profile[".masterListFields"][] = "id";
$tdataapp_profile[".masterListFields"][] = "password";
$tdataapp_profile[".masterListFields"][] = "username";

$tdataapp_profile[".inlineAddFields"] = array();
$tdataapp_profile[".inlineAddFields"][] = "id";
$tdataapp_profile[".inlineAddFields"][] = "password";
$tdataapp_profile[".inlineAddFields"][] = "username";

$tdataapp_profile[".editFields"] = array();
$tdataapp_profile[".editFields"][] = "id";
$tdataapp_profile[".editFields"][] = "password";
$tdataapp_profile[".editFields"][] = "username";

$tdataapp_profile[".inlineEditFields"] = array();
$tdataapp_profile[".inlineEditFields"][] = "id";
$tdataapp_profile[".inlineEditFields"][] = "password";
$tdataapp_profile[".inlineEditFields"][] = "username";

$tdataapp_profile[".exportFields"] = array();
$tdataapp_profile[".exportFields"][] = "id";
$tdataapp_profile[".exportFields"][] = "password";
$tdataapp_profile[".exportFields"][] = "username";

$tdataapp_profile[".importFields"] = array();
$tdataapp_profile[".importFields"][] = "id";
$tdataapp_profile[".importFields"][] = "password";
$tdataapp_profile[".importFields"][] = "username";

$tdataapp_profile[".printFields"] = array();
$tdataapp_profile[".printFields"][] = "id";
$tdataapp_profile[".printFields"][] = "password";
$tdataapp_profile[".printFields"][] = "username";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "app.profile";
	$fdata["Label"] = GetFieldLabel("app_profile","id");
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




	$tdataapp_profile["id"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "app.profile";
	$fdata["Label"] = GetFieldLabel("app_profile","password");
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

		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"password\"";

	
	
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




	$tdataapp_profile["password"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "app.profile";
	$fdata["Label"] = GetFieldLabel("app_profile","username");
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

		$fdata["strField"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"username\"";

	
	
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




	$tdataapp_profile["username"] = $fdata;


$tables_data["app.profile"]=&$tdataapp_profile;
$field_labels["app_profile"] = &$fieldLabelsapp_profile;
$fieldToolTips["app_profile"] = &$fieldToolTipsapp_profile;
$page_titles["app_profile"] = &$pageTitlesapp_profile;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["app.profile"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["app.profile"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_app_profile()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"id\",  	\"password\",  	\"username\"";
$proto0["m_strFrom"] = "FROM \"app\".\"profile\"";
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
	"m_strTable" => "app.profile",
	"m_srcTableName" => "app.profile"
));

$proto6["m_sql"] = "\"id\"";
$proto6["m_srcTableName"] = "app.profile";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "app.profile",
	"m_srcTableName" => "app.profile"
));

$proto8["m_sql"] = "\"password\"";
$proto8["m_srcTableName"] = "app.profile";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "app.profile",
	"m_srcTableName" => "app.profile"
));

$proto10["m_sql"] = "\"username\"";
$proto10["m_srcTableName"] = "app.profile";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "app.profile";
$proto13["m_srcTableName"] = "app.profile";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "password";
$proto13["m_columns"][] = "username";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "\"app\".\"profile\"";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "app.profile";
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
$proto0["m_srcTableName"]="app.profile";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_app_profile = createSqlQuery_app_profile();


	
		;

			

$tdataapp_profile[".sqlquery"] = $queryData_app_profile;

$tableEvents["app.profile"] = new eventsBase;
$tdataapp_profile[".hasEvents"] = false;

?>