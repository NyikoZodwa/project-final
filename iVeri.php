<?php
session_start();
?>
<html>
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WSU :: Welcome</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/custom.css"/>

</head>
<center>
<br>
<BR>
Please fill in the following details<BR>
<BR>
<form METHOD="POST" ACTION="https://backoffice.iveri.co.za/Lite/Transactions/New/Authorise.aspx" id=aForm name=aForm>
    <p>&nbsp;</p>
    <table>
<!-- Direct -->
    <input type="hidden" id="Lite_Merchant_ApplicationID" name="Lite_Merchant_ApplicationID" value="Your Application Id">
    <input type="text" id="Lite_Order_Amount" name="Lite_Order_Amount" value="100">
    <input type="hidden" id="Lite_Order_Terminal" name="Lite_Order_Terminal" value="">
    <input type="hidden" id="Lite_Order_AuthorisationCode" name="Lite_Order_AuthorisationCode" value="">
    <input type="hidden" id="Lite_Order_BudgetPeriod" name="Lite_Order_BudgetPeriod" value="0">
    <input type="hidden" id="Lite_Website_TextColor" name="Lite_Website_TextColor" value="#ffffff">
    <input type="hidden" id="Lite_Website_BGColor" name="Lite_Website_BGColor" value="#86001B">
    <input type="hidden" id="Lite_AutoInvoice_Ext" name="Lite_AutoInvoice_Ext" value="AUT">
    <input type="hidden" id="Lite_On_Error_Resume_Next" name="Lite_On_Error_Resume_Next" value="true">

<!-- products -->
    <input type="hidden" id="Lite_Order_LineItems_Product_1" name="Lite_Order_LineItems_Product_1" value="Donation product#1">
    <input type="hidden" id="Lite_Order_LineItems_Quantity_1" name="Lite_Order_LineItems_Quantity_1" value="1">
    <input type="text" id="Lite_Order_LineItems_Amount_1" name="Lite_Order_LineItems_Amount_1" value="36">

    <input type="hidden" id="Lite_Order_LineItems_Product_2" name="Lite_Order_LineItems_Product_2" value="Donation product#2">
    <input type="hidden" id="Lite_Order_LineItems_Quantity_2" name="Lite_Order_LineItems_Quantity_2" value="2">
    <input type="hidden" id="Lite_Order_LineItems_Amount_2" name="Lite_Order_LineItems_Amount_2" value="32">

		<input type="hidden" name="Lite_Website_Successful_url" value="http://localhost/compumaniacs/result.php?Result=Success" /> <!-- NEED TO BE CHANGED -->
		<input type="hidden" name="Lite_Website_Fail_url" value="http://localhost/compumaniacs/result.php?Result=Fail" /> <!-- NEED TO BE CHANGED -->
		<input type="hidden" name="Lite_Website_TryLater_url" value="http://localhost/compumaniacs/result.php?Result=TryLater" /> <!-- NEED TO BE CHANGED -->
		<input type="hidden" name="Lite_Website_Error_url" value="http://localhost/compumaniacs/result.php?Result=Error" /> <!-- NEED TO BE CHANGED -->

<!-- Ecml start-->

    <!-- ShipTo -->
    <input type="hidden" id="Ecom_ShipTo_Postal_Name_Prefix" name="Ecom_ShipTo_Postal_Name_Prefix" value="NWJ">
    <input type="hidden" id="Ecom_ShipTo_Postal_Name_First" name="Ecom_ShipTo_Postal_Name_First" value="NEWTON">
    <input type="hidden" id="Ecom_ShipTo_Postal_Name_Middle" name="Ecom_ShipTo_Postal_Name_Middle" value="">
    <input type="hidden" id="Ecom_ShipTo_Postal_Name_Last" name="Ecom_ShipTo_Postal_Name_Last" value="LIGRANGE">
    <input type="hidden" id="Ecom_ShipTo_Postal_Name_Suffix" name="Ecom_ShipTo_Postal_Name_Suffix" value="">
    <input type="hidden" id="Ecom_ShipTo_Postal_Street_Line1" name="Ecom_ShipTo_Postal_Street_Line1" value="">
    <input type="hidden" id="Ecom_ShipTo_Postal_Street_Line2" name="Ecom_ShipTo_Postal_Street_Line2" value="">
    <input type="hidden" id="Ecom_ShipTo_Postal_Street_Line3" name="Ecom_ShipTo_Postal_Street_Line3" value="">
    <input type="hidden" id="Ecom_ShipTo_Postal_City" name="Ecom_ShipTo_Postal_City" value="">
    <input type="hidden" id="Ecom_ShipTo_Postal_StateProv" name="Ecom_ShipTo_Postal_StateProv" value="">
    <input type="hidden" id="Ecom_ShipTo_Postal_PostalCode" name="Ecom_ShipTo_Postal_PostalCode" value="">
    <input type="hidden" id="Ecom_ShipTo_Postal_CountryCode" name="Ecom_ShipTo_Postal_CountryCode" value="">
    <input type="hidden" id="Ecom_ShipTo_Telecom_Phone_Number" name="Ecom_ShipTo_Telecom_Phone_Number" value="">
    <input type="hidden" id="Ecom_ShipTo_Online_Email" name="Ecom_ShipTo_Online_Email" value="">

    <!-- BillTo -->
        <tr>
            <td>
                Name:
            </td>
            <td>
<SELECT id=Ecom_BillTo_Postal_Name_Prefix name=Ecom_BillTo_Postal_Name_Prefix>
    <option value="Mr." >Mr.</option>
    <option value="Mrs." >Mrs.</option>
    <option value="Miss." >Miss.</option>
    <option value="Ms." >Ms.</option>
    <option value="Prof." >Prof.</option>
    <option value="Dr." >Dr.</option>
    <option value="Sir." >Sir.</option>
</SELECT>
    <input type="text" id="Ecom_BillTo_Postal_Name_First" name="Ecom_BillTo_Postal_Name_First" value="John" size=8>
    <input type="hidden" id="Ecom_BillTo_Postal_Name_Middle" name="Ecom_BillTo_Postal_Name_Middle" value="">
    <input type="text" id="Ecom_BillTo_Postal_Name_Last" name="Ecom_BillTo_Postal_Name_Last" value="Doe" size=10>
            </td>
        </tr>    
        
    <input type="hidden" id="Ecom_BillTo_Postal_Name_Suffix" name="Ecom_BillTo_Postal_Name_Suffix" value="iVeri">
    <input type="hidden" id="Ecom_BillTo_Postal_Street_Line1" name="Ecom_BillTo_Postal_Street_Line1" value="">
    <input type="hidden" id="Ecom_BillTo_Postal_Street_Line2" name="Ecom_BillTo_Postal_Street_Line2" value="">
    <input type="hidden" id="Ecom_BillTo_Postal_Street_Line3" name="Ecom_BillTo_Postal_Street_Line3" value="">
    <input type="hidden" id="Ecom_BillTo_Postal_City" name="Ecom_BillTo_Postal_City" value="">
    <input type="hidden" id="Ecom_BillTo_Postal_StateProv" name="Ecom_BillTo_Postal_StateProv" value="">
    <input type="hidden" id="Ecom_BillTo_Postal_PostalCode" name="Ecom_BillTo_Postal_PostalCode" value="">
    <input type="hidden" id="Ecom_BillTo_Postal_CountryCode" name="Ecom_BillTo_Postal_CountryCode" value="">
    <input type="hidden" id="Ecom_BillTo_Telecom_Phone_Number" name="Ecom_BillTo_Telecom_Phone_Number" value="4457500">
        <tr>
            <td height="31">
                Email:
            </td>
            <td>
                <input type="text" id="Ecom_BillTo_Online_Email" name="Ecom_BillTo_Online_Email" value="" size=20>
            </td>
        </tr>    

    <!-- Payment -->
    <input type="hidden" id="Ecom_Payment_Card_Name" name="Ecom_Payment_Card_Name" value="">
    <input type="hidden" id="Ecom_Payment_Card_Type" name="Ecom_Payment_Card_Type" value="">


        <tr>
            <td>
                Credit Card    Number:
            </td>
            <td>
                <input TYPE="text" ID="Ecom_Payment_Card_Number" NAME="Ecom_Payment_Card_Number" VALUE="424242424242424
2

" size="20">
                <small>Please type your credit card number without any spaces or hyphens</small>
            </td>
        </tr>
        <tr>
            <td>
                CVV:
            </td>
            <td>
              <input type="text" id="Ecom_Payment_Card_Verification" name="Ecom_Payment_Card_Verification" value=""  size="6">
              <input type="hidden" id="Ecom_Payment_Card_Protocols" name="Ecom_Payment_Card_Protocols" value="iVeri">
            </td>
        </tr>
        <tr>
            <td>
                Expiry Date:
            </td>
            <td>
                <input type="hidden" id="Ecom_Payment_Card_StartDate_Day" name="Ecom_Payment_Card_StartDate_Day" value="00">
                <input type="hidden" id="Ecom_Payment_Card_StartDate_Month" name="Ecom_Payment_Card_StartDate_Month" value="07" size=2>
                <input type="hidden" id="Ecom_Payment_Card_StartDate_Year" name="Ecom_Payment_Card_StartDate_Year" value="1999" size=4><br>
                <input type="hidden" id="Ecom_Payment_Card_ExpDate_Day" name="Ecom_Payment_Card_ExpDate_Day" value="00">
                <input type="text" id="Ecom_Payment_Card_ExpDate_Month" name="Ecom_Payment_Card_ExpDate_Month" value="03" size=2>
                <input type="text" id="Ecom_Payment_Card_ExpDate_Year" name="Ecom_Payment_Card_ExpDate_Year" value="2018" size=4><br>
            </td>
        </tr>

        <tr>
            <td>
                Invoice:
            </td>
            <td>
                <input TYPE="text" ID="Ecom_ConsumerOrderID" NAME="Ecom_ConsumerOrderID" VALUE="AUTOGENERATE" size="20">
                <input type="hidden" name="LITE_CONSUMERORDERID_PREFIX" id="LITE_CONSUMERORDERID_PREFIX" value="PPP"/>
            </td>
        </tr>

    <input type="hidden" id="Ecom_SchemaVersion" name="Ecom_SchemaVersion" value="">
    <input type="hidden" id="Ecom_TransactionComplete" name="Ecom_TransactionComplete" value="False">
    <input type="hidden" id="Lite_Payment_Card_PreAuthMode" name="Lite_Payment_Card_PreAuthMode" value="false">

    <!-- Test Return Fields -->
    <input type="hidden" id="TestField1" name="TestField1" value="TestValue1">
    <input type="hidden" id="TestField2" name="TestField2" value="TestValue2">
    <input type="hidden" id="TestField3" name="TestField3" value="TestValue3">
    <input type="hidden" id="TestField4" name="TestField4" value="TestValue4">
    <input type="hidden" id="TestField5" name="TestField5" value="TestValue5">
    <input type="hidden" id="TestField6" name="TestField6" value="TestValue6">
    <input type="hidden" id="TestField7" name="TestField7" value="TestValue7">
<!-- Ecml end-->
        <tr>
            <td><input TYPE="SUBMIT" NAME="Authorise" VALUE="Authorise"> </td>
            <td><input TYPE="RESET" NAME="Clear" VALUE="Clear"> </td>
        </tr>
    </table>
</center>
<p>&nbsp;</p>
<p><strong><a href="index.php">Home</a></strong></p>
</form>
</body>
</html>
