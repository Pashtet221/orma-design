# ORMA® Design

Код темы WordPress находится в корне репозитория. Для изменений PHP, CSS, JS и шаблонов работай с файлами темы.

Для работы с данными WordPress используй `codex/scripts/wp`. Перед первой операцией выполни `health`, `site` и `schema`. Проверь, что подключён нужный сайт. Перед записью прочитай объект, после записи перечитай его и проверь результат.

Настройка описана в [codex/README.md](codex/README.md), правила работы с API — в [codex/AGENTS.md](codex/AGENTS.md). Храни Application Password в переменных окружения или в игнорируемом `codex/config/.env`.
