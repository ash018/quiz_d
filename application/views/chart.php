<?php
        //echo '<pre/>';print_r($row_q1);exit();
		switch ($row_q1['result'])
		{
			case 'a':
			$Query = "হ্যাঁ";
			break;
			case 'b':
			$Query = "না ";
			break;
		}
		$temp = array();
		$temp[] = "{label: "."'".$Query."'".", y: ".$row_q1['count_result']."}";
		$output_q1[] =  implode(', ', $temp) ;
        //echo implode(",\n", $output_q1);


        switch ($row_q2['result'])
        {
            case 'a':
                $Query = "খুবই ভাল";
                break;
            case 'b':
                $Query = "ভাল";
                break;
            case 'c':
                $Query = "মোটামুটি";
                break;
            case 'd':
                $Query = "খারাপ";
                break;
            case 'e':
                $Query = "খুবই খারাপ";
                break;
        }
        $temp = array();
        $temp[] = "{label: "."'".$Query."'".", y: ".$row_q2['count_result']."}";
        $output_q2[] =  implode(', ', $temp) ;


?>
<!DOCTYPE html>
<html>
<head>
    <title>:: DMS সফটওয়্যার Feedback ::</title>
    <meta xcharset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url();?>assets/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer_q1",
                {
                    animationEnabled: true,
                    title:{
                        text: "1. DMS সফটওয়্যার টি কি আপনার জন্য উপকারি ?"
                    },
                    data: [
                        {
                            type: "column", //change type to bar, line, area, pie, etc
                            dataPoints: [
                                <?php
                                echo implode(",\n", $output_q1);
                                ?>
                            ]
                        }
                    ]
                });

            chart.render();


            var chart = new CanvasJS.Chart("chartContainer_q2",
                {
                    animationEnabled: true,
                    title:{
                        text: "2. DMS সফটওয়্যার দেখে আপনার কেমন লাগছে?"
                    },
                    data: [
                        {
                            type: "column", //change type to bar, line, area, pie, etc
                            dataPoints: [
                                <?php
                                echo implode(",\n", $output_q2);
                                ?>
                            ]
                        }
                    ]
                });

            chart.render();


        }
    </script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/canvasjs.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div id="chartContainer_q1" style="height: 300px; width: 100%; margin-top:50px;"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div id="chartContainer_q2" style="height: 300px; width: 100%; margin-top:50px;"></div>
            </div>

        </div>
    </div>
</body>
</html>
