<?php
function component($stitle,$content,$sid){
  $element = '<br><div class="row">
    <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">'.$stitle.'</h5>
        <p class="card-text">'.$content.'</p>
        <a href="http://localhost/ReadCount/storydetail.php?id='.$sid.'" class="btn btn-primary">Explore</a>
      </div>
    </div>
  </div>
  </div>';
  echo $element;
}

function getStory($link){
  $sql = "SELECT * FROM story";
  $stmt = $link->prepare($sql);
  $stmt->execute();
  $result = $stmt->get_result();
  $count = $result->num_rows;
  if($count>0){
    return $result;
  }
}?>
  