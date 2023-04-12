
drop table ss;
drop table gs;
drop table team;
drop table coach;
drop table stadiums;
drop table division;
drop table conference;
drop table games;
drop table players;


-- Create new tables

create table conference (
    name varchar(10) primary key
);
grant select on conference to public;

create table division (
    name varchar(15) primary key,
    conference varchar(10),
    foreign key (conference) references conference(name) ON DELETE CASCADE
);
grant select on division to public;

create table coach (
    name varchar(30) primary key,
    age integer,
    isHeadCoach integer,
    team char(30)
);
grant select on coach to public;

create table stadiums (
    name varchar(30) primary key,
    capacity integer,
    city char(30)
);
grant select on stadiums to public;


create table team (
    name varchar(30) primary key,
    owner char(30),
    wins integer,
    losses integer,
    city char(30),
    division varchar(15) not null,
    coach varchar(30) not null unique,
    stadium varchar(30) not null unique,
    foreign key (division) references division(name) ON DELETE CASCADE,
    foreign key (coach) references coach(name) ON DELETE CASCADE,
    foreign key (stadium) references stadiums(name) ON DELETE CASCADE
);
grant select on team to public;

create table games (
    gameID integer primary key,
    gameDate DATE,
    homeTeam varchar(30),
    awayTeam varchar(30),
    homeTeamScore integer,
    awayTeamScore integer,
    stadium varchar(30)
);
grant select on games to public;

create table players (
    playerID integer primary key,
    playerNum integer,
    playerName varchar(30),
    age integer,
    position char(10),
    isCaptain integer,
    team varchar(30) not null
);
grant select on players to public;
            
create table ss (
    playerID integer not null,
    ssDate DATE,
    gameID integer not null,
    timeOnIce integer,
    isPlaying integer,
    goals integer,
    shotsOnGoal integer,
    penaltyMinutes integer,
    blockedShots integer,
    assists integer,
    primary key (playerID, ssDate),
    foreign key (playerID) references players(playerID) ON DELETE CASCADE,
    foreign key (gameID) references games(gameID) ON DELETE CASCADE
);
grant select on ss to public;

create table gs (
    playerID integer not null,
    gsDate DATE,
    gameID integer not null,
    timeOnIce integer,
    isPlaying integer,
    isShutOut integer,
    goalsAgainst integer,
    primary key (playerID, gsDate),
    foreign key (playerID) references players(playerID) ON DELETE CASCADE,
    foreign key (gameID) references games(gameID) ON DELETE CASCADE
);
grant select on gs to public;

-- insert data

insert into conference values ('Western');
insert into conference values ('Eastern');

insert into division values ('Pacific', 'Western');
insert into division values ('Central', 'Western');
insert into division values ('Atlantic', 'Eastern');
insert into division values ('Metropolitan', 'Eastern');

insert into coach values (
    'Rick Tocchet', 
    58,
    1,
    'Canucks'
);

insert into coach values (
    'Adam Foote', 
    51,
    0,
    'Canucks'
);

insert into coach values (
    'Paul Maurice', 
    56,
    1,
    'Panthers'
);      

insert into stadiums values (
    'Rogers Arena',
    18000,
    'Vancouver'
);      

insert into stadiums values (
    'FLA Live Arena',
    20000,
    'Sunrise'
);

insert into team values (
    'Canucks',
    'Francisco Aquilini',
    20,
    20,
    'Vancouver',
    'Pacific',
    'Rick Tocchet',
    'Rogers Arena'
);

insert into team values (
    'Panthers',
    'Vincent Violai',
    30,
    10,
    'Florida',
    'Atlantic',
    'Paul Maurice',
    'FLA Live Arena'
);

insert into players values (
    1,
    40,
    'Elias Pettersson',
    24, 
    'Center',
    0,
    'Canucks'
);

insert into players values (
    2,
    53,
    'Bo Horvat',
    27, 
    'Center',
    1,
    'Canucks'
);

insert into players values (
    3,
    1,
    'Roberto Luongo',
    43, 
    'Goalie',
    0,
    'Panthers'
);

insert into players values (
    4,
    35,
    'Thatcher Demko',
    27, 
    'Goalie',
    0,
    'Canucks'
);

insert into games values (
    1,
    TO_DATE ('01-DEC-2022', 'DD-MM-YYYY'),
    'Canucks',
    'Panthers',
    6,
    2,
    'Rogers Arena'
);

insert into games values (
    2,
    TO_DATE ('14-01-2023', 'DD-MM-YYYY'),
    'Panthers',
    'Canucks',
    0,
    4,
    'FLA Live Arena'
);

insert into ss values (
    1,
    TO_DATE ('01-DEC-2022', 'DD-MM-YYYY'),
    1,
    24, 
    1,
    3,
    3,
    2,
    0,
    1
);

insert into ss values (
    1,
    TO_DATE ('14-01-2023', 'DD-MM-YYYY'),
    2,
    21, 
    1,
    4,
    3,
    2,
    0,
    2
);

insert into ss values (
    2,
    TO_DATE ('01-DEC-2022', 'DD-MM-YYYY'),
    1,
    25, 
    1,
    3,
    1,
    4,
    2,
    1
);

insert into gs values (
    3, 
    TO_DATE ('01-DEC-2022', 'DD-MM-YYYY'),
    1,
    60,
    1,
    0,
    6
);

insert into gs values (
    3, 
    TO_DATE ('14-01-2023', 'DD-MM-YYYY'),
    2,
    60,
    1,
    0,
    4
);

insert into gs values (
    4, 
    TO_DATE ('01-DEC-2022', 'DD-MM-YYYY'),
    1,
    60,
    1,
    0,
    2
);

insert into gs values (
    4, 
    TO_DATE ('14-01-2023', 'DD-MM-YYYY'),
    2,
    60,
    1,
    1,
    0
);

commit;
