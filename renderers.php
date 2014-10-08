// <?php

// class theme_custom1_core_renderer extends core_renderer {
//     /**
//      * Produces a header for a block
//      *
//      * @param block_contents $bc
//      * @return string
//      */
//     protected function block_header(block_contents $bc) {

//         $title = '';
//         if ($bc->title) {
//             $attributes = array();
//             if ($bc->blockinstanceid) {
//                 $attributes['id'] = 'instance-'.$bc->blockinstanceid.'-header';
//             }
//             $title = html_writer::tag('h2', $bc->title, $attributes);
//         }

//         $blockid = null;
//         if (isset($bc->attributes['id'])) {
//             $blockid = $bc->attributes['id'];
//         }
//         $controlshtml = $this->block_controls($bc->controls, $blockid);

//         $output = '';
//         if ($title || $controlshtml) {
//             $output .= html_writer::tag('div', html_writer::tag('div', html_writer::tag('div', '', array('class'=>'block_action')). $title . $controlshtml, array('class' => 'title')), array('class' => 'header'));
//         }
//         return $output;
//     }

//     /**
//      * Produces the content area for a block
//      *
//      * @param block_contents $bc
//      * @return string
//      */
//     protected function block_content(block_contents $bc) {
//         $output = html_writer::start_tag('div', array('class' => 'content'));
//         if (!$bc->title && !$this->block_controls($bc->controls)) {
//             $output .= html_writer::tag('div', '', array('class'=>'block_action notitle'));
//         }
//         $output .= $bc->content;
//         $output .= $this->block_footer($bc);
//         $output .= html_writer::end_tag('div');

//         return $output;
//     }
// }

// ?>