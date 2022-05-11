create table Salary
(
    id int primary key ,
    name varchar(255),
    sex ENUM('f','m'),
    salary int
)
;
insert into Salary
(id, name, sex, salary) VALUES
(1, 'A', 'm', 2500),
(2, 'B', 'f', 1500),
(3, 'C', 'm', 5500),
(4, 'D', 'f', 500)
;
select *
from Salary
;
update Salary
set sex = case
    when sex='m' then 'f' else 'm' end
;
# or
update Salary
set sex = IF(sex = 'm', 'f', 'm')
;