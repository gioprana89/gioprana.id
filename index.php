<html>


<head>

<title>Home</title>

<link rel="stylesheet" href="file_css.css">

</head>






<style>

a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

a:active {
  text-decoration: underline;
}




</style>









<body>


<div class="topnav">

    <a class="active" href="#home">Tentang</a>
    <a href="buku.php">Buku</a>
    <a href="artikel nasional.php">Artikel Jurnal Nasional</a>
    <a href="artikel internasional.php">Artikel Jurnal Internasional</a>
    <a href="hak cipta.php">Hak Cipta</a>
    <a href="seminar dan pelatihan.php">Seminar & Pelatihan</a>
    <a href="#about">Aplikasi R</a>
    <a href="#about">Aplikasi Python</a>
    <a href="belajar online statistik dan pemrograman.php">Belajar Online Statistik dan Pemrograman</a>


  </div>

  <br>
  <br>

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


<td>



<center><img src = "gambar/alkhawarizmi.jpg" width="500"></center>







</td>



</tr>


</table>
</center>


<center><img src = "gambar/statkomat.png" width="1200"></center>



<BR>

<b>
<center>

<a href = "https://statcal.com/" target = "_blank"><font color = "red" size = 4>STATCAL</font></a> | 
<a href = "https://statkomat.com/" target = "_blank"><font color = "red" size = 4>STATKOMAT</font></a> | 
<a href = "share-your-shiny-app.id" target = "_blank"><font color = "red" size = 4>SHARE-YOUR-SHINY-APP</font></a> | 
<a href = "https://pranaugi.com/" target = "_blank"><font color = "red" size = 4>PRANAUGI</font></a> | 
<a href = "https://gioprana89-indomp-main-pyxdb9.streamlit.app/" target = "_blank"><font color = "red" size = 4>DATA KINERJA KEUANGAN</font></a> | 
<a href = "http://pranaugi-belajar-pemrograman.com/" target = "_blank"><font color = "red" size = 4>PEMROGRAMAN</font></a>  |
<a href = "https://ugigrafik.com/" target = "_blank"><font color = "red" size = 4>UGI-GRAFIK</font></a> 


</center>



</b>





<BR><BR>
































<br>

  <p style="text-align:justify">

    <font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
            <font size = 4>



    
    Assalamualaikum . . . Perkenalkan, nama saya Ugi. Hadirnya website ini bertujuan untuk sharing ilmu pengetahuan mengenai statistika & pemrograman. Selain itu, website ini saya gunakan sebagai media untuk mencatat dan menyimpan terkait hal yang telah saya capai, seperti menulis buku, publikasi artikel ke jurnal nasional atau internasional, aplikasi berbasis website, dan seterusnya.
    
    </font>
    </font>
    </p>	






<br><br><br>


<center>

<table width = "1200" border = 0>

<tr>

<td width = "300">

<img src = "gambar/ugi2.jpg" width = "300"> </img>


</td>



<td width = "900" valign = "top">
<p style="text-align:justify">

<font style="color:#ff9900; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
        <font size = 4>


Prana Ugiana Gio, Founder Software Statistika <a href = "https://statcal.com/" target = "_blank">STATCAL</a>. Pendidikan S1 (2008-2012) dan S2 (2012-2014) di Universitas Sumatera Utara, Jurusan Matematika. Saaat ini sedang melanjutkan S3, di Universitas Sumatera Utara, Jurusan Matematika (2017-Sekarang). <br><br>

<font color = #999900>
Beberapa prestasi yang pernah dicapai meraih penghargaan 5 inovasi terbaik pada ajang Youth Economic Leadership Pogram - Bank Indonesia Institute pada 2018, serta meraih penghargaan Juara Paper Kategori Utama (Rekomendasi Scopus) pada Forum Riset Ekonomi dan Keuangan Syariah 2019 (FREKS-OJK). Pada 2021, ia menerima Research Grant Bank Indonesia (RGBI) 2021. 

</font>

<br><br>
<font color = #3333ff>
Beliau telah menerbitkan puluhan buku ber-ISBN, terkait statistika dan pemrograman, serta mempublikasi puluhan artikel di jurnal internasional. Beliau juga merupakan staf pengajar di Universitas Sumatera Utara, Jurusan Matematika. Bidang yang beliau tekuni adalah pembuatan aplikasi berbasis website, simulasi Monte-Carlo, pemodelan menggunakan distribusi probabilitas, data mining dan komputasi Bayesian. Beliau juga pembuat konten di channel youtube <a href = "https://www.youtube.com/@STATKOMAT" target = "_blank"><font color = "red">STATKOMAT</font></a>.
</font>


</font>
</font>
</p>	



</td>






</tr>


</table>



</center>





<br>

<br>
<br>

<center>

<font style="color:#ff9900; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
        <font size = 4>

<b>
  
<font color = "red" size = 4> Email: prana@usu.ac.id </font> | <font color = "red" size = 4>gioprana89@gmail.com</font> <br><br>
<font color = "blue" size = 4> GitHub: gioprana89 </font>
</b>


</font></font>


</center>










<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



  

</body>






</html>