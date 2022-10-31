<?php
// CONTROLLER ABOUT METHOD PAGE
class About extends Controller
{
    // http://localhost/phpmvc/public/about/index/hasan/pegawai/31
    public function index($nama = 'hasann', $pekerjaan = 'gamer', $umur = 32)
    {
        // echo "halo nama saya $nama, saya seeorang $pekerjaan berumur $umur";
        $data['nama']       = $nama;
        $data['pekerjaan']  = $pekerjaan;
        $data['umur']       = $umur;
        $data['judul']      = 'About Me';
        // $this->view('about/index', $data); 
        $this->view['judul'];
        $this->view('templates/header', $data);
        $this->view('about/index', $data); // http://localhost/phpmvc/public/about/index
        $this->view('templates/footer');
    }

    public function page()
    {
        // echo 'About/page';
        $data['judul']  =  'Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
