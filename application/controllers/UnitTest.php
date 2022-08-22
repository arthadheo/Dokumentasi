<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UnitTest extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
    }

    public function calculatePersentProposal($jumlahdokumen, $totaldokumenterkumpul)
	{
		$persentase = ($totaldokumenterkumpul / $jumlahdokumen)*100;
        return $persentase;
	}

    public function testPersentDocumentProposal()
    {
        $test = $this->calculatePersentProposal(1,1);
        $expected_result = 100;
        $test_name = 'menghitung persentase dokumen proposal';
        echo $this->unit->run($test, $expected_result, $test_name);
    }

    public function calculatePersentSeminar($jumlahdokumen, $totaldokumenterkumpul)
	{
		$persentase = ($totaldokumenterkumpul / $jumlahdokumen)*100;
        return $persentase;
	}

    public function testPersentDocumentSeminar()
    {
        $test = $this->calculatePersentSeminar(1,1);
        $expected_result = 1000;
        $test_name = 'menghitung persentase dokumen seminar';
        echo $this->unit->run($test, $expected_result, $test_name);
    }

	public function calculatePersentSidang($jumlahdokumen, $totaldokumenterkumpul)
	{
		$persentase = ($totaldokumenterkumpul / $jumlahdokumen)*100;
        return $persentase;
	}

    public function testPersentDocumentSidang()
    {
        $test = $this->calculatePersentSidang(3,6);
        $expected_result = 50;
        $test_name = 'menghitung persentase dokumen sidang';
        echo $this->unit->run($test, $expected_result, $test_name);
    }

    public function calculatePersentYudisium($jumlahdokumen, $totaldokumenterkumpul)
	{
		$persentase = ($totaldokumenterkumpul / $jumlahdokumen)*100;
        return $persentase;
	}

    public function testPersentDocumentYudisium()
    {
        $test = $this->calculatePersentYudisium(6,12);
        $expected_result = 50;
        $test_name = 'menghitung persentase dokumen yudisium';
        echo $this->unit->run($test, $expected_result, $test_name);
    }
}
