<html>
    <head>
        <link href="<?php echo $localurl.'assets/plugins/boostrapv3/css/bootstrap.min.css' ?>" rel="stylesheet" type="text/css"/>
        <!--link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css"-->
        <link rel="stylesheet" type="text/css" href="<?php echo $localurl.'assets/plugins/zabuto-calendar/css/zabuto_calendar.min.css' ?>">
        <!--link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet"-->
        <link href="<?php echo $localurl.'assets/plugins/font-awesome/css/font-awesome.css' ?>" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <span style="font-family: Monaco, Menlo, Consolas, 'Courier New', monospace; font-size: 13px; line-height: 18px; white-space: pre-wrap; background-color: rgb(255, 255, 255);">
            <div id="calendario_demo" style="width:62%"></div>
        </span>
        
        <!--script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script-->
        <script src="<?php echo $localurl.'assets/plugins/jquery-1.8.3.min.js' ?>" type="text/javascript"></script>
        <!--script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script-->
        <script src="<?php echo $localurl.'assets/plugins/bootstrap/js/bootstrap.min.js' ?>" type="text/javascript"></script>
        <script src="<?php echo $localurl.'assets/plugins/zabuto-calendar/js/zabuto_calendar.min.js' ?>"></script>
        <script type="application/javascript">
            $(document).ready(function () {
                $("#calendario_demo").zabuto_calendar({
                    //display settings
                    cell_border: true,
                    today: true,
                    show_days: true,
                    weekstartson: 0,
                    nav_icon: {
                      prev: '<i class="fa fa-chevron-circle-left"></i>',
                      next: '<i class="fa fa-chevron-circle-right"></i>'
                    },
                    //legend
                    legend: [
                      {type: "text", label: "Special event", badge: "00"},
                      {type: "block", label: "Regular event", classname: "purple"},
                      {type: "spacer"},
                      {type: "text", label: "Bad"},
                      {type: "list", list: ["grade-1", "grade-2", "grade-3", "grade-4"]},
                      {type: "text", label: "Good"}
                    ],
                    //show data
                    ajax: {
                      url: "<?php echo $localurl.'application/views/show_data.php?grade=1' ?>",
                      modal: true
                    }
                });
            });
        </script>
    </body>
</html>