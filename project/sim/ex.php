<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="jquery.tabledit.js"></script>

</head>

<body>


<script>
$('#my-table').Tabledit({

columns: {
  identifier: [0, 'id'],                    
  editable: [[1, 'First Name'], [2, 'Last Name']]
}

});



</script>
</body>
</html>
