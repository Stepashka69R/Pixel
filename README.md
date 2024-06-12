# PIXEL
Информационная система для компьютерного клуба
Рабочее название дипломного проекта - pkproject.

# Установка
## 1. Скачайте и установите PyCharm Community Edition - https://www.jetbrains.com/ru-ru/pycharm/download/

## 2. Скачайте и установите MySQL Workbench - https://dev.mysql.com/downloads/installer/
Если возникнут сложности при  установке и настройке, используйте подробную инструкцию - https://it.vshp.online/#/pages/manuals/mysql_manual

## 3. Скачайте и распакуйте архив проекта в удобное для вас место

## 4. Откройте распакованную папку с проектом в PyCharm 

## 5. В терминале друг за другом введите комманды:
```
python -m venv venv
venv\scripts\activate
pip install -r requirements.txt
```
Дождитесь установки и переходите к следующему шагу.

## 6. В MySQL Workbench Создайте базу данных "comp_club"

## 7. В терминале Pycharm введите комманды:
```
python manage.py migrate
```
После этой комманды терминал должен вывести несколько строк с "ОК" на конце. Далее вводим:
```
python manage.py createsuperuser
```
И вводим необходимые данные для выведенных строк. При необходимости, поле email можно пропустить

## 8. Запускаем сервер
```
python manage.py runserver
```
И переходим на выведенную ссылку локального сервера "http://127.0.0.1:8000/".
