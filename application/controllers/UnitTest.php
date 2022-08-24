<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UnitTest extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('dokumen_model');
        $this->load->library('unit_test');
    }

    public function calculatePersentProposal()
	{
        $nim = 105216035;
		$persentaseDokumenProposal = $this->dokumen_model->CountDokumenProposal($nim)*100;
        return $persentaseDokumenProposal;
	}

    public function testPersentDocumentProposal()
    {
        $test = $this->calculatePersentProposal();
        echo "Output : ".$test;
        $expected_result = 'is_numeric';
        $test_name = 'menghitung persentase dokumen proposal';
        echo $this->unit->run($test, $expected_result, $test_name);
    }

    public function calculatePersentSeminar()
	{
        $nim = 105216035;
		$persentaseDokumenSeminar = $this->dokumen_model->CountDokumenSeminar($nim)*100;
        return $persentaseDokumenSeminar;
	}

    public function testPersentDocumentSeminar()
    {
        $test = $this->calculatePersentSeminar();
        echo "Output : ".$test;
        $expected_result = 'is_numeric';
        $test_name = 'menghitung persentase dokumen seminar';
        echo $this->unit->run($test, $expected_result, $test_name);
    }

	public function calculatePersentSidang()
	{
        $nim = 105216035;
		$persentaseDokumenSidang = ($this->dokumen_model->CountDokumenSidang($nim)/6)*100;
        return $persentaseDokumenSidang;
	}

    public function testPersentDocumentSidang()
    {
        $test = $this->calculatePersentSidang();
        echo "Output : ".$test;
        $expected_result = 'is_numeric';
        $test_name = 'menghitung persentase dokumen sidang';
        echo $this->unit->run($test, $expected_result, $test_name);
    }

    public function calculatePersentYudisium()
	{
        $nim = 105216035;
		$persentaseDokumenYudisium = ($this->dokumen_model->CountDokumenYudisium($nim)/12)*100;
        return $persentaseDokumenYudisium;
	}

    public function testPersentDocumentYudisium()
    {
        $test = $this->calculatePersentYudisium();
        echo "Output : ".$test;
        $expected_result = 'is_numeric';
        $test_name = 'menghitung persentase dokumen yudisium';
        echo $this->unit->run($test, $expected_result, $test_name);
    }
}
