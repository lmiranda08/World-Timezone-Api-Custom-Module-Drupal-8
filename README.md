
# Connect to Api in Drupal 8 in custom module

In this custom module, you can see the how to connect to World Timezone Api and shows the results in form table.


### Installation 🔧

1) You need to have Lando for enviroment
2) First clone repo
3) Lando start
4) Lando info (show all the configuration like database login)
5) Need to add a menu in Drupal configuration with path: /timezone.

* If datetime not show need to refresh cache using Drupal configuration or lando drush cache-rebuild.
* You need to refresh because in some cases, one city is show and other not, but you can do the test in POSTMAN. 
* Api: https://worldtimeapi.org/ 

## Author ✒️

Luis Miranda




