<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('articles')->insert([

            'title' => "<strong>Tips Memilih Keramik yang Cocok untuk Rumah</strong>",
            'content' => "\tKeramik merupakan salah satu material yang sering digunakan untuk melapisi lantai, dinding, atau bagian lain dari rumah. Keramik memiliki berbagai macam jenis, ukuran, warna, dan motif yang bisa dipilih sesuai dengan kebutuhan dan keinginan.
            Dalam memilih keramik, ada beberapa hal yang perlu diperhatikan agar keramik yang dipilih dapat bertahan lama dan memberikan tampilan yang indah. Berikut adalah beberapa tips dalam memilih keramik yang cocok untuk rumah:
            \n<strong>1. Memperhatikan material keramik</strong>
            Terdapat dua jenis material keramik yang umum digunakan, yaitu keramik berglazur dan ubin porselen atau homogenous tile. Keramik berglazur memiliki permukaan yang halus dan mengkilap, sedangkan ubin porselen memiliki permukaan yang lebih kasar dan tidak mudah tergores.
            Keramik berglazur lebih cocok untuk digunakan di ruangan dengan intensitas aktivitas yang rendah, seperti ruang keluarga atau kamar tidur. Sedangkan ubin porselen lebih cocok untuk digunakan di ruangan dengan intensitas aktivitas yang tinggi, seperti kamar mandi atau dapur.
            \n<strong>2. Memilih warna dan motif keramik</strong>
            Warna dan motif keramik dapat mempengaruhi tampilan ruangan. Warna-warna cerah dapat membuat ruangan terlihat lebih luas dan lapang, sedangkan warna-warna gelap dapat membuat ruangan terlihat lebih elegan dan mewah.
            Motif keramik juga dapat memberikan kesan yang berbeda-beda. Motif geometris dapat memberikan kesan modern dan minimalis, sedangkan motif floral dapat memberikan kesan klasik dan elegan.
            \n<strong>3. Memilih ukuran keramik</strong>
            Ukuran keramik juga dapat mempengaruhi tampilan ruangan. Keramik berukuran besar dapat membuat ruangan terlihat lebih luas dan lapang, sedangkan keramik berukuran kecil dapat membuat ruangan terlihat lebih dinamis dan menarik.
            Untuk ruangan yang sempit, sebaiknya gunakan keramik berukuran kecil agar ruangan terlihat lebih luas. Sedangkan untuk ruangan yang luas, bisa menggunakan keramik berukuran besar agar ruangan terlihat lebih elegan.
            \n<strong>4. Mempertimbangkan tekstur keramik</strong>
            Tekstur keramik juga perlu diperhatikan, terutama untuk keramik yang digunakan di ruangan yang basah, seperti kamar mandi atau dapur. Keramik dengan tekstur kasar dapat memberikan daya cengkeram yang baik sehingga tidak mudah licin.
            \n<strong>5. Melakukan survei harga</strong>
            Harga keramik juga perlu diperhatikan. Ada berbagai macam merek dan jenis keramik yang tersedia di pasaran dengan harga yang bervariasi. Pilihlah keramik yang berkualitas dengan harga yang sesuai dengan budget.
            Dengan mengikuti tips-tips di atas, Anda dapat memilih keramik yang cocok untuk rumah Anda. Keramik yang tepat dapat membuat rumah Anda terlihat lebih indah dan nyaman.",
            'image' => "image/Article_Keramic.png"
        ]);

        DB::table('articles')->insert([

            'title' => "<strong>Tips Memilih Closet yang Cocok untuk Rumah</strong>",
            'content' => "\tCloset merupakan salah satu perlengkapan kamar mandi yang penting. Closet yang tepat dapat memberikan kenyamanan dan kemudahan dalam menggunakan kamar mandi.
            Dalam memilih closet, ada beberapa hal yang perlu diperhatikan agar closet yang dipilih dapat bertahan lama dan memberikan kenyamanan. Berikut adalah beberapa tips dalam memilih closet yang cocok untuk rumah:
            \n<strong>1. Mempertimbangkan ukuran kamar mandi</strong>
            Closet yang tersedia di pasaran memiliki berbagai macam ukuran. Pilihlah closet yang ukurannya sesuai dengan ukuran kamar mandi Anda. Closet yang terlalu besar dapat membuat kamar mandi terlihat sempit, sedangkan closet yang terlalu kecil dapat membuat Anda merasa tidak nyaman.
            \n<strong>2. Memilih jenis closet</strong>
            Ada dua jenis closet yang umum digunakan, yaitu closet jongkok dan closet duduk. Closet jongkok lebih hemat tempat, sedangkan closet duduk lebih nyaman digunakan.
            \n<strong>3. Memperhatikan fitur closet</strong>
            Closet yang tersedia di pasaran memiliki berbagai macam fitur. Pilihlah closet yang memiliki fitur yang sesuai dengan kebutuhan Anda. Fitur-fitur yang umum terdapat pada closet antara lain:
            Flush: sistem pembersihan closet, ada dua jenis flush yang umum digunakan, yaitu single flush dan dual flush.
            Seat: dudukan closet, ada dua jenis seat yang umum digunakan, yaitu soft close seat dan non soft close seat.
            Bidet: fitur tambahan yang dapat digunakan untuk membersihkan area intim.
            \n<strong>4. Memilih bahan closet</strong>
            Closet yang tersedia di pasaran terbuat dari berbagai macam bahan, antara lain keramik, porselen, dan plastik. Bahan keramik dan porselen lebih tahan lama dan mudah dibersihkan, sedangkan bahan plastik lebih ringan dan mudah dipindahkan.
            \n<strong>5. Melakukan survei harga</strong>
            Closet yang tersedia di pasaran memiliki harga yang bervariasi. Pilihlah closet yang berkualitas dengan harga yang sesuai dengan budget.
            Dengan mengikuti tips-tips di atas, Anda dapat memilih closet yang cocok untuk rumah Anda. Closet yang tepat dapat membuat kamar mandi Anda terlihat lebih rapi dan bersih.
            Berikut adalah beberapa tips tambahan dalam memilih closet yang cocok untuk rumah:
            Jika Anda memiliki anak kecil, pilihlah closet yang memiliki dudukan yang rendah agar anak Anda dapat menggunakan closet dengan mudah.
            Jika Anda memiliki mobilitas yang terbatas, pilihlah closet yang mudah dibersihkan dan tidak memerlukan perawatan yang rumit.
            Jika Anda memiliki gaya hidup yang minimalis, pilihlah closet yang memiliki desain yang minimalis dan tidak memiliki banyak fitur.
            \nSemoga tips-tips di atas dapat membantu Anda dalam memilih closet yang cocok untuk rumah.",
            'image' => "image/Article_Closet.png"
        ]);

        DB::table('articles')->insert([

            'title' => "<strong>Tips Memilih Wastafel yang Cocok untuk Rumah</strong>",
            'content' => "\tWastafel merupakan salah satu perlengkapan kamar mandi yang penting. Wastafel yang tepat dapat memberikan kenyamanan dan kemudahan dalam menggunakan kamar mandi.
            Dalam memilih wastafel, ada beberapa hal yang perlu diperhatikan agar wastafel yang dipilih dapat bertahan lama dan memberikan kenyamanan. Berikut adalah beberapa tips dalam memilih wastafel yang cocok untuk rumah:
            \n<strong>1. Mempertimbangkan ukuran kamar mandi</strong>
            Wastafel yang tersedia di pasaran memiliki berbagai macam ukuran. Pilihlah wastafel yang ukurannya sesuai dengan ukuran kamar mandi Anda. Wastafel yang terlalu besar dapat membuat kamar mandi terlihat sempit, sedangkan wastafel yang terlalu kecil dapat membuat Anda merasa tidak nyaman.
            \n<strong>2. Memilih jenis wastafel</strong>
            Ada dua jenis wastafel yang umum digunakan, yaitu wastafel tanam dan wastafel gantung. Wastafel tanam lebih mewah dan elegan, sedangkan wastafel gantung lebih hemat tempat.
            \n<strong>3. Memperhatikan fitur wastafel</strong>
            Wastafel yang tersedia di pasaran memiliki berbagai macam fitur. Pilihlah wastafel yang memiliki fitur yang sesuai dengan kebutuhan Anda. Fitur-fitur yang umum terdapat pada wastafel antara lain:
            Drainase: sistem pembuangan air dari wastafel, ada dua jenis drainase yang umum digunakan, yaitu drainase biasa dan drainase lambat.
            Lubang keran: jumlah lubang keran yang terdapat pada wastafel.
            Kabinet: kabinet yang dapat digunakan untuk menyimpan barang-barang di bawah wastafel.
            \n<strong>4. Memilih bahan wastafel</strong>
            Wastafel yang tersedia di pasaran terbuat dari berbagai macam bahan, antara lain keramik, porselen, stainless steel, dan batu alam. Bahan keramik dan porselen lebih tahan lama dan mudah dibersihkan, sedangkan bahan stainless steel dan batu alam lebih mewah dan elegan.
            \n<strong>5. Melakukan survei harga</strong>
            Wastafel yang tersedia di pasaran memiliki harga yang bervariasi. Pilihlah wastafel yang berkualitas dengan harga yang sesuai dengan budget.
            Dengan mengikuti tips-tips di atas, Anda dapat memilih wastafel yang cocok untuk rumah Anda. Wastafel yang tepat dapat membuat kamar mandi Anda terlihat lebih rapi dan bersih.
            Berikut adalah beberapa tips tambahan dalam memilih wastafel yang cocok untuk rumah:
            Jika Anda memiliki anak kecil, pilihlah wastafel yang memiliki permukaan yang halus dan tidak mudah tergores.
            Jika Anda memiliki mobilitas yang terbatas, pilihlah wastafel yang memiliki desain yang minimalis dan tidak memiliki banyak fitur.
            Jika Anda memiliki gaya hidup yang minimalis, pilihlah wastafel yang memiliki desain yang minimalis dan tidak memiliki banyak fitur.
            \nSemoga tips-tips di atas dapat membantu Anda dalam memilih wastafel yang cocok untuk rumah.",
            'image' => "image/Article_Wastafel.png"
        ]);
    }
}
