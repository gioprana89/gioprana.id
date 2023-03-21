<html>


<head>

<title>Buku</title>

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

  
        Download Buku Gratis

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

<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

      
<center>


<center><img src = "gambar/buku/14/1.jpg" width="400"></center>

<br><br>


<center><img src = "gambar/buku/14/2.png" width="700"></center>


<br>

      <a href = "https://drive.google.com/file/d/1cuhvilN1u3uFxr8iAKFPxpyazWKsFqaZ/view?usp=sharing" target = "_blank">Penulis: Prana Ugiana Gio, Anil Hakim Syofra, Robert Kurniawan, Vita Cita Emia Tarigan, Yuni Shara, Irna Triannur Lubis, Isra Suryati, Meutia Nurfahasdi, An Suci Azzahra, Muhammad Khahfi Zuhanda, Rizki Syahputra, <font color = "red">2023</font>, <font color = "green">Pengenalan Mengolah Data Menggunakan SPSS, EViews, RStudio, JASP, STATA & Jamovi</font>, <font color = "orange">Uwais Inspirasi Indonesia (ISBN: 978-623-133-021-5)</font>.

<br><br>



<a href = "https://drive.google.com/file/d/1Jl-MlBvQJ-3kIQUkg-qQ9xDX8p4nNBZf/view?usp=sharing" target = "_blank"><font color = "red">Ebook Versi 2</font></a>


<br><br>




<a href = "https://bukuajar.com/pengenalan-mengolah-data-menggunakan-spss-eviews-rstudio-jasp-stata-jamovi.html" target = "_blank"><font color = "red">Beli Versi Cetak</font></a>


      </center>


</font>
</font>
</p>	





































<br><br>

<br><br>








  <br><br>

<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

      
<center>


<center><img src = "gambar/buku/13/1.jpg" width="400"></center>

<br><br>


<center><img src = "gambar/buku/13/2.png" width="700"></center>


<br>

      <a href = "https://drive.google.com/file/d/1F0UPU9SnS08LLD5zGqx6xjX9G4P1DNrR/view?usp=sharing" target = "_blank">Penulis: Prana Ugiana Gio, <font color = "red">2022</font>, <font color = "green">Partial least squares structural equation modeling (pls-sem) dengan software smartpls</font>, <font color = "orange">Uwais Inspirasi Indonesia (ISBN: 978-623-227-888-2)</font>.

<br><br>


<a href = "https://bukuajar.com/partial-least-squares-structural-equation-modeling-pls-sem-dengan-software-smartpls.html" target = "_blank"><font color = "red">Beli Versi Cetak</font></a>


      </center>


</font>
</font>
</p>	



































































<br><br>

<br><br>




  <br><br>

<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

      
<center>


<center><img src = "gambar/buku/12/1.png" width="700"></center>

<br><br>


<center><img src = "gambar/buku/12/2.jpg" width="400"></center>


<br>

      <a href = "https://drive.google.com/file/d/19rOm5yxXOwsHtqAFQ7WJz1V-idHM4HQB/view?usp=sharing" target = "_blank">Penulis: Prana Ugiana Gio, Rizki Syahputra, Irna Triannur Lubis, Robert Kurniawan, Muhammad Khahfi Zuhanda, Wida Akasah, Yuni Shara, Meigia Nidya Sari, <font color = "red">2022</font>, <font color = "green">mengolah data menggunakan software SPSS untuk pemula</font>, <font color = "orange">Uwais Inspirasi Indonesia (ISBN: 978-623-227-922-3)</font>.

<br><br>


<a href = "https://bukuajar.com/belajar-mengolah-data-menggunakan-software-spss-untuk-pemula.html" target = "_blank"><font color = "red">Beli Versi Cetak</font></a>


      </center>


</font>
</font>
</p>	











































































<br><br>

<br><br>



  <br><br>

<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

      
<center>


<center><img src = "gambar/buku/11/1.jpg" width="400"></center>

<br><br>


<center><img src = "gambar/buku/11/2.png" width="600"></center>


<br>

      <a href = "https://drive.google.com/file/d/1tVtpD13ibZn3PN98QPWcS0Z5DckjjeRp/view?usp=sharing" target = "_blank">Penulis: Prana Ugiana Gio, Rezzy Eko Caraka, Rizki Syahputra, Irna Triannur Lubis, Robert Kurniawan, Muhammad Khahfi Zuhanda, Wida Akasah, Yuni Shara, Meigia Nidya Sari, An Suci Azzahra, <font color = "red">2022</font>, <font color = "green">Partial Least Squares Structural Equation Modeling (PLS-SEM) dengan software WarpPLS</font>, <font color = "orange">Uwais Inspirasi Indonesia (ISBN: 978-623-227-948-3)</font>.

<br><br>


<a href = "https://bukuajar.com/partial-least-squares-structural-equation-modeling-pls-sem-dengan-software-warppls.html" target = "_blank"><font color = "red">Beli Versi Cetak</font></a>


      </center>


</font>
</font>
</p>	























































<br><br>

<br><br>




  <br><br>

<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

      
<center>


<center><img src = "gambar/buku/10/1.png" width="400"></center>

<br>

      <a href = "https://drive.google.com/file/d/1IOu4cpBFQho4jejXOEV4EKJKfN1Iigqf/view" target = "_blank">Penulis: Prana Ugiana Gio & Rezzy Eko Caraka, <font color = "red">2021</font>, <font color = "green">Visualisasi data dengan EAVIS</font>, <font color = "orange">USUpress (ISBN: 978-602-465-339-2)</font>.

      </center>


</font>
</font>
</p>	














<br><br>

<br><br>

  <br><br>

<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

      
<center>


<center><img src = "gambar/buku/9/1.png" width="400"></center>

<br>

      <a href = "https://drive.google.com/file/d/1dfqmIbZ4r6nB75CZVqEf-Bpy-emUvZx7/view" target = "_blank">Penulis: Prana Ugiana Gio (Founder STATCAL) & Rezzy Eko Caraka (Co-Founder STATCAL), <font color = "red">2021</font>, <font color = "green">Regresi Logistik Biner dengan STATCAL (Disertai Perbandingan Hasil dengan SPSS, STATA, EViews & JASP)</font>, <font color = "orange">USUpress (ISBN: 978-602-465-329-3)</font>.

      </center>


</font>
</font>
</p>	




































<br><br>

<br><br>


  <br><br>

<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

      
<center>


<center><img src = "gambar/buku/8/1.jpg" width="900"></center>

<br>

      <a href = "https://drive.google.com/file/d/15sKUeQ3A3vmy8wvklAxkscb5-9PPrq2b/view" target = "_blank">Penulis: Prana Ugiana Gio, Rezzy Eko Caraka (UI), Hendrati Dwi Mulyaningsih (UNISBA), Mery Citra Sondari (UNPAD), Sunu Widianto (UNPAD) & Robert Kurniawan (STIS), <font color = "red">2019</font>, <font color = "green">Partial Least Squares Path Modeling dengan STATCAL-PLSPM (Alternatif SmartPLS & WarpPLS)</font>, <font color = "orange">USUpress (ISBN: 978 602 465 127 5)</font>.

      </center>


</font>
</font>
</p>	














<br><br>

<br><br>



  <br><br>

<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

      
<center>


<center><img src = "gambar/buku/7/1.jpg" width="700"></center>

<br>

      <a href = "https://osf.io/preprints/inarxiv/796th/" target = "_blank">Penulis: Prana Ugiana Gio & Rezzy Eko Caraka (BRIN), <font color = "red">2018</font>, <font color = "green">Pedoman dasar mengolah data dengan program aplikasi statistika Statcal</font>, <font color = "orange">USUpress (ISBN: 978-602-465-061-2)</font>.

      </center>


</font>
</font>
</p>	




































<br><br>

<br><br>
  <br><br>

<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

      
<center>


<center><img src = "gambar/buku/6/1a.png" width="500"></center>

<br>

      <a href = "https://drive.google.com/file/d/1QdQq1eI2eSRPOCMx4VKV-yI_qKVk25vc/view" target = "_blank">Penulis: Prana Ugiana Gio & Suyanto (USU), <font color = "red">2017</font>, <font color = "green">Statistika Nonparametrik dengan SPSS, Minitab, dan R</font>, <font color = "orange">USUpress (ISBN: 978-602-465-010-0)</font>.

      </center>


</font>
</font>
</p>	























<br><br>

<br><br>


  <br><br>

<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

      
<center>


<center><img src = "gambar/buku/5/1a.png" width="700"></center>

<br>

      <a href = "https://osf.io/preprints/inarxiv/ktmy2/" target = "_blank">Penulis: Prana Ugiana Gio & Adhitya Ronnie Effendie (UGM), <font color = "red">2017</font>, <font color = "green">Belajar Bahasa Pemrograman R</font>, <font color = "orange">USUpress (ISBN: 979 458 959 4)</font>.

      </center>


</font>
</font>
</p>	







<br><br>

<br><br>


  <br><br>

<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

      
<center>


<center><img src = "gambar/buku/4/1a.jpg" width="700"></center>

<br>

      <a href = "https://osf.io/preprints/inarxiv/ez7mg/" target = "_blank">Penulis: Prana Ugiana Gio & Dasapta Erwin Irawan (ITB), <font color = "red">2016</font>, <font color = "green">Belajar Statistika dengan R, Disertai Beberapa Contoh Perhitungan Manual</font>, <font color = "orange">USUpress (ISBN: 979 458 860 1)</font>.

      </center>


</font>
</font>
</p>	
















<br><br>

<br><br>


<br><br>

<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

      
<center>


<center><img src = "gambar/buku/2/1a.jpg" width="400"></center>

<br>

      <a href = "https://osf.io/preprints/inarxiv/2z79c/" target = "_blank">Penulis: Prana Ugiana Gio & Elly Rosmaini (USU), <font color = "red">2016</font>, <font color = "green">Belajar Olah Data dengan SPSS, Minitab, R, Microsoft Excel, LISREL, Amos dan SmartPLS, Disertai Beberapa Contoh Perhitungan Manual</font>, <font color = "orange">USUpress (ISBN: 979 458 801 6)</font>.

      </center>


</font>
</font>
</p>	

















<br><br>

<br><br>



<br><br>

<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

      
<center>


<center><img src = "gambar/buku/3/1a.jpg" width="550"></center>

<br>

      <a href = "https://drive.google.com/file/d/1dLMYSViri2tqusPy7GovTaR6Cx9iJyfx/view" target = "_blank">Penulis: Prana Ugiana Gio, <font color = "red">2015</font>, <font color = "green">Belajar Olah Data dengan EViews</font>, <font color = "orange">USUpress (ISBN: 979 458 978)</font>.

      </center>


</font>
</font>
</p>	














<br><br>

<br><br>


<br><br><br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
        <font size = 4>

        
<center>


<center><img src = "gambar/buku/1/1a.jpg" width="600"></center>

<br>

        <a href = "https://drive.google.com/file/d/1qR4LTqSXo41Iev_RuL1pBfcQO1-pUtXC/view?usp=sharing" target = "_blank">Penulis: Prana Ugiana Gio, <font color = "red">2013</font>, <font color = "green">Aplikasi Statistika dalam SPSS, Dilengkapi dengan Penyelesaian Perhitungan Secara Manual</font>, <font color = "orange">USUpress (ISBN: 979 458 681 1)</font>.

        </center>


</font>
</font>
</p>	


  


















<br><br><br><br><br><br><br><br><br><br><br><br>






















</body>






</html>