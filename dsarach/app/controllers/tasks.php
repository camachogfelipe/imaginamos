<?php

class Tasks extends Back_Controller
{

    const DATE_FORMAT = 'Y-m-d';

    private static $today;

    public function __construct()
    {
        parent::__construct();

        self::$today = new DateTime();

        DataMapper::add_model_path(array(BACKPATH . '_projects', BACKPATH . '_days_end'));
    }

    // ----------------------------------------------------------------------

    public function daily()
    {
        $this->finish_projects_out_date()
             ->block_winners_wall_on_projects();
    }

    // ----------------------------------------------------------------------

    private function finish_projects_out_date()
    {
        $projects = new Project;


        $projects->where_not_in_related_projects_status('var', array('guardado', 'finalizado'));

        $projects->where('delivery_date <', self::$today->format(self::DATE_FORMAT))->get();
        
        

        if ($projects->exists())
        {
            foreach ($projects->all as $project)
            {
                $project->finish_project_by_time();
            }
        }

        return $this;
    }

    // ----------------------------------------------------------------------

    private function block_winners_wall_on_projects()
    {
        $projects = new Project;
        $days_end = new Day_end;

        $days_end->get_by_var('end_days');

        $projects->select('id, name, code, delivery_date as finished_date, ccwn')
                ->select_related_user('email')
                ->where_related_projects_status('var', 'finalizado')
                ->where("DATE_ADD(`delivery_date`, INTERVAL {$days_end->day_one} DAY) <=", 'NOW()', false)
                ->where('ccwn', true)
                ->get();

        if ($projects->exists())
        {
            foreach ($projects as $project)
            {
                $projects->where('id', $project->id)->update('ccwn', false);
            }
        }

        return $this;
    }

    // ----------------------------------------------------------------------
}