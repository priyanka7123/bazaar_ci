<?php


class Home extends CI_Controller{
    private $data;

    public function  __construct(){
        parent::__construct();
        $this->data['category'] = $this->work->calling('category');
    }

    public function commonview($data){
         $this->load->view('public/header');
         $this->load->view('public/home',$data);
         $this->load->view('public/footer');
    }

    public function index(){
        $this->data['product'] = $this->work->calling("item");
        $this->commonview($this->data);
    }
    public function category($id){
        $this->data['product'] = $this->work->calling("category",["id"=>$id]);
        $this->commonview($this->data);
    }
    public function product($id){
     $this->data['product'] = $this->db->where(["id"=>$id])->get("item")->row();
      $this->load->view('public/header');
      $this->load->view('public/product',$this->data);
      $this->load->view('public/footer');
    }
    public function search(){
        $this->commonview($this->data);

    }

    
}

?>