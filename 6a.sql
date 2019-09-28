SELECT name.name, work.name, category.salary
FROM name
JOIN work on work.id = name.id_work
JOIN category on category.id = name.id_salary