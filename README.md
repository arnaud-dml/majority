[![Build Status](https://travis-ci.org/arnaud-dml/majority.svg?branch=master)](https://travis-ci.com/arnaud-dml/majority)
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
