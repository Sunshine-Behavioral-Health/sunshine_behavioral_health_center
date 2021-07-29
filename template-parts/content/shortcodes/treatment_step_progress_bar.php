<?php
function treatment_step_progress_bar($atts)
{

    $atts = shortcode_atts(
        array(
            'step' => ''
        ),
        $atts
    );
?>

<?php
    $output = '';
    $output .= '<section class="treatment_step_progress_bar_section">';
    $output .= '<div class="treatment_step_progress_bar_container">';
    $output .= '<ul class="multi-steps">';
    if (have_rows('treatment_steps', 'option')) :
        while (have_rows('treatment_steps', 'option')) : the_row();
            $treatmentStepNumber = get_row_index();
            if ($treatmentStepNumber == $atts['step']) {
                $output .= '<a class="active-step" href="' . get_sub_field('step_url', 'option') . '"><li>' . get_sub_field('step_name', 'option') . '</li></a>';
            } else {
                $output .= '<a  href="' . get_sub_field('step_url', 'option') . '"><li>' . get_sub_field('step_name', 'option') . '</li></a>';
            }
        endwhile;
    endif;
    $output .= '</ul>';
    $output .= '</div>';
    $output .= '</section>';

    ob_start();
    get_template_part('template-parts/javascript/treatmentStepsJS');
    $output .= ob_get_clean();

    
    return $output;
}

add_shortcode('treatment_step_progress_bar', 'treatment_step_progress_bar');
?>