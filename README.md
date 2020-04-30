# Garni Weather Station server PHP script
This simple php script gets data values from your Garni Meteo Station and coverts it to JSON file on your server. You need to setup few things.

## Instalation
In your Garni device, you should add your domain where you will save you JSON file, for example myweb.com

## Known bugs
- there is problem if you use SSL on your server. You need to use port 80
- in JSON file there are last data values, no history (I can make it)
