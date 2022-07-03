<?php
    $nama=" ";
    $pesan=" ";
    if (isset($_POST['kirim'])){
        // <!---mengambil data dari parameter input--->
        $nama=$_POST['nama'];
        $pesan=$_POST['pesan'];
        // <!---menampilkan data inputan--->>
    }
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOM NOM COFFEE SHOP</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript">
	    function validasi() {
		    var nama = document.getElementById("nama").value;
		    var pesan = document.getElementById("pesan").value;
		    if (nama != "" && pesan!="") {
			    return true;
            }
            else{
			    alert('Mohon isi data dengan lengkap');
		    }
	    }
    </script>
</head>

<body>
    <!---Navbar--->
    <nav>
        <img src="asset/logobrand.png" alt="logo">
        <ul>
            <!--menggunakan tag anchor agar dapat menscroll ke bagian yang dituju pada halaman tsb-->
            <li><a href="#top">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#location">Contact</a></li>
        </ul>
    </nav>

    <!---Banner IT'S COFFEE TIME--->
    <div class="style background">
        <h1>
            IT'S COFFEE TIME
        </h1>
        <p>
            Take a break sometime and feel enjoy with your coffee
        </p>
    </div>

    <!--Our Menu-->
    <div id="section-product" class="container">
        <div id="produk">
            <div class="head">
                <h2 class="judul">Our Menu</h2>
                <p class="deskjudul">
                    Don't know where to start with speciality coffee?
                    Here are some of our most popular choices</p>
            </div>
            <div style="padding-left: 128px;">
                <div class="colum">
                    <div class="box">
                        <img src="asset/macchiato2.jpg" alt="" class="imgproduk" />
                        <h3>Turkish Coffee</h3>
                        <p>
                            Made by boiling finely ground coffee and water together to form a muddy, thick coffee mix.
                            In fact, the strongest Turkish coffee can almost keep a spoon standing upright.
                            It’s often made in what’s known as an Ibrik, a long-handled, open, brass or copper pot.
                        </p>
                    </div>
                </div>
                <div class="colum">
                    <div class="box">
                        <img src="asset/kopitubruk.jpg" alt="" class="imgproduk" />
                        <h3>Kopi Tubruk</h3>
                        <p>
                            An Indonesian-style coffee that is very similar to Turkish and Greek in that it’s very
                            thick,
                            but the coarse coffee grounds are actually boiled together with a solid piece of sugar.
                            The islands of Java and Bali tend to drink this brew.
                        </p>
                    </div>
                </div>
                <div class="colum">
                    <div class="box">
                        <img src="asset/mocha.jpg" alt="" class="imgproduk" />
                        <h3>Mochaccino</h3>
                        <p>
                            Basically a Cappuccino or Latte with chocolate syrup added to the mix.
                            Sweeter, not as intense in coffee flavor, and a good ‘gateway’ coffee
                            for those who don’t usually do the caffeine thing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---Banner Enjoy Your Delicious COffee--->
    <div class="style2 background2">
        <h1 style="font-size: 35px;">Enjoy Your Delicious Coffee</h1>
        <p style="font-size: 20px;">When you are feel tired, take a rest and brew your coffee</p>
        <br>
        <h3 class="tagh3">Celebrate International Coffee Day! Take $5 off a gift set with code COFFEEDAY at checkout.
            ORDER NOW!!!</h3>
    </div>

    <!---About Us--->
    <a id="about"></a>
    <div class="detailtoko">
        <div>
            <div>
                <h2 class="about">About Us</h2>
                <p class="line"></p>
            </div>
            <div>
                <img class="img_store" src="asset/pictstore.jpg" alt="">
                <p class="desk_toko">
                    NOMNOM is a coffee shop that serves NOMNOM specialty coffee with
                    selected coffees with a signature NOMNOM twist.
                    We offer the best coffee with quality raw materials that you can get every day.
                    We believe that the customer always comes first - and that means exceptional produce,
                    quality ingredients and a friendly service. We believe in maintaining high standards
                    and proud to be awarded a five star food and hygiene rating.
                </p>
            </div>
        </div>
    </div>

    <!---Form--->
    <div class="form_test">
        <h2 class="form">Customer Testimonials</h2>
        <div class="flex">
            <div class="post">
                <form method="POST" onsubmit="validasi()" style="padding: 50px;">
                    <div>
                        <div>
                            <label><b>Nama</b></label>
                        </div>
                        <div>
                            <input type="text" class="nama" id="nama" name="nama" size="40">
                        </div>
                    </div>
                    <br>
                    <div>
                        <div>
                            <label><b>Testimoni</b></label>
                        </div>
                        <div>
                            <textarea name="pesan" class="pesan" id="pesan" cols="40" rows="8"></textarea>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="kirim" name="kirim">Kirim</button>
                </form>
            </div>
            <div style="position: relative; display: flex; flex-direction: column; min-width: 0; width: 30%; 
            word-wrap: break-word; background-color: #fff; background-clip: border-box; border: 1px solid rgba(0, 0, 0, 0.125); 
            border-radius: 0.25rem;;background-color: white; color: black; border-radius: 25px;">
                <div style="padding: 50px;">
                    <p><?= $nama; ?></p>
                    <p><?= $pesan ; ?></p>
                </div>
            </div>
            <!---Pemrosesan data inputan form--->
        </div>
    </div>

    <!---Delivery info--->
    <div>
        <h2 class="del">Delivery (Coming Soon)</h2>
        <p class="line2"></p>
        <p class="desk_del">Delivery has made a big difference for many of our customers,
            now you can enjoy a Nom Nom Coffee from the comfortablety of
            your own home and still providing you with the highest level
            of excellence. With this service, we ensure your Order is
            handled in a timely manner whenever you order with Nom Nom Coffee Shop</p>
    </div>

    <!---Contact--->
    <a id="location"></a>
    <div class="location">
        <div class="headlocation">
            <h2 class="storeplace">NOMNOM Coffee Shop</h2>
            <p class="order">You can order by visiting our shop or delivery order (coming soon)</p>
            <p class="alamat">
                Jl. Espresso No.23, Kecamatan Candisari, Kota Semarang, Jawa Tengah
            </p>
        </div>
        <!---Sosmed--->
        <div>
            <table>
                <tr>
                    <th>
                        <a href="https://www.instagram.com/rulnurul._/" target="_blank"><img src="asset/logo_ig.png"
                                alt="instagram"></a>
                        <a href="https://t.me/Nurulismaaa" target="_blank"><img src="asset/logo_tele.png"
                                alt="telegram"></a>
                        <a href="https://wa.me/+6282313854457" target="_blank"><img src="asset/logo_wa.png"
                                alt="whatsapp"></a>
                    </th>
                </tr>
            </table>
        </div>
    </div>

    <!--Copyright-->
    <div class="copyright">
        <p>Copyright &copy; 2021 NOMNOM | Nurul Ismawati</p>
    </div>
</body>

</html>