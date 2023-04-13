# NHL Stats Database

## Description
The domain of our PHP/Oracle application is centered around providing game day stats for the National Hockey
League (NHL). We have focused our scope on aspects of the league that a casual fan playing
fantasy hockey would be interested in, like team records and player stats. Fantasy hockey,
where fans draft their own team of NHL players and compete against each other based on NHL players'
real life performance, has recently exploded in popularity. In the NHL, there are approximately
23 active players on 32 different teams across the league playing 82 games per season. That’s
an overwhelming amount of information to know, and we want to make it easier for fans to
find out what’s important, regardless of their familiarity with fantasy hockey.

![](nhl_database_video_walkthrough.gif)

### Functionality
We have implemented a clean, user-inclusive GUI alongside our NHL Stats Database to enable users to easily INSERT new players, UPDATE player records and DELETE player records. 
We also offer other various COUNT, JOIN, PROJECTION, AGGREGATION and DIVISION queries to provide additional player insights. 
This allows users to:
- Find out which divisions are in a selected conference or which conference a selected division belongs to, as chosen by the user
- Find out how many players are in the league database
- Find all player attributes for a single team
- Find game statistics for a single player
- Find selected player attributes for all players in the league
- Find average age of players, grouped by team
- Find all players in the league having 3+ goals in one game (a hat-trick)
- Find all players in the league who have zero penalty minutes (PIM)
- Find all players in the league who have played in every stadium in the database
- Find goalies who have never had a shut-out

<p> The platform offers user notifications to indicate whether the queries were successful or incomplete, 
and error handling implementation indicates what type of error caused the failure 
(duplicate playerID values, invalid inputs, incomplete forms). </p>

## Contributors
- Ray Han
- Danielle Lim
- Thomson Mai

## Acknowledgements
UBC CPSC304 2018 Winter Term 1 PHP/Oracle Starter File
