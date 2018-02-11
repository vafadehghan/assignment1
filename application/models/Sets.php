<?php
class Sets extends CSV_Model
{
    public $setId;
    public $name;
    public $head;
    public $torso;
    public $rhand;
    public $lhand;
    public $rfoot;
    public $lfoot;

    public function __construct()
    {
        parent::__construct(APPPATH . "../data/Sets.csv", "setId", "sets");
    }
}
