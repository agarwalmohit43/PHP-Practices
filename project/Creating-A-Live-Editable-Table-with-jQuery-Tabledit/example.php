<?php

// Basic example of PHP script to handle with jQuery-Tabledit plug-in.
// Note that is just an example. Should take precautions such as filtering the input data.

header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);

$mysqli = new mysqli('localhost', 'root', 'loverboy43', 'ajax_table');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}

if ($input['action'] === 'edit') {
    $mysqli->query("UPDATE info SET cat='" . $input['cat']);
} else if ($input['action'] === 'delete') {
    $mysqli->query("UPDATE users SET deleted=1 WHERE id='" . $input['id'] . "'");
} else if ($input['action'] === 'restore') {
    $mysqli->query("UPDATE users SET deleted=0 WHERE id='" . $input['id'] . "'");
}

mysqli_close($mysqli);

echo json_encode($input);
?>

<html>
<head>
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
$('#my-table').Tabledit({

// link to server script
// e.g. 'ajax.php'
url: window.location.href,

// class for form inputs
inputClass: 'form-control input-sm',

// // class for toolbar
toolbarClass: 'btn-toolbar',

// class for buttons group
groupClass: 'btn-group btn-group-sm',

// class for row when ajax request fails
dangerClass: 'danger',

// class for row when save changes
warningClass: 'warning',

// class for row when is removed
mutedClass: 'text-muted',

// trigger to change for edit mode.
// e.g. 'dblclick'
eventType: 'click',

// change the name of attribute in td element for the row identifier
rowIdentifier: 'id',

// activate focus on first input of a row when click in save button
autoFocus: true,

// hide the column that has the identifier
hideIdentifier: false,

// activate edit button instead of spreadsheet style
editButton: true,

// activate delete button
deleteButton: true,

// activate save button when click on edit button
saveButton: true,

// activate restore button to undo delete action
restoreButton: true,

// custom action buttons
buttons: {
  edit: {
    class: 'btn btn-sm btn-default',
    html: '<span class="glyphicon glyphicon-pencil"></span>',
    action: 'edit'
  },
  delete: {
    class: 'btn btn-sm btn-default',
    html: '<span class="glyphicon glyphicon-trash"></span>',
    action: 'delete'
  },
  save: {
    class: 'btn btn-sm btn-success',
    html: 'Save'
  },
  restore: {
    class: 'btn btn-sm btn-warning',
    html: 'Restore',
    action: 'restore'
  },
  confirm: {
    class: 'btn btn-sm btn-danger',
    html: 'Confirm'
  }
},

// executed after draw the structure
onDraw: function() { return; },

// executed when the ajax request is completed
// onSuccess(data, textStatus, jqXHR)
onSuccess: function() { return; },

// executed when occurred an error on ajax request
// onFail(jqXHR, textStatus, errorThrown)
onFail: function() { return; },

// executed whenever there is an ajax request
onAlways: function() { return; },

// executed before the ajax request
// onAjax(action, serialize)
onAjax: function() { return; }

});


</script>
</body>
</html>
