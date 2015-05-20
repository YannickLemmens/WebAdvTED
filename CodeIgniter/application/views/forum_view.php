<?php

if(isset($catid))
{
    $query = $this->db->get_where('topics', array('categorie' => $catid));

    foreach ($query->result() as $row)
    {

        echo '<a href= "#"><div class="showback">';
        echo '<h4>'. $row->title .'</h5>';
        echo '<span>started by '. $row->authorid .'</span>';
        echo '</div></a>';

    }
    echo '<a href="'.base_url("index.php/forum/newtopic/$catid").'" <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> new topic</button></a>';


}
else if(isset($newtopic))
{
    ?>
            <form method="post" action="<?php echo base_url() . "index.php/forum/nieuwtopic/"?>">

            <p>Topic title <input type="text" class="form-control"  name="topicTitle" value=""></input></p>
            <p>Post <input  type="text" class="form-control input-lg" name="Post"value=""></input></p>
           <input type="hidden" name="category" value="<?php echo $this->uri->segment(4);?>">

            <button class="btn btn-default" type="submit">submit</button>
            </form>

    <?php

}


else{

    $query = $this->db->get('categories');


    foreach ($query->result() as $row)
    {

        echo '<a href= "forum/categorie/'. $row->id .'"><div class="showback">';
        echo '<h4>'. $row->name .'</h5>';
        echo '<p>'. $row->description .'</p>';
        echo '</div></a>';

    }
}



?>

