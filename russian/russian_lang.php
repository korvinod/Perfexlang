<?php
# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Имя';
$lang['options']              = 'Настройки';
$lang['submit']               = 'Сохранить';
$lang['added_successfuly']    = '%s успешно добавлен.';
$lang['updated_successfuly']  = '%s успешно обновлен.';
$lang['edit']                 = 'Редактировать %s';
$lang['add_new']              = 'Добавить новый %s';
$lang['deleted']              = '%s удалён';
$lang['problem_deleting']     = 'Невозможно удалить %s';
$lang['is_referenced']        = 'Идентификатор %s уже используется.';
$lang['close']                = 'Закрыть';
$lang['send']                 = 'Отправить';
$lang['cancel']               = 'Отмена';
$lang['go_back']              = 'Назад';
$lang['error_uploading_file'] = 'Ошибка загрузке файла';
$lang['load_more']            = 'Загрузить еще';
$lang['cant_delete_default']  = 'Не удается удалить значение по умолчанию %s';

# Счета главное
$lang['invoice_status_paid']                = 'Оплачен';
$lang['invoice_status_unpaid']              = 'Необлачен';
$lang['invoice_status_overdue']             = 'Просрочен';
$lang['invoice_status_not_paid_completely'] = 'Частично оплачен';

$lang['invoice_pdf_heading'] = 'СЧЕТ';

$lang['invoice_table_item_heading']            = 'Пункт';
$lang['invoice_table_quantity_heading']        = 'Кол-во';
$lang['invoice_table_rate_heading']            = 'Цена';
$lang['invoice_table_tax_heading']             = 'Налог';
$lang['invoice_table_amount_heading']          = 'Количество';
$lang['invoice_subtotal']                      = 'Под итог';
$lang['invoice_adjustment']                    = 'Корректировка';
$lang['invoice_total']                         = 'Итого';
$lang['invoice_vat']                           = 'Номер плательщика НДС';
$lang['invoice_bill_to']                       = 'Плательщик';
$lang['invoice_data_date']                     = 'Дата счета:';
$lang['invoice_data_duedate']                  = 'Срок платежа:';
$lang['invoice_received_payments']             = 'Операции';
$lang['invoice_no_payments_found']             = 'Платежи не найдены для этого счета';
$lang['invoice_note']                          = 'Заметка:';
$lang['invoice_payments_table_number_heading'] = 'Платеж #';
$lang['invoice_payments_table_mode_heading']   = 'Тип платежа';
$lang['invoice_payments_table_date_heading']   = 'Дата';
$lang['invoice_payments_table_amount_heading'] = 'Количество';


# Объявления
$lang['announcement']                 = 'Объявление';
$lang['announcement_lowercase']       = 'объявление';
$lang['announcements']                = 'Объявления';
$lang['announcements_lowercase']      = 'объявления';
$lang['new_announcement']             = 'Новое объявление';
$lang['announcement_name']            = 'Тема';
$lang['announcement_message']         = 'Сообщение';
$lang['announcement_show_to_staff']   = 'Показать команде';
$lang['announcement_show_to_clients'] = 'Показывать клиенту';
$lang['announcement_show_my_name']    = 'Показывать моё имя';

# Clients
$lang['clients']                               = 'Клиенты';
$lang['client']                                = 'Клиент';
$lang['new_client']                            = 'Новый клиент';
$lang['client_lowercase']                      = 'клиент';
$lang['client_delete_tooltip']                 = 'Все данные клиента будут удалены. Договоры, билеты, заметки. ПРИМЕЧАНИЕ. Если Счета, найденные клиенты, не будут удалены. Вам необходимо присвоить этот счет другому клиенту, чтобы сохранить номер Счета';
$lang['customer_delete_invoices_warning']      = 'У этого клиента есть Счета на счете. Вы не можете удалить этого клиента. Измените все счета другому клиенту в будущем, затем удалите.';
$lang['client_firstname']                      = 'Имя';
$lang['client_lastname']                       = 'Фамилия';
$lang['client_email']                          = 'Email';
$lang['client_company']                        = 'Компания';
$lang['client_vat_number']                     = 'ИНН';
$lang['client_address']                        = 'Адрес';
$lang['client_city']                           = 'Город';
$lang['client_postal_code']                    = 'Почтовый индекс';
$lang['client_state']                          = 'Область';
$lang['client_password']                       = 'Пароль';
$lang['client_password_change_populate_note']  = 'Примечание: если вы заполните эти поля, пароль будет изменен для этого контакта.';
$lang['client_password_last_changed']          = 'Последнее изменение пароля:';
$lang['login_as_client']                       = 'Войти как клиент';
$lang['client_invoices_tab']                   = 'Счета';
$lang['contracts_invoices_tab']                = 'Договора';
$lang['contracts_tickets_tab']                 = 'Тикеты';
$lang['contracts_notes_tab']                   = 'Записи';
$lang['client_invoice_number_table_heading']   = 'Счета #';
$lang['client_invoice_date_table_heading']     = 'Дата';
$lang['client_invoice_due_date_table_heading'] = 'Срок';
$lang['client_string_table_heading']           = 'Клиент';
$lang['client_amount_table_heading']           = 'Количество';
$lang['client_status_table_heading']           = 'Статус';
$lang['note_description']                      = 'Описание примечания';

$lang['client_string_contracts_table_heading']      = 'Клиент';
$lang['client_start_date_contracts_table_heading']  = 'Дата начала';
$lang['client_end_date_contracts_table_heading']    = 'Дата окончания';
$lang['client_description_contracts_table_heading'] = 'Описание';
$lang['client_do_not_send_welcome_email']           = 'Не отправлять привественное письмо';

$lang['clients_notes_table_description_heading'] = 'Описание';
$lang['clients_notes_table_addedfrom_heading']   = 'Добавлено с';
$lang['clients_notes_table_dateadded_heading']   = 'Дата добавления';
$lang['clients_list_full_name']   = 'Полное имя';
$lang['clients_list_last_login']  = 'Последний вход';

# Contracts
$lang['contracts']                = 'Договора';
$lang['contract']                 = 'Договор';
$lang['new_contract']             = 'Новый договор';
$lang['contract_lowercase']       = 'договор';
$lang['contract_start_date']      = 'Дата начала';
$lang['contract_end_date']        = 'Дата окончания';
$lang['contract_subject']         = 'Тема';
$lang['contract_description']     = 'Описание';
$lang['contract_subject_tooltip'] = 'Тема также видна клиенту';
$lang['contract_client_string']   = 'Клиент';
$lang['contract_attach']          = 'Прикрепить документ';

$lang['contract_list_client']     = 'Клиент';
$lang['contract_list_subject']    = 'Тема';
$lang['contract_list_start_date'] = 'Дата начала';
$lang['contract_list_end_date']   = 'Дата окончания';

# Currencies
$lang['currencies']           = 'Валюты';
$lang['currency']             = 'Валюта';
$lang['new_currency']         = 'Новая валюта';
$lang['currency_lowercase']   = 'валюта';
$lang['base_currency_set']    = 'Теперь это ваша валюта по-умолчанию.';
$lang['make_base_currency']   = 'Сделать валютой по-умолчанию';
$lang['base_currency_string'] = 'Базовая валюта';

$lang['currency_list_name']   = 'Название';
$lang['currency_list_symbol'] = 'Символ';


$lang['currency_add_edit_description'] = 'Код валюты';
$lang['currency_add_edit_rate']        = 'Символ';

$lang['currency_edit_heading'] = 'Редактировать валюту';
$lang['currency_add_heading']  = 'Добавить новую валюту';


# Department
$lang['departments']          = 'Отделы';
$lang['department']           = 'Отдел';
$lang['new_department']       = 'Новый отдел';
$lang['department_lowercase'] = 'отдел';

$lang['department_name']             = 'Название отдела';
$lang['department_email']            = 'Email отдела';
$lang['department_hide_from_client'] = 'Скрыть от клиента?';
$lang['department_list_name']        = 'Название';

# Email Templates
$lang['email_templates']                        = 'Email шаблоны';
$lang['email_template']                         = 'Email шаблон';
$lang['email_template_lowercase']               = 'email шаблон';
$lang['email_templates_lowercase']              = 'email шаблоны';
$lang['email_template_ticket_fields_heading']   = 'Тикеты';
$lang['email_template_invoices_fields_heading'] = 'Счета';
$lang['email_template_clients_fields_heading']  = 'Клиенты';

$lang['template_name']                                      = 'Имя шаблона';
$lang['template_subject']                                   = 'Тема';
$lang['template_fromname']                                  = 'От имени';
$lang['template_fromemail']                                 = 'От Email';
$lang['send_as_plain_text']                                 = 'Отправить как обычный текст';
$lang['email_template_disabed']                             = 'Отключено';
$lang['email_template_email_message']                       = 'Сообщение электронной почты';
$lang['available_merge_fields']                             = 'Доступные поля слияния';
# Home
$lang['dashboard_string']                                   = 'Панель приборов';
$lang['home_latest_todos']                                  = 'Незавершённые';
$lang['home_no_latest_todos']                               = 'Не найдено ни одного документа';
$lang['home_latest_finished_todos']                         = 'Завершённые';
$lang['home_no_finished_todos_found']                       = 'Не найдено готовых дел';
$lang['home_todo_heading']                                  = 'Выполнить пункт';
$lang['home_tickets_awaiting_reply_by_department']          = 'Tickets Ожидание ответа от отдела';
$lang['home_tickets_awaiting_reply_by_status']              = 'Tickets ожидающие ответа по статусу';
$lang['home_this_week_events']                              = 'События этой недели';
$lang['home_upcoming_events_next_week']                     = 'Предстоящие события Следующая неделя';
$lang['home_event_added_by']                                = 'Event added by';
$lang['home_public_event']                                  = 'Открытое событие';
$lang['home_weekly_payment_records']                        = 'Еженедельная платежная ведомость';
$lang['home_weekend_ticket_opening_statistics']             = 'Еженедельная статистика открытия Ticket';
# Newsfeed
$lang['whats_on_your_mind']                                 = 'Делитесь документами, идеями..';
$lang['new_post']                                           = 'Post';
$lang['newsfeed_upload_tooltip']                            = 'Совет. Перетащите файлы, чтобы их загрузить.';
$lang['newsfeed_all_departments']                           = 'Все отделы';
$lang['newsfeed_pin_post']                                  = 'Закрепить запись';
$lang['newsfeed_unpin_post']                                = 'Открепить запись';
$lang['newsfeed_delete_post']                               = 'Удалить';
$lang['newsfeed_published_post']                            = 'Опубликовано';
$lang['newsfeed_you_like_this']                             = 'You like this';
$lang['newsfeed_like_this']                                 = 'Нравится это';
$lang['newsfeed_one_other']                                 = 'Другие';
$lang['newsfeed_you']                                       = 'Вы';
$lang['newsfeed_and']                                       = 'а также';
$lang['newsfeed_you_and']                                   = 'Ты и';
$lang['newsfeed_like_this_saying']                          = 'Как это';
$lang['newsfeed_unlike_this_saying']                        = 'В отличие от этого';
$lang['newsfeed_show_more_comments']                        = 'Показать другие комментарии';
$lang['comment_this_post_placeholder']                      = 'Комментировать эту запись..';
$lang['newsfeed_post_likes_modal_heading']                  = 'Коллеги, которым нравится этот пост';
$lang['newsfeed_comment_likes_modal_heading']               = 'Коллеги, которым нравится этот комментарий';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Этот пост доступен только для следующих отделов: %s';
# Invoice Items
$lang['invoice_items']                                      = 'Элементы счета';
$lang['invoice_item']                                       = 'Элемент счета';
$lang['new_invoice_item']                                   = 'Новый элемент';
$lang['invoice_item_lowercase']                             = 'Элемент счета';

$lang['invoice_items_list_description'] = 'Описание';
$lang['invoice_items_list_rate']        = 'Тариф';
$lang['invoice_items_list_tax']         = 'Налог';

$lang['invoice_item_add_edit_description'] = 'Описание';
$lang['invoice_item_add_edit_rate']        = 'Тариф';
$lang['invoice_item_add_edit_tax']         = 'Налог';
$lang['invoice_item_add_edit_tax_select']  = 'Выберите налог';

$lang['invoice_item_edit_heading'] = 'Редактировать позицию';
$lang['invoice_item_add_heading']  = 'Нобавить новую позицию';

# Invoices


$lang['invoices']                      = 'Счета';
$lang['invoice']                      = 'Счет';
$lang['invoice_lowercase']              = 'выставленный счет';
$lang['create_new_invoice']             = 'Создать новый счет';
$lang['view_invoice']                   = 'Посмотреть счет';

$lang['invoice_payment_recorded']       = 'Платеж по счету выполнен';
$lang['invoice_payment_record_failed']  = 'Не удалось записать оплату счета';
$lang['invoice_sent_to_client_success'] = 'Счет успешно отправлен клиенту';
$lang['invoice_sent_to_client_fail']    = 'Проблема при отправке счета';
$lang['invoice_reminder_send_problem']  = 'Не удалось отправить напоминание';
$lang['invoice_overdue_reminder_sent']  = 'Напоминание о просроченном счете успешно отправленно';

$lang['invoice_details']              = 'Invoice Details';
$lang['invoice_view']                 = 'View Invoice';
$lang['invoice_select_customer']      = 'Клиент';
$lang['invoice_add_edit_number']      = 'Номер счета';
$lang['invoice_add_edit_date']        = 'Дата начала';
$lang['invoice_add_edit_duedate']     = 'Оплатить до';
$lang['invoice_add_edit_currency']    = 'Валюта';
$lang['invoice_add_edit_client_note'] = 'Клиентская заметка';
$lang['invoice_add_edit_admin_note']  = 'Admin заметка';

$lang['invoice_add_edit_search_item']  = 'Поиск элементов';
$lang['invoices_toggle_table_tooltip'] = 'Toggle Table';

$lang['edit_invoice_tooltip']                   = 'Редактировать счет';
$lang['delete_invoice_tooltip']                 = 'Delete Invoice. Note: All payments regarding to this invoice will be deleted (if any).';
$lang['invoice_sent_to_email_tooltip']          = 'Send to Email';
$lang['invoice_already_send_to_client_tooltip'] = 'This invoice is already sent to the client %s';
$lang['send_overdue_notice_tooltip']            = 'Send Overdue Notice';
$lang['invoice_view_activity_tooltip']          = 'Activity Log';
$lang['invoice_record_payment']                 = 'Добавить платёж';  
$lang['invoice_send_to_client_modal_heading']    = 'Отправить счет клиенту';
$lang['invoice_send_to_client_attach_pdf']       = 'Прикрепить счет в PDF';
$lang['invoice_send_to_client_preview_template'] = 'Просмотр E-mail шаблона';

$lang['invoice_dt_table_heading_number']  = 'Выставленный счет #';
$lang['invoice_dt_table_heading_date']    = 'Дата';
$lang['invoice_dt_table_heading_client']  = 'Клиент';
$lang['invoice_dt_table_heading_duedate'] = 'Срок оплаты';
$lang['invoice_dt_table_heading_amount']  = 'Сумма';
$lang['invoice_dt_table_heading_status']  = 'Статус';

$lang['record_payment_for_invoice']              = 'Платёж для';
$lang['record_payment_amount_received']          = 'Сумма платежа';
$lang['record_payment_date']                     = 'Дата платежа';
$lang['record_payment_leave_note']               = 'Заметка';
$lang['invoice_payments_received']               = 'Платежи получены';
$lang['invoice_record_payment_note_placeholder'] = 'Заметка администратора';
$lang['no_payments_found']                       = 'Платежи не найдены для этого Счета';
$lang['invoice_email_link_text']                 = 'Просмореть счет';

# Payments
$lang['payments']                             = 'Платежи';
$lang['payment']                              = 'Платёж';
$lang['payment_lowercase']                    = 'платёж';
$lang['payments_table_number_heading']        = 'Платёж #';
$lang['payments_table_invoicenumber_heading'] = 'Выставленный счет #';
$lang['payments_table_mode_heading']          = 'Тип оплаты';
$lang['payments_table_date_heading']          = 'Дата';
$lang['payments_table_amount_heading']        = 'Сумма';
$lang['payments_table_client_heading']        = 'Клиент';
$lang['payment_not_exists']                   = 'Платеж не существует';

$lang['payment_edit_for_invoice']     = 'Оплата счета';
$lang['payment_edit_amount_received'] = 'Полученная сумма';
$lang['payment_edit_date']            = 'Дата платежа';
$lang['payment_edit_lave_note']       = 'Оставить заметку';


# Knowledge Base
$lang['kb_article_add_edit_subject'] = 'Тема';
$lang['kb_article_add_edit_group']   = 'Группа';
$lang['kb_string']                   = 'База знаний';
$lang['kb_article']                  = 'Статья';
$lang['kb_article_lowercase']        = 'статья';
$lang['kb_article_new_article']      = 'Новая статья';
$lang['kb_article_disabled']         = 'Отключено';
$lang['kb_article_description']      = 'Описание статьи';

$lang['kb_table']                      = 'Список';
$lang['kb_no_articles_found']          = 'Статьи базы знаний не найдены.';
$lang['kb_dt_article_name']            = 'Название статьи';
$lang['kb_dt_group_name']              = 'Группа';
$lang['new_group']                     = 'Новая группа';
$lang['kb_group_add_edit_name']        = 'Название группы';
$lang['kb_group_add_edit_description'] = 'Краткое описание';
$lang['kb_group_add_edit_disabled']    = 'Отключен';
$lang['kb_group_add_edit_note']        = 'Примечание. Все статьи в этой группе будут скрыты, если отключен флажок';
$lang['group_table_name_heading']      = 'Имя';
$lang['group_table_isactive_heading']  = 'Активный';
$lang['kb_no_groups_found']            = 'Группы базы знаний не найдены';

# Mail Lists
$lang['mail_lists']                           = 'Почтовые списки';
$lang['mail_list']                            = 'Список писем';
$lang['new_mail_list']                        = 'Новый почтовый список';
$lang['mail_list_lowercase']                  = 'список рассылки';
$lang['custom_field_deleted_success']         = 'Специальное поле удалено';
$lang['custom_field_deleted_fail']            = 'Проблема удаления настраиваемого поля';
$lang['email_removed_from_list']              = 'Электронная почта удалена из списка';
$lang['email_remove_fail']                    = 'Электронная почта удалена из списка';
$lang['staff_mail_lists']                     = 'Список почтовых рассылок';
$lang['clients_mail_lists']                   = 'Список почтовых клиентов';
$lang['mail_list_total_imported']             = 'Всего импортированных электронных писем: %s';
$lang['mail_list_total_duplicate']            = 'Всего повторяющихся писем: %s';
$lang['mail_list_total_failed_to_insert']     = 'Письма не удалось вставить: %s';
$lang['mail_list_total_invalid']              = 'Недействительный адрес электронной почты: %s';
$lang['cant_edit_mail_list']                  = 'Вы не можете редактировать этот список, этот список заполняется автоматически';
$lang['mail_list_add_edit_name']              = 'Имя списка писем';
$lang['mail_list_add_edit_customfield']       = 'Добавить настраиваемое поле';
$lang['mail_lists_viewing_emails']            = 'Просмотр писем из списка';
$lang['mail_lists_view_email_email_heading']  = 'Электронная почта';
$lang['mail_lists_view_email_date_heading']   = 'Дата добавления';
$lang['add_new_email_to']                     = 'Добавить новое письмо% s';
$lang['import_emails_to']                     = 'Импортировать письма в% s';
$lang['mail_list_new_email_edit_add_label']   = 'Электронная почта';
$lang['mail_list_import_file']                = 'Импортировать файл';
$lang['mail_list_available_custom_fields']    = 'Доступные настраиваемые поля';
$lang['submit_import_emails']                 = 'Импортировать сообщения электронной почты';
$lang['btn_import_emails']                    = 'Импорт писем (Excel)';
$lang['btn_add_email_to_list']                = 'Добавить письмо в этот список';
$lang['mail_lists_dt_list_name']              = 'Имя списка';
$lang['mail_lists_dt_datecreated']            = 'Дата создания';
$lang['mail_lists_dt_creator']                = 'Создатель';
$lang['email_added_to_mail_list_successfuly'] = 'Электронная почта добавлена в список';
$lang['email_is_duplicate_mail_list']         = 'Электронная почта уже существует в этом списке';

# Media
$lang['media_files']            = 'Файлы';

# Payment modes
$lang['new_payment_mode']       = 'Новый способ оплаты';
$lang['payment_modes']          = 'Способ оплаты';
$lang['payment_mode']           = 'Способ оплаты';
$lang['payment_mode_lowercase'] = 'Способ оплаты';
$lang['payment_modes_dt_name']  = 'Название способа оплаты';
$lang['payment_mode_add_edit_name'] = 'Название способа оплаты';
$lang['payment_mode_edit_heading']  = 'Изменить способ оплаты';
$lang['payment_mode_add_heading']   = 'Добавить новый способ оплаты';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Новый предопределенный ответ';
$lang['predefined_replies']                = 'Предопределенные ответы';
$lang['predefined_reply']                  = 'Предопределенный ответ';
$lang['predefined_reply_lowercase']        = 'Предопределенный ответ';
$lang['predifined_replies_dt_name']        = 'Предопределенное имя ответа';
$lang['predifined_reply_add_edit_name']    = 'Предопределенное имя ответа';
$lang['predifined_reply_add_edit_content'] = 'Текст ответа';

# Ticket Priorities
$lang['new_ticket_priority']           = 'Новый приоритет';
$Lang['ticket_priorities']             = 'Приоритеты Tickets';
$Lang['ticket_priority']               = 'Приоритет Ticket';
$Lang['ticket_priority_lowercase']     = 'приоритет Ticket';
$Lang['no_ticket_priorities_found']    = 'Не найдены приоритетые Tickets';
$lang['ticket_priority_dt_name']       = 'Имя приоретета ticket';
$lang['ticket_priority_add_edit_name'] = 'Имя приоретета';

# Reports
$lang['kb_reports']                         = 'Отчеты статей базы знаний';
$lang['sales_reports']                      = 'Отчеты по продажам';
$lang['reports_choose_kb_group']            = 'Выбрать группу';
$lang['reports_sales_select_report_type']   = 'Выберите тип отчета';
$lang['report_kb_yes']                      = 'ДА';
$lang['report_kb_no']                       = 'НЕТ';
$lang['report_kb_no_votes']                 = 'Еще нет голосов';
$lang['report_this_week_leads_conversions'] = 'Эта неделя конверсия лидов';
$lang['report_leads_sources_conversions']   = 'Источники преобразования.';
$lang['report_leads_monthly_conversions']   = 'Ежемесячно';
$lang['sales_report_heading']               = 'Отчет по продажам';
$lang['report_sales_type_income']           = 'Общая прибыль';

$lang['report_sales_type_customer']                    = 'Отчет о клиентах';
$lang['report_sales_base_currency_select_explanation'] = 'Вам нужно выбрать валюту, потому что у вас есть счета в другой валюте';
$lang['report_sales_from_date']                        = 'С даты';
$lang['report_sales_to_date']                          = 'По дату';


$lang['report_sales_months_all_time']      = 'Все время';
$lang['report_sales_months_six_months']    = 'Последние 6 месяцев';
$lang['report_sales_months_twelve_months'] = 'Последние 12 месяцев';
$lang['report_sales_months_custom']        = 'Пользовательский';
$lang['reports_sales_generated_report']    = 'Сгенерированный отчет';



$lang['reports_sales_dt_customers_client']                = 'Клиент';
$lang['reports_sales_dt_customers_total_invoices']        = 'Всего счетов';
$lang['reports_sales_dt_items_customers_amount']          = 'Сумма';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Сумма с налогом';

# Roles
$lang['new_role']           = 'Новая роль';
$lang['all_roles']          = 'Все роли';
$lang['roles']               = 'Роли персонала';
$lang['role']               = 'Роль';
$lang['role_lowercase']     = 'роль';
$lang['roles_total_users']  = 'Всего пользователей: ';
$lang['roles_dt_name']      = 'Имя роли';
$lang['role_add_edit_name'] = 'Имя роли';

# Service
$lang['new_service']           = 'Новый сервис';
$lang['services']              = 'Сервисы';
$lang['service']               = 'Сервис';
$lang['service_lowercase']     = 'сервис';
$lang['services_dt_name']      = 'Название сервиса';
$lang['service_add_edit_name'] = 'Название сервиса';

# Settings
$lang['settings']                     = 'Настройки';
$lang['settings_updated']             = 'Обновить настройки';
$lang['settings_save']                = 'Сохранить настройки';
$lang['settings_group_general']       = 'Основные';
$lang['settings_group_localization']  = 'Локализация';
$lang['settings_group_tickets']       = 'Тикеты';
$lang['settings_group_sales']         = 'Финансы';
$lang['settings_group_email']         = 'ПОЧТА';
$lang['settings_group_clients']       = 'Клиенты';
$lang['settings_group_newsfeed']      = 'Новостная лента';
$lang['settings_group_cronjob']       = 'Задания Cron';

$lang['settings_yes']                                        = 'ДА';
$lang['settings_no']                                         = 'НЕТ';
$lang['settings_clients_default_theme']                      = 'Тема клиентов по умолчанию';
$lang['settings_clients_allow_registration']                 = 'Разрешить клиентам регистрироваться';
$lang['settings_clients_allow_kb_view_without_registration'] = 'Разрешить просмотр базы знаний без регистрации';
$lang['settings_cron_send_overdue_reminder']                 = 'Отправить напоминание с напоминанием';
$lang['settings_cron_send_overdue_reminder_tooltip']         = 'Отправить просроченную электронную почту клиенту, когда статус счета обновлен до просроченного с Cron Job';
$lang['automatically_send_invoice_overdue_reminder_after']   = 'Автопосылать напоминание через (дни)';
$lang['automatically_resend_invoice_overdue_reminder_after'] = 'Автоматическое повторное отправление напоминания через (дней)';

$lang['settings_email_host']      = 'SMTP Host';
$lang['settings_email_port']      = 'SMTP Port';
$lang['settings_email']           = 'SMTP Email';
$lang['settings_email_password']  = 'SMTP Password';
$lang['settings_email_charset']   = 'Email Кодировка';
$lang['settings_email_signature'] = 'Email Подпись';

$lang['settings_general_company_logo']                = 'Логотип компании';
$lang['settings_general_company_logo_tooltip']        = 'Рекомендуемые размеры: 150 x 34 пикселей';
$lang['settings_general_company_remove_logo_tooltip'] = 'Удалить логотип компании';
$lang['settings_general_company_name']                = 'Название компании';
$lang['settings_general_company_main_domain']         = 'Основной домен компании';
$lang['settings_general_use_knowledgebase']           = 'Использовать базу знаний';
$lang['settings_general_use_knowledgebase_tooltip']   = 'Если вы разрешите этот вариант, база знаний будет показана также на стороне клиента';
$lang['settings_general_tables_limit']                = 'Предел разбивки на таблицы';
$lang['settings_general_default_staff_role']          = 'Роль сотрудника по умолчанию';
$lang['settings_general_default_staff_role_tooltip']  = 'При добавлении нового сотрудника эта роль будет выбрана по умолчанию';
$lang['settings_localization_date_format']      = 'Формат даты';
$lang['settings_localization_default_timezone'] = 'Часовой пояс по умолчанию';
$lang['settings_localization_default_language'] = 'Язык по умолчанию';
$lang['settings_newsfeed_max_file_upload_post']    = 'Максимальная загрузка файлов в сообщении';
$lang['settings_newsfeed_max_file_size']           = 'Максимальный размер файлов (МБ)';
$lang['settings_reminders_contracts']         = 'Напоминание об истечении срока действия контракта';
$lang['settings_reminders_contracts_tooltip'] = 'Уведомление об истечении срока действия напоминания в днях';
$lang['settings_tickets_use_services']             = 'Использовать сервисы';
$lang['settings_tickets_max_attachments']          = 'Максимальное количество ticket';
$lang['settings_tickets_allow_departments_access'] = 'Разрешить сотрудникам доступ только к ticket, принадлежащему отделам персонала';
$lang['settings_tickets_allowed_file_extensions']  = 'Разрешенные расширения файлов вложения';
$lang['settings_sales_general']                                   = 'Общее';
$lang['settings_sales_general_note']                              = 'Общие настройки';
$lang['settings_sales_invoice_prefix']                            = 'Префикс номера счета';
$lang['settings_sales_decimal_separator']                         = 'Десятичный разделитель';
$lang['settings_sales_thousand_separator']                        = 'Thousand Separator';
$lang['settings_sales_currency_placement']                        = 'Размещение валюты';
$lang['settings_sales_currency_placement_placement_before']       = 'Перед суммой';
$lang['settings_sales_currency_placement_after']                  = 'После суммы';
$lang ['settings_sales_require_client_logged_in_to_view_invoice']  = 'Требовать от клиента войти в систему для просмотра Счета';
$lang['settings_sales_next_invoice_number']                       = 'Номер следующего счета';
$lang['settings_sales_next_invoice_number_tooltip']               = 'Установите это поле в 1, если вы хотите начать с начала';
$lang['settings_sales_decrement_invoice_number_on_delete']        = 'Уменьшить номер счета при удалении';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Вы хотите уменьшить номер Счета при удалении последнего Счета? Экв. Если эта опция установлена ​​в YES и до удаления Счета следующий номер Счета равен 15, следующий номер счета уменьшится до 14. Если установлено значение НЕТ, число останется равным 15. Если у вас есть настройка, удалите только по последнему счету, чтобы НЕТ вам Следует также установить для этой опции значение «НЕТ», чтобы не уменьшить номер следующего Счета. ';
$lang['settings_sales_invoice_number_format']                      = 'Формат номера счета';
$lang['settings_sales_invoice_number_format_year_based']           = 'На основе года';
$lang['settings_sales_invoice_number_format_number_based']         = 'Число на основе (000001)';


$lang['settings_sales_company_info_note']    = 'Эта информация будет отображаться в счетах / сметах / платежах и других документах PDF, где требуется информация о компании';
$lang['settings_sales_company_name']         = 'название компании';
$lang['settings_sales_address']              = 'Адрес';
$lang['settings_sales_city']                 = 'Город';
$lang['settings_sales_country_code']         = 'Код страны';
$lang['settings_sales_postal_code']          = 'Почтовый Индекс';
$lang['settings_sales_phonenumber']          = 'Телефон';

# Leads
$lang['new_lead']       = 'Новый';
$lang['leads']          = 'Возможные клиенты';
$lang['lead']           = 'Лид';
$lang['lead_lowercase'] = 'лид';
$lang['leads_all']      = 'ВСЕ';

$lang['leads_canban_notes']  = 'Заметка: %s';
$lang['leads_canban_source'] = 'Источник: %s';

$lang['lead_new_source']            = 'Новый источник';
$lang['lead_sources']               = 'Lead источники';
$lang['lead_source']                = 'Lead источник';
$lang['lead_source_lowercase']      = 'lead источник';
$lang['leads_sources_not_found']    = 'No leads sources found';
$lang['leads_sources_table_name']   = 'Source Name';
$lang['leads_source_add_edit_name'] = 'Source Name';

$lang['lead_new_status']         = 'Новый статус клиента';
$lang['lead_statuss']            = 'Статус клиента';
$lang['lead_status']             = 'Статус клиента';
$lang['lead_status_lowercase']   = 'статус клиента';
$lang['leads_status_table_name'] = 'Название статуса';
$lang['leads_status_add_edit_name']  = 'Название статуса';
$lang['leads_status_add_edit_order'] = 'Заказ';

$lang['lead_statuses_not_found']      = 'Статусы возможных клиентов не найдены';
$lang['leads_search']                 = 'Поиск клиента';

$lang['leads_table_total'] = 'Всего возможных клиентов: %s';

$lang['leads_dt_name']         = 'Имя';
$lang['leads_dt_email']        = 'Email';
$lang['leads_dt_phonenumber']  = 'Телефон';
$lang['leads_dt_assigned']     = 'Назначено';
$lang['leads_dt_status']       = 'Статус';
$lang['leads_dt_last_contact'] = 'Последний контакт';

$lang['lead_add_edit_name']                 = 'Имя';
$lang['lead_add_edit_email']                = 'Email Address';
$lang['lead_add_edit_phonenumber']          = 'Телефон';
$lang['lead_add_edit_source']               = 'Источник';
$lang['lead_add_edit_status']               = 'Статус возможных клиентов';
$lang['lead_add_edit_assigned']             = 'Назначен';
$lang['lead_add_edit_datecontacted']        = 'Дата обращения';
$lang['lead_add_edit_contected_today']      = 'Связаться сегодня';
$lang['lead_add_edit_activity']             = 'Журнал активности';
$lang['lead_add_edit_notes']                = 'Заметки';
$lang['lead_add_edit_add_note']             = 'Добавить заметку';
$lang['lead_not_contacted']                 = 'Я не связывался с этим клиентом';
$lang['lead_add_edit_contected_this_lead']  = 'Я связался с этим клиентом';
$lang['lead_confirmation_canban_contacted'] = 'Вы связались с этим клиентом?';

# Misc
$lang['access_denied']              = 'Доступ закрыт';
$lang['prev']                       = 'пред.';
$lang['next']                       = 'след.';

# Datatables
$lang['dt_paginate_first']          = 'Первый';
$lang['dt_paginate_last']           = 'Последний';
$lang['dt_paginate_next']           = 'Следующий';
$lang['dt_paginate_previous']       = 'Предыдущая';
$lang['dt_empty_table']             = 'Не {0} найдено';
$lang['dt_search']                  = 'Поиск:';
$lang['dt_zero_records']            = 'Совпадающих записей не найдено';
$lang['dt_loading_records']         = 'Загрузка...';
$lang['dt_length_menu']             = 'Показать _MENU_ записи';
$lang['dt_info_filtered']           = '(filtered from _MAX_ total {0})';
$lang['dt_info_empty']              = 'Показ 0 от 0 до 0 {0}';
$lang['dt_info']                    = 'Показ _START_ от _END_ до _TOTAL_ {0}';
$lang['dt_empty_table']             = 'Не {0} найдено';
$lang['dt_sort_ascending']          = ' Активировать для сортировки столбцов по возрастанию';
$lang['dt_sort_descending']         = ' активировать для сортировки столбцов';
# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s отправленно напоминание о просроченном счете';

# Weekdays
$lang['wd_monday']    = 'Понедельник';
$lang['wd_tuesday']   = 'Вторник';
$lang['wd_thursday']  = 'Среда';
$lang['wd_wednesday'] = 'Четверг';
$lang['wd_friday']    = 'Пятница';
$lang['wd_saturday']  = 'Суббота';
$lang['wd_sunday']    = 'Воскресенье';

# Admin Left Sidebar
$lang['als_dashboard'] = 'Панель приборов';
$lang['als_clients']   = 'Клиенты';
$lang['als_leads']     = 'Leads';

$lang['als_contracts'] = 'Договора';

$lang['als_all_tickets'] = 'Все тикеты';
$lang['als_sales']       = 'Продажи';

$lang['als_staff'] = 'Команда';
$lang['als_tasks'] = 'Задачи';
$lang['als_kb']    = 'База знаний';

$lang['als_surveys']               = 'Опросы';
$lang['als_media']                 = 'Медиа';
$lang['als_reports']               = 'Отчеты';
$lang['als_reports_sales_submenu'] = 'Продажи';
$lang['als_reports_leads_submenu'] = 'Leads';
$lang['als_kb_articles_submenu']   = 'Статьи базы знаний';
$lang['als_utilities']             = 'Утилиты';
$lang['als_announcements_submenu'] = 'Оповещения';
$lang['als_mail_lists_submenu']    = 'Письма';
$lang['als_calendar_submenu']      = 'Календарь';
$lang['als_activity_log_submenu']  = 'Журнал активности';

# Admin Customizer Sidebar
$lang['acs_tickets']                           = 'Тикеты';
$lang['acs_ticket_priority_submenu']           = 'Приоритет';
$lang['acs_ticket_statuses_submenu']           = 'Cтатус';
$lang['acs_ticket_predefined_replies_submenu'] = 'Шаблоны ответов';
$lang['acs_ticket_services_submenu']           = 'Сервисы';
$lang['acs_departments']                       = 'Отделы';
$lang['acs_leads']                             = 'Лиды';
$lang['acs_leads_sources_submenu']             = 'Источники';
$lang['acs_leads_statuses_submenu']            = 'Статусы лидов';
$lang['acs_sales_taxes_submenu']               = 'Налоговые ставки';
$lang['acs_sales_currencies_submenu']          = 'Валюты';
$lang['acs_sales_payment_modes_submenu']       = 'Способы оплаты';
$lang['acs_email_templates']                   = 'Шаблоны-почты';
$lang['acs_roles']                             = 'Роли';
$lang['acs_settings']                          = 'Настройки';

# Tickets
$lang['new_ticket']                                         = 'Создать тикет';
$lang['tickets']                                            = 'Тикеты';
$lang['ticket']                                             = 'Тикет';
$lang['ticket_lowercase']                                   = 'тикеты';
$lang['support_tickets']                                    = 'Support Tickets';
$lang['support_ticket']                                     = 'Support Ticket';
$lang['ticket_settings_to']                                 = 'Кому';
$lang['ticket_settings_email']                              = 'Email';
$lang['ticket_settings_departments']                        = 'Отдел';
$lang['ticket_settings_service']                            = 'Сервис';
$lang['ticket_settings_priority']                           = 'Приоритет';
$lang['ticket_settings_subject']                            = 'Тема';
$lang['ticket_settings_assign_to']                          = 'Назначить ticket (по умолчанию текущий пользователь)';
$lang['ticket_settings_assign_to_you']                      = 'Вы';
$lang['ticket_settings_select_client']                      = 'Выбрать клиента';
$lang['ticket_add_body']                                    = 'Текст тикета';
$lang['ticket_add_attachments']                             = 'Вложения';
$lang['ticket_no_reply_yet']                                = 'Нет ответа';
$lang['new_ticket_added_succesfuly']                        = 'Ticket #%s добавлен';
$lang['replied_to_ticket_succesfuly']                       = 'Replied to ticket #%s successfully';
$lang['ticket_settings_updated_successfuly']                = 'Ticket настройки успешно обновлены';
$lang['ticket_settings_updated_successfuly_and_reassigned'] = 'Ticket настройки успешно обновлены - переназначен в отдел %s';
$lang['ticket_dt_subject']                                  = 'Тема';
$lang['ticket_dt_department']                               = 'Отдел';
$lang['ticket_dt_service']                                  = 'Сервис';
$lang['ticket_dt_submitter']                                = 'Клиент';
$lang['ticket_dt_status']                                   = 'Статус';
$lang['ticket_dt_priority']                                 = 'Приоритет';
$lang['ticket_dt_last_reply']                               = 'Последний ответ';

$lang['ticket_single_add_reply']                  = 'Добавить ответ';
$lang['ticket_single_add_note']                   = 'Добавить комментарий';
$lang['ticket_single_other_user_tickets']         = 'Другие тикеты';
$lang['ticket_single_settings']                   = 'Настройки';
$lang['ticket_single_priority']                   = 'Приоритет: %s';
$lang['ticket_single_last_reply']                 = 'Последний ответ: %s';
$lang['ticket_single_change_status_top']          = 'Изменить статус';
$lang['ticket_single_ticket_note_by']             = 'Заметка тикета %s';
$lang['ticket_single_note_added']                 = 'Примечание добавлено: %s';
$lang['ticket_single_change_status']              = 'Изменить статус';
$lang['ticket_single_assign_to_me_on_update']     = 'Назначить этот тикет мне автоматически';
$lang['ticket_single_insert_predefined_reply']    = 'Вставить предопределенный ответ';
$lang['ticket_single_insert_knowledge_base_link'] = 'Вставить ссылку базы знаний';
$lang['ticket_single_attachments']                = 'Вложения';
$lang['ticket_single_add_response']               = 'Добавить ответ';
$lang['ticket_single_note_heading']               = 'Примечание';
$lang['ticket_single_add_note']                   = 'Добавить комментарий';
$lang['ticket_settings_none_assigned']            = 'Не назначать';
$lang['ticket_status_changed_successfuly']        = 'Статус тикета изменен';
$lang['ticket_status_changed_fail']               = 'Проблема с изменением статуса тикета';

$lang['ticket_staff_string']                    = 'Команда';
$lang['ticket_client_string']                   = 'Клиент';
$lang['ticket_posted']                          = 'Сообщение: %s';
$lang['ticket_insert_predefined_reply_heading'] = 'Вставка предопределенного ответа';
$lang['ticket_kb_link_heading']                 = 'Вставить ссылку базы знаний';
$lang['ticket_access_by_department_denied']     = 'У вас нет доступа к этому тикету. Этот тикет принадлежит отделу, которому вы не относитесь.';

# Staff
$lang['new_staff']                       = 'Новый сотрудник команды';
$lang['staff_members']                   = 'Участники команды';
$lang['staff_member']                    = 'Сотрудник';
$lang['staff_member_lowercase']          = 'сотрудник';
$lang['staff_profile_updated']           = 'Ваш профиль был обновлен';
$lang['staff_old_password_incorect']     = 'Недопустимый старый пароль';
$lang['staff_password_changed']          = 'Ваш пароль был изменен';
$lang['staff_problem_changing_password'] = 'Неполадка при смене пароля';
$lang['staff_profile_string']            = 'Профиль';

$lang['staff_cant_remove_main_admin']          = 'Не удается удалить главного администратора, но ты пытайся...';
$lang['staff_cant_remove_yourself_from_admin'] = 'Вы не можете удалить роль администратора';

$lang['staff_dt_name']       = 'Полное имя';
$lang['staff_dt_email']      = 'Email';
$lang['staff_dt_last_Login'] = 'Последний вход';
$lang['staff_dt_active']     = 'Активный';

$lang['staff_add_edit_firstname']             = 'Имя';
$lang['staff_add_edit_lastname']              = 'Фамилия';
$lang['staff_add_edit_email']                 = 'Email';
$lang['staff_add_edit_phonenumber']           = 'Телефон';
$lang['staff_add_edit_facebook']              = 'Facebook';
$lang['staff_add_edit_linkedin']              = 'LinkedIn';
$lang['staff_add_edit_skype']                 = 'Skype';
$lang['staff_add_edit_departments']           = 'В команде отделов';
$lang['staff_add_edit_role']                  = 'Роль';
$lang['staff_add_edit_permissions']           = 'Доступа';
$lang['staff_add_edit_administrator']         = 'Администратор';
$lang['staff_add_edit_password']              = 'Пароль';
$lang['staff_add_edit_password_note']         = 'Примечание: если вы заполните эти поля, пароль будет изменен для этого пользователя.';
$lang['staff_add_edit_password_last_changed'] = 'Последнее изменение пароля';
$lang['staff_add_edit_notes']                 = 'Заметки';
$lang['staff_add_edit_note_description']      = 'Описание примечания';

$lang['staff_notes_table_description_heading'] = 'Заметки';
$lang['staff_notes_table_addedfrom_heading']   = 'Добавлено с';
$lang['staff_notes_table_dateadded_heading']   = 'Дата добавления';

$lang['staff_admin_profile']         = 'Это профиль администратора';
$lang['staff_profile_notifications'] = 'Оповещения';
$lang['staff_profile_departments']   = 'Отделы';

$lang['staff_edit_profile_image']                     = 'Изображение профиля';
$lang['staff_edit_profile_your_departments']          = 'Отделы';
$lang['staff_edit_profile_change_your_password']      = 'Измените свой пароль';
$lang['staff_edit_profile_change_old_password']       = 'Старый пароль';
$lang['staff_edit_profile_change_new_password']       = 'Новый пароль';
$lang['staff_edit_profile_change_repet_new_password'] = 'Повторите новый пароль';

# Surveys
$lang['new_survey']                    = 'Новый опрос';
$lang['surveys']                        = 'Опросы';
$lang['survey']                        = 'Опрос';
$lang['survey_lowercase']              = 'опрос';
$lang['survey_no_mail_lists_selected'] = 'Списки рассылки не выбраны';
$lang['survey_send_success_note']      = 'Все опросы (% s) будут отправляться через CRON';
$lang['survey_result']                 = 'Результат для опроса:% s';
$lang['question_string']               = 'Вопрос';
$lang['question_field_string']         = 'Поле';

$lang['survey_list_view_tooltip']      = 'Просмотреть опрос';
$lang['survey_list_view_results_tooltip'] = 'Просмотреть результаты';
$lang['survey_add_edit_subject']                   = 'Тема опроса';
$lang['survey_add_edit_email_description']         = 'Описание опроса (адрес электронной почты)';
$lang['survey_include_survey_link']                = 'Включить ссылку для опроса в описании';
$lang['survey_available_mail_lists_custom_fields'] = 'Доступные настраиваемые поля из списков адресов электронной почты';
$lang['survey_mail_lists_custom_fields_tooltip']   = 'Пользовательские поля могут использоваться для редактора электронной почты.';
$lang['survey_add_edit_short_description_view']    = 'Краткое описание опроса (Описание представления)';
$lang['survey_add_edit_from']                      = 'От (отображается по электронной почте)';
$lang['survey_add_edit_redirect_url']              = 'URL перенаправления опроса';
$lang['survey_add_edit_red_url_note']              = 'Когда пользователь закончит опрос, где будет перенаправлен (оставьте пустым для этого URL-адреса сайта)';
$lang['survey_add_edit_disabled']                  = 'Отключено';
$lang['survey_add_edit_only_for_logged_in']        = 'Только для зарегистрированных участников (сотрудников, клиентов)';
$lang['send_survey_string']                        = 'Отправить опрос';
$lang['survey_send_mail_list_clients']             = 'Клиенты';
$lang['survey_send_mail_list_staff']               = 'Сотрудники';
$lang['survey_send_mail_lists_string']             = 'Почтовые списки';
$lang['survey_send_mail_lists_note_logged_in']     = 'Примечание: если вы отправляете опрос в списки рассылки Только для зарегистрированных участников необходимо снять флажок';
$lang['survey_send_string']                        = 'Отправить';

$lang['survey_send_to_total']  = 'Отправить результаты %s на почту';
$lang['survey_send_till_now']  = 'До настоящего времени';
$lang['survey_send_finished']  = 'Отправка завершена: %s';
$lang['survey_added_to_queue'] = 'Этот опрос добавлен в очередь cron на %s';

$lang['survey_questions_string']          = 'Вопросы';
$lang['survey_insert_field']              = 'Вставить поле';
$lang['survey_field_checkbox']            = 'Флажок';
$lang['survey_field_radio']               = 'Радио';
$lang['survey_field_input']               = 'Поле ввода';
$lang['survey_field_textarea']            = 'Текстовая область';
$lang['survey_question_required']         = 'Обязательно';
$lang['survey_question_only_for_preview'] = 'Только для просмотра';
$lang['survey_create_first']              = 'Сначала вам необходимо создать опрос, после чего вы сможете вставлять вопросы.';


$lang['survey_dt_name']                   = 'Имя';
$lang['survey_dt_total_questions']        = 'Всего вопросов';
$lang['survey_dt_total_participants']     = 'Всего участников';
$lang['survey_dt_date_created']           = 'Дата создания';
$lang['survey_dt_active']                 = 'Активный';

$lang['survey_text_questions_results']    = 'Результаты текстовых опросов';
$lang['survey_view_all_answers']          = 'Просмотреть все ответы';

# Staff Tasks
$lang['new_task']       = 'Новая задача';
$lang['tasks']          = 'Задачи';
$lang['task']           = 'Задача';
$lang['task_lowercase'] = 'задача';
$lang['comment_string'] = 'Комментарий';

$lang['task_marked_as_complete'] = 'Задание отмечено как выполненое';
$lang['task_follower_removed']   = 'Подписка на задание успешно удалена';
$lang['task_assignee_removed']   = 'Подписчики задания успешно удалены';
$lang['task_no_assignees'] = 'Нет исполнителей для этой задачи';
$lang['task_no_followers'] = 'Нет подписчиков для этой задачи';

$lang['task_list_all']            = 'Все';
$lang['task_list_not_assigned']   = 'Не назначен';
$lang['task_list_duedate_passed'] = 'Дата выполнения';
$lang['tasks_dt_name']            = 'Имя';

$lang['task_single_priority']               = 'Приоретет';
$lang['task_single_start_date']             = 'Дата начала';
$lang['task_single_due_date']               = 'Срок сдачи';
$lang['task_single_finished']               = 'Завершённый';
$lang['task_single_mark_as_complete']       = 'Отметить как завершенное';
$lang['task_single_edit']                   = 'Редактировать';
$lang['task_single_delete']                 = 'Удалить';
$lang['task_single_assignees']              = 'Исполнители';
$lang['task_single_assignees_select_title'] = 'Исполнители задачи';
$lang['task_single_followers']              = 'Подписчики';
$lang['task_single_followers_select_title'] = 'Добавить подписчиков';
$lang['task_single_insert_media_link']      = 'Вставить ссылку для мультимедиа';
$lang['task_single_add_new_comment']        = 'Добавить комментарий';

$lang['task_add_edit_subject']     = 'Тема';
$lang['task_add_edit_priority']    = 'Приоритет';
$lang['task_priority_low']         = 'Низкий';
$lang['task_priority_medium']      = 'Средний';
$lang['task_priority_high']        = 'Высокий';
$lang['task_priority_urgent']      = 'Срочно';
$lang['task_add_edit_start_date']  = 'Дата начала';
$lang['task_add_edit_due_date']    = 'Срок сдачи';
$lang['task_add_edit_description'] = 'Описание задачи';

# Taxes
$lang['new_tax']       = 'Новый налог';
$lang ['taxes']        = 'Налоги';
$lang ['tax']          = 'Налог';
$lang ['tax_lowercase'] = 'налог';
$lang ['tax_dt_name']   = 'Имя налога';
$lang ['tax_dt_rate']   = 'Ставка (в процентах)';

$lang ['tax_add_edit_name'] = 'Название налога';
$lang ['tax_add_edit_rate'] = 'Ставка (в процентах)';
$lang ['tax_edit_title']    = 'Изменить налог';
$lang ['tax_add_title']     = 'Добавить новый налог';

# Статусы билетов
$lang ['new_ticket_status']           = 'Новый статус тикета';
$lang ['ticket_statuses']             = 'Статусы тикетов';
$lang ['ticket_status']               = 'Статус тикета';
$lang ['ticket_status_lowercase']     = 'статус тикета';

$lang ['ticket_statuses_dt_name']        = 'Название статуса тикета';
$lang ['no_ticket_statuses_found']       = 'Не найдено статусов тикета';
$lang ['ticket_statuses_table_total']    = 'Всего %s';
$lang ['ticket_status_add_edit_name']    = 'Название статуса тикета';
$lang ['ticket_status_add_edit_color']   = 'Выбрать цвет';
$lang ['ticket_status_add_edit_order']   = 'Порядок статусов';

# Todos
$lang['new_todo']                  = 'Новое задание';
$lang['my_todos']                  = 'Мои задания';
$lang['todo']                      = 'Пункт задания';
$lang['todo_lowercase']            = 'задание';
$lang['todo_status_changed']       = 'Статус задания изменён';
$lang['todo_add_title']            = 'Добавить задание';
$lang['add_new_todo_description']  = 'Описание';
$lang['no_finished_todos_found']   = 'Не найдено завершенных заданий';
$lang['no_unfinished_todos_found'] = 'Задания не найдены';
$lang['unfinished_todos_title']    = 'Незавершённые';
$lang['finished_todos_title']      = 'Завершённые';

# Authentication
$lang['password_changed_email_subject']             = 'Ваш пароль был изменен';
$lang['password_reset_email_subject']               = 'Сброс пароля %s';
# Utilities
$lang['utility_activity_log']                       = 'Журнал активности';
$lang['utility_activity_log_filter_by_date']        = 'Фильтровать по дате';
$lang['utility_activity_log_dt_description']        = 'Описание';
$lang['utility_activity_log_dt_date']               = 'Дата';
$lang['utility_activity_log_dt_staff']              = 'Команда';
$lang['utility_calendar_new_event_title']           = 'Добавить новое событие';
$lang['utility_calendar_new_event_start_date']      = 'Дата начала';
$lang['utility_calendar_new_event_end_date']        = 'Дата окончания';
$lang['utility_calendar_new_event_make_public']     = 'Опубликовать';
$lang['utility_calendar_event_added_successfuly']   = 'Новое событие добавлено успешно';
$lang['utility_calendar_event_deleted_successfuly'] = 'Удалить Событие';
$lang['utility_calendar_new_event_placeholder']     = 'Название события';


# Navigation
$lang['nav_notifications']          = 'Оповещения';
$lang['nav_my_profile']             = 'Мой профиль';
$lang['nav_edit_profile']           = 'Редактировать профиль';
$lang['nav_logout']                 = 'Выйти';
$lang['nav_no_notifications']       = 'Оповещений не обнаружено';
$lang['nav_view_all_notifications'] = 'Просмотреть все уведомления';
$lang['nav_customizer_tooltip']     = 'Настроить параметры';
$lang['nav_notifications_tooltip']  = 'Просмотр уведомлений';

## Clients
$lang['clients_required_field'] = 'Это поле обязательно';

# Footer
$lang['clients_copyright'] = 'Galka.art %s';

# Announcements
$lang['clients_announcement_from']  = 'От: ';
$lang['clients_announcement_added'] = 'Добавлено: ';

# Contracts
$lang['clients_contracts']               = 'Договора';
$lang['clients_contracts_dt_subject']    = 'Тема';
$lang['clients_contracts_dt_start_date'] = 'Дата начала';
$lang['clients_contracts_dt_end_date']   = 'Дата окончания';

# Home
$lang['clients_quick_invoice_info']                = 'Быстрая информация о счетах';
$lang['clients_home_currency_select_tooltip']      = 'Вам нужно выбрать валюту, потому что у вас есть счета в другой валюте';

# Invoices
$lang['clients_invoice_html_btn_download'] = 'Загрузка';

$lang['clients_my_invoices']        = 'Счета';
$lang['clients_invoice_dt_number']  = 'Счет #';
$lang['clients_invoice_dt_date']    = 'Дата';
$lang['clients_invoice_dt_duedate'] = 'Срок оплаты';
$lang['clients_invoice_dt_amount']  = 'Сумма';
$lang['clients_invoice_dt_status']  = 'Статус';

# Profile
$lang['clients_profile_heading'] = 'Профиль';

# Used for edit profile and register START
$lang['clients_firstname'] = 'Имя';
$lang['clients_lastname']  = 'Фамилия';
$lang['clients_email']     = 'Адрес электронной почты';
$lang['clients_company']   = 'Компания';
$lang['clients_vat']       = 'ИНН';
$lang['clients_phone']     = 'Телефон';
$lang['clients_country']   = 'Страна';
$lang['clients_city']      = 'Город';
$lang['clients_address']   = 'Адрес';
$lang['clients_zip']       = 'Индекс';
$lang['clients_state']     = 'Область';
# Used for edit profile and register END

$lang['clients_register_password']        = 'Пароль';
$lang['clients_register_password_repeat'] = 'Сброс пароля';
$lang['clients_edit_profile_update_btn']  = 'Обновить';

$lang['clients_edit_profile_change_password_heading'] = 'Изменить Пароль';
$lang['clients_edit_profile_old_password']            = 'Старый Пароль';
$lang['clients_edit_profile_new_password']            = 'Новый Пароль';
$lang['clients_edit_profile_new_password_repeat']     = 'Повторить Пароль';
$lang['clients_edit_profile_change_password_btn']     = 'Изменить Пароль';
$lang['clients_profile_last_changed_password']        = 'Последнее изменения пароля %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'База знаний';
$lang['clients_knowledge_base_articles_not_found'] = 'Статьи базы знаний не найдены.';
$lang['clients_knowledge_base_find_useful']        = 'Вам помогла данная статья?';
$lang['clients_knowledge_base_find_useful_yes']    = 'ДА';
$lang['clients_knowledge_base_find_useful_no']     = 'НЕТ';
$lang['clients_article_only_1_vote_today']         = 'Вы можете голосовать один раз в 24 часа';
$lang['clients_article_voted_thanks_for_feedback'] = 'Спасибо за ваш отзыв';

# Tickets
$lang['clients_ticket_open_subject']                = 'Открыть тикет';
$lang['clients_ticket_open_departments']            = 'Отдел';
$lang['clients_tickets_heading']                    = 'Поддержка тикетов';
$lang['clients_ticket_open_service']                = 'Сервис';
$lang['clients_ticket_open_priority']               = 'Приоритет';
$lang['clients_latest_tickets']                     = 'Последний тикет';
$lang['clients_ticket_open_body']                   = 'Тикет';
$lang['clients_ticket_attachments']                 = 'Вложения';
$lang['clients_ticket_posted']                      = 'Сообщение: %s';
$lang['clients_single_ticket_string']               = 'Тикет';
$lang['clients_single_ticket_replied']              = 'Ответил: %s';
$lang['clients_single_ticket_informations_heading'] = 'Тикет Информация';

$lang['clients_tickets_dt_number']     = 'Тикет #';
$lang['clients_tickets_dt_subject']    = 'Тема';
$lang['clients_tickets_dt_department'] = 'Отдел';
$lang['clients_tickets_dt_service']    = 'Сервис';
$lang['clients_tickets_dt_status']     = 'Статус';
$lang['clients_tickets_dt_last_reply'] = 'Последний ответ';

$lang['clients_ticket_single_department']        = 'Отдел: %s';
$lang['clients_ticket_single_submited']          = 'Отправлено: %s';
$lang['clients_ticket_single_status']            = 'Статус:';
$lang['clients_ticket_single_priority']          = 'Приоритет: %s';
$lang['clients_ticket_single_add_reply_btn']     = 'Ответить';
$lang['clients_ticket_single_add_reply_heading'] = 'Добавить ответ на этот тикет';

# Login
$lang['clients_login_heading_no_register'] = 'Пожалуйста войдите в систему';
$lang['clients_login_heading_register']    = 'Введите логин или зарегестрируйтесь';
$lang['clients_login_email']               = 'Адрес электроной почты';
$lang['clients_login_password']            = 'Пароль';
$lang['clients_login_remember']            = 'Запомнить меня';
$lang['clients_login_login_string']        = 'Войти';

# Register
$lang['clients_register_string']  = 'Регистрация';
$lang['clients_register_heading'] = 'Регистрация';

# Navigation
$lang['clients_nav_login']     = 'Войти';
$lang['clients_nav_register']  = 'зарегестрироваться';
$lang['clients_nav_invoices']  = 'Счета';
$lang['clients_nav_contracts'] = 'Договора';
$lang['clients_nav_kb']        = 'База знания';
$lang['clients_nav_profile']   = 'Профиль';
$lang['clients_nav_logout']    = 'Выйти';

# Datatables
$lang['clients_dt_paginate_first']    = 'Первый';
$lang['clients_dt_paginate_last']     = 'Последний';
$lang['clients_dt_paginate_next']     = 'Следующий';
$lang['clients_dt_paginate_previous'] = 'предыдущий';
$lang['clients_dt_empty_table']       = 'Не {0} найдено';
$lang['clients_dt_search']            = 'Поиск:';
$lang['clients_dt_zero_records']      = 'Совпадающих записей не найдено';
$lang['clients_dt_loading_records']   = 'Загрузка...';
$lang['clients_dt_length_menu']       = 'Показать _MENU_ ';
$lang['clients_dt_info_filtered']     = '(filtered from _MAX_ total {0})';
$lang['clients_dt_info_empty']        = 'Показать 0 от 0 до 0 {0}';
$lang['clients_dt_info']              = 'Показать _START_ от _END_ до _TOTAL_ {0}';
$lang['clients_dt_empty_table']       = 'Не {0} найдено';
$lang['clients_dt_sort_ascending']    = 'Активировать для сортировки столбцов по возрастанию';
$lang['clients_dt_sort_descending']   = 'Активировать сортировку по убыванию';


# Version 1.0.1
# Admin
#
# Payments
$lang['payment_receipt']                               = 'Квитанция об оплате';
$lang['payment_for_string']                            = 'Платеж за';
$lang['payment_date']                                  = 'Дата платежа:';
$lang['payment_view_mode']                             = 'Режим оплаты:';
$lang['payment_total_amount']                          = 'Общая сумма';
$lang['payment_table_invoice_number']                  = 'Номер счета';
$lang['payment_table_invoice_date']                    = 'Дата Счета';
$lang['payment_table_invoice_amount_total']            = 'Сумма счета';
$lang['payment_table_payment_amount_total']            = 'Сумма платежа';
$lang['payments_table_transaction_id']                 = 'Идентификатор транзакции: %s';
$lang['payment_getaway_token_not_found']               = 'Токен не найден';
$lang['online_payment_recorded_success']               = 'Платеж зарегистрирован успешно';
$lang['online_payment_recorded_success_fail_database'] = 'Платеж успешно завершен, но не удалось вставить платеж в базу данных, обратитесь к администратору';

# Leads
$lang['lead_convert_to_client']                   = 'Преобразовать в клиента';
$lang['lead_convert_to_email']                    = 'Электронная почта';
$lang['lead_convert_to_client_firstname']         = 'Имя';
$lang['lead_convert_to_client_lastname']          = 'Фамилия';
$lang['lead_email_already_exists']                = 'Адрес электронной почты уже существует у данных клиентов';
$lang['lead_to_client_base_converted_success']    = 'Преобразование в клиента прошло успешно';
$lang['lead_have_client_profile']                 = 'У этого клиента есть профиль клиента.';
$lang['lead_converted_edit_client_profile']       = 'Изменить профиль';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'Просмотр Счета в качестве клиента';
$lang['invoice_add_edit_recurring']                                           = 'Повторяющийся счет?';
$lang['invoice_add_edit_recurring_no']                                        = 'Нет';
$lang['invoice_add_edit_recurring_month']                                     = 'Каждые %s месяц';
$lang['invoice_add_edit_recurring_months']                                    = 'Каждые %s месяца';
$lang['invoices_list_all']                                                    = 'All';
$lang['invoices_list_not_have_payment']                                       = 'Счет без платежей';
$lang['invoices_list_recuring']                                               = 'Периодические счета';
$lang['invoices_list_made_payment_by']                                        = 'Сделана Оплата %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Создавать новый счет из повторяющегося счета, только если счет имеет статус оплаченного?';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Если это поле установлено в ДА, а повторяющиеся счета не имеют статуса PAID, новый счет НЕ будет создан.';
$lang['send_renewed_invoice_from_recurring_to_email']                         = 'Автоматически отправлять обновленный счет клиенту';
$lang['view_invoice_pdf_link_pay']                                            = 'Оплатить счет';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Банковские счета / описание';
$lang['payment_mode_add_edit_description_tooltip'] = 'Здесь вы можете указать информацию о банковских счетах. Будет отображаться на счете HTML.';
$lang['payment_modes_dt_description']              = 'Банковские счета / описание';
$lang['payment_modes_add_edit_announcement']       = 'Примечание. Режимы оплаты, перечисленные ниже, относятся к автономным режимам. Режимы онлайн-платежей можно настроить в Настройках -> Настройки -> Платежные шлюзы.';
$lang['payment_mode_add_edit_active']              = 'Активный';
$lang['payment_modes_dt_active']                   = 'Активный';

# Contracts
$lang['contract_not_found'] = 'Договор не найден. Может быть удален, проверить журнал активности';

# Settings
$lang['setting_bar_heading']                 = 'Установка';
$lang['settings_group_online_payment_modes'] = 'Платежные шлюзы';
$lang['settings_paymentmethod_mode_label']   = 'Метка';
$lang['settings_paymentmethod_active']       = 'Активно';
$lang['settings_paymentmethod_currencies']   = 'Валюта (разделитель запятая)';
$lang['settings_paymentmethod_testing_mode'] = 'включить тестовый режим';

$lang['settings_paymentmethod_paypal_username']  = 'PayPal API Username';
$lang['settings_paymentmethod_paypal_password']  = 'PayPal API Password';
$lang['settings_paymentmethod_paypal_signature'] = 'API Signature';

$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Секретный ключ API полосы';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Открытый ключ для публикации';
$lang['settings_limit_top_search_bar_results']             = 'Результаты поиска в верхней части страницы ограничены:';

# Quick Actions
$lang['qa_create_invoice']  = 'Создать счет';
$lang['qa_create_task']     = 'Создать задачу';
$lang['qa_create_client']   = 'Создать клиента';
$lang['qa_create_contract'] = 'Создать договор';
$lang['qa_create_kba']      = 'Создать статью базы знаний';
$lang['qa_create_survey']   = 'Создать опрос';
$lang['qa_create_ticket']   = 'Открыть тикет';
$lang['qa_create_staff']    = 'Создать сотрудника';

## Clients
$lang['client_phonenumber'] = 'Телефон';

# Main Clients
$lang['clients_register']                          = 'Регистрация';
$lang['clients_profile_updated']                   = 'Ваш профиль обновлен';
$lang['clients_successfully_registered']           = 'Спасибо за регистрацию';
$lang['clients_account_created_but_not_logged_in'] = 'Ваша учетная запись создана, но вы не авторизованы в нашей системе автоматически. Пожалуйста, попытайтесь войти ';
# Билеты
$lang['clients_tickets_heading']                   = 'Тикеты поддержки';

# Payments
// Uses on stripe page
$lang['payment_for_invoice'] = 'Платеж по счету';
$lang ['payment_total']      = 'Всего: %s';

# Выставленный счет
$lang['invoice_html_online_payment']              = 'Онлайн-платеж';
$lang['invoice_html_online_payment_button_text']  = 'Оплатить сейчас';
$lang['invoice_html_payment_modes_not_selected']  = 'Выберите тип оплаты';
$lang['invoice_html_amount_blank']                = 'Сумма не может быть пустой или нулевой';
$lang['invoice_html_offline_payment']             = 'Автономный платеж';
$lang['invoice_html_amount']                      = 'Сумма';


# Version 1.0.2
# Admin
#
# DataTables
$lang['dt_button_column_visibility']  = 'Видимые';
$lang['dt_button_reload']             = 'Обновить';
$lang['dt_button_excel']              = 'Excel';
$lang['dt_button_csv']                = 'CSV';
$lang['dt_button_pdf']                = 'PDF';
$lang['dt_button_print']              = 'ПЕЧАТЬ';
$lang['is_not_active_export']         = 'НЕТ';
$lang['is_active_export']             = 'ДА';

# Invoice
$lang['invoice_add_edit_advanced_options']               = 'Расширенные настройки';
$lang['invoice_add_edit_allowed_payment_modes']          = 'Разрешенные способы оплаты для этого Счета';
$lang['invoice_add_edit_recuring_invoices_from_invoice'] = 'Created invoices from this recuring invoice';
$lang['invoice_add_edit_no_payment_modes_found']         = 'Типы оплаты не найдены.';
$lang['invoice_html_total_pay']                          = 'Итого: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Имя Шаблона';
# General
$lang['discount_type']                      = 'Тип скидки';
$lang['discount_type_after_tax']            = 'После налогообложения';
$lang['discount_type_before_tax']           = 'До вычета налога';
$lang['terms_and_conditions']               = 'Условия и положения';
$lang['reference_no']                       = 'Справка #';
$lang['no_discount']                        = 'Нет скидки';
$lang['view_stats_tooltip']                 = 'Просмотреть краткую статистику';
# Clients
$lang['zip_from_date']                      = 'От даты:';
$lang['zip_to_date']                        = 'До даты:';
$lang['client_zip_payments']                = 'Почтовые платежи';
$lang['client_zip_invoices']                = 'Почтовые счета';
$lang['client_zip_estimates']               = 'ZIP сметы';
$lang['client_zip_status']                  = 'Статус';
$lang['client_zip_status_all']              = 'Все';
$lang['client_zip_payment_modes']           = 'Оплата производится через';
$lang['client_zip_no_data_found']           = 'не  %s найдено';

# Payments
$lang['payment_mode']         = 'Тип платежа';
$lang['payment_view_heading'] = 'Платёж';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Разрешить клиенту изменять сумму оплаты (для онлайн-платежей)';
$lang['settings_survey_send_emails_per_cron_run']                   = 'Сколько писем, отправлять в час';
$lang['settings_survey_send_emails_per_cron_run_tooltip']           = 'Эта опция используется при отправке опросов. Survey cron будет отправлять X электронных писем в час. Некоторые хостинг-провайдеры имеют ограничение на отправку писем в час.';
$lang['settings_delete_only_on_last_invoice']                       = 'Удалить счет-фактуру разрешено только в последнем счете-фактуре';
$lang['settings_sales_estimate_prefix']                             = 'Префикс номера сметы';
$lang['settings_sales_next_estimate_number']                        = 'Номер следующей сметы';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Установите это поле в 1, если вы хотите начать с начала';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Уменьшить номер сметы при удалении';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Вы хотите уменьшить номер сметы при удалении последней сметы? Например: Если этот параметр установлен в Да и перед удалением следующией сметы номер 15, следующий номер сметы уменьшиться до 14. Если значение равно Нет, то число останется равным 15. Если у вас есть настройка, удалите только по последней оценке NO, следует также установить для этой опции значение «НЕТ», чтобы не урезать следующий оценочный номер.';
$lang['settings_sales_estimate_number_format']                      = 'Формат номера сметы';
$lang['settings_sales_estimate_number_format_year_based']           = 'Год основания';
$lang['settings_sales_estimate_number_format_number_based']         = 'Число основано (000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Delete estimate allowed only on last invoice';
$lang['settings_cron_invoice_heading']                              = 'Выставленный счет';
$lang['settings_send_test_email_heading']                           = 'Отправить тестовое сообщение';
$lang['settings_send_test_email_subheading']                        = 'Отправьте тестовое сообщение, чтобы убедиться, что настройки SMTP установлены правильно.';
$lang['settings_send_test_email_string']                            = 'Email Address';
$lang['settings_smtp_settings_heading']                             = 'SMTP Settings';
$lang['settings_smtp_settings_subheading']                          = 'Настроить главный адрес эл. Почты';

$lang['settings_sales_heading_general']                             = 'Главная';
$lang['settings_sales_heading_invoice']                             = 'Выставленный счет';
$lang['settings_sales_heading_estimates']                           = 'Сметы';
$lang['settings_sales_heading_company']                             = 'Компания';
$lang['settings_sales_cron_invoice_heading']                        = 'Выставленный счет';

# Tasks
$lang['tasks_dt_datestart'] = 'Дата начала';
$lang['tasks_dt_priority']  = 'Приоритет';

# Invoice General
$lang['invoice_discount'] = 'Скидка';

# Settings
$lang['settings_rtl_support_admin']                                   = 'Область администрирования RTL (справа налево)';
$lang['settings_rtl_support_client']                                  = 'Область клиентов RTL (справа налево)';
$lang['acs_language_editor']                                          = 'Редактор языков';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Автоматическое преобразование сметы в счет после принятия клиентом';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Исключить сметы черновики из клиентской области';

# Months
$lang['January']   = 'Январь';
$lang['February']  = 'Февраль';
$lang['March']     = 'Март';
$lang['April']     = 'Апрель';
$lang['May']       = 'Май';
$lang['June']      = 'Июнь';
$lang['July']      = 'Июль';
$lang['August']    = 'Август';
$lang['September'] = 'Сентябрь';
$lang['October']   = 'Октябрь';
$lang['November']  = 'Ноябрь';
$lang['December']  = 'Декабрь';

# Time ago function translate
$lang['time_ago_just_now']  = 'Сейчас';
$lang['time_ago_minute']    = 'Минуту назад';
$lang['time_ago_minutes']   = '%s минут назад';
$lang['time_ago_hour']      = 'час назад';
$lang['time_ago_hours']     = '%s Ч. Назад';
$lang['time_ago_yesterday'] = 'вчера';
$lang['time_ago_days']      = '%s дней назад';
$lang['time_ago_week']      = 'неделю назад';
$lang['time_ago_weeks']     = '%s недель назад';
$lang['time_ago_month']     = 'месяц назад';
$lang['time_ago_months']    = '%s месяцев назад';
$lang['time_ago_year']      = 'год назад';
$lang['time_ago_years']     = '%s лет назад';


# Estimates
$lang['estimates']                          = 'Сметы';
$lang['estimate']                           = 'Смета';
$lang['estimate_lowercase']                 = 'смета';
$lang['create_new_estimate']                = 'Создать новую смету';
$lang['view_estimate']                      = 'Посмотреть смету';
$lang['estimate_sent_to_client_success']    = 'Смета успешно отправлена клиенту';
$lang['estimate_sent_to_client_fail']       = 'Проблема при отправке сметы';
$lang['estimate_reminder_send_problem']     = 'Проблема с отправкой сметы с опозданием';
$lang['estimate_details']                   = 'Детали сметы';
$lang['estimate_view']                      = 'Посмотреть смету';
$lang['estimate_select_customer']           = 'Клиент';
$lang['estimate_add_edit_number']           = 'Расчетный номер';
$lang['estimate_add_edit_date']             = 'Дата сметы';
$lang['estimate_add_edit_expirydate']       = 'Срок действия';
$lang['estimate_add_edit_currency']         = 'валюта';
$lang['estimate_add_edit_client_note']      = 'Примечание клиента';
$lang['estimate_add_edit_admin_note']       = 'Примечание администратораe';
$lang['estimate_add_edit_new_item']         = 'Новый элемент';
$lang['estimate_add_edit_search_item']      = 'Поиск элементов';
$lang['estimates_toggle_table_tooltip']     = 'Переключить таблицу';
$lang['estimate_add_edit_advanced_options'] = 'Расширенные опции';
$lang['estimate_vat']                       = 'НДС Номер';
$lang['estimate_to']                        = 'до';
$lang['estimates_list_all']                 = 'ВСЕ';

$lang['estimate_invoiced_date']                  = 'Смета выставлена на %s';
$lang['edit_estimate_tooltip']                   = 'Изменить смету';
$lang['delete_estimate_tooltip']                 = 'Удалить смету';
$lang['estimate_sent_to_email_tooltip']          = 'Отправить на Email';
$lang['estimate_already_send_to_client_tooltip'] = 'Эта смета уже отправлена клиенту %s';
$lang['send_overdue_notice_tooltip']             = 'Отправить просроченное уведомление';
$lang['estimate_view_activity_tooltip']          = 'Журнал активности';

$lang['estimate_send_to_client_modal_heading']    = 'Отправить смету клиенту';
$lang['estimate_send_to_client_attach_pdf']       = 'Приложить смету в формате PDF';
$lang['estimate_send_to_client_preview_template'] = 'Предварительный шаблон сообщения электронной почты';

$lang['estimate_dt_table_heading_number']     = 'Смета #';
$lang['estimate_dt_table_heading_date']       = 'Дата';
$lang['estimate_dt_table_heading_client']     = 'Клиент';
$lang['estimate_dt_table_heading_expirydate'] = 'Срок действия';
$lang['estimate_dt_table_heading_amount']     = 'Сумма';
$lang['estimate_dt_table_heading_status']     = 'Статус';

$lang['estimate_email_link_text']    = 'Посмотреть смету';
$lang['estimate_convert_to_invoice'] = 'Преобразовать в счет-фактуру';
# Home
$lang['home_unfinished_tasks']       = 'Незавершенные задачи';

# Clients
$lang['client_estimates_tab'] = 'Сметы';
$lang['client_payments_tab']  = 'Платежи';


# Estimate General
$lang['estimate_pdf_heading']            = 'СМЕТА';
$lang['estimate_table_item_heading']     = 'Пункт';
$lang['estimate_table_quantity_heading'] = 'Кол-во';
$lang['estimate_table_rate_heading']     = 'Цена';
$lang['estimate_table_tax_heading']      = 'Налоги';
$lang['estimate_table_amount_heading']   = 'Сумма';
$lang['estimate_subtotal']               = 'Промежуточный итог';
$lang['estimate_adjustment']             = 'Корректировка';
$lang['estimate_discount']               = 'Скидка';
$lang['estimate_total']                  = 'Всего';
$lang['estimate_to']                     = 'До';
$lang['estimate_data_date']              = 'Дата сметы';
$lang['estimate_data_expiry_date']       = 'Срок действия';
$lang['estimate_note']                   = 'Заметка:';
$lang['estimate_status_draft']           = 'Черновик';
$lang['estimate_status_sent']            = 'Отправлено';
$lang['estimate_status_declined']        = 'Отклонено';
$lang['estimate_status_accepted']        = 'Принято';
$lang['estimate_status_expired']         = 'Истекший';
$lang['estimate_note']                   = 'Заметка:';

# Quick create
$lang['qa_create_estimate'] = 'Создать смету';
$lang['qa_create_lead']     = 'Создать заявку';


## Clients
$lang['clients_estimate_dt_number']             = 'Смета #';
$lang['clients_estimate_dt_date']               = 'Дата';
$lang['clients_estimate_dt_duedate']            = 'Срок действия';
$lang['clients_estimate_dt_amount']             = 'Сумма';
$lang['clients_estimate_dt_status']             = 'Статус';
$lang['clients_nav_estimates']                  = 'Сметы';
$lang['clients_decline_estimate']               = 'Снижение';
$lang['clients_accept_estimate']                = 'Принять';
$lang['clients_my_estimates']                   = 'Сметы';
$lang['clients_estimate_invoiced_successfuly']  = 'Благодарю вас за принятие сметы. Прочтите созданный счет для сметы.';
$lang['clients_estimate_accepted_not_invoiced'] = 'Благодарим вас за принятие этой сметы.';
$lang['clients_estimate_declined']              = 'Смета не указана. Вы можете принять смету в любое время до истечения срока действия';
$lang['clients_estimate_failed_action']         = 'Не удалось принять решение по этой смете';
$lang['client_add_edit_profile']                = 'Профиль';

# Custom Fields
$lang['custom_field']                          = 'Пользовательское поле';
$lang['custom_field_lowercase']                = 'пользовательское поле';
$lang['custom_fields']                         = 'Настраиваемые поля';
$lang['custom_fields_lowercase']               = 'Настраиваемые поля';
$lang['new_custom_field']                      = 'Новое настраиваемое поле';
$lang['custom_field_name']                     = 'Имя поля';
$lang['custom_field_add_edit_type']            = 'Тип';
$lang['custom_field_add_edit_belongs_top']     = 'Кому принадлежит поле';
$lang['custom_field_add_edit_options']         = 'Параметры';
$lang['custom_field_add_edit_options_tooltip'] = 'Использовать только для типов Select, Checkbox. Заполните поле, отделив параметры с помощью комы. Например: Яблоко, апельсин, банан';
$lang['custom_field_add_edit_order']           = 'Заказать';

$lang['custom_field_dt_field_to']       = 'Принадлежит';
$lang['custom_field_dt_field_name']     = 'Имя';
$lang['custom_field_dt_field_type']     = 'Тип';
$lang['custom_field_add_edit_active']   = 'Активный';
$lang['custom_field_add_edit_disabled'] = 'Отключен';

# Ticket replies
$lang['ticket_reply']           = 'Ответить';
$lang['ticket_reply_lowercase'] = 'ответить';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Настраиваемые поля';

# Contracts
$lang['contract_types']          = 'Формы договоров';
$lang['contract_type']           = 'Форма договоров';
$lang['new_contract_type']       = 'Новый тип договора';
$lang['contract_type_lowercase'] = 'договор';
$lang['contract_type_name']      = 'Имя';

$lang['contract_types_list_name'] = 'Форма договора';

# Customizer Menu
$lang['acs_contracts']      = 'Договоры';
$lang['acs_contract_types'] = 'Форма договора';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description']     = 'Полное описание';
# Customers
$lang['client_delete_invoices_warning']    = 'У этого клиента есть счета или сметы в аккаунте. Вы не можете удалить этого клиента. Измените все счета на другого клиента, а затем удалите.';
$lang['clients_list_phone']                = 'Телефон';
$lang['client_expenses_tab']               = 'Затраты';
$lang['customers_summary']                 = 'Сводка о клиентах';
$lang['customers_summary_active']          = 'Активные клиенты';
$lang['customers_summary_inactive']        = 'Неактивные';
$lang['customers_summary_logged_in_today'] = 'За сегодня';

# Authentication
$lang['admin_auth_forgot_password_email']             = 'Адрес электронной почты';
$lang['admin_auth_forgot_password_heading']           = 'Забыли пароль';
$lang['admin_auth_login_heading']                     = 'Привет АДМИН';
$lang['admin_auth_login_email']                       = 'Адрес электронной почты';
$lang['admin_auth_login_password']                    = 'пароль';
$lang['admin_auth_login_remember_me']                 = 'Запомнить меня';
$lang['admin_auth_login_button']                      = 'Авторизоваться';
$lang['admin_auth_login_fp']                          = 'Забыли Пароль?';
$lang['admin_auth_reset_password_heading']            = 'Сброс пароля';
$lang['admin_auth_reset_password']                    = 'пароль';
$lang['admin_auth_reset_password_repeat']             = 'Повторите пароль';
$lang['admin_auth_invalid_email_or_password']         = 'Неправильный адрес электронной почты или пароль';
$lang['admin_auth_inactive_account']                  = 'Неактивная учетная запись';
# Calender
$lang['calendar_estimate']                            = 'Смета';
$lang['calendar_invoice']                             = 'Выставленный счет';
$lang['calendar_contract']                            = 'Контракт';
$lang['calendar_customer_reminder']                   = 'Напоминание клиента';
$lang['calendar_event']                               = 'Событие';
$lang['calendar_task']                                = 'Задача';
# Leads
$lang['lead_edit_delete_tooltip']                     = 'Удалить потенциального клиента';
$lang['lead_attachments']                             = 'Вложения';
# Admin Customizer Sidebar
$lang['acs_finance']                                  = 'Финансы';
# Settings

$lang['settings_show_sale_agent_on_invoices']         = 'Показать агента продажи по счету';
$lang['settings_show_sale_agent_on_estimates']        = 'Показать агента продажи по смете';
$lang['settings_predefined_predefined_term']          = 'Предопределенные условия';
$lang['settings_predefined_clientnote']               = 'Предопределенная клиентская заметка';
$lang['settings_custom_pdf_logo_image_url']           = 'Пользовательский URL логотипа компании в формате PDF (JPG - 210x60px)';
$lang['settings_custom_pdf_logo_image_url_tooltip']   = 'Возможно, у вас возникнут проблемы с изображениями PNG с прозрачностью, которые обрабатываются по-разному в зависимости от используемой версии php-imagick или php-gd. Попробуйте обновить php-imagick и отключить php-gd
. Если вы оставите это поле пустым, будет использоваться загруженный логотип.';

# General
$lang['sale_agent_string']               = 'Агент по продажам';
$lang['amount_display_in_base_currency'] = 'Сумма отображается в базовой валюте. Используйте этот отчет только в том случае, если для платежей и расходов используется 1 валюта.';
# Leads
$lang['leads_summary']                                         = 'Лид Резюме';

# Contracts
$lang['contract_value']                 = 'Сумма договора';
$lang['contract_trash']                 = 'Корзина';
$lang['contracts_view_trash']           = 'Просмотреть корзину';
$lang['contracts_view_all']             = 'Все';
$lang['contracts_view_exclude_trashed'] = 'Исключить удаленные Договоры';
$lang['contract_value_tooltip']         = 'Будет использоваться базовая валюта.';
$lang['contract_trash_tooltip']         = 'Если вы добавляете договор в корзину, не показываетесь на стороне клиента, не включаетесь в график и другую статистику, а также по умолчанию выигрываете, когда будете перечислять все Договоры.';
$lang['contract_summary_active']              = 'Активный';
$lang['contract_renew_heading']               = 'Возобновить договор';
$lang['contract_summary_heading']             = 'Сводка по договорам';
$lang['contract_summary_expired']             = 'Срок действия истек';
$lang['contract_summary_about_to_expire']     = 'Срок действия истекает';
$lang['contract_summary_recently_added']      = 'Недавно добавленный';
$lang['contract_summary_trash']               = 'Корзина';
$lang['contract_summary_by_type']             = 'Договоры по типу';
$lang['contract_summary_by_type_value']       = 'Стоимость договоров по типу';
$lang['contract_renewed_successfuly']         = 'Договор возобновлен';
$lang['contract_renewed_fail']                = 'Проблема при продлении договора. Связаться с администратором';
$lang['no_contract_renewals_found']           = 'Продление для данного договора не найдено.';
$lang['no_contract_renewals_history_heading'] = 'История продления договора';
$lang['contract_renewed_by']                  = '%s Возобновил этот договор';
$lang['contract_renewal_deleted']             = 'Обновление успешно удалено';
$lang['contract_renewal_delete_fail']         = 'Не удалось удалить продление договора. Связаться с администратором';
$lang['contract_renewal_new_value'] = 'Новая стоимость договора:  %s';
$lang['contract_renewal_old_value'] = 'Старая стоимость договора: %s';
$lang['contract_renewal_new_start_date'] = 'Новая дата начала: %s';
$lang['contract_renewal_old_start_date'] = 'Старая дата начала: %s';
$lang['contract_renewal_new_end_date'] = 'Новая дата окончания: %s';
$lang['contract_renewal_old_end_date'] = 'Старая дата окончания: %s';
$lang['contract_attachment']           = 'Приложение';
$lang['contract_attachment_lowercase'] = 'приложение';

# Admin Aside Menu
$lang['als_goals_tracking']     = 'Отслеживание целей';
$lang['als_expenses']           = 'Расходы';
$lang['als_reports_expenses']   = 'Расходы';
$lang['als_expenses_vs_income'] = 'Расходы против дохода';

# Invoices
$lang['invoice_attach_file']           = 'Вложить файл';
$lang['invoice_mark_as_sent']          = 'Отметить как отправленное';
$lang['invoice_marked_as_sent']        = 'Счет, отмеченный как отправленный успешно';
$lang['invoice_marked_as_sent_failed'] = 'Не удалось отметить выставленный счет';

# Quick Actions
$lang['qa_new_goal']    = 'Настройка новой цели';
$lang['qa_new_expense'] = 'Запись расходов';

# Goals Tracking
$lang['goals']                                         = 'Цели';
$lang['goal']                                          = 'Цель';
$lang['goals_tracking']                                = 'Отслеживание целей';
$lang['new_goal']                                      = 'Новая цель';
$lang['goal_lowercase']                                = 'цель';
$lang['goal_start_date']                               = 'Дата начала';
$lang['goal_end_date']                                 = 'Дата окончания';
$lang['goal_subject']                                  = 'Тема';
$lang['goal_description']                              = 'Описание';
$lang['goal_type']                                     = 'Тип цели';
$lang['goal_achievement']                              = 'Достижение';
$lang['goal_contract_type']                            = 'Тип договора';
$lang['goal_notify_when_fail']                         = 'Уведомлять сотрудников о достижении цели';
$lang['goal_notify_when_achieve']                      = 'Уведомить сотрудников о достижении цели';
$lang['goal_progress']                                 = 'Прогресс';
$lang['goal_total']                                    = 'Всего: %s';
$lang['goal_result_heading']                           = 'Прогресс цели';
$lang['goal_income_shown_in_base_currency']            = 'Общая сумма дохода показана в вашей базовой валюте';
$lang['goal_notify_when_end_date_arrives']             = 'Сотрудники будут уведомлены о прибытии даты окончания (требуется CRON).';
$lang['goal_staff_members_notified_about_achievement'] = 'Сотрудникам сообщается об этом достижении цели';
$lang['goal_staff_members_notified_about_failure']     = 'Сотрудник уведомлен об ошибке';
$lang['goal_notify_staff_manualy']                     = 'Уведомлять сотрудников вручную';
$lang['goal_notify_staff_notified_manualy_success']    = 'Сотрудникам сообщается об этом результате цели';
$lang['goal_notify_staff_notified_manualy_fail']       = 'Не удалось уведомить сотрудников об этом результате цели';

$lang['goal_achieved'] = 'Достигнуто';
$lang['goal_failed']   = 'Сбой';
$lang['goal_close']    = 'Очень близко';
$lang['goal_type_total_income']                                         = 'Достижение общей суммы дохода';
$lang['goal_type_convert_leads']                                        = 'Преобразование X потенциальных';
$lang['goal_type_increase_customers_without_leads_conversions']         = 'Увеличить число клиентов';
$lang['goal_type_increase_customers_without_leads_conversions_subtext'] = 'Конверсия потенциальных клиентов исключена';

$lang['goal_type_increase_customers_with_leads_conversions']         = 'Увеличить число клиентов';
$lang['goal_type_increase_customers_with_leads_conversions_subtext'] = 'Включены конверсии потенциальных клиентов';
$lang['goal_type_make_contracts_by_type_calc_database']              = 'Сделать Договоры по типу';
$lang['goal_type_make_contracts_by_type_calc_database_subtext']      = 'Рассчитывается с даты добавления в базу данных';
$lang['goal_type_make_contracts_by_type_calc_date']                  = 'Сделать Договоры по типу';
$lang['goal_type_make_contracts_by_type_calc_date_subtext']          = 'Рассчитывается с даты начала действия договора';
$lang['goal_type_total_estimates_converted']                         = 'X Оценка конверсий ';
$lang['goal_type_total_estimates_converted_subtext']                 = 'Будут приниматься только сметы, которые будут преобразованы в Счета';
$lang['goal_type_income_subtext']                                    = 'Доход будет рассчитываться в базовой валюте (не конвертируется)';
# Payments
$lang['payment_transaction_id']                                      = 'Сделка ID';
# Settings Menu
$lang['acs_expenses']                                                = 'Расходы';
$lang['acs_expense_categories']                                      = 'Категории расходов';
# Expeneses
$lang['expense_category']                                            = 'Категория расходов';
$lang['expense_category_lowercase']                                  = 'категория расходов';
$lang['new_expense']                                                 = 'Запись расходов';
$lang['expense_add_edit_name']                                       = 'Название категории';
$lang['expense_add_edit_description']                                = 'Описание категории';
$lang['expense_categories']                                          = 'Категории расходов';
$lang['new_expense_category']                                        = 'Новая категория';
$lang['dt_expense_description']                                      = 'Описание';
$lang['expense']                                                     = 'Расход';
$lang['expenses']                                                    = 'Расходы';
$lang['expense_lowercase']                                           = 'расходы';
$lang['expense_add_edit_tax']                                        = 'Налог';
$lang['expense_add_edit_customer']                                   = 'Клиент';
$lang['expense_add_edit_currency']                                   = 'Валюта';
$lang['expense_add_edit_note']                                       = 'Заметка';
$lang['expense_add_edit_date']                                       = 'Дата расхода';
$lang['expense_add_edit_amount']                                     = 'Сумма';
$lang['expense_add_edit_billable']                                   = 'Оплачиваемый';
$lang['expense_add_edit_attach_receipt']                             = 'Приложить квитанцию';
$lang['expense_add_edit_reference_no']                               = 'Справка #';
$lang['expense_receipt']                                             = 'Расходы';
$lang['expense_receipt_lowercase']                                   = 'Квитанция о расходах';
$lang['expense_dt_table_heading_category']                           = 'Категория';
$lang['expense_dt_table_heading_amount']                             = 'Сумма';
$lang['expense_dt_table_heading_date']                               = 'Дата';
$lang['expense_dt_table_heading_reference_no']                       = 'Справка #';
$lang['expense_dt_table_heading_customer']                           = 'Клиент';
$lang['expense_dt_table_heading_payment_mode']                       = 'Режим оплаты';
$lang['expense_converted_to_invoice']                                = 'Расход успешно конвертирован в счет-фактуру';
$lang['expense_converted_to_invoice_fail']                              = 'Не удалось преобразовать этот счет в журнал ошибок проверки счетов.';
$lang['expense_copy_success']                                          = 'Расходы успешно скопированы.';
$lang['expense_copy_fail']                                            = 'Не удалось скопировать счет. Пожалуйста, проверьте необходимые поля и повторите попытку ';
$lang['expenses_list_all']                                           = 'Все';
$lang['expenses_list_billable']                                      = 'Оплачиваемый';
$lang['expenses_list_non_billable']                                  = 'Не оплачиваемый';
$lang['expenses_list_invoiced']                                      = 'Счет';
$lang['expenses_list_unbilled']                                      = 'Не выставлен счет';
$lang['expenses_list_recurring']                                     = 'Повторяющийся';
$lang['expense_invoice_delete_not_allowed']                          = 'Вы не можете удалить этот счет. Счет уже оплачен.';
$lang['expense_convert_to_invoice']                                  = 'Преобразовать в счет';
$lang['expense_edit']                                                = 'Изменить расходы';
$lang['expense_delete']                                              = 'Удалить';
$lang['expense_copy']                                                = 'Копировать';
$lang['expense_invoice_not_created']                                 = 'Счет не создан';
$lang['expense_billed']                                              = 'Выставляется счет';
$lang['expense_not_billed']                                          = 'Счет не оплачен';
$lang['expense_customer']                                            = 'Клиент';
$lang['expense_note']                                                = 'Запись:';
$lang['expense_date']                                                = 'Дата:';
$lang['expense_ref_noe']                                             = 'Ссылка #:';
$lang['expense_tax']                                                 = 'налог:';
$lang['expense_amount']                                              = 'Сумма:';
$lang['expense_recurring_indicator']                                 = 'Повторяющийся';
$lang['expense_already_invoiced']                                    = 'Этот счет уже выставлен';
$lang['expense_recurring_auto_create_invoice']                       = 'Автосоздание счета';
$lang['expense_recurring_send_custom_on_renew']                      = 'Отправьте счет на адрес электронной почты клиента, когда расход повторяется';
$lang['expense_recurring_autocreate_invoice_tooltip']                = 'Если этот флажок установлен, счет для клиента будет автоматически создан, когда расходы будут продлены.';
$lang['report_expenses_full']                                        = 'Полный отчет';
$lang['expenses_yearly_by_categories']                               = 'Расходы ежегодно по категориям';
$lang['total_expenses_for']                                          = 'Всего расходов на'; // year
$lang['expenses_report_for']                                         = 'Расходы на'; // year
# Custom fields
$lang['custom_field_required']                                       = 'Обязательное';
$lang['custom_field_show_on_pdf']                                    = 'Показать в PDF-формате';
$lang['custom_field_leads']                                          = 'Лиды';
$lang['custom_field_customers']                                      = 'Клиенты';
$lang['custom_field_staff']                                          = 'Сотрудники';
$lang['custom_field_contracts']                                      = 'Договоры';
$lang['custom_field_tasks']                                          = 'Задачи';
$lang['custom_field_expenses']                                       = 'Расходы';
$lang['custom_field_invoice']                                        = 'Выставленный счет';
$lang['custom_field_estimate']                                       = 'Смета';
# Tickets
$lang['ticket_single_private_staff_notes']                           = 'Личные примечания сотрудников';


# Business News
$lang['business_news'] = 'Деловые новости';

# Navigation
$lang['nav_todo_items']               = 'Надо сделать';
# Clients
# Contracts
$lang['clients_contracts_type']       = 'Тип договора';
# Version 1.0.5
# General
$lang['no_tax']                             = 'Нет налога';
$lang['numbers_not_formated_while_editing'] = 'Ставка в поле ввода не отформатирован при редактировании / добавлении элемента и должен оставаться не оформленным, не пытайтесь отформатировать его вручную здесь.';
# Contracts
$lang['contracts_view_expired']             = 'Истекший';
$lang['contracts_view_without_dateend']     = 'Договора без даты';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Договора';
# Invoices General
$lang['invoice_estimate_general_options']        = 'Общие настройки';
$lang['invoice_table_item_description']          = 'Описание';
$lang['invoice_recurring_indicator']             = 'Повторяющийся';

# Estimates
$lang['estimate_convert_to_invoice_successfuly'] = 'Смету, конвертированную в счет';
$lang['estimate_table_item_description']         = 'Описание';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'Вы не можете удалить базовую валюту. Вам нужно назначить новую базовую валюту для удаления этой.';
$lang['invoice_copy']              = 'Копировать счет';
$lang['invoice_copy_success']      = 'Счет успешно скопирован';
$lang['invoice_copy_fail']         = 'Не удалось скопировать счет';
$lang['invoice_due_after_help']    = 'Установите ноль, чтобы избежать вычисления';

$lang['show_shipping_on_invoice'] = 'Показать сведения о доставке в счете';

# Estimates
$lang['show_shipping_on_estimate']         = 'Показать данные о доставке в смету';
$lang['is_invoiced_estimate_delete_error'] = 'По этой смете выставлен счет. Вы не можете удалить смету';

# Customers & Invoices / Estimates
$lang['ship_to']                  = 'Адрес получателя';
$lang['customer_profile_details'] = 'Сведения о клиенте';
$lang['billing_shipping']         = 'Оплата и доставка';
$lang['billing_address']          = 'Платежный адрес';
$lang['shipping_address']         = 'Адрес доставки';

$lang['billing_street']  = 'Улица';
$lang['billing_city']    = 'Город';
$lang['billing_state']   = 'Область';
$lang['billing_zip']     = 'Почтовый индекс';
$lang['billing_country'] = 'Страна';

$lang['shipping_street']                    = 'Улица';
$lang['shipping_city']                      = 'Город';
$lang['shipping_state']                     = 'Область';
$lang['shipping_zip']                       = 'Почтовый индекс';
$lang['shipping_country']                   = 'Страна';
$lang['get_shipping_from_customer_profile'] = 'Получить данные о доставке из профиля клиента';

# Customer
$lang['customer_file_from']                                    = 'Показ от %s';
$lang['customer_default_currency']                             = 'Валюта по умолчанию';
$lang['customer_no_attachments_found']                         = 'Вложения не найдены';
$lang['customer_update_address_info_on_invoices']              = 'Обновление информации о доставке / выставлении счетов на все предыдущие Счета / сметы';
$lang['customer_update_address_info_on_invoices_help']         = 'Если вы отметите это поле, доставка и информация о биллинге будут обновлены для всех счетов и смет. Примечание: Счета с оплаченным статусом не будут затронуты.';
$lang['setup_google_api_key_customer_map']                     = 'Настройка Google ключ API для того, чтобы посмотреть на карте клиента';
$lang['customer_attachments_file']                             = 'Файлы';
$lang['client_send_set_password_email']                        = 'Отправить установленный пароль по электронной почте';
$lang['customer_billing_same_as_profile']                      = 'Информация о клиенте';
$lang['customer_billing_copy']                                 = 'Копировать платежный адрес';
$lang['customer_map']                                          = 'Карта';
$lang['set_password_email_sent_to_client']                     = 'Письмо для установки пароля успешно отправленно контакту';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Профиль обновлен, чтобы установить пароль,просмотрите свою электронную почту';
$lang['customer_attachments']                                  = 'Файлы';
$lang['customer_longitude']                                    = 'Долгота (Карты Google)';
$lang['customer_latitude']                                     = 'Широта (Google Maps)';

# Authentication
$lang['admin_auth_set_password']          = 'Пароль';
$lang['admin_auth_set_password_repeat']   = 'Повторите пароль';
$lang['admin_auth_set_password_heading']  = 'Установить пароль';
$lang['password_set_email_subject']       = 'Установить новый пароль %s';
# General
$lang['apply']                            = 'Применить';
$lang['department_calendar_id']           = 'Google Calendar ID';
$lang['kan_ban_string']                   = 'KAN BAN';
$lang['localization_default_language']    = 'Язык по умолчанию';
$lang['system_default_string']            = 'Система по умолчанию';
$lang['advanced_options']                 = 'Расширенные опции';
# Expenses
$lang['expense_list_invoice']             = 'Счет';
$lang['expense_list_billed']              = 'Выставленный счет';
$lang['expense_list_unbilled']            = 'Нет счетов';
# Leads
$lang['lead_merge_custom_field']          = 'Объединить в качестве настраиваемого поля';
$lang['lead_merge_custom_field_existing'] = 'Слияние с полем базы данных';
$lang['lead_dont_merge_custom_field']     = 'Не объединяйте';
$lang['no_lead_notes_found']              = 'Заметки не найдены';
$lang['leads_view_list']                  = 'Список';
$lang['lost_leads']                       = 'Утраченные потенциальные клиенты';
$lang['junk_leads']                       = 'Нежелательный клиент';
$lang['lead_mark_as_lost']                = 'Отметить как потерянное';
$lang['lead_unmark_as_lost']              = 'Снять отметку, как потерянный';
$lang['lead_marked_as_lost']              = 'Клиент отмечен как "Потерянный" успешно ';
$lang['lead_unmarked_as_lost']            = 'Метка "Потерянный" снята успешно';
$lang['leads_status_color']               = 'Цвет';
$lang['lead_mark_as_junk']     = 'Отметить как спам';
$lang['lead_unmark_as_junk']   = 'Снять отметку как спам';
$lang['lead_marked_as_junk']   = 'Клиент, помеченный как спам, успешно';
$lang['lead_unmarked_as_junk'] = 'Отметка "Спам-клиент" снята';
$lang['lead_not_found']                                                      = 'Лид не найден';
$lang['lead_lost']                                                           = 'Потерянный';
$lang['lead_junk']                                                           = 'Спам';
$lang['leads_not_assigned']                                                  = 'Не назначен';
# Contacts
$lang['contract_not_visible_to_client']                                      = 'Скрыть от клиента';
$lang['contract_edit_overview']                                              = 'Обзор договоров';
$lang['contract_attachments']                                                = 'Вложения';
# Tasks
$lang['task_view_make_public']                                               = 'Опубликовать';
$lang['task_is_private']                                                     = 'Частная задача';
$lang['task_finished']                                                       = 'Законченный';
$lang['task_single_related']                                                 = 'Связанные';
$lang['task_unmark_as_complete']                                             = 'Снять отметку как завершенную';
$lang['task_unmarked_as_complete']                                           = 'Задача, не отмеченная как завершенная';
$lang['task_relation']                                                       = 'Cвязанные';
$lang['task_public']                                                         = 'Публичная';
$lang['task_public_help']                                                    = 'Если вы поставите эту задачу публичной, она станет видимой для всех сотрудников. В противном случае будут видны только члены, которые являются исполнителями, подписчиками, создателями или администраторами';
# Settings
$lang['settings_general_favicon']                                            = 'Значок';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Вывод клиентских PDF-документов из области администрирования на языке клиента';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Если для этой опции установлено значение yes и eq. Системный язык по умолчанию - английский, а у клиента есть язык настройки french pdf документы будут выводиться на клиентском языке';
$lang['settings_cron_surveys']                                               = 'Опросы';
$lang['settings_default_tax']                                                = 'Налог по умолчанию';
$lang['setup_calendar_by_departments']                                       = 'Настройка календаря по отделам';
$lang['settings_calendar']                                                   = 'Календарь';
$lang['settings_sales_invoice_due_after']                                    = 'Счет через (дней)';
$lang['settings_google_api']                                                 = 'Google API Key';
$lang['settings_gcal_main_calendar_id']                                      = 'Google Calendar ID';
$lang['settings_gcal_main_calendar_id_help']                                 = 'Это основной календарь компании. Будут показаны все события из этого календаря. Если вы хотите указать календарь на основе отделов, вы можете добавить в отдел Google Calendar ID.';
$lang['show_on_calendar']                  = 'Показать в календаре';
$lang['show_invoices_on_calendar']         = 'Счета';
$lang['show_estimates_on_calendar']        = 'Сметы';
$lang['show_contracts_on_calendar']        = 'Договора';
$lang['show_tasks_on_calendar']            = 'Задачи';
$lang['show_customer_reminders_on_calendar'] = 'Памятки по работе с клиентами';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Копирование настраиваемых полей в профиль клиента';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'Если ни одного из следующих настраиваемых полей не существует, клиент будет автоматически создан с тем же именем, в противном случае будет скопировано только значение из основного профиля.';
$lang['lead_profile']                                                = 'Профиль';
$lang['lead_is_client']                                              = 'Клиент';
$lang['leads_kan_ban_notes_title']                                   = 'Заметки';
$lang['leads_email_integration_folder_no_encryption']                = 'Нет шифрования';
$lang['leads_email_integration']                                     = 'Интеграция электронной почты';
$lang['leads_email_active']                                          = 'Активный';
$lang['leads_email_integration_imap']                                = 'IMAP Server';
$lang['leads_email_integration_email']                               = 'Адрес электронной почты (Логин)';
$lang['leads_email_integration_password']                            = 'Пароль';
$lang['leads_email_integration_default_source']                      = 'Исходный источник';
$lang['leads_email_integration_check_every']                         = 'Проверка каждые (минут)';
$lang['leads_email_integration_default_assigned']                    = 'Ответственный за нового Лида';
$lang['leads_email_encryption']                                      = 'Шифрование';
$lang['leads_email_integration_updated']                             = 'Обновлена интеграция электронной почты';
$lang['leads_email_integration_default_status']                      = 'Статус по умолчанию';
$lang['leads_email_integration_folder']                              = 'Папка';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Уведомлять при импорте Лида';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Проверять только открытые письма';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'Сценарий будет автоматически установить электронную почту, чтобы открылся после проверки. Это используется для предотвращения проверки всех электронных писем снова и снова. Его не рекомендуется снимать этот флажок, если у вас много писем, и вы настроили много пересылки на адрес электронной почты, который вы установили для потенциальных клиентов';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Уведомлять, если отправить несколько раз по электронной почте';
$lang['leads_email_integration_test_connection']                     = 'Тестировать IMAP-соединение';
$lang['lead_email_connection_ok']                                    = 'IMAP Соединение хорошее';
$lang['lead_email_connection_not_ok']                                = 'IMAP Соединение не в порядке';
$lang['lead_email_activity']                                         = 'E-mail активность';
$lang['leads_email_integration_notify_roles']                        = 'Роли для уведомления';
$lang['leads_email_integration_notify_staff']                        = 'Уведомление сотрудникам';
$lang['lead_public']                                                 = 'Публичный';
# Knowledge Base

$lang['kb_group_color']                = 'Цвет';
$lang['kb_group_order']                = 'Порядок';
# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Массовая загрузка PDF-файлов';
$lang['bulk_export_pdf_payments']      = 'Платежи';
$lang['bulk_export_pdf_estimates']     = 'Сметы';
$lang['bulk_export_pdf_invoices']      = 'Счет';
$lang['bulk_pdf_export_button']        = 'Экспорт';
$lang['bulk_pdf_export_select_type']   = 'Выберите тип';
$lang['no_data_found_bulk_pdf_export'] = 'Нет данных для экспорта';
$lang['bulk_export_status_all']        = 'ВСЕ';
$lang['bulk_export_status']            = 'Статус';
$lang['bulk_export_zip_payment_modes'] = 'Сделано платежей';
$lang['bulk_export_include_tag']       = 'Включить тег';
$lang['bulk_export_include_tag_help']  = 'Например. Оригинал или Копия. Тег будет выведен в формате PDF. Рекомендуется использовать только 1 тег';
# Predefined replies
$lang['no_predefined_replies_found']   = 'Не найдены предопределенные ответы';
## Clients area
$lang['clients_contract_attachments']  = 'Вложения';
# Backup
$lang['backup_type_full']              = 'Полное резервное копирование';
$lang['backup_type_db']                = 'Резервное копирование базы данных';

$lang['auto_backup_options_updated']     = 'Обновлены параметры автозагрузки';
$lang['auto_backup_every']               = 'Создавать резервные копии каждые X дней';
$lang['auto_backup_enabled']             = 'Включено (требуется Cron)';
$lang['auto_backup']                     = 'Автобэкап';
$lang['backup_delete']                   = 'Backup удалить';
$lang['create_backup']                   = 'Создать резервную копию';
$lang['backup_success']                  = 'Резервное копирование выполнено успешно';
$lang['utility_backup']                  = 'Database Backup';
$lang['utility_create_new_backup_db']    = 'Создать резервную копию базы данных';
$lang['utility_backup_table_backupname'] = 'Резервная копия';
$lang['utility_backup_table_backupsize'] = 'Размер резервной копии';
$lang['utility_backup_table_backupdate'] = 'Дата';
$lang['utility_db_backup_note']          = 'Примечание. Из-за ограниченного времени выполнения и объема памяти, доступного для PHP, резервное копирование очень больших баз данных может оказаться невозможным. Если ваша база данных очень велика, вам может потребоваться резервное копирование непосредственно с вашего SQL-сервера через командную строку, или ваш администратор сервера сделает это за вас, если у вас нет привилегий root.';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Предложения';
$lang['clients_nav_support']   = 'Поддержка';
# General
$lang['more']                  = 'Больше';
$lang['add_item']              = 'Добавить элемент';
$lang['goto_admin_area']       = 'Перейти в административную область';
$lang['click_here_to_edit']    = 'Нажмите здесь, чтобы изменить';
$lang['delete']                = 'Удалить %s';
$lang['welcome_top']           = 'Привет %s';

# Customers
$lang['customer_permissions']         = 'Разрешения';
$lang['customer_permission_invoice']  = 'Счета';
$lang['customer_permission_estimate'] = 'Смета';
$lang['customer_permission_proposal'] = 'Предложения';
$lang['customer_permission_contract'] = 'Договоры';
$lang['customer_permission_support']  = 'Поддержка';


#Tasks
$lang['task_related_to'] = 'Относится к';

# Send file
$lang['custom_file_fail_send']    = 'Не удалось отправить файл';
$lang['custom_file_success_send'] = 'Файл успешно отправлен в %s';
$lang['send_file_subject']        = 'Email документ';
$lang['send_file_email']          = 'Email Адрес';
$lang['send_file_message']        = 'Сообщение';
$lang['send_file']                = 'Отправить файл';
$lang['add_checklist_item']       = 'Элемент контрольного списка';
$lang['task_checklist_items']     = 'Элементы контрольного списка';

# Import
$lang['default_pass_clients_import'] = 'Пароль по умолчанию для всех контактов';
$lang['simulate_import']             = 'Имитировать импорт';
$lang['import_upload_failed']        = 'Загрузка не удалась';
$lang['import_total_imported']       = 'Всего импортировано';
$lang['import_leads']                = 'Импорт лидов';
$lang['import_customers']            = 'Импортировать клиентов';
$lang['choose_csv_file']             = 'Выберите файл CSV';
$lang['import']                      = 'Импорт';
$lang['lead_import_status']          = 'Статус';
$lang['lead_import_source']          = 'Источник';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Предложения';

# Invoices
$lang['delete_invoice'] = 'Удалить';

# Calendar
$lang['calendar_lead_reminder'] = 'Напоминание';

$lang['items']      = 'Элемент';
$lang['support']    = 'Поддержка';
$lang['new_ticket'] = 'Новый тикет';

# Reminders
$lang['client_edit_set_reminder_title'] = 'Добавить напоминание клиенту';
$lang['lead_set_reminder_title']        = 'Добавить напоминание';
$lang['set_reminder_tooltip']           = 'Этот параметр позволяет вам никогда не забывать о своих клиентах.';
$lang['client_reminders_tab']           = 'Напоминания';
$lang['leads_reminders_tab']            = 'Напоминания';

# Tickets
$lang['delete_ticket_reply']  = 'Удалить ответ';
$lang['ticket_priority_edit'] = 'Изменить приоритет';
$lang['ticket_priority_add']  = 'Добавить приоритет';
$lang['ticket_status_edit']   = 'Изменить статус тикета';
$lang['ticket_service_edit']  = 'Изменить службу тикета';
$lang['edit_department']      = 'Изменить отдел';

# Expenses
$lang['edit_expense_category']                                    = 'Изменить категорию расходов';
# Settings
$lang['customer_default_country']                                 = 'Страна по умолчанию';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Требовать от клиента входа в систему для просмотра сметы';
$lang['set_reminder']                                             = 'Установить напоминание';
$lang['set_reminder_date']                                        = 'Дата получения уведомления';
$lang['reminder_description']                                     = 'Добавить описаниа';
$lang['reminder_notify_me_by_email']                              = 'Отправить также электронное письмо для этого напоминания';
$lang['reminder_added_successfuly']                               = 'Напоминание добавлено. Вы будете уведомлены вовремя.';
$lang['reminder_description']                                     = 'Описание';
$lang['reminder_date']                                            = 'Дата';
$lang['reminder_staff']                                           = 'Напомнить';
$lang['reminder_is_notified']                                     = 'Извещается?';
$lang['reminder_is_notified_boolean_no']                          = 'НЕТ';
$lang['reminder_is_notified_boolean_yes']                         = 'ДА';
$lang['reminder_set_to']                                          = 'Установите напоминание от';
$lang['reminder_deleted']                                         = 'Напоминание удалено';
$lang['reminder_failed_to_delete']                                = 'Не удалось удалить напоминание';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Показать статус счета / сметы в PDF-формате';
$lang['email_piping_default_priority']                            = 'Приоритет по умолчанию для ticket по ticket';
$lang['show_lead_reminders_on_calendar']                          = 'Напоминания';
$lang['tickets_piping']                                           = 'Отправка по электронной почте';
$lang['email_piping_only_replies']                                = 'Только ответы, разрешенные по электронной почте';
$lang['email_piping_only_registered']                             = 'только для зарегистрированных пользователей';

# Estimates
$lang['view_estimate_as_client']         = 'Просмотр сметы в качестве клиента';
$lang['estimate_mark_as']                = 'Отметить как %s';
$lang['estimate_status_changed_success'] = 'Статус сметы изменен';
$lang['estimate_status_changed_fail']    = 'Не удалось изменить статус сметы';
$lang['estimate_email_link_text']        = 'Посмотреть смету';

# Proposals
$lang['proposal_to']                            = 'Компания / Имя';
$lang['proposal_date']                          = 'Дата';
$lang['proposal_address']                       = 'Адрес';
$lang['proposal_phone']                         = 'Телефон';
$lang['proposal_email']                         = 'Email';
$lang['proposal_date_created']                  = 'Дата создания';
$lang['proposal_open_till']                     = 'Открыть до';
$lang['proposal_status_open']                   = 'Открыто';
$lang['proposal_status_accepted']               = 'Принято';
$lang['proposal_status_declined']               = 'Отклонено';
$lang['proposal_status_sent']                   = 'Отправлено';
$lang['proposal_expired']                       = 'Срок действия истек';
$lang['proposal_subject']                       = 'Элемент';
$lang['proposal_total']                         = 'Всего';
$lang['proposal_status']                        = 'Статус';
$lang['proposals_list_all']                     = 'Все';
$lang['proposals_leads_related']                = 'Связанные темы';
$lang['proposals_customers_related']            = 'Клиенты, относящиеся';
$lang['proposal_related']                       = 'Cвязанные';
$lang['proposal_for_lead']                      = 'Лид';
$lang['proposal_for_customer']                  = 'Клиент';
$lang['proposal']                               = 'Предложения';
$lang['proposal_lowercase']                     = 'Предложения';
$lang['proposals']                              = 'Предложения';
$lang['proposals_lowercase']                    = 'Предложения';
$lang['new_proposal']                           = 'Новое Предложения';
$lang['proposal_currency']                      = 'Валюта';
$lang['proposal_allow_comments']                = 'Разрешить комментарии';
$lang['proposal_allow_comments_help']           = 'Если вы отметите эту опцию, комментарии будут разрешены, когда ваши клиенты просмотрят предложение.';

$lang['proposal_edit']                          = 'Редактировать';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Отправить Email';
$lang['proposal_send_to_email_title']           = 'Отправить Предложения почтой';
$lang['proposal_attach_pdf']                    = 'Прикрепить PDF';
$lang['proposal_preview_template']              = 'Просмотреть шаблон';
$lang['proposal_view']                          = 'Посмотреть предложение';
$lang['proposal_copy']                          = 'Копировать';
$lang['proposal_delete']                        = 'Удалить';
$lang['proposal_to']                            = 'Кому';
$lang['proposal_add_comment']                   = 'Добавить комментарий';
$lang['proposal_sent_to_email_success']         = 'Предложение успешно отправлено по электронной почте';
$lang['proposal_sent_to_email_fail']            = 'Не удалось отправить предложение на email';
$lang['proposal_copy_fail']                     = 'Не удалось скопировать предложение';
$lang['proposal_copy_success']                  = 'Предложение успешно скопировано';
$lang['proposal_status_changed_success']        = 'Статус предложения успешно изменен';
$lang['proposal_status_changed_fail']           = 'Не удалось изменить статус предложения';
$lang['proposal_assigned']                      = 'Назначено';
$lang['proposal_comments']                      = 'Комментарий';
$lang['proposal_convert']                       = 'Конвертировать';
$lang['proposal_convert_estimate']              = 'Смета';
$lang['proposal_convert_invoice']               = 'Выставленный счет';
$lang['proposal_convert_to_estimate']           = 'Преобразовать в смету';
$lang['proposal_convert_to_invoice']            = 'Преобразовать в счет';
$lang['proposal_convert_to_lead_disabled_help'] = 'Вам необходимо преобразовать возможного клиента в клиента, чтобы создать %s';
$lang['proposal_convert_not_related_help']      = 'Предложение должно быть связано с клиентом, чтобы преобразовать его в %s';
$lang['proposal_converted_to_estimate_success'] = 'Предложение успешно конвертировано';
$lang['proposal_converted_to_invoice_success']  = 'Предложение успешно конвертировано в счет';
$lang['proposal_converted_to_estimate_fail']    = 'Не удалось преобразовать предложение для сметы';
$lang['proposal_converted_to_invoice_fail']     = 'Не удалось конвертировать предложение в счет';

# Proposals - view proposal template
$lang['proposal_total_info']   = 'Всего %s';
$lang['proposal_accept_info']  = 'Принять';
$lang['proposal_decline_info'] = 'Отклонить';
$lang['proposal_pdf_info']     = 'PDF';

# Customers Portal
$lang['customer_reset_action']            = 'Сброс';
$lang['customer_reset_password_heading']  = 'Сброс пароля';
$lang['customer_forgot_password_heading'] = 'Забыли пароль';
$lang['customer_forgot_password']         = 'Забыли пароль?';
$lang['customer_reset_password']          = 'Пароль';
$lang['customer_reset_password_repeat']   = 'Повторите пароль';
$lang['customer_forgot_password_email']   = 'Email адрес';
$lang['customer_forgot_password_submit']  = 'Отправить';
$lang['customer_ticket_subject']          = 'Тема тикета';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'Предложения';

# Tasks
$lang['add_task_attachments']                 = 'Вложения';
$lang['task_view_attachments']                = 'Вложения';
$lang['task_view_description']                = 'Описание';

# Customer Groups
$lang['customer_group_add_heading']  = 'Добавить новую группу клиентов';
$lang['customer_group_edit_heading'] = 'Изменение группы клиентов';
$lang['new_customer_group']          = 'Новая группа клиентов';
$lang['customer_group_name']         = 'Имя';
$lang['customer_groups']             = 'Группа';
$lang['customer_group']              = 'Группа клиентов';
$lang['customer_group_lowercase']    = 'Группа клиентов';

$lang['customer_have_invoices_by']       = 'Содержит Счета по статусу %s';
$lang['customer_have_estimates_by']      = 'Содержит сметы по статусу %s';
$lang['customer_have_contracts_by_type'] = 'Наличие договоров по типу %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Показать на рабочем столе';
$lang['custom_field_show_on_client_portal']      = 'Показать на клиентском портале';
$lang['custom_field_show_on_client_portal_help'] = 'Если это поле отмечено и будет показано в таблицах';
$lang['custom_field_visibility']                 = 'Видимость';

# Utilities # Menu Builder
$lang['utilities_menu_translate_name_help'] = 'Вы можете добавить здесь также перевод строки. Поэтому, если персонал / система имеют другой язык, то по умолчанию названия пунктов меню будут выводиться на языке персонала. В противном случае, если строка не существует в файле перевода, будет взята строка, которую вы вводите здесь.';
$lang['utilities_menu_icon']                = 'Значек';
$lang['active_menu_items']                  = 'Активные элементы меню';
$lang['inactive_menu_items']                = 'Неактивные элементы меню';
$lang['utilities_menu_permission']          = 'Разрешение';
$lang['utilities_menu_url']                 = 'URL';
$lang['utilities_menu_name']                = 'Имя';
$lang['utilities_menu_save']                = 'Сохранить меню';

# Knowledge Base
$lang['view_articles_list']     = 'Просмотр статей';
$lang['view_articles_list_all'] = 'Все статьи';
$lang['als_add_article']        = 'Добавить статью';
$lang['als_all_articles']       = 'Статьи';
$lang['als_kb_groups']          = 'Группы';

# Customizer Menu
$lang['menu_builder']            = 'Настройка меню';
$lang['main_menu']               = 'Главное меню';
$lang['setup_menu']              = 'Меню Настройкаu';
$lang['utilities_menu_url_help'] = '%s Автоматически добавляется к URL-адресу';

# Spam Filter - Tickets
$lang['spam_filters']                 = 'Спам-фильтры';
$lang['spam_filter']                  = 'Спам-фильтр';
$lang['new_spam_filter']              = 'Ноаый фильтр';
$lang['spam_filter_blocked_senders']  = 'Заблокированные отправители';
$lang['spam_filter_blocked_subjects'] = 'Заблокированные темы';
$lang['spam_filter_blocked_phrases']  = 'Заблокированные фразы';
$lang['spam_filter_content']          = 'Контент ';
$lang['spamfilter_edit_heading']      = 'Редактировать спам-фильтр';
$lang['spamfilter_add_heading']       = 'Добавить фильтр';
$lang['spamfilter_type']              = 'Тип';
$lang['spamfilter_type_subject']      = 'Тема';
$lang['spamfilter_type_sender']       = 'Отправитель';
$lang['spamfilter_type_phrase']       = 'Фраза';

# Tickets
$lang['block_sender']               = 'Блокировать отправителя ';
$lang['sender_blocked']             = 'Отправитель заблокирован';
$lang['sender_blocked_successfuly'] = 'Отправитель успешно заблокирован';
$lang['ticket_date_created']        = 'Дата создания';

#KB
$lang['edit_kb_group']             = 'Изменить группу';
# Leads
$lang['edit_source']               = 'Изменить источник';
$lang['edit_status']               = 'Изменить статус';
# Contacts
$lang['contract_type_edit']        = 'Изменить тип договора';
# Reports
$lang['report_by_customer_groups'] = 'Общая стоимость по группам клиентов';
#Utilities
$lang['ticket_pipe_log']           = 'Журнал заявок тикетов';
$lang['ticket_pipe_name']          = 'От имени';
$lang['ticket_pipe_email_to']      = 'Кому';
$lang['ticket_pipe_email']         = 'Из Email';
$lang['ticket_pipe_subject']       = 'Тема';
$lang['ticket_pipe_message']       = 'Сообщение';
$lang['ticket_pipe_date']          = 'Дата';
$lang['ticket_pipe_status']        = 'Статус';

# Home
$lang['home_latest_activity']       = 'Последние действия';
$lang['home_my_tasks']              = 'Мои Задачи';
$lang['home_latest_activity']       = 'Последние действия';
$lang['home_my_todo_items']         = 'Мои Задания';
$lang['home_widget_view_all']       = 'Просмотреть всё';
$lang['home_stats_full_report']     = 'Полный отчет';

# Validation

$lang['form_validation_required']    = 'Поле {field} обязательно';
$lang['form_validation_valid_email'] = 'Поле {field} должно содержать действительный адрес электронной почты.';
$lang['form_validation_matches']     = 'Поле {field} не соответствует полю {param}.';
$lang['form_validation_is_unique']   = 'Поле {field} должно содержать уникальное значение.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event'] = 'Календарное событие сегодня - %s ...';
$lang['not_event_public'] = 'Сегодня начинается событие - %s ...';
$lang['not_contract_expiry_reminder'] = 'Напоминание об истечении срока действия Договора- %s ...';
$lang['not_recurring_expense_cron_activity_heading'] = 'Периодические расходы';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Периодические счета Cron Job активировать';
$lang['not_recurring_total_renewed'] = 'Всего обновлено: %s';
$lang['not_recurring_expenses_action_taken_from'] = 'Меры, принятые за периодические расходы';
$lang['not_invoice_created'] = 'Счет создан:';
$lang['not_invoice_renewed'] = 'Обновленный счет:';
$lang['not_expense_renewed'] = 'Возобновленные расходы:';
$lang['not_invoice_sent_to_customer'] = 'Счет, отправленный клиенту: %s';
$lang['not_invoice_sent_yes'] = 'ДА';
$lang['not_invoice_sent_not'] = 'НЕТ';
$lang['not_action_taken_from_recurring_invoice'] = 'Решение, принятое из повторяющегося счета:';
$lang['not_new_reminder_for'] = 'Новое напоминание для %s';
$lang['not_received_one_or_more_messages_lead'] = 'Получил еще одно письмо от ведущего';
$lang['not_received_lead_imported_email_integration'] = 'Lead, импортированный из электронной почты';
$lang['not_lead_imported_attachment'] = 'Импортированное вложение из email';
$lang['not_estimate_status_change'] = 'Импортированное вложение из email';
$lang['not_estimate_status_updated'] = 'Обновлено состояние сметы: от: %s до %s';
$lang['not_goal_message_success'] = 'Поздравления! Мы достигли новой цели.<br /> Тип цели: %s
<br />Достижение цели: %s
<br />Всего Достижения: %s
<br />Дата начала: %s
<br />Дата окончания: %s';
$lang['not_assigned_lead_to_you'] = 'Назначил вам лида %s';
$lang['not_lead_activity_assigned_to'] = '%s назначены %s';
$lang['not_lead_activity_attachment_deleted'] = 'Удаленное вложение';
$lang['not_lead_activity_status_updated'] = '%s Обновил статус от %s до %s';
$lang['not_lead_activity_contacted'] = '%s связался с этим лидом %s';
$lang['not_lead_activity_created'] = '%s Создал лида';
$lang['not_lead_activity_marked_lost'] = 'Отмечен как потерянный';
$lang['not_lead_activity_unmarked_lost'] = 'Безнадежно потеряный';
$lang['not_lead_activity_marked_junk'] = 'Помечено как СПАМ';
$lang['not_lead_activity_unmarked_junk'] = 'Не отмечен как мусор';
$lang['not_lead_activity_added_attachment'] = 'Добавлено вложение';
$lang['not_lead_activity_converted_email'] = 'Письмо электронной почты изменено. Первое электронное письмо было: %s и добавлено как клиент с электронной почтой %s';
$lang['not_lead_activity_converted'] = '%s Преобразовал это в клиента';
$lang['not_liked_your_post'] = '%s Понравилось ваше сообщение %s ...';
$lang['not_commented_your_post'] = '%s Прокомментировал ваше сообщение %s ...';
$lang['not_liked_your_comment'] = '%s Понравился ваш комментарий %s ...';
$lang['not_proposal_assigned_to_you'] = 'Предложение назначены вам - %s ...';
$lang['not_proposal_comment_from_client'] = 'Новый комментарий от клиента по предложению %s ...';
$lang['not_proposal_proposal_accepted'] = 'Предложение принято';
$lang['not_proposal_proposal_declined'] = 'Предложение отклонено';
$lang['not_task_added_you_as_follower'] = 'Добавил вас в качестве подписчика по задаче %s ...';
$lang['not_task_added_someone_as_follower'] = 'Добавил %s в качестве подписчика по задаче %s ...';
$lang['not_task_added_himself_as_follower'] = 'Добавил себя как подписчика по заданию %s ...';
$lang['not_task_assigned_to_you'] = 'Назначил вам задачу %s ...';
$lang['not_task_assigned_someone'] = 'Присвоил %s задачу %s ...';
$lang['not_task_will_do_user'] = 'Будет выполнять задачу %s ...';
$lang['not_task_new_attachment'] = 'Добавлено новое Вложение';
$lang['not_task_marked_as_complete'] = 'Помеченная задача завершена %s';
$lang['not_task_unmarked_as_complete'] = 'Не помеченная задача завершена %s';
$lang['not_ticket_assigned_to_you'] = 'Тикет назначеный вам - %s ...';
$lang['not_ticket_reassigned_to_you'] = 'Тикет перенаправлен вам - %s ...';
$lang['not_estimate_customer_accepted'] = 'Поздравления! Клиент принял смету с номером %s';
$lang['not_estimate_customer_declined'] = 'Клиент отклонил смету с номером %s';
$lang['estimate_activity_converted'] = 'Конвертировал эту смету в счет.<br /> %s';
$lang['estimate_activity_created'] = 'Создал смету';
$lang['invoice_estimate_activity_removed_item'] = 'Удаленный элемент <b>%s</b>';
$lang['estimate_activity_number_changed'] = 'Номер сметы изменен с %s на %s';
$lang['invoice_activity_number_changed'] = 'Номер счета изменен с %s на %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'Обновленное краткое описание элемента от %s до %s';
$lang['invoice_estimate_activity_updated_item_long_description'] = 'Обновлено описание элемента длинное из <b>%s</b> до <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate'] = 'Обновленный курс элемента от %s до %s';
$lang['invoice_estimate_activity_updated_qty_item'] = 'Обновленное количество элементов <b>%s</b> от % s до %s';
$lang['invoice_estimate_activity_added_item'] = 'Добавлен новый элемент <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client'] = 'Отправил смету клиенту';
$lang['estimate_activity_client_accepted_and_converted'] = 'Клиент принял эту Смета. Смета пересчитывается в счет с номером %s';
$lang['estimate_activity_client_accepted'] = 'Клиент принял эту смету';
$lang['estimate_activity_client_declined'] = 'Клиент отклонил эту смету';
$lang['estimate_activity_marked'] = 'отмечена смета как %s';
$lang['invoice_activity_status_updated'] = 'Статус счета обновлен с %s до %s';
$lang['invoice_activity_created'] = 'Создал счет-фактуру';
$lang['invoice_activity_from_expense'] = 'Конвертируется в счет-фактуру';
$lang['invoice_activity_recuring_created'] = '[Recurring] Счет, созданный CRON';
$lang['invoice_activity_recuring_from_expense_created'] = '[Счет из счета] Счет, созданный CRON';
$lang['invoice_activity_sent_to_client_cron'] = 'Счет отправлен клиенту CRON';
$lang['invoice_activity_sent_to_client'] = 'Отправил счет клиенту';
$lang['invoice_activity_marked_as_sent'] = 'Отмеченный счет отправлен';
$lang['invoice_activity_payment_deleted'] = 'Удаленный платеж за счет-фактуру. Платеж #%s, общая сумма %s';
$lang['invoice_activity_payment_made_by_client'] = 'Клиент произвел оплату счета от общей суммы <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff'] = 'Зарегистрированный платеж от общей суммы <b>%s</b> - %s';
$lang['invoice_activity_added_attachment'] = 'Добавлено вложение';

# Navigation
$lang['top_search_placeholder'] = 'Поиск...';

# Staff
$lang['staff_profile_inactive_account'] = 'Эта учетная запись сотрудника неактивна.';

# Estimates
$lang['copy_estimate'] = 'Копировать смету';
$lang['estimate_copied_successfuly'] = 'Смета успешно скопирована';
$lang['estimate_copied_fail'] = 'Не удалось скопировать смету';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Задачи назначеные мне';
$lang['tasks_view_follower_by_user'] = 'Задачи, которые я отслеживаю';
$lang['no_tasks_found'] = 'Задачи не найдены';

# Leads
$lang['leads_dt_datecreated'] = 'Создано';
$lang['leads_sort_by'] = 'Сортировать по';
$lang['leads_sort_by_datecreated'] = 'Дата создания';
$lang['leads_sort_by_kanban_order'] = 'KAN BAN Order';

# Proposals
$lang['proposal_items_name'] = 'Элемент';
$lang['proposal_items_description'] = 'Описание';
$lang['proposal_items_qty'] = 'Кол-во';
$lang['proposal_items_rate'] = 'Цена';
$lang['proposal_items_tax'] = 'Налоги';
$lang['proposal_items_amount'] = 'Сумма';

# Authentication
$lang['check_email_for_reseting_password'] = 'Проверьте адрес электронной почты, чтобы узнать, как сбросить пароль';
$lang['inactive_account'] = 'Неактивная учетная запись';
$lang['error_setting_new_password_key'] = 'Ошибка при установке нового пароля';
$lang['password_reset_message'] = 'Ваш пароль был сброшен. Пожалуйста, зарегистрируйтесь прямо сейчас!';
$lang['password_reset_message_fail'] = 'Ошибка при сбросе пароля. Попробуй еще раз.';
$lang['password_reset_key_expired'] = 'Истек срок действия пароля или недействительный пользователь';
$lang['admin_auth_reset_pass_repeat'] = 'Повторите Пароль';
$lang['auth_reset_pass_email_not_found'] = 'Email не найден';
$lang['auth_reset_password_submit'] = 'Сброс пароля';

# Settings
$lang['settings_amount_to_words'] = 'Сумма словами';
$lang['settings_amount_to_words_desc'] = 'Вывести итоговую сумму словами в счете / смете';
$lang['settings_amount_to_words_enabled'] = 'Включить';
$lang['settings_total_to_words_lowercase'] = 'Количество слов в нижнем регистре';
$lang['settings_show_tax_per_item'] = 'Показывать налог за элемент';

# Reports
$lang['report_sales_months_three_months'] = 'Последние 3 месяца';
$lang['report_invoice_number'] = 'Счет #';
$lang['report_invoice_customer'] = 'Клиент';
$lang['report_invoice_date'] = 'Дата';
$lang['report_invoice_duedate'] = 'Оплатить до';
$lang['report_invoice_amount'] = 'Сумма';
$lang['report_invoice_amount_with_tax'] = 'Сумма с налогом';
$lang['report_invoice_amount_open'] = 'Сумма открыта';
$lang['report_invoice_status'] = 'Статус';
$lang['report_invoice_total_amount_with_tax'] = 'Общая сумма с налогом';
$lang['report_invoice_total_amount_without_tax'] = 'Общая сумма без налога';
$lang['report_invoice_total_taxes'] = 'Налоги';

#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status'] = 'Статистика по проектам';
$lang['home_invoice_overview'] = 'Обзор счета';
$lang['home_estimate_overview'] = 'Обзор сметы';
$lang['home_proposal_overview'] = 'Обзор предложения';
$lang['home_lead_overview'] = 'Обзор потенциальных клиентов';

$lang['home_my_projects'] = 'Мои проекты';
$lang['home_announcements'] = 'Объявления';

# Settings
$lang['settings_leads_kanban_limit'] = 'Ограничение лидов строки KAN BAN для каждого статуса';
$lang['settings_group_misc'] = 'Разное';
$lang['show_projects_on_calendar'] = 'Проекты';
$lang['settings_media_max_file_size_upload'] = 'Максимальный размер загружаемого файла в Media (МБ)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Разрешить клиентам/сотрудникам добавлять/изменять комментарии к задачам только в течение первого часа (администраторы не применяются)';

# Email templates
$lang['email_template_only_domain_email'] = 'Только адрес электронной почты домена';

# Announcements
$lang['dismiss_announcement'] = 'Отклонить объявление';
$lang['dismiss_announcement'] = 'Отклонить объявление';
$lang['announcement_from'] = 'От:';
$lang['announcement_date'] = 'Дата Отправки: %s';
$lang['announcement_not_found'] = 'Объявление не найдено';
$lang['announcements_recents'] = 'Последние объявления';

# General
$lang['zip_invoices'] = 'Почтовые счета';
$lang['zip_estimates'] = 'Почтовые сметы';
$lang['zip_payments'] = 'Почтовые платежи';
$lang['setup_help'] = 'Помощь';
$lang['clients_list_company'] = 'Компания';
$lang['dt_button_export'] = 'Экспорт';

$lang['dt_entries'] = 'Записи';
$lang['invoice_total_paid'] = 'Итого';
$lang['invoice_amount_due'] = 'Сумма долга';
$lang['report_invoice_discount'] = 'Скидки';

# Calendar
$lang['calendar_project'] = 'Проект';

# Leads
$lang['leads_import_assignee'] = 'Ответственный (уполномоченный)';
$lang['customer_from_lead'] = 'Заказчик из %s';
$lang['lead_kan_ban_attachments'] = 'Вложения: %s';
$lang['leads_sort_by_lastcontact'] = 'Последний контакт';

# Tasks
$lang['task_comment_added'] = 'Комментарий успешно добавлен';
$lang['task_duedate'] = 'Срок сдачи';
$lang['task_view_comments'] = 'Комментарии';
$lang['task_comment_updated'] = 'Комментарий обновлен';
$lang['task_visible_to_client'] = 'Виден клиенту';
$lang['task_hourly_rate'] = 'Часовая ставка';
$lang['hours'] = 'Время работы';
$lang['seconds'] = 'Секунды';
$lang['minutes'] = 'Минуты';
$lang['task_start_timer'] = 'Таймер запуска';
$lang['task_stop_timer'] = 'Таймер остановки';
$lang['task_billable_help'] = 'Если вы отметите счет-фактуру, задача будет показана при создании Счета в качестве элементов';
$lang['task_billable'] = 'Оплачиваемый';
$lang['task_billable_yes'] = 'Оплачиваемый';
$lang['task_billable_no'] = 'Не подлежит оплате';
$lang['task_billed'] = 'Выставляется счет';
$lang['task_billed_yes'] = 'Выставляется счет';
$lang['task_billed_no'] = 'Не выставлен счет';
$lang['task_user_logged_time'] = 'Ваш записываемое время:';
$lang['task_total_logged_time'] = 'Общее записываемое время:';
$lang['task_is_billed'] = 'Эта задача выставляется в счет с номером %s';
$lang['task_statistics'] = 'Статистика';
$lang['task_milestone'] = 'Этап';

# Tickets
$lang['ticket_message_updated_successfuly'] = 'Сообщение успешно обновлено';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Задачи проектов не включены в этот список.';
$lang['show_quantity_as'] = 'Показать количество, как:';
$lang['quantity_as_qty'] = 'Кол-во';
$lang['quantity_as_hours'] = 'Время работы';
$lang['invoice_table_hours_heading'] = 'Время работы';
$lang['bill_tasks'] = 'Задания для счетов';
$lang['invoice_estimate_sent_to_email'] = 'Отправить по E-mail';

# Estimates
$lang['estimate_table_hours_heading'] = 'Время работы';

# General
$lang['is_customer_indicator'] = 'Клиент';
$lang['print']            = 'Распечатать';
$lang['customer_permission_projects']            = 'Проекты';
$lang['no_timers_found']            = 'Запущенные таймеры не найдены';
$lang['timers_started_confirm_logout']            = 'Таймеры заданий найдены! <br /><br /> Вы уверены, что хотите выйти из системы без остановки таймеров?';
$lang['confirm_logout']            = 'Выйти';
$lang['timer_top_started']            = 'Начато в %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found'] = 'Вы не можете изменить тип биллинга. Запланированные задачи, уже найденные для этого проекта.';
$lang['project_customer_permission_warning'] = 'Система указала, что у основного контакта нет разрешения на проекты. Основной контакт не сможет увидеть проект. Попробуйте добавить разрешение в профиле контакта.';
$lang['project_invoice_timesheet_start_time'] = 'Время начала: %s';
$lang['project_invoice_timesheet_end_time'] = 'Время окончания: %s';
$lang['project_invoice_timesheet_total_logged_time'] = 'Записанное время: %s';
$lang['project_view_as_client'] = 'Просмотреть проект в качестве клиента';
$lang['project_mark_all_tasks_as_completed'] = 'Отметить все задачи как завершенные и остановить все таймеры (Нет уведомлений, отправленных участникам проекта)';
$lang['project_not_started_status_tasks_timers_found'] = 'Таймеры заданий, найденные для этого проекта, но проект имеет статус Не запущен. Рекомендуется изменить статус проекта на Выполняется';
$lang['project_status'] = 'Статус';
$lang['project_status_1'] = 'Не начался';
$lang['project_status_2'] = 'Выполняются';
$lang['project_status_3'] = 'На удержании';
$lang['project_status_4'] = 'Завершённый';

$lang['project_file_uploaded_by_customer'] = 'Клиент';
$lang['project_file_dateadded'] = 'Дата добавления';
$lang['project_file_filename'] = 'Имя файла';
$lang['project_file__filetype'] = 'Тип файла';
$lang['project_file_visible_to_customer'] = 'Виден клиенту';
$lang['project_file_uploaded_by'] = 'Загружено пользователем';
$lang['edit_project'] = 'Изменить проект';
$lang['copy_project'] = 'Скопировать проект';
$lang['delete_project'] = 'Удалить проект';
$lang['project_task_assigned_to_user'] = 'Задача назначенна на вас';
$lang['seconds'] = 'Секунды';
$lang['hours'] = 'Часы';
$lang['minutes'] = 'Минуты';
$lang['project']                 = 'Проект';
$lang['project_lowercase']       = 'проект';
$lang['projects']                = 'Проекты';
$lang['projects_lowercase']      = 'Проекты';
$lang['project_settings']      = 'Настройки проекта';
$lang['project_invoiced_successfuly']             = 'Успешно выставлен счет по проекту';
$lang['new_project']             = 'Новый Проект';
$lang['project_files']            = 'Файлы';
$lang['project_activity']            = 'Активность';
$lang['project_name']            = 'название проекта';
$lang['project_description']            = 'Описание Проекта';
$lang['project_customer']            = 'Клиент';
$lang['project_start_date']            = 'Дата начала';
$lang['project_datecreated']            = 'Дата создания';
$lang['project_deadline']            = 'Крайний срок';
$lang['project_billing_type']            = 'Тип расчета';
$lang['project_billing_type_fixed_cost']            = 'Фиксированная цена';
$lang['project_billing_type_project_hours']            = 'Часы работы проекта';
$lang['project_billing_type_project_task_hours']            = 'Часы работы';
$lang['project_billing_type_project_task_hours_hourly_rate']            = 'Почасовая ставка задачи';
$lang['project_rate_per_hour']            = 'Цена за час';
$lang['project_total_cost']            = 'Общая цена';
$lang['project_members']            = 'Участники проекта';
$lang['project_member_removed']     = 'Участник проекта удален успешно';
$lang['project_overview']           = 'Обзор проекта';
$lang['project_gant']            = 'Просмотр Ганта';
$lang['project_milestones']            = 'Основные этапы';
$lang['project_milestone_order']            = 'Порядок';
$lang['project_milestone_duedate_passed']            = 'Дата выполнения';
$lang['record_timesheet']            = 'Расписание';
$lang['new_milestone']            = 'Новый этап';
$lang['edit_milestone']            = 'Изменить этап';
$lang['milestone_name']            = 'Имя';
$lang['milestone_due_date']            = 'Срок сдачи';
$lang['project_milestone']            = 'Этап';
$lang['project_notes']            = 'Заметки';
$lang['project_timesheets']            = 'Расписания';
$lang['project_timesheet']            = 'Расписание';
$lang['milestone_total_logged_time']            = 'Время регистрации';
$lang['project_overview_total_logged_hours']            = 'Всего зарегистрированных часов';
$lang['milestones_uncategorized']            = 'Без рубрики';
$lang['milestone_no_tasks_found']            = 'Заданий не найдено';
$lang['project_copied_successfuly']            = 'Данные проекта скопированы';
$lang['failed_to_copy_project']            = 'Не удалось скопировать проект';
$lang['copy_project_task_include_check_list_items']            = 'Копировать элементы контрольного списка';
$lang['copy_project_task_include_assignees']            = 'Копировать с этим же исполнителями';
$lang['copy_project_task_include_followers']            = 'Копировать с этими же подписчиками';

$lang['project_days_left']            = 'Осталось дней';
$lang['project_open_tasks']            = 'Открытые задачи';
$lang['timesheet_stop_timer']            = 'Стоп Таймер';
$lang['failed_to_add_project_timesheet_end_time_smaller']            = 'Не удалось добавить расписание. Время окончания меньше времени начала';
$lang['project_timesheet_user']            = 'Участник';
$lang['project_timesheet_start_time']            = 'Время начала';
$lang['project_timesheet_end_time']            = 'Время окончания';
$lang['project_timesheet_time_spend']            = 'Время потрачено';
$lang['project_timesheet_task']            = 'Задача';
$lang['project_invoices']                = 'Счета';
$lang['total_logged_hours_by_staff']            = 'Общее время регистрации';
$lang['invoice_project']            = 'Счет проекта';
$lang['invoice_project_info']            = 'Информация о счете проекта';
$lang['invoice_project_data_single_line']            = 'Одна линия';
$lang['invoice_project_data_task_per_item']            = 'Задача для элемента';
$lang['invoice_project_data_timesheets_individualy']            = 'Все расписания индивидуально';
$lang['invoice_project_item_name_data']            = 'Имя элемента';
$lang['invoice_project_description_data']            = 'Описание';
$lang['invoice_project_projectname_taskname']            = 'Название проекта + Название задачи';
$lang['invoice_project_all_tasks_total_logged_time']            = 'Все задачи + общее время регистрации для каждой задачи';
$lang['invoice_project_project_name_data']            = 'Название проекта';
$lang['invoice_project_timesheet_indivudualy_data']            = 'Время начала расписания + время окончания + Общее время регистрации';
$lang['invoice_project_total_logged_time_data']            = 'Общее зафиксированное время';

$lang['project_allow_client_to'] = 'Разрешить клиенту %s';
$lang['project_setting_view_task_attachments'] = 'Просмотр вложенных задач';
$lang['project_setting_view_task_checklist_items'] = 'Просмотреть контрольные списки задач';
$lang['project_setting_upload_files'] = 'загрузить файлы';
$lang['project_setting_view_task_comments'] = 'Просмотр комментариев задачи';
$lang['project_setting_upload_on_tasks'] = 'Загружать вложения в задачи';
$lang['project_setting_view_task_total_logged_time'] = 'Просмотреть общее время выполнения задачи';
$lang['project_setting_open_discussions'] = 'Открытые дискуссии';
$lang['project_setting_comment_on_tasks'] = 'Комментировать задачи проекта';
$lang['project_setting_view_tasks'] = 'Просмотр задач';
$lang['project_setting_view_milestones'] = 'Просмотреть этапы';
$lang['project_setting_view_gantt'] = 'Просмотр Ганта';
$lang['project_setting_view_timesheets'] = 'Просмотр расписаний';
$lang['project_setting_view_activity_log'] = 'Просмотр журнала активности';
$lang['project_setting_view_team_members'] = 'Просмотр членов команды';

$lang['project_discussion_visible_to_customer_yes']                 = 'Видимый';
$lang['project_discussion_visible_to_customer_no']                 = 'Невидимый';

$lang['project_discussion_posted_on']                 = 'Опубликовано %s';
$lang['project_discussion_posted_by']                 = 'Сообщение от %s';
$lang['project_discussion_failed_to_delete']                 = 'Не удалось удалить дискуссию';
$lang['project_discussion_deleted']                 = 'Обсуждение удалено';
$lang['project_discussion_no_activity']                 = 'Нет активности';
$lang['project_discussion']                 = 'Обсуждение';
$lang['project_discussions']                 = 'Обсуждения';
$lang['edit_discussion'] = 'Создать дискуссию';
$lang['new_project_discussion'] = 'Создать дискуссию';
$lang['project_discussion_subject'] = 'Тема';
$lang['project_discussion_description'] = 'Описание';
$lang['project_discussion_show_to_customer'] = 'Виден клиенту';
$lang['project_discussion_total_comments'] = 'Всего комментариев';
$lang['project_discussion_last_activity'] = 'Последняя активность';
$lang['discussion_add_comment'] = 'Добавить комментарий';
$lang['discussion_newest'] = 'Самые новые';
$lang['discussion_oldest'] = 'Старые';
$lang['discussion_attachments'] = 'Вложения';
$lang['discussion_send'] = 'послать';
$lang['discussion_reply'] = 'Ответ';
$lang['discussion_edit'] = 'Редактировать';
$lang['discussion_edited'] = 'Изменено';
$lang['discussion_you'] = 'Вы';
$lang['discussion_save'] = 'Сохранить';
$lang['discussion_delete'] = 'Удалить';
$lang['discussion_view_all_replies'] = 'Показать все ответы';
$lang['discussion_hide_replies'] = 'Скрыть ответы';
$lang['discussion_no_comments'] = 'Без комментариев';
$lang['discussion_no_attachments'] = 'Нет прикрепленных файлов';
$lang['discussion_attachments_drop'] = 'Перетащите файл для загрузки';
$lang['project_note'] = 'Запись';
$lang['project_note_private'] = 'Приватные записи';
$lang['project_save_note'] = 'Сохранить запись';

# Project Activity
$lang['project_activity_created'] = 'Создан проект';
$lang['project_activity_updated'] = 'Updated project';
$lang['project_activity_removed_team_member'] = 'Removed team member';
$lang['project_activity_added_team_member'] = 'Added new team member';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Marked all tasks as complete';
$lang['project_activity_recorded_timesheet'] = 'Recorded timesheet';
$lang['project_activity_task_name'] = 'Task:';
$lang['project_activity_deleted_discussion'] = 'Deleted Discussion';
$lang['project_activity_created_discussion'] = 'Created discussion';
$lang['project_activity_updated_discussion'] = 'Updated discussion';
$lang['project_activity_commented_on_discussion'] = 'Commented on discussion';
$lang['project_activity_deleted_discussion_comment'] = 'Deleted discussion comment';
$lang['project_activity_deleted_milestone'] = 'Deleted milestone';
$lang['project_activity_updated_milestone'] = 'Updated milestone';
$lang['project_activity_created_milestone'] = 'Created new milestone';
$lang['project_activity_invoiced_project'] = 'Invoiced project';
$lang['project_activity_task_marked_complete'] = 'Task marked as complete';
$lang['project_activity_task_unmarked_complete'] = 'Task unmarked as complete';
$lang['project_activity_task_deleted'] = 'Task deleted';
$lang['project_activity_new_task_comment'] = '%s Commented on task';
$lang['project_activity_new_task_attachment'] = 'Uploaded attachment on task';
$lang['project_activity_new_task_assignee'] = 'Added new task assignee';
$lang['project_activity_task_assignee_removed'] = 'Removed task assignee';
$lang['project_activity_task_timesheet_deleted'] = 'Removed timesheet';
$lang['project_activity_uploaded_file'] = 'Uploaded project file';
$lang['project_activity_status_updated'] = 'Updated project status';
$lang['project_activity_visible_to_customer'] = 'Visible to customer';
$lang['project_activity_project_file_removed'] = 'Removed project file';

# Notifications - DEPRECED - THESE notifications are depreced and will be removed in further released dont translate them
$lang['not_customer_uploaded_project_file'] = 'New file uploaded';
$lang['not_customer_created_new_project_discussion'] = 'New project discussion created';
$lang['not_customer_commented_on_project_discussion'] = 'New comment on project discussion';

# Customers area
$lang['clients_my_estimates'] = 'Estimates';
$lang['client_no_reply'] = 'No Reply';
$lang['clients_nav_projects'] = 'Projects';
$lang['clients_my_projects'] = 'Projects';
$lang['client_profile_image'] = 'Profile image';

/////
$lang['sales_report_cancelled_invoices_not_included'] = 'Cancelled invoices are excluded from the report';
$lang['invoices_merge_cancel_merged_invoices'] = 'Mark merged invoices as cancelled instead of deleting';
$lang['invoice_marked_as_cancelled_successfuly'] = 'Invoice marked as cancelled successfully';
$lang['invoice_unmarked_as_cancelled'] = 'Invoice unmarked as cancelled successfully';

$lang['tasks_reminder_notification_before'] = 'Task deadline reminder before (Days)';
$lang['not_task_deadline_reminder'] = 'Task deadline reminder';
$lang['dt_length_menu_all'] = 'All';
$lang['task_not_finished'] = 'Not Completed';
$lang['task_billed_cant_start_timer'] = 'Task billed. Timer cant be start';
$lang['invoice_task_billable_timers_found'] = 'Started timers found';
$lang['project_timesheet_not_updated'] = 'Timesheet not affected';
$lang['project_invoice_task_no_timers_found'] = 'No timers found for this task';
$lang['invoice_project_tasks_not_started'] = 'Not yet started | Start Date: %s';
$lang['invoice_project_see_billed_tasks'] = 'See tasks that will be billed on this invoice';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'All billed tasks will be marked as finished';
$lang['invoice_project_nothing_to_bill'] = 'No tasks to bill. Feel free to add whatever you want in the invoice items.';
$lang['invoice_project_start_date_tasks_not_passed'] = 'Tasks with future start date cannot be billed';
$lang['invoice_project_stop_all_timers'] = 'Stop all timers';
$lang['invoice_project_stop_billabe_timers_only'] = 'Stop only billable timers';
$lang['project_tasks_total_timers_stopped'] = 'Stopped total %s timers';
$lang['project_invoice_timers_started'] = 'Task timers found running on billable tasks, invoice cannot be created. Please stop task timers to create invoice.';
$lang['task_start_timer_only_assignee'] = 'You need to be assigned on this task to start timer!';
$lang['task_comments'] = 'Comments';
$lang['invoice_total_tax'] = 'Total Tax';
$lang['estimates_total_tax'] = 'Total Tax';
$lang['report_invoice_total_tax'] = 'Total Tax';
$lang['home_tickets'] = 'Tickets';
$lang['home_project_activity'] = 'Latest Project Activity';
$lang['home_project_activity_not_found'] = 'No projects activity found';
$lang['view_tracking'] = 'Views Tracking';
$lang['view_date'] = 'Date';
$lang['view_ip'] = 'IP Address';
$lang['article_total_views'] = 'Total Views';
$lang['leads_source'] = 'Source';
$lang['invoices_available_for_merging'] = 'Invoices available for merging';
$lang['invoices_merge_discount'] = 'You will have to apply discount of total %s manually to this invoice';
$lang['invoice_merge_number_warning'] = 'Merging invoices will create gaps in invoice numbers. Please do not merge invoices if you want no gaps in your invoice history. You also have the option of manually adjusting invoice numbers if you want to fill the gaps.';
$lang['invoice_mark_as'] = 'Mark as %s';
$lang['invoice_unmark_as'] = 'Unmark as %s';
$lang['invoice_status_cancelled'] = 'Cancelled';
$lang['tasks_reminder_notification_before_help'] = 'Notify task assignee\'s about deadline before X days. The notification/email is sent only to the assignee\'s. If the difference between task start date and task due date is smaller then the reminders day no notification will be sent.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Select all tasks';
$lang['lead_company'] = 'Company';

# Version 1.1.1
$lang['admin_auth_forgot_password_button'] = 'Confirm';
$lang['task_assigned'] = 'Assigned to';
$lang['switch_to_pipeline'] = 'Switch to pipeline';
$lang['switch_to_list_view'] = 'Switch to list';
$lang['estimates_pipeline'] = 'Estimates Pipeline';
$lang['estimates_pipeline_sort'] = 'Sort By';
$lang['estimates_sort_expiry_date'] = 'Expiry Date';
$lang['estimates_sort_pipeline'] = 'Pipeline Order';
$lang['estimates_sort_datecreated'] = 'Date Created';
$lang['estimates_sort_estimate_date'] = 'Estimate Date';
$lang['estimate_set_reminder_title'] = 'Set Estimate Reminder';
$lang['invoice_set_reminder_title'] = 'Set Invoice Reminder';
$lang['estimate_reminders'] = 'Reminders';
$lang['invoice_reminders'] = 'Reminders';
$lang['estimate_notes'] = 'Notes';
$lang['estimate_add_note'] = 'Add Note';
$lang['dropdown_non_selected_tex'] = 'Nothing selected';
$lang['auto_close_ticket_after'] = 'Auto close ticket after (Hours)';
$lang['event_description'] = 'Description';
$lang['delete_event'] = 'Delete';
$lang['not_new_ticket_created'] = 'New ticket opened in your department - %s';
$lang['receive_notification_on_new_ticket'] = 'Receive notification on new ticket opened';
$lang['receive_notification_on_new_ticket_help'] = 'All staff members which belong to the ticket department will receive notification that new ticket is opened';
$lang['event_updated'] = 'Event updated successfully';
$lang['customer_contacts'] = 'Contacts';
$lang['new_contact'] = 'New Contact';
$lang['contact'] = 'Contact';
$lang['contact_lowercase'] = 'contact';
$lang['contact_primary'] = 'Primary Contact';
$lang['contact_position'] = 'Position';
$lang['contact_active'] = 'Active';
$lang['client_company_info'] = 'Company details';
$lang['proposal_save'] = 'Save Proposal';
$lang['calendar'] = 'Calendar';
$lang['settings_pdf'] = 'PDF';
$lang['settings_pdf_font'] = 'PDF Font';
$lang['settings_pdf_table_heading_color'] = 'Items table heading color';
$lang['settings_pdf_table_heading_text_color'] = 'Items table heading text color';
$lang['settings_pdf_font_size'] = 'Default font size';
$lang['proposal_status_draft'] = 'Draft';
$lang['custom_field_contacts'] = 'Contacts';
$lang['company_primary_email'] = 'Primary Email';
$lang['client_register_contact_info'] = 'Primary Contact Information';
$lang['client_register_company_info'] = 'Company Information';
$lang['contact_permissions_info'] = 'Make sure to set appropriate permissions for this contact';
$lang['defaut_leads_kanban_sort'] = 'Default leads kan ban sort';
$lang['defaut_leads_kanban_sort_type'] = 'Sort';
$lang['order_ascending'] = 'Ascending';
$lang['order_descending'] = 'Descending';
$lang['calendar_expand'] = 'expand';
$lang['proposal_reminders'] = 'Reminders';
$lang['proposal_set_reminder_title'] = 'Set proposal reminder';
$lang['settings_allowed_upload_file_types'] = 'Allowed file types';
$lang['no_primary_contact'] = 'This customer does have primary contact. You need to setup primary contact login as customer. Its recommended all customers to have primary contacts.';
$lang['leads_merge_customer'] = 'Customer fields merging';
$lang['leads_merge_contact'] = 'Contact fields merging';
$lang['leads_merge_as_contact_field'] = 'Merge as contact field';
$lang['lead_convert_to_client_phone'] = 'Phone';
$lang['invoice_status_report_all'] = 'All';
$lang['import_contact_field'] = 'Contact field';


$lang['file_uploaded_success'] = 'There is no error, the file uploaded with success';
$lang['file_exceds_max_filesize'] = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
$lang['file_exceds_maxfile_size_in_form'] = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
$lang['file_uploaded_partially'] = 'The uploaded file was only partially uploaded';
$lang['file_not_uploaded'] = 'No file was uploaded';
$lang['file_missing_temporary_folder'] = 'Missing a temporary folder';
$lang['file_failed_to_write_to_disk'] = 'Failed to write file to disk.';
$lang['file_php_extension_blocked'] = 'A PHP extension stopped the file upload.';
$lang['calendar_expand'] = 'expand';
$lang['view_pdf'] = 'View PDF';
$lang['expense_repeat_every'] = 'Repeat every';

# Version 1.1.2
$lang['leads_switch_to_kanban'] = 'Switch to kan ban';
$lang['survey_no_questions'] = 'This survey does not have questions added yet.';
$lang['survey_submit'] = 'Submit';
$lang['contract_content'] = 'Contract';
$lang['contract_save'] = 'Save Contract';
$lang['contract_send_to_email'] = 'Send to email';
$lang['contract_send_to_client_modal_heading'] = 'Send contract to email';
$lang['contract_send_to'] = 'Send to';
$lang['contract_send_to_client_attach_pdf'] = 'Attach PDF';
$lang['contract_send_to_client_preview_template'] = 'Preview Email Template';
$lang['include_attachments_to_email'] = 'Include attachments to email';
$lang['contract_sent_to_client_success'] = 'The contract is successfully sent to the customer';
$lang['contract_sent_to_client_fail'] = 'Failed to send contract';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'Invalid username or password';
$lang['client_old_password_incorect']     = 'Your old password is incorrect';
$lang['client_password_changed']          = 'Your password has been changed';

# Version 1.1.4
$lang['total_leads_deleted'] = 'Total leads deleted: %s';
$lang['total_clients_deleted'] = 'Total customers deleted: %s';
$lang['confirm_action_prompt'] = 'Are you sure you want to perform this action?';
$lang['mass_delete'] = 'Mass Delete';
$lang['email_protocol'] = 'Email Protocol';
$lang['add_edit_members'] = 'Add/Edit Members';
$lang['project_overview_logged_hours'] = 'Logged Hours:';
$lang['project_overview_billable_hours'] = 'Billable Hours:';
$lang['project_overview_billed_hours'] = 'Billed Hours:';
$lang['project_overview_unbilled_hours'] = 'Unbilled Hours:';
$lang['calendar_first_day'] = 'First Day';
$lang['permission_view'] = 'View';
$lang['permission_edit'] = 'Edit';
$lang['permission_create'] = 'Create';
$lang['permission_delete'] = 'Delete';
$lang['permission'] = 'Permission';
$lang['permissions'] = 'Permissions';
$lang['proposals_pipeline'] = 'Proposals Pipeline';
$lang['proposals_pipeline_sort'] = 'Sort By';
$lang['proposals_sort_open_till'] = 'Open Till';
$lang['proposals_sort_pipeline'] = 'Pipeline Order';
$lang['proposals_sort_datecreated'] = 'Date Created';
$lang['proposals_sort_proposal_date'] = 'Proposal Date';
$lang['is_not_staff_member'] = 'Not staff member';
$lang['lead_created'] = 'Created';
$lang['access_tickets_to_none_staff_members'] = 'Allow access to tickets for non staff members';
$lang['project_expenses'] = 'Expenses';
$lang['expense_currency'] = 'Currency';
$lang['currency_valid_code_help'] = 'Make sure to enter valid currency code.';
$lang['week'] = 'Week';
$lang['weeks'] = 'Weeks';
$lang['month'] = 'Month';
$lang['months'] = 'Months';
$lang['year'] = 'Year';
$lang['years'] = 'Years';
$lang['expense_report_category'] = 'Category';
$lang['expense_paid_via'] = 'Paid Via %s';
$lang['item_as_expense'] = '[Expense]';
$lang['show_help_on_setup_menu'] = 'Show help menu item on setup menu';
$lang['customers_summary_total'] = 'Total Customers';
$lang['filter_by'] = 'Filter by';
$lang['re_captcha'] = 'reCAPTCHA';
$lang['recaptcha_site_key'] = 'Site key';
$lang['recaptcha_secret_key'] = 'Secret key';
$lang['recaptcha_error'] = 'The reCAPTCHA field is telling that you are a robot.';
$lang['smtp_username'] = 'SMTP Username';
$lang['smtp_username_help'] = 'Fill only if your email client use username for SMTP login.';
$lang['pinned_project']= 'Pinned Project';
$lang['pin_project']= 'Pin Project';
$lang['unpin_project']= 'Unpin Project';
$lang['smtp_encryption']= 'Email Encryption';
$lang['smtp_encryption_none']= 'None';
$lang['show_proposals_on_calendar']= 'Proposals';
$lang['invoice_project_see_billed_expenses']= 'See expenses that will be billed on this invoice';
$lang['project_overview_expenses'] = 'Total Expenses';
$lang['project_overview_expenses_billable'] = 'Billable Expenses';
$lang['project_overview_expenses_billed'] = 'Billed Expenses';
$lang['project_overview_expenses_unbilled'] = 'Unbilled Expenses';
$lang['announcement_date_list'] = 'Date';
$lang['project_setting_view_finance_overview'] = 'view finance overview';
$lang['show_all_tasks_for_project_member'] = 'Allow all staff to see all tasks related to projects (includes non-staff)';
$lang['not_staff_added_as_project_member'] = 'Added you as project member';
$lang['report_expenses_base_currency_select_explanation'] = 'You need to select currency because the system found different currencies used for expenses.';

# Version 1.1.6
$lang['project_activity_recorded_expense'] = 'Recorded Expense';
$lang['save_customer_and_add_contact'] = 'Save and create contact';
$lang['tickets_chart_weekly_opening_stats'] = 'Weekly Stats';
$lang['related_knowledgebase_articles'] = 'Related Articles';
$lang['detailed_overview'] = 'Tasks Overview';
$lang['tasks_total_checklists_finished'] = 'Total checklist items marked as finished';
$lang['tasks_total_added_attachments'] = 'Total attachments added';
$lang['tasks_total_comments'] = 'Total comments';
$lang['task_finished_on_time'] = 'Finished on time?';
$lang['task_finished_on_time_indicator'] = 'Yes';
$lang['task_not_finished_on_time_indicator'] = 'No';
$lang['task_filter_fetch_month_by'] = 'Fetch month from';
$lang['filter'] = 'Filter';
$lang['task_filter_detailed_all_months'] = 'All Months';
$lang['kb_article_slug'] = 'Слаг';

# Version 1.1.7
$lang['email_template_ticket_warning'] = 'If ticket is imported with email piping and the contact does not exists in the CRM the fields won\'t be replaced.';
$lang['auto_stop_tasks_timers_on_new_timer'] = 'Stop all other started timers when starting new timer';
$lang['notification_when_customer_pay_invoice'] = 'Receive notification when customer pay invoice (built-in)';
$lang['not_invoice_payment_recored'] = 'New invoice payment - %s';
$lang['email_template_contact_warning'] = 'If contact is not logged while making action the contact merge fields won\'t be replaced.';
$lang['theme_style'] = 'Theme Style';
$lang['change_role_permission_warning'] = 'Changing role permissions won\'t affected current staff members permissions that are using this role.';
$lang['task_copied_successfuly'] = 'Task copied successfully';
$lang['failed_to_copy_task'] = 'Failed to copy task';
$lang['not_project_file_uploaded'] = 'New project file added';
$lang['settings_calendar_color'] = '%s Color';
$lang['settings_calendar_colors_heading'] = 'Styling';
$lang['reminder'] = 'Reminder';
$lang['back_to_tasks_list'] = 'Back to tasks list';
$lang['copy_task_confirm'] = 'Confirm';
$lang['changing_items_affect_warning'] = 'Changing item info won\'t affect on the created invoices/estimates/proposals.';
$lang['tax_is_used_in_expenses_warning'] = 'You cant update this tax because expenses transactions using this tax are found.';
$lang['note'] = 'Note';
$lang['leads_staff_report_converted'] = 'Total converted leads';
$lang['leads_staff_report_created'] = 'Total created leads';
$lang['leads_staff_report_lost'] = 'Total lost leads';
$lang['client_go_to_dashboard'] = 'Back to portal';
$lang['show_estimate_reminders_on_calendar'] = 'Estimate Reminders';
$lang['show_invoice_reminders_on_calendar'] = 'Invoice Reminders';
$lang['calendar_estimate_reminder'] = 'Estimate Reminder';
$lang['calendar_invoice_reminder'] = 'Invoice Reminder';
$lang['show_proposal_reminders_on_calendar'] = 'Proposal Reminders';
$lang['calendar_proposal_reminder'] = 'Proposal Reminder';
$lang['proposal_due_after']= 'Proposal Due After (days)';
$lang['project_progress']= 'Progress';
$lang['calculate_progress_through_tasks']= 'Calculate progress through tasks';
$lang['allow_customer_to_change_ticket_status']= 'Allow customer to change ticket status from customers area';
$lang['switch_to_general_report']= 'Switch to staff report';
$lang['switch_to_staff_report']= 'Switch to general report';
$lang['generate']= 'Generate';
$lang['from_date']= 'From date';
$lang['to_date']= 'To date';
$lang['not_results_found']= 'No results found';
$lang['lead_lock_after_convert_to_customer']= 'Do not allow editing the lead after converting to customer (admins not applied)';
$lang['default_pipeline_sort'] = 'Default pipeline sort';
$lang['not_goal_message_failed'] = 'We failed to achieve goal!<br /> Goal Type: %s
<br />Goal Achievement: %s
<br />Total Achivement: %s
<br />Start Date: %s
<br />End Date: %s';
$lang['toggle_full_view'] = 'Toggle full view';
$lang['not_estimate_invoice_deleted'] = 'deleted the created invoice';
$lang['not_task_new_comment'] = 'commented on task %s';

# Version 1.1.8
$lang['invoice_number_exists'] = 'This invoice number exists for the ongoing year.';
$lang['estimate_number_exists'] = 'This estimate number exists for the ongoing year.';
$lang['email_exists'] = 'Email already exists';
$lang['not_uploaded_project_file'] = 'New file uploaded';
$lang['not_created_new_project_discussion'] = 'New project discussion created';
$lang['not_commented_on_project_discussion'] = 'New comment on project discussion';
$lang['all_staff_members'] = 'All staff members';
$lang['help_project_permissions'] = 'VIEW allows staff member to see ALL projects. If you only want them to see projects they are assigned (added as members), do not give VIEW permissions.';
$lang['help_tasks_permissions'] = 'VIEW allows staff member to see ALL tasks. If you only want them to see tasks they are assigned to or following, do not give VIEW permissions.';
$lang['expense_recuring_days'] = 'Day(s)';
$lang['expense_recuring_weeks'] = 'Week(s)';
$lang['expense_recuring_months'] = 'Month(s)';
$lang['expense_recuring_years'] = 'Years(s)';
$lang['reset_to_default_color'] = 'Reset to default color';
$lang['pdf_logo_width'] = 'Logo Width (PX)';
$lang['drop_files_here_to_upload'] = 'Drop files here to upload';
$lang['browser_not_support_drag_and_drop'] = 'Your browser does not support drag\'n\'drop file uploads';
$lang['remove_file'] = 'Remove file';
$lang['you_can_not_upload_any_more_files'] = 'You can not upload any more files';
$lang['custom_field_only_admin'] = 'Restrict visibility for administrators only';
$lang['leads_default_source'] = 'Default source';
$lang['clear_activity_log'] = 'Clear log';
$lang['default_contact_permissions'] = 'Default contact permissions';
$lang['invoice_activity_marked_as_cancelled'] = 'marked invoice as cancelled';
$lang['invoice_activity_unmarked_as_cancelled'] = 'unmarked invoice as cancelled';
$lang['wait_text'] = 'Please wait...';
$lang['projects_summary'] = 'Projects summary';
$lang['dept_imap_host'] = 'IMAP Host';
$lang['dept_encryption'] = 'Encryption';
$lang['dept_email_password'] = 'Password';
$lang['dept_email_no_encryption'] = 'No Encryption';
$lang['failed_to_decrypt_password'] = 'Failed to decrypt password';
$lang['delete_mail_after_import'] = 'Delete mail after import?';
$lang['expiry_reminder_enabled'] = 'Send expiration reminder';
$lang['send_expiry_reminder_before'] = 'Send expiration reminder before (DAYS)';
$lang['not_expiry_reminder_sent'] = 'Expiry reminder sent';
$lang['send_expiry_reminder'] = 'Sent expiration reminder';
$lang['sent_expiry_reminder_success'] = 'Expiration reminder successfully sent';
$lang['sent_expiry_reminder_fail'] = 'Failed to send expiration reminder';
$lang['leads_default_status'] = 'Default status';
$lang['item_description_placeholder'] = 'Description';
$lang['item_long_description_placeholder'] = 'Long description';
$lang['item_quantity_placeholder'] = 'Quantity';
$lang['item_rate_placeholder'] = 'Rate';
$lang['tickets_summary'] = 'Tickets Summary';
$lang['tasks_list_priority'] = 'Priority';
$lang['ticket_status_db_2'] = 'In Progress';
$lang['ticket_status_db_1'] = 'Open';
$lang['ticket_status_db_3'] = 'Answered';
$lang['ticket_status_db_4'] = 'On Hold';
$lang['ticket_status_db_5'] = 'Closed';
$lang['ticket_priority_db_1'] = 'Low';
$lang['ticket_priority_db_2'] = 'Medium';
$lang['ticket_priority_db_3'] = 'High';
$lang['customer_have_projects_by'] = 'Contains projects by status %s';
$lang['customer_have_proposals_by'] = 'Contains proposals by status %s';
$lang['do_not_redirect_payment'] = 'Do not redirect me to the payment processor';
$lang['project_tickets'] = 'Tickets';
$lang['invoice_report'] = 'Invoices Report';
$lang['payment_modes_report'] = 'Payment Modes (Transactions)';
$lang['customer_admins'] = 'Customer Admins';
$lang['assign_admin'] = 'Assign admin';
$lang['customer_admin_date_assigned'] = 'Date Assigned';
$lang['customer_admin_login_as_client_message'] = 'Hello %s. You are added as admin to this customer.';
$lang['ticket_form_validation_file_size'] = 'File size must be less than %s';
$lang['has_transactions_currency_base_change'] = 'Changing the base currency is possible only if there are no transactions recorded in that currency. Delete the transactions to change the base currency';
$lang['customers_sort_all'] = 'All';

# Version 1.1.9
$lang['use_recaptcha_customers_area'] = 'Allow recaptcha on customers area (Login/Register)';
$lang['project_marked_as_finished'] = 'Project completed';
$lang['project_status_updated'] = 'Project status updated';
$lang['remove_decimals_on_zero'] = 'Remove decimals on numbers/money with zero decimals (2.00 will become 2, 2.25 will stay 2.25)';
$lang['remove_tax_name_from_item_table'] = 'Remove the tax name from item table row';

# Version 1.2.0
$lang['not_billable_expenses_by_categories'] = 'Not billable expenses by categories';
$lang['billable_expenses_by_categories'] = 'Billable expenses by categories';
$lang['format_letter_size'] = 'A4 Landscape';
$lang['pdf_formats'] = 'Document formats';
$lang['swap_pdf_info'] = 'Swap Company/Customer Details (company details to right side, customer details to left side)';
$lang['invoice_estimate_pdf_text_color'] = 'Invoice/Estimate text color';
$lang['expenses_filter_by_categories'] = 'By Categories';
$lang['task_copy'] = 'Copy';
$lang['estimate_status'] = 'Status';
$lang['expenses_report_exclude_billable'] = 'Exclude Billable Expenses';
$lang['expenses_total'] = 'Total';
$lang['estimate_activity_added_attachment'] = 'Added attachment';
$lang['show_to_customer'] = 'Show to customer';
$lang['hide_from_customer'] = 'Hide from customer';
$lang['expenses_report_total'] = 'Total';
$lang['expenses_report'] = 'Expenses report';
$lang['expenses_report_tax'] = 'Tax';
$lang['expenses_report_total_tax'] = 'Total Tax';
$lang['expenses_detailed_report'] = 'Detailed Report';
$lang['expense_not_billable'] = 'Not Billable';
$lang['notification_settings'] = 'Notification settings';
$lang['staff_with_roles'] = 'Staff members with roles';
$lang['specific_staff_members'] = 'Specific Staff Members';
$lang['proposal_mark_as'] = 'Mark as %s';
$lang['kb_report_total_answers'] = 'Total';
$lang['ticket_message_edit'] = 'Edit';
$lang['invoice_files'] = 'Invoice Files';
$lang['estimate_files'] = 'Estimate Files';
$lang['proposal_files'] = 'Proposal Files';
$lang['invoices_awaiting_payment'] = 'Invoices Awaiting Payment';
$lang['tasks_not_finished'] = 'Tasks Not Finished';
$lang['outstanding_invoices'] = 'Outstanding Invoices';
$lang['past_due_invoices'] = 'Past Due Invoices';
$lang['paid_invoices'] = 'Paid Invoices';
$lang['invoice_estimate_year'] = 'Year';
$lang['no_results_text_search_dropdown'] = 'No Results Matched';
$lang['task_stats_logged_hours'] = 'Logged Hours';
$lang['leads_converted_to_client'] = 'Converted Leads';
$lang['task_assigned_from'] = 'This task is assigned to you by %s';
$lang['auto_check_for_new_notifications'] = 'Auto check for new notifications (Seconds - Set 0 to disable)';
$lang['recurring_ends_on'] = 'Ends On (Leave blank for never)';
$lang['new_note'] = 'New Note';
$lang['my_tickets_assigned'] = 'Тикеты назначены мне';
$lang['filter_by_assigned'] = 'By Assigned Member';
$lang['staff_stats_total_logged_time'] = 'Total Logged Time';
$lang['staff_stats_last_month_total_logged_time'] = 'Last Month Logged Time';
$lang['staff_stats_this_month_total_logged_time'] = 'This Month Logged Time';
$lang['staff_stats_last_week_total_logged_time'] = 'Last Week Logged Time';
$lang['staff_stats_this_week_total_logged_time'] = 'This Week Logged Time';
// Dont change this becuse are translated before for the projects timesheets and now are only used for readability.
$lang['timesheet_user'] = $lang['project_timesheet_user'];
$lang['timesheet_start_time'] = $lang['project_timesheet_start_time'];
$lang['timesheet_end_time'] = $lang['project_timesheet_end_time'];
$lang['timesheet_time_spend'] = $lang['project_timesheet_time_spend'];
$lang['task_timesheets'] = $lang['project_timesheets'];
$lang['task_log_time_start'] = $lang['project_timesheet_start_time'];
$lang['task_log_time_end'] = $lang['project_timesheet_end_time'];
$lang['task_single_log_user'] = $lang['project_timesheet_user'];

# Version 1.2.2
$lang['milestone_description'] = 'Description';
$lang['description_visible_to_customer'] = 'Show description to customer';
$lang['upcoming_tasks'] = 'Upcoming Tasks';
$lang['paymentmethod_two_checkout_account_number'] = 'Account Number (Seller ID)';
$lang['paymentmethod_two_checkout_private_key'] = 'Private Key';
$lang['paymentmethod_two_checkout_publishable_key'] = 'Publishable Key';
$lang['payment_credit_card_number'] = 'Card Number';
$lang['payment_credit_card_expiration_date'] = 'Expiration Date';
$lang['payment_billing_email'] = 'Email';
$lang['payment_billing_name'] = 'Billing Name';
$lang['submit_payment'] = 'Submit Payment';
$lang['2checkout_notice_payment'] = 'Credit card details are processed via secure token provided from 2Checkout';
$lang['2checkout_usage_notice'] = 'SSL is required if you\'re using the 2Checkout payment API. It is required to safely call the tokenization and authorizations. The system will function without SSL, however, this will place you out of compliance, which risks deactivation of your API permissions.';
$lang['custom_field_disallow_customer_to_edit'] = 'Disallow customer to edit this field';
$lang['project_due_notice'] = 'This project is overdue by %s days';
$lang['not_lead_added_attachment'] = 'added new attachment to lead %s';
$lang['lead_note_date_added'] = 'Note added: %s';
$lang['recurring_custom'] = 'Custom';
// Dont translate these, only added for better readibility already translated for the expenses custom recurring feature.
$lang['invoice_recuring_months'] = $lang['expense_recuring_months'];
$lang['invoice_recuring_years'] = $lang['expense_recuring_years'];
$lang['invoice_recuring_days'] = $lang['expense_recuring_days'];
$lang['invoice_recuring_weeks'] = $lang['expense_recuring_weeks'];

# Version 1.2.4
$lang['document_direction'] = 'Direction';
$lang['notify_project_members_status_change'] = 'Notify project members that project status is changed';
$lang['not_project_status_updated'] = 'Project status updated from %s to %s';
$lang['ticket_not_found'] = 'Ticket not found';
$lang['project_not_found'] = 'Project not found';
$lang['export_project_data'] = 'Export project data';
$lang['total_project_members'] = 'Total Project Members';
$lang['total_project_files'] = 'Files attached';
$lang['total_project_discussions_created'] = 'Discussions created';
$lang['project_member'] = 'Member';
$lang['total_project_discussions_comments'] = 'Total discussion comments';
$lang['staff_total_task_assigned'] = 'Total tasks assigned';
$lang['staff_total_comments_on_tasks'] = 'Comments on tasks';
$lang['project_members_overview'] = 'Project members overview';
$lang['project_milestones_overview'] = 'Milestones overview';
$lang['total_tasks_in_milestones'] = 'Total tasks assigned';
$lang['total_task_members_assigned'] = 'Total members assigned';
$lang['total_task_members_followers'] = 'Total followers';
$lang['total_milestones'] = 'Total milestones';
$lang['total_project_worked_days'] = 'Total days worked';
$lang['finance_overview'] = 'Finance Overview';
$lang['project_custom_fields'] = 'Custom fields';
$lang['total_tickets_related_to_project'] = 'Total tickets linked to project';
$lang['projects_total_invoices_created'] = 'Total invoices created';
$lang['total_invoiced_amount'] = 'Total invoices created';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'Do not send invoice payment recorded email to customer contacts';
$lang['no_preview_available_for_file'] = 'No preview available for this file.';
$lang['project_activity_deleted_file_discussion_comment'] = 'File discussion comment deleted';
$lang['file_not_found'] = 'File not found';
$lang['email_template_discussion_info'] = 'This template is used for both project discussion comments emails. (files discussions and regular discussions)';
$lang['format_a4_portrait_size'] = 'Portrait';
$lang['only_show_contact_tickets'] = 'In customer profile only show tickets related to the logged in contact (Primary contact not applied)';
$lang['cancel_overdue_reminders_invoice'] = 'Prevent sending overdue reminders for this invoice';
$lang['customer_shipping_address_notice'] = 'Do not fill shipping address information if you won\'t use shipping address on customer invoices';
$lang['timesheets_overview'] = 'Timesheets overview';
$lang['invoice_status_draft'] = 'Draft';
$lang['save_as_draft'] = 'Save as Draft';
$lang['convert_and_save_as_draft'] = 'Convert and save as draft';
$lang['convert'] = 'Convert';
$lang['exclude_invoices_draft_from_client_area'] = 'Exclude invoices with draft status from customers area';
$lang['invoice_draft_status_info'] = 'This invoice is with status Draft, status will be auto changed when you send the invoice to the customer or mark as sent.';
$lang['task_info'] = 'Task Info';
$lang['recurring_tasks'] = 'Recurring';
// Dont translate these, already translated
$lang['task_repeat_every'] = $lang['expense_repeat_every'];
$lang['task_recuring_months'] = $lang['expense_recuring_months'];
$lang['task_recuring_years'] = $lang['expense_recuring_years'];
$lang['task_recuring_days'] = $lang['expense_recuring_days'];
$lang['task_recuring_weeks'] = $lang['expense_recuring_weeks'];
$lang['todays_tasks'] = 'Today\'s tasks';
$lang['payment_mode_invoices_only'] = 'Invoices Only';
$lang['payment_mode_expenses_only'] = 'Expenses Only';
$lang['task_no_checklist_items_found'] = 'Checklist items not found for this task';
$lang['task_no_description'] = 'No description for this task';
$lang['expenses_reminders'] = 'Reminders';
$lang['expense_set_reminder_title'] = 'Set expense reminder';
$lang['calendar_expense_reminder'] = 'Expense Reminder';
$lang['recurring_task'] = 'Recurring Task';
$lang['disable_email_from_being_sent'] = 'Disable this email from being sent';
$lang['not_sent_indicator'] =  'Not Sent';
$lang['proposal_status_revised'] =  'Revised';
$lang['customer_currency_change_notice'] =  'If the customer use other currency then the base currency make sure you select the appropriate currency for this customer. Changing the currency is not possible after transactions are recorded.';
$lang['click_to_add_content'] =  'Click here to add content';
$lang['related_to_project'] =  'This %s is related to %s: %s';
$lang['back_to_lead'] =  'Back to lead';
$lang['add_task_timer_started_warning'] =  'Stop current started timer for this task to be able to add new timer manually.';
$lang['sending_email_contact_permissions_warning'] =  'Failed to auto select customer contacts. Please make sure that the customer have associated contacts with permission %s';

# Version 1.2.6
$lang['currently_supported_currencies'] = 'Currently supported currencies';
$lang['authorize_notice'] = 'SSL is required if you\'re using the Authorize.Net AIM payment API. Authorize.net only supports 1 currency per account. Make sure you add only 1 currency associated with your Authorize account in the currencies field.';
$lang['settings_paymentmethod_developer_mode'] = 'Developer Mode';
$lang['payment_cardholder_name'] = 'Cardholder\'s Name';
$lang['settings_paymentmethod_authorize_api_login_id'] =  'API Login ID';
$lang['settings_paymentmethod_mollie_api_key'] =  'API Key';
$lang['settings_paymentmethod_authorize_api_transaction_key'] =  'API Transaction ID';
$lang['settings_paymentmethod_authorize_secret_key'] =  'Secret Key';
$lang['leads_report_converted_notice'] =  'Only leads that belongs in the default status Client will be taken as converted leads, if the leads belongs to the default status client and its not converted to customer will be still counted as converted lead';
$lang['payment_method'] = 'Payment Method';
$lang['payment_method_info'] = 'Some payment gateways support different/multiple payment methods like Credit Card, PayPal, Bank.';

# Version 1.2.7
$lang['dropbox_app_key'] = 'Dropbox APP Key';
$lang['project_invoice_select_all_expenses'] = 'Select all expenses';
$lang['role_update_staff_permissions'] = 'Update all staff members permissions that are using this role';
$lang['customer_active'] = 'Active';
$lang['note_updated_successfuly'] = 'Note updated successfully';
$lang['update_note'] = 'Update note';
$lang['update_comment'] = 'Update comment';
$lang['comment_updated_successfuly'] = 'Comment updated successfully';
$lang['staff_send_welcome_email'] = 'Send welcome email';
$lang['proposal_warning_email_change'] = 'Email changed for %s. This %s is linked to proposal/s. Do you want to update all proposals emails linked to %s?';
$lang['update_proposal_email_yes'] = 'Yes update all linked emails.';
$lang['update_proposal_email_no'] = 'No, i will update manually.';
$lang['proposals_emails_updated'] = 'All proposals emails linked to this %s updated to %s';
$lang['custom_field_company'] = 'Company';
$lang['actions'] = 'Actions';
$lang['project_mark_as'] = 'Mark as %s';
$lang['todo_edit_title'] = 'Edit todo item';
$lang['additional_action_required'] = 'Additional action required!';
$lang['project_mark_tasks_finished_confirm'] = 'Confirm';
$lang['project_marked_as_success'] = 'Project marked as %s successfully';
$lang['project_marked_as_failed'] = 'Failed to mark project as %s';
$lang['auto_assign_customer_admin_after_lead_convert'] = 'Auto assign as admin to customer after convert';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'If this option is set to YES the staff member that converted lead to customer will be auto assigned as customer admin. NOTE: This option will apply only on staff members that do not have permission for customers VIEW';
$lang['auto_close_tickets_disable'] = 'Set 0 to disable';
$lang['task_checklist_item_completed_by'] = 'Completed by %s';
$lang['staff_email_signature_help'] = 'If empty default email signature from settings will be used';
$lang['customer_sales'] = 'Sales';
$lang['default_task_priority'] = 'Default Priority';
$lang['project_send_created_email'] = 'Send project created email';
$lang['survey_send_to_lists'] = 'Survey send lists';
$lang['survey_send_notice'] = 'Emails will be send via CRON JOB per hour.';
$lang['view_permission_auto_checked'] = 'VIEW permission auto checked. You need to select VIEW permission if you want to use the EDIT, CREATE and DELETE properly. EDIT, CREATE, DELETE cant be used without VIEW because VIEW is global permission and the user won\'t be able to open the data and perform the actions.';
$lang['custom_field_company_info'] = 'Edit custom fields for company in Setup->Settings->Company';

# Version 1.2.8
$lang['show_transactions_on_invoice_pdf'] = 'Show invoice payments (transactions) on PDF';
$lang['bulk_actions'] = 'Bulk Actions';
$lang['additional_filters'] = 'Additional Filters';
$lang['expenses_available_to_bill'] = 'Expenses available to bill';
$lang['bulk_action_customers_groups_warning'] = 'If you do not select any group all groups assigned to the selected customers will be removed.';
$lang['customer_attachments_show_in_customers_area'] = 'Show to customers area';
$lang['customer_attachments_show_notice'] = 'Only files uploaded from customer profile have ability to show/hide in customers area.';
$lang['customer_profile_files'] = 'Files';
$lang['no_files_found'] = 'No Files Found';
$lang['survey_customers_all'] = 'All Customers';
$lang['custom_field_column'] = 'Grid (Bootstrap Column eq. 12) - Max is 12';
$lang['task_status'] = 'Status';
$lang['task_status_1'] = 'Not Started';
$lang['task_status_2'] = 'Awaiting Feedback';
$lang['task_status_3'] = 'Testing';
$lang['task_status_4'] = 'In Progress';
$lang['task_status_5'] = 'Complete';
$lang['task_mark_as'] = 'Mark as %s';
$lang['task_marked_as_success'] = 'Task marked as %s successfully';
$lang['task_drag_drop_notice'] = 'Drag & Drop is used only to easily change %s. The order won\'t be applied for this area.';
$lang['search_tasks'] = 'Search Tasks';
$lang['tasks_kanban_limit'] = 'Limit tasks kan ban rows per status';
$lang['show_on_invoice_on_pdf'] = 'Show %s on Invoice PDF';
$lang['show_pay_link_to_invoice_pdf'] = 'Show Pay Invoice link to PDF (Not applied if invoice status is Cancelled)';
$lang['no_leads_found'] = 'No Leads Found';
$lang['created_today'] = 'Created Today';
$lang['total_tasks_deleted'] = 'Total Tasks Deleted: %s';
$lang['total_tickets_delete'] = 'Total Tickets Deleted: %s';
$lang['total_tickets_delete'] = 'Total Tickets Deleted: %s';
$lang['format_letter_portrait'] = 'Letter Portrait';
$lang['format_letter_landscape'] = 'Letter Landscape';
$lang['period_datepicker'] = 'Period';
$lang['total_by_hourly_rate'] = 'Total By Hourly Rate';
$lang['staff_hourly_rate'] = $lang['task_hourly_rate'];
// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help'] = 'eq. Item TAX 15&#37; will be shown as 15&#37; without the tax name (Not applied if multiple taxes with the same name and tax percent found for item)';
$lang['back_to_project'] = 'Back to Project';
$lang['view_kanban'] = 'View Kan Ban';
$lang['invoice_is_overdue'] = 'This invoice is overdue by %s days';

# Version 1.2.9
$lang['time_decimal'] = 'Time (decimal)';
$lang['time_h'] = 'Time (h)';
$lang['proposal_number_prefix'] = 'Proposal Number Prefix';
$lang['settings_number_padding_prefix'] = 'Number padding zero\'s for prefix formats <br /> <small>eq. If this value is 3 the number will be formated: 005 or 025</small>';
$lang['this_week_payments'] = 'This Week Payments';
$lang['last_week_payments'] = 'Last Week Payments';
$lang['not_published_new_post'] = 'published new post';
$lang['expense_name'] = 'Name';
$lang['expense_name_help'] = 'For personal usage';
$lang['adjustments'] = 'Adjustments';
$lang['tax_breakdown'] = 'Tax Breakdown';
$lang['payments_received'] = 'Payments Received';
$lang['not_lead_activity_created_proposal'] = 'Created new proposal - %s';
$lang['lead_title'] = 'Position';
$lang['lead_address'] = 'Address';
$lang['lead_city'] = 'City';
$lang['lead_state'] = 'State';
$lang['lead_country'] = 'Country';
$lang['lead_zip'] = 'Zip Code';
$lang['lead_is_public_yes'] = 'Yes';
$lang['lead_is_public_no'] = 'No';
$lang['lead_info'] = 'Lead Information';
$lang['lead_general_info'] = 'General Information';
$lang['lead_latest_activity'] = 'Latest Activity';
$lang['item_description_new_lines_notice'] = 'New lines are not supported for item description. Use the item long description instead.';
$lang['estimates_report'] = 'Estimates Report';
$lang['confirm'] = 'Confirm';
$lang['delete_staff'] = 'Delete Staff Member';
$lang['delete_staff_info'] = 'Some data for this staff member needs to be transfered to another user. Please select user where you want to transfer the data.';
$lang['estimate_items'] = 'Estimate Items';
$lang['no_proposals_found'] = 'No Proposals Found';
$lang['no_estimates_found'] = 'No Estimates Found';
$lang['pipeline_limit_status'] = 'Pipeline limit per status';
$lang['settings_update'] = 'System Update';
$lang['purchase_key'] = 'Purchase Key';
$lang['update_now'] = 'Update Now';
$lang['update_available'] = 'An update is available';
$lang['latest_version'] = 'Latest Version';
$lang['your_version'] = 'Your Version';
$lang['using_latest_version'] = 'You are using the latest version';
$lang['mark_as_active'] = 'Mark as active';
$lang['customer_inactive_message'] = 'This is inactive customer profile and some features may be disabled';
$lang['active_customers'] = 'Active Customers';
$lang['inactive_active_customers'] = 'Inactive Customers';
$lang['include_proposal_items_merge_field_help'] = 'Include proposal items with merge field anywhere in proposal content as %s';
$lang['all_data_synced_successfuly'] = 'All data synced successfully';
$lang['sync_now'] = 'Sync Now';
$lang['sync_data'] = 'Sync Data';
$lang['sync_proposals_up_to_date'] = 'All proposals are up to date, nothing to sync';
$lang['proposal_sync_1_info'] = 'All proposal data is stored separately for each proposal after creation. Updating the %s info won\'t affect previous created proposals for this %s.';
$lang['proposal_sync_2_info'] = 'If you recently updated your %s info you can sync all new data to associated proposals. Here is a list of fields you can sync.';

# Version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Include additional details to item long description taken from this expense.';

# Version 1.4.0
$lang['calendar_events_limit'] = 'Calendar Events Limit (Month and Week View)';
$lang['show_page_number_on_pdf'] = 'Show page number on PDF';
$lang['customer_active_inactive_help'] = 'Won\'t be shown in dropdowns when creating new records';
$lang['item_groups'] = 'Groups';
$lang['item_group'] = 'Item Group';
$lang['item_group_name'] = 'Group Name';
$lang['new_item_group'] = 'New Group';
$lang['show_setup_menu_item_only_on_hover'] = 'Show setup menu item only when hover with mouse on main sidebar area';
$lang['internal_article'] = 'Internal Article';
$lang['expenses_created_from_this_recurring_expense'] = 'Created expenses from this recurring expense';
$lang['convert_to_task'] = 'Convert To Task';
$lang['next_invoice_date'] = 'Next Invoice Date: %s';
$lang['next_expense_date'] = 'Next Expense Date: %s';
$lang['invoice_recurring_from'] = 'This invoice is created from recurring invoice with number: %s';
$lang['expense_recurring_from'] = 'This expense is created from the following recurring expense: %s';
$lang['child_invoices'] = 'Child Invoices';
$lang['child_expenses'] = 'Child Expenses';
$lang['no_announcements'] = 'No Announcements';
$lang['unit'] = 'Unit';
$lang['permission_view_own'] = 'View (Own)';
$lang['permission_global'] = 'Global';
$lang['permission_customers_based_on_admins'] = 'Based on customer admins';
$lang['permission_payments_based_on_invoices'] = 'Based on invoices VIEW (Own) permission';
$lang['permission_projects_based_on_assignee'] = 'If staff member do not have permission VIEW (Global) will be shown only projects where staff member is added as project member.';
$lang['permission_tasks_based_on_assignee'] = 'If staff member do not have permission VIEW (Global) will be shown only tasks where staff member is follower,assigned, task is public or in Setup->Settings->Tasks-> Allow all staff to see all tasks related to projects is set to YES when task is linked to project.';
$lang['settings_paymentmethod_default_selected_on_invoice'] = 'Selected by default on invoice';
$lang['paymentmethod_braintree_merchant_id'] = 'Merchant ID';
$lang['paymentmethod_braintree_private_key'] = 'Private Key';
$lang['paymentmethod_braintree_public_key'] = 'Public Key';
$lang['company_requires_vat_number_field'] = 'Company requires the usage of the VAT Number field';
$lang['no_company_view_profile'] = 'Person - View Profile';
$lang['company_is_required'] = 'Company field is required?';
$lang['estimate_invoiced'] = 'Invoiced';
$lang['file_date_uploaded'] = 'Date Uploaded';
$lang['allow_contact_to_delete_files'] = 'Allow contacts to delete own files uploaded from customers area';
$lang['file'] = 'File';
$lang['customer_contact_person_only_one_allowed'] = 'Only 1 contact is allowed when the company field is not filled. The system will cast this customer as person';
$lang['web_to_lead'] = 'Веб для Лидов';
$lang['web_to_lead_form'] = 'Веб форма для Лидов';
$lang['new_form'] = 'New Form';
$lang['form_name'] = 'Form Name';
$lang['cf_option_in_use'] = 'An option you removed is in use and cant be removed. The option is auto appended to the existing options.';
$lang['form_builder'] = 'Form Builder';
$lang['form_informations'] = 'Form Informations & Setup';
$lang['form_builder_create_form_first'] = 'Create form first to be able to use the form builder.';
$lang['notify_assigned_user'] = 'Responsible person';
$lang['form_recaptcha'] = 'Use Google Recaptcha';
$lang['form_lang_validation'] = 'Language';
$lang['form_lang_validation_help'] = 'For Validation Messages';
$lang['form_btn_submit_text'] = 'Submit button text';
$lang['form_success_submit_msg'] = 'Message to show after form is succcesfuly submitted';
$lang['total_submissions'] = 'Total Submissions';
$lang['form_integration_code'] = 'Integration Code';
$lang['not_lead_imported_from_form'] = 'New Lead Imported from Web to Lead Form - %s';
$lang['not_lead_activity_log_attachment'] = 'Attachment Imported from form - %s';
$lang['form_integration_code_help'] = 'Copy & Paste the code anywhere in your site to show the form, additionaly you can adjust the width and height px to fit for your website.';
$lang['invoice_not_found'] = 'Invoice not found';
$lang['estimate_not_found'] = 'Estimate not found';
$lang['expense_not_found'] = 'Expense not found';
$lang['proposal_not_found'] = 'Proposal not found';
$lang['new_task_assigned_non_user'] = 'New task is assigned to you - %s';
$lang['no_child_found'] = 'No Child %s Found';
$lang['company_vat_number'] = 'VAT Number';
$lang['not_lead_assigned_from_form'] = 'New lead is assigned to you';
$lang['not_lead_activity_assigned_from_form'] = 'Lead assigned to %s';
$lang['form_allow_duplicate'] = 'Allow duplicate %s to be inserted into database?';
$lang['track_duplicate_by_field'] = 'Prevent duplicate on field';
$lang['and_track_duplicate_by_field'] = '+ field (leave blank to track duplicates only by 1 field)';
$lang['create_the_duplicate_form_data_as_task'] = 'Create duplicate %s data as task and assign to responsible staff member';
$lang['create_the_duplicate_form_data_as_task_help'] = 'Used for further review on the submission and take the necessary action';
$lang['currently_selected'] = 'Currently Selected';
$lang['search_ajax_empty'] = 'Select and begin typing';
$lang['search_ajax_placeholder'] = 'Type to search...';
$lang['search_ajax_searching'] = 'Searching...';
$lang['search_ajax_initialized'] = 'Start typing to search';
$lang['lead_description'] = 'Description';
$lang['lead_website'] = 'Website';
$lang['invoice_activity_auto_converted_from_estimate'] = 'Invoice auto created from estimate with number %s';
$lang['hour_of_day_perform_auto_operations'] = 'Hour of day to perform automatic operations';
$lang['hour_of_day_perform_auto_operations_format'] = '24 hours format eq. 9 for 9am or 15 for 3pm.';
$lang['inv_hour_of_day_perform_auto_operations_help'] = 'Used for recurring invoices, overdue notices etc..';
$lang['use_minified_files'] = 'Use minified files version for css and js (only system files)';

# Version 1.5.0
$lang['logo_favicon_changed_notice'] = 'Logo or Favicon change detected. If you still see the original CRM logo try to clear your browser cache';
$lang['kb_search_articles'] = 'Search Knowledge Base Articles';
$lang['kb_search'] = 'Search';
$lang['have_a_question'] = 'Have a question?';
$lang['card_expiration_year'] = 'Expiration Year';
$lang['card_expiration_month'] = 'Месяц окончания срока действия';
$lang['client_website'] = 'Website';
$lang['search_project_members'] = 'Search Project Members...';
$lang['cf_translate_input_link_title'] = 'Title';
$lang['cf_translate_input_link_url'] = 'URL';
$lang['cf_translate_input_link_tip'] = 'Click here to add link';
$lang['task_edit_delte_timesheet_notice'] = 'Timesheet task is %s, you cant %s the timesheet.';
$lang['department_username'] = 'IMAP Username';
$lang['department_username_help'] = 'Only fill this field if your IMAP server use username to login instead email address. Note that you will still need to add email address.';
$lang['total_tickets_deleted'] = 'Total tickets deleted: %s';

# Version 1.5.1
$lang['ticket_linked_to_project'] = 'Этот тикет связан с проектом: %s';
$lang['only_own_files_contacts'] = 'В контактах отображаются только собственные файлы, загруженные в клиентскую область (файлы, загруженные в профиль клиента)';
$lang['only_own_files_contacts_help'] = 'Если вы предоставите файл вручную из профиля клиента другим контактам, он сможет просмотреть файл.';
$lang['share_file_with'] = 'Share File With';
$lang['file_share_visibility_notice'] = 'This file is not shared with contacts, toggle visibility again to reload';
$lang['share_file_with_show'] = 'This file is shared with: %s';
$lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = 'Allow primary contact to view/edit billing & shipping details';
$lang['estimate_due_after'] = 'Estimate Due After (days)';

# Version 1.6.0
$lang['my_timesheets'] = 'My Timesheets';
$lang['today'] = 'Today';
$lang['open_in_dropbox'] = 'Open In Dropbox';
$lang['show_primary_contact'] = 'Показывать основному контакту %s';
$lang['view_members_timesheets'] = 'View all timesheets';
$lang['priority'] = 'Priority';
$lang['fetch_from_google'] = 'Fetch from google';
$lang['customer_fetch_lat_lng_usage'] = 'Fill address, city and country before fetching to get best result.';
$lang['g_search_address_not_found'] = 'The address couldn\'t be found, please try again';
$lang['proposals_report'] = 'Proposals Report';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'If staff member don\'t have permission for customers VIEW only will be able to create new tickets from admin area to customer contacts where is assigned as customer admin.';
$lang['staff_members_open_tickets_to_all_contacts'] = 'Allow staff members to open tickets to all contacts?';
$lang['charts_based_report'] = 'Charts Based Report';
$lang['delete_backups_older_then'] = 'Auto delete backups older then X days (set 0 to disable)';
$lang['responsible_admin'] = 'Responsible admin';
$lang['tags'] = 'Tags';
$lang['tag'] = 'Tag';
$lang['customer_map_notice'] = 'Add longitude and latitude in the customer profile to show the map here';
$lang['default_view'] = 'Default View';
$lang['day'] = 'Day';
$lang['agenda'] = 'Agenda';
$lang['timesheet_tags'] = 'Timesheet Tags';
$lang['show_more'] = 'Show more';
$lang['show_less'] = 'Show less';
$lang['project_completed_date'] = 'Completed Date';
$lang['language'] = 'Language';
$lang['this_week'] = 'This Week';
$lang['last_week'] = 'Last Week';
$lang['this_month'] = 'This Month';
$lang['last_month'] = 'Last Month';
$lang['no_description_project'] = 'No description for this project';
$lang['sales_string'] = 'Sales';
$lang['no_project_members'] = 'No members for this project';
$lang['search_by_tags'] = 'Use # + tagname to search by tags';
$lang['project_status_5'] = 'Отменено';
