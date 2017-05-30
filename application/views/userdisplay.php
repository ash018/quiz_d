<html>
<head>
	<title>User Details</title>
    <meta charset="UTF-8">

    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/normalize.css"/>
    <!--link rel="stylesheet" href="assets/css/normalize.css"-->
    <!--link rel="stylesheet" href="assets/css/style.css"-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--link rel="stylesheet" href="/resources/demos/style.css"-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.table2excel.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/tableExport.js"> </script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.base64.js"></script>

    <script>
        $('#btn').click(function(){
            $('.table').table2excel({
                exclude: ".noExl",
                name:"User",
                filename:"UserDetails"
            });
        });
    </script>

</head>
<body>

<script>

    function fnExcelReport() {
        var tab_text = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';
        tab_text = tab_text + '<head><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet>';

        tab_text = tab_text + '<x:Name>Test Sheet</x:Name>';

        tab_text = tab_text + '<x:WorksheetOptions><x:Panes></x:Panes></x:WorksheetOptions></x:ExcelWorksheet>';
        tab_text = tab_text + '</x:ExcelWorksheets></x:ExcelWorkbook></xml></head><body>';

        tab_text = tab_text + "<table border='1px'>";
        tab_text = tab_text + $('#myTable').html();
        tab_text = tab_text + '</table></body></html>';

        var data_type = 'data:application/vnd.ms-excel';

        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
            if (window.navigator.msSaveBlob) {
                var blob = new Blob([tab_text], {
                    type: "application/csv;charset=utf-8;"
                });
                navigator.msSaveBlob(blob, 'Test file.xls');
            }
        } else {
            $('#test').attr('href', data_type + ', ' + encodeURIComponent(tab_text));
            $('#test').attr('download', 'UserDetails.xls');
        }

    }

</script>
<div class="container">
	<p>HelloHelloHello</p>
	<a href="#" class="btn btn-primary" id="test" onClick="javascript:fnExcelReport();">Export to Excel</a>
	<!--<button id="test" onClick="javascript:fnExcelReport();">ETE</button>-->
	<table border="1" class="table table-bordered table-striped" id="myTable">
		<thead>
			<tr class="noExl">
				<th>User Name</th>
				<th>User Email</th>
				<th>Address</th>
				<th>Designation</th>
				<th>Contact</th>
				<th>District</th>
				<th>Date of Birth</th>
			</tr>
		</thead>
		<tbody>
		<?php
		for($i=0; $i<sizeof($users); $i++){
		?>
			<tr>
				<td><?php echo($users[$i]->user_name);?> </td>
				<td><?php echo($users[$i]->user_email);?></td>
				<td><?php echo($users[$i]->Address);?></td>
				<td><?php echo($users[$i]->designation);?></td>
				<td><?php echo($users[$i]->contact);?></td>
				<td><?php echo($users[$i]->district);?></td>
				<td><?php echo($users[$i]->DateOfBirth);?></td>
			</tr>				
		<?php		
		}	
		?>
		</tbody>
	</table>
</div>




<?php 
//print_r ($data);
?>





</body>
</html>