<?php
add_action( 'action_name', 'your_function_name' );

function your_function_name() {
// Your code
}

add_filter( 'filter_name', 'your_function_name' );

function your_function_name( $variable ) {
// Your code
return $variable;
}