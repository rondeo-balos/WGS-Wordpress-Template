<?php
if(have_posts()){
  while(have_posts){
    the_post();
    <h2><a href="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
    <p><?php the_content(); ?></p>
  }
}else
  echo "The page you are looking is not found!";
?>
