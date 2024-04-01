<?php
class tugas1 extends CI_Controller
{
    public function index ()
    {
        echo "<h1>Perkenalan</h1>";
        echo "Hallo Nama saya TIYO FERNANDO NAKLUI 
            saya tiggal di jalan Apel Gang pisang raja No.31 olah raga yang saya sukai adalah badminton";
            

    }
    public function penjumblahan($n1,$n2)
    {
        
        $this->load->model('model_L1');
        
        $hasil = $this->modell1->jumlah($n1,$n2);
        echo "hasil penjumblahan dari ". $n1. "+". $n2. "+". $hasil;
        
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->modell1->jumlah($n1, $n2);
        $this->load->view('view-L1', $data);
        
    }
}   