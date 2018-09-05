<?php

class Job {
  private $title;
  public $description;
  public $visible;
  public $months;

  public function __construct($title, $description) {
    $this->title = $title;
    $this->description = $description;
  }

  public function setTitle($t) {
    if($t == '') {
      $this->title = 'N/A';
    } else {
      $this->title = $t;
    }
  }

  public function getTitle() {
    return $this->title;
  }

  public function getDurationAsString() {
    $years = floor($this->months / 12);
    $extraMonths = $this->months % 12;
    return "$years years $extraMonths months";
  }
}

$job1 = new Job('PHP Developer', 'This job is awesome!!');
$job1->visible = true;
$job1->months = 16;

$job2 = new Job();
$job2->setTitle('Python Developer');
$job2->description = 'This job is vulture!!';
$job2->visible = true;
$job2->months = 24;

$job3 = new Job();
$job3->setTitle('');
$job3->description = 'This job is Spider!!';
$job3->visible = true;
$job3->months = 32;

$jobs = [
  $job1,
  $job2,
  $job3
    // [
    //   'title' => 'PHP Developer',
    //   'description' => ,
    //   'visible' => true,
    //   'months' => 16
    // ],
    // [
    //   'title' => 'Python Dev',
    //   'visible' => false,
    //   'months' => 14
    // ],
    // [
    //   'title' => 'DevOps',
    //   'visible' => true,
    //   'months' => 5
    // ],
    // [
    //   'title' => 'NodeJS Dev',
    //   'visible' => true,
    //   'months' => 24
    // ],
    // [
    //   'title' => 'Frontend Dev',
    //   'visible' => true,
    //   'months' => 3
    // ]
  ];
    
  function printJob($job) {
    if($job->visible == false) {
      return;
    }
  
    echo '<li class="work-position">';
    echo '<h5>' . $job->getTitle() . '</h5>';
    echo '<p>' . $job->description . '</p>';
    echo '<p>' . $job->getDurationAsString() . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }  