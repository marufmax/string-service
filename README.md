# String to CSV
Simple PHP projects to calculate commission percentage for client into into different currencies.

### Pre-requisite: 
- [Docker](https://docs.docker.com/get-docker/)

### Build:
- clone this repository
- run `sh build.sh && sh run.sh`


### Run:
- Exec into container: `docker exec -it string-service sh`
- Run `composer update` to making sure all the dependencies is installed and updated
- `cd` into `cmd`  directory
- run following command
```
/app/cmd# php cli.php hello world
```
It will convert the string to uppercase and print out then
will convert to alternate case, print out.
and save the original string into a CSV file

### Test
Run all the tests from container.
`docker exec -it string-service composr run test`
