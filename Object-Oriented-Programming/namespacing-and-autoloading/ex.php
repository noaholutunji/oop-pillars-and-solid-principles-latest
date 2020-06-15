<?php

use Stutord\Person;
use Stutord\Staff;
use Stutord\Business;

$noah = new Person('Noah Osuolale');

$staff = new Staff([$noah]);

$stutord = new Business($staff);

$stutord->hire(new Stutord\Person('Celsestina Thopmson'));

var_dump($stutord->getStaffMembers());