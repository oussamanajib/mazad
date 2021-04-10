<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head><body>
<?
//جلب ملف الاتصال بقاعدة البيانات
     include("../../site.inc.php");
// تنفيذ فانكشن الاتصال الموحوده بالملف  السابق الذى تم جلبه
   db_login();

// تنفيذ أمر حذف المقال من جدول الاخبار 
$query = "DELETE FROM news WHERE id = '$id'";
$result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());

// رسالة تأكيد الحذف
echo "<font size=-1>تم الحذف بنجاح <a href=list.php>عودة لقائمة المقالات</a>.</font>";

    
?></body></html>