create table Followers
(
    user_id     int,
    follower_id int,
    primary key (user_id, follower_id)
)
;
insert into Followers
    (user_id, follower_id)
values (0, 1),
       (1, 0),
       (2, 0),
       (2, 1)
;
select user_id, count(follower_id) as followers_count
from Followers
group by user_id
;
