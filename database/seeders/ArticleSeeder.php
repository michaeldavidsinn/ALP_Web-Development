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

            'title' => "Tips Memilih Keramik yang Cocok untuk Rumah",
            'content' => "Keramik merupakan salah satu material yang sering digunakan untuk melapisi lantai, dinding, atau bagian lain dari rumah. Keramik memiliki berbagai macam jenis, ukuran, warna, dan motif yang bisa dipilih sesuai dengan kebutuhan dan keinginan.

            Dalam memilih keramik, ada beberapa hal yang perlu diperhatikan agar keramik yang dipilih dapat bertahan lama dan memberikan tampilan yang indah. Berikut adalah beberapa tips dalam memilih keramik yang cocok untuk rumah:

            1. Memperhatikan material keramik

            Terdapat dua jenis material keramik yang umum digunakan, yaitu keramik berglazur dan ubin porselen atau homogenous tile. Keramik berglazur memiliki permukaan yang halus dan mengkilap, sedangkan ubin porselen memiliki permukaan yang lebih kasar dan tidak mudah tergores.

            Keramik berglazur lebih cocok untuk digunakan di ruangan dengan intensitas aktivitas yang rendah, seperti ruang keluarga atau kamar tidur. Sedangkan ubin porselen lebih cocok untuk digunakan di ruangan dengan intensitas aktivitas yang tinggi, seperti kamar mandi atau dapur.

            2. Memilih warna dan motif keramik

            Warna dan motif keramik dapat mempengaruhi tampilan ruangan. Warna-warna cerah dapat membuat ruangan terlihat lebih luas dan lapang, sedangkan warna-warna gelap dapat membuat ruangan terlihat lebih elegan dan mewah.

            Motif keramik juga dapat memberikan kesan yang berbeda-beda. Motif geometris dapat memberikan kesan modern dan minimalis, sedangkan motif floral dapat memberikan kesan klasik dan elegan.

            3. Memilih ukuran keramik

            Ukuran keramik juga dapat mempengaruhi tampilan ruangan. Keramik berukuran besar dapat membuat ruangan terlihat lebih luas dan lapang, sedangkan keramik berukuran kecil dapat membuat ruangan terlihat lebih dinamis dan menarik.

            Untuk ruangan yang sempit, sebaiknya gunakan keramik berukuran kecil agar ruangan terlihat lebih luas. Sedangkan untuk ruangan yang luas, bisa menggunakan keramik berukuran besar agar ruangan terlihat lebih elegan.

            4. Mempertimbangkan tekstur keramik

            Tekstur keramik juga perlu diperhatikan, terutama untuk keramik yang digunakan di ruangan yang basah, seperti kamar mandi atau dapur. Keramik dengan tekstur kasar dapat memberikan daya cengkeram yang baik sehingga tidak mudah licin.

            5. Melakukan survei harga

            Harga keramik juga perlu diperhatikan. Ada berbagai macam merek dan jenis keramik yang tersedia di pasaran dengan harga yang bervariasi. Pilihlah keramik yang berkualitas dengan harga yang sesuai dengan budget.

            Dengan mengikuti tips-tips di atas, Anda dapat memilih keramik yang cocok untuk rumah Anda. Keramik yang tepat dapat membuat rumah Anda terlihat lebih indah dan nyaman.",
            'image' => "image1"
        ]);

        DB::table('articles')->insert([

            'title' => "title2",
            'content' => "content2",
            'image' => "image2"
        ]);

        DB::table('articles')->insert([

            'title' => "title3",
            'content' => "content3",
            'image' => "image3"
        ]);
    }
}
