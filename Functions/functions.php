<?php

function Welcome($name='Guest',$mesg='Welcome to our book store ',$color='danger',$height=207)
{
    echo "<div class='container my-5'style='height: {$height}px'><h1 class='display-4 text-primary'>$mesg<span class='text-$color'>$name</span></h1></div>";
}
