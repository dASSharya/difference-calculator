Вычислитель отличий / Difference Calculator

CLI-утилита для сравнения двух конфигурационных файлов (JSON, YAML)
с поддержкой вложенных структур и несколькими форматами вывода.

### Требования

- PHP 8.1+
- Composer

## Запуск проекта:

Для начала нужно склонировать репозиторий

```
git@github.com:dASSharya/difference-calculator.git
```

Установить зависимости

```
make install
```

---

## Использование:

Сравнение файлов
```
./bin/gendiff file1.json file2.json
./bin/gendiff --format plain file1.yaml file2.yaml
./bin/gendiff --format json file1.json file2.json
```

Запуск тестов

```
composer test
```
---


## Hexlet tests and linter status:
[![Actions Status](https://github.com/dASSharya/php-project-48/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/dASSharya/php-project-48/actions)
[![asciicast](https://asciinema.org/a/r8c1NN3xhtRKCYp4.svg)](https://asciinema.org/a/r8c1NN3xhtRKCYp4)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=dASSharya_php-project-48&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=dASSharya_php-project-48)
[![Bugs](https://sonarcloud.io/api/project_badges/measure?project=dASSharya_php-project-48&metric=bugs)](https://sonarcloud.io/summary/new_code?id=dASSharya_php-project-48)
[![Code Smells](https://sonarcloud.io/api/project_badges/measure?project=dASSharya_php-project-48&metric=code_smells)](https://sonarcloud.io/summary/new_code?id=dASSharya_php-project-48)
[![Coverage](https://sonarcloud.io/api/project_badges/measure?project=dASSharya_php-project-48&metric=coverage)](https://sonarcloud.io/summary/new_code?id=dASSharya_php-project-48)


