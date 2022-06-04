create table Cinema
(
    id          int primary key,
    movie       varchar(255),
    description varchar(255),
    rating      float
)
;
insert into Cinema
    (id, movie, description, rating)
values (1, 'War', 'great 3D', 8.9),
       (2, 'Science', 'fiction', 8.5),
       (3, 'irish', 'boring', 6.2),
       (4, 'Ice song', 'Fantacy', 8.6),
       (5, 'House card', 'Interesting', 9.1)
;
select * from Cinema
where id % 2 > 0
  and  description != 'boring'
order by rating desc
;
