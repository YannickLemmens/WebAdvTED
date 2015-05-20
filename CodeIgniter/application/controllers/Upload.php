<?php

//Author: Jamshid HASHIMI

  class Upload extends CI_Controller

  {

    function __construct()

    {

        parent::__construct();

        $this->load->helper('form');

        $this->load->helper('url');
        $this->load->model('members_model');

    }  

    function index()

    {
		$this->load->view('header');
        $this->load->view('upload_view');
		$this->load->view('footer');

    }

    //Upload Image function

    function uploadImage()

    {

       $config['upload_path']   =   "assets/uploads/";

       $config['allowed_types'] =   "gif|jpg|jpeg|png"; 

       $config['max_size']      =   "5000";

       $config['max_width']     =   "1907";

       $config['max_height']    =   "1280";

       $this->load->library('upload',$config);

       if(!$this->upload->do_upload())

       {

           echo $this->upload->display_errors();

       }

       else

       {

           $finfo=$this->upload->data();


           $data['uploadInfo'] = $finfo;

           $data['thumbnail_name'] = $finfo['raw_name']. '_thumb' .$finfo['file_ext']; 
            $qdata = array(
                 'image' => $finfo['raw_name'] .$finfo['file_ext']
          
              );

          $this->db->where('id', $this->session->userdata('user_id'));
          $this->db->update('user', $qdata); 
          $this->members_model->refreshsession();
          redirect('/profile/', 'refresh');
 



       }

    }

    //Create Thumbnail function

    function _createThumbnail($filename)

    {

        $config['image_library']    = "gd2";      

        $config['source_image']     = "uploads/" .$filename;      

        $config['create_thumb']     = TRUE;      

        $config['maintain_ratio']   = TRUE;      

        $config['width'] = "80";      

        $config['height'] = "80";

        $this->load->library('image_lib',$config);

        if(!$this->image_lib->resize())

        {

            echo $this->image_lib->display_errors();

        }      

    }

  }

?>