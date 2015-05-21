<?php

if(isset($catid))
{

    $query = $this->db->get_where('topics', array('categorie' => $catid));
if ($query->num_rows() == 0)
echo '<div class="alert alert-danger">This category does not exist </div> ';
    foreach ($query->result() as $row)
    {
        if($row->membersonly == 1 && $this->session->userdata('logged_in') == null ){
            echo '<div class="alert alert-danger">You have to be logged in to view this category </div> ';
                break;
            }
            else
            {
            echo '<a href= "'.site_url('forum/thread/'. $row->id) .'"><div class="showback">';
        
        echo '<h4>'. $row->title .'</h5>';
        echo '<span>started by '. $row->authorid .'</span>';
        echo '</div></a>';
    }
    }
    if($this->session->userdata('logged_in') != null)
    echo '<a href="'.base_url("forum/newtopic/$catid").'" <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> new topic</button></a>';


}
else if(isset($newtopic))
{
    
            if ($this->session->userdata('logged_in') == null): ?>

            <div class="alert alert-danger">You have to be logged in to create a new topic </div> 
            <?php else:?>
            <form method="post" action="<?php echo base_url() . "forum/nieuwtopic/";?>">

            <p>Topic title <input type="text" class="form-control"  name="topicTitle" value=""></input></p>
            <p>post</p>
            <p><textarea name="text" rows="20" cols="200"></textarea></p>
            
           <input type="hidden" name="category" value="<?php echo $this->uri->segment(3);?>">

            <button class="btn btn-success" type="submit">Post</button>
            </form>
          
        

    <?php
endif;

}
else if(isset($newcat))
{
    ?>
    
            <form method="post" action="<?php echo base_url() . "forum/createnewcat/";?>">
            <p>Category name<input type="text" class="form-control"  name="catname" value=""></input></p>
            <p>Category description <input type="text" class="form-control"  name="catdesc" value=""></input></p>
            <p>For members only? <input name="membersonly" type="checkbox" data-toggle="switch" /></p>
            <button class="btn btn-success" type="submit">Post</button>
            </form>
 <?php


}
//view a thread
else if(isset($thread))
{

        $query = $this->db->get_where('topics', array('id' => $this->uri->segment(3)),1);
        foreach ($query->result() as $row){
            if($row->membersonly == 1 && $this->session->userdata('logged_in') == null ){
                echo '<div class="alert alert-danger">You have to be logged in to view this topic </div> ';
                break;
            }
            else{
   
            echo '<h3>'.$row->title .'</h3>';
        }

        
        $query = $this->db->get_where('posts', array('thread' => $this->uri->segment(3)));
        foreach ($query->result() as $row)
        {

            echo '<div class="row">';
                echo '<div class="col-md-4">';
                echo '<div class="showback">';
                if($row->posterID != -1){
                    echo '<h3>'. $this->User_model->getName($row->posterID) . '</h3>';
                    echo '<img  src="'.site_url("assets/uploads/".$this->User_model->getImage($row->posterID)) .'" alt="profielfoto" width="120" height="120" />';
                }
                else
                {
                    echo '<h3>'. $row->guestname . '(guest)</h3>';
                    echo '<img  src="'.site_url("assets/uploads/default.jpg") .'" alt="profielfoto" width="120" height="120" />';
                 
                }
                    echo '</div>';
                

                echo '</div>';
                echo '<div class="col-md-8">';
                 echo '<div class="showback">';  
                    echo '<p>'.$row->message .'</p>';
                echo '</div>';
            echo '</div></div>';

           

        }
   ?>
   <?php if($this->session->userdata('logged_in') != null): ?>
    <form class="text-center" method="post" action="<?php echo base_url() . "forum/newpost/"?>">


            <p><textarea name="text" rows="10" cols="150" ></textarea></p>
           <input type="hidden" name="topic" value="<?php echo $this->uri->segment(3)?>">

            <button class="btn btn-success" type="submit">reply</button>
    <?php else:?>
        <form class="text-center" method="post" action="<?php echo base_url() . "forum/newpostasguest/"?>">
            <p>username<input type="text" class="form-control"  name="guestname" value=""></input></p>
            <p><textarea name="text" rows="10" cols="150" ></textarea></p>
           <input type="hidden" name="topic" value="<?php echo $this->uri->segment(3)?>">

            <button class="btn btn-success" type="submit">reply</button> 

    <?php endif; ?>
            </form>
    <?php

    


    

}
}   


else{

    $query = $this->db->get('categories');


    foreach ($query->result() as $row)
    {
        
        if ($row->membersonly == 0 && $this->session->userdata('logged_in') == null ){

            echo '<a href="'.site_url('forum/categorie/'.$row->id) .'"><div class="showback">';
            echo '<h4>'. $row->name .'</h5>';
            echo '<p>'. $row->description .'</p>';
            echo '</div></a>';
        }
        if ($this->session->userdata('logged_in') != null ){

            echo '<a href="'.site_url('forum/categorie/'.$row->id) .'"><div class="showback">';
            echo '<h4>'. $row->name .'</h5>';
            echo '<p>'. $row->description .'</p>';
            echo '</div></a>';
        }



    }
    if($row->membersonly == 1 && $this->session->userdata('logged_in') != null )
    echo '<a href="'.base_url("forum/newcategory/").'" <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>New Category</button></a>';

}



?>

