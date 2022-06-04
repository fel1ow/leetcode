create table Person
(
    personId  int primary key,
    lastName  varchar(255),
    firstName varchar(255)
)
;
create table Address
(
    addressId int primary key,
    personId  int,
    city      varchar(255),
    state     varchar(255)
)
;
insert into Person
(personId, lastName, firstName)
values (1, 'Wang', 'Allen'),
       (2, 'Alice', 'Bob')
;
insert into Address
(addressId, personId, city, state)
values (1, 2, 'New York City', 'New York'),
       (2, 3, 'Leetcode', 'California')
;
select p.firstName, p.lastName, a.city, a.state
from Person p
         left join Address a on p.personId = a.personId
;