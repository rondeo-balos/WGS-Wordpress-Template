<?php
if(have_posts()){
  while(have_posts){
    the_post();
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
  }
}else
  echo "The page you are looking is not found!";
?>
