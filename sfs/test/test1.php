
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>


<body>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='name"+i+"' type='text' placeholder='Question Type' class='form-control input-md'  /> </td><td><input  name='mail"+i+"' type='text' placeholder='Category'  class='form-control input-md'></td><td><input  name='mobile"+i+"' type='text' placeholder='chapter'  class='form-control input-md'></td><td><input  name='mobile"+i+"' type='text' placeholder='comment'  class='form-control input-md'></td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});
</script>
<div class="container">
    <div class="row clearfix">
		<div class="col-md-12 column">
			<table class="table table-bordered table-hover" class="display" id="tab_logic">
				<thead>
					<tr >
						<th class="text-center">
							Qs.No.
						</th>
						<th class="text-center">Question Type</th>
						<th class="text-center">
							Category</th>
						<th class="text-center">Chapter</th>
                        <th class="text-center">Comment</th>
					</tr>
				</thead>
				<tbody>
					<tr id='addr0'>
						<td>
							1
						</td>
						<td>
						<input type="text" name='name0' id="aaa0" placeholder='Question Type' style="text-align:center" class="form-control"/>
						</td>
						<td>
						<input type="text" name='mail0' id="aaa1" placeholder='Category' class="form-control" style="text-align:center"/>
						</td>
						<td>
						<input type="text" name='mobile0' placeholder='Chapter' class="form-control" style="text-align:center"/>
						</td>
                        <td>
						<input type="text" name='mobile0' placeholder='Comment' class="form-control" style="text-align:center"/>
						</td>
					</tr>
                    <tr id='addr1'></tr>
				</tbody>
			</table>
		</div>
	</div>
	<a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
   <center> <input id="aa" type="button"  value="Show" /></center>
   
   
   <script>
   
   $(document).ready(function(e) {
	   var table = $('#tab_logic').DataTable();
    $('#aa').click(function(e) {
  /*    var table = document.getElementById('tableID'),
  cells = table.getElementsByTagName('td');

for (var i = 0, len = cells.length; i < len; i++) {
  cells[i].onclick = function() {
    console.log(this.innerHTML);
  };
}*/

/*var cells = Array.prototype.slice.call(document.getElementById("tab_logic").getElementsByTagName("td"));
for(var i in cells){
    console.log("My contents is \"" + cells[i].innerHTML + "\"");
}
*/
 var data = table.$('input, select').serialize();
        alert(
            "The following data would have been submitted to the server: \n\n"+
            data.substr( 0, 120 )+'...'
        );
        return false;

    });
});
   
   
   
   </script>


</div>
</body>
</html>
