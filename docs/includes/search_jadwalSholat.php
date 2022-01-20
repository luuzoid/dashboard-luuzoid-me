<div class="container">
    <br><br>
    <input class="card-header border-0" type="text" id="myInput" onkeyup="myFunction()" placeholder="Ketikkan nama kota anda..." title="Type in a name">
    <br>
    <ul id="myUL">

    <?php
    // $x <= 1022
        for ($x = 512; $x <= 525; $x++) {

        $api = file_get_contents("https://api.banghasan.com/sholat/format/json/kota/kode/".$x);
        $kota = json_decode($api, true);

            for($i = $x; $i <= $x; $i++) {
                
                $page = $i;
                
                $url = file_get_contents("https://api.banghasan.com/sholat/format/json/jadwal/kota/".$page."/tanggal/".date("Y-m-d"));
                $data = json_decode($url, true);

                echo strtolower("<li><a>» ".$kota['kota'][0]['nama']."</a></li><div class='panel'>");

                  echo $data['jadwal']['data']['ashar'];
                  echo "<br>";
                  echo $data['jadwal']['data']['dhuha'];
                  echo "<br>";
                  echo $data['jadwal']['data']['dzuhur'];
                  echo "<br>";
                  echo $data['jadwal']['data']['imsak'];
                  echo "<br>";
                  echo $data['jadwal']['data']['isya'];
                  echo "<br>";
                  echo $data['jadwal']['data']['maghrib'];
            }
        }
    ?>

    <center><img src="./includes/dots.png" id="dots" height="50" width="100"></center>
    <ul id="more">
    <?php
        for ($x = 526; $x <= 527; $x++) {

        $api = file_get_contents("https://api.banghasan.com/sholat/format/json/kota/kode/".$x);
        $kota = json_decode($api, true);

            for($i = $x; $i <= $x; $i++) {
                
                $page = $i;
                
                $url = file_get_contents("https://api.banghasan.com/sholat/format/json/jadwal/kota/".$page."/tanggal/".date("Y-m-d"));
                $data = json_decode($url, true);

                echo strtolower("<li><a>» ".$kota['kota'][0]['nama']."</a></li><div class='panel'>");

                  echo $data['jadwal']['data']['ashar'];
                  echo "<br>";
                  echo $data['jadwal']['data']['dhuha'];
                  echo "<br>";
                  echo $data['jadwal']['data']['dzuhur'];
                  echo "<br>";
                  echo $data['jadwal']['data']['imsak'];
                  echo "<br>";
                  echo $data['jadwal']['data']['isya'];
                  echo "<br>";
                  echo $data['jadwal']['data']['maghrib'];

            }
        }
    ?>
    </ul>
            
    <button style="margin-left: 45%;margin-top: 25px;" onclick="read()" class="btn btn-success" id="myBtn">Read more</button>
    </ul>
</div>
</table>
</div>


<div class="modal fade" id="surabaya" tabindex="-1" role="dialog" aria-labelledby="surabayaTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center class="modal-title" id="exampleModalLongTitle">
                    <?php
                    $data = file_get_contents("https://www.jadwalsholat.org/adzan/monthly.php?id=265");
                    echo getStringBetween($data, '<h1 class="h1_edit">', '</h1>');
                    ?></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h2 id="digital-clock" style="text-align: center;"></h2>
                <div style="overflow-x:auto;">
                    <table cellspacing="0" class="table_adzan" align="center">
                        <tbody>
                            <tr class="table_header" align="center">
                                <td><b>Tanggal</b></td>
                                <td><b>Imsyak</b></td>
                                <td><b>Shubuh</b></td>
                                <td><b>Terbit</b></td>
                                <td><b>Dhuha</b></td>
                                <td><b>Dzuhur</b></td>
                                <td><b>Ashr</b></td>
                                <td><b>Maghrib</b></td>
                                <td><b>Isya</b></td>
                            </tr><br>
                            <?php
                            $surabaya = file_get_contents("https://www.jadwalsholat.org/adzan/monthly.php?id=265");
                            echo getStringBetween($surabaya, '<tr class="table_highlight" align="center">', '</tr>');
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="surabaya" tabindex="-1" role="dialog" aria-labelledby="surabayaTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center class="modal-title" id="exampleModalLongTitle">
                    <?php
                    $data = file_get_contents("https://www.jadwalsholat.org/adzan/monthly.php?id=265");
                    echo getStringBetween($data, '<h1 class="h1_edit">', '</h1>');
                    ?></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h2 id="digital-clock" style="text-align: center;"></h2>
                <div style="overflow-x:auto;">
                    <table cellspacing="0" class="table_adzan" align="center">
                        <tbody>
                            <tr class="table_header" align="center">
                                <td><b>Tanggal</b></td>
                                <td><b>Imsyak</b></td>
                                <td><b>Shubuh</b></td>
                                <td><b>Terbit</b></td>
                                <td><b>Dhuha</b></td>
                                <td><b>Dzuhur</b></td>
                                <td><b>Ashr</b></td>
                                <td><b>Maghrib</b></td>
                                <td><b>Isya</b></td>
                            </tr><br>
                            <?php
                            $surabaya = file_get_contents("https://www.jadwalsholat.org/adzan/monthly.php?id=265");
                            echo getStringBetween($surabaya, '<tr class="table_highlight" align="center">', '</tr>');
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>