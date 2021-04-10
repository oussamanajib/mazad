<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head><body>
<?
//جلب ملف الاتصال بقاعدة البيانات
     include("../../site.inc.php");

//فى حالة عدم الضغط على زرالتحديث سوف يتم الاتصال بقاعدة البيانات
if (!$submit)
{
    db_login();

//اختيار كافة البيانات من جدول الاخبار
    $query = "SELECT * FROM news WHERE id = '$id'";
    $result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());
    
//اذا تم ايجاد مقالات مخزنه 
    if (mysql_num_rows($result) > 0)
    {
        // حول هذه البيانات المخزنه فى هذا المتغير
        $send = mysql_fetch_object($result);

        //الخطوه القادمه لعمل الفورم بداخله البيانات اللى سيتم جلبها من جدول الاخبار
?>
<!-- السابق لجلب البيانات من الجدول لاحظ بنفسك اوامر البى اتش بى وكيف سندخل للمتغير-->
<div style="direction:rtl;">

<h3>تعديل المقال</h3>
<form action="<? echo $PHP_SELF; ?>" method="POST">
<input type="hidden" name="id"  value="<? echo $send->id; ?>">

عنوان المقال:<br />
<input size="50" maxlength="250" type="text" name="title" value="<? echo $send->title; ?>"><br />

نص المقال:<br />
<textarea name="content" cols="40" rows="10"><? echo $send->content; ?></textarea><br />
كاتب المقال:<br />

<input size="50" maxlength="250" type="text" name="author" value="<? echo $send->author; ?>"><br />

    <input type="Submit" name="submit" value="تحديث">
</form>

</div>

<?
    }
    // اذا لم يتم جلب اية بيانات 
    
    else {
        echo "<font size=-1>هذا المقال غير موجود</font>";
    }
}

// سيتم تحديث البيانات فى الاوامر القادمه 
else
{



    $errorList = array();
    $count = 0;
    
    
    if (!$title) { $errorList[$count] = "Invalid entry: title"; $count++; }
    
    if (!$content) { $errorList[$count] = "Invalid entry: content"; $count++; }

        if (!$author) { $errorList[$count] = "Invalid entry: author"; $count++; }

    if (sizeof($errorList) == 0) {
        db_login();

        // تنفيذ خطوة تحديث بيانات المقال المخزنه بالقاعده بعد التحقق بالاوامر السابقة من خلو المقال من اية اخطاء
        $query = "UPDATE news SET title = '$title', content = '$content', author = '$author' WHERE id = '$id'";
        $result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());

        // رسالة تأكيد التحديث للبيانات
        echo "<font size=-1>تم تحديث بيانات المقال<a target='_top' href=../index.php>عوده للرئيسية </a>.</font>";
        
    } else {
        // errors occurred
        // print as list
        echo "<font size=-1>لقد حدث خطأ غير متوقع <br>";
        echo "<ul>";
        for ($x=0; $x<sizeof($errorList); $x++)
        {
            echo "<li>$errorList[$x]";
        }
        echo "</ul></font>";
    }
}

?>
</body></html>