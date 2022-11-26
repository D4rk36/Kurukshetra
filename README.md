![](https://github.com/D4rk36/Kurukshetra/blob/dev/banner.jpg)

# Krukshetra
Kurushetra is a vulnerable lab geared towards learning and practicing Cross-Site Scripting (XSS) challenges by handson learning.

## Installation

[Docker Setup]

- Install [docker](https://docs.docker.com/engine/install/)
- Install [docker compose](https://docs.docker.com/compose/install/)
- Once installed navigate to labs directory by supplying following commands
```
cd Kurukshetra
```
- Open docker-compose.yml file and validate the network port in use at line `18`.
```
"80:80"
```
- Change the port in above step as per your convinience, this port number will later be used to access the labs.
> Note: Well known ports such 80 gives error, since they are in use by prominent services on the system.

- Supply following command to launch the docker instances.
```
docker-compose up
```
- Open a web browser ex: Google chrome and navigate to http://localhost to access the lab.
