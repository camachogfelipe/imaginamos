<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * evaluations details module
 *
 * @author 	Rigo B Castro - Imaginamos Dev Team
 * @website	http://imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	evaluations Module
 */
class Module_evaluations extends Module {

    public $version = '1.0.5';

    public function info()
    {

        $sections = array();

        if (function_exists('group_has_role'))
        {
            if (group_has_role('evaluations', 'admin_evaluations'))
            {
                $sections['evaluations'] = array(
                    'name' => 'evaluations:title',
                    'uri' => 'admin/evaluations',
                    'shortcuts' => array(
                        'create' => array(
                            'name' => 'evaluations:create',
                            'uri' => 'admin/evaluations/create',
                            'class' => 'add'
                        )
                    )
                );
            }
            if (group_has_role('evaluations', 'show_evaluations_results'))
            {
                $sections['results'] = array(
                    'name' => 'Resultados',
                    'uri' => 'admin/evaluations/results'
                );
            }
        }

        return array(
            'name' => array(
                'en' => 'evaluations',
                'es' => 'Evaluaciones'
            ),
            'description' => array(
                'en' => 'This is a PyroCMS module evaluations.',
                'es' => 'Módulo de evaluaciones'
            ),
            'frontend' => function_exists('group_has_role') ? group_has_role('evaluations', 'reply_evaluations') : false,
            'backend' => true,
            'roles' => array(
                'admin_evaluations', 'reply_evaluations', 'show_evaluations_results'
            ),
            'sections' => $sections
        );
    }

    public function install()
    {
        $this->_drop_tables();

        // ==== Create tables

        $tables = array(
            // Admin tables
            'evaluations' => array(
                'id' => array('type' => 'INT', 'primary' => true, 'auto_increment' => true,),
                'user_id' => array('type' => 'SMALLINT', 'constraint' => 5, 'null' => false, 'unsigned' => true),
                'name' => array('type' => 'VARCHAR', 'constraint' => 100, 'null' => false,),
                'description' => array('type' => 'TEXT', 'null' => true),
                'slug' => array('type' => 'VARCHAR', 'constraint' => 100, 'null' => false,),
                'created_on' => array('type' => 'DATETIME', 'null' => false,),
                'updated_on' => array('type' => 'TIMESTAMP', 'null' => false,),
                'finished_on' => array('type' => 'DATE', 'null' => true),
                'have_finished_date' => array('type' => 'TINYINT', 'constraint' => 1, 'null' => false, 'default' => 0),
                'status' => array('type' => 'ENUM', 'constraint' => array('closed', 'open'), 'default' => 'closed',),
            ),
            'evaluations_questions' => array(
                'id' => array('type' => 'INT', 'primary' => true, 'auto_increment' => true,),
                'evaluations_id' => array('type' => 'INT', 'null' => false,),
                'evaluations_questions_type_id' => array('type' => 'INT', 'null' => false,),
                'question' => array('type' => 'TEXT',),
                'order' => array('type' => 'MEDIUMINT', 'default' => 0),
            ),
            'evaluations_questions_types' => array(
                'id' => array('type' => 'INT', 'primary' => true, 'auto_increment' => true,),
                'name' => array('type' => 'VARCHAR', 'constraint' => 100, 'null' => false,),
                'slug' => array('type' => 'VARCHAR', 'constraint' => 100, 'null' => false,),
            ),
            'evaluations_options' => array(
                'id' => array('type' => 'INT', 'primary' => true, 'auto_increment' => true,),
                'evaluations_question_id' => array('type' => 'INT', 'null' => false,),
                'option' => array('type' => 'TEXT',),
                'is_correct' => array('type' => 'TINYINT', 'constraint' => 1, 'default' => 0),
                'order' => array('type' => 'MEDIUMINT', 'default' => 0),
            ),
            // User tables
            'evaluations_replies' => array(
                'id' => array('type' => 'INT', 'primary' => true, 'auto_increment' => true,),
                'evaluations_id' => array('type' => 'INT', 'null' => false,),
                'user_id' => array('type' => 'SMALLINT', 'constraint' => 5, 'null' => false, 'unsigned' => true),
                'replied_on' => array('type' => 'TIMESTAMP', 'null' => false),
            ),
            'evaluations_replies_questions' => array(
                'id' => array('type' => 'INT', 'primary' => true, 'auto_increment' => true,),
                'evaluations_reply_id' => array('type' => 'INT', 'null' => false,),
                'evaluations_question_id' => array('type' => 'INT', 'null' => false,)
            ),
            'evaluations_replies_answers' => array(
                'id' => array('type' => 'INT', 'primary' => true, 'auto_increment' => true,),
                'evaluations_replies_question_id' => array('type' => 'INT', 'null' => false,),
                'evaluations_option_id' => array('type' => 'INT', 'null' => false,)
            ),
        );

        if (!$this->install_tables($tables))
        {
            return false;
        }

        // ==== First Seeders

        $first_data['evaluations_questions_types'] = array(
            array(
                'name' => 'Única',
                'slug' => 'unique'
            ),
            array(
                'name' => 'Múltiple',
                'slug' => 'multiple'
            )
        );

        foreach ($first_data as $table => $fd)
        {
            foreach ($fd as $row)
            {
                if (!$this->db->insert($table, $row))
                {
                    return false;
                }
            }
        }

        // ==== Relationships

        $foreign_key_format = "ALTER TABLE {$this->db->dbprefix}%s ADD CONSTRAINT %s FOREIGN KEY (%s) references {$this->db->dbprefix}%s(id) ON DELETE CASCADE ON UPDATE CASCADE";

        $foreigns_keys = array(
            // evaluations_question => evaluations
            array(
                'evaluations_questions',
                'fk_evaluations_questions_evaluations',
                'evaluations_id',
                'evaluations'
            ),
            // evaluations_question => evaluations_questions_type
            array(
                'evaluations_questions',
                'fk_evaluations_questions_type',
                'evaluations_questions_type_id',
                'evaluations_questions_types'
            ),
            // evaluations_option => evaluations_question
            array(
                'evaluations_options',
                'fk_evaluations_options_question',
                'evaluations_question_id',
                'evaluations_questions'
            ),
            // evaluations_reply => evaluations
            array(
                'evaluations_replies',
                'fk_evaluations_replies_evaluations',
                'evaluations_id',
                'evaluations'
            ),
            // evaluations_replies_question => evaluations_question
            array(
                'evaluations_replies_questions',
                'fk_evaluations_replies_question',
                'evaluations_question_id',
                'evaluations_questions'
            ),
            // evaluations_replies_answers => evaluations_option
            array(
                'evaluations_replies_answers',
                'fk_evaluations_replies_option',
                'evaluations_option_id',
                'evaluations_options'
            )
        );

        foreach ($foreigns_keys as $fk)
        {
            if (!$this->db->query(vsprintf($foreign_key_format, $fk)))
            {
                return false;
            }
        }

        // ==== Settings of module

        $this->db->delete('settings', array('module' => 'evaluations'));

        $settings = array(
            array(
                'slug' => 'max_limit_evaluations',
                'title' => 'Max limit of evaluations',
                'description' => 'How is the limit of creation for evaluations? (0 is unlimited)',
                '`default`' => 0,
                '`value`' => 0,
                'type' => 'text',
                '`options`' => '',
                'is_required' => 1,
                'is_gui' => 1,
                'module' => 'evaluations'
            ),
            array(
                'slug' => 'evaluations_max_questions',
                'title' => 'Questions per evaluations',
                'description' => 'How questions per evaluations?',
                '`default`' => 5,
                '`value`' => 5,
                'type' => 'text',
                '`options`' => '',
                'is_required' => 1,
                'is_gui' => 1,
                'module' => 'evaluations'
            ),
            array(
                'slug' => 'evaluations_max_answers',
                'title' => 'Answers per Question',
                'description' => 'How answers per question?',
                '`default`' => 5,
                '`value`' => 5,
                'type' => 'text',
                '`options`' => '',
                'is_required' => 1,
                'is_gui' => 1,
                'module' => 'evaluations'
            )
        );

        foreach ($settings as $setting)
        {
            if (!$this->db->insert('settings', $setting))
            {
                return false;
            }
        }

        return true;
    }

    public function uninstall()
    {
        $this->_drop_tables();

        return $this->db->delete('settings', array('module' => 'evaluations'));
    }

    public function upgrade($old_version)
    {
        // Your Upgrade Logic
        return TRUE;
    }

    public function help()
    {
        // Return a string containing help info
        // You could include a file and return it here.
        return "No documentation has been added for this module.<br />Contact the module developer for assistance.";
    }

    public function admin_menu(&$menu)
    {
        $menu['Procedimientos']['Evaluaciones'] = 'admin/evaluations';
    }

    private function _drop_tables()
    {
        // Check foreign keys false
        $this->db->query('SET foreign_key_checks = 0;');


        $tables = array(
            // Drop tables for admin
            'evaluations',
            'evaluations_questions',
            'evaluations_questions_types',
            'evaluations_options',
            // Drop tables for user
            'evaluations_replies',
            'evaluations_replies_questions',
            'evaluations_replies_answers'
        );

        foreach ($tables as $t)
        {
            $this->dbforge->drop_table($t);
        }

        // Check foreign keys true
        $this->db->query('SET foreign_key_checks = 1;');

        return $this;
    }

}