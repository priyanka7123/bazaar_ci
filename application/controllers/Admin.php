<?php
  class Admin extends CI_Controller
  {
  
    private $data;

    public function  __construct(){
        parent::__construct();
        $this->data['category'] = $this->work->calling('category');
    }

    public function index(){
       $this->load->view('admin/header');
      $this->load->view('admin/dashboard',$this->data);
      $this->load->view('admin/footer');
       //  $this->data['product'] = $this->work->calling("item");
      
    }
    public function category(){
       $this->load->view('admin/header');
      $this->load->view('admin/product',$this->data);
      $this->load->view('admin/footer');
    }
    public function product(){
      $this->load->view('admin/header');
      $this->load->view('admin/product',$this->data);
      $this->load->view('admin/footer');
    }
    public function addProduct(){
      $this->form_validation->set_rules("title",'title','required');
      $this->form_validation->set_rules("price",'price','required');
      $this->form_validation->set_rules("discount_price",'discount_price','required');
      $this->form_validation->set_rules("brand",'brand','required');
      $this->form_validation->set_rules("category",'category','required');
      $this->form_validation->set_rules("model",'model','required');
  
      $this->form_validation->set_rules("description",'description','required');

      if($this->form_validation->run()){
               $config['upload_path']          = './assets/';
                $config['allowed_types']        = 'gif|jpg|png';
                $this->load->library("upload",$config);

                if(!$this->upload->do_upload("image")){
                  $this->data['error'] = $this->upload->display_errors();
                }else{
                    $data = [
                             'title' => $_POST['title'],
                             'price' => $_POST['price'],
                             'discount_price' => $_POST['discount_price'],
                             'brand' => $_POST['brand'],
                             'model' => $_POST['model'],
                             'category' => $_POST['category'],
                             'image' => $_FILES['image']['name'],
                             'description' => $_POST['description']

                    ];
                   $this->db->insert("item",$data);
                   redirect('admin/index');
                }
  
      }
       else{
             $this->load->view('admin/header');
             $this->load->view('admin/add_product',$this->data);
             $this->load->view('admin/footer');
          }
    }
   
  }
  ?>