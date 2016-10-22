<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuggestionSeeder extends Seeder {

    private function seedSuggesstion()
    {
        DB::table('suggestions')->delete();
        DB::table('suggestions')->insert([
            [
                "id" => 1,
                "description" => "Keluarga",
                "parent_id" => null,
                "urgent_rating" => "1"
            ],
            [
                "id" => 2,
                "description" => "Sekolah",
                "parent_id" => null,
                "urgent_rating" => "1"
            ],
            [
                "id" => 3,
                "description" => "Sosial / Pertemanan",
                "parent_id" => null,
                "urgent_rating" => "1"
            ],
            [
                "id" => 4,
                "description" => "Pekerjaan",
                "parent_id" => null,
                "urgent_rating" => "1"
            ],
            [
                "id" => 5,
                "description" => "Percintaan",
                "parent_id" => null,
                "urgent_rating" => "1"
            ],
            [
                "id" => 6,
                "description" => "Keuangan",
                "parent_id" => null,
                "urgent_rating" => "1"
            ],
            [
                "id" => 7,
                "description" => "Kekerasan / Kriminalitas",
                "parent_id" => null,
                "urgent_rating" => "1"
            ],
            [
                "id" => 8,
                "description" => "Personal",
                "parent_id" => null,
                "urgent_rating" => "1"
            ],
            [
                "id" => 9,
                "description" => "Keluarga saya \"broken home\"",
                "parent_id" => 1,
                 "urgent_rating" => "4"
            ],
            [
                "id" => 10,
                "description" => "Merasa tidak dihargai dalam keluarga",
                "parent_id" => 1,
                "urgent_rating" => "1"
            ],
            [
                "id" => 11,
                "description" => "Cemburu dengan saudara saya",
                "parent_id" => 1,
                "urgent_rating" => "1"
            ],
            [
                "id" => 12,
                "description" => "Kami sebagai keluarga jarang berkomunikasi",
                "parent_id" => 1,
                "urgent_rating" => "1"
            ],
            [
                "id" => 13,
                "description" => "Bertengkar dengan orang tua",
                "parent_id" => 1,
                "urgent_rating" => "1"
            ],
            [
                "id" => 14,
                "description" => "Guru disekolah jahat",
                "parent_id" => 2,
                "urgent_rating" => "2"
            ],
            [
                "id" => 15,
                "description" => "Tidak cocok bergaul dengan teman",
                "parent_id" => 2,
                "urgent_rating" => "1"
            ],
            [
                "id" => 16,
                "description" => "Tugas sekolah terlalu berat",
                "parent_id" => 2,
                "urgent_rating" => "1"
            ],
            [
                "id" => 17,
                "description" => "Saya ketauan berbuat mencontek / berbuat curang",
                "parent_id" => 2,
                "urgent_rating" => "1"
            ],
            [
                "id" => 18,
                "description" => "Tidak cocok dengan teman karena dia penggosip",
                "parent_id" => 3,
                "urgent_rating" => "1"
            ],
            [
                "id" => 19,
                "description" => "Teman saya sangat mudah tersinggung",
                "parent_id" => 3,
                "urgent_rating" => "1"
            ],
            [
                "id" => 20,
                "description" => "Saya melupakan ulang tahun teman saya",
                "parent_id" => 3,
                "urgent_rating" => "1"
            ],
            [
                "id" => 21,
                "description" => "Saya melupakan ulang tahun teman saya",
                "parent_id" => 4,
                "urgent_rating" => "1"
            ],
            [
                "id" => 22,
                "description" => "Atasan saya jahat",
                "parent_id" => 4,
                "urgent_rating" => "4"
            ],
            [
                "id" => 23,
                "description" => "Tugas saya terlalu banyak",
                "parent_id" => 4,
                "urgent_rating" => "2"
            ],
            [
                "id" => 24,
                "description" => "Saya ingin pindah pekerjaan",
                "parent_id" => 4,
                "urgent_rating" => "1"
            ],
            [
                "id" => 25,
                "description" => "Gaji saya lebih kecil dari teman",
                "parent_id" => 4,
                "urgent_rating" => "5"
            ],
            [
                "id" => 26,
                "description" => "Saya diselingkuhin pacar",
                "parent_id" => 5,
                "urgent_rating" => "4"
            ],
            [
                "id" => 27,
                "description" => "Saya ingin bunuh diri",
                "parent_id" => 5,
                "urgent_rating" => "10"
            ],
            [
                "id" => 28,
                "description" => "Selalu kekurangan uang",
                "parent_id" => 6,
                "urgent_rating" => "3"
            ],
            [
                "id" => 29,
                "description" => "Tidak bisa mengelola uang",
                "parent_id" => 6,
                "urgent_rating" => "1"
            ],
            [
                "id" => 30,
                "description" => "Saya dirampok",
                "parent_id" => 7,
                "urgent_rating" => "5"
            ],
            [
                "id" => 31,
                "description" => "Saya kehilangan barang",
                "parent_id" => 7,
                "urgent_rating" => "3"
            ],
            [
                "id" => 32,
                "description" => "Saya dipukul orang",
                "parent_id" => 7,
                "urgent_rating" => "8"
            ],
            [
                "id" => 33,
                "description" => "Saya merasa minder karena fisik",
                "parent_id" => 8,
                "urgent_rating" => "5"
            ],
            [
                "id" => 34,
                "description" => "Saya merasa kurang cerdas",
                "parent_id" => 8,
                "urgent_rating" => "4"
            ],
            [
                "id" => 35,
                "description" => "Saya terkena penyakit fisik",
                "parent_id" => 8,
                "urgent_rating" => "4"
            ],
            [
                "id" => 36,
                "description" => "Saya terkena penyakit mental",
                "parent_id" => 8,
                "urgent_rating" => "4"
            ],
            [
                "id" => 37,
                "description" => "<p>Setiap manusia dewasa memiliki tugas perkembangan, salah satunya adalah menikah. Tak satupun manusia yang merencanakan perceraian saat baru melangsungkan pernikahan. Namun, tidak bisa dipungkiri kalau perceraian dapat terjadi saat sepasang suami istri tidak dapat lagi menyatukan visi dalam membangun bahtera rumah tangga. Saat perceraian terjadi, bukan hanya pasangan suami istri yang menerima dampaknya. Bila mereka telah memiliki anak, anaklah yang menjadi korban. Kebingungan anak atas perpisahan orang tuanya serta rasa bersalah saat salah satu orang tua meninggalkannya dapat berakibat buruk bagi perkembangan psikologis anak.<p><div style=float:right;margin:0></div><p class=entry-title>Dampak buruk yang dapat terjadi pada anak “broken home” terlihat pada salah satu kasus bunuh diri seorang siswa SMP yang baru-baru ini terjadi (http://www.kaskus.co.id/thread/54bae71c32e2e6895e8b4569/korban-broken-home-pelajar-ini-bunuh-diri-dalam-lemari/). Tidak ada niat untuk menghakimi siapapun, tulisan ini hanya berusaha mengingatkan bagi para orang tua yang mengalami perceraian maupun remaja yang orang tuanya bercerai.<p class=entry-title><p class=entry-title>Dampak perceraian pada anak diuraikan sebagai berikut:<p class=entry-title><p class=entry-title>1. Depresi<p class=entry-title>Awalnya, anak merasa tidak aman (insecure) karena ada salah satu orang tua yang tidak lagi tinggal bersamanya, lalu muncul rasa sedih, kesepian. Bisa saja anak merasa bersalah atas kepergian salah satu orang tuanya. Bila kondisi ini tidak cepat ditangani, kemungkinan besar anak bisa menjadi depresi akibat perceraian orang tuanya. Depresi adalah salah satu gejala yang paling umum terlihat pada anak, ketika orang tua mereka berpisah. Anak akan mulai mengisolasi diri dalam dunia mereka dan menjauhi hal-hal yang biasa dilakukan oleh anak seusia mereka, bahkan hingga bunuh diri.<p class=entry-title><p class=entry-title>2. Cenderung berperilaku kasar<p>Perilaku ini muncul karena anak mulai merasa seolah-olah dirinya ditipu oleh orang tuanya. Selain itu, dia juga bersikap demikian untuk menarik perhatian kedua orang tuanya. Dia berharap bahwa apa yang dilakukannya bisa kembali mempersatukan keluarganya.<p><div>3. Sulit fokus</div><p>Perceraian memberi dampak buruk pada performa anak, terutama untuk prestasinya di sekolah. Itu dikarenakan dia terus memikirkan tentang perceraian orang tuanya, sehingga dia tidak dapat fokus pada hal lain. Jika terus dibiarkan, prestasi anak akan terus menurun dan bahkan hancur.<p><p>4. Kehilangan rasa hormat<p><b></b>Hal ini sering terjadi pada anak-anak yang beranjak dewasa atau masih remaja. Perceraian itu membuat mereka kehilangan rasa hormat mereka terhadap orang tua. Mereka bahkan berani menyalahkan orang tua mereka, karena dinilai telah merusak kehidupan mereka. Selain itu, anak juga acapkali dijadikan bahan lelucon di sekolahnya karena masalah perceraian orang tua. Akibatnya, anak pun melampiaskan semua kemarahannya kepada orang tuanya.<p><p>5. Memilih jalan yang salah<p>Sebagian anak yang menjadi korban perceraian memutuskan (atau terpaksa) untuk memilih jalan yang salah, termasuk penyalahgunaan narkoba dan alkohol, pelecehan seks, dan hal buruk lainnya. Mereka kadang-kadang melakukannya sebagai bentuk pelarian terhadap kenyataan.<p><p>Inilah dampak buruk perceraian pada anak. Meski tidak semua anak terjerumus ke jalan yang salah karena perceraian, orang tua harus lebih berhati-hati dalam memberi pengertian ke anak. Jika perceraian menjadi jalan satu-satunya untuk masalah Anda, pikirkan bagaimana nasib anak ke depannya.<p><p>Dampak buruk perceraian bagi anak dapat diminimalisir dengan beberapa cara:<p><p>1. Melibatkan anak dalam diskusi mengenai persoalan yang dihadapi orang tua (dengan bahasa yang dipahami oleh anak). Jelaskan bahwa orang tuanya tidak dapat lagi tinggal bersama namun tetap menyayangi sang anak. Sehingga, anak tidak merasa bersalah dengan perpisahan orang tuanya.<p><p>2. Tetap menjalin komunikasi dengan anak. Meskipun tidak bisa seintensif saat belum bercerai, setidaknya, pastikan bisa tepati janji terhadap anak. Mengingkari janji terhadap anak dapat menyebabkan anak merasa tidak diinginkan lagi oleh orang tuanya.<p><p>3. Jangan saling menjelekkan mantan pasangan pada anak. Meskipun perceraian terjadi disebabkan karena hal yang buruk, namun, upayakan untuk tetap bersikap saling menghargai. Hal ini dapat membuat anak tetap menjaga rasa hormatnya pada orang tuanya. Ingat, tak ada bekas anak, Seburuk apapun mantan pasangan, ia tetaplah salah satu orang tuanya.<p><p>4. Rasa kecewa terhadap perceraian orang tua, dapat hilang perlahan saat anak bisa melihat dan merasakan orang tuanya tetap menyayanginya, dan tetap menjalin komunikasi yang hangat dengan sang anak. Tanamkan pada anak, bahwa meskipun orang tuanya tidak lagi bersama, dan anak tidak tinggal bersama dengannya, namun anak tetap memiliki orang tua yang utuh yang tetap dekat dan sayang padanya.<p><p>5. Tetap arahkan anak dalam bergaul. Jaga komunikasi dan keterbukaan dengan anak. Selalu libatkan anak saat mengambil keputusan, termasuk saat orang tua hendak menikah lagi dengan orang lain. Mendengarkan pendapat dan berdiskusi mengenai kehidupan dapat membuat anak tetap merasa dianggap ada.<p>(ZF/ Berbagai Sumber)<div id=alrp-slidebox-anchor></div><p>",
                "parent_id" => 9,
                "urgent_rating" => "1"
            ],
			[
				"id" => 38,
				"description" => "<p>Adakah di antara Anda yang pernah tinggal bersama-sama dengan anggota keluarga atau famili dekat yang mengalami problem kejiwaan ? jika saya tanyakan bagaimana rasanya, saya yakin pertanyaan ini mengundang reaksi emosi yang spektrumnya mulai dari sedih sampai pasrah yang <em>ignorant</em>, alias berusaha tidak ambil pusing. Problem kejiwaan memang merupakan persoalan bukan hanya bagi penderitanya, tapi sekaligus orang-orang di sekelilingnya, dan yang hidup bersamanya.<p>Tulisan ini bukan maksud ingin memojokkan orang-orang yang mengalami problem kejiwaan yang bisa saja saya sendiri atau bahkan Anda sendiri pernah mengalaminya. Pengalaman berada di dasar samudera (kalau bisa saya lukiskan demikian) bisa di jabarkan ketika kita sudah keluar dari situ dan setelah muncul kembali kita baru melihat bagaimana kondisi orang-orang terdekat kita selama kita berada di dasar samudera.  Pengalaman ini lah yang ingin di sampaikan pula pada pembaca yang mungkin belum pernah berada di kedua tempat itu.<div style=float:right;margin:0></div><p><strong></strong><p><strong>Kesepian di tengah keramaian</strong><p>Problem kejiwaan bisa kita artikan sebagai masalah yang mengganggu jiwa hingga pada titik ambang batas kemampuan individu itu untuk mengelolanya. Pada titik itu ia merasa berhadapan dengan jalan buntu sementara akal sehat dan logikanya tidak mampu menghadirkan solusi yang <em>possible</em> untuk mengatasi masalahnya. Dalam keadaan seperti ini, individu cenderung menarik diri dari lingkungan karena ia merasa asing dan aneh, entah ia merasa dirinya aneh, atau dia menilai orang-orang bersikap aneh padanya.<p><p>Tindakan ini sebenarnya memperparah keadaan, karena ia bisa bermain-main dan memutar pikiran negatif tanpa batas. Padahal dalam kondisi lemahnya <em>self control</em>, kans untuk menghentikan pikiran negatif atau  menghadirkan tindakan yang proaktif, kemungkinannya jadi tipis. Tanpa koneksi dengan lingkungan, maka segala sesuatu yang ‘bias’ alias menyimpang dari kaidah kenyataan / fakta, tidak terkoreksi.  Oleh karenanya tidak heran jika individu  makin menarik diri dari lingkungan karena makin sulit percaya pada orang lain dan menemukan orang lain yang mempercayainya.<p><p>Sesungguhnya keadaan ini membuat individu yang mengalami problem kejiwaan, makin tertekan dan terperangkap dalam kebuntuan dan dirinya pun sering tersesat dalam bilik pikiran. Frustrasi dan putus asa kerap menerjang pikiran dan perasaan mereka, sementara mereka merasa tidak berdaya. Saat inilah, individu mulai merasa mendengar ada suara-suara yang menyuruh mereka melakukan ini dan itu, atau suara-suara yang mengatakan hal-hal buruk mengenai pribadi mereka, dsb. Dalam psikologi klinis, pola ini di kenal dengan istilah delusi. Ada pula yang seperti melihat sebuah image yang tampak begitu nyata di mata mereka namun tidak nyata di mata orang lain. Kondisi ini dinamakan halusinasi.<p><p>Tidak banyak orang tahu apa yang dirasakan oleh para penderita problem kejiwaan ini, karena dari luar sikap mereka sering menjengkelkan dan memancing kemarahan, tidak rasional dan ‘aneh’. Padahal, orang-orang yang mengalami problem kejiwaan sering dilanda ketakutan kehilangan rasionalitas, (‘takut jadi gila’). Individu ini pun sering malu dan marah pada diri sendiri karena merasa tidak berguna. Dibalik sikapnya yang menjengkelkan, pribadi ini menyimpan semburat kesedihan saat ia menyakiti orang yang mengasihinya dan sangat ia kasihi. Sayangnya emosi-emosi tersimpan dalam bilik emosi yang sulit di eksplorasi.<p><p>Jarak emosi dan persepsi akhirnya membuat koneksi relasi tidak terjadi. <em>Nothing happen</em>. Sayangnya, seringkali <em>moment</em> ini tidak diketahui dan tidak di tindaklanjuti padahal inilah masa kritis di mana individu yang mengalami problem kejiwaan tiba di persimpangan jalan yang cukup menentukan, antara makin masuk ke dunianya, atau membuka diri terhadap rasionalitas. Pada saat ini lah penderita terkadang merasakan kesunyian dan kesepian yang sangat, sementara di dalam keputusasaan dan ketidakberdayaan yang ia rasakan, ia tidak melihat ada jalan keluar lain yang <em>possible</em>.  Ini lah salah satu kondisi yang melandasi tindakan bunuh diri.<p><p><p><strong>Emotional Exhaustion</strong><p>Pola perilaku individu yang mengalami problem kejiwaan sering dianggap sumber masalah atau setidaknya potensi masalah bagi orang-orang di sekelilingnya. Sikap, tindakan atau pun pikiran mereka dinilai tidak rasional, tidak biasa, atau kekanak-kanakan. Belum lagi jika individu yang sedang mengalami masalah kejiwaan mengabaikan apa yang dianggap penting oleh orang-orang di sekelilingnya. Misalnya, lupa menutup pintu depan, lupa mematikan lampu, mematikan kompor hingga memperlihatkan sikap negative yang terkadang memalukan, atau sulit di terima oleh orang tua, atau pasangan, atau anak-anak mereka.  Berbagai kerepotan terkadang muncul dari sikap mereka, misalnya selalu mengunci pintu dan tidak boleh ada tamu,  tidak mau ikut pergi ke acara keluarga, diam dalam pertemuan keluarga, atau emosi yang meledak-ledak  atau membahas topik yang tidak biasa buat pendengarnya.<p><p>Rasa enggan keluarga untuk melibatkan mereka sebenarnya bukan hanya karena alasan ‘kenyamanan’ tapi seringkali faktor keamanan. Sikap agresif atau pun pernyataan negative yang terlontar dari individu yang sedang mengalami masalah emosional atau problem kejiwaan tanpa sadar bisa membahayakan keselamatan mereka sendiri karena belum tentu lawan bicara mengenalnya dan mengerti keadaannya. Tidak jarang anggota keluarga merasa tegang ketika bepergian bersamanya, karena takut jika sikap dan kata-katanya memancing keributan dengan orang lain.<p><p>Lemahnya <em>self control</em> dan rendahnya kemampuan mengelola frustrasi membuat individu berproblem ini jadi super sensitive terhadap banyak hal yang terjadi di luar keinginan mereka.  Mereka jadi mudah marah, kesal, sedih, dsb  dan faktanya, situasi ini sangat menguras emosi dan energy orang-orang di sekeliling mereka, yang berusaha untuk memahami dan memaklumi atau mentoleransi sikap mereka.<p><p>Kelelahan fisik dan emosi sering melanda anggota keluarga, bisa menyebabkan problem kesehatan karena menurunnya daya tahan tubuh, problem interpersonal karena berkurangnya <i>stress tolerance</i>, berkurangnya prestasi kerja karena menurunnya konsentrasi dan persistensi, sampai problem dengan diri sendiri karena makin banyak hal dalam hidup yang tidak berjalan dengan lancar atau seperti yang di harapkan; banyak keinginan dan kebutuhan tidak tercapai atau harus ditunda karena situasi tidak memungkinkan; sementara mereka merasa bersalah kalau berusaha atau bersantai atau sedikit <em>having fun time</em> sekedar menghibur diri.<p><p>Ketika pihak keluarga merasa sudah mengupayakan berbagai cara untuk ‘menyembuhkan’ dan mengembalikan keadaan seperti sedia kala, tapi hasilnya tampak sia-sia. Dalam situasi seperti ini lebih mudah merasa pesimis dari pada optimis, lebih mudah menyerah atas nama pasrah ketimbang melanjutkan perjuangan.  Kenapa saya katakan ini sebuah perjuangan ?<p><strong></strong><p><strong></strong><p><strong>Dysfungsi dalam keluarga</strong><p>Sebuah keluarga merupakan sebuah unit system yang dinamis dan interaktif, dimana tiap anggota pasti punya kontribusi signifikan dalam membentuk ‘budaya’, nilai dan norma, tradisi hingga model interaksi. Kita sering mendengar atau bahkan mengalami sendiri kondisi atau pola-pola keluarga yang sudah turun temurun beberapa generasi. Kalau pola itu baik, akan menghasilkan output yang baik, entah itu karakter, kebiasaan, norma, nilai atau pun hasil karya. Tapi kalau polanya tidak sehat, menyimpang, atau <em>too rigid</em>, akan menghasilkan <em>output</em> yang tidak baik juga. Masalahnya, selama kita ada di dalam keluarga dan tidak pernah sekali-sekali ‘keluar’ dari dunia kecil / dunia keluarga, kita tidak melihat apa yang salah atau yang kurang <em>adequate </em>dari kebiasaan sehari-hari, paling-paling hanya terucap ‘sudah dari dulu begitu’ atau ‘…<i>habis mau bagaimana lagi</i>…..?’.<p><p>Ketidakmampuan kita untuk melihat apa yang salah dalam keluarga kita, atau pola manakah yang sudah tidak bisa diterapkan karena mengalami perubahan konteks, membuat keluarga kita menjalani siklus kehidupan dan problem yang serupa dari generasi ke generasi. Karena, ketidakmampuan melihat problem dari paradigma yang berbeda menghasilkan nilai, persepsi, reaksi, tindakan, kebiasaan, dan solusi-solusi yang tidak jauh berbeda dari generasi sebelumnya yang sering dijadikan <em>benchmark</em>. Inilah yang menjadi problem turun temurun, bukan problem karena ‘keturunan’.<p><p>Tidak ada yang salah dengan menggunakan pola lama selama pola tersebut masih mensupport pertumbuhan di dalam setiap generasi / keluarga dan terbukti menghasilkan orang-orang yang berkarakter, integral, positif dan memberikan kontribusi nyata pada lingkungannya.<p><p>Ketika salah seorang anggota keluarga yang sangat kita sayangi mengalami stress berat, depresi atau perlahan tapi pasti mengalami kemunduran fisik dan psikis, hingga tidak bisa beraktivitas seperti sedia kala, kejadian itu sudah pasti membawa pengaruh besar buat yang lain, meski ada yang pura-pura tidak merasa atau pura-pura tidak mau tahu. Kenapa saya katakan ‘pura-pura’ karena hati tidak pernah bisa menipu manusia, tapi manusia bisa menipu diri sendiri dan manusia lainnya. Atmosfer kesedihan, kemarahan, kepahitan, ketakutan, kecemasan, kelelahan, kegetiran, kebencian dan keputusasaan yang beredar secara intensif, mempengaruhi angggota keluarga yang lain.<p><p>Setiap orang punya mekanisme yang berbeda dalam menangkap dan menyikapi tekanan emosi yang dirasakan baik dari dalam diri atau dari luar. Mekanisme yang di peroleh lewat proses belajar dari lingkungan ini membawa persoalan tersendiri ketika pilihan yang ada sangat terbatas dan bahkan tidak sehat seperti istilahnya orang jawa <i>mendem jero</i>, menyembunyikan perasaan, disimpan rapat-rapat supaya tidak kelihatan dari luar, ada pula yang jadi pasrah, seakan nasib sudah menggariskan demikian.<p><p>Memang, jika kita tidak / belum pernah mengakses paradigma lain, melihat dari perspektif lain, situasi ini hanya akan dijadikan sebuah konfirmasi nasib<div id=alrp-slidebox-anchor></div><p>",
				"parent_id" => 10,
				"urgent_rating" => "1"
			],
			[
				"id" => 39,
				"description" => "<p>Kelainan yang muncul pada seorang anak berkaitan erat dengan faktor – faktor yang mempengaruhi  perkembangan mereka. Faktor – faktor tersebut di antaranya adalah :<ol><li>Cetak Biru Biologis ( Biological Birthright )</ol><p>Dalam perjalanannya dapat terjadi kelainan genetis yang lazim dikenal sebagai abnormalitas gen. Abnormalitas ini dapat terjadi ketika kromoson tidak memiliki pasangan ( tunggal ) atau sebagaian kromoson hilang,mengalami duplikasi ( kelipatan ) atau salah ( keluar ) dari tempatnya. Abnormalitas yang paling mudah dikenali adalah sindroma down atau down”s syndrom, yang disebabkan oleh adanya kelebihan kromoson di kromosom 21.<div style=float:right;margin:0></div><ol start=2><li>Genetik Dan Lingkungan</ol><p>Dari semua area dimana pengaruh genetik dan lingkungan saling berinteraksi mempengaruhi seorang anak, maka ada dua aspek yang mengundang perbedaan pendapat paling kontroversial yaitu berkaitan dengan perbedaan jender yaitu perbedaan antara laki-laki dengan perempuan; dan yang kedua adalah berkaitan dengan peranan, sifat-sifat serta asal-usul intelegensi.<ol><li>Perbedaan Gender</ol><p>Sering kita dengar bahwa laki-laki lebih rapuh dibandingkan perempuan, hal ini berlanjut saat mereka dapat bertahan hidup setelah dilahirkan. Laki-laki lebih terbuka dibandingkan perempuan terhadap kemungkinan bermacam-macam kelainan yang sangat luas berfariasi termasuk cerebral palsy, infeksi, keterbelakangan mental dan beberapa kesulitan belajar. Jhon Money (dalam Lamsdown dan Walker, 1996) mengatakan bahwa hormon mengarahkan anak atau individu untuk berperilaku sesuai dengan jenis kelamin, namun pengalaman anak akan mempengaruhi apakah pengaruh hormonal tersebut akan hilang atau diperkuat.<ol><li>Intelegensi</ol><p>Intelegensi adalah kualitas mental yang didasari keberhasilan seseorang di sekolah. Beberapa psikolog mengemukakan bahwa sebenarnya ada dua faktor utama yaitu pertama adalah faktor umum  (general factors), yang mendasari kemampuan intelektual, dan kedua adalah serangkaian kemampuan khusus (spesific abilities). Keberadaan kemampuan umum ini menjelaskan mengapa ada kecenderungan bila seseorang memiliki kemampuan yang baik dalam satu bidang, juga dia baik pada beberapa bidang lain. Dilain pihak gagasan mengenai kemapuan khusus dapat menerangkan mengapa, contohnya, mengapa ada orang-orang yang amat mahir dalam mengadakan negosiasi, namun gagal dalam matematika.<ol><li>Kontrol Sosial</ol><p>Konteks dimana seorang anak atau individu tinggal memegang peranan amat penting karena perubahan-perubahan yang terjadi memberikan pengaruh pada setiap tahap usia aspek dan perkembangan. Bagaimana konteks sosial tersebut berpengaruh pada anak akan dibahas di bawah ini:<ol><li>Keluarga</ol><p>Keluarga adalah konteks pertama yang memperkenalkan anak kepada dunia secara fisik melalui kegiatan bermain dan menjelajah objek-objek yang berada di sekitarnya. Kelekatan dengan orangtua dan saudara kandung biasanya berjalan sepanjang kehidupan dan menjadi model saat membina hubungan dalam dunia yng lebih luas, seperti tetangga, sekolah, dan masyarakat di sekitar tempat kita tinggal.<p>Dalam keluarga, anak belajar menggunakan bahasa, keterampilan-keterampilan tertentu, nilai-nilai sosial dan moral yang berkembang dalam kebudayaan dimana mereka tinggal.<p>Parke dan Burke (1998:dalam Berk, 2005), kehangatan, kebahagiaan atau kepuasan dalam ikatan keluarga meramalkan kesejahteraan psikologis sepanjang tentang perkembangan individu. Sebaliknya, isolasi atau keterasingan dari ikatan keluarga seringkali dihubungkan dengan adanya masalah dalam perkembangan seseorang.<p>Penelitian-penelitian mutakhir memandang keluarga sebagai suatu jejaring dari hubungan yang saling memiliki ketergantungan satu sama lain (interdependent). Bronfenbrenner menyebutnya sebagai suatu sistem yang memiliki pengaruh bidirectional (bidirectional influences), artinya perilaku atau respon dari setiap anggota keluarga dipengaruhi dan saling mempengaruhi anggota keluarga yang lainnya. Pengaruh-pengaruh tersebut dapat bersifat langsung maupun tidak langsung.<ol><li>Pengaruh yang bersifat langsung (direct influences)</ol><p>Perilaku salah seorang anggota keluarga memperkuat bentuk reaksi yang terjalin dengan anggota keluarga lainnya, dan pada gilirannya bentuk reaksi tersebut dapat meningkatkan atau menurunkan kesejahteraan anak. Suatu perilaku terbentuk sebagai reaksi yang diterima dari lingkungan, sementara bagaimana lingkungan bereaksi juga dipengaruhi oleh perilaku yang ditampilkan.<ol><li>Pengaruh yang bersifat tidak langsung</ol><p>Dampak dari hubungan dalam keluarga terhadap perkembangan anak menjadi lebih rumit ketika kita menyadari bahwa hubungan antara dua anggota keluarga dipengaruhi oleh kehadiran orang lain dalam lingkungan mereka, atau Bronfenbrenner (dalam Berk, 2005) menyebutnya sebagai pihak ketiga (Thirt parties).<p>Pihak ketiga dapat menjadi pihak yang memberi dukungan dalam perkembangan. Kehadiran anak diantara kehidupan orangtua juga mempengaruhi hubungan orangtua mereka.<p>Kekuatan saling pengaruh-mempengaruhi dalam keluarga bersifat dinamis dan selalu mengalami perubahan, begitu salah satu anggota keluarga beradaptasi dengan perkembangan yang terjadi pada anggota lain.misalnya ketika seorang anak sudah berhasil menguasai keterampilan yang baru, maka orangtua menyesuaikan cara mereka menghadapi anak sesuai dengan kemampuan baru yang dimiliki oleh anak. Orangtua merubah caranya menghadapi anak sejalan dengan perkembangan anak, sebaliknya perubahan yang terjadi pada orangtua juga mempengaruhi anak dalam berperilaku.<p>Perubahan-perubhaan dalam lingkungan yang muncul bersamaan dengan perkembangan anak juga mempengaruhi cara orangtua mengasuh anaknya.<ol start=2><li>Status Sosial, Ekonomi dan Fungsi Keluarga.</ol><p>Dalam banyak budaya, maka status sosial ekonomi mempengaruhi kapan seseorang anak memutuskan akan menjadi orangtua dan besarnya anggota keluarga. Penelitian-penelitian di Amerika memperlihatkan bahwa orang-orang yang pekerjaannya memerlukan keterampilan tidak terlalu khusus dan khusus misalnya penjaga sesuatu, dll. Cenderung menikah dan memiliki anak lebih cepat (muda) dengan jarak kelahiran anak lebih dekat dan jumlah anak lebih banyak dibandingkan dengan orang-orang yang memiliki pekerjaan kantoran dan profesional. Kedua kelompok ini juga memiliki nilai-nilai dan harapan yang berbeda dalam mengasuh anak-anak mereka.<p>Kondisi kehidupan dalam keluarga dapat membantu kita untuk memahami mengapa keadaan seperti ini dapat muncul. Orangtua dengan status sosial ekonomi lebih rendah seringkali merasa tidak memiliki kekuatan dan tidak memiliki pengaruh saat menjalin hubungan diluar kehidupan rumah atau dalam masyarakat. Namun sebaliknya dengn orangtua yang memiliki sosial ekonomiu lebih tinggi, mereka nampaknya lebih dapat mengontrol kehidupan mereka.<ol start=3><li>Kemiskinan.</ol><p>Kemiskinan membuat kesehatan fisik memburuk, kemampuan kognitif atau kecerdasan berkurang atau tidak berkembang optimal, kemampuan akademis menurun, putus sekolah, gangguan jiwa dan meningkatkan perilaku antisosial atau kenakalan. (Poulton dkk., 2000; Secombe, 2002; dalam Berk, 2005). Selain anak maka stres yang muncul secara terus menerus akibat kemiskinan ini membuat orangtua menjadi depresi, mudah marah, mudah tersinggung, dan pada akhirnya akan mengganggu perkembangan anak.<ol start=4><li>Perbedaan budaya.</ol><p>Masyarakat tempat seorang anak dilahirkan masih memberikan pengaruh yang paling besar. Setiap negara, setiap suku daya dalam suatu negara, memiliki cara-caranya tersendiri dalam memperlakukan seorang bayi dan anak , mereka juga memiliki harapan yang khas. Di satu sisi beberapa ahli menekankan pada adanya faktor genetik yang menyebabkan munculnya perbedaan. Sementara di sisi yang lain lebih menekankan kepada adanya perbedaan pola pengasuhan, mereka melihat bila anak-anak di Afrika ini mendapat perlakuan yang sama seperti anak-anak di Barat, maka mereka akan belajar berjalan dengan kecepatan yang sama.<p>Bila kita cermati, maka di seluruh dunia ini amat banyak perbedaan-perbedaan yang dapat kita amati, mengenai bagaimana cara-cara setiap budaya memperlakukan bayi-bayi yang baru lahir. Hampir semua bangsa, melalui sistem pendidikan di sekolah, secara didasari maupun tidak cenderung menekan anak-anak, agar mereka mematuhi nilai-nilai budaya yang berkembang dalam masyarakatnya. Bila mereka tidak patuh pada nilai-nilai tersebut, maka hukuman atau “label” tertentu akan diberikan pada anak tersebut.<ol start=5><li>Ketangguhan (resiliency).</ol><p>Ketangguhan (resiliency) adalah suatu kemampuan yang dimiliki oleh individu dan dengan kemampuan tersebut, individu mampu bertahan dan berkembang secara sehat serta menjalani kehidupan secara positif dalam situasi yang kurang menguntungkan atau penuh dengan tekanan. Hal lain yang perlu dipahami bahwa ketangguhan itu adalah suatu kemapuan yang dimiliki oleh anak karena adanya proses belajar. Saat seorang anak merasa tidak pasti maka mereka akan melihat kepada dean meminta dukungan kepada orangtuanya dengan tanda-tanda tertentu seperti adanya bahasa tubuh tertentu yang diberikan sebagai dukungan, sehingga mereka dapat berinteraksi dengan tepat. Dengan demikian, interprestasi anak terhadap situasi yang dihadapi dalam kehidupan sehari-hari sebagian besar dipelajari dari bagaiman orangtua berinteraksi terhadap kebutuhan mereka.<p>Penelitian yang panjang dilakukan oleh banyak peneliti untuk melihat faktor-faktor apa yang melindungi seorang anak dari kerusakan yang ditimbulkan sebagai akibat dari lingkungan yang penuh dengan tekanan. Ditemukan adanya empat faktor utama, yaitu:<ol><li>Karakteristik pribadi.</ol><p>Karakteristik bawaan seorang anak dapat mengurangi dampak negatif akibat paparan yang terus menerus dari situasi yang penuh dengan tekanan atau mengarahkan pada keadaan yang lebih buruk. Intelegensi yang tinggi dan bakat-bakat sosial yang bermanfaat merupakan faktor protektif.<ol><li>Pengasuhan yang penuh kehangatan.</ol><p>Hubungan yang dekat dengan paling tidak salah satu orangtua yang penuh dengan kehangatan, meletakkan harapan yang tinggi dan tepat pada anak, memantau kegiatan anak dan menciptakan  lingkungan rumah yang dapat menumbuhkan ketangguhan pada anak. Faktor ini tidak dapat lepas dari karakteristik yang dimiliki oleh anak.<ol><li>Dukungan sosial selain keluarga inti.</ol><p>Contohnya :  Aam memiliki paman  yang senang memperbaiki mobil serta memiliki bengkel kecil, meskipun sederhana namun keluarga paman beserta anaknya yang sebaya dengan Aam dengan tangan terbuka menerima kedatangan Aam setiap sabtu dan minggu ke bengkel mereka yang sederhana yang untuk turut membantu-bantu. Secara tidak didasari, paman dan keluarganya  menjadi model bagi Aam untuk mengatasi permasalahan dalam kehidupan.<ol><li>Masyarakat yang perduli.</ol><p>Kegiatan ekstrakurikuler di sekolah, kelompok keagamaan dan organisasi lainnya mengajarkan keterampilan-keterampilan sosial yang amat penting. Penelitian dalam bidang ketangguhan memperlihatkan hubungan yang komplek antara faktor bawaan dengan lingkungan. Apapun alasannya, maka satu hal yang perlu mendapatkan perhatian penuh adalah bahwa untuk mengoptimalkan perkembangan seorang anak, maka faktor resiko harus diperkecil dan faktor protektif diperkuat.<ol start=6><li>Penanganan.</ol><p>Orangtua tentu saja akan memerlukan bantuan pada ahli bila ternyata anaknya mengalami kelainan. Ada beberapa jenis yang disarankan, sebagai berikut:<ol><li>Penanganan Medis.</ol><p>Penting bagi orangtua mengetahui dengan jelas apa efek samping dari obat yang akan diberikan  pada anak mereka.<ol><li>Terapi Bermain.</ol><p>Terapi bermain adalah salah satu bentu psikoterapi yang digunakan bagi anak-anak lebih kecil untuk mengatasi keterbatasan verbal mereka.<ol><li>Terapi Perilaku.</ol><p>Adalah mengajarkan anak perilaku baru dengan cara mengubah lingkungan, mengajarkan keterampilan baru atau mengubah proses kognitif dan emosional anak.<ol><li>Terapi Keluarga.</ol><p>Dalam terapi ini semua anggota keluarga yang terkait, bukan hanya anak, bertemu bersama-sama dengan terapis dengan tujuan memecahkan masalah mereka.<ol><li>Fisioterapis.</ol><p><p>Bagi anak-anak dengan kelainan yang memerlukan fungsi anggota tubuh meskipun kelainan-kelainan pada anak seringkali muncul bukan karena penyebab tunggal, maka kelainan pada anak harus didefinisikan dalam pemahaman penyimpang dari perilaku normal dan dibandingkan dengan pencapaian yang biasa dicapai oleh anak-anak lain dalam rentang usia yang sama. (Sumber: www.irwansahaja.blogspot.com)<div id=alrp-slidebox-anchor></div><p>",
				"parent_id" => 11,
				"urgent_rating" => "1"
			],
			[
				"id" => 40,
				"description" => "<p><p><strong>Permasalahan remaja</strong>.<div style=float:right;margin:0></div><p>Banyak orang tua yang mengeluh, mengalami kesulitan berkomunikasi dengan anak remajanya, mengapa ? Padahal sebelumnya, semuanya lancar-lancar saja. Tetapi begitu anak menginjak usia remaja,   konflik, “breng” atau ketidak cocokan sering muncul diantara anak remaja dan orang tua. Orang tua tidak habis pikir, mengapa hal ini bisa terjadi, siapa yang salah ?.<p>Mengapa perilaku remaja menjadi menyulitkan?. Masa remaja adalah masa transisi atau periode dalam kehidupan manusia yang mengalami beberapa perubahan yang terjadi secara bersamaan. Ketidak mampuan remaja mengatasi kondisi menekan karena perubahan tersebut, sering mengakibatkan munculnya gangguan dalam perilakunya. Perubahan yang terjadi pada anak remaja, mencakup perubahan: fisik, kognitif, sosial, dan emosional.<p>Perubahan fisik terjadi sebagai akibat masaknya hormon testosteron pada laki-laki dan estrogen pada perempuan. Remaja perempuan ditandai dengan menstruasi pertama kalinya (<em>menarche</em>) dan remaja laki-laki dengan mimpi basah (<em>pollutio</em>)   Kemasakan hormon ini berpengaruh pada kematangan organ-organ reproduksi dan perkembangan ciri-ciri seks sekunder.<p>Perkembangan kognisi remaja mencapai tahap formal operational yang memungkinkan remaja berpikir secara abstrak dan komplek, sehingga remaja mampu mengambil keputusan untuk dirinya.<p>Perkembangan sosial, ditunjukkan adanya keinginan yang kuat pada remaja untuk melepaskan diri dari ikatan dengan keluarga dan lebih melibatkan diri dengan teman sebayanya. Hal ini dilakukan remaja dalam usahanya untuk menemukan identitas dirinya, mendapatkan peran sosial sebagai pribadi dewasa yang mandiri.<p>Perkembangan emosi, ditandai dengan emosi yang tidak stabil dan penuh gejolak. Perubahan emosi ini erat kaitannya dengan kemasakan hormon yang terjadi pada remaja.<p>Dari sedikit uraian diatas dapat dipahami bahwa perubahan perkembangan yang terjadi pada remaja, sering mengakibatkan remaja mengalami keadaan tertekan (stress). Kemampuan remaja mengatasi berbagai problem, sehingga tidak stres sangat ditentukan oleh seberapa besar dukungan dari keluarga terutama orang tuanya. Makin besar dukungan yang diperoelh remaja dalam mengatasi berbagai problemnya, makin rendah kemungkinannya remaja mengalami stres sehingga terhindar dari gangguan dalam perilakunya. Komunikasi yang bagaimanakah dengan remaja, agar bisa efektif dan harmonis, sehingga dapat membantu proses perkembangan pribadinya menuju kedewasaan.<p><h1>Komunikasi dengan remaja</h1><p>Komunikasi, baik verbal maupun nonverbal pada dasarnya merupakan salah satu aspek yang penting dalam proses pendidikan anak, juga merupakan sumber-sumber rangsangan untuk membentuk kepribadian anak. Apabila komunikasi antara orang tua dan anak dapat berlangsung dengan baik, maka masing-masing pihak dapat saling memberi dan menerima informasi, perasaan dan pendapat sehingga dapat diketahui apa yang diinginkan, dan konflikpun dapat dihindari. Keterbukaan melalui komunikasi ini akan menumbuh kembangkan bahwa anak dapat diterima dan dihargai sebagai manusia. Sebaliknya bila tidak ada komunikasi yang baik maka besar kemungkinan kondisi kesehatan mentalnya mengalami hambatan. Dari penelitian diperoleh bukti adanya kecenderungan psikopatologi pada anak, disebabkan karena adanya hambatan dalam proses komunikasi antara anak orang tua, terutama ibunya.<p>Dalam proses perkembangan kepribadian anak, orang tua juga berperan sebagai pendidik yaitu bertugas untuk menanamkan nilai-nilai moral dan kehidupan yang akan menjadi landasan yang kuat bagi bagi tumbuhnya jiwa dan pribadi anak. Keluarga merupakan wahana bagi anak untuk menimba berbagai ilmu pengetahuan. Melalui pola asuh orang tua anak mengenal nilai-nilai moral, mengenal tindakan yang baik dan yang buruk sebelum ia mengembangkan interaksi sosial di luar lingkungan keluarganya. Keberhasilan orang tua dalam mengembangkan nilai-nilai moral bukan disebabkan karena otoritasnya tetapi lebih pada bagaimana mengkomunikasikan nilai-nilai tersebut yang disesuaikan dengan tingkat perkembangan intelektualnya.   Kenyataannya banyak orang tua yang kurang dapat berkomunikasi dengan anaknya, terutama dengan remaja. Mengapa ?. Banyak orang tua kurang menyadari bahwa respon (verbal maupun nonverbal) dalam menanggapi anaknya, menyebabkan hambatan dalam berkomunikasi.<p>Respon yang sering diutarakan orang tua pada anaknya yang menyebabkan terputusnya komunikasi, antara lain adalah: <span style=text-decoration:underline>memerintah</span>; <span style=text-decoration:underline>mengancam-memperingatkan</span>; <span style=text-decoration:underline>mendesak-memberi kotbah</span>; <span style=text-decoration:underline>menasehati-menyelesaikan masalah</span>; <span style=text-decoration:underline>memberi kuliah-mengajari</span>; <span style=text-decoration:underline>menilai-mengkritik-tidak setuju-menyalahkan</span>; <span style=text-decoration:underline>mencemooh-membuat malu</span>; <span style=text-decoration:underline>menyelidiki-mengusut</span>; <span style=text-decoration:underline>menghindar-mengalihkan perhatian-menertawakan</span>; dan <span style=text-decoration:underline>memuji-menyetujui</span>;<p>Ungkapan-ungkapan tersebut diatas membuat anak: <span style=text-decoration:underline>menghentikan pembicaraaan</span>; <span style=text-decoration:underline>mempertahankan diri</span>; <span style=text-decoration:underline>menyerang-berdebat</span>; <span style=text-decoration:underline>merasa rendah diri</span>; <span style=text-decoration:underline>benci dan marah</span>; <span style=text-decoration:underline>merasa bersalah;</span> <span style=text-decoration:underline>merasa diperlakukan</span> seperti anak kecil; <span style=text-decoration:underline>merasa tidak dimengerti</span>; <span style=text-decoration:underline>merasa perasaan-perasaannya tidak dibenarkan</span>; <span style=text-decoration:underline>merasa sedang diinterogasi</span>. Rasanya semua kriteria tersebut sering dilakukan orang tua dalam otoritasnya sebagai orang yang harus dipatuhi.<p>Bagaimanakah sebaiknya ? Agar komunikasi dengan anak tidak terputus perlu kiranya orang tua memahami cara berkomunikasi yang efektif, antara lain:<ol><li>Membuka pintu, yaitu ungkapan orang tua yang memungkinkan anak untuk membicarakan lebih banyak, mendorong anak untuk mendekat dan mencurahkan isi hatinya. Dan yang penting menumbuhkan pada anak rasa diterima dan dihargai. Beberapa pernyataan yang bersifat membuka antara lain: “Saya mengerti.. “ Ya..hm.. “Oh ya..” Coba ceritakan lebih banyak..”ibu koq tertarik ya..”Kelihatannya kamu seneng ya..<li>Mendengar Aktif, kemampuan orang tua untuk menguraikan perasaan anak dengan tepat, jadi orang tua mengerti perasaan anak, yang dikirim anak lewat bahasa verbal maupun nonverbalnya. Keuntungan dari mendengar aktif, anatara lain: mendorong terjadinya katarasis; menolong anak tidak takut terhadap perasaan (positif-negatif); mengembangkan hubungan yang sangat dengan orang tua; memudahkan anak memecahkan masalahnya; meningkatkan kemampuan anak untuk mendengar pendapat orang tua; meningkatkan tanggung jawab anak<li>Komunikasi dengan empatik, prinsip Komunikasi Empatik: “Berusaha mengerti lebih dahulu, baru dimengerti” . Dalam mendengarkan empatik, kita sebagai orang tua berusaha masuk ke dalam kerangka pikiran, perasaan anak remaja kita. Kita sebagai orang tua, tidak hanya mendengar dengan telinga, tapi dengan mata dan hati. Hati kita merasakan, memahami, menyelami dan berintuisi dengan permasalahan yang sedang dialami oleh anak remaja kita. Mata kita mengamati pesan-pesan nonverbal yang diekspresikan oleh anak kita. Kita menggunakan otak kanan sekaligus otak kiri. Mendengar Empatik adalah mendengar untuk mengerti baik secara emosional sekaligus intelektual, bukan dengan maksud untuk menjawab, mengendalikan atau memanipulasi orang lain.</ol><p>Memang tidak mudah untuk dapat menjalin komunikasi yang positif dengan anak remaja kita yang sedang mengalami berbagai gejolak dalam dirinya. Tetapi tidak berarti tidak bisa. Pemahaman dan pengertian kita sebagai orang tua atas kesulitan-kesulitan yang sedang dialami anak remaja kita, merupakan hal sangat penting. Anak remaja kita membutuhkan pengertian dari orangtuanya bahwa ia sedang mengalami proses perubahan.Sikap ini akan mendukung terjalinnya komunikasi yang positif dengan anak remaja kita. (Sofia Retnowati/<cite class=_Rm>sofia-psy.staff.ugm.ac.id</cite>)<div id=alrp-slidebox-anchor></div><p>",
				"parent_id" => 12,
				"urgent_rating" => "1"
			],
			[
				"id" => 41,
				"description" => "<p>Keluarga merupakan lingkungan yang pertama dan utama bagi perkembangan individu. Sejak kecil anak tumbuh dan berkembang dalam lingkungan keluarga. Dalam hal ini, peranan orang tua menjadi amat sentral dan sangat besar pengaruhnya bagi pertumbuhan dan perkembangan anak, baik secara langsung maupun tidak langsung.<p><div style=float:right;margin:0></div><p>Slater (Elizabeth Hurlock 1974:353) mengungkapkan tentang empat <strong>pola dasar hubungan orang tua-anak </strong>yang bipolar beserta pengaruhnya terhadap kepribadian anak, yaitu :<p>1. <em>tolerance-intolerance</em><p>Pengaruh yang mungkin dirasakan dari adanya sikap orang tua yang penuh toleransi, memungkinkan anak untuk dapat memiliki ego yang kuat. Sebaliknya, sikap tidak toleran cenderung akan menghasilkan ego yang lemah pada diri anak.<p>2. <em>permissiveness – strictness</em><p>Relasi orang tua-anak yang permisif dapat membentuk menunjang proses pembentukan kontrol intelektual anak, namun sebaliknya kekerasan berdampak pada pembentukan pribadi anak yang impulsif.<p>3. <em>involvement – detachment</em><p>Seorang anak cenderung akan menjadi ekstrovert, manakala orang tua dapat menunjukkan sikap mau terlibat dan peduli . Sebaliknya, sikap orang tua yang terlalu membiarkan berdampak terhadap pembentukan pribadi anak yang introvert.<p>4. <em>warmth – coldness</em><p><strong>Hubungan orang tua-anak yang diwarnai kehangatan</strong> memungkinkan anak memiliki kemampuan untuk dapat melibatkan diri dengan lingkungan sosialnya. Sebaliknya, <strong>hubungan orang tua-anak yang dingin</strong> akan menyebabkan anak senantiasa menarik diri dari lingkungan sosialnya.<p><p><em>Sikap dan perlakuan orang tua yang toleran, permisif, turut terlibat dan penuh kehangatan merupakan manifestasi dari penerimaan orang tua terhadap anak. Sedangkan sikap dan perlakuan orang tua yang tidak toleran, keras, membiarkan dan dingin merupakan bentuk penolakan terhadap anak.</em><p>Dalam upaya memenuhi kebutuhan harga diri anak, orang tua seyogyanya dapat memberikan kesempatan kepada anak untuk belajar bertanggung jawab dan menentukan dirinya sendiri. Di sini, orang tua hanya berperan sebagai fasilitator, yang berupaya untuk memberikan kesempatan yang luas kepada anak dalam meraih harga dirinya melalui pengembangan minat dan kecakapannya.<p><p>Buss (1973) mengemukakan bahwa <em>kasih sayang orang tua yang tulus (unconditional parental love) merupakan faktor penting yang dapat membentuk inti (core) dari harga diri anak.</em><p>Berbagai studi yang dilakukan menunjukkan bahwa seorang anak menjadi anti demokratis, <em>prejudice</em>, dan memiliki sikap permusuhan dari adanya sikap perlakuan orang tua yang keras (Hoffman, 1960; Harris, Gough & Martin, 1950; Lyle & Levitt, 1955).<p>Studi yang dilakukan Radke (1946) menunjukkan bahwa anak merasa sedih, kurang bahagia, dan merasa sakit dengan adanya perlakuan orang tua yang disertai hukuman fisik. Sementara itu, studi yang dilakukan Symonds (1939) menyimpulkan bahwa : “… <em>accepted children engaged predominantly in society behaviors, whereas rejected children menifested a number unacceptable behaviors</em>.” (<span class=\"author vcard\">Akhmad Sudrajat/akhmadsudrajat.<a href=http://wordpress.org rel=nofollow target=_blank>wordpress</a>.com)</span><div id=alrp-slidebox-anchor></div><p>",
				"parent_id" => 13,
				"urgent_rating" => "1"
			]
        ]);

		for ($i = 14; $i <= 36; $i++) {
			DB::table('suggestions')->insert([
				[
					"id" => (42 + $i - 14),
					"description" => "<p>Setiap manusia dewasa memiliki tugas perkembangan, salah satunya adalah menikah. Tak satupun manusia yang merencanakan perceraian saat baru melangsungkan pernikahan. Namun, tidak bisa dipungkiri kalau perceraian dapat terjadi saat sepasang suami istri tidak dapat lagi menyatukan visi dalam membangun bahtera rumah tangga. Saat perceraian terjadi, bukan hanya pasangan suami istri yang menerima dampaknya. Bila mereka telah memiliki anak, anaklah yang menjadi korban. Kebingungan anak atas perpisahan orang tuanya serta rasa bersalah saat salah satu orang tua meninggalkannya dapat berakibat buruk bagi perkembangan psikologis anak.<p><div style=float:right;margin:0></div><p class=entry-title>Dampak buruk yang dapat terjadi pada anak “broken home” terlihat pada salah satu kasus bunuh diri seorang siswa SMP yang baru-baru ini terjadi (http://www.kaskus.co.id/thread/54bae71c32e2e6895e8b4569/korban-broken-home-pelajar-ini-bunuh-diri-dalam-lemari/). Tidak ada niat untuk menghakimi siapapun, tulisan ini hanya berusaha mengingatkan bagi para orang tua yang mengalami perceraian maupun remaja yang orang tuanya bercerai.<p class=entry-title><p class=entry-title>Dampak perceraian pada anak diuraikan sebagai berikut:<p class=entry-title><p class=entry-title>1. Depresi<p class=entry-title>Awalnya, anak merasa tidak aman (insecure) karena ada salah satu orang tua yang tidak lagi tinggal bersamanya, lalu muncul rasa sedih, kesepian. Bisa saja anak merasa bersalah atas kepergian salah satu orang tuanya. Bila kondisi ini tidak cepat ditangani, kemungkinan besar anak bisa menjadi depresi akibat perceraian orang tuanya. Depresi adalah salah satu gejala yang paling umum terlihat pada anak, ketika orang tua mereka berpisah. Anak akan mulai mengisolasi diri dalam dunia mereka dan menjauhi hal-hal yang biasa dilakukan oleh anak seusia mereka, bahkan hingga bunuh diri.<p class=entry-title><p class=entry-title>2. Cenderung berperilaku kasar<p>Perilaku ini muncul karena anak mulai merasa seolah-olah dirinya ditipu oleh orang tuanya. Selain itu, dia juga bersikap demikian untuk menarik perhatian kedua orang tuanya. Dia berharap bahwa apa yang dilakukannya bisa kembali mempersatukan keluarganya.<p><div>3. Sulit fokus</div><p>Perceraian memberi dampak buruk pada performa anak, terutama untuk prestasinya di sekolah. Itu dikarenakan dia terus memikirkan tentang perceraian orang tuanya, sehingga dia tidak dapat fokus pada hal lain. Jika terus dibiarkan, prestasi anak akan terus menurun dan bahkan hancur.<p><p>4. Kehilangan rasa hormat<p><b></b>Hal ini sering terjadi pada anak-anak yang beranjak dewasa atau masih remaja. Perceraian itu membuat mereka kehilangan rasa hormat mereka terhadap orang tua. Mereka bahkan berani menyalahkan orang tua mereka, karena dinilai telah merusak kehidupan mereka. Selain itu, anak juga acapkali dijadikan bahan lelucon di sekolahnya karena masalah perceraian orang tua. Akibatnya, anak pun melampiaskan semua kemarahannya kepada orang tuanya.<p><p>5. Memilih jalan yang salah<p>Sebagian anak yang menjadi korban perceraian memutuskan (atau terpaksa) untuk memilih jalan yang salah, termasuk penyalahgunaan narkoba dan alkohol, pelecehan seks, dan hal buruk lainnya. Mereka kadang-kadang melakukannya sebagai bentuk pelarian terhadap kenyataan.<p><p>Inilah dampak buruk perceraian pada anak. Meski tidak semua anak terjerumus ke jalan yang salah karena perceraian, orang tua harus lebih berhati-hati dalam memberi pengertian ke anak. Jika perceraian menjadi jalan satu-satunya untuk masalah Anda, pikirkan bagaimana nasib anak ke depannya.<p><p>Dampak buruk perceraian bagi anak dapat diminimalisir dengan beberapa cara:<p><p>1. Melibatkan anak dalam diskusi mengenai persoalan yang dihadapi orang tua (dengan bahasa yang dipahami oleh anak). Jelaskan bahwa orang tuanya tidak dapat lagi tinggal bersama namun tetap menyayangi sang anak. Sehingga, anak tidak merasa bersalah dengan perpisahan orang tuanya.<p><p>2. Tetap menjalin komunikasi dengan anak. Meskipun tidak bisa seintensif saat belum bercerai, setidaknya, pastikan bisa tepati janji terhadap anak. Mengingkari janji terhadap anak dapat menyebabkan anak merasa tidak diinginkan lagi oleh orang tuanya.<p><p>3. Jangan saling menjelekkan mantan pasangan pada anak. Meskipun perceraian terjadi disebabkan karena hal yang buruk, namun, upayakan untuk tetap bersikap saling menghargai. Hal ini dapat membuat anak tetap menjaga rasa hormatnya pada orang tuanya. Ingat, tak ada bekas anak, Seburuk apapun mantan pasangan, ia tetaplah salah satu orang tuanya.<p><p>4. Rasa kecewa terhadap perceraian orang tua, dapat hilang perlahan saat anak bisa melihat dan merasakan orang tuanya tetap menyayanginya, dan tetap menjalin komunikasi yang hangat dengan sang anak. Tanamkan pada anak, bahwa meskipun orang tuanya tidak lagi bersama, dan anak tidak tinggal bersama dengannya, namun anak tetap memiliki orang tua yang utuh yang tetap dekat dan sayang padanya.<p><p>5. Tetap arahkan anak dalam bergaul. Jaga komunikasi dan keterbukaan dengan anak. Selalu libatkan anak saat mengambil keputusan, termasuk saat orang tua hendak menikah lagi dengan orang lain. Mendengarkan pendapat dan berdiskusi mengenai kehidupan dapat membuat anak tetap merasa dianggap ada.<p>(ZF/ Berbagai Sumber)<div id=alrp-slidebox-anchor></div><p>",
					"parent_id" => $i,
					"urgent_rating" => "1"
				]
			]);
		}
    }

	private function seedSuggestionCounselor()
	{
		DB::table('suggestion_counselor')->delete();

		for ($i = 37; $i <= 64; $i++) {
			DB::table('suggestion_counselor')->insert([
				[
					"suggestion_id" => $i,
					"counselor_id" => rand(1, 2)
				]
			]);
		}
	}

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->seedSuggesstion();
		$this->seedSuggestionCounselor();
	}
}
