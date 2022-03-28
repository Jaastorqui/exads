create table tv_series
(
    id int auto_increment,
    constraint table_name_pk
        primary key (id),
    title   varchar(255) null,
    channel varchar(255) null,
    gender  varchar(255) null
)  ENGINE = InnoDB;

INSERT INTO exads.tv_series (title, channel, gender) VALUES ('Harry Potter', '2', 'adventure');
INSERT INTO exads.tv_series (title, channel, gender) VALUES ('The Lord of the Rings', '3', 'Action');
INSERT INTO exads.tv_series (title, channel, gender) VALUES ('Titanic', '4', 'Romance');


create table tv_series_intervals
(
    id_tv_series int null,
    constraint tv_series_intervals_tv_series_id_fk
        foreign key (id_tv_series) references tv_series (id),

    week_day    int null,
    show_time   date null
)  ENGINE = InnoDB;


INSERT INTO exads.tv_series_intervals (id_tv_series, week_day, show_time) VALUES (1, 1, '2021-03-28');
INSERT INTO exads.tv_series_intervals (id_tv_series, week_day, show_time) VALUES (2, 2, '2021-03-28');
INSERT INTO exads.tv_series_intervals (id_tv_series, week_day, show_time) VALUES (3, 3, '2021-03-28');

INSERT INTO exads.tv_series_intervals (id_tv_series, week_day, show_time) VALUES (1, 4, '2021-03-29');
INSERT INTO exads.tv_series_intervals (id_tv_series, week_day, show_time) VALUES (2, 5, '2021-03-29');
INSERT INTO exads.tv_series_intervals (id_tv_series, week_day, show_time) VALUES (3, 6, '2021-03-29');

INSERT INTO exads.tv_series_intervals (id_tv_series, week_day, show_time) VALUES (1, 1, '2021-03-30');
INSERT INTO exads.tv_series_intervals (id_tv_series, week_day, show_time) VALUES (2, 5, '2021-03-30');
INSERT INTO exads.tv_series_intervals (id_tv_series, week_day, show_time) VALUES (3, 3, '2021-03-30');

INSERT INTO exads.tv_series_intervals (id_tv_series, week_day, show_time) VALUES (1, 1, '2021-03-29');
INSERT INTO exads.tv_series_intervals (id_tv_series, week_day, show_time) VALUES (2, 2, '2021-03-29');
INSERT INTO exads.tv_series_intervals (id_tv_series, week_day, show_time) VALUES (3, 3, '2021-03-29');

INSERT INTO exads.tv_series_intervals (id_tv_series, week_day, show_time) VALUES (1, 1, '2021-03-30');
INSERT INTO exads.tv_series_intervals (id_tv_series, week_day, show_time) VALUES (2, 2, '2021-03-30');
INSERT INTO exads.tv_series_intervals (id_tv_series, week_day, show_time) VALUES (3, 3, '2021-03-30');