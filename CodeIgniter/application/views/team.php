<?php
        $query = $this->db->get_where('user', array('role' => "admin"));


        foreach ($query->result() as $row)
            {

  echo '  <div class="row">
            <div class="col-lg-3 col-sm-6">

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="http://puu.sh/hMNpR/e542248c7f.jpg">
                </div>
                <div class="info">
                    <div class="title">
                        <a  href="http://scripteden.com/">Script Eden</a>
                    </div>
                    <div class="desc">Passionate designer</div>
                    <div class="desc">Curious developer</div>
                    <div class="desc">Tech geek</div>
                </div>
               
            </div>

        </div>

    </div>
    </div>';





            }

        ?>
	
