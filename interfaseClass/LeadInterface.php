<?php
declare(strict_types=1);

//метод для сотрудника который может заниматься разработкой приложения
interface LeadInterface {
    public function manage(string $department);
}