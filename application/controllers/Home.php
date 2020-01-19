<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('quiz_model', 'quiz', TRUE); 
        # quiz is alias to the quiz_model to connect to the database. 
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('index-content');
        $this->load->view('footer');
    }

    public function quizPage() {
    	$this->load->view('header');
    	$this->load->view('content');
    	$this->load->view('footer');
    }    

    public function contactUs() {
    	$this->load->view('header');
    	$this->load->view('contact_Us');
    	$this->load->view('footer');
    }

    public function insertRecord() {
    	$uname = $this->input->post('uname');
    	$score = preg_replace("/[^0-9]/", "", $this->input->post('score'));
    	#https://stackoverflow.com/questions/33993461/php-remove-all-non-numeric-characters-from-a-string
    	$quizresult = $this->quiz->insertRecord($uname, $score); // connect to model insertmethod
    	if($quizresult == TRUE) {
    		echo 'Your record Inserted Succussfully';
    	} else {
    		echo "OOPS..!something went wrong";
    	}
    }
     public function viewAllResult() {
        $data['results'] = $this->quiz->getAllResults();
        // echo "<pre>"; print_r($data['results']); exit;
        $this->load->view('header');
        $this->load->view('view-All-Result', $data);
        $this->load->view('footer');
    }
}