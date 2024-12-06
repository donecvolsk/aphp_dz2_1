<?php
declare(strict_types=1);

////метод для сотрудника который может проводить вебинары
interface WebinarSpeakerInterface
{
    public function conductWebinars(string $webinar);
}