<?php

class Berat_ideal extends CI_Controller
{
    public function index()
    {
        $this->load->view('berat_ideal');
    }

    public function result()
    {
        $berat = $this->input->post('berat');
        $tinggi = $this->input->post('tinggi');
        $usia_kehamilan = $this->input->post('usia_kehamilan');

        $hquad = ($tinggi / 100) * ($tinggi / 100);
        $bmi = $berat / $hquad;

        for ($i = $usia_kehamilan; $i <= 40; $i++) {
            for ($j = $i; $j <= 14; $j++) {
                $data['rekomendasi'][$j] = [
                    'nama' => $j,
                    'berat' => ($berat + $j * 0) . ' - ' . ($berat + $j * (2 / 14)),
                    'beratmin' => $berat + $j * 0,
                    'beratmax' => $berat + $j * (2 / 14)
                ];
            }
            $beratmax[14] = $berat + $i * (2 / 14);
            for ($j = $i; $j > 14 && $j <= 40; $j++) {
                $data['rekomendasi'][$j] = [
                    'nama' => $j,
                    'berat' => $beratmax[14] + (0.18 * $j) . ' - ' . (($beratmax[14]) + (0.35 * $j)),
                    'beratmin' => $beratmax[14] + (0.18 * $j),
                    'beratmax' => (($beratmax[14]) + (0.35 * $j))
                ];
            }
        }

        $data['beratrekom'] = $data['rekomendasi'][$usia_kehamilan];

        $this->load->view('result_beratideal', $data);
    }
}
