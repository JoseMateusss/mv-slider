<?php

if ( !class_exists( MV_Slider_shortcode ) ) {
    class MV_Slider_shortcode
    {
       public function __construct()
       {
            add_shortcode( 'mv_slider', array( $this, 'add_shortcode' )  );
       }

       public function add_shortcode( $atts = array(), $content = null, $tag = '' ){
            $atts = array_change_key_case( (array) $atts, CASE_LOWER );

            extract(shortcode_atts(
                array(
                    'id' => '',
                    'orderby' => 'date'
                ),
                $atts,
                $tag
            ));

            if( !empty( $id ) ){
                $id = array_map( 'absint', explode( ',', $id ) );
            }
       }
    }
    
}