<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('TheLoaiTableSeeder');
        $this->call('TacGiaTableSeeder');
        $this->call('NXBTableSeeder');
        $this->call('SanPhamTableSeeder');
        $this->call('KhachHangTableSeeder');
        $this->call('HinhThucThanhToanTableSeeder');
        $this->call('DonHangTableSeeder');
        $this->call('CTDonHangTableSeeder');

    }
}

class TheLoaiTableSeeder extends Seeder {

    public function run()
    {
        DB::table('the_loais')-> delete();

        DB::table('the_loais')->insert([
            'tentl'=>"Trinh Thám",
            'alias'=>"trinh-tham",
            'trangthai'=>1
        ]);

        DB::table('the_loais')->insert([
            'tentl'=>"Kinh Tế",
            'alias'=>"kinh-te",
            'trangthai'=>1
        ]);

        DB::table('the_loais')->insert([
            'tentl'=>"Thiếu Nhi",
            'alias'=>"thieu-nhi",
            'trangthai'=>1
        ]);

        DB::table('the_loais')->insert([
            'tentl'=>"Tâm Lý Học",
            'alias'=>"tam-ly-hoc",
            'trangthai'=>1
        ]);

        DB::table('the_loais')->insert([
            'tentl'=>"Truyện Tranh",
            'alias'=>"truyen-tranh",
            'trangthai'=>1
        ]);
    }
}

class TacGiaTableSeeder extends Seeder{

    public function run(){

        DB::table('tac_gias')->delete();

        DB::table('tac_gias')->insert([
            'tentg'=>"Agatha Christie",
            'ngaysinh'=>"1890-09-15",
            'gioitinh'=>"0",
            'alias'=>"agatha-christie",
            'trangthai'=>1
        ]);

        DB::table('tac_gias')->insert([
            'tentg'=>"Soji Shimada",
            'ngaysinh'=>"1948-10-12",
            'gioitinh'=>"1",
            'alias'=>"soji-shimada",
            'trangthai'=>1
        ]);

        DB::table('tac_gias')->insert([
            'tentg'=>"Lôi Mễ",
            'ngaysinh'=>"1948-10-12",
            'gioitinh'=>"1",
            'alias'=>"loi-me",
            'trangthai'=>1
        ]);

        DB::table('tac_gias')->insert([
            'tentg'=>"George S. Clason",
            'ngaysinh'=>"1874-10-7",
            'gioitinh'=>"1",
            'alias'=>"george-s-clason",
            'trangthai'=>1
        ]);

        DB::table('tac_gias')->insert([
            'tentg'=>"Napoleon Hill",
            'ngaysinh'=>"1883-10-26",
            'gioitinh'=>"1",
            'alias'=>"napoleon-hill",
            'trangthai'=>1
        ]);

        DB::table('tac_gias')->insert([
            'tentg'=>"Keith Ferrazzi",
            'ngaysinh'=>"1966-08-20",
            'gioitinh'=>"1",
            'alias'=>"keith-ferrazzi",
            'trangthai'=>1
        ]);

        DB::table('tac_gias')->insert([
            'tentg'=>"Luis Sepúlveda",
            'ngaysinh'=>"1949-10-04",
            'gioitinh'=>"1",
            'alias'=>"luis-sepulveda",
            'trangthai'=>1
        ]);

        DB::table('tac_gias')->insert([
            'tentg'=>"Yann Martel",
            'ngaysinh'=>"1963-06-25",
            'gioitinh'=>"1",
            'alias'=>"yann-martel",
            'trangthai'=>1
        ]);

        DB::table('tac_gias')->insert([
            'tentg'=>"Jeff Kinney",
            'ngaysinh'=>"1971-02-19",
            'gioitinh'=>"1",
            'alias'=>"jeff-kinney",
            'trangthai'=>1
        ]);

        DB::table('tac_gias')->insert([
            'tentg'=>"Wayne W. Dyer",
            'ngaysinh'=>"1940-05-10",
            'gioitinh'=>"1",
            'alias'=>"wayne-w-dyer",
            'trangthai'=>1
        ]);

        DB::table('tac_gias')->insert([
            'tentg'=>"Fujimaki Yukio",
            'ngaysinh'=>"1960-01-05",
            'gioitinh'=>"0",
            'alias'=>"fujimaki-yukio",
            'trangthai'=>1
        ]);

        DB::table('tac_gias')->insert([
            'tentg'=>"Thomas Amstrong",
            'ngaysinh'=>"1899-09-03",
            'gioitinh'=>"0",
            'alias'=>"thomas-amstrong",
            'trangthai'=>1
        ]);

        DB::table('tac_gias')->insert([
            'tentg'=>"Chris Skellett",
            'ngaysinh'=>"1956-06-17",
            'gioitinh'=>"1",
            'alias'=>"chris-skellett",
            'trangthai'=>1
        ]);

        DB::table('tac_gias')->insert([
            'tentg'=>"Gosho Aoyama",
            'ngaysinh'=>"1963-06-21",
            'gioitinh'=>"1",
            'alias'=>"gosho-aoyama",
            'trangthai'=>1
        ]);

        DB::table('tac_gias')->insert([
            'tentg'=>"Fujiko F.Fujio",
            'ngaysinh'=>"1933-12-1",
            'gioitinh'=>"1",
            'alias'=>"fujiko-f-fujio",
            'trangthai'=>1
        ]);

        DB::table('tac_gias')->insert([
            'tentg'=>"Đặng Quang Dũng",
            'ngaysinh'=>"1992-10-20",
            'gioitinh'=>"1",
            'alias'=>"dang-quang-dung",
            'trangthai'=>1
        ]);

    }
}

class NXBTableSeeder extends Seeder {
    public function run(){
        DB::table('n_x_bs')->delete();

        DB::table('n_x_bs')->insert([
            'tennxb'=>"NXB Kim Đồng",
            'diachi'=>"15 Nguyễn Tri Phương P.7, Q.5",
            'sodt'=>"09094616",
            'alias'=>"nxb-kim-dong",
            'trangthai'=>1
        ]);

        DB::table('n_x_bs')->insert([
            'tennxb'=>"NXB Trẻ",
            'diachi'=>"649 Nguyễn Trãi P.2, Q.5",
            'sodt'=>"084612643",
            'alias'=>"nxb-tre",
            'trangthai'=>1
        ]);

        DB::table('n_x_bs')->insert([
            'tennxb'=>"NXB Văn Học",
            'diachi'=>"99 Ngô Thời Nhiệm P.10, Q.3",
            'sodt'=>"074615894",
            'alias'=>"nxb-van-hoc",
            'trangthai'=>1
        ]);

    }
}

class SanPhamTableSeeder extends Seeder {
    public function run(){
        DB::table('san_phams')->delete();

        DB::table('san_phams')->insert([
            'tensp'=>"Án Mạng Trên Chuyến Tàu Tốc Hành Phương Đông",
            'hinhanh'=>"6ce388fc1314314a69d4b87d6fb4bffa.jpg",
            'soluong'=>100,
            'matl'=>1,
            'sotrang'=>306,
            'manxb'=>1,
            'ngayxb'=>"2017-11-07",
            'matg'=>1,
            'taiban'=>1,
            'mota'=>"Kẻ sát nhân đang đồng hành cùng chúng ta – trên chuyến tàu này…",
            'loaibia'=>"Bìa mềm",
            'kichthuoc'=>"13 x 20",
            'gia'=>100000,
            'alias'=>"an-mang-tren-chuyen-tau-toc-hanh-phuong-dong",
            'trangthai'=>1
        ]);

        DB::table('san_phams')->insert([
            'tensp'=>"Án Mạng Đêm Giáng Sinh",
            'hinhanh'=>"e638462c6dec85d89eb47259c1007db3.jpg",
            'soluong'=>100,
            'matl'=>1,
            'sotrang'=>314,
            'manxb'=>1,
            'ngayxb'=>"2017-01-07",
            'matg'=>1,
            'taiban'=>1,
            'mota'=>"Tỉ phú Simeon Lee bất ngờ mời gia đình đến nhà tụ họp mừng Giáng sinh khiến cho khách khứa không khỏi nghi ngờ.",
            'loaibia'=>"Bìa mềm",
            'kichthuoc'=>"13 x 20",
            'gia'=>120000,
            'alias'=>"an-mang-dem-giang-sinh",
            'trangthai'=>1
        ]);

        DB::table('san_phams')->insert([
            'tensp'=>"Cây Bách Buồn",
            'hinhanh'=>"img292.u2377.d20161220.t112051.153721.jpg",
            'soluong'=>100,
            'matl'=>1,
            'sotrang'=>305,
            'manxb'=>1,
            'ngayxb'=>"2015-05-27",
            'matg'=>1,
            'taiban'=>1,
            'mota'=>"Cô Elinor Carlisle đứng một cách bình thản ở vị trí bị cáo trước tòa với tội danh mưu sát tình địch của mình - cô Mary Gerrard. Bằng chứng đã mười mươi - chỉ có cô mới có động cơ, cơ hội và phương tiện giết người.",
            'loaibia'=>"Bìa mềm",
            'kichthuoc'=>"13 x 20",
            'gia'=>98000,
            'alias'=>"cay-bach-buon",
            'trangthai'=>1
        ]);

        DB::table('san_phams')->insert([
            'tensp'=>"Hokkaido Mê Trận Án",
            'hinhanh'=>"hokkaido---cover-1.u547.d20161005.t141050.573130.jpg",
            'soluong'=>100,
            'matl'=>1,
            'sotrang'=>380,
            'manxb'=>1,
            'ngayxb'=>"2016-10-14",
            'matg'=>2,
            'taiban'=>1,
            'mota'=>"Tại Hokkaido, trên một mỏm cao xa tít tắp trông xuống biển khơi đầy băng trôi, có xây cất một công trình dị thường mà người trong vùng gọi là nhà nghiêng",
            'loaibia'=>"Bìa mềm",
            'kichthuoc'=>"13.5 x 20.5",
            'gia'=>115000,
            'alias'=>"hokkaido-me-tran-an",
            'trangthai'=>1
        ]);

        DB::table('san_phams')->insert([
            'tensp'=>"Tokyo Hoàng Đạo Án",
            'hinhanh'=>"tokyo-hoang-dao-an.jpg",
            'soluong'=>100,
            'matl'=>1,
            'sotrang'=>360,
            'manxb'=>1,
            'ngayxb'=>"2013-11-16",
            'matg'=>2,
            'taiban'=>1,
            'mota'=>"Đối với phụ nữ, ta có niềm đam mê mãnh liệt. Đối với cái đẹp, ta nhất mực tôn sùng.",
            'loaibia'=>"Bìa mềm",
            'kichthuoc'=>"13.5 x 20.5",
            'gia'=>90000,
            'alias'=>"tokyo-hoang-dao-an",
            'trangthai'=>1
        ]);

        DB::table('san_phams')->insert([
            'tensp'=>"Đề Thi Đẫm Máu",
            'hinhanh'=>"de-thi-dam-mau.jpg",
            'soluong'=>100,
            'matl'=>1,
            'sotrang'=>537,
            'manxb'=>2,
            'ngayxb'=>"2014-12-10",
            'matg'=>3,
            'taiban'=>1,
            'mota'=>"Một tên sát thủ có sở thích uống chất hỗn hợp máu nạn nhân với sữa tươi, hắn có căn bệnh gì đặc biệt hay là con quỷ hút máu bất tử nghìn năm trong truyền thuyết?",
            'loaibia'=>"Bìa mềm",
            'kichthuoc'=>"14.5 x 20.5",
            'gia'=>130000,
            'alias'=>"de-thi-dam-mau",
            'trangthai'=>1
        ]);

        DB::table('san_phams')->insert([
            'tensp'=>"Người Giàu Có Nhất Thành Babylon",
            'hinhanh'=>"f411da8acaae0bb9f063301d1ad807ae.jpg",
            'soluong'=>100,
            'matl'=>2,
            'sotrang'=>190,
            'manxb'=>1,
            'ngayxb'=>"2017-11-07",
            'matg'=>4,
            'taiban'=>1,
            'mota'=>"Trước mắt bạn, tương lai đang trải rộng con đường dẫn tới những miền đất xa xôi đầy hứa hẹn.",
            'loaibia'=>"Bìa mềm",
            'kichthuoc'=>"13 x 20.5",
            'gia'=>58000,
            'alias'=>"nguoi-giau-co-nhat-thanh-babylon",
            'trangthai'=>1
        ]);

        DB::table('san_phams')->insert([
            'tensp'=>"13 Nguyên Tắc Nghĩ Giàu Làm Giàu",
            'hinhanh'=>"scan_186_1.jpg",
            'soluong'=>100,
            'matl'=>2,
            'sotrang'=>314,
            'manxb'=>1,
            'ngayxb'=>"2017-11-07",
            'matg'=>5,
            'taiban'=>1,
            'mota'=>"13 Nguyên Tắc Nghĩ Giàu Làm Giàu",
            'loaibia'=>"Bìa mềm",
            'kichthuoc'=>"15.5 x 24",
            'gia'=>80000,
            'alias'=>"13-nguyen-tac-nghi-giau-lam-giau",
            'trangthai'=>1
        ]);

        DB::table('san_phams')->insert([
            'tensp'=>"Đừng Bao Giờ Đi Ăn Một Mình",
            'hinhanh'=>"9f680d49c05be61065c81a6e6fce4faa.jpg",
            'soluong'=>100,
            'matl'=>2,
            'sotrang'=>388,
            'manxb'=>3,
            'ngayxb'=>"2017-09-05",
            'matg'=>6,
            'taiban'=>1,
            'mota'=>"Bạn mong muốn đi tắt đón đầu? Bạn muốn vững bước đến thành công?",
            'loaibia'=>"Bìa mềm",
            'kichthuoc'=>"13 x 20",
            'gia'=>100000,
            'alias'=>"dung-bao-gio-di-an-mot-minh",
            'trangthai'=>1
        ]);

        DB::table('san_phams')->insert([
            'tensp'=>"Chuyện Con Mèo Dạy Con Hải Âu Bay",
            'hinhanh'=>"0f8293e5a2ca1fa781b838efdd9e6d44.jpg",
            'soluong'=>100,
            'matl'=>3,
            'sotrang'=>139,
            'manxb'=>1,
            'ngayxb'=>"2017-11-20",
            'matg'=>7,
            'taiban'=>1,
            'mota'=>"Có tồn tại không tình thương yêu giữa mèo và hải âu?",
            'loaibia'=>"Bìa mềm",
            'kichthuoc'=>"13 x 20",
            'gia'=>42000,
            'alias'=>"chuyen-con-meo-day-con-hai-au-bay",
            'trangthai'=>1
        ]);

        DB::table('san_phams')->insert([
            'tensp'=>"Chuyện Con Mèo Và Con Chuột Bạn Thân Của Nó",
            'hinhanh'=>"chuyen-con-meo.jpg",
            'soluong'=>100,
            'matl'=>3,
            'sotrang'=>78,
            'manxb'=>1,
            'ngayxb'=>"2016-03-07",
            'matg'=>7,
            'taiban'=>1,
            'mota'=>"Max và Mix là đôi bạn thân",
            'loaibia'=>"Bìa mềm",
            'kichthuoc'=>"13 x 20",
            'gia'=>34000,
            'alias'=>"chuyen-con-meo-va-con-chuot-ban-than-cua-no",
            'trangthai'=>1
        ]);

        DB::table('san_phams')->insert([
            'tensp'=>"Cuộc Đời Của Pi",
            'hinhanh'=>"anh-cdcp-3_1186d_4_3.jpg",
            'soluong'=>100,
            'matl'=>3,
            'sotrang'=>446,
            'manxb'=>1,
            'ngayxb'=>"2017-01-07",
            'matg'=>8,
            'taiban'=>1,
            'mota'=>"Piscine Molitor Patel, tên thường gọi là Pi, quốc tịch Ấn Độ",
            'loaibia'=>"Bìa mềm",
            'kichthuoc'=>"13 x 20",
            'gia'=>97000,
            'alias'=>"cuoc-doi-cua-pi",
            'trangthai'=>1
        ]);

        DB::table('san_phams')->insert([
            'tensp'=>"Nhật Ký Chú Bé Nhút Nhát - Tập 1",
            'hinhanh'=>"nhatky.jpg",
            'soluong'=>100,
            'matl'=>3,
            'sotrang'=>244,
            'manxb'=>1,
            'ngayxb'=>"2008-09-14",
            'matg'=>9,
            'taiban'=>1,
            'mota'=>"Sinh động, hài hước, hấp dẫn",
            'loaibia'=>"Bìa mềm",
            'kichthuoc'=>"13 x 20",
            'gia'=>50000,
            'alias'=>"nhat-ky-chu-be-nhut-nhat-tap-1",
            'trangthai'=>1
        ]);

        DB::table('san_phams')->insert([
            'tensp'=>"Để Sống Mà Không Hối Tiếc",
            'hinhanh'=>"8desongmakhonghoitiec.u5168.d20170426.t170025.109516.jpg",
            'soluong'=>100,
            'matl'=>4,
            'sotrang'=>207,
            'manxb'=>2,
            'ngayxb'=>"2017-11-07",
            'matg'=>10,
            'taiban'=>1,
            'mota'=>"Là quyển sách viết về một người đàn ông ngay cả khi bước vào ngưỡng tuổi 50",
            'loaibia'=>"Bìa mềm",
            'kichthuoc'=>"13 x 20",
            'gia'=>38000,
            'alias'=>"de-song-ma-khong-hoi-tiec",
            'trangthai'=>1
        ]);

        DB::table('san_phams')->insert([
            'tensp'=>"Đi Tìm Một Giải Pháp Tinh Thần",
            'hinhanh'=>"di-tim-mot-giai-phap-tinh-than-a_1.jpg",
            'soluong'=>100,
            'matl'=>4,
            'sotrang'=>306,
            'manxb'=>3,
            'ngayxb'=>"2011-04-04",
            'matg'=>11,
            'taiban'=>1,
            'mota'=>"Cuộc sống hiện đại đầy rẫy những áp lực tinh thần",
            'loaibia'=>"Bìa mềm",
            'kichthuoc'=>"13 x 20",
            'gia'=>10000,
            'alias'=>"di-tim-mot-giai-phap-tinh-than",
            'trangthai'=>1
        ]);

        DB::table('san_phams')->insert([
            'tensp'=>"Hành Trình Của Cuộc Đời",
            'hinhanh'=>"hanh-trinh-cua-cuoc-doi-a.jpg",
            'soluong'=>100,
            'matl'=>4,
            'sotrang'=>400,
            'manxb'=>3,
            'ngayxb'=>"2011-01-07",
            'matg'=>12,
            'taiban'=>1,
            'mota'=>"Cuốn sách sẽ đưa bạn qua từng giai đoạn của cuộc đời, bắt đầu từ lúc chưa sinh ra cho đến sau khi chết",
            'loaibia'=>"Bìa mềm",
            'kichthuoc'=>"13 x 20",
            'gia'=>90000,
            'alias'=>"hanh-trinh-cua-cuoc-doi",
            'trangthai'=>1
        ]);

        DB::table('san_phams')->insert([
            'tensp'=>"Hạnh Phúc Thôi Chưa Đủ",
            'hinhanh'=>"hanh_phuc_thoi_chua_du_-_scl_grande.u335.d20160627.t103424.png",
            'soluong'=>100,
            'matl'=>4,
            'sotrang'=>229,
            'manxb'=>"1",
            'ngayxb'=>"2016-06-07",
            'matg'=>13,
            'taiban'=>1,
            'mota'=>"Hạnh phúc là một khái niệm đơn giản và chung chung",
            'loaibia'=>"Bìa mềm",
            'kichthuoc'=>"13.5 x 20.5",
            'gia'=>100000,
            'alias'=>"hanh=huc-thoi-chua-du",
            'trangthai'=>1
        ]);

        DB::table('san_phams')->insert([
            'tensp'=>"Thám Tử Lừng Danh Conan Tuyển Tập Đặc Biệt",
            'hinhanh'=>"img406.u2377.d20170215.t134631.116924.jpg",
            'soluong'=>100,
            'matl'=>5,
            'sotrang'=>380,
            'manxb'=>1,
            'ngayxb'=>"2017-02-23",
            'matg'=>14,
            'taiban'=>1,
            'mota'=>"Cuốn sách này tập hợp những mẩu chuyện lãng mạn giữa Conan (Shinichi) và Ran",
            'loaibia'=>"Bìa mềm",
            'kichthuoc'=>"13 x 18",
            'gia'=>20000,
            'alias'=>"tham-tu-lung-danh-conan-tuyen-tap-dac-biet",
            'trangthai'=>1
        ]);

        DB::table('san_phams')->insert([
            'tensp'=>"Doraemon Truyện Dài Tập 2",
            'hinhanh'=>"10.u5762.d20171018.t104146.65072.jpg",
            'soluong'=>100,
            'matl'=>5,
            'sotrang'=>213,
            'manxb'=>1,
            'ngayxb'=>"2017-11-07",
            'matg'=>15,
            'taiban'=>1,
            'mota'=>"Lâu đài dưới đáy biển, Chuyến phiêu lưu vào xứ quỷ, Cuộc chiến vũ trụ...!!",
            'loaibia'=>"Bìa mềm",
            'kichthuoc'=>"13 x 20",
            'gia'=>20000,
            'alias'=>"doraemon-truyen-dai-tap-2",
            'trangthai'=>1
        ]);

        DB::table('san_phams')->insert([
            'tensp'=>"Mèo Mốc - Chuyện Đèn Đỏ Và Cái Lỗ Đen Vũ Trụ",
            'hinhanh'=>"meo-moc-2_1.jpg",
            'soluong'=>100,
            'matl'=>5,
            'sotrang'=>152,
            'manxb'=>1,
            'ngayxb'=>"2015-11-06",
            'matg'=>16,
            'taiban'=>1,
            'mota'=>"Chiến dịch mốc hóa thế giới đã chính thức trở lại",
            'loaibia'=>"Bìa mềm",
            'kichthuoc'=>"13 x 20",
            'gia'=>86000,
            'alias'=>"meo-moc-chuyen-den-do-va-cai-lo-den-vu-tru",
            'trangthai'=>1
        ]);
    }
}

class KhachHangTableSeeder extends Seeder{
    public function run(){
        DB::table('khach_hangs')->delete();

        DB::table('khach_hangs')->insert([
            'ten'=>"Nguyễn Văn A",
            'diachi'=>"01 Nguyễn Trãi",
            'sdt'=>'012345678',
            'ngaysinh'=>'1996-01-01',
            'gioitinh'=>1,
            'email'=>"nguyenvana@gmail.com",
            'password'=>Hash::make("123456"),
            'trangthai'=>1
        ]);
        DB::table('so_dia_chis')->insert([
            'makh'=>1,
            'sonha'=>"01 Nguyễn Trãi",
            'phuongxa'=>2,
            'quanhuyen'=>8,
            'thanhpho'=>1,
            'trangthai'=>1
        ]);
    }
}

class HinhThucThanhToanTableSeeder extends Seeder{
    public function run(){
        DB::table('hinh_thuc_thanh_toans')->delete();

        DB::table('hinh_thuc_thanh_toans')->insert([
            'tenhttt'=>"Tiền mặt"
        ]);

        DB::table('hinh_thuc_thanh_toans')->insert([
            'tenhttt'=>"Chuyển khoản"
        ]);
    }
}

class DonHangTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('don_hangs')->delete();

        DB::table('don_hangs')->insert([
            'makh' => 1,
            'tongtien' => 128000,
            'hinhthucthanhtoan' => 1,
            'diachigiaohang' => '01 Nguyễn Trãi',
            'phiship' => 12000,
            'trangthai' => 1,
            'created_at' => '2018-12-15 12:21:44',
            'updated_at' => '2018-12-16 09:42:03'
        ]);

        DB::table('don_hangs')->insert([
            'makh' => 1,
            'tongtien' => 256000,
            'hinhthucthanhtoan' => 1,
            'diachigiaohang' => '01 Nguyễn Trãi',
            'phiship' => 12000,
            'trangthai' => 0,
            'created_at' => '2018-12-16 09:45:04',
            'updated_at' => '2018-12-16 09:59:58'
        ]);

        DB::table('don_hangs')->insert([
            'makh' => 1,
            'tongtien' => 180000,
            'hinhthucthanhtoan' => 1,
            'diachigiaohang' => '01 Nguyễn Trãi',
            'phiship' => 12000,
            'trangthai' => 0,
            'created_at' => '2018-12-15 10:56:05',
            'updated_at' => '2018-12-15 13:57:13'
        ]);
    }
}

class CTDonHangTableSeeder extends Seeder{
    public function run(){
        DB::table('chi_tiet_don_hangs')->delete();

        DB::table('chi_tiet_don_hangs')->insert([
            'madh'=>1,
            'masp'=>14,
            'soluong'=>1,
            'dongia'=>38000,
            'thanhtien'=>38000,
            'trangthai'=>1
        ]);

        DB::table('chi_tiet_don_hangs')->insert([
            'madh'=>1,
            'masp'=>16,
            'soluong'=>1,
            'dongia'=>90000,
            'thanhtien'=>90000,
            'trangthai'=>1
        ]);

        DB::table('chi_tiet_don_hangs')->insert([
            'madh'=>2,
            'masp'=>16,
            'soluong'=>2,
            'dongia'=>90000,
            'thanhtien'=>180000,
            'trangthai'=>1
        ]);

        DB::table('chi_tiet_don_hangs')->insert([
            'madh'=>2,
            'masp'=>14,
            'soluong'=>2,
            'dongia'=>38000,
            'thanhtien'=>76000,
            'trangthai'=>1
        ]);

        DB::table('chi_tiet_don_hangs')->insert([
            'madh'=>3,
            'masp'=>16,
            'soluong'=>2,
            'dongia'=>90000,
            'thanhtien'=>180000,
            'trangthai'=>1
        ]);
    }
}
