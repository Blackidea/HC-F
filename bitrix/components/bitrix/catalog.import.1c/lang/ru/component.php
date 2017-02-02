<?
$MESS["CC_BSC1_ERROR_SOURCE_CHECK"] = "Ошибка проверки источника запроса. Обновите модуль обмена или отключите проверку в настройках компонента.";
$MESS["CC_BSC1_ERROR_AUTHORIZE"] = "Ошибка авторизации. Неверное имя пользователя или пароль.";
$MESS["CC_BSC1_PERMISSION_DENIED"] = "У Вас нет прав для импорта каталога. Проверьте настройки компонента импорта.";
$MESS["CC_BSC1_ERROR_MODULE"] = "Модуль Информационных блоков не установлен.";
$MESS["CC_BSC1_ERROR_DATABASE_SERVER_TIME"] = "Время на сервере базы данных отличается от времени на веб-сервере больше, чем на 10 минут. Вероятно неправильно настроены временные зоны. Выполните настройку и повторите обмен.";
$MESS["CC_BSC1_ERROR_FILE_WRITE"] = "Ошибка записи в файл #FILE_NAME#.";
$MESS["CC_BSC1_ERROR_FILE_OPEN"] = "Ошибка открытия файла #FILE_NAME# для записи.";
$MESS["CC_BSC1_ERROR_HTTP_READ"] = "Ошибка чтения HTTP данных.";
$MESS["CC_BSC1_ERROR_UNKNOWN_COMMAND"] = "Неизвестная команда.";
$MESS["CC_BSC1_ERROR_INIT"] = "Ошибка инициализации временного каталога.";
$MESS["CC_BSC1_TABLES_DROPPED"] = "Временные таблицы удалены.";
$MESS["CC_BSC1_TABLES_CREATED"] = "Временные таблицы созданы.";
$MESS["CC_BSC1_TABLE_CREATE_ERROR"] = "Ошибка создания временных таблиц.";
$MESS["CC_BSC1_FILE_READ"] = "Файл импорта прочитан.";
$MESS["CC_BSC1_FILE_ERROR"] = "Ошибка открытия файла импорта.";
$MESS["CC_BSC1_FILE_PROGRESS"] = "Обработано #PERCENT#% файла.";
$MESS["CC_BSC1_INDEX_CREATED"] = "Временные таблицы проиндексированы.";
$MESS["CC_BSC1_INDEX_CREATE_ERROR"] = "Ошибка создания индекса для временных таблиц.";
$MESS["CC_BSC1_METADATA_ERROR"] = "Ошибка импорта метаданных.";
$MESS["CC_BSC1_METADATA_IMPORTED"] = "Метаданные импортированы успешно.";
$MESS["CC_BSC1_PROGRESS"] = "Обработано #DONE# из #TOTAL# элементов.";
$MESS["CC_BSC1_DONE"] = "Загрузка элементов завершена.";
$MESS["CC_BSC1_IMPORT_SUCCESS"] = "Импорт успешно завершен.";
$MESS["CC_BSC1_DEA_DONE"] = "Деактивация/Удаление элементов завершены.";
$MESS["CC_BSC1_ZIP_ERROR"] = "Ошибка распаковки архива.";
$MESS["CC_BSC1_ZIP_PROGRESS"] = "Идет распаковка архива.";
$MESS["CC_BSC1_ZIP_DONE"] = "Распаковка архива завершена.";
$MESS["CC_BSC1_SECTIONS_IMPORTED"] = "Группы импортированы.";
$MESS["CC_BSC1_SECTION_DEA_DONE"] = "Деактивация/удаление групп завершено.";
$MESS["CC_BSC1_DEACTIVATION_DONE"] = "Деактивация элементов завершена.";
$MESS["CC_BSC1_DEACTIVATION_ERROR"] = "Ошибка деактивации элементов.";
$MESS["CC_BCI1_NONE"] = "ничего";
$MESS["CC_BCI1_DEACTIVATE"] = "деактивировать";
$MESS["CC_BCI1_DELETE"] = "удалить";
$MESS["CC_BCI1_IBLOCK_TYPE"] = "Тип инфо-блока";
$MESS["CC_BCI1_ELEMENT_ACTION"] = "Что делать с элементами отсутствующими в файле импорта";
$MESS["CC_BCI1_SECTION_ACTION"] = "Что делать с разделами отсутствующими в файле импорта";
$MESS["CC_BCI1_SITE_LIST"] = "Сайты к которым привязывать инфоблоки при создании";
$MESS["CC_BCI1_INTERVAL"] = "Интервал одного шага в секундах (0 - выполнять загрузку за один шаг)";
$MESS["CC_BCI1_FILE_SIZE_LIMIT"] = "Размер единовременно загружаемой части файла (в байтах)";
$MESS["CC_BCI1_USE_CRC"] = "Использовать контрольные суммы элементов для оптимизации обновления каталога";
$MESS["CC_BCI1_USE_ZIP"] = "Использовать сжатие zip, если доступно";
$MESS["CC_BCI1_GENERATE_PREVIEW"] = "Автоматически генерировать картинку анонса";
$MESS["CC_BCI1_DETAIL_RESIZE"] = "Изменять детальную картинку";
$MESS["CC_BCI1_USE_OFFERS"] = "Вести предложения в отдельном инфоблоке";
$MESS["CC_BCI1_FORCE_OFFERS"] = "Цены только в инфоблоке предложений";
$MESS["CC_BSC1_ERROR_SESSION_ID_CHANGE"] = "Включена смена идентификатора сессий. В файле подключения компонента обмена, до подключения пролога определите константу BX_SESSION_ID_CHANGE: define('BX_SESSION_ID_CHANGE', false);";
$MESS["CC_BCI1_USE_IBLOCK_PICTURE_SETTINGS"] = "Использовать настройки инфоблока для обработки изображений";
$MESS["CC_BCI1_TRANSLIT_ON_ADD"] = "Транслитерировать при добавлении элемента или раздела";
$MESS["CC_BCI1_TRANSLIT_ON_UPDATE"] = "Транслитерировать при обновлении элемента или раздела";
$MESS["CC_BCI1_TRANSLIT_MAX_LEN"] = "Максимальная длина результата транслитерации";
$MESS["CC_BCI1_TRANSLIT_CHANGE_CASE"] = "Приведение к регистру";
$MESS["CC_BCI1_TRANSLIT_CHANGE_CASE_PRESERVE"] = "сохранить";
$MESS["CC_BCI1_TRANSLIT_CHANGE_CASE_LOWER"] = "к нижнему";
$MESS["CC_BCI1_TRANSLIT_CHANGE_CASE_UPPER"] = "к верхнему";
$MESS["CC_BCI1_TRANSLIT_REPLACE_SPACE"] = "Замена для символа пробела";
$MESS["CC_BCI1_TRANSLIT_REPLACE_OTHER"] = "Замена для прочих символов";
$MESS["CC_BCI1_TRANSLIT_DELETE_REPEAT_REPLACE"] = "Удалять лишние символы замены";
$MESS["CC_BCT1_TABLE_EXIST_ERROR"] = "Временная таблица не существует";
$MESS["CC_BCI1_DISABLE_CHANGE_PRICE_NAME"] = "Не менять код (название) типа цены, если используется внешний код (XML_ID)";
?>