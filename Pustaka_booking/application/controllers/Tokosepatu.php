<?php
class Tokosepatu extends CI_Controller
{
    public function index()
    {
        $this->load->view('view_header_sepatu');
        $this->load->view('view-form-transaksi');
        $this->load->view('view_footer_sepatu');
    }

    public function output()
    {
        $this->load->model('Model_transaksi');
        
        $this->form_validation->set_rules('nama', 'Nama Pembeli','required', [
            'required' => 'Nama Pembeli Harus diisi'
            ]);
        $this->form_validation->set_rules('no_hp', 'Nomor HP','required|min_length[8]', [
            'required' => 'Nomor Hp harus diisi',
            'min_length' => 'Nomor HP terlalu Pendek'
            ]);
        $this->form_validation->set_rules('merk', 'Merk','required', [
            'required' => 'Merk Harus dipilih'
            ]);
            $this->form_validation->set_rules('ukuran', 'Ukuran','required', [
                'required' => 'Ukuran Harus dipilih'
                ]);
        if ($this->form_validation->run() != true) {
            $this->load->view('view_header_sepatu');
            $this->load->view('view-form-transaksi');
            $this->load->view('view_footer_sepatu');
        }
        else{
            $data = [
                'nama' => $this->input->post('nama'),
                'no_hp' => $this->input->post('no_hp'),
                'merk' => $this->input->post('merk'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => $this->Model_transaksi->hasil($this->input->post('merk')),
            ];
            $this->load->view('view_header_sepatu');
            $this->load->view('view-data-transaksi', $data);
            $this->load->view('view_footer_sepatu');
        }
    }
}