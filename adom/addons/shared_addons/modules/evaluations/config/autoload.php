<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

$autoload['language'] = array('evaluations');

$autoload['model'] = array(
    'evaluations_m',
    'evaluations_questions_m',
    'evaluations_questions_types_m',
    'evaluations_options_m',
    
    'evaluations_replies_m',
    'evaluations_replies_answers_m',
    'evaluations_replies_questions_m'
);

/* End of file autoload.php */