<html>


<head>

<title>Seminar & Pelatihan</title>

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
    <a href="#about">Kompetisi</a>


  </div>

  
  
  <p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
        <font size = 7>

 
        <center>

  
        Seminar dan Pelatihan

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













<br><br>


























<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Kegiatan Memberi Pelatihan Pengolahan Data Menggunakan Aplikasi SmartPLS di Universitas Medan Area (UMA), pada 24 Januari 2023</font><br>
      Tahun: <font color = "grey">2023</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2023/1/1.jpg" width="700"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2023/1/2.jpg" width="400"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2023/1/3.jpg" width="400"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2023/1/4.jpg" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2023/1/5.jpg" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2023/1/6.jpg" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2023/1/7.jpg" width="400"></center>
<br>


<br>

<br>



</font>
</font>
</p>






























<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Kegiatan Kuliah Tamu: Riset dan Statistik Terapan Structural Equation Modeling, yang Diselenggarakan oleh Universitas Indonesia pada 16 Desember 2022</font><br>
      Tahun: <font color = "grey">2022</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2022/1/1.jpg" width="500"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2022/1/2.jpg" width="500"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2022/1/3.jpg" width="600"></center>

<br>


<br>

<br>



</font>
</font>
</p>





















<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Narasumber dalam Kegiatan Kuliah Tamu dengan Teman "Smart Partial Least Squares (PLS) pada 21 November 2022, yang Diselenggarakan oleh Universitas Gadjah Mada</font><br>
      Tahun: <font color = "grey">2022</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2022/2/1.jpg" width="500"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2022/2/2.jpg" width="500"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2022/2/3.jpg" width="600"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2022/2/4.jpg" width="600"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2022/2/5.jpg" width="600"></center>

<br>


<br>

<br>



</font>
</font>
</p>

























<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Pelatihan Olah Data Statistik yang Diselenggarakan oleh ebizmark pada 5-8 Desember 2022</font><br>
      Tahun: <font color = "grey">2022</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2022/3/1.jpg" width="700"></center>

<br>



<br>

<br>



</font>
</font>
</p>










<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Pelatihan Statistika Dasar dengan Software SPSS, yang Diselenggarakan oleh Himpunan Mahasiswa Matematika (HMM) Universitas Sumatera Utara (USU) pada 30 Juli 2022</font><br>
      Tahun: <font color = "grey">2022</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2022/4/1.jpg" width="700"></center>

<br>



<br>

<br>



</font>
</font>
</p>







<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Sosialisasi Penggunaan Software STATCAL yang Diselenggarakan oleh Politeknik Pertanian Negeri Samarinda, pada 26 Juli 2022</font><br>
      Tahun: <font color = "grey">2022</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2022/5/1.jpg" width="700"></center>

<br>



<br>

<br>



</font>
</font>
</p>

















<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Pelatihan Aplikasi SmartPLS yang Diselenggarakan oleh Universitas Trisakti pada 4 Juli 2022</font><br>
      Tahun: <font color = "grey">2022</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2022/6/1.jpg" width="700"></center>

<br>


<center><img src = "gambar/seminar dan pelatihan/2022/6/2.jpg" width="700"></center>

<br>


<br>

<br>



</font>
</font>
</p>




















<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Pelatihan Pengolahan Data Menggunakan Aplikasi SmartPLS, yang Diselenggarakan oleh Universitas Sriwijaya pada 30-31 Mei 2022</font><br>
      Tahun: <font color = "grey">2022</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2022/7/1.jpg" width="700"></center>

<br>


<center><img src = "gambar/seminar dan pelatihan/2022/7/2.jpg" width="700"></center>

<br>
<center><img src = "gambar/seminar dan pelatihan/2022/7/3.jpg" width="700"></center>

<br>
<center><img src = "gambar/seminar dan pelatihan/2022/7/4.jpg" width="700"></center>

<br>


<br>

<br>



</font>
</font>
</p>


















<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Kegiatan Memberi Pelatihan Singkat SPSS, yang Diselenggarakan oleh Himpunan Mahasiswa Statistika (HIMASTA), Universitas Sumatera Utara, pada 22 Oktober 2016</font><br>
      Tahun: <font color = "grey">2016</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2016/1/1.JPG" width="400"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2016/1/2.JPG" width="400"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2016/1/3.JPG" width="400"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2016/1/4.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2016/1/5.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2016/1/6.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2016/1/7.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2016/1/8.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2016/1/9.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2016/1/10.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2016/1/11.JPG" width="400"></center>
<br>

<br>

<br>



</font>
</font>
</p>


















<br>
<br><br>
















<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Kegiatan Memberi Seminar SPSS, yang Diselenggarakan oleh Himpunan Mahasiswa Statistika (HIMASTA), Universitas Sumatera Utara, pada 6 Juni 2015</font><br>
      Tahun: <font color = "grey">2015</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2015/1/1.JPG" width="400"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2015/1/2.JPG" width="400"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2015/1/3.JPG" width="400"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2015/1/4.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2015/1/5.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2015/1/6.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2015/1/7.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2015/1/8.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2015/1/9.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2015/1/10.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2015/1/11.JPG" width="400"></center>
<br>

<center><img src = "gambar/seminar dan pelatihan/2015/1/12.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2015/1/13.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2015/1/14.JPG" width="400"></center>
<br>

<br>

<br>



</font>
</font>
</p>










































  <br><br>

<br><br>








<br><br>

<br><br>


<br><br><br><br>



















<br><br><br><br><br><br><br><br><br><br><br><br>






















</body>






</html>