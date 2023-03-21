<html>


<head>

<title>Belajar Online Statistik dan Pemrograman</title>

<link rel="stylesheet" href="file_css.css">

</head>

<body>


<div class="topnav">

    <a href="index.php" >Tentang</a>
    <a href="buku.php">Buku</a>
    <a href="artikel nasional.php">Artikel Jurnal Nasional</a>
    <a href="artikel internasional.php">Artikel Jurnal Internasional</a>
    <a href="hak cipta.php">Hak Cipta</a>
    <a href="seminar dan pelatihan.php">Seminar & Pelatihan</a>
    <a href="#about">Aplikasi R</a>
    <a href="#about">Aplikasi Python</a>
    <a href="belajar online statistik dan pemrograman.php">Belajar Online Statistik dan Pemrograman</a>


  </div>

  
  
  <p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
        <font size = 7>

 
        <center>

  
        Belajar Online Statistik dan Pemrograman

</center>

        </font>
</font>
</p>	





<center>
<table width = 600 border = 0>
    <tr>
        <td width = 300>

  <center><img src = "gambar/ugi.jpg" width="300"></center>


</td>


<td width = 300>



<center>



<center>

<font style="color:#1e90ff; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">

<font size = 4><b><a href = "https://www.youtube.com/channel/UCF2nM1fSO89f7IYov41mHQg" target = "_blank"><font color = "#1e90ff">My Youtube Channel (STATKOMAT)</font></a></b></font>
</font>
</center>


	
<?php

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, 'https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCF2nM1fSO89f7IYov41mHQg&key=AIzaSyCkarGlzwNf7UTmOH4SGVw1YjHqMPo5wsE');

curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);


$result = curl_exec($curl);


curl_close($curl);


$result = json_decode($result, true);


$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];

$nama_channel = $result['items'][0]['snippet']['title'];

$jumlah_subscribe = $result['items'][0]['statistics']['subscriberCount'];

$jumlah_video = $result['items'][0]['statistics']['videoCount'];

$jumlah_views = $result['items'][0]['statistics']['viewCount'];


?>


 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "", { role: "style" } ],
        ["Subscriber", <?php echo json_encode($jumlah_subscribe, JSON_NUMERIC_CHECK); ?>, "#7CFC00"],
		["Video", <?php echo json_encode($jumlah_video, JSON_NUMERIC_CHECK); ?>, "#ADFF2F"],
		["Views", <?php echo json_encode($jumlah_views, JSON_NUMERIC_CHECK); ?>, "#00FF7F"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "My Youtube Channel: STATKOMAT",
        width: 300,
        height: 200,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values"></div>

</center>

</td>

</tr>


</table>
</center>








<br>
<br>



<center>

<table border = 0 width = 1250>



<tr>


<td width = 400 height = 500>

<center><img src = "gambar/cover buku/cover R.png" width="400"></center>




</td>


<td width = 25 height = 500>



</td>


<td width = 400 height = 500>

<center><img src = "gambar/cover buku/streamlit.png" width="400"></center>


</td>


<td width = 25 height = 500>



</td>



<td width = 400 height = 500>

<center><img src = "gambar/cover buku/pengantar statistika 2.png" width="400"></center>


</td>


</tr>





</table>



</center>























<br>
<br>

<br>
<br>


<center>

<table border = 0 width = 1250>



<tr>


<td width = 400 height = 500>

<center><img src = "gambar/cover buku/pengantar probabilitas.png" width="400"></center>




</td>


<td width = 25 height = 500>



</td>


<td width = 400 height = 500>

<center><img src = "gambar/cover buku/kalkulus.png" width="400" height = 500></center>



</td>


<td width = 25 height = 500>



</td>



<td width = 400 height = 500>

<center><img src = "gambar/cover buku/aljabar linier.png" width="400" height = 500></center>



</td>


</tr>





</table>



</center>


























<br><br><br><br><br><br><br><br><br><br><br><br>






















</body>






</html>