<?php
class users_view extends Stalker_View
{
    public function view_query()
    {
        return "SELECT `users`.`id`,
                    `users`.`firstName` AS `FirstName`,
                    `users`.`surname` AS `LastName`,
                    `users`.email AS `Email`,
                    `users`.`birthDate` AS `BirthDate`,
                    `users`.`gender` AS `Gender`,
                   FROM `users`
                  ORDER BY `users`.`id`";
    }
}
