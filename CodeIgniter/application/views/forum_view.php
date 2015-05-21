<?php

if(isset($catid))
{
    $query = $this->db->get_where('topics', array('categorie' => $catid));

    foreach ($query->result() as $row)
    {

         echo '<a href= "'.site_url('forum/thread/'. $row->id) .'"><div class="showback">';
        echo '<h4>'. $row->title .'</h5>';
        echo '<span>started by '. $row->authorid .'</span>';
        echo '</div></a>';

    }
    echo '<a href="'.base_url("forum/newtopic/$catid").'" <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> new topic</button></a>';


}
else if(isset($newtopic))
{
    
             if ($this->session->userdata('logged_in') == null): ?>

            <div class="alert alert-danger">You have to be logged in to create a new topic </div> 
            <? else:?>
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
else if(isset($thread))
{
        $query = $this->db->get_where('topics', array('id' => $this->uri->segment(3)),1);
        foreach ($query->result() as $row)
            echo '<h3>'.$row->title .'</h3>';

        
        $query = $this->db->get_where('posts', array('thread' => $this->uri->segment(3)));
        foreach ($query->result() as $row)
        {

            echo '<div class="row">';
                echo '<div class="col-md-4">';
                echo '<div class="showback">';
                    echo '<h3>'. $this->User_model->getName($row->posterID) . '</h3>';
                   echo '<img  src="'.site_url("assets/uploads/".$this->User_model->getImage($row->posterID)) .'" alt="profielfoto" width="120" height="120" />';
    
                    echo '</div>';

                echo '</div>';
                echo '<div class="col-md-8">';
                 echo '<div class="showback">';  
                    echo '<p>'.$row->message .'</p>';
                echo '</div>';
            echo '</div></div>';

            

        }
   ?>
    <form class="text-center" method="post" action="<?php echo base_url() . "forum/newpost/"?>">


            <p><textarea name="text" rows="10" cols="150" ></textarea></p>
           <input type="hidden" name="topic" value="<?php echo $this->uri->segment(3)?>">

            <button class="btn btn-success" type="submit">reply</button>
            </form>
            <?php

    


    

}


else{

    $query = $this->db->get('categories');


    foreach ($query->result() as $row)
    {

        echo '<a href="'.site_url('forum/categorie/'.$row->id) .'"><div class="showback">';
        echo '<h4>'. $row->name .'</h5>';
        echo '<p>'. $row->description .'</p>';
        echo '</div></a>';

    }
}



?>

