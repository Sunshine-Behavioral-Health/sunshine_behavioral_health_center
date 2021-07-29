<?php

// SHORTCODES
//Contact Form CTA
function contact_form_cta_shortcode()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/contact_form_cta');
	return ob_get_clean();
}

add_shortcode('contact_form_cta_shortcode', 'contact_form_cta_shortcode');


//content left box right CTA
function content_left_box_right_cta_shortcode()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/content_left_box_right');
	return ob_get_clean();
}

add_shortcode('content_left_box_right_cta_shortcode', 'content_left_box_right_cta_shortcode');


//Background image Headline/SubHeadline and Two buttons CTA
function image_cta_headline_sub_headline_two_buttons_cta_shortcode()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/image_cta_headline_sub_headline_two_buttons');
	return ob_get_clean();
}

add_shortcode('image_cta_headline_sub_headline_two_buttons_cta_shortcode', 'image_cta_headline_sub_headline_two_buttons_cta_shortcode');



//Phone CTA
function phone_cta_shortcode()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/phone_cta');
	return ob_get_clean();
}

add_shortcode('phone_cta_shortcode', 'phone_cta_shortcode');


//Two Long Buttons CTA
function two_long_buttons_cta_shortcode()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/two_long_buttons_cta');
	return ob_get_clean();
}

add_shortcode('two_long_buttons_cta_shortcode', 'two_long_buttons_cta_shortcode');


//Video Form CTA
function video_cta_shortcode()
{

	ob_start();
	get_template_part('template-parts/content/shortcodes/video_cta');
	return ob_get_clean();
}

add_shortcode('video_cta_shortcode', 'video_cta_shortcode');


//Blue Featured Content
function blue_featured_content_shortcode()
{

	ob_start();
	get_template_part('template-parts/content/shortcodes/blue_featured_content');
	return ob_get_clean();
}

add_shortcode('blue_featured_content_shortcode', 'blue_featured_content_shortcode');


//Questions Sidebar
function treatment_questions_sidebar_shortcode()
{

	ob_start();
	get_template_part('template-parts/content/shortcodes/treatment_questions_sidebar');
	return ob_get_clean();
}

add_shortcode('treatment_questions_sidebar_shortcode', 'treatment_questions_sidebar_shortcode');


//Learn About Sidebar
function learnAbout_sidebar_shortcode()
{

	ob_start();
	get_template_part('template-parts/content/shortcodes/learn_about_sidebar');
	return ob_get_clean();
}

add_shortcode('learnAbout_sidebar_shortcode', 'learnAbout_sidebar_shortcode');


//Gallery Sidebar
function gallery_sidebar_shortcode()
{

	ob_start();
	get_template_part('template-parts/content/shortcodes/gallery_sidebar');
	return ob_get_clean();
}

add_shortcode('gallery_sidebar_shortcode', 'gallery_sidebar_shortcode');


//COVID19 Sidebar
function covid19_sidebar_shortcode()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/covid19');
	return ob_get_clean();
}

add_shortcode('covid19_sidebar_shortcode', 'covid19_sidebar_shortcode');


//Two Column Gallery Shortcode
function two_column_gallery_shortcode()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/two_column_gallery');
	return ob_get_clean();
}

add_shortcode('two_column_gallery_shortcode', 'two_column_gallery_shortcode');



//Three Column Gallery Shortcode
function three_column_gallery_shortcode()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/three_column_gallery');
	return ob_get_clean();
}

add_shortcode('three_column_gallery_shortcode', 'three_column_gallery_shortcode');


//Learn More About Center
function learn_more_about_center()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/learn_more_about_center');
	return ob_get_clean();
}

add_shortcode('learn_more_about_center', 'learn_more_about_center');

//Career Opportunitites
function career_opportunities()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/career_opportunities');
	return ob_get_clean();
}

add_shortcode('career_opportunities', 'career_opportunities');


//Two Column Bullet List Shortcode
function two_column_bullet_list()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/two_column_bullet_list');
	return ob_get_clean();
}

add_shortcode('two_column_bullet_list', 'two_column_bullet_list');



//Centers Cards Shortcode
function centers_cards_shortcode()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/centers_cards_shortcode');
	return ob_get_clean();
}

add_shortcode('centers_cards_shortcode', 'centers_cards_shortcode');

//Centers Cards Two Rows Shortcode
function centers_cards_two_rows_shortcode()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/centers_cards_two_rows_shortcode');
	return ob_get_clean();
}

add_shortcode('centers_cards_two_rows_shortcode', 'centers_cards_two_rows_shortcode');


//two_cta_btn_sidebar_shortcode
function two_cta_btn_sidebar_shortcode()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/two_cta_btn_sidebar_shortcode');
	return ob_get_clean();
}

add_shortcode('two_cta_btn_sidebar_shortcode', 'two_cta_btn_sidebar_shortcode');


//learn_centers_sidebar_shortcode
function learn_centers_sidebar_shortcode()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/learn_centers_sidebar_shortcode');
	return ob_get_clean();
}

add_shortcode('learn_centers_sidebar_shortcode', 'learn_centers_sidebar_shortcode');




//two_sentence_cta_no_btn_no_background
function two_sentence_cta_no_btn_no_background()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/two_sentence_cta_no_btn_no_background');
	return ob_get_clean();
}

add_shortcode('two_sentence_cta_no_btn_no_background', 'two_sentence_cta_no_btn_no_background');


function sliding_insurance_form()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/sliding_insurance_form');
	return ob_get_clean();
}

add_shortcode('sliding_insurance_form', 'sliding_insurance_form');


function graph_tabs_1()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/graph_tabs_1');
	return ob_get_clean();
}

add_shortcode('graph_tabs_1', 'graph_tabs_1');

function graph_tabs_2()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/graph_tabs_2');
	return ob_get_clean();
}

add_shortcode('graph_tabs_2', 'graph_tabs_2');

function graph_tabs_3()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/graph_tabs_3');
	return ob_get_clean();
}

add_shortcode('graph_tabs_3', 'graph_tabs_3');



function sliding_form_shortcode()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/sliding_form_shortcode');
	return ob_get_clean();
}

add_shortcode('sliding_form_shortcode', 'sliding_form_shortcode');



function single_graph_shortcode_1()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/single_graph_shortcode_1');
	return ob_get_clean();
}

add_shortcode('single_graph_shortcode_1', 'single_graph_shortcode_1');


function single_graph_shortcode_2()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/single_graph_shortcode_2');
	return ob_get_clean();
}

add_shortcode('single_graph_shortcode_2', 'single_graph_shortcode_2');


function single_graph_shortcode_3()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/single_graph_shortcode_3');
	return ob_get_clean();
}

add_shortcode('single_graph_shortcode_3', 'single_graph_shortcode_3');

function single_graph_shortcode_4()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/single_graph_shortcode_4');
	return ob_get_clean();
}

add_shortcode('single_graph_shortcode_4', 'single_graph_shortcode_4');


function form_testing()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/form_testing');
	return ob_get_clean();
}

add_shortcode('form_testing', 'form_testing');


function google_web_story()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/google_web_story');
	return ob_get_clean();
}

add_shortcode('google_web_story', 'google_web_story');



function headline_and_button_shortcode()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/headline_and_button_shortcode');
	return ob_get_clean();
}

add_shortcode('headline_and_button_shortcode', 'headline_and_button_shortcode');


function related_pages()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/related_pages');
	return ob_get_clean();
}

add_shortcode('related_pages', 'related_pages');



function treatment_options()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/treatment_options');
	return ob_get_clean();
}

add_shortcode('treatment_options', 'treatment_options');


function twentyfive_px_spacer()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/spacers/twentyfive_px_spacer');
	return ob_get_clean();
}

add_shortcode('twentyfive_px_spacer', 'twentyfive_px_spacer');


function thirtytwo_px_spacer()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/spacers/thirtytwo_px_spacer');
	return ob_get_clean();
}

add_shortcode('thirtytwo_px_spacer', 'thirtytwo_px_spacer');



function fifty_px_spacer()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/spacers/fifty_px_spacer');
	return ob_get_clean();
}

add_shortcode('fifty_px_spacer', 'fifty_px_spacer');


function seventyfive_px_spacer()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/spacers/seventyfive_px_spacer');
	return ob_get_clean();
}

add_shortcode('seventyfive_px_spacer', 'seventyfive_px_spacer');


function onehundred_px_spacer()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/spacers/onehundred_px_spacer');
	return ob_get_clean();
}

add_shortcode('onehundred_px_spacer', 'onehundred_px_spacer');

function search_query_shortcode()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/search_query_shortcode');
	return ob_get_clean();
}

add_shortcode('search_query_shortcode', 'search_query_shortcode');



add_shortcode('onehundred_px_spacer', 'onehundred_px_spacer');


function data_cards_shortcode()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/data_cards_shortcode');
	return ob_get_clean();
}

add_shortcode('data_cards_shortcode', 'data_cards_shortcode');


function image_left_cta_right_shortcode_dynamic()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/image_left_cta_right_shortcode_dynamic');
	return ob_get_clean();
}

add_shortcode('image_left_cta_right_shortcode_dynamic', 'image_left_cta_right_shortcode_dynamic');

function image_left_cta_right_shortcode_static()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/image_left_cta_right_shortcode_static');
	return ob_get_clean();
}

add_shortcode('image_left_cta_right_shortcode_static', 'image_left_cta_right_shortcode_static');



function expandable_rows_shortcode()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/expandable_rows_shortcode');
	return ob_get_clean();
}

add_shortcode('expandable_rows_shortcode', 'expandable_rows_shortcode');



function insurance_slider_sidebar_shortcode()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/insurance_slider_sidebar_shortcode');
	return ob_get_clean();
}

add_shortcode('insurance_slider_sidebar_shortcode', 'insurance_slider_sidebar_shortcode');


function insurance_slider_shortcode()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/insurance_slider_shortcode');
	return ob_get_clean();
}

add_shortcode('insurance_slider_shortcode', 'insurance_slider_shortcode');

function insurance_slider_shortcode_static()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/insurance_slider_shortcode_static');
	return ob_get_clean();
}

add_shortcode('insurance_slider_shortcode_static', 'insurance_slider_shortcode_static');



function list_and_cta_shortcode()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/list_and_cta_shortcode');
	return ob_get_clean();
}

add_shortcode('list_and_cta_shortcode', 'list_and_cta_shortcode');




function insurance_list_and_cta_static()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/insurance_list_and_cta_static');
	return ob_get_clean();
}

add_shortcode('insurance_list_and_cta_static', 'insurance_list_and_cta_static');




function insurance_list_and_cta_static_sidebar()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/insurance_list_and_cta_static_sidebar');
	return ob_get_clean();
}

add_shortcode('insurance_list_and_cta_static_sidebar', 'insurance_list_and_cta_static_sidebar');



function insurance_list_and_cta_universal()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/insurance_list_and_cta_universal');
	return ob_get_clean();
}

add_shortcode('insurance_list_and_cta_universal', 'insurance_list_and_cta_universal');




function image_left_cta_right_shortcode_COVID()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/image_left_cta_right_shortcode_COVID');
	return ob_get_clean();
}

add_shortcode('image_left_cta_right_shortcode_COVID', 'image_left_cta_right_shortcode_COVID');


function covid_cta_shortcode()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/covid_cta_shortcode');
	return ob_get_clean();
}

add_shortcode('covid_cta_shortcode', 'covid_cta_shortcode');


function customize_experience()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/customize_experience');
	return ob_get_clean();
}

add_shortcode('customize_experience', 'customize_experience');



function customized_map()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/customized_map');
	return ob_get_clean();
}

add_shortcode('customized_map', 'customized_map');



function state_table()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/state_table');
	return ob_get_clean();
}

add_shortcode('state_table', 'state_table');

function author_and_medical_review()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/author_and_medical_review');
	return ob_get_clean();
}

add_shortcode('author_and_medical_review', 'author_and_medical_review');


function faq_sidebar()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/faq_sidebar');
	return ob_get_clean();
}

add_shortcode('faq_sidebar', 'faq_sidebar');


function search_form()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/search_form');
	return ob_get_clean();
}

add_shortcode('search_form', 'search_form');

function accordions_with_toc()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/accordions_with_toc');
	return ob_get_clean();
}

add_shortcode('accordions_with_toc', 'accordions_with_toc');

function staff()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/staff');
	return ob_get_clean();
}

add_shortcode('staff', 'staff');

function staff_home()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/staff_home');
	return ob_get_clean();
}

add_shortcode('staff_home', 'staff_home');


function recommendations()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/recommendations');
	return ob_get_clean();
}

add_shortcode('recommendations', 'recommendations');


function gallery()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/gallery');
	return ob_get_clean();
}

add_shortcode('gallery', 'gallery');

function treatment_step_carousel()
{
	ob_start();
	get_template_part('template-parts/content/shortcodes/treatment_step_carousel');
	return ob_get_clean();
}

add_shortcode('treatment_step_carousel', 'treatment_step_carousel');



get_template_part('template-parts/content/shortcodes/treatment_step_progress_bar');

