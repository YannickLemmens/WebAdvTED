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


}
if(isset($newtopic))
{
?>
<div id="editor" contenteditable="true">
      Go ahead…
    </div>

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
	
