<?php
	$conn=new mysqli("localhost","root","","primeworld");

	if(mysqli_connect_error())
	{
		die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
	}
	else
	{
		$male=0;
	   $female=0;
	   $other=0;
      $po=0;
      $neg=0;
      $pomale=0;
      $pofemale=0;
      $poother=0;
      $negmale=0;
      $negfemale=0;
      $negother=0;
      $in=0;
      $am=0;
      $aus=0;
      $sri=0;
      $jap=0;
      $ch=0;
	   $query="SELECT * FROM comments where show_id='$_SESSION[show_id]'";
	   $result=mysqli_query($conn,$query);
	   $user=mysqli_num_rows($result);
	   if($user!=0)
	   {
	     	while($data=mysqli_fetch_assoc($result))
	     	{
        		if($data['gender']=='male')
        		{
        			$male=$male+1;
        		}
        		if($data['gender']=='female')
        		{
        			$female=$female+1;
        		}
        		if($data['gender']=='other')
        		{
        			$other=$other+1;
        		}
            if($data['analysis']=='Positive')
            {
               $po=$po+1;
               if($data['gender']=='male')
               {
                  $pomale=$pomale+1;
               }
               if($data['gender']=='female')
               {
                  $pofemale=$pofemale+1;
               }
               if($data['gender']=='other')
               {
                  $poother=$poother+1;
               }
            }
            if($data['analysis']=='Negative')
            {
               $neg=$neg+1;
               if($data['gender']=='male')
               {
                  $negmale=$negmale+1;
               }
               if($data['gender']=='female')
               {
                  $negfemale=$negfemale+1;  
               }
               if($data['gender']=='other')
               {
                  $negother=$negother+1;
               }
            }
            if($data['location']=='India')
               $in=$in+1;
            if($data['location']=='America')
               $am=$am+1;
            if($data['location']=='China')
               $ch=$ch+1;
            if($data['location']=='Japan')
               $jap=$jap+1;
            if($data['location']=='Australia')
               $aus=$aus+1;
            if($data['location']=='Sri Lanka')
               $sri=$sri+1;
         }
      }
	
?>
      <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js">
      </script>
      <script type = "text/javascript">
         google.charts.load('current', {packages: ['corechart']});     
      </script>
   
      <div id="accordion">
         <div class="card" style="background-color: white; border:none; padding:0px 50px 0px 50px;">
             <div class="card-header" id="headingOne">
               <h5 class="mb-0">
                 <button class="btn btn">
                     Popularity Analysis
                 </button>
               </h5>
             </div>
             <div class="collapse show">
                  <div class="card-body">
                     <div id = "container" style = "width: 550px; height: 400px; float: left;"></div>
                     <div id = "container1" style = "width: 550px; height: 400px; float: right;"></div>
                     <div id = "container2" style = "width: 550px; height: 400px; float: left;"></div>
                     <div id = "container3" style = "width: 550px; height: 400px;  float: right;"></div>
                  </div> 
               </div>
            </div>
         </div>
      </div>   

      <script language = "JavaScript">
         function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Browser');
            data.addColumn('number', 'Percentage');
            data.addRows([
               ['Positive',<?php echo $po; ?>],
               ['Negative',<?php echo $neg; ?>]
            ]);
               
            var options = {
               'title':'Comments Feedback',
               'width':550,
               'height':400,
               is3D:true
            };

            var chart = new google.visualization.PieChart(document.getElementById('container'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);

         function drawChart1() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Browser');
            data.addColumn('number', 'Percentage');
            data.addRows([
               ['Male',<?php echo $male; ?>],
               ['Female',<?php echo $female; ?>],
               ['Other',<?php echo $other; ?>]
            ]);
            var options = {
               'title':'Gender',
               'width':550,
               'height':400,
               is3D:true
            };

            var chart = new google.visualization.PieChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart1);         
         
         function drawChart2() {
            var data = google.visualization.arrayToDataTable([
               ['Comment', 'male', 'female','other'],
               ['Positive',<?php echo $pomale; ?>,<?php echo $pofemale; ?>,<?php echo $poother; ?>],
               ['Negative',<?php echo $negmale; ?>,<?php echo $negfemale; ?>,<?php echo $negother; ?>],
            ]);

            var options = {title: 'Comments Feedback vs Gender'};  
            var chart = new google.visualization.BarChart(document.getElementById('container2'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart2);

         function drawChart3() {
            var data = google.visualization.arrayToDataTable([
               ['location', 'Feedback'],
               ['India',<?php echo $in; ?>],
               ['America',<?php echo $am; ?>],
               ['China',<?php echo $ch; ?>],
               ['Japan',<?php echo $jap; ?>],
               ['Australia',<?php echo $aus; ?>],
               ['Sri Lanka',<?php echo $sri; ?>]
            ]);

            var options = {title: 'Country Details'};  
            var chart = new google.visualization.BarChart(document.getElementById('container3'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart3);

      </script>
<?php
   }
?>