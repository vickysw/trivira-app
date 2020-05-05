<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 Created by: Kalsariya vanraj M.
 Created date:  05 March 2020
 Purpose:  Questions answer quiz
*/

class Questions extends CI_Controller {

	/**
	  Codeigniter Constructor called each time  
	 */
	 public function __construct() {
	      parent::__construct(); 
	      $this->load->model('quizmodel');         
	 }

	 /* 
	    -> Default function for first question
        ->  First question
	 */
	public function index()
	{
		$data = $this->quizmodel->getQuestion()->row_array(); // No param pass means default first question load
		$this->load->view('question_one',$data);
	}

	 /* function for second question*/
	public function question_second()
	{
		
		$postData = $this->input->post();
		$data = $this->quizmodel->getQuestion(2)->row_array(); // 2 for question 2
		$data['quesid_1'] = $postData['quesid_1'];
		$this->load->view('question_second',$data);
	}

	 /* function for third question*/
	public function question_third()
	{
		$postData = $this->input->post();
		$data = $this->quizmodel->getQuestion(3)->row_array(); // 3 for question 3
		$data['quesid_1'] = $postData['quesid_1'];
		$data['quesid_2'] = $postData['quesid_2'];
		$this->load->view('question_third',$data);
	}

	/*function for summary*/
	public function summary()
	{
		$data = $this->input->post();
		$this->load->view('summary',$data);

	}

	/*Function for save quiz form data*/
	public function saveFormData()
	{
		$formData = $this->input->post();
		$isFinish = $this->input->post('Submit');
		
		//Preparing for insert data
		foreach($formData as $key=>$data){
			if(is_numeric($key))
			{
				$inserData[$key]['que_Id'] = $key;
				$inserData[$key]['answer'] = $data;
			}
		}
		// Data save into database
		$this->quizmodel->save_data($inserData);
		if($isFinish == "Finish"){
			redirect("questions");
		}else{
			redirect("questions/historyQuiz");
		}
	}

	
	/*Show history quiz*/
	public function historyQuiz()
	{
		$result = $this->quizmodel->get_all_quiz()->result_array();
		 
		$group = [];
		foreach ($result as $item)  {
		    if (!isset($group[$item['created_on']])) {
		        $group[$item['created_on']] = [];
		    }
		     $group[$item['created_on']][] = $item;
		}
		$data['quiz'] = $group;
		
        $this->load->view('history',$data);
    
	}
}
