<?php

require_once( dirname(__FILE__) . '/Redux/ReduxCore/framework.php');

$opt_name = "redux_demo1";

$section = array(
    'title'  => 'Basic Field',
    'id'     => 'basic',
    'desc'   => '',
    'icon'   => 'el el-home',  
    'fields' => array(
        array(
            'id'       => 'opt-text-numeric',
            'type'     => 'text',
            'title'    => __( 'Text Option - Numeric Validated', 'redux-framework-demo' ),
            'subtitle' => __( 'This must be numeric.', 'redux-framework-demo' ),
            'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
            'validate' => 'numeric',
            'default'  => '2',
        ),
    )
);

$option = get_option( 'redux_demo1');
$numberOfImage = $option['opt-text-numeric'];

for($i= 0; $i<$numberOfImage; $i++){
	$id = 'opt-text-numeric'.$i;
	$name = 'Imageso'.$i;
	$newvalue = array(
        'id'       => $id,
        'type'     => 'text',
        'title'    => __( $name, 'redux-framework-demo' ),
        'subtitle' => __( 'This must be numeric.', 'redux-framework-demo' ),
        'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
        'validate' => 'numeric',
        'default'  => '0',
    );
    array_push($section['fields'], $newvalue);
}
Redux::setSection($opt_name, $section);

 