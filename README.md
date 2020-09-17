<!-- [![Build Status](https://travis-ci.com/arnaud-dml/majority.svg?branch=master)](https://travis-ci.com/arnaud-dml/majority) -->
[![codecov](https://codecov.io/gh/arnaud-dml/majority/branch/master/graph/badge.svg)](https://codecov.io/gh/arnaud-dml/majority)

## Installation
#### Booting the development environment of the project

- Switch branches, update the local working directory with data from a remote repository & "rebase".
- Builds, (re)creates, starts, and attaches to Docker containers for a service.
- Installations and initializations.

```
make GIT_BRANCH="target" install
```

## Testing
#### PHPUnit: self-test & diagnostics

Options:
- Generate code coverage report.
- Report test execution progress in TestDox format.

```
docker exec -i project.local-server phpunit --coverage-clover=coverage.xml --testdox
```


## Annex
#### Stops containers and removes containers, networks, volumes, and images created by up.

By default (without options), the only things removed are:

- Containers for services defined in the Compose file.
- Networks defined in the networks section of the Compose file.
- The default network, if one is used.

```
export APP_URL=project.local
export APACHE_PORT=80
export MYSQL_PORT=3306
export MYSQL_ROOT_PASSWORD=XXXX
export ADMINER_PORT=8080
export NODE_SERVER_PORT=3000

docker-compose down
```